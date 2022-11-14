-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 03:41 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idea_lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_name` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `name` varchar(20) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `designation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_name`, `password`, `name`, `photo`, `designation`) VALUES
('admin', 'addmin', 'developer', 'assets\\img\\profile.png', 'developer'),
('drgopi', '123', 'Dr N Gopala Krishna ', 'assets\\img\\Picture2.jpg', 'Co Ordinator');

-- --------------------------------------------------------

--
-- Table structure for table `admin_log`
--

CREATE TABLE `admin_log` (
  `admin_log_id` int(11) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `organisation` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `given` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` varchar(20) NOT NULL,
  `event` varchar(100) NOT NULL,
  `title` varchar(30) NOT NULL,
  `photo` varchar(30) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event`, `title`, `photo`, `description`, `date`) VALUES
('3', 'Internships', 'TEST', 'IMG20220822085304_01.jpg', 'HELLO HELLO', '2022-10-23');

-- --------------------------------------------------------

--
-- Table structure for table `guest_log`
--

CREATE TABLE `guest_log` (
  `name` varchar(1000) NOT NULL,
  `mob` varchar(15) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `intime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `outtime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guest_log`
--

INSERT INTO `guest_log` (`name`, `mob`, `photo`, `intime`, `outtime`) VALUES
('LOKESH', 'LOKESH', 'uploads/log/LOKESH29092022232659.png', '2022-09-29 17:56:59', '---');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `regno` varchar(15) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `intime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `out_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`regno`, `photo`, `intime`, `out_time`) VALUES
('789654123', 'uploads/log/MANOJ MANFRED BILLA29092022211136.png', '2022-09-29 15:44:54', '2022-09-29 21:14:54'),
('9010660288', 'uploads/log/MANOJ MANFRED BILLA29092022211446.png', '2022-09-29 15:44:57', '2022-09-29 21:14:57'),
('LOKESH', 'uploads/log/LOKESH29092022232659.png', '2022-09-29 17:57:08', '2022-09-29 23:27:08'),
('20B91A12E9', 'uploads/log/20B91A12E901102022095418.png', '2022-10-01 04:24:30', '2022-10-01 09:54:30');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` varchar(20) NOT NULL,
  `title` varchar(20) NOT NULL,
  `description` varchar(500) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `photo`, `time`) VALUES
('1', 'srkr', 'student', 'aicte1.jpg', '2022-09-28 11:46:53'),
('2', 'idea lab fest', 'idea lab conducting a fest.Every one attend this event and make it grand success.', 'b-6.png', '2022-11-11 15:27:45');

-- --------------------------------------------------------

--
-- Table structure for table `patents`
--

CREATE TABLE `patents` (
  `patent_status` varchar(20) NOT NULL,
  `applicant_id` varchar(20) NOT NULL,
  `application_no` varchar(20) NOT NULL,
  `reciept_of_cbr` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` varchar(20) NOT NULL,
  `project_name` varchar(50) NOT NULL,
  `publisher_name` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `author` varchar(50) NOT NULL,
  `approved_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_name`, `publisher_name`, `date`, `author`, `approved_by`) VALUES
('123', 'web development', 'lokesh', '2022-11-01', 'developer', 'pranav');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `reg_no` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `branch` varchar(7) NOT NULL,
  `year` varchar(10) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`reg_no`, `name`, `dob`, `gender`, `branch`, `year`, `semester`, `mobile`, `time`) VALUES
('20B91A1223', 'PR', '0003-04-10', '0', 'CSD', '1', '1', '9010660288', '2022-09-27 12:16:46'),
('20B91A12E9', 'PATHI PRANAV TEJA', '3200-04-10', 'male', 'IT', '3', '1', '9010660288', '2022-09-26 17:40:30');

-- --------------------------------------------------------

--
-- Table structure for table `teacherlog`
--

CREATE TABLE `teacherlog` (
  `name` varchar(100) NOT NULL,
  `id` varchar(30) NOT NULL,
  `deg` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `intime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `outtime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacherlog`
--

INSERT INTO `teacherlog` (`name`, `id`, `deg`, `mobile`, `photo`, `intime`, `outtime`) VALUES
('', '', '', '', 'uploads/log/29092022182110.png', '2022-09-29 12:51:10', '---');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_name`,`password`);

--
-- Indexes for table `admin_log`
--
ALTER TABLE `admin_log`
  ADD PRIMARY KEY (`admin_log_id`);

--
-- Indexes for table `patents`
--
ALTER TABLE `patents`
  ADD PRIMARY KEY (`applicant_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`reg_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_log`
--
ALTER TABLE `admin_log`
  MODIFY `admin_log_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
