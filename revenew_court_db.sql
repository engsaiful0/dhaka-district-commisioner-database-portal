-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2016 at 02:44 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `revenew_court_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bcs_cadre`
--

CREATE TABLE IF NOT EXISTS `bcs_cadre` (
`id` int(11) NOT NULL,
  `cadre_name` varchar(40) CHARACTER SET utf8 NOT NULL,
  `introducing_no` varchar(20) CHARACTER SET utf8 NOT NULL,
  `post` varchar(20) CHARACTER SET utf8 NOT NULL,
  `present_work_station` varchar(200) CHARACTER SET utf8 NOT NULL,
  `join_date_of_present_work_station` date NOT NULL,
  `date_of_birth` date NOT NULL,
  `batch` varchar(30) CHARACTER SET utf8 NOT NULL,
  `join_date_of_bcs_cadre` date NOT NULL,
  `own_district` varchar(30) CHARACTER SET utf8 NOT NULL,
  `spous_district` varchar(30) CHARACTER SET utf8 NOT NULL,
  `mobile_no` varchar(15) CHARACTER SET utf8 NOT NULL,
  `marital_status` varchar(15) CHARACTER SET utf8 NOT NULL,
  `permanent_address` varchar(200) CHARACTER SET utf8 NOT NULL,
  `most_educational_qualification` varchar(20) CHARACTER SET utf8 NOT NULL,
  `pre_work_station` varchar(20) CHARACTER SET utf8 NOT NULL,
  `join_date_of_job` date NOT NULL,
  `photo` varchar(3000) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bcs_cadre`
--

INSERT INTO `bcs_cadre` (`id`, `cadre_name`, `introducing_no`, `post`, `present_work_station`, `join_date_of_present_work_station`, `date_of_birth`, `batch`, `join_date_of_bcs_cadre`, `own_district`, `spous_district`, `mobile_no`, `marital_status`, `permanent_address`, `most_educational_qualification`, `pre_work_station`, `join_date_of_job`, `photo`) VALUES
(1, 'kARIM', '21', 'DC', 'dHAKA', '2016-02-06', '2016-02-09', '27', '2016-02-06', 'cHITTAGONG', 'cHITTAGONG', '01818650864', 'sINGLW', 'DAKAH', 'BSC', 'dINAJPUR', '2016-02-06', '806c9-koala.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
`id` int(11) NOT NULL,
  `employee_name` varchar(50) NOT NULL,
  `post` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `employee_name`, `post`, `photo`) VALUES
(1, 'আব্দুর রহ্মান', 'Head', '75e3d-lighthouse.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kormochary`
--

CREATE TABLE IF NOT EXISTS `kormochary` (
`id` int(11) NOT NULL,
  `kormochary_name` varchar(50) NOT NULL,
  `post` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kormochary`
--

INSERT INTO `kormochary` (`id`, `kormochary_name`, `post`, `photo`) VALUES
(1, 'Rahim', 'Clerk', '15459-penguins.jpg'),
(2, 'Saiful Islam', 'Manager', '79138-tulips.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `user_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 NOT NULL,
  `mobile_no` varchar(15) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `password`, `mobile_no`) VALUES
(1, 'saiful', '21219121', '01818650864'),
(2, 'Rahim', '21219121', '01818650864');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bcs_cadre`
--
ALTER TABLE `bcs_cadre`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kormochary`
--
ALTER TABLE `kormochary`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bcs_cadre`
--
ALTER TABLE `bcs_cadre`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kormochary`
--
ALTER TABLE `kormochary`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
