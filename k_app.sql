-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas wygenerowania: 17 Wrz 2013, 17:10
-- Wersja serwera: 5.5.32
-- Wersja PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `k_app`
--
CREATE DATABASE IF NOT EXISTS `k_app` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `k_app`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `PESEL` bigint(12) NOT NULL,
  `imie` text NOT NULL,
  `nazwisko` text NOT NULL,
  `stanowisko` text NOT NULL,
  PRIMARY KEY (`PESEL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `employees`
--

INSERT INTO `employees` (`PESEL`, `imie`, `nazwisko`, `stanowisko`) VALUES
(98122499903, 'Rafał', 'Szybki', 'Projektant'),
(99112300000, 'Konrad', 'Piasecki', 'Programista');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
