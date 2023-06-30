-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 29 2023 г., 09:01
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `museum`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `name`) VALUES
(1, 'Админ'),
(2, 'Пользователь\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE `authors` (
  `ID_Authors` int(11) NOT NULL,
  `Surname` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Patronymic` varchar(200) DEFAULT NULL,
  `ID_Type_of_authors` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`ID_Authors`, `Surname`, `Name`, `Patronymic`, `ID_Type_of_authors`) VALUES
(1, 'Мюллер', 'Август', 'Фридрих', 1),
(2, 'Булгаков', 'Михаил', 'Афанасьевич', 2),
(3, 'Островский', 'Александр', 'Николаевич', 2),
(4, 'Свешников', 'Виктор', 'Михайлович', 1),
(5, 'Апсит', 'Александр', 'Петрович', 1),
(6, 'Эгидиус', 'Саделер', NULL, 5),
(7, 'Кацусихи', 'Хокусай', '', 5),
(8, 'Соколов', 'Петр', 'Федорович', 5),
(9, 'Левицкий', 'Сергей', 'Александрович', 3),
(10, 'Рамазанов', 'Николай', 'Александрович', 4),
(11, 'Денисовский', 'Николай', 'Федорович', 5),
(12, 'Мириманов', 'Гаврила', 'Фомич', 5),
(13, 'Достоевский', 'Федор', 'Михайлович', 2),
(28, 's', 'd', 'd', 3),
(29, 'e', 's', 's', 1),
(30, 'f', 's', 'c', 2),
(31, 'л', 'р', 'и', 1),
(32, 'ь', 'ь', 'ьzzz', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `collections`
--

CREATE TABLE `collections` (
  `ID_Collections` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `collections`
--

INSERT INTO `collections` (`ID_Collections`, `Name`) VALUES
(1, 'Коллекция Живописи'),
(2, 'Коллекция книг'),
(3, 'Коллекция рукописей'),
(4, 'Коллекция лубков'),
(5, 'Коллекция плакатов'),
(6, 'Коллекция печатной графики'),
(7, 'Коллекция оригинальной графики'),
(8, 'Коллекция фотографий'),
(9, 'Коллекция предметов скульптуры'),
(10, 'Коллекция Окон ТАСС\r\n'),
(11, 'Коллекция предметов литераторов'),
(12, 'Собрание Ф. М. Достоевского'),
(16, 'sssssuka'),
(17, 'jbkjbh'),
(18, '');

-- --------------------------------------------------------

--
-- Структура таблицы `exhibits`
--

CREATE TABLE `exhibits` (
  `ID_Exhibits` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Descriptions` varchar(500) NOT NULL,
  `ID_Authors` int(11) NOT NULL,
  `ID_Collections` int(11) NOT NULL,
  `ID_Expositions` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `exhibits`
--

INSERT INTO `exhibits` (`ID_Exhibits`, `Name`, `Descriptions`, `ID_Authors`, `ID_Collections`, `ID_Expositions`) VALUES
(1, 'Портрет Н. В. Гоголя', 'Портрет Н. В. Гоголя', 1, 1, 1),
(2, 'Дьяволиада', 'Книга \"Дьяволиада\"', 2, 2, 2),
(3, 'Рукописи А. Н. Островского', 'Рукописи А. Н. Островского', 3, 3, 3),
(4, 'Сильный богатырь Алеша Попович', 'Сильный богатырь Алеша Попович', 4, 4, 4),
(5, 'Камуниры', 'Плакат \"Камуниры\"', 5, 5, 4),
(6, 'Большая волна в Каганаве', 'Большая волна в Каганаве', 7, 6, 4),
(7, 'Елизавета Христофоровна Пещурова, 1810-е', 'Елизавета Христофоровна Пещурова, 1810-е', 8, 7, 5),
(8, 'Графический портрет Н. В. Гоголя', 'Графический портрет Н. В. Гоголя', 9, 8, 1),
(9, 'Посмертный слепок Н. В. Гоголя', 'Посмертный слепок Н. В. Гоголя', 10, 9, 1),
(10, 'Слава защитникам Москвы!', 'Слава защитникам Москвы!', 11, 10, 4),
(11, 'Издание \"Мика, Мака и Микуха. Приключения трех обезьян\"', 'Издание \"Мика, Мака и Микуха. Приключения трех обезьян\"', 12, 11, 6),
(12, 'Книга \"Преступление и наказание\"', 'Книга \"Преступление и наказание\"', 13, 12, 3),
(16, 'Сказки', 'Сказки', 2, 2, 6);

-- --------------------------------------------------------

--
-- Структура таблицы `expositions`
--

CREATE TABLE `expositions` (
  `ID_Expositions` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Start_date` date NOT NULL,
  `End_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `expositions`
--

INSERT INTO `expositions` (`ID_Expositions`, `Name`, `Start_date`, `End_date`) VALUES
(1, 'Выставка \"Именины Гоголя\"', '2023-05-17', '2023-06-23'),
(2, 'Экспозиция \"Дневник Мастера и Маргариты. Михаил и Елена Булгаковы\"', '2023-07-06', '2023-07-31'),
(3, 'Выставка \"Театр Островского. Контексты\"', '2023-05-01', '2023-06-29'),
(4, 'Экспозиция «Андрей Платонов: в поисках будущего»', '2023-04-01', '2023-06-22'),
(5, 'Выставка “Охотник милосердный и ретивый”', '2023-06-01', '2023-07-19'),
(6, 'Выставка «Звери и люди: „детская“ история издателя Г.Ф. Мириманова»', '2023-06-03', '2023-06-14');

-- --------------------------------------------------------

--
-- Структура таблицы `sale`
--

CREATE TABLE `sale` (
  `ID_Sale` int(11) NOT NULL,
  `ID_Visitors` int(11) NOT NULL,
  `ID_Expositions` int(11) NOT NULL,
  `ID_Type_of_ticket` int(11) NOT NULL,
  `Date_of_sale` date NOT NULL,
  `Sum` float NOT NULL,
  `Count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `sale`
--

INSERT INTO `sale` (`ID_Sale`, `ID_Visitors`, `ID_Expositions`, `ID_Type_of_ticket`, `Date_of_sale`, `Sum`, `Count`) VALUES
(1, 50, 5, 4, '2023-06-09', 400, 2),
(2, 51, 6, 2, '2023-06-01', 100, 1),
(3, 52, 2, 3, '2023-06-16', 150, 1),
(4, 53, 4, 1, '2023-06-11', 200, 1),
(5, 54, 2, 3, '2023-04-05', 600, 3),
(6, 55, 1, 1, '2023-06-09', 200, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `type_of_authors`
--

CREATE TABLE `type_of_authors` (
  `ID_type_of_authors` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `type_of_authors`
--

INSERT INTO `type_of_authors` (`ID_type_of_authors`, `Name`) VALUES
(1, 'Художник'),
(2, 'Писатель'),
(3, 'Фотограф'),
(4, 'Скульптор'),
(5, 'График\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `type_of_tickets`
--

CREATE TABLE `type_of_tickets` (
  `ID_Type_of_tickets` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `type_of_tickets`
--

INSERT INTO `type_of_tickets` (`ID_Type_of_tickets`, `Name`) VALUES
(1, 'Взрослый'),
(2, 'Детский'),
(3, 'Студенческий'),
(4, 'Пенсионный');

-- --------------------------------------------------------

--
-- Структура таблицы `visitors`
--

CREATE TABLE `visitors` (
  `ID_Visitors` int(11) NOT NULL,
  `Surname` varchar(200) DEFAULT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `Patrinymic` varchar(200) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Email` varchar(200) NOT NULL,
  `Phone_number` text DEFAULT NULL,
  `Password` varchar(200) NOT NULL,
  `ID_admin` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `visitors`
--

INSERT INTO `visitors` (`ID_Visitors`, `Surname`, `Name`, `Patrinymic`, `DOB`, `Email`, `Phone_number`, `Password`, `ID_admin`) VALUES
(49, 'Киприянова', 'Лана', 'Арсеньевна', '2000-05-16', 'lana5331@outlook.com', '89770145265', '5f94c9bc3', 2),
(50, 'Кунаев', 'Ефим', 'Иванович', '1999-10-16', 'efim4244@hotmail.com', '89554515485', 'd696f9778', 2),
(51, 'Гроссмана', 'Евгения', 'Артемовна', '1980-06-21', 'evgeniya97@rambler.ru', '89652589451', 'a33bc8c97', 2),
(52, 'Терешин', 'Константин', 'Никонорович', '1993-11-11', 'konstantin1965@yandex.ru', '89302156451', 'ca0fbfc73', 2),
(53, 'Дубровин', 'Илья', 'Севостьянович', '1991-05-10', 'ilya05101991@ya.ru', '89201259525', '196312fec', 2),
(54, 'Мерзлова', 'Маргарита', 'Игнатьевна', '2008-03-14', 'margarita6059@yandex.ru', '89485149562', '0fb1d02c7', 2),
(55, 'Ефремович', 'Лариса', 'Леонтьевна', '2000-04-19', 'raisa27@yandex.ru', '89692565854', '12951767e', 2),
(56, 'Стаина', 'Вера', 'Наумовна', '2000-07-19', 'vera12061974@mail.ru', '89024514515', '0a713a11b', 2),
(57, 'Горохова', 'Любовь', 'Тимофеевна', '2005-12-12', 'lyubov60@outlook.com', '89154515959', '1111cd065', 2),
(58, 'Якушкина', 'Галина', 'Лукьяновна', '1986-04-15', 'galina5701@rambler.ru', '89562654115', '8662254e5', 2),
(59, 'test', 'test', 'test', '2023-06-13', 'test', 'test', 'test', 2),
(60, NULL, NULL, NULL, NULL, 'lalalla', NULL, '14141414', 2),
(61, NULL, NULL, NULL, NULL, 'qqqqq', NULL, '$2y$10$LXpRPVpcaK2WCwSE9a/EZu43Ma/6.ggXWg34GS7rvqRxgPys3DR4m', 2),
(62, NULL, NULL, NULL, NULL, 'privet', NULL, '$2y$10$9ExNBLuVU7u2cn55o3kKU.U4kms4gw83L0olPmtj6E9Z3.jft6teC', 2),
(63, NULL, NULL, NULL, NULL, 'poka', NULL, '$2y$10$BeJMk0vG6YUbiOD8OWdL8.y/TgeIZT9tea39iJeHPgqrsp8MRDfBe', 2),
(65, 'д', 'ч', 'ы', '2023-06-01', 'qwerty', '89451548555', '111', 2),
(66, '', 'Марина', 'Евгеньевна', '1992-02-02', 'aaa', '89662122424', '$2y$10$bcgiUmJwagOPxfOIz0gYM.7TgUZXGaYJkgsy3cp5KuxyWA4M664C.', 2),
(67, 'Кристина', 'Фадеева', 'Геннадьевна', '1993-02-04', '1111', '89343443434', '$2y$10$SB0iDrzNp/cEH5RjBnzz2u18Ozm.QU0oJ1SAKPut28dJw3nKeIjKq', 2),
(68, 'qwer', NULL, NULL, NULL, 'qwer', NULL, '123', 1),
(69, NULL, NULL, NULL, NULL, 'fff', NULL, '$2y$10$7IsT8gbGXaYoqZ7BmiXnAeCYuODc/pN8CaoW1JsVx1tRsqGDlrjDi', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`ID_Authors`),
  ADD KEY `ID_Type_of_authors` (`ID_Type_of_authors`);

--
-- Индексы таблицы `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`ID_Collections`);

--
-- Индексы таблицы `exhibits`
--
ALTER TABLE `exhibits`
  ADD PRIMARY KEY (`ID_Exhibits`),
  ADD KEY `ID_Authors` (`ID_Authors`),
  ADD KEY `ID_Collections` (`ID_Collections`),
  ADD KEY `ID_Expositions` (`ID_Expositions`);

--
-- Индексы таблицы `expositions`
--
ALTER TABLE `expositions`
  ADD PRIMARY KEY (`ID_Expositions`);

--
-- Индексы таблицы `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`ID_Sale`),
  ADD KEY `ID_Expositions` (`ID_Expositions`),
  ADD KEY `ID_Type_of_ticket` (`ID_Type_of_ticket`),
  ADD KEY `ID_Visitors` (`ID_Visitors`);

--
-- Индексы таблицы `type_of_authors`
--
ALTER TABLE `type_of_authors`
  ADD PRIMARY KEY (`ID_type_of_authors`);

--
-- Индексы таблицы `type_of_tickets`
--
ALTER TABLE `type_of_tickets`
  ADD PRIMARY KEY (`ID_Type_of_tickets`);

--
-- Индексы таблицы `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`ID_Visitors`),
  ADD KEY `ID_admin` (`ID_admin`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `authors`
--
ALTER TABLE `authors`
  MODIFY `ID_Authors` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT для таблицы `collections`
--
ALTER TABLE `collections`
  MODIFY `ID_Collections` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `exhibits`
--
ALTER TABLE `exhibits`
  MODIFY `ID_Exhibits` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `expositions`
--
ALTER TABLE `expositions`
  MODIFY `ID_Expositions` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `sale`
--
ALTER TABLE `sale`
  MODIFY `ID_Sale` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `type_of_authors`
--
ALTER TABLE `type_of_authors`
  MODIFY `ID_type_of_authors` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `type_of_tickets`
--
ALTER TABLE `type_of_tickets`
  MODIFY `ID_Type_of_tickets` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `visitors`
--
ALTER TABLE `visitors`
  MODIFY `ID_Visitors` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `authors`
--
ALTER TABLE `authors`
  ADD CONSTRAINT `authors_ibfk_1` FOREIGN KEY (`ID_Type_of_authors`) REFERENCES `type_of_authors` (`ID_type_of_authors`);

--
-- Ограничения внешнего ключа таблицы `exhibits`
--
ALTER TABLE `exhibits`
  ADD CONSTRAINT `exhibits_ibfk_1` FOREIGN KEY (`ID_Authors`) REFERENCES `authors` (`ID_Authors`),
  ADD CONSTRAINT `exhibits_ibfk_2` FOREIGN KEY (`ID_Collections`) REFERENCES `collections` (`ID_Collections`),
  ADD CONSTRAINT `exhibits_ibfk_3` FOREIGN KEY (`ID_Expositions`) REFERENCES `expositions` (`ID_Expositions`);

--
-- Ограничения внешнего ключа таблицы `visitors`
--
ALTER TABLE `visitors`
  ADD CONSTRAINT `visitors_ibfk_1` FOREIGN KEY (`ID_admin`) REFERENCES `admin` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
