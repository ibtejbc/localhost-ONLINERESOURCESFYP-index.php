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
-- Table structure for table `ListResources`
--

CREATE TABLE IF NOT EXISTS `ListResources` (
  `RoomID` varchar(11) NOT NULL,
  `Room` varchar(250) NOT NULL,
  `Department` varchar(250) NOT NULL,
  `LevelFloor` varchar(30) NOT NULL,
  `GroupCode` varchar(250) NOT NULL,
  `Course` varchar(250) NOT NULL,
  `StaffinCharge` varchar(250) NOT NULL,
  `ImageRoom` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ListResources`
--

INSERT INTO `ListResources` (`RoomID`, `Room`, `Department`, `LevelFloor`, `GroupCode`, `Course`, `StaffinCharge`, `ImageRoom`) VALUES
('R10', 'Training Room 2', 'SICT Department', '-', '', '', '', ''),
('R11', 'Training Room 3', 'SICT Department', '-', 'ICT01/H/ITN/03', 'Hntec Information Technology', 'Sir Alias', ''),
('R12', 'Training Room 4', 'SICT Department', '-', '', 'Hntec Information Technology', 'Sir Taka', ''),
('R13', 'CSD 1', 'CSD Department', '-', '-', '-', '-', ''),
('R14', 'CSD 2', 'CSD Department', '-', '-', '-', '-', ''),
('R15', 'CSD 3', 'CSD Department', '-', '-', '-', '-', ''),
('R16', 'CSD 4', 'CSD Department', '-', '-', '-', '-', ''),
('R17', 'Class Room 1', 'BSE Department', '-', 'EES01/H/BSE 16-18', 'Hntec Building Services Engineering', 'Miss Wardiahni', ''),
('R18', 'Class Room 2', 'BSE Department', '-', 'EES02/H/BSE 16-18', 'Hntec Building Services Engineering', 'Sir Rahim', ''),
('R19', 'Class Room 3', 'BSE Department', '-', 'EES03/H/BSE 17-19', 'Hntec Building Services Engineering', 'Sir Noh', ''),
('R2', 'Multiprpose Hall', 'MPH Department', '-', '-', '-', '-', ''),
('R20', 'Class Room 4', 'BSE Department', '-', 'EES03/H/BSE 17-19', 'Hntec Building Services Engineering', 'Miss Nawar', ''),
('R21', 'BSE Lab 1234', 'BSE Department', '-', '', '-', '-', ''),
('R22', 'Conference Room', 'Admin Department', '-', '-', '-', '-', ''),
('R23', 'Training Room 1', 'Admin Department', '-', '-', '-', '-', ''),
('R25', 'Marine Engineering Class 1', 'BMA Department', '1', '-', '-', '-', ''),
('R26', 'Marine Engineering Class 2', 'BMA Department', '1', '-', '-', '-', ''),
('R27', 'Library', 'BMA Department', '2', '-', '-', '-', ''),
('R29', 'Conference Room', 'BMA Department', '3', '-', '-', '-', ''),
('R3', 'Multimedia Lab', 'SICT Department', '-', '-', '-', '-', ''),
('R30', 'Lecture Theatre', 'BMA Department', '3', '-', '-', '-', ''),
('R4', 'Hardware Lab', 'SICT Department', '-', '-', '-', '-', ''),
('R5', 'Network Bay', 'SICT Department', '-', '-', '-', '-', ''),
('R6', 'Authentic Network Lab', 'SICT Department', '-', '-', '-', '-', ''),
('R7', 'Network Cabling Lab', 'SICT Department', '-', '-', '-', '-', ''),
('R8', 'Lecture Theatre', 'SICT Department', '-', '-', '-', '-', ''),
('R9', 'Training Room 1', 'SICT Department', '-', ' ICT01/H/ITN/01', 'Hntec Computer Networking', 'Sir Hemi', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ListResources`
--
ALTER TABLE `ListResources`
  ADD PRIMARY KEY (`RoomID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
