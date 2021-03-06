-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-02-2018 a las 14:42:03
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `malla_ici`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE IF NOT EXISTS `asignatura` (
  `idAsignatura` varchar(10) NOT NULL DEFAULT '',
  `nombre` varchar(50) DEFAULT NULL,
  `semestre` tinyint(3) unsigned NOT NULL,
  `aprobado` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idAsignatura`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`idAsignatura`, `nombre`, `semestre`, `aprobado`) VALUES
('INC100', 'ALGEBRA ELEMENTAL', 1, 0),
('INC101', 'CALCULO DIFERENCIAL', 1, 0),
('INC102', 'FUNDAMENTOS DE PROGRAMACION', 1, 0),
('INC103', 'HISTORIA GENERAL DE LAS CIENCIAS Y LAS TECNOLOGIAS', 1, 0),
('INC104', 'FORMACION VALORICA PERSONAL', 1, 0),
('INC110', 'FISICA', 2, 0),
('INC111', 'CALCULO INTEGRAL', 2, 0),
('INC112', 'PROGRAMACION I', 2, 0),
('INC113', 'INTRODUCCION AL HARDWARE', 2, 0),
('INC114', 'FILOSOFIA DE LAS CIENCIAS', 2, 0),
('INC200', 'FISICA EXPERIMENTAL', 3, 0),
('INC201', 'CALCULO MULTIVARIABLE', 3, 0),
('INC202', 'PROGRAMACION II', 3, 0),
('INC203', 'SISTEMAS DIGITALES', 3, 0),
('INC204', 'ESTRUCTURAS DISCRETAS', 3, 0),
('INC205', 'ASIGNATURA ELECTIVA COMPLEMENTARIA I', 3, 0),
('INC210', 'ALGEBRA LINEAL', 4, 0),
('INC211', 'ESTRUCTURA DE DATOS', 4, 0),
('INC212', 'ARQUITECTURA DE COMPUTADORES', 4, 0),
('INC213', 'TEORIA DE SISTEMAS', 4, 0),
('INC214', 'CONTABILIDAD', 4, 0),
('INC215', 'ASIGNATURA ELECTIVA COMPLEMENTARIA II', 4, 0),
('INC300', 'ECUACIONES DIFERENCIALES', 5, 1),
('INC301', 'ELECTROMAGNETISMO', 5, 0),
('INC302', 'ANALISIS Y DISENO DE ALGORITMOS', 5, 0),
('INC303', 'TEORIA DE SISTEMAS OPERATIVOS', 5, 0),
('INC304', 'FUNDAMENTOS DE INGENIERIA DE SOFTWARE', 5, 0),
('INC305', 'INGLES I', 5, 0),
('INC310', 'PROBABILIDAD Y ESTADISTICA', 6, 0),
('INC311', 'LENGUAJES Y AUTOMATAS', 6, 0),
('INC312', 'REDES DE COMPUTADORES', 6, 0),
('INC313', 'METODOLOGIAS DE ANALISIS', 6, 0),
('INC314', 'ADMINISTRACION EN INFORMATICA', 6, 0),
('INC315', 'INGLES II', 6, 0),
('INC400', 'FISICA CONTEMPORANEA', 7, 1),
('INC401', 'INTERFAZ HOMBRE-MAQUINA', 7, 0),
('INC402', 'MODELOS DE DATOS', 7, 0),
('INC403', 'TALLER DE SISTEMAS OPERATIVOS', 7, 0),
('INC404', 'METODOLOGIAS DE DISENO', 7, 0),
('INC405', 'INGLES III', 7, 0),
('INC410', 'BIOLOGIA', 8, 0),
('INC411', 'DESARROLLO WEB', 8, 0),
('INC412', 'SISTEMAS DE BASES DE DATOS', 8, 0),
('INC413', 'ARQUITECTURA DE SOFTWARE', 8, 0),
('INC414', 'EVALUACION DE PROYECTOS', 8, 0),
('INC415', 'LENGUAJES DE PROGRAMACION', 8, 0),
('INC500', 'PRUEBAS DE SOFTWARE', 9, 0),
('INC501', 'SEMINARIO DE ESPECIALIDAD I', 9, 0),
('INC502', 'ASIGNATURA ELECTIVA DE ESPECIALIDAD I', 9, 0),
('INC503', 'SISTEMAS DE TELECOMUNICACIONES', 9, 0),
('INC504', 'GESTION DE PROYECTOS INFORMATICOS', 9, 1),
('INC505', 'INVESTIGACION DE OPERACIONES', 9, 0),
('INC510', 'ECONOMIA', 10, 0),
('INC511', 'SEMINARIO DE ESPECIALIDAD II', 10, 1),
('INC512', 'ASIGNATURA ELECTIVA DE ESPECIALIDAD II', 10, 1),
('INC513', 'FUNDAMENTOS DE INTELIGENCIA ARTIFICIAL', 10, 0),
('INC514', 'TALLER DE APLICACIONES', 10, 1),
('INC515', 'SIMULACION', 10, 0),
('INC600', 'ASIGNATURA ELECTIVA DE ESPECIALIDAD III', 11, 1),
('INC601', 'SEMINARIO DE TITULO I', 11, 1),
('INC602', 'ETICA Y LEGISLACION', 11, 1),
('INC610', 'SEMINARIO DE TECNOLOGIA DE INFORMACION Y COMUNICAC', 12, 0),
('INC611', 'SEMINARIO DE TITULO II', 12, 1),
('SIN00', 'Sin requisito', 0, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requisito`
--

CREATE TABLE IF NOT EXISTS `requisito` (
  `idAsignatura` varchar(10) NOT NULL,
  `idrequisito` varchar(20) NOT NULL,
  PRIMARY KEY (`idAsignatura`,`idrequisito`),
  KEY `idrequisito` (`idrequisito`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `requisito`
--

INSERT INTO `requisito` (`idAsignatura`, `idrequisito`) VALUES
('INC110', 'INC100'),
('INC111', 'INC100'),
('INC113', 'INC100'),
('INC204', 'INC100'),
('INC210', 'INC100'),
('INC214', 'INC100'),
('INC110', 'INC101'),
('INC111', 'INC101'),
('INC112', 'INC102'),
('INC204', 'INC102'),
('INC114', 'INC103'),
('INC212', 'INC103'),
('INC200', 'INC110'),
('INC213', 'INC110'),
('INC201', 'INC111'),
('INC202', 'INC112'),
('INC203', 'INC113'),
('INC301', 'INC200'),
('INC300', 'INC201'),
('INC301', 'INC201'),
('INC310', 'INC201'),
('INC211', 'INC202'),
('INC303', 'INC202'),
('INC211', 'INC204'),
('INC213', 'INC204'),
('INC302', 'INC211'),
('INC311', 'INC211'),
('INC402', 'INC211'),
('INC411', 'INC211'),
('INC303', 'INC212'),
('INC304', 'INC213'),
('INC410', 'INC213'),
('INC314', 'INC214'),
('INC400', 'INC301'),
('INC415', 'INC302'),
('INC513', 'INC302'),
('INC312', 'INC303'),
('INC403', 'INC303'),
('INC313', 'INC304'),
('INC314', 'INC304'),
('INC401', 'INC304'),
('INC402', 'INC304'),
('INC315', 'INC305'),
('INC505', 'INC310'),
('INC513', 'INC310'),
('INC515', 'INC310'),
('INC513', 'INC311'),
('INC503', 'INC312'),
('INC404', 'INC313'),
('INC414', 'INC314'),
('INC510', 'INC314'),
('INC405', 'INC315'),
('INC411', 'INC401'),
('INC412', 'INC402'),
('INC413', 'INC404'),
('INC500', 'INC404'),
('INC504', 'INC413'),
('INC504', 'INC414'),
('INC514', 'INC500'),
('INC511', 'INC501'),
('INC514', 'INC504'),
('INC611', 'INC601'),
('INC100', 'SIN00'),
('INC101', 'SIN00'),
('INC102', 'SIN00'),
('INC103', 'SIN00'),
('INC104', 'SIN00'),
('INC205', 'SIN00'),
('INC215', 'SIN00'),
('INC305', 'SIN00'),
('INC501', 'SIN00'),
('INC502', 'SIN00'),
('INC512', 'SIN00'),
('INC600', 'SIN00'),
('INC601', 'SIN00'),
('INC602', 'SIN00'),
('INC610', 'SIN00');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `requisito`
--
ALTER TABLE `requisito`
  ADD CONSTRAINT `requisito_ibfk_1` FOREIGN KEY (`idrequisito`) REFERENCES `asignatura` (`idAsignatura`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
