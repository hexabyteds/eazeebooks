<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 #------------------------------------    
    # Author: Bdtask Ltd
    # Author link: https://www.bdtask.com/
    # Dynamic style php file
    # Developed by :Isahaq
    #------------------------------------    

class Invoice_model extends CI_Model {


 public function customer_list(){
     $query = $this->db->select('*')
                ->from('customer_information')
                ->where('status', '1')
                ->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
 }
 
 
 
 
 public function GetCustomerById($id)  
      {  
         //data is retrive from this query
        $this->db->select('*');
        $this->db->from('customer_information');
        $this->db->where('customer_id',$id);
        $query   = $this->db->get();
        $itemlist=$query->result_array();
        return $itemlist; 
      }  
 
 
 
 
    public function tax_fileds(){
        return $taxfield = $this->db->select('tax_name,default_value')
                ->from('tax_settings')
                ->get()
                ->result_array();
    }

        public function pos_customer_setup() {
        $query = $this->db->select('*')
                ->from('customer_information')
                ->where('customer_name', 'Walking Customer')
                ->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
 
      public function allproduct(){
        $this->db->select('*');
        $this->db->from('product_information');
        $this->db->order_by('product_name','asc');
        $this->db->limit(30);
        $query   = $this->db->get();
        $itemlist=$query->result();
        return $itemlist;
        }


   public function todays_invoice(){
        $this->db->select('a.*,b.customer_name');
        $this->db->from('invoice a');
        $this->db->join('customer_information b', 'b.customer_id = a.customer_id','left');
        $this->db->where('a.date',date('Y-m-d'));
        $this->db->order_by('a.invoice', 'desc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

        public function customer_dropdown()
    {
        $data = $this->db->select("*")
            ->from('customer_information')
            ->get()
            ->result();

        $list[''] = 'Select Customer';
        if (!empty($data)) {
            foreach($data as $value)
                $list[$value->customer_id] = $value->customer_name;
            return $list;
        } else {
            return false; 
        }
    }

        public function customer_search($customer_id){
        $query = $this->db->select('*')
                          ->from('customer_information')
                          ->group_start()
                          ->like('customer_name', $customer_id)
                          ->or_like('customer_mobile', $customer_id)
                          ->group_end()
                          ->limit(30)
                          ->get();
                          if ($query->num_rows() > 0) {
                              return $query->result_array();  
                          }
                          return false;
    }

      public function count_invoice() {
        return $this->db->count_all("invoice");
    }

     public function getInvoiceList($postData=null){
         $response = array();
         $usertype = $this->session->userdata('user_type');
         $fromdate = $this->input->post('fromdate',TRUE);
         $todate   = $this->input->post('todate',TRUE);
         if(!empty($fromdate)){
            $datbetween = "(a.date BETWEEN '$fromdate' AND '$todate')";
         }else{
            $datbetween = "";
         }
         ## Read value
         $draw         = $postData['draw'];
         $start        = $postData['start'];
         $rowperpage   = $postData['length']; // Rows display per page
         $columnIndex  = $postData['order'][0]['column']; // Column index
         $columnName   = $postData['columns'][$columnIndex]['data']; 
         $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
         $searchValue  = $postData['search']['value']; // Search value

         ## Search 
         $searchQuery = "";
         if($searchValue != ''){
            $searchQuery = " (b.customer_name like '%".$searchValue."%' or a.invoice like '%".$searchValue."%' or a.date like'%".$searchValue."%' or a.invoice_id like'%".$searchValue."%' or u.first_name like'%".$searchValue."%'or u.last_name like'%".$searchValue."%')";
         }

         ## Total number of records without filtering
         $this->db->select('count(*) as allcount');
         $this->db->from('invoice a');
         $this->db->join('customer_information b', 'b.customer_id = a.customer_id','left');
         $this->db->join('users u', 'u.user_id = a.sales_by','left');
         if($usertype == 2){
          $this->db->where('a.sales_by',$this->session->userdata('user_id'));
         }
          if(!empty($fromdate) && !empty($todate)){
             $this->db->where($datbetween);
         }
          if($searchValue != '')
          $this->db->where($searchQuery);
          
         $records = $this->db->get()->result();
         $totalRecords = $records[0]->allcount;

         ## Total number of record with filtering
         $this->db->select('count(*) as allcount');
         $this->db->from('invoice a');
         $this->db->join('customer_information b', 'b.customer_id = a.customer_id','left');
         $this->db->join('users u', 'u.user_id = a.sales_by','left');
         if($usertype == 2){
          $this->db->where('a.sales_by',$this->session->userdata('user_id'));
         }
         if(!empty($fromdate) && !empty($todate)){
             $this->db->where($datbetween);
         }
         if($searchValue != '')
            $this->db->where($searchQuery);
          
         $records = $this->db->get()->result();
         $totalRecordwithFilter = $records[0]->allcount;

         ## Fetch records
         $this->db->select("a.*,b.customer_name,u.first_name,u.last_name");
         $this->db->from('invoice a');
         $this->db->join('customer_information b', 'b.customer_id = a.customer_id','left');
         $this->db->join('users u', 'u.user_id = a.sales_by','left');
         if($usertype == 2){
          $this->db->where('a.sales_by',$this->session->userdata('user_id'));
         }
          if(!empty($fromdate) && !empty($todate)){
             $this->db->where($datbetween);
         }
         if($searchValue != '')
         $this->db->where($searchQuery);
       
         $this->db->order_by($columnName, $columnSortOrder);
         $this->db->limit($rowperpage, $start);
         $records = $this->db->get()->result();
         $data = array();
         $sl =1;
  
         foreach($records as $record ){
          $button = '';
          $base_url = base_url();
          $jsaction = "return confirm('Are You Sure ?')";

           $button .='  <a href="'.$base_url.'invoice_details/'.$record->invoice_id.'" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="left" title="'.display('invoice').'"><i class="fa fa-window-restore" aria-hidden="true"></i></a>';

         /*$button .='  <a href="'.$base_url.'invoice_pad_print/'.$record->invoice_id.'" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="left" title="'.display('pad_print').'"><i class="fa fa-fax" aria-hidden="true"></i></a>';*/

         $button .='  <a href="'.$base_url.'pos_print/'.$record->invoice_id.'" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="left" title="'.display('pos_invoice').'"><i class="fa fa-fax" aria-hidden="true"></i></a>';
          /*$button .='  <a href="'.$base_url.'download_invoice/'.$record->invoice_id.'" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="left" title="'.display('download').'"><i class="fa fa-download"></i></a>';*/

      if($this->permission1->method('manage_invoice','update')->access()){
         $button .=' <a href="'.$base_url.'invoice_edit/'.$record->invoice_id.'" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="'. display('update').'"><i class="fa fa-pencil" aria-hidden="true"></i></a> ';
     }

       

          $details ='  <a href="'.$base_url.'invoice_details/'.$record->invoice_id.'" class="" >'.$record->invoice.'</a>';
               
            $data[] = array( 
                'sl'               =>$sl,
                'invoice'          =>$details,
                'salesman'         =>$record->first_name.' '.$record->last_name,
                'customer_name'    =>$record->customer_name,
                'final_date'       =>date("d-M-Y",strtotime($record->date)),
                'total_amount'     =>$record->total_amount,
                'button'           =>$button,
                
            ); 
            $sl++;
         }

         ## Response
         $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecordwithFilter,
            "iTotalDisplayRecords" => $totalRecords,
            "aaData" => $data
         );

         return $response; 
    }


public function invoice_taxinfo($invoice_id){
       return $this->db->select('*')   
            ->from('tax_collection')
            ->where('relation_id',$invoice_id)
            ->get()
            ->result_array(); 
    }

        public function retrieve_invoice_editdata($invoice_id) {
        $this->db->select('a.*, sum(c.quantity) as sum_quantity, a.total_tax as taxs,a. prevous_due,b.customer_name,c.*,c.tax as total_tax,c.product_id,d.product_name,d.product_model,d.tax,d.unit,d.*');
        $this->db->from('invoice a');
        $this->db->join('customer_information b', 'b.customer_id = a.customer_id');
        $this->db->join('invoice_details c', 'c.invoice_id = a.invoice_id');
        $this->db->join('product_information d', 'd.product_id = c.product_id');
        $this->db->where('a.invoice_id', $invoice_id);
        $this->db->group_by('d.product_id');

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

     public function invoice_entry() {
        $tablecolumn         = $this->db->list_fields('tax_collection');
        $num_column          = count($tablecolumn)-4;
        $invoice_id          = $this->generator(10);
        $invoice_id          = strtoupper($invoice_id);
        $createby            = $this->session->userdata('id');
        $createdate          = date('Y-m-d H:i:s');
        $product_id          = $this->input->post('product_id');
        $currency_details    = $this->db->select('*')->from('web_setting')->get()->result_array();
       $quantity            = $this->input->post('product_quantity',TRUE);
        $invoice_no_generated= $this->input->post('invoice_no');
        $changeamount        = $this->input->post('change',TRUE);
        if($changeamount > 0){
           $paidamount = $this->input->post('n_total',TRUE);

        }else{
             $paidamount = $this->input->post('paid_amount',TRUE);
        }

     $bank_id = $this->input->post('bank_id',TRUE);
        if(!empty($bank_id)){
       $bankname = $this->db->select('bank_name')->from('bank_add')->where('bank_id',$bank_id)->get()->row()->bank_name;
    
       $bankcoaid = $this->db->select('HeadCode')->from('acc_coa')->where('HeadName',$bankname)->get()->row()->HeadCode;
   }else{
    $bankcoaid='';
   }

        $available_quantity = $this->input->post('available_quantity',TRUE);
       
        $result = array();
        foreach ($available_quantity as $k => $v) {
            if ($v < $quantity[$k]) {
                $this->session->set_userdata(array('error_message' => display('you_can_not_buy_greater_than_available_qnty')));
                redirect('Cinvoice');
            }
        }


        $customer_id = $this->input->post('customer_id',TRUE);
      
        //Full or partial Payment record.
        $paid_amount    = $this->input->post('paid_amount',TRUE);
        $transection_id = $this->generator(8);
        $tax_v = 0;
             for($j=0;$j<$num_column;$j++){
                $taxfield        = 'tax'.$j;
                $taxvalue        = 'total_tax'.$j;
              $taxdata[$taxfield]=$this->input->post($taxvalue);
              $tax_v    += $this->input->post($taxvalue);
            }
            $taxdata['customer_id'] = $customer_id;
            $taxdata['date']        = (!empty($this->input->post('invoice_date',TRUE))?$this->input->post('invoice_date',TRUE):date('Y-m-d'));
            $taxdata['relation_id'] = $invoice_id;
            if($tax_v > 0){
            $this->db->insert('tax_collection',$taxdata);
              }


        //Data inserting into invoice table
        $datainv = array(
            'invoice_id'      => $invoice_id,
            'customer_id'     => $customer_id,
            'date'            => (!empty($this->input->post('invoice_date',TRUE))?$this->input->post('invoice_date',TRUE):date('Y-m-d')),
            'total_amount'    => $this->input->post('grand_total_price',TRUE),
            'total_tax'       => $this->input->post('total_tax',TRUE),
            'invoice'         => $this->input->post('invoice_no',TRUE),
            'invoice_details' => (!empty($this->input->post('inva_details',TRUE))?$this->input->post('inva_details',TRUE):'Thank you for shopping with us'),
            'invoice_discount'=> $this->input->post('invoice_discount',TRUE),
            'total_discount'  => $this->input->post('total_discount',TRUE),
            'paid_amount'     => $this->input->post('paid_amount',TRUE),
            'due_amount'      => $this->input->post('due_amount',TRUE),
            'prevous_due'     => $this->input->post('previous',TRUE),
            'shipping_cost'   => $this->input->post('shipping_cost',TRUE),
            'sales_by'        => $this->session->userdata('id'),
            'status'          => 1,
            'payment_type'    =>  $this->input->post('paytype',TRUE),
            'bank_id'         =>  (!empty($this->input->post('bank_id',TRUE))?$this->input->post('bank_id',TRUE):null),
        );

           
          

        $this->db->insert('invoice', $datainv);
        $prinfo  = $this->db->select('product_id,Avg(rate) as product_rate')->from('product_purchase_details')->where_in('product_id',$product_id)->group_by('product_id')->get()->result(); 
    $purchase_ave = [];
    $i=0;
    foreach ($prinfo as $avg) {
      $purchase_ave [] =  $avg->product_rate*$quantity[$i];
      $i++;
    }
    $sumval   = array_sum($purchase_ave);
    $cusifo   = $this->db->select('*')->from('customer_information')->where('customer_id',$customer_id)->get()->row();
    $headn    = $customer_id.'-'.$cusifo->customer_name;
    $coainfo  = $this->db->select('*')->from('acc_coa')->where('HeadName',$headn)->get()->row();
    $customer_headcode = $coainfo->HeadCode;
// Cash in Hand debit
      $cc = array(
      'VNo'            =>  $invoice_id,
      'Vtype'          =>  'INV',
      'VDate'          =>  $createdate,
      'COAID'          =>  1020101,
      'Narration'      =>  'Cash in Hand in Sale for Invoice No - '.$invoice_no_generated.' customer- '.$cusifo->customer_name,
      'Debit'          =>  $paidamount,
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
      'Narration'      =>  'Paid amount for customer  Invoice No - '.$invoice_no_generated.' customer -'.$cusifo->customer_name,
      'Debit'          =>  $paidamount,
      'Credit'         =>  0,
      'IsPosted'       =>  1,
      'CreateBy'       =>  $createby,
      'CreateDate'     =>  $createdate,
      'IsAppove'       =>  1
    ); 

       ///Inventory credit
       $coscr = array(
      'VNo'            =>  $invoice_id,
      'Vtype'          =>  'INV',
      'VDate'          =>  $createdate,
      'COAID'          =>  10107,
      'Narration'      =>  'Inventory credit For Invoice No'.$invoice_no_generated,
      'Debit'          =>  0,
      'Credit'         =>  $sumval,//purchase price asbe
      'IsPosted'       => 1,
      'CreateBy'       => $createby,
      'CreateDate'     => $createdate,
      'IsAppove'       => 1
    ); 
       $this->db->insert('acc_transaction',$coscr);
       
    // Customer Transactions
    //Customer debit for Product Value
    $cosdr = array(
      'VNo'            =>  $invoice_id,
      'Vtype'          =>  'INV',
      'VDate'          =>  $createdate,
      'COAID'          =>  $customer_headcode,
      'Narration'      =>  'Customer debit For Invoice No -  '.$invoice_no_generated.' Customer '.$cusifo->customer_name,
      'Debit'          =>  $this->input->post('n_total',TRUE)-(!empty($this->input->post('previous',TRUE))?$this->input->post('previous',TRUE):0),
      'Credit'         =>  0,
      'IsPosted'       => 1,
      'CreateBy'       => $createby,
      'CreateDate'     => $createdate,
      'IsAppove'       => 1
    ); 
       $this->db->insert('acc_transaction',$cosdr);

  $total_saleamnt = $this->input->post('n_total',TRUE)-(!empty($this->input->post('previous',TRUE))?$this->input->post('previous',TRUE):0);
  $withoutinventory = $total_saleamnt - $sumval;
  $income = $withoutinventory - $this->input->post('total_tax',TRUE);

         $pro_sale_income = array(
      'VNo'            =>  $invoice_id,
      'Vtype'          =>  'INVOICE',
      'VDate'          =>  $createdate,
      'COAID'          =>  303,
      'Narration'      =>  'Sale Income For Invoice NO - '.$invoice_no_generated.' Customer '.$cusifo->customer_name,
      'Debit'          =>  0,
      'Credit'         =>  $income,
      'IsPosted'       => 1,
      'CreateBy'       => $createby,
      'CreateDate'     => $createdate,
      'IsAppove'       => 1
    ); 
       $this->db->insert('acc_transaction',$pro_sale_income);

       $tax_info = array(
      'VNo'            =>  $invoice_id,
      'Vtype'          =>  'INVOICE',
      'VDate'          =>  $createdate,
      'COAID'          =>  50203,
      'Narration'      =>  'Sale Income For Invoice NO - '.$invoice_no_generated.' Customer '.$cusifo->customer_name,
      'Debit'          =>  $this->input->post('total_tax',TRUE),
      'Credit'         =>  0,
      'IsPosted'       => 1,
      'CreateBy'       => $createby,
      'CreateDate'     => $createdate,
      'IsAppove'       => 1
    ); 
       $this->db->insert('acc_transaction',$tax_info);

       ///Customer credit for Paid Amount
       $cuscredit = array(
      'VNo'            =>  $invoice_id,
      'Vtype'          =>  'INV',
      'VDate'          =>  $createdate,
      'COAID'          =>  $customer_headcode,
      'Narration'      =>  'Customer credit for Paid Amount For Customer Invoice NO- '.$invoice_no_generated.' Customer- '.$cusifo->customer_name,
      'Debit'          =>  0,
      'Credit'         =>  $paidamount,
      'IsPosted'       => 1,
      'CreateBy'       => $createby,
      'CreateDate'     => $createdate,
      'IsAppove'       => 1
    ); 
       if(!empty($this->input->post('paid_amount',TRUE))){
            $this->db->insert('acc_transaction',$cuscredit);
          
        if($this->input->post('paytype',TRUE) == 2){
        $this->db->insert('acc_transaction',$bankc);
        
        }
            if($this->input->post('paytype',TRUE) == 1){
        $this->db->insert('acc_transaction',$cc);
        }
       
  }
     $customerinfo = $this->db->select('*')->from('customer_information')->where('customer_id',$customer_id)->get()->row();

        $rate                = $this->input->post('product_rate',TRUE);
         $p_id                = $this->input->post('product_id',TRUE);
        $total_amount        = $this->input->post('total_price',TRUE);
        $discount_rate       = $this->input->post('discount_amount',TRUE);
        $discount_per        = $this->input->post('discount',TRUE);
        $tax_amount          = $this->input->post('tax',TRUE);
        $invoice_description = $this->input->post('desc',TRUE);
        $serial_n            = $this->input->post('serial_no',TRUE);
         $tax_rate1            = $this->input->post('tax_rate',TRUE);
          $tax_amount1            = $this->input->post('tax_amount',TRUE);

        for ($i = 0, $n = count($p_id); $i < $n; $i++) {
            $product_quantity = $quantity[$i];
            $product_rate     = $rate[$i];
            $product_id       = $p_id[$i];
            $serial_no        = (!empty($serial_n[$i])?$serial_n[$i]:null);
            $total_price      = $total_amount[$i];
            $supplier_rate    = $this->supplier_price($product_id);
            $disper           = $discount_per[$i];
            $discount         = is_numeric($product_quantity) * is_numeric($product_rate) * is_numeric($disper) / 100;
            $tax_amount              = $tax_amount1[$i];
            $tax_rate              = $tax_rate1[$i];
            $description      = (!empty($invoice_description)?$invoice_description[$i]:null);
           
            $data1 = array(
                'invoice_details_id' => $this->generator(15),
                'invoice_id'         => $invoice_id,
                'product_id'         => $product_id,
                'serial_no'          => $serial_no,
                'quantity'           => $product_quantity,
                'rate'               => $product_rate,
                'tax_rate'           => $tax_rate,
                 'tax_amount'           => $tax_amount,
                'discount'           => $discount,
                'description'        => $description,
                'discount_per'       => $disper,
                'tax'                => $tax,
                'paid_amount'        => $paidamount,
                'due_amount'         => $this->input->post('due_amount',TRUE),
                'supplier_rate'      => $supplier_rate,
                'total_price'        => $total_price,
                'status'             => 1
            );
            if (!empty($quantity)) {
                $this->db->insert('invoice_details', $data1);
              
            }
        }   
        $message = 'Mr.'.$customerinfo->customer_name.',
        '.'You have purchase  '.$this->input->post('grand_total_price',TRUE).' '. $currency_details[0]['currency'].' You have paid .'.$this->input->post('paid_amount',TRUE).' '. $currency_details[0]['currency'];
       

   $config_data = $this->db->select('*')->from('sms_settings')->get()->row();
        if($config_data->isinvoice == 1){
          $this->smsgateway->send([
            'apiProvider' => 'nexmo',
            'username'    => $config_data->api_key,
            'password'    => $config_data->api_secret,
            'from'        => $config_data->from,
            'to'          => $customerinfo->customer_mobile,
            'message'     => $message
        ]);
      }
    
        return $invoice_id;
    }


        public function update_invoice() {
        $tablecolumn = $this->db->list_fields('tax_collection');
        $num_column  = count($tablecolumn)-4;
        $invoice_id  = $this->input->post('invoice_id',TRUE);
        $invoice_no  = $this->input->post('invoice',TRUE);
        $createby    = $this->session->userdata('id');
        $createdate  = date('Y-m-d H:i:s');
        $customer_id = $this->input->post('customer_id',TRUE);
        $quantity    = $this->input->post('product_quantity',TRUE);
        $product_id  = $this->input->post('product_id',TRUE);

       $changeamount = $this->input->post('change',TRUE);
        if($changeamount > 0){
        $paidamount = $this->input->post('n_total',TRUE);

        }else{
        $paidamount = $this->input->post('paid_amount',TRUE);
        }


   $bank_id = $this->input->post('bank_id',TRUE);
        if(!empty($bank_id)){
       $bankname = $this->db->select('bank_name')->from('bank_add')->where('bank_id',$bank_id)->get()->row()->bank_name;
    
       $bankcoaid = $this->db->select('HeadCode')->from('acc_coa')->where('HeadName',$bankname)->get()->row()->HeadCode;
   }else{
    $bankcoaid='';
   }
   
             $transection_id =$this->generator(8);


            $this->db->where('VNo', $invoice_id);
            $this->db->delete('acc_transaction');
            $this->db->where('relation_id', $invoice_id);
            $this->db->delete('tax_collection');
      
        $data = array(
            'invoice_id'      => $invoice_id,
            'customer_id'     => $this->input->post('customer_id',TRUE),
            'date'            => $this->input->post('invoice_date',TRUE),
            'total_amount'    => $this->input->post('grand_total_price',TRUE),
            'total_tax'       => $this->input->post('total_tax',TRUE),
            'invoice_details' => $this->input->post('inva_details',TRUE),
            'due_amount'      => $this->input->post('due_amount',TRUE),
            'paid_amount'     => $this->input->post('paid_amount',TRUE),
            'invoice_discount'=> $this->input->post('invoice_discount',TRUE),
            'total_discount'  => $this->input->post('total_discount',TRUE),
            'prevous_due'     => $this->input->post('previous',TRUE),
            'shipping_cost'   => $this->input->post('shipping_cost',TRUE),
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

   $cusifo = $this->db->select('*')->from('customer_information')->where('customer_id',$customer_id)->get()->row();
    $headn = $customer_id.'-'.$cusifo->customer_name;
    $coainfo = $this->db->select('*')->from('acc_coa')->where('HeadName',$headn)->get()->row();
    $customer_headcode = $coainfo->HeadCode;
// Cash in Hand debit
      $cc = array(
      'VNo'            =>  $invoice_id,
      'Vtype'          =>  'INV',
      'VDate'          =>  $createdate,
      'COAID'          =>  1020101,
      'Narration'      =>  'Cash in Hand for sale for Invoice No -'.$invoice_no.' Customer '.$cusifo->customer_name,
      'Debit'          =>  $paidamount,
      'Credit'         =>  0,
      'IsPosted'       =>  1,
      'CreateBy'       =>  $createby,
      'CreateDate'     =>  $createdate,
      'IsAppove'       =>  1
    ); 
     

       ///Inventory credit
       $coscr = array(
      'VNo'            =>  $invoice_id,
      'Vtype'          =>  'INV',
      'VDate'          =>  $createdate,
      'COAID'          =>  10107,
      'Narration'      =>  'Inventory credit For Invoice No'.$invoice_no,
      'Debit'          =>  0,
      'Credit'         =>  $sumval,//purchase price asbe
      'IsPosted'       => 1,
      'CreateBy'       => $createby,
      'CreateDate'     => $createdate,
      'IsAppove'       => 1
    ); 
       $this->db->insert('acc_transaction',$coscr);
       
        // bank ledger
 $bankc = array(
      'VNo'            =>  $invoice_id,
      'Vtype'          =>  'INVOICE',
      'VDate'          =>  $createdate,
      'COAID'          =>  $bankcoaid,
      'Narration'      =>  'Paid amount for  Invoice NO- '.$invoice_no.' customer '.$cusifo->customer_name,
      'Debit'          =>  $paidamount,
      'Credit'         =>  0,
      'IsPosted'       =>  1,
      'CreateBy'       =>  $createby,
      'CreateDate'     =>  $createdate,
      'IsAppove'       =>  1
    ); 

/// Sale income
   $pro_sale_income = array(
      'VNo'            =>  $invoice_id,
      'Vtype'          =>  'INVOICE',
      'VDate'          =>  $createdate,
      'COAID'          =>  303,
      'Narration'      =>  'Sale Income From Invoice NO - '.$invoice_no.' Customer '.$cusifo->customer_name,
      'Debit'          =>  0,
      'Credit'         =>  $this->input->post('n_total',TRUE)-(!empty($this->input->post('previous',TRUE))?$this->input->post('previous',TRUE):0),
      'IsPosted'       => 1,
      'CreateBy'       => $createby,
      'CreateDate'     => $createdate,
      'IsAppove'       => 1
    ); 
       $this->db->insert('acc_transaction',$pro_sale_income);
    //Customer debit for Product Value
    $cosdr = array(
      'VNo'            =>  $invoice_id,
      'Vtype'          =>  'INV',
      'VDate'          =>  $createdate,
      'COAID'          =>  $customer_headcode,
      'Narration'      =>  'Customer debit For Invoice NO - '.$invoice_no.' customer-  '.$cusifo->customer_name,
      'Debit'          =>  $this->input->post('grand_total_price',TRUE),
      'Credit'         =>  0,
      'IsPosted'       => 1,
      'CreateBy'       => $createby,
      'CreateDate'     => $createdate,
      'IsAppove'       => 1
    ); 
       $this->db->insert('acc_transaction',$cosdr);

       ///Customer credit for Paid Amount
       $customer_credit = array(
      'VNo'            =>  $invoice_id,
      'Vtype'          =>  'INV',
      'VDate'          =>  $createdate,
      'COAID'          =>  $customer_headcode,
      'Narration'      =>  'Customer credit for Paid Amount For Invoice No -'.$invoice_no.' Customer '.$cusifo->customer_name,
      'Debit'          =>  0,
      'Credit'         =>  $paidamount,
      'IsPosted'       => 1,
      'CreateBy'       => $createby,
      'CreateDate'     => $createdate,
      'IsAppove'       => 1
    ); 

if ($invoice_id != '') {
            $this->db->where('invoice_id', $invoice_id);
            $this->db->update('invoice', $data);
        }
if(!empty($this->input->post('paid_amount',TRUE))){
            $this->db->insert('acc_transaction',$customer_credit);
        if($this->input->post('paytype') == 2){
        $this->db->insert('acc_transaction',$bankc);
   
        }
            if($this->input->post('paytype') == 1){
        $this->db->insert('acc_transaction',$cc);
        }
       
  }

     

         for($j=0;$j<$num_column;$j++){
                $taxfield = 'tax'.$j;
                $taxvalue = 'total_tax'.$j;
              $taxdata[$taxfield]=$this->input->post($taxvalue);
            }
            $taxdata['customer_id'] = $customer_id;
            $taxdata['date']        = (!empty($this->input->post('invoice_date',TRUE))?$this->input->post('invoice_date',TRUE):date('Y-m-d'));
            $taxdata['relation_id'] = $invoice_id;
            $this->db->insert('tax_collection',$taxdata);

        // Inserting for Accounts adjustment.
        ############ default table :: customer_payment :: inflow_92mizdldrv #################

        $invoice_d_id  = $this->input->post('invoice_details_id',TRUE);
        $quantity      = $this->input->post('product_quantity',TRUE);
        $rate          = $this->input->post('product_rate',TRUE);
        $p_id          = $this->input->post('product_id',TRUE);
        $total_amount  = $this->input->post('total_price',TRUE);
        $discount_rate = $this->input->post('discount_amount',TRUE);
        $discount_per  = $this->input->post('discount',TRUE);
        $invoice_description = $this->input->post('desc',TRUE);
		
		 $tax_rate1            = $this->input->post('tax_rate',TRUE);
          $tax_amount1            = $this->input->post('tax_amount',TRUE);
		  
		  
        $this->db->where('invoice_id', $invoice_id);
        $this->db->delete('invoice_details');
        $serial_n       = $this->input->post('serial_no',TRUE);
        for ($i = 0, $n = count($p_id); $i < $n; $i++) {
        $product_quantity = $quantity[$i];
        $product_rate     = $rate[$i];
        $product_id       = $p_id[$i];
        $serial_no        = (!empty($serial_n[$i])?$serial_n[$i]:null);
        $total_price      = $total_amount[$i];
        $supplier_rate    = $this->supplier_price($product_id);
        $discount         = $discount_rate[$i];
        $dis_per          = $discount_per[$i];
        $desciption        = $invoice_description[$i];
        $tax_rate        = $tax_rate1[$i];
        $tax_amount        = $tax_amount1[$i];
		
            if (!empty($tax_amount[$i])) {
                $tax = $tax_amount[$i];
            } else {
                $tax = $this->input->post('tax');
            }


            $data1 = array(
                'invoice_details_id' => $this->generator(15),
                'invoice_id'         => $invoice_id,
                'product_id'         => $product_id,
                'serial_no'          => $serial_no,
                'quantity'           => $product_quantity,
                'rate'               => $product_rate,
                'discount'           => $discount,
                'total_price'        => $total_price,
                'discount_per'       => $dis_per,
                'tax'                => $this->input->post('total_tax',TRUE),
                'paid_amount'        => $paidamount,
				  'tax_rate'        => $tax_rate,
				   'tax_amount'        => $tax_amount,
				    'paid_amount'        => $paidamount,
                 'supplier_rate'     => $supplier_rate,
                'due_amount'         => $this->input->post('due_amount',TRUE),
                'description'       => $desciption,
               );
               $this->db->insert('invoice_details', $data1);
 
            $customer_id = $this->input->post('customer_id',TRUE);
          
        }

        return $invoice_id;
    }


    //POS invoice entry
    public function pos_invoice_setup($product_id) {
        $product_information = $this->db->select('*')
                ->from('product_information')
                ->join('supplier_product', 'product_information.product_id = supplier_product.product_id')
                ->where('product_information.product_id', $product_id)
                ->get()
                ->row();

        if ($product_information != null) {

            $this->db->select('SUM(a.quantity) as total_purchase');
            $this->db->from('product_purchase_details a');
            $this->db->where('a.product_id', $product_id);
            $total_purchase = $this->db->get()->row();

            $this->db->select('SUM(b.quantity) as total_sale');
            $this->db->from('invoice_details b');
            $this->db->where('b.product_id', $product_id);
            $total_sale = $this->db->get()->row();

            $available_quantity = ($total_purchase->total_purchase - $total_sale->total_sale);
          
          $data2 = (object) array(
                        'total_product'  => $available_quantity,
                        'supplier_price' => $product_information->supplier_price,
                        'price'          => $product_information->price,
                        'supplier_id'    => $product_information->supplier_id,
                        'product_id'     => $product_information->product_id,
                        'product_name'   => $product_information->product_name,
                        'product_model'  => $product_information->product_model,
                        'unit'           => $product_information->unit,
                        'tax'            => $product_information->tax,
                        'image'          => $product_information->image,
                        'serial_no'      => $product_information->serial_no,
            );

        

            return $data2;
        } else {
            return false;
        }
    }



 public function searchprod($cid)
    { 
        $this->db->select('*');
        $this->db->from('product_information');
        if($cid !='all'){
        $this->db->where('category_id',$cid);
      }
        $this->db->order_by('product_name','asc');
        $query   = $this->db->get();
        $itemlist=$query->result();
        if($cid = ''){
          return false;
        }else{
           return $itemlist;
        }
       
    }
 public function searchprod_byname($pname= null)
    { 
        $this->db->select('*');
        $this->db->from('product_information');
        $this->db->like('product_name',$pname);
        $this->db->order_by('product_name','asc');
        $this->db->limit(20);
        $query = $this->db->get();
        $itemlist=$query->result();
        return $itemlist;
    }


    public function walking_customer(){
       return $data = $this->db->select('*')->from('customer_information')->like('customer_name','walking','after')->get()->result_array();
    }

        public function category_dropdown()
    {
        $data = $this->db->select("*")
            ->from('product_category')
            ->get()
            ->result();

        $list = array('' => 'select_category');
        if (!empty($data)) {
            foreach($data as $value)
                $list[$value->category_id] = $value->category_name;
            return $list;
        } else {
            return false; 
        }
    }

     public function category_list() {
        $this->db->select('*');
        $this->db->from('product_category');
        $this->db->where('status',1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

      //Retrieve company Edit Data
    public function retrieve_company() {
        $this->db->select('*');
        $this->db->from('company_information');
        $this->db->limit('1');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

       public function retrieve_setting_editdata() {
        $this->db->select('*');
        $this->db->from('web_setting');
        $this->db->where('setting_id', 1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
        //Get Supplier rate of a product
    public function supplier_rate($product_id) {
        $this->db->select('supplier_price');
        $this->db->from('supplier_product');
        $this->db->where(array('product_id' => $product_id));
        $query = $this->db->get();
        return $query->result_array();

        $this->db->select('Avg(rate) as supplier_price');
        $this->db->from('product_purchase_details');
        $this->db->where(array('product_id' => $product_id));
        $query = $this->db->get()->row();
        return $query->result_array();
    }

     public function supplier_price($product_id) {
        $this->db->select('supplier_price');
        $this->db->from('supplier_product');
        $this->db->where(array('product_id' => $product_id));
        $supplier_product = $this->db->get()->row();
   

        $this->db->select('Avg(rate) as supplier_price');
        $this->db->from('product_purchase_details');
        $this->db->where(array('product_id' => $product_id));
        $purchasedetails = $this->db->get()->row();
      $price = (!empty($purchasedetails->supplier_price)?$purchasedetails->supplier_price:$supplier_product->supplier_price);
 
        return (!empty($price)?$price:0);
    }


        public function autocompletproductdata($product_name){
            $query=$this->db->select('*')
                ->from('product_information')
                ->like('product_name', $product_name, 'both')
                ->or_like('product_model', $product_name, 'both')
                ->order_by('product_name','asc')
                ->limit(15)
                ->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();  
        }
        return false;
    }


        public function retrieve_invoice_html_data($invoice_id) {
        $this->db->select('a.total_tax,
                        a.*,
                        b.*,
                        c.*,
                        d.product_id,
                        d.product_name,
                        d.product_details,
                        d.unit,
                        d.product_model,
                        a.paid_amount as paid_amount,
                        a.due_amount as due_amount'
                    );
        $this->db->from('invoice a');
        $this->db->join('invoice_details c', 'c.invoice_id = a.invoice_id');
        $this->db->join('customer_information b', 'b.customer_id = a.customer_id');
        $this->db->join('product_information d', 'd.product_id = c.product_id');
        $this->db->where('a.invoice_id', $invoice_id);
        //$this->db->where('c.quantity >', 0);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

     public function user_invoice_data($user_id){
   return  $this->db->select('*')->from('users')->where('user_id',$user_id)->get()->row();
 }

   // product information retrieve by product id
    public function get_total_product_invoic($product_id) {
        $this->db->select('SUM(a.quantity) as total_purchase');
        $this->db->from('product_purchase_details a');
        $this->db->where('a.product_id', $product_id);
        $total_purchase = $this->db->get()->row();

        $this->db->select('SUM(b.quantity) as total_sale');
        $this->db->from('invoice_details b');
        $this->db->where('b.product_id', $product_id);
        $total_sale = $this->db->get()->row();

        $this->db->select('a.*,b.*');
        $this->db->from('product_information a');
        $this->db->join('supplier_product b', 'a.product_id=b.product_id');
        $this->db->where(array('a.product_id' => $product_id, 'a.status' => 1));
        $product_information = $this->db->get()->row();

        $available_quantity = ($total_purchase->total_purchase - $total_sale->total_sale);
        $tablecolumn = $this->db->list_fields('tax_collection');
               $num_column = count($tablecolumn)-4;
  $taxfield='';
  $taxvar = [];
   for($i=0;$i<$num_column;$i++){
    $taxfield = 'tax'.$i;
    $data2[$taxfield] = (!empty($product_information->$taxfield)?$product_information->$taxfield:0);
    $taxvar[$i]       = (!empty($product_information->$taxfield)?$product_information->$taxfield:0);
    $data2['taxdta']  = $taxvar;
   }

    $content =explode(',', $product_information->serial_no);

        $html = "";
        if (empty($content)) {
            $html .="No Serial Found !";
        }else{
            // Select option created for product
            $html .="<select name=\"serial_no[]\"   class=\"serial_no_1 form-control\" id=\"serial_no_1\">";
                $html .= "<option value=''>".display('select_one')."</option>";
                foreach ($content as $serial) {
                    $html .="<option value=".$serial.">".$serial."</option>";
                }   
            $html .="</select>";
        }

       
            $data2['total_product']  = $available_quantity;
            $data2['supplier_price'] = $product_information->supplier_price;
            $data2['price']          = $product_information->price;
            $data2['supplier_id']    = $product_information->supplier_id;
            $data2['unit']           = $product_information->unit;
            $data2['tax']            = $product_information->tax;
            $data2['serial']         = $html;
            $data2['txnmber']        = $num_column;
        

        return $data2;
    }

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


       public function stock_qty_check($product_id){
        $this->db->select('SUM(a.quantity) as total_purchase');
        $this->db->from('product_purchase_details a');
        $this->db->where('a.product_id', $product_id);
        $total_purchase = $this->db->get()->row();

        $this->db->select('SUM(b.quantity) as total_sale');
        $this->db->from('invoice_details b');
        $this->db->where('b.product_id', $product_id);
        $total_sale = $this->db->get()->row();

        $this->db->select('a.*,b.*');
        $this->db->from('product_information a');
        $this->db->join('supplier_product b', 'a.product_id=b.product_id');
        $this->db->where(array('a.product_id' => $product_id, 'a.status' => 1));
        $product_information = $this->db->get()->row();

        $available_quantity = ($total_purchase->total_purchase - $total_sale->total_sale);
        return (!empty($available_quantity)?$available_quantity:0);

    }


    public function bdtask_invoice_pos_print_direct($invoice_id = null){
        $invoice_detail = $this->retrieve_invoice_html_data($invoice_id);
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
        $is_discount = 0;
        $isunit = 0;
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
                 if(!empty($invoice_detail[$k]['unit'])){
                    $isunit = $isunit+1;
                    
                }
                    if(!empty($invoice_detail[$k]['discount_per'])){
                    $is_discount = $is_discount+1;
                    
                }
            }
        }

        
        $totalbal = $invoice_detail[0]['total_amount']+$invoice_detail[0]['prevous_due'];
        $user_id  = $invoice_detail[0]['sales_by'];
        $currency_details = $this->retrieve_setting_editdata();
         
        $users    = $this->user_invoice_data($user_id);
        $data = array(
        'title'                => display('pos_print'),
        'invoice_id'           => $invoice_detail[0]['invoice_id'],
        'invoice_no'           => $invoice_detail[0]['invoice'],
        'customer_name'        => $invoice_detail[0]['customer_name'],
        'customer_address'     => $invoice_detail[0]['customer_address'],
        'customer_mobile'      => $invoice_detail[0]['customer_mobile'],
        'customer_email'       => $invoice_detail[0]['customer_email'],
        'final_date'           => $invoice_detail[0]['final_date'],
        'invoice_details'      => $invoice_detail[0]['invoice_details'],
        'total_amount'         => number_format($totalbal, 2, '.', ','),
        'subTotal_cartoon'     => $subTotal_cartoon,
        'subTotal_quantity'    => $subTotal_quantity,
        'invoice_discount'     => number_format($invoice_detail[0]['invoice_discount'], 2, '.', ','),
        'total_discount'       => number_format($invoice_detail[0]['total_discount'], 2, '.', ','),
        'total_tax'            => number_format($invoice_detail[0]['total_tax'], 2, '.', ','),
        'subTotal_ammount'     => number_format($subTotal_ammount, 2, '.', ','),
        'paid_amount'          => number_format($invoice_detail[0]['paid_amount'], 2, '.', ','),
        'due_amount'           => number_format($invoice_detail[0]['due_amount'], 2, '.', ','),
        'shipping_cost'        => number_format($invoice_detail[0]['shipping_cost'], 2, '.', ','),
        'invoice_all_data'     => $invoice_detail,
        'previous'             => number_format($invoice_detail[0]['prevous_due'], 2, '.', ','),
         'is_discount'         => $is_discount,
        'users_name'           => $users->first_name.' '.$users->last_name,
        'tax_regno'            => $txregname,
        'is_desc'              => $descript,
        'is_serial'            => $isserial,
        'is_unit'              => $isunit,
        'company_info'         => $this->retrieve_company(),
        'currency'             => $currency_details[0]['currency'],
        'position'             => $currency_details[0]['currency_position'],
        'discount_type'        => $currency_details[0]['discount_type'],
        'logo'                 => $currency_details[0]['invoice_logo'],

        );

       return $data;

    }


       public function product_list() {
        $this->db->select('*');
        $this->db->from('product_information');
        $this->db->where('status',1);
        $this->db->limit(30);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

    public function bdtask_print_settingdata(){
        $this->db->select('*');
        $this->db->from('print_setting');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        }
        return false;
    }
}

