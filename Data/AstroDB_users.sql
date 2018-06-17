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
