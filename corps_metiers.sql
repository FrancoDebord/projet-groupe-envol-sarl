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

-- Listage de la structure de la table projet_groupe_envol_sarl. corps_metiers
CREATE TABLE IF NOT EXISTS `corps_metiers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `intitule_metier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table projet_groupe_envol_sarl.corps_metiers : ~50 rows (environ)
INSERT INTO `corps_metiers` (`id`, `intitule_metier`, `created_at`, `updated_at`) VALUES
	(1, 'Chercheur', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(2, 'Enseignant', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(3, 'Ingénieur', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(4, 'Economiste', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(5, 'Banquier', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(6, 'Financier', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(7, 'Gestionnaire', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(8, 'Comptable', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(9, 'Sociologue', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(10, 'Juriste', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(11, 'Agronome', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(12, 'Secrétaire', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(13, 'Psychologue', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(14, 'Commercial', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(15, 'Médecin', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(16, 'Pharmacien', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(17, 'Infirmier', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(18, 'Sage-femme', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(19, 'Aide-soignant', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(20, 'Laborantin', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(21, 'Kinésithérapeute', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(22, 'Délégué médical', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(23, 'Informaticien', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(24, 'Vétérinaire', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(25, 'Psychiatre', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(26, 'Auditeur', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(27, 'Commerçant', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(28, 'Photographe', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(29, 'Vitrier', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(30, 'Coiffeur et coiffeuse', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(31, 'Maçon', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(32, 'Menuisier', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(33, 'Carreleur', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(34, 'Peintre', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(35, 'Plombier', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(36, 'Cuisinier', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(37, 'Conducteur poids lourds', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(38, 'Électricien tout genre', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(39, 'Couturier', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(40, 'Serveur et serveuse', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(41, 'Réceptionniste', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(42, 'Agent de sécurité', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(43, 'Vulgarisateur', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(44, 'Cordonniers', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(45, 'Agent d\'entretien', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(46, 'Mécanicien auto', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(47, 'Éleveur', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(48, 'Ménagère', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(49, 'Jardiner', '2024-07-11 11:02:44', '2024-07-11 11:02:44'),
	(50, 'Soudeur', '2024-07-11 11:02:44', '2024-07-11 11:02:44');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
