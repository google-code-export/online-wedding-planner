-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2012 at 03:02 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE IF NOT EXISTS `auth` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `session` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`user_id`, `email`, `pass`, `session`) VALUES
(1, 'aa@mail.com', 'abc', 0);

-- --------------------------------------------------------

--
-- Table structure for table `planner`
--

CREATE TABLE IF NOT EXISTS `planner` (
  `Plan_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nama` varchar(20) NOT NULL,
  `Telp` int(11) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Tgl_Pernikahan` datetime NOT NULL,
  `Tgl_Temu_WP` datetime NOT NULL,
  `Tempat_Temu` varchar(20) NOT NULL,
  PRIMARY KEY (`Plan_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `planner`
--

INSERT INTO `planner` (`Plan_ID`, `Nama`, `Telp`, `Email`, `Tgl_Pernikahan`, `Tgl_Temu_WP`, `Tempat_Temu`) VALUES
(1, 'rr', 246702763, 'abc@gmail.com', '2012-12-27 00:00:00', '2012-10-17 00:00:00', 'blok m'),
(10, 'rr', 852140, 'jw@gmail.com', '2012-12-27 00:00:00', '2012-10-15 00:00:00', 'blok m'),
(11, 'rr', 852140, 'jw@gmail.com', '2012-12-27 00:00:00', '2012-10-17 00:00:00', 'blok m'),
(12, 'rr', 85214, 'abc@gmail.com', '2012-12-27 00:00:00', '2012-10-17 00:00:00', 'blok m');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
