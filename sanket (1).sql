-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 11, 2018 at 06:10 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sanket`
--

-- --------------------------------------------------------

--
-- Table structure for table `graphics`
--

DROP TABLE IF EXISTS `graphics`;
CREATE TABLE IF NOT EXISTS `graphics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `graphics`
--

INSERT INTO `graphics` (`id`, `img`, `details`, `code`, `upload_date`) VALUES
(71, '5be8536f77cb6_logos.jpg', 'Sad', '5be8536f77cb6_WhatsApp Image 2018-11-06 at 5.01.06 PM (1).jpeg', '2018-11-11 16:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `webdesigns`
--

DROP TABLE IF EXISTS `webdesigns`;
CREATE TABLE IF NOT EXISTS `webdesigns` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webdesigns`
--

INSERT INTO `webdesigns` (`id`, `img`, `details`, `link`, `upload_date`) VALUES
(1, '5be420eb8bb81_slider.html', 'owl responsive slider', '', '2018-11-08 11:28:01'),
(2, '5be4212456635_random-image.html', 'Random image every refresh', '', '2018-11-08 11:42:28');

-- --------------------------------------------------------

--
-- Table structure for table `websites`
--

DROP TABLE IF EXISTS `websites`;
CREATE TABLE IF NOT EXISTS `websites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `work` varchar(255) NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `websites`
--

INSERT INTO `websites` (`id`, `img`, `details`, `link`, `work`, `upload_date`) VALUES
(1, '5be865c231fce_attendance.PNG', 'Attendance System', 'http://bizrock.co.in/attendance/', 'Design in Bootstrap 4', '2018-11-11 17:24:18'),
(2, '5be866494cc6d_mariainfotech.PNG', 'Maria Infotech ', 'http://mariainfotech.in/', 'Redesign and correct error in bootstrap 3', '2018-11-11 17:26:33');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
