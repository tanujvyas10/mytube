-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 17, 2014 at 06:37 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mytube`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_record`
--

CREATE TABLE IF NOT EXISTS `admin_record` (
  `sno` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin_record`
--

INSERT INTO `admin_record` (`sno`, `username`, `password`) VALUES
(1, 'graturi1', '1525'),
(2, 'dheeru', '1224');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cid` int(3) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=106 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `category_name`) VALUES
(101, 'Songs'),
(102, 'News'),
(103, 'Sport'),
(104, 'movie');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE IF NOT EXISTS `record` (
  `vid` int(6) NOT NULL AUTO_INCREMENT,
  `video` varchar(200) NOT NULL,
  `snap` varchar(200) NOT NULL,
  `vname` varchar(200) NOT NULL,
  `category_id` int(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `popularity` int(8) NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`vid`, `video`, `snap`, `vname`, `category_id`, `date`, `time`, `popularity`) VALUES
(1, 'Justin Bieber - One Less Lonely Girl_(ALLConverter)_psp.mp4', 'vlcsnap-2014-06-15-08h38m27s179.jpg', 'One Less Lonely Girl by Justin Bieber', 101, '2014-06-15', '08:55:21', 9),
(2, 'YouTube - Justin Bieber - Baby ft. Ludacris_(ALLConverter).mp4', 'vlcsnap-2014-06-15-08h40m00s83.jpg', 'Justin Bieber -baby ft ludacris', 101, '2014-06-15', '09:03:24', 9),
(3, 'JASSI SIDHU - JAAN MANGDHI FEAT HONEY SINGH - SINGING BETWEEN THE LINES.mp4', 'vlcsnap-2014-06-15-09h31m10s64.jpg', 'jaan mansdi by jassi sidhu', 101, '2014-06-15', '09:34:46', 5),
(4, 'Proper Patola Diljit Dosanjh feat. Badshah Full Video_Full-HD.mp4', 'vlcsnap-2014-06-15-09h40m34s73.jpg', 'proper patola by diljit dosanjh ', 101, '2014-06-15', '09:42:23', 12),
(5, 'zaheer_khaan.MP4', 'vlcsnap-2014-06-16-10h07m48s197.jpg', 'Zaheer khan', 103, '2014-06-16', '10:23:58', 5);
