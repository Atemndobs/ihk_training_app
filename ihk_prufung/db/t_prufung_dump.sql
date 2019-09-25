-- MySQL dump 10.13  Distrib 5.7.26, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: prufung
-- ------------------------------------------------------
-- Server version	5.7.26-0ubuntu0.19.04.1

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
-- Table structure for table `t_answers`
--

DROP TABLE IF EXISTS `t_answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `response` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hash_answer` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `situation` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_answers`
--

LOCK TABLES `t_answers` WRITE;
/*!40000 ALTER TABLE `t_answers` DISABLE KEYS */;
INSERT INTO `t_answers` VALUES (1,'1-1','3,6',NULL,'c96e299b7d0fcbe6c3e5b1d786f6d72d','1'),(2,'1-2','2',NULL,'c81e728d9d4c2f636f067f89cc14862c','1'),(3,'1-3','4',NULL,'a87ff679a2f3e71d9181a67b7542122c','1'),(4,'1-4','a:1,b:3,c:2,d:1,e:3',',,,,','db14cddce3ea03a458eee54b7150b4de','1'),(5,'1-5','1',NULL,'c4ca4238a0b923820dcc509a6f75849b','1'),(6,'1-6','4',NULL,'a87ff679a2f3e71d9181a67b7542122c','1'),(7,'1-7','5',NULL,'e4da3b7fbbce2345d7772b0674a318d5','1'),(8,'1-8','2',NULL,'c81e728d9d4c2f636f067f89cc14862c','1'),(9,'1-9','5',NULL,'e4da3b7fbbce2345d7772b0674a318d5','1'),(10,'1-10','5',NULL,'e4da3b7fbbce2345d7772b0674a318d5','1'),(11,'1-11','4',NULL,'a87ff679a2f3e71d9181a67b7542122c','1'),(12,'1-12','2',NULL,'c81e728d9d4c2f636f067f89cc14862c','1'),(13,'1-13','2009-10-26','2009-08-08','bb1d9d938558ad55890efe31b9a317ce','1'),(14,'1-14','3',NULL,'','1'),(15,'2-1','1.438,40','1.438,40',NULL,'2'),(16,'2-2','2',NULL,NULL,'2'),(17,'2-3','1',NULL,'f50acc07f43988399504234534f26a19','2'),(18,'2-4','3',NULL,'f50acc07f43988399504234534f26a19','2'),(19,'2-5','a),2,6;b),3,5;c),2,4','a);b);c)',NULL,'2'),(20,'2-6','4',NULL,NULL,'2'),(21,'2-7','4;6',NULL,NULL,'2'),(22,'2-8','4',NULL,NULL,'2'),(23,'2-9','4',NULL,NULL,'2'),(24,'2-10','5',NULL,NULL,'2'),(25,'2-11','1',NULL,NULL,'2'),(26,'2-12','2',NULL,NULL,'2'),(27,'2-13','3',NULL,NULL,'2'),(28,'2-14','a:3,b:4,c:2,d:5,e:1',',,,,',NULL,'2'),(29,'2-15','4',NULL,NULL,'2'),(30,'2-16','3',NULL,NULL,'2'),(31,'2-17','a),1;b),2,3;c),6','a);b);c)',NULL,'2'),(32,'2-18','2','4',NULL,'2'),(33,'2-19','3','3',NULL,'2'),(34,'3-1','1,5,2,4,1','a:1,,,,',NULL,'3'),(35,'3-2','1','  ',NULL,'3'),(36,'3-3','3;4',NULL,NULL,'3'),(37,'3-4','2',NULL,NULL,'3'),(38,'3-5','4',NULL,NULL,'3'),(39,'3-6','2',NULL,NULL,'3'),(40,'3-7','1;3',NULL,NULL,'3'),(41,'3-8','4',NULL,NULL,'3'),(42,'3-9','2;3',NULL,NULL,'3'),(43,'3-10','2',NULL,NULL,'3'),(44,'4-1','3',NULL,NULL,'4'),(45,'4-2','2,4,3,1,5',',,,,',NULL,'4'),(46,'4-3','2;5',NULL,NULL,'4'),(47,'4-4','4',NULL,NULL,'4'),(48,'4-5','4',NULL,NULL,'4'),(49,'4-6','1',NULL,NULL,'4'),(50,'4-7','4','',NULL,'4'),(51,'4-8','1,3,4,5',',,,',NULL,'4');
/*!40000 ALTER TABLE `t_answers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-09-10  1:09:49
