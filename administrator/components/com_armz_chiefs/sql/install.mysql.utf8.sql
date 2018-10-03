CREATE TABLE IF NOT EXISTS `#__armz_chiefs` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,

`ordering` INT(11)  NOT NULL ,
`state` TINYINT(1)  NOT NULL ,
`checked_out` INT(11)  NOT NULL ,
`checked_out_time` DATETIME NOT NULL ,
`created_by` INT(11)  NOT NULL ,
`modified_by` INT(11)  NOT NULL ,
`name` VARCHAR(255)  NOT NULL ,
`name2` VARCHAR(255)  NOT NULL ,
`lastname` VARCHAR(255)  NOT NULL ,
`charge` VARCHAR(255)  NOT NULL ,
`pic` TEXT NOT NULL ,
`resume` TEXT NOT NULL ,
PRIMARY KEY (`id`)
) DEFAULT COLLATE=utf8mb4_unicode_ci;

