<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 #------------------------------------    
    # Author: Bdtask Ltd
    # Author link: https://www.bdtask.com/
    # Dynamic style php file
    # Developed by :Isahaq
    #------------------------------------    

class Account_model extends CI_Model {


     function get_userlist()
    {
        $this->db->select('*');
        $this->db->from('acc_coa');
        $this->db->where('IsActive',1);
        $this->db->order_by('HeadName');
        $query = $this->db->get();
        if ($query->num_rows() >= 1) {
            return $query->result();
        } else {
            return false;
        }
    }

       function get_parenthead()
    {
        $this->db->select('*');
        $this->db->from('acc_coa');
        $this->db->where('PHeadName','COA');
        $this->db->order_by('HeadName');
        $query = $this->db->get();
        if ($query->num_rows() >= 1) {
            return $query->result();
        } else {
            return false;
        }
    }
    function get_parenthead_loop($headName)
    {
        $this->db->select('*');
        $this->db->from('acc_coa');
        $this->db->where('HeadName',$headName);
        $this->db->order_by('HeadName');
        $query = $this->db->get();
        if ($query->num_rows() >= 1) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function first_child($phead){
        $this->db->select('*');
        $this->db->from('acc_coa');
        $this->db->where('PHeadName',$phead);
        $this->db->order_by('HeadName');
        $query = $this->db->get();
        if ($query->num_rows() >= 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function create_opening($data = []){
     return $this->db->insert('acc_transaction', $data);
    }

        function dfs($HeadName,$HeadCode,$oResult,$visit,$d)
    {

       // $balance = $this->coa_balance($HeadCode,$HeadName);
        //$opening = $this->opening_coa_balance($HeadCode,$HeadName);
        // if($d==0) 
        // echo "
        // <li class=\"jstree-open \">
        // $HeadName 
        // <a href=/'javascript:void(0)/' class=\"form-control headanchor\">
        // <span class=\"coa_hd\"><b>Head Name</b></span>
        // <span class=\"bal_span\"><b>balance</b></span>
        // <span class=\"bal_span\"><b>Opening-balance</b></span></a>";
        
        // else 
      if($d==1) 
        echo 
        "<li class=\"jstree-open\">
        <a href='javascript:' class=\"form-control jstreelip\">$HeadName <span class=\"bal_span\"> $balance</span>
        <span class=\"bal_span_pre\">$opening</span></a>";
        else 
        echo 
        "<li class=\"jstreeli\">
         <a href='javascript:' class=\"form-control\" >$HeadName <span class=\"bal_span\"> $balance</span> <span class=\"bal_span_pre\">$opening</span></a>";
        $p=0;
        for($i=1;$i< count($oResult);$i++)
        {

            if (!$visit[$i])
            {
                if ($HeadName==$oResult[$i]->PHeadName)
                {
                    $visit[$i]=true;
                    if($p==0) echo "<ul>";
                    $p++;
                    $this->dfs($oResult[$i]->HeadName,$oResult[$i]->HeadCode,$oResult,$visit,$d+1);
                }
            }
        }
        if($p==0)
            echo "</li>";
        else
            echo "</ul>";
    }

    public function coa_balance($head,$HeadName){
      $head_info = $this->db->select('*')->from('acc_coa')->where('HeadCode',$head)->get()->row();
      $balance = 0;
      $total_customer_rcv = 0;
      $total_loan_rcv = 0;
      $single_balance = 0;
       /*all head single(common) balance*/
          $this->db->select('sum(acc_transaction.Debit) as predebit, sum(acc_transaction.Credit) as precredit');
                $this->db->from('acc_transaction');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('acc_transaction.COAID',$head);
                $query      = $this->db->get()->row();
                $single_bal = $query->predebit - $query->precredit;
                $single_balance += (!empty($single_bal)?$single_bal:0);
                $balance = $single_balance;

       /*single customer receivable balance*/
      if($head_info->PHeadName == 'Customer Receivable'){
               $this->db->select('sum(acc_transaction.Debit) as predebit, sum(acc_transaction.Credit) as precredit');
                $this->db->from('acc_transaction');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('acc_transaction.COAID',$head);
                $query    = $this->db->get()->row();
                $cust_bal = $query->predebit - $query->precredit;
                $customer_balance += (!empty($cust_bal)?$cust_bal:0);
       

        $balance = $customer_balance;
      }

         /*single loan receivable balance*/
          if($head_info->PHeadName == 'Loan Receivable'){
               $this->db->select('sum(acc_transaction.Debit) as predebit, sum(acc_transaction.Credit) as precredit');
                $this->db->from('acc_transaction');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('acc_transaction.COAID',$head);
                $query   = $this->db->get()->row();
                $lnp_bal = $query->predebit - $query->precredit;
                $loanrcv_balance += (!empty($lnp_bal)?$lnp_bal:0);
       

        $balance = $loanrcv_balance;
      }

           /*total customer receivable balance*/
            if($HeadName == 'Customer Receivable'){
               $coa = $this->db->select('HeadCode')->from('acc_coa')->where('PHeadName','Customer Receivable')->get()->result_array();
               $asset_balance = 0;
              foreach($coa as $assetcoa){
               $this->db->select('sum(acc_transaction.Debit) as predebit, sum(acc_transaction.Credit) as precredit');
                $this->db->from('acc_transaction');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('acc_transaction.COAID',$assetcoa['HeadCode']);
                $query   = $this->db->get()->row();
                $ass_bal = $query->predebit - $query->precredit;
                $asset_balance += (!empty($ass_bal)?$ass_bal:0);
        }


        $balance = $asset_balance;
       

      }

        /*total Loan receivable balance*/
         if($HeadName == 'Loan Receivable'){
              $coa = $this->db->select('HeadCode')->from('acc_coa')->where('PHeadName','Loan Receivable')->get()->result_array();
              $asset_balance = 0;
              foreach($coa as $assetcoa){
                $this->db->select('sum(acc_transaction.Debit) as predebit, sum(acc_transaction.Credit) as precredit');
                $this->db->from('acc_transaction');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('acc_transaction.COAID',$assetcoa['HeadCode']);
                $query   = $this->db->get()->row();
                $ass_bal = $query->predebit - $query->precredit;
                $asset_balance += (!empty($ass_bal)?$ass_bal:0);
        }


        $balance = $asset_balance;
        $total_loan_rcv = $balance;

      }

         /*total cash at bank balance*/
            if($HeadName == 'Cash At Bank'){
                $coa = $this->db->select('HeadCode')->from('acc_coa')->where('PHeadName','Cash At Bank')->get()->result_array();
                $asset_balance = 0;
              foreach($coa as $assetcoa){
                $this->db->select('sum(acc_transaction.Debit) as predebit, sum(acc_transaction.Credit) as precredit');
                $this->db->from('acc_transaction');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('acc_transaction.COAID',$assetcoa['HeadCode']);
                $query   = $this->db->get()->row();
                $ass_bal = $query->predebit - $query->precredit;
                $asset_balance += (!empty($ass_bal)?$ass_bal:0);
        }


        $balance = $asset_balance;

      }

             /*single bank balance*/
              if($head_info->PHeadName == 'Cash At Bank'){
               $this->db->select('sum(acc_transaction.Debit) as predebit, sum(acc_transaction.Credit) as precredit');
                $this->db->from('acc_transaction');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('acc_transaction.COAID',$head);
                $query    = $this->db->get()->row();
                $bank_bal = $query->predebit - $query->precredit;
                $bank_balance += (!empty($bank_bal)?$bank_bal:0);
                $balance = $bank_balance;

      }

   /*total account receivable*/
       if($HeadName == 'Account Receivable'){
           $coa = $this->db->select('HeadCode')->from('acc_coa')->where('PHeadName','Customer Receivable')->get()->result_array();
              $asset_balance = 0;
              foreach($coa as $assetcoa){
                $this->db->select('sum(acc_transaction.Debit) as predebit, sum(acc_transaction.Credit) as precredit');
                $this->db->from('acc_transaction');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('acc_transaction.COAID',$assetcoa['HeadCode']);
                $query   = $this->db->get()->row();
                $ass_bal = $query->predebit - $query->precredit;
                $asset_balance += (!empty($ass_bal)?$ass_bal:0);
        }

         $lncoa = $this->db->select('HeadCode')->from('acc_coa')->where('PHeadName','Loan Receivable')->get()->result_array();
              foreach($lncoa as $lnassetcoa){
               $this->db->select('sum(acc_transaction.Debit) as predebit, sum(acc_transaction.Credit) as precredit');
                $this->db->from('acc_transaction');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('acc_transaction.COAID',$lnassetcoa['HeadCode']);
                $lnquery   = $this->db->get()->row();
                $ln_bal    = $lnquery->predebit - $lnquery->precredit;
                $loan_balance += (!empty($ln_bal)?$ln_bal:0);
        }

                $single_acc_rcv = $this->db->select('HeadCode')->from('acc_coa')->where('PHeadName','Account Receivable')->get()->result_array();
              foreach($single_acc_rcv as $singl_rcv){
                $this->db->select('sum(acc_transaction.Debit) as predebit, sum(acc_transaction.Credit) as precredit');
                $this->db->from('acc_transaction');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('acc_transaction.COAID',$singl_rcv['HeadCode']);
                $rcvquery     = $this->db->get()->row();
                $sreceive_bal = $rcvquery->predebit - $rcvquery->precredit;
                $single_balance += (!empty($sreceive_bal)?$sreceive_bal:0);
        }



        $balance = $asset_balance + $loan_balance + $single_balance;

       }

        if($HeadName == 'Cash & Cash Equivalent'){
              $bank_balance = 0;
              $cash_balance = 0;
              $coa = $this->db->select('HeadCode')->from('acc_coa')->where('PHeadName','Cash At Bank')->get()->result_array();
              foreach($coa as $assetcoa){
                $this->db->select('sum(acc_transaction.Debit) as predebit, sum(acc_transaction.Credit) as precredit');
                $this->db->from('acc_transaction');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('acc_transaction.COAID',$assetcoa['HeadCode']);
                $query    = $this->db->get()->row();
                $bank_bal = $query->predebit - $query->precredit;
                $bank_balance += (!empty($bank_bal)?$bank_bal:0);
        }

                $cash_other = $this->db->select('HeadCode')->from('acc_coa')->where('PHeadName','Cash & Cash Equivalent')->get()->result_array();
          foreach($cash_other as $cashother){
                $this->db->select('sum(acc_transaction.Debit) as predebit, sum(acc_transaction.Credit) as precredit');
                $this->db->from('acc_transaction');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('acc_transaction.COAID',$cashother['HeadCode']);
                $query    = $this->db->get()->row();
                $cash_bal = $query->predebit - $query->precredit;
                $cash_balance += (!empty($cash_bal)?$cash_bal:0);
        }

        $balance = $bank_balance + $cash_balance;

        }

        if($HeadName == 'Current Asset'){

          $balance = $this->total_current_asset_balance();

        }

         if($HeadName == 'Non Current Assets'){

          $balance = $this->total_non_current_asset_balance();

        }
        if($HeadName == 'Assets'){
          $cur_balance      = $this->total_current_asset_balance();
          $non_cure_balance = $this->total_non_current_asset_balance();
          $balance          = $cur_balance + $non_cure_balance;

        }

         if($HeadName == 'Equity'){
          $balance = $this->total_equity_balance();
         }

          if($HeadName == 'Expence'){
          $balance = $this->total_expense_balance();
           }

          if($HeadName == 'Income'){
           $balance = $this->total_income_balance();
           }
           if($HeadName == 'Account Payable'){
           $balance = $this->total_acc_payable_balance();
           }
            if($HeadName == 'Employee Ledger'){
           $balance = $this->total_acc_employee_balance();
           }
           if($HeadName == 'Current Liabilities'){
            $balance_ac_payable = $this->total_acc_payable_balance();
            $emp_payable        = $this->total_acc_employee_balance();
            $rootcur_liablities = $this->total_acc_cruliabilities_balance();
            $balance            = $balance_ac_payable + $emp_payable + $rootcur_liablities;
           }

            if($HeadName == 'Non Current Liabilities'){
           $balance = $this->total_acc_no_curliability_balance();
           }

            if($HeadName == 'Liabilities'){
           $non_cur_balance    = $this->total_acc_no_curliability_balance();
           $balance_ac_payable = $this->total_acc_payable_balance();
           $emp_payable        = $this->total_acc_employee_balance();
           $rootcur_liablities = $this->total_acc_cruliabilities_balance();
           $balance            = $balance_ac_payable + $emp_payable + $rootcur_liablities + $non_cur_balance;
           }
          
          return (!empty($balance)?number_format($balance,2):number_format(0,2));
    }

    public function total_current_asset_balance(){
              $asset_balance = $loan_balance = $single_balance = 0;
              $coa           = $this->db->select('HeadCode')->from('acc_coa')->where('PHeadName','Customer Receivable')->get()->result_array();
              $asset_balance = 0;
              foreach($coa as $assetcoa){
               $this->db->select('sum(acc_transaction.Debit) as predebit, sum(acc_transaction.Credit) as precredit');
                $this->db->from('acc_transaction');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('acc_transaction.COAID',$assetcoa['HeadCode']);
                $query   = $this->db->get()->row();
                $ass_bal = $query->predebit - $query->precredit;
                $asset_balance += (!empty($ass_bal)?$ass_bal:0);
        }

               $lncoa = $this->db->select('HeadCode')->from('acc_coa')->where('PHeadName','Loan Receivable')->get()->result_array();
              foreach($lncoa as $lnassetcoa){
                $this->db->select('sum(acc_transaction.Debit) as predebit, sum(acc_transaction.Credit) as precredit');
                $this->db->from('acc_transaction');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('acc_transaction.COAID',$lnassetcoa['HeadCode']);
                $lnquery   = $this->db->get()->row();
                $ln_bal    = $lnquery->predebit - $lnquery->precredit;
                $loan_balance += (!empty($ln_bal)?$ln_bal:0);
        }

              $single_acc_rcv = $this->db->select('HeadCode')->from('acc_coa')->where('PHeadName','Account Receivable')->get()->result_array();
              foreach($single_acc_rcv as $singl_rcv){
                $this->db->select('sum(acc_transaction.Debit) as predebit, sum(acc_transaction.Credit) as precredit');
                $this->db->from('acc_transaction');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('acc_transaction.COAID',$singl_rcv['HeadCode']);
                $rcvquery     = $this->db->get()->row();
                $sreceive_bal = $rcvquery->predebit - $rcvquery->precredit;
                $single_balance += (!empty($sreceive_bal)?$sreceive_bal:0);
        }



              $bank_balance = 0;
              $cash_balance = 0;
              $coa = $this->db->select('HeadCode')->from('acc_coa')->where('PHeadName','Cash At Bank')->get()->result_array();
              foreach($coa as $assetcoa){
                $this->db->select('sum(acc_transaction.Debit) as predebit, sum(acc_transaction.Credit) as precredit');
                $this->db->from('acc_transaction');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('acc_transaction.COAID',$assetcoa['HeadCode']);
                $query    = $this->db->get()->row();
                $bank_bal = $query->predebit - $query->precredit;
                $bank_balance += (!empty($bank_bal)?$bank_bal:0);
        }

                $cash_other = $this->db->select('HeadCode')->from('acc_coa')->where('PHeadName','Cash & Cash Equivalent')->get()->result_array();
          foreach($cash_other as $cashother){
                $this->db->select('sum(acc_transaction.Debit) as predebit, sum(acc_transaction.Credit) as precredit');
                $this->db->from('acc_transaction');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('acc_transaction.COAID',$cashother['HeadCode']);
                $query    = $this->db->get()->row();
                $cash_bal = $query->predebit - $query->precredit;
                $cash_balance += (!empty($cash_bal)?$cash_bal:0);
        }

               $balance = $bank_balance + $cash_balance;
               return $balance = $asset_balance + $loan_balance + $single_balance + $bank_balance + $cash_balance;

       

    }

    public function total_non_current_asset_balance(){
                $total = 0;
                $coa = $this->db->select('HeadCode')->from('acc_coa')->where('PHeadName','Non Current Assets')->get()->result_array();
              foreach($coa as $assetcoa){
                $this->db->select('sum(acc_transaction.Debit) as predebit, sum(acc_transaction.Credit) as precredit');
                $this->db->from('acc_transaction');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('acc_transaction.COAID',$assetcoa['HeadCode']);
                $query   = $this->db->get()->row();
                $balance = $query->predebit - $query->precredit;
                $total += (!empty($balance)?$balance:0);
        }
        return $total;
    }

    public function total_equity_balance(){
                $total = 0;
                $coa = $this->db->select('HeadCode')->from('acc_coa')->where('PHeadName','Equity')->get()->result_array();
              foreach($coa as $assetcoa){
                $this->db->select('sum(acc_transaction.Debit) as predebit, sum(acc_transaction.Credit) as precredit');
                $this->db->from('acc_transaction');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('acc_transaction.COAID',$assetcoa['HeadCode']);
                $query   = $this->db->get()->row();
                $balance = $query->predebit - $query->precredit;
                $total += (!empty($balance)?$balance:0);
        }
        return $total;
    }

     public function total_expense_balance(){
                $total = 0;
                $coa = $this->db->select('HeadCode')->from('acc_coa')->where('PHeadName','Expence')->get()->result_array();
              foreach($coa as $assetcoa){
                $this->db->select('sum(acc_transaction.Debit) as predebit, sum(acc_transaction.Credit) as precredit');
                $this->db->from('acc_transaction');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('acc_transaction.COAID',$assetcoa['HeadCode']);
                $query   = $this->db->get()->row();
                $balance = $query->predebit - $query->precredit;
                $total += (!empty($balance)?$balance:0);
        }
        return $total;
     }

     public function total_income_balance(){
                $total = 0;
                $coa = $this->db->select('HeadCode')->from('acc_coa')->where('PHeadName','Income')->get()->result_array();
              foreach($coa as $assetcoa){
                $this->db->select('sum(acc_transaction.Debit) as predebit, sum(acc_transaction.Credit) as precredit');
                $this->db->from('acc_transaction');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('acc_transaction.COAID',$assetcoa['HeadCode']);
                $query   = $this->db->get()->row();
                $balance = $query->predebit - $query->precredit;
                $total += (!empty($balance)?$balance:0);
        }
        return $total;
     }

     public function total_acc_payable_balance(){
                $total = 0;
                $coa = $this->db->select('HeadCode')->from('acc_coa')->where('PHeadName','Account Payable')->get()->result_array();
              foreach($coa as $assetcoa){
                $this->db->select('sum(acc_transaction.Debit) as predebit, sum(acc_transaction.Credit) as precredit');
                $this->db->from('acc_transaction');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('acc_transaction.COAID',$assetcoa['HeadCode']);
                $query   = $this->db->get()->row();
                $balance = $query->predebit - $query->precredit;
                $total += (!empty($balance)?$balance:0);
        }
        return $total;
     }

     public function total_acc_employee_balance(){
                $total = 0;
                $coa = $this->db->select('HeadCode')->from('acc_coa')->where('PHeadName','Employee Ledger')->get()->result_array();
              foreach($coa as $assetcoa){
                $this->db->select('sum(acc_transaction.Debit) as predebit, sum(acc_transaction.Credit) as precredit');
                $this->db->from('acc_transaction');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('acc_transaction.COAID',$assetcoa['HeadCode']);
                $query   = $this->db->get()->row();
                $balance = $query->predebit - $query->precredit;
                $total += (!empty($balance)?$balance:0);
        }
        return $total;
     }

     public function total_acc_cruliabilities_balance(){
                $total = 0;
                $coa = $this->db->select('HeadCode')->from('acc_coa')->where('PHeadName','Current Liabilities')->get()->result_array();
              foreach($coa as $assetcoa){
                $this->db->select('sum(acc_transaction.Debit) as predebit, sum(acc_transaction.Credit) as precredit');
                $this->db->from('acc_transaction');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('acc_transaction.COAID',$assetcoa['HeadCode']);
                $query   = $this->db->get()->row();
                $balance = $query->predebit - $query->precredit;
                $total += (!empty($balance)?$balance:0);
        }
        return $total;
     }

        public function total_acc_no_curliability_balance(){
                $total = 0;
                $coa = $this->db->select('HeadCode')->from('acc_coa')->where('PHeadName','Non Current Liabilities')->get()->result_array();
              foreach($coa as $assetcoa){
                $this->db->select('sum(acc_transaction.Debit) as predebit, sum(acc_transaction.Credit) as precredit');
                $this->db->from('acc_transaction');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('acc_transaction.COAID',$assetcoa['HeadCode']);
                $query   = $this->db->get()->row();
                $balance = $query->predebit - $query->precredit;
                $total += (!empty($balance)?$balance:0);
        }
        return $total;
        }

    public function opening_coa_balance($head,$HeadName){
                $this->db->select('sum(acc_transaction.Debit) as predebit, sum(acc_transaction.Credit) as precredit');
                $this->db->from('acc_transaction');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('acc_transaction.is_opening',1);
                $this->db->where('acc_transaction.COAID',$head);
                $query   = $this->db->get()->row();
                $ass_bal = $query->predebit - $query->precredit;
                $balance = $ass_bal;
                if($HeadName == 'Customer Receivable'){
                $balance = $this->customer_rec_opening();
                 }
                 if($HeadName == 'Loan Receivable'){
                $balance          = $this->loan_rec_opening();
                 }
                if($HeadName == 'Account Receivable'){
                $root_balance     = $this->account_rec_opening();
                $customer_balance = $this->customer_rec_opening();
                $loan_balance     = $this->loan_rec_opening();
                $balance          = $root_balance + $customer_balance + $loan_balance;
                 }
                 if($HeadName == 'Cash At Bank'){
                $balance = $this->bank_opening();
                 }
                if($HeadName == 'Cash & Cash Equivalent'){
                 $balance = $this->cash_equivalent_opening();
                 }
                 if($HeadName == 'Current Asset'){
                 $cash_equivalent_balance = $this->cash_equivalent_opening();
                 $root_balance            = $this->account_rec_opening();
                 $customer_balance        = $this->customer_rec_opening();
                 $loan_balance            = $this->loan_rec_opening();
                 $balance                 = $root_balance + $customer_balance + $loan_balance + $cash_equivalent_balance;
                 }

                  if($HeadName == 'Non Current Assets'){
                  $balance = $this->non_current_ass_opening();
                  }
                  if($HeadName == 'Assets'){
                  $non_curopen = $this->non_current_ass_opening();
                  $cash_equivalent_balance = $this->cash_equivalent_opening();
                  $root_balance            = $this->account_rec_opening();
                  $customer_balance        = $this->customer_rec_opening();
                  $loan_balance            = $this->loan_rec_opening();
                  $balance                 = $root_balance + $customer_balance + $loan_balance + $cash_equivalent_balance + $non_curopen;
                  }

                  if($HeadName == 'Equity'){
                  $balance = $this->equity_opening();
                  }

                  if($HeadName == 'Expence'){
                  $balance = $this->expense_opening();
                  }

                  if($HeadName == 'Income'){
                  $balance = $this->income_opening();
                  }
                  if($HeadName == 'Account Payable'){
                  $balance = $this->acc_payable_opening();
                  }

                  if($HeadName == 'Employee Ledger'){
                  $balance = $this->acc_employeeledger_opening();
                  }

                  if($HeadName == 'Current Liabilities'){
                  $cur_balance     = $this->acc_curliabilities_opening();
                  $paya_balance    = $this->acc_payable_opening();
                  $employe_balance = $this->acc_employeeledger_opening();
                  $balance         = $cur_balance + $paya_balance + $employe_balance;
                  }

                  if($HeadName == 'Non Current Liabilities'){
                  $balance = $this->acc_non_curliabilities_opening();
                  }

                  if($HeadName == 'Liabilities'){
                  $non_balance     = $this->acc_non_curliabilities_opening();
                  $cur_balance     = $this->acc_curliabilities_opening();
                  $paya_balance    = $this->acc_payable_opening();
                  $employe_balance = $this->acc_employeeledger_opening();
                  $balance         = $cur_balance + $paya_balance + $employe_balance + $non_balance;
                  }

                  

                return (!empty($balance)?number_format($balance,2):number_format(0,2));
    }

    public function customer_rec_opening(){
              $total = 0;
              $coa = $this->db->select('HeadCode')->from('acc_coa')->where('PHeadName','Loan Receivable')->get()->result_array();
              foreach($coa as $assetcoa){
                $this->db->select('sum(acc_transaction.Debit) as predebit, sum(acc_transaction.Credit) as precredit');
                $this->db->from('acc_transaction');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('acc_transaction.is_opening',1);
                $this->db->where('acc_transaction.COAID',$assetcoa['HeadCode']);
                $query    = $this->db->get()->row();
                $cust_bal = $query->predebit - $query->precredit;
                $total += $cust_bal;
              }
              return $total;
    }

    public function loan_rec_opening(){
              $total = 0;
              $coa = $this->db->select('HeadCode')->from('acc_coa')->where('PHeadName','Customer Receivable')->get()->result_array();
              foreach($coa as $assetcoa){
            $this->db->select('sum(acc_transaction.Debit) as predebit, sum(acc_transaction.Credit) as precredit');
                $this->db->from('acc_transaction');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('acc_transaction.is_opening',1);
                $this->db->where('acc_transaction.COAID',$assetcoa['HeadCode']);
                $query   = $this->db->get()->row();
                $cust_bal = $query->predebit - $query->precredit;
                $total += $cust_bal;
              }
              return $total;
    }
     public function account_rec_opening(){
              $total = 0;
              $coa = $this->db->select('HeadCode')->from('acc_coa')->where('PHeadName','Account Receivable')->get()->result_array();
              foreach($coa as $assetcoa){
            $this->db->select('sum(acc_transaction.Debit) as predebit, sum(acc_transaction.Credit) as precredit');
                $this->db->from('acc_transaction');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('acc_transaction.is_opening',1);
                $this->db->where('acc_transaction.COAID',$assetcoa['HeadCode']);
                $query   = $this->db->get()->row();
                $cust_bal = $query->predebit - $query->precredit;
                $total += $cust_bal;
              }
              return $total;
     }

     public function bank_opening(){
                $total = 0;
                $coa = $this->db->select('HeadCode')->from('acc_coa')->where('PHeadName','Cash At Bank')->get()->result_array();
              foreach($coa as $assetcoa){
                $this->db->select('sum(acc_transaction.Debit) as predebit, sum(acc_transaction.Credit) as precredit');
                $this->db->from('acc_transaction');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('acc_transaction.is_opening',1);
                $this->db->where('acc_transaction.COAID',$assetcoa['HeadCode']);
                $query   = $this->db->get()->row();
                $cust_bal = $query->predebit - $query->precredit;
                $total += $cust_bal;
              }
              return $total;
     }

      public function cash_equivalent_opening(){
              $total = 0;
              $coa = $this->db->select('HeadCode')->from('acc_coa')->where('PHeadName','Cash & Cash Equivalent')->get()->result_array();
              foreach($coa as $assetcoa){
            $this->db->select('sum(acc_transaction.Debit) as predebit, sum(acc_transaction.Credit) as precredit');
                $this->db->from('acc_transaction');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('acc_transaction.is_opening',1);
                $this->db->where('acc_transaction.COAID',$assetcoa['HeadCode']);
                $query    = $this->db->get()->row();
                $cust_bal = $query->predebit - $query->precredit;
                $total += $cust_bal;
              }
              return $total;
      }

      public function non_current_ass_opening(){
                $total = 0;
                $coa = $this->db->select('HeadCode')->from('acc_coa')->where('PHeadName','Non Current Assets')->get()->result_array();
              foreach($coa as $assetcoa){
                $this->db->select('sum(acc_transaction.Debit) as predebit, sum(acc_transaction.Credit) as precredit');
                $this->db->from('acc_transaction');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('acc_transaction.is_opening',1);
                $this->db->where('acc_transaction.COAID',$assetcoa['HeadCode']);
                $query    = $this->db->get()->row();
                $cust_bal = $query->predebit - $query->precredit;
                $total += $cust_bal;
              }
              return $total;
      }

       public function equity_opening(){
               $total = 0;
               $coa = $this->db->select('HeadCode')->from('acc_coa')->where('PHeadName','Equity')->get()->result_array();
              foreach($coa as $assetcoa){
                $this->db->select('sum(acc_transaction.Debit) as predebit, sum(acc_transaction.Credit) as precredit');
                $this->db->from('acc_transaction');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('acc_transaction.is_opening',1);
                $this->db->where('acc_transaction.COAID',$assetcoa['HeadCode']);
                $query    = $this->db->get()->row();
                $cust_bal = $query->predebit - $query->precredit;
                $total += $cust_bal;
              }
              return $total;
       }

       public function expense_opening(){
                $total = 0;
                $coa   = $this->db->select('HeadCode')->from('acc_coa')->where('PHeadName','Expence')->get()->result_array();
              foreach($coa as $assetcoa){
                $this->db->select('sum(acc_transaction.Debit) as predebit, sum(acc_transaction.Credit) as precredit');
                $this->db->from('acc_transaction');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('acc_transaction.is_opening',1);
                $this->db->where('acc_transaction.COAID',$assetcoa['HeadCode']);
                $query   = $this->db->get()->row();
                $cust_bal = $query->predebit - $query->precredit;
                $total += $cust_bal;
              }
              return $total;
       }

       public function income_opening(){
               $total = 0;
               $coa   = $this->db->select('HeadCode')->from('acc_coa')->where('PHeadName','Income')->get()->result_array();
              foreach($coa as $assetcoa){
               $this->db->select('sum(acc_transaction.Debit) as predebit, sum(acc_transaction.Credit) as precredit');
                $this->db->from('acc_transaction');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('acc_transaction.is_opening',1);
                $this->db->where('acc_transaction.COAID',$assetcoa['HeadCode']);
                $query    = $this->db->get()->row();
                $cust_bal = $query->predebit - $query->precredit;
                $total += $cust_bal;
              }
              return $total;
       }
         public function acc_payable_opening(){
               $total = 0;
               $coa   = $this->db->select('HeadCode')->from('acc_coa')->where('PHeadName','Account Payable')->get()->result_array();
              foreach($coa as $assetcoa){
                $this->db->select('sum(acc_transaction.Debit) as predebit, sum(acc_transaction.Credit) as precredit');
                $this->db->from('acc_transaction');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('acc_transaction.is_opening',1);
                $this->db->where('acc_transaction.COAID',$assetcoa['HeadCode']);
                $query   = $this->db->get()->row();
                $cust_bal = $query->predebit - $query->precredit;
                $total += $cust_bal;
              }
              return $total;
       }

       public function acc_employeeledger_opening(){
               $total = 0;
               $coa  = $this->db->select('HeadCode')->from('acc_coa')->where('PHeadName','Employee Ledger')->get()->result_array();
              foreach($coa as $assetcoa){
                $this->db->select('sum(acc_transaction.Debit) as predebit, sum(acc_transaction.Credit) as precredit');
                $this->db->from('acc_transaction');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('acc_transaction.is_opening',1);
                $this->db->where('acc_transaction.COAID',$assetcoa['HeadCode']);
                $query   = $this->db->get()->row();
                $cust_bal = $query->predebit - $query->precredit;
                $total += $cust_bal;
              }
              return $total;
       }

        public function acc_curliabilities_opening(){
               $total = 0;
               $coa   = $this->db->select('HeadCode')->from('acc_coa')->where('PHeadName','Current Liabilities')->get()->result_array();
              foreach($coa as $assetcoa){
                $this->db->select('sum(acc_transaction.Debit) as predebit, sum(acc_transaction.Credit) as precredit');
                $this->db->from('acc_transaction');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('acc_transaction.is_opening',1);
                $this->db->where('acc_transaction.COAID',$assetcoa['HeadCode']);
                $query    = $this->db->get()->row();
                $cust_bal = $query->predebit - $query->precredit;
                $total += $cust_bal;
              }
              return $total;
       }
       
      public function acc_non_curliabilities_opening(){
               $total = 0;
               $coa   = $this->db->select('HeadCode')->from('acc_coa')->where('PHeadName','Non Current Liabilities')->get()->result_array();
              foreach($coa as $assetcoa){
                $this->db->select('sum(acc_transaction.Debit) as predebit, sum(acc_transaction.Credit) as precredit');
                $this->db->from('acc_transaction');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('acc_transaction.is_opening',1);
                $this->db->where('acc_transaction.COAID',$assetcoa['HeadCode']);
                $query    = $this->db->get()->row();
                $cust_bal = $query->predebit - $query->precredit;
                $total += $cust_bal;
              }
              return $total;
      }

       public function treeview_selectform($id){
     $data = $this->db->select('*')
            ->from('acc_coa')
            ->where('HeadCode',$id)
            ->get()
            ->row();
            return $data;

    }

         public function get_supplier(){
        $this->db->select('*');
        $this->db->from('supplier_information');
        $this->db->where('status',1);
        $this->db->order_by('supplier_id', 'desc');
        $query = $this->db->get();
        return $query->result();  
    }
    // Customer list
    public function get_customer(){
        $this->db->select('*');
        $this->db->from('customer_information');
        $query = $this->db->get();
        return $query->result();  
    }

    public function Spayment()
    {
      return  $data = $this->db->select("VNo as voucher")
            ->from('acc_transaction') 
            ->like('VNo', 'PM-', 'after')
            ->order_by('ID','desc')
            ->get()
            ->result_array();
           
    }


         public function supplier_payment_insert(){

       $bank_id = $this->input->post('bank_id',TRUE);
        if(!empty($bank_id)){
         $bankname     = $this->db->select('bank_name')->from('bank_add')->where('bank_id',$bank_id)->get()->row()->bank_name;
         $bankcoaid    = $this->db->select('HeadCode')->from('acc_coa')->where('HeadName',$bankname)->get()->row()->HeadCode;
           }else{
            $bankcoaid = '';
           }
           $voucher_no = addslashes(trim($this->input->post('txtVNo',TRUE)));
            $Vtype     = "PM";
            $cAID      = $this->input->post('cmbDebit',TRUE);
            $dAID      = $this->input->post('txtCode',TRUE);
            $Debit     = $this->input->post('txtAmount',TRUE);
            $Credit    = 0;
            $VDate     = $this->input->post('dtpDate',TRUE);
            $Narration = addslashes(trim($this->input->post('txtRemarks',TRUE)));
            $IsPosted  = 1;
            $IsAppove  = 1;
            $sup_id    = $this->input->post('supplier_id',TRUE);

            $CreateBy  = $this->session->userdata('id');
            $createdate= date('Y-m-d H:i:s');
            $dbtid     = $dAID;
            $Damnt     = $Debit;
            $supplier_id = $sup_id;
            $supinfo   = $this->db->select('*')->from('supplier_information')->where('supplier_id',$supplier_id)->get()->row();
                    $supplierdebit = array(
              'VNo'            =>  $voucher_no,
              'Vtype'          =>  $Vtype,
              'VDate'          =>  $VDate,
              'COAID'          =>  $dbtid,
              'Narration'      =>  $Narration,
              'Debit'          =>  $Damnt,
              'Credit'         =>  0,
              'IsPosted'       => $IsPosted,
              'CreateBy'       => $CreateBy,
              'CreateDate'     => $createdate,
              'IsAppove'       => 1
            ); 
             $cc = array(
              'VNo'            =>  $voucher_no,
              'Vtype'          =>  $Vtype,
              'VDate'          =>  $VDate,
              'COAID'          =>  1020101,
              'Narration'      =>  'Paid to '.$supinfo->supplier_name,
              'Debit'          =>  0,
              'Credit'         =>  $Damnt,
              'IsPosted'       =>  1,
              'CreateBy'       =>  $CreateBy,
              'CreateDate'     =>  $createdate,
              'IsAppove'       =>  1
            ); 
             $bankc = array(
              'VNo'            =>  $voucher_no,
              'Vtype'          =>  $Vtype,
              'VDate'          =>  $VDate,
              'COAID'          =>  $bankcoaid,
              'Narration'      =>  'Supplier Payment To '.$supinfo->supplier_name,
              'Debit'          =>  0,
              'Credit'         =>  $Damnt,
              'IsPosted'       =>  1,
              'CreateBy'       =>  $CreateBy,
              'CreateDate'     =>  $createdate,
              'IsAppove'       =>  1
            ); 
              

           
              $this->db->insert('acc_transaction',$supplierdebit);

              if($this->input->post('paytype',TRUE) == 2){
                 $this->db->insert('acc_transaction',$bankc); 
              }
                if($this->input->post('paytype',TRUE) == 1){
                   $this->db->insert('acc_transaction',$cc);
                }
 $this->session->set_flashdata('message', display('save_successfully'));
          redirect('supplier_payment_received/'.$supplier_id.'/'.$voucher_no.'/'.$dbtid);
    
}

public function supplierinfo($supplier_id){
  return $this->db->select('*')
                  ->from('supplier_information')
                  ->where('supplier_id',$supplier_id)
                  ->get()
                  ->result_array();
}

public function supplierpaymentinfo($voucher_no,$coaid){
  return  $result =  $this->db->select('*')
                  ->from('acc_transaction')
                  ->where('VNo',$voucher_no)
                  ->where('COAID',$coaid)
                  ->get()
                  ->result_array();
               

}


// customer code
     public function Creceive()
    {
      return  $data = $this->db->select("VNo as voucher")
            ->from('acc_transaction') 
            ->like('VNo', 'CR-', 'after')
            ->order_by('ID','desc')
            ->get()
            ->result_array();
           
    }


    public function bankbook_firstqury($FromDate,$HeadCode){

  $sql = "SELECT SUM(Debit) Debit, SUM(Credit) Credit, IsAppove, COAID FROM acc_transaction
              WHERE VDate < '$FromDate 00:00:00' AND COAID = '$HeadCode' AND IsAppove =1 GROUP BY IsAppove, COAID";
              return  $sql;

}

public function bankbook_secondqury($FromDate,$HeadCode,$ToDate){
  $sql = "SELECT acc_transaction.VNo, acc_transaction.Vtype, acc_transaction.VDate, acc_transaction.Debit, acc_transaction.Credit, acc_transaction.IsAppove, acc_transaction.COAID, acc_coa.HeadName, acc_coa.PHeadName, acc_coa.HeadType, acc_transaction.Narration 
     FROM acc_transaction INNER JOIN acc_coa ON acc_transaction.COAID = acc_coa.HeadCode
         WHERE acc_transaction.IsAppove =1 AND VDate BETWEEN '$FromDate 00:00:00' AND '$ToDate 00:00:00' AND acc_transaction.COAID='$HeadCode' ORDER BY  acc_transaction.VDate, acc_transaction.VNo";

         return $sql;
}

         public function customer_receive_insert(){

       $bank_id   = $this->input->post('bank_id',TRUE);
        if(!empty($bank_id)){
       $bankname  = $this->db->select('bank_name')->from('bank_add')->where('bank_id',$bank_id)->get()->row()->bank_name;
    
       $bankcoaid = $this->db->select('HeadCode')->from('acc_coa')->where('HeadName',$bankname)->get()->row()->HeadCode;
   }else{
    $bankcoaid='';
   }

           $voucher_no       = addslashes(trim($this->input->post('txtVNo',TRUE)));
            $Vtype           = "CR";
            $cAID            = $this->input->post('cmbDebit',TRUE);
            $dAID            = $this->input->post('txtCode',TRUE);
            $Debit           = 0;
            $Credit          = $this->input->post('txtAmount',TRUE);
            $VDate           = $this->input->post('dtpDate',TRUE);
            $customer_id     = $this->input->post('customer_id',TRUE);
            $Narration       = addslashes(trim($this->input->post('txtRemarks',TRUE)));
            $IsPosted=1;
            $IsAppove=1;
            $CreateBy        = $this->session->userdata('id');
            $createdate      = date('Y-m-d H:i:s');
            $dbtid           = $dAID;
            $Credit          = $Credit;
            $customerid      = $customer_id;
             $customerinfo = $this->db->select('*')->from('customer_information')->where('customer_id',$customerid)->get()->row();
            $customercredit = array(
      'VNo'            =>  $voucher_no,
      'Vtype'          =>  $Vtype,
      'VDate'          =>  $VDate,
      'COAID'          =>  $dbtid,
      'Narration'      =>  $Narration,
      'Debit'          =>  0,
      'Credit'         =>  $Credit,
      'IsPosted'       => $IsPosted,
      'CreateBy'       => $CreateBy,
      'CreateDate'     => $createdate,
      'IsAppove'       => 1
    ); 
           
             $cc = array(
      'VNo'            =>  $voucher_no,
      'Vtype'          =>  $Vtype,
      'VDate'          =>  $createdate,
      'COAID'          =>  1020101,
      'Narration'      =>  'Cash in Hand For  '.$customerinfo->customer_name,
      'Debit'          =>  $Credit,
      'Credit'         =>  0,
      'IsPosted'       =>  1,
      'CreateBy'       =>  $CreateBy,
      'CreateDate'     =>  $createdate,
      'IsAppove'       =>  1
    ); 
       $bankc = array(
      'VNo'            =>  $voucher_no,
      'Vtype'          =>  $Vtype,
      'VDate'          =>  $createdate,
      'COAID'          =>  $bankcoaid,
      'Narration'      =>  'Customer Receive From '.$customerinfo->customer_name,
      'Debit'          =>  $Credit,
      'Credit'         =>  0,
      'IsPosted'       =>  1,
      'CreateBy'       =>  $CreateBy,
      'CreateDate'     =>  $createdate,
      'IsAppove'       =>  1
    ); 
       

            
          
              $this->db->insert('acc_transaction',$customercredit);
              if($this->input->post('paytype',TRUE) == 2){
                 $this->db->insert('acc_transaction',$bankc);
                
              }
                if($this->input->post('paytype',TRUE) == 1){
                   $this->db->insert('acc_transaction',$cc);
                }
             
               $message = 'Mr.'.$customerinfo->customer_name.',
        '.'You have Paid '.$Credit.' '.$currency_details[0]['currency'];
      
      $config_data = $this->db->select('*')->from('sms_settings')->get()->row();
        if($config_data->isreceive == 1){
          $this->smsgateway->send([
            'apiProvider' => 'nexmo',
            'username'    => $config_data->api_key,
            'password'    => $config_data->api_secret,
            'from'        => $config_data->from,
            'to'          => $customerinfo->customer_mobile,
            'message'     => $message
        ]);
      }
    
    $this->session->set_flashdata('message', display('save_successfully'));
          redirect('customer_payment_receipt/'.$customerid.'/'.$voucher_no.'/'.$dbtid);
        }

     public function custoinfo($customer_id){
      return $this->db->select('*')
                  ->from('customer_information')
                  ->where('customer_id',$customer_id)
                  ->get()
                  ->result_array();
}

  public function customerreceiptinfo($voucher_no,$coaid){
  return   $this->db->select('*')
                  ->from('acc_transaction')
                  ->where('VNo',$voucher_no)
                  ->where('COAID',$coaid)
                  ->get()
                  ->result_array();

}

      public function Cashvoucher()
    {
      return  $data = $this->db->select("VNo as voucher")
            ->from('acc_transaction') 
            ->like('VNo', 'CHV-', 'after')
            ->order_by('ID','desc')
            ->get()
            ->result_array();
           
    }

    public function insert_cashadjustment(){
           $voucher_no       = $this->input->post('txtVNo',TRUE);
            $Vtype           = "AD";
            $amount          = $this->input->post('txtAmount',TRUE);
            $type            = $this->input->post('type',TRUE);
            if($type == 1){
              $debit  = $amount;
              $credit = 0;
            }
            if($type == 2){
              $debit  = 0;
              $credit = $amount;
            }
            $VDate     = $this->input->post('dtpDate',TRUE);
            $Narration = $this->input->post('txtRemarks',TRUE);
            $IsPosted  = 1;
            $IsAppove  = 1;
            $CreateBy  = $this->session->userdata('id');
           $createdate = date('Y-m-d H:i:s');
 
     $cc = array(
      'VNo'            =>  $voucher_no,
      'Vtype'          =>  $Vtype,
      'VDate'          =>  $VDate,
      'COAID'          =>  1020101,
      'Narration'      =>  $Narration,
      'Debit'          =>  $debit,
      'Credit'         =>  $credit,
      'IsPosted'       =>  1,
      'CreateBy'       =>  $CreateBy,
      'CreateDate'     =>  $createdate,
      'IsAppove'       =>  1
    ); 

              $this->db->insert('acc_transaction',$cc);
          
 return true;

}

    public function Transacc()
    {
      return  $data = $this->db->select("*")
            ->from('acc_coa')
            ->where('IsTransaction', 1)  
            ->where('IsActive', 1) 
            ->order_by('HeadName')
            ->get()
            ->result();
    }


    public function voNO()
    {
      return  $data = $this->db->select("VNo as voucher")
            ->from('acc_transaction') 
            ->like('VNo', 'DV-', 'after')
            ->order_by('ID','desc')
            ->limit(1)
            ->get()
            ->result_array();
          
    }

      public function Cracc()
    {
      return  $data = $this->db->select("*")
            ->from('acc_coa') 
            ->like('HeadCode',1020102, 'after')
            ->where('IsTransaction', 1) 
            ->order_by('HeadName')
            ->get()
            ->result();
    }

        // Insert Debit voucher 
    public function insert_debitvoucher(){
           $voucher_no = addslashes(trim($this->input->post('txtVNo',TRUE)));
            $Vtype     = "DV";
            $cAID      = $this->input->post('cmbDebit',TRUE);
            $dAID      = $this->input->post('txtCode',TRUE);
            $Debit     = $this->input->post('txtAmount',TRUE);
            $Credit    = $this->input->post('grand_total',TRUE);
            $VDate     = $this->input->post('dtpDate',TRUE);
            $Narration = addslashes(trim($this->input->post('txtRemarks',TRUE)));
            $IsPosted  = 1;
            $IsAppove  = 0;
            $CreateBy  = $this->session->userdata('id');
           $createdate = date('Y-m-d H:i:s');
           
            for ($i=0; $i < count($dAID); $i++) {
                $dbtid=$dAID[$i];
                $Damnt=$Debit[$i];

     $debitheadinfo = $this->db->select('*')->from('acc_coa')->where('HeadCode',$dbtid)->get()->row();  
     
                $debitinsert = array(
          'VNo'            =>  $voucher_no,
          'Vtype'          =>  $Vtype,
          'VDate'          =>  $VDate,
          'COAID'          =>  $dbtid,
          'Narration'      =>  $Narration,
          'Debit'          =>  $Damnt,
          'Credit'         =>  0,
          'IsPosted'       => $IsPosted,
          'CreateBy'       => $CreateBy,
          'CreateDate'     => $createdate,
          'IsAppove'       => 0
        ); 
           
              $this->db->insert('acc_transaction',$debitinsert);
              $headinfo = $this->db->select('*')->from('acc_coa')->where('HeadCode',$cAID)->get()->row(); 
              
          $cinsert = array(
            'VNo'            =>  $voucher_no,
            'Vtype'          =>  $Vtype,
            'VDate'          =>  $VDate,
            'COAID'          =>  $cAID,
            'Narration'      =>  'Debit voucher from '.$headinfo->HeadName,
            'Debit'          =>  0,
            'Credit'         =>  $Damnt,
            'IsPosted'       => $IsPosted,
            'CreateBy'       => $CreateBy,
            'CreateDate'     => $createdate,
            'IsAppove'       => 0
          ); 
        
             $this->db->insert('acc_transaction',$cinsert);

    }
    return true;
}

      // Credit voucher no
    public function crVno()
    {
      return  $data = $this->db->select("VNo as voucher")
            ->from('acc_transaction') 
            ->like('VNo', 'CV-', 'after')
            ->order_by('ID','desc')
            ->limit(1)
            ->get()
            ->result_array();
          
    }


      // Insert Credit voucher 
    public function insert_creditvoucher(){
           $voucher_no = addslashes(trim($this->input->post('txtVNo',TRUE)));
            $Vtype     = "CV";
            $dAID      = $this->input->post('cmbDebit',TRUE);
            $cAID      = $this->input->post('txtCode',TRUE);
            $Credit    = $this->input->post('txtAmount',TRUE);
            $debit     = $this->input->post('grand_total',TRUE);
            $VDate     = $this->input->post('dtpDate',TRUE);
            $Narration = addslashes(trim($this->input->post('txtRemarks',TRUE)));
            $IsPosted  = 1;
            $IsAppove  = 0;
            $CreateBy  = $this->session->userdata('id');
           $createdate = date('Y-m-d H:i:s');

            
            for ($i=0; $i < count($cAID); $i++) {
                $crtid = $cAID[$i];
                $Cramnt= $Credit[$i];

        $debitheadinfo = $this->db->select('*')->from('acc_coa')->where('HeadCode',$crtid)->get()->row();  
           
            $debitinsert = array(
      'VNo'            =>  $voucher_no,
      'Vtype'          =>  $Vtype,
      'VDate'          =>  $VDate,
      'COAID'          =>  $crtid,
      'Narration'      =>  $Narration,
      'Debit'          =>  0,
      'Credit'         =>  $Cramnt,
      'IsPosted'       => $IsPosted,
      'CreateBy'       => $CreateBy,
      'CreateDate'     => $createdate,
      'IsAppove'       => 0
    ); 
          
              $this->db->insert('acc_transaction',$debitinsert);

    $headinfo = $this->db->select('*')->from('acc_coa')->where('HeadCode',$dAID)->get()->row();
    
      $cinsert = array(
      'VNo'            =>  $voucher_no,
      'Vtype'          =>  $Vtype,
      'VDate'          =>  $VDate,
      'COAID'          =>  $dAID,
      'Narration'      =>  'Credit Vourcher from '.$headinfo->HeadName,
      'Debit'          =>  $Cramnt,
      'Credit'         =>  0,
      'IsPosted'       => $IsPosted,
      'CreateBy'       => $CreateBy,
      'CreateDate'     => $createdate,
      'IsAppove'       => 0
    ); 

       $this->db->insert('acc_transaction',$cinsert);


       $headinfo = $this->db->select('*')->from('acc_coa')->where('HeadCode',$dAID)->get()->row();


    }
    return true;
}


 // Contra voucher 

    public function contra()
    {
      return  $data = $this->db->select("Max(VNo) as voucher")
            ->from('acc_transaction') 
            ->like('VNo', 'Contra-', 'after')
            ->order_by('ID','desc')
            ->get()
            ->result_array();
           
    }

    // Insert Countra voucher 
    public function insert_contravoucher(){
           $voucher_no = addslashes(trim($this->input->post('txtVNo',TRUE)));
            $Vtype     = "Contra";
            $dAID      = $this->input->post('cmbDebit',TRUE);
            $cAID      = $this->input->post('txtCode',TRUE);
            $debit     = $this->input->post('txtAmount',TRUE);
            $credit    = $this->input->post('txtAmountcr',TRUE);
            $VDate     = $this->input->post('dtpDate',TRUE);
            $Narration = addslashes(trim($this->input->post('txtRemarks',TRUE)));
            $IsPosted  = 1;
            $IsAppove  = 0;
            $CreateBy  = $this->session->userdata('id');
           $createdate = date('Y-m-d H:i:s');

            for ($i=0; $i < count($cAID); $i++) {
                $crtid = $cAID[$i];
                $Cramnt= $credit[$i];
                $debits= $debit[$i]; 
           
                $contrainsert = array(
          'VNo'            =>  $voucher_no,
          'Vtype'          =>  $Vtype,
          'VDate'          =>  $VDate,
          'COAID'          =>  $crtid,
          'Narration'      =>  $Narration,
          'Debit'          =>  $debits,
          'Credit'         =>  $Cramnt,
          'IsPosted'       => $IsPosted,
          'CreateBy'       => $CreateBy,
          'CreateDate'     => $createdate,
          'IsAppove'       => 0
        ); 
          
              $this->db->insert('acc_transaction',$contrainsert);

    }
    return true;
}


// journal voucher no
public function journal()
    {
      return  $data = $this->db->select("Max(VNo) as voucher")
            ->from('acc_transaction') 
            ->like('VNo', 'Journal-', 'after')
            ->order_by('ID','desc')
            ->get()
            ->result_array();
           
    }


    // Insert journal voucher 
    public function insert_journalvoucher(){
           $voucher_no = addslashes(trim($this->input->post('txtVNo',TRUE)));
            $Vtype     = "JV";
            $dAID      = $this->input->post('cmbDebit',TRUE);
            $cAID      = $this->input->post('txtCode',TRUE);
            $debit     = $this->input->post('txtAmount',TRUE);
            $credit    = $this->input->post('txtAmountcr',TRUE);
            $VDate     = $this->input->post('dtpDate',TRUE);
            $Narration = addslashes(trim($this->input->post('txtRemarks',TRUE)));
            $IsPosted  = 1;
            $IsAppove  = 0;
            $CreateBy  = $this->session->userdata('id');
           $createdate = date('Y-m-d H:i:s');

            for ($i=0; $i < count($cAID); $i++) {
                $crtid = $cAID[$i];
                $Cramnt= $credit[$i];
                $debits= $debit[$i]; 
           
                $contrainsert = array(
          'VNo'            =>  $voucher_no,
          'Vtype'          =>  $Vtype,
          'VDate'          =>  $VDate,
          'COAID'          =>  $crtid,
          'Narration'      =>  $Narration,
          'Debit'          =>  $debits,
          'Credit'         =>  $Cramnt,
          'IsPosted'       => $IsPosted,
          'CreateBy'       => $CreateBy,
          'CreateDate'     => $createdate,
          'IsAppove'       => 0
        ); 
           
              $this->db->insert('acc_transaction',$contrainsert);

    }
    return true;
}


    // voucher Aprove 
    public function approve_voucher(){
        $values = array("DV", "CV", "JV","Contra");
       return $approveinfo = $this->db->select('*,sum(Credit) as Credit,sum(Debit) as Debit')
                               ->from('acc_transaction')
                               ->where_in('Vtype',$values)
                               ->where('IsAppove',0)
                               ->group_by('VNo')
                               ->get()
                               ->result();

    }
//approved
        public function approved($data = [])
    {
        return $this->db->where('VNo',$data['VNo'])
            ->update('acc_transaction',$data); 
    } 

        //debit update voucher
    public function dbvoucher_updata($id){
      return  $vou_info = $this->db->select('*')
                 ->from('acc_transaction')
                 ->where('VNo',$id)
                 ->where('Credit <',1)
                 ->get()
                 ->result();
    }

        public function journal_updata($id){
      return  $vou_info = $this->db->select('*')
                 ->from('acc_transaction')
                 ->where('VNo',$id)
                 ->get()
                 ->result_array();
    }

     //credit voucher update 
    public function crdtvoucher_updata($id){
      return  $vou_info = $this->db->select('*')
                 ->from('acc_transaction')
                 ->where('VNo',$id)
                 ->where('Debit <',1)
                 ->get()
                 ->result();

    }
    //Debit voucher inof

    public function debitvoucher_updata($id){
      return $cr_info = $this->db->select('*')
                 ->from('acc_transaction')
                 ->where('VNo',$id)
                 ->where('Credit<',1)
                 ->get()
                 ->result_array();

    }
     // debit update voucher credit info
    public function crvoucher_updata($id){
       return $v_info = $this->db->select('*')
                 ->from('acc_transaction')
                 ->where('VNo',$id)
                 ->where('Debit<',1)
                 ->get()
                 ->result_array();
    }


     public function update_contravoucher(){
           $voucher_no = addslashes(trim($this->input->post('txtVNo',TRUE)));
            $Vtype     = "Contra";
            $dAID      = $this->input->post('cmbDebit',TRUE);
            $cAID      = $this->input->post('txtCode',TRUE);
            $debit     = $this->input->post('txtAmount',TRUE);
            $credit    = $this->input->post('txtAmountcr',TRUE);
            $VDate     = $this->input->post('dtpDate',TRUE);
            $Narration = addslashes(trim($this->input->post('txtRemarks',TRUE)));
            $IsPosted  = 1;
            $IsAppove  = 0;
            $CreateBy  = $this->session->userdata('id');
           $createdate = date('Y-m-d H:i:s');
             $this->db->where(' VNo', $voucher_no);
            $this->db->delete('acc_transaction');

            for ($i=0; $i < count($cAID); $i++) {
                $crtid = $cAID[$i];
                $Cramnt= $credit[$i];
                $debits= $debit[$i]; 
           
                $contrainsert = array(
          'VNo'            =>  $voucher_no,
          'Vtype'          =>  $Vtype,
          'VDate'          =>  $VDate,
          'COAID'          =>  $crtid,
          'Narration'      =>  $Narration,
          'Debit'          =>  $debits,
          'Credit'         =>  $Cramnt,
          'IsPosted'       => $IsPosted,
          'CreateBy'       => $CreateBy,
          'CreateDate'     => $createdate,
          'IsAppove'       => 0
        ); 
              $this->db->insert('acc_transaction',$contrainsert);

    }
    return true;
}

    // update Credit voucher
     public function update_creditvoucher(){
           $voucher_no = addslashes(trim($this->input->post('txtVNo',TRUE)));
            $Vtype     = "CV";
            $dAID      = $this->input->post('cmbDebit',TRUE);
            $cAID      = $this->input->post('txtCode',TRUE);
            $Credit    = $this->input->post('txtAmount',TRUE);
            $debit     = $this->input->post('grand_total',TRUE);
            $VDate     = $this->input->post('dtpDate',TRUE);
            $Narration = addslashes(trim($this->input->post('txtRemarks',TRUE)));
            $IsPosted  = 1;
            $IsAppove  = 0;
            $CreateBy  = $this->session->userdata('id');
           $createdate = date('Y-m-d H:i:s');

              $this->db->where('VNo',$voucher_no)
                       ->delete('acc_transaction');
      
            for ($i=0; $i < count($cAID); $i++) {
                $crtid =$cAID[$i];
                $Cramnt=$Credit[$i];
           
            $debitheadinfo = $this->db->select('*')->from('acc_coa')->where('HeadCode',$crtid)->get()->row();  
               
                $debitinsert = array(
          'VNo'            =>  $voucher_no,
          'Vtype'          =>  $Vtype,
          'VDate'          =>  $VDate,
          'COAID'          =>  $crtid,
          'Narration'      =>  $Narration,
          'Debit'          =>  0,
          'Credit'         =>  $Cramnt,
          'IsPosted'       => $IsPosted,
          'CreateBy'       => $CreateBy,
          'CreateDate'     => $createdate,
          'IsAppove'       => 0
        ); 
         
        $this->db->insert('acc_transaction',$debitinsert);
    $headinfo = $this->db->select('*')->from('acc_coa')->where('HeadCode',$dAID)->get()->row();
    
      $cinsert = array(
      'VNo'            =>  $voucher_no,
      'Vtype'          =>  $Vtype,
      'VDate'          =>  $VDate,
      'COAID'          =>  $dAID,
      'Narration'      =>  'Credit Vourcher from '.$headinfo->HeadName,
      'Debit'          =>  $Cramnt,
      'Credit'         =>  0,
      'IsPosted'       => $IsPosted,
      'CreateBy'       => $CreateBy,
      'CreateDate'     => $createdate,
      'IsAppove'       => 0
    ); 

       $this->db->insert('acc_transaction',$cinsert);


       $headinfo = $this->db->select('*')->from('acc_coa')->where('HeadCode',$dAID)->get()->row();
  

            }
    
    return true;
}


// Update debit voucher
   public function update_debitvoucher(){
           $voucher_no = $this->input->post('txtVNo',TRUE);
            $Vtype     = "DV";
            $cAID      = $this->input->post('cmbDebit',TRUE);
            $dAID      = $this->input->post('txtCode',TRUE);
            $Debit     = $this->input->post('txtAmount',TRUE);
            $Credit    = $this->input->post('grand_total',TRUE);
            $VDate     = $this->input->post('dtpDate',TRUE);
            $Narration = addslashes(trim($this->input->post('txtRemarks',TRUE)));
            $IsPosted  = 1;
            $IsAppove  = 0;
            $CreateBy  = $this->session->userdata('id');
           $createdate = date('Y-m-d H:i:s');

            
              $this->db->where('VNo',$voucher_no)
                       ->delete('acc_transaction');

  
            for ($i=0; $i < count($dAID); $i++) {
                $dbtid=$dAID[$i];
                $Damnt=$Debit[$i];
           
            $debitheadinfo = $this->db->select('*')->from('acc_coa')->where('HeadCode',$dbtid)->get()->row();          
                 
                  $debitinsert = array(
            'VNo'            =>  $voucher_no,
            'Vtype'          =>  $Vtype,
            'VDate'          =>  $VDate,
            'COAID'          =>  $dbtid,
            'Narration'      =>  $Narration,
            'Debit'          =>  $Damnt,
            'Credit'         =>  0,
            'IsPosted'       => $IsPosted,
            'CreateBy'       => $CreateBy,
            'CreateDate'     => $createdate,
            'IsAppove'       => 0
          ); 
         
              $this->db->insert('acc_transaction',$debitinsert);
              $headinfo = $this->db->select('*')->from('acc_coa')->where('HeadCode',$cAID)->get()->row();

       
          $cinsert = array(
            'VNo'            =>  $voucher_no,
            'Vtype'          =>  $Vtype,
            'VDate'          =>  $VDate,
            'COAID'          =>  $cAID,
            'Narration'      =>  'Debit voucher from '.$headinfo->HeadName,
            'Debit'          =>  0,
            'Credit'         =>  $Damnt,
            'IsPosted'       => $IsPosted,
            'CreateBy'       => $CreateBy,
            'CreateDate'     => $createdate,
            'IsAppove'       => 0
          ); 
        
             $this->db->insert('acc_transaction',$cinsert);

    }
    return true;
}

 public function update_journalvoucher(){
         
           $voucher_no = addslashes(trim($this->input->post('txtVNo',TRUE)));
            $Vtype     = "JV";
            $dAID      = $this->input->post('cmbDebit',TRUE);
            $cAID      = $this->input->post('txtCode',TRUE);
            $debit     = $this->input->post('txtAmount',TRUE);
            $credit    = $this->input->post('txtAmountcr',TRUE);
            $VDate     = $this->input->post('dtpDate',TRUE);
            $Narration = addslashes(trim($this->input->post('txtRemarks',TRUE)));
            $IsPosted  = 1;
            $IsAppove  = 0;
            $CreateBy  = $this->session->userdata('id');
            $createdate= date('Y-m-d H:i:s');
            $this->db->where(' VNo', $voucher_no);
            $this->db->delete('acc_transaction');

            for ($i=0; $i < count($cAID); $i++) {
                $crtid = $cAID[$i];
                $Cramnt= $credit[$i];
                $debits= $debit[$i]; 
               
                $contrainsert = array(
          'VNo'            =>  $voucher_no,
          'Vtype'          =>  $Vtype,
          'VDate'          =>  $VDate,
          'COAID'          =>  $crtid,
          'Narration'      =>  $Narration,
          'Debit'          =>  $debits,
          'Credit'         =>  $Cramnt,
          'IsPosted'       => $IsPosted,
          'CreateBy'       => $CreateBy,
          'CreateDate'     => $createdate,
          'IsAppove'       => 0
        ); 
           
              $this->db->insert('acc_transaction',$contrainsert);
            

    }
     
    return true;
}

      public function delete_voucher($voucher){
      $this->db->where('VNo', $voucher)
               ->delete('acc_transaction');
      if ($this->db->affected_rows()) {
      return true;
    } else {
      return false;
    }
    }


    public function cashbook_firstqury($FromDate,$HeadCode){
    $sql = "SELECT SUM(Debit) Debit, SUM(Credit) Credit, IsAppove, COAID FROM acc_transaction
              WHERE VDate < '$FromDate' AND COAID LIKE '$HeadCode%' AND IsAppove =1 GROUP BY IsAppove, COAID";
              return  $sql;
}


public function cashbook_secondqury($FromDate,$HeadCode,$ToDate){
   $sql = "SELECT acc_transaction.ID,acc_transaction.VNo, acc_transaction.Vtype, acc_transaction.VDate, acc_transaction.Debit, acc_transaction.Credit, acc_transaction.IsAppove, acc_transaction.COAID, acc_coa.HeadName, acc_coa.PHeadName, acc_coa.HeadType, acc_transaction.Narration 
        FROM acc_transaction INNER JOIN acc_coa ON acc_transaction.COAID = acc_coa.HeadCode
        WHERE acc_transaction.IsAppove =1 AND acc_transaction.VDate BETWEEN '$FromDate' AND '$ToDate' AND acc_transaction.COAID LIKE '$HeadCode%' GROUP BY acc_transaction.VNo, acc_transaction.Vtype, acc_transaction.VDate, acc_transaction.IsAppove, acc_transaction.COAID, acc_coa.HeadName, acc_coa.PHeadName, acc_coa.HeadType, acc_transaction.Narration
               HAVING SUM(acc_transaction.Debit)-SUM(acc_transaction.Credit)<>0
               ORDER BY  acc_transaction.VDate, acc_transaction.VNo";

         return $sql;
}


public function inventoryledger_firstqury($FromDate,$HeadCode){
   $sql = "SELECT SUM(Debit) Debit, SUM(Credit) Credit, IsAppove, COAID FROM acc_transaction
              WHERE VDate < '$FromDate 00:00:00' AND COAID = '$HeadCode' AND IsAppove =1 GROUP BY IsAppove, COAID";
              return  $sql;
}


public function inventoryledger_secondqury($FromDate,$HeadCode,$ToDate){
   $sql = "SELECT acc_transaction.VNo, acc_transaction.Vtype, acc_transaction.VDate, acc_transaction.Debit, acc_transaction.Credit, acc_transaction.IsAppove, acc_transaction.COAID, acc_coa.HeadName, acc_coa.PHeadName, acc_coa.HeadType, acc_transaction.Narration 
     FROM acc_transaction INNER JOIN acc_coa ON acc_transaction.COAID = acc_coa.HeadCode
         WHERE acc_transaction.IsAppove =1 AND VDate BETWEEN '$FromDate 00:00:00' AND '$ToDate 00:00:00' AND acc_transaction.COAID='$HeadCode' ORDER BY  acc_transaction.VDate, acc_transaction.VNo";
          return  $sql;
}


public function trial_balance_firstquery($dtpFromDate,$dtpToDate,$COAID){
  $sql = "SELECT SUM(acc_transaction.Debit) AS Debit, SUM(acc_transaction.Credit) AS Credit FROM acc_transaction WHERE acc_transaction.IsAppove =1 AND VDate BETWEEN '".$dtpFromDate."' AND '".$dtpToDate."' AND COAID LIKE '$COAID%' ";
  return $sql;
}


public function trial_balance_secondquery($dtpFromDate,$dtpToDate,$COAID){
  $sql = "SELECT SUM(acc_transaction.Debit) AS Debit, SUM(acc_transaction.Credit) AS Credit FROM acc_transaction WHERE acc_transaction.IsAppove =1 AND VDate BETWEEN '".$dtpFromDate."' AND '".$dtpToDate."' AND COAID LIKE '$COAID%' ";
  
  return $sql;
}

public function profitloss_firstquery($dtpFromDate,$dtpToDate,$COAID){

   $sql ="SELECT SUM(acc_transaction.Debit)-SUM(acc_transaction.Credit) AS Amount FROM acc_transaction INNER JOIN acc_coa ON acc_transaction.COAID = acc_coa.HeadCode WHERE VDate BETWEEN '$dtpFromDate' AND '$dtpToDate' AND COAID LIKE '$COAID%'";
  
    return $sql;
}

public function profitloss_secondquery($dtpFromDate,$dtpToDate,$COAID){
  $sql = "SELECT SUM(acc_transaction.Credit)-SUM(acc_transaction.Debit) AS Amount FROM acc_transaction INNER JOIN acc_coa ON acc_transaction.COAID = acc_coa.HeadCode WHERE acc_transaction.IsAppove = 1 AND VDate BETWEEN '$dtpFromDate' AND '$dtpToDate' AND COAID LIKE '$COAID%'";
  
   return $sql;
}

public function cashflow_firstquery(){
   $sql = "SELECT * FROM acc_coa WHERE acc_coa.IsTransaction=1 AND acc_coa.HeadType='A' AND acc_coa.IsActive=1 AND acc_coa.HeadCode LIKE '1020101%'";
  
   return $sql;

}

public function cashflow_secondquery($dtpFromDate,$dtpToDate,$COAID){
    $sql = "SELECT SUM(acc_transaction.Debit)- SUM(acc_transaction.Credit) AS Amount FROM acc_transaction INNER JOIN acc_coa ON acc_transaction.COAID = acc_coa.HeadCode WHERE acc_transaction.IsAppove =1 AND VDate BETWEEN '".$dtpFromDate."' AND '".$dtpToDate."' AND COAID LIKE '$COAID%'";
  
   return $sql;
}

public function cashflow_thirdquery(){
    $sql = "SELECT * FROM acc_coa WHERE IsGL=1 AND HeadCode LIKE '102%' AND IsActive=1 AND HeadCode NOT LIKE '1020101%' AND HeadCode!='102' ";
  
   return $sql;
}

public function cashflow_forthquery($dtpFromDate,$dtpToDate,$COAID){
   $sql = "SELECT  SUM(acc_transaction.Credit) - SUM(acc_transaction.Debit) AS Amount FROM acc_transaction INNER JOIN acc_coa ON acc_transaction.COAID = acc_coa.HeadCode WHERE acc_transaction.IsAppove = 1 AND VDate BETWEEN '".$dtpFromDate."' AND '".$dtpToDate."' AND COAID LIKE '$COAID%' AND VNo in (SELECT VNo FROM acc_transaction WHERE COAID LIKE '1020101%') ";
  
   return $sql;
}


public function cashflow_fifthquery($dtpFromDate,$dtpToDate,$COAID){
   $sql = "SELECT  SUM(acc_transaction.Credit) - SUM(acc_transaction.Debit) AS Amount FROM acc_transaction INNER JOIN acc_coa ON acc_transaction.COAID = acc_coa.HeadCode WHERE acc_transaction.IsAppove = 1 AND VDate BETWEEN '".$dtpFromDate."' AND '".$dtpToDate."' AND COAID LIKE '4%' AND VNo in (SELECT VNo FROM acc_transaction WHERE COAID LIKE '1020101%') ";
  
   return $sql;
}


public function cashflow_sixthquery(){
   $sql = "SELECT * FROM acc_coa WHERE IsGL=1 AND HeadCode LIKE '3%' AND IsActive=1 ";
   return $sql;
}

public function cashflow_seventhquery($dtpFromDate,$dtpToDate,$COAID){
     $sql = "SELECT  SUM(acc_transaction.Credit) - SUM(acc_transaction.Debit) AS Amount FROM acc_transaction INNER JOIN acc_coa ON acc_transaction.COAID = acc_coa.HeadCode WHERE acc_transaction.IsAppove = 1 AND VDate BETWEEN '".$dtpFromDate."' AND '".$dtpToDate."' AND COAID LIKE '$COAID%' AND VNo in (SELECT VNo FROM acc_transaction WHERE COAID LIKE '1020101%') ";
   return $sql;
}


    public  function get_general_ledger(){

        $this->db->select('*');
        $this->db->from('acc_coa');
        $this->db->where('IsGL',1);
        $this->db->order_by('HeadName', 'asc');
        $query = $this->db->get();
        return $query->result();


    }

       public function general_led_get($Headid){

        $sql="SELECT * FROM acc_coa WHERE HeadCode='$Headid' ";
        $query = $this->db->query($sql);
        $rs=$query->row();


        $sql="SELECT * FROM acc_coa WHERE IsTransaction=1 AND PHeadName='".$rs->HeadName."' ORDER BY HeadName";
        $query = $this->db->query($sql);
        return $query->result();
    }

        public function general_led_report_headname($cmbGLCode){
        $this->db->select('*');
        $this->db->from('acc_coa');
        $this->db->where('HeadCode',$cmbGLCode);
        $query = $this->db->get();
        return $query->result_array();
    }


    public function general_led_report_headname2($cmbGLCode,$cmbCode,$dtpFromDate,$dtpToDate,$chkIsTransction){

            if($chkIsTransction){
        
                $this->db->select('acc_transaction.VNo,acc_transaction.VDate, acc_transaction.Vtype, acc_transaction.VDate, acc_transaction.Narration, acc_transaction.Debit, acc_transaction.Credit, acc_transaction.IsAppove, acc_transaction.COAID,acc_coa.HeadName, acc_coa.PHeadName, acc_coa.HeadType');
                $this->db->from('acc_transaction');
                $this->db->join('acc_coa','acc_transaction.COAID = acc_coa.HeadCode', 'left');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('VDate BETWEEN "'.$dtpFromDate. '" and "'.$dtpToDate.'"');
                $this->db->where('acc_transaction.COAID',$cmbCode);
              

                $query = $this->db->get();
                return $query->result();
            }
            else{
               
                $this->db->select('acc_transaction.COAID,acc_transaction.VDate,acc_transaction.Debit, acc_transaction.Credit,acc_coa.HeadName,acc_transaction.IsAppove, acc_coa.PHeadName, acc_coa.HeadType');
                $this->db->from('acc_transaction');
                $this->db->join('acc_coa','acc_transaction.COAID = acc_coa.HeadCode', 'left');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('VDate BETWEEN "'.$dtpFromDate. '" and "'.$dtpToDate.'"');
                $this->db->where('acc_transaction.COAID',$cmbCode);
               
                $query = $this->db->get();
                return $query->result();
            }

    }

        // prebalance calculation
      public function general_led_report_prebalance($cmbCode,$dtpFromDate){
                $this->db->select('sum(acc_transaction.Debit) as predebit, sum(acc_transaction.Credit) as precredit');
                $this->db->from('acc_transaction');
                $this->db->where('acc_transaction.IsAppove',1);
                $this->db->where('VDate < ',$dtpFromDate);
                $this->db->where('acc_transaction.COAID',$cmbCode);
                $query = $this->db->get()->row();
         
                return $balance=$query->predebit - $query->precredit;

    }


     //Trial Balance Report 
    public function trial_balance_report($FromDate,$ToDate,$WithOpening){

        if($WithOpening)
            $WithOpening=true;
        else
            $WithOpening=false;

        $sql="SELECT * FROM acc_coa WHERE IsGL=1 AND IsActive=1 AND HeadType IN ('A','L') ORDER BY HeadCode";
        $oResultTr = $this->db->query($sql);
        
        $sql="SELECT * FROM acc_coa WHERE IsGL=1 AND IsActive=1 AND HeadType IN ('I','E') ORDER BY HeadCode";
        $oResultInEx = $this->db->query($sql);

        $data = array(
            'oResultTr'   => $oResultTr->result_array(),
            'oResultInEx' => $oResultInEx->result_array(),
            'WithOpening' => $WithOpening
        );

        return $data;
    }

         //Profict loss report search
    public function profit_loss_serach(){
       
        $sql="SELECT * FROM acc_coa WHERE acc_coa.HeadType='I'";
        $sql1 = $this->db->query($sql);

        $sql="SELECT * FROM acc_coa WHERE acc_coa.HeadType='E'";
        $sql2 = $this->db->query($sql);
        
        $data = array(
          'oResultAsset'     => $sql1->result(),
          'oResultLiability' => $sql2->result(),
        );
        return $data;
    } 
    public function profit_loss_serach_date($dtpFromDate,$dtpToDate){
       $sqlF="SELECT  acc_transaction.VDate, acc_transaction.COAID, acc_coa.HeadName FROM acc_transaction INNER JOIN acc_coa ON acc_transaction.COAID = acc_coa.HeadCode WHERE acc_transaction.VDate BETWEEN '$dtpFromDate' AND '$dtpToDate' AND acc_transaction.IsAppove = 1 AND  acc_transaction.COAID LIKE '301%'";
       $query = $this->db->query($sqlF);
       return $query->result();
    }


    
public function fixed_assets(){
         return   $this->db->select('*')
                  ->from('acc_coa')
                  ->where('PHeadName','Assets')
                  ->get()
                  ->result_array();
}

public function assets_info($head_name){
         $this->db->select("*");
         $this->db->from('acc_coa');
         $this->db->where('PHeadName',$head_name);
         $this->db->group_by('HeadCode');
       return  $records = $this->db->get()->result_array();     

} 

public function asset_childs($head_name,$from_date,$to_date){
         $this->db->select("*");
         $this->db->from('acc_coa');
         $this->db->where('PHeadName',$head_name);
         $this->db->group_by('HeadCode');
       return  $records = $this->db->get()->result_array();    
}

public function assets_balance($head_code,$from_date,$to_date){
         $this->db->select("(sum(Debit)-sum(Credit)) as balance");
         $this->db->from('acc_transaction');
         $this->db->where('COAID',$head_code);
         $this->db->where('VDate >=',$from_date);
         $this->db->where('VDate <=',$to_date);
         $this->db->where('IsAppove',1);
       return  $records = $this->db->get()->result_array(); 
}

public function asset_child_byheadname($head_name,$from_date,$to_date){
         $this->db->select("b.*,b.HeadCode,(sum(a.Debit)-sum(a.Credit)) as balance");
         $this->db->from('acc_coa b');
         $this->db->join('acc_transaction a','b.HeadCode = a.COAID');
         $this->db->where('b.HeadName',$head_name);
         $this->db->where('a.VDate >=',$from_date);
         $this->db->where('a.VDate <=',$to_date);
         $this->db->where('a.IsAppove',1);
         $this->db->group_by('b.HeadCode');
       return  $records = $this->db->get()->result_array();    
}


public function liabilities_data(){
  return   $this->db->select('*')
                  ->from('acc_coa')
                  ->where('PHeadName','Liabilities')
                  ->get()
                  ->result_array();
}

public function liabilities_info($head_name){

         $this->db->select("*");
         $this->db->from('acc_coa');
         $this->db->where('PHeadName',$head_name);
       return  $records = $this->db->get()->result_array();   

}
public function liabilities_info_tax($head_name){

         $this->db->select("*");
         $this->db->from('acc_coa');
         $this->db->where('HeadName',$head_name);
       return  $records = $this->db->get()->result_array();   

}


public function liabilities_balance($head_code,$from_date,$to_date){
   $this->db->select("(sum(Credit)-sum(Debit)) as balance,COAID");
         $this->db->from('acc_transaction');
         $this->db->where('COAID',$head_code);
         $this->db->where('VDate >=',$from_date);
         $this->db->where('VDate <=',$to_date);
         $this->db->where('IsAppove',1);
       return  $records = $this->db->get()->result_array(); 
}

public function income_fields(){
  return   $this->db->select('*')
                  ->from('acc_coa')
                  ->where('PHeadName','Income')
                  ->get()
                  ->result_array();
}


public function income_balance($head_code,$from_date,$to_date){
        $this->db->select("(sum(Debit)-sum(Credit)) as balance,COAID");
         $this->db->from('acc_transaction');
         $this->db->where('COAID',$head_code);
         $this->db->where('VDate >=',$from_date);
         $this->db->where('VDate <=',$to_date);
         $this->db->where('IsAppove',1);
       return  $records = $this->db->get()->result_array(); 
}

public function expense_fields(){
   return   $this->db->select('*')
                  ->from('acc_coa')
                  ->where('PHeadName','Expence')
                  ->get()
                  ->result_array();
}


    public function opeing_voucher()
    {
      return  $data = $this->db->select("VNo as voucher")
            ->from('acc_transaction') 
            ->like('VNo', 'OP-', 'after')
            ->order_by('ID','desc')
            ->get()
            ->result_array();
           
    }


}

