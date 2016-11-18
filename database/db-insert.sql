INSERT INTO `user` (`user_password`, `first_name`, `last_name`, `email_address`, `telephone_no`, `is_admin`)
VALUES ("e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8", "admin", "admin", "admin@cougars.csusm.edu", "1111111111", 1);
INSERT INTO `user` (`user_password`, `first_name`, `last_name`, `email_address`, `telephone_no`, `is_admin`)
VALUES ("e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8", "Evan", "Causey", "EC@cougars.csusm.edu", "7605558987", 0);
INSERT INTO `user` (`user_password`, `first_name`, `last_name`, `email_address`, `telephone_no`, `is_admin`)
VALUES ("e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8", "Caleb", "Evans", "CE@cougars.csusm.edu", "7605559876", 0);
INSERT INTO `user` (`user_password`, `first_name`, `last_name`, `email_address`, `telephone_no`, `is_admin`)
VALUES ("e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8", "Kevin", "Mata", "KM@cougars.csusm.edu", "7605559999", 0);
INSERT INTO `user` (`user_password`, `first_name`, `last_name`, `email_address`, `telephone_no`, `is_admin`)
VALUES ("e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8", "Luis", "Moreno", "LM@cougars.csusm.edu", "7605551111", 0);
INSERT INTO `user` (`user_password`, `first_name`, `last_name`, `email_address`, `telephone_no`, `is_admin`)
VALUES ("e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8", "Samir", "Asfirane", "SA@cougars.csusm.edu", "7605552222", 0);
INSERT INTO `user` (`user_password`, `first_name`, `last_name`, `email_address`, `telephone_no`, `is_admin`)
VALUES ("e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8", "Dom", "Aguayo Huerta", "DL@authors.csusm.edu", "5519993333", 0);
INSERT INTO `user` (`user_password`, `first_name`, `last_name`, `email_address`, `telephone_no`, `is_admin`)
VALUES ("e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8", "Anubis", "Aguayo Huerta", "AL@authors.csusm.edu", "5559993333", 0);
INSERT INTO `user` (`user_password`, `first_name`, `last_name`, `email_address`, `telephone_no`, `is_admin`)
VALUES ("e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8", "Cathy", "O'Neil", "Cathy@authors.csusm.edu", "1112223333", 0);
INSERT INTO `user` (`user_password`, `first_name`, `last_name`, `email_address`, `telephone_no`, `is_admin`)
VALUES ("5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8", "Tom", "Griffiths", "Tom@authors.csusm.edu", "1113332222", 0);
INSERT INTO `user` (`user_password`, `first_name`, `last_name`, `email_address`, `telephone_no`, `is_admin`)
VALUES ("5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8", "Michael", "Lewis", "ML@authors.csusm.edu", "3211234444", 0);
INSERT INTO `user` (`user_password`, `first_name`, `last_name`, `email_address`, `telephone_no`, `is_admin`)
VALUES ("5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8", "Farrar", "Straus", "Farrar@authors.csusm.edu", "1112223333", 0);
INSERT INTO `user` (`user_password`, `first_name`, `last_name`, `email_address`, `telephone_no`, `is_admin`)
VALUES ("5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8", "Tom", "Giroux", "Tom@authors.csusm.edu", "1113332222", 0);
INSERT INTO `user` (`user_password`, `first_name`, `last_name`, `email_address`, `telephone_no`, `is_admin`)
VALUES ("5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8", "Timothy", "firress", "ML@authors.csusm.edu", "3211234444", 0);


INSERT INTO `ad` (`user_id`, `book_title`, `book_author`, `book_edition`, `book_isbn`, `listed_price`, `path_to_picture`, `ad_description`, `is_closed`)
VALUES (2, "El Tabaco Macaco", "Farrar Straus", 1, '1627790365', 20.50, NULL, "I see the the book has a few scratches around the corners.", 1);
INSERT INTO `ad` (`user_id`, `book_title`, `book_author`, `book_edition`, `book_isbn`, `listed_price`, `path_to_picture`, `ad_description`, `is_closed`)
VALUES (2, "Algorithms to Live By", "Michael Johnes", 1, '0553418815', 20.50, NULL, "New in the wrapper", 1);
INSERT INTO `ad` (`user_id`, `book_title`, `book_author`, `book_edition`, `book_isbn`, `listed_price`, `path_to_picture`, `ad_description`, `is_closed`)
VALUES (2, "The Undoing Project", "Tom Garland", 2, '0393254593', 10.40, NULL, "awesome", 1);
INSERT INTO `ad` (`user_id`, `book_title`, `book_author`, `book_edition`, `book_isbn`, `listed_price`, `path_to_picture`, `ad_description`, `is_closed`)
VALUES (3, "The Undoing Project", "Timothy", 1, '0393254593', 2.00, NULL, "Not new", 1);
INSERT INTO `ad` (`user_id`, `book_title`, `book_author`, `book_edition`, `book_isbn`, `listed_price`, `path_to_picture`, `ad_description`, `is_closed`)
VALUES (3, "Destruction by the computer", "Tom Smith", 1, '93857203784', 2.40, NULL, "new", 1);
INSERT INTO `ad` (`user_id`, `book_title`, `book_author`, `book_edition`, `book_isbn`, `listed_price`, `path_to_picture`, `ad_description`, `is_closed`)
VALUES (4, "Dont touch that keyboard", "Evan Causey", 1, '8740283749', 12.30, NULL, "old", 0);
INSERT INTO `ad` (`user_id`, `book_title`, `book_author`, `book_edition`, `book_isbn`, `listed_price`, `path_to_picture`, `ad_description`, `is_closed`)
VALUES (5, "Opps that was an error", "James Johns", 1, '2736294857', 33.40, NULL, "ruined", 1);
INSERT INTO `ad` (`user_id`, `book_title`, `book_author`, `book_edition`, `book_isbn`, `listed_price`, `path_to_picture`, `ad_description`, `is_closed`)
VALUES (6, "Looking for bugs", "Trumpet Willson", 1, '1029827394', 10.43, NULL, "never read", 1);
INSERT INTO `ad` (`user_id`, `book_title`, `book_author`, `book_edition`, `book_isbn`, `listed_price`, `path_to_picture`, `ad_description`, `is_closed`)
VALUES (7, "Captivating lectures about boolean", "Eric Fitzgarald", 1, '9837462936', 93.12, NULL, "look at it", 1);
INSERT INTO `ad` (`user_id`, `book_title`, `book_author`, `book_edition`, `book_isbn`, `listed_price`, `path_to_picture`, `ad_description`, `is_closed`)
VALUES (8, "Computer science in space", "DJ dance", 1, '9827364921', 11.20, NULL, "old book", 0);
INSERT INTO `ad` (`user_id`, `book_title`, `book_author`, `book_edition`, `book_isbn`, `listed_price`, `path_to_picture`, `ad_description`, `is_closed`)
VALUES (11, "Computer science in space", "DJ dance", 2, '1029387421', 28.23, NULL, "new book", 1);
