CREATE DATABASE IF NOT EXISTS  `number`
USE `number`;

DROP TABLE IF EXISTS `numbers`;

CREATE TABLE `attempts` (

  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_num` integer NOT NULL,
  `second_num` integer NOT NULL,
  `op` varchar(25) NOT NULL,
  `guess` integer NOT NULL,
  `correct` boolean NOT NULL,
   PRIMARY KEY (`id`),
   UNIQUE KEY `id_UNIQUE` (`id`),
   ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

)
