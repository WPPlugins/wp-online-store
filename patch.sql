DROP TABLE IF EXISTS information; 
CREATE TABLE information (
  information_id tinyint(3) unsigned NOT NULL auto_increment,
  information_group_id int(11) unsigned NOT NULL default '0',
  information_title varchar(255) NOT NULL default '',
  information_description text NOT NULL,
  parent_id int(11) default NULL,
  sort_order tinyint(3) unsigned NOT NULL default '0',
  visible enum('1','0') NOT NULL default '1',
  language_id int(11) NOT NULL default '0',
  PRIMARY KEY  (information_id,language_id)
);

DROP TABLE IF EXISTS information_group; 
CREATE TABLE information_group (
  information_group_id int(11) NOT NULL auto_increment,
  information_group_title varchar(64) NOT NULL default '',
  information_group_description varchar(255) NOT NULL default '',
  sort_order int(5) default NULL,
  visible int(1) default '1',
  locked varchar(255) NOT NULL default '',
  PRIMARY KEY  (information_group_id)
);


# data

INSERT INTO information_group (information_group_id, information_group_title, information_group_description, sort_order, visible, locked) VALUES (1, 'Information pages', 'Information pages', 1, 1, '');
INSERT INTO information (information_id, information_group_id, visible, sort_order, information_title, information_description, language_id, parent_id) VALUES (1, 2, '1', 1, 'HEADING_TITLE', 'What\'s New Here?', 1, 0);
INSERT INTO information (information_id, information_group_id, visible, sort_order, information_title, information_description, language_id, parent_id) VALUES (2, 2, '1', 2, 'TEXT_GREETING_PERSONAL', 'Welcome back <span class="greetUser">%s!</span> Would you like to see which <a href="%s"><u>new products</u></a> are available to purchase?', 1, 0);
INSERT INTO information (information_id, information_group_id, visible, sort_order, information_title, information_description, language_id, parent_id) VALUES (3, 2, '1', 3, 'TEXT_GREETING_PERSONAL_RELOGON', '<small>If you are not %s, please <a href="%s"><u>log yourself in</u></a> with your account information.</small>', 1, 0);
INSERT INTO information (information_id, information_group_id, visible, sort_order, information_title, information_description, language_id, parent_id) VALUES (4, 2, '1', 4, 'TEXT_GREETING_GUEST', 'Welcome <span class="greetUser">Guest!</span> Would you like to <a href="%s"><u>log yourself in</u></a>? Or would you prefer to <a href="%s"><u>create an account</u></a>?', 1, 0);
INSERT INTO information (information_id, information_group_id, visible, sort_order, information_title, information_description, language_id, parent_id) VALUES (5, 2, '1', 5, 'TEXT_MAIN', 'This is a default text. Please go to visit the admin and change it.', 1, 0);
INSERT INTO information_group (information_group_id, information_group_title, information_group_description, sort_order, visible, locked) VALUES (2, 'Welcome message', 'Welcome message', 2, 1, 'information_title, sort_order, parent_id, visible');





