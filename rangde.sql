-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 09, 2016 at 05:42 PM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.17

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
  `BORROWER_ID` int(10) NOT NULL AUTO_INCREMENT,
  `BORROWER_NAME` varchar(50) DEFAULT NULL,
  `BORROWER_ADDRESS` text,
  `COMPLETE` int(1) DEFAULT '0',
  PRIMARY KEY (`BORROWER_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `borrower`
--

INSERT INTO `borrower` (`BORROWER_ID`, `BORROWER_NAME`, `BORROWER_ADDRESS`, `COMPLETE`) VALUES
(1, 'ABC', 'XYZ', 0),
(2, 'Malti Bai', 'Bellandur, Bangalore', 0),
(3, 'Malti Behen', 'Koramanagla, Bangalore', 0);

-- --------------------------------------------------------

--
-- Table structure for table `causes`
--

CREATE TABLE IF NOT EXISTS `causes` (
  `CAUSE_ID` int(10) NOT NULL AUTO_INCREMENT,
  `BORROWER_ID` int(10) DEFAULT NULL,
  `SECTION` varchar(50) DEFAULT NULL,
  `AMOUNT` int(30) DEFAULT NULL,
  `CAUSE_TITLE` varchar(50) NOT NULL,
  `i_id` int(11) NOT NULL,
  PRIMARY KEY (`CAUSE_ID`),
  KEY `BORROWER_ID` (`BORROWER_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `causes`
--

INSERT INTO `causes` (`CAUSE_ID`, `BORROWER_ID`, `SECTION`, `AMOUNT`, `CAUSE_TITLE`, `i_id`) VALUES
(1, 1, 'EDUCTAION LOAN', 10000, 'STUDENT LOAN', 0),
(2, 2, 'Agriculture loan', 100000, 'Pay for living', 2),
(3, 3, 'Agriculture loan', 326352, 'Pay for surviving', 2);

-- --------------------------------------------------------

--
-- Table structure for table `investors`
--

CREATE TABLE IF NOT EXISTS `investors` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(50) DEFAULT NULL,
  `PASSWRD` varchar(50) DEFAULT NULL,
  `FIRST_NAME` varchar(50) DEFAULT NULL,
  `LAST_NAME` varchar(50) DEFAULT NULL,
  `ADDRESS` varchar(50) DEFAULT NULL,
  `PHONE` varchar(50) DEFAULT NULL,
  `FACEBOOK_URL` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `investors`
--

INSERT INTO `investors` (`ID`, `USERNAME`, `PASSWRD`, `FIRST_NAME`, `LAST_NAME`, `ADDRESS`, `PHONE`, `FACEBOOK_URL`) VALUES
(2, 'abcd', 'babababa', 'Shankar', 'Vanga', 'Hyderabad', '74734834738', 'https://www.facebook.com/madhu.chanchlani'),
(3, 'xyzw', 'blblblbl', 'Madhu', 'Chanchal', 'bhopal', '372367237', 'https://www.facebook.com/madhu.chahaha');

-- --------------------------------------------------------

--
-- Table structure for table `preferences`
--

CREATE TABLE IF NOT EXISTS `preferences` (
  `PREFERENCE_ID` int(10) DEFAULT NULL,
  `ID` int(10) DEFAULT NULL,
  `VAL` varchar(50) NOT NULL,
  KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `preferences`
--

INSERT INTO `preferences` (`PREFERENCE_ID`, `ID`, `VAL`) VALUES
(NULL, 2, 'Education loan, agriculture loan'),
(NULL, 3, 'agriculture loan');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `causes`
--
ALTER TABLE `causes`
  ADD CONSTRAINT `causes_ibfk_1` FOREIGN KEY (`BORROWER_ID`) REFERENCES `borrower` (`BORROWER_ID`) ON DELETE CASCADE;

--
-- Constraints for table `preferences`
--
ALTER TABLE `preferences`
  ADD CONSTRAINT `preferences_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `investors` (`ID`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
