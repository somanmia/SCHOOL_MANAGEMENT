-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2021 at 11:43 AM
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
-- Table structure for table `student_payment`
--

CREATE TABLE `student_payment` (
  `id` int(11) NOT NULL,
  `student_id` varchar(256) DEFAULT NULL,
  `Amount` int(11) DEFAULT NULL,
  `Month` varchar(256) DEFAULT NULL,
  `Payment_date` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_payment`
--

INSERT INTO `student_payment` (`id`, `student_id`, `Amount`, `Month`, `Payment_date`) VALUES
(1, '366858', 1000, 'May', '2021-12-12'),
(2, '366858', 1000, 'March', '2021-12-12'),
(3, '366858', 1000, 'March', '2021-12-12'),
(4, '366858', 1000, 'January', '2021-12-12'),
(5, '1', 10, 'January', '2000-12-12'),
(6, '55', 10, 'February', '2000-12-12'),
(7, '2', 10, 'March', '2000-12-12'),
(8, '366858', 10, 'February', '2000-12-12'),
(9, '366858', 10, 'March', '2000-12-12'),
(10, '366858', 10, 'Julay', '2000-12-12'),
(11, '1', 10, 'November', '2000-12-12'),
(12, '366858', 10, 'April', '2000-12-12'),
(13, '1', 100000, 'October', '2000-12-12'),
(14, '366858', 100000, 'June', '2000-12-12'),
(15, '366858', 100000, 'April', '2000-12-12'),
(16, '366858', 100000, 'November', '2000-12-12'),
(17, '222', 100000, 'April', '2000-12-12'),
(18, '366858', 100000, 'February', '2000-12-12'),
(19, '366858', 100000, 'February', '2000-12-12'),
(20, '366858', 100000, 'April', '2000-12-12'),
(21, '366858', 100000, 'August', '2000-12-12'),
(22, '366858', 100000, 'November', '2000-12-12'),
(23, '366858', 100000, 'Julay', '2000-12-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_payment`
--
ALTER TABLE `student_payment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_payment`
--
ALTER TABLE `student_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
