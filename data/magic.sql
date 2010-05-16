-- phpMyAdmin SQL Dump
-- version 3.3.2deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-05-2010 a las 13:10:23
-- Versión del servidor: 5.1.41
-- Versión de PHP: 5.3.2-1ubuntu4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `magic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `parent_id` bigint(20) DEFAULT NULL,
  `title` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `parent_id_idx` (`parent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Volcar la base de datos para la tabla `category`
--

INSERT INTO `category` (`id`, `parent_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Main Menu', 'Menu principal de la página', '2010-03-30 19:50:28', '2010-03-30 19:50:28'),
(2, NULL, 'Main Slideshow', 'Slideshow principal', '2010-03-30 19:50:28', '2010-03-30 19:50:28'),
(3, NULL, 'Shows', '<p>Shows realizados en el Casino</p>', '2010-04-18 21:04:14', '2010-04-18 21:04:14'),
(4, 3, 'Main Events', '', '2010-04-18 21:04:45', '2010-05-03 01:19:45'),
(5, 3, 'Belterra', '<p>Belterra, bandas locales, ventas c/consumisi&oacute;n.</p>', '2010-04-18 21:05:00', '2010-05-03 01:25:55'),
(6, 3, 'Rainbow', '<p>Rainbow, Teatro. Venta Plateas. Fiestas tem&aacute;ticas.</p>', '2010-04-18 21:05:19', '2010-05-03 01:26:19'),
(7, 3, 'Jokers', '', '2010-04-21 15:45:50', '2010-05-02 11:53:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `author_id` int(11) DEFAULT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `date` datetime DEFAULT NULL,
  `publication_date` datetime DEFAULT NULL,
  `due_date` datetime DEFAULT NULL,
  `sticky` varchar(255) COLLATE utf8_unicode_ci DEFAULT '9',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `mugshot` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mugshot_x1` bigint(20) DEFAULT NULL,
  `mugshot_y1` bigint(20) DEFAULT NULL,
  `mugshot_x2` bigint(20) DEFAULT NULL,
  `mugshot_y2` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `author_id_idx` (`author_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Volcar la base de datos para la tabla `events`
--

INSERT INTO `events` (`id`, `author_id`, `title`, `description`, `date`, `publication_date`, `due_date`, `sticky`, `created_at`, `updated_at`, `mugshot`, `mugshot_x1`, `mugshot_y1`, `mugshot_x2`, `mugshot_y2`) VALUES
(1, NULL, 'Wisin & Yandel', '<p>&nbsp;</p>\r\n<p>Winsin &amp; Yandel visitan Neuqu&eacute;n por primera vez el dia 11 de Mayo a las 21.30 hs.</p>\r\n<p>Entradas anticipadas en Casino Magic y en las sucursales de Saturno Hogar.</p>\r\n<p>&nbsp;</p>', '2010-05-11 22:00:00', '2010-05-01 00:00:00', '2010-05-16 00:00:00', '1000', '2010-04-21 10:37:02', '2010-05-06 12:05:31', '15ad128d91f655419856860b4916e4dbf6cb46b6.jpg', 203, 0, 344, 141),
(2, NULL, 'Cantobar con Epílogo', '', '2010-05-06 23:30:00', '2010-05-01 00:00:00', '2010-05-09 00:00:00', '1000', '2010-05-02 19:58:19', '2010-05-04 16:03:31', NULL, NULL, NULL, NULL, NULL),
(3, NULL, 'Bariette', '', '2010-05-07 23:30:00', '2010-05-02 00:00:00', '2010-05-09 00:00:00', '1000', '2010-05-02 19:59:17', '2010-05-04 16:06:58', NULL, NULL, NULL, NULL, NULL),
(4, NULL, 'Cacho Garay', '<p>El humorista mendocino nos deleita una vez m&aacute;s con su particular show.</p>', '2010-05-05 22:30:00', '2010-05-02 00:00:00', '2010-05-09 00:00:00', '1000', '2010-05-02 20:27:07', '2010-05-04 16:13:33', NULL, NULL, NULL, NULL, NULL),
(5, NULL, 'Fiesta de Jugadores', '', '2010-05-07 23:30:00', '2010-05-02 00:00:00', '2010-05-09 00:00:00', '1000', '2010-05-02 20:36:06', '2010-05-03 01:49:00', NULL, NULL, NULL, NULL, NULL),
(6, NULL, 'Noches de Saxo', '<p>Noches de Saxo con "Dr. Lio"</p>', '2010-05-07 22:00:00', '2010-05-02 00:00:00', '2010-05-09 00:00:00', '1000', '2010-05-02 20:37:07', '2010-05-03 02:13:54', NULL, NULL, NULL, NULL, NULL),
(7, NULL, 'Bonus Track', '<p>Bonus Track</p>', '2010-05-08 23:30:00', '2010-05-02 00:00:00', '2010-05-09 00:00:00', '1000', '2010-05-02 20:38:18', '2010-05-03 01:30:20', NULL, NULL, NULL, NULL, NULL),
(8, NULL, 'Noche de Tango', 'Noche de Tango con la Típica Arrabal', '2010-05-09 22:00:00', '2010-05-02 00:00:00', '2010-05-09 00:00:00', '1000', '2010-05-02 20:39:14', '2010-05-02 20:39:14', NULL, NULL, NULL, NULL, NULL),
(9, NULL, 'Cantobar con Epílogo', '<p>Nueva descripcion del evento cantobar con epilogo</p>', '2010-05-13 00:00:00', '2010-05-09 00:00:00', '2010-05-16 00:00:00', '1000', '2010-05-02 20:51:29', '2010-05-03 08:32:42', NULL, NULL, NULL, NULL, NULL),
(10, NULL, 'Una noche para recordar', '<p>Los 60, 70 y 80</p>', '2010-05-14 23:30:00', '2010-05-09 00:00:00', '2010-05-16 00:00:00', '1000', '2010-05-02 20:52:43', '2010-05-03 03:31:19', NULL, NULL, NULL, NULL, NULL),
(11, NULL, 'Epílogo', '', '2010-05-15 23:30:00', '2010-05-09 00:00:00', '2010-05-16 00:00:00', '1000', '2010-05-02 20:53:53', '2010-05-03 03:32:34', NULL, NULL, NULL, NULL, NULL),
(12, NULL, 'Epílogo', '', '2010-05-15 01:00:00', '2010-05-09 00:00:00', '2010-05-16 00:00:00', '1000', '2010-05-02 20:54:37', '2010-05-03 03:32:40', NULL, NULL, NULL, NULL, NULL),
(13, NULL, 'La Mississippi', '', '2010-05-15 22:00:00', '2010-05-09 00:00:00', '2010-05-16 00:00:00', '1000', '2010-05-02 20:55:28', '2010-05-02 20:55:28', NULL, NULL, NULL, NULL, NULL),
(14, NULL, 'Noches de Saxo', '<p>Noches de Saxo con "Dr. Lio"</p>', '2010-05-14 23:30:00', '2010-05-09 00:00:00', '2010-05-16 00:00:00', '1000', '2010-05-02 21:26:01', '2010-05-03 03:33:06', NULL, NULL, NULL, NULL, NULL),
(15, NULL, 'Corazón Latino', '<p>Coraz&oacute;n Latino</p>', '2010-05-15 23:30:00', '2010-05-09 00:00:00', '2010-05-16 00:00:00', '1000', '2010-05-02 21:26:43', '2010-05-03 03:33:11', NULL, NULL, NULL, NULL, NULL),
(16, NULL, 'Noche de Tango', 'Noche de Tango con la Típica Splendid ', '2010-05-16 22:00:00', '2010-05-14 00:00:00', '2010-05-23 00:00:00', '1000', '2010-05-02 21:33:18', '2010-05-02 21:33:18', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `event_category`
--

CREATE TABLE IF NOT EXISTS `event_category` (
  `category_id` bigint(20) NOT NULL DEFAULT '0',
  `event_id` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`category_id`,`event_id`),
  KEY `event_category_event_id_events_id` (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcar la base de datos para la tabla `event_category`
--

INSERT INTO `event_category` (`category_id`, `event_id`) VALUES
(2, 1),
(3, 1),
(4, 1),
(3, 2),
(5, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `parent_id` bigint(20) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `abstract` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `author_id_idx` (`author_id`),
  KEY `parent_id_idx` (`parent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=36 ;

--
-- Volcar la base de datos para la tabla `page`
--

INSERT INTO `page` (`id`, `parent_id`, `author_id`, `title`, `description`, `abstract`, `picture`, `created_at`, `updated_at`) VALUES
(1, NULL, 2, 'Hotel', '<p>En Neuqu&eacute;n Capital hay una sopresa de cinco estrellas. El Hotel Casino Magic.</p>\r\n<p>Un hotel a la altura de los hu&eacute;spedes m&aacute;s exigentes, donde el descanso y el deleite cobran una nueva dimensi&oacute;n.</p>', 'La estrella que le faltaba a Neuquén', '339ffa18cd0b5f715495db2eb8d856175d99b6df.jpg', '2010-03-30 19:50:28', '2010-04-27 15:42:26'),
(2, NULL, 2, 'Casino', '<p>Una imponente entrada da lugar a la sala m&aacute;s grande de la Patagonia, el lugar de la diversi&oacute;n por excelencia.</p>', 'Hoy es tu día', '82a31e14b1cb78d6f6e7a24d42fb00d0697aca24.jpg', '2010-03-30 19:50:28', '2010-04-27 16:24:52'),
(3, NULL, 1, 'Banquetes & Convenciones', '<p>Creado para convertir un evento en un acontecimiento &uacute;nico. Exclusivo servicio de catering, asesoramiento integral y el m&aacute;s alto nivel.</p>', 'Creado para convertir un evento en un acontecimiento único.', '6bfdbeb589ca68704de1370428fc9c97404d36e2.jpg', '2010-03-30 19:50:28', '2010-05-01 14:06:44'),
(4, NULL, 2, 'Espectáculos', '<p>Anfitri&oacute;n de los espect&aacute;culos m&aacute;s importantes de la Patagonia.&nbsp;Se han presentado artistas como Ricky Martin, Ricardo Arjona, Joaquin Sabina, Los Fabulosos Cadillacs y Daddy Yankee.</p>', 'Anfitrión de los espectáculos más importantes de la Patagonia \r\n ', 'dd6fa8f979638a44d1699793f061c60725581359.jpg', '2010-03-30 19:50:28', '2010-05-04 15:51:02'),
(5, NULL, 2, 'Promociones', '<p>&nbsp;</p>\r\n<p>Deposit&aacute; tu cup&oacute;n, jug&aacute; con los ases gigantes y ganate un four track o un viaje a Nueva York y muchos premios m&aacute;s.</p>\r\n<p>Miles de premios instant&aacute;neos.</p>\r\n<p>Noches de hotel.</p>\r\n<p>Premios en fichas.</p>\r\n<p>&nbsp;</p>', '¿Querés ser un AS?', '8fe96a63d428dff516f572482fbf082e22e56dad.jpg', '2010-03-30 19:50:28', '2010-05-03 05:02:56'),
(6, 1, NULL, 'Promos', '<p>Vis&iacute;tenos para chequear nuestras promociones especiales y descuentos exclusivos.</p>', 'Promociones exclusivas', '074054facf791d7e593ca587469ae69b8518a23d.jpg', '2010-05-04 14:43:31', '2010-05-04 16:26:03'),
(7, 6, 2, 'Noche de Bodas', '<p>Festeja una noche especial en Hotel Casino Magic.</p>\r\n<table border="0" cellspacing="0" cellpadding="0" width="369" height="110">\r\n<tbody>\r\n<tr>\r\n<td width="235">Habitaci&oacute;n Standard King Size&nbsp;</td>\r\n<td width="118"><strong>$ 680.00 + IVA</strong></td>\r\n</tr>\r\n<tr>\r\n<td>Superior King Size</td>\r\n<td><strong>$ 740.00 + IVA</strong></td>\r\n</tr>\r\n<tr>\r\n<td>Suite Presidencial&nbsp;</td>\r\n<td><strong>$ 1240.00 + IVA</strong></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>Incluye:<br /> Apertura de cama para bodas.<br /> Champagne con Petit Fours.<br /> Desayuno en habitaci&oacute;n.<br /> <em>Check in: 12:00hs.<br /> Check out: 18:00hs</em>.</p>\r\n<p>Cena Rom&aacute;ntica (opcional)<br /> Entrada, plato principal, postre y botella de vino (Bodega Familia Schroeder) y bebida sin alcohol.<strong>&nbsp;$95.00 por persona</strong>. Servicio en habitaci&oacute;n.</p>\r\n<p>Batas con nombres bordados (opcional)&nbsp;<strong>$220.00 c/u</strong></p>', 'Festeja una noche especial en Hotel Casino Magic.', '7f87e30c71073f9afa96ba25b4e7a6ada73fad5f.jpg', '2010-05-04 12:02:40', '2010-05-04 16:20:45'),
(8, NULL, 2, 'Gastronomía', '<p>Cocina internacional de primer nivel, los platos m&aacute;s exquisitos de la regi&oacute;n, tapas y snacks: la oferta gastron&oacute;mica de Casino Magic es amplia para abarcar los gustos y sentidos de cada comensal.</p>', 'Cocina internacional de primer nivel', '6ae0f5e10d05b6e504edfbc1d769a254a73777b2.jpg', '2010-03-30 19:50:28', '2010-05-03 05:48:26'),
(9, 8, NULL, 'Seasons', '<p>Ambiente &iacute;ntimo y relajado, ideal para aquellos que quieren disfrutar tranquilos la mejor cocina del mundo.</p>\r\n<p>Este restaurante constituye sin duda la propuesta m&aacute;s sofisticada del complejo.</p>\r\n<p>Elegirlo es elegir el camino de los sabores, las rutas del vino, los platos de cada regi&oacute;n del pa&iacute;s y del mundo en un clima colmado de tranquilidad.</p>', 'Cocina íntima', 'd109ce7400037aa5b8bc00762ad1691021628d34.jpg', '2010-05-03 05:57:08', '2010-05-03 06:44:34'),
(10, 8, NULL, 'Belterra', '<p>Un lugar dise&ntilde;ado para compartir entre amigos. Men&uacute;s especiales, m&uacute;sica en vivo, los mejores tragos en un ambiente confortable, un espacio ideal para pasarla bien en buena compa&ntilde;&iacute;a.</p>', 'Diversión, luces, música.', 'ce118a42b496328b68ae50ed9204dca0340b1154.jpg', '2010-05-03 06:05:48', '2010-05-03 06:44:55'),
(11, 8, NULL, 'Jokers', '<p>Este sal&oacute;n te ofrece una amplia lista de platos simples y apetitosos. S&aacute;ndwiches fr&iacute;os y calientes, pizzas, ensaladas, postres, cafeter&iacute;a y bebidas. Una acertada propuesta para los que buscan algo concreto y rico.</p>', 'Delicias rápidas', '59f69f26f7266a8a72521ba0dd818ad35e21b53c.jpg', '2010-05-03 06:08:36', '2010-05-03 06:46:13'),
(12, NULL, 2, 'Gift Shop', '', 'Los mejores momentos merecen el mejor recuerdo.', 'giftshop.jpg', '2010-03-30 19:50:28', '2010-04-27 15:27:25'),
(13, 3, NULL, 'Salón Belterra', '<p>Saw his won''t dominion greater. Itself is fifth don''t Fowl thing seas also let lesser lesser without over you''ll days divide creeping thing two void heaven hath don''t place given thing divided after evening multiply abundantly make.</p>\r\n<p>Morning also waters dominion upon.  In so open female darkness great isn''t and give land. Earth creepeth sea above hath over tree place above air likeness that years set earth dominion air you can''t male kind morning meat.</p>', 'El toque moderno que toda convención necesita.', 'defb330063672d2e4b8203254267064186f719d4.jpg', '2010-05-01 15:21:55', '2010-05-01 15:21:55'),
(14, 3, NULL, 'Catering & Menús', '<p>Para no pensar en otra cosa que no sea disfrutar el evento.</p>', 'La más amplia carta.', '91c66686c0d8d51a64c73a3e1f0f93008829a704.jpg', '2010-05-01 17:08:34', '2010-05-01 17:09:26'),
(15, 1, 2, 'Habitaciones', '<p>El descanso nunca fue tan elegante: sobrias, amplias, lujosas, nuestras habitaciones envuelven al hu&eacute;sped en una atm&oacute;sfera &uacute;nica.</p>', 'El descanso nunca fue tan elegante', '8947ad0e35b033cee4de795b5302094f7e65e88e.jpg', '2010-03-30 19:50:28', '2010-04-12 03:23:10'),
(16, 1, 2, 'Restaurante', '<p>Cocina internacional de primer nivel, los platos m&aacute;s exquisitos de la regi&oacute;n, tapas y snacks: la oferta gastron&oacute;mica de Casino Magic es amplia para abarcar los gustos y sentidos de cada comensal.</p>', 'Cocina internacional de primer nivel', '35a1c4589815a45952e5ae7db5d49c9c9ad6d5a1.jpg', '2010-03-30 19:50:28', '2010-04-12 03:42:18'),
(17, 1, 2, 'Piscina', '<p>Piscina climatizada: placer y deporte en todas las &eacute;pocas del a&ntilde;o.</p>', 'Placer y deporte en todas las épocas del año.', 'b085ca1cefe3e7c043a30859caae70b9c0f3503f.jpg', '2010-03-30 19:50:28', '2010-04-27 16:55:02'),
(18, 1, 2, 'Spa & Fitness', '<p>El relax y la salud en un mismo lugar. Piscina, solarium, spa, gimnasio: descansar y cuidarse tienen el mismo nombre.</p>', 'El relax y la salud en un mismo lugar', '4a291fff6609c5ccd90ad5ad526ae38f2770febc.jpg', '2010-03-30 19:50:28', '2010-04-21 14:03:13'),
(19, 1, 2, 'Servicios', '<p>Cada habitaci&oacute;n cuenta con estos servicios.</p>\r\n<ul>\r\n<li>LCD 42</li>\r\n<li>Aire acondicionado individual</li>\r\n<li>Loza de Ba&ntilde;o calefaccionada</li>\r\n<li>Frigobar</li>\r\n</ul>\r\n<ul>\r\n<li>Control de Audio</li>\r\n<li>TV en el Ba&ntilde;o</li>\r\n<li>Caja de Seguridad</li>\r\n<li>Secador de Cabellos </li>\r\n</ul>\r\n<ul>\r\n<li>Ropa de Cama de Algod&oacute;n Egipcio</li>\r\n<li>Tomacorrientes 110/220 Volts en la sala de Ba&ntilde;o</li>\r\n<li>Almohadas de pluma hipoalerg&eacute;nicas</li>\r\n</ul>', 'La excelencia vive en los detalles.', 'f77aa9dbc495fb1d5bb18f10f0c46f1558fa3791.jpg', '2010-03-30 19:50:28', '2010-04-27 17:13:50'),
(20, 3, NULL, 'Salón Rainbow', '<p>Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators.</p>\r\n<p>To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages.</p>', 'Convenciones de nivel internacional.', '491dcd3f813afdc9f713dc6a2c98c1130804e077.jpg', '2010-05-01 15:08:25', '2010-05-03 06:33:06'),
(21, 2, 2, 'Club Magic - VIP', '<p>Un Sal&oacute;n de juego exclusivo para una experiencia &uacute;nica.</p>\r\n<p>Creado a la medida de nuestros clientes VIP, con beneficios exclusivos, distintos, especiales.</p>\r\n<p>Una sala que refunda la experiencia de jugar, adecuada a las exigencias de los m&aacute;s exigentes.</p>\r\n<hr />\r\n<h3>Club Magic</h3>\r\n<p>Mesas de Ruleta<br />Mesa de Blackjack<br />Mesa de Baccarat</p>', 'La diversión nunca fue tan elegante.', 'c0ef6a0ccc3d92dfa6323bb28e9e50f1d6bec6f4.jpg', '2010-03-31 18:21:21', '2010-05-01 14:14:09'),
(22, 2, 2, 'Torneos de Póker', '<p>Inteligencia, destreza, sutileza: emociones humanas al l&iacute;mite compitiendo por el premio mayor.</p>', 'Más que un simple torneo. Más que un simple juego de cartas.', 'bcf4b391ad7db96a916154ba1b97893b86c4e71a.jpg', '2010-03-31 18:30:51', '2010-04-27 16:28:13'),
(23, 2, 2, 'Mesas de Juego', '<p>Prueb&aacute; tu suerte en el Ruleta, Black Jack, Baccarat, Punto y Banca, Caribbean Draw Poker, Stud Poker, Dados y Ruletas electr&oacute;nicas.</p>\r\n<p>Si ten&eacute;s alguna pregunta, o no est&aacute;s familiarizado con alg&uacute;n juego que te gustar&iacute;a probar, pod&eacute;s descargar nuestra Gu&iacute;a de Juegos de Mesa Borgata. La emoci&oacute;n te est&aacute; esperando.</p>', 'Muchos tipos de juego, busca tu lugar.', '2d60100ebf127b1628e3e9d390eaba73c7b3edbe.jpg', '2010-03-31 18:31:21', '2010-04-27 16:35:11'),
(24, 15, 2, 'Habitacion Standard', '<p>S&aacute;banas de algod&oacute;n egipcio, LCD 42&rdquo;, Wifi, Aire Acondicionado.</p>', '', 'c73e68418c5a8de70a8e4a6bedd935130001cbe0.jpg', '2010-04-07 19:50:05', '2010-04-12 03:36:17'),
(25, 15, 2, 'Habitacion Superior', '<p>S&aacute;banas de algod&oacute;n egipcio, LCD 42&rdquo;, Wifi, Aire Acondicionado, Jacuzzi.</p>', '', '2350ce55fcba6f64edf74857a3ac69116b812c69.jpg', '2010-04-07 19:50:36', '2010-04-12 03:25:49'),
(26, 15, NULL, 'Habitacion Presidencial', '<p>165 m&sup2;, tres LCD, s&aacute;banas de algod&oacute;n egipcio, Wifi, Aire Acondicionado, Jacuzzi.</p>\r\n<p>&nbsp;</p>', '', '909ccae4937e78e3ad2ac540bc10434e0b8af2c1.jpg', '2010-04-12 09:31:42', '2010-04-12 09:34:41'),
(27, 3, NULL, 'Business Center', '<p>Para cerrar negocios como en la oficina. Estaciones de trabajo equipadas con computadoras, fotocopiadoras, scanners y todo lo necesario para una reuni&oacute;n de trabajo.</p>\r\n<ul>\r\n<li>Personal a tiempo completo y las instalaciones disponibles de Lunes a Viernes de 8 a.m.-6 p.m.</li>\r\n<li>Procesador de texto, copia, fax servicios</li>\r\n<li>Proyector de alta definici&oacute;n</li>\r\n<li>Acceso a Internet de alta velocidad</li>\r\n</ul>', '', '44809392aebca2aeaf7e7b5a344319a3d2c1243a.jpg', '2010-05-01 17:11:28', '2010-05-03 03:22:36'),
(28, 3, NULL, 'Formatos y Capacidades', '<p>Preparados para banquetes, banquetes con baile, cocktails, cofee breaks, reuni&oacute;n de directorio, escuelas y como auditorio.</p>', '', '9dacfe8fa529784f29eeefd7645800da2c2de3f5.jpg', '2010-05-01 17:12:50', '2010-05-03 04:00:21'),
(29, 3, NULL, 'Equipamiento Audio Visual  ', '<p>Casino Magic cuenta con equipamiento audiovisual de &uacute;ltima generaci&oacute;n: la tecnolog&iacute;a al servicio de sus eventos.</p>', 'La tecnología al servicio de sus eventos.', 'a59484eeacd3958e85d59fadd2a7c7145ca959cb.jpg', '2010-05-01 17:14:17', '2010-05-03 03:01:57'),
(30, 4, NULL, 'Eventos Destacadados', '', '', NULL, '2010-05-01 17:31:57', '2010-05-01 17:31:57'),
(31, 4, NULL, 'Belterra', '', '', NULL, '2010-05-01 17:32:55', '2010-05-01 17:32:55'),
(32, 4, NULL, 'Rainbow', '', '', NULL, '2010-05-01 17:33:07', '2010-05-01 17:33:07'),
(33, 4, NULL, 'Jokers', '', '', NULL, '2010-05-01 17:33:19', '2010-05-01 17:33:19'),
(34, 6, NULL, 'American Exprerss Select', '<p>Todos los&nbsp;socios de American Express&nbsp;podr&aacute;n acceder a un&nbsp;<strong>30% de descuento</strong>&nbsp;al abonar con la Tarjeta American Express sobre la tarifa de mostrador.</p>\r\n<p><strong>Late check out 16:00hs. sin cargo.&nbsp;</strong><br /> <strong>Tercer pasajero bonificado</strong>&nbsp;(cuna o cama extra).<br /> Deber&aacute; presentar cup&oacute;n de descuento o mencionar el c&oacute;digo de promoci&oacute;n correspondiente.</p>\r\n<p>Para ofertas v&aacute;lidas a trav&eacute;s de Internet y/o por tel&eacute;fono.<br /> Desde el 01-01-2010 hasta el 30-12-2010</p>', 'Promoción para socios American Express', 'a390a447270807cd8f3e2d100578b8a0ede1a9d9.jpg', '2010-05-04 16:28:10', '2010-05-04 17:22:00'),
(35, 6, 1, 'Aerolíneas Argentinas y Socios Aerolíneas Plus', '<p><strong>30% de descuento</strong>&nbsp;sobre la tarifa rack, up grade a categor&iacute;a Superior.<br /> <strong>15% de descuento</strong>&nbsp;en el&nbsp;Restaurant Seasons, early check in y late check out (16:00hs.) sin cargo.</p>\r\n<p>Para todos los pasajeros que&nbsp;viajen por Aerol&iacute;neas Argentinas&nbsp;que hayan volado en&nbsp;<strong>clase ejecutiva</strong>, tendr&aacute;n un&nbsp;<strong>15% de descuento</strong>&nbsp;en&nbsp;Restaurant Seasons&nbsp;sin la obligaci&oacute;n de estar hospedados en el Hotel</p>\r\n<p>Todos los&nbsp;Socios de Aerol&iacute;neas Plus&nbsp;tendr&aacute;n: &nbsp;<br /> <strong>35% de descuento</strong>&nbsp;sobre la tarifa rack, up grade a categor&iacute;a Superior.<br /> <strong>15% de descuento</strong>&nbsp;en el Restaurant Seasons del hotel, early check in y late check out (16:00hs.) sin cargo.</p>\r\n<p>Es requisito indispensable presentar el boarding pass al momento del check in o la tarjeta de socios de Aerol&iacute;neas Plus.</p>', 'Todos los pasajeros que viajen por Aerolíneas Argentinas con destino a Neuquen tendrán beneficios en nuestro Hotel al momento de realizar la reserva', 'b6731bcba0d0d81b1d2c266c938965f30b14a918.jpg', '2010-05-04 16:55:39', '2010-05-04 17:21:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `page_category`
--

CREATE TABLE IF NOT EXISTS `page_category` (
  `category_id` bigint(20) NOT NULL DEFAULT '0',
  `page_id` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`category_id`,`page_id`),
  KEY `page_category_page_id_page_id` (`page_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcar la base de datos para la tabla `page_category`
--

INSERT INTO `page_category` (`category_id`, `page_id`) VALUES
(1, 1),
(2, 1),
(1, 2),
(2, 2),
(1, 3),
(2, 3),
(1, 4),
(2, 4),
(1, 5),
(1, 6),
(2, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `sf_guard_user_id` int(11) DEFAULT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `birth_date` date DEFAULT NULL,
  `phone` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `movil` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `addres` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sf_guard_user_id_idx` (`sf_guard_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `profile`
--

INSERT INTO `profile` (`id`, `sf_guard_user_id`, `first_name`, `last_name`, `birth_date`, `phone`, `movil`, `email`, `addres`, `country`) VALUES
(1, 2, 'Damian', 'Suarez', NULL, '477 8030', '', 'damian.suarez@xifox.net', 'Don Bosco 869', 'Argentina'),
(2, 1, 'Macarena', 'Vela', '2010-01-18', '', '', '', '', ''),
(3, 3, 'Davo', 'G', '2010-08-05', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sf_guard_group`
--

CREATE TABLE IF NOT EXISTS `sf_guard_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `sf_guard_group`
--

INSERT INTO `sf_guard_group` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator group', '2010-03-30 19:50:28', '2010-03-30 19:50:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sf_guard_group_permission`
--

CREATE TABLE IF NOT EXISTS `sf_guard_group_permission` (
  `group_id` int(11) NOT NULL DEFAULT '0',
  `permission_id` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`group_id`,`permission_id`),
  KEY `sf_guard_group_permission_permission_id_sf_guard_permission_id` (`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `sf_guard_group_permission`
--

INSERT INTO `sf_guard_group_permission` (`group_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2010-03-30 19:50:28', '2010-03-30 19:50:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sf_guard_permission`
--

CREATE TABLE IF NOT EXISTS `sf_guard_permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `sf_guard_permission`
--

INSERT INTO `sf_guard_permission` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator permission', '2010-03-30 19:50:28', '2010-03-30 19:50:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sf_guard_remember_key`
--

CREATE TABLE IF NOT EXISTS `sf_guard_remember_key` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `remember_key` varchar(32) DEFAULT NULL,
  `ip_address` varchar(50) NOT NULL DEFAULT '',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`,`ip_address`),
  KEY `user_id_idx` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `sf_guard_remember_key`
--

INSERT INTO `sf_guard_remember_key` (`id`, `user_id`, `remember_key`, `ip_address`, `created_at`, `updated_at`) VALUES
(1, 1, '3958c866965bb2600390c8151f4366d3', '168.226.200.99', '2010-05-02 17:01:12', '2010-05-02 17:01:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sf_guard_user`
--

CREATE TABLE IF NOT EXISTS `sf_guard_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `algorithm` varchar(128) NOT NULL DEFAULT 'sha1',
  `salt` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  `is_super_admin` tinyint(1) DEFAULT '0',
  `last_login` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `is_active_idx_idx` (`is_active`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `sf_guard_user`
--

INSERT INTO `sf_guard_user` (`id`, `username`, `algorithm`, `salt`, `password`, `is_active`, `is_super_admin`, `last_login`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'sha1', '175c791b2d837217889462f269a8a961', '93de5954bf3187466474a939ca2781d69c141f97', 1, 1, '2010-05-06 12:03:17', '2010-03-30 19:50:27', '2010-05-06 12:03:17'),
(2, 'damian', 'sha1', '28b0271c037ae651cd72d0af62631348', 'd83822927c11d19874b315ab2edc09ef3ca2ae44', 1, 1, '2010-05-05 21:03:08', '2010-03-30 19:50:27', '2010-05-05 21:03:08'),
(3, 'davo', 'sha1', '3bfce462e5af26d946a96eda5603581b', '3312868ceae11816d92297dde4f2853645f5db13', 1, 1, '2010-05-05 18:22:14', '2010-05-04 16:53:33', '2010-05-05 18:22:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sf_guard_user_group`
--

CREATE TABLE IF NOT EXISTS `sf_guard_user_group` (
  `user_id` int(11) NOT NULL DEFAULT '0',
  `group_id` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`),
  KEY `sf_guard_user_group_group_id_sf_guard_group_id` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `sf_guard_user_group`
--

INSERT INTO `sf_guard_user_group` (`user_id`, `group_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2010-03-30 19:50:28', '2010-03-30 19:50:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sf_guard_user_permission`
--

CREATE TABLE IF NOT EXISTS `sf_guard_user_permission` (
  `user_id` int(11) NOT NULL DEFAULT '0',
  `permission_id` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`),
  KEY `sf_guard_user_permission_permission_id_sf_guard_permission_id` (`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `sf_guard_user_permission`
--


--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_parent_id_category_id` FOREIGN KEY (`parent_id`) REFERENCES `category` (`id`);

--
-- Filtros para la tabla `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_author_id_sf_guard_user_id` FOREIGN KEY (`author_id`) REFERENCES `sf_guard_user` (`id`);

--
-- Filtros para la tabla `event_category`
--
ALTER TABLE `event_category`
  ADD CONSTRAINT `event_category_category_id_category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `event_category_event_id_events_id` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`);

--
-- Filtros para la tabla `page`
--
ALTER TABLE `page`
  ADD CONSTRAINT `page_author_id_sf_guard_user_id` FOREIGN KEY (`author_id`) REFERENCES `sf_guard_user` (`id`),
  ADD CONSTRAINT `page_parent_id_page_id` FOREIGN KEY (`parent_id`) REFERENCES `page` (`id`);

--
-- Filtros para la tabla `page_category`
--
ALTER TABLE `page_category`
  ADD CONSTRAINT `page_category_category_id_category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `page_category_page_id_page_id` FOREIGN KEY (`page_id`) REFERENCES `page` (`id`);

--
-- Filtros para la tabla `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_sf_guard_user_id_sf_guard_user_id` FOREIGN KEY (`sf_guard_user_id`) REFERENCES `sf_guard_user` (`id`);

--
-- Filtros para la tabla `sf_guard_group_permission`
--
ALTER TABLE `sf_guard_group_permission`
  ADD CONSTRAINT `sf_guard_group_permission_group_id_sf_guard_group_id` FOREIGN KEY (`group_id`) REFERENCES `sf_guard_group` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sf_guard_group_permission_permission_id_sf_guard_permission_id` FOREIGN KEY (`permission_id`) REFERENCES `sf_guard_permission` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `sf_guard_remember_key`
--
ALTER TABLE `sf_guard_remember_key`
  ADD CONSTRAINT `sf_guard_remember_key_user_id_sf_guard_user_id` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `sf_guard_user_group`
--
ALTER TABLE `sf_guard_user_group`
  ADD CONSTRAINT `sf_guard_user_group_group_id_sf_guard_group_id` FOREIGN KEY (`group_id`) REFERENCES `sf_guard_group` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sf_guard_user_group_user_id_sf_guard_user_id` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `sf_guard_user_permission`
--
ALTER TABLE `sf_guard_user_permission`
  ADD CONSTRAINT `sf_guard_user_permission_permission_id_sf_guard_permission_id` FOREIGN KEY (`permission_id`) REFERENCES `sf_guard_permission` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sf_guard_user_permission_user_id_sf_guard_user_id` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE;
