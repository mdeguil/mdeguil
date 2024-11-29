-- Adminer 4.8.1 MySQL 10.11.6-MariaDB-0+deb12u1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `identifiant` varchar(50) NOT NULL,
  `Fonction` varchar(1) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mdp` varchar(16) NOT NULL,
  PRIMARY KEY (`identifiant`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(512) NOT NULL,
  `auteurs` varchar(512) NOT NULL,
  `theme` varchar(512) NOT NULL,
  `date` date NOT NULL,
  `contenu_article` varchar(10000) NOT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `Contacte`;
CREATE TABLE `Contacte` (
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `demande` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `Contacte` (`nom`, `prenom`, `email`, `demande`) VALUES
('dqzds',	'qzdqs',	'ddd@gmail.com',	'zqdsgsdg'),
('wsfeqsef',	'ef<sfe<sef',	'sfsef@gmail.com',	'zegbusdgfyhusdrg'),
('wsfeqsefqdsdqsdqsdqsd',	'ef<sfe<sefddddddd',	'sfdqzdqsdqsdqsdqsef@gmail.com',	'zegbusdgfyhusdrgssssssssssssssssssssssssss');

-- 2024-11-29 10:46:14
