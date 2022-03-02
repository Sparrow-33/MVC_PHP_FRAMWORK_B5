-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 01, 2022 at 03:46 PM
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
  `phone` text COLLATE utf8_bin NOT NULL,
  `address` text COLLATE utf8_bin NOT NULL,
  `STATUS` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `sys_user`
--

INSERT INTO `sys_user` (`ID`, `fullName`, `email`, `pwd`, `phone`, `address`, `STATUS`) VALUES
(1, 'Haitham El Haoudi', 'test@test.com', '$2y$10$ZHa6CMsy8n8feZnkCLnhiugb9dpcT4DY7MmwaKtQNwfZVgP3HYkCK', '+212615161718', 'ABC,SAFI,Morocco', 0),
(3, 'admin', 'admin@admin.com', '$2y$10$c1ocY9yDU73AAX7ajN2BY.7Xt9moT3KLfALqSSza4.D.hUrndFuRa', '+21213344556', '34,SAFI,Morocco', 1),
(4, 'Mohammed', 'm@mohammed.com', '$2y$10$5x1NtYpOmyy/kdk109XqSuY.DnhNrQjcAsSIojCEXshKs6PMCzPq2', '+21223567890', '55 alpha,SAFI,Morocco', 0);

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

DROP TABLE IF EXISTS `train`;
CREATE TABLE IF NOT EXISTS `train` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `t_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `places` int(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`ID`, `t_name`, `places`) VALUES
(1, 'EastExpress', 3),
(2, 'WestExpress', 2),
(11, 'SouthExpress', 1),
(13, 'TestExpress', 1),
(12, 'NorthExpress', 2);

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
  `t_id` int(11) NOT NULL,
  `place` int(11) NOT NULL,
  `STATUS` tinyint(1) NOT NULL,
  PRIMARY KEY (`V_ID`),
  KEY `t_id` (`t_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `voyage`
--

INSERT INTO `voyage` (`V_ID`, `departStation`, `arriveStation`, `v_date`, `v_time`, `t_id`, `place`, `STATUS`) VALUES
(1, 'CasaBlanca', 'Marrakech', '2022-02-03', '09:00:00', 1, 0, 1),
(2, 'Tanger', 'Rabat', '2022-02-05', '14:00:00', 2, 0, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
