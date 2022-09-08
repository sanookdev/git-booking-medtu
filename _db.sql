/*
SQLyog Community v13.1.9 (64 bit)
MySQL - 5.7.33 : Database - booking
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`booking` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `booking`;

/*Table structure for table `active_room` */

DROP TABLE IF EXISTS `active_room`;

CREATE TABLE `active_room` (
  `id_active` int(11) NOT NULL AUTO_INCREMENT,
  `id_card_active` int(11) DEFAULT NULL COMMENT 'เลขบัตรผู้จอง',
  `class_no` int(11) DEFAULT NULL COMMENT 'ชั้น',
  `write` tinyint(1) DEFAULT '0' COMMENT 'เขียน',
  `read` tinyint(1) DEFAULT '1' COMMENT 'อ่าน',
  PRIMARY KEY (`id_active`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Table structure for table `building` */

DROP TABLE IF EXISTS `building`;

CREATE TABLE `building` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `building_name` varchar(255) DEFAULT NULL COMMENT 'ตึก',
  `create_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `type` varchar(20) NOT NULL,
  `category_id` int(11) DEFAULT '0',
  `topic` varchar(128) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  KEY `type` (`type`),
  KEY `category_id` (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `class` */

DROP TABLE IF EXISTS `class`;

CREATE TABLE `class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `building_id` int(11) DEFAULT NULL COMMENT 'ไอดีตึก',
  `class_no` int(11) DEFAULT NULL COMMENT 'ไอดีชั้น',
  `create_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `reservation` */

DROP TABLE IF EXISTS `reservation`;

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ไอดี รายการจองห้อง',
  `room_id` int(11) NOT NULL COMMENT 'ไอดี ห้อง',
  `member_id` varchar(13) NOT NULL COMMENT 'เลขบัตรผู้จอง',
  `create_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'วันสร้างคำขอ',
  `topic` varchar(150) DEFAULT NULL COMMENT 'หัวข้อการจอง',
  `comment` mediumtext COMMENT 'รายละเอียดเพิ่มเติม',
  `acs` varchar(255) NOT NULL COMMENT 'อุปกรณ์เสริม',
  `begin` datetime DEFAULT NULL COMMENT 'วัน เวลา เริ่มต้น',
  `end` datetime DEFAULT NULL COMMENT 'วัน เวลา สิ้นสุด',
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0 = รอตรวจสอบ, 1 = อนุญาติ, 2 = ยกเลิก',
  `for` varchar(128) DEFAULT NULL COMMENT 'ใช้สำหรับ',
  `mobile` varchar(20) DEFAULT NULL COMMENT 'เบอร์โทร',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `reservation_data` */

DROP TABLE IF EXISTS `reservation_data`;

CREATE TABLE `reservation_data` (
  `reservation_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `value` varchar(150) NOT NULL,
  KEY `reservation_id` (`reservation_id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

/*Table structure for table `rooms` */

DROP TABLE IF EXISTS `rooms`;

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `create_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(150) NOT NULL COMMENT 'ชื่อห้อง',
  `building_id` int(11) DEFAULT NULL COMMENT 'ตึก',
  `class_no` varchar(255) DEFAULT NULL COMMENT 'ชั้น',
  `detail` mediumtext NOT NULL COMMENT 'รายละเอียดห้อง',
  `color` varchar(20) NOT NULL,
  `published` int(11) NOT NULL DEFAULT '1',
  `date_edit` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `rooms_meta` */

DROP TABLE IF EXISTS `rooms_meta`;

CREATE TABLE `rooms_meta` (
  `room_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `value` varchar(150) NOT NULL,
  KEY `room_id` (`room_id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` tinyint(1) DEFAULT '0',
  `name` varchar(150) NOT NULL,
  `sex` varchar(1) DEFAULT NULL,
  `id_card` varchar(13) DEFAULT NULL,
  `visited` int(11) DEFAULT '0',
  `lastvisited` int(11) DEFAULT '0',
  `session_id` varchar(32) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
