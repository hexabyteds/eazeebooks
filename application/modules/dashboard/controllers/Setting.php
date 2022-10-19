<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 #------------------------------------    
    # Author: Bdtask Ltd
    # Author link: https://www.bdtask.com/
    # Dynamic style php file
    # Developed by :Isahaq
    #------------------------------------    

class Setting extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->db->query('SET SESSION sql_mode = ""');
		$this->load->model(array(
			'setting_model'
		));
		$this->load->library('ciqrcode');

		if (!$this->session->userdata('isLogIn')) 
		redirect('login'); 
	}
 

	public function index()
	{
		$data['title'] = display('setting');
		#-------------------------------#
		//check setting table row if not exists then insert a row
		$this->check_setting();
		#-------------------------------#
		$data['languageList']  = $this->languageList(); 
		$data['sdata']         = $this->setting_model->read();
		$data['currency_list'] = $this->setting_model->currency_list();
        $data['timezonelist']  = array(
		'Africa/Casablanca'   => 'Africa/Casablanca',
		'Africa/Lagos'        => 'Africa/Lagos',
		'Africa/Cairo'        => 'Africa/Cairo',
		'Africa/Harare'       => 'Africa/Harare',
		'Africa/Johannesburg' => 'Africa/Johannesburg',
		'Africa/Monrovia'     => 'Africa/Monrovia',
		'America/Anchorage'   => 'America/Anchorage',
		'America/Los_Angeles' => 'America/Los_Angeles',
		'America/Tijuana'     => 'America/Tijuana',
		'America/Chihuahua'   => 'America/Chihuahua',
		'America/Mazatlan'    => 'America/Mazatlan',
		'America/Denver'      => 'America/Denver',
		'America/Managua'     => 'America/Managua',
		'America/Chicago'     => 'America/Chicago',
		'America/Mexico_City' => 'America/Mexico_City',
		'America/Monterrey'   => 'America/Monterrey',
		'America/New_York'    => 'America/New_York',
		'America/Lima'        => 'America/Lima',
		'America/Bogota'      => 'America/Bogota',
		'America/Caracas'     => 'America/Caracas',
		'America/La_Paz'      => 'America/La_Paz',
		'America/Santiago'    => 'America/Santiago',
		'America/St_Johns'    => 'America/St_Johns',
		'America/Sao_Paulo'   => 'America/Sao_Paulo',
		'America/Argentina'   => 'America/Argentina',
		'America/Godthab'     => 'America/Godthab',
		'America/Noronha'     => 'America/Noronha',
		'Asia/Jerusalem'      => 'Asia/Jerusalem',
		'Asia/Baghdad'        => 'Asia/Baghdad',
		'Asia/Kuwait'         => 'Asia/Kuwait',
		'Africa/Nairobi'      => 'Africa/Nairobi',
		'Asia/Riyadh'         => 'Asia/Riyadh',
		'Asia/Tehran'         => 'Asia/Tehran',
		'Asia/Baku'           => 'Asia/Baku',
		'Asia/Muscat'         => 'Asia/Muscat',
		'Asia/Tbilisi'        => 'Asia/Tbilisi',
		'Asia/Yerevan'        => 'Asia/Yerevan',
		'Asia/Kabul'          => 'Asia/Kabul',
		'Asia/Karachi'        => 'Asia/Karachi',
		'Asia/Tashkent'       => 'Asia/Tashkent',
		'Asia/Kolkata'        => 'Asia/Kolkata',
		'Asia/Katmandu'       => 'Asia/Katmandu',
		'Asia/Almaty'         => 'Asia/Almaty',
		'Asia/Dhaka'          => 'Asia/Dhaka',
		'Asia/Yekaterinburg'  => 'Asia/Yekaterinburg',
		'Asia/Rangoon'        => 'Asia/Rangoon',
		'Asia/Bangkok'        => 'Asia/Bangkok',
		'Asia/Jakarta'        => 'Asia/Jakarta',
		'Asia/Hong_Kong'      => 'Asia/Hong_Kong',
		'Asia/Chongqing'      => 'Asia/Chongqing',
		'Asia/Krasnoyarsk'    => 'Asia/Krasnoyarsk',
		'Asia/Kuala_Lumpur'   => 'Asia/Kuala_Lumpur',
		'Australia/Perth'     => 'Australia/Perth',
		'Asia/Singapore'      => 'Asia/Singapore',
		'Asia/Taipei'         => 'Asia/Taipei', 
		'Asia/Ulan_Bator'     => 'Asia/Ulan_Bator',
		'Asia/Urumqi'         => 'Asia/Urumqi',
		'Asia/Irkutsk'        => 'Asia/Irkutsk',
		'Asia/Tokyo'          => 'Asia/Tokyo',
		'Asia/Seoul'          => 'Asia/Seoul',
		'Asia/Yakutsk'        => 'Asia/Yakutsk',
		'Asia/Vladivostok'    => 'Asia/Vladivostok',
		'Asia/Kamchatka'      => 'Asia/Kamchatka',
		'Asia/Magadan'        => 'Asia/Magadan',
		'Atlantic/Azores'     => 'Atlantic/Azores',
		'Atlantic/Cape_Verde' => 'Atlantic/Cape_Verde',
		'Australia/Adelaide'  => 'Australia/Adelaide',
		'Australia/Darwin'    => 'Australia/Darwin',
		'Australia/Brisbane'  => 'Australia/Brisbane',
		'Australia/Canberra'  => 'Australia/Canberra',
		'Australia/Sydney'    => 'Australia/Sydney',
		'Australia/Hobart'    => 'Australia/Hobart',
		'Australia/Melbourne' => 'Australia/Melbourne',
		'Canada/Atlantic'     => 'Canada/Atlantic',
		'Europe/Helsinki'     => 'Europe/Helsinki',
		'Europe/London'       => 'Europe/London',
		'Europe/Dublin'       => 'Europe/Dublin',
		'Europe/Lisbon'       => 'Europe/Lisbon',
		'Europe/Belgrade'     => 'Europe/Belgrade',
		'Europe/Berlin'       => 'Europe/Berlin',
		'Europe/Bratislava'   => 'Europe/Bratislava',
		'Europe/Brussels'     => 'Europe/Brussels',
		'Europe/Budapest'     => 'Europe/Budapest',
		'Europe/Copenhagen'   => 'Europe/Copenhagen',
		'Europe/Ljubljana'    => 'Europe/Ljubljana',
		'Europe/Madrid'       => 'Europe/Madrid',
		'Europe/Paris'        => 'Europe/Paris',
		'Europe/Prague'       => 'Europe/Prague', 
		'Europe/Sarajevo'     => 'Europe/Sarajevo',
		'Europe/Skopje'       => 'Europe/Skopje',
		'Europe/Stockholm'    => 'Europe/Stockholm',
		'Europe/Vienna'       => 'Europe/Vienna',
		'Europe/Warsaw'       => 'Europe/Warsaw',
		'Europe/Zagreb'       => 'Europe/Zagreb',
		'Europe/Athens'       => 'Europe/Athens',
		'Europe/Bucharest'    => 'Europe/Bucharest',
		'Europe/Riga'         => 'Europe/Riga',
		'Europe/Sofia'        => 'Europe/Sofia',
		'Europe/Tallinn'      => 'Europe/Tallinn',
		'Europe/Vilnius'      => 'Europe/Vilnius',
		'Europe/Minsk'        => 'Europe/Minsk',
		'Europe/Istanbul'     => 'Europe/Istanbul',
		'Europe/Moscow'       => 'Europe/Moscow',
		'Pacific/Port_Moresby'=> 'Pacific/Port_Moresby',
		'Pacific/Fiji'        => 'Pacific/Fiji',
		'Pacific/Kwajalein'   => 'Pacific/Kwajalein',
		'Pacific/Midway'      => 'Pacific/Midway',
		'Pacific/Samoa'       => 'Pacific/Samoa',
		'Pacific/Honolulu'    => 'Pacific/Honolulu',
		'Pacific/Auckland'    => 'Pacific/Auckland',
		'Pacific/Tongatapu'   => 'Pacific/Tongatapu',
		'Pacific/Guam'        => 'Pacific/Guam',
					);
		$data['module'] = "dashboard";  
		$data['page']   = "home/setting";  
		echo Modules::run('template/layout', $data); 
	} 

	public function bdtask_create_settings()
	{
		$data['title'] = display('application_setting');
		#-------------------------------#
		$this->form_validation->set_rules('currency',display('currency'),'required|max_length[50]');
		$this->form_validation->set_rules('footer_text', display('footer_text') ,'max_length[255]');
		$this->form_validation->set_rules('language',display('language'),'required|max_length[50]');
		$this->form_validation->set_rules('discount_type',display('discount_type'),'required|max_length[4]'); 
; 
		
		#-------------------------------#
		//logo upload
		$logo = $this->fileupload->do_upload(
			'assets/img/icons/',
			'logo'
		);
		// if logo is uploaded then resize the logo
		if ($logo !== false && $logo != null) {
			$this->fileupload->do_resize(
				$logo, 
				210,
				48
			);
		}
		//if logo is not uploaded
		if ($logo === false) {
			$this->session->set_flashdata('exception', display('invalid_logo'));
		}

		$invoice_logo = $this->fileupload->do_upload(
			'assets/img/icons/',
			'invoice_logo'
		);
		// if logo is uploaded then resize the logo
		if ($invoice_logo !== false && $invoice_logo != null) {
			$this->fileupload->do_resize(
				$invoice_logo, 
				210,
				48
			);
		}
		//if logo is not uploaded
		if ($invoice_logo === false) {
			$this->session->set_flashdata('exception', display('invalid_logo'));
		}


		//favicon upload
		$favicon = $this->fileupload->do_upload(
			'assets/img/icons/',
			'favicon'
		);
		// if favicon is uploaded then resize the favicon
		if ($favicon !== false && $favicon != null) {
			$this->fileupload->do_resize(
				$favicon, 
				32,
				32
			);
		}
		//if favicon is not uploaded
		if ($favicon === false) {
			$this->session->set_flashdata('exception',  display('invalid_favicon'));
		}	
		$old_logo = $this->input->post('old_logo',true);
        $old_invoice_logo = $this->input->post('old_invoice_logo',true);
        $old_favicon = $this->input->post('old_favicon',true);	
		#-------------------------------#

		$data['setting'] = (object)$postData = [
	'setting_id'        => $this->input->post('id',true),
	'logo'              => (!empty($logo) ? $logo : $old_logo),
    'invoice_logo'      => (!empty($invoice_logo) ? $invoice_logo : $old_invoice_logo),
    'favicon'           => (!empty($favicon) ? $favicon : $old_favicon),
    'currency'          => $this->input->post('currency',true),
    'currency_position' => $this->input->post('currency_position',true),
    'footer_text'       => $this->input->post('footer_text',true),
    'language'          => $this->input->post('language',true),
    'rtr'               => $this->input->post('rtr',true),
    'timezone'          => $this->input->post('timezone',true),
    'discount_type'     => $this->input->post('discount_type',true),
			
		]; 
		#-------------------------------#
		if ($this->form_validation->run() === true) {

			#if empty $id then insert data
			if (empty($postData['setting_id'])) {
				if ($this->setting_model->create($postData)) {
					#set success message
					$this->session->set_flashdata('message',display('save_successfully'));
				} else {
					#set exception message
					$this->session->set_flashdata('exception',display('please_try_again'));
				}
			} else {
				if ($this->setting_model->update($postData)) {
					#set success message
					$this->session->set_flashdata('message',display('update_successfully'));
				} else {
					#set exception message
					$this->session->set_flashdata('exception', display('please_try_again'));
				} 
			}
 
			redirect('settings');

		} else { 
			$data['languageList'] = $this->languageList();
			$data['module']       = "dashboard";  
			$data['page']         = "home/setting";  
			echo Modules::run('template/layout', $data); 
		} 
	}

	//check setting table row if not exists then insert a row
	public function check_setting()
	{
		if ($this->db->count_all('web_setting') == 0) {
			$this->db->insert('web_setting',[
				'footer_text' => '2020&copy;Copyright',
			]);
		}
	}


    public function languageList()
    { 
        if ($this->db->table_exists("language")) { 

                $fields = $this->db->field_data("language");

                $i = 1;
                foreach ($fields as $field)
                {  
                    if ($i++ > 2)
                    $result[$field->name] = ucfirst($field->name);
                }

                if (!empty($result)) return $result;
 

        } else {
            return false; 
        }
    }


    public function bdtask_company_info(){
    $data['title'] 	  = display('company_list');
    $data['companys'] = $this->setting_model->company_info();
	$data['module']   = "dashboard";  
	$data['page']     = "home/company_list";  
	echo Modules::run('template/layout', $data); 
    }

  
   public function bdtask_edit_company($id = null){
    $data['title'] 	  = display('edit_company');
    $data['companys'] = $this->setting_model->company_details($id);
	$data['module']   = "dashboard";  
	$data['page']     = "home/company_form";  
	echo Modules::run('template/layout', $data); 
    }


//company edit form
    public function company_update()
	{
		$this->form_validation->set_rules('company_name', 'Company Name','required|max_length[200]');
		$this->form_validation->set_rules('address', 'Address','required|max_length[250]');
		#------------------------#
       	$this->form_validation->set_rules('email', 'Email Address', "required|valid_email|max_length[100]");
       	$this->form_validation->set_rules('website', 'website','required|max_length[250]');
		$company_id  = $this->input->post('company_id',true);
		$data=array(
			'company_id' 	=> $company_id,
			'company_name'  => $this->input->post('company_name',true),
			'email' 		=> $this->input->post('email',true),
			'address' 		=> $this->input->post('address',true),
			'mobile' 		=> $this->input->post('mobile',true),
			'website' 		=> $this->input->post('website',true),
			'building_no'  => $this->input->post('building_no',true),
			'street_name' 		=> $this->input->post('street_name',true),
			'district' 		=> $this->input->post('district',true),
			'city' 		=> $this->input->post('city',true),
			'country' 		=> $this->input->post('country',true),
			'postal_code'  => $this->input->post('postal_code',true),
			'additional_no' 		=> $this->input->post('additional_no',true),
			'vat_no' 		=> $this->input->post('vat_no',true),
			'other_buyer_no' 		=> $this->input->post('other_buyer_no',true),
			'status' 	    => 1
			);
			if ($this->form_validation->run()) {
		$this->setting_model->update_company($data);
		$this->session->set_flashdata(array('message'=> display('successfully_updated')));
		redirect(base_url('company_list'));
	}else{
		$this->session->set_flashdata(array('exception'=>validation_errors()));
		redirect(base_url('edit_company/'.$company_id));
	}
	}	



//currency add edit form
public function bdtask_currencyform($id = null)
	{ 
		$data['title']    = display('add_currency');
		/*-----------------------------------*/
		$this->form_validation->set_rules('currency_name', display('currency_name'),'required|max_length[50]');
		$this->form_validation->set_rules('currency_icon', display('currency_icon'),'required|max_length[50]');

		/*-----------------------------------*/
		$data['currency_data'] = (object)$currencyData = array(
			'id'            => $this->input->post('id'),  
			'currency_name' => $this->input->post('currency_name'),
			'icon'          => $this->input->post('currency_icon'),
		);

		/*-----------------------------------*/
		if ($this->form_validation->run()) {
			if (empty($id)) {
				if ($this->setting_model->add_currency($currencyData)) {
					$this->session->set_flashdata('message', display('save_successfully'));
				} else {
					$this->session->set_flashdata('exception', display('please_try_again'));
				}
				redirect("currency_list");
			} else {
				if ($this->setting_model->update_currency($currencyData)) {
					$this->session->set_flashdata('message', display('update_successfully'));
				} else {
					$this->session->set_flashdata('exception', display('please_try_again'));
				}

				redirect("currency_form/$id");
			}
		} else {
			if(!empty($id)){
			$data['title']    = display('edit_currency');
			$data['currency_data'] = $this->setting_model->currency_editdata($id);
			}
			$data['module']   = "dashboard";  
			$data['page']     = "currency/currency_form"; 
			
			echo Modules::run('template/layout', $data);
		}
	}


	public function bdtask_currency_list(){
    $data['title'] 	       = display('currency_list');
    $data['currency_list'] = $this->setting_model->currency_list();
	$data['module']        = "dashboard";  
	$data['page']          = "currency/list";  
	echo Modules::run('template/layout', $data); 
    }
    

    public function bdtask_deletecurrency($id = null) {
        if ($this->setting_model->delete_currency($id)) {
      $this->session->set_flashdata('message', display('delete_successfully'));
        } else {
       $this->session->set_flashdata('exception', display('please_try_again'));
        }

        redirect("currency_list");
    }


    public function bdtask_mail_config()
	{ 

		$this->check_mail_config();
		$data['title']        = display('mail_setting');
		$data['module']       = "dashboard";  
		$data['mail_setting'] = $this->setting_model->mail_settingdata();
		$data['page']         = "currency/mail_setting";  
		echo Modules::run('template/layout', $data);
	}


	    public function mail_config_update() {
	    	$this->form_validation->set_rules('protocol', 'Protocol','required|max_length[200]');
		$this->form_validation->set_rules('smtp_host', 'Host','required|max_length[250]');
		#------------------------#
       	$this->form_validation->set_rules('smtp_port', 'Port', "required|max_length[100]");
       	$this->form_validation->set_rules('smtp_user', 'smtp_user','required|max_length[250]');
       	$this->form_validation->set_rules('smtp_pass', 'smtp_pass','required|max_length[250]');	
        $protocol  = $this->input->post('protocol',true);
        $smtp_host = $this->input->post('smtp_host',true);
        $smtp_port = $this->input->post('smtp_port',true);
        $smtp_user = $this->input->post('smtp_user',true);
        $smtp_pass = $this->input->post('smtp_pass',true);
        $mailtype  = $this->input->post('mailtype',true);
        $invoice   = $this->input->post('isinvoice',true);
        $service   = $this->input->post('isservice',true);
        $quotation = $this->input->post('isquotation',true);

        $mail_data = array(
            'protocol'  => $protocol,
            'smtp_host' => $smtp_host,
            'smtp_port' => $smtp_port,
            'smtp_user' => $smtp_user,
            'smtp_pass' => $smtp_pass,
            'mailtype'  => $mailtype,
            'isinvoice' => $invoice,
            'isservice' => $service,
            'isquotation'=>$quotation,
        );
        if ($this->form_validation->run()) {
        $this->db->where('id', $this->input->post('id',true))->update('email_config', $mail_data);
        $this->session->set_flashdata('message', display('update_successfully'));
         redirect(base_url('mail_setting'));
    }else{
            $this->session->set_flashdata(array('exception' => validation_errors()));
             redirect(base_url('mail_setting'));
        }
        
       
    }

		public function check_mail_config()
	{
		if ($this->db->count_all('email_config') == 0) {
			$this->db->insert('email_config',[
				'protocol'   => 'ssmtp',
				'smtp_host'  => 'ssl://ssmtp.gmail.com',
				'smtp_port'  => 25,
				'smtp_user'  => 'demo@gmail.com',
				'smtp_pass'  => 'demo12345',
				'mailtype'   => 'html',
				'isinvoice'  => 0,
				'isservice'  => 0,
				'isquotation'=> 0,
			]);
		}
	}


	    public function bdtask_sms_config()
	{ 

		$this->check_sms_config();
		$data['title']        = display('sms_configure');
		$data['module']       = "dashboard";  
		$data['configdata']   = $this->setting_model->sms_settingdata();
		$data['page']         = "currency/sms_setting";  
		echo Modules::run('template/layout', $data);
	}

	public function check_sms_config()
	{
		if ($this->db->count_all('sms_settings') == 0) {
			$this->db->insert('sms_settings',[
				'api_key'    => 'sdfsdfd',
				'api_secret' => 'dsfsdfss',
				'from'       => 345645,
				'isinvoice'  => 0,
				'isservice'  => 0,
				'isreceive'  => 0,
			]);
		}
	}


		public function update_sms_configure(){
       	$this->form_validation->set_rules('api_key', 'api_key','required|max_length[200]');
		$this->form_validation->set_rules('api_secret', 'api_secret','required|max_length[250]');
		#------------------------#
       	$this->form_validation->set_rules('from', 'from', "required|max_length[100]");
        $id = $this->input->post('id');
		$data=array(
				'api_key' 	  => $this->input->post('api_key',true),
				'api_secret'  => $this->input->post('api_secret',true),
				'from'        => $this->input->post('from',true),
				'isinvoice'   => $this->input->post('isinvoice',true),
				'isservice'   => $this->input->post('isservice',true),
				'isreceive'   => $this->input->post('isreceive',true),

				);
   if ($this->form_validation->run()) {
           $this->db->where('id', $id);
			$this->db->update('sms_settings',$data);
			 $this->session->set_flashdata('message', display('update_successfully'));
         redirect(base_url('sms_setting'));
		}else{
            $this->session->set_flashdata(array('exception' => validation_errors()));
             redirect(base_url('sms_setting'));
        }
	
	
 }

 public function bdtask_app_setting(){
 	        $this->check_app_config();
            $data['qr_image']     = "";
            $data['server_image'] = "";
            $data['hotspotqrimg'] = "";
            $app_settingdata      = $this->setting_model->app_settingsdata();
            $qr_image             = rand().'.png';
            $params['data']       = $app_settingdata[0]['localhserver'];
            $params['level']      = 'L';
            $params['size']       = 8;
            $params['savename']   = FCPATH."my-assets/image/qr/".$qr_image;
            if($this->ciqrcode->generate($params))
            {
                $localqr = $qr_image;
            }


             $serverqr=rand().'.png';
            $params['data']     = $app_settingdata[0]['onlineserver'];
            $params['level']    = 'O';
            $params['size']     = 8;
            $params['savename'] = FCPATH."my-assets/image/qr/".$serverqr;
            if($this->ciqrcode->generate($params))
            {
                $server_qrimg = $serverqr;
            }



             $hotspotqr=rand().'.png';
            $params['data']     = $app_settingdata[0]['hotspot'];
            $params['level']    = 'U';
            $params['size']     = 8;
            $params['savename'] = FCPATH."my-assets/image/qr/".$hotspotqr;
            if($this->ciqrcode->generate($params))
            {
                $hotspot_qrimg = $hotspotqr;
            }
          
		    $data['module']          = "dashboard";  
		    $data['title']           = display('app_setting');
            $data['qr_image']        = $localqr;
            $data['server_image']    = $server_qrimg;
            $data['hotspotqrimg']    = $hotspot_qrimg;
            $data['localhserver']    = $app_settingdata[0]['localhserver'];
            $data['onlineserver']    = $app_settingdata[0]['onlineserver'];
            $data['hotspot']         = $app_settingdata[0]['hotspot'];
            $data['id']              = $app_settingdata[0]['id'];
		    $data['page']            = "currency/app_setting";  
		echo Modules::run('template/layout', $data);
 }

 	public function check_app_config()
	{
		if ($this->db->count_all('app_setting') == 0) {
			$this->db->insert('app_setting',[
				'localhserver' => 'localhost/url',
				'onlineserver' => 'https://yoururl',
				'hotspot'      => '192.12.12',
			]);
		}
	}


	 public function update_app_setting(){
       	$this->form_validation->set_rules('localurl', 'localurl','required|max_length[200]');
		$this->form_validation->set_rules('onlineurl', 'onlineurl','required|max_length[250]');
		#------------------------#
       	$this->form_validation->set_rules('hotspoturl', 'hotspoturl', "required|max_length[100]");
        $id = $this->input->post('id',TRUE);
        $data  = array(
        'localhserver' => $this->input->post('localurl',true),
        'onlineserver' => $this->input->post('onlineurl',true),
        'hotspot'      => $this->input->post('hotspoturl',true),

        );
         if ($this->form_validation->run()) {
            $this->db->where('id',$id)
                     ->update('app_setting',$data);
                 
      $this->session->set_flashdata('message', display('update_successfully'));
         redirect(base_url('app_setting'));
		}else{
            $this->session->set_flashdata(array('exception' => validation_errors()));
             redirect(base_url('app_setting'));
        }        
    }



       public function commission() {
        $customer_info    = $this->setting_model->customer_info();
        $data = array(
            'title'         => display('commission'),
            'customer_info' => $customer_info,
            'product_info'  => "",
        );
        $data['module']       = "dashboard";  
		$data['page']         = "commission/commission_generate";  
		echo Modules::run('template/layout', $data);
    }

      public function commission_generate() {

        $customer_info = $this->setting_model->customer_info();
        $product_info = $this->setting_model->product_info();

        $commission_rate = $this->input->post('commission_rate',true);

        $subTotalCtn = 0;
        $subTotalQnty = 0;
        $subTotalComs = 0;
        if ($product_info) {
            foreach ($product_info as $k => $product) {

                $product_info[$k]['per_cartoon'] = $product_info[$k]['quantity'];

                $product_info[$k]['total_commission_rate'] = $product_info[$k]['quantity'] * $commission_rate;

                $product_info[$k]['commission'] = $commission_rate;

                $product_info[$k]['subTotalQnty'] = $subTotalQnty + $product_info[$k]['quantity'];
                $subTotalQnty = $product_info[$k]['subTotalQnty'];

                $product_info[$k]['subTotalComs'] = $subTotalComs + $product_info[$k]['total_commission_rate'];
                $subTotalComs = $product_info[$k]['subTotalComs'];
            }
        }

   
        $data = array(
            'title' => display('commission'),
            'customer_info' => $customer_info,
            'product_info'  => $product_info,
            'subTotalCtn'   => $subTotalCtn,
            'subTotalQnty'  => $subTotalQnty,
            'subTotalComs'  => $subTotalComs,
        );

        $data['module']       = "dashboard";  
		$data['page']         = "commission/commission_generate";  
		echo Modules::run('template/layout', $data);;
    }

        public function retrive_product_info() {
        $customer_id = $this->input->post('customer_id',true);
        $product_info = $this->db->select('
                                invoice_details.*,
                                product_information.product_model
                                ')
                ->from('invoice')
                ->join('invoice_details', 'invoice_details.invoice_id = invoice.invoice_id')
                ->join('product_information', 'invoice_details.product_id = product_information.product_id')
                ->where('invoice.customer_id', $customer_id)
                ->group_by('invoice_details.product_id')
                ->get()
                ->result();

        if ($product_info) {
            echo "<select class=\"form-control\" name=\"product_model\" id=\"product_model\">";
            echo "<option>" . display('select_one') . "</option>";
            foreach ($product_info as $product) {
                echo "<option value='" . $product->product_id . "'>" . $product->product_model . "</option>";
            }
            echo "</select>";
        }
    }


      

}
