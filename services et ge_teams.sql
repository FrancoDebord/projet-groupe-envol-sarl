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

-- Listage de la structure de la table projet_groupe_envol_sarl. ge_teams
CREATE TABLE IF NOT EXISTS `ge_teams` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titre_member` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_member` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom_member` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poste_member` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe` enum('M','F') COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_member` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio_member` text COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_member` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table projet_groupe_envol_sarl.ge_teams : ~6 rows (environ)
INSERT INTO `ge_teams` (`id`, `titre_member`, `nom_member`, `prenom_member`, `poste_member`, `sexe`, `telephone`, `email_member`, `adresse`, `bio_member`, `facebook`, `youtube`, `twitter`, `linkedin`, `photo_member`, `created_at`, `updated_at`) VALUES
	(1, 'M.', 'AVANON', 'Hospice', 'Directeur Général', 'M', '+2298989898', 'fopisso21@gmail.com', 'Calavi, A IBIS', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua.enim minim veniam, quis nostrud exer citation ullamco laboris nisi aliquip com modo consequat. Duis aute irure dolor in reprenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit volup tatem acusantium dolor emque laud antium.', '', '', '', '', 'team-1.jpg', '2024-08-14 14:11:21', '2024-08-14 14:11:21'),
	(2, 'M.', 'ALODEHITO', 'Fidèle', 'Ressources Humaines', 'M', '+2298989898', 'fopisso21@gmail.com', 'Calavi, A IBIS', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua.enim minim veniam, quis nostrud exer citation ullamco laboris nisi aliquip com modo consequat. Duis aute irure dolor in reprenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit volup tatem acusantium dolor emque laud antium.', '', '', '', '', 'team-2.jpg', '2024-08-14 14:11:22', '2024-08-14 14:11:22'),
	(3, 'Mme.', 'ALODEHITO', 'Saraï', 'Directrice Administrative et Financière', 'M', '+2298989898', 'fopisso21@gmail.com', 'Calavi, A IBIS', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua.enim minim veniam, quis nostrud exer citation ullamco laboris nisi aliquip com modo consequat. Duis aute irure dolor in reprenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit volup tatem acusantium dolor emque laud antium.', '', '', '', '', 'team-3.jpg', '2024-08-14 14:11:22', '2024-08-14 14:11:22'),
	(4, 'M.', 'XXX', 'XXXX', 'Agent', 'M', '+2298989898', 'fopisso21@gmail.com', 'Calavi, A IBIS', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua.enim minim veniam, quis nostrud exer citation ullamco laboris nisi aliquip com modo consequat. Duis aute irure dolor in reprenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit volup tatem acusantium dolor emque laud antium.', '', '', '', '', 'team-4.jpg', '2024-08-14 14:11:22', '2024-08-14 14:11:22'),
	(5, 'M.', 'XXX', 'XXXX', 'Agent', 'M', '+2298989898', 'fopisso21@gmail.com', 'Calavi, A IBIS', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua.enim minim veniam, quis nostrud exer citation ullamco laboris nisi aliquip com modo consequat. Duis aute irure dolor in reprenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit volup tatem acusantium dolor emque laud antium.', '', '', '', '', 'team-5.jpg', '2024-08-14 14:11:22', '2024-08-14 14:11:22'),
	(6, 'M.', 'XXX', 'XXXX', 'Agent', 'M', '+2298989898', 'fopisso21@gmail.com', 'Calavi, A IBIS', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua.enim minim veniam, quis nostrud exer citation ullamco laboris nisi aliquip com modo consequat. Duis aute irure dolor in reprenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit volup tatem acusantium dolor emque laud antium.', '', '', '', '', 'team-6.jpg', '2024-08-14 14:11:22', '2024-08-14 14:11:22');

-- Listage de la structure de la table projet_groupe_envol_sarl. services
CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nom_service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statut_service` enum('gratuit','payant') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'payant',
  `frais_inscription` double NOT NULL DEFAULT '0',
  `devise` enum('FCFA') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'FCFA',
  `url_service` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `etat_service` tinyint DEFAULT '0',
  `image` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `route` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table projet_groupe_envol_sarl.services : ~9 rows (environ)
INSERT INTO `services` (`id`, `nom_service`, `statut_service`, `frais_inscription`, `devise`, `url_service`, `etat_service`, `image`, `description`, `route`, `created_at`, `updated_at`) VALUES
	(1, 'Conseils et assistance Visa-voyage', 'payant', 1, 'FCFA', '#', 0, NULL, NULL, NULL, '2024-07-08 12:53:49', '2024-07-08 12:53:49'),
	(2, 'Intermédiation de récrutement', 'payant', 1, 'FCFA', '#', 0, NULL, NULL, NULL, '2024-07-08 12:53:49', '2024-07-08 12:53:49'),
	(3, 'Négoces', 'payant', 1, 'FCFA', '#', 0, NULL, NULL, NULL, '2024-07-08 12:53:49', '2024-07-08 12:53:49'),
	(4, 'Bourses d\'étude et de formation', 'payant', 1, 'FCFA', '#', 0, NULL, NULL, NULL, '2024-07-08 12:53:49', '2024-07-08 12:53:49'),
	(5, 'Vente de billet d\'avion', 'payant', 1, 'FCFA', '#', 0, NULL, NULL, NULL, '2024-07-08 12:53:49', '2024-07-08 12:53:49'),
	(6, 'Assurance de voyage', 'payant', 1, 'FCFA', '#', 0, 'assurance_voyage.jpg', NULL, NULL, '2024-07-08 12:53:49', '2024-07-08 12:53:49'),
	(7, 'Visa Etudiant', 'payant', 1, 'FCFA', '#', 1, NULL, NULL, NULL, '2024-07-10 11:40:52', '2024-07-10 11:40:52'),
	(8, 'Visa Travailleur', 'payant', 1, 'FCFA', '#', 1, NULL, NULL, NULL, '2024-07-10 11:40:52', '2024-07-10 11:40:52'),
	(9, 'Visa Visiteur', 'payant', 1, 'FCFA', '#', 1, NULL, NULL, NULL, '2024-07-10 11:40:52', '2024-07-10 11:40:52');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
