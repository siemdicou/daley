-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Gegenereerd op: 11 mrt 2016 om 10:31
-- Serverversie: 5.6.21
-- PHP-versie: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `cms2`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
`pageID` int(11) NOT NULL,
  `pageTitle` varchar(255) DEFAULT NULL,
  `pageCont` text,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `pages`
--

INSERT INTO `pages` (`pageID`, `pageTitle`, `pageCont`, `image`) VALUES
(1, 'Stribble', 'Stribble is een bedrijf, die mensen helpt met een beperking. Dit doen wij met behulp van een stappenplan, zodat het een stuk gemakkelijker word met dingen doen. \r\n<br><br>\r\nOnze missie is deze mensen onafhankelijk laten worden. Zodat ze zoveel mogelijk zelf kunnen en dat wij met trots kunnen vertellen dat het ons gelukt is.', ''),
(2, 'alzheimer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '01.jpg'),
(3, 'autisme', 'het werkt wat fijn', '02.jpg'),
(4, 'test', 'safsasaf', '01.jpg'),
(5, 'test', 'Sample Sample content', '01.jpg'),
(8, 'Wie zijn wij?', 'Wij zijn Stribble. Ons doel is door behulp van deze dienst de mensen met een beperking, zoveel mogelijk onafhankelijk te laten worden.<br><br>\r\nDe app bestaat uit een stappenplan om de dag door te nemen. De app is te downloaden in de \r\nAppstore, en Google play Store.', '');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `pages`
--
ALTER TABLE `pages`
 ADD PRIMARY KEY (`pageID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `pages`
--
ALTER TABLE `pages`
MODIFY `pageID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
