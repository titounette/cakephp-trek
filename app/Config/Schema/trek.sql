# ************************************************************
# Sequel Pro SQL dump
# Version 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.1.44)
# Database: trek
# Generation Time: 2013-01-25 10:04:43 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table comments_guide
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comments_guide`;

CREATE TABLE `comments_guide` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `message` longtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table comments_journey
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comments_journey`;

CREATE TABLE `comments_journey` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `message` longtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table comments_track
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comments_track`;

CREATE TABLE `comments_track` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `message` longtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table guide_submission
# ------------------------------------------------------------

DROP TABLE IF EXISTS `guide_submission`;

CREATE TABLE `guide_submission` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `resume` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table guides
# ------------------------------------------------------------

DROP TABLE IF EXISTS `guides`;

CREATE TABLE `guides` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `languages` varchar(200) DEFAULT NULL,
  `nationality` varchar(30) DEFAULT NULL,
  `tk_organized` int(5) DEFAULT NULL,
  `diplome` varchar(1000) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `picture` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table journeys
# ------------------------------------------------------------

DROP TABLE IF EXISTS `journeys`;

CREATE TABLE `journeys` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `creation` date DEFAULT NULL,
  `max` int(11) DEFAULT NULL,
  `creator_id` int(11) DEFAULT NULL,
  `zone_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table rate_guide
# ------------------------------------------------------------

DROP TABLE IF EXISTS `rate_guide`;

CREATE TABLE `rate_guide` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `rate` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table rate_journey
# ------------------------------------------------------------

DROP TABLE IF EXISTS `rate_journey`;

CREATE TABLE `rate_journey` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `rate` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table rate_track
# ------------------------------------------------------------

DROP TABLE IF EXISTS `rate_track`;

CREATE TABLE `rate_track` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `rate` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table tourists
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tourists`;

CREATE TABLE `tourists` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `nationality` varchar(30) DEFAULT NULL,
  `level` int(10) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `picture` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table tracks
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tracks`;

CREATE TABLE `tracks` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `journey_id` int(11) DEFAULT NULL,
  `long` int(11) DEFAULT NULL,
  `creator_id` int(11) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table zones
# ------------------------------------------------------------

DROP TABLE IF EXISTS `zones`;

CREATE TABLE `zones` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
