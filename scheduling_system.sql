-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2017 at 12:30 PM
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
(16, 'testn', 'DILI JUD KO NURSING', 'wxlensdflaksdjflk dili nursing ', 'sdulidglas dili nursing'),
(18, 'testn', 'DILI KO NURSING', 'asdfasfasfafasdfa sdfasf asf asf ', 'asd fasdf asdfasfwae xzvzcxv z vzxv ');

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
(9, 'VINA VELARDE', 234, 2, '3.3', 'Effective'),
(10, 'SANZ MOSES VALLE', 101, 1, '3.5', 'Effective'),
(11, 'JAMPOL DABAW', 106, 1, '3.7', 'Highly Effective'),
(12, 'MYLENE CONTORNO', 98, 1, '3.4', 'Effective'),
(13, 'DANISSE ERLYNE AGOD', 101, 1, '3.5', 'Effective'),
(14, 'RUBY JANE SEROJALES', 102, 1, '3.5', 'Highly Effective'),
(15, 'NURSING KO', 108, 1, '3.0', 'Effective'),
(16, 'DILI JUD KO NURSING', 144, 1, '4.0', 'Highly Effective'),
(18, 'DILI KO NURSING', 110, 1, '3.8', 'Highly Effective');

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
(23, 'VINA VELARDE', '7', '7', '7', '6', '5', '8', '8', '6', '8', '62', '4', '3', '4', '4', '3', '4', '4', '26', '7', '8', '8', '6', '8', '37', '8', '7', '8', '7', '7', '8', '7', '6', '58', '7', '7', '6', '8', '28', '8', '7', '8', '23'),
(24, 'SANZ MOSES VALLE', '4', '4', '4', '3', '4', '4', '3', '3', '4', '33', '0', '0', '0', '0', '0', '0', '0', '0', '4', '3', '3', '4', '3', '17', '3', '4', '3', '3', '3', '4', '3', '3', '26', '4', '3', '3', '4', '14', '4', '4', '3', '11'),
(25, 'JAMPOL DABAW', '4', '4', '4', '2', '4', '4', '3', '3', '4', '32', '0', '0', '0', '0', '0', '0', '0', '0', '3', '4', '4', '4', '3', '18', '4', '4', '4', '4', '3', '4', '2', '3', '28', '4', '4', '4', '4', '16', '4', '4', '4', '12'),
(26, 'MYLENE CONTORNO', '3', '4', '3', '4', '4', '4', '4', '3', '2', '31', '0', '0', '0', '0', '0', '0', '0', '0', '3', '3', '3', '3', '4', '16', '4', '3', '3', '3', '3', '3', '4', '4', '27', '4', '3', '3', '3', '13', '3', '4', '4', '11'),
(27, 'DANISSE ERLYNE AGOD', '3', '4', '3', '3', '3', '4', '1', '4', '4', '29', '0', '0', '0', '0', '0', '0', '0', '0', '4', '3', '4', '4', '4', '19', '2', '4', '4', '3', '4', '4', '3', '4', '28', '4', '3', '3', '4', '14', '4', '3', '4', '11'),
(28, 'RUBY JANE SEROJALES', '4', '4', '3', '3', '4', '3', '3', '4', '4', '32', '0', '0', '0', '0', '0', '0', '0', '0', '2', '3', '4', '2', '4', '15', '4', '3', '4', '4', '4', '3', '3', '4', '29', '4', '4', '3', '3', '14', '4', '4', '4', '12'),
(29, 'NURSING KO', '3', '3', '3', '3', '3', '3', '3', '3', '3', '27', '3', '3', '3', '3', '3', '3', '3', '21', '3', '3', '3', '3', '3', '15', '3', '3', '3', '3', '3', '3', '3', '3', '24', '3', '3', '3', '3', '12', '3', '3', '3', '9'),
(30, 'DILI JUD KO NURSING', '4', '4', '4', '4', '4', '4', '4', '4', '4', '36', '4', '4', '4', '4', '4', '4', '4', '28', '4', '4', '4', '4', '4', '20', '4', '4', '4', '4', '4', '4', '4', '4', '32', '4', '4', '4', '4', '16', '4', '4', '4', '12'),
(32, 'DILI KO NURSING', '3', '4', '3', '3', '4', '4', '4', '4', '4', '33', '0', '0', '0', '0', '0', '0', '0', '0', '4', '4', '4', '4', '3', '19', '4', '4', '4', '4', '4', '4', '4', '4', '32', '3', '4', '4', '3', '14', '4', '4', '4', '12');

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
(31, '1233423', 'VINA VELARDE', 'NURSING'),
(32, '123ABCD', 'SANZ MOSES VALLE', 'ENGINEERING'),
(34, 'J235UJD', 'JAMPOL DABAW', 'CRIMINOLOGY'),
(35, '2SSD255', 'ZAKEY ZAILON', 'NURSING'),
(36, 'SRT-212', 'MYLENE CONTORNO', 'CRIMINOLOGY'),
(37, 'SER-321', 'DANISSE ERLYNE AGOD', 'B.A'),
(38, 'SER-643', 'MAEJEN MORENO', 'EDUCATION'),
(39, 'SER-752', 'RUBY JANE SEROJALES', 'CHM'),
(40, '514141A', 'NURSING KO', 'NURSING'),
(41, '125141X', 'DILI KO NURSING', 'CHM'),
(42, '151515L', 'DILI JUD KO NURSING', 'EDUCATION');

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
(28, 'g8lTaRa', 'NURSING');

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
(18, 'j7cc0Qt', 'VINA VELARDE'),
(19, 'DmKnxCP', 'VINA VELARDE'),
(20, 'z7RQI2I', 'SANZ MOSES VALLE'),
(21, 'z7RQI2I', 'JAMPOL DABAW'),
(22, 'test', 'STING TARAZONA'),
(23, 'test', 'SHERYL RODRIGUEZ'),
(24, 's158zt9', 'STING TARAZONA'),
(25, 'LUH6QwY', 'MYLENE CONTORNO'),
(26, 'test', 'DANISSE ERLYNE AGOD'),
(27, 'test', 'RUBY JANE SEROJALES'),
(28, 'testn', 'NURSING KO'),
(29, 'testn', 'DILI JUD KO NURSING'),
(31, 'testn', 'DILI KO NURSING');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `overall`
--
ALTER TABLE `overall`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
