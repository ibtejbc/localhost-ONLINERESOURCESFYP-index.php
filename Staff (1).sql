-- phpMyAdmin SQL Dump
-- version 4.4.15.8
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 26, 2018 at 03:17 AM
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
-- Table structure for table `Staff`
--

CREATE TABLE IF NOT EXISTS `Staff` (
  `UserID` varchar(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Firstname` varchar(250) NOT NULL,
  `Lastname` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `PhoneNo` int(10) NOT NULL,
  `DepartmentCourse` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Staff`
--

INSERT INTO `Staff` (`UserID`, `Username`, `Password`, `Firstname`, `Lastname`, `Email`, `PhoneNo`, `DepartmentCourse`) VALUES
('U1', 'Pijah', '123', 'Pijah\r\n', 'Mohammad Rapi', 'fizah168@gmail.com', 9999999, 'SICT Department'),
('U10', 'tupai', '123456789', 'faris', 'Safri', '@gmail.com', 2226111, 'SICT Department'),
('U2', 'Faiz', '234', 'Mohammad Faiz', 'Haji Awang Abdullah', 'Faiz@gmail.com', 35834567, 'SICT Department'),
('U3', 'Bash', '345', 'Nurul Basyirah', 'Haji Roslan', 'Bash@gmail.com', 75648276, 'BSE Department'),
('U5', 'Tiqah', '374', 'NurAtiqah', 'Napiah', 'Tiqah@gmail.com', 4785746, 'BMA Department'),
('U6', 'idah', '564', 'Noridah', 'Abdullah', 'idah@gmail.com', 7563856, 'ICE Department'),
('U8', 'Aira', '745', 'Nur Aira', 'Fadhli', 'Aira@hotmail.com', 7395727, 'SICT Department'),
('U9', 'Faris', '371', 'Muhammad Faris Ar-Rahman', 'Muhammad Safri', 'faris@gmail.com', 3658365, 'HnTec Information Technology');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Staff`
--
ALTER TABLE `Staff`
  ADD PRIMARY KEY (`UserID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
