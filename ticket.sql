-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 08, 2016 at 10:26 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(300) NOT NULL,
  `bus` varchar(30) NOT NULL,
  `transactionum` varchar(10) NOT NULL,
  `payable` varchar(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `setnumber` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fname`, `lname`, `contact`, `address`, `bus`, `transactionum`, `payable`, `status`, `setnumber`) VALUES
(7, 'yftru', 'tuu', '9666505063', 'rtut', '1', 'm578wgtu', '400', 'Onboard', '1, '),
(8, 'siri', 'sri', '9666505062', 'hyd', '4', 'gu5ce06t', '1040', '', '2, 3, '),
(9, 'asdfsd', 'asdfas', '9666505062', 'asdasd', '3', 'otitwtnk', '800', 'Onboard', '1, 2, '),
(10, 'laxman', 'laxman', '9888787867', 'hyderabad', '1', '6crbrfqi', '800', 'Onboard', '1, 2, '),
(11, 'siri', 'siri', '9666505062', 'hyderabad', '1', '3mstp7ka', '800', 'Onboard', '3, 4, '),
(12, 'raju', 'huuhuh', '9666525214', 'hyd', '3', 'd7mbsxa8', '450', '', '1, '),
(13, 'ftsdfg', 'asdfsadf', '9666505062', 'sadf', '3', '6rzqeubb', '450', '', '1, '),
(14, 'raju', 'siri', '9666505062', 'hyderabad', '1', 'zv6qecrk', '1200', '', '1, 2, 3, '),
(15, 'laxman', 'kumar', '9666525258', 'hyd', '1', '32iafdnp', '800', '', '1, 2, ');

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE IF NOT EXISTS `reserve` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(11) NOT NULL,
  `bus` varchar(11) NOT NULL,
  `seat_reserve` varchar(11) NOT NULL,
  `transactionnum` varchar(10) NOT NULL,
  `seat` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`id`, `date`, `bus`, `seat_reserve`, `transactionnum`, `seat`) VALUES
(7, '28/10/2015', '1', '1', 'x0m4sgq6', '1, '),
(8, '29/10/2015', '1', '1', 'm578wgtu', '1, '),
(9, '29/10/2015', '4', '2', 'gu5ce06t', '2, 3, '),
(10, '31/10/2015', '3', '2', 'otitwtnk', '1, 2, '),
(11, '05/11/2015', '1', '2', '6crbrfqi', '1, 2, '),
(12, '05/11/2015', '1', '2', '3mstp7ka', '3, 4, '),
(13, '18/11/2015', '3', '1', 'd7mbsxa8', '1, '),
(14, '10/11/2015', '3', '1', '6rzqeubb', '1, '),
(15, '09/11/2015', '1', '3', 'zv6qecrk', '1, 2, 3, '),
(16, '22/12/2015', '1', '2', '32iafdnp', '1, 2, ');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE IF NOT EXISTS `route` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `route` varchar(300) NOT NULL,
  `price` varchar(30) NOT NULL,
  `numseats` int(30) NOT NULL,
  `type` varchar(300) NOT NULL,
  `time` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`id`, `route`, `price`, `numseats`, `type`, `time`) VALUES
(1, 'Ilocos - Manila', '400', 5, 'Deluxe', '10:30'),
(3, 'Manila Ilocos', '450', 50, 'Air Con', '12:30'),
(4, 'hyd-vij', '520', 44, 'superdeluxe', '11:30p.m'),
(5, 'hyd-vij', '450', 30, 'superlux', '11:45p.m');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
