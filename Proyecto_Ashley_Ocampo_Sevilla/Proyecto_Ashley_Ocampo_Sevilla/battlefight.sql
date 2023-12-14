-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 19-03-2023 a las 02:23:20
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `battlefight`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

DROP TABLE IF EXISTS `equipo`;
CREATE TABLE IF NOT EXISTS `equipo` (
  `nombreEquipo` varchar(255) NOT NULL,
  `aliasplayerUno` varchar(255) NOT NULL,
  `aliasplayerDos` varchar(255) NOT NULL,
  `aliasplayerTres` varchar(255) NOT NULL,
  `aliasplayerCuatro` varchar(255) NOT NULL,
  `puntaje` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`nombreEquipo`, `aliasplayerUno`, `aliasplayerDos`, `aliasplayerTres`, `aliasplayerCuatro`, `puntaje`, `categoria`, `codigo`) VALUES
('loseerrrr', 'megaloser', 'superloser', 'granloser', 'noobloser', '14', 'beginner', 'B48123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `torneo`
--

DROP TABLE IF EXISTS `torneo`;
CREATE TABLE IF NOT EXISTS `torneo` (
  `codigo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fecha` varchar(255) NOT NULL,
  `precioDolar` varchar(255) NOT NULL,
  `perfil` varchar(255) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `torneo`
--

INSERT INTO `torneo` (`codigo`, `fecha`, `precioDolar`, `perfil`) VALUES
('022023', '18/03/2023', '5000', 'beginner');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `nombre` varchar(255) NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `genero` varchar(255) NOT NULL,
  `fechaRegistro` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `clave` varchar(255) NOT NULL,
  PRIMARY KEY (`cedula`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre`, `cedula`, `genero`, `fechaRegistro`, `estado`, `usuario`, `clave`) VALUES
('admin', '1', 'Masculino', '2023-03-18', 'activo', 'admin', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
