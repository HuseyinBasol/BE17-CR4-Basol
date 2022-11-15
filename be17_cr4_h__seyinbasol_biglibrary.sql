-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 15. Nov 2022 um 13:59
-- Server-Version: 10.4.25-MariaDB
-- PHP-Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `be17_cr4_hüseyinbasol_biglibrary`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `ISBN` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `type` varchar(50) NOT NULL,
  `author_first_name` varchar(50) NOT NULL,
  `author_last_name` varchar(50) NOT NULL,
  `publisher_name` varchar(50) NOT NULL,
  `publisher_address` varchar(80) NOT NULL,
  `publish_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `media`
--

INSERT INTO `media` (`id`, `ISBN`, `title`, `image`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`) VALUES
(6, 956784421, 'Kingdom Hearts', '636f8d675d23f.jpg', 'Action role-playing', 'DVD', 'Tetsuya Nomura', 'Shinji Hashimoto', 'SQUARE ENIX', 'Japan', 2002),
(7, 957733695, 'Harry Potter', '636f8e9deb1a1.jpg', 'Fantasy/Roman', 'DVD', 'Joanne Kathleen', 'Rowling', 'Bloomsbury', 'United Kingdom', 1998),
(8, 955336669, 'One Piece', '636f90cea8253.jpg', 'Shōnen', 'Manga', 'Eiichirō', 'Oda', 'Shūeisha', 'Japan', 1997),
(9, 985231694, 'All You Need is Kill vol.1', '636f92720cde0.jpg', ' Military-Science-Fiction', 'Manga', ' Hiroshi', 'Sakurazaka', ' Shūeisha', 'Japan', 2004),
(10, 999776451, 'All You Need is Kill vol.2', '636f94fc1cfa5.jpg', 'Military-Science-Fiction', 'Manga', 'Hiroshi', 'Sakurazaka', 'Shūeisha', 'Japan', 2004),
(11, 977733452, 'Miserabels', '636f94f34a9f5.jpg', 'Roman', 'Book', 'Viktor', 'Hugo', ' A. Lacroix, Verboeckhoven & Ce.', 'Paris', 1862),
(12, 919976695, 'Final Fantasy VII', '636fb23f2b502.jpg', 'Action role-playing', 'CD', 'Tetsuya Nomura', 'Shinji Hashimoto', 'Square', 'Japan', 1997),
(13, 996154331, 'Onimusha Dawn of Dreams', '636fb39bd66ce.jpg', 'Hack and Slash', 'CD', 'Yoshinori', 'Ono', 'Capcom', 'Japan', 2006),
(14, 955666331, 'Devil May Cry', '636fb4ee039a5.jpg', 'Hack and Slash', 'CD', 'Hiroshi', 'Tanaka', 'Capcom', 'Japan', 2005),
(15, 99995445, 'Sherlock Holmes', '636fb5e838564.jpg', 'Roman', 'Book', 'Arthur Conan', 'Doyle', 'George Newnes', 'United Kingdom', 1892),
(16, 940431691, 'Pokemon', 'product.png', 'Action', 'Disk', 'Satoshi', 'Tajiri', 'Game Freak', 'Japan', 1996);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
