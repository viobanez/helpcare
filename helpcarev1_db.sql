-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2020 at 12:00 AM
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
  `user_name` varchar(255) DEFAULT NULL,
  `provider_name` varchar(255) DEFAULT NULL,
  `service` varchar(255) DEFAULT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `date_book` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `book_no` varchar(50) DEFAULT NULL,
  `modeofpayment` varchar(255) DEFAULT NULL,
  `special_instructions` varchar(500) DEFAULT NULL,
  `date_added` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `user_name`, `provider_name`, `service`, `category_name`, `price`, `status`, `date_book`, `address`, `book_no`, `modeofpayment`, `special_instructions`, `date_added`) VALUES
(1, 'Admin', 'Test', 'Carpentry', 'testcat', '2', 'Approved', '2020-12-09', 'Test Address', '2020-12-09', 'cash', NULL, '2020-12-09');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cat_slug` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `cat_slug`) VALUES
(1, 'Carpentry', 'carpentry'),
(2, 'Salon', 'salon'),
(3, 'Plumbing', 'plumbing');

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
  `subcat_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `contact_info` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `reg_status` varchar(50) DEFAULT NULL,
  `activate_code` varchar(15) NOT NULL,
  `reset_code` varchar(15) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `type`, `firstname`, `lastname`, `address`, `contact_info`, `photo`, `status`, `reg_status`, `activate_code`, `reset_code`, `created_on`) VALUES
(1, 'test@provider.com', '$2y$10$8wY63GX/y9Bq780GBMpxCesV9n1H6WyCqcA2hNy2uhC59hEnOpNaS', 1, 'Pro', 'vider', '', '', 'facebook-profile-image.jpeg', 1, NULL, '', '', '2020-12-01'),
(11, 'test@gmail.com', '$2y$10$dvV7onY2bPSb9GBENwR57OixbBy3veerLtRt/FqnpoeyzV1h8x48K', 0, 'User', 'tests', 'tests', 'test', '', 1, NULL, '', '', '2020-12-01'),
(13, 'x@x.com', '$2y$10$BdXa5URQNAWXp22NvJIimeSecX2A2rowu6X3yP4Xx31r4df/ReYIK', 0, 'service', 'provider', 'test', '211212', 'profile.jpg', 0, NULL, '', '', '2020-12-08'),
(14, 'xx@xx.com', '$2y$10$YNfYW0/vMLf2Vj2x9pbdl..LGm5kwuOsDd9NGDdw1Vq9NYDHhHihq', 2, 'serv', 'prov', 'dff', '454545', 'profile.jpg', 0, NULL, '', '', '2020-12-08');

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
