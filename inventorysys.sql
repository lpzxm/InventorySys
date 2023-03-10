-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-03-2023 a las 09:08:58
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
-- Base de datos: `inventorysys`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `ID` int(11) NOT NULL,
  `id_usuario` varchar(10) NOT NULL,
  `id_admin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`ID`, `id_usuario`, `id_admin`) VALUES
(1, 'Mar12', '1234'),
(2, 'Cielo5', '1245');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`ID`, `Nombre`) VALUES
(6, 'Limpieza'),
(7, 'Carnes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `DUI` int(9) NOT NULL,
  `PIN` varchar(100) NOT NULL,
  `IDemple` varchar(8) NOT NULL,
  `Fechaingre` varchar(100) NOT NULL,
  `Cargo` varchar(100) NOT NULL,
  `turnoentrada` time(6) NOT NULL,
  `turnosalida` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`ID`, `Nombre`, `DUI`, `PIN`, `IDemple`, `Fechaingre`, `Cargo`, `turnoentrada`, `turnosalida`) VALUES
(2, 'Sara', 0, 'Sar23', '6789', '2023-03-15', 'Caja', '00:00:00.000000', '00:00:00.000000'),
(3, 'Mario', 0, 'Mar12', '1234', '2023-03-04', 'Bodegero', '00:00:00.000000', '00:00:00.000000'),
(4, 'Mario', 0, 'Mar12', '1234', '2023-03-05', 'Bodegero', '00:00:00.000000', '00:00:00.000000'),
(5, 'Mario', 0, 'Mar12', '6789', '2023-03-12', 'Bodegero', '00:00:00.000000', '00:00:00.000000'),
(7, 'Marcos', 21321312, '1232', '83453', '2013-06-11', 'Mozo', '00:00:00.000000', '00:00:00.000000'),
(8, 'Julio', 12332432, '6587', '98067', '1998-06-18', 'Jefe', '04:13:02.000000', '00:00:13.000000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `IDproducto` int(11) NOT NULL,
  `Nombre` varchar(200) NOT NULL,
  `Descripcion` varchar(500) NOT NULL,
  `proveedor` varchar(200) NOT NULL,
  `Cantidad` int(200) NOT NULL,
  `Precio` float NOT NULL,
  `IDcategoria` int(11) NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`IDproducto`, `Nombre`, `Descripcion`, `proveedor`, `Cantidad`, `Precio`, `IDcategoria`, `visible`) VALUES
(4, 'Asistin', 'Asistin Lavanda Bolsa 1lt', 'Asistin', 20, 0.99, 7, 0),
(5, 'Escoba', 'Escoba larga color rojo', 'IML', 30, 1, 6, 1),
(6, 'Carne molida', 'Carne molida fud', 'FUD', 71, 1.2, 7, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `ID` int(11) NOT NULL,
  `Nproduct` varchar(200) NOT NULL,
  `Descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`IDproducto`),
  ADD KEY `fk_prod_categoria` (`IDcategoria`);

--
-- Indices de la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `IDproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `reportes`
--
ALTER TABLE `reportes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_prod_categoria` FOREIGN KEY (`IDcategoria`) REFERENCES `categorias` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
