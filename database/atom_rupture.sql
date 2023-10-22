-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-10-2023 a las 01:36:11
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
-- Base de datos: `atom_rupture`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clase`
--

CREATE TABLE `clase` (
  `id_clase` int(10) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `precio` int(20) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_pago`
--

CREATE TABLE `datos_pago` (
  `id_pago` int(11) NOT NULL,
  `numero_t` int(30) NOT NULL,
  `CVV` int(5) NOT NULL,
  `fecha_v` int(20) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dietas`
--

CREATE TABLE `dietas` (
  `id_dieta` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `precio_e` int(20) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_a`
--

CREATE TABLE `productos_a` (
  `id_producto` int(10) NOT NULL,
  `nombre_p` varchar(20) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `precio` int(10) NOT NULL,
  `stock` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos_a`
--

INSERT INTO `productos_a` (`id_producto`, `nombre_p`, `tipo`, `precio`, `stock`) VALUES
(1, 'Winstrol', 'Anabolico', 80, 20),
(2, 'Anavar', 'Anabolico, energizan', 70, 10),
(3, 'Anadrol', 'Esteroide anabolico', 100, 50),
(6, 'Testosterona', 'Anabolico, hormona', 80, 100),
(7, 'Esteroides', 'Esteroides', 5000, 4),
(8, 'anavar', 'Esteroides', 5000, 11),
(9, 'Estrol', 'Esteroides', 5000, 4),
(10, 'Estrol', 'Esteroides', 5000, 2),
(11, 'Estrol', 'Esteroides', 5000, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `img` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `telefono`, `correo`, `pass`, `tipo`, `img`) VALUES
(1, 'Jhon', '3122789876', 'jhonp12@gmail.com', 'jhon12', 'admin', 'akon.JPG'),
(2, 'Diego', '3132782322', 'diego12@gmail.com', 'diego12', 'admin', ''),
(3, 'AngelD', '3167482234', 'angelnav@gmail.com', 'angel123', 'admin', ''),
(4, 'pepe49', '3108982938', 'pepepe@gmail.com', 'pep12', 'user', 'akon.JPG'),
(5, 'Raul122', '3290987567', 'raul99@gmail.com', 'raul99', 'user', ''),
(6, 'Sofia', '3190987567', 'sofia@gmail.com', '123', 'user', ''),
(7, 'Cardenas12', '313899567', 'cardenas12@gmail.com', 'cardenas12', 'user', ''),
(9, 'J2', '3134890345', 'j22@gmail.com', 'j234', 'user', ''),
(10, 'angelmacaco12', '12312323', 'angelmacaco@gmail.com', '1234', 'user', ''),
(11, 'j13', '3107059209', 'j13@gmail.com', 'j33', 'user', ''),
(12, 'Maria12', '3098768213', 'maria12@gmail.com', 'mari12', 'user', ''),
(13, 'Rl4P', '12312321', 'sdeiasjdis@gmail.com', 'admin', 'user', ''),
(14, 'Admin', '300299', 'admin@gmail.com', '2338', 'admin', ''),
(15, 'Orlando1', '3224567656', 'orlando1@gmail.com', 'orlando12', 'user', ''),
(16, 'Orlando2', '1231232324', 'orlandosena@gmail.com', 'orlando12', 'user', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos_a`
--
ALTER TABLE `productos_a`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos_a`
--
ALTER TABLE `productos_a`
  MODIFY `id_producto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
