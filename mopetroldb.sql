-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 16, 2021 at 03:06 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fuelstationdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` int(11) NOT NULL,
  `branch_name` varchar(50) NOT NULL,
  `branch_address` varchar(100) NOT NULL,
  `branch_contact` varchar(50) DEFAULT NULL,
  `skin` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `branch_name`, `branch_address`, `branch_contact`, `skin`) VALUES
(1, 'Administration Center', 'Kampala,Uganda', '0788042999', 'red'),
(5, 'General User', 'Kampala', '', 'blue'),
(6, 'Supervisor', 'Gulu', '0775210211', 'red');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(30) NOT NULL,
  `cat_code` varchar(255) NOT NULL,
  `unitsperpack` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_code`, `unitsperpack`) VALUES
(13, 'Adrenaline Inj. 1 mg ', 'ITM0001', 1),
(14, 'Airway Guedel size 4', 'ITM0002', 1),
(15, 'Airways Guedel Size 2', 'ITM0003', 1),
(16, 'Airways Guedel Size 3', 'ITM0004', 1),
(17, 'Ambu Bag Adult', 'ITM0005', 1),
(18, 'Ambu bag pediatric', 'ITM0006', 1),
(19, 'Apron Plastified heavy duty\r\n', 'ITM0007', 1);

-- --------------------------------------------------------

--
-- Table structure for table `currentprice`
--

CREATE TABLE `currentprice` (
  `currentprice_id` int(25) NOT NULL,
  `prod_id` int(255) NOT NULL,
  `currentprice` decimal(10,5) DEFAULT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `currentprice`
--

INSERT INTO `currentprice` (`currentprice_id`, `prod_id`, `currentprice`, `date`) VALUES
(2, 1, '4000.00000', '2021-01-30 23:18:32'),
(4, 2, '3400.00000', '2021-02-02 21:07:19');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `cust_first` varchar(50) NOT NULL,
  `cust_last` varchar(30) NOT NULL,
  `cust_address` varchar(100) NOT NULL,
  `cust_contact` varchar(30) NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  `cust_pic` varchar(300) NOT NULL,
  `bday` date NOT NULL,
  `nickname` varchar(30) NOT NULL,
  `house_status` varchar(30) NOT NULL,
  `years` varchar(20) NOT NULL,
  `rent` varchar(10) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `emp_no` varchar(30) NOT NULL,
  `emp_address` varchar(100) NOT NULL,
  `emp_year` varchar(10) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `salary` varchar(30) NOT NULL,
  `spouse` varchar(30) NOT NULL,
  `spouse_no` varchar(30) NOT NULL,
  `spouse_emp` varchar(50) NOT NULL,
  `spouse_details` varchar(100) NOT NULL,
  `spouse_income` decimal(10,2) NOT NULL,
  `comaker` varchar(30) NOT NULL,
  `comaker_details` varchar(100) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `credit_status` varchar(10) NOT NULL,
  `ci_remarks` varchar(1000) NOT NULL,
  `ci_name` varchar(50) NOT NULL,
  `ci_date` date NOT NULL,
  `payslip` int(11) NOT NULL,
  `valid_id` int(11) NOT NULL,
  `cert` int(11) NOT NULL,
  `cedula` int(11) NOT NULL,
  `income` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_first`, `cust_last`, `cust_address`, `cust_contact`, `balance`, `cust_pic`, `bday`, `nickname`, `house_status`, `years`, `rent`, `emp_name`, `emp_no`, `emp_address`, `emp_year`, `occupation`, `salary`, `spouse`, `spouse_no`, `spouse_emp`, `spouse_details`, `spouse_income`, `comaker`, `comaker_details`, `branch_id`, `credit_status`, `ci_remarks`, `ci_name`, `ci_date`, `payslip`, `valid_id`, `cert`, `cedula`, `income`) VALUES
(3, 'Kirabo', 'South', 'Kanyanya', '0788123440', '0.00', 'default.gif', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0.00', '', '', 5, '', '', '', '0000-00-00', 0, 0, 0, 0, 0),
(5, '', 'Central', 'kyengera', '0772412258', '0.00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0.00', '', '', 5, '', '', '', '0000-00-00', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `dailydipp`
--

CREATE TABLE `dailydipp` (
  `dailydipp_id` int(255) NOT NULL,
  `date` datetime NOT NULL,
  `openinv` float(10,5) NOT NULL,
  `dippmorn` float(10,5) NOT NULL,
  `closeinv` float(10,5) NOT NULL,
  `dippenv` float(10,5) NOT NULL,
  `pumpid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dailydipp`
--

INSERT INTO `dailydipp` (`dailydipp_id`, `date`, `openinv`, `dippmorn`, `closeinv`, `dippenv`, `pumpid`) VALUES
(1, '2021-02-01 00:08:40', 1200.56006, 1200.56006, 1000.56000, 1000.56000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dailysales`
--

CREATE TABLE `dailysales` (
  `dailysales_id` int(25) NOT NULL,
  `shift_id` int(25) NOT NULL,
  `nosal_id` int(25) NOT NULL,
  `pump_id` int(25) DEFAULT NULL,
  `prod_id` int(25) DEFAULT NULL,
  `openmeter` float(30,2) NOT NULL,
  `closemeter` float(30,2) NOT NULL,
  `currentprice_id` int(255) DEFAULT NULL,
  `rtt` float(10,2) DEFAULT NULL,
  `litressold` decimal(10,2) DEFAULT NULL,
  `unitprice` decimal(10,2) DEFAULT NULL,
  `total` decimal(35,2) DEFAULT NULL,
  `pricechange` varchar(255) DEFAULT NULL,
  `pcopenmeter` decimal(10,2) DEFAULT NULL,
  `pcclosemeter` decimal(10,2) DEFAULT NULL,
  `pcrtt` varchar(255) DEFAULT NULL,
  `pclitressold` decimal(10,2) DEFAULT NULL,
  `pcunitprice` decimal(10,2) DEFAULT NULL,
  `pctotalpayment` decimal(35,2) DEFAULT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dailysales`
--

INSERT INTO `dailysales` (`dailysales_id`, `shift_id`, `nosal_id`, `pump_id`, `prod_id`, `openmeter`, `closemeter`, `currentprice_id`, `rtt`, `litressold`, `unitprice`, `total`, `pricechange`, `pcopenmeter`, `pcclosemeter`, `pcrtt`, `pclitressold`, `pcunitprice`, `pctotalpayment`, `date`) VALUES
(58, 1, 8, NULL, 2, 187806.77, 187834.95, NULL, 0.00, '28.19', '3830.00', '107983.02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-01 00:00:00'),
(59, 2, 8, NULL, 2, 187834.95, 187878.62, NULL, 0.00, '43.67', '3830.00', '167244.61', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-01 00:00:00'),
(60, 1, 9, NULL, 2, 523382.34, 523588.25, NULL, 0.00, '205.91', '3830.00', '788619.98', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-01 00:00:00'),
(61, 2, 9, NULL, 2, 523588.25, 523731.78, NULL, 0.00, '143.53', '3830.00', '549719.90', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-01 00:00:00'),
(62, 1, 11, NULL, 2, 534133.06, 534181.06, NULL, 0.00, '48.03', '3830.00', '183947.24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-01 00:00:00'),
(63, 2, 11, NULL, 2, 534181.06, 534284.75, NULL, 0.00, '103.70', '3830.00', '397163.34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-01 00:00:00'),
(64, 1, 12, NULL, 2, 579440.50, 579727.44, NULL, 0.00, '286.95', '3830.00', '1099018.50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-01 00:00:00'),
(65, 2, 12, NULL, 2, 579727.44, 579780.38, NULL, 0.00, '52.94', '3810.00', '201701.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-01 00:00:00'),
(66, 1, 8, NULL, 2, 187883.62, 187895.16, NULL, 0.00, '11.53', '3800.00', '62852.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-02 00:00:00'),
(67, 1, 8, NULL, 2, 187895.16, 187906.58, NULL, 0.00, '11.42', '3780.00', '43167.60', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-02 00:00:00'),
(68, 1, 8, NULL, 2, 187906.58, 187919.30, NULL, 0.00, '12.71', '3780.00', '48043.80', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-02 00:00:00'),
(69, 1, 8, NULL, 2, 187919.30, 187919.30, NULL, 0.00, '0.00', '3780.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-02 00:00:00'),
(70, 1, 8, NULL, 2, 187919.30, 188439.95, NULL, 0.00, '520.65', '3780.00', '1968057.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-03 00:00:00'),
(71, 1, 8, NULL, 2, 188439.95, 188439.95, NULL, 0.00, '0.00', '3700.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-01 00:00:00'),
(72, 1, 8, NULL, 2, 188439.95, 188459.95, NULL, 0.00, '20.00', '3700.00', '74000.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-01 00:00:00'),
(73, 1, 8, NULL, 2, 188459.95, 188479.95, NULL, 0.00, '20.00', '3780.00', '75600.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-01 00:00:00'),
(74, 1, 8, NULL, 2, 188469.95, 188469.95, NULL, 0.00, '0.00', '3800.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-04 00:00:00'),
(75, 1, 8, NULL, 2, 188469.95, 188470.95, NULL, 0.00, '1.00', '3790.00', '3790.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-05 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `history_log`
--

CREATE TABLE `history_log` (
  `log_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_log`
--

INSERT INTO `history_log` (`log_id`, `user_id`, `action`, `date`) VALUES
(10, 7, 'has logged in the system at ', '2020-04-30 12:58:11'),
(11, 7, 'has logged in the system at ', '2020-04-30 13:45:08'),
(12, 7, 'added 11000 of B001/2020/001', '2020-04-30 13:57:14'),
(13, 7, 'has logged in the system at ', '2020-05-01 06:17:57'),
(14, 12, 'has logged out the system at ', '2020-05-01 12:19:24'),
(15, 7, 'has logged in the system at ', '2020-05-01 12:19:39'),
(16, 7, 'has logged in the system at ', '2020-06-13 13:56:30'),
(17, 7, 'has logged out the system at ', '2020-06-13 14:36:09'),
(18, 7, 'has logged in the system at ', '2020-06-13 15:00:28'),
(19, 7, 'has logged in the system at ', '2020-06-22 17:47:23'),
(20, 7, 'has logged in the system at ', '2020-06-23 18:59:02'),
(21, 8, 'has logged in the system at ', '2020-06-25 23:11:42'),
(22, 8, 'has logged out the system at ', '2020-06-25 23:11:47'),
(23, 8, 'has logged in the system at ', '2020-06-25 23:30:02'),
(24, 8, 'has logged in the system at ', '2020-06-25 23:30:19'),
(25, 8, 'has logged in the system at ', '2020-06-26 02:18:39'),
(26, 8, 'has logged in the system at ', '2020-06-26 02:20:15'),
(27, 8, 'has logged out the system at ', '2020-06-26 02:21:15'),
(28, 8, 'has logged in the system at ', '2020-06-26 02:21:25'),
(29, 8, 'has logged out the system at ', '2020-06-26 02:21:31'),
(30, 8, 'has logged in the system at ', '2020-06-26 02:21:43'),
(31, 8, 'has logged out the system at ', '2020-06-26 03:19:19'),
(32, 8, 'has logged in the system at ', '2020-06-26 03:19:34'),
(33, 8, 'has logged out the system at ', '2020-06-27 12:35:21'),
(34, 8, 'has logged in the system at ', '2020-06-27 12:35:54'),
(35, 7, 'has logged in the system at ', '2020-06-28 17:49:10'),
(36, 8, 'has logged in the system at ', '2020-06-28 17:52:43'),
(37, 7, 'has logged in the system at ', '2020-06-28 18:17:20'),
(38, 7, 'added 100 of BHH93845', '2020-06-28 20:17:44'),
(39, 7, 'has logged out the system at ', '2020-06-28 20:39:56'),
(40, 7, 'has logged in the system at ', '2020-06-28 20:42:06'),
(41, 8, 'has logged out the system at ', '2020-06-28 20:46:50'),
(42, 0, 'has logged out the system at ', '2020-06-28 20:46:59'),
(43, 7, 'has logged in the system at ', '2020-06-29 04:12:12'),
(44, 7, 'has logged in the system at ', '2020-06-30 01:10:26'),
(45, 7, 'has logged in the system at ', '2020-06-30 04:28:15'),
(46, 7, 'has logged in the system at ', '2020-07-01 15:31:33'),
(47, 7, 'has logged in the system at ', '2020-07-01 15:34:39'),
(48, 7, 'has logged out the system at ', '2020-07-01 16:23:07'),
(49, 7, 'has logged in the system at ', '2020-07-01 16:26:25'),
(50, 7, 'has logged in the system at ', '2020-07-02 23:59:19'),
(51, 7, 'has logged out the system at ', '2020-07-03 02:13:33'),
(52, 7, 'has logged in the system at ', '2020-07-04 14:31:35'),
(53, 7, 'has logged out the system at ', '2020-07-05 15:28:40'),
(54, 7, 'has logged in the system at ', '2020-07-05 15:32:47'),
(55, 7, 'has logged in the system at ', '2020-07-06 03:12:10'),
(56, 1, 'has logged out the system at ', '2020-07-07 17:43:23'),
(57, 7, 'has logged in the system at ', '2020-07-07 17:51:57'),
(58, 7, 'has logged out the system at ', '2020-07-07 17:55:21'),
(59, 7, 'has logged in the system at ', '2020-07-14 19:44:55'),
(60, 7, 'has logged out the system at ', '2020-07-14 19:46:30'),
(61, 7, 'has logged in the system at ', '2020-07-22 00:16:24'),
(62, 7, 'has logged in the system at ', '2020-07-23 06:17:04'),
(63, 1, 'has logged out the system at ', '2020-07-24 19:43:18'),
(64, 7, 'has logged in the system at ', '2020-07-24 19:43:33'),
(65, 7, 'has logged out the system at ', '2020-07-24 21:23:06'),
(66, 7, 'has logged in the system at ', '2020-07-24 21:24:08'),
(67, 7, 'has logged out the system at ', '2020-07-27 02:36:41'),
(68, 7, 'has logged in the system at ', '2020-07-27 02:36:56'),
(69, 7, 'has logged in the system at ', '2020-07-28 01:11:51'),
(70, 7, 'has logged in the system at ', '2020-08-02 04:30:03'),
(71, 7, 'has logged in the system at ', '2020-08-02 18:06:10'),
(72, 7, 'has logged in the system at ', '2020-08-06 05:20:43'),
(73, 7, 'has logged in the system at ', '2020-08-09 01:27:29'),
(74, 7, 'has logged in the system at ', '2020-08-10 04:34:04'),
(75, 7, 'has logged in the system at ', '2020-08-27 14:43:21'),
(76, 7, 'has logged in the system at ', '2020-09-08 15:34:02'),
(77, 7, 'has logged in the system at ', '2020-10-08 14:16:26'),
(78, 7, 'has logged in the system at ', '2020-12-03 17:05:02'),
(79, 1, 'has logged out the system at ', '2020-12-03 20:55:13'),
(80, 7, 'has logged in the system at ', '2020-12-03 20:55:28'),
(81, 7, 'has logged out the system at ', '2021-01-04 05:40:13'),
(82, 7, 'has logged in the system at ', '2021-01-04 05:40:23'),
(83, 7, 'has logged out the system at ', '2021-01-04 06:20:06'),
(84, 7, 'has logged in the system at ', '2021-01-04 06:20:17'),
(85, 7, 'has logged in the system at ', '2021-01-27 17:20:52'),
(86, 7, 'has logged in the system at ', '2021-01-30 22:45:46'),
(87, 1, 'has logged out the system at ', '2021-02-04 17:08:46'),
(88, 7, 'has logged in the system at ', '2021-02-04 17:14:36'),
(89, 7, 'has logged in the system at ', '2021-02-11 02:51:24'),
(90, 7, 'has logged in the system at ', '2021-02-12 03:21:24'),
(91, 7, 'has logged in the system at ', '2021-02-12 16:36:53'),
(92, 7, 'has logged in the system at ', '2021-02-12 16:55:54'),
(93, 7, 'has logged in the system at ', '2021-02-12 17:04:52'),
(94, 7, 'has logged in the system at ', '2021-02-14 16:32:12'),
(95, 7, 'has logged in the system at ', '2021-04-06 11:14:48'),
(96, 7, 'has logged in the system at ', '2021-04-06 11:16:24'),
(97, 7, 'has logged in the system at ', '2021-04-07 10:16:53'),
(98, 7, 'has logged in the system at ', '2021-04-07 16:10:28'),
(99, 8, 'added 100 of CD001', '2021-04-08 19:46:36'),
(100, 8, 'added 100 of CD001', '2021-04-08 19:47:21'),
(101, 8, 'added 100 of CD001', '2021-04-08 19:48:18'),
(102, 8, 'added 100 of CD001', '2021-04-08 19:48:27'),
(103, 8, 'added 100 of CD001', '2021-04-08 19:49:56'),
(104, 8, 'added 100 of CD001', '2021-04-08 19:50:50'),
(105, 8, 'added 100 of CD001', '2021-04-08 19:51:35'),
(106, 8, 'added 100 of CD001', '2021-04-08 19:54:17'),
(107, 8, 'added 100 of CD001', '2021-04-08 19:54:35'),
(108, 8, 'added 100 of CD001', '2021-04-08 20:05:21'),
(109, 8, 'Stock taking updated  of CD001', '2021-04-08 20:36:58'),
(110, 8, 'Stock taking updated 42000 of CD001', '2021-04-08 20:37:51'),
(111, 8, 'Stock taking updated 4300 of CD001', '2021-04-08 20:42:44'),
(112, 8, 'Stock taking updated 5000 of CD001', '2021-04-08 20:44:50'),
(113, 7, 'has logged in the system at ', '2021-04-09 21:43:39'),
(114, 7, 'has logged out the system at ', '2021-04-10 02:07:06'),
(115, 7, 'has logged in the system at ', '2021-04-10 12:33:24'),
(116, 7, 'added 100 of CD001', '2021-04-10 12:39:03'),
(117, 7, 'Stock taking updated 600 of CD001', '2021-04-10 12:39:31'),
(118, 1, 'has logged out the system at ', '2021-04-10 13:27:57'),
(119, 7, 'has logged in the system at ', '2021-04-10 14:06:49'),
(120, 7, 'has logged in the system at ', '2021-04-15 01:30:57'),
(121, 7, 'has logged in the system at ', '2021-04-15 01:39:53'),
(122, 7, 'added 10000 of TK01', '2021-04-15 01:40:17'),
(123, 7, 'added 1000 of OC01', '2021-04-15 01:40:56'),
(124, 7, 'added 11000 of EoT001', '2021-04-15 01:42:05'),
(125, 7, 'added 100 of CD001', '2021-04-15 01:47:57'),
(126, 7, 'added 100 of CD001', '2021-04-15 01:49:15'),
(127, 7, 'added 100 of EoT001', '2021-04-15 01:52:29'),
(128, 1, 'added 100 of OC01', '2021-04-15 02:14:19'),
(129, 1, 'Stock taking updated 380 of CD001', '2021-04-15 02:14:55'),
(130, 1, 'added 100 of TK01', '2021-04-15 02:38:09'),
(131, 1, 'Stock taking updated 600 of CD001', '2021-04-15 02:38:31'),
(132, 1, 'added 100 of CD002', '2021-04-15 02:46:45'),
(133, 1, 'has logged out the system at ', '2021-04-15 03:02:28'),
(134, 7, 'has logged in the system at ', '2021-04-15 03:15:23');

-- --------------------------------------------------------

--
-- Table structure for table `lastclosinginvoice`
--

CREATE TABLE `lastclosinginvoice` (
  `lastclosinginvoice_id` int(25) NOT NULL,
  `stunit_id` int(25) NOT NULL,
  `closinginvoice` decimal(10,2) NOT NULL,
  `cummdiff` decimal(10,2) DEFAULT NULL,
  `lastdipp` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lastclosinginvoice`
--

INSERT INTO `lastclosinginvoice` (`lastclosinginvoice_id`, `stunit_id`, `closinginvoice`, `cummdiff`, `lastdipp`) VALUES
(15, 2, '28700.00', NULL, '28700.00'),
(16, 2, '27782.09', '37.92', '27820.00'),
(17, 2, '27741.43', '4.00', '27745.43'),
(18, 2, '27741.43', '44.00', '27785.43');

-- --------------------------------------------------------

--
-- Table structure for table `lastclosingmeter`
--

CREATE TABLE `lastclosingmeter` (
  `lastclosingmeter_id` int(25) NOT NULL,
  `nosal_id` int(25) NOT NULL,
  `closemeter` float(30,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lastclosingmeter`
--

INSERT INTO `lastclosingmeter` (`lastclosingmeter_id`, `nosal_id`, `closemeter`) VALUES
(38, 8, 187806.77),
(39, 9, 523382.34),
(40, 11, 534133.06),
(41, 12, 579440.50),
(42, 8, 187834.95),
(43, 8, 187878.62),
(44, 9, 523588.25),
(45, 9, 523731.78),
(46, 11, 534181.06),
(47, 11, 534284.75),
(48, 12, 579727.44),
(49, 12, 579785.38),
(50, 8, 187895.16),
(51, 8, 187906.58),
(52, 8, 187919.30),
(53, 8, 187919.30),
(54, 8, 188439.95),
(55, 8, 188439.95),
(56, 8, 188459.95),
(57, 8, 188469.95),
(58, 8, 188469.95),
(59, 8, 188470.95);

-- --------------------------------------------------------

--
-- Table structure for table `lastpdinitial`
--

CREATE TABLE `lastpdinitial` (
  `id` int(25) NOT NULL,
  `prod_qty` float(10,2) NOT NULL,
  `pc_id` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nosals`
--

CREATE TABLE `nosals` (
  `nosal_id` int(16) NOT NULL,
  `pumpid` int(16) NOT NULL,
  `nosalnumber` varchar(256) NOT NULL,
  `prod_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nosals`
--

INSERT INTO `nosals` (`nosal_id`, `pumpid`, `nosalnumber`, `prod_id`) VALUES
(8, 1, 'Pms 1A', 2),
(9, 1, 'Pms 1B', 2),
(11, 4, 'Pms 2A', 2),
(12, 4, 'Pms 2B', 2),
(13, 1, 'Ago 1A', 1),
(14, 1, 'Ago 1B', 1),
(15, 4, 'Ago 2A', 1),
(16, 4, 'Ago 2B', 1),
(17, 5, 'Bik A', 3);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `shift_id` int(11) NOT NULL,
  `sales_id` int(11) NOT NULL,
  `payment` varchar(100) NOT NULL,
  `payment_date` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `payment_for` date NOT NULL,
  `due` varchar(100) NOT NULL,
  `interest` decimal(10,2) DEFAULT NULL,
  `remaining` decimal(10,2) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `cust_name` varchar(250) NOT NULL,
  `rebate` decimal(10,2) DEFAULT NULL,
  `or_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `shift_id`, `sales_id`, `payment`, `payment_date`, `user_id`, `branch_id`, `payment_for`, `due`, `interest`, `remaining`, `status`, `cust_name`, `rebate`, `or_no`) VALUES
(3168, 3, 10, '29800000.00', '2020-04-30 14:03:33', 7, 5, '2020-04-30', '29800000.00', '0.00', '0.00', 'paid', '', '0.00', 1901),
(3169, 3, 11, '300000.00', '2020-05-01 12:20:09', 7, 5, '2020-05-01', '300000.00', '0.00', '0.00', 'paid', '', '0.00', 1902),
(3170, 3, 12, '48.00', '2020-06-13 14:25:22', 7, 5, '2020-06-13', '48.00', '0.00', '0.00', 'paid', '', '0.00', 1903),
(3171, 3, 13, '1.00', '2020-06-13 14:32:53', 7, 5, '2020-06-13', '1.00', '0.00', '0.00', 'paid', '', '0.00', 1904),
(3172, 3, 14, '30.00', '2020-06-22 18:50:04', 1, 5, '2020-06-22', '30.00', '0.00', '0.00', 'paid', '', '0.00', 1905),
(3173, 3, 15, '3.00', '2020-06-22 22:16:57', 1, 5, '2020-06-22', '3.00', '0.00', '0.00', 'paid', '', '0.00', 1906),
(3174, 3, 16, '300.00', '2020-06-28 18:51:15', 7, 5, '2020-06-28', '300.00', '0.00', '0.00', 'paid', '', '0.00', 1907),
(3175, 3, 17, '3.00', '2020-06-28 19:13:43', 7, 5, '2020-06-28', '3.00', '0.00', '0.00', 'paid', '', '0.00', 1908),
(3176, 3, 18, '310000.00', '2020-06-28 20:31:05', 7, 5, '2020-06-28', '310000.00', '0.00', '0.00', 'paid', '', '0.00', 1909),
(3177, 0, 19, '0.00', '2020-06-29 04:33:29', 7, 5, '2020-06-29', '0.00', '0.00', '0.00', 'paid', '', '0.00', 1910),
(3178, 0, 20, '50.00', '2020-06-30 01:13:00', 7, 5, '2020-06-30', '50.00', '0.00', '0.00', 'paid', '', '0.00', 1911),
(3179, 0, 21, '100.00', '2020-06-30 03:44:02', 7, 5, '2020-06-30', '100.00', '0.00', '0.00', 'paid', '', '0.00', 1912),
(3180, 0, 22, '45.00', '2020-06-30 03:54:53', 7, 5, '2020-06-30', '45.00', '0.00', '0.00', 'paid', '', '0.00', 1913),
(3181, 5, 27, '67.00', '2020-06-30 04:32:23', 7, 5, '2020-06-30', '67.00', '0.00', '0.00', 'paid', '', '0.00', 1910),
(3182, 3, 28, '35.00', '2020-06-30 04:36:05', 7, 5, '2020-06-30', '35.00', '0.00', '0.00', 'paid', '', '0.00', 1911),
(3183, 5, 30, '26.00', '2020-07-01 15:39:37', 7, 5, '2020-07-01', '26.00', '0.00', '0.00', 'paid', '', '0.00', 1912),
(3184, 5, 31, '50.00', '2020-07-01 16:31:16', 7, 5, '2020-07-01', '50.00', '0.00', '0.00', 'paid', '', '0.00', 1913),
(3185, 3, 32, '80.00', '2020-07-01 16:42:15', 7, 5, '2020-07-01', '80.00', '0.00', '0.00', 'paid', '', '0.00', 1914),
(3186, 5, 33, '95.00', '2020-07-01 16:55:25', 7, 5, '2020-07-01', '95.00', '0.00', '0.00', 'paid', '', '0.00', 1915),
(3187, 3, 34, '20.00', '2020-07-03 00:10:14', 7, 5, '2020-07-03', '20.00', '0.00', '0.00', 'paid', '', '0.00', 1916),
(3188, 3, 35, '10.00', '2020-07-03 01:45:48', 7, 5, '2020-07-03', '10.00', '0.00', '0.00', 'paid', '', '0.00', 1917),
(3189, 5, 36, '3.00', '2020-07-04 14:32:29', 7, 5, '2020-07-04', '3.00', '0.00', '0.00', 'paid', '', '0.00', 1918),
(3190, 5, 37, '10.00', '2020-07-07 17:53:12', 7, 5, '2020-07-07', '10.00', '0.00', '0.00', 'paid', '', '0.00', 1919),
(3191, 5, 38, '1.00', '2020-07-22 00:34:25', 7, 5, '2020-07-22', '1.00', '0.00', '0.00', 'paid', '', '0.00', 1920),
(3192, 5, 39, '0.00', '2020-07-23 15:03:21', 1, 5, '2020-07-23', '0.00', '0.00', '0.00', 'paid', '', '0.00', 1921),
(3193, 5, 40, '10.00', '2020-07-24 06:12:18', 1, 5, '2020-07-24', '10.00', '0.00', '0.00', 'paid', '', '0.00', 1922),
(3194, 5, 41, '1.00', '2020-07-24 06:18:48', 1, 5, '2020-07-24', '1.00', '0.00', '0.00', 'paid', '', '0.00', 1923),
(3195, 5, 42, '61.00', '2020-07-24 07:12:25', 1, 5, '2020-07-24', '61.00', '0.00', '0.00', 'paid', '', '0.00', 1924),
(3196, 5, 43, '220.00', '2020-07-24 07:51:07', 1, 5, '2020-07-24', '220.00', '0.00', '0.00', 'paid', '', '0.00', 1925),
(3197, 5, 44, '0.00', '2020-07-24 17:52:01', 1, 5, '2020-07-24', '0.00', '0.00', '0.00', 'paid', '', '0.00', 1926),
(3198, 3, 45, '3.00', '2020-07-24 19:38:25', 1, 5, '2020-07-24', '3.00', '0.00', '0.00', 'paid', '', '0.00', 1927),
(3199, 3, 46, '50.00', '2020-07-24 19:46:37', 7, 5, '2020-07-24', '50.00', '0.00', '0.00', 'paid', '', '0.00', 1928),
(3200, 5, 47, '50.00', '2020-07-24 19:55:48', 7, 5, '2020-07-24', '50.00', '0.00', '0.00', 'paid', '', '0.00', 1929),
(3201, 5, 48, '0.00', '2020-07-24 21:25:39', 7, 5, '2020-07-24', '0.00', '0.00', '0.00', 'paid', '', '0.00', 1930),
(3202, 5, 51, '0.00', '2020-07-24 23:59:59', 7, 5, '2020-07-24', '0.00', '0.00', '0.00', 'paid', '', '0.00', 1931),
(3203, 5, 53, '0.00', '2020-07-25 00:03:26', 7, 5, '2020-07-25', '0.00', '0.00', '0.00', 'paid', '', '0.00', 1932),
(3204, 5, 54, '0.00', '2020-07-25 00:06:19', 7, 5, '2020-07-25', '0.00', '0.00', '0.00', 'paid', '', '0.00', 1933),
(3205, 5, 56, '0.00', '2020-07-25 00:12:50', 7, 5, '2020-07-25', '0.00', '0.00', '0.00', 'paid', '', '0.00', 1934),
(3206, 5, 57, '0.00', '2020-07-25 00:13:43', 7, 5, '2020-07-25', '0.00', '0.00', '0.00', 'paid', '', '0.00', 1935),
(3207, 3, 58, '0.00', '2020-07-25 00:14:08', 7, 5, '2020-07-25', '0.00', '0.00', '0.00', 'paid', '', '0.00', 1936),
(3208, 5, 59, '55.00', '2020-07-25 00:20:58', 7, 5, '2020-07-25', '55.00', '0.00', '0.00', 'paid', '', '0.00', 1937),
(3209, 5, 60, '0.00', '2020-07-25 00:29:04', 7, 5, '2020-07-25', '0.00', '0.00', '0.00', 'paid', '', '0.00', 1938),
(3210, 3, 61, '20.00', '2020-07-25 00:37:34', 7, 5, '2020-07-25', '20.00', '0.00', '0.00', 'paid', '', '0.00', 1939),
(3211, 3, 62, '0.00', '2020-07-25 00:38:32', 7, 5, '2020-07-25', '0.00', '0.00', '0.00', 'paid', '', '0.00', 1940),
(3212, 3, 63, '20.00', '2020-07-25 00:40:03', 7, 5, '2020-07-25', '20.00', '0.00', '0.00', 'paid', '', '0.00', 1941),
(3213, 3, 64, '1.00', '2020-07-25 23:13:43', 7, 5, '2020-07-25', '1.00', '0.00', '0.00', 'paid', '', '0.00', 1942),
(3214, 5, 65, '0.00', '2020-07-25 23:14:31', 7, 5, '2020-07-25', '0.00', '0.00', '0.00', 'paid', '', '0.00', 1943),
(3215, 5, 66, '5.00', '2020-07-27 02:50:22', 7, 5, '2020-07-27', '5.00', '0.00', '0.00', 'paid', '', '0.00', 1944),
(3216, 5, 67, '5.00', '2020-07-28 02:28:26', 7, 5, '2020-07-28', '5.00', '0.00', '0.00', 'paid', '', '0.00', 1945),
(3217, 5, 68, '50.00', '2020-08-02 19:00:41', 7, 5, '2020-08-02', '50.00', '0.00', '0.00', 'paid', '', '0.00', 1946),
(3218, 3, 69, '120.00', '2020-09-09 15:49:43', 7, 5, '2020-09-09', '120.00', '0.00', '0.00', 'paid', '', '0.00', 1947),
(3219, 5, 70, '20.00', '2020-12-03 20:57:18', 7, 5, '2020-12-03', '20.00', '0.00', '0.00', 'paid', '', '0.00', 1948),
(3220, 1, 78, '2,600,000.00', '2021-04-08 11:52:14', 8, 5, '2021-04-08', '2,600,000.00', NULL, NULL, 'paid', '', NULL, 1949),
(3221, 1, 79, '440,000.00', '2021-04-08 19:15:37', 8, 5, '2021-04-08', '440,000.00', NULL, NULL, 'paid', '', NULL, 1950),
(3222, 1, 80, '400,000.00', '2021-04-08 20:04:59', 8, 5, '2021-04-08', '400,000.00', NULL, NULL, 'paid', '', NULL, 1951),
(3223, 1, 81, '400,000.00', '2021-04-09 14:57:45', 4, 5, '2021-04-09', '400,000.00', NULL, NULL, 'paid', '', NULL, 1952),
(3224, 2, 82, '1,200,000.00', '2021-04-09 15:07:17', 4, 5, '2021-04-09', '1,200,000.00', NULL, NULL, 'paid', '', NULL, 1953),
(3225, 1, 83, '400,000.00', '2021-02-01 00:00:00', 4, 5, '2021-02-01', '400,000.00', '0.00', NULL, 'Credit', '', NULL, 1901),
(3226, 1, 84, '76,000.00', '2021-03-02 00:00:00', 4, 5, '2021-03-02', '76,000.00', '0.00', NULL, 'Cash', '', NULL, 1954),
(3227, 2, 88, '400,000.00', '2021-01-01 00:00:00', 4, 5, '2021-01-01', '400,000.00', '0.00', NULL, 'Cash', 'klaus Michealson', NULL, 1955),
(3228, 1, 89, '400,000.00', '2021-01-01 00:00:00', 7, 5, '2021-01-01', '400,000.00', '0.00', NULL, 'Cash', 'Sample Customer', NULL, 1956),
(3229, 1, 90, '400,000.00', '2021-01-03 00:00:00', 1, 5, '2021-01-03', '400,000.00', '0.00', NULL, 'Credit', 'dan Peter', NULL, 1902),
(3230, 1, 91, '404,000.00', '2021-04-03 00:00:00', 7, 5, '2021-04-03', '404,000.00', NULL, NULL, 'Cash', 'klaus Michealson', NULL, 1957),
(3231, 1, 92, '400,000.00', '2021-01-05 00:00:00', 7, 5, '2021-01-05', '400,000.00', '0.00', NULL, 'Credit', 'dan Peter', NULL, 1903),
(3232, 1, 93, '40,000.00', '2021-01-01 00:00:00', 7, 5, '2021-01-01', '40,000.00', '0.00', NULL, 'Credit', 'dan Peter', NULL, 1904),
(3233, 1, 94, '400,000.00', '2021-01-06 00:00:00', 7, 5, '2021-01-06', '400,000.00', '0.00', NULL, 'Cash', 'klaus Michealson', NULL, 1958),
(3234, 1, 95, '5,042,000.00', '2021-01-01 00:00:00', 1, 5, '2021-01-01', '5,042,000.00', '0.00', NULL, 'Cash', 'klaus Michealson', NULL, 1959),
(3235, 1, 96, '400,000.00', '2021-04-03 00:00:00', 1, 5, '2021-04-03', '400,000.00', NULL, NULL, 'Credit', 'klaus Michealson', NULL, 1905),
(3236, 1, 97, '5,020,000.00', '2021-01-01 00:00:00', 1, 5, '2021-01-01', '5,020,000.00', '0.00', NULL, 'Cash', 'klaus Michealson', NULL, 1960);

-- --------------------------------------------------------

--
-- Table structure for table `pdsubcat`
--

CREATE TABLE `pdsubcat` (
  `sc_id` int(26) NOT NULL,
  `sc_name` varchar(256) NOT NULL,
  `stpd_id` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pdsubcat`
--

INSERT INTO `pdsubcat` (`sc_id`, `sc_name`, `stpd_id`) VALUES
(1, 'Cream', 1),
(2, 'Crude', 3),
(3, 'Konami', 4),
(4, 'Motorcycle', 5);

-- --------------------------------------------------------

--
-- Table structure for table `procurement`
--

CREATE TABLE `procurement` (
  `user_id` int(25) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phonenumber` varchar(250) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `branch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `procurement`
--

INSERT INTO `procurement` (`user_id`, `username`, `email`, `phonenumber`, `password`, `name`, `status`, `branch_id`) VALUES
(2, 'miltonbtc', 'mdavid.trevor@gmail.com', '0772412259', 'a1Bz20ydqelm8m1wql28646d9b81e5a6d24ee5427f05372932', 'Dr.Milton Obote', 'active', 5);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `expirydate` date NOT NULL,
  `prod_desc` varchar(500) NOT NULL,
  `prod_price` decimal(10,2) NOT NULL,
  `prod_pic` varchar(300) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `prod_qty` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `reorder` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `stockin_id` int(11) NOT NULL,
  `serial` varchar(50) NOT NULL,
  `stockqty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prod_id`, `prod_name`, `expirydate`, `prod_desc`, `prod_price`, `prod_pic`, `cat_id`, `prod_qty`, `branch_id`, `reorder`, `supplier_id`, `stockin_id`, `serial`, `stockqty`) VALUES
(17, 'BC001', '2030-12-31', '', '3000.00', 'default.gif', 13, 0, 5, 6000, 8, 0, '', 0),
(18, 'BHH93845', '2020-12-31', '', '1000.00', 'default.gif', 13, 30, 5, 80, 8, 0, '', 0),
(19, 'BW2001', '2030-12-31', '', '3000.00', 'default.gif', 18, 0, 5, 0, 9, 0, '', 0),
(20, 'AM00234', '2030-12-31', '', '500.00', 'default.gif', 17, 292, 5, 0, 8, 0, '', 0),
(21, 'BMW2001456', '2030-12-31', '', '1000.00', 'default.gif', 16, 630, 5, 0, 9, 0, '', 0),
(22, 'howl', '2020-12-31', '', '6000.00', 'default.gif', 19, 3000, 5, 0, 9, 0, '', 0),
(23, 'QW10010', '2030-07-25', '', '100.00', '', 14, -90, 5, 0, 8, 8, '', 0),
(24, 'NW10010', '2020-07-31', '', '1000.00', '', 14, 0, 5, 0, 9, 9, '', 0),
(26, 'FW10F45', '2020-07-31', '', '3000.00', '', 14, 3000, 5, 0, 0, 10, '', 0),
(27, 'HW20W11', '2020-07-31', '', '200.00', '', 14, 1000, 5, 0, 9, 11, '', 0),
(28, 'JW0012', '2020-07-31', '', '1000.00', '', 15, 51, 5, 0, 8, 12, '', 0),
(29, 'GW010G10', '2027-07-08', '', '100.00', '', 14, 5, 5, 0, 8, 13, '', 0),
(30, 'HQT100T10', '2030-07-31', '', '1000.00', '', 14, 10, 5, 0, 9, 14, '', 0),
(31, 'AMW10030', '2030-10-30', '', '1000.00', '', 14, 10, 5, 0, 8, 15, '', 0),
(32, 'AMW20040', '2025-12-31', '', '1000.00', '', 17, 1100, 5, 0, 8, 15, '', 0),
(33, 'AMW10030', '2030-10-30', '', '1000.00', '', 14, 10, 5, 0, 8, 16, '', 0),
(34, 'AMW20040', '2025-12-31', '', '1000.00', '', 17, 0, 5, 0, 8, 16, '', 0),
(35, 'BW2001', '2021-03-31', '', '200.00', '', 14, 9800, 5, 0, 8, 19, '', 0),
(36, 'BW2001', '2020-07-31', '', '100.00', '', 14, 100, 5, 0, 8, 20, '', 0),
(37, 'AM00234', '2021-01-31', '', '100.00', '', 14, 10, 5, 0, 8, 21, '', 0),
(38, 'BW2001', '2028-12-31', '', '1000.00', '', 13, 50, 5, 0, 8, 22, '', 100);

-- --------------------------------------------------------

--
-- Table structure for table `productcode`
--

CREATE TABLE `productcode` (
  `pc_id` int(25) NOT NULL,
  `sc_id` int(25) NOT NULL,
  `pc_code` varchar(256) NOT NULL,
  `reorderlevel` float(10,2) NOT NULL,
  `initial` float(10,2) DEFAULT NULL,
  `prod_qty` float(10,2) NOT NULL,
  `prod_price` float(10,2) DEFAULT NULL,
  `supplier_id` int(11) NOT NULL,
  `unitprice` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productcode`
--

INSERT INTO `productcode` (`pc_id`, `sc_id`, `pc_code`, `reorderlevel`, `initial`, `prod_qty`, `prod_price`, `supplier_id`, `unitprice`) VALUES
(1, 1, 'CD001', 40.00, NULL, 600.00, 4000.00, 8, 200.00),
(2, 1, 'CD002', 20.00, NULL, 90.00, NULL, 8, 2000.00),
(3, 3, 'TK01', 100.00, NULL, 9900.00, NULL, 9, 50000.00),
(4, 2, 'OC01', 500.00, NULL, 990.00, NULL, 8, 4000.00),
(5, 4, 'EOT001', 100.00, NULL, 11100.00, NULL, 8, 40000.00);

-- --------------------------------------------------------

--
-- Table structure for table `pumps`
--

CREATE TABLE `pumps` (
  `pumpid` int(11) NOT NULL,
  `pumpnumber` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pumps`
--

INSERT INTO `pumps` (`pumpid`, `pumpnumber`) VALUES
(1, 'Pump 1'),
(4, 'Pump 2'),
(5, 'Bik');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchase_id` int(255) NOT NULL,
  `supplier_id` int(255) NOT NULL,
  `stunit_id` int(11) NOT NULL,
  `litresin` float(10,2) NOT NULL,
  `unitprice` float(10,2) NOT NULL,
  `payment` float(30,2) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`purchase_id`, `supplier_id`, `stunit_id`, `litresin`, `unitprice`, `payment`, `date`) VALUES
(4, 8, 2, 10000.00, 3800.00, 38000000.00, '2021-02-12 00:00:00'),
(5, 9, 3, 100.00, 3800.00, 380000.00, '2021-02-05 00:00:00'),
(6, 8, 2, 6000.00, 3800.00, 22800000.00, '2021-02-03 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_request`
--

CREATE TABLE `purchase_request` (
  `pr_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `request_date` date NOT NULL,
  `branch_id` int(11) NOT NULL,
  `purchase_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_request`
--

INSERT INTO `purchase_request` (`pr_id`, `prod_id`, `qty`, `request_date`, `branch_id`, `purchase_status`) VALUES
(1, 17, 10000, '2020-04-30', 5, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `requestforquotation`
--

CREATE TABLE `requestforquotation` (
  `ItemID` int(60) NOT NULL,
  `Item` varchar(250) NOT NULL,
  `ItemSpecs` varchar(250) NOT NULL,
  `dateneeded` date NOT NULL,
  `Unitofmeasure` varchar(250) NOT NULL,
  `Quantityordered` int(60) NOT NULL,
  `Amount` int(60) NOT NULL,
  `Remarks` varchar(250) NOT NULL,
  `datemade` datetime NOT NULL,
  `supplier_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requestforquotation`
--

INSERT INTO `requestforquotation` (`ItemID`, `Item`, `ItemSpecs`, `dateneeded`, `Unitofmeasure`, `Quantityordered`, `Amount`, `Remarks`, `datemade`, `supplier_id`) VALUES
(2, 'Amoxoulin', 'tablets', '2020-07-01', '', 100, 0, 'inquiring for availability', '2020-06-23 15:46:50', 8),
(3, 'Amoxoulin', '500mg injection type', '2020-07-01', '1 per pack', 50, 0, 'inquiring for availability', '2020-06-23 15:59:27', 8),
(4, 'Amoxoulin', '500mg injection type', '2020-07-01', '1 per pack', 50, 0, 'inquiring for availability', '2020-06-23 15:59:27', 8),
(5, 'sample', 'tablets', '2020-07-02', '1 per pack', 50, 0, 'inquiring for availability', '2020-06-23 16:27:17', 8),
(6, '', '500mg injection type', '2020-07-01', '1 per pack', 50, 0, 'inquiring for availability', '2020-06-26 04:16:00', 0),
(7, '', '500mg injection type', '2020-07-01', '1 per pack', 50, 0, 'inquiring for availability', '2020-06-26 04:16:31', 0),
(8, '', 'tablets', '2020-07-01', '50', 50, 0, 'inquiring for availability', '2020-06-26 04:19:11', 0),
(9, 'Sample', 'sample of sample', '2020-07-12', '1 per sample', 100, 0, 'needed urgently', '2020-06-26 17:37:23', 0),
(10, 'New Sample', 'New sample of sample', '2020-07-01', '1 per pack', 10, 0, 'new urgent ', '2020-06-26 17:42:30', 8),
(11, 'Amoxoulin', 'New sample of sample', '2020-07-11', '1 per pack', 20, 0, 'new urgent ', '2020-06-26 18:18:16', 8),
(12, 'Sample', '500mg injection type', '2020-07-01', '5 per pack', 100, 0, 'inquiring for availability', '2020-06-26 18:40:33', 8),
(13, 'Predisolin', '20 mg tablets', '2020-07-31', '10 per pack', 500, 0, 'To be delivered to Jinja hospital', '2020-06-26 18:56:30', 8);

-- --------------------------------------------------------

--
-- Table structure for table `reviewpayment`
--

CREATE TABLE `reviewpayment` (
  `reviewpayment_id` int(11) NOT NULL,
  `shift_id` int(11) NOT NULL,
  `reviewsales_id` int(11) NOT NULL,
  `payment` varchar(100) DEFAULT NULL,
  `payment_date` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `payment_for` date DEFAULT NULL,
  `due` varchar(100) DEFAULT NULL,
  `interest` decimal(10,2) DEFAULT NULL,
  `remaining` decimal(10,2) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `cust_name` varchar(250) NOT NULL,
  `rebate` decimal(10,2) DEFAULT NULL,
  `or_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviewpayment`
--

INSERT INTO `reviewpayment` (`reviewpayment_id`, `shift_id`, `reviewsales_id`, `payment`, `payment_date`, `user_id`, `branch_id`, `payment_for`, `due`, `interest`, `remaining`, `status`, `cust_name`, `rebate`, `or_no`) VALUES
(56, 1, 78, '520,000.00', '2021-04-08 11:39:26', 8, 5, '2021-04-08', '520,000.00', NULL, NULL, 'Cash', '', NULL, 10001),
(57, 1, 79, '440,000.00', '2021-04-08 19:15:34', 8, 5, '2021-04-08', '440,000.00', NULL, NULL, 'Cash', '', NULL, 10002),
(58, 1, 80, '400,000.00', '2021-04-08 20:04:55', 8, 5, '2021-04-08', '400,000.00', NULL, NULL, 'Cash', '', NULL, 10003),
(59, 1, 81, '400,000.00', '2021-04-09 14:54:33', 4, 5, '2021-04-09', '400,000.00', NULL, NULL, '', '', NULL, 10001),
(60, 2, 82, '1,200,000.00', '2021-01-01 00:00:00', 4, 5, '2021-01-01', '1,200,000.00', NULL, NULL, '', '', NULL, 10002),
(61, 1, 83, '400,000.00', '2021-02-01 00:00:00', 4, 5, '2021-02-01', '400,000.00', NULL, NULL, 'Credit', '', NULL, 10003),
(62, 1, 84, '76,000.00', '2021-03-02 00:00:00', 4, 5, '2021-03-02', '76,000.00', NULL, NULL, 'Cash', '', NULL, 10004),
(63, 2, 85, '400,000.00', '2021-01-01 00:00:00', 4, 5, '2021-01-01', '400,000.00', NULL, NULL, 'Cash', 'klaus Michealson', NULL, 10005),
(64, 1, 86, '400,000.00', '2021-01-01 00:00:00', 7, 5, '2021-01-01', '400,000.00', NULL, NULL, 'Cash', 'Sample Customer', NULL, 10006),
(65, 1, 87, '400,000.00', '2021-01-03 00:00:00', 1, 5, '2021-01-03', '400,000.00', NULL, NULL, 'Credit', 'dan Peter', NULL, 10004),
(66, 1, 88, '4,000.00', '2021-01-07 00:00:00', 7, 5, '2021-01-07', '4,000.00', NULL, NULL, 'Cash', 'klaus Michealson', NULL, 10007),
(67, 1, 89, '400,000.00', '2021-04-03 00:00:00', 7, 5, '2021-04-03', '400,000.00', NULL, NULL, 'Cash', 'klaus Michealson', NULL, 10008),
(68, 1, 90, '400,000.00', '2021-01-05 00:00:00', 7, 5, '2021-01-05', '400,000.00', NULL, NULL, 'Credit', 'dan Peter', NULL, 10005),
(69, 1, 91, '40,000.00', '2021-01-01 00:00:00', 7, 5, '2021-01-01', '40,000.00', NULL, NULL, 'Credit', 'dan Peter', NULL, 10006),
(70, 1, 92, '400,000.00', '2021-01-06 00:00:00', 7, 5, '2021-01-06', '400,000.00', NULL, NULL, 'Cash', 'klaus Michealson', NULL, 10009),
(71, 1, 93, '5,042,000.00', '2021-01-01 00:00:00', 1, 5, '2021-01-01', '5,042,000.00', NULL, NULL, 'Cash', 'klaus Michealson', NULL, 10010),
(72, 1, 94, '400,000.00', '2021-04-03 00:00:00', 1, 5, '2021-04-03', '400,000.00', NULL, NULL, 'Credit', 'klaus Michealson', NULL, 10007),
(73, 1, 95, '5,020,000.00', '2021-01-01 00:00:00', 1, 5, '2021-01-01', '5,020,000.00', NULL, NULL, 'Cash', 'klaus Michealson', NULL, 10011);

-- --------------------------------------------------------

--
-- Table structure for table `reviewproduct`
--

CREATE TABLE `reviewproduct` (
  `reviewproduct_id` int(11) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `expirydate` date NOT NULL,
  `prod_price` decimal(10,2) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `prod_qty` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `reviewstockin_id` int(11) NOT NULL,
  `remark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviewproduct`
--

INSERT INTO `reviewproduct` (`reviewproduct_id`, `prod_name`, `expirydate`, `prod_price`, `cat_id`, `prod_qty`, `branch_id`, `supplier_id`, `reviewstockin_id`, `remark`) VALUES
(14, 'BW2001', '2020-10-09', '100.00', 13, 10, 5, 8, 21, 'inquiring for availability'),
(15, 'BW2001', '2020-10-31', '1000.00', 13, 100, 5, 8, 22, 'inquiring for availability');

-- --------------------------------------------------------

--
-- Table structure for table `reviewsales`
--

CREATE TABLE `reviewsales` (
  `reviewsales_id` int(11) NOT NULL,
  `shift_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount_due` varchar(100) DEFAULT NULL,
  `discount` varchar(100) DEFAULT NULL,
  `date_added` datetime NOT NULL,
  `modeofpayment` varchar(25) NOT NULL,
  `cust_name` varchar(250) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `total` varchar(100) DEFAULT NULL,
  `reviewstatus` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviewsales`
--

INSERT INTO `reviewsales` (`reviewsales_id`, `shift_id`, `user_id`, `amount_due`, `discount`, `date_added`, `modeofpayment`, `cust_name`, `branch_id`, `total`, `reviewstatus`) VALUES
(74, 1, 8, NULL, NULL, '2021-04-08 11:28:39', 'cash', '', 5, NULL, 'approved'),
(75, 1, 8, NULL, NULL, '2021-04-08 11:29:05', 'cash', '', 5, NULL, 'approved'),
(76, 1, 8, NULL, NULL, '2021-04-08 11:30:02', 'cash', '', 5, NULL, 'approved'),
(77, 1, 8, '520,000.00', NULL, '2021-04-08 11:38:51', 'cash', '', 5, '520,000.00', 'approved'),
(78, 1, 8, '520,000.00', NULL, '2021-04-08 11:39:26', 'cash', '', 5, '520,000.00', 'approved'),
(79, 1, 8, '440,000.00', NULL, '2021-04-08 19:15:34', 'cash', '', 5, '440,000.00', 'approved'),
(80, 1, 8, '400,000.00', NULL, '2021-04-08 20:04:55', 'cash', '', 5, '400,000.00', 'approved'),
(81, 1, 4, '400,000.00', NULL, '2021-04-09 14:54:33', '', '', 5, '400,000.00', 'approved'),
(82, 2, 4, '1,200,000.00', NULL, '2021-01-01 00:00:00', 'Credit', '', 5, '1,200,000.00', 'approved'),
(83, 1, 4, '400,000.00', NULL, '2021-02-01 00:00:00', 'Credit', '', 5, '400,000.00', 'approved'),
(84, 1, 4, '76,000.00', NULL, '2021-03-02 00:00:00', 'Cash', '', 5, '76,000.00', 'approved'),
(85, 2, 4, '400,000.00', NULL, '2021-01-01 00:00:00', 'Cash', 'klaus Michealson', 5, '400,000.00', 'approved'),
(86, 1, 7, '400,000.00', NULL, '2021-01-01 00:00:00', 'Cash', 'Sample Customer', 5, '400,000.00', 'approved'),
(87, 1, 1, '400,000.00', NULL, '2021-01-03 00:00:00', 'Credit', 'dan Peter', 5, '400,000.00', 'approved'),
(88, 1, 7, '4,000.00', NULL, '2021-01-07 00:00:00', 'Cash', 'klaus Michealson', 5, '4,000.00', 'approved'),
(89, 1, 7, '400,000.00', NULL, '2021-04-03 00:00:00', 'Cash', 'klaus Michealson', 5, '400,000.00', 'approved'),
(90, 1, 7, '400,000.00', NULL, '2021-01-05 00:00:00', 'Credit', 'dan Peter', 5, '400,000.00', 'approved'),
(91, 1, 7, '40,000.00', NULL, '2021-01-01 00:00:00', 'Credit', 'dan Peter', 5, '40,000.00', 'approved'),
(92, 1, 7, '400,000.00', NULL, '2021-01-06 00:00:00', 'Cash', 'klaus Michealson', 5, '400,000.00', 'approved'),
(93, 1, 1, '5,042,000.00', NULL, '2021-01-01 00:00:00', 'Cash', 'klaus Michealson', 5, '5,042,000.00', 'approved'),
(94, 1, 1, '400,000.00', NULL, '2021-04-03 00:00:00', 'Credit', 'klaus Michealson', 5, '400,000.00', 'approved'),
(95, 1, 1, '5,020,000.00', NULL, '2021-01-01 00:00:00', 'Cash', 'klaus Michealson', 5, '5,020,000.00', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `reviewsales_details`
--

CREATE TABLE `reviewsales_details` (
  `reviewsalesdetails_id` int(11) NOT NULL,
  `reviewsales_id` int(11) NOT NULL,
  `pc_id` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `sales_qty` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `remark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reviewstockin`
--

CREATE TABLE `reviewstockin` (
  `reviewstockin_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `branch_id` int(11) NOT NULL,
  `reviewstatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviewstockin`
--

INSERT INTO `reviewstockin` (`reviewstockin_id`, `supplier_id`, `user_id`, `total`, `date`, `branch_id`, `reviewstatus`) VALUES
(5, 8, 7, 1, '2020-07-25 21:27:24', 5, 'approved'),
(6, 8, 7, 100, '2020-07-25 23:07:36', 5, 'pending'),
(7, 8, 7, 10, '2020-07-25 23:08:47', 5, 'pending'),
(8, 8, 7, 2, '2020-07-25 23:23:08', 5, 'approved'),
(9, 8, 7, 0, '2020-07-27 02:34:18', 5, 'pending'),
(10, 8, 7, 100, '2020-07-27 02:35:19', 5, 'pending'),
(11, 8, 7, 100, '2020-07-27 02:35:19', 5, 'pending'),
(12, 8, 7, 100, '2020-07-27 02:35:27', 5, 'pending'),
(13, 8, 7, 100, '2020-07-27 02:36:14', 5, 'pending'),
(14, 8, 7, 10, '2020-07-27 02:37:31', 5, 'approved'),
(15, 8, 7, 1, '2020-07-28 03:10:04', 5, 'pending'),
(16, 8, 7, 1, '2020-07-28 03:10:24', 5, 'pending'),
(17, 8, 7, 1, '2020-07-28 03:12:04', 5, 'approved'),
(18, 8, 7, 100, '2020-08-02 06:17:36', 5, 'approved'),
(19, 8, 7, 100, '2020-08-02 18:49:01', 5, 'pending'),
(20, 8, 7, 1, '2020-08-09 04:34:58', 5, 'pending'),
(21, 8, 7, 1, '2020-10-08 14:17:28', 5, 'pending'),
(22, 8, 7, 100, '2020-10-08 14:18:30', 5, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `rtt`
--

CREATE TABLE `rtt` (
  `rtt_id` int(255) NOT NULL,
  `pumpid` int(255) NOT NULL,
  `date` datetime NOT NULL,
  `rtt` float(10,5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rtt`
--

INSERT INTO `rtt` (`rtt_id`, `pumpid`, `date`, `rtt`) VALUES
(1, 1, '2021-02-01 03:33:50', 100.00000),
(2, 1, '2021-02-01 03:34:25', 200.00000),
(3, 1, '2021-02-01 03:34:36', 300.00000),
(4, 1, '2021-02-01 03:35:49', 1.00000);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` int(11) NOT NULL,
  `shift_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cash_tendered` decimal(10,2) DEFAULT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `amount_due` varchar(100) NOT NULL,
  `cash_change` decimal(10,2) DEFAULT NULL,
  `date_added` datetime NOT NULL,
  `modeofpayment` varchar(15) NOT NULL,
  `cust_name` varchar(250) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sales_id`, `shift_id`, `user_id`, `cash_tendered`, `discount`, `amount_due`, `cash_change`, `date_added`, `modeofpayment`, `cust_name`, `branch_id`, `total`) VALUES
(10, 3, 7, '33000000.00', '100000.00', '29900000.00', '3100000.00', '2020-04-30 14:03:33', 'cash', '', 5, '29800000.00'),
(11, 3, 7, '500000.00', '0.00', '300000.00', '200000.00', '2020-05-01 12:20:09', 'cash', '', 5, '300000.00'),
(12, 3, 7, '0.00', '0.00', '48.00', '0.00', '2020-06-13 14:25:22', 'cash', '', 5, '48.00'),
(13, 3, 7, '0.00', '0.00', '1.00', '0.00', '2020-06-13 14:32:53', 'cash', '', 5, '1.00'),
(14, 3, 1, '0.00', '0.00', '30.00', '0.00', '2020-06-22 18:50:04', 'cash', '', 5, '30.00'),
(15, 3, 1, '0.00', '0.00', '3.00', '0.00', '2020-06-22 22:16:57', 'cash', '', 5, '3.00'),
(16, 3, 7, '0.00', '0.00', '300.00', '0.00', '2020-06-28 18:51:15', 'cash', '', 5, '300.00'),
(17, 3, 7, '0.00', '0.00', '3.00', '0.00', '2020-06-28 19:13:43', 'cash', '', 5, '3.00'),
(18, 3, 7, '500000.00', '0.00', '310000.00', '190000.00', '2020-06-28 20:31:05', 'cash', '', 5, '310000.00'),
(19, 3, 7, '0.00', '0.00', '0.00', '0.00', '2020-06-29 04:33:29', 'cash', '', 5, '0.00'),
(20, 3, 7, '0.00', '0.00', '50.00', '0.00', '2020-06-30 01:13:00', 'cash', '', 5, '50.00'),
(21, 3, 7, '0.00', '0.00', '100.00', '0.00', '2020-06-30 03:44:02', 'cash', '', 5, '100.00'),
(22, 3, 7, '0.00', '0.00', '45.00', '0.00', '2020-06-30 03:54:53', 'cash', '', 5, '45.00'),
(23, 0, 7, '0.00', '0.00', '67.00', '0.00', '2020-06-30 04:18:26', 'cash', '', 5, '67.00'),
(24, 0, 7, '0.00', '0.00', '67.00', '0.00', '2020-06-30 04:20:41', 'cash', '', 5, '67.00'),
(25, 0, 7, '0.00', '0.00', '67.00', '0.00', '2020-06-30 04:21:53', 'cash', '', 5, '67.00'),
(26, 0, 7, '0.00', '0.00', '67.00', '0.00', '2020-06-30 04:27:40', 'cash', '', 5, '67.00'),
(27, 5, 7, NULL, NULL, '67.00', NULL, '2020-06-30 04:32:23', 'cash', '', 5, '67.00'),
(28, 3, 7, NULL, NULL, '35.00', NULL, '2020-06-30 04:36:05', 'cash', '', 5, '35.00'),
(29, 3, 7, NULL, NULL, '0.00', NULL, '2020-07-01 15:34:03', 'credit', '', 5, '26.00'),
(30, 5, 7, NULL, NULL, '26.00', NULL, '2020-07-01 15:39:37', 'cash', '', 5, '26.00'),
(31, 5, 7, NULL, NULL, '50.00', NULL, '2020-07-01 16:31:16', 'cash', '', 5, '50.00'),
(32, 3, 7, NULL, NULL, '80.00', NULL, '2020-07-01 16:42:15', 'cash', '', 5, '80.00'),
(33, 5, 7, NULL, NULL, '95.00', NULL, '2020-07-01 16:55:25', 'cash', '', 5, '95.00'),
(34, 3, 7, NULL, NULL, '20.00', NULL, '2020-07-03 00:10:14', 'cash', '', 5, '20.00'),
(35, 3, 7, NULL, NULL, '10.00', NULL, '2020-07-03 01:45:48', 'cash', '', 5, '10.00'),
(36, 5, 7, NULL, NULL, '3.00', NULL, '2020-07-04 14:32:29', 'cash', '', 5, '3.00'),
(37, 5, 7, NULL, NULL, '10.00', NULL, '2020-07-07 17:53:12', 'cash', '', 5, '10.00'),
(38, 5, 7, NULL, NULL, '1.00', NULL, '2020-07-22 00:34:25', 'cash', '', 5, '1.00'),
(39, 5, 1, NULL, NULL, '0.00', NULL, '2020-07-23 15:03:21', 'cash', '', 5, '0.00'),
(40, 5, 1, NULL, NULL, '10.00', NULL, '2020-07-24 06:12:18', 'cash', '', 5, '10.00'),
(41, 5, 1, NULL, NULL, '1.00', NULL, '2020-07-24 06:18:48', 'cash', '', 5, '1.00'),
(42, 5, 1, NULL, NULL, '61.00', NULL, '2020-07-24 07:12:25', 'cash', '', 5, '61.00'),
(43, 5, 1, NULL, NULL, '220.00', NULL, '2020-07-24 07:51:07', 'cash', '', 5, '220.00'),
(44, 5, 1, NULL, NULL, '0.00', NULL, '2020-07-24 17:52:01', 'cash', '', 5, '0.00'),
(45, 3, 1, NULL, NULL, '3.00', NULL, '2020-07-24 19:38:25', 'cash', '', 5, '3.00'),
(46, 3, 7, NULL, NULL, '50.00', NULL, '2020-07-24 19:46:37', 'cash', '', 5, '50.00'),
(47, 5, 7, NULL, NULL, '50.00', NULL, '2020-07-24 19:55:48', 'cash', '', 5, '50.00'),
(48, 5, 7, NULL, NULL, '0.00', NULL, '2020-07-24 21:25:39', 'cash', '', 5, '0.00'),
(49, 5, 7, NULL, NULL, '0.00', NULL, '2020-07-24 23:43:24', 'cash', '', 5, '0.00'),
(50, 5, 7, NULL, NULL, '0.00', NULL, '2020-07-24 23:59:04', 'cash', '', 5, '0.00'),
(51, 5, 7, NULL, NULL, '0.00', NULL, '2020-07-24 23:59:59', 'cash', '', 5, '0.00'),
(52, 5, 7, NULL, NULL, '0.00', NULL, '2020-07-25 00:02:40', 'cash', '', 5, '0.00'),
(53, 5, 7, NULL, NULL, '0.00', NULL, '2020-07-25 00:03:26', 'cash', '', 5, '0.00'),
(54, 5, 7, NULL, NULL, '0.00', NULL, '2020-07-25 00:06:19', 'cash', '', 5, '0.00'),
(55, 5, 7, NULL, NULL, '0.00', NULL, '2020-07-25 00:12:30', 'cash', '', 5, '0.00'),
(56, 5, 7, NULL, NULL, '0.00', NULL, '2020-07-25 00:12:50', 'cash', '', 5, '0.00'),
(57, 5, 7, NULL, NULL, '0.00', NULL, '2020-07-25 00:13:43', 'cash', '', 5, '0.00'),
(58, 3, 7, NULL, NULL, '0.00', NULL, '2020-07-25 00:14:08', 'cash', '', 5, '0.00'),
(59, 5, 7, NULL, NULL, '55.00', NULL, '2020-07-25 00:20:58', 'cash', '', 5, '55.00'),
(60, 5, 7, NULL, NULL, '0.00', NULL, '2020-07-25 00:29:04', 'cash', '', 5, '0.00'),
(61, 3, 7, NULL, NULL, '20.00', NULL, '2020-07-25 00:37:34', 'cash', '', 5, '20.00'),
(62, 3, 7, NULL, NULL, '0.00', NULL, '2020-07-25 00:38:32', 'cash', '', 5, '0.00'),
(63, 3, 7, NULL, NULL, '20.00', NULL, '2020-07-25 00:40:03', 'cash', '', 5, '20.00'),
(64, 3, 7, NULL, NULL, '1.00', NULL, '2020-07-25 23:13:43', 'cash', '', 5, '1.00'),
(65, 5, 7, NULL, NULL, '0.00', NULL, '2020-07-25 23:14:31', 'cash', '', 5, '0.00'),
(66, 5, 7, NULL, NULL, '5.00', NULL, '2020-07-27 02:50:22', 'cash', '', 5, '5.00'),
(67, 5, 7, NULL, NULL, '5.00', NULL, '2020-07-28 02:28:26', 'cash', '', 5, '5.00'),
(68, 5, 7, NULL, NULL, '50.00', NULL, '2020-08-02 19:00:41', 'cash', '', 5, '50.00'),
(69, 3, 7, NULL, NULL, '120.00', NULL, '2020-09-09 15:49:43', 'cash', '', 5, '120.00'),
(70, 5, 7, NULL, NULL, '20.00', NULL, '2020-12-03 20:57:18', 'cash', '', 5, '20.00'),
(71, 1, 8, NULL, NULL, '2,600,000.00', NULL, '2021-04-08 11:49:53', 'cash', '', 5, '2,600,000.00'),
(72, 1, 8, NULL, NULL, '2,600,000.00', NULL, '2021-04-08 11:50:13', 'cash', '', 5, '2,600,000.00'),
(73, 1, 8, NULL, NULL, '2,600,000.00', NULL, '2021-04-08 11:50:33', 'cash', '', 5, '2,600,000.00'),
(74, 1, 8, NULL, NULL, '2,600,000.00', NULL, '2021-04-08 11:50:57', 'cash', '', 5, '2,600,000.00'),
(75, 1, 8, NULL, NULL, '2,600,000.00', NULL, '2021-04-08 11:51:11', 'cash', '', 5, '2,600,000.00'),
(76, 1, 8, NULL, NULL, '2,600,000.00', NULL, '2021-04-08 11:51:24', 'cash', '', 5, '2,600,000.00'),
(77, 1, 8, NULL, NULL, '2,600,000.00', NULL, '2021-04-08 11:51:53', 'cash', '', 5, '2,600,000.00'),
(78, 1, 8, NULL, NULL, '2,600,000.00', NULL, '2021-04-08 11:52:14', 'cash', '', 5, '2,600,000.00'),
(79, 1, 8, NULL, NULL, '440,000.00', NULL, '2021-04-08 19:15:37', 'cash', '', 5, '440,000.00'),
(80, 1, 8, NULL, NULL, '400,000.00', NULL, '2021-04-08 20:04:59', 'cash', '', 5, '400,000.00'),
(81, 1, 4, NULL, NULL, '400,000.00', NULL, '2021-04-09 14:57:45', 'cash', '', 5, '400,000.00'),
(82, 2, 4, NULL, NULL, '1,200,000.00', NULL, '2021-04-09 15:07:17', 'cash', '', 5, '1,200,000.00'),
(83, 1, 4, NULL, NULL, '400,000.00', NULL, '2021-02-01 00:00:00', 'Credit', '', 5, '400,000.00'),
(84, 1, 4, NULL, NULL, '76,000.00', NULL, '2021-03-02 00:00:00', 'Cash', '', 5, '76,000.00'),
(85, 2, 4, NULL, NULL, '400,000.00', NULL, '2021-01-01 00:00:00', 'Cash', 'klaus Michealson', 5, '400,000.00'),
(86, 2, 4, NULL, NULL, '400,000.00', NULL, '2021-01-01 00:00:00', 'Cash', 'klaus Michealson', 5, '400,000.00'),
(87, 2, 4, NULL, NULL, '400,000.00', NULL, '2021-01-01 00:00:00', 'Cash', 'klaus Michealson', 5, '400,000.00'),
(88, 2, 4, NULL, NULL, '400,000.00', NULL, '2021-01-01 00:00:00', 'Cash', 'klaus Michealson', 5, '400,000.00'),
(89, 1, 7, NULL, NULL, '400,000.00', NULL, '2021-01-01 00:00:00', 'Cash', 'Sample Customer', 5, '400,000.00'),
(90, 1, 1, NULL, NULL, '400,000.00', NULL, '2021-01-03 00:00:00', 'Credit', 'dan Peter', 5, '400,000.00'),
(91, 1, 7, NULL, NULL, '404,000.00', NULL, '2021-04-03 00:00:00', 'Cash', 'klaus Michealson', 5, '404,000.00'),
(92, 1, 7, NULL, NULL, '400,000.00', NULL, '2021-01-05 00:00:00', 'Credit', 'dan Peter', 5, '400,000.00'),
(93, 1, 7, NULL, NULL, '40,000.00', NULL, '2021-01-01 00:00:00', 'Credit', 'dan Peter', 5, '40,000.00'),
(94, 1, 7, NULL, NULL, '400,000.00', NULL, '2021-01-06 00:00:00', 'Cash', 'klaus Michealson', 5, '400,000.00'),
(95, 1, 1, NULL, NULL, '5,042,000.00', NULL, '2021-01-01 00:00:00', 'Cash', 'klaus Michealson', 5, '5,042,000.00'),
(96, 1, 1, NULL, NULL, '400,000.00', NULL, '2021-04-03 00:00:00', 'Credit', 'klaus Michealson', 5, '400,000.00'),
(97, 1, 1, NULL, NULL, '5,020,000.00', NULL, '2021-01-01 00:00:00', 'Cash', 'klaus Michealson', 5, '5,020,000.00');

-- --------------------------------------------------------

--
-- Table structure for table `sales_details`
--

CREATE TABLE `sales_details` (
  `sales_details_id` int(11) NOT NULL,
  `sales_id` int(11) NOT NULL,
  `pc_id` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `sales_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_details`
--

INSERT INTO `sales_details` (`sales_details_id`, `sales_id`, `pc_id`, `price`, `sales_qty`) VALUES
(85, 59, 20, '500.00', 10),
(86, 59, 28, '1000.00', 50),
(87, 61, 27, '200.00', 100),
(88, 63, 27, '200.00', 100),
(89, 64, 34, '1000.00', 1200),
(90, 66, 20, '500.00', 10),
(91, 67, 20, '500.00', 10),
(92, 68, 38, '1000.00', 50),
(93, 69, 32, '1000.00', 100),
(94, 69, 35, '200.00', 100),
(95, 70, 35, '200.00', 100),
(96, 71, 1, '4000.00', 130),
(97, 72, 1, '4000.00', 130),
(98, 73, 1, '4000.00', 130),
(99, 73, 1, '4000.00', 130),
(100, 73, 1, '4000.00', 130),
(101, 73, 1, '4000.00', 130),
(102, 73, 1, '4000.00', 130),
(103, 74, 1, '4000.00', 130),
(104, 74, 1, '4000.00', 130),
(105, 74, 1, '4000.00', 130),
(106, 74, 1, '4000.00', 130),
(107, 74, 1, '4000.00', 130),
(108, 75, 1, '4000.00', 130),
(109, 75, 1, '4000.00', 130),
(110, 75, 1, '4000.00', 130),
(111, 75, 1, '4000.00', 130),
(112, 75, 1, '4000.00', 130),
(113, 76, 1, '4000.00', 130),
(114, 76, 1, '4000.00', 130),
(115, 76, 1, '4000.00', 130),
(116, 76, 1, '4000.00', 130),
(117, 76, 1, '4000.00', 130),
(118, 77, 1, '4000.00', 130),
(119, 77, 1, '4000.00', 130),
(120, 77, 1, '4000.00', 130),
(121, 77, 1, '4000.00', 130),
(122, 77, 1, '4000.00', 130),
(123, 78, 1, '4000.00', 130),
(124, 78, 1, '4000.00', 130),
(125, 78, 1, '4000.00', 130),
(126, 78, 1, '4000.00', 130),
(127, 78, 1, '4000.00', 130),
(128, 79, 1, '4000.00', 110),
(129, 80, 1, '4000.00', 100),
(130, 81, 1, '4000.00', 100),
(131, 82, 1, '4000.00', 300),
(132, 83, 1, '4000.00', 100),
(133, 84, 1, '4000.00', 19),
(134, 85, 1, '4000.00', 100),
(135, 86, 1, '4000.00', 100),
(136, 87, 1, '4000.00', 100),
(137, 88, 1, '4000.00', 100),
(138, 89, 1, '4000.00', 100),
(139, 90, 1, '4000.00', 100),
(140, 91, 1, '4000.00', 1),
(141, 91, 1, '4000.00', 100),
(142, 92, 1, '4000.00', 100),
(143, 93, 1, '4000.00', 10),
(144, 94, 1, '4000.00', 100),
(145, 95, 3, '50000.00', 100),
(146, 95, 1, '200.00', 10),
(147, 95, 4, '4000.00', 10),
(148, 96, 4, '4000.00', 100),
(149, 97, 2, '2000.00', 10),
(150, 97, 3, '50000.00', 100);

-- --------------------------------------------------------

--
-- Table structure for table `shifts`
--

CREATE TABLE `shifts` (
  `shift_id` int(11) NOT NULL,
  `shift_details` varchar(265) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shifts`
--

INSERT INTO `shifts` (`shift_id`, `shift_details`) VALUES
(1, 'Day'),
(2, 'Night');

-- --------------------------------------------------------

--
-- Table structure for table `stationproducts`
--

CREATE TABLE `stationproducts` (
  `prod_id` int(11) NOT NULL,
  `stationprod_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stationproducts`
--

INSERT INTO `stationproducts` (`prod_id`, `stationprod_name`) VALUES
(1, 'AGO'),
(2, 'PMS'),
(3, 'BIK');

-- --------------------------------------------------------

--
-- Table structure for table `stockin`
--

CREATE TABLE `stockin` (
  `stockin_id` int(11) NOT NULL,
  `pc_id` int(11) NOT NULL,
  `qty` float(10,2) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` varchar(35) DEFAULT NULL,
  `date` datetime NOT NULL,
  `branch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stockin`
--

INSERT INTO `stockin` (`stockin_id`, `pc_id`, `qty`, `user_id`, `total`, `date`, `branch_id`) VALUES
(23, 1, 100.00, 8, '200000.00', '2021-04-01 00:00:00', 5),
(24, 1, 100.00, 8, '20000.00', '2021-02-05 00:00:00', 5),
(25, 1, 100.00, 7, '0.00', '2021-02-12 00:00:00', 5),
(26, 3, 10000.00, 7, '0.00', '2021-01-01 00:00:00', 5),
(27, 4, 1000.00, 7, '0.00', '2021-01-01 00:00:00', 5),
(28, 5, 11000.00, 7, '0.00', '2021-01-01 00:00:00', 5),
(29, 1, 100.00, 7, '0.00', '2021-01-05 00:00:00', 5),
(30, 1, 100.00, 7, '0', '2021-04-01 00:00:00', 5),
(31, 5, 100.00, 7, NULL, '2021-04-08 00:00:00', 5),
(32, 4, 100.00, 1, '400000', '2021-02-05 00:00:00', 5),
(33, 3, 100.00, 1, '5000000', '2021-02-01 00:00:00', 5),
(34, 2, 100.00, 1, '200000', '2021-04-01 00:00:00', 5);

-- --------------------------------------------------------

--
-- Table structure for table `stocktaking`
--

CREATE TABLE `stocktaking` (
  `stocktaking_id` int(20) NOT NULL,
  `pc_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `qty_counted` float(10,2) NOT NULL,
  `qty_available` float(10,2) NOT NULL,
  `difference` float(10,2) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stocktaking`
--

INSERT INTO `stocktaking` (`stocktaking_id`, `pc_id`, `date`, `qty_counted`, `qty_available`, `difference`, `user_id`) VALUES
(2, 1, '2021-04-02', 5000.00, 4300.00, 700.00, 8),
(3, 1, '2021-03-31', 600.00, 4081.00, -3481.00, 7),
(4, 1, '2021-02-02', 380.00, 379.00, 1.00, 1),
(5, 1, '2021-04-08', 600.00, 380.00, 220.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `storageunits`
--

CREATE TABLE `storageunits` (
  `stunit_id` int(11) NOT NULL,
  `storageunitname` varchar(256) DEFAULT NULL,
  `capacity` decimal(10,5) NOT NULL,
  `prod_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `storageunits`
--

INSERT INTO `storageunits` (`stunit_id`, `storageunitname`, `capacity`, `prod_id`) VALUES
(2, 'Tank PMS', '50000.00000', 2),
(3, 'Tank AGO', '30000.00000', 1),
(4, 'Tank BIK', '50000.00000', 3);

-- --------------------------------------------------------

--
-- Table structure for table `stproducts`
--

CREATE TABLE `stproducts` (
  `stpd_id` int(25) NOT NULL,
  `product_name` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stproducts`
--

INSERT INTO `stproducts` (`stpd_id`, `product_name`) VALUES
(1, 'Lubricant'),
(3, 'Oil'),
(4, 'Tyres'),
(5, 'Engine oil');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` varchar(100) NOT NULL,
  `supplier_address` varchar(300) NOT NULL,
  `supplier_contact` varchar(50) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `balance` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier_name`, `supplier_address`, `supplier_contact`, `branch_id`, `balance`) VALUES
(8, 'ABC Suppliers', 'Nakasero', '0788123442', 5, '0.00'),
(9, 'DFG Company', 'Luwero', '0755978810', 5, '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `tankreadings`
--

CREATE TABLE `tankreadings` (
  `tankreading_id` int(25) NOT NULL,
  `openinvoice` decimal(10,2) NOT NULL,
  `dippmorn` decimal(10,2) NOT NULL,
  `morndiff` decimal(10,2) NOT NULL,
  `closinginvoice` decimal(10,2) NOT NULL,
  `dippeven` decimal(10,2) NOT NULL,
  `evendiff` decimal(10,2) DEFAULT NULL,
  `cummdiff` decimal(10,2) NOT NULL,
  `dailydiff` decimal(10,2) NOT NULL,
  `reorderlevel` decimal(10,2) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `stunit_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tankreadings`
--

INSERT INTO `tankreadings` (`tankreading_id`, `openinvoice`, `dippmorn`, `morndiff`, `closinginvoice`, `dippeven`, `evendiff`, `cummdiff`, `dailydiff`, `reorderlevel`, `date`, `stunit_id`) VALUES
(18, '28700.00', '28700.00', '0.00', '27782.09', '27820.00', NULL, '37.92', '37.92', '4220.00', '2020-12-31 21:00:00', 2),
(19, '27782.09', '27820.00', '37.91', '27741.43', '27745.43', NULL, '4.00', '-33.92', '4145.43', '2021-01-01 21:00:00', 2),
(20, '27741.43', '27745.43', '4.00', '27741.43', '27785.43', NULL, '44.00', '6.08', '4185.43', '2021-03-31 21:00:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tempcurrentprice`
--

CREATE TABLE `tempcurrentprice` (
  `tempcurrentprice_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `currentprice` float(10,5) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tempcurrentprice`
--

INSERT INTO `tempcurrentprice` (`tempcurrentprice_id`, `prod_id`, `currentprice`, `date`) VALUES
(1, 2, 3500.00000, '2021-02-02 21:09:00'),
(2, 2, 3400.00000, '2021-02-02 21:09:16');

-- --------------------------------------------------------

--
-- Table structure for table `tempfuelrecords`
--

CREATE TABLE `tempfuelrecords` (
  `temp_id` int(25) NOT NULL,
  `shift_id` int(25) NOT NULL,
  `nosal_id` int(25) NOT NULL,
  `prod_id` int(25) NOT NULL,
  `openmeter` float(10,2) NOT NULL,
  `closemeter` float(10,2) NOT NULL,
  `rtt` float(10,2) NOT NULL,
  `litressold` float(10,2) NOT NULL,
  `unitprice` float(10,2) NOT NULL,
  `total` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `temp_deposit`
--

CREATE TABLE `temp_deposit` (
  `temp_deposit_id` int(30) NOT NULL,
  `cat_id` int(30) NOT NULL,
  `unitprice` int(11) NOT NULL,
  `prod_qty` int(11) NOT NULL,
  `prod_name` varchar(250) NOT NULL,
  `expirydate` date NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `remark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `temp_trans`
--

CREATE TABLE `temp_trans` (
  `temp_trans_id` int(11) NOT NULL,
  `pc_id` int(11) NOT NULL,
  `price` float(10,2) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `remark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

CREATE TABLE `term` (
  `term_id` int(11) NOT NULL,
  `sales_id` int(11) DEFAULT NULL,
  `payable_for` varchar(10) NOT NULL,
  `term` varchar(11) NOT NULL,
  `due` decimal(10,2) NOT NULL,
  `payment_start` date NOT NULL,
  `down` decimal(10,2) NOT NULL,
  `due_date` date NOT NULL,
  `interest` decimal(10,2) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `branch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `phonenumber`, `password`, `name`, `status`, `branch_id`) VALUES
(1, 'admin', '', '', 'a1Bz20ydqelm8m1wql21232f297a57a5a743894a0e4a801fc3', 'Mutebi ', 'active', 1),
(4, 'user', '', '', 'a1Bz20ydqelm8m1wql21232f297a57a5a743894a0e4a801fc3', 'Mona Lisa', 'active', 2),
(6, 'administrator', '', '', 'a1Bz20ydqelm8m1wql21232f297a57a5a743894a0e4a801fc3', 'Giu Matthew', 'active', 0),
(7, 'William', 'wmutaabazi@gmail.com', '0775210211', 'a1Bz20ydqelm8m1wql28646d9b81e5a6d24ee5427f05372932', 'Mr.Mutaabazi William', 'active', 5),
(8, 'miltonbtc', 'mwilliam@gmail.com', '256759634528', 'a1Bz20ydqelm8m1wql28646d9b81e5a6d24ee5427f05372932', 'Mr.Mugagga Mark', 'active', 6),
(9, 'android', 'android@gmail.com', '256772412258', 'a1Bz20ydqelm8m1wql28646d9b81e5a6d24ee5427f05372932', 'an droid', 'active', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `currentprice`
--
ALTER TABLE `currentprice`
  ADD PRIMARY KEY (`currentprice_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `dailydipp`
--
ALTER TABLE `dailydipp`
  ADD PRIMARY KEY (`dailydipp_id`);

--
-- Indexes for table `dailysales`
--
ALTER TABLE `dailysales`
  ADD PRIMARY KEY (`dailysales_id`);

--
-- Indexes for table `history_log`
--
ALTER TABLE `history_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `lastclosinginvoice`
--
ALTER TABLE `lastclosinginvoice`
  ADD PRIMARY KEY (`lastclosinginvoice_id`);

--
-- Indexes for table `lastclosingmeter`
--
ALTER TABLE `lastclosingmeter`
  ADD PRIMARY KEY (`lastclosingmeter_id`);

--
-- Indexes for table `lastpdinitial`
--
ALTER TABLE `lastpdinitial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nosals`
--
ALTER TABLE `nosals`
  ADD PRIMARY KEY (`nosal_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pdsubcat`
--
ALTER TABLE `pdsubcat`
  ADD PRIMARY KEY (`sc_id`);

--
-- Indexes for table `procurement`
--
ALTER TABLE `procurement`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `productcode`
--
ALTER TABLE `productcode`
  ADD PRIMARY KEY (`pc_id`);

--
-- Indexes for table `pumps`
--
ALTER TABLE `pumps`
  ADD PRIMARY KEY (`pumpid`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `purchase_request`
--
ALTER TABLE `purchase_request`
  ADD PRIMARY KEY (`pr_id`);

--
-- Indexes for table `requestforquotation`
--
ALTER TABLE `requestforquotation`
  ADD PRIMARY KEY (`ItemID`);

--
-- Indexes for table `reviewpayment`
--
ALTER TABLE `reviewpayment`
  ADD PRIMARY KEY (`reviewpayment_id`);

--
-- Indexes for table `reviewproduct`
--
ALTER TABLE `reviewproduct`
  ADD PRIMARY KEY (`reviewproduct_id`);

--
-- Indexes for table `reviewsales`
--
ALTER TABLE `reviewsales`
  ADD PRIMARY KEY (`reviewsales_id`);

--
-- Indexes for table `reviewsales_details`
--
ALTER TABLE `reviewsales_details`
  ADD PRIMARY KEY (`reviewsalesdetails_id`);

--
-- Indexes for table `reviewstockin`
--
ALTER TABLE `reviewstockin`
  ADD PRIMARY KEY (`reviewstockin_id`);

--
-- Indexes for table `rtt`
--
ALTER TABLE `rtt`
  ADD PRIMARY KEY (`rtt_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sales_id`);

--
-- Indexes for table `sales_details`
--
ALTER TABLE `sales_details`
  ADD PRIMARY KEY (`sales_details_id`);

--
-- Indexes for table `shifts`
--
ALTER TABLE `shifts`
  ADD PRIMARY KEY (`shift_id`);

--
-- Indexes for table `stationproducts`
--
ALTER TABLE `stationproducts`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `stockin`
--
ALTER TABLE `stockin`
  ADD PRIMARY KEY (`stockin_id`);

--
-- Indexes for table `stocktaking`
--
ALTER TABLE `stocktaking`
  ADD PRIMARY KEY (`stocktaking_id`);

--
-- Indexes for table `storageunits`
--
ALTER TABLE `storageunits`
  ADD PRIMARY KEY (`stunit_id`);

--
-- Indexes for table `stproducts`
--
ALTER TABLE `stproducts`
  ADD PRIMARY KEY (`stpd_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `tankreadings`
--
ALTER TABLE `tankreadings`
  ADD PRIMARY KEY (`tankreading_id`);

--
-- Indexes for table `tempcurrentprice`
--
ALTER TABLE `tempcurrentprice`
  ADD PRIMARY KEY (`tempcurrentprice_id`);

--
-- Indexes for table `tempfuelrecords`
--
ALTER TABLE `tempfuelrecords`
  ADD PRIMARY KEY (`temp_id`);

--
-- Indexes for table `temp_deposit`
--
ALTER TABLE `temp_deposit`
  ADD PRIMARY KEY (`temp_deposit_id`);

--
-- Indexes for table `temp_trans`
--
ALTER TABLE `temp_trans`
  ADD PRIMARY KEY (`temp_trans_id`);

--
-- Indexes for table `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`term_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `currentprice`
--
ALTER TABLE `currentprice`
  MODIFY `currentprice_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dailydipp`
--
ALTER TABLE `dailydipp`
  MODIFY `dailydipp_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dailysales`
--
ALTER TABLE `dailysales`
  MODIFY `dailysales_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `history_log`
--
ALTER TABLE `history_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `lastclosinginvoice`
--
ALTER TABLE `lastclosinginvoice`
  MODIFY `lastclosinginvoice_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `lastclosingmeter`
--
ALTER TABLE `lastclosingmeter`
  MODIFY `lastclosingmeter_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `lastpdinitial`
--
ALTER TABLE `lastpdinitial`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nosals`
--
ALTER TABLE `nosals`
  MODIFY `nosal_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3237;

--
-- AUTO_INCREMENT for table `pdsubcat`
--
ALTER TABLE `pdsubcat`
  MODIFY `sc_id` int(26) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `procurement`
--
ALTER TABLE `procurement`
  MODIFY `user_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `productcode`
--
ALTER TABLE `productcode`
  MODIFY `pc_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pumps`
--
ALTER TABLE `pumps`
  MODIFY `pumpid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchase_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `purchase_request`
--
ALTER TABLE `purchase_request`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `requestforquotation`
--
ALTER TABLE `requestforquotation`
  MODIFY `ItemID` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `reviewpayment`
--
ALTER TABLE `reviewpayment`
  MODIFY `reviewpayment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `reviewproduct`
--
ALTER TABLE `reviewproduct`
  MODIFY `reviewproduct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `reviewsales`
--
ALTER TABLE `reviewsales`
  MODIFY `reviewsales_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `reviewsales_details`
--
ALTER TABLE `reviewsales_details`
  MODIFY `reviewsalesdetails_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `reviewstockin`
--
ALTER TABLE `reviewstockin`
  MODIFY `reviewstockin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `rtt`
--
ALTER TABLE `rtt`
  MODIFY `rtt_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `sales_details`
--
ALTER TABLE `sales_details`
  MODIFY `sales_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `shifts`
--
ALTER TABLE `shifts`
  MODIFY `shift_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stationproducts`
--
ALTER TABLE `stationproducts`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stockin`
--
ALTER TABLE `stockin`
  MODIFY `stockin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `stocktaking`
--
ALTER TABLE `stocktaking`
  MODIFY `stocktaking_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `storageunits`
--
ALTER TABLE `storageunits`
  MODIFY `stunit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stproducts`
--
ALTER TABLE `stproducts`
  MODIFY `stpd_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tankreadings`
--
ALTER TABLE `tankreadings`
  MODIFY `tankreading_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tempcurrentprice`
--
ALTER TABLE `tempcurrentprice`
  MODIFY `tempcurrentprice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tempfuelrecords`
--
ALTER TABLE `tempfuelrecords`
  MODIFY `temp_id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temp_deposit`
--
ALTER TABLE `temp_deposit`
  MODIFY `temp_deposit_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `temp_trans`
--
ALTER TABLE `temp_trans`
  MODIFY `temp_trans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `term`
--
ALTER TABLE `term`
  MODIFY `term_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
