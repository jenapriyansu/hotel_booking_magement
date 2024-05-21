-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2022 at 04:34 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_dir`
--

CREATE TABLE `admin_dir` (
  `a_id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_dir`
--

INSERT INTO `admin_dir` (`a_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `r_id` int(222) NOT NULL,
  `rimage` varchar(222) NOT NULL,
  `rtype` varchar(222) NOT NULL,
  `rprice` int(222) NOT NULL,
  `rtext` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking1`
--

CREATE TABLE `booking1` (
  `id` int(11) NOT NULL,
  `rimage` varchar(255) NOT NULL,
  `rtype` varchar(255) NOT NULL,
  `rprice` float NOT NULL,
  `rtext` varchar(255) NOT NULL,
  `raddress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking1`
--

INSERT INTO `booking1` (`id`, `rimage`, `rtype`, `rprice`, `rtext`, `raddress`) VALUES
(5, '6335b387f1743.jpg', 'First Room ', 3500, '', 'jalandhar');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(222) NOT NULL,
  `name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `subject` varchar(222) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, '', '', '', 'ghg'),
(2, '', '', '', 'gfdgfdg'),
(3, '', '', '', 'gfdgfdg'),
(4, 'fsgf', 'fgf', 'fggfd', 'gfdgfg');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `user_id` int(222) NOT NULL,
  `fname` varchar(222) NOT NULL,
  `lname` varchar(222) NOT NULL,
  `address` varchar(222) NOT NULL,
  `city` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `brand` varchar(222) NOT NULL,
  `cardno` varchar(222) NOT NULL,
  `emonth` varchar(222) NOT NULL,
  `eyear` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`user_id`, `fname`, `lname`, `address`, `city`, `email`, `phone`, `brand`, `cardno`, `emonth`, `eyear`) VALUES
(11, 'single', 'sad;lmLA', 'SAMDKAJDSL', 'ASDMN', 'manojkr825313@gmail.com', '924552255', 'Master Card', '845544545555', '02 ', '2011 ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_dir`
--
ALTER TABLE `admin_dir`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `booking1`
--
ALTER TABLE `booking1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_dir`
--
ALTER TABLE `admin_dir`
  MODIFY `a_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `r_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `booking1`
--
ALTER TABLE `booking1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `user_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
