-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2017 at 06:17 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `viktorijag`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `brand` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin,
  `price` decimal(10,2) DEFAULT NULL,
  `weight` decimal(10,2) DEFAULT NULL,
  `image` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='CA Products';

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `brand`, `description`, `price`, `weight`, `image`) VALUES
(28, 'Sokoladas', 'Karuna', 'Puikusis sokoladas', '2.00', '1.00', 'Sokoladas_Karuna_52403.jpg'),
(27, 'Duona', 'Ruginė', 'Puikioji duona', '1.45', '200.00', 'Duona_Ruginė_43831.jpg'),
(15, 'Duona skrudinimui', 'Toste', 'Viso grūdo', '1.00', '0.50', NULL),
(25, 'Sviestas', 'Dvaro', 'Puikusis sviestas', '1.00', '500.00', 'Sviestas_Dvaro_31388.jpg'),
(24, 'Šokoladas', 'Karūna', 'Juodasis šokoladas', '2.45', '500.00', 'Šokoladas_Karūna_41661.jpg'),
(22, 'Pienas', 'Dvaro', 'Puikus pienas', '2.00', '1.00', 'pienas_dvaro_17382.jpg'),
(23, 'Tunas', 'Calvo', 'Savo sultyse', '3.29', '0.24', 'Tunas_Calvo_56342.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
