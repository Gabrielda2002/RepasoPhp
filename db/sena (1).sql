-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2023 a las 00:33:28
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sena`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apreficha`
--

CREATE TABLE `apreficha` (
  `NUMDOCAPRE` double NOT NULL,
  `NUMFICHA` double NOT NULL,
  `Estado_Matrícula` varchar(100) DEFAULT NULL,
  `Fecha_inicio` date NOT NULL,
  `Fecha_final` date NOT NULL,
  `Estado` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `apreficha`
--

INSERT INTO `apreficha` (`NUMDOCAPRE`, `NUMFICHA`, `Estado_Matrícula`, `Fecha_inicio`, `Fecha_final`, `Estado`) VALUES
(1289564589, 2345678, 'Anulado matrícula', '2023-09-01', '2024-07-01', 'Por certificar'),
(9078562367, 2345678, 'Matriculado', '2023-09-01', '2024-07-01', 'Por certificar'),
(1456785689, 3456789, 'Anulado matrícula', '2023-09-28', '2024-05-16', 'Aplazado'),
(9067895487, 3456789, 'Anulado matrícula', '2023-09-28', '2024-05-16', 'Aplazado'),
(1989765809, 4567890, 'Anulado matrícula', '2023-09-30', '2026-10-28', 'Por certificar'),
(9056342876, 4567890, 'Matriculado', '2023-09-30', '2026-10-28', 'Certificado'),
(6789563489, 5678901, 'Anulado matrícula', '2023-09-26', '2026-09-30', 'Aplazado'),
(8967567890, 5678901, 'Matriculado', '2023-09-26', '2026-09-30', 'Certificado'),
(7655828921, 8888888, 'Matriculado', '2023-09-29', '2024-06-21', 'Por certificar'),
(7889672433, 8888888, 'Matriculado', '2023-09-29', '2024-06-21', 'Por certificar'),
(1989765809, 2345678, 'Matriculado', '2023-09-01', '2024-07-01', 'Por certificar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendices`
--

CREATE TABLE `aprendices` (
  `NumDoc` double NOT NULL,
  `TipoDoc` varchar(100) DEFAULT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Apellido1` varchar(100) NOT NULL,
  `Apellido2` varchar(100) NOT NULL,
  `Edad` varchar(100) NOT NULL,
  `EmailInst` varchar(100) DEFAULT NULL,
  `EmailPer` varchar(100) DEFAULT NULL,
  `Sexo` varchar(100) NOT NULL,
  `Telfijo` double NOT NULL,
  `celular` double NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `FechaRegis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `aprendices`
--

INSERT INTO `aprendices` (`NumDoc`, `TipoDoc`, `Nombre`, `Apellido1`, `Apellido2`, `Edad`, `EmailInst`, `EmailPer`, `Sexo`, `Telfijo`, `celular`, `Direccion`, `FechaRegis`) VALUES
(1005040452, 'Cedula de ciudadania', 'Gabriel', 'Duarte', 'Arias', '21', 'duartearias2002@gmail.com', 'duartearias2002@gmail.com', '56 tipos de gays', 0, 573025965432, 'aereoupuadba', '2023-10-16 00:28:16'),
(1289564589, 'T.I', 'Valentina', 'González ', 'Pérez', '17', 'valenpe@sena.edu.co', 'jahikole@hotmal.com', 'Femenino', 3878895634, 3545758951, 'Ospina perez calle 30', ''),
(1456785689, 'C.C', 'Emiliano', 'Rodríguez ', 'García', '27', 'Emigar@sena.edu.co', 'Lensoigo@gmail.com', 'Masculino', 8967458967, 3567890562, 'El gramalote', ''),
(1989765809, 'C.C', 'Pepiyo', 'Lasques ', 'Vijamin', '23', 'VijaminPe@sena.edu.co', 'Lasquespeyo@gmail.com', 'Masculino', 2546789092, 3567765589, 'Calle 8 av 7 Barrio Buena ventura', ''),
(6789563489, 'C.E', 'Diego', 'Sánchez', 'Ramírez', '20', 'diegosan@sena.edu.co', 'jakomeli@gmail.com', 'Masculino', 6789563412, 3889563412, 'Calle 9 Av4 Cuatro de mayo', ''),
(7655828921, 'C.C', 'Santiago', 'Hernández', 'Tomar', '21', 'santiaher@sena.edu.co', 'Hersantiar@gmail.com', 'Masculino', 3456893467, 4589562367, 'Cruces del tamarindo Calle 8', ''),
(7889672433, 'C.C', 'Regina', 'García', 'Pérez', '20', 'Reggar@sena.edu.co', 'lapapota@gmail.com', 'Femenino', 6789452389, 3990783476, 'Los patios', ''),
(8967567890, 'C.C', 'Leonardo', 'Ramírez', 'Cruz', '25', 'LeoRam@sena.edu.co', 'lolcnireloyu@gmail.com', 'Masculino', 7890567845, 3789674512, 'Sanata ana Los patios', ''),
(9056342876, 'C.C', 'María Jóse', 'Hernández', 'Cruz', '25', 'Marajosc@sena.edu.co', 'Marialasano@gmail.com', 'Femenino', 9876549054, 3628933901, 'Villa del camarón', ''),
(9067895487, 'T.I', 'Camila', 'Ovalle', 'Ruiz', '16', 'CamiOva@sena.edu.co', 'Btsjalobien@yahoo.com', 'Femenino', 8912905643, 3257109286, 'Calle 90 el centro', ''),
(9078562367, 'C.C', 'Renata', 'López ', 'González ', '23', 'Renago@sena.edu.co', 'lolisjijija@gmail.edu.co', 'Femenino', 7867568945, 3001896745, 'los prados', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichas`
--

CREATE TABLE `fichas` (
  `Numficha` double NOT NULL,
  `Estado` varchar(100) NOT NULL,
  `Fecha_inicio` date NOT NULL,
  `Fecha_final` date NOT NULL,
  `Fecha_terminacion` date NOT NULL,
  `CODPROGRAMA` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fichas`
--

INSERT INTO `fichas` (`Numficha`, `Estado`, `Fecha_inicio`, `Fecha_final`, `Fecha_terminacion`, `CODPROGRAMA`) VALUES
(2345678, 'En_ejecución', '2023-09-30', '2024-07-01', '2024-12-12', 5432109),
(3456789, 'Cancelada', '2023-09-28', '2024-05-16', '2023-09-30', 7865438),
(4567890, 'En_ejecución', '2023-09-30', '2026-10-28', '2026-11-26', 8801478),
(5678901, 'En_ejecución', '2023-09-26', '2026-09-30', '2026-10-28', 9876543),
(8888888, 'En_ejecución', '2023-09-29', '2024-06-21', '2025-04-17', 1234567);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programas`
--

CREATE TABLE `programas` (
  `Codprograma` double NOT NULL,
  `Nomprog` varchar(100) NOT NULL,
  `Nivel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `programas`
--

INSERT INTO `programas` (`Codprograma`, `Nomprog`, `Nivel`) VALUES
(1234567, 'Instalaciones para Suministro de Gas Combustible en Edificaciones Residenciales y Comerciales', 'Técnico'),
(5432109, 'Soldadura de Productos Metálicos en Platina', 'Técnico'),
(7865438, 'Gestión Contable y Financiera', 'tecnólogo'),
(8801478, 'Gestión Contable y Financiera', 'tecnólogo'),
(9876543, 'Operación de Maquinaria Pesada para Excavación', 'Técnico');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `apreficha`
--
ALTER TABLE `apreficha`
  ADD KEY `apreficha_ibfk_1` (`NUMDOCAPRE`),
  ADD KEY `apreficha_ibfk_2` (`NUMFICHA`);

--
-- Indices de la tabla `aprendices`
--
ALTER TABLE `aprendices`
  ADD PRIMARY KEY (`NumDoc`);

--
-- Indices de la tabla `fichas`
--
ALTER TABLE `fichas`
  ADD PRIMARY KEY (`Numficha`),
  ADD KEY `CODPROGRAMA` (`CODPROGRAMA`);

--
-- Indices de la tabla `programas`
--
ALTER TABLE `programas`
  ADD PRIMARY KEY (`Codprograma`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `apreficha`
--
ALTER TABLE `apreficha`
  ADD CONSTRAINT `apreficha_ibfk_1` FOREIGN KEY (`NUMDOCAPRE`) REFERENCES `aprendices` (`NumDoc`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `apreficha_ibfk_2` FOREIGN KEY (`NUMFICHA`) REFERENCES `fichas` (`Numficha`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `fichas`
--
ALTER TABLE `fichas`
  ADD CONSTRAINT `fichas_ibfk_1` FOREIGN KEY (`CODPROGRAMA`) REFERENCES `programas` (`Codprograma`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
