-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 30, 2021 at 01:57 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `immo`
--
CREATE DATABASE IF NOT EXISTS `immo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `immo`;

-- --------------------------------------------------------

--
-- Table structure for table `bien`
--

DROP TABLE IF EXISTS `bien`;
CREATE TABLE IF NOT EXISTS `bien` (
  `Id_Bien` int(11) NOT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `surface` int(11) DEFAULT NULL,
  `pieces` int(11) DEFAULT NULL,
  `prix` decimal(15,2) DEFAULT NULL,
  `Id_Client` int(11) DEFAULT NULL,
  `codeM` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id_Bien`),
  KEY `Id_Client` (`Id_Client`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bien`
--

INSERT INTO `bien` (`Id_Bien`, `adresse`, `surface`, `pieces`, `prix`, `Id_Client`, `codeM`) VALUES(1, '54 rue Fert', 32, 5, '554.00', 1, 'LOC0001');
INSERT INTO `bien` (`Id_Bien`, `adresse`, `surface`, `pieces`, `prix`, `Id_Client`, `codeM`) VALUES(2, '87 rue Verdue', 87, 9, '468.00', 1, 'LOC0002');
INSERT INTO `bien` (`Id_Bien`, `adresse`, `surface`, `pieces`, `prix`, `Id_Client`, `codeM`) VALUES(3, '12 rue Philibert', 48, 3, '755.00', 2, 'LOC0003');
INSERT INTO `bien` (`Id_Bien`, `adresse`, `surface`, `pieces`, `prix`, `Id_Client`, `codeM`) VALUES(4, '36 rue Perceval', 45, 4, '920.00', 4, 'LOC0004');
INSERT INTO `bien` (`Id_Bien`, `adresse`, `surface`, `pieces`, `prix`, `Id_Client`, `codeM`) VALUES(5, '36 rue Alphonse', 64, 4, '1200.00', 3, 'LOC0005');
INSERT INTO `bien` (`Id_Bien`, `adresse`, `surface`, `pieces`, `prix`, `Id_Client`, `codeM`) VALUES(6, '77 Bd St Martin', 67, 5, '964.00', 5, 'LOC0006');
INSERT INTO `bien` (`Id_Bien`, `adresse`, `surface`, `pieces`, `prix`, `Id_Client`, `codeM`) VALUES(7, '19 rue Du Nord', 89, 5, '1420.00', NULL, 'LOC0007');
INSERT INTO `bien` (`Id_Bien`, `adresse`, `surface`, `pieces`, `prix`, `Id_Client`, `codeM`) VALUES(8, '125 rue Bill', 74, 4, '1321.00', 1, 'LOC0008');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `Id_Client` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `siren` varchar(9) DEFAULT NULL,
  `codeM` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id_Client`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`Id_Client`, `nom`, `siren`, `codeM`) VALUES(1, 'Durant', '85DR87TUN', 'CLI0001');
INSERT INTO `client` (`Id_Client`, `nom`, `siren`, `codeM`) VALUES(2, 'Turne', '87TYD9859', 'CLI0002');
INSERT INTO `client` (`Id_Client`, `nom`, `siren`, `codeM`) VALUES(3, 'Hector', '85UR8778N', 'CLI0003');
INSERT INTO `client` (`Id_Client`, `nom`, `siren`, `codeM`) VALUES(4, 'Denis', '85D4TTTU9', 'CLI0004');
INSERT INTO `client` (`Id_Client`, `nom`, `siren`, `codeM`) VALUES(5, 'Sophie', '85F411TU3', 'CLI0005');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


GRANT USAGE ON *.* TO 'app_loc'@'localhost' IDENTIFIED BY 'IB6lIdOrsrCp12Kv';

GRANT ALL PRIVILEGES ON `immo`.* TO 'app_loc'@'localhost' IDENTIFIED BY 'IB6lIdOrsrCp12Kv';
