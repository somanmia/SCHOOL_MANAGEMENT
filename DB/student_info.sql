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
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Student_id` varchar(255) DEFAULT NULL,
  `Roll` int(11) DEFAULT NULL,
  `Father` varchar(255) DEFAULT NULL,
  `Mother` varchar(255) DEFAULT NULL,
  `Nationality` varchar(255) DEFAULT NULL,
  `Date_of_birth` date DEFAULT NULL,
  `Phone` varchar(101) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `Class` varchar(255) DEFAULT NULL,
  `Care_of` varchar(255) DEFAULT NULL,
  `village` varchar(255) DEFAULT NULL,
  `District` varchar(255) DEFAULT NULL,
  `Upazila` varchar(255) DEFAULT NULL,
  `NID_NO` varchar(255) DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `Name`, `Student_id`, `Roll`, `Father`, `Mother`, `Nationality`, `Date_of_birth`, `Phone`, `Email`, `Gender`, `Class`, `Care_of`, `village`, `District`, `Upazila`, `NID_NO`, `Image`) VALUES
(1, 'Md Soman Mia', '366858', 1610364230, 'MD SAMAD MIA', 'HAJERA BEGUM', 'Bangladeshi', '2000-12-12', '01812084186', 'somanmia.cse@gmail.com', 'Male', '5', 'Alamgir Hossen', 'VATPARA', 'Sherpur', 'Sherpur Sadar', '2004891882010', '142475133_430891511434100_2389363807082385276_n.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Student_id` (`Student_id`) USING BTREE,
  ADD UNIQUE KEY `Email` (`Email`) USING BTREE,
  ADD UNIQUE KEY `Phone` (`Phone`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
