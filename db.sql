-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 13 Paź 2022, 08:58
-- Wersja serwera: 10.4.19-MariaDB
-- Wersja PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `4dti`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `blogposts`
--

CREATE TABLE `blogposts` (
  `Id` int(11) NOT NULL,
  `Title` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `Body` text COLLATE utf8mb4_bin NOT NULL,
  `CreatedAt` datetime NOT NULL DEFAULT current_timestamp(),
  `EditedAt` datetime DEFAULT NULL,
  `AuthorId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `messages`
--

CREATE TABLE `messages` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `Body` text COLLATE utf8mb4_bin NOT NULL,
  `Submitted` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `Password` varchar(255) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`Id`, `Name`, `Email`, `Password`) VALUES
(1, 'Julia', 'julia@julia.com', '$argon2id$v=19$m=65536,t=4,p=1$UWhGUms2WmQ5cEc1LlRDUA$/OhNpWp65eQrTOQTe04KXMgsg6BxW2RRaRSfpfxrFDU');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `blogposts`
--
ALTER TABLE `blogposts`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Name` (`Name`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `blogposts`
--
ALTER TABLE `blogposts`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `messages`
--
ALTER TABLE `messages`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
