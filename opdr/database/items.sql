-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Gegenereerd op: 22 dec 2017 om 14:15
-- Serverversie: 5.7.19
-- PHP-versie: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gameworldclass`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `items`
--

CREATE TABLE `items` (
  `Item_ID` int(11) NOT NULL,
  `Item_Name` text NOT NULL,
  `Item_Price` int(11) NOT NULL,
  `Item_Catogorie` text NOT NULL,
  `Item_Discription` text NOT NULL,
  `Image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `items`
--

INSERT INTO `items` (`Item_ID`, `Item_Name`, `Item_Price`, `Item_Catogorie`, `Item_Discription`, `Image`) VALUES
(1, 'Nissan Skyline', 2, '1', 'Fast and furious car you can drive in rocket league', 'Nissan.png'),
(3, 'Dodge Charger', 2, '1', 'The Dodge charger car from rocket league that you can drive', 'Dodge.png'),
(5, 'Twin Mill', 2, '1', 'The Twin Mill three from the Hot Wheels series', 'Twinn.png'),
(6, 'Bone Shaker', 2, '1', 'The bone shaker car from the Hot Wheels series', 'Bone.png'),
(7, '1 Key', 1, '2', 'buy 1 key', 'key.png'),
(8, '5 keys', 4, '2', 'buy 5 keys', 'key.png'),
(9, '10 keys', 8, '2', 'buy 10 keys', 'key.png'),
(10, '20 keys', 17, '2', 'buy 20 keys', 'key.png'),
(11, 'Labirinth', 4, '3', 'Universal mystery decal. extremely rare', 'labyrinth.png'),
(12, 'bubbly', 29, '3', 'Universal mystery decal. extremely rare', 'bubbly.png'),
(13, 'hexed', 7, '3', 'universal mystery decal. extremely rare', 'hexed.png');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`Item_ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `items`
--
ALTER TABLE `items`
  MODIFY `Item_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
