CREATE DATABASE  IF NOT EXISTS `at9148` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `at9148`;
-- MySQL dump 10.13  Distrib 8.0.18, for Win64 (x86_64)
--
-- Host: localhost    Database: at9148
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
-- Dumping data for table `python_comments`
--

LOCK TABLES `python_comments` WRITE;
/*!40000 ALTER TABLE `python_comments` DISABLE KEYS */;
INSERT INTO `python_comments` VALUES (1,'Barney Rubbles','2019-04-11 17:11:14','Father of Bamm-Bamm\r\n\r\nWorks with Fred at a Rock Quarry'),(34,'Jim Kelly','2019-04-11 17:29:28','Was the greatest quarterback to play the game.   Lot of hours I spent going to watch him play in the early 1900\'s'),(35,'Fred Flinstone','2019-04-11 17:39:26','Yabba Dabba Doo!'),(40,'Tiger Woods','2019-04-14 18:40:33','It would be very cool if Tiger Woods wins the Masters today Sunday April 14.'),(42,'Watching Golf is fun!','2019-04-14 23:15:45','Jim likes to program his computer and watch golf on TV at the same time'),(49,'Jim Habermas','2019-04-15 00:42:06','Jim Habermas is sure glad to get is taxes done one day early this year!'),(62,'yeet','2019-11-25 16:47:22','bbbbbbbbbbbbbbbbbbbbbb'),(63,'yeet','2019-11-25 17:17:54','yeet'),(64,'yeet','2019-11-25 17:18:01','yeet'),(65,'yeet','2019-11-25 17:18:39','yeet'),(66,'yeet','2019-11-25 17:18:41','yeet'),(67,'yeet','2019-11-25 17:19:14','yeet'),(68,'yeet','2019-11-25 17:22:24','yeet'),(69,'oh','2019-11-25 17:22:33','no');
/*!40000 ALTER TABLE `python_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `quiz`
--

LOCK TABLES `quiz` WRITE;
/*!40000 ALTER TABLE `quiz` DISABLE KEYS */;
INSERT INTO `quiz` VALUES (1,'Which variable is being assigned to a list object?','var=2.0','var=[]','var=\"list\"','var=21'),(2,'Which variable is being assigned to a floating point value?','var=[]','var=\"foobar\"','var=1','var=2.0'),(3,'What type of data do integers hold?','Whole numbers','Characters','Decimal numbers','All of the above'),(4,'What type of data do floats hold?','Decimal numbers','Characters','Whole numbers','All of the above'),(5,'How do you assign a variable in Python?','With \"[name] = [value]\"','With \"var [name] = [value]\"','With \"[value] = [name]\"','With \"[value] = var [name]\"'),(6,'What is th proper way  to add data to an existing list?','list1.append()','list1.add()','list1.attach','list1.plus()'),(7,'How do you determine the length of a string in Python?','len(StringName)','length(StringName)','calcLen(StringName)','StringLength(StringName)'),(8,'Which is best when you have a set amount of times you want a loop to execute? ','For Loop','While Loop','If loop','When loop'),(9,'What often accompanies an if statement?','Else statement','Variable declaration','While loop','For statement'),(10,'How do you write a comment in Python?','#comment','//comment','Other Option','/* comment */'),(11,'Why do you indent lines in Python?','To connect lines of code with each other','To make it easier to read','To make it look pretty','No reason at all'),(12,'What is required after writing a loop or if statement?','\":\"','\".\"','\"/\"','Nothing'),(13,'What is the preferred method for printing contents of a loop?','For Loop','While Loop','If Statement','Len() function'),(14,'What statement would be used to add one to the variable \"x\"?','x++','You can\'t add to a variable','x.add()','x plus one'),(15,'How do you turn a variable into a string?','str(var)','float(var)','cast(var)','turnString(var)');
/*!40000 ALTER TABLE `quiz` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `results`
--

LOCK TABLES `results` WRITE;
/*!40000 ALTER TABLE `results` DISABLE KEYS */;
INSERT INTO `results` VALUES ('test123','2019-11-21 21:08:34','9,7,11,15,6,4,14,13,1,12,5,2,10,3,8','Variable declarationyeetWhile loopyeetFor statementyeetElse statementyeetcalcLen(StringName)yeetlen(StringName)yeetlength(StringName)yeetStringLength(StringName)yeetTo make it easier to readyeetNo reason at allyeetTo connect lines of code with each otheryeetTo make it look prettyyeetcast(var)yeetstr(var)yeetfloat(var)yeetturnString(var)yeetlist1.plus()yeetlist1.attachyeetlist1.add()yeetlist1.append()yeetWhole numbersyeetCharactersyeetDecimal numbersyeetAll of the aboveyeetx++yeetYou can\'t add to a variableyeetx.add()yeetx plus oneyeetLen() functionyeetFor LoopyeetWhile LoopyeetIf Statementyeetvar=21yeetvar=\"list\"yeetvar=2.0yeetvar=[]yeet\":\"yeet\".\"yeet\"/\"yeetNothingyeetWith \"[value] = var [name]\"yeetWith \"[value] = [name]\"yeetWith \"var [name] = [value]\"yeetWith \"[name] = [value]\"yeetvar=[]yeetvar=2.0yeetvar=1yeetvar=\"foobar\"yeetOTHER OPTIONyeet//commentyeet/* comment */yeet#commentyeetWhole numbersyeetAll of the aboveyeetCharactersyeetDecimal numbersyeetFor LoopyeetIf loopyeetWhile LoopyeetWhen loop','Variable declarationyeetlength(StringName)yeetNo reason at allyeetcast(var)yeetlist1.plus()yeetCharactersyeetx++yeetWhile Loopyeetvar=yeetyeetWith yeetvar=1yeetOTHER OPTIONyeetWhole numbersyeetWhile Loop',0.13);
/*!40000 ALTER TABLE `results` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `surveycomments`
--

LOCK TABLES `surveycomments` WRITE;
/*!40000 ALTER TABLE `surveycomments` DISABLE KEYS */;
INSERT INTO `surveycomments` VALUES ('test6','lists',10,1);
/*!40000 ALTER TABLE `surveycomments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('abc1234','Greg','Goya','$2y$10$sXBa75RJ63IJuFHCPLHvK.ZwREhoyxSsxQWtsXYyzA1f9c1HEjPV6','test@gmail.com','Student'),('rmw1075','Ryan','Weiss','$2y$10$noKWhXtV8Z8p6ZYbRe5bRu90vYldya1UKC2NBjus10B.m4UoNktA.','rmw1075@g.rit.edu','Student'),('test123','test','test','$2y$10$NUJeegnJy6S2BvUgBFUxVecvVD91PCIg.6Bf/pDzoCFm7uF/wME/e','test','Student'),('test2','Adam','Johnson','$2y$10$s3pEwoHj7u6jCLVkdxWbK.J8aFzs5FeAXrM56thCp5D7Y.1E.ILtm','nope@gmail.com','Instructor'),('test6','test','test','$2y$10$Ow3VWz6WIkcVVQDoH.RMWuvcced6Lfm9WpN1d/uBR4JT120.fw0Wi','test','Student');
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

-- Dump completed on 2019-11-25 12:24:24
