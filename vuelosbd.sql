-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-08-2023 a las 04:41:38
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vuelosbd`
--
CREATE DATABASE IF NOT EXISTS `vuelosbd` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `vuelosbd`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aerolinea`
--

CREATE TABLE `aerolinea` (
  `aerolinea_id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `aeropuerto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `aerolinea`
--

INSERT INTO `aerolinea` (`aerolinea_id`, `nombre`, `aeropuerto`) VALUES
(1, 'Avianca', 'Aeropuerto Internacional de Santa Rosa	'),
(2, 'Ecuatoriana Airlines\n', 'Aeropuerto Mariscal Lamar	'),
(3, 'LATAM', 'Aeropuerto Internacional Mariscal Sucre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agentes`
--

CREATE TABLE `agentes` (
  `agente_id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `Apellido` varchar(255) DEFAULT NULL,
  `Correo` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `agentes`
--

INSERT INTO `agentes` (`agente_id`, `nombre`, `Apellido`, `Correo`, `password`) VALUES
(1, 'Juan Diego', 'Sánchez Oña', 'Juan_Sanchez@gmail.com', '12345'),
(2, 'Luis Antonio', 'Alcívar Cifuentes ', 'Luis_Alcivar@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `ciudades_id` int(11) NOT NULL,
  `nombreCiudad` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`ciudades_id`, `nombreCiudad`) VALUES
(1, 'Guayaquil'),
(2, 'Manta'),
(3, 'Cuenca'),
(4, 'Quito\r\n'),
(5, 'Machala');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `cliente_id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `Apellido` varchar(255) DEFAULT NULL,
  `Correo` varchar(255) DEFAULT NULL,
  `cedula` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `Direccion` varchar(255) DEFAULT NULL,
  `Ciudad_FK` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`cliente_id`, `nombre`, `Apellido`, `Correo`, `cedula`, `telefono`, `Direccion`, `Ciudad_FK`) VALUES
(1, 'Alex', 'Gómez ', 'alex20@gmail.com', '0951827530', '0951827531', 'Guasmo norte', 1),
(2, 'Luis', 'Hurtado', 'luis1010@gmail.com', '0951827566', '0951827560', 'Av. Centinela #4584152', 3),
(3, 'Camila', 'Astres', 'Camilia_C@Emial.com', '03334343434', '043434344', 'Av. Barrio del seguro', 1),
(4, 'María', 'López ', 'mariaLopez@Emial.com', '09518270300', '0950827011', 'Av. nueva villa', 1),
(5, 'July', 'Moreira', 'july_10@Emial.com', '09618275001', '0943434344', 'Coop. Voluntad de Dios ', 1),
(6, 'Marcela', 'Vera', 'Vera@gmial.com', '09334343434', '0443434344', 'Guasmo Norte', 1),
(7, 'Milton', 'Litardo ', 'Litardo@gmial.com', '09123344544', '0943434344', 'Mucho Lote, V15', 1),
(8, 'Manuel', 'García', 'Garcia_manuel@gmial.com', '09123344410', '09434343440', 'Coop. Vareles Casp', 1),
(9, 'Luisa', 'Saltos', 'Saltos_20@gmial.com', '09233478148', '09434343441', 'Guasmo Central', 1),
(10, 'Patricia', 'Pucha', 'Patricia_D@gmail.com', '03334343434', '09243434344', 'Calle A y la 29 ', 3),
(11, 'Vanessa', 'Klovers', 'Vanessa@gmail.com', '09688295551', '0943434344', 'Coop. Sergio toral 2 etapa', 1),
(12, 'Sofia', 'Seminario', 'sofiaC@Emial.com', '09618275006', '0943434344', 'Coop. Valle Hermoso', 2),
(13, 'Édison ', 'Méndez', 'edison_M@gmail.com', '09518275227', '0978966900', 'Floresta 2', 3),
(14, 'Eddy', 'Ramirez', 'eddy@gmail.com', '0951827536', '0978966900', 'guasmo sur coop. centinela', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hotel`
--

CREATE TABLE `hotel` (
  `hotel_id` int(11) NOT NULL,
  `nombre_hotel` varchar(255) DEFAULT NULL,
  `valoracion` int(11) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `precioNoche` float DEFAULT NULL,
  `ciudadhotel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `hotel`
--

INSERT INTO `hotel` (`hotel_id`, `nombre_hotel`, `valoracion`, `direccion`, `precioNoche`, `ciudadhotel`) VALUES
(1, 'TRYP by Wyndham Guayaquil\r\n', 5, 'Av. Joaquín Orrantia y L. Benitez', 79, 1),
(2, 'Unipark by Oro Verde Hotels\r\n', 4, 'Clemente Ballén 406 y Chile', 80, 1),
(3, 'Ibis Quito', 3, 'Avenida Diego De Almagro E8 19 Y Bello Horizonte', 65, 4),
(4, 'Four Points by Sheraton Cuenca\r\n', 5, 'Ave. Circunvalación Sur y Ave. Felipe II', 66.6, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquetes`
--

CREATE TABLE `paquetes` (
  `paquete_id` int(11) NOT NULL,
  `nombreP` varchar(255) DEFAULT NULL,
  `Pvuelo_fk` int(11) DEFAULT NULL,
  `Photel_fk` int(11) DEFAULT NULL,
  `precio` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `paquetes`
--

INSERT INTO `paquetes` (`paquete_id`, `nombreP`, `Pvuelo_fk`, `Photel_fk`, `precio`) VALUES
(1, 'Paquete duo', 1, 2, 250),
(2, 'Paquete VIP', 1, 1, 99);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas_hotel`
--

CREATE TABLE `reservas_hotel` (
  `RHotel_id` int(11) NOT NULL,
  `cliente_FK` int(11) DEFAULT NULL,
  `RHhotel_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reservas_hotel`
--

INSERT INTO `reservas_hotel` (`RHotel_id`, `cliente_FK`, `RHhotel_fk`) VALUES
(1, 3, 4),
(5, 1, 3),
(17, 2, 2),
(18, 1, 2),
(19, 12, 3),
(20, 2, 1),
(21, 1, 3),
(22, 12, 3),
(23, 12, 3),
(24, 2, 1),
(25, 14, 3),
(69, 2, 4),
(70, 2, 1),
(71, 2, 1),
(75, 6, 2),
(76, 2, 3),
(77, 1, 4),
(78, 1, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas_paquete`
--

CREATE TABLE `reservas_paquete` (
  `rpaquete_id` int(11) NOT NULL,
  `clientefk` int(11) NOT NULL,
  `paquetefk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reservas_paquete`
--

INSERT INTO `reservas_paquete` (`rpaquete_id`, `clientefk`, `paquetefk`) VALUES
(1, 9, 2),
(2, 2, 2),
(3, 2, 2),
(4, 2, 2),
(5, 1, 1),
(6, 1, 1),
(7, 1, 1),
(8, 1, 1),
(9, 1, 1),
(10, 1, 1),
(11, 1, 1),
(12, 1, 1),
(13, 1, 1),
(14, 1, 1),
(15, 1, 1),
(16, 1, 2),
(17, 1, 2),
(18, 1, 2),
(19, 1, 2),
(20, 1, 1),
(21, 1, 1),
(22, 1, 1),
(23, 1, 1),
(24, 1, 1),
(25, 1, 1),
(26, 1, 1),
(27, 1, 1),
(28, 1, 1),
(29, 3, 1),
(30, 3, 1),
(31, 3, 1),
(32, 3, 1),
(33, 3, 1),
(34, 3, 1),
(35, 3, 1),
(36, 3, 1),
(37, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas_vuelo`
--

CREATE TABLE `reservas_vuelo` (
  `rvuelo_id` int(11) NOT NULL,
  `vuelo_fk` int(11) NOT NULL,
  `cliente_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reservas_vuelo`
--

INSERT INTO `reservas_vuelo` (`rvuelo_id`, `vuelo_fk`, `cliente_fk`) VALUES
(1, 1, 1),
(2, 2, 12),
(3, 2, 12),
(4, 4, 13),
(5, 2, 2),
(6, 1, 1),
(7, 1, 1),
(8, 1, 1),
(9, 1, 1),
(10, 1, 1),
(11, 1, 1),
(12, 1, 1),
(13, 1, 1),
(14, 1, 1),
(15, 1, 1),
(16, 1, 1),
(17, 2, 1),
(18, 2, 1),
(19, 2, 1),
(20, 2, 1),
(21, 1, 1),
(22, 1, 1),
(23, 1, 1),
(24, 1, 1),
(25, 1, 1),
(26, 1, 1),
(27, 1, 1),
(28, 1, 1),
(29, 1, 1),
(30, 1, 3),
(31, 1, 3),
(32, 1, 3),
(33, 1, 3),
(34, 1, 3),
(35, 1, 3),
(36, 1, 3),
(37, 1, 3),
(38, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vuelo`
--

CREATE TABLE `vuelo` (
  `vuelo_id` int(11) NOT NULL,
  `aerolinea_fk` int(11) DEFAULT NULL,
  `origen` int(11) DEFAULT NULL,
  `destino` int(11) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vuelo`
--

INSERT INTO `vuelo` (`vuelo_id`, `aerolinea_fk`, `origen`, `destino`, `precio`, `fecha`) VALUES
(1, 1, 3, 1, 150, '2023-06-09'),
(2, 2, 1, 4, 250, '2023-06-22'),
(4, 1, 1, 2, 888, '2023-06-10');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aerolinea`
--
ALTER TABLE `aerolinea`
  ADD PRIMARY KEY (`aerolinea_id`);

--
-- Indices de la tabla `agentes`
--
ALTER TABLE `agentes`
  ADD PRIMARY KEY (`agente_id`);

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`ciudades_id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cliente_id`),
  ADD KEY `ciudad_fk` (`Ciudad_FK`);

--
-- Indices de la tabla `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hotel_id`),
  ADD KEY `ciudadHotel_fk` (`ciudadhotel`);

--
-- Indices de la tabla `paquetes`
--
ALTER TABLE `paquetes`
  ADD PRIMARY KEY (`paquete_id`),
  ADD KEY `Pvuelo_fk` (`Pvuelo_fk`),
  ADD KEY `Photel_fk` (`Photel_fk`);

--
-- Indices de la tabla `reservas_hotel`
--
ALTER TABLE `reservas_hotel`
  ADD PRIMARY KEY (`RHotel_id`),
  ADD KEY `RHreserva_fk` (`cliente_FK`),
  ADD KEY `RHhotel_fk` (`RHhotel_fk`);

--
-- Indices de la tabla `reservas_paquete`
--
ALTER TABLE `reservas_paquete`
  ADD PRIMARY KEY (`rpaquete_id`),
  ADD KEY `cfk` (`clientefk`),
  ADD KEY `pfk` (`paquetefk`);

--
-- Indices de la tabla `reservas_vuelo`
--
ALTER TABLE `reservas_vuelo`
  ADD PRIMARY KEY (`rvuelo_id`),
  ADD KEY `fkcliente` (`cliente_fk`),
  ADD KEY `fkvuelo` (`vuelo_fk`);

--
-- Indices de la tabla `vuelo`
--
ALTER TABLE `vuelo`
  ADD PRIMARY KEY (`vuelo_id`),
  ADD KEY `aeroline_fk` (`aerolinea_fk`),
  ADD KEY `origen_fk` (`origen`),
  ADD KEY `destino_fk` (`destino`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aerolinea`
--
ALTER TABLE `aerolinea`
  MODIFY `aerolinea_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `agentes`
--
ALTER TABLE `agentes`
  MODIFY `agente_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `ciudades_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cliente_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `paquetes`
--
ALTER TABLE `paquetes`
  MODIFY `paquete_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `reservas_hotel`
--
ALTER TABLE `reservas_hotel`
  MODIFY `RHotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT de la tabla `reservas_paquete`
--
ALTER TABLE `reservas_paquete`
  MODIFY `rpaquete_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `reservas_vuelo`
--
ALTER TABLE `reservas_vuelo`
  MODIFY `rvuelo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `vuelo`
--
ALTER TABLE `vuelo`
  MODIFY `vuelo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `ciudad_fk` FOREIGN KEY (`Ciudad_FK`) REFERENCES `ciudades` (`ciudades_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `ciudadHotel_fk` FOREIGN KEY (`ciudadhotel`) REFERENCES `ciudades` (`ciudades_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `paquetes`
--
ALTER TABLE `paquetes`
  ADD CONSTRAINT `Photel_fk` FOREIGN KEY (`Photel_fk`) REFERENCES `hotel` (`hotel_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Pvuelo_fk` FOREIGN KEY (`Pvuelo_fk`) REFERENCES `vuelo` (`vuelo_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reservas_hotel`
--
ALTER TABLE `reservas_hotel`
  ADD CONSTRAINT `RCliente_fk` FOREIGN KEY (`cliente_FK`) REFERENCES `cliente` (`cliente_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `RHhotel_fk` FOREIGN KEY (`RHhotel_fk`) REFERENCES `hotel` (`hotel_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reservas_paquete`
--
ALTER TABLE `reservas_paquete`
  ADD CONSTRAINT `cfk` FOREIGN KEY (`clientefk`) REFERENCES `cliente` (`cliente_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pfk` FOREIGN KEY (`paquetefk`) REFERENCES `paquetes` (`paquete_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reservas_vuelo`
--
ALTER TABLE `reservas_vuelo`
  ADD CONSTRAINT `fkcliente` FOREIGN KEY (`cliente_fk`) REFERENCES `cliente` (`cliente_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fkvuelo` FOREIGN KEY (`vuelo_fk`) REFERENCES `vuelo` (`vuelo_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `vuelo`
--
ALTER TABLE `vuelo`
  ADD CONSTRAINT `aeroline_fk` FOREIGN KEY (`aerolinea_fk`) REFERENCES `aerolinea` (`aerolinea_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `destino_fk` FOREIGN KEY (`destino`) REFERENCES `ciudades` (`ciudades_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `origen_fk` FOREIGN KEY (`origen`) REFERENCES `ciudades` (`ciudades_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
