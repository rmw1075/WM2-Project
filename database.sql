CREATE DATABASE  IF NOT EXISTS `rmw1075` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `rmw1075`;
-- MySQL dump 10.13  Distrib 8.0.18, for Win64 (x86_64)
--
-- Host: localhost    Database: rmw1075
-- ------------------------------------------------------
-- Server version	5.7.28-log

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
-- Table structure for table `quiz`
--

DROP TABLE IF EXISTS `quiz`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `quiz` (
  `qnum` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `question` mediumtext COLLATE utf8_unicode_ci,
  `correct` varchar(600) COLLATE utf8_unicode_ci DEFAULT NULL,
  `option2` varchar(600) COLLATE utf8_unicode_ci DEFAULT NULL,
  `option3` varchar(600) COLLATE utf8_unicode_ci DEFAULT NULL,
  `option4` varchar(600) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`qnum`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quiz`
--

LOCK TABLES `quiz` WRITE;
/*!40000 ALTER TABLE `quiz` DISABLE KEYS */;
INSERT INTO `quiz` VALUES (1,'var=2.0','var=[]','var=\"list\"','var=21',NULL),(2,'var=[]','var=\"foobar\"','var=1','var=2.0',NULL),(3,'Whole numbers','Characters','Decimal numbers','All of the above',NULL),(4,'Decimal numbers','Characters','Whole numbers','All of the above',NULL),(5,'With \"[name] = [value]\"','With \"var [name] = [value]\"','With \"[value] = [name]\"','With \"[value] = var [name]\"',NULL),(6,'list1.append()','list1.add()','list1.attach','list1.plus()',NULL),(7,'len(StringName)','length(StringName)','calcLen(StringName)','StringLength(StringName)',NULL),(8,'While loop','For loop','If loop','When loop',NULL),(9,'Else statement','Variable declaration','While loop','For statement',NULL),(10,'#comment','//comment','<!-- comment -->','/* comment */',NULL),(11,'To connect lines of code with each other','To make it easier to read','To make it look pretty','No reason at all',NULL),(12,'\":\"','\".\"','\"/\"','Nothing',NULL),(13,'For Loop','While Loop','If Statement','Len() function',NULL),(14,'x++','You can\'t add to a variable','x.add()','x plus one',NULL),(15,'string(var)','float(var)','cast(var)','turnString(var)',NULL);
/*!40000 ALTER TABLE `quiz` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `results`
--

DROP TABLE IF EXISTS `results`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `results` (
  `userID` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `quizDate` datetime DEFAULT NULL,
  `qOrder` tinytext COLLATE utf8_unicode_ci,
  `answerOrder` tinytext COLLATE utf8_unicode_ci,
  `chosen` tinytext COLLATE utf8_unicode_ci,
  `score` decimal(5,2) DEFAULT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `results`
--

LOCK TABLES `results` WRITE;
/*!40000 ALTER TABLE `results` DISABLE KEYS */;
/*!40000 ALTER TABLE `results` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `userID` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `firstName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2019-11-20 17:02:35
