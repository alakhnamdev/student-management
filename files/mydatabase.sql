-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2023 at 10:17 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `atdupdate`
--

CREATE TABLE `atdupdate` (
  `username` varchar(20) NOT NULL,
  `atd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `atdupdate`
--

INSERT INTO `atdupdate` (`username`, `atd`) VALUES
('alakh', 8),
('ved', 7);

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `username` varchar(20) NOT NULL,
  `session1` int(3) NOT NULL,
  `session2` int(3) NOT NULL,
  `session3` int(3) NOT NULL,
  `session4` int(3) NOT NULL,
  `session5` int(3) NOT NULL,
  `attend1` int(3) NOT NULL,
  `attend2` int(3) NOT NULL,
  `attend3` int(3) NOT NULL,
  `attend4` int(3) NOT NULL,
  `attend5` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`username`, `session1`, `session2`, `session3`, `session4`, `session5`, `attend1`, `attend2`, `attend3`, `attend4`, `attend5`) VALUES
('abhishek', 55, 38, 37, 42, 48, 41, 29, 29, 30, 38),
('alakh', 55, 38, 37, 42, 48, 47, 36, 36, 40, 43),
('aman', 55, 38, 37, 42, 48, 31, 30, 29, 38, 39),
('ayush', 55, 38, 37, 42, 48, 42, 34, 24, 29, 36),
('shubham', 55, 38, 37, 42, 48, 35, 29, 30, 35, 40),
('sukhman', 55, 38, 37, 42, 48, 41, 29, 29, 36, 40);

-- --------------------------------------------------------

--
-- Table structure for table `logindetails`
--

CREATE TABLE `logindetails` (
  `ID` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logindetails`
--

INSERT INTO `logindetails` (`ID`, `username`, `password`) VALUES
(1, 'admin', 'alakh'),
(2, 'alakh', 'namdev'),
(3, 'abhishek', 'kumar'),
(4, 'aman', 'kumar'),
(5, 'ayush', 'bariya'),
(6, 'shubham', 'rawat'),
(7, 'sukhman', 'singh');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `username` varchar(20) NOT NULL,
  `maths` int(3) NOT NULL,
  `english` int(3) NOT NULL,
  `physics` int(3) NOT NULL,
  `chemistry` int(3) NOT NULL,
  `computer` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`username`, `maths`, `english`, `physics`, `chemistry`, `computer`) VALUES
('abhishek', 100, 93, 95, 91, 97),
('alakh', 100, 99, 99, 99, 99),
('aman ', 99, 100, 98, 97, 95),
('ayush', 99, 99, 97, 92, 90),
('shubham', 95, 100, 98, 92, 99),
('sukhman', 98, 67, 70, 78, 92);

-- --------------------------------------------------------

--
-- Table structure for table `noticeboard`
--

CREATE TABLE `noticeboard` (
  `ID` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `ntitle` varchar(200) NOT NULL,
  `notice` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `noticeboard`
--

INSERT INTO `noticeboard` (`ID`, `username`, `ntitle`, `notice`) VALUES
(4, 'admin', 'message 2 ', 'this is message is posted to let you know that notice board is live now but only admin post notice for now\r\n'),
(5, 'admin', 'Inform', 'This notice is posted to let you know that delete notice option is live now and notices that you can post can now be deleted.\r\n'),
(6, 'admin', 'sample message', 'this is to check delete is working or not\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `ID` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(500) NOT NULL,
  `order` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`ID`, `fname`, `lname`, `email`, `phone`, `address`, `order`) VALUES
(1, 'alakh', 'namdev', 'alakhnamdevv2004@gmail.com', '8126461500', 'jhajra', 'momos'),
(2, 'alakh', 'namdev', 'alakhnamdevv2004@gmail.com', '8126461500', 'jhajra dehradun', 'momos chowmin'),
(3, 'Dev', 'Verma', 'namdev.alakh@gmail.com', '8126461500', 'jhajra', 'momos');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atdupdate`
--
ALTER TABLE `atdupdate`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `logindetails`
--
ALTER TABLE `logindetails`
  ADD PRIMARY KEY (`ID`,`username`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `noticeboard`
--
ALTER TABLE `noticeboard`
  ADD PRIMARY KEY (`ID`,`username`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logindetails`
--
ALTER TABLE `logindetails`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `noticeboard`
--
ALTER TABLE `noticeboard`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
