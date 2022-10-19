<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 #------------------------------------    
    # Author: Bdtask Ltd
    # Author link: https://www.bdtask.com/
    # Dynamic style php file
    # Developed by :Isahaq
    #------------------------------------    

class Padprint extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array(
			'print_model'
		));
		if (!$this->session->userdata('isAdmin')) 
		redirect('isLogIn'); 
	}
 

	public function index()
	{
		$this->check_setting();
		$data['title']       = "print Setting";
        $data['module']      = "dashboard";
        $data['print_data']  =  $this->print_model->read();
        $data['page']        = "print/setting";
        echo modules::run('template/layout', $data);
	}

	public function bdtask_update_print_setting()
	{
		$this->form_validation->set_rules('header',display('header'),'required|max_length[50]');
		$this->form_validation->set_rules('footer', display('footer') ,'required|max_length[255]');

		$data['setting'] = (object)$postData = [
	'id'              => $this->input->post('id',true),
    'header'          => $this->input->post('header',true),
    'footer'          => $this->input->post('footer',true),
		]; 
		if ($this->form_validation->run() === true) {
					if (empty($postData['id'])) {
				if ($this->print_model->create($postData)) {
					#set success message
					$this->session->set_flashdata('message',display('save_successfully'));
				} else {
					#set exception message
					$this->session->set_flashdata('exception',display('please_try_again'));
				}
			} else {
				if ($this->print_model->update($postData)) {
					#set success message
					$this->session->set_flashdata('message',display('update_successfully'));
				} else {
					#set exception message
					$this->session->set_flashdata('exception', display('please_try_again'));
				} 
			}
 
			redirect('print_setting');
		}else{
		$this->session->set_flashdata('exception', validation_errors());
		redirect('print_setting');	
		}
	}

	public function check_setting()
	{
		if ($this->db->count_all('print_setting') == 0) {
			$this->db->insert('print_setting',[
				'header' => 200,
				'footer' => 100,
			]);
		}
	}

}