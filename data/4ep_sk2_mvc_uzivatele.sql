-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Počítač: localhost:3306
-- Vytvořeno: Čtv 24. zář 2020, 14:45
-- Verze serveru: 10.1.41-MariaDB-0+deb9u1
-- Verze PHP: 7.3.10-1+0~20191008.45+debian9~1.gbp365209

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `ucit_senkyr`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `4ep_sk2_mvc_uzivatele`
--

CREATE TABLE `4ep_sk2_mvc_uzivatele` (
  `id` int(11) NOT NULL,
  `jmeno` varchar(30) COLLATE utf8_czech_ci NOT NULL,
  `heslo` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `cas_registrace` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `4ep_sk2_mvc_uzivatele`
--

INSERT INTO `4ep_sk2_mvc_uzivatele` (`id`, `jmeno`, `heslo`, `cas_registrace`) VALUES
(1, 'senkyr', '$2y$10$oOxZjrNnoukQsKUbpr6kke52JPkC3baT1HhWDYV8nUIp5XMen/lt2', '2020-09-17 07:34:11');

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `4ep_sk2_mvc_uzivatele`
--
ALTER TABLE `4ep_sk2_mvc_uzivatele`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jmeno` (`jmeno`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `4ep_sk2_mvc_uzivatele`
--
ALTER TABLE `4ep_sk2_mvc_uzivatele`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
