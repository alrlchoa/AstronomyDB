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
-- Table structure for table `astronomers`
--

DROP TABLE IF EXISTS `astronomers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `astronomers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `astronomers`
--

LOCK TABLES `astronomers` WRITE;
/*!40000 ALTER TABLE `astronomers` DISABLE KEYS */;
INSERT INTO `astronomers` VALUES (1,'2018-06-17 12:43:15','2018-06-17 12:43:15','twoods','$2y$10$UTVyonthn0rzNGzFu9fHVuhLEzKDCYtBZoM10unrRi6vT6HZfsPam','Tiger','Woods'),(2,'2018-06-17 12:44:20','2018-06-17 12:44:20','bball','$2y$10$Mdb7P.fTEtgEhCG6z4pwTuG0CSHtYUwHUYxgo3M6Onzyji6FFnAwK','Lebron','James'),(3,'2018-06-17 12:55:03','2018-06-17 12:55:03','eww','$2y$10$4oKFQGERiJ1JDFpKTD5tauRR8IHphEwtVrUIlIFpQyf8jHpMgX5My','Emis','Weinstein-Wright'),(4,'2018-06-17 12:58:06','2018-06-17 12:58:06','cb','$2y$10$fCBw98N/dVsVE4PN1CINCe5rNUbg1lIVXbHBIO0qHfQnfLdlUpHlC','Caelan','Bond'),(5,'2018-06-17 13:00:26','2018-06-17 13:00:26','jwebb','$2y$10$cIH5KcPPx8xOzSu1/UIp4OPNp8/T4zUFpiBuMRQmnUQNvrpra4K5S','James','Webb'),(6,'2018-06-17 13:07:19','2018-06-17 13:07:19','i_invented_calculus','$2y$10$M.D/KIYBgR.iYu5mpJ3zK.u3Qetx9vPQqqxsHiBy4ROnGn3xssc8u','Isaac','Newton'),(7,'2018-06-17 13:09:54','2018-06-17 13:09:54','yb','$2y$10$aqN/Un7qj/RUrrM7Wo9EHuDsBkmrVW4j29qNsPlzTvflPIkDbSqfu','Ya','Boi'),(8,'2018-06-17 13:10:43','2018-06-17 13:10:43','eh','$2y$10$/igtMUuCPsJD5A35oUCbs.pOcDytomHOgx1se3/hS9tRmNxGmsOTG','Edwin','Hubble'),(9,'2018-06-17 13:11:29','2018-06-17 13:11:29','space_odyssey','$2y$10$vCQcQEnDtr16zk34rEzRB.8/BtJ/NcxWOsNSfWq.eXU3eCm5JOMYu','Carl','Sagan'),(10,'2018-06-17 13:12:32','2018-06-17 13:12:32','planet_earth','$2y$10$LHNlG5FpR2Oyxe1mggGU4eT2s0R18lzUaMJJ/7MUHRPPdN2aHPe9G','Neil','Degrasse Tyson'),(11,'2018-06-17 13:13:11','2018-06-17 13:13:11','tesla','$2y$10$7UIDbllKL6.oJ6P9pGSpi.oEC0.39HiUeR6BK9pYhHM/z1HUPe7h6','Elon','Musk'),(12,'2018-06-17 13:14:26','2018-06-17 13:14:26','theseal','$2y$10$b3EYet8CIQRSg5XU7Ejaf.1VRLNjw0C2gI9pgrcP2w8EgGSBBW0sC','Alex','Seal');
/*!40000 ALTER TABLE `astronomers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-17 10:14:07

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
-- Table structure for table `cb_pub`
--

DROP TABLE IF EXISTS `cb_pub`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cb_pub` (
  `cb_id` int(10) unsigned NOT NULL,
  `pub_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`cb_id`,`pub_id`),
  KEY `cb_pub_cb_id_index` (`cb_id`),
  KEY `cb_pub_pub_id_index` (`pub_id`),
  CONSTRAINT `cb_pub_cb_id_foreign` FOREIGN KEY (`cb_id`) REFERENCES `celestial_bodies` (`id`) ON DELETE CASCADE,
  CONSTRAINT `cb_pub_pub_id_foreign` FOREIGN KEY (`pub_id`) REFERENCES `publications` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cb_pub`
--

LOCK TABLES `cb_pub` WRITE;
/*!40000 ALTER TABLE `cb_pub` DISABLE KEYS */;
INSERT INTO `cb_pub` VALUES (1,2),(11,5),(11,7),(11,8),(11,9),(11,10),(14,5),(15,1),(15,3),(15,4),(22,7),(28,2),(28,4);
/*!40000 ALTER TABLE `cb_pub` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-17 10:14:04

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
-- Table structure for table `celestial_bodies`
--

DROP TABLE IF EXISTS `celestial_bodies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `celestial_bodies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `right_ascension` int(11) NOT NULL,
  `declination` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `celestial_bodies`
--

LOCK TABLES `celestial_bodies` WRITE;
/*!40000 ALTER TABLE `celestial_bodies` DISABLE KEYS */;
INSERT INTO `celestial_bodies` VALUES (1,'2018-06-17 13:22:40','2018-06-17 13:22:40',343,22,'Icy Comet',0),(2,'2018-06-17 13:43:42','2018-06-17 13:43:42',28,112,'Slow Comet',1),(3,'2018-06-17 13:49:34','2018-06-17 13:49:34',320,121,'Star',0),(4,'2018-06-17 13:50:46','2018-06-17 13:50:46',124,300,'Sun',1),(5,'2018-06-17 13:53:50','2018-06-17 13:53:50',44,23,'Comet No Star',0),(6,'2018-06-17 13:55:49','2018-06-17 13:55:49',359,200,'Comet From Deep Space',1),(7,'2018-06-17 13:59:54','2018-06-17 13:59:54',1,1,'Milky Way',1),(8,'2018-06-17 14:01:18','2018-06-17 14:01:18',34,82,'Boomerang Galaxy',0),(9,'2018-06-17 14:02:51','2018-06-17 14:02:51',88,29,'Deep Space Galaxy',1),(10,'2018-06-17 22:38:56','2018-06-17 22:38:56',47,89,'Le Planet',0),(11,'2018-06-17 22:40:14','2018-06-17 22:40:14',56,298,'Earth',1),(12,'2018-06-17 22:44:29','2018-06-17 22:44:29',291,187,'Superb Earth',1),(13,'2018-06-17 22:46:06','2018-06-17 22:46:06',36,10,'Jupiter',1),(14,'2018-06-17 22:48:30','2018-06-17 22:48:30',3,53,'Europa',0),(15,'2018-06-17 22:51:09','2018-06-17 22:51:09',77,88,'Moon',1),(16,'2018-06-17 22:56:27','2018-06-17 23:08:08',60,78,'Proximus Centauri',0),(17,'2018-06-17 23:27:05','2018-06-17 23:27:05',140,284,'Comet Shoemaker',1),(18,'2018-06-17 23:28:37','2018-06-17 23:28:37',284,98,'Comet West',1),(19,'2018-06-17 23:30:06','2018-06-17 23:30:06',88,44,'Barnards Star',1),(20,'2018-06-17 23:34:24','2018-06-17 23:34:24',39,22,'Planet A',1),(21,'2018-06-17 23:39:23','2018-06-17 23:39:23',60,70,'Enceladus',1),(22,'2018-06-17 23:42:55','2018-06-17 23:42:55',59,78,'Wolf Moon',0),(23,'2018-06-17 23:46:52','2018-06-17 23:46:52',70,80,'Tiger Moon',0),(24,'2018-06-17 23:50:38','2018-06-17 23:50:38',40,122,'Planet B',1),(25,'2018-06-17 23:55:14','2018-06-17 23:55:14',200,100,'Planet C',0),(26,'2018-06-17 23:57:35','2018-06-17 23:57:35',278,81,'Nuetron',1),(27,'2018-06-18 00:11:58','2018-06-18 00:11:58',120,300,'Unknown',0),(28,'2018-06-18 00:12:58','2018-06-18 00:12:58',20,20,'Not Specified',1);
/*!40000 ALTER TABLE `celestial_bodies` ENABLE KEYS */;
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
-- Table structure for table `comet_star`
--

DROP TABLE IF EXISTS `comet_star`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comet_star` (
  `comet_id` int(10) unsigned NOT NULL,
  `star_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`comet_id`,`star_id`),
  KEY `comet_star_comet_id_index` (`comet_id`),
  KEY `comet_star_star_id_index` (`star_id`),
  CONSTRAINT `comet_star_comet_id_foreign` FOREIGN KEY (`comet_id`) REFERENCES `comets` (`id`) ON DELETE CASCADE,
  CONSTRAINT `comet_star_star_id_foreign` FOREIGN KEY (`star_id`) REFERENCES `stars` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comet_star`
--

LOCK TABLES `comet_star` WRITE;
/*!40000 ALTER TABLE `comet_star` DISABLE KEYS */;
INSERT INTO `comet_star` VALUES (1,3),(1,4),(2,3),(17,26),(18,4);
/*!40000 ALTER TABLE `comet_star` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-17 10:14:02

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
-- Table structure for table `comets`
--

DROP TABLE IF EXISTS `comets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `speed` double(8,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `comets_id_foreign` FOREIGN KEY (`id`) REFERENCES `celestial_bodies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comets`
--

LOCK TABLES `comets` WRITE;
/*!40000 ALTER TABLE `comets` DISABLE KEYS */;
INSERT INTO `comets` VALUES (1,'2018-06-17 13:22:40','2018-06-17 13:22:40',334.00),(2,'2018-06-17 13:43:42','2018-06-17 13:43:42',10.00),(5,'2018-06-17 13:53:50','2018-06-17 13:53:50',399.00),(6,'2018-06-17 13:55:49','2018-06-17 13:55:49',600.00),(17,'2018-06-17 23:27:05','2018-06-17 23:27:05',40.00),(18,'2018-06-17 23:28:37','2018-06-17 23:28:37',5000.00);
/*!40000 ALTER TABLE `comets` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-17 10:13:58

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
-- Table structure for table `galaxies`
--

DROP TABLE IF EXISTS `galaxies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galaxies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `brightness` double(8,2) DEFAULT NULL,
  `redshift` double(8,2) DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `galaxies_id_foreign` FOREIGN KEY (`id`) REFERENCES `celestial_bodies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galaxies`
--

LOCK TABLES `galaxies` WRITE;
/*!40000 ALTER TABLE `galaxies` DISABLE KEYS */;
INSERT INTO `galaxies` VALUES (7,'2018-06-17 13:59:54','2018-06-17 13:59:54',200.00,45.00,'spiral'),(8,'2018-06-17 14:01:18','2018-06-17 14:01:18',10.00,88.00,'elliptical'),(9,'2018-06-17 14:02:51','2018-06-17 14:02:51',4.00,38.00,'irregular');
/*!40000 ALTER TABLE `galaxies` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-17 10:14:01

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
-- Table structure for table `institutions`
--

DROP TABLE IF EXISTS `institutions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `institutions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `institutions`
--

LOCK TABLES `institutions` WRITE;
/*!40000 ALTER TABLE `institutions` DISABLE KEYS */;
INSERT INTO `institutions` VALUES (1,'2018-06-17 12:47:31','2018-06-17 12:47:31','UBC'),(2,'2018-06-17 12:52:48','2018-06-17 12:52:48','Hertzberg'),(3,'2018-06-17 12:52:55','2018-06-17 12:52:55','Stanford'),(4,'2018-06-17 12:53:01','2018-06-17 12:53:01','Oxford'),(5,'2018-06-17 12:53:07','2018-06-17 12:53:07','NASA'),(6,'2018-06-17 12:57:26','2018-06-17 12:57:26','Walmart');
/*!40000 ALTER TABLE `institutions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-17 10:14:06

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
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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

-- Dump completed on 2018-06-17 10:14:00

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
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=162 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (141,'2014_10_12_000000_create_users_table',1),(142,'2014_10_12_100000_create_password_resets_table',1),(143,'2018_06_10_230641_create_institutions_table',1),(144,'2018_06_11_042751_create_celestial_bodies_table',1),(145,'2018_06_11_045035_create_comets_table',1),(146,'2018_06_11_051104_create_spectral_brightnesses_table',1),(147,'2018_06_11_054917_create_stars_table',1),(148,'2018_06_11_061941_create_planets_table',1),(149,'2018_06_11_064857_create_moons_table',1),(150,'2018_06_11_074253_create_galaxies_table',1),(151,'2018_06_11_075346_create_publications_table',1),(152,'2018_06_11_082856_create_astronomers_table',1),(153,'2018_06_11_092100_create_researcher_fellowships_table',1),(154,'2018_06_14_223750_create_comet_star_pivot_table',1),(155,'2018_06_14_223932_create_planet_star_pivot_table',1),(156,'2018_06_14_224726_create_cb_pub_pivot_table',1),(157,'2018_06_14_230610_create_pub_rf_pivot_table',1),(158,'2018_06_14_235422_create_publication_references_pivot_table',1),(159,'2018_06_15_015530_create_instru_models_table',1),(160,'2018_06_15_015536_create_instruments_table',1),(161,'2018_06_15_053605_create_discoveries_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
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
-- Table structure for table `moons`
--

DROP TABLE IF EXISTS `moons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `moons` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `planet_id` int(10) unsigned NOT NULL,
  `orbital_period` double(8,2) DEFAULT NULL,
  `radius` double(8,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `moons_planet_id_foreign` (`planet_id`),
  CONSTRAINT `moons_id_foreign` FOREIGN KEY (`id`) REFERENCES `celestial_bodies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `moons_planet_id_foreign` FOREIGN KEY (`planet_id`) REFERENCES `planets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `moons`
--

LOCK TABLES `moons` WRITE;
/*!40000 ALTER TABLE `moons` DISABLE KEYS */;
INSERT INTO `moons` VALUES (14,'2018-06-17 22:48:30','2018-06-17 22:48:30',13,9.00,400.00),(15,'2018-06-17 22:51:09','2018-06-17 22:51:09',11,27.00,1200.00),(21,'2018-06-17 23:39:23','2018-06-17 23:39:23',13,900.00,28900.00),(22,'2018-06-17 23:42:55','2018-06-17 23:42:55',13,509.00,289.00),(23,'2018-06-17 23:46:52','2018-06-17 23:46:52',13,89.00,998.00);
/*!40000 ALTER TABLE `moons` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-17 10:14:01

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
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-17 10:14:00

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
-- Table structure for table `planet_star`
--

DROP TABLE IF EXISTS `planet_star`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `planet_star` (
  `planet_id` int(10) unsigned NOT NULL,
  `star_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`planet_id`,`star_id`),
  KEY `planet_star_planet_id_index` (`planet_id`),
  KEY `planet_star_star_id_index` (`star_id`),
  CONSTRAINT `planet_star_planet_id_foreign` FOREIGN KEY (`planet_id`) REFERENCES `planets` (`id`) ON DELETE CASCADE,
  CONSTRAINT `planet_star_star_id_foreign` FOREIGN KEY (`star_id`) REFERENCES `stars` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `planet_star`
--

LOCK TABLES `planet_star` WRITE;
/*!40000 ALTER TABLE `planet_star` DISABLE KEYS */;
INSERT INTO `planet_star` VALUES (10,19),(11,4),(11,19),(12,19),(13,4),(24,3);
/*!40000 ALTER TABLE `planet_star` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-17 10:14:03


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
-- Table structure for table `planets`
--

DROP TABLE IF EXISTS `planets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `planets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `orbital_period` double(8,2) DEFAULT NULL,
  `planet_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `planets_id_foreign` FOREIGN KEY (`id`) REFERENCES `celestial_bodies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `planets`
--

LOCK TABLES `planets` WRITE;
/*!40000 ALTER TABLE `planets` DISABLE KEYS */;
INSERT INTO `planets` VALUES (10,'2018-06-17 22:38:56','2018-06-17 22:38:56',785.00,'gas_giant'),(11,'2018-06-17 22:40:14','2018-06-17 22:40:14',365.00,'earth_like'),(12,'2018-06-17 22:44:29','2018-06-17 22:44:29',578.00,'super_earth'),(13,'2018-06-17 22:46:06','2018-06-17 22:46:06',800.00,'gas_giant'),(20,'2018-06-17 23:34:24','2018-06-17 23:34:24',288.00,'super_earth'),(24,'2018-06-17 23:50:38','2018-06-17 23:50:38',290.00,'earth_like'),(25,'2018-06-17 23:55:14','2018-06-17 23:55:14',789.00,'gas_giant');
/*!40000 ALTER TABLE `planets` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-17 10:14:02


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
-- Table structure for table `publication_references`
--

DROP TABLE IF EXISTS `publication_references`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `publication_references` (
  `referrer_id` int(10) unsigned NOT NULL,
  `reference_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`referrer_id`,`reference_id`),
  KEY `publication_references_referrer_id_index` (`referrer_id`),
  KEY `publication_references_reference_id_index` (`reference_id`),
  CONSTRAINT `publication_references_reference_id_foreign` FOREIGN KEY (`reference_id`) REFERENCES `publications` (`id`) ON DELETE CASCADE,
  CONSTRAINT `publication_references_referrer_id_foreign` FOREIGN KEY (`referrer_id`) REFERENCES `publications` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publication_references`
--

LOCK TABLES `publication_references` WRITE;
/*!40000 ALTER TABLE `publication_references` DISABLE KEYS */;
INSERT INTO `publication_references` VALUES (3,2),(5,1),(5,2),(5,3),(5,4),(6,5),(9,6),(10,9);
/*!40000 ALTER TABLE `publication_references` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-17 10:14:11

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
-- Table structure for table `publications`
--

DROP TABLE IF EXISTS `publications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `publications` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `doi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_publication` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publications`
--

LOCK TABLES `publications` WRITE;
/*!40000 ALTER TABLE `publications` DISABLE KEYS */;
INSERT INTO `publications` VALUES (1,'2018-06-17 23:11:57','2018-06-17 23:11:57','10','1999-12-31'),(2,'2018-06-17 23:12:22','2018-06-17 23:12:22','20','2001-08-29'),(3,'2018-06-17 23:14:23','2018-06-17 23:14:23','30','2005-11-18'),(4,'2018-06-17 23:15:24','2018-06-17 23:15:24','40','2012-12-31'),(5,'2018-06-17 23:17:24','2018-06-17 23:17:24','50','2013-09-01'),(6,'2018-06-17 23:18:15','2018-06-17 23:18:15','60','2014-05-20'),(7,'2018-06-17 23:19:03','2018-06-17 23:19:03','70','2010-04-22'),(8,'2018-06-17 23:20:40','2018-06-17 23:20:40','80','2013-02-08'),(9,'2018-06-17 23:22:03','2018-06-17 23:22:03','90','2015-10-02'),(10,'2018-06-17 23:23:52','2018-06-17 23:23:52','100','2016-04-08');
/*!40000 ALTER TABLE `publications` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-17 10:14:08

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
-- Table structure for table `spectral_brightnesses`
--

DROP TABLE IF EXISTS `spectral_brightnesses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `spectral_brightnesses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `spectral_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brightness` double(8,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `spectral_brightnesses`
--

LOCK TABLES `spectral_brightnesses` WRITE;
/*!40000 ALTER TABLE `spectral_brightnesses` DISABLE KEYS */;
INSERT INTO `spectral_brightnesses` VALUES (1,'2018-06-17 13:47:06','2018-06-17 13:47:06','o',500.00),(2,'2018-06-17 13:47:18','2018-06-17 13:47:18','b',400.00),(3,'2018-06-17 13:47:26','2018-06-17 13:47:26','a',300.00),(4,'2018-06-17 13:47:38','2018-06-17 13:47:38','f',250.00),(5,'2018-06-17 13:47:44','2018-06-17 13:47:44','g',200.00),(6,'2018-06-17 13:47:51','2018-06-17 13:47:51','k',100.00),(7,'2018-06-17 13:47:57','2018-06-17 13:47:57','m',50.00);
/*!40000 ALTER TABLE `spectral_brightnesses` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-17 10:14:04

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
-- Table structure for table `stars`
--

DROP TABLE IF EXISTS `stars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stars` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `spectral_brightness_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `stars_spectral_brightness_id_foreign` (`spectral_brightness_id`),
  CONSTRAINT `stars_id_foreign` FOREIGN KEY (`id`) REFERENCES `celestial_bodies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `stars_spectral_brightness_id_foreign` FOREIGN KEY (`spectral_brightness_id`) REFERENCES `spectral_brightnesses` (`id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stars`
--

LOCK TABLES `stars` WRITE;
/*!40000 ALTER TABLE `stars` DISABLE KEYS */;
INSERT INTO `stars` VALUES (3,'2018-06-17 13:49:34','2018-06-17 13:49:34',7),(4,'2018-06-17 13:50:46','2018-06-17 13:50:46',4),(16,'2018-06-17 22:56:27','2018-06-17 23:08:08',5),(19,'2018-06-17 23:30:06','2018-06-17 23:30:06',3),(26,'2018-06-17 23:57:35','2018-06-17 23:57:35',1);
/*!40000 ALTER TABLE `stars` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-17 10:14:08

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Tiger','Woods','twoods@mail.com','twoods','$2y$10$/2qtILkm9DDd3WcnW07MQ.EdQwj4ddL2tewAyNbARStQisQNWaI0C','F7uUA7Em4N9UYA3nS9RJ8uqWeL7qRxbv8xiev69u09KgF5DS4WWRmKJVXYN6','2018-06-17 12:43:15','2018-06-17 12:43:15'),(2,'Lebron','James','bball@mail.com','bball','$2y$10$rufEcguiio335zqrzzvWr.f6C52wgLdn5Tp.i6kI3H9h9CzdawqVi','i5TUmBqdC0KiTPMJVhl9G5tYQp1IQf89f6zCRGoVlGCJCfrqiwV2wpGr4cWV','2018-06-17 12:44:20','2018-06-17 12:44:20'),(3,'Emis','Weinstein-Wright','eww@mail.com','eww','$2y$10$hkuvh1y4mrybZHsgUJxBhOtqohfp9HEH3j7wAOgPwg.7KCbYMwBZu','nY413wkYEkaSy1KX2a4ahmzdfe0wyUVn5ZggTijbXtKspnlLyMRBnJc67pTW','2018-06-17 12:55:03','2018-06-17 12:55:03'),(4,'Caelan','Bond','cb@mail.com','cb','$2y$10$7iuZBFZa5amPsycHFTPPH.5ccUyH8BA9rgbVXnGRry.bE2/f2R1iG','NAfaD3fyrnG9ytR3vqiDIV3NcV2BPM4NtSzvN9lWHnm3RB8jNyyEgXDhuViD','2018-06-17 12:58:06','2018-06-17 12:58:06'),(5,'James','Webb','jwebb@mail.com','jwebb','$2y$10$eIBF5iscK0dPYgJ0QLZbQ.5E0zJPU5FLsyGPtqeU9F0i37DOEYcbe','hcbwk7bTc0vuw2fCkVnfbpQxYo6Z8nIPBzkNIfhG0L6sAlKtcwE0Xe2FqRBX','2018-06-17 13:00:26','2018-06-17 13:00:26'),(6,'Isaac','Newton','inewton@mail.com','i_invented_calculus','$2y$10$E4.uGxThjVJg.CWig3V5tuCzvOpsygh/wZXdRJqyPqRJwscpGEtTS','Sxsm0jI2gSK5OmGbHiyS4bH5iHUAEX9v0RnlvcrNQvaoA0oDoKTN0J9a6VpZ','2018-06-17 13:07:19','2018-06-17 13:07:19'),(7,'Ya','Boi','yb@mail.com','yb','$2y$10$O8yFm1psXPrQSFHwzP8dB.aUXE/Cu/KRbdp7Wpcac9v/nA.1J5G8K','eRczDpmR9t5mVr1JYSWHMALCBe2Tp1jhVllcdwOEnSz3QO3XFgTm0NbVhVe2','2018-06-17 13:09:54','2018-06-17 13:09:54'),(8,'Edwin','Hubble','eh@mail.com','eh','$2y$10$KvJjlJBkiCzSz9KAczGHse1qcY/KD3zAdsnGelOGvZxwTWh91KVLy','ujQhiOmQ0TCIbYaivuQoREwj1QT1svPbHUNZZHtJCVa2wJkybdwwNov3KDEY','2018-06-17 13:10:43','2018-06-17 13:10:43'),(9,'Carl','Sagan','cs@mail.com','space_odyssey','$2y$10$6yEg.iXkcFFrbxCNAy5EbOmq.APe9a5qLbMtMxti/aGFF0M9G1z4S','bZoaG9lYt8dQlC0wKcALAtDoMuhvyAFNkUdwPrmGNmJksUUdLMuYeFFQSqnJ','2018-06-17 13:11:29','2018-06-17 13:11:29'),(10,'Neil','Degrasse Tyson','ndl@mail.com','planet_earth','$2y$10$DNtIvnOxB4yJq7PhkbOiz.H7P6sgRrZOTE68BvFNJOooBgdNm1R4i','MrVaxjmo0pdaAOFTB4MUMwuBgn6UKONiU95YBhIGw9ceC0rNvU777z97I3NH','2018-06-17 13:12:32','2018-06-17 13:12:32'),(11,'Elon','Musk','em@mail.com','tesla','$2y$10$ykJjyiWhTg7GIGr9N7Ho.O/xrGDFM1wVB.TrXZVQst/BZ7qQhsVnG','5jdrEBq6zUg3e1WE2IcSdqT4Izqzc0gaByKV9sIPkisTn5WUSXwnqXLfGNsZ','2018-06-17 13:13:11','2018-06-17 13:13:11'),(12,'Alex','Seal','as@mail.com','theseal','$2y$10$gVk/xf3TbinK4kR.JYbOVes3yM8HRUZiLlt./ZMtlZ7iaCW864X9.','uIsiv5c8WkAxmi6jWVAkwCDqwqqxHhU794bRw5k88C8AeNCVkqYzkU3DgiXi','2018-06-17 13:14:26','2018-06-17 13:14:26');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-17 10:13:59
