-- MySQL dump 10.19  Distrib 10.3.37-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: promir
-- ------------------------------------------------------
-- Server version       10.3.37-MariaDB-1:10.3.37+maria~ubu2004

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `chats`
--

DROP TABLE IF EXISTS `chats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chats` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `stream_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id_fk` (`user_id`),
  KEY `stream_id_fk` (`stream_id`),
  CONSTRAINT `stream_id_fk` FOREIGN KEY (`stream_id`) REFERENCES `streams` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chats`
--

LOCK TABLES `chats` WRITE;
/*!40000 ALTER TABLE `chats` DISABLE KEYS */;
/*!40000 ALTER TABLE `chats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_users`
--

DROP TABLE IF EXISTS `course_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `course_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `paychek` tinyint(1) NOT NULL DEFAULT 0,
  `duration` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `course_users_course_id_foreign` (`course_id`),
  KEY `course_users_user_id_foreign` (`user_id`),
  CONSTRAINT `course_users_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  CONSTRAINT `course_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=168 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_users`
--

LOCK TABLES `course_users` WRITE;
/*!40000 ALTER TABLE `course_users` DISABLE KEYS */;
INSERT INTO `course_users` VALUES (27,'2022-12-20 10:21:31','2022-12-20 10:21:31',31,1,0,0,0),(28,'2022-12-20 10:22:01','2022-12-20 10:22:01',31,1,0,0,0),(29,'2022-12-20 10:23:17','2022-12-20 10:23:17',31,1,0,0,0),(30,'2022-12-20 10:24:15','2022-12-20 10:24:15',31,1,0,0,0),(31,'2022-12-20 10:25:24','2022-12-20 10:25:24',31,1,0,0,0),(32,'2022-12-20 10:26:38','2022-12-20 10:26:38',32,1,0,0,0),(33,'2022-12-20 10:27:43','2022-12-20 10:27:43',38,1,0,0,0),(34,'2022-12-20 10:27:43','2022-12-20 10:27:43',39,1,0,0,0),(35,'2022-12-20 10:28:32','2022-12-20 10:28:32',31,1,0,0,0),(36,'2022-12-20 10:31:18','2022-12-20 10:31:18',31,1,0,0,0),(37,'2022-12-20 10:32:31','2022-12-20 10:32:31',38,1,0,0,0),(38,'2022-12-20 10:32:31','2022-12-20 10:32:31',39,1,0,0,0),(39,'2022-12-20 10:32:43','2022-12-20 10:32:43',39,1,0,0,0),(40,'2022-12-20 10:32:57','2022-12-20 10:32:57',31,1,0,0,0),(41,'2022-12-20 10:34:08','2022-12-20 10:34:08',31,1,0,0,0),(42,'2022-12-20 10:34:08','2022-12-20 10:34:08',40,1,0,0,0),(43,'2022-12-20 10:34:35','2022-12-20 10:34:35',31,1,0,0,0),(44,'2022-12-20 10:34:35','2022-12-20 10:34:35',40,1,0,0,0),(45,'2022-12-20 10:35:12','2022-12-20 10:35:12',31,1,0,0,0),(46,'2022-12-20 10:35:12','2022-12-20 10:35:12',40,1,0,0,0),(47,'2022-12-20 10:35:18','2022-12-20 10:35:18',31,1,0,0,0),(48,'2022-12-20 10:35:18','2022-12-20 10:35:18',40,1,0,0,0),(49,'2022-12-20 10:35:28','2022-12-20 10:35:28',31,1,0,0,0),(50,'2022-12-20 10:35:28','2022-12-20 10:35:28',40,1,0,0,0),(51,'2022-12-20 10:35:39','2022-12-20 10:35:39',31,1,0,0,0),(52,'2022-12-20 10:35:39','2022-12-20 10:35:39',40,1,0,0,0),(53,'2022-12-20 10:35:54','2022-12-20 10:35:54',31,1,0,0,0),(54,'2022-12-20 10:35:54','2022-12-20 10:35:54',40,1,0,0,0),(55,'2022-12-20 10:35:56','2022-12-20 10:35:56',31,1,0,0,0),(56,'2022-12-20 10:35:56','2022-12-20 10:35:56',40,1,0,0,0),(57,'2022-12-20 10:35:59','2022-12-20 10:35:59',31,1,0,0,0),(58,'2022-12-20 10:35:59','2022-12-20 10:35:59',40,1,0,0,0),(59,'2022-12-20 10:36:00','2022-12-20 10:36:00',31,1,0,0,0),(60,'2022-12-20 10:36:00','2022-12-20 10:36:00',40,1,0,0,0),(61,'2022-12-20 10:36:01','2022-12-20 10:36:01',31,1,0,0,0),(62,'2022-12-20 10:36:01','2022-12-20 10:36:01',40,1,0,0,0),(63,'2022-12-20 10:38:42','2022-12-20 10:38:42',31,1,0,0,0),(64,'2022-12-20 10:38:42','2022-12-20 10:38:42',40,1,0,0,0),(65,'2022-12-20 10:56:49','2022-12-20 10:56:49',34,1,0,0,0),(66,'2022-12-20 10:57:30','2022-12-20 10:57:30',34,1,0,0,0),(67,'2022-12-20 10:57:47','2022-12-20 10:57:47',35,1,0,0,0),(68,'2022-12-20 10:57:48','2022-12-20 10:57:48',33,1,0,0,0),(69,'2022-12-20 10:57:53','2022-12-20 10:57:53',37,1,0,0,0),(70,'2022-12-20 11:19:21','2022-12-20 11:19:21',42,1,0,0,0),(71,'2022-12-20 11:20:17','2022-12-20 11:20:17',41,1,0,0,0),(72,'2022-12-20 14:06:28','2022-12-20 14:06:28',41,1,0,0,0),(73,'2022-12-20 14:06:32','2022-12-20 14:06:32',42,1,0,0,0),(74,'2022-12-20 14:06:40','2022-12-20 14:06:40',42,1,0,0,0),(75,'2022-12-20 14:06:56','2022-12-20 14:06:56',32,1,0,0,0),(76,'2022-12-20 14:09:10','2022-12-20 14:09:10',34,1,0,0,0),(77,'2022-12-20 14:10:25','2022-12-20 14:10:25',39,1,0,0,0),(78,'2022-12-20 14:10:39','2022-12-20 14:10:39',38,1,0,0,0),(79,'2022-12-20 14:10:39','2022-12-20 14:10:39',39,1,0,0,0),(80,'2022-12-20 14:42:08','2022-12-20 14:42:08',31,1,0,0,0),(81,'2022-12-20 14:42:08','2022-12-20 14:42:08',40,1,0,0,0),(82,'2022-12-20 14:42:08','2022-12-20 14:42:08',45,1,0,0,0),(83,'2022-12-20 14:42:16','2022-12-20 14:42:16',31,1,0,0,0),(84,'2022-12-20 14:42:16','2022-12-20 14:42:16',40,1,0,0,0),(85,'2022-12-20 14:42:16','2022-12-20 14:42:16',45,1,0,0,0),(86,'2022-12-20 14:42:23','2022-12-20 14:42:23',31,1,0,0,0),(87,'2022-12-20 14:42:23','2022-12-20 14:42:23',40,1,0,0,0),(88,'2022-12-20 14:42:23','2022-12-20 14:42:23',45,1,0,0,0),(89,'2022-12-20 14:42:24','2022-12-20 14:42:24',31,1,0,0,0),(90,'2022-12-20 14:42:24','2022-12-20 14:42:24',40,1,0,0,0),(91,'2022-12-20 14:42:24','2022-12-20 14:42:24',45,1,0,0,0),(92,'2022-12-20 14:42:25','2022-12-20 14:42:25',31,1,0,0,0),(93,'2022-12-20 14:42:25','2022-12-20 14:42:25',40,1,0,0,0),(94,'2022-12-20 14:42:25','2022-12-20 14:42:25',45,1,0,0,0),(95,'2022-12-20 14:42:29','2022-12-20 14:42:29',31,1,0,0,0),(96,'2022-12-20 14:42:29','2022-12-20 14:42:29',40,1,0,0,0),(97,'2022-12-20 14:42:29','2022-12-20 14:42:29',45,1,0,0,0),(98,'2022-12-20 14:42:30','2022-12-20 14:42:30',31,1,0,0,0),(99,'2022-12-20 14:42:30','2022-12-20 14:42:30',40,1,0,0,0),(100,'2022-12-20 14:42:30','2022-12-20 14:42:30',45,1,0,0,0),(101,'2022-12-20 14:42:31','2022-12-20 14:42:31',31,1,0,0,0),(102,'2022-12-20 14:42:31','2022-12-20 14:42:31',40,1,0,0,0),(103,'2022-12-20 14:42:31','2022-12-20 14:42:31',45,1,0,0,0),(104,'2022-12-20 14:42:32','2022-12-20 14:42:32',31,1,0,0,0),(105,'2022-12-20 14:42:32','2022-12-20 14:42:32',40,1,0,0,0),(106,'2022-12-20 14:42:32','2022-12-20 14:42:32',45,1,0,0,0),(107,'2022-12-20 14:42:40','2022-12-20 14:42:40',31,1,0,0,0),(108,'2022-12-20 14:42:40','2022-12-20 14:42:40',40,1,0,0,0),(109,'2022-12-20 14:42:40','2022-12-20 14:42:40',45,1,0,0,0),(110,'2022-12-20 14:42:42','2022-12-20 14:42:42',31,1,0,0,0),(111,'2022-12-20 14:42:42','2022-12-20 14:42:42',40,1,0,0,0),(112,'2022-12-20 14:42:42','2022-12-20 14:42:42',45,1,0,0,0),(113,'2022-12-20 14:42:55','2022-12-20 14:42:55',31,1,0,0,0),(114,'2022-12-20 14:42:55','2022-12-20 14:42:55',40,1,0,0,0),(115,'2022-12-20 14:42:55','2022-12-20 14:42:55',45,1,0,0,0),(116,'2022-12-20 14:42:58','2022-12-20 14:42:58',31,1,0,0,0),(117,'2022-12-20 14:42:58','2022-12-20 14:42:58',40,1,0,0,0),(118,'2022-12-20 14:42:58','2022-12-20 14:42:58',45,1,0,0,0),(119,'2022-12-20 14:42:59','2022-12-20 14:42:59',31,1,0,0,0),(120,'2022-12-20 14:42:59','2022-12-20 14:42:59',40,1,0,0,0),(121,'2022-12-20 14:42:59','2022-12-20 14:42:59',45,1,0,0,0),(122,'2022-12-20 14:43:01','2022-12-20 14:43:01',31,1,0,0,0),(123,'2022-12-20 14:43:01','2022-12-20 14:43:01',40,1,0,0,0),(124,'2022-12-20 14:43:01','2022-12-20 14:43:01',45,1,0,0,0),(125,'2022-12-20 14:43:04','2022-12-20 14:43:04',31,1,0,0,0),(126,'2022-12-20 14:43:04','2022-12-20 14:43:04',40,1,0,0,0),(127,'2022-12-20 14:43:04','2022-12-20 14:43:04',45,1,0,0,0),(128,'2022-12-20 14:43:05','2022-12-20 14:43:05',31,1,0,0,0),(129,'2022-12-20 14:43:05','2022-12-20 14:43:05',40,1,0,0,0),(130,'2022-12-20 14:43:05','2022-12-20 14:43:05',45,1,0,0,0),(131,'2022-12-20 14:43:29','2022-12-20 14:43:29',40,1,0,0,0),(132,'2022-12-20 14:43:42','2022-12-20 14:43:42',40,1,0,0,0),(133,'2022-12-20 14:43:46','2022-12-20 14:43:46',45,1,0,0,0),(134,'2022-12-20 14:43:47','2022-12-20 14:43:47',45,1,0,0,0),(135,'2022-12-20 14:43:49','2022-12-20 14:43:49',45,1,0,0,0),(136,'2022-12-20 14:43:53','2022-12-20 14:43:53',45,1,0,0,0),(137,'2022-12-20 14:43:54','2022-12-20 14:43:54',45,1,0,0,0),(138,'2022-12-20 14:43:56','2022-12-20 14:43:56',45,1,0,0,0),(139,'2022-12-20 14:43:57','2022-12-20 14:43:57',45,1,0,0,0),(140,'2022-12-20 14:43:58','2022-12-20 14:43:58',45,1,0,0,0),(141,'2022-12-20 14:44:01','2022-12-20 14:44:01',45,1,0,0,0),(142,'2022-12-20 14:44:02','2022-12-20 14:44:02',45,1,0,0,0),(143,'2022-12-20 14:44:04','2022-12-20 14:44:04',45,1,0,0,0),(144,'2022-12-20 14:44:04','2022-12-20 14:44:04',45,1,0,0,0),(145,'2022-12-20 14:44:05','2022-12-20 14:44:05',45,1,0,0,0),(146,'2022-12-20 14:44:08','2022-12-20 14:44:08',45,1,0,0,0),(147,'2022-12-20 14:44:09','2022-12-20 14:44:09',45,1,0,0,0),(148,'2022-12-20 14:44:10','2022-12-20 14:44:10',45,1,0,0,0),(149,'2022-12-20 14:44:11','2022-12-20 14:44:11',45,1,0,0,0),(150,'2022-12-20 14:44:12','2022-12-20 14:44:12',40,1,0,0,0),(151,'2022-12-20 14:44:14','2022-12-20 14:44:14',40,1,0,0,0),(152,'2022-12-20 14:44:15','2022-12-20 14:44:15',40,1,0,0,0),(153,'2022-12-20 14:44:15','2022-12-20 14:44:15',40,1,0,0,0),(154,'2022-12-20 14:44:16','2022-12-20 14:44:16',45,1,0,0,0),(155,'2022-12-20 14:45:07','2022-12-20 14:45:07',40,1,0,0,0),(156,'2022-12-20 14:45:09','2022-12-20 14:45:09',45,1,0,0,0),(157,'2022-12-20 14:45:14','2022-12-20 14:45:14',40,1,0,0,0),(158,'2022-12-20 14:45:23','2022-12-20 14:45:23',45,1,0,0,0),(159,'2022-12-20 14:45:25','2022-12-20 14:45:25',40,1,0,0,0),(160,'2022-12-20 14:45:28','2022-12-20 14:45:28',40,1,0,0,0),(161,'2022-12-20 14:53:51','2022-12-20 14:53:51',40,1,0,0,0),(162,'2022-12-20 14:56:41','2022-12-20 14:56:41',31,1,0,0,0),(163,'2022-12-20 14:56:41','2022-12-20 14:56:41',40,1,0,0,0),(164,'2022-12-20 14:56:41','2022-12-20 14:56:41',45,1,0,0,0),(165,'2022-12-20 14:56:45','2022-12-20 14:56:45',31,1,0,0,0),(166,'2022-12-20 14:56:45','2022-12-20 14:56:45',40,1,0,0,0),(167,'2022-12-20 14:56:45','2022-12-20 14:56:45',45,1,0,0,0);
/*!40000 ALTER TABLE `course_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `courses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `descr` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `video` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price` int(10) unsigned NOT NULL,
  `course_id` bigint(20) unsigned DEFAULT NULL,
  `duration` int(11) NOT NULL DEFAULT 0,
  `category` varchar(255) NOT NULL,
  `userdescr` text NOT NULL,
  `pricetext` varchar(255) DEFAULT NULL,
  `sessioncount` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `courses_course_id_foreign` (`course_id`),
  CONSTRAINT `courses_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES (31,'АБОНЕМЕНТ В ЖЕНСКИЙ КЛУБ','<p>Женский клуб &ndash; закрытое сообщество, которое активно и в то же время бережно развивает и раскрывает лучшее в ВАС.</p>\r\n<p>Клуб для тех, кому важно развиваться и интересно узнавать главные правила жизни.</p>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li>Каждый месяц проработка важной и актуальной темы ( отношения, сексуальность, деньги, ресурс)</li>\r\n<li>Мак-карты, расклады каждый понедельник ю</li>\r\n<li>Онлайн мастермайнды и эфиры на выходных</li>\r\n<li>Постоянная поддержка теплого комьюнити осознанных девушек</li>\r\n<li>Мотивация на улучшение всех сфер, влияющих на качество жизни</li>\r\n<li>Проработка чувственности и раскрытие женственности</li>\r\n</ul>','/uploads/63a186f7e525e.png','по','2022-12-20 09:57:11','2022-12-20 09:57:11',2000,NULL,0,'Абонемент в женский клуб','<p>ПоПо</p>','МЕС',1),(32,'МЕДИТАЦИИ','<p>Медитация - это возможность погрузиться в пространство своего психологического комфорта и эмоционального роста. Сонастройка и единение со своим духом и телом помогает очиститься от негатива, избавиться от отягощающих мыслей и направит энергию в нужное русло.</p>\r\n<p>Медитирующий человек сохраняет способность ясно мыслить даже в самых критических ситуациях. Внутренняя гармония дает устойчивую опору.</p>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li>Онлайн занятия раз в неделю</li>\r\n<li>Удобно из любой точки мира</li>\r\n<li>Можно работать в группе или слушать в записи</li>\r\n<li>Для тех, кто готов проработать вопросы и расти</li>\r\n</ul>','/uploads/63a18764a773c.png','попо','2022-12-20 09:59:00','2022-12-20 09:59:00',2200,NULL,0,'Медитация','<p>попо</p>','4 занятия',1),(33,'АНТИСТРЕСС','<p>Позволит привести состояние к балансу и к гармонии утром для продуктивного дня, вечером для здорового сна.<br>Входит 2 медитации &laquo;гармония и баланс&raquo; , &laquo;снятие тревоги&raquo;</p>','','попо','2022-12-20 09:59:58','2022-12-20 09:59:58',1000,NULL,0,'Блоки','<p>попо</p>','МЕС + МЕТОДИЧКА',1),(34,'ЛЮБОВЬ И ОТНОШЕНИЯ','<p>Настраивает на отношения в любви, через работу с собой на психологическом, духовном и эмоциональных уровнях.<br>Входит 3 медитации &laquo;Безусловная любовь&raquo;, &laquo;Гармоничные отношения&raquo;, &laquo;Снятие негатива&raquo;.</p>','','попо','2022-12-20 10:01:30','2022-12-20 10:01:30',1500,NULL,0,'Блоки','<p>попо</p>','МЕС + МЕТОДИЧКА',1),(35,'БЛАГОПОЛУЧИЕ И ФИНАНСЫ','<p>Входит 4 медитации<br>Раз за разом, прослушивая эти медитации, вырабатывается состояние, которое впустит в вашу жизнь изобилие и благополучие</p>','','попо','2022-12-20 10:02:19','2022-12-20 10:02:19',2000,NULL,0,'Блоки','<p>попо</p>','МЕС + МЕТОДИЧКА',1),(36,'РЕТРИТ','<p>Ретрит (англ. retreat &mdash; &laquo;уединение&raquo;, &laquo;удаление от общества&raquo;) - это прекрасная возможность работы над собой вне дома. Это лучший способ уйти от суеты, перезагрузить сознание и поработать над своими установками. Под руководством наставника проходит групповая терапия, которая необходима жителям мегаполиса для восстановления сил и борьбы с выгоранием, информационным шумом. Энергетические практики, работа с чакрами и МАК картами, ежедневная йога и медитация, дыхательные техники и танцевально-двигательную терапия позволяют &laquo;перезагрузить&raquo; мозг, окунуться в самопознание и отдохнуть от городской суеты.</p>','/uploads/63a1886ea69e6.png','попо','2022-12-20 10:03:26','2022-12-20 10:03:26',30000,NULL,0,'Ретрит','<p>попо</p>','МЕС',1),(37,'МИЛЫЕ ЗАВТРАКИ','<p>Милые завтраки &ndash; отличная возможность для трансформаций и комфортного общения. В уютном кругу обсуждаются трудности и варианты их решения, делаются практики с МАК картами и проходят трансформационные разговоры. С каждой участницей индивидуально прорабатывается проблема, всем кругом оказывается поддержка. После встреч Вы ощутите чувство легкости, покинете завтрак со свободным дыханием, ровной спиной и гордо поднятой головой.</p>','/uploads/63a188e16fdb9.png','попо','2022-12-20 10:05:21','2022-12-20 10:05:21',1000,NULL,0,'Милые завтраки','<p>попо</p>','МЕС',1),(38,'КУРС \"МОЁ Я\"','<p>Сериал &laquo;Твин-Пикс&raquo; Дэвида Линча и Марка Фроста стартовал на телеэкранах в 1990 году и произвёл эффект разорвавшейся бомбы. На сегодняшний день почти все разговоры об эволюции в мире телесериалов не обходятся без упоминания творения Линча и Фроста. Без преувеличения можно сказать, что без этого проекта не было бы многих крупных сериалов, да и вообще &mdash; само телевидение могло бы быть совсем другим.</p>','/uploads/63a18a019fd00.jpg','попо','2022-12-20 10:10:09','2022-12-20 10:10:09',1000,NULL,0,'Курсы','<p>попо</p>','МЕС',1),(39,'1 СЕЗОН','<p>ыфв</p>','','фыв','2022-12-20 10:11:58','2022-12-20 10:11:58',2500,38,0,'Курсы','<p>вфывфы</p>','МЕС',1),(40,'ПОдкурс','<p>апап</p>','','апап','2022-12-20 10:33:49','2022-12-20 10:33:49',100,31,0,'Ретрит','<p>апапа</p>','МЕС',1),(41,'Разбираются вопросы, связанные с отношениями, детьми, здоровьем и финансами','<p>Личная консультация</p>','','п','2022-12-20 11:03:54','2022-12-20 11:03:54',10000,NULL,0,'Личная консультация','<p>п</p>','1 час',1),(42,'Разбираются вопросы коммуникации и взаимоотношений партнёров','<p>Личная</p>','','п','2022-12-20 11:04:56','2022-12-20 11:04:56',12000,NULL,0,'Личная консультация','<p>п</p>','80 минут',1),(43,'Пакет для комплексной проработки вопроса','<p>п</p>','','п','2022-12-20 11:09:54','2022-12-20 11:09:54',48000,NULL,0,'Личная консультация','<p>п</p>',NULL,6),(44,'План личного роста','<p>п</p>','','п','2022-12-20 11:11:18','2022-12-20 11:11:18',72000,NULL,0,'Личная консультация','<p>п</p>',NULL,12),(45,'Подкурс абонемента в женский клуб','<p>подкурс</p>','','п','2022-12-20 14:20:46','2022-12-20 14:20:46',5000,31,0,'Абонемент в женский клуб','<p>попо</p>','3 месяца',1),(46,'Подкурс медитаций','<p>ми</p>','','апап','2022-12-20 14:30:08','2022-12-20 14:30:08',4200,32,0,'Медитация','<p>ми</p>','8 занятий',1);
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (10,'2014_10_12_000000_create_users_table',1),(11,'2014_10_12_100000_create_password_resets_table',1),(12,'2019_08_19_000000_create_failed_jobs_table',1),(13,'2019_12_14_000001_create_personal_access_tokens_table',1),(14,'2022_09_11_184536_create_courses_table',1),(15,'2022_09_28_151432_create_stream_table',1),(16,'2022_09_30_113001_create_chats_table',1),(17,'2022_10_01_155021_add_role_to_users_table',1),(18,'2022_10_03_120810_add_price_to_courses_table',1),(19,'2022_12_12_114651_add_inner_course_id_to_courses_table',1),(20,'2022_10_06_131735_create_course_users_table',2),(21,'2022_10_13_151241_create_stream_users_table',2),(22,'2022_10_13_152957_add_message_to_chats_table',2),(23,'2022_10_14_154701_add_stream_token_to_streams_table',2),(24,'2022_11_24_142232_add_subscribe_duration_to_courses_table',2),(25,'2022_11_26_124514_add_payment_id_to_course_users_table',2),(26,'2022_11_26_173214_add_paycheck_to_course_users_table',2),(34,'2022_11_26_173829_add_duration_to_course_users_table',3),(35,'2022_12_04_190102_change_video_column',3),(36,'2022_12_12_135716_add_category_to_courses_table',3),(37,'2022_12_12_145612_add_audio_change_to_courses_table',3),(38,'2022_12_19_181147_add_pricetext_and_sessioncount_to_courses_table',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stream_users`
--

DROP TABLE IF EXISTS `stream_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stream_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `stream_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `stream_users_stream_id_foreign` (`stream_id`),
  KEY `stream_users_user_id_foreign` (`user_id`),
  CONSTRAINT `stream_users_stream_id_foreign` FOREIGN KEY (`stream_id`) REFERENCES `streams` (`id`) ON DELETE CASCADE,
  CONSTRAINT `stream_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stream_users`
--

LOCK TABLES `stream_users` WRITE;
/*!40000 ALTER TABLE `stream_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `stream_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `streams`
--

DROP TABLE IF EXISTS `streams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `streams` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `preview_image` varchar(255) NOT NULL,
  `youtube_flow` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `streamtoken` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `streams`
--

LOCK TABLES `streams` WRITE;
/*!40000 ALTER TABLE `streams` DISABLE KEYS */;
/*!40000 ALTER TABLE `streams` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'wed','wed@mail.ru',NULL,'$2y$10$mml7cZuKi4XbbykcXG9hbuGrzCQHSSSW2TY7o4xU4fxvMVz9B0GDG',NULL,'2022-12-12 09:35:49','2022-12-12 09:35:49',1);
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

-- Dump completed on 2022-12-20 15:02:09