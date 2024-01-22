-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 23, 2021 at 05:24 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `civilstud`
--

DROP TABLE IF EXISTS `civilstud`;
CREATE TABLE IF NOT EXISTS `civilstud` (
  `name` varchar(255) NOT NULL,
  `clgname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `prn` varchar(80) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `stream` varchar(20) NOT NULL,
  UNIQUE KEY `prn` (`prn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `civilstud`
--

INSERT INTO `civilstud` (`name`, `clgname`, `email`, `prn`, `username`, `password`, `dept`, `stream`) VALUES
('Vedika Rajput', 'svkm-iot', 'rajjvedika.27@gmail.com', '185441245181', 'rajjvedika', '123', 'Civil', '1st Year'),
('Kartik Shimpi', 'svkm-iot', 'kartiks112@gmail.com', '185441245182', 'kartiks11', '123', 'Civil', '1st Year'),
('Riddi Patil', 'svkm-iot', 'patilRids88@gmail.com', '185441245183', 'patilRids8', '123', 'Civil', '1st Year'),
('Nikita Surana', 'svkm-iot', 'Nsurana@gmail.com', '185441245184', 'Nsurana@13', '123', 'Civil', '1st Year'),
('Divya Thakare', 'svkm-iot', 'divyathakre@gmail.com', '185441245185', 'Divyathakre@81', '123', 'Civil', '1st Year'),
('Tanvi Jain', 'svkm-iot', 'jaintanu11@gmail.com', '185441245191', 'jaintanu11', '123', 'Civil', '2nd Year'),
('Dipti Patil', 'svkm-iot', 'diptiPatil@gmail.com', '185441245192', 'diptip12', '123', 'Civil', '2nd Year'),
('Priyank Badgujar', 'svkm-iot', 'priyank123@gmail.com', '185441245193', 'priyank123', '123', 'Civil', '2nd Year'),
('Shweta Joshi', 'svkm-iot', 'Jshweta@gmail.com', '185441245194', 'Jshweta@3', '123', 'Civil', '2nd Year'),
('Shantanu Rajput', 'svkm-iot', 'rajShantanu@gmail.com', '185441245195', 'Srajput@137', '123', 'Civil', '2nd Year'),
('Tejas Ahire', 'svkm-iot', 'tejashire@gmail.com', '185441245171', 'tejashire66', '123', 'Civil', '3rd Year'),
('Pushkar Sonwane', 'svkm-iot', 'Spushkar281@gmail.com', '185441245172', 'Spushkar28', '123', 'Civil', '3rd Year'),
('Bhargavi Borse', 'svkm-iot', 'bharGvib122@gmail.com', '185441245173', 'bharGvib12', '123', 'Civil', '3rd Year'),
('Aarti Dhangar', 'svkm-iot', 'daarti07@gmail.com', '185441245174', 'daarti07', '123', 'Civil', '3rd Year'),
('Rohit Sharma', 'svkm-iot', 'rlsharma@gmail.com', '185441245175', 'rohitS48', '123', 'Civil', '3rd Year'),
('Khushboo Sawant', 'svkm-iot', 'KSwant11@gmail.com', '185441245151', 'KSwant11', '123', 'Civil', '4th Year'),
('Gayatri More', 'svkm-iot', 'GaytriM31@gmail.com', '185441245152', 'GaytriM31', '123', 'Civil', '4th Year'),
('Dhiraj Patil', 'svkm-iot', 'dhirpatil@gmail.com', '185441245153', 'dhirpatil', '123', 'Civil', '4th Year'),
('Vipul Deore', 'svkm-iot', 'vipulDeore@gmail.com', '185441245154', 'vipulD11', '123', 'Civil', '4th Year'),
('Shri Patil', 'svkm-iot', 'shrip001@gmail.com', '185441245155', 'shriP00', '123', 'Civil', '4th Year');

-- --------------------------------------------------------

--
-- Table structure for table `electstud`
--

DROP TABLE IF EXISTS `electstud`;
CREATE TABLE IF NOT EXISTS `electstud` (
  `name` varchar(255) NOT NULL,
  `clgname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `prn` varchar(255) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `stream` varchar(20) NOT NULL,
  UNIQUE KEY `prn` (`prn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `electstud`
--

INSERT INTO `electstud` (`name`, `clgname`, `email`, `prn`, `username`, `password`, `dept`, `stream`) VALUES
('Kartik Shimpi', 'svkm-iot', 'kartiks112@gmail.com', '155441245084', 'kartiks11', '123', 'Electrical', '1st Year'),
('Riddi Patil', 'svkm-iot', 'patilRids88@gmail.com', '155441245081', 'patilRids8', '123', 'Electrical', '1st Year'),
('Nikhil Surana', 'svkm-iot', 'Nsurana@gmail.com', '155441245085', 'Nsurana@13', '123', 'Electrical', '1st Year'),
('Divya Thakare', 'svkm-iot', 'divyathakre@gmail.com', '15441245083', 'Divyathakre@81', '123', 'Electrical', '1st Year'),
('Pratik Varade', 'svkm-iot', 'pRVarade@gmail.com', '155441245182', 'pRVarade1', '123', 'Electrical', '1st Year'),
('Monish Surana', 'svkm-iot', 'Msurana@gmail.com', '155441245195', 'surana@13', '123', 'Electrical', '2nd Year'),
('Aachal Patil', 'svkm-iot', 'patilachal@gmail.com', '155441245191', 'pachal8', '123', 'Electrical', '2nd Year'),
('Rushikesh Patil', 'svkm-iot', 'PRushi@gmail.com', '155441245192', 'pRushi@137', '123', 'Electrical', '2nd Year'),
('Shweta Joshi', 'svkm-iot', 'Jshweta@gmail.com', '155441245093', 'Jshweta@3', '123', 'Electrical', '2nd Year'),
('Shantanu Rajput', 'svkm-iot', 'rajShantanu@gmail.com', '155441245094', 'Srajput@137', '123', 'Electrical', '2nd Year'),
('Tejas Wakale', 'svkm-iot', 'tejashire@gmail.com', '155441245161', 'tejashire66', '123', 'Electrical', '3rd Year'),
('Aarti Sharma', 'svkm-iot', 'Saarti07@gmail.com', '155441245164', 'Saarti07', '123', 'Electrical', '3rd Year'),
('Jayesh Jadhav', 'svkm-iot', 'jayJ12@gmail.com', '155441245165', 'jayJ12', '123', 'Electrical', '3rd Year'),
('Gaurav Wagh', 'svkm-iot', 'Gwagh281@gmail.com', '155441245162', 'Gwagh281', '123', 'Electrical', '3rd Year'),
('Rohan Suryawanshi', 'svkm-iot', 'rpSuraywanshi@gmail.com', '155441245163', 'rpSuray!@', '123', 'Electrical', '3rd Year'),
('Khush Sawant', 'svkm-iot', 'KSwant11@gmail.com', '155441245151', 'KSwant11', '123', 'Electrical', '4th Year'),
('Shri Patil', 'svkm-iot', 'shrip001@gmail.com', '155441245054', 'shriP00', '123', 'Electrical', '4th Year'),
('Shrisant Patel', 'svkm-iot', 'shrip001@gmail.com', '155441245155', 'shriP00', '123', 'Electrical', '4th Year'),
('Gautam More', 'svkm-iot', 'GautamM31@gmail.com', '155441245152', 'GautamM31', '123', 'Electrical', '4th Year'),
('Mayur Shinde', 'svkm-iot', 'mayurS@gmail.com', '155441245153', 'mayurS12', '123', 'Electrical', '4th Year');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
CREATE TABLE IF NOT EXISTS `faculty` (
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `clgname` varchar(80) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dept` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`name`, `username`, `email`, `phone`, `clgname`, `password`, `dept`) VALUES
('Vijayalakshmi Bittal', 'abc12', 'abc@yahoo.com', '9645699929', 'svkm-iot', '123', 'Computer'),
('Yogesh Bafna', 'bafna12', 'bafna12@yahoo.com', '9645699921', 'svkm-iot', '123', 'Civil'),
('Gaurav Patil', 'Gpatil12', 'Gpatil12@yahoo.com', '9645634582', 'svkm-iot', '123', 'Electrical'),
('Nitin Kawde', 'NKawde12', 'nKawde12@yahoo.com', '8888964583', 'svkm-iot', '123', 'IT'),
('Satish Patil', 'Spatil12', 'spatil12@yahoo.com', '9687512341', 'svkm-iot', '123', 'Mechanical');

-- --------------------------------------------------------

--
-- Table structure for table `historynotice`
--

DROP TABLE IF EXISTS `historynotice`;
CREATE TABLE IF NOT EXISTS `historynotice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prn` varchar(30) DEFAULT '195441245070',
  `name` varchar(30) DEFAULT NULL,
  `section` varchar(30) NOT NULL,
  `company` varchar(100) NOT NULL,
  `applied date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `historynotice`
--

INSERT INTO `historynotice` (`id`, `prn`, `name`, `section`, `company`, `applied date`) VALUES
(1, '195441245071', 'Pushkar Joshi', 'Competitive Exam', 'Wipro', '2021-06-21 10:25:41'),
(2, '195441245069', 'Darshana Borse', 'Trainings', 'Cybrary', '2021-06-21 12:39:26'),
(3, '195441245072', 'Rohit Patil', 'Internships', 'Net4u', '2021-06-21 12:40:17'),
(6, '195441245083', 'Divyesh Bramhe', 'Competitive Exam', 'TCS', '2021-06-21 03:25:41'),
(4, '195441245080', 'Pooja Katke', 'Internships', 'Net4u', '2021-06-21 12:52:51'),
(5, '195441245081', 'Vishal Patil', 'Trainings', 'Zensar', '2021-06-21 12:52:51'),
(7, '195441245092', 'Vinit Shimpi', 'Trainings', 'Cybrary', '2021-06-21 01:39:26'),
(8, '195441245091', 'Darshan Patil', 'Competitive Exam', 'Accenture', '2021-06-21 09:40:17'),
(9, '195441245094', 'Shantanu Rajput', 'Internships', 'Azure', '2021-06-21 08:52:51'),
(10, '195441245050', 'Gaurav Shimpi', 'Competitive Exam', 'Accenture', '2021-06-21 12:52:51'),
(11, '195441245053', 'Mrudul Patil', 'Trainings', 'Zensar', '2021-06-21 02:52:51'),
(12, '195441245054', 'Rajshri Patil', 'Internships', 'Azure', '2021-06-21 04:52:51');

-- --------------------------------------------------------

--
-- Table structure for table `historynotice1`
--

DROP TABLE IF EXISTS `historynotice1`;
CREATE TABLE IF NOT EXISTS `historynotice1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prn` varchar(30) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `section` varchar(30) NOT NULL,
  `company` varchar(100) NOT NULL,
  `applied date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `historynotice1`
--

INSERT INTO `historynotice1` (`id`, `prn`, `name`, `section`, `company`, `applied date`) VALUES
(1, '185441245183', 'Riddi Patil', 'Competitive Exam', 'TCS', '2021-06-21 03:25:41'),
(2, '185441245185', 'Divya Thakare', 'Trainings', 'Cybrary', '2021-06-21 01:39:26'),
(3, '185441245181', 'Vedika Rajput', 'Internships', 'Accenture', '2021-06-21 12:40:17'),
(4, '185441245191', 'Tanvi Jain', 'Internships', 'Azure', '2021-06-21 12:52:51'),
(5, '185441245192', 'Dipti Patil', 'Competitive Exam', 'Nptel ', '2021-06-21 12:52:51'),
(6, '185441245193', 'Priyank Badgujar', 'Trainings', 'Cybrary', '2021-06-21 12:52:51'),
(7, '185441245171', 'Tejas Ahire', 'Internships', 'Zensar', '2021-06-21 12:52:51'),
(8, '185441245172', 'Pushkar Sonwane', 'Competitive Exam', 'TCS', '2021-06-21 03:25:41'),
(9, '185441245173', 'Bhargavi Borse', 'Trainings', 'Cybrary', '2021-06-21 01:39:26'),
(10, '185441245152', 'Khushboo Sawant', 'Trainings', 'Cybrary', '2021-06-21 12:40:17'),
(11, '185441245153', 'Dhiraj Patil', 'Internships', 'Azure', '2021-06-21 12:52:51'),
(12, '185441245154', 'Vipul Deore', 'Competitive Exam', 'Nptel ', '2021-06-21 12:52:51');

-- --------------------------------------------------------

--
-- Table structure for table `historynotice2`
--

DROP TABLE IF EXISTS `historynotice2`;
CREATE TABLE IF NOT EXISTS `historynotice2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prn` varchar(30) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `section` varchar(30) NOT NULL,
  `company` varchar(100) NOT NULL,
  `applied date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `historynotice2`
--

INSERT INTO `historynotice2` (`id`, `prn`, `name`, `section`, `company`, `applied date`) VALUES
(4, '185441245191', 'Tanvi Jain', 'Internships', 'Azure', '2021-06-21 12:52:51'),
(5, '185441245192', 'Dipti Patil', 'Competitive Exam', 'Nptel ', '2021-06-21 12:52:51'),
(6, '185441245193', 'Priyank Badgujar', 'Trainings', 'Cybrary', '2021-06-21 12:52:51'),
(7, '185441245171', 'Tejas Ahire', 'Internships', 'Zensar', '2021-06-21 12:52:51'),
(8, '185441245172', 'Pushkar Sonwane', 'Competitive Exam', 'TCS', '2021-06-21 03:25:41'),
(9, '185441245173', 'Bhargavi Borse', 'Trainings', 'Cybrary', '2021-06-21 01:39:26'),
(1, '185441245183', 'Riddi Patil', 'Competitive Exam', 'TCS', '2021-06-21 03:25:41'),
(2, '185441245185', 'Divya Thakare', 'Trainings', 'Cybrary', '2021-06-21 01:39:26'),
(3, '185441245181', 'Vedika Rajput', 'Internships', 'Accenture', '2021-06-21 12:40:17'),
(10, '185441245152', 'Khushboo Sawant', 'Trainings', 'Cybrary', '2021-06-21 12:40:17'),
(11, '185441245153', 'Dhiraj Patil', 'Internships', 'Azure', '2021-06-21 12:52:51'),
(12, '185441245154', 'Vipul Deore', 'Competitive Exam', 'Nptel ', '2021-06-21 12:52:51');

-- --------------------------------------------------------

--
-- Table structure for table `itstud`
--

DROP TABLE IF EXISTS `itstud`;
CREATE TABLE IF NOT EXISTS `itstud` (
  `name` varchar(255) NOT NULL,
  `clgname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `prn` varchar(255) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `stream` varchar(20) NOT NULL,
  UNIQUE KEY `prn` (`prn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itstud`
--

INSERT INTO `itstud` (`name`, `clgname`, `email`, `prn`, `username`, `password`, `dept`, `stream`) VALUES
('Darshan Patil', 'svkm-iot', 'darshP12@gmail.com', '16441245191', 'darshp12', '123', 'IT', '1st Year'),
('Manasi Dhangar', 'svkm-iot', 'dManasi07@gmail.com', '165441245192', 'manasiDhangar', '123', 'IT', '1st Year'),
('Monish Surana', 'svkm-iot', 'Msurana@gmail.com', '165441245193', 'surana@13', '123', 'IT', '1st Year'),
('Pratik Varade', 'svkm-iot', 'pRVarade@gmail.com', '165441245194', 'pRVarade1', '123', 'IT', '1st Year'),
('Aachal Patil', 'svkm-iot', 'patilachal@gmail.com', '165441245195', 'pachal8', '123', 'IT', '1st Year'),
('Bhargav Mehta', 'svkm-iot', 'bharGavM122@gmail.com', '165441245181', 'bharGavM12', '123', 'IT', '2nd Year'),
('Chirag Patel', 'svkm-iot', 'chiragP123@gmail.com', '165441245182', 'chiragP123@', '123', 'IT', '2nd Year'),
('Shweta Pawar', 'svkm-iot', 'Pshweta@gmail.com', '165441245183', 'Pshweta@3', '123', 'IT', '2nd Year'),
('Rushikesh Patil', 'svkm-iot', 'PRushi@gmail.com', '165441245184', 'pRushi@137', '123', 'IT', '2nd Year'),
('Vinit Shimpi', 'svkm-iot', 'vinit11@gmail.com', '165441245185', 'vinitS11', '123', 'IT', '2nd Year'),
('Tejas Wakale', 'svkm-iot', 'tejashire@gmail.com', '165441245161', 'tejashire66', '123', 'IT', '3rd Year'),
('Aarti Sharma', 'svkm-iot', 'Saarti07@gmail.com', '165441245164', 'Saarti07', '123', 'IT', '3rd Year'),
('Jayesh Jadhav', 'svkm-iot', 'jayJ12@gmail.com', '165441245165', 'jayJ12', '123', 'IT', '3rd Year'),
('Gaurav Wagh', 'svkm-iot', 'Gwagh281@gmail.com', '165441245162', 'Gwagh281', '123', 'IT', '3rd Year'),
('Rohit Patil', 'svkm-iot', 'rppatil@gmail.com', '165441245163', 'rohitp48', '123', 'IT', '3rd Year'),
('Khush Sawant', 'svkm-iot', 'KSwant11@gmail.com', '165441245151', 'KSwant11', '123', 'IT', '4th Year'),
('Niyukti Deore', 'svkm-iot', 'NiyuDeore@gmail.com', '165441245154', 'NiyuD11', '123', 'IT', '4th Year'),
('Shrisant Patel', 'svkm-iot', 'shrip001@gmail.com', '165441245155', 'shriP00', '123', 'IT', '4th Year'),
('Gautam More', 'svkm-iot', 'GautamM31@gmail.com', '165441245152', 'GautamM31', '123', 'IT', '4th Year'),
('Mayur Shinde', 'svkm-iot', 'mayurS@gmail.com', '165441245153', 'mayurS12', '123', 'IT', '4th Year');

-- --------------------------------------------------------

--
-- Table structure for table `mechstud`
--

DROP TABLE IF EXISTS `mechstud`;
CREATE TABLE IF NOT EXISTS `mechstud` (
  `name` varchar(255) NOT NULL,
  `clgname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `prn` varchar(100) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `stream` varchar(20) NOT NULL,
  UNIQUE KEY `prn` (`prn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mechstud`
--

INSERT INTO `mechstud` (`name`, `clgname`, `email`, `prn`, `username`, `password`, `dept`, `stream`) VALUES
('Vedanti Suryawanshi', 'svkm-iot', 'vedatiS18@gmail.com', '175441245181', 'vedatiS18', '123', 'Mechanical', '1st Year'),
('Sarang Girase', 'svkm-iot', 'giraseS112@gmail.com', '175441245182', 'giraseS11', '123', 'Mechanical', '1st Year'),
('Aachal Patil', 'svkm-iot', 'patilachal@gmail.com', '175441245183', 'pachal8', '123', 'Mechanical', '1st Year'),
('Monish Surana', 'svkm-iot', 'Msurana@gmail.com', '175441245184', 'surana@13', '123', 'Mechanical', '1st Year'),
('Pratik Varade', 'svkm-iot', 'pRVarade@gmail.com', '175441245185', 'pRVarade1', '123', 'Mechanical', '1st Year'),
('Tanishka Hire', 'svkm-iot', 'hiRetanu11@gmail.com', '175441245191', 'hiRetanu1', '123', 'Mechanical', '2nd Year'),
('Khushal Chaudhari', 'svkm-iot', 'Ckhushal@gmail.com', '175441245192', 'Ckhushal', '123', 'Mechanical', '2nd Year'),
('Chirag Patel', 'svkm-iot', 'chiragP123@gmail.com', '175441245193', 'chiragP123@', '123', 'Mechanical', '2nd Year'),
('Shweta Pawar', 'svkm-iot', 'Pshweta@gmail.com', '175441245194', 'Pshweta@3', '123', 'Mechanical', '2nd Year'),
('Rushikesh Jagtap', 'svkm-iot', 'jagtapRushi@gmail.com', '175441245195', 'jagtapRushi@137', '123', 'Mechanical', '2nd Year'),
('Tejas Wakale', 'svkm-iot', 'tejashire@gmail.com', '175441245171', 'tejashire66', '123', 'Mechanical', '3rd Year'),
('Gaurav Wagh', 'svkm-iot', 'Gwagh281@gmail.com', '175441245172', 'Gwagh281', '123', 'Mechanical', '3rd Year'),
('Bhargav Mehta', 'svkm-iot', 'bharGavM122@gmail.com', '175441245173', 'bharGavM12', '123', 'Mechanical', '3rd Year'),
('Aarti Sharma', 'svkm-iot', 'Saarti07@gmail.com', '175441245174', 'Saarti07', '123', 'Mechanical', '3rd Year'),
('Jayesh Jadhav', 'svkm-iot', 'jayJ12@gmail.com', '175441245175', 'jayJ12', '123', 'Mechanical', '3rd Year'),
('Khush Sawant', 'svkm-iot', 'KSwant11@gmail.com', '175441245151', 'KSwant11', '123', 'Mechanical', '4th Year'),
('Gautam More', 'svkm-iot', 'GautamM31@gmail.com', '175441245152', 'GautamM31', '123', 'Mechanical', '4th Year'),
('Mayur Shinde', 'svkm-iot', 'mayurS@gmail.com', '175441245153', 'mayurS12', '123', 'Mechanical', '4th Year'),
('Niyukti Deore', 'svkm-iot', 'NiyuDeore@gmail.com', '185441245154', 'NiyuD11', '123', 'Mechanical', '4th Year'),
('Shrisant Patel', 'svkm-iot', 'shrip001@gmail.com', '175441245155', 'shriP00', '123', 'Mechanical', '4th Year');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
CREATE TABLE IF NOT EXISTS `profile` (
  `prn` varchar(30) NOT NULL,
  `cgpa` varchar(10) NOT NULL,
  `skills` varchar(100) NOT NULL,
  `project` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `git` varchar(80) NOT NULL,
  `hacker` varchar(255) NOT NULL,
  `proimg` text NOT NULL,
  UNIQUE KEY `prn` (`prn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`prn`, `cgpa`, `skills`, `project`, `link`, `git`, `hacker`, `proimg`) VALUES
('195441245070', '9.10', 'C Languag HTML, CSS JavaScript Java  Python Php', 'T&P project, never ending footstep(Travel Blog), waste management ', 'www.linkedin.com/in/nikita-hire-a70238193', 'www.git-hub/nikita12-hire', 'https://www.hackerrank.com/nikitashire', 'nikita.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `name` varchar(255) NOT NULL,
  `clgname` varchar(80) NOT NULL,
  `email` varchar(30) NOT NULL,
  `prn` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `stream` varchar(20) NOT NULL,
  UNIQUE KEY `prn` (`prn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `clgname`, `email`, `prn`, `username`, `password`, `dept`, `stream`) VALUES
('Nikita Hire', 'svkm-iot', 'nikitashire@gmail.com', '195441245070', 'nik_hire', '123', 'Computer', '3rd Year'),
('Darshana Borse', 'svkm-iot', 'darshb12@gmail.com', '195441245069', 'darshborse12', '123', 'Computer', '3rd Year'),
('Gaurav Shimpi', 'svkm-iot', 'gaurav11@gmail.com', '195441245050', 'gaurav11', '123', 'Computer', '4th Year'),
('Dnyanal Gavale', 'svkm-iot', 'dnyanalG13@gmail.com', '195441245085', 'dnyanalG13', '123', 'Computer', '1st Year'),
('Janvi Rajput', 'svkm-iot', 'rajjanvi.27@gmail.com', '195441245084', 'janvi@37', '123', 'Computer', '1st Year'),
('Pooja Katke', 'svkm-iot', 'poojakatke0001@gmail.com', '195441245080', 'poojakatke00', '123', 'Computer', '1st Year'),
('Vishal Patil', 'svkm-iot', 'vishalpatil86988@gmail.com', '195441245081', 'vishalpatil86', '123', 'Computer', '1st Year'),
('Divyesh Bramhe', 'svkm-iot', 'divyeshsbramhe@gmail.com', '195441245083', 'DSbramhe@81', '123', 'Computer', '1st Year'),
('Vinit Shimpi', 'svkm-iot', 'vinit11@gmail.com', '195441245092', 'vinitS11', '123', 'Computer', '2nd Year'),
('Darshan Patil', 'svkm-iot', 'darshP12@gmail.com', '195441245091', 'darshp12', '123', 'Computer', '2nd Year'),
('Manasi Dhangar', 'svkm-iot', 'dManasi07@gmail.com', '195441245074', 'manasiDhangar', '123', 'Computer', '3rd Year'),
('Pushkar Joshi', 'svkm-iot', 'jpushkar28@gmail.com', '195441245071', 'JoshiP@28', '123', 'Computer', '3rd Year'),
('Rohit Patil', 'svkm-iot', 'rppatil@gmail.com', '195441245072', 'rohitp48', '123', 'Computer', '3rd Year'),
('Vipul Joshi', 'svkm-iot', 'vipulJoshi@gmail.com', '195441245051', 'vipul11', '123', 'Computer', '4th Year'),
('Gayatri Pande', 'svkm-iot', 'GaytriP13@gmail.com', '195441245052', 'Gaytri13', '123', 'Computer', '4th Year'),
('Mrudul Patil', 'svkm-iot', 'mrudulpatil@gmail.com', '195441245053', 'mrudul@137', '123', 'Computer', '4th Year'),
('Rajshri Patil', 'svkm-iot', 'rajshrip001@gmail.com', '195441245054', 'rajshrip00', '123', 'Computer', '4th Year'),
('Payal Badgujar', 'svkm-iot', 'payal123@gmail.com', '195441245090', 'payalb12', '123', 'Computer', '2nd Year'),
('Mrudul Gavale', 'svkm-iot', 'mrudulG13@gmail.com', '195441245093', 'mrudulG13', '123', 'Computer', '2nd Year'),
('Shantanu Rajput', 'svkm-iot', 'rajShantanu@gmail.com', '195441245094', 'Srajput@37', '123', 'Computer', '2nd Year');

-- --------------------------------------------------------

--
-- Table structure for table `tpo`
--

DROP TABLE IF EXISTS `tpo`;
CREATE TABLE IF NOT EXISTS `tpo` (
  `clgname` varchar(80) NOT NULL,
  `clgcode` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tpo`
--

INSERT INTO `tpo` (`clgname`, `clgcode`, `username`, `email`, `phone`, `password`) VALUES
('SVKM-IOT', '5449', 'svkm@iot', 'studentsapeducation@svkm.ac.in', '9867375731', '123');

-- --------------------------------------------------------

--
-- Table structure for table `uploadattach`
--

DROP TABLE IF EXISTS `uploadattach`;
CREATE TABLE IF NOT EXISTS `uploadattach` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `section` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `company` varchar(80) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `file` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `file` (`file`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploadattach`
--

INSERT INTO `uploadattach` (`id`, `section`, `date`, `company`, `description`, `category`, `file`) VALUES
(1, 'Competitive Exam', '2021-06-11', 'Wipro', 'Wipro Exam timetable', 'To All', 'file1.pdf'),
(2, 'Trainings', '2021-06-06', 'Internshala', 'Internshala Summer edition', '1st Year', 'file2.pdf'),
(3, 'Internships', '2021-06-19', 'Azure', 'Microsoft azure internships', '2nd Year', 'file3.pdf'),
(4, 'Competitive Exam', '2021-06-12', 'TCs', 'assessments', '3rd  Year', 'resume.pdf'),
(5, 'Competitive Exam', '2021-06-17', 'Accenture', 'Interview is schedule on 2 june', '4th Year', 'notice1.pdf'),
(6, 'Trainings', '2021-06-26', 'Zensar', 'Training on machine learning', 'To All', 'sample.txt'),
(7, 'Trainings', '2021-06-26', 'Cybrary', 'Training on computer security', '3rd Year', 'honeypot paper.txt'),
(8, 'Internships', '2021-06-27', 'Shiksha ', 'Campus Ambassador ', '2nd Year', 'file4.pdf'),
(9, 'Internships', '2021-06-01', 'Net4u ', 'Content Writing', '1st Year', 'file6.pdf'),
(10, 'Competitive Exam', '2021-06-26', 'Nptel ', 'Exam starting from 23 july', 'To All', 'Timetable.pdf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
