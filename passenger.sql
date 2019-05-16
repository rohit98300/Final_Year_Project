-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 11, 2019 at 09:20 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airport`
--

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

DROP TABLE IF EXISTS `passenger`;
CREATE TABLE IF NOT EXISTS `passenger` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(10000) NOT NULL,
  `source` varchar(10000) NOT NULL,
  `destination` varchar(10000) NOT NULL,
  `baggagestatus` varchar(10000) NOT NULL,
  `delreq` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`id`, `name`, `source`, `destination`, `baggagestatus`, `delreq`) VALUES
(1, 'Vikram', 'UP', 'Mumbai', 'Node 1', 0),
(2, 'Rahul', 'Bangalore', 'Kolkata', 'Node 2', 0),
(3, 'Rohit', 'New Delhi', 'Chennai', 'Node 3', 0),
(4, 'Robin', 'Rajasthan', 'Kolkata', 'Node 2', 0),
(5, 'Ashish', 'Hyderabad', 'Mumbai', 'Node 1', 0),
(6, 'Rocky', 'Orissa', 'Kolkata', 'Node 2', 0),
(7, 'Ramesh', 'Mangalore', 'Bihar', 'Node 3', 0),
(8, 'Suresh', 'New Delhi', 'Kolkata', 'Node 1', 0),
(9, 'Sukantha', 'New Delhi', 'Punjab', 'Node 2', 0),
(10, 'Animesh', 'New Delhi', 'UP', 'Node 3', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
