-- phpMyAdmin SQL Dump
-- version 4.1.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mag 09, 2014 alle 07:30
-- Versione del server: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `intse`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `touser` varchar(40) NOT NULL,
  `fromuser` varchar(40) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `message` text NOT NULL,
  `read` enum('0','1') NOT NULL DEFAULT '0',
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  `datesent` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(6) NOT NULL,
  `name` text NOT NULL,
  `cat` text NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `products`
--

INSERT INTO `products` (`id`, `name`, `cat`, `price`) VALUES
(501101, 'MP-01', 'Mini-PC', 280),
(501102, 'MP-02', 'Mini-PC', 380),
(501103, 'MP-03', 'Mini-PC', 500),
(501104, 'MP-04', 'Mini-PC', 550),
(502201, 'DP-01', 'Desktop-PC', 500),
(502202, 'DP-02', 'Desktop-PC', 600),
(502203, 'DP-03', 'Desktop-PC', 800),
(503301, 'GP-01', 'Gaming-PC', 1200),
(504401, 'OP-01', 'Office-PC', 500),
(504402, 'OP-02', 'Office-PC', 550);

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
