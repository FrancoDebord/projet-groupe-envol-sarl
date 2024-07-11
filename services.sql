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

-- Listage de la structure de la table projet_groupe_envol_sarl. services
CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nom_service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statut_service` enum('gratuit','payant') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'payant',
  `frais_inscription` double NOT NULL DEFAULT '0',
  `devise` enum('FCFA') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'FCFA',
  `url_service` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `etat_service` tinyint DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table projet_groupe_envol_sarl.services : ~9 rows (environ)
INSERT INTO `services` (`id`, `nom_service`, `statut_service`, `frais_inscription`, `devise`, `url_service`, `etat_service`, `created_at`, `updated_at`) VALUES
	(1, 'Conseils et assistance Visa-voyage', 'payant', 4, 'FCFA', '#', 0, '2024-07-08 12:53:49', '2024-07-08 12:53:49'),
	(2, 'Intermédiation de récrutement', 'payant', 3, 'FCFA', '#', 0, '2024-07-08 12:53:49', '2024-07-08 12:53:49'),
	(3, 'Négoces', 'payant', 1, 'FCFA', '#', 0, '2024-07-08 12:53:49', '2024-07-08 12:53:49'),
	(4, 'Bourses d\'étude et de formation', 'payant', 1, 'FCFA', '#', 0, '2024-07-08 12:53:49', '2024-07-08 12:53:49'),
	(5, 'Vente de billet d\'avion', 'payant', 1, 'FCFA', '#', 0, '2024-07-08 12:53:49', '2024-07-08 12:53:49'),
	(6, 'Assurance de voyage', 'payant', 1, 'FCFA', '#', 0, '2024-07-08 12:53:49', '2024-07-08 12:53:49'),
	(7, 'Visa Etudiant', 'payant', 3, 'FCFA', '#', 1, '2024-07-10 11:40:52', '2024-07-10 11:40:52'),
	(8, 'Visa Travailleur', 'payant', 2, 'FCFA', '#', 1, '2024-07-10 11:40:52', '2024-07-10 11:40:52'),
	(9, 'Visa Visiteur', 'payant', 4, 'FCFA', '#', 1, '2024-07-10 11:40:52', '2024-07-10 11:40:52');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
