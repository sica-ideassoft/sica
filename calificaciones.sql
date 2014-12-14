-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 14-12-2014 a las 16:36:48
-- Versión del servidor: 5.5.40-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `calificaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(100) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `A_paterno` varchar(30) NOT NULL,
  `A_materno` varchar(30) NOT NULL,
  `ocupacion` varchar(30) NOT NULL,
  `user` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id_admin`, `nombre`, `A_paterno`, `A_materno`, `ocupacion`, `user`, `password`, `imagen`) VALUES
(1, 'jovanny', 'lopez', 'zamora', 'residencias', 'hatake', 'gears', ''),
(2, 'jose', 'perez', 'duran', 'estudiante', 'toruk', 'gears', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE IF NOT EXISTS `alumno` (
  `id_alumno` int(99) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `A_paterno` varchar(50) NOT NULL,
  `A_materno` varchar(50) NOT NULL,
  `matricula` varchar(50) NOT NULL,
  `curp` varchar(30) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `genero` varchar(10) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `edad` int(100) NOT NULL,
  `grado` varchar(20) NOT NULL,
  `grupo` varchar(20) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `nacionalidad` varchar(50) NOT NULL,
  `estado_civil` varchar(20) NOT NULL,
  `fotografia` varchar(100) NOT NULL,
  `staus` varchar(20) NOT NULL,
  PRIMARY KEY (`id_alumno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
