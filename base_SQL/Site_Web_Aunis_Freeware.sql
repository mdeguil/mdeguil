-- Adminer 4.8.1 MySQL 10.11.6-MariaDB-0+deb12u1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `identifiant` varchar(50) NOT NULL,
  `fonction` varchar(1) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mdp` varchar(16) NOT NULL,
  PRIMARY KEY (`identifiant`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `admin` (`identifiant`, `fonction`, `nom`, `prenom`, `email`, `mdp`) VALUES
('admin',	'A',	'Deguil',	'Mateo',	'mateo.deguil@lycee-elie-vinet.org',	'1234'),
('mbrillant',	'M',	'Brillant',	'Mathéo',	'matheo.brillant@lycee-elie-vinet.org',	'1234'),
('mdeguil',	'V',	'Deguil',	'Mateo',	'deguil.mateo@gmail.com',	'1234');

DROP TABLE IF EXISTS `Contacte`;
CREATE TABLE `Contacte` (
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `demande` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- 2024-12-06 10:00:31
