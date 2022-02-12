-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-02-2022 a las 12:14:51
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

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
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` int(20) NOT NULL,
  `contraseña` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(2, 'TOYOTA COROLLA', 26550, 'El Toyota Corolla es el compacto híbrido más vendido y su duodécima generación sigue mostrándose como un vehículo muy práctico.\r\n\r\nEl Corolla ofrece una conducción enérgica con su innovador sistema híbrido autorrecargable. Descubre la nueva era del coche más vendido del mundo.', 'toyotacorola.png', 2, 'toyotacorola.png', 'totyotacorola2.png', 'toyotacorola3.png', '180 km/h', '11,1 segundos', 'combinado 4,5-5,3 l/100 km', '5 puertas', '4.370-4.653 mm Largo x 1.775-1.790 mm Alto x 1.435-1.460 mm Ancho', '125-180cv', '313 - 361 ', '1.798 cm³', 'Gasolina-Eléctrico', 'Automático'),
(3, 'MERCEDES CLASE S', 100.815, 'La berlina de lujo por excelencia llega al mercado con una gama inicial de motorizaciones compuesta por bloques de seis cilindros en línea diésel y gasolina.\r\n\r\nUn vehículo que llega al mercado como una de las berlinas tecnológicamente más avanzadas que puedes comprar.', 'mercedess.png', 2, 'mercedess.png', 'mercedesclases_2.png', 'mercedess4.png', '250 km/h', '0 a 100 km/h en 4,6 segundos', '9,1 l/100', '5 puertas', '5,03 - 6,5 m', '272-630cv', '720-1830 L', '2800 cm3', 'Gasolina, Diesel, Hibrido, Híbrido Enchufable', 'Automático'),
(4, 'PORSCHE GT3', 201350, 'El 911 GT3 y el 911 GT3 con paquete Touring también marca tendencia deportiva, principalmente en la carretera. Gracias a su ingeniosa aerodinámica, incluso sin un gran alerón trasero, en cada curva señala exactamente hacia donde se dirige.\r\nLos característicos rasgos de la nueva generación del Porsche 911 GT3 RS empiezan a dejarse ver más de la cuenta, a pesar de que esta versión más radical del icónico deportivo alemán sigue presentando un abultado camuflaje. La marca de Stuttgart se resiste a eliminar los paneles que ocultan determinadas piezas, \r\n\r\n\r\n\r\n', 'porsche.png', 4, 'porsche.png', 'porscheinterior.jpg', 'porsheatras.jpg', '318 km/h', '0-100 km/h en 3,4 segundos', '19.2 litros en circulación urbana, 9 en carretera y consumo de 12.8 litros', '2 puertas', 'Largo	4,557 mm (179″)\r\nAncho	1,880 mm (74″)\r\nAlto	1,298 mm (51″)', '520cv', '125 litros', '3.996 cm³', 'Gasolina', 'Automático o Manual'),
(5, 'CAMIONETA  F-150 FORD  ', 66000, 'Esta histórica camioneta, o pick-up como la llaman en Norteamérica, lleva siendo la camioneta más vendida en Estados Unidos durante 32 años. Desciende directamente de la serie F 100, famosa por estar construida en la misma fábrica que los bombarderos B-24. Se comenzó a fabricar en 1984 por Ford Motor Company y se le añadieron tanto cambios estéticos como en prestaciones que enamoraron a los amantes de los pick-up. ', 'camionetaford.png', 3, 'camionetaford.png', 'camionetafordazul.jpg', 'interiorcamionetaford.jpg', '202 km/h', '0 a 100 km/h en menos de 7 segundos', '19,88 l/100km', 'PickUp', '5911 x 2032 x 2004', '240-500cv', '2900L', '2750 cm3', 'Gasolina', 'automático'),
(6, 'MERCEDES CLASE X 6*6', 511550, 'Se trata de un modelo personalizado que se construyó en 2020. No es obra de Mercedes, aunque guarda cierto parentesco en el Mercedes G 63 AMG 6×6 de 2014. \r\n\r\nEsta preparación ha requerido de un bastidor auxiliar para integrar un tercer eje adicional en la parte trasera. Se ha elevado la altura de la suspensión en 10 cm y se han instalado seis llantas con neumáticos todoterreno.\r\n\r\nEn el interior apenas hay cambios, con asientos de cuero y molduras plateadas. El emblema ‘6Wheeler’ aparece en el salpicadero, mientras que la cámara de visión trasera sigue operativa a pesar de la cama extendida. Bajo el capó, el Mercedes Clase X de seis ruedas está basado en el X 350 d. Así, un motor turbodiésel V6 de 3.0 litros genera 258 CV de potencia y 550 Nm de par motor máximo. El propulsor está asociado a un cambio automático de nueve velocidades y a un sistema de tracción total 4MATIC.', 'mercedesclasex.png', 3, 'mercedes-x-delante.jpg', 'MercedesXinterior.jpg', 'mercedes-x-detras.jpg', '184km/h', '(0-100 km / h). 12.9 s', '7.5 L/100 Km', 'PickUp', '5,34 metros de longitud, 1,92 de anchura y 1,82 de altura,', '258 CV', '2350L', '2800cm3', 'Diesel', 'Automático'),
(9, 'ACURA NSX', 161282, 'Elaborado a mano por técnicos maestros en el PMC (Performance Manufacturing Center) con una producción limitada de 350 unidades en todo el mundo, el nuevo NSX representa el ápice del manejo dinámico digno del emblema Type S. El NSX Type S sigue haciendo honor a su linaje con una ingeniería meticulosa y un diseño impactante, a la vez que desafía los límites de lo posible con más potencia y sonido para ofrecer un manejo más lleno de adrenalina.', 'acura.png', 4, 'acura.png', 'acura2.png', 'acura3.png', '308 km/h', ' 0-100 km/h en 2 segundos', '10.4/10/10.1 L/100 Km', '2 puertas', '4487 / 1939 / 1204 mm', '581 CV', '110 litros', '3493 CC', 'Gasolina ', 'Automático con 9 velocidades');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`idModelo`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `idVehiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD CONSTRAINT `fk_Vehiculo_Modelo` FOREIGN KEY (`Modelo_idModelo`) REFERENCES `modelo` (`idModelo`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
