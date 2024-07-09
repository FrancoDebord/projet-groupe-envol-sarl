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

-- Listage de la structure de la table projet_groupe_envol_sarl. client_services
CREATE TABLE IF NOT EXISTS `client_services` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `avez_vous_un_passeport` tinyint(1) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe` enum('M','F') COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_naissance` date NOT NULL,
  `pays_naissance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville_naissance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays_residence` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville_residence` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quartier_residence` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays_nationalite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone_client` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_client` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `situation_matrimoniale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `niveau_francais` enum('basique','intermediaire','avance') COLLATE utf8mb4_unicode_ci NOT NULL,
  `niveau_anglais` enum('basique','intermediaire','avance') COLLATE utf8mb4_unicode_ci NOT NULL,
  `diplome_plus_eleve` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nb_annees_experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nb_personnes_voyage` int DEFAULT NULL,
  `note_information_id` int NOT NULL,
  `consentement_signe_id` int NOT NULL,
  `user_id` int NOT NULL,
  `piece_identite` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attestation_diplome_plus_eleve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `releves_notes_diplome_plus_eleve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `client_services_note_information_id_index` (`note_information_id`),
  KEY `client_services_consentement_signe_id_index` (`consentement_signe_id`),
  KEY `client_services_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table projet_groupe_envol_sarl.client_services : ~0 rows (environ)
INSERT INTO `client_services` (`id`, `avez_vous_un_passeport`, `nom`, `prenom`, `sexe`, `date_naissance`, `pays_naissance`, `ville_naissance`, `pays_residence`, `ville_residence`, `quartier_residence`, `pays_nationalite`, `telephone_client`, `email_client`, `situation_matrimoniale`, `niveau_francais`, `niveau_anglais`, `diplome_plus_eleve`, `profession`, `nb_annees_experience`, `nb_personnes_voyage`, `note_information_id`, `consentement_signe_id`, `user_id`, `piece_identite`, `attestation_diplome_plus_eleve`, `releves_notes_diplome_plus_eleve`, `created_at`, `updated_at`) VALUES
	(1, 1, 'HOUEHA', 'FRANCIS', 'M', '2016-06-15', 'Aruba', 'BOHICON', 'Aruba', 'ZOBOZA', 'ZONGO', 'Autriche', '89898989', 'fhoueha@gmail.com', 'celibataire avec enfant', 'intermediaire', 'basique', 'ir,dea,dess,master', 'mecanicien auto', '5', 2, 8, 4, 17, 'piece_identite_2024-07-08_12-43-01_FID KPONOU DAVID __ ANIP_DOC_G-HWTJZDYB.pdf', 'attestation_diplome_plus_eleve_2024-07-08_12-43-01_MENAGE NATI MORSURE SERPENT BASELINE.pdf', 'releves_notes_diplome_plus_eleve_2024-07-08_12-43-01_MENAGE TCHAOUROU MORSURE SERPENT BASELINE.pdf', '2024-07-08 11:43:29', '2024-07-08 11:43:29');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table projet_groupe_envol_sarl.consentements_signes : ~0 rows (environ)
INSERT INTO `consentements_signes` (`id`, `date_consentement`, `heure_consentement`, `consentement_signe`, `note_information_id`, `adresse_ip_ordinateur`, `nom_consentement`, `prenom_consentement`, `created_at`, `updated_at`) VALUES
	(1, '2024-07-06', '10:40:39', 1, 4, '127.0.0.1', 'HOUEHA', 'Francis', '2024-07-06 09:40:39', '2024-07-06 09:40:39'),
	(2, '2024-07-07', '22:39:41', 1, 6, '127.0.0.1', 'HOUEHA', 'FRANCIS', '2024-07-07 21:39:41', '2024-07-07 21:39:41'),
	(3, '2024-07-08', '08:03:30', 1, 7, '127.0.0.1', 'KOKOU', 'BERNICE', '2024-07-08 07:03:30', '2024-07-08 07:03:30'),
	(4, '2024-07-08', '12:40:29', 1, 8, '127.0.0.1', 'HOUEHA', 'FRANCIS', '2024-07-08 11:40:29', '2024-07-08 11:40:29');

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

-- Listage de la structure de la table projet_groupe_envol_sarl. inscriptions_clients_services
CREATE TABLE IF NOT EXISTS `inscriptions_clients_services` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `code_inscription` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_inscription` date NOT NULL,
  `heure_inscription` time NOT NULL,
  `note_information_id` int NOT NULL,
  `consentement_signe_id` int NOT NULL,
  `piece_identite` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attestation_diplome_plus_eleve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `releves_notes_diplome_plus_eleve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_id` int NOT NULL,
  `pays_destination` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statut_paiement` enum('payé','remboursé','non effectué','en cours') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kkiapay_transaction_id` bigint NOT NULL DEFAULT '0',
  `kkiapay_external_transaction_id` bigint NOT NULL DEFAULT '0',
  `service_souscrit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statut_dossier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `inscriptions_clients_services_code_inscription_unique` (`code_inscription`),
  KEY `inscriptions_clients_services_note_information_id_index` (`note_information_id`),
  KEY `inscriptions_clients_services_consentement_signe_id_index` (`consentement_signe_id`),
  KEY `inscriptions_clients_services_client_id_index` (`client_id`),
  KEY `inscriptions_clients_services_kkiapay_transaction_id_index` (`kkiapay_transaction_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table projet_groupe_envol_sarl.inscriptions_clients_services : ~0 rows (environ)
INSERT INTO `inscriptions_clients_services` (`id`, `code_inscription`, `date_inscription`, `heure_inscription`, `note_information_id`, `consentement_signe_id`, `piece_identite`, `attestation_diplome_plus_eleve`, `releves_notes_diplome_plus_eleve`, `client_id`, `pays_destination`, `statut_paiement`, `kkiapay_transaction_id`, `kkiapay_external_transaction_id`, `service_souscrit`, `statut_dossier`, `created_at`, `updated_at`) VALUES
	(1, 'GE-00001', '2024-07-08', '12:46:29', 8, 4, 'piece_identite_2024-07-08_12-43-01_FID KPONOU DAVID __ ANIP_DOC_G-HWTJZDYB.pdf', 'attestation_diplome_plus_eleve_2024-07-08_12-43-01_MENAGE NATI MORSURE SERPENT BASELINE.pdf', 'releves_notes_diplome_plus_eleve_2024-07-08_12-43-01_MENAGE TCHAOUROU MORSURE SERPENT BASELINE.pdf', 1, 'CANADA', 'payé', 9009332351902064, 7621663622, 'conseil et assistance voyage', 'en cours d\'étude', '2024-07-08 11:46:29', '2024-07-08 11:46:29');

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
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table projet_groupe_envol_sarl.migrations : 6 rows
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(20, '2024_07_07_221806_create_inscription_client_services_table', 4),
	(7, '2024_07_01_093047_create_documents_clients_services_table', 2),
	(8, '2024_07_05_085154_create_note_informations_lue_table', 3),
	(9, '2024_07_05_085532_create_consentements_signes_table', 3),
	(19, '2024_07_01_091123_create_clients_services_table', 4),
	(22, '2024_07_08_133830_create_services_table', 5);
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table projet_groupe_envol_sarl.note_informations_lue : ~2 rows (environ)
INSERT INTO `note_informations_lue` (`id`, `date_lecture`, `heure_lecture`, `note_lue`, `note_information_telechargee`, `adresse_ip_ordinateur`, `created_at`, `updated_at`) VALUES
	(2, '2024-07-05', '10:21:26', 1, 1, '127.0.0.1', '2024-07-05 09:21:26', '2024-07-05 09:21:26'),
	(3, '2024-07-05', '15:51:15', 1, 1, '127.0.0.1', '2024-07-05 14:51:15', '2024-07-05 14:51:15'),
	(4, '2024-07-06', '10:07:06', 1, 1, '127.0.0.1', '2024-07-06 09:07:06', '2024-07-06 09:07:06'),
	(5, '2024-07-07', '22:30:36', 1, 1, '127.0.0.1', '2024-07-07 21:30:36', '2024-07-07 21:30:36'),
	(6, '2024-07-07', '22:31:48', 1, 1, '127.0.0.1', '2024-07-07 21:31:48', '2024-07-07 21:31:48'),
	(7, '2024-07-08', '08:03:02', 1, 1, '127.0.0.1', '2024-07-08 07:03:02', '2024-07-08 07:03:02'),
	(8, '2024-07-08', '12:40:10', 1, 1, '127.0.0.1', '2024-07-08 11:40:10', '2024-07-08 11:40:10');

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

-- Listage de la structure de la table projet_groupe_envol_sarl. services
CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nom_service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statut_service` enum('gratuit','payant') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'payant',
  `frais_inscription` double NOT NULL DEFAULT '0',
  `devise` enum('FCFA') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'FCFA',
  `url_service` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table projet_groupe_envol_sarl.services : ~6 rows (environ)
INSERT INTO `services` (`id`, `nom_service`, `statut_service`, `frais_inscription`, `devise`, `url_service`, `created_at`, `updated_at`) VALUES
	(1, 'Conseils et assistance Visa-voyage', 'payant', 1, 'FCFA', '#', '2024-07-08 12:53:49', '2024-07-08 12:53:49'),
	(2, 'Intermédiation de récrutement', 'payant', 1, 'FCFA', '#', '2024-07-08 12:53:49', '2024-07-08 12:53:49'),
	(3, 'Négoces', 'payant', 1, 'FCFA', '#', '2024-07-08 12:53:49', '2024-07-08 12:53:49'),
	(4, 'Bourses d\'étude et de formation', 'payant', 1, 'FCFA', '#', '2024-07-08 12:53:49', '2024-07-08 12:53:49'),
	(5, 'Vente de billet d\'avion', 'payant', 1, 'FCFA', '#', '2024-07-08 12:53:49', '2024-07-08 12:53:49'),
	(6, 'Assurance de voyage', 'payant', 1, 'FCFA', '#', '2024-07-08 12:53:49', '2024-07-08 12:53:49');

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

-- Listage des données de la table projet_groupe_envol_sarl.sessions : ~2 rows (environ)
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('CpQvTtGJNwP0meio9enwvjUlF6PQGgRarY1i2MeU', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaXgydzgzaUhTSXF6eVdPYW5XNVlWcVN4WEU0M0NZRHJtS0hIYlVzUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9pbnNjcmlwdGlvbj90YWI9cGFpZW1lbnQtdGFiIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1720447236),
	('JTG4A1JsTQHzKmTkevbvywtLJ4X0SUB1eYcWUIYK', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YToxMDp7czo2OiJfdG9rZW4iO3M6NDA6IlQwYVk5YVMwSHNvbmdVYWw5NTdQM3FPcndQOVVhNDNlSUlwVHFmZlQiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjUwOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvaW5zY3JpcHRpb24/dGFiPXBhaWVtZW50LXRhYiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MjA6Im5vdGVfaW5mb3JtYXRpb25fbHVlIjtpOjE7czoyMzoibm90ZV9pbmZvcm1hdGlvbl9sdWVfaWQiO2k6NztzOjEyOiJ0YWJfZW5fY291cnMiO3M6MTI6InBhaWVtZW50LXRhYiI7czoxODoiY29uc2VudGVtZW50X3NpZ25lIjtpOjE7czoxNToiY29uc2VudGVtZW50X2lkIjtpOjM7czozMToiZG9ubmVlc19pbmZvcm1hdGlvbnNfZGV0YWlsbGVlcyI7YTozMDp7czo2OiJfdG9rZW4iO3M6NDA6IlQwYVk5YVMwSHNvbmdVYWw5NTdQM3FPcndQOVVhNDNlSUlwVHFmZlQiO3M6MTU6ImNvbnNlbnRlbWVudF9pZCI7czoxOiIzIjtzOjEyOiJlbWFpbF9jbGllbnQiO3M6MTc6ImJlcm5pY2VAZ21haWwuY29tIjtzOjEwOiJub21fY2xpZW50IjtzOjU6IktPS09VIjtzOjEzOiJwcmVub21fY2xpZW50IjtzOjc6IkJFUk5JQ0UiO3M6MTU6InBhc3N3b3JkX2NsaWVudCI7czozOiIxMjMiO3M6MjM6ImNvbmZpcm1fcGFzc3dvcmRfY2xpZW50IjtzOjM6IjEyMyI7czoyMDoiY29kZV9jbGllbnRfb3VfZW1haWwiO047czoxODoicGFzc3dvcmRfY29ubmV4aW9uIjtOO3M6Mjk6ImF2ZXpfdm91c191bl9wYXNzZXBvcnRfdmFsaWRlIjtzOjE6IjEiO3M6MTY6InBheXNfbmF0aW9uYWxpdGUiO3M6MjoiNzMiO3M6OToidm90cmVfbm9tIjtzOjU6IktPS09VIjtzOjEyOiJ2b3RyZV9wcmVub20iO3M6NzoiQkVSTklDRSI7czoxNDoiZGF0ZV9uYWlzc2FuY2UiO3M6MTA6IjIwMDQtMDYtMDkiO3M6MTU6InZpbGxlX25haXNzYW5jZSI7czo3OiJDT1RPTk9VIjtzOjE0OiJwYXlzX25haXNzYW5jZSI7czoxOiIzIjtzOjQ6InNleGUiO3M6MToiRiI7czoxNDoicGF5c19yZXNpZGVuY2UiO3M6MjoiNzMiO3M6MTU6InZpbGxlX3Jlc2lkZW5jZSI7czo3OiJQQVJBS09VIjtzOjE4OiJxdWFydGllcl9yZXNpZGVuY2UiO3M6NToiWk9OR08iO3M6MTY6InRlbGVwaG9uZV9jbGllbnQiO3M6ODoiOTA5ODk4OTgiO3M6MTI6ImFkcmVzc2VfbWFpbCI7czoxNzoiYmVybmljZUBnbWFpbC5jb20iO3M6MjI6InNpdHVhdGlvbl9tYXRyaW1vbmlhbGUiO3M6MjM6ImNlbGliYXRhaXJlIHNhbnMgZW5mYW50IjtzOjIzOiJub21icmVfcGVyc29ubmVzX3ZveWFnZSI7czoxOiI0IjtzOjE1OiJuaXZlYXVfZnJhbmNhaXMiO3M6MTM6ImludGVybWVkaWFpcmUiO3M6MTQ6Im5pdmVhdV9hbmdsYWlzIjtzOjEzOiJpbnRlcm1lZGlhaXJlIjtzOjE4OiJkaXBsb21lX3BsdXNfZWxldmUiO3M6MzoiYnRzIjtzOjEwOiJwcm9mZXNzaW9uIjtzOjE3OiJhZ2VudCBkZSBzZWN1cml0ZSI7czoxNzoiYW5uZWVzX2V4cGVyaWVuY2UiO3M6MToiMiI7czozOiJ0YWIiO3M6MjU6ImluZm9ybWF0aW9uLWRldGFpbGxlZS10YWIiO31zOjI4OiJkb25uZWVzX2luZm9ybWF0aW9uc19zZXJ2aWNlIjthOjY6e3M6NjoiX3Rva2VuIjtzOjQwOiJUMGFZOWFTMEhzb25nVWFsOTU3UDNxT3J3UDlVYTQzZUlJcFRxZmZUIjtzOjI5OiJpbmZvcm1hdGlvbl9kZXRhaWxsZWVfZm91cm5pZSI7czoxOiIxIjtzOjE5OiJzZXJ2aWNlX2luc2NyaXB0aW9uIjtzOjI4OiJjb25zZWlsIGV0IGFzc2lzdGFuY2Ugdm95YWdlIjtzOjE0OiJwaWVjZV9pZGVudGl0ZSI7czo1NjoicGllY2VfaWRlbnRpdGVfMjAyNC0wNy0wOF8wOC0wOC0yMl9QUkVVVkUgRVhQRVJJRU5DRS5wZGYiO3M6MzA6ImF0dGVzdGF0aW9uX2RpcGxvbWVfcGx1c19lbGV2ZSI7czo5NjoiYXR0ZXN0YXRpb25fZGlwbG9tZV9wbHVzX2VsZXZlXzIwMjQtMDctMDhfMDgtMDgtMjJfTUVOQUdFIFRDSEFPVVJPVSBNT1JTVVJFIFNFUlBFTlQgQkFTRUxJTkUucGRmIjtzOjMyOiJyZWxldmVzX25vdGVzX2RpcGxvbWVfcGx1c19lbGV2ZSI7czo2NToicmVsZXZlc19ub3Rlc19kaXBsb21lX3BsdXNfZWxldmVfMjAyNC0wNy0wOF8wOC0wOC0yMl9CQUMgT01FUi5wZGYiO319', 1720433023);

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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table projet_groupe_envol_sarl.users : ~0 rows (environ)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(17, 'HOUEHA FRANCIS', 'fhoueha@gmail.com', NULL, '$2y$12$ndSVfS2PkKaLRfHIQLz4gePff1xTSxhWZkLlS7C1bX7BUZHW2Y9hC', NULL, '2024-07-08 11:43:29', '2024-07-08 11:43:29');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
