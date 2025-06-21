-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2021 at 11:44 AM
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
-- Table structure for table `teachers_info`
--

CREATE TABLE `teachers_info` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Fathers_name` varchar(255) DEFAULT NULL,
  `Mothers_name` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `Nationality` varchar(255) DEFAULT NULL,
  `Date_of_birth` varchar(255) DEFAULT NULL,
  `Marital_status` varchar(255) DEFAULT NULL,
  `Gender` varchar(255) DEFAULT NULL,
  `village` varchar(255) DEFAULT NULL,
  `District` varchar(255) DEFAULT NULL,
  `Upazila` varchar(255) DEFAULT NULL,
  `pvillage` varchar(255) DEFAULT NULL,
  `pDistrict` varchar(255) DEFAULT NULL,
  `pUpazila` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers_info`
--

INSERT INTO `teachers_info` (`id`, `Name`, `Fathers_name`, `Mothers_name`, `Email`, `Phone`, `Nationality`, `Date_of_birth`, `Marital_status`, `Gender`, `village`, `District`, `Upazila`, `pvillage`, `pDistrict`, `pUpazila`, `image`) VALUES
(1, 'Md Soman Mia', 'Md Samad Mia', 'Hazera Begum', 'somanmia.cse@gmail.com', '01812084186', 'Bangladeshi', '2000-12-12', 'Single', 'Male', 'Sherpur', 'Sherpur ', 'Sherpur Sadar', 'VATPARA', 'Sherpur ', 'Sherpur Sadar', 'Job.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teachers_info`
--
ALTER TABLE `teachers_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Phone` (`Phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teachers_info`
--
ALTER TABLE `teachers_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
