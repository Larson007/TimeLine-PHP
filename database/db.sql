CREATE TABLE `users`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `role` INT NOT NULL
);
CREATE TABLE `timelines`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `title` VARCHAR(255) NOT NULL,
    `description` TEXT NOT NULL,
    `created_at` DATETIME NOT NULL,
    `thumbnail` VARCHAR(255) NOT NULL,
    `date_start` DATETIME NULL,
    `date_end` DATETIME NULL,
    `rating` DECIMAL(8, 2) NULL,
    `validated` INT NULL,
    `user_id` INT NOT NULL,
    `thumbnail_alt` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `timelines` ADD INDEX `timelines_user_id_index`(`user_id`);
CREATE TABLE `tags`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `color` VARCHAR(255) NOT NULL
);
CREATE TABLE `timeline_tag`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `tag_id` INT NOT NULL,
    `timeline_id` INT NOT NULL
);
ALTER TABLE
    `timeline_tag` ADD INDEX `timeline_tag_tag_id_index`(`tag_id`);
ALTER TABLE
    `timeline_tag` ADD INDEX `timeline_tag_timeline_id_index`(`timeline_id`);
CREATE TABLE `events`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `title` VARCHAR(255) NOT NULL,
    `media` VARCHAR(255) NULL,
    `text` TEXT NULL,
    `color` VARCHAR(255) NULL,
    `date_start` DATETIME NOT NULL,
    `date_end` DATETIME NULL,
    `timeline_id` INT NOT NULL
);
CREATE TABLE `tags_details`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `color` VARCHAR(255) NULL,
    `tags_id` INT NOT NULL
);
ALTER TABLE
    `tags_details` ADD INDEX `tags_details_tags_id_index`(`tags_id`);
ALTER TABLE
    `timeline_tag` ADD CONSTRAINT `timeline_tag_tag_id_foreign` FOREIGN KEY(`tag_id`) REFERENCES `tags`(`id`);
ALTER TABLE
    `tags_details` ADD CONSTRAINT `tags_details_tags_id_foreign` FOREIGN KEY(`tags_id`) REFERENCES `tags`(`id`);
ALTER TABLE
    `events` ADD CONSTRAINT `events_timeline_id_foreign` FOREIGN KEY(`timeline_id`) REFERENCES `timelines`(`id`);
ALTER TABLE
    `timelines` ADD CONSTRAINT `timelines_user_id_foreign` FOREIGN KEY(`user_id`) REFERENCES `users`(`id`);
ALTER TABLE
    `timeline_tag` ADD CONSTRAINT `timeline_tag_timeline_id_foreign` FOREIGN KEY(`timeline_id`) REFERENCES `timelines`(`id`);