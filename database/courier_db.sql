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
  `phone` varchar(100) NOT NULL,
  `ShippeReceiver_addressress` varchar(200) NOT NULL,
  `s_email` varchar(100) NOT NULL,
  `Receiver_Name` varchar(100) NOT NULL,
  `Receiver_Phone` varchar(100) NOT NULL,
  `Receiver_address` varchar(200) NOT NULL,
  `r_email` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `Departure_Time` varchar(20) NOT NULL,
  `qty` int(10) NOT NULL,
  `book_mode` varchar(20) NOT NULL,
  `Arrival_Time` varchar(100) NOT NULL,
  `mode` varchar(100) NOT NOT NULL,
  `pick_date` varchar(100) NOT NOT NULL,
  `pick_time` varchar(10) NOT NULL,
  `status` varchar(100) NOT NULL,
  `comments` varchar(250) NOT NOT NULL,
  `book_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_courier`
--

INSERT INTO `tbl_courier` (`cid`, `cons_no`, `Shipper_Name`, `phone`, `ShippeReceiver_addressress`, `s_email`, `Receiver_Name`, `Receiver_Phone`, `Receiver_address`, `r_email`, `type`, `weight`, `Departure_Time`, `qty`, `book_mode`, `Arrival_Time`, `mode`, `pick_date`, `pick_time`, `status`, `comments`, `book_date`) VALUES
(1, 'M22P7KHM', 'Tousif Khan', '020 253623', 's sd sdsd', 'brandonasah11@gmail.com', 'Rizwan Ahmed', '020 88552', 'sd sd s', 'brandonasah11@gmail.com', 'Parcel', 20, '252525', 12, 'TBB', 240, 'Road', '29/04/2018', '12', 'Delivered', 'ds ds d', '2018-01-26'),
(2, 'QIWWGIQP', 'Asif khan', '020 253623', 'shani peth', 'brandonasah11@gmail.com', 'munna bhai', '020 88552', 'asdas das d', 'brandonasah11@gmail.com', 'Documents', 20, '252525', 12, 'TBB', 240, 'Train', '29/03/2018', '4', 'Delivered', 'Plz deliver it', '2018-02-28'),
(3, 'Q906F73L', 'Amol sarode', '9484848445', 'metha nagar, bhusawal', 'brandonasah11@gmail.com', 'sunil pal', '8585425412', 'balliram peth', 'brandonasah11@gmail.com', 'Documents', 12, '239098', 12, 'ToPay', 200, 'Air', '26/01/2018', '4', 'Delivered', 'Thanks', '2018-01-20'),
(4, '2THBV8UM', 'Farzana Sk', '9532685965', 'xzyz', 'brandonasah11@gmail.com', 'Asif Khan', '9852451254', 'ABC', 'brandonasah11@gmail.com', 'Parcel', 2, '23788', 4, 'Paid', 90, 'Road', '20/01/2018', '12', 'Delivered', 'Plz transit', '2018-01-15'),
(5, 'H374ZTGO', 'saleem', '8954335576', 'lucknow aliganj', 'brandonasah11@gmail.com', 'shyam', '8954335576', 'delhi', 'brandonasah11@gmail.com', 'Documents', 2, '22532', 1, 'Paid', 500, 'Air', '29/04/2018', '04:16pm', 'Landed', 'fast', '2018-04-29');

--
-- Indexes for dumped tables
--

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
