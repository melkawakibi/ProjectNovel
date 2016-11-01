-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: novel
-- ------------------------------------------------------
-- Server version	5.7.15-log

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
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'awalsh','!2w09)','jasper18@hotmail.com','1989-09-22 05:23:01','1987-02-06 14:04:02'),(2,'ethyl.langworth',']oQ<oEJ*5y8Oub)_O%','ada24@leuschke.net','1991-08-17 07:52:28','2012-10-31 01:13:42'),(3,'thudson','?b4H32:#i:g^(B','stella93@yahoo.com','1974-02-05 21:36:43','2016-06-04 17:14:09'),(4,'everette.farrell','Q/N_d^L:YoUPiV','upton.savanna@hotmail.com','1970-03-22 05:45:38','1992-03-21 08:09:44'),(5,'berge.scarlett','!c68XJ75$\\c%sG?','khalil.krajcik@batz.info','2010-10-30 15:20:41','1978-05-02 07:23:37'),(6,'willms.fernando','L]P-GQtIK15RhD`','fisher.daphney@jakubowski.com','2014-05-24 13:25:30','1974-04-09 06:57:09'),(7,'citlalli96','I<D@@w=v-p\"LG`Yyy-','fern87@gmail.com','2005-06-15 15:09:56','1970-06-02 15:32:24'),(8,'berneice50','9dRx.3z~Z:vyd8L>0','iking@gmail.com','2015-07-11 00:06:25','1986-04-15 21:14:06'),(9,'hcarroll','T+{iy{nny*h/]v9>','maximillian59@yahoo.com','1976-12-08 23:44:01','1991-08-21 19:10:32'),(10,'ulockman','1xU)_|GvqRyQ|~/s)','callie18@marvin.com','1998-10-17 06:45:42','1991-08-30 12:09:25');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-10-29 20:30:49
