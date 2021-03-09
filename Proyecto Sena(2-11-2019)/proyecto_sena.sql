-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2019 a las 02:12:37
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto sena`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `computadores`
--

CREATE TABLE `computadores` (
  `ID_computador` int(11) NOT NULL,
  `nombre_computador` varchar(60) NOT NULL,
  `marca` varchar(60) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `fecha_de_ingreso` date NOT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `ID_sala` int(11) DEFAULT NULL,
  `ID_ubicacion` int(11) DEFAULT NULL,
  `ID_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `computadores`
--

INSERT INTO `computadores` (`ID_computador`, `nombre_computador`, `marca`, `tipo`, `fecha_de_ingreso`, `estado`, `ID_sala`, `ID_ubicacion`, `ID_usuario`) VALUES
(20001, 'DESKTOP-UBUGGUF', 'Lenovo', '2 en 1', '2015-12-04', 1, 2, 20001, 1),
(20002, 'DESKTOP-J3DE8AU', 'Asus', '2 en 1', '2018-01-26', 1, 2, 20002, 1),
(20003, '', 'Janus', 'Equipo de mesa', '2010-01-27', 1, 2, 20003, 1),
(20004, 'ISAILO-PC-14', 'Janus', 'Equipo de mesa', '2010-01-27', 1, 2, 20004, 1),
(20005, 'DESKTOP-ECCGPAL', 'Asus', '2 en 1', '2018-01-26', 1, 2, 20005, 1),
(20006, 'diego-PC', 'Janus', 'Equipo de mesa', '2010-01-27', 1, 2, 20006, 1),
(20007, 'Equipo38-PC', 'Janus', 'Equipo de mesa', '2010-01-27', 1, 2, 20007, 1),
(20008, 'SERVER', 'Lenovo', '2 en 1', '2015-12-04', 1, 2, 20009, 1),
(20009, 'DESKTOP-7T91PIC', 'Asus', '2 en 1', '2018-01-26', 1, 2, 20010, 1),
(20010, 'DESKTOP-PAELPVG', 'Asus', '2 en 1', '2018-01-26', 1, 2, 20011, 1),
(20011, 'DESKTOP-GHJBPEF', 'Lenovo', '2 en 1', '2015-12-04', 1, 2, 20012, 1),
(20012, 'DESKTOP-5V25D5C', 'Lenovo', '2 en 1', '2015-12-04', 1, 2, 20013, 1),
(20013, 'DESKTOP-FASVTS7', 'Lenovo', '2 en 1', '2015-12-04', 1, 2, 20014, 1),
(20014, 'DESKTOP-IIL101Q', 'Lenovo', '2 en 1', '2015-12-04', 1, 2, 20015, 1),
(20015, 'DESKTOP-RDRCL3U', 'Lenovo', '2 en 1', '2015-12-04', 1, 2, 20017, 1),
(20016, 'DESKTOP-6TDGH53', 'Lenovo', '2 en 1', '2015-12-04', 1, 2, 20018, 1),
(20017, 'DESKTOP-FFLNR14', 'Lenovo', '2 en 1', '2015-12-04', 1, 2, 20019, 1),
(20018, 'DESKTOP-SI8AMKC', 'Lenovo', '2 en 1', '2015-12-04', 1, 2, 20020, 1),
(20019, 'DESKTOP-GKV0DD1', 'Lenovo', '2 en 1', '2015-12-04', 1, 2, 20022, 1),
(20020, 'CONTABILIDAD-PC', 'Janus', 'Equipo de mesa', '2010-01-27', 1, 2, 20023, 1),
(20021, 'ISAILO-PC-04', 'Janus', 'Equipo de mesa', '2010-01-27', 1, 2, 20025, 1),
(20022, '', 'Janus', 'Equipo de mesa', '2010-01-27', 1, 2, 20026, 1),
(20023, '', 'Janus', 'Equipo de mesa', '2010-01-27', 1, 2, 20027, 1),
(20024, '', 'Janus', 'Equipo de mesa', '2010-01-27', 1, 2, 20028, 1),
(20025, 'ISAILO-PC-10', 'Janus', 'Equipo de mesa', '2010-01-27', 1, 2, 20029, 1),
(20026, 'ISAILO-PC-15', 'Janus', 'Equipo de mesa', '2010-01-27', 1, 2, 20030, 1),
(20027, 'ISAILO-PC-12', 'Janus', 'Equipo de mesa', '2010-01-27', 1, 2, 20031, 1),
(20028, '', 'Lenovo', '2 en 1', '2015-12-04', 1, 2, 20032, 1),
(20029, '', 'Asus', '2 en 1', '2018-01-26', 1, 2, 20000, 1),
(30001, 'EQUIPO20BACHILL', 'Janus', 'Equipo de mesa', '2010-01-27', 1, 3, 30001, 1),
(30002, 'INFORMATICA-PC', 'Janus', 'Equipo de mesa', '2010-01-27', 1, 3, 30002, 1),
(30003, 'EQUIPO20BACHILL', 'Janus', 'Equipo de mesa', '2010-01-27', 1, 3, 30003, 1),
(30004, '', 'Janus', 'Equipo de mesa', '2010-01-27', 1, 3, 30004, 1),
(30005, 'Equipo2', 'Janus', 'Equipo de mesa', '2010-01-27', 1, 3, 30005, 1),
(30006, 'Admin-PC', 'Lenovo', '2 en 1', '2015-12-04', 1, 3, 30006, 1),
(30007, 'DESKTOP-9HO7CGC', 'Lenovo', '2 en 1', '2015-12-04', 1, 3, 30009, 1),
(30008, 'EQUIPO26BACHILL', 'Lenovo', '2 en 1', '2015-12-04', 1, 3, 30010, 1),
(30009, 'DESKTOP-2I3GI6P', 'Lenovo', '2 en 1', '2015-12-04', 1, 3, 30011, 1),
(30010, 'EQUIPO10', 'Asus', '2 en 1', '2018-01-26', 1, 3, 30012, 1),
(30011, 'DESKTOP-(OEVGU8', 'Lenovo', '2 en 1', '2015-12-04', 1, 3, 30013, 1),
(30012, 'DESKTOP-3BRGI9F', 'Lenovo', '2 en 1', '2015-12-04', 1, 3, 30014, 1),
(30013, 'DESKTOP-4PUALIS', 'Asus', '2 en 1', '2018-01-26', 1, 3, 30015, 1),
(30014, 'DESKTOP-SLAOOAK', 'Lenovo', '2 en 1', '2015-12-04', 1, 3, 30016, 1),
(30015, 'EQUIPIO15', 'Asus', '2 en 1', '2018-01-26', 1, 3, 30017, 1),
(30016, 'EQUIPO22', 'Janus', 'Equipo de mesa', '2010-01-27', 1, 3, 30018, 1),
(30017, 'EQUIPO21', 'Janus', 'Equipo de mesa', '2010-01-27', 1, 3, 30019, 1),
(30018, 'EQUIPO20', 'Janus', 'Equipo de mesa', '2010-01-27', 1, 3, 30020, 1),
(30019, 'EQUIPO19', 'Janus', 'Equipo de mesa', '2010-01-27', 1, 3, 30021, 1),
(30020, 'equipo18-PC', 'Janus', 'Equipo de mesa', '2010-01-27', 1, 3, 30022, 1),
(30021, 'EQUIPO17', 'Janus', 'Equipo de mesa', '2010-01-27', 1, 3, 30023, 1),
(30022, 'EQUIPO16', 'Janus', 'Equipo de mesa', '2010-01-27', 1, 3, 30024, 1),
(30023, 'EQUIPO23', 'Janus', 'Equipo de mesa', '2010-01-27', 1, 3, 30025, 1),
(30024, 'EQUIPO23-PC', 'Janus', 'Equipo de mesa', '2010-01-27', 1, 3, 30026, 1),
(30025, 'COMPUTADOR25', 'Asus', '2 en 1', '2018-01-26', 1, 3, 30027, 1),
(30026, 'Equipo_26-PC', 'Janus', 'Equipo de mesa', '2010-01-27', 1, 3, 30028, 1),
(30027, 'EQUIPO27', 'Janus', 'Equipo de mesa', '2010-01-27', 1, 3, 30029, 1),
(30028, 'EQUIPO28', 'Janus', 'Equipo de mesa', '2010-01-27', 1, 3, 30030, 1),
(30029, 'DESKTOP-C77PF20', 'Asus', '2 en 1', '2018-01-26', 1, 3, 30000, 1);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `computador_estudiante`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `computador_estudiante` (
`ID_estudiante` int(11)
,`nombre_estudiante` text
,`apellido_estudiante` text
,`ID_computador` int(11)
,`marca` varchar(60)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `computador_sala`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `computador_sala` (
`ID_computador` int(11)
,`marca` varchar(60)
,`ID_sala` int(11)
,`nombre` varchar(50)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `ID_estudiante` int(11) NOT NULL,
  `nombre_estudiante` text NOT NULL,
  `apellido_estudiante` text NOT NULL,
  `curso` varchar(30) NOT NULL,
  `ID_computador` int(11) DEFAULT NULL,
  `fecha_asignacion_computador` date NOT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `ID_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`ID_estudiante`, `nombre_estudiante`, `apellido_estudiante`, `curso`, `ID_computador`, `fecha_asignacion_computador`, `estado`, `ID_usuario`) VALUES
(2384, 'Juan Pablo', 'Alvarez Marin', '11B', NULL, '2019-02-04', 1, 1),
(2492, 'Karena Ximena', 'Romero Paez', '10A', NULL, '2019-02-06', 1, 1),
(2559, 'Paula Nicolle', 'Alvarez Marin', '11A', NULL, '2019-02-05', 1, 1),
(2585, 'Andres Felipe', 'Mendoza Guerrero', '11B', NULL, '2019-02-04', 1, 1),
(2681, 'Jhonnatan Steeven', 'Varela Alvarado', '11B', 30025, '2019-02-04', 1, 1),
(2692, 'Dariana Gabriela', 'Gomez Diaz', '11A', 30019, '2019-02-05', 1, 1),
(2709, 'Andres Felipe', 'Bejarano Baron', '11B', 30008, '2019-02-04', 1, 1),
(2781, 'Valentina', 'Ospina Perez', '11B', NULL, '2019-02-04', 1, 1),
(2791, 'Daniela', 'Alonso Agudelo', '11A', 30017, '2019-02-05', 1, 1),
(2802, 'Daniela', 'Rocha Nova', '10B', NULL, '2019-02-07', 1, 1),
(2803, 'Maria Salome', 'Gonzales Gutierrez', '11B', NULL, '2019-02-04', 1, 1),
(2834, 'Santiago', 'Guerrero Danderino', '11B', 30027, '2019-02-04', 1, 1),
(2836, 'Daniel Alexander', 'Arias Uribe', '10B', NULL, '2019-02-07', 1, 1),
(2873, 'Cesar Augusto', 'Mancilla Murcia', '11A', NULL, '2019-02-05', 1, 1),
(2881, 'Nicolas', 'Castiblanco Rativa', '11B', NULL, '2019-02-04', 1, 1),
(2887, 'Camilo Andres', 'Pinzon Orozco', '11A', NULL, '2019-02-05', 1, 1),
(2888, 'Valentina', 'Poveda Puentes', '10B', NULL, '2019-02-07', 1, 1),
(2901, 'Juan Felipe', 'Villalba Mendez', '10A', NULL, '2019-02-06', 1, 1),
(2939, 'Karem Julieth', 'Caro Clavijo', '10A', NULL, '2019-02-06', 1, 1),
(2949, 'Hanna Catalina', 'Castillo Lamilla', '10B', NULL, '2019-02-07', 1, 1),
(2992, 'Paula Jimena', 'Zambrano Ospina', '10A', NULL, '2019-02-06', 1, 1),
(3004, 'Josep Emanuel', 'Leon Joya', '8B', NULL, '2019-02-02', 1, 1),
(3010, 'Laura Mariana', 'Rodriguez Saray', '10A', NULL, '2019-02-06', 1, 1),
(3028, ' Sofia', 'Pinzon Cardenas', '11B', NULL, '2019-02-04', 1, 1),
(3030, 'Santiago', 'Carrasquilla Cardenas', '11A', NULL, '2019-02-05', 1, 1),
(3033, 'Juan Pablo', 'Prieto Serrato', '11B', NULL, '2019-02-04', 1, 1),
(3034, 'Angel Fabian', 'Suarez Jimenez', '11A', 30027, '2019-02-05', 1, 1),
(3040, 'Cristin Violetta', 'Salamanca Gomez', '10A', NULL, '2019-02-06', 1, 1),
(3046, 'Alison Michelle', 'Guevara Rodriguez', '10A', NULL, '2019-02-06', 1, 1),
(3047, 'Nicolle Daniela', 'Victoria Rodriguez', '10A', NULL, '2019-02-06', 1, 1),
(3055, 'Dilan Hugo', 'Delgado Alvear', '10A', NULL, '2019-02-06', 1, 1),
(3060, 'Eduardo Steven', 'Londoño Alayon', '9A', NULL, '2019-02-04', 1, 1),
(3103, 'Angelly', 'Cruz montañez', '11A', NULL, '2019-02-05', 1, 1),
(3120, 'Kylie', 'Bonilla Quintero', '11B', NULL, '2019-02-04', 1, 1),
(3121, 'Juan Sebastian', 'Rivera Mejia', '11B', NULL, '2019-02-04', 1, 1),
(3123, 'Natalia', 'Martin Zamora', '8B', NULL, '2019-02-02', 1, 1),
(3132, 'Natalia Alejandra', 'Perdomo Aguas', '10A', NULL, '2019-02-06', 1, 1),
(3135, 'Natalia', 'Bombiela Garzon', '9A', NULL, '2019-02-04', 1, 1),
(3147, 'Juan Pablo', 'Segura Mejia', '11A', 30009, '2019-02-05', 1, 1),
(3155, 'Camilo Andres', 'Casallas Gomez', '10B', NULL, '2019-02-07', 1, 1),
(3156, 'Maria Jose', 'Leon Buesaquillo', '10B', NULL, '2019-02-07', 1, 1),
(3163, 'Mc Anderson', 'Jurado Realpe', '10A', NULL, '2019-02-06', 1, 1),
(3168, 'Paula Fernanda', 'Acosta Rey', '11A', NULL, '2019-02-05', 1, 1),
(3182, 'Laura Valentina', 'Rincon Rodriguez', '8A', NULL, '2019-02-01', 1, 1),
(3183, 'Julian Stiven', 'Gavilan Solano', '8C', NULL, '2019-02-03', 1, 1),
(3185, 'Santiago', 'Diaz Rodriguez', '8C', NULL, '2019-02-03', 1, 1),
(3193, 'Juliana', 'Morales Alayon', '10A', NULL, '2019-02-06', 1, 1),
(3194, 'Julian David', 'Rios Cardozo', '10B', NULL, '2019-02-07', 1, 1),
(3195, 'Ana Marria', 'Niño Barragan', '9B', NULL, '2019-02-05', 1, 1),
(3198, 'Camilo Andres', 'Rojas Quintero', '11B', 30028, '2019-02-04', 1, 1),
(3199, 'Daniel Felipe', 'Leal Toledo', '11A', NULL, '2019-02-05', 1, 1),
(3202, 'Karol Daniella', 'Cotamo Morato', '11A', 30007, '2019-02-05', 1, 1),
(3207, 'Angel David', 'Zambrano Vasquez', '10B', NULL, '2019-02-07', 1, 1),
(3231, 'Alisson Daniela', 'Pinzon Cardenas', '9B', NULL, '2019-02-05', 1, 1),
(3238, 'Maria Camila', 'Naranjo Muñoz', '11B', 30001, '2019-02-04', 1, 1),
(3239, 'Laura Sofia', 'Hillon Galvis', '11B', NULL, '2019-02-04', 1, 1),
(3240, 'Karen Daniela', 'Ronderos Gomez', '10A', NULL, '2019-02-06', 1, 1),
(3245, 'Daniel Esteban', 'Monsalve Pulido', '10B', NULL, '2019-02-07', 1, 1),
(3248, 'Laura Alejandra', 'Pinto Pulido', '11B', NULL, '2019-02-04', 1, 1),
(3266, 'Maria Fernanda', 'Chala Guzman', '9B', NULL, '2019-02-05', 1, 1),
(3267, 'Mariana', 'Alonso Agudelo', '8A', NULL, '2019-02-01', 1, 1),
(3272, 'Santiago Felipe', 'Buendia Castelblanco', '9A', NULL, '2019-02-04', 1, 1),
(3277, 'Stefanny Johana', 'Puentes Yañes', '10A', NULL, '2019-02-06', 1, 1),
(3279, 'David Santiago', 'Quiceno Waltero', '11A', 30026, '2019-02-05', 1, 1),
(3280, 'Mariana', 'Castañeda Castañeda', '11A', NULL, '2019-02-05', 1, 1),
(3293, 'Sebastian', 'Gaitan Montenegro', '11A', NULL, '2019-02-05', 1, 1),
(3323, 'Ana Sofia', 'Martinez Quinche', '11B', 30012, '2019-02-04', 1, 1),
(3337, 'Edgar Alejandro', 'Leal Toledo', '7C', NULL, '2019-01-07', 1, 1),
(3341, 'Kevin Steveen', 'Arcila Gomez', '8A', NULL, '2019-02-01', 1, 1),
(3344, 'Yuri Ximena', 'Rozo Vanegas', '9A', NULL, '2019-02-04', 1, 1),
(3345, 'Juan Fernando', 'Ramirez Campos', '9A', NULL, '2019-02-04', 1, 1),
(3347, 'Juan David', 'Rojas Valencia', '8A', NULL, '2019-02-01', 1, 1),
(3352, 'Nicolas', 'Ariza Ruiz', '10A', NULL, '2019-02-06', 1, 1),
(3353, 'Andres Felipe', 'Sabogal Rodriguez', '10A', NULL, '2019-02-06', 1, 1),
(3354, 'Juan Pablo', 'D\'greiff Garcia', '10A', NULL, '2019-02-06', 1, 1),
(3355, 'Jose Gabriel', 'Aviles Lizarazo', '10B', NULL, '2019-02-07', 1, 1),
(3357, 'Dana Valentina', 'Ortiz Velasquez', '9A', NULL, '2019-02-04', 1, 1),
(3359, 'Liliana Paola', 'Garcia Parra', '10B', NULL, '2019-02-07', 1, 1),
(3363, 'Sebastian', 'Moreno Rojas', '11B', 30009, '2019-02-04', 1, 1),
(3364, 'Juan Jose', 'Morales Fajardo', '11B', 30013, '2019-02-04', 1, 1),
(3387, 'Oscar Andres', 'Arevalo Pava', '9B', NULL, '2019-02-05', 1, 1),
(3388, 'Maria Stefania', 'Gutierrez Rey', '8B', NULL, '2019-02-02', 1, 1),
(3389, 'Daniel Esteban', 'Albadan Cardozo', '9A', NULL, '2019-02-04', 1, 1),
(3391, 'Giancarlo', 'Celeita Florez', '9A', NULL, '2019-02-04', 1, 1),
(3392, 'Ana Maria', 'Clavijo Coral', '9B', NULL, '2019-02-05', 1, 1),
(3394, 'Maria Alejandra', 'Quinche Otavo', '10A', NULL, '2019-02-06', 1, 1),
(3395, 'Valeria', 'Suarez Perez', '10A', NULL, '2019-02-06', 1, 1),
(3415, 'Maria Alejandra', 'Moreno Acosta', '11A', NULL, '2019-02-05', 1, 1),
(3426, 'Maria del Mar', 'Garzon Fonseca', '8C', NULL, '2019-02-03', 1, 1),
(3431, 'Luna Camila', 'Cubillos Naranjo', '9A', NULL, '2019-02-04', 1, 1),
(3432, 'Mary Natalia', 'Parra Garcia', '10B', NULL, '2019-02-07', 1, 1),
(3463, 'Maria Jose', 'Leguizamon Bonilla', '8B', NULL, '2019-02-02', 1, 1),
(3468, 'Juan Diego', 'Mora Sanchez', '8A', NULL, '2019-02-01', 1, 1),
(3469, 'Melanny Alejandra', 'Pinzon Bolivar', '8A', NULL, '2019-02-01', 1, 1),
(3471, 'Geraldine', 'Franco Marin', '8B', NULL, '2019-02-02', 1, 1),
(3473, 'Ana Maria', 'Murillo Mora', '9B', NULL, '2019-02-05', 1, 1),
(3478, 'Deivid', 'Ortega Vargas', '9B', NULL, '2019-02-05', 1, 1),
(3480, 'Santiago Andres', 'Zambrano Vasquez', '9B', NULL, '2019-02-05', 1, 1),
(3481, 'Ana Sofia', 'Naranjo Muñoz', '9B', NULL, '2019-02-05', 1, 1),
(3484, 'Angie Carolina', 'Cruz Beltran', '10A', NULL, '2019-02-06', 1, 1),
(3485, 'Juliana', 'Benitez Forero', '10A', NULL, '2019-02-06', 1, 1),
(3507, 'Angie Katherin', 'Loaiza Pachecho', '7C', NULL, '2019-01-07', 1, 1),
(3508, 'Steban', 'Carrasquilla Cardenas', '7C', NULL, '2019-01-07', 1, 1),
(3513, 'Valerie Alejandra', 'Duque Muñoz', '9A', NULL, '2019-02-04', 1, 1),
(3514, 'Jefri Steven', 'Salas Torres', '9B', NULL, '2019-02-05', 1, 1),
(3516, 'Jose Manuel', 'Sandoval Sandoval', '9A', NULL, '2019-02-04', 1, 1),
(3517, 'Angel Joseph', 'Tovar Gonzales', '9A', NULL, '2019-02-04', 1, 1),
(3518, 'Arley Santiago', 'Zuluaga Torres', '8B', NULL, '2019-02-02', 1, 1),
(3520, 'Andre Camila', 'Patiño Luna', '10B', NULL, '2019-02-07', 1, 1),
(3521, 'Cristian David', 'Osorio Alvarez', '10B', NULL, '2019-02-07', 1, 1),
(3522, 'Julian Andres', 'Loaiza Pacheco', '10A', NULL, '2019-02-06', 1, 1),
(3523, 'Johan Santiago', 'Sayago Patacon', '10B', NULL, '2019-02-07', 1, 1),
(3524, 'Carlos Santiago', 'Sotelo Chamaco', '10A', NULL, '2019-02-06', 1, 1),
(3527, 'Jorge Esteban', 'Patiño Luna', '11A', 30015, '2019-02-05', 1, 1),
(3549, 'Juan Felipe', 'Alvarez Gonzales', '11B', 30018, '2019-02-04', 1, 1),
(3552, 'Juan Felipe', 'Arias Aranguren', '10B', NULL, '2019-02-07', 1, 1),
(3571, 'Ariana', 'Quevedo Rueda', '8A', NULL, '2019-02-01', 1, 1),
(3573, 'Manuel Felipe Jose', 'Moreno Buitrago', '8B', NULL, '2019-02-02', 1, 1),
(3575, 'Maria Alejandra', 'Moreno Rubio', '9A', NULL, '2019-02-04', 1, 1),
(3582, 'Andres Felipe', 'Duarte Garcia', '11B', 30016, '2019-02-04', 1, 1),
(3595, 'Kristine Nicole', 'Cortes Holguin', '8C', NULL, '2019-02-03', 1, 1),
(3626, 'Cristian David', 'Chavez Paredes', '8A', NULL, '2019-02-01', 1, 1),
(3633, 'Tomas', 'Arciniegas Quintero', '8B', NULL, '2019-02-02', 1, 1),
(3635, 'Nicolas Andres', 'Osorio Betancourt', '8A', NULL, '2019-02-01', 1, 1),
(3637, 'Julian David', 'Portilla Rios', '8B', NULL, '2019-02-02', 1, 1),
(3638, 'Anna Sophia', 'Galeano Barbosa', '8A', NULL, '2019-02-01', 1, 1),
(3639, 'Pool Martin', 'Patarroyo Benavides', '8B', NULL, '2019-02-02', 1, 1),
(3644, 'David Stiven', 'Serrano Jimenez', '9B', NULL, '2019-02-05', 1, 1),
(3645, 'Lorena Paola', 'Castellanos Meza', '9A', NULL, '2019-02-04', 1, 1),
(3646, 'Diego Alejandro', 'Rodriguez Ruiz', '9A', NULL, '2019-02-04', 1, 1),
(3647, 'Juan David', 'Sanchez Beltran', '9A', NULL, '2019-02-04', 1, 1),
(3651, 'Hernan Felipe', 'Morales Contreras', '9B', NULL, '2019-02-05', 1, 1),
(3652, 'Maria Camila', 'Certuche Betancourth', '10A', NULL, '2019-02-06', 1, 1),
(3653, 'Sebastian', 'Cantor Ospina', '10A', NULL, '2019-02-06', 1, 1),
(3656, 'Kevin Daniel', 'Lopez Cortes', '11A', NULL, '2019-02-05', 1, 1),
(3658, 'Valery Johana', 'Gonzales Barbosa', '10B', NULL, '2019-02-07', 1, 1),
(3700, 'Maria Jose', 'Chavez Reina', '7C', NULL, '2019-01-07', 1, 1),
(3701, 'Dylan Santiago', 'Gutierrez Cubillos', '7C', NULL, '2019-01-07', 1, 1),
(3705, 'Fransisco Javier', 'Acosta Rey', '8C', NULL, '2019-02-03', 1, 1),
(3706, 'Laura Camila', 'Diaz Valero', '8C', NULL, '2019-02-03', 1, 1),
(3713, 'Melissa Fernanda', 'Rojas Arteaga', '9B', NULL, '2019-02-05', 1, 1),
(3715, 'Laura Catalina', 'Talero Lopez', '10B', NULL, '2019-02-07', 1, 1),
(3731, 'Carlos Ivan', 'Orozco Puentes', '9B', NULL, '2019-02-05', 1, 1),
(3744, 'Jorge Esteban', 'Rios Cardozo', '8A', NULL, '2019-02-01', 1, 1),
(3746, 'Julian Ricardo', 'Rivera Ortiz', '9A', NULL, '2019-02-04', 1, 1),
(3773, 'Juan Diego', 'Ruiz Alarcon', '8B', NULL, '2019-02-02', 1, 1),
(3775, 'Angie Lorena', 'Contento Ortiz', '8B', NULL, '2019-02-02', 1, 1),
(3779, 'Ana Valeria', 'Rodriguez Labrador', '8B', NULL, '2019-02-02', 1, 1),
(3782, 'Angie Catalina', 'Hernandez Castillo', '10B', NULL, '2019-02-07', 1, 1),
(3797, 'Santiago', 'Jimenez Bernal', '9A', NULL, '2019-02-04', 1, 1),
(3798, 'Wilson Felipe', 'Lozano Valencia', '11A', NULL, '2019-02-05', 1, 1),
(3850, 'Erick Julian', 'Romero Penagos', '7C', NULL, '2019-01-07', 1, 1),
(3854, 'Maria Paula', 'Gutierrez Ruiz', '7C', NULL, '2019-01-07', 1, 1),
(3856, 'Mateo', 'Martinez Brand', '7C', NULL, '2019-01-07', 1, 1),
(3864, 'Nicole Valentina', 'Abella Ramos', '9A', NULL, '2019-02-04', 1, 1),
(3865, 'Maria Paula', 'Jimenez Garcia', '9B', NULL, '2019-02-05', 1, 1),
(3867, 'Edwin Steven', 'Alarcon Gomez', '10A', NULL, '2019-02-06', 1, 1),
(3870, 'Daniel Fernando', 'Garcia Pirajan', '11A', NULL, '2019-02-05', 1, 1),
(3899, 'Juanita', 'Naranjo Muñoz', '7C', NULL, '2019-01-07', 1, 1),
(3908, 'David Santiago', 'Giron Bonilla', '7C', NULL, '2019-01-07', 1, 1),
(3910, 'Nicol Natalia', 'Silva Suarez', '8B', NULL, '2019-02-02', 1, 1),
(3912, 'Nicol Natalia', 'Valencia Rico', '8B', NULL, '2019-02-02', 1, 1),
(3913, 'Mchael David', 'Gutierrez Urrego', '8A', NULL, '2019-02-01', 1, 1),
(3916, 'Maria Camila', 'Cardona Moncada', '8B', NULL, '2019-02-02', 1, 1),
(3917, 'Luis Felipe', 'Gonzales Moreno', '9A', NULL, '2019-02-04', 1, 1),
(3919, 'Daniel Felipe', 'Quiroga Ramirez', '9A', NULL, '2019-02-04', 1, 1),
(3921, 'Maria Alejandra', 'Vega Ochoa', '11A', NULL, '2019-02-05', 1, 1),
(3953, 'Juan Diego', 'Ovalle Lopez', '11A', NULL, '2019-02-05', 1, 1),
(3964, 'Jenifer Andrea', 'Delgado Realpe', '10B', NULL, '2019-02-07', 1, 1),
(3984, 'Michael Steven', 'Garcia Rosas', '11A', 30014, '2019-02-05', 1, 1),
(4028, 'Laura Sofia', 'Cano Garzon', '7C', NULL, '2019-01-07', 1, 1),
(4032, 'Maria Alejandra', 'Gonzales Cordoba', '7C', NULL, '2019-01-07', 1, 1),
(4036, 'Julieth Sofia', 'Cardenas Velandia', '8C', NULL, '2019-02-03', 1, 1),
(4037, 'Maria Paula', 'Clavijo Garzon', '8C', NULL, '2019-02-03', 1, 1),
(4038, 'Andres Felipe', 'Vargas Gonzales', '8B', NULL, '2019-02-02', 1, 1),
(4040, 'Asly Tatiana', 'Martinez Herrera', '9B', NULL, '2019-02-05', 1, 1),
(4041, 'Nicolas', 'Garcia Rincon', '10B', NULL, '2019-02-07', 1, 1),
(4046, 'David Felipe', 'Obando Gualteos', '11B', 30006, '2019-02-04', 1, 1),
(4047, 'Julian Camilo', 'Rincon Malagon', '11B', 30002, '2019-02-04', 1, 1),
(4048, 'Laura Valentina', 'Rubio Sandoval', '11B', 30010, '2019-02-04', 1, 1),
(4049, 'Ludwimg Wladimir', 'Hernandez Caro', '11B', NULL, '2019-02-04', 1, 1),
(4050, 'Johann Sebastian', 'Niño Rativa', '11B', NULL, '2019-02-04', 1, 1),
(4051, 'Carlos Esteban', 'Castillo Torres', '11B', 30028, '2019-02-04', 1, 1),
(4083, 'Diego Felipe', 'Hoyos Sanchez', '8B', NULL, '2019-02-02', 1, 1),
(4084, 'Kevin Santiago', 'Simbaqueva Gonzales', '8C', NULL, '2019-02-03', 1, 1),
(4085, 'Valentina', 'Patiño Clavijo', '9B', NULL, '2019-02-05', 1, 1),
(4086, 'Damian Esteban', 'Pachon Campos', '9B', NULL, '2019-02-05', 1, 1),
(4089, 'Laura Sofia', 'Bernal Jimenez', '11A', NULL, '2019-02-05', 1, 1),
(4091, 'Jairo Andres', 'Fernandez Mejia', '10B', NULL, '2019-02-07', 1, 1),
(4092, 'David Andres', 'Hoyos Sanchez', '10B', NULL, '2019-02-07', 1, 1),
(4095, 'Camilo Andres', 'Gomez rativa', '10A', NULL, '2019-02-06', 1, 1),
(4096, 'Nataly Alejandra', 'Porras Murillo', '10B', NULL, '2019-02-07', 1, 1),
(4097, 'Maria Paula', 'Vargas Mesa', '11B', NULL, '2019-02-04', 1, 1),
(4099, 'Yenssy Katherine', 'Leon Molano', '11A', NULL, '2019-02-05', 1, 1),
(4101, 'Mariana', 'Pineda Osorio', '11B', 30014, '2019-02-04', 1, 1),
(4112, 'Daniel Camilo', 'Rodriguez Lara', '8A', NULL, '2019-02-01', 1, 1),
(4113, 'Catalina', 'Sarria Poblador', '9A', NULL, '2019-02-04', 1, 1),
(4115, 'Daniela Fernanda', 'Mora Hernandez', '10B', NULL, '2019-02-07', 1, 1),
(4144, 'Kevin Alejandro', 'Castellanos Ortiz', '8B', NULL, '2019-02-02', 1, 1),
(4152, 'Laura Elizabeth', 'Vargas Parra', '11A', NULL, '2019-02-05', 1, 1),
(4158, 'Paula Catalina', 'Delgado Almendrales', '10A', NULL, '2019-02-06', 1, 1),
(4160, ' Nelson Santiago', 'Castellanos Ortiz', '11B', NULL, '2019-02-04', 1, 1),
(4161, 'Yuliana Valeria', 'Molina Mejia', '11A', NULL, '2019-02-05', 1, 1),
(4174, 'Juan David', 'Angel Correa', '8C', NULL, '2019-02-03', 1, 1),
(4176, 'Nicolle Daniela', 'buitrago Ruiz', '8A', NULL, '2019-02-01', 1, 1),
(4187, 'Sara Sofia', 'Araque Rojas', '7C', NULL, '2019-01-07', 1, 1),
(4188, 'Ana Maria', 'Araque Rojas', '10B', NULL, '2019-02-07', 1, 1),
(4237, 'Keiry Alejandra', 'Zambrano Rico', '7C', NULL, '2019-01-07', 1, 1),
(4248, 'Lauren Sofia', 'Zambrano Rico', '8C', NULL, '2019-02-03', 1, 1),
(4250, 'Juan David', 'Peña Matamoros', '8C', NULL, '2019-02-03', 1, 1),
(4252, 'Alisson Natalia', 'Moreno Jaimes', '8A', NULL, '2019-02-01', 1, 1),
(4254, 'Heidy Daniela', 'Jojoa Hernandez', '9B', NULL, '2019-02-05', 1, 1),
(4256, 'Julieth Vanessa', 'Cortes Alvarez', '10B', NULL, '2019-02-07', 1, 1),
(4258, 'Daniel Felipe', 'vega Bonilla', '10B', NULL, '2019-02-07', 1, 1),
(4259, 'Juan Sebastian', 'Gonzales Jurado', '10A', NULL, '2019-02-06', 1, 1),
(4262, 'Juan Manuel', 'Careldon Saavedra', '9B', NULL, '2019-02-05', 1, 1),
(4264, 'Leidy Vanessa', 'Alarcon Serna', '10A', NULL, '2019-02-06', 1, 1),
(4265, 'Sara Pamela', 'Moreno Buitrago', '11A', NULL, '2019-02-05', 1, 1),
(4299, 'Laura Camila', 'Ussa Quito', '7C', NULL, '2019-01-07', 1, 1),
(4301, 'Sara Valentina', 'Suarez Celis', '9A', NULL, '2019-02-04', 1, 1),
(4304, 'Daniel Felipe', 'Diaz Cajamarca', '10A', NULL, '2019-02-06', 1, 1),
(4306, 'David Steven', 'Collazos Rodriguez', '10A', NULL, '2019-02-06', 1, 1),
(4307, 'Samuel Alejandro', 'Duran Aponte', '10B', NULL, '2019-02-07', 1, 1),
(4313, 'Andres Felipe', 'Bonilla Avila', '10A', NULL, '2019-02-06', 1, 1),
(4335, 'Shaiel Santiago', 'Reyes Roldan', '8A', NULL, '2019-02-01', 1, 1),
(4339, 'Karen Ximena', 'Cardozo Lopez', '8C', NULL, '2019-02-03', 1, 1),
(4346, 'Jhonfer Camilo', 'Delgado Delgado', '10A', NULL, '2019-02-06', 1, 1),
(4347, 'Andres Juliana', 'Ortiz Reina', '10B', NULL, '2019-02-07', 1, 1),
(4350, 'Mariana', 'Lopez Perez', '9A', NULL, '2019-02-04', 1, 1),
(4351, 'Alan Santiago', 'Ramirez Diaz', '9B', NULL, '2019-02-05', 1, 1),
(4352, 'Julian Mauricio', 'Patiño Reyes', '10B', NULL, '2019-02-07', 1, 1),
(4358, 'Johm Sebastian', 'Alarcon Serna', '10B', NULL, '2019-02-07', 1, 1),
(4359, 'Nicolas', 'Rivera Camacho', '8C', NULL, '2019-02-03', 1, 1),
(4375, 'Zarteth Daniela', 'Espinosa Devia', '10B', NULL, '2019-02-07', 1, 1),
(4382, 'Miguel Angel', 'Manrique Romero', '11B', NULL, '2019-02-04', 1, 1),
(4411, 'Jhonatan Stiven', 'Espinosa Rodriguez', '9B', NULL, '2019-02-05', 1, 1),
(4418, 'Angela Maria', 'Cando Moreno', '10B', NULL, '2019-02-07', 1, 1),
(4431, 'Damarys Sofia', 'Vanegas Porras', '9B', NULL, '2019-02-05', 1, 1),
(4471, 'Samuel David', 'Velasco Muñoz', '9A', NULL, '2019-02-04', 1, 1),
(4472, 'Sergio Alejandro', 'Castillo Ramirez', '9B', NULL, '2019-02-05', 1, 1),
(4473, 'Karen Andrea', 'Amaya Lozano', '9B', NULL, '2019-02-05', 1, 1),
(4528, 'Nicholl Natalia', 'Cubides Clavijo', '10A', NULL, '2019-02-06', 1, 1),
(4549, 'Santiago', 'Jimenez Cubides', '9B', NULL, '2019-02-05', 1, 1),
(4552, 'Abby Estefania', 'Albadan Cardozo', 'Transicion A', NULL, '2019-02-03', 1, 1),
(4554, 'Margaret Selene', 'Ruiz Pasachova', 'Transicion A', NULL, '2019-02-03', 1, 1),
(4557, 'Allyson Naomi', 'Martinez Roldan', 'Transicion A', NULL, '2019-02-03', 1, 1),
(4592, 'Andres Felipe', 'Barragan Salinas', '7C', NULL, '2019-01-07', 1, 1),
(4593, 'John Steven', 'Arevalo Solarzano', '7C', NULL, '2019-01-07', 1, 1),
(4594, 'Yuly Xiomara', 'Herrera Vargas', '8B', NULL, '2019-02-02', 1, 1),
(4595, 'Juan Esteban', 'Guerra Herrera', '8A', NULL, '2019-02-01', 1, 1),
(4597, 'Vanessa', 'Rodriguez Bayona', '8A', NULL, '2019-02-01', 1, 1),
(4598, 'Johan Camilo', 'Cortes Alvarez', '8A', NULL, '2019-02-01', 1, 1),
(4601, 'Maria Gabriela', 'Baquero Piedrahita', '8A', NULL, '2019-02-01', 1, 1),
(4604, 'Laura Nathalia', 'Bañol Varela', '8B', NULL, '2019-02-02', 1, 1),
(4605, 'Ivan Camilo', 'Oliphant Martin', '8B', NULL, '2019-02-02', 1, 1),
(4606, 'Anderson', 'Molano Samboni', '8C', NULL, '2019-02-03', 1, 1),
(4607, 'Sergio', 'Cristancho Peña', '8C', NULL, '2019-02-03', 1, 1),
(4609, 'Angie Jasbleidy', 'Hernandez Piñeros', '8C', NULL, '2019-02-03', 1, 1),
(4610, 'Laura Sofia', 'Culma Ospina', '8A', NULL, '2019-02-01', 1, 1),
(4611, 'Hans Santiago', 'Viallbon Martinez', '8C', NULL, '2019-02-03', 1, 1),
(4612, 'Oscar Alejandro', 'Martinez Sanchez', '8A', NULL, '2019-02-01', 1, 1),
(4613, 'Maria Fernanda', 'Tellez Salgado', '8A', NULL, '2019-02-01', 1, 1),
(4614, 'Juan Sebastian', 'Herrera Oñate', '8A', NULL, '2019-02-01', 1, 1),
(4615, 'Mateo', 'Rodriguez Caicedo', '8A', NULL, '2019-02-01', 1, 1),
(4617, 'William David', 'Triat Castaño', '8B', NULL, '2019-02-02', 1, 1),
(4618, 'Kevin Alejandro', 'Rojas Delgado', '8A', NULL, '2019-02-01', 1, 1),
(4619, 'Jeremy Nicolas', 'Valbuena Sarmiento', '8B', NULL, '2019-02-02', 1, 1),
(4623, 'Oscar Andres', 'Becerra Soto', '8B', NULL, '2019-02-02', 1, 1),
(4624, 'Juan Sebastian', 'Cubillos Cubillos', '8B', NULL, '2019-02-02', 1, 1),
(4625, 'Sharick Vanessa', 'Sanchez Sierra', '8C', NULL, '2019-02-03', 1, 1),
(4627, 'Thomas Andres', 'Vega Bonilla', '7C', NULL, '2019-01-07', 1, 1),
(4629, 'Brayan Stiven', 'Ureña Jimenez', '8C', NULL, '2019-02-03', 1, 1),
(4630, 'Nicolai Andres', 'Garcia Reyes', '11B', 30024, '2019-02-04', 1, 1),
(4632, 'Samuel', 'Barrentes Moreno', '7C', NULL, '2019-01-07', 1, 1),
(4650, 'Ana Maria', 'Quintana Fonseca', 'Transicion A', NULL, '2019-02-03', 1, 1),
(4674, 'Angel David', 'Arevalo Osorio', '7C', NULL, '2019-01-07', 1, 1),
(4677, 'Juan Diego', 'Londoño Alayon', '8C', NULL, '2019-02-03', 1, 1),
(4678, 'Andres Felipe', 'Echeverria Muñoz', '8C', NULL, '2019-02-03', 1, 1),
(4679, 'Brandon Steven', 'Rodrigez Cetina', '11A', NULL, '2019-02-05', 1, 1),
(4682, 'Juan Carlos', 'Alarcon Gonzalez', '8A', NULL, '2019-02-01', 1, 1),
(4686, 'Alisson', 'Garcia Cardenas', '7C', NULL, '2019-01-07', 1, 1),
(4694, 'Paula Valentina', 'Cano Ochoa', '10B', NULL, '2019-02-07', 1, 1),
(4695, 'Luis Felipe', 'Tabares Fernandez', '8B', NULL, '2019-02-02', 1, 1),
(4709, 'Duvan Santiago', 'Cortes Valencia', '8A', NULL, '2019-02-01', 1, 1),
(4713, 'Wilson Stick', 'Parra Urquijo', '8B', NULL, '2019-02-02', 1, 1),
(4730, 'Karen Daniela', 'Cano Ochoa', '9B', NULL, '2019-02-05', 1, 1),
(4732, 'Juana Valeria', 'Angel Santos', 'Jardin A', NULL, '2019-02-02', 1, 1),
(4733, 'Amy Juliana', 'David Leiva', 'Jardin A', NULL, '2019-02-02', 1, 1),
(4734, 'Laura Mariana', 'Solano Rojas', 'Jardin A', NULL, '2019-02-02', 1, 1),
(4736, 'Martin Alejandro', 'Chagui Torres', 'Jardin A', NULL, '2019-02-02', 1, 1),
(4737, 'Zareth Mariana', 'Hernandez Lopez', 'Jardin A', NULL, '2019-02-02', 1, 1),
(4739, 'Juan Diego', 'Pineda Palacio', 'Jardin A', NULL, '2019-02-02', 1, 1),
(4743, 'Cristian Leonardo', 'Guzman Archila', 'Transicion A', NULL, '2019-02-03', 1, 1),
(4745, 'Juliana', 'Valencia Ramirez', 'Transicion A', NULL, '2019-02-03', 1, 1),
(4790, 'Laura Catalina', 'Carreño Baron', '7C', NULL, '2019-01-07', 1, 1),
(4792, 'Stefany', 'Baquero Hernandez', '7C', NULL, '2019-01-07', 1, 1),
(4800, 'Esteban', 'Parra Garcia', '7C', NULL, '2019-01-07', 1, 1),
(4803, 'Joan David', 'Moreno Guzman', '7C', NULL, '2019-01-07', 1, 1),
(4806, 'Allison Alexa', 'Galindo Rivera', '7C', NULL, '2019-01-07', 1, 1),
(4809, 'Jesus David', 'Palacio Moncayo', '7C', NULL, '2019-01-07', 1, 1),
(4811, 'Mateo', 'Espinosa Devia', '9B', NULL, '2019-02-05', 1, 1),
(4812, 'Sofia', 'Romero Moreno', 'Jardin A', NULL, '2019-02-02', 1, 1),
(4813, 'Valery Sofia', 'Molina Garcia', 'Jardin A', NULL, '2019-02-02', 1, 1),
(4815, 'Fransisco Paul', 'Barbosa Rodriguez', 'Transicion A', NULL, '2019-02-03', 1, 1),
(4817, 'Jeronimo', 'Ortiz Nava', 'Transicion A', NULL, '2019-02-03', 1, 1),
(4820, 'Juan Jose', 'Casallas Henao', 'Transicion A', NULL, '2019-02-03', 1, 1),
(4845, 'Eileen Daniela', 'Sarmiento Leal', '7C', NULL, '2019-01-07', 1, 1),
(4847, 'Lina Valeria', 'Pachon Gonzales', '7C', NULL, '2019-01-07', 1, 1),
(4849, 'Miguel Angel', 'Mancipe Rojas', '7C', NULL, '2019-01-07', 1, 1),
(4850, 'Juan David', 'Bejarano Pardo', '8B', NULL, '2019-02-02', 1, 1),
(4851, 'Nicole Dayana', 'Machado Rodriguez', '10B', NULL, '2019-02-07', 1, 1),
(4861, 'Luisa Fernanda', 'Morales Clavijo', '8A', NULL, '2019-02-01', 1, 1),
(4867, 'Danna Sofia', 'Tunjacipa Corredor', '7C', NULL, '2019-01-07', 1, 1),
(4871, 'Heynner Andres', 'Caballero Parra', 'Transicion A', NULL, '2019-02-03', 1, 1),
(4872, 'Juan Pablo', 'Velasco Rodriguez', '10A', NULL, '2019-02-06', 1, 1),
(4878, 'Diego Alejandro', 'Jojoa Guarnizo', '9A', NULL, '2019-02-04', 1, 1),
(4885, 'Valentina', 'Muñoz Beltran', '8B', NULL, '2019-02-02', 1, 1),
(4886, 'Jonathan David', 'Gafaro Riaño', '8C', NULL, '2019-02-03', 1, 1),
(4892, 'Maria Fernanda', 'Casallas Castillo', 'Transicion A', NULL, '2019-02-03', 1, 1),
(4893, 'Aylin Gabriela', 'Ortiz Velasco', 'Jardin A', NULL, '2019-02-02', 1, 1),
(4897, 'Daniel Esteban', 'Conde Balcazar', '8B', NULL, '2019-02-02', 1, 1),
(4899, 'Maria Juliana', 'Gallego Rodriguez', '8C', NULL, '2019-02-03', 1, 1),
(4906, 'Daniel Felipe', 'Lombana Mora', '8C', NULL, '2019-02-03', 1, 1),
(4915, 'Andres Santiago', 'Gomez Acevedo', 'Prejardin', NULL, '2019-02-01', 1, 1),
(4916, 'Isabella', 'Galindo Gomez', 'Prejardin', NULL, '2019-02-01', 1, 1),
(4917, 'Gabriela', 'Semanate Rodriguez', 'Prejardin', NULL, '2019-02-01', 1, 1),
(4918, 'Caroll Julieta', 'Pinzon Quitian', 'Prejardin', NULL, '2019-02-01', 1, 1),
(4920, 'Juan Sebastian', 'Alfonso Rojas', 'Transicion A', NULL, '2019-02-03', 1, 1),
(4931, 'Lina Salome', 'Galvis Gil', 'Prejardin', NULL, '2019-02-01', 1, 1),
(4932, 'Adrian Alejandro', 'Garcia Ramirez', 'Prejardin', NULL, '2019-02-01', 1, 1),
(4933, 'Samantha', 'Galeano Velosa', 'Prejardin', NULL, '2019-02-01', 1, 1),
(4934, 'Juan Angel', 'Ruiz Pasachova', 'Prejardin', NULL, '2019-02-01', 1, 1),
(4936, 'Adrian', 'Rozo Vanegas', 'Prejardin', NULL, '2019-02-01', 1, 1),
(4938, 'Daniel Matias', 'Castro Lopez', 'Jardin A', NULL, '2019-02-02', 1, 1),
(4939, 'Angela Gabriela', 'Palacio Vargas', 'Jardin A', NULL, '2019-02-02', 1, 1),
(4940, 'Sara Alejandra', 'Leonardo Rodriguez', 'Transicion A', NULL, '2019-02-03', 1, 1),
(4941, 'Samuel Esteban', 'Parra Reyes', 'Transicion A', NULL, '2019-02-03', 1, 1),
(4972, ' Santiago', 'Carreño Baron', 'Prejardin', NULL, '2019-02-01', 1, 1),
(4973, 'Julian David', 'Castiblanco Velasquez', 'Prejardin', NULL, '2019-02-01', 1, 1),
(4974, ' Ethan', 'Gonsalez Acevedo', 'Prejardin', NULL, '2019-02-01', 1, 1),
(4975, 'Gabriela', 'Pinzon Sarmiento', 'Prejardin', NULL, '2019-02-01', 1, 1),
(4976, 'Luciana', 'Rueda Casadiego', 'Prejardin', NULL, '2019-02-01', 1, 1),
(4977, 'Mathias', 'Arevalo Rodriguez', 'Jardin A', NULL, '2019-02-02', 1, 1),
(4978, 'Mariana', 'Poveda Segura', 'Jardin A', NULL, '2019-02-02', 1, 1),
(4979, 'Josue Alejandro', 'Vega Laguna', 'Jardin A', NULL, '2019-02-02', 1, 1),
(4980, 'Dulce Maria', 'Hernandez Velasquez', 'Jardin A', NULL, '2019-02-02', 1, 1),
(4982, 'Juan Andres', 'Garzon Castro', 'Transicion A', NULL, '2019-02-03', 1, 1),
(4983, 'Hanna Gabriela', 'Alvarez Riveros', 'Transicion A', NULL, '2019-02-03', 1, 1),
(5003, 'Salome', 'Pedraza Londoño', 'Jardin A', NULL, '2019-02-02', 1, 1),
(5004, 'Martin Geronimo', 'Perdomo Avila', 'Jardin A', NULL, '2019-02-02', 1, 1),
(5005, 'Maria Jose', 'Hernandez Contreras', 'Jardin A', NULL, '2019-02-02', 1, 1),
(5024, 'Natalia', 'Cortes Alza', '8C', NULL, '2019-02-03', 1, 1),
(5025, 'Emmanuel', 'Naranjo Mesa', 'Prejardin', NULL, '2019-02-01', 1, 1),
(5026, 'Manuela Franchesca', 'Peñaranda Devia', '9A', NULL, '2019-02-04', 1, 1),
(5027, 'Pedro Alejandro', 'Castiblanco Castañeda', '11A', NULL, '2019-02-05', 1, 1),
(5032, 'Miguel Angel', 'Calderon Zambrano', 'Prejardin', NULL, '2019-02-01', 1, 1),
(5034, 'Gianfranco', 'Valencia Restrepo', 'Prejardin', NULL, '2019-02-01', 1, 1),
(5035, 'Sara Sofia', 'Cespedes Baquero', 'Prejardin', NULL, '2019-02-01', 1, 1),
(5037, 'Ana Sofia', 'Cordoba Cañon', '8A', NULL, '2019-02-01', 1, 1),
(5040, 'Samuel', 'Numpaque Hernandez', 'Transicion A', NULL, '2019-02-03', 1, 1),
(5041, 'Isabella', 'Rodriguez Domigo', 'Transicion A', NULL, '2019-02-03', 1, 1),
(5043, 'Arturo', 'Uribe Vanegas', 'Prejardin', NULL, '2019-02-01', 1, 1),
(5044, 'Santiago', 'Leal Rivera', 'Prejardin', NULL, '2019-02-01', 1, 1),
(5045, 'Sara Sofia', 'Triviño Cetina', 'Prejardin', NULL, '2019-02-01', 1, 1),
(5047, 'Maria Jose', 'Gonzales Torres', 'Jardin A', NULL, '2019-02-02', 1, 1),
(5048, 'Daniel Felipe', 'Garcia Ariza', '8B', NULL, '2019-02-02', 1, 1),
(5049, 'Julian Andres', 'Mogollon Pacheco', '10A', NULL, '2019-02-06', 1, 1),
(5053, 'David Santiago', 'Duarte Camacho', '9B', NULL, '2019-02-05', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salas`
--

CREATE TABLE `salas` (
  `ID_sala` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `asignacion` varchar(60) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `salas`
--

INSERT INTO `salas` (`ID_sala`, `nombre`, `asignacion`, `estado`) VALUES
(1, 'Sala 1 - Padre José Vicente Echeverry', 'Primaria', 1),
(2, 'Sala 2 - Monseñor Alfonso Echeverri', 'Bachillerato', 1),
(3, 'Sala 3 - Padre Ismael Peña Diaz', 'Bachillerato', 1),
(4, 'a', 'a', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE `ubicacion` (
  `ID_ubicacion` int(11) NOT NULL,
  `descripcion` varchar(230) NOT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `ID_sala` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ubicacion`
--

INSERT INTO `ubicacion` (`ID_ubicacion`, `descripcion`, `estado`, `ID_sala`) VALUES
(20000, 'Lugar del profesor(a)', 1, 2),
(20001, 'Fila 1 - Lugar 1', 1, 1),
(20002, 'Fila 1 - Lugar 2', 1, 1),
(20003, 'Fila 1 - Lugar 3', 1, 1),
(20004, 'Fila 1 - Lugar 4', 1, 1),
(20005, 'Fila 1 - Lugar 5', 1, 1),
(20006, 'Fila 1 - Lugar 6', 1, 1),
(20007, 'Fila 1 - Lugar 7', 1, 1),
(20008, 'Fila 1 - Lugar 8', 1, 1),
(20009, 'Fila 2 - Lugar 1', 1, 1),
(20010, 'Fila 2 - Lugar 2', 1, 1),
(20011, 'Fila 2 - Lugar 3', 1, 1),
(20012, 'Fila 2 - Lugar 4', 1, 1),
(20013, 'Fila 2 - Lugar 5', 1, 1),
(20014, 'Fila 2 - Lugar 6', 1, 1),
(20015, 'Fila 2 - Lugar 7', 1, 1),
(20016, 'Fila 2 - Lugar 8', 1, 1),
(20017, 'Fila 3 - Lugar 1', 1, 1),
(20018, 'Fila 3 - Lugar 2', 1, 1),
(20019, 'Fila 3 - Lugar 3', 1, 1),
(20020, 'Fila 3 - Lugar 4', 1, 1),
(20021, 'Fila 3 - Lugar 5', 1, 1),
(20022, 'Fila 3 - Lugar 6', 1, 1),
(20023, 'Fila 3 - Lugar 7', 1, 1),
(20024, 'Fila 3 - Lugar 8', 1, 1),
(20025, 'Fila 4 - Lugar 1', 1, 1),
(20026, 'Fila 4 - Lugar 2', 1, 1),
(20027, 'Fila 4 - Lugar 3', 1, 1),
(20028, 'Fila 4 - Lugar 4', 1, 1),
(20029, 'Fila 4 - Lugar 5', 1, 1),
(20030, 'Fila 4 - Lugar 6', 1, 1),
(20031, 'Fila 4 - Lugar 7', 1, 1),
(20032, 'Fila 4 - Lugar 8', 1, 1),
(30000, 'Lugar del profesor(a)', 1, 1),
(30001, 'Fila 1 - computador 1', 1, 1),
(30002, 'Fila 1 - Lugar 2', 1, 1),
(30003, 'Fila 1 - Lugar 3', 1, 1),
(30004, 'Fila 1 - Lugar 4', 1, 1),
(30005, 'Fila 1 - Lugar 5', 1, 1),
(30006, 'Fila 1 - Lugar 6', 1, 1),
(30007, 'Fila 1 - Lugar 7', 1, 1),
(30008, 'Fila 1 - Lugar 8', 1, 1),
(30009, 'Fila 2 - Lugar 1', 1, 1),
(30010, 'Fila 2 - Lugar 2', 1, 1),
(30011, 'Fila 2 - Lugar 3', 1, 1),
(30012, 'Fila 2 - Lugar 4', 1, 1),
(30013, 'Fila 2 - Lugar 5', 1, 1),
(30014, 'Fila 2 - Lugar 6', 1, 1),
(30015, 'Fila 2 - Lugar 7', 1, 1),
(30016, 'Fila 2 - Lugar 8', 1, 1),
(30017, 'Fila 3 - Lugar 1', 1, 1),
(30018, 'Fila 3 - Lugar 2', 1, 1),
(30019, 'Fila 3 - Lugar 3', 1, 1),
(30020, 'Fila 3 - Lugar 4', 1, 1),
(30021, 'Fila 3 - Lugar 5', 1, 1),
(30022, 'Fila 3 - Lugar 6', 1, 1),
(30023, 'Fila 3 - Lugar 7', 1, 1),
(30024, 'Fila 3 - Lugar 8', 1, 1),
(30025, 'Fila 4 - Lugar 1', 1, 1),
(30026, 'Fila 4 - Lugar 2', 1, 1),
(30027, 'Fila 4 - Lugar 3', 1, 1),
(30028, 'Fila 4 - Lugar 4', 1, 1),
(30029, 'Fila 4 - Lugar 5', 1, 1),
(30030, 'Fila 4 - Lugar 6', 1, 1),
(30031, 'Fila 4 - Lugar 7', 1, 1),
(30032, 'Fila 4 - Lugar 8', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_usuario` int(11) NOT NULL,
  `nombre_usuario` text NOT NULL,
  `apellido_usuario` text NOT NULL,
  `usuario` text NOT NULL,
  `password` varchar(20) NOT NULL,
  `cargo` text NOT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_usuario`, `nombre_usuario`, `apellido_usuario`, `usuario`, `password`, `cargo`, `estado`) VALUES
(1, 'a', 'a', 'Admin', 'abcd1', 'Administrador', 1),
(2, '', '', 'Profesor', 'abcd2', 'Profesor', 1),
(3, '', '', 'a', 'a', 'Profesor', 1),
(4, '', '', 'a', 'a', 'Profesor', 0),
(5, 'a', 'a', 'a', 'a', 'Administrador', 1),
(6, 'ab', 'ab', 'ab', 'ab', 'Administrador', 0);

-- --------------------------------------------------------

--
-- Estructura para la vista `computador_estudiante`
--
DROP TABLE IF EXISTS `computador_estudiante`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `computador_estudiante`  AS  select `estudiantes`.`ID_estudiante` AS `ID_estudiante`,`estudiantes`.`nombre_estudiante` AS `nombre_estudiante`,`estudiantes`.`apellido_estudiante` AS `apellido_estudiante`,`computadores`.`ID_computador` AS `ID_computador`,`computadores`.`marca` AS `marca` from (`estudiantes` join `computadores`) where (`estudiantes`.`ID_computador` = `computadores`.`ID_computador`) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `computador_sala`
--
DROP TABLE IF EXISTS `computador_sala`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `computador_sala`  AS  select `computadores`.`ID_computador` AS `ID_computador`,`computadores`.`marca` AS `marca`,`salas`.`ID_sala` AS `ID_sala`,`salas`.`nombre` AS `nombre` from (`computadores` join `salas`) where (`computadores`.`ID_sala` = `salas`.`ID_sala`) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `computadores`
--
ALTER TABLE `computadores`
  ADD PRIMARY KEY (`ID_computador`),
  ADD KEY `ID_usuario` (`ID_usuario`),
  ADD KEY `ID_sala` (`ID_sala`),
  ADD KEY `ID_ubicacion` (`ID_ubicacion`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`ID_estudiante`),
  ADD KEY `ID_usuario` (`ID_usuario`),
  ADD KEY `ID_computador` (`ID_computador`);

--
-- Indices de la tabla `salas`
--
ALTER TABLE `salas`
  ADD PRIMARY KEY (`ID_sala`);

--
-- Indices de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`ID_ubicacion`),
  ADD KEY `ID_sala` (`ID_sala`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_usuario`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `computadores`
--
ALTER TABLE `computadores`
  ADD CONSTRAINT `computadores_ibfk_1` FOREIGN KEY (`ID_usuario`) REFERENCES `usuarios` (`ID_usuario`),
  ADD CONSTRAINT `computadores_ibfk_2` FOREIGN KEY (`ID_sala`) REFERENCES `salas` (`ID_sala`),
  ADD CONSTRAINT `computadores_ibfk_3` FOREIGN KEY (`ID_ubicacion`) REFERENCES `ubicacion` (`ID_ubicacion`);

--
-- Filtros para la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD CONSTRAINT `estudiantes_ibfk_1` FOREIGN KEY (`ID_usuario`) REFERENCES `usuarios` (`ID_usuario`),
  ADD CONSTRAINT `estudiantes_ibfk_2` FOREIGN KEY (`ID_computador`) REFERENCES `computadores` (`ID_computador`);

--
-- Filtros para la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD CONSTRAINT `ubicacion_ibfk_1` FOREIGN KEY (`ID_sala`) REFERENCES `salas` (`ID_sala`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
