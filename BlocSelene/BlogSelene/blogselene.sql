-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-03-2023 a las 01:08:00
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blogselene`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_articulo`
--

CREATE TABLE `tbl_articulo` (
  `titulo` varchar(100) NOT NULL,
  `texto` varchar(5000) NOT NULL,
  `imagen` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_articulo`
--

INSERT INTO `tbl_articulo` (`titulo`, `texto`, `imagen`) VALUES
('Idealismo', 'se designa el conjunto de los sistemas filosóficos según los cuales la idea es el principio y fundamento del ser y el conocimiento. Su origen se puede rastrear hasta Platón, quien consideraba que la verdadera realidad era la del mundo de las ideas, únicamente accesible para la razón.\r\n\r\nComo idealismo también denominamos la confianza exagerada o ingenua en los valores éticos y morales de la sociedad; en la forma de conducirse las personas y las instituciones según lo justo y lo bueno. En este sentido, se opone al realismo.\r\n\r\nLa palabra, como tal, se forma con las palabras ideal, que significa perteneciente o relativo a la idea, y el sufijo -ismo, que indica ‘escuela’ o ‘doctrina’.', ''),
('Realismo', 'se entiende una tendencia estética y artísticas, fundamentalmente literaria, pictórica y escultórica, que aspira a la semejanza o la correlación lo más exacta posible entre las formas de arte y representación, y la realidad misma que las inspira. Es decir, una tendencia que valora el parecido de una obra de arte para con el mundo real que representa.\r\n\r\nEsta doctrina estética surgió formalmente en Francia en el siglo XIX, bajo la influencia del racionalismo y la tradición de la Ilustración francesa, que privilegiaba el intelecto humano y el conocimiento de la realidad por encima de las emociones y el mundo subjetivo.\r\n\r\nSin embargo, pueden hallarse consideraciones realistas en las formas artísticas de casi todas las épocas, desde la prehistoria. Y en líneas generales, el realismo suele oponerse a otras formas de arte como el abstraccionismo, el neoclasicismo, el idealismo o, en el caso específico de la literatura, a las formas subjetivas del romanticismo.\r\n\r\nA groso modo, el arte realista se reconoce, sea cual sea su disciplina, porque procura representar la realidad de la manera más verosímil posible, prefiriendo las situaciones cotidianas y descartando lo heroico, a favor de temas más apegados a lo mundano, a lo común. En muchos sentidos se lo ha pensado como una forma de comprender y criticar las sociedades contemporáneas al artista, lo cual requiere entre otras cosas de objetividad.', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`nombre`, `apellidos`, `correo`, `pass`) VALUES
('[Selene]', '[Vite]', '[patito-demo@gmail.com]', '[123]'),
('Selene', 'Vite', 'patito-demogmail.com', '123'),
('Selene', 'Vite', 'patito-demo@gmail.com', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
