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
-- Table structure for table `instru_models`
--

DROP TABLE IF EXISTS `instru_models`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `instru_models` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `instru_models`
--

LOCK TABLES `instru_models` WRITE;
/*!40000 ALTER TABLE `instru_models` DISABLE KEYS */;
INSERT INTO `instru_models` VALUES (1,'2018-06-17 13:22:40','2018-06-17 13:22:40','telescope'),(2,'2018-06-17 13:43:42','2018-06-17 13:43:42','Radar'),(3,'2018-06-17 13:49:34','2018-06-17 13:49:34','Radial Telescope'),(4,'2018-06-17 13:50:46','2018-06-17 13:50:46','Telescope'),(5,'2018-06-17 13:53:50','2018-06-17 13:53:50','telescope'),(6,'2018-06-17 13:59:54','2018-06-17 13:59:54','None'),(7,'2018-06-17 22:40:14','2018-06-17 22:40:14','None'),(8,'2018-06-17 22:44:29','2018-06-17 22:44:29','Eyes'),(9,'2018-06-17 23:27:05','2018-06-17 23:27:05','Space Telescope'),(10,'2018-06-17 23:34:24','2018-06-17 23:34:24','None'),(11,'2018-06-17 23:46:52','2018-06-17 23:46:52','Unknow'),(12,'2018-06-18 00:11:58','2018-06-18 00:11:58','Unknown');
/*!40000 ALTER TABLE `instru_models` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-18 15:07:38
