<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 #------------------------------------    
    # Author: Bdtask Ltd
    # Author link: https://www.bdtask.com/
    # Dynamic style php file
    # Developed by :Isahaq
    #------------------------------------    

class Quotation extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
  
        $this->load->model(array(
            'quotation_model','service/service_model')); 
        if (! $this->session->userdata('isLogIn'))
            redirect('login');
          
    }
   

    function bdtask_quotation_form() {
        $data['title']           = display('add_quotation');
        $data['quotation_no']    = $this->quot_number_generator();
        $data['taxes']           = $this->quotation_model->tax_fields();
        $data['customers']       = $this->quotation_model->get_allcustomer();
        $data['get_productlist'] = $this->quotation_model->get_allproduct();
        $data['module']          = "quotation";
        $data['page']            = "quotation_form"; 
        echo modules::run('template/layout', $data);
    }

    
       //    ========== its for get_customer_info ===========
    public function get_customer_info() {
        $customer_id = $this->input->post('customer_id',TRUE);
        $get_customer_info = $this->db->select('*')->from('customer_information')->where('customer_id', $customer_id)->get()->row();
        echo json_encode($get_customer_info);
    }


        public function quot_number_generator() {
        $this->db->select_max('quot_no', 'quot_no');
        $query   = $this->db->get('quotation');
        $result  = $query->result_array();
        $quot_no = $result[0]['quot_no'];
        if ($quot_no != '') {
            $quot_no = $quot_no + 1;
        } else {
            $quot_no = 1000;
        }
        return $quot_no;
    }

       public function autocompleteproductsearch(){
        $product_name   = $this->input->post('product_name',TRUE);
        $product_info   = $this->quotation_model->autocompletproductdata($product_name);

       if(!empty($product_info)){
        $list[''] = '';
        foreach ($product_info as $value) {
            $json_product[] = array('label'=>$value['product_name'].'('.$value['product_model'].')','value'=>$value['product_id']);
        } 
    }else{
        $json_product[] = 'No Product Found';
        }
        echo json_encode($json_product);
    
    }


       public function retrieve_product_data_inv() {
        $product_id = $this->input->post('product_id',TRUE);
        $product_info = $this->quotation_model->get_total_product_invoic($product_id);

        echo json_encode($product_info);
    }


    //    ========== its for  insert_quotation =============
    public function bdtask_insert_quotation() {
        $this->form_validation->set_rules('customer_id', display('customer_name'),'required|max_length[50]');
        $this->form_validation->set_rules('qdate', display('quotation_date'),'required|max_length[50]');
        $this->form_validation->set_rules('expiry_date', display('expiry_date'),'required|max_length[50]');
if ($this->form_validation->run()) {

        $quot_id = $this->occational->generator(15);
        $tablecolumn = $this->db->list_fields('quotation_taxinfo');
        $num_column = count($tablecolumn)-4;
            $customershow = 0;
            $status = 1;
            $data = array(
            'quotation_id'        => $quot_id,
            'customer_id'         => $this->input->post('customer_id',TRUE),
            'quotdate'            => $this->input->post('qdate',TRUE),
            'expire_date'         => $this->input->post('expiry_date',TRUE),
            'item_total_amount'   => $this->input->post('grand_total_price',TRUE),
            'item_total_dicount'  => $this->input->post('total_discount',TRUE),
            'item_total_tax'      => $this->input->post('total_tax',TRUE),
            'service_total_amount'=> $this->input->post('grand_total_service_amount',TRUE),
            'service_total_discount'=> $this->input->post('totalServiceDicount',TRUE),
            'service_total_tax'   => $this->input->post('total_service_tax',TRUE),
            'quot_dis_item'       =>$this->input->post('invoice_discount',TRUE),
            'quot_dis_service'    =>$this->input->post('service_discount',TRUE),
            'quot_no'             => $this->input->post('quotation_no',TRUE),
            'create_by'           => $this->session->userdata('id'),
            'quot_description'    => $this->input->post('details',TRUE),
            'status'              => $status,
            );

            $result = $this->quotation_model->quotation_entry($data);

            if ($result == TRUE) {
                // Used Item Details Part
                $item         = $this->input->post('product_id',TRUE);
                $serial       = $this->input->post('serial_no',TRUE);
                $descrp       = $this->input->post('desc',TRUE);
                $item_rate    = $this->input->post('product_rate',TRUE);
                $item_supp_rate= $this->input->post('supplier_price',TRUE);
                $item_qty     = $this->input->post('product_quantity',TRUE);
                $item_dis_per = $this->input->post('discount',TRUE);
                $item_total_discount = $this->input->post('discount_amount',TRUE);
                $item_tax     = $this->input->post('tax',TRUE);
                $totalp       =  $this->input->post('total_price',TRUE);
                for ($j = 0, $n = count($item); $j < $n; $j++) {
                    $product_id    = $item[$j];
                    $rate          = $item_rate[$j];
                    $qty           = $item_qty[$j];
                    $supplier_rate = $item_supp_rate[$j];
                    $discount      = $item_dis_per[$j];
                    $totaldiscount = $item_total_discount[$j];
                    $tax           = $item_tax[$j];
                    $srl           = $serial[$j];
                    $dcript        = $descrp[$j];
                    $total_price   = $totalp[$j];
                    $quotitem = array(
                        'quot_id'       => $quot_id,
                        'product_id'    => $product_id,
                        'serial_no'     => $srl,
                        'description'   => $dcript,
                        'rate'          => $rate,
                        'supplier_rate' => $supplier_rate,
                        'total_price'   => $total_price,
                        'discount_per'  => $discount,
                        'discount'      => $totaldiscount,
                        'tax'           => $tax,
                        'used_qty'      => $qty,
                    );
                    $this->db->insert('quot_products_used', $quotitem);
                }

                //item tax info
                for($l=0;$l<$num_column;$l++){
                $taxfield = 'tax'.$l;
                $taxvalue = 'total_tax'.$l;
              $taxdata[$taxfield]=$this->input->post($taxvalue);
            }
            $taxdata['customer_id'] = $this->input->post('customer_id',TRUE);
            $taxdata['date']        = (!empty($this->input->post('qdate',TRUE))?$this->input->post('qdate',TRUE):date('Y-m-d'));
            $taxdata['relation_id'] = 'item'.$this->input->post('quotation_no',TRUE);
            $this->db->insert('quotation_taxinfo',$taxdata);

                    // Used Service Details Part
                $service                = $this->input->post('service_id',TRUE);
                $service_rate           = $this->input->post('service_rate',TRUE);
                $service_qty            = $this->input->post('service_quantity',TRUE);
                $service_dis_per        = $this->input->post('sdiscount',TRUE);
                $service_total_discount = $this->input->post('sdiscount_amount',TRUE);
                $totalservicep          = $this->input->post('total_service_amount',TRUE);
                $service_tax            = $this->input->post('stax',TRUE);
                for ($k = 0, $n = count($service); $k < $n; $k++) {
                    $service_id     = $service[$k];
                    $charge         = $service_rate[$k];
                    $sqty           = $service_qty[$k];
                    $sdiscount      = $service_dis_per[$k];
                    $stotaldiscount = $service_total_discount[$k];
                    $stax           = $service_tax[$k];
                    $total_serviceprice = $totalservicep[$k];
                    $quotservice = array(
                        'quot_id'        => $quot_id,
                        'service_id'     => $service_id,
                        'charge'         => $charge,
                        'total'          => $total_serviceprice,
                        'discount'       => $sdiscount,
                        'discount_amount'=> $stotaldiscount,
                        'tax'            => $stax,
                        'qty'            => $qty,
                    );
                    $this->db->insert('quotation_service_used', $quotservice);
                }
                //service taxinfo

                for($m=0;$m<$num_column;$m++){
                     $taxfield = 'tax'.$m;
                $taxvalue = 'total_service_tax'.$m;
              $servicetaxinfo[$taxfield]=$this->input->post($taxvalue);
            }
            $servicetaxinfo['customer_id'] =$this->input->post('customer_id',TRUE);
            $servicetaxinfo['date']        = (!empty($this->input->post('qdate',TRUE))?$this->input->post('qdate',TRUE):date('Y-m-d'));
            $servicetaxinfo['relation_id'] = 'serv'.$this->input->post('quotation_no',TRUE);
            $this->db->insert('quotation_taxinfo',$servicetaxinfo);

       $mailsetting = $this->db->select('*')->from('email_config')->get()->result_array();
        if($mailsetting[0]['isquotation']==1){
          $mail = $this->quotation_pdf_generate($quot_id);
          if($mail == 0){
            $this->session->set_flashdata(array('exception' => display('please_config_your_mail_setting')));
          }
        }
        $this->session->set_flashdata(array('message' => display('quotation_successfully_added')));
         redirect(base_url('manage_quotation')); 
           
            } else {
                $this->session->set_flashdata(array('exception' => display('already_inserted')));
                redirect(base_url('add_quotation'));
            }
            }else{
            $this->session->set_flashdata(array('exception' => validation_errors()));
             redirect(base_url('add_quotation'));
        }
      
    }


      //    ============ its for invoice pdf generate =======
    public function quotation_pdf_generate($quot_id = null) {
        $id = $quot_id;
        $currency_details         = $this->quotation_model->setting_data();
        $data['currency_details'] = $currency_details;
        $data['discount_type']    = $currency_details[0]['discount_type'];
        $data['title']            = display('quotation_details');
        $data['quot_service']     = $this->quotation_model->quot_service_detail($quot_id);
        $data['quot_main']        = $this->quotation_model->quot_main_edit($quot_id);
        $data['quot_product']     = $this->quotation_model->quot_product_detail($quot_id);
        $data['customer_info']    = $this->quotation_model->customerinfo($data['quot_main'][0]['customer_id']);
        $data['company_info'] = $this->quotation_model->retrieve_company();
        $name    = $data['customer_info'][0]['customer_name'];
        $email   = $data['customer_info'][0]['customer_email'];
        $this->load->library('pdfgenerator');
        $html   = $this->load->view('quotation/quotation_invoice_pdf', $data, true);
        $dompdf = new DOMPDF();
        $dompdf->load_html($html);
        $dompdf->render();
        $output = $dompdf->output();
        file_put_contents('assets/data/pdf/quotation/' . $id . '.pdf', $output);
        $file_path = getcwd() . '/assets/data/pdf/quotation/' . $id . '.pdf';
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
        $subject = 'Quotation Information';
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
                $this->session->set_flashdata(array('exception' => display('please_configure_your_mail.')));
                return false;
            }
        } else {
           
            return false;
        }
    }

    //Email testing for email
    public function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

     //    ============= its for  manage quotation ============
      public function manage_quotation() {
        $data['title']         = display('manage_quotation');
        $config["base_url"]    = base_url('manage_quotation');
        $config["total_rows"]  = $this->db->count_all('quotation');
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
        $data['module'] = "quotation";
        $data['quotation_list']=$this->quotation_model->quotation_list($config["per_page"], $page);
         $data['page']   = "quotation_list";
        echo Modules::run('template/layout', $data); 
    }


      // Quotation To Sales
    public function quotation_to_sales($quot_id = null) {
        $taxfield = $this->db->select('tax_name,default_value')
                ->from('tax_settings')
                ->get()
                ->result_array();
            
        $tablecolumn = $this->db->list_fields('tax_collection');
                $num_column = count($tablecolumn)-4;       
        $currency_details        = $this->quotation_model->setting_data();
        $data['currency_details'] = $currency_details;
        $data['title']           = display('quotation_to_sale');
        $data['quot_main']       = $this->quotation_model->quot_main_edit($quot_id);
        $data['quot_product']    = $this->quotation_model->quot_product_detail($quot_id);
        $data['quot_service']    = $this->quotation_model->quot_service_detail($quot_id);
        $data['customer_info']   = $this->quotation_model->customerinfo($data['quot_main'][0]['customer_id']);
        $data['itemtaxin']       = $this->quotation_model->itemtaxdetails($data['quot_main'][0]['quot_no']);
        $data['servicetaxin']    = $this->quotation_model->servicetaxdetails($data['quot_main'][0]['quot_no']);
        $data['taxes']           = $taxfield;
        $data['taxnumber']       = $num_column;
        $data['customers']       = $this->quotation_model->get_allcustomer();
        $data['get_productlist'] = $this->quotation_model->get_allproduct();
        $data['module']          = "quotation";
        $data['page']            = "quotation_to_sales"; 
        echo modules::run('template/layout', $data);
    }


    public function add_quotation_to_invoice()
    {
        
         $mailsetting = $this->db->select('*')->from('email_config')->get()->result_array();  
        $quotation_id = $this->input->post('quotation_id',TRUE);
        $customer_id  = $this->input->post('customer_id',TRUE);
        $invoice_id   = $this->generator(10);
        $invoice_id   = strtoupper($invoice_id);
        $createby     = $this->session->userdata('id');
        $createdate   = date('Y-m-d H:i:s');
        $quantity     = $this->input->post('product_quantity',TRUE);
        $squantity    = $this->input->post('service_quantity',TRUE);
        $tablecolumn  = $this->db->list_fields('tax_collection');
        $num_column   = count($tablecolumn)-4;

        $cusifo = $this->db->select('*')->from('customer_information')->where('customer_id',$customer_id)->get()->row();
        $headn   = $customer_id.'-'.$cusifo->customer_name;
        $coainfo = $this->db->select('*')->from('acc_coa')->where('HeadName',$headn)->get()->row();
        $customer_headcode = $coainfo->HeadCode;
        $bank_id = $this->input->post('bank_id',TRUE);
        if(!empty($bank_id)){
       $bankname = $this->db->select('bank_name')->from('bank_add')->where('bank_id',$bank_id)->get()->row()->bank_name;
    
       $bankcoaid = $this->db->select('HeadCode')->from('acc_coa')->where('HeadName',$bankname)->get()->row()->HeadCode;
       }else{
        $bankcoaid='';
       }


       $quotdata = array(
       'status'  => 2,
       );
        $this->db->where('quotation_id', $quotation_id);
        $this->db->update('quotation',$quotdata);

       $transection_id = $this->occational->generator(15);

        $datainvmain = array(
            'invoice_id'      => $invoice_id,
            'customer_id'     => $customer_id,
            'date'            => (!empty($this->input->post('qdate',TRUE))?$this->input->post('qdate',TRUE):date('Y-m-d')),
            'total_amount'    => $this->input->post('grand_total_price',TRUE),
            'total_tax'       => $this->input->post('total_tax',TRUE),
            'invoice'         => $this->number_generator(),
            'invoice_details' => (!empty($this->input->post('details',TRUE))?$this->input->post('details',TRUE):'From Quotation'),
            'invoice_discount'=> $this->input->post('invoice_discount',TRUE),
            'total_discount'  => $this->input->post('total_discount',TRUE),
            'prevous_due'     => '',
            'shipping_cost'   => '',
            'sales_by'        => $this->session->userdata('id'),
            'status'          => 1,
            'payment_type'    =>  $this->input->post('paytype',TRUE),
            'bank_id'         =>  (!empty($this->input->post('bank_id',TRUE))?$this->input->post('bank_id',TRUE):null),
        );


  $prinfo  = $this->db->select('product_id,Avg(rate) as product_rate')->from('product_purchase_details')->where_in('product_id',$product_id)->group_by('product_id')->get()->result(); 
    $purchase_ave = [];
    $i=0;
    foreach ($prinfo as $avg) {
      $purchase_ave [] =  $avg->product_rate*$quantity[$i];
      $i++;
    }
   $sumval = array_sum($purchase_ave);

     $cc = array(
      'VNo'            =>  $invoice_id,
      'Vtype'          =>  'INVOICE',
      'VDate'          =>  $createdate,
      'COAID'          =>  1020101,
      'Narration'      =>  'Cash in Hand in Sale for '.$cusifo->customer_name,
      'Debit'          =>  $this->input->post('grand_total_price',TRUE),
      'Credit'         =>  0,
      'IsPosted'       =>  1,
      'CreateBy'       =>  $createby,
      'CreateDate'     =>  $createdate,
      'IsAppove'       =>  1
    ); 

   // bank ledger
 $bankc = array(
      'VNo'            =>  $invoice_id,
      'Vtype'          =>  'INVOICE',
      'VDate'          =>  $createdate,
      'COAID'          =>  $bankcoaid,
      'Narration'      =>  'Paid amount for customer  '.$cusifo->customer_name,
      'Debit'          =>  $this->input->post('grand_total_price',TRUE),
      'Credit'         =>  0,
      'IsPosted'       =>  1,
      'CreateBy'       =>  $createby,
      'CreateDate'     =>  $createdate,
      'IsAppove'       =>  1
    ); 


 $banksummary = array(
            'date'          =>  $createdate,
            'ac_type'       => 'Debit(+)',
            'bank_id'       =>  $this->input->post('bank_id',TRUE),
            'description'   => 'product sale',
            'deposite_id'   =>  $invoice_id,
            'dr'            =>  $this->input->post('grand_total_price',TRUE),
            'cr'            =>  null,
            'ammount'       =>  $this->input->post('grand_total_price',TRUE),
            'status'        =>  1
        
        );
       ///Inventory credit
       $coscr = array(
      'VNo'            => $invoice_id,
      'Vtype'          => 'INVOICE',
      'VDate'          => $createdate,
      'COAID'          => 10107,
      'Narration'      => 'Inventory credit For Invoice No'.$invoice_id,
      'Debit'          => 0,
      'Credit'         => $sumval,//purchase price asbe
      'IsPosted'       => 1,
      'CreateBy'       => $createby,
      'CreateDate'     => $createdate,
      'IsAppove'       => 1
    ); 

       

    //Customer debit for Product Value
    $cosdr = array(
      'VNo'            => $invoice_id,
      'Vtype'          => 'INVOICE',
      'VDate'          => $createdate,
      'COAID'          => $customer_headcode,
      'Narration'      => 'Customer debit For  '.$cusifo->customer_name,
      'Debit'          => $this->input->post('grand_total_price',TRUE),
      'Credit'         => 0,
      'IsPosted'       => 1,
      'CreateBy'       => $createby,
      'CreateDate'     => $createdate,
      'IsAppove'       => 1
    ); 


         $pro_sale_income = array(
      'VNo'            => $invoice_id,
      'Vtype'          => 'INVOICE',
      'VDate'          => $createdate,
      'COAID'          => 303,
      'Narration'      => 'Sale Income For '.$cusifo->customer_name,
      'Debit'          => 0,
      'Credit'         => $this->input->post('grand_total_price',TRUE),
      'IsPosted'       => 1,
      'CreateBy'       => $createby,
      'CreateDate'     => $createdate,
      'IsAppove'       => 1
    ); 


       ///Customer credit for Paid Amount
       $cuscredit = array(
      'VNo'            =>  $invoice_id,
      'Vtype'          =>  'INVOICE',
      'VDate'          =>  $createdate,
      'COAID'          =>  $customer_headcode,
      'Narration'      =>  'Customer credit for Paid Amount For Customer '.$cusifo->customer_name,
      'Debit'          =>  0,
      'Credit'         =>  $this->input->post('grand_total_price',TRUE),
      'IsPosted'       => 1,
      'CreateBy'       => $createby,
      'CreateDate'     => $createdate,
      'IsAppove'       => 1
    ); 

        for($j=0;$j<$num_column;$j++){
                $taxfield = 'tax'.$j;
                $taxvalue = 'total_tax'.$j;
              $taxdata[$taxfield]=$this->input->post($taxvalue);
            }
            $taxdata['customer_id'] = $customer_id;
            $taxdata['date']        = (!empty($this->input->post('qdate',TRUE))?$this->input->post('qdate',TRUE):date('Y-m-d'));
            $taxdata['relation_id'] = $invoice_id;
           

         if (!empty($quantity)) {
        $this->db->insert('invoice', $datainvmain);
        $this->db->insert('acc_transaction',$coscr);
        $this->db->insert('acc_transaction',$cosdr);  
        $this->db->insert('acc_transaction',$pro_sale_income);
        $this->db->insert('acc_transaction',$cuscredit);
         $this->db->insert('tax_collection',$taxdata);
        if($this->input->post('paytype',TRUE) == 2){
        $this->db->insert('acc_transaction',$bankc);
        
        }
            if($this->input->post('paytype',TRUE) == 1){
        $this->db->insert('acc_transaction',$cc);
        }
    }
       
        $rate                = $this->input->post('product_rate',TRUE);
        $p_id                = $this->input->post('product_id',TRUE);
        $total_amount        = $this->input->post('total_price',TRUE);
        $discount_rate       = $this->input->post('discount_amount',TRUE);
        $discount_per        = $this->input->post('discount',TRUE);
        $tax_amount          = $this->input->post('tax',TRUE);
        $invoice_description = $this->input->post('desc',TRUE);
        $serial_n            = $this->input->post('serial_no',TRUE);
        $supplier_price      = $this->input->post('supplier_price',TRUE);

        for ($i = 0, $n = count($p_id); $i < $n; $i++) {
            $product_quantity = $quantity[$i];
            $product_rate     = $rate[$i];
            $product_id       = $p_id[$i];
            $serial_no        = (!empty($serial_n[$i])?$serial_n[$i]:null);
            $total_price      = $total_amount[$i];
            $supplier_rate    = $supplier_price[$i];
            $disper           = $discount_per[$i];
            $discount = is_numeric($product_quantity) * is_numeric($product_rate) * is_numeric($disper) / 100;
            $tax              = $tax_amount[$i];
            $description      = $invoice_description[$i];
           
            $invoiceDetails = array(
                'invoice_details_id' => $this->generator(15),
                'invoice_id'         => $invoice_id,
                'product_id'         => $product_id,
                'serial_no'          => $serial_no,
                'quantity'           => $product_quantity,
                'rate'               => $product_rate,
                'discount'           => $discount,
                'description'        => $description,
                'discount_per'       => $disper,
                'tax'                => $tax,
                'paid_amount'        => $this->input->post('grand_total_price',TRUE),
                'due_amount'         => '',
                'supplier_rate'      => $supplier_rate,
                'total_price'        => $total_price,
                'status'             => 1
            );
            if (!empty($product_quantity)) {
                $this->db->insert('invoice_details', $invoiceDetails);
            }
        }
        if (!empty($quantity)) {
        
          if($mailsetting[0]['isinvoice']==1){
          $mail = $this->invoice_pdf_generate($invoice_id);
          if($mail == 0){
           $data['message2'] = $this->session->set_flashdata(array('exception' => display('please_config_your_mail_setting')));
          }
        }
    }

        ##==== SERVICE PART START ====###
            
            //service invoice
             $serviceinvoice = array(
            'employee_id'     => '',
            'customer_id'     => $customer_id,
            'date'            => (!empty($this->input->post('qdate',TRUE))?$this->input->post('qdate',TRUE):date('Y-m-d')),
            'total_amount'    => $this->input->post('grand_total_service_amount',TRUE),
            'total_tax'       => $this->input->post('total_service_tax',TRUE),
            'voucher_no'      => $invoice_id,
            'details'         => (!empty($this->input->post('details',TRUE))?$this->input->post('details',TRUE):'Service From Quotation'),
            'invoice_discount'=> $this->input->post('service_discount',TRUE),
            'total_discount'  => $this->input->post('totalServiceDicount',TRUE),
            'shipping_cost'   => '',
            'paid_amount'     => $this->input->post('grand_total_service_amount',TRUE),
            'due_amount'      => 0,
            'previous'        => '',
            
        );
       

        $cashinhandforservicedebit = array(
      'VNo'            =>  $invoice_id,
      'Vtype'          =>  'SERVICE',
      'VDate'          =>  $createdate,
      'COAID'          =>  1020101,
      'Narration'      =>  'Cash in Hand For SERVICE No'.$invoice_id,
      'Debit'          =>  $this->input->post('grand_total_service_amount',TRUE),
      'Credit'         =>  0,
      'IsPosted'       =>  1,
      'CreateBy'       =>  $createby,
      'CreateDate'     =>  $createdate,
      'IsAppove'       =>  1
    );


$service_income = array(
      'VNo'            =>  $invoice_id,
      'Vtype'          =>  'SERVICE',
      'VDate'          =>  $createdate,
      'COAID'          =>  304,
      'Narration'      =>  'Service Income For SERVICE No'.$invoice_id,
      'Debit'          =>  0,
      'Credit'         =>  $this->input->post('grand_total_service_amount',TRUE),
      'IsPosted'       =>  1,
      'CreateBy'       =>  $createby,
      'CreateDate'     =>  $createdate,
      'IsAppove'       =>  1
    );

$cosdr_service = array(
      'VNo'            =>  $invoice_id,
      'Vtype'          =>  'SERVICE',
      'VDate'          =>  $createdate,
      'COAID'          =>  $customer_headcode,
      'Narration'      =>  'Customer debit For service No'.$invoice_id,
      'Debit'          =>  $this->input->post('grand_total_service_amount',TRUE),
      'Credit'         =>  0,
      'IsPosted'       => 1,
      'CreateBy'       => $createby,
      'CreateDate'     => $createdate,
      'IsAppove'       => 1
    ); 
      
      

       ///Customer credit for Paid Amount
       $coscr_service = array(
      'VNo'            =>  $invoice_id,
      'Vtype'          =>  'SERVICE',
      'VDate'          =>  $createdate,
      'COAID'          =>  $customer_headcode,
      'Narration'      =>  'Customer credit for Paid Amount For Service No'.$invoice_id,
      'Debit'          =>  0,
      'Credit'         =>  $this->input->post('grand_total_service_amount',TRUE),
      'IsPosted'       => 1,
      'CreateBy'       => $createby,
      'CreateDate'     => $createdate,
      'IsAppove'       => 1
    ); 
 
  $bankdebitforservice = array(
      'VNo'            =>  $invoice_id,
      'Vtype'          =>  'INVOICE',
      'VDate'          =>  $createdate,
      'COAID'          =>  $bankcoaid,
      'Narration'      =>  'Paid amount for customer  '.$cusifo->customer_name,
      'Debit'          =>  $this->input->post('grand_total_service_amount',TRUE),
      'Credit'         =>  0,
      'IsPosted'       =>  1,
      'CreateBy'       =>  $createby,
      'CreateDate'     =>  $createdate,
      'IsAppove'       =>  1
    ); 



 if (!empty($squantity)) {
    $this->db->insert('service_invoice', $serviceinvoice);
    $this->db->insert('acc_transaction', $service_income);
    $this->db->insert('acc_transaction',$cosdr_service);
    $this->db->insert('acc_transaction', $coscr_service);
if($this->input->post('paytype',TRUE) == 1){
    $this->db->insert('acc_transaction', $cashinhandforservicedebit);
}
if($this->input->post('paytype',TRUE) == 2){
    $this->db->insert('acc_transaction', $bankdebitforservice);
    
}
}
        $qty                 = $this->input->post('service_quantity',TRUE);
        $srate               = $this->input->post('service_rate',TRUE);
        $serv_id             = $this->input->post('service_id',TRUE);
        $total_serviceamount = $this->input->post('total_service_amount',TRUE);
        $sdiscount_rate      = $this->input->post('sdiscount_amount',TRUE);
        $sdiscount_per       = $this->input->post('sdiscount',TRUE);
        $tax_amount          = $this->input->post('stax',TRUE);
        $invoice_description = $this->input->post('details',TRUE);

        for ($i = 0, $n   = count($serv_id); $i < $n; $i++) {
            $service_qty  = $qty[$i];
            $service_rate = $srate[$i];
            $service_id   = $serv_id[$i];
            $total_amount = $total_serviceamount[$i];
            $disper       = $sdiscount_per[$i];
            $disamnt      = $sdiscount_rate[$i];
           
            $service_details = array(
                'service_inv_id'     => $invoice_id,
                'service_id'         => $service_id,
                'qty'                => $service_qty,
                'charge'             => $service_rate,
                'discount'           => $disper,
                'discount_amount'    => $disamnt,
                'total'              => $total_amount,
            );
            if (!empty($service_qty)) {
                $this->db->insert('service_invoice_details', $service_details);
            }
           

        }
         if (!empty($squantity)) {
         if($mailsetting[0]['isservice']==1){
          $mail = $this->service_pdf_generate($invoice_id);
          if($mail == 0){
          $this->session->set_flashdata(array('exception' => display('please_config_your_mail_setting')));
          }
        }
         }

         for($j=0;$j<$num_column;$j++){
                $taxfield = 'tax'.$j;
                $taxvalue = 'total_service_tax'.$j;
              $taxdata[$taxfield] = $this->input->post($taxvalue);
            }
            $taxdata['customer_id'] = $customer_id;
            $taxdata['date']        = (!empty($this->input->post('qdate',TRUE))?$this->input->post('qdate',TRUE):date('Y-m-d'));
            $taxdata['relation_id'] = $invoice_id;
            $this->db->insert('tax_collection',$taxdata);



            $this->session->set_flashdata(array('message' => display('successfully_added')));
                redirect(base_url('manage_quotation'));

    }


    public function invoice_pdf_generate($invoice_id = null) {
        $id = $invoice_id; 
        $invoice_detail = $this->quotation_model->retrieve_invoice_html_data($invoice_id);
        $taxfield = $this->db->select('*')
                ->from('tax_settings')
                ->where('is_show',1)
                ->get()
                ->result_array();
        $txregname ='';
        foreach($taxfield as $txrgname){
        $regname = $txrgname['tax_name'].' Reg No  - '.$txrgname['reg_no'].', ';
        $txregname .= $regname;
        }       
        $subTotal_quantity = 0;
        $subTotal_cartoon = 0;
        $subTotal_discount = 0;
        $subTotal_ammount = 0;
        $descript = 0;
        $isserial = 0;
        $isunit = 0;
        $is_discount = 0;
        if (!empty($invoice_detail)) {
            foreach ($invoice_detail as $k => $v) {
                $invoice_detail[$k]['final_date'] = $this->occational->dateConvert($invoice_detail[$k]['date']);
                $subTotal_quantity = $subTotal_quantity + $invoice_detail[$k]['quantity'];
                $subTotal_ammount = $subTotal_ammount + $invoice_detail[$k]['total_price'];
               
            }

            $i = 0;
            foreach ($invoice_detail as $k => $v) {
                $i++;
                $invoice_detail[$k]['sl'] = $i;
                if(!empty($invoice_detail[$k]['description'])){
                    $descript = $descript+1;
                    
                }
                 if(!empty($invoice_detail[$k]['serial_no'])){
                    $isserial = $isserial+1;
                    
                }
                 if(!empty($invoice_detail[$k]['discount_per'])){
                    $is_discount = $is_discount+1;
                    
                }

                if(!empty($invoice_detail[$k]['unit'])){
                    $isunit = $isunit+1;
                    
                }
   
            }
        }

        $currency_details = $this->quotation_model->setting_data();
        $company_info = $this->quotation_model->retrieve_company();
        $totalbal = $invoice_detail[0]['total_amount']+$invoice_detail[0]['prevous_due'];
        $amount_inword = $this->numbertowords->convert_number($totalbal);
        $user_id = $invoice_detail[0]['sales_by'];
        $users   = $this->Invoices->user_invoice_data($user_id);
        $name    = $invoice_detail[0]['customer_name'];
        $email   = $invoice_detail[0]['customer_email'];
        $data = array(
        'title'             => display('invoice_details'),
        'invoice_id'        => $invoice_detail[0]['invoice_id'],
        'customer_info'     => $invoice_detail,
        'invoice_no'        => $invoice_detail[0]['invoice'],
        'customer_name'     => $invoice_detail[0]['customer_name'],
        'customer_address'  => $invoice_detail[0]['customer_address'],
        'customer_mobile'   => $invoice_detail[0]['customer_mobile'],
        'customer_email'    => $invoice_detail[0]['customer_email'],
        'final_date'        => $invoice_detail[0]['final_date'],
        'invoice_details'   => $invoice_detail[0]['invoice_details'],
        'total_amount'      => number_format($invoice_detail[0]['total_amount']+$invoice_detail[0]['prevous_due'], 2, '.', ','),
        'subTotal_quantity' => $subTotal_quantity,
        'total_discount'    => number_format($invoice_detail[0]['total_discount'], 2, '.', ','),
        'total_tax'         => number_format($invoice_detail[0]['total_tax'], 2, '.', ','),
        'subTotal_ammount'  => number_format($subTotal_ammount, 2, '.', ','),
        'paid_amount'       => number_format($invoice_detail[0]['paid_amount'], 2, '.', ','),
        'due_amount'        => number_format($invoice_detail[0]['due_amount'], 2, '.', ','),
        'previous'          => number_format($invoice_detail[0]['prevous_due'], 2, '.', ','),
        'shipping_cost'     => number_format($invoice_detail[0]['shipping_cost'], 2, '.', ','),
        'invoice_all_data'  => $invoice_detail,
        'company_info'      => $company_info,
        'currency'          => $currency_details[0]['currency'],
        'position'          => $currency_details[0]['currency_position'],
        'discount_type'     => $currency_details[0]['discount_type'],
        'currency_details'  => $currency_details,
        'am_inword'         => $amount_inword,
        'is_discount'       => $is_discount,
        'users_name'        => $users->first_name.' '.$users->last_name,
        'tax_regno'         => $txregname,
        'is_desc'           => $descript,
        'is_serial'         => $isserial,
        'is_unit'           => $isunit,
        );

        $this->load->library('pdfgenerator');
        $html = $this->load->view('invoice/invoice_download', $data, true);
        $dompdf = new DOMPDF();
        $dompdf->load_html($html);
        $dompdf->render();
        $output = $dompdf->output();
        file_put_contents('assets/data/pdf/invoice/' . $id . '.pdf', $output);
        $file_path = getcwd() . '/assets/data/pdf/invoice/' . $id . '.pdf';
        $send_email = '';
        if (!empty($email)) {
            $send_email = $this->setmail($email, $file_path, $invoice_detail[0]['invoice'], $name);
            
            if($send_email){
           return 1;
            }else{
               return 0;
               
            }
           
        }
      return 0; 
       
    }


//service details pdf sent to mail after adding invoice
 public function service_pdf_generate($invoice_id = null) {

        $currency_details = $this->quotation_model->setting_data();
        $service_inv_main = $this->service_model->service_invoice_updata($invoice_id);
        $customer_info    =  $this->service_model->customer_info($service_inv_main[0]['customer_id']);
        $taxinfo          = $this->service_model->service_invoice_taxinfo($invoice_id);
        $taxfield         = $this->db->select('tax_name,default_value')
                ->from('tax_settings')
                ->get()
                ->result_array();
        $company_info = $this->quotation_model->retrieve_company();

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
        $name    = $customer_info->customer_name;
        $email   = $customer_info->customer_email;
        $data = array(
            'title'         => display('service_details'),
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




        //This function is used to Generate Key
    public function generator($lenth) {
        $number = array("1", "2", "3", "4", "5", "6", "7", "8", "9");

        for ($i = 0; $i < $lenth; $i++) {
            $rand_value = rand(0, 8);
            $rand_number = $number["$rand_value"];

            if (empty($con)) {
                $con = $rand_number;
            } else {
                $con = "$con" . "$rand_number";
            }
        }
        return $con;
    }

       //NUMBER GENERATOR
    public function number_generator() {
        $this->db->select_max('invoice', 'invoice_no');
        $query = $this->db->get('invoice');
        $result = $query->result_array();
        $invoice_no = $result[0]['invoice_no'];
        if ($invoice_no != '') {
            $invoice_no = $invoice_no + 1;
        } else {
            $invoice_no = 1000;
        }
        return $invoice_no;
    }


      public function quotation_details_data($quot_id = null) {
        $currency_details     = $this->quotation_model->setting_data();
        $data['currency_details'] = $currency_details;
        $data['title']        = display('quotation_details');
        $data['quot_main']    = $this->quotation_model->quot_main_edit($quot_id);
        $data['quot_product'] = $this->quotation_model->quot_product_detail($quot_id);
        $data['quot_service'] = $this->quotation_model->quot_service_detail($quot_id);
        $data['customer_info']= $this->quotation_model->customerinfo($data['quot_main'][0]['customer_id']);
       $data['discount_type'] = $currency_details[0]['discount_type'];
       $data['company_info'] = $this->quotation_model->retrieve_company();
       $data['module']        = "quotation";
       $data['page']          = "quotation_details"; 
        echo modules::run('template/layout', $data);
    }

     public function quotation_edit($quot_id = null) {
        $taxfield = $this->db->select('tax_name,default_value')
                ->from('tax_settings')
                ->get()
                ->result_array();
            
        $tablecolumn          = $this->db->list_fields('tax_collection');
        $num_column           = count($tablecolumn)-4;       
        $currency_details     = $this->quotation_model->setting_data();
        $data['currency_details'] = $currency_details;
        $data['title']        = display('quotation_edit');
        $data['quot_main']    = $this->quotation_model->quot_main_edit($quot_id);
        $data['quot_product'] = $this->quotation_model->quot_product_detail($quot_id);
        $data['quot_service'] = $this->quotation_model->quot_service_detail($quot_id);
        $data['customer_info']= $this->quotation_model->customerinfo($data['quot_main'][0]['customer_id']);
        $data['itemtaxin']    = $this->quotation_model->itemtaxdetails($data['quot_main'][0]['quot_no']);
        $data['servicetaxin']= $this->quotation_model->servicetaxdetails($data['quot_main'][0]['quot_no']);
        $data['taxes']       = $taxfield;
        $data['taxnumber']   = $num_column;
        $data['customers']   = $this->quotation_model->get_allcustomer();
        $data['get_productlist'] = $this->quotation_model->get_allproduct();
        $data['discount_type'] = $currency_details[0]['discount_type'];
        $data['company_info'] = $this->quotation_model->retrieve_company();
        $data['module']       = "quotation";
        $data['page']         = "quotation_update"; 
        echo modules::run('template/layout', $data);
    }


     public function update_quotation(){
         $quot_id = $this->input->post('quotation_id',TRUE);
        $tablecolumn = $this->db->list_fields('quotation_taxinfo');
        $num_column = count($tablecolumn)-4;
            $customershow = 0;
            $status = 1;
            $data = array(
            'quotation_id'        => $quot_id,
            'customer_id'         => $this->input->post('customer_id',TRUE),
            'quotdate'            => $this->input->post('qdate',TRUE),
            'expire_date'         => $this->input->post('expiry_date',TRUE),
            'item_total_amount'   => $this->input->post('grand_total_price',TRUE),
            'item_total_dicount'  => $this->input->post('total_discount',TRUE),
            'item_total_tax'      => $this->input->post('total_tax',TRUE),
            'service_total_amount'=> $this->input->post('grand_total_service_amount',TRUE),
            'service_total_discount'=> $this->input->post('totalServiceDicount',TRUE),
            'service_total_tax'   => $this->input->post('total_service_tax',TRUE),
            'quot_dis_item'       =>$this->input->post('invoice_discount',TRUE),
            'quot_dis_service'    =>$this->input->post('service_discount',TRUE),
            'quot_no'             => $this->input->post('quotation_no',TRUE),
            'create_by'           => $this->session->userdata('id'),
            'quot_description'    => $this->input->post('details',TRUE),
            'status'              => $status,
            );

            $result = $this->quotation_model->quotation_update($data);

            if ($result == TRUE) {

                  $this->db->where('quot_id', $quot_id);
                  $this->db->delete('quot_products_used');
                  $this->db->where('quot_id', $quot_id);
                  $this->db->delete('quotation_service_used');
                // Used Item Details Part
                $item         = $this->input->post('product_id',TRUE);
                $serial       = $this->input->post('serial_no',TRUE);
                $descrp       = $this->input->post('desc',TRUE);
                $item_rate    = $this->input->post('product_rate',TRUE);
                $item_supp_rate= $this->input->post('supplier_price',TRUE);
                $item_qty     = $this->input->post('product_quantity',TRUE);
                $item_dis_per = $this->input->post('discount',TRUE);
                $item_total_discount = $this->input->post('discount_amount',TRUE);
                $item_tax     = $this->input->post('tax',TRUE);
                $totalp       =  $this->input->post('total_price',TRUE);
                for ($j = 0, $n = count($item); $j < $n; $j++) {
                    $product_id    = $item[$j];
                    $rate          = $item_rate[$j];
                    $qty           = $item_qty[$j];
                    $supplier_rate = $item_supp_rate[$j];
                    $discount      = $item_dis_per[$j];
                    $totaldiscount = $item_total_discount[$j];
                    $tax           = $item_tax[$j];
                    $srl           = $serial[$j];
                    $dcript        = $descrp[$j];
                    $total_price   = $totalp[$j];
                    $quotitem = array(
                        'quot_id'       => $quot_id,
                        'product_id'    => $product_id,
                        'serial_no'     => $srl,
                        'description'   => $dcript,
                        'rate'          => $rate,
                        'supplier_rate' => $supplier_rate,
                        'total_price'   => $total_price,
                        'discount_per'  => $discount,
                        'discount'      => $totaldiscount,
                        'tax'           => $tax,
                        'used_qty'      => $qty,
                    );

                  
                    $this->db->insert('quot_products_used', $quotitem);
                }

                //item tax info
                for($l=0;$l<$num_column;$l++){
                $taxfield = 'tax'.$l;
                $taxvalue = 'total_tax'.$l;
              $taxdata[$taxfield]=$this->input->post($taxvalue);
            }
            $taxdata['customer_id'] = $this->input->post('customer_id',TRUE);
            $taxdata['date']        = (!empty($this->input->post('qdate',TRUE))?$this->input->post('qdate',TRUE):date('Y-m-d'));
            $taxdata['relation_id'] = 'item'.$this->input->post('quotation_no',TRUE);
            $this->db->insert('quotation_taxinfo',$taxdata);

                    // Used Service Details Part
                $service                = $this->input->post('service_id',TRUE);
                $service_rate           = $this->input->post('service_rate',TRUE);
                $service_qty            = $this->input->post('service_quantity',TRUE);
                $service_dis_per        = $this->input->post('sdiscount',TRUE);
                $service_total_discount = $this->input->post('sdiscount_amount',TRUE);
                $totalservicep          = $this->input->post('total_service_amount',TRUE);
                $service_tax            = $this->input->post('stax',TRUE);
                for ($k = 0, $n = count($service); $k < $n; $k++) {
                    $service_id     = $service[$k];
                    $charge         = $service_rate[$k];
                    $sqty           = $service_qty[$k];
                    $sdiscount      = $service_dis_per[$k];
                    $stotaldiscount = $service_total_discount[$k];
                    $stax           = $service_tax[$k];
                    $total_serviceprice = $totalservicep[$k];
                    $quotservice = array(
                        'quot_id'        => $quot_id,
                        'service_id'     => $service_id,
                        'charge'         => $charge,
                        'total'          => $total_serviceprice,
                        'discount'       => $sdiscount,
                        'discount_amount'=> $stotaldiscount,
                        'tax'            => $stax,
                        'qty'            => $qty,
                    );
                    $this->db->insert('quotation_service_used', $quotservice);
                }
                //service taxinfo

                for($m=0;$m<$num_column;$m++){
                     $taxfield = 'tax'.$m;
                $taxvalue = 'total_service_tax'.$m;
              $servicetaxinfo[$taxfield]=$this->input->post($taxvalue);
            }
            $servicetaxinfo['customer_id'] =$this->input->post('customer_id',TRUE);
            $servicetaxinfo['date']        = (!empty($this->input->post('qdate',TRUE))?$this->input->post('qdate',TRUE):date('Y-m-d'));
            $servicetaxinfo['relation_id'] = 'serv'.$this->input->post('quotation_no',TRUE);
            $this->db->insert('quotation_taxinfo',$servicetaxinfo);

       $mailsetting = $this->db->select('*')->from('email_config')->get()->result_array();
        if($mailsetting[0]['isquotation']==1){
          $mail = $this->quotation_pdf_generate($quot_id);
          if($mail == 0){
            $this->session->set_flashdata(array('exception' => display('please_config_your_mail_setting')));
          }
        }
        $this->session->set_flashdata(array('message' => display('quotation_successfully_updated')));
         redirect(base_url('manage_quotation')); 
           
            } else {
                $this->session->set_flashdata(array('exception' => display('please_try_again')));
                redirect(base_url('add_quotation'));
            }
    }


        // quotation delete 
    public function delete_quotation($quot_id = null) {
        if ($this->quotation_model->quotation_delete($quot_id)) {
            #set success message
            $this->session->set_flashdata('message', display('delete_successfully'));
        } else {
            #set exception message
            $this->session->set_flashdata('exception', display('please_try_again'));
        }
        redirect(base_url('manage_quotation'));
    }


     public function quotation_download($quot_id = null) {
        $currency_details         = $this->quotation_model->setting_data();
        $data['currency_details'] = $currency_details;
        $data['title']            = display('quotation_details');
        $data['quot_main']        = $this->quotation_model->quot_main_edit($quot_id);
        $data['quot_service']     = $this->quotation_model->quot_service_detail($quot_id);
        $data['quot_product']     = $this->quotation_model->quot_product_detail($quot_id);
        $data['customer_info']    = $this->quotation_model->customerinfo($data['quot_main'][0]['customer_id']);
        $data['discount_type']   = $currency_details[0]['discount_type'];
        $data['company_info'] = $this->quotation_model->retrieve_company();
        $data['currency_details'] = $currency_details;

        $this->load->library('pdfgenerator');
        $dompdf = new DOMPDF();
        $page = $this->load->view('quotation/quotation_download', $data, true);
        $file_name = time();
        $dompdf->load_html($page);
        $dompdf->render();
        $output = $dompdf->output();
        file_put_contents("assets/data/pdf/quotation/$file_name.pdf", $output);
        $filename = $file_name . '.pdf';
        $file_path = base_url() . 'assets/data/pdf/quotation/' . $filename;

        $this->load->helper('download');
        force_download('./assets/data/pdf/quotation/' . $filename, NULL);
        redirect("manage_quotation");
    }


}

