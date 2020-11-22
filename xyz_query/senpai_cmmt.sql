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
-- Table structure for table `cmmt`
--

DROP TABLE IF EXISTS `cmmt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cmmt` (
  `id` int NOT NULL AUTO_INCREMENT,
  `itemid_` int DEFAULT NULL,
  `modulName` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `authorName` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `commentBody` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `likeCnt` int DEFAULT NULL,
  `unlikeCnt` int DEFAULT NULL,
  `createDate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `createDate_UNIQUE` (`createDate`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cmmt`
--

LOCK TABLES `cmmt` WRITE;
/*!40000 ALTER TABLE `cmmt` DISABLE KEYS */;
INSERT INTO `cmmt` VALUES (3,NULL,'asdf',NULL,NULL,NULL,NULL,'2020-11-22 07:34:09'),(4,114,'asdf','qqq','bbb',NULL,NULL,'2020-11-22 07:35:09'),(5,114,'asdf','Nyamka','goy site bn',3,4,'2020-11-22 07:35:44'),(6,114,'asdf','Zochin','setgedel',1,NULL,'2020-11-22 07:56:11'),(7,114,'asdf','','',NULL,1,'2020-11-22 07:57:59'),(8,114,'asdf','asdf','asdf',NULL,NULL,'2020-11-22 07:58:08'),(9,114,'asdf','asdf','yee chadlaa\r\n',NULL,1,'2020-11-22 08:15:25'),(10,114,'asdf','amjilt','kkkk\r\nhoorhon goy site bn',NULL,NULL,'2020-11-22 08:15:46'),(11,112,'asdf','fasdf','asf',NULL,NULL,'2020-11-22 10:13:21'),(16,114,'asdf','aaaaa','zail',5,2,'2020-11-22 12:09:10'),(17,114,'News','tewst','tttttrew',9,6,'2020-11-22 12:15:14'),(18,114,'News','aa','yuhuhuh',6,7,'2020-11-22 12:15:30'),(19,114,'News','','',NULL,NULL,'2020-11-22 12:51:51'),(20,114,'News','','jk',NULL,NULL,'2020-11-22 12:54:42'),(21,114,'News','Зочин','k',1,1,'2020-11-22 12:56:00');
/*!40000 ALTER TABLE `cmmt` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-22 22:30:45
