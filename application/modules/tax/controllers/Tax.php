<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 #------------------------------------    
    # Author: Bdtask Ltd
    # Author link: https://www.bdtask.com/
    # Dynamic style php file
    # Developed by :Isahaq
    #------------------------------------    

class Tax extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
  
        $this->load->model(array(
            'tax_model')); 
           $this->load->dbforge();
        if (! $this->session->userdata('isLogIn'))
            redirect('login');
          
    }
   
    // ============== Tax settings ================
    public function bdtask_tax_settings(){
       $taxsinfo = $this->db->count_all('tax_settings');
        if($taxsinfo > 0){
           redirect("update_tax_setting"); 
        }
        $data['title']    = display('tax_settings');
        $data['module']   = "tax";  
        $data['page']     = "tax_settings";  
        echo Modules::run('template/layout', $data);    
    }

       public function tax_settings_updateform(){
        $data['title']    = display('tax_settings');
        $data['setinfo']  = $this->tax_model->tax_setting_info();
        $data['module']   = "tax";  
        $data['page']     = "tax_settings_update";  
        echo Modules::run('template/layout', $data);    
    }


         public function create_tax_settins(){
        $taxfield = $this->input->post('taxfield',TRUE);
        $dfvalue  = $this->input->post('default_value',TRUE);
        $nt       = $this->input->post('nt',TRUE);
        $reg_no   = $this->input->post('reg_no',TRUE);
        $ishow    = $this->input->post('is_show',TRUE);
         for ($i=0; $i < sizeof($taxfield); $i++) {
                     $tax    = $taxfield[$i];
                    $default = $dfvalue[$i];
                    $rg_no   = $reg_no[$i];
                    $is_show = (!empty($ishow[$i])?$ishow[$i]:0);
          $data = array(
                'default_value' => $default,
                'tax_name'      => $tax,
                'nt'            => $nt,
                'reg_no'        => $rg_no,
                 ); 
         $this->db->insert('tax_settings',$data);                                   
            }
           

             for ($i=0; $i < sizeof($taxfield); $i++) {
        $fld = 'tax'.$i;

        if (!empty($fld)) {
            if (!$this->db->field_exists($fld, 'product_service')) {
                $this->dbforge->add_column('product_service', [
                    $fld       => [
                        'type' => 'TEXT'
                    ]
                ]);

            }
             $this->dbforge->add_column('tax_collection', [
                    $fld       => [
                        'type' => 'TEXT'
                    ]
                ]);
               if (!$this->db->field_exists($fld, 'product_information')) {
                $this->dbforge->add_column('product_information', [
                    $fld       => [
                        'type' => 'TEXT'
                    ]
                ]);
            }

            if (!$this->db->field_exists($fld, 'quotation_taxinfo')) {
                $this->dbforge->add_column('quotation_taxinfo', [
                    $fld       => [
                        'type' => 'TEXT'
                    ]
                ]);
            }
            
        } 
            }
            
            $this->session->set_flashdata('message', display('save_successfully'));
            redirect("tax_setting"); 
    }


    public function update_tax_settins(){

           $tablecolumn = $this->db->list_fields('product_service');
           $num_column = count($tablecolumn)-4;
        for ($t=0; $t < $num_column; $t++) {
        $txd = 'tax'.$t;
         if ($this->db->field_exists($txd, 'product_service')) {
            $this->dbforge->drop_column('product_service', $txd);
        }
        if ($this->db->field_exists($txd, 'tax_collection')) {
            $this->dbforge->drop_column('tax_collection', $txd);
        }
        if ($this->db->field_exists($txd, 'product_information')) {
            $this->dbforge->drop_column('product_information', $txd);
        }
        if ($this->db->field_exists($txd, 'quotation_taxinfo')) {
            $this->dbforge->drop_column('quotation_taxinfo', $txd);
           
        }
       echo  'successfully_deleted';
          }

        $taxfield = $this->input->post('taxfield',TRUE);
        $dfvalue  = $this->input->post('default_value',TRUE);
        $nt       = $this->input->post('nt',TRUE);
        $reg_no   = $this->input->post('reg_no',TRUE);
        $id       = $this->input->post('id',TRUE);
        $ishow    = $this->input->post('is_show',TRUE);
        $this->db->empty_table('tax_settings');
         for ($x=0; $x < sizeof($taxfield); $x++) {
                     $tax     = $taxfield[$x];
                     $default = $dfvalue[$x];
                     $rg_no   = $reg_no[$x];
                     $is_show = (!empty($ishow[$x])?$ishow[$x]:0);

          $data = array(
                'default_value' => $default,
                'tax_name'      => $tax,
                'nt'            => $nt,
                'reg_no'        => $rg_no,
                 ); 
         $this->db->insert('tax_settings',$data);                 
            }
            $tupfild ='';
              for ($y=0; $y < sizeof($taxfield); $y++) {
        $tupfild = 'tax'.$y;

        if (!empty($tupfild)) {
            
            if (!$this->db->field_exists($tupfild, 'product_service')) {
                $this->dbforge->add_column('product_service', [
                    $tupfild   => [
                        'type' => 'TEXT'
                    ]
                ]);
            }

             if (!$this->db->field_exists($tupfild, 'tax_collection')) {
                $this->dbforge->add_column('tax_collection', [
                    $tupfild   => [
                        'type' => 'TEXT'
                    ]
                ]);
            }
            if (!$this->db->field_exists($tupfild, 'product_information')) {
                $this->dbforge->add_column('product_information', [
                    $tupfild   => [
                        'type' => 'TEXT'
                    ]
                ]);
            }

             if (!$this->db->field_exists($tupfild, 'quotation_taxinfo')) {
                $this->dbforge->add_column('quotation_taxinfo', [
                    $tupfild   => [
                        'type' => 'TEXT'
                    ]
                ]);
            }
           echo  'successfully_inserted';
        } 
            }
           
            $this->session->set_flashdata('message', display('successfully_updated'));
            redirect("tax_setting"); 
    }

      public function bdtask_income_tax(){
        $data['title']    = display('income_tax');
        $data['module']   = "tax";  
        $data['page']     = "income_tax_form";  
        echo Modules::run('template/layout', $data);    
    }

       // ================ Income tax entry   ======
    public function bdtask_create_income_tax(){
        $sm = $this->input->post('start_amount',TRUE);
        $em = $this->input->post('end_amount',TRUE);
        $rt = $this->input->post('rate');
         for ($i=0; $i < sizeof($sm); $i++) {
                $postData = [
                    'start_amount'  => $sm[$i],
                    'end_amount'    => $em[$i],
                    'rate'          => $rt[$i],                 
                ];     
                $this->tax_model->taxsetup_create($postData);
            }
            $this->session->set_flashdata('message', display('save_successfully'));
            redirect("manage_income_tax"); 
    }


        // ================= manage Income tax  ===============
    public function manage_income_tax(){
        $data['title']    = display("manage_income_tax"); 
        $data['taxs']     = $this->tax_model->viewTaxsetup();
        $data['module']   = "tax";  
        $data['page']     = "manage_income_tax";  
        echo Modules::run('template/layout', $data);
    }


        public function edit_income_tax($id = null){
        $data['title']    = "Edit Inocme Tax"; 
        $data['data']     = $this->tax_model->taxsetup_updateForm($id); 
        $data['module']   = "tax";  
        $data['page']     = "income_tax_updateform";  
        echo Modules::run('template/layout', $data);    
    }


        public function update_income_tax(){
        $postData = [
                'tax_setup_id'    => $this->input->post('tax_setup_id',true),
                'start_amount'    => $this->input->post('start_amount',true),
                'end_amount'      => $this->input->post("end_amount",true),
                'rate'            => $this->input->post("rate",true),
            ];      
            if ($this->tax_model->update_taxsetup($postData)) { 
                $this->session->set_flashdata('message', display('successfully_updated'));
            } else {
                $this->session->set_flashdata('exception',  display('please_try_again'));
            }
            redirect("manage_income_tax");
    }


        public function delete_income_tax($id = null){ 
        if ($this->tax_model->taxsetup_delete($id)) {
            #set success message
            $this->session->set_flashdata('message',display('delete_successfully'));
        } else {
            #set exception message
            $this->session->set_flashdata('exception',display('please_try_again'));
        }
        redirect("manage_income_tax");
    }


         public function bdtask_tax_report()
    {
          $taxfield = $this->db->select('tax_name,default_value')
                ->from('tax_settings')
                ->get()
                ->result_array();
        $tablecolumn       = $this->db->list_fields('tax_collection');
        $num_column        = count($tablecolumn)-4;       
        $start             = (!empty($this->input->get('from_date'))?$this->input->get('from_date'):date('Y-m-d'));
        $end               = (!empty($this->input->get('to_date'))?$this->input->get('to_date'):date('Y-m-d'));
        $data['from_date']= $start;
        $data['to_date']  = $end;
        $data['title']    =   display('tax_report');
        $data['taxes']    = $taxfield;
        $data['taxnumber']= $num_column;
        $data['taxdata']  = $this->tax_model->taxdata($start,$end);
        $data['module']   = "tax";  
        $data['page']     = "tax_report";  
        echo Modules::run('template/layout', $data);       
    }


        public function invoice_wise_tax_report()
    {
          $taxfield = $this->db->select('tax_name,default_value')
                ->from('tax_settings')
                ->get()
                ->result_array();
        $tablecolumn = $this->db->list_fields('tax_collection');
        $num_column  = count($tablecolumn)-4;       
        $start       = (!empty($this->input->get('from_date'))?$this->input->get('from_date'):date('Y-m-d'));
        $end         = (!empty($this->input->get('to_date'))?$this->input->get('to_date'):date('Y-m-d'));
        $invoice_id  = (!empty($this->input->get('invoice_id'))?$this->input->get('invoice_id'):'');
        $data['invoice_id']  = $invoice_id;
        $data['from_date']   = $start;
        $data['to_date']     = $end;
        $data['customers']   = $this->tax_model->tax_customer();
        $data['title']       =  display('tax_report');
        $data['taxes']       = $taxfield;
        $data['taxnumber']   = $num_column;
        $data['taxdata']     = $this->tax_model->customer_taxdata($start,$end,$invoice_id);
        $data['module']      = "tax";  
        $data['page']        = "invoice_wise_tax_report";  
        echo Modules::run('template/layout', $data);      
    }
}

