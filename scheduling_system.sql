-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2017 at 01:21 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scheduling_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `overall`
--

CREATE TABLE `overall` (
  `id` int(11) NOT NULL,
  `teacher` varchar(100) NOT NULL,
  `score` int(11) NOT NULL,
  `students` int(11) NOT NULL,
  `grade` varchar(3) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `overall`
--

INSERT INTO `overall` (`id`, `teacher`, `score`, `students`, `grade`, `description`) VALUES
(7, 'STING TARAZONA', 200, 2, '3.4', 'Effective'),
(8, 'SHERYL RODRIGUEZ', 207, 2, '3.6', 'Highly Effective'),
(9, 'VINA VELARDE', 234, 2, '3.3', 'Effective'),
(10, 'SANZ MOSES VALLE', 101, 1, '3.5', 'Effective'),
(11, 'JAMPOL DABAW', 106, 1, '3.7', 'Highly Effective');

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `id` int(11) NOT NULL,
  `teach` varchar(100) NOT NULL,
  `ts1` varchar(50) NOT NULL,
  `ts2` varchar(50) NOT NULL,
  `ts3` varchar(50) NOT NULL,
  `ts4` varchar(50) NOT NULL,
  `ts5` varchar(50) NOT NULL,
  `ts6` varchar(50) NOT NULL,
  `ts7` varchar(50) NOT NULL,
  `ts8` varchar(50) NOT NULL,
  `ts9` varchar(50) NOT NULL,
  `ts` varchar(50) NOT NULL,
  `ci1` varchar(50) NOT NULL,
  `ci2` varchar(50) NOT NULL,
  `ci3` varchar(50) NOT NULL,
  `ci4` varchar(50) NOT NULL,
  `ci5` varchar(50) NOT NULL,
  `ci6` varchar(50) NOT NULL,
  `ci7` varchar(50) NOT NULL,
  `ci` varchar(50) NOT NULL,
  `es1` varchar(50) NOT NULL,
  `es2` varchar(50) NOT NULL,
  `es3` varchar(50) NOT NULL,
  `es4` varchar(50) NOT NULL,
  `es5` varchar(50) NOT NULL,
  `es` varchar(50) NOT NULL,
  `ms1` varchar(50) NOT NULL,
  `ms2` varchar(50) NOT NULL,
  `ms3` varchar(50) NOT NULL,
  `ms4` varchar(50) NOT NULL,
  `ms5` varchar(50) NOT NULL,
  `ms6` varchar(50) NOT NULL,
  `ms7` varchar(50) NOT NULL,
  `ms8` varchar(50) NOT NULL,
  `ms` varchar(50) NOT NULL,
  `ir1` varchar(50) NOT NULL,
  `ir2` varchar(50) NOT NULL,
  `ir3` varchar(50) NOT NULL,
  `ir4` varchar(50) NOT NULL,
  `ir` varchar(50) NOT NULL,
  `pq1` varchar(50) NOT NULL,
  `pq2` varchar(50) NOT NULL,
  `pq3` varchar(50) NOT NULL,
  `pq` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`id`, `teach`, `ts1`, `ts2`, `ts3`, `ts4`, `ts5`, `ts6`, `ts7`, `ts8`, `ts9`, `ts`, `ci1`, `ci2`, `ci3`, `ci4`, `ci5`, `ci6`, `ci7`, `ci`, `es1`, `es2`, `es3`, `es4`, `es5`, `es`, `ms1`, `ms2`, `ms3`, `ms4`, `ms5`, `ms6`, `ms7`, `ms8`, `ms`, `ir1`, `ir2`, `ir3`, `ir4`, `ir`, `pq1`, `pq2`, `pq3`, `pq`) VALUES
(21, 'STING TARAZONA', '8', '8', '8', '6', '7', '7', '7', '8', '7', '66', '0', '0', '0', '0', '0', '0', '0', '0', '7', '8', '6', '6', '8', '35', '6', '5', '8', '6', '6', '8', '7', '7', '53', '6', '6', '6', '7', '25', '7', '8', '6', '21'),
(22, 'SHERYL RODRIGUEZ', '8', '7', '8', '7', '6', '7', '7', '6', '8', '64', '0', '0', '0', '0', '0', '0', '0', '0', '7', '7', '7', '6', '7', '34', '8', '8', '7', '5', '8', '7', '8', '8', '59', '6', '7', '7', '8', '28', '8', '7', '7', '22'),
(23, 'VINA VELARDE', '7', '7', '7', '6', '5', '8', '8', '6', '8', '62', '4', '3', '4', '4', '3', '4', '4', '26', '7', '8', '8', '6', '8', '37', '8', '7', '8', '7', '7', '8', '7', '6', '58', '7', '7', '6', '8', '28', '8', '7', '8', '23'),
(24, 'SANZ MOSES VALLE', '4', '4', '4', '3', '4', '4', '3', '3', '4', '33', '0', '0', '0', '0', '0', '0', '0', '0', '4', '3', '3', '4', '3', '17', '3', '4', '3', '3', '3', '4', '3', '3', '26', '4', '3', '3', '4', '14', '4', '4', '3', '11'),
(25, 'JAMPOL DABAW', '4', '4', '4', '2', '4', '4', '3', '3', '4', '32', '0', '0', '0', '0', '0', '0', '0', '0', '3', '4', '4', '4', '3', '18', '4', '4', '4', '4', '3', '4', '2', '3', '28', '4', '4', '4', '4', '16', '4', '4', '4', '12');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `emp_id`, `name`, `department`) VALUES
(28, '12345', 'STING TARAZONA', 'ICT'),
(29, '54321', 'SHERYL RODRIGUEZ', 'ICT'),
(30, '123ASD', 'RYAN PILAPIL', 'ICT'),
(31, '1233423', 'VINA VELARDE', 'NURSING'),
(32, '123ABCD', 'SANZ MOSES VALLE', 'ENGINEERING'),
(34, 'J235UJD', 'JAMPOL DABAW', 'CRIMINOLOGY'),
(35, '2SSD255', 'ZAKEY ZAILON', 'NURSING'),
(36, 'SRT-212', 'MYLENE CONTORNO', 'CRIMINOLOGY'),
(37, 'SER-321', 'DANISSE ERLYNE AGOD', 'BA'),
(38, 'SER-643', 'MAEJEN MORENO', 'EDUCATION'),
(39, 'SER-752', 'RUBY JANE SEROJALES', 'CHM');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `code` varchar(7) NOT NULL,
  `dept` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `code`, `dept`) VALUES
(9, 'z7RQI2I', 'ICT'),
(10, 'FEDdXur', 'NURSING'),
(11, 'QpIk4sz', 'CHM'),
(12, '20YLAWv', 'CRIMINOLOGY'),
(13, 'OGKAXWf', 'ENGINEERING'),
(14, 'oTF59OU', 'B.A'),
(15, '55lQqPa', 'ENGINEERING'),
(16, 'DmKnxCP', 'NURSING'),
(17, '5uz94cL', 'CRIMINOLOGY'),
(18, 'P27jZei', 'B.A'),
(19, 'amYoniH', 'CHM'),
(20, '9lmvPjG', 'CHM'),
(21, 'j7cc0Qt', 'ENGINEERING'),
(22, 'k88xHLM', 'NURSING'),
(23, 'wnp9fQ8', 'NURSING'),
(24, 'test', 'ICT'),
(25, 'testn', 'NURSING');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `teacher_name` varchar(100) NOT NULL,
  `str` varchar(300) NOT NULL,
  `weak` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `code`, `teacher_name`, `str`, `weak`) VALUES
(14, 'QpIk4sz', 'STING TARAZONA', '', ''),
(15, 'z7RQI2I', 'STING TARAZONA', '', ''),
(16, 'z7RQI2I', 'SHERYL RODEIGUEZ', '', ''),
(17, 'QpIk4sz', 'SHERYL RODEIGUEZ', '', ''),
(18, 'j7cc0Qt', 'VINA VELARDE', '', ''),
(19, 'DmKnxCP', 'VINA VELARDE', '', ''),
(20, 'z7RQI2I', 'SANZ MOSES VALLE', '', ''),
(21, 'z7RQI2I', 'JAMPOL DABAW', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overall`
--
ALTER TABLE `overall`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `overall`
--
ALTER TABLE `overall`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
