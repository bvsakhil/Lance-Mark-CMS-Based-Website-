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
-- Database: `free`
--

-- --------------------------------------------------------

--
-- Table structure for table `icons`
--

CREATE TABLE `icons` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `xdlink` varchar(1000) NOT NULL,
  `invlink` varchar(1000) NOT NULL,
  `timeofpost` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `icons`
--

INSERT INTO `icons` (`id`, `title`, `url`, `link`, `xdlink`, `invlink`, `timeofpost`) VALUES
(1, 'Graphic Designer', 'https://buffer.com/library/wp-content/uploads/2016/08/Enhancing-Social-Media-Images.png', '', '', '', '2019-09-06 03:30:56');

-- --------------------------------------------------------

--
-- Table structure for table `illustrations`
--

CREATE TABLE `illustrations` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `xdlink` varchar(1000) NOT NULL,
  `invlink` varchar(1000) NOT NULL,
  `timeofpost` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `illustrations`
--

INSERT INTO `illustrations` (`id`, `title`, `url`, `link`, `xdlink`, `invlink`, `timeofpost`) VALUES
(1, 'testing2', 'https://buffer.com/library/wp-content/uploads/2016/08/Enhancing-Social-Media-Images.png', '', '', '', '2019-09-06 03:31:15');

-- --------------------------------------------------------

--
-- Table structure for table `landingpage`
--

CREATE TABLE `landingpage` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `xdlink` varchar(1000) NOT NULL,
  `invlink` varchar(1000) NOT NULL,
  `timeofpost` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `landingpage`
--

INSERT INTO `landingpage` (`id`, `title`, `url`, `link`, `xdlink`, `invlink`, `timeofpost`) VALUES
(1, 'Graphic Designer', 'https://buffer.com/library/wp-content/uploads/2016/08/Enhancing-Social-Media-Images.png', '', '', '', '2019-09-06 03:31:35');

-- --------------------------------------------------------

--
-- Table structure for table `mockup`
--

CREATE TABLE `mockup` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `xdlink` varchar(100) NOT NULL,
  `invlink` varchar(100) NOT NULL,
  `timeofpost` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mockup`
--

INSERT INTO `mockup` (`id`, `title`, `url`, `link`, `xdlink`, `invlink`, `timeofpost`) VALUES
(1, 'testing2', 'https://buffer.com/library/wp-content/uploads/2016/08/Enhancing-Social-Media-Images.png', '', '', '', '2019-09-06 03:31:53');

-- --------------------------------------------------------

--
-- Table structure for table `premium`
--

CREATE TABLE `premium` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `xdlink` varchar(100) NOT NULL,
  `invlink` varchar(100) NOT NULL,
  `timeofpost` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `premium`
--

INSERT INTO `premium` (`id`, `title`, `url`, `link`, `xdlink`, `invlink`, `timeofpost`) VALUES
(1, 'Resplendence', 'https://buffer.com/library/wp-content/uploads/2016/08/Enhancing-Social-Media-Images.png', '', '', '', '2019-09-06 03:32:15');

-- --------------------------------------------------------

--
-- Table structure for table `uikit`
--

CREATE TABLE `uikit` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `xdlink` varchar(1000) NOT NULL,
  `invlink` varchar(1000) NOT NULL,
  `timeofpost` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uikit`
--

INSERT INTO `uikit` (`id`, `title`, `url`, `link`, `xdlink`, `invlink`, `timeofpost`) VALUES
(2, 'Graphic Designer', 'https://buffer.com/library/wp-content/uploads/2016/08/Enhancing-Social-Media-Images.png', '', '', '', '2019-09-06 03:32:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `icons`
--
ALTER TABLE `icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `illustrations`
--
ALTER TABLE `illustrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `landingpage`
--
ALTER TABLE `landingpage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mockup`
--
ALTER TABLE `mockup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `premium`
--
ALTER TABLE `premium`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uikit`
--
ALTER TABLE `uikit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `icons`
--
ALTER TABLE `icons`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `illustrations`
--
ALTER TABLE `illustrations`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `landingpage`
--
ALTER TABLE `landingpage`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mockup`
--
ALTER TABLE `mockup`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `premium`
--
ALTER TABLE `premium`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `uikit`
--
ALTER TABLE `uikit`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
