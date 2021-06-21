-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2016 at 05:45 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ambulance`
--

-- --------------------------------------------------------

--
-- Table structure for table `ambulances`
--

CREATE TABLE IF NOT EXISTS `ambulances` (
  `ambulance_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `message_id` int(11) NOT NULL,
  `name` varchar(233) NOT NULL,
  `capacity` varchar(233) NOT NULL,
  `location` varchar(233) NOT NULL,
  `ambulance_name` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `FNAME` varchar(30) DEFAULT NULL,
  `mNAME` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `user_id` varchar(15) NOT NULL DEFAULT '',
  `sex` varchar(8) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `phone_no` varchar(25) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `confirmpassword` varchar(15) NOT NULL,
  `friend` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`FNAME`, `mNAME`, `lname`, `user_id`, `sex`, `level`, `phone_no`, `username`, `password`, `confirmpassword`, `friend`) VALUES
('', '', '', '', '', '', '', '', '', '', '','1'),
('seleshi', 'zelalem', 'bayleyegn', '082', 'male', '2', '+251920737328', 'sele', '1234', '1234','samrawit,ergete' '1'),
('Temesegan', 'Walelign', 'Kebede', '089', 'male', '1', '0922553395', 'admin', '789', '789', 'ergete,samrawit','1'),
('Ashenafi', 'Workyie', 'Ejegu', 'r/1234/04', 'male', '1', '+2512345678998', 'wokeltyis', 'wokeltyis', 'wokeltyis','sasi,ergete' '1');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `message_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(0) NOT NULL,
  KEY `auth` (`auth`(6)),
  KEY `recip` (`recip`(6)),
  `time` int(10) unsigned DEFAULT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `name`, `username`,`auth`, `recip`, `time`,  `message`) VALUES
(112, 'taye haimanot', 'antnh55@yahoo.com', 'google', 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb'),
(113, 'alemu haimanot', 'antnh55@yahoo.com', 'hello', 'bullshit'),
(114, 'avol', 'asewa@gmail.com', 'google', 'message');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
  `patient_id` int(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `dat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `location` varchar(100) NOT NULL,
  `lname` varchar(233) NOT NULL,
  `ambulance_name` varchar(233) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`patient_id`, `name`, `contact`, `city`, `dat`, `location`, `lname`,`ambulance_name`) VALUES
(8, 'alemu', '37878', 'mojo', '0000-00-00 00:00:00', 'addis', 'haimanot''ttttttt'),
(9, 'adan ', '0945679876', 'Nework', '0000-00-00 00:00:00', 'dkfkd', 'addis','ttttttt');

-- --------------------------------------------------------

--
-- Indexes for table `ambulances`
--
ALTER TABLE `ambulances`
  ADD PRIMARY KEY (`ambulance_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`patient_id`);


--
-- AUTO_INCREMENT for table `ambulances`
--
ALTER TABLE `ambulances`
  MODIFY `ambulance_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `patient_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
  
-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `user` varchar(16) DEFAULT NULL,
  `pass` varchar(16) DEFAULT NULL,
  KEY `user` (`user`(6))
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`user`, `pass`) VALUES
('samrawit', 'samri'),
('ergete', 'ergete');


-- --------------------------------------------------------




  
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
