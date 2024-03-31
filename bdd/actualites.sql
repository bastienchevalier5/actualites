-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 31 mars 2024 à 19:12
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
-- Base de données : `actualites`
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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `actualités`
--

INSERT INTO `actualités` (`id`, `titre`, `contenu`, `image`, `publication`, `modification`, `auteur`, `tag`, `source`) VALUES
(1, 'Bye bye Astérix', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio quis necessitatibus ipsum id molestias praesentium esse blanditiis, eius consequatur cumque autem velit, voluptatum itaque! Optio beatae voluptatem natus odio aspernatur.', 'images/asterix.jpg', '2024-02-28', '2024-02-28', 'Monsieur Mystère', 'Bande dessinée - People', 'https://www.aquitaineonline.com/1190-dessin-actualites-humour-marc-large.html'),
(2, 'Ipsum', 'L\'oeil futuriste !!!!!!!!!!!!!!', 'images/actu2.jpg', '2015-02-09', '2015-02-09', 'L\'oeil', 'vue - vision', 'https://www.istockphoto.com/fr/bot-wall?returnUrl=%2Ffr%2Fphotos%2Fle-futur'),
(3, 'Dolor', 'Ceci est le contenu de la 3ème actualité', 'images/actu3.jpg', '2019-06-25', '2019-06-25', 'L\'écolo', 'Nature', 'https://pixabay.com/search/tree/'),
(4, 'consectetur', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio quis necessitatibus ipsum id molestias praesentium esse blanditiis, eius consequatur cumque autem velit, voluptatum itaque! Optio beatae voluptatem natus odio aspernatur.', 'images/oiseau.webp', '2001-04-24', '2001-04-24', 'Fan d\'oiseaux', 'Animaux', 'https://imgupscaler.com/fr'),
(5, 'adipisicing', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio quis necessitatibus ipsum id molestias praesentium esse blanditiis, eius consequatur cumque autem velit, voluptatum itaque! Optio beatae voluptatem natus odio aspernatur.', 'images/tour_eiffel.jpg', '2023-09-10', '2023-09-10', 'Parisien en herbe', 'Monuments historiques', 'https://www.cutout.pro/fr/photo-enhancer-sharpener-upscaler'),
(6, 'Incidunt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt sint minus at ratione voluptas deleniti aperiam nihil quia dicta, suscipit recusandae officia sed dignissimos quasi ab similique odio, consequuntur dolorem!', 'images/voiture.webp', '2014-07-10', '2014-07-10', 'L\'automobiliste', 'Automobiles', 'https://www.akamai.com/fr/products/image-and-video-manager');

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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `prenom`, `mail`) VALUES
(9, 'Chevalier', 'Bastien', 'chevalierbastien770@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `categorie_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categorie_id` (`categorie_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `menu`
--

INSERT INTO `menu` (`id`, `nom`, `categorie_id`) VALUES
(1, 'Sport\r\n', NULL),
(2, 'football', 1),
(3, 'ski nordique', 1),
(4, 'actualites', NULL),
(5, 'politique', 4);

-- --------------------------------------------------------

--
-- Structure de la table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `image` text NOT NULL,
  `tags` varchar(255) NOT NULL,
  `publication` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `pages`
--

INSERT INTO `pages` (`id`, `titre`, `contenu`, `image`, `tags`, `publication`) VALUES
(2, 'Le transfert du siècle!', 'Le plus gros transfert de tout les temps.', 'images/transfert.jpg', 'football - argent', '2024-03-31'),
(3, 'Premier titre national', 'Mathis Desloges fête son premier titre national', 'images/titre_national.jpg', 'Ski nordique - Championnat de France - Etoile des Saisies - Mathis Desloges', '2024-03-31'),
(5, 'Poutine-Macron : le face-à-face des présidents ', 'Alors que la guerre en Ukraine semble s\'éterniser, on revient sur la genèse des relations diplomatiques entre les présidents russe et français, qui ont tourné au face-à-face. ', 'images/politique.avif', 'politique - France - Ukraine - Russie', '2024-03-31');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
