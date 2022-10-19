<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 #------------------------------------    
    # Author: Bdtask Ltd
    # Author link: https://www.bdtask.com/
    # Dynamic style php file
    # Developed by :Isahaq
    #------------------------------------    

class Permission extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->db->query('SET SESSION sql_mode = ""');
        $this->load->model('permission_model');
      if (! $this->session->userdata('isLogIn'))
            redirect('login');
    
    }



    public function create()

    {
        $data = array(
            'type' => $this->input->post('role_id',true),
        );
        $insert_id=$this->permission_model->insert_user_entry($data);
        /*-----------------------------------*/

        $fk_module_id = $this->input->post('fk_module_id',true);
        $create       = $this->input->post('create',true);
        $read         = $this->input->post('read',true);
        $update       = $this->input->post('update',true);
        $delete       = $this->input->post('delete',true);


        $new_array = array();
        for ($m = 0; $m < sizeof($fk_module_id); $m++) {
            for ($i = 0; $i < sizeof($fk_module_id[$m]); $i++) {
                for ($j = 0; $j < sizeof($fk_module_id[$m][$i]); $j++) {
                    $dataStore = array(
                        'role_id'      => $insert_id,
                        'fk_module_id' => $fk_module_id[$m][$i][$j],
                        'create'       => (!empty($create[$m][$i][$j]) ? $create[$m][$i][$j] : 0),
                        'read'         => (!empty($read[$m][$i][$j]) ? $read[$m][$i][$j] : 0),
                        'update'       => (!empty($update[$m][$i][$j]) ? $update[$m][$i][$j] : 0),
                        'delete'       => (!empty($delete[$m][$i][$j]) ? $delete[$m][$i][$j] : 0),
                    );
                    array_push($new_array, $dataStore);
                }
            }
        }
        /*-----------------------------------*/
            if ($this->permission_model->create($new_array)) {
                $id = $this->db->insert_id();
                $this->session->set_flashdata('message', display('role_permission_added_successfully'));
            }
            else {
                $this->session->set_flashdata('exception', display('please_try_again'));
            }
            redirect("add_role");
    }



    public function bdtask_user_roleassign(){
    $data['title']     = display('user_assign_role');
    $data['user']      = $this->permission_model->user();
    $data['user_list'] = $this->permission_model->user_list();
    $data['module']    = "dashboard";  
    $data['page']      = "role/assign_form";  
    echo Modules::run('template/layout', $data); 
    }

    public function usercreate($id = null)
    {
        $data['title'] = display('list_Role_setup');
        #-------------------------------#
        $this->form_validation->set_rules('user_id', display('user_id'), 'required');
        $this->form_validation->set_rules('user_type', display('user_type'), 'required|max_length[30]');

        $user_id     = $this->input->post('user_id',true);
        $roleid      = $this->input->post('user_type',true);
        $create_by   = $this->session->userdata('id');
        $create_date = date('Y-m-d h:i:s');
        $check_exist = $this->permission_model->check_role($user_id,$roleid);
        if($check_exist > 0){
        $this->session->set_flashdata('exception','Already Assined This Role');
        redirect("assign_role");
        }
        #-------------------------------#
        $data['role_data'] = (Object)$postData = array(
            'id'         => $this->input->post('id',TRUE),
            'user_id'    => $user_id,
            'roleid'     => $roleid,
            'createby'   => $create_by,
            'createdate' => $create_date
        );
        if ($this->form_validation->run()) {
            
                if ($this->permission_model->role_create($postData)) {
                    $id = $this->db->insert_id();
                    $this->session->set_flashdata('message', display('save_successfully'));
                    
                } else {

      $this->session->set_flashdata('exception', display('please_try_again'));
                }
                
        redirect("role_list");
        } else {
           $this->session->set_flashdata('exception', validation_errors());
           redirect("role_list");
        }
    }

    public function select_to_rol($id)
    {
        $role_reult = $this->db->select('sec_role.*,sec_userrole.*')
            ->from('sec_userrole')
            ->join('sec_role', 'sec_userrole.roleid=sec_role.id')
            ->where('sec_userrole.user_id', $id)
            ->group_by('sec_role.type')
            ->get()
            ->result();
        if ($role_reult) {
            $html = "";
            $html .= "<table id=\"dataTableExample2\" class=\"table table-bordered table-striped table-hover\">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>role_name</th>
                            </tr>
                        </thead>
                       <tbody>";
            $i = 1;
            foreach ($role_reult as $key => $role) {
                $html .= "<tr>
                                <td>$i</td>
                                <td>$role->type</td>
                            </tr>";
                $i++;
            }
            $html .= "</tbody>
                    </table>";
        }
        echo json_encode($html);
    }



    public function bdtask_add_role(){
    $data['title']    = display('add_role');
    $data['accounts'] = $this->permission_model->permission_list();
    $data['module']   = "dashboard";  
    $data['page']     = "role/role_form";  
    echo Modules::run('template/layout', $data); 
    }
    public function role_list(){

        $content = $this->lpermission->role_view();
        $this->template->full_admin_html_view($content);
    }

    public function bdtask_role_list(){
    $data['title']      = display('role_list');
    $user_count         = $this->permission_model->user_count();
    $user_list          = $this->permission_model->user_list();
    $data['user_count'] = $user_count;
    $data['user_list']  = $user_list;
    $data['module']     = "dashboard";  
    $data['page']       = "role/role_view_form";  
    echo Modules::run('template/layout', $data); 
    }

    public function bdtask_edit_role($id){
    $role               = $this->permission_model->role($id);
    $module             = $this->permission_model->module();
    $role_detail        = $this->permission_model->role_edit($id);
    $data['title']      = display('edit_role');
    $data['role']       = $role;
    $data['moduless']   = $module;
    $data['role_detail']= $role_detail;
    $data['module']     = "dashboard";  
    $data['page']       = "role/edit_role_form";  
    echo Modules::run('template/layout', $data); 
    }


    public function bdtask_role_delete($id){
        $role=$this->permission_model->delete_role($id);
        $role_per=$this->permission_model->delete_role_permission($id);

             $data=array(
                 'role'     => $role,
                 'role_per' => $role_per
             );

        if($data){
            $this->session->set_flashdata(array('message' => display('delete_successfully')));
        }
        else{
            $this->session->set_flashdata('exception', display('please_try_again'));
        }
        redirect("role_list");
    }


    public function update(){
        $id = $this->input->post('rid',TRUE);

        $data = array(
            'type' => $this->input->post('role_id',TRUE),
            'id'   => $this->input->post('rid',TRUE),
        );

        $this->permission_model->role_update($data,$id);


        $fk_module_id = $this->input->post('fk_module_id',true);
        $create       = $this->input->post('create',true);
        $read         = $this->input->post('read',true);
        $update       = $this->input->post('update',true);
        $delete       = $this->input->post('delete',true);


        $new_array = array();
        for ($m = 0; $m < sizeof($fk_module_id); $m++) {
            for ($i = 0; $i < sizeof($fk_module_id[$m]); $i++) {
                for ($j = 0; $j < sizeof($fk_module_id[$m][$i]); $j++) {
                    $dataStore = array(
                        'role_id'      => $this->input->post('rid',TRUE),
                        'fk_module_id' => $fk_module_id[$m][$i][$j],
                        'create'       => (!empty($create[$m][$i][$j]) ? $create[$m][$i][$j] : 0),
                        'read'         => (!empty($read[$m][$i][$j]) ? $read[$m][$i][$j] : 0),
                        'update'       => (!empty($update[$m][$i][$j]) ? $update[$m][$i][$j] : 0),
                        'delete'       => (!empty($delete[$m][$i][$j]) ? $delete[$m][$i][$j] : 0),
                    );
                    array_push($new_array, $dataStore);
                }
            }
        }
        if($this->permission_model->create($new_array)){
            $id = $this->db->insert_id();
            $this->session->set_flashdata('message', display('role_permission_updated_successfully'));
        }
        else{
            $this->session->set_flashdata('exception', display('please_try_again'));
        }
        redirect("role_list");
    }


   
}