-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 10. Jun 2017 um 12:10
-- Server Version: 5.5.55-0+deb8u1
-- PHP-Version: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `Blog`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Blog`
--

CREATE TABLE IF NOT EXISTS `Blog` (
`ID` int(100) NOT NULL,
  `titel` varchar(10000) NOT NULL,
  `bild` varchar(100) NOT NULL,
  `datum` varchar(1000) NOT NULL,
  `text` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `Blog`
--

INSERT INTO `Blog` (`ID`, `titel`, `bild`, `datum`, `text`) VALUES
(1, 'Example ', 'castle.jpg', '10/06/2017', 'Das hir ist ein Beispiele!');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `Blog`
--
ALTER TABLE `Blog`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `Blog`
--
ALTER TABLE `Blog`
MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
