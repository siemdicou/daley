-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Gegenereerd op: 09 nov 2016 om 15:12
-- Serverversie: 10.1.13-MariaDB
-- PHP-versie: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms2`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `members`
--

CREATE TABLE `members` (
  `memberID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `members`
--

INSERT INTO `members` (`memberID`, `username`, `password`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `context` mediumtext NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `news_eng`
--

CREATE TABLE `news_eng` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `context` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Gegevens worden geëxporteerd voor tabel `news_eng`
--

INSERT INTO `news_eng` (`id`, `title`, `context`, `date`) VALUES
(1, 'assad', 'sasdsadsa', ''),
(2, 'sadsads', 'sadsadsdasad', '09-11-2016');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `pages`
--

CREATE TABLE `pages` (
  `pageID` int(11) NOT NULL,
  `pageTitle` varchar(255) DEFAULT NULL,
  `pageCont` text,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `pages`
--

INSERT INTO `pages` (`pageID`, `pageTitle`, `pageCont`, `image`) VALUES
(1, 'Stribble', 'Stribble is een bedrijf, die mensen helpt met een beperking. Dit doen wij met behulp van een stappenplan, zodat het een stuk gemakkelijker word met dingen doen.<br><br> Onze missie is deze mensen onafhankelijk laten worden. Zodat ze zoveel mogelijk zelf kunnen en dat wij met trots kunnen vertellen dat het ons gelukt is.asdsa', '20161107184323_gi.png'),
(2, 'alzheimer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.sadsadssasads', 'map.png');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `pages_eng`
--

CREATE TABLE `pages_eng` (
  `pageID` int(11) NOT NULL,
  `pageTitle` varchar(255) DEFAULT NULL,
  `pageCont` text,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `pages_eng`
--

INSERT INTO `pages_eng` (`pageID`, `pageTitle`, `pageCont`, `image`) VALUES
(1, 'Stribble2', 'Stribble is een bedrijf, die mensen helpt met een beperking. Dit doen wij met behulp van een stappenplan, zodat het een stuk gemakkelijker word met dingen doen.<br><br> Onze missie is deze mensen onafhankelijk laten worden. Zodat ze zoveel mogelijk zelf kunnen en dat wij met trots kunnen vertellen dat het ons gelukt is.', '20161109145634_gi.png'),
(2, 'alzheimer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '01.jpg');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`memberID`);

--
-- Indexen voor tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `news_eng`
--
ALTER TABLE `news_eng`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`pageID`);

--
-- Indexen voor tabel `pages_eng`
--
ALTER TABLE `pages_eng`
  ADD PRIMARY KEY (`pageID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `members`
--
ALTER TABLE `members`
  MODIFY `memberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `news_eng`
--
ALTER TABLE `news_eng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `pages`
--
ALTER TABLE `pages`
  MODIFY `pageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT voor een tabel `pages_eng`
--
ALTER TABLE `pages_eng`
  MODIFY `pageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
