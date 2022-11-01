-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 01 nov. 2022 à 11:11
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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`Id`, `Categorie`, `Description`, `DateDeCreation`) VALUES
(2, 'Montres connectÃƒÂ©es', 'Montre pour homme', '2022-10-25 10:22:20'),
(3, 'VÃƒÂªtement homme', 'Chemise,pantalon,cullote et autre type de vÃƒÂªtement pour homme', '2022-10-25 13:33:50'),
(4, 'VÃƒÂªtement enfant', 'lorem', '2022-10-26 11:48:37');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `IdMarchand` int(11) NOT NULL,
  `Produit` varchar(255) NOT NULL,
  `Qte` int(11) NOT NULL,
  `Pu` int(11) NOT NULL,
  `Pt` int(11) NOT NULL,
  `Couleur` varchar(10) DEFAULT NULL,
  `Taille` varchar(10) DEFAULT NULL,
  `NomClient` varchar(255) NOT NULL,
  `NumeroClient` varchar(255) NOT NULL,
  `CommuneClient` varchar(255) NOT NULL,
  `AdresseLivraison` varchar(255) NOT NULL,
  `CommandeId` varchar(255) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`Id`, `IdMarchand`, `Produit`, `Qte`, `Pu`, `Pt`, `Couleur`, `Taille`, `NomClient`, `NumeroClient`, `CommuneClient`, `AdresseLivraison`, `CommandeId`, `Date`) VALUES
(1, 1, 'Sous vÃªtement fashion', 2, 18000, 36000, ' Noir', ' XL', 'OTCHOUMOU', '0777621179', 'YOPOUGON', 'Zone industrielle', '352616', '2022-10-29 08:47:36'),
(2, 1, 'Tunique Homme Responsable', 5, 17500, 87500, 'undefined', 'undefined', 'KACOU Paul', '0167367821', 'AngrÃ©', 'Carrefour nouveau CHU', '111666', '2022-10-29 09:38:17'),
(3, 1, 'Sous vÃªtement fashion', 3, 18000, 54000, ' Noir', ' XL', 'KONE IBRAHIM', '0786889756', 'Cocody', 'Cocody Mermoz', '466107', '2022-10-29 10:01:41'),
(4, 1, 'Festina Maggic Start 2', 2, 890000, 1780000, ' Marron', 'undefined', 'OTCHOUMOU', '0167367821', 'Cocody', 'Cocody centre', '192066', '2022-10-29 11:10:10'),
(5, 1, 'Festina Maggic Start 2', 1, 890000, 890000, ' Marron', 'undefined', 'OTCHOUMOU', '0167367821', 'YOPOUGON', 'AngrÃ©', '065656', '2022-10-29 11:35:58'),
(6, 1, 'Festina Maggic Start 2', 1, 890000, 890000, ' Marron', 'undefined', 'OTCHOUMOU', '0167367821', 'YOPOUGON', 'AngrÃ©', '636239', '2022-10-29 11:45:39'),
(7, 1, 'Festina Maggic Start 2', 1, 890000, 890000, ' Marron', 'undefined', 'OTCHOUMOU', '0786889756', 'YOPOUGON', 'Cocody', '908318', '2022-10-29 11:46:27'),
(8, 1, 'Festina Maggic Start 2', 1, 890000, 890000, ' Marron', 'undefined', 'OTCHOUMOU', '0786889756', 'YOPOUGON', 'Cocody', '647660', '2022-10-29 11:47:44'),
(9, 1, 'Festina Maggic Start 2', 1, 890000, 890000, ' Marron', 'undefined', 'OTCHOUMOU', '0786889756', 'YOPOUGON', 'Cocody', '431076', '2022-10-29 11:49:01');

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
-- Structure de la table `marchand`
--

DROP TABLE IF EXISTS `marchand`;
CREATE TABLE IF NOT EXISTS `marchand` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `IdMarchand` int(11) NOT NULL,
  `ConfirmationCode` int(11) DEFAULT NULL,
  `Nom` varchar(255) NOT NULL,
  `Numero` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `PageFacebook` varchar(255) NOT NULL,
  `DateCreation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DernierPaiement` datetime DEFAULT NULL,
  `DernierConnexion` date DEFAULT NULL,
  `Active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `marchand`
--

INSERT INTO `marchand` (`Id`, `IdMarchand`, `ConfirmationCode`, `Nom`, `Numero`, `Email`, `PageFacebook`, `DateCreation`, `DernierPaiement`, `DernierConnexion`, `Active`) VALUES
(1, 514407060, NULL, 'Otchoumou Angbeni', '0777621179', 'otchoumou.ang@hotmail.com', 'Sanflan Technology', '2022-11-01 11:00:01', NULL, NULL, 0),
(2, 2456837, 2456837, 'Otchoumou Angbeni', '0777621179', 'otchoumou.ang@hotmail.com', 'Sanflan Technology', '2022-11-01 11:09:58', NULL, NULL, 0),
(3, 797621, 797621, 'Otchoumou Angbeni', '0103368827', 'opomen8@gmail.com', 'Codeinnova', '2022-11-01 11:10:48', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `IdMarchand` int(11) NOT NULL DEFAULT '0',
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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`Id`, `IdMarchand`, `IdCategorie`, `NomProduit`, `PrixProduit`, `QteProduit`, `PetiteDescription`, `GrandeDescription`, `NouveauProduit`, `Couleur`, `Taille`, `ImagePrincipale`, `DeuxiemeImage`, `TroisiemeImage`, `QuatriemeImage`, `Tag`, `Emplacement`, `UniqueId`, `DateDeCreation`) VALUES
(1, 0, 3, 'produit test', 5000, 100, 'test de description', 'Test 2', 0, '', '', '32d6f32b47d2c720c650984b8b716f69b1fa516ecaf55eb4be95a18e75af3b35.png', NULL, NULL, NULL, NULL, NULL, '32d6f32b47d2c720c650984b8b716f69b1fa516ecaf55eb4be95a18e75af3b35', '2022-10-20 22:18:48'),
(2, 0, 3, 'produit test', 5000, 100, 'test 1', 'test 2', 1, 'Bleu - Rouge - Noir - Blanc - Vert - Orange - Jaune - Rose - Violet - Gris - Marron', 'S - L - M - XL - XXL', '049ce1540323474cc972d016541bd102ae672eace50407c96349162075b5021c.png', 'd036c97e7e95ff19ba3b0232942933aae01fd7caf8ef88443b2c24146a8c8bd5.gif', '11affc6b2fabd141e8a4f908790156f7ce4a62bd9681c9d7ebf58210cace39f2.JPG', 'c73e89162d3eaa54280046dea48b1ddceed75c8826f3177b5452d2802fd7693b.JPG', 'Robe fille, tenue bÃ©bÃ©, pour enfant', 'Les plus achetÃ©s', '049ce1540323474cc972d016541bd102ae672eace50407c96349162075b5021c', '2022-10-20 22:20:28'),
(3, 0, 3, 'produit test', 5000, 100, 'test', 'tszs', 1, 'Bleu - Rouge - Noir - Blanc - Vert - Orange - Jaune - Rose - Violet - Gris - Marron', 'S - L - M - XL - XXL', 'c344e72bb13fd14b3195069b9e3b8ce1703a8a9e93ccdf669c753d3db866826b.jpeg', 'd7fc4e719f52b96c9f5f3f73e4deb1023317c3408766d68543f9a626efd408cb.jpeg', 'b5a4e599165380cb6cd0ddc03326a53591a9b4ed0e7f42dc407e2309b8377dcb.jpeg', '81984a298f89571f2e9e8d99535be2076f8e1648531ad101d05440e10675d030.png', 'Robe fille, tenue bÃ©bÃ©, pour enfant', 'Les plus achetÃ©s', 'c344e72bb13fd14b3195069b9e3b8ce1703a8a9e93ccdf669c753d3db866826b', '2022-10-20 22:22:41'),
(4, 1, 3, 'produit test', 5000, 100, 'test', 'tszs', 1, 'Bleu - Rouge - Noir - Blanc - Vert - Orange - Jaune - Rose - Violet - Gris - Marron', 'S - L - M - XL - XXL', '67b777c803bc24c76edf00ae1ec974143999c915c3dc945488fb603131bb3858.jpeg', 'd9b313f2ac04ecaf7aaf3d8272029908c7236db824ed17d704c20bda9b9e11a3.jpeg', 'c88275cd96563e9ee1844afac7ccb5b8ec1f1c72feef7448878d980c117ad6d4.jpeg', '0946cf1fccae0537cb8a619018ba8996bd7a289cc446607d653eb773ee3e07c1.png', 'Robe fille, tenue bÃ©bÃ©, pour enfant', NULL, '67b777c803bc24c76edf00ae1ec974143999c915c3dc945488fb603131bb3858', '2022-10-20 22:24:06'),
(5, 1, 2, 'Festina Maggic Start 2', 890000, 8, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '~Bleu~-~Noir~-~Marron~', '', '620620b7ab769950ec6507772ae9d8f4de0a356ae57dc49062c7cf42255a4a96.jpg', '82dd2c6079f68c796cd5e6b54508f437a79862a7dffb7f94f701f58256e1be42.jpg', '940ca8f78f2059ca57ac87ae3e92d591664298c6fa05853d17994261f9d05059.jpg', 'ccabbfcaa389e50694466d6bd8032c6437ed0c1014910ed86da55130b8446da9.jpg', 'Montre pour homme-Montre de luxe-Montre pas cher', NULL, '620620b7ab769950ec6507772ae9d8f4de0a356ae57dc49062c7cf42255a4a96', '2022-10-25 10:27:20'),
(6, 1, 3, 'Sous vÃªtement fashion', 18000, 200, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '~Rose~-~Violet~-~Gris~-~Marron~-~Bleu~-~Rouge~-~Noir~-~Blanc~-~Vert~-~Orange~-~Jaune~', 'S-L-M-XL-XXL', '0454d937157cc8826a12ed41b9472c210b3cd8e6e55ddeeb0358d2c749562329.jpg', '2a7deb279bf7237a7be653d83f2264db8c5075ef937f372751064d6f2d5f0263.jpg', '538ba0fbbe35f76b50226554f4845a59fce44e898ac36fde048ea2e7081105a2.jpg', 'c295ecc257aececaad3b5d0e0f9af7fbd0bd1ff6b3aba4938edeb80d7500dee5.jpg', 'Pour homme - Sous vÃªtement - Chocoto - Cullote - Cullote homme', 'Les plus achetÃ©s', '0454d937157cc8826a12ed41b9472c210b3cd8e6e55ddeeb0358d2c749562329', '2022-10-25 13:37:20'),
(7, 1, 3, 'Tunique Homme Responsable', 17500, 20, 'Le Lorem Ipsum est simplement du faux texte employÃ© dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les annÃ©es 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour rÃ©aliser un livre spÃ©cimen de polices de texte. Il n\'a pas fait que survivre cinq siÃ¨cles, mais s\'est aussi adaptÃ© Ã  la bureautique informatique, sans que son contenu n\'en soit modifiÃ©. Il a Ã©tÃ© popularisÃ© dans les annÃ©es 1960 grÃ¢ce Ã  la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus rÃ©cemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker', 'Le Lorem Ipsum est simplement du faux texte employÃ© dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les annÃ©es 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour rÃ©aliser un livre spÃ©cimen de polices de texte. Il n\'a pas fait que survivre cinq siÃ¨cles, mais s\'est aussi adaptÃ© Ã  la bureautique informatique, sans que son contenu n\'en soit modifiÃ©. Il a Ã©tÃ© popularisÃ© dans les annÃ©es 1960 grÃ¢ce Ã  la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus rÃ©cemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker', 0, '', '', 'a848e9b01251ddffbd5ca52640c65e00af65a13ea3f87e7e39cb24dd1ab850a9.jpg', 'f3ad014c574b2bebebfa15d866f012e7df232a282a43af24b8115bfb2607ec47.jpg', 'db401da9f8d5fb68cf19608dbac1b6ddfd14e57201784850e6a3a8f9350297ca.jpg', NULL, 'Pour homme - Tunique africain- Tunique- Tunique Homme- Complet homme', NULL, 'a848e9b01251ddffbd5ca52640c65e00af65a13ea3f87e7e39cb24dd1ab850a9', '2022-10-29 09:35:35');

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`Id`, `UniqueId`, `Active`, `Valeur`, `Delai`, `DernierePromotion`) VALUES
(1, '67b777c803bc24c76edf00ae1ec974143999c915c3dc945488fb603131bb3858', 1, 0, NULL, '2022-10-20 22:24:06'),
(2, '0454d937157cc8826a12ed41b9472c210b3cd8e6e55ddeeb0358d2c749562329', 1, 30, '2022-10-31 00:00:00', '2022-10-25 13:37:20');

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
