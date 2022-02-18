-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-02-2022 a las 13:35:30
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `concesionario`
--
CREATE DATABASE concesionario;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `MarcID` smallint(6) NOT NULL,
  `MarcDesc` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`MarcID`, `MarcDesc`) VALUES
(1, ' MARCA'),
(2, 'AGRALE'),
(3, 'ALFA ROMEO'),
(4, 'AUDI'),
(5, 'BMW'),
(6, 'CHERY'),
(7, 'CHEVROLET'),
(8, 'CHRYSLER'),
(9, 'CITROEN'),
(10, 'DACIA'),
(11, 'DAEWO'),
(12, 'DAIHATSU'),
(13, 'DODGE'),
(14, 'FERRARI'),
(15, 'FIAT'),
(16, 'FORD'),
(17, 'GALLOPER'),
(18, 'HEIBAO'),
(19, 'HONDA'),
(20, 'HYUNDAI'),
(21, 'ISUZU'),
(22, 'JAGUAR'),
(23, 'JEEP'),
(24, 'KIA'),
(25, 'LADA'),
(26, 'LAND ROVER'),
(27, 'LEXUS'),
(28, 'MASERATI'),
(29, 'MAZDA'),
(30, 'MERCEDES BENZ'),
(31, 'MG'),
(32, 'MINI'),
(33, 'MITSUBISHI'),
(34, 'NISSAN'),
(35, 'PEUGEOT'),
(36, 'PORSCHE'),
(37, 'RAM'),
(38, 'RENAULT'),
(39, 'ROVER'),
(40, 'SAAB'),
(41, 'SEAT'),
(42, 'SMART'),
(43, 'SSANGYONG'),
(44, 'SUBARU'),
(45, 'SUZUKI'),
(46, 'TATA'),
(47, 'TOYOTA'),
(48, 'VOLKSWAGEN'),
(49, 'VOLVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelo`
--

CREATE TABLE `modelo` (
  `idModelo` int(11) NOT NULL,
  `nomModelo` varchar(45) DEFAULT NULL,
  `descModelo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `modelo`
--

INSERT INTO `modelo` (`idModelo`, `nomModelo`, `descModelo`) VALUES
(2, 'sedan', ''),
(3, 'camioneta', NULL),
(4, 'deportivos', NULL),
(5, 'trailer', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelomarca`
--

CREATE TABLE `modelomarca` (
  `ModelId` int(11) NOT NULL,
  `ModelDesc` char(100) NOT NULL,
  `MarcID` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `modelomarca`
--

INSERT INTO `modelomarca` (`ModelId`, `ModelDesc`, `MarcID`) VALUES
(1, ' MODELO', 1),
(2, 'MARRUA', 2),
(3, '147', 3),
(4, '156', 3),
(5, '159', 3),
(6, '166', 3),
(7, 'BRERA', 3),
(8, 'GIULIETTA', 3),
(9, 'GT', 3),
(10, 'GTV', 3),
(11, 'MITO', 3),
(12, 'SPIDER', 3),
(13, 'A1', 4),
(14, 'A3', 4),
(15, 'A4', 4),
(16, 'A5', 4),
(17, 'A6', 4),
(18, 'A7', 4),
(19, 'A8', 4),
(20, 'ALLROAD', 4),
(21, 'Q3', 4),
(22, 'Q5', 4),
(23, 'Q7', 4),
(24, 'R8', 4),
(25, 'TT', 4),
(26, 'SERIE1', 5),
(27, 'SERIE3', 5),
(28, 'SERIE5', 5),
(29, 'SERIE6', 5),
(30, 'SERIE7', 5),
(31, 'X1', 5),
(32, 'X3', 5),
(33, 'X5', 5),
(34, 'X6', 5),
(35, 'Z3', 5),
(36, 'Z4', 5),
(37, 'FACE', 6),
(38, 'FULWIN', 6),
(39, 'QQ', 6),
(40, 'SKIN', 6),
(41, 'TIGGO', 6),
(42, 'AGILE', 7),
(43, 'ASTRA', 7),
(44, 'ASTRA II', 7),
(45, 'AVALANCHE', 7),
(46, 'AVEO', 7),
(47, 'BLAZER', 7),
(48, 'CAMARO', 7),
(49, 'CAPTIVA', 7),
(50, 'CELTA', 7),
(51, 'CLASSIC', 7),
(52, 'COBALT', 7),
(53, 'CORSA', 7),
(54, 'CORSA CLASSIC', 7),
(55, 'CORSA II', 7),
(56, 'CORVETTE', 7),
(57, 'CRUZE', 7),
(58, 'MERIVA', 7),
(59, 'MONTANA', 7),
(60, 'ONIX', 7),
(61, 'PRISMA', 7),
(62, 'VECTRA', 7),
(63, 'S-10', 7),
(64, 'SILVERADO', 7),
(65, 'SONIC', 7),
(66, 'SPARK', 7),
(67, 'SPIN', 7),
(68, 'TRACKER', 7),
(69, 'TRAILBLAZER', 7),
(70, 'ZAFIRA', 7),
(71, '300', 8),
(72, 'CARAVAN', 8),
(73, 'TOWN & COUNTRY', 8),
(74, 'GRAND CARAVAN', 8),
(75, 'CROSSFIRE', 8),
(76, 'NEON', 8),
(77, 'PT CRUISER', 8),
(78, 'SEBRIG', 8),
(79, 'BERLINGO', 9),
(80, 'C3', 9),
(81, 'C3 AIRCROSS', 9),
(82, 'C3 PICASSO', 9),
(83, 'C4 AIRCROSS', 9),
(84, 'C4 LOUNGE', 9),
(85, 'C4 PICASSO', 9),
(86, 'C4 GRAND PICASSO', 9),
(87, 'C5', 9),
(88, 'C6', 9),
(89, 'DS3', 9),
(90, 'DS4', 9),
(91, 'C15', 9),
(92, 'JUMPER', 9),
(93, 'SAXO', 9),
(94, 'XSARA', 9),
(95, 'XSARA PICASSO', 9),
(96, 'PICK-UP', 10),
(97, 'LANOS', 11),
(98, 'LEGANZA', 11),
(99, 'NUBIRA', 11),
(100, 'MATIZ', 11),
(101, 'TACUMA', 11),
(102, 'DAMAS', 11),
(103, 'LABO', 11),
(104, 'MOVE', 12),
(105, 'ROCKY', 12),
(106, 'SIRION', 12),
(107, 'TERIOS', 12),
(108, 'MIRA', 12),
(109, 'JOURNEY', 13),
(110, 'RAM', 13),
(111, '360', 14),
(112, '430', 14),
(113, '456', 14),
(114, '575', 14),
(115, '599', 14),
(116, '612', 14),
(117, 'CALIFORNIA', 14),
(118, 'SUPERAMERICA', 14),
(119, '500', 15),
(120, 'BRAVA', 15),
(121, 'BRAVO', 15),
(122, 'DOBLO', 15),
(123, 'DUCATO', 15),
(124, 'FIORINO', 15),
(125, 'FIORINO QUBO', 15),
(126, 'IDEA', 15),
(127, 'LINEA', 15),
(128, 'MAREA', 15),
(129, 'PALIO', 15),
(130, 'PALIO ADVENTURE', 15),
(131, 'PUNTO', 15),
(132, 'QUBO', 15),
(133, 'SIENA', 15),
(134, 'GRAND SIENA', 15),
(135, 'STILO', 15),
(136, 'STRADA', 15),
(137, 'UNO', 15),
(138, 'UNO EVO', 15),
(139, 'COURIER', 16),
(140, 'ECOSPORT', 16),
(141, 'ECOSPORT KD', 16),
(142, 'ESCAPE', 16),
(143, 'F100', 16),
(144, 'FIESTA KD', 16),
(145, 'FIESTA', 16),
(146, 'FOCUS', 16),
(147, 'FOCUS III', 16),
(148, 'KA', 16),
(149, 'KUGA', 16),
(150, 'MONDEO', 16),
(151, 'RANGER', 16),
(152, 'S-MAX', 16),
(153, 'TRANSIT', 16),
(154, 'EXCEED', 17),
(155, 'HB', 18),
(156, 'ACCORD', 19),
(157, 'CITY', 19),
(158, 'CIVIC', 19),
(159, 'CRV', 19),
(160, 'FIT', 19),
(161, 'HRV', 19),
(162, 'LEGEND', 19),
(163, 'PILOT', 19),
(164, 'STREAM', 19),
(165, 'ACCENT', 20),
(166, 'ATOS PRIME', 20),
(167, 'COUPE', 20),
(168, 'ELANTRA', 20),
(169, 'I 10', 20),
(170, 'I 30', 20),
(171, 'MATRIX', 20),
(172, 'SANTA FE', 20),
(173, 'SONATA', 20),
(174, 'TERRACAN', 20),
(175, 'TRAJET', 20),
(176, 'TUCSON', 20),
(177, 'VELOSTER', 20),
(178, 'VERACRUZ', 20),
(179, 'AMIGO', 21),
(180, 'PICK-UP CABIAN SIMPLE', 21),
(181, 'PICK-UP SPACE CAB', 21),
(182, 'PICK-UP CABINA DOBLE', 21),
(183, 'TROOPER', 21),
(184, 'X-TYPE', 22),
(185, 'XF', 22),
(186, 'F-TYPE', 22),
(187, 'S-TYPE', 22),
(188, 'XJ', 22),
(189, 'XK', 22),
(190, 'CHEROKEE', 23),
(191, 'COMPASS', 23),
(192, 'GRAND CHEROKEE', 23),
(193, 'PATRIOT', 23),
(194, 'WRANGLER', 23),
(195, 'CARENS', 24),
(196, 'CARNIVAL', 24),
(197, 'CERATO', 24),
(198, 'MAGENTIS', 24),
(199, 'MOHAVE', 24),
(200, 'OPIRUS', 24),
(201, 'PICANTO', 24),
(202, 'RIO', 24),
(203, 'RONDO', 24),
(204, 'SPORTAGE', 24),
(205, 'GRAND SPORTAGE', 24),
(206, 'SORENTO', 24),
(207, 'SOUL', 24),
(208, 'PREGIO', 24),
(209, 'AFALINA', 25),
(210, 'SAMARA', 25),
(211, 'DEFENDER', 26),
(212, 'DISCOVERY', 26),
(213, 'FREELANDER', 26),
(214, 'RANGE ROVER', 26),
(215, 'LS', 27),
(216, 'GS', 27),
(217, 'IS', 27),
(218, 'QUATTROPORTE', 28),
(219, 'COUPE', 28),
(220, 'GRAND TURISMO', 28),
(221, 'SPYDER', 28),
(222, '323', 29),
(223, '626', 29),
(224, 'MPV', 29),
(225, 'B 2500', 29),
(226, 'B 2900', 29),
(227, 'AMG', 30),
(228, 'CLASE A', 30),
(229, 'CLASE B', 30),
(230, 'CLASE C', 30),
(231, 'CLASE CL', 30),
(232, 'CLASE CLA', 30),
(233, 'CLASE CLC', 30),
(234, 'CLASE CLK', 30),
(235, 'CLASE CLS', 30),
(236, 'CLASE E', 30),
(237, 'CLASE G', 30),
(238, 'CLASE GL', 30),
(239, 'CLASE ML', 30),
(240, 'CLASE S', 30),
(241, 'CLASE SL', 30),
(242, 'CLASE SLK', 30),
(243, 'VIANO', 30),
(244, 'MGF', 31),
(245, 'COOPER', 32),
(246, 'CANTER', 33),
(247, 'L-200', 33),
(248, 'LANCER', 33),
(249, 'MONTERO', 33),
(250, 'NATIVA', 33),
(251, 'OUTLANDER', 33),
(252, '350', 34),
(253, '370Z', 34),
(254, 'PATHFINDER', 34),
(255, 'FRONTIER', 34),
(256, 'MARCH', 34),
(257, 'MURANO', 34),
(258, 'NP300', 34),
(259, 'PICK-UP', 34),
(260, 'SENTRA', 34),
(261, 'TEANA', 34),
(262, 'TERRANO II', 34),
(263, 'TIIDA', 34),
(264, 'VERSA', 34),
(265, 'X-TERRA', 34),
(266, 'X-TRAIL', 34),
(267, '106', 35),
(268, '206', 35),
(269, '207', 35),
(270, '208', 35),
(271, '306', 35),
(272, '307', 35),
(273, '308', 35),
(274, '3008', 35),
(275, '405', 35),
(276, '406', 35),
(277, '407', 35),
(278, '408', 35),
(279, '4008', 35),
(280, '508', 35),
(281, '5008', 35),
(282, '607', 35),
(283, '806', 35),
(284, '807', 35),
(285, 'RCZ', 35),
(286, 'EXPERT', 35),
(287, 'HOGGAR', 35),
(288, 'PARTNER', 35),
(289, 'BOXER', 35),
(290, '911', 36),
(291, 'BOXSTER', 36),
(292, 'CAYENNE', 36),
(293, 'CAYMAN', 36),
(294, 'PANAMERA', 36),
(295, '1500', 37),
(296, '2500', 37),
(297, 'CLIO MIO', 38),
(298, 'CLIO L/NUEVA', 38),
(299, 'CLIO 2', 38),
(300, 'DUSTER', 38),
(301, 'FLUENCE', 38),
(302, 'KANGOO', 38),
(303, 'KANGOO FURGON', 38),
(304, 'KOLEOS', 38),
(305, 'LAGUNA', 38),
(306, 'LATITUDE', 38),
(307, 'LOGAN', 38),
(308, 'MEGANE', 38),
(309, 'MEGANE II', 38),
(310, 'MEGANE III', 38),
(311, 'SANDERO', 38),
(312, 'SANDERO STEPWAY', 38),
(313, 'SCENIC', 38),
(314, 'SYMBOL', 38),
(315, 'TWINGO', 38),
(316, 'TRAFIC', 38),
(317, 'MASTER', 38),
(318, 'LINEA 25', 39),
(319, 'LINEA 45', 39),
(320, 'LINEA 75', 39),
(321, 'LINEA 9.3', 39),
(322, 'LINEA 9.5', 39),
(323, 'ALHAMBRA', 40),
(324, 'ALTEA', 40),
(325, 'CORDOBA', 40),
(326, 'IBIZA', 40),
(327, 'INCA FURGON', 40),
(328, 'LEON', 40),
(329, 'TOLEDO', 40),
(330, 'FORTWO', 41),
(331, 'ACTYON', 42),
(332, 'KORANDO', 42),
(333, 'KYRON', 42),
(334, 'ISTANA', 42),
(335, 'MUSSO', 42),
(336, 'REXTON', 42),
(337, 'STAVIC', 42),
(338, 'IMPREZA', 43),
(339, 'LEGACY', 43),
(340, 'OUTBACK', 43),
(341, 'TRIBECA', 43),
(342, 'XV', 43),
(343, 'FORESTER', 43),
(344, 'FUN', 44),
(345, 'GRAND VITARA', 44),
(346, 'SWIFT', 44),
(347, 'JIMNY', 44),
(348, '207 TELCOLINE', 45),
(349, 'SUMO', 46),
(350, '86', 47),
(351, 'AVENSIS', 47),
(352, 'CAMRY', 47),
(353, 'COROLLA', 47),
(354, 'CORONA', 47),
(355, 'ETIOS', 47),
(356, 'ETIOS CROSS', 47),
(357, 'HILUX', 47),
(358, 'LAND CRUISER', 47),
(359, 'PRIUS', 47),
(360, 'RAV 4', 47),
(361, 'AMAROK', 48),
(362, 'BORA', 48),
(363, 'CADDY', 48),
(364, 'CROSSFOX', 48),
(365, 'FOX', 48),
(366, 'GOL', 48),
(367, 'GOL TREND', 48),
(368, 'GOLF', 48),
(369, 'MULTIVAN', 48),
(370, 'THE BEETLE', 48),
(371, 'NEW BEETLE', 48),
(372, 'PASSAT', 48),
(373, 'CC', 48),
(374, 'POLO', 48),
(375, 'SANTANA', 48),
(376, 'SAVEIRO', 48),
(377, 'SCIROCCO', 48),
(378, 'SHARAN', 48),
(379, 'SURAN', 48),
(380, 'TIGUAN', 48),
(381, 'TOUAREG', 48),
(382, 'TRANSPORTER', 48),
(383, 'UP', 48),
(384, 'VENTO', 48),
(385, 'VOYAGE', 48),
(386, 'C30', 49),
(387, 'C70', 49),
(388, 'S40', 49),
(389, 'S60', 49),
(390, 'S80', 49),
(391, 'V40', 49),
(392, 'V50', 49),
(393, 'V60', 49),
(394, 'V70', 49),
(395, 'XC60', 49),
(396, 'XC70', 49),
(397, 'XC90', 49);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `segundamano`
--

CREATE TABLE `segundamano` (
  `nombre` varchar(100) NOT NULL,
  `precio` int(20) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `potencia` varchar(50) NOT NULL,
  `combustible` varchar(50) NOT NULL,
  `año` int(10) NOT NULL,
  `kilometros` int(20) NOT NULL,
  `matricula` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `segundamano`
--

INSERT INTO `segundamano` (`nombre`, `precio`, `tipo`, `potencia`, `combustible`, `año`, `kilometros`, `matricula`) VALUES
('nombre', 0, '1', '10', '1', 18, 13, 'ds'),
('nombre', 0, '1', '10', '1', 18, 13, 'ds');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tasacion`
--

CREATE TABLE `tasacion` (
  `MarcID` varchar(50) NOT NULL,
  `ModelId` varchar(50) NOT NULL,
  `año` int(11) NOT NULL,
  `kilometros` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tasacion`
--

INSERT INTO `tasacion` (`MarcID`, `ModelId`, `año`, `kilometros`) VALUES
('3', '5', 1, 21),
('9', '83', 1, 12),
('9', '83', 1, 12),
('9', '83', 1, 12),
('9', '83', 1, 12),
('9', '83', 1, 12),
('9', '83', 1, 12),
('2', '2', 2, 21),
('2', '2', 2, 21),
('3', '3', 1, 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` int(20) NOT NULL,
  `contraseña` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `usuario`, `correo`, `telefono`, `contraseña`) VALUES
(1, 'miguel', 'sanchez', 'maikk96', 'miguelhorneros@gmail.com', 628051137, '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4'),
(2, 'Prueba', 'prueba', 'prueba', 'prueba', 2, '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4'),
(7, 'asd', 'asd', 'asd', 'das', 0, '6b51d431df5d7f141cbececcf79edf3dd861c3b4069f0b11661a3eefacbba918'),
(8, 'Miguel', 'sd', 'sa', 'asd', 0, '6b51d431df5d7f141cbececcf79edf3dd861c3b4069f0b11661a3eefacbba918'),
(9, 'dsfas', 'dsf', 'ads', 'sdaf', 0, '6b51d431df5d7f141cbececcf79edf3dd861c3b4069f0b11661a3eefacbba918'),
(10, 'Miguel', 'dsfas', 'sdaf', 'sadfsdaf', 0, '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4'),
(11, 'dsas', 'sadas', 'asd', 'asd', 0, '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4'),
(12, '2321', 'ds', 'ds', 'asd', 0, '6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c01e52ddb7875b4b'),
(13, 'Miguel', 'prueba', 'dsfasd', 'asdf', 0, '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4'),
(14, 'sdfa', 'dsf', 'dfasdf', 'miguelhorneros@gmail.com', 0, 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3'),
(15, 'Miguel', 'sadas', 'maikk96', 'miguelhorneros@gmail.com', 1234, '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4'),
(16, 'Miguel', 'prueba', 'maikk96', 'miguelhornedddros@gmail.com', 0, '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4'),
(17, 'Miguel', 'dsf', 'maikk96', 'miguelhodddrneros@gmail.com', 0, '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `idVehiculo` int(11) NOT NULL,
  `nomVehiculo` varchar(100) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `detalle` text DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `Modelo_idModelo` int(11) NOT NULL,
  `foto1` varchar(25) NOT NULL,
  `foto2` varchar(25) NOT NULL,
  `foto3` varchar(25) NOT NULL,
  `velocidadmax` varchar(100) NOT NULL,
  `aceleracion` varchar(100) NOT NULL,
  `consumo` varchar(100) NOT NULL,
  `carroceria` varchar(100) NOT NULL,
  `dimensiones` varchar(100) NOT NULL,
  `potencia` varchar(100) NOT NULL,
  `maletero` varchar(100) NOT NULL,
  `cilindrada` varchar(100) NOT NULL,
  `combustible` varchar(100) NOT NULL,
  `cambio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`idVehiculo`, `nomVehiculo`, `precio`, `detalle`, `foto`, `Modelo_idModelo`, `foto1`, `foto2`, `foto3`, `velocidadmax`, `aceleracion`, `consumo`, `carroceria`, `dimensiones`, `potencia`, `maletero`, `cilindrada`, `combustible`, `cambio`) VALUES
(1, 'RENAULT CLIO', 14700, 'El Renault Clio es un coche cómodo y muy resultón, se desenvuelve muy bien en ciudad y en carretera, resolviendo bien adelantamientos de último momento.', 'renaultclio.png', 2, 'renaultclio.png', 'renaultclio2.png', 'renaultclio3.png', '178 km/h', '14,7 s', '4,3/3,2/3,6 l/100 km ', '5 puertas ', '4.050 /1.988 /1.440 mm', '85 cv /\r\n3.750 rpm ', '366 litros-1.069 litros', '1.461 cc', 'Diésel', 'Manual'),
(2, 'TOYOTA COROLLA', 26550, 'El Toyota Corolla es el compacto híbrido más vendido y su duodécima generación sigue mostrándose como un vehículo muy práctico.\n\nEl Corolla ofrece una conducción enérgica con su innovador sistema híbrido autorrecargable. Descubre la nueva era del coche más vendido del mundo.', 'toyotacorola.png', 2, 'toyotacorola.png', 'totyotacorola2.png', 'toyotacorola3.png', '180 km/h', '11,1 segundos', 'combinado 4,5-5,3 l/100 km', '5 puertas', '4.370-4.653 mm Largo x 1.775-1.790 mm Alto x 1.435-1.460 mm Ancho', '125-180cv', '313 - 361 ', '1.798 cm³', 'Gasolina-Eléctrico', 'Automático'),
(3, 'MERCEDES CLASE S', 100.815, 'La berlina de lujo por excelencia llega al mercado con una gama inicial de motorizaciones compuesta por bloques de seis cilindros en línea diésel y gasolina.\r\n\r\nUn vehículo que llega al mercado como una de las berlinas tecnológicamente más avanzadas que puedes comprar.', 'mercedess.png', 2, 'mercedess.png', 'mercedesclases_2.png', 'mercedess4.png', '250 km/h', '0 a 100 km/h en 4,6 segundos', '9,1 l/100', '5 puertas', '5,03 - 6,5 m', '272-630cv', '720-1830 L', '2800 cm3', 'Gasolina, Diesel, Hibrido, Híbrido Enchufable', 'Automático'),
(4, 'PORSCHE GT3', 201350, 'El 911 GT3 y el 911 GT3 con paquete Touring también marca tendencia deportiva, principalmente en la carretera. Gracias a su ingeniosa aerodinámica, incluso sin un gran alerón trasero, en cada curva señala exactamente hacia donde se dirige.\r\nLos característicos rasgos de la nueva generación del Porsche 911 GT3 RS empiezan a dejarse ver más de la cuenta, a pesar de que esta versión más radical del icónico deportivo alemán sigue presentando un abultado camuflaje. La marca de Stuttgart se resiste a eliminar los paneles que ocultan determinadas piezas, \r\n\r\n\r\n\r\n', 'porsche.png', 4, 'porsche.png', 'porscheinterior.jpg', 'porsheatras.jpg', '318 km/h', '0-100 km/h en 3,4 segundos', '19.2 litros en circulación urbana, 9 en carretera y consumo de 12.8 litros', '2 puertas', 'Largo	4,557 mm (179″)\r\nAncho	1,880 mm (74″)\r\nAlto	1,298 mm (51″)', '520cv', '125 litros', '3.996 cm³', 'Gasolina', 'Automático o Manual'),
(5, 'CAMIONETA  F-150 FORD  ', 66000, 'Esta histórica camioneta, o pick-up como la llaman en Norteamérica, lleva siendo la camioneta más vendida en Estados Unidos durante 32 años. Desciende directamente de la serie F 100, famosa por estar construida en la misma fábrica que los bombarderos B-24. Se comenzó a fabricar en 1984 por Ford Motor Company y se le añadieron tanto cambios estéticos como en prestaciones que enamoraron a los amantes de los pick-up. ', 'camionetaford.png', 3, 'camionetaford.png', 'camionetafordazul.jpg', 'interiorcamionetaford.jpg', '202 km/h', '0 a 100 km/h en menos de 7 segundos', '19,88 l/100km', 'PickUp', '5911 x 2032 x 2004', '240-500cv', '2900L', '2750 cm3', 'Gasolina', 'automático'),
(6, 'MERCEDES CLASE X 6*6', 511550, 'Se trata de un modelo personalizado que se construyó en 2020. No es obra de Mercedes, aunque guarda cierto parentesco en el Mercedes G 63 AMG 6×6 de 2014. \r\n\r\nEsta preparación ha requerido de un bastidor auxiliar para integrar un tercer eje adicional en la parte trasera. Se ha elevado la altura de la suspensión en 10 cm y se han instalado seis llantas con neumáticos todoterreno.\r\n\r\nEn el interior apenas hay cambios, con asientos de cuero y molduras plateadas. El emblema ‘6Wheeler’ aparece en el salpicadero, mientras que la cámara de visión trasera sigue operativa a pesar de la cama extendida. Bajo el capó, el Mercedes Clase X de seis ruedas está basado en el X 350 d. Así, un motor turbodiésel V6 de 3.0 litros genera 258 CV de potencia y 550 Nm de par motor máximo. El propulsor está asociado a un cambio automático de nueve velocidades y a un sistema de tracción total 4MATIC.', 'mercedesclasex.png', 3, 'mercedes-x-delante.jpg', 'MercedesXinterior.jpg', 'mercedes-x-detras.jpg', '184km/h', '(0-100 km / h). 12.9 s', '7.5 L/100 Km', 'PickUp', '5,34 metros de longitud, 1,92 de anchura y 1,82 de altura,', '258 CV', '2350L', '2800cm3', 'Diesel', 'Automático'),
(9, 'ACURA NSX', 161282, 'Elaborado a mano por técnicos maestros en el PMC (Performance Manufacturing Center) con una producción limitada de 350 unidades en todo el mundo, el nuevo NSX representa el ápice del manejo dinámico digno del emblema Type S. El NSX Type S sigue haciendo honor a su linaje con una ingeniería meticulosa y un diseño impactante, a la vez que desafía los límites de lo posible con más potencia y sonido para ofrecer un manejo más lleno de adrenalina.', 'acura.png', 4, 'acura.png', 'acura2.png', 'acura3.png', '308 km/h', ' 0-100 km/h en 2 segundos', '10.4/10/10.1 L/100 Km', '2 puertas', '4487 / 1939 / 1204 mm', '581 CV', '110 litros', '3493 CC', 'Gasolina ', 'Automático con 9 velocidades');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`MarcID`);

--
-- Indices de la tabla `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`idModelo`);

--
-- Indices de la tabla `modelomarca`
--
ALTER TABLE `modelomarca`
  ADD PRIMARY KEY (`ModelId`),
  ADD KEY `IMODELO1` (`MarcID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`idVehiculo`),
  ADD KEY `fk_Vehiculo_Modelo_idx` (`Modelo_idModelo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `modelo`
--
ALTER TABLE `modelo`
  MODIFY `idModelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `idVehiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `modelomarca`
--
ALTER TABLE `modelomarca`
  ADD CONSTRAINT `IMODELO1` FOREIGN KEY (`MarcID`) REFERENCES `marca` (`MarcID`);

--
-- Filtros para la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD CONSTRAINT `fk_Vehiculo_Modelo` FOREIGN KEY (`Modelo_idModelo`) REFERENCES `modelo` (`idModelo`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
