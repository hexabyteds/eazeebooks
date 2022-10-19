<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 #------------------------------------    
    # Author: Bdtask Ltd
    # Author link: https://www.bdtask.com/
    # Dynamic style php file
    # Developed by :Isahaq
    #------------------------------------    

class User extends MX_Controller {
 	
 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model(array(
 			'user_model'  
 		));
 		
		if (! $this->session->userdata('isAdmin'))
			redirect('login');
 	}
 


   public function bdtask_userlist() {
        $data['title']      = display('user_list');
		$data['module'] 	= "dashboard";  
		$data['page']   	= "user/list";   
		$data['user']       = $this->user_model->read();
		echo Modules::run('template/layout', $data); 
    }

    public function email_check($email, $id)
    { 
        $emailExists = $this->db->select('email')
				            ->where('email',$email) 
				            ->where_not_in('id',$id) 
				            ->get('user')
				            ->num_rows();

        if ($emailExists > 0) {
            $this->form_validation->set_message('email_check', 'The {field} is already registered.');
            return false;
        } else {
            return true;
        }
    } 

		public function bdtask_userform($id = null)
	{ 
		$data['title']    = display('add_user');
		/*-----------------------------------*/
		$this->form_validation->set_rules('firstname', display('first_name'),'required|max_length[50]');
		$this->form_validation->set_rules('lastname', display('last_name'),'required|max_length[50]');
		#------------------------#
		if (!empty($id)) {   
       		$this->form_validation->set_rules('email', display('email'), "required|valid_email|max_length[100]");
       		/*---#callback fn not supported#---*/  
		} else {
			$this->form_validation->set_rules('email', display('email'),'required|valid_email|max_length[100]');
		}
		#------------------------#
		if(empty($id)){
		$this->form_validation->set_rules('password', display('password'),'required|max_length[32]|md5');
		}

		$this->form_validation->set_rules('status', display('status'),'required|max_length[1]');

        $image = $this->fileupload->do_upload(
			'./assets/img/user/', 
			'image'

		);
         
		/*-----------------------------------*/
		$data['user'] = (object)$userLevelData = array(
			'user_id'     => $id,
			'id'          => $id,  
			'first_name'  => $this->input->post('firstname'),
			'last_name'   => $this->input->post('lastname'),
			'email' 	  => $this->input->post('email'),
			'password' 	  => (!empty($this->input->post('password'))?md5('gef'.$this->input->post('password')):$this->input->post('oldpassword')),
			'image'   	  => (!empty($image)?$image:$this->input->post('old_image')),
			'status'      => $this->input->post('status'),
			'user_type'   => $this->input->post('user_type'),
		);

		/*-----------------------------------*/
		if ($this->form_validation->run()) {
			if (empty($id)) {
				if ($this->user_model->create($userLevelData)) {
					$this->session->set_flashdata('message', display('save_successfully'));
				} else {
					$this->session->set_flashdata('exception', display('please_try_again'));
				}
				redirect("user_list");

			} else {
				if ($this->user_model->update($userLevelData)) {
					$this->session->set_flashdata('message', display('update_successfully'));
				} else {
					$this->session->set_flashdata('exception', display('please_try_again'));
				}

				redirect("add_user/$id");
			}


		} else {
			$data['module'] = "dashboard";  
			$data['page']   = "user/form"; 
			if(!empty($id)){
			$data['title']  = display('edit_user');
			$data['user']   = $this->user_model->single($id);
			}

			
			echo Modules::run('template/layout', $data);
		}
	}




	 public function bdtask_deleteuser($id = null) {
        if ($this->user_model->delete($id)) {
      $this->session->set_flashdata('message', display('delete_successfully'));
        } else {
       $this->session->set_flashdata('exception', display('please_try_again'));
        }

        redirect("user_list");
    }



   
}
