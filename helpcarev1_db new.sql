-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2020 at 04:03 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpcarev1_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(100) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `provider_name` varchar(255) DEFAULT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `status` varchar(25) DEFAULT '0',
  `b_condition` varchar(5) NOT NULL DEFAULT '0',
  `date_book` date DEFAULT NULL,
  `time` varchar(8) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `book_no` varchar(50) DEFAULT NULL,
  `service_and_rate` varchar(255) NOT NULL,
  `modeofpayment` varchar(255) DEFAULT NULL,
  `special_instructions` varchar(500) DEFAULT NULL,
  `date_added` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `email`, `user_name`, `provider_name`, `category_name`, `status`, `b_condition`, `date_book`, `time`, `address`, `book_no`, `service_and_rate`, `modeofpayment`, `special_instructions`, `date_added`) VALUES
(12, 'admin@admin.com', 'Admin istrator', NULL, NULL, 'Accepted', '0', '2020-12-30', '21:10', 'sss', NULL, 'Carpentry', NULL, 'ss', '2020-12-30'),
(13, 'admin@admin.com', 'Admin istrator', NULL, NULL, 'Accepted', '0', '2020-12-30', '21:10', 'ssds', 'HC20201212', 'Carpentry', NULL, '', '2020-12-30');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `has_sub` varchar(5) NOT NULL,
  `cat_slug` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `has_sub`, `cat_slug`) VALUES
(1, 'Carpentry', '1', 'carpentry'),
(2, 'Salon', '0', 'salon'),
(3, 'Plumbing', '0', 'plumbing');

-- --------------------------------------------------------

--
-- Table structure for table `cpanel_users`
--

CREATE TABLE `cpanel_users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(60) NOT NULL,
  `type` int(1) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `activate_code` varchar(15) NOT NULL,
  `reset_code` varchar(15) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpanel_users`
--

INSERT INTO `cpanel_users` (`id`, `email`, `password`, `type`, `firstname`, `lastname`, `address`, `contact_info`, `photo`, `status`, `activate_code`, `reset_code`, `created_on`) VALUES
(1, 'admin@admin.com', '$2y$10$8wY63GX/y9Bq780GBMpxCesV9n1H6WyCqcA2hNy2uhC59hEnOpNaS', 1, 'Admin', 'istrator', '', '', 'facebook-profile-image.jpeg', 1, '', '', '2020-12-01'),
(11, 'test@gmail.com', '$2y$10$dvV7onY2bPSb9GBENwR57OixbBy3veerLtRt/FqnpoeyzV1h8x48K', 0, 'test', 'test', 'test', 'test', '', 1, '', '', '2020-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(6) NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `subcat_name` varchar(100) DEFAULT NULL,
  `desc_subcat` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `category`, `subcat_name`, `desc_subcat`) VALUES
(8, 'Carpentry', 'Tesdt', ''),
(9, 'Carpentry', 'ssss', 'sdsd'),
(10, 'Salon', 'sss', 'ffgfgc');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(60) NOT NULL,
  `type` int(1) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `street_name` varchar(255) NOT NULL,
  `brgy` varchar(255) NOT NULL,
  `birthday` varchar(15) NOT NULL,
  `age` varchar(5) NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `service_photo` varchar(200) NOT NULL,
  `certificates_photo` varchar(200) NOT NULL,
  `govid_photo` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL,
  `reg_status` varchar(50) DEFAULT NULL,
  `activate_code` varchar(15) NOT NULL,
  `reset_code` varchar(15) NOT NULL,
  `created_on` date NOT NULL,
  `service` varchar(255) NOT NULL,
  `service_cat` varchar(250) NOT NULL DEFAULT '-',
  `rate` varchar(20) NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `type`, `firstname`, `lastname`, `address`, `city`, `street_name`, `brgy`, `birthday`, `age`, `contact_info`, `photo`, `service_photo`, `certificates_photo`, `govid_photo`, `status`, `reg_status`, `activate_code`, `reset_code`, `created_on`, `service`, `service_cat`, `rate`) VALUES
(1, 'test@provider.com', '$2y$10$8wY63GX/y9Bq780GBMpxCesV9n1H6WyCqcA2hNy2uhC59hEnOpNaS', 1, 'admin', 'istrator', '', '', '', '', '', '', '', 'facebook-profile-image.jpeg', '', '', '', '1', 'not verified', '', '', '2020-12-01', 'sd', 'df', '-'),
(13, 'p@p.c', '$2y$10$8wY63GX/y9Bq780GBMpxCesV9n1H6WyCqcA2hNy2uhC59hEnOpNaS', 1, 'service', 'provider', 'test', '', '', '', '', '19', '211212', 'profile.jpg', '', '', '', '1', 'not verified', '', '', '2020-12-08', 's', 'd', '-'),
(23, 'u@u.c', '$2y$10$8wY63GX/y9Bq780GBMpxCesV9n1H6WyCqcA2hNy2uhC59hEnOpNaS', 0, 'dasda', 'sdasd', 'adasd', '', '', '', '', '', 'asdasd', 'user2-160x160.jpg', '', '', '', '1', NULL, '', '', '2020-12-15', '', '-', '-'),
(26, 's@a.com', '$2y$10$wYZG2tEvInlzUb5m277PLO03cGgilE1h0i1Cbq.hqj0.q1bD2NRCu', 2, 'Ret', 'Adad', '', 'vv', 'ee', 'df', '', '33', '3244', 's-l300.jpg', 's-l300.jpg', 's-l300.jpg', 's-l300.jpg', 'Processing', NULL, '', '', '2020-12-30', '', 'SAD', '22'),
(27, 'dfdfd@a.com', '$2y$10$mS69Cqa/3FzTSpDc/nf6yuso3xlKkRB96crY/G7tuJRP0lE2Kcrmm', 2, 'dfdfd', 'dfdfd', '', '', 'dfdfd', 'dfdfd', '1990-12-30', '30', '334', 'Capturewww.PNG', 'Capturewww.PNG', 'Capturewww.PNG', 'Capturewww.PNG', 'Processing', NULL, '', '', '2020-12-30', '', 'ssss', '34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpanel_users`
--
ALTER TABLE `cpanel_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cpanel_users`
--
ALTER TABLE `cpanel_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
