<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['tax_setting']       = "tax/tax/bdtask_tax_settings";
$route['update_tax_setting']= "tax/tax/tax_settings_updateform";
$route['income_tax']        = "tax/tax/bdtask_income_tax";
$route['manage_income_tax'] = "tax/tax/manage_income_tax";
$route['edit_income_tax/(:num)'] = "tax/tax/edit_income_tax/$1";
$route['tax_reports']       = "tax/tax/bdtask_tax_report";
$route['invoice_wise_tax_report'] = "tax/tax/invoice_wise_tax_report";