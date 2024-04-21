DROP TABLE IF EXISTS `festival_sponsor`;

CREATE TABLE `festival_sponsor` (
    `festival_sponsor_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `festival_sponsor_active` BOOLEAN NOT NULL DEFAULT true,
    `festival_sponsor_name` VARCHAR(255) NOT NULL,
    `festival_sponsor_image` VARCHAR(255) NULL,
    `festival_sponsor_link` VARCHAR(255) NULL,
    `festival_sponsor_sorting_weight` INT not null default 0,

    PRIMARY KEY (`festival_sponsor_id`),
    INDEX `festival_sponsor_active_ix` (`festival_sponsor_active` ASC),
    UNIQUE INDEX `festival_sponsor_name_uq` (`festival_sponsor_name` ASC)
) ENGINE=InnoDB;

CREATE TABLE `festival_stage` (
    `festival_stage_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `festival_stage_active` BOOLEAN NOT NULL DEFAULT true,
    `festival_stage_name` VARCHAR(255) NOT NULL,
    `festival_stage_sorting_weight` INT not null default 0,

    PRIMARY KEY (`festival_stage_id`),
    INDEX `festival_stage_active_ix` (`festival_stage_active` ASC),
    UNIQUE INDEX `festival_stage_name_uq` (`festival_stage_name` ASC)
) ENGINE=InnoDB;

DROP TABLE IF EXISTS `festival_artist`;

CREATE TABLE `festival_artist` (
    `festival_artist_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `festival_artist_stage_id` INT UNSIGNED NOT NULL,
    `festival_artist_active` BOOLEAN NOT NULL DEFAULT true,
    `festival_artist_name` VARCHAR(255) NOT NULL,
    `festival_artist_secondary_name` VARCHAR(255) NULL,
    `festival_artist_image` VARCHAR(255) NULL,
    `festival_artist_description` text NULL,
    `festival_artist_link_youtube` VARCHAR(255) NULL,
    `festival_artist_link_instagram` VARCHAR(255) NULL,
    `festival_artist_link_facebook` VARCHAR(255) NULL,
    `festival_artist_link_web` VARCHAR(255) NULL,
    `festival_artist_program_time` VARCHAR(255) NULL,
    `festival_artist_show_in_program` BOOLEAN NOT NULL DEFAULT true,
    `festival_artist_show_in_details` BOOLEAN NOT NULL DEFAULT true,
    `festival_artist_show_in_other` BOOLEAN NOT NULL DEFAULT false,
    `festival_artist_sorting_weight` INT not null default 0,
    `festival_artist_program_sorting_weight` INT not null default 0,

    PRIMARY KEY (`festival_artist_id`),
    CONSTRAINT `festival_artist_stage_fk`
        FOREIGN KEY (`festival_artist_stage_id`)
        REFERENCES `festival_stage` (`festival_stage_id`),
    INDEX `festival_artist_stage_ix` (`festival_artist_active`, `festival_artist_stage_id` ASC),
    UNIQUE INDEX `festival_artist_name_uq` (`festival_artist_name` ASC)
) ENGINE=InnoDB;

DROP VIEW IF EXISTS `viewFestivalArtists`;

CREATE VIEW viewFestivalArtists AS
SELECT *
FROM festival_artist fa
LEFT OUTER JOIN festival_stage fs ON (fa.festival_artist_stage_id = fs.festival_stage_id);
