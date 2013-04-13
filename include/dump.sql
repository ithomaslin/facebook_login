CREATE TABLE IF NOT EXISTS `fb_login_users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fb_user_id` varchar(120) NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `created` datetime NOT NULL,
  `last_connect` datetime NOT NULL,
  `privilege` tinyint(4) NOT NULL,
  `active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;