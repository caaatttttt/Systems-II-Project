-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 25, 2023 at 02:38 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `cakes`
--

DROP TABLE IF EXISTS `cakes`;
CREATE TABLE IF NOT EXISTS `cakes` (
  `cake_img_id` int NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_general_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`cake_img_id`)
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cakes`
--

INSERT INTO `cakes` (`cake_img_id`, `file_name`, `uploaded_on`, `status`) VALUES
(63, 'cake7.jpg', '2023-03-30 00:28:51', '1'),
(65, 'cake10.jpg', '2023-03-30 00:29:11', '1'),
(66, 'cake11.jpg', '2023-03-30 00:29:16', '1'),
(67, 'cake12.jpg', '2023-03-30 00:29:22', '1'),
(68, 'cake13.jpg', '2023-03-30 00:29:30', '1'),
(69, 'cake14.jpg', '2023-03-30 00:29:35', '1'),
(70, 'cake15.jpg', '2023-03-30 00:29:40', '1'),
(71, 'cake16.jpg', '2023-03-30 00:29:45', '1'),
(72, 'cake17.jpg', '2023-03-30 00:29:51', '1'),
(73, 'cake11.jpg', '2023-03-30 00:30:04', '1'),
(74, 'cake17.jpg', '2023-03-30 00:30:13', '1'),
(75, 'cake18.jpg', '2023-03-30 00:30:19', '1'),
(76, 'cake19.jpg', '2023-03-30 00:30:24', '1'),
(77, 'cake20.jpg', '2023-03-30 00:30:33', '1'),
(78, 'cake21.jpg', '2023-03-30 00:30:42', '1'),
(83, 'cake2.jpg', '2023-04-03 18:04:20', '1'),
(84, 'cake3.jpg', '2023-04-03 18:17:58', '1');

-- --------------------------------------------------------

--
-- Table structure for table `cookies`
--

DROP TABLE IF EXISTS `cookies`;
CREATE TABLE IF NOT EXISTS `cookies` (
  `cookie_img_id` int NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_general_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`cookie_img_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cookies`
--

INSERT INTO `cookies` (`cookie_img_id`, `file_name`, `uploaded_on`, `status`) VALUES
(11, 'cookie1.jpg', '2023-03-05 19:01:31', '1'),
(13, 'cookie3.jpg', '2023-03-05 19:03:37', '1'),
(14, 'cookie5.jpg', '2023-03-05 19:03:52', '1'),
(15, 'cookie4.jpg', '2023-03-05 19:04:07', '1'),
(16, 'cookie6.jpg', '2023-03-06 18:03:10', '1'),
(17, 'cookie7.jpg', '2023-03-06 18:03:22', '1'),
(18, 'cookie8.jpg', '2023-03-06 18:03:30', '1'),
(19, 'cookie9.jpg', '2023-03-06 18:03:37', '1'),
(20, 'cookie2.jpg', '2023-04-10 11:28:52', '1');

-- --------------------------------------------------------

--
-- Table structure for table `cupcakes`
--

DROP TABLE IF EXISTS `cupcakes`;
CREATE TABLE IF NOT EXISTS `cupcakes` (
  `cupcake_img_id` int NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_general_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`cupcake_img_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cupcakes`
--

INSERT INTO `cupcakes` (`cupcake_img_id`, `file_name`, `uploaded_on`, `status`) VALUES
(13, 'cupcake3.jpg', '2023-03-05 19:01:16', '1'),
(14, 'cupcake5.jpg', '2023-03-05 20:19:36', '1'),
(15, 'cupcake6.jpg', '2023-03-05 20:19:45', '1'),
(16, 'cupcake7.jpg', '2023-03-05 20:27:56', '1'),
(17, 'cupcake8.jpg', '2023-03-05 20:28:03', '1'),
(18, 'cupcake9.jpg', '2023-03-05 20:28:10', '1'),
(20, 'cupcake11.jpg', '2023-03-05 20:28:24', '1'),
(21, 'cupcake12.jpg', '2023-03-05 20:28:34', '1'),
(22, 'cupcake13.jpg', '2023-03-05 20:28:40', '1'),
(23, 'cupcake14.jpg', '2023-03-05 20:28:47', '1'),
(24, 'cupcake15.jpg', '2023-03-05 20:28:54', '1'),
(25, 'cupcake16.jpg', '2023-03-05 20:29:01', '1'),
(26, 'cupcake2.jpg', '2023-04-10 11:28:28', '1');

-- --------------------------------------------------------

--
-- Table structure for table `other`
--

DROP TABLE IF EXISTS `other`;
CREATE TABLE IF NOT EXISTS `other` (
  `other_img_id` int NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`other_img_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `other`
--

INSERT INTO `other` (`other_img_id`, `file_name`, `uploaded_on`, `status`) VALUES
(12, 'other2.jpg', '2023-03-05 19:04:52', '1'),
(13, 'other3.jpg', '2023-03-05 19:04:59', '1'),
(14, 'other4.jpg', '2023-03-05 19:05:06', '1'),
(16, 'other5.jpg', '2023-03-05 19:05:19', '1'),
(17, 'other7.jpg', '2023-03-05 19:05:29', '1'),
(18, 'other8.jpg', '2023-03-05 20:05:51', '1'),
(19, 'other9.jpg', '2023-03-06 18:15:21', '1'),
(21, 'other12.jpg', '2023-03-06 18:15:43', '1'),
(22, 'other11.jpg', '2023-03-06 18:16:00', '1'),
(23, 'other13.jpg', '2023-03-06 19:03:29', '1'),
(24, 'other14.jpg', '2023-03-06 19:03:38', '1'),
(25, 'other1.jpg', '2023-04-10 11:29:39', '1');

-- --------------------------------------------------------

--
-- Table structure for table `wedding_cake`
--

DROP TABLE IF EXISTS `wedding_cake`;
CREATE TABLE IF NOT EXISTS `wedding_cake` (
  `wedding_cake_img_id` int NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_general_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`wedding_cake_img_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wedding_cake`
--

INSERT INTO `wedding_cake` (`wedding_cake_img_id`, `file_name`, `uploaded_on`, `status`) VALUES
(11, 'wedding_cake2.jpg', '2023-03-05 19:04:23', '1'),
(12, 'wedding_cake3.jpg', '2023-03-05 19:04:32', '1'),
(13, 'wedding_cake4.jpg', '2023-03-05 20:05:44', '1'),
(14, 'wedding_cake5.jpeg', '2023-03-05 20:33:03', '1'),
(15, 'wedding_cake6.jpeg', '2023-03-05 20:33:10', '1'),
(16, 'wedding_cake7.jpg', '2023-03-05 20:33:16', '1'),
(17, 'wedding_cake8.jpg', '2023-03-06 18:12:25', '1'),
(18, 'wedding_cake9.jpg', '2023-03-06 18:12:43', '1'),
(20, 'wedding_cake11.jpg', '2023-03-06 18:12:59', '1'),
(21, 'wedding_cake12.jpg', '2023-03-06 18:13:06', '1'),
(22, 'wedding_cake13.jpg', '2023-03-06 18:13:21', '1'),
(23, 'wedding_cake14.jpg', '2023-03-06 18:13:32', '1'),
(24, 'wedding_cake135.jpg', '2023-03-06 18:13:39', '1'),
(25, 'wedding_cake16.jpg', '2023-03-06 19:03:16', '1'),
(26, 'wedding_cake.jpg', '2023-04-10 11:29:14', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
