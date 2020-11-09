-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2020 at 09:36 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `senpai`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL COMMENT 'Primary_key',
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `postal` varchar(10) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `address1` varchar(30) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `phone1` varchar(20) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `email1` varchar(30) DEFAULT NULL,
  `role` enum('0','1','2','3','4','5') DEFAULT NULL COMMENT '0:Subscriber,1:Contributor,2:Author,3:Editor,4:Administrator,5:Super Admin',
  `gender` enum('F','M','I') DEFAULT NULL COMMENT 'F:Female,M:Male,I:Intersex',
  `profile_photo` binary(50) DEFAULT NULL,
  `status` enum('0','9') DEFAULT '0' COMMENT '0:Active,9:Deleted',
  `ins_date` datetime DEFAULT NULL,
  `ins_user_name` varchar(20) DEFAULT NULL,
  `upd_date` datetime DEFAULT NULL,
  `upd_user_name` varchar(20) DEFAULT NULL,
  `operation` varchar(30) DEFAULT NULL COMMENT 'Note of DB changes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Sempai User ';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `lastname`, `firstname`, `birthday`, `country`, `postal`, `address`, `address1`, `phone`, `phone1`, `email`, `email1`, `role`, `gender`, `profile_photo`, `status`, `ins_date`, `ins_user_name`, `upd_date`, `upd_user_name`, `operation`) VALUES
(30, 'Nyamka', '$2y$10$Nn8/Dzpx5lRIkJZCmchdEeTNYNMcrXD6M4rTKgdBXE2DKaDkDZZVC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unyamka@gmail.com', NULL, NULL, NULL, NULL, '0', '2020-11-09 05:57:24', NULL, NULL, NULL, NULL),
(33, 'shineTsus', '$2y$10$vDGN6pGYpN3IuT6rU.ehFOGEln9lZXCRkQ2XPq65uEa/w7JdHV7Tm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unyamka@gmail.com1', NULL, NULL, NULL, NULL, '0', '2020-11-09 06:38:01', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary_key', AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
