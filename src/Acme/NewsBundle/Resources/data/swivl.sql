-- MySQL dump 10.15  Distrib 10.0.15-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: swivl
-- ------------------------------------------------------
-- Server version	10.0.15-MariaDB

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
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `date_index` (`date`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'Тестовая новость 7','Тестовый текст новости',1,'2015-03-18 13:33:44'),(2,'Тестовая новость 1','Тестовый текст новости',1,'2015-03-18 13:33:44'),(3,'Тестовая новость 2','Тестовый текст новости',1,'2015-03-18 13:33:44'),(4,'Тестовая новость 3','Тестовый текст новости',0,'2015-03-18 13:33:44'),(5,'Тестовая новость 4','Тестовый текст новости',1,'2015-03-18 13:33:44'),(6,'Тестовая новость 5','Тестовый текст новости',1,'2015-03-18 13:33:44'),(7,'Тестовая новость 6','Тестовый текст новости',1,'2015-03-18 13:33:44'),(8,'Тестовая новость 8','Тестовый текст новости',0,'2015-03-18 13:33:44'),(9,'Тестовая новость 9','Тестовый текст новости',1,'2015-03-18 13:33:44');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-03-18 16:55:23
