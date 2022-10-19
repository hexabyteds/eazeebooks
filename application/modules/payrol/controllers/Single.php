<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Single extends MX_Controller {
    
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

        $data['title'] = "Single :: Read";
        $data['module'] = "inventory";  
        $data['page']   = "home";   
        echo Modules::run('template/layout', $data); 
    }
 
 
}
