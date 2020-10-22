-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 22 oct. 2020 à 10:36
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
CREATE DATABASE IF NOT EXISTS `projet_web_3il` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `projet_web_3il`;

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id` int(255) NOT NULL,
  `login` varchar(25) NOT NULL,
  `mdp` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id`, `login`, `mdp`) VALUES
(39, 'a', '$2y$10$S4Rw7YrNzLgWjf3xh8nxt.DtWxS46j8lPT3EfDlRF4GIMSUSnoQoS'),
(35, 'admin', '$2y$10$tD8W1H8pILJtUxhLJzmxYOy.IWg4cLn3dMyUaCWL.MLkFYoVgo3Aa');

-- --------------------------------------------------------

--
-- Structure de la table `objet`
--

CREATE TABLE `objet` (
  `id` int(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `description` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `date_sortie` varchar(255) NOT NULL,
  `chemin_img` varchar(255) NOT NULL,
  `taille` int(11) NOT NULL,
  `display` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `objet`
--

INSERT INTO `objet` (`id`, `titre`, `prix`, `description`, `categorie`, `date_sortie`, `chemin_img`, `taille`, `display`) VALUES
(2, 'Titre', 15, '6', '', '', 'des', 0, 0),
(3, 'Titre1', 15, '6', '', '', 'des', 0, 0),
(4, 'Titre3', 15, '6', '', '', 'des', 0, 0),
(5, 'titred', 12, 'dfsf', '', '', 'sdfsd', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `text`
--

CREATE TABLE `text` (
  `id` int(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `cat1` varchar(255) NOT NULL,
  `cat2` varchar(255) NOT NULL,
  `cat3` varchar(255) NOT NULL,
  `des1` varchar(255) NOT NULL,
  `des2` varchar(255) NOT NULL,
  `des3` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `text`
--

INSERT INTO `text` (`id`, `titre`, `cat1`, `cat2`, `cat3`, `des1`, `des2`, `des3`) VALUES
(1, 'titre', 'cat1', 'cat2', 'cat3', 'des1', 'des2', 'des3');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Index pour la table `objet`
--
ALTER TABLE `objet`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `titre` (`titre`);

--
-- Index pour la table `text`
--
ALTER TABLE `text`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT pour la table `objet`
--
ALTER TABLE `objet`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `text`
--
ALTER TABLE `text`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
