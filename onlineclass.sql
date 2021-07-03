-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 06:32 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineclass`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(4) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `address` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `name`, `email`, `password`, `mobile`, `address`) VALUES
(6, 'ranjan kumar', 'ranjan@gmail.com', '1', 6299794492, 'jamshedpur'),
(7, 'ranjan kumar', 'ranjan@gmail.com', '1', 6299794492, 'jamshedpur'),
(8, 'ranjan kumar', 'ranjan@gmail.com', '1', 6299794492, 'jamshedpur'),
(9, 'ranjan kumar', 'ranjan@gmail.com', '1', 6299794492, 'jamshedpur'),
(10, 'ranjan kumar', 'ranjan@gmail.com', '1', 6299794492, 'jamshedpur'),
(11, 'ranjan kumar', 'ranjan@gmail.com', '1', 6299794492, 'jamshedpur'),
(12, 'ranjan kumar', 'ranjan@gmail.com', '1', 6299794492, 'jamshedpur'),
(13, 'ranjan kumar', 'ranjan@gmail.com', '1', 6299794492, 'jamshedpur');

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE `link` (
  `branch` varchar(10) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `link`
--

INSERT INTO `link` (`branch`, `date`, `time`, `link`) VALUES
('CSE', NULL, '00:00:00', 'https//www.googleMeet.com'),
('CSE', NULL, '00:00:00', 'https//www.googleMeet.com'),
('CSE', NULL, '00:00:00', 'https//www.googleMeet.com'),
('CSE', '2021-06-17', '10:42:00', 'https//www.googleMeet.com'),
('CSE', '2021-06-24', '15:37:00', 'https//www.googleMeet.com'),
('me', '2021-06-24', '01:21:00', 'https//www.googleMeet.com'),
('CSE', '2021-06-24', '02:43:00', 'https//www.googleMeet.com'),
('CSE', '2021-06-20', '10:05:00', 'https//www.googleMeet.com'),
('me', '2021-06-20', '10:06:00', 'https//www.googleMeet.com'),
('CSE', '2021-06-20', '20:37:00', 'https//www.googleMeet.com'),
('CSE', '2021-06-20', '20:37:00', 'https//www.googleMeet.com'),
('CSE', '2021-06-21', '10:48:00', 'https//www.googleMeet.com'),
('CSE', '2021-06-21', '10:48:00', 'https//www.googleMeet.com');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `roll` int(4) NOT NULL,
  `name` tinytext DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `branch` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`roll`, `name`, `email`, `password`, `mobile`, `branch`) VALUES
(1, 'Prince Singh bhumihar', 'princeppn2001@gmail.com', '12345', 6299794492, 'me'),
(2, 'Prince Singh bhumihar', 'princeppn2001@gmail.com', '1234', 6299794492, 'me'),
(3, 'Prince Singh bhumihar', 'princeppn2001@gmail.com', '1234', 6299794492, 'me'),
(4, 'Prince Singh bhumihar', 'princeppn2001@gmail.com', '1234', 6299794492, 'me'),
(5, 'Prince Singh bhumihar', 'princeppn2001@gmail.com', '1234', 6299794492, 'me'),
(6, 'Prince Singh bhumihar', 'princeppn2001@gmail.com', '123', 6299794492, 'me'),
(7, 'Prince Singh bhumihar', 'princeppn2001@gmail.com', '1234', 6299794492, 'me'),
(8, 'Prince Singh bhumihar', 'princeppn2001@gmail.com', '1234', 6299794492, 'me'),
(9, 'Prince Singh bhumihar', 'princeppn2001@gmail.com', '1234', 6299794492, 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `name` tinytext DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`name`, `email`, `password`, `mobile`, `address`) VALUES
('Piyush Kumar', 'a@gmail.com', '1234', 423438666666666667, 'adgr'),
('mannu', 'mannu@gmail', '1234', 6299794492, 'sdf'),
('Prince Singh bhumihar', 'princeppn2001@gmail.com', '1234', 6299794492, 'birpur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `roll` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
