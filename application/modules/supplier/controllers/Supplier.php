<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 #------------------------------------    
    # Author: Bdtask Ltd
    # Author link: https://www.bdtask.com/
    # Dynamic style php file
    # Developed by :Isahaq
    #------------------------------------    

class Supplier extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
  
        $this->load->model(array(
            'supplier_model')); 
        if (! $this->session->userdata('isLogIn'))
            redirect('login');
          
    }
    
    function index() {
        $data['title']      = display('supplier_list');
        $data['module']     = "supplier";
        $data['page']       = "supplier_list"; 
        $data["supplier_dropdown"] = $this->supplier_model->supplier_dropdown();
        $data['all_supplier'] = $this->supplier_model->allsupplier(); 
        echo modules::run('template/layout', $data);
    }


    public function bdtask_ChecksupplierList(){
        $postData = $this->input->post();
        $data     = $this->supplier_model->getsupplierList($postData);
        echo json_encode($data);
    }



  public function bdtask_form($id = null)
    {
        $data['title'] = display('add_supplier');
        #-------------------------------#
        $this->form_validation->set_rules('supplier_name',display('supplier_name'),'required|max_length[200]');
        $this->form_validation->set_rules('supplier_mobile', display('supplier_mobile') ,'max_length[20]');
        if(empty($id)){
        $this->form_validation->set_rules('supplier_email',display('email'),'max_length[100]|valid_email|is_unique[supplier_information.email_address]');
    }else{
        $this->form_validation->set_rules('supplier_email',display('email'),'max_length[100]|valid_email');
    }
        $this->form_validation->set_rules('contact',display('contact'),'max_length[200]');
        $this->form_validation->set_rules('phone',display('phone'),'max_length[20]');
        $this->form_validation->set_rules('city',display('city'),'max_length[100]'); 
        $this->form_validation->set_rules('state',display('state'),'max_length[100]');
        $this->form_validation->set_rules('zip',display('zip'),'max_length[30]');
        $this->form_validation->set_rules('country',display('country'),'max_length[100]');  
        $this->form_validation->set_rules('supplier_address',display('supplier_address'),'max_length[255]');
        $this->form_validation->set_rules('address2',display('address2'),'max_length[255]'); 
        
      
        #-------------------------------#
         
        $data['supplier'] = (object)$postData = [
            'supplier_id'      => $this->input->post('supplier_id',true),
            'supplier_name'    => $this->input->post('supplier_name',true),
            'mobile'           => $this->input->post('supplier_mobile', true),
            'emailnumber'      => $this->input->post('supplier_email', true),
            'email_address'    => $this->input->post('email_address', true),
            'contact'          => $this->input->post('contact', true),
            'phone'            => $this->input->post('phone', true),
            'fax'              => $this->input->post('fax', true), 
            'city'             => $this->input->post('city', true) ,
            'state'            => $this->input->post('state', true) ,
            'zip'              => $this->input->post('zip', true) ,
            'country'          => $this->input->post('country', true) ,
            'address'          => $this->input->post('supplier_address', true) ,
            'address2'         => $this->input->post('address2', true) ,
            'buiding_no'       => $this->input->post('buiding_no', true) ,
            'additional_number'=> $this->input->post('additional_number', true),
            'vat_number'       => $this->input->post('vat_number', true) ,
            'other_seller_id'  => $this->input->post('other_seller_id', true) ,
            'credit_limit'     => $this->input->post('credit_limit', true) ,
            'credit_days'      => $this->input->post('credit_days', true) ,
            'po_box'           => $this->input->post('po_box', true) ,
            'website_link'      => $this->input->post('website_link', true) ,
            'tax_treatment'    => $this->input->post('tax_treatment', true),
            'place_of_supply'  => $this->input->post('place_of_supply', true),
            'currency'         => $this->input->post('currency', true),
            'status'           => 1,
            
        ]; 
        #-------------------------------#
        if ($this->form_validation->run() === true) {

            #if empty $id then insert data
            if (empty($postData['supplier_id'])) {
                if ($this->supplier_model->create($postData)) {
                    #set success message
                    
                        $info['msg']    = display('save_successfully');
                        $info['status'] = 1;
                } else {
                    #set exception message
                    
                        $info['msg']    = display('please_try_again');
                        $info['status'] = 0;
                }
            } else {
                if ($this->supplier_model->update($postData)) {
                    #set success message
                    $info['msg']    = display('update_successfully');
                    $info['status'] = 1;
                } else {
                    #set exception message
                    $info['msg']    = display('please_try_again');
                    $info['status'] = 0;
                } 
            }
 
            echo json_encode($info);

        } else { 
            if(empty($this->input->post('supplier_name',true))){
            if(!empty($id)){
            $data['title']    = display('edit_supplier');
            $data['supplier'] = $this->supplier_model->singledata($id);  
            }
            $data['module']   = "supplier";  
            $data['page']     = "form";  
            echo Modules::run('template/layout', $data); 
        }else{

          $info['msg']    = validation_errors();
          $info['status'] = 0;
           echo json_encode($info);
        }
        } 
    }



    public function bdtask_delete($id) {
        if ($this->supplier_model->delete($id)) {
            echo display('delete_successfully');
        } else {
            display('please_try_again');
        }
    }

    public function supplier_search($id){
       $data["suppliers"] = $this->supplier_model->individual_info($id);
        $this->load->view('supplier_search', $data);
    }

    public function bdtask_supplier_ledger() {
   $data['title']    = display('supplier_ledger'); 
        #-------------------------------#       
        #
        #pagination starts
        #
    $config["base_url"]    = base_url('supplier_ledger');
    $config["total_rows"]  = $this->supplier_model->count_supplier_ledger();
    $config["per_page"]    = 10;
    $config["uri_segment"] = 2;
    $config["last_link"]   = "Last"; 
    $config["first_link"]  = "First"; 
    $config['next_link']   = 'Next';
    $config['prev_link']   = 'Prev';  
    $config['full_tag_open'] = "<ul class='pagination col-xs pull-right'>";
    $config['full_tag_close'] = "</ul>";
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
    $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
    $config['next_tag_open'] = "<li>";
    $config['next_tag_close'] = "</li>";
    $config['prev_tag_open'] = "<li>";
    $config['prev_tagl_close'] = "</li>";
    $config['first_tag_open'] = "<li>";
    $config['first_tagl_close'] = "</li>";
    $config['last_tag_open'] = "<li>";
    $config['last_tagl_close'] = "</li>";
    /* ends of bootstrap */
    $this->pagination->initialize($config);
    $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
    $data["ledgers"]  = $this->supplier_model->supplier_ledgerdata($config["per_page"], $page);
    $data["links"]    = $this->pagination->create_links();
    $data['supplier'] = $this->supplier_model->supplier_list_ledger();
    $data['supplier_name'] = '';
    $data['supplier_id'] = '';
    $data['address']  ='';
    $data['module']   = "supplier";
    $data['page']     = "supplier_ledger";   
    echo Modules::run('template/layout', $data); 
    }

    public function bdtask_supplier_ledgerData() {
    $start           = $this->input->post('from_date',true);
    $end             = $this->input->post('to_date',true);
    $supplier_id     = $this->input->post('supplier_id',true);
    $supplier_detail = $this->supplier_model->supplier_personal_data($supplier_id);
    $data['title']   = display('supplier_ledger');
    $data['supplier']= $this->supplier_model->supplier_list_ledger();
    $data["ledgers"] = $this->supplier_model->supplierledger_searchdata($supplier_id, $start, $end);
    $data['supplier_name'] = $supplier_detail[0]['supplier_name'];
    $data['supplier_id'] = $supplier_id;
    $data['address']  = $supplier_detail[0]['address'];
    $data['module']   = "supplier";
    $data["links"]    = '';
    $data['page']     = "supplier_ledger";   
    echo Modules::run('template/layout', $data); 
    }


    public function bdtask_supplier_advance() {
    $data['title'] = display('supplier_advance');    
    $data['supplier_list']= $this->supplier_model->supplier_list_advance();
    $data['module']= "supplier";
    $data['page']  = "supplier_advance";   
    echo Modules::run('template/layout', $data); 
    }

      public function insert_supplier_advance(){
        $advance_type = $this->input->post('type',TRUE);
        if($advance_type ==1){
            $dr = $this->input->post('amount',TRUE);
            $tp = 'd';
        }else{
            $cr = $this->input->post('amount',TRUE);
            $tp = 'c';
        }
            $createby=$this->session->userdata('id');
            $createdate=date('Y-m-d H:i:s');
            $transaction_id=$this->supplier_model->generator(10);
            $supplier_id = $this->input->post('supplier_id',TRUE);
            $supplierinfo = $this->db->select('*')->from('supplier_information')->where('supplier_id',$supplier_id)->get()->row();
    $headn = $supplier_id.'-'.$supplierinfo->supplier_name;
    $coainfo = $this->db->select('*')->from('acc_coa')->where('supplier_id',$supplier_id)->get()->row();
    $supplier_headcode = $coainfo->HeadCode;
              
                   $supplier_accledger = array(
      'VNo'            =>  $transaction_id,
      'Vtype'          =>  'Advance',
      'VDate'          =>  date("Y-m-d"),
      'COAID'          =>  $supplier_headcode,
      'Narration'      =>  'supplier Advance For  '.$supplierinfo->supplier_name,
      'Debit'          =>  (!empty($dr)?$dr:0),
      'Credit'         =>  (!empty($cr)?$cr:0),
      'IsPosted'       => 1,
      'CreateBy'       => $this->session->userdata('id'),
      'CreateDate'     => date('Y-m-d H:i:s'),
      'IsAppove'       => 1
    );
                         $cc = array(
      'VNo'            =>  $transaction_id,
      'Vtype'          =>  'Advance',
      'VDate'          =>  date("Y-m-d"),
      'COAID'          =>  1020101,
      'Narration'      =>  'Cash in Hand  For '.$supplierinfo->supplier_name.' Advance',
      'Debit'          =>  (!empty($dr)?$dr:0),
      'Credit'         =>  (!empty($cr)?$cr:0),
      'IsPosted'       =>  1,
      'CreateBy'       =>  $this->session->userdata('id'),
      'CreateDate'     =>  date('Y-m-d H:i:s'),
      'IsAppove'       =>  1
    ); 
                  
       $this->db->insert('acc_transaction',$supplier_accledger);
       $this->db->insert('acc_transaction',$cc);
       redirect(base_url('supplier_advance_receipt/'.$transaction_id.'/'.$supplier_id));

  }

  //supplier_advance_receipt
   public function supplier_advancercpt($receiptid=null,$supplier_id=null) {
    $data['title']         = display('advance_receipt'); 
    $supplier_id           = $this->uri->segment(3);
    $receiptdata           = $this->supplier_model->advance_details($receiptid,$supplier_id);
    $supplier_details      = $this->supplier_model->supplier_personal_data($supplier_id);
    $data['details']       = $receiptdata;
    $data['supplier_name'] = $supplier_details[0]['supplier_name'];
    $data['receipt_no']    = $receiptdata[0]['VNo'];
    $data['address']       = $supplier_details[0]['address'];
    $data['mobile']        = $supplier_details[0]['mobile'];
    $data['module']        = "supplier";
    $data['page']          = "supplier_advance_receipt";   
    echo Modules::run('template/layout', $data); 
    }

        public function bdtask_supplier_ledgerinfo($supplier_id) {
        $supplier_details = $this->supplier_model->supplier_personal_data($supplier_id);
        $supplier         = $this->supplier_model->supplier_list_advance();
        $ledgers          = $this->supplier_model->supplier_product_sale_info($supplier_id);

        $data = array(
            'title'           => display('supplier_ledger'),
            'ledgers'         => $ledgers,
            'supplier_id'     => $supplier_id,
            'supplier_name'   => $supplier_details[0]['supplier_name'],
            'address'         => $supplier_details[0]['address'],
            'supplier'        => $supplier,
            'links'           => '',
        );

    $data['module']    = "supplier";
    $data['page']      = "supplier_ledger";   
    echo Modules::run('template/layout', $data);
    }

}

