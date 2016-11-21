-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: mvc
-- ------------------------------------------------------
-- Server version	5.7.11

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
-- Table structure for table `carro`
--

DROP TABLE IF EXISTS `carro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carro` (
  `car_id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(45) NOT NULL,
  `placa` varchar(45) NOT NULL,
  `km` int(255) NOT NULL,
  PRIMARY KEY (`car_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carro`
--

LOCK TABLES `carro` WRITE;
/*!40000 ALTER TABLE `carro` DISABLE KEYS */;
INSERT INTO `carro` VALUES (2,'bronze','kjh-9898w',20012),(3,'ouro','kjh-9898',10000),(1,'ouro','gte-4545sdfasdf',2000);
/*!40000 ALTER TABLE `carro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data`
--

DROP TABLE IF EXISTS `data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data` (
  `dataid` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(255) NOT NULL,
  PRIMARY KEY (`dataid`)
) ENGINE=MyISAM AUTO_INCREMENT=112 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data`
--

LOCK TABLES `data` WRITE;
/*!40000 ALTER TABLE `data` DISABLE KEYS */;
INSERT INTO `data` VALUES (95,'testetess'),(94,'testetess'),(93,'testetess'),(92,'testetess'),(91,'testetess'),(90,'testetess'),(89,'teste'),(88,'teste'),(87,'cvnvvbnc'),(86,'cvnvvbnc'),(85,'cvnvvbnc'),(84,'cvnvvbnc'),(83,'cvnvvbnc'),(82,'cvnvvbnc'),(81,'cvnvvbnc'),(80,'cvnvvbnc'),(79,'cvnv'),(78,'cvnv'),(77,'cvnv'),(76,'cvnv'),(75,'cvnv'),(74,'cvnv'),(73,'cvnv'),(72,'cvnv'),(71,''),(70,''),(69,'teste'),(68,'teste'),(67,'teste'),(66,'asdf'),(65,'aeae'),(64,'maisum teste'),(63,'test'),(62,'test'),(61,''),(60,''),(96,'testetess'),(97,'testetess'),(98,'testetess'),(99,'testetess'),(100,'testetess'),(101,'testetess'),(102,''),(103,''),(104,'asdfa'),(105,'asdfa'),(106,'asdfasdf'),(107,'asdfasdf'),(108,'asdfasdf'),(109,'asdfasdf'),(110,'asdfasdf'),(111,'asdfasdf');
/*!40000 ALTER TABLE `data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `note`
--

DROP TABLE IF EXISTS `note`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `note` (
  `noteid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(10) unsigned NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`noteid`),
  KEY `userid` (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `note`
--

LOCK TABLES `note` WRITE;
/*!40000 ALTER TABLE `note` DISABLE KEYS */;
INSERT INTO `note` VALUES (1,1,'Jesse','This is a note ','0000-00-00 00:00:00'),(2,1,'test','test\r\n','2012-08-30 03:11:05'),(3,1,'test2','test2','2012-08-30 03:11:08'),(4,1,'','','2012-08-30 03:15:54'),(5,1,'','','2012-08-30 03:15:55'),(6,1,'','','2012-08-30 03:15:56'),(7,1,'asdf','asdf','2012-08-30 03:15:56'),(8,1,'asdf233','asdf233','2012-08-30 03:15:57'),(9,1,'asdf','asdf','2012-08-30 03:15:59'),(10,13,'DOG FACE','111','2012-08-30 03:22:04'),(11,15,'teste','teste','2016-09-25 08:09:24'),(12,15,'teste','teste','2016-09-25 08:09:32'),(13,15,'','','2016-09-26 17:20:33'),(14,15,'teeeeeeeste','eeeeeeeeeeeeeeeeeeeeeeeeeeeeeee','2016-10-29 19:20:11');
/*!40000 ALTER TABLE `note` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `person`
--

DROP TABLE IF EXISTS `person`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `person` (
  `personid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `age` int(3) unsigned NOT NULL,
  `gender` varchar(1) NOT NULL,
  `personcol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`personid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `person`
--

LOCK TABLES `person` WRITE;
/*!40000 ALTER TABLE `person` DISABLE KEYS */;
INSERT INTO `person` VALUES (1,'JESSE','',24,'m',NULL),(2,'joe','',22,'m',NULL),(3,'jenny','',434,'f',NULL),(4,'teste','',13,'f',NULL),(5,'teste','',13,'f',NULL),(6,'name','',12,'m',NULL),(7,'name','',12,'m',NULL),(8,'name2','Roberto Lima',12,'m',NULL);
/*!40000 ALTER TABLE `person` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reserva`
--

DROP TABLE IF EXISTS `reserva`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reserva` (
  `reservaid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(10) DEFAULT NULL,
  `car_id` int(10) DEFAULT NULL,
  `categoria` varchar(32) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_inicio` date NOT NULL,
  `date_fim` date NOT NULL,
  `hora_inicio` time DEFAULT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`reservaid`),
  KEY `car_id` (`car_id`),
  KEY `userid` (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reserva`
--

LOCK TABLES `reserva` WRITE;
/*!40000 ALTER TABLE `reserva` DISABLE KEYS */;
INSERT INTO `reserva` VALUES (20,38,NULL,'ouro','2016-10-10 11:10:00','2016-10-12','2016-10-13','12:22:00','expirada'),(28,18,NULL,'ouro','2016-11-20 07:11:00','2016-11-21','2016-11-22','05:55:00','ativa');
/*!40000 ALTER TABLE `reserva` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(25) NOT NULL,
  `password` varchar(64) NOT NULL,
  `role` enum('default','admin','owner') NOT NULL DEFAULT 'default',
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (21,'funcionario','450ab1263842beb476d7472b3d5ff6e6d7fc588029b1ae2d3cbc81df27150b3b','admin'),(15,'root','2126e28ae7282a0254be3b19b7fb193829d6976c58793c1fe48d55876b14bea8','owner'),(18,'cliente','fa860cccb849804a4b84db37d6645709c97944b77adc70d71fdd97561e7e718b','default');
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

-- Dump completed on 2016-11-20 21:26:31
