-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-08-2015 a las 17:14:02
-- Versión del servidor: 5.5.39
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `profesionales`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilios`
--

CREATE TABLE IF NOT EXISTS `domicilios` (
`id` int(11) NOT NULL,
  `idprofesional` int(11) NOT NULL,
  `idtipodom` int(11) NOT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `idlocalidad` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `domicilios`
--

INSERT INTO `domicilios` (`id`, `idprofesional`, `idtipodom`, `direccion`, `idlocalidad`) VALUES
(18, 15, 1, 'iu98798', 2),
(20, 16, 1, 'iu98798', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidades`
--

CREATE TABLE IF NOT EXISTS `especialidades` (
`id` int(11) NOT NULL,
  `esp_nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidades`
--

CREATE TABLE IF NOT EXISTS `localidades` (
`id` int(11) NOT NULL,
  `provincia_id` int(11) NOT NULL,
  `ciudad` varchar(45) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `localidades`
--

INSERT INTO `localidades` (`id`, `provincia_id`, `ciudad`) VALUES
(1, 1, 'Corrientes'),
(2, 1, 'Bella Vista'),
(3, 1, 'Concepcion'),
(4, 1, 'Beron de Astrada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesionales`
--

CREATE TABLE IF NOT EXISTS `profesionales` (
`id` int(11) NOT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `idusuario` int(11) NOT NULL,
  `observaciones` varchar(3000) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `profesionales`
--

INSERT INTO `profesionales` (`id`, `apellido`, `nombre`, `telefono`, `idusuario`, `observaciones`) VALUES
(1, 'Gonzalez', 'Elena', 4444444, 1, 'Profesion: Programador'),
(2, 'Perez', 'Juan', 333333, 21, '21'),
(3, 'Perez', 'Juan', 333333, 22, '22'),
(4, 'Perez', 'Juan', 333333, 23, '23'),
(5, 'Perez', 'Juan', 333333, 24, '24'),
(6, 'Perez', 'Juan', 333333, 25, '25'),
(7, 'Perez', 'Juan', 333333, 26, '26'),
(8, 'Perez', 'Juan', 333333, 27, '27'),
(9, 'Perez', 'Juan', 333333, 28, '28'),
(10, 'Perez', 'Juan', 333333, 29, '29'),
(11, 'Perez', 'Juan', 333333, 30, '30'),
(12, 'Perez', 'Juan', 333333, 31, '31'),
(13, 'Perez', 'Juan', 333333, 32, '32'),
(14, 'Perez', 'Juan', 333333, 33, '33'),
(15, 'jlk', 'pepe', 398398, 34, '34'),
(16, 'jlk', 'pepe', 398398, 35, '35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesional_has_especialidad`
--

CREATE TABLE IF NOT EXISTS `profesional_has_especialidad` (
  `profesional_idprofesional` int(11) NOT NULL,
  `especialidad_idespecialidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE IF NOT EXISTS `provincias` (
`id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`id`, `nombre`) VALUES
(1, 'Corrientes'),
(2, 'Chaco');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_domicilios`
--

CREATE TABLE IF NOT EXISTS `tipo_domicilios` (
`id` int(11) NOT NULL,
  `descripcion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tipo_domicilios`
--

INSERT INTO `tipo_domicilios` (`id`, `descripcion`) VALUES
(1, 'Particular'),
(2, 'Oficina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`id` int(10) NOT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `clave` varchar(255) DEFAULT NULL,
  `mail` varchar(45) NOT NULL,
  `rol` varchar(20) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `clave`, `mail`, `rol`) VALUES
(1, 'ele', 'ele', '', 'admin'),
(2, 'Pepe', '123', 'pepe@algo.com', 'usuario'),
(3, 'Juan', '123', 'juanperez@algo.com', 'usuario'),
(4, 'Juan', '123', 'juanperez@algo.com', 'usuario'),
(5, 'Juan', '123', 'juanperez@algo.com', 'usuario'),
(6, 'Juan', '123', 'juanperez@algo.com', 'usuario'),
(7, 'Juan', '123', 'juanperez@algo.com', 'usuario'),
(8, 'Juan', '123', 'juanperez@algo.com', 'usuario'),
(9, 'Juan', '123', 'juanperez@algo.com', 'usuario'),
(10, 'Juan', '123', 'juanperez@algo.com', 'usuario'),
(11, 'Juan', '123', 'juanperez@algo.com', 'usuario'),
(12, 'Juan', '123', 'juanperez@algo.com', 'usuario'),
(13, 'Juan', '123', 'juanperez@algo.com', 'usuario'),
(14, 'Juan', '123', 'juanperez@algo.com', 'usuario'),
(15, 'Juan', '123', 'juanperez@algo.com', 'usuario'),
(16, 'Juan', '123', 'juanperez@algo.com', 'usuario'),
(17, 'Juan', '123', 'juanperez@algo.com', 'usuario'),
(18, 'Juan', '123', 'juanperez@algo.com', 'usuario'),
(19, 'Juan', '123', 'juanperez@algo.com', 'usuario'),
(20, 'Juan', '123', 'juanperez@algo.com', 'usuario'),
(21, 'Juan', '123', 'juanperez@algo.com', 'usuario'),
(22, 'Juan', '123', 'juanperez@algo.com', 'usuario'),
(23, 'Juan', '123', 'juanperez@algo.com', 'usuario'),
(24, 'Juan', '123', 'juanperez@algo.com', 'usuario'),
(25, 'Juan', '123', 'juanperez@algo.com', 'usuario'),
(26, 'Juan', '123', 'juanperez@algo.com', 'usuario'),
(27, 'Juan', '123', 'juanperez@algo.com', 'usuario'),
(28, 'Juan', '123', 'juanperez@algo.com', 'usuario'),
(29, 'Juan', '123', 'juanperez@algo.com', 'usuario'),
(30, 'Juan', '123', 'juanperez@algo.com', 'usuario'),
(31, 'Juan', '123', 'juanperez@algo.com', 'usuario'),
(32, 'Juan', '123', 'juanperez@algo.com', 'usuario'),
(33, 'Juan', '123', 'juanperez@algo.com', 'usuario'),
(34, 'pepe', 'pepe', 'pepe@algo.com', 'usuario'),
(35, 'pepe', 'pepe', 'pepe@algo.com', 'usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `domicilios`
--
ALTER TABLE `domicilios`
 ADD PRIMARY KEY (`id`), ADD KEY `idprofesional` (`idprofesional`), ADD KEY `idtipodom` (`idtipodom`), ADD KEY `idlocalidad` (`idlocalidad`);

--
-- Indices de la tabla `especialidades`
--
ALTER TABLE `especialidades`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `localidades`
--
ALTER TABLE `localidades`
 ADD PRIMARY KEY (`id`), ADD KEY `provincia_id` (`provincia_id`);

--
-- Indices de la tabla `profesionales`
--
ALTER TABLE `profesionales`
 ADD PRIMARY KEY (`id`), ADD KEY `idusuario` (`idusuario`);

--
-- Indices de la tabla `profesional_has_especialidad`
--
ALTER TABLE `profesional_has_especialidad`
 ADD PRIMARY KEY (`profesional_idprofesional`,`especialidad_idespecialidad`), ADD KEY `especialidad_idespecialidad` (`especialidad_idespecialidad`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_domicilios`
--
ALTER TABLE `tipo_domicilios`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `domicilios`
--
ALTER TABLE `domicilios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `especialidades`
--
ALTER TABLE `especialidades`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `localidades`
--
ALTER TABLE `localidades`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `profesionales`
--
ALTER TABLE `profesionales`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tipo_domicilios`
--
ALTER TABLE `tipo_domicilios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `domicilios`
--
ALTER TABLE `domicilios`
ADD CONSTRAINT `domicilios_ibfk_1` FOREIGN KEY (`idprofesional`) REFERENCES `profesionales` (`id`),
ADD CONSTRAINT `domicilios_ibfk_2` FOREIGN KEY (`idtipodom`) REFERENCES `tipo_domicilios` (`id`),
ADD CONSTRAINT `domicilios_ibfk_3` FOREIGN KEY (`idlocalidad`) REFERENCES `localidades` (`id`);

--
-- Filtros para la tabla `localidades`
--
ALTER TABLE `localidades`
ADD CONSTRAINT `localidades_ibfk_1` FOREIGN KEY (`provincia_id`) REFERENCES `provincias` (`id`);

--
-- Filtros para la tabla `profesionales`
--
ALTER TABLE `profesionales`
ADD CONSTRAINT `profesionales_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `profesional_has_especialidad`
--
ALTER TABLE `profesional_has_especialidad`
ADD CONSTRAINT `profesional_has_especialidad_ibfk_1` FOREIGN KEY (`profesional_idprofesional`) REFERENCES `profesionales` (`id`),
ADD CONSTRAINT `profesional_has_especialidad_ibfk_2` FOREIGN KEY (`especialidad_idespecialidad`) REFERENCES `especialidades` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
