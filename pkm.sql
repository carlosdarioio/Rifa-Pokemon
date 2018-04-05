-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2017 a las 06:12:10
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pkm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrenadores`
--

CREATE TABLE `entrenadores` (
  `id` int(8) NOT NULL,
  `nick` varchar(200) NOT NULL,
  `fc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `entrenadores`
--

INSERT INTO `entrenadores` (`id`, `nick`, `fc`) VALUES
(1, 'a', '50-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `loto`
--

CREATE TABLE `loto` (
  `id` int(8) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `estado` int(8) NOT NULL,
  `idusuario` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `loto`
--

INSERT INTO `loto` (`id`, `nombre`, `estado`, `idusuario`) VALUES
(1, 'Loto1', 0, 1),
(27, 'Antojo.1', 0, 1),
(28, 'Evento2010.2', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pokemones`
--

CREATE TABLE `pokemones` (
  `id` int(8) NOT NULL,
  `pokemon` varchar(200) NOT NULL,
  `estado` int(8) NOT NULL,
  `idloto` int(8) NOT NULL,
  `nick` varchar(200) NOT NULL,
  `fc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pokemones`
--

INSERT INTO `pokemones` (`id`, `pokemon`, `estado`, `idloto`, `nick`, `fc`) VALUES
(1, 'Nidoking', 0, 1, 'sdf', 'sdf'),
(2, 'Landorus', 0, 1, 'carlos', '1865-3247'),
(3, 'Steelix', 0, 1, 'diva', '001810'),
(4, 'Stunfisk', 0, 1, '', ''),
(5, 'Excadrill', 0, 1, '', ''),
(6, 'Whiscash', 0, 1, 'a', 'e'),
(11, 'Mew', 0, 27, '', ''),
(12, 'Lugia', 0, 27, '', ''),
(13, 'pok1', 0, 28, '', ''),
(14, 'pok2', 0, 28, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(8) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `contra` varchar(100) NOT NULL,
  `estado` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `contra`, `estado`) VALUES
(1, 'a', 'a', 0),
(2, 'e', 'e', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `entrenadores`
--
ALTER TABLE `entrenadores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `loto`
--
ALTER TABLE `loto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pokemones`
--
ALTER TABLE `pokemones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `entrenadores`
--
ALTER TABLE `entrenadores`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `loto`
--
ALTER TABLE `loto`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de la tabla `pokemones`
--
ALTER TABLE `pokemones`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
