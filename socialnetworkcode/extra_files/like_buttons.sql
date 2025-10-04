-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 23, 2012 at 09:57 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `socialnetwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `like_buttons`
--

CREATE TABLE IF NOT EXISTS `like_buttons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `page_url` text NOT NULL,
  `date_added` date NOT NULL,
  `uid` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `like_buttons`
--

INSERT INTO `like_buttons` (`id`, `username`, `page_url`, `date_added`, `uid`) VALUES
(1, 'sinimma', 'http://www.google.com', '0000-00-00', '26723fc7a7d736904a50e0cdfcbcf198'),
(2, 'sinimma', 'http://www.creatiivecode.tk', '2012-10-23', 'f644c80e8a92c18e3c383a0bec9e00aa'),
(3, 'sinimma', 'http://hgjhghg', '2012-10-23', 'ec3268ae4b5317e635d6ddf2a9f05392'),
(4, 'sinimma', 'http://www.google.com', '2012-10-23', 'c24cddc085e8165b5a74200999860e29'),
(5, 'sinimma', 'http://www.google.com', '2012-10-23', '0d84cd17623799b57a7825f245a1d313'),
(6, 'sinimma', 'http://http://www.google.com', '2012-10-23', 'aebec2d11283527d839a4f05705eb3e7'),
(7, 'sinimma', 'http://jfhjhgfjgf', '2012-10-23', '3bbd31d516d74de1c9c0a41135e1d615');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
