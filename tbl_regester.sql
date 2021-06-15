-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 06, 2021 at 05:23 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `education`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_regester`
--

DROP TABLE IF EXISTS `tbl_regester`;
CREATE TABLE IF NOT EXISTS `tbl_regester` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `highestqulification` varchar(50) DEFAULT NULL,
  `lerrnigplan` varchar(50) DEFAULT NULL,
  `image` longtext,
  `password` varchar(50) DEFAULT NULL,
  `repassword` varchar(50) DEFAULT NULL,
  `status` enum('active','block') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_regester`
--

INSERT INTO `tbl_regester` (`id`, `firstname`, `lastname`, `email`, `phone`, `gender`, `highestqulification`, `lerrnigplan`, `image`, `password`, `repassword`, `status`, `created_at`, `update_at`) VALUES
(17, 'Raju', 'Gupta', 'raju7234@gmail.com', '7007935989', 'Male', 'M.Tech', 'Developement', 'bnr1.jpg', '1234567', '12345678', 'active', '2021-01-25 21:33:58', '2021-01-25 16:03:58'),
(5, 'shubham', 'yadav', 'sandeep@gmial.com', '9554457381', 'Male', 'Intermideate', 'Desigining', 'appealing-modern-chairs-for-living-room-image-hd-lollagram-elegant_furniture-arrangement.jpg', '12345', '12345', 'active', '2021-01-15 19:03:02', '2021-01-15 13:33:02'),
(6, 'Rakesh', 'Yadav', 'ravikumar@gmail.com', '6307451748', 'Male', 'BCA', 'Developement', 'general_health.jpg', '12345678', '12345678', 'active', '2021-01-15 21:37:00', '2021-01-15 16:07:00'),
(7, 'Abhishek', 'Yadav', 'abhi@gmail.com', '7234088271', 'Male', 'B.Tech', 'Desktop Management', 'appealing-modern-chairs-for-living-room-image-hd-lollagram-elegant_furniture-arrangement.jpg', 'sandeep@123', 'Sandeep@123', 'active', '2021-01-15 21:40:14', '2021-01-15 16:10:14'),
(8, 'sandeep', 'Yadav', 'sandeep@gmail.com', '9651807986', 'Male', 'Diploma', 'Developement', 'bnr1.jpg', 'sandeep@123', 'sandeep@123', 'active', '2021-01-16 14:41:21', '2021-01-16 09:11:21'),
(9, 'abhishek', 'yadav', 'sandeep@gmail.com', '9554457381', 'Male', 'MCA', 'Computer Language', 'appealing-modern-chairs-for-living-room-image-hd-lollagram-elegant_furniture-arrangement.jpg', 'sandeeep', 'sandeep', 'active', '2021-01-16 17:00:53', '2021-01-16 11:30:53'),
(10, 'shubham', 'yadav', 'sandeep7234088@gmail.com', '9554457381', 'Male', NULL, NULL, 'bnr1.jpg', NULL, NULL, 'active', '2021-01-18 18:04:07', '2021-01-18 12:34:07'),
(11, 'shubham', 'yadav', 'sandeep@gmial.com', '9554457381', 'Male', 'Intermideate', 'Developement', 'bnr1.jpg', '123456', '123456', 'active', '2021-01-18 19:21:23', '2021-01-18 13:51:23'),
(18, 'Rajesh', 'Yadav', 'abcd@gmail.com', '9554457381', 'Male', 'BCA', 'Developement', 'health_on_the_net.jpg', 'sandeep@123', 'sandeep@`1123', 'active', '2021-02-06 22:06:33', '2021-02-06 16:36:33');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
