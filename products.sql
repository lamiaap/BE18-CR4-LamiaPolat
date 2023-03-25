-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2023 at 10:21 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be18_cr4_lamia_biglibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `ISBN` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(300) DEFAULT NULL,
  `short_description` varchar(600) DEFAULT NULL,
  `type` varchar(500) DEFAULT NULL,
  `author_first_name` varchar(50) DEFAULT NULL,
  `author_last_name` varchar(50) DEFAULT NULL,
  `publisher_name` varchar(50) DEFAULT NULL,
  `publisher_address` varchar(50) DEFAULT NULL,
  `publish_date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ISBN`, `title`, `image`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`) VALUES
(1, 'lamia', 'test', '', 'test', 'test', '', 'test', '', 'test'),
(2, 'kitty', 'test', '', 'test', 'test', '', 'test', '', 'test'),
(7, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test'),
(8, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2023/03/23'),
(9, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2023/03/23'),
(10, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2023/03/23'),
(11, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2023/03/23'),
(12, 'test', '', '', '', '', '', '', '', ''),
(13, 'test', '', '', '', '', '', '', '', ''),
(14, 'test', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ISBN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ISBN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
