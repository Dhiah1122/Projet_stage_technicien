-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 06 fév. 2019 à 12:50
-- Version du serveur :  5.7.23
-- Version de PHP :  5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `employee-db`
--

-- --------------------------------------------------------

--
-- Structure de la table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `id_employee` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id employee',
  `nom_employee` varchar(60) NOT NULL DEFAULT '' COMMENT 'nom employee',
  `prenom_employee` varchar(60) NOT NULL DEFAULT '' COMMENT 'prenom employee',
  `username_employee` varchar(60) NOT NULL COMMENT 'username employee',
  `password_employee` varchar(128) NOT NULL COMMENT 'password employee',
  `mariee_employee` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'marrie employee',
  `ne_employee` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Nombre enfants employee',
  `age_employee` int(10) NOT NULL DEFAULT '0' COMMENT 'age employee',
  `physique_employee` varchar(60) NOT NULL DEFAULT '' COMMENT 'physique_employee',
  `culture_employee` varchar(60) NOT NULL DEFAULT '' COMMENT 'culture_employee',
  PRIMARY KEY (`id_employee`),
  UNIQUE KEY `username_employee` (`username_employee`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='table employee';

--
-- Déchargement des données de la table `employee`
--

INSERT INTO `employee` (`id_employee`, `nom_employee`, `prenom_employee`, `username_employee`, `password_employee`, `mariee_employee`, `ne_employee`, `age_employee`, `physique_employee`, `culture_employee`) VALUES
(7, 'admin', 'admin', 'admin', 'admin', 0, 0, 30, 'football', 'musique');

-- --------------------------------------------------------

--
-- Structure de la table `enfant`
--

DROP TABLE IF EXISTS `enfant`;
CREATE TABLE IF NOT EXISTS `enfant` (
  `id_enfant` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id enfant',
  `prenom_enfant` varchar(60) NOT NULL DEFAULT '' COMMENT 'prenom enfant',
  `age_enfant` int(10) NOT NULL DEFAULT '0' COMMENT 'age enfant',
  `id_employee` int(10) UNSIGNED NOT NULL COMMENT 'id employee',
  PRIMARY KEY (`id_enfant`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8 COMMENT='table enfant';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
