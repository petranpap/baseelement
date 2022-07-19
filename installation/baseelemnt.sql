-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.31 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for baseelement
CREATE DATABASE IF NOT EXISTS `baseelement` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `baseelement`;

-- Dumping structure for table baseelement.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table baseelement.migrations: 0 rows
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table baseelement.services
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK_services_users` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table baseelement.services: 6 rows
DELETE FROM `services`;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` (`id`, `name`) VALUES
	(1, 'Audit & Accountancy'),
	(2, ' Building & Construction'),
	(3, 'Education'),
	(4, 'Distribution'),
	(5, 'Travel & Tourism'),
	(6, 'Hotel & Leisure Services');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;

-- Dumping structure for table baseelement.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workphone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobilephone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `services` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table baseelement.users: 30 rows
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `surname`, `email`, `salary`, `image`, `age`, `workphone`, `mobilephone`, `address`, `postcode`, `country`, `birthday`, `services`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(6, 'Garrett', 'Winters', '', '170750', NULL, '63', '', '', '', '', '', '', 'Audit & Accountancy', NULL, NULL, NULL, NULL, NULL),
	(8, 'Cedric', 'Kelly', '', '433060', NULL, '22', '', '', '', '', '', '', 'Travel & Tourism', NULL, NULL, NULL, NULL, NULL),
	(9, 'Airi', 'Satou', '', '162700', NULL, '33', '', '', '', '', '', '', 'Education', NULL, NULL, NULL, NULL, NULL),
	(10, 'Brielle', 'Williamson', '', '372000', NULL, '61', '', '', '', '', '', '', 'Hotel & Leisure Services', NULL, NULL, NULL, NULL, NULL),
	(11, 'Herrod', 'Chandler', '', '137500', NULL, '59', '', '', '', '', '', '', 'Audit & Accountancy', NULL, NULL, NULL, NULL, NULL),
	(12, 'Rhona', 'Davidson', '', '327900', NULL, '55', '', '', '', '', '', '', 'Hotel & Leisure Services', NULL, NULL, NULL, NULL, NULL),
	(13, 'Colleen', 'Hurst', '', '205500', NULL, '39', '', '', '', '', '', '', 'Building & Construction', NULL, NULL, NULL, NULL, NULL),
	(14, 'Sonya', 'Frost', '', '103600', NULL, '23', '', '', '', '', '', '', 'Travel & Tourism', NULL, NULL, NULL, NULL, NULL),
	(15, 'Jena', 'Gaines', '', '90560', NULL, '30', '', '', '', '', '', '', 'Education', NULL, NULL, NULL, NULL, NULL),
	(16, 'Quinn', 'Flynn', '', '342000', NULL, '22', '', '', '', '', '', '', 'Hotel & Leisure Services', NULL, NULL, NULL, NULL, NULL),
	(17, 'Charde', 'Marshall', '', '470600', NULL, '36', '', '', '', '', '', '', 'Distribution', NULL, NULL, NULL, NULL, NULL),
	(18, 'Haley', 'Kennedy', '', '313500', NULL, '43', '', '', '', '', '', '', 'Audit & Accountancy', NULL, NULL, NULL, NULL, NULL),
	(19, 'Tatyana', 'Fitzpatrick', '', '385750', NULL, '19', '', '', '', '', '', '', 'Hotel & Leisure Services', NULL, NULL, NULL, NULL, NULL),
	(20, 'Michael', 'Silva', '', '198500', NULL, '66', '', '', '', '', '', '', 'Audit & Accountancy', NULL, NULL, NULL, NULL, NULL),
	(21, 'Paul', 'Byrd', '', '725000', NULL, '64', '', '', '', '', '', '', 'Hotel & Leisure Services', NULL, NULL, NULL, NULL, NULL),
	(22, 'Gloria', 'Little', '', '237500', NULL, '59', '', '', '', '', '', '', 'Education', NULL, NULL, NULL, NULL, NULL),
	(23, 'Bradley', 'Greer', '', '132000', NULL, '41', '', '', '', '', '', '', 'Travel & Tourism', NULL, NULL, NULL, NULL, NULL),
	(24, 'Dai', 'Rios', '', '217500', NULL, '35', '', '', '', '', '', '', 'Audit & Accountancy', NULL, NULL, NULL, NULL, NULL),
	(25, 'Jenette', 'Caldwell', '', '345000', NULL, '30', '', '', '', '', '', '', 'Travel & Tourism', NULL, NULL, NULL, NULL, NULL),
	(26, 'Yuri', 'Berry', '', '675000', NULL, '40', '', '', '', '', '', '', 'Education', NULL, NULL, NULL, NULL, NULL),
	(27, 'Caesar', 'Vance', '', '106450', NULL, '21', '', '', '', '', '', '', 'Distribution', NULL, NULL, NULL, NULL, NULL),
	(28, 'Doris', 'Wilder', '', '85600', NULL, '23', '', '', '', '', '', '', 'Audit & Accountancy', NULL, NULL, NULL, NULL, NULL),
	(31, 'Petros Papagiannis', 'Surname', 'p.papagiannis@nup.ac.cy', '12341234', NULL, NULL, '+35733290744', '2', 'address', 'postcode', 'Cyprus', 'birthday', 'Education', NULL, NULL, NULL, NULL, NULL),
	(32, 'Petros Papagiannis', 'Papagiannis', 'p.papagiannis@nup.ac.cy', '12341234', NULL, NULL, '+35733290744', '2', '32', '12', 'Cyprus', '66', 'Hotel & Leisure Services', NULL, NULL, NULL, NULL, NULL),
	(33, 'Petros Papagiannis', 'Papagiannis', 'p.papagiannis@nup.ac.cy', '99', NULL, NULL, '+35733290744', '00', 'aa', '23', 'Cyprus', 'tg', '0', NULL, NULL, NULL, NULL, NULL),
	(34, 'Petros Papagiannis', 'Papagiannis', 'p.papagiannis@nup.ac.cy', '99', NULL, NULL, '+35733290744', '+35733290744', 'Dimokratias 12', '14122', 'Cyprus', '66', 'Building & Construction', NULL, NULL, NULL, NULL, NULL),
	(36, 'Petros Papagiannis', NULL, 'peterpapagiannis@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', NULL, '$2y$10$DefJSKjs/XS/vkyKYZjolOZduAwhrPczfEVvPxQZWETEeygV7d5y2', NULL, '2022-07-18 11:53:53', '2022-07-18 11:53:53');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
