-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-01-2022 a las 13:19:02
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agr_precision`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agricultores`
--

CREATE TABLE `agricultores` (
  `id` int(11) NOT NULL COMMENT 'ID agricultor',
  `nombre` varchar(15) NOT NULL COMMENT 'Nombre del Agricultor',
  `apellido` varchar(30) NOT NULL COMMENT 'Apellido del agricultor',
  `dni` varchar(9) NOT NULL,
  `password` varchar(64) NOT NULL COMMENT 'Contraseña del agricultor',
  `email` varchar(30) NOT NULL COMMENT 'Correo del agricultor'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `agricultores`
--

INSERT INTO `agricultores` (`id`, `nombre`, `apellido`, `dni`, `password`, `email`) VALUES
(1, 'Guillermo', 'Illera', '21141255T', '08eae013dbde91069edb84f27b78ccc675359b3728084286f79b4cba973bea77', 'gillerav01@educantabria.es');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `drones`
--

CREATE TABLE `drones` (
  `id` int(11) NOT NULL,
  `idPiloto` int(11) NOT NULL,
  `modeloDron` varchar(20) NOT NULL,
  `marcaDron` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parcelas`
--

CREATE TABLE `parcelas` (
  `idParcela` int(11) NOT NULL,
  `nomParcela` varchar(100) NOT NULL,
  `area` int(11) NOT NULL COMMENT 'm2',
  `idAgricultor` int(11) NOT NULL,
  `direccionArchivo` varchar(100) NOT NULL,
  `provincia` int(2) NOT NULL,
  `municipio` int(2) NOT NULL,
  `puntos` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idRol` int(11) NOT NULL,
  `nombreRol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idRol`, `nombreRol`) VALUES
(1, 'Administrador'),
(2, 'Agricultor'),
(3, 'Piloto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rolesagricultores`
--

CREATE TABLE `rolesagricultores` (
  `idAgricultor` int(11) NOT NULL,
  `idRol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rolesagricultores`
--

INSERT INTO `rolesagricultores` (`idAgricultor`, `idRol`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajos`
--

CREATE TABLE `trabajos` (
  `idTrabajo` int(11) NOT NULL,
  `idParcela` int(11) NOT NULL,
  `idPiloto` int(11) NOT NULL,
  `idAgricultor` int(11) NOT NULL,
  `idDron` int(11) DEFAULT NULL,
  `tipoTarea` enum('Abonado','Fumigacion') NOT NULL,
  `fechaRegistro` date NOT NULL DEFAULT current_timestamp(),
  `fechaRealizacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agricultores`
--
ALTER TABLE `agricultores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dni` (`dni`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `drones`
--
ALTER TABLE `drones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_idAgricultor` (`idPiloto`);

--
-- Indices de la tabla `parcelas`
--
ALTER TABLE `parcelas`
  ADD PRIMARY KEY (`idParcela`),
  ADD KEY `fk_idAgricultorParcela` (`idAgricultor`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `rolesagricultores`
--
ALTER TABLE `rolesagricultores`
  ADD PRIMARY KEY (`idAgricultor`,`idRol`),
  ADD KEY `fk_idRol` (`idRol`);

--
-- Indices de la tabla `trabajos`
--
ALTER TABLE `trabajos`
  ADD PRIMARY KEY (`idTrabajo`),
  ADD KEY `fk_idParcelaParcelasIdParcela` (`idParcela`),
  ADD KEY `fk_idPilotoAgricultoresIdIdPiloto` (`idPiloto`),
  ADD KEY `fk_idAgricultorAgricultoresIdAgricultor` (`idAgricultor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agricultores`
--
ALTER TABLE `agricultores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID agricultor', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `drones`
--
ALTER TABLE `drones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `parcelas`
--
ALTER TABLE `parcelas`
  MODIFY `idParcela` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `trabajos`
--
ALTER TABLE `trabajos`
  MODIFY `idTrabajo` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `drones`
--
ALTER TABLE `drones`
  ADD CONSTRAINT `fk_idAgricultor` FOREIGN KEY (`idPiloto`) REFERENCES `agricultores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `parcelas`
--
ALTER TABLE `parcelas`
  ADD CONSTRAINT `fk_idAgricultorParcela` FOREIGN KEY (`idAgricultor`) REFERENCES `agricultores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `rolesagricultores`
--
ALTER TABLE `rolesagricultores`
  ADD CONSTRAINT `fk_idAgricultorRol` FOREIGN KEY (`idAgricultor`) REFERENCES `agricultores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idRol` FOREIGN KEY (`idRol`) REFERENCES `roles` (`idRol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
