-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 27 Paź 2022, 09:39
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

--
-- Zrzut danych tabeli `blogposts`
--

INSERT INTO `blogposts` (`Id`, `Title`, `Body`, `CreatedAt`, `EditedAt`, `AuthorId`) VALUES
(1, 'Lorem ipsum', 'skfb iwfhsk dfsdk ghsdkjgh sdkfj gsf asskfb iwfhsk dfsdk ghsdkjgh sdkfj gsf asskfb iwfhsk dfsdk ghsdkjgh sdkfj gsf asskfb iwfhsk dfsdk ghsdkjgh sdkfj gsf asskfb iwfhsk dfsdk ghsdkjgh sdkfj gsf asskfb iwfhsk dfsdk ghsdkjgh sdkfj gsf asskfb iwfhsk dfsdk ghsdkjgh sdkfj gsf asskfb iwfhsk dfsdk ghsdkjgh sdkfj gsf asskfb iwfhsk dfsdk ghsdkjgh sdkfj gsf asskfb iwfhsk dfsdk ghsdkjgh sdkfj gsf asskfb iwfhsk dfsdk ghsdkjgh sdkfj gsf asskfb iwfhsk dfsdk ghsdkjgh sdkfj gsf asskfb iwfhsk dfsdk ghsdkjgh sdkfj gsf asskfb iwfhsk dfsdk ghsdkjgh sdkfj gsf asskfb iwfhsk dfsdk ghsdkjgh sdkfj gsf asskfb iwfhsk dfsdk ghsdkjgh sdkfj gsf asskfb iwfhsk dfsdk ghsdkjgh sdkfj gsf asskfb iwfhsk dfsdk ghsdkjgh sdkfj gsf asskfb iwfhsk dfsdk ghsdkjgh sdkfj gsf asskfb iwfhsk dfsdk ghsdkjgh sdkfj gsf asskfb iwfhsk dfsdk ghsdkjgh sdkfj gsf asskfb iwfhsk dfsdk ghsdkjgh sdkfj gsf asskfb iwfhsk dfsdk ghsdkjgh sdkfj gsf as', '2022-10-27 09:14:19', NULL, 2);

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
-- Struktura tabeli dla tabeli `roles`
--

CREATE TABLE `roles` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `Color` varchar(7) COLLATE utf8mb4_bin NOT NULL,
  `CanManage` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Zrzut danych tabeli `roles`
--

INSERT INTO `roles` (`Id`, `Name`, `Color`, `CanManage`) VALUES
(1, 'Admin', '#ff0000', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `Password` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `RoleId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`Id`, `Name`, `Email`, `Password`, `RoleId`) VALUES
(1, 'Julia', 'julia@julia.com', '$argon2id$v=19$m=65536,t=4,p=1$UWhGUms2WmQ5cEc1LlRDUA$/OhNpWp65eQrTOQTe04KXMgsg6BxW2RRaRSfpfxrFDU', NULL),
(2, 'Admin', 'admin@admin.admin', '$argon2id$v=19$m=65536,t=4,p=1$ejc2dkw5eW9Bcy82VUV5Sw$Y6P6aiqQIpjglVSRZBFbjmZONFAPv7MQeL6Etatz4rs', 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `blogposts`
--
ALTER TABLE `blogposts`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `AuthorId` (`AuthorId`);

--
-- Indeksy dla tabeli `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Name` (`Name`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `fk_role_id` (`RoleId`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `blogposts`
--
ALTER TABLE `blogposts`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `messages`
--
ALTER TABLE `messages`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `roles`
--
ALTER TABLE `roles`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `blogposts`
--
ALTER TABLE `blogposts`
  ADD CONSTRAINT `blogposts_ibfk_1` FOREIGN KEY (`AuthorId`) REFERENCES `users` (`Id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`RoleId`) REFERENCES `roles` (`Id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
