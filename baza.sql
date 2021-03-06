-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 14 2019 г., 07:11
-- Версия сервера: 5.5.50
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `zakolka`
--

-- --------------------------------------------------------

--
-- Структура таблицы `in_menu`
--

CREATE TABLE IF NOT EXISTS `in_menu` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `template_id` int(3) DEFAULT NULL,
  `tree` int(3) NOT NULL DEFAULT '1',
  `child` int(4) DEFAULT NULL,
  `status` int(3) NOT NULL,
  `user_id` int(11) NOT NULL,
  `updated_date` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `in_menu`
--

INSERT INTO `in_menu` (`id`, `title`, `slug`, `template_id`, `tree`, `child`, `status`, `user_id`, `updated_date`) VALUES
(1, 'Invester uchun', 'slu', 1, 1, 0, 1, 1, 123123213),
(2, 'Invester uchun2', 'slu2', 2, 2, 0, 1, 1, NULL),
(3, 'test', 'test', NULL, 3, 1, 1, 1, 1552816123),
(4, 'ikkinchi', 'ikki', NULL, 4, 2, 1, 1, NULL),
(5, 'Bacxt2', 'baxt', 1, 4, 0, 1, 1, 1554316069),
(6, 'Kelajak', 'kelajak', 2, 4, 0, 1, 1, NULL),
(7, 'qahramon000', 'ssasa', 1, 3, 0, 9, 1, 1554317892);

-- --------------------------------------------------------

--
-- Структура таблицы `in_menu_item`
--

CREATE TABLE IF NOT EXISTS `in_menu_item` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `photo` varchar(128) DEFAULT NULL,
  `short` varchar(255) DEFAULT NULL,
  `text` text NOT NULL,
  `slug` varchar(128) NOT NULL,
  `views` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `sale` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_date` int(11) NOT NULL,
  `updated_date` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `in_menu_item`
--

INSERT INTO `in_menu_item` (`id`, `menu_id`, `title`, `photo`, `short`, `text`, `slug`, `views`, `status`, `price`, `sale`, `user_id`, `created_date`, `updated_date`) VALUES
(1, 1, 'sasa', 'asasd', 'sad', 'asdasd', 'asd', 1, 0, 0, 0, 1, 1123213, NULL),
(2, 1, 'Second', NULL, 'Short teg in seconfg', 'salom, bu birtinichi qasdaama', 'bir2', 0, 1, 23432, 234, 1, 1552833485, 1553536461),
(3, 3, 'asdfasd', '5c8e8625990e7.jpg', 'asd asds', 'asdf asdf asdf ads fadsf', 'assa', 0, 9, 23432, 234, 1, 1552844325, 1562082137),
(4, 5, 'Salom hamma', '5c99108690bea.jpg', 'Сайцвпрв  пвап', 'dsf sdf vsdf  sdf gsdf  sfd f', 'aasdsa', 0, 9, NULL, 0, 1, 1552844590, 1554522519),
(5, 6, 'hamma qani0000', '5c9a73804dbe1.jpg', 'Biurinchi qadam000', 'adfv sd sdf sdf dsf sdfg000', 'qani', 0, 1, 23432, 234, 1, 1553625939, 1553711646),
(6, 5, 'dddddddddddddd', '5c9bc053553c8.jpg', 'dssssssss', 'sdvfdsvfd sdsfsd2', 'bir2d', 0, 1, NULL, NULL, 1, 1553705417, 1554487207),
(7, 4, 'asdfds', NULL, 'sdfad ds fasdf ', 'a sdf asd asd asdf asdf sad asd v vasd vadsv  adsv sd', 'dssdfs', 0, 1, 23432, 234, 1, 1562002343, NULL),
(8, 2, 'asdfdsds', '5d1a45d3585ca.jpg', 'sad sdcfasdcsdc', '<p>&nbsp;adsf d asd asdv a asda sdv asdv adsv&nbsp;</p>', 'asddsdsdc', 0, 1, 23432, 23422, 1, 1562002874, 1562002899);

-- --------------------------------------------------------

--
-- Структура таблицы `in_menu_item_trans`
--

CREATE TABLE IF NOT EXISTS `in_menu_item_trans` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `lang` varchar(128) NOT NULL,
  `title` varchar(128) NOT NULL,
  `short` varchar(255) DEFAULT NULL,
  `text` text NOT NULL,
  `status` int(4) NOT NULL DEFAULT '1',
  `updated_date` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `in_menu_item_trans`
--

INSERT INTO `in_menu_item_trans` (`id`, `item_id`, `lang`, `title`, `short`, `text`, `status`, `updated_date`) VALUES
(1, 2, 'uz-UZ', 'Second', 'Short teg in seconfg', 'salom, bu birtinichi qasdaama', 1, 1553536461),
(2, 3, 'uz-UZ', 'asdfasd', 'asd asds', 'asdf asdf asdf ads fadsf', 9, 1562082137),
(3, 4, 'uz-UZ', 'Salom hamma', 'Сайцвпрв  пвап', 'dsf sdf vsdf  sdf gsdf  sfd f', 9, 1554522519),
(4, 2, 'uz-UZ', 'Birinchi 2', 'Biurinchi qadam', 'salom, bu birtinichi qasdaama', 1, NULL),
(5, 2, 'uz-UZ', 'Birinchi 2', 'Biurinchi qadam', 'salom, bu birtinichi qasdaama', 1, NULL),
(6, 4, 'ru-RU', 'Привет222', 'Сайцвпрв  пвап', 'dsf sdf vsdf  sdf gsdf  sfd f', 9, 1554522519),
(7, 4, 'uz-UZ', 'Привет', 'Шортке', 'лотка аылм тлоыв ымбвамтлоывам', 9, 1554522519),
(8, 4, 'en-US', 'Hello', 'Hi, my nime is', 'dsf sdf vsdf  sdf gsdf  sfd f', 9, 1554522519),
(9, 2, 'en-US', 'Second', 'Short teg in seconfg', 'salom, bu birtinichi qasdaama', 1, NULL),
(23, 4, 'uz-UZ', 'Hello222', 'Hi, my nime is', 'dsf sdf vsdf  sdf gsdf  sfd f', 9, 1554522519),
(24, 5, 'uz-UZ', 'hamma qani0000', 'Biurinchi qadam000', 'adfv sd sdf sdf dsf sdfg000', 1, 1553711646),
(25, 6, 'uz-UZ', 'dddddddddddddd', 'dssssssss', 'sdvfdsvfd sdsfsd2', 1, 1554487207),
(26, 6, 'en-US', 'Hello Guys2222000', 'Hi every222000', 'sdvfdsvfd sdsfsd2222000', 1, 1554487207),
(27, 6, 'ru-RU', 'Привет222000', 'как джеаа222000', 'ывамва ыа ыва ыва2222000', 1, 1554487207),
(28, 5, 'ru-RU', 'Привет 000', 'Biurinchi qadam0000', '0000000', 1, NULL),
(29, 5, 'en-US', 'asdfds0000', 'asdfdsa0000', '00000000', 1, NULL),
(30, 3, 'ru-RU', 'Привет', 'Biurinchi qadam', 'asdf a asd asdf asdf as dfdas f', 9, 1562082137),
(31, 7, 'uz-UZ', 'asdfds', 'sdfad ds fasdf ', 'a sdf asd asd asdf asdf sad asd v vasd vadsv  adsv sd', 1, NULL),
(32, 8, 'uz-UZ', 'asdfdsds', 'sad sdcfasdcsdc', '<p>&nbsp;adsf d asd asdv a asda sdv asdv adsv&nbsp;</p>', 1, 1562002899);

-- --------------------------------------------------------

--
-- Структура таблицы `in_menu_trans`
--

CREATE TABLE IF NOT EXISTS `in_menu_trans` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `lang` varchar(128) NOT NULL,
  `title` varchar(128) NOT NULL,
  `status` int(11) NOT NULL,
  `updated_date` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `in_menu_trans`
--

INSERT INTO `in_menu_trans` (`id`, `menu_id`, `lang`, `title`, `status`, `updated_date`) VALUES
(1, 3, 'ru-RU', 'Тест', 1, 1552825065),
(2, 4, 'en-US', 'Second', 1, NULL),
(3, 3, 'en-US', 'Tested2', 1, 1552825168),
(4, 5, 'uz-UZ', 'Bacxt', 1, NULL),
(5, 6, 'uz-UZ', 'Kelajak', 1, NULL),
(6, 5, 'uz-UZ', 'Bacxt2', 1, NULL),
(7, 2, 'ru-RU', 'Dlya ruskix222', 1, 1554316318),
(8, 7, 'uz-UZ', 'qahramon000', 9, 1554317892),
(9, 7, 'en-US', 'hi my nanrt', 9, 1554317892),
(10, 7, 'ru-RU', 'i ti toje', 9, 1554317892),
(11, 1, 'ru-RU', 'вапрвап ап вап', 1, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `in_photo`
--

CREATE TABLE IF NOT EXISTS `in_photo` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `info` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `in_photo`
--

INSERT INTO `in_photo` (`id`, `slug`, `image`, `status`, `info`) VALUES
(1, 'salom', '', 1, 'hammaa sadsa');

-- --------------------------------------------------------

--
-- Структура таблицы `in_rasm`
--

CREATE TABLE IF NOT EXISTS `in_rasm` (
  `id` int(11) NOT NULL,
  `photo_id` int(11) NOT NULL,
  `src` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `in_text_translate`
--

CREATE TABLE IF NOT EXISTS `in_text_translate` (
  `id` int(11) NOT NULL,
  `lang` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` varchar(128) NOT NULL,
  `status` int(4) NOT NULL DEFAULT '1',
  `updated_date` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `in_text_translate`
--

INSERT INTO `in_text_translate` (`id`, `lang`, `slug`, `text`, `status`, `updated_date`) VALUES
(1, 'uz-UZ', 'sevgi', 'Sevgi', 1, NULL),
(2, 'uz-UZ', 'salom', 'Salom', 1, NULL),
(3, 'ru-RU', 'salom', 'Приветь', 1, 1551543584),
(4, 'en-US', 'salom', 'Hello', 1, NULL),
(5, 'ru-RU', 'sevgi', 'Любовь', 1, 1551611979),
(6, 'uz-UZ', 'test', 'Test', 1, 1552820014),
(7, 'en-US', 'test', 'TEST', 1, NULL),
(8, 'ru-RU', 'test', 'Тест', 1, NULL),
(9, 'en-US', 'sevgi', 'Love', 1, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1550999226),
('m190224_090538_create_user_table', 1550999228);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `wrong_pass` int(4) NOT NULL DEFAULT '0',
  `phone` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `admin_seen` mediumint(9) NOT NULL DEFAULT '0',
  `image` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `fio` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `tel` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `birthdate` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `wrong_pass`, `phone`, `admin_seen`, `image`, `fio`, `tel`, `birthdate`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'AajCcg5lGypsSXxJ0AlUWbbZ77zxfmQg', '$2y$13$0nAbzuxlVvE5hAwqL4YWY.QHzLczRm2s1oNedP5hdm1qNGT3Uo9uy', NULL, 'ax5165@gmail.com', 10, 0, '23424234', 1, 'uploads/5d1b9dcdc7c1a.jpg', 'Adminka', NULL, NULL, 1551011259, 0),
(2, 'user', '3QQrZAt1k7yQcHpuQhk9Q7-BC3rrQN3D', '$2y$13$w67CMueMP.wEpj9PB0fDiejsTVpZMH2McyZfm1PQbNvdyngXILZbO', NULL, 'axax@ads.uz', 5, 0, '23424234212', 1, 'uploads/5d1b9cec12dea.jpg', '', '34545345', NULL, 1561916127, 0),
(3, 'test', '4NAnP4SD1Qbw6GwM7aGYh11AKvv2CYSB', '$2y$13$F.tlxeBxsYdRbFGESeY0OOYnTQEci.UzpiCT1rle1L2eJhsvSdOhS', NULL, 'sds@asdds.uz', 5, 0, NULL, 0, NULL, NULL, NULL, NULL, 1561916281, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `in_menu`
--
ALTER TABLE `in_menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `in_menu_item`
--
ALTER TABLE `in_menu_item`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `in_menu_item_trans`
--
ALTER TABLE `in_menu_item_trans`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `in_menu_trans`
--
ALTER TABLE `in_menu_trans`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `in_photo`
--
ALTER TABLE `in_photo`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `in_rasm`
--
ALTER TABLE `in_rasm`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `in_text_translate`
--
ALTER TABLE `in_text_translate`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `in_menu`
--
ALTER TABLE `in_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `in_menu_item`
--
ALTER TABLE `in_menu_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `in_menu_item_trans`
--
ALTER TABLE `in_menu_item_trans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT для таблицы `in_menu_trans`
--
ALTER TABLE `in_menu_trans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `in_photo`
--
ALTER TABLE `in_photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `in_rasm`
--
ALTER TABLE `in_rasm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `in_text_translate`
--
ALTER TABLE `in_text_translate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
