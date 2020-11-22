-- MySQL dump 10.13  Distrib 8.0.22, for macos10.15 (x86_64)
--
-- Host: localhost    Database: senpai
-- ------------------------------------------------------
-- Server version	8.0.21

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
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
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `user_id` int NOT NULL AUTO_INCREMENT COMMENT 'Primary_key',
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `postal` varchar(10) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `address1` varchar(30) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `phone1` varchar(20) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `email1` varchar(30) DEFAULT NULL,
  `role` enum('0','1','2','3','4','5') DEFAULT NULL COMMENT '0:Subscriber,1:Contributor,2:Author,3:Editor,4:Administrator,5:Super Admin',
  `gender` enum('','F','M','I') DEFAULT NULL COMMENT 'F:Female,M:Male,I:Intersex',
  `profile_photo` longtext,
  `status` enum('0','9') DEFAULT '0' COMMENT '0:Active,9:Deleted',
  `ins_date` datetime DEFAULT NULL,
  `ins_user_name` varchar(20) DEFAULT NULL,
  `upd_date` datetime DEFAULT NULL,
  `upd_user_name` varchar(20) DEFAULT NULL,
  `operation` varchar(30) DEFAULT NULL COMMENT 'Note of DB changes',
  `token` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Sempai User ';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (50,'nyamka','$2y$10$8SsYE6RURZJLnuDOxOIbsufXLAPah3ZrQ42VsljubjXRCiVLMGMcW','lastaa',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'unyamka@gmail.com',NULL,NULL,NULL,NULL,'0','2020-11-18 10:16:00',NULL,NULL,NULL,NULL,NULL);
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

-- Dump completed on 2020-11-22 10:14:46
