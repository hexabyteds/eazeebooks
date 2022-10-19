<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['coa']             = "account/account/bdtask_chart_of_account";
$route['coa_test']             = "account/account/bdtask_chart_of_account_test";
$route['opening_balance'] = "account/account/bdtask_opening_balance_form";
$route['supplier_payment']= "account/account/bdtask_supplier_payment";
$route['supplier_payment_received/(:any)/(:any)/(:any)'] = 'account/account/supplier_paymentreceipt/$1/$1/$1';
$route['customer_payment_receipt/(:any)/(:any)/(:any)'] = 'account/account/customer_receipt/$1/$1/$1';
$route['customer_receive']= "account/account/customer_receive";
$route['cash_adjustment'] = "account/account/bdtask_cash_adjustment";
$route['debit_voucher']   = "account/account/bdtask_debit_voucher";
$route['credit_voucher']   = "account/account/bdtask_credit_voucher";
$route['contra_voucher']  = "account/account/bdtask_contra_voucher";
$route['journal_voucher'] = "account/account/bdtask_journal_voucher";
$route['voucher_list']    = "account/account/bdtask_voucher_list";
$route['edit_voucher/(:any)'] = 'account/account/voucher_update/$1';
$route['cash_book']       = "account/account/bdtask_cash_book";
$route['inventory_ledger']= "account/account/bdtask_inventory_ledger";
$route['bank_book']       = "account/account/bdtask_bank_book";
$route['general_ledger_form']= "account/account/bdtask_general_ledger";
$route['general_ledger']  = "account/account/accounts_report_search";
$route['trial_balance_form']= "account/account/bdtask_trial_balance_form";
$route['trial_balance']   = "account/account/bdtask_trial_balance_report";
$route['profit_loss_form']= "account/account/bdtask_profit_loss_report_form";
$route['profit_loss_report']= "account/account/bdtask_profit_loss_report_search";
$route['cashflow_form']   = "account/account/bdtask_cash_flow_form";
$route['cash_flow']      = "account/account/cash_flow_report_search";
$route['coa_print']      = "account/account/bdtask_coa_print";
$route['balance_sheet']      = "account/account/bdtask_balance_sheet";

