-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 18, 2023 at 12:45 AM
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
-- Database: `cake_testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `cake_prices`
--

DROP TABLE IF EXISTS `cake_prices`;
CREATE TABLE IF NOT EXISTS `cake_prices` (
  `size` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `size_price` decimal(10,2) NOT NULL,
  `size_price_id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`size_price_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cake_prices`
--

INSERT INTO `cake_prices` (`size`, `size_price`, `size_price_id`) VALUES
('6in.', '35.00', 1),
('8in.', '50.00', 2),
('10in.', '75.00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `cake_products`
--

DROP TABLE IF EXISTS `cake_products`;
CREATE TABLE IF NOT EXISTS `cake_products` (
  `cake_id` int NOT NULL AUTO_INCREMENT,
  `cake_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_general_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`cake_id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cake_products`
--

INSERT INTO `cake_products` (`cake_id`, `cake_name`, `file_name`, `uploaded_on`, `status`) VALUES
(40, 'Carrot', 'carrot.jpg', '2023-02-17 17:16:38', '1'),
(39, 'Vanilla', 'vanilla.jpg', '2023-02-17 17:16:10', '1'),
(38, 'Cookies and Cream', 'cookies-n-cream.jpg', '2023-02-17 17:15:52', '1'),
(37, 'Coconut', 'coconut.jpg', '2023-02-17 17:15:39', '1'),
(35, 'Italian', 'italian.jpg', '2023-02-17 17:15:25', '1'),
(36, 'Red Velvet', 'red_velvet.jpg', '2023-02-17 17:15:32', '1'),
(34, 'Strawberry', 'strawberry.jpg', '2023-02-17 17:15:19', '1'),
(33, 'Triple Chocolate', 'triple_chocolate.jpg', '2023-02-17 17:15:09', '1');

-- --------------------------------------------------------

--
-- Table structure for table `cookies`
--

DROP TABLE IF EXISTS `cookies`;
CREATE TABLE IF NOT EXISTS `cookies` (
  `cookie` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `cookie_id` int NOT NULL AUTO_INCREMENT,
  `cookie_price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`cookie_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cookies`
--

INSERT INTO `cookies` (`cookie`, `cookie_id`, `cookie_price`) VALUES
('Cowboy Cookies', 1, '3.31'),
('Chocolate Chip', 2, '3.31'),
('Sprinkle', 3, '3.31'),
('Red Velvet', 4, '3.31'),
('Mexican Wedding', 5, '2.49'),
('Macarone', 6, '1.99');

-- --------------------------------------------------------

--
-- Table structure for table `cupcakes`
--

DROP TABLE IF EXISTS `cupcakes`;
CREATE TABLE IF NOT EXISTS `cupcakes` (
  `cupcake` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `cupcake_id` int NOT NULL AUTO_INCREMENT,
  `cupcake_price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`cupcake_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cupcakes`
--

INSERT INTO `cupcakes` (`cupcake`, `cupcake_id`, `cupcake_price`) VALUES
('Chocolate', 1, '3.04'),
('Peanut Butter Cup', 2, '3.04'),
('Sprinkle', 3, '3.04'),
('Turtle', 4, '3.04'),
('Triple Chocolate', 5, '3.04'),
('Strawberry Cheesecake', 6, '3.04');

-- --------------------------------------------------------

--
-- Table structure for table `fillings`
--

DROP TABLE IF EXISTS `fillings`;
CREATE TABLE IF NOT EXISTS `fillings` (
  `filling` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `filling_id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`filling_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fillings`
--

INSERT INTO `fillings` (`filling`, `filling_id`) VALUES
('Strawberry', 1),
('Raspberry', 2),
('Chocolate Ganache', 3);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `gallery_id` int NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`gallery_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `file_name`, `uploaded_on`, `status`) VALUES
(1, 'chocolate_strawberry.jpg', '2023-02-14 09:59:35', '1'),
(2, 'cinnamon_rolls.jpg', '2023-02-14 09:59:40', '1'),
(3, 'banner_cupcake.jpg', '2023-02-14 09:59:46', '1'),
(4, 'logo_favicon.jpg', '2023-02-14 10:00:47', '1'),
(5, 'client.jpg', '2023-02-14 10:00:56', '1'),
(6, 'contact.jpg', '2023-02-14 13:41:46', '1'),
(7, 'triple_chocolate.jpg', '2023-02-17 16:57:57', '1'),
(8, 'p7.png', '2023-02-17 18:15:41', '1');

-- --------------------------------------------------------

--
-- Table structure for table `order_cakes`
--

DROP TABLE IF EXISTS `order_cakes`;
CREATE TABLE IF NOT EXISTS `order_cakes` (
  `cake_id` int NOT NULL,
  `filling_id` int NOT NULL,
  `size_price_id` int NOT NULL,
  `cake_order_ID` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`cake_order_ID`),
  KEY `cake_constraint` (`cake_id`),
  KEY `filling_constraint` (`filling_id`),
  KEY `size_constraint` (`size_price_id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_cakes`
--

INSERT INTO `order_cakes` (`cake_id`, `filling_id`, `size_price_id`, `cake_order_ID`) VALUES
(33, 3, 3, 34),
(34, 2, 3, 33),
(40, 2, 1, 32);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
