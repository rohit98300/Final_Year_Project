-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2019 at 08:08 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

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
-- Table structure for table `airport`
--

CREATE TABLE `airport` (
  `id` int(255) NOT NULL,
  `name` varchar(10000) NOT NULL,
  `source` varchar(10000) NOT NULL,
  `destination` varchar(10000) NOT NULL,
  `baggagestatuss` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airport`
--

INSERT INTO `airport` (`id`, `name`, `source`, `destination`, `baggagestatuss`) VALUES
(1, 'Rohit', 'Kolkata', 'Mumbai', 'Node 1');

-- --------------------------------------------------------

--
-- Table structure for table `money`
--

CREATE TABLE `money` (
  `cartid` int(50) NOT NULL,
  `amount` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `money`
--

INSERT INTO `money` (`cartid`, `amount`) VALUES
(44105, 150);

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `id` int(255) NOT NULL,
  `name` varchar(10000) NOT NULL,
  `source` varchar(10000) NOT NULL,
  `destination` varchar(10000) NOT NULL,
  `baggagestatus` varchar(10000) NOT NULL,
  `delreq` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`id`, `name`, `source`, `destination`, `baggagestatus`, `delreq`) VALUES
(1, 'Vikram', 'UP', 'Mumbai', 'Node 1', 1),
(2, 'Rahul', 'Bangalore', 'Kolkata', 'Node 2', 0),
(3, 'Rohit', 'New Delhi', 'Chennai', 'Node 3', 0),
(4, 'Robin', 'Rajasthan', 'Kolkata', 'Node 2', 0),
(5, 'Ashish', 'Hyderabad', 'Mumbai', 'Node 1', 0),
(6, 'Rocky', 'Orissa', 'Kolkata', 'Node 2', 0),
(7, 'Ramesh', 'Mangalore', 'Bihar', 'Node 3', 0),
(8, 'Vishal', 'Mumbai', 'Kolkata', 'Node 3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `tag` varchar(50) NOT NULL,
  `PName` varchar(500) NOT NULL,
  `Qty` int(100) NOT NULL,
  `Amount` int(200) NOT NULL,
  `delreq` int(11) NOT NULL,
  `pop` int(11) NOT NULL DEFAULT '0',
  `usrdel` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `succ`
--

CREATE TABLE `succ` (
  `id` int(20) NOT NULL,
  `succe` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `view`
--

CREATE TABLE `view` (
  `cartid` int(50) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Products` varchar(1000) NOT NULL,
  `Mode` varchar(50) NOT NULL,
  `Amount` int(200) NOT NULL,
  `DateOf` varchar(500) NOT NULL,
  `Transaction` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `view`
--

INSERT INTO `view` (`cartid`, `Name`, `Products`, `Mode`, `Amount`, `DateOf`, `Transaction`) VALUES
(44105, 'Rohit Kumar sahu', 'Axe Signature', 'DigiCash Mode', 350, '16-05-2019', 'INV150419');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airport`
--
ALTER TABLE `airport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `money`
--
ALTER TABLE `money`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`tag`);

--
-- Indexes for table `succ`
--
ALTER TABLE `succ`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `view`
--
ALTER TABLE `view`
  ADD PRIMARY KEY (`Transaction`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airport`
--
ALTER TABLE `airport`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `passenger`
--
ALTER TABLE `passenger`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `succ`
--
ALTER TABLE `succ`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
