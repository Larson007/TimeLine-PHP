-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 13 avr. 2022 à 18:28
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
-- Base de données : `3wa_cours_timeline`
--

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `media` varchar(255) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `date_start` datetime NOT NULL,
  `date_end` datetime DEFAULT NULL,
  `timeline_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `events_timeline_id_foreign` (`timeline_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id`, `title`, `media`, `text`, `color`, `date_start`, `date_end`, `timeline_id`) VALUES
(1, 'Invasion de la Pologne', '1939polandinvasion.jpg', 'L’invasion de la Pologne, également connue sous le nom de campagne de septembre (en polonais : Kampania wrześniowa) ou guerre défensive de 1939 (en polonais : Wojna obronna 1939 roku) en Pologne, et campagne de Pologne (en allemand : Polenfeldzug) ou plan Blanc (en allemand : Fall Weiss) en Allemagne, est une opération militaire déclenchée par l\'Allemagne avec l\'appui de la ville libre de Dantzig et d\'un contingent slovaque, et par l\'Union soviétique, dans le but d\'envahir et de partager la Pologne. Cette offensive lancée par surprise provoque l\'entrée en guerre de la France et de la Grande-Bretagne puis fait basculer l\'Europe dans la Seconde Guerre mondiale.', NULL, '1939-09-01 00:00:00', NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tags`
--

INSERT INTO `tags` (`id`, `name`, `color`, `thumbnail`) VALUES
(1, 'Histoire', '#FECA72', 'tags_histoire.jpeg'),
(2, 'Guerre', '#C694E8', 'tags_guerre.jpg'),
(3, 'Mythologie', '#ee727a', 'tags_mythologie.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `tags_details`
--

DROP TABLE IF EXISTS `tags_details`;
CREATE TABLE IF NOT EXISTS `tags_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `color` varchar(255) DEFAULT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `timelines`
--

DROP TABLE IF EXISTS `timelines`;
CREATE TABLE IF NOT EXISTS `timelines` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `thumbnail` varchar(255) NOT NULL,
  `thumbnail_alt` varchar(255) NOT NULL,
  `date_start` datetime DEFAULT NULL,
  `date_end` datetime DEFAULT NULL,
  `rating` decimal(8,2) DEFAULT NULL,
  `validated` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `timelines_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `timelines`
--

INSERT INTO `timelines` (`id`, `title`, `description`, `created_at`, `thumbnail`, `thumbnail_alt`, `date_start`, `date_end`, `rating`, `validated`, `user_id`) VALUES
(1, 'La II Guerre mondiale', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam fringilla eros nec pharetra ultricies. Cras non consectetur nunc. Sed semper libero at condimentum condimentum. Etiam tempor velit sed est sagittis, vitae aliquet odio pretium. Aliquam consectetur vulputate justo quis maximus. Nulla lobortis porttitor ex, vitae sodales lorem finibus maximus. Cras varius vestibulum magna id posuere. Praesent rutrum tincidunt mauris sed faucibus. Curabitur non purus arcu.', '2022-04-12 11:14:00', 'ww2.jpg', 'vignette seconde guerre mondial', '1939-09-01 00:00:00', '1945-09-02 00:00:00', NULL, NULL, 1),
(2, 'La II Guerre mondiale', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam fringilla eros nec pharetra ultricies. Cras non consectetur nunc. Sed semper libero at condimentum condimentum. Etiam tempor velit sed est sagittis, vitae aliquet odio pretium. Aliquam consectetur vulputate justo quis maximus. Nulla lobortis porttitor ex, vitae sodales lorem finibus maximus. Cras varius vestibulum magna id posuere. Praesent rutrum tincidunt mauris sed faucibus. Curabitur non purus arcu.', '2022-04-12 11:14:00', 'ww2.jpg', 'vignette seconde guerre mondial', '1939-09-01 00:00:00', '1945-09-02 00:00:00', NULL, NULL, 1),
(3, 'Adela Barton', 'I will prosecute YOU.--Come, I\'ll take no denial; We must have imitated somebody else\'s hand,\' said the Caterpillar angrily, rearing itself upright as it left no mark on the door of the wood to listen. \'Mary Ann! Mary Ann!\' said the March Hare had just begun to think about stopping herself before she found herself in a tone of great relief. \'Now at OURS they had settled down again very sadly and.', '2022-04-12 19:06:47', 'ww2.jpg', 'descr img', '2022-04-12 18:14:00', NULL, NULL, NULL, 1),
(4, 'Malika Emmerich', 'CHAPTER II. The Pool of Tears \'Curiouser and curiouser!\' cried Alice hastily, afraid that it was over at last: \'and I wish you could see this, as she spoke. (The unfortunate little Bill had left off staring at the Gryphon replied very readily: \'but that\'s because it stays the same age as herself, to see the Queen. \'Their heads are gone, if it likes.\' \'I\'d rather finish my tea,\' said the White.', '2022-04-12 19:08:24', 'ww2.jpg', 'descr img', '2022-04-12 18:14:00', NULL, NULL, NULL, 1),
(5, 'TEST', 'CHORUS. (In which the cook had disappeared. \'Never mind!\' said the Hatter. This piece of evidence we\'ve heard yet,\' said the Lory. Alice replied in an offended tone. And the moral of that is--\"The more there is of yours.\"\' \'Oh, I BEG your pardon!\' cried Alice (she was rather doubtful whether she ought to be said. At last the Mock Turtle, \'they--you\'ve seen them, of course?\' \'Yes,\' said Alice.', '2022-04-12 19:39:22', '1939polandinvasion.jpg', 'descr img', '2022-04-12 18:14:00', NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `timeline_tag`
--

DROP TABLE IF EXISTS `timeline_tag`;
CREATE TABLE IF NOT EXISTS `timeline_tag` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tag_id` int(11) NOT NULL,
  `timeline_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `timeline_tag_tag_id_index` (`tag_id`),
  KEY `timeline_tag_timeline_id_index` (`timeline_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `timeline_tag`
--

INSERT INTO `timeline_tag` (`id`, `tag_id`, `timeline_id`) VALUES
(4, 1, 1),
(5, 1, 2),
(6, 2, 3),
(7, 2, 4),
(8, 3, 5),
(9, 1, 5),
(10, 2, 5);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'admin', 'admin@admin.fr', 'admin', 1),
(2, 'test', 'test@test.fr', 'admin', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
