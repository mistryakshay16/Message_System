-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2019 at 07:10 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `msg_system`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `login` (IN `EMAIL` VARCHAR(50), IN `PASSWORD` VARCHAR(50), IN `USR_NAME` VARCHAR(20))  SELECT EMAIL,PASSWORD,USR_NAME from usr_rgstraton where ((BINARY usr_rgstraton.USR_NAME = USR_NAME OR BINARY usr_rgstraton.EMAIL = EMAIL) and BINARY usr_rgstraton.PASSWORD = PASSWORD)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `register` (IN `USR_ID` VARCHAR(200), IN `FST_NAME` VARCHAR(200), IN `LST_NAME` VARCHAR(200), IN `GENDER` VARCHAR(200), IN `USR_NAME` VARCHAR(200), IN `EMAIL` VARCHAR(200), IN `PASSWORD` VARCHAR(200))  NO SQL
insert into usr_rgstraton(USR_ID,FST_NAME,LST_NAME,GENDER,USR_NAME,EMAIL,PASSWORD) VALUES(USR_ID,FST_NAME,LST_NAME,GENDER,USR_NAME,EMAIL,PASSWORD)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SELECT` ()  NO SQL
SELECT * FROM usr_rgstraton$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `PK_MSG_ID` int(11) NOT NULL,
  `FK_MSG_ID` int(20) NOT NULL,
  `MESSAGE` varchar(800) NOT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `UPDATED_AT` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`PK_MSG_ID`, `FK_MSG_ID`, `MESSAGE`, `CREATED_AT`, `UPDATED_AT`) VALUES
(1, 0, 'Akshayaaa', '2019-01-30 17:23:22', '0000-00-00 00:00:00'),
(2, 0, 'dddddd', '2019-01-30 17:46:16', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `usr_rgstraton`
--

CREATE TABLE `usr_rgstraton` (
  `PK_REG_ID` int(11) NOT NULL,
  `USR_ID` varchar(15) NOT NULL,
  `FST_NAME` varchar(20) NOT NULL,
  `LST_NAME` varchar(20) NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `USR_NAME` varchar(20) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PASSWORD` varchar(25) NOT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `UPDATED_AT` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usr_rgstraton`
--

INSERT INTO `usr_rgstraton` (`PK_REG_ID`, `USR_ID`, `FST_NAME`, `LST_NAME`, `GENDER`, `USR_NAME`, `EMAIL`, `PASSWORD`, `CREATED_AT`, `UPDATED_AT`) VALUES
(1, 'A001', 'Rajat', 'Pandey', 'male', 'rajat', 'pandey.rajat05@gmail.com', '123456', '2019-01-28 09:16:08', '0000-00-00 00:00:00'),
(2, 'B009', 'Bonie', 'Sachdev', 'Male', 'bony09', 'bony@gmail.com', '123', '2019-01-28 13:58:23', '0000-00-00 00:00:00'),
(3, 'B0009', 'bony', 'sachdev', 'Male', 'bony09', 'bony@gmail.com', '123', '2019-01-28 14:20:17', '0000-00-00 00:00:00'),
(4, 'C009', 'ABC', 'XYZ', 'Male', 'abcde', 'abc@gmail.com', '123', '2019-01-28 14:28:36', '0000-00-00 00:00:00'),
(5, 'AA01', 'Akshay', 'Mistry', 'Male', 'akshay16', 'mistryakshay16@gmail.com', '123456', '2019-01-28 14:48:41', '0000-00-00 00:00:00'),
(6, 'A0004', 'Ajay', 'Mistry', 'Male', 'ajay9769', 'ajay39@gmail.com', '123456', '2019-01-28 15:47:53', '0000-00-00 00:00:00'),
(7, 'AA0001', 'Shashi', 'Soni', 'Male', 'shashisoni', 'shashi@gmail.com', '123456', '2019-01-29 03:55:11', '0000-00-00 00:00:00'),
(8, 'AA0002', 'Rishabh', 'Pandey', 'Male', 'Rishabh', 'pandey.rajat05@gmail.com', '123456', '2019-01-29 08:27:59', '0000-00-00 00:00:00'),
(9, 'AA0003', 'Akshay', 'Mistry', 'Male', 'kapil', 'aa@gmailcom', '12345678', '2019-01-29 11:21:38', '0000-00-00 00:00:00'),
(10, 'AA0008', 'Umang', 'Dedhiya', 'Male', 'umang', 'umang@gmail.com', 'asdfgh', '2019-01-29 14:30:21', '0000-00-00 00:00:00'),
(11, 'AA0008', 'Umang', 'Dedhiya', 'Male', 'umang', 'umang@gmail.com', 'asdfgh', '2019-01-29 14:35:07', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`PK_MSG_ID`);

--
-- Indexes for table `usr_rgstraton`
--
ALTER TABLE `usr_rgstraton`
  ADD PRIMARY KEY (`PK_REG_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `PK_MSG_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usr_rgstraton`
--
ALTER TABLE `usr_rgstraton`
  MODIFY `PK_REG_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
