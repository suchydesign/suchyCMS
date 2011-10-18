-- phpMyAdmin SQL Dump
-- version 3.4.5deb1
-- http://www.phpmyadmin.net
--
-- Hostiteľ: localhost
-- Vygenerované:: 19.Okt, 2011 - 01:31
-- Verzia serveru: 5.1.58
-- Verzia PHP: 5.3.6-13ubuntu3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databáza: `cms`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `access`
--

DROP TABLE IF EXISTS `access`;
CREATE TABLE IF NOT EXISTS `access` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `select` int(10) unsigned DEFAULT NULL,
  `create` int(10) unsigned DEFAULT NULL,
  `update` int(10) unsigned DEFAULT NULL,
  `delete` int(10) unsigned DEFAULT NULL,
  `update_all` int(10) unsigned DEFAULT NULL,
  `delete_all` int(10) unsigned DEFAULT NULL,
  `groups_id` int(10) unsigned DEFAULT NULL,
  `applications_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_access_table11` (`applications_id`),
  KEY `fk_access_groups1` (`groups_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- PREPOJENIA PRE TABUĽKU `access`:
--   `groups_id`
--       `groups` -> `id`
--   `applications_id`
--       `applications` -> `id`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `applications`
--

DROP TABLE IF EXISTS `applications`;
CREATE TABLE IF NOT EXISTS `applications` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(120) DEFAULT NULL,
  `seo_url` varchar(120) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` text,
  `content` longtext,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(1) DEFAULT '0',
  `comments` tinyint(1) DEFAULT '0',
  `categories_id` int(10) unsigned DEFAULT NULL,
  `uploaded_files_id` int(10) unsigned DEFAULT NULL,
  `users_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `seo_url_UNIQUE` (`seo_url`),
  KEY `fk_articles_categories` (`categories_id`),
  KEY `fk_articles_files1` (`uploaded_files_id`),
  KEY `fk_articles_users1` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- PREPOJENIA PRE TABUĽKU `articles`:
--   `categories_id`
--       `categories` -> `id`
--   `uploaded_files_id`
--       `uploaded_files` -> `id`
--   `users_id`
--       `users` -> `id`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `articles_has_comments`
--

DROP TABLE IF EXISTS `articles_has_comments`;
CREATE TABLE IF NOT EXISTS `articles_has_comments` (
  `articles_id` int(10) unsigned NOT NULL DEFAULT '0',
  `comments_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`articles_id`,`comments_id`),
  KEY `fk_articles_has_comments_comments1` (`comments_id`),
  KEY `fk_articles_has_comments_articles1` (`articles_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- PREPOJENIA PRE TABUĽKU `articles_has_comments`:
--   `articles_id`
--       `articles` -> `id`
--   `comments_id`
--       `comments` -> `id`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `articles_has_uploaded_files`
--

DROP TABLE IF EXISTS `articles_has_uploaded_files`;
CREATE TABLE IF NOT EXISTS `articles_has_uploaded_files` (
  `articles_id` int(10) unsigned NOT NULL,
  `uploaded_files_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`articles_id`,`uploaded_files_id`),
  KEY `fk_articles_has_uploaded_files_uploaded_files1` (`uploaded_files_id`),
  KEY `fk_articles_has_uploaded_files_articles1` (`articles_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- PREPOJENIA PRE TABUĽKU `articles_has_uploaded_files`:
--   `articles_id`
--       `articles` -> `id`
--   `uploaded_files_id`
--       `uploaded_files` -> `id`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(120) DEFAULT NULL,
  `seo_url` varchar(120) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` text,
  `active` tinyint(1) DEFAULT '0',
  `order` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `seo_url_UNIQUE` (`seo_url`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `content` longtext,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `active` int(10) unsigned DEFAULT '0',
  `users_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_comments_users1` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- PREPOJENIA PRE TABUĽKU `comments`:
--   `users_id`
--       `users` -> `id`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `file_types`
--

DROP TABLE IF EXISTS `file_types`;
CREATE TABLE IF NOT EXISTS `file_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `mime_type` varchar(120) DEFAULT NULL,
  `ext` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `galleries`
--

DROP TABLE IF EXISTS `galleries`;
CREATE TABLE IF NOT EXISTS `galleries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(120) DEFAULT NULL,
  `seo_url` varchar(120) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` text,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(1) DEFAULT '0',
  `comments` tinyint(1) DEFAULT '0',
  `categories_id` int(10) unsigned DEFAULT NULL,
  `users_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `seo_url_UNIQUE` (`seo_url`),
  KEY `fk_galleries_categories1` (`categories_id`),
  KEY `fk_galleries_users1` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- PREPOJENIA PRE TABUĽKU `galleries`:
--   `categories_id`
--       `categories` -> `id`
--   `users_id`
--       `users` -> `id`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `galleries_has_comments`
--

DROP TABLE IF EXISTS `galleries_has_comments`;
CREATE TABLE IF NOT EXISTS `galleries_has_comments` (
  `galleries_id` int(10) unsigned NOT NULL DEFAULT '0',
  `comments_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`galleries_id`,`comments_id`),
  KEY `fk_galleries_has_comments_comments1` (`comments_id`),
  KEY `fk_galleries_has_comments_galleries1` (`galleries_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- PREPOJENIA PRE TABUĽKU `galleries_has_comments`:
--   `comments_id`
--       `comments` -> `id`
--   `galleries_id`
--       `galleries` -> `id`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `galleries_has_uploaded_files`
--

DROP TABLE IF EXISTS `galleries_has_uploaded_files`;
CREATE TABLE IF NOT EXISTS `galleries_has_uploaded_files` (
  `galleries_id` int(10) unsigned NOT NULL DEFAULT '0',
  `uploaded_files_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`galleries_id`,`uploaded_files_id`),
  KEY `fk_galleries_has_files_files1` (`uploaded_files_id`),
  KEY `fk_galleries_has_files_galleries1` (`galleries_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- PREPOJENIA PRE TABUĽKU `galleries_has_uploaded_files`:
--   `uploaded_files_id`
--       `uploaded_files` -> `id`
--   `galleries_id`
--       `galleries` -> `id`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `static_pages`
--

DROP TABLE IF EXISTS `static_pages`;
CREATE TABLE IF NOT EXISTS `static_pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(120) DEFAULT NULL,
  `seo_url` varchar(120) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` text,
  `content` longtext,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(1) DEFAULT '0',
  `order` int(10) unsigned DEFAULT NULL,
  `users_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `seo_url_UNIQUE` (`seo_url`),
  KEY `fk_static_pages_users1` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- PREPOJENIA PRE TABUĽKU `static_pages`:
--   `users_id`
--       `users` -> `id`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `static_pages_has_uploaded_files`
--

DROP TABLE IF EXISTS `static_pages_has_uploaded_files`;
CREATE TABLE IF NOT EXISTS `static_pages_has_uploaded_files` (
  `static_pages_id` int(10) unsigned NOT NULL,
  `uploaded_files_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`static_pages_id`,`uploaded_files_id`),
  KEY `fk_static_pages_has_uploaded_files_uploaded_files1` (`uploaded_files_id`),
  KEY `fk_static_pages_has_uploaded_files_static_pages1` (`static_pages_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- PREPOJENIA PRE TABUĽKU `static_pages_has_uploaded_files`:
--   `static_pages_id`
--       `static_pages` -> `id`
--   `uploaded_files_id`
--       `uploaded_files` -> `id`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `uploaded_files`
--

DROP TABLE IF EXISTS `uploaded_files`;
CREATE TABLE IF NOT EXISTS `uploaded_files` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(120) DEFAULT NULL,
  `description` text,
  `filename` varchar(255) DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(1) DEFAULT '0',
  `comments` tinyint(1) DEFAULT '0',
  `users_id` int(10) unsigned DEFAULT NULL,
  `file_types_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `filename_UNIQUE` (`filename`),
  KEY `fk_files_users1` (`users_id`),
  KEY `fk_uploaded_files_file_types1` (`file_types_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- PREPOJENIA PRE TABUĽKU `uploaded_files`:
--   `users_id`
--       `users` -> `id`
--   `file_types_id`
--       `file_types` -> `id`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `uploaded_files_has_comments`
--

DROP TABLE IF EXISTS `uploaded_files_has_comments`;
CREATE TABLE IF NOT EXISTS `uploaded_files_has_comments` (
  `uploaded_files_id` int(10) unsigned NOT NULL DEFAULT '0',
  `comments_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`uploaded_files_id`,`comments_id`),
  KEY `fk_files_has_comments_comments1` (`comments_id`),
  KEY `fk_files_has_comments_files1` (`uploaded_files_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- PREPOJENIA PRE TABUĽKU `uploaded_files_has_comments`:
--   `comments_id`
--       `comments` -> `id`
--   `uploaded_files_id`
--       `uploaded_files` -> `id`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `surname` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `passwd` varchar(255) DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `users_has_groups`
--

DROP TABLE IF EXISTS `users_has_groups`;
CREATE TABLE IF NOT EXISTS `users_has_groups` (
  `users_id` int(10) unsigned NOT NULL DEFAULT '0',
  `groups_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`users_id`,`groups_id`),
  KEY `fk_users_has_groups_groups1` (`groups_id`),
  KEY `fk_users_has_groups_users1` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- PREPOJENIA PRE TABUĽKU `users_has_groups`:
--   `groups_id`
--       `groups` -> `id`
--   `users_id`
--       `users` -> `id`
--

--
-- Obmedzenie pre exportované tabuľky
--

--
-- Obmedzenie pre tabuľku `access`
--
ALTER TABLE `access`
  ADD CONSTRAINT `fk_access_groups1` FOREIGN KEY (`groups_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_access_table11` FOREIGN KEY (`applications_id`) REFERENCES `applications` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Obmedzenie pre tabuľku `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `fk_articles_categories` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_articles_files1` FOREIGN KEY (`uploaded_files_id`) REFERENCES `uploaded_files` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_articles_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Obmedzenie pre tabuľku `articles_has_comments`
--
ALTER TABLE `articles_has_comments`
  ADD CONSTRAINT `fk_articles_has_comments_articles1` FOREIGN KEY (`articles_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_articles_has_comments_comments1` FOREIGN KEY (`comments_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Obmedzenie pre tabuľku `articles_has_uploaded_files`
--
ALTER TABLE `articles_has_uploaded_files`
  ADD CONSTRAINT `fk_articles_has_uploaded_files_articles1` FOREIGN KEY (`articles_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_articles_has_uploaded_files_uploaded_files1` FOREIGN KEY (`uploaded_files_id`) REFERENCES `uploaded_files` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Obmedzenie pre tabuľku `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_comments_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Obmedzenie pre tabuľku `galleries`
--
ALTER TABLE `galleries`
  ADD CONSTRAINT `fk_galleries_categories1` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_galleries_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Obmedzenie pre tabuľku `galleries_has_comments`
--
ALTER TABLE `galleries_has_comments`
  ADD CONSTRAINT `fk_galleries_has_comments_comments1` FOREIGN KEY (`comments_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_galleries_has_comments_galleries1` FOREIGN KEY (`galleries_id`) REFERENCES `galleries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Obmedzenie pre tabuľku `galleries_has_uploaded_files`
--
ALTER TABLE `galleries_has_uploaded_files`
  ADD CONSTRAINT `fk_galleries_has_files_files1` FOREIGN KEY (`uploaded_files_id`) REFERENCES `uploaded_files` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_galleries_has_files_galleries1` FOREIGN KEY (`galleries_id`) REFERENCES `galleries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Obmedzenie pre tabuľku `static_pages`
--
ALTER TABLE `static_pages`
  ADD CONSTRAINT `fk_static_pages_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Obmedzenie pre tabuľku `static_pages_has_uploaded_files`
--
ALTER TABLE `static_pages_has_uploaded_files`
  ADD CONSTRAINT `fk_static_pages_has_uploaded_files_static_pages1` FOREIGN KEY (`static_pages_id`) REFERENCES `static_pages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_static_pages_has_uploaded_files_uploaded_files1` FOREIGN KEY (`uploaded_files_id`) REFERENCES `uploaded_files` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Obmedzenie pre tabuľku `uploaded_files`
--
ALTER TABLE `uploaded_files`
  ADD CONSTRAINT `fk_files_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_uploaded_files_file_types1` FOREIGN KEY (`file_types_id`) REFERENCES `file_types` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Obmedzenie pre tabuľku `uploaded_files_has_comments`
--
ALTER TABLE `uploaded_files_has_comments`
  ADD CONSTRAINT `fk_files_has_comments_comments1` FOREIGN KEY (`comments_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_files_has_comments_files1` FOREIGN KEY (`uploaded_files_id`) REFERENCES `uploaded_files` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Obmedzenie pre tabuľku `users_has_groups`
--
ALTER TABLE `users_has_groups`
  ADD CONSTRAINT `fk_users_has_groups_groups1` FOREIGN KEY (`groups_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_users_has_groups_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
