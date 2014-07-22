CREATE DATABASE  IF NOT EXISTS `rn` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `rn`;
-- MySQL dump 10.13  Distrib 5.5.16, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: rn
-- ------------------------------------------------------
-- Server version	5.5.20-log

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
-- Table structure for table `thumbnails`
--

DROP TABLE IF EXISTS `thumbnails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `thumbnails` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `thumbnails_created_by_foreign` (`created_by`),
  CONSTRAINT `thumbnails_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `thumbnails`
--

LOCK TABLES `thumbnails` WRITE;
/*!40000 ALTER TABLE `thumbnails` DISABLE KEYS */;
INSERT INTO `thumbnails` VALUES (1,'header_1_1406027804_thumb.jpg',1,'2014-07-22 10:16:45','2014-07-22 10:16:45'),(2,'header_2_1406027861_thumb.jpg',1,'2014-07-22 10:17:41','2014-07-22 10:17:41'),(3,'header_3_1406027872_thumb.jpg',1,'2014-07-22 10:17:52','2014-07-22 10:17:52'),(4,'header_4_1406027909_thumb.jpg',1,'2014-07-22 10:18:30','2014-07-22 10:18:30'),(5,'header_5_1406027927_thumb.jpg',1,'2014-07-22 10:18:47','2014-07-22 10:18:47'),(6,'header_6_1406027940_thumb.jpg',1,'2014-07-22 10:19:00','2014-07-22 10:19:00'),(7,'header_7_1406027953_thumb.jpg',1,'2014-07-22 10:19:13','2014-07-22 10:19:13'),(8,'xfm_1406043241_thumb.png',1,'2014-07-22 14:34:02','2014-07-22 14:34:02'),(9,'head_banger_1406043262_thumb.jpg',1,'2014-07-22 14:34:22','2014-07-22 14:34:22'),(10,'metal_ireland_logo_1406043298_thumb.png',1,'2014-07-22 14:34:58','2014-07-22 14:34:58'),(11,'band_with_van_1406043606_thumb.jpg',1,'2014-07-22 14:40:08','2014-07-22 14:40:08'),(12,'natural_cut_2_1406043768_thumb.jpg',1,'2014-07-22 14:42:49','2014-07-22 14:42:49'),(13,'camelot_4_1406043932_thumb.jpg',1,'2014-07-22 14:45:32','2014-07-22 14:45:32'),(14,'fibbers_1_1406044003_thumb.jpg',1,'2014-07-22 14:46:43','2014-07-22 14:46:43'),(15,'fibbers_2_1406044015_thumb.jpg',1,'2014-07-22 14:46:55','2014-07-22 14:46:55'),(16,'fibbers_peter_1_1406044032_thumb.jpg',1,'2014-07-22 14:47:13','2014-07-22 14:47:13'),(17,'in_the_way_cover_1406044050_thumb.jpg',1,'2014-07-22 14:47:30','2014-07-22 14:47:30'),(18,'in_the_way_gocodes_1406044061_thumb.jpg',1,'2014-07-22 14:47:41','2014-07-22 14:47:41'),(19,'logo_1406044094_thumb.jpg',1,'2014-07-22 14:48:15','2014-07-22 14:48:15'),(20,'natural_cut_1_1406044117_thumb.jpg',1,'2014-07-22 14:48:37','2014-07-22 14:48:37'),(21,'natural_cut_3_1406044222_thumb.jpg',1,'2014-07-22 14:50:22','2014-07-22 14:50:22'),(22,'natural_cut_4_1406044245_thumb.jpg',1,'2014-07-22 14:50:45','2014-07-22 14:50:45'),(23,'natural_cut_wide_1_1406044289_thumb.jpg',1,'2014-07-22 14:51:29','2014-07-22 14:51:29'),(24,'no_way_back_cover_1406044314_thumb.jpg',1,'2014-07-22 14:51:54','2014-07-22 14:51:54'),(25,'rohypnol_cover_1406044335_thumb.jpg',1,'2014-07-22 14:52:15','2014-07-22 14:52:15'),(26,'somc_cover_1406044354_thumb.jpg',1,'2014-07-22 14:52:34','2014-07-22 14:52:34'),(27,'westland_1_1406044411_thumb.jpg',1,'2014-07-22 14:53:31','2014-07-22 14:53:31'),(28,'westland_2_1406044433_thumb.jpg',1,'2014-07-22 14:53:53','2014-07-22 14:53:53'),(29,'westland_3_1406044455_thumb.jpg',1,'2014-07-22 14:54:15','2014-07-22 14:54:15'),(30,'westland_4_1406044485_thumb.jpg',1,'2014-07-22 14:54:45','2014-07-22 14:54:45'),(31,'westland_5_1406044501_thumb.jpg',1,'2014-07-22 14:55:01','2014-07-22 14:55:01');
/*!40000 ALTER TABLE `thumbnails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `videos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `embedded` tinyint(1) NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(10) unsigned NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `home_page` tinyint(1) NOT NULL,
  `featured` tinyint(1) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `videos_created_by_foreign` (`created_by`),
  CONSTRAINT `videos_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videos`
--

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` VALUES (1,'No Way Back',1,'//www.youtube.com/embed/KJNCp601wnM',1,'2014-03-25 13:03:43',0,0,'no-way-back'),(2,'In The Way',1,'//www.youtube.com/embed/hgdVmDHM3yE',1,'2013-12-04 17:18:38',0,0,'in-the-way'),(3,'S.O.M.C.',1,'//www.youtube.com/embed/FwKq6dGOIL8',1,'2014-01-14 17:19:28',0,0,'somc'),(4,'In The Way (Gocodes Remix)',1,'//www.youtube.com/embed/3R7IiuN76Gs',1,'2014-03-19 17:20:17',0,0,'in-the-way-gocodes-remix'),(5,'No Way Back (Live in The Natural Cut)',1,'//www.youtube.com/embed/pP81ytWxf0U',1,'2014-04-19 16:21:01',0,0,'no-way-back-live-in-the-natural-cut'),(6,'In The Way (Live at the Natural Cut Dublin)',1,'//www.youtube.com/embed/GUKMCZL9Hro',1,'2014-05-14 16:21:01',0,0,'in-the-way-live-in-the-natural-cut'),(7,'S.O.M.C. (Live at The Natural Cut Dublin)',1,'//www.youtube.com/embed/kBh87xpdaG4',1,'2014-05-14 16:22:01',0,0,'somc-live-in-the-natural-cut'),(8,'Rigormortis (Live at The Natural Cut Dublin)',1,'//www.youtube.com/embed/BPaTZe1_4mM',1,'2014-05-14 16:24:01',0,0,'rigor-mortis-live-in-the-natural-cut'),(9,'Shame',1,'//www.youtube.com/embed/Z-9lbeErB1k',1,'2014-06-20 08:33:23',1,1,'shame');
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `image_galleries_images`
--

DROP TABLE IF EXISTS `image_galleries_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `image_galleries_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image_gallery_id` int(10) unsigned NOT NULL,
  `image_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `image_galleries_images_image_gallery_id_foreign` (`image_gallery_id`),
  KEY `image_galleries_images_image_id_foreign` (`image_id`),
  CONSTRAINT `image_galleries_images_image_gallery_id_foreign` FOREIGN KEY (`image_gallery_id`) REFERENCES `image_galleries` (`id`),
  CONSTRAINT `image_galleries_images_image_id_foreign` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image_galleries_images`
--

LOCK TABLES `image_galleries_images` WRITE;
/*!40000 ALTER TABLE `image_galleries_images` DISABLE KEYS */;
INSERT INTO `image_galleries_images` VALUES (1,7,11,'2014-07-22 14:40:08','2014-07-22 14:40:08'),(2,2,12,'2014-07-22 14:42:49','2014-07-22 14:42:49'),(3,7,13,'2014-07-22 14:45:32','2014-07-22 14:45:32'),(4,1,14,'2014-07-22 14:46:43','2014-07-22 14:46:43'),(5,1,15,'2014-07-22 14:46:55','2014-07-22 14:46:55'),(6,1,16,'2014-07-22 14:47:13','2014-07-22 14:47:13'),(7,5,17,'2014-07-22 14:47:30','2014-07-22 14:47:30'),(8,5,18,'2014-07-22 14:47:41','2014-07-22 14:47:41'),(9,5,19,'2014-07-22 14:48:15','2014-07-22 14:48:15'),(10,7,20,'2014-07-22 14:48:37','2014-07-22 14:48:37'),(11,2,21,'2014-07-22 14:50:22','2014-07-22 14:50:22'),(12,2,22,'2014-07-22 14:50:45','2014-07-22 14:50:45'),(13,2,23,'2014-07-22 14:51:29','2014-07-22 14:51:29'),(14,5,24,'2014-07-22 14:51:54','2014-07-22 14:51:54'),(15,5,25,'2014-07-22 14:52:15','2014-07-22 14:52:15'),(16,5,26,'2014-07-22 14:52:34','2014-07-22 14:52:34'),(17,6,27,'2014-07-22 14:53:31','2014-07-22 14:53:31'),(18,6,28,'2014-07-22 14:53:53','2014-07-22 14:53:53'),(19,6,29,'2014-07-22 14:54:15','2014-07-22 14:54:15'),(20,6,30,'2014-07-22 14:54:45','2014-07-22 14:54:45'),(21,6,31,'2014-07-22 14:55:01','2014-07-22 14:55:01');
/*!40000 ALTER TABLE `image_galleries_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `image_id` int(10) unsigned NOT NULL,
  `created_by` int(10) unsigned NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `post_category_id` int(10) unsigned NOT NULL,
  `home_page` tinyint(1) NOT NULL,
  `featured` tinyint(1) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_created_by_foreign` (`created_by`),
  KEY `posts_post_category_id_foreign` (`post_category_id`),
  CONSTRAINT `posts_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  CONSTRAINT `posts_post_category_id_foreign` FOREIGN KEY (`post_category_id`) REFERENCES `post_categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'Who Are Rat Neck?','Rat Neck are a four-piece from Dublin, Influenced by old school noise. They have just put out their first E.P. available in Tower Records and bandcamp.com<br />They\'re currently gigging their new set and it\'s going down a storm!<br />For press and bookings please contact <a href=\"email:info@ratneck.com\">info@ratneck.com</a>',11,1,'2014-04-01 17:44:06',1,0,1,'who-are-rat-neck'),(4,'Head-Banger Reviews','Another great review, this time from <a href=\"http://headbangerreviews.wordpress.com/2014/05/14/rat-neck-band-2/\" target=\"_blank\">Head-Banger Reviews </a>. Light the fuse! Thanks for a great review, we can\'t complain about being compared with one of the greats! Stay tuned for gig news.<br /> CRUSH IT!!',9,1,'2014-05-14 15:48:31',2,1,0,'head-banger-reviews'),(5,'No Way Back','Metal Ireland have <a href=\"http://www.metalireland.com/2014/04/29/rat-neck-no-way-back/\" target=\"_blank\">reviewed</a> our debut EP No Way Back. We think they like it anyway so we\'re quite happy with that!',10,1,'2014-04-29 13:22:08',2,1,0,'no-way-back'),(6,'Natural Cut Gig','Check out this great review from <a href=\"http://ilovesaturday.ie/rat-neck-chainsaw-punk/\" target=\"_blank\">ilovesaturday.ie</a> I think you\'ll agree it\'s a pretty positive write up! Chainsaw Rock? Post punk apolcalype? That\'s Rat Neck!',12,1,'2014-04-05 23:14:19',2,1,0,'natural-cut-gig'),(7,'Rat Neck on 2XM','We\'ve hit the radio on <a href=\"http://www.rte.ie/radio/utils/radioplayer/rteradioweb.html#!rii=18%3A10283535%3A10339%3A22%2D05%2D2014%3A\" target=\"_blank\">Dan Hegarty\'s The Alternative</a> on RTE 2XM and 2FM. Both In The Way and No Way Back have been featured! Stay tuned for more...',8,1,'2014-05-31 11:47:05',1,1,0,'rat_neck_rte_2xm');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_04_21_165018_create_roles_table',1),('2014_04_21_165137_create_users_table',1),('2014_04_21_165941_create_music_table',2),('2014_04_21_172218_create_post_categories_table',3),('2014_04_21_172449_create_posts_table',4),('2014_04_21_173123_create_images_table',5),('2014_04_21_173923_create_posts_fk',6),('2014_04_26_114759_create_videos_table',7),('2014_04_27_133720_create_image_galleries_table',8),('2014_04_27_135050_create_image_galleries_images_table',9),('2014_05_16_135313_add_flags_to_posts_table',10),('2014_05_16_150812_add_flags_to_site_item_tables',10),('2014_05_17_230032_add_alias_to_users',11),('2014_05_18_123107_add_url_slugs',12),('2014_05_31_101626_create_carousel_table',13),('2014_06_30_145738_add_remember_me_token',13),('2014_07_02_112407_add_timestamps_to_users_table',14),('2014_07_03_152350_add_active_flag_to_image_galleries',15),('2014_07_07_101209_add_timestamps_to_images',16),('2014_07_07_160357_add_image_description',17),('2014_07_09_100008_add_timestamps_to_carousel',18),('2014_07_09_102507_add_token_and_active_flag_to_users',19),('2014_07_22_155838_add_verified_to_users',20);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `music`
--

DROP TABLE IF EXISTS `music`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `music` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `embedded` tinyint(1) NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(10) unsigned NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `home_page` tinyint(1) NOT NULL,
  `featured` tinyint(1) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `music_created_by_foreign` (`created_by`),
  CONSTRAINT `music_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `music`
--

LOCK TABLES `music` WRITE;
/*!40000 ALTER TABLE `music` DISABLE KEYS */;
INSERT INTO `music` VALUES (1,'No Way Back',1,'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/140431498&amp;auto_play=false&amp;hide_related=false&amp;visual=true',1,'2014-04-21 17:12:18',1,1,'no-way-back'),(2,'S.O.M.C.',1,'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/122943531&amp;auto_play=false&amp;hide_related=false&amp;visual=true',1,'2014-04-21 17:12:55',0,0,'S-O-M-C'),(3,'Rohypnol',1,'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/141600672&amp;auto_play=false&amp;hide_related=false&amp;visual=true',1,'2014-05-06 00:49:27',0,0,'rohypnol'),(4,'In The Way',1,'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/122942905&amp;auto_play=false&amp;hide_related=false&amp;visual=true',1,'2014-05-06 09:30:40',0,0,'in-the-way'),(5,'In The Way (Gocodes Remix)',1,'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/137935441&amp;auto_play=false&amp;hide_related=false&amp;visual=true',1,'2014-05-06 09:33:01',0,0,'in-the-way-gocodes-remix');
/*!40000 ALTER TABLE `music` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Anonymous','');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carousel`
--

DROP TABLE IF EXISTS `carousel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carousel` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `carousel_image_id_foreign` (`image_id`),
  CONSTRAINT `carousel_image_id_foreign` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carousel`
--

LOCK TABLES `carousel` WRITE;
/*!40000 ALTER TABLE `carousel` DISABLE KEYS */;
INSERT INTO `carousel` VALUES (1,1,'2014-07-22 10:16:45','2014-07-22 10:16:45'),(2,2,'2014-07-22 10:17:41','2014-07-22 10:17:41'),(3,3,'2014-07-22 10:17:52','2014-07-22 10:17:52'),(4,4,'2014-07-22 10:18:30','2014-07-22 10:18:30'),(5,5,'2014-07-22 10:18:47','2014-07-22 10:18:47'),(6,6,'2014-07-22 10:19:00','2014-07-22 10:19:00'),(7,7,'2014-07-22 10:19:13','2014-07-22 10:19:13');
/*!40000 ALTER TABLE `carousel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail_id` int(10) unsigned NOT NULL,
  `created_by` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `images_thumbnail_id_foreign` (`thumbnail_id`),
  KEY `images_created_by_foreign` (`created_by`),
  CONSTRAINT `images_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  CONSTRAINT `images_thumbnail_id_foreign` FOREIGN KEY (`thumbnail_id`) REFERENCES `thumbnails` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,'header_1_1406027804.jpg',1,1,'2014-07-22 10:16:45','2014-07-22 10:16:45','New EP Bandcamp'),(2,'header_2_1406027861.jpg',2,1,'2014-07-22 10:17:41','2014-07-22 10:17:41','Live Montage'),(3,'header_3_1406027872.jpg',3,1,'2014-07-22 10:17:52','2014-07-22 10:17:52','Heads'),(4,'header_4_1406027909.jpg',4,1,'2014-07-22 10:18:30','2014-07-22 10:18:30','Zombie'),(5,'header_5_1406027927.jpg',5,1,'2014-07-22 10:18:47','2014-07-22 10:18:47','Zombie'),(6,'header_6_1406027940.jpg',6,1,'2014-07-22 10:19:00','2014-07-22 10:19:00','In The Way'),(7,'header_7_1406027953.jpg',7,1,'2014-07-22 10:19:13','2014-07-22 10:19:13','Rohypnol'),(8,'xfm_1406043241.png',8,1,'2014-07-22 14:34:02','2014-07-22 14:34:02','2XM'),(9,'head_banger_1406043262.jpg',9,1,'2014-07-22 14:34:22','2014-07-22 14:34:22','Headbanger Reviews'),(10,'metal_ireland_logo_1406043298.gif',10,1,'2014-07-22 14:34:58','2014-07-22 14:34:58','Metal Ireland logo'),(11,'band_with_van_1406043606.jpg',11,1,'2014-07-22 14:40:08','2014-07-22 14:40:08','Band with van'),(12,'natural_cut_2_1406043768.jpg',12,1,'2014-07-22 14:42:49','2014-07-22 14:42:49','Live at The Natural Cut'),(13,'camelot_4_1406043932.jpg',13,1,'2014-07-22 14:45:32','2014-07-22 14:45:32','Taking a break in Camelot'),(14,'fibbers_1_1406044003.jpg',14,1,'2014-07-22 14:46:43','2014-07-22 14:46:43','Lasers in Fibbers'),(15,'fibbers_2_1406044015.jpg',15,1,'2014-07-22 14:46:55','2014-07-22 14:46:55','Calm before the storm'),(16,'fibbers_peter_1_1406044032.jpg',16,1,'2014-07-22 14:47:13','2014-07-22 14:47:13','Striking a chord'),(17,'in_the_way_cover_1406044050.jpg',17,1,'2014-07-22 14:47:30','2014-07-22 14:47:30','In The Way cover art'),(18,'in_the_way_gocodes_1406044061.jpg',18,1,'2014-07-22 14:47:41','2014-07-22 14:47:41','In The Way Gocodes cover art'),(19,'logo_1406044094.jpg',19,1,'2014-07-22 14:48:15','2014-07-22 14:48:15','Official Rat Neck logo'),(20,'natural_cut_1_1406044117.jpg',20,1,'2014-07-22 14:48:37','2014-07-22 14:48:37','Chilling at The Natural Cut'),(21,'natural_cut_3_1406044222.jpg',21,1,'2014-07-22 14:50:22','2014-07-22 14:50:22','Live at The Natural Cut'),(22,'natural_cut_4_1406044245.jpg',22,1,'2014-07-22 14:50:45','2014-07-22 14:50:45','Natural Cut stage'),(23,'natural_cut_wide_1_1406044289.jpg',23,1,'2014-07-22 14:51:29','2014-07-22 14:51:29','Natural Cut stage wide shot'),(24,'no_way_back_cover_1406044314.jpg',24,1,'2014-07-22 14:51:54','2014-07-22 14:51:54','No Way Back cover art'),(25,'rohypnol_cover_1406044335.jpg',25,1,'2014-07-22 14:52:15','2014-07-22 14:52:15','Rohypnol cover art'),(26,'somc_cover_1406044354.jpg',26,1,'2014-07-22 14:52:34','2014-07-22 14:52:34','SOMC cover art'),(27,'westland_1_1406044411.jpg',27,1,'2014-07-22 14:53:31','2014-07-22 14:53:31','Drum test Westland Studios'),(28,'westland_2_1406044433.jpg',28,1,'2014-07-22 14:53:53','2014-07-22 14:53:53','Vinny recording'),(29,'westland_3_1406044455.jpg',29,1,'2014-07-22 14:54:15','2014-07-22 14:54:15','Pa recording'),(30,'westland_4_1406044485.jpg',30,1,'2014-07-22 14:54:45','2014-07-22 14:54:45','More coffee please'),(31,'westland_5_1406044501.jpg',31,1,'2014-07-22 14:55:01','2014-07-22 14:55:01','Olly at the controls');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `image_galleries`
--

DROP TABLE IF EXISTS `image_galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `image_galleries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(10) unsigned NOT NULL,
  `home_page` tinyint(1) NOT NULL,
  `featured` tinyint(1) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `image_galleries_created_by_foreign` (`created_by`),
  CONSTRAINT `image_galleries_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image_galleries`
--

LOCK TABLES `image_galleries` WRITE;
/*!40000 ALTER TABLE `image_galleries` DISABLE KEYS */;
INSERT INTO `image_galleries` VALUES (1,'Live at Fibbers',1,0,0,'live-at-fibbers',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'Live at The Natural Cut',1,0,0,'live-at-the-natural-cut',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,'Camelot Studio',1,0,0,'camelot-studio',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(4,'Troubador Studio',1,0,0,'troubador-studio',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(5,'Artwork',1,0,0,'artwork',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(6,'Westland Studio',1,0,0,'westland-studio',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(7,'Band Shots',1,0,0,'band-shots',1,'0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `image_galleries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_categories`
--

DROP TABLE IF EXISTS `post_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_categories`
--

LOCK TABLES `post_categories` WRITE;
/*!40000 ALTER TABLE `post_categories` DISABLE KEYS */;
INSERT INTO `post_categories` VALUES (1,'News'),(2,'Review');
/*!40000 ALTER TABLE `post_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `second_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `signup_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'info@ratneck.com','Peter','Keating',1,'','$2y$10$vvp6zQfLwLdkIbGjmqChEevQKO0KagBN0FnRqENxdnzCe.OIF7eJO','Rat Neck',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00',1,'',0),(2,'peter.keating.ie@gmail.com','Peter','Keating',1,'','$2y$10$DeLHiLp28gI0rM2ivTDqpeppJZyN6nq0DFIboWmkLbJoEE8z9b1fW','Panther',NULL,'2014-07-22 15:05:53','2014-07-22 15:06:07',0,'d3fbc6912f5d8c7646264e51d2fae393',1);
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

-- Dump completed on 2014-07-22 17:07:50
