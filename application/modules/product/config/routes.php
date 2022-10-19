<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['category_form']        = "product/product/bdtask_category_form";
$route['category_form/(:num)'] = 'product/product/bdtask_category_form/$1';
$route['category_list']        = "product/product/bdtask_category_list";

$route['unit_form']            = "product/product/bdtask_unit_form";
$route['unit_form/(:num)']     = 'product/product/bdtask_unit_form/$1';
$route['unit_list']            = "product/product/bdtask_unit_list";

$route['product_form']         = "product/product/bdtask_product_form";
$route['product_form/(:any)']  = "product/product/bdtask_product_form/$1";
$route['product_list']         = "product/product/bdtask_product_list";
$route['barcode/(:any)']       = "product/product/barcode_print/$1";
$route['qrcode/(:any)']        = "product/product/qrgenerator/$1";
$route['bulk_products']        = "product/product/bdtask_csv_product";
$route['product_details/(:any)']= "product/product/bdtask_product_details/$1";

