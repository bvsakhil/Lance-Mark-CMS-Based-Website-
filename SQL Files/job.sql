-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2019 at 08:19 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `artd`
--

CREATE TABLE `artd` (
  `id` int(100) NOT NULL,
  `logourl` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `applylink` varchar(100) NOT NULL,
  `timeofpost` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dateofpost` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artd`
--

INSERT INTO `artd` (`id`, `logourl`, `title`, `role`, `location`, `applylink`, `timeofpost`, `dateofpost`) VALUES
(1, 'http://pluspng.com/img-png/twitter-logo-png-twitter-logo-png-300.png', 'TCS', 'DASD', '', '', '2019-09-06 10:46:45', '0000-00-00'),
(2, 'https://upload.wikimedia.org/wikipedia/commons/0/05/Facebook_Logo_%282019%29.png', 'faceboook', 'Graphic Designer', 'America', '', '2019-09-14 09:20:57', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `interactiondesigner`
--

CREATE TABLE `interactiondesigner` (
  `id` int(100) NOT NULL,
  `logourl` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `applylink` varchar(100) NOT NULL,
  `timeofpost` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dateofpost` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interactiondesigner`
--

INSERT INTO `interactiondesigner` (`id`, `logourl`, `title`, `role`, `location`, `applylink`, `timeofpost`, `dateofpost`) VALUES
(1, 'https://upload.wikimedia.org/wikipedia/commons/0/05/Facebook_Logo_%282019%29.png', 'VectorInk', 'Graphic Designer', 'Chennai', '', '2019-09-06 10:15:03', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `productdesigner`
--

CREATE TABLE `productdesigner` (
  `id` int(100) NOT NULL,
  `logourl` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `applylink` varchar(100) NOT NULL,
  `timeofpost` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dateofpost` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uidesigner`
--

CREATE TABLE `uidesigner` (
  `id` int(100) NOT NULL,
  `logourl` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `applylink` varchar(100) NOT NULL,
  `timeofpost` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dateofpost` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uidesigner`
--

INSERT INTO `uidesigner` (`id`, `logourl`, `title`, `role`, `location`, `applylink`, `timeofpost`, `dateofpost`) VALUES
(4, 'https://www.freepnglogos.com/uploads/instagram-logos-png-images-free-download-2.png', 'Instagram', 'Developer', 'Mumbai', '', '2019-09-09 09:22:11', '2019-09-09'),
(5, 'http://pluspng.com/img-png/twitter-logo-png-twitter-logo-png-300.png', 'twitter', 'GD', 'Chennai', '', '2019-09-09 09:19:38', '2019-09-09'),
(6, 'https://upload.wikimedia.org/wikipedia/commons/0/05/Facebook_Logo_%282019%29.png', 'faceboook', 'designer', 'delhi', '', '2019-09-09 09:20:03', '2019-09-09'),
(7, 'https://www.freepnglogos.com/uploads/instagram-logos-png-images-free-download-2.png', 'Graphic Designer', 'Developer', 'delhi', '', '2019-09-09 09:19:53', '2019-09-09');

-- --------------------------------------------------------

--
-- Table structure for table `uxdesigner`
--

CREATE TABLE `uxdesigner` (
  `id` int(100) NOT NULL,
  `logourl` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `applylink` varchar(100) NOT NULL,
  `timeofpost` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dateofpost` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uxdesigner`
--

INSERT INTO `uxdesigner` (`id`, `logourl`, `title`, `role`, `location`, `applylink`, `timeofpost`, `dateofpost`) VALUES
(1, 'https://upload.wikimedia.org/wikipedia/commons/0/05/Facebook_Logo_%282019%29.png', 'Graphic Designer', 'designer', 'delhi', '', '2019-09-06 10:31:52', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artd`
--
ALTER TABLE `artd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interactiondesigner`
--
ALTER TABLE `interactiondesigner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productdesigner`
--
ALTER TABLE `productdesigner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uidesigner`
--
ALTER TABLE `uidesigner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uxdesigner`
--
ALTER TABLE `uxdesigner`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artd`
--
ALTER TABLE `artd`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `interactiondesigner`
--
ALTER TABLE `interactiondesigner`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `productdesigner`
--
ALTER TABLE `productdesigner`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `uidesigner`
--
ALTER TABLE `uidesigner`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `uxdesigner`
--
ALTER TABLE `uxdesigner`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
