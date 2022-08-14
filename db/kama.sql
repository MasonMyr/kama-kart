-- phpMyAdmin SQL Dump
-- version 5.2.0-1.el8.remi
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Авг 14 2022 г., 08:21
-- Версия сервера: 8.0.26
-- Версия PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `h163281_kama`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart_price`
--

CREATE TABLE `cart_price` (
  `id` int NOT NULL,
  `cart` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `cart_price`
--

INSERT INTO `cart_price` (`id`, `cart`, `price`) VALUES
(1, 'price_kart_65_5', 500),
(2, 'price_kart_65_10', 500),
(3, 'price_kart_9_5', 600),
(4, 'price_kart_9_10', 700),
(5, 'price_kart_double_do14_5', 600),
(6, 'price_kart_double_do14_10', 700),
(7, 'price_kart_double_posle14_5', 1000),
(8, 'price_kart_double_posle14_10', 1100);

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `value`) VALUES
(1, 'telheader', '79223892211'),
(2, 'addr', 'Вокзальная улица 10Б, Чайковский'),
(3, 'telschool', '79223892211');

-- --------------------------------------------------------

--
-- Структура таблицы `links`
--

CREATE TABLE `links` (
  `ID` int NOT NULL,
  `Name` varchar(999) NOT NULL,
  `Link` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `links`
--

INSERT INTO `links` (`ID`, `Name`, `Link`) VALUES
(1, 'VK', 'https://vk.com/kama_kart'),
(2, 'Insta', 'https://www.instagram.com/kama_kart/');

-- --------------------------------------------------------

--
-- Структура таблицы `modal`
--

CREATE TABLE `modal` (
  `ID` int NOT NULL,
  `Name` varchar(999) NOT NULL,
  `Title` varchar(999) NOT NULL,
  `Subtitle` varchar(999) NOT NULL,
  `ButtonText` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `modal`
--

INSERT INTO `modal` (`ID`, `Name`, `Title`, `Subtitle`, `ButtonText`) VALUES
(1, 'MainPage', 'Отправка заявки', 'Оставьте заявку на бронирование проката и мы свяжемся с Вами в ближайшее время!', 'Отправить'),
(2, 'TraceModal', 'Отправка заявки', 'Оставьте заявку на аренду трассы и мы свяжемся с Вами в ближайшее время!', 'Отправить'),
(3, 'CertifModal', 'Отправить заявку', 'Оставьте заявку на оформление сертификата и мы свяжемся с Вами в ближайшее время!', 'Отправить');

-- --------------------------------------------------------

--
-- Структура таблицы `profile`
--

CREATE TABLE `profile` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `profile`
--

INSERT INTO `profile` (`id`, `name`, `password`) VALUES
(1, 'admin', '101193d7181cc88340ae5b2b17bba8a1');

-- --------------------------------------------------------

--
-- Структура таблицы `raspisanie`
--

CREATE TABLE `raspisanie` (
  `ID` int NOT NULL,
  `Name` varchar(999) NOT NULL,
  `Text` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `raspisanie`
--

INSERT INTO `raspisanie` (`ID`, `Name`, `Text`) VALUES
(1, 'Theory', '40-60 минут'),
(2, 'Practice', '40-60 минут (три заезда по 10 минут)'),
(3, 'Working mode 1', '17:00 - 20:00'),
(4, 'Working mode 2', '12:00 - 20:00');

-- --------------------------------------------------------

--
-- Структура таблицы `services_price`
--

CREATE TABLE `services_price` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `services_price`
--

INSERT INTO `services_price` (`id`, `name`, `price`) VALUES
(1, 'trace', 5000),
(2, 'school', 2500);

-- --------------------------------------------------------

--
-- Структура таблицы `text`
--

CREATE TABLE `text` (
  `ID` int NOT NULL,
  `Name` varchar(9999) NOT NULL,
  `Text` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `text`
--

INSERT INTO `text` (`ID`, `Name`, `Text`) VALUES
(1, 'Main block p\r\n', 'Современные, безопасные и быстрые карты. Получите удовольствие посетив нашу трассу и прокатившись на картах в Чайковском.'),
(2, 'MainBlockNotif', 'Прокат работает! Обязательна предварительная запись!'),
(3, 'SchoolInfoText', 'Принимаем всех желающих в возрасте от 6 до 15 лет. Курс платный, включает в себя теоретические и практические занятия на нашей трассе.\r\n\r\nЕсли у Вашего ребенка явный интерес к техническим видам спорта и автомобилям, а Вы мечтаете, чтобы у него был сильный характер, он умел побеждать и достойно проигрывать, разбирался в технике и качественно проводил свободное время, тогда Вам точно к нам!\r\n\r\nКурс включает в себя теоретические и практические занятия с сентября по май. Занятия проводятся 2 раза в неделю.'),
(4, 'SchoolPlusText', 'Гонки на картах — это настоящее искусство, которое не только тренирует мышцы, но и заставляет работать голову при просчете тактики движения.'),
(5, 'CertificateText', 'Сертификаты имеют конкретную стоимость, соответствующую стоимости одного или нескольких заездов. Цены на заезды размещены на странице с ценами. Сертификат дает право на бесплатный заезд или несколько заездов.'),
(6, 'CertificateLinkText', 'данной страницы'),
(7, 'TraceText', 'Трасса на фотографиях длиной около 200 м. На трассе можно проехать по длинным прямым участкам, а также по участкам со скоростными поворотами, медленными шпильками и S-ками'),
(8, 'ContactNumberText', 'Номер телефона для справки'),
(9, 'stock', '\"День СТАРЫХ ЦЕН\" - каждый понедельник 10 минут за 250 рублей (300 рублей на двухместном карте), 5 минут за 150 рублей (200 рублей на двухместном карте).    \r\n\"Покатушки для ДРУЗЕЙ\" - каждую среду приведи друга и получи скидку 50 рублей на заезд 5 или 10 минут!\r\n');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart_price`
--
ALTER TABLE `cart_price`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `modal`
--
ALTER TABLE `modal`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `raspisanie`
--
ALTER TABLE `raspisanie`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `services_price`
--
ALTER TABLE `services_price`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `text`
--
ALTER TABLE `text`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart_price`
--
ALTER TABLE `cart_price`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `links`
--
ALTER TABLE `links`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `modal`
--
ALTER TABLE `modal`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `services_price`
--
ALTER TABLE `services_price`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `text`
--
ALTER TABLE `text`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
