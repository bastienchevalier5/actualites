-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 28 fév. 2024 à 13:49
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `site_actualités`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualités`
--

DROP TABLE IF EXISTS `actualités`;
CREATE TABLE IF NOT EXISTS `actualités` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL,
  `contenu` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `publication` date NOT NULL,
  `modification` date NOT NULL,
  `auteur` varchar(50) NOT NULL,
  `tag` varchar(50) NOT NULL,
  `source` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `actualités`
--

INSERT INTO `actualités` (`id`, `titre`, `contenu`, `image`, `publication`, `modification`, `auteur`, `tag`, `source`) VALUES
(1, 'Lorem', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio quis necessitatibus ipsum id molestias praesentium esse blanditiis, eius consequatur cumque autem velit, voluptatum itaque! Optio beatae voluptatem natus odio aspernatur.', 'asterix.jpg', '2024-02-28', '2024-02-28', 'Monsieur Mystère', 'Bande dessinée - People', 'https://www.aquitaineonline.com/1190-dessin-actualites-humour-marc-large.html'),
(2, 'Ipsum', 'Ceci est le contenu de la 2ème actualité', 'actu2.jpg', '2015-02-09', '2015-02-09', 'L\'oeil', 'vue - vision', 'https://www.istockphoto.com/fr/bot-wall?returnUrl=%2Ffr%2Fphotos%2Fle-futur'),
(3, 'Dolor', 'Ceci est le contenu de la 3ème actualité', 'actu3.jpg', '2019-06-25', '2019-06-25', 'L\'écolo', 'Nature', 'https://pixabay.com/images/search/tree/'),
(4, 'consectetur', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio quis necessitatibus ipsum id molestias praesentium esse blanditiis, eius consequatur cumque autem velit, voluptatum itaque! Optio beatae voluptatem natus odio aspernatur.', 'oiseau.webp', '2001-04-24', '2001-04-24', 'Fan d\'oiseaux', 'Animaux', 'https://imgupscaler.com/fr'),
(5, 'adipisicing', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio quis necessitatibus ipsum id molestias praesentium esse blanditiis, eius consequatur cumque autem velit, voluptatum itaque! Optio beatae voluptatem natus odio aspernatur.', 'tour_eiffel.jpg', '2023-09-10', '2023-09-10', 'Parisien en herbe', 'Monuments historiques', 'https://www.cutout.pro/fr/photo-enhancer-sharpener-upscaler'),
(6, 'Incidunt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt sint minus at ratione voluptas deleniti aperiam nihil quia dicta, suscipit recusandae officia sed dignissimos quasi ab similique odio, consequuntur dolorem!', 'voiture.webp', '2014-07-10', '2014-07-10', 'L\'automobiliste', 'Automobiles', 'https://www.akamai.com/fr/products/image-and-video-manager');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mail` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
