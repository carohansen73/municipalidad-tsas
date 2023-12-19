-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 19-12-2023 a las 11:25:57
-- Versión del servidor: 5.7.33
-- Versión de PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `municipalidad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`id`, `nombre`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Computos', NULL, '2023-11-28 14:25:10', NULL),
(2, 'Desarrollo social', NULL, '2023-11-28 14:25:17', NULL),
(3, 'Gestion ambiental', 'gestionambiental@tresarroyos.gov.ar', '2023-11-28 14:25:21', NULL),
(4, 'Mesa de entrada', NULL, '2023-11-28 14:25:23', NULL),
(5, 'Obras publicas', 'serviciospublicos@tresarroyos.gov.ar', '2023-11-28 14:25:26', NULL),
(6, 'Politicas tributarias', 'reclamos@tresarroyos.gov.ar', '2023-11-28 14:25:28', NULL),
(7, 'Prensa', 'prensa.hcd@tresarroyos.gov.ar', '2023-11-28 14:25:31', NULL),
(8, 'Produccion', NULL, '2023-11-28 14:25:33', NULL),
(9, 'Salud y prevencion', NULL, '2023-11-28 14:25:35', NULL),
(10, 'Seguridad', 'seguridad@tresarroyos.gov.ar', '2023-11-28 14:25:37', NULL),
(11, 'Secretaria de gobierno', NULL, '2023-11-28 14:25:40', NULL),
(12, 'Secretaría de hacienda', NULL, '2023-11-28 14:25:42', NULL),
(13, 'Obras sanitarias', 'sanitarias@tresarroyos.gov.ar', NULL, NULL),
(14, 'zoonosis', NULL, NULL, NULL),
(15, 'Bromatologia', 'bromatologia@tresarroyos.gov.ar', NULL, NULL),
(16, 'Cultura', 'cultura@tresarroyos.gov.ar', '2023-12-05 14:56:13', NULL),
(17, 'Turismo', 'turismo@tresarroyos.gov.ar', '2023-12-05 14:56:13', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reclamo`
--

CREATE TABLE `reclamo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tema_id` bigint(20) NOT NULL,
  `localidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `estado` enum('IN','EP','CS','CN') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'IN',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `reclamo`
--

INSERT INTO `reclamo` (`id`, `titulo`, `descripcion`, `tema_id`, `localidad`, `usuario_id`, `admin_id`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'falta de agua', 'decremento en el caudal de agua en castelli 1200', 5, 'Tres Arroyos', NULL, NULL, 'IN', '2023-12-05 16:12:32', '2023-12-05 16:12:32'),
(2, 'problemas con la iluminaria', 'Poca iluminación en la calle 23 al 2000', 5, 'copetonas', NULL, NULL, 'IN', '2023-12-05 16:15:42', '2023-12-05 16:15:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reclamo_tema`
--

CREATE TABLE `reclamo_tema` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `area_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reclamo_tema`
--

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion_menu`
--

CREATE TABLE `seccion_menu` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `abreviatura` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `seccion_menu`
--

INSERT INTO `seccion_menu` (`id`, `nombre`, `abreviatura`) VALUES
(1, 'Municipio', 'Municipio'),
(2, 'Atencion-al-vecino', 'Vecino'),
(3, 'Ciudad-productiva', 'Producción'),
(4, 'Cultura-y-educacion', 'Cultura y educación'),
(5, 'Turismo', 'Turismo'),
(6, 'Deportes', 'Deportes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion_pagina`
--

CREATE TABLE `seccion_pagina` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `pertenece_a` varchar(100) NOT NULL,
  `portada` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `seccion_pagina`
--

INSERT INTO `seccion_pagina` (`id`, `nombre`, `pertenece_a`, `portada`) VALUES
(1, 'Transparencia fiscal', 'Municipio', 'localidades.jpg'),
(2, 'Boletin oficial', 'Municipio', 'deportes.jpg'),
(3, 'Planeamiento urbano', 'Municipio', 'salud.jpg'),
(4, 'Desarrollo económico', 'Municipio', 'educacion.jpg'),
(5, 'Educacion', 'Municipio', 'educacion.jpg'),
(6, 'Salud', '1', 'salud.png'),
(7, 'Deportes', 'Municipio', 'deportes.jpg'),
(8, 'Organigrama', '1', 'organigrama.png'),
(9, 'Localidades', 'Municipio', 'localidades.jpg'),
(10, 'Entes descentralizados', 'Municipio', 'salud.jpg'),
(11, 'Gestion ambiental', 'Municipio', 'educacion.jpg'),
(12, 'Bromatologia', 'Municipio', 'deportes.jpg'),
(13, 'Guía de trámites', 'Trámites y servicios', 'localidades.jpg'),
(14, 'Portal tributario', 'Trámites y servicios', 'salud.jpg'),
(15, 'Interes ciudadano', 'Trámites y servicios', 'educacion.jpg'),
(18, 'La ciudad', '1', 'la-ciudad.png'),
(19, 'HCD', '1', 'hcd.png'),
(20, 'Ente Vial', '1', 'ente-vial.png'),
(21, 'Fiesta Provincial del Trigo', '1', 'fdt.png'),
(22, 'Planeamiento Urbano', '1', 'planeamiento-urbano.png'),
(24, 'Museos', '4', 'museos.png'),
(25, 'Teatro', '4', 'teatro.png'),
(26, 'Bibliotecas', '4', 'bibliotecas.png'),
(27, 'Conservatorio Municipal de Música', '4', 'conservatorio.png'),
(28, 'Centro Cultural La Estación', '4', 'cce.png'),
(29, 'Ballet Municipal', '4', 'ballet.png'),
(30, 'Colectividades', '4', 'colectividades.png'),
(31, 'Guia de Trámites', '2', 'ente-vial.png'),
(32, 'Servicios', '2', 'ente-vial.png'),
(33, 'Gestión Ambiental', '2', 'ente-vial.png'),
(34, 'Bromatologia', '2', 'ente-vial.png'),
(35, 'Mascotas', '2', 'ente-vial.png'),
(36, 'Discapacidad', '2', 'ente-vial.png'),
(37, 'Niñez', '2', 'ente-vial.png'),
(38, 'Género', '2', 'ente-vial.png'),
(39, 'Parque industrial', '3', 'hcd.png'),
(40, 'Prodesta', '3', 'hcd.png'),
(41, 'Centros de Capacitación', '3', 'hcd.png'),
(42, 'Emprendedores', '3', 'hcd.png'),
(43, 'Comercios', '3', 'hcd.png'),
(44, 'POLIDEPORTIVO', '6', 'la-ciudad.png'),
(45, 'CLUBES', '6', 'la-ciudad.png'),
(46, 'POLIDEPORTIVO', '6', 'la-ciudad.png'),
(47, 'CLUBES', '6', 'la-ciudad.png'),
(48, 'CRESTA', '4', 'fdt.png'),
(49, 'CENTRO DE FORMACION PROFESIONAL', '4', 'fdt.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tramite_guia`
--

CREATE TABLE `tramite_guia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci,
  `lugar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `horario` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quien` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requisitos` text COLLATE utf8mb4_unicode_ci,
  `costo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contacto` text COLLATE utf8mb4_unicode_ci,
  `links` text COLLATE utf8mb4_unicode_ci,
  `tipo_id` bigint(20) UNSIGNED DEFAULT NULL,
  `area_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tramite_guia`
--

INSERT INTO `tramite_guia` (`id`, `titulo`, `descripcion`, `lugar`, `horario`, `quien`, `requisitos`, `costo`, `contacto`, `links`, `tipo_id`, `area_id`, `created_at`, `updated_at`) VALUES
(1, 'Conexion de Agua', 'Este trámite permite la conexión de agua en lugares donde la red se encuentra en servicio.', 'Oficina administrativa de Obras Sanitarias - Castelli 625', 'Lunes a Viernes de 6:30 a 13:30 hs.', 'Cualquier persona', NULL, NULL, 'Correo: sanitariasreclamos@tresarroyos.gov.ar - Tel. (02983) 432550', NULL, 2, 3, NULL, NULL),
(2, 'Conexión de Cloaca', 'Este trámite permite la conexión de cloaca en lugares donde la red se encuentra en servicio.', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 6:30 a 13:30 hs.', 'Cualquier persona', NULL, NULL, 'Correo: sanitariasreclamos@tresarroyos.gov.ar - Tel. (02983) 432550', NULL, 2, 3, NULL, NULL),
(3, 'Renovación de Sepulturas u otros', 'Este trámite permite renovar y/o mantener la ocupacion del espacio dentro del Cementerio Municipal. ', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 7:00 a 14:00 en <b>Políticas Tributarias.</b><br/> Y de Lunes a Viernes de 7:00 a 14:00 y Sábados, Domingos y Feriados de 8 a 12 hs en el <b>Cementerio</b>.', 'Contribuyente responsable y /o familiar de la persona fallecida', NULL, NULL, 'Correo: reclamos@tresarroyos.gov.ar - Tel. 439302-439303-439301', NULL, 4, 3, NULL, NULL),
(4, 'Inscripción de Proveedor', 'Este trámite permite realizar la inscripción como proveedor.', 'Dpto de Compras y Suministros - Palacio Municipal', 'Lunes a Viernes de 07.30 a 13:00 hs. ', 'Por el interesado, un tercero o por correo postal para quien se encuentre fuera de la ciudad', NULL, NULL, 'Correo: compras@tresa.mun.gba.gov.ar - Tel. 439229 o 439230', NULL, 12, 1, NULL, NULL),
(5, 'Cambio de Titularidad de un inmueble', 'Este trámite nos permite cambiar la tituralidad de un inmueble.', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'Puede solicitarlo personalmente por el titular del bien o un tercero', NULL, NULL, 'Correo:reclamos@tresarroyos.gov.ar - Tel. 439310/314', NULL, 1, 1, NULL, NULL),
(6, 'Declaracion Jurada de PH', 'Este trámite se realiza para casos en los cuales los titulares del inmueble deben incorporar Superficie en U. Funcionales por sometimiento al régmien de la Ley N° 13512 (Propiedad Horizontal).', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'Por el titular del bien.', NULL, NULL, 'Correo:catastro@tresarroyos.gov.ar - Tel. 439250', NULL, 1, 1, NULL, NULL),
(7, 'Apertura o Subdivisión de Partidas', 'Este trámite te permite crear una partida.</br>A partir de la de la tercera partida en dar de alta se deberá pagar un sellado por cada una en Tesoreria Municipal.', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'Por el titular del bien o Escribanos mediante nota presentada en Mesa de Entradas', NULL, NULL, 'Correo:catastro@tresarroyos.gov.ar - Tel. 439250', NULL, 1, 1, NULL, NULL),
(8, 'Certificación de Línea Municipal para presentar ante CAMUZZI', 'Este trámite te premite realizar la verificación de la línea Municipal para poder realizar el trámite ante CAMUZZI GAS PAMPEANA. ', 'Departamento de Catastro - Castelli 615', 'Lunes a Viernes de 07:30 a 13:00 hs.', 'Por el titular del bien.', NULL, NULL, 'Correo:catastro@tresarroyos.gov.ar - Tel. 439250', NULL, 1, 1, NULL, NULL),
(9, 'Liquidación de Derechos 2018', 'Este trámite es para realizar la subdivisión de Chacras, fracción, manzana o parcela,  ', 'Departamento de Catastro - Palacio Municipal', 'Lunes a Viernes de 07:30 a 13:00 hs.', 'Por el titular.', NULL, NULL, 'Correo:catastro@tresarroyos.gov.ar - Tel. 439250', NULL, 1, 1, NULL, NULL),
(10, 'Consultas Catastrales 2018', 'Es trámite te permite realizar consulta de cedula catastral, deuda catastral, plano Mesura y/o Subdivisión, y plano como complemento de información de cedula catastro.', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'Segun el tipo de consulta puede realizarlo profesional, titular o particular', NULL, NULL, 'Correo:catastro@tresarroyos.gov.ar - Tel. 433168 Int. 128', NULL, 1, 1, NULL, NULL),
(11, 'Guías de Traslado de Ganado Mayor y Menor', 'Este trámite es para poder realizar Venta Invernada, Venta a Frigorificos fuera del partido y locales. ', 'Dpto. de Guías Marcas y Señales - Pelegrini N°1', 'Lunes a Viernes de 07:00 a 13:00 hs.', 'Titular de la Marca y/o Señal. Tercero designado por el titular de la misma', NULL, NULL, 'Correo: guias@tresarroyos.gov.ar - Tel. 425835', NULL, 6, 1, NULL, NULL),
(12, 'Guías de Traslado a sí mismo', 'Este trámite permite el traslado de hacienda que realiza el productor de un partido y/o provincia a otro/a, no reviste caracter de venta.', 'Dpto. de Guías Marcas y Señales - Pelegrini N°1', 'Lunes a Viernes de 07:00 a 13:00 hs.', 'Titular de la Marca y/o Señal. Tercero designado por el titular de la misma', NULL, NULL, 'Correo: guias@tresarroyos.gov.ar - Tel. 425835', NULL, 6, 1, NULL, NULL),
(13, 'Certificados de Adquisición de Ganado Mayor y Menor', 'Este trámite nos permite obtener el certificado de adquisición.', 'Dpto. de Guías Marcas y Señales - Pelegrini N°1', 'Lunes a Viernes de 07:00 a 13:00 hs.', 'Titular de la Marca y/o Señal. Tercero designado por el titular de la misma', NULL, NULL, 'Correo: guias@tresarroyos.gov.ar - Tel. 425835', NULL, 6, 1, NULL, NULL),
(14, 'Permisos de Marca', 'Este trámite nos permite obtener la declaración del destete de ganado mayor - vacunos y equinos - antes del año del animal. Según disposicion del Ministerio de Asuntos Agrarios - Dpto. Registro Ganadero - el productor debe realizar 2 (dos) Permisos de Marcas al año como máximo. La cantidad de animales que se declaren en cada permiso dependerá de la cantidad de vacas y/o vaquillonas (madres) declaradas oportunamente en el stock ganadero de cada productor.', 'Dpto. de Guías Marcas y Señales - Pelegrini N°1', 'Lunes a Viernes de 07:00 a 13:00 hs.', 'Titular de la Marca y/o Señal. Tercero designado por el titular de la misma', NULL, NULL, 'Correo: guias@tresarroyos.gov.ar - Tel. 425835', NULL, 6, 1, NULL, NULL),
(15, 'Permisos de Señal', 'Este trámite nos permite obtener la declaración del destete de ganado menor - lanares y porcinos - antes de los 6 (seis) meses del animal.', 'Dpto. de Guías Marcas y Señales - Pelegrini N°1', 'Lunes a Viernes de 07:00 a 13:00 hs.', 'Titular de la Marca y/o Señal. Tercero designado por el titular de la misma', NULL, NULL, 'Correo: guias@tresarroyos.gov.ar - Tel. 425835', NULL, 6, 1, NULL, NULL),
(16, 'Archivos de Guías ', 'Este trámite nos permite realizar el ingreso de hacienda de ganado mayor y/o menor de otro partido.', 'Dpto. de Guías Marcas y Señales - Pelegrini N°1', 'Lunes a Viernes de 07:00 a 13:00 hs.', 'Titular de la Marca y/o Señal. Tercero designado por el titular de la misma', NULL, NULL, 'Correo: guias@tresarroyos.gov.ar - Tel. 425835', NULL, 6, 1, NULL, NULL),
(17, 'Reducción a Marca Propia', 'Este trámite se realiza cuando el productor compra ganado mayor y pone su marca.', 'Dpto. de Guías Marcas y Señales - Pelegrini N°1', 'Lunes a Viernes de 07:00 a 13:00 hs.', 'Titular de la Marca y/o Señal. Tercero designado por el titular de la misma', NULL, NULL, 'Correo: guias@tresarroyos.gov.ar - Tel. 425835', NULL, 6, 1, NULL, NULL),
(18, 'Solicitud de Nueva Marca y/o Señal', 'Este trámite se te permite realizar la solicitud de una nueva marca y/o señal.', 'Dpto. de Guías Marcas y Señales - Pelegrini N°1', 'Lunes a Viernes de 07:00 a 13:00 hs.', 'Titular de la Marca y/o Señal. Tercero designado por el titular de la misma', NULL, NULL, 'Correo: guias@tresarroyos.gov.ar - Tel. 425835', NULL, 6, 1, NULL, NULL),
(19, 'Solicitud de Renovación de Marca y/o Señal', 'Este trámite te permite renovar la Marca y/o Señal de la misma cumpliendo determinados requisitos.', 'Dpto. de Guías Marcas y Señales - Pelegrini N°1', 'Lunes a Viernes de 07:00 a 13:00 hs.', 'Titular de la Marca y/o Señal. Tercero designado por el titular de la misma', NULL, NULL, 'Correo: guias@tresarroyos.gov.ar - Tel. 425835', NULL, 6, 1, NULL, NULL),
(20, 'Solicitud de Transferencia de Marca y/o Señal', 'Este trámite te permite solicitar la transferencia de la Marca y/o Señal.', 'Dpto. de Guías Marcas y Señales - Pelegrini N°1', 'Lunes a Viernes de 07:00 a 13:00 hs.', 'Titular de la Marca y/o Señal. Tercero designado por el titular de la misma', NULL, NULL, 'Correo: guias@tresarroyos.gov.ar - Tel. 425835', NULL, 6, 1, NULL, NULL),
(21, 'Solicitud de Duplicado de Marca y/o Señal ', 'Este trámite te permite obtener el duplicado de la Marca y/o Señal.', 'Dpto. de Guías Marcas y Señales - Pelegrini N°1', 'Lunes a Viernes de 07:00 a 13:00 hs.', 'Titular de la Marca y/o Señal. Tercero designado por el titular de la misma', NULL, NULL, 'Correo: guias@tresarroyos.gov.ar - Tel. 425835', NULL, 6, 1, NULL, NULL),
(22, 'Registro de Poderes Especiales ', 'Este trámite te permite obtener permisos especiales.', 'Dpto. de Guías Marcas y Señales - Pelegrini N°1', 'Lunes a Viernes de 07:00 a 13:00 hs.', 'Titular de la Marca y/o Señal. Tercero designado por el titular de la misma', NULL, NULL, 'Correo: guias@tresarroyos.gov.ar - Tel. 425835', NULL, 6, 1, NULL, NULL),
(23, 'Registro de Prendas de Semovientes', 'Este trámite te permite registrar prendas Semovientes.', 'Dpto. de Guías Marcas y Señales - Pelegrini N°1', 'Lunes a Viernes de 07:00 a 13:00 hs.', 'Titular de la Marca y/o Señal. Tercero designado por el titular de la misma', NULL, NULL, 'Correo: guias@tresarroyos.gov.ar - Tel. 425835', NULL, 6, 1, NULL, NULL),
(24, 'Solicitud de Rectificación de Marca y/o Señal', 'Este trámite te permite retificar la Marca y/o Señal.', 'Dpto. de Guías Marcas y Señales - Pelegrini N°1', 'Lunes a Viernes de 07:00 a 13:00 hs.', 'Titular de la Marca y/o Señal. Tercero designado por el titular de la misma', NULL, NULL, 'Correo: guias@tresarroyos.gov.ar - Tel. 425835', NULL, 6, 1, NULL, NULL),
(25, 'Certificado de Libre Estacionamiento', 'Este trámite te permite solicitar libre estacionamiento en las zonas delimitas por el estacionamiento medido. Se otorga un solo permiso de libre Estacionamiento por el término de seis meses y para ser utilizado solo en la cuadra perteneciente al inmueble', 'Inspección General - Castelli Nº 675', 'Lunes a Viernes de 07:30 a 13:30 hs.', 'Titular del inmueble.', NULL, NULL, 'Correo: seguridad@tresa.mun.gba.gov.ar - Tel. 432102', NULL, 11, 4, NULL, NULL),
(26, 'Exposiciones Civiles ', 'Este trámite te permite dejar constancia de situaciones tales como quejas por molestias de vecinales y accidentes sin verificación de lesionados en la vía pública. No corresponde las exposiciones civiles por robos, amenazas, hurtos, daño, lesiones, violaciones y todo otro tipo de delitos.', 'Oficina de Exposiciones Civiles- Castelli N° 745 ', 'Lunes a Viernes de 07:30 a 11:30 hs.', 'Las personas afectadas.', NULL, NULL, 'Correo: seguridad@tresa.mun.gba.gov.ar - Tel. 431555', NULL, 12, 4, NULL, NULL),
(27, 'Libreta Sanitaria', 'Este trámite le permite al personal de fábricas y comercios de alimentación, choferes o titulares que transporte y manipulen sustancias, choferes afectados al trasnporte público. Vigencia de la libreta  1(un) año.', 'Inspección General - Castelli Nº 675', 'Lunes a Viernes de 07:30 a 13:00 hs.', 'El interesado', NULL, NULL, 'Correo: seguridad@tresa.mun.gba.gov.ar - Tel. 431555 ', NULL, 5, 4, NULL, NULL),
(28, 'Obtener Licencia de Conducir', ' La Licencia Nacional de Conducir (LNC) es el documento otorgado por el Estado a los ciudadanos para poder manejar un vehículo, sea de forma profesional como particular.<br/>\r\nLa obtención de la Licencia Nacional de Conducir permite la conducción en todas las calles y caminos del territorio argentino, como así también en los países del extranjero que están suscriptos a la convención de Ginebra de 1949.<br/>', 'Secretaria de Seguridad - Castelli Nº 745', 'Lunes a Viernes de 08:00 a 13:30 hs.', 'El interesado.', NULL, NULL, 'Correo: licencia@tresarroyos.gov.ar - Tel. 431555/15449599.', NULL, 11, 4, NULL, NULL),
(29, 'Duplicado de licencia de Conducir', 'Este trámite le permite obtener nuevamente su licencia en caso de extravío o robo', 'Secretaria de Seguridad - Castelli Nº 745', 'Lunes a Viernes de 08:00 a 13:30 hs.', 'El interesado.', NULL, NULL, 'Correo: licencia@tresarroyos.gov.ar - Tel. 431555/15449599 de 8:00 a 13:00 hrs.', NULL, 11, 4, NULL, NULL),
(30, 'Modificación de datos ', 'El titular de la licencia de conductor deberá denunciar a la brevedad todo cambio de los datos consignados en ella. La licencia caduca a los 90 días de producido el cambio no denunciado.', 'Secretaria de Seguridad - Castelli Nº 745', 'Lunes a Viernes de 08:00 a 13:30 hs.', 'El titular.', NULL, NULL, 'Correo: licencia@tresarroyos.gov.ar - Tel. 431555/15449599 de 8:00 a 13:00 hrs.', NULL, 11, 4, NULL, NULL),
(31, 'Registro de Motovehículo (Patente)', 'Este trámite te permite obtener la patente de tu motovehiculo.', 'Of. de Expociones Civiles - Castelli N° 745', 'Lunes a Viernes de 07:30 a 13:30 hs.', 'El titular del vehículo, o el mandatario y/o gestor con documentación correspondiente', NULL, NULL, 'Correo: seguridad@tresa.mun.gba.gov.ar - Tel. 431555', NULL, 9, 4, NULL, NULL),
(32, 'Habilitación de Remis ', 'Este trámite te permite obtener la habilitación correspondiente para realizar el alta del servicio de remis como corresponde. Este demora aproximadamente de 30 a 45 días. Se puede iniciar provisoriamente el trámite de habilitación con Certificado de Antecedentes Penales que se tramita en la misma comisaría.', 'Oficina de Transporte - Castelli N° 745', 'Lunes a Viernes de 07:30 a 13:30 hs.', 'El titular del vehículo.', NULL, NULL, 'Correo: seguridad@tresa.mun.gba.gov.ar - Tel. 431555 ', NULL, 9, 4, NULL, NULL),
(33, 'Cambio de Agencia de Remis', 'Este trámite te permite dar de alta un nuevo coche a la agencia, siempre y cuando alla sido dado de baja de la anterior prestación.', 'Oficina de Transporte - Castelli N° 745', 'Lunes a Viernes de 07:30 a 13:30 hs.', 'El propietario de la agencia.', NULL, NULL, 'Correo: seguridad@tresa.mun.gba.gov.ar - Tel. 431555', NULL, 9, 4, NULL, NULL),
(34, 'Cese de la prestación de Servicios de Remis', 'Este trámite te permite obtener el cese del servicio de remis.', 'Oficina de Transporte - Castelli N° 745', 'Lunes a Viernes de 07:30 a 13:30 hs.', 'El propietario de la agencia.', NULL, NULL, 'Correo: seguridad@tresa.mun.gba.gov.ar - Tel. 431555', NULL, 9, 4, NULL, NULL),
(35, 'Habilitaciones de Licencias de Taxis', 'Este trámite te permite habilitar la licencia de taxis.</br> Este demora aproximadamente de 30 a 45 días. Se puede iniciar provisoriamente el trámite de habilitación con Certificado de Antecedentes Penales que se tramita en la misma comisaría.', 'Oficina de Transporte - Castelli N° 745', 'Lunes a Viernes de 07:30 a 13:30 hs.', 'El titular del vehículo.', NULL, NULL, 'Correo: seguridad@tresa.mun.gba.gov.ar - Tel. 431555 ', NULL, 9, 4, NULL, NULL),
(36, 'Cese de prestación de Servicios de Taxi', 'Este trámite te permite realizar el cese del servicio del mismo.', 'Oficina de Transporte - Castelli N° 745', 'Lunes a Viernes de 07:30 a 13:30 hs.', 'El titular del vehículo.', NULL, NULL, 'Correo: seguridad@tresa.mun.gba.gov.ar - Tel. 431555 ', NULL, 9, 4, NULL, NULL),
(37, 'Habilitaciones de transporte Escolar', 'Este trámite te permite realizar la habilitación del Transporte escolar presentando la documentación requerida. Este demora aproximadamente de 30 a 45 días. Se puede iniciar provisoriamente el trámite de habilitación con Certificado de Antecedentes Penales que se tramita en la misma comisaría.', 'Oficina de Transporte - Castelli N° 745', 'Lunes a Viernes de 07:30 a 13:30 hs.', 'El titular del vehículo.', NULL, NULL, 'Correo: seguridad@tresa.mun.gba.gov.ar - Tel. 431555', NULL, 9, 4, NULL, NULL),
(38, 'Cese de la Prestación de Servicio de Transporte Escolar', 'Este trámite te permite realizar el cese del servicio.', 'Oficina de Transporte - Castelli N° 745', 'Lunes a Viernes de 07:30 a 13:30 hs.', 'El titular del vehículo.', NULL, NULL, 'Correo: seguridad@tresa.mun.gba.gov.ar - Tel. 431555', NULL, 9, 4, NULL, NULL),
(39, 'Habilitación de transporte contratado y/o excursiones', 'Este trámite te permite realizar la habilitación del transporte contratado y/o excursión.</br>Este trámite demora aproximadamente de 30 a 45 días. Se puede iniciar provisoriamente el trámite de habilitación con Certificado de Antecedentes Penales que se tramita en la misma comisaria. ', 'Oficina de Transporte - Castelli N° 745 ', 'Lunes a Viernes de 07:30 a 13:30 hs.', 'El titular del vehículo.', NULL, NULL, 'Correo: seguridad@tresa.mun.gba.gov.ar - Tel. 431555', NULL, 9, 4, NULL, NULL),
(40, 'Ingresos Brutos', 'Este trámite te permite administrar los ingresos brutos de los pequeños contribuyentes.', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'El titular.', NULL, NULL, 'Correo: comercio@tresarroyos.gov.ar - industriaycomercio@tresarroyos.gov.ar - Tel. 439370/71/72', NULL, 5, 1, NULL, NULL),
(41, 'Actualización de datos de Ingresos Brutos', 'Este trámite te permite actualizar los datos de el ingreso bruto asignado.', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'El titular.', NULL, NULL, 'Correo: comercio@tresarroyos.gov.ar - industriaycomercio@tresarroyos.gov.ar - Tel. 439370/71/72', NULL, 5, 1, NULL, NULL),
(42, 'Libre de deuda de Automotor - Mod 1977 a 2002', 'Este trámite te permite obtener un libre de deuda de tu automotor  correspondientes a los modelos a partir de 1977 a 2002', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'El titular.', NULL, NULL, 'Correo: rodados@tresarroyos.gov.ar o automotores@tresarroyos.gov.ar - Tel. 439315 / 439312', NULL, 9, 1, NULL, NULL),
(43, 'Baja de Automotor', 'Este trámite te permite realizar la baja del automotor para poder radicarlo en otro lugar.', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'El titular.', NULL, NULL, 'Correo: rodados@tresarroyos.gov.ar o automotores@tresarroyos.gov.ar - Tel. 439315 / 439312', NULL, 9, 1, NULL, NULL),
(44, 'Constancia de automotor exentos', 'Este trámite te permite solicitar la constancia de automotor exento de los modelos 77 a 89.', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'El titular del vehículo.', NULL, NULL, 'Correo: rodados@tresarroyos.gov.ar o automotores@tresarroyos.gov.ar - Tel. 439215 / 439212', NULL, 9, 1, NULL, NULL),
(45, 'Modificación de ingreso bruto', 'Este trámite te permite cambiar el domicilio del cual fue registrado el ingreso.', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'El titular del vehículo.', NULL, NULL, 'Correo: comercio@tresarroyos.gov.ar - industriaycomercio@tresarroyos.gov.ar - Tel. 439370/71/72', NULL, 5, 1, NULL, NULL),
(46, 'Bien de Familia', 'Este trámite te otorga el beneficio principal de la protección del inmueble, no pudiendo ser ejecutado por deudas que determina la ley.', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'El titular del inmueble.', NULL, NULL, 'Correo:biendefamilia@tresarroyos.gov.ar - Tel. 439223', NULL, 1, 2, NULL, NULL),
(47, 'Información al Consumidor', 'Este trámite permite realizar denuncias a los consumidores que tiene diferencias con comercios de electrodomésticos, servicios (telefonía fija o celular, servicios de Internet, alarmas, televisión satelital o por cable, etc.), concesionarios de autos (0 km y en período de garantía, planes de ahorro), tarjeta de créditos, Instituciones Bancarias, pólizas de seguros, etc.', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'La persona afectada.', NULL, NULL, 'Correo:omic@tresarroyos.gov.ar - Tel. 439319', NULL, 12, 2, NULL, NULL),
(48, 'Escrituración Social (Ley 10.830).-', 'Este trámite le permite obtener la escritura de su inmueble. La documentación a presentar depende del tipo de persona que es, ya sea persona juridica o persona fisica.', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 7:00 a 14:00 hs.', 'Cualquier persona mayor de edad.', NULL, NULL, 'Correo: escrituraciones@tresa.mun.gba.gov.ar - Tel. 439223', NULL, 1, 2, NULL, NULL),
(49, 'Ley Alas', 'Exención del impuesto a los ingresos brutos para beneficiarios del monotributo social. Esta ley busca otorgar visibilidad y protección a los trabajadores, grupos y familias que se dediquen a la producción, comercialización e intercambios de bienes y servicios en el marco de la economía social.', 'Secretaría de Desarrollo Económico - Av. Rivadavia Nº 1', 'Lunes a Viernes de 8:00 a 13:00 hs.', 'El beneficiario del monotributo social.', NULL, NULL, 'Correo: desarrolloeconomico@tresarroyos.gov.ar - Tel. 439200 Int. 244  ', NULL, 5, 5, NULL, NULL),
(50, 'Autorización de acreditación cuenta bancaria (Proveedores)', 'Si el Proveedor optara por la forma de pago mediante transferencia bancaria, deberá completar el formulario Nº 35 en el cual indicará la cuenta bancaria del beneficiario, donde deberán efectuarse los depósitos correspondientes a los pagos que le efectúe la Tesorería, a los efectos de que los mismos tengan poder cancelatorios de las deudas asumidas con dicho beneficiario por la Municipalidad de Tres Arroyos.</br>El mismo no deberá contener tachaduras, ni enmiendas y deberá ser legible.</br>La responsabilidad por la corrección de los datos contenidos en el formulario recae sobre el(los) firmante(s) con personería para efectuar la presentación.</br>También serán responsables los funcionarios bancarios firmantes de la certificación por la autenticidad de los datos contenidos en la misma. En el caso de surgir con posterioridad, alguna modificación en el contenido del presente formulario, o de decidir que no se efectúen transferencias a dicha cuenta bancaria, será del beneficiario la responsabilidad exclusiva de comunicar dicha situación, la cual solo podrá efectuarse  en la Tesorería de la Municipalidad de Tres Arroyos', 'Tesorería - Palacio Municipal', 'Lunes a Viernes de 7:30 a 13:00 hs.', 'El titular o persona autorizada.', NULL, NULL, 'Tel. 439239', NULL, 12, 1, NULL, NULL),
(51, 'Inscripción en el reg. de beneficiario y poderes (Proveedores)', 'En caso de ser proveedor de la Municipalidad de Tres Arroyos, deberá inscribirse en el Registro de Beneficarios y Poderes de la Tesorería del Municipio, a efectos de poder proceder al cobro y, eventualmente , autorizar a otra(s) personas a retirar los cheques y a suscribir los  recibos de pago.', 'Tesorería - Palacio Municipal', 'Lunes a Viernes de 7:30 a 13:00 hs.', 'El titular o persona autorizada.', NULL, NULL, 'Tel. 439239', NULL, 12, 1, NULL, NULL),
(52, 'COPETONAS - Castración', 'Este trámite permite la castración de perras, perros y gatas.', 'De. Municipal Copetonas - Av. San Martín 283', 'Lunes a viernes de 06:00 a 12:30 hs.', 'Cualquier persona.', NULL, NULL, 'Correo: delcopetonas@tresarroyos.gov.ar y delcopetonas@hotmail.com - Tel: 497039', NULL, 13, 2, NULL, NULL),
(53, 'COPETONAS - Renovación de sepulturas y nichos, reducción ', 'Este trámite permite actualizar respecto a los nichos y sepulturas', 'De. Municipal Copetonas - Av. San Martín 283', 'Lunes a viernes de 06:00 a 12:30 hs.', 'Cualquier persona allegada al familiar', NULL, NULL, 'Correo: delcopetonas@tresarroyos.gov.ar - Tel: 497039', NULL, 4, 2, NULL, NULL),
(54, 'COPETONAS - Incorporación a la mutual (IOMA)', 'Este trámite permite agilizar la incorporación. ', 'De. Municipal Copetonas - Av. San Martín 283', 'Lunes a viernes de 06:00 a 12:30 hs.', 'Cualquier persona.', NULL, NULL, 'Correo: delcopetonas@tresarroyos.gov.ar y delcopetonas@hotmail.com - Tel: 497039', NULL, 13, 2, NULL, NULL),
(55, 'COPETONAS - Renovación IOMA', 'Este trámite permite la renovación de credenciales. ', 'De. Municipal Copetonas - Av. San Martín 283', 'Lunes a viernes de 06:00 a 12:30 hs.', 'Cualquier persona.', NULL, NULL, 'Correo: delcopetonas@tresarroyos.gov.ar y delcopetonas@hotmail.com - Tel: 497039', NULL, 13, 2, NULL, NULL),
(56, 'COPETONAS - Senasa', 'Este trámite permite la confección y cierre de los DT-E.', 'De. Municipal Copetonas - Av. San Martín 283', 'Lunes a viernes de 07:00 a 13:00 hs.', 'Los productores autorizados para realizar dichos trámites.', NULL, NULL, 'Correo: delcopetonas@tresarroyos.gov.ar - Tel: 497039', NULL, 6, 2, NULL, NULL),
(57, 'Renovación de Licencia de Conducir', 'Este trámite  le  permite renovar la licencia de conducir vencida.<br/>\r\nTiene hasta 90 días posteriores al vencimiento para renovar su licencia, pero NO PARA CONDUCIR.  No existe ningún tipo de constancia que lo habilite.<br/>\r\nPasado este tiempo deberá iniciar el trámite de obtención de licencia de conducir como original y rendir los exámenes teórico/ práctico.<br/><br/>', 'Secretaria de Seguridad - Castelli Nº 745', 'Lunes a Viernes de 08:00 a 13:30 hs.', 'El interesado.', NULL, NULL, 'Correo: licencia@tresarroyos.gov.ar - Tel. 431555/15449599', NULL, 11, 4, NULL, NULL),
(58, 'Programa de Educación Vial', 'El programa integral de Educación Vial se implementa tanto en escuelas como en empresas del Partido.</br>El programa se compone de dos secciones una teórica en la cual se reseñan las normas y señales viales vigentes y la proyección de un video explicativo, luego de esto se pasa a la parte  práctica en la cual los escolares transitan por el parquecito vial de la Dirección de Tránsito pensado para tal fin en triciclo o en bicicleta según la edad del educando donde se aplica lo asimilado.  También se brindan a empresas del Partido de Tres Arroyos que las  soliciten. ', 'Secretaria de Seguridad - Castelli N° 745', 'Lunes a Viernes de 07:30 a 13:30 hs.', 'El interesado.', NULL, NULL, 'Correo: seguridad@tresa.mun.gba.gov.ar - Tel. 431555 ', NULL, 11, 4, NULL, NULL),
(59, 'Autorización de Rifas, Bailes, circos y espectáculos públicos en general', 'Mediante este trámite se obtiene la autorización para la venta de rifas y la realización de bailes, circos y espectáculos públicos en general.', 'Mesa de Entradas - Av Rivadavia Nro. 1', 'Lunes a Viernes de 07:30 a 13:30 hs.', 'El interesado.', NULL, NULL, 'Correo: seguridad@tresa.mun.gba.gov.ar - Tel. 431555', NULL, 12, 4, NULL, NULL),
(60, 'Autorización de Afiches, volantes y murales', 'Mediante este trámite se obtiene la autorización para la utilización y/o colocación de afiches, volantes y murales', 'Oficina de Transporte - Castelli N° 745', 'Lunes a Viernes de 07:30 a 13:00 hs.', 'El interesado.', NULL, NULL, 'Correo: seguridad@tresa.mun.gba.gov.ar - Tel. 431555', NULL, 5, 4, NULL, NULL),
(61, 'Habilitacion de Comercios e Industrias', 'Este Trámite permite obtener la habilitación para un comercio o una industria', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'El interesado.', NULL, NULL, 'Correo: comercio@tresarroyos.gov.ar - industriaycomercio@tresarroyos.gov.ar - Tel. 439370/71/72', NULL, 5, 1, NULL, NULL),
(62, 'Cese de actividades', 'Mediante este tramite se informa el cese de actividades de un comercio o industria', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'El interesado.', NULL, NULL, 'Correo: comercio@tresarroyos.gov.ar - industriaycomercio@tresarroyos.gov.ar - Tel. 439370/71/72', NULL, 5, 1, NULL, NULL),
(63, 'Presentación de Planos de Construcción', 'Este Trámite es obligatorio para todas aquellas personas que deseen realizar una construcción/ ampliación / demolición de una propiedad. La presentación debe ser previa a la ejecución de la obra.', 'Oficina de Obras Particulares - Castelli Nro. 615', 'Lunes a Viernes de 07:30 a 13:30 hs.', 'El profesional designado', NULL, NULL, 'Correo: obrasparticulares_tsas@hotmail.com - Tel. 433168 int 128', NULL, 1, 3, NULL, NULL),
(64, 'Presentación de Planos de Incoporación', 'Este Trámite consiste en declarar una obra de construcción ya consumada, sin la debida autorización municipal.', 'Oficina de Obras Particulares - Castelli Nro. 615', 'Lunes a Viernes de 07:30 a 13:30 hs.', 'El profesional designado', NULL, NULL, 'Correo: Obrasparticulares_tsas@hotmail.com - Tel. 433168 int 128', NULL, 1, 3, NULL, NULL),
(65, 'Presentación de Planos de final de Obra', 'Esta trámite es obligatorio para todas aquellas personas que hayan ejecutado una obraaprobada por la municipalidad', 'Oficina de Obras Particulares - Castelli Nro. 615', 'Lunes a Viernes de 07:30 a 13:30 hs.', 'El profesional designado', NULL, NULL, 'Correo: Obrasparticulares_tsas@hotmail.com - Tel. 433168 int 128', NULL, 1, 3, NULL, NULL),
(66, 'Solicitud de planos gratuitos según ordenanza  5232/03', 'Este trámite le permite a las familias de escasos recursos que reúnan los requisitos establecidos en la ordenanza mencionda, acceder en forma gratuita a los planos para la construcción de su vivienda única, económica, de uso permanente y familiar. ', 'Oficina de Obras Particulares - Castelli Nro. 615', 'Lunes a Viernes de 07:30 a 13:30 hs.', 'El interesado', NULL, NULL, 'Correo: Obrasparticulares_tsas@hotmail.com - Tel. 433168 int 128', NULL, 1, 3, NULL, NULL),
(67, 'Solicitud de planos de ampliación Plan Federal', 'Este trámite permite a los beneficiarios del plan federal obtener planos para la ampliación de su vivienda familiar según ordenanza 5729/07.', 'Oficina de Obras Particulares - Castelli Nro. 615', 'Lunes a Viernes de 07:30 a 13:30 hs.', 'El adjudicatario de la vivienda', NULL, NULL, 'Correo: Obrasparticulares_tsas@hotmail.com - Tel. 433168 int 128', NULL, 1, 3, NULL, NULL),
(68, 'Solicitud de planos de antecedentes', 'Este trámite consiste en solicitar la vista de un plano del archivo municipal o bien retirarlo temporalmente en calidad de préstamo.', 'Oficina de Obras Particulares - castelli Nro. 615', 'Lunes a Viernes de 07:30 a 13:30 hs.', 'El interesado', NULL, NULL, 'Correo: Obrasparticulares_tsas@hotmail.com - Tel. 433168 int 128', NULL, 1, 3, NULL, NULL),
(69, 'Solicitud de Certificados Urbanísticos', 'En el certificado urbanístico el municipio informa oficialmente los datos concretos de una parcela determinada (propietarios, superficie, nomenclatura catastral, ubicación, restricciones urbanísticas, usos, etc).', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'El interesado', NULL, NULL, 'Correo: Obrasparticulares_tsas@hotmail.com - Tel. 433168 int 128', NULL, 1, 3, NULL, NULL),
(70, 'Solicitud del medidor de obra', 'Usualmente llamado “chimango”, es el medidor provisorio de obra que provee la energía eléctrica necesaria para el desarrollo de la obra.', 'Oficina de Obras Particulares - castelli Nro. 615', 'Lunes a Viernes de 07:30 a 13:30 hs.', 'El profesional a cargo de la obra o el propietario', NULL, NULL, 'Correo: Obrasparticulares_tsas@hotmail.com - Tel. 433168 int 128', NULL, 7, 3, NULL, NULL),
(71, 'Consulta de deuda, actualización de cuotas vencidas o certificado de libre de deuda', 'Mediante este trámite se puede realizar consulta de deuda de una partida, actualizar cuotas vencidas u obtener el certificado de libre de deuda', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'Cualquier persona', NULL, NULL, 'Correo: reclamos@tresarroyos.gov.ar - Tel. 439310- 439314', NULL, 10, 1, NULL, NULL),
(72, 'Cambio de domicilio fiscal', 'Este trámite permite realizar el cambio del domicilio fiscal de una partida', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'El interesado', NULL, NULL, 'Correo: reclamos@tresarroyos.gov.ar - Tel. 439314 ', NULL, 10, 1, NULL, NULL),
(73, 'Planes de Regularización de Deudas', 'Este trámite permite al interesado realizar un plan de regularización de deuda de una partida', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'El interesado', NULL, NULL, 'Correo: reclamos@tresarroyos.gov.ar - Tel. 439310-439314', NULL, 10, 1, NULL, NULL),
(74, 'Eximición de la Tasa por Servicios ', 'Mediante este trámite se obtiene la eximición de la tasa por servicios urbanos', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'El interesado', NULL, NULL, 'Correo: reclamos@tresarroyos.gov.ar - Tel. 439310-439314', NULL, 10, 2, NULL, NULL),
(75, 'Permiso de poda', 'Este trámite permite obtener el permiso para poder realizar la poda y/o extracción de los árboles que están en la vía pública.</br>TAMBIEN PUEDE SER REALIZADO EN LAS DELEGACIONES.', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'El interesado', NULL, NULL, 'Correo: reclamos@tresarroyos.gov.ar - Tel. 439302/303', NULL, 12, 2, NULL, NULL),
(76, 'Inscripción de profesionales', 'Este trámite les permite a los profesionales del sector inscribirse para trabajar en el partido de Tres Arroyos.', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'El profesional', NULL, NULL, 'Correo: Obrasparticulares_tsas@hotmail.com - Tel. 433168 int 128', NULL, 7, 3, NULL, NULL),
(77, 'Certificado Único de Discapacidad (CUD)', 'Mediante este trámite se puede obtener el Certificado Único de Discapacidad (CUD)', 'Secretaria de desarrollo social  - Domingo Vazquez', 'Lunes a Viernes de 08:00 a 12:00 hs.', 'El interesado', NULL, NULL, '430470/426475', NULL, 7, 6, NULL, NULL),
(78, 'Certificación o numeración de edificios', 'Este trámite te permite realizar la verificación del edificio geográficamente mediante una certificación entregada por el Departamento de Catastro.', 'Dirección de políticas tributarias - Av. Moreno Nº 245', 'Lunes a Viernes de 07:00 a 14:00 hs.', 'El interesado', NULL, NULL, 'Correo: catastro@tresarroyos.gov.ar - Tel. 433168 int 128', NULL, 7, 1, NULL, NULL),
(79, 'Libreta Sanitaria', 'Este trámite le permite al personal de fábricas y comercios de alimentación, choferes o titulares que transporte y manipulen sustancias, choferes afectados al trasnporte público. Vigencia de la libreta  1(un) año.', 'Inspección General - Castelli Nº 675', 'Lunes a Viernes de 07:30 a 13:00 hs.', 'El interesado', NULL, NULL, 'Correo: seguridad@tresa.mun.gba.gov.ar - Tel. 431555 ', NULL, NULL, 4, NULL, NULL),
(80, 'Registro de Camiones para transporte de Hacienda', 'Este trámite es para realizar el registro de inscripción del número de habilitación según Ley 10.891 Art. 10.', 'Dpto. de Guías Marcas y Señales - Pelegrini N°1', 'Lunes a Viernes de 07:00 a 13:00 hs.', 'Titular del transporte.', NULL, NULL, 'Correo: guias@tresarroyos.gov.ar - Tel. 425835', NULL, 6, 1, NULL, NULL),
(81, 'Registro Inicio Trámite Boleto', 'Este trámite es para todo aquel que inicia un trámite de inscripción y/o renovación de una marca o señal.', 'Dpto. de Guías Marcas y Señales - Pelegrini N°1', 'Lunes a Viernes de 07:00 a 13:00 hs.', 'Titular de la Marca y/o Señal. Tercero designado por el titular de la misma', NULL, NULL, 'Correo: guias@tresarroyos.gov.ar - Tel. 425835', NULL, 6, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tramite_tipo`
--

CREATE TABLE `tramite_tipo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icono` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tramite_tipo`
--

INSERT INTO `tramite_tipo` (`id`, `tipo`, `icono`, `created_at`, `updated_at`) VALUES
(1, 'Accion social', 'bi bi-person-arms-up', '2023-11-28 14:25:10', NULL),
(2, 'Aguas-cloacas', 'bi bi-droplet-half', '2023-11-28 14:25:10', NULL),
(3, 'Bromatologia', 'bi bi-egg-fried', '2023-11-28 14:25:10', NULL),
(4, 'Cementerio', 'fas fa-cross', '2023-11-28 14:25:10', NULL),
(5, 'Comercios', 'bi bi-shop', '2023-11-28 14:25:10', NULL),
(6, 'Guias', 'bi bi-signal', '2023-11-28 14:25:10', NULL),
(7, 'Obras-Inmuebles', 'bi bi-buildings-fill', '2023-11-28 14:25:10', NULL),
(8, 'Proveedores', 'bi bi-truck', '2023-11-28 14:25:10', NULL),
(9, 'Rodados', 'bi bi-car-front-fill', '2023-11-28 14:25:10', NULL),
(10, 'Tasas', 'bi bi-calculator-fill', '2023-11-28 14:25:10', NULL),
(11, 'Transito', 'bi bi-sign-intersection-t', '2023-11-28 14:25:10', NULL),
(12, 'Vecinos', 'fa fa-people-arrows', '2023-11-28 14:25:10', NULL),
(13, 'Otros', 'bi bi-question-square-fill', '2023-11-28 14:25:10', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dni` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol` enum('Admin','Member','SuperAdmin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Member',
  `apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `domicilio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nro_tramite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `genero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_tadi`
--

CREATE TABLE `usuario_tadi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `domicilio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nro_tramite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `genero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contrasenia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `reclamo`
--
ALTER TABLE `reclamo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reclamo_usuario_id_foreign` (`usuario_id`),
  ADD KEY `reclamo_admin_id_foreign` (`admin_id`);

--
-- Indices de la tabla `reclamo_tema`
--
ALTER TABLE `reclamo_tema`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `seccion_menu`
--
ALTER TABLE `seccion_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `seccion_pagina`
--
ALTER TABLE `seccion_pagina`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tramite_guia`
--
ALTER TABLE `tramite_guia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tramite_guia_tipo_id_foreign` (`tipo_id`),
  ADD KEY `tramite_guia_area_id_foreign` (`area_id`);

--
-- Indices de la tabla `tramite_tipo`
--
ALTER TABLE `tramite_tipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_dni_unique` (`dni`);

--
-- Indices de la tabla `usuario_tadi`
--
ALTER TABLE `usuario_tadi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reclamo`
--
ALTER TABLE `reclamo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `reclamo_tema`
--
ALTER TABLE `reclamo_tema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `seccion_menu`
--
ALTER TABLE `seccion_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `seccion_pagina`
--
ALTER TABLE `seccion_pagina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `tramite_guia`
--
ALTER TABLE `tramite_guia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de la tabla `tramite_tipo`
--
ALTER TABLE `tramite_tipo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario_tadi`
--
ALTER TABLE `usuario_tadi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reclamo`
--
ALTER TABLE `reclamo`
  ADD CONSTRAINT `reclamo_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `reclamo_usuario_id_foreign` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `tramite_guia`
--
ALTER TABLE `tramite_guia`
  ADD CONSTRAINT `tramite_guia_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `area` (`id`),
  ADD CONSTRAINT `tramite_guia_tipo_id_foreign` FOREIGN KEY (`tipo_id`) REFERENCES `tramite_tipo` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
