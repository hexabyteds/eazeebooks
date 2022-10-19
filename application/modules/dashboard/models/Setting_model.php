<?php defined('BASEPATH') OR exit('No direct script access allowed');
 #------------------------------------    
    # Author: Bdtask Ltd
    # Author link: https://www.bdtask.com/
    # Dynamic style php file
    # Developed by :Isahaq
    #------------------------------------    

class Setting_model extends CI_Model {
 
	private $table = "web_setting";

	public function create($data = [])
	{	 
		return $this->db->insert($this->table,$data);
	}
 
	public function read()
	{
		 $data = $this->db->select("*")
			->from($this->table)
			->get()
			->row();
			return $data;
	} 
	
  	public function update($data = [])
	{
		return $this->db->where('setting_id',$data['setting_id'])
			->update($this->table,$data); 
	} 


  // currency part
	public function currency_list(){
		 $data = $this->db->select("*")
			->from('currency_tbl')
			->get()
			->result();
			 return $data;
	}

	public function add_currency($data = []){
		return $this->db->insert('currency_tbl',$data);
	}

   public function update_currency($data = [])
	{
		return $this->db->where('id',$data['id'])
			->update('currency_tbl',$data); 
	} 

	public function currency_editdata($id){
        $data = $this->db->select("*")
			->from('currency_tbl')
			->where('id',$id)
			->get()
			->row();
			return $data;
	}

	public function delete_currency($id){
		$this->db->where('id', $id)
			->delete("currency_tbl");
		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	}

	public function company_info(){
		 $data = $this->db->select("*")
			->from('company_information')
			->get()
			->result();
			return $data;
	}

		public function customer_info(){
		 $data = $this->db->select("*")
			->from('customer_information')
			->get()
			->result_array();
			return $data;
	}

	

	public function company_details($id){
      $data = $this->db->select("*")
			->from('company_information')
			->where('company_id',$id)
			->get()
			->row();
			return $data;
	}

	 	public function update_company($data = [])
	{
		return $this->db->where('company_id',$data['company_id'])
			->update('company_information',$data); 
	} 

	public function mail_settingdata(){
		 $data = $this->db->select("*")
			->from('email_config')
			->get()
			->result();
			return $data;
	}

	public function sms_settingdata(){
		 $data = $this->db->select("*")
			->from('sms_settings')
			->get()
			->result_array();
			return $data;
	}

	 public function app_settingsdata(){
        return $result = $this->db->select('*')
                        ->from('app_setting')
                        ->get()
                        ->result_array();
    }

        public function product_info() {

        $product_id = $this->input->post('product_model',TRUE);
        $customer_id = $this->input->post('customer_name',TRUE);
        $from = $this->input->post('from');
        $to = $this->input->post('to');

        $query = $this->db->select('
                                invoice.date,
                                invoice_details.*,
                                product_information.product_model
                                ')
                ->from('invoice_details')
                ->join('product_information', 'invoice_details.product_id = product_information.product_id')
                ->join('invoice', 'invoice.invoice_id = invoice_details.invoice_id')
                ->where('invoice.customer_id', $customer_id)
                ->where('invoice.date >=', $from)
                ->where('invoice.date <=', $to)
                ->where('invoice_details.product_id', $product_id)
                ->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }


        public function password_recovery($data = array())
    {
        return $this->db->select("*")
            ->from('user_login')
            ->where('username',$data['email'])
            ->get();
    }
        public function update_recovery_pass($data = [])
    {
        return $this->db->where('username',$data['email'])
            ->update('user_login',$data); 
    } 
    public function token_matching($token_id){
        return $this->db->select("*")
            ->from('user_login')
            ->where('security_code',$token_id)
            ->get(); 
    }
}
