-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2012 at 11:40 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `planner`
--

INSERT INTO `planner` (`Plan_ID`, `Nama`, `Telp`, `Email`, `Tgl_Pernikahan`, `Tgl_Temu_WP`, `Tempat_Temu`) VALUES
(1, 'rr', 246702763, 'abc@gmail.com', '2012-12-27 00:00:00', '2012-10-17 00:00:00', 'blok m'),
(10, 'rr', 852140, 'jw@gmail.com', '2012-12-27 00:00:00', '2012-10-15 00:00:00', 'blok m'),
(11, 'rr', 852140, 'jw@gmail.com', '2012-12-27 00:00:00', '2012-10-17 00:00:00', 'blok m'),
(12, 'rr', 85214, 'abc@gmail.com', '2012-12-27 00:00:00', '2012-10-17 00:00:00', 'blok m'),
(13, 'jw', 446672, 'jw21@email.com', '2012-12-27 00:00:00', '2012-11-15 00:00:00', 'blok m'),
(14, 'jw', 446672, 'jw21@email.com', '2012-12-27 00:00:00', '2012-11-15 00:00:00', 'blok m'),
(15, 'jw', 446672, 'jw21@email.com', '2012-12-27 00:00:00', '2012-11-15 00:00:00', 'blok m'),
(16, 'jw', 446672, 'jw21@email.com', '2012-12-27 00:00:00', '2012-11-15 00:00:00', 'blok m'),
(17, 'jw', 555532, 'nz17@email.com', '2012-12-27 00:00:00', '2012-11-15 00:00:00', 'blok m'),
(18, 'jw', 123456, 'jw21@email.com', '2012-12-27 00:00:00', '2012-11-15 00:00:00', 'galaxy');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE IF NOT EXISTS `testimoni` (
  `testi_id` int(255) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `isi_testi` text NOT NULL,
  PRIMARY KEY (`testi_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`testi_id`, `nama`, `email`, `isi_testi`) VALUES
(1, 'coba', 'coba@mail.com', 'cobacoba'),
(2, 'a', 'a@mail.com', 'a');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
