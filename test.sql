-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 30, 2023 at 03:39 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admincontact`
--

DROP TABLE IF EXISTS `admincontact`;
CREATE TABLE IF NOT EXISTS `admincontact` (
  `name` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `PhoneNumber` bigint NOT NULL,
  `Feedback` varchar(100) NOT NULL,
  KEY `kf` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admincontact`
--

INSERT INTO `admincontact` (`name`, `id`, `PhoneNumber`, `Feedback`) VALUES
('b', 'b', 456, ' f');

-- --------------------------------------------------------

--
-- Table structure for table `adminregister`
--

DROP TABLE IF EXISTS `adminregister`;
CREATE TABLE IF NOT EXISTS `adminregister` (
  `aname` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `apassword` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `adminregister`
--

INSERT INTO `adminregister` (`aname`, `id`, `apassword`) VALUES
('b', 'b', 'b'),
('e', 'e', 'e'),
('e', 'y', 'e');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `Name` varchar(100) NOT NULL,
  `USN` varchar(100) NOT NULL,
  `PhoneNumber` bigint NOT NULL,
  `Feedback` varchar(100) NOT NULL,
  KEY `fk1` (`USN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name`, `USN`, `PhoneNumber`, `Feedback`) VALUES
('F', 'J', 86, ' F');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

DROP TABLE IF EXISTS `information`;
CREATE TABLE IF NOT EXISTS `information` (
  `StudentName` varchar(100) NOT NULL,
  `USN` varchar(100) NOT NULL,
  `ProjectTitle` varchar(100) NOT NULL,
  `ProjectDescription` varchar(100) NOT NULL,
  `FacultyDetails` varchar(100) NOT NULL,
  `ProjectStatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`StudentName`, `USN`, `ProjectTitle`, `ProjectDescription`, `FacultyDetails`, `ProjectStatus`) VALUES
('j', 'y', 'j', 'j', 'j', 'ok'),
('j', 'y', 'j', 'j', 'j', 'ok'),
('PRUTHVI', '4VP20CS222', 'A', 'AAA', 'Y', 'APPROVED');

--
-- Triggers `information`
--
DROP TRIGGER IF EXISTS `t`;
DELIMITER $$
CREATE TRIGGER `t` AFTER UPDATE ON `information` FOR EACH ROW INSERT INTO logs values(null,new.ProjectStatus,'UPDATED',NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE IF NOT EXISTS `logs` (
  `idd` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `action` varchar(100) NOT NULL,
  `cdate` datetime NOT NULL,
  PRIMARY KEY (`idd`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`idd`, `Name`, `action`, `cdate`) VALUES
(1, 'ok', 'UPDATED', '2023-01-23 12:32:35'),
(2, 'ok', 'UPDATED', '2023-01-23 12:32:35'),
(3, 'APPROVED', 'UPDATED', '2023-01-28 19:03:40');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `name` varchar(100) NOT NULL,
  `usn` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`usn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `usn`, `password`) VALUES
('PRUTHVI', '4VP20CS222', 'POI'),
('j', 'j', 'j'),
('ER', 'Y', 'QWE');

-- --------------------------------------------------------

--
-- Table structure for table `tb_upload`
--

DROP TABLE IF EXISTS `tb_upload`;
CREATE TABLE IF NOT EXISTS `tb_upload` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admincontact`
--
ALTER TABLE `admincontact`
  ADD CONSTRAINT `kf` FOREIGN KEY (`id`) REFERENCES `adminregister` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`USN`) REFERENCES `register` (`usn`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
