-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2020 at 11:17 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategorite`
--

CREATE TABLE `kategorite` (
  `kat_id` int(11) NOT NULL,
  `kat_emri` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategorite`
--

INSERT INTO `kategorite` (`kat_id`, `kat_emri`) VALUES
(1, 'Europa'),
(2, 'Azi'),
(3, 'Gjermani'),
(9, 'Prizreni'),
(11, 'Tirana');

-- --------------------------------------------------------

--
-- Table structure for table `mesazhet`
--

CREATE TABLE `mesazhet` (
  `id` int(11) NOT NULL,
  `emri` varchar(30) NOT NULL,
  `emaili` varchar(30) NOT NULL,
  `mesazhi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ofertat`
--

CREATE TABLE `ofertat` (
  `oferta_id` int(11) NOT NULL,
  `emri_oferta` varchar(255) NOT NULL,
  `foto_oferta` text NOT NULL,
  `permbajtja_oferta` text NOT NULL,
  `category_oferta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ofertat`
--

INSERT INTO `ofertat` (`oferta_id`, `emri_oferta`, `foto_oferta`, `permbajtja_oferta`, `category_oferta`) VALUES
(1, 'dubai', 'dubai.jpg', '', 0),
(2, 'stamboll', 'stamboll.jpg', '', 0),
(3, 'doha', 'doha.jpg', '', 0),
(4, 'Amsterdam', 'amsterdam.jpg', '', 0),
(5, 'Barcelona', 'barcelona.jpg', '', 0),
(6, 'Paris', 'paris.jpg', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rezervimet`
--

CREATE TABLE `rezervimet` (
  `id` int(4) NOT NULL,
  `user_emri` varchar(30) NOT NULL,
  `user_mbiemri` varchar(30) NOT NULL,
  `user_gjinia` varchar(20) NOT NULL,
  `user_birthday` date NOT NULL,
  `user_nisja` varchar(30) NOT NULL,
  `user_destinacion` varchar(30) NOT NULL,
  `hoteli` varchar(40) NOT NULL,
  `user_nete` int(11) NOT NULL,
  `user_dhoma` int(11) NOT NULL,
  `user_femije` int(11) NOT NULL,
  `user_data_nisjes` date NOT NULL,
  `user_udhetimi` varchar(50) NOT NULL,
  `user_koment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rezervimet`
--

INSERT INTO `rezervimet` (`id`, `user_emri`, `user_mbiemri`, `user_gjinia`, `user_birthday`, `user_nisja`, `user_destinacion`, `hoteli`, `user_nete`, `user_dhoma`, `user_femije`, `user_data_nisjes`, `user_udhetimi`, `user_koment`) VALUES
(1, 'Lum', 'Pireva', 'male', '2020-05-28', 'Prishtina', 'Paris', 'Hotel', 5, 1, 1, '2020-05-26', '', 'Pershendetje');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `user_email` text NOT NULL,
  `password` text NOT NULL,
  `user_firstname` varchar(25) NOT NULL,
  `user_lastname` varchar(25) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL DEFAULT '$2y$10$iusesomecrazystrings22'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_email`, `password`, `user_firstname`, `user_lastname`, `user_role`, `randSalt`) VALUES
(1, 'lum', 'lum@mail.com', '$1$a2l1Nv.L$wtvFCsnSF8IOi9FqNJhpi/', '', '', 'subscriber', '$2y$10$iusesomecrazystrings22'),
(3, 'jon', 'jon@mail.com', '$2y$10$iusesomecrazystrings2utumY6JHfq9jsE7VcACVpD/0Mt/WPGOy', '', '', 'subscriber', '$2y$10$iusesomecrazystrings22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategorite`
--
ALTER TABLE `kategorite`
  ADD PRIMARY KEY (`kat_id`);

--
-- Indexes for table `mesazhet`
--
ALTER TABLE `mesazhet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ofertat`
--
ALTER TABLE `ofertat`
  ADD PRIMARY KEY (`oferta_id`);

--
-- Indexes for table `rezervimet`
--
ALTER TABLE `rezervimet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategorite`
--
ALTER TABLE `kategorite`
  MODIFY `kat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mesazhet`
--
ALTER TABLE `mesazhet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ofertat`
--
ALTER TABLE `ofertat`
  MODIFY `oferta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rezervimet`
--
ALTER TABLE `rezervimet`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
