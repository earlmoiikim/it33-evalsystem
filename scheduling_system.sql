-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2017 at 04:09 AM
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
(28, '12345', '12345', 'STING TARAZONA', 'ENGINEERING'),
(46, 'TEST123', 'test12345', 'SANZ VALZ', 'ICT');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `code` varchar(7) NOT NULL,
  `dept` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `overall`
--
ALTER TABLE `overall`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
