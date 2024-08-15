-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 15, 2024 at 04:53 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carvilla`
--

-- --------------------------------------------------------

--
-- Table structure for table `bed`
--

DROP TABLE IF EXISTS `bed`;
CREATE TABLE IF NOT EXISTS `bed` (
  `id` int NOT NULL AUTO_INCREMENT,
  `p` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bed`
--

INSERT INTO `bed` (`id`, `p`, `image`, `price`) VALUES
(1, '8x8 Bed', 'bed2.png', 60000);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int NOT NULL,
  `message` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'Aung', 'aung@gmail.com', 912345, 'hiuiuiuiui'),
(3, 'Kyaw', 'Kyaw@gmail.com', 912344, 'Hi this dev is very handsome!!!'),
(4, 'Burger', 'kywg@gmail.com', 12345, 'kn'),
(5, 'Aung', 'aung@gmail.com', 91812121, 'hi'),
(6, 'Aung', 'aung@gmail.com', 91812121, 'hi'),
(7, 'Aung', 'aung@gmail.com', 91812121, 'handsome dev \r\n'),
(8, 'Aung', 'aung@gmail.com', 921312312, 'handsome dev \r\n'),
(9, 'Aung', 'aung@gmail.com', 921312312, 'handsome dev \r\n'),
(10, 'Aung', 'aung@gmail.com', 921312312, 'oippipoipo'),
(11, 'asd', 'asd@gmail.com', 12345, 'asdasdas'),
(12, 'asd', 'asd@gmail.com', 12345, 'efsfsdfsdfg'),
(13, 'Aung', 'aung@gmail.com', 921312312, 'oipiopi');

-- --------------------------------------------------------

--
-- Table structure for table `fur`
--

DROP TABLE IF EXISTS `fur`;
CREATE TABLE IF NOT EXISTS `fur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `p` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `fur`
--

INSERT INTO `fur` (`id`, `p`, `image`, `price`) VALUES
(7, 'Chair', 'img-4.png', 200),
(9, 'Office Chair', 'beachchair.jpg', 10000),
(11, '1x Chair', 'redchair.png', 4000);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `price` int NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `note` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `email`, `productname`, `price`, `phone`, `address`, `note`) VALUES
(1, 'Kyaw G', 'kywg@gmail.com', 'Beach Chair', 15000, '0912343412321', 'ygn', 'ygn7878');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

DROP TABLE IF EXISTS `subscribe`;
CREATE TABLE IF NOT EXISTS `subscribe` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `price` int NOT NULL,
  `phone` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `name`, `email`, `product`, `price`, `phone`) VALUES
(1, 'Kyaw G', 'kywg@gmail.com', 'Tier 1', 10000, '0912343412321'),
(2, 'Kyaw G', 'kywg@gmail.com', 'Tier 1', 10000, '0912343412321'),
(3, 'Kyaw G', 'kywg@gmail.com', 'Tier 2', 30000, '0912343412321');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
