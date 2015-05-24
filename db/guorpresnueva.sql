-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-05-2015 a las 14:45:43
-- Versión del servidor: 5.6.14
-- Versión de PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `guorpresnueva`
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
  `palabra` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `d_video` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `categoria` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `usuario` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `paginas`
--

INSERT INTO `paginas` (`id`, `palabra`, `imagen`, `alt`, `video`, `d_video`, `categoria`, `usuario`, `fecha`) VALUES
(2, 'cielo', '', '', 'Tj-CQD5Ek4I', '', '', '', 0),
(3, 'c', '', '', 'YzUYap6IbTE', '', '', '', 0),
(4, 'brasil', '', '', 'tHxDTf-Z63Y', '', '', '', 0),
(5, 'b', '', '', 'nyyRkTU-TFA', '', '', '', 0),
(6, 'calor', '', '', 't_w_oxnm8_8', '', '', '', 0),
(7, 'bueno', '', '', 'A1RjqJMyuqU', '', '', '', 0),
(8, 'azul', '', '', 'J2kpq-NMAKU', '', '', '', 0),
(9, 'alegria', '', '', 'eaTHP5DNeio', '', '', '', 0),
(10, 'corazon', '', '', 'NkWbJ_xNnkQ', '', '', '', 0),
(11, 'correr', '', '', 'K_tHP9_N8TA', '', '', '', 0),
(12, 'a', '', '', 'TIXxJwA3bfI', '', '', '', 0),
(13, 'saludo', '', '', 'JYabh2lKaSY', '', '', '', 0),
(14, 'azucar', '', '', '6A-P5B2FEFU', '', '', '', 0),
(15, 'asdasda', '088gdea.jpg', 'qwe', 'https://www.youtube.com/watch?v=lWXBkR7PO0o', 'qweqw', '', '', 1431440328),
(16, 'asdasda', '088gdea.jpg', 'qwe', 'https://www.youtube.com/watch?v=lWXBkR7PO0o', 'qweqw', '', '', 1431440328),
(17, 'asdasda', '088gdea.jpg', 'qwe', 'https://www.youtube.com/watch?v=lWXBkR7PO0o', 'qweqw', 'qweqe', '', 1431440464),
(18, 'asdasda', '088gdea.jpg', 'qwe', 'https://www.youtube.com/watch?v=lWXBkR7PO0o', 'qweqw', 'qweqe', '', 1431440464),
(19, 'wqewqe', '088gdea.jpg', 'mqwr', 'lWXBkR7PO0o', 'wqnqrwq', 'qiweqwr', '', 1431974448),
(20, 'wqewqe', '088gdea.jpg', 'mqwr', 'lWXBkR7PO0o', 'wqnqrwq', 'qiweqwr', '', 1431974463),
(21, 'wqewqe', '088gdea.jpg', 'mqwr', 'lWXBkR7PO0o', 'wqnqrwq', 'qiweqwr', '', 1431974537),
(22, 'wqewqe', '088gdea.jpg', 'mqwr', 'lWXBkR7PO0o', 'wqnqrwq', 'qiweqwr', '', 1431974573),
(23, 'monchopowe', '776.jpg', 'masdqw', 'lWXBkR7PO0o', 'mqewwq', 'qweqwe', '', 1432469587),
(24, 'asdqqw', '776.jpg', 'masdqw', 'lWXBkR7PO0o', 'weqwe', 'wqewqe', '', 1432469619),
(25, 'asddds', 'Sin tÃ­tulo2.png', 'masdqw', 'lWXBkR7PO0o', 'qwewqe', 'qweqwe', '', 1432469669);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `contrasena` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `documento` int(8) NOT NULL,
  KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `contrasena`, `documento`) VALUES
(5, 'administrador', 'contrasena', 12345678),
(6, 'user', '1234', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
