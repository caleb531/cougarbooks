INSERT INTO `user` (`user_id`,`user_password`,`first_name`,`last_name`,`email_address`,`telephone_no`,`is_admin`)
VALUES (1,"password","admin","admin","admin@cougars.csusm.edu","1111111111",1);
INSERT INTO `user` (`user_id`,`user_password`,`first_name`,`last_name`,`email_address`,`telephone_no`,`is_admin`)
VALUES (2,"password","Evan","Causey","EC@cougars.csusm.edu","7605558987",0);
INSERT INTO `user` (`user_id`,`user_password`,`first_name`,`last_name`,`email_address`,`telephone_no`,`is_admin`)
VALUES (3,"password","Caleb","Evans","CE@cougars.csusm.edu","7605559876",0);
INSERT INTO `user` (`user_id`,`user_password`,`first_name`,`last_name`,`email_address`,`telephone_no`,`is_admin`)
VALUES (4,"password","Kevin","Mata","KM@cougars.csusm.edu","7605559999",0);
INSERT INTO `user` (`user_id`,`user_password`,`first_name`,`last_name`,`email_address`,`telephone_no`,`is_admin`)
VALUES (5,"password","Luis","Moreno","LM@cougars.csusm.edu","7605551111",0);
INSERT INTO `user` (`user_id`,`user_password`,`first_name`,`last_name`,`email_address`,`telephone_no`,`is_admin`)
VALUES (6,"password","Samir","Asfirane","SA@cougars.csusm.edu","7605552222",0);
INSERT INTO `user` (`user_id`,`user_password`,`first_name`,`last_name`,`email_address`,`telephone_no`,`is_admin`)
VALUES (7,"password","Dom","Aguayo Huerta","DL@authors.csusm.edu","5519993333",0);
INSERT INTO `user` (`user_id`,`user_password`,`first_name`,`last_name`,`email_address`,`telephone_no`,`is_admin`)
VALUES (8,"password","Anubis","Aguayo Huerta","AL@authors.csusm.edu","5559993333",0);
INSERT INTO `user` (`user_id`,`user_password`,`first_name`,`last_name`,`email_address`,`telephone_no`,`is_admin`)
VALUES (9,"password","Cathy","O'Neil","Cathy@authors.csusm.edu","1112223333",0);
INSERT INTO `user` (`user_id`,`user_password`,`first_name`,`last_name`,`email_address`,`telephone_no`,`is_admin`)
VALUES (10,"password","Tom","Griffiths","Tom@authors.csusm.edu","1113332222",0);
INSERT INTO `user` (`user_id`,`user_password`,`first_name`,`last_name`,`email_address`,`telephone_no`,`is_admin`)
VALUES (11,"password","Michael","Lewis","ML@authors.csusm.edu","3211234444",0);
INSERT INTO `user` (`user_id`,`user_password`,`first_name`,`last_name`,`email_address`,`telephone_no`,`is_admin`)
VALUES (12,"password","Farrar","Straus","Farrar@authors.csusm.edu","1112223333",0);
INSERT INTO `user` (`user_id`,`user_password`,`first_name`,`last_name`,`email_address`,`telephone_no`,`is_admin`)
VALUES (13,"password","Tom","Giroux","Tom@authors.csusm.edu","1113332222",0);
INSERT INTO `user` (`user_id`,`user_password`,`first_name`,`last_name`,`email_address`,`telephone_no`,`is_admin`)
VALUES (14,"password","Timothy","firress","ML@authors.csusm.edu","3211234444",0);


INSERT INTO `ad` (`ad_id`,`user_id`,`book_title`,`book_author`,`book_edition`,`book_isbn`,`listed_price`,`path_to_picture`,`ad_description`,`is_closed`)
VALUES (1,2,"El Tabaco Macaco","Farrar Straus",1,1627790365,20.50,"/Path","I see the the book has a few scratches around the corners.",1);
INSERT INTO `ad` (`ad_id`,`user_id`,`book_title`,`book_author`,`book_edition`,`book_isbn`,`listed_price`,`path_to_picture`,`ad_description`,`is_closed`)
VALUES (2,2,"Algorithms to Live By","Michael Johnes",1,0553418815,20.50,"/Path","New in the wrapper",1);
INSERT INTO `ad` (`ad_id`,`user_id`,`book_title`,`book_author`,`book_edition`,`book_isbn`,`listed_price`,`path_to_picture`,`ad_description`,`is_closed`)
VALUES (3,2,"The Undoing Project","Tom Garland",2,0393254593,10.40,"path","awesome",1);
INSERT INTO `ad` (`ad_id`,`user_id`,`book_title`,`book_author`,`book_edition`,`book_isbn`,`listed_price`,`path_to_picture`,`ad_description`,`is_closed`)
VALUES (4,3,"The Undoing Project","Timothy",1,0393254593,2.00,"Path","Not new",1);
INSERT INTO `ad` (`ad_id`,`user_id`,`book_title`,`book_author`,`book_edition`,`book_isbn`,`listed_price`,`path_to_picture`,`ad_description`,`is_closed`)
VALUES (5,3,"Destruction by the computer","Tom Smith",1,93857203784,2.40,"path","new",1);
INSERT INTO `ad` (`ad_id`,`user_id`,`book_title`,`book_author`,`book_edition`,`book_isbn`,`listed_price`,`path_to_picture`,`ad_description`,`is_closed`)
VALUES (6,4,"Dont touch that keyboard","Evan Causey",1,8740283749,12.30,"path","old",0);
INSERT INTO `ad` (`ad_id`,`user_id`,`book_title`,`book_author`,`book_edition`,`book_isbn`,`listed_price`,`path_to_picture`,`ad_description`,`is_closed`)
VALUES (7,5,"Opps that was an error","James Johns",1,2736294857,33.40,"path","ruined",1);
INSERT INTO `ad` (`ad_id`,`user_id`,`book_title`,`book_author`,`book_edition`,`book_isbn`,`listed_price`,`path_to_picture`,`ad_description`,`is_closed`)
VALUES (8,6,"Looking for bugs","Trumpet Willson",1,1029827394,10.43,"path","never read",1);
INSERT INTO `ad` (`ad_id`,`user_id`,`book_title`,`book_author`,`book_edition`,`book_isbn`,`listed_price`,`path_to_picture`,`ad_description`,`is_closed`)
VALUES (9,7,"Captivating lectures about boolean","Eric Fitzgarald",1,9837462936,93.12,"path","look at it",1);
INSERT INTO `ad` (`ad_id`,`user_id`,`book_title`,`book_author`,`book_edition`,`book_isbn`,`listed_price`,`path_to_picture`,`ad_description`,`is_closed`)
VALUES (10,8,"Computer science in space","DJ dance",1,982736492,11.20,"path","old book",0);
INSERT INTO `ad` (`ad_id`,`user_id`,`book_title`,`book_author`,`book_edition`,`book_isbn`,`listed_price`,`path_to_picture`,`ad_description`,`is_closed`)
VALUES (11,11,"Computer science in space","DJ dance",2,1029387421,28.23,"path","new book",1);









