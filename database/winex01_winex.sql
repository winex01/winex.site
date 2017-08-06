-- MySQL dump 10.13  Distrib 5.5.51-38.2, for Linux (x86_64)
--
-- Host: localhost    Database: winex01_winex
-- ------------------------------------------------------
-- Server version	5.5.51-38.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `about_page`
--

DROP TABLE IF EXISTS `about_page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `about_page` (
  `about_id` int(11) NOT NULL AUTO_INCREMENT,
  `about_description` text NOT NULL,
  `about_activate` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`about_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about_page`
--

LOCK TABLES `about_page` WRITE;
/*!40000 ALTER TABLE `about_page` DISABLE KEYS */;
INSERT INTO `about_page` (`about_id`, `about_description`, `about_activate`) VALUES (1,'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.',0),(2,'I\'m a web programmer and available for hire I am a fresh college graduate currently looking for a full-time position. I would like to utilize my skills and experience as well as my passion for web development. Moreover, I am eager to build a long-term career in the field of web development.',0),(4,'I\'m a web programmer and available for hire as freelance. I would like to utilize my skills and experience as well as my passion for web development. Moreover, I am eager to build a long-term career in the field of web development.',1);
/*!40000 ALTER TABLE `about_page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `achievements`
--

DROP TABLE IF EXISTS `achievements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `achievements` (
  `achi_id` int(11) NOT NULL AUTO_INCREMENT,
  `achi_title` varchar(100) NOT NULL,
  `achi_place` varchar(100) NOT NULL,
  `achi_date` varchar(35) NOT NULL,
  `achi_type_id` int(11) NOT NULL,
  `achi_timestamps` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`achi_id`),
  KEY `achi_type_id` (`achi_type_id`),
  CONSTRAINT `achievements_ibfk_1` FOREIGN KEY (`achi_type_id`) REFERENCES `achievements_type` (`achi_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `achievements`
--

LOCK TABLES `achievements` WRITE;
/*!40000 ALTER TABLE `achievements` DISABLE KEYS */;
INSERT INTO `achievements` (`achi_id`, `achi_title`, `achi_place`, `achi_date`, `achi_type_id`, `achi_timestamps`) VALUES (1,'Acer IT Excellence Award','Acer Philippines & P.I.T','March 24, 2017',1,'2017-06-09 07:28:01'),(2,'Skills Olympic for Programming Winner (1st Prize)','Palompon Institute of Technology Cote Week','February 18, 2016',1,'2017-06-09 07:28:00'),(3,'Public Speaking & Confidence Building Program','Martinelli Speech Center - Ormoc City, Leyte','May 16, 2009',2,'2017-06-09 07:28:03'),(4,'Microsoft Office Training Program','STI Centrum - Ormoc City, Leyte','January 06, 2008',2,'2017-06-09 07:28:02'),(5,'Ethics in the Workplace (PIT CHIC)','P.I.T - Palompon, Leyte','February 09, 2017',2,'2017-06-09 07:28:04'),(6,'IT Support and Maintenance (OJT','International Pharmaceuticals, Inc. (IPI)','April 2016 - May 2016',5,'2017-06-09 07:28:13'),(7,'Villaba South Central School','Del Norte, Villaba Leyte','1998-2004',6,'2017-06-09 07:28:06'),(8,'Holy Child High School','Del Sur, Villaba Leyte','2004-2008',6,'2017-06-09 07:28:07'),(9,'Leyte Colleges (3rd Year)','Paterno, Tacloban City','2008-2011',6,'2017-06-09 07:28:08'),(10,'Bachelor of Science in Information Technology (BSIT)','Palompon Institute of Technology','2013-2017',6,'2017-06-09 07:28:12'),(11,'Data Encoder (Part Time)','Droele Inc, Villaba Leyte','April 2012 - June 2012',5,'2017-06-09 07:28:10'),(12,'Data Encoder (Voter\'s List)','Una Party List (Villaba Sector)','Febuary 2013 - May 2013',5,'2017-06-09 07:28:11');
/*!40000 ALTER TABLE `achievements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `achievements_type`
--

DROP TABLE IF EXISTS `achievements_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `achievements_type` (
  `achi_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `achi_type` varchar(100) NOT NULL,
  PRIMARY KEY (`achi_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `achievements_type`
--

LOCK TABLES `achievements_type` WRITE;
/*!40000 ALTER TABLE `achievements_type` DISABLE KEYS */;
INSERT INTO `achievements_type` (`achi_type_id`, `achi_type`) VALUES (1,'Certificate and Awards Received'),(2,'Training and Seminars Attended'),(5,'Work Experience'),(6,'Education');
/*!40000 ALTER TABLE `achievements_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `home_page`
--

DROP TABLE IF EXISTS `home_page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `home_page` (
  `home_id` int(11) NOT NULL AUTO_INCREMENT,
  `home_description` text NOT NULL,
  `home_activate` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`home_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `home_page`
--

LOCK TABLES `home_page` WRITE;
/*!40000 ALTER TABLE `home_page` DISABLE KEYS */;
INSERT INTO `home_page` (`home_id`, `home_description`, `home_activate`) VALUES (1,'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.',0),(2,'\"I hope one day people will understand, <br /> That english is a language not a measurement <br /> of intelligence\"',1);
/*!40000 ALTER TABLE `home_page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `owner_info`
--

DROP TABLE IF EXISTS `owner_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `owner_info` (
  `owner_id` int(11) NOT NULL AUTO_INCREMENT,
  `owner_name` varchar(100) NOT NULL,
  `owner_occupation` varchar(100) NOT NULL,
  PRIMARY KEY (`owner_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `owner_info`
--

LOCK TABLES `owner_info` WRITE;
/*!40000 ALTER TABLE `owner_info` DISABLE KEYS */;
INSERT INTO `owner_info` (`owner_id`, `owner_name`, `owner_occupation`) VALUES (1,'Winnie A. Damayo','- Web Developer &nbsp; / &nbsp; Web Programmer -');
/*!40000 ALTER TABLE `owner_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skills`
--

DROP TABLE IF EXISTS `skills`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skills` (
  `skills_id` int(11) NOT NULL AUTO_INCREMENT,
  `skills_description` varchar(100) NOT NULL,
  `skills_percent` int(11) DEFAULT '1',
  `skills_type_id` int(11) NOT NULL,
  PRIMARY KEY (`skills_id`),
  KEY `skills_type_id` (`skills_type_id`),
  CONSTRAINT `skills_ibfk_1` FOREIGN KEY (`skills_type_id`) REFERENCES `skills_type` (`skills_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skills`
--

LOCK TABLES `skills` WRITE;
/*!40000 ALTER TABLE `skills` DISABLE KEYS */;
INSERT INTO `skills` (`skills_id`, `skills_description`, `skills_percent`, `skills_type_id`) VALUES (1,'PHP',65,1),(2,'Bootstrap',50,1),(3,'HTML',75,1),(4,'MySQL',60,1),(5,'AJAX',40,1),(6,'jQuery',40,1),(7,'PDO',45,1),(8,'CodeIgniter',25,1),(9,'CSS',5,1),(10,'OOP',70,1),(11,'Sublime Text',80,4),(12,'Homestead',70,4),(13,'Ubuntu O.S',40,4),(14,'GitHub',50,4),(15,'Trello',75,4),(16,'Slack',65,4),(17,'Git',65,4),(18,'GitLab',50,4),(19,'PHPExcel',50,1),(20,'ChikkaSMS',50,1),(21,'Pydio',75,4);
/*!40000 ALTER TABLE `skills` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skills_type`
--

DROP TABLE IF EXISTS `skills_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skills_type` (
  `skills_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `skills_type` varchar(100) NOT NULL,
  PRIMARY KEY (`skills_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skills_type`
--

LOCK TABLES `skills_type` WRITE;
/*!40000 ALTER TABLE `skills_type` DISABLE KEYS */;
INSERT INTO `skills_type` (`skills_type_id`, `skills_type`) VALUES (1,'Technical Skills'),(2,'Sample Skills'),(3,'Another Skills'),(4,'Technologies & Tools Used');
/*!40000 ALTER TABLE `skills_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `username`, `password`) VALUES (1,'winex01','202cb962ac59075b964b07152d234b70');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'winex01_winex'
--

--
-- Dumping routines for database 'winex01_winex'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-31  7:08:02
