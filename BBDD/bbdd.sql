-- --------------------------------------------------------
-- Host:                         192.168.99.100
-- Versión del servidor:         5.7.21 - MySQL Community Server (GPL)
-- SO del servidor:              Linux
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para app
CREATE DATABASE IF NOT EXISTS `app` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `app`;

-- Volcando estructura para tabla app.administrator
CREATE TABLE IF NOT EXISTS `administrator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `surname1` varchar(60) NOT NULL,
  `surname2` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla app.administrator: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `administrator` DISABLE KEYS */;
/*!40000 ALTER TABLE `administrator` ENABLE KEYS */;

-- Volcando estructura para tabla app.company_offers
CREATE TABLE IF NOT EXISTS `company_offers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_company` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `description` varchar(255) NOT NULL,
  `vacancies` varchar(50) NOT NULL,
  `id_category` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `salary` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idAdmin` (`id_admin`),
  KEY `idCompany` (`id_company`),
  KEY `companyoffer_ibfk_3` (`id_category`),
  KEY `idState` (`status`),
  CONSTRAINT `company_offers_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `administrator` (`id`),
  CONSTRAINT `company_offers_ibfk_2` FOREIGN KEY (`id_company`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `company_offers_ibfk_3` FOREIGN KEY (`id_category`) REFERENCES `offer_categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla app.company_offers: ~13 rows (aproximadamente)
/*!40000 ALTER TABLE `company_offers` DISABLE KEYS */;
REPLACE INTO `company_offers` (`id`, `id_company`, `name`, `description`, `vacancies`, `id_category`, `status`, `id_admin`, `salary`) VALUES
	(13, 33, 'aaaaaaaaaa', 'jkjbkujb', '8', 1, 1, NULL, 999),
	(14, 33, 'Judith', 'ihvhv', '9', 1, 1, NULL, 8888),
	(15, 33, 'Judith', 'ihvhv', '9', 1, 1, NULL, 8888),
	(16, 33, 'hola', 'cldknvrwlkfnw', '8', 2, 1, NULL, 9999),
	(17, 33, 'dddd', 'kjvvkwehf', '9', 1, 1, NULL, 3333),
	(18, 33, 'thtwthwh ret', 'rthtjry', '9', 1, 1, NULL, 777777),
	(19, 33, 'thtwthwh ret', 'rthtjry', '9', 1, 1, NULL, 777777),
	(20, 33, 'snpidefkl', 'fwlseifnclweifhnewlfihweiohfieh', '5', 1, 1, NULL, 10000),
	(21, 33, 'snpidefkl', 'fwlseifnclweifhnewlfihweiohfieh', '5', 1, 1, NULL, 10000),
	(22, 33, 'snpidefkl', 'fwlseifnclweifhnewlfihweiohfieh', '5', 1, 1, NULL, 10000),
	(23, 33, 't45y', 'rg4werh', '4', 1, 1, NULL, NULL),
	(24, 33, 't45y', 'rg4werh', '4', 1, 1, NULL, NULL),
	(25, 33, 'brgbrt', 'hhhhhhhhhhhhhhhhhhhhhh', 'dos', 3, 1, NULL, 96986);
/*!40000 ALTER TABLE `company_offers` ENABLE KEYS */;

-- Volcando estructura para tabla app.offer_categories
CREATE TABLE IF NOT EXISTS `offer_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla app.offer_categories: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `offer_categories` DISABLE KEYS */;
REPLACE INTO `offer_categories` (`id`, `category`) VALUES
	(1, 'IT and Telecoms'),
	(2, 'Administration'),
	(3, 'Customer service');
/*!40000 ALTER TABLE `offer_categories` ENABLE KEYS */;

-- Volcando estructura para tabla app.offer_inscription
CREATE TABLE IF NOT EXISTS `offer_inscription` (
  `id` int(11) NOT NULL,
  `id_offer` int(11) DEFAULT NULL,
  `id_professional` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla app.offer_inscription: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `offer_inscription` DISABLE KEYS */;
/*!40000 ALTER TABLE `offer_inscription` ENABLE KEYS */;

-- Volcando estructura para tabla app.publications_professional
CREATE TABLE IF NOT EXISTS `publications_professional` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_Professional` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `description` varchar(255) NOT NULL,
  `publication_date` date NOT NULL,
  `idSection` int(11) NOT NULL,
  `idState` int(11) NOT NULL,
  `idAdmin` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idAdmin` (`idAdmin`),
  KEY `idPforessional` (`id_Professional`),
  KEY `idState` (`idState`),
  KEY `idSection` (`idSection`),
  CONSTRAINT `publications_professional_ibfk_1` FOREIGN KEY (`idAdmin`) REFERENCES `administrator` (`id`),
  CONSTRAINT `publications_professional_ibfk_2` FOREIGN KEY (`id_Professional`) REFERENCES `users_professionals` (`id`),
  CONSTRAINT `publications_professional_ibfk_3` FOREIGN KEY (`idState`) REFERENCES `status` (`id`),
  CONSTRAINT `publications_professional_ibfk_4` FOREIGN KEY (`idSection`) REFERENCES `offer_categories` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla app.publications_professional: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `publications_professional` DISABLE KEYS */;
/*!40000 ALTER TABLE `publications_professional` ENABLE KEYS */;

-- Volcando estructura para tabla app.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL DEFAULT '0',
  `type_user` int(1) NOT NULL DEFAULT '0',
  `email` varchar(100) NOT NULL DEFAULT '0',
  `password` varchar(255) NOT NULL DEFAULT '0',
  `remember_token` varchar(255) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla app.users: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `name`, `type_user`, `email`, `password`, `remember_token`) VALUES
	(2, 'Wildstylez', 0, 'wildstylez@wildstylez.com', '$2y$10$RlCf8nINJEhSacONyCmED.X0ijnaNoD/g3BBPVcIk4TDdDruqdTeq', '0'),
	(8, 'WallaJob', 1, 'wallajob@wallajob.com', '$2y$10$h75MyJs/jiWsXrTs2gU1AO/9xaNNOnAb/QwwUS/O/HcdHVrvRIhpa', '0'),
	(13, 'oriol', 0, 'oriol@oriol.oriol', '$2y$10$T211FLY/F53dycSIk/BojObcl04iOnqS3Nj.kxSrYlrAe58U/eAWi', 'Aaz8KAfD1J7Rq7idO391Wdyd6P7x5BthmH6QxR0WJDsp9dpr0f8WDhfBTZDe'),
	(24, 'arnau', 1, 'arnau@arnau.arnau', '$2y$10$gOxLl/EQHbF0mZJoo0ekhuHgkaxyMzxk1QnXLN/fHYHQQ/1V5fx16', 'YZkkBR4L6o26D1dB33egMEapNytTEStgNOWi98YgOdRbPdFZI5zGYyHb4TNq'),
	(26, 'mod', 1, 'mod@mod.mod', '$2y$10$fzrEXbdFo7Lf4qplnFyFkuIBQhaTkyBVAivE/mmr5KsQSXaRWCWD6', 'lunVkloqclDCZRtAKyqEal2hv4ruVcRbvUlEcCz1kdCPRomy27A9SbRD9V6W'),
	(32, '0', 0, 'oriol@oriol.oriol', '$2y$10$chTuBwB74JYaC7.otgr8ZeZtR7ehq6g0V8zxOH8BoebMPXeYyZbX6', '0'),
	(33, 'jordi', 1, 'jordi@jordi.jordi', '$2y$10$uZhPSlUrvIj5CSIXSMsgbePsPM5G2hN0IWP6XdNaFxX6QAOv.QPUq', 'GZTcbnmGvE41L5X15WwytfhEf9sWc4PaueTx5ZZrx2hFk6iZ5JanfBaXsk30'),
	(34, 'Judith', 0, 'judith@judith.judith', '$2y$10$p.fxYLuxVliE2dpYZSq0tOEmUHLKhwzEwCT9Z9ZojvU8RYJd6aaD6', 'LztyHTUp7s3kZguFg7i6yGszR1Tr4US3DUFJHC8aqazBzyRyj2Ez0DxpTVvu');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Volcando estructura para tabla app.users_company
CREATE TABLE IF NOT EXISTS `users_company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `cif` varchar(9) NOT NULL,
  `country` varchar(40) NOT NULL,
  `city` varchar(60) DEFAULT NULL,
  `direction` varchar(60) DEFAULT NULL,
  `phoneNumber` varchar(14) DEFAULT NULL,
  `contact_name` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_users_company_users` (`id_user`),
  CONSTRAINT `FK_users_company_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla app.users_company: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `users_company` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_company` ENABLE KEYS */;

-- Volcando estructura para tabla app.users_professionals
CREATE TABLE IF NOT EXISTS `users_professionals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `surname` varchar(60) DEFAULT NULL,
  `surname2` varchar(60) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `dni` varchar(9) DEFAULT NULL,
  `sex` int(1) DEFAULT NULL,
  `country` varchar(40) DEFAULT NULL,
  `city` varchar(60) DEFAULT NULL,
  `direction` varchar(60) DEFAULT NULL,
  `phoneNumber` varchar(14) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_users_professionals_users` (`id_user`),
  CONSTRAINT `FK_users_professionals_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla app.users_professionals: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `users_professionals` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_professionals` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
