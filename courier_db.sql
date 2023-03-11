-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2020 at 09:43 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courier_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courier`
--

CREATE TABLE `tbl_courier` (
  `cid` int(10) NOT NULL,
  `cons_no` varchar(20) NOT NULL,
  `Shipper_Name` varchar(100) NOT NULL,
  `Shippers_Contact` varchar(100) NOT NULL,
  `Shipper_addresss` varchar(200) NOT NULL,
  `s_email` varchar(100) NOT NULL,
  `Receiver_Name` varchar(100) NOT NULL,
  `Receiver_Shippers_Contact` varchar(100) NOT NULL,
  `Receiver_address` varchar(200) NOT NULL,
  `r_email` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `Departure_Time` varchar(20) NOT NULL,
  `qty` int(10) NOT NULL,
  `book_mode` varchar(20) NOT NULL,
  `Arrival_Time` varchar(100) NOT NULL,
  `mode` varchar(100) NOT NULL,
  `Regisstration_D_T` varchar(100) NOT NULL,
  `Registration_Time` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `comments` varchar(250) NOT NULL,
  `book_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


--
-- Indexes for table `tbl_courier`
--
ALTER TABLE `tbl_courier`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_courier`
--
ALTER TABLE `tbl_courier`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
