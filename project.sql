-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2016 at 09:57 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `last_name`, `first_name`, `phone`, `email`) VALUES
(1, 'Jason', 'Kim', '678-428-0791', 'admin1@ggc.edu');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `type` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `pass`, `type`) VALUES
(1, 'admin1@ggc.edu', 'admin123', 2),
(2, 'jpiazza@ggc.edu', '1234', 0),
(3, 'voltest@ggc.edu', '920812', 1);

-- --------------------------------------------------------

--
-- Table structure for table `matchticket`
--

CREATE TABLE `matchticket` (
  `matchid` int(11) NOT NULL,
  `sticketid` int(11) DEFAULT NULL,
  `vsticketid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sticket`
--

CREATE TABLE `sticket` (
  `sticketid` int(10) NOT NULL,
  `dflightnum` varchar(255) NOT NULL,
  `dflightname` varchar(255) NOT NULL,
  `aflightnum` varchar(255) NOT NULL,
  `aflightname` varchar(255) NOT NULL,
  `adate` date NOT NULL,
  `atime` time NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sticket2`
--

CREATE TABLE `sticket2` (
  `sticketid` int(10) NOT NULL,
  `shousing` enum('Yes','No') NOT NULL,
  `sdatestart` date NOT NULL,
  `sdateend` date NOT NULL,
  `acomments` text NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL,
  `major` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `last_name`, `first_name`, `gender`, `level`, `major`, `contact`, `email`) VALUES
(1, 'Piazza', 'Jacob', 'male', 'ug', 'IT', '66666666666', 'jpiazza@ggc.edu');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `id` int(10) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `affiliation` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `last_name`, `first_name`, `gender`, `affiliation`, `phone`, `email`) VALUES
(1, 'Kim', 'Jason', 'male', 'GGC', '666-666-6666', 'voltest@ggc.edu');

-- --------------------------------------------------------

--
-- Table structure for table `vsticket`
--

CREATE TABLE `vsticket` (
  `vsticketid` int(11) NOT NULL,
  `vavdate` date DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  `numtrips` int(11) DEFAULT NULL,
  `comments` text,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vsticket`
--

INSERT INTO `vsticket` (`vsticketid`, `vavdate`, `capacity`, `numtrips`, `comments`, `email`) VALUES
(1, '2019-02-03', 3, 4, 'testing', 'voltest@ggc.edu');

-- --------------------------------------------------------

--
-- Table structure for table `vsticket2`
--

CREATE TABLE `vsticket2` (
  `id` int(10) NOT NULL,
  `begining_available_date` varchar(30) NOT NULL,
  `ending_available_date` varchar(30) NOT NULL,
  `accommodate_student_number` varchar(30) NOT NULL,
  `comment` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vsticket2`
--

INSERT INTO `vsticket2` (`id`, `begining_available_date`, `ending_available_date`, `accommodate_student_number`, `comment`, `email`) VALUES
(1, '2017-02-02', '2017-03-02', '5', 'sdfgb', 'voltest@ggc.edu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matchticket`
--
ALTER TABLE `matchticket`
  ADD PRIMARY KEY (`matchid`),
  ADD KEY `fk_sticketid` (`sticketid`),
  ADD KEY `fk_vsticketid` (`vsticketid`);

--
-- Indexes for table `sticket`
--
ALTER TABLE `sticket`
  ADD PRIMARY KEY (`sticketid`);

--
-- Indexes for table `sticket2`
--
ALTER TABLE `sticket2`
  ADD PRIMARY KEY (`sticketid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vsticket`
--
ALTER TABLE `vsticket`
  ADD PRIMARY KEY (`vsticketid`);

--
-- Indexes for table `vsticket2`
--
ALTER TABLE `vsticket2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sticket`
--
ALTER TABLE `sticket`
  MODIFY `sticketid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sticket2`
--
ALTER TABLE `sticket2`
  MODIFY `sticketid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vsticket`
--
ALTER TABLE `vsticket`
  MODIFY `vsticketid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vsticket2`
--
ALTER TABLE `vsticket2`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `matchticket`
--
ALTER TABLE `matchticket`
  ADD CONSTRAINT `fk_sticketid` FOREIGN KEY (`sticketid`) REFERENCES `sticket` (`sticketid`),
  ADD CONSTRAINT `fk_vsticketid` FOREIGN KEY (`vsticketid`) REFERENCES `vsticket` (`vsticketid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
