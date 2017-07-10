
CREATE DATABASE IF NOT EXISTS `viktorijag` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `viktorijag`;


CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `brand` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin,
  `price` decimal(10,2) DEFAULT NULL,
  `weight` decimal(10,2) DEFAULT NULL,
  `image` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1 COMMENT='CA Products';

DELETE FROM `products`;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `name`, `brand`, `description`, `price`, `weight`, `image`) VALUES
	(18, 'Pienas', 'Dvaro', '3.5% riebumo pienas (1L)', 0.95, 1.00, NULL),
	(17, 'Sviestas', 'Rokiškio', '82% riebumo sviestas (180 g.)', 1.45, 0.18, NULL),
	(15, 'Duona skrudinimui', 'Toste', 'Viso grūdo', 1.00, 0.50, NULL),
	(16, 'Šokoladinis kremas', 'Nutella', 'Su lazdynų riešutais', 2.00, 0.35, NULL),
	(19, 'Tunas', 'Calvo', 'Savo sultyse', 3.29, 0.24, NULL);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
