-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2022 at 04:07 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bursa`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `full_name` text NOT NULL,
  `email_address` text NOT NULL,
  `password` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `Feedback` longtext NOT NULL,
  `other_feedback` longtext NOT NULL,
  `portfolio_name` text NOT NULL,
  `portfolio_stocks` text NOT NULL,
  `portfolio_cash` text NOT NULL,
  `watchlist_name` text NOT NULL,
  `watchlist_stocks` text NOT NULL,
  `watchlist_chg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `full_name`, `email_address`, `password`, `photo`, `Feedback`, `other_feedback`, `portfolio_name`, `portfolio_stocks`, `portfolio_cash`, `watchlist_name`, `watchlist_stocks`, `watchlist_chg`) VALUES
(1, 'Nur Athirah binti Norman', 'tirah@gmail.com', '$2y$10$NIu0SfQo6wyPQacxYzLG.e8TAtsr5XeyLOQC3nOHzy9hmb31bXKI6', 'photo_2022-06-15_21-11-22.jpg', 'The system is user friendly,The system are functioning well', 'Good job on the system', 'MYTECH', '0/30', '10000.0000', 'First Trade', '1/30', '4.51'),
(2, 'Nur Zafirah binti Khairi', 'fyra@gmail.com', '$2y$10$H.WfDgRQn7AgbY0w3XEXBei3.FyFsmH1xSJBkMmQbD39o3CjCPhwa', 'download.jfif', 'Meetings held are a success,Meetings objective achieved', 'I understand all the proposal of the meeting', 'MSNIAGA', '12/30', '40000.0000', 'Forth Trade', '22/30', '7.64'),
(3, 'Siti Nurquzaimah Binti Sulaiman', 'joonie@gmail.com', '$2y$10$FD1Scpd5.HfwEQdlxpqxzuM1.6CT4c/M9S6uJipGVbn.k7IxZpXuq', 'photo6309717037462695989.jpg', 'The system is user friendly,The system are functioning well,Meetings objective achieved', 'Good Work', 'HIBISCS', '8/30', '22000.0000', 'Second Trade', '18/30', '3.79'),
(4, 'Nur Atirah Najwa binti Hasim', 'najwa@gmail.com', '$2y$10$BEwMAznVGlbsT05V0sFeku8JYBtZDsgqPU8NkEFMoTCTfFrkZ6nQi', 'wallpaper.png', 'The system are functioning well,Meetings objective achieved', 'Good user interface', 'NAIS', '10/30', '29000.0000', 'Third Trade', '11/30', '6.83');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
