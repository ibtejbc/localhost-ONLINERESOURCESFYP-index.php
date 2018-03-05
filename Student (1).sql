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
-- Table structure for table `Student`
--

CREATE TABLE IF NOT EXISTS `Student` (
  `UserID` varchar(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Firstname` varchar(250) NOT NULL,
  `Lastname` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `PhoneNo` int(10) NOT NULL,
  `Course` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Student`
--

INSERT INTO `Student` (`UserID`, `Username`, `Password`, `Firstname`, `Lastname`, `Email`, `PhoneNo`, `Course`) VALUES
('S1', 'Faris', '456', 'FarisAr', 'Muhammad Safri', 'faris@gmail.com', 8888888, 'HnTec Information Technology'),
('S2', 'Bash', '123', 'Nurul Basyirah', 'Haji Roslan', 'Bash@gmail.com', 888888, 'Hntec Building Services Engineering'),
('S3', 'Faiz', '123', 'Muhammad Faiz', 'Haji Awang Abdullah', 'Faiz@gmail.com', 352678, 'Hntec Computer Networking'),
('S4', 'Piqah', '432', 'Syafiqah', 'Al', 'Piqah@gmail.com', 6485365, 'Ntec Deck Rating');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Student`
--
ALTER TABLE `Student`
  ADD PRIMARY KEY (`UserID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
