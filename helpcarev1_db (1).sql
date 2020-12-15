-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2020 at 01:53 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

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
  `status` varchar(20) DEFAULT NULL,
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

INSERT INTO `booking` (`id`, `email`, `user_name`, `provider_name`, `category_name`, `status`, `date_book`, `time`, `address`, `book_no`, `service_and_rate`, `modeofpayment`, `special_instructions`, `date_added`) VALUES
(1, 'admin@mail.com', 'Admin', 'Test', 'testcat', 'Approved', '2020-12-09', '', 'Test Address', 'HC20201209', '', 'cash', NULL, '2020-12-09'),
(3, NULL, 'rt', NULL, NULL, NULL, NULL, '', NULL, 'HC2020112', '', NULL, NULL, '2020-12-13'),
(4, NULL, 'ssss', NULL, NULL, NULL, NULL, '', NULL, 'HC2020312', '', NULL, NULL, '2020-12-13'),
(5, NULL, 'fff', NULL, NULL, NULL, NULL, '', NULL, 'HC2020412', '', NULL, NULL, '2020-12-13'),
(6, 'TEst@sdsd.com', 'TEst', NULL, NULL, NULL, '2020-12-14', '00:47', 'testtesttesttesttest', 'HC2020512', 'Carpentry - ?1.00', NULL, 'test11', '2020-12-13');

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

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `category`, `subcat_name`) VALUES
(8, 'Carpentry', 'Tesdt');

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
  `service_photo` varchar(200) NOT NULL,
  `certificates_photo` varchar(200) NOT NULL,
  `govid_photo` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
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

INSERT INTO `users` (`id`, `email`, `password`, `type`, `firstname`, `lastname`, `address`, `contact_info`, `photo`, `service_photo`, `certificates_photo`, `govid_photo`, `status`, `reg_status`, `activate_code`, `reset_code`, `created_on`, `service`, `service_cat`, `rate`) VALUES
(1, 'test@provider.com', '$2y$10$8wY63GX/y9Bq780GBMpxCesV9n1H6WyCqcA2hNy2uhC59hEnOpNaS', 1, 'Pro', 'vider', '', '', 'facebook-profile-image.jpeg', '', '', '', 1, 'not verified', '', '', '2020-12-01', 'sd', 'df', '-'),
(13, 'x@x.com', '$2y$10$BdXa5URQNAWXp22NvJIimeSecX2A2rowu6X3yP4Xx31r4df/ReYIK', 0, 'service', 'provider', 'test', '211212', 'profile.jpg', '', '', '', 1, 'not verified', '', '', '2020-12-08', 's', 'd', '-'),
(21, 'mail@m.com', '$2y$10$.lfJdAPA3K04Jo9CN3J7jeW.sUk1HAyh8BYg9TG.aaGqLKPmlBceq', 2, 'mail', 'password', 'mail', '454545', 'avatar5.png', 'photo2.png', 'prod-1.jpg', 'prod-5.jpg', 0, NULL, '', '', '2020-12-14', '', 'Clean', '11'),
(22, 'Sds@sdd.com', '$2y$10$gnky1WMna.7hKUFuY6HW0erk72S9nZst4rWXvf4hu/5vAtTJI6/DW', 2, 'Sds', 'sdd', 'csdfsdf', 'sdfdfdfd', 'photo1.png', 'user2-160x160.jpg', 'photo4.jpg', 'photo3.jpg', 0, NULL, '', '', '2020-12-15', '', 'sdsd', '22'),
(23, 'esd@a.com', '$2y$10$lQS.anAOhAMZtmUQ9pN9oe.W/OflCsbIdXyEj08ZOIeryrXlCq6jO', 0, 'dasda', 'sdasd', 'adasd', 'asdasd', 'user2-160x160.jpg', '', '', '', 1, NULL, '', '', '2020-12-15', '', '-', '-');

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
