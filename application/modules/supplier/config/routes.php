<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['add_supplier']         = "supplier/supplier/bdtask_form";
$route['supplier_list']        = "supplier/supplier/index";
$route['edit_supplier/(:num)'] = 'supplier/supplier/bdtask_form/$1';
$route['supplier_ledger']      = "supplier/supplier/bdtask_supplier_ledger";
$route['supplier_ledger/(:num)']= "supplier/supplier/bdtask_supplier_ledger/$1";
$route['supplier_ledgerdata']  = "supplier/supplier/bdtask_supplier_ledgerData";
$route['supplier_ledgerinfo/(:any)']= "supplier/supplier/bdtask_supplier_ledgerinfo/$1";
$route['supplier_advance']     = "supplier/supplier/bdtask_supplier_advance";
$route['supplier_advance_receipt/(:any)/(:num)']= "supplier/supplier/supplier_advancercpt/$1/$1";