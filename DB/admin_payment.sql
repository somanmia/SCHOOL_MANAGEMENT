-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2021 at 11:42 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_payment`
--

CREATE TABLE `admin_payment` (
  `id` int(11) NOT NULL,
  `Class` varchar(255) DEFAULT NULL,
  `Admission_fee` int(11) DEFAULT NULL,
  `Session_fee` int(11) DEFAULT NULL,
  `Montly_fee` int(11) DEFAULT NULL,
  `Coaching_fee` int(11) DEFAULT NULL,
  `Total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_payment`
--

INSERT INTO `admin_payment` (`id`, `Class`, `Admission_fee`, `Session_fee`, `Montly_fee`, `Coaching_fee`, `Total`) VALUES
(1, '1', 500, 300, 400, 300, 1500),
(2, '2', 500, 300, 350, 300, 1450),
(3, '3', 500, 300, 300, 300, 1400),
(4, '4', 500, 300, 500, 300, 1600),
(5, '5', 500, 300, 550, 300, 1650),
(6, '6', 500, 300, 550, 350, 1700),
(7, '7', 500, 300, 550, 400, 1750);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_payment`
--
ALTER TABLE `admin_payment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Class` (`Class`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_payment`
--
ALTER TABLE `admin_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
