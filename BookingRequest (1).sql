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
-- Table structure for table `BookingRequest`
--

CREATE TABLE IF NOT EXISTS `BookingRequest` (
  `RequestBookingID` int(11) NOT NULL,
  `UserID` varchar(11) NOT NULL,
  `Username` varchar(250) NOT NULL,
  `Course` varchar(250) NOT NULL,
  `Room` varchar(250) NOT NULL,
  `RequestStartDate` date NOT NULL,
  `RequestEndDate` date NOT NULL,
  `RequestStartTime` time NOT NULL,
  `RequestEndTime` time NOT NULL,
  `RequestSendTo` varchar(250) NOT NULL,
  `Reason` varchar(30) NOT NULL,
  `Status` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `BookingRequest`
--

INSERT INTO `BookingRequest` (`RequestBookingID`, `UserID`, `Username`, `Course`, `Room`, `RequestStartDate`, `RequestEndDate`, `RequestStartTime`, `RequestEndTime`, `RequestSendTo`, `Reason`, `Status`) VALUES
(6, 'S1', 'Faris', 'Hntec Information Technology', 'Surau', '2018-02-01', '2018-02-01', '13:00:00', '13:10:00', 'Miss Pijah', 'Prayer', 'Approved'),
(7, 'S3', 'Faiz', 'Hntec Computer Networking', 'Surau', '2018-02-12', '2018-02-12', '01:03:00', '03:00:00', 'Sir Alias', 'Prayer', 'Pending'),
(8, 'S1', 'Faris', 'HnTec Information Technology', 'Surau', '2018-02-26', '2018-02-26', '13:00:00', '13:10:00', 'Miss Pijah', 'Nasyid', 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `BookingRequest`
--
ALTER TABLE `BookingRequest`
  ADD PRIMARY KEY (`RequestBookingID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `BookingRequest`
--
ALTER TABLE `BookingRequest`
  MODIFY `RequestBookingID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
