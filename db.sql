-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 06 Paź 2022, 09:37
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
-- Struktura tabeli dla tabeli `messages`
--

CREATE TABLE `messages` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `Body` text COLLATE utf8mb4_bin NOT NULL,
  `Submitted` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Zrzut danych tabeli `messages`
--

INSERT INTO `messages` (`Id`, `Name`, `Email`, `Body`, `Submitted`) VALUES
(2, 'a', 'b', 'c', '2022-10-06 09:09:41'),
(3, 'Agysdf', 'lioiiooihoh@mnhv.com', 'ghisdf sukdf heuilfg eilrg rtjh rl;jh jhkd sbfjmsdgfghisdf sukdf heuilfg eilrg rtjh rl;jh jhkd sbfjmsdgfghisdf sukdf heuilfg eilrg rtjh rl;jh jhkd sbfjmsdgfghisdf sukdf heuilfg eilrg rtjh rl;jh jhkd sbfjmsdgfghisdf sukdf heuilfg eilrg rtjh rl;jh jhkd sbfjmsdgfghisdf sukdf heuilfg eilrg rtjh rl;jh jhkd sbfjmsdgfghisdf sukdf heuilfg eilrg rtjh rl;jh jhkd sbfjmsdgfghisdf sukdf heuilfg eilrg rtjh rl;jh jhkd sbfjmsdgfghisdf sukdf heuilfg eilrg rtjh rl;jh jhkd sbfjmsdgfghisdf sukdf heuilfg eilrg rtjh rl;jh jhkd sbfjmsdgfghisdf sukdf heuilfg eilrg rtjh rl;jh jhkd sbfjmsdgfghisdf sukdf heuilfg eilrg rtjh rl;jh jhkd sbfjmsdgfghisdf sukdf heuilfg eilrg rtjh rl;jh jhkd sbfjmsdgfghisdf sukdf heuilfg eilrg rtjh rl;jh jhkd sbfjmsdgfghisdf sukdf heuilfg eilrg rtjh rl;jh jhkd sbfjmsdgfghisdf sukdf heuilfg eilrg rtjh rl;jh jhkd sbfjmsdgfghisdf sukdf heuilfg eilrg rtjh rl;jh jhkd sbfjmsdgfghisdf sukdf heuilfg eilrg rtjh rl;jh jhkd sbfjmsdgfghisdf sukdf heuilfg eilrg rtjh rl;jh jhkd sbfjmsdgfghisdf sukdf heuilfg eilrg rtjh rl;jh jhkd sbfjmsdgfghisdf sukdf heuilfg eilrg rtjh rl;jh jhkd sbfjmsdgf', '2022-10-06 09:11:23'),
(4, 'PUIAjsdf', 'dfhgdfg@dghdg.gjh', '0', '2022-10-06 09:17:31'),
(5, 'Aasdasdf', 'asdsdf@sdfsd.dg', '0\"); CREATE TABLE another_attack (Id INT); -- sdjkfgs dkfsjdg fkasg dfsd gfjkd gdf ghfg jhfg  sdjkfgs dkfsjdg fkasg dfsd gfjkd gdf ghfg jhfg  sdjkfgs dkfsjdg fkasg dfsd gfjkd gdf ghfg jhfg  sdjkfgs dkfsjdg fkasg dfsd gfjkd gdf ghfg jhfg  sdjkfgs dkfsjdg fkasg dfsd gfjkd gdf ghfg jhfg  sdjkfgs dkfsjdg fkasg dfsd gfjkd gdf ghfg jhfg  sdjkfgs dkfsjdg fkasg dfsd gfjkd gdf ghfg jhfg  sdjkfgs dkfsjdg fkasg dfsd gfjkd gdf ghfg jhfg  sdjkfgs dkfsjdg fkasg dfsd gfjkd gdf ghfg jhfg  sdjkfgs dkfsjdg fkasg dfsd gfjkd gdf ghfg jhfg  sdjkfgs dkfsjdg fkasg dfsd gfjkd gdf ghfg jhfg  sdjkfgs dkfsjdg fkasg dfsd gfjkd gdf ghfg jhfg ', '2022-10-06 09:32:47'),
(6, 'Pasdad', 'asdasd@sdfsdf.asdd', ' sdjkfgs dkfsjdg fkasg dfsd gfjkd gdf ghfg jhfg  sdjkfgs dkfsjdg fkasg dfsd gfjkd gdf ghfg jhfg  sdjkfgs dkfsjdg fkasg dfsd gfjkd gdf ghfg jhfg  sdjkfgs dkfsjdg fkasg dfsd gfjkd gdf ghfg jhfg  sdjkfgs dkfsjdg fkasg dfsd gfjkd gdf ghfg jhfg  sdjkfgs dkfsjdg fkasg dfsd gfjkd gdf ghfg jhfg  sdjkfgs dkfsjdg fkasg dfsd gfjkd gdf ghfg jhfg  sdjkfgs dkfsjdg fkasg dfsd gfjkd gdf ghfg jhfg  sdjkfgs dkfsjdg fkasg dfsd gfjkd gdf ghfg jhfg  sdjkfgs dkfsjdg fkasg dfsd gfjkd gdf ghfg jhfg  sdjkfgs dkfsjdg fkasg dfsd gfjkd gdf ghfg jhfg  sdjkfgs dkfsjdg fkasg dfsd gfjkd gdf ghfg jhfg  sdjkfgs dkfsjdg fkasg dfsd gfjkd gdf ghfg jhfg  sdjkfgs dkfsjdg fkasg dfsd gfjkd gdf ghfg jhfg  sdjkfgs dkfsjdg fkasg dfsd gfjkd gdf ghfg jhfg  sdjkfgs dkfsjdg fkasg dfsd gfjkd gdf ghfg jhfg  sdjkfgs dkfsjdg fkasg dfsd gfjkd gdf ghfg jhfg  sdjkfgs dkfsjdg fkasg dfsd gfjkd gdf ghfg jhfg  sdjkfgs dkfsjdg fkasg dfsd gfjkd gdf ghfg jhfg  sdjkfgs dkfsjdg fkasg dfsd gfjkd gdf ghfg jhfg  sdjkfgs dkfsjdg fkasg dfsd gfjkd gdf ghfg jhfg  sdjkfgs dkfsjdg fkasg dfsd gfjkd gdf ghfg jhfg  sdjkfgs dkfsjdg fkasg dfsd gfjkd gdf ghfg jhfg  sdjkfgs dkfsjdg fkasg dfsd gfjkd gdf ghfg jhfg  sdjkfgs dkfsjdg fkasg dfsd gfjkd gdf ghfg jhfg ', '2022-10-06 09:34:22');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `messages`
--
ALTER TABLE `messages`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
