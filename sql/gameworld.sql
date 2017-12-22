-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Gegenereerd op: 21 dec 2017 om 11:35
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
-- Database: `gameworld`
--
CREATE DATABASE IF NOT EXISTS `gameworld` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gameworld`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gamecategory`
--

CREATE TABLE IF NOT EXISTS `gamecategory` (
  `categoryId` int(3) NOT NULL AUTO_INCREMENT,
  `categoryTitle` varchar(50) NOT NULL,
  `categoryImage` varchar(100) NOT NULL,
  `categoryDescription` text NOT NULL,
  PRIMARY KEY (`categoryId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `gamecategory`
--

INSERT INTO `gamecategory` (`categoryId`, `categoryTitle`, `categoryImage`, `categoryDescription`) VALUES
(1, 'PS-4', '', ''),
(2, 'XBOX', '', ''),
(3, 'PC', '', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `games`
--

CREATE TABLE IF NOT EXISTS `games` (
  `gameId` int(5) NOT NULL AUTO_INCREMENT,
  `gameTitle` varchar(50) NOT NULL,
  `gamePrice` decimal(5,2) NOT NULL,
  `gameDescription` text NOT NULL,
  `gameImage` varchar(100) NOT NULL,
  `gameCatogeryId` int(3) NOT NULL,
  PRIMARY KEY (`gameId`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `games`
--

INSERT INTO `games` (`gameId`, `gameTitle`, `gamePrice`, `gameDescription`, `gameImage`, `gameCatogeryId`) VALUES
(1, 'Fifa 18', '49.99', 'dseghgrychtfn', 'fifaps4.png', 1),
(2, 'GTA V', '39.99', 'vavcav', 'gtavps4.jpg', 1),
(3, 'Need For Speed Rivals', '21.99', 'cacblasi', 'needforspeed.jpg', 1),
(4, 'Red Dead Redemption 2 ', '59.99', 'nvbbdxsbxfd', 'red.jpeg', 1),
(5, 'The Crew 2', '59.99', 'uisnvzs', 'crew2.jpeg.jpg', 1),
(6, 'Minecraft', '19.99', 'hjb lfsz', 'mine.jpg', 2),
(7, 'One F1 2016 ', '38.00', 'bcdng', 'f1.jpg', 2),
(8, 'Watch Dogs 2', '26.99', 'bhsablvd', 'dog.jpg', 2),
(9, 'Forza Horizon 3', '40.00', 'jsadlkvj ', 'forza.png', 2),
(10, 'Assassin\'s Creed Origins', '57.99', 'dshb', 'ass.jpg', 2),
(11, 'Fallout 4', '14.95', 'dcdzav', 'fallout.png', 3),
(12, 'Wolfenstein', '10.49', 'qwiwi', 'wolf.png', 3),
(13, 'Doom', '12.49', 'dasvgvd', 'doom.png', 3),
(14, 'Tomb Raider', '8.95', 'cacac', 'tomb.png', 3),
(15, 'Destiny 2', '52.95', 'asccd', 'destiny.png', 3),
(16, 'Syberia 3', '21.95', 'wsac', 'syberia.png', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
