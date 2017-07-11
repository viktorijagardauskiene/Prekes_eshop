-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2017 at 05:52 PM
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
  `group` text CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL,
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

INSERT INTO `products` (`id`, `group`, `name`, `brand`, `description`, `price`, `weight`, `image`) VALUES
(28, 'Saldumynai', 'Sokoladas', 'Karuna', 'Puikusis sokoladas', '2.00', '1.00', 'Sokoladas_Karuna_52403.jpg'),
(25, 'Pieno produktai', 'Sviestas', 'Dvaro', 'Puikusis sviestas', '1.00', '500.00', 'Sviestas_Dvaro_31388.jpg'),
(29, 'Kepiniai', 'Sausainis', 'Gaidelis', 'Puikus sausainis', '0.75', '200.00', 'Sausainis_Gaidelis_12909.jpg'),
(23, 'Konservai', 'Tunas', 'Calvo', 'Savo sultyse', '3.29', '0.24', 'Tunas_Calvo_56342.jpg'),
(30, 'hhhhhhhh', 'gggggggg', 'ggggggg', 'gggggggg', '4.00', '5.00', NULL),
(31, 'hhhhhhhh', 'gggggggg', 'ggggggg', 'gggggggg', '4.00', '5.00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products_group`
--

CREATE TABLE `products_group` (
  `id` int(11) NOT NULL,
  `group` text CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_group`
--

INSERT INTO `products_group` (`id`, `group`) VALUES
(1, 'pieno produktai'),
(2, 'kepiniai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `products_group`
--
ALTER TABLE `products_group`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `products_group`
--
ALTER TABLE `products_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
