-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para bdpagos
CREATE DATABASE IF NOT EXISTS `bdpagos` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `bdpagos`;

-- Volcando estructura para tabla bdpagos.pagos
CREATE TABLE IF NOT EXISTS `pagos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `deudor` varchar(10) DEFAULT NULL,
  `numero_cuota` int DEFAULT NULL,
  `cuota` decimal(10,2) DEFAULT NULL,
  `fecha_pago` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla bdpagos.pagos: ~4 rows (aproximadamente)
DELETE FROM `pagos`;
INSERT INTO `pagos` (`id`, `deudor`, `numero_cuota`, `cuota`, `fecha_pago`) VALUES
	(1, 'Jordan', 2, 100.00, '2023-05-06'),
	(2, 'Kendall', 3, 100.00, '2023-05-06'),
	(3, 'fiorela', 2, 100.00, '2023-05-06'),
	(4, 'fiorela', 2, 100.00, '2023-05-06'),
	(5, 'Aliz', 9, 40.00, '2023-05-06'),
	(6, 'Aliz', 9, 40.00, '2023-05-06'),
	(7, 'Kendall', 3, 100.00, '2023-05-06'),
	(8, 'Aliz', 9, 40.00, '2023-05-06'),
	(9, 'Aliz', 9, 40.00, '2023-05-06'),
	(10, 'Aliz', 9, 40.00, '2023-05-06'),
	(11, 'fiorela', 3, 100.00, '2024-06-08'),
	(12, 'fiorela', 3, 100.00, '2024-06-08');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
