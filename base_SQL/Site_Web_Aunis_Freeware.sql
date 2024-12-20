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
('Admin',	'A',	'Admin',	'exemple',	'Admin@gmail.com',	'f66218a3ce36c620f949e46c97bd66f27867c8cf2bf701762c83e21ca0ff87bf'),
('Membre',	'M',	'Membre',	'exemple',	'Membre@gmail.com',	'4eb12bbf2e77831e2f7499929153c9d4150cf7f9a6f93544440132e10aa13bb9'),
('Visiteur',	'V',	'Visiteur',	'exemple',	'Visiteur@gmail.com',	'6e0b97787db86d77c029c83b65c892a437f15ee8df3180032d5a968636dad0b6');

DROP TABLE IF EXISTS `Contacte`;
CREATE TABLE `Contacte` (
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `demande` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- 2024-12-20 07:53:27
