-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2016 at 10:35 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lhcomputer`
--

-- --------------------------------------------------------

--
-- Table structure for table `acer`
--

DROP TABLE IF EXISTS `acer`;
CREATE TABLE IF NOT EXISTS `acer` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Price` double NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `apple`
--

DROP TABLE IF EXISTS `apple`;
CREATE TABLE IF NOT EXISTS `apple` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Price` double NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apple`
--

INSERT INTO `apple` (`ID`, `Name`, `Type`, `Price`) VALUES
(1, 'MacBook Air', 'labtop', 1200),
(2, 'MacBook', 'labtop', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `asus`
--

DROP TABLE IF EXISTS `asus`;
CREATE TABLE IF NOT EXISTS `asus` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Price` double NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

DROP TABLE IF EXISTS `cases`;
CREATE TABLE IF NOT EXISTS `cases` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Price` double NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`ID`, `Name`, `Type`, `Price`) VALUES
(1, 'Corsair', 'ATX Mid-Tower Case - Black', 59.99),
(2, 'Corsair', 'ATX Mid-Tower Gaming Case - Black', 99.99);

-- --------------------------------------------------------

--
-- Table structure for table `cpu`
--

DROP TABLE IF EXISTS `cpu`;
CREATE TABLE IF NOT EXISTS `cpu` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Generation_and_Core` varchar(50) NOT NULL,
  `Price` double NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpu`
--

INSERT INTO `cpu` (`ID`, `Name`, `Generation_and_Core`, `Price`) VALUES
(1, 'Intel', ' Core™ i7-6700K 4.0GHz Processor - Silver', 365.99),
(2, 'Intel', 'Core™ i7-4790K 4.0GHz Processor - Multi', 339.99),
(3, 'Intel', 'Core™ i5-6600 3.3GHz Processor - Silver', 229.99);

-- --------------------------------------------------------

--
-- Table structure for table `customs`
--

DROP TABLE IF EXISTS `customs`;
CREATE TABLE IF NOT EXISTS `customs` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Price` double NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dell`
--

DROP TABLE IF EXISTS `dell`;
CREATE TABLE IF NOT EXISTS `dell` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Price` double NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee1`
--

DROP TABLE IF EXISTS `employee1`;
CREATE TABLE IF NOT EXISTS `employee1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee1`
--

INSERT INTO `employee1` (`id`, `first_name`, `last_name`, `department`, `email`) VALUES
(1, 'Eang', 'Lay', 'IT', 'eanglay2211@gmail.com'),
(10, 'eang', 'Lay', 'IT', 'eanglay2211@gmail.com'),
(8, 'eang', 'Lay', 'IT', 'eanglay53@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `hardware`
--

DROP TABLE IF EXISTS `hardware`;
CREATE TABLE IF NOT EXISTS `hardware` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Size` varchar(50) NOT NULL,
  `Price` double NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lenovo`
--

DROP TABLE IF EXISTS `lenovo`;
CREATE TABLE IF NOT EXISTS `lenovo` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Price` double NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `moniter`
--

DROP TABLE IF EXISTS `moniter`;
CREATE TABLE IF NOT EXISTS `moniter` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Price` double NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `motherboard`
--

DROP TABLE IF EXISTS `motherboard`;
CREATE TABLE IF NOT EXISTS `motherboard` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Price` double NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motherboard`
--

INSERT INTO `motherboard` (`ID`, `Name`, `Type`, `Price`) VALUES
(1, 'MSI', 'Performance Gaming ATX Motherboard 3600MHz', 224.99),
(2, 'Asus', 'Crosshair V Formula-Z ATX Motherboard 2400MHz', 239.99);

-- --------------------------------------------------------

--
-- Table structure for table `msi`
--

DROP TABLE IF EXISTS `msi`;
CREATE TABLE IF NOT EXISTS `msi` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Price` double NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `power_supply`
--

DROP TABLE IF EXISTS `power_supply`;
CREATE TABLE IF NOT EXISTS `power_supply` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Price` double NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `power_supply`
--

INSERT INTO `power_supply` (`ID`, `Name`, `Type`, `Price`) VALUES
(1, 'Corsair', 'CX Series Modular CX750M 750W ATX', 99.99),
(2, 'Thermaltake', 'SMART Series 650W Bronze', 59.99);

-- --------------------------------------------------------

--
-- Table structure for table `ram`
--

DROP TABLE IF EXISTS `ram`;
CREATE TABLE IF NOT EXISTS `ram` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Size` varchar(50) NOT NULL,
  `Price` double NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ram`
--

INSERT INTO `ram` (`ID`, `Name`, `Type`, `Size`, `Price`) VALUES
(1, 'Kingston-2pack', 'DDR3', '4GB', 41.99),
(2, 'Kingston', 'DDR3', '8G', 37.99),
(10, 'Intel', 'Core i7 6700', '4G', 90);

-- --------------------------------------------------------

--
-- Table structure for table `vga`
--

DROP TABLE IF EXISTS `vga`;
CREATE TABLE IF NOT EXISTS `vga` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Size` varchar(50) NOT NULL,
  `Price` double NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vga`
--

INSERT INTO `vga` (`ID`, `Name`, `Type`, `Size`, `Price`) VALUES
(1, 'NVIDIA - Founders Edition ', 'GeForce GTX 1080', '8GB GDDR5X', 699.99),
(2, 'NVIDIA - NVIDIA ', 'GeForce GTX 1070', '8GB GDDR5', 499.99),
(3, 'NVIDIA', 'GeForce GTX 980', ' 4GB GDDR5', 350.99);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
