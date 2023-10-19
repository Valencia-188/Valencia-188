-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2023 a las 07:34:07
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mediz`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `Documento` int(15) NOT NULL,
  `Nombres` varchar(20) NOT NULL,
  `Apellidos` varchar(20) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `Nacimiento` date NOT NULL,
  `Sexo` varchar(10) NOT NULL,
  `Tipo_de_Sangre` varchar(2) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Teléfono` int(10) NOT NULL,
  `Contrseña` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`Documento`, `Nombres`, `Apellidos`, `direccion`, `Nacimiento`, `Sexo`, `Tipo_de_Sangre`, `Correo`, `Teléfono`, `Contrseña`) VALUES
(0, '', '', '0', '0000-00-00', '', '', '', 0, ''),
(21233456, 'santigo', 'gil', '0', '2004-09-18', 'no definid', 'A+', 'topito123@gmail.com', 2147483647, 'soygei123'),
(21233456, 'santigo', 'gil', '0', '2004-09-18', 'masculino', 'A+', 'topito123@gmail.com', 122334567, 'soygei123'),
(0, 'eq22e', 'q2eq2e', 'e2qeq2', '0000-00-00', 'q2e2q', 'q2', 'q2e2q12d@gmail.com', 0, '2r12r');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
