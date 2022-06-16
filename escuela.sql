-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2022 a las 00:37:20
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escuela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `telefono` bigint(10) NOT NULL,
  `correo` varchar(20) NOT NULL,
  `licenciatura` varchar(20) NOT NULL,
  `cuatrimestre` varchar(20) NOT NULL,
  `estatus` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `apellido`, `telefono`, `correo`, `licenciatura`, `cuatrimestre`, `estatus`) VALUES
(1, 'juan manuel', 'Euan pech', 9935766587, 'juan@red.unid.mx', 'ingeniería sistemas', 'tercer cuatrimestre ', 1),
(2, 'gael', 'portilla lopez', 9988657654, 'gael@gmail.com', 'pedagogia', 'primer cuatrimestre', 0),
(3, 'juan pablo', 'Euan Mex', 9984756474, 'pablo1@gmail.com', 'nutrición ', 'cuarto cuatrimestre', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `id` bigint(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `cuatrimestre` varchar(20) NOT NULL,
  `licenciatura` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`id`, `nombre`, `cuatrimestre`, `licenciatura`) VALUES
(1, 'física termo nuclear', 'tercer cuatrimestre', 'químico farmacobiólo'),
(2, 'psicología ', 'primer cuatrimestre', 'pedagogia'),
(3, 'biología ', 'quinto cuatrimestre', 'enfermería ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `telefono` bigint(10) NOT NULL,
  `correo` varchar(20) NOT NULL,
  `estatus` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id`, `nombre`, `apellido`, `telefono`, `correo`, `estatus`) VALUES
(1, 'Antonio', 'luna ', 9935357474, 'anto@gmail.com', 0),
(2, 'augusto', 'Zamudio', 9947272728, 'august@gmail.com', 1),
(3, 'renan', 'Euan Noh', 9983761264, 'noh@hotmail.com', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
