-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 10 oct. 2022 à 13:53
-- Version du serveur : 8.0.27
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `retrogame`
--

DELIMITER $$
--
-- Procédures
--
DROP PROCEDURE IF EXISTS `add-users`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `add-users` (IN `p_id` INT, IN `p_nom` VARCHAR(30), IN `p_prenom` VARCHAR(30), IN `p_email` VARCHAR(250), IN `p_mdp` VARCHAR(70))  INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `mdp`) VALUES(p_id, p_nom, p_prenom, p_email , p_mdp)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `descripti` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `img` varchar(250) NOT NULL,
  `prix` decimal(6,0) NOT NULL,
  `categorie` varchar(10) NOT NULL,
  `vendeur` varchar(50) NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `name`, `descripti`, `img`, `prix`, `categorie`, `vendeur`, `date_creation`) VALUES
(2, 'PlayStation 4 PS4 ', 'Le pack contient :\r\n- Une console de jeu PlayStation 4 Pro Noire 1 To\r\n- Un câble HDMI pour relier la console à votre TV\r\n- Un câble d’alimentation\r\n- Un câble USB pour relier la manette à votre console.\r\n- Une manette DUALSHOCK 4', 'https://www.micromania.fr/dw/image/v2/BCRB_PRD/on/demandware.static/-/Sites-masterCatalog_Micromania/default/dw2cf60bbf/images/high-res/ps4_pro_1.jpg', '29599', 'new', 'R0X4S', '2022-10-03 15:31:50'),
(3, 'Demon Slayer PS4', 'Demon Slayer - Kimetsu no Yaiba : The Hinokami Chronicles PS4\r\n\r\nSoyez la lame qui pourfend les démons !\r\n\r\nDans l’ère Taisho au Japon, Tanjiro, un jeune homme au grand cœur qui vend du charbon pour vivre, découvre en rentrant chez lui sa famille mas', 'https://www.micromania.fr/dw/image/v2/BCRB_PRD/on/demandware.static/-/Sites-masterCatalog_Micromania/default/dwdf0cd620/images/high-res/113470.jpg', '5999', 'new', 'R0X4S', '2022-10-03 16:16:37'),
(4, 'Spider-man Miles Morales', 'Marvel\'s Spider-man Miles Morales\r\n\r\nVersions PS5 et PS4', 'https://www.micromania.fr/dw/image/v2/BCRB_PRD/on/demandware.static/-/Sites-masterCatalog_Micromania/default/dw1a0e325e/images/high-res/107722.jpg?sw=480&amp;sh=480&amp;sm=fit', '2999', 'new', 'R0X4S', '2022-10-03 16:26:39'),
(5, 'Ghostwire tokyo PS5', 'Un évènement paranormal majeur ayant entraîné la disparition de 99 % de la population, les esprits du folklore japonais en ont profité pour envahir les rues de Tokyo.- Utilisez vos compétences paranormales pour résoudre le mystère de ces disparitions', 'https://www.micromania.fr/dw/image/v2/BCRB_PRD/on/demandware.static/-/Sites-masterCatalog_Micromania/default/dwe0143a79/images/high-res/118808.jpg', '6999', 'new', 'R0X4S', '2022-10-04 08:28:41'),
(6, 'Fifa 23', 'Fifa 23 - PS4 Edition', 'https://www.micromania.fr/dw/image/v2/BCRB_PRD/on/demandware.static/-/Sites-masterCatalog_Micromania/default/dwcfd4a8e0/images/high-res/124272.jpg', '5999', 'new', 'R0X4S', '2022-10-04 10:21:57'),
(7, 'Assassin\'s creed ', 'Assassin\'s creed mirage edition deluxe PS5\r\nDécouvrez l\'histoire de Basim, voleur à la tire habile cherchant des réponses et la justice dans les rues animées du Bagdad du IXe siècle. Par l\'intermédiaire d\'une société aussi ancienne que mystérieuse ap', 'https://www.micromania.fr/dw/image/v2/BCRB_PRD/on/demandware.static/-/Sites-masterCatalog_Micromania/default/dw19eee92d/images/high-res/125747.jpg', '5999', 'new', 'ChrisOukalm', '2022-10-04 11:50:10'),
(8, 'Valkyrie elysium PS4', 'Le nouveau titre de la franchise VALKYRIE est enfin arrivé ! Cet action-RPG incorpore les systèmes d’Einherjar et de combo emblématiques de la franchise pour proposer des combats tridimensionnels frénétiques. La direction artistique originale du jeu ', 'https://www.micromania.fr/dw/image/v2/BCRB_PRD/on/demandware.static/-/Sites-masterCatalog_Micromania/default/dwce776f62/images/high-res/124164.jpg', '6999', 'new', 'ChrisOukalm', '2022-10-04 12:58:07'),
(11, 'Epic chef XBOX ONE', 'Epic Chef est un jeu d\'aventure à l\'histoire captivante, saupoudré de simulation de vie, de cuisine et de fabrication, le tout mélangé en un jeu des plus appétissants !  Préparez de délicieux plats ! Un éditeur dynamique de recettes vous permet d\'ess', 'https://www.micromania.fr/dw/image/v2/BCRB_PRD/on/demandware.static/-/Sites-masterCatalog_Micromania/default/dwcbe8d27d/images/high-res/111557.jpg', '1999', 'new', 'ChrisOukalm', '2022-10-04 14:55:16'),
(9, 'Console Nintendo 64', 'Le pack de cette console Nintendo 64 comporte :  - Console Nintendo 64 - 1 manette officielle Nintendo 64 de couleur grise - 1 câble d\'alimentation - 1 câble péritel  Cette console est vendue en bon état général et garantie en parfait état de fonctio', 'https://retrogameplace.com/media/catalog/product/cache/1ef575f25ee52d95d728ae85a778613b/C/L/CLS023.png', '12595', 'retro', 'ChrisOukalm', '2022-10-04 14:53:55'),
(10, 'Epic chef XBOX ONE', 'Epic Chef est un jeu d\'aventure à l\'histoire captivante, saupoudré de simulation de vie, de cuisine et de fabrication, le tout mélangé en un jeu des plus appétissants !  Préparez de délicieux plats ! Un éditeur dynamique de recettes vous permet d\'ess', 'https://www.micromania.fr/dw/image/v2/BCRB_PRD/on/demandware.static/-/Sites-masterCatalog_Micromania/default/dwcbe8d27d/images/high-res/111557.jpg', '1999', 'new', 'ChrisOukalm', '2022-10-04 14:55:16'),
(12, 'The Diofield Chronicle', 'Une histoire d\'une rudesse fascinante animée par une technologie de pointe. Découvrez un nouveau système de combat stratégique en temps réel appelé « Real Time Tactical Battle » (RTTB). La naissance d\'un RPG stratégique inédit créé par une équipe de ', 'https://www.micromania.fr/dw/image/v2/BCRB_PRD/on/demandware.static/-/Sites-masterCatalog_Micromania/default/dwdaf24133/images/high-res/124156.jpg', '5900', 'new', 'R0X4S', '2022-10-05 20:05:15'),
(13, 'No man\'s', 'No Man’s Sky est un jeu d\'aventure et de science-fiction épique se déroulant dans un univers sans fin, où chaque étoile représente un lointain soleil entouré de planètes pleines de vie qui ne demandent qu\'à être explorées. Découvrez des mondes inconn', 'https://www.micromania.fr/dw/image/v2/BCRB_PRD/on/demandware.static/-/Sites-masterCatalog_Micromania/default/dw79fd6ada/images/high-res/123854.jpg', '4900', 'new', 'R0X4S', '2022-10-09 21:43:22');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `ip` varchar(20) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `token` text NOT NULL,
  `date_inscription` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `pseudo`, `email`, `password`, `ip`, `grade`, `token`, `date_inscription`) VALUES
(1, 'R0X4S', 'ryan.leparq@hotmail.com', '$2y$12$gVOH0TtAP4WCVSmOKTBDbu553b7CcekvLLrlQoVG0ryrgv/vDJcaO', '::1', 'ADMIN', '96377be334f06533e65d356b55342363111af3b71a712a722b22f440a882a46bd10e02c6a63208425211123e87dae8dfe116b65b9eae2dabd51cfe6165e12bd7', '2022-10-03 11:32:54'),
(2, 'Chaaaa', 'cha.dubec@gmail.com', '$2y$12$6i4K34xXKFqCuTWcC1DLA.Uhy7b9l5fFfgXuJ0yIXmdlUFTjnUibK', '::1', 'SELLER', 'f79bb9eb47bc2ec2175324dff62c352f08779cd99c8bcb81c6cfe024cef6d2a2b95423df8fe5c6ccab979acbcae6f1a5a958be52642becd5afe55005a25a454c', '2022-10-03 11:51:41'),
(3, 'Youyou', 'yoan.laplace@hotmail.com', '$2y$12$Cw7MN4HcYM.OE2zc9yyfxeA4ihEDmIByw//0UbneJ1TcQr8sgkina', '::1', 'CUSTOMER', 'a33fcbcaa3fc788faa169de55a570dfb09fe14d0ba625bed7febed0408a02ece1ca892e2723293542981455fd0b0c655c9ceeb9d481e40c7b2ab26057a7ef7bb', '2022-10-03 14:02:32'),
(4, 'Raven', 'celia.raven@hotmail.com', '$2y$12$u0WWs6F/8WHqFJLpYCUTOuX1ixyEWPIQbQ3mpZIL/NAMrsWqlhmqe', '::1', 'CUSTOMER', 'e562291889cfe0cb9c377a7ebf162a741bd62da1dd6bb38db259e46104b27f2a123233083f7d6cd37a13af2fa7717e42943498192f9e9fae39e37b8ebc52a32b', '2022-10-03 15:24:34'),
(5, 'ChrisOukalm', 'chrisdu28@gmail.com', '$2y$12$dJxi81b0iPyRVviy.4LUoO2a22DVp.q8PBWm93FdaTo55Z1fhKTcW', '::1', 'SELLER', '8486b8c84144cee30819790c65af3b83326128ea3067177501597a3f47a8468b518e90ccfc5ea750b2bba7b5bbcd993b118acc935bfe5fa3cf676903ab4eaada', '2022-10-04 11:47:44'),
(6, 'Momo', 'momo.afpa@gmail.com', '$2y$12$Epb6A6fTw/QS47K1GFTviegur/mHViwjN9gvcxzE0deDznMphhvKC', '::1', 'SELLER', '4cdd2a2aa855b123db1969dc237eff1945c0380b11099ffc3fb218b13a80b6e867f85210bb3b323739601df9690913205d078537a9f19a8460cdc902392f22e5', '2022-10-10 10:41:58');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
