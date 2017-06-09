-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Vært: localhost
-- Genereringstid: 29. 05 2017 kl. 13:30:16
-- Serverversion: 10.1.21-MariaDB
-- PHP-version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fadbamsevalg`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `citater`
--

CREATE TABLE `citater` (
  `id` int(11) NOT NULL,
  `fuldeNavn` varchar(255) NOT NULL,
  `billedeLink` varchar(255) NOT NULL,
  `citat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `citater`
--

INSERT INTO `citater` (`id`, `fuldeNavn`, `billedeLink`, `citat`) VALUES
(1, 'Kristina Nielsen', 'https://randomuser.me/api/portraits/women/63.jpg', 'mere info, ikke hvad de står for, men mere hvad der kan ændres.'),
(2, 'Kevin Langballe', 'https://randomuser.me/api/portraits/men/11.jpg', 'bedre kampagner som er velegnet til unge mennesker, og undgå at pakke alle deres mål ind i politisk snak og fancy ord.'),
(3, 'Malte Lilhauge', 'https://randomuser.me/api/portraits/men/84.jpg', 'mere brug af internettet og de sociale medier.'),
(4, 'Abdullah Polat', 'https://randomuser.me/api/portraits/men/86.jpg', 'flere kampagner, der er målrettet de unge'),
(5, 'Anna Brist Holm', 'https://randomuser.me/api/portraits/women/31.jpg', 'et eller andet, jeg ved det ikke.'),
(6, 'Joachim Bohn-Wendler', 'https://randomuser.me/api/portraits/men/62.jpg', 'en konkurrence om en tur til Sunny Beach'),
(7, 'Chang Chen-Bao', 'https://randomuser.me/api/portraits/men/90.jpg', 'større fokus på at fortælle de unge vigtigheden om deres stemmeret.');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `kontakt`
--

CREATE TABLE `kontakt` (
  `id` int(11) NOT NULL,
  `fuldeNavn` varchar(255) NOT NULL,
  `emailAdresse` varchar(255) DEFAULT NULL,
  `emne` varchar(255) DEFAULT NULL,
  `besked` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `kontakt`
--

INSERT INTO `kontakt` (`id`, `fuldeNavn`, `emailAdresse`, `emne`, `besked`) VALUES
(1, 'asdasd', 'sada@asdada.dk', 'sdfsdf', 'sdfdsfsdfsdf'),
(2, 'asdasdas asdasdasdasd', 'asdasd@asdasda.dk', 'sdfsdfsdfsdfsdfsd', 'dfsfsd sfsdf sdfds sfsf'),
(3, 'asdasdas asdasdasdasd', 'asdasd@asdasda.dk', 'sdfsdfsdfsdfsdfsd', 'dfsfsd sfsdf sdfds sfsf'),
(4, 'Kevin', 'ismail@imanov.dk', 'Ditlev bol mig i røven pls', 'hehe ditlev 4 life'),
(5, 'Ismail Imanov', 'test@test.dk', 'tester #', 'tester'),
(6, '<b>tester</b>', 'test@test.dk', '<h1>tester</h1>', '<h1>adasdassa</h1>');

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `citater`
--
ALTER TABLE `citater`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `kontakt`
--
ALTER TABLE `kontakt`
  ADD PRIMARY KEY (`id`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `citater`
--
ALTER TABLE `citater`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Tilføj AUTO_INCREMENT i tabel `kontakt`
--
ALTER TABLE `kontakt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
