<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 #------------------------------------    
    # Author: Bdtask Ltd
    # Author link: https://www.bdtask.com/
    # Dynamic style php file
    # Developed by :Isahaq
    #------------------------------------    

class Report extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
  
        $this->load->model(array(
            'report_model')); 
        if (! $this->session->userdata('isLogIn'))
            redirect('login');
          
    }
   
 /*product stock part*/
    function bdtask_stock_report() {
        $data['title']      = display('stock_report');
        $data['totalnumber']= $this->report_model->totalnumberof_product();
        $data['module']     = "report";
        $data['page']       = "stock_report"; 
        echo modules::run('template/layout', $data);
    }

       public function bdtask_checkStocklist(){
        // GET data
        $postData = $this->input->post();
        $data = $this->report_model->bdtask_getStock($postData);
        echo json_encode($data);
    } 


        public function bdtask_cash_closing() {
        $data['title']    = "Reports | Daily Closing";
        $data['info']     = $this->report_model->accounts_closing_data();
        $data['module']   = "report";
        $data['page']     = "closing_form"; 
        echo modules::run('template/layout', $data);
    }

      public function add_daily_closing()
    {
        
        $closedata = $this->db->select('*')->from('daily_closing')->where('date',date('Y-m-d'))->get()->num_rows();
        if($closedata > 0){
         $this->session->set_flashdata(array('exception'=> 'Already Closed Today'));
        redirect(base_url('closing_form'));
            
        }
        $todays_date = date("Y-m-d");
        $data = array(       
            'last_day_closing'  =>  str_replace(',', '', $this->input->post('last_day_closing',TRUE)),
            'cash_in'           =>  str_replace(',', '', $this->input->post('cash_in',TRUE)),
            'cash_out'          =>  str_replace(',', '', $this->input->post('cash_out',TRUE)),
            'date'              =>  $todays_date,
            'amount'            =>  str_replace(',', '', $this->input->post('cash_in_hand',TRUE)),
            'status'            =>      1
        );
        $invoice_id = $this->report_model->daily_closing_entry($data);
        
       
        $this->session->set_flashdata(array('message'=> display('successfully_added')));
        redirect(base_url('closing_report'));
    }


    public function bdtask_closing_report(){
    $daily_closing_data = $this->report_model->get_closing_report();
        $i = 0;
        if (!empty($daily_closing_data)) {
            foreach ($daily_closing_data as $k => $v) {
                $daily_closing_data[$k]['final_date'] = $this->occational->dateConvert($daily_closing_data[$k]['date']);
            }
        }
        $data = array(
            'title'              => display('closing_report'),
            'daily_closing_data' => $daily_closing_data,
        );
        $data['module']   = "report";
        $data['page']     = "closing_report"; 
        echo modules::run('template/layout', $data);
    }


    public function bdtask_closing_report_search(){
        $from_date = $this->input->get('from_date');       
        $to_date = $this->input->get('to_date');
          $daily_closing_data = $this->report_model->get_date_wise_closing_report($from_date, $to_date);

        $i = 0;
        if (!empty($daily_closing_data)) {
            foreach ($daily_closing_data as $k => $v) {
                $daily_closing_data[$k]['final_date'] = $this->occational->dateConvert($daily_closing_data[$k]['date']);
            }
            foreach ($daily_closing_data as $k => $v) {
                $i++;
                $daily_closing_data[$k]['sl'] = $i;
            }
        }

        $data = array(
            'title'              => display('closing_report'),
            'daily_closing_data' => $daily_closing_data,
            'from_date'          => $from_date,
            'to_date'            => $to_date,
           
        );

        $data['module']   = "report";
        $data['page']     = "closing_report"; 
        echo modules::run('template/layout', $data);
    }


     public function bdtask_todays_report(){
        $sales_report = $this->report_model->todays_sales_report();
        $sales_amount = 0;
        if (!empty($sales_report)) {
            $i = 0;
            foreach ($sales_report as $k => $v) {
                $i++;
                $sales_report[$k]['sl'] = $i;
                $sales_report[$k]['sales_date'] = $this->occational->dateConvert($sales_report[$k]['date']);
                $sales_amount = $sales_amount + $sales_report[$k]['total_amount'];
            }
        }

        $purchase_report = $this->report_model->todays_purchase_report();
        $purchase_amount = 0;
        if (!empty($purchase_report)) {
            $i = 0;
            foreach ($purchase_report as $k => $v) {
                $i++;
                $purchase_report[$k]['sl'] = $i;
                $purchase_report[$k]['prchse_date'] = $this->occational->dateConvert($purchase_report[$k]['purchase_date']);
                $purchase_amount = $purchase_amount + $purchase_report[$k]['grand_total_amount'];
            }
        }

        $data = array(
            'title'           => display('todays_report'),
            'sales_report'    => $sales_report,
            'sales_amount'    => number_format($sales_amount, 2, '.', ','),
            'purchase_amount' => number_format($purchase_amount, 2, '.', ','),
            'purchase_report' => $purchase_report,
            'date'            => $today = date('Y-m-d'),
        );

        $data['module']   = "report";
        $data['page']     = "todays_report"; 
        echo modules::run('template/layout', $data);
     }


     //    ============ its for todays_customer_receipt =============
    public function bdtask_todays_customer_received() {
        $today = date('Y-m-d');
        $all_customer = $this->db->select('*')->from('customer_information')->get()->result();
        $todays_customer_receipt = $this->report_model->todays_customer_receipt($today);
        $data = array(
            'title'                   => "Received From Customer",
            'all_customer'            => $all_customer,
            'todays_customer_receipt' => $todays_customer_receipt,
            'today'                   => $today,
            'customer_id'             => '',
        );
        $data['module']   = "report";
        $data['page']     = "todays_customer_receipt"; 
        echo modules::run('template/layout', $data);
    }


    //    ============ its for todays_customer_receipt =============
       public function bdtask_customerwise_received() {
        $customer_id = $this->input->post('customer_id',TRUE);
        $from_date   = $this->input->post('from_date',TRUE);
        $today       = date('Y-m-d');
        $all_customer = $this->db->select('*')->from('customer_information')->get()->result();
        $filter_customer_wise_receipt = $this->report_model->filter_customer_wise_receipt($customer_id, $from_date);
        $data = array(
        'title'                   => "Received From Customer",
        'all_customer'            => $all_customer,
        'todays_customer_receipt' => $filter_customer_wise_receipt,
        'today'                   => $from_date,
        'customer_info'           => $this->report_model->customerinfo_rpt($customer_id),
         'customer_id'            => $customer_id,
        );

        $data['module']   = "report";
        $data['page']     = "todays_customer_receipt"; 
        echo modules::run('template/layout', $data);
    }

        public function bdtask_todays_sales_report(){
        $sales_report = $this->report_model->todays_sales_report();
        $sales_amount = 0;
        if (!empty($sales_report)) {
            $i = 0;
            foreach ($sales_report as $k => $v) {
                $i++;
                $sales_report[$k]['sl'] = $i;
                $sales_report[$k]['sales_date'] = $this->occational->dateConvert($sales_report[$k]['date']);
                $sales_amount = $sales_amount + $sales_report[$k]['total_amount'];
            }
        }
        $data = array(
            'title'        => display('sales_report'),
            'sales_amount' => number_format($sales_amount, 2, '.', ','),
            'sales_report' => $sales_report,
        );
        $data['module']   = "report";
        $data['page']     = "sales_report"; 
        echo modules::run('template/layout', $data);
        }

        public function bdtask_datewise_sales_report(){
          $from_date = $this->input->get('from_date');
           $to_date  = $this->input->get('to_date');
          $sales_report = $this->report_model->retrieve_dateWise_SalesReports($from_date, $to_date);
        $sales_amount = 0;
        if (!empty($sales_report)) {
            $i = 0;
            foreach ($sales_report as $k => $v) {
                $i++;
                $sales_report[$k]['sl'] = $i;
                $sales_report[$k]['sales_date'] = $this->occational->dateConvert($sales_report[$k]['date']);
                $sales_amount = $sales_amount + $sales_report[$k]['total_amount'];
            }
        }
        $data = array(
            'title'        => display('sales_report'),
            'sales_amount' => $sales_amount,
            'sales_report' => $sales_report,
            'from_date'    => $from_date,
            'to_date'      => $to_date,
        );
        $data['module']   = "report";
        $data['page']     = "sales_report"; 
        echo modules::run('template/layout', $data); 
        }

        public function bdtask_userwise_sales_report(){
        $user_id = (!empty($this->input->get('user_id'))?$this->input->get('user_id'):'');
        $star_date = (!empty($this->input->get('from_date'))?$this->input->get('from_date'):date('Y-m-d'));
        $end_date = (!empty($this->input->get('to_date'))?$this->input->get('to_date'):date('Y-m-d'));
        $sales_report = $this->report_model->user_sales_report($star_date,$end_date,$user_id);
        $sales_amount = 0;
        if (!empty($sales_report)) {
            $i = 0;
            foreach ($sales_report as $k => $v) {
                $i++;
                $sales_report[$k]['sl'] = $i;
               
                $sales_amount += $sales_report[$k]['amount'];
            }
        }
        $user_list = $this->report_model->userList();
        $data = array(
            'title'         => display('user_wise_sales_report'),
            'sales_amount'  => number_format($sales_amount, 2, '.', ','),
            'sales_report'  => $sales_report,
            'from'          => $this->occational->dateConvert($star_date),
            'to'            => $this->occational->dateConvert($end_date),
            'user_list'     => $user_list,
            'user_id'       => $user_id,
        );
        $data['module']   = "report";
        $data['page']     = "user_wise_sales_report"; 
        echo modules::run('template/layout', $data); 
        }


        public function bdtask_invoice_wise_due_report(){
        $from_date =(!empty($this->input->get('from_date'))?$this->input->get('from_date'):date('Y-m-d')) ;
        $to_date = (!empty($this->input->get('to_date'))?$this->input->get('to_date'):date('Y-m-d'));
          $sales_report = $this->report_model->retrieve_dateWise_DueReports($from_date, $to_date);
        $sales_amount = 0;
        if (!empty($sales_report)) {
            $i = 0;
            foreach ($sales_report as $k => $v) {
                $i++;
                $sales_report[$k]['sl'] = $i;
                $sales_report[$k]['sales_date'] = $this->occational->dateConvert($sales_report[$k]['date']);
                $sales_amount = $sales_amount + $sales_report[$k]['total_amount'];
            }
        }
        $data = array(
            'title'        => display('due_report'),
            'sales_amount' => $sales_amount,
            'sales_report' => $sales_report,
            'from_date'    => $from_date,
            'to_date'      => $to_date,
            
        );
        $data['module']   = "report";
        $data['page']     = "due_report"; 
        echo modules::run('template/layout', $data); 
        }


     public function bdtask_shippingcost_report(){
        $from_date =(!empty($this->input->get('from_date'))?$this->input->get('from_date'):date('Y-m-d')) ;
        $to_date = (!empty($this->input->get('to_date'))?$this->input->get('to_date'):date('Y-m-d'));
        $sales_report = $this->report_model->retrieve_dateWise_Shippingcost($from_date, $to_date);
        $sales_amount = 0;
        if (!empty($sales_report)) {
            $i = 0;
            foreach ($sales_report as $k => $v) {
                $i++;
                $sales_report[$k]['sl'] = $i;
                $sales_report[$k]['sales_date'] = $this->occational->dateConvert($sales_report[$k]['date']);
                $sales_amount = $sales_amount + $sales_report[$k]['total_amount'];
            }
        }
        $data = array(
            'title'        => display('shipping_cost_report'),
            'sales_amount' => $sales_amount,
            'sales_report' => $sales_report,
            'from_date'    => $from_date,
            'to_date'      => $to_date,
        );
        $data['module']   = "report";
        $data['page']     = "shippincost_report"; 
        echo modules::run('template/layout', $data); 
     }

     public function bdtask_purchase_report(){
         $from_date =(!empty($this->input->get('from_date'))?$this->input->get('from_date'):date('Y-m-d')) ;
        $to_date = (!empty($this->input->get('to_date'))?$this->input->get('to_date'):date('Y-m-d'));
       $purchase_report = $this->report_model->bdtask_purchase_report($from_date, $to_date);
        $purchase_amount = 0;

        if (!empty($purchase_report)) {
            $i = 0;
            foreach ($purchase_report as $k => $v) {
                $i++;
                $purchase_report[$k]['sl'] = $i;
                $purchase_report[$k]['prchse_date'] = $this->occational->dateConvert($purchase_report[$k]['purchase_date']);
                $purchase_amount = $purchase_amount + $purchase_report[$k]['grand_total_amount'];
            }
        }

        $data = array(
            'title'           => display('purchase_report'),
            'purchase_amount' => number_format($purchase_amount, 2, '.', ','),
            'purchase_report' => $purchase_report,
            'from'            => $from_date,
            'to'              => $to_date,
        );

        $data['module']   = "report";
        $data['page']     = "purchase_report"; 
        echo modules::run('template/layout', $data); 
     }

     public function bdtask_purchase_report_category_wise(){
        $from_date =(!empty($this->input->get('from_date'))?$this->input->get('from_date'):date('Y-m-d')) ;
        $to_date   = (!empty($this->input->get('to_date'))?$this->input->get('to_date'):date('Y-m-d'));
        $category  = (!empty($this->input->get('category'))?$this->input->get('category'):'');
        $category_list = $this->report_model->category_list_product();
        $purchase_report_category_wise = $this->report_model->purchase_report_category_wise($from_date,$to_date,$category);
        $data = array(
            'title'         => display('category_wise_purchase_report'),
            'category_list' => $category_list,
            'from'          => $from_date,
            'to'            => $to_date,
            'category_id'   => $category,
            'purchase_report_category_wise' => $purchase_report_category_wise,
        );
        $data['module']   = "report";
        $data['page']     = "purchase_report_category_wise"; 
        echo modules::run('template/layout', $data); 
     }


     public function bdtask_sale_report_productwise(){
        $from_date =(!empty($this->input->get('from_date'))?$this->input->get('from_date'):date('Y-m-d')) ;
        $to_date = (!empty($this->input->get('to_date'))?$this->input->get('to_date'):date('Y-m-d'));
        $product_id = (!empty($this->input->get('product_id'))?$this->input->get('product_id'):'');
        $product_report = $this->report_model->retrieve_product_sales_report($from_date,$to_date,$product_id);
        $product_list = $this->report_model->product_list();
        if (!empty($product_report)) {
            $i = 0;
            foreach ($product_report as $k => $v) {
                $i++;
                $product_report[$k]['sl'] = $i;
            }
        }
        $sub_total = 0;
        if (!empty($product_report)) {
        foreach ($product_report as $k => $v) {
            $product_report[$k]['sales_date'] = $this->occational->dateConvert($product_report[$k]['date']);
            $sub_total = $sub_total + $product_report[$k]['total_amount'];
        }
        }
        $data = array(
            'title'          => display('sales_report_product_wise'),
            'sub_total'      => number_format($sub_total, 2, '.', ','),
            'product_report' => $product_report,
            'product_list'   => $product_list,
            'product_id'     => $product_id,
            'from'           => $from_date,
            'to'             => $to_date,
        );
        $data['module']   = "report";
        $data['page']     = "product_report"; 
        echo modules::run('template/layout', $data);
     }


     public function bdtask_categorywise_sales_report(){
         $from_date =(!empty($this->input->get('from_date'))?$this->input->get('from_date'):date('Y-m-d')) ;
        $to_date = (!empty($this->input->get('to_date'))?$this->input->get('to_date'):date('Y-m-d'));
        $category = (!empty($this->input->get('category'))?$this->input->get('category'):'');
        $category_list = $this->report_model->category_list_product();
        $sales_report_category_wise = $this->report_model->sales_report_category_wise($from_date,$to_date,$category);
        $data = array(
            'title'                      => display('sales_report_category_wise'),
            'category_list'              => $category_list,
            'sales_report_category_wise' => $sales_report_category_wise,
            'from'                       => $from_date,
            'to'                         => $to_date,
            'category_id'                => $category,
        );
        $data['module']   = "report";
        $data['page']     = "sales_report_category_wise"; 
        echo modules::run('template/layout', $data);
     }


     public function bdtask_sales_return(){
        $from_date = $this->input->post('from_date',TRUE);
        $to_date   = $this->input->post('to_date',TRUE);
        $start     = (!empty($from_date)?$from_date:date('Y-m-d'));
        $end       = (!empty($to_date)?$to_date:date('Y-m-d'));
        $return_list = $this->report_model->sales_return_list($start,$end);
        if (!empty($return_list)) {
            foreach ($return_list as $k => $v) {
                $return_list[$k]['final_date'] = $this->occational->dateConvert($return_list[$k]['date_return']);
            }
         
        }

        $data = array(
            'title'      => display('invoice_return'),
            'return_list'=> $return_list,
            'from_date'  => $start,
            'to_date'    => $end,
        );

        $data['module']   = "report";
        $data['page']     = "sales_return"; 
        echo modules::run('template/layout', $data);
     }


     public function bdtask_supplier_return(){
        $from_date = $this->input->post('from_date',TRUE);
        $to_date   = $this->input->post('to_date',TRUE);
        $start     = (!empty($from_date)?$from_date:date('Y-m-d'));
        $end       = (!empty($to_date)?$to_date:date('Y-m-d'));
        $return_list = $this->report_model->supplier_return($start,$end);
        if (!empty($return_list)) {
            foreach ($return_list as $k => $v) {
                $return_list[$k]['final_date'] = $this->occational->dateConvert($return_list[$k]['date_return']);
            }
      
        }

        $data = array(
            'title'       => display('supplier_return'),
            'return_list' => $return_list,
            'start_date'  => $start,
            'end_date'    => $end,
        );

        $data['module']   = "report";
        $data['page']     = "supplier_return"; 
        echo modules::run('template/layout', $data);
     }

     public function bdtask_tax_report(){
        $from_date =(!empty($this->input->get('from_date'))?$this->input->get('from_date'):date('Y-m-d')) ;
        $to_date = (!empty($this->input->get('to_date'))?$this->input->get('to_date'):date('Y-m-d'));
        $sales_report = $this->report_model->retrieve_dateWise_tax($from_date, $to_date);
        $sales_amount = 0;
        if (!empty($sales_report)) {
            $i = 0;
            foreach ($sales_report as $k => $v) {
               
                $sales_report[$k]['sl']         = $i;
                $sales_report[$k]['sales_date'] = $this->occational->dateConvert($sales_report[$k]['date']);
                $sales_amount = $sales_amount + $sales_report[$k]['total_amount'];
                 $i++;
            }
        }
        $data = array(
            'title'        => display('tax_report'),
            'sales_amount' => $sales_amount,
            'sales_report' => $sales_report,
            'from_date'    => $from_date,
            'to_date'      => $to_date,
        );

        $data['module']   = "report";
        $data['page']     = "tax_report"; 
        echo modules::run('template/layout', $data);
     }


     public function bdtask_profit_report(){
        $start_date = (!empty($this->input->get('from_date'))?$this->input->get('from_date'):date('Y-m-d'));
        $end_date   = (!empty($this->input->get('to_date'))?$this->input->get('to_date'):date('Y-m-d'));
        $total_profit_report = $this->report_model->total_profit_report($start_date,$end_date);
        $profit_ammount   = 0;
        $SubTotalSupAmnt  = 0;
        $SubTotalSaleAmnt = 0;
        if (!empty($total_profit_report)) {
            $i = 0;
            foreach ($total_profit_report as $k => $v) {
        $total_profit_report[$k]['sl'] = $i;
        $total_profit_report[$k]['prchse_date'] = $this->occational->dateConvert($total_profit_report[$k]['date']);
        $profit_ammount = $profit_ammount + $total_profit_report[$k]['total_profit'];
        $SubTotalSupAmnt = $SubTotalSupAmnt + $total_profit_report[$k]['total_supplier_rate'];
        $SubTotalSaleAmnt = $SubTotalSaleAmnt + $total_profit_report[$k]['total_sale'];
            }
        }

        $data = array(
            'title'               => display('profit_report'),
            'profit_ammount'      => number_format($profit_ammount, 2, '.', ','),
            'total_profit_report' => $total_profit_report,
            'from'                => $start_date,
            'to'                  => $end_date,
            'SubTotalSupAmnt'     => number_format($SubTotalSupAmnt, 2, '.', ','),
            'SubTotalSaleAmnt'    => number_format($SubTotalSaleAmnt, 2, '.', ','),
        );
        $data['module']   = "report";
        $data['page']     = "profit_report"; 
        echo modules::run('template/layout', $data);
     }
}

