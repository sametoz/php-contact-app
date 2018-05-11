# Host: localhost  (Version 5.5.5-10.1.30-MariaDB)
# Date: 2018-05-11 13:39:10
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "tur"
#

DROP TABLE IF EXISTS `tur`;
CREATE TABLE `tur` (
  `tur` varchar(20) COLLATE utf8_turkish_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`tur`),
  UNIQUE KEY `tur` (`tur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

#
# Structure for table "kisiler"
#

DROP TABLE IF EXISTS `kisiler`;
CREATE TABLE `kisiler` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `ad` varchar(100) NOT NULL,
  `soyad` varchar(100) NOT NULL,
  `adres` varchar(100) NOT NULL,
  `tur` varchar(20) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `tur` (`tur`),
  CONSTRAINT `kisiler_ibfk_1` FOREIGN KEY (`tur`) REFERENCES `tur` (`tur`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
