-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Мар 03 2016 г., 12:11
-- Версия сервера: 5.5.39-MariaDB
-- Версия PHP: 5.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `mriyabro_l`
--

-- --------------------------------------------------------

--
-- Структура таблицы `agents`
--

CREATE TABLE IF NOT EXISTS `agents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stuff` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '/images/photos/nophoto.jpg',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `agents`
--

INSERT INTO `agents` (`id`, `name`, `lastname`, `email`, `phone`, `facebook`, `twitter`, `linkedin`, `stuff`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Oleksii', 'Kruhlyk', 'alexkruglik81@gmail.com', '+380506073511', '', '', '', 'Менеджер з продажів', '/images/agents/2.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Олексій', 'Круглик', 'alexkruglik81@gmail.com', '+380506073511', 'alexkruglik81@gmail.com', 'alexkruglik81@gmail.com', 'alexkruglik81@gmail.com', 'Менеджер з продажів', '/images/agents/2.jpg', '0000-00-00 00:00:00', '2015-09-09 19:05:35'),
(3, 'Жанна', 'Стюардеса', 'admin@mail.ru', '123123123', 'Стюардеса', 'Стюардеса', 'Стюардеса', 'Стюардеса', 'IMG_5060.jpg', '2015-09-09 19:31:47', '2015-09-09 19:31:47');

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_k` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_d` text COLLATE utf8_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '/images/nocover.jpg',
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `name`, `meta_k`, `meta_d`, `body`, `cover`, `slug`, `active`, `created_at`, `updated_at`) VALUES
(2, 'Заголовок новости ene', '', '', 'non', 'http://lorempixel.com/850/550/', 'zagolovok-novosti-ene', 1, '2015-08-20 19:37:29', '2015-08-20 19:37:29'),
(3, 'Заголовок новости jrb', '', '', 'doloremque', 'http://lorempixel.com/850/550/', 'zagolovok-novosti-jrb', 1, '2015-08-20 19:37:29', '2015-08-20 19:37:29'),
(4, 'Заголовок новости tyk', '', '', 'labore', 'http://lorempixel.com/850/550/', 'zagolovok-novosti-tyk', 1, '2015-08-20 19:37:29', '2015-08-20 19:37:29'),
(5, 'Заголовок новости upp', '', '', 'numquam', 'http://lorempixel.com/850/550/', 'zagolovok-novosti-upp', 1, '2015-08-20 19:37:30', '2015-08-20 19:37:30'),
(6, 'Заголовок новости dpo', '', '', 'incidunt', 'http://lorempixel.com/850/550/', 'zagolovok-novosti-dpo', 1, '2015-08-20 19:37:30', '2015-08-20 19:37:30'),
(7, 'Заголовок новости gil', '', '', 'nostrum', 'http://lorempixel.com/850/550/', 'zagolovok-novosti-gil', 1, '2015-08-20 19:37:30', '2015-08-20 19:37:30'),
(8, 'Заголовок новости njv', '', '', 'iste', 'http://lorempixel.com/850/550/', 'zagolovok-novosti-njv', 1, '2015-08-20 19:37:30', '2015-08-20 19:37:31'),
(9, 'Заголовок новости bem', '', '', 'tempora', 'http://lorempixel.com/850/550/', 'zagolovok-novosti-bem', 1, '2015-08-20 19:37:31', '2015-08-20 19:37:31'),
(10, 'Заголовок новости lfu', '', '', 'numquam', 'http://lorempixel.com/850/550/', 'zagolovok-novosti-lfu', 1, '2015-08-20 19:37:31', '2015-08-20 19:37:31'),
(11, 'Заголовок новости ezy', '', '', 'doloribus', 'http://lorempixel.com/850/550/', 'zagolovok-novosti-ezy', 1, '2015-08-20 19:37:31', '2015-08-20 19:37:31'),
(12, 'Заголовок новости mxc', '', '', 'et', 'http://lorempixel.com/850/550/', 'zagolovok-novosti-mxc', 1, '2015-08-20 19:37:31', '2015-08-20 19:37:31'),
(13, 'Заголовок новости cmw', '', '', 'expedita', 'http://lorempixel.com/850/550/', 'zagolovok-novosti-cmw', 1, '2015-08-20 19:37:31', '2015-08-20 19:37:31'),
(14, 'Заголовок новости hmj', '', '', 'voluptatem', 'http://lorempixel.com/850/550/', 'zagolovok-novosti-hmj', 1, '2015-08-20 19:37:31', '2015-08-20 19:37:31'),
(15, 'Заголовок новости hxa', '', '', 'animi', 'http://lorempixel.com/850/550/', 'zagolovok-novosti-hxa', 1, '2015-08-20 19:37:31', '2015-08-20 19:37:31'),
(16, 'Заголовок новости oyu', '', '', 'tenetur', 'http://lorempixel.com/850/550/', 'zagolovok-novosti-oyu', 1, '2015-08-20 19:37:31', '2015-08-20 19:37:32'),
(17, 'Заголовок новости gbr', '', '', 'atque', 'http://lorempixel.com/850/550/', 'zagolovok-novosti-gbr', 1, '2015-08-20 19:37:32', '2015-08-20 19:37:32'),
(18, 'Заголовок новости qpr', '', '', 'voluptatem', 'http://lorempixel.com/850/550/', 'zagolovok-novosti-qpr', 1, '2015-08-20 19:37:32', '2015-08-20 19:37:32'),
(19, 'Заголовок новости knx', '', '', 'nobis', 'http://lorempixel.com/850/550/', 'zagolovok-novosti-knx', 1, '2015-08-20 19:37:32', '2015-08-20 19:37:32'),
(20, 'Заголовок новости alx', '', '', 'incidunt', 'http://lorempixel.com/850/550/', 'zagolovok-novosti-alx', 1, '2015-08-20 19:37:32', '2015-08-20 19:37:32'),
(21, 'Заголовок новости gwh', '', '', 'vitae', 'http://lorempixel.com/850/550/', 'zagolovok-novosti-gwh', 1, '2015-08-20 19:37:32', '2015-08-20 19:37:32');

-- --------------------------------------------------------

--
-- Структура таблицы `confs`
--

CREATE TABLE IF NOT EXISTS `confs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `about` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `google` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `odnoklassniki` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `confs`
--

INSERT INTO `confs` (`id`, `name`, `email`, `phone`, `phone2`, `address`, `about`, `created_at`, `updated_at`, `facebook`, `google`, `twitter`, `vk`, `odnoklassniki`) VALUES
(1, 'АН "Мрія"', 'info@mria.com', '0 800 123 4567', '0 800 123 4567', '00000, Київ, вул. Вулиця, буд. 1', '<p><em><strong>Це описання нашої найкрутішої компанії. Ми найкрутіше агентсво нерухомості в Україні!</strong></em></p>\r\n', '2015-08-19 21:00:00', '2015-09-09 19:28:43', 'http://forum.0day.kiev.ua/index.php?act=UserCP&CODE=00', 'http://forum.0day.kiev.ua/index.php?act=UserCP&CODE=00', 'http://forum.0day.kiev.ua/index.php?act=UserCP&CODE=00', 'http://forum.0day.kiev.ua/index.php?act=UserCP&CODE=00', 'http://forum.0day.kiev.ua/index.php?act=UserCP&CODE=00');

-- --------------------------------------------------------

--
-- Структура таблицы `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ordered` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `menus`
--

INSERT INTO `menus` (`id`, `name`, `slug`, `ordered`, `active`, `created_at`, `updated_at`) VALUES
(1, 'На головну', 'index', '1', 1, '0000-00-00 00:00:00', '2015-09-09 14:14:43'),
(2, 'Каталог', 'catalog', '2', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Новини', 'news', '3', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Зв''язатись з нами', 'contacts', '4', 1, '0000-00-00 00:00:00', '2015-09-09 14:22:53');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_08_03_131851_objectsAdd', 2),
('2015_08_03_133957_objectsTypesAdd', 3),
('2015_08_03_134330_agentsAdd', 4),
('2015_08_03_134822_objectsFixAdd', 5),
('2015_08_03_135205_pagesAdd', 6),
('2015_08_03_135825_objectsFix2Add', 7),
('2015_08_03_140140_photosAdd', 8),
('2015_08_03_221357_objectsFix', 9),
('2015_08_05_150221_create', 10),
('2015_08_05_184457_add', 10),
('2015_08_05_232725_add_tables', 11),
('2015_08_09_111939_create_MaiMenu', 12),
('2015_08_09_143256_create_news', 13),
('2015_08_19_150827_add_objects', 14),
('2015_08_20_140024_add_objects', 15),
('2015_08_20_165412_create_configs', 16),
('2015_08_20_175926_add_configs', 17),
('2015_09_03_131255_create_password_reminders_table', 18),
('2015_09_09_160726_add_table_menus', 19),
('2015_09_09_170805_add_menus', 20),
('2015_09_09_205141_add_agents', 21);

-- --------------------------------------------------------

--
-- Структура таблицы `objects`
--

CREATE TABLE IF NOT EXISTS `objects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_k` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_d` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location_id` int(11) NOT NULL,
  `sublocation_id` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type_id` int(11) NOT NULL DEFAULT '1',
  `area` int(11) NOT NULL,
  `area_type` enum('сотки','гектари','м.кв.') COLLATE utf8_unicode_ci NOT NULL,
  `rooms` int(11) NOT NULL,
  `case_type` enum('оренда','продаж','обмін') COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `currency` enum('$','грн.') COLLATE utf8_unicode_ci NOT NULL DEFAULT '$',
  `pay_type` enum('в місяц','за добу') COLLATE utf8_unicode_ci DEFAULT NULL,
  `termins` tinyint(4) NOT NULL DEFAULT '0',
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '/images/nophoto.jpg',
  `agent_id` int(2) NOT NULL DEFAULT '1',
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=71 ;

--
-- Дамп данных таблицы `objects`
--

INSERT INTO `objects` (`id`, `name`, `meta_k`, `meta_d`, `slug`, `location_id`, `sublocation_id`, `address`, `type_id`, `area`, `area_type`, `rooms`, `case_type`, `price`, `currency`, `pay_type`, `termins`, `description`, `cover`, `agent_id`, `active`, `created_at`, `updated_at`) VALUES
(1, 'sit', '', '', 'sit', 44, 50, '619489, Самарская область, город Мытищи, бульвар Чехова, 87', 3, 211, 'гектари', 3, 'обмін', 37513, 'грн.', 'за добу', 1, 'dolorem', 'http://lorempixel.com/870/570/', 31, 1, '2015-08-20 10:50:31', '2015-08-20 11:44:50'),
(2, 'aliquid', '', '', 'aliquid', 99, 42, '335238, Новосибирская область, город Серебряные Пруды, въезд Балканская, 42', 3, 885, 'гектари', 6, 'оренда', 79790, '$', 'за добу', 1, 'dolores', 'http://lorempixel.com/870/570/', 12, 1, '2015-08-20 10:50:31', '2015-08-20 11:44:50'),
(3, 'distinctio', '', '', 'distinctio', 75, 49, '031602, Волгоградская область, город Шаховская, пл. Гагарина, 27', 1, 207, 'гектари', 2, 'обмін', 98655, '$', 'за добу', 0, 'a', 'http://lorempixel.com/870/570/', 16, 1, '2015-08-20 10:50:32', '2015-08-20 11:44:50'),
(4, 'tempore', '', '', 'tempore', 54, 22, '518163, Калужская область, город Дорохово, ул. Ленина, 13', 2, 331, 'сотки', 10, 'оренда', 1841, '$', '', 1, 'voluptate', 'http://lorempixel.com/870/570/', 17, 1, '2015-08-20 10:50:32', '2015-08-20 11:44:50'),
(5, 'ex', '', '', 'ex', 31, 89, '083975, Ростовская область, город Домодедово, пер. Чехова, 33', 3, 890, 'гектари', 2, 'продаж', 47587, '$', '', 0, 'voluptatem', 'http://lorempixel.com/870/570/', 8, 1, '2015-08-20 10:50:32', '2015-08-20 11:44:50'),
(6, 'ea', '', '', 'ea', 20, 31, '653164, Московская область, город Клин, шоссе Гагарина, 73', 1, 128, 'сотки', 3, 'продаж', 44805, '$', '', 1, 'id', 'http://lorempixel.com/870/570/', 34, 1, '2015-08-20 10:50:32', '2015-08-20 11:44:50'),
(7, 'et', '', '', 'et', 78, 38, '300151, Ростовская область, город Ногинск, въезд Домодедовская, 78', 1, 834, 'сотки', 8, 'продаж', 55200, 'грн.', '', 1, 'vero', 'http://lorempixel.com/870/570/', 47, 1, '2015-08-20 10:50:32', '2015-08-20 11:44:50'),
(8, 'aut', '', '', 'aut', 61, 86, '449995, Калужская область, город Одинцово, наб. Будапештсткая, 30', 3, 765, 'гектари', 1, 'оренда', 25152, '$', '', 0, 'sint', 'http://lorempixel.com/870/570/', 31, 1, '2015-08-20 10:50:32', '2015-08-20 11:44:50'),
(9, 'commodi', '', '', 'commodi', 7, 11, '324817, Липецкая область, город Лотошино, проезд Косиора, 70', 3, 727, 'гектари', 5, 'оренда', 57508, '$', '', 0, 'alias', 'http://lorempixel.com/870/570/', 27, 1, '2015-08-20 10:50:32', '2015-08-20 11:44:50'),
(10, 'sapiente', '', '', 'sapiente', 42, 10, '450383, Волгоградская область, город Видное, пер. Славы, 05', 1, 900, 'гектари', 9, 'оренда', 13614, 'грн.', 'за добу', 0, 'qui', 'http://lorempixel.com/870/570/', 31, 1, '2015-08-20 10:50:32', '2015-08-20 11:44:50'),
(11, 'eum', '', '', 'eum', 32, 14, '147784, Курганская область, город Орехово-Зуево, наб. Славы, 99', 2, 809, 'сотки', 1, 'оренда', 58240, '$', '', 1, 'vel', 'http://lorempixel.com/870/570/', 40, 1, '2015-08-20 10:50:33', '2015-08-20 11:44:50'),
(12, 'quod', '', '', 'quod', 14, 67, '744281, Свердловская область, город Воскресенск, пл. Космонавтов, 92', 1, 526, 'сотки', 7, 'оренда', 20990, '$', 'за добу', 0, 'est', 'http://lorempixel.com/870/570/', 38, 1, '2015-08-20 10:50:33', '2015-08-20 11:44:51'),
(13, 'natus', '', '', 'natus', 94, 33, '552197, Липецкая область, город Москва, проезд Космонавтов, 08', 1, 104, 'м.кв.', 2, 'продаж', 26304, 'грн.', '', 0, 'voluptas', 'http://lorempixel.com/870/570/', 48, 1, '2015-08-20 10:50:33', '2015-08-20 11:44:51'),
(14, 'fugiat', '', '', 'fugiat', 85, 18, '048315, Брянская область, город Видное, пл. Ленина, 65', 2, 122, 'м.кв.', 3, 'оренда', 62831, '$', '', 0, 'sunt', 'http://lorempixel.com/870/570/', 36, 1, '2015-08-20 10:50:33', '2015-08-20 11:44:51'),
(15, 'neque', '', '', 'neque', 87, 58, '597354, Нижегородская область, город Орехово-Зуево, наб. Бухарестская, 90', 2, 305, 'гектари', 5, 'обмін', 81380, '$', 'за добу', 1, 'sapiente', 'http://lorempixel.com/870/570/', 40, 1, '2015-08-20 10:50:33', '2015-08-20 11:44:51'),
(16, 'sint', '', '', 'sint', 38, 56, '394856, Кировская область, город Балашиха, пр. Ладыгина, 38', 3, 310, 'м.кв.', 8, 'продаж', 74737, 'грн.', 'за добу', 1, 'cupiditate', 'http://lorempixel.com/870/570/', 3, 1, '2015-08-20 10:50:33', '2015-08-20 11:44:51'),
(17, 'velit', '', '', 'velit', 85, 71, '949884, Белгородская область, город Москва, пл. Космонавтов, 14', 1, 826, 'м.кв.', 2, 'оренда', 50139, 'грн.', 'за добу', 0, 'sit', 'http://lorempixel.com/870/570/', 49, 1, '2015-08-20 10:50:33', '2015-08-20 11:44:51'),
(18, 'ipsa', '', '', 'ipsa', 86, 52, '206643, Тамбовская область, город Одинцово, шоссе Ленина, 25', 3, 801, 'м.кв.', 10, 'обмін', 96729, 'грн.', 'за добу', 1, 'voluptatem', 'http://lorempixel.com/870/570/', 16, 1, '2015-08-20 10:50:33', '2015-08-20 11:44:51'),
(19, 'expedita', '', '', 'expedita', 39, 15, '464264, Томская область, город Воскресенск, проезд Ленина, 43', 2, 111, 'сотки', 10, 'обмін', 90954, 'грн.', '', 1, 'sit', 'http://lorempixel.com/870/570/', 11, 1, '2015-08-20 10:50:33', '2015-08-20 11:44:51'),
(20, 'illum', '', '', 'illum', 55, 12, '642639, Белгородская область, город Раменское, въезд Косиора, 72', 1, 848, 'гектари', 8, 'обмін', 94885, 'грн.', 'за добу', 0, 'voluptatum', 'http://lorempixel.com/870/570/', 40, 1, '2015-08-20 10:50:33', '2015-08-20 11:44:51'),
(21, 'voluptatibus', '', '', 'voluptatibus', 74, 97, '117338, Самарская область, город Раменское, проезд Ленина, 88', 1, 487, 'сотки', 3, 'продаж', 41323, 'грн.', 'за добу', 1, 'tempora', 'http://lorempixel.com/850/550/', 24, 1, '2015-08-20 11:36:28', '2015-08-20 11:44:51'),
(22, 'dignissimos', '', '', 'dignissimos', 85, 18, '535916, Калининградская область, город Талдом, наб. Будапештсткая, 19', 3, 440, 'м.кв.', 8, 'оренда', 82626, '$', '', 0, 'voluptates', 'http://lorempixel.com/850/550/', 41, 1, '2015-08-20 11:36:29', '2015-08-20 11:44:51'),
(23, 'quia', '', '', 'quia', 55, 28, '524004, Липецкая область, город Волоколамск, въезд Домодедовская, 34', 1, 43, 'сотки', 4, 'оренда', 58860, 'грн.', '', 0, 'dolorem', 'http://lorempixel.com/850/550/', 41, 1, '2015-08-20 11:36:31', '2015-08-20 11:44:51'),
(24, 'odio', '', '', 'odio', 97, 21, '172543, Ростовская область, город Павловский Посад, шоссе Будапештсткая, 21', 1, 126, 'сотки', 10, 'продаж', 92966, '$', 'за добу', 1, 'praesentium', 'http://lorempixel.com/850/550/', 50, 1, '2015-08-20 11:36:31', '2015-08-20 11:44:51'),
(25, 'repellendus', '', '', 'repellendus', 94, 62, '828174, Томская область, город Серпухов, проезд 1905 года, 30', 1, 701, 'м.кв.', 3, 'обмін', 64769, 'грн.', '', 1, 'est', 'http://lorempixel.com/850/550/', 30, 1, '2015-08-20 11:36:32', '2015-08-20 11:44:51'),
(26, 'id', '', '', 'id', 27, 28, '583364, Калужская область, город Лотошино, бульвар Косиора, 56', 1, 92, 'сотки', 8, 'обмін', 29880, '$', '', 0, 'tempore', 'http://lorempixel.com/850/550/', 5, 1, '2015-08-20 11:36:33', '2015-08-20 11:44:51'),
(27, 'molestiae', '', '', 'molestiae', 2, 34, '274046, Брянская область, город Домодедово, пер. Бухарестская, 02', 2, 706, 'гектари', 8, 'продаж', 83494, 'грн.', '', 1, 'blanditiis', 'http://lorempixel.com/850/550/', 33, 1, '2015-08-20 11:36:34', '2015-08-20 11:44:51'),
(28, 'incidunt', '', '', 'incidunt', 91, 88, '723255, Московская область, город Мытищи, проезд Сталина, 43', 3, 444, 'гектари', 3, 'продаж', 43707, 'грн.', 'за добу', 0, 'et', 'http://lorempixel.com/850/550/', 25, 1, '2015-08-20 11:36:35', '2015-08-20 11:44:51'),
(29, 'animi', '', '', 'animi', 8, 52, '493996, Смоленская область, город Сергиев Посад, проезд Чехова, 98', 3, 688, 'м.кв.', 8, 'обмін', 81200, '$', '', 1, 'explicabo', 'http://lorempixel.com/850/550/', 14, 1, '2015-08-20 11:36:37', '2015-08-20 11:44:51'),
(30, 'ducimus', '', '', 'ducimus', 24, 33, '605217, Тверская область, город Ногинск, въезд Косиора, 00', 1, 821, 'сотки', 3, 'обмін', 47340, '$', '', 0, 'reiciendis', 'http://lorempixel.com/850/550/', 6, 1, '2015-08-20 11:36:37', '2015-08-20 11:44:51'),
(31, 'mollitia', '', '', 'mollitia', 44, 7, '395981, Тульская область, город Лотошино, спуск Косиора, 87', 2, 738, 'гектари', 1, 'оренда', 38648, 'грн.', 'за добу', 1, 'libero', 'http://lorempixel.com/850/550/', 19, 1, '2015-08-20 11:36:38', '2015-08-20 11:44:51'),
(32, 'et', '', '', 'et', 57, 6, '559589, Ярославская область, город Дмитров, наб. Гагарина, 36', 1, 149, 'м.кв.', 10, 'обмін', 69198, '$', 'за добу', 1, 'velit', 'http://lorempixel.com/850/550/', 24, 1, '2015-08-20 11:36:39', '2015-08-20 11:44:52'),
(33, 'perspiciatis', '', '', 'perspiciatis', 78, 12, '798796, Тамбовская область, город Волоколамск, ул. Славы, 32', 2, 408, 'м.кв.', 7, 'обмін', 23078, '$', 'за добу', 1, 'sapiente', 'http://lorempixel.com/850/550/', 19, 1, '2015-08-20 11:36:40', '2015-08-20 11:44:52'),
(34, 'necessitatibus', '', '', 'necessitatibus', 8, 71, '495667, Мурманская область, город Одинцово, пл. Косиора, 38', 2, 300, 'сотки', 7, 'оренда', 25734, 'грн.', '', 0, 'vel', 'http://lorempixel.com/850/550/', 27, 1, '2015-08-20 11:36:41', '2015-08-20 11:44:52'),
(35, 'placeat', '', '', 'placeat', 62, 83, '436721, Рязанская область, город Шаховская, наб. Балканская, 49', 2, 895, 'сотки', 2, 'обмін', 8933, '$', '', 1, 'distinctio', 'http://lorempixel.com/850/550/', 16, 1, '2015-08-20 11:36:42', '2015-08-20 11:44:52'),
(36, 'ut', '', '', 'ut', 83, 81, '738801, Омская область, город Луховицы, пер. Чехова, 37', 2, 220, 'гектари', 4, 'обмін', 50377, 'грн.', 'за добу', 1, 'assumenda', 'http://lorempixel.com/850/550/', 8, 1, '2015-08-20 11:36:44', '2015-08-20 11:44:52'),
(37, 'et', '', '', 'et', 64, 91, '958110, Рязанская область, город Коломна, пер. Славы, 17', 3, 505, 'сотки', 2, 'продаж', 96595, '$', 'за добу', 1, 'et', 'http://lorempixel.com/850/550/', 18, 1, '2015-08-20 11:36:46', '2015-08-20 11:44:52'),
(38, 'illo', '', '', 'illo', 74, 66, '345726, Калининградская область, город Павловский Посад, проезд Балканская, 48', 3, 673, 'сотки', 8, 'оренда', 78033, '$', '', 0, 'recusandae', 'http://lorempixel.com/850/550/', 16, 1, '2015-08-20 11:36:47', '2015-08-20 11:44:52'),
(39, 'occaecati', '', '', 'occaecati', 33, 6, '383564, Архангельская область, город Мытищи, бульвар Космонавтов, 58', 2, 82, 'сотки', 8, 'обмін', 27668, 'грн.', '', 1, 'quia', 'http://lorempixel.com/850/550/', 27, 1, '2015-08-20 11:36:48', '2015-08-20 11:44:52'),
(40, 'praesentium', '', '', 'praesentium', 34, 91, '111233, Кировская область, город Клин, наб. Космонавтов, 60', 2, 486, 'м.кв.', 1, 'обмін', 60399, 'грн.', '', 0, 'sequi', 'http://lorempixel.com/850/550/', 7, 1, '2015-08-20 11:36:50', '2015-08-20 11:44:52'),
(41, 'voluptate', '', '', 'voluptate', 13, 56, '590225, Костромская область, город Шаховская, шоссе Домодедовская, 63', 2, 836, 'гектари', 1, 'оренда', 25791, '$', '', 0, 'reiciendis', 'http://lorempixel.com/850/550/', 25, 1, '2015-08-20 11:44:08', '2015-08-20 11:44:52'),
(42, 'voluptatibus', '', '', 'voluptatibus', 32, 83, '010476, Калининградская область, город Красногорск, пл. Ломоносова, 58', 3, 707, 'м.кв.', 5, 'оренда', 1890, '$', 'за добу', 0, 'modi', 'http://lorempixel.com/850/550/', 40, 1, '2015-08-20 11:44:10', '2015-08-20 11:44:52'),
(43, 'voluptatem', '', '', 'voluptatem', 30, 29, '667065, Оренбургская область, город Чехов, бульвар Косиора, 28', 2, 66, 'сотки', 10, 'продаж', 52975, 'грн.', 'за добу', 0, 'veniam', 'http://lorempixel.com/850/550/', 21, 1, '2015-08-20 11:44:12', '2015-08-20 11:44:52'),
(44, 'quis', '', '', 'quis', 12, 77, '515509, Кемеровская область, город Дмитров, наб. Чехова, 51', 1, 93, 'м.кв.', 3, 'оренда', 10529, '$', 'за добу', 0, 'assumenda', 'http://lorempixel.com/850/550/', 19, 1, '2015-08-20 11:44:14', '2015-08-20 11:44:52'),
(45, 'in', '', '', 'in', 1, 44, '616284, Саратовская область, город Лотошино, пл. Гагарина, 34', 3, 222, 'м.кв.', 3, 'продаж', 50325, '$', '', 1, 'officia', 'http://lorempixel.com/850/550/', 25, 1, '2015-08-20 11:44:16', '2015-08-20 11:44:52'),
(46, 'molestiae', '', '', 'molestiae', 3, 68, '016442, Кемеровская область, город Волоколамск, пер. Сталина, 45', 2, 757, 'м.кв.', 4, 'продаж', 57602, 'грн.', 'за добу', 0, 'inventore', 'http://lorempixel.com/850/550/', 10, 1, '2015-08-20 11:44:18', '2015-08-20 11:44:52'),
(47, 'quisquam', '', '', 'quisquam', 47, 76, '969322, Владимирская область, город Подольск, въезд Бухарестская, 53', 3, 341, 'сотки', 2, 'продаж', 50849, 'грн.', '', 0, 'quo', 'http://lorempixel.com/850/550/', 11, 1, '2015-08-20 11:44:20', '2015-08-20 11:44:52'),
(48, 'libero', '', '', 'libero', 4, 24, '931396, Астраханская область, город Чехов, бульвар Чехова, 14', 3, 813, 'м.кв.', 2, 'оренда', 43860, 'грн.', 'за добу', 0, 'eos', 'http://lorempixel.com/850/550/', 49, 1, '2015-08-20 11:44:22', '2015-08-20 11:44:52'),
(49, 'delectus', '', '', 'delectus', 46, 26, '185705, Челябинская область, город Красногорск, спуск Косиора, 70', 1, 412, 'м.кв.', 6, 'продаж', 16033, 'грн.', 'за добу', 1, 'est', 'http://lorempixel.com/850/550/', 26, 1, '2015-08-20 11:44:24', '2015-08-20 11:44:52'),
(50, 'qui', '', '', 'qui', 55, 47, '600798, Амурская область, город Талдом, спуск Гоголя, 39', 2, 405, 'гектари', 10, 'продаж', 23962, '$', 'за добу', 0, 'dolorem', 'http://lorempixel.com/850/550/', 24, 1, '2015-08-20 11:44:26', '2015-08-20 11:44:52'),
(51, 'sit', '', '', 'sit', 16, 26, '081528, Липецкая область, город Мытищи, спуск Славы, 15', 3, 353, 'гектари', 7, 'продаж', 40517, 'грн.', '', 0, 'maxime', 'http://lorempixel.com/850/550/', 29, 1, '2015-08-20 11:44:28', '2015-08-20 11:44:52'),
(52, 'rerum', '', '', 'rerum', 17, 54, '668043, Новгородская область, город Талдом, проезд Ломоносова, 33', 2, 253, 'м.кв.', 3, 'оренда', 91541, '$', 'за добу', 0, 'dolor', 'http://lorempixel.com/850/550/', 24, 1, '2015-08-20 11:44:30', '2015-08-20 11:44:52'),
(53, 'nisi', '', '', 'nisi', 63, 47, '203015, Оренбургская область, город Лотошино, ул. Космонавтов, 74', 1, 623, 'м.кв.', 5, 'продаж', 99943, '$', 'за добу', 0, 'laudantium', 'http://lorempixel.com/850/550/', 20, 1, '2015-08-20 11:44:33', '2015-08-20 11:44:52'),
(54, 'nihil', '', '', 'nihil', 42, 52, '248131, Ростовская область, город Подольск, въезд Космонавтов, 82', 2, 418, 'гектари', 1, 'оренда', 76146, 'грн.', 'за добу', 0, 'sed', 'http://lorempixel.com/850/550/', 13, 1, '2015-08-20 11:44:35', '2015-08-20 11:44:52'),
(55, 'qui', '', '', 'qui', 64, 25, '354412, Ростовская область, город Луховицы, въезд Косиора, 20', 1, 643, 'сотки', 2, 'обмін', 34280, '$', 'за добу', 0, 'ullam', 'http://lorempixel.com/850/550/', 40, 1, '2015-08-20 11:44:38', '2015-08-20 11:44:52'),
(56, 'qui', '', '', 'qui', 45, 50, '868314, Калужская область, город Щёлково, шоссе 1905 года, 53', 2, 686, 'сотки', 3, 'продаж', 83351, '$', 'за добу', 1, 'repellat', 'http://lorempixel.com/850/550/', 49, 1, '2015-08-20 11:44:40', '2015-08-20 11:44:52'),
(57, 'et', '', '', 'et', 78, 100, '167250, Амурская область, город Красногорск, шоссе Чехова, 95', 3, 403, 'сотки', 9, 'продаж', 10953, '$', 'за добу', 0, 'est', 'http://lorempixel.com/850/550/', 1, 1, '2015-08-20 11:44:43', '2015-08-20 11:44:52'),
(58, 'et', '', '', 'et', 90, 12, '012973, Нижегородская область, город Солнечногорск, пл. Гоголя, 21', 3, 467, 'гектари', 7, 'обмін', 91089, 'грн.', '', 1, 'culpa', 'http://lorempixel.com/850/550/', 18, 1, '2015-08-20 11:44:45', '2015-08-20 11:44:52'),
(59, 'nostrum', '', '', 'nostrum', 9, 77, '124882, Томская область, город Воскресенск, пер. Ломоносова, 65', 3, 590, 'гектари', 2, 'обмін', 60844, '$', 'за добу', 1, 'ut', 'http://lorempixel.com/850/550/', 25, 1, '2015-08-20 11:44:48', '2015-08-20 11:44:52'),
(60, 'dolor', '', '', 'dolor', 48, 33, '051795, Самарская область, город Щёлково, ул. Гагарина, 73', 1, 331, 'гектари', 10, 'оренда', 77551, 'грн.', 'за добу', 0, 'aperiam', 'http://lorempixel.com/850/550/', 40, 1, '2015-08-20 11:44:50', '2015-08-20 11:44:53'),
(61, 'Тестовая статья', '', '', '', 0, 0, 'Тестовая статья', 1, 123, 'м.кв.', 3, 'продаж', 20000, '$', NULL, 1, '<p>Тестовая статья</p>\r\n', '/opt/lampp/temp/phpcqmmGC', 0, 1, '2015-09-04 18:52:37', '2015-09-04 18:52:37'),
(62, 'Тестовая статья', '', '', '', 0, 0, 'Тестовая статья', 1, 123, 'м.кв.', 3, 'продаж', 20000, '$', NULL, 1, '<p>Тестовая статья</p>\r\n', '/opt/lampp/temp/phpKtiCku', 0, 1, '2015-09-04 18:53:04', '2015-09-04 18:53:04'),
(67, 'продається квартира', '', '', 'prodajetsya-kvartira', 0, 0, 'Тестовая статья', 1, 123, 'м.кв.', 3, 'продаж', 20000, '$', NULL, 1, '<p>Тестовая статья</p>\r\n', '/images/catalog/67/cover.jpg', 0, 1, '2015-09-04 19:26:11', '2015-09-04 19:26:12'),
(68, 'продається квартира', '', '', 'prodajetsya-kvartira', 0, 0, 'Киев, проспект Маяковского, 22а', 1, 123, 'м.кв.', 3, 'продаж', 20000, '$', NULL, 1, '<p>Вже давно відомо, що читабельний зміст буде заважати зосередитись людині, яка оцінює композицію сторінки. Сенс використання Lorem Ipsum полягає в тому, що цей текст має більш-менш нормальне розподілення літер на відміну від, наприклад, "Тут іде текст. Тут іде текст." Це робить текст схожим на оповідний. Багато програм верстування та веб-дизайну використовують Lorem Ipsum як зразок і пошук за терміном "lorem ipsum" відкриє багато веб-сайтів, які знаходяться ще в зародковому стані. Різні версії Lorem Ipsum з''явились за минулі роки, деякі випадково, деякі було створено зумисно (зокрема, жартівливі).</p>\n', '/images/catalog/68/cover.jpg', 0, 1, '2015-09-04 19:36:38', '2015-09-04 19:36:39'),
(69, 'Квартира4564678789789', 'Квартира234234234', 'Квартира234234234', 'kvartira4564678789789', 0, 0, 'Київ, Вербицького, 358', 3, 1, 'сотки', 72, 'продаж', 1113, '$', 'за добу', 1, '<p>Квартира</p>\r\n', '/images/catalog/69/cover.jpg', 1, 1, '2015-09-05 10:42:12', '2015-09-05 12:15:57'),
(70, 'продається квартира', '', '', 'prodajetsya-kvartira', 0, 0, 'продається квартира', 2, 123, 'м.кв.', 2, 'продаж', 345, '$', 'за добу', 1, '<p>продається квартира</p>\r\n', '/images/catalog/70/cover.jpg', 2, 1, '2015-09-09 17:42:17', '2015-09-09 17:42:19');

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `name`, `slug`, `body`, `active`, `created_at`, `updated_at`) VALUES
(3, 'Раді вітати!', 'index', '<p>Раді вітати!</p>\r\n', 1, '2015-09-09 13:04:17', '2015-09-09 13:04:17');

-- --------------------------------------------------------

--
-- Структура таблицы `password_reminders`
--

CREATE TABLE IF NOT EXISTS `password_reminders` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_reminders_email_index` (`email`),
  KEY `password_reminders_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `password_reminders`
--

INSERT INTO `password_reminders` (`email`, `token`, `created_at`) VALUES
('alexkruglik81@gmail.com', '819da1c656841fc6f290dde19f1d7c50b6d457fc', '2015-09-03 10:13:54');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `object_id` int(11) NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '/images/nophoto.jpg',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=53 ;

--
-- Дамп данных таблицы `photos`
--

INSERT INTO `photos` (`id`, `object_id`, `path`, `created_at`, `updated_at`) VALUES
(1, 36, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:37', '2015-08-05 15:55:37'),
(2, 52, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:37', '2015-08-05 15:55:37'),
(3, 21, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:37', '2015-08-05 15:55:37'),
(4, 41, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:37', '2015-08-05 15:55:37'),
(5, 38, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:37', '2015-08-05 15:55:37'),
(6, 19, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:37', '2015-08-05 15:55:37'),
(7, 38, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:38', '2015-08-05 15:55:38'),
(8, 40, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:38', '2015-08-05 15:55:38'),
(9, 40, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:38', '2015-08-05 15:55:38'),
(10, 48, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:38', '2015-08-05 15:55:38'),
(11, 41, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:38', '2015-08-05 15:55:38'),
(12, 51, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:38', '2015-08-05 15:55:38'),
(13, 43, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:38', '2015-08-05 15:55:38'),
(14, 29, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:38', '2015-08-05 15:55:38'),
(15, 34, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:38', '2015-08-05 15:55:38'),
(16, 17, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:38', '2015-08-05 15:55:38'),
(17, 35, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:38', '2015-08-05 15:55:38'),
(18, 13, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:38', '2015-08-05 15:55:38'),
(19, 40, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:38', '2015-08-05 15:55:38'),
(20, 51, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:38', '2015-08-05 15:55:38'),
(21, 3, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:38', '2015-08-05 15:55:38'),
(22, 46, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:38', '2015-08-05 15:55:38'),
(23, 9, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:38', '2015-08-05 15:55:38'),
(24, 52, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:38', '2015-08-05 15:55:38'),
(25, 36, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:38', '2015-08-05 15:55:38'),
(26, 12, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:38', '2015-08-05 15:55:38'),
(27, 10, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:38', '2015-08-05 15:55:38'),
(28, 22, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:38', '2015-08-05 15:55:38'),
(29, 49, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:38', '2015-08-05 15:55:38'),
(30, 32, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:39', '2015-08-05 15:55:39'),
(31, 44, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:39', '2015-08-05 15:55:39'),
(32, 30, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:39', '2015-08-05 15:55:39'),
(33, 31, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:39', '2015-08-05 15:55:39'),
(34, 52, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:39', '2015-08-05 15:55:39'),
(35, 47, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:39', '2015-08-05 15:55:39'),
(36, 49, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:39', '2015-08-05 15:55:39'),
(37, 22, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:39', '2015-08-05 15:55:39'),
(38, 46, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:39', '2015-08-05 15:55:39'),
(39, 13, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:39', '2015-08-05 15:55:39'),
(40, 35, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:39', '2015-08-05 15:55:39'),
(41, 39, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:39', '2015-08-05 15:55:39'),
(42, 43, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:39', '2015-08-05 15:55:39'),
(43, 15, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:39', '2015-08-05 15:55:39'),
(44, 25, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:39', '2015-08-05 15:55:39'),
(45, 6, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:39', '2015-08-05 15:55:39'),
(46, 34, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:39', '2015-08-05 15:55:39'),
(47, 19, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:39', '2015-08-05 15:55:39'),
(48, 45, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:39', '2015-08-05 15:55:39'),
(49, 50, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:39', '2015-08-05 15:55:39'),
(50, 8, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:39', '2015-08-05 15:55:39'),
(51, 47, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:39', '2015-08-05 15:55:39'),
(52, 4, 'http://lorempixel.com/870/570/', '2015-08-05 15:55:39', '2015-08-05 15:55:39');

-- --------------------------------------------------------

--
-- Структура таблицы `types`
--

CREATE TABLE IF NOT EXISTS `types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `types`
--

INSERT INTO `types` (`id`, `name`) VALUES
(1, 'Будинок'),
(2, 'Квартира'),
(3, 'Земельна ділянка');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `isActive` tinyint(1) NOT NULL DEFAULT '0',
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activationCode` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_username_unique` (`username`),
  KEY `users_is_active_index` (`isActive`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `username`, `isAdmin`, `isActive`, `avatar`, `activationCode`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'alexkruglik81@gmail.com', '$2y$10$9yGUMF/nRmi2BlAJLwODseSA8aUmWAI2yw7mtJ5sZ9W2jEYyIzLeO', 'arat', 1, 1, NULL, 'dYmfUAalJjOy3zco', 'lRVSNXOWRWSdbvJenYfKRgExvi8XKyPdoCSU0u6XUHHsEI1qk5d6q92KST6M', '2015-09-03 10:41:09', '2015-09-09 19:52:06');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
