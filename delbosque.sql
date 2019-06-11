-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-05-2019 a las 12:01:46
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `delbosque`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `descripcion` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Administrador', 'Dios Rey del si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia_prima`
--

CREATE TABLE `materia_prima` (
  `id` varchar(15) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `descripcion` varchar(15) NOT NULL,
  `id_medida` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `materia_prima`
--

INSERT INTO `materia_prima` (`id`, `nombre`, `descripcion`, `id_medida`, `id_proveedor`, `cantidad`) VALUES
('', 'fanny', 'dura', 2, 1, 200),
('1', 'leche', 'leche entera', 1, 1, 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medida`
--

CREATE TABLE `medida` (
  `id` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `medida`
--

INSERT INTO `medida` (`id`, `nombre`) VALUES
(1, 'kilogramo'),
(2, 'libra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `descripcion` varchar(15) NOT NULL,
  `contenido` int(11) NOT NULL,
  `id_medida` int(11) NOT NULL,
  `ingredientes` varchar(15) NOT NULL,
  `cantidad` int(11) NOT NULL DEFAULT '0',
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `descripcion`, `contenido`, `id_medida`, `ingredientes`, `cantidad`, `precio`) VALUES
(1, 'leche condensad', 'leche', 500, 2, 'varias cosas', 0, 0),
(2, 'galletas', 'muy ricas ', 12, 2, 'leche, agua, pe', 0, 0),
(3, 'galletas', 'muy ricas ', 12, 2, 'leche, agua, pe', 0, 0),
(4, 'galletas', 'muy ricas ', 12, 2, 'leche, agua, pe', 0, 0),
(5, 'galletas', 'muy ricas ', 12, 2, 'leche, agua, pe', 0, 0),
(6, 'galletas', 'muy ricas ', 12, 2, 'leche, agua, pe', 0, 0),
(7, 'nohora', 'dsf', 3, 2, 'fsd,fsd', 0, 0),
(8, 'dannita', '.l.', 32, 2, 'popo, chichi', 0, 0),
(9, 'dannita', '.l.', 32, 2, 'popo, chichi', 0, 0),
(10, 'dannita', '.l.', 32, 2, 'popo, chichi', 0, 0),
(11, 'dannita', '.l.', 32, 2, 'popo, chichi', 0, 0),
(12, 'dannita', '.l.', 32, 2, 'popo, chichi', 0, 0),
(13, 'nohora', 'sdf', 3, 2, 'sadasda, po', 0, 0),
(14, 'nohora', 'sdf', 3, 2, 'sadasda, po', 0, 0),
(15, 'gerosn', 'GAY', 699, 2, 'TIENE SIDA', 0, 0),
(16, 'gaseosa', 'super hiper tri', 123, 2, 'agua, coca', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `descripcion` varchar(15) NOT NULL,
  `direccion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id`, `nombre`, `descripcion`, `direccion`) VALUES
(0, 'gerson', 'es  gay y tiene', 'call falsa 123'),
(1, 'freskleche', 'leche entera', 'calle 15 av 12 #104 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `nusuario` varchar(10) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `apellidos` varchar(15) NOT NULL,
  `cedula` int(11) NOT NULL,
  `fecha_nac` date NOT NULL,
  `id_cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`nusuario`, `nombre`, `apellidos`, `cedula`, `fecha_nac`, `id_cargo`) VALUES
('8', 'brandon', 'garcia', 1090464885, '2019-05-13', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materia_prima`
--
ALTER TABLE `materia_prima`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_medida` (`id_medida`),
  ADD KEY `id_proveedor` (`id_proveedor`);

--
-- Indices de la tabla `medida`
--
ALTER TABLE `medida`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_medida` (`id_medida`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nusuario`),
  ADD KEY `id_cargo` (`id_cargo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `materia_prima`
--
ALTER TABLE `materia_prima`
  ADD CONSTRAINT `materia_prima_ibfk_1` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id`),
  ADD CONSTRAINT `materia_prima_ibfk_2` FOREIGN KEY (`id_medida`) REFERENCES `medida` (`id`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_medida`) REFERENCES `medida` (`id`);

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_cargo`) REFERENCES `cargo` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
