-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2019 at 03:29 PM
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
CREATE DEFINER=`root`@`localhost` PROCEDURE `register` (IN `USR_ID` VARCHAR(200), IN `FST_NAME` VARCHAR(200), IN `LST_NAME` VARCHAR(200), IN `GENDER` VARCHAR(200), IN `USR_NAME` VARCHAR(200), IN `EMAIL` VARCHAR(200), IN `PASSWORD` VARCHAR(200))  NO SQL
insert into usr_rgstraton(USR_ID,FST_NAME,LST_NAME,GENDER,USR_NAME,EMAIL,PASSWORD) VALUES(USR_ID,FST_NAME,LST_NAME,GENDER,USR_NAME,EMAIL,PASSWORD)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SELECT` ()  NO SQL
SELECT * FROM usr_rgstraton$$

DELIMITER ;

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
(4, 'C009', 'ABC', 'XYZ', 'Male', 'abcde', 'abc@gmail.com', '123', '2019-01-28 14:28:36', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usr_rgstraton`
--
ALTER TABLE `usr_rgstraton`
  ADD PRIMARY KEY (`PK_REG_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usr_rgstraton`
--
ALTER TABLE `usr_rgstraton`
  MODIFY `PK_REG_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
