-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2023 a las 02:47:28
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registroparcial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `infpropietario`
--

CREATE TABLE `infpropietario` (
  `numero` int(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `documento` varchar(20) NOT NULL,
  `nacimiento` varchar(20) NOT NULL,
  `tsangre` varchar(2) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `ciudad` varchar(20) NOT NULL,
  `tel` int(15) NOT NULL,
  `correo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `infpropietario`
--

INSERT INTO `infpropietario` (`numero`, `nombre`, `apellido`, `documento`, `nacimiento`, `tsangre`, `sexo`, `direccion`, `ciudad`, `tel`, `correo`) VALUES
(102938282, 'Juan', 'Acosta', 'Tarjeta de identidad', '20/04/2006', 'O+', 'M', 'cra34#45-21', 'bquilla', 12312334, 'juan@gmail.com'),
(104676734, 'Lauty', 'King', 'Tarjeta de identidad', '11/01/2006', 'B+', 'M', 'cra34#45-21', 'buenos aires', 2147483647, 'lauty@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `infpropietario`
--
ALTER TABLE `infpropietario`
  ADD PRIMARY KEY (`numero`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
