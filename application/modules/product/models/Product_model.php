<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 #------------------------------------    
    # Author: Bdtask Ltd
    # Author link: https://www.bdtask.com/
    # Dynamic style php file
    # Developed by :Isahaq
    #------------------------------------    

class Product_model extends CI_Model {

     public function category_list(){
        return $this->db->select('*')
      ->from('product_category')
      ->get()
      ->result();
     }


    public function create_category($data = [])
    {    
        return $this->db->insert('product_category',$data);
    }
 

    
    public function update_category($data = [])
    {
        return $this->db->where('category_id',$data['category_id'])
            ->update('product_category',$data); 
    } 

    public function single_category_data($id){
        return $this->db->select('*')
            ->from('product_category')
            ->where('category_id', $id)
            ->get()
            ->row();
    }

    public function delete_category($id){
        $this->db->where('category_id', $id)
            ->delete("product_category");
        if ($this->db->affected_rows()) {
            return true;
        } else {
            return false;
        }
    }


    // unit part
    public function unit_list(){
        return $this->db->select('*')
      ->from('units')
      ->get()
      ->result();
     }


    public function create_unit($data = [])
    {    
        return $this->db->insert('units',$data);
    }
 

    
    public function update_unit($data = [])
    {
        return $this->db->where('unit_id',$data['unit_id'])
            ->update('units',$data); 
    } 

    public function single_unit_data($id){
        return $this->db->select('*')
            ->from('units')
            ->where('unit_id', $id)
            ->get()
            ->row();
    }

    public function delete_unit($id){
        $this->db->where('unit_id', $id)
            ->delete("units");
        if ($this->db->affected_rows()) {
            return true;
        } else {
            return false;
        }
    }

        public function supplier_list() {
        $this->db->select('*');
        $this->db->from('supplier_information');
        $this->db->order_by('supplier_name', 'asc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

       public function active_category() {
        $this->db->select('*');
        $this->db->from('product_category');
        $this->db->where('status', 1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

        public function active_unit() {
        $this->db->select('*');
        $this->db->from('units');
        $this->db->where('status', 1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return FALSE;
    }

    public function supplier_product_list($id){
        $this->db->select('*');
        $this->db->from('supplier_product');
        $this->db->where('product_id', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return FALSE;
    }



    public function single_product_data($id){
         return $this->db->select('*')
            ->from('product_information')
            ->where('product_id', $id)
            ->get()
            ->row();
    }

    public function create_product($data = []){
        return $this->db->insert('product_information',$data);
    }
 

     public function update_product($data = [])
    {
        return $this->db->where('product_id',$data['product_id'])
            ->update('product_information',$data); 
    } 

       public function getProductList($postData=null){

         $response = array();

         ## Read value
         $draw = $postData['draw'];
         $start = $postData['start'];
         $rowperpage = $postData['length']; // Rows display per page
         $columnIndex = $postData['order'][0]['column']; // Column index
         $columnName = $postData['columns'][$columnIndex]['data']; // Column name
         $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
         $searchValue = $postData['search']['value']; // Search value

         ## Search 
         $searchQuery = "";
         if($searchValue != ''){
            $searchQuery = " (a.product_name like '%".$searchValue."%' or a.product_model like '%".$searchValue."%' or a.price like'%".$searchValue."%' or c.supplier_price like'%".$searchValue."%' or m.supplier_name like'%".$searchValue."%') ";
         }

         ## Total number of records without filtering
         $this->db->select('count(*) as allcount');
         $this->db->from('product_information a');
         $this->db->join('supplier_product c','c.product_id = a.product_id','left');
         $this->db->join('supplier_information m','m.supplier_id = c.supplier_id','left');
          if($searchValue != '')
         $this->db->where($searchQuery);
         $records = $this->db->get()->result();
         $totalRecords = $records[0]->allcount;

         ## Total number of record with filtering
         $this->db->select('count(*) as allcount');
         $this->db->from('product_information a');
         $this->db->join('supplier_product c','c.product_id = a.product_id','left');
         $this->db->join('supplier_information m','m.supplier_id = c.supplier_id','left');
         if($searchValue != '')
            $this->db->where($searchQuery);
         $records = $this->db->get()->result();
         $totalRecordwithFilter = $records[0]->allcount;

         ## Fetch records
         $this->db->select("a.*,
                a.product_name,
                a.product_id,
                a.product_model,
                a.image,
                c.supplier_price,
                c.supplier_id,
                m.supplier_name
                ");
         $this->db->from('product_information a');
         $this->db->join('supplier_product c','c.product_id = a.product_id','left');
         $this->db->join('supplier_information m','m.supplier_id = c.supplier_id','left');
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
            $image = '<img src="'.$base_url.$record->image.'" class="img img-responsive" height="50" width="50">';
           if($this->permission1->method('manage_product','delete')->access()){
                                  
           $button .= '<a href="'.$base_url.'product/product/bdtask_deleteproduct/'.$record->product_id.'" class="btn btn-xs btn-danger "  onclick="'.$jsaction.'"><i class="fa fa-trash"></i></a>';
         }

         $button .='  <a href="'.$base_url.'qrcode/'.$record->product_id.'" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="left" title="'.display('qr_code').'"><i class="fa fa-qrcode" aria-hidden="true"></i></a>';

         $button .='  <a href="'.$base_url.'barcode/'.$record->product_id.'" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="left" title="'.display('barcode').'"><i class="fa fa-barcode" aria-hidden="true"></i></a>';
      if($this->permission1->method('manage_product','update')->access()){
         $button .=' <a href="'.$base_url.'product_form/'.$record->product_id.'" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="left" title="'. display('update').'"><i class="fa fa-pencil" aria-hidden="true"></i></a>';
     }

         $product_name = '<a href="'.$base_url.'product_details/'.$record->product_id.'">'.$record->product_name.'</a>';
         $supplier = '<a href="'.$base_url.'supplier_ledgerinfo/'.$record->supplier_id.'">'.$record->supplier_name.'</a>';
               
            $data[] = array( 
                'sl'               =>$sl,
                'product_name'     =>$product_name,
                'product_model'    =>$record->product_model,
                'supplier_name'    =>$supplier,
                'price'            =>$record->price,
                'purchase_p'       =>$record->supplier_price,
                'image'            =>$image,
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

    public function delete_product($id){
    $this->db->where('product_id', $id)
            ->delete("supplier_product");
     $this->db->where('product_id', $id)
            ->delete("product_information");

        if ($this->db->affected_rows()) {
            return true;
        } else {
            return false;
        }
}

public function check_product($id){
        $this->db->select('*');
        $this->db->from('product_purchase_details');
        $this->db->where('product_id', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        }
        return FALSE;
}

    public function bdtask_barcode_productdata($id){
         return $this->db->select('*')
            ->from('product_information')
            ->where('product_id', $id)
            ->get()
            ->result_array();
    }

     public function product_purchase_info($product_id) {
        $this->db->select('a.*,b.*,sum(b.quantity) as quantity,sum(b.total_amount) as total_amount,c.supplier_name');
        $this->db->from('product_purchase a');
        $this->db->join('product_purchase_details b', 'b.purchase_id = a.purchase_id');
        $this->db->join('supplier_information c', 'c.supplier_id = a.supplier_id');
        $this->db->where('b.product_id', $product_id);
        $this->db->order_by('a.purchase_date', 'desc');
        $this->db->group_by('a.purchase_id');
        $this->db->limit(30);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

        public function invoice_data($product_id) {
        $this->db->select('a.*,b.*,c.customer_name');
        $this->db->from('invoice a');
        $this->db->join('invoice_details b', 'b.invoice_id = a.invoice_id');
        $this->db->join('customer_information c', 'c.customer_id = a.customer_id');
        $this->db->where('b.product_id', $product_id);
        $this->db->order_by('a.date', 'desc');
        $this->db->limit(30);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

}

