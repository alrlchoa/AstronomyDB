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
-- Table structure for table `instruments`
--

DROP TABLE IF EXISTS `instruments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `instruments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mid` int(10) unsigned DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `instruments_mid_foreign` (`mid`),
  CONSTRAINT `instruments_mid_foreign` FOREIGN KEY (`mid`) REFERENCES `instru_models` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `instruments`
--

LOCK TABLES `instruments` WRITE;
/*!40000 ALTER TABLE `instruments` DISABLE KEYS */;
INSERT INTO `instruments` VALUES (1,'2018-06-17 13:22:40','2018-06-17 13:22:40',1,'Canada'),(2,'2018-06-17 13:43:42','2018-06-17 13:43:42',2,'Vancouver'),(3,'2018-06-17 13:49:34','2018-06-17 13:49:34',3,'Seattle'),(4,'2018-06-17 13:50:46','2018-06-17 13:50:46',4,'Rome'),(5,'2018-06-17 13:53:50','2018-06-17 13:53:50',5,'Washington'),(6,'2018-06-17 13:55:49','2018-06-17 13:55:49',5,'Edmonton'),(7,'2018-06-17 13:59:54','2018-06-17 13:59:54',6,'Florence'),(8,'2018-06-17 14:01:18','2018-06-17 14:01:18',4,'Venice'),(9,'2018-06-17 14:02:51','2018-06-17 14:02:51',4,'Africa'),(10,'2018-06-17 22:38:56','2018-06-17 22:38:56',3,'Athens'),(11,'2018-06-17 22:40:14','2018-06-17 22:40:14',7,'The world'),(12,'2018-06-17 22:44:29','2018-06-17 22:44:29',8,'New York'),(13,'2018-06-17 22:46:06','2018-06-17 22:46:06',1,'London'),(14,'2018-06-17 22:48:30','2018-06-17 22:48:30',8,'Montreal'),(15,'2018-06-17 22:51:09','2018-06-17 22:51:09',4,'St. Petersburg'),(16,'2018-06-17 22:56:27','2018-06-17 22:56:27',8,'Ghana'),(17,'2018-06-17 23:27:05','2018-06-17 23:27:05',9,'Toronto'),(18,'2018-06-17 23:28:37','2018-06-17 23:28:37',1,'Sicily'),(19,'2018-06-17 23:30:06','2018-06-17 23:30:06',2,'San Francisco'),(20,'2018-06-17 23:34:24','2018-06-17 23:34:24',10,'Tuskany'),(21,'2018-06-17 23:39:23','2018-06-17 23:39:23',4,'Space'),(22,'2018-06-17 23:42:55','2018-06-17 23:42:55',8,'Hawaii'),(23,'2018-06-17 23:46:52','2018-06-17 23:46:52',11,'Unknown'),(24,'2018-06-17 23:50:38','2018-06-17 23:50:38',11,'Chile'),(25,'2018-06-17 23:55:14','2018-06-17 23:55:14',8,'Chicago'),(26,'2018-06-17 23:57:35','2018-06-17 23:57:35',9,'Prague'),(27,'2018-06-18 00:11:58','2018-06-18 00:11:58',12,'Unknown');
/*!40000 ALTER TABLE `instruments` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-17 10:14:09
