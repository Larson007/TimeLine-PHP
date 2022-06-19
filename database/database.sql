-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 18 juin 2022 à 18:52
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
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8;

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
(45, 'la France déclarent la guerre à l\'Allemagne', 'laFranceetleRoyaume-Unidéclarentlaguerreàl\'Allemagne_1654686831.webp', 'Vignette de la timeline la France et le Royaume-Uni déclarent la guerre à l\'Allemagne', 'Les hommes répondent sans joie mais avec détermination à l\'ordre de mobilisation. Certains pacifistes manifestent néanmoins leurs réticences, tel le député socialiste Marcel Déat qui publie le 4 mai 1939 un article intitulé : « Faut-il mourir pour Dantzig ? ».\r\n\r\nLa Wehrmacht ayant violé les frontières de la Pologne, Londres envoie un ultimatum à Berlin en suggérant une ultime conférence internationale ! Hitler dédaignant de répondre, la guerre est de facto déclarée à l\'expiration de l\'ultimatum, le 3 septembre à 11 heures. Le Président du Conseil français Édouard Daladier et son ministre des affaires étrangères Georges Bonnet demandent au président de la République Albert Lebrun ', NULL, 1939, 9, 3, 0, 67),
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
(64, 'Le Japon capitule, fin de la seconde guerre mondiale', '_1654690713.webp', 'Vignette de la timeline ', 'La capitulation du Japon, intervenue officiellement le 2 septembre 1945 avec la signature des actes de capitulation du Japon à Tokyo, met officiellement un terme aux hostilités de la Seconde Guerre mondiale.', NULL, 1945, 9, 2, 0, 67),
(68, 'Game & Watch', 'Game&Watch_1655489055.webp', 'Vignette de la timeline Game & Watch', 'Il y a eu toute une série d\'appareils Game & Watch sortis tout au long des années 80. Et comme les ordinateurs de poche similaires de l\'époque, ils sont devenus incroyablement populaires.\r\n\r\nLe premier a été produit après que l\'employé de Nintendo, Gunpei Yokoi, a vu un homme d\'affaires voyager sur le Shinkansen jouer avec sa calculatrice et a pensé que l\'entreprise pouvait fabriquer une machine de jeux portable pour aider à perdre du temps sur le trajet.\r\n\r\nChaque Game & Watch n\'avait qu\'un seul jeu disponible, et il y en avait environ 60 au total. Certains étaient basés sur des machines d\'arcade et étaient également responsables de l\'introduction de grandes licences et de personnages de jeux, tels que Donkey Kong, The Legend of Zelda et Mario Bros, dans la maison.', NULL, 1980, 4, 28, 0, 76),
(69, 'Système de divertissement Nintendo (NES)', 'SystèmededivertissementNintendo(NES)_1655489427.webp', 'Vignette de la timeline Système de divertissement Nintendo (NES)', 'La prochaine console de Nintendo na pas besoin de beaucoup d\'introduction. La NES a joué à des jeux 8 bits et a été conçue pour la maison. C\'était de loin la console la plus vendue de son temps, se vendant à plus de 60 millions d\'unités, et a aidé l\'Amérique du Nord à se remettre du crash du jeu vidéo de 1983 qui a vu trop de consoles inonder le marché et les ordinateurs personnels sont devenus plus puissants.\r\n\r\nLe NES était à l\'origine commercialisé sous le nom de Family Computer, ou Famicom au Japon, mais a été publié sous le nom de NES en Amérique du Nord au CES 1985. Les titres de lancement comprenaient Super Mario Bros, Ice Climber, Pinball et Duck Hunt. Vous pouvez vous procurer une console avec une copie de Super Mario Bros pour 99 $ ou un ensemble de luxe, qui comprenait deux jeux et plusieurs accessoires, pour 199,99 $.', NULL, 1983, 7, 15, 0, 76),
(70, 'Game Boy', 'GameBoy_1655489798.webp', 'Vignette de la timeline Game Boy', 'La Nintendo Game Boy est une autre des meilleures consoles de jeu jamais vues. Pensé et conçu par la même équipe derrière le Game & Watch, le Game Boy a combiné les fonctionnalités du premier ordinateur de poche avec des cartouches interchangeables comme la NES pour créer lune des consoles les plus vendues à ce jour. Les ventes de la Game Boy et de la Game Boy Color (sortie en 1998) sont estimées à environ 120 millions d\'unités.\r\n\r\nIl a coûté environ 90 $ lors de son lancement en Amérique et était livré avec une copie de Tetris, très considéré comme le jeu qui a aidé les ventes gigantesques. Nintendo a également fabriqué une gamme d\'accessoires pour la Game Boy, notamment une imprimante et un écran grossissant avec éclairage intégré.', NULL, 1989, 4, 21, 0, 76),
(71, 'Super Nintendo (SNES)', 'SuperNintendo(SNES)_1655490045.webp', 'Vignette de la timeline Super Nintendo (SNES)', 'La deuxième console principale de Nintendo a également été un succès fulgurant, même si elle avait une concurrence rude de la part du Sega Mega Drive. La machine de Sega a été lancée en premier, mais c\'est finalement la gamme de jeux de Nintendo qui la aidée à devenir la console la plus vendue de l\'ère 16 bits, avec près de 50 millions d\'unités expédiées dans le monde.\r\n\r\nNintendo a produit différentes versions de la console pour différents marchés, avec la version japonaise appelée Super Famicom. Il a également encodé les cartouches de telle manière que vous ne pouviez pas jouer à des jeux dun pays sur une console d\'un autre.', NULL, 1990, 11, 21, 0, 76),
(72, 'Virtual Boy', 'VirtualBoy_1655490233.webp', 'Vignette de la timeline Virtual Boy', 'Une sortie de console étrange et finalement désastreuse a suivi la SNES, mais elle est considérée avec tendresse comme le précurseur de la réalité virtuelle à la maison.\r\n\r\nLe Virtual Boy se tenait sur une table ou une armoire et les joueurs devaient se pencher sur la visière pour jouer à des jeux 3D filaires. Malheureusement, plutôt que de fournir une expérience de l\'ère spatiale, la plupart des joueurs en sont sortis mal à l\'aise et le concept a été mis de côté. Sa durée de vie peut être mesurée en mois et non en années et il n\'est jamais sorti du Japon ou des États-Unis.', NULL, 1995, 7, 21, 0, 76),
(73, 'Nintendo 64 (N64)', 'Nintendo64(N64)_1655490532.webp', 'Vignette de la timeline Nintendo 64 (N64)', 'Le N64 tire son nom du processeur 64 bits q\'uil utilisait et était la dernière console domestique de Nintendo à avoir besoin de cartouches. Il a été un succès lors de son lancement, de nombreux clients se battant pour en mettre la main et a été considéré comme la console la plus puissante de sa génération.\r\n\r\nMalheureusement, il avait la Sony PlayStation et Sega Saturn pour concurrencer, donc ne pouvait pas tout à fait imiter le succès de ses prédécesseurs, se vendant un peu moins de 33 millions d\'unités. Mais le N64 reste dans l\'histoire comme une fantastique console de jeux Nintendo par les connaisseurs.\r\n\r\nUne grande partie de son succès peut être attribuée aux jeux: Super Mario 64, The Legend of Zelda: Ocarina of Time et Goldeneye 007 sont toujours considérés comme certains des meilleurs titres de l\'histoire.', NULL, 1996, 6, 21, 0, 76),
(74, 'Game Boy Advance', 'GameBoyAdvance_1655490832.webp', 'Vignette de la timeline Game Boy Advance', 'Nintendo a décidé de mettre à niveau son concept Game Boy vieillissant avec un modèle plus puissant, avec de meilleurs graphismes et une plus large gamme de couleurs disponibles pour les développeurs.\r\n\r\nLa Game Boy Advance a subi plusieurs conceptions au cours de sa durée de vie de sept ans, avec un retour au style à clapet des appareils Game & Watch d\'origine pour la Game Boy Advance SP. Cette bizarrerie particulière pourrait même être considérée comme le précurseur de la Nintendo DS à suivre peu de temps après.', NULL, 2001, 3, 21, 0, 76),
(75, 'GameCube', 'GameCube_1655490914.webp', 'Vignette de la timeline GameCube', 'Nintendo s\'est tourné vers le format de disque optique pour le GameCube, mais a été confronté à une rude concurrence de la Sony PlayStation 2, Microsoft Xbox et Sega Dreamcast. La progression du jeu pouvait être enregistrée sur des cartes mémoire, allant de 4 Mo à 64 Mo et le contrôleur a été repensé du modèle à trois poignées du N64 à un modèle à deux poignées pour le GameCube, mais ils ne pouvaient pas l\'empêcher d\'être un gros fiasco.\r\n\r\nUne fois de plus, Mario et Zelda ont fait une apparition sur la GameCube, contribuant en partie à son succès initial, mais seulement 22 millions de GameCubes ont été vendus au total. Considérant que 153 millions de PlayStations rivales ont été déplacées, c\'était un gros échec. Cela ne la pas empêché de passer dans l\'histoire en tant que console emblématique.', NULL, 2001, 9, 14, 0, 76),
(76, 'Nintendo DS', 'NintendoDS_1655491534.webp', 'Vignette de la timeline Nintendo DS', 'Même sil faisait pression avec de nouveaux designs pour la Game Boy Advance, Nintendo a décidé de rafraîchir complètement sa stratégie portable avec la sortie de la DS.\r\n\r\nSurtout, il a introduit une nouvelle configuration innovante à double écran qui a évolué à partir du Game & Watch original. L\'écran inférieur comportait un écran tactile et pouvait être utilisé pour contrôler les jeux, tandis que le haut n\'était qu\'un écran LCD pour voir ce que vous faisiez.\r\n\r\nSon principal rival était la Sony PSP, mais grâce à la rétrocompatibilité avec les jeux Game Boy Advance et à quelques modèles dévolution avec des performances et des fonctionnalités améliorées, la gamme DS est devenue la série de consoles de jeux portables la plus vendue de l\'histoire.', NULL, 2004, 12, 2, 0, 76),
(77, 'Nintendo Wii', 'NintendoWii_1655491799.webp', 'Vignette de la timeline Nintendo Wii', 'La Wii était l\'entrée de Nintendo dans la septième génération de consoles de salon, affrontant une concurrence redoutable sous la forme de la Sony PlayStation 3 et de la Microsoft Xbox 360. Mais pendant un certain temps, elle a dominé les deux autres en chiffres de ventes.\r\n\r\nLa Wii a inauguré une nouvelle ère de jeu de mouvement en utilisant la télécommande Wii, que la console a suivi dans un espace tridimensionnel. Il a également publié la Wii Balance Board qui a été utilisée avec des jeux de fitness. Son style familial et ses versions de jeux en ont fait la machine de salon la plus populaire depuis un certain temps.', NULL, 2006, 12, 2, 0, 76),
(78, 'Nintendo 3DS', 'Nintendo3DS_1655491909.webp', 'Vignette de la timeline Nintendo 3DS', 'Pour faire suite à son concept de portable DS, Nintendo s\'est tourné vers une technologie visuelle populaire à l\'époque: la 3D. Il a fait de l\'écran supérieur de son appareil à clapet un écran 3D, bien que contrairement à une technologie d\'image similaire sur les téléviseurs et autres, il ne nécessitait pas de lunettes.\r\n\r\nPour être honnête, la plupart des gens ont été déçus par l\'affichage 3D et ses performances, mais cela na pas empêché la 3DS de se vendre par lots. Il a depuis fait l\'objet de mises à jour mineures sous la forme d\'un modèle XL plus grand et de versions améliorées. Une version 2D uniquement est également disponible pour les jeunes enfants qui ne peuvent pas utiliser l\'écran 3D.', NULL, 2011, 2, 26, 0, 76),
(79, 'Nintendo Wii U', 'NintendoWiiU_1655491995.webp', 'Vignette de la timeline Nintendo Wii U', 'La Wii U a succédé à la Wii et la réponse de Nintendo à la PlayStation 4 et à la Xbox One. Il s\'agit de la première console Nintendo à prendre en charge les graphiques haute définition, et est principalement contrôlée à laide du Wii U GamePad à écran tactile.\r\n\r\nBien que la réception initiale de la Wii U ait été positive, elle a finalement été considérée comme un échec de jeu, vendant un peu plus de 13 millions d\'unités depuis sa sortie.', NULL, 2012, 11, 18, 0, 76),
(80, 'NES Classic Mini', 'NESClassicMini_1655492090.webp', 'Vignette de la timeline NES Classic Mini', 'Le jeu rétro est devenu incroyablement populaire et avant que la Nintendo Switch ne devienne disponible début 2017, le géant japonais du jeu a aidé les joueurs, jeunes et moins jeunes, à revisiter certains de ses meilleurs premiers jeux avec une mini forme de la console NES originale . Il comportait 30 des titres Nintendo Entertainment System de la société et un contrôleur de style authentique mais avec un connecteur HDMI moderne.\r\n\r\nTrès réussi, Nintendo a vendu environ 2,3 millions de la console avant quelle ne soit arrêtée en 2017. Nintendo a produit une série limitée en 2018 pour satisfaire la demande restante', NULL, 2016, 11, 10, 0, 76),
(81, 'Switch', 'Switch_1655492351.webp', 'Vignette de la timeline Switch', 'La Switch a été lancé pour la première fois en mars 2017. Il comprend un appareil de type tablette avec un écran tactile, ainsi quune station d\'accueil pour le lire à la maison sur un téléviseur. Il est donc à la fois portable pour jouer lors de vos déplacements, mais peut également fonctionner à la maison.\r\nLes contrôleurs Joy-Con sont de petits pads qui s\'insèrent de chaque côté de l\'écran. Et ils peuvent également être insérés sur une unité centrale de contrôle domestique afin de donner une sensation plus joypad aux procédures.\r\n\r\nLes titres de première partie de Nintendo ont eu un énorme succès pour la console. The Legend of Zelda: Breath of the Wild, Mario Kart 8 Deluxe, Super Mario Odyssey, Super Smash Bros.Ultimate, Pokémon Sword and Shield et Animal Crossing: New Horizons se sont vendus à plus de vingt millions dunités chacun.\r\n\r\nContrairement à la Wii U, le Switch a connu un succès remarquable, avec 79 millions d\'unités vendues jusqu\'à la fin de 2020.', NULL, 2017, 3, 3, 0, 76),
(82, 'SNES Classic Mini', 'SNESClassicMini_1655492533.webp', 'Vignette de la timeline SNES Classic Mini', 'Suite au succès de la NES Classic Mini ci-dessus, la Super NES Classic Edition a été lancée en 2017 et, à l\'instar de la NES Classic Mini, a connu un grand succès.\r\n\r\nIl s\'est vendu à plus de 5 millions d\'unités et a été abandonné après la fin de 2018.\r\n\r\nIl y avait trois versions différentes de la SNES Classic Edition car il y avait trois versions différentes de la SNES originale au Japon, en Amérique du Nord et en Europe.\r\n\r\n21 titres Super NES ont été préinstallés, y compris la première version de Star Fox 2 qui a été annulée en 1995 (elle est également disponible pour Switch).', NULL, 2017, 10, 5, 0, 76),
(83, 'Switch Lite', 'SwitchLite_1655492651.webp', 'Vignette de la timeline Switch Lite', 'Le Switch Lite est une variante du Switch sans les Joy-cons séparés ou le dock qui permet au Switch d\'être connecté à un téléviseur.\r\n\r\nAu lieu de cela, l\'unité est conçue pour une portabilité totale - elle a des commandes fixes et est actuellement disponible en quatre couleurs plus des éditions spéciales, notamment pour Animal Crossing.\r\n\r\nLe Switch Lite a été un succès, avec 13,5 millions vendus jusqu\'à fin 2020.', NULL, 2019, 9, 20, 0, 76),
(84, 'Switch OLED', 'SwitchOLED_1655492890.webp', 'Vignette de la timeline Switch OLED', 'La Switch OLED est l\'évolution premium de la console de portable de Nintendo. Toujours équipée d\'un écran 7 pouces, sa dalle passe du LCD à l\'OLED, bien plus lumineux et contrasté, et occupe désormais plus de surface utile. Elle possède 64 Go de mémoire interne extensible par le biais d\'un emplacement pour carte mémoire Micro SD.', NULL, 2021, 10, 8, 0, 76),
(85, 'Lancement du premier satellite artificiel', 'Lancementdupremiersatelliteartificiel_1655575716.webp', 'Vignette de la timeline Lancement du premier satellite artificiel', 'Les Soviétiques réussissent la première mise en orbite d\'un satellite : Sputnik 1. Depuis, plusieurs milliers de satellite ont été envoyés dans l\'espace. L\'association UCS (Union of concerned scientists) en a dénombré plus de 2000 toujours actifs. ', NULL, 1957, 10, 4, 0, 77),
(86, 'premier être vivant dans l\'Espace', 'premierêtrevivantdansl\'Espace_1655575848.webp', 'Vignette de la timeline premier être vivant dans l\'Espace', 'La chienne Laïka a été envoyée par l\'URSS à bord de l\'engin spatial Spoutnik 2, un mois à peine après le lancement du premier satellite artificiel Spoutnik 1. Le succès de Spoutnik 1 ayant été considérable, les soviétiques désiraient franchir un nouveau pas : envoyer un être vivant dans l\'Espace ! Nikita Khrouchtchev imposa rapidement le lancement d\'un second engin et il désirait vivement que le 7 novembre puisse être une date possible afin de commémorer ainsi le 40e anniversaire de la révolution bolchevique. Sergei Korolev, chef du programme spatial, lui signala alors qu\'il était impossible d\'être prêt avant le mois de décembre. Mais, Khrouchtchev, qui voulait impressionner les Américains, insista et sur ses ordres, dans l\'urgence et sans véritable test de fiabilité, la construction de Spoutnik 2 fut effective en quatre semaines seulement. Une précipitation qui allait s\'avérer fatale pour Laïka puisque dés le départ du projet il était convenu qu\'ils ne pourraient pas la récupérer.', NULL, 1957, 11, 3, 0, 77),
(87, 'Un homme dans l\'espace', 'Unhommedansl\'espace_1655576324.webp', 'Vignette de la timeline Un homme dans l\'espace', 'le cosmonaute soviétique Iouri Gagarine (27 ans) accomplit le tour de la Terre en 108 minutes. Il est le premier homme à naviguer dans l\'espace. Son module a été mis en orbite à 327 km d\'altitude par une fusée Vostok 1 (Vostok signifie Orient en russe), lancée de la base spatiale de Baïkonour, dans les steppes du Kazakhstan. Cette fusée géante a été conçue par un ingénieur de génie, Sergueï Korolev, rescapé du Goulag. Il s\'est inspiré des principes appliqués par les savants nazis, quinze ans plus tôt, aux premiers missiles balistiques, les V2. Le module lui-même, construit en aluminium, est une sphère de 2,3 mètres de diamètre, avec un volume habitable de seulement 1,6 m3. Iouri Gagarine n\'a rien à faire dans son habitacle que de laisser les techniciens de la base de Baïkonour guider son vaisseau. Il n\'en frôle pas moins la mort à plusieurs reprises. Ainsi, son module ayant été dirigé par erreur vers une orbite trop longue, il a été retenu grâce au bon fonctionnement du rétrofreinage', NULL, 1961, 4, 12, 0, 77),
(88, 'un petit pas pour UN homme...', 'unpetitpaspourUNhomme..._1655576573.webp', 'Vignette de la timeline un petit pas pour UN homme...', 'Un grand pas pour l\'humanité. La mission Apollo 11, menée par Neil Armstrong, Edwin « Buzz » Aldrin et Michael Collins, se pose sur la mer de la Tranquillité. Neil Armstrong devient le premier homme à marcher sur la Lune. La Nasa met fin au programme Apollo en 1972, onze ans après son lancement. Il aura coûté 200 milliards de dollars.', NULL, 1969, 7, 21, 0, 77),
(89, 'la première station spatiale', 'lapremièrestationspatiale_1655576833.webp', 'Vignette de la timeline la première station spatiale', 'Saliout 1, la première station spatiale construite par l\'Homme, est placée en orbite par une fusée Proton-K depuis le cosmodrome de Baïkonour. Les dirigeants de l\'Union soviétique, après avoir subi une longue série d\'échecs, peuvent enfin annoncer que leur pays a repris l\'initiative dans le domaine spatial. La NASA ne lancera la station Skylab que deux ans plus tard. Un premier équipage est lancé quatre jours plus tard à bord du vaisseau Soyouz 10. Celui-ci parvient à réaliser la manœuvre de rendez-vous et à s\'amarrer à la station spatiale sans rencontrer de problème. Mais, lorsque les cosmonautes tentent de démonter l\'écoutille de leur vaisseau pour accéder au tunnel qui relie le vaisseau à la station, ils n\'y parviennent pas. Ils doivent renoncer et revenir sur Terre sans avoir pu pénétrer dans la station spatiale. L\'enquête réalisée après leur retour démontrera que l\'écoutille n\'a pu être déverrouillée à cause d\'une anomalie dans un circuit électrique du système d\'amarrage.', NULL, 1971, 4, 19, 0, 77),
(90, '1er sonde sur Mars', '1ersondesurMars_1655576971.webp', 'Vignette de la timeline 1er sonde sur Mars', 'Après deux ans de traversée, la sonde américaine Viking 1 se pose sur Mars. Elle est rejointe en septembre par Viking 2. Les deux sondes fournissent une couverture photographique complète de la planète, ainsi que des informations sur la composition de son atmosphère ou sa météorologie. Les missions sur la Planète rouge se succèdent durant les décennies suivantes, avec des résultats contrastés.', NULL, 1976, 7, 20, 0, 77),
(91, 'la fusée Ariane prend son premier envol', 'lafuséeArianeprendsonpremierenvol_1655577103.webp', 'Vignette de la timeline la fusée Ariane prend son premier envol', 'La fusée Ariane 1 effectue son vol inaugural depuis la base de Kourou, en Guyane. Le programme développé par l\'Agence spatiale européenne (ASE), créée quatre ans plus tôt, permet à l\'Europe de mettre en orbite ses satellites sans dépendre des autres puissances.', NULL, 1979, 12, 24, 0, 77),
(92, 'La présence permanente de l\'homme dans l\'espace', 'Laprésencepermanentedel\'hommedansl\'espace_1655577285.webp', 'Vignette de la timeline La présence permanente de l\'homme dans l\'espace', 'Les cosmonautes soviétiques Leonid Kizim et Vladimir Soloviev arrivent à bord de la station orbitale Mir. C\'est le début de la présence permanente de l\'homme dans l\'espace. La station russe reste en fonction jusqu\'en 2001.', NULL, 1986, 3, 13, 0, 77),
(93, 'mise en orbite de hubble', 'miseenorbitedehubble_1655577340.webp', 'Vignette de la timeline mise en orbite de hubble', 'Développé par la Nasa avec la participation de l\'ASE, le télescope spatial Hubble est mis en orbite. Il permet l\'exploration de l\'univers lointain : l\'étude des trous noirs ou des exoplanètes notamment.', NULL, 1990, 4, 25, 0, 77),
(94, 'l\'ISS accueille ses premiers occupants', 'l\'ISSaccueillesespremiersoccupants_1655577430.webp', 'Vignette de la timeline l\'ISS accueille ses premiers occupants', 'Les Russes Yuri Gidzenko et Sergueï Krikalev, et l\'Américain William Shepherd deviennent les premiers habitants de la Station spatiale internationale (ISS). Depuis 2009, les astronautes y séjournent chacun six mois en moyenne. L\'ISS sert essentiellement de laboratoire scientifique. Des centaines de recherches y sont menées.', NULL, 2000, 11, 2, 0, 77),
(95, 'La chine entre dans la course', 'Lachineentredanslacourse_1655577538.webp', 'Vignette de la timeline La chine entre dans la course', 'Après la Russie et les Etats-Unis, la Chine est le troisième pays à envoyer un homme dans l\'espace. Il s\'agit du taïkonaute Yang Liwei sur Shenzou 5. ', NULL, 2003, 10, 16, 0, 77),
(96, 'A la découverte de saturne', 'Aladécouvertedesaturne_1655577650.webp', 'Vignette de la timeline A la découverte de saturne', 'Fruit de la coopération entre la Nasa et l\'Agence spatiale européenne, la sonde Cassini-Huygens, se met en orbite autour de Saturne pour l\'étudier. Le 14 janvier 2005, après s\'être détaché de la sonde-mère, l\'atterrisseur Huygens se pose sur Titan, le plus important satellite de Saturne.', NULL, 2004, 7, 1, 0, 77),
(97, 'La mission rosetta', 'Lamissionrosetta_1655577765.webp', 'Vignette de la timeline La mission rosetta', 'La sonde spatiale européenne Rosetta est placée en orbite autour de la comète Chury et y envoie l\'atterrisseur Philae afin d\'analyser la composition de son sol et sa structure.', NULL, 2014, 11, 12, 0, 77),
(98, 'La face caché de la Lune', 'LafacecachédelaLune_1655577830.webp', 'Vignette de la timeline La face caché de la Lune', 'L\'atterrisseur chinois Chang\'e 4 réussit le premier alunissage sur la face cachée de la Lune.', NULL, 2019, 1, 3, 0, 77);

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
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tags`
--

INSERT INTO `tags` (`id`, `name`, `color`, `thumbnail`) VALUES
(40, 'Histoire', '#ffcf74', 'Histoire_1654087218.webp'),
(41, 'Personnages Historiques', '#ee727a', 'PersonnagesHistoriques_1654087751.webp'),
(42, 'Guerres', '#4f4f4f', 'Guerres_1654686049.webp'),
(43, 'Astronomie', '#84acfc', 'Astronomie_1654686119.webp'),
(44, 'Mythologie', '#c694e8', 'Mythologie_1655487396.webp'),
(45, 'Sciences', '#c4e791', 'Sciences_1654686175.webp'),
(53, 'Jeux Vidéo', '#d215d5', 'JeuxVidéo_1655488131.webp');

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
  `thumbnail` varchar(255) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `timelines`
--

INSERT INTO `timelines` (`id`, `title`, `description`, `created_at`, `thumbnail`, `thumbnail_alt`, `date_start`, `date_end`, `date_start_bc`, `date_end_bc`, `rating`, `validated`, `user_id`) VALUES
(66, 'campagnes d\'Alexandre le Grand', 'Alexandre le Grand ou Alexandre III, né le 21 juillet 356 av. J.-C. à Pella et mort le 11 juin 323 av. J.-C. à Babylone, est un roi de Macédoine et l\'un des personnages les plus célèbres de l\'Antiquité.', '2022-06-01 14:50:11', 'campagnesd\'AlexandreleGrand_1654685863.webp', 'Vignette de la timeline campagnes d\'Alexandre le Grand', '336', '323', 1, 1, NULL, 1, 1),
(67, 'Seconde Guerre mondiale', 'La Seconde Guerre mondiale, ou Deuxième Guerre mondiale3, est un conflit armé à l\'échelle planétaire qui dure du 1er septembre 1939 au 2 septembre 1945. Ce conflit oppose schématiquement les Alliés et l’Axe.', '2022-06-08 13:08:23', 'SecondeGuerremondiale_1654690868.webp', 'Vignette de la timeline Seconde Guerre mondiale', '1939', '1945', 0, 0, NULL, 1, 1),
(76, 'Les consoles Nintendo', 'En ce qui concerne les machines de jeux, Nintendo a un passé incroyablement riche. Malgré ce que vous pourriez penser, la NES n\'était pas la première machine de jeux grand public de Nintendo, cette distinction appartient à la série portable Game & Watch, bien quelle ait connu des bonds en avant depuis lors. Littéralement, dans le cas de Mario.\r\n\r\nGame & Watch était une série d\'ordinateurs de poche qui ne jouaient qu\'à un seul jeu et avaient soit une horloge, une alarme ou, dans certains cas, les deux. Il n\'y avait pas de cartouches ou d\'autres jeux à télécharger. En effet, il n\'y avait pas d\'Internet pour les télécharger. Vous avez acheté un seul jeu et vous vous y êtes tenu.\r\n\r\nDans les années suivantes, Nintendo s\'est taillé une place en étant le fabricant de consoles excentriques. Comparé à Sony, Sega et Microsoft, le jeu a toujours pris une direction étrange mais satisfaisante. Et à cause de cela, c\'est devenu une entreprise que vous ne pouvez pas vous empêcher d\'aimer.', '2022-06-17 19:56:43', 'LesconsolesNintendo_1655488603.webp', 'Vignette de la timeline Les consoles Nintendo', '1980', '2021', 0, 0, NULL, 1, 1),
(77, 'la conquête spatiale', 'Le 21 juillet 1969, à 2h56 TU, Neil Armstrong pose le pied sur la Lune devant un demi-milliard de Terriens scotchés à leur écran de téléviseur à quelque 384 000 kilomètres de là. Ce « petit pas » permet à l\'Amérique de doubler l\'URSS dans la conquête de l\'espace. Car les deux superpuissances, plongées en pleine guerre froide, se livrent également bataille au-delà de la mésosphère. Il s\'agit pour chacune d\'affirmer sa supériorité scientifique et technologique sur l\'autre. Jusque-là, Moscou faisait la course en tête. C\'est elle qui a mis en orbite le premier satellite, elle encore qui a envoyé le premier être vivant, puis le premier cosmonaute dans l\'espace.\r\n\r\nMais la donne change en cette nuit d\'été 1969. « Nous avons choisi d\'aller sur la Lune au cours de cette décennie », avait déclaré John F. Kennedy le 12 septembre 1962 à l\'université Rice de Houston. Onze missions Apollo plus tard, c\'est désormais chose faite. Depuis, la conquête de l\'espace – à laquelle se sont joints de nouveaux pays tels que la Chine, l\'Inde, le Brésil ou Israël – ne cesse de se poursuivre. Avant une nouvelle mission habitée sur la Lune ? C\'est en tout cas ce que la Nasa promet pour 2024.', '2022-06-18 20:05:18', 'laconquêtespatiale_1655575518.webp', 'Vignette de la timeline la conquête spatiale', '1957', '2019', 0, 0, NULL, 1, 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=225 DEFAULT CHARSET=utf8;

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
(181, 40, 67),
(182, 45, 68),
(183, 40, 69),
(184, 44, 70),
(185, 42, 70),
(186, 41, 70),
(187, 40, 70),
(199, 45, 72),
(200, 42, 72),
(201, 40, 72),
(202, 45, 71),
(203, 44, 71),
(204, 42, 71),
(205, 40, 71),
(206, 41, 73),
(207, 40, 73),
(211, 45, 74),
(212, 44, 74),
(213, 40, 74),
(217, 45, 75),
(218, 42, 75),
(219, 41, 75),
(221, 53, 76),
(222, 45, 77),
(223, 43, 77),
(224, 40, 77);

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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `admin`) VALUES
(1, 'admin', 'admin@admin.fr', '$2y$10$2QtOqSFY41HhJQ5KnJbuKu08/RdkrJA7jK3ATgjgP16OaGLskNGFi', 1),
(2, 'test', 'test@test.fr', '$2y$10$VymBORnDUT77.e3gefVEteKyOBYo5gtuukG3jSgTP2j446z4WW2Zi', 0),
(15, 'momo', 'momo@msn.com', '$2y$10$OibU/uFZkvtqAP/fvbWO/uJAJmE1IYBhRJHw8VeTPX4rU8aXjvl2a', 0),
(16, 'john Doe', 'test2@test.com', '$2y$10$ybKoi5I2HFb04izoMevmI.7bQu7cec4xrJ.tt7eJ9V1uFBzCg2sHC', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
