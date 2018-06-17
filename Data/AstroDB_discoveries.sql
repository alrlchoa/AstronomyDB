-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: localhost    Database: AstroDB
-- ------------------------------------------------------
-- Server version	8.0.11

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
-- Table structure for table `discoveries`
--

DROP TABLE IF EXISTS `discoveries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `discoveries` (
  `discoverer_id` int(10) unsigned NOT NULL,
  `cb_id` int(10) unsigned NOT NULL,
  `instrument_id` int(10) unsigned NOT NULL,
  `date_of_discovery` date NOT NULL,
  PRIMARY KEY (`discoverer_id`,`cb_id`,`instrument_id`),
  KEY `discoveries_discoverer_id_index` (`discoverer_id`),
  KEY `discoveries_cb_id_index` (`cb_id`),
  KEY `discoveries_instrument_id_index` (`instrument_id`),
  CONSTRAINT `discoveries_cb_id_foreign` FOREIGN KEY (`cb_id`) REFERENCES `celestial_bodies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `discoveries_discoverer_id_foreign` FOREIGN KEY (`discoverer_id`) REFERENCES `astronomers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `discoveries_instrument_id_foreign` FOREIGN KEY (`instrument_id`) REFERENCES `instruments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discoveries`
--

LOCK TABLES `discoveries` WRITE;
/*!40000 ALTER TABLE `discoveries` DISABLE KEYS */;
INSERT INTO `discoveries` VALUES (1,10,10,'0300-06-19'),(1,11,11,'0001-01-01'),(2,14,14,'1989-01-30'),(3,27,27,'2010-03-03'),(4,9,9,'0888-07-03'),(4,28,2,'2013-12-13'),(5,1,1,'2000-03-03'),(5,2,2,'2008-07-03'),(5,3,3,'2008-12-19'),(5,4,4,'0888-01-09'),(5,5,5,'0449-03-08'),(5,6,6,'1999-09-08'),(6,7,7,'1700-01-03'),(6,8,8,'1777-01-25'),(6,17,17,'2010-03-03'),(6,18,18,'0030-02-02'),(6,19,19,'1818-10-15'),(6,20,20,'1515-12-15'),(6,21,21,'2003-05-06'),(6,22,22,'2010-07-01'),(6,23,23,'1098-09-09'),(6,24,24,'2016-01-03'),(6,25,25,'2010-10-10'),(6,26,26,'0400-02-07'),(7,12,12,'1999-10-10'),(7,13,13,'1765-02-18'),(8,15,15,'0450-03-22'),(8,16,16,'1887-09-04');
/*!40000 ALTER TABLE `discoveries` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-17 10:14:10
