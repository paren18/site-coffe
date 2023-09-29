-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 30 2023 г., 01:41
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `laravel_bd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cakes`
--

CREATE TABLE `cakes` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opisanie` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `cakes`
--

INSERT INTO `cakes` (`id`, `name`, `photo_link`, `opisanie`, `price`) VALUES
(1, 'Кремовый десерт с шоколадной глазурью', 'images/Десерты/Кремовый десерт с шоколадной глазурью.jpg', 'Удивительный по своей простоте десерт из молока, сахара, муки и небольшого количества шоколада. Ничего не нужно выпекать в духовке или замораживать, и не нужно добавлять желатин. Но получается оригинальный, нежный, вкусный и экономный шоколадный десерт!', 590),
(2, 'Шоколадные маффины', 'images/Десерты/Шоколадные маффины.jpg', 'Маффины с ярким насыщенным вкусом шоколада - это изысканная и в то же время простая в приготовлении десертная выпечка, которую можно испечь на каждой кухне. Если подать маффины сразу после выпекания, то серединка будет жидкой. В рецепте очень мало муки и масла, поэтому таким невероятно вкусным и аппетитным лакомством можно баловать себя почаще.', 570),
(3, 'Макарон', 'images/Десерты/макарон.jpg', 'Это французское пирожное, состоящее из двух круглых половинок, на основе миндального безе с кремовой начинкой.', 500),
(4, 'Канеле', 'images/Десерты/Канеле.jpg', 'Небольшое кулинарное изделие, фирменный десерт Аквитании и французской кухни в целом. Канеле имеет мягкое и нежное тесто, ароматизировано ромом и ванилью, а снаружи покрыто твёрдой карамелизированной корочкой. Название происходит от гасконского слова canelat, которое означает каннелюру.', 550),
(5, 'Круассан', 'images/Десерты/Круассан.jpg', 'Небольшое мучное кондитерское изделие, булочка в форме полумесяца из слоёного теста.', 350),
(6, 'Ганаш', 'images/Десерты/Ганаш.jpg', 'Крем из шоколада и свежих сливок, используемый в качестве начинки для конфет и пирожных, а также для украшения десертов. Может быть ароматизирован пряностями, фруктами, кофе, алкоголем', 420),
(7, 'Эклер', 'images/Десерты/Эклер.jpg', 'Пирожное в виде трубочки из заварного теста, покрытой помадкой, с начинкой из сливочно-масляного или заварного крема', 400);

-- --------------------------------------------------------

--
-- Структура таблицы `cofes`
--

CREATE TABLE `cofes` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opisanie` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `cofes`
--

INSERT INTO `cofes` (`id`, `name`, `photo_link`, `opisanie`, `price`) VALUES
(1, 'Доппио', 'images/Кофе/доппио.png', 'Двойной эспрессо. Порция 60 мл. Пить нужно горячим, после еды. ', 400),
(2, 'Ристретто', 'images/Кофе/ристретто.jpg', 'Эспрессо в меньшем объеме, 15-20 мл. Подают с бокалом воды, который выпивается после чашки кофе.', 410),
(3, 'Американо', 'images/Кофе/американо.jpg', 'Эспрессо с водой. Горячая вода добавляется в эспрессо. Стандартный объем — 60 мл. Американо можно пить до и после обеда, добавлять молоко, сливки или сахар. ', 415),
(4, 'Лунго', 'images/Кофе/лунго.jpeg', 'Похож на американо, но вода добавляется вместе с кофейной массой. Вкус более горький. Готовится только в кофемашине. Объем — 50-60 мл. ', 415),
(5, 'Кофе по-венски', 'images/Кофе/кофе по-венски.jpg', 'Десерт со взбитыми сливками. Горячий эспрессо сверху щедро поливают взбитыми сливками и украшают тертым шоколадом, карамелью или орехами. ', 500),
(6, 'Романо', 'images/Кофе/Романо.jpg', 'Традиционный эспрессо, но подается с долькой лимона. Пить рекомендуется после еды, без сахара и десерта. ', 480),
(7, 'Коретто', 'images/Кофе/Коретто.jpg', 'Эспрессо с алкоголем. Обычно к свежесваренному эспрессо добавляют ложку виски или коньяка, иногда граппы. Можно пить с медом или сахаром. ', 550),
(8, 'Айриш', 'images/Кофе/Айриш.jpeg', 'Кофейный коктейль на основе эспрессо, виски и взбитых сливок. Подается в специальных айриш-бокалах, с трубочкой. ', 560),
(9, 'Глясе', 'images/Кофе/глясе.jpg    ', 'В классический эспрессо кладут шарик мороженого. Сверху иногда посыпают шоколадом или корицей.', 530),
(10, 'Капучино', 'images/Кофе/капучино.jpg', 'Кофе со взбитым молоком. Сначала готовится кофе, затем вспенивают молоко и добавляют к кофе, а сверху выкладывают пышную молочную пенку. Объем — 150 мл. Некоторые любят добавлять в капучино корицу, различные сиропы и карамель. ', 400),
(11, 'Латте', 'images/Кофе/Латте.jpg', 'Более молочный, чем капучино. В эспрессо добавляется 2 порции вспененного молока, затем выкладывается пенка. Для приготовления используют арабику (сорт Мокко). Объем — 250 мл. ', 450),
(12, 'Раф', 'images/Кофе/раф.jpg', 'Кофейный коктейль на основе эспрессо, сливок и сахара или меда. Все ингредиенты тщательно взбиваются с помощью капучинатора или блендера. Имеет густую пышную пенку на поверхности. ', 460);

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2023_09_12_205154_create_contacts_table', 1),
(5, '2023_09_13_235945_create_coves_table', 2),
(6, '2023_09_13_235945_create_cofe_table', 3),
(7, '2023_09_14_002922_create_coves_table', 4),
(9, '2023_09_14_102604_create_cofes_table', 5),
(10, '2023_09_14_183305_create_cakes_table', 6),
(11, '2023_07_14_150038_create_contacts_table', 7),
(12, '2023_09_21_173626_create_orders_table', 8);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `username`, `name`, `address`, `total_price`) VALUES
(70, '12@mail.ru', 'Лунго (Цена: 415, Количество: 1), Американо (Цена: 415, Количество: 1)', 'ул.Ивана 4', 830),
(71, '12@mail.ru', 'Лунго (Цена: 415, Количество: 1), Американо (Цена: 415, Количество: 1)', 'ул.Ивана 4', 830),
(72, '12@mail.ru', 'Американо (Цена: 415, Количество: 1), Ристретто (Цена: 410, Количество: 1)', 'ул.Ивана 4', 825);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(32, 'adin', '123@mail.ru', NULL, '$2y$10$wU/Xh/Ejz.E9LXPSOeEAIOua8xpgnwZU5kGrczfWAGJAwxT2MH0I2', NULL, '2023-09-29 19:35:34', '2023-09-29 19:35:34');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cakes`
--
ALTER TABLE `cakes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cofes`
--
ALTER TABLE `cofes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cakes`
--
ALTER TABLE `cakes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `cofes`
--
ALTER TABLE `cofes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
