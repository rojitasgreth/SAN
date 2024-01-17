-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-03-2023 a las 00:29:37
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `san`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `egresos`
--

CREATE TABLE `egresos` (
  `id` int(25) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `genero` enum('M','F') NOT NULL,
  `grado` int(11) NOT NULL,
  `seccion` enum('A','B','C') NOT NULL,
  `nota` enum('A','B','C','D','E') DEFAULT NULL,
  `representante` varchar(60) NOT NULL,
  `motivo` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `egresos`
--

INSERT INTO `egresos` (`id`, `nombre`, `apellido`, `genero`, `grado`, `seccion`, `nota`, `representante`, `motivo`) VALUES
(10156222, 'Alberth', 'Editadoo', 'M', 4, 'A', 'A', 'Luzmary', 'Otro'),
(62585, 'Ana', 'Farias', 'F', 4, 'A', NULL, 'Jhonny', 'Retiro'),
(1236785, 'andres', 'valderrama', 'M', 2, 'C', '', 'miguel perez', 'Retiro'),
(54162357, 'Ana', 'Farias', 'F', 1, 'A', NULL, 'Pedro Farias', 'Otro'),
(5641984, 'Luisa ', 'Juarez', 'F', 1, 'A', NULL, 'Angel Juarez', 'Retiro'),
(30148541, 'Pedro', 'Perez', 'M', 1, 'A', NULL, 'Petra Rojas', 'Retiro'),
(29921795, 'Grethmar', 'Editado', 'F', 5, 'C', NULL, 'Luzmary Bastidas', 'Retiro'),
(1455628, 'diego', 'blanco', 'M', 3, 'A', 'B', 'Jose miguel', 'Otro'),
(5476148, 'Bartolomeo', 'Kran', 'M', 6, 'B', NULL, 'Pablo Castillo', 'Graduado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estu`
--

CREATE TABLE `estu` (
  `id` int(25) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `genero` enum('M','F') NOT NULL,
  `grado` int(11) NOT NULL,
  `seccion` enum('A','B','C','D','E') NOT NULL,
  `representante` varchar(60) NOT NULL,
  `nota` enum('A','B','C','D','E') DEFAULT NULL,
  `FechaRegistro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estu`
--

INSERT INTO `estu` (`id`, `nombre`, `apellido`, `genero`, `grado`, `seccion`, `representante`, `nota`, `FechaRegistro`) VALUES
(479562, 'Yhon', 'Jeun', 'M', 1, 'A', 'Daniela Castro', 'C', '2023-03-17 21:25:39'),
(659562, 'Jose', 'Kilian', 'M', 2, 'A', 'Luis Kilian', NULL, '2023-03-18 14:22:22'),
(1025688, 'jose', 'miguel', 'M', 3, 'A', 'Martin Torres', 'D', '2023-03-17 21:25:39'),
(4545421, 'Grethmar', 'Rojas', 'F', 1, 'A', 'Luzmary Bastidas', NULL, '2023-03-18 21:01:32'),
(6325784, 'Luisa', 'Palacios', 'F', 1, 'A', 'Luzmary Bastidas', NULL, '2023-03-17 21:25:39'),
(17038495, 'Luisa', 'editado', 'F', 6, 'B', 'Luzmary', 'B', '2023-03-23 03:03:29'),
(63152461, 'Luis', 'Rojas', 'M', 4, 'B', 'Ana', 'A', '2023-03-17 21:25:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado`
--

CREATE TABLE `grado` (
  `grado` int(11) NOT NULL,
  `seccion` enum('A','B','C') NOT NULL,
  `estu_id` int(11) NOT NULL,
  `prof_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `grado`
--

INSERT INTO `grado` (`grado`, `seccion`, `estu_id`, `prof_id`) VALUES
(2, 'C', 1025635, 29863455),
(3, 'A', 1025688, 25963558),
(2, 'C', 1236785, 29863455),
(3, 'A', 1455628, 25963558);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perso`
--

CREATE TABLE `perso` (
  `id` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `status2` enum('inactivo','activo') NOT NULL DEFAULT 'activo',
  `cargo` enum('Director','Coordinacion','Docente','Nuevo') DEFAULT 'Nuevo',
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `perso`
--

INSERT INTO `perso` (`id`, `user`, `password`, `email`, `status`, `status2`, `cargo`, `fecha`) VALUES
(1, 'Grethmar', '123', 'rojas@gmail.com', 1, 'activo', 'Nuevo', '2023-03-23 00:06:53'),
(2, 'Prueba', '123', 'prueba@gmail.com', 1, 'activo', 'Docente', '2023-03-23 00:07:38'),
(3, 'Directora', '123', 'Directora@gmail.com', 0, 'inactivo', 'Director', '2023-03-23 01:43:49'),
(8, 'Prueba2', '123', 'hola@hotmail.com', 1, 'activo', 'Coordinacion', '2023-03-23 03:02:08'),
(9, 'PerfilNuevo', '123', 'Nuevo@gmail.com', 1, 'activo', 'Nuevo', '2023-03-27 22:29:14');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estu`
--
ALTER TABLE `estu`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grado`
--
ALTER TABLE `grado`
  ADD UNIQUE KEY `estu_id` (`estu_id`),
  ADD KEY `prof_id` (`prof_id`);

--
-- Indices de la tabla `perso`
--
ALTER TABLE `perso`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `perso`
--
ALTER TABLE `perso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
