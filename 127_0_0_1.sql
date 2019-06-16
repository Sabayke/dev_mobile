-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 15 juin 2019 à 12:49
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sms_banking`
--
CREATE DATABASE IF NOT EXISTS `sms_banking` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sms_banking`;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `Prenom` varchar(100) NOT NULL,
  `Nom` varchar(100) NOT NULL,
  `Login` varchar(100) NOT NULL,
  `Num_tel` int(11) NOT NULL,
  `Mot_de_passe` varchar(100) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Date_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Login`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`Prenom`, `Nom`, `Login`, `Num_tel`, `Mot_de_passe`, `Type`, `Date_creation`) VALUES
('Khardiata Abdoul', 'DIALLO', '774642347', 774642347, 'kadia', 'Client', '2019-06-14 23:32:14'),
('Daouda', 'Diouf', '771021959', 771021959, 'passer', 'Client', '2019-06-15 09:10:49'),
('Bassirou', 'NGOM', '771234567', 771234567, 'passer', 'Client', '2019-06-15 11:07:06');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
