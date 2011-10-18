SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `cms` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `cms` ;

-- -----------------------------------------------------
-- Table `cms`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cms`.`users` ;

CREATE  TABLE IF NOT EXISTS `cms`.`users` (
  `id` INT UNSIGNED NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NULL ,
  `surname` VARCHAR(45) NULL ,
  `email` VARCHAR(255) NULL ,
  `passwd` VARCHAR(255) NULL ,
  `created` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ,
  `active` TINYINT(1)  NULL DEFAULT 0 ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE UNIQUE INDEX `email_UNIQUE` ON `cms`.`users` (`email` ASC) ;


-- -----------------------------------------------------
-- Table `cms`.`static_pages`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cms`.`static_pages` ;

CREATE  TABLE IF NOT EXISTS `cms`.`static_pages` (
  `id` INT UNSIGNED NULL AUTO_INCREMENT ,
  `title` VARCHAR(120) NULL ,
  `seo_url` VARCHAR(120) NULL ,
  `keywords` VARCHAR(255) NULL ,
  `description` TEXT NULL ,
  `content` LONGTEXT NULL ,
  `created` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ,
  `active` TINYINT(1)  NULL DEFAULT 0 ,
  `order` INT UNSIGNED NULL ,
  `users_id` INT UNSIGNED NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_static_pages_users1`
    FOREIGN KEY (`users_id` )
    REFERENCES `cms`.`users` (`id` )
    ON DELETE SET NULL
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE UNIQUE INDEX `seo_url_UNIQUE` ON `cms`.`static_pages` (`seo_url` ASC) ;

CREATE INDEX `fk_static_pages_users1` ON `cms`.`static_pages` (`users_id` ASC) ;


-- -----------------------------------------------------
-- Table `cms`.`categories`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cms`.`categories` ;

CREATE  TABLE IF NOT EXISTS `cms`.`categories` (
  `id` INT UNSIGNED NULL AUTO_INCREMENT ,
  `title` VARCHAR(120) NULL ,
  `seo_url` VARCHAR(120) NULL ,
  `keywords` VARCHAR(255) NULL ,
  `description` TEXT NULL ,
  `active` TINYINT(1)  NULL DEFAULT 0 ,
  `order` INT UNSIGNED NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE UNIQUE INDEX `seo_url_UNIQUE` ON `cms`.`categories` (`seo_url` ASC) ;


-- -----------------------------------------------------
-- Table `cms`.`file_types`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cms`.`file_types` ;

CREATE  TABLE IF NOT EXISTS `cms`.`file_types` (
  `id` INT UNSIGNED NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NULL ,
  `mime_type` VARCHAR(120) NULL ,
  `ext` VARCHAR(255) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `cms`.`uploaded_files`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cms`.`uploaded_files` ;

CREATE  TABLE IF NOT EXISTS `cms`.`uploaded_files` (
  `id` INT UNSIGNED NULL AUTO_INCREMENT ,
  `title` VARCHAR(120) NULL ,
  `description` TEXT NULL ,
  `filename` VARCHAR(255) NULL ,
  `created` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ,
  `active` TINYINT(1)  NULL DEFAULT 0 ,
  `comments` TINYINT(1)  NULL DEFAULT 0 ,
  `users_id` INT UNSIGNED NULL ,
  `file_types_id` INT UNSIGNED NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_files_users1`
    FOREIGN KEY (`users_id` )
    REFERENCES `cms`.`users` (`id` )
    ON DELETE SET NULL
    ON UPDATE CASCADE,
  CONSTRAINT `fk_uploaded_files_file_types1`
    FOREIGN KEY (`file_types_id` )
    REFERENCES `cms`.`file_types` (`id` )
    ON DELETE SET NULL
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE UNIQUE INDEX `filename_UNIQUE` ON `cms`.`uploaded_files` (`filename` ASC) ;

CREATE INDEX `fk_files_users1` ON `cms`.`uploaded_files` (`users_id` ASC) ;

CREATE INDEX `fk_uploaded_files_file_types1` ON `cms`.`uploaded_files` (`file_types_id` ASC) ;


-- -----------------------------------------------------
-- Table `cms`.`articles`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cms`.`articles` ;

CREATE  TABLE IF NOT EXISTS `cms`.`articles` (
  `id` INT UNSIGNED NULL AUTO_INCREMENT ,
  `title` VARCHAR(120) NULL ,
  `seo_url` VARCHAR(120) NULL ,
  `keywords` VARCHAR(255) NULL ,
  `description` TEXT NULL ,
  `content` LONGTEXT NULL ,
  `created` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ,
  `active` TINYINT(1)  NULL DEFAULT 0 ,
  `comments` TINYINT(1)  NULL DEFAULT 0 ,
  `categories_id` INT UNSIGNED NULL ,
  `uploaded_files_id` INT UNSIGNED NULL ,
  `users_id` INT UNSIGNED NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_articles_categories`
    FOREIGN KEY (`categories_id` )
    REFERENCES `cms`.`categories` (`id` )
    ON DELETE SET NULL
    ON UPDATE CASCADE,
  CONSTRAINT `fk_articles_files1`
    FOREIGN KEY (`uploaded_files_id` )
    REFERENCES `cms`.`uploaded_files` (`id` )
    ON DELETE SET NULL
    ON UPDATE CASCADE,
  CONSTRAINT `fk_articles_users1`
    FOREIGN KEY (`users_id` )
    REFERENCES `cms`.`users` (`id` )
    ON DELETE SET NULL
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE INDEX `fk_articles_categories` ON `cms`.`articles` (`categories_id` ASC) ;

CREATE INDEX `fk_articles_files1` ON `cms`.`articles` (`uploaded_files_id` ASC) ;

CREATE UNIQUE INDEX `seo_url_UNIQUE` ON `cms`.`articles` (`seo_url` ASC) ;

CREATE INDEX `fk_articles_users1` ON `cms`.`articles` (`users_id` ASC) ;


-- -----------------------------------------------------
-- Table `cms`.`comments`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cms`.`comments` ;

CREATE  TABLE IF NOT EXISTS `cms`.`comments` (
  `id` INT UNSIGNED NULL AUTO_INCREMENT ,
  `title` VARCHAR(45) NULL ,
  `content` LONGTEXT NULL ,
  `created` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ,
  `active` INT UNSIGNED NULL DEFAULT 0 ,
  `users_id` INT UNSIGNED NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_comments_users1`
    FOREIGN KEY (`users_id` )
    REFERENCES `cms`.`users` (`id` )
    ON DELETE SET NULL
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE INDEX `fk_comments_users1` ON `cms`.`comments` (`users_id` ASC) ;


-- -----------------------------------------------------
-- Table `cms`.`galleries`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cms`.`galleries` ;

CREATE  TABLE IF NOT EXISTS `cms`.`galleries` (
  `id` INT UNSIGNED NULL AUTO_INCREMENT ,
  `title` VARCHAR(120) NULL ,
  `seo_url` VARCHAR(120) NULL ,
  `keywords` VARCHAR(255) NULL ,
  `description` TEXT NULL ,
  `created` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ,
  `active` TINYINT(1)  NULL DEFAULT 0 ,
  `comments` TINYINT(1)  NULL DEFAULT 0 ,
  `categories_id` INT UNSIGNED NULL ,
  `users_id` INT UNSIGNED NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_galleries_categories1`
    FOREIGN KEY (`categories_id` )
    REFERENCES `cms`.`categories` (`id` )
    ON DELETE SET NULL
    ON UPDATE CASCADE,
  CONSTRAINT `fk_galleries_users1`
    FOREIGN KEY (`users_id` )
    REFERENCES `cms`.`users` (`id` )
    ON DELETE SET NULL
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE INDEX `fk_galleries_categories1` ON `cms`.`galleries` (`categories_id` ASC) ;

CREATE UNIQUE INDEX `seo_url_UNIQUE` ON `cms`.`galleries` (`seo_url` ASC) ;

CREATE INDEX `fk_galleries_users1` ON `cms`.`galleries` (`users_id` ASC) ;


-- -----------------------------------------------------
-- Table `cms`.`groups`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cms`.`groups` ;

CREATE  TABLE IF NOT EXISTS `cms`.`groups` (
  `id` INT UNSIGNED NULL AUTO_INCREMENT ,
  `name` VARCHAR(120) NULL ,
  `created` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ,
  `active` TINYINT(1)  NULL DEFAULT 0 ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `cms`.`applications`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cms`.`applications` ;

CREATE  TABLE IF NOT EXISTS `cms`.`applications` (
  `id` INT UNSIGNED NULL AUTO_INCREMENT ,
  `name` VARCHAR(120) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE UNIQUE INDEX `name_UNIQUE` ON `cms`.`applications` (`name` ASC) ;


-- -----------------------------------------------------
-- Table `cms`.`access`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cms`.`access` ;

CREATE  TABLE IF NOT EXISTS `cms`.`access` (
  `id` INT UNSIGNED NULL AUTO_INCREMENT ,
  `select` INT UNSIGNED NULL ,
  `create` INT UNSIGNED NULL ,
  `update` INT UNSIGNED NULL ,
  `delete` INT UNSIGNED NULL ,
  `applications_id` INT UNSIGNED NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_access_table11`
    FOREIGN KEY (`applications_id` )
    REFERENCES `cms`.`applications` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE INDEX `fk_access_table11` ON `cms`.`access` (`applications_id` ASC) ;


-- -----------------------------------------------------
-- Table `cms`.`galleries_has_uploaded_files`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cms`.`galleries_has_uploaded_files` ;

CREATE  TABLE IF NOT EXISTS `cms`.`galleries_has_uploaded_files` (
  `galleries_id` INT UNSIGNED NULL ,
  `uploaded_files_id` INT UNSIGNED NULL ,
  PRIMARY KEY (`galleries_id`, `uploaded_files_id`) ,
  CONSTRAINT `fk_galleries_has_files_galleries1`
    FOREIGN KEY (`galleries_id` )
    REFERENCES `cms`.`galleries` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_galleries_has_files_files1`
    FOREIGN KEY (`uploaded_files_id` )
    REFERENCES `cms`.`uploaded_files` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE INDEX `fk_galleries_has_files_files1` ON `cms`.`galleries_has_uploaded_files` (`uploaded_files_id` ASC) ;

CREATE INDEX `fk_galleries_has_files_galleries1` ON `cms`.`galleries_has_uploaded_files` (`galleries_id` ASC) ;


-- -----------------------------------------------------
-- Table `cms`.`articles_has_comments`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cms`.`articles_has_comments` ;

CREATE  TABLE IF NOT EXISTS `cms`.`articles_has_comments` (
  `articles_id` INT UNSIGNED NULL ,
  `comments_id` INT UNSIGNED NULL ,
  PRIMARY KEY (`articles_id`, `comments_id`) ,
  CONSTRAINT `fk_articles_has_comments_articles1`
    FOREIGN KEY (`articles_id` )
    REFERENCES `cms`.`articles` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_articles_has_comments_comments1`
    FOREIGN KEY (`comments_id` )
    REFERENCES `cms`.`comments` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE INDEX `fk_articles_has_comments_comments1` ON `cms`.`articles_has_comments` (`comments_id` ASC) ;

CREATE INDEX `fk_articles_has_comments_articles1` ON `cms`.`articles_has_comments` (`articles_id` ASC) ;


-- -----------------------------------------------------
-- Table `cms`.`galleries_has_comments`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cms`.`galleries_has_comments` ;

CREATE  TABLE IF NOT EXISTS `cms`.`galleries_has_comments` (
  `galleries_id` INT UNSIGNED NULL ,
  `comments_id` INT UNSIGNED NULL ,
  PRIMARY KEY (`galleries_id`, `comments_id`) ,
  CONSTRAINT `fk_galleries_has_comments_galleries1`
    FOREIGN KEY (`galleries_id` )
    REFERENCES `cms`.`galleries` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_galleries_has_comments_comments1`
    FOREIGN KEY (`comments_id` )
    REFERENCES `cms`.`comments` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE INDEX `fk_galleries_has_comments_comments1` ON `cms`.`galleries_has_comments` (`comments_id` ASC) ;

CREATE INDEX `fk_galleries_has_comments_galleries1` ON `cms`.`galleries_has_comments` (`galleries_id` ASC) ;


-- -----------------------------------------------------
-- Table `cms`.`uploaded_files_has_comments`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cms`.`uploaded_files_has_comments` ;

CREATE  TABLE IF NOT EXISTS `cms`.`uploaded_files_has_comments` (
  `uploaded_files_id` INT UNSIGNED NULL ,
  `comments_id` INT UNSIGNED NULL ,
  PRIMARY KEY (`uploaded_files_id`, `comments_id`) ,
  CONSTRAINT `fk_files_has_comments_files1`
    FOREIGN KEY (`uploaded_files_id` )
    REFERENCES `cms`.`uploaded_files` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_files_has_comments_comments1`
    FOREIGN KEY (`comments_id` )
    REFERENCES `cms`.`comments` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE INDEX `fk_files_has_comments_comments1` ON `cms`.`uploaded_files_has_comments` (`comments_id` ASC) ;

CREATE INDEX `fk_files_has_comments_files1` ON `cms`.`uploaded_files_has_comments` (`uploaded_files_id` ASC) ;


-- -----------------------------------------------------
-- Table `cms`.`groups_has_access`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cms`.`groups_has_access` ;

CREATE  TABLE IF NOT EXISTS `cms`.`groups_has_access` (
  `groups_id` INT UNSIGNED NULL ,
  `access_id` INT UNSIGNED NULL ,
  PRIMARY KEY (`groups_id`, `access_id`) ,
  CONSTRAINT `fk_groups_has_access_groups1`
    FOREIGN KEY (`groups_id` )
    REFERENCES `cms`.`groups` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_groups_has_access_access1`
    FOREIGN KEY (`access_id` )
    REFERENCES `cms`.`access` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;

CREATE INDEX `fk_groups_has_access_access1` ON `cms`.`groups_has_access` (`access_id` ASC) ;

CREATE INDEX `fk_groups_has_access_groups1` ON `cms`.`groups_has_access` (`groups_id` ASC) ;


-- -----------------------------------------------------
-- Table `cms`.`users_has_groups`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cms`.`users_has_groups` ;

CREATE  TABLE IF NOT EXISTS `cms`.`users_has_groups` (
  `users_id` INT UNSIGNED NULL ,
  `groups_id` INT UNSIGNED NULL ,
  PRIMARY KEY (`users_id`, `groups_id`) ,
  CONSTRAINT `fk_users_has_groups_users1`
    FOREIGN KEY (`users_id` )
    REFERENCES `cms`.`users` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_users_has_groups_groups1`
    FOREIGN KEY (`groups_id` )
    REFERENCES `cms`.`groups` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE INDEX `fk_users_has_groups_groups1` ON `cms`.`users_has_groups` (`groups_id` ASC) ;

CREATE INDEX `fk_users_has_groups_users1` ON `cms`.`users_has_groups` (`users_id` ASC) ;


-- -----------------------------------------------------
-- Table `cms`.`static_pages_has_uploaded_files`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cms`.`static_pages_has_uploaded_files` ;

CREATE  TABLE IF NOT EXISTS `cms`.`static_pages_has_uploaded_files` (
  `static_pages_id` INT UNSIGNED NOT NULL ,
  `uploaded_files_id` INT UNSIGNED NOT NULL ,
  PRIMARY KEY (`static_pages_id`, `uploaded_files_id`) ,
  CONSTRAINT `fk_static_pages_has_uploaded_files_static_pages1`
    FOREIGN KEY (`static_pages_id` )
    REFERENCES `cms`.`static_pages` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_static_pages_has_uploaded_files_uploaded_files1`
    FOREIGN KEY (`uploaded_files_id` )
    REFERENCES `cms`.`uploaded_files` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE INDEX `fk_static_pages_has_uploaded_files_uploaded_files1` ON `cms`.`static_pages_has_uploaded_files` (`uploaded_files_id` ASC) ;

CREATE INDEX `fk_static_pages_has_uploaded_files_static_pages1` ON `cms`.`static_pages_has_uploaded_files` (`static_pages_id` ASC) ;


-- -----------------------------------------------------
-- Table `cms`.`articles_has_uploaded_files`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cms`.`articles_has_uploaded_files` ;

CREATE  TABLE IF NOT EXISTS `cms`.`articles_has_uploaded_files` (
  `articles_id` INT UNSIGNED NOT NULL ,
  `uploaded_files_id` INT UNSIGNED NOT NULL ,
  PRIMARY KEY (`articles_id`, `uploaded_files_id`) ,
  CONSTRAINT `fk_articles_has_uploaded_files_articles1`
    FOREIGN KEY (`articles_id` )
    REFERENCES `cms`.`articles` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_articles_has_uploaded_files_uploaded_files1`
    FOREIGN KEY (`uploaded_files_id` )
    REFERENCES `cms`.`uploaded_files` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE INDEX `fk_articles_has_uploaded_files_uploaded_files1` ON `cms`.`articles_has_uploaded_files` (`uploaded_files_id` ASC) ;

CREATE INDEX `fk_articles_has_uploaded_files_articles1` ON `cms`.`articles_has_uploaded_files` (`articles_id` ASC) ;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

