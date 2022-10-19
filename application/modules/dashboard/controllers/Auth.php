<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 #------------------------------------    
    # Author: Bdtask Ltd
    # Author link: https://www.bdtask.com/
    # Dynamic style php file
    # Developed by :Isahaq
    #------------------------------------    

class Auth extends MX_Controller {
 	
 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model(array(
 			'auth_model',

 		));

 	}

	public function index()
	{  
	if ($this->session->userdata('isLogIn'))
		redirect('home');
		$data['title']    = display('login'); 
		#-------------------------------------#
		$this->form_validation->set_rules('email', display('email'), 'required|valid_email|max_length[100]|trim');
		$this->form_validation->set_rules('password', display('password'), 'required|max_length[32]|md5|trim');
		$error = '';
        $setting_detail = $this->auth_model->settings_data();

        if ($setting_detail[0]['captcha'] == 0 && $setting_detail[0]['secret_key'] != null && $setting_detail[0]['site_key'] != null) {

            $this->form_validation->set_rules('g-recaptcha-response', 'recaptcha validation', 'required|callback_validate_captcha');
            $this->form_validation->set_message('validate_captcha', 'Please check the the captcha form');

            if ($this->form_validation->run() == FALSE) {
                $this->session->set_userdata(array('exception' => display('please_enter_valid_captcha')));
                $this->output->set_header("Location: " . base_url() . 'login', TRUE, 302);
            } }

		#-------------------------------------#
		$data['user'] = (object)$userData = array(
			'email' 	 => $this->input->post('email'),
			'password'   => $this->input->post('password'),
		);
		#-------------------------------------#
		if ( $this->form_validation->run())
		{

			$user = $this->auth_model->checkUser($userData);

		if($user->num_rows() > 0) {
				
        if($user->row()->user_type == 1){

            $checkPermission = $this->auth_model->userPermissionadmin($user->row()->user_id);
        }
        else{
            $checkPermission = $this->auth_model->userPermission($user->row()->user_id);
        }
        
        $permission = array();
        if(!empty($checkPermission))
            foreach ($checkPermission as $value) {
                $permission[$value->directory] = array(
                    'create' => $value->create,
                    'read'   => $value->read,
                    'update' => $value->update,
                    'delete' => $value->delete
                );
            }

            $key = md5(time());
            $key = str_replace("1", "z", $key);
            $key = str_replace("2", "J", $key);
            $key = str_replace("3", "y", $key);
            $key = str_replace("4", "R", $key);
            $key = str_replace("5", "Kd", $key);
            $key = str_replace("6", "jX", $key);
            $key = str_replace("7", "dH", $key);
            $key = str_replace("8", "p", $key);
            $key = str_replace("9", "Uf", $key);
            $key = str_replace("0", "eXnyiKFj", $key);
            $sid_web = substr($key, rand(0, 3), rand(28, 32));
            
            // codeigniter session stored data          
         $sData = array(
					'isLogIn' 	  => true,
					'isAdmin' 	  => (($user->row()->user_type == 1)?true:false),
					'user_type'   => $user->row()->user_type,
					'id' 		  => $user->row()->user_id,
					'fullname'	  => $user->row()->fullname,
					'first_name'  => $user->row()->first_name,
					'last_name'   => $user->row()->last_name,
					'user_level'  => $user->row()->user_level,
					'email' 	  => $user->row()->username,
					'image' 	  => $user->row()->image,
					'permission'  => json_encode($permission), 
					);	

        

					//store date to session 
					$this->session->set_userdata($sData);
					$this->session->set_flashdata('message', display('welcome_back').' '.$user->row()->fullname);
                    if($user->row()->user_type == 1){
					redirect('home');
                }else{
                    if($permission['new_invoice']['create'] == 1 || $permission['gui_pos']['create']==1){
                       redirect('gui_pos'); 
                   }else{
                    redirect('home');
                   }

                    }

			} else {

				$this->session->set_flashdata('exception', display('wrong_username_or_password'));
				redirect('login');
			} 

		} else {

			echo Modules::run('template/login', $data);
		}
	}
  
	public function logout()
	{ 
		//destroy session
		$this->session->sess_destroy();
		redirect('login');
	}
  

      function validate_captcha() {
        $setting_detail = $this->auth_model->settings_data();
        $captcha        = $this->input->post('g-recaptcha-response');
        $response       = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $setting_detail[0]['secret_key'] . ".&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
        if ($response . 'success' == false) {
            return FALSE;
        } else {
            return TRUE;
        }
    }
}
