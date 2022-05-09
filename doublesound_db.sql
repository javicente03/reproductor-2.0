-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-05-2022 a las 23:27:46
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `doublesound_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages_contact`
--

CREATE TABLE `messages_contact` (
  `message_id` int(11) NOT NULL,
  `message_text` varchar(500) NOT NULL,
  `message_subject` varchar(64) NOT NULL,
  `message_email` varchar(64) NOT NULL,
  `message_date` date DEFAULT NULL,
  `message_status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `songs`
--

CREATE TABLE `songs` (
  `song_id` int(11) NOT NULL,
  `song_name` varchar(64) NOT NULL,
  `song_album` varchar(64) NOT NULL,
  `song_artist` varchar(64) NOT NULL,
  `song_duration` time NOT NULL,
  `song_duration_second` decimal(30,2) NOT NULL,
  `song_image` varchar(100) NOT NULL,
  `song_rut` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `system_option`
--

CREATE TABLE `system_option` (
  `option_id` int(11) NOT NULL,
  `option_name` varchar(64) NOT NULL,
  `option_value` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `system_option`
--

INSERT INTO `system_option` (`option_id`, `option_name`, `option_value`) VALUES
(1, 'wallpaper', 'video/2022/05/DoubleSoundcc823dbd252c4067919bb6cf398aff03.mp4'),
(2, 'about_text', '(Comience a escribir en la caja del contador de caracteres o copie y pegue su texto.)(Comience a escribir en la caja del contador de caracteres o copie y pegue su texto.)(Comience a escribir en la caja del contador de caracteres o copie y pegue su texto.)(Comience a escribir en la caja del contador de caracteres o copie y pegue su texto.)(Comience a escribir en la caja del contador de caracteres o copie y pegue su texto.)(Comience a escribir en la caja del contador de caracteres o copie y pegue su texto.)(Comience a escribir en la caja del contador de caracteres o copie y pegue su texto.)(Comience a escribir en la caja del contador de caracteres o copie y pegue su texto.)(Comience a escribir en la caja del contador de caracteres o copie y pegue su texto.)(Comience a escribir en la caja del contador de caracteres o copie y pegue su texto.)(Comience a escribir en la caja del contador de caracteres o copie y pegue su texto.)(Comience a escribir en la caja del contador de caracteres o copie y pegue su texto.)(Comience a escribir en la caja del contador de caracteres o copie y pegue su texto.)'),
(3, 'about_image', 'photos/2022/05/DoubleSoundac5d592b581627e37a71f87e8e98845b.gif');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(64) NOT NULL,
  `user_firstname` varchar(64) NOT NULL,
  `user_lastname` varchar(64) NOT NULL,
  `user_email` varchar(64) NOT NULL,
  `user_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_firstname`, `user_lastname`, `user_email`, `user_password`) VALUES
(1, 'javicente', 'Javier', 'Gerardo', 'javicentego@gmail.com', '$2y$10$/ZpW2PxHy2eRHCDTVQjWz..yFbuBaQirnBCICgHgo2O7J6TVjEAJC'),
(2, 'Javier03', 'Vicente', 'Gerardo', 'cocolisos0@gmail.com', '$2y$10$GJa07ufJ9aNnXRxItN0vqOcUNukFa31fhFXsNC5FlF/M5gO0QGGNu');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `messages_contact`
--
ALTER TABLE `messages_contact`
  ADD PRIMARY KEY (`message_id`);

--
-- Indices de la tabla `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`song_id`);
ALTER TABLE `songs` ADD FULLTEXT KEY `song_name` (`song_name`);

--
-- Indices de la tabla `system_option`
--
ALTER TABLE `system_option`
  ADD PRIMARY KEY (`option_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `messages_contact`
--
ALTER TABLE `messages_contact`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `songs`
--
ALTER TABLE `songs`
  MODIFY `song_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `system_option`
--
ALTER TABLE `system_option`
  MODIFY `option_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
