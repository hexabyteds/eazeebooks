CREATE TABLE `tbl_category` (
`category_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
`category_name` varchar(255) NOT NULL,
`posting_id` int(11) NOT NULL,
`active` tinyint(1) NOT NULL DEFAULT '1',
PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;


CREATE TABLE `tbl_invoice` (
  `invoice_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_no` varchar(255) DEFAULT NULL,
  `real_invoice` varchar(255) DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`invoice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `tbl_supplier` (
`supplier_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
`supplier_name` varchar(120) NOT NULL,
`address` varchar(250) NOT NULL,
`phone_no` varchar(30) DEFAULT NULL,
`mobile_no` varchar(30) DEFAULT NULL,
`email` varchar(150) DEFAULT NULL,
`website` varchar(50) DEFAULT NULL,
`date` varchar(50) DEFAULT NULL,
`posting_id` int(11) NOT NULL,
`active` tinyint(1) NOT NULL DEFAULT '1',
PRIMARY KEY (`supplier_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
