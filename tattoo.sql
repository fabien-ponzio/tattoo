-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 20 juil. 2021 à 15:29
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
  `mail_contact` varchar(255) COLLATE utf8_bin NOT NULL,
  `age` varchar(255) COLLATE utf8_bin NOT NULL,
  `budget` varchar(255) COLLATE utf8_bin NOT NULL,
  `tatoueur` varchar(255) COLLATE utf8_bin NOT NULL,
  `textarea` varchar(255) COLLATE utf8_bin NOT NULL,
  `image_contact` varchar(255) COLLATE utf8_bin NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `phone` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `motif_contact`, `mail_contact`, `age`, `budget`, `tatoueur`, `textarea`, `image_contact`, `nom`, `phone`) VALUES
(1, 'retouches', 'fabuen@ponz', 'majeur', 'budget1', 'Tchang', 'oknagbgoaokbgoabga', 'epgzgongzg.png', 'fabien', '0942204924'),
(2, 'retouche', 'doubler@gmail.com', 'majeur', 'budget1', 'tchang', 'bonjour, je m\'appelle Fabien Ponzio, j\'habite en centre ville de marseille et je souhaiterais me faire tatatatouer', 'Fabien9.jpg', 'fabien', '0658449105'),
(3, 'retouche', 'doubler@gmail.com', 'majeur', 'budget1', 'tchang', 'bonjour, je m\'appelle Fabien Ponzio, j\'habite en centre ville de marseille et je souhaiterais me faire tatatatouer', 'Fabien9.jpg', 'fabien', '0658449105'),
(6, 'question', 'test@gmail.com', 'majeur', 'budget1', 'nachos', 'testeur', 'Fabien7.jpg', 'test', '0658449105'),
(7, 'question', 'test@gmail.com', 'majeur', 'budget1', 'nachos', 'testeur', 'Fabien7.jpg', 'test', '0658449105'),
(9, 'question', 'nad@gmail.com', 'majeur', 'budget1', 'tchang', 'madnad', 'Fabien9.jpg', 'nad', '0658449105'),
(10, 'question', 'nad@gmail.com', 'majeur', 'budget1', 'tchang', 'madnad', 'Fabien9.jpg', 'nad', '0658449105'),
(11, 'question', 'nad@gmail.com', 'majeur', 'budget1', 'tchang', 'madnad', 'Fabien9.jpg', 'nad', '0658449105'),
(12, 'question', 'nad@gmail.com', 'majeur', 'budget1', 'tchang', 'madnad', 'Fabien9.jpg', 'nad', '0658449105'),
(13, 'question', 'nad@gmail.com', 'majeur', 'budget1', 'tchang', 'madnad', 'Fabien9.jpg', 'nad', '0658449105'),
(14, 'question', 'nad@gmail.com', 'majeur', 'budget1', 'tchang', 'madnad', 'Fabien9.jpg', 'nad', '0658449105'),
(15, 'question', 'nad@gmail.com', 'majeur', 'budget1', 'tchang', 'madnad', 'Fabien9.jpg', 'nad', '0658449105'),
(17, 'rdv', 'clement@clement', 'majeur', 'budget1', 'tchang', 'palmier', 'Capturd.PNG', 'clément', '2456788992'),
(18, 'rdv', 'hozeohgzoghzohg@dfghj', '', 'budget1', 'tchang', 'sdfghjklmùpoiuytfdxcvbn,;:!', 'Capturt.PNG', 'epjtapùekntalkgt', '06123456789'),
(19, 'rdv', 'hozeohgzoghzohg@dfghj', '', 'budget1', 'tchang', 'sdfghjklmùpoiuytfdxcvbn,;:!', 'Capturt.PNG', 'epjtapùekntalkgt', '06123456789'),
(22, 'rdv', 'mlk@mlk', 'majeur', 'budget1', 'tchang', 'kiklmù^\r\n$*ùmlkjhg', 'Captury.PNG', 'oiuhgfd', '0236589634');

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
  `nom` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `classe` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `id_tatoueur` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `image_tatoueur`
--

INSERT INTO `image_tatoueur` (`id`, `nom`, `classe`, `id_tatoueur`) VALUES
(4, 'poupouFlash1.png', 'flash', 3),
(5, 'poupouFlash2.png', 'flash', 3),
(6, 'poupouFlash3.png', 'flash', 3),
(7, 'poupouFlash4.png', 'flash', 3),
(8, 'poupouFlash5.png', 'flash', 3),
(9, 'poupouFlash6.png', 'flash', 3),
(10, 'poupouTattoo.png', 'tattoo', 3),
(11, 'poupouTattoo1.png', 'tattoo', 3),
(12, 'poupouTattoo2.png', 'tattoo', 3),
(13, 'poupouTattoo3.png', 'tattoo', 3),
(14, 'poupouTattoo4.png', 'tattoo', 3),
(15, 'poupouFlash6.png', 'flash', 3),
(78, 'serge8.jpg', 'flash', 14),
(76, 'serge6.jpg', 'flash', 14),
(77, 'serge7.jpg', 'flash', 14),
(33, 'poupou2.jpg', 'tattoo', 3),
(75, 'serge5.jpg', 'flash', 14),
(34, 'poupou3.jpg', 'tattoo', 3),
(35, 'poupou4.jpg', 'tattoo', 3),
(32, 'poupou12.png', 'flash', 3),
(36, 'poupou15.png', 'flash', 3),
(37, 'poupou6.jpg', 'flash', 3),
(38, 'poupou17.png', 'flash', 3),
(39, 'poupou18.png', 'flash', 3),
(40, 'poupou9.jpg', 'flash', 3),
(41, 'tchang1.jpg', 'tattoo', 1),
(42, 'tchang2.jpg', 'tattoo', 1),
(44, 'tchang3.jpg', 'tattoo', 1),
(53, 'tchang16.png', 'flash', 1),
(50, 'tchang5.jpg', 'flash', 1),
(49, 'tchang4.jpg', 'flash', 1),
(64, 'fanny2.jpg', 'flash', 12),
(55, 'tchang17.png', 'flash', 1),
(57, 'tchang18.png', 'flash', 1),
(60, 'fanny1.jpg', 'tattoo', 12),
(59, 'tchang19.png', 'flash', 1),
(70, 'fanny7.jpg', 'tattoo', 12),
(66, 'fanny4.jpg', 'flash', 12),
(65, 'fanny3.jpg', 'flash', 12),
(67, 'fanny5.jpg', 'flash', 12),
(68, 'fanny6.jpg', 'tattoo', 12),
(71, 'serge1.jpg', 'tattoo', 14),
(72, 'serge2.jpg', 'tattoo', 14),
(73, 'serge3.jpg', 'tattoo', 14),
(74, 'serge4.jpg', 'flash', 14);

-- --------------------------------------------------------

--
-- Structure de la table `presentation_tatoueur`
--

DROP TABLE IF EXISTS `presentation_tatoueur`;
CREATE TABLE IF NOT EXISTS `presentation_tatoueur` (
  `id_tatoueur` int NOT NULL,
  `titre` varchar(255) COLLATE utf8_bin NOT NULL,
  `contenu` varchar(255) COLLATE utf8_bin NOT NULL,
  `image` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_tatoueur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `presentation_tatoueur`
--

INSERT INTO `presentation_tatoueur` (`id_tatoueur`, `titre`, `contenu`, `image`) VALUES
(3, 'Poupou', 'ici se tiendra la description de l\'artiste tatoueuse poupou', 'poupou.png'),
(1, 'Tchang', 'Ici se tiendra la description de l\'artiste tatoueur Tchang', 'zombieboy.jpg'),
(12, 'Fanny', 'Ici se tiendra la description de l\'artiste tatoueuse fanny.', 'poupou.png'),
(13, 'Nachos', 'Ici se tiendra la description de l\'artiste tatoueur Nachos.', 'zombieboy.jpg'),
(14, 'Serge', 'Ici se tiendra la description de l\'artiste tatoueur Serge', 'poupou.png');

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
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `tatoueur`
--

INSERT INTO `tatoueur` (`id`, `nom`, `id_droit`, `login`, `password`) VALUES
(3, 'poupou', 1337, 'poupou', '$argon2i$v=19$m=65536,t=4,p=1$M3RPQWlHWUIwcG96MTNuVQ$QuG8dGWQRYKVQxNZDr8KBTDIHHoQWypZUcCv7csdiQY'),
(2, '', 1337, 'Admin', '$argon2i$v=19$m=65536,t=4,p=1$MEV4NWpHcUd2d2xPSUNlUg$AqssIHzY1IIHazbulxYtvMH5xnhBtc0qHPQkpDegGCU'),
(1, 'tchang', 1337, 'tchang', '$argon2i$v=19$m=65536,t=4,p=1$MEV4NWpHcUd2d2xPSUNlUg$AqssIHzY1IIHazbulxYtvMH5xnhBtc0qHPQkpDegGCU'),
(12, 'fanny', 1337, 'fanny', '$argon2i$v=19$m=65536,t=4,p=1$cDV0emkveWFpb21jMGdNaw$fxpiHsGSskA+kp7Cke4Ow8QBUq6YGc6P1dolfp06lPo'),
(13, 'nachos', 1337, 'nachos', '$argon2i$v=19$m=65536,t=4,p=1$TWE2Rmx3dm1aSHJ3cDAwRg$eaT3Jk90EH6567f/272xo3Bz+uoEuxTBWoEEcp3UCiE'),
(14, 'serge', 1337, 'serge', '$argon2i$v=19$m=65536,t=4,p=1$MTl3bHNLZWhoYzBPakFNbQ$crMzuUX8PZ4WCUNYAtIRgDtCRQk+jp4lJtc9jsM6Z54');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
