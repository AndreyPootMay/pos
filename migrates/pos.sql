--
-- Base de datos: `pos`
--
CREATE SCHEMA `pos` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci ;

--
-- Estructura de tabla para la tabla `users`
--
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_spanish_ci NOT NULL,
  `user` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `profile` tinyint(1) NOT NULL DEFAULT 1,
  `photo` text COLLATE utf8_spanish_ci NOT NULL,
  `status` int(11) NOT NULL,
  `last_login` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--
INSERT INTO `users` (`id`, `name`, `user`, `password`, `profile`, `photo`, `status`, `last_login`, `created_at`) VALUES
(1, 'Usuario Administrador', 'admin', 'admin123', 1, '', 1, '0000-00-00 00:00:00', '2017-12-19 20:20:09');

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;
