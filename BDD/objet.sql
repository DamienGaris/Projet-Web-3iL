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
-- Structure de la table `objet`
--

CREATE TABLE `objet` (
  `id` int(255) NOT NULL,
  `titre` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `prix` float NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `categorie` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `date_sortie` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `chemin_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `taille` int(11) NOT NULL,
  `display` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `objet`
--

INSERT INTO `objet` (`id`, `titre`, `prix`, `description`, `categorie`, `date_sortie`, `chemin_img`, `taille`, `display`) VALUES
(24, 'Test', 150, 'des', 'tablette', '25', 'assets/backiee-98646.jpg', 50, 1),
(23, 'Objet pc', 250, 'des', 'pc', '54', 'assets/photos-hardware-02-20090608.jpg', 60, 1),
(22, 'Object tab', 150, 'des', 'tel', '05/25/2502', 'assets/photos-hardware-02-20090608.jpg', 50, 1),
(25, 'Iphone 11 pro', 1000, 'DESCRIPTION', 'tel', 'Date sortie : 20/09/2019', 'assets/iphone11Pro.png', 30, 1),
(26, 'Google Pixel 4a', 349, 'DESCRIPTION', 'tel', 'Date sortie : 01/10/2020', 'assets/GooglePixel4a.png', 30, 1),
(27, 'Samsung ZFold 2', 2000, 'DESCRIPTION', 'tel', 'Date sortie : 18/09/2020', 'assets/zfold.png', 30, 1),
(28, 'Huawei P40 pro', 680, 'DESCRIPTION', 'tel', 'Date sortie : 26/03/2020', 'assets/huaweip40pro.png', 35, 1),
(29, 'Ipad Air 4', 669, 'DESCRIPTION', 'tablette', 'Date sortie : octobre 2020', 'assets/ipadAir2020.png', 30, 1),
(30, 'Galaxy Tab S', 719, 'DESCRIPTION', 'tablette', 'Date sortie : 05/08/2020', 'assets/galaxytabs.png', 30, 1),
(31, 'Huawei MatePad pro', 549, 'DESCRIPTION', 'tablette', 'Date sortie : 09/06/2020', 'assets/huaweiMatePad.png', 30, 1),
(32, 'Microsoft Surface Pro 7', 1399, 'DESCRIPTION', 'tablette', 'Date sortie : 22/10/2019', 'assets/MicrosoftSurface.png', 40, 1),
(33, 'Huawei Matebook pro 13', 899, 'DESCRIPTION', 'pc', 'Date sortie : 2020', 'assets/huaweiMatebook.png', 40, 1),
(34, 'Surface Laptop 3', 1700, 'DESCRIPTION', 'pc', 'Date sortie : 22/10/2020', 'assets/asusZenbook.png', 40, 1),
(35, 'HP Spectre x360 13', 1400, 'DESCRIPTION', 'pc', 'Date sortie : 2019', 'assets/hpSpectre.png', 40, 1),
(36, 'Macbook Air', 1200, 'DESCRIPTION', 'pc', 'Date sortie : 15/01/2008', 'assets/macbookAir.png', 40, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `objet`
--
ALTER TABLE `objet`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `titre` (`titre`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `objet`
--
ALTER TABLE `objet`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
