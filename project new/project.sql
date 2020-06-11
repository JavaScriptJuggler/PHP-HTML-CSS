-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 11, 2015 at 06:31 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--
CREATE DATABASE IF NOT EXISTS `project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `project`;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country`) VALUES
('India'),
('Amarica');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `fname`, `date`) VALUES
(2, 'CCA', 'Certificate In Computer Application', '2015-07-10'),
(4, 'CCPA', 'Certificate In Programming & Computer Application', '2015-07-10');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `roll` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `ph` int(10) NOT NULL,
  `country` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `nation` varchar(30) NOT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`ID`, `name`, `pass`, `roll`, `course`, `ph`, `country`, `state`, `nation`) VALUES
(23, 'Soumya Manna', '1998', '12343', 'CCPA', 7450, 'India', 'West Bengal', 'Hindu'),
(24, 'Sumanta Chakkraborty', '123', '1234455', 'CCPA', 1234567890, 'India', 'West Bengal', 'Hindu'),
(25, 'Abinash Mohanti', '123', '2131454', 'CCPA', 2147483647, 'India', 'West Bengal', 'Hindu'),
(26, 'Anirban Das', '1999', '97854', 'CCPA', 2147483647, 'India', 'West Bengal', 'Hindu'),
(27, 'Arpan banik', '12343', '235425', 'CCPA', 374723, 'India', 'West Bengal', 'Hindu');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `login1`
--

CREATE TABLE IF NOT EXISTS `login1` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `pass` varchar(10) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `login1`
--

INSERT INTO `login1` (`id`, `user`, `pass`) VALUES
(23, 'Soumya Manna', '1998'),
(24, 'Sumanta Chakkraborty', '123'),
(25, 'Abinash Mohanti', '123'),
(26, 'Anirban Das', '1999'),
(27, 'Arpan banik', '12343');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
  `name` varchar(50) NOT NULL,
  `roll` varchar(20) NOT NULL,
  `mod1` int(10) NOT NULL,
  `mod2` int(10) NOT NULL,
  `mod3` int(10) NOT NULL,
  `mod4` int(10) NOT NULL,
  `mod5` int(10) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`name`, `roll`, `mod1`, `mod2`, `mod3`, `mod4`, `mod5`, `total`) VALUES
('Soumya Manna', '12343', 90, 98, 98, 98, 78, 90),
('Sumanta Chakkraborty', '1234455', 78, 76, 73, 79, 80, 87),
('Abinash Mohanti', '2131454', 0, 0, 0, 0, 0, 0),
('Anirban Das', '97854', 0, 0, 0, 0, 0, 0),
('Arpan banik', '235425', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nation`
--

CREATE TABLE IF NOT EXISTS `nation` (
  `nation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nation`
--

INSERT INTO `nation` (`nation`) VALUES
('Hindu'),
('Muslim');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `state` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state`) VALUES
('West Bengal'),
('Maharastra');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
