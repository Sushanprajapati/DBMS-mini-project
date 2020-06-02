-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2019 at 01:10 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `minidatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
`id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `title`) VALUES
(1, 'Dodhballapur Main road'),
(2, 'CRPF');

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `annapurnabooking`
--

CREATE TABLE IF NOT EXISTS `annapurnabooking` (
`bookingid` int(10) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `departuredate` date NOT NULL,
  `arrivaldate` date NOT NULL,
  `location` varchar(30) NOT NULL,
  `msg` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=90005 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `annapurnabooking`
--

INSERT INTO `annapurnabooking` (`bookingid`, `firstname`, `lastname`, `address`, `phone`, `email`, `departuredate`, `arrivaldate`, `location`, `msg`) VALUES
(90002, 'Rujita', 'Udash', 'Airforce', '8792716138', 'rujitaudas@gmail.com', '2019-12-18', '2019-12-22', 'Avalahalli', 'Hhhh'),
(90003, 'Sofiya', 'Dhumana', 'Nagenahalli, Yelahanka', '9380018053', 'sofiyadhumana8@gmail', '2019-12-20', '2019-12-31', 'Nagenahalli Gate', 'I love travelling'),
(90004, 'Sashank', 'Kumar', 'Jharkhand', '9808302250', 'sashankkumar@gmail.c', '2019-12-25', '2019-12-31', 'Kormangala', 'I need good services');

-- --------------------------------------------------------

--
-- Table structure for table `driverdetail`
--

CREATE TABLE IF NOT EXISTS `driverdetail` (
`regdno` int(30) NOT NULL,
  `name` varchar(25) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `time` time(5) NOT NULL,
  `departuredate` date NOT NULL,
  `location` varchar(20) NOT NULL,
  `vehicleno` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `driverdetail`
--

INSERT INTO `driverdetail` (`regdno`, `name`, `address`, `phone`, `time`, `departuredate`, `location`, `vehicleno`) VALUES
(1, 'Sanjay', 'Kormangala', '7845889022', '09:00:00.00000', '2019-12-25', 'Kormangala ', 'KA 01 EP 8719'),
(2, 'Ram', 'Yelahanka', '8794564789', '09:00:00.00000', '2019-11-17', 'Avalahalli', 'KA 02 EA 2011'),
(3, 'Joel Binu', 'Dodhballapur Main road', '8322502456', '08:20:00.00000', '2019-12-17', 'Avalahalli', 'KA 02 EL 2220'),
(4, 'Biwek Paudel', 'Hill Station', '99878452002', '06:00:00.00000', '2019-12-10', 'Nagenahalli Gate', 'KA 02 EP 1119'),
(5, 'Prabin Regmi', 'Hill Station', '9841122051', '12:00:00.00000', '2019-12-16', 'Bahakha Bazaar', 'KA 04 EP 8000'),
(6, 'Aadarsh', 'Yelahanka', '8245789630', '10:00:00.00000', '2019-12-17', 'Yelahanka', 'KA 04 EP 8310'),
(7, 'Sanam Bhasima', 'Dodhballapur Main road', '8574852002', '02:02:00.00000', '2019-11-17', 'Nagenahalli Gate', 'KA 04 EP 8719'),
(8, 'Nischal Neupane', 'Dodhballapur Main road', '8755230256', '11:00:00.00000', '2019-12-12', 'Honnenahalli', 'KA 04 EP 0032');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE IF NOT EXISTS `enquiry` (
`S.N` int(250) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `enquire` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`S.N`, `name`, `email`, `subject`, `enquire`) VALUES
(1, 'Sushan Prajapati', 'sushanpraz@gmail.com', 'Guide', 'I loved the guide(Mr. Santosh) who guided me through the Annapurna circuit. Please make sure next time I get even better one.'),
(2, 'Jason ', 'jason@gmail.com', 'Services', 'I didnt like the transportation');

-- --------------------------------------------------------

--
-- Table structure for table `everestbooking`
--

CREATE TABLE IF NOT EXISTS `everestbooking` (
`bookingid` int(7) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `address` varchar(40) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `departuredate` date NOT NULL,
  `arrivaldate` date NOT NULL,
  `location` varchar(40) NOT NULL,
  `msg` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5000006 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `everestbooking`
--

INSERT INTO `everestbooking` (`bookingid`, `firstname`, `lastname`, `address`, `phone`, `email`, `departuredate`, `arrivaldate`, `location`, `msg`) VALUES
(5000000, 'Sushan', 'Prajapati', 'Dodhballapur Main road', '8310821250', 'sushanpraz@gmail.com', '2019-12-02', '2019-12-04', 'Avalahalli', 'hihihih'),
(5000003, 'Ronish', 'Prajapati', 'Dodhballapur Main road', '7310821250', 'ronish@gmail.com', '2019-12-25', '2019-12-29', 'Honnenahalli', 'hello everyone'),
(5000004, 'Chandra', 'Prajapati', 'Dodhballapur Main road', '9841279409', 'chandra@yahoo.com', '2019-12-17', '2019-12-22', 'Avalahalli', 'adadfa'),
(5000005, 'Ramchandra', 'Dheke', 'Chapacho', '9841658738', 'ramchandra@gmail.com', '2019-12-16', '2019-12-27', 'Bahakha Bazaar', 'I am alive');

-- --------------------------------------------------------

--
-- Table structure for table `kathmandubooking`
--

CREATE TABLE IF NOT EXISTS `kathmandubooking` (
`bookingid` int(6) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `departuredate` date NOT NULL,
  `arrivaldate` date NOT NULL,
  `location` varchar(40) NOT NULL,
  `msg` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=80011 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kathmandubooking`
--

INSERT INTO `kathmandubooking` (`bookingid`, `firstname`, `lastname`, `address`, `phone`, `email`, `departuredate`, `arrivaldate`, `location`, `msg`) VALUES
(80005, 'Sushan', 'Prajapati', 'Dodhballapur Main road', '8310821250', 'sushanpraz@gmail.com', '2019-11-17', '2019-11-20', 'Avalahalli', 'I love Travelling'),
(80006, 'Krishna', 'Chakradhar', 'Mill road Thimi Bhaktapur', '9851098389', 'krishnachakradhar@gmail.com', '2019-12-17', '2019-12-22', 'Yelahanka', 'sasdfadfasdf'),
(80007, 'Ravi', 'Kumar', 'Kormangala', '9860003065', 'ravi@gmail.com', '2019-11-29', '2019-12-01', 'Avalahalli', 'HELLO'),
(80008, 'David', 'Sharma', 'Dhunche Paakhaa', '9843560021', 'david@gmail.com', '2020-01-08', '2020-01-11', 'Jalahalli', 'mr ex'),
(80009, 'Sofiya', 'Dhumana', 'Hulak Road', '9380018053', 'sofiyadhumana9823@gmail.com', '2019-12-04', '2019-12-10', 'NES', 'Hello everyone'),
(80010, 'Jason', 'Saji', 'Bahrain', '8752022256', 'jason@gmail.com', '2019-12-12', '2019-12-16', 'Honnenahalli', 'I love food and travelling');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `gender` char(1) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`firstname`, `lastname`, `gender`, `email`, `pass`, `phone`, `address`) VALUES
('Jason', 'Saji', 'M', 'jasonsaji@gmail.com', 'jason123', '4563214709', 'Kammanahalli'),
('Ankit ', 'Bista', 'M', 'postie@gmail.com', 'ankit123', '4563214789', 'kammanahalli'),
('Sofiya', 'Dhumana', 'F', 'sofiyadhumana8@gmail', 'blackpetal9823', '9380018053', 'Nagenahalli, Yelahanka'),
('Sushan', 'Prajapati', 'M', 'sushanpraz@gmail.com', 'madhyapurthimi6', '8310821250', 'Dodhballapur Main road'),
('Tej', 'Kumar', 'M', 'tejkumar@gmail.com', 'tej123', '8975421036', 'Dodhballapur Main road');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
 ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `annapurnabooking`
--
ALTER TABLE `annapurnabooking`
 ADD PRIMARY KEY (`bookingid`), ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `driverdetail`
--
ALTER TABLE `driverdetail`
 ADD PRIMARY KEY (`regdno`), ADD UNIQUE KEY `vehicleno` (`vehicleno`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
 ADD PRIMARY KEY (`S.N`), ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `everestbooking`
--
ALTER TABLE `everestbooking`
 ADD PRIMARY KEY (`bookingid`);

--
-- Indexes for table `kathmandubooking`
--
ALTER TABLE `kathmandubooking`
 ADD PRIMARY KEY (`bookingid`), ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
 ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `annapurnabooking`
--
ALTER TABLE `annapurnabooking`
MODIFY `bookingid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=90005;
--
-- AUTO_INCREMENT for table `driverdetail`
--
ALTER TABLE `driverdetail`
MODIFY `regdno` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
MODIFY `S.N` int(250) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `everestbooking`
--
ALTER TABLE `everestbooking`
MODIFY `bookingid` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5000006;
--
-- AUTO_INCREMENT for table `kathmandubooking`
--
ALTER TABLE `kathmandubooking`
MODIFY `bookingid` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=80011;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
