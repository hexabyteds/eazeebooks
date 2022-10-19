<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['stock']          = "report/report/bdtask_stock_report";
$route['reports/(:num)'] = 'report/report/bdtask_purchase_edit_form/$1';
$route['closing_form']   = "report/report/bdtask_cash_closing";
$route['closing_report'] = "report/report/bdtask_closing_report";
$route['closing_report_search'] = "report/report/bdtask_closing_report_search";
$route['todays_report']  = "report/report/bdtask_todays_report";
$route['todays_customer_received']  = "report/report/bdtask_todays_customer_received";
$route['todays_customerwise_received']  = "report/report/bdtask_customerwise_received";
$route['sales_report']  = "report/report/bdtask_todays_sales_report";
$route['datewise_sales_report']  = "report/report/bdtask_datewise_sales_report";
$route['userwise_sales_report']  = "report/report/bdtask_userwise_sales_report";
$route['invoice_wise_due_report']= "report/report/bdtask_invoice_wise_due_report";
$route['shipping_cost_report']= "report/report/bdtask_shippingcost_report";
$route['purchase_report']     = "report/report/bdtask_purchase_report";
$route['purchase_report_categorywise']= "report/report/bdtask_purchase_report_category_wise";
$route['product_wise_sales_report']= "report/report/bdtask_sale_report_productwise";
$route['category_sales_report']= "report/report/bdtask_categorywise_sales_report";
$route['sales_return']         = "report/report/bdtask_sales_return";
$route['supplier_returns']      = "report/report/bdtask_supplier_return";
$route['tax_report']           = "report/report/bdtask_tax_report";
$route['profit_report']        = "report/report/bdtask_profit_report";

