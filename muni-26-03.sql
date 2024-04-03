-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.33 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando estructura para tabla municipalidad.archivos
DROP TABLE IF EXISTS `archivos`;
CREATE TABLE IF NOT EXISTS `archivos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(191) CHARACTER SET latin1 NOT NULL,
  `nombre_agradable` varchar(191) CHARACTER SET latin1 DEFAULT NULL,
  `seccion_id` int(11) DEFAULT NULL,
  `sub_seccion` varchar(191) CHARACTER SET latin1 DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Volcando datos para la tabla municipalidad.archivos: ~18 rows (aproximadamente)
/*!40000 ALTER TABLE `archivos` DISABLE KEYS */;
INSERT INTO `archivos` (`id`, `nombre`, `nombre_agradable`, `seccion_id`, `sub_seccion`, `created_at`, `updated_at`) VALUES
	(1, '1697643447000_DIGESTO-DE_HABILITACION_PARA_CARNICERIAS.pdf', '1697643447000 DIGESTO  DE HABILITACION PARA CARNICERIAS.pdf', 34, NULL, '2024-01-05 17:25:03', '2024-01-05 17:25:03'),
	(2, '1697643470427_DIGESTO_DE_HABILITACION_DE_MERCADOS.pdf', '1697643470427 DIGESTO DE HABILITACION DE MERCADOS.pdf', 34, NULL, '2024-01-05 17:25:03', '2024-01-05 17:25:03'),
	(3, '1697643497598_DIGESTO_GENERAL_DE_HABILITACIONES.pdf', '1697643497598 DIGESTO GENERAL DE HABILITACIONES.pdf', 34, NULL, '2024-01-05 17:25:03', '2024-01-05 17:25:03'),
	(4, 'Digesto_de_hab_de_panaderias_y_afines.pdf', 'Digesto de hab de panaderias y afines.pdf', 34, NULL, '2024-01-05 17:25:03', '2024-01-05 17:25:03'),
	(5, 'Registro_municipal_de_maquinas_pulverizadoras_Tres_Arroyos.pdf', 'Registro municipal de maquinas pulverizadoras Tres Arroyos', 33, 'agroquimicos', '2024-01-15 13:26:35', '2024-01-15 13:26:35'),
	(6, 'Registro-de-Pulverizadoras.pdf', 'Registro de Pulverizadoras', 33, 'agroquimicos', '2024-01-15 13:26:35', '2024-01-15 13:26:35'),
	(7, 'ALACRANISMO.pdf', 'ALACRANISMO', 33, 'documentos', '2024-01-15 13:27:51', '2024-01-15 13:27:51'),
	(8, 'Ampliacion-de-la-Planta-Urbana-de-Claromeco.pdf', 'Ampliación de la Planta Urbana de Claromecó', 33, 'documentos', '2024-01-15 13:27:51', '2024-01-15 13:27:51'),
	(9, 'boletin_ofidismo.pdf', 'Ofidismo', 33, 'documentos', '2024-01-15 13:27:51', '2024-01-15 13:27:51'),
	(10, 'boletin_ponzoñosos_rs1.pdf', 'Boletín ponzoñosos', 33, 'documentos', '2024-01-15 13:27:51', '2024-01-15 13:27:51'),
	(11, 'EL_PUMA-Folleto.pdf', 'El Puma', 33, 'documentos', '2024-01-15 13:27:51', '2024-01-15 13:27:51'),
	(12, 'FolletoInstructivoPoda.pdf', 'Instructivo Poda', 33, 'documentos', '2024-01-15 13:27:51', '2024-01-15 13:27:51'),
	(13, 'Guía_Modelo_de_Observacion_de_Aves_Subsecretaria_de_Turismo_PBA.pdf', 'Observación de Aves', 33, 'documentos', '2024-01-15 13:27:51', '2024-01-15 13:27:51'),
	(14, 'PautasTecnicasForestacion.pdf', 'Tecnicas de Forestación', 33, 'documentos', '2024-01-15 13:27:51', '2024-01-15 13:27:51'),
	(15, 'san_francisco.pdf', 'San Francisco de Asis', 33, 'documentos', '2024-01-15 13:27:51', '2024-01-15 13:27:51'),
	(16, 'secretaria.pdf', 'Secretaria', 33, 'documentos', '2024-01-15 13:27:51', '2024-01-15 13:27:51'),
	(17, 'tu_casa_recicla.pdf', 'Tu casa recicla', 33, 'documentos', '2024-01-15 13:37:47', '2024-01-15 13:37:47'),
	(18, 'Resultados_IGEI.pdf', 'informe', 33, 'gases', '2024-01-15 13:38:53', '2024-01-15 13:38:53');
/*!40000 ALTER TABLE `archivos` ENABLE KEYS */;

-- Volcando estructura para tabla municipalidad.area
DROP TABLE IF EXISTS `area`;
CREATE TABLE IF NOT EXISTS `area` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Volcando datos para la tabla municipalidad.area: ~25 rows (aproximadamente)
/*!40000 ALTER TABLE `area` DISABLE KEYS */;
INSERT INTO `area` (`id`, `nombre`, `email`, `created_at`, `updated_at`) VALUES
	(1, 'Computos', NULL, '2023-11-28 14:25:10', NULL),
	(2, 'Desarrollo social', NULL, '2023-11-28 14:25:17', NULL),
	(3, 'Gestion ambiental', 'gestionambiental@tresarroyos.gov.ar', '2023-11-28 14:25:21', NULL),
	(4, 'Mesa de entrada', NULL, '2023-11-28 14:25:23', NULL),
	(5, 'Obras publicas - Planeamiento urbano', 'serviciospublicos@tresarroyos.gov.ar', '2023-11-28 14:25:26', NULL),
	(6, 'Politicas tributarias', 'reclamos@tresarroyos.gov.ar', '2023-11-28 14:25:28', NULL),
	(7, 'Prensa', 'prensa.hcd@tresarroyos.gov.ar', '2023-11-28 14:25:31', NULL),
	(8, 'Produccion', NULL, '2023-11-28 14:25:33', NULL),
	(9, 'Salud y prevencion', NULL, '2023-11-28 14:25:35', NULL),
	(10, 'Seguridad', 'seguridad@tresarroyos.gov.ar', '2023-11-28 14:25:37', NULL),
	(11, 'Secretaria de gobierno', NULL, '2023-11-28 14:25:40', NULL),
	(12, 'Secretaría de hacienda', NULL, '2023-11-28 14:25:42', NULL),
	(13, 'Obras sanitarias - Planeamiento Urbano', 'sanitarias@tresarroyos.gov.ar', NULL, NULL),
	(14, 'zoonosis', NULL, NULL, NULL),
	(15, 'Bromatologia', 'bromatologia@tresarroyos.gov.ar', NULL, NULL),
	(16, 'Cultura', 'cultura@tresarroyos.gov.ar', '2023-12-05 14:56:13', NULL),
	(17, 'Turismo', 'turismo@tresarroyos.gov.ar', '2023-12-05 14:56:13', NULL),
	(18, 'Cementerio', NULL, NULL, NULL),
	(19, 'Compras y suministros', NULL, '2024-03-05 14:25:47', NULL),
	(20, 'Catastro', NULL, '2024-03-05 14:25:47', NULL),
	(21, 'Guías', NULL, '2024-03-05 14:25:47', NULL),
	(22, 'Desarrollo Económico', NULL, '2024-03-05 14:25:47', NULL),
	(23, 'Tesoreria', NULL, '2024-03-05 14:25:47', NULL),
	(24, 'Delegación Municipal Copetonas', NULL, '2024-03-05 14:25:47', NULL),
	(25, 'Obras Particulares - Planeamiento urbano', NULL, '2024-03-05 14:25:47', NULL);
/*!40000 ALTER TABLE `area` ENABLE KEYS */;

-- Volcando estructura para tabla municipalidad.categorias
DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET latin1 NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Volcando datos para la tabla municipalidad.categorias: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
	(1, 'Generales', NULL, '2024-03-25'),
	(2, 'Cultura', NULL, NULL),
	(3, 'La ciudad', NULL, NULL),
	(4, 'Salud', NULL, NULL);
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;

-- Volcando estructura para tabla municipalidad.delegacion
DROP TABLE IF EXISTS `delegacion`;
CREATE TABLE IF NOT EXISTS `delegacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(191) CHARACTER SET latin1 NOT NULL,
  `descripcion` text CHARACTER SET latin1,
  `img` varchar(191) CHARACTER SET latin1 NOT NULL,
  `link` varchar(191) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Volcando datos para la tabla municipalidad.delegacion: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `delegacion` DISABLE KEYS */;
INSERT INTO `delegacion` (`id`, `nombre`, `descripcion`, `img`, `link`) VALUES
	(1, 'Claromecó', NULL, 'claromeco.png', 'https://claromeco.tresarroyos.gov.ar/'),
	(2, 'Copetonas', NULL, 'copetonas.png', 'http://turismo.tresarroyos.gov.ar/lugares/copetonas'),
	(3, 'Micaela Cascallares', NULL, 'micaela-cascallares.png', 'http://turismo.tresarroyos.gov.ar/lugares/micaela-cascallares'),
	(4, 'Orense', NULL, 'orense.png', 'http://turismo.tresarroyos.gov.ar/lugares/balneario-orense'),
	(5, 'Reta', NULL, 'reta.png', 'https://www.puebloreta.com.ar/'),
	(6, 'San Mayol', NULL, 'san-mayol.png', 'http://turismo.tresarroyos.gov.ar/lugares/san-mayol'),
	(7, 'Tres Arroyos', NULL, 'tres-arroyos.png', 'http://turismo.tresarroyos.gov.ar/lugares/tres-arroyos'),
	(8, 'San Francisco de Bellocq', NULL, 'bellocq.png', 'http://turismo.tresarroyos.gov.ar/lugares/san-francisco-de-bellocq');
/*!40000 ALTER TABLE `delegacion` ENABLE KEYS */;

-- Volcando estructura para tabla municipalidad.evento
DROP TABLE IF EXISTS `evento`;
CREATE TABLE IF NOT EXISTS `evento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `seccion_id` int(11) NOT NULL,
  `img` varchar(191) CHARACTER SET latin1 NOT NULL,
  `vigente` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `evento_seccion_pagina_FK` (`seccion_id`),
  CONSTRAINT `evento_seccion_pagina_FK` FOREIGN KEY (`seccion_id`) REFERENCES `seccion_pagina` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla municipalidad.evento: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `evento` DISABLE KEYS */;
INSERT INTO `evento` (`id`, `seccion_id`, `img`, `vigente`) VALUES
	(1, 4, 'dos.jpg', 1),
	(2, 4, 'jojo.jpg', 1),
	(3, 6, 'bike.jpg', 1),
	(4, 6, 'caminata.jpg', 1),
	(5, 6, 'colonia.jpg', 1),
	(6, 6, 'gim.jpg', 1),
	(7, 6, 'handball.jpg', 1),
	(8, 6, 'juegos.jpg', 1),
	(9, 6, 'voley.jpg', 1),
	(10, 6, 'yoga.jpg', 1),
	(11, 6, 'zumba.jpg', 1);
/*!40000 ALTER TABLE `evento` ENABLE KEYS */;

-- Volcando estructura para tabla municipalidad.failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Volcando datos para la tabla municipalidad.failed_jobs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Volcando estructura para tabla municipalidad.galeria
DROP TABLE IF EXISTS `galeria`;
CREATE TABLE IF NOT EXISTS `galeria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(191) CHARACTER SET latin1 NOT NULL,
  `seccion_texto_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `galeria_seccion_textos_FK` (`seccion_texto_id`),
  CONSTRAINT `galeria_seccion_textos_FK` FOREIGN KEY (`seccion_texto_id`) REFERENCES `seccion_textos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla municipalidad.galeria: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `galeria` DISABLE KEYS */;
INSERT INTO `galeria` (`id`, `img`, `seccion_texto_id`) VALUES
	(2, 'biblio2.jpg', 12),
	(3, 'biblio4.jpg', 12),
	(4, 'siria.jpg', 5),
	(5, 'holandesa.jpg', 5),
	(6, '2.jpg', 5);
/*!40000 ALTER TABLE `galeria` ENABLE KEYS */;

-- Volcando estructura para tabla municipalidad.galeria_portada
DROP TABLE IF EXISTS `galeria_portada`;
CREATE TABLE IF NOT EXISTS `galeria_portada` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(191) CHARACTER SET latin1 NOT NULL,
  `seccion_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `galeria_portada_seccion_pagina_FK` (`seccion_id`),
  CONSTRAINT `galeria_portada_seccion_pagina_FK` FOREIGN KEY (`seccion_id`) REFERENCES `seccion_pagina` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla municipalidad.galeria_portada: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `galeria_portada` DISABLE KEYS */;
INSERT INTO `galeria_portada` (`id`, `img`, `seccion_id`) VALUES
	(1, 'biblio3.jpg', 26),
	(2, 'colectividades.jpg', 30),
	(3, 'estacionamiento-medido.jpg', 50),
	(4, 'gestion-ambiental-portada.jpg', 33),
	(5, 'bromatologia.jpg', 34),
	(6, 'cce.jpeg', 28),
	(7, 'cce.jpeg', 29),
	(8, 'fdt.jpg', 56);
/*!40000 ALTER TABLE `galeria_portada` ENABLE KEYS */;

-- Volcando estructura para tabla municipalidad.institucion_educativa
DROP TABLE IF EXISTS `institucion_educativa`;
CREATE TABLE IF NOT EXISTS `institucion_educativa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nivel_id` int(11) NOT NULL,
  `nombre` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ubicacion` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `contacto` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `informacion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `sitio_web` varchar(1500) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `instagram` varchar(1500) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `facebook` varchar(1500) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `horarios_de_atencion` varchar(1500) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nivel_id` (`nivel_id`),
  CONSTRAINT `institucion_educativa_institucion_educativa_nivel_FK` FOREIGN KEY (`nivel_id`) REFERENCES `institucion_educativa_nivel` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COMMENT='Se registran todas las instituciones educativas de nivel Terciario y Universitario que hay en Tres Arroyos';

-- Volcando datos para la tabla municipalidad.institucion_educativa: ~16 rows (aproximadamente)
/*!40000 ALTER TABLE `institucion_educativa` DISABLE KEYS */;
INSERT INTO `institucion_educativa` (`id`, `nivel_id`, `nombre`, `ubicacion`, `email`, `contacto`, `informacion`, `sitio_web`, `instagram`, `facebook`, `horarios_de_atencion`) VALUES
	(1, 3, 'CRESTA', 'MAIPU 270', 'cresta@cresta.edu.ar', '02983-430131', '<span class="font-detail-minimalist"> Responsable: Sub Coordinador Ing. Francisco Genisio </span> <br><br>\r\n\r\nEl Centro Regional de Estudios Superiores de la ciudad de Tres Arroyos (CRESTA) funciona desde 2005 como extensión áulica de distintas Universidades Nacionales o Provinciales con las que el municipio mantiene convenio a los efectos de dictar, en instalaciones de la institución, carreras en iguales condiciones que la universidad de origen.  Es un organismo municipal que se sustenta con una tasa de afectación específica a la cual contribuyen todos los tresarroyenses. <br>\r\n\r\nLos títulos son expedidos por la universidad de origen de cada carrera correspondiente.<br><br>\r\n\r\nEl objetivo principal de CRESTA es mantener una oferta académica pertinente para el desarrollo de oportunidades, tanto del distrito como de su región de influencia.<br>\r\n\r\nLas carreras que se enumeran a continuación corresponden a la oferta académica para el 2024. La apertura de carreras se renueva año a año.<br>', 'http://www.cresta.edu.ar/', 'https://www.instagram.com/crestaoficial/', 'https://www.facebook.com/crestaoficial', NULL),
	(2, 3, 'ISFD N° 167\r\n', 'Dr. Dameno 50', 'isfd167tresarroyos@abc.gob.ar', '02983-422179', NULL, 'https://isfd167-bue.infd.edu.ar/', 'https://www.instagram.com/isfd167_oficial/', 'https://www.facebook.com/people/ISFD-N%25C2%25BA-167-de-Tres-Arroyos-Oficial/100063506532173/?ref=bookmarks', NULL),
	(3, 3, 'ISFDyT 33\r\n', 'Sarmiento 50', 'isfdyt33@gmail.com', '02983-423186', NULL, 'https://isfdyt33-bue.infd.edu.ar/sitio/', 'https://www.instagram.com/instituto_33', '', NULL),
	(4, 3, 'CGT', 'Betolaza 317', 'cfp401@gmail.com', '02983-430157', NULL, 'https://www.cfp401tsas.edu.ar', 'https://www.instagram.com/cfl401_tresarroyos/?hl=es', 'https://www.facebook.com/cfp.tresarroyos/?locale=es_LA', NULL),
	(5, 3, 'Universidad Siglo 21', 'Maipu 10 Piso 1', 'Ues21tresarroyos@bvconline.com.ar', '02983-431169', NULL, 'https://21.edu.ar/', 'https://www.instagram.com/siglo21.tresarroyos/', NULL, 'Lunes a Viernes de 9 a 13 Hs y de 16 a 20 Hs.'),
	(6, 3, 'Conservatorio de Música de Tres Arroyos', 'Av. Rivadavia 417', 'conservatoriotresarroyos@abc.gob.ar', '02983-433883', NULL, 'https://ctresarroyos-bue.infd.edu.ar/sitio/', 'https://www.instagram.com/conservatoriodemusicatsas', 'https://www.facebook.com/conservatoriodemusicadetresarroyos/', NULL),
	(7, 3, 'UCASAL - Universidad Católica de Salta', 'San Lorenzo 38', 'tresarroyos@ucasal.edu.ar', '02983-527463', NULL, 'https://www.ucasal.edu.ar/', 'https://www.instagram.com/aldeaeducativa/', 'https://www.facebook.com/UcasalTresArroyos/', NULL),
	(8, 3, 'IFES Educación a Distancia', 'San Lorenzo 38', 'infodistancia@ifes.edu.ar', '02983-424229', NULL, 'http://ifes.edu.ar/distancia', 'https://www.instagram.com/aldeaeducativa/', 'https://www.facebook.com/aldeaeducativacentral', NULL),
	(9, 3, 'ISIV Educación a Distancia', 'San Lorenzo 38', 'infodistancia@ifes.edu.ar', '02983-424229', NULL, 'http://ifes.edu.ar/distancia', 'https://www.instagram.com/ifesterciario', 'https://www.facebook.com/IFESdistancia', NULL),
	(10, 3, 'ISSD Instituto Superior Santo Domingo', 'San Lorenzo 38', 'infodistancia@ifes.edu.ar', '02983-424229', NULL, 'http://ifes.edu.ar/distancia', 'https://www.instagram.com/aldeaeducativa/', 'https://www.facebook.com/aldeaeducativacentral', NULL),
	(11, 3, 'Universidad de Belgrano', 'San Lorenzo 38', 'ug.tres.arroyos@fedev.ub.edu.ar', '02983-424229', NULL, 'https://www.ub.edu.ar/', NULL, NULL, 'Lunes a Viernes, de 8:30 a 12:30 y de 15:30 a 20:30'),
	(12, 3, 'Universidad FASTA', 'San Lorenzo 38', 'uaa.tresarroyos@ufasta.edu.ar', '02983-424229 o al 02983-527463', NULL, 'https://www.ufasta.edu.ar/distancia/uaa-pba-ufasta-tres-arroyos/', 'https://www.ufasta.edu.ar/distancia/uaa-pba-ufasta-tres-arroyos/', 'https://www.facebook.com/ufastadistancia', 'Lunes a Viernes de 10:00 a 12:00 hs y de 16:00 a 19:00 hs.'),
	(13, 1, 'Jardín de Infantes N 901', 'Belgrano 131 - Tres Arroyos', NULL, '02983 - 432358', NULL, NULL, NULL, NULL, NULL),
	(14, 1, 'Jardín de Infantes N 906', 'H. YRIGOYEN 1020 - Tres Arroyos', NULL, '02983 - 42-7233', NULL, NULL, NULL, NULL, NULL),
	(15, 2, 'Escuela Nº1', 'Sarmiento 2-100', NULL, '02983 - 42-5135', NULL, NULL, NULL, NULL, NULL),
	(16, 2, 'Escuela Normal Superior De Educación Media N°2', 'Dr. Dameno 50', NULL, '02983 - 42-2179', NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `institucion_educativa` ENABLE KEYS */;

-- Volcando estructura para tabla municipalidad.institucion_educativa_nivel
DROP TABLE IF EXISTS `institucion_educativa_nivel`;
CREATE TABLE IF NOT EXISTS `institucion_educativa_nivel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nivel` varchar(191) CHARACTER SET latin1 NOT NULL,
  `icono` varchar(191) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla municipalidad.institucion_educativa_nivel: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `institucion_educativa_nivel` DISABLE KEYS */;
INSERT INTO `institucion_educativa_nivel` (`id`, `nivel`, `icono`) VALUES
	(1, 'Nivel Inicial', 'fas fa-shapes'),
	(2, 'Nivel Primario/secundario', 'fas fa-school'),
	(3, 'Nivel Superior', 'fas fa-university');
/*!40000 ALTER TABLE `institucion_educativa_nivel` ENABLE KEYS */;

-- Volcando estructura para tabla municipalidad.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Volcando datos para la tabla municipalidad.migrations: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(26, '2014_10_12_000000_create_users_table', 1),
	(27, '2014_10_12_100000_create_password_resets_table', 1),
	(28, '2019_08_19_000000_create_failed_jobs_table', 1),
	(29, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(30, '2023_11_27_132105_create_tadis_table', 1),
	(31, '2023_11_27_164801_create_reclamos_table', 1),
	(32, '2023_11_28_133419_create_tramite_tipo_table', 1),
	(33, '2023_11_28_141236_create_areas_table', 1),
	(34, '2023_11_28_141442_create_tramite_guias_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla municipalidad.museo
DROP TABLE IF EXISTS `museo`;
CREATE TABLE IF NOT EXISTS `museo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET latin1 NOT NULL,
  `ig` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `fb` varchar(191) CHARACTER SET latin1 DEFAULT NULL,
  `referente` varchar(191) CHARACTER SET latin1 DEFAULT NULL,
  `wsp` varchar(191) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(191) CHARACTER SET latin1 DEFAULT NULL,
  `direccion` varchar(191) CHARACTER SET latin1 DEFAULT NULL,
  `portada` varchar(191) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Volcando datos para la tabla municipalidad.museo: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `museo` DISABLE KEYS */;
INSERT INTO `museo` (`id`, `nombre`, `ig`, `fb`, `referente`, `wsp`, `email`, `direccion`, `portada`) VALUES
	(1, 'CENTRO CULTURAL Y MUSEO HISTORICO DE ORENSE', 'museoorense', 'museo.orense.1', 'Marina', '02983420101', NULL, 'Av. San Martín 443 - Orense', 'orense.jpg'),
	(2, 'MUBATA - MUSEO DE BELLAS ARTES DE TRES ARROYOS', 'museoartetresarroyos', 'mubata.museobellasartes', NULL, '011-40891493', 'museomubata@gmail.com', 'Av. Moreno 232 - Tres Arroyos', 'mubata.jpg'),
	(3, 'MUSEO DE LA YERBA MATE RETA', 'museodelayerbamate', 'mundomatereta', 'Mabel y Pato', '02944-252408', NULL, 'Calle 44 y 47 - Reta', 'reta.jpg'),
	(4, 'MUSEO DEL AUTOMOVIL "JOSE ABEL DEL VECCHIO"', NULL, NULL, 'Héctor Sode', '+5492983642876', '', 'Sarratea 51 - Tres Arroyos', 'auto.jpg'),
	(5, 'MUSEO HISTORICO DE SAN MAYOL', 'museosanmayol', 'museosanmayol', 'Ezequiel Lanza', '2983511146', NULL, 'Planta urbana s/n/ - San Mayol', 'mayol.jpg'),
	(6, 'MUSEO MUNICIPAL JOSE A. MULAZZI', 'museomulazzi', 'museomulazzi', NULL, '02983-434555', 'museotarroyos@gmail.com', 'Av. San Martín 323 - Tres Arroyos', 'mulazzi.jpg'),
	(7, 'Museo Anibal Paz - Claromecó', NULL, NULL, NULL, NULL, NULL, NULL, 'claromeco.jpg'),
	(8, 'Museo Regional y Centro Cultural Copetonas', NULL, NULL, NULL, NULL, NULL, NULL, 'copetonas.jpg'),
	(9, 'Fototeca Reta', NULL, NULL, NULL, NULL, NULL, NULL, 'fototeca.jpg');
/*!40000 ALTER TABLE `museo` ENABLE KEYS */;

-- Volcando estructura para tabla municipalidad.noticias
DROP TABLE IF EXISTS `noticias`;
CREATE TABLE IF NOT EXISTS `noticias` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(180) CHARACTER SET latin1 NOT NULL,
  `descripcion` text CHARACTER SET latin1 NOT NULL,
  `fecha` date NOT NULL,
  `categoria` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `publicada` tinyint(1) NOT NULL,
  `destacada` tinyint(1) NOT NULL,
  `slug` varchar(191) CHARACTER SET latin1 NOT NULL,
  `usuario_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `noticias_users_FK` (`usuario_id`),
  CONSTRAINT `noticias_users_FK` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Volcando datos para la tabla municipalidad.noticias: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
INSERT INTO `noticias` (`id`, `titulo`, `descripcion`, `fecha`, `categoria`, `publicada`, `destacada`, `slug`, `usuario_id`, `created_at`, `updated_at`) VALUES
	(1, 'Tito Lemos encabezará una velada boxística solidaria junto al municipio este viernes', 'En una conferencia de prensa hoy al mediodía, el intendente Pablo Garate acompañado por el talentoso boxeador local apodado Tito "el Eléctrico" Lemos anunció que este viernes habrá una noche de boxeo solidario en el Polideportivo Municipal. <br><br>\r\n \r\nEl evento está pensado para toda la familia, los valores de las entradas oscilan entre los 3000 y los 10000 pesos y todo lo recaudado será destinado a la comunidad afectada por el temporal, familias e instituciones que sufrieron daños.<br>\r\nLas entradas podrán adquirirse ahí mismo y en la Dirección de Juventud, Brandsen 181. <br><br>\r\n\r\nLa cita deportiva es este viernes a las 21 hs. en La Rioja 150, Polideportivo Municipal. <br><br>\r\n\r\n"Mucha gente quedó afectada por el temporal, se volaron techos, perdieron cosas y por eso queremos brindar un buen espectáculo y llamar a la gente a que sea solidaria". Dijo Tito Lemos. <br><br>\r\n\r\nPablo Garate agregó "Agradezco a Tito, que se ofreció a poder hacer esta actividad y es algo muy lindo. Lo vimos ganar el otro día por televisión y ahora lo podemos ver en Polideportivo Municipal, por primera vez va a pelear ahí. Hemos convocado a boxeadores de todos los gimnasios de Tres Arroyos".<br>', '2023-12-19', 'generales', 1, 0, 'tito-lemos-encabezar-una-velada-boxstica-solidaria-junto-al-municipio-este-viernes', 1, NULL, '2024-03-25 17:17:30'),
	(2, 'Garate presentó a quien formará parte del equipo de dirección del Hospital Pirovano', 'Esta mañana, el intendente electo Pablo Garate presentó a Mónica Capellari, quien formara parte del equipo de dirección del hospital, junto a Emiliano Capandegui.  <br><br>\r\n\r\nCapellari, quien arribó a la ciudad en 1985 y llegó a ser Jefa de Obstetricia y Ginecología mediante concurso, vuelve a la salud pública de Tres Arroyos luego de ejercer su profesión en distritos vecinos como Chaves y San Cayetano, cumpliendo diferentes funciones, llegando a ser directora y secretaria de Salud. <br><br>\r\n\r\nCon 40 años de trayectoria y una vasta experiencia para compartir, la Doctora se suma a acompañar la gestión, a brindar su conocimiento con todo el equipo de salud del hospital local.  <br><br>\r\n\r\nCapellari se mostró agradecida con el intendente Garate “Quiero dar un agradecimiento especial al intendente por brindarme la oportunidad de volver al Pirovano, es una alegría muy grande poder acompañar y sumar desde mi lugar para construir una mejor salud para todos”.<br>', '2023-12-26', 'cultura', 1, 1, 'garate-present-a-quien-formar-parte-del-equipo-de-direccin-del-hospital-pirovano', 1, NULL, '2024-03-25 17:17:36'),
	(3, '"JOJOJOLGORIO" REPROGRAMADO', 'La Dirección de Juventud informa a la comunidad que debido al pronóstico de lluvia para hoy, se reprogramará el evento  “JoJoJolgorio” en el patio cervecero para la semana que viene, estarán brindando más información en sus redes sociales y teléfono @Direccionjuventudtsas o al 2983-456538 para consultas. <br>', '2023-12-22', 'cultura', 0, 1, 'jojojolgorio-reprogramado', 1, NULL, NULL),
	(4, 'Navidad: como será el servicio de recolección de residuos domiciliarios en las localidades ', 'La Subsecretaría de Gestión Ambiental de la Municipalidad de Tres Arroyos informa a la población que el servicio de recolección de residuos domiciliarios en el Distrito NO se realizara durante el 24 a la noche y el 25 a la mañana. <br>\r\nAsimismo el servicio en la localidad de Claromeco será reforzado de domingo a domingo a partir del día hoy, no recolectando el día 25.<br>', '2023-12-22', 'la ciudad', 0, 1, 'navidad:-como-ser-el-servicio-de-recoleccin-de-residuos-domiciliarios-en-las-localidades-', 1, NULL, NULL),
	(5, 'Centro Municipal de salud del Pdo. de Tres Arroyos  - Cronograma de atención por feriado del 25 de diciembre', 'Con motivo del asueto otorgado para el lunes 25 de diciembre,  la atención medico hospitalaria se realizará como es habitual todos los años, según cronograma dispuesto para sábados, domingos y feriados. <br>\r\n El servicio de emergencias atenderá las 24 horas y la guardia pediátrica de 8 a 12 y de 19 a 22 hs. <br>', '2023-12-22', 'salud', 0, 1, 'centro-municipal-de-salud-del-pdo.-de-tres-arroyos----cronograma-de-atencin-por-feriado-del-25-de-diciembre', 1, NULL, NULL),
	(6, 'GESTÁNDONOS: La maternidad como un espacio construido en comunidad, en el final de su tercer año.', '\r\nEste dispositivo de acompañamiento que funciona desde hace 3 años, en el Barrio de Villa Italia y que  lleva adelante un equipo técnico y profesional del Centro Municipal de Salud y de la Secretaria de Salud; Reúne todos los jueves a  Jóvenes  en periodo de gestación y posteriormente con sus bebes,  que se encuentran para formar y gestar un espacio de confianza que les permite compartir lo que les pasa en este proceso de dar vida. <br><br>\r\nEste espacio está enmarcado en la Ley  27.611 conocida como de los 1000 días que tiene como objetivos proteger, fortalecer y acompañar el cuidado integral de la vida y la salud de las personas gestantes y las niñas y los niños en sus primeros 3 años  y que prevee estos dispositivos promo- preventivos. En Gestándonos  se abordan todas aquellas temáticas que necesita una infancia para crecer sano. El proceso de parto- post parto, lactancia, alimentación complementaria, el movimiento saludable, los vínculos sanos y los limites son algunas de las temáticas que se trabajan; haciendo hincapié en los controles de salud. En este marco también se hace entrega del kit Qunita Bonaerense a las familias que concurren. <br><br>\r\nEl espacio  es tan dinámico que Cada Jueves se va generando y creando con las inquietudes de  las integrantes y sus vivencias. Entonces esta información científica, los contenidos, procesos o procedimientos se adaptan a la vida cotidiana de ellas,  para que se cumpla el fin último del grupo que es alojar una crianza amorosa, respetuosa, respetada y empoderada. <br>\r\nSe comparte lo que cada una sabe, además de  las dudas y los miedos que se van deconstruyendo con información científica  guiada por profesionales en Obstetricia, Nutrición, Psicomotricidad, Trabajo Social y Psicología. “De esta manera  se van trazando lazos de confianza  y relaciones que hacen posible, a quienes maternan, crecer junto a las infancias en el día a día”. Detallan desde Gestándonos . <br><br>\r\n La crianza y los vínculos saludables compartidos<br><br>\r\nUn vínculo es una suma de elementos: amor, placer, disfrute, cuidado y respeto mutuo, confianza, y crecimiento personal.<br>\r\n“Cuando los vínculos se construyen de una forma saludable podemos actuar tal cual somos, hay confianza y autonomía,  se propicia un espacio para compartir saberes, experiencias y estrategias para afrontar la maternidad  en un  espacio de apoyo mutuo y lugar para el crecimiento personal, de las infancias y del entorno cercano, fortaleciendo las capacidades de crianza y estamos felices de compartir este cierre de año, en el que trabajamos con cuatro grupos de familias. Detallan las profesionales.<br>', '2023-12-22', 'salud', 0, 1, 'gestndonos:-la-maternidad-como-un-espacio-construido-en-comunidad,-en-el-final-de-su-tercer-ao', 1, NULL, NULL),
	(7, 'NUESTRAS INFANCIAS, EL JUEGO Y LA NAVIDAD EN ATENCIÓN PRIMARIA - PAPA NOEL EN TU BARRIO', 'Recordamos a la comunidad que hoy viernes 22 de diciembre Papá Noel completara la visita por los CAPS de nuestra ciudad. <br>\r\nEsta intervención urbana fue organizada por el Área de Atención Primaria, sus equipos de salud y sus referentes de enfermería, con el objetivo de garantizar el juego como ejercicio fundamental del derecho a la salud. <br>\r\nEn este marco, desde el Centro Municipal de Salud, invita a cada una de las familias, a los niños y las niñas a compartir con Papá Noel, llevarle sus cartitas y sacarse fotitos.  <br><br>\r\nRecorrido: <br>\r\n• 10:00 – CAPS VILLA ITALIA – Víctor Manuel N°674<br>\r\n• 10:30 – CIC OLIMPO – Bolívar y San Luis<br>\r\n• 11:00 – CAPS 25 DE MAYO – Av. Libertad y 25 de Mayo<br>\r\n• 11:30 – CAPS BENITO MACHADO – 20 de abril 1180<br>\r\n• 12:00 – CAPS COLEGIALES – P.N. Carrera N° 1300<br>\r\n• 12:30– CAPS RANCHOS– Urquiza N° 1205<br>', '2023-12-22', 'generales', 0, 1, 'nuestras-infancias,-el-juego-y-la-navidad-en-atencin-primaria---papa-noel-en-tu-barrio', 1, NULL, NULL),
	(8, 'Cronograma de recolección de residuos para navidad ', 'Transportes Malvinas Definió como funcionará el servicio de Recolección y Barrido en Tres Arroyos durante las Fiestas <br>\r\n\r\nLa Empresa Transportes Malvinas Informó a los vecinos de Tres Arroyos como se desarrollarán los servicios durante las Fiestas. El objetivo es reforzar la comunicación y dar a conocer los momentos de recolección ya que es una época donde el volumen de residuos crece considerablemente.<br>\r\nEl operativo especial de servicio contempla esta situación y el objetivo es que las calles y la ciudad estén limpias.<br>\r\nEl domingo 24 de diciembre no se prestarán servicios. El lunes 25 la recolección será nocturna con un camión de refuerzo especial. El martes 26 y miércoles 27 se prestarán normalmente todos los servicios y se adicionarán refuerzos en la recolección matutina.<br>\r\nPor todo esto la empresa solicita sacar los residuos recién el lunes 25 a la Noche, que es cuando comenzará la recolección con sus respectivos refuerzos.<br>', '2023-12-21', 'la ciudad', 0, 1, 'cronograma-de-recoleccin-de-residuos-para-navidad-', 1, NULL, NULL),
	(9, 'Reapertura del Cementerio Municipal', 'El día de la fecha, se informa la reapertura del Cementerio Municipal después de un arduo trabajo destinado a garantizar su óptimo funcionamiento. A partir de este momento, el Cementerio retoma sus operaciones en su horario habitual.  <br>\r\nDurante este periodo, se llevaron a cabo labores exhaustivas para asegurar las condiciones adecuadas y ofrecer un espacio seguro y respetuoso para todos los visitantes. Agradecemos la comprensión de la comunidad durante el cierre temporal y valoramos la paciencia demostrada. <br>\r\nInvitamos a los ciudadanos a utilizar el Cementerio Municipal según su horario regular de Lunes a Viernes de 6:00 a 20:00, durante el fin de semana y feriados desde las 8:00 a 20:00 hs. <br>\r\nAgradecemos a todos por su colaboración y comprensión.<br>', '2023-12-21', 'generales', 0, 1, 'reapertura-del-cementerio-municipal', 1, NULL, NULL),
	(10, 'Encefalomielitis Equina: prevención y cuidados', 'La Dirección de Bromatología de la Municipalidad de Tres Arroyos en comunicación con el Servicio Nacional de Sanidad y Calidad Agroalimentaria (SENASA) informa que ya arribaron las vacunas al distrito, donde son dos los casos confirmados de Encefalomielitis Equina, por este motivo es fundamental mantener los recaudos necesarios para prevenir los contagios que afectan tanto a equinos como a seres humanos. <br>\r\nEs importante destacar que ya se encuentran las vacunas en las veterinarias: El agrapecuario (Av. Moreno 798), Veterninaria Huinca (Av. Constituyentes 147), Veterinaria Don Hugo (Avenida Libertad 168,) , Veterinaria Kanino`s (9 de Julio 799), Zeusmi Vet (25 de Mayo 1077).<br><br>\r\n\r\nPara prevenir y cuidar la salud, el control de mosquitos es esencial para evitar la diseminación de la enfermedad, por tal motivo se recomienda eliminar la acumulación de agua estancada, cambiar el agua de bebederos frecuentemente, mantener los espacios limpios, pastizales cortados y utilizar  repelentes.<br>\r\nAnte el caso de muerte de un equino el responsable debe enterrar o incinerar los restos.<br><br>\r\n\r\nLos síntomas en equinos pueden caracterizarse por caminar en círculos, falta de apetito,  convulsiones, etc.<br>\r\nLos síntomas en humanos son fiebre, dolor de cabeza, vómito, convulsiones.<br>\r\nLos casos deben ser informados a SENASA en equinos y si existen síntomas en humanos a la Dirección de Bromatología y Zoonosis 2983 649994, con llamadas y whatsapp y al mail bromatologia@tresarroyos.gov.ar o presencialmente en Pedro N. Carrera 814 de 7 hs a 14 hs.<br>', '2023-12-21', 'salud', 0, 1, 'encefalomielitis-equina:-prevencin-y-cuidados', 1, NULL, NULL);
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;

-- Volcando estructura para tabla municipalidad.noticia_categoria
DROP TABLE IF EXISTS `noticia_categoria`;
CREATE TABLE IF NOT EXISTS `noticia_categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `noticia_id` bigint(20) unsigned NOT NULL,
  `categoria_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `noticia_categoria_categorias_FK` (`categoria_id`),
  KEY `noticia_categoria_noticias_FK` (`noticia_id`),
  CONSTRAINT `noticia_categoria_categorias_FK` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `noticia_categoria_noticias_FK` FOREIGN KEY (`noticia_id`) REFERENCES `noticias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Volcando datos para la tabla municipalidad.noticia_categoria: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `noticia_categoria` DISABLE KEYS */;
INSERT INTO `noticia_categoria` (`id`, `noticia_id`, `categoria_id`) VALUES
	(2, 2, 2),
	(3, 3, 2),
	(4, 4, 3),
	(5, 5, 4),
	(6, 6, 4),
	(7, 7, 1),
	(8, 8, 3),
	(9, 8, 1),
	(10, 10, 4),
	(13, 1, 2),
	(14, 1, 1);
/*!40000 ALTER TABLE `noticia_categoria` ENABLE KEYS */;

-- Volcando estructura para tabla municipalidad.noticia_img
DROP TABLE IF EXISTS `noticia_img`;
CREATE TABLE IF NOT EXISTS `noticia_img` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(191) CHARACTER SET latin1 NOT NULL,
  `noticia_id` bigint(20) unsigned NOT NULL,
  `leyenda` varchar(191) CHARACTER SET latin1 NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `noticia_img_noticias_FK` (`noticia_id`),
  CONSTRAINT `noticia_img_noticias_FK` FOREIGN KEY (`noticia_id`) REFERENCES `noticias` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Volcando datos para la tabla municipalidad.noticia_img: ~12 rows (aproximadamente)
/*!40000 ALTER TABLE `noticia_img` DISABLE KEYS */;
INSERT INTO `noticia_img` (`id`, `img`, `noticia_id`, `leyenda`, `created_at`, `updated_at`) VALUES
	(1, '1.jpg', 1, 'velada boxistica', '2023-12-27 13:54:20', '2023-12-27 13:54:20'),
	(2, '2.jpg', 1, 'velada boxistica 2', '2023-12-27 13:54:20', '2023-12-27 13:54:20'),
	(3, '3.jpg', 2, 'people', '2023-12-27 13:54:20', '2023-12-27 13:54:20'),
	(4, '4.jpg', 3, 'jojojolgorio en el patio cervecero', '2023-12-27 13:54:20', '2023-12-27 13:54:20'),
	(5, '5.jpg', 4, 'recoleccion de residuos', '2023-12-27 13:54:20', '2023-12-27 13:54:20'),
	(6, '6.jpg', 5, 'centro de salud', '2023-12-27 13:54:20', '2023-12-27 13:54:20'),
	(7, '7.jpg', 6, 'personal', '2023-12-27 13:54:20', '2023-12-27 13:54:20'),
	(8, '8.jpg', 7, 'navidad', '2023-12-27 13:54:20', '2023-12-27 13:54:20'),
	(9, '9.jpg', 7, 'papa noel', '2023-12-27 13:54:20', '2023-12-27 13:54:20'),
	(10, '10.jpg', 8, 'residuos', '2023-12-27 13:54:20', '2023-12-27 13:54:20'),
	(11, '11.jpg', 9, 'cementerio municipal', '2023-12-27 13:58:03', '2023-12-27 13:58:03'),
	(12, '12.jpg', 10, 'encefalomielitis', '2023-12-27 13:58:03', '2023-12-27 13:58:03');
/*!40000 ALTER TABLE `noticia_img` ENABLE KEYS */;

-- Volcando estructura para tabla municipalidad.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Volcando datos para la tabla municipalidad.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla municipalidad.personal_access_tokens
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Volcando datos para la tabla municipalidad.personal_access_tokens: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Volcando estructura para tabla municipalidad.propuesta_academica
DROP TABLE IF EXISTS `propuesta_academica`;
CREATE TABLE IF NOT EXISTS `propuesta_academica` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(750) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `periodo_inscripcion` varchar(450) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `institucion_educativa_id` int(11) NOT NULL DEFAULT '0' COMMENT 'id de la institucion que lo dicta',
  `informacion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `links` varchar(1950) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT '0' COMMENT 'Puede poseer link a las instituciones donde aporte info del plan de estudio y demas',
  `visible` tinyint(1) unsigned zerofill DEFAULT '0' COMMENT 'Permite que pueda estar visible o no la carrera',
  PRIMARY KEY (`id`),
  KEY `propuesta_academica_institucion_educativa_FK` (`institucion_educativa_id`),
  CONSTRAINT `propuesta_academica_institucion_educativa_FK` FOREIGN KEY (`institucion_educativa_id`) REFERENCES `institucion_educativa` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=223 DEFAULT CHARSET=utf8mb4 COMMENT='Se cargan todas las ofertas academicas privadas y publicas para darle informacion a los estudiantes futuros';

-- Volcando datos para la tabla municipalidad.propuesta_academica: ~221 rows (aproximadamente)
/*!40000 ALTER TABLE `propuesta_academica` DISABLE KEYS */;
INSERT INTO `propuesta_academica` (`id`, `nombre`, `periodo_inscripcion`, `institucion_educativa_id`, `informacion`, `links`, `visible`) VALUES
	(1, 'Licenciatura en Administración', 'INSCRIPCION CERRADA', 1, 'La duración de la carrera es de 5 años y se cursa completa en Tres Arroyos. Gratuita y presencial.', 'http://www.cresta.edu.ar/academica/', 0),
	(2, 'Contador Público', 'INSCRIPCION CERRADA', 1, 'La duración de la carrera es de 5 años y los primeros 2 se cursan completos en Tres Arroyos en común con la Licenciatura en Administración, pudiendo luego optar por la carrera a seguir. Gratuita y presencial.', 'http://www.cresta.edu.ar/academica/', 0),
	(3, 'Tecnicatura Superior en Enfermería', 'INSCRIPCION CERRADA', 1, 'La Tecnicatura Superior en Enfermería se dicta en el marco de la Escuela de Enfermería “Lic. Isabel M. Di Rado” del Centro Municipal de Salud, mediante el convenio de la Municipalidad de Tres Arroyos con la Escuela de Gobierno en Salud “Floreal Ferrara” del Ministerio de Salud de la Provincia de Buenos Aires. <br>\n\nLa duración de la carrera es de 3 años y se cursa completa en Tres Arroyos. Gratuita y presencial.', 'http://www.cresta.edu.ar/academica/', 0),
	(4, 'Tecnicatura Universitaria en Mantenimiento Industrial', 'INSCRIPCION CERRADA', 1, 'La duración de la carrera es de 3 años y se cursa completa en Tres Arroyos. Gratuita y presencial.\n\nDuración: 3 años.', 'http://www.cresta.edu.ar/academica/', 0),
	(5, 'Tecnicatura Universitaria en Producción Agropecuaria Sostenible', '2 de Octubre 2023 al 23 de Febrero 2024', 1, 'La duración de la carrera es de 3 años y se cursa completa en Tres Arroyos.<br>Gratuita y presencial.<br><br>\nPara más información comunicarse al mail: farah.yitani@cresta.edu.ar', 'http://www.cresta.edu.ar/academica/', 0),
	(6, 'Diplomatura Universitaria en Gestión del Comercio Exterior', '2 de Octubre 2023 al 23 de Febrero 2024', 1, 'La duración de la carrera es de 1 año y medio y se cursa completa en Tres Arroyos.<br> Es una certificación intermedia de la Tecnicatura Universitaria en Gestión del Comercio Exterior y Régimen Aduanero.<br><br>\r\nGratuita y presencial.<br>', 'http://www.cresta.edu.ar/academica/', 0),
	(7, 'Tecnicatura Universitaria en Gestión del Comercio Exterior y Régimen Aduanero', '2 de Octubre 2023 al 23 de Febrero 2024', 1, 'La duración de la carrera es de 3 años y se cursa completa en Tres Arroyos. <br> <br> Gratuita y presencial.', 'http://www.cresta.edu.ar/academica/', 0),
	(8, 'MATERIAS CBC - QUIMICA, IPC, ICSE', 'Febrero 2024', 1, 'Materias del Programa UBA XXI: Quimica, Introducción al Pensamiento Científico e Introducción al Conocimiento de la Sociedad y el Estado.', 'http://www.cresta.edu.ar/academica/', 0),
	(9, 'Profesorado en Educación Inicial', '1 de Diciembre 2023 al 28 de Febrero 2024', 2, 'La carrera promueve el desarrollo de profesionales/trabajadores de la educación. <br>\r\nMirá el <a href="https://isfd167-bue.infd.edu.ar/sitio/oferta-academica/profesorados/profesorado-de-educacion-inicial/upload/Inicial_y_Primaria.pdf" target="_blank"> Diseño curricular </a>', 'https://isfd167-bue.infd.edu.ar/sitio/oferta-de-carreras-2024/', 0),
	(10, 'Profesorado en Educación Primaria', '1 de Diciembre 2023 al 28 de Febrero 2024', 2, 'Mirá el <a href="https://isfd167-bue.infd.edu.ar/sitio/oferta-academica/profesorados/profesorado-de-educacion-primaria/upload/Inicial_y_Primaria.pdf" target="_blank"> Diseño curricular </a>', 'https://isfd167-bue.infd.edu.ar/sitio/oferta-de-carreras-2024/', 0),
	(11, 'Profesorado en Educación Secundaria en Geografía', '1 de Diciembre 2023 al 28 de Febrero 2024', 2, '', 'https://isfd167-bue.infd.edu.ar/sitio/oferta-de-carreras-2024/', 0),
	(12, 'Profesorado en Educación Secundaria en Historia', '1 de Diciembre 2023 al 28 de Febrero 2024', 2, NULL, 'https://isfd167-bue.infd.edu.ar/sitio/oferta-de-carreras-2024/', 0),
	(13, 'Tecnicatura Superior en Administración Contable', '1 de Diciembre 2023 al 28 de Febrero 2024', 2, NULL, 'https://isfd167-bue.infd.edu.ar/sitio/oferta-de-carreras-2024/', 0),
	(14, 'Tecnicatura Superior en Acompañamiento Terapéutico', '1 de Diciembre 2023 al 28 de Febrero 2024', 2, NULL, 'https://isfd167-bue.infd.edu.ar/sitio/oferta-de-carreras-2024/', 0),
	(15, 'Tecnicatura Superior en Publicidad', '1 de Diciembre 2023 al 28 de Febrero 2024', 2, NULL, 'https://isfd167-bue.infd.edu.ar/sitio/oferta-de-carreras-2024/', 0),
	(16, 'Tecnicatura Superior en Turismo', '1 de Diciembre 2023 al 28 de Febrero 2024', 2, NULL, 'https://isfd167-bue.infd.edu.ar/sitio/oferta-de-carreras-2024/', 0),
	(17, 'Tecnicatura Superior en Interpretación y Traducción de Lengua de Señas Argentina-España', '1 de Diciembre 2023 al 28 de Febrero 2024', 2, NULL, 'https://isfd167-bue.infd.edu.ar/sitio/oferta-de-carreras-2024/', 0),
	(18, 'Profesorado de educación Secundaria en Lengua y Literatura', '1 de Diciembre 2023 al 28 de Febrero 2024', 3, NULL, 'https://isfdyt33-bue.infd.edu.ar/sitio/', 0),
	(19, 'Profesorado de educación Secundaria en Matemática', '1 de Diciembre 2023 al 28 de Febrero 2024', 3, NULL, 'https://isfdyt33-bue.infd.edu.ar/sitio/', 0),
	(20, 'Profesorado de Educación Física', '1 de Diciembre 2023 al 28 de Febrero 2024', 3, NULL, 'https://isfdyt33-bue.infd.edu.ar/sitio/', 0),
	(21, 'Profesorado de Inglés', '1 de Diciembre 2023 al 28 de Febrero 2024', 3, NULL, 'https://isfdyt33-bue.infd.edu.ar/sitio/', 0),
	(22, 'Tecnicatura Superior en Trabajo Social', '1 de Diciembre 2023 al 28 de Febrero 2024', 3, NULL, 'https://isfdyt33-bue.infd.edu.ar/sitio/', 0),
	(23, 'Tecnicatura Superior en Higiene y Seguridad en el Trabajo', '1 de Diciembre 2023 al 28 de Febrero 2024', 3, NULL, 'https://isfdyt33-bue.infd.edu.ar/sitio/', 0),
	(24, 'Tecnicatura Superior en Industrias Agroalimentarias', '1 de Diciembre 2023 al 28 de Febrero 2024', 3, NULL, 'https://isfdyt33-bue.infd.edu.ar/sitio/', 0),
	(25, 'Tecnicatura Superior en Servicios Gastronómicos', '1 de Diciembre 2023 al 28 de Febrero 2024', 3, NULL, 'https://isfdyt33-bue.infd.edu.ar/sitio/', 0),
	(26, 'Tecnicatura Superior en Agroecología', '1 de Diciembre 2023 al 28 de Febrero 2024', 3, NULL, 'https://isfdyt33-bue.infd.edu.ar/sitio/', 0),
	(27, 'Tecnicatura Superior en Tiempo Libre y Recreación', '1 de Diciembre 2023 al 28 de Febrero 2024', 3, NULL, 'https://isfdyt33-bue.infd.edu.ar/sitio/', 0),
	(28, 'Tecnicatura Superior en Construcción sustentable', '1 de Diciembre 2023 al 28 de Febrero 2024', 3, NULL, 'https://isfdyt33-bue.infd.edu.ar/sitio/', 0),
	(29, 'Certificación Superior en Salud y Seguridad Ocupacional en el Trabajo en los establecimientos de salud', '1 de Diciembre 2023 al 28 de Febrero 2024', 3, NULL, 'https://isfdyt33-bue.infd.edu.ar/sitio/', 0),
	(30, 'Martillero, Corredor Público y Corredor Inmobiliario', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/pdf/carreras/pregrado/martillero-y-corredor-publico-e-inmobiliario.pdf', 0),
	(31, 'Procurador', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/pdf/carreras/pregrado/procurador.pdf', 0),
	(32, 'Tecnicatura En Administración y Gestión Tributaria', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/pdf/carreras/pregrado/tec-administracion-y-gestion-tributaria.pdf', 0),
	(33, 'Tecnicatura En Dirección de Equipos de venta', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/pdf/carreras/pregrado/tec-direccion-de-equipos-de-venta.pdf', 0),
	(34, 'Tecnicatura En Dirección de Protocolo, Organización de Eventos y RRPP', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/pdf/carreras/pregrado/tec-direccion-de-protocolo-org-de-eventos-y-rrpp.pdf', 0),
	(35, 'Tecnicatura En Diseño y Desarrollo de Videojuegos', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/descargas/brochure/tecnicatura-en-diseno-y-desarrollo-de-videojuegos_-siglo-21.pdf', 0),
	(36, 'Tecnicatura En Gestión Administrativas de Servicios de Salud', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/pdf/carreras/pregrado/tec-universitaria-gestion-administrativa-de-servicios-de-salud.pdf', 0),
	(37, 'Tecnicatura En Gestión Contable e impositiva', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/pdf/carreras/pregrado/tec-gestion-contable-e-impositiva.pdf', 0),
	(38, 'Tecnicatura En Gestión de Empresas Familiares', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/pdf/carreras/pregrado/tec-gestion-de-empresas-familiares.pdf', 0),
	(39, 'Tecnicatura En Higiene y Seguridad Laboral', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/pdf/carreras/pregrado/tec-higiene-y-seguridad-laboral.pdf', 0),
	(40, 'Tecnicatura En investigación de la escena del crimen', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/pdf/carreras/pregrado/tec-investigacion-de-la-escena-del-crimen.pdf', 0),
	(41, 'Tecnicatura En Marketing y Publicidad Digital', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/pdf/carreras/pregrado/tec-marketing-y-publicidad-digital.pdf', 0),
	(42, 'Tecnicatura En Relaciones Laborales', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/pdf/carreras/pregrado/tec-relaciones-laborales.pdf', 0),
	(43, 'Tecnicatura En Responsabilidad y Gestión Social', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/pdf/carreras/pregrado/tec-responsabilidad-y-gestion-social.pdf', 0),
	(44, 'Tecnicatura Universitaria En Administración de la Propiedad Horizontal y Conjuntos Inmobiliarios', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/descargas/brochure/tecnicatura-universitaria-en-administracion-de-la-propiedad-horizontal-y-conjuntos-inmobiliarios-siglo-21.pdf', 0),
	(45, 'Tecnicatura Universitaria En Administración y Gestión de Políticas Públicas', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/pdf/carreras/pregrado/tec-administracion-publica.pdf', 0),
	(46, 'Tecnicatura Universitaria En Diseño y Animación Digital', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/pdf/carreras/grado/lic-diseno-y-animacion-digital.pdf', 0),
	(47, 'Tecnicatura Universitaria En Gestión de Moda', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/pdf/carreras/pregrado/tec-gestion-de-moda.pdf', 0),
	(48, 'Tecnicatura Universitaria En Gestión del Clima Laboral de la Organización', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/pdf/carreras/pregrado/tec-gestion-del-clima-laboral.pdf', 0),
	(49, 'Tecnicatura Universitaria En Gestión y Auditorías Ambientales', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/pdf/carreras/pregrado/tec-universitaria-en-gestion-y-auditorias-ambientales.pdf', 0),
	(50, 'Tecnicatura Universitaria En Hidrocarburos y Geociencias', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/pdf/carreras/pregrado/tec-universitaria-en-hidrocarburos-y-geociencia.pdf', 0),
	(51, 'Tecnicatura Universitaria En Recursos Turísticos', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/pdf/carreras/pregrado/tec-gestion-de-recursos-turisticos.pdf', 0),
	(52, 'Tecnicatura Universitaria En Redes Informáticas y Telecomunicaciones', 'hasta el 18 de marzo 2024', 5, NULL, 'https://drive.google.com/file/d/1xoSFFYptDTMAFUqCwy4gNsBhFUuPkioZ/view', 0),
	(53, 'Tecnicatura Universitaria Promoción Comunitaria en Niñez y Adolescencia', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/pdf/carreras/pregrado/tec-universitaria-promocion-comunitaria-en-ninez-y-adolescencia.pdf', 0),
	(54, 'Abogacía', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/descargas/art-43/brochure-abogacia.pdf', 0),
	(55, 'Actuario', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/descargas/carreras/nuevas-carreras/brochure-actuario.pdf', 0),
	(56, 'Contador Público', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/descargas/art-43/brochure-contador_publico.pdf', 0),
	(57, 'Escribanía', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/pdf/carreras/grado/escribania.pdf', 0),
	(58, 'Licenciatura En Administración', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/pdf/carreras/grado/lic-administracion.pdf', 0),
	(59, 'Licenciatura En Administración Agraria', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/pdf/carreras/grado/lic-administracion-agraria.pdf', 0),
	(60, 'Licenciatura En Administración de Infraestructura Tecnológica', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/descargas/carreras/nuevas-carreras/brochure-admin-de-infraestructura-tecnologica.pdf', 0),
	(61, 'Licenciatura En Administración de Servicios de Salud CCC', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/descargas/brochure/licenciatura-en-administracion-en-servicios-de-salud-siglo-21-1.pdf', 0),
	(62, 'Licenciatura En Administración Pública', 'hasta el 18 de marzo 2024', 5, NULL, 'https://drive.google.com/file/d/1UoACK7dksmv6s5mxXgV477PRoNAQzoZx/view', 0),
	(63, 'Licenciatura En Administración Hotelera', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/pdf/carreras/grado/lic-administracion-hotelera.pdf', 0),
	(64, 'Licenciatura En Antropología Organizacional', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/descargas/carreras/nuevas-carreras/brochure-antropologia-organizacional.pdf', 0),
	(65, 'Licenciatura En Bioinformática', 'hasta el 18 de marzo 2024', 5, NULL, '', 0),
	(66, 'Licenciatura En Ciencia Política y Gobierno', 'hasta el 18 de marzo 2024', 5, NULL, 'https://drive.google.com/file/d/1Uy4_j0TpeMZdpCnWJZcU7XKOiS4-6UnI/view', 0),
	(67, 'Licenciatura En Ciencias de Datos', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/descargas/carreras/nuevas-carreras/brochure-ciencia_datos.pdf', 0),
	(68, 'Licenciatura En Comercialización (Marketing)', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/pdf/carreras/grado/lic-comercializacion.pdf', 0),
	(69, 'Licenciatura En Comercio Internacional', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/pdf/carreras/grado/lic-comercio-internacional.pdf', 0),
	(70, 'Licenciatura En Criminología y Seguridad', 'hasta el 18 de marzo 2024', 5, NULL, '', 0),
	(71, 'Licenciatura En Diseño y Animación Digital', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/pdf/carreras/grado/lic-diseno-y-animacion-digital.pdf', 0),
	(72, 'Licenciatura En Educación (CCC)', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/pdf/carreras/grado/lic-educacion.pdf', 0),
	(73, 'Licenciatura En Educación y Nuevas Tecnologías', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/descargas/carreras/nuevas-carreras/brochure-lic.en-educacion-y-nuevas-tecnologias.pdf', 0),
	(74, 'Licenciatura En Emprendimiento - CCC', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/descargas/carreras/nuevas-carreras/brochure-emprendimiento.pdf', 0),
	(75, 'Licenciatura En Finanzas', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/descargas/brochure/licenciatura-en-finanzas-corporativas-y-mercado-de-valores-siglo-21.pdf', 0),
	(76, 'Licenciatura En Gerontología', 'hasta el 18 de marzo 2024', 5, NULL, '', 0),
	(77, 'Licenciatura En Gestión Ambiental', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/pdf/carreras/grado/lic-gestion-ambiental.pdf', 0),
	(78, 'Licenciatura En Gestión de Recursos Humanos', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/pdf/carreras/grado/lic-gestion-rrhh.pdf', 0),
	(79, 'Licenciatura En Gestión Turística', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/pdf/carreras/grado/lic-gestion-turistica.pdf', 0),
	(80, 'Licenciatura En Higiene, Seguridad y Medio ambiente del Trabajo', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/pdf/carreras/pregrado/tec-higiene-y-seguridad-laboral.pdf', 0),
	(81, 'Licenciatura En Informática', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/descargas/art-43/brochure-informatica.pdf', 0),
	(82, 'Licenciatura En Inteligencia Artificial y Robótica', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/descargas/carreras/nuevas-carreras/brochure-inteligencia-artificial-y-robotica-.pdf', 0),
	(83, 'Licenciatura En Logística Global', 'hasta el 18 de marzo 2024', 5, NULL, 'https://drive.google.com/file/d/1Mmahc8Dqjeg3PCKNJowmCKFo-Y2gRpeM/view', 0),
	(84, 'Licenciatura En Matemática', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/descargas/carreras/nuevas-carreras/brochure-matematica.pdf', 0),
	(85, 'Licenciatura En Periodismo', 'hasta el 18 de marzo 2024', 5, NULL, 'https://drive.google.com/file/d/1fU4-XdFo8f4cMjkYR3v3FQr8HRTBol_g/view', 0),
	(86, 'Licenciatura En Publicidad', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/pdf/carreras/grado/lic-publicidad.pdf', 0),
	(87, 'Licenciatura En Relaciones Internacionales', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/pdf/carreras/grado/lic-relaciones-internacionales.pdf', 0),
	(88, 'Licenciatura En Relaciones Públicas e Institucionales', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/pdf/carreras/grado/lic-relaciones-publicas.pdf', 0),
	(89, 'Licenciatura En Seguridad Informática', 'hasta el 18 de marzo 2024', 5, NULL, 'https://contenidos.21.edu.ar/descargas/carreras/nuevas-carreras/brochure-seguridad-informatica.pdf', 0),
	(90, 'Licenciatura En Terapia Ocupacional y Desarrollo Humano', 'hasta el 18 de marzo 2024', 5, NULL, '', 0),
	(91, 'Profesorado de Música Orientación en Educación Musical', '5 de Diciembre 2023 al 8 de Marzo 2024', 6, NULL, '', 0),
	(92, 'Profesorado en Música Orientación Instrumento: Piano, Guitarra, Percusión, Flauta, Violín, Clarinete y Saxo', '5 de Diciembre 2023 al 8 de Marzo 2024', 6, NULL, '', 0),
	(93, 'Tecnicatura en Capacitación Instrumental: Piano, Guitarra, Percusión, Flauta, Violín, Clarinete y Saxo', '5 de Diciembre 2023 al 8 de Marzo 2024', 6, NULL, '', 0),
	(94, 'Formación Básica en Música: Piano, Guitarra, Percusión, Flauta, Violín, Clarinete y Saxo (A partir de los 9 años)', '5 de Diciembre 2023 al 8 de Marzo 2024', 6, NULL, '', 0),
	(95, 'Formación Básica en Música Popular: guitarra eléctrica y bajo eléctrico (A partir de los 14 años)', '5 de Diciembre 2023 al 8 de Marzo 2024', 6, NULL, '', 0),
	(96, 'Tec. Sup. en Análisis de Sistemas de Computación', 'hasta el 5 de abril 2024', 10, NULL, 'https://www.aldeaeducativa.ag/educacion/tec_analisis_sistemas_computacion', 0),
	(97, 'Tec. Sup en Sistemas de Telecomunicaciones', 'hasta el 5 de abril 2024', 10, NULL, 'https://www.aldeaeducativa.ag/educacion/tec_sistemas_de_telecomunicaciones', 0),
	(98, 'Tec.a Sup. en Desarrollo de Software', 'hasta el 5 de abril 2024', 10, NULL, 'https://www.aldeaeducativa.ag/educacion/tecnicatura_superior_en_desarrollo_de_software_1%C2%B0_semestre_', 0),
	(99, 'Téc. Sup. en Ciencia de Datos E Inteligencia Artificial', 'hasta el 5 de abril 2024', 10, NULL, 'https://www.aldeaeducativa.ag/educacion/tecnico_superior_en_ciencia_de_datos_e_inteligencia_artificial___issd', 0),
	(100, 'Seguridad e Higiene Laboral', 'hasta el 29 de febrero 2024', 9, NULL, '', 0),
	(101, 'Negocios Digitales', 'hasta el 29 de febrero 2024', 9, NULL, 'https://www.aldeaeducativa.ag/educacion/tecnico_superior_en_negocios_digitales', 0),
	(102, 'Analista de Sistemas', 'hasta el 29 de febrero 2024', 9, NULL, 'https://www.aldeaeducativa.ag/educacion/tecnicatura_superior_en_analisis_de_sistemas', 0),
	(103, 'Administración de Empresas', 'hasta el 29 de febrero 2024', 9, NULL, 'https://www.aldeaeducativa.ag/educacion/tecnico_superior_en_administracion_de_empresas_', 0),
	(104, 'Recursos Humanos', 'hasta el 29 de febrero 2024', 9, NULL, 'https://www.aldeaeducativa.ag/educacion/curso_de_recursos_humanos_', 0),
	(105, 'Marketing Digital', 'hasta el 29 de febrero 2024', 9, NULL, 'https://www.aldeaeducativa.ag/educacion/tecnico_superior_en_marketing_digital', 0),
	(106, 'Turismo', 'hasta el 29 de febrero 2024', 9, NULL, 'https://www.aldeaeducativa.ag/educacion/tecnico_superior_en_turismo', 0),
	(107, 'Bachillerato para Jóvenes y Adultos a Distancia', 'hasta el 29 de febrero 2024', 9, NULL, 'https://www.aldeaeducativa.ag/educacion/bachillerato_a_distancia_para_adultos', 0),
	(108, 'Tec. Univ. en Hotelería y Turismo', 'hasta el 31 de marzo 2024', 11, NULL, 'https://www.ub.edu.ar/facultad-de-estudios-distancia-y-educacion-virtual/distancia-tecnicatura-en-hoteleria-y-turismo', 0),
	(109, 'Tec. Univ. en Producción Agraria', 'hasta el 31 de marzo 2024', 11, NULL, 'https://www.ub.edu.ar/facultad-de-estudios-distancia-y-educacion-virtual/fedev-tecnicatura-en-produccion-agraria', 0),
	(110, 'Tec. Universitaria en Logística de Agronegocios', 'hasta el 31 de marzo 2024', 11, NULL, 'https://www.ub.edu.ar/modalidad-virtual/virtual-tecnicatura-universitaria-en-logistica-de-agronegocios', 0),
	(111, 'Tec. Universataria en Logística', 'hasta el 31 de marzo 2024', 11, NULL, 'https://www.ub.edu.ar/facultad-de-estudios-distancia-y-educacion-virtual/fedev-tecnicatura-universitaria-en-logistica', 0),
	(112, 'Tec. en Administración y Orientación de PYME', 'hasta el 31 de marzo 2024', 11, NULL, 'https://www.ub.edu.ar/facultad-de-estudios-distancia-y-educacion-virtual/fedev-tecnicatura-en-administracion-orientacion', 0),
	(113, 'Tec. en Comercio Internacional', 'hasta el 31 de marzo 2024', 11, NULL, 'https://www.ub.edu.ar/facultad-de-estudios-distancia-y-educacion-virtual/fedev-tecnicatura-en-comercio-internacional', 0),
	(114, 'Tec. en Comercialización', 'hasta el 31 de marzo 2024', 11, NULL, 'https://www.ub.edu.ar/facultad-de-estudios-distancia-y-educacion-virtual/fedev-tecnicatura-en-comercializacion', 0),
	(115, 'Tec. Analista Univ. en Gestión de - Capital Humano', 'hasta el 31 de marzo 2024', 11, NULL, 'https://www.ub.edu.ar/modalidad-virtual/fedev-analista-universitario-en-gestion-de-capital-humano', 0),
	(116, 'Lic. Hotelería y Turismo - Ciclo Complementario', 'hasta el 31 de marzo 2024', 11, NULL, 'https://www.ub.edu.ar/modalidad-virtual/distancia-licenciatura-en-hoteleria-y-turismo', 0),
	(117, 'Lic. Gestión de Agroempresas - Ciclo Complementario', 'hasta el 31 de marzo 2024', 11, NULL, 'https://www.ub.edu.ar/modalidad-virtual/fedev-licenciatura-en-gestion-de-agroempresas', 0),
	(118, 'Lic. Logistica Integral - Ciclo Complementario', 'hasta el 31 de marzo 2024', 11, NULL, 'https://www.ub.edu.ar/facultad-de-estudios-distancia-y-educacion-virtual/fedev-licenciatura-en-logistica-integral', 0),
	(119, 'Lic. Gestión de Cap. Humano - Ciclo Complementario', 'hasta el 31 de marzo 2024', 11, NULL, 'https://www.ub.edu.ar/facultad-de-estudios-distancia-y-educacion-virtual/fedev-licenciatura-en-gestion-de-capital-humano', 0),
	(121, 'Contador Público', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/carrera/por-modalidad/carreras-a-distancia/contador-publico-a-distancia/', 0),
	(122, 'Derecho', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/carrera/por-modalidad/carreras-a-distancia/abogacia-a-distancia/', 0),
	(123, 'Escribanía', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/carrera/por-modalidad/carreras-a-distancia/escribania-a-distancia/', 0),
	(124, 'Corredor Inmobiliario y Martillero Publico', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/carrera/por-modalidad/carreras-a-distancia/corredor-inmobiliario-y-martillero-publico-a-distancia/', 0),
	(125, 'Procuración', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/carrera/por-modalidad/carreras-a-distancia/procuracion-a-distancia/', 0),
	(126, 'Lic. en Economía', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/carrera/por-modalidad/carreras-a-distancia/licenciatura-en-economia-a-distancia/', 0),
	(127, 'Lic. en Adm. de Empresas', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/carrera/por-modalidad/carreras-a-distancia/licenciatura-en-administracion-de-empresas-a-distancia/', 0),
	(128, 'Lic. En Adm. de Negocios Digitales', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/carrera/por-modalidad/carreras-a-distancia/licenciatura-en-administracion-de-negocios-digitales/', 0),
	(129, 'Lic. En Ciencias de Datos', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/carrera/por-modalidad/carreras-a-distancia/licenciatura-en-ciencia-de-datos/', 0),
	(130, 'Lic. en Relaciones Internacionales', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/carrera/por-modalidad/carreras-a-distancia/licenciatura-en-relaciones-internacionales-a-distancia/', 0),
	(131, 'Lic. En Relaciones Publicas', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/carrera/por-modalidad/carreras-a-distancia/licenciatura-en-relaciones-publicas-e-institucionales-a-distancia/', 0),
	(132, 'Lic. en Comercialización', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/carrera/por-modalidad/carreras-a-distancia/licenciatura-en-comercializacion-a-distancia/', 0),
	(133, 'Lic. En Eficiencia Energética', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/carrera/por-modalidad/carreras-a-distancia/licenciatura-en-eficiencia-energetica/', 0),
	(134, 'Lic. En Adm. Agropecuria', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/carrera/por-modalidad/carreras-a-distancia/licenciatura-en-administracion-agropecuaria-a-distancia/', 0),
	(135, 'Lic. Recursos Humanos', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/carrera/por-modalidad/carreras-a-distancia/licenciatura-en-recursos-humanos-a-distancia-2/', 0),
	(136, 'Lic. Higiene y Seguridad', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/carrera/por-modalidad/carreras-a-distancia/licenciatura-en-higiene-y-seguridad-en-el-trabajo-2/', 0),
	(137, 'Lic. en Seguridad - Ciclo Complementario', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/carrera/por-modalidad/carreras-a-distancia/licenciatura-en-seguridad-ciclo-de-complementacion-curricular-a-distancia/', 0),
	(138, 'Lic. en Educación Física - Ciclo Complementario', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/carrera/por-modalidad/carreras-a-distancia/licenciatura-en-educacion-fisica-ciclo-de-complementacion-curricular-a-distancia/', 0),
	(139, 'Lic. En Adm. y Gestión Univ. - Ciclo Complementario', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/carrera/por-modalidad/carreras-a-distancia/licenciatura-en-administracion-y-gestion-universitaria-ccc/', 0),
	(140, 'Lic. En Criminología - Ciclo Complementario', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/carrera/por-modalidad/carreras-a-distancia/licenciatura-en-administracion-de-negocios-digitales/', 0),
	(141, 'Lic. En Entr. Deportivo - Ciclo Complementario', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/licenciatura-en-entrenamiento-deportivo-ciclo-de-complementacion-curricular-a-distancia/', 0),
	(142, 'Lic. En Lenguaje Expresivo - Ciclo Complementario', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/elementor-59082/', 0),
	(143, 'Lic. en Gestión Educativa - Ciclo Complementario', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/licenciatura-en-gestion-educativa-ciclo-de-complementacion-curricular-a-distancia/', 0),
	(144, 'Lic. Comercio Exterior', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/carrera/por-modalidad/carreras-a-distancia/carrera-de-licenciatura-en-comercio-internacional-a-distancia/', 0),
	(145, 'Tec. en Higiene y Seguridad', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/carrera/por-modalidad/carreras-a-distancia/tecnicatura-en-higiene-y-seguridad-en-el-trabajo/', 0),
	(146, 'Tec. Gestión de Bancos', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/tecnicatura-en-gestion-de-bancos-empresas-financieras-y-de-seguros/', 0),
	(147, 'Tec. En Gestion de Calidad', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/carrera/por-modalidad/carreras-a-distancia/tecnicatura-universitaria-en-gestion-de-calidad-a-distancia/', 0),
	(148, 'Tec. Univ. En Seguridad Informática', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/carrera/por-modalidad/carreras-a-distancia/tecnicatura-universitaria-en-seguridad-informatica-a-distancia/', 0),
	(149, 'Tec. Operaciones Mineras e Industriales', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/tecnicatura-en-operaciones-mineras-e-industriales/', 0),
	(150, 'Tec. Univ. Organizacion y Direccion de Eventos', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/carrera/por-modalidad/carreras-a-distancia/tecnicatura-universitaria-en-organizacion-y-direccion-de-eventos-y-ceremonial/', 0),
	(151, 'Tec. Gestión de Bancos, Empresa Financieras y Seguros', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/tecnicatura-en-gestion-de-bancos-empresas-financieras-y-de-seguros/', 0),
	(152, 'Secretariado Ejecutivo', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/carrera/por-modalidad/carreras-a-distancia/tecnicatura-universitaria-en-secretariado-ejecutivo-a-distancia/', 0),
	(153, 'Ceremonial y Protocolo', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/carrera/por-modalidad/carreras-a-distancia/tecnicatura-universitaria-en-organizacion-y-direccion-de-eventos-y-ceremonial/', 0),
	(154, 'Maestria Administracion de Negocios', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/maestria-en-administracion-de-negocios-distancia/', 0),
	(155, 'Maestria en Gestion Ambiental', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/maestria-en-gestion-ambiental-distancia-2/', 0),
	(156, 'Maestria Gestion de Obras y Desarrollos Inmob.', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/maestria-en-gestion-de-proyectos-obras-y-desarrollos-inmobiliarios/', 0),
	(157, 'Maestria en Derecho del Trabajo', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/maestria-en-derecho-del-trabajo-distancia/', 0),
	(158, 'Maestría en Gestión de Turismo Sostenible', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/maestria-en-gestion-del-turismo-sostenible/', 0),
	(159, 'Maestría en Ciencias de Datos', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/maestria-en-ciencias-de-datos-distancia/', 0),
	(160, 'Maestría en Prevención y Control de Infecciones', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/maestria-en-prevencion-y-control-de-infecciones/', 0),
	(161, 'Maestría en Nutrición y Entrenamiento Deportivo', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/maestria-en-entrenamiento-y-nutricion-deportiva-distancia/', 0),
	(162, 'Esp. En Dirección de RRHH', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/especializacion-en-direccion-de-recursos-humanos-distancia/', 0),
	(163, 'Esp. En Inteligencia de Negocios', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/general/especializacion-en-inteligencia-de-negocios/', 0),
	(164, 'Esp. En Industria y Transformación digital', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/general/especializacion-en-industria-y-trasformacion-digital/', 0),
	(165, 'Esp. En Big Data', 'hasta el 1 de marzo 2024', 7, NULL, '	https://www.ucasal.edu.ar/general/especializacion-en-big-data-y-analisis-en-datos-estrategicos/', 0),
	(166, 'Esp. Evaluacion Impacto Ambiental', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/especializacion-en-evaluacion-de-impacto-ambiental-distancia/', 0),
	(167, 'Esp. En Derecho de Familia', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/especializacion-en-derecho-de-familia-distancia/', 0),
	(168, 'Esp. en Act. Fisica Deporte y Salud', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/especializacion-en-deportes-y-actividad-fisica-para-la-salud-distancia/', 0),
	(169, 'Esp. en Higiene y Seguridad en el Trabajo', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/especializacion-en-seguridad-e-higiene-en-el-trabajo-distancia/', 0),
	(170, 'Esp. En Finanzas de Empresas', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/especializacion-en-finanzas-de-empresas-distancia/', 0),
	(171, 'Esp. Orientación en Neurodesarrollo y aprendizaje', 'hasta el 1 de marzo 2024', 7, NULL, 'https://www.ucasal.edu.ar/especializacion-en-seguridad-e-higiene-en-el-trabajo-distancia/', 0),
	(172, 'Tec. en Administración de Empresas', 'Abiertas', 8, NULL, 'https://ifes.edu.ar/distancia/tecnicatura-superior-en-administracion-de-empresas/', 0),
	(173, 'Tec. en Gestión Ambiental', 'Abiertas', 8, NULL, 'https://ifes.edu.ar/distancia/tecnicatura-superior-en-gestion-ambiental/', 0),
	(174, 'Tec. en Higiene y Seguridad', 'Abiertas', 8, NULL, 'https://ifes.edu.ar/distancia/tecnicatura-superior-en-higiene-y-seguridad/', 0),
	(175, 'Tec. en Recursos Humanos', 'Abiertas', 8, NULL, 'https://ifes.edu.ar/distancia/tecnicatura-en-recursos-humanos/', 0),
	(176, 'Tec. Geología', 'Abiertas', 8, NULL, 'https://ifes.edu.ar/distancia/tecnicatura-superior-en-geologia/', 0),
	(177, 'Tec. en Desarrollo de Software', 'Abiertas', 8, NULL, 'https://ifes.edu.ar/distancia/tecnicatura-superior-en-desarrollo-de-software/', 0),
	(178, 'Tec. en Energías Renovables', 'Abiertas', 8, NULL, 'https://ifes.edu.ar/distancia/tecnicatura-superior-en-energias-renovables/', 0),
	(179, 'Tec. en Hidrocarburos', 'Abiertas', 8, NULL, 'https://ifes.edu.ar/distancia/tecnicatura-superior-en-hidrocarburos/', 0),
	(180, 'Tec. en Topografía', 'Abiertas', 8, NULL, 'https://ifes.edu.ar/distancia/tecnicatura-superior-en-topografia/', 0),
	(181, 'Psicología en las Empresas y Organizaciones', 'Abiertas', 8, NULL, 'https://ifes.edu.ar/distancia/diplomatura-en-psicologia-en-las-empresas-y-organizaciones/', 0),
	(182, 'Dipl. Auxiliar en Hidrocarburos', 'Abiertas', 8, NULL, 'https://ifes.edu.ar/distancia/diplomatura-en-auxiliar-en-hidrocarburos/', 0),
	(183, 'Marketing con Orientación a Entornos Virtuales', 'Abiertas', 8, NULL, 'https://ifes.edu.ar/distancia/tecnicatura-superior-en-marketing/', 0),
	(184, 'Diplomatura en Actividad Física y Salud', 'Abiertas', 8, NULL, 'https://ifes.edu.ar/distancia/diplomatura-en-actividad-fisica-y-salud/', 0),
	(185, 'Administración de Sueldos e Impuestos', 'Abiertas', 8, NULL, 'https://ifes.edu.ar/distancia/diplomatura-en-administracion-de-sueldos-e-impuestos/', 0),
	(186, 'Líder de Ventas', 'Abiertas', 8, NULL, 'https://ifes.edu.ar/distancia/diplomatura-en-lider-de-ventas/', 0),
	(187, 'Sop. de Infraestructura de Tec. de la Información', 'Abiertas', 8, NULL, 'https://ifes.edu.ar/distancia/tecnicatura-superior-en-soporte-de-infraestructura-de-tecnologia-de-la-informacion/', 0),
	(188, 'Ciencia de Datos e Inteligencia Artificial', 'Abiertas', 8, NULL, 'https://ifes.edu.ar/distancia/tecnicatura-superior-en-ciencia-de-datos-e-inteligencia-artificial/', 0),
	(189, 'Derecho', 'hasta el 15 de abril 2024', 12, NULL, 'https://www.ufasta.edu.ar/distancia/abogacia-distancia/', 0),
	(190, 'Contador Público', 'hasta el 15 de abril 2024', 12, NULL, 'https://www.ufasta.edu.ar/distancia/carreras/contador-publico-distancia-2/', 0),
	(191, 'Martillero y Corredor Público', 'hasta el 15 de abril 2024', 12, NULL, 'https://www.ufasta.edu.ar/distancia/martillero-y-corredor-publico-dist/', 0),
	(192, 'Lic. en Higiene y Seguridad', 'hasta el 15 de abril 2024', 12, NULL, 'https://www.ufasta.edu.ar/distancia/licenciatura-en-hig-y-seg-en-el-trabajo/', 0),
	(193, 'Lic. en Ciberseguridad', 'hasta el 15 de abril 2024', 12, NULL, 'https://www.ufasta.edu.ar/distancia/lic-ciberseguridad/', 0),
	(194, 'Lic. en Ingles - Ciclo Complementario', 'hasta el 15 de abril 2024', 12, NULL, 'https://www.ufasta.edu.ar/distancia/licenciatura-en-ingles/', 0),
	(195, 'Lic. en Educación - Ciclo Complementario', 'hasta el 15 de abril 2024', 12, NULL, 'https://www.ufasta.edu.ar/distancia/licenciatura-en-educacion/', 0),
	(196, 'Lic. en Adm. de Empresas - Ciclo Complementario', 'hasta el 15 de abril 2024', 12, NULL, 'https://www.ufasta.edu.ar/distancia/licenciatura-en-administracion/', 0),
	(197, 'Lic. en Markenting - Ciclo Complementario', 'hasta el 15 de abril 2024', 12, NULL, 'https://www.ufasta.edu.ar/distancia/licenciatura-en-marketing/', 0),
	(198, 'Lic. en Periodismo - Ciclo Complementario', 'hasta el 15 de abril 2024', 12, NULL, 'https://www.ufasta.edu.ar/distancia/licenciatura-en-periodismo/', 0),
	(199, 'Lic. en Tecnología Educativa - Ciclo Complementario', 'hasta el 15 de abril 2024', 12, NULL, 'https://www.ufasta.edu.ar/distancia/lic-en-tecnologia-educativa/', 0),
	(200, 'Lic. en Educación Física - Ciclo Complementario', 'hasta el 15 de abril 2024', 12, NULL, 'https://www.ufasta.edu.ar/distancia/licenciatura-en-educacion-fisica/', 0),
	(201, 'Lic. en Psicopedagogía - Ciclo Complementario', 'hasta el 15 de abril 2024', 12, NULL, 'https://www.ufasta.edu.ar/distancia/licenciatura-en-psicopedagogia/', 0),
	(202, 'Lic. en Seguridad Ciudadana - Ciclo Complementario', 'hasta el 15 de abril 2024', 12, NULL, 'https://www.ufasta.edu.ar/distancia/licenciatura-en-seguridad-ciudadana/', 0),
	(203, 'Lic. en Corretaje Inmobiliario - Ciclo Complementario', 'hasta el 15 de abril 2024', 12, NULL, 'https://www.ufasta.edu.ar/distancia/licenciatura-en-corretaje-inmobiliario-ciclo-de-complementacion-curricular/', 0),
	(204, 'Lic. Archivología', 'hasta el 15 de abril 2024', 12, NULL, 'https://www.ufasta.edu.ar/distancia/licenciatura-en-archivologia/', 0),
	(205, 'Lic. en Turismo - Ciclo Complementario', 'hasta el 15 de abril 2024', 12, NULL, 'https://www.ufasta.edu.ar/distancia/licenciatura-en-turismo/', 0),
	(206, 'Lic. Negocios Digitales - Ciclo Complementario', 'hasta el 15 de abril 2024', 12, NULL, 'https://www.ufasta.edu.ar/distancia/licenciatura-en-desarrollo-de-negocios-digitales/', 0),
	(207, 'Lic. en Educación Religiosa - Ciclo Complementario', 'hasta el 15 de abril 2024', 12, NULL, 'https://www.ufasta.edu.ar/humanidades/carreras/licenciatura-en-educacion-religiosa/', 0),
	(208, 'Lic. en Pedagogía de la Educación Religiosa', 'hasta el 15 de abril 2024', 12, NULL, 'https://www.ufasta.edu.ar/humanidades/licenciatura-en-pedagogia-de-la-educacion-religiosa/', 0),
	(209, 'Lic. Gest. del Talento Humano - Ciclo Complementario', 'hasta el 15 de abril 2024', 12, NULL, 'https://www.ufasta.edu.ar/distancia/licenciatura-en-gestion-del-talento-humano-ciclo-complementario/', 0),
	(210, 'Lic. en Comunicación Social', 'hasta el 15 de abril 2024', 12, NULL, 'https://www.ufasta.edu.ar/distancia/licenciatura-en-comunicacion-social/', 0),
	(211, 'Lic. Diseño y Com. Transmedia - Ciclo Complementario', 'hasta el 15 de abril 2024', 12, NULL, 'https://www.ufasta.edu.ar/distancia/licenciatura-en-diseno-y-comunicacion-transmedia-ciclo-complementario/', 0),
	(212, 'Lic. en RR. HH Inscripciones', 'hasta el 15 de abril 2024', 12, NULL, 'https://www.ufasta.edu.ar/distancia/licenciatura-en-recursos-humanos/', 0),
	(213, 'Lic. Publicidad y Narrativas Digitales', 'hasta el 15 de abril 2024', 12, NULL, 'https://www.ufasta.edu.ar/distancia/licenciatura-en-publicidad-y-narrativas-digitales/', 0),
	(214, 'Lic. Gestión de la Comunicación Estratégica', 'hasta el 15 de abril 2024', 12, NULL, 'https://www.ufasta.edu.ar/distancia/licenciatura-en-gestion-de-la-comunicacion-estrategica/', 0),
	(215, 'Tec. en Acompañamiento Terapeutico', 'PROXIMAMENTE', 12, NULL, 'https://www.tecnicaturaat.ar/web/tecnicaturaat/', 0),
	(216, 'Tec. Universitaria en Adm. de PYME', 'hasta el 15 de abril 2024', 12, NULL, 'https://www.ufasta.edu.ar/distancia/tecnicatura-en-adm-de-pymes/', 0),
	(217, 'Tec. en Seguridad Ciudadana', 'hasta el 15 de abril 2024', 12, NULL, 'https://www.ufasta.edu.ar/distancia/tecnicatura-en-seguridad-ciudadana/', 0),
	(218, 'Tec. en Higiene y Seguridad', 'hasta el 15 de abril 2024', 12, NULL, 'https://www.ufasta.edu.ar/distancia/tecnicatura-en-higiene-y-seguridad-en-el-trabajo-2/', 0),
	(219, 'Tec. en Hostelería', 'hasta el 15 de abril 2024', 12, NULL, 'https://www.ufasta.edu.ar/distancia/tecnicatura-universitaria-en-hoteleria/', 0),
	(220, 'Tec. en Turismo', 'hasta el 15 de abril 2024', 12, NULL, 'https://www.ufasta.edu.ar/distancia/tecnicatura-universitaria-en-turismo/', 0),
	(221, 'Esp. Informática Forense', 'hasta el 15 de abril 2024', 12, NULL, 'https://www.ufasta.edu.ar/distancia/especializacion-en-informatica-forense/', 0),
	(222, 'Esp. en Proyectos Educativos', 'hasta el 15 de abril 2024', 12, NULL, 'https://www.ufasta.edu.ar/distancia/especializacion-educacion/', 0);
/*!40000 ALTER TABLE `propuesta_academica` ENABLE KEYS */;

-- Volcando estructura para tabla municipalidad.reclamo
DROP TABLE IF EXISTS `reclamo`;
CREATE TABLE IF NOT EXISTS `reclamo` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tema_id` bigint(20) NOT NULL,
  `localidad` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario_id` bigint(20) unsigned DEFAULT NULL,
  `admin_id` bigint(20) unsigned DEFAULT NULL,
  `estado` enum('IN','EP','CS','CN') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'IN',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reclamo_usuario_id_foreign` (`usuario_id`),
  KEY `reclamo_admin_id_foreign` (`admin_id`),
  CONSTRAINT `reclamo_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Volcando datos para la tabla municipalidad.reclamo: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `reclamo` DISABLE KEYS */;
INSERT INTO `reclamo` (`id`, `titulo`, `descripcion`, `tema_id`, `localidad`, `usuario_id`, `admin_id`, `estado`, `created_at`, `updated_at`) VALUES
	(1, 'falta de agua', 'decremento en el caudal de agua en castelli 1200', 5, 'Tres Arroyos', NULL, NULL, 'IN', '2023-12-05 13:12:32', '2023-12-05 13:12:32'),
	(2, 'problemas con la iluminaria', 'Poca iluminación en la calle 23 al 2000', 5, 'copetonas', NULL, NULL, 'IN', '2023-12-05 13:15:42', '2023-12-05 13:15:42');
/*!40000 ALTER TABLE `reclamo` ENABLE KEYS */;

-- Volcando estructura para tabla municipalidad.reclamo_tema
DROP TABLE IF EXISTS `reclamo_tema`;
CREATE TABLE IF NOT EXISTS `reclamo_tema` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET latin1 NOT NULL,
  `area_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Volcando datos para la tabla municipalidad.reclamo_tema: ~18 rows (aproximadamente)
/*!40000 ALTER TABLE `reclamo_tema` DISABLE KEYS */;
INSERT INTO `reclamo_tema` (`id`, `nombre`, `area_id`) VALUES
	(1, 'Alumbrado', 5),
	(2, 'Arbolado', 5),
	(3, 'Comercios', 8),
	(4, 'Limpieza y recolección', 5),
	(5, 'Mascotas y animales', 9),
	(6, 'Medio ambiente', 3),
	(7, 'Obras publicas y vivienda', 5),
	(8, 'Plazas y parques', 3),
	(9, 'Programas sociales', 2),
	(10, 'Salud', 9),
	(11, 'Seguridad', 10),
	(12, 'Semáforos', 10),
	(13, 'Servicios públicos', 5),
	(14, 'Tasas municipales', 6),
	(15, 'Tránsito y transporte', 10),
	(16, 'Vía pública', 5),
	(17, 'Otros', 1),
	(18, 'Agua y/o cloacas', 13);
/*!40000 ALTER TABLE `reclamo_tema` ENABLE KEYS */;

-- Volcando estructura para tabla municipalidad.seccion_menu
DROP TABLE IF EXISTS `seccion_menu`;
CREATE TABLE IF NOT EXISTS `seccion_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text CHARACTER SET latin1 NOT NULL,
  `path` text CHARACTER SET latin1 NOT NULL,
  `visible` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Volcando datos para la tabla municipalidad.seccion_menu: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `seccion_menu` DISABLE KEYS */;
INSERT INTO `seccion_menu` (`id`, `nombre`, `path`, `visible`) VALUES
	(1, 'Municipio', 'Municipio', 1),
	(2, 'Atencion al vecino', 'Atencion-al-vecino', 1),
	(3, 'Ciudad productiva', 'ciudad-productiva', 0),
	(4, 'Cultura, Educación y Derechos Humanos', 'cultura', 1),
	(5, 'Turismo', 'Turismo', 1),
	(6, 'Deportes', 'Deportes', 1),
	(7, 'nada', 'nada', 0);
/*!40000 ALTER TABLE `seccion_menu` ENABLE KEYS */;

-- Volcando estructura para tabla municipalidad.seccion_pagina
DROP TABLE IF EXISTS `seccion_pagina`;
CREATE TABLE IF NOT EXISTS `seccion_pagina` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET latin1 NOT NULL,
  `link` varchar(191) CHARACTER SET latin1 DEFAULT NULL,
  `pertenece_a` int(11) NOT NULL DEFAULT '0',
  `portada` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `seccion_pagina_seccion_menu_FK` (`pertenece_a`),
  CONSTRAINT `seccion_pagina_seccion_menu_FK` FOREIGN KEY (`pertenece_a`) REFERENCES `seccion_menu` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Volcando datos para la tabla municipalidad.seccion_pagina: ~42 rows (aproximadamente)
/*!40000 ALTER TABLE `seccion_pagina` DISABLE KEYS */;
INSERT INTO `seccion_pagina` (`id`, `nombre`, `link`, `pertenece_a`, `portada`) VALUES
	(1, 'Transparencia fiscal', NULL, 1, 'localidades.jpg'),
	(2, 'Boletin oficial', NULL, 1, 'deportes.jpg'),
	(4, 'Ciudad productiva', 'ciudad-productiva', 1, 'ciudad-productiva.jpg'),
	(5, 'Educacion', 'educacion', 1, 'educacion.jpg'),
	(6, 'Salud', 'https://centrodesaludtsas.com.ar/', 1, 'saludd.jpg'),
	(8, 'Organigrama', 'proximamente', 1, 'organigr.jpg'),
	(10, 'Entes descentralizados', NULL, 1, 'salud.jpg'),
	(15, 'Interes ciudadano', NULL, 1, 'educacion.jpg'),
	(18, 'La ciudad', 'proximamente', 1, 'ciudad.jpg'),
	(19, 'HCD', 'https://hcd.tresarroyos.gov.ar/', 1, 'hcd.jpg'),
	(20, 'Ente Vial', 'proximamente', 1, 'vial2.jpg'),
	(22, 'Planeamiento Urbano', 'proximamente', 1, 'urbano3.jpg'),
	(24, 'museos', 'museos', 4, 'museos.png'),
	(25, 'Teatro', 'seccion/teatro', 4, 'teatro.png'),
	(26, 'Bibliotecas', 'seccion/bibliotecas', 4, 'bibliotecas.png'),
	(28, 'Centro Cultural La Estación', 'seccion/cce', 4, 'cce.png'),
	(29, 'Elencos Municipales', 'seccion/elencos', 4, 'elencos.png'),
	(30, 'Colectividades', 'seccion/colectividades', 4, 'colectividades.png'),
	(31, 'Guia de Trámites', '/guia-de-tramites', 2, 'tramites3.jpg'),
	(32, 'Servicios', 'servicios', 2, 'servicios.jpg'),
	(33, 'Gestión Ambiental', 'seccion/gestion-ambiental', 2, 'gestion-ambiental.jpg'),
	(34, 'Bromatologia', 'seccion/bromatologia', 2, 'bromatologia.jpg'),
	(35, 'Mascotas', 'proximamente', 2, 'mascotas.jpg'),
	(36, 'Discapacidad', 'proximamente', 2, 'discapacidad.jpg'),
	(37, 'Niñez', 'proximamente', 1, 'niniez2.jpg'),
	(38, 'Género', 'proximamente', 1, 'genero.jpg'),
	(39, 'Parque industrial', 'https://parqueindustrial3a.tresarroyos.gov.ar/', 3, 'parqueindustrial.jpg'),
	(40, 'Prodesta', 'https://prodesta.tresarroyos.gov.ar/inicio', 3, 'prodesta.jpg'),
	(42, 'Emprendedores', 'proximamente', 3, 'emprendedores.jpg'),
	(43, 'Comercio (habilitac)', 'proximamente', 2, 'comercios.jpg'),
	(44, 'POLIDEPORTIVO', 'proximamente', 1, 'la-ciudad.png'),
	(45, 'CLUBES', 'proximamente', 1, 'la-ciudad.png'),
	(50, 'Estacionamiento medido', 'seccion/estacionamiento-medido', 1, 'estacionamiento-medido.jpg'),
	(55, 'Delegaciones', 'delegaciones', 1, 'delegaciones.jpg'),
	(56, 'Fiesta Provincial del Trigo', 'seccion/fiesta-del-trigo', 4, 'fdt.png'),
	(57, 'Feria Nacional de Artesanos', 'seccion/feria-de-artesanos', 4, 'fa.png'),
	(58, 'Asistencias Técnicas', 'seccion/asistencias-tecnicas', 6, 'asistencias.jpg'),
	(59, 'Actividades locales', 'seccion/act-locales', 6, 'locales.jpg'),
	(60, 'Actividades en localidades', 'seccion/act-delegaciones', 6, 'actividades-localidades.jpg'),
	(61, 'Escuelas Municipales', 'seccion/escuelas', 6, 'escuelas.jpg'),
	(62, 'Juegos Bonaerenses', 'seccion/juegos-bonaerenses', 6, 'bonae.jpg'),
	(63, 'Inscripciones en actividades', 'seccion/inscripciones', 6, 'actividades.jpg');
/*!40000 ALTER TABLE `seccion_pagina` ENABLE KEYS */;

-- Volcando estructura para tabla municipalidad.seccion_textos
DROP TABLE IF EXISTS `seccion_textos`;
CREATE TABLE IF NOT EXISTS `seccion_textos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `seccion_id` int(11) NOT NULL,
  `titulo` varchar(191) CHARACTER SET latin1 DEFAULT NULL,
  `informacion` text CHARACTER SET latin1,
  `subtitulo` varchar(191) CHARACTER SET latin1 DEFAULT NULL,
  `sub_informacion` text CHARACTER SET latin1,
  `img_portada` varchar(191) CHARACTER SET latin1 DEFAULT NULL,
  `img_2` varchar(191) CHARACTER SET latin1 DEFAULT NULL,
  `img_3` varchar(191) CHARACTER SET latin1 DEFAULT NULL,
  `img_4` varchar(191) CHARACTER SET latin1 DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `seccion_textos_seccion_pagina_FK` (`seccion_id`),
  CONSTRAINT `seccion_textos_seccion_pagina_FK` FOREIGN KEY (`seccion_id`) REFERENCES `seccion_pagina` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Volcando datos para la tabla municipalidad.seccion_textos: ~13 rows (aproximadamente)
/*!40000 ALTER TABLE `seccion_textos` DISABLE KEYS */;
INSERT INTO `seccion_textos` (`id`, `seccion_id`, `titulo`, `informacion`, `subtitulo`, `sub_informacion`, `img_portada`, `img_2`, `img_3`, `img_4`, `created_at`, `deleted_at`) VALUES
	(3, 25, 'Teatro', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus cursus pulvinar est, sollicitudin tempor sapien pretium eu. Sed euismod sollicitudin volutpat. Cras suscipit nec velit non rutrum. Integer bibendum magna vitae lectus bibendum finibus. Fusce aliquam, nulla ac egestas tincidunt, nibh odio sodales risus, at gravida velit risus at magna. Cras felis est, faucibus et est lacinia, lacinia viverra justo. Sed nisi sapien, bibendum eu nisi eu, tempus blandit libero.', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-02 13:24:56', '2024-01-02 13:24:56'),
	(4, 26, 'Bibliotecas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus cursus pulvinar est, sollicitudin tempor sapien pretium eu. Sed euismod sollicitudin volutpat. Cras suscipit nec velit non rutrum. Integer bibendum magna vitae lectus bibendum finibus. Fusce aliquam, nulla ac egestas tincidunt, nibh odio sodales risus, at gravida velit risus at magna. Cras felis est, faucibus et est lacinia, lacinia viverra justo. Sed nisi sapien, bibendum eu nisi eu, tempus blandit libero.', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-02 13:24:56', '2024-01-02 13:24:56'),
	(5, 30, 'Colectividades de Tres Arroyos', 'Desde su inicio, la sede social ha sido un espacio de encuentro, donde la colectividad se congrega para celebrar sus tradiciones y rituales religiosos.\r\nEn este lugar, que ha sido testigo de tantos momentos significativos, la mayoría musulmana de los sirios en la zona ha celebrado bodas, ha despedido a sus seres queridos y ha forjado lazos que perduran en el tiempo.\r\nActualmente, la Sociedad Siria celebra tres festividades anuales: una a mitad de año, otra en conmemoración de su aniversario y la última para despedir el año. \r\nAdemás, el salón se abre para eventos particulares y clases de gimnasia. Participamos con alegría en las Ferias de Colectividades, llevando con orgullo la rica tradición de aquellos inmigrantes sirios que encontraron en estas tierras su hogar.\r\n La sede es ahora un emblema de la Sociedad Siria y un punto de referencia para los amantes de la gastronomía típica, presentando mes a mes su tradicional Feria del Plato Árabe.\r\nA pesar de ser una colonia relativamente pequeña, la Sociedad Siria ha dejado una huella imborrable, mostrando el espíritu noble y generoso de sus miembros. Han sido un factor crucial en el progreso de la ciudad, brindando apoyo y solidaridad en momentos difíciles. ¡Felicidades por estos 102 años de legado y contribución a nuestra comunidad! ', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-02 13:24:56', '2024-01-02 13:24:56'),
	(6, 50, 'ADHERIRSE AL SISTEMA INTELIGENTE DE ESTACIONAMIENTO MEDIDO', 'El Estacionamiento Medido permite administrar de manera eficiente el uso del espacio público, así como ordenar y evitar situaciones en las que se pone en riesgo la seguridad vial.', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-04 13:40:58', '2024-01-04 13:40:58'),
	(9, 28, 'Centro Cultural la Estación', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus cursus pulvinar est, sollicitudin tempor sapien pretium eu. Sed euismod sollicitudin volutpat. Cras suscipit nec velit non rutrum. Integer bibendum magna vitae lectus bibendum finibus. Fusce aliquam, nulla ac egestas tincidunt, nibh odio sodales risus, at gravida velit risus at magna. Cras felis est, faucibus et est lacinia, lacinia viverra justo. Sed nisi sapien, bibendum eu nisi eu, tempus blandit libero.', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-16 13:24:56', '2024-01-16 13:24:56'),
	(10, 29, 'Ballet Municipal', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus cursus pulvinar est, sollicitudin tempor sapien pretium eu. Sed euismod sollicitudin volutpat. Cras suscipit nec velit non rutrum. Integer bibendum magna vitae lectus bibendum finibus. Fusce aliquam, nulla ac egestas tincidunt, nibh odio sodales risus, at gravida velit risus at magna. Cras felis est, faucibus et est lacinia, lacinia viverra justo. Sed nisi sapien, bibendum eu nisi eu, tempus blandit libero.', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-16 13:24:56', '2024-01-16 13:24:56'),
	(11, 56, 'Fiesta Provincial del Trigo 2024', 'La edición 2024 de la Fiesta provincial del Trigo se desarrollará desde el 6 al 10 de marzo, confirmó el intendente electo, Pablo Garate.', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-16 13:24:56', '2024-01-16 13:24:56'),
	(12, 26, 'Listado de Bibliotecas', '<ul>\r\n<li style="font-weight: 700;">\r\nBiblioteca Publica Sarmiento\r\n</li>\r\n<li style="list-style: none;">\r\nAv. Moreno 334 \r\n</li>\r\n<li style="list-style: none;">\r\n 02983 43-0721\r\n</li>\r\n<li style="font-weight: 700;">\r\nBiblioteca Vicente P. Cacuri\r\n</li>\r\n<li style="list-style: none;">\r\nHipólito Yrigoyen 165 · 02983 43-4209\r\n</li>\r\n<li style="font-weight: 700;">\r\nBiblioteca Jose Campano\r\n</li>\r\n<li style="list-style: none;">\r\nHipólito Yrigoyen 252 · 02983 42-6802\r\n</li>\r\n<li style="font-weight: 700;">\r\nBiblioteca Popular José Ingenieros\r\n</li>\r\n<li style="list-style: none;">\r\nBolívar 132\r\n</li>\r\n<li style="font-weight: 700;">\r\nBiblioteca Ing. Luis Meister\r\n</li>\r\n<li style="list-style: none;">\r\nBerittu 710 · 2983-348492\r\n</li>\r\n\r\n</ul>\r\n', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-02 13:24:56', '2024-01-02 13:24:56'),
	(13, 30, 'Listado de Colectividades y sus sedes', '<ul>\r\n<li style="font-weight: 700;">\r\nColectividad Italiana\r\n</li>\r\n<li style="list-style: none;">\r\nAv. Moreno 334 \r\n</li>\r\n<li style="font-weight: 700;">\r\nColectividad Danesa\r\n</li>\r\n<li style="font-weight: 700;">\r\nColectividad Holandesa\r\n</li>\r\n<li style="font-weight: 700;">\r\nColectividad Siria\r\n</li>\r\n</ul>\r\n', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-02 13:24:56', '2024-01-02 13:24:56'),
	(14, 25, 'Teatro Municipal de Tres Arroyos', 'Nullam in consectetur mi, et pretium libero. Nunc ac libero pretium, gravida mi et, maximus odio. Duis nec tempus tortor. Duis ultricies risus a fermentum cursus. Praesent tempor mollis justo ut malesuada. Aliquam risus leo, pharetra quis feugiat nec, rhoncus vitae tellus. Fusce consectetur dui ut est tempor ultricies.\r\n\r\nInteger faucibus condimentum ultrices. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Praesent turpis augue, aliquet dictum placerat vitae, eleifend et metus. Mauris leo massa, faucibus eu consequat vel, consectetur vel augue. Donec a cursus nulla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec nec est malesuada, iaculis elit ac, laoreet turpis.', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-02 13:24:56', '2024-01-02 13:24:56'),
	(15, 50, 'Costos y horarios', '<ul> \r\n<li>DESDE EL 01/11 AL 28/02 de 9:30hs a 13hs y de 17hs a 20:30hs. </li>\r\n<li>DESDE EL 01/03 AL 31/10 de 9:30hs a 13hs y de 15:30hs a 19hs.</li>\r\n<li>SÁBADOS TODO EL AÑO de 9hs a 13hs.\r\n</li>\r\n</ul>\r\n<br>\r\n<strong>VALOR: $185,00.- LA HORA \r\n<br>\r\nLas excepciones de estacionamiento es solo para particulares que no posean garage ni cochera. Medida que no incluye a comercios ni industrias. </strong><br><br>\r\n\r\nPara adherirse acercate a cualquier comercio asociado y cargá dinero asociando todas sus patentes al Sistema Inteligente. Luego de esto los controladores, que se encuentran en la calle, se encargarán de debitarte cada vez que estacione sin necesidad que hagas nada. Cuando te quedes sin crédito te enviaremos un SMS sin costo para que vuelvas a cargar crédito.<br><br>\r\n\r\nPodes ver los comercios adheridos haciendo click aquí Y si necesitas saber mas info sobre este nuevo sistema podes ingresar a \r\n<a href="https://tresarroyos.movilparking.com/web/" target="_blank">https://tresarroyos.movilparking.com/web/ </a> <br>', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-04 13:40:58', '2024-01-04 13:40:58'),
	(16, 28, 'Descripción de talleres', 'Nullam in consectetur mi, et pretium libero. Nunc ac libero pretium, gravida mi et, maximus odio. Duis nec tempus tortor. Duis ultricies risus a fermentum cursus. Praesent tempor mollis justo ut malesuada. Aliquam risus leo, pharetra quis feugiat nec, rhoncus vitae tellus. Fusce consectetur dui ut est tempor ultricies.\r\n\r\nInteger faucibus condimentum ultrices. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Praesent turpis augue, aliquet dictum placerat vitae, eleifend et metus. Mauris leo massa, faucibus eu consequat vel, consectetur vel augue. Donec a cursus nulla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec nec est malesuada, iaculis elit ac, laoreet turpis.', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-16 13:24:56', '2024-01-16 13:24:56'),
	(17, 56, 'Cronograma', 'Nullam in consectetur mi, et pretium libero. Nunc ac libero pretium, gravida mi et, maximus odio. Duis nec tempus tortor. Duis ultricies risus a fermentum cursus. Praesent tempor mollis justo ut malesuada. Aliquam risus leo, pharetra quis feugiat nec, rhoncus vitae tellus. Fusce consectetur dui ut est tempor ultrfend et  ac, laoreet turpis.', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-16 13:24:56', '2024-01-16 13:24:56');
/*!40000 ALTER TABLE `seccion_textos` ENABLE KEYS */;

-- Volcando estructura para tabla municipalidad.tramite_guia
DROP TABLE IF EXISTS `tramite_guia`;
CREATE TABLE IF NOT EXISTS `tramite_guia` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lugar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `horario` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quien` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requisitos` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `costo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contacto` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `links` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `tipo_id` bigint(20) unsigned DEFAULT NULL,
  `area_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tramite_guia_tipo_id_foreign` (`tipo_id`),
  KEY `tramite_guia_area_id_foreign` (`area_id`),
  CONSTRAINT `tramite_guia_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `area` (`id`),
  CONSTRAINT `tramite_guia_tipo_id_foreign` FOREIGN KEY (`tipo_id`) REFERENCES `tramite_tipo` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Volcando datos para la tabla municipalidad.tramite_guia: ~87 rows (aproximadamente)
/*!40000 ALTER TABLE `tramite_guia` DISABLE KEYS */;
INSERT INTO `tramite_guia` (`id`, `titulo`, `descripcion`, `lugar`, `horario`, `quien`, `requisitos`, `costo`, `contacto`, `links`, `tipo_id`, `area_id`, `created_at`, `updated_at`) VALUES
	(1, 'Conexion de Agua', 'Este trámite permite la conexión de agua en lugares donde la red se encuentra en servicio.', 'Oficina administrativa de Obras Sanitarias - Castelli 625', 'Lunes a Viernes de 6:30 a 13:30 hs.', 'Cualquier persona', NULL, NULL, 'Correo: sanitariasreclamos@tresarroyos.gov.ar - Tel. (02983) 432550', NULL, 2, 13, NULL, NULL),
	(2, 'Conexión de Cloaca', 'Este trámite permite la conexión de cloaca en lugares donde la red se encuentra en servicio.', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 6:30 a 13:30 hs.', 'Cualquier persona', NULL, NULL, 'Correo: sanitariasreclamos@tresarroyos.gov.ar - Tel. (02983) 432550', NULL, 2, 6, NULL, NULL),
	(3, 'Renovación de Sepulturas u otros', 'Este trámite permite renovar y/o mantener la ocupacion del espacio dentro del Cementerio Municipal. ', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 7:00 a 14:00 en <b>Políticas Tributarias.</b><br/> Y de Lunes a Viernes de 7:00 a 14:00 y Sábados, Domingos y Feriados de 8 a 12 hs en el <b>Cementerio</b>.', 'Contribuyente responsable y /o familiar de la persona fallecida', NULL, NULL, 'Correo: reclamos@tresarroyos.gov.ar - Tel. 439302-439303-439301', NULL, 4, 6, NULL, NULL),
	(4, 'Inscripción de Proveedor', 'Este trámite permite realizar la inscripción como proveedor.', 'Dpto de Compras y Suministros - Palacio Municipal', 'Lunes a Viernes de 07.30 a 13:00 hs. ', 'Por el interesado, un tercero o por correo postal para quien se encuentre fuera de la ciudad', NULL, NULL, 'Correo: compras@tresa.mun.gba.gov.ar - Tel. 439229 o 439230', NULL, 8, 19, NULL, NULL),
	(5, 'Cambio de Titularidad de un inmueble', 'Este trámite nos permite cambiar la tituralidad de un inmueble.', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'Puede solicitarlo personalmente por el titular del bien o un tercero', 'Datos solicitados: Dni - Nombre - email - teléfono - calle-altura-piso-dpto - codigo postal - localidad - provincia - imponible - dato adicional. \r\nAdjuntar dni y escritura', NULL, 'Correo:reclamos@tresarroyos.gov.ar - Tel. 439310/314', NULL, 7, 6, NULL, NULL),
	(6, 'Declaracion Jurada de PH', 'Este trámite se realiza para casos en los cuales los titulares del inmueble deben incorporar Superficie en U. Funcionales por sometimiento al régmien de la Ley N° 13512 (Propiedad Horizontal).', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'Por el titular del bien.', NULL, NULL, 'Correo:catastro@tresarroyos.gov.ar - Tel. 439250', NULL, 7, 6, NULL, NULL),
	(7, 'Apertura o Subdivisión de Partidas', 'Este trámite te permite crear una partida.</br>A partir de la de la tercera partida en dar de alta se deberá pagar un sellado por cada una en Tesoreria Municipal.', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'Por el titular del bien o Escribanos mediante nota presentada en Mesa de Entradas', NULL, NULL, 'Correo:catastro@tresarroyos.gov.ar - Tel. 439250', NULL, 7, 6, NULL, NULL),
	(8, 'Certificación de Línea Municipal para presentar ante CAMUZZI', 'Este trámite te premite realizar la verificación de la línea Municipal para poder realizar el trámite ante CAMUZZI GAS PAMPEANA. ', 'Departamento de Catastro - Castelli 615', 'Lunes a Viernes de 07:30 a 13:00 hs.', 'Por el titular del bien.', NULL, NULL, 'Correo:catastro@tresarroyos.gov.ar - Tel. 439250', NULL, 7, 20, NULL, NULL),
	(9, 'Liquidación de Derechos 2018', 'Este trámite es para realizar la subdivisión de Chacras, fracción, manzana o parcela,  ', 'Departamento de Catastro - Castelli 615', 'Lunes a Viernes de 07:30 a 13:00 hs.', 'Por el titular.', NULL, NULL, 'Correo:catastro@tresarroyos.gov.ar - Tel. 439250', NULL, 7, 20, NULL, NULL),
	(10, 'Consultas Catastrales 2018', 'Es trámite te permite realizar consulta de cedula catastral, deuda catastral, plano Mesura y/o Subdivisión, y plano como complemento de información de cedula catastro.', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'Segun el tipo de consulta puede realizarlo profesional, titular o particular', NULL, NULL, 'Correo:catastro@tresarroyos.gov.ar - Tel. 433168 Int. 128', NULL, 7, 6, NULL, NULL),
	(11, 'Guías de Traslado de Ganado Mayor y Menor', 'Este trámite es para poder realizar Venta Invernada, Venta a Frigorificos fuera del partido y locales. ', 'Dpto. de Guías Marcas y Señales - Pelegrini N°1', 'Lunes a Viernes de 07:00 a 13:00 hs.', 'Titular de la Marca y/o Señal. Tercero designado por el titular de la misma', NULL, NULL, 'Correo: guias@tresarroyos.gov.ar - Tel. 425835', NULL, 6, 21, NULL, NULL),
	(12, 'Guías de Traslado a sí mismo', 'Este trámite permite el traslado de hacienda que realiza el productor de un partido y/o provincia a otro/a, no reviste caracter de venta.', 'Dpto. de Guías Marcas y Señales - Pelegrini N°1', 'Lunes a Viernes de 07:00 a 13:00 hs.', 'Titular de la Marca y/o Señal. Tercero designado por el titular de la misma', NULL, NULL, 'Correo: guias@tresarroyos.gov.ar - Tel. 425835', NULL, 6, 21, NULL, NULL),
	(13, 'Certificados de Adquisición de Ganado Mayor y Menor', 'Este trámite nos permite obtener el certificado de adquisición.', 'Dpto. de Guías Marcas y Señales - Pelegrini N°1', 'Lunes a Viernes de 07:00 a 13:00 hs.', 'Titular de la Marca y/o Señal. Tercero designado por el titular de la misma', NULL, NULL, 'Correo: guias@tresarroyos.gov.ar - Tel. 425835', NULL, 6, 21, NULL, NULL),
	(14, 'Permisos de Marca', 'Este trámite nos permite obtener la declaración del destete de ganado mayor - vacunos y equinos - antes del año del animal. Según disposicion del Ministerio de Asuntos Agrarios - Dpto. Registro Ganadero - el productor debe realizar 2 (dos) Permisos de Marcas al año como máximo. La cantidad de animales que se declaren en cada permiso dependerá de la cantidad de vacas y/o vaquillonas (madres) declaradas oportunamente en el stock ganadero de cada productor.', 'Dpto. de Guías Marcas y Señales - Pelegrini N°1', 'Lunes a Viernes de 07:00 a 13:00 hs.', 'Titular de la Marca y/o Señal. Tercero designado por el titular de la misma', NULL, NULL, 'Correo: guias@tresarroyos.gov.ar - Tel. 425835', NULL, 6, 21, NULL, NULL),
	(15, 'Permisos de Señal', 'Este trámite nos permite obtener la declaración del destete de ganado menor - lanares y porcinos - antes de los 6 (seis) meses del animal.', 'Dpto. de Guías Marcas y Señales - Pelegrini N°1', 'Lunes a Viernes de 07:00 a 13:00 hs.', 'Titular de la Marca y/o Señal. Tercero designado por el titular de la misma', NULL, NULL, 'Correo: guias@tresarroyos.gov.ar - Tel. 425835', NULL, 6, 21, NULL, NULL),
	(16, 'Archivos de Guías ', 'Este trámite nos permite realizar el ingreso de hacienda de ganado mayor y/o menor de otro partido.', 'Dpto. de Guías Marcas y Señales - Pelegrini N°1', 'Lunes a Viernes de 07:00 a 13:00 hs.', 'Titular de la Marca y/o Señal. Tercero designado por el titular de la misma', NULL, NULL, 'Correo: guias@tresarroyos.gov.ar - Tel. 425835', NULL, 6, 21, NULL, NULL),
	(17, 'Reducción a Marca Propia', 'Este trámite se realiza cuando el productor compra ganado mayor y pone su marca.', 'Dpto. de Guías Marcas y Señales - Pelegrini N°1', 'Lunes a Viernes de 07:00 a 13:00 hs.', 'Titular de la Marca y/o Señal. Tercero designado por el titular de la misma', NULL, NULL, 'Correo: guias@tresarroyos.gov.ar - Tel. 425835', NULL, 6, 21, NULL, NULL),
	(18, 'Solicitud de Nueva Marca y/o Señal', 'Este trámite se te permite realizar la solicitud de una nueva marca y/o señal.', 'Dpto. de Guías Marcas y Señales - Pelegrini N°1', 'Lunes a Viernes de 07:00 a 13:00 hs.', 'Titular de la Marca y/o Señal. Tercero designado por el titular de la misma', NULL, NULL, 'Correo: guias@tresarroyos.gov.ar - Tel. 425835', NULL, 6, 21, NULL, NULL),
	(19, 'Solicitud de Renovación de Marca y/o Señal', 'Este trámite te permite renovar la Marca y/o Señal de la misma cumpliendo determinados requisitos.', 'Dpto. de Guías Marcas y Señales - Pelegrini N°1', 'Lunes a Viernes de 07:00 a 13:00 hs.', 'Titular de la Marca y/o Señal. Tercero designado por el titular de la misma', NULL, NULL, 'Correo: guias@tresarroyos.gov.ar - Tel. 425835', NULL, 6, 21, NULL, NULL),
	(20, 'Solicitud de Transferencia de Marca y/o Señal', 'Este trámite te permite solicitar la transferencia de la Marca y/o Señal.', 'Dpto. de Guías Marcas y Señales - Pelegrini N°1', 'Lunes a Viernes de 07:00 a 13:00 hs.', 'Titular de la Marca y/o Señal. Tercero designado por el titular de la misma', NULL, NULL, 'Correo: guias@tresarroyos.gov.ar - Tel. 425835', NULL, 6, 21, NULL, NULL),
	(21, 'Solicitud de Duplicado de Marca y/o Señal ', 'Este trámite te permite obtener el duplicado de la Marca y/o Señal.', 'Dpto. de Guías Marcas y Señales - Pelegrini N°1', 'Lunes a Viernes de 07:00 a 13:00 hs.', 'Titular de la Marca y/o Señal. Tercero designado por el titular de la misma', NULL, NULL, 'Correo: guias@tresarroyos.gov.ar - Tel. 425835', NULL, 6, 21, NULL, NULL),
	(22, 'Registro de Poderes Especiales ', 'Este trámite te permite obtener permisos especiales.', 'Dpto. de Guías Marcas y Señales - Pelegrini N°1', 'Lunes a Viernes de 07:00 a 13:00 hs.', 'Titular de la Marca y/o Señal. Tercero designado por el titular de la misma', NULL, NULL, 'Correo: guias@tresarroyos.gov.ar - Tel. 425835', NULL, 6, 21, NULL, NULL),
	(23, 'Registro de Prendas de Semovientes', 'Este trámite te permite registrar prendas Semovientes.', 'Dpto. de Guías Marcas y Señales - Pelegrini N°1', 'Lunes a Viernes de 07:00 a 13:00 hs.', 'Titular de la Marca y/o Señal. Tercero designado por el titular de la misma', NULL, NULL, 'Correo: guias@tresarroyos.gov.ar - Tel. 425835', NULL, 6, 21, NULL, NULL),
	(24, 'Solicitud de Rectificación de Marca y/o Señal', 'Este trámite te permite retificar la Marca y/o Señal.', 'Dpto. de Guías Marcas y Señales - Pelegrini N°1', 'Lunes a Viernes de 07:00 a 13:00 hs.', 'Titular de la Marca y/o Señal. Tercero designado por el titular de la misma', NULL, NULL, 'Correo: guias@tresarroyos.gov.ar - Tel. 425835', NULL, 6, 21, NULL, NULL),
	(25, 'Certificado de Libre Estacionamiento', 'Este trámite te permite solicitar libre estacionamiento en las zonas delimitas por el estacionamiento medido. Se otorga un solo permiso de libre Estacionamiento por el término de seis meses y para ser utilizado solo en la cuadra perteneciente al inmueble', 'Inspección General - Castelli Nº 675', 'Lunes a Viernes de 07:30 a 13:30 hs.', 'Titular del inmueble.', NULL, NULL, 'Correo: seguridad@tresa.mun.gba.gov.ar - Tel. 432102', NULL, 11, 10, NULL, NULL),
	(26, 'Exposiciones Civiles ', 'Este trámite te permite dejar constancia de situaciones tales como quejas por molestias de vecinales y accidentes sin verificación de lesionados en la vía pública. No corresponde las exposiciones civiles por robos, amenazas, hurtos, daño, lesiones, violaciones y todo otro tipo de delitos.', 'Oficina de Exposiciones Civiles- Castelli N° 745 ', 'Lunes a Viernes de 07:30 a 11:30 hs.', 'Las personas afectadas.', NULL, NULL, 'Correo: seguridad@tresa.mun.gba.gov.ar - Tel. 431555', NULL, 8, 10, NULL, NULL),
	(27, 'Libreta Sanitaria', 'Este trámite le permite al personal de fábricas y comercios de alimentación, choferes o titulares que transporte y manipulen sustancias, choferes afectados al trasnporte público. Vigencia de la libreta  1(un) año.', 'Inspección General - Castelli Nº 675', 'Lunes a Viernes de 07:30 a 13:00 hs.', 'El interesado', NULL, NULL, 'Correo: seguridad@tresa.mun.gba.gov.ar - Tel. 431555 ', NULL, 5, 10, NULL, NULL),
	(28, 'Obtener Licencia de Conducir', ' La Licencia Nacional de Conducir (LNC) es el documento otorgado por el Estado a los ciudadanos para poder manejar un vehículo, sea de forma profesional como particular.<br/>\r\nLa obtención de la Licencia Nacional de Conducir permite la conducción en todas las calles y caminos del territorio argentino, como así también en los países del extranjero que están suscriptos a la convención de Ginebra de 1949.<br/>', 'Secretaria de Seguridad - Castelli Nº 745', 'Lunes a Viernes de 08:00 a 13:30 hs.', 'El interesado.', NULL, NULL, 'Correo: licencia@tresarroyos.gov.ar - Tel. 431555/15449599.', NULL, 11, 10, NULL, NULL),
	(29, 'Duplicado de licencia de Conducir', 'Este trámite le permite obtener nuevamente su licencia en caso de extravío o robo', 'Secretaria de Seguridad - Castelli Nº 745', 'Lunes a Viernes de 08:00 a 13:30 hs.', 'El interesado.', NULL, NULL, 'Correo: licencia@tresarroyos.gov.ar - Tel. 431555/15449599 de 8:00 a 13:00 hrs.', NULL, 11, 10, NULL, NULL),
	(30, 'Modificación de datos ', 'El titular de la licencia de conductor deberá denunciar a la brevedad todo cambio de los datos consignados en ella. La licencia caduca a los 90 días de producido el cambio no denunciado.', 'Secretaria de Seguridad - Castelli Nº 745', 'Lunes a Viernes de 08:00 a 13:30 hs.', 'El titular.', NULL, NULL, 'Correo: licencia@tresarroyos.gov.ar - Tel. 431555/15449599 de 8:00 a 13:00 hrs.', NULL, 11, 10, NULL, NULL),
	(31, 'Registro de Motovehículo (Patente)', 'Este trámite te permite obtener la patente de tu motovehiculo.', 'Of. de Expociones Civiles - Castelli N° 745', 'Lunes a Viernes de 07:30 a 13:30 hs.', 'El titular del vehículo, o el mandatario y/o gestor con documentación correspondiente', NULL, NULL, 'Correo: seguridad@tresa.mun.gba.gov.ar - Tel. 431555', NULL, 9, 10, NULL, NULL),
	(32, 'Habilitación de Remis ', 'Este trámite te permite obtener la habilitación correspondiente para realizar el alta del servicio de remis como corresponde. Este demora aproximadamente de 30 a 45 días. Se puede iniciar provisoriamente el trámite de habilitación con Certificado de Antecedentes Penales que se tramita en la misma comisaría.', 'Oficina de Transporte - Castelli N° 745', 'Lunes a Viernes de 07:30 a 13:30 hs.', 'El titular del vehículo.', NULL, NULL, 'Correo: seguridad@tresa.mun.gba.gov.ar - Tel. 431555 ', NULL, 9, 10, NULL, NULL),
	(33, 'Cambio de Agencia de Remis', 'Este trámite te permite dar de alta un nuevo coche a la agencia, siempre y cuando alla sido dado de baja de la anterior prestación.', 'Oficina de Transporte - Castelli N° 745', 'Lunes a Viernes de 07:30 a 13:30 hs.', 'El propietario de la agencia.', NULL, NULL, 'Correo: seguridad@tresa.mun.gba.gov.ar - Tel. 431555', NULL, 9, 10, NULL, NULL),
	(34, 'Cese de la prestación de Servicios de Remis', 'Este trámite te permite obtener el cese del servicio de remis.', 'Oficina de Transporte - Castelli N° 745', 'Lunes a Viernes de 07:30 a 13:30 hs.', 'El propietario de la agencia.', NULL, NULL, 'Correo: seguridad@tresa.mun.gba.gov.ar - Tel. 431555', NULL, 9, 10, NULL, NULL),
	(35, 'Habilitaciones de Licencias de Taxis', 'Este trámite te permite habilitar la licencia de taxis.</br> Este demora aproximadamente de 30 a 45 días. Se puede iniciar provisoriamente el trámite de habilitación con Certificado de Antecedentes Penales que se tramita en la misma comisaría.', 'Oficina de Transporte - Castelli N° 745', 'Lunes a Viernes de 07:30 a 13:30 hs.', 'El titular del vehículo.', NULL, NULL, 'Correo: seguridad@tresa.mun.gba.gov.ar - Tel. 431555 ', NULL, 9, 10, NULL, NULL),
	(36, 'Cese de prestación de Servicios de Taxi', 'Este trámite te permite realizar el cese del servicio del mismo.', 'Oficina de Transporte - Castelli N° 745', 'Lunes a Viernes de 07:30 a 13:30 hs.', 'El titular del vehículo.', NULL, NULL, 'Correo: seguridad@tresa.mun.gba.gov.ar - Tel. 431555 ', NULL, 9, 10, NULL, NULL),
	(37, 'Habilitaciones de transporte Escolar', 'Este trámite te permite realizar la habilitación del Transporte escolar presentando la documentación requerida. Este demora aproximadamente de 30 a 45 días. Se puede iniciar provisoriamente el trámite de habilitación con Certificado de Antecedentes Penales que se tramita en la misma comisaría.', 'Oficina de Transporte - Castelli N° 745', 'Lunes a Viernes de 07:30 a 13:30 hs.', 'El titular del vehículo.', NULL, NULL, 'Correo: seguridad@tresa.mun.gba.gov.ar - Tel. 431555', NULL, 9, 10, NULL, NULL),
	(38, 'Cese de la Prestación de Servicio de Transporte Escolar', 'Este trámite te permite realizar el cese del servicio.', 'Oficina de Transporte - Castelli N° 745', 'Lunes a Viernes de 07:30 a 13:30 hs.', 'El titular del vehículo.', NULL, NULL, 'Correo: seguridad@tresa.mun.gba.gov.ar - Tel. 431555', NULL, 9, 10, NULL, NULL),
	(39, 'Habilitación de transporte contratado y/o excursiones', 'Este trámite te permite realizar la habilitación del transporte contratado y/o excursión.</br>Este trámite demora aproximadamente de 30 a 45 días. Se puede iniciar provisoriamente el trámite de habilitación con Certificado de Antecedentes Penales que se tramita en la misma comisaria. ', 'Oficina de Transporte - Castelli N° 745 ', 'Lunes a Viernes de 07:30 a 13:30 hs.', 'El titular del vehículo.', NULL, NULL, 'Correo: seguridad@tresa.mun.gba.gov.ar - Tel. 431555', NULL, 9, 10, NULL, NULL),
	(40, 'Ingresos Brutos', 'Este trámite te permite administrar los ingresos brutos de los pequeños contribuyentes.', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'El titular.', NULL, NULL, 'Correo: comercio@tresarroyos.gov.ar - industriaycomercio@tresarroyos.gov.ar - Tel. 439370/71/72', NULL, 5, 6, NULL, NULL),
	(41, 'Actualización de datos de Ingresos Brutos', 'Este trámite te permite actualizar los datos de el ingreso bruto asignado.', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'El titular.', NULL, NULL, 'Correo: comercio@tresarroyos.gov.ar - industriaycomercio@tresarroyos.gov.ar - Tel. 439370/71/72', NULL, 5, 6, NULL, NULL),
	(42, 'Libre de deuda de Automotor - Mod 1977 a 2002', 'Este trámite te permite obtener un libre de deuda de tu automotor  correspondientes a los modelos a partir de 1977 a 2002', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'El titular.', NULL, NULL, 'Correo: rodados@tresarroyos.gov.ar o automotores@tresarroyos.gov.ar - Tel. 439315 / 439312', NULL, 9, 6, NULL, NULL),
	(43, 'Baja de Automotor', 'Este trámite te permite realizar la baja del automotor para poder radicarlo en otro lugar.', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'El titular.', 'Datos solicitados: dni - nombre - email - telefono - calle - altura - piso - dpto - codigo postal - localidad - provincia - dominio - modelo.\r\nAdjuntar titulo del auto y denuncia de venta', NULL, 'Correo: rodados@tresarroyos.gov.ar o automotores@tresarroyos.gov.ar - Tel. 439315 / 439312', NULL, 9, 6, NULL, NULL),
	(44, 'Constancia de automotor exentos', 'Este trámite te permite solicitar la constancia de automotor exento de los modelos 77 a 89.', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'El titular del vehículo.', NULL, NULL, 'Correo: rodados@tresarroyos.gov.ar o automotores@tresarroyos.gov.ar - Tel. 439215 / 439212', NULL, 9, 6, NULL, NULL),
	(45, 'Modificación de ingreso bruto', 'Este trámite te permite cambiar el domicilio del cual fue registrado el ingreso.', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'El titular del vehículo.', NULL, NULL, 'Correo: comercio@tresarroyos.gov.ar - industriaycomercio@tresarroyos.gov.ar - Tel. 439370/71/72', NULL, 5, 6, NULL, NULL),
	(46, 'Bien de Familia', 'Este trámite te otorga el beneficio principal de la protección del inmueble, no pudiendo ser ejecutado por deudas que determina la ley.', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'El titular del inmueble.', NULL, NULL, 'Correo:biendefamilia@tresarroyos.gov.ar - Tel. 439223', NULL, 7, 6, NULL, NULL),
	(47, 'Información al Consumidor', 'Este trámite permite realizar denuncias a los consumidores que tiene diferencias con comercios de electrodomésticos, servicios (telefonía fija o celular, servicios de Internet, alarmas, televisión satelital o por cable, etc.), concesionarios de autos (0 km y en período de garantía, planes de ahorro), tarjeta de créditos, Instituciones Bancarias, pólizas de seguros, etc.', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'La persona afectada.', NULL, NULL, 'Correo:omic@tresarroyos.gov.ar - Tel. 439319', NULL, 8, 6, NULL, NULL),
	(48, 'Escrituración Social (Ley 10.830).-', 'Este trámite le permite obtener la escritura de su inmueble. La documentación a presentar depende del tipo de persona que es, ya sea persona juridica o persona fisica.', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 7:00 a 14:00 hs.', 'Cualquier persona mayor de edad.', NULL, NULL, 'Correo: escrituraciones@tresa.mun.gba.gov.ar - Tel. 439223', NULL, 7, 6, NULL, NULL),
	(49, 'Ley Alas', 'Exención del impuesto a los ingresos brutos para beneficiarios del monotributo social. Esta ley busca otorgar visibilidad y protección a los trabajadores, grupos y familias que se dediquen a la producción, comercialización e intercambios de bienes y servicios en el marco de la economía social.', 'Secretaría de Desarrollo Económico - Av. Rivadavia Nº 1', 'Lunes a Viernes de 8:00 a 13:00 hs.', 'El beneficiario del monotributo social.', NULL, NULL, 'Correo: desarrolloeconomico@tresarroyos.gov.ar - Tel. 439200 Int. 244  ', NULL, 5, 22, NULL, NULL),
	(50, 'Autorización de acreditación cuenta bancaria (Proveedores)', 'Si el Proveedor optara por la forma de pago mediante transferencia bancaria, deberá completar el formulario Nº 35 en el cual indicará la cuenta bancaria del beneficiario, donde deberán efectuarse los depósitos correspondientes a los pagos que le efectúe la Tesorería, a los efectos de que los mismos tengan poder cancelatorios de las deudas asumidas con dicho beneficiario por la Municipalidad de Tres Arroyos.</br>El mismo no deberá contener tachaduras, ni enmiendas y deberá ser legible.</br>La responsabilidad por la corrección de los datos contenidos en el formulario recae sobre el(los) firmante(s) con personería para efectuar la presentación.</br>También serán responsables los funcionarios bancarios firmantes de la certificación por la autenticidad de los datos contenidos en la misma. En el caso de surgir con posterioridad, alguna modificación en el contenido del presente formulario, o de decidir que no se efectúen transferencias a dicha cuenta bancaria, será del beneficiario la responsabilidad exclusiva de comunicar dicha situación, la cual solo podrá efectuarse  en la Tesorería de la Municipalidad de Tres Arroyos', 'Tesorería - Palacio Municipal', 'Lunes a Viernes de 7:30 a 13:00 hs.', 'El titular o persona autorizada.', NULL, NULL, 'Tel. 439239', NULL, 8, 23, NULL, NULL),
	(51, 'Inscripción en el reg. de beneficiario y poderes (Proveedores)', 'En caso de ser proveedor de la Municipalidad de Tres Arroyos, deberá inscribirse en el Registro de Beneficarios y Poderes de la Tesorería del Municipio, a efectos de poder proceder al cobro y, eventualmente , autorizar a otra(s) personas a retirar los cheques y a suscribir los  recibos de pago.', 'Tesorería - Palacio Municipal', 'Lunes a Viernes de 7:30 a 13:00 hs.', 'El titular o persona autorizada.', NULL, NULL, 'Tel. 439239', NULL, 8, 23, NULL, NULL),
	(52, 'COPETONAS - Castración', 'Este trámite permite la castración de perras, perros y gatas.', 'De. Municipal Copetonas - Av. San Martín 283', 'Lunes a viernes de 06:00 a 12:30 hs.', 'Cualquier persona.', NULL, NULL, 'Correo: delcopetonas@tresarroyos.gov.ar y delcopetonas@hotmail.com - Tel: 497039', NULL, 13, 24, NULL, NULL),
	(53, 'COPETONAS - Renovación de sepulturas y nichos, reducción ', 'Este trámite permite actualizar respecto a los nichos y sepulturas', 'De. Municipal Copetonas - Av. San Martín 283', 'Lunes a viernes de 06:00 a 12:30 hs.', 'Cualquier persona allegada al familiar', NULL, NULL, 'Correo: delcopetonas@tresarroyos.gov.ar - Tel: 497039', NULL, 4, 24, NULL, NULL),
	(54, 'COPETONAS - Incorporación a la mutual (IOMA)', 'Este trámite permite agilizar la incorporación. ', 'De. Municipal Copetonas - Av. San Martín 283', 'Lunes a viernes de 06:00 a 12:30 hs.', 'Cualquier persona.', NULL, NULL, 'Correo: delcopetonas@tresarroyos.gov.ar y delcopetonas@hotmail.com - Tel: 497039', NULL, 13, 24, NULL, NULL),
	(55, 'COPETONAS - Renovación IOMA', 'Este trámite permite la renovación de credenciales. ', 'De. Municipal Copetonas - Av. San Martín 283', 'Lunes a viernes de 06:00 a 12:30 hs.', 'Cualquier persona.', NULL, NULL, 'Correo: delcopetonas@tresarroyos.gov.ar y delcopetonas@hotmail.com - Tel: 497039', NULL, 13, 24, NULL, NULL),
	(56, 'COPETONAS - Senasa', 'Este trámite permite la confección y cierre de los DT-E.', 'De. Municipal Copetonas - Av. San Martín 283', 'Lunes a viernes de 07:00 a 13:00 hs.', 'Los productores autorizados para realizar dichos trámites.', NULL, NULL, 'Correo: delcopetonas@tresarroyos.gov.ar - Tel: 497039', NULL, 6, 24, NULL, NULL),
	(57, 'Renovación de Licencia de Conducir', 'Este trámite  le  permite renovar la licencia de conducir vencida.<br/>\r\nTiene hasta 90 días posteriores al vencimiento para renovar su licencia, pero NO PARA CONDUCIR.  No existe ningún tipo de constancia que lo habilite.<br/>\r\nPasado este tiempo deberá iniciar el trámite de obtención de licencia de conducir como original y rendir los exámenes teórico/ práctico.<br/><br/>', 'Secretaria de Seguridad - Castelli Nº 745', 'Lunes a Viernes de 08:00 a 13:30 hs.', 'El interesado.', NULL, NULL, 'Correo: licencia@tresarroyos.gov.ar - Tel. 431555/15449599', NULL, 11, 10, NULL, NULL),
	(58, 'Programa de Educación Vial', 'El programa integral de Educación Vial se implementa tanto en escuelas como en empresas del Partido.</br>El programa se compone de dos secciones una teórica en la cual se reseñan las normas y señales viales vigentes y la proyección de un video explicativo, luego de esto se pasa a la parte  práctica en la cual los escolares transitan por el parquecito vial de la Dirección de Tránsito pensado para tal fin en triciclo o en bicicleta según la edad del educando donde se aplica lo asimilado.  También se brindan a empresas del Partido de Tres Arroyos que las  soliciten. ', 'Secretaria de Seguridad - Castelli N° 745', 'Lunes a Viernes de 07:30 a 13:30 hs.', 'El interesado.', NULL, NULL, 'Correo: seguridad@tresa.mun.gba.gov.ar - Tel. 431555 ', NULL, 11, 10, NULL, NULL),
	(59, 'Autorización de Rifas, Bailes, circos y espectáculos públicos en general', 'Mediante este trámite se obtiene la autorización para la venta de rifas y la realización de bailes, circos y espectáculos públicos en general.', 'Mesa de Entradas - Av Rivadavia Nro. 1', 'Lunes a Viernes de 07:30 a 13:30 hs.', 'El interesado.', NULL, NULL, 'Correo: seguridad@tresa.mun.gba.gov.ar - Tel. 431555', NULL, 8, 4, NULL, NULL),
	(60, 'Autorización de Afiches, volantes y murales', 'Mediante este trámite se obtiene la autorización para la utilización y/o colocación de afiches, volantes y murales', 'Oficina de Transporte - Castelli N° 745', 'Lunes a Viernes de 07:30 a 13:00 hs.', 'El interesado.', NULL, NULL, 'Correo: seguridad@tresa.mun.gba.gov.ar - Tel. 431555', NULL, 5, 10, NULL, NULL),
	(61, 'Habilitacion de Comercios e Industrias', 'Este Trámite permite obtener la habilitación para un comercio o una industria', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'El interesado.', NULL, NULL, 'Correo: comercio@tresarroyos.gov.ar - industriaycomercio@tresarroyos.gov.ar - Tel. 439370/71/72', NULL, 5, 6, NULL, NULL),
	(62, 'Cese de actividades', 'Mediante este tramite se informa el cese de actividades de un comercio o industria', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'El interesado.', NULL, NULL, 'Correo: comercio@tresarroyos.gov.ar - industriaycomercio@tresarroyos.gov.ar - Tel. 439370/71/72', NULL, 5, 6, NULL, NULL),
	(63, 'Presentación de Planos de Construcción', 'Este Trámite es obligatorio para todas aquellas personas que deseen realizar una construcción/ ampliación / demolición de una propiedad. La presentación debe ser previa a la ejecución de la obra.', 'Oficina de Obras Particulares - Castelli Nro. 615', 'Lunes a Viernes de 07:30 a 13:30 hs.', 'El profesional designado', NULL, NULL, 'Correo: obrasparticulares_tsas@hotmail.com - Tel. 433168 int 128', NULL, 7, 25, NULL, NULL),
	(64, 'Presentación de Planos de Incoporación', 'Este Trámite consiste en declarar una obra de construcción ya consumada, sin la debida autorización municipal.', 'Oficina de Obras Particulares - Castelli Nro. 615', 'Lunes a Viernes de 07:30 a 13:30 hs.', 'El profesional designado', NULL, NULL, 'Correo: Obrasparticulares_tsas@hotmail.com - Tel. 433168 int 128', NULL, 7, 25, NULL, NULL),
	(65, 'Presentación de Planos de final de Obra', 'Esta trámite es obligatorio para todas aquellas personas que hayan ejecutado una obraaprobada por la municipalidad', 'Oficina de Obras Particulares - Castelli Nro. 615', 'Lunes a Viernes de 07:30 a 13:30 hs.', 'El profesional designado', NULL, NULL, 'Correo: Obrasparticulares_tsas@hotmail.com - Tel. 433168 int 128', NULL, 7, 25, NULL, NULL),
	(66, 'Solicitud de planos gratuitos según ordenanza  5232/03', 'Este trámite le permite a las familias de escasos recursos que reúnan los requisitos establecidos en la ordenanza mencionda, acceder en forma gratuita a los planos para la construcción de su vivienda única, económica, de uso permanente y familiar. ', 'Oficina de Obras Particulares - Castelli Nro. 615', 'Lunes a Viernes de 07:30 a 13:30 hs.', 'El interesado', NULL, NULL, 'Correo: Obrasparticulares_tsas@hotmail.com - Tel. 433168 int 128', NULL, 7, 25, NULL, NULL),
	(67, 'Solicitud de planos de ampliación Plan Federal', 'Este trámite permite a los beneficiarios del plan federal obtener planos para la ampliación de su vivienda familiar según ordenanza 5729/07.', 'Oficina de Obras Particulares - Castelli Nro. 615', 'Lunes a Viernes de 07:30 a 13:30 hs.', 'El adjudicatario de la vivienda', NULL, NULL, 'Correo: Obrasparticulares_tsas@hotmail.com - Tel. 433168 int 128', NULL, 7, 25, NULL, NULL),
	(68, 'Solicitud de planos de antecedentes', 'Este trámite consiste en solicitar la vista de un plano del archivo municipal o bien retirarlo temporalmente en calidad de préstamo.', 'Oficina de Obras Particulares - castelli Nro. 615', 'Lunes a Viernes de 07:30 a 13:30 hs.', 'El interesado', NULL, NULL, 'Correo: Obrasparticulares_tsas@hotmail.com - Tel. 433168 int 128', NULL, 7, 25, NULL, NULL),
	(69, 'Solicitud de Certificados Urbanísticos', 'En el certificado urbanístico el municipio informa oficialmente los datos concretos de una parcela determinada (propietarios, superficie, nomenclatura catastral, ubicación, restricciones urbanísticas, usos, etc).', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'El interesado', ' Datos solicitados: DNI - nombre - email - teléfono - nombre del propietario - domicilio - código postal - localidad - teléfono del propietario - destino de la parcela (vivienda - comercio - industria) - finalidad del certificado (pre factibilidad presentación de plano ampliación - pre factibilidad presentación de plano incorporación - pre factibilidad presentación de plano demolición) - tipo (inmueble - comercio) - numero - info. imponible adicional.', '$2960', 'Correo: Obrasparticulares_tsas@hotmail.com - Tel. 433168 int 128', NULL, 7, 6, NULL, NULL),
	(70, 'Solicitud del medidor de obra', 'Usualmente llamado “chimango”, es el medidor provisorio de obra que provee la energía eléctrica necesaria para el desarrollo de la obra.', 'Oficina de Obras Particulares - castelli Nro. 615', 'Lunes a Viernes de 07:30 a 13:30 hs.', 'El profesional a cargo de la obra o el propietario', NULL, NULL, 'Correo: Obrasparticulares_tsas@hotmail.com - Tel. 433168 int 128', NULL, 7, 25, NULL, NULL),
	(71, 'Consulta de deuda, actualización de cuotas vencidas o certificado de libre de deuda', 'Mediante este trámite se puede realizar consulta de deuda de una partida, actualizar cuotas vencidas u obtener el certificado de libre de deuda', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'Cualquier persona', NULL, NULL, 'Correo: reclamos@tresarroyos.gov.ar - Tel. 439310- 439314', NULL, 10, 6, NULL, NULL),
	(72, 'Cambio de domicilio fiscal', 'Este trámite permite realizar el cambio del domicilio fiscal de una partida', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'El interesado', 'Datos solicitados: Dni - Nombre - email - teléfono - calle-altura-piso-dpto - codigo postal - localidad - provincia - imponible - dato adicional. \r\nAdjuntar escritura.', NULL, 'Correo: reclamos@tresarroyos.gov.ar - Tel. 439314 ', NULL, 10, 6, NULL, NULL),
	(73, 'Planes de Regularización de Deudas', 'Este trámite permite al interesado realizar un plan de regularización de deuda de una partida', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'El interesado', NULL, NULL, 'Correo: reclamos@tresarroyos.gov.ar - Tel. 439310-439314', NULL, 10, 6, NULL, NULL),
	(74, 'Eximición de la Tasa por Servicios ', 'Mediante este trámite se obtiene la eximición de la tasa por servicios urbanos', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'El interesado', 'Datos solicitados: Calle - altura - localidad - edad - remuneración - imponible.\r\nPresentar grupo familiar: DNI - constancia de cuit - escritura de la casa - recibo de sueldo - certificado de incapacidad si posee - titulo del auto - historial de consumo de luz - no debe tener deuda en sanitarios', NULL, 'Correo: reclamos@tresarroyos.gov.ar - Tel. 439310-439314', NULL, 10, 6, NULL, NULL),
	(75, 'Permiso de poda', 'Este trámite permite obtener el permiso para poder realizar la poda y/o extracción de los árboles que están en la vía pública.</br>TAMBIEN PUEDE SER REALIZADO EN LAS DELEGACIONES.', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'El interesado', NULL, NULL, 'Correo: reclamos@tresarroyos.gov.ar - Tel. 439302/303', NULL, 8, 6, NULL, NULL),
	(76, 'Inscripción de profesionales', 'Este trámite les permite a los profesionales del sector inscribirse para trabajar en el partido de Tres Arroyos.', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'El profesional', NULL, NULL, 'Correo: Obrasparticulares_tsas@hotmail.com - Tel. 433168 int 128', NULL, 7, 6, NULL, NULL),
	(77, 'Certificado Único de Discapacidad (CUD)', 'Mediante este trámite se puede obtener el Certificado Único de Discapacidad (CUD)', 'Secretaria de desarrollo social  - Domingo Vazquez', 'Lunes a Viernes de 08:00 a 12:00 hs.', 'El interesado', NULL, NULL, '430470/426475', NULL, 1, 2, NULL, NULL),
	(78, 'Certificación o numeración de edificios', 'Este trámite te permite realizar la verificación del edificio geográficamente mediante una certificación entregada por el Departamento de Catastro.', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'El interesado', NULL, NULL, 'Correo: catastro@tresarroyos.gov.ar - Tel. 433168 int 128', NULL, 7, 6, NULL, NULL),
	(79, 'Libreta Sanitaria', 'Este trámite le permite al personal de fábricas y comercios de alimentación, choferes o titulares que transporte y manipulen sustancias, choferes afectados al trasnporte público. Vigencia de la libreta  1(un) año.', 'Inspección General - Castelli Nº 675', 'Lunes a Viernes de 07:30 a 13:00 hs.', 'El interesado', NULL, NULL, 'Correo: seguridad@tresa.mun.gba.gov.ar - Tel. 431555 ', NULL, NULL, 10, NULL, NULL),
	(80, 'Registro de Camiones para transporte de Hacienda', 'Este trámite es para realizar el registro de inscripción del número de habilitación según Ley 10.891 Art. 10.', 'Dpto. de Guías Marcas y Señales - Pelegrini N°1', 'Lunes a Viernes de 07:00 a 13:00 hs.', 'Titular del transporte.', NULL, NULL, 'Correo: guias@tresarroyos.gov.ar - Tel. 425835', NULL, 6, 21, NULL, NULL),
	(81, 'Registro Inicio Trámite Boleto', 'Este trámite es para todo aquel que inicia un trámite de inscripción y/o renovación de una marca o señal.', 'Dpto. de Guías Marcas y Señales - Pelegrini N°1', 'Lunes a Viernes de 07:00 a 13:00 hs.', 'Titular de la Marca y/o Señal. Tercero designado por el titular de la misma', NULL, NULL, 'Correo: guias@tresarroyos.gov.ar - Tel. 425835', NULL, 6, 21, NULL, NULL),
	(82, 'Alta de Automotor', 'Este trámite te permite realizar la alta del automotor.', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'El titular.', 'Datos solicitados: dni - nombre - email - telefono - calle - altura - piso - dpto - codigo postal - localidad - provincia - dominio - modelo.\r\nAdjuntar titulo del auto.', NULL, 'Correo: rodados@tresarroyos.gov.ar o automotores@tresarroyos.gov.ar - Tel. 439315 / 439312', NULL, 9, 6, NULL, NULL),
	(83, 'Cambio de titular del automotor', 'Este trámite te permite realizar el cambio de titular.', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'El titular.', 'Datos solicitados: dni - nombre - email - telefono - calle - altura - piso - dpto - codigo postal - localidad - provincia - dominio - modelo.\r\nAdjuntar titulo del auto.', NULL, 'Correo: rodados@tresarroyos.gov.ar o automotores@tresarroyos.gov.ar - Tel. 439315 / 439312', NULL, 9, 6, NULL, NULL),
	(84, 'Trámite R545', NULL, 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'El titular.', 'Datos solicitados: dni - nombre - email - telefono - calle - altura - piso - dpto - codigo postal - localidad - provincia - dominio - modelo.\r\nAdjuntar titulo del auto.', '2 estampillas verdes', 'Correo: rodados@tresarroyos.gov.ar o automotores@tresarroyos.gov.ar - Tel. 439315 / 439312', NULL, 9, 6, NULL, NULL),
	(85, 'Solicitud de plancheta paso 1', NULL, 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', '', 'Datos solicitados: DNI - Nombre - email - teléfono - nomenclatura catastral - calle1- calle2 - calle3 - calle4 - localidad - ubicación(Ts.As. - Claromecó - Cascallares - Orense - Copetonas - San Francisco - Reta) info. adicional.', 'Costo en papel 6 verdes y digital 4 verdes', 'Correo:reclamos@tresarroyos.gov.ar - Tel. 439310/314', NULL, 7, 6, NULL, NULL),
	(86, 'Solicitud de plancheta paso 2', NULL, 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', '', 'Datos solicitados: DNI - Nombre - email - teléfono - tipo (inmueble - comercio - contribuyente) numero - info. adicional.', 'Costo en papel 9 verdes y digital 6 verdes', 'Correo:reclamos@tresarroyos.gov.ar - Tel. 439310/314', NULL, 7, 6, NULL, NULL),
	(87, 'Débitos automáticos (Alta, Baja, Modificación)', '', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', '', 'Datos solicitados:  DNI - nombre - email - teléfono- domicilio - tasa (urbanos - sanitarios - vial) - imponible.\r\nAdjuntar CBU y DNI del titular.\r\n', NULL, 'Correo: reclamos@tresarroyos.gov.ar - Tel. 439310-439314', NULL, 10, 6, NULL, NULL);
/*!40000 ALTER TABLE `tramite_guia` ENABLE KEYS */;

-- Volcando estructura para tabla municipalidad.tramite_tipo
DROP TABLE IF EXISTS `tramite_tipo`;
CREATE TABLE IF NOT EXISTS `tramite_tipo` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tipo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icono` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Volcando datos para la tabla municipalidad.tramite_tipo: ~13 rows (aproximadamente)
/*!40000 ALTER TABLE `tramite_tipo` DISABLE KEYS */;
INSERT INTO `tramite_tipo` (`id`, `tipo`, `icono`, `created_at`, `updated_at`) VALUES
	(1, 'Accion social', 'bi bi-person-arms-up', '2023-11-28 11:25:10', NULL),
	(2, 'Aguas-cloacas', 'bi bi-droplet-half', '2023-11-28 11:25:10', NULL),
	(3, 'Bromatologia', 'bi bi-egg-fried', '2023-11-28 11:25:10', NULL),
	(4, 'Cementerio', 'fas fa-cross', '2023-11-28 11:25:10', NULL),
	(5, 'Comercios', 'bi bi-shop', '2023-11-28 11:25:10', NULL),
	(6, 'Guias', 'bi bi-signal', '2023-11-28 11:25:10', NULL),
	(7, 'Obras-Inmuebles', 'bi bi-buildings-fill', '2023-11-28 11:25:10', NULL),
	(8, 'Proveedores', 'bi bi-truck', '2023-11-28 11:25:10', NULL),
	(9, 'Rodados', 'bi bi-car-front-fill', '2023-11-28 11:25:10', NULL),
	(10, 'Tasas', 'bi bi-calculator-fill', '2023-11-28 11:25:10', NULL),
	(11, 'Transito', 'bi bi-sign-intersection-t', '2023-11-28 11:25:10', NULL),
	(12, 'Vecinos', 'fa fa-people-arrows', '2023-11-28 11:25:10', NULL),
	(13, 'Otros', 'bi bi-question-square-fill', '2023-11-28 11:25:10', NULL);
/*!40000 ALTER TABLE `tramite_tipo` ENABLE KEYS */;

-- Volcando estructura para tabla municipalidad.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol` enum('Admin','Member','SuperAdmin') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Member',
  `apellido` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Volcando datos para la tabla municipalidad.users: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `password`, `rol`, `apellido`, `nombre`, `email`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, '$2y$10$Rq4cLhZzT16knATAhsppt.ZtrjRzC/CJQqJu/cpfmIULl9gJFJYCi', 'Member', NULL, NULL, 'martinl@tresarroyos.gov.ar', NULL, NULL, '2024-02-15 16:26:01', '2024-02-15 16:26:01');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Volcando estructura para tabla municipalidad.usuario_tadi
DROP TABLE IF EXISTS `usuario_tadi`;
CREATE TABLE IF NOT EXISTS `usuario_tadi` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `apellido` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `domicilio` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nro_tramite` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `genero` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contrasenia` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Volcando datos para la tabla municipalidad.usuario_tadi: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario_tadi` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario_tadi` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
