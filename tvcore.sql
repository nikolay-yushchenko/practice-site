-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2018 at 02:24 AM
-- Server version: 5.5.25
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tvcore`
--

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE IF NOT EXISTS `goods` (
  `idgood` int(200) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` int(100) unsigned NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `quantity` int(200) unsigned NOT NULL,
  PRIMARY KEY (`idgood`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=111143 ;

-- --------------------------------------------------------

--
-- Table structure for table `logreg`
--

CREATE TABLE IF NOT EXISTS `logreg` (
  `idlog` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`idlog`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1114 ;

--
-- Dumping data for table `logreg`
--

INSERT INTO `logreg` (`idlog`, `name`, `password`) VALUES
(1110, 'admin', 'admin'),
(1112, 'tvcore', '12345'),
(1113, 'tvcore', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `idorder` int(100) NOT NULL AUTO_INCREMENT,
  `tel` int(200) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `delivery` varchar(200) NOT NULL,
  `idgoodorder` int(200) NOT NULL,
  PRIMARY KEY (`idorder`),
  KEY `idgoodorder` (`idgoodorder`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11111117 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`idgoodorder`) REFERENCES `goods` (`idgood`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
