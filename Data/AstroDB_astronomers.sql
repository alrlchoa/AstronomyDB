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
