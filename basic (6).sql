-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 13 2021 г., 13:23
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `basic`
--

-- --------------------------------------------------------

--
-- Структура таблицы `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', 3, 1610116986),
('theCreator', 1, 1608798249),
('theCreator', 2, 1610530534);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('admin', 1, 'Administrator of this application', NULL, NULL, 1608701029, 1608701029),
('employee', 1, 'Employee of this site/company who has lower rights than admin', NULL, NULL, 1608701029, 1608701029),
('manageUsers', 2, 'Allows admin+ roles to manage users', NULL, NULL, 1608701029, 1608701029),
('member', 1, 'Authenticated user, equal to \"@\"', NULL, NULL, 1608701029, 1608701029),
('premium', 1, 'Premium users. Authenticated users with extra powers', NULL, NULL, 1608701029, 1608701029),
('theCreator', 1, 'You!', NULL, NULL, 1608701029, 1608701029),
('usePremiumContent', 2, 'Allows premium+ roles to use premium content', NULL, NULL, 1608701029, 1608701029);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('admin', 'employee'),
('admin', 'manageUsers'),
('employee', 'premium'),
('premium', 'member'),
('premium', 'usePremiumContent'),
('theCreator', 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_rule`
--

INSERT INTO `auth_rule` (`name`, `data`, `created_at`, `updated_at`) VALUES
('isAuthor', 'O:25:\"app\\rbac\\rules\\AuthorRule\":3:{s:4:\"name\";s:8:\"isAuthor\";s:9:\"createdAt\";i:1608701029;s:9:\"updatedAt\";i:1608701029;}', 1608701029, 1608701029);

-- --------------------------------------------------------

--
-- Структура таблицы `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `kod` varchar(128) NOT NULL,
  `create_at` varchar(128) DEFAULT NULL,
  `update_at` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `book`
--

INSERT INTO `book` (`id`, `name`, `kod`, `create_at`, `update_at`) VALUES
(2, 'rus tili', 'ru', NULL, NULL),
(3, 'kareys tili', 'kr', NULL, NULL),
(4, 'nemis tili', 'gr', NULL, NULL),
(6, 'Ingliz tili', 'En', '2020-12-30 14:20:12', '');

-- --------------------------------------------------------

--
-- Структура таблицы `changes`
--

CREATE TABLE `changes` (
  `id` int(11) NOT NULL,
  `words1` varchar(522) DEFAULT NULL,
  `words2` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` varchar(128) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `changes`
--

INSERT INTO `changes` (`id`, `words1`, `words2`, `photo`, `created_at`, `updated_at`) VALUES
(1, '', '', '', '2021-01-10 23:18:19', '2021-01-11 16:50:54'),
(2, 'ATIGI 5 OYDA INGLIZ VA RUS TILLARINI FAQAT ESHITISH ORQALI O`RGANIB, ERKIN GAPIRING!', '', '', '2021-01-11 01:21:09', NULL),
(3, 'YANGI YIL AKSIYASI INNOVATSION AUDIO KURSNI 60% CHEGIRMA BILAN SOTIB OLING VA STEREO QULOCHINGA EGA BO’LING!', '', 'uploads/5ffbf339cf2a0.png', '2021-01-11 01:56:45', '2021-01-11 11:42:01'),
(4, 'O`zbekiston bo`ylab BEPUL yetkazib beriladi.', 'SIFATLI STEREO QULOQCHIN SIZNI KUTMOQDA!', 'uploads/5ffbf0544e363.png', '2021-01-11 08:57:57', '2021-01-11 11:29:40'),
(5, 'MELBOOK kompaniyasi chet tillarni oson va qisqa vaqtda o`rganish uchun                         innovatsion metodikani O`zbekiston bo`ylab yetkazib berish bilan shug`ullanadi.', ' Ushbu innovatsion metodika dunyoda chet tillarni o`rganish metodikalari reytingida birinchi                         o`rinda turadi.', '', '2021-01-11 09:12:16', NULL),
(6, 'Gonkongda 197 000', 'Tayvanda 245 000', '', '2021-01-11 09:14:23', NULL),
(7, 'Xitoyda 4 000 000', 'Turkiyada 2 600 000', '', '2021-01-11 09:14:49', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `create_at` varchar(128) DEFAULT NULL,
  `connect_at` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `client`
--

INSERT INTO `client` (`id`, `name`, `phone`, `user_id`, `create_at`, `connect_at`) VALUES
(2, 'Laylo', '+998902105810', NULL, '2021-01-11 15:14:46', NULL),
(3, 'Maxliyo', '+998902105810', NULL, '2021-01-11 15:32:23', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1608701011),
('m141022_115823_create_user_table', 1608701019),
('m141022_115912_create_rbac_tables', 1608701019);

-- --------------------------------------------------------

--
-- Структура таблицы `orderclient`
--

CREATE TABLE `orderclient` (
  `id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `create_at` varchar(128) DEFAULT NULL,
  `update_at` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orderclient`
--

INSERT INTO `orderclient` (`id`, `client_id`, `book_id`, `create_at`, `update_at`) VALUES
(3, 2, 3, '2021-01-11 15:14:46', NULL),
(4, 2, 6, '2021-01-11 15:14:46', NULL),
(5, 3, 3, '2021-01-11 15:32:23', NULL),
(6, 3, 4, '2021-01-11 15:32:23', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `percent`
--

CREATE TABLE `percent` (
  `id` int(11) NOT NULL,
  `percent` int(11) NOT NULL,
  `summ` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `percent`
--

INSERT INTO `percent` (`id`, `percent`, `summ`) VALUES
(1, 30, 110000);

-- --------------------------------------------------------

--
-- Структура таблицы `question_answer`
--

CREATE TABLE `question_answer` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `create_at` varchar(128) DEFAULT NULL,
  `update_at` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `question_answer`
--

INSERT INTO `question_answer` (`id`, `question`, `answer`, `create_at`, `update_at`) VALUES
(1, 'Menga necha kunda va nima yetkazib berasizlar?', 'Biz sizga 2 kun ichida kitob va sifatli audio disk yetkazib beramiz', '2021-01-10 12:46:31', NULL),
(2, 'Men 46 yoshdaman Rostan ham meni yoshimdagi odamlar sizlarni metodikangiz orqali tilni o’rgana oladimi?', 'Ha, albatta. Bizning metodikamiz orqali asli istalgan yoshdagi odamlar o`rgana oladi', '2021-01-10 19:45:14', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `account_activation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password_hash`, `status`, `auth_key`, `password_reset_token`, `account_activation_token`, `created_at`, `updated_at`) VALUES
(1, 'Sardor', 'sardor88.88@mail.ru', '$2y$13$h/rTFVLTUo6tZG2QtwCNj.BOcCGVFK0nuILLrhrltqc0KVnbHQDmW', 10, '5ILdJHWYBP89HutstAfDwEQSeSe0ZqTH', NULL, NULL, 1608701156, 1608798249),
(2, 'Nizomiddin', 'nizom@mail.ru', '$2y$13$RHEyyLs/RMpQRUQTzD/0fuT5UMMysqaqPoyFLOU6iwSqBXu8gQuyG', 10, 'k_4LUG46_shshp1HBlYF5-R3IcByue-z', NULL, NULL, 1609316013, 1610530534),
(3, 'asal', 'asal@q.uz', '$2y$13$w88wLTpYNyPe2PJTyPlGb.1XQXI7TrwJgJqsJY5lG0DmRN1lBVJiy', 10, 'j1-zH0GMfxhhhlRrBEBuHBe1K_hCxdpn', NULL, NULL, 1609533658, 1610116986);

-- --------------------------------------------------------

--
-- Структура таблицы `youtube`
--

CREATE TABLE `youtube` (
  `id` int(11) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `create_at` varchar(128) DEFAULT NULL,
  `update_at` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `youtube`
--

INSERT INTO `youtube` (`id`, `name`, `link`, `create_at`, `update_at`) VALUES
(1, 'Avz Oxun', 'Zz0S2-L8SnQ', '2021-01-03 22:07:46', '2021-01-11 09:33:23'),
(2, 'Xojivoy', '2ZGGp0fA3CQ', '2021-01-03 22:11:11', '2021-01-11 09:33:58'),
(3, 'dizayn', '5G8HkJpZUKg', '2021-01-08 19:46:15', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Индексы таблицы `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Индексы таблицы `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Индексы таблицы `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Индексы таблицы `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `changes`
--
ALTER TABLE `changes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `orderclient`
--
ALTER TABLE `orderclient`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `percent`
--
ALTER TABLE `percent`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `question_answer`
--
ALTER TABLE `question_answer`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`),
  ADD UNIQUE KEY `account_activation_token` (`account_activation_token`);

--
-- Индексы таблицы `youtube`
--
ALTER TABLE `youtube`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `changes`
--
ALTER TABLE `changes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `orderclient`
--
ALTER TABLE `orderclient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `percent`
--
ALTER TABLE `percent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `question_answer`
--
ALTER TABLE `question_answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `youtube`
--
ALTER TABLE `youtube`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
