<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {
    
    public function __construct()
    {
        parent::__construct();

        // $this->permission->module('inventory')->redirect();
        $this->permission->module()->redirect();
    }
 
    public function index()
    {
        // $this->permission->module('inventory', 'read')->redirect(); 
        $this->permission->module()->read()->redirect(); 
        
        $data['title'] = "Home :: Read";
        $data['module'] = "inventory";  
        $data['page']   = "home";   
        echo Modules::run('template/layout', $data); 
    }

    public function create()
    {
        $this->permission->module()->create()->redirect(); 
        $data['title'] = "Home :: Create";
        $data['module'] = "inventory";  
        $data['page']   = "home";   
        echo Modules::run('template/layout', $data); 
    }
 
    public function update()
    {
        $this->permission->module()->update()->redirect();
        $data['title'] = "Home :: Update";
        $data['module'] = "inventory";  
        $data['page']   = "home";   
        echo Modules::run('template/layout', $data); 
    }
 
    public function delete()
    {
        $this->permission->module()->delete()->redirect(); 
        $data['title'] = "Home :: Delete";
        $data['module'] = "inventory";  
        $data['page']   = "home";   
        echo Modules::run('template/layout', $data); 
    }
 
}
