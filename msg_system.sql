-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2019 at 08:18 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

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

CREATE DEFINER=`root`@`localhost` PROCEDURE `register` (IN `USR_ID` VARCHAR(200), IN `FST_NAME` VARCHAR(200), IN `LST_NAME` VARCHAR(200), IN `GENDER` VARCHAR(200), IN `USR_NAME` VARCHAR(200), IN `EMAIL` VARCHAR(200), IN `PASSWORD` VARCHAR(200), IN `ROLE` VARCHAR(20))  NO SQL
insert into usr_rgstraton(USR_ID,FST_NAME,LST_NAME,GENDER,USR_NAME,EMAIL,PASSWORD,ROLE) VALUES(USR_ID,FST_NAME,LST_NAME,GENDER,USR_NAME,EMAIL,PASSWORD,ROLE)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SELECT` ()  NO SQL
SELECT * FROM usr_rgstraton$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `PK_MSG_ID` int(11) NOT NULL,
  `FK_REG_ID` int(11) NOT NULL,
  `USR_NAME` varchar(20) NOT NULL,
  `MESSAGE` text NOT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `UPDATED_AT` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`PK_MSG_ID`, `FK_REG_ID`, `USR_NAME`, `MESSAGE`, `CREATED_AT`, `UPDATED_AT`) VALUES
(2, 31, 'abc', 'abc se new message', '2019-02-02 06:31:05', '0000-00-00 00:00:00'),
(3, 25, 'rajat', 'rajat\'s msg', '2019-02-02 06:33:20', '0000-00-00 00:00:00');

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
  `ROLE` varchar(20) NOT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `UPDATED_AT` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usr_rgstraton`
--

INSERT INTO `usr_rgstraton` (`PK_REG_ID`, `USR_ID`, `FST_NAME`, `LST_NAME`, `GENDER`, `USR_NAME`, `EMAIL`, `PASSWORD`, `ROLE`, `CREATED_AT`, `UPDATED_AT`) VALUES
(22, 'AA0001', 'Devesh', 'Manjrekar', 'Male', 'devesh', 'devesh@gmail.com', '123123', 'Admin', '2019-02-01 07:03:14', '0000-00-00 00:00:00'),
(23, 'U00001', 'Shashi', 'Soni', 'Male', 'shashi', 'shashi@gmail.com', '123123', 'User', '2019-02-01 07:04:49', '0000-00-00 00:00:00'),
(24, 'U00002', 'Akshay', 'Mistry', 'Male', 'akshay', 'akshay@gmail.com', '123123', 'User', '2019-02-01 07:05:45', '0000-00-00 00:00:00'),
(25, 'U00003', 'Rajat', 'Pandey', 'Male', 'rajat', 'rajat@gmail.com', '123123', 'User', '2019-02-01 07:07:06', '0000-00-00 00:00:00'),
(26, 'U00004', 'Bonie', 'Sahdev', 'Male', 'bonie', 'bonie@gmail.com', '123123', 'User', '2019-02-01 07:08:40', '0000-00-00 00:00:00'),
(27, '008', 'sharukh ', 'khan', 'Male', 'srk', 'srk05@gmal.com', 'kingkhan', 'Admin', '2019-02-01 17:18:52', '0000-00-00 00:00:00'),
(28, '009', 'salman', 'khan', 'Male', 'salu', 'salman@gmail.com', '123123', 'User', '2019-02-01 17:21:04', '0000-00-00 00:00:00'),
(29, 'A010', 'dummy', 'user', 'Male', 'dummy_admn', 'admiin@gmail.com', '123123', 'Admin', '2019-02-02 03:41:57', '0000-00-00 00:00:00'),
(30, 'a011', 'dummy', 'user', 'Male', 'dummy_usr', 'user@gmail.com', '123123', 'User', '2019-02-02 03:42:51', '0000-00-00 00:00:00'),
(31, 'Z01', 'abc', 'xyz', 'Male', 'abc', 'abc@gmail.com', '123123', 'User', '2019-02-02 06:22:31', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`PK_MSG_ID`),
  ADD KEY `F_usr_rgstraton_FK_REG_ID` (`FK_REG_ID`);

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
  MODIFY `PK_MSG_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usr_rgstraton`
--
ALTER TABLE `usr_rgstraton`
  MODIFY `PK_REG_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `F_usr_rgstraton_FK_REG_ID` FOREIGN KEY (`FK_REG_ID`) REFERENCES `usr_rgstraton` (`PK_REG_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
