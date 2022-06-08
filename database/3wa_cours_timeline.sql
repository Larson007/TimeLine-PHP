-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 08 juin 2022 à 12:23
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
  `year` int(25) NOT NULL,
  `month` int(2) DEFAULT NULL,
  `day` int(2) DEFAULT NULL,
  `date_bc` tinyint(1) DEFAULT NULL,
  `timeline_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `events_timeline_id_foreign` (`timeline_id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id`, `title`, `thumbnail`, `thumbnail_alt`, `text`, `color`, `year`, `month`, `day`, `date_bc`, `timeline_id`) VALUES
(36, 'Jeunesse et éducation', 'Jeunesseetéducation_1652364323.gif', 'Image de l\'event Jeunesse et éducation', 'Alexandre est né à Pella, la capitale du royaume de Macédoine, le 20 ou le 21 juillet 356 av. J.-C.N 11. Il est le fils du roi de Macédoine Philippe II, de la dynastie des Argéades, et d\'Olympias, sa troisième épouse, princesse d’Épire de la dynastie des Éacides. Par sa mère, il est donc le neveu d\'Alexandre le Molosse, roi d\'Épire. Sa mère donnera naissance en 355 à une fille Cléopâtre. Par son père, Alexandre prétend descendre de Téménos d\'Argos, lui-même supposément descendant d\'Héraclès, fils de Zeus. Par sa mère, Alexandre affirme descendre de Néoptolème, fils d’Achille.', NULL, 356, 7, 20, 1, 63),
(37, 'Temporibus ut tenetu', 'Temporibusuttenetu_1652702411.webp', 'Vignette de la timeline Temporibus ut tenetu', 'Alexandre est né à Pella, la capitale du royaume de Macédoine, le 20 ou le 21 juillet 356 av. J.-C.N 11. Il est le fils du roi de Macédoine Philippe II, de la dynastie des Argéades, et d\'Olympias, sa troisième épouse, princesse d’Épire de la dynastie des Éacides. Par sa mère, il est donc le neveu d\'Alexandre le Molosse, roi d\'Épire. Sa mère donnera naissance en 355 à une fille Cléopâtre. Par son père, Alexandre prétend descendre de Téménos d\'Argos, lui-même supposément descendant d\'Héraclès, fils de Zeus. Par sa mère, Alexandre affirme descendre de Néoptolème, fils d’Achille. test test test test test test test test test test test test test test test test test test test test test...', NULL, 301, 12, 3, 1, 63),
(39, 'Bataille de Gaugamèles', 'BatailledeGaugamèles_1654088217.webp', 'Vignette de la timeline Bataille de Gaugamèles', 'La bataille de Gaugamèles, est l\'affrontement décisif entre l\'armée d\'Alexandre le Grand et celle de Darius III. Lors de cette bataille, considérée comme l\'une des plus importantes de l\'Antiquité par les forces impliquées, le royaume de Macédoine vainc définitivement l\'Empire perse. Cette bataille est parfois, quelque peu abusivement, appelée bataille d\'Arbèles en référence à la cité d\'Arbèles (Erbil dans le Kurdistan actuel), située à 100 km environ du champ de bataille.', NULL, 331, 10, 1, 1, 66),
(40, 'Bataille d\'Issos', 'Batailled\'Issos_1654088284.webp', 'Vignette de la timeline Bataille d\'Issos', 'La bataille d\'Issos s\'est déroulée le 1er novembre 333 av. J.-C. dans l\'antique Cilicie. Elle oppose l\'armée d\'Alexandre le Grand à celle de Darius III. L\'armée macédonienne remporte une victoire décisive sur l\'armée perse commandée par Darius en personne. Cette bataille voit la victoire d\'Alexandre qui peut poursuivre sa conquête vers la Phénicie puis l\'Égypte.', NULL, 333, 11, 1, 1, 66),
(41, 'Bataille de l\'Hydaspe', 'Batailledel\'Hydaspe_1654089312.webp', 'Vignette de la timeline Bataille de l\'Hydaspe', 'La bataille de l\'Hydaspe oppose Alexandre le Grand à Poros, raja indien du royaume de Paurava, en juillet 326 av. J.-C. sur les rives de l\'Hydaspe (ou Hydaspes), la Jhelum moderne, sur le territoire actuel du Pakistan. Les soldats macédoniens sont confrontés pour la première fois à un nombre important d\'éléphants de guerre.', NULL, 326, 7, NULL, 1, 66),
(42, 'Bataille du Granique', 'BatailleduGranique_1654089360.webp', 'Vignette de la timeline Bataille du Granique', 'La bataille du Granique oppose en mai 334 av. J.-C. pour la première fois l\'armée macédonienne à l\'armée perse sur les rives du fleuve Granique (actuel Biga Çayı en Turquie). Alexandre le Grand remporte une victoire contre les satrapes perses qui lui ouvre les portes de l\'Asie Mineure. Cet affrontement est la première d\'une série de trois victoires des Macédoniens contre les Perses.', NULL, 334, 5, NULL, 1, 66),
(43, 'Campagne indienne', 'Campagneindienne_1654089451.webp', 'Vignette de la timeline Campagne indienne', 'La campagne indienne d\'Alexandre le Grand s\'est déroulée du printemps 326 au printemps 325 av. J.-C. Après avoir conquis l\'Empire achéménide, le roi de Macédoine lance une campagne dans le sous-continent indien (Pakistan actuel), dont une partie forme les territoires les plus orientaux de l\'empire perse depuis la fin du vie siècle av. J.-C. Cette campagne a pour objectif principal de soumettre le Pendjab du roi Poros, vaincu en juillet 326 à la bataille de l\'Hydaspe. Alexandre conquiert ensuite la vallée de l\'Indus pour finir par atteindre les rives de l\'océan Indien et entamer le retour vers Babylone où il meurt en juin 323.', NULL, 326, NULL, NULL, 1, 66),
(44, 'Les troupes allemandes envahissent la Pologne', 'LestroupesallemandesenvahissentlaPologne_1654686550.webp', 'Vignette de la timeline Les troupes allemandes envahissent la Pologne', 'Le 1er septembre 1939, les troupes allemandes envahissent la Pologne : infanterie et blindés allemands progressent rapidement au sein du territoire polonais, tandis que l\'aviation se livre au bombardement des villes et des sites stratégiques.', NULL, 1939, 9, 1, 0, 67),
(45, 'la France et le Royaume-Uni déclarent la guerre à l\'Allemagne', 'laFranceetleRoyaume-Unidéclarentlaguerreàl\'Allemagne_1654686831.webp', 'Vignette de la timeline la France et le Royaume-Uni déclarent la guerre à l\'Allemagne', 'Les hommes répondent sans joie mais avec détermination à l\'ordre de mobilisation. Certains pacifistes manifestent néanmoins leurs réticences, tel le député socialiste Marcel Déat qui publie le 4 mai 1939 un article intitulé : « Faut-il mourir pour Dantzig ? ».\r\n\r\nLa Wehrmacht ayant violé les frontières de la Pologne, Londres envoie un ultimatum à Berlin en suggérant une ultime conférence internationale ! Hitler dédaignant de répondre, la guerre est de facto déclarée à l\'expiration de l\'ultimatum, le 3 septembre à 11 heures. Le Président du Conseil français Édouard Daladier et son ministre des affaires étrangères Georges Bonnet demandent au président de la République Albert Lebrun ', NULL, 1939, 9, 3, 0, 67),
(46, 'La Norvège et le Danemark sont envahis par les Allemands', 'LaNorvègeetleDanemarksontenvahisparlesAllemands_1654687009.webp', 'Vignette de la timeline La Norvège et le Danemark sont envahis par les Allemands', 'Le 9 avril 1940, jour de l’invasion du Danemark et de la Norvège par les Allemands. \"L’opération Weser\", Weserübung en Allemand, du nom du fleuve allemand Weser, a commencé tôt, en ce matin du 9 avril : les troupes de Hitler sont entrées en Norvège à 2 h 15 du matin, et au Danemark à 5 h 20. Pour contrecarrer, à titre préventif, une prévisible intervention franco-britannique, envisagée, dès son entrée en fonctions, par le nouveau président du Conseil français, Paul Reynaud. N’oubliez pas qu’à l’époque la guerre est déclarée entre France, Angleterre et Allemagne depuis déjà huit longs mois, une veille armée sans offensive que l’on appelle \"la drôle de guerre\". Du point de vue de ', NULL, 1940, 4, 9, 0, 67),
(47, 'La bataille de France', 'LabatailledeFrance_1654687581.webp', 'Vignette de la timeline La bataille de France', 'ou campagne de France désigne l\'invasion des Pays-Bas, de la Belgique, du Luxembourg et de la France, par les forces du Troisième Reich, pendant la Seconde Guerre mondiale. L\'offensive débute le 10 mai 1940, mettant fin à la « drôle de guerre ». Après la percée allemande de Sedan et une succession de reculs des armées britannique, française et belge, ponctuées par les batailles de la Dyle, de Gembloux, de Hannut, de la Lys et de Dunkerque, elle se termine par la retraite des troupes britanniques et la demande d\'armistice du gouvernement français, qui est signé le 22 juin, les militaires ayant refusé la capitulation.', NULL, 1940, 5, 10, 0, 67),
(48, 'Appel du 18 Juin', 'Appeldu18Juin_1654687923.webp', 'Vignette de la timeline Appel du 18 Juin', 'prononcé par le général de Gaulle à la radio de Londres, sur les ondes de la BBC. Ce texte est un appel à tous les militaires, ingénieurs ou ouvriers français spécialistes de l\'armement qui se trouvent en territoire britannique à se mettre en rapport avec lui pour continuer le combat contre l\'Allemagne et où il prédit la mondialisation de la guerre. Ce discours, très peu entendu sur le moment, a donné lieu à la publication le lendemain dans le Times et le Daily Express de la version écrite issue du Ministry of Information (MOI), reprise par quelques journaux français. Il est considéré comme le texte fondateur de la Résistance française, dont il demeure le symbole.', NULL, 1940, 6, 18, 0, 67),
(49, 'Armistice franco-allemande', 'Armisticefranco-allemande_1654688067.webp', 'Vignette de la timeline Armistice franco-allemande', 'L’armistice du 22 juin 1940 est une convention signée en forêt de Compiègne entre le Troisième Reich allemand, représenté par le général Keitel, et le dernier Gouvernement de la Troisième République, dirigé par le maréchal Philippe Pétain et représenté par le Général Huntziger, afin de suspendre les hostilités ouvertes par la déclaration de guerre de la France envers l\'Allemagne le 3 septembre 1939, marquées notamment par la bataille de France déclenchée le 10 mai 1940, la fuite de l\'armée anglaise et son rembarquement à Dunkerque à partir du 26 mai 1940 et la chute de Paris, déclarée ville ouverte le 14 juin.', NULL, 1940, 6, 22, 0, 67),
(50, 'Manifestation contre l’armistice à Paris', 'Manifestationcontrel’armisticeàParis_1654688158.webp', 'Vignette de la timeline Manifestation contre l’armistice à Paris', 'La manifestation du 11 novembre 1940 est une manifestation de lycéens et d\'étudiants ayant eu lieu à Paris, sur les Champs-Élysées et devant l\'arc de triomphe de l\'Étoile en commémoration de l\'armistice du 11 novembre 1918. Rassemblant plusieurs milliers de personnes et durement réprimée par les occupants nazis, elle est considérée comme un des tout premiers actes publics de résistance à l\'occupant en France après l\'armistice du 22 juin 1940 et l\'appel du 18 Juin.', NULL, 1940, 11, 11, 0, 67),
(51, 'Opération Barbarossa', 'OpérationBarbarossa_1654688399.webp', 'Vignette de la timeline Opération Barbarossa', 'L’opération Barbarossa, nommée en référence à l\'empereur Frédéric Barberousse, est le nom de code désignant l\'invasion par le IIIe Reich de l\'Union soviétique pendant la Seconde Guerre mondiale, à partir du 22 juin 1941, et le début du front de l\'Est qui sera le plus grand théâtre d\'opérations de la Seconde Guerre mondiale. L\'opération Barbarossa est la plus grande invasion de l’histoire militaire en termes d’effectifs engagés et de pertes3 : près de quatre millions de soldats de l’Axe pénètrent en Union soviétique. En plus des troupes, l’opération Barbarossa a mobilisé 600 000 véhicules et 600 000 chevaux.', NULL, 1941, 6, 22, 0, 67),
(52, 'Attaque de Pearl Harbor', 'AttaquedePearlHarbor_1654688523.webp', 'Vignette de la timeline Attaque de Pearl Harbor', 'L’attaque de Pearl Harbor est une attaque surprise menée par les forces aéronavales japonaises le 7 décembre 1941 contre la base navale américaine de Pearl Harbor située sur l’île d’Oahu, dans le territoire américain d’Hawaï. Autorisée par l\'empereur du Japon Hirohito, elle vise à détruire la flotte du Pacifique de l’United States Navy. Cette attaque provoque l\'entrée des États-Unis dans le conflit mondial.', NULL, 1941, 12, 7, 0, 67),
(53, 'Bataille de Midway', 'BatailledeMidway_1654688803.webp', 'Vignette de la timeline Bataille de Midway', 'La bataille de Midway est un engagement aéronaval majeur et décisif de la Seconde Guerre mondiale qui oppose les marines du Japon et des États-Unis. Elle se déroula dans les premiers jours de juin 1942 au large des Îles Midway, lors de la guerre du Pacifique. La bataille fut livrée alors que le Japon avait atteint, six mois après son entrée en guerre déclenchée par l\'attaque de Pearl Harbor, l\'ensemble de ses objectifs de conquête. L\'objectif de la bataille navale, provoquée par le Japon, était d\'éliminer les forces aéronavales américaines qui constituaient une menace pour les conquêtes japonaises dans le Pacifique.', NULL, 1942, 6, 4, 0, 67),
(54, 'Rafle du Vélodrome d\'Hiver', 'RafleduVélodromed\'Hiver_1654688919.webp', 'Vignette de la timeline Rafle du Vélodrome d\'Hiver', 'souvent appelée « rafle du Vél\'d\'Hiv » est la plus grande arrestation massive de Juifs réalisée en France pendant la Seconde Guerre mondiale. Entre les 16 et 17 juillet 1942, plus de treize mille personnes, dont près d\'un tiers d\'enfants, sont arrêtées avant d\'être détenues au Vélodrome d\'Hiver1 — dans des conditions d\'hygiène déplorables et presque sans eau ni nourriture pendant cinq jours —, mais aussi dans d\'autres camps. Ils sont ensuite envoyés par trains de la mort vers le camp d\'extermination d\'Auschwitz. Moins d\'une centaine d\'adultes en reviendront.', NULL, 1942, 7, 16, 0, 67),
(55, 'Bataille de Stalingrad', 'BatailledeStalingrad_1654689248.webp', 'Vignette de la timeline Bataille de Stalingrad', 'La bataille de Stalingrad est la succession des combats qui, du 17 juillet 1942 au 2 février 1943, ont opposé les forces de l\'URSS à celles du Troisième Reich et de ses alliés pour le contrôle de la ville de Stalingrad. Cette bataille s\'est déroulée en quatre phases : l\'approche de la ville par les armées de l’Axe de juillet à septembre 1942, les combats urbains pour son contrôle de septembre 1942 à novembre 1942, puis la contre-offensive soviétique, jusqu\'à l\'encerclement et à la reddition des troupes allemandes fin janvier-début février 1943.', NULL, 1942, 7, 17, 0, 67),
(56, 'Opération Torch', 'OpérationTorch_1654689352.webp', 'Vignette de la timeline Opération Torch', 'L\'opération Torch est le nom de code donné au débarquement des Alliés le 8 novembre 1942 en Afrique du Nord (Maroc et Algérie).\r\n\r\nLa prise d\'Alger se fait en un jour grâce à la Résistance française, alors qu\'à Oran et au Maroc, les généraux du régime de Vichy accueillent les Alliés à coups de canon, tout en livrant la Tunisie (alors sous protectorat) aux Allemands sans aucune résistance, déclenchant ainsi la campagne de Tunisie. La reddition des troupes françaises vichystes au Maroc eut lieu le 11 novembre. Des sous-marins allemands, arrivés sur les lieux le jour du cessez-le-feu, menèrent ensuite des attaques devant Casablanca jusqu\'au 16 novembre.', NULL, 1942, 11, 8, 0, 67),
(57, 'Jean Moulin crée le CNR', 'JeanMoulincréeleCNR_1654689503.webp', 'Vignette de la timeline Jean Moulin crée le CNR', 'Le Conseil national de la Résistance (CNR) est l\'organisme qui dirige et coordonne les différents mouvements de la Résistance intérieure française pendant la Seconde Guerre mondiale, toutes tendances politiques comprises, à partir de la mi-1943.\r\n\r\nIl est composé de représentants des dits mouvements, de syndicats et de partis politiques hostiles au gouvernement de Vichy.\r\n\r\nSon programme, adopté en mars 1944, prévoit un « plan d\'action immédiat » (c\'est-à-dire des actions de résistance), mais aussi des « mesures à appliquer dès la libération du territoire », une liste de réformes sociales et économiques.', NULL, 1943, 5, NULL, 0, 67),
(58, 'Débarquement de Normandie', 'DébarquementdeNormandie_1654689756.webp', 'Vignette de la timeline Débarquement de Normandie', 'à l\'aube, une armada de 4266 navires de transport et 722 navires de guerre s\'approche des côtes normandes. Elle s\'étale sur un front de 35 kilomètres et transporte pas moins de 130 000 hommes, Britanniques, Étasuniens ou Canadiens pour la plupart. Plus de 10 000 avions la protègent. Baptisée du nom de code Overlord, cette opération aéronavale demeure la plus gigantesque de l\'Histoire, remarquable autant par les qualités humaines de ses participants que par les prouesses en matière d\'organisation logistique et d\'innovation industrielle et technique. Elle était attendue depuis plus d\'une année par tous les Européens qui, sur le continent, luttaient contre l\'occupation nazie.', NULL, 1944, 6, 6, 0, 67),
(59, 'Libération de Paris', 'LibérationdeParis_1654689987.webp', 'Vignette de la timeline Libération de Paris', 'La libération de Paris pendant la Seconde Guerre mondiale a eu lieu du 19 au 25 août 1944, marquant ainsi la fin de la bataille de Paris. Cet épisode a lieu dans le cadre de la Libération et met un terme à quatre années d\'occupation de la capitale française.', NULL, 1944, 8, 19, 0, 67),
(60, 'Conférence de Yalta', 'ConférencedeYalta_1654690110.webp', 'Vignette de la timeline Conférence de Yalta', 'En février 1945, la conférence de Yalta réunit Joseph Staline, Winston Churchill et Franklin D. Roosevelt, les trois grands vainqueurs de la Seconde Guerre mondiale débutée en septembre 1939. Le but premier de cette conférence est de régler les difficultés posées par la défaite imminente de l\'Allemagne nazie', NULL, 1945, 2, 4, 0, 67),
(61, 'Hitler se suicide', 'Hitlersesuicide_1654690199.webp', 'Vignette de la timeline Hitler se suicide', 'Dans le bunker où il s\'est réfugié, Hitler se suicide comme il l\'avait envisagé à plusieurs reprises dans sa carrière, en cas d\'échec. Cette fois, ce n\'était plus seulement d\'échec qu\'il s\'agissait, mais de ruine de tous ses rêves de domination.', NULL, 1945, 4, 30, 0, 67),
(62, 'Les Allemands capitulent', 'LesAllemandscapitulent_1654690451.webp', 'Vignette de la timeline Les Allemands capitulent', 'Le Troisième Reich s’effondre à la fin de la bataille de Berlin, le 2 mai 1945. La conquête de la capitale est symbolique, elle fera l’objet d’un compromis politique entre les alliés. Ainsi, conformément aux accords de Yalta, les troupes américaines arrêtent leur progression sur le front ouest. Ils laissent les Soviétiques pénétrer seuls dans Berlin.\r\nLe 7 mai, au quartier général des forces alliées à Reims, le général Jodl signe la reddition totale de toutes les forces allemandes. A 2h41 du matin, il reconnait ainsi la capitulation sans condition des forces allemandes.', NULL, 1945, 5, 8, 0, 67),
(63, 'Bombardements atomiques d\'Hiroshima et de Nagasaki', 'Bombardementsatomiquesd\'HiroshimaetdeNagasaki_1654690638.webp', 'Vignette de la timeline Bombardements atomiques d\'Hiroshima et de Nagasaki', 'ultimes bombardements stratégiques américains au Japon, ont lieu les 6 août et 9 août 1945 sur les villes d\'Hiroshima (340 000 habitants) et de Nagasaki (195 000 habitants). Hiroshima est le siège de la 5e division de la deuxième armée générale et le centre de commandement du général Shunroku Hata, et Nagasaki est choisie pour remplacer la cité historique de Kyoto. Le nombre de personnes tuées par l\'explosion, la chaleur et la tempête de feu consécutive est difficile à déterminer et seules des estimations sont disponibles, allant de 103 000 à 220 000 morts, sans compter les cas ultérieurs de cancers (plusieurs centaines) ou autres effets secondaires.', NULL, 1945, 8, 6, 0, 67),
(64, 'Le Japon capitule, fin de la seconde guerre mondiale', '_1654690713.webp', 'Vignette de la timeline ', 'La capitulation du Japon, intervenue officiellement le 2 septembre 1945 avec la signature des actes de capitulation du Japon à Tokyo, met officiellement un terme aux hostilités de la Seconde Guerre mondiale.', NULL, 1945, 9, 2, 0, 67);

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
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tags`
--

INSERT INTO `tags` (`id`, `name`, `color`, `thumbnail`) VALUES
(40, 'Histoire', '#feca72', 'Histoire_1654087218.webp'),
(41, 'Personnages Historiques', '#ff5900', 'PersonnagesHistoriques_1654087751.webp'),
(42, 'Guerres', '#000000', 'Guerres_1654686049.webp'),
(43, 'Astronomie', '#1c00f0', 'Astronomie_1654686119.webp'),
(44, 'Mythologie', '#b89f00', 'Mythologie_1654686148.webp'),
(45, 'Sciences', '#0bda50', 'Sciences_1654686175.webp');

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
  `date_start` varchar(25) NOT NULL,
  `date_end` varchar(25) DEFAULT NULL,
  `date_start_bc` tinyint(1) DEFAULT 0,
  `date_end_bc` tinyint(1) DEFAULT 0,
  `rating` decimal(8,2) DEFAULT NULL,
  `validated` tinyint(1) NOT NULL DEFAULT 1,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `timelines_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `timelines`
--

INSERT INTO `timelines` (`id`, `title`, `description`, `created_at`, `thumbnail`, `thumbnail_alt`, `date_start`, `date_end`, `date_start_bc`, `date_end_bc`, `rating`, `validated`, `user_id`) VALUES
(66, 'campagnes d\'Alexandre le Grand', 'Alexandre le Grand ou Alexandre III, né le 21 juillet 356 av. J.-C. à Pella et mort le 11 juin 323 av. J.-C. à Babylone, est un roi de Macédoine et l\'un des personnages les plus célèbres de l\'Antiquité.', '2022-06-01 14:50:11', 'campagnesd\'AlexandreleGrand_1654685863.webp', 'Vignette de la timeline campagnes d\'Alexandre le Grand', '336', '323', 1, 1, NULL, 1, 1),
(67, 'Seconde Guerre mondiale', 'La Seconde Guerre mondiale, ou Deuxième Guerre mondiale3, est un conflit armé à l\'échelle planétaire qui dure du 1er septembre 1939 au 2 septembre 1945. Ce conflit oppose schématiquement les Alliés et l’Axe.', '2022-06-08 13:08:23', 'SecondeGuerremondiale_1654690868.webp', 'Vignette de la timeline Seconde Guerre mondiale', '1939', '1945', 0, 0, NULL, 1, 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=182 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `timeline_tag`
--

INSERT INTO `timeline_tag` (`id`, `tag_id`, `timeline_id`) VALUES
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
(69, 25, 43),
(70, 6, 44),
(71, 1, 45),
(72, 3, 46),
(73, 6, 47),
(74, 6, 48),
(75, 4, 48),
(76, 28, 49),
(78, 24, 0),
(79, 5, 0),
(80, 3, 0),
(81, 1, 0),
(82, 24, 0),
(83, 6, 0),
(84, 24, 0),
(85, 6, 0),
(86, 5, 0),
(87, 3, 0),
(88, 1, 0),
(89, 24, 0),
(90, 6, 0),
(91, 4, 0),
(95, 37, 50),
(96, 6, 50),
(97, 6, 51),
(98, 5, 51),
(99, 3, 51),
(100, 2, 51),
(101, 39, 52),
(102, 39, 53),
(103, 39, 54),
(104, 39, 55),
(105, 39, 56),
(123, 37, 57),
(124, 39, 58),
(125, 37, 59),
(126, 24, 59),
(127, 6, 59),
(128, 5, 59),
(129, 4, 59),
(130, 3, 59),
(131, 2, 59),
(132, 1, 59),
(143, 37, 60),
(144, 39, 61),
(145, 37, 61),
(146, 24, 61),
(147, 4, 61),
(160, 39, 62),
(161, 5, 63),
(162, 1, 63),
(163, 37, 64),
(164, 6, 64),
(165, 5, 64),
(166, 4, 64),
(167, 1, 65),
(176, 41, 66),
(177, 40, 66),
(180, 42, 67),
(181, 40, 67);

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
  `admin` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `admin`) VALUES
(1, 'admin', 'admin@admin.fr', '$2y$10$2QtOqSFY41HhJQ5KnJbuKu08/RdkrJA7jK3ATgjgP16OaGLskNGFi', 1),
(2, 'test', 'test@test.fr', '$2y$10$VymBORnDUT77.e3gefVEteKyOBYo5gtuukG3jSgTP2j446z4WW2Zi', 0),
(15, 'momo', 'momo@msn.com', '$2y$10$OibU/uFZkvtqAP/fvbWO/uJAJmE1IYBhRJHw8VeTPX4rU8aXjvl2a', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
