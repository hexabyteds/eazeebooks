<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 #------------------------------------    
    # Author: Bdtask Ltd
    # Author link: https://www.bdtask.com/
    # Dynamic style php file
    # Developed by :Isahaq
    #------------------------------------    

class Bank extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
  
        $this->load->model(array(
            'bank_model')); 
        if (! $this->session->userdata('isLogIn'))
            redirect('login');
          
    }
   


    public function bdtask_bank_form($id = null)
    {
        $data['title'] = display('add_new_bank');
        #-------------------------------#
        $this->form_validation->set_rules('bank_name',display('bank_name'),'required|max_length[200]');
        $this->form_validation->set_rules('ac_name', display('ac_name') ,'required|max_length[100]');
        $this->form_validation->set_rules('ac_no', display('ac_no') ,'required|max_length[25]');
          $signature_pic = $this->fileupload->do_upload(
            './my-assets/image/bank/', 
            'signature_pic'
        );

       $check_exist_bank = $this->db->select('*')->from('acc_coa')->where('HeadName',$this->input->post('bank_name',TRUE))->get()->num_rows();
       if(empty($id)){
       if($check_exist_bank > 0){
        $this->session->set_flashdata('exception', display('already_exist'));
        redirect("bank_form");
       }  
       } 
        $old_pic = $this->input->post('old_pic',TRUE);

              $coa = $this->headcode();
           if($coa->HeadCode!=NULL){
                $headcode=$coa->HeadCode+1;
           }else{
                $headcode="102010201";
            }

        $createby   = $this->session->userdata('id');
        $createdate = date('Y-m-d H:i:s');
        $bank_id    = (!empty($id)?$this->input->post('bank_id',true):$this->occational->generator(10));
        #-------------------------------#
        $data['bank'] = (object)$postData = [
            'id'            => $id,
            'bank_id'       => $bank_id,
            'bank_name'     => $this->input->post('bank_name',TRUE),
            'ac_name'       => $this->input->post('ac_name',TRUE),
            'ac_number'     => $this->input->post('ac_no',TRUE),
            'branch'        => $this->input->post('branch',TRUE),
            'signature_pic' => (!empty($signature_pic) ? $signature_pic : $old_pic),
            'status'        => 1
        ]; 

            $bank_coa = [
             'HeadCode'         => $headcode,
             'HeadName'         => $this->input->post('bank_name',TRUE),
             'PHeadName'        => 'Cash At Bank',
             'HeadLevel'        => '4',
             'IsActive'         => '1',
             'IsTransaction'    => '1',
             'IsGL'             => '0',
             'HeadType'         => 'A',
             'IsBudget'         => '0',
             'IsDepreciation'   => '0',
             'DepreciationRate' => '0',
             'CreateBy'         => $createby,
             'CreateDate'       => $createdate,
        ];
        #-------------------------------#
        if ($this->form_validation->run() === true) {
            if (empty($id)) {
                if ($this->bank_model->create_bank($postData)) {
                  $this->db->insert('acc_coa',$bank_coa);
                   $this->session->set_flashdata('message', display('save_successfully'));
                } else {
                 $this->session->set_flashdata('exception', display('please_try_again'));
                }
                redirect("bank_list");
            } else {
                if ($this->bank_model->update_bank($postData)) {
                $up_coa = array(
                'HeadName' => $this->input->post('bank_name',TRUE),
                );
                $this->db->where('HeadName',$this->input->post('old_name',TRUE))
                         ->update('acc_coa',$up_coa);
       
                   $this->session->set_flashdata('message', display('update_successfully'));
                } else {
                  $this->session->set_flashdata('exception', display('please_try_again'));
                } 
                redirect("bank_list");
            }
            } else { 
              if(!empty($id)){
              $data['title']    = display('edit_bank');
              $data['bank']     = $this->bank_model->single_bank_data($id); }
              $data['module']   = "bank";  
              $data['page']     = "bank_form";  
              echo Modules::run('template/layout', $data); 
           
            } 
    }


       public function headcode(){
        $query=$this->db->query("SELECT MAX(HeadCode) as HeadCode FROM acc_coa WHERE HeadLevel='4' And HeadCode LIKE '1020102%'");
        return $query->row();

    }


        public function bdtask_bank_list() {
        $bank_list = $this->bank_model->get_bank_list();
        if (!empty($bank_list)) {
            foreach ($bank_list as $index => $value) {
                $bb = $this->bank_model->bank_balance($value['bank_name']);
                 $bank_list[$index]['balance'] = (!empty($bb[0]['balance'])?$bb[0]['balance']:0);
            }
        }
        $i = 0;
        if (!empty($bank_list)) {
            foreach ($bank_list as $k => $v) {
                $i++;
                $bank_list[$k]['sl'] = $i;
            }
        }
        $data = array(
            'title'      => display('bank_list'),
            'bank_lists' => $bank_list,
        );
        $data['module']   = "bank";  
        $data['page']     = "bank_list";  
        echo Modules::run('template/layout', $data); 
    }



    public function bank_delete($id = null){
      if ($this->bank_model->delete_bank($id)) {
            $this->session->set_flashdata('message',display('delete_successfully'));
        } else {
            $this->session->set_flashdata('exception',display('please_try_again'));
        }
       redirect($_SERVER['HTTP_REFERER']);
    }


   public function bdtask_bank_transaction(){
              $data['title']    = display('bank_transaction');
              $data['module']   = "bank";  
              $data['page']     = "bank_debit_credit_manage";  
              echo Modules::run('template/layout', $data); 
   }


     public function bank_debit_credit_manage_add() {

        if ($this->input->post('account_type',TRUE) == "Debit(+)") {
            $dr = $this->input->post('ammount',TRUE);
        } else {
            $cr = $this->input->post('ammount',TRUE);
        }
         $receive_by=$this->session->userdata('id');
        $receive_date=date('Y-m-d');
        $bankname = $this->db->select('bank_name')->from('bank_add')->where('bank_id',$this->input->post('bank_id'))->get()->row()->bank_name;
       $coaid = $this->db->select('HeadCode')->from('acc_coa')->where('HeadName',$bankname)->get()->row()->HeadCode;
       
        $coabanktransaction = array(
          'VNo'            =>  $this->input->post('withdraw_deposite_id',TRUE),
          'Vtype'          =>  'Bank Transaction',
          'VDate'          =>  $this->input->post('date',TRUE),
          'COAID'          =>  $coaid,
          'Narration'      =>  $this->input->post('description',TRUE),
          'Debit'          =>  (!empty($dr) ? $dr : 0),
          'Credit'         =>  (!empty($cr) ? $cr : 0),
          'IsPosted'       =>  1,
          'CreateBy'       =>  $receive_by,
          'CreateDate'     =>  date('Y-m-d H:i:s'),
          'IsAppove'       =>  1
        ); 

         $coacashtransaction = array(
          'VNo'            =>  $this->input->post('withdraw_deposite_id',TRUE),
          'Vtype'          =>  'Bank Transaction',
          'VDate'          =>  $this->input->post('date',TRUE),
          'COAID'          =>  1020101,
          'Narration'      =>  $this->input->post('description',TRUE),
          'Debit'          =>  (!empty($cr) ? $cr : 0),
          'Credit'         =>  (!empty($dr) ? $dr : 0),
          'IsPosted'       =>  1,
          'CreateBy'       =>  $receive_by,
          'CreateDate'     =>  date('Y-m-d H:i:s'),
          'IsAppove'       =>  1
        ); 
        $this->db->insert('acc_transaction',$coabanktransaction);
        $this->db->insert('acc_transaction',$coacashtransaction);
        $this->session->set_flashdata(array('message' => display('successfully_added')));
        redirect(base_url('bank_transaction'));
        
    }


        public function bank_ledger() {
        $bank_id       = $this->input->post('bank_id',TRUE);
        $from_date     = (!empty($this->input->post('from_date',TRUE))?$this->input->post('from_date',TRUE):date('Y-m-d'));
        $to_date       = (!empty($this->input->post('to_date',TRUE))?$this->input->post('to_date',TRUE):date('Y-m-d'));
        $bank_info     = $this->bank_model->bank_info($bank_id);
        $ledger        = $this->bank_model->bank_ledger($bank_info[0]['bank_name'],$from_date,$to_date);
        $total_ammount = 0;
        $total_credit  = 0;
        $total_debit   = 0;
        $balance       = 0;
        $total_debit   = 0;
        $total_credit  = 0;

        if (!empty($ledger)) {
            foreach ($ledger as $index => $value) {
                    $ledger[$index]['debit'] = $ledger[$index]['Debit'];
                    $total_debit += $ledger[$index]['debit'];
                    $ledger[$index]['balance'] = $balance + ($ledger[$index]['Debit'] - $ledger[$index]['Credit']);
                    $ledger[$index]['credit']  = $ledger[$index]['Credit'];
                    $total_credit += $ledger[$index]['credit'];
                     $balance = $ledger[$index]['balance'];
              
            }
        }
        $data = array(
            'title'        => display('bank_ledger'),
            'ledger'       => $ledger,
            'bank_info'    => $bank_info,
            'total_credit' => number_format($total_credit, 2, '.', ','),
            'from'         => $from_date,
            'to'           => $to_date,
            'bank_id'      => $bank_id,
            'total_debit'  => number_format($total_debit, 2, '.', ','),
            'balance'      => number_format($balance, 2, '.', ','),
        );

        $data['module']    = "bank";  
        $data['page']      = "bank_ledger";  
        echo Modules::run('template/layout', $data); 
    }
    
}

