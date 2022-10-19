<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 #------------------------------------    
    # Author: Bdtask Ltd
    # Author link: https://www.bdtask.com/
    # Dynamic style php file
    # Developed by :Isahaq
    #------------------------------------    

class Bank_model extends CI_Model {

    public function create_bank($data = [])
    {    
        return $this->db->insert('bank_add',$data);
    }
 

    
    public function update_bank($data = [])
    {
        return $this->db->where('id',$data['bank_id'])
            ->update('bank_add',$data); 
    } 

    public function single_bank_data($id){
        return $this->db->select('*')
            ->from('bank_add')
            ->where('id', $id)
            ->get()
            ->row();
    }



      public function get_bank_list() {
        $this->db->select('*');
        $this->db->from('bank_add');
        $this->db->order_by('bank_name','asc');
        $this->db->where('status', 1);

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }


       public function bank_balance($bnak_name = null){
        $this->db->select('(sum(a.Debit) - sum(a.Credit)) as balance,b.HeadName');
        $this->db->from('acc_transaction a');
        $this->db->join('acc_coa b','a.COAID=b.HeadCode');
        $this->db->where('b.HeadName',$bnak_name);
        $this->db->where('a.IsAppove',1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;

    }

    public function delete_bank($id){
        $coa = $this->db->select('*')->from('bank_add')->where('id',$id)->get()->row();
        $this->db->where('HeadName', $coa->bank_name)
            ->delete("acc_coa");
       $this->db->where('id', $id)
            ->delete("bank_add");
        if ($this->db->affected_rows()) {
            return true;
        } else {
            return false;
        }
    }

        public function bank_info($bank_id = null) {
        $this->db->select('*');
        $this->db->from('bank_add');
        if($bank_id){
        $this->db->where('bank_id', $bank_id);
    }
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }


     public function bank_ledger($bank_name,$from,$to) {
        $this->db->select('a.*,b.HeadName');
        $this->db->from('acc_transaction a');
        $this->db->join('acc_coa b','a.COAID=b.HeadCode');
        $this->db->where('b.PHeadName','Cash At Bank');
        if(!empty($bank_name)){
        $this->db->where('b.HeadName',$bank_name);
         }
        $this->db->where('a.VDate >=', $from);
        $this->db->where('a.VDate <=', $to);
        $this->db->where('a.IsAppove',1);
        $this->db->order_by('a.VDate','desc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }


}

