-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Gép: localhost:3306
-- Létrehozás ideje: 2021. Jún 02. 04:55
-- Kiszolgáló verziója: 8.0.22-0ubuntu0.20.04.2
-- PHP verzió: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `varazstorony`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `cartesius`
--

CREATE TABLE `cartesius` (
  `demo` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- A tábla adatainak kiíratása `cartesius`
--

INSERT INTO `cartesius` (`demo`) VALUES
(0);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `name`, `created_at`) VALUES
(12, 0, 'Teszt', '2021-01-10 21:34:12'),
(14, 0, 'kőzet és ásvány kiállítás', '2021-01-10 12:07:45'),
(15, 0, 'hőlégballon', '2021-01-10 12:08:14'),
(16, 0, 'Cartesius búvár', '2021-01-10 12:08:46'),
(17, 0, 'Hajóátemelő zsilip', '2021-01-10 12:09:13'),
(18, 0, 'Hang rezonátor', '2021-01-10 12:09:30'),
(19, 0, 'Bermuda henger', '2021-01-10 12:09:53'),
(20, 0, 'Foucault-féle inga', '2021-01-10 12:10:16'),
(21, 0, 'Optikatörténeti kiállítás', '2021-01-10 12:12:52'),
(22, 0, 'Nagyfeszültségű sarok', '2021-01-10 12:13:14'),
(23, 0, 'Apollo 11', '2021-01-10 12:13:23'),
(24, 0, 'Planetárium', '2021-01-10 12:13:41'),
(25, 0, 'Fénysarok', '2021-01-10 12:13:52'),
(26, 0, 'Múzeális műszerek', '2021-01-10 12:14:10'),
(27, 0, 'Kísérletek', '2021-01-10 12:14:26'),
(28, 0, 'Optikai sarok', '2021-01-10 12:14:46'),
(29, 0, 'Levegő ágyú', '2021-01-10 12:15:19'),
(30, 0, 'Kis Dollond távcső', '2021-01-10 12:16:01'),
(31, 0, 'Meridián vonal', '2021-01-10 12:16:20'),
(32, 0, 'Hadley-Newton távcső', '2021-01-10 12:16:51'),
(33, 0, 'Hadley-Newton trükkös távcső', '2021-01-10 12:17:15'),
(34, 0, 'Kvadráns', '2021-01-10 12:17:34'),
(35, 0, 'Mezőnyárádi ágyús napóra', '2021-01-10 12:17:56'),
(36, 0, 'Angol szerelésű parallaktikus távcső', '2021-01-10 12:18:31'),
(37, 0, 'Gregory féle trükkös távcső', '2021-01-10 12:18:58'),
(38, 0, 'Dollond távcső', '2021-01-10 12:19:12'),
(39, 0, 'Akromatikus holland távcső', '2021-01-10 12:19:33'),
(40, 0, 'Csillagászati óra', '2021-01-10 12:19:48'),
(41, 0, 'Nagy fali kvadráns', '2021-01-10 12:20:08'),
(42, 0, 'A csillagász melegedője', '2021-01-10 12:23:16'),
(43, 0, 'távcső', '2021-01-10 12:23:56'),
(44, 0, 'Camera Obscura', '2021-01-10 12:24:30'),
(45, 0, 'Foucault-féle inga felfüggesztési pontja', '2021-01-10 12:24:59'),
(46, 0, 'Ekvatorális távcső', '2021-01-10 12:25:24'),
(47, 0, 'Passage távcső', '2021-01-10 12:25:38'),
(48, 0, 'Terepasztal', '2021-01-10 12:31:21');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `post_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `contact`
--

CREATE TABLE `contact` (
  `user_name` varchar(250) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `content` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- A tábla adatainak kiíratása `contact`
--

INSERT INTO `contact` (`user_name`, `user_email`, `subject`, `content`) VALUES
('fdsvsdv', 'sdvsd@gmail.com', 'dsfbsdb', 'sdvfsdvd'),
('Sass-Gyarmati Norbert', 'sassnorbert99@gmail.com', 'teszt', 'Ez egy teszt'),
('Sass-Gyarmati Norbert', 'sassnorbert99@gmail.com', 'teszt', 'Ez egy teszt'),
('teszt', 'teszt@gmail.com', 'teszt, mert valaki feltörte a rendszert', 'Ez a teszt azért készült, mert egy jófej gyerek levédte a site-ot, valamint kitörölt egy két dolgot a weblapból.'),
('teszt', 'teszt@gmail.com', 'teszt, mert valaki feltörte a rendszert', 'Ez a teszt azért készült, mert egy jófej gyerek levédte a site-ot, valamint kitörölt egy két dolgot a weblapból.'),
('test', 'test@gmail.com', 'test', 'test'),
('asd', 'asdasd@gmail.com', 'adva', 'tesztelem'),
('asd', 'asdasd@gmail.com', 'adva', 'tesztelem'),
('asd', 'asd@gmail.com', 'asd', 'asdasd'),
('Sass-Gyarmati Norbert', 'sassnorbert99@gmail.com', 'Teszt az MVC működéséről', 'Tesztelem, hogy működik-e az MVC');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `hell`
--

CREATE TABLE `hell` (
  `isNoon` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- A tábla adatainak kiíratása `hell`
--

INSERT INTO `hell` (`isNoon`) VALUES
(0);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `category_id` int NOT NULL,
  `user_id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `slug`, `body`, `post_image`, `created_at`) VALUES
(1, 12, 1, 'Első poszt a weboldalról', 'Első-poszt-a-weboldalról', '<p>Ez az első poszt, tesztelj&uuml;k a weboldal műk&ouml;dők&eacute;pess&eacute;g&eacute;t</p>\r\n', 'Xf0xv.png', '2020-12-14 18:52:41'),
(46, 48, 1, 'Poszt az elkészített Volt mérőről', 'Poszt-az-elkészített-Volt-mérőről', 'A napcellák aktuális termelési mértékének szimulálására szükségünk volt egy prototípus\r\nprogramra, mely képes egy opcionálisan megadott napcella termelési értékeit\r\nkiszámolni. A szimuláció megmondja az Arduinohoz csatolt napcella aktuális termelését\r\nVoltba, illetve ezt átváltva kiloWattban.', 'voltage.jpg', '2021-04-16 14:07:21'),
(103, 42, 1, 'eke', 'eke', 'eke1', 'base_qa_pic_file_f265e5eaae4b53c1eee0cf7ae5433093.jpg', '2021-04-18 16:58:36'),
(105, 42, 1, 'eke3', 'eke3', 'eke3', 'Unknown.png', '2021-04-18 17:01:44'),
(106, 42, 1, 'eke image', 'eke-image', 'eke image', 'ekeimage.jpg', '2021-04-18 17:02:32'),
(107, 42, 1, 'arduino image', 'arduino-image', 'arduino image', 'ard.png', '2021-04-18 17:04:01'),
(108, 12, 1, 'Eger', 'Eger', 'A tesztben az ftp szerveren történő képfeltöltést teszteljük', 'eger_kep_1010021021.jpg', '2021-04-18 17:13:32'),
(109, 16, 1, 'Cartesius búvár összeépítve', 'Cartesius-búvár-összeépítve', 'Így nézett ki a Cartesius búvárunk, mikor sikerült összeépíteni', '3D2F3608-A19B-4FF1-BA15-AB67A36641A3_1_105_c.png', '2021-04-20 06:24:28');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `terepasztal`
--

CREATE TABLE `terepasztal` (
  `id` int NOT NULL,
  `termeltenergia` int NOT NULL,
  `energiaigeny` int NOT NULL,
  `napfelkelte` varchar(255) DEFAULT NULL,
  `naplemente` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- A tábla adatainak kiíratása `terepasztal`
--

INSERT INTO `terepasztal` (`id`, `termeltenergia`, `energiaigeny`, `napfelkelte`, `naplemente`) VALUES
(19, 40, 50, '7:00', '11:00');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `test`
--

CREATE TABLE `test` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `userstate` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `admin` tinyint NOT NULL,
  `currentpage` varchar(255) NOT NULL,
  `visitdate` timestamp NOT NULL,
  `lastvisit` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `name`, `zipcode`, `email`, `username`, `password`, `register_date`, `admin`, `currentpage`, `visitdate`, `lastvisit`) VALUES
(1, '3413', 'Norbert Sass-Gyarmati', 'sassnorbert99@gmail.com', 'sassnorbert99', 'a8f5f167f44f4964e6c998dee827110c', '2020-12-14 17:09:04', 1, 'Home', '2021-06-01 21:42:57', '2021-05-26 16:29:51'),
(4, '3300', 'GG', 'gedagabor81@gmail.com', 'GG', 'e04bb2725c35f441a62daee206c6ac8c', '2021-01-09 23:25:05', 1, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '7493', 'Krisztián', 'admin@robucation.com', 'Chris', 'd15e33474c1d836f6ee7d0c21d0a66cb', '2021-01-09 23:30:18', 1, 'Exit', '2021-05-27 10:27:55', '2021-05-04 19:02:40'),
(7, 'Pajtókné Ilonka', '8080', 'hlselejt@gmail.com', 'Ilonka', 'd95515053c99852d6c43aab9f5815892', '2021-03-11 17:06:12', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Bakos Anett', '3413', 'bakos.anett0904@gmail.com', 'Ancsi0904', '49263b53b873bbde1f725253d0e0a835', '2021-04-06 16:00:06', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'fdgdf', '5645645', 'fdgdf@sdgfd.com', 'asd', '7815696ecbf1c96e6894b779456d330e', '2021-04-15 18:35:12', 0, 'Table', '2021-06-01 10:21:25', '2021-06-01 10:21:25'),
(14, 'ffgdf', '657567', 'dfgfd@gdfgfd.com', 'dsa', '7815696ecbf1c96e6894b779456d330e', '2021-04-15 18:35:41', 0, 'Table', '2021-05-13 21:30:21', '2021-05-13 21:30:22');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `terepasztal`
--
ALTER TABLE `terepasztal`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT a táblához `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT a táblához `terepasztal`
--
ALTER TABLE `terepasztal`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT a táblához `test`
--
ALTER TABLE `test`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
