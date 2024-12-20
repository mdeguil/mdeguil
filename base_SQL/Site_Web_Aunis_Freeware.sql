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
  `mdp` varchar(150) NOT NULL,
  PRIMARY KEY (`identifiant`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `admin` (`identifiant`, `fonction`, `nom`, `prenom`, `email`, `mdp`) VALUES
('admin',	'A',	'Deguil',	'Mateo',	'mateo.deguil@lycee-elie-vinet.org',	'1234'),
('mbrillant',	'A',	'Brillant',	'Mathéo',	'matheo.brillant@lycee-elie-vinet.org',	'1234'),
('mdeguil',	'V',	'Deguil',	'Mateo',	'deguil.mateo@gmail.com',	'1234'),
('modo',	'M',	'modo',	'modo',	'modo@gmail.com',	'modo'),
('test',	'V',	'test',	'test',	'test@email.test',	'9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08'),
('testc',	'V',	'testc',	'testc',	'testc@gmail.com',	'c28a08a1a507d5c8ce1a24a6544850290d534e8da2ba92d04025a8dd199e3cd5');

DROP TABLE IF EXISTS `Contacte`;
CREATE TABLE `Contacte` (
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `demande` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- 2024-12-20 07:35:14
