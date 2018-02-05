-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2018 at 02:47 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vot`
--

-- --------------------------------------------------------

--
-- Table structure for table `adlog`
--

CREATE TABLE IF NOT EXISTS `adlog` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `admin_id` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adlog`
--

INSERT INTO `adlog` (`username`, `password`, `image`, `admin_id`) VALUES
('cm', '1234', '', 1),
('tanvir', '12345', '', 2),
('dristy', '3043', 'ad_image/IMG_1122_view.JPG', 3);

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE IF NOT EXISTS `candidates` (
  `name` varchar(20) CHARACTER SET latin1 COLLATE latin1_danish_ci NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `votes` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=121213 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`name`, `candidate_id`, `image`, `votes`) VALUES
('tanvir', 133, 'can_image/IMG_1128_view.JPG', 0),
('opu', 121212, 'can_image/diu.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

CREATE TABLE IF NOT EXISTS `voter` (
  `id` int(11) NOT NULL,
  `voter_name` varchar(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `voter_id` varchar(30) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `choice_btn` tinyint(1) NOT NULL,
  `image` varchar(300) NOT NULL,
  `voted` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voter`
--

INSERT INTO `voter` (`id`, `voter_name`, `user_name`, `password`, `voter_id`, `mobile`, `dob`, `choice_btn`, `image`, `voted`) VALUES
(11, 'Imam Hossain', 'imam2889', '3b52fd36915196bfd3338cfe84ce8ca9', '133-15-2889', '01716491735', '1995-07-15', 0, 'voter_image/8c3bc7d120ffc0cd5c8a30fcc50b7b7eIMG_1197_view.JPG', 0);

-- --------------------------------------------------------

--
-- Table structure for table `voter3`
--

CREATE TABLE IF NOT EXISTS `voter3` (
  `id` int(11) NOT NULL,
  `voter_name` varchar(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `voter_id` varchar(30) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `choice_btn` tinyint(1) NOT NULL,
  `image` varchar(300) NOT NULL,
  `voted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adlog`
--
ALTER TABLE `adlog`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `voter`
--
ALTER TABLE `voter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `voter_id` (`voter_id`);

--
-- Indexes for table `voter3`
--
ALTER TABLE `voter3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adlog`
--
ALTER TABLE `adlog`
  MODIFY `admin_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=121213;
--
-- AUTO_INCREMENT for table `voter`
--
ALTER TABLE `voter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `voter3`
--
ALTER TABLE `voter3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
