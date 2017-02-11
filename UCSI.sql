-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 03, 2015 at 05:06 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `UCSI`
--

-- --------------------------------------------------------

--
-- Table structure for table `Apointment`
--

CREATE TABLE IF NOT EXISTS `Apointment` (
  `ID` int(11) DEFAULT NULL,
  `student_Name` varchar(32) NOT NULL,
  `Time` time NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Apointment`
--

INSERT INTO `Apointment` (`ID`, `student_Name`, `Time`, `Date`) VALUES
(NULL, 'Chris', '08:00:00', '2015-04-22'),
(NULL, 'Tim', '10:00:00', '2015-02-05');

-- --------------------------------------------------------

--
-- Table structure for table `Logbook`
--

CREATE TABLE IF NOT EXISTS `Logbook` (
`ID` int(11) NOT NULL,
  `Student_ID` int(32) NOT NULL,
  `Student_NAME` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Date` date NOT NULL,
  `Faculty` text NOT NULL,
  `Comment` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Messages`
--

CREATE TABLE IF NOT EXISTS `Messages` (
  `User_Name` text NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Messages`
--

INSERT INTO `Messages` (`User_Name`, `Message`) VALUES
('John', 'Need to meet at 2pm'),
('Ms. Liew', 'Please come and see me at 12pm to discuss system progress'),
('Mr. Tan', 'Research paper format is in the handbook. Please download from LMS');

-- --------------------------------------------------------

--
-- Table structure for table `News`
--

CREATE TABLE IF NOT EXISTS `News` (
`ID` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `news` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `News`
--

INSERT INTO `News` (`ID`, `user_name`, `subject`, `news`) VALUES
(1, 'Mr. Cheah', 'Research Writing For Business', 'Dear Students the will be a report writing workshop on Thursday 22nd February 2015 at \r\n10am'),
(2, 'Ms. Lim', 'Turnitin Workshop', 'Dear students, there will be a Turnitin workshop this Friday to teach students how to use turniitin. Attendance is compulsory');

-- --------------------------------------------------------

--
-- Table structure for table `User_Login`
--

CREATE TABLE IF NOT EXISTS `User_Login` (
  `Student_ID` int(32) NOT NULL,
  `Password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User_Login`
--

INSERT INTO `User_Login` (`Student_ID`, `Password`) VALUES
(1001025116, 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Apointment`
--
ALTER TABLE `Apointment`
 ADD UNIQUE KEY `student_Name` (`student_Name`), ADD KEY `ID` (`ID`);

--
-- Indexes for table `Logbook`
--
ALTER TABLE `Logbook`
 ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `News`
--
ALTER TABLE `News`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `User_Login`
--
ALTER TABLE `User_Login`
 ADD PRIMARY KEY (`Student_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Logbook`
--
ALTER TABLE `Logbook`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `News`
--
ALTER TABLE `News`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
