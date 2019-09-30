-- Adminer 4.7.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `keterangan01`;
CREATE TABLE `keterangan01` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `Tarikh` date DEFAULT NULL,
  `Bertolak` time DEFAULT NULL,
  `Sampai` time DEFAULT NULL,
  `A04` varchar(200) DEFAULT NULL,
  `A05` varchar(200) DEFAULT NULL,
  `A06` varchar(200) DEFAULT NULL,
  `A07` char(2) DEFAULT NULL,
  `A08` varchar(200) DEFAULT NULL,
  `Jarak(KM)` decimal(10,2) DEFAULT NULL,
  `Jumlah(RM)` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `keterangan01` (`No`, `Tarikh`, `Bertolak`, `Sampai`, `A04`, `A05`, `A06`, `A07`, `A08`, `Jarak(KM)`, `Jumlah(RM)`) VALUES
(1,	'2019-09-29',	'15:27:00',	'15:27:00',	'',	'cubaan 1',	NULL,	NULL,	NULL,	NULL,	NULL),
(2,	NULL,	NULL,	NULL,	NULL,	'1',	'Hari Elaun Loging  X RM',	'40',	NULL,	NULL,	40.00);

-- 2019-09-30 12:35:40