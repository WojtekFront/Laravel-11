-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 23 Sty 2022, 23:44
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `warehouse`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `product`
--

CREATE TABLE `product` (
  `product_id` int(100) NOT NULL,
  `product_category` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `product_name` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `product_describe` varchar(2000) COLLATE utf8_polish_ci NOT NULL,
  `product_status` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `product_removed` int(3) NOT NULL,
  `product_1` int(2) NOT NULL,
  `product_2` int(15) NOT NULL,
  `product_3` int(15) NOT NULL,
  `product_4` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `product`
--

INSERT INTO `product` (`product_id`, `product_category`, `product_name`, `product_describe`, `product_status`, `product_removed`, `product_1`, `product_2`, `product_3`, `product_4`) VALUES
(1, 'towar kat', 'kiełbasa', 'kielbasa wawelska', 'niedostepny', 1, 0, 0, 0, 0),
(2, 'towary', 'mleko', 'białe krowie', 'dostepny', 1, 0, 0, 0, 0),
(3, 'towary', 'pieprz3', 'czarny', 'dostepny', 2, 0, 0, 0, 0),
(4, 'towary', 'mleko', 'białe kozie', 'dostepny', 1, 0, 0, 0, 0),
(5, 'towary', 'mleko', 'białe', 'dostepny', 1, 0, 0, 0, 0),
(6, 'towary', 'mleko', 'owsiane eko', 'dostepny', 1, 0, 0, 0, 0),
(7, 'towary', 'mleko', 'białe krowie', 'dostepny', 1, 0, 0, 0, 0),
(8, 'towary', 'mleko', 'białe mleko', 'dostepny', 1, 0, 0, 0, 0),
(9, 'towary', 'mleko', 'białe krowie', 'dostepny', 1, 0, 0, 0, 0),
(10, 'towary', 'kefir', 'produkt mleczny', 'dostepny', 1, 0, 0, 0, 0),
(11, 'towary', 'sok', 'sok pomidorowy', 'dostepny', 1, 0, 0, 0, 0),
(12, 'towary', 'kawa', 'czarna kawa', 'dostepny', 1, 0, 0, 0, 0),
(13, 'towary', 'bbb', 'bbbss', 'dostepny', 1, 0, 0, 0, 0),
(14, 'towary', 'bbb', 'bbbss', 'dostepny', 1, 0, 0, 0, 0),
(15, 'towary', 'piwo', 'piwo jasne pasteryzowane', 'dostepny', 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `user_name` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `user_email` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `user_pwd` varchar(128) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`users_id`, `user_name`, `user_email`, `user_pwd`) VALUES
(1, 'admin', 'admin@admin.wp', '$2y$10$EHW6u34kStYmCCP.SY87NOPBKz3JhyeKnybnEde3I0Nc00225E1D2');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT dla tabel zrzutów
--

--
-- AUTO_INCREMENT dla tabeli `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
