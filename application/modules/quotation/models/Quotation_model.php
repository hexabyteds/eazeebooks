<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 #------------------------------------    
    # Author: Bdtask Ltd
    # Author link: https://www.bdtask.com/
    # Dynamic style php file
    # Developed by :Isahaq
    #------------------------------------    

class Quotation_model extends CI_Model {

 public function supplier_list(){
     $query = $this->db->select('*')
                ->from('supplier_information')
                ->where('status', '1')
                ->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
 }


 public function tax_fields(){
     return $data = $this->db->select('tax_name,default_value')
                ->from('tax_settings')
                ->get()
                ->result_array();
 }

 public function setting_data(){
     return $data = $this->db->select('*')
                ->from('web_setting')
                ->get()
                ->result_array();
 }

    public function get_allcustomer(){
          return $this->db->select('*')
                        ->from('customer_information')
                        ->order_by('customer_name', 'asc')
                        ->get()
                        ->result_array();
    }

        //Item tax details 
    public function itemtaxdetails($quot_no){
        $taxdetector = 'item'.$quot_no;
          return $this->db->select('*')
                        ->from('quotation_taxinfo')
                        ->where('relation_id', $taxdetector)
                        ->get()
                        ->result_array();
    }

       public function servicetaxdetails($quot_no){
        $taxdetector = 'serv'.$quot_no;
          return $this->db->select('*')
                        ->from('quotation_taxinfo')
                        ->where('relation_id', $taxdetector)
                        ->get()
                        ->result_array();
    }


      //Retrieve invoice_html_data
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
        $this->db->where('c.quantity >', 0);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

      public function get_allproduct()
    {
       return $this->db->select('*')->from('product_information')->get()->result();
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
    $data2[$taxfield] = $product_information->$taxfield;
    $taxvar[$i]       = $product_information->$taxfield;
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
   


     //quotation insert
    public function quotation_entry($data) {
        $this->db->select('*');
        $this->db->from('quotation');
        $this->db->where('quot_no', $data['quot_no']);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return FALSE;
        } else {
            $this->db->insert('quotation', $data);
            return TRUE;
        }
    }

        public function quot_service_detail($quot_id)
    {
          $result = $this->db->select('a.*,b.*')
                        ->from('quotation_service_used a')
                        ->join('product_service b', 'a.service_id=b.service_id')
                        ->where('a.quot_id', $quot_id)
                        ->order_by('a.id', 'asc')
                        ->get()
                        ->result_array();
                        if(!empty($result)){
                            return $result;
                        }else{
                            return false;
                        }
    }

       public function quot_main_edit($quot_id) {
        return $this->db->select('*')
                        ->from('quotation')
                        ->where('quotation_id', $quot_id)
                        ->get()
                        ->result_array();
    }

        public function quot_product_detail($quot_id) {
        return $this->db->select('a.*,b.*')
                        ->from('quot_products_used a')
                        ->join('product_information b', 'a.product_id=b.product_id','left')
                        ->where('a.quot_id', $quot_id)
                        ->order_by('a.id', 'asc')
                        ->get()
                        ->result_array();
    }

        public function customerinfo($customer_id) {
        return $this->db->select('*')
                        ->from('customer_information')
                        ->where('customer_id', $customer_id)
                        ->get()
                        ->result_array();
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

    //    ========== its for quotation_list ==============
    public function quotation_list($offset, $limit) {
        $this->db->select('a.*, b.customer_name');
        $this->db->from('quotation a');
        $this->db->join('customer_information b', 'b.customer_id = a.customer_id');
        $this->db->order_by('a.id', 'desc');
        $this->db->limit($offset, $limit);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        return false;
    }

       // quotation update
    public function quotation_update($data) {
        $this->db->select('*');
        $this->db->from('quotation');
        $this->db->where('quotation_id', $data['quotation_id']);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $this->db->where('quotation_id', $data['quotation_id']);
            $this->db->update('quotation', $data);
            return TRUE;
        } else {
            return FALSE;
        }
    }

       public function quotation_delete($quot_id) {
        //quotation
        $this->db->where('quotation_id', $quot_id);
        $this->db->delete('quotation');
        //used product
        $this->db->where('quot_id', $quot_id);
        $this->db->delete('quot_products_used');
        // used labour
        $this->db->where('quot_id', $quot_id);
        $this->db->delete('quotation_service_used');
        return true;
    }
}

