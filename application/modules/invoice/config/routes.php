<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['add_invoice']         = "invoice/invoice/bdtask_invoice_form";
$route['pos_invoice']         = "invoice/invoice/bdtask_pos_invoice";
$route['gui_pos']             = "invoice/invoice/bdtask_gui_pos";
$route['invoice_list']        = "invoice/invoice/bdtask_invoice_list";
$route['invoice_details/(:num)'] = 'invoice/invoice/bdtask_invoice_details/$1';
$route['invoice_pad_print/(:num)'] = 'invoice/invoice/bdtask_invoice_pad_print/$1';
$route['pos_print/(:num)']    = 'invoice/invoice/bdtask_invoice_pos_print/$1';
$route['invoice_pos_print']    = 'invoice/invoice/bdtask_pos_print_direct';
$route['download_invoice/(:num)']  = 'invoice/invoice/bdtask_download_invoice/$1';
$route['invoice_edit/(:num)'] = 'invoice/invoice/bdtask_edit_invoice/$1';
$route['invoice_print'] = 'invoice/invoice/invoice_inserted_data_manual';

