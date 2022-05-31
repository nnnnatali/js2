-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 31 2022 г., 16:46
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `biblio`
--

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE `books` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `auther` varchar(255) NOT NULL,
  `content` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`id`, `title`, `auther`, `content`) VALUES
(1, 'Рыба текст', 'Рыба', 'Представляет из себя список всех добавленных книг.(Список сортируется по статусу прочитанности и времени добавления). При нажатие на книгу, содержимое книги открывается справа в области просмотра книги. Напротив каждого названия книги расположены кнопки управления (читать книгу, удалить книгу, изменить статус на прочитанная, редактировать книгу)\r\n	При удаление книги - книга пропадает из списка\r\n	Когда статус книги становится прочитанным, фон блока меняет цвет на другой.\r\n	При редактирование открывается форма для изменения данных, после чего появляется возможность эти изменения сохранить.\r\n	Читать книгу - При нажатие книга открывается в правой области. \r\n'),
(2, 'Да', 'Нет', 'Для правильного отображения эта веб-страница требует данные, которые вы ввели ранее. Вы можете отправить данные повторно, но поступая так, вы повторяете любые действия, уже произведенные на странице. Нажмите \"Перезагрузить\", чтобы отправить данные повторно и отобразить страницу. '),
(3, 'Крутое название', 'Крутой автор', 'Крутая книга ');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
