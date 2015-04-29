-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-04-2015 a las 05:59:52
-- Versión del servidor: 5.6.14
-- Versión de PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `guorpres`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `fecha` timestamp NULL DEFAULT NULL,
  `titulo` mediumtext CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `contenido` longtext CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `categoria` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`ID`, `fecha`, `titulo`, `contenido`, `categoria`) VALUES
(1, '2015-04-25 23:45:00', '<h3>Primer Noticia</h3>', '<p>Hola mundo! Esta es una noticia de prueba', 'Sobre Comunidad LSA'),
(2, '2015-04-26 01:46:37', '<h3>Segunda Prueba</h3>', '<p>Segundo insercion de contenido esta vez a trav&eacute;s del panel de administraci&oacute;n.</p>\r\n', 'InterÃ©s General'),
(3, '2015-04-26 03:02:05', '<h3>Tercera Prueba</h3>', '<p>Siguen las pruebas jojojojojo</p>\r\n', 'Sobre Comunidad LSA'),
(4, '2015-04-26 19:23:32', '<h3>cabeza gobernador</h3>', '<p>alperovich cede el poder</p>\r\n', 'Sobre Comunidad LSA'),
(5, '2015-04-26 19:24:00', '<h3>cabeza gobernador</h3>', '<p>qwewqe</p>\r\n', 'Sobre Comunidad LSA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paginas`
--

CREATE TABLE IF NOT EXISTS `paginas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `categoria` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `paginas`
--

INSERT INTO `paginas` (`id`, `nombre`, `categoria`, `video`) VALUES
(2, 'cielo', 'naturaleza', 'Tj-CQD5Ek4I'),
(3, 'c', 'consonante', 'YzUYap6IbTE'),
(4, 'brasil', 'paises', 'tHxDTf-Z63Y'),
(5, 'b', 'consonante', 'nyyRkTU-TFA'),
(6, 'calor', 'sustantivo', 't_w_oxnm8_8'),
(7, 'bueno', 'caracter', 'A1RjqJMyuqU'),
(8, 'azul', 'colores', 'J2kpq-NMAKU'),
(9, 'alegria', 'sentimientos', 'eaTHP5DNeio'),
(10, 'corazon', 'cuerpo', 'NkWbJ_xNnkQ'),
(11, 'correr', 'verbos', 'K_tHP9_N8TA'),
(12, 'a', 'vocales', 'TIXxJwA3bfI'),
(13, 'saludo', 'gestos', 'JYabh2lKaSY'),
(14, 'azucar', 'otros', '6A-P5B2FEFU');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `usuario` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `contrasena` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `documento` int(8) NOT NULL,
  KEY `id` (`id`),
  KEY `nombre` (`nombre`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `contrasena`, `documento`) VALUES
(5, 'Grupo', 'administrador', 'contrasena', 12345678),
(6, '', 'user', '1234', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
