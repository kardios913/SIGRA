-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-06-2019 a las 08:35:40
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `siegre`
--
CREATE DATABASE IF NOT EXISTS `sigra` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sigra`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `usuario` varchar(45) NOT NULL,
  `contrasena` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `egresado`
--

CREATE TABLE `egresado` (
  `idEgresado` int(11) NOT NULL,
  `contrasena` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `tipodocumeto` varchar(3) NOT NULL,
  `numDocumento` varchar(15) NOT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `dirResidencia` varchar(45) DEFAULT NULL,
  `depResidencia` varchar(20) DEFAULT NULL,
  `ciudResidencia` varchar(20) DEFAULT NULL,
  `paisResidencia` varchar(20) DEFAULT NULL,
  `barrioResidencia` varchar(20) DEFAULT NULL,
  `idPrograma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta`
--

CREATE TABLE `encuesta` (
  `idEncuesta` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `fechaCreacion` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `infoestudio`
--

CREATE TABLE `infoestudio` (
  `idinfoEstudio` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `entidad` varchar(200) NOT NULL,
  `fechaTitulacion` varchar(11) DEFAULT NULL,
  `semestre` varchar(11) DEFAULT NULL,
  `idEgresado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `infolaboral`
--

CREATE TABLE `infolaboral` (
  `idinfoLaboral` int(11) NOT NULL,
  `entidad` varchar(45) NOT NULL,
  `cargo` varchar(45) NOT NULL,
  `fechaInicio` varchar(11) NOT NULL,
  `fechaFin` varchar(11) DEFAULT NULL,
  `pais` varchar(20) NOT NULL,
  `ciudad` varchar(20) NOT NULL,
  `idEgresado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opcionespregunta`
--

CREATE TABLE `opcionespregunta` (
  `idOpcionesPregunta` int(11) NOT NULL,
  `idPregunta` int(11) NOT NULL,
  `idEncuesta` int(11) NOT NULL,
  `opcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE `pregunta` (
  `idPregunta` int(11) NOT NULL,
  `idEncuesta` int(11) NOT NULL,
  `pregunta` varchar(500) NOT NULL,
  `tipoPregunta` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE `programa` (
  `idPrograma` int(11) NOT NULL,
  `nomPrograma` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE `respuesta` (
  `idRespuesta` int(11) NOT NULL,
  `idPregunta` int(11) NOT NULL,
  `idEncuesta` int(11) NOT NULL,
  `idOpcionesPregunta` int(11) NOT NULL,
  `fechaRespuesta` varchar(15) NOT NULL,
  `idEgresado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`usuario`);

--
-- Indices de la tabla `egresado`
--
ALTER TABLE `egresado`
  ADD PRIMARY KEY (`idEgresado`),
  ADD KEY `idPrograma` (`idPrograma`);

--
-- Indices de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  ADD PRIMARY KEY (`idEncuesta`);

--
-- Indices de la tabla `infoestudio`
--
ALTER TABLE `infoestudio`
  ADD PRIMARY KEY (`idinfoEstudio`),
  ADD KEY `idEgresado` (`idEgresado`);

--
-- Indices de la tabla `infolaboral`
--
ALTER TABLE `infolaboral`
  ADD PRIMARY KEY (`idinfoLaboral`),
  ADD KEY `idEgresado` (`idEgresado`);

--
-- Indices de la tabla `opcionespregunta`
--
ALTER TABLE `opcionespregunta`
  ADD PRIMARY KEY (`idOpcionesPregunta`,`idPregunta`,`idEncuesta`),
  ADD KEY `idPregunta` (`idPregunta`,`idEncuesta`);

--
-- Indices de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD PRIMARY KEY (`idPregunta`,`idEncuesta`),
  ADD KEY `idEncuesta` (`idEncuesta`);

--
-- Indices de la tabla `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`idPrograma`);

--
-- Indices de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD PRIMARY KEY (`idRespuesta`,`idPregunta`,`idEncuesta`,`idOpcionesPregunta`),
  ADD KEY `idPregunta` (`idPregunta`,`idEncuesta`,`idOpcionesPregunta`),
  ADD KEY `idEgresado` (`idEgresado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  MODIFY `idEncuesta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `infoestudio`
--
ALTER TABLE `infoestudio`
  MODIFY `idinfoEstudio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `infolaboral`
--
ALTER TABLE `infolaboral`
  MODIFY `idinfoLaboral` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `opcionespregunta`
--
ALTER TABLE `opcionespregunta`
  MODIFY `idOpcionesPregunta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  MODIFY `idPregunta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  MODIFY `idRespuesta` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `egresado`
--
ALTER TABLE `egresado`
  ADD CONSTRAINT `egresado_ibfk_1` FOREIGN KEY (`idPrograma`) REFERENCES `programa` (`idPrograma`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `infoestudio`
--
ALTER TABLE `infoestudio`
  ADD CONSTRAINT `infoestudio_ibfk_1` FOREIGN KEY (`idEgresado`) REFERENCES `egresado` (`idEgresado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `infolaboral`
--
ALTER TABLE `infolaboral`
  ADD CONSTRAINT `infolaboral_ibfk_1` FOREIGN KEY (`idEgresado`) REFERENCES `egresado` (`idEgresado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `opcionespregunta`
--
ALTER TABLE `opcionespregunta`
  ADD CONSTRAINT `opcionespregunta_ibfk_1` FOREIGN KEY (`idPregunta`,`idEncuesta`) REFERENCES `pregunta` (`idPregunta`, `idEncuesta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD CONSTRAINT `pregunta_ibfk_1` FOREIGN KEY (`idEncuesta`) REFERENCES `encuesta` (`idEncuesta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD CONSTRAINT `idEgresado` FOREIGN KEY (`idEgresado`) REFERENCES `egresado` (`idEgresado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `respuesta_ibfk_1` FOREIGN KEY (`idPregunta`,`idEncuesta`,`idOpcionesPregunta`) REFERENCES `opcionespregunta` (`idPregunta`, `idEncuesta`, `idOpcionesPregunta`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
