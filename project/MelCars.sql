-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 21 2024 г., 01:02
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `MelCars`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cars`
--

CREATE TABLE `cars` (
  `id` int NOT NULL,
  `type` int NOT NULL,
  `name` varchar(256) NOT NULL,
  `mileage` int NOT NULL,
  `description` varchar(2048) DEFAULT NULL,
  `pic` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `cars`
--

INSERT INTO `cars` (`id`, `type`, `name`, `mileage`, `description`, `pic`) VALUES
(2, 1, 'Ford Focus', 114000, 'Пробег: 114 000 км, Год производства: 2018<br>\r\nРобот, 1,6, 125 л.с., Бензиновый, FWD - передний привод', '../img/cars/car1.jpg'),
(3, 1, 'Hyundai Tucson GLX', 84935, 'АКП8, 1,5 л, 200 л.с., Бензиновый, 2WD, GLX<br> \r\nЦвет: Белый перламутр', NULL),
(4, 1, 'Volvo XC40', 159262, NULL, '../img/cars/car4.jpg'),
(5, 1, 'Volkswagen Polo', 24328, 'Пробег: 24 328 км<br> \r\nГод производства: 2021<br>\r\nАКПП, 1,6, 110 л.с., Бензиновый<br> \r\nFWD - передний привод', '../img/cars/car5.jpg'),
(6, 2, 'Ford Transit', 88363, 'Пробег: 88 363 км<br>\r\nГод производства: 2021<br>\r\nМКПП, 2,2, 125 л.с., Дизельный<br> \r\nFWD - передний привод', '../img/cars/car6.jpeg'),
(7, 2, 'ГАЗ ГАЗель', 200911, 'Пробег: 200 911 км<br> \r\nГод производства: 2017<br>\r\nМКПП, 2,8, 150 л.с., Дизельный<br> \r\nRWD - задний привод', '../img/cars/car7.jpg'),
(8, 2, 'Mercedes-Benz Sprinter', 144385, 'Год выпуска: 2014<br>\r\nЦвет: Белый <br>\r\nДвигатель: 2.1 л / 109 л.с. / Дизель<br>\r\nКоробка: Механическая<br>', '../img/cars/car8.png'),
(9, 2, 'Freightliner Columbia', 2035000, 'Год выпуска: 2003<br>\r\nПробег: 2 035 000 км<br>\r\nЦвет: Белый <br>\r\nДвигатель: 12.7 л / 430 л.с. / Дизель<br>\r\nКоробка: Механическая<br>\r\nТип кабины: 2-х местная с 2 спальными<br>', '../img/cars/car9.png'),
(10, 3, 'Средний танк Т-34', 1821, 'Диаметр цилиндра: 150 мм<br>\r\nМаксимальная мощность: 500 л. с., при 1800 об/мин<br>\r\nМаксимальный крутящий момент: 1960 Н·м, при 1200 об/мин<br>\r\nПредыдущий владелец утвержает, что машина в основном стояла в гараже, по выходным ездили в Берлин', '../img/cars/car10.jpg'),
(11, 3, 'БМП 2', 346924, NULL, '../img/cars/car11.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `pricelist`
--

CREATE TABLE `pricelist` (
  `id` int NOT NULL,
  `car_id` int NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `pricelist`
--

INSERT INTO `pricelist` (`id`, `car_id`, `price`) VALUES
(2, 2, '1335000'),
(5, 3, '3050000'),
(6, 4, '2330000'),
(11, 5, '1736100'),
(12, 6, '4150000'),
(13, 7, '1799000'),
(14, 8, '1690000'),
(15, 9, '1850000'),
(17, 10, '19411945'),
(18, 11, '1692822');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(256) NOT NULL,
  `phone` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pricelist`
--
ALTER TABLE `pricelist`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `pricelist`
--
ALTER TABLE `pricelist`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
