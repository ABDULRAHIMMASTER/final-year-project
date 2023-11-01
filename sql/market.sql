-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 19, 2023 at 03:30 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `market`
--

-- --------------------------------------------------------

--
-- Table structure for table `licence`
--

CREATE TABLE `licence` (
  `id` int NOT NULL,
  `licence_no` varchar(20) NOT NULL,
  `amount` int NOT NULL,
  `business_type` varchar(50) NOT NULL,
  `dateRegitered` date NOT NULL,
  `ExpiryDate` date NOT NULL,
  `period` int NOT NULL,
  `shop_no` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `licence`
--

INSERT INTO `licence` (`id`, `licence_no`, `amount`, `business_type`, `dateRegitered`, `ExpiryDate`, `period`, `shop_no`) VALUES
(1, 'LM102', 60000, 'GROCERY', '0000-00-00', '0000-00-00', 2, 'LLB 320'),
(2, 'LM109', 60000, 'GROCERY', '0000-00-00', '0000-00-00', 2, 'LLB 320'),
(8, 'LM182', 90000, 'GRAIN STORE', '2015-06-02', '2017-06-02', 0, 'LLB 320'),
(7, 'LM188', 90000, 'Merchandise', '2015-06-02', '2016-06-02', 0, 'LMS202'),
(6, 'LM185', 82500, 'Merchandise', '2015-06-02', '2016-06-02', 0, 'LMS202'),
(9, 'LM183', 56000, 'Merchandise', '2015-06-02', '2016-06-02', 0, 'LLB 240'),
(10, 'LM187', 75600, 'GRAIN STORE', '2015-06-02', '2016-06-02', 0, 'LLB 320');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int NOT NULL,
  `licence_no` varchar(20) NOT NULL,
  `paid_amount` int NOT NULL,
  `balance` int DEFAULT NULL,
  `receipt_no` varchar(20) NOT NULL,
  `dateofPay` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `licence_no`, `paid_amount`, `balance`, `receipt_no`, `dateofPay`) VALUES
(1, 'LM102', 40000, 0, '920214', '2015-04-02'),
(2, 'LM109', 2500, 0, '238884', '2015-06-02'),
(3, 'LM188', 2500, 0, '616422', '2015-06-02'),
(4, 'LM102', 2340, 0, '554015', '2015-06-02'),
(5, 'LM102', 2000, 0, '616433', '2023-09-18'),
(6, 'LM102', 10000, 0, '464714', '2023-09-18'),
(7, 'LM102', 3000, 0, '447264', '2023-09-19');

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `id` int NOT NULL,
  `receipt_no` varchar(20) NOT NULL,
  `active` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`id`, `receipt_no`, `active`) VALUES
(1, '920214', 1),
(2, '238884', 1),
(3, '616422', 0),
(4, '554015', 0),
(7, '419344', 0),
(8, '464714', 0),
(9, '447264', 0);

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` int NOT NULL,
  `shop_no` varchar(20) NOT NULL,
  `floor_level` int NOT NULL,
  `section` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `shop_no`, `floor_level`, `section`) VALUES
(1, 'LLB 320', 1, 'Western'),
(5, 'LMS202', 2, 'WESTERN');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int NOT NULL,
  `user_name` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `password` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `names` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `user_name`, `password`, `user_type`, `names`, `gender`) VALUES
(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'Clerk', 'Fatima Muhammad', 'Female'),
(2, 'user', '5f4dcc3b5aa765d61d8327deb882cf99', 'Revenue Collector', 'Sani Girei', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `tz_members`
--

CREATE TABLE `tz_members` (
  `id` int NOT NULL,
  `usr` varchar(32) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT '',
  `pass` varchar(32) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `gender` varchar(15) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `dt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `vendor_type` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `names` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `photo` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `address` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `tz_members`
--

INSERT INTO `tz_members` (`id`, `usr`, `pass`, `email`, `gender`, `dt`, `vendor_type`, `names`, `photo`, `address`) VALUES
(4, 'magret', '19cc7ac74070eb3b14b5d27933498237', 'koburungi@gmail.com', 'Female', '2015-06-02 00:00:00', 'Vendor', 'koburungi magret', 'KENGAZI LILLIAN.jpg', 'KAGOOTE'),
(3, 'peter', '21232f297a57a5a743894a0e4a801fc3', 'peter@gmail.com', 'Male', '2015-05-30 00:00:00', 'Vendor', 'MUGABYOM', 'NUWAHWERA LETICIA.jpg', 'kasusu'),
(5, 'sanee', '5f4dcc3b5aa765d61d8327deb882cf99', 'sani@gmail.com', 'Male', '2023-09-18 00:00:00', 'Vendor', 'sani', 'IMG-20220814-WA0041.jpg', 'suleja, somwhere');

-- --------------------------------------------------------

--
-- Table structure for table `tz_member_shops`
--

CREATE TABLE `tz_member_shops` (
  `id` int NOT NULL,
  `shop_no` varchar(20) NOT NULL,
  `tz_members_id` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tz_member_shops`
--

INSERT INTO `tz_member_shops` (`id`, `shop_no`, `tz_members_id`) VALUES
(14, 'LLB 320', 3),
(15, 'LMS202', 4),
(16, 'LMS202', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `licence`
--
ALTER TABLE `licence`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `licence_no` (`licence_no`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `receipt_no` (`receipt_no`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `receipt_no` (`receipt_no`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `shop_no` (`shop_no`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tz_members`
--
ALTER TABLE `tz_members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usr` (`usr`);

--
-- Indexes for table `tz_member_shops`
--
ALTER TABLE `tz_member_shops`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shop_no` (`shop_no`,`tz_members_id`),
  ADD KEY `tz_members_id` (`tz_members_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `licence`
--
ALTER TABLE `licence`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tz_members`
--
ALTER TABLE `tz_members`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tz_member_shops`
--
ALTER TABLE `tz_member_shops`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
