-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2015 a las 20:36:01
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `voto`
--
CREATE DATABASE IF NOT EXISTS `voto` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `voto`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alcalde`
--

CREATE TABLE IF NOT EXISTS `alcalde` (
`id_alcalde` int(11) NOT NULL,
  `dui` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `partido` int(11) NOT NULL,
  `bandera` varchar(75) NOT NULL,
  `departamento` int(11) NOT NULL,
  `municipio` int(11) NOT NULL,
  `voto` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alcalde`
--

INSERT INTO `alcalde` (`id_alcalde`, `dui`, `nombre`, `apellido`, `partido`, `bandera`, `departamento`, `municipio`, `voto`) VALUES
(1, '5656896', 'Zoila Beatriz', 'Dubon Henriquez', 3, '1920x1200_Zixpk_HD_Wallpaper_209.jpg', 0, 0, 0),
(2, '5656896', 'kuku', 'moco', 2, '1920x1200_Zixpk_HD_Wallpaper_209.jpg', 0, 0, 0),
(3, '7896', 'plok', 'pio', 4, '10407264_982477281770333_1626257808264930291_n.jpg', 0, 0, 0),
(4, '7896', 'plok', 'pio', 4, '10407264_982477281770333_1626257808264930291_n.jpg', 0, 0, 0),
(5, '36936936-9', 'Jason Verenice', 'Amaya Gutti', 8, 'esperanza.jpg', 1, 0, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudadano`
--

CREATE TABLE IF NOT EXISTS `ciudadano` (
`id_ciudadano` int(11) NOT NULL,
  `dui` varchar(10) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `genero` varchar(15) NOT NULL,
  `id_departamento` int(11) NOT NULL,
  `id_municipio` int(11) NOT NULL,
  `fecha_expe` date NOT NULL,
  `fecha_expira` date NOT NULL,
  `direccion` varchar(75) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciudadano`
--

INSERT INTO `ciudadano` (`id_ciudadano`, `dui`, `apellidos`, `nombres`, `genero`, `id_departamento`, `id_municipio`, `fecha_expe`, `fecha_expira`, `direccion`, `estado`) VALUES
(1, '4567', ' bnhjgh', 'hjjjh', 'm', 1, 2, '2015-05-05', '2015-05-27', 'uyuyuiy', 0),
(2, '7767', 'iodid', 'dhghjwgd', 'masculino', 2, 14, '2015-05-20', '2015-05-22', 'edgygd', 0),
(3, '7896541', 'mkloi', 'yhbg', 'masculino', 1, 2, '2015-05-03', '2015-05-09', 'qazcxds', 0),
(5, '251654', 'fhgfhgfhy', 'fghfhfvgf', 'masculino', 1, 3, '2015-05-06', '2015-05-20', 'gtuyftyftyfty', 0),
(6, '7896', 'Navarro Cruz', 'Glenda Marisol', 'femenino', 8, 155, '2015-05-01', '2015-05-31', 'santa rita Almendros', 0),
(10, '7894561277', 'Amaya Hernandez', 'Anai Elizabeth', 'femenino', 1, 2, '2015-06-04', '2015-06-29', 'santa rita Almendros', 0),
(11, '1478523698', 'Jovel Ayala', 'Jose Alonso', 'masculino', 12, 214, '2015-06-23', '2015-06-26', 'porto ballarte', 0),
(13, '2356417184', 'navarrete', 'emily', 'femenino', 13, 241, '2015-06-21', '2015-06-30', 'opou', 0),
(14, '1236547999', 'Tamayo Orantes', 'Juan Carlos', 'masculino', 9, 166, '2015-06-17', '2015-06-30', 'col. Miramar', 0),
(15, '12365478-0', 'Tamayo Orantes', 'Oscar Yoret', 'masculino', 9, 166, '2015-06-23', '2015-06-30', 'tuyomiyo', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coalisiones`
--

CREATE TABLE IF NOT EXISTS `coalisiones` (
`id_coalisiones` int(11) NOT NULL,
  `partidoA` int(11) NOT NULL,
  `partidoB` int(11) NOT NULL,
  `partidoC` int(11) NOT NULL,
  `partidoD` int(11) NOT NULL,
  `partidoE` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `id_departamento` int(11) NOT NULL,
  `id_municipio` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `coalisiones`
--

INSERT INTO `coalisiones` (`id_coalisiones`, `partidoA`, `partidoB`, `partidoC`, `partidoD`, `partidoE`, `nombre`, `id_departamento`, `id_municipio`) VALUES
(1, 0, 0, 0, 0, 0, 'vtfgt', 8, 139),
(2, 0, 0, 0, 0, 0, 'vtfgt', 8, 139),
(3, 0, 0, 0, 0, 0, 'vtfgt', 8, 139),
(4, 1, 2, 2, 4, 3, 'kjjhdhb', 6, 100),
(5, 1, 3, 0, 0, 0, 'arena', 8, 143),
(6, 8, 8, 0, 0, 0, 'tu y yo', 8, 149),
(7, 8, 9, 0, 0, 0, 'tu y yo', 8, 154),
(8, 7, 8, 0, 0, 0, 'pastor bendito', 4, 53);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE IF NOT EXISTS `departamento` (
`id_departamento` int(11) NOT NULL,
  `departamento` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id_departamento`, `departamento`) VALUES
(1, 'AHUACHAPAN'),
(2, 'SANTA ANA'),
(3, 'SONSONATE'),
(4, 'CHALATENANGO'),
(5, 'LA LIBERTAD'),
(6, 'SAN SALVADOR'),
(7, 'CUSCATLAN'),
(8, 'LA PAZ'),
(9, 'CABAÑAS'),
(10, 'SAN VICENTE'),
(11, 'USULUTAN'),
(12, 'SAN MIGUEL'),
(13, 'MORAZAN'),
(14, 'LA UNION');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diputado`
--

CREATE TABLE IF NOT EXISTS `diputado` (
`id_diputado` int(11) NOT NULL,
  `dui` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `partido` int(11) NOT NULL,
  `bandera` varchar(75) NOT NULL,
  `departamento` int(11) NOT NULL,
  `voto` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `diputado`
--

INSERT INTO `diputado` (`id_diputado`, `dui`, `nombre`, `apellido`, `partido`, `bandera`, `departamento`, `voto`) VALUES
(1, '88998989', 'Fatima Marbeli', 'Dubon Galvez', 2, '11053341_640869659347945_3234147545841453386_n.jpg', 0, 0),
(2, '88998989', 'Fatima Marbeli', 'Dubon Galvez', 2, '11053341_640869659347945_3234147545841453386_n.jpg', 0, 0),
(3, '7895', 'kiki', 'nono', 4, '11265083_1039802562699491_2474750508865874162_n.png', 0, 0),
(4, '7895', 'kiki', 'nono', 4, '11265083_1039802562699491_2474750508865874162_n.png', 0, 0),
(5, '847687', 'poker', 'face', 3, '10408934_1635987019968136_8569879218601102813_n.jpg', 0, 3),
(6, '12312312-3', 'lucy', 'ortiz', 6, 'CAMPESINO.jpg', 0, 4),
(7, '12312312-3', 'lucy', 'ortiz', 6, 'CAMPESINO.jpg', 0, 1),
(8, '12312312-3', 'lucy', 'ortiz', 6, 'CAMPESINO.jpg', 0, 0),
(9, '12312312-3', 'lucy', 'ortiz', 6, 'CAMPESINO.jpg', 0, 0),
(10, '12312312-3', 'lucy', 'ortiz', 6, 'CAMPESINO.jpg', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eleccion`
--

CREATE TABLE IF NOT EXISTS `eleccion` (
`id_eleccion` int(11) NOT NULL,
  `presidenciales` varchar(25) NOT NULL,
  `alcaldes` varchar(10) NOT NULL,
  `diputados` varchar(25) NOT NULL,
  `anio` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `eleccion`
--

INSERT INTO `eleccion` (`id_eleccion`, `presidenciales`, `alcaldes`, `diputados`, `anio`) VALUES
(1, '', 'on', 'on', 2017),
(2, '', '', '', 2020);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicio`
--

CREATE TABLE IF NOT EXISTS `inicio` (
`id_usuario` int(11) NOT NULL,
  `login` varchar(25) NOT NULL,
  `passnormal` varchar(15) NOT NULL,
  `passadmin` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inicio`
--

INSERT INTO `inicio` (`id_usuario`, `login`, `passnormal`, `passadmin`) VALUES
(1, 'beatriz', '', 'dubon'),
(2, 'glenda', 'navarro', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE IF NOT EXISTS `municipio` (
`id_municipio` int(11) NOT NULL,
  `municipio` varchar(40) NOT NULL,
  `id_departamento` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=268 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`id_municipio`, `municipio`, `id_departamento`) VALUES
(1, 'AHUACHAPÁN', 1),
(2, 'APANECA ', 1),
(3, 'ATIQUIZAYA', 1),
(4, 'CONCEPCIÓN DE ATACO', 1),
(5, 'EL REFUGIO', 1),
(7, 'GUAYMANGO ', 1),
(8, 'JUJUTLA ', 1),
(9, 'SAN FRANCISCO MENÉNDEZ', 1),
(10, 'SAN LORENZO', 1),
(11, ' SAN PEDRO PUXTLA ', 1),
(12, 'TACUBA ', 1),
(13, 'TURÍN', 1),
(14, 'CANDELARIA DE LA FRONTERA', 2),
(15, ' CHALCHUAPA ', 2),
(16, 'COATEPEQUE', 2),
(17, 'EL CONGO', 2),
(18, 'EL PORVENIR', 2),
(19, ' MASAHUAT', 2),
(20, 'METAPÁN ', 2),
(21, 'SAN ANTONIO PAJONAL ', 2),
(22, 'SAN SEBASTIÁN SALITRILLO ', 2),
(23, 'SANTA ANA ', 2),
(24, 'SANTA ROSA GUACHIPILÍN ', 2),
(25, 'SANTIAGO DE LA FRONTERA', 2),
(26, 'TEXISTEPEQUE', 2),
(27, 'ACAJUTLA ', 3),
(28, 'ARMENIA ', 3),
(29, 'CALUCO', 3),
(30, 'CUISNAHUAT', 3),
(31, '  IZALCO', 3),
(32, ' JUAYÚA ', 3),
(33, ' NAHUIZALCO ', 3),
(34, ' NAHULINGO', 3),
(35, 'SALCOATITÁN', 3),
(36, 'SAN ANTONIO DEL MONTE ', 3),
(37, 'SAN JULIÁN ', 3),
(38, 'SANTA CATARINA MASAHUAT ', 3),
(39, 'SANTA ISABEL ISHUATÁN  ', 3),
(40, 'SANTO DOMINGO GUZMÁN ', 3),
(41, 'SONSONATE ', 3),
(42, 'SONZACATE', 3),
(43, '  ARCATAO ', 4),
(44, 'AGUA CALIENTE', 4),
(45, ' AZACUALPA ', 4),
(46, 'CHALATENANGO ', 4),
(47, 'COMALAPA  ', 4),
(48, 'CITALÁ ', 4),
(49, 'CONCEPCIÓN QUEZALTEPEQUE', 4),
(50, '  DULCE NOMBRE DE MARÍA', 4),
(51, '  EL CARRIZAL ', 4),
(52, ' EL PARAÍSO ', 4),
(53, 'LA LAGUNA ', 4),
(54, ' LA PALMA', 4),
(55, 'LA REINA ', 4),
(56, 'LAS VUELTAS ', 4),
(57, ' NUEVA CONCEPCIÓN ', 4),
(58, 'NUEVA TRINIDAD ', 4),
(59, ' NOMBRE DE JESÚS', 4),
(60, 'OJOS DE AGUA ', 4),
(61, 'POTONICO ', 4),
(62, 'SAN ANTONIO DE LA CRUZ', 4),
(63, 'SAN ANTONIO LOS RANCHOS  ', 4),
(64, 'SAN FERNANDO ', 4),
(65, 'SAN FRANCISCO LEMPA', 4),
(66, '  SAN FRANCISCO MORAZÁN ', 4),
(67, 'SAN IGNACIO', 4),
(68, '  SAN ISIDRO', 4),
(69, ' LABRADOR', 4),
(70, 'SAN JOSÉ CANCASQUE', 4),
(71, '  SAN JOSÉ LAS FLORES  ', 4),
(72, 'SAN LUIS DEL CARMEN  ', 4),
(73, 'SAN MIGUEL DE MERCEDES', 4),
(74, '  SAN RAFAEL', 4),
(75, '  SANTA RITA  ', 4),
(76, 'TEJUTLA', 4),
(77, 'CIUDAD ARCE', 5),
(78, '  COLÓN', 5),
(79, 'COMASAGUA', 5),
(80, 'HUIZÚCAR', 5),
(81, '  JICALAPA', 5),
(82, 'JAYAQUE', 5),
(83, '  LA LIBERTAD  ', 5),
(84, 'NUEVA SANTA TECLA', 5),
(85, '  NUEVO CUSCATLÁN ', 5),
(86, ' SAN JUAN OPICO  ', 5),
(89, ' SACACOYO ', 5),
(90, 'QUEZALTEPEQUE ', 5),
(91, ' SAN JOSÉ VILLANUEVA', 5),
(92, '  SAN MATÍAS  ', 5),
(93, 'SAN PABLO ', 5),
(94, 'TACACHICO  ', 5),
(95, 'TALNIQUE  ', 5),
(96, 'TAMANIQUE  ', 5),
(97, 'TEOTEPEQUE  ', 5),
(98, 'TEPECOYO', 5),
(99, ' ZARAGOZA', 5),
(100, 'AGUILARES  ', 6),
(101, 'APOPA  ', 6),
(102, 'AYUTUXTEPEQUE ', 6),
(103, 'CUSCATANCINGO ', 6),
(104, ' CIUDAD DELGADO  ', 6),
(105, 'EL PAISNAL  ', 6),
(106, 'GUAZAPA  ', 6),
(107, 'ILOPANGO', 6),
(108, '  MEJICANOS  ', 6),
(109, 'NEJAPA  ', 6),
(110, 'PANCHIMALCO ', 6),
(111, ' ROSARIO DE MORA ', 6),
(112, 'SAN MARCOS', 6),
(113, '  SAN MARTÍN  ', 6),
(114, 'SAN SALVADOR  ', 6),
(115, 'SANTIAGO TEXACUANGOS  ', 6),
(116, 'SANTO TOMÁS', 6),
(117, '  SOYAPANGO ', 6),
(118, 'TONACATEPEQUE', 6),
(119, 'CANDELARIA', 7),
(120, '  COJUTEPEQUE ', 7),
(121, 'EL CARMEN ', 7),
(122, 'EL ROSARIO ', 7),
(123, ' MONTE SAN JUAN', 7),
(124, 'ORATORIO DE CONCEPCIÓN', 7),
(125, '  SAN BARTOLOMÉ PERULAPÍA ', 7),
(126, 'SAN CRISTÓBAL', 7),
(127, '  SAN JOSÉ GUAYABAL  ', 7),
(128, 'SAN PEDRO PERULAPÁN', 7),
(129, '  SAN RAFAEL CEDROS ', 7),
(130, ' SAN RAMÓN ', 7),
(131, 'SANTA CRUZ MICHAPA ', 7),
(132, 'SANTA CRUZ ANALQUITO', 7),
(133, 'SUCHITOTO', 7),
(134, ' TENANCINGO', 7),
(135, 'CUYULTITÁN  ', 8),
(136, 'EL ROSARIO', 8),
(137, '  JERUSALÉN ', 8),
(138, 'MERCEDES', 8),
(139, 'LA CEIBA', 8),
(140, '  OLOCUILTA  ', 8),
(141, 'PARAÍSO DE OSORIO', 8),
(142, '  SAN ANTONIO MASAHUAT ', 8),
(143, 'SAN EMIGDIO ', 8),
(144, ' SAN FRANCISCO CHINAMECA  ', 8),
(145, 'SAN JUAN NONUALCO  ', 8),
(146, 'SAN JUAN TALPA', 8),
(147, '  SAN JUAN TEPEZONTES ', 8),
(148, ' SAN LUIS TALPA  ', 8),
(149, 'SAN LUIS LA HERRADURA', 8),
(150, 'SAN MIGUEL TEPEZONTES  ', 8),
(151, 'SAN PEDRO MASAHUAT  ', 8),
(152, 'SAN PEDRO NONUALCO  ', 8),
(153, 'SAN RAFAEL OBRAJUELO  ', 8),
(154, 'SANTA MARÍA OSTUMA ', 8),
(155, 'SANTIAGO NONUALCO  ', 8),
(156, 'TAPALHUACA ', 8),
(157, 'ZACATECOLUCA', 8),
(158, 'CINQUERA ', 9),
(159, ' DOLORES', 9),
(160, '  GUACOTECTI ', 9),
(161, 'ILOBASCO', 9),
(162, 'JUTIAPA', 9),
(163, '  SAN ISIDRO', 9),
(164, '  SENSUNTEPEQUE', 9),
(165, 'TEJUTEPEQUE', 9),
(166, 'VICTORIA', 9),
(167, 'APASTEPEQUE', 10),
(168, '  GUADALUPE ', 10),
(169, 'SAN CAYETANO ISTEPEQUE  ', 10),
(170, 'SAN ESTEBAN CATARINA', 10),
(171, 'SAN ILDEFONSO  ', 10),
(172, 'SAN LORENZO ', 10),
(173, 'SAN SEBASTIÁN  ', 10),
(174, 'SAN VICENTE', 10),
(175, '  SANTA CLARA  ', 10),
(176, 'SANTO DOMINGO ', 10),
(177, 'TECOLUCA  ', 10),
(178, 'TEPETITÁN VERAPAZ', 10),
(179, 'VERAPAZ', 10),
(180, 'ALEGRÍA', 11),
(181, '  BERLÍN ', 11),
(182, ' CALIFORNIA  ', 11),
(183, 'CONCEPCIÓN BATRES', 11),
(184, '  EL TRIUNFO  ', 11),
(185, 'EREGUAYQUÍN ', 11),
(186, ' ESTANZUELAS', 11),
(187, 'JIQUILISCO', 11),
(188, '  JUCUAPA', 11),
(189, '  JUCUARÁN ', 11),
(190, 'MERCEDES UMAÑA', 11),
(191, '  NUEVA GRANADA ', 11),
(192, ' OZATLÁN  ', 11),
(193, 'PUERTO EL TRIUNFO ', 11),
(194, 'SAN AGUSTÍN', 11),
(195, 'SAN BUENAVENTURA ', 11),
(196, 'SAN DIONISIO  ', 11),
(197, 'SAN FRANCISCO JAVIER ', 11),
(198, 'SANTA ELENA  ', 11),
(199, 'SANTA MARÍA ', 11),
(200, 'SANTIAGO DE MARÍA  ', 11),
(201, 'TECAPÁN ', 11),
(202, 'USULUTÁN', 11),
(203, 'CAROLINA ', 12),
(204, ' CHAPELTIQUE', 12),
(205, 'CHINAMECA', 12),
(206, '  CHIRILAGUA', 12),
(207, '  CIUDAD BARRIOS ', 12),
(208, ' COMACARÁN ', 12),
(209, 'EL TRÁNSITO', 12),
(210, '  LOLOTIQUE ', 12),
(211, 'MONCAGUA  ', 12),
(212, 'NUEVA GUADALUPE ', 12),
(213, ' NUEVO EDÉN DE SAN JUAN  ', 12),
(214, 'QUELEPA ', 12),
(215, 'SAN ANTONIO DEL MOSCO ', 12),
(216, ' SAN GERARDO', 12),
(217, 'SAN JORGE  ', 12),
(218, 'SAN LUIS DE LA REINA', 12),
(219, '  SAN MIGUEL  ', 12),
(220, 'SAN RAFAEL ORIENTE', 12),
(221, '  SESORI ', 12),
(222, 'ULUAZAPA', 12),
(223, 'ARAMBALA  ', 13),
(224, 'CACAOPERA ', 13),
(225, 'CHILANGA', 13),
(226, 'CORINTO ', 13),
(227, ' DELICIAS DE CONCEPCIÓN ', 13),
(228, ' EL DIVISADERO ', 13),
(229, ' EL ROSARIO  ', 13),
(230, 'GUALOCOCTI', 13),
(231, '  GUATAJIAGUA', 13),
(232, 'JOATECA', 13),
(233, '  JOCOAITIQUE', 13),
(234, '  JOCORO ', 13),
(235, 'LOLOTIQUILLO ', 13),
(236, ' MEANGUERA  ', 13),
(237, 'OSICALA ', 13),
(238, ' PERQUÍN', 13),
(239, '  SAN CARLOS  ', 13),
(240, 'SAN FERNANDO', 13),
(241, '  SAN FRANCISCO', 13),
(242, ' GOTERA  ', 13),
(243, 'SAN ISIDRO ', 13),
(244, ' SAN SIMÓN ', 13),
(245, ' SENSEMBRA  ', 13),
(246, 'SOCIEDAD  ', 13),
(247, 'TOROLA ', 13),
(248, 'YAMABAL ', 13),
(249, 'YOLOAIQUÍN', 13),
(250, 'ANAMORÓS', 14),
(251, 'BOLIVAR', 14),
(252, '  CONCEPCIÓN DE ORIENTE', 14),
(253, 'CONCHAGUA ', 14),
(254, ' EL CARMEN  ', 14),
(255, 'EL SAUCE ', 14),
(256, 'INTIPUCÁ ', 14),
(257, 'LA UNIÓN ', 14),
(258, ' LISLIQUE ', 14),
(259, 'MEANGUERA DEL GOLFO ', 14),
(260, 'NUEVA ESPARTA ', 14),
(261, ' PASAQUINA', 14),
(262, 'POLORÓS  ', 14),
(263, 'SAN ALEJO  ', 14),
(264, 'SAN JOSÉ  ', 14),
(265, 'SANTA ROSA DE LIMA  ', 14),
(266, 'YUCUAIQUÍN ', 14),
(267, 'YAYANTIQUE ', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partido`
--

CREATE TABLE IF NOT EXISTS `partido` (
`id_partido` int(11) NOT NULL,
  `dui_responsable` varchar(10) NOT NULL,
  `responsable` varchar(100) NOT NULL,
  `partido` varchar(75) NOT NULL,
  `bandera` varchar(100) NOT NULL,
  `iniciales` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `partido`
--

INSERT INTO `partido` (`id_partido`, `dui_responsable`, `responsable`, `partido`, `bandera`, `iniciales`) VALUES
(1, '51654654', 'ghvmg', 'xxjkj', 'CAMPESINO.jpg', 'yu'),
(2, '147852', 'hggfyufuyf', 'chgcftftf', 'CAFE.jpg', 'tu'),
(3, '789654', 'rdfgh', 'dsxjfg', 'libertad.jpg', 'qw'),
(4, '789654', 'rdfgh', 'dsxjfg', 'libertad.jpg', 'qw'),
(5, '877778', 'genesis carolina', 'popular', 'popular.jpg', 'pp'),
(6, '147852', 'lucia margarita', 'campesino', 'CAMPESINO.jpg', 'cam'),
(7, '51654654', 'elmer ceiba', 'cafe', 'CAFE.jpg', 'kfe'),
(8, '888', 'zulma gonzales', 'esperanza', 'esperanza.png', 'espe'),
(9, '66552', 'luis mendez', 'libertad', 'libertad.jpg', 'libra'),
(10, '863698', 'blanca yuri', 'revolucion', 'revolucion.jpg', 'revo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presidente`
--

CREATE TABLE IF NOT EXISTS `presidente` (
`id_presidente` int(11) NOT NULL,
  `dui` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `partido` int(11) NOT NULL,
  `bandera` varchar(100) NOT NULL,
  `candidato` varchar(25) NOT NULL,
  `voto` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `presidente`
--

INSERT INTO `presidente` (`id_presidente`, `dui`, `nombre`, `apellido`, `partido`, `bandera`, `candidato`, `voto`) VALUES
(1, '7895', 'loko', 'fufu', 0, '1004608_434341370006421_62004613_n.jpg', 'Todo el pais', 8),
(2, '7895', 'loko', 'fufu', 0, '1004608_434341370006421_62004613_n.jpg', 'Todo el pais', 0),
(3, '251654', 'Jose Santiago', 'Dubon Henriquez', 0, '1920x1200_Zixpk_HD_Wallpaper_209.jpg', 'Todo el pais', 0),
(4, '7896541', 'Jason Verenice', 'Rodriguez Pereira', 0, '11033104_1604885193090878_3010906510650699735_n.jpg', 'Todo el pais', 0),
(5, '6969', 'wiki', 'ludki', 2, '1004608_434341370006421_62004613_n.jpg', 'Todo el pais', 2),
(6, '78945612-3', 'abigail', 'majano', 7, 'CAFE.jpg', 'Todo el pais', 1),
(7, '56568966-5', 'luis', 'alexander', 9, 'libertad.jpg', 'Todo el pais', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alcalde`
--
ALTER TABLE `alcalde`
 ADD PRIMARY KEY (`id_alcalde`);

--
-- Indices de la tabla `ciudadano`
--
ALTER TABLE `ciudadano`
 ADD PRIMARY KEY (`id_ciudadano`), ADD UNIQUE KEY `dui` (`dui`);

--
-- Indices de la tabla `coalisiones`
--
ALTER TABLE `coalisiones`
 ADD PRIMARY KEY (`id_coalisiones`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
 ADD PRIMARY KEY (`id_departamento`);

--
-- Indices de la tabla `diputado`
--
ALTER TABLE `diputado`
 ADD PRIMARY KEY (`id_diputado`);

--
-- Indices de la tabla `eleccion`
--
ALTER TABLE `eleccion`
 ADD PRIMARY KEY (`id_eleccion`);

--
-- Indices de la tabla `inicio`
--
ALTER TABLE `inicio`
 ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
 ADD PRIMARY KEY (`id_municipio`);

--
-- Indices de la tabla `partido`
--
ALTER TABLE `partido`
 ADD PRIMARY KEY (`id_partido`);

--
-- Indices de la tabla `presidente`
--
ALTER TABLE `presidente`
 ADD PRIMARY KEY (`id_presidente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alcalde`
--
ALTER TABLE `alcalde`
MODIFY `id_alcalde` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `ciudadano`
--
ALTER TABLE `ciudadano`
MODIFY `id_ciudadano` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `coalisiones`
--
ALTER TABLE `coalisiones`
MODIFY `id_coalisiones` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `diputado`
--
ALTER TABLE `diputado`
MODIFY `id_diputado` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `eleccion`
--
ALTER TABLE `eleccion`
MODIFY `id_eleccion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `inicio`
--
ALTER TABLE `inicio`
MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
MODIFY `id_municipio` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=268;
--
-- AUTO_INCREMENT de la tabla `partido`
--
ALTER TABLE `partido`
MODIFY `id_partido` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `presidente`
--
ALTER TABLE `presidente`
MODIFY `id_presidente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
