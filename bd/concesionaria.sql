CREATE DATABASE concesionaria;
use concesionaria10;

CREATE TABLE IF NOT EXISTS `modelo` (
  `idModelo` int(11) NOT NULL AUTO_INCREMENT,
  `nomModelo` varchar(45) DEFAULT NULL,
  `descModelo` text,
  PRIMARY KEY (`idModelo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;

--
-- Volcado de datos para la tabla `modelo`
--

INSERT INTO `modelo` (`idModelo`, `nomModelo`, `descModelo`) VALUES
(1, 'moto', 'descripcion de motos'),
(2, 'sedan', NULL),
(3, 'camioneta', NULL),
(4, 'bus', NULL),
(5, 'trailer', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE IF NOT EXISTS `vehiculo` (
  `idVehiculo` int(11) NOT NULL AUTO_INCREMENT,
  `nomVehiculo` varchar(100) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `detalle` text,
  `foto` varchar(100) DEFAULT NULL,
  `Modelo_idModelo` int(11) NOT NULL,
  PRIMARY KEY (`idVehiculo`),
  KEY `fk_Vehiculo_Modelo_idx` (`Modelo_idModelo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`idVehiculo`, `nomVehiculo`, `precio`, `detalle`, `foto`, `Modelo_idModelo`) VALUES
(1, 'auto uno', 2000, 'detalle de auto uno', 'auto1.png', 2),
(2, 'auto dos', 2002, 'detalle auto dos', 'auto2.jpg', 2),
(3, 'auto tres', 2003, 'detalle auto tres', 'auto3.png', 2),
(4, 'camioneta uno', 3000, 'detalle camioneta uno', 'camioneta.png', 3),
(5, 'bus uno', 4000, 'detalle bus uno', 'bus.jpg', 4),
(6, 'trailer uno', 23000, 'detalle trailer uno', 'trailer.jpeg', 5);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD CONSTRAINT `fk_Vehiculo_Modelo` FOREIGN KEY (`Modelo_idModelo`) REFERENCES `modelo` (`idModelo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

