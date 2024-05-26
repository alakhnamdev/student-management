-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2023 at 09:30 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
