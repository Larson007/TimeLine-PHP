-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 20 avr. 2022 à 20:53
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
  `thumbnail` varchar(255) DEFAULT NULL,
  `thumbnail_alt` varchar(255) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `date_start` varchar(45) NOT NULL,
  `date_end` varchar(45) DEFAULT NULL,
  `timeline_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `events_timeline_id_foreign` (`timeline_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id`, `title`, `thumbnail`, `thumbnail_alt`, `text`, `color`, `date_start`, `date_end`, `timeline_id`) VALUES
(2, 'TEST EVENT 01', 'TESTEVENT01_1650462589.png', '', 'Gryphon. \'Then, you know,\' said Alice, surprised at her side. She was moving them about as she could, for her neck kept getting entangled among the branches, and every now and then added them up, and began to repeat it, but her head made her feel very sleepy and stupid), whether the pleasure of making a daisy-chain would be the best way to explain the paper. \'If there\'s no use their putting.', NULL, '01/01/2000', '12/10/2021', 32),
(4, 'test event 02', 'testevent02_1650466327.png', '', 'Mock Turtle. Alice was silent. The King and the baby violently up and down, and was suppressed. \'Come, that finished the goose, with the words came very queer indeed:-- \'\'Tis the voice of thunder, and people began running when they had settled down again, the Dodo said, \'EVERYBODY has won, and all that,\' said the March Hare. Visit either you like: they\'re both mad.\' \'But I don\'t keep the same.', NULL, '15/02/2020', '', 32),
(5, '01 event id different', NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec cursus dui ante, id varius massa iaculis id. Nulla et dolor eu leo pellentesque consectetur. Praesent viverra scelerisque lorem non facilisis. Cras eu nisl id leo egestas aliquet. Quisque interdum lobortis lobortis. Vestibulum egestas euismod purus, id fringilla odio facilisis sed. Aliquam dignissim in tortor in tempus. Praesent fermentum mauris vitae egestas auctor. Sed tincidunt tincidunt lectus, eu porta mauris pharetra sed. Ut sed pellentesque nulla. Fusce condimentum, massa non cursus pretium, sem purus vehicula est, sed feugiat nibh eros quis dui. Suspendisse dapibus est orci, a vestibulum nunc pellentesque id. Sed non metus ex. Phasellus pellentesque non sapien non tincidunt. Nullam interdum, odio sed cursus dignissim, massa augue consectetur tortor, sit amet rhoncus ipsum turpis vel justo. Aenean blandit tortor sollicitudin rutrum sodales.', NULL, '01/09/2023', NULL, 1),
(6, '02 event id different', NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec cursus dui ante, id varius massa iaculis id. Nulla et dolor eu leo pellentesque consectetur. Praesent viverra scelerisque lorem non facilisis. Cras eu nisl id leo egestas aliquet. Quisque interdum lobortis lobortis. Vestibulum egestas euismod purus, id fringilla odio facilisis sed. Aliquam dignissim in tortor in tempus. Praesent fermentum mauris vitae egestas auctor. Sed tincidunt tincidunt lectus, eu porta mauris pharetra sed. Ut sed pellentesque nulla. Fusce condimentum, massa non cursus pretium, sem purus vehicula est, sed feugiat nibh eros quis dui. Suspendisse dapibus est orci, a vestibulum nunc pellentesque id. Sed non metus ex. Phasellus pellentesque non sapien non tincidunt. Nullam interdum, odio sed cursus dignissim, massa augue consectetur tortor, sit amet rhoncus ipsum turpis vel justo. Aenean blandit tortor sollicitudin rutrum sodales.', NULL, '10/09/2023', NULL, 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tags`
--

INSERT INTO `tags` (`id`, `name`, `color`, `thumbnail`) VALUES
(1, 'Histoire', '#FECA72', 'tags_histoire.jpeg'),
(2, 'Guerre', '#C694E8', 'tags_guerre.jpg'),
(3, 'Mythologie', '#ee727a', 'tags_mythologie.jpg'),
(4, 'Astronomie', '#000000', 'tags_astronomie.png'),
(5, 'Personnages Historiques', '#a54040', 'tags_personnages_historique.jpg'),
(6, 'Sciences', '#000000', 'tags_science.jpg'),
(24, 'Jeux Vidéo', '#edda07', 'JeuxVidéo_1650449500.jpeg'),
(25, 'Médecine', '#3a6acb', 'Médecine_1650486816.jpeg');

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
  `date_start` varchar(45) DEFAULT NULL,
  `date_end` varchar(45) DEFAULT NULL,
  `rating` decimal(8,2) DEFAULT NULL,
  `validated` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `timelines_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `timelines`
--

INSERT INTO `timelines` (`id`, `title`, `description`, `created_at`, `thumbnail`, `thumbnail_alt`, `date_start`, `date_end`, `rating`, `validated`, `user_id`) VALUES
(1, 'La II Guerre mondiale', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam fringilla eros nec pharetra ultricies. Cras non consectetur nunc. Sed semper libero at condimentum condimentum. Etiam tempor velit sed est sagittis, vitae aliquet odio pretium. Aliquam consectetur vulputate justo quis maximus. Nulla lobortis porttitor ex, vitae sodales lorem finibus maximus. Cras varius vestibulum magna id posuere. Praesent rutrum tincidunt mauris sed faucibus. Curabitur non purus arcu.', '2022-04-12 11:14:00', 'ww2.jpg', 'vignette seconde guerre mondial', '01/09/1939', '02/09/1945', NULL, NULL, 1),
(26, 'Zeus', 'Zeus (en grec ancien Ζεύς / Zeús) est le dieu suprême dans la mythologie grecque. Fils du titan Cronos et de la titanide Rhéa, marié à sa sœur Héra1, il a engendré, avec cette déesse et avec d\'autres, plusieurs dieux et déesses, et, avec des mortelles, de nombreux héros, comme le conte la théogonie d\'Hésiode (viiie siècle av. J.-C.)2.\r\n\r\nZeus est fréquemment représenté par des artistes grecs dans l\'une des deux poses suivantes : debout, s\'avançant avec un foudre dans sa main droite levée ou assis en majesté.', '2022-04-18 00:49:08', 'zeus.jpg', 'portait de Zeus', '-468', '', NULL, NULL, 1),
(27, 'Télescope HUBBLE', 'Hubble (en anglais : Hubble Space Telescope, en abrégé HST ou, rarement en français, TSH2) est un télescope spatial conçu par la NASA avec une participation de l\'Agence spatiale européenne, opérationnel depuis 1990. Son miroir de grande taille (2,4 m de diamètre), qui lui permet de restituer des images avec une résolution angulaire inférieure à 0,1 seconde d\'arc, ainsi que sa capacité à observer à l\'aide d\'imageurs et de spectroscopes dans l\'infrarouge proche et l\'ultraviolet, lui permettent de surclasser, pour de nombreux types d\'observation, les instruments au sol les plus puissants, handicapés par la présence de l\'atmosphère terrestre. Les données collectées par Hubble ont contribué à des découvertes de grande portée dans le domaine de l\'astrophysique, telles que la mesure du taux d\'expansion de l\'Univers, la confirmation de la présence de trous noirs supermassifs au centre des galaxies spirales, ou l\'existence de la matière noire et de l\'énergie noire.\r\n\r\nLe développement du télescope Hubble, qui tient son nom de l\'astronome Edwin Hubble, démarre au début des années 1970. Cependant, des problèmes de financement, de mise au point technique et la destruction de la navette spatiale Challenger repoussent son lancement jusqu\'en 1990. Une aberration optique particulièrement grave est découverte peu après qu\'il a été placé sur son orbite terrestre basse à 600 km d\'altitude. Dès le départ, le télescope spatial avait été conçu pour permettre des opérations de maintenance par des missions des navettes spatiales. La première de ces missions, en 1993, est mise à profit pour corriger l\'anomalie de sa partie optique. Quatre autres missions, en 1997, 1999, 2002 et 2009, permettent de moderniser les cinq instruments scientifiques et remplacer certains équipements défaillants ou devenus obsolètes. La dernière mission de maintenance, réalisée en 2009 par la mission STS-125, immédiatement avant le retrait définitif des navettes spatiales, doit permettre au télescope Hubble de fonctionner quelques années de plus, probablement jusqu\'en 2030. Pour les observations dans l\'infrarouge, il doit être remplacé en 2022 par le télescope spatial James-Webb, aux capacités supérieures.', '2022-04-18 00:58:07', 'hubble.png', 'télescope hubble', '29/04/1990', '', NULL, NULL, 1),
(28, 'Alexandre le Grand', 'Alexandre le Grand (en grec ancien : Ἀλέξανδρος ὁ Μέγας / Aléxandros ho Mégas ou Μέγας Ἀλέξανδρος / Mégas Aléxandros) ou Alexandre III (Ἀλέξανδρος Γ\' / Aléxandros III), né le 21 juillet 356 av. J.-C. à Pella et mort le 11 juin 323 av. J.-C. à Babylone, est un roi de Macédoine et l\'un des personnages les plus célèbres de l\'Antiquité. Fils de Philippe II, élève d\'Aristote et roi de Macédoine à partir de 336, il devient l\'un des plus grands conquérants de l\'histoire en prenant possession de l\'immense empire perse et en s\'avançant jusqu\'aux rives de l\'Indus.\r\n\r\nAprès l\'assassinat de Philippe, Alexandre hérite d\'un royaume puissant et d\'une armée expérimentée. Reprenant le projet panhellénique de son père, il réunit la Macédoine et des cités grecques dans une coalition afin d\'envahir l\'empire perse. En 334, il débarque en Asie, démarrant une campagne qui dure dix ans. Il remporte une première victoire contre les satrapes perses au Granique qui lui offre l\'Anatolie. Puis en 333, il défait le roi Darius III à Issos. Il entreprend la conquête de la Phénicie et marche jusqu\'en Égypte où il est proclamé pharaon. La victoire à Gaugamèles en 331 lui offre la totalité de l\'empire perse. Il mène ensuite une campagne contre les généraux perses insoumis et s\'avance jusqu\'au pays des Scythes. Il dirige enfin une dernière campagne au Pendjab et dans la vallée de l\'Indus (Pakistan actuel) durant laquelle il remporte la bataille de l\'Hydaspe ; mais en 326 ses soldats refusent d\'avancer plus loin. Il meurt en 323 à Babylone probablement de maladie, à l\'âge de trente-deux ans, avant d\'avoir pu mener à bien ses projets de conquête de l\'Arabie.\r\n\r\nRoi-bâtisseur, Alexandre a fondé une vingtaine de cités, la plus importante étant Alexandrie d\'Égypte, et a implanté des colonies jusqu\'aux confins de l\'Asie, étendant notablement l\'influence de l\'hellénisme. Il se place dans la continuité des souverains achéménides et cherche à assimiler les élites asiatiques avec pour objectif d\'assurer la pérennité de l\'empire qu\'il a créé, comme en témoigne notamment son mariage avec une princesse de Bactriane, Roxane. Son empire est partagé à sa mort entre ses principaux généraux, les Diadoques, qui forment à la fin du ive siècle av. J.-C. les différents royaumes de la période hellénistique.\r\n\r\nL\'immense postérité d\'Alexandre à travers l\'histoire, les cultures et les religions s\'explique par l\'ampleur de ses victoires militaires, par sa volonté de conquête de l\'ensemble du monde connu et par sa personnalité empreinte de philosophie mais aussi de démesure. Son épopée suscite dès l\'Antiquité de nombreuses publications littéraires. Néanmoins les écrits des historiens contemporains des événements ont tous disparu ; seuls subsistent de nos jours leurs abréviateurs, dont certains sont à l\'origine des légendes le concernant. Parmi ses récits légendaires, le Roman d\'Alexandre occupe une place à part ; issu des écrits du Pseudo-Callisthène, il mêle l\'histoire et le fantastique pour devenir l\'un des ouvrages non religieux les plus lus au Moyen Âge, en Occident comme en Orient.\r\n\r\nDès le règne d\'Alexandre se construit un mythe qui le présente comme un héros divinisé. Cette renommée, malgré des critiques eu égard à ses excès ou à sa cruauté, dépasse ensuite les frontières du monde grec pour prendre place parmi les écrits des religions monothéistes. Dans la Rome antique, il est considéré comme un modèle pour nombre de généraux et d\'empereurs. Dans l\'Empire byzantin, il bénéficie d\'une grande popularité dans tous les milieux sociaux et représente l\'idéal du souverain, tout en connaissant une forme de christianisation. Dans l\'Europe médiévale, il est vu comme un exemple de vertus chevaleresques au travers du Roman d\'Alexandre. À l\'époque moderne, il est un temps un modèle pour Louis XIV. Au siècle des Lumières, il apparaît comme celui qui a étendu la civilisation européenne et ouvert le commerce entre l\'Europe et l\'Asie. À l\'époque contemporaine, il inspire la volonté d\'indépendance des Grecs et devient le modèle du « conquérant-civilisateur » pour les promoteurs de la colonisation européenne. En Asie, il bénéficie d\'une grande postérité sous le nom d\'Iskandar (ou Iskander). Enfin, il est représenté dans de nombreuses œuvres d\'art de l\'Antiquité jusqu\'à nos jours.', '2022-04-18 01:10:33', 'Alexandre_le_grand.jpg', 'portait d\'alexandre le grand', '336 av. J.-C.', '11 juin 323 av. J.-C.', NULL, NULL, 1),
(30, 'Napoléon Bonaparte', 'Napoléon Bonaparte, né le 15 août 1769 à Ajaccio et mort le 5 mai 1821 sur l\'île Sainte-Hélène, est un militaire et homme d\'État français, premier empereur des Français du 18 mai 1804 au 6 avril 1814 et du 20 mars au 22 juin 1815, sous le nom de Napoléon Ier.\r\n\r\nSecond enfant de Charles Bonaparte et Letizia Ramolino, Napoléon Bonaparte devient en 1793 général dans les armées de la Première République française, née de la Révolution, où il est notamment commandant en chef de l\'armée d\'Italie puis de l\'armée d\'Orient. Arrivé au pouvoir en 1799 par le coup d\'État du 18 Brumaire, il est Premier consul — consul à vie à partir du 2 août 1802 — jusqu\'au 18 mai 1804, date à laquelle l\'Empire est proclamé par un sénatus-consulte suivi d\'un plébiscite. Il est sacré empereur, en la cathédrale Notre-Dame de Paris, le 2 décembre 1804, par le pape Pie VII, en même temps que son épouse Joséphine de Beauharnais.', '2022-04-18 20:29:07', 'bonaparte.jpg', 'Image de la timeline Napoléon Bonaparte', '15/08/1769', '05/05/1821', NULL, NULL, 1),
(31, 'Harum explicabo Et ', 'Perspiciatis ut cum', '2022-04-19 12:01:47', '', 'Vignette de la timeline Harum explicabo Et ', '10-Dec-1998', '23-Sep-1980', NULL, NULL, 1),
(32, 'Albert Einstein', 'Albert Einstein né le 14 mars 1879 à Ulm, dans le Wurtemberg, et mort le 18 avril 1955 à Princeton, dans le New Jersey, est un physicien théoricien. Il fut successivement allemand, apatride, suisse et de double nationalité helvético-américaine. Il épousa Mileva Marić, puis sa cousine Elsa Einstein.', '2022-04-19 14:26:57', 'Albert_Einstein.jpg', 'Vignette de la timeline Albert Einstein', '14/03/1879', '18/04/1955', NULL, NULL, 1),
(43, 'Les antibiotiques', 'I should be free of them with large eyes like a frog; and both creatures hid their faces in their mouths--and they\'re all over crumbs.\' \'You\'re wrong about the crumbs,\' said the King. (The jury all looked puzzled.) \'He must have imitated somebody else\'s hand,\' said the Mock Turtle. \'Seals, turtles, salmon, and so on; then, when you\'ve cleared all the children she knew, who might do something.', '2022-04-20 22:34:11', 'Lesantibiotiques_1650486851.jpeg', 'Vignette de la timeline Les antibiotiques', '1930', '', NULL, NULL, 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `timeline_tag`
--

INSERT INTO `timeline_tag` (`id`, `tag_id`, `timeline_id`) VALUES
(27, 1, 1),
(28, 2, 1),
(29, 3, 26),
(30, 4, 27),
(31, 5, 28),
(32, 1, 28),
(33, 5, 29),
(34, 5, 30),
(35, 1, 30),
(36, 2, 31),
(37, 1, 31),
(38, 6, 32),
(39, 5, 32),
(40, 6, 33),
(41, 6, 34),
(42, 4, 34),
(43, 3, 34),
(44, 2, 34),
(45, 1, 34),
(46, 6, 35),
(47, 5, 35),
(48, 4, 35),
(49, 3, 35),
(50, 2, 35),
(51, 1, 35),
(52, 6, 36),
(53, 5, 36),
(54, 4, 36),
(55, 3, 36),
(56, 2, 36),
(57, 1, 36),
(58, 6, 37),
(59, 5, 37),
(60, 4, 37),
(61, 3, 37),
(62, 2, 37),
(63, 1, 37),
(64, 24, 38),
(65, 24, 39),
(66, 6, 40),
(67, 1, 41),
(68, 1, 42),
(69, 25, 43);

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
  `admin` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `admin`) VALUES
(1, 'admin', 'admin@admin.fr', '$2y$10$2QtOqSFY41HhJQ5KnJbuKu08/RdkrJA7jK3ATgjgP16OaGLskNGFi', 1),
(2, 'test', 'test@test.fr', 'admin', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
