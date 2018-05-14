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
  `pass` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla app.administrator: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `administrator` DISABLE KEYS */;
/*!40000 ALTER TABLE `administrator` ENABLE KEYS */;

-- Volcando estructura para tabla app.companyoffer
CREATE TABLE IF NOT EXISTS `companyoffer` (
  `idOffer` int(11) NOT NULL AUTO_INCREMENT,
  `idCompany` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `description` varchar(255) NOT NULL,
  `publiDate` date NOT NULL,
  `vacant` int(11) NOT NULL,
  `idSection` int(11) NOT NULL,
  `idState` int(11) NOT NULL,
  `idAdmin` int(11) NOT NULL,
  PRIMARY KEY (`idOffer`),
  KEY `idAdmin` (`idAdmin`),
  KEY `idCompany` (`idCompany`),
  KEY `companyoffer_ibfk_3` (`idSection`),
  KEY `idState` (`idState`),
  CONSTRAINT `companyoffer_ibfk_1` FOREIGN KEY (`idAdmin`) REFERENCES `administrator` (`id`),
  CONSTRAINT `companyoffer_ibfk_2` FOREIGN KEY (`idCompany`) REFERENCES `users_company` (`id`),
  CONSTRAINT `companyoffer_ibfk_3` FOREIGN KEY (`idSection`) REFERENCES `section` (`idSection`),
  CONSTRAINT `companyoffer_ibfk_4` FOREIGN KEY (`idState`) REFERENCES `state` (`idState`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla app.companyoffer: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `companyoffer` DISABLE KEYS */;
/*!40000 ALTER TABLE `companyoffer` ENABLE KEYS */;

-- Volcando estructura para tabla app.publiprofessional
CREATE TABLE IF NOT EXISTS `publiprofessional` (
  `idPubli` int(11) NOT NULL AUTO_INCREMENT,
  `idPforessional` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `description` varchar(255) NOT NULL,
  `publiDate` date NOT NULL,
  `idSection` int(11) NOT NULL,
  `idState` int(11) NOT NULL,
  `idAdmin` int(11) NOT NULL,
  PRIMARY KEY (`idPubli`),
  KEY `idAdmin` (`idAdmin`),
  KEY `idPforessional` (`idPforessional`),
  KEY `idState` (`idState`),
  KEY `idSection` (`idSection`),
  CONSTRAINT `publiprofessional_ibfk_1` FOREIGN KEY (`idAdmin`) REFERENCES `administrator` (`id`),
  CONSTRAINT `publiprofessional_ibfk_2` FOREIGN KEY (`idPforessional`) REFERENCES `users_professionals` (`id`),
  CONSTRAINT `publiprofessional_ibfk_3` FOREIGN KEY (`idState`) REFERENCES `state` (`idState`),
  CONSTRAINT `publiprofessional_ibfk_4` FOREIGN KEY (`idSection`) REFERENCES `section` (`idSection`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla app.publiprofessional: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `publiprofessional` DISABLE KEYS */;
/*!40000 ALTER TABLE `publiprofessional` ENABLE KEYS */;

-- Volcando estructura para tabla app.section
CREATE TABLE IF NOT EXISTS `section` (
  `idSection` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`idSection`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla app.section: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `section` DISABLE KEYS */;
/*!40000 ALTER TABLE `section` ENABLE KEYS */;

-- Volcando estructura para tabla app.state
CREATE TABLE IF NOT EXISTS `state` (
  `idState` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`idState`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla app.state: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `state` DISABLE KEYS */;
/*!40000 ALTER TABLE `state` ENABLE KEYS */;

-- Volcando estructura para tabla app.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL DEFAULT '0',
  `type_user` int(1) NOT NULL DEFAULT '0',
  `email` varchar(100) NOT NULL DEFAULT '0',
  `password` varchar(255) NOT NULL DEFAULT '0',
  `remember_token` varchar(255) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla app.users: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `name`, `type_user`, `email`, `password`, `remember_token`) VALUES
	(1, 'Judith', 0, 'judithfnd94@gmail.com', '$2y$10$8mIt8vzlr1aN4GAQHf5B5eqBTOzzmQroonMyZQWSD3eiBfirtmA.C', '0'),
	(2, 'Wildstylez', 0, 'wildstylez@wildstylez.com', '$2y$10$RlCf8nINJEhSacONyCmED.X0ijnaNoD/g3BBPVcIk4TDdDruqdTeq', '0'),
	(3, 'Wildstylez', 0, 'wildstylez@wildstylez.com', '$2y$10$w47OW5mrroIaz8fO.oKRJOORTn5iqrB8C8TGOh.8SiOSJE.UArkJq', '0'),
	(4, 'Wildstylez', 0, 'wildstylez@wildstylez.com', '$2y$10$lDZx/sLEvxHA3ryrqeIm6.3X3UXnkUbFvbcLFlVZYwchMIe/g7Npi', '0'),
	(5, 'Wildstylez', 0, 'wildstylez@wildstylez.com', '$2y$10$Mmu7kBIyptjdIjFRawJa7e9ieE5kjYCc6qo/q3zGDf0LctDvsEfI6', '0'),
	(6, 'Judith', 0, 'judith@nitka.com', '$2y$10$/I5R2AYD5.pq89ml8ZDNw.G8bdHGfEPLBeCWEMQKPfxaRw4t9BUfa', '0'),
	(7, 'Judith', 0, 'judith@nitka.com', '$2y$10$cmSdCggp.8zbPNAiTjv3x.lR7KC8I5QQCR/6/5kQ9/FDQxDdMH.O2', '0'),
	(8, 'WallaJob', 1, 'wallajob@wallajob.com', '$2y$10$h75MyJs/jiWsXrTs2gU1AO/9xaNNOnAb/QwwUS/O/HcdHVrvRIhpa', '0');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Volcando estructura para tabla app.users_company
CREATE TABLE IF NOT EXISTS `users_company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `surname` varchar(60) NOT NULL,
  `cif` varchar(9) NOT NULL,
  `country` varchar(40) NOT NULL,
  `city` varchar(60) NOT NULL,
  `direction` varchar(60) NOT NULL,
  `phoneNumber` varchar(14) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla app.users_company: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `users_company` DISABLE KEYS */;
REPLACE INTO `users_company` (`id`, `id_user`, `surname`, `cif`, `country`, `city`, `direction`, `phoneNumber`) VALUES
	(1, 0, 'test', 'asd', 'country', 'city', 'dir', '888');
/*!40000 ALTER TABLE `users_company` ENABLE KEYS */;

-- Volcando estructura para tabla app.users_professionals
CREATE TABLE IF NOT EXISTS `users_professionals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `surname` varchar(60) DEFAULT NULL,
  `surname2` varchar(60) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `dni` varchar(9) DEFAULT NULL,
  `country` varchar(40) DEFAULT NULL,
  `city` varchar(60) DEFAULT NULL,
  `direction` varchar(60) DEFAULT NULL,
  `phoneNumber` varchar(14) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_professionals_users` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla app.users_professionals: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `users_professionals` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_professionals` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
