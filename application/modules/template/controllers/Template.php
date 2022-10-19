<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 #------------------------------------    
    # Author: Bdtask Ltd
    # Author link: https://www.bdtask.com/
    # Dynamic style php file
    # Developed by :Isahaq
    #------------------------------------    
 define('UPDATE_INFO_URL','https://update.bdtask.com/saleserp/autoupdate/update_info');
class Template extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->db->query('SET SESSION sql_mode = ""');
		$this->load->model(array(
			'template_model'
		));
	}
 
	public function layout($data)
	{  
		$id = $this->session->userdata('id');
		$settingdata           = $this->template_model->setting();
		$company_data          = $this->template_model->bdtask_company_info();
		$data['setting']       = $settingdata;
		$data['company_info']  = $company_data;
		$data['company_name']  = $company_data[0]['company_name'];
		$data['discount_type'] = $settingdata->discount_type;
		$data['max_version']   = file_get_contents(UPDATE_INFO_URL);
		$data['current_version'] = $this->current_version();
		$data['bank_list']     = $this->template_model->bdtask_bank_list();
		$data['currency']      = $settingdata->currency;
        $data['position']      = $settingdata->currency_position;
        $data['out_of_stocks'] = $this->template_model->out_of_stock_count();
		$this->load->view('layout', $data);
	}
 
	public function login($data)
	{ 
		$data['setting'] = $this->template_model->setting();
		$this->load->view('login', $data);
	}


	  private function current_version(){

        //Current Version
        $product_version = '';
        $path = FCPATH.'system/core/compat/lic.php'; 
        if (file_exists($path)) {
            
            // Open the file
            $whitefile = file_get_contents($path);

            $file = fopen($path, "r");
            $i    = 0;
            $product_version_tmp = array();
            $product_key_tmp = array();
            while (!feof($file)) {
                $line_of_text = fgets($file);

                if (strstr($line_of_text, 'product_version')  && $i==0) {
                    $product_version_tmp = explode('=', strstr($line_of_text, 'product_version'));
                    $i++;
                }                
            }
            fclose($file);

            $product_version = trim(@$product_version_tmp[1]);
            $product_version = ltrim(@$product_version, '\'');
            $product_version = rtrim(@$product_version, '\';');

            return @$product_version;
            
        } else {
            //file is not exists
            return false;
        }
        
    }
 
}
