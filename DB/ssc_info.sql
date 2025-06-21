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
-- Table structure for table `ssc_info`
--

CREATE TABLE `ssc_info` (
  `id` int(11) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Examination` varchar(255) DEFAULT NULL,
  `Group_name` varchar(255) DEFAULT NULL,
  `Board` varchar(255) DEFAULT NULL,
  `Result` double(3,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ssc_info`
--

INSERT INTO `ssc_info` (`id`, `phone`, `Email`, `Examination`, `Group_name`, `Board`, `Result`) VALUES
(1, '01812084186', 'somanmia.cse@gmail.com', 'SSC', 'SCIENCE', 'DHAKA', 4.89);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ssc_info`
--
ALTER TABLE `ssc_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ssc_info`
--
ALTER TABLE `ssc_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
