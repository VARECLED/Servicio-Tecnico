-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2022 a las 18:45:37
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
-- Base de datos: `servicio_tecnico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atencion`
--

CREATE TABLE `atencion` (
  `IdAtencion` int(4) NOT NULL,
  `IdServicio` int(4) NOT NULL,
  `Fecha` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Realizo` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Resuelto` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `IdCliente` int(4) NOT NULL,
  `IdPersona` int(4) NOT NULL,
  `Cedula` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `IdEstado` int(4) NOT NULL,
  `Estado` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `IdMarca` int(4) NOT NULL,
  `Marca` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `IdPersona` int(4) NOT NULL,
  `nombreC` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Direccion` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Correoe` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`IdPersona`, `nombreC`, `Direccion`, `Correoe`) VALUES
(2, 'BELEN GUADALUPE SANTIAGO MARTINEZ', 'AV.MONTERREY, #102. FRACCIONAMIENTO ELSA, OAXACA DE JUÁREZ, OAXACA, MÉXICO.', 'belenmartz423@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `IdProducto` int(4) NOT NULL,
  `IdMarca` int(4) NOT NULL,
  `Producto` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `retiros`
--

CREATE TABLE `retiros` (
  `IdRetiro` int(4) NOT NULL,
  `IdServicio` int(4) NOT NULL,
  `Paga` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `IdServicio` int(4) NOT NULL,
  `IdCliente` int(4) NOT NULL,
  `IdProducto` int(4) NOT NULL,
  `IdEstado` int(4) NOT NULL,
  `Modelo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Color` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IMEI` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nserie` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Extras` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Trabajo` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cuentae` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Contraseña` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fechaentrega` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Total` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Abono` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono`
--

CREATE TABLE `telefono` (
  `IdTelefono` int(4) NOT NULL,
  `IdPersona` int(4) NOT NULL,
  `Telefono` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `IdUsuario` int(4) NOT NULL,
  `IdPersona` int(4) NOT NULL,
  `Usuario` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Contraseña` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`IdUsuario`, `IdPersona`, `Usuario`, `Contraseña`) VALUES
(1, 2, 'belen', '12345678');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `atencion`
--
ALTER TABLE `atencion`
  ADD PRIMARY KEY (`IdAtencion`),
  ADD KEY `IDservicio` (`IdServicio`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`IdCliente`),
  ADD KEY `fk_cliente_persona` (`IdPersona`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`IdEstado`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`IdMarca`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`IdPersona`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`IdProducto`),
  ADD KEY `fk_producto_marca` (`IdMarca`);

--
-- Indices de la tabla `retiros`
--
ALTER TABLE `retiros`
  ADD PRIMARY KEY (`IdRetiro`),
  ADD KEY `fk_retiros_servicio` (`IdServicio`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`IdServicio`),
  ADD KEY `fk_servicio_cliente` (`IdCliente`),
  ADD KEY `fk_servicio_producto` (`IdProducto`),
  ADD KEY `fk_servicio_estado` (`IdEstado`);

--
-- Indices de la tabla `telefono`
--
ALTER TABLE `telefono`
  ADD PRIMARY KEY (`IdTelefono`),
  ADD KEY `fk_telefono_persona` (`IdPersona`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IdUsuario`),
  ADD KEY `fk_usuario_persona` (`IdPersona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `atencion`
--
ALTER TABLE `atencion`
  MODIFY `IdAtencion` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `IdCliente` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `IdEstado` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `IdMarca` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `IdPersona` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `IdProducto` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `retiros`
--
ALTER TABLE `retiros`
  MODIFY `IdRetiro` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `IdServicio` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `telefono`
--
ALTER TABLE `telefono`
  MODIFY `IdTelefono` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IdUsuario` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `atencion`
--
ALTER TABLE `atencion`
  ADD CONSTRAINT `atencion_ibfk_1` FOREIGN KEY (`IDservicio`) REFERENCES `servicio` (`IDservicio`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `fk_cliente_persona` FOREIGN KEY (`IDpersona`) REFERENCES `persona` (`IDpersona`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_producto_marca` FOREIGN KEY (`IDmarca`) REFERENCES `marca` (`IDmarca`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `retiros`
--
ALTER TABLE `retiros`
  ADD CONSTRAINT `fk_retiros_servicio` FOREIGN KEY (`IDservicio`) REFERENCES `servicio` (`IDservicio`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD CONSTRAINT `fk_servicio_cliente` FOREIGN KEY (`IDcliente`) REFERENCES `cliente` (`IDcliente`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_servicio_estado` FOREIGN KEY (`IDestado`) REFERENCES `estado` (`IDestado`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_servicio_producto` FOREIGN KEY (`IDproducto`) REFERENCES `producto` (`IDproducto`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `telefono`
--
ALTER TABLE `telefono`
  ADD CONSTRAINT `fk_telefono_persona` FOREIGN KEY (`IDpersona`) REFERENCES `persona` (`IDpersona`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_persona` FOREIGN KEY (`IDpersona`) REFERENCES `persona` (`IDpersona`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
