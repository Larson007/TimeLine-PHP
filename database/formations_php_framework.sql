-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 11 avr. 2022 à 14:07
-- Version du serveur : 10.4.10-MariaDB
-- Version de PHP : 8.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `formations_php_framework`
--

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `created_at`) VALUES
(1, 'Mon premier article', 'Nunc vel libero ac nisi molestie interdum. Quisque quis nibh eget neque congue commodo a sed mauris. Proin vitae lectus at ipsum volutpat lobortis quis sed est. Vivamus lacinia molestie bibendum. Proin eu vulputate nulla. Maecenas pulvinar porttitor mi, at cursus dui. Duis ante est, efficitur quis faucibus ac, pulvinar in augue. Duis vitae lacinia lacus, nec elementum sem. Vivamus in suscipit dui. Sed molestie arcu eget mauris ornare, et ornare ipsum suscipit. Cras nec convallis massa. Vivamus lacinia, nunc non tincidunt porta, arcu leo pharetra magna, eget porta sapien tortor et nisi. Proin rutrum, ante vitae mattis mattis, mi nibh molestie nisl, quis gravida libero turpis sed risus. Donec id velit tincidunt, auctor lorem in, pretium urna.\r\n\r\n', '2022-03-02 09:39:44'),
(2, 'Mon deuxième articles (edited)', 'Cette article a été édité une seconde fois avec les tags\r\n', '2022-03-23 11:40:20'),
(7, 'Nouvelle article Create en crud (edited)', 'Illo proident quis ', '2022-04-08 20:18:38');

-- --------------------------------------------------------

--
-- Structure de la table `post_tag`
--

DROP TABLE IF EXISTS `post_tag`;
CREATE TABLE IF NOT EXISTS `post_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_post_tag_posts` (`post_id`),
  KEY `FK2_post_tag_tags` (`tag_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `post_tag`
--

INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`) VALUES
(1, 1, 1),
(13, 2, 4),
(14, 2, 3),
(16, 7, 4),
(17, 7, 3);

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`) VALUES
(1, 'PHP', '2022-04-07 18:27:13'),
(2, 'JS', '2022-04-07 18:28:13'),
(3, 'HTML/CSS', '2022-04-07 18:29:05'),
(4, 'PYTHON', '2022-04-07 18:30:05');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `admin` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `admin`) VALUES
(1, 'admin', '$2y$10$2QtOqSFY41HhJQ5KnJbuKu08/RdkrJA7jK3ATgjgP16OaGLskNGFi', 1),
(2, 'test', '$2y$10$VymBORnDUT77.e3gefVEteKyOBYo5gtuukG3jSgTP2j446z4WW2Zi', 0);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `post_tag`
--
ALTER TABLE `post_tag`
  ADD CONSTRAINT `FK2_post_tag_tags` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_post_tag_posts` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
