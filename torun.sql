-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: Oct 13, 2019 at 09:20 PM
=======
-- Generation Time: Oct 15, 2019 at 10:27 PM
>>>>>>> upto table add in single view .php
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `torun`
--

-- --------------------------------------------------------

--
-- Table structure for table `member_data`
--

CREATE TABLE `member_data` (
  `id` int(10) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `loan_date` varchar(20) NOT NULL,
  `phone_no` varchar(11) NOT NULL,
  `refer_name` varchar(100) NOT NULL,
  `present_addr` varchar(200) NOT NULL,
  `permanent_addr` int(200) NOT NULL,
  `loan_sirial` int(20) NOT NULL,
  `loan_amount` varchar(20) NOT NULL,
  `profit_amount` int(20) NOT NULL,
  `total_amount` int(20) NOT NULL,
  `premier_amount` int(20) NOT NULL,
  `savings_amount` int(20) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_data`
--

INSERT INTO `member_data` (`id`, `m_name`, `f_name`, `loan_date`, `phone_no`, `refer_name`, `present_addr`, `permanent_addr`, `loan_sirial`, `loan_amount`, `profit_amount`, `total_amount`, `premier_amount`, `savings_amount`, `image`) VALUES
<<<<<<< HEAD
(174, 'bangladewsh', 'sdklfj', '01-10-2019', 'lfjsf', 'kjslfkj', 'kjsflkj', 0, 52, '2', 2, 4, 2, 2, 'Jellyfish.jpg');
=======
(178, 'wrtghyjh', 'ikl.', '15-10-2019', 'hjk', 'hjkh', 'jkhjk', 0, 35201, '21', 12, 33, 1, 1, 'Chrysanthemum.jpg'),
(180, 'dfgdfgdg', '', '09-10-2019', 'dfgdf', 'gdfgd', 'fgdf', 0, 0, '546', 56, 602, 65, 56, 'Tulips.jpg'),
(181, 'sfg', 'hfgh', '09-05-2019', 'gfhfgh', 'fghfg', 'hfgh', 0, 5410, '42', 2, 44, 1, 1, 'Penguins.jpg'),
(182, 'fhfg', 'gdf', '65', 'hfgh', 'fgh', 'fh', 0, 653, '65', 65, 130, 0, 0, 'Chrysanthemum.jpg'),
(183, 'sdfsdf', 'sdfsd', '01-10-2019', 'fsdf', 'sdfsd', 'fsdf', 0, 45, '54', 5, 5445, 0, 0, 'Chrysanthemum.jpg'),
(185, 'kjhgfjghgjghj', 'ghjghjghjghj', '02-10-2019', 'gjghj', 'gjgh', '', 0, 8635, '56', 45, 101, 0, 0, 'Penguins.jpg'),
(187, 'bipu;[', '', '01-10-2019', 'jogfdgdfg', '', '', 0, 0, '46456', 456456, 502912, 54645, 45645, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `image`) VALUES
(84, 'fdsfdsf', 'fsdfsfsf', '856019796.jpg'),
(19, 'John', 'Moss', '4.jpg'),
(20, 'Lillie', 'Ferrarium', '3.jpg'),
(21, 'Yolanda', 'Green', '5.jpg'),
(22, 'Cara', 'Gariepy', '7.jpg'),
(23, 'Christine', 'Johnson', '11.jpg'),
(24, 'Alana', 'Decruze', '12.jpg'),
(25, 'Krista', 'Correa', '13.jpg'),
(26, 'Charles', 'Martin', '14.jpg'),
(89, 'fgfdg', 'gdfg', ''),
(88, 'fsdf', 'fsdf', ''),
(85, 'sdfsdf', 'fghfgh', '1333477829.jpg'),
(86, 'gfdgfdg', 'gfdgdf', ''),
(87, 'fdsf', 'dfdsf', ''),
(90, 'gtrfd', 'retret', ''),
(93, 'ngfgpodgdfg', 'fdgdfg', ''),
(96, 'jhgf', 'hgfx', '');
>>>>>>> upto table add in single view .php

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member_data`
--
ALTER TABLE `member_data`
  ADD PRIMARY KEY (`id`);

--
<<<<<<< HEAD
=======
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
>>>>>>> upto table add in single view .php
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member_data`
--
ALTER TABLE `member_data`
<<<<<<< HEAD
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;
=======
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
>>>>>>> upto table add in single view .php
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
