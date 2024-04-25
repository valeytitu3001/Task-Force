-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 25-04-2024 a las 16:20:04
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base_registros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `id_grupos` int(11) NOT NULL,
  `grados` int(1) NOT NULL,
  `grupos` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id_grupos`, `grados`, `grupos`) VALUES
(1, 1, 'A'),
(2, 1, 'B'),
(3, 1, 'C'),
(4, 1, 'D'),
(5, 1, 'E'),
(6, 1, 'F'),
(7, 1, 'G'),
(8, 1, 'H'),
(9, 2, 'A'),
(10, 2, 'B'),
(11, 2, 'C'),
(12, 2, 'D'),
(13, 2, 'E'),
(14, 2, 'F'),
(15, 2, 'G'),
(16, 2, 'H'),
(17, 3, 'A'),
(18, 3, 'B'),
(19, 3, 'C'),
(20, 3, 'D'),
(21, 3, 'E'),
(22, 3, 'F'),
(23, 3, 'G'),
(24, 3, 'H'),
(25, 4, 'A'),
(26, 4, 'B'),
(27, 4, 'C'),
(28, 4, 'D'),
(29, 4, 'E'),
(30, 4, 'F'),
(31, 4, 'G'),
(32, 4, 'H'),
(33, 5, 'A'),
(34, 5, 'B'),
(35, 5, 'C'),
(36, 5, 'D'),
(37, 5, 'E'),
(38, 5, 'F'),
(39, 5, 'G'),
(40, 5, 'H'),
(41, 6, 'A'),
(42, 6, 'B'),
(43, 6, 'C'),
(44, 6, 'D'),
(45, 6, 'E'),
(46, 6, 'F'),
(47, 6, 'G'),
(48, 6, 'H');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pyr`
--

CREATE TABLE `pyr` (
  `id_chat` int(11) NOT NULL,
  `preguntas` varchar(5000) NOT NULL,
  `respuestas` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `pyr`
--

INSERT INTO `pyr` (`id_chat`, `preguntas`, `respuestas`) VALUES
(1, 'Recomiendame/sugiereme/dime/que medidas disciplinarias puedo aplicar a un alumno/cadete', '1.Amonestación verbal: Una advertencia verbal dada al estudiante por comportamiento inapropiado.\r\n2.Amonestación por escrito: Un registro por escrito de la conducta del estudiante y la advertencia de consecuencias adicionales si continúa el comportamiento.\r\n3.Detención: El estudiante debe permanecer después de la escuela o durante el recreo como consecuencia de su comportamiento.\r\n4.Suspensión temporal: El estudiante es retirado temporalmente de la escuela por un período determinado de tiempo.\r\n5.Suspensión a largo plazo: Similar a la suspensión temporal, pero por un período prolongado de tiempo, generalmente más de diez días.\r\n6.Expulsión: El estudiante es retirado permanentemente de la escuela.\r\n7.Trabajo comunitario: El estudiante puede ser asignado a realizar tareas o servicios para la comunidad como consecuencia de su comportamiento.\r\n8.Restitución: El estudiante puede ser requerido para reparar o pagar por cualquier daño causado como resultado de su comportamiento.\r\n9.Asistencia a clases de tutoría o consejería: El estudiante puede ser requerido para asistir a clases diseñadas para abordar problemas de comportamiento o recibir asesoramiento.\r\n10.Restricción de privilegios: Se pueden retirar ciertos privilegios, como participar en actividades extracurriculares, asistir a eventos escolares, etc.'),
(2, 'Como puedo generar/hacer/realizar/crear un registro', 'Si deseas realizar un registro solo presiona el botón de \"REGISTRAR\" en el menú principal de la página'),
(6, 'como puedo buscar/hacer/ver el reporte de alguien', 'Te explico como puedes consultar el reporte de alguien.\r\nDirígete al apartado de \"SERVICIOS\" de nuestra pagina y oprime el botón de \"Consultas\" ahí podrás consultar la incidencia que busques.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id_registro` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `nombre_reporta` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cargo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nombre_cadete` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `matricula` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `grado` int(11) NOT NULL,
  `grupo` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `clasificacion` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `descripcion` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `medidas` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id_registro`, `fecha`, `nombre_reporta`, `cargo`, `nombre_cadete`, `matricula`, `grado`, `grupo`, `clasificacion`, `descripcion`, `medidas`) VALUES
(12, '2024-04-22', 'MAYOR NIÑO', 'COORDINADOR DE CUERPO DE CADET', 'Leonardo Vazquez Morales', 'BBMCE010721H0231', 6, 'C', 'conducta', 'No hace tareas, no entra a clases por estar programando', 'Se le pondra una camara en la frente con chip rastreador'),
(13, '2024-04-22', 'Arnulfo Bazaldua Lugo', 'Director', 'Wendy Lerma', 'BBMCE010721M0207', 6, 'A', 'academico', 'REPROBO', 'COMERSE UN LIBRO'),
(14, '2024-04-22', 'Leonardo', 'Director', 'dulce valeria', 'BBMCE010721M0212', 6, 'B', 'conducta', 'no', 'no'),
(15, '2024-04-22', 'Leonardo', 'Director', 'dulce valeria', 'BBMCE010721M0212', 2, 'B', 'conducta', 'ugfdd bdsxbnn \r\nzae hytrfff yhhhhhhb', 'aztw'),
(16, '0000-00-00', 'gg', 'gg', 'gg', 'BBMCE010821H0377', 3, 'B', 'conducta', 'DD', 'DD'),
(17, '2024-04-15', 'luis', 'profe', 'leonardo', 'bbmcejfjfjfjfjf', 6, 'C', 'conducta', 'sisisi', 'isiiisi'),
(18, '2024-04-24', 'a', 'a', 'a', 'sdffdgg', 1, 'D', 'conducta', 'fffffffffffff', 'fffffffffffffffff'),
(19, '2024-04-24', 'b', 'b', 'b', 'b', 1, 'H', 'academico', 'bbbbbbbbbbbbbbbbbb', 'bbbbbbbbbbbbbbbbbbbbbbb'),
(20, '2024-04-24', 'z', 'z', 'z', 'z', 4, 'E', 'academico', 'z', 'z'),
(21, '2024-04-24', 'x', 'x', 'x', 'x', 3, 'D', 'academico', 'x', 'x'),
(22, '2024-04-24', 'k', 'k', 'k', 'k', 2, 'C', 'conducta', 'k', 'k'),
(23, '0000-00-00', 'yo', 'my', 'loyola', '221', 6, 'B', 'academico', 'ss', 'ss'),
(24, '2024-04-24', 'Luz', 'civil', 'Mora', 'BBMCE010821H0376', 6, 'B', 'conducta', 'BLABLABLABLABLABLABAL', 'BLABLABLABLABLABLABAL'),
(25, '0000-00-00', 'Luz', 'soltera', 'luis', 'BBMCE010821H0375', 6, 'C', 'conducta', 'lablabalablabalabalbab', 'labbablabalaalbabablabablab'),
(26, '2024-04-25', 'fff', 'fff', 'fff', 'ff', 1, 'H', 'academico', 'fff', 'fff'),
(27, '2024-04-25', 'Leonardo Vazquez', 'Sargento', 'Luz Elena', 'BBMCE010721M0246', 6, 'C', 'conducta', 'NO AYUDO, SE QUEDO DORMDA, RONCO MUCHO, ', 'HORCA');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id_grupos`);

--
-- Indices de la tabla `pyr`
--
ALTER TABLE `pyr`
  ADD PRIMARY KEY (`id_chat`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id_registro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id_grupos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `pyr`
--
ALTER TABLE `pyr`
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id_registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
