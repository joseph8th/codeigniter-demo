-- MySQL dump 10.14  Distrib 5.5.37-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: ci_demo
-- ------------------------------------------------------
-- Server version	5.5.37-MariaDB-log

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(128) NOT NULL,
  `fav_color` varchar(64) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Joseph Edwards','joseph-edwards','1972-11-18','jedwards8th@gmail.com','Burnt Umber'),(2,'Phil Collins','phil-collins','1961-05-12','phil@example.com','Puce'),(3,'Bruce Wayne','bruce-wayne','1958-02-14','batman@example.com','Rich Black'),(4,'Carla Marks','carla-marks','1917-05-01','pinko@commies-r.us','Red'),(5,'Manny Goldstein','manny-goldstein','1984-01-01','bigbrother@innerparty.org','Yellow'),(6,'Peter Parker','peter-parker','1963-05-15','spidey@thedailybugle.com','Pitch Black'),(7,'Eddie Brock','eddie-brock','1973-08-12','venom@symbio.te','Black'),(8,'Dick Grayson','dick-grayson','1982-04-25','robin@waynemanor.com','Orange'),(9,'Phil Collins','phil-collins-0','2013-01-02','phil@sususudio.com','Green'),(10,'Phil Collins','phil-collins-1','1946-11-15','phil-collins@something.org','White'),(11,'Philostrasus Bombastus Paracelsus','philostrasus-bombastus-paracelsus','1932-10-30','paracelsus@alchemists-r.us','Red and White'),(12,'Barry Allen','barry-allen','1968-02-14','flash@centralcity.com','Red'),(13,'Billy Tzu','billy-tzu','1999-01-02','billy@example.com','Green'),(15,'Steve Rodgers','steve-rodgers','1922-07-04','captain@merica.us','Red White and Blue'),(16,'May Parker','may-parker','1952-05-15','auntmay@queens.com','Pink'),(17,'Earl Grey','earl-grey','1974-04-12','earl@tea.com','Brown'),(18,'Paul Abdul','paul-abdul','1968-10-20','paul@abdul.org','Purple'),(19,'Dolly Madison','dolly-madison','1922-07-04','dolly@madison.us','Yellow'),(20,'Mikey Moose','mikey-moose','1987-07-07','mikey@moose.com','Brown'),(21,'Mighty Moose','mikey-moose-0','1987-07-07','mighty@moose.com','Umber'),(23,'Peter Parker','peter-parker-0','1963-05-15','spidey@thedailybugle.com','');
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

-- Dump completed on 2014-06-02  0:36:09
