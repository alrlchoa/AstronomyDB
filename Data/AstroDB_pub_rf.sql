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
-- Table structure for table `pub_rf`
--

DROP TABLE IF EXISTS `pub_rf`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pub_rf` (
  `pub_id` int(10) unsigned NOT NULL,
  `rf_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`pub_id`,`rf_id`),
  KEY `pub_rf_pub_id_index` (`pub_id`),
  KEY `pub_rf_rf_id_index` (`rf_id`),
  CONSTRAINT `pub_rf_pub_id_foreign` FOREIGN KEY (`pub_id`) REFERENCES `publications` (`id`) ON DELETE CASCADE,
  CONSTRAINT `pub_rf_rf_id_foreign` FOREIGN KEY (`rf_id`) REFERENCES `researcher_fellowships` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pub_rf`
--

LOCK TABLES `pub_rf` WRITE;
/*!40000 ALTER TABLE `pub_rf` DISABLE KEYS */;
INSERT INTO `pub_rf` VALUES (1,4),(1,8),(1,11),(1,12),(2,8),(3,10),(3,12),(4,12),(5,6),(5,12),(6,6),(7,6),(7,10),(8,6),(9,4),(9,6),(9,7),(9,8),(10,6);
/*!40000 ALTER TABLE `pub_rf` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-17 10:14:05
