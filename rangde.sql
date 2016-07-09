-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2016 at 03:58 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rangde`
--

-- --------------------------------------------------------

--
-- Table structure for table `borrower`
--

CREATE TABLE IF NOT EXISTS `borrower` (
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `problem` text NOT NULL,
  `group` varchar(200) NOT NULL,
  `amount` int(11) NOT NULL,
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_id` int(11) NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `domain`
--

CREATE TABLE IF NOT EXISTS `domain` (
  `group` varchar(100) NOT NULL,
  `i_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `domain`
--

INSERT INTO `domain` (`group`, `i_id`) VALUES
('education', 1),
('education', 1),
('education', 2),
('education', 2),
('finance', 2),
('finance', 2);

-- --------------------------------------------------------

--
-- Table structure for table `investors`
--

CREATE TABLE IF NOT EXISTS `investors` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email_id` varchar(200) NOT NULL,
  `phone` int(10) NOT NULL,
  `rating` int(11) NOT NULL,
  `time` date NOT NULL,
  `facebook_id` varchar(200) NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `investors`
--

INSERT INTO `investors` (`i_id`, `first_name`, `last_name`, `email_id`, `phone`, `rating`, `time`, `facebook_id`) VALUES
(1, 'shankar', 'vanga', 'shankarvanga95@gmail.com', 96528159, 3, '2016-07-09', 'fb-id'),
(2, 'u', '1', 'u1@gmail.com', 234532, 3, '2016-07-09', 'u1@fb.com');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `i_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
