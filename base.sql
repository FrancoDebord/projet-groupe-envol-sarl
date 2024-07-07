-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.31 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Listage de la structure de la table projet_groupe_envol_sarl. cache
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table projet_groupe_envol_sarl.cache : ~0 rows (environ)

-- Listage de la structure de la table projet_groupe_envol_sarl. cache_locks
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table projet_groupe_envol_sarl.cache_locks : ~0 rows (environ)

-- Listage de la structure de la table projet_groupe_envol_sarl. consentements_signes
CREATE TABLE IF NOT EXISTS `consentements_signes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `date_consentement` date NOT NULL,
  `heure_consentement` time NOT NULL,
  `consentement_signe` tinyint(1) NOT NULL DEFAULT '0',
  `note_information_id` int NOT NULL,
  `adresse_ip_ordinateur` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom_consentement` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom_consentement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `consentements_signes_note_information_id_index` (`note_information_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table projet_groupe_envol_sarl.consentements_signes : ~1 rows (environ)
INSERT INTO `consentements_signes` (`id`, `date_consentement`, `heure_consentement`, `consentement_signe`, `note_information_id`, `adresse_ip_ordinateur`, `nom_consentement`, `prenom_consentement`, `created_at`, `updated_at`) VALUES
	(1, '2024-07-06', '10:40:39', 1, 4, '127.0.0.1', 'HOUEHA', 'Francis', '2024-07-06 09:40:39', '2024-07-06 09:40:39');

-- Listage de la structure de la table projet_groupe_envol_sarl. documents_clients_services
CREATE TABLE IF NOT EXISTS `documents_clients_services` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nom_document` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fichier_pdf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table projet_groupe_envol_sarl.documents_clients_services : ~0 rows (environ)

-- Listage de la structure de la table projet_groupe_envol_sarl. failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table projet_groupe_envol_sarl.failed_jobs : ~0 rows (environ)

-- Listage de la structure de la table projet_groupe_envol_sarl. jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table projet_groupe_envol_sarl.jobs : ~0 rows (environ)

-- Listage de la structure de la table projet_groupe_envol_sarl. job_batches
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table projet_groupe_envol_sarl.job_batches : ~0 rows (environ)

-- Listage de la structure de la table projet_groupe_envol_sarl. migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table projet_groupe_envol_sarl.migrations : 6 rows
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(7, '2024_07_01_093047_create_documents_clients_services_table', 2),
	(8, '2024_07_05_085154_create_note_informations_lue_table', 3),
	(9, '2024_07_05_085532_create_consentements_signes_table', 3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Listage de la structure de la table projet_groupe_envol_sarl. note_informations_lue
CREATE TABLE IF NOT EXISTS `note_informations_lue` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `date_lecture` date NOT NULL,
  `heure_lecture` time NOT NULL,
  `note_lue` tinyint(1) NOT NULL DEFAULT '0',
  `note_information_telechargee` tinyint(1) NOT NULL DEFAULT '0',
  `adresse_ip_ordinateur` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table projet_groupe_envol_sarl.note_informations_lue : ~2 rows (environ)
INSERT INTO `note_informations_lue` (`id`, `date_lecture`, `heure_lecture`, `note_lue`, `note_information_telechargee`, `adresse_ip_ordinateur`, `created_at`, `updated_at`) VALUES
	(2, '2024-07-05', '10:21:26', 1, 1, '127.0.0.1', '2024-07-05 09:21:26', '2024-07-05 09:21:26'),
	(3, '2024-07-05', '15:51:15', 1, 1, '127.0.0.1', '2024-07-05 14:51:15', '2024-07-05 14:51:15'),
	(4, '2024-07-06', '10:07:06', 1, 1, '127.0.0.1', '2024-07-06 09:07:06', '2024-07-06 09:07:06');

-- Listage de la structure de la table projet_groupe_envol_sarl. password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table projet_groupe_envol_sarl.password_reset_tokens : ~0 rows (environ)

-- Listage de la structure de la table projet_groupe_envol_sarl. pays
CREATE TABLE IF NOT EXISTS `pays` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pays_name` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays_code` char(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=238 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table projet_groupe_envol_sarl.pays : 237 rows
/*!40000 ALTER TABLE `pays` DISABLE KEYS */;
INSERT INTO `pays` (`id`, `pays_name`, `pays_code`) VALUES
	(1, 'France', 'fr'),
	(2, 'Afghanistan', 'af'),
	(3, 'Afrique du sud', 'za'),
	(4, 'Albanie', 'al'),
	(5, 'Algérie', 'dz'),
	(6, 'Allemagne', 'de'),
	(7, 'Arabie saoudite', 'sa'),
	(8, 'Argentine', 'ar'),
	(9, 'Australie', 'au'),
	(10, 'Autriche', 'at'),
	(11, 'Belgique', 'be'),
	(12, 'Brésil', 'br'),
	(13, 'Bulgarie', 'bg'),
	(14, 'Canada', 'ca'),
	(15, 'Chili', 'cl'),
	(16, 'Chine (Rép. pop.)', 'cn'),
	(17, 'Colombie', 'co'),
	(18, 'Corée, Sud', 'kr'),
	(19, 'Costa Rica', 'cr'),
	(20, 'Croatie', 'hr'),
	(21, 'Danemark', 'dk'),
	(22, 'Egypte', 'eg'),
	(23, 'Emirats arabes unis', 'ae'),
	(24, 'Equateur', 'ec'),
	(25, 'Etats-Unis', 'us'),
	(26, 'El Salvador', 'sv'),
	(27, 'Espagne', 'es'),
	(28, 'Finlande', 'fi'),
	(29, 'Grèce', 'gr'),
	(30, 'Hong Kong', 'hk'),
	(31, 'Hongrie', 'hu'),
	(32, 'Inde', 'in'),
	(33, 'Indonésie', 'id'),
	(34, 'Irlande', 'ie'),
	(35, 'Israèl', 'il'),
	(36, 'Italie', 'it'),
	(37, 'Japon', 'jp'),
	(38, 'Jordanie', 'jo'),
	(39, 'Liban', 'lb'),
	(40, 'Malaisie', 'my'),
	(41, 'Maroc', 'ma'),
	(42, 'Mexique', 'mx'),
	(43, 'Norvège', 'no'),
	(44, 'Nouvelle-Zélande', 'nz'),
	(45, 'Pérou', 'pe'),
	(46, 'Pakistan', 'pk'),
	(47, 'Pays-Bas', 'nl'),
	(48, 'Philippines', 'ph'),
	(49, 'Pologne', 'pl'),
	(50, 'Porto Rico', 'pr'),
	(51, 'Portugal', 'pt'),
	(52, 'République tchèque', 'cz'),
	(53, 'Roumanie', 'ro'),
	(54, 'Royaume-Uni', 'uk'),
	(55, 'Russie', 'ru'),
	(56, 'Singapour', 'sg'),
	(57, 'Suède', 'se'),
	(58, 'Suisse', 'ch'),
	(59, 'Taiwan', 'tw'),
	(60, 'Thailande', 'th'),
	(61, 'Turquie', 'tr'),
	(62, 'Ukraine', 'ua'),
	(63, 'Venezuela', 've'),
	(64, 'Yougoslavie', 'yu'),
	(65, 'Samoa', 'as'),
	(66, 'Andorre', 'ad'),
	(67, 'Angola', 'ao'),
	(68, 'Anguilla', 'ai'),
	(69, 'Antarctique', 'aq'),
	(70, 'Antigua et Barbuda', 'ag'),
	(71, 'Arménie', 'am'),
	(72, 'Aruba', 'aw'),
	(73, 'Azerbaïdjan', 'az'),
	(74, 'Bahamas', 'bs'),
	(75, 'Bahrain', 'bh'),
	(76, 'Bangladesh', 'bd'),
	(77, 'Biélorussie', 'by'),
	(78, 'Belize', 'bz'),
	(79, 'Benin', 'bj'),
	(80, 'Bermudes (Les)', 'bm'),
	(81, 'Bhoutan', 'bt'),
	(82, 'Bolivie', 'bo'),
	(83, 'Bosnie-Herzégovine', 'ba'),
	(84, 'Botswana', 'bw'),
	(85, 'Bouvet (Iles)', 'bv'),
	(86, 'Territoire britannique de l\'océan Indien', 'io'),
	(87, 'Vierges britanniques (Iles)', 'vg'),
	(88, 'Brunei', 'bn'),
	(89, 'Burkina Faso', 'bf'),
	(90, 'Burundi', 'bi'),
	(91, 'Cambodge', 'kh'),
	(92, 'Cameroun', 'cm'),
	(93, 'Cap Vert', 'cv'),
	(94, 'Cayman (Iles)', 'ky'),
	(95, 'République centrafricaine', 'cf'),
	(96, 'Tchad', 'td'),
	(97, 'Christmas (Ile)', 'cx'),
	(98, 'Cocos (Iles)', 'cc'),
	(99, 'Comores', 'km'),
	(100, 'Rép. Dém. du Congo', 'cg'),
	(101, 'Cook (Iles)', 'ck'),
	(102, 'Cuba', 'cu'),
	(103, 'Chypre', 'cy'),
	(104, 'Djibouti', 'dj'),
	(105, 'Dominique', 'dm'),
	(106, 'République Dominicaine', 'do'),
	(107, 'Timor', 'tp'),
	(108, 'Guinée Equatoriale', 'gq'),
	(109, 'Erythrée', 'er'),
	(110, 'Estonie', 'ee'),
	(111, 'Ethiopie', 'et'),
	(112, 'Falkland (Ile)', 'fk'),
	(113, 'Féroé (Iles)', 'fo'),
	(114, 'Fidji (République des)', 'fj'),
	(115, 'Guyane française', 'gf'),
	(116, 'Polynésie française', 'pf'),
	(117, 'Territoires français du sud', 'tf'),
	(118, 'Gabon', 'ga'),
	(119, 'Gambie', 'gm'),
	(120, 'Géorgie', 'ge'),
	(121, 'Ghana', 'gh'),
	(122, 'Gibraltar', 'gi'),
	(123, 'Groenland', 'gl'),
	(124, 'Grenade', 'gd'),
	(125, 'Guadeloupe', 'gp'),
	(126, 'Guam', 'gu'),
	(127, 'Guatemala', 'gt'),
	(128, 'Guinée', 'gn'),
	(129, 'Guinée-Bissau', 'gw'),
	(130, 'Guyane', 'gy'),
	(131, 'Haïti', 'ht'),
	(132, 'Heard et McDonald (Iles)', 'hm'),
	(133, 'Honduras', 'hn'),
	(134, 'Islande', 'is'),
	(135, 'Iran', 'ir'),
	(136, 'Irak', 'iq'),
	(137, 'Côte d\'Ivoire', 'ci'),
	(138, 'Jamaïque', 'jm'),
	(139, 'Kazakhstan', 'kz'),
	(140, 'Kenya', 'ke'),
	(141, 'Kiribati', 'ki'),
	(142, 'Corée du Nord', 'kp'),
	(143, 'Koweit', 'kw'),
	(144, 'Kirghizistan', 'kg'),
	(145, 'Laos', 'la'),
	(146, 'Lettonie', 'lv'),
	(147, 'Lesotho', 'ls'),
	(148, 'Libéria', 'lr'),
	(149, 'Libye', 'ly'),
	(150, 'Liechtenstein', 'li'),
	(151, 'Lithuanie', 'lt'),
	(152, 'Luxembourg', 'lu'),
	(153, 'Macau', 'mo'),
	(154, 'Macédoine', 'mk'),
	(155, 'Madagascar', 'mg'),
	(156, 'Malawi', 'mw'),
	(157, 'Maldives (Iles)', 'mv'),
	(158, 'Mali', 'ml'),
	(159, 'Malte', 'mt'),
	(160, 'Marshall (Iles)', 'mh'),
	(161, 'Martinique', 'mq'),
	(162, 'Mauritanie', 'mr'),
	(163, 'Maurice', 'mu'),
	(164, 'Mayotte', 'yt'),
	(165, 'Micronésie (Etats fédérés de)', 'fm'),
	(166, 'Moldavie', 'md'),
	(167, 'Monaco', 'mc'),
	(168, 'Mongolie', 'mn'),
	(169, 'Montserrat', 'ms'),
	(170, 'Mozambique', 'mz'),
	(171, 'Myanmar', 'mm'),
	(172, 'Namibie', 'na'),
	(173, 'Nauru', 'nr'),
	(174, 'Nepal', 'np'),
	(175, 'Antilles néerlandaises', 'an'),
	(176, 'Nouvelle Calédonie', 'nc'),
	(177, 'Nicaragua', 'ni'),
	(178, 'Niger', 'ne'),
	(179, 'Nigeria', 'ng'),
	(180, 'Niue', 'nu'),
	(181, 'Norfolk (Iles)', 'nf'),
	(182, 'Mariannes du Nord (Iles)', 'mp'),
	(183, 'Oman', 'om'),
	(184, 'Palau', 'pw'),
	(185, 'Panama', 'pa'),
	(186, 'Papouasie-Nouvelle-Guinée', 'pg'),
	(187, 'Paraguay', 'py'),
	(188, 'Pitcairn (Iles)', 'pn'),
	(189, 'Qatar', 'qa'),
	(190, 'Réunion (La)', 're'),
	(191, 'Rwanda', 'rw'),
	(192, 'Géorgie du Sud et Sandwich du Sud (Iles)', 'gs'),
	(193, 'Saint-Kitts et Nevis', 'kn'),
	(194, 'Sainte Lucie', 'lc'),
	(195, 'Saint Vincent et les Grenadines', 'vc'),
	(196, 'Samoa', 'ws'),
	(197, 'Saint-Marin (Rép. de)', 'sm'),
	(198, 'Sao Tomé et Principe (Rép.)', 'st'),
	(199, 'Sénégal', 'sn'),
	(200, 'Seychelles', 'sc'),
	(201, 'Sierra Leone', 'sl'),
	(202, 'Slovaquie', 'sk'),
	(203, 'Slovénie', 'si'),
	(204, 'Somalie', 'so'),
	(205, 'Sri Lanka', 'lk'),
	(206, 'Sainte Hélène', 'sh'),
	(207, 'Saint Pierre et Miquelon', 'pm'),
	(208, 'Soudan', 'sd'),
	(209, 'Suriname', 'sr'),
	(210, 'Svalbard et Jan Mayen (Iles)', 'sj'),
	(211, 'Swaziland', 'sz'),
	(212, 'Syrie', 'sy'),
	(213, 'Tadjikistan', 'tj'),
	(214, 'Tanzanie', 'tz'),
	(215, 'Togo', 'tg'),
	(216, 'Tokelau', 'tk'),
	(217, 'Tonga', 'to'),
	(218, 'Trinité et Tobago', 'tt'),
	(219, 'Tunisie', 'tn'),
	(220, 'Turkménistan', 'tm'),
	(221, 'Turks et Caïques (Iles)', 'tc'),
	(222, 'Tuvalu', 'tv'),
	(223, 'Iles Mineures Eloignées des Etats-Unis', 'um'),
	(224, 'Ouganda', 'ug'),
	(225, 'Uruguay', 'uy'),
	(226, 'Ouzbékistan', 'uz'),
	(227, 'Vanuatu', 'vu'),
	(228, 'Vatican (Etat du)', 'va'),
	(229, 'Vietnam', 'vn'),
	(230, 'Vierges (Iles)', 'vi'),
	(231, 'Wallis et Futuna (Iles)', 'wf'),
	(232, 'Sahara Occidental', 'eh'),
	(233, 'Yemen', 'ye'),
	(234, 'Zaïre', 'zr'),
	(235, 'Zambie', 'zm'),
	(236, 'Zimbabwe', 'zw'),
	(237, 'La Barbad', 'bb');
/*!40000 ALTER TABLE `pays` ENABLE KEYS */;

-- Listage de la structure de la table projet_groupe_envol_sarl. sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table projet_groupe_envol_sarl.sessions : ~1 rows (environ)
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('xr2N18uhCt9VBxWY4FMlLNOBpCKWHmBiBJw19QeF', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo5OntzOjY6Il90b2tlbiI7czo0MDoiTzN3WU9WczBlZGljdE9SVXVTV1dIdG1EZHEwTk15MWx1RzNob2hBYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MjA6Im5vdGVfaW5mb3JtYXRpb25fbHVlIjtpOjE7czoyMzoibm90ZV9pbmZvcm1hdGlvbl9sdWVfaWQiO2k6NDtzOjE4OiJjb25zZW50ZW1lbnRfc2lnbmUiO2k6MTtzOjE1OiJjb25zZW50ZW1lbnRfaWQiO2k6MTtzOjMxOiJkb25uZWVzX2luZm9ybWF0aW9uc19kZXRhaWxsZWVzIjthOjI5OntzOjY6Il90b2tlbiI7czo0MDoiTzN3WU9WczBlZGljdE9SVXVTV1dIdG1EZHEwTk15MWx1RzNob2hBYSI7czoxNToiY29uc2VudGVtZW50X2lkIjtzOjE6IjEiO3M6MTI6ImVtYWlsX2NsaWVudCI7czoxNzoiZmhvdWVoYUBnbWFpbC5jb20iO3M6MTA6Im5vbV9jbGllbnQiO3M6NjoiSE9VRUhBIjtzOjEzOiJwcmVub21fY2xpZW50IjtzOjc6IkZSQU5DSVMiO3M6MTU6InBhc3N3b3JkX2NsaWVudCI7czozOiIxMjMiO3M6MjM6ImNvbmZpcm1fcGFzc3dvcmRfY2xpZW50IjtzOjM6IjEyMyI7czoyMDoiY29kZV9jbGllbnRfb3VfZW1haWwiO047czoxODoicGFzc3dvcmRfY29ubmV4aW9uIjtOO3M6Mjk6ImF2ZXpfdm91c191bl9wYXNzZXBvcnRfdmFsaWRlIjtzOjM6Im91aSI7czoxNjoicGF5c19uYXRpb25hbGl0ZSI7czoxOiIzIjtzOjk6InZvdHJlX25vbSI7czo2OiJIT1VFSEEiO3M6MTI6InZvdHJlX3ByZW5vbSI7czo3OiJGUkFOQ0lTIjtzOjE0OiJkYXRlX25haXNzYW5jZSI7czoxMDoiMjAwMS0wNi0xMyI7czoxNToidmlsbGVfbmFpc3NhbmNlIjtzOjc6IlBBUkFLT1UiO3M6MTQ6InBheXNfbmFpc3NhbmNlIjtzOjI6Ijc2IjtzOjE0OiJwYXlzX3Jlc2lkZW5jZSI7czoyOiI3MiI7czoxNToidmlsbGVfcmVzaWRlbmNlIjtzOjEwOiJQT1JUTy1OT1ZPIjtzOjE4OiJxdWFydGllcl9yZXNpZGVuY2UiO3M6NDoiUEsxMCI7czoxNjoidGVsZXBob25lX2NsaWVudCI7czo4OiI5NjA0NTM5MiI7czoxMjoiYWRyZXNzZV9tYWlsIjtzOjE3OiJmaG91ZWhhQGdtYWlsLmNvbSI7czoyMjoic2l0dWF0aW9uX21hdHJpbW9uaWFsZSI7czoyMzoiY2VsaWJhdGFpcmUgYXZlYyBlbmZhbnQiO3M6MjM6Im5vbWJyZV9wZXJzb25uZXNfdm95YWdlIjtzOjE6IjIiO3M6MTU6Im5pdmVhdV9mcmFuY2FpcyI7czoxMzoiaW50ZXJtZWRpYWlyZSI7czoxNDoibml2ZWF1X2FuZ2xhaXMiO3M6NzoiYXZhbmPDqSI7czoxODoiZGlwbG9tZV9wbHVzX2VsZXZlIjtzOjM6ImJhYyI7czoxMDoicHJvZmVzc2lvbiI7czo5OiJqYXJkaW5pZXIiO3M6MTc6ImFubmVlc19leHBlcmllbmNlIjtzOjI6IjYrIjtzOjM6InRhYiI7czoyNToiaW5mb3JtYXRpb24tZGV0YWlsbGVlLXRhYiI7fXM6MTI6InRhYl9lbl9jb3VycyI7czoxMjoicGFpZW1lbnQtdGFiIjt9', 1720281763);

-- Listage de la structure de la table projet_groupe_envol_sarl. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table projet_groupe_envol_sarl.users : ~0 rows (environ)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
