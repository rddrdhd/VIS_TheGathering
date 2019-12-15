# VIS_TheGathering

This is project for school course VIS (2019)  

It uses external [API](https://docs.magicthegathering.io/) for cards details, and the system itself is something like social network around the MTG cards.  
This repository contains IS, web app & API.  
API is needed for [android client](https://github.com/rddrdhd/VIS_TheGathering_android).  


API endpoints:  
`example.loc/indexAPI.php/items` and `example.loc/indexAPI.php/items/new` where 'items' are  `decks` or `tournaments` or `ads`.



You need to make file `thisissecret.php` in `Service` directory with your database informations:

```
<?php
        DEFINE('DB_USERNAME', 'root');
        DEFINE('DB_PASSWORD', 'root');
        DEFINE('DB_HOST', 'localhost');
        DEFINE('DB_DATABASE', 'vis_db');
?>
```



<details>
  <summary>Database structure script</summary>
  Creates 4 empty tables: user, post, deck and carddeck
  
```
SET NAMES utf8;
SET time_zone = '+00:00';

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `idUser` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `registeredAt` timestamp NOT NULL,
  `deletedAt` timestamp NULL DEFAULT NULL,
  `picUrl` varchar(300) DEFAULT NULL,
  `isCompany` tinyint(1) NOT NULL,
  `isVerified` tinyint(1) NOT NULL,
  `rights` int(11) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `deck`;
CREATE TABLE `deck` (
  `idDeck` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `createdAt` timestamp NOT NULL,
  `deletedAt` timestamp NULL DEFAULT NULL,
  `rights` int(11) NOT NULL,
  `idUserOwner` int(11) unsigned NOT NULL,
  PRIMARY KEY (`idDeck`),
  KEY `idUserOwner` (`idUserOwner`),
  CONSTRAINT `deck_ibfk_1` FOREIGN KEY (`idUserOwner`) REFERENCES `user` (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `carddeck`;
CREATE TABLE `carddeck` (
  `idDeck` int(11) NOT NULL,
  `idCard` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  PRIMARY KEY (`idCard`,`idDeck`),
  KEY `idDeck` (`idDeck`),
  CONSTRAINT `carddeck_ibfk_1` FOREIGN KEY (`idDeck`) REFERENCES `deck` (`idDeck`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `post`;
CREATE TABLE `post` (
  `idPost` int(11) NOT NULL AUTO_INCREMENT,
  `content` mediumtext NOT NULL,
  `createdAt` timestamp NOT NULL,
  `deletedAt` timestamp NULL DEFAULT NULL,
  `rights` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `idUserAuthor` int(11) unsigned NOT NULL,
  `idUserTarget` int(11) unsigned DEFAULT NULL,
  `idPostTarget` int(11) DEFAULT NULL,
  `idDeckTarget` int(11) DEFAULT NULL,
  PRIMARY KEY (`idPost`),
  KEY `idUserAuthor` (`idUserAuthor`),
  KEY `idUserTarget` (`idUserTarget`),
  KEY `idDeckTarget` (`idDeckTarget`),
  KEY `idPostTarget` (`idPostTarget`),
  CONSTRAINT `post_ibfk_1` FOREIGN KEY (`idUserAuthor`) REFERENCES `user` (`idUser`),
  CONSTRAINT `post_ibfk_2` FOREIGN KEY (`idUserTarget`) REFERENCES `user` (`idUser`),
  CONSTRAINT `post_ibfk_3` FOREIGN KEY (`idDeckTarget`) REFERENCES `deck` (`idDeck`),
  CONSTRAINT `post_ibfk_4` FOREIGN KEY (`idPostTarget`) REFERENCES `post` (`idPost`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
```

</details>
