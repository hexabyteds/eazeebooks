<?php defined('BASEPATH') OR exit('No direct script access allowed');
 #------------------------------------    
    # Author: Bdtask Ltd
    # Author link: https://www.bdtask.com/
    # Dynamic style php file
    # Developed by :Isahaq
    #------------------------------------    

class Home_model extends CI_Model {

 public function total_sales_amount($date=null) {
        $date = (!empty($date)?$date:date('F Y'));
        $days = $this->yearmonthval($date);
        $this->db->select("sum(total_amount) as totalsales");
        $this->db->from('invoice');
        $this->db->where('date >=',$days['start_date']);
        $this->db->where('date <=',$days['end_date']);
        $query = $this->db->get()->row();
        return (!empty($query->totalsales)?$query->totalsales:1);
    }
    public function yearmonthval($date){
         list($month,$year) = explode(' ',$date);
         switch ($month)
        {
            case "January":
                $month = '01';
                break;
            case "February":
                $month = '02';
                break;
            case "March":
                $month = '03';
                break;
            case "April":
                $month = '04';
                break;
            case "May":
                $month = '05';
                break;
            case "June":
                $month = '06';
                break;
            case "July":
                $month = '07';
                break;
            case "August":
                $month = '08';
                break;
            case "September":
                $month = '09';
                break;
            case "October":
                $month = '10';
                break;
            case "November":
                $month = '11';
                break;
            case "December":
                $month = '12';
                break;
        }
        $fdate = $year.'-'.$month.'-'.'01';
        $lastday = date('t',strtotime($fdate));
        $edate = $year.'-'.$month.'-'.$lastday;
        $startd    = $fdate;
        $data['start_date']=$startd;
        $data['end_date'] =$edate;
        return $data;
    }


 public function total_purchase_amount($date=null) {
        $date = (!empty($date)?$date:date('F Y'));
        $days = $this->yearmonthval($date);
        $this->db->select("sum(grand_total_amount) as totalpurchase");
        $this->db->from('product_purchase');
        $this->db->where('purchase_date >=',$days['start_date']);
        $this->db->where('purchase_date <=',$days['end_date']);
        $query = $this->db->get();
        if(!empty($query->row()->totalpurchase)){
            return $query->row()->totalpurchase;
        }else{
            return 1;
        }
    }

        public function total_expense_amount($date=null) {
        $date = (!empty($date)?$date:date('F Y'));
        $days = $this->yearmonthval($date);
        $this->db->select("*");
        $this->db->where('PHeadName','Expence');
        $this->db->from('acc_coa');
        $query = $this->db->get();
        $result =  $query->result_array();
        $totalamount = 0;
        foreach ($result as $expense) {
           $amount = $this->db->select('ifnull(sum(Debit),0) as amount')->from('acc_transaction')->where('VDate >=',$days['start_date'])->where('VDate <=',$days['end_date'])->where('COAID',$expense['HeadCode'])->get()->row();
           $totalamount = $totalamount+$amount->amount;
        }

        return (!empty($totalamount)?$totalamount:1);
    }

     
     // Total Employee Salary
     public function total_employee_salary($date=null) {
        $date = (!empty($date)?$date:date('F Y'));
        $days = $this->yearmonthval($date);
        $this->db->select("sum(total_salary) as totalsalary");
        $this->db->from('employee_salary_payment');
        $this->db->where('payment_date >=',$days['start_date']);
        $this->db->where('payment_date <=',$days['end_date']);
        $query = $this->db->get();
        if(!empty($query->row()->totalsalary)){
            return $query->row()->totalsalary;
        }else{
            return 1;
        }
    }

       public function total_service_amount($date=null) {
        $date = (!empty($date)?$date:date('F Y'));
        $days = $this->yearmonthval($date);
        $this->db->select("sum(total_amount) as totalservice");
        $this->db->from('service_invoice');
        $this->db->where('date >=',$days['start_date']);
        $this->db->where('date <=',$days['end_date']);
        $query = $this->db->get();
        if(!empty($query->row()->totalservice)){
            return $query->row()->totalservice;
        }else{
            return 1;
        }
    }


       public function yearly_invoice_report($month=null){

        $result = $this->db->query("
                            SELECT sum(total_amount) as total_sale FROM `invoice`
                            WHERE MONTH(date)  = $month
                                AND YEAR(date) = YEAR(CURRENT_TIMESTAMP);
                            ");

        return $result->row();
    }

        public function yearly_purchase_report($month=null){

        $result = $this->db->query("
                            SELECT sum(grand_total_amount) as total_purchase FROM `product_purchase`
                            WHERE MONTH(purchase_date)  = $month
                                AND YEAR(purchase_date) = YEAR(CURRENT_TIMESTAMP);
                            ");

        return $result->row();
    }


    //    ======= its for  best_sales_products ===========
    public function best_sales_products() {
        $this->db->select('b.product_id, b.product_name, sum(a.quantity) as quantity');
        $this->db->from('invoice_details a');
        $this->db->join('product_information b', 'b.product_id = a.product_id');
        $this->db->group_by('b.product_id');
        $this->db->order_by('quantity', 'desc');
        $query = $this->db->get();
        return $query->result();
    }


       //Count todays_sales_report
    public function todays_sales_report() {
        $today = date('Y-m-d');
        $this->db->select('a.*,b.customer_name, b.customer_id, a.invoice_id,a.invoice');
        $this->db->from('invoice a');
        $this->db->join('customer_information b', 'b.customer_id = a.customer_id');
        $this->db->where('a.date', $today);
        $this->db->order_by('a.invoice', 'desc');
        $query = $this->db->get()->result();
        return $query;
    }


 //Retrieve todays_total_sales_report
    public function todays_total_sales_report() {
        $today = date('Y-m-d');
        $this->db->select("a.date,a.invoice,b.invoice_id, sum(a.total_amount) as total_amt, sum(b.total_price) as total_sale,sum(`quantity`*`supplier_rate`) as total_supplier_rate,(SUM(total_price) - SUM(`quantity`*`supplier_rate`)) AS total_profit");
        $this->db->from('invoice a');
        $this->db->join('invoice_details b', 'b.invoice_id = a.invoice_id');
        $this->db->where('a.date', $today);
        $this->db->order_by('a.invoice_id', 'desc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

     public function todays_total_sales_amount() {
        $today = date('Y-m-d');
        $this->db->select("sum(total_amount) as total_amount");
        $this->db->from('invoice');
        $this->db->where('date', $today);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

        // todays sales product
    public function todays_sale_product() {
        $today = date('Y-m-d');
        $this->db->select("c.product_name,c.price");
        $this->db->from('invoice a');
        $this->db->join('invoice_details b', 'b.invoice_id = a.invoice_id');
        $this->db->join('product_information c', 'c.product_id = b.product_id');
        $this->db->order_by('a.date', 'desc');
        $this->db->where('a.date', $today);
        $this->db->limit('3');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

        //Retrieve todays_total_sales_report
    public function todays_total_purchase_report() {
        $today = date('Y-m-d');
        $this->db->select("sum(grand_total_amount) as ttl_purchase_amount");
        $this->db->from('product_purchase ');
        $this->db->where('purchase_date', $today);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

        public function best_saler_product_list() {
        $this->db->select('b.product_id, b.product_name, sum(a.quantity) as quantity');
        $this->db->from('invoice_details a');
        $this->db->join('product_information b', 'b.product_id = a.product_id');
        $this->db->group_by('b.product_id');
        $this->db->order_by('quantity', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

        public function out_of_stock() {

         $this->db->select("a.unit,a.product_name,a.product_id,a.price,a.product_model,(select sum(quantity) from invoice_details where product_id= `a`.`product_id`) as 'totalSalesQnty',(select sum(quantity) from product_purchase_details where product_id= `a`.`product_id`) as 'totalBuyQnty'");
        $this->db->from('product_information a');
        $this->db->where(array('a.status' => 1));
        $this->db->group_by('a.product_id');
        $query = $this->db->get();
         $result = $query->result_array();
         $stock = [];
         $i = 0;
         foreach ($result as $stockproduct) {
            $stokqty = $stockproduct['totalBuyQnty']-$stockproduct['totalSalesQnty'];
            if($stokqty < 10){

             $stock[$i]['stock']         = $stockproduct['totalBuyQnty']-$stockproduct['totalSalesQnty'];
             $stock[$i]['product_id']    = $stockproduct['product_id'];
             $stock[$i]['product_name']  = $stockproduct['product_name'];
             $stock[$i]['product_model'] = $stockproduct['product_model'];
             $stock[$i]['unit']          = $stockproduct['unit'];
         }
             $i++;
         }
        return $stock;
    }


   public function profile_edit_data() {
        $user_id = $this->session->userdata('id');
        $this->db->select('a.*,b.username,a.logo');
        $this->db->from('users a');
        $this->db->join('user_login b', 'b.user_id = a.user_id');
        $this->db->where('a.user_id', $user_id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }


    public function profile_update() {
    $logo = $this->fileupload->do_upload(
            './assets/img/user/', 
            'logo'

        );

        $old_logo = $this->input->post('old_logo',true);
        $user_id = $this->session->userdata('id');
        $first_name = $this->input->post('first_name',true);
        $last_name = $this->input->post('last_name',true);
        $user_name = $this->input->post('user_name',true);
        $new_logo = (!empty($logo) ? $logo : $old_logo);

        return $this->db->query("UPDATE `users` AS `a`,`user_login` AS `b` SET `a`.`first_name` = '$first_name', `a`.`last_name` = '$last_name', `b`.`username` = '$user_name',`a`.`logo` = '$new_logo' WHERE `a`.`user_id` = '$user_id' AND `a`.`user_id` = `b`.`user_id`");
    }

        public function change_password($email, $old_password, $new_password) {
        $user_name = md5("gef" . $new_password);
        $password = md5("gef" . $old_password);
        $this->db->where(array('username' => $email, 'password' => $password, 'status' => 1));
        $query = $this->db->get('user_login');
        $result = $query->result_array();

        if (count($result) == 1) {
            $this->db->set('password', $user_name);
            $this->db->where('password', $password);
            $this->db->where('username', $email);
            $this->db->update('user_login');

            return true;
        }
        return false;
    }

}
 