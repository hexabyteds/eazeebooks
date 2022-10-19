<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['add_quotation']            = "quotation/quotation/bdtask_quotation_form";
$route['manage_quotation']         = "quotation/quotation/manage_quotation";
$route['manage_quotation/(:num)']  = "quotation/quotation/manage_quotation/$1";
$route['quotation_to_sales/(:any)']= "quotation/quotation/quotation_to_sales/$1";
$route['quotation_details/(:any)']= "quotation/quotation/quotation_details_data/$1";
$route['edit_quotation/(:any)']   = "quotation/quotation/quotation_edit/$1";


