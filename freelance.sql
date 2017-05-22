-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 21 2017 г., 18:36
-- Версия сервера: 5.7.16
-- Версия PHP: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `freelance`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

CREATE TABLE `about` (
  `about_id` int(255) NOT NULL,
  `col1` longtext COLLATE utf8_unicode_ci NOT NULL,
  `col2` longtext COLLATE utf8_unicode_ci NOT NULL,
  `col3` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `about`
--

INSERT INTO `about` (`about_id`, `col1`, `col2`, `col3`) VALUES
(1, 'Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.', 'Whether you\'re a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!', 'THIS IS WHAT I DO'),
(3, 'Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.', 'Whether you\'re a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!', '');

-- --------------------------------------------------------

--
-- Структура таблицы `personal`
--

CREATE TABLE `personal` (
  `personal_id` int(255) NOT NULL,
  `email` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `aboutme` longtext COLLATE utf8_unicode_ci NOT NULL,
  `location` longtext COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `experience` longtext COLLATE utf8_unicode_ci NOT NULL,
  `col1` text COLLATE utf8_unicode_ci NOT NULL,
  `col2` text COLLATE utf8_unicode_ci NOT NULL,
  `prog` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `personal`
--

INSERT INTO `personal` (`personal_id`, `email`, `aboutme`, `location`, `name`, `photo`, `experience`, `col1`, `col2`, `prog`) VALUES
(50, 'mox_egy@yahoo.com', 'Designer and Developer at&nbsp;John Doe&nbsp;Design Studio', '3481 Melrose Place&nbsp;<br>Beverly Hills, CA 90210', '', '', '', '', '', '40');

-- --------------------------------------------------------

--
-- Структура таблицы `portfolio`
--

CREATE TABLE `portfolio` (
  `portfolio_id` int(255) NOT NULL,
  `portfolio_title` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `portfoilo_image` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `portfolio_desc` longtext COLLATE utf8_unicode_ci NOT NULL,
  `client_name` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `service_id` int(255) NOT NULL,
  `prog` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `portfolio`
--

INSERT INTO `portfolio` (`portfolio_id`, `portfolio_title`, `portfoilo_image`, `portfolio_desc`, `client_name`, `date`, `service_id`, `prog`) VALUES
(7, 'PHP Scripts Bundle', '1x.png', 'Why you pay for every script ? you can purchase our php scripts package and download 9 useful php scripts in 1 bundle.<span>we work very hard to add more scripts to our package and update it, of course when you purchase our bundle you will be able to download the updated versions with the new scripts.<br><br></span><h2><a target=\"_blank\" rel=\"nofollow\" href=\"http://codecanyon.net/item/mc-php-scripts-bundle-10-in-1/7678632?ref=MicroCode\">Download</a></h2>', 'Envato', '2014-06-26', 5, 100),
(8, 'Hosting Coupons Script', '2x.png', '<span>Creating a hosting coupons site is one of the most efficient methods of earning affiliate commissions. The users are searching for coupons right at the moment of purchasing a product or service. Start your own hosting coupons site with MC Hosting Coupons Script.<br><br></span><h2><a target=\"_blank\" rel=\"nofollow\" href=\"http://codecanyon.net/item/mc-hosting-coupons-script/7646234?ref=MicroCode\">Download</a></h2><br>', 'Envato', '2014-06-26', 5, 0),
(9, 'Domain For Sale', '3x.png', '<span>Fast and easy way to sell your domain or website, MC Domain For Sale helps you receive offers for your domains and websites directly from visitors instead of using domain a marketplace.<br><br></span><h2><a target=\"_blank\" rel=\"nofollow\" href=\"http://codecanyon.net/item/mc-domain-for-sale/7364085?ref=MicroCode\">Download</a></h2><span><br><br><br></span>', 'Envato', '2014-06-26', 5, 0),
(10, 'Documentation Creator', '4x.png', '<span>MC Documentation Creator is a PHP script that makes it easy to create intelligent and beautiful documentations.<br><br></span><h2><a target=\"_blank\" rel=\"nofollow\" href=\"http://codecanyon.net/item/mc-documentation-creator/7153173?ref=MicroCode\">Download</a></h2><br>', 'Envato', '2014-07-04', 5, 0),
(11, 'Inventory Manager', '5x.png', '<span>Manage and maintain inventory of your company, items, sales, orders, customers and suppliers.<br><br></span><h2><a target=\"_blank\" rel=\"nofollow\" href=\"http://codecanyon.net/item/mc-inventory-manager/6440660?ref=MicroCode\">Download</a></h2><br>', 'Envato', '2014-06-26', 5, 0),
(12, 'Freelancer CV / Resume', '6x.png', '<span>Freelancer CV / Resume help you to create perfect resume in minutes. Simply login your admin panel and fill in your details. step by step tools to enter your education, qualifications, and past employment history.<br><br></span><h2><a target=\"_blank\" rel=\"nofollow\" href=\"http://codecanyon.net/item/freelancer-cv-resume/6324826?ref=MicroCode\">Download</a></h2>', 'Envato', '2014-06-26', 5, 0),
(13, 'Lol', 'underwater-wide.jpg', 'LOLOLOLOLOL<br>', 'Lolz0r', '2014-07-09', 6, 0),
(14, 'test', '', '', 'test', '2014-07-10', 5, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `service`
--

CREATE TABLE `service` (
  `service_id` int(255) NOT NULL,
  `service_name` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `service`
--

INSERT INTO `service` (`service_id`, `service_name`) VALUES
(5, 'Web Development'),
(6, 'Graphic Design'),
(7, 'Web Design');

-- --------------------------------------------------------

--
-- Структура таблицы `social_links`
--

CREATE TABLE `social_links` (
  `social_links_id` int(255) NOT NULL,
  `facebook` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `google-plus` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `dribbble` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `social_links`
--

INSERT INTO `social_links` (`social_links_id`, `facebook`, `google-plus`, `twitter`, `linkedin`, `dribbble`) VALUES
(1, 'https://www.facebook.com/', 'https://plus.google.com/', 'https://twitter.com/', 'https://www.linkedin.com/', 'https://www.dribble.com');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_pass`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Индексы таблицы `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`personal_id`);

--
-- Индексы таблицы `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`portfolio_id`);

--
-- Индексы таблицы `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Индексы таблицы `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`social_links_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `personal`
--
ALTER TABLE `personal`
  MODIFY `personal_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT для таблицы `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `portfolio_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT для таблицы `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `social_links`
--
ALTER TABLE `social_links`
  MODIFY `social_links_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
