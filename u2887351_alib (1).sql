-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Ноя 15 2024 г., 10:57
-- Версия сервера: 5.7.27-30
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `u2887351_alib`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `telegram_id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL DEFAULT '',
  `balance` bigint(20) NOT NULL DEFAULT '0',
  `income` bigint(20) NOT NULL DEFAULT '0',
  `tickets` int(11) NOT NULL DEFAULT '3',
  `referal` int(11) NOT NULL DEFAULT '0',
  `ref_str` varchar(16) NOT NULL,
  `daily_income` bigint(20) NOT NULL DEFAULT '0',
  `tmp_sum` bigint(20) NOT NULL DEFAULT '0',
  `avatar` varchar(512) NOT NULL DEFAULT 'https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png?20150327203541',
  `last_ticket` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_game` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `boosters` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `date`, `telegram_id`, `user_name`, `balance`, `income`, `tickets`, `referal`, `ref_str`, `daily_income`, `tmp_sum`, `avatar`, `last_ticket`, `last_game`, `boosters`) VALUES
(6, '2024-11-12 07:44:18', 841631124, 'ldonot', 90300, 224980, 6, 0, 'vhwb3h05s93jatld', 0, 0, 'https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png?20150327203541', '2024-11-15 06:34:21', '2024-11-15 06:39:18', '[{\"booster_code\":\"booster\",\"booster_lvl\":4},{\"booster_code\":\"treasure\",\"booster_lvl\":1},{\"booster_code\":\"autopilot\",\"booster_lvl\":1},{\"booster_code\":\"bow\",\"booster_lvl\":1}]'),
(7, '2024-11-12 07:49:48', 293349337, 'sadullaevich_f', 1001669500, 4029640, 6, 0, '4k68gtb3q5g5azdu', 0, 0, 'https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png?20150327203541', '2024-11-15 05:45:13', '2024-11-15 06:05:24', '[{\"booster_code\":\"autopilot\",\"booster_lvl\":5},{\"booster_code\":\"booster\",\"booster_lvl\":5},{\"booster_code\":\"bow\",\"booster_lvl\":5},{\"booster_code\":\"treasure\",\"booster_lvl\":5}]'),
(8, '2024-11-12 07:51:58', 1945109203, 'cfios', 19983000, 735450, 28, 0, '0gzrjl8ixqmxdmta', 0, 0, 'https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png?20150327203541', '2024-11-15 06:46:11', '2024-11-15 06:46:13', '[{\"booster_code\":\"booster\",\"booster_lvl\":4},{\"booster_code\":\"autopilot\",\"booster_lvl\":5},{\"booster_code\":\"bow\",\"booster_lvl\":5},{\"booster_code\":\"treasure\",\"booster_lvl\":5}]'),
(9, '2024-11-12 08:50:00', 1795776130, 'alikhardy', 136060, 136060, 0, 0, 'pu0tvxdr9ielyca0', 0, 0, 'https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png?20150327203541', '2024-11-12 15:44:57', '2024-11-12 15:55:52', ''),
(10, '2024-11-13 11:19:25', 6919576416, '', 42470, 42470, 0, 0, 'sz1d05un32vgknpo', 0, 0, 'https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png?20150327203541', '2024-11-13 11:19:25', '2024-11-13 11:19:35', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
