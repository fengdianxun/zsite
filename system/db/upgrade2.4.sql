ALTER TABLE `eps_message` ADD `receiveEmail` enum('0','1') NOT NULL DEFAULT '0';
<<<<<<< HEAD
CREATE TABLE IF NOT EXISTS `eps_extension` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `name` varchar(150) NOT NULL,
  `code` varchar(30) NOT NULL,
  `version` varchar(50) NOT NULL,
  `author` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `license` text NOT NULL,
  `type` varchar(20) NOT NULL default 'extension',
  `site` varchar(150) NOT NULL,
  `chanzhiCompatible` varchar(100) NOT NULL,
  `installedTime` datetime NOT NULL,
  `depends` varchar(100) NOT NULL,
  `dirs` text NOT NULL,
  `files` text NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `code` (`code`),
  KEY `name` (`name`),
  KEY `addedTime` (`installedTime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
=======
ALTER TABLE `eps_category` ADD `link` varchar(255) NOT NULL;
ALTER TABLE `eps_article` ADD `link` varchar(255) NOT NULL;
ALTER TABLE `eps_thread` ADD `link` varchar(255) NOT NULL;
>>>>>>> af458eab46acbb13186670d9aacac143bb840e40
