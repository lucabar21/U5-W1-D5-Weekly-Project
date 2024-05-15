-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 15, 2024 alle 16:33
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ifoa_u5_w2_d5`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `description`) VALUES
(37, 'Il Codice da Vinci', 'Dan Brown', 'Nel 2009 Il Codice da Vinci, di Dan Brown aveva già venduto 80 milioni di copie in tutto il mondo, almeno secondo la stampa americana. L’enorme successo del Codice da Vinci ha riportato in classifica i libri precedenti di Dan Brown, in particolare Angeli '),
(38, 'Harry Potter e la Pietra Filosofale', 'J. K. Rowling', 'Difficile sbilanciarsi sul numero di copie vendute dei libri della saga di Harry Potter ideata da J.K. Rowling, ma secondo alcuni ricercatori, il solo Harry Potter e la Pietra Filosofale, primo volume dei sette, dovrebbe aver superato i 107 milioni da sol'),
(39, 'Lo Hobbit', 'J.R.R. Tolkien', 'Lo Hobbit è il primo grande bestseller di Tolkien, pubblicato nel 1937, cioè diciotto anni prima del Signore degli Anelli. Già nel 2008 la Bbc assicurava che Lo Hobbit aveva superato i 100 milioni di copie vendute. L\'uscita della trilogia di film di Peter'),
(40, 'L\'alchimista', 'Paulo Coelho', 'Nel 1988 Paulo Coelho, semisconosciuto scrittore brasiliano, dava alle stampe O Alquimista (L’alchimista). Dopo una partenza faticosa, il libro scalò le classiche di tutto il mondo. Nel 2014 diverse fonti giornalistiche, fra cui l\'Huffington Post, attesta'),
(41, 'Don Chisciotte della Mancha', 'Miguel de Cervantes', 'D\'accordo, anche in questo caso è praticamente impossibile quantificare il numero di copie vendute: stiamo pur sempre parlando di una lettura obbligatoria o quasi nei Paesi di lingua spagnola da ben quattro secoli, per generazioni e generazioni di lettori'),
(42, 'Il giovane Holden', 'J.D. Salinger ', 'Il giovane Holden di J.D. Salinger ha torme di lettori in tutto il globo. La quarta di copertina dell’edizione inglese pubblicata nel 2010 dalla casa editrice Penguin sostiene che si tratta di \"uno dei testi più tradotti, insegnati e ristampati, venduto i'),
(43, 'Il leone, la strega e l’armadio', 'C. S. Lewis', 'Il leone, la strega e l’armadio è il volume più celebre delle Cronache di Narnia, saga fantastica per ragazzi. È stato pubblicato per la prima volta nel 1950, come primo libro della serie. Secondo la fonte di Wikipedia fino al 2010 aveva venduto 85 milion'),
(44, 'Cinquanta sfumature di grigio', 'E. L. James ', 'Fra i libri di questa lista, Cinquanta sfumature di grigio è l\'unico che sia stato scritto e pubblicato dopo il 2000. Il primo volume della trilogia erotica di E L James nel 2015 ha raggiunto quota 125 milioni di copie vendute in tutto il mondo. Non male '),
(45, 'Il Piccolo Principe', 'Antoine de Saint-Exupéry', 'Fenomeno editoriale inarrestabile, ancora oggi ai primi posti nelle classifiche. Secondo l\'agenzia giornalistica Associated Press, Il Piccolo Principe dovrebbe aver superato i \"140 milioni di copie vendute nel mondo\" già nel 2012. Ma se è così, le copie v');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id`, `role`, `username`, `email`, `password`) VALUES
(4, 'admin', 'Luca', 'sasofibik@mailinator.com', '$2y$10$V99NAJ3KrfovB9jdxpD8o.X6rf5S1pHxpAt7.Suzywquwmml8ODN.'),
(7, 'user', 'Stefano', 'jenejaxihe@mailinator.com', '$2y$10$lBIWB1lFIazFNBWlT3srkuR6kGayx1w3l9bmfyLxylmQPAUXofjlO'),
(8, 'user', 'Marco', 'susoziw@mailinator.com', '$2y$10$r7eL2iSfg79JTGRqgdetneCWZ/RFOK8O6oKTmhAU8fM2ZVbunAuqG'),
(9, 'user', 'Gianmarco', 'rygopefufa@mailinator.com', '$2y$10$q/2LoC1/4ZH2ps5.l9MMn.3xwWkwCiTXGs4BePHUIYdYAuu03mWXi');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
