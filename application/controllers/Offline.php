<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offline extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array(
            'Offline_model',
             'Customers',
             'Suppliers',
        )); 
    $this->load->library('laccounting');
    $this->load->library('ciqrcode');
    $this->load->library('Smsgateway');
    }
    public function index(){
         $json['response'] = array(
                'status'  => 'ok',
                'message' => "Welcome to our store",
            );
            
            echo json_encode($json,JSON_UNESCAPED_UNICODE);
        
    }
    
    public function companyinfo(){
         $company = $this->Offline_model->retrieve_company();
         $json['response'] = array(
                'status'       => 'ok',
                'company_info' => $company,
            );
            
            echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }

        public function settings(){
         $settings = $this->Offline_model->settings();
         $json['response'] = array(
                'status'       => 'ok',
                'settings' => $settings,
            );
            
            echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }
    
     
    
     // Random Id generator
    public function generator($lenth) {
        $number = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "N", "M", "O", "P", "Q", "R", "S", "U", "V", "T", "W", "X", "Y", "Z", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "1", "2", "3", "4", "5", "6", "7", "8", "9", "0");

        for ($i = 0; $i < $lenth; $i++) {
            $rand_value = rand(0, 61);
            $rand_number = $number["$rand_value"];

            if (empty($con)) {
                $con = $rand_number;
            } else {
                $con = "$con" . "$rand_number";
            }
        }
        return $con;
    }
   
    /*
    |____________________________________________________
    | PRODUCT LIST
    |_____________________________________________________
    */
public function product_list(){

        $start=$this->input->get('start', TRUE);  
    if(!empty($start)){     
    if($start==0){
      $products = $this->Offline_model->product_list($limit=15);
     }else{
        $products = $this->Offline_model->product_list($limit=15,$start);
     }}else{
        $products = $this->Offline_model->searchproduct_list();
     }


   if (!empty($products)) {
           foreach ($products as $k => $v) {
              
        $config['cacheable'] = true; //boolean, the default is true
        $config['cachedir'] = ''; //string, the default is application/cache/
        $config['errorlog'] = ''; //string, the default is application/logs/
        $config['quality'] = true; //boolean, the default is true
        $config['size'] = '1024'; //interger, the default is 1024
        $config['black'] = array(224, 255, 255); // array, default is array(255,255,255)
        $config['white'] = array(70, 130, 180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);
        //Create QR code image create

        $params['data'] = $products[$k]['product_id'];
        $params['level'] = 'H';
        $params['size'] = 10;
        $image_name = $products[$k]['product_id'] . '.png';
        $params['savename'] = FCPATH . 'my-assets/image/qr/' . $image_name;
        $this->ciqrcode->generate($params);

          $products[$k]['qr_code']  = base_url('my-assets/image/qr/'.$image_name);
          $products[$k]['bar_code'] = base_url('Cbarcode/barcode_generator/'.$products[$k]['product_id']);

            }
        }



 if(!empty($products)){
         $json['response'] = array(
                'status'       => 'ok',
                'product_list' => $products,
                'total_val'    => $this->db->count_all("product_information"),
            );
     }else{
         $json['response'] = array(
                'status'  => 'error',
                'message' => 'No Product Found',
            );
     }
            
            echo json_encode($json,JSON_UNESCAPED_UNICODE);
        
    }



        public function get_product_stock() {
        $product_id = $this->input->get('product_id');
        $product_info = $this->Offline_model->get_total_product($product_id);
          $json['response'] = [
                    'status'       => 'ok',
                    'product_data' => $product_info
                ];

       echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }
    /*
    |____________________________________________________
    | CATEGORY LIST
    |_____________________________________________________
    */
       public function category_list() {
           $start=$this->input->get('start', TRUE);       
        if($start==0){
          $category_list = $this->Offline_model->category_list($limit=15);
         }else{
            $category_list = $this->Offline_model->category_list($limit=15,$start);
         } 
     if(!empty($category_list)){

          $json['response'] = [
                    'status'     => 'ok',
                    'categories' => $category_list,
                    'total_val'  => $this->db->count_all('product_category'),
                ];
            }else{
                $json['response'] = [
                    'status'     => 'ok',
                    'message'    => 'No Record found'
                ]; 
            }

       echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }




       /*
    |____________________________________________________
    | Customer LIST
    |_____________________________________________________
    */
       public function customer_list() {
    $start=$this->input->get('start', TRUE);       
if($start == 0){
  $customer_list = $this->Offline_model->customer_list($limit=15);
 }

 if($start > 0){
    $customer_list = $this->Offline_model->customer_list($limit=15,$start);
 }

  if($start  == ''){
    $customer_list = $this->Offline_model->total_customer();
 }


                 if (!empty($customer_list)) {
            $json['response'] = [
                    'status'     => 'ok',
                   'customers'   => $customer_list,
                   'total_val'   => $this->db->count_all("customer_information"),
                    'permission' => 'read'
                ];
        } else {
           $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'No Data Available',
                    'permission' => 'read'
                ];
        }
         echo json_encode($json,JSON_UNESCAPED_UNICODE);

    }


        /*
    |____________________________________________________
    | Customer search
    |_____________________________________________________
    */
       public function customer_search() {
        $customer_data = $this->input->get('search');
        $customer_list = $this->Offline_model->searchcustomer_list($customer_data);
                 if (!empty($customer_list)) {
            $json['response'] = [
                    'status'     => 'ok',
                   'customers' => $customer_list,
                    'permission' => 'read'
                ];
        } else {
           $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'No Data Available',
                    'permission' => 'read'
                ];
        }
         echo json_encode($json,JSON_UNESCAPED_UNICODE);

    }


  

    /*
    |__________________________________________
    |
    |  CREDIT CUSTOMER LIST //credit_customer_list
    |__________________________________________
    */
         public function credit_customers() 
    {

        $start=$this->input->get('start', TRUE);       
    if($start==0){
      $credit_customers = $this->Offline_model->credit_customer_list($limit=15);
     }else{
        $credit_customers = $this->Offline_model->credit_customer_list($limit=15,$start);
     }
     $total_creditcustomer = $this->Offline_model->countcredit_customer_list();
        if (!empty($credit_customers)) {
            $json['response'] = [
                    'status'     => 'ok',
                    'customers'  => $credit_customers,
                    'total_val'  => $total_creditcustomer,
                    'permission' => 'read'
                ];
        } else {
           $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'No Record Found',
                    'permission' => 'read'
                ];
        }
         echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }

    /*
    |__________________________________________
    |
    |  Paid CUSTOMER LIST 
    |__________________________________________
    */
public function paid_customers(){
         $start=$this->input->get('start', TRUE);       
        if($start==0){
          $paid_customer_list = $this->Offline_model->paid_customer_list($limit=15);
         }else{
            $paid_customer_list = $this->Offline_model->paid_customer_list($limit=15,$start);
         }

     $total_paid_customer = $this->Offline_model->countpaid_customer_list();
        if (!empty($paid_customer_list)) {
            $json['response'] = [
                    'status'     => 'ok',
                    'customers'  => $paid_customer_list,
                    'toal_val'   => $total_paid_customer,
                    'permission' => 'read'
                ];
        } else {
           $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'No Record Found',
                    'permission' => 'read'
                ];
        }
         echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }
    
    

   /*
    |____________________________________________________
    | Supplier LIST
    |_____________________________________________________
    */
       public function supplier_list() {
          $start=$this->input->get('start', TRUE);
        if($start==0){
          $supplier_list = $this->Offline_model->supplier_list($limit=15);
         }else{
            $supplier_list = $this->Offline_model->supplier_list($limit=15,$start);
         }

        if(!empty($supplier_list)){
          $json['response'] = [
                    'status'    => 'ok',
                    'suppliers' => $supplier_list,
                    'total_val' => $this->db->count_all("supplier_information"),
                ];
        }else{
           $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'No Record Found'
                ];  
        }

       echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }


public function supplierheadcode(){

        $query=$this->db->query("SELECT MAX(HeadCode) as HeadCode FROM acc_coa WHERE HeadLevel='3' And HeadCode LIKE '50200%'");
        return $query->row();

    }

   

    /*
    |____________________________________________________
    | Unit LIST
    |_____________________________________________________
    */
       public function unit_list() {

        $start=$this->input->get('start', TRUE);       
        if($start==0){
          $unit_list = $this->Offline_model->unit_list($limit=15);
         }else{
            $unit_list = $this->Offline_model->unit_list($limit=15,$start);
         }
        if(!empty($unit_list)){
          $json['response'] = [
                   'status'    => 'ok',
                    'units'    => $unit_list,
                    'total_val'=> $this->db->count_all('units'),
                ];   
        }else{
              $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'No record found',
                    'permission' => 'read'
                ];
        }
            

       echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }


    /*
    |________________________________________________
    |
    |STOCK REPORT all product
    |____________________________________________________
    */

    public function product_stock(){
    $start=$this->input->get('start', TRUE);       
    if($start==0){
      $stok_report = $this->Offline_model->product_stock($limit=15);
     }else{
        $stok_report = $this->Offline_model->product_stock($limit=15,$start);
     }
        if (!empty($stok_report)) {
         $sub_total_in = 0;
        $sub_total_out = 0;
        $sub_total_stock = 0;
        $i = 0;
           foreach ($stok_report as $k => $v) {
                $i++;
                $stok_report[$k]['sl'] = $i;
                $stok_report[$k]['stock_qty'] = ($stok_report[$k]['totalPurchaseQnty'] - $stok_report[$k]['totalSalesQnty']);
                $stok_report[$k]['SubTotalOut'] = ($sub_total_out + $stok_report[$k]['totalSalesQnty']);
                $sub_total_out = $stok_report[$k]['SubTotalOut'];
                $stok_report[$k]['SubTotalIn'] = ($sub_total_in + $stok_report[$k]['totalPurchaseQnty']);
                $sub_total_in = $stok_report[$k]['SubTotalIn'];
                 $stok_report[$k]['total_sale_price'] = $stok_report[$k]['stock_qty'] * $stok_report[$k]['price'];
                $stok_report[$k]['SubTotalStock'] = ($sub_total_stock + $stok_report[$k]['stock_qty']);
                $sub_total_stock = $stok_report[$k]['SubTotalStock'];
            }
        }
        if (!empty($stok_report)) {
              $json['response'] = [
                     'status'     => 'ok',
                     'stock'      => $stok_report,
                     'total_val'  => $this->db->count_all('product_information'),
                     'permission' => 'read'
                ];
        }else{
             $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'No Record Found',
                    'permission' => 'read'
                ]; 
        }
         echo json_encode($json,JSON_UNESCAPED_UNICODE);

    }

    /*
    |___________________________________________________
    |SUPPLIER WISE STOCK REPORT
    |__________________________________________________
    */
     public function stock_report_supplier_wise() {
       $supplier_id = $this->input->get('supplier_id');
       $stok_report    = $this->Offline_model->supplier_wise_stock($supplier_id);
       

        if (!empty($stok_report)) {
              $json['response'] = [
                     'status'     => 'ok',
                     'stock'      => $stok_report,
                     'permission' => 'read'
                ];
        }else{
             $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'No Record Found',
                    'permission' => 'read'
                ]; 
        }
         echo json_encode($json,JSON_UNESCAPED_UNICODE);
     }

 public function stock_product_wise() {
       $product_id  = $this->input->get('product_id');
       $stok_report    = $this->Offline_model->stock_report_product($product_id);
        $sub_total_in = 0;
        $sub_total_out = 0;
        $sub_total_stock = 0;
        $i=0;
           foreach ($stok_report as $k => $v) {
                $i++;
                $stok_report[$k]['sl'] = $i;
                $stok_report[$k]['stock_qty'] = ($stok_report[$k]['totalPurchaseQnty'] - $stok_report[$k]['totalSalesQnty']);
                $stok_report[$k]['SubTotalOut'] = ($sub_total_out + $stok_report[$k]['totalSalesQnty']);
                $sub_total_out = $stok_report[$k]['SubTotalOut'];
                $stok_report[$k]['SubTotalIn'] = ($sub_total_in + $stok_report[$k]['totalPurchaseQnty']);
                $sub_total_in = $stok_report[$k]['SubTotalIn'];
                 $stok_report[$k]['total_sale_price'] = $stok_report[$k]['stock_qty'] * $stok_report[$k]['price'];
                $stok_report[$k]['SubTotalStock'] = ($sub_total_stock + $stok_report[$k]['stock_qty']);
                $sub_total_stock = $stok_report[$k]['SubTotalStock'];
            }
        if (!empty($stok_report)) {
              $json['response'] = [
                     'status'     => 'ok',
                     'stock'      => $stok_report,
                     'permission' => 'read'
                ];
        }else{
             $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'No Record Found',
                    'permission' => 'read'
                ]; 
        }
         echo json_encode($json,JSON_UNESCAPED_UNICODE);

 }
 



    /*
    |___________________________________________________
    | SALE BY BAR OR QR CODE SC
    |___________________________________________________
    */
   public function productinfo_by_barcode(){
    $product_id  = $this->input->get('product_id');
    $product_data = $this->Offline_model->product_info_bybarcode($product_id);
        if (!empty($product_data)) {
            $json['response'] = [
                    'status'        => 'ok',
                    'product_data'  => $product_data,
                    'permission'    => 'create'
                ];
        } else {
           $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'Product Not found',
                    'permission' => 'read'
                ];
        }
         echo json_encode($json,JSON_UNESCAPED_UNICODE);
   }
   
    //Tax fields
   public function tax_fields(){
    $taxfields = $this->Offline_model->taxfield();
        if (!empty($taxfields)) {
            $json['response'] = [
                    'status'     => 'ok',
                    'taxfields'  => $taxfields,
                    'permission' => 'create'
                ];
        } else {
           $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'No field Available',
                    'permission' => 'read'
                ];
        }
         echo json_encode($json,JSON_UNESCAPED_UNICODE);
   }
   
/*
|_______________________________________________________________________
|
|   **************** INSERT SALE ********************************
|______________________________________________________________________
*/
 
      public function insert_sale(){
        $invoice_id = date('YmdHis');
        $invoice_id = strtoupper($invoice_id);
        $createby   = 1;
        $createdate = date('Y-m-d H:i:s');
        $product_id = $this->input->get('product_id',TRUE);
        
        $customer_id = $this->input->get('customer_id');
      

            $transection_id = $this->occational->generator(15);

            // Account table info
            $transactiondata = array(
                'transaction_id'      => $transection_id,
                'relation_id'         => $customer_id,
                'transection_type'    => 2,
                'date_of_transection' => (!empty($this->input->get('invoice_date'))?$this->input->get('invoice_date'):date('Y-m-d')),
                'transection_category'=> 2,
                'amount'              => $this->input->get('paid_amount'),
                'transection_mood'    => 1,
                'is_transaction'      => 0,
                'description'         => 'Paid by customer'
            );



        $invoice_no = $this->invoice_generator();
        //Data inserting into invoice table
        $datainv = array(
            'invoice_id'      => $invoice_id,
            'customer_id'     => $customer_id,
            'date'            => (!empty($this->input->get('invoice_date'))?$this->input->get('invoice_date'):date('Y-m-d')),
            'total_amount'    => $this->input->get('grand_total_price')-$this->input->get('total_discount'),
            'total_tax'       => $this->input->get('total_tax'),
            'invoice'         => $invoice_no,
            'invoice_details' => (!empty($this->input->get('inva_details'))?$this->input->get('inva_details'):''),
            'invoice_discount'=> 0,
            'total_discount'  => $this->input->get('total_discount'),
            'prevous_due'     => 0,
            'shipping_cost'   => 0,
            'sales_by'        => 1,
            'status'          => 1,
            'payment_type'    => 1,
            'bank_id'         => null,
            'is_online'       => $this->input->get('is_online'),
        );
        

         

        $this->db->insert('invoice', $datainv);

    

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
      'Narration'      =>  'Cash in Hand in Sale for '.$cusifo->customer_name,
      'Debit'          =>  $this->input->get('paid_amount'),
      'Credit'         =>  0,
      'Isposted'       =>  1,
      'CreateBy'       =>  $createby,
      'CreateDate'     =>  $createdate,
      'IsAppove'       =>  1
    ); 
     


       
    // Customer Transactions
    //Customer debit for Product Value
    $customer_debit = array(
      'VNo'            =>  $invoice_id,
      'Vtype'          =>  'INV',
      'VDate'          =>  $createdate,
      'COAID'          =>  $customer_headcode,
      'Narration'      =>  'Customer debit For  '.$cusifo->customer_name,
      'Debit'          =>  $this->input->get('grand_total_price')-$this->input->get('total_discount'),
      'Credit'         =>  0,
      'Isposted'       => 1,
      'CreateBy'       => $createby,
      'CreateDate'     => $createdate,
      'IsAppove'       => 1
    ); 
       $this->db->insert('acc_transaction',$customer_debit);

         $pro_sale_income = array(
      'VNo'            =>  $invoice_id,
      'Vtype'          =>  'INVOICE',
      'VDate'          =>  $createdate,
      'COAID'          =>  303,
      'Narration'      =>  'Sale Income For '.$cusifo->customer_name,
      'Debit'          =>  0,
      'Credit'         =>  $this->input->get('grand_total_price')-$this->input->get('total_discount'),
      'Isposted'       => 1,
      'CreateBy'       => $createby,
      'CreateDate'     => $createdate,
      'IsAppove'       => 1
    ); 
       $this->db->insert('acc_transaction',$pro_sale_income);

       ///Customer credit for Paid Amount
       $cuscredit = array(
      'VNo'            =>  $invoice_id,
      'Vtype'          =>  'INV',
      'VDate'          =>  $createdate,
      'COAID'          =>  $customer_headcode,
      'Narration'      =>  'Customer credit for Paid Amount For Customer '.$cusifo->customer_name,
      'Debit'          =>  0,
      'Credit'         =>  $this->input->get('paid_amount'),
      'Isposted'       => 1,
      'CreateBy'       => $createby,
      'CreateDate'     => $createdate,
      'IsAppove'       => 1
    ); 
       if(!empty($this->input->get('paid_amount'))){
            $this->db->insert('acc_transaction',$cuscredit);
           
        $this->db->insert('acc_transaction',$cc);
     
       
  }
     $customerinfo = $this->db->select('*')->from('customer_information')->where('customer_id',$customer_id)->get()->row();

 
        $p_id                = $product_id;
        $total_amount        = 0;
        $discount_rate       = 0;
        $discount_per        = 0;
        $tax_amount          = 0;
        $invoice_description = '';
        $serial_n            = '';

   
      
        $rate                = $this->input->get('product_rate',TRUE);
        $p_id                = $this->input->get('product_id',TRUE);
        $quantity            = $this->input->get('product_qty',TRUE);
        $total_amount        = $this->input->get('total_price',TRUE);
        $discount_rate       = $this->input->get('discount_amount',TRUE);
        $discount_per        = $this->input->get('discount_per',TRUE);
        $tax_amount          = $this->input->get('tax',TRUE);
        $invoice_description = $this->input->get('desc',TRUE);
        $serial_n            = $this->input->get('serial_no',TRUE);

        for ($i = 0, $n = count($p_id); $i < $n; $i++) {
            $product_quantity = $quantity[$i];
            $product_rate = $rate[$i];
            $product_id = $p_id[$i];
            $serial_no  = (!empty($serial_n[$i])?$serial_n[$i]:null);
            $total_price = $total_amount[$i];
            $supplier_rate = $this->supplier_rate($product_id);
            $disper = $discount_per[$i];
            $discount = is_numeric($product_quantity) * is_numeric($product_rate) * is_numeric($disper) / 100;
            $tax = $tax_amount[$i];
           
           
            $data1 = array(
                'invoice_details_id' => $this->generator(15),
                'invoice_id'         => $invoice_id,
                'product_id'         => $product_id,
                'serial_no'          => $serial_no,
                'quantity'           => $product_quantity,
                'rate'               => $product_rate,
                'discount'           => $discount,
                'description'        => null,
                'discount_per'       => $disper,
                'tax'                => $tax,
                'paid_amount'        => $this->input->get('paid_amount',TRUE),
                'due_amount'         => $this->input->get('due_amount',TRUE),
                'supplier_rate'      => 100,
                'total_price'        => $total_price,
                'status'             => 1
            );
            if (!empty($quantity)) {
                $this->db->insert('invoice_details', $data1);
            }
        }
        $message = 'Mr.'.$customerinfo->customer_name.',
        '.'You have purchase  '.$this->input->get('grand_total_price').' You have paid .'.$this->input->get('paid_amount');
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
       
      $message_sent = true ; 
     if($message_sent == true){
          $json['response'] = [
                     'status'     => 'ok',
                     'message'    => 'Successfully Added',
                     'invoice_id' => $invoice_id,
                     'invoice_no' => $invoice_no,
                     'permission' => 'write'
                ];
     }else{
            $json['response'] = [
                     'status'     => 'error',
                     'message'    => 'Please Try Again',
                     'permission' => 'read'
                ];
     }

      echo json_encode($json,JSON_UNESCAPED_UNICODE);
 }




/*
|_______________________________________________________________________
|
|   **************** UPDATE SALE ********************************
|______________________________________________________________________
*/
 
      public function update_sale(){
        $invoice_id = $this->input->get('invoice_id',TRUE);
        $createby   = 1;
        $createdate = date('Y-m-d H:i:s');
        $product_id = $this->input->get('product_id',TRUE);
        
        $customer_id = $this->input->get('customer_id');
      

            $transection_id = $this->occational->generator(15);

            // Account table info
            $transactiondata = array(
                'transaction_id'      => $transection_id,
                'relation_id'         => $customer_id,
                'transection_type'    => 2,
                'date_of_transection' => (!empty($this->input->get('invoice_date'))?$this->input->get('invoice_date'):date('Y-m-d')),
                'transection_category'=> 2,
                'amount'              => $this->input->get('paid_amount'),
                'transection_mood'    => 1,
                'is_transaction'      => 0,
                'description'         => 'Paid by customer'
            );




        //Data inserting into invoice table
        $datainv = array(
            'invoice_id'      => $invoice_id,
            'customer_id'     => $customer_id,
            'date'            => (!empty($this->input->get('invoice_date'))?$this->input->get('invoice_date'):date('Y-m-d')),
            'total_amount'    => $this->input->get('grand_total_price')-$this->input->get('total_discount'),
            'total_tax'       => $this->input->get('total_tax'),
            'invoice'         => $this->input->get('invoice_no'),
            'invoice_details' => (!empty($this->input->get('inva_details'))?$this->input->get('inva_details'):''),
            'invoice_discount'=> 0,
            'total_discount'  => $this->input->get('total_discount'),
            'prevous_due'     => 0,
            'shipping_cost'   => 0,
            'sales_by'        => 1,
            'status'          => 1,
            'payment_type'    => 1,
            'bank_id'         => null,
            'is_online'       => $this->input->get('is_online'),
        );
        

         

        $this->db->where('invoice_id',$invoice_id)
            ->update('invoice',$datainv);
            
             $this->db->where('VNo',$invoice_id)
            ->delete('acc_transaction');
             $this->db->where('invoice_id',$invoice_id)
            ->delete('invoice_details');

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
      'Narration'      =>  'Cash in Hand in Sale for '.$cusifo->customer_name,
      'Debit'          =>  $this->input->get('paid_amount'),
      'Credit'         =>  0,
      'Isposted'       =>  1,
      'CreateBy'       =>  $createby,
      'CreateDate'     =>  $createdate,
      'IsAppove'       =>  1
    ); 
     


       
    // Customer Transactions
    //Customer debit for Product Value
    $customer_debit = array(
      'VNo'            =>  $invoice_id,
      'Vtype'          =>  'INV',
      'VDate'          =>  $createdate,
      'COAID'          =>  $customer_headcode,
      'Narration'      =>  'Customer debit For  '.$cusifo->customer_name,
      'Debit'          =>  $this->input->get('grand_total_price')-$this->input->get('total_discount'),
      'Credit'         =>  0,
      'Isposted'       => 1,
      'CreateBy'       => $createby,
      'CreateDate'     => $createdate,
      'IsAppove'       => 1
    ); 
       $this->db->insert('acc_transaction',$customer_debit);

         $pro_sale_income = array(
      'VNo'            =>  $invoice_id,
      'Vtype'          =>  'INVOICE',
      'VDate'          =>  $createdate,
      'COAID'          =>  303,
      'Narration'      =>  'Sale Income For '.$cusifo->customer_name,
      'Debit'          =>  0,
      'Credit'         =>  $this->input->get('grand_total_price')-$this->input->get('total_discount'),
      'Isposted'       => 1,
      'CreateBy'       => $createby,
      'CreateDate'     => $createdate,
      'IsAppove'       => 1
    ); 
       $this->db->insert('acc_transaction',$pro_sale_income);

       ///Customer credit for Paid Amount
       $cuscredit = array(
      'VNo'            =>  $invoice_id,
      'Vtype'          =>  'INV',
      'VDate'          =>  $createdate,
      'COAID'          =>  $customer_headcode,
      'Narration'      =>  'Customer credit for Paid Amount For Customer '.$cusifo->customer_name,
      'Debit'          =>  0,
      'Credit'         =>  $this->input->get('paid_amount'),
      'Isposted'       => 1,
      'CreateBy'       => $createby,
      'CreateDate'     => $createdate,
      'IsAppove'       => 1
    ); 
       if(!empty($this->input->get('paid_amount'))){
            $this->db->insert('acc_transaction',$cuscredit);
           
        $this->db->insert('acc_transaction',$cc);
     
       
  }
     $customerinfo = $this->db->select('*')->from('customer_information')->where('customer_id',$customer_id)->get()->row();

 
        $p_id                = $product_id;
        $total_amount        = 0;
        $discount_rate       = 0;
        $discount_per        = 0;
        $tax_amount          = 0;
        $invoice_description = '';
        $serial_n            = '';

   
      
        $rate                = $this->input->get('product_rate',TRUE);
        $p_id                = $this->input->get('product_id',TRUE);
        $quantity            = $this->input->get('product_qty',TRUE);
        $total_amount        = $this->input->get('total_price',TRUE);
        $discount_rate       = $this->input->get('discount_amount',TRUE);
        $discount_per        = $this->input->get('discount_per',TRUE);
        $tax_amount          = $this->input->get('tax',TRUE);
        $invoice_description = $this->input->get('desc',TRUE);
        $serial_n            = $this->input->get('serial_no',TRUE);

        for ($i = 0, $n = count($p_id); $i < $n; $i++) {
            $product_quantity = $quantity[$i];
            $product_rate = $rate[$i];
            $product_id = $p_id[$i];
            $serial_no  = (!empty($serial_n[$i])?$serial_n[$i]:null);
            $total_price = $total_amount[$i];
            $supplier_rate = $this->supplier_rate($product_id);
            $disper = $discount_per[$i];
            $discount = is_numeric($product_quantity) * is_numeric($product_rate) * is_numeric($disper) / 100;
            $tax = $tax_amount[$i];
            $description = $invoice_description[$i];
           
            $data1 = array(
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
                'paid_amount'        => $this->input->get('paid_amount',TRUE),
                'due_amount'         => $this->input->get('due_amount',TRUE),
                'supplier_rate'      => 100,
                'total_price'        => $total_price,
                'status'             => 1
            );
            if (!empty($quantity)) {
                $this->db->insert('invoice_details', $data1);
            }
        }
        $message = 'Mr.'.$customerinfo->customer_name.',
        '.'You have purchase  '.$this->input->get('grand_total_price').' You have paid .'.$this->input->get('paid_amount');
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
       
      $message_sent = true ; 
     if($message_sent == true){
          $json['response'] = [
                     'status'     => 'ok',
                     'message'    => 'Successfully Added',
                     'permission' => 'write'
                ];
     }else{
            $json['response'] = [
                     'status'     => 'error',
                     'message'    => 'Please Try Again',
                     'permission' => 'read'
                ];
     }

      echo json_encode($json,JSON_UNESCAPED_UNICODE);
 }


  public function supplier_rate($product_id) {
        $this->db->select('supplier_price');
        $this->db->from('supplier_product');
        $this->db->where(array('product_id' => $product_id));
        $query = $this->db->get();
        return $query->result_array();
    }

    /*
    |__________________________________________________
    |
    |   SALE LIST
    |___________________________________________________
    */

    public function sale_list(){

    $start=$this->input->get('start', TRUE);       
    if($start==0){
      $salelist = $this->Offline_model->invoice_list($limit=15);
     }else{
        $salelist = $this->Offline_model->invoice_list($limit=15,$start);
     }
     if(!empty($salelist)){
         $json['response'] = array(
                'status'    => 'ok',
                'sale_list' => $salelist,
                 'total_val'=> $this->db->count_all('invoice'),
            );
     }else{
         $json['response'] = array(
                'status'    => 'error',
                'message'   => 'No Record Found',
            );
     }
            
            echo json_encode($json,JSON_UNESCAPED_UNICODE);
        
    }


    /*
    |__________________________________________________
    |
    |   Online SALE LIST
    |___________________________________________________
    */

    public function online_sale_list(){

    $start=$this->input->get('start', TRUE);       
    if($start==0){
      $salelist = $this->Offline_model->online_invoice_list($limit=15);
     }else{
        $salelist = $this->Offline_model->online_invoice_list($limit=15,$start);
     }
     
     $saledetails = $this->Offline_model->online_invoice_details();
     if(!empty($salelist)){
         $json['response'] = array(
                'status'      => 'ok',
                'sale_list'   => $salelist,
                'saledetails' => $saledetails,
                'total_val'=> $this->Offline_model->online_invoice_count(),
            );
     }else{
         $json['response'] = array(
                'status'    => 'error',
                'message'   => 'No Record Found',
            );
     }
            
            echo json_encode($json,JSON_UNESCAPED_UNICODE);
        
    }
    
    public function todys_sale_list(){
      $salelist = $this->Offline_model->todays_invoice_list();
      $saledetails = $this->Offline_model->todays_invoice_details();
  
     if(!empty($salelist)){
         $json['response'] = array(
                'status'      => 'ok',
                'sale_list'   => $salelist,
                'saledetails' => $saledetails
            );
     }else{
         $json['response'] = array(
                'status'    => 'error',
                'message'   => 'No Record Found',
            );
     }
            
            echo json_encode($json,JSON_UNESCAPED_UNICODE);
        
    }

       
     /*
   |____________________________________________________
   |
   | PURCHASE ENTRY
   |____________________________________________________
   */
    public function insert_purchase() {  

    $result = $this->Offline_model->purchase_entry();
if ($result == true) {
        $json['response'] = [
                'status'     => 'ok',
                'message'    => 'Successfully Inserted',
                'permission' => 'create'
            ];
    } else {
       $json['response'] = [
                'status'     => 'error',
                'message'    => 'Please Try Again',
                'permission' => 'read'
            ];
    }
     echo json_encode($json,JSON_UNESCAPED_UNICODE);

    }
    
public function purchase_list(){
    $start=$this->input->get('start', TRUE);
    if($start==0){
      $result = $this->Offline_model->purchase_list($limit=15);
     }else{
        $result = $this->Offline_model->purchase_list($limit=15,$start);
     }
if (!empty($result)) {
        $json['response'] = [
                'status'        => 'ok',
                'purchase_list' => $result,
                'total_val'     => $this->db->count_all('product_purchase'),
                'permission'    => 'read'
            ];
    } else {
       $json['response'] = [
                'status'     => 'error',
                'message'    => 'No Data Available',
                'permission' => 'read'
            ];
    }
     echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }


 public function search_purchase_list(){
    $startdate = $this->input->get('from_date');
    $enddate = $this->input->get('to_date');
    $invoicno = $this->input->get('invoice_no');
    if(!empty($invoicno)){
        $result = $this->Offline_model->search_purchase_list_byinvoice($invoicno);
    }else{
       $result = $this->Offline_model->search_purchase_list($startdate,$enddate); 
    }
         
    if (!empty($result)) {
            $json['response'] = [
                    'status'        => 'ok',
                    'purchase_list' => $result,
                    'permission'    => 'read'
                ];
        } else {
           $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'No Data Available',
                    'permission' => 'read'
                ];
        }
     echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }
    
    
      /*
   |____________________________________________________
   |
   | PURCHASE Update
   |____________________________________________________
   */
    public function update_purchase() {  

    $result = $this->Offline_model->purchase_update();
if ($result == true) {
        $json['response'] = [
                'status'     => 'ok',
                'message'    => 'Successfully Updated',
                'permission' => 'update'
            ];
    } else {
       $json['response'] = [
                'status'     => 'error',
                'message'    => 'Please Try Again',
                'permission' => 'read'
            ];
    }
     echo json_encode($json,JSON_UNESCAPED_UNICODE);

    }
    
       /*
    |____________________________________________________
    | Purchase Delete
    |_____________________________________________________
    */
    public function delete_purchase() 
    {
       $id = $this->input->get('purchase_id');
        if ($this->Offline_model->delete_purchase($id)) {
            $json['response'] = [
                    'status'     => 'ok',
                    'message'    => 'Successfully Deleted',
                    'permission' => 'read'
                ];
        } else {
           $json['response'] = [
                    'status'     => 'error',
                    'message'    => display('please_try_again'),
                    'permission' => 'read'
                ];
        }
         echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }
    

    public function invoice_generator() {
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


        public function purchase_details() {
        $purchase_id = $this->input->get('purchase_id');
        $purchase_info = $this->Offline_model->retrieve_purchase_editdata($purchase_id);
          $json['response'] = [
                    'status'       => 'ok',
                    'purchasedata' => $purchase_info
                ];

       echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }

    /*
    |_______________________________________________
    |
    |SUPPLIER PAYMENT Voucher No
    |_______________________________________________
    */
         public function supplier_paymentvoucher()
    {
       $data = $this->db->select("VNo as voucher")
            ->from('acc_transaction') 
            ->like('VNo', 'PM-', 'after')
            ->order_by('ID','desc')
            ->limit(1)
            ->get()
            ->row();
         if(!empty($data)){
          $vn = substr($data->voucher,3)+1;
                               $voucher_n = 'PM-'.$vn;
                             }else{
                                $voucher_n = 'PM-1';
                           }

                    $json['response'] = [
                    'status'   => 'ok',
                    'voucher' => $voucher_n
                    ];

                    echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }

    /*
    |_______________________________________________
    | SUPPLIER HEAD CODE
    |________________________________________________
    */

public function supplier_headcode(){
    $id = $this->input->get('supplier_id');
    $supplier_info = $this->db->select('supplier_name')->from('supplier_information')->where('supplier_id',$id)->get()->row();
    $head_name =$id.'-'.$supplier_info->supplier_name;
    $supplierhcode = $this->db->select('*')
            ->from('acc_coa')
            ->where('HeadName',$head_name)
            ->get()
            ->row();
      $code = $supplierhcode->HeadCode;       
        if(!empty($code)){
            $json['response'] = [
                            'status'   => 'ok',
                            'headcode' => $code
                            ];
        }else{
          $json['response'] = [
                            'status'     => 'error',
                            'message'    => 'No record found',
                            'permission' => 'read'
                        ];
        }

       echo json_encode($json,JSON_UNESCAPED_UNICODE);

   }
   
   
   


// Customer Headcode for account
   public function customer_headcode(){
    $id = $this->input->get('customer_id');
    $customer_info = $this->db->select('customer_name')->from('customer_information')->where('customer_id',$id)->get()->row();
    $head_name =$id.'-'.$customer_info->customer_name;
        $customerhcode = $this->db->select('*')
                ->from('acc_coa')
                ->where('HeadName',$head_name)
                ->get()
                ->row();
      $code = $customerhcode->HeadCode;       
        if(!empty($code)){
            $json['response'] = [
                            'status'   => 'ok',
                            'headcode' => $code
                            ];
        }else{
          $json['response'] = [
                            'status'     => 'error',
                            'message'    => 'No record found',
                            'permission' => 'read'
                        ];
        }

 

       echo json_encode($json,JSON_UNESCAPED_UNICODE);

   }

  
       /*
    |____________________________________________________
    | General Head for general ledger
    |_____________________________________________________
    */
       public function general_head() {
        $generalhead = $this->Offline_model->get_general_ledger();
        if(!empty($generalhead)){
          $json['response'] = [
                    'status'     => 'ok',
                    'generalhead'=> $generalhead,
                    'permission' => 'read'
                ];
        }else{
          $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'No data found',
                    'permission' => 'read'
                ];
        }
     
       echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }
    
    /*
    |____________________________________________________
    | Headcode for general head
    |_____________________________________________________
    */
    
    public function general_headcode(){
        $Headid = $this->input->get('Headid');
        $HeadName = $this->Offline_model->general_led_get($Headid);
         if(!empty($HeadName)){
          $json['response'] = [
                    'status'     => 'ok',
                    'headcode'   => $HeadName,
                    'permission' => 'read'
                ];
        }else{
          $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'No data found',
                    'permission' => 'read'
                ];
        }
     
       echo json_encode($json,JSON_UNESCAPED_UNICODE);
      
    }
    
       /*
    |____________________________________________________
    | General Ledger Search Result
    |_____________________________________________________
    */
    
    
    public function gL_search_result(){
      $cmbGLCode   = $this->input->get('Glhead');
      $cmbCode     = $this->input->get('trhead');
      $dtpFromDate = $this->input->get('fromdate');
      $dtpToDate   = $this->input->get('todate');
      $chkIsTransction = 1;
      $HeadName    = $this->Offline_model->general_led_report_headname($cmbGLCode);
      $HeadName2   = $this->Offline_model->general_led_report_headname2($cmbGLCode,$cmbCode,$dtpFromDate,$dtpToDate,$chkIsTransction);
       $pre_balance = $this->Offline_model->general_led_report_prebalance($cmbCode,$dtpFromDate);

        $data = array(
            'dtpFromDate'     => $dtpFromDate,
            'dtpToDate'       => $dtpToDate,
            'HeadName'        => $HeadName,
            'HeadName2'       => $HeadName2,
            'prebalance'      => $pre_balance,
            'chkIsTransction' => $chkIsTransction,

        );
        $data['ledger'] = $this->db->select('*')->from('acc_coa')->where('HeadCode',$cmbCode)->get()->result_array();
        
         if(!empty($HeadName2)){
          $json['response'] = [
                    'status'     => 'ok',
                    'ledger'     => $data,
                    'permission' => 'read'
                ];
        }else{
          $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'No data found',
                    'permission' => 'read'
                ];
        }
     
       echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }
    
   
   
   public function profit_loss_report(){
        $dtpFromDate       = $this->input->get('from_date');
        $dtpToDate         = $this->input->get('to_date');
        $get_profit        = $this->Offline_model->profit_loss_serach();
        $oResultAsset      = $get_profit['oResultAsset'];
        $oResultLiability  = $get_profit['oResultLiability'];
        $sqlF=[];
         $sqlE=[];
        foreach ($oResultAsset as $income) {
            $COAID = $income->HeadCode;
            $incom  = "SELECT acc_coa.HeadName,acc_transaction.COAID,SUM(acc_transaction.Credit)-SUM(acc_transaction.Debit) AS Amount FROM acc_transaction INNER JOIN acc_coa ON acc_transaction.COAID = acc_coa.HeadCode WHERE acc_transaction.VDate BETWEEN '$dtpFromDate' AND '$dtpToDate' AND acc_transaction.COAID = '$COAID' GROUP BY 'acc_transaction.COAID'";
           $incomereslult = $this->db->query($incom)->row();
           if(!empty($incomereslult)){
            $sqlF[] = $incomereslult;
           }
        }


        foreach ($oResultLiability as $expense) {
            $COAID = $expense->HeadCode;
            $exp  = "SELECT acc_coa.HeadName,acc_transaction.COAID,SUM(acc_transaction.Debit)-SUM(acc_transaction.Credit) AS Amount FROM acc_transaction INNER JOIN acc_coa ON acc_transaction.COAID = acc_coa.HeadCode WHERE acc_transaction.VDate BETWEEN '$dtpFromDate' AND '$dtpToDate' AND acc_transaction.COAID = '$COAID' GROUP BY 'acc_transaction.COAID'";
           $expenseresult = $this->db->query($exp)->row();
           if(!empty($expenseresult)){
            $sqlE[] = $expenseresult;
           }
        }

 
        $data['income']      = $sqlF;
        $data['expense']     = $sqlE;
        $data['dtpFromDate'] = $sqlE;
        $data['dtpToDate']   = $dtpToDate;

       
          $json['response'] = [
                    'status'     => 'ok',
                    'data'       => $data,
                    'permission' => 'read'
                ];
       
     
       echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }
    
    
        /*
    |________________________________________________
    | PRODUCT WISE SALES REPORT
    |________________________________________________
    */

   public function product_wise_sales_report(){
        $product_id  = $this->input->get('product_id');
        $start_date  = $this->input->get('from_date'); 
        $end_date    = $this->input->get('to_date');
        $result      = $this->Offline_model->retrieve_product_search_sales_report($product_id,$start_date,$end_date);

         if(!empty($result)){
          $json['response'] = [
                    'status'     => 'ok',
                    'result'     => $result,
                    'permission' => 'read'
                ];
        }else{
          $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'No data found',
                    'permission' => 'read'
                ];
        }
     
       echo json_encode($json,JSON_UNESCAPED_UNICODE);
      
    }
    
            /*
    |________________________________________________
    | PRODUCT WISE PURCHASE REPORT
    |________________________________________________
    */

   public function product_wise_purchase_report(){
        $product_id  = $this->input->get('product_id');
        $start_date  = $this->input->get('from_date'); 
        $end_date    = $this->input->get('to_date');
        $result      = $this->Offline_model->retrieve_product_search_purchase_report($product_id,$start_date,$end_date);

         if(!empty($result)){
          $json['response'] = [
                    'status'     => 'ok',
                    'result'     => $result,
                    'permission' => 'read'
                ];
        }else{
          $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'No data found',
                    'permission' => 'read'
                ];
        }
     
       echo json_encode($json,JSON_UNESCAPED_UNICODE);
      
    }
    
                /*
    |________________________________________________
    | DUE REPORT
    |________________________________________________
    */

   public function due_report(){
        $start_date  = $this->input->get('from_date'); 
        $end_date    = $this->input->get('to_date');
        $result      = $this->Offline_model->retrieve_dateWise_DueReports($start_date,$end_date);

         if(!empty($result)){
          $json['response'] = [
                    'status'     => 'ok',
                    'result'     => $result,
                    'permission' => 'read'
                ];
        }else{
          $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'No data found',
                    'permission' => 'read'
                ];
        }
     
       echo json_encode($json,JSON_UNESCAPED_UNICODE);
      
    }



        public function password_recovery(){
         $this->load->model('Settings');
    $this->form_validation->set_rules('email', display('email'), 'required|valid_email|max_length[100]|trim');  
    $userData = array(
            'email' => $this->input->get('email')
        );
    if ($this->form_validation->run())
        {
    $user = $this->Settings->password_recovery($userData);
     $ptoken = date('ymdhis');
        if($user->num_rows() > 0) {
            $email =$user->row()->username;
            $precdat = array(
            'username'      => $email,
            'security_code' => $ptoken,
                
        );
        
        $this->db->where('username',$email)
            ->update('user_login',$precdat);
             $send_email = '';
             if (!empty($email)) {
                $send_email = $this->setmail($email,$ptoken);
                
             }
           if($send_email){
            $json['response'] = [
                    'status'     => 'ok',
                    'message'    => 'check Your email',
                    'permission' => 'read'
                ];
           }else{
          $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'Sorry Email Not Sent',
                    'permission' => 'read'
                ];
           }

        }else{
            $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'Email Not Found',
                    'permission' => 'read'
                ];
        }
    }else{
            $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'Email Is Not Valid',
                    'permission' => 'read'
                ];
        }

           echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }
    
     public function setmail($email,$ptoken)
    {
$msg = "Click on this url for change your password :".base_url().'Admin_dashboard/recovery_form/'.$ptoken;

// send email
mail($email,"passwordrecovery",$msg);
return true;
}

/*
|_________________________________________________________
|
|  INVOICE SEARCH
|__________________________________________________________
*/
public function search_invoice(){
   $query = $this->input->get('search');
    $start=$this->input->get('start', TRUE);       
    if($start==0){
      $salelist = $this->Offline_model->search_invoice($query,$limit=15);
     }else{
        $salelist = $this->Offline_model->search_invoice($query,$limit=15,$start);
     }
     if(!empty($salelist)){
         $json['response'] = array(
                'status'    => 'ok',
                'sale_list' => $salelist,
                 'total_val'=> $this->Offline_model->count_search_invoice($query),
            );
     }else{
         $json['response'] = array(
                'status'    => 'error',
                'message'   => 'No Record Found',
            );
     }
            
            echo json_encode($json,JSON_UNESCAPED_UNICODE);
        
    }



/*
|_________________________________________________________
|
|  INVOICE SEARCH
|__________________________________________________________
*/
public function search_product(){
   $query = $this->input->get('search');
    $start=$this->input->get('start', TRUE);       
    if($start==0){
      $salelist = $this->Offline_model->search_product($query,$limit=15);
     }else{
        $salelist = $this->Offline_model->search_product($query,$limit=15,$start);
     }
     if(!empty($salelist)){
         $json['response'] = array(
                'status'       => 'ok',
                'product_list' => $salelist,
                 'total_val'   => $this->Offline_model->count_search_product($query),
            );
     }else{
         $json['response'] = array(
                'status'    => 'error',
                'message'   => 'No Record Found',
            );
     }
            
            echo json_encode($json,JSON_UNESCAPED_UNICODE);
        
    }


public function productsupplier_price(){
    $supplier_id = $this->input->get('supplier_id');
    $product_id  = $this->input->get('product_id');
    $result      = $this->Offline_model->supplier_productprice($supplier_id,$product_id);

         if(!empty($result)){
          $json['response'] = [
                    'status'         => 'ok',
                    'supplier_price' => $result,
                    'permission'     => 'read'
                ];
        }else{
              $json['response'] = [
                        'status'     => 'error',
                        'message'    => 'No data found',
                        'permission' => 'read'
                    ];
        }
     
       echo json_encode($json,JSON_UNESCAPED_UNICODE);
}


public function supplier_productlist(){
   $supplier_id = $this->input->get('supplier_id');
    $result      = $this->Offline_model->supplier_products($supplier_id);

         if(!empty($result)){
          $json['response'] = [
                    'status'           => 'ok',
                    'product_list'     => $result,
                    'permission'       => 'read'
                ];
        }else{
              $json['response'] = [
                        'status'     => 'error',
                        'message'    => 'No data found',
                        'permission' => 'read'
                    ];
        }
     
       echo json_encode($json,JSON_UNESCAPED_UNICODE);
}




  public function user_list(){
        $result      = $this->Offline_model->user_list();
         if(!empty($result)){
          $json['response'] = [
                    'status'           => 'ok',
                    'user_list'        => $result,
                    'permission'       => 'read'
                ];
        }else{
              $json['response'] = [
                        'status'     => 'error',
                        'message'    => 'No data found',
                        'permission' => 'read'
                    ];
        }
     
       echo json_encode($json,JSON_UNESCAPED_UNICODE);
         }


    public function bank_list(){
        $result      = $this->Offline_model->bank_list();
         if(!empty($result)){
          $json['response'] = [
                    'status'           => 'ok',
                    'bank_list'        => $result,
                    'permission'       => 'read'
                ];
        }else{
              $json['response'] = [
                        'status'     => 'error',
                        'message'    => 'No data found',
                        'permission' => 'read'
                    ];
        }
     
       echo json_encode($json,JSON_UNESCAPED_UNICODE);
         }
    


     public function language_list(){
        $result      = $this->Offline_model->language_list();
         if(!empty($result)){
          $json['response'] = [
                    'status'           => 'ok',
                    'language_list'    => $result,
                    'permission'       => 'read'
                ];
        }else{
              $json['response'] = [
                        'status'     => 'error',
                        'message'    => 'No data found',
                        'permission' => 'read'
                    ];
        }
     
       echo json_encode($json,JSON_UNESCAPED_UNICODE);
         }

    public function phrase_list(){
        $result      = $this->Offline_model->phrases();
         if(!empty($result)){
          $json['response'] = [
                    'status'           => 'ok',
                    'phrases'          => $result,
                    'permission'       => 'read'
                ];
        }else{
              $json['response'] = [
                        'status'     => 'error',
                        'message'    => 'No data found',
                        'permission' => 'read'
                    ];
        }
     
       echo json_encode($json,JSON_UNESCAPED_UNICODE);
         }


/*
|---------------------------------------------
|Add Phrase in Language table
|----------------------------------------
|*/

        public function add_phrase(){
        $lang   = $this->input->get('phrase',true);
        $result = $this->Offline_model->addPhrase($lang);
         if(!empty($result==1)){
          $json['response'] = [
                    'status'           => 'ok',
                    'message'          => 'Successfully Added',
                    'permission'       => 'read'
                ];
        }else if($result == 2){
              $json['response'] = [
                        'status'     => 'error',
                        'message'    => 'Already Added',
                        'permission' => 'read'
                    ];
        }else{
             $json['response'] = [
                        'status'     => 'error',
                        'message'    => 'Please try again',
                        'permission' => 'read'
                    ];
        }
     
       echo json_encode($json,JSON_UNESCAPED_UNICODE);
         }

public function check_user(){
    $username = $this->input->get('email', TRUE);
    $password = md5('gef'.$this->input->get('password', TRUE));
    $result = $this->Offline_model->check_user($username,$password);
         if(!empty($result)){
          $json['response'] = [
                    'status'           => 'ok',
                    'phrases'          => $result,
                    'permission'       => 'read'
                ];
        }else{
              $json['response'] = [
                        'status'     => 'error',
                        'message'    => 'No data found',
                        'permission' => 'read'
                    ];
        }
     
       echo json_encode($json,JSON_UNESCAPED_UNICODE);
}

    }



