/*
SQLyog Ultimate v11.25 (64 bit)
MySQL - 5.7.26 : Database - laravel
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `phone` varchar(200) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `admin` */

insert  into `admin`(`id`,`phone`,`username`,`email`,`created_at`,`updated_at`,`password`) values (1,'1593344','admin',NULL,'2022-02-23 14:26:15','2022-02-23 14:26:15','123456'),(2,'1593344','admin3','123@admin.com','2022-02-23 14:26:46','2022-02-23 14:29:42','131313'),(3,'1594455','admin2','admin2@163.com','2022-02-23 14:32:18','2022-02-23 14:45:19','111222'),(4,'1592255','test','test@qq.com','2022-02-23 15:19:45','2022-02-23 15:19:45','1234566');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (16,'2014_10_12_000000_create_users_table',1),(17,'2014_10_12_100000_create_password_resets_table',1),(18,'2019_08_19_000000_create_failed_jobs_table',1),(19,'2019_12_14_000001_create_personal_access_tokens_table',1),(20,'2022_01_17_155118_create_tests_table',1),(21,'2022_02_23_094733_create_admin_table',1),(22,'2022_02_23_142432_add_password_to_admin_table',2),(25,'2022_02_23_152728_alter_admin_table',3),(26,'2022_02_23_162339_create_posts_table',4),(27,'2022_02_23_164431_create_asd_table',5),(30,'2022_02_23_171815_alter_posts_tabl',6),(31,'2022_02_24_085045_create_lc_table',7),(35,'2022_02_24_091400_create_test_table',8),(36,'2022_03_01_091156_create_news_table',8),(37,'2022_03_01_092112_alter_news_table',9),(38,'2022_03_09_100411_add_news_status_to_news_table',10),(39,'2022_03_10_085448_create_news_area_table',11);

/*Table structure for table `news` */

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(200) DEFAULT NULL,
  `news_auth` varchar(50) DEFAULT NULL,
  `news_content` text,
  `news_status` varchar(10) NOT NULL DEFAULT '1',
  `news_time` date NOT NULL DEFAULT '2022-03-01',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `news` */

insert  into `news`(`id`,`news_title`,`news_auth`,`news_content`,`news_status`,`news_time`,`created_at`,`updated_at`) values (1,'明天周日','小韩','今天终于周日了。','1','2022-03-01','2022-03-14 11:33:42','2022-03-29 11:34:03'),(2,'今日天气晴好','小刘',NULL,'1','2022-03-01','2022-03-14 11:33:50','2022-03-29 11:34:00'),(3,'俄乌战争','普京','俄罗斯被多方制裁。','0','2022-03-03','2022-03-14 11:33:51','2022-03-08 11:33:58'),(4,'啥时候放假','小韩','小韩啥时候才能放假','1','2022-04-10','2022-03-14 11:33:53','2022-03-08 11:33:55'),(5,'今日天气晴好','小刘','石家庄今日晴空万里。','0','2022-03-16','2022-03-14 15:28:44','2022-03-14 15:28:49'),(6,'提倡大家应关爱牙齿','普京','提倡大家应该关爱牙齿，及早治疗','0','2022-03-17','2022-03-14 15:28:51','2022-03-14 15:28:57'),(7,'测试','测试',NULL,'1','2021-04-16','2022-03-14 15:28:58','2022-03-14 15:29:00');

/*Table structure for table `news_area` */

DROP TABLE IF EXISTS `news_area`;

CREATE TABLE `news_area` (
  `news_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `news_area` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `news_id2` int(11) DEFAULT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `news_area` */

insert  into `news_area`(`news_id`,`news_area`,`created_at`,`updated_at`,`news_id2`) values (1,'谈固',NULL,NULL,NULL),(2,'石家庄',NULL,NULL,2),(3,'俄罗斯',NULL,NULL,2),(4,'白佛',NULL,NULL,2),(5,'谈固',NULL,NULL,6),(6,'俄罗斯',NULL,NULL,6),(10,'牙科医院',NULL,NULL,6);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `password_resets` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `test` */

DROP TABLE IF EXISTS `test`;

CREATE TABLE `test` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `sex` varchar(3) DEFAULT NULL,
  `class` varchar(30) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `test` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
