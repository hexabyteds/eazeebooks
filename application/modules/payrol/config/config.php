<?php
// module directory name
$HmvcConfig['payrol']["_title"]       = "Payrol Management System";
$HmvcConfig['payrol']["_description"] = "Simple Payrol System";


// register your module tables
// only register tables are imported while installing the module
$HmvcConfig['payrol']['_database'] = false;
$HmvcConfig['payrol']["_tables"] = array( 
	'tbl_category',
	'tbl_invoice',  
	'tbl_supplier',  
);
