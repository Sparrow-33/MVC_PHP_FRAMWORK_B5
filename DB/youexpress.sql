-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 24, 2022 at 08:49 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `youexpress`
--

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

DROP TABLE IF EXISTS `passenger`;
CREATE TABLE IF NOT EXISTS `passenger` (
  `ID_PASS` int(11) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`ID_PASS`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `reserveID` int(11) NOT NULL AUTO_INCREMENT,
  `ID` int(11) DEFAULT NULL,
  `v_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`reserveID`),
  KEY `ID` (`ID`),
  KEY `v_ID` (`v_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `sys_user`
--

DROP TABLE IF EXISTS `sys_user`;
CREATE TABLE IF NOT EXISTS `sys_user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `pwd` text COLLATE utf8_bin,
  `STATUS` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `sys_user`
--

INSERT INTO `sys_user` (`ID`, `fullName`, `email`, `pwd`, `STATUS`) VALUES
(1, 'test', 'test@test.com', '$2y$10$ZHa6CMsy8n8feZnkCLnhiugb9dpcT4DY7MmwaKtQNwfZVgP3HYkCK', 0),
(3, 'admin', 'admin@admin.com', '$2y$10$c1ocY9yDU73AAX7ajN2BY.7Xt9moT3KLfALqSSza4.D.hUrndFuRa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `voyage`
--

DROP TABLE IF EXISTS `voyage`;
CREATE TABLE IF NOT EXISTS `voyage` (
  `V_ID` int(11) NOT NULL AUTO_INCREMENT,
  `departStation` varchar(255) COLLATE utf8_bin NOT NULL,
  `arriveStation` varchar(255) COLLATE utf8_bin NOT NULL,
  `v_date` date NOT NULL,
  `v_time` time NOT NULL,
  PRIMARY KEY (`V_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `voyage`
--

INSERT INTO `voyage` (`V_ID`, `departStation`, `arriveStation`, `v_date`, `v_time`) VALUES
(1, 'CasaBlanca', 'Marrakech', '2022-02-03', '09:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
