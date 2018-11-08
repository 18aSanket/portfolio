-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 08, 2018 at 12:20 PM
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
  `upload_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `graphics`
--

INSERT INTO `graphics` (`id`, `img`, `details`, `upload_date`) VALUES
(18, '5be3f09f0c69d_WhatsApp Image 2018-11-06 at 5.01.06 PM (1).jpeg', 'Diwali greeting card 3', '2018-11-08 08:15:27'),
(16, '5be3f0612a9fb_WhatsApp Image 2018-11-06 at 5.01.06 PM (4).jpeg', 'Diwali greeting card 1', '2018-11-08 08:14:25'),
(17, '5be3f0789d5cf_WhatsApp Image 2018-11-06 at 5.01.06 PM (3).jpeg', 'Diwali greeting card 2', '2018-11-08 08:14:48'),
(19, '5be3f0c2741b5_WhatsApp Image 2018-11-06 at 5.01.06 PM (2).jpeg', 'Diwali greeting card 4', '2018-11-08 08:16:02'),
(20, '5be3f0d72818e_WhatsApp Image 2018-11-06 at 5.01.06 PM.jpeg', 'Diwali greeting card 5', '2018-11-08 08:16:23');

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
  `upload_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `websites`
--

INSERT INTO `websites` (`id`, `img`, `details`, `link`, `upload_date`) VALUES
(3, '5be4160c61079_attendance.PNG', 'Attendance System', 'http://bizrock.co.in/attendance/', '2018-11-08 10:53:17'),
(4, '5be4176f0220b_bhoomika.PNG', 'Bhoomika Classes', 'http://www.bhoomikaclasses.net/', '2018-11-08 11:01:03'),
(5, '5be417a957a8d_bhoomikacms.PNG', 'Boomika Classes CMS', 'http://www.bhoomikaclasses.net/cms/', '2018-11-08 11:02:01'),
(6, '5be417f0cb675_bizrock.PNG', 'Bizrock', 'http://bizrock.co.in/', '2018-11-08 11:03:12'),
(7, '5be41847c7bc4_buyat.PNG', 'Buy At Atharva (E-Commerce)', 'http://buyatatharva.com/', '2018-11-08 11:04:39'),
(8, '5be418744446b_mariainfotech.PNG', 'Mariainfotech', 'http://mariainfotech.in/', '2018-11-08 11:05:24'),
(9, '5be418a8d739f_mcsmile.PNG', 'McSmile (E-Commerce)', 'http://mcsmile.in/', '2018-11-08 11:06:16'),
(10, '5be418d22f0f5_mcsmilecms.PNG', 'McSmile CMS', 'http://www.mcsmile.in/CMS/', '2018-11-08 11:06:58'),
(11, '5be419350084d_mta.PNG', 'Maria Talent Acquisition', 'http://www.mariatalentacquisition.in/', '2018-11-08 11:08:37'),
(12, '5be41981e825a_software.PNG', 'Retail Buzz Software', 'http://bizrock.in/', '2018-11-08 11:09:53');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
