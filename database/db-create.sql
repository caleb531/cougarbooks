CREATE TABLE IF NOT EXISTS
`user`
(
	`user_id` INTEGER AUTO_INCREMENT,
	`user_password` CHAR(60) NOT NULL,
	`first_name` VARCHAR(50) NOT NULL,
	`last_name` VARCHAR(50) NOT NULL,
	`email_address` VARCHAR(320) NOT NULL,
	`telephone_no` VARCHAR(12),
	`is_admin` TINYINT(1) NOT NULL,
	PRIMARY KEY user_PK (`user_id`)
);

CREATE TABLE IF NOT EXISTS
`ad`
(
	`ad_id` INTEGER AUTO_INCREMENT,
	`user_id` INT NOT NULL,
	`book_title` VARCHAR(100) NOT NULL,
	`book_author` VARCHAR(100) NOT NULL,
	`book_edition` VARCHAR(100),
	`book_isbn` VARCHAR(17) NOT NULL,
	`listed_price` decimal(8,2) DEFAULT 0,
	`path_to_picture` VARCHAR(255),
	`ad_description` VARCHAR(200),
	`is_closed` BOOLEAN NOT NULL DEFAULT 0,
	PRIMARY KEY ad_PK (`ad_id`),
	FOREIGN KEY user_FK (`user_id`) REFERENCES `user`(`user_id`) ON DELETE CASCADE
);
