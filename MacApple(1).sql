-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 31. Jan 2017 um 08:47
-- Server Version: 5.6.24-0ubuntu2
-- PHP-Version: 5.6.4-4ubuntu6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `MacApple`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Adresse`
--

CREATE TABLE IF NOT EXISTS `Adresse` (
  `Adress_ID` int(11) NOT NULL DEFAULT '0',
  `Strasse` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Hausnummer` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `PLZ` int(5) NOT NULL,
  `Ort` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `benutzer`
--

CREATE TABLE IF NOT EXISTS `benutzer` (
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(128) COLLATE utf8_unicode_ci NOT NULL,
  `passwortcode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `passwortcode_zeit` timestamp NULL DEFAULT NULL,
`ID` int(11) NOT NULL,
  `salt` char(128) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `benutzer`
--

INSERT INTO `benutzer` (`email`, `password`, `passwortcode`, `passwortcode_zeit`, `ID`, `salt`, `username`) VALUES
('fabian@noll.de', 'f2ad9d59e847fdca10fd915e8e240a6c64f2bf91180fb35727cca9187f19609228bce00255b3d22513229d304649c84073e096ec5f257821055f681eaf101b83', NULL, NULL, 1, '33d2cf8c2255b69702903cf595bc09566a365258b82a780906a5238ee2bf03cfade1846b8ccc90a6d562a67d82508187d14d91d858f9599552d00f9fc0f8488b', 'fabian');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Bestellung`
--

CREATE TABLE IF NOT EXISTS `Bestellung` (
`Bestell_ID` int(11) NOT NULL,
  `Datum` date NOT NULL,
  `Kunden_ID` int(11) NOT NULL,
  `Gesamtkaufpreis` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `Bestellung`
--

INSERT INTO `Bestellung` (`Bestell_ID`, `Datum`, `Kunden_ID`, `Gesamtkaufpreis`) VALUES
(1, '2017-01-30', 1, 25),
(2, '2017-01-31', 1, 25),
(3, '2017-02-01', 1, 10),
(4, '2017-01-31', 2, 2345),
(5, '2017-05-03', 2, 11);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Inhalt-Menue`
--

CREATE TABLE IF NOT EXISTS `Inhalt-Menue` (
  `Inhalt_Menue_ID` int(11) NOT NULL,
  `Menue_ID` int(11) NOT NULL,
  `Produkt_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `Inhalt-Menue`
--

INSERT INTO `Inhalt-Menue` (`Inhalt_Menue_ID`, `Menue_ID`, `Produkt_ID`) VALUES
(1, 1, 16),
(2, 1, 17),
(3, 1, 8),
(4, 2, 9),
(5, 2, 6),
(6, 3, 15),
(7, 3, 12),
(8, 4, 7),
(9, 4, 6),
(10, 4, 9),
(11, 4, 18),
(12, 5, 13),
(13, 5, 12);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Inhalt-Produkt`
--

CREATE TABLE IF NOT EXISTS `Inhalt-Produkt` (
`Inhalt_Produkt_ID` int(11) NOT NULL,
  `Zutat_ID` int(11) NOT NULL,
  `Produkt_ID` int(11) NOT NULL,
  `Einheit` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Menge` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `Inhalt-Produkt`
--

INSERT INTO `Inhalt-Produkt` (`Inhalt_Produkt_ID`, `Zutat_ID`, `Produkt_ID`, `Einheit`, `Menge`) VALUES
(1, 12, 6, 'Gramm', 100),
(2, 1, 7, 'Stück', 1),
(3, 2, 7, 'Stück', 2),
(4, 3, 7, 'Stück', 1),
(5, 4, 7, 'Stück', 1),
(6, 5, 7, 'Gramm', 80),
(7, 11, 7, 'Stück', 1),
(8, 8, 8, 'Stück', 2),
(9, 8, 9, 'Stück', 4),
(10, 8, 10, 'Stück', 9),
(11, 1, 13, 'Stück', 1),
(12, 2, 13, 'Stück', 2),
(13, 3, 13, 'Stück', 1),
(14, 4, 13, 'Stück', 1),
(15, 7, 13, 'Gramm', 80),
(16, 9, 14, 'Stück', 3),
(17, 10, 15, 'Stück', 1),
(18, 1, 16, 'Stück', 1),
(19, 2, 16, 'Stück', 2),
(20, 3, 16, 'Stück', 1),
(21, 4, 16, 'Stück', 1),
(22, 9, 16, 'Stück', 1),
(23, 11, 16, 'Stück', 1),
(24, 11, 17, 'Gamm ', 80),
(25, 9, 17, 'Stück', 2),
(26, 11, 18, 'Gramm', 120),
(27, 9, 18, 'Stück', 3),
(28, 4, 18, 'Gramm', 30);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Kunde`
--

CREATE TABLE IF NOT EXISTS `Kunde` (
  `Kunden_ID` int(11) NOT NULL,
  `Vorname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Nachname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Telefonnummer` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Adress_ID` int(11) NOT NULL,
  `Benutzer_ID` int(11) NOT NULL,
  `e-mail` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `Kunde`
--

INSERT INTO `Kunde` (`Kunden_ID`, `Vorname`, `Nachname`, `Telefonnummer`, `Adress_ID`, `Benutzer_ID`, `e-mail`) VALUES
(1, 'Fabian', 'Noll', '0999999', 1, 1, 'fabian@noll.de'),
(2, 'Yavuz', 'Aktas', '48496165486', 2, 2, 'yavuz@aktas.de');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `login_versuche`
--

CREATE TABLE IF NOT EXISTS `login_versuche` (
  `benutzer_ID` int(11) NOT NULL,
  `time` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Position`
--

CREATE TABLE IF NOT EXISTS `Position` (
  `Position_ID` int(11) NOT NULL,
  `Bestell_ID` int(11) NOT NULL,
  `Produkt_ID` int(11) NOT NULL,
  `Menge` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `Position`
--

INSERT INTO `Position` (`Position_ID`, `Bestell_ID`, `Produkt_ID`, `Menge`) VALUES
(1, 1, 1, 10),
(1, 2, 6, 20),
(1, 3, 2, 1),
(1, 4, 13, 2),
(1, 5, 14, 40),
(2, 1, 2, 10),
(2, 4, 1, 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Produkt`
--

CREATE TABLE IF NOT EXISTS `Produkt` (
  `Produkt_ID` int(11) NOT NULL,
  `Bezeichnung` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Preis` float NOT NULL,
  `Energiewert` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `Produkt`
--

INSERT INTO `Produkt` (`Produkt_ID`, `Bezeichnung`, `Preis`, `Energiewert`) VALUES
(1, 'Menü 1', 19, 0),
(2, 'Menü 2', 15.5, 0),
(3, 'Menü 3', 12, 0),
(4, 'Menü 4', 24.99, 0),
(5, 'Menü 5', 22.75, 0),
(6, 'Apfelpommes', 1.5, 0),
(7, 'Vollkorn double beef burger', 6.5, 0),
(8, 'Orangen Saft 0.2l', 1.5, 0),
(9, 'Orangen Saft 0.4l', 2.5, 0),
(10, 'Orangen Saft 1l', 5, 0),
(11, 'Mineralwasser 0.2', 1.2, 0),
(12, 'Mineralwasser 0.5', 2, 0),
(13, 'Vollkorn Chicken Burger', 5, 0),
(14, 'Bio Rührei', 3.5, 0),
(15, 'Bio Apfeltasche', 4, 0),
(16, 'Vollkorn Vergie Burger', 4.5, 0),
(17, 'Salat klein', 1.2, 0),
(18, ' Salat mittel', 2, 0),
(19, 'Salat groß', 3, 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Zutaten`
--

CREATE TABLE IF NOT EXISTS `Zutaten` (
  `Zutaten_ID` int(11) NOT NULL,
  `Bezeichnung` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Energeiwert` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `Zutaten`
--

INSERT INTO `Zutaten` (`Zutaten_ID`, `Bezeichnung`, `Energeiwert`) VALUES
(1, 'Vollkorn Brötchen', 143),
(2, 'Gurkenscheibe', 1),
(3, 'Tomatenscheibe', 2),
(4, 'Käsescheibe', 80),
(5, 'Fleischmedalion Rind', 221),
(6, 'Fleischmedalion Schwein', 263),
(7, 'Hünchenfleisch', 110),
(8, 'Orangen', 5),
(9, 'Ei', 10),
(10, 'Bio Apfeltaschen', 95),
(11, 'Salat', 10);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `Adresse`
--
ALTER TABLE `Adresse`
 ADD PRIMARY KEY (`Adress_ID`);

--
-- Indizes für die Tabelle `benutzer`
--
ALTER TABLE `benutzer`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `email` (`email`);

--
-- Indizes für die Tabelle `Bestellung`
--
ALTER TABLE `Bestellung`
 ADD PRIMARY KEY (`Bestell_ID`);

--
-- Indizes für die Tabelle `Inhalt-Menue`
--
ALTER TABLE `Inhalt-Menue`
 ADD PRIMARY KEY (`Inhalt_Menue_ID`);

--
-- Indizes für die Tabelle `Inhalt-Produkt`
--
ALTER TABLE `Inhalt-Produkt`
 ADD PRIMARY KEY (`Inhalt_Produkt_ID`);

--
-- Indizes für die Tabelle `Kunde`
--
ALTER TABLE `Kunde`
 ADD PRIMARY KEY (`Kunden_ID`);

--
-- Indizes für die Tabelle `login_versuche`
--
ALTER TABLE `login_versuche`
 ADD PRIMARY KEY (`benutzer_ID`);

--
-- Indizes für die Tabelle `Position`
--
ALTER TABLE `Position`
 ADD PRIMARY KEY (`Position_ID`,`Bestell_ID`);

--
-- Indizes für die Tabelle `Produkt`
--
ALTER TABLE `Produkt`
 ADD PRIMARY KEY (`Produkt_ID`);

--
-- Indizes für die Tabelle `Zutaten`
--
ALTER TABLE `Zutaten`
 ADD PRIMARY KEY (`Zutaten_ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `benutzer`
--
ALTER TABLE `benutzer`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT für Tabelle `Bestellung`
--
ALTER TABLE `Bestellung`
MODIFY `Bestell_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT für Tabelle `Inhalt-Produkt`
--
ALTER TABLE `Inhalt-Produkt`
MODIFY `Inhalt_Produkt_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
