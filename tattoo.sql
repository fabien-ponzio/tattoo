-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 09 juil. 2021 à 10:54
-- Version du serveur :  8.0.21
-- Version de PHP : 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tattoo`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `motif_contact` varchar(255) COLLATE utf8_bin NOT NULL,
  `id_contact` int NOT NULL,
  `mail_contact` varchar(255) COLLATE utf8_bin NOT NULL,
  `age` int NOT NULL,
  `budget` int NOT NULL,
  `textarea` varchar(255) COLLATE utf8_bin NOT NULL,
  `image_contact` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `contenu_index`
--

DROP TABLE IF EXISTS `contenu_index`;
CREATE TABLE IF NOT EXISTS `contenu_index` (
  `id` int NOT NULL AUTO_INCREMENT,
  `categorie` int NOT NULL,
  `texte_index` varchar(255) COLLATE utf8_bin NOT NULL,
  `page` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `droit`
--

DROP TABLE IF EXISTS `droit`;
CREATE TABLE IF NOT EXISTS `droit` (
  `id` int NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `droit`
--

INSERT INTO `droit` (`id`, `nom`) VALUES
(1337, 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `image_tatoueur`
--

DROP TABLE IF EXISTS `image_tatoueur`;
CREATE TABLE IF NOT EXISTS `image_tatoueur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `classe` varchar(255) COLLATE utf8_bin NOT NULL,
  `id_tatoueur` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `image_tatoueur`
--

INSERT INTO `image_tatoueur` (`id`, `nom`, `classe`, `id_tatoueur`) VALUES
(1, 'https://www.berrichonne.net/images/actus/1417/image_1417.jpg', 'flash', 1),
(2, 'upload/IMG_0004.jpg', '', 0),
(3, 'upload/IMG_0015.jpg', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `presentation_tatoueur`
--

DROP TABLE IF EXISTS `presentation_tatoueur`;
CREATE TABLE IF NOT EXISTS `presentation_tatoueur` (
  `id_tatoueur` int NOT NULL,
  `titre` varchar(255) COLLATE utf8_bin NOT NULL,
  `contenu` varchar(255) COLLATE utf8_bin NOT NULL,
  `image` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_bin NOT NULL,
  `id_tatoueur` int NOT NULL,
  `debut` datetime NOT NULL,
  `fin` datetime NOT NULL,
  `description` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `titre`, `id_tatoueur`, `debut`, `fin`, `description`) VALUES
(1, 'manchette japonaise thierry', 3, '2021-06-02 11:00:00', '2021-06-02 15:00:00', 'carpe koi qui vient tout droit de la cascade du mont fuji'),
(2, 'robin tatouage batman & robin ', 1, '2021-06-04 13:00:00', '2021-06-04 17:00:00', ''),
(5, 'tattoo double bouclier', 0, '2021-06-08 16:00:00', '0000-00-00 17:00:00', 'deux boucliers pour contrer lances, épées et flèches'),
(8, 'facetat', 0, '2021-06-08 16:00:00', '2021-06-08 17:00:00', 'facetat'),
(9, 'tattoo a.D', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'tattoo a.D');

-- --------------------------------------------------------

--
-- Structure de la table `tatoueur`
--

DROP TABLE IF EXISTS `tatoueur`;
CREATE TABLE IF NOT EXISTS `tatoueur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `id_droit` int NOT NULL,
  `login` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `tatoueur`
--

INSERT INTO `tatoueur` (`id`, `nom`, `id_droit`, `login`, `password`) VALUES
(3, 'Poupou', 1337, 'poupou', '$argon2i$v=19$m=65536,t=4,p=1$M3RPQWlHWUIwcG96MTNuVQ$QuG8dGWQRYKVQxNZDr8KBTDIHHoQWypZUcCv7csdiQY'),
(2, '', 1337, 'Admin', '$argon2i$v=19$m=65536,t=4,p=1$MEV4NWpHcUd2d2xPSUNlUg$AqssIHzY1IIHazbulxYtvMH5xnhBtc0qHPQkpDegGCU'),
(1, 'Tchang', 1337, 'tchang', '$argon2i$v=19$m=65536,t=4,p=1$MEV4NWpHcUd2d2xPSUNlUg$AqssIHzY1IIHazbulxYtvMH5xnhBtc0qHPQkpDegGCU');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
