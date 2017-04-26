-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2017 at 03:20 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csi`
--

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `Fn` varbinary(10) NOT NULL,
  `Mn` varbinary(10) NOT NULL,
  `Ln` varbinary(10) NOT NULL,
  `Bdate` date NOT NULL,
  `Email` varbinary(20) NOT NULL,
  `Tel` int(10) NOT NULL,
  `City` varbinary(10) NOT NULL,
  `Dept` varbinary(10) NOT NULL,
  `Class` varbinary(10) NOT NULL,
  `Sid` int(10) NOT NULL,
  `Imem` int(10) NOT NULL,
  `Dmem` int(10) NOT NULL,
  `Fees` int(10) NOT NULL,
  `Skills` varbinary(30) NOT NULL,
  `Tskills` varbinary(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=binary;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`Fn`, `Mn`, `Ln`, `Bdate`, `Email`, `Tel`, `City`, `Dept`, `Class`, `Sid`, `Imem`, `Dmem`, `Fees`, `Skills`, `Tskills`) VALUES
(0x6861727368, 0x706174656c20, 0x4c6e, '0000-00-00', 0x456d61696c, 0, 0x43697479, 0x44657074, 0x436c617373, 0, 0, 0, 0, 0x536b696c6c73, 0x54736b696c6c73),
('', '', 0x4c6e, '0000-00-00', 0x456d61696c, 0, 0x43697479, 0x44657074, 0x436c617373, 0, 0, 0, 0, 0x536b696c6c73, 0x54736b696c6c73);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
