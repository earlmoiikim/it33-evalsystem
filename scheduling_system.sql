-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2017 at 01:09 PM
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
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `prof` varchar(100) NOT NULL,
  `str` varchar(500) NOT NULL,
  `weak` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `code`, `prof`, `str`, `weak`) VALUES
(1, 'QpIk4sz', 'STING TARAZONA', 'asdfasdf', 'asdfasdfasf'),
(2, 'z7RQI2I', 'STING TARAZONA', 'asfasdfasdfasdf', 'asdfasfasdfsdf'),
(3, 'z7RQI2I', 'SHERYL RODEIGUEZ', 'qweqweqweqweqweq', 'qweqweqweqweqwewqe'),
(4, 'QpIk4sz', 'SHERYL RODEIGUEZ', 'weqweqweqweqwewqeqwe', 'qweqweqwewqeqweqwewqe'),
(5, 'j7cc0Qt', 'VINA VELARDE', 'zxczxczxczxcx', 'zczxczxcxzczxc'),
(7, 'z7RQI2I', 'SANZ MOSES VALLE', 'rtyrtyrtyrtytryrt', 'yrtyrtyrtyrtyrtyrty'),
(8, 'z7RQI2I', 'JAMPOL DABAW', 'fghfghfghfghfgh', 'fghfghfghfghfgh'),
(10, 'test', 'SHERYL RODRIGUEZ', 'qweqweqweqweqweqwe', 'qweqwewqeqweqweqweqwe'),
(12, 'LUH6QwY', 'MYLENE CONTORNO', 'bnmbnmbnmbnmbnmbn', 'mbnmbnmbnmbnmbnmbnm'),
(13, 'test', 'DANISSE ERLYNE AGOD', 'dfgdfghfgdfgsdfasd', 'asdsdfdgdfgsdfasd'),
(14, 'test', 'RUBY JANE SEROJALES', 'tgbtgbtgbtgbtg', 'btgbtgbtgbtgbtgb'),
(15, 'testn', 'NURSING KO', 'nursing wtf', 'nursing wtf'),
(16, 'testn', 'DILI JUD KO NURSING', 'wxlensdflaksdjflk dili nursing ', 'sdulidglas dili nursing');

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
(7, 'STING TARAZONA', 310, 4, '2.7', 'Effective'),
(8, 'SHERYL RODRIGUEZ', 207, 3, '2.4', 'Partially Effective'),
(10, 'SANZ MOSES VALLE', 101, 1, '3.5', 'Effective');

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
(21, 'STING TARAZONA', '12', '11', '12', '10', '11', '11', '11', '12', '10', '100', '0', '0', '0', '0', '0', '0', '0', '0', '11', '11', '10', '10', '12', '54', '9', '9', '12', '10', '10', '11', '11', '11', '83', '10', '10', '9', '11', '40', '11', '12', '10', '33'),
(22, 'SHERYL RODRIGUEZ', '8', '7', '8', '7', '6', '7', '7', '6', '8', '64', '0', '0', '0', '0', '0', '0', '0', '0', '7', '7', '7', '6', '7', '34', '8', '8', '7', '5', '8', '7', '8', '8', '59', '6', '7', '7', '8', '28', '8', '7', '7', '22'),
(24, 'SANZ MOSES VALLE', '4', '4', '4', '3', '4', '4', '3', '3', '4', '33', '0', '0', '0', '0', '0', '0', '0', '0', '4', '3', '3', '4', '3', '17', '3', '4', '3', '3', '3', '4', '3', '3', '26', '4', '3', '3', '4', '14', '4', '4', '3', '11');

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
(29, 'test', 'SHERYL RODRIGUEZ', 'ICT'),
(30, '123ASD', 'RYAN PILAPIL', 'ICT'),
(32, '123ABCD', 'SANZ MOSES VALLE', 'ENGINEERING');

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
(25, 'testn', 'NURSING'),
(26, 's158zt9', 'ICT'),
(27, 'LUH6QwY', 'ICT'),
(28, 'g8lTaRa', 'NURSING'),
(29, 'EnDpqcC', 'NURSING'),
(30, 'eM199lZ', 'NURSING'),
(31, 'ft5mvO9', 'NURSING'),
(32, 'L0KvDXn', 'NURSING'),
(33, 'cM8hXZH', 'NURSING'),
(34, 'luCk8vx', 'NURSING'),
(35, 'ERptRyA', 'B.A');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `teacher_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `code`, `teacher_name`) VALUES
(14, 'QpIk4sz', 'STING TARAZONA'),
(15, 'z7RQI2I', 'STING TARAZONA'),
(16, 'z7RQI2I', 'SHERYL RODEIGUEZ'),
(17, 'QpIk4sz', 'SHERYL RODEIGUEZ'),
(19, 'DmKnxCP', 'VINA VELARDE'),
(20, 'z7RQI2I', 'SANZ MOSES VALLE'),
(22, 'test', 'STING TARAZONA'),
(23, 'test', 'SHERYL RODRIGUEZ'),
(24, 's158zt9', 'STING TARAZONA'),
(40, 'luCk8vx', 'KIM TAEHYUNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `overall`
--
ALTER TABLE `overall`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
