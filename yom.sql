-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 30, 2015 at 04:37 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yom`
--

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE IF NOT EXISTS `coach` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `loc` text NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`id`, `name`, `phone`, `gender`, `loc`, `lat`, `lng`, `email`) VALUES
(3, 'shashank', '08802975681', 'male', 'Sector 62, Noida, Uttar Pradesh, India', 28.6207641, 77.36392920000003, 'shashaa35@gmail.com'),
(4, 'shivaM', '8802975681', 'male', 'Sector 18, Noida, Uttar Pradesh, India', 28.570317, 77.32181960000003, 'shashaa35@gmail.com'),
(6, 'shivaM', '8802975681', 'male', 'Sector 32, Noida, Uttar Pradesh, India', 28.5827178, 77.34823519999998, 'shashaa35@gmail.com'),
(7, 'shashank agarwal', '08802975681', 'male', 'Agra, Uttar Pradesh, India', 27.1766701, 78.00807450000002, 'shashaa35@gmail.com'),
(11, 'dushyant', '23434534', 'male', 'Sector 18, Noida, Uttar Pradesh, India', 28.570317, 77.32181960000003, 'shashaa35@gmail.com'),
(15, 'shivaM', '8802975681', 'male', 'Agra, Uttar Pradesh, India', 27.1766701, 78.00807450000002, 'shashaa35@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
