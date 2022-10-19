<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 #------------------------------------    
    # Author: Bdtask Ltd
    # Author link: https://www.bdtask.com/
    # Dynamic style php file
    # Developed by :Isahaq
    #------------------------------------    

class Recoverydata extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->db->query('SET SESSION sql_mode = ""');
		$this->load->model(array(
			'setting_model'
		));
		
	}

        //password recovery 
    public function password_recovery(){
     $this->form_validation->set_rules('rec_email', display('email'), 'required|valid_email|max_length[100]|trim');  
    $userData = array(
            'email' => $this->input->post('rec_email',TRUE)
        );
    if ($this->form_validation->run())
        {
    $user = $this->setting_model->password_recovery($userData);
     $ptoken = date('ymdhis');
        if($user->num_rows() > 0) {
            $email   = $user->row()->username;
            $precdat = array(
            'username'      => $email,
            'security_code' => $ptoken,
                
        );
        
        $this->db->where('username',$email)
            ->update('user_login',$precdat);
             $send_email = '';
             if (!empty($email)) {
                $send_email = $this->setmail($email,$ptoken);
                
             }
           if($send_email){
           $user_data['success']    = 'Check Your email';
           $user_data['status']    = 1; 
           }else{
           $user_data['exception'] = 'Sorry Email Not Send';
           $user_data['status']    = 0; 
           }

        }else{
            $user_data['exception']='Email Not found';
            $user_data['status']   = 0; 
        }
    }else{
            $user_data['exception']=validation_errors();
            $user_data['status']   = 0; 
        }
       
         echo json_encode($user_data);
    }


         public function setmail($email,$ptoken)
    {
$msg = "Click on this url for change your password :".base_url().'dashboard/Recoverydata/recovery_form/'.$ptoken;

// send email
$msg = wordwrap($msg,70);

// send email
 mail($email,"passwordrecovery",$msg);
return true;
}

public function recovery_form($token_id = null){
        $tokeninfo = $this->setting_model->token_matching($token_id);
      if($tokeninfo->num_rows() > 0) {
        $data['token'] = $token_id;
        $data['title'] = display('recovery_form');
        $this->load->view('setting/user_recovery_form', $data);
      }else{
        redirect(base_url('login'));  
      }
       
    
}
public function recovery_update(){
    $token = $this->input->post('token',TRUE);
    $newpassword = $this->input->post('newpassword',TRUE);
    $userdata = array(
        'password'      =>  md5("gef" . $newpassword),
        'security_code' => '001'
        );
        $this->db->where('security_code',$token)
            ->update('user_login',$userdata);
            redirect(base_url('login')); 
}


}
