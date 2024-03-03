-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2023 at 06:09 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_plan`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_name` varchar(100) NOT NULL,
  `category_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_name`, `category_id`) VALUES
('catering', 1),
('photography', 2),
('event management', 3),
('decorators', 4),
('event hall', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`name`, `email`, `password`) VALUES
('name', 'dhivi123@gmail', 'hello'),
('dhivi', 'myselfdhivi@gmail.com', 'Dhivi'),
('dhivi12345', 'dhivi321@gmail.com', '12345'),
('dhivi21', 'dhivi3@gmail', '12345'),
('test', 'test@gmail', 'test'),
('kokila', 'kokila@gmail.com', 'kokila');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_1`
--

CREATE TABLE `vendor_1` (
  `id` int(6) UNSIGNED NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `event_price` decimal(10,2) NOT NULL,
  `event_description` text DEFAULT NULL,
  `event_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `location` varchar(100) DEFAULT NULL,
  `people_handled` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_2`
--

CREATE TABLE `vendor_2` (
  `id` int(6) UNSIGNED NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `event_price` decimal(10,2) NOT NULL,
  `event_description` text DEFAULT NULL,
  `event_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `location` varchar(100) DEFAULT NULL,
  `people_handled` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_info`
--

CREATE TABLE `vendor_info` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `category` varchar(50) DEFAULT NULL,
  `contact_name` varchar(50) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `profile_picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendor_info`
--

INSERT INTO `vendor_info` (`id`, `name`, `email`, `password`, `category`, `contact_name`, `phone_number`, `address`, `profile_picture`) VALUES
(1, 'caters', 'Dhivi@gmail.com', '12345', 'Catering', 'dhivi', '9500291638', '16,naveen thottam , veerakeralam , coimbatore', 'hand.jpg'),
(2, 'name', 'test@gmail', '123456', 'Photography', 'dhivi', '9500291638', '16,naveen thottam , veerakeralam , coimbatore', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vendor_1`
--
ALTER TABLE `vendor_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_2`
--
ALTER TABLE `vendor_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_info`
--
ALTER TABLE `vendor_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vendor_1`
--
ALTER TABLE `vendor_1`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_2`
--
ALTER TABLE `vendor_2`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_info`
--
ALTER TABLE `vendor_info`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
