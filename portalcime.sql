-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-05-2021 a las 08:07:01
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `portalcime`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `cve_socio` int(100) NOT NULL,
  `nombres` varchar(500) NOT NULL,
  `usuario` varchar(500) NOT NULL,
  `email_p` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contraseña` varchar(30) NOT NULL,
  `celular` varchar(11) NOT NULL,
  `foto` text NOT NULL,
  `tipo_usuario` varchar(100) NOT NULL,
  `estado` int(1) NOT NULL,
  `ultimo_login` varchar(500) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `cve_socio`, `nombres`, `usuario`, `email_p`, `email`, `contraseña`, `celular`, `foto`, `tipo_usuario`, `estado`, `ultimo_login`, `fecha`) VALUES
(1, 0, 'Javier Francisco Leyva González', 'Javier Leyva', 'leyva10270307@gmail.com', 'sistemas@cimechiapas.mx', 'sistemas', '9612573952', 'vistas/img/user2-160x160.png', 'Admin', 1, '2021-05-12 07:55:52', '2021-05-12 05:56:51'),
(2, 0, 'Javier Francisco Leyva González', 'Javier Leyva González', 'leyva10270307@gmail.com', 'javier.leyva@cimechiapas.mx', 'javierleyva', '9612573952', 'vistas/img/users.jpg', 'Colegiado', 1, '2021-05-13 00:00:00', '2021-05-13 20:17:58');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
