-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 28 juin 2022 à 13:54
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `leroy`
--

-- --------------------------------------------------------

--
-- Structure de la table `detailcommandes`
--

DROP TABLE IF EXISTS `detailcommandes`;
CREATE TABLE IF NOT EXISTS `detailcommandes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_commande` int(11) NOT NULL,
  `id_article` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_detailcommandes_articles` (`id_article`),
  KEY `FK_detailcommandes_commandes` (`id_commande`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `detailcommandes`
--

INSERT INTO `detailcommandes` (`id`, `id_commande`, `id_article`) VALUES
(1, 30, 146),
(2, 30, 145),
(3, 31, 143),
(4, 32, 141),
(5, 32, 144),
(6, 32, 146);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
