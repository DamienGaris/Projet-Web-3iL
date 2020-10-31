-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 31 oct. 2020 à 16:01
-- Version du serveur :  5.7.17
-- Version de PHP :  7.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_web_3il`
--

-- --------------------------------------------------------

--
-- Structure de la table `text`
--

CREATE TABLE `text` (
  `id` int(255) NOT NULL,
  `titre` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cat1` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cat2` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cat3` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `des1` longtext CHARACTER SET utf8 COLLATE utf8_bin,
  `des2` longtext CHARACTER SET utf8 COLLATE utf8_bin,
  `des3` longtext CHARACTER SET utf8 COLLATE utf8_bin
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `text`
--

INSERT INTO `text` (`id`, `titre`, `cat1`, `cat2`, `cat3`, `des1`, `des2`, `des3`) VALUES
(1, 'Bienvenue sur notre blog tech', 'Smartphones', 'Tablettes', 'PC', 'En 2015, il s\'est vendu 1,4 milliard de smartphones dans le monde (source : IDC). Samsung occupait la tête des ventes suivi d\'Apple et de plusieurs marques chinoises (Huawei, Lenovo, Xiaomi).\r\n    ', 'Tablette (de l\'anglais tablet, plaque) est le nom donné à une famille d\'ordinateurs portables dépourvus de clavier à touches et munis d\'un écran tactile, de la même dimension qu\'une feuille A4 ou plus petits. L\'écran tactile est toujours multipoints, donc capable de détecter plusieurs touchers simultanés.', 'Ordinateur tout-en-un que l\'on peut déplacer en raison de sa taille compacte et de la présence d\'une batterie qui lui permet de fonctionner un moment sans avoir besoin de source d\'alimentation. L\'ordinateur portable est à la fois une unité centrale, un écran, un clavier et une souris.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `text`
--
ALTER TABLE `text`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `text`
--
ALTER TABLE `text`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
