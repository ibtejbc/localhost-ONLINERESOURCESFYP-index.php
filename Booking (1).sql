-- phpMyAdmin SQL Dump
-- version 4.4.15.8
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 26, 2018 at 03:16 AM
-- Server version: 5.6.31
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Online`
--

-- --------------------------------------------------------

--
-- Table structure for table `Booking`
--

CREATE TABLE IF NOT EXISTS `Booking` (
  `BookingID` int(11) NOT NULL,
  `UserID` varchar(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Department` varchar(250) NOT NULL,
  `Room` varchar(250) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `StartTime` time NOT NULL,
  `EndTime` time NOT NULL,
  `Reason` varchar(30) NOT NULL,
  `Status` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Booking`
--

INSERT INTO `Booking` (`BookingID`, `UserID`, `Username`, `Department`, `Room`, `StartDate`, `EndDate`, `StartTime`, `EndTime`, `Reason`, `Status`) VALUES
(38, 'U1', 'Pijah', 'Surau Department', 'Surau', '2018-02-00', '2018-02-00', '13:10:00', '13:30:00', 'Prayer', 'Approved'),
(40, 'U1', 'Pijah', 'SICT', 'Surau', '2018-02-01', '2018-02-01', '13:00:00', '13:10:00', 'Prayer', 'Approved'),
(41, 'U1', 'Pijah', 'SICT Department', 'Surau', '2018-02-02', '2018-02-02', '13:00:00', '13:10:00', 'Prayer', ' Approved'),
(42, 'U1', 'Pijah', 'SICT Department', 'Surau', '2018-02-01', '2018-02-01', '13:00:00', '14:10:00', 'Prayer', 'Pending'),
(43, 'U1', 'Pijah', 'SICT Department', 'Training Room1', '2018-02-06', '2018-02-06', '13:00:00', '13:00:00', 'Tour', 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Booking`
--
ALTER TABLE `Booking`
  ADD PRIMARY KEY (`BookingID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Booking`
--
ALTER TABLE `Booking`
  MODIFY `BookingID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
