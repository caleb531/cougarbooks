CREATE TABLE `User`(
	`UserID` INTEGER AUTO_INCREMENT,
	`UserFirstName` VARCHAR(30) NOT NULL,
	`UserLastName` VARCHAR(30) NOT NULL,
	-- According to RFC 3396, email addresses have a max length of 320 chars
	-- https://tools.ietf.org/html/rfc3696
	`UserEmail` VARCHAR(320) NOT NULL,
	-- US phone numbers consist of up to 10 digits and 2 optional dashes
	`UserPhone` VARCHAR(12),
	-- A salted SHA256 hash of the user's password
	`UserPassword` CHAR(64) NOT NULL,
	-- A boolean indicating if the user is an administrator
	`UserIsAdmin` TINYINT(1) NOT NULL,
	PRIMARY KEY(`UserID`)
);

CREATE TABLE `Ad`(
	`AdID` INTEGER AUTO_INCREMENT,
	-- The ID of the user who created the ad
	`UserID` INTEGER,
	`BookTitle` VARCHAR(100) NOT NULL,
	-- A book may or may not have multiple authors, but either way, the entire
	-- field is one long string for the sake of the user's convenience
	`BookAuthors` VARCHAR(100) NOT NULL,
	`BookEdition` VARCHAR(100),
	-- Current ISBNs consist of 13 digits and 4 dashes (ISBNs assigned before
	-- 2007 are 10 digits)
	`BookISBN` VARCHAR(17) NOT NULL,
	-- The book price entered by the user may not necessarily be a USD dollar
	-- value; we anticipate the field could include a range of amounts, or
	-- perhaps
	`BookPrice` VARCHAR(30),
	-- The path to the uploaded image file on the server; all UNIX paths have a
	-- max length of 255 characters
	`BookPhoto` VARCHAR(255),
	PRIMARY KEY(`AdID`),
	FOREIGN KEY(`UserID`) REFERENCES `User`(`UserID`) ON DELETE CASCADE
);
