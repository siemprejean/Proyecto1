-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-11-2021 a las 22:32:27
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `preguntas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `NUMERO` int(11) NOT NULL,
  `NOMBRE` varchar(100) NOT NULL,
  `RESPUESTAS` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`NUMERO`, `NOMBRE`, `RESPUESTAS`) VALUES
(101, 'rty', 'a,b,c,a,b,b,a,b,b,a,b');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas_v`
--

CREATE TABLE `preguntas_v` (
  `NUMERO` int(20) NOT NULL COMMENT 'NUMERO DE PREGUNTA',
  `PREGUNTA` varchar(256) NOT NULL COMMENT 'PREGUNTA',
  `A` varchar(64) DEFAULT NULL,
  `B` varchar(64) DEFAULT NULL,
  `C` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `preguntas_v`
--

INSERT INTO `preguntas_v` (`NUMERO`, `PREGUNTA`, `A`, `B`, `C`) VALUES
(1, 'Dos tipos de sustantivos comunes\r\n\r\n', 'Concretos', 'Abstractos', 'Propio'),
(2, '¿Cual de estos animales no es un ave?', 'Paloma', 'Perico', 'Tigre'),
(3, '¿Cual de estos alimentos no es una fruta?', 'Uva', 'Pan', 'Pera'),
(4, 'Dos colores primarios', 'Morado', 'Rojo', 'Azul'),
(5, 'Dos colores secundarios', 'Morado', 'Rojo', 'Verde'),
(6, '¿Cual de las siguientes opciones no es una planta?', 'Rosa', 'Bromelia', 'shiitake'),
(8, 'Tiempos verbales de la Narracion', 'Narracion', 'Descripccion', 'Dialogo'),
(9, '¿Cuales de las siguientes bebidas no son productos lacteos?', 'Leche de almendras\r\n', 'Leche de soja\r\n', 'Leche de vaca'),
(10, 'Tipos de Dimensiones Observables', 'Primera Dimension', 'Segunda Dimension', 'Tercera Dimension'),
(11, 'Seleccione los opuestos', 'Dia', 'Noche', 'carro volador'),
(12, '¿Cual de los siguiente elementos es un grano?', 'Arroz', 'Cebada', 'Avena'),
(13, '¿Cuales de los siguiente elementos son numeros?', '1', '2', 'A'),
(14, 'Seleccione las primera dos letras del alfabeto', 'A', '2', 'B'),
(15, 'Seleccione los tipos de variable', 'Entero', 'Flotante', 'Cadena'),
(16, 'Seleccione a los artropodos', 'Mariposas', 'Escorpiones', 'Tiburon'),
(17, 'Seleccione los tipos de textos', 'Descriptivos', 'Cientificos', 'Expositivo'),
(18, 'Dos generos', 'Comedia', 'Accion', 'Plato'),
(19, '¿Cual de las siguientes equivale a 1 hora?', '60 Minutos', '3600 Segundos', '3 Dias'),
(20, 'Carabelas utilizadas por Cristobal Colon en su primer viaje al nuevo mundo', 'La Niña', 'La Pinta', 'El Perla Negra');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`NUMERO`);

--
-- Indices de la tabla `preguntas_v`
--
ALTER TABLE `preguntas_v`
  ADD PRIMARY KEY (`NUMERO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `NUMERO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT de la tabla `preguntas_v`
--
ALTER TABLE `preguntas_v`
  MODIFY `NUMERO` int(20) NOT NULL AUTO_INCREMENT COMMENT 'NUMERO DE PREGUNTA', AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
