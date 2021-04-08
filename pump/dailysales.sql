-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2021 at 01:54 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `dailysales`
--

CREATE TABLE `dailysales` (
  `dailysales_id` int(25) NOT NULL,
  `shift_id` int(25) NOT NULL,
  `pumpid` int(25) NOT NULL,
  `nosalnumber` int(25) NOT NULL,
  `prod_id` int(25) NOT NULL,
  `openmeter` float(30,5) NOT NULL,
  `closemeter` float(30,5) NOT NULL,
  `rtt` varchar(256) DEFAULT NULL,
  `litressold` decimal(10,5) DEFAULT NULL,
  `unitprice` decimal(10,5) NOT NULL,
  `total` decimal(35,5) NOT NULL,
  `pricechange` varchar(255) NOT NULL,
  `pcopenmeter` decimal(10,5) NOT NULL,
  `pcclosemeter` decimal(10,5) NOT NULL,
  `pcrtt` varchar(255) NOT NULL,
  `pclitressold` decimal(10,5) NOT NULL,
  `pcunitprice` decimal(10,5) NOT NULL,
  `pctotalpayment` decimal(35,5) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dailysales`
--

INSERT INTO `dailysales` (`dailysales_id`, `shift_id`, `pumpid`, `nosalnumber`, `prod_id`, `openmeter`, `closemeter`, `rtt`, `litressold`, `unitprice`, `total`, `pricechange`, `pcopenmeter`, `pcclosemeter`, `pcrtt`, `pclitressold`, `pcunitprice`, `pctotalpayment`, `date`) VALUES
(5, 1, 1, 2, 1, 1690.94995, 1700.00000, '', '10.00000', '3700.92000', '37009.20000', 'yes', '1700.00000', '1900.00000', '', '200.00000', '3900.20000', '780040.00000', '2021-01-28 20:41:30'),
(6, 2, 4, 2, 2, 1900.00000, 2000.00000, '', '100.00000', '3720.00000', '372000.00000', 'no', '1900.00000', '2000.00000', '', '100.00000', '3720.00000', '372000.00000', '2021-01-28 20:42:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dailysales`
--
ALTER TABLE `dailysales`
  ADD PRIMARY KEY (`dailysales_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dailysales`
--
ALTER TABLE `dailysales`
  MODIFY `dailysales_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
