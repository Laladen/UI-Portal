-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2025 at 03:54 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `denr`
--

-- --------------------------------------------------------

--
-- Table structure for table `users_tb`
--

CREATE TABLE `users_tb` (
  `id` int(11) NOT NULL,
  `user_id` varchar(25) NOT NULL,
  `username` varchar(1000) DEFAULT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `email` varchar(1000) DEFAULT NULL,
  `group_id` varchar(1000) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `suffix` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `birthdate` varchar(255) DEFAULT NULL,
  `contactnumber` varchar(255) DEFAULT NULL,
  `civilstatus` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `office` varchar(50) DEFAULT NULL,
  `aor` varchar(255) DEFAULT NULL,
  `section` varchar(250) DEFAULT NULL,
  `item` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `salary_per_annum` varchar(255) DEFAULT NULL,
  `division` varchar(255) DEFAULT NULL,
  `esign_description` varchar(255) DEFAULT 'DENR MIMAROPA',
  `authorized_esign` varchar(255) DEFAULT 'default.png',
  `details` varchar(1000) DEFAULT NULL,
  `temp_role` int(11) NOT NULL,
  `otp_code` varchar(6) DEFAULT NULL,
  `otp_expiration` datetime DEFAULT NULL,
  `reset_expiry` datetime DEFAULT NULL,
  `reset_token` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users_tb`
--


--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_tb`
--
ALTER TABLE `users_tb`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`id`),
  ADD UNIQUE KEY `user_id_2` (`id`),
  ADD UNIQUE KEY `user_id_3` (`id`),
  ADD UNIQUE KEY `user_id_4` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users_tb`
--
ALTER TABLE `users_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
