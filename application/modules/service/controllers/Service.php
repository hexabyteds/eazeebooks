<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 #------------------------------------    
    # Author: Bdtask Ltd
    # Author link: https://www.bdtask.com/
    # Dynamic style php file
    # Developed by :Isahaq
    #------------------------------------    

class Service extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
  
        $this->load->model(array(
            'service_model')); 
        if (! $this->session->userdata('isLogIn'))
            redirect('login');
          
    }
   
 public function bdtask_service_form(){
    $data['title']    = display('add_service');
    $data['module']   = 'service';
    $data['taxfield'] = $this->service_model->tax_fields();
    $data['page']     = 'add_service_form';
    echo modules::run('template/layout', $data);
 }


     public function insert_service() {
       $tablecolumn = $this->db->list_fields('product_service');
       $num_column  = count($tablecolumn)-4;
       $taxfield    = [];
       for($i=0;$i<$num_column;$i++){
        $taxfield[$i] = 'tax'.$i;
       }
       foreach ($taxfield as $key => $value) {
        $data[$value] = $this->input->post($value)/100;
       }
       $data['service_name'] = $this->input->post('service_name',true);
       $data['charge']       = $this->input->post('charge',true);
       $data['description']  = $this->input->post('description',true);

        $result = $this->service_model->service_entry($data);

        if ($result == TRUE) {

            $this->session->set_flashdata(array('message' => display('successfully_added')));
            redirect(base_url('manage_service'));
           
        } else {
            $this->session->set_flashdata(array('exception' => display('already_inserted')));
            redirect(base_url('add_service'));
        }
    }



    public function bdtask_manage_service(){
        $service_list = $this->service_model->service_list();
        $tablecolumn  = $this->db->list_fields('product_service');
        $num_column   = count($tablecolumn)-4;
         $data = array(
            'title'        => display('manage_service'),
            'service_list' => $service_list,
            'rowumber'     => $num_column,
            'taxfiled'     => $this->service_model->tax_fields(),
        );
         $data['module']   = 'service';
         $data['page']     = 'service';
         echo modules::run('template/layout', $data);
    }


        public function bdtask_edit_service($service_id) {
        $service_detail = $this->service_model->retrieve_service_editdata($service_id);
         $taxfield = $this->service_model->tax_fields();
                 $i = 0;
                foreach ($taxfield as $taxs) {
                  
                  $tax = 'tax'.$i;
                  $data[$tax] = $service_detail[0][$tax] * 100;
                  $i++;
                }
       
            $data['title']         = display('service_edit');
            $data['service_id']    = $service_detail[0]['service_id'];
            $data['charge']        = $service_detail[0]['charge'];
            $data['service_name']  = $service_detail[0]['service_name'];
            $data['description']   = $service_detail[0]['description'];
            $data['servicedetails']= $service_detail;
            $data['taxfield']      = $taxfield;
            $data['module']        = 'service';
            $data['page']          = 'edit_service_form';
            echo modules::run('template/layout', $data);
    }

    
        public function service_update() {
        $service_id  = $this->input->post('service_id',true);
        $tablecolumn = $this->db->list_fields('product_service');
        $num_column  = count($tablecolumn)-4;
        $taxfield    = [];
        for($i=0;$i<$num_column;$i++){
        $taxfield[$i] = 'tax'.$i;
        }
        foreach ($taxfield as $key => $value) {
         $data[$value] = $this->input->post($value)/100;
        }

        $data['service_name'] = $this->input->post('service_name',true);
        $data['charge']       = $this->input->post('charge',true);
        $data['description']  = $this->input->post('description',true);
        $this->service_model->update_service($data, $service_id);
        $this->session->set_flashdata(array('message' => display('successfully_updated')));
        redirect(base_url('manage_service'));
    }


        public function service_delete($service_id) {
        if ($this->service_model->delete_service($service_id)) {
            $this->session->set_flashdata('message', display('delete_successfully'));
        } else {
            $this->session->set_flashdata('exception', display('please_try_again'));
        }
        redirect("manage_service");
    }


    function uploadCsv_service()
     {
        $filename = $_FILES['upload_csv_file']['name'];  
        $ext = end(explode('.', $filename));
        $ext = substr(strrchr($filename, '.'), 1);
        if($ext == 'csv'){
        $count=0;
        $fp = fopen($_FILES['upload_csv_file']['tmp_name'],'r') or die("can't open file");

        if (($handle = fopen($_FILES['upload_csv_file']['tmp_name'], 'r')) !== FALSE)
        {
  
         while($csv_line = fgetcsv($fp,1024)){
                //keep this if condition if you want to remove the first row
                for($i = 0, $j = count($csv_line); $i < $j; $i++)
                {                  
                $insert_csv = array();
                $insert_csv['service_name'] = (!empty($csv_line[0])?$csv_line[0]:null);
                $insert_csv['charge'] = (!empty($csv_line[1])?$csv_line[1]:null);
                $insert_csv['description'] = (!empty($csv_line[2])?$csv_line[2]:null);
                }
                $servicedata = array(
                    'service_name'    => $insert_csv['service_name'],
                    'charge'          => $insert_csv['charge'],
                    'description'     => $insert_csv['description'],
                );
                if ($count > 0) {
                    $this->db->insert('product_service',$servicedata);
            $s_id = $this->db->insert_id();
          $CreateBy=$this->session->userdata('id');
          $createdate=date('Y-m-d H:i:s');
         
            $coa = $this->service_model->headcode();
        
           if($coa->HeadCode!=NULL){
                $headcode=$coa->HeadCode+1;
           }else{
                $headcode="101080001";
            }
            
        // coa head create   
     $acc_service = [
             'HeadCode'         => $headcode,
             'HeadName'         => $insert_csv['service_name'].'-'.$s_id,
             'PHeadName'        => 'Service Receive',
             'HeadLevel'        => '3',
             'IsActive'         => '1',
             'IsTransaction'    => '1',
             'IsGL'             => '0',
             'HeadType'         => 'A',
             'service_id'       => $s_id,
             'IsBudget'         => '1',
             'IsDepreciation'   => '1',
             'DepreciationRate' => '1',
             'CreateBy'         => $CreateBy,
             'CreateDate'       => $createdate,
        ];
             
            $this->db->insert('acc_coa',$acc_service);
                    }  
                $count++; 
            }
            
        }              
        $this->session->set_flashdata(array('message'=>display('successfully_added')));
        redirect(base_url('manage_service'));
         }else{
        $this->session->set_flashdata(array('exception'=>'Please Import Only Csv File'));
        redirect(base_url('add_service'));
    }
    
    }


        public function bdtask_service_invoice_form() {
        $data = array(
            'title'         => display('service_invoice'),
            'employee_list' => $this->service_model->employee_list(),
            'taxes'         => $this->service_model->tax_fields(),
        );
        $data['module']     = 'service';
        $data['page']       = 'add_invoice_form';
        echo modules::run('template/layout', $data);
    }


        public function customer_autocomplete(){
        $customer_id     = $this->input->post('customer_id',TRUE);
        $customer_info   = $this->service_model->customer_search($customer_id);

          if($customer_info){
        $json_customer[''] = '';
        foreach ($customer_info as $value) {
            $json_customer[] = array('label'=>$value['customer_name'],'value'=>$value['customer_id']);
        }
         }else{
           $json_customer[] = 'No Record found';
        }
        echo json_encode($json_customer);
    }


        //customer previous due
     public function previous() {
        $customer_id = $this->input->post('customer_id',TRUE);
        $this->db->select("a.*,b.HeadCode,((select ifnull(sum(Debit),0) from acc_transaction where COAID= `b`.`HeadCode` AND IsAppove = 1)-(select ifnull(sum(Credit),0) from acc_transaction where COAID= `b`.`HeadCode` AND IsAppove = 1)) as balance");
         $this->db->from('customer_information a');
         $this->db->join('acc_coa b','a.customer_id = b.customer_id','left');
         $this->db->where('a.customer_id',$customer_id);
        $result = $this->db->get()->result_array();
       $balance = $result[0]['balance'];   
       $b = (!empty($balance)?$balance:0);                            
        if ($b){
           echo  $b;
        } else {
           echo  $b;
        }
    }


     // Service retrieve
    public function retrieve_service_data_inv() {
    $service_id  = $this->input->post('service_id',true);
    $service_info= $this->service_model->get_total_service_invoic($service_id);
        echo json_encode($service_info);
    }
    


    // Service Invoice Entry
     public function insert_service_invoice(){
        $invoice_id = $this->service_model->invoice_entry();
        $mailsetting = $this->db->select('*')->from('email_config')->get()->result_array();
        if($mailsetting[0]['isservice']==1){
          $mail = $this->invoice_pdf_generate($invoice_id);
          if($mail == 0){
          $this->session->set_userdata(array('exception' => display('please_config_your_mail_setting')));
          }
        }
        
        $this->session->set_userdata(array('message' => display('successfully_added')));
        redirect(base_url('service_details/'.$invoice_id));


}



  public function invoice_pdf_generate($invoice_id = null) {
        $id = $invoice_id; 
        $employee_list    = $this->service_model->employee_list();
        $service_inv_main = $this->service_model->service_invoice_updata($invoice_id);
        $customer_info    =  $this->service_model->customer_info($service_inv_main[0]['customer_id']);
        $taxinfo          = $this->service_model->service_invoice_taxinfo($invoice_id);
        $taxfield         = $this->db->select('tax_name,default_value')
                                    ->from('tax_settings')
                                    ->get()
                                    ->result_array();

        $subTotal_quantity = 0;
        $subTotal_discount = 0;
        $subTotal_ammount  = 0;

        if (!empty($service_inv_main)) {
            foreach ($service_inv_main as $k => $v) {
                $service_inv_main[$k]['final_date'] = $this->occational->dateConvert($service_inv_main[$k]['date']);
                $subTotal_quantity = $subTotal_quantity + $service_inv_main[$k]['qty'];
                $subTotal_ammount  = $subTotal_ammount + $service_inv_main[$k]['total'];
            }

            $i = 0;
            foreach ($service_inv_main as $k => $v) {
                $i++;
                $service_inv_main[$k]['sl'] = $i;
            }
        }
        $name    = $customer_info->customer_name;
        $email   = $customer_info->customer_email;
        $data = array(
            'title'           => display('service_details'),
            'employee_list'   => $employee_list,
            'invoice_id'      => $service_inv_main[0]['voucher_no'],
            'final_date'      => $service_inv_main[0]['final_date'],
            'customer_id'     => $service_inv_main[0]['customer_id'],
            'customer_info'   => $customer_info,
            'customer_name'   => $customer_info->customer_name,
            'customer_address'=> $customer_info->customer_address,
            'customer_mobile' => $customer_info->customer_mobile,
            'customer_email'  => $customer_info->customer_email,
            'details'         => $service_inv_main[0]['details'],
            'total_amount'    => $service_inv_main[0]['total_amount'],
            'total_discount'  => $service_inv_main[0]['total_discount'],
            'invoice_discount'=> $service_inv_main[0]['invoice_discount'],
            'subTotal_ammount'=> number_format($subTotal_ammount, 2, '.', ','),
            'subTotal_quantity'=>number_format($subTotal_quantity, 2, '.', ','),
            'total_tax'       => $service_inv_main[0]['total_tax'],
            'paid_amount'     => $service_inv_main[0]['paid_amount'],
            'due_amount'      => $service_inv_main[0]['due_amount'],
            'shipping_cost'   => $service_inv_main[0]['shipping_cost'],
            'invoice_detail'  => $service_inv_main,
            'taxvalu'         => $taxinfo,
            'taxes'           => $taxfield,
            'stotal'          => $service_inv_main[0]['total_amount']-$service_inv_main[0]['previous'],
            'employees'       => $service_inv_main[0]['employee_id'],
            'previous'        => $service_inv_main[0]['previous'],

        );
        $this->load->library('pdfgenerator');
        $html = $this->load->view('service/invoice_download', $data, true);
        $dompdf = new DOMPDF();
        $dompdf->load_html($html);
        $dompdf->render();
        $output = $dompdf->output();
        file_put_contents('assets/data/pdf/service/' . $id . '.pdf', $output);
        $file_path = getcwd() . '/assets/data/pdf/service/' . $id . '.pdf';
        $send_email = '';
        if (!empty($email)) {
            $send_email = $this->setmail($email, $file_path, $id, $name);
            
            if($send_email){
                return 1;
                
           
            }else{
             
            return 0;
               
            }
           
        }
        return 0;
       
    }


    public function setmail($email, $file_path, $id = null, $name = null) {
        $setting_detail = $this->db->select('*')->from('email_config')->get()->row();
        $subject = 'Service Purchase  Information';
        $message = strtoupper($name) . '-' . $id;
        $config = Array(
            'protocol'  => $setting_detail->protocol,
            'smtp_host' => $setting_detail->smtp_host,
            'smtp_port' => $setting_detail->smtp_port,
            'smtp_user' => $setting_detail->smtp_user,
            'smtp_pass' => $setting_detail->smtp_pass,
            'mailtype'  => 'html', 
            'charset'   => 'utf-8',
            'wordwrap'  => TRUE
        );
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from($setting_detail->smtp_user);
        $this->email->to($email);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->attach($file_path);
        $check_email = $this->test_input($email);
        if (filter_var($check_email, FILTER_VALIDATE_EMAIL)) {
            if ($this->email->send()) {
               return true;
            } else {
               
                return false;
            }
        } else {
           
            return true;
        }
    }

    //Email testing for email
    public function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


     public function service_invoice_data($invoice_id) {
        $employee_list    = $this->service_model->employee_list();
        $service_inv_main = $this->service_model->service_invoice_updata($invoice_id);
        $customer_info    =  $this->service_model->customer_info($service_inv_main[0]['customer_id']);
        $taxinfo          = $this->service_model->service_invoice_taxinfo($invoice_id);
        $taxfield         = $this->db->select('tax_name,default_value')
                                        ->from('tax_settings')
                                        ->get()
                                        ->result_array();

     $taxreg = $this->db->select('*')
                ->from('tax_settings')
                ->where('is_show',1)
                ->get()
                ->result_array();
        $txregname ='';
        foreach($taxreg as $txrgname){
        $regname = $txrgname['tax_name'].' Reg No  - '.$txrgname['reg_no'].', ';
        $txregname .= $regname;
        }    
        $subTotal_quantity = 0;
        $subTotal_discount = 0;
        $subTotal_ammount = 0;

        if (!empty($service_inv_main)) {
            foreach ($service_inv_main as $k => $v) {
                $service_inv_main[$k]['final_date'] = $this->occational->dateConvert($service_inv_main[$k]['date']);
                $subTotal_quantity = $subTotal_quantity + $service_inv_main[$k]['qty'];
                $subTotal_ammount = $subTotal_ammount + $service_inv_main[$k]['total'];
            }

            $i = 0;
            foreach ($service_inv_main as $k => $v) {
                $i++;
                $service_inv_main[$k]['sl'] = $i;
            }
        }
        $data = array(
            'title'         => display('service_details'),
            'employee_list' => $employee_list,
            'invoice_id'    => $service_inv_main[0]['voucher_no'],
            'final_date'    => $service_inv_main[0]['final_date'],
            'customer_id'   => $service_inv_main[0]['customer_id'],
            'customer_name' => $customer_info->customer_name,
            'customer_address'=> $customer_info->customer_address,
            'customer_mobile'=> $customer_info->customer_mobile,
            'customer_email'=> $customer_info->customer_email,
            'details'       => $service_inv_main[0]['details'],
            'total_amount'  => number_format($service_inv_main[0]['total_amount'], 2, '.', ','),
            'total_discount'=> number_format($service_inv_main[0]['total_discount'], 2, '.', ','),
            'invoice_discount'=> number_format($service_inv_main[0]['invoice_discount'], 2, '.', ','),
            'subTotal_ammount'=> number_format($subTotal_ammount, 2, '.', ','),
            'subTotal_quantity'=>number_format($subTotal_quantity, 2, '.', ','),
            'total_tax'     => number_format($service_inv_main[0]['total_tax'], 2, '.', ','),
            'paid_amount'   => number_format($service_inv_main[0]['paid_amount'], 2, '.', ','),
            'due_amount'    => number_format($service_inv_main[0]['due_amount'], 2, '.', ','),
            'shipping_cost' => number_format($service_inv_main[0]['shipping_cost'], 2, '.', ','),
            'invoice_detail'=> $service_inv_main,
            'taxvalu'       => $taxinfo,
            'taxes'         => $taxfield,
            'stotal'        => $service_inv_main[0]['total_amount']-$service_inv_main[0]['previous'],
            'employees'     => $service_inv_main[0]['employee_id'],
            'previous'      => number_format($service_inv_main[0]['previous'], 2, '.', ','),
            'tax_regno'     => $txregname,

        );
        $data['module']     = 'service';
        $data['page']       = 'invoice_html';
        echo modules::run('template/layout', $data);

    }

     public function manage_service_invoice(){
        $data['title']         = display('manage_service_invoice');
        $config["base_url"]    = base_url('manage_service_invoice');
        $config["total_rows"]  = $this->db->count_all('service_invoice');
        $config["per_page"]    = 20;
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
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data["links"]  = $this->pagination->create_links();
        $data['module'] = "service";
        $data['service']=$this->service_model->service_invoice_list($config["per_page"], $page);
         $data['page']   = "service_invoice";
        echo Modules::run('template/layout', $data);  
    }


      public function service_invoice_edit($invoice_id){
        $employee_list    = $this->service_model->employee_list();
        $service_inv_main = $this->service_model->service_invoice_updata($invoice_id);
        $customer_info    = $this->service_model->customer_info($service_inv_main[0]['customer_id']);
        $taxinfo  = $this->service_model->service_invoice_taxinfo($invoice_id);
        $taxfield = $this->db->select('tax_name,default_value')
                ->from('tax_settings')
                ->get()
                ->result_array();
        $data = array(
            'title'         => display('update_service_invoice'),
            'employee_list' => $employee_list,
            'invoice_id'    => $service_inv_main[0]['voucher_no'],
            'date'          => $service_inv_main[0]['date'],
            'customer_id'   => $service_inv_main[0]['customer_id'],
            'customer_name' => $customer_info->customer_name,
            'details'       => $service_inv_main[0]['details'],
            'total_amount'  => $service_inv_main[0]['total_amount'],
            'total_discount'=> $service_inv_main[0]['total_discount'],
            'invoice_discount'=> $service_inv_main[0]['invoice_discount'],
            'total_tax'     => $service_inv_main[0]['total_tax'],
            'paid_amount'   => $service_inv_main[0]['paid_amount'],
            'due_amount'    => $service_inv_main[0]['due_amount'],
            'shipping_cost' => $service_inv_main[0]['shipping_cost'],
            'invoice_detail'=> $service_inv_main,
            'taxvalu'       => $taxinfo,
            'taxes'         => $taxfield,
            'stotal'        => $service_inv_main[0]['total_amount']-$service_inv_main[0]['previous'],
            'employees'    => $service_inv_main[0]['employee_id'],
            'previous'     => $service_inv_main[0]['previous'],

        );
        $data['module']     = 'service';
        $data['page']       = 'update_invoice_form';
        echo modules::run('template/layout', $data);

    }

      public function update_service_invoice(){
    $invoice_id = $this->service_model->invoice_update();
    $this->session->set_flashdata(array('message' => display('successfully_updated')));
    redirect(base_url('service_details/'.$invoice_id));  
    }


      //pdf download service invoice details
     public function servicedetails_download($invoice_id = null) {
        $employee_list    = $this->service_model->employee_list();
        $currency_details = $this->service_model->web_setting();
        $service_inv_main = $this->service_model->service_invoice_updata($invoice_id);
        $customer_info =  $this->service_model->customer_info($service_inv_main[0]['customer_id']);
        $company_info = $this->service_model->company_info();
        $taxinfo = $this->service_model->service_invoice_taxinfo($invoice_id);
        $taxfield = $this->db->select('tax_name,default_value')
                ->from('tax_settings')
                ->get()
                ->result_array();
        $subTotal_quantity = 0;
        $subTotal_discount = 0;
        $subTotal_ammount = 0;

        if (!empty($service_inv_main)) {
            foreach ($service_inv_main as $k => $v) {
                $service_inv_main[$k]['final_date'] = $this->occational->dateConvert($service_inv_main[$k]['date']);
                $subTotal_quantity = $subTotal_quantity + $service_inv_main[$k]['qty'];
                $subTotal_ammount = $subTotal_ammount + $service_inv_main[$k]['total'];
            }

            $i = 0;
            foreach ($service_inv_main as $k => $v) {
                $i++;
                $service_inv_main[$k]['sl'] = $i;
            }
        }
        $data = array(
            'title'         => display('service_details'),
            'employee_list' => $employee_list,
            'invoice_id'    => $service_inv_main[0]['voucher_no'],
            'final_date'    => $service_inv_main[0]['final_date'],
            'customer_id'   => $service_inv_main[0]['customer_id'],
            'customer_info' => $customer_info,
            'customer_name' => $customer_info->customer_name,
            'customer_address'=> $customer_info->customer_address,
            'customer_mobile'=> $customer_info->customer_mobile,
            'customer_email'=> $customer_info->customer_email,
            'details'       => $service_inv_main[0]['details'],
            'total_amount'  => $service_inv_main[0]['total_amount'],
            'total_discount'=> $service_inv_main[0]['total_discount'],
            'invoice_discount'=> $service_inv_main[0]['invoice_discount'],
            'subTotal_ammount'=> number_format($subTotal_ammount, 2, '.', ','),
            'subTotal_quantity'=>number_format($subTotal_quantity, 2, '.', ','),
            'total_tax'     => $service_inv_main[0]['total_tax'],
            'paid_amount'   => $service_inv_main[0]['paid_amount'],
            'due_amount'    => $service_inv_main[0]['due_amount'],
            'shipping_cost' => $service_inv_main[0]['shipping_cost'],
            'invoice_detail'=> $service_inv_main,
            'taxvalu'       => $taxinfo,
            'discount_type' => $currency_details[0]['discount_type'],
            'currency_details'=>$currency_details,
            'currency'      => $currency_details[0]['currency'],
            'position'      => $currency_details[0]['currency_position'],
            'taxes'         => $taxfield,
            'stotal'        => $service_inv_main[0]['total_amount']-$service_inv_main[0]['previous'],
            'employees'     => $service_inv_main[0]['employee_id'],
            'previous'      => $service_inv_main[0]['previous'],
            'company_info'  => $company_info,

        );



        $this->load->library('pdfgenerator');
        $dompdf = new DOMPDF();
        $page = $this->load->view('service/invoice_download', $data, true);
        $file_name = time();
        $dompdf->load_html($page);
        $dompdf->render();
        $output = $dompdf->output();
        file_put_contents("assets/data/pdf/service/$file_name.pdf", $output);
        $filename = $file_name . '.pdf';
        $file_path = base_url() . 'assets/data/pdf/service/' . $filename;

        $this->load->helper('download');
        force_download('./assets/data/pdf/service/' . $filename, NULL);
        redirect("manage_service_invoice");
    }


      public function service_invoic_delete($service_id) {
         if ($this->service_model->delete_service_invoice($service_id)) {
            $this->session->set_flashdata('message', display('delete_successfully'));
        } else {
            $this->session->set_flashdata('exception', display('please_try_again'));
        }
        redirect("manage_service_invoice");
    }

  

}

