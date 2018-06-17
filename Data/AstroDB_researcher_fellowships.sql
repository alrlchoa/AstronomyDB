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
-- Table structure for table `researcher_fellowships`
--

DROP TABLE IF EXISTS `researcher_fellowships`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `researcher_fellowships` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `institution_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `researcher_fellowships_institution_id_foreign` (`institution_id`),
  CONSTRAINT `researcher_fellowships_id_foreign` FOREIGN KEY (`id`) REFERENCES `astronomers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `researcher_fellowships_institution_id_foreign` FOREIGN KEY (`institution_id`) REFERENCES `institutions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `researcher_fellowships`
--

LOCK TABLES `researcher_fellowships` WRITE;
/*!40000 ALTER TABLE `researcher_fellowships` DISABLE KEYS */;
INSERT INTO `researcher_fellowships` VALUES (4,'2018-06-17 12:58:06','2018-06-17 12:58:06',6),(5,'2018-06-17 13:00:26','2018-06-17 13:00:26',5),(6,'2018-06-17 13:07:19','2018-06-17 13:07:19',3),(7,'2018-06-17 13:09:54','2018-06-17 13:09:54',2),(8,'2018-06-17 13:10:43','2018-06-17 13:10:43',1),(9,'2018-06-17 13:11:29','2018-06-17 13:11:29',6),(10,'2018-06-17 13:12:32','2018-06-17 13:12:32',5),(11,'2018-06-17 13:13:11','2018-06-17 13:13:11',3),(12,'2018-06-17 13:14:26','2018-06-17 13:14:26',2);
/*!40000 ALTER TABLE `researcher_fellowships` ENABLE KEYS */;
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
