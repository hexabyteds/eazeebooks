<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 #------------------------------------    
    # Author: Bdtask Ltd
    # Author link: https://www.bdtask.com/
    # Dynamic style php file
    # Developed by :Isahaq
    #------------------------------------    

class Customer extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
  
        $this->load->model(array(
            'customer_model')); 
        if (! $this->session->userdata('isLogIn'))
            redirect('login');
          
    }
    
    function index() {
        $data['title']             = display('customer_list');
        $data['module']            = "customer";
        $data['page']              = "customer_list"; 
        $data["customer_dropdown"] = $this->customer_model->customer_dropdown();
        $data['all_customer']      = $this->customer_model->allcustomer(); 
        echo modules::run('template/layout', $data);
    }


    public function bdtask_CheckCustomerList(){
        $postData = $this->input->post();
        $data     = $this->customer_model->getCustomerList($postData);
        echo json_encode($data);
    }

     public function bdtask_credit_customer() {
        $data['title']             = display('credit_customer');
        $data['module']            = "customer";
        $data['page']              = "credit_customer"; 
        $data["customer_dropdown"] = $this->customer_model->bdtask_credit_customer_dropdown();
        $data['all_customer']      = $this->customer_model->bdtask_all_credit_customer(); 
        echo modules::run('template/layout', $data);
    }

     public function bdtask_CheckCreditCustomerList(){

        $postData = $this->input->post();
        $data = $this->customer_model->getCreditCustomerList($postData);
        echo json_encode($data);
    } 

    //Paid Customer list. The customer who will pay 100%.
    public function bdtask_paid_customer() {
        $data['title']             = display('paid_customer');
        $data['module']            = "customer";
        $data['page']              = "paid_customer"; 
        $data["customer_dropdown"] = $this->customer_model->bdtask_paid_customer_dropdown();
        $data['all_customer']      = $this->customer_model->bdtask_all_paid_customer(); 
        echo modules::run('template/layout', $data);
        
    }
    
     public function bdtask_CheckPaidCustomerList(){
        // GET data
        $postData = $this->input->post();
        $data = $this->customer_model->bdtask_getPaidCustomerList($postData);
        echo json_encode($data);
    } 

   
  public function bdtask_form($id = null)
    {
        $data['title'] = display('add_customer');
         
        #-------------------------------#
        $this->form_validation->set_rules('customer_name',display('customer_name'),'required|max_length[200]');
        $this->form_validation->set_rules('customer_mobile', display('customer_mobile') ,'max_length[20]');
        if(empty($id)){
        $this->form_validation->set_rules('customer_email',display('email'),'max_length[100]|valid_email|is_unique[customer_information.customer_email]');
    }else{
        $this->form_validation->set_rules('customer_email',display('email'),'max_length[100]|valid_email');
    }
        $this->form_validation->set_rules('contact',display('contact'),'max_length[200]');
        $this->form_validation->set_rules('phone',display('phone'),'max_length[20]');
        $this->form_validation->set_rules('city',display('city'),'max_length[100]'); 
        $this->form_validation->set_rules('state',display('state'),'max_length[100]');
        $this->form_validation->set_rules('zip',display('zip'),'max_length[30]');
        $this->form_validation->set_rules('country',display('country'),'max_length[100]');  
        $this->form_validation->set_rules('customer_address',display('customer_address'),'max_length[255]');
        $this->form_validation->set_rules('address2',display('address2'),'max_length[255]'); 
        #-------------------------------#
        $data['customer'] = (object)$postData = [
            'customer_id'      => $this->input->post('customer_id',true),
            'customer_name'    => $this->input->post('customer_name',true),
            'customer_mobile'  => $this->input->post('customer_mobile', true),
            'customer_email'   => $this->input->post('customer_email', true),
            'email_address'    => $this->input->post('email_address', true),
            'contact'          => $this->input->post('contact', true),
            'phone'            => $this->input->post('phone', true),
            'fax'              => $this->input->post('fax', true), 
            'city'             => $this->input->post('city', true) ,
            'state'            => $this->input->post('state', true) ,
            'zip'              => $this->input->post('zip', true) ,
            'country'          => $this->input->post('country', true) ,
            'customer_address' => $this->input->post('customer_address', true) ,
            'credit_limit'     => $this->input->post('credit_limit', true) ,
            'credit_days'      => $this->input->post('credit_days', true) ,
            'po_box'           => $this->input->post('po_box', true) ,
            'website_link'     => $this->input->post('website_link', true) ,
            'tax_treatment'    => $this->input->post('tax_treatment', true),
            'place_of_supply'  => $this->input->post('place_of_supply', true),
            'currency'         => $this->input->post('currency', true),
            'address2'         => $this->input->post('address2', true) ,
            'additional_number'=> $this->input->post('additional_number', true),
            'vat_number'       => $this->input->post('vat_number', true) ,
            'status'           => 1,
            'create_by'        => $this->session->userdata('id') ,
            
        ]; 
       
        #-------------------------------#
        if ($this->form_validation->run() === true) {
            #if empty $id then insert data
            if (empty($postData['customer_id'])) {
                if ($this->customer_model->create($postData)) {
                    #set success message
                        $info['msg']    = display('save_successfully');
                        $info['status'] = 1;
                } else {
                    #set exception message
                        $info['msg']    = display('please_try_again');
                        $info['status'] = 0;
                }
            } else {
                if ($this->customer_model->update($postData)) {
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
            if(empty($this->input->post('customer_name',true))){
            if(!empty($id)){
            $data['title']    = display('edit_customer');
            $data['customer'] = $this->customer_model->singledata($id);  
            }
            $data['module']   = "customer";  
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
        if ($this->customer_model->delete($id)) {
            echo display('delete_successfully');
        } else {
            display('please_try_again');
        }
    }

    public function customer_search($id){
       $data["customers"] = $this->customer_model->individual_info($id);
        $this->load->view('customer_search', $data);
    }

    public function bdtask_customer_ledger() {
    $data['title']             = display('customer_ledger'); 
    $config["base_url"]        = base_url('customer_ledger');
    $config["total_rows"]      = $this->customer_model->count_customer_ledger();
    $config["per_page"]        = 10;
    $config["uri_segment"]     = 2;
    $config["last_link"]       = "Last"; 
    $config["first_link"]      = "First"; 
    $config['next_link']       = 'Next';
    $config['prev_link']       = 'Prev';  
    $config['full_tag_open']   = "<ul class='pagination col-xs pull-right'>";
    $config['full_tag_close']  = "</ul>";
    $config['num_tag_open']    = '<li>';
    $config['num_tag_close']   = '</li>';
    $config['cur_tag_open']    = "<li class='disabled'><li class='active'><a href='#'>";
    $config['cur_tag_close']   = "<span class='sr-only'></span></a></li>";
    $config['next_tag_open']   = "<li>";
    $config['next_tag_close']  = "</li>";
    $config['prev_tag_open']   = "<li>";
    $config['prev_tagl_close'] = "</li>";
    $config['first_tag_open']  = "<li>";
    $config['first_tagl_close']= "</li>";
    $config['last_tag_open']   = "<li>";
    $config['last_tagl_close'] = "</li>";
    $this->pagination->initialize($config);
    $page                      = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
    $data["ledgers"]           = $this->customer_model->customer_ledgerdata($config["per_page"], $page);
    $data["links"]             = $this->pagination->create_links();
    $data['customer']          = $this->customer_model->customer_list_ledger();
    $data['customer_name']     = '';
    $data['customer_id']       = '';
    $data['address']           ='';
    $data['module']            = "customer";
    $data['page']              = "customer_ledger";   
    echo Modules::run('template/layout', $data); 
    }

    public function bdtask_customer_ledgerData() {
    $start                 = $this->input->post('from_date',true);
    $end                   = $this->input->post('to_date',true);
    $customer_id           = $this->input->post('customer_id',true);
    $customer_detail       = $this->customer_model->customer_personal_data($customer_id);
    $data['title']         = display('customer_ledger');
    $data['customer']      = $this->customer_model->customer_list_ledger();
    $data["ledgers"]       = $this->customer_model->customerledger_searchdata($customer_id, $start, $end);
    $data['customer_name'] = $customer_detail[0]['customer_name'];
    $data['customer_id']   = $customer_id;
    $data['address']       = $customer_detail[0]['customer_address'];
    $data['module']        = "customer";
    $data["links"]         = '';
    $data['page']          = "customer_ledger";   
    echo Modules::run('template/layout', $data); 
    }


    public function bdtask_customer_advance() {
    $data['title']        = display('customer_advance');    
    $data['customer_list']= $this->customer_model->customer_list_advance();
    $data['module']       = "customer";
    $data['page']         = "customer_advance";   
    echo Modules::run('template/layout', $data); 
    }

      public function insert_customer_advance(){
        $advance_type = $this->input->post('type',TRUE);
        if($advance_type ==1){
            $dr = $this->input->post('amount',TRUE);
            $tp = 'd';
        }else{
            $cr = $this->input->post('amount',TRUE);
            $tp = 'c';
        }
            $createby      = $this->session->userdata('id');
            $createdate    = date('Y-m-d H:i:s');
            $transaction_id= $this->customer_model->generator(10);
            $customer_id   = $this->input->post('customer_id',TRUE);
            $cusifo        = $this->db->select('*')->from('customer_information')->where('customer_id',$customer_id)->get()->row();
            $headn         = $customer_id.'-'.$cusifo->customer_name;
            $coainfo       = $this->db->select('*')->from('acc_coa')->where('customer_id',$customer_id)->get()->row();
    $customer_headcode = $coainfo->HeadCode;
              
                   $customer_accledger = array(
      'VNo'            =>  $transaction_id,
      'Vtype'          =>  'Advance',
      'VDate'          =>  date("Y-m-d"),
      'COAID'          =>  $customer_headcode,
      'Narration'      =>  'Customer Advance For  '.$cusifo->customer_name,
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
      'Narration'      =>  'Cash in Hand  For '.$cusifo->customer_name.' Advance',
      'Debit'          =>  (!empty($dr)?$dr:0),
      'Credit'         =>  (!empty($cr)?$cr:0),
      'IsPosted'       =>  1,
      'CreateBy'       =>  $this->session->userdata('id'),
      'CreateDate'     =>  date('Y-m-d H:i:s'),
      'IsAppove'       =>  1
    ); 
                  
       $this->db->insert('acc_transaction',$customer_accledger);
       $this->db->insert('acc_transaction',$cc);
       redirect(base_url('advance_receipt/'.$transaction_id.'/'.$customer_id));

  }

  //customer_advance_receipt
   public function customer_advancercpt($receiptid=null,$customer_id=null) {
    $data['title']         = display('advance_receipt'); 
    $customer_id           = $this->uri->segment(3);
    $receiptdata           = $this->customer_model->advance_details($receiptid,$customer_id);
    $customer_details      = $this->customer_model->customer_personal_data($customer_id);
    $data['details']       = $receiptdata;
    $data['customer_name'] = $customer_details[0]['customer_name'];
    $data['receipt_no']    = $receiptdata[0]['VNo'];
    $data['address']       = $customer_details[0]['customer_address'];
    $data['mobile']        = $customer_details[0]['customer_mobile'];
    $data['module']        = "customer";
    $data['page']          = "customer_advance_receipt";   
    echo Modules::run('template/layout', $data); 
    }

}

