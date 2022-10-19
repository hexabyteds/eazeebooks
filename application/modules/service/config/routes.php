<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['add_service']           = "service/service/bdtask_service_form";
$route['manage_service']        = "service/service/bdtask_manage_service";
$route['edit_service/(:num)']   = "service/service/bdtask_edit_service/$1";
$route['add_service_invoice']   = "service/service/bdtask_service_invoice_form";
$route['service_details/(:any)']= "service/service/service_invoice_data/$1";
$route['manage_service_invoice']= "service/service/manage_service_invoice";
$route['manage_service_invoice/(:num)']= "service/service/manage_service_invoice/$1";
$route['edit_service_invoice/(:any)']= "service/service/service_invoice_edit/$1";


