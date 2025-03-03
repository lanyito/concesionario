-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-03-2025 a las 23:21:22
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `solicitudes_contacto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mensaje` text NOT NULL,
  `estado` enum('Pendiente','Contactado','Vendido','Pendiente') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `nombre`, `email`, `mensaje`, `estado`) VALUES
(1, 'manolo', 'manolocabezadehuevo@gmail.conm', 'me gustaria mucho quedarme con ese auto, soy adicto a la velocipidia ... espero respuestas', 'Pendiente'),
(2, 'manolo', 'manolocabezadehuevo@gmail.conm', 'me gustaria mucho quedarme con ese auto, soy adicto a la velocipidia ... espero respuestas', 'Pendiente'),
(3, 'manolo', 'manolocabezadehuevo@gmail.conm', 'me gustaria mucho quedarme con ese auto, soy adicto a la velocipidia ... espero respuestas', 'Pendiente'),
(4, 'manolo', 'manolocabezadehuevo@gmail.conm', 'me gustaria mucho quedarme con ese auto, soy adicto a la velocipidia ... espero respuestas', 'Pendiente'),
(5, 'manolo', 'manolocabezadehuevo@gmail.conm', 'me gustaria mucho quedarme con ese auto, soy adicto a la velocipidia ... espero respuestas', 'Pendiente'),
(6, 'felipe', 'felipito@gmail.com', 'loco por ese carro!! espero respuestas', 'Pendiente'),
(7, 'loco', 'loco@gmail.com', 'si me gusta\r\n', 'Pendiente'),
(8, 'felipe', 'asdasd@gmail.cpm', 'asdasd', 'Pendiente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
