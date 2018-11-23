-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 23-11-2018 a las 00:35:14
-- Versión del servidor: 10.1.37-MariaDB-0+deb9u1
-- Versión de PHP: 7.0.30-0+deb9u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `jdsocial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Pictures`
--

CREATE TABLE `Pictures` (
  `picture_id` int(11) NOT NULL,
  `path` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `foto_name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Posts`
--

CREATE TABLE `Posts` (
  `user_id` int(11) NOT NULL DEFAULT '1',
  `post_body` text NOT NULL,
  `post_id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `significant_other` int(11) NOT NULL DEFAULT '1',
  `posted_by` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Posts`
--

INSERT INTO `Posts` (`user_id`, `post_body`, `post_id`, `timestamp`, `significant_other`, `posted_by`) VALUES
(1, 'Te amo pechocha', 1, '2018-10-06 06:16:47', 1, 'Daniel'),
(1, 'Neta mi amor no puedo creer la noticia que me diste hoy..... no sabes lo emocionado, feliz, fuera de mi... estoy que no me la acaboooooo ', 2, '2018-10-06 22:32:46', 1, 'Daniel'),
(1, 'Waaaaaaaaa!!!!! ya quiero verte jacqueline ', 3, '2018-10-06 22:33:17', 1, 'Daniel'),
(1, 'Siento de verdad mucho las circunstancias en las que estas envuelta que te orillaron a venir pero sabes.... Todo va a salir bien Te amo con todo m corazon... todooo toditoooooo es tuyooooo', 4, '2018-10-06 22:34:33', 1, 'Daniel'),
(1, 'Te amo aunque no peles mi paginita', 5, '2018-10-23 19:16:27', 1, 'Daniel'),
(1, 'Hola, vengo a dejar mi rayÃ³n\r\n\r\n\r\n_____________________________\r\n\r\n\r\n\r\nSaluDoOzh\r\n\r\nMOohxxithA8a.', 6, '2018-10-29 22:21:42', 1, 'Jacqueline'),
(1, 'Say something...\r\n\r\nAl principio tenÃ­a hasta cierto \"miedo\" de entrar a esta pÃ¡gina. No me preguntes por quÃ©, NO LO SÃ‰!\r\nSerÃ¡, porque es toparme aÃºn mÃ¡s de frente con la realidad de evado dÃ­a con dÃ­a? El saber que maÃ±ana no te podrÃ© ver a los ojos, sentir tu piel, tu cabello, tu calor...A TI. \r\nNi pasado...ni la siguiente semana, ni la siguiente... (...)? E infinitos -al menos por ahora asÃ­ lo parecen- puntos suspensivos.\r\n\r\nGRACIAS.\r\nEs lo primero que me nace escribir. GRACIAS Daniel. ', 7, '2018-10-29 22:33:01', 1, 'Jacqueline'),
(1, 'Decir tu nombre me hace sonreÃ­r. Pensarte me hace tambiÃ©n hacerlo. Recordarnos juntos, igual. \r\nEres la primera voz que escucho por las maÃ±anas, la Ãºltima en mis noches, eres la melodÃ­a de mi vida. Â¿Me das eso siempre?\r\n\r\nSÃ³lo quisiera hacerte sentir al menos un 10% de lo que tu me provocas. ', 8, '2018-10-29 22:35:41', 1, 'Jacqueline'),
(1, ' Te conozco apenas hace unos meses, pero siento que he hecho una conexiÃ³n contigo que jamÃ¡s podrÃ­a explicar, siquiera llegar a entender. SÃ³lo sÃ© que TE QUIERO. Con toda la extensiÃ³n de la palabra. Te quiero a ti Daniel. Te quiero en mi tiempo, en mis planes, en mi rutina, en la ducha y en la cama. En lo bueno y malo, presente y futuro. Y, sabes? Tu has estado eliminando todo tipo de miedo que existÃ­a en mÃ­ respecto a las relaciones, parejas, vidas compartidas, etc; etc. \r\nSupongo que eso es lo que pasa cuando conoces al amor de tu vida.\r\n\r\nTe amo.\r\nDeine, Jacqueline.', 9, '2018-10-29 22:40:07', 1, 'Jacqueline'),
(1, '\"Que bonito se siente esto. Que bonito es el amor. El amor contigo\". JamÃ¡s quiero olvidar el cÃ³mo me haces sentir. Me llenas completamente...tÃº me das puras cosas bonitas. TÃº...me haces sentir bien.', 10, '2018-10-29 22:47:56', 1, 'Jacqueline'),
(1, 'HEY!\r\nRecuerdas cuando te visitÃ© en Guadalajara? Cuando fuimos a cenar...y esa caminata de ida y vuelta, tomados de la mano. Somos noviooos(8). Tal cual adolescentes. SonrÃ­o mientras lo pienso! ', 11, '2018-10-29 22:57:58', 1, 'Jacqueline'),
(1, 'Me encanta tener este espacio! Y me gusta escribir! Te voa enfadar Hase! ', 12, '2018-10-29 23:00:24', 1, 'Jacqueline'),
(1, 'Quiero soÃ±ar contigo hoy. ExtraÃ±o bastante tu voz. ', 13, '2018-10-29 23:23:56', 1, 'Jacqueline'),
(1, 'Hoy te escuchÃ© brevemente a la maÃ±ana! Aunque yo era la que iba de despertando, eras tÃº el que tenÃ­a voz de modorrito *w*... te hablo al rato :3 ', 14, '2018-10-30 08:07:10', 1, 'Jacqueline'),
(1, 'â€œTe amo pechochoâ€ . CitÃ¡ndote ', 15, '2018-10-30 09:56:19', 1, 'Jacqueline'),
(1, 'Por fiiiin usando la pÃ¡gina mi vidaaaaaaaaaaaa te amo muchÃ­simo gracias por darme estos recuerditos bonitos contigo eres la mejooooooor y chiiiii estaba modorrito sorry por dormirme y no hablarte a tiempo morÃ­a de sueÃ±ooo', 16, '2018-10-30 20:38:29', 1, 'Daniel'),
(1, 'Quisiera escribirte en cada oportunidad que tenga. Pero no quiero enfadarte! ðŸ™ˆ esto es simplemente genial, es como un tipo diario abierto. Faltan muchas cosas que registrar! Hace rato que hablaba con Estefania, le contÃ© a sobre ti y lo increÃ­ble que eres.. lo bien que nos la pasa pasamls ej nuestro mini trip. Lo bien que nos la pasamos  juntos! Y pensar que eso puede durar toda una vida... ðŸ˜ðŸ’• simplemente, te amo. ', 17, '2018-10-30 22:09:34', 1, 'Jacqueline'),
(1, 'Ya no quiero ver fotos mÃ­as aquÃ­! Sino de nosotros! LOVEEE YOUUUU\r\nICH HAB DICH LIEB!!!! <3\r\n', 18, '2018-10-30 23:36:39', 1, 'Jacqueline'),
(1, 'Lo lamento :(', 19, '2018-10-31 09:39:16', 1, 'Jacqueline'),
(1, 'Mi amoooor no hay nada que lamentar lamento yo haberme frustrado asÃ­ de vdd... Te amo con todo mi corazÃ³n y exactamente para eso hice esta pÃ¡gina para que fuera como un mini diario :))', 20, '2018-11-05 17:53:35', 1, 'Daniel'),
(1, 'Lo de las fotos obviamente las cambiarÃ© pero como eres hermosa querÃ­a que la pÃ¡gina fuera hermosa tambiÃ©n jajajajja te amo al rato cambio las fotitos y veo si puedo ir agregando poco a poco mÃ¡s funcionalidad divertida a esto', 21, '2018-11-05 17:54:35', 1, 'Daniel'),
(1, 'Por cierto.... KYC nunca me enfadas mi vida de vdd ya dejÃ© de decir esas cosas del diablo', 22, '2018-11-05 17:55:22', 1, 'Daniel'),
(1, 'Hola! \r\nVengo a dejar mi rayÃ³n\r\n__________________ \r\nSaludoz ðŸ˜ŽâœŒðŸ»', 23, '2018-11-05 19:18:51', 1, 'Jacqueline'),
(1, 'No dejo de pensar en mi novio, y en todo lindo sueÃ±o quiero compartir, conocer, asombrarme, experimentar... VIVIR. Te quiero siempre, no importa cuÃ¡nto tiempo pase antes de poder tomar tu mano de nuevo. Yo sÃ© que te quiero para mÃ­. ðŸ° ', 24, '2018-11-05 19:21:13', 1, 'Jacqueline'),
(1, 'Mi mujer ideal!!!!', 25, '2018-11-06 00:01:16', 1, 'Daniel'),
(1, 'Quiero vivir todo contigo!!!! Todo!!!!', 26, '2018-11-06 15:43:31', 1, 'Daniel'),
(1, 'Hoy, saliendo del ZoolÃ³gico y andando en bicicleta, vi un esplendoroso atardecer ðŸŒ… entre bellos colores vibrantes, rosados y anaranjados, con una luz impresionante detrÃ¡s de nubes alargadas que me dejaban apreciar todo eso y fundirse en el paisaje. Un atardecer en este otoÃ±o ðŸ‚ a las 17:00 hrs. \r\nY sabes en quiÃ©n pensaba? _____________ en ti.', 27, '2018-11-06 19:25:45', 1, 'Jacqueline'),
(1, 'No me ajusta este blog para decirte todo lo que te quiero decir. En verdad eres una mujer que ha dejado un impacto impresionante en mi ser... Sigues diciendo una y otra vez que no me das nada. Quiero que sepas una cosa Jacqueline Ochoa Tovar de JimÃ©nez, jamÃ¡s alguien me habÃ­a hecho sentir tan amado, de verdad, no digas que no me das nada cuando en realidad me das todo, es difÃ­cil la distancia, muuuuy dificil, pero a pesar de ello te siento aquÃ­ conmigo de verdad te siento. Jacky de mi cora eres una mujer maravillosa, me traes como venado lampareado pienso en ti todo el tiempo todos los dÃ­as y a todas horas, quisiera ser rico y no preocuparme por nada mÃ¡s en el mundo mÃ¡s que estar contigo. Te amo como nunca a nadie. En verdad eres la perfecciÃ³n...\r\nBastarÃ¡ solo con verte. BastarÃ¡ ver tu cielo de frente', 28, '2018-11-07 16:28:03', 1, 'Daniel'),
(1, 'EntrÃ© con mis Ãºltimas fuerzas del dÃ­a para escribirte algo bonito digno de ti, y, oh sorpresa. TÃº eres el que ya lo ha hecho. Me encontrÃ© con el que me parece el mensaje mas bello, largo y sincero que has dejado en este espacio tan bonito que creaste para nosotros, mi carita se modificÃ³ en una mezcla de bonitos sentimientos que me dejaron tus lÃ­neas. Estuve a punto de llorar; pero creo que no lo logrÃ© porque no dejÃ© de pensar en lo feliz que me has hecho desde el primer dÃ­a en que te conocÃ­... y en este dÃ­a especial. Me das todo. Nos lo damos y nos lo merecemos. Eres el hombre de mi vida. â™¥ï¸ Te beso ', 29, '2018-11-08 00:19:16', 1, 'Jacqueline'),
(1, 'Dato para no olvidar: Nuestro primer cybersex en mi madrugada de hoy...\r\n________________ðŸ˜ðŸ’‹ðŸ¤¤â™¥ï¸â™¥ï¸â™¥ï¸â™¥ï¸', 30, '2018-11-10 08:33:34', 1, 'Jacqueline'),
(1, 'Jajajajajajajaj me lo ganaste!!!!!!!!!!!que rico estuvo eso amor!!!!!!!!pum pum pum ***', 31, '2018-11-10 13:25:38', 1, 'Daniel'),
(1, 'Eres lo mejor de mi vida.... Neta ti eres el highlight de mi dÃ­a.. despertarme escuchandote y dormirme leyendote pffff es simplemente maravilloso. Eres la mujer de mis sueÃ±os!!!!!', 32, '2018-11-11 23:45:10', 1, 'Daniel'),
(1, 'Mi amor :â€™) ese Ãºltimo mensaje lleno mi corazÃ³n de cosas bonitas! Digo, como siempre tu me haces sentir! Quiero darte lo mejor de mi, haces que vea todo de una manera especial (y a veces muy hermosa) me pintas el mundo de colores brillantes. Estoy tan enamorada de ti...', 33, '2018-11-13 12:50:46', 1, 'Jacqueline'),
(1, 'No te miento mi amor, me llenas! Me complementas! Es muy raro, pero muy hermoso... de esto es de lo que hablaban los libros de amor? _______________De verdad ... existe ?! Lo siento en cada rinconcito de mÃ­ðŸ’“ ______________ Â¿Me besas? ', 34, '2018-11-13 12:56:20', 1, 'Jacqueline'),
(1, 'Acabo de verte, despuÃ©s de lo que  me parecieron, semanas sin hacerlo...! Y sabes quÃ©? Me voy taaaan feliz a mis sueÃ±os, con una sonrisa en los labios y el pecho lleno de amor ðŸ˜ JAMÃS JAMÃS podrÃ© expresarte correctamente mi Hase, lo que significa y me hace sentir cada llamada, cada lÃ­nea tuya, cada mensaje de voz tuyo!!! :â€™) :â€™) eres mi vida mi amor, mi carita de osito bebÃ©, mi muÃ±eco...mi Hase :â€™) te amo profundamente! Y ahora si, a aguantar a este monstruo cursi que tÃº mismo has creado... YO!', 35, '2018-11-13 23:02:56', 1, 'Jacqueline'),
(1, 'Por cierto Daniel... AMOOOO tus fotos de perfil!!! ðŸ˜ðŸ˜ðŸ˜ðŸ˜ðŸ˜ðŸ™ˆðŸ™ˆðŸ™ˆðŸ™ˆðŸ™ˆðŸ™ˆðŸ™ˆ me sonrojas, siento re bonito... que nos tengas ahÃ­ ... y que me publicas cositas en Facebook  :3 amo a mi novio cursi y atento, lo es en todo sentido ðŸ˜ðŸ˜ðŸ˜ðŸ˜', 36, '2018-11-13 23:10:13', 1, 'Jacqueline'),
(1, 'Iba a escribirte por WhatsApp amor... pero me da cosita despertarte. Mejor aprovecho tu espacio aquÃ­! ðŸ˜ðŸ’“ðŸ’‹ â€”â€”â€” te pienso tanto, hay tantas cosas que quiero que compartamos, te amo y extraÃ±o a cada momento. Ya quiero escuchar de nuevo tu voz!!! ðŸ˜ðŸ˜ðŸ˜ gracias gracias por despertarme con tu voz!!! Amo eso! ðŸ™ˆðŸ¤©', 37, '2018-11-14 10:06:53', 1, 'Jacqueline'),
(1, 'Como te dije por whats. Cada vez estoy mÃ¡s seguro de que en realidad eres esa mujer que he estado buscando toda mi vida.. eres una en un millÃ³n amor y eso es como ganarme la loterÃ­a y no lo voy a desperdiciar. Quiero estar contigo siempre. Quiero despertar cada maÃ±ana y ver tu carita. Quiero llevarte el desayuno a la cama. Quiero cuidarte y apapacharte cuando te sientas mal o deprimida. Quiero ayudarte a ser mejor persona y que me ayudes a serlo tambiÃ©n. Quiero apoyarte. Quiero reÃ­r contigo. Quiero que rÃ­as de mis babosadas y ocurrencias. En resumen te quiero a ti para todo lo que viene. Quiero ser tu compaÃ±ero de peda y de vida. Quiero ser tu amigo. Quiero ser tu amante. Quiero que me quieras y me ames. Quiero pasar un dÃ­a completo solo viÃ©ndote y admirando te. Quiero viajar un chingo contigo. En fin lo quiero todo contigo de verdad todo no hay nada que no quiera hacer contigo a mi lado.\r\n\r\nTe amo Jacqueline Ochoa\r\n\r\nCon todo lo que soy y puedo llegar a ser...', 38, '2018-11-14 15:08:09', 1, 'Daniel'),
(1, 'Quiero que nuestras manos se rocen, sentir tu tacto y tu calor, tener esa dicha de caminar hacia nuestra habitaciÃ³n sabiendo que estarÃ¡s ahÃ­ esperando por mi mientras me escabullo en la cama directo a mi lugar, mi lugar de paz y amor, donde espero dormir tranquila el resto de mis dÃ­as: a un lado de tu latir y por debajo de tu respiraciÃ³n que me calma; ahÃ­, en tu pecho...ahÃ­, mi lugar; entre tus brazos. ', 39, '2018-11-16 20:16:24', 1, 'Jacqueline'),
(1, 'No quiero vivir sin ti Daniel!!! Quiero conocerte por completo!!!', 40, '2018-11-16 20:24:09', 1, 'Jacqueline'),
(1, 'Eres la mejor Jacqueline de verdad lo siento. Eres lo mejor que me ha pasado en mi hoja tiempo y nunca quiero perderte nuncaaaaa te amo con todo neta con todo', 41, '2018-11-19 03:05:50', 1, 'Daniel'),
(1, 'Gracias gracias gracias...gracias ... es lo Ãºnico que puede salir de mis dedos ahora. GRACIAS ___________ a ti, a la vida, a la cual sea que sea la energÃ­a motivo o razÃ³n que nos hizo cruzarnos. Eres el tesoro de mis dÃ­as. Solo pienso en ti y en lo maravilloso que serÃ¡ (aÃºn mÃ¡s de lo que ya lo es ahora) cuando por fin te tenga a mi lado y duerma cada dÃ­a en tu calor. TE AMO DANIEL.', 42, '2018-11-19 22:30:51', 1, 'Jacqueline'),
(1, 'Me hace mucha falta tu amor... tu amor fÃ­sico ðŸ˜ž quiero que nos demos todo lo que cualquier pareja puede darse ', 43, '2018-11-20 22:07:44', 1, 'Jacqueline'),
(1, 'Siento mucho que no seamos como cualquier pareja mi amor de verdad lo siento mucho y me duele un chingo pero lo nuestro estÃ¡ bien chingon y tenemos que luchar y aguantar por eso... Te amo como a nadie, te necesito como a nadie, te deseo como a nadie. AÃºn asÃ­ eres la mejor novia que cualquiera pudiera pedir Jacky te adoro con todo mi ser mi corazÃ³n mi mente y mi cuerpo son tuyos', 44, '2018-11-21 18:57:03', 1, 'Daniel'),
(1, 'OjalÃ¡ te guste la nueva pÃ¡gina mi vida es un boceto aÃºn pero me parece mÃ¡s estilizada :) me divierte tanto hacer esto para nosotros :))))) dame ideas de que crees que se vea mejor y asÃ­ y se las agrego... AÃºn tengo que arreglar los tiempos para que nos aparezca con la hora local de cada quien y voy a agregar la secciÃ³n de fotos', 45, '2018-11-22 06:10:30', 1, 'Daniel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Users`
--

CREATE TABLE `Users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='User Information';

--
-- Volcado de datos para la tabla `Users`
--

INSERT INTO `Users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'Daniel', 'daniyosan@gmail.com', 'merariD32640000'),
(2, 'Jacqueline', 'jaocto@gmail.com', 'mihase'),
(3, 'Mariela', 'mariela@equisde.com', '123456'),
(4, 'Julio', 'julio@equisde.com', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `User_Profile_Info`
--

CREATE TABLE `User_Profile_Info` (
  `user_id` int(11) NOT NULL,
  `significant_other` int(11) NOT NULL,
  `profile_pic` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `User_Profile_Info`
--

INSERT INTO `User_Profile_Info` (`user_id`, `significant_other`, `profile_pic`) VALUES
(1, 2, 'img/profiles/daniel.jpg'),
(2, 1, 'img/profiles/jacky.jpg'),
(3, 4, 'img/profiles/mariela.jpg'),
(4, 3, 'img/profiles/julio.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Pictures`
--
ALTER TABLE `Pictures`
  ADD PRIMARY KEY (`picture_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `Posts`
--
ALTER TABLE `Posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `uiser_id` (`user_id`),
  ADD KEY `significant_other` (`significant_other`);

--
-- Indices de la tabla `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indices de la tabla `User_Profile_Info`
--
ALTER TABLE `User_Profile_Info`
  ADD KEY `uiser_id` (`user_id`),
  ADD KEY `significant_other` (`significant_other`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Pictures`
--
ALTER TABLE `Pictures`
  MODIFY `picture_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Posts`
--
ALTER TABLE `Posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT de la tabla `Users`
--
ALTER TABLE `Users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Pictures`
--
ALTER TABLE `Pictures`
  ADD CONSTRAINT `Pictures_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `Users` (`user_id`);

--
-- Filtros para la tabla `Posts`
--
ALTER TABLE `Posts`
  ADD CONSTRAINT `Posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `Users` (`user_id`),
  ADD CONSTRAINT `Posts_ibfk_2` FOREIGN KEY (`significant_other`) REFERENCES `User_Profile_Info` (`significant_other`);

--
-- Filtros para la tabla `User_Profile_Info`
--
ALTER TABLE `User_Profile_Info`
  ADD CONSTRAINT `User_Profile_Info_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `Users` (`user_id`),
  ADD CONSTRAINT `User_Profile_Info_ibfk_2` FOREIGN KEY (`significant_other`) REFERENCES `Users` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
