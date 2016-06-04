# ************************************************************
# Sequel Pro SQL dump
# Version 4529
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.10)
# Database: biometricsystem
# Generation Time: 2016-06-04 09:19:07 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table candidate
# ------------------------------------------------------------

DROP TABLE IF EXISTS `candidate`;

CREATE TABLE `candidate` (
  `ID` int(11) NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `Surname` varchar(45) DEFAULT NULL,
  `Party` varchar(45) DEFAULT NULL,
  `ConstType` varchar(45) DEFAULT NULL,
  `ConstNumber` int(11) DEFAULT NULL,
  `Picture` varchar(255) DEFAULT NULL,
  `Votes` int(11) DEFAULT '0',
  `ElectoralSign` varchar(255) DEFAULT '',
  `ElectoralSignName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `candidate` WRITE;
/*!40000 ALTER TABLE `candidate` DISABLE KEYS */;

INSERT INTO `candidate` (`ID`, `Name`, `Surname`, `Party`, `ConstType`, `ConstNumber`, `Picture`, `Votes`, `ElectoralSign`, `ElectoralSignName`)
VALUES
	(1,'Candidate1NA1','Surname1','P1','NA',1,'Pic.jpg',50,'P1.jpg','P1'),
	(2,'Candidate2NA1','Surname2','P2','NA',1,'Pic.jpg',70,'P2.jpg','P2'),
	(3,'Candidate3NA1','Surname3','P3','NA',1,'Pic.jpg',92,'P3.jpg','P3'),
	(4,'Candidate4NA1','Surname4','P5','NA',1,'Pic.jpg',70,'P5.jpg','P5'),
	(5,'Candidate6NA1','Surname6','P6','NA',1,'Pic.jpg',50,'P6.jpg','P6'),
	(6,'Candidate1PK1','Surname','P1','PK',1,'Pic.jpg',50,'P1.jpg','P1'),
	(7,'Candidate2PK1','Surname2','P2','PK',1,'Pic.jpg',71,'P2.jpg','P2'),
	(8,'Candidate3PK1','Surname3','P3','PK',1,'Pic.jpg',70,'P3.jpg','P3'),
	(9,'Candidate4PK1','Surname4','P4','PK',1,'Pic.jpg',50,'P4.jpg','P4'),
	(10,'Candidate1NA2','Surname2','P1','NA',2,'Pic.jpg',0,'P1.jpg','P1');

/*!40000 ALTER TABLE `candidate` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table data
# ------------------------------------------------------------

DROP TABLE IF EXISTS `data`;

CREATE TABLE `data` (
  `ID` int(11) NOT NULL,
  `ID_no` varchar(45) DEFAULT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `SurName` varchar(45) DEFAULT NULL,
  `Address` varchar(45) DEFAULT NULL,
  `Picture` varchar(255) DEFAULT '',
  `City` varchar(45) DEFAULT NULL,
  `Province` varchar(45) DEFAULT NULL,
  `DOB` varchar(45) DEFAULT NULL,
  `NA` varchar(45) DEFAULT NULL,
  `Provincial` varchar(45) DEFAULT NULL,
  `Gender` varchar(45) DEFAULT NULL,
  `PollingStation` varchar(45) DEFAULT NULL,
  `FPTemplate` blob,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `data` WRITE;
/*!40000 ALTER TABLE `data` DISABLE KEYS */;

INSERT INTO `data` (`ID`, `ID_no`, `Name`, `SurName`, `Address`, `Picture`, `City`, `Province`, `DOB`, `NA`, `Provincial`, `Gender`, `PollingStation`, `FPTemplate`)
VALUES
	(1,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `data` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table party
# ------------------------------------------------------------

DROP TABLE IF EXISTS `party`;

CREATE TABLE `party` (
  `ID` int(11) NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `HeadName` varchar(45) DEFAULT NULL,
  `PartyAcr` varchar(45) DEFAULT NULL,
  `ElectoralSign` varchar(255) DEFAULT '',
  `ElectoralSignName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `party` WRITE;
/*!40000 ALTER TABLE `party` DISABLE KEYS */;

INSERT INTO `party` (`ID`, `Name`, `HeadName`, `PartyAcr`, `ElectoralSign`, `ElectoralSignName`)
VALUES
	(1,'Pakistan Muslim League (N)','Nawaz Sharif','PML-N','pmlnlogo.jpg','Lion'),
	(2,'Pakistan Tehreek-e-Insaaf','Imran Khan','PTI','ptilogo.jpg','Bat'),
	(3,'Pakistan Peoples Party','Asif Ali Zardari','PPP','ppplogo.jpg','Arrow');

/*!40000 ALTER TABLE `party` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
