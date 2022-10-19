#
# TABLE STRUCTURE FOR: acc_coa
#

DROP TABLE IF EXISTS `acc_coa`;

CREATE TABLE `acc_coa` (
  `HeadCode` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `HeadName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PHeadName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `HeadLevel` int(11) NOT NULL,
  `IsActive` tinyint(1) NOT NULL,
  `IsTransaction` tinyint(1) NOT NULL,
  `IsGL` tinyint(1) NOT NULL,
  `HeadType` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `IsBudget` tinyint(1) NOT NULL,
  `IsDepreciation` tinyint(1) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `DepreciationRate` decimal(18,2) NOT NULL,
  `CreateBy` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `CreateDate` datetime NOT NULL,
  `UpdateBy` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `UpdateDate` datetime NOT NULL,
  PRIMARY KEY (`HeadName`),
  KEY `HeadCode` (`HeadCode`),
  KEY `customer_id` (`customer_id`),
  KEY `supplier_id` (`supplier_id`),
  KEY `service_id` (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('10204', '', 'Current Asset', '2', '1', '1', '1', 'A', '0', '0', NULL, NULL, NULL, '0.00', '1', '2022-03-20 14:07:10', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102030000001', '1-fh rthr', 'Customer Receivable', '4', '1', '1', '0', 'A', '0', '0', '1', NULL, NULL, '0.00', '1', '2019-11-16 08:44:42', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('502000001', '1-Raies Cloth Shop', 'Account Payable', '3', '1', '1', '0', 'L', '0', '0', NULL, '1', NULL, '0.00', '1', '2021-11-03 09:55:34', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102030000008', '10-fh rthr', 'Customer Receivable', '4', '1', '1', '0', 'A', '0', '0', '10', NULL, NULL, '0.00', '1', '2021-11-24 11:31:07', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102030000009', '12-fh rthr', 'Customer Receivable', '4', '1', '1', '0', 'A', '0', '0', '12', NULL, NULL, '0.00', '1', '2021-11-24 11:43:01', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102030000010', '13-mohd raies', 'Customer Receivable', '4', '1', '1', '0', 'A', '0', '0', '13', NULL, NULL, '0.00', '1', '2021-12-02 10:18:19', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102030000011', '14-mohd raies', 'Customer Receivable', '4', '1', '1', '0', 'A', '0', '0', '14', NULL, NULL, '0.00', '1', '2021-12-02 10:21:22', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102030000012', '15-fh rthr', 'Customer Receivable', '4', '1', '1', '0', 'A', '0', '0', '15', NULL, NULL, '0.00', '1', '2021-12-02 10:21:54', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102030000013', '16-fh rthr', 'Customer Receivable', '4', '1', '1', '0', 'A', '0', '0', '16', NULL, NULL, '0.00', '1', '2021-12-02 10:22:52', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102030000014', '17-fh rthr', 'Customer Receivable', '4', '1', '1', '0', 'A', '0', '0', '17', NULL, NULL, '0.00', '1', '2021-12-02 10:24:35', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102030000015', '18-test', 'Customer Receivable', '4', '1', '1', '0', 'A', '0', '0', '18', NULL, NULL, '0.00', '1', '2021-12-02 10:44:09', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102030000016', '19-mohd raies', 'Customer Receivable', '4', '1', '1', '0', 'A', '0', '0', '19', NULL, NULL, '0.00', '1', '2021-12-02 10:46:02', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('502040001', '2-', 'Employee Ledger', '3', '1', '1', '0', 'L', '0', '0', NULL, NULL, NULL, '0.00', '1', '2022-03-19 16:00:15', '1', '2022-03-19 16:00:40');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('502000002', '2-Aliyu Abubakar ', 'Account Payable', '3', '1', '1', '0', 'L', '0', '0', NULL, '2', NULL, '0.00', '1', '2022-03-02 09:02:08', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102030000002', '2-mohd raies', 'Customer Receivable', '4', '1', '1', '0', 'A', '0', '0', '2', NULL, NULL, '0.00', '1', '2021-11-05 07:19:47', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102030000017', '20-fh rthr', 'Customer Receivable', '4', '1', '1', '0', 'A', '0', '0', '20', NULL, NULL, '0.00', '1', '2021-12-02 10:56:06', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102030000018', '21-mohd raies', 'Customer Receivable', '4', '1', '1', '0', 'A', '0', '0', '21', NULL, NULL, '0.00', '1', '2021-12-06 06:18:44', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102030000019', '22-احمد', 'Customer Receivable', '4', '1', '1', '0', 'A', '0', '0', '22', NULL, NULL, '0.00', '1', '2022-02-22 11:51:56', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102030000020', '23-test', 'Customer Receivable', '4', '1', '1', '0', 'A', '0', '0', '23', NULL, NULL, '0.00', '1', '2022-03-19 12:10:30', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102030000021', '24-Abdullah', 'Customer Receivable', '4', '1', '1', '0', 'A', '0', '0', '24', NULL, NULL, '0.00', '1', '2022-04-04 10:19:50', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102030000022', '25-Jamal Al Harthy', 'Customer Receivable', '4', '1', '1', '0', 'A', '0', '0', '25', NULL, NULL, '0.00', '1', '2022-04-07 09:42:54', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('502000003', '3-Aliyu Abubakar ', 'Account Payable', '3', '1', '1', '0', 'L', '0', '0', NULL, '3', NULL, '0.00', '1', '2022-03-02 09:02:10', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102030000003', '3-mohd raies', 'Customer Receivable', '4', '1', '1', '0', 'A', '0', '0', '3', NULL, NULL, '0.00', '1', '2021-11-23 05:49:57', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('502040002', '3-SyedSyed', 'Employee Ledger', '3', '1', '1', '0', 'L', '0', '0', NULL, NULL, NULL, '0.00', '1', '2022-05-25 13:06:47', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('502000004', '4-Aliyu Abubakar ', 'Account Payable', '3', '1', '1', '0', 'L', '0', '0', NULL, '4', NULL, '0.00', '1', '2022-03-02 09:02:11', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102030000004', '4-fh rthr', 'Customer Receivable', '4', '1', '1', '0', 'A', '0', '0', '4', NULL, NULL, '0.00', '1', '2021-11-24 11:20:35', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102030000005', '5-fh rthr', 'Customer Receivable', '4', '1', '1', '0', 'A', '0', '0', '5', NULL, NULL, '0.00', '1', '2021-11-24 11:24:36', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('502000005', '5-ll', 'Account Payable', '3', '1', '1', '0', 'L', '0', '0', NULL, '5', NULL, '0.00', '1', '2022-04-04 10:35:00', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102030000006', '7-fh rthr', 'Customer Receivable', '4', '1', '1', '0', 'A', '0', '0', '7', NULL, NULL, '0.00', '1', '2021-11-24 11:27:16', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102030000007', '9-fh rthr', 'Customer Receivable', '4', '1', '1', '0', 'A', '0', '0', '9', NULL, NULL, '0.00', '1', '2021-11-24 11:28:46', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('50202', 'Account Payable', 'Current Liabilities', '2', '1', '0', '1', 'L', '0', '0', NULL, NULL, NULL, '0.00', 'admin', '2015-10-15 19:50:43', '', '2019-09-05 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('10203', 'Account Receivable', 'Current Asset', '2', '1', '0', '0', 'A', '0', '0', NULL, NULL, NULL, '0.00', '', '2019-09-05 00:00:00', 'admin', '2013-09-18 15:29:35');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1', 'Assets', 'COA', '0', '1', '0', '0', 'A', '0', '0', NULL, NULL, NULL, '0.00', '', '2019-09-05 00:00:00', '', '2019-09-05 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('10201', 'Cash & Cash Equivalent', 'Current Asset', '2', '1', '0', '1', 'A', '0', '0', NULL, NULL, NULL, '0.00', '1', '2019-06-25 13:47:29', 'admin', '2015-10-15 15:57:55');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1020102', 'Cash At Bank', 'Cash & Cash Equivalent', '3', '1', '0', '1', 'A', '0', '0', NULL, NULL, NULL, '0.00', '1', '2019-03-18 06:08:18', 'admin', '2015-10-15 15:32:42');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1020101', 'Cash In Hand', 'Cash & Cash Equivalent', '3', '1', '1', '0', 'A', '0', '0', NULL, NULL, NULL, '0.00', '1', '2019-01-26 07:38:48', 'admin', '2016-05-23 12:05:43');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102', 'Current Asset', 'Assets', '1', '1', '0', '0', 'A', '0', '0', NULL, NULL, NULL, '0.00', '', '2019-09-05 00:00:00', 'admin', '2018-07-07 11:23:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('502', 'Current Liabilities', 'Liabilities', '1', '1', '0', '0', 'L', '0', '0', NULL, NULL, NULL, '0.00', 'anwarul', '2014-08-30 13:18:20', 'admin', '2015-10-15 19:49:21');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1020301', 'Customer Receivable', 'Account Receivable', '3', '1', '0', '1', 'A', '0', '0', NULL, NULL, NULL, '0.00', '1', '2019-01-24 12:10:05', 'admin', '2018-07-07 12:31:42');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('401', 'Default expense', 'Expence', '1', '1', '1', '0', 'E', '1', '1', NULL, NULL, NULL, '1.00', '1', '2019-12-21 09:00:55', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('50204', 'Employee Ledger', 'Current Liabilities', '2', '1', '0', '1', 'L', '0', '0', NULL, NULL, NULL, '0.00', '1', '2019-04-08 10:36:32', '', '2019-09-05 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('403', 'Employee Salary', 'Expence', '1', '1', '1', '0', 'E', '0', '1', NULL, NULL, NULL, '1.00', '1', '2019-06-17 11:44:52', '', '2019-09-05 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('2', 'Equity', 'COA', '0', '1', '0', '0', 'L', '0', '0', NULL, NULL, NULL, '0.00', '', '2019-09-05 00:00:00', '', '2019-09-05 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4', 'Expence', 'COA', '0', '1', '0', '0', 'E', '0', '0', NULL, NULL, NULL, '0.00', '', '2019-09-05 00:00:00', '', '2019-09-05 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102010202', 'Faysal Bank', 'Cash At Bank', '4', '1', '1', '0', 'A', '0', '0', NULL, NULL, NULL, '0.00', '1', '2022-04-04 10:47:35', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('3', 'Income', 'COA', '0', '1', '0', '0', 'I', '0', '0', NULL, NULL, NULL, '0.00', '', '2019-09-05 00:00:00', '', '2019-09-05 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('10107', 'Inventory', 'Non Current Assets', '1', '1', '0', '0', 'A', '0', '0', NULL, NULL, NULL, '0.00', '2', '2018-07-07 15:21:58', '', '2019-09-05 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('5', 'Liabilities', 'COA', '0', '1', '0', '0', 'L', '0', '0', NULL, NULL, NULL, '0.00', 'admin', '2013-07-04 12:32:07', 'admin', '2015-10-15 19:46:54');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1020302', 'Loan Receivable', 'Account Receivable', '3', '1', '0', '1', 'A', '0', '0', NULL, NULL, NULL, '0.00', '1', '2019-01-26 07:37:20', '', '2019-09-05 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('101', 'Non Current Assets', 'Assets', '1', '1', '0', '0', 'A', '0', '0', NULL, NULL, NULL, '0.00', '', '2019-09-05 00:00:00', 'admin', '2015-10-15 15:29:11');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('501', 'Non Current Liabilities', 'Liabilities', '1', '1', '0', '0', 'L', '0', '0', NULL, NULL, NULL, '0.00', 'anwarul', '2014-08-30 13:18:20', 'admin', '2015-10-15 19:49:21');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('402', 'Product Purchase', 'Expence', '1', '0', '0', '0', 'E', '0', '0', NULL, NULL, NULL, '0.00', '2', '2018-07-07 14:00:16', 'admin', '2015-10-15 18:37:42');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('303', 'Product Sale', 'Income', '1', '1', '1', '0', 'I', '0', '0', NULL, NULL, NULL, '0.00', '1', '2019-06-17 08:22:42', '', '2019-09-05 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('304', 'Service Income', 'Income', '1', '1', '1', '0', 'I', '0', '0', NULL, NULL, NULL, '0.00', '1', '2019-06-17 11:31:11', '', '2019-09-05 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('10108', 'Service Receive', 'Non Current Assets', '2', '1', '1', '1', 'A', '0', '0', NULL, NULL, NULL, '0.00', '2', '2020-10-11 06:27:59', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102010201', 'State of India', 'Cash At Bank', '4', '1', '1', '0', 'A', '0', '0', NULL, NULL, NULL, '0.00', '1', '2021-11-08 11:23:13', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('50203', 'Tax', 'Current Liabilities', '2', '1', '0', '0', 'L', '0', '0', NULL, NULL, NULL, '0.00', '2', '2020-10-01 11:57:11', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('101080001', 'سالم المري-1', 'Service Receive', '3', '1', '1', '0', 'A', '1', '1', NULL, NULL, '1', '1.00', '1', '2022-03-20 14:12:25', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `customer_id`, `supplier_id`, `service_id`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4000001', 'شراء سياره للموقع', 'Expence', '1', '1', '1', '0', 'E', '1', '1', NULL, NULL, NULL, '1.00', '1', '2022-04-01 15:05:17', '', '0000-00-00 00:00:00');


#
# TABLE STRUCTURE FOR: acc_transaction
#

DROP TABLE IF EXISTS `acc_transaction`;

CREATE TABLE `acc_transaction` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VNo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Vtype` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `VDate` date DEFAULT NULL,
  `COAID` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Narration` text COLLATE utf8_unicode_ci,
  `Debit` decimal(18,2) DEFAULT NULL,
  `Credit` decimal(18,2) DEFAULT NULL,
  `IsPosted` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_opening` int(11) NOT NULL DEFAULT '0',
  `CreateBy` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CreateDate` datetime DEFAULT NULL,
  `UpdateBy` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `UpdateDate` datetime DEFAULT NULL,
  `IsAppove` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`),
  KEY `COAID` (`COAID`)
) ENGINE=InnoDB AUTO_INCREMENT=388 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('1', 'J47OZ5LW2X', 'PR Balance', '2021-11-03', '502000001', 'supplier debit For TEST', '543543534.00', '0.00', '1', '0', '1', '2021-11-03 09:55:34', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('2', 'J47OZ5LW2X', 'PR Balance', '2021-11-03', '10107', 'Inventory credit For Old sale ForTEST', '0.00', '543543534.00', '1', '0', '1', '2021-11-03 09:55:34', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('3', 'JX2RMJ34DJ', 'PR Balance', '2021-11-03', '502000001', 'supplier debit For TEST', '3565453.00', '0.00', '1', '0', '1', '2021-11-03 09:59:11', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('4', 'JX2RMJ34DJ', 'PR Balance', '2021-11-03', '10107', 'Inventory credit For Old sale ForTEST', '0.00', '3565453.00', '1', '0', '1', '2021-11-03 09:59:11', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('5', 'DRB49GJ9VS', 'PR Balance', '2021-11-05', '102030000002', 'Customer debit For mohd raies', '435345.00', '0.00', '1', '0', '1', '2021-11-05 07:19:47', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('6', 'DRB49GJ9VS', 'PR Balance', '2021-11-05', '10107', 'Inventory credit For Old sale Formohd raies', '0.00', '435345.00', '1', '0', '1', '2021-11-05 07:19:47', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('13', '4833483761', 'INV', '2021-11-05', '10107', 'Inventory credit For Invoice No1000', '0.00', '0.00', '1', '0', '1', '2021-11-05 10:28:16', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('14', '4833483761', 'INVOICE', '2021-11-05', '303', 'Sale Income From Invoice NO - 1000 Customer Walking Customer', '0.00', '-509.00', '1', '0', '1', '2021-11-05 10:28:16', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('15', '4833483761', 'INV', '2021-11-05', '102030000001', 'Customer debit For Invoice NO - 1000 customer-  Walking Customer', '-509.00', '0.00', '1', '0', '1', '2021-11-05 10:28:16', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('16', '4833483761', 'INV', '2021-11-05', '102030000001', 'Customer credit for Paid Amount For Invoice No -1000 Customer Walking Customer', '0.00', '-509.00', '1', '0', '1', '2021-11-05 10:28:16', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('17', '4833483761', 'INV', '2021-11-05', '1020101', 'Cash in Hand for sale for Invoice No -1000 Customer Walking Customer', '-509.00', '0.00', '1', '0', '1', '2021-11-05 10:28:16', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('18', 'PM-1', 'PM', '2021-11-08', '502000001', '', '509.00', '0.00', '1', '0', '1', '2021-11-08 11:20:12', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('19', 'PM-1', 'PM', '2021-11-08', '1020101', 'Paid to Raies Cloth Shop', '0.00', '509.00', '1', '0', '1', '2021-11-08 11:20:12', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('20', '20211108122403', 'Purchase', '2021-11-08', '10107', 'Inventory Debit For Supplier Raies Cloth Shop', '28000.00', '0.00', '1', '0', '1', '2021-11-08 12:24:03', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('21', '20211108122403', 'Purchase', '2021-11-08', '502000001', 'Supplier .Raies Cloth Shop', '0.00', '28000.00', '1', '0', '1', '2021-11-08 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('22', '8159695128', 'INV', '2021-11-08', '10107', 'Inventory credit For Invoice No', '0.00', '300.00', '1', '0', '1', '2021-11-08 12:27:22', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('23', '8159695128', 'INV', '2021-11-08', '102030000001', 'Customer debit For Invoice No -   Customer Walking Customer', '370.00', '0.00', '1', '0', '1', '2021-11-08 12:27:22', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('24', '8159695128', 'INVOICE', '2021-11-08', '303', 'Sale Income For Invoice NO -  Customer Walking Customer', '0.00', '70.00', '1', '0', '1', '2021-11-08 12:27:22', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('25', '8159695128', 'INVOICE', '2021-11-08', '50203', 'Sale Income For Invoice NO -  Customer Walking Customer', '0.00', '0.00', '1', '0', '1', '2021-11-08 12:27:22', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('37', '9174511958', 'INV', '2021-11-09', '10107', 'Inventory credit For Invoice No1002', '0.00', '300.00', '1', '0', '1', '2021-11-09 08:21:50', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('38', '9174511958', 'INVOICE', '2021-11-09', '303', 'Sale Income From Invoice NO - 1002 Customer mohd raies', '0.00', '330.00', '1', '0', '1', '2021-11-09 08:21:50', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('39', '9174511958', 'INV', '2021-11-09', '102030000002', 'Customer debit For Invoice NO - 1002 customer-  mohd raies', '330.00', '0.00', '1', '0', '1', '2021-11-09 08:21:50', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('40', '9174511958', 'INV', '2021-11-09', '102030000002', 'Customer credit for Paid Amount For Invoice No -1002 Customer mohd raies', '0.00', '330.00', '1', '0', '1', '2021-11-09 08:21:50', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('41', '9174511958', 'INV', '2021-11-09', '1020101', 'Cash in Hand for sale for Invoice No -1002 Customer mohd raies', '330.00', '0.00', '1', '0', '1', '2021-11-09 08:21:50', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('42', '3719386695', 'INV', '2021-11-09', '10107', 'Inventory credit For Invoice No', '0.00', '300.00', '1', '0', '1', '2021-11-09 10:05:25', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('43', '3719386695', 'INV', '2021-11-09', '102030000002', 'Customer debit For Invoice No -   Customer mohd raies', '400.00', '0.00', '1', '0', '1', '2021-11-09 10:05:25', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('44', '3719386695', 'INVOICE', '2021-11-09', '303', 'Sale Income For Invoice NO -  Customer mohd raies', '0.00', '100.00', '1', '0', '1', '2021-11-09 10:05:25', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('45', '3719386695', 'INVOICE', '2021-11-09', '50203', 'Sale Income For Invoice NO -  Customer mohd raies', '0.00', '0.00', '1', '0', '1', '2021-11-09 10:05:25', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('46', '20211109124956', 'Purchase', '2021-11-09', '10107', 'Inventory Debit For Supplier Raies Cloth Shop', '19000.00', '0.00', '1', '0', '1', '2021-11-09 12:49:56', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('47', '20211109124956', 'Purchase', '2021-11-09', '502000001', 'Supplier .Raies Cloth Shop', '0.00', '19000.00', '1', '0', '1', '2021-11-09 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('48', '20211109124956', 'Purchase', '2021-11-09', '1020101', 'Cash in Hand For Supplier Raies Cloth Shop', '0.00', '10000.00', '1', '0', '1', '2021-11-09 12:49:56', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('49', '20211109124956', 'Purchase', '2021-11-09', '502000001', 'Supplier .Raies Cloth Shop', '10000.00', '0.00', '1', '0', '1', '2021-11-09 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('50', '6659323128', 'INV', '2021-11-09', '10107', 'Inventory credit For Invoice No', '0.00', '2000.00', '1', '0', '1', '2021-11-09 12:53:10', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('51', '6659323128', 'INV', '2021-11-09', '102030000002', 'Customer debit For Invoice No -   Customer mohd raies', '4000.00', '0.00', '1', '0', '1', '2021-11-09 12:53:10', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('52', '6659323128', 'INVOICE', '2021-11-09', '303', 'Sale Income For Invoice NO -  Customer mohd raies', '0.00', '2000.00', '1', '0', '1', '2021-11-09 12:53:10', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('53', '6659323128', 'INVOICE', '2021-11-09', '50203', 'Sale Income For Invoice NO -  Customer mohd raies', '0.00', '0.00', '1', '0', '1', '2021-11-09 12:53:10', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('54', '8674986371', 'INV', '2021-11-09', '10107', 'Inventory credit For Invoice No', '0.00', '3000.00', '1', '0', '1', '2021-11-09 12:58:40', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('55', '8674986371', 'INV', '2021-11-09', '102030000002', 'Customer debit For Invoice No -   Customer mohd raies', '5000.00', '0.00', '1', '0', '1', '2021-11-09 12:58:40', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('56', '8674986371', 'INVOICE', '2021-11-09', '303', 'Sale Income For Invoice NO -  Customer mohd raies', '0.00', '2000.00', '1', '0', '1', '2021-11-09 12:58:40', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('57', '8674986371', 'INVOICE', '2021-11-09', '50203', 'Sale Income For Invoice NO -  Customer mohd raies', '0.00', '0.00', '1', '0', '1', '2021-11-09 12:58:40', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('58', '2249773116', 'INV', '2021-11-09', '10107', 'Inventory credit For Invoice No1002', '0.00', '3000.00', '1', '0', '1', '2021-11-09 13:13:22', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('59', '2249773116', 'INV', '2021-11-09', '102030000002', 'Customer debit For Invoice No -  1002 Customer mohd raies', '5400.00', '0.00', '1', '0', '1', '2021-11-09 13:13:22', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('60', '2249773116', 'INVOICE', '2021-11-09', '303', 'Sale Income For Invoice NO - 1002 Customer mohd raies', '0.00', '2400.00', '1', '0', '1', '2021-11-09 13:13:22', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('61', '2249773116', 'INVOICE', '2021-11-09', '50203', 'Sale Income For Invoice NO - 1002 Customer mohd raies', '0.00', '0.00', '1', '0', '1', '2021-11-09 13:13:22', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('62', '8546983435', 'INV', '2021-11-09', '10107', 'Inventory credit For Invoice No1002', '0.00', '3000.00', '1', '0', '1', '2021-11-09 13:14:45', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('63', '8546983435', 'INV', '2021-11-09', '102030000002', 'Customer debit For Invoice No -  1002 Customer mohd raies', '5400.00', '0.00', '1', '0', '1', '2021-11-09 13:14:45', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('64', '8546983435', 'INVOICE', '2021-11-09', '303', 'Sale Income For Invoice NO - 1002 Customer mohd raies', '0.00', '2400.00', '1', '0', '1', '2021-11-09 13:14:45', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('65', '8546983435', 'INVOICE', '2021-11-09', '50203', 'Sale Income For Invoice NO - 1002 Customer mohd raies', '0.00', '0.00', '1', '0', '1', '2021-11-09 13:14:45', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('66', '6986964477', 'INV', '2021-11-09', '10107', 'Inventory credit For Invoice No1002', '0.00', '3000.00', '1', '0', '1', '2021-11-09 13:15:03', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('67', '6986964477', 'INV', '2021-11-09', '102030000002', 'Customer debit For Invoice No -  1002 Customer mohd raies', '4850.00', '0.00', '1', '0', '1', '2021-11-09 13:15:03', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('68', '6986964477', 'INVOICE', '2021-11-09', '303', 'Sale Income For Invoice NO - 1002 Customer mohd raies', '0.00', '1850.00', '1', '0', '1', '2021-11-09 13:15:03', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('69', '6986964477', 'INVOICE', '2021-11-09', '50203', 'Sale Income For Invoice NO - 1002 Customer mohd raies', '0.00', '0.00', '1', '0', '1', '2021-11-09 13:15:03', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('70', '7298782721', 'INV', '2021-11-09', '10107', 'Inventory credit For Invoice No1002', '0.00', '3000.00', '1', '0', '1', '2021-11-09 13:15:15', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('71', '7298782721', 'INV', '2021-11-09', '102030000002', 'Customer debit For Invoice No -  1002 Customer mohd raies', '4850.00', '0.00', '1', '0', '1', '2021-11-09 13:15:15', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('72', '7298782721', 'INVOICE', '2021-11-09', '303', 'Sale Income For Invoice NO - 1002 Customer mohd raies', '0.00', '1850.00', '1', '0', '1', '2021-11-09 13:15:15', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('73', '7298782721', 'INVOICE', '2021-11-09', '50203', 'Sale Income For Invoice NO - 1002 Customer mohd raies', '0.00', '0.00', '1', '0', '1', '2021-11-09 13:15:15', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('74', '1739112481', 'INV', '2021-11-09', '10107', 'Inventory credit For Invoice No1002', '0.00', '3000.00', '1', '0', '1', '2021-11-09 13:16:37', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('75', '1739112481', 'INV', '2021-11-09', '102030000002', 'Customer debit For Invoice No -  1002 Customer mohd raies', '4850.00', '0.00', '1', '0', '1', '2021-11-09 13:16:37', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('76', '1739112481', 'INVOICE', '2021-11-09', '303', 'Sale Income For Invoice NO - 1002 Customer mohd raies', '0.00', '1850.00', '1', '0', '1', '2021-11-09 13:16:37', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('77', '1739112481', 'INVOICE', '2021-11-09', '50203', 'Sale Income For Invoice NO - 1002 Customer mohd raies', '0.00', '0.00', '1', '0', '1', '2021-11-09 13:16:37', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('78', '8354147599', 'INV', '2021-11-09', '10107', 'Inventory credit For Invoice No1002', '0.00', '3000.00', '1', '0', '1', '2021-11-09 13:20:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('79', '8354147599', 'INV', '2021-11-09', '102030000002', 'Customer debit For Invoice No -  1002 Customer mohd raies', '4850.00', '0.00', '1', '0', '1', '2021-11-09 13:20:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('80', '8354147599', 'INVOICE', '2021-11-09', '303', 'Sale Income For Invoice NO - 1002 Customer mohd raies', '0.00', '1850.00', '1', '0', '1', '2021-11-09 13:20:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('81', '8354147599', 'INVOICE', '2021-11-09', '50203', 'Sale Income For Invoice NO - 1002 Customer mohd raies', '0.00', '0.00', '1', '0', '1', '2021-11-09 13:20:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('82', '6513464233', 'INV', '2021-11-09', '10107', 'Inventory credit For Invoice No1003', '0.00', '4000.00', '1', '0', '1', '2021-11-09 13:21:45', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('83', '6513464233', 'INV', '2021-11-09', '102030000002', 'Customer debit For Invoice No -  1003 Customer mohd raies', '6000.00', '0.00', '1', '0', '1', '2021-11-09 13:21:45', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('84', '6513464233', 'INVOICE', '2021-11-09', '303', 'Sale Income For Invoice NO - 1003 Customer mohd raies', '0.00', '2000.00', '1', '0', '1', '2021-11-09 13:21:45', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('85', '6513464233', 'INVOICE', '2021-11-09', '50203', 'Sale Income For Invoice NO - 1003 Customer mohd raies', '0.00', '0.00', '1', '0', '1', '2021-11-09 13:21:45', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('86', '5683799451', 'INV', '2021-11-09', '10107', 'Inventory credit For Invoice No1004', '0.00', '150.00', '1', '0', '1', '2021-11-09 13:32:29', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('87', '5683799451', 'INV', '2021-11-09', '102030000001', 'Customer debit For Invoice No -  1004 Customer Walking Customer', '214.00', '0.00', '1', '0', '1', '2021-11-09 13:32:29', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('88', '5683799451', 'INVOICE', '2021-11-09', '303', 'Sale Income For Invoice NO - 1004 Customer Walking Customer', '0.00', '40.00', '1', '0', '1', '2021-11-09 13:32:29', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('89', '5683799451', 'INVOICE', '2021-11-09', '50203', 'Sale Income For Invoice NO - 1004 Customer Walking Customer', '24.00', '0.00', '1', '0', '1', '2021-11-09 13:32:29', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('90', '5599835478', 'INV', '2021-11-09', '10107', 'Inventory credit For Invoice No1004', '0.00', '150.00', '1', '0', '1', '2021-11-09 13:32:47', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('91', '5599835478', 'INV', '2021-11-09', '102030000001', 'Customer debit For Invoice No -  1004 Customer Walking Customer', '214.00', '0.00', '1', '0', '1', '2021-11-09 13:32:47', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('92', '5599835478', 'INVOICE', '2021-11-09', '303', 'Sale Income For Invoice NO - 1004 Customer Walking Customer', '0.00', '40.00', '1', '0', '1', '2021-11-09 13:32:47', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('93', '5599835478', 'INVOICE', '2021-11-09', '50203', 'Sale Income For Invoice NO - 1004 Customer Walking Customer', '24.00', '0.00', '1', '0', '1', '2021-11-09 13:32:47', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('94', '6682197427', 'INV', '2021-11-09', '10107', 'Inventory credit For Invoice No1004', '0.00', '150.00', '1', '0', '1', '2021-11-09 13:32:58', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('95', '6682197427', 'INV', '2021-11-09', '102030000001', 'Customer debit For Invoice No -  1004 Customer Walking Customer', '214.00', '0.00', '1', '0', '1', '2021-11-09 13:32:58', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('96', '6682197427', 'INVOICE', '2021-11-09', '303', 'Sale Income For Invoice NO - 1004 Customer Walking Customer', '0.00', '40.00', '1', '0', '1', '2021-11-09 13:32:58', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('97', '6682197427', 'INVOICE', '2021-11-09', '50203', 'Sale Income For Invoice NO - 1004 Customer Walking Customer', '24.00', '0.00', '1', '0', '1', '2021-11-09 13:32:58', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('98', '6874298946', 'INV', '2021-11-09', '10107', 'Inventory credit For Invoice No1004', '0.00', '150.00', '1', '0', '1', '2021-11-09 13:33:14', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('99', '6874298946', 'INV', '2021-11-09', '102030000001', 'Customer debit For Invoice No -  1004 Customer Walking Customer', '214.00', '0.00', '1', '0', '1', '2021-11-09 13:33:14', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('100', '6874298946', 'INVOICE', '2021-11-09', '303', 'Sale Income For Invoice NO - 1004 Customer Walking Customer', '0.00', '40.00', '1', '0', '1', '2021-11-09 13:33:14', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('101', '6874298946', 'INVOICE', '2021-11-09', '50203', 'Sale Income For Invoice NO - 1004 Customer Walking Customer', '24.00', '0.00', '1', '0', '1', '2021-11-09 13:33:14', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('102', '9393771468', 'INV', '2021-11-09', '10107', 'Inventory credit For Invoice No1005', '0.00', '1000.00', '1', '0', '1', '2021-11-09 13:33:32', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('103', '9393771468', 'INV', '2021-11-09', '102030000002', 'Customer debit For Invoice No -  1005 Customer mohd raies', '1800.00', '0.00', '1', '0', '1', '2021-11-09 13:33:32', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('104', '9393771468', 'INVOICE', '2021-11-09', '303', 'Sale Income For Invoice NO - 1005 Customer mohd raies', '0.00', '800.00', '1', '0', '1', '2021-11-09 13:33:32', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('105', '9393771468', 'INVOICE', '2021-11-09', '50203', 'Sale Income For Invoice NO - 1005 Customer mohd raies', '0.00', '0.00', '1', '0', '1', '2021-11-09 13:33:32', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('106', '6817916824', 'INV', '2021-11-09', '10107', 'Inventory credit For Invoice No1005', '0.00', '1000.00', '1', '0', '1', '2021-11-09 13:36:45', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('107', '6817916824', 'INV', '2021-11-09', '102030000002', 'Customer debit For Invoice No -  1005 Customer mohd raies', '1800.00', '0.00', '1', '0', '1', '2021-11-09 13:36:45', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('108', '6817916824', 'INVOICE', '2021-11-09', '303', 'Sale Income For Invoice NO - 1005 Customer mohd raies', '0.00', '800.00', '1', '0', '1', '2021-11-09 13:36:45', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('109', '6817916824', 'INVOICE', '2021-11-09', '50203', 'Sale Income For Invoice NO - 1005 Customer mohd raies', '0.00', '0.00', '1', '0', '1', '2021-11-09 13:36:45', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('110', '2274219949', 'INV', '2021-11-09', '10107', 'Inventory credit For Invoice No1005', '0.00', '1000.00', '1', '0', '1', '2021-11-09 13:38:55', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('111', '2274219949', 'INV', '2021-11-09', '102030000002', 'Customer debit For Invoice No -  1005 Customer mohd raies', '1800.00', '0.00', '1', '0', '1', '2021-11-09 13:38:55', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('112', '2274219949', 'INVOICE', '2021-11-09', '303', 'Sale Income For Invoice NO - 1005 Customer mohd raies', '0.00', '800.00', '1', '0', '1', '2021-11-09 13:38:55', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('113', '2274219949', 'INVOICE', '2021-11-09', '50203', 'Sale Income For Invoice NO - 1005 Customer mohd raies', '0.00', '0.00', '1', '0', '1', '2021-11-09 13:38:55', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('114', '7362847711', 'INV', '2021-11-09', '10107', 'Inventory credit For Invoice No1006', '0.00', '3000.00', '1', '0', '1', '2021-11-09 13:41:04', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('115', '7362847711', 'INV', '2021-11-09', '102030000002', 'Customer debit For Invoice No -  1006 Customer mohd raies', '4650.00', '0.00', '1', '0', '1', '2021-11-09 13:41:04', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('116', '7362847711', 'INVOICE', '2021-11-09', '303', 'Sale Income For Invoice NO - 1006 Customer mohd raies', '0.00', '1650.00', '1', '0', '1', '2021-11-09 13:41:04', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('117', '7362847711', 'INVOICE', '2021-11-09', '50203', 'Sale Income For Invoice NO - 1006 Customer mohd raies', '0.00', '0.00', '1', '0', '1', '2021-11-09 13:41:04', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('118', '2811646838', 'INV', '2021-11-10', '10107', 'Inventory credit For Invoice No1007', '0.00', '2000.00', '1', '0', '1', '2021-11-10 13:44:16', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('119', '2811646838', 'INV', '2021-11-10', '102030000002', 'Customer debit For Invoice No -  1007 Customer mohd raies', '-487401.00', '0.00', '1', '0', '1', '2021-11-10 13:44:16', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('120', '2811646838', 'INVOICE', '2021-11-10', '303', 'Sale Income For Invoice NO - 1007 Customer mohd raies', '0.00', '-489715.00', '1', '0', '1', '2021-11-10 13:44:16', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('121', '2811646838', 'INVOICE', '2021-11-10', '50203', 'Sale Income For Invoice NO - 1007 Customer mohd raies', '314.00', '0.00', '1', '0', '1', '2021-11-10 13:44:16', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('122', '7817516462', 'INV', '2021-11-10', '10107', 'Inventory credit For Invoice No1008', '0.00', '2000.00', '1', '0', '1', '2021-11-10 13:52:12', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('123', '7817516462', 'INV', '2021-11-10', '102030000002', 'Customer debit For Invoice No -  1008 Customer mohd raies', '3442.50', '0.00', '1', '0', '1', '2021-11-10 13:52:12', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('124', '7817516462', 'INVOICE', '2021-11-10', '303', 'Sale Income For Invoice NO - 1008 Customer mohd raies', '0.00', '1150.00', '1', '0', '1', '2021-11-10 13:52:12', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('125', '7817516462', 'INVOICE', '2021-11-10', '50203', 'Sale Income For Invoice NO - 1008 Customer mohd raies', '292.50', '0.00', '1', '0', '1', '2021-11-10 13:52:12', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('126', '8741351142', 'INV', '2021-11-10', '10107', 'Inventory credit For Invoice No1009', '0.00', '1000.00', '1', '0', '1', '2021-11-10 13:57:01', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('127', '8741351142', 'INV', '2021-11-10', '102030000002', 'Customer debit For Invoice No -  1009 Customer mohd raies', '2100.00', '0.00', '1', '0', '1', '2021-11-10 13:57:01', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('128', '8741351142', 'INVOICE', '2021-11-10', '303', 'Sale Income For Invoice NO - 1009 Customer mohd raies', '0.00', '1000.00', '1', '0', '1', '2021-11-10 13:57:01', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('129', '8741351142', 'INVOICE', '2021-11-10', '50203', 'Sale Income For Invoice NO - 1009 Customer mohd raies', '100.00', '0.00', '1', '0', '1', '2021-11-10 13:57:01', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('130', '8896795522', 'INV', '2021-11-10', '10107', 'Inventory credit For Invoice No1009', '0.00', '1000.00', '1', '0', '1', '2021-11-10 13:57:11', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('131', '8896795522', 'INV', '2021-11-10', '102030000002', 'Customer debit For Invoice No -  1009 Customer mohd raies', '2100.00', '0.00', '1', '0', '1', '2021-11-10 13:57:11', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('132', '8896795522', 'INVOICE', '2021-11-10', '303', 'Sale Income For Invoice NO - 1009 Customer mohd raies', '0.00', '1000.00', '1', '0', '1', '2021-11-10 13:57:11', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('133', '8896795522', 'INVOICE', '2021-11-10', '50203', 'Sale Income For Invoice NO - 1009 Customer mohd raies', '100.00', '0.00', '1', '0', '1', '2021-11-10 13:57:11', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('134', '7371186723', 'INV', '2021-11-10', '10107', 'Inventory credit For Invoice No1009', '0.00', '1000.00', '1', '0', '1', '2021-11-10 13:59:02', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('135', '7371186723', 'INV', '2021-11-10', '102030000002', 'Customer debit For Invoice No -  1009 Customer mohd raies', '2100.00', '0.00', '1', '0', '1', '2021-11-10 13:59:02', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('136', '7371186723', 'INVOICE', '2021-11-10', '303', 'Sale Income For Invoice NO - 1009 Customer mohd raies', '0.00', '1000.00', '1', '0', '1', '2021-11-10 13:59:02', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('137', '7371186723', 'INVOICE', '2021-11-10', '50203', 'Sale Income For Invoice NO - 1009 Customer mohd raies', '100.00', '0.00', '1', '0', '1', '2021-11-10 13:59:02', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('145', '1133922141', 'INV', '2021-11-11', '10107', 'Inventory credit For Invoice No1010', '0.00', '1000.00', '1', '0', '1', '2021-11-11 06:38:09', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('146', '1133922141', 'INVOICE', '2021-11-11', '303', 'Sale Income From Invoice NO - 1010 Customer mohd raies', '0.00', '2100.00', '1', '0', '1', '2021-11-11 06:38:09', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('147', '1133922141', 'INV', '2021-11-11', '102030000002', 'Customer debit For Invoice NO - 1010 customer-  mohd raies', '2100.00', '0.00', '1', '0', '1', '2021-11-11 06:38:09', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('148', '9517155219', 'INV', '2021-11-20', '10107', 'Inventory credit For Invoice No1011', '0.00', '1000.00', '1', '0', '1', '2021-11-20 12:11:08', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('149', '9517155219', 'INV', '2021-11-20', '102030000002', 'Customer debit For Invoice No -  1011 Customer mohd raies', '1890.00', '0.00', '1', '0', '1', '2021-11-20 12:11:08', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('150', '9517155219', 'INVOICE', '2021-11-20', '303', 'Sale Income For Invoice NO - 1011 Customer mohd raies', '0.00', '800.00', '1', '0', '1', '2021-11-20 12:11:08', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('151', '9517155219', 'INVOICE', '2021-11-20', '50203', 'Sale Income For Invoice NO - 1011 Customer mohd raies', '90.00', '0.00', '1', '0', '1', '2021-11-20 12:11:08', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('152', 'KIRO25IXQX', 'PR Balance', '2021-11-23', '102030000003', 'Customer debit For mohd raies', '434.00', '0.00', '1', '0', '1', '2021-11-23 05:49:57', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('153', 'KIRO25IXQX', 'PR Balance', '2021-11-23', '10107', 'Inventory credit For Old sale Formohd raies', '0.00', '434.00', '1', '0', '1', '2021-11-23 05:49:57', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('154', 'IO6DM7TU9Q', 'PR Balance', '2021-11-24', '10107', 'Inventory credit For Old sale For', '0.00', '4532523.00', '1', '0', '1', '2021-11-24 08:33:24', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('155', 'TC2JGFFJTF', 'PR Balance', '2021-11-24', '10107', 'Inventory credit For Old sale For', '0.00', '4353453.00', '1', '0', '1', '2021-11-24 08:36:18', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('156', 'S3OFV3Z46V', 'PR Balance', '2021-11-24', '10107', 'Inventory credit For Old sale For', '0.00', '4353453.00', '1', '0', '1', '2021-11-24 08:36:51', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('157', '4WQGOCPSXV', 'PR Balance', '2021-11-24', '10107', 'Inventory credit For Old sale For', '0.00', '4353453.00', '1', '0', '1', '2021-11-24 08:36:55', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('158', 'V5E1RG9A21', 'PR Balance', '2021-11-24', '102030000004', 'Customer debit For fh rthr', '34545345345.00', '0.00', '1', '0', '1', '2021-11-24 11:20:35', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('159', 'V5E1RG9A21', 'PR Balance', '2021-11-24', '10107', 'Inventory credit For Old sale Forfh rthr', '0.00', '34545345345.00', '1', '0', '1', '2021-11-24 11:20:35', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('160', 'QE8AI51P7S', 'PR Balance', '2021-11-24', '102030000005', 'Customer debit For fh rthr', '34534524532.00', '0.00', '1', '0', '1', '2021-11-24 11:24:36', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('161', 'QE8AI51P7S', 'PR Balance', '2021-11-24', '10107', 'Inventory credit For Old sale Forfh rthr', '0.00', '34534524532.00', '1', '0', '1', '2021-11-24 11:24:36', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('162', 'HK4RLQ2KN4', 'PR Balance', '2021-11-24', '102030000006', 'Customer debit For fh rthr', '2343252434324.00', '0.00', '1', '0', '1', '2021-11-24 11:27:16', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('163', 'HK4RLQ2KN4', 'PR Balance', '2021-11-24', '10107', 'Inventory credit For Old sale Forfh rthr', '0.00', '2343252434324.00', '1', '0', '1', '2021-11-24 11:27:16', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('164', 'CCN3LTQ71K', 'PR Balance', '2021-11-24', '102030000007', 'Customer debit For fh rthr', '345435345345.00', '0.00', '1', '0', '1', '2021-11-24 11:28:46', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('165', 'CCN3LTQ71K', 'PR Balance', '2021-11-24', '10107', 'Inventory credit For Old sale Forfh rthr', '0.00', '345435345345.00', '1', '0', '1', '2021-11-24 11:28:46', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('166', 'CI1MW1WKJU', 'PR Balance', '2021-11-24', '102030000008', 'Customer debit For fh rthr', '345435345235234.00', '0.00', '1', '0', '1', '2021-11-24 11:31:07', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('167', 'CI1MW1WKJU', 'PR Balance', '2021-11-24', '10107', 'Inventory credit For Old sale Forfh rthr', '0.00', '345435345235234.00', '1', '0', '1', '2021-11-24 11:31:07', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('168', 'QU6LNMO217', 'PR Balance', '2021-11-24', '102030000009', 'Customer debit For fh rthr', '45324324234234.00', '0.00', '1', '0', '1', '2021-11-24 11:43:01', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('169', 'QU6LNMO217', 'PR Balance', '2021-11-24', '10107', 'Inventory credit For Old sale Forfh rthr', '0.00', '45324324234234.00', '1', '0', '1', '2021-11-24 11:43:01', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('170', 'CR-1', 'CR', '2021-11-25', '102030000002', '', '0.00', '5555.00', '1', '0', '1', '2021-11-25 10:38:39', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('171', 'CR-1', 'CR', '2021-11-25', '102010201', 'Customer Receive From mohd raies', '5555.00', '0.00', '1', '0', '1', '2021-11-25 10:38:39', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('172', 'SAJIVRBG7S', 'PR Balance', '2021-12-02', '102030000010', 'Customer debit For mohd raies', '2354234.00', '0.00', '1', '0', '1', '2021-12-02 10:18:19', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('173', 'SAJIVRBG7S', 'PR Balance', '2021-12-02', '10107', 'Inventory credit For Old sale Formohd raies', '0.00', '2354234.00', '1', '0', '1', '2021-12-02 10:18:19', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('174', 'Y4BTEBCE6L', 'PR Balance', '2021-12-02', '102030000011', 'Customer debit For mohd raies', '2354234.00', '0.00', '1', '0', '1', '2021-12-02 10:21:22', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('175', 'Y4BTEBCE6L', 'PR Balance', '2021-12-02', '10107', 'Inventory credit For Old sale Formohd raies', '0.00', '2354234.00', '1', '0', '1', '2021-12-02 10:21:22', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('176', '4D6MOL2W2V', 'PR Balance', '2021-12-02', '102030000012', 'Customer debit For fh rthr', '235234234.00', '0.00', '1', '0', '1', '2021-12-02 10:21:54', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('177', '4D6MOL2W2V', 'PR Balance', '2021-12-02', '10107', 'Inventory credit For Old sale Forfh rthr', '0.00', '235234234.00', '1', '0', '1', '2021-12-02 10:21:54', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('178', 'MSCHT3F5WL', 'PR Balance', '2021-12-02', '102030000013', 'Customer debit For fh rthr', '2523423.00', '0.00', '1', '0', '1', '2021-12-02 10:22:52', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('179', 'MSCHT3F5WL', 'PR Balance', '2021-12-02', '10107', 'Inventory credit For Old sale Forfh rthr', '0.00', '2523423.00', '1', '0', '1', '2021-12-02 10:22:52', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('180', 'KXPR8ZUF91', 'PR Balance', '2021-12-02', '102030000014', 'Customer debit For fh rthr', '23523432.00', '0.00', '1', '0', '1', '2021-12-02 10:24:35', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('181', 'KXPR8ZUF91', 'PR Balance', '2021-12-02', '10107', 'Inventory credit For Old sale Forfh rthr', '0.00', '23523432.00', '1', '0', '1', '2021-12-02 10:24:35', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('182', 'WTGUB81BEZ', 'PR Balance', '2021-12-02', '102030000015', 'Customer debit For test', '78686876877.00', '0.00', '1', '0', '1', '2021-12-02 10:44:09', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('183', 'WTGUB81BEZ', 'PR Balance', '2021-12-02', '10107', 'Inventory credit For Old sale Fortest', '0.00', '78686876877.00', '1', '0', '1', '2021-12-02 10:44:09', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('184', 'Q8NBQJMGBH', 'PR Balance', '2021-12-02', '102030000016', 'Customer debit For mohd raies', '43543534.00', '0.00', '1', '0', '1', '2021-12-02 10:46:02', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('185', 'Q8NBQJMGBH', 'PR Balance', '2021-12-02', '10107', 'Inventory credit For Old sale Formohd raies', '0.00', '43543534.00', '1', '0', '1', '2021-12-02 10:46:02', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('186', '2495RMHB8T', 'PR Balance', '2021-12-02', '10107', 'Inventory credit For Old sale For', '0.00', '3124132.00', '1', '0', '1', '2021-12-02 10:52:24', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('187', 'ESQKYFZTSY', 'PR Balance', '2021-12-02', '10107', 'Inventory credit For Old sale For', '0.00', '3254234324.00', '1', '0', '1', '2021-12-02 10:53:20', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('188', 'KE1R1W17ZV', 'PR Balance', '2021-12-02', '102030000017', 'Customer debit For fh rthr', '23423425.00', '0.00', '1', '0', '1', '2021-12-02 10:56:06', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('189', 'KE1R1W17ZV', 'PR Balance', '2021-12-02', '10107', 'Inventory credit For Old sale Forfh rthr', '0.00', '23423425.00', '1', '0', '1', '2021-12-02 10:56:06', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('190', '20211203130340', 'Purchase', '2021-12-03', '10107', 'Inventory Debit For Supplier Raies Cloth Shop', '450.00', '0.00', '1', '0', '1', '2021-12-03 13:03:40', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('191', '20211203130340', 'Purchase', '2021-12-03', '502000001', 'Supplier .Raies Cloth Shop', '0.00', '450.00', '1', '0', '1', '2021-12-03 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('192', '5XIUGSLN9H', 'PR Balance', '2021-12-06', '102030000018', 'Customer debit For mohd raies', '4645654645.00', '0.00', '1', '0', '1', '2021-12-06 06:18:44', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('193', '5XIUGSLN9H', 'PR Balance', '2021-12-06', '10107', 'Inventory credit For Old sale Formohd raies', '0.00', '4645654645.00', '1', '0', '1', '2021-12-06 06:18:44', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('194', '20211206071412', 'Purchase', '2021-12-06', '10107', 'Inventory Debit For Supplier Raies Cloth Shop', '450.00', '0.00', '1', '0', '1', '2021-12-06 07:14:12', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('195', '20211206071412', 'Purchase', '2021-12-06', '502000001', 'Supplier .Raies Cloth Shop', '0.00', '450.00', '1', '0', '1', '2021-12-06 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('196', '5867751589', 'INV', '2021-12-06', '10107', 'Inventory credit For Invoice No1012', '0.00', '150.00', '1', '0', '1', '2021-12-06 10:05:04', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('197', '5867751589', 'INV', '2021-12-06', '102030000002', 'Customer debit For Invoice No -  1012 Customer mohd raies', '230.00', '0.00', '1', '0', '1', '2021-12-06 10:05:04', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('198', '5867751589', 'INVOICE', '2021-12-06', '303', 'Sale Income For Invoice NO - 1012 Customer mohd raies', '0.00', '50.00', '1', '0', '1', '2021-12-06 10:05:04', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('199', '5867751589', 'INVOICE', '2021-12-06', '50203', 'Sale Income For Invoice NO - 1012 Customer mohd raies', '30.00', '0.00', '1', '0', '1', '2021-12-06 10:05:04', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('200', '5867751589', 'INV', '2021-12-06', '102030000002', 'Customer credit for Paid Amount For Customer Invoice NO- 1012 Customer- mohd raies', '0.00', '12001.50', '1', '0', '1', '2021-12-06 10:05:04', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('201', '5867751589', 'INV', '2021-12-06', '1020101', 'Cash in Hand in Sale for Invoice No - 1012 customer- mohd raies', '12001.50', '0.00', '1', '0', '1', '2021-12-06 10:05:04', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('202', '20211206101549', 'Purchase', '2021-12-06', '10107', 'Inventory Debit For Supplier Raies Cloth Shop', '130000.00', '0.00', '1', '0', '1', '2021-12-06 10:15:49', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('203', '20211206101549', 'Purchase', '2021-12-06', '502000001', 'Supplier .Raies Cloth Shop', '0.00', '130000.00', '1', '0', '1', '2021-12-06 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('204', '20211206101549', 'Purchase', '2021-12-06', '1020101', 'Cash in Hand For Supplier Raies Cloth Shop', '0.00', '130000.00', '1', '0', '1', '2021-12-06 10:15:49', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('205', '20211206101549', 'Purchase', '2021-12-06', '502000001', 'Supplier .Raies Cloth Shop', '130000.00', '0.00', '1', '0', '1', '2021-12-06 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('206', '3347975875', 'INV', '2021-12-06', '10107', 'Inventory credit For Invoice No1013', '0.00', '100.00', '1', '0', '1', '2021-12-06 10:17:38', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('207', '3347975875', 'INVOICE', '2021-12-06', '303', 'Sale Income For Invoice NO - 1013 Customer Walking Customer', '0.00', '25.00', '1', '0', '1', '2021-12-06 10:17:38', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('208', '3347975875', 'INVOICE', '2021-12-06', '50203', 'Sale Income For Invoice NO - 1013 Customer Walking Customer', '18.75', '0.00', '1', '0', '1', '2021-12-06 10:17:38', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('209', '20211206104842', 'Purchase', '2021-12-06', '10107', 'Inventory Debit For Supplier Raies Cloth Shop', '450.00', '0.00', '1', '0', '1', '2021-12-06 10:48:42', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('210', '20211206104842', 'Purchase', '2021-12-06', '502000001', 'Supplier .Raies Cloth Shop', '0.00', '450.00', '1', '0', '1', '2021-12-06 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('211', '20211206105919', 'Purchase', '2021-12-06', '10107', 'Inventory Debit For Supplier Raies Cloth Shop', '300.00', '0.00', '1', '0', '1', '2021-12-06 10:59:19', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('212', '20211206105919', 'Purchase', '2021-12-06', '502000001', 'Supplier .Raies Cloth Shop', '0.00', '300.00', '1', '0', '1', '2021-12-06 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('213', '20211206115953', 'Purchase', '2021-12-06', '10107', 'Inventory Debit For Supplier Raies Cloth Shop', '150.00', '0.00', '1', '0', '1', '2021-12-06 11:59:53', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('214', '20211206115953', 'Purchase', '2021-12-06', '502000001', 'Supplier .Raies Cloth Shop', '0.00', '150.00', '1', '0', '1', '2021-12-06 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('215', '20211206122352', 'Purchase', '2021-12-06', '10107', 'Inventory Debit For Supplier Raies Cloth Shop', '300.00', '0.00', '1', '0', '1', '2021-12-06 12:23:52', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('216', '20211206122352', 'Purchase', '2021-12-06', '502000001', 'Supplier .Raies Cloth Shop', '0.00', '300.00', '1', '0', '1', '2021-12-06 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('217', '20211206122523', 'Purchase', '2021-12-06', '10107', 'Inventory Debit For Supplier Raies Cloth Shop', '450.00', '0.00', '1', '0', '1', '2021-12-06 12:25:23', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('218', '20211206122523', 'Purchase', '2021-12-06', '502000001', 'Supplier .Raies Cloth Shop', '0.00', '450.00', '1', '0', '1', '2021-12-06 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('219', '20211206122805', 'Purchase', '2021-12-06', '10107', 'Inventory Debit For Supplier Raies Cloth Shop', '300.00', '0.00', '1', '0', '1', '2021-12-06 12:28:05', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('220', '20211206122805', 'Purchase', '2021-12-06', '502000001', 'Supplier .Raies Cloth Shop', '0.00', '300.00', '1', '0', '1', '2021-12-06 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('221', '20211206124045', 'Purchase', '2021-12-06', '10107', 'Inventory Debit For Supplier Raies Cloth Shop', '300.00', '0.00', '1', '0', '1', '2021-12-06 12:40:45', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('222', '20211206124045', 'Purchase', '2021-12-06', '502000001', 'Supplier .Raies Cloth Shop', '0.00', '300.00', '1', '0', '1', '2021-12-06 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('223', '20211206124137', 'Purchase', '2021-12-06', '10107', 'Inventory Debit For Supplier Raies Cloth Shop', '300.00', '0.00', '1', '0', '1', '2021-12-06 12:41:37', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('224', '20211206124137', 'Purchase', '2021-12-06', '502000001', 'Supplier .Raies Cloth Shop', '0.00', '300.00', '1', '0', '1', '2021-12-06 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('225', '20211206124753', 'Purchase', '2021-12-06', '10107', 'Inventory Debit For Supplier Raies Cloth Shop', '300.00', '0.00', '1', '0', '1', '2021-12-06 12:47:53', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('226', '20211206124753', 'Purchase', '2021-12-06', '502000001', 'Supplier .Raies Cloth Shop', '0.00', '300.00', '1', '0', '1', '2021-12-06 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('227', '20211206125716', 'Purchase', '2021-12-06', '10107', 'Inventory Debit For Supplier Raies Cloth Shop', '300.00', '0.00', '1', '0', '1', '2021-12-06 12:57:16', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('228', '20211206125716', 'Purchase', '2021-12-06', '502000001', 'Supplier .Raies Cloth Shop', '0.00', '300.00', '1', '0', '1', '2021-12-06 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('229', '20211206130308', 'Purchase', '2021-12-06', '10107', 'Inventory Debit For Supplier Raies Cloth Shop', '300.00', '0.00', '1', '0', '1', '2021-12-06 13:03:08', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('230', '20211206130308', 'Purchase', '2021-12-06', '502000001', 'Supplier .Raies Cloth Shop', '0.00', '300.00', '1', '0', '1', '2021-12-06 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('231', '20211206131046', 'Purchase', '2021-12-06', '10107', 'Inventory Debit For Supplier Raies Cloth Shop', '300.00', '0.00', '1', '0', '1', '2021-12-06 13:10:46', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('232', '20211206131046', 'Purchase', '2021-12-06', '502000001', 'Supplier .Raies Cloth Shop', '0.00', '300.00', '1', '0', '1', '2021-12-06 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('233', '3975981755', 'INV', '2021-12-06', '10107', 'Inventory credit For Invoice No1014', '0.00', '5000.00', '1', '0', '1', '2021-12-06 13:12:52', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('234', '3975981755', 'INVOICE', '2021-12-06', '303', 'Sale Income For Invoice NO - 1014 Customer Walking Customer', '0.00', '1250.00', '1', '0', '1', '2021-12-06 13:12:52', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('235', '3975981755', 'INVOICE', '2021-12-06', '50203', 'Sale Income For Invoice NO - 1014 Customer Walking Customer', '937.50', '0.00', '1', '0', '1', '2021-12-06 13:12:52', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('236', '3975981755', 'INV', '2021-12-06', '1020101', 'Cash in Hand in Sale for Invoice No - 1014 customer- Walking Customer', '7187.50', '0.00', '1', '0', '1', '2021-12-06 13:12:52', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('237', '20211206131629', 'Purchase', '2021-12-06', '10107', 'Inventory Debit For Supplier Raies Cloth Shop', '300.00', '0.00', '1', '0', '1', '2021-12-06 13:16:29', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('238', '20211206131629', 'Purchase', '2021-12-06', '502000001', 'Supplier .Raies Cloth Shop', '0.00', '300.00', '1', '0', '1', '2021-12-06 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('239', '20211207061859', 'Purchase', '2021-12-07', '10107', 'Inventory Debit For Supplier Raies Cloth Shop', '1000.00', '0.00', '1', '0', '1', '2021-12-07 06:18:59', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('240', '20211207061859', 'Purchase', '2021-12-07', '502000001', 'Supplier .Raies Cloth Shop', '0.00', '1000.00', '1', '0', '1', '2021-12-07 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('241', '20211207061859', 'Purchase', '2021-12-07', '1020101', 'Cash in Hand For Supplier Raies Cloth Shop', '0.00', '1000.00', '1', '0', '1', '2021-12-07 06:18:59', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('242', '20211207061859', 'Purchase', '2021-12-07', '502000001', 'Supplier .Raies Cloth Shop', '1000.00', '0.00', '1', '0', '1', '2021-12-07 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('243', '20211207062038', 'Purchase', '2021-12-07', '10107', 'Inventory Debit For Supplier Raies Cloth Shop', '1000.00', '0.00', '1', '0', '1', '2021-12-07 06:20:38', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('244', '20211207062038', 'Purchase', '2021-12-07', '502000001', 'Supplier .Raies Cloth Shop', '0.00', '1000.00', '1', '0', '1', '2021-12-07 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('245', '20211207062038', 'Purchase', '2021-12-07', '1020101', 'Cash in Hand For Supplier Raies Cloth Shop', '0.00', '1000.00', '1', '0', '1', '2021-12-07 06:20:38', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('246', '20211207062038', 'Purchase', '2021-12-07', '502000001', 'Supplier .Raies Cloth Shop', '1000.00', '0.00', '1', '0', '1', '2021-12-07 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('247', '7573274576', 'INV', '2021-12-07', '10107', 'Inventory credit For Invoice No1015', '0.00', '100.00', '1', '0', '1', '2021-12-07 06:26:20', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('248', '7573274576', 'INV', '2021-12-07', '102030000002', 'Customer debit For Invoice No -  1015 Customer mohd raies', '143.75', '0.00', '1', '0', '1', '2021-12-07 06:26:20', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('249', '7573274576', 'INVOICE', '2021-12-07', '303', 'Sale Income For Invoice NO - 1015 Customer mohd raies', '0.00', '25.00', '1', '0', '1', '2021-12-07 06:26:20', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('250', '7573274576', 'INVOICE', '2021-12-07', '50203', 'Sale Income For Invoice NO - 1015 Customer mohd raies', '18.75', '0.00', '1', '0', '1', '2021-12-07 06:26:20', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('251', '7573274576', 'INV', '2021-12-07', '102030000002', 'Customer credit for Paid Amount For Customer Invoice NO- 1015 Customer- mohd raies', '0.00', '143.75', '1', '0', '1', '2021-12-07 06:26:20', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('252', '7573274576', 'INV', '2021-12-07', '1020101', 'Cash in Hand in Sale for Invoice No - 1015 customer- mohd raies', '143.75', '0.00', '1', '0', '1', '2021-12-07 06:26:20', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('253', '20211207111813', 'Purchase', '2021-12-07', '10107', 'Inventory Debit For Supplier Raies Cloth Shop', '600.00', '0.00', '1', '0', '1', '2021-12-07 11:18:13', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('254', '20211207111813', 'Purchase', '2021-12-07', '502000001', 'Supplier .Raies Cloth Shop', '0.00', '600.00', '1', '0', '1', '2021-12-07 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('255', '20211207112651', 'Purchase', '2021-12-07', '10107', 'Inventory Debit For Supplier Raies Cloth Shop', '150.00', '0.00', '1', '0', '1', '2021-12-07 11:26:51', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('256', '20211207112651', 'Purchase', '2021-12-07', '502000001', 'Supplier .Raies Cloth Shop', '0.00', '150.00', '1', '0', '1', '2021-12-07 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('257', '2225786899', 'INV', '2021-12-07', '10107', 'Inventory credit For Invoice No1016', '0.00', '100.00', '1', '0', '1', '2021-12-07 16:17:28', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('258', '2225786899', 'INVOICE', '2021-12-07', '303', 'Sale Income For Invoice NO - 1016 Customer Walking Customer', '0.00', '25.00', '1', '0', '1', '2021-12-07 16:17:28', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('259', '2225786899', 'INVOICE', '2021-12-07', '50203', 'Sale Income For Invoice NO - 1016 Customer Walking Customer', '18.75', '0.00', '1', '0', '1', '2021-12-07 16:17:28', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('260', '20211207162341', 'Purchase', '2021-12-07', '10107', 'Inventory Debit For Supplier Raies Cloth Shop', '4995.00', '0.00', '1', '0', '1', '2021-12-07 16:23:41', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('261', '20211207162341', 'Purchase', '2021-12-07', '502000001', 'Supplier .Raies Cloth Shop', '0.00', '4995.00', '1', '0', '1', '2021-12-07 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('262', '3393793746', 'INV', '2021-12-07', '10107', 'Inventory credit For Invoice No1017', '0.00', '150.00', '1', '0', '1', '2021-12-07 16:24:45', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('263', '3393793746', 'INVOICE', '2021-12-07', '303', 'Sale Income For Invoice NO - 1017 Customer Walking Customer', '0.00', '50.00', '1', '0', '1', '2021-12-07 16:24:45', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('264', '3393793746', 'INVOICE', '2021-12-07', '50203', 'Sale Income For Invoice NO - 1017 Customer Walking Customer', '30.00', '0.00', '1', '0', '1', '2021-12-07 16:24:45', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('265', '3393793746', 'INV', '2021-12-07', '1020101', 'Cash in Hand in Sale for Invoice No - 1017 customer- Walking Customer', '230.00', '0.00', '1', '0', '1', '2021-12-07 16:24:45', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('266', '20211208045407', 'Purchase', '2021-12-08', '10107', 'Inventory Debit For Supplier Raies Cloth Shop', '1500.00', '0.00', '1', '0', '1', '2021-12-08 04:54:07', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('267', '20211208045407', 'Purchase', '2021-12-08', '502000001', 'Supplier .Raies Cloth Shop', '0.00', '1500.00', '1', '0', '1', '2021-12-08 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('268', '20211208045407', 'Purchase', '2021-12-08', '1020101', 'Cash in Hand For Supplier Raies Cloth Shop', '0.00', '1500.00', '1', '0', '1', '2021-12-08 04:54:07', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('269', '20211208045407', 'Purchase', '2021-12-08', '502000001', 'Supplier .Raies Cloth Shop', '1500.00', '0.00', '1', '0', '1', '2021-12-08 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('270', '20211208161132', 'Purchase', '2021-12-08', '10107', 'Inventory Debit For Supplier Raies Cloth Shop', '23650.00', '0.00', '1', '0', '1', '2021-12-08 16:11:32', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('271', '20211208161132', 'Purchase', '2021-12-08', '502000001', 'Supplier .Raies Cloth Shop', '0.00', '23650.00', '1', '0', '1', '2021-12-08 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('272', '20211208214915', 'Purchase', '2021-12-08', '10107', 'Inventory Debit For Supplier Raies Cloth Shop', '0.00', '0.00', '1', '0', '1', '2021-12-08 21:49:15', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('273', '20211208214915', 'Purchase', '2021-12-08', '502000001', 'Supplier .Raies Cloth Shop', '0.00', '0.00', '1', '0', '1', '2021-12-08 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('274', '20211208214915', 'Purchase', '2021-12-08', '1020101', 'Cash in Hand For Supplier Raies Cloth Shop', '0.00', '0.00', '1', '0', '1', '2021-12-08 21:49:15', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('275', '20211208214915', 'Purchase', '2021-12-08', '502000001', 'Supplier .Raies Cloth Shop', '0.00', '0.00', '1', '0', '1', '2021-12-08 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('276', '4812168955', 'INV', '2021-12-09', '10107', 'Inventory credit For Invoice No1018', '0.00', '1000.00', '1', '0', '1', '2021-12-09 05:01:55', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('277', '4812168955', 'INVOICE', '2021-12-09', '303', 'Sale Income For Invoice NO - 1018 Customer Walking Customer', '0.00', '250.00', '1', '0', '1', '2021-12-09 05:01:55', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('278', '4812168955', 'INVOICE', '2021-12-09', '50203', 'Sale Income For Invoice NO - 1018 Customer Walking Customer', '187.50', '0.00', '1', '0', '1', '2021-12-09 05:01:55', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('279', '4812168955', 'INV', '2021-12-09', '1020101', 'Cash in Hand in Sale for Invoice No - 1018 customer- Walking Customer', '1437.50', '0.00', '1', '0', '1', '2021-12-09 05:01:55', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('280', '1685329834', 'INV', '2021-12-09', '10107', 'Inventory credit For Invoice No1018', '0.00', '1000.00', '1', '0', '1', '2021-12-09 05:01:55', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('281', '1685329834', 'INVOICE', '2021-12-09', '303', 'Sale Income For Invoice NO - 1018 Customer Walking Customer', '0.00', '250.00', '1', '0', '1', '2021-12-09 05:01:55', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('282', '1685329834', 'INVOICE', '2021-12-09', '50203', 'Sale Income For Invoice NO - 1018 Customer Walking Customer', '187.50', '0.00', '1', '0', '1', '2021-12-09 05:01:55', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('283', '1685329834', 'INV', '2021-12-09', '1020101', 'Cash in Hand in Sale for Invoice No - 1018 customer- Walking Customer', '1437.50', '0.00', '1', '0', '1', '2021-12-09 05:01:55', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('284', '20211209052446', 'Purchase', '2021-12-09', '10107', 'Inventory Debit For Supplier Raies Cloth Shop', '10000.00', '0.00', '1', '0', '1', '2021-12-09 05:24:46', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('285', '20211209052446', 'Purchase', '2021-12-09', '502000001', 'Supplier .Raies Cloth Shop', '0.00', '10000.00', '1', '0', '1', '2021-12-09 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('286', '20211209052446', 'Purchase', '2021-12-09', '1020101', 'Cash in Hand For Supplier Raies Cloth Shop', '0.00', '10000.00', '1', '0', '1', '2021-12-09 05:24:46', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('287', '20211209052446', 'Purchase', '2021-12-09', '502000001', 'Supplier .Raies Cloth Shop', '10000.00', '0.00', '1', '0', '1', '2021-12-09 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('288', '20211209110631', 'Purchase', '2021-12-09', '10107', 'Inventory Debit For Supplier Raies Cloth Shop', '2170.00', '0.00', '1', '0', '1', '2021-12-09 11:06:31', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('289', '20211209110631', 'Purchase', '2021-12-09', '502000001', 'Supplier .Raies Cloth Shop', '0.00', '2170.00', '1', '0', '1', '2021-12-09 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('312', '20211209121717', 'Purchase', '2021-12-09', '10107', 'Inventory Devit Supplier Raies Cloth Shop', '2262.50', '0.00', '1', '0', '1', '2021-12-09 13:26:38', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('313', '20211209121717', 'Purchase', '2021-12-09', '502000001', 'Supplier -Raies Cloth Shop', '0.00', '2262.50', '1', '0', '1', '2021-12-09 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('314', '20211209121717', 'Purchase', '2021-12-09', '1020101', 'Cash in Hand For Supplier Raies Cloth Shop', '0.00', '0.00', '1', '0', '1', '2021-12-09 13:26:38', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('315', '20211209121717', 'Purchase', '2021-12-09', '502000001', 'Supplier . Raies Cloth Shop', '0.00', '0.00', '1', '0', '1', '2021-12-09 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('316', '8429942367', 'INV', '2021-12-14', '10107', 'Inventory credit For Invoice No1019', '0.00', '750.00', '1', '0', '1', '2021-12-14 05:54:41', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('317', '8429942367', 'INV', '2021-12-14', '102030000002', 'Customer debit For Invoice No -  1019 Customer mohd raies', '1092.50', '0.00', '1', '0', '1', '2021-12-14 05:54:41', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('318', '8429942367', 'INVOICE', '2021-12-14', '303', 'Sale Income For Invoice NO - 1019 Customer mohd raies', '0.00', '200.00', '1', '0', '1', '2021-12-14 05:54:41', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('319', '8429942367', 'INVOICE', '2021-12-14', '50203', 'Sale Income For Invoice NO - 1019 Customer mohd raies', '142.50', '0.00', '1', '0', '1', '2021-12-14 05:54:41', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('320', '5613135125', 'INV', '2021-12-14', '10107', 'Inventory credit For Invoice No1020', '0.00', '1250.00', '1', '0', '1', '2021-12-14 05:59:47', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('321', '5613135125', 'INVOICE', '2021-12-14', '303', 'Sale Income For Invoice NO - 1020 Customer Walking Customer', '0.00', '1075.00', '1', '0', '1', '2021-12-14 05:59:47', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('322', '5613135125', 'INVOICE', '2021-12-14', '50203', 'Sale Income For Invoice NO - 1020 Customer Walking Customer', '348.75', '0.00', '1', '0', '1', '2021-12-14 05:59:47', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('323', '5613135125', 'INV', '2021-12-14', '1020101', 'Cash in Hand in Sale for Invoice No - 1020 customer- Walking Customer', '2673.75', '0.00', '1', '0', '1', '2021-12-14 05:59:47', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('324', '6283228144', 'INV', '2021-12-24', '10107', 'Inventory credit For Invoice No1021', '0.00', '150.00', '1', '0', '1', '2021-12-24 04:57:49', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('325', '6283228144', 'INVOICE', '2021-12-24', '303', 'Sale Income For Invoice NO - 1021 Customer Walking Customer', '0.00', '50.00', '1', '0', '1', '2021-12-24 04:57:49', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('326', '6283228144', 'INVOICE', '2021-12-24', '50203', 'Sale Income For Invoice NO - 1021 Customer Walking Customer', '30.00', '0.00', '1', '0', '1', '2021-12-24 04:57:49', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('327', '3186411324', 'INV', '2021-12-27', '10107', 'Inventory credit For Invoice No1022', '0.00', '9200.00', '1', '0', '1', '2021-12-27 11:27:15', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('328', '3186411324', 'INVOICE', '2021-12-27', '303', 'Sale Income For Invoice NO - 1022 Customer Walking Customer', '0.00', '9875.00', '1', '0', '1', '2021-12-27 11:27:15', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('329', '3186411324', 'INVOICE', '2021-12-27', '50203', 'Sale Income For Invoice NO - 1022 Customer Walking Customer', '2861.25', '0.00', '1', '0', '1', '2021-12-27 11:27:15', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('330', '3186411324', 'INV', '2021-12-27', '1020101', 'Cash in Hand in Sale for Invoice No - 1022 customer- Walking Customer', '21936.25', '0.00', '1', '0', '1', '2021-12-27 11:27:15', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('331', '4189318841', 'INV', '2021-12-27', '10107', 'Inventory credit For Invoice No1023', '0.00', '1350.00', '1', '0', '1', '2021-12-27 11:27:57', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('332', '4189318841', 'INVOICE', '2021-12-27', '303', 'Sale Income For Invoice NO - 1023 Customer Walking Customer', '0.00', '675.00', '1', '0', '1', '2021-12-27 11:27:57', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('333', '4189318841', 'INVOICE', '2021-12-27', '50203', 'Sale Income For Invoice NO - 1023 Customer Walking Customer', '303.75', '0.00', '1', '0', '1', '2021-12-27 11:27:57', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('334', '7785515368', 'INV', '2021-12-27', '10107', 'Inventory credit For Invoice No1024', '0.00', '200.00', '1', '0', '1', '2021-12-27 11:28:23', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('335', '7785515368', 'INVOICE', '2021-12-27', '303', 'Sale Income For Invoice NO - 1024 Customer Walking Customer', '0.00', '50.00', '1', '0', '1', '2021-12-27 11:28:23', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('336', '7785515368', 'INVOICE', '2021-12-27', '50203', 'Sale Income For Invoice NO - 1024 Customer Walking Customer', '37.50', '0.00', '1', '0', '1', '2021-12-27 11:28:23', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('337', 'OP-1', 'Opening', '2022-02-14', '102030000018', '', '200.00', '0.00', '1', '1', '1', '2022-02-14 17:14:22', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('338', 'OP-1', 'Opening', '2022-02-14', '102030000018', '', '200.00', '0.00', '1', '1', '1', '2022-02-14 17:14:25', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('339', 'PM-2', 'PM', '2022-02-14', '502000001', '', '250000.00', '0.00', '1', '0', '1', '2022-02-14 17:15:09', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('340', 'PM-2', 'PM', '2022-02-14', '1020101', 'Paid to Raies Cloth Shop', '0.00', '250000.00', '1', '0', '1', '2022-02-14 17:15:09', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('341', 'CHV-1', 'AD', '2022-02-14', '1020101', '', '0.00', '2500.00', '1', '0', '1', '2022-02-14 17:16:12', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('342', '5733923584', 'INV', '2022-03-09', '10107', 'Inventory credit For Invoice No1025', '0.00', '1100.00', '1', '0', '1', '2022-03-09 06:22:16', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('343', '5733923584', 'INVOICE', '2022-03-09', '303', 'Sale Income For Invoice NO - 1025 Customer Walking Customer', '0.00', '525.00', '1', '0', '1', '2022-03-09 06:22:16', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('344', '5733923584', 'INVOICE', '2022-03-09', '50203', 'Sale Income For Invoice NO - 1025 Customer Walking Customer', '0.00', '0.00', '1', '0', '1', '2022-03-09 06:22:16', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('345', '5733923584', 'INV', '2022-03-09', '1020101', 'Cash in Hand in Sale for Invoice No - 1025 customer- Walking Customer', '1625.00', '0.00', '1', '0', '1', '2022-03-09 06:22:16', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('346', 'DV-1', 'DV', '2022-03-09', '401', '', '1000.00', '0.00', '1', '0', '1', '2022-03-09 06:31:03', NULL, NULL, '0');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('347', 'DV-1', 'DV', '2022-03-09', '1020101', 'Debit voucher from Cash In Hand', '0.00', '1000.00', '1', '0', '1', '2022-03-09 06:31:03', NULL, NULL, '0');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('348', 'Journal-1', 'JV', '2022-03-09', '401', '', '100.00', '0.00', '1', '0', '1', '2022-03-09 06:32:05', NULL, NULL, '0');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('349', 'Journal-1', 'JV', '2022-03-09', '102010201', '', '0.00', '100.00', '1', '0', '1', '2022-03-09 06:32:05', NULL, NULL, '0');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('350', '4518536574', 'INV', '2022-03-09', '10107', 'Inventory credit For Invoice No1026', '0.00', '1650.00', '1', '0', '1', '2022-03-09 06:37:06', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('351', '4518536574', 'INVOICE', '2022-03-09', '303', 'Sale Income For Invoice NO - 1026 Customer Walking Customer', '0.00', '1475.00', '1', '0', '1', '2022-03-09 06:37:06', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('352', '4518536574', 'INVOICE', '2022-03-09', '50203', 'Sale Income For Invoice NO - 1026 Customer Walking Customer', '0.00', '0.00', '1', '0', '1', '2022-03-09 06:37:06', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('353', '6331399271', 'INV', '2022-03-19', '10107', 'Inventory credit For Invoice No1027', '0.00', '13700.00', '1', '0', '1', '2022-03-19 11:54:50', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('354', '6331399271', 'INVOICE', '2022-03-19', '303', 'Sale Income For Invoice NO - 1027 Customer Walking Customer', '0.00', '11675.00', '1', '0', '1', '2022-03-19 11:54:50', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('355', '6331399271', 'INVOICE', '2022-03-19', '50203', 'Sale Income For Invoice NO - 1027 Customer Walking Customer', '0.00', '0.00', '1', '0', '1', '2022-03-19 11:54:50', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('356', '6331399271', 'INV', '2022-03-19', '1020101', 'Cash in Hand in Sale for Invoice No - 1027 customer- Walking Customer', '25375.00', '0.00', '1', '0', '1', '2022-03-19 11:54:50', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('357', '5353128427', 'INV', '2022-03-19', '10107', 'Inventory credit For Invoice No1028', '0.00', '1400.00', '1', '0', '1', '2022-03-19 13:15:44', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('358', '5353128427', 'INVOICE', '2022-03-19', '303', 'Sale Income For Invoice NO - 1028 Customer Walking Customer', '0.00', '600.00', '1', '0', '1', '2022-03-19 13:15:44', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('359', '5353128427', 'INVOICE', '2022-03-19', '50203', 'Sale Income For Invoice NO - 1028 Customer Walking Customer', '0.00', '0.00', '1', '0', '1', '2022-03-19 13:15:44', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('360', '7519975326', 'INV', '2022-03-19', '10107', 'Inventory credit For Invoice No1029', '0.00', '1250.00', '1', '0', '1', '2022-03-19 13:16:29', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('361', '7519975326', 'INVOICE', '2022-03-19', '303', 'Sale Income For Invoice NO - 1029 Customer Walking Customer', '0.00', '1075.00', '1', '0', '1', '2022-03-19 13:16:29', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('362', '7519975326', 'INVOICE', '2022-03-19', '50203', 'Sale Income For Invoice NO - 1029 Customer Walking Customer', '0.00', '0.00', '1', '0', '1', '2022-03-19 13:16:29', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('363', '7519975326', 'INV', '2022-03-19', '1020101', 'Cash in Hand in Sale for Invoice No - 1029 customer- Walking Customer', '2325.00', '0.00', '1', '0', '1', '2022-03-19 13:16:29', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('364', '20220401150726', 'Purchase', '2022-04-01', '10107', 'Inventory Debit For Supplier Raies Cloth Shop', '0.00', '0.00', '1', '0', '1', '2022-04-01 15:07:26', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('365', '20220401150726', 'Purchase', '2022-04-01', '502000001', 'Supplier .Raies Cloth Shop', '0.00', '0.00', '1', '0', '1', '2022-04-01 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('366', 'OP-2', 'Opening', '2022-04-01', '102030000008', '', '100.00', '0.00', '1', '1', '1', '2022-04-01 15:08:35', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('367', 'OP-2', 'Opening', '2022-04-01', '102030000008', '', '100.00', '0.00', '1', '1', '1', '2022-04-01 15:08:36', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('368', 'Journal-2', 'JV', '2022-04-01', '102030000001', '', '0.00', '0.00', '1', '0', '1', '2022-04-01 15:09:03', NULL, NULL, '0');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('369', '7216457549', 'INV', '2022-04-04', '10107', 'Inventory credit For Invoice No1030', '0.00', '1500.00', '1', '0', '1', '2022-04-04 08:15:23', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('370', '7216457549', 'INVOICE', '2022-04-04', '303', 'Sale Income For Invoice NO - 1030 Customer Walking Customer', '0.00', '500.00', '1', '0', '1', '2022-04-04 08:15:23', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('371', '7216457549', 'INVOICE', '2022-04-04', '50203', 'Sale Income For Invoice NO - 1030 Customer Walking Customer', '0.00', '0.00', '1', '0', '1', '2022-04-04 08:15:23', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('372', '7216457549', 'INV', '2022-04-04', '1020101', 'Cash in Hand in Sale for Invoice No - 1030 customer- Walking Customer', '2000.00', '0.00', '1', '0', '1', '2022-04-04 08:15:23', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('373', '3621538482', 'INV', '2022-04-04', '10107', 'Inventory credit For Invoice No1030', '0.00', '1500.00', '1', '0', '1', '2022-04-04 08:15:23', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('374', '3621538482', 'INVOICE', '2022-04-04', '303', 'Sale Income For Invoice NO - 1030 Customer Walking Customer', '0.00', '500.00', '1', '0', '1', '2022-04-04 08:15:23', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('375', '3621538482', 'INVOICE', '2022-04-04', '50203', 'Sale Income For Invoice NO - 1030 Customer Walking Customer', '0.00', '0.00', '1', '0', '1', '2022-04-04 08:15:23', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('376', '3621538482', 'INV', '2022-04-04', '1020101', 'Cash in Hand in Sale for Invoice No - 1030 customer- Walking Customer', '2000.00', '0.00', '1', '0', '1', '2022-04-04 08:15:23', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('377', 'CR-2', 'CR', '2022-04-04', '102030000003', '', '0.00', '900.00', '1', '0', '1', '2022-04-04 09:21:09', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('378', 'CR-2', 'CR', '2022-04-04', '1020101', 'Cash in Hand For  mohd raies', '900.00', '0.00', '1', '0', '1', '2022-04-04 09:21:09', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('379', '78DRCSXRNN', 'Advance', '2022-04-04', '102030000021', 'Customer Advance For  Abdullah', '5000.00', '0.00', '1', '0', '1', '2022-04-04 10:33:46', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('380', '78DRCSXRNN', 'Advance', '2022-04-04', '1020101', 'Cash in Hand  For Abdullah Advance', '5000.00', '0.00', '1', '0', '1', '2022-04-04 10:33:46', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('381', 'OP-3', 'Opening', '2022-04-04', '102030000009', 'done', '5000.00', '0.00', '1', '1', '1', '2022-04-04 10:41:38', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('382', 'CR-3', 'CR', '2022-04-04', '102030000018', '', '0.00', '50000.00', '1', '0', '1', '2022-04-04 10:50:22', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('383', 'CR-3', 'CR', '2022-04-04', '102010201', 'Customer Receive From mohd raies', '50000.00', '0.00', '1', '0', '1', '2022-04-04 10:50:22', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('384', '1375596461', 'INV', '2022-06-22', '10107', 'Inventory credit For Invoice No1031', '0.00', '2250.00', '1', '0', '95121', '2022-06-22 10:04:08', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('385', '1375596461', 'INVOICE', '2022-06-22', '303', 'Sale Income For Invoice NO - 1031 Customer Walking Customer', '0.00', '1575.00', '1', '0', '95121', '2022-06-22 10:04:08', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('386', '1375596461', 'INVOICE', '2022-06-22', '50203', 'Sale Income For Invoice NO - 1031 Customer Walking Customer', '0.00', '0.00', '1', '0', '95121', '2022-06-22 10:04:08', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `is_opening`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('387', '1375596461', 'INV', '2022-06-22', '1020101', 'Cash in Hand in Sale for Invoice No - 1031 customer- Walking Customer', '3825.00', '0.00', '1', '0', '95121', '2022-06-22 10:04:08', NULL, NULL, '1');


#
# TABLE STRUCTURE FOR: app_setting
#

DROP TABLE IF EXISTS `app_setting`;

CREATE TABLE `app_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `localhserver` varchar(250) DEFAULT NULL,
  `onlineserver` varchar(250) DEFAULT NULL,
  `hotspot` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `app_setting` (`id`, `localhserver`, `onlineserver`, `hotspot`) VALUES ('1', 'https://192.168.1.153/saleserp_9.7', 'https://websutility.com/saleserp_v9.3-demo', 'https://192.168.1.167/saleserp');


#
# TABLE STRUCTURE FOR: attendance
#

DROP TABLE IF EXISTS `attendance`;

CREATE TABLE `attendance` (
  `att_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `sign_in` varchar(30) NOT NULL,
  `sign_out` varchar(30) NOT NULL,
  `staytime` varchar(30) NOT NULL,
  PRIMARY KEY (`att_id`),
  KEY `employee_id` (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: bank_add
#

DROP TABLE IF EXISTS `bank_add`;

CREATE TABLE `bank_add` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bank_id` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `ac_name` varchar(250) DEFAULT NULL,
  `ac_number` varchar(250) DEFAULT NULL,
  `branch` varchar(250) DEFAULT NULL,
  `signature_pic` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `bank_add` (`id`, `bank_id`, `bank_name`, `ac_name`, `ac_number`, `branch`, `signature_pic`, `status`) VALUES ('1', '9IMP9TA57A', 'State of India', '87676676768876', '230202020202020220', 'Delhi', '', '1');
INSERT INTO `bank_add` (`id`, `bank_id`, `bank_name`, `ac_name`, `ac_number`, `branch`, `signature_pic`, `status`) VALUES ('2', 'WTWAWAYHFV', 'Faysal Bank', 'Jerry', '324567890223', 'Mumbai', '', '1');


#
# TABLE STRUCTURE FOR: company_information
#

DROP TABLE IF EXISTS `company_information`;

CREATE TABLE `company_information` (
  `company_id` varchar(250) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `building_no` varchar(255) NOT NULL,
  `street_name` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `additional_no` varchar(255) NOT NULL,
  `vat_no` varchar(255) NOT NULL,
  `other_buyer_no` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `company_information` (`company_id`, `company_name`, `email`, `address`, `mobile`, `website`, `building_no`, `street_name`, `district`, `city`, `country`, `postal_code`, `additional_no`, `vat_no`, `other_buyer_no`, `status`) VALUES ('1', 'Demo LTD', 'example@gmail.com', 'New Delhi', '234234', 'https://websutility.com/', '232', 'TEST', 'Delhi', 'delhi', 'india', '24323', '421312321312', '321232312', '12', '1');


#
# TABLE STRUCTURE FOR: currency_tbl
#

DROP TABLE IF EXISTS `currency_tbl`;

CREATE TABLE `currency_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `currency_name` varchar(50) NOT NULL,
  `icon` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `currency_tbl` (`id`, `currency_name`, `icon`) VALUES ('1', 'Saudi Riyal', 'SAR');
INSERT INTO `currency_tbl` (`id`, `currency_name`, `icon`) VALUES ('2', 'ريال  سعودي ', 'SAR');


#
# TABLE STRUCTURE FOR: customer_information
#

DROP TABLE IF EXISTS `customer_information`;

CREATE TABLE `customer_information` (
  `customer_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `customer_code` varchar(255) NOT NULL DEFAULT '',
  `customer_name` varchar(255) DEFAULT NULL,
  `buiding_no` int(11) NOT NULL,
  `customer_address` varchar(255) DEFAULT NULL,
  `address2` text NOT NULL,
  `customer_mobile` varchar(100) DEFAULT NULL,
  `customer_email` varchar(100) DEFAULT NULL,
  `email_address` varchar(200) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `fax` varchar(100) DEFAULT NULL,
  `city` text,
  `state` text,
  `zip` varchar(50) DEFAULT NULL,
  `country` varchar(250) DEFAULT NULL,
  `additional_number` varchar(255) NOT NULL,
  `vat_number` varchar(255) NOT NULL,
  `credit_limit` int(11) NOT NULL,
  `credit_days` int(11) NOT NULL,
  `website_link` varchar(255) NOT NULL DEFAULT '',
  `po_box` varchar(255) NOT NULL DEFAULT '',
  `other_bayer_id` int(11) NOT NULL,
  `status` int(2) NOT NULL COMMENT '1=paid,2=credit',
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`customer_id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

INSERT INTO `customer_information` (`customer_id`, `customer_code`, `customer_name`, `buiding_no`, `customer_address`, `address2`, `customer_mobile`, `customer_email`, `email_address`, `contact`, `phone`, `fax`, `city`, `state`, `zip`, `country`, `additional_number`, `vat_number`, `credit_limit`, `credit_days`, `website_link`, `po_box`, `other_bayer_id`, `status`, `create_date`, `create_by`) VALUES ('1', '', 'Walking Customer', '1008', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '67567458767547', '546345634534', '0', '0', '', '', '1787', '1', '2020-03-02 23:23:10', NULL);
INSERT INTO `customer_information` (`customer_id`, `customer_code`, `customer_name`, `buiding_no`, `customer_address`, `address2`, `customer_mobile`, `customer_email`, `email_address`, `contact`, `phone`, `fax`, `city`, `state`, `zip`, `country`, `additional_number`, `vat_number`, `credit_limit`, `credit_days`, `website_link`, `po_box`, `other_bayer_id`, `status`, `create_date`, `create_by`) VALUES ('2', '', 'mohd raies', '280868', 'fdg', 'dsf', '4646345546', 'mohdraies.websutility@gmail.com', 'mohdraies.websutility@gmail.com', '23432432432432', '4646345546', '4324', 'gurgaon', '7647546345345', '29809', 'india', '746754754654', '7647546345345', '0', '0', '', '', '29809', '1', '2021-11-05 07:19:47', '1');
INSERT INTO `customer_information` (`customer_id`, `customer_code`, `customer_name`, `buiding_no`, `customer_address`, `address2`, `customer_mobile`, `customer_email`, `email_address`, `contact`, `phone`, `fax`, `city`, `state`, `zip`, `country`, `additional_number`, `vat_number`, `credit_limit`, `credit_days`, `website_link`, `po_box`, `other_bayer_id`, `status`, `create_date`, `create_by`) VALUES ('3', '', 'mohd raies', '0', 'fdg', 'test', '4646345546', 'mohdraies.websutility1@gmail.com', 'mohdraies.websutility@gmail.com', '4534543534', '4646345546', '4545', 'gurgaon', '', '0', 'india', '', '', '232312', '3', '', '', '0', '1', '2021-11-23 05:49:57', '1');
INSERT INTO `customer_information` (`customer_id`, `customer_code`, `customer_name`, `buiding_no`, `customer_address`, `address2`, `customer_mobile`, `customer_email`, `email_address`, `contact`, `phone`, `fax`, `city`, `state`, `zip`, `country`, `additional_number`, `vat_number`, `credit_limit`, `credit_days`, `website_link`, `po_box`, `other_bayer_id`, `status`, `create_date`, `create_by`) VALUES ('21', 'ERP-C100021', 'mohd raies', '12455', 'fdg', 'ngbn', '4646345546', 'info@testing.in', 'info@test.in', '456456546546', '4646345546', '456456', 'gurgaon', 'delhi', '4556', 'india', '65464564564564564', '546456', '1', '465', 'link', 'box', '0', '1', '2021-12-06 06:18:44', '1');
INSERT INTO `customer_information` (`customer_id`, `customer_code`, `customer_name`, `buiding_no`, `customer_address`, `address2`, `customer_mobile`, `customer_email`, `email_address`, `contact`, `phone`, `fax`, `city`, `state`, `zip`, `country`, `additional_number`, `vat_number`, `credit_limit`, `credit_days`, `website_link`, `po_box`, `other_bayer_id`, `status`, `create_date`, `create_by`) VALUES ('20', 'ERP-C100020', 'fh rthr', '0', 'fdg', 'fwewet', '4646345546', 'mohdraies421.websutility@gmail.com', 'mohdra34324123ies.websutility@gmail.com', '2352343254324234', '4646345546', '234324', 'gurgaon', 'delhi', '0', 'india', '234234234', '234324234', '1', '4', 'link', 'box', '0', '1', '2021-12-02 10:56:06', '1');
INSERT INTO `customer_information` (`customer_id`, `customer_code`, `customer_name`, `buiding_no`, `customer_address`, `address2`, `customer_mobile`, `customer_email`, `email_address`, `contact`, `phone`, `fax`, `city`, `state`, `zip`, `country`, `additional_number`, `vat_number`, `credit_limit`, `credit_days`, `website_link`, `po_box`, `other_bayer_id`, `status`, `create_date`, `create_by`) VALUES ('22', 'ERP-C100022', 'احمد', '0', 'الرياض  العليا ', '', '055555555', 'ahmad@aaa.com', '', '', '0123456', '01222215', '', '', '', 'السعودية', '', '1222222221', '10000', '60', '', '', '0', '1', '2022-02-22 11:51:56', '1');
INSERT INTO `customer_information` (`customer_id`, `customer_code`, `customer_name`, `buiding_no`, `customer_address`, `address2`, `customer_mobile`, `customer_email`, `email_address`, `contact`, `phone`, `fax`, `city`, `state`, `zip`, `country`, `additional_number`, `vat_number`, `credit_limit`, `credit_days`, `website_link`, `po_box`, `other_bayer_id`, `status`, `create_date`, `create_by`) VALUES ('23', '', 'test', '0', 'asfasdf ', '', '123456', 'test@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '0', '0', '', '', '0', '1', '2022-03-19 12:10:30', NULL);
INSERT INTO `customer_information` (`customer_id`, `customer_code`, `customer_name`, `buiding_no`, `customer_address`, `address2`, `customer_mobile`, `customer_email`, `email_address`, `contact`, `phone`, `fax`, `city`, `state`, `zip`, `country`, `additional_number`, `vat_number`, `credit_limit`, `credit_days`, `website_link`, `po_box`, `other_bayer_id`, `status`, `create_date`, `create_by`) VALUES ('24', '', 'Abdullah', '0', 'Amina tower', '', '03034145678', 'zyx@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '0', '0', '', '', '0', '1', '2022-04-04 10:19:50', NULL);
INSERT INTO `customer_information` (`customer_id`, `customer_code`, `customer_name`, `buiding_no`, `customer_address`, `address2`, `customer_mobile`, `customer_email`, `email_address`, `contact`, `phone`, `fax`, `city`, `state`, `zip`, `country`, `additional_number`, `vat_number`, `credit_limit`, `credit_days`, `website_link`, `po_box`, `other_bayer_id`, `status`, `create_date`, `create_by`) VALUES ('25', 'ERP-C100025', 'Jamal Al Harthy', '0', 'Maabelah', '', '97796600', 'fahadjt@hotmail.com', '', 'Self', '', '', 'Muscat', '', '', 'Oman', '', '', '0', '0', '', '', '0', '1', '2022-04-07 09:42:54', '1');


#
# TABLE STRUCTURE FOR: daily_banking_add
#

DROP TABLE IF EXISTS `daily_banking_add`;

CREATE TABLE `daily_banking_add` (
  `banking_id` varchar(255) NOT NULL,
  `date` datetime DEFAULT NULL,
  `bank_id` varchar(100) DEFAULT NULL,
  `deposit_type` varchar(255) DEFAULT NULL,
  `transaction_type` varchar(255) DEFAULT NULL,
  `description` text,
  `amount` int(11) DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: daily_closing
#

DROP TABLE IF EXISTS `daily_closing`;

CREATE TABLE `daily_closing` (
  `closing_id` int(11) NOT NULL AUTO_INCREMENT,
  `last_day_closing` float NOT NULL,
  `cash_in` float NOT NULL,
  `cash_out` float NOT NULL,
  `date` varchar(250) NOT NULL,
  `amount` float NOT NULL,
  `adjustment` float DEFAULT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`closing_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: designation
#

DROP TABLE IF EXISTS `designation`;

CREATE TABLE `designation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(150) NOT NULL,
  `details` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `designation` (`id`, `designation`, `details`) VALUES ('1', 'Staff', 'Development Team');


#
# TABLE STRUCTURE FOR: email_config
#

DROP TABLE IF EXISTS `email_config`;

CREATE TABLE `email_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `protocol` text NOT NULL,
  `smtp_host` text NOT NULL,
  `smtp_port` text NOT NULL,
  `smtp_user` varchar(35) NOT NULL,
  `smtp_pass` varchar(35) NOT NULL,
  `mailtype` varchar(30) DEFAULT NULL,
  `isinvoice` tinyint(4) NOT NULL,
  `isservice` tinyint(4) NOT NULL,
  `isquotation` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `email_config` (`id`, `protocol`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `mailtype`, `isinvoice`, `isservice`, `isquotation`) VALUES ('1', 'ssmtp', 'ssl://ssmtp.gmail.com', '25', 'demo@gmail.coms', 'demo123456', 'html', '0', '0', '0');


#
# TABLE STRUCTURE FOR: employee_history
#

DROP TABLE IF EXISTS `employee_history`;

CREATE TABLE `employee_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `rate_type` int(11) NOT NULL,
  `hrate` float NOT NULL,
  `email` varchar(50) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `address_line_1` text NOT NULL,
  `address_line_2` text NOT NULL,
  `image` text,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zip` varchar(50) NOT NULL,
  `residence_number` varchar(255) NOT NULL DEFAULT '',
  `joining_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO `employee_history` (`id`, `first_name`, `last_name`, `designation`, `phone`, `rate_type`, `hrate`, `email`, `blood_group`, `address_line_1`, `address_line_2`, `image`, `country`, `city`, `zip`, `residence_number`, `joining_date`) VALUES ('1', '', 'ttt', 'hjf', '', '0', '0', '', '', '', '', NULL, '', '', '', '4234', '2021-11-23');
INSERT INTO `employee_history` (`id`, `first_name`, `last_name`, `designation`, `phone`, `rate_type`, `hrate`, `email`, `blood_group`, `address_line_1`, `address_line_2`, `image`, `country`, `city`, `zip`, `residence_number`, `joining_date`) VALUES ('2', 'MOHIT', 'GUPTA', '1', '08810556035', '0', '3000', 'mohit@websutility.com', 'A+', 'C1-A Plot No 5 Ramchander Enclave Mohan Garden Uttam Nagar Del NEW DELHI, Delhi 110059', 'Om Vihar', '', 'India', 'New Delhi', '110059', '', '0000-00-00');
INSERT INTO `employee_history` (`id`, `first_name`, `last_name`, `designation`, `phone`, `rate_type`, `hrate`, `email`, `blood_group`, `address_line_1`, `address_line_2`, `image`, `country`, `city`, `zip`, `residence_number`, `joining_date`) VALUES ('3', 'Syed', 'Syed', '1', '0546304763', '0', '0', '', '', '', '', '', ' ', '', '', '', '0000-00-00');


#
# TABLE STRUCTURE FOR: employee_salary_payment
#

DROP TABLE IF EXISTS `employee_salary_payment`;

CREATE TABLE `employee_salary_payment` (
  `emp_sal_pay_id` int(11) NOT NULL AUTO_INCREMENT,
  `generate_id` int(11) NOT NULL,
  `employee_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `total_salary` decimal(18,2) NOT NULL DEFAULT '0.00',
  `total_working_minutes` varchar(50) CHARACTER SET latin1 NOT NULL,
  `working_period` varchar(50) CHARACTER SET latin1 NOT NULL,
  `payment_due` varchar(50) CHARACTER SET latin1 NOT NULL,
  `payment_date` varchar(50) CHARACTER SET latin1 NOT NULL,
  `paid_by` varchar(50) CHARACTER SET latin1 NOT NULL,
  `salary_month` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`emp_sal_pay_id`),
  KEY `employee_id` (`employee_id`),
  KEY `generate_id` (`generate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: employee_salary_setup
#

DROP TABLE IF EXISTS `employee_salary_setup`;

CREATE TABLE `employee_salary_setup` (
  `e_s_s_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `sal_type` varchar(30) NOT NULL,
  `salary_type_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `amount` decimal(12,2) NOT NULL DEFAULT '0.00',
  `create_date` date DEFAULT NULL,
  `update_date` datetime(6) DEFAULT NULL,
  `update_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `gross_salary` float NOT NULL,
  PRIMARY KEY (`e_s_s_id`),
  KEY `employee_id` (`employee_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('2', '1', '0', '0', '0.00', '2022-05-25', NULL, '', '0');


#
# TABLE STRUCTURE FOR: expense
#

DROP TABLE IF EXISTS `expense`;

CREATE TABLE `expense` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `type` varchar(100) NOT NULL,
  `voucher_no` varchar(50) NOT NULL,
  `amount` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: expense_item
#

DROP TABLE IF EXISTS `expense_item`;

CREATE TABLE `expense_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `expense_item_name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `expense_item` (`id`, `expense_item_name`) VALUES ('1', 'شراء سياره للموقع');
INSERT INTO `expense_item` (`id`, `expense_item_name`) VALUES ('2', 'شراء سياره للموقع');


#
# TABLE STRUCTURE FOR: invoice
#

DROP TABLE IF EXISTS `invoice`;

CREATE TABLE `invoice` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `invoice_id` bigint(20) NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `date` varchar(50) DEFAULT NULL,
  `total_amount` decimal(18,2) NOT NULL DEFAULT '0.00',
  `paid_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `due_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `prevous_due` decimal(20,2) NOT NULL DEFAULT '0.00',
  `shipping_cost` decimal(10,2) NOT NULL DEFAULT '0.00',
  `invoice` bigint(20) NOT NULL,
  `offline_invoice_no` bigint(20) DEFAULT NULL,
  `invoice_discount` decimal(10,2) DEFAULT '0.00' COMMENT 'invoice discount',
  `total_discount` decimal(10,2) DEFAULT '0.00' COMMENT 'total invoice discount',
  `total_tax` decimal(10,2) DEFAULT '0.00',
  `sales_by` varchar(50) NOT NULL,
  `invoice_details` text NOT NULL,
  `status` int(2) NOT NULL,
  `bank_id` varchar(30) DEFAULT NULL,
  `payment_type` int(11) NOT NULL,
  `is_online` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `customer_id` (`customer_id`),
  KEY `invoice_id` (`invoice_id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('1', '6659323128', '2', '2021-11-09', '4000.00', '0.00', '439745.00', '435745.00', '0.00', '1000', NULL, '0.00', '0.00', '0.00', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('2', '8674986371', '2', '2021-11-09', '5000.00', '0.00', '444745.00', '439745.00', '0.00', '1001', NULL, '0.00', '0.00', '0.00', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('3', '2249773116', '2', '2021-11-09', '5400.00', '0.00', '450145.00', '444745.00', '0.00', '1002', NULL, '100.00', '100.00', '0.00', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('4', '8546983435', '2', '2021-11-09', '5400.00', '0.00', '450145.00', '444745.00', '0.00', '1002', NULL, '100.00', '100.00', '0.00', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('5', '6986964477', '2', '2021-11-09', '4850.00', '0.00', '449595.00', '444745.00', '0.00', '1002', NULL, '100.00', '650.00', '0.00', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('6', '7298782721', '2', '2021-11-09', '4850.00', '0.00', '449595.00', '444745.00', '0.00', '1002', NULL, '100.00', '650.00', '0.00', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('7', '1739112481', '2', '2021-11-09', '4850.00', '0.00', '449595.00', '444745.00', '0.00', '1002', NULL, '100.00', '650.00', '0.00', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('8', '8354147599', '2', '2021-11-09', '4850.00', '0.00', '449595.00', '444745.00', '0.00', '1002', NULL, '100.00', '650.00', '0.00', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('9', '6513464233', '2', '2021-11-09', '6000.00', '0.00', '480945.00', '474945.00', '0.00', '1003', NULL, '0.00', '1000.00', '0.00', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('10', '5683799451', '1', '2021-11-09', '214.00', '0.00', '214.00', '0.00', '50.00', '1004', NULL, '20.00', '60.00', '24.00', '1', 'testing.', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('11', '5599835478', '1', '2021-11-09', '214.00', '0.00', '214.00', '0.00', '50.00', '1004', NULL, '20.00', '60.00', '24.00', '1', 'testing.', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('12', '6682197427', '1', '2021-11-09', '214.00', '0.00', '214.00', '0.00', '50.00', '1004', NULL, '20.00', '60.00', '24.00', '1', 'testing.', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('13', '6874298946', '1', '2021-11-09', '214.00', '0.00', '214.00', '0.00', '50.00', '1004', NULL, '20.00', '60.00', '24.00', '1', 'testing.', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('14', '9393771468', '2', '2021-11-09', '1800.00', '0.00', '482745.00', '480945.00', '0.00', '1005', NULL, '0.00', '200.00', '0.00', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('15', '6817916824', '2', '2021-11-09', '1800.00', '0.00', '482745.00', '480945.00', '0.00', '1005', NULL, '0.00', '200.00', '0.00', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('16', '2274219949', '2', '2021-11-09', '1800.00', '0.00', '482745.00', '480945.00', '0.00', '1005', NULL, '0.00', '200.00', '0.00', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('17', '7362847711', '2', '2021-11-09', '4650.00', '0.00', '490995.00', '486345.00', '0.00', '1006', NULL, '0.00', '350.00', '0.00', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('18', '2811646838', '2', '2021-11-10', '3594.00', '0.00', '3594.00', '490995.00', '0.00', '1007', NULL, '0.00', '220.00', '314.00', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('19', '7817516462', '2', '2021-11-10', '3442.50', '0.00', '7036.50', '3594.00', '0.00', '1008', NULL, '0.00', '350.00', '292.50', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('20', '8741351142', '2', '2021-11-10', '2100.00', '0.00', '9136.50', '7036.50', '0.00', '1009', NULL, '0.00', '0.00', '100.00', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('21', '8896795522', '2', '2021-11-10', '2100.00', '0.00', '9136.50', '7036.50', '0.00', '1009', NULL, '0.00', '0.00', '100.00', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('22', '7371186723', '2', '2021-11-10', '2100.00', '0.00', '9136.50', '7036.50', '0.00', '1009', NULL, '0.00', '0.00', '100.00', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('23', '1133922141', '2', '2021-11-10', '2100.00', '0.00', '15436.50', '13336.50', '0.00', '1010', NULL, '0.00', '0.00', '100.00', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('24', '9517155219', '2', '2021-11-20', '1890.00', '0.00', '17326.50', '15436.50', '0.00', '1011', NULL, '0.00', '200.00', '90.00', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('25', '5867751589', '2', '2021-12-06', '230.00', '12001.50', '0.00', '11771.50', '0.00', '1012', NULL, '0.00', '0.00', '30.00', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('26', '3347975875', '1', '2021-12-06', '143.75', '0.00', '143.75', '0.00', '0.00', '1013', NULL, '0.00', '0.00', '18.75', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('27', '3975981755', '1', '2021-12-06', '7187.50', '7187.50', '0.00', '0.00', '0.00', '1014', NULL, '0.00', '0.00', '937.50', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('28', '7573274576', '2', '2021-12-07', '143.75', '143.75', '0.00', '0.00', '0.00', '1015', NULL, '0.00', '0.00', '18.75', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('29', '2225786899', '1', '2021-12-07', '143.75', '0.00', '143.75', '0.00', '0.00', '1016', NULL, '0.00', '0.00', '18.75', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('30', '3393793746', '1', '2021-12-07', '230.00', '230.00', '0.00', '0.00', '0.00', '1017', NULL, '0.00', '0.00', '30.00', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('31', '4812168955', '1', '2021-12-09', '1437.50', '1437.50', '0.00', '0.00', '0.00', '1018', NULL, '0.00', '0.00', '187.50', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('32', '1685329834', '1', '2021-12-09', '1437.50', '1437.50', '0.00', '0.00', '0.00', '1018', NULL, '0.00', '0.00', '187.50', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('33', '8429942367', '2', '2021-12-14', '1092.50', '0.00', '1092.50', '0.00', '0.00', '1019', NULL, '0.00', '50.00', '142.50', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('34', '5613135125', '1', '2021-12-14', '2673.75', '2673.75', '0.00', '0.00', '0.00', '1020', NULL, '0.00', '0.00', '348.75', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('35', '6283228144', '1', '2021-12-24', '230.00', '0.00', '230.00', '0.00', '0.00', '1021', NULL, '0.00', '0.00', '30.00', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('36', '3186411324', '1', '2021-12-27', '21936.25', '21936.25', '0.00', '0.00', '0.00', '1022', NULL, '0.00', '0.00', '2861.25', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('37', '4189318841', '1', '2021-12-27', '2328.75', '0.00', '2328.75', '0.00', '0.00', '1023', NULL, '0.00', '0.00', '303.75', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('38', '7785515368', '1', '2021-12-27', '287.50', '0.00', '287.50', '0.00', '0.00', '1024', NULL, '0.00', '0.00', '37.50', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('39', '5733923584', '1', '2022-03-09', '1625.00', '1625.00', '0.00', '0.00', '0.00', '1025', NULL, '0.00', '0.00', '0.00', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('40', '4518536574', '1', '2022-03-09', '3125.00', '0.00', '3125.00', '0.00', '0.00', '1026', NULL, '0.00', '0.00', '0.00', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('41', '6331399271', '1', '2022-03-19', '25375.00', '25375.00', '0.00', '0.00', '0.00', '1027', NULL, '0.00', '0.00', '0.00', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('42', '5353128427', '1', '2022-03-19', '2000.00', '0.00', '2000.00', '0.00', '0.00', '1028', NULL, '0.00', '0.00', '0.00', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('43', '7519975326', '1', '2022-03-19', '2325.00', '2325.00', '0.00', '0.00', '0.00', '1029', NULL, '0.00', '0.00', '0.00', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('44', '7216457549', '1', '2022-04-04', '2000.00', '2000.00', '0.00', '0.00', '0.00', '1030', NULL, '0.00', '0.00', '0.00', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('45', '3621538482', '1', '2022-04-04', '2000.00', '2000.00', '0.00', '0.00', '0.00', '1030', NULL, '0.00', '0.00', '0.00', '1', 'Thank you for shopping with us', '1', NULL, '1', '1');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `paid_amount`, `due_amount`, `prevous_due`, `shipping_cost`, `invoice`, `offline_invoice_no`, `invoice_discount`, `total_discount`, `total_tax`, `sales_by`, `invoice_details`, `status`, `bank_id`, `payment_type`, `is_online`) VALUES ('46', '1375596461', '1', '2022-06-22', '3825.00', '3825.00', '0.00', '0.00', '0.00', '1031', NULL, '0.00', '0.00', '0.00', '95121', 'Thank you for shopping with us', '1', NULL, '1', '1');


#
# TABLE STRUCTURE FOR: invoice_details
#

DROP TABLE IF EXISTS `invoice_details`;

CREATE TABLE `invoice_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_details_id` varchar(100) NOT NULL,
  `invoice_id` varchar(100) NOT NULL,
  `product_id` varchar(30) NOT NULL,
  `serial_no` varchar(30) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `quantity` decimal(10,2) DEFAULT NULL,
  `rate` decimal(10,2) DEFAULT NULL,
  `tax_rate` varchar(255) NOT NULL DEFAULT '',
  `tax_amount` varchar(255) NOT NULL DEFAULT '',
  `supplier_rate` float DEFAULT NULL,
  `total_price` decimal(12,2) DEFAULT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `discount_per` varchar(15) DEFAULT NULL,
  `tax` decimal(10,2) DEFAULT NULL,
  `paid_amount` decimal(12,0) DEFAULT NULL,
  `due_amount` decimal(10,2) DEFAULT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `invoice_id` (`invoice_id`),
  KEY `product_id` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `serial_no`, `description`, `quantity`, `rate`, `tax_rate`, `tax_amount`, `supplier_rate`, `total_price`, `discount`, `discount_per`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('1', '243134413635877', '2274219949', '19838372', 'HONDA10002', '', '1.00', '2000.00', '', '', '1000', '1800.00', '0.01', '10', '0.00', '0', '482745.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `serial_no`, `description`, `quantity`, `rate`, `tax_rate`, `tax_amount`, `supplier_rate`, `total_price`, `discount`, `discount_per`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('2', '741796599989841', '7362847711', '19838372', 'HONDA10002', '', '1.00', '2000.00', '', '', '1000', '1800.00', '0.01', '10', '0.00', '0', '490995.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `serial_no`, `description`, `quantity`, `rate`, `tax_rate`, `tax_amount`, `supplier_rate`, `total_price`, `discount`, `discount_per`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('3', '674298963694363', '7362847711', '65222009', 'HONDA10001', '', '2.00', '1500.00', '', '', '1000', '2850.00', '0.01', '5', '0.00', '0', '490995.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `serial_no`, `description`, `quantity`, `rate`, `tax_rate`, `tax_amount`, `supplier_rate`, `total_price`, `discount`, `discount_per`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('4', '348227751484898', '2811646838', '19838372', 'HONDA10002', '', '1.00', '2000.00', '', '', '1000', '1780.00', '0.01', '11', '89.00', '0', '3594.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `serial_no`, `description`, `quantity`, `rate`, `tax_rate`, `tax_amount`, `supplier_rate`, `total_price`, `discount`, `discount_per`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('5', '431435841959181', '2811646838', '65222009', 'HONDA10001', '', '1.00', '1500.00', '', '', '1000', '1500.00', '0.00', '', '225.00', '0', '3594.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `serial_no`, `description`, `quantity`, `rate`, `tax_rate`, `tax_amount`, `supplier_rate`, `total_price`, `discount`, `discount_per`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('6', '822367511864633', '7371186723', '19838372', 'HONDA10002', '', '1.00', '2000.00', '5', '100', '1000', '2000.00', '0.00', '', NULL, '0', '9136.50', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `serial_no`, `description`, `quantity`, `rate`, `tax_rate`, `tax_amount`, `supplier_rate`, `total_price`, `discount`, `discount_per`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('11', '975776316474744', '9517155219', '19838372', 'HONDA10002', '', '1.00', '2000.00', '5', '90', '1000', '1800.00', '0.01', '10', NULL, '0', '17326.50', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `serial_no`, `description`, `quantity`, `rate`, `tax_rate`, `tax_amount`, `supplier_rate`, `total_price`, `discount`, `discount_per`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('10', '357641278733322', '1133922141', '19838372', 'HONDA10002', '', '1.00', '2000.00', '5', '100', '1000', '2000.00', '0.00', '', '100.00', '0', '15436.50', '0');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `serial_no`, `description`, `quantity`, `rate`, `tax_rate`, `tax_amount`, `supplier_rate`, `total_price`, `discount`, `discount_per`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('12', '175139362116668', '5867751589', 'test', NULL, '', '1.00', '200.00', '15', '30', '150', '200.00', '0.00', '', NULL, '12002', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `serial_no`, `description`, `quantity`, `rate`, `tax_rate`, `tax_amount`, `supplier_rate`, `total_price`, `discount`, `discount_per`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('13', '687298668752294', '3347975875', '10481603', 'CK-BRZ-1100', '', '1.00', '125.00', '15', '18.75', '100', '125.00', '0.00', '', NULL, '0', '143.75', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `serial_no`, `description`, `quantity`, `rate`, `tax_rate`, `tax_amount`, `supplier_rate`, `total_price`, `discount`, `discount_per`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('14', '861424667886491', '3975981755', '10481603', NULL, '', '50.00', '125.00', '15', '937.5', '100', '6250.00', '0.00', '', NULL, '7188', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `serial_no`, `description`, `quantity`, `rate`, `tax_rate`, `tax_amount`, `supplier_rate`, `total_price`, `discount`, `discount_per`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('15', '777295984121576', '7573274576', '10481603', NULL, '', '1.00', '125.00', '15', '18.75', '100', '125.00', '0.00', '', NULL, '144', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `serial_no`, `description`, `quantity`, `rate`, `tax_rate`, `tax_amount`, `supplier_rate`, `total_price`, `discount`, `discount_per`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('16', '311744795485342', '2225786899', '10481603', NULL, '', '1.00', '125.00', '15', '18.75', '100', '125.00', '0.00', '', NULL, '0', '143.75', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `serial_no`, `description`, `quantity`, `rate`, `tax_rate`, `tax_amount`, `supplier_rate`, `total_price`, `discount`, `discount_per`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('17', '746278281328673', '4812168955', '10481603', 'CK-BRZ-1100', '', '10.00', '125.00', '15', '187.5', '100', '1250.00', '0.00', '', NULL, '1438', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `serial_no`, `description`, `quantity`, `rate`, `tax_rate`, `tax_amount`, `supplier_rate`, `total_price`, `discount`, `discount_per`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('18', '341428231211818', '1685329834', '10481603', 'CK-BRZ-1100', '', '10.00', '125.00', '15', '187.5', '100', '1250.00', '0.00', '', NULL, '1438', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `serial_no`, `description`, `quantity`, `rate`, `tax_rate`, `tax_amount`, `supplier_rate`, `total_price`, `discount`, `discount_per`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('19', '453716493477242', '8429942367', 'test', '234vc', '', '5.00', '200.00', '15', '142.5', '150', '950.00', '0.01', '5', NULL, '0', '1092.50', '1');


#
# TABLE STRUCTURE FOR: language
#

DROP TABLE IF EXISTS `language`;

CREATE TABLE `language` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `phrase` text NOT NULL,
  `english` text,
  `bangla` text,
  `arabic` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=977 DEFAULT CHARSET=utf8;

INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('1', 'user_profile', 'User Profile', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('2', 'setting', 'Setting', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('3', 'language', 'Language', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('4', 'manage_users', 'Manage Users', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('5', 'add_user', 'Add User', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('6', 'manage_company', 'Manage Company', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('7', 'web_settings', 'Software Settings', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('8', 'manage_accounts', 'Manage Accounts', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('9', 'create_accounts', 'Create Account', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('10', 'manage_bank', 'Manage Bank', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('11', 'add_new_bank', 'Add New Bank', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('12', 'settings', 'Settings', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('13', 'closing_report', 'Closing Report', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('14', 'closing', 'Closing', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('15', 'cheque_manager', 'Cheque Manager', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('16', 'accounts_summary', 'Accounts Summary', NULL, '');
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('17', 'expense', 'Expense', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('18', 'income', 'Income', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('19', 'accounts', 'Accounts', NULL, '');
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('20', 'stock_report', 'Stock Report', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('21', 'stock', 'Stock', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('22', 'pos_invoice', 'POS Sale', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('23', 'manage_invoice', 'Manage Sale', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('24', 'new_invoice', 'New Sale', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('25', 'invoice', 'Sale', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('26', 'manage_purchase', 'Manage Purchase', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('27', 'add_purchase', 'Add Purchase', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('28', 'purchase', 'Purchase', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('29', 'paid_customer', 'Paid Customer', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('30', 'manage_customer', 'Manage Customer', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('31', 'add_customer', 'Add Customer', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('32', 'customer', 'Customer', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('33', 'supplier_payment_actual', 'Supplier Payment Ledger', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('34', 'supplier_sales_summary', 'Supplier Sales Summary', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('35', 'supplier_sales_details', 'Supplier Sales Details', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('36', 'supplier_ledger', 'Supplier Ledger', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('37', 'manage_supplier', 'Manage Supplier', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('38', 'add_supplier', 'Add Supplier', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('39', 'supplier', 'Supplier', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('40', 'product_statement', 'Product Statement', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('41', 'manage_product', 'Manage Product', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('42', 'add_product', 'Add Product', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('43', 'product', 'Product', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('44', 'manage_category', 'Manage Category', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('45', 'add_category', 'Add Category', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('46', 'category', 'Category', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('47', 'sales_report_product_wise', 'Sales Report (Product Wise)', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('48', 'purchase_report', 'Purchase Report', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('49', 'sales_report', 'Sales Report', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('50', 'todays_report', 'Todays Report', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('51', 'report', 'Report', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('52', 'dashboard', 'Dashboard', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('53', 'online', 'Online', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('54', 'logout', 'Logout', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('55', 'change_password', 'Change Password', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('56', 'total_purchase', 'Total Purchase', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('57', 'total_amount', 'Total Amount', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('58', 'supplier_name', 'Supplier Name', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('59', 'invoice_no', 'Invoice No', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('60', 'purchase_date', 'Purchase Date', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('61', 'todays_purchase_report', 'Todays Purchase Report', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('62', 'total_sales', 'Total Sales', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('63', 'customer_name', 'Customer Name', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('64', 'sales_date', 'Sales Date', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('65', 'todays_sales_report', 'Todays Sales Report', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('66', 'home', 'Home', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('67', 'todays_sales_and_purchase_report', 'Todays sales and purchase report', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('68', 'total_ammount', 'Total Amount', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('69', 'rate', 'Rate', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('70', 'product_model', 'Product Model', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('71', 'product_name', 'Product Name', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('72', 'search', 'Search', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('73', 'end_date', 'End Date', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('74', 'start_date', 'Start Date', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('75', 'total_purchase_report', 'Total Purchase Report', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('76', 'total_sales_report', 'Total Sales Report', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('77', 'total_seles', 'Total Sales', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('78', 'all_stock_report', 'All Stock Report', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('79', 'search_by_product', 'Search By Product', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('80', 'date', 'Date', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('81', 'print', 'Print', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('82', 'stock_date', 'Stock Date', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('83', 'print_date', 'Print Date', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('84', 'sales', 'Sales', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('85', 'price', 'Price', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('86', 'sl', 'SL.', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('87', 'add_new_category', 'Add new category', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('88', 'category_name', 'Category Name', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('89', 'save', 'Save', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('90', 'delete', 'Delete', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('91', 'update', 'Update', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('92', 'action', 'Action', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('93', 'manage_your_category', 'Manage your category ', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('94', 'category_edit', 'Category Edit', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('95', 'status', 'Status', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('96', 'active', 'Active', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('97', 'inactive', 'Inactive', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('98', 'save_changes', 'Save Changes', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('99', 'save_and_add_another', 'Save And Add Another', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('100', 'model', 'Model', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('101', 'supplier_price', 'Supplier Price', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('102', 'sell_price', 'Sale Price', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('103', 'image', 'Image', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('104', 'select_one', 'Select One', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('105', 'details', 'Details', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('106', 'new_product', 'New Product', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('107', 'add_new_product', 'Add new product', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('108', 'barcode', 'Barcode', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('109', 'qr_code', 'Qr-Code', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('110', 'product_details', 'Product Details', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('111', 'manage_your_product', 'Manage your product', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('112', 'product_edit', 'Product Edit', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('113', 'edit_your_product', 'Edit your product', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('114', 'cancel', 'Cancel', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('115', 'incl_vat', 'Incl. Vat', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('116', 'money', 'TK', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('117', 'grand_total', 'Grand Total', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('118', 'quantity', 'Qnty', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('119', 'product_report', 'Product Report', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('120', 'product_sales_and_purchase_report', 'Product sales and purchase report', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('121', 'previous_stock', 'Previous Stock', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('122', 'out', 'Out', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('123', 'in', 'In', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('124', 'to', 'To', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('125', 'previous_balance', 'Previous Balance', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('126', 'customer_address', 'Customer Address', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('127', 'customer_mobile', 'Customer Mobile', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('128', 'customer_email', 'Customer Email', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('129', 'add_new_customer', 'Add new customer', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('130', 'balance', 'Balance', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('131', 'mobile', 'Mobile', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('132', 'address', 'Address', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('133', 'manage_your_customer', 'Manage your customer', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('134', 'customer_edit', 'Customer Edit', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('135', 'paid_customer_list', 'Paid Customer List', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('136', 'ammount', 'Amount', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('137', 'customer_ledger', 'Customer Ledger', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('138', 'manage_customer_ledger', 'Manage Customer Ledger', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('139', 'customer_information', 'Customer Information', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('140', 'debit_ammount', 'Debit Amount', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('141', 'credit_ammount', 'Credit Amount', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('142', 'balance_ammount', 'Balance Amount', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('143', 'receipt_no', 'Receipt NO', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('144', 'description', 'Description', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('145', 'debit', 'Debit', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('146', 'credit', 'Credit', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('147', 'item_information', 'Item Information', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('148', 'total', 'Total', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('149', 'please_select_supplier', 'Please Select Supplier', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('150', 'submit', 'Submit', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('151', 'submit_and_add_another', 'Submit And Add Another One', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('152', 'add_new_item', 'Add New Item', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('153', 'manage_your_purchase', 'Manage your purchase', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('154', 'purchase_edit', 'Purchase Edit', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('155', 'purchase_ledger', 'Purchase Ledger', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('156', 'invoice_information', 'Sale Information', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('157', 'paid_ammount', 'Paid Amount', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('158', 'discount', 'Dis./Pcs.', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('159', 'save_and_paid', 'Save And Paid', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('160', 'payee_name', 'Payee Name', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('161', 'manage_your_invoice', 'Manage your Sale', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('162', 'invoice_edit', 'Sale Edit', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('163', 'new_pos_invoice', 'New POS Sale', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('164', 'add_new_pos_invoice', 'Add new pos Sale', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('165', 'product_id', 'Product ID', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('166', 'paid_amount', 'Paid Amount', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('167', 'authorised_by', 'Authorised By', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('168', 'checked_by', 'Checked By', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('169', 'received_by', 'Received By', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('170', 'prepared_by', 'Prepared By', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('171', 'memo_no', 'Memo No', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('172', 'website', 'Website', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('173', 'email', 'Email', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('174', 'invoice_details', 'Sale Details', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('175', 'reset', 'Reset', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('176', 'payment_account', 'Payment Account', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('177', 'bank_name', 'Bank Name', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('178', 'cheque_or_pay_order_no', 'Cheque/Pay Order No', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('179', 'payment_type', 'Payment Type', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('180', 'payment_from', 'Payment From', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('181', 'payment_date', 'Payment Date', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('182', 'add_income', 'Add Income', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('183', 'cash', 'Cash', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('184', 'cheque', 'Cheque', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('185', 'pay_order', 'Pay Order', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('186', 'payment_to', 'Payment To', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('187', 'total_outflow_ammount', 'Total Expense Amount', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('188', 'transections', 'Transections', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('189', 'accounts_name', 'Accounts Name', NULL, 'اسم الحساب');
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('190', 'outflow_report', 'Expense Report', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('191', 'inflow_report', 'Income Report', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('192', 'all', 'All', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('193', 'account', 'Account', NULL, '');
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('194', 'from', 'From', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('195', 'account_summary_report', 'Account Summary Report', NULL, '');
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('196', 'search_by_date', 'Search By Date', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('197', 'cheque_no', 'Cheque No', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('198', 'name', 'Name', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('199', 'closing_account', 'Closing Account', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('200', 'close_your_account', 'Close your account', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('201', 'last_day_closing', 'Last Day Closing', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('202', 'cash_in', 'Cash In', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('203', 'cash_out', 'Cash Out', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('204', 'cash_in_hand', 'Cash In Hand', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('205', 'add_new_bank', 'Add New Bank', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('206', 'day_closing', 'Day Closing', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('207', 'account_closing_report', 'Account Closing Report', NULL, '');
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('208', 'last_day_ammount', 'Last Day Amount', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('209', 'adjustment', 'Adjustment', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('210', 'pay_type', 'Pay Type', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('211', 'customer_or_supplier', 'Customer,Supplier Or Others', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('212', 'transection_id', 'Transections ID', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('213', 'accounts_summary_report', 'Accounts Summary Report', NULL, '');
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('214', 'bank_list', 'Bank List', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('215', 'bank_edit', 'Bank Edit', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('216', 'debit_plus', 'Debit (+)', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('217', 'credit_minus', 'Credit (-)', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('218', 'account_name', 'Account Name', NULL, '');
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('219', 'account_type', 'Account Type', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('220', 'account_real_name', 'Account Real Name', NULL, '');
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('221', 'manage_account', 'Manage Account', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('222', 'company_name', 'Niha International', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('223', 'edit_your_company_information', 'Edit your company information', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('224', 'company_edit', 'Company Edit', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('225', 'admin', 'Admin', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('226', 'user', 'User', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('227', 'password', 'Password', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('228', 'last_name', 'Last Name', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('229', 'first_name', 'First Name', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('230', 'add_new_user_information', 'Add new user information', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('231', 'user_type', 'User Type', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('232', 'user_edit', 'User Edit', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('233', 'rtr', 'RTR', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('234', 'ltr', 'LTR', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('235', 'ltr_or_rtr', 'LTR/RTR', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('236', 'footer_text', 'Footer Text', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('237', 'favicon', 'Favicon', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('238', 'logo', 'Logo', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('239', 'update_setting', 'Update Setting', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('240', 'update_your_web_setting', 'Update your web setting', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('241', 'login', 'Login', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('242', 'your_strong_password', 'Your strong password', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('243', 'your_unique_email', 'Your unique email', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('244', 'please_enter_your_login_information', 'Please enter your login information.', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('245', 'update_profile', 'Update Profile', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('246', 'your_profile', 'Your Profile', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('247', 're_type_password', 'Re-Type Password', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('248', 'new_password', 'New Password', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('249', 'old_password', 'Old Password', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('250', 'new_information', 'New Information', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('251', 'old_information', 'Old Information', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('252', 'change_your_information', 'Change your information', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('253', 'change_your_profile', 'Change your profile', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('254', 'profile', 'Profile', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('255', 'wrong_username_or_password', 'Wrong User Name Or Password !', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('256', 'successfully_updated', 'Successfully Updated.', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('257', 'blank_field_does_not_accept', 'Blank Field Does Not Accept !', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('258', 'successfully_changed_password', 'Successfully changed password.', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('259', 'you_are_not_authorised_person', 'You are not authorised person !', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('260', 'password_and_repassword_does_not_match', 'Passwor and re-password does not match !', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('261', 'new_password_at_least_six_character', 'New Password At Least 6 Character.', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('262', 'you_put_wrong_email_address', 'You put wrong email address !', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('263', 'cheque_ammount_asjusted', 'Cheque amount adjusted.', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('264', 'successfully_payment_paid', 'Successfully Payment Paid.', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('265', 'successfully_added', 'Successfully Added.', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('266', 'successfully_updated_2_closing_ammount_not_changeale', 'Successfully Updated -2. Note: Closing Amount Not Changeable.', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('267', 'successfully_payment_received', 'Successfully Payment Received.', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('268', 'already_inserted', 'Already Inserted !', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('269', 'successfully_delete', 'Successfully Delete.', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('270', 'successfully_created', 'Successfully Created.', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('271', 'logo_not_uploaded', 'Logo not uploaded !', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('272', 'favicon_not_uploaded', 'Favicon not uploaded !', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('273', 'supplier_mobile', 'Supplier Mobile', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('274', 'supplier_address', 'Supplier Address', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('275', 'supplier_details', 'Supplier Details', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('276', 'add_new_supplier', 'Add New Supplier', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('277', 'manage_suppiler', 'Manage Supplier', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('278', 'manage_your_supplier', 'Manage your supplier', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('279', 'manage_supplier_ledger', 'Manage supplier ledger', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('280', 'invoice_id', 'Invoice ID', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('281', 'deposite_id', 'Deposite ID', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('282', 'supplier_actual_ledger', 'Supplier Payment Ledger', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('283', 'supplier_information', 'Supplier Information', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('284', 'event', 'Event', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('285', 'add_new_income', 'Add New Income', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('286', 'add_expese', 'Add Expense', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('287', 'add_new_expense', 'Add New Expense', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('288', 'total_inflow_ammount', 'Total Income Amount', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('289', 'create_new_invoice', 'Create New Sale', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('290', 'create_pos_invoice', 'Create POS Sale', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('291', 'total_profit', 'Total Profit', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('292', 'monthly_progress_report', 'Monthly Progress Report', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('293', 'total_invoice', 'Total Sale', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('294', 'account_summary', 'Account Summary', NULL, '');
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('295', 'total_supplier', 'Total Supplier', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('296', 'total_product', 'Total Product', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('297', 'total_customer', 'Total Customer', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('298', 'supplier_edit', 'Supplier Edit', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('299', 'add_new_invoice', 'Add New Sale', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('300', 'add_new_purchase', 'Add new purchase', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('301', 'currency', 'Currency', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('302', 'currency_position', 'Currency Position', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('303', 'left', 'Left', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('304', 'right', 'Right', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('305', 'add_tax', 'Add Tax', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('306', 'manage_tax', 'Manage Tax', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('307', 'add_new_tax', 'Add new tax', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('308', 'enter_tax', 'Enter Tax', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('309', 'already_exists', 'Already Exists !', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('310', 'successfully_inserted', 'Successfully Inserted.', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('311', 'tax', 'Tax', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('312', 'tax_edit', 'Tax Edit', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('313', 'product_not_added', 'Product not added !', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('314', 'total_tax', 'Total Tax', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('315', 'manage_your_supplier_details', 'Manage your supplier details.', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('316', 'invoice_description', 'Lorem Ipsum is sim ply dummy Lorem Ipsum is simply dummy Lorem Ipsum is simply dummy Lorem Ipsum is simply dummy Lorem Ipsum is simply dummy Lorem Ipsum is sim ply dummy Lorem Ipsum is simply dummy Lorem Ipsum is simply dummy Lorem Ipsum is simply dummy Lorem Ipsum is simply dummy', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('317', 'thank_you_for_choosing_us', 'Thank you very much for choosing us.', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('318', 'billing_date', 'Billing Date', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('319', 'billing_to', 'Billing To', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('320', 'billing_from', 'Billing From', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('321', 'you_cant_delete_this_product', 'Sorry !!  You can\'t delete this product.This product already used in calculation system!', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('322', 'old_customer', 'Old Customer', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('323', 'new_customer', 'New Customer', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('324', 'new_supplier', 'New Supplier', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('325', 'old_supplier', 'Old Supplier', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('326', 'credit_customer', 'Credit Customer', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('327', 'account_already_exists', 'This Account Already Exists !', NULL, '');
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('328', 'edit_income', 'Edit Income', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('329', 'you_are_not_access_this_part', 'You are not authorised person !', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('330', 'account_edit', 'Account Edit', NULL, '');
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('331', 'due', 'Due', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('332', 'expense_edit', 'Expense Edit', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('333', 'please_select_customer', 'Please select customer !', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('334', 'profit_report', 'Profit Report (Sale Wise)', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('335', 'total_profit_report', 'Total profit report', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('336', 'please_enter_valid_captcha', 'Please enter valid captcha.', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('337', 'category_not_selected', 'Category not selected.', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('338', 'supplier_not_selected', 'Supplier not selected.', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('339', 'please_select_product', 'Please select product.', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('340', 'product_model_already_exist', 'Product model already exist !', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('341', 'invoice_logo', 'Sale Logo', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('342', 'available_qnty', 'Av. Qnty.', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('343', 'you_can_not_buy_greater_than_available_cartoon', 'You can not select grater than available cartoon !', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('344', 'customer_details', 'Customer details', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('345', 'manage_customer_details', 'Manage customer details.', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('346', 'site_key', 'Captcha Site Key', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('347', 'secret_key', 'Captcha Secret Key', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('348', 'captcha', 'Captcha', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('349', 'cartoon_quantity', 'Cartoon Quantity', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('350', 'total_cartoon', 'Total Cartoon', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('351', 'cartoon', 'Cartoon', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('352', 'item_cartoon', 'Item/Cartoon', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('353', 'product_and_supplier_did_not_match', 'Product and supplier did not match !', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('354', 'if_you_update_purchase_first_select_supplier_then_product_and_then_quantity', 'If you update purchase,first select supplier then product and then update qnty.', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('355', 'item', 'Item', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('356', 'manage_your_credit_customer', 'Manage your credit customer', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('357', 'total_quantity', 'Total Quantity', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('358', 'quantity_per_cartoon', 'Quantity per cartoon', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('359', 'barcode_qrcode_scan_here', 'Barcode or QR-code scan here', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('360', 'synchronizer_setting', 'Synchronizer Setting', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('361', 'data_synchronizer', 'Data Synchronizer', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('362', 'hostname', 'Host name', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('363', 'username', 'User Name', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('364', 'ftp_port', 'FTP Port', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('365', 'ftp_debug', 'FTP Debug', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('366', 'project_root', 'Project Root', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('367', 'please_try_again', 'Please try again', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('368', 'save_successfully', 'Save successfully', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('369', 'synchronize', 'Synchronize', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('370', 'internet_connection', 'Internet Connection', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('371', 'outgoing_file', 'Outgoing File', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('372', 'incoming_file', 'Incoming File', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('373', 'ok', 'Ok', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('374', 'not_available', 'Not Available', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('375', 'available', 'Available', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('376', 'download_data_from_server', 'Download data from server', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('377', 'data_import_to_database', 'Data import to database', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('378', 'data_upload_to_server', 'Data uplod to server', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('379', 'please_wait', 'Please Wait', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('380', 'ooops_something_went_wrong', 'Oooops Something went wrong !', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('381', 'upload_successfully', 'Upload successfully', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('382', 'unable_to_upload_file_please_check_configuration', 'Unable to upload file please check configuration', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('383', 'please_configure_synchronizer_settings', 'Please configure synchronizer settings', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('384', 'download_successfully', 'Download successfully', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('385', 'unable_to_download_file_please_check_configuration', 'Unable to download file please check configuration', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('386', 'data_import_first', 'Data import past', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('387', 'data_import_successfully', 'Data import successfully', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('388', 'unable_to_import_data_please_check_config_or_sql_file', 'Unable to import data please check config or sql file', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('389', 'total_sale_ctn', 'Total Sale Ctn', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('390', 'in_qnty', 'In Qnty.', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('391', 'out_qnty', 'Out Qnty.', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('392', 'stock_report_supplier_wise', 'Stock Report (Supplier Wise)', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('393', 'all_stock_report_supplier_wise', 'Stock Report (Suppler Wise)', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('394', 'select_supplier', 'Select Supplier', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('395', 'stock_report_product_wise', 'Stock Report (Product Wise)', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('396', 'phone', 'Phone', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('397', 'select_product', 'Select Product', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('398', 'in_quantity', 'In Qnty.', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('399', 'out_quantity', 'Out Qnty.', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('400', 'in_taka', 'In TK.', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('401', 'out_taka', 'Out TK.', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('402', 'commission', 'Commission', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('403', 'generate_commission', 'Generate Commssion', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('404', 'commission_rate', 'Commission Rate', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('405', 'total_ctn', 'Total Ctn.', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('406', 'per_pcs_commission', 'Per PCS Commission', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('407', 'total_commission', 'Total Commission', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('408', 'enter', 'Enter', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('409', 'please_add_walking_customer_for_default_customer', 'Please add \'Walking Customer\' for default customer.', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('410', 'supplier_ammount', 'Supplier Amount', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('411', 'my_sale_ammount', 'My Sale Amount', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('412', 'signature_pic', 'Signature Picture', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('413', 'branch', 'Branch', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('414', 'ac_no', 'A/C Number', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('415', 'ac_name', 'A/C Name', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('416', 'bank_transaction', 'Bank Transaction', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('417', 'bank', 'Bank', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('418', 'withdraw_deposite_id', 'Withdraw / Deposite ID', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('419', 'bank_ledger', 'Bank Ledger', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('420', 'note_name', 'Note Name', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('421', 'pcs', 'Pcs.', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('422', '1', '1', NULL, '');
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('423', '2', '2', NULL, '');
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('424', '5', '5', NULL, '');
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('425', '10', '10', NULL, '');
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('426', '20', '20', NULL, '');
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('427', '50', '50', NULL, '');
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('428', '100', '100', NULL, '');
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('429', '500', '500', NULL, '');
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('430', '1000', '1000', NULL, '');
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('431', 'total_discount', 'Total Discount', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('432', 'product_not_found', 'Product not found !', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('433', 'this_is_not_credit_customer', 'This is not credit customer !', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('434', 'personal_loan', 'Personal Loan', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('435', 'add_person', 'Add Person', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('436', 'add_loan', 'Add Loan', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('437', 'add_payment', 'Add Payment', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('438', 'manage_person', 'Manage Person', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('439', 'personal_edit', 'Person Edit', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('440', 'person_ledger', 'Person Ledger', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('441', 'backup_restore', 'Backup ', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('442', 'database_backup', 'Database backup', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('443', 'file_information', 'File information', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('444', 'filename', 'Filename', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('445', 'size', 'Size', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('446', 'backup_date', 'Backup date', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('447', 'backup_now', 'Backup now', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('448', 'restore_now', 'Restore now', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('449', 'are_you_sure', 'Are you sure ?', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('450', 'download', 'Download', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('451', 'backup_and_restore', 'Backup', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('452', 'backup_successfully', 'Backup successfully', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('453', 'delete_successfully', 'successfully Deleted', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('454', 'stock_ctn', 'Stock/Qnt', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('455', 'unit', 'Unit', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('456', 'meter_m', 'Meter (M)', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('457', 'piece_pc', 'Piece (Pc)', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('458', 'kilogram_kg', 'Kilogram (Kg)', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('459', 'stock_cartoon', 'Stock Cartoon', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('460', 'add_product_csv', 'Add Product (CSV)', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('461', 'import_product_csv', 'Import product (CSV)', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('462', 'close', 'Close', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('463', 'download_example_file', 'Download example file.', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('464', 'upload_csv_file', 'Upload CSV File', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('465', 'csv_file_informaion', 'CSV File Information', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('466', 'out_of_stock', 'Out Of Stock', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('467', 'others', 'Others', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('468', 'full_paid', 'Full Paid', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('469', 'successfully_saved', 'Your Data Successfully Saved', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('470', 'manage_loan', 'Manage Loan', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('471', 'receipt', 'Receipt', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('472', 'payment', 'Payment', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('473', 'cashflow', 'Daily Cash Flow', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('474', 'signature', 'Signature', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('475', 'supplier_reports', 'Supplier Reports', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('476', 'generate', 'Generate', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('477', 'todays_overview', 'Todays Overview', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('478', 'last_sales', 'Last Sales', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('479', 'manage_transaction', 'Manage Transaction', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('480', 'daily_summary', 'Daily Summary', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('481', 'daily_cash_flow', 'Daily Cash Flow', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('482', 'custom_report', 'Custom Report', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('483', 'transaction', 'Transaction', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('484', 'receipt_amount', 'Receipt Amount', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('485', 'transaction_details_datewise', 'Transaction Details Datewise', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('486', 'cash_closing', 'Cash Closing', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('487', 'you_can_not_buy_greater_than_available_qnty', 'You can not buy greater than available qnty.', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('488', 'supplier_id', 'Supplier ID', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('489', 'category_id', 'Category ID', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('490', 'select_report', 'Select Report', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('491', 'supplier_summary', 'Supplier summary', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('492', 'sales_payment_actual', 'Sales payment actual', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('493', 'today_already_closed', 'Today already closed.', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('494', 'root_account', 'Root Account', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('495', 'office', 'Office', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('496', 'loan', 'Loan', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('497', 'transaction_mood', 'Transaction Mood', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('498', 'select_account', 'Select Account', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('499', 'add_receipt', 'Add Receipt', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('500', 'update_transaction', 'Update Transaction', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('501', 'no_stock_found', 'No Stock Found !', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('502', 'admin_login_area', 'Admin Login Area', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('503', 'print_qr_code', 'Print QR Code', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('504', 'discount_type', 'Discount Type', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('505', 'discount_percentage', 'Discount', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('506', 'fixed_dis', 'Fixed Dis.', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('507', 'return', 'Return', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('508', 'stock_return_list', 'Stock Return List', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('509', 'wastage_return_list', 'Wastage Return List', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('510', 'return_invoice', 'Sale Return', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('511', 'sold_qty', 'Sold Qty', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('512', 'ret_quantity', 'Return Qty', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('513', 'deduction', 'Deduction', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('514', 'check_return', 'Check Return', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('515', 'reason', 'Reason', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('516', 'usablilties', 'Usability', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('517', 'adjs_with_stck', 'Adjust With Stock', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('518', 'return_to_supplier', 'Return To Supplier', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('519', 'wastage', 'Wastage', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('520', 'to_deduction', 'Total Deduction ', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('521', 'nt_return', 'Net Return Amount', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('522', 'return_list', 'Return List', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('523', 'add_return', 'Add Return', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('524', 'per_qty', 'Purchase Qty', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('525', 'return_supplier', 'Supplier Return', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('526', 'stock_purchase', 'Stock Purchase Price', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('527', 'stock_sale', 'Stock Sale Price', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('528', 'supplier_return', 'Supplier Return', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('529', 'purchase_id', 'Purchase ID', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('530', 'return_id', 'Return ID', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('531', 'supplier_return_list', 'Supplier Return List', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('532', 'c_r_slist', 'Stock Return Stock', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('533', 'wastage_list', 'Wastage List', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('534', 'please_input_correct_invoice_id', 'Please Input a Correct Sale ID', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('535', 'please_input_correct_purchase_id', 'Please Input Your Correct  Purchase ID', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('536', 'add_more', 'Add More', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('537', 'prouct_details', 'Product Details', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('538', 'prouct_detail', 'Product Details', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('539', 'stock_return', 'Stock Return', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('540', 'choose_transaction', 'Select Transaction', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('541', 'transection_category', 'Select  Category', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('542', 'transaction_categry', 'Select Category', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('543', 'search_supplier', 'Search Supplier', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('544', 'customer_id', 'Customer ID', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('545', 'search_customer', 'Search Customer Invoice', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('546', 'serial_no', 'SN', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('547', 'item_discount', 'Item Discount', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('548', 'invoice_discount', 'Sale Discount', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('549', 'add_unit', 'Add Unit', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('550', 'manage_unit', 'Manage Unit', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('551', 'add_new_unit', 'Add New Unit', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('552', 'unit_name', 'Unit Name', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('553', 'payment_amount', 'Payment Amount', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('554', 'manage_your_unit', 'Manage Your Unit', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('555', 'unit_id', 'Unit ID', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('556', 'unit_edit', 'Unit Edit', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('557', 'vat', 'Vat', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('558', 'sales_report_category_wise', 'Sales Report (Category wise)', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('559', 'purchase_report_category_wise', 'Purchase Report (Category wise)', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('560', 'category_wise_purchase_report', 'Category wise purchase report', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('561', 'category_wise_sales_report', 'Category wise sales report', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('562', 'best_sale_product', 'Best Sale Product', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('563', 'all_best_sales_product', 'All Best Sales Products', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('564', 'todays_customer_receipt', 'Todays Customer Receipt', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('565', 'not_found', 'Record not found', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('566', 'collection', 'Collection', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('567', 'increment', 'Increment', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('568', 'accounts_tree_view', 'Accounts Tree View', NULL, '');
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('569', 'debit_voucher', 'Debit Voucher', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('570', 'voucher_no', 'Voucher No', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('571', 'credit_account_head', 'Credit Account Head', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('572', 'remark', 'Remark', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('573', 'code', 'Code', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('574', 'amount', 'Amount', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('575', 'approved', 'Approved', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('576', 'debit_account_head', 'Debit Account Head', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('577', 'credit_voucher', 'Credit Voucher', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('578', 'find', 'Find', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('579', 'transaction_date', 'Transaction Date', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('580', 'voucher_type', 'Voucher Type', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('581', 'particulars', 'Particulars', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('582', 'with_details', 'With Details', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('583', 'general_ledger', 'General Ledger', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('584', 'general_ledger_of', 'General ledger of', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('585', 'pre_balance', 'Pre Balance', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('586', 'current_balance', 'Current Balance', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('587', 'to_date', 'To Date', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('588', 'from_date', 'From Date', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('589', 'trial_balance', 'Trial Balance', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('590', 'authorized_signature', 'Authorized Signature', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('591', 'chairman', 'Chairman', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('592', 'total_income', 'Total Income', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('593', 'statement_of_comprehensive_income', 'Statement of Comprehensive Income', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('594', 'profit_loss', 'Profit Loss', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('595', 'cash_flow_report', 'Cash Flow Report', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('596', 'cash_flow_statement', 'Cash Flow Statement', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('597', 'amount_in_dollar', 'Amount In Dollar', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('598', 'opening_cash_and_equivalent', 'Opening Cash and Equivalent', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('599', 'coa_print', 'Coa Print', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('600', 'cash_flow', 'Cash Flow', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('601', 'cash_book', 'Cash Book', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('602', 'bank_book', 'Bank Book', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('603', 'c_o_a', 'Chart of Account', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('604', 'journal_voucher', 'Journal Voucher', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('605', 'contra_voucher', 'Contra Voucher', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('606', 'voucher_approval', 'Vouchar Approval', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('607', 'supplier_payment', 'Supplier Payment', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('608', 'customer_receive', 'Customer Receive', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('609', 'gl_head', 'General Head', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('610', 'account_code', 'Account Head', NULL, '');
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('611', 'opening_balance', 'Opening Balance', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('612', 'head_of_account', 'Head of Account', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('613', 'inventory_ledger', 'Inventory Ledger', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('614', 'newpassword', 'New Password', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('615', 'password_recovery', 'Password Recovery', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('616', 'forgot_password', 'Forgot Password ??', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('617', 'send', 'Send', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('618', 'due_report', 'Due Report', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('619', 'due_amount', 'Due Amount', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('620', 'download_sample_file', 'Download Sample File', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('621', 'customer_csv_upload', 'Customer Csv Upload', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('622', 'csv_supplier', 'Csv Upload Supplier', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('623', 'csv_upload_supplier', 'Csv Upload Supplier', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('624', 'previous', 'Previous', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('625', 'net_total', 'Net Total', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('626', 'currency_list', 'Currency List', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('627', 'currency_name', 'Currency Name', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('628', 'currency_icon', 'Currency Symbol', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('629', 'add_currency', 'Add Currency', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('630', 'role_permission', 'Role Permission', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('631', 'role_list', 'Role List', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('632', 'user_assign_role', 'User Assign Role', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('633', 'permission', 'Permission', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('634', 'add_role', 'Add Role', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('635', 'add_module', 'Add Module', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('636', 'module_name', 'Module Name', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('637', 'office_loan', 'Office Loan', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('638', 'add_menu', 'Add Menu', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('639', 'menu_name', 'Menu Name', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('640', 'sl_no', 'Sl No', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('641', 'create', 'Create', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('642', 'read', 'Read', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('643', 'role_name', 'Role Name', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('644', 'qty', 'Quantity', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('645', 'max_rate', 'Max Rate', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('646', 'min_rate', 'Min Rate', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('647', 'avg_rate', 'Average Rate', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('648', 'role_permission_added_successfully', 'Role Permission Successfully Added', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('649', 'update_successfully', 'Successfully Updated', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('650', 'role_permission_updated_successfully', 'Role Permission Successfully Updated ', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('651', 'shipping_cost', 'Shipping Cost', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('652', 'in_word', 'In Word ', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('653', 'shipping_cost_report', 'Shipping Cost Report', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('654', 'cash_book_report', 'Cash Book Report', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('655', 'inventory_ledger_report', 'Inventory Ledger Report', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('656', 'trial_balance_with_opening_as_on', 'Trial Balance With Opening As On', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('657', 'type', 'Type', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('658', 'taka_only', 'Taka Only', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('659', 'item_description', 'Desc', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('660', 'sold_by', 'Sold By', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('661', 'user_wise_sales_report', 'User Wise Sales Report', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('662', 'user_name', 'User Name', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('663', 'total_sold', 'Total Sold', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('664', 'user_wise_sale_report', 'User Wise Sales Report', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('665', 'barcode_or_qrcode', 'Barcode/QR-code', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('666', 'category_csv_upload', 'Category Csv  Upload', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('667', 'unit_csv_upload', 'Unit Csv Upload', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('668', 'invoice_return_list', 'Sales Return list', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('669', 'invoice_return', 'Sales Return', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('670', 'tax_report', 'Tax Report', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('671', 'select_tax', 'Select Tax', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('672', 'hrm', 'HRM', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('673', 'employee', 'Employee', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('674', 'add_employee', 'Add Employee', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('675', 'manage_employee', 'Manage Employee', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('676', 'attendance', 'Attendance', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('677', 'add_attendance', 'Attendance', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('678', 'manage_attendance', 'Manage Attendance', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('679', 'payroll', 'Payroll', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('680', 'add_payroll', 'Payroll', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('681', 'manage_payroll', 'Manage Payroll', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('682', 'employee_type', 'Employee Type', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('683', 'employee_designation', 'Employee Designation', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('684', 'designation', 'Designation', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('685', 'add_designation', 'Add Designation', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('686', 'manage_designation', 'Manage Designation', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('687', 'designation_update_form', 'Designation Update form', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('688', 'picture', 'Picture', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('689', 'country', 'Country', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('690', 'blood_group', 'Blood Group', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('691', 'address_line_1', 'Address Line 1', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('692', 'address_line_2', 'Address Line 2', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('693', 'zip', 'Zip code', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('694', 'city', 'City', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('695', 'hour_rate_or_salary', 'Houre Rate/Salary', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('696', 'rate_type', 'Rate Type', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('697', 'hourly', 'Hourly', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('698', 'salary', 'Salary', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('699', 'employee_update', 'Employee Update', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('700', 'checkin', 'Check In', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('701', 'employee_name', 'Employee Name', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('702', 'checkout', 'Check Out', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('703', 'confirm_clock', 'Confirm Clock', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('704', 'stay', 'Stay Time', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('705', 'sign_in', 'Sign In', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('706', 'check_in', 'Check In', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('707', 'single_checkin', 'Single Check In', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('708', 'bulk_checkin', 'Bulk Check In', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('709', 'successfully_checkout', 'Successfully Checkout', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('710', 'attendance_report', 'Attendance Report', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('711', 'datewise_report', 'Date Wise Report', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('712', 'employee_wise_report', 'Employee Wise Report', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('713', 'date_in_time_report', 'Date In Time Report', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('714', 'request', 'Request', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('715', 'sign_out', 'Sign Out', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('716', 'work_hour', 'Work Hours', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('717', 's_time', 'Start Time', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('718', 'e_time', 'In Time', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('719', 'salary_benefits_type', 'Benefits Type', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('720', 'salary_benefits', 'Salary Benefits', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('721', 'beneficial_list', 'Benefit List', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('722', 'add_beneficial', 'Add Benefits', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('723', 'add_benefits', 'Add Benefits', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('724', 'benefits_list', 'Benefit List', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('725', 'benefit_type', 'Benefit Type', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('726', 'benefits', 'Benefit', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('727', 'manage_benefits', 'Manage Benefits', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('728', 'deduct', 'Deduct', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('729', 'add', 'Add', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('730', 'add_salary_setup', 'Add Salary Setup', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('731', 'manage_salary_setup', 'Manage Salary Setup', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('732', 'basic', 'Basic', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('733', 'salary_type', 'Salary Type', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('734', 'addition', 'Addition', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('735', 'gross_salary', 'Gross Salary', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('736', 'set', 'Set', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('737', 'salary_generate', 'Salary Generate', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('738', 'manage_salary_generate', 'Manage Salary Generate', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('739', 'sal_name', 'Salary Name', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('740', 'gdate', 'Generated Date', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('741', 'generate_by', 'Generated By', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('742', 'the_salary_of', 'The Salary of ', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('743', 'already_generated', ' Already Generated', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('744', 'salary_month', 'Salary Month', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('745', 'successfully_generated', 'Successfully Generated', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('746', 'salary_payment', 'Salary Payment', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('747', 'employee_salary_payment', 'Employee Salary Payment', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('748', 'total_salary', 'Total Salary', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('749', 'total_working_minutes', 'Total Working Hours', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('750', 'working_period', 'Working Period', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('751', 'paid_by', 'Paid By', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('752', 'pay_now', 'Pay Now ', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('753', 'confirm', 'Confirm', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('754', 'successfully_paid', 'Successfully Paid', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('755', 'add_incometax', 'Add Income Tax', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('756', 'setup_tax', 'Setup Tax', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('757', 'start_amount', 'Start Amount', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('758', 'end_amount', 'End Amount', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('759', 'tax_rate', 'Tax Rate', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('760', 'setup', 'Setup', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('761', 'manage_income_tax', 'Manage Income Tax', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('762', 'income_tax_updateform', 'Income tax Update form', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('763', 'positional_information', 'Positional Information', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('764', 'personal_information', 'Personal Information', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('765', 'timezone', 'Time Zone', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('766', 'sms', 'SMS', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('767', 'sms_configure', 'SMS Configure', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('768', 'url', 'URL', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('769', 'sender_id', 'Sender ID', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('770', 'api_key', 'Api Key', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('771', 'gui_pos', 'GUI POS', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('772', 'manage_service', 'Manage Service', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('773', 'service', 'Service', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('774', 'add_service', 'Add Service', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('775', 'service_edit', 'Service Edit', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('776', 'service_csv_upload', 'Service CSV Upload', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('777', 'service_name', 'Service Name', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('778', 'charge', 'Charge', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('779', 'service_invoice', 'Service Invoice', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('780', 'service_discount', 'Service Discount', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('781', 'hanging_over', 'ETD', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('782', 'service_details', 'Service Details', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('783', 'tax_settings', 'Tax Settings', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('784', 'default_value', 'Default Value', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('785', 'number_of_tax', 'Number of Tax', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('786', 'please_select_employee', 'Please Select Employee', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('787', 'manage_service_invoice', 'Manage Service Invoice', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('788', 'update_service_invoice', 'Update Service Invoice', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('789', 'customer_wise_tax_report', 'Customer Wise  Tax Report', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('790', 'service_id', 'Service Id', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('791', 'invoice_wise_tax_report', 'Invoice Wise Tax Report', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('792', 'reg_no', 'Reg No', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('793', 'update_now', 'Update Now', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('794', 'import', 'Import', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('795', 'add_expense_item', 'Add Expense Item', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('796', 'manage_expense_item', 'Manage Expense Item', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('797', 'add_expense', 'Add Expense', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('798', 'manage_expense', 'Manage Expense', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('799', 'expense_statement', 'Expense Statement', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('800', 'expense_type', 'Expense Type', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('801', 'expense_item_name', 'Expense Item Name', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('802', 'stock_purchase_price', 'Stock Purchase Price', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('803', 'purchase_price', 'Purchase Price', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('804', 'customer_advance', 'Customer Advance', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('805', 'advance_type', 'Advance Type', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('806', 'restore', 'Restore', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('807', 'supplier_advance', 'Supplier Advance', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('808', 'please_input_correct_invoice_no', 'Please Input Correct Invoice NO', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('809', 'backup', 'Back Up', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('810', 'app_setting', 'App Settings', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('811', 'local_server_url', 'Local Server Url', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('812', 'online_server_url', 'Online Server Url', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('813', 'connet_url', 'Connected Hotspot Ip/url', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('814', 'update_your_app_setting', 'Update Your App Setting', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('815', 'select_category', 'Select Category', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('816', 'mini_invoice', 'Mini Invoice', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('817', 'purchase_details', 'Purchase Details', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('818', 'disc', 'Dis %', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('819', 'serial', 'Serial', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('820', 'transaction_head', 'Transaction Head', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('821', 'transaction_type', 'Transaction Type', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('822', 'return_details', 'Return Details', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('823', 'return_to_customer', 'Return To Customer', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('824', 'sales_and_purchase_report_summary', 'Sales And Purchase Report Summary', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('825', 'add_person_officeloan', 'Add Person (Office Loan)', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('826', 'add_loan_officeloan', 'Add Loan (Office Loan)', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('827', 'add_payment_officeloan', 'Add Payment (Office Loan)', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('828', 'manage_loan_officeloan', 'Manage Loan (Office Loan)', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('829', 'add_person_personalloan', 'Add Person (Personal Loan)', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('830', 'add_loan_personalloan', 'Add Loan (Personal Loan)', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('831', 'add_payment_personalloan', 'Add Payment (Personal Loan)', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('832', 'manage_loan_personalloan', 'Manage Loan (Personal)', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('833', 'hrm_management', 'Human Resource', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('834', 'cash_adjustment', 'Cash Adjustment', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('835', 'adjustment_type', 'Adjustment Type', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('836', 'change', 'Change', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('837', 'sale_by', 'Sale By', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('838', 'salary_date', 'Salary Date', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('839', 'earnings', 'Earnings', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('840', 'total_addition', 'Total Addition', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('841', 'total_deduction', 'Total Deduction', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('842', 'net_salary', 'Net Salary', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('843', 'ref_number', 'Reference Number', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('844', 'name_of_bank', 'Name Of Bank', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('845', 'salary_slip', 'Salary Slip', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('846', 'basic_salary', 'Basic Salary', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('847', 'return_from_customer', 'Return From Customer', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('848', 'quotation', 'Quotation', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('849', 'add_quotation', 'Add Quotation', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('850', 'manage_quotation', 'Manage Quotation', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('851', 'terms', 'Terms', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('852', 'send_to_customer', 'Sent To Customer', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('853', 'quotation_no', 'Quotation No', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('854', 'quotation_date', 'Quotation Date', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('855', 'total_service_tax', 'Total Service Tax', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('856', 'totalservicedicount', 'Total Service Discount', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('857', 'item_total', 'Item Total', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('858', 'service_total', 'Service Total', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('859', 'quot_description', 'Quotation Description', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('860', 'sub_total', 'Sub Total', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('861', 'mail_setting', 'Mail Setting', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('862', 'mail_configuration', 'Mail Configuration', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('863', 'mail', 'Mail', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('864', 'protocol', 'Protocol', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('865', 'smtp_host', 'SMTP Host', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('866', 'smtp_port', 'SMTP Port', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('867', 'sender_mail', 'Sender Mail', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('868', 'mail_type', 'Mail Type', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('869', 'html', 'HTML', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('870', 'text', 'TEXT', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('871', 'expiry_date', 'Expiry Date', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('872', 'api_secret', 'Api Secret', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('873', 'please_config_your_mail_setting', NULL, NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('874', 'quotation_successfully_added', 'Quotation Successfully Added', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('875', 'add_to_invoice', 'Add To Invoice', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('876', 'added_to_invoice', 'Added To Invoice', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('877', 'closing_balance', 'Closing Balance', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('878', 'contact', 'Contact', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('879', 'fax', 'Fax', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('880', 'state', 'State', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('881', 'discounts', 'Discount', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('882', 'address1', 'Address1', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('883', 'address2', 'Address2', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('884', 'receive', 'Receive', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('885', 'purchase_history', 'Purchase History', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('886', 'cash_payment', 'Cash Payment', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('887', 'bank_payment', 'Bank Payment', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('888', 'do_you_want_to_print', 'Do You Want to Print', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('889', 'yes', 'Yes', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('890', 'no', 'No', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('891', 'todays_sale', 'Today\'s Sales', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('892', 'or', 'OR', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('893', 'no_result_found', 'No Result Found', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('894', 'add_service_quotation', 'Add Service Quotation', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('895', 'add_to_invoice', 'Add To Invoice', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('896', 'item_quotation', 'Item Quotation', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('897', 'service_quotation', 'Service Quotation', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('898', 'return_from', 'Return Form', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('899', 'customer_return_list', 'Customer Return List', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('900', 'pdf', 'Pdf', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('901', 'note', 'Note', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('902', 'update_debit_voucher', 'Update Debit Voucher', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('903', 'update_credit_voucher', 'Update Credit voucher', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('904', 'on', 'On', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('905', '', '', NULL, '');
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('906', 'total_expenses', 'Total Expense', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('907', 'already_exist', 'Already Exist', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('908', 'checked_out', 'Checked Out', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('909', 'update_salary_setup', 'Update Salary Setup', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('910', 'employee_signature', 'Employee Signature', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('911', 'payslip', 'Payslip', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('912', 'exsisting_role', 'Existing Role', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('913', 'filter', 'Filter', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('914', 'testinput', NULL, NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('915', 'update_quotation', 'Update Quotation', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('916', 'quotation_successfully_updated', 'Quotation Successfully Updated', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('917', 'successfully_approved', 'Successfully Approved', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('918', 'expiry', 'Expiry', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('919', 'user_list', 'User List', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('920', 'assign_roleto_user', 'Assign Role To User', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('921', 'assign_role_list', 'Assigned Role List', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('922', 'application_settings', 'Application Settings', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('923', 'company_list', 'Company List', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('924', 'edit_company', 'Edit Company', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('925', 'edit_user', 'Edit User', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('926', 'edit_currency', 'Edit Currency', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('927', 'mobile_no', 'Mobile No', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('928', 'email_address', 'Email Address', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('929', 'customer_list', 'Customer List', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('930', 'advance_receipt', 'Advance Receipt', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('931', 'supplier_list', 'Supplier List', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('932', 'category_list', 'Category List', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('933', 'no_record_found', 'No Record Found', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('934', 'unit_list', 'Unit List', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('935', 'edit_product', 'Edit Product', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('936', 'payable_summary', 'Payable Summary', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('937', 'pad_print', 'Pad Print', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('938', 'pos_print', 'POS Print', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('939', 'pos_invoice', 'POS Invoice', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('940', 'employee_profile', 'Employee Profile', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('941', 'edit_beneficials', 'Edit Beneficials', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('942', 'edit_setup_update', 'Edit Salary Setup', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('943', 'add_office_loan', 'Add Office Loan', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('944', 'income_tax', 'Income Tax', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('945', 'quotation_to_sale', 'Quotation To Sale', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('946', 'quotation_edit', 'Edit Quotation', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('947', 'edit_profile', 'Edit Profile', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('948', 'edit_supplier', 'Edit Supplier', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('949', 'edit_bank', 'Edit Bank', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('950', 'balance_sheet', 'Balance Sheet', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('951', 'salary_setup', 'Salary Setup', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('952', 'account_head', 'Account Head', NULL, '');
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('953', 'add_invoice', 'Add Invoice', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('954', 'general_ledger_report', 'General Ledger Report', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('955', 'print_setting', 'Print Setting', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('956', 'header', 'Header', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('957', 'footer', 'Footer', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('958', 'supplier_payment_receipt', 'Payment Receipt', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('959', 'welcome_back', 'Welcome Back', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('960', 'overwrite', 'Over Write', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('961', 'module', 'Module', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('962', 'purchase_key', 'Purchase Key', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('963', 'buy_now', 'Buy Now', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('964', 'module_list', 'Module List', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('965', 'modules', 'Modules', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('966', 'install', 'Install', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('967', 'uninstall', 'Uninstall', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('968', 'module_added_successfully', 'Module Added Successfully', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('969', 'no_tables_are_registered_in_config', 'No table registered in config', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('970', 'tables_are_not_available_in_database', 'Table Are not Available in Database', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('971', 'addon', 'Add-ons', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('972', 'generate_qr', 'Generate QR', NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('973', 'latestv', 'Latest Version', 'current_version', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('974', 'Current Version', NULL, NULL, NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`) VALUES ('976', 'notesupdate', 'Note: If you want to update software,you Must have immediate previous version', NULL, NULL);


#
# TABLE STRUCTURE FOR: module
#

DROP TABLE IF EXISTS `module`;

CREATE TABLE `module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `directory` varchar(100) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('1', 'invoice', NULL, NULL, NULL, '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('2', 'customer', NULL, NULL, NULL, '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('3', 'product', NULL, NULL, NULL, '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('4', 'supplier', NULL, NULL, NULL, '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('5', 'purchase', NULL, NULL, NULL, '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('6', 'stock', NULL, NULL, NULL, '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('7', 'return', NULL, NULL, NULL, '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('8', 'report', NULL, NULL, NULL, '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('9', 'accounts', NULL, NULL, NULL, '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('10', 'bank', NULL, NULL, NULL, '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('11', 'tax', NULL, NULL, NULL, '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('12', 'hrm_management', NULL, NULL, NULL, '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('13', 'service', NULL, NULL, NULL, '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('14', 'commission', NULL, NULL, NULL, '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('15', 'setting', NULL, NULL, NULL, '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('16', 'quotation', NULL, NULL, NULL, '1');


#
# TABLE STRUCTURE FOR: module_purchase_key
#

DROP TABLE IF EXISTS `module_purchase_key`;

CREATE TABLE `module_purchase_key` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identity` varchar(100) DEFAULT NULL,
  `purchase_key` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: payroll_tax_setup
#

DROP TABLE IF EXISTS `payroll_tax_setup`;

CREATE TABLE `payroll_tax_setup` (
  `tax_setup_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `start_amount` decimal(12,2) NOT NULL DEFAULT '0.00',
  `end_amount` decimal(12,2) NOT NULL DEFAULT '0.00',
  `rate` decimal(12,2) NOT NULL DEFAULT '0.00',
  `status` varchar(30) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`tax_setup_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: person_information
#

DROP TABLE IF EXISTS `person_information`;

CREATE TABLE `person_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` varchar(50) NOT NULL,
  `person_name` varchar(50) NOT NULL,
  `person_phone` varchar(50) NOT NULL,
  `person_address` text NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: person_ledger
#

DROP TABLE IF EXISTS `person_ledger`;

CREATE TABLE `person_ledger` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transaction_id` varchar(50) NOT NULL,
  `person_id` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `debit` decimal(12,2) NOT NULL DEFAULT '0.00',
  `credit` decimal(12,2) NOT NULL DEFAULT '0.00',
  `details` text NOT NULL,
  `status` int(11) NOT NULL COMMENT '1=no paid,2=paid',
  PRIMARY KEY (`id`),
  KEY `person_id` (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: personal_loan
#

DROP TABLE IF EXISTS `personal_loan`;

CREATE TABLE `personal_loan` (
  `per_loan_id` int(11) NOT NULL AUTO_INCREMENT,
  `transaction_id` varchar(30) NOT NULL,
  `person_id` varchar(30) NOT NULL,
  `debit` decimal(12,2) DEFAULT '0.00',
  `credit` decimal(12,2) NOT NULL DEFAULT '0.00',
  `date` varchar(30) NOT NULL,
  `details` varchar(100) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1=no paid,2=paid',
  PRIMARY KEY (`per_loan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: pesonal_loan_information
#

DROP TABLE IF EXISTS `pesonal_loan_information`;

CREATE TABLE `pesonal_loan_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` varchar(50) NOT NULL,
  `person_name` varchar(50) NOT NULL,
  `person_phone` varchar(30) NOT NULL,
  `person_address` text NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `person_id` (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: print_setting
#

DROP TABLE IF EXISTS `print_setting`;

CREATE TABLE `print_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` int(11) NOT NULL,
  `footer` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO `print_setting` (`id`, `header`, `footer`) VALUES ('1', '200', '100');


#
# TABLE STRUCTURE FOR: product_category
#

DROP TABLE IF EXISTS `product_category`;

CREATE TABLE `product_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `product_category` (`category_id`, `category_name`, `status`) VALUES ('1', 'testing', '1');
INSERT INTO `product_category` (`category_id`, `category_name`, `status`) VALUES ('2', 'FROZEN', '1');


#
# TABLE STRUCTURE FOR: product_information
#

DROP TABLE IF EXISTS `product_information`;

CREATE TABLE `product_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` varchar(100) NOT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` float DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `tax` float DEFAULT NULL COMMENT 'Tax in %',
  `serial_no` varchar(200) DEFAULT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `product_details` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  KEY `product_id` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO `product_information` (`id`, `product_id`, `category_id`, `product_name`, `price`, `unit`, `tax`, `serial_no`, `product_model`, `product_details`, `image`, `status`) VALUES ('3', '65222009', '1', 'Raies Tshirt', '1500', '', '15', 'HONDA10001', 'MKLB1001', 'Raies Tshirt', 'my-assets/image/product.png', '1');
INSERT INTO `product_information` (`id`, `product_id`, `category_id`, `product_name`, `price`, `unit`, `tax`, `serial_no`, `product_model`, `product_details`, `image`, `status`) VALUES ('4', '19838372', '1', 'Raies Jeans', '2000', '', '15', 'HONDA10002', 'MKLB1002', '', 'my-assets/image/product.png', '1');
INSERT INTO `product_information` (`id`, `product_id`, `category_id`, `product_name`, `price`, `unit`, `tax`, `serial_no`, `product_model`, `product_details`, `image`, `status`) VALUES ('5', 'test', '1', 'product', '200', 'testing', '0', '234vc', '434', 'testing..', './my-assets/image/product/2021-11-09/0acbd1ea440b855737aacf47de5ef780.jpg', '1');
INSERT INTO `product_information` (`id`, `product_id`, `category_id`, `product_name`, `price`, `unit`, `tax`, `serial_no`, `product_model`, `product_details`, `image`, `status`) VALUES ('6', '10481603', '2', '1100GM CHICKEN WHOLE BRZ', '125', 'CA', '0', 'CK-BRZ-1100', 'NAT', '10*1.1KG', 'my-assets/image/product.png', '1');


#
# TABLE STRUCTURE FOR: product_purchase
#

DROP TABLE IF EXISTS `product_purchase`;

CREATE TABLE `product_purchase` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `purchase_id` bigint(20) NOT NULL,
  `chalan_no` varchar(100) NOT NULL,
  `supplier_id` bigint(20) NOT NULL,
  `supplier_name` varchar(255) NOT NULL DEFAULT '',
  `grand_total_amount` decimal(12,2) NOT NULL DEFAULT '0.00',
  `paid_amount` decimal(10,2) DEFAULT '0.00',
  `due_amount` decimal(10,2) DEFAULT '0.00',
  `total_discount` decimal(10,2) DEFAULT NULL,
  `purchase_date` varchar(50) DEFAULT NULL,
  `purchase_details` text,
  `total_tax` decimal(10,2) NOT NULL DEFAULT '0.00',
  `status` int(2) NOT NULL,
  `bank_id` varchar(30) DEFAULT NULL,
  `payment_type` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `purchase_id` (`purchase_id`),
  KEY `supplier_id` (`supplier_id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

INSERT INTO `product_purchase` (`id`, `purchase_id`, `chalan_no`, `supplier_id`, `supplier_name`, `grand_total_amount`, `paid_amount`, `due_amount`, `total_discount`, `purchase_date`, `purchase_details`, `total_tax`, `status`, `bank_id`, `payment_type`) VALUES ('1', '20211108122403', '10001', '1', '', '28000.00', '0.00', '28000.00', '2000.00', '2021-11-08', '', '0.00', '1', '', '1');
INSERT INTO `product_purchase` (`id`, `purchase_id`, `chalan_no`, `supplier_id`, `supplier_name`, `grand_total_amount`, `paid_amount`, `due_amount`, `total_discount`, `purchase_date`, `purchase_details`, `total_tax`, `status`, `bank_id`, `payment_type`) VALUES ('2', '20211109124956', '100013', '1', '', '19000.00', '10000.00', '9000.00', '1000.00', '2021-11-09', '', '0.00', '1', '', '1');
INSERT INTO `product_purchase` (`id`, `purchase_id`, `chalan_no`, `supplier_id`, `supplier_name`, `grand_total_amount`, `paid_amount`, `due_amount`, `total_discount`, `purchase_date`, `purchase_details`, `total_tax`, `status`, `bank_id`, `payment_type`) VALUES ('3', '20211203130340', '754', '1', '', '450.00', '0.00', '450.00', '0.00', '2021-12-03', 'wqedqw', '0.00', '1', '', '1');
INSERT INTO `product_purchase` (`id`, `purchase_id`, `chalan_no`, `supplier_id`, `supplier_name`, `grand_total_amount`, `paid_amount`, `due_amount`, `total_discount`, `purchase_date`, `purchase_details`, `total_tax`, `status`, `bank_id`, `payment_type`) VALUES ('4', '20211206071412', '456545635', '1', '', '450.00', '0.00', '450.00', '0.00', '2021-12-06', 'fger', '0.00', '1', '', '1');
INSERT INTO `product_purchase` (`id`, `purchase_id`, `chalan_no`, `supplier_id`, `supplier_name`, `grand_total_amount`, `paid_amount`, `due_amount`, `total_discount`, `purchase_date`, `purchase_details`, `total_tax`, `status`, `bank_id`, `payment_type`) VALUES ('5', '20211206101549', 'AF-0123458', '1', '', '130000.00', '130000.00', '0.00', '0.00', '2021-12-06', '', '0.00', '1', '', '1');
INSERT INTO `product_purchase` (`id`, `purchase_id`, `chalan_no`, `supplier_id`, `supplier_name`, `grand_total_amount`, `paid_amount`, `due_amount`, `total_discount`, `purchase_date`, `purchase_details`, `total_tax`, `status`, `bank_id`, `payment_type`) VALUES ('6', '20211206104842', '1100144', '1', '', '450.00', '0.00', '450.00', '0.00', '2021-12-06', 'test', '0.00', '1', '', '1');
INSERT INTO `product_purchase` (`id`, `purchase_id`, `chalan_no`, `supplier_id`, `supplier_name`, `grand_total_amount`, `paid_amount`, `due_amount`, `total_discount`, `purchase_date`, `purchase_details`, `total_tax`, `status`, `bank_id`, `payment_type`) VALUES ('7', '20211206105919', '110012', '1', '', '300.00', '0.00', '300.00', '0.00', '2021-12-06', 'test', '0.00', '1', '', '1');
INSERT INTO `product_purchase` (`id`, `purchase_id`, `chalan_no`, `supplier_id`, `supplier_name`, `grand_total_amount`, `paid_amount`, `due_amount`, `total_discount`, `purchase_date`, `purchase_details`, `total_tax`, `status`, `bank_id`, `payment_type`) VALUES ('8', '20211206115953', '46546', '1', '', '150.00', '0.00', '150.00', '0.00', '2021-12-06', 'fhgh', '0.00', '1', '', '1');
INSERT INTO `product_purchase` (`id`, `purchase_id`, `chalan_no`, `supplier_id`, `supplier_name`, `grand_total_amount`, `paid_amount`, `due_amount`, `total_discount`, `purchase_date`, `purchase_details`, `total_tax`, `status`, `bank_id`, `payment_type`) VALUES ('9', '20211206122352', '5654634', '1', '', '300.00', '0.00', '300.00', '0.00', '2021-12-06', 'ghdfg', '0.00', '1', '', '1');
INSERT INTO `product_purchase` (`id`, `purchase_id`, `chalan_no`, `supplier_id`, `supplier_name`, `grand_total_amount`, `paid_amount`, `due_amount`, `total_discount`, `purchase_date`, `purchase_details`, `total_tax`, `status`, `bank_id`, `payment_type`) VALUES ('10', '20211206122523', '54634', '1', '', '450.00', '0.00', '450.00', '0.00', '2021-12-06', 'ttttt', '0.00', '1', '', '1');
INSERT INTO `product_purchase` (`id`, `purchase_id`, `chalan_no`, `supplier_id`, `supplier_name`, `grand_total_amount`, `paid_amount`, `due_amount`, `total_discount`, `purchase_date`, `purchase_details`, `total_tax`, `status`, `bank_id`, `payment_type`) VALUES ('11', '20211206122805', '53454', '1', '', '300.00', '0.00', '300.00', '0.00', '2021-12-06', 'gfhdg', '0.00', '1', '', '1');
INSERT INTO `product_purchase` (`id`, `purchase_id`, `chalan_no`, `supplier_id`, `supplier_name`, `grand_total_amount`, `paid_amount`, `due_amount`, `total_discount`, `purchase_date`, `purchase_details`, `total_tax`, `status`, `bank_id`, `payment_type`) VALUES ('12', '20211206124045', '4656554', '1', '', '300.00', '0.00', '300.00', '0.00', '2021-12-06', 'gdxgvsdgd', '0.00', '1', '', '1');
INSERT INTO `product_purchase` (`id`, `purchase_id`, `chalan_no`, `supplier_id`, `supplier_name`, `grand_total_amount`, `paid_amount`, `due_amount`, `total_discount`, `purchase_date`, `purchase_details`, `total_tax`, `status`, `bank_id`, `payment_type`) VALUES ('13', '20211206124137', '6777676745745', '1', '', '300.00', '0.00', '300.00', '0.00', '2021-12-06', 'test', '0.00', '1', '', '1');
INSERT INTO `product_purchase` (`id`, `purchase_id`, `chalan_no`, `supplier_id`, `supplier_name`, `grand_total_amount`, `paid_amount`, `due_amount`, `total_discount`, `purchase_date`, `purchase_details`, `total_tax`, `status`, `bank_id`, `payment_type`) VALUES ('14', '20211206124753', '986856745645', '1', '', '300.00', '0.00', '300.00', '0.00', '2021-12-06', 'test', '0.00', '1', '', '1');
INSERT INTO `product_purchase` (`id`, `purchase_id`, `chalan_no`, `supplier_id`, `supplier_name`, `grand_total_amount`, `paid_amount`, `due_amount`, `total_discount`, `purchase_date`, `purchase_details`, `total_tax`, `status`, `bank_id`, `payment_type`) VALUES ('15', '20211206125716', '56456546546', '1', '', '300.00', '0.00', '300.00', '0.00', '2021-12-06', 'test', '0.00', '1', '', '1');
INSERT INTO `product_purchase` (`id`, `purchase_id`, `chalan_no`, `supplier_id`, `supplier_name`, `grand_total_amount`, `paid_amount`, `due_amount`, `total_discount`, `purchase_date`, `purchase_details`, `total_tax`, `status`, `bank_id`, `payment_type`) VALUES ('16', '20211206130308', '678678768', '1', '', '300.00', '0.00', '300.00', '0.00', '2021-12-06', 'fgergrdg', '0.00', '1', '', '1');
INSERT INTO `product_purchase` (`id`, `purchase_id`, `chalan_no`, `supplier_id`, `supplier_name`, `grand_total_amount`, `paid_amount`, `due_amount`, `total_discount`, `purchase_date`, `purchase_details`, `total_tax`, `status`, `bank_id`, `payment_type`) VALUES ('17', '20211206131046', '7968768657657', '1', '', '300.00', '0.00', '300.00', '0.00', '2021-12-06', 'gfbnfgbn', '0.00', '1', '', '1');
INSERT INTO `product_purchase` (`id`, `purchase_id`, `chalan_no`, `supplier_id`, `supplier_name`, `grand_total_amount`, `paid_amount`, `due_amount`, `total_discount`, `purchase_date`, `purchase_details`, `total_tax`, `status`, `bank_id`, `payment_type`) VALUES ('18', '20211206131629', '78997867867', '1', '', '300.00', '0.00', '300.00', '0.00', '2021-12-06', 'gfhfghfh', '0.00', '1', '', '1');
INSERT INTO `product_purchase` (`id`, `purchase_id`, `chalan_no`, `supplier_id`, `supplier_name`, `grand_total_amount`, `paid_amount`, `due_amount`, `total_discount`, `purchase_date`, `purchase_details`, `total_tax`, `status`, `bank_id`, `payment_type`) VALUES ('19', '20211207061859', 'AF-0123459', '1', '', '1000.00', '1000.00', '0.00', '0.00', '2021-12-07', '', '0.00', '1', '', '1');
INSERT INTO `product_purchase` (`id`, `purchase_id`, `chalan_no`, `supplier_id`, `supplier_name`, `grand_total_amount`, `paid_amount`, `due_amount`, `total_discount`, `purchase_date`, `purchase_details`, `total_tax`, `status`, `bank_id`, `payment_type`) VALUES ('20', '20211207062038', 'AF-01234591', '1', '', '1000.00', '1000.00', '0.00', '0.00', '2021-12-07', '', '0.00', '1', '', '1');
INSERT INTO `product_purchase` (`id`, `purchase_id`, `chalan_no`, `supplier_id`, `supplier_name`, `grand_total_amount`, `paid_amount`, `due_amount`, `total_discount`, `purchase_date`, `purchase_details`, `total_tax`, `status`, `bank_id`, `payment_type`) VALUES ('21', '20211207111813', '1100133', '1', '', '600.00', '0.00', '600.00', '0.00', '2021-12-07', 'test', '0.00', '1', '', '1');
INSERT INTO `product_purchase` (`id`, `purchase_id`, `chalan_no`, `supplier_id`, `supplier_name`, `grand_total_amount`, `paid_amount`, `due_amount`, `total_discount`, `purchase_date`, `purchase_details`, `total_tax`, `status`, `bank_id`, `payment_type`) VALUES ('22', '20211207112651', '12321', '1', '', '150.00', '0.00', '150.00', '0.00', '2021-12-07', 'test', '0.00', '1', '', '1');
INSERT INTO `product_purchase` (`id`, `purchase_id`, `chalan_no`, `supplier_id`, `supplier_name`, `grand_total_amount`, `paid_amount`, `due_amount`, `total_discount`, `purchase_date`, `purchase_details`, `total_tax`, `status`, `bank_id`, `payment_type`) VALUES ('23', '20211207162341', 'AF-012345912', '1', '', '4995.00', '0.00', '4995.00', '0.00', '2021-12-07', '', '0.00', '1', '', '1');
INSERT INTO `product_purchase` (`id`, `purchase_id`, `chalan_no`, `supplier_id`, `supplier_name`, `grand_total_amount`, `paid_amount`, `due_amount`, `total_discount`, `purchase_date`, `purchase_details`, `total_tax`, `status`, `bank_id`, `payment_type`) VALUES ('24', '20211208045407', 'AF-0123459123', '1', '', '1500.00', '1500.00', '0.00', '0.00', '2021-12-08', '', '0.00', '1', '', '1');
INSERT INTO `product_purchase` (`id`, `purchase_id`, `chalan_no`, `supplier_id`, `supplier_name`, `grand_total_amount`, `paid_amount`, `due_amount`, `total_discount`, `purchase_date`, `purchase_details`, `total_tax`, `status`, `bank_id`, `payment_type`) VALUES ('25', '20211208161132', 'test1111', '1', '', '23650.00', '0.00', '23650.00', '0.00', '2021-12-08', '', '0.00', '1', '', '1');
INSERT INTO `product_purchase` (`id`, `purchase_id`, `chalan_no`, `supplier_id`, `supplier_name`, `grand_total_amount`, `paid_amount`, `due_amount`, `total_discount`, `purchase_date`, `purchase_details`, `total_tax`, `status`, `bank_id`, `payment_type`) VALUES ('26', '20211208214915', '7426123456', '1', '', '0.00', '0.00', '0.00', '0.00', '2021-12-08', '', '0.00', '1', '', '1');
INSERT INTO `product_purchase` (`id`, `purchase_id`, `chalan_no`, `supplier_id`, `supplier_name`, `grand_total_amount`, `paid_amount`, `due_amount`, `total_discount`, `purchase_date`, `purchase_details`, `total_tax`, `status`, `bank_id`, `payment_type`) VALUES ('27', '20211209052446', 'AF-012345698565', '1', '', '10000.00', '10000.00', '0.00', '0.00', '2021-12-09', '', '0.00', '1', '', '1');
INSERT INTO `product_purchase` (`id`, `purchase_id`, `chalan_no`, `supplier_id`, `supplier_name`, `grand_total_amount`, `paid_amount`, `due_amount`, `total_discount`, `purchase_date`, `purchase_details`, `total_tax`, `status`, `bank_id`, `payment_type`) VALUES ('28', '20211209110631', 'test11111', '1', '', '2170.00', '0.00', '2170.00', '100.00', '2021-12-09', '', '255.00', '1', '', '1');
INSERT INTO `product_purchase` (`id`, `purchase_id`, `chalan_no`, `supplier_id`, `supplier_name`, `grand_total_amount`, `paid_amount`, `due_amount`, `total_discount`, `purchase_date`, `purchase_details`, `total_tax`, `status`, `bank_id`, `payment_type`) VALUES ('29', '20211209121717', '65675675', '1', '', '2262.50', '0.00', '2262.50', '0.00', '2021-12-09', 'Ambuj', '262.50', '1', '', '1');
INSERT INTO `product_purchase` (`id`, `purchase_id`, `chalan_no`, `supplier_id`, `supplier_name`, `grand_total_amount`, `paid_amount`, `due_amount`, `total_discount`, `purchase_date`, `purchase_details`, `total_tax`, `status`, `bank_id`, `payment_type`) VALUES ('30', '20220401150726', '75433', '1', '', '0.00', '0.00', '0.00', '0.00', '2022-04-01', '', '0.00', '1', '', '1');


#
# TABLE STRUCTURE FOR: product_purchase_details
#

DROP TABLE IF EXISTS `product_purchase_details`;

CREATE TABLE `product_purchase_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `purchase_detail_id` varchar(100) DEFAULT NULL,
  `purchase_id` bigint(20) DEFAULT NULL,
  `product_id` varchar(30) DEFAULT NULL,
  `quantity` decimal(10,2) DEFAULT NULL,
  `rate` decimal(10,2) DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `discount` decimal(10,2) DEFAULT '0.00',
  `tax_rate` decimal(10,2) DEFAULT NULL,
  `tax_amount` decimal(10,2) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `purchase_id` (`purchase_id`),
  KEY `product_id` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

INSERT INTO `product_purchase_details` (`id`, `purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `tax_rate`, `tax_amount`, `status`) VALUES ('1', 'Q2R6RPD8TTM2GSI', '20211108122403', 'test', '200.00', '150.00', '30000.00', '2.00', '0.00', '0.00', '1');
INSERT INTO `product_purchase_details` (`id`, `purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `tax_rate`, `tax_amount`, `status`) VALUES ('2', '9QGRWT8GYH7TP1T', '20211109124956', '19838372', '10.00', '1000.00', '10000.00', '1.00', '0.00', '0.00', '1');
INSERT INTO `product_purchase_details` (`id`, `purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `tax_rate`, `tax_amount`, `status`) VALUES ('3', 'DO7U1MYOOPF37AL', '20211109124956', '65222009', '10.00', '1000.00', '10000.00', '0.00', '0.00', '0.00', '1');
INSERT INTO `product_purchase_details` (`id`, `purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `tax_rate`, `tax_amount`, `status`) VALUES ('4', 'XWH3EGCPK6KGLEK', '20211203130340', 'test', '3.00', '150.00', '450.00', '0.00', '0.00', '0.00', '1');
INSERT INTO `product_purchase_details` (`id`, `purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `tax_rate`, `tax_amount`, `status`) VALUES ('5', 'YMOM11BGKWDJOBG', '20211206071412', 'test', '3.00', '150.00', '450.00', '0.00', NULL, NULL, '1');
INSERT INTO `product_purchase_details` (`id`, `purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `tax_rate`, `tax_amount`, `status`) VALUES ('6', 'FGAFVRAMBNYU3IY', '20211206101549', '10481603', '1300.00', '100.00', '130000.00', '0.00', NULL, NULL, '1');
INSERT INTO `product_purchase_details` (`id`, `purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `tax_rate`, `tax_amount`, `status`) VALUES ('7', 'A4Y82SB2XZFLUQ2', '20211206104842', 'test', '3.00', '150.00', '450.00', '0.00', NULL, NULL, '1');
INSERT INTO `product_purchase_details` (`id`, `purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `tax_rate`, `tax_amount`, `status`) VALUES ('8', '64YM64CST1R124K', '20211206105919', 'test', '2.00', '150.00', '300.00', '0.00', NULL, NULL, '1');
INSERT INTO `product_purchase_details` (`id`, `purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `tax_rate`, `tax_amount`, `status`) VALUES ('9', 'QAVT9Y551HEYBP7', '20211206115953', 'test', '1.00', '150.00', '150.00', '0.00', NULL, NULL, '1');
INSERT INTO `product_purchase_details` (`id`, `purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `tax_rate`, `tax_amount`, `status`) VALUES ('10', '92GKKI3DT3TJ5MD', '20211206122352', 'test', '2.00', '150.00', '300.00', '0.00', NULL, NULL, '1');
INSERT INTO `product_purchase_details` (`id`, `purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `tax_rate`, `tax_amount`, `status`) VALUES ('11', 'MP9R2CX1KXM4WPL', '20211206122523', 'test', '3.00', '150.00', '450.00', '0.00', NULL, NULL, '1');
INSERT INTO `product_purchase_details` (`id`, `purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `tax_rate`, `tax_amount`, `status`) VALUES ('12', 'BK2L1TLILZW2Z8H', '20211206122805', 'test', '2.00', '150.00', '300.00', '0.00', NULL, NULL, '1');
INSERT INTO `product_purchase_details` (`id`, `purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `tax_rate`, `tax_amount`, `status`) VALUES ('13', '7LOZK3QSTZSLZQ4', '20211206124045', 'test', '2.00', '150.00', '300.00', '0.00', NULL, NULL, '1');
INSERT INTO `product_purchase_details` (`id`, `purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `tax_rate`, `tax_amount`, `status`) VALUES ('14', 'Z8XTAUETVEW1MGD', '20211206124137', 'test', '2.00', '150.00', '300.00', '0.00', NULL, NULL, '1');
INSERT INTO `product_purchase_details` (`id`, `purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `tax_rate`, `tax_amount`, `status`) VALUES ('15', 'NPBZKL9L6DJMBCC', '20211206124753', 'test', '2.00', '150.00', '300.00', '0.00', NULL, NULL, '1');
INSERT INTO `product_purchase_details` (`id`, `purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `tax_rate`, `tax_amount`, `status`) VALUES ('16', 'BMC261OHLH2BB52', '20211206125716', 'test', '2.00', '150.00', '300.00', '0.00', NULL, NULL, '1');
INSERT INTO `product_purchase_details` (`id`, `purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `tax_rate`, `tax_amount`, `status`) VALUES ('17', 'OQQODH9X4QYSRKE', '20211206130308', 'test', '2.00', '150.00', '300.00', '0.00', NULL, NULL, '1');
INSERT INTO `product_purchase_details` (`id`, `purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `tax_rate`, `tax_amount`, `status`) VALUES ('18', 'MVHYFBV4NWE9O6I', '20211206131046', 'test', '2.00', '150.00', '300.00', '0.00', NULL, NULL, '1');
INSERT INTO `product_purchase_details` (`id`, `purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `tax_rate`, `tax_amount`, `status`) VALUES ('19', 'DZKR7NLN6UQUNNX', '20211206131629', 'test', '2.00', '150.00', '300.00', '0.00', NULL, NULL, '1');
INSERT INTO `product_purchase_details` (`id`, `purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `tax_rate`, `tax_amount`, `status`) VALUES ('20', 'O99MMQY23LFPLUY', '20211207061859', '10481603', '10.00', '100.00', '1000.00', '0.00', NULL, NULL, '1');
INSERT INTO `product_purchase_details` (`id`, `purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `tax_rate`, `tax_amount`, `status`) VALUES ('21', '29POLQX96UIX3IN', '20211207062038', '10481603', '10.00', '100.00', '1000.00', '0.00', NULL, NULL, '1');
INSERT INTO `product_purchase_details` (`id`, `purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `tax_rate`, `tax_amount`, `status`) VALUES ('22', '3QCJM2XLKMY1SVA', '20211207111813', 'test', '4.00', '150.00', '600.00', '0.00', NULL, NULL, '1');
INSERT INTO `product_purchase_details` (`id`, `purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `tax_rate`, `tax_amount`, `status`) VALUES ('23', 'NTCTT5FTYUE5H3T', '20211207162341', '10481603', '50.00', '100.00', '5000.00', '0.00', NULL, NULL, '1');
INSERT INTO `product_purchase_details` (`id`, `purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `tax_rate`, `tax_amount`, `status`) VALUES ('24', '8TYYCPBRZ1M29V7', '20211208045407', '10481603', '15.00', '100.00', '1500.00', '0.00', NULL, NULL, '1');
INSERT INTO `product_purchase_details` (`id`, `purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `tax_rate`, `tax_amount`, `status`) VALUES ('25', '1PN4RCD3JY8MD9M', '20211208161132', '65222009', '11.00', '1000.00', '11000.00', '0.00', NULL, NULL, '1');
INSERT INTO `product_purchase_details` (`id`, `purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `tax_rate`, `tax_amount`, `status`) VALUES ('26', '5C368HUVJ9RMREV', '20211208214915', '10481603', '300.00', '100.00', '30000.00', '0.00', NULL, NULL, '1');
INSERT INTO `product_purchase_details` (`id`, `purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `tax_rate`, `tax_amount`, `status`) VALUES ('27', 'NL2KELC6E78KFDL', '20211209052446', '10481603', '100.00', '100.00', '10000.00', '0.00', NULL, NULL, '1');
INSERT INTO `product_purchase_details` (`id`, `purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `tax_rate`, `tax_amount`, `status`) VALUES ('28', 'LCQOI3LVJJ1VOWP', '20211209110631', '19838372', '1.00', '1000.00', '1000.00', '1.00', '15.00', '135.00', '1');
INSERT INTO `product_purchase_details` (`id`, `purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `tax_rate`, `tax_amount`, `status`) VALUES ('29', 'QQVYNHYNSSSDE21', '20211209110631', '65222009', '1.00', '1000.00', '1000.00', '0.00', '15.00', '120.00', '1');
INSERT INTO `product_purchase_details` (`id`, `purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `tax_rate`, `tax_amount`, `status`) VALUES ('43', 'FN7W8LRL5VVEMYL', '20211209121717', '65222009', '1.00', '1000.00', '1135.00', '100.00', '15.00', '135.00', NULL);
INSERT INTO `product_purchase_details` (`id`, `purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `tax_rate`, `tax_amount`, `status`) VALUES ('42', 'LM4C75WKM9HHR9S', '20211209121717', '19838372', '1.00', '1000.00', '1127.50', '150.00', '15.00', '127.50', NULL);
INSERT INTO `product_purchase_details` (`id`, `purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `tax_rate`, `tax_amount`, `status`) VALUES ('44', 'VMRI1YTN1D9549Q', '20220401150726', '10481603', '10.00', '100.00', '0.00', '0.00', '0.00', '0.00', '1');


#
# TABLE STRUCTURE FOR: product_return
#

DROP TABLE IF EXISTS `product_return`;

CREATE TABLE `product_return` (
  `return_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `product_id` varchar(20) CHARACTER SET latin1 NOT NULL,
  `invoice_id` varchar(20) CHARACTER SET latin1 NOT NULL,
  `purchase_id` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `date_purchase` varchar(20) CHARACTER SET latin1 NOT NULL,
  `date_return` varchar(30) CHARACTER SET latin1 NOT NULL,
  `byy_qty` float NOT NULL,
  `ret_qty` float NOT NULL,
  `customer_id` varchar(20) CHARACTER SET latin1 NOT NULL,
  `supplier_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `product_rate` decimal(10,2) NOT NULL DEFAULT '0.00',
  `deduction` float NOT NULL,
  `total_deduct` decimal(10,2) NOT NULL DEFAULT '0.00',
  `total_tax` decimal(10,2) NOT NULL DEFAULT '0.00',
  `total_ret_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `net_total_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `reason` text CHARACTER SET latin1 NOT NULL,
  `usablity` int(5) NOT NULL,
  KEY `product_id` (`product_id`),
  KEY `invoice_id` (`invoice_id`),
  KEY `purchase_id` (`purchase_id`),
  KEY `customer_id` (`customer_id`),
  KEY `supplier_id` (`supplier_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: product_service
#

DROP TABLE IF EXISTS `product_service`;

CREATE TABLE `product_service` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_name` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `charge` decimal(10,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `product_service` (`service_id`, `service_name`, `description`, `charge`) VALUES ('1', 'سالم المري', 'no way', '100.00');


#
# TABLE STRUCTURE FOR: qr_code_invoice
#

DROP TABLE IF EXISTS `qr_code_invoice`;

CREATE TABLE `qr_code_invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_id` varchar(12) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `invoice_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `type_of_invoice` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `seller_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `vat_registration_number_of_seller` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `timestamp_of_electronic_invoice_credit_or_debit_note` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `vat_total` float(15,2) NOT NULL DEFAULT '0.00',
  `electronic_invoice_total_credit_or_debit` float(15,2) NOT NULL DEFAULT '0.00',
  `qr_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `add_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=153 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('1', '3719386695', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '0.00', '0.00', '3719386695.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('2', '3719386695', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '0.00', '0.00', '3719386695.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('3', '3719386695', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '0.00', '0.00', '3719386695.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('4', '3719386695', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '0.00', '0.00', '3719386695.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('5', '3719386695', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '0.00', '0.00', '3719386695.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('6', '3719386695', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '0.00', '0.00', '3719386695.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('7', '3719386695', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '0.00', '0.00', '3719386695.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('8', '3719386695', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '0.00', '0.00', '3719386695.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('9', '9174511958', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '0.00', '330.00', '9174511958.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('10', '9174511958', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '0.00', '330.00', '9174511958.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('11', '9174511958', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '0.00', '330.00', '9174511958.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('12', '9174511958', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '0.00', '330.00', '9174511958.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('13', '9174511958', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '0.00', '330.00', '9174511958.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('14', '9174511958', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '0.00', '330.00', '9174511958.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('15', '9174511958', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '0.00', '330.00', '9174511958.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('16', '9174511958', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '0.00', '330.00', '9174511958.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('17', '9174511958', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '0.00', '330.00', '9174511958.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('18', '9174511958', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '0.00', '330.00', '9174511958.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('19', '9174511958', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '0.00', '330.00', '9174511958.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('20', '9174511958', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '0.00', '330.00', '9174511958.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('21', '9174511958', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '0.00', '330.00', '9174511958.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('22', '3719386695', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '0.00', '0.00', '3719386695.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('23', '3719386695', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '0.00', '0.00', '3719386695.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('24', '9174511958', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '0.00', '330.00', '9174511958.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('25', '8354147599', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '0.00', '0.00', '8354147599.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('26', '6513464233', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '0.00', '0.00', '6513464233.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('27', '2274219949', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '0.00', '1.00', '2274219949.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('28', '7362847711', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '0.00', '4.00', '7362847711.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('29', '2811646838', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '314.00', '3.00', '2811646838.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('30', '7817516462', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '0.00', '0.00', '7817516462.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('31', '7371186723', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '100.00', '2.00', '7371186723.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('32', '1133922141', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '100.00', '2.00', '1133922141.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('33', '1133922141', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '100.00', '2.00', '1133922141.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('34', '1133922141', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '100.00', '2.00', '1133922141.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('35', '1133922141', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '100.00', '2.00', '1133922141.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('36', '1133922141', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '100.00', '2.00', '1133922141.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('37', '1133922141', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '100.00', '2.00', '1133922141.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('38', '1133922141', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '100.00', '2.00', '1133922141.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('39', '1133922141', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '100.00', '2.00', '1133922141.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('40', '1133922141', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '100.00', '2.00', '1133922141.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('41', '1133922141', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '100.00', '2.00', '1133922141.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('42', '1133922141', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '100.00', '2.00', '1133922141.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('43', '9517155219', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '90.00', '1.00', '9517155219.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('44', '9517155219', 'Customer', '', 'Demo LTD', '321232312', '0000-00-00 00:00:00', '90.00', '1.00', '9517155219.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('45', '9517155219', 'Customer', '', 'Demo LTD', '321232312', '2021-11-25 09:12:07', '90.00', '1.00', '9517155219.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('46', '9517155219', 'Customer', '', 'Demo LTD', '321232312', '2021-11-25 10:56:09', '90.00', '1.00', '9517155219.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('47', '9517155219', 'Customer', '', 'Demo LTD', '321232312', '2021-11-25 10:56:19', '90.00', '1.00', '9517155219.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('48', '9517155219', 'Customer', '', 'Demo LTD', '321232312', '2021-11-25 10:58:35', '90.00', '1.00', '9517155219.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('49', '9517155219', 'Customer', '', 'Demo LTD', '321232312', '2021-11-25 11:05:54', '90.00', '1.00', '9517155219.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('50', '9517155219', 'Customer', '', 'Demo LTD', '321232312', '2021-11-25 12:59:14', '90.00', '1.00', '9517155219.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('51', '9517155219', 'Customer', '', 'Demo LTD', '321232312', '2021-12-01 07:28:13', '90.00', '1.00', '9517155219.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('52', '9517155219', 'Customer', '', 'Demo LTD', '321232312', '2021-12-02 09:59:12', '90.00', '1.00', '9517155219.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('53', '9517155219', 'Customer', '', 'Demo LTD', '321232312', '2021-12-02 12:43:59', '90.00', '1.00', '9517155219.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('54', '9517155219', 'Customer', '', 'Demo LTD', '321232312', '2021-12-03 05:12:39', '90.00', '1.00', '9517155219.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('55', '9517155219', 'Customer', '', 'Demo LTD', '321232312', '2021-12-03 10:38:27', '90.00', '1.00', '9517155219.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('56', '9517155219', 'Customer', '', 'Demo LTD', '321232312', '2021-12-03 10:39:22', '90.00', '1.00', '9517155219.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('57', '9517155219', 'Customer', '', 'Demo LTD', '321232312', '2021-12-03 10:45:59', '90.00', '1.00', '9517155219.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('58', '9517155219', 'Customer', '', 'Demo LTD', '321232312', '2021-12-03 10:50:54', '90.00', '1.00', '9517155219.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('59', '9517155219', 'Customer', '', 'Demo LTD', '321232312', '2021-12-03 11:21:07', '90.00', '1.00', '9517155219.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('60', '9517155219', 'Customer', '', 'Demo LTD', '321232312', '2021-12-06 09:48:31', '90.00', '1.00', '9517155219.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('61', '5867751589', 'Customer', '', 'Demo LTD', '321232312', '2021-12-06 10:05:04', '30.00', '230.00', '5867751589.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('62', '3347975875', 'Customer', '', 'Demo LTD', '321232312', '2021-12-06 10:17:38', '18.75', '143.75', '3347975875.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('63', '202112061240', 'Customer', 'Purchase', 'Demo LTD', '321232312', '2021-12-06 12:40:45', '0.00', '0.00', '20211206124045.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('64', '202112061240', 'Customer', 'Purchase', 'Demo LTD', '321232312', '2021-12-06 12:40:45', '0.00', '0.00', '20211206124045.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('65', '202112061241', 'Customer', 'Purchase', 'Demo LTD', '321232312', '2021-12-06 12:41:37', '0.00', '0.00', '20211206124137.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('66', '202112061241', 'Customer', 'Purchase', 'Demo LTD', '321232312', '2021-12-06 12:41:37', '0.00', '0.00', '20211206124137.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('67', '202112061247', 'Customer', 'Purchase', 'Demo LTD', '321232312', '2021-12-06 12:47:53', '0.00', '0.00', '20211206124753.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('68', '202112061247', 'Customer', 'Purchase', 'Demo LTD', '321232312', '2021-12-06 12:47:54', '0.00', '0.00', '20211206124753.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('69', '202112061303', 'Customer', 'Purchase', 'Demo LTD', '321232312', '2021-12-06 13:03:08', '0.00', '0.00', '20211206130308.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('70', '202112061303', 'Customer', 'Purchase', 'Demo LTD', '321232312', '2021-12-06 13:03:08', '0.00', '0.00', '20211206130308.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('71', '202112061310', 'Customer', 'Purchase', 'Demo LTD', '321232312', '2021-12-06 13:10:46', '0.00', '0.00', '.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('72', '202112061310', 'Customer', 'Purchase', 'Demo LTD', '321232312', '2021-12-06 13:10:46', '0.00', '0.00', '.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('73', '3975981755', 'Customer', '', 'Demo LTD', '321232312', '2021-12-06 13:12:53', '937.50', '7.00', '3975981755.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('74', '7573274576', 'Customer', '', 'Demo LTD', '321232312', '2021-12-07 06:26:20', '18.75', '143.75', '7573274576.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('75', '7573274576', 'Customer', '', 'Demo LTD', '321232312', '2021-12-07 06:27:14', '18.75', '143.75', '7573274576.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('76', '2225786899', 'Customer', '', 'Demo LTD', '321232312', '2021-12-07 16:17:28', '18.75', '143.75', '2225786899.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('77', '3393793746', 'Customer', '', 'Demo LTD', '321232312', '2021-12-07 16:24:45', '0.00', '0.00', '3393793746.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('78', '3393793746', 'Customer', '', 'Demo LTD', '321232312', '2021-12-07 17:04:17', '0.00', '0.00', '3393793746.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('79', '3393793746', 'Customer', '', 'Demo LTD', '321232312', '2021-12-07 17:05:37', '0.00', '0.00', '3393793746.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('80', '2225786899', 'Customer', '', 'Demo LTD', '321232312', '2021-12-07 17:05:55', '18.75', '143.75', '2225786899.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('81', '4812168955', 'Customer', '', 'Demo LTD', '321232312', '2021-12-09 05:01:55', '187.50', '1.00', '4812168955.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('82', '1685329834', 'Customer', '', 'Demo LTD', '321232312', '2021-12-09 05:01:55', '187.50', '1.00', '1685329834.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('83', '4812168955', 'Customer', '', 'Demo LTD', '321232312', '2021-12-09 09:42:03', '187.50', '1.00', '4812168955.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('84', '4812168955', 'Customer', '', 'Demo LTD', '321232312', '2021-12-09 13:28:47', '187.50', '1.00', '4812168955.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('85', '4812168955', 'Customer', '', 'Demo LTD', '321232312', '2021-12-09 13:33:48', '187.50', '1.00', '4812168955.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('86', '4812168955', 'Customer', '', 'Demo LTD', '321232312', '2021-12-09 13:34:59', '187.50', '1.00', '4812168955.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('87', '4812168955', 'Customer', '', 'Demo LTD', '321232312', '2021-12-09 13:35:48', '187.50', '1.00', '4812168955.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('88', '4812168955', 'Customer', '', 'Demo LTD', '321232312', '2021-12-09 13:39:01', '187.50', '1.00', '4812168955.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('89', '4812168955', 'Customer', '', 'Demo LTD', '321232312', '2021-12-09 13:39:45', '187.50', '1.00', '4812168955.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('90', '4812168955', 'Customer', '', 'Demo LTD', '321232312', '2021-12-09 13:40:45', '187.50', '1.00', '4812168955.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('91', '4812168955', 'Customer', '', 'Demo LTD', '321232312', '2021-12-09 13:42:15', '187.50', '1.00', '4812168955.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('92', '4812168955', 'Customer', '', 'Demo LTD', '321232312', '2021-12-09 13:45:03', '187.50', '1.00', '4812168955.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('93', '4812168955', 'Customer', '', 'Demo LTD', '321232312', '2021-12-09 13:49:10', '187.50', '1.00', '4812168955.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('94', '4812168955', 'Customer', '', 'Demo LTD', '321232312', '2021-12-09 13:49:22', '187.50', '1.00', '4812168955.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('95', '4812168955', 'Customer', '', 'Demo LTD', '321232312', '2021-12-09 13:50:24', '187.50', '1.00', '4812168955.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('96', '4812168955', 'Customer', '', 'Demo LTD', '321232312', '2021-12-09 13:52:05', '187.50', '1.00', '4812168955.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('97', '4812168955', 'Customer', '', 'Demo LTD', '321232312', '2021-12-09 13:54:26', '187.50', '1.00', '4812168955.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('98', '4812168955', 'Customer', '', 'Demo LTD', '321232312', '2021-12-09 13:55:35', '187.50', '1.00', '4812168955.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('99', '4812168955', 'Customer', '', 'Demo LTD', '321232312', '2021-12-09 13:56:09', '187.50', '1.00', '4812168955.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('100', '4812168955', 'Customer', '', 'Demo LTD', '321232312', '2021-12-09 13:56:38', '187.50', '1.00', '4812168955.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('101', '4812168955', 'Customer', '', 'Demo LTD', '321232312', '2021-12-09 13:58:24', '187.50', '1.00', '4812168955.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('102', '4812168955', 'Customer', '', 'Demo LTD', '321232312', '2021-12-09 13:59:21', '187.50', '1.00', '4812168955.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('103', '4812168955', 'Customer', '', 'Demo LTD', '321232312', '2021-12-09 13:59:53', '187.50', '1.00', '4812168955.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('104', '4812168955', 'Customer', '', 'Demo LTD', '321232312', '2021-12-09 14:01:13', '187.50', '1.00', '4812168955.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('105', '4812168955', 'Customer', '', 'Demo LTD', '321232312', '2021-12-09 14:02:57', '187.50', '1.00', '4812168955.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('106', '4812168955', 'Customer', '', 'Demo LTD', '321232312', '2021-12-09 14:03:35', '187.50', '1.00', '4812168955.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('107', '4812168955', 'Customer', '', 'Demo LTD', '321232312', '2021-12-09 14:04:46', '187.50', '1.00', '4812168955.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('108', '4812168955', 'Customer', '', 'Demo LTD', '321232312', '2021-12-09 14:06:32', '187.50', '1.00', '4812168955.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('109', '7573274576', 'Customer', '', 'Demo LTD', '321232312', '2021-12-09 14:07:32', '18.75', '143.75', '7573274576.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('110', '4812168955', 'Customer', '', 'Demo LTD', '321232312', '2021-12-14 05:50:23', '187.50', '1.00', '4812168955.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('111', '8429942367', 'Customer', '', 'Demo LTD', '321232312', '2021-12-14 05:54:42', '142.50', '1.00', '8429942367.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('112', '8429942367', 'Customer', '', 'Demo LTD', '321232312', '2021-12-14 05:55:00', '142.50', '1.00', '8429942367.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('113', '8429942367', 'Customer', '', 'Demo LTD', '321232312', '2021-12-14 05:56:28', '142.50', '1.00', '8429942367.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('114', '5613135125', 'Customer', '', 'Demo LTD', '321232312', '2021-12-14 05:59:47', '0.00', '0.00', '5613135125.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('115', '5613135125', 'Customer', '', 'Demo LTD', '321232312', '2021-12-14 06:00:21', '0.00', '0.00', '5613135125.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('116', '5613135125', 'Customer', '', 'Demo LTD', '321232312', '2021-12-14 07:19:12', '0.00', '0.00', '5613135125.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('117', '8429942367', 'Customer', '', 'Demo LTD', '321232312', '2021-12-22 03:46:43', '142.50', '1.00', '8429942367.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('118', '8429942367', 'Customer', '', 'Demo LTD', '321232312', '2021-12-22 03:55:35', '142.50', '1.00', '8429942367.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('119', '8429942367', 'Customer', '', 'Demo LTD', '321232312', '2021-12-22 04:02:13', '142.50', '1.00', '8429942367.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('120', '8429942367', 'Customer', '', 'Demo LTD', '321232312', '2021-12-22 09:41:38', '142.50', '1.00', '8429942367.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('121', '8429942367', 'Customer', '', 'Demo LTD', '321232312', '2021-12-22 09:44:28', '142.50', '1.00', '8429942367.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('122', '6283228144', 'Customer', '', 'Demo LTD', '321232312', '2021-12-24 04:57:49', '0.00', '0.00', '6283228144.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('123', '6283228144', 'Customer', '', 'Demo LTD', '321232312', '2021-12-24 05:09:17', '0.00', '0.00', '6283228144.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('124', '3186411324', 'Customer', '', 'Demo LTD', '321232312', '2021-12-27 11:27:15', '0.00', '0.00', '3186411324.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('125', '4189318841', 'Customer', '', 'Demo LTD', '321232312', '2021-12-27 11:27:57', '0.00', '0.00', '4189318841.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('126', '7785515368', 'Customer', '', 'Demo LTD', '321232312', '2021-12-27 11:28:23', '0.00', '0.00', '7785515368.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('127', '7785515368', 'Customer', '', 'Demo LTD', '321232312', '2022-01-05 11:15:24', '0.00', '0.00', '7785515368.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('128', '7785515368', 'Customer', '', 'Demo LTD', '321232312', '2022-01-05 11:15:38', '0.00', '0.00', '7785515368.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('129', '4189318841', 'Customer', '', 'Demo LTD', '321232312', '2022-01-05 11:15:57', '0.00', '0.00', '4189318841.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('130', '8429942367', 'Customer', '', 'Demo LTD', '321232312', '2022-01-05 11:17:04', '142.50', '1.00', '8429942367.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('131', '4812168955', 'Customer', '', 'Demo LTD', '321232312', '2022-01-05 11:23:23', '187.50', '1.00', '4812168955.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('132', '7785515368', 'Customer', '', 'Demo LTD', '321232312', '2022-01-11 00:16:50', '0.00', '0.00', '7785515368.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('133', '7785515368', 'Customer', '', 'Demo LTD', '321232312', '2022-01-11 00:17:45', '0.00', '0.00', '7785515368.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('134', '9517155219', 'Customer', '', 'Demo LTD', '321232312', '2022-01-11 00:19:10', '90.00', '1.00', '9517155219.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('135', '7785515368', 'Customer', '', 'Demo LTD', '321232312', '2022-01-11 03:04:56', '0.00', '0.00', '7785515368.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('136', '7785515368', 'Customer', '', 'Demo LTD', '321232312', '2022-01-11 03:05:07', '0.00', '0.00', '7785515368.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('137', '4189318841', 'Customer', '', 'Demo LTD', '321232312', '2022-01-11 07:32:35', '0.00', '0.00', '4189318841.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('138', '4189318841', 'Customer', '', 'Demo LTD', '321232312', '2022-01-11 07:35:39', '0.00', '0.00', '4189318841.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('139', '7785515368', 'Customer', '', 'Demo LTD', '321232312', '2022-01-11 08:34:18', '0.00', '0.00', '7785515368.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('140', '7785515368', 'Customer', '', 'Demo LTD', '321232312', '2022-02-14 16:48:41', '0.00', '0.00', '7785515368.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('141', '9517155219', 'Customer', '', 'Demo LTD', '321232312', '2022-03-07 18:57:35', '90.00', '1.00', '9517155219.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('142', '5733923584', 'Customer', '', 'Demo LTD', '321232312', '2022-03-09 06:22:16', '0.00', '0.00', '5733923584.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('143', '4518536574', 'Customer', '', 'Demo LTD', '321232312', '2022-03-09 06:37:06', '0.00', '0.00', '4518536574.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('144', '6331399271', 'Customer', '', 'Demo LTD', '321232312', '2022-03-19 11:54:50', '0.00', '0.00', '6331399271.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('145', '5353128427', 'Customer', '', 'Demo LTD', '321232312', '2022-03-19 13:15:44', '0.00', '0.00', '5353128427.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('146', '7519975326', 'Customer', '', 'Demo LTD', '321232312', '2022-03-19 13:16:29', '0.00', '0.00', '7519975326.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('147', '9517155219', 'Customer', '', 'Demo LTD', '321232312', '2022-03-23 06:22:20', '90.00', '1.00', '9517155219.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('148', '7216457549', 'Customer', '', 'Demo LTD', '321232312', '2022-04-04 08:15:23', '0.00', '0.00', '7216457549.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('149', '3621538482', 'Customer', '', 'Demo LTD', '321232312', '2022-04-04 08:15:23', '0.00', '0.00', '3621538482.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('150', '7216457549', 'Customer', '', 'Demo LTD', '321232312', '2022-06-02 13:59:34', '0.00', '0.00', '7216457549.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('151', '1375596461', 'Customer', '', 'Demo LTD', '321232312', '2022-06-22 10:04:08', '0.00', '0.00', '1375596461.png', '0000-00-00 00:00:00');
INSERT INTO `qr_code_invoice` (`id`, `invoice_id`, `invoice_type`, `type_of_invoice`, `seller_name`, `vat_registration_number_of_seller`, `timestamp_of_electronic_invoice_credit_or_debit_note`, `vat_total`, `electronic_invoice_total_credit_or_debit`, `qr_image`, `add_date`) VALUES ('152', '1375596461', 'Customer', '', 'Demo LTD', '321232312', '2022-06-22 10:06:25', '0.00', '0.00', '1375596461.png', '0000-00-00 00:00:00');


#
# TABLE STRUCTURE FOR: quot_products_used
#

DROP TABLE IF EXISTS `quot_products_used`;

CREATE TABLE `quot_products_used` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quot_id` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `serial_no` varchar(30) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `used_qty` decimal(10,2) DEFAULT NULL,
  `rate` decimal(10,2) DEFAULT NULL,
  `supplier_rate` float DEFAULT NULL,
  `total_price` decimal(12,2) DEFAULT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `discount_per` varchar(15) DEFAULT NULL,
  `tax` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`),
  KEY `quot_id` (`quot_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO `quot_products_used` (`id`, `quot_id`, `product_id`, `serial_no`, `description`, `used_qty`, `rate`, `supplier_rate`, `total_price`, `discount`, `discount_per`, `tax`) VALUES ('1', 'VADEQ5186PV5P5P', '', '', 'nn', '0.00', '1.00', '0', '0.00', '0.00', '2', '0.00');
INSERT INTO `quot_products_used` (`id`, `quot_id`, `product_id`, `serial_no`, `description`, `used_qty`, `rate`, `supplier_rate`, `total_price`, `discount`, `discount_per`, `tax`) VALUES ('2', 'RKZRF1HXG7TSX2U', '', '', '1', '0.00', '2.00', '0', '0.00', '0.00', '', '0.00');
INSERT INTO `quot_products_used` (`id`, `quot_id`, `product_id`, `serial_no`, `description`, `used_qty`, `rate`, `supplier_rate`, `total_price`, `discount`, `discount_per`, `tax`) VALUES ('3', 'RKZRF1HXG7TSX2U', '', '', '2', '0.00', '2.00', '0', '0.00', '0.00', '', NULL);


#
# TABLE STRUCTURE FOR: quotation
#

DROP TABLE IF EXISTS `quotation`;

CREATE TABLE `quotation` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `quotation_id` varchar(30) NOT NULL,
  `quot_description` text NOT NULL,
  `customer_id` varchar(30) NOT NULL,
  `quotdate` date NOT NULL,
  `expire_date` date DEFAULT NULL,
  `item_total_amount` decimal(12,2) NOT NULL,
  `item_total_dicount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `item_total_tax` decimal(10,2) NOT NULL DEFAULT '0.00',
  `service_total_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `service_total_discount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `service_total_tax` decimal(10,2) NOT NULL DEFAULT '0.00',
  `quot_dis_item` decimal(10,2) NOT NULL DEFAULT '0.00',
  `quot_dis_service` decimal(10,2) NOT NULL DEFAULT '0.00',
  `quot_no` varchar(50) NOT NULL,
  `create_by` varchar(30) NOT NULL,
  `create_date` date NOT NULL,
  `update_by` varchar(30) DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `cust_show` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `quot_no` (`quot_no`),
  KEY `quotation_id` (`quotation_id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `quotation` (`id`, `quotation_id`, `quot_description`, `customer_id`, `quotdate`, `expire_date`, `item_total_amount`, `item_total_dicount`, `item_total_tax`, `service_total_amount`, `service_total_discount`, `service_total_tax`, `quot_dis_item`, `quot_dis_service`, `quot_no`, `create_by`, `create_date`, `update_by`, `update_date`, `status`, `cust_show`) VALUES ('1', 'VADEQ5186PV5P5P', '', '2', '2022-03-29', '2022-04-01', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1000', '1', '0000-00-00', NULL, NULL, '1', NULL);
INSERT INTO `quotation` (`id`, `quotation_id`, `quot_description`, `customer_id`, `quotdate`, `expire_date`, `item_total_amount`, `item_total_dicount`, `item_total_tax`, `service_total_amount`, `service_total_discount`, `service_total_tax`, `quot_dis_item`, `quot_dis_service`, `quot_no`, `create_by`, `create_date`, `update_by`, `update_date`, `status`, `cust_show`) VALUES ('2', 'RKZRF1HXG7TSX2U', '', '22', '2022-03-29', '2022-03-29', '0.00', '0.00', '0.00', '990.00', '10.00', '0.00', '0.00', '0.00', '1001', '1', '0000-00-00', NULL, NULL, '1', NULL);


#
# TABLE STRUCTURE FOR: quotation_service_used
#

DROP TABLE IF EXISTS `quotation_service_used`;

CREATE TABLE `quotation_service_used` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quot_id` varchar(20) NOT NULL,
  `service_id` int(11) NOT NULL,
  `qty` decimal(10,2) NOT NULL DEFAULT '0.00',
  `charge` decimal(10,2) NOT NULL DEFAULT '0.00',
  `discount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `discount_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `tax` decimal(10,2) NOT NULL DEFAULT '0.00',
  `total` decimal(10,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`),
  KEY `quot_id` (`quot_id`),
  KEY `service_id` (`service_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `quotation_service_used` (`id`, `quot_id`, `service_id`, `qty`, `charge`, `discount`, `discount_amount`, `tax`, `total`) VALUES ('1', 'VADEQ5186PV5P5P', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00');
INSERT INTO `quotation_service_used` (`id`, `quot_id`, `service_id`, `qty`, `charge`, `discount`, `discount_amount`, `tax`, `total`) VALUES ('2', 'RKZRF1HXG7TSX2U', '0', '0.00', '1000.00', '1.00', '10.00', '0.00', '1000.00');


#
# TABLE STRUCTURE FOR: quotation_taxinfo
#

DROP TABLE IF EXISTS `quotation_taxinfo`;

CREATE TABLE `quotation_taxinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `customer_id` int(11) NOT NULL,
  `relation_id` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

INSERT INTO `quotation_taxinfo` (`id`, `date`, `customer_id`, `relation_id`) VALUES ('1', '2022-03-29', '2', 'item1000');
INSERT INTO `quotation_taxinfo` (`id`, `date`, `customer_id`, `relation_id`) VALUES ('2', '2022-03-29', '2', 'serv1000');
INSERT INTO `quotation_taxinfo` (`id`, `date`, `customer_id`, `relation_id`) VALUES ('3', '2022-03-29', '22', 'item1001');
INSERT INTO `quotation_taxinfo` (`id`, `date`, `customer_id`, `relation_id`) VALUES ('4', '2022-03-29', '22', 'serv1001');


#
# TABLE STRUCTURE FOR: role_permission
#

DROP TABLE IF EXISTS `role_permission`;

CREATE TABLE `role_permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_module_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `create` tinyint(1) DEFAULT NULL,
  `read` tinyint(1) DEFAULT NULL,
  `update` tinyint(1) DEFAULT NULL,
  `delete` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_module_id` (`fk_module_id`),
  KEY `fk_user_id` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=361 DEFAULT CHARSET=utf8;

INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('1', '1', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('2', '2', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('3', '3', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('4', '4', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('5', '5', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('6', '6', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('7', '7', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('8', '8', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('9', '9', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('10', '10', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('11', '11', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('12', '12', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('13', '13', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('14', '14', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('15', '15', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('16', '16', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('17', '17', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('18', '18', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('19', '19', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('20', '20', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('21', '21', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('22', '22', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('23', '23', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('24', '24', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('25', '25', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('26', '26', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('27', '27', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('28', '28', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('29', '29', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('30', '30', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('31', '31', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('32', '32', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('33', '33', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('34', '34', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('35', '35', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('36', '36', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('37', '37', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('38', '38', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('39', '39', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('40', '40', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('41', '41', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('42', '42', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('43', '43', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('44', '44', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('45', '45', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('46', '46', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('47', '47', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('48', '48', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('49', '49', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('50', '50', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('51', '51', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('52', '52', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('53', '53', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('54', '54', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('55', '55', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('56', '56', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('57', '57', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('58', '58', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('59', '59', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('60', '60', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('61', '61', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('62', '62', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('63', '63', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('64', '64', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('65', '65', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('66', '66', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('67', '67', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('68', '68', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('69', '69', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('70', '70', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('71', '71', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('72', '72', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('73', '73', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('74', '74', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('75', '75', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('76', '76', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('77', '77', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('78', '78', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('79', '79', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('80', '80', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('81', '81', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('82', '82', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('83', '83', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('84', '84', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('85', '85', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('86', '86', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('87', '87', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('88', '88', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('89', '89', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('90', '90', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('91', '91', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('92', '92', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('93', '93', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('94', '94', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('95', '95', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('96', '96', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('97', '97', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('98', '98', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('99', '99', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('100', '100', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('101', '101', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('102', '102', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('103', '103', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('104', '104', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('105', '105', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('106', '106', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('107', '107', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('108', '108', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('109', '109', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('110', '110', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('111', '111', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('112', '112', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('113', '113', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('114', '114', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('115', '115', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('116', '116', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('117', '117', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('118', '118', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('119', '119', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('120', '120', '1', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('121', '1', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('122', '2', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('123', '3', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('124', '4', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('125', '5', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('126', '6', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('127', '7', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('128', '8', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('129', '9', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('130', '10', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('131', '11', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('132', '12', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('133', '13', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('134', '14', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('135', '15', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('136', '16', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('137', '17', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('138', '18', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('139', '19', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('140', '20', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('141', '21', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('142', '22', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('143', '23', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('144', '24', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('145', '25', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('146', '26', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('147', '27', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('148', '28', '2', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('149', '29', '2', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('150', '30', '2', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('151', '31', '2', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('152', '32', '2', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('153', '33', '2', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('154', '34', '2', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('155', '35', '2', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('156', '36', '2', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('157', '37', '2', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('158', '38', '2', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('159', '39', '2', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('160', '40', '2', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('161', '41', '2', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('162', '42', '2', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('163', '43', '2', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('164', '44', '2', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('165', '45', '2', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('166', '46', '2', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('167', '47', '2', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('168', '48', '2', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('169', '49', '2', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('170', '50', '2', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('171', '51', '2', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('172', '52', '2', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('173', '53', '2', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('174', '54', '2', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('175', '55', '2', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('176', '56', '2', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('177', '57', '2', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('178', '58', '2', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('179', '59', '2', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('180', '60', '2', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('181', '61', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('182', '62', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('183', '63', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('184', '64', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('185', '65', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('186', '66', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('187', '67', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('188', '68', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('189', '69', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('190', '70', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('191', '71', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('192', '72', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('193', '73', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('194', '74', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('195', '75', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('196', '76', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('197', '77', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('198', '78', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('199', '79', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('200', '80', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('201', '81', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('202', '82', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('203', '83', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('204', '84', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('205', '85', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('206', '86', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('207', '87', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('208', '88', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('209', '89', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('210', '90', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('211', '91', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('212', '92', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('213', '93', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('214', '94', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('215', '95', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('216', '96', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('217', '97', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('218', '98', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('219', '99', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('220', '100', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('221', '101', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('222', '102', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('223', '103', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('224', '104', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('225', '105', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('226', '106', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('227', '107', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('228', '108', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('229', '109', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('230', '110', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('231', '111', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('232', '112', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('233', '113', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('234', '114', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('235', '115', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('236', '116', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('237', '117', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('238', '118', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('239', '119', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('240', '120', '2', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('241', '1', '3', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('242', '2', '3', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('243', '3', '3', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('244', '4', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('245', '5', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('246', '6', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('247', '7', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('248', '8', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('249', '9', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('250', '10', '3', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('251', '11', '3', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('252', '12', '3', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('253', '13', '3', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('254', '14', '3', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('255', '15', '3', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('256', '16', '3', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('257', '17', '3', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('258', '18', '3', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('259', '19', '3', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('260', '20', '3', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('261', '21', '3', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('262', '22', '3', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('263', '23', '3', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('264', '24', '3', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('265', '25', '3', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('266', '26', '3', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('267', '27', '3', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('268', '28', '3', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('269', '29', '3', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('270', '30', '3', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('271', '31', '3', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('272', '32', '3', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('273', '33', '3', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('274', '34', '3', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('275', '35', '3', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('276', '36', '3', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('277', '37', '3', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('278', '38', '3', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('279', '39', '3', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('280', '40', '3', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('281', '41', '3', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('282', '42', '3', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('283', '43', '3', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('284', '44', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('285', '45', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('286', '46', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('287', '47', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('288', '48', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('289', '49', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('290', '50', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('291', '51', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('292', '52', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('293', '53', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('294', '54', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('295', '55', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('296', '56', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('297', '57', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('298', '58', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('299', '59', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('300', '60', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('301', '61', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('302', '62', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('303', '63', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('304', '64', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('305', '65', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('306', '66', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('307', '67', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('308', '68', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('309', '69', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('310', '70', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('311', '71', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('312', '72', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('313', '73', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('314', '74', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('315', '75', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('316', '76', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('317', '77', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('318', '78', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('319', '79', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('320', '80', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('321', '81', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('322', '82', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('323', '83', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('324', '84', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('325', '85', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('326', '86', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('327', '87', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('328', '88', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('329', '89', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('330', '90', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('331', '91', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('332', '92', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('333', '93', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('334', '94', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('335', '95', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('336', '96', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('337', '97', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('338', '98', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('339', '99', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('340', '100', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('341', '101', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('342', '102', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('343', '103', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('344', '104', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('345', '105', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('346', '106', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('347', '107', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('348', '108', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('349', '109', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('350', '110', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('351', '111', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('352', '112', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('353', '113', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('354', '114', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('355', '115', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('356', '116', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('357', '117', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('358', '118', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('359', '119', '3', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('360', '120', '3', '0', '0', '0', '0');


#
# TABLE STRUCTURE FOR: salary_sheet_generate
#

DROP TABLE IF EXISTS `salary_sheet_generate`;

CREATE TABLE `salary_sheet_generate` (
  `ssg_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `gdate` varchar(30) DEFAULT NULL,
  `start_date` varchar(30) CHARACTER SET latin1 NOT NULL,
  `end_date` varchar(30) CHARACTER SET latin1 NOT NULL,
  `generate_by` varchar(30) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`ssg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `salary_sheet_generate` (`ssg_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('1', '', 'March 2022', '2022-3-1', '2022-3-31', 'Admin User');


#
# TABLE STRUCTURE FOR: salary_type
#

DROP TABLE IF EXISTS `salary_type`;

CREATE TABLE `salary_type` (
  `salary_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `sal_name` varchar(100) NOT NULL,
  `salary_type` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`salary_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: sec_role
#

DROP TABLE IF EXISTS `sec_role`;

CREATE TABLE `sec_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `sec_role` (`id`, `type`) VALUES ('1', 'Admin');
INSERT INTO `sec_role` (`id`, `type`) VALUES ('2', 'Apex Home Tutors');
INSERT INTO `sec_role` (`id`, `type`) VALUES ('3', 'POS');


#
# TABLE STRUCTURE FOR: sec_userrole
#

DROP TABLE IF EXISTS `sec_userrole`;

CREATE TABLE `sec_userrole` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `roleid` int(11) NOT NULL,
  `createby` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `createdate` datetime NOT NULL,
  UNIQUE KEY `ID` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `sec_userrole` (`id`, `user_id`, `roleid`, `createby`, `createdate`) VALUES ('1', '2', '2', '1', '2022-06-22 09:51:06');
INSERT INTO `sec_userrole` (`id`, `user_id`, `roleid`, `createby`, `createdate`) VALUES ('2', '151854', '2', '1', '2022-06-22 09:52:48');
INSERT INTO `sec_userrole` (`id`, `user_id`, `roleid`, `createby`, `createdate`) VALUES ('3', '95121', '2', '151854', '2022-06-22 09:56:30');
INSERT INTO `sec_userrole` (`id`, `user_id`, `roleid`, `createby`, `createdate`) VALUES ('4', '95121', '3', '1', '2022-06-22 10:02:19');


#
# TABLE STRUCTURE FOR: service_invoice
#

DROP TABLE IF EXISTS `service_invoice`;

CREATE TABLE `service_invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `voucher_no` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `employee_id` varchar(100) DEFAULT NULL,
  `customer_id` varchar(30) NOT NULL,
  `total_amount` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total_discount` decimal(20,2) NOT NULL DEFAULT '0.00',
  `invoice_discount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `total_tax` decimal(10,2) NOT NULL DEFAULT '0.00',
  `paid_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `due_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `shipping_cost` decimal(10,2) NOT NULL DEFAULT '0.00',
  `previous` decimal(10,2) NOT NULL DEFAULT '0.00',
  `details` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: service_invoice_details
#

DROP TABLE IF EXISTS `service_invoice_details`;

CREATE TABLE `service_invoice_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_id` int(11) NOT NULL,
  `service_inv_id` varchar(30) NOT NULL,
  `qty` decimal(10,2) NOT NULL DEFAULT '0.00',
  `charge` decimal(10,2) NOT NULL DEFAULT '0.00',
  `discount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `discount_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `total` decimal(10,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`),
  KEY `service_id` (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: sms_settings
#

DROP TABLE IF EXISTS `sms_settings`;

CREATE TABLE `sms_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `api_key` varchar(100) DEFAULT NULL,
  `api_secret` varchar(100) DEFAULT NULL,
  `from` varchar(100) DEFAULT NULL,
  `isinvoice` int(11) NOT NULL DEFAULT '0',
  `isservice` int(11) NOT NULL DEFAULT '0',
  `isreceive` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `sms_settings` (`id`, `api_key`, `api_secret`, `from`, `isinvoice`, `isservice`, `isreceive`) VALUES ('1', '5d6db102011', '456452dfgdf', '8801645452', '0', '0', '0');


#
# TABLE STRUCTURE FOR: sub_module
#

DROP TABLE IF EXISTS `sub_module`;

CREATE TABLE `sub_module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8,
  `image` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `directory` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=latin1;

INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('1', '1', 'new_invoice', NULL, NULL, 'new_invoice', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('2', '1', 'manage_invoice', NULL, NULL, 'manage_invoice', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('3', '1', 'pos_invoice', NULL, NULL, 'gui_pos', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('4', '2', 'add_customer', NULL, NULL, 'add_customer', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('5', '2', 'manage_customer', NULL, NULL, 'manage_customer', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('6', '2', 'credit_customer', NULL, NULL, 'credit_customer', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('7', '2', 'paid_customer', NULL, NULL, 'paid_customer', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('8', '2', 'customer_ledger', NULL, NULL, 'customer_ledger', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('9', '2', 'customer_advance', NULL, NULL, 'customer_advance', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('10', '3', 'category', NULL, NULL, 'category', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('11', '3', 'manage_category', NULL, NULL, 'manage_category', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('12', '3', 'unit', NULL, NULL, 'unit', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('13', '3', 'manage_unit', NULL, NULL, 'manage_unit', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('14', '3', 'add_product', NULL, NULL, 'create_product', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('15', '3', 'import_product_csv', NULL, NULL, 'add_product_csv', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('16', '3', 'manage_product', NULL, NULL, 'manage_product', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('17', '4', 'add_supplier', NULL, NULL, 'add_supplier', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('18', '4', 'manage_supplier', NULL, NULL, 'manage_supplier', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('19', '4', 'supplier_ledger', NULL, NULL, 'supplier_ledger_report', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('20', '4', 'supplier_advance', NULL, NULL, 'supplier_advance', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('21', '5', 'add_purchase', NULL, NULL, 'add_purchase', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('22', '5', 'manage_purchase', NULL, NULL, 'manage_purchase', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('23', '6', 'stock_report', NULL, NULL, 'stock_report', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('24', '7', 'return', NULL, NULL, 'add_return', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('25', '7', 'stock_return_list', NULL, NULL, 'return_list', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('26', '7', 'supplier_return_list', NULL, NULL, 'supplier_return_list', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('27', '7', 'wastage_return_list', NULL, NULL, 'wastage_return_list', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('28', '8', 'closing', NULL, NULL, 'add_closing', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('29', '8', 'closing_report', NULL, NULL, 'closing_report', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('30', '8', 'todays_report', NULL, NULL, 'all_report', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('31', '8', 'todays_customer_receipt', NULL, NULL, 'todays_customer_receipt', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('32', '8', 'sales_report', NULL, NULL, 'todays_sales_report', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('33', '8', 'due_report', NULL, NULL, 'due_report', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('34', '8', 'purchase_report', NULL, NULL, 'todays_purchase_report', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('35', '8', 'purchase_report_category_wise', NULL, NULL, 'purchase_report_category_wise', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('36', '8', 'sales_report_product_wise', NULL, NULL, 'product_sales_reports_date_wise', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('37', '8', 'sales_report_category_wise', NULL, NULL, 'sales_report_category_wise', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('38', '8', 'shipping_cost_report', NULL, NULL, 'shipping_cost_report', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('39', '8', 'user_wise_sales_report', NULL, NULL, 'user_wise_sales_report', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('40', '8', 'invoice_return', NULL, NULL, 'invoice_return', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('41', '8', 'supplier_return', NULL, NULL, 'supplier_return', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('42', '8', 'tax_report', NULL, NULL, 'tax_report', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('43', '8', 'profit_report', NULL, NULL, 'profit_report', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('44', '9', 'c_o_a', NULL, NULL, 'show_tree', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('45', '9', 'supplier_payment', NULL, NULL, 'supplier_payment', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('46', '9', 'customer_receive', NULL, NULL, 'customer_receive', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('47', '9', 'opening_balance', NULL, NULL, 'opening_balance', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('48', '9', 'debit_voucher', NULL, NULL, 'debit_voucher', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('49', '9', 'credit_voucher', NULL, NULL, 'credit_voucher', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('50', '9', 'voucher_approval', NULL, NULL, 'aprove_v', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('51', '9', 'contra_voucher', NULL, NULL, 'contra_voucher', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('52', '9', 'journal_voucher', NULL, NULL, 'journal_voucher', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('53', '9', 'report', NULL, NULL, 'ac_report', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('54', '9', 'cash_book', NULL, NULL, 'cash_book', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('55', '9', 'Inventory_ledger', NULL, NULL, 'inventory_ledger', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('56', '9', 'bank_book', NULL, NULL, 'bank_book', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('57', '9', 'general_ledger', NULL, NULL, 'general_ledger', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('58', '9', 'trial_balance', NULL, NULL, 'trial_balance', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('59', '9', 'cash_flow', NULL, NULL, 'cash_flow_report', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('60', '9', 'coa_print', NULL, NULL, 'coa_print', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('61', '10', 'add_new_bank', NULL, NULL, 'add_bank', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('62', '10', 'manage_bank', NULL, NULL, 'bank_list', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('63', '10', 'bank_transaction', NULL, NULL, 'bank_transaction', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('64', '10', 'bank_ledger', NULL, NULL, 'bank_ledger', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('65', '11', 'tax_settings', NULL, NULL, 'tax_settings', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('66', '11', 'add_incometax', NULL, NULL, 'add_incometax', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('67', '11', 'manage_income_tax', NULL, NULL, 'manage_income_tax', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('68', '11', 'tax_report', NULL, NULL, 'tax_report', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('69', '11', 'invoice_wise_tax_report', NULL, NULL, 'invoice_wise_tax_report', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('70', '12', 'add_designation', NULL, NULL, 'add_designation', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('71', '12', 'manage_designation', NULL, NULL, 'manage_designation', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('72', '12', 'add_employee', NULL, NULL, 'add_employee', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('73', '12', 'manage_employee', NULL, NULL, 'manage_employee', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('74', '12', 'add_attendance', NULL, NULL, 'add_attendance', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('75', '12', 'manage_attendance', NULL, NULL, 'manage_attendance', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('76', '12', 'attendance_report', NULL, NULL, 'attendance_report', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('77', '12', 'add_benefits', NULL, NULL, 'add_benefits', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('78', '12', 'manage_benefits', NULL, NULL, 'manage_benefits', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('79', '12', 'add_salary_setup', NULL, NULL, 'add_salary_setup', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('80', '12', 'manage_salary_setup', NULL, NULL, 'manage_salary_setup', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('81', '12', 'salary_generate', NULL, NULL, 'salary_generate', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('82', '12', 'manage_salary_generate', NULL, NULL, 'manage_salary_generate', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('83', '12', 'salary_payment', NULL, NULL, 'salary_payment', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('84', '12', 'add_expense_item', NULL, NULL, 'add_expense_item', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('85', '12', 'manage_expense_item', NULL, NULL, 'manage_expense_item', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('86', '12', 'add_expense', NULL, NULL, 'add_expense', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('87', '12', 'manage_expense', NULL, NULL, 'manage_expense', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('88', '12', 'expense_statement', NULL, NULL, 'expense_statement', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('89', '12', 'add_person_officeloan', NULL, NULL, 'add1_person', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('90', '12', 'add_loan_officeloan', NULL, NULL, 'add_office_loan', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('91', '12', 'add_payment_officeloan', NULL, NULL, 'add_loan_payment', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('92', '12', 'manage_loan_officeloan', NULL, NULL, 'manage1_person', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('93', '12', 'add_person_personalloan', NULL, NULL, 'add_person', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('94', '12', 'add_loan_personalloan', NULL, NULL, 'add_loan', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('95', '12', 'add_payment_personalloan', NULL, NULL, 'add_payment', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('96', '12', 'manage_loan_personalloan', NULL, NULL, 'manage_person', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('97', '13', 'add_service', NULL, NULL, 'create_service', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('98', '13', 'manage_service', NULL, NULL, 'manage_service', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('99', '13', 'service_invoice', NULL, NULL, 'service_invoice', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('100', '13', 'manage_service_invoice', NULL, NULL, 'manage_service_invoice', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('101', '14', 'generate_commission', NULL, NULL, 'commission', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('102', '15', 'manage_company', NULL, NULL, 'manage_company', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('103', '15', 'add_user', NULL, NULL, 'add_user', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('104', '15', 'manage_users', NULL, NULL, 'manage_user', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('105', '15', 'language', NULL, NULL, 'add_language', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('106', '15', 'currency', NULL, NULL, 'add_currency', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('107', '15', 'setting', NULL, NULL, 'soft_setting', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('108', '15', 'print_setting', NULL, NULL, 'print_setting', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('109', '15', 'mail_setting', NULL, NULL, 'mail_setting', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('110', '15', 'add_role', NULL, NULL, 'add_role', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('111', '15', 'role_list', NULL, NULL, 'role_list', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('112', '15', 'user_assign_role', NULL, NULL, 'user_assign', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('113', '15', 'Permission', NULL, NULL, NULL, '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('114', '15', 'sms_configure', NULL, NULL, 'sms_configure', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('115', '15', 'backup_restore', NULL, NULL, 'back_up', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('116', '15', 'import', NULL, NULL, 'sql_import', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('117', '15', 'restore', NULL, NULL, 'restore', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('118', '16', 'add_quotation', NULL, NULL, 'add_quotation', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('119', '16', 'manage_quotation', NULL, NULL, 'manage_quotation', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('120', '16', 'add_to_invoice', NULL, NULL, 'add_to_invoice', '1');


#
# TABLE STRUCTURE FOR: supplier_information
#

DROP TABLE IF EXISTS `supplier_information`;

CREATE TABLE `supplier_information` (
  `supplier_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `supplier_code` varchar(255) NOT NULL DEFAULT '',
  `supplier_name` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `address2` text NOT NULL,
  `buiding_no` varchar(255) NOT NULL,
  `additional_number` varchar(255) NOT NULL,
  `vat_number` varchar(255) NOT NULL,
  `other_seller_id` varchar(255) NOT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `emailnumber` varchar(200) DEFAULT NULL,
  `email_address` varchar(200) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `fax` varchar(100) DEFAULT NULL,
  `city` text,
  `state` text,
  `zip` varchar(50) DEFAULT NULL,
  `country` varchar(250) DEFAULT NULL,
  `credit_limit` float NOT NULL,
  `credit_days` int(11) NOT NULL,
  `po_box` varchar(255) NOT NULL DEFAULT '',
  `website_link` varchar(255) NOT NULL DEFAULT '',
  `details` varchar(255) DEFAULT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`supplier_id`),
  KEY `supplier_id` (`supplier_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO `supplier_information` (`supplier_id`, `supplier_code`, `supplier_name`, `address`, `address2`, `buiding_no`, `additional_number`, `vat_number`, `other_seller_id`, `mobile`, `emailnumber`, `email_address`, `contact`, `phone`, `fax`, `city`, `state`, `zip`, `country`, `credit_limit`, `credit_days`, `po_box`, `website_link`, `details`, `status`) VALUES ('1', '', 'Raies Cloth Shop', 'fdg', 'TESTING..', '35435', '46343645', '4354', '345', '4646345546', 'mohdraies.websutility@gmail.com', 'mohdraies.websutility@gmail.com', '4365454354534', '4646345546', '534', 'gurgaon', 'delhi', '4556', 'TEST', '19089', '465', '', '', 'testing..', '1');
INSERT INTO `supplier_information` (`supplier_id`, `supplier_code`, `supplier_name`, `address`, `address2`, `buiding_no`, `additional_number`, `vat_number`, `other_seller_id`, `mobile`, `emailnumber`, `email_address`, `contact`, `phone`, `fax`, `city`, `state`, `zip`, `country`, `credit_limit`, `credit_days`, `po_box`, `website_link`, `details`, `status`) VALUES ('2', 'ERP-S10002', 'Aliyu Abubakar ', '', '', '', '', '', '', '', '', '', '', '00', '', '', 'FCT, Abuja', '', 'Nigeria', '0', '0', '', '', NULL, '1');
INSERT INTO `supplier_information` (`supplier_id`, `supplier_code`, `supplier_name`, `address`, `address2`, `buiding_no`, `additional_number`, `vat_number`, `other_seller_id`, `mobile`, `emailnumber`, `email_address`, `contact`, `phone`, `fax`, `city`, `state`, `zip`, `country`, `credit_limit`, `credit_days`, `po_box`, `website_link`, `details`, `status`) VALUES ('3', 'ERP-S10003', 'Aliyu Abubakar ', '', '', '', '', '', '', '', '', '', '', '00', '', '', 'FCT, Abuja', '', 'Nigeria', '0', '0', '', '', NULL, '1');
INSERT INTO `supplier_information` (`supplier_id`, `supplier_code`, `supplier_name`, `address`, `address2`, `buiding_no`, `additional_number`, `vat_number`, `other_seller_id`, `mobile`, `emailnumber`, `email_address`, `contact`, `phone`, `fax`, `city`, `state`, `zip`, `country`, `credit_limit`, `credit_days`, `po_box`, `website_link`, `details`, `status`) VALUES ('4', 'ERP-S10004', 'Aliyu Abubakar ', '', '', '', '', '', '', '', '', '', '', '00', '', '', 'FCT, Abuja', '', 'Nigeria', '0', '0', '', '', NULL, '1');
INSERT INTO `supplier_information` (`supplier_id`, `supplier_code`, `supplier_name`, `address`, `address2`, `buiding_no`, `additional_number`, `vat_number`, `other_seller_id`, `mobile`, `emailnumber`, `email_address`, `contact`, `phone`, `fax`, `city`, `state`, `zip`, `country`, `credit_limit`, `credit_days`, `po_box`, `website_link`, `details`, `status`) VALUES ('5', 'ERP-S10005', 'll', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '', '', NULL, '1');


#
# TABLE STRUCTURE FOR: supplier_product
#

DROP TABLE IF EXISTS `supplier_product`;

CREATE TABLE `supplier_product` (
  `supplier_pr_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` varchar(30) CHARACTER SET utf8 NOT NULL,
  `products_model` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `supplier_id` bigint(20) NOT NULL,
  `supplier_price` float DEFAULT NULL,
  PRIMARY KEY (`supplier_pr_id`),
  KEY `product_id` (`product_id`),
  KEY `supplier_id` (`supplier_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `supplier_product` (`supplier_pr_id`, `product_id`, `products_model`, `supplier_id`, `supplier_price`) VALUES ('5', 'test', '434', '1', '150');
INSERT INTO `supplier_product` (`supplier_pr_id`, `product_id`, `products_model`, `supplier_id`, `supplier_price`) VALUES ('6', 'product', '4342', '1', '564');
INSERT INTO `supplier_product` (`supplier_pr_id`, `product_id`, `products_model`, `supplier_id`, `supplier_price`) VALUES ('9', 'test', '434', '1', '200');
INSERT INTO `supplier_product` (`supplier_pr_id`, `product_id`, `products_model`, `supplier_id`, `supplier_price`) VALUES ('10', '65222009', 'MKLB1001', '1', '1000');
INSERT INTO `supplier_product` (`supplier_pr_id`, `product_id`, `products_model`, `supplier_id`, `supplier_price`) VALUES ('12', '10481603', 'NAT', '1', '100');
INSERT INTO `supplier_product` (`supplier_pr_id`, `product_id`, `products_model`, `supplier_id`, `supplier_price`) VALUES ('13', '19838372', 'MKLB1002', '1', '1000');


#
# TABLE STRUCTURE FOR: synchronizer_setting
#

DROP TABLE IF EXISTS `synchronizer_setting`;

CREATE TABLE `synchronizer_setting` (
  `id` int(11) NOT NULL,
  `hostname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `port` varchar(10) NOT NULL,
  `debug` varchar(10) NOT NULL,
  `project_root` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: tax_collection
#

DROP TABLE IF EXISTS `tax_collection`;

CREATE TABLE `tax_collection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `customer_id` varchar(30) NOT NULL,
  `relation_id` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`) VALUES ('1', '2021-11-05', '1', '4833483761');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`) VALUES ('3', '2021-11-08', '2', '9174511958');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`) VALUES ('4', '2021-11-09', '1', '5683799451');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`) VALUES ('5', '2021-11-09', '1', '5599835478');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`) VALUES ('6', '2021-11-09', '1', '6682197427');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`) VALUES ('7', '2021-11-09', '1', '6874298946');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`) VALUES ('8', '2021-11-10', '2', '2811646838');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`) VALUES ('9', '2021-11-10', '2', '7817516462');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`) VALUES ('10', '2021-11-10', '2', '8741351142');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`) VALUES ('11', '2021-11-10', '2', '8896795522');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`) VALUES ('12', '2021-11-10', '2', '7371186723');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`) VALUES ('15', '2021-11-10', '2', '1133922141');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`) VALUES ('16', '2021-11-20', '2', '9517155219');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`) VALUES ('17', '2021-12-06', '2', '5867751589');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`) VALUES ('18', '2021-12-06', '1', '3347975875');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`) VALUES ('19', '2021-12-06', '1', '3975981755');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`) VALUES ('20', '2021-12-07', '2', '7573274576');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`) VALUES ('21', '2021-12-07', '1', '2225786899');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`) VALUES ('22', '2021-12-07', '1', '3393793746');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`) VALUES ('23', '2021-12-09', '1', '4812168955');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`) VALUES ('24', '2021-12-09', '1', '1685329834');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`) VALUES ('25', '2021-12-14', '2', '8429942367');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`) VALUES ('26', '2021-12-14', '1', '5613135125');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`) VALUES ('27', '2021-12-24', '1', '6283228144');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`) VALUES ('28', '2021-12-27', '1', '3186411324');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`) VALUES ('29', '2021-12-27', '1', '4189318841');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`) VALUES ('30', '2021-12-27', '1', '7785515368');


#
# TABLE STRUCTURE FOR: tax_settings
#

DROP TABLE IF EXISTS `tax_settings`;

CREATE TABLE `tax_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `default_value` float NOT NULL,
  `tax_name` varchar(250) NOT NULL,
  `nt` int(11) NOT NULL,
  `reg_no` varchar(100) NOT NULL,
  `is_show` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO `tax_settings` (`id`, `default_value`, `tax_name`, `nt`, `reg_no`, `is_show`) VALUES ('6', '15', 'VAT', '1', 'VTOOO2222', '1');


#
# TABLE STRUCTURE FOR: units
#

DROP TABLE IF EXISTS `units`;

CREATE TABLE `units` (
  `unit_id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `parent_status` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`unit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

INSERT INTO `units` (`unit_id`, `unit_name`, `parent_status`, `status`) VALUES ('1', 'Kg2', '0', '1');
INSERT INTO `units` (`unit_id`, `unit_name`, `parent_status`, `status`) VALUES ('2', 'Bag', '0', '1');
INSERT INTO `units` (`unit_id`, `unit_name`, `parent_status`, `status`) VALUES ('3', 'testingee', '1', '1');
INSERT INTO `units` (`unit_id`, `unit_name`, `parent_status`, `status`) VALUES ('4', 'testing1', '1', '1');
INSERT INTO `units` (`unit_id`, `unit_name`, `parent_status`, `status`) VALUES ('5', 'testing1rr', '0', '0');
INSERT INTO `units` (`unit_id`, `unit_name`, `parent_status`, `status`) VALUES ('6', 'ewer', '0', '1');
INSERT INTO `units` (`unit_id`, `unit_name`, `parent_status`, `status`) VALUES ('7', 'testing', '0', '0');
INSERT INTO `units` (`unit_id`, `unit_name`, `parent_status`, `status`) VALUES ('8', 'CA', '0', '1');
INSERT INTO `units` (`unit_id`, `unit_name`, `parent_status`, `status`) VALUES ('9', 'Test Unit', '1', '0');


#
# TABLE STRUCTURE FOR: user_login
#

DROP TABLE IF EXISTS `user_login`;

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(15) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_type` int(2) DEFAULT NULL,
  `security_code` varchar(255) DEFAULT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO `user_login` (`id`, `user_id`, `username`, `password`, `user_type`, `security_code`, `status`) VALUES ('1', '2', 'admin@example.com', '41d99b369894eb1ec3f461135132d8bb', '1', NULL, '1');
INSERT INTO `user_login` (`id`, `user_id`, `username`, `password`, `user_type`, `security_code`, `status`) VALUES ('2', '1', 'mohit@websutility.com', '102e8f9fded2d939ff7c238d702f812b', '1', '220421090408', '1');
INSERT INTO `user_login` (`id`, `user_id`, `username`, `password`, `user_type`, `security_code`, `status`) VALUES ('3', '295029', 'tamer@ttt.com', '41d99b369894eb1ec3f461135132d8bb', '0', NULL, '1');
INSERT INTO `user_login` (`id`, `user_id`, `username`, `password`, `user_type`, `security_code`, `status`) VALUES ('5', '95121', 'toqeer.arif786@gmail.com', '0e2730d1ae77257f7637e8f68a96e800', '0', NULL, '1');


#
# TABLE STRUCTURE FOR: users
#

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(15) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `company_name` varchar(250) DEFAULT NULL,
  `address` text,
  `phone` varchar(20) DEFAULT NULL,
  `gender` int(2) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `logo` varchar(250) DEFAULT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `user_id`, `last_name`, `first_name`, `company_name`, `address`, `phone`, `gender`, `date_of_birth`, `logo`, `status`) VALUES ('1', '2', 'User', 'Admin', NULL, NULL, NULL, NULL, NULL, 'http://localhost/saleserp_v9.8/assets/dist/img/profile_picture/profile.jpg', '1');
INSERT INTO `users` (`id`, `user_id`, `last_name`, `first_name`, `company_name`, `address`, `phone`, `gender`, `date_of_birth`, `logo`, `status`) VALUES ('2', '1', 'User', 'Admin', NULL, NULL, NULL, NULL, NULL, 'assets/dist/img/profile_picture/profile.jpg', '1');
INSERT INTO `users` (`id`, `user_id`, `last_name`, `first_name`, `company_name`, `address`, `phone`, `gender`, `date_of_birth`, `logo`, `status`) VALUES ('3', '295029', 'tamer', 'tamer', NULL, NULL, NULL, NULL, NULL, '', '1');
INSERT INTO `users` (`id`, `user_id`, `last_name`, `first_name`, `company_name`, `address`, `phone`, `gender`, `date_of_birth`, `logo`, `status`) VALUES ('5', '95121', 'Arif', 'Toqeer', NULL, NULL, NULL, NULL, NULL, '', '1');


#
# TABLE STRUCTURE FOR: web_setting
#

DROP TABLE IF EXISTS `web_setting`;

CREATE TABLE `web_setting` (
  `setting_id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) DEFAULT NULL,
  `invoice_logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `currency` varchar(10) DEFAULT NULL,
  `timezone` varchar(150) NOT NULL,
  `currency_position` varchar(10) DEFAULT NULL,
  `footer_text` varchar(255) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `rtr` varchar(255) DEFAULT NULL,
  `captcha` int(11) DEFAULT '1' COMMENT '0=active,1=inactive',
  `site_key` varchar(250) DEFAULT NULL,
  `secret_key` varchar(250) DEFAULT NULL,
  `discount_type` int(11) DEFAULT '1',
  PRIMARY KEY (`setting_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `web_setting` (`setting_id`, `logo`, `invoice_logo`, `favicon`, `currency`, `timezone`, `currency_position`, `footer_text`, `language`, `rtr`, `captcha`, `site_key`, `secret_key`, `discount_type`) VALUES ('1', 'assets/img/icons/2020-09-28/93feea3d8b9f1647dbd7be1eeda38ce7.png', 'assets/img/icons/2021-11-09/b7884f72b59acbc141c4720316cf0b72.png', 'assets/img/icons/2021-11-09/6d52485011c16b3f7afbd2c4a295b443.png', 'SAR', 'Asia/Dhaka', '0', 'CopyrightÂ© 2020 Websutility. All rights reserved.', 'english', '0', '1', '6LdiKhsUAAAAAMV4jQRmNYdZy2kXEuFe1HrdP5tt', '6LdiKhsUAAAAAMV4jQRmNYdZy2kXEuFe1HrdP5tt', '1');


