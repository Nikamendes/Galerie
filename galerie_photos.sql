-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 24 juin 2023 à 09:22
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `k35gck9e_projets`
--

-- --------------------------------------------------------

--
-- Structure de la table `galerie_photos`
--

CREATE TABLE `galerie_photos` (
  `id` int(11) NOT NULL,
  `description` varchar(40) DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `categorie` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `galerie_photos`
--

INSERT INTO `galerie_photos` (`id`, `description`, `url`, `categorie`) VALUES
(1, 'Prestation de mariage ', 'https://i.pinimg.com/736x/63/90/34/6390347ba5db8cf3749963eb82251288.jpg', 'Mariage'),
(2, 'Prestation de mariage ', 'https://cache.magicmaman.com/data/photo/w1000_ci/1ea/couple-mariage-exigences.jpg', 'Mariage'),
(3, 'Photo de grossesse ', 'https://leblogletsmart.fr/wp-content/uploads/2018/03/Photo-grossesse.jpg', 'Grossesse'),
(4, 'Photo de grossesse ', 'https://th.bing.com/th/id/OIP.U9L-bNgRAK5AsMMxdfvdxQHaLH?pid=ImgDet&rs=1', 'Grossesse'),
(5, 'Photo d’enfant', 'https://www.lenouveauguide.fr/wp-content/uploads/2015/03/pieds.jpg', 'Bébé'),
(6, 'Photo d’enfant', 'https://th.bing.com/th/id/OIP.wUBZw3wnn1XQGqRLRhAz2wHaDZ?pid=ImgDet&rs=1', 'Bébé'),
(7, 'Photo d’enfant', 'https://paroisse-chatou.com/wp-content/uploads/2018/09/bapt-petit-enfant.png', 'Baptême '),
(8, 'Photo d’enfant', 'https://aquivivecristo.com/wp-content/uploads/2020/01/OracionesparaBautizo-3-200x300.jpg', 'Baptême '),
(9, 'Pour deux personnes', 'https://cdn.futura-sciences.com/buildsv6/images/wide1920/f/4/2/f422044b69_113667_09-1092.jpg', 'Couple'),
(10, 'Pour deux personnes', 'https://th.bing.com/th/id/R.d920c5422a648750bf6fc288c62ad864?rik=%2b2KKDubk1MjPJQ&pid=ImgRaw&r=0', 'Couple');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `galerie_photos`
--
ALTER TABLE `galerie_photos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `galerie_photos`
--
ALTER TABLE `galerie_photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
