-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 19, 2022 at 01:01 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `electricox`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE IF NOT EXISTS `complaint` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `sid` varchar(100) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `des` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `complaint`
--


-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE IF NOT EXISTS `feedbacks` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(100) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `des` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`fid`, `uid`, `subject`, `des`) VALUES
(4, '14', 'shibu', 'iopuytdfhgjb');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `l_id` int(20) NOT NULL AUTO_INCREMENT,
  `reg_id` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`l_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`l_id`, `reg_id`, `email`, `password`, `type`) VALUES
(0, '0', 'admin@gmail.com', 'admin', 'ADMIN'),
(29, '3', 'mesatation@gmail.com', '123', 'OWNER'),
(30, '4', 'youcenter@gmail.com', '123', 'SERVICE'),
(32, '14', 'jeni@gmail.com', '123', 'USER'),
(33, '6', 'newstaff@gmail.com', '123', 'STAFF'),
(34, '4', 'hh@gmail.com', '67890', 'OWNER');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `s_id` int(100) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `license_no` varchar(100) NOT NULL,
  `s_owner` varchar(100) NOT NULL,
  `s_phone` varchar(100) NOT NULL,
  `s_email` varchar(100) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`s_id`, `s_name`, `address`, `license_no`, `s_owner`, `s_phone`, `s_email`) VALUES
(4, 'youcenter', 'you center address', '987654323456', 'youcenter', '0987654345', 'youcenter@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `service_booking`
--

CREATE TABLE IF NOT EXISTS `service_booking` (
  `bookid` int(100) NOT NULL AUTO_INCREMENT,
  `usr_id` varchar(100) NOT NULL,
  `service_id` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  PRIMARY KEY (`bookid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `service_booking`
--


-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `stf_id` int(20) NOT NULL AUTO_INCREMENT,
  `st_id` varchar(100) DEFAULT NULL,
  `stf_name` varchar(100) DEFAULT NULL,
  `stf_age` varchar(100) DEFAULT NULL,
  `stf_phone` varchar(100) DEFAULT NULL,
  `stf_address` varchar(100) DEFAULT NULL,
  `stf_qualification` varchar(100) DEFAULT NULL,
  `stf_experience` varchar(100) DEFAULT NULL,
  `stf_email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`stf_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`stf_id`, `st_id`, `stf_name`, `stf_age`, `stf_phone`, `stf_address`, `stf_qualification`, `stf_experience`, `stf_email`) VALUES
(6, '3', 'newstaffiu', '55', '9876543456', 'staff address', 'mca', '3', 'newstaff@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE IF NOT EXISTS `station` (
  `st_id` int(20) NOT NULL AUTO_INCREMENT,
  `st_name` varchar(100) DEFAULT NULL,
  `st_address` varchar(100) DEFAULT NULL,
  `st_l_no` varchar(100) DEFAULT NULL,
  `st_price_one_kwh` varchar(100) DEFAULT 'PENDING',
  `st_price_per_hour` varchar(100) DEFAULT 'PENDING',
  `st_parking_price` varchar(100) DEFAULT 'PENDING',
  `st_owner` varchar(100) DEFAULT NULL,
  `st_age` varchar(100) DEFAULT NULL,
  `st_phone` varchar(100) DEFAULT NULL,
  `st_email` varchar(100) DEFAULT NULL,
  `st_status` varchar(100) DEFAULT 'OPEN',
  `st_lat` varchar(100) DEFAULT 'PENDING',
  `st_long` varchar(100) DEFAULT 'PENDING',
  `st_open` varchar(100) DEFAULT 'NOT_SET',
  `st_close` varchar(100) DEFAULT 'NOT_SET',
  PRIMARY KEY (`st_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`st_id`, `st_name`, `st_address`, `st_l_no`, `st_price_one_kwh`, `st_price_per_hour`, `st_parking_price`, `st_owner`, `st_age`, `st_phone`, `st_email`, `st_status`, `st_lat`, `st_long`, `st_open`, `st_close`) VALUES
(3, 'me', 'me addrss', '09876544567', 'PENDING', 'PENDING', 'PENDING', 'meowner', '11', '9876543234', 'mesatation@gmail.com', 'OPEN', 'PENDING', 'PENDING', 'NOT_SET', 'NOT_SET'),
(4, 'hh', 'gfdfctfyhv', 'dffyh5677', 'PENDING', 'PENDING', 'PENDING', 'hhhhf', '65', '3333555555', 'hh@gmail.com', 'OPEN', 'PENDING', 'PENDING', 'NOT_SET', 'NOT_SET');

-- --------------------------------------------------------

--
-- Table structure for table `user_bookings`
--

CREATE TABLE IF NOT EXISTS `user_bookings` (
  `b_rqst_id` int(20) NOT NULL AUTO_INCREMENT,
  `u_id` varchar(20) DEFAULT NULL,
  `st_id` varchar(20) DEFAULT NULL,
  `stf_id` varchar(100) DEFAULT 'NO_ACCEPTED',
  `status` varchar(100) DEFAULT 'PENDING',
  `date` varchar(100) DEFAULT NULL,
  `service` varchar(50) NOT NULL,
  `cardname` varchar(50) NOT NULL,
  `cardno` varchar(50) NOT NULL,
  `cvv` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `amount` varchar(40) NOT NULL,
  PRIMARY KEY (`b_rqst_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `user_bookings`
--

INSERT INTO `user_bookings` (`b_rqst_id`, `u_id`, `st_id`, `stf_id`, `status`, `date`, `service`, `cardname`, `cardno`, `cvv`, `total`, `amount`) VALUES
(15, '14', '3', '6', 'FULLY CHARGED', '2022-11-19', 'General Service', 'jenika again', '9876543234567887', '567', '876', '2022-11-19T17:14'),
(16, '14', '3', 'NO_ACCEPTED', 'REQUESTED', '2022-11-19', 'General Service', 'lkjhgfc', '09876543567878787', '675', '677', '2022-11-19T22:42'),
(17, '14', '4', 'NO_ACCEPTED', 'REQUESTED', '2022-11-19', 'Water Service', 'vishnu', '2345678987677779', '667', '700', '2022-11-19T18:21');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE IF NOT EXISTS `user_reg` (
  `u_id` int(20) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(100) NOT NULL,
  `u_age` varchar(100) NOT NULL,
  `u_phone` varchar(100) NOT NULL,
  `u_address` varchar(100) NOT NULL,
  `u_email` varchar(100) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`u_id`, `u_name`, `u_age`, `u_phone`, `u_address`, `u_email`) VALUES
(14, 'jenisha', '88', '9876543456', 'jeni address', 'jeni@gmail.com');
