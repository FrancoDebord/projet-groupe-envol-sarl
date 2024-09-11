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

-- Listage de la structure de la table projet_groupe_envol_sarl. contacts_messages
CREATE TABLE IF NOT EXISTS `contacts_messages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table projet_groupe_envol_sarl.contacts_messages : ~1 rows (environ)
INSERT INTO `contacts_messages` (`id`, `contact_name`, `contact_email`, `contact_message`, `created_at`, `updated_at`) VALUES
	(1, 'HOUEHA FRANCIS', 'fhoueha@gmail.com', 'Je vous aime', '2024-09-11 13:59:56', '2024-09-11 13:59:56'),
	(2, 'HOUEHA FRANCIS', 'fhoueha@gmail.com', 'Je vous aime', '2024-09-11 14:02:23', '2024-09-11 14:02:23'),
	(3, 'HOUEHA FRANCIS', 'fhoueha@gmail.com', 'Je vous aime', '2024-09-11 14:03:02', '2024-09-11 14:03:02'),
	(4, 'HOUEHA FRANCIS', 'fhoueha@gmail.com', 'Je vous aime', '2024-09-11 14:03:43', '2024-09-11 14:03:43'),
	(5, 'HOUEHA FRANCIS', 'fhoueha@gmail.com', 'Je vous aime', '2024-09-11 14:03:52', '2024-09-11 14:03:52'),
	(6, 'CORINE NGUFOR', 'FHOUEHA@GMAIL.COM', 'amldlmdlmdqs', '2024-09-11 14:05:51', '2024-09-11 14:05:51'),
	(7, 'CORINE NGUFOR', 'FHOUEHA@GMAIL.COM', 'amldlmdlmdqs', '2024-09-11 14:06:40', '2024-09-11 14:06:40'),
	(8, 'HOUEHA FRANCIS', 'FHOUEHA@GMAIL.COM', 'zeelelmezmlezlmezlmez', '2024-09-11 14:07:47', '2024-09-11 14:07:47');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
