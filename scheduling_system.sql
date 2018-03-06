-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2018 at 06:08 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

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
  `teacher_id` int(11) NOT NULL,
  `str` varchar(500) NOT NULL,
  `weak` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `code`, `teacher_id`, `str`, `weak`) VALUES
(11, 'Mxh52Fz', 47, 'asdfasdfasdfasdfa', 'sdfasdfasdfasdfasdf'),
(12, 'Mxh52Fz', 48, 'asdfasdfasdfasdf asdf asdf a', 'afsdf asdf asdfas fasdf afasdf '),
(13, 'SaeOi5i', 47, 'asdfasdfasdfasd fasd fasdf ', ' asdf asdf asdf asdf asf asdf asdf asdfasdf'),
(14, 'SaeOi5i', 48, 'wqrerqwerqwer qwe', 'rqw rqwe rqwer qwr qwerq'),
(15, 'MXVxP2P', 49, 'nothing, not really... so sad', 'so noob very much noob'),
(16, 'KbY9GWM', 49, 'sdfasdf asdf asf asdf asdf ', 'asf asdf asdf asf as fasd f');

-- --------------------------------------------------------

--
-- Table structure for table `overall`
--

CREATE TABLE `overall` (
  `id` int(11) NOT NULL,
  `teacher_id` int(100) NOT NULL,
  `score` int(11) NOT NULL,
  `students` int(11) NOT NULL,
  `grade` varchar(3) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `overall`
--

INSERT INTO `overall` (`id`, `teacher_id`, `score`, `students`, `grade`, `description`) VALUES
(9, 47, 178, 2, '3.1', 'Satisfactory'),
(10, 48, 196, 2, '3.4', 'Satisfactory'),
(11, 49, 112, 2, '1.9', 'Very Good');

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `subject_code` varchar(15) NOT NULL,
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

INSERT INTO `scores` (`id`, `teacher_id`, `subject_code`, `ts1`, `ts2`, `ts3`, `ts4`, `ts5`, `ts6`, `ts7`, `ts8`, `ts9`, `ts`, `ci1`, `ci2`, `ci3`, `ci4`, `ci5`, `ci6`, `ci7`, `ci`, `es1`, `es2`, `es3`, `es4`, `es5`, `es`, `ms1`, `ms2`, `ms3`, `ms4`, `ms5`, `ms6`, `ms7`, `ms8`, `ms`, `ir1`, `ir2`, `ir3`, `ir4`, `ir`, `pq1`, `pq2`, `pq3`, `pq`) VALUES
(9, 47, 'none', '6', '6', '3', '6', '5', '2', '7', '7', '7', '49', '0', '0', '0', '0', '0', '0', '0', '0', '6', '8', '3', '6', '6', '29', '7', '7', '6', '5', '8', '7', '5', '7', '52', '8', '7', '6', '7', '28', '6', '7', '7', '20'),
(10, 48, 'none', '6', '7', '6', '8', '6', '7', '7', '5', '8', '60', '0', '0', '0', '0', '0', '0', '0', '0', '6', '7', '7', '7', '8', '35', '5', '8', '7', '8', '8', '4', '8', '6', '54', '8', '6', '6', '6', '26', '7', '8', '6', '21'),
(11, 49, 'none', '2', '3', '2', '2', '2', '2', '3', '2', '2', '20', '0', '0', '0', '0', '0', '0', '0', '0', '2', '3', '3', '4', '6', '18', '5', '4', '3', '5', '4', '4', '7', '7', '39', '5', '6', '6', '2', '19', '6', '7', '3', '16');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `subject_code` varchar(11) NOT NULL,
  `students` int(11) NOT NULL,
  `ts` int(11) NOT NULL,
  `ci` int(11) NOT NULL,
  `es` int(11) NOT NULL,
  `ms` int(11) NOT NULL,
  `ir` int(11) NOT NULL,
  `pq` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(11) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `emp_id`, `pass`, `name`, `department`) VALUES
(47, '1234567', 'qwertyui', 'STING TARAZONA', 'ICT'),
(48, '1231231', '12345678', 'SHERYL RODRIGUEZ', 'ICT'),
(49, '1231233', '12345678', 'ZAKEY ZAILON', 'ENGINEERING');

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
(1, 'KbY9GWM', 'ICT'),
(2, 'Mxh52Fz', 'ENGINEERING'),
(3, 'MXVxP2P', 'ICT'),
(4, 'SaeOi5i', 'ICT');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `code`, `teacher_id`) VALUES
(11, 'Mxh52Fz', 47),
(12, 'Mxh52Fz', 48),
(13, 'SaeOi5i', 47),
(14, 'SaeOi5i', 48),
(15, 'MXVxP2P', 49),
(16, 'KbY9GWM', 49);

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
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
