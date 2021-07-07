CREATE DATABASE login_sample_db;

CREATE TABLE `login_sample_db`.`users` ( `id` INT(20) NOT NULL AUTO_INCREMENT ,  `user_id` INT(20) NOT NULL ,  `user_name` VARCHAR(100) NOT NULL ,  `password` VARCHAR(100) NOT NULL ,  `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,    PRIMARY KEY  (`id`)) ENGINE = InnoDB;
