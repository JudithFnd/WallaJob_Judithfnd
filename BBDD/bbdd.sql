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
  `idAdmin` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `surname1` varchar(60) NOT NULL,
  `surname2` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(32) NOT NULL,
  PRIMARY KEY (`idAdmin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla app.administrator: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `administrator` DISABLE KEYS */;
/*!40000 ALTER TABLE `administrator` ENABLE KEYS */;

-- Volcando estructura para tabla app.company
CREATE TABLE IF NOT EXISTS `company` (
  `idCompany` int(11) NOT NULL AUTO_INCREMENT,
  `cif` varchar(9) NOT NULL,
  `surname` varchar(60) NOT NULL,
  `country` varchar(40) NOT NULL,
  `city` varchar(60) NOT NULL,
  `direction` varchar(60) NOT NULL,
  `phoneNumber` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(32) NOT NULL,
  PRIMARY KEY (`idCompany`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla app.company: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
REPLACE INTO `company` (`idCompany`, `cif`, `surname`, `country`, `city`, `direction`, `phoneNumber`, `email`, `pass`) VALUES
	(1, 'asd', 'test', 'country', 'city', 'dir', '888', 'email', 'pass');
/*!40000 ALTER TABLE `company` ENABLE KEYS */;

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
  CONSTRAINT `companyoffer_ibfk_1` FOREIGN KEY (`idAdmin`) REFERENCES `administrator` (`idAdmin`),
  CONSTRAINT `companyoffer_ibfk_2` FOREIGN KEY (`idCompany`) REFERENCES `company` (`idCompany`),
  CONSTRAINT `companyoffer_ibfk_3` FOREIGN KEY (`idSection`) REFERENCES `section` (`idSection`),
  CONSTRAINT `companyoffer_ibfk_4` FOREIGN KEY (`idState`) REFERENCES `state` (`idState`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla app.companyoffer: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `companyoffer` DISABLE KEYS */;
/*!40000 ALTER TABLE `companyoffer` ENABLE KEYS */;

-- Volcando estructura para tabla app.professional
CREATE TABLE IF NOT EXISTS `professional` (
  `idProfessional` int(11) NOT NULL AUTO_INCREMENT,
  `dni` varchar(9) NOT NULL,
  `name` varchar(60) NOT NULL,
  `surname1` varchar(60) NOT NULL,
  `surname2` varchar(60) NOT NULL,
  `birthdate` date NOT NULL,
  `country` varchar(40) NOT NULL,
  `city` varchar(60) NOT NULL,
  `direction` varchar(60) NOT NULL,
  `phoneNumber` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(32) NOT NULL,
  PRIMARY KEY (`idProfessional`),
  UNIQUE KEY `dni` (`dni`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla app.professional: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `professional` DISABLE KEYS */;
/*!40000 ALTER TABLE `professional` ENABLE KEYS */;

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
  CONSTRAINT `publiprofessional_ibfk_1` FOREIGN KEY (`idAdmin`) REFERENCES `administrator` (`idAdmin`),
  CONSTRAINT `publiprofessional_ibfk_2` FOREIGN KEY (`idPforessional`) REFERENCES `professional` (`idProfessional`),
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

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
