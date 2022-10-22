-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 22 oct. 2022 à 06:21
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `distrax`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Categorie` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `DateDeCreation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`Id`, `Categorie`, `Description`, `DateDeCreation`) VALUES
(1, 'Montres connectÃ©es', 'Objets connectÃ©s pour hommes raffinÃ©s', '2022-10-22 06:18:26');

-- --------------------------------------------------------

--
-- Structure de la table `couleur`
--

DROP TABLE IF EXISTS `couleur`;
CREATE TABLE IF NOT EXISTS `couleur` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `CouleurArticle` varchar(20) NOT NULL,
  `CodeRgb` varchar(10) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `couleur`
--

INSERT INTO `couleur` (`Id`, `CouleurArticle`, `CodeRgb`) VALUES
(1, 'bleu', '#0000ff'),
(2, 'rouge', '#ff0000'),
(3, 'noir', '#000000'),
(4, 'blanc', '#ffffff'),
(5, 'vert', '#00ff00'),
(6, 'orange', '#ff8000'),
(7, 'jaune', '#ffff00'),
(8, 'rose', '#ff007f'),
(9, 'violet', '#a020f0'),
(10, 'gris', '#b3b3b3'),
(11, 'marron', '#70150d');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `IdCategorie` int(11) NOT NULL,
  `NomProduit` varchar(255) NOT NULL,
  `PrixProduit` int(11) NOT NULL,
  `QteProduit` int(11) NOT NULL DEFAULT '0',
  `PetiteDescription` text NOT NULL,
  `GrandeDescription` text,
  `NouveauProduit` int(1) NOT NULL DEFAULT '0',
  `Couleur` varchar(255) DEFAULT NULL,
  `Taille` varchar(255) DEFAULT NULL,
  `ImagePrincipale` varchar(255) NOT NULL,
  `DeuxiemeImage` varchar(255) DEFAULT NULL,
  `TroisiemeImage` varchar(255) DEFAULT NULL,
  `QuatriemeImage` varchar(255) DEFAULT NULL,
  `Tag` varchar(255) DEFAULT NULL,
  `Emplacement` varchar(255) DEFAULT NULL,
  `UniqueId` varchar(255) DEFAULT NULL,
  `DateDeCreation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`Id`, `IdCategorie`, `NomProduit`, `PrixProduit`, `QteProduit`, `PetiteDescription`, `GrandeDescription`, `NouveauProduit`, `Couleur`, `Taille`, `ImagePrincipale`, `DeuxiemeImage`, `TroisiemeImage`, `QuatriemeImage`, `Tag`, `Emplacement`, `UniqueId`, `DateDeCreation`) VALUES
(1, 3, 'produit test', 5000, 100, 'test de description', 'Test 2', 0, '', '', '32d6f32b47d2c720c650984b8b716f69b1fa516ecaf55eb4be95a18e75af3b35.png', NULL, NULL, NULL, NULL, NULL, '32d6f32b47d2c720c650984b8b716f69b1fa516ecaf55eb4be95a18e75af3b35', '2022-10-20 22:18:48'),
(2, 3, 'produit test', 5000, 100, 'test 1', 'test 2', 1, 'Bleu - Rouge - Noir - Blanc - Vert - Orange - Jaune - Rose - Violet - Gris - Marron', 'S - L - M - XL - XXL', '049ce1540323474cc972d016541bd102ae672eace50407c96349162075b5021c.png', 'd036c97e7e95ff19ba3b0232942933aae01fd7caf8ef88443b2c24146a8c8bd5.gif', '11affc6b2fabd141e8a4f908790156f7ce4a62bd9681c9d7ebf58210cace39f2.JPG', 'c73e89162d3eaa54280046dea48b1ddceed75c8826f3177b5452d2802fd7693b.JPG', 'Robe fille, tenue bÃ©bÃ©, pour enfant', 'Les plus achetÃ©s', '049ce1540323474cc972d016541bd102ae672eace50407c96349162075b5021c', '2022-10-20 22:20:28'),
(3, 3, 'produit test', 5000, 100, 'test', 'tszs', 1, 'Bleu - Rouge - Noir - Blanc - Vert - Orange - Jaune - Rose - Violet - Gris - Marron', 'S - L - M - XL - XXL', 'c344e72bb13fd14b3195069b9e3b8ce1703a8a9e93ccdf669c753d3db866826b.jpeg', 'd7fc4e719f52b96c9f5f3f73e4deb1023317c3408766d68543f9a626efd408cb.jpeg', 'b5a4e599165380cb6cd0ddc03326a53591a9b4ed0e7f42dc407e2309b8377dcb.jpeg', '81984a298f89571f2e9e8d99535be2076f8e1648531ad101d05440e10675d030.png', 'Robe fille, tenue bÃ©bÃ©, pour enfant', 'Les plus achetÃ©s', 'c344e72bb13fd14b3195069b9e3b8ce1703a8a9e93ccdf669c753d3db866826b', '2022-10-20 22:22:41'),
(4, 3, 'produit test', 5000, 100, 'test', 'tszs', 1, 'Bleu - Rouge - Noir - Blanc - Vert - Orange - Jaune - Rose - Violet - Gris - Marron', 'S - L - M - XL - XXL', '67b777c803bc24c76edf00ae1ec974143999c915c3dc945488fb603131bb3858.jpeg', 'd9b313f2ac04ecaf7aaf3d8272029908c7236db824ed17d704c20bda9b9e11a3.jpeg', 'c88275cd96563e9ee1844afac7ccb5b8ec1f1c72feef7448878d980c117ad6d4.jpeg', '0946cf1fccae0537cb8a619018ba8996bd7a289cc446607d653eb773ee3e07c1.png', 'Robe fille, tenue bÃ©bÃ©, pour enfant', NULL, '67b777c803bc24c76edf00ae1ec974143999c915c3dc945488fb603131bb3858', '2022-10-20 22:24:06');

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

DROP TABLE IF EXISTS `promotion`;
CREATE TABLE IF NOT EXISTS `promotion` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UniqueId` varchar(255) NOT NULL,
  `Active` int(1) NOT NULL DEFAULT '0',
  `Valeur` int(11) NOT NULL DEFAULT '0',
  `Delai` datetime DEFAULT NULL,
  `DernierePromotion` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`Id`, `UniqueId`, `Active`, `Valeur`, `Delai`, `DernierePromotion`) VALUES
(1, '67b777c803bc24c76edf00ae1ec974143999c915c3dc945488fb603131bb3858', 1, 0, NULL, '2022-10-20 22:24:06');

-- --------------------------------------------------------

--
-- Structure de la table `taille`
--

DROP TABLE IF EXISTS `taille`;
CREATE TABLE IF NOT EXISTS `taille` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `TailleArticle` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `taille`
--

INSERT INTO `taille` (`Id`, `TailleArticle`) VALUES
(1, 'S'),
(2, 'L'),
(3, 'M'),
(4, 'XL'),
(5, 'XXL');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
