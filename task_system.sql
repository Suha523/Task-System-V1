-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Sep 30, 2021 at 05:04 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `type` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `type`, `created_at`) VALUES
(1, 'admin', 'admin@task.com', '$2y$10$Af0haQTaWARx01d6ENrc2unYzXnwq43FS6dykmD4NGGDp4ZY2C5Xu', 1, '2021-09-30 15:52:27'),
(2, 'suha', 'suha@task.com', '$2y$10$5yakJMt2Fs0jJC7q42jowuv/UvygL1Oh1HQLbeOgASvGuodZInh4q', 0, '2021-09-30 16:29:07'),
(3, 'ali', 'ali@task.com', '$2y$10$/is7zP42bPK6OdDCs7AJXeDaOG3EVbPEa8Uc5cE.Hh5HvxD9TVdVu', 1, '2021-09-30 16:30:39');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `body` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `user_id`, `title`, `body`, `status`, `created_at`) VALUES
(1, 1, 'task1', 'this is task1', 0, '2021-09-21 21:16:42'),
(2, 3, 'task2', 'this is task2', 0, '2021-09-21 21:18:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `age` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `age`, `status`, `created_at`) VALUES
(1, 'suha', 'suhashehadeh123@gmail.com', '$2y$10$yecLwtIuS329q9ksd8VqQeNKd3XoC4MFLNWwICr9IajfUK/nZS4SO', 0, 0, '2021-09-09 19:46:40'),
(2, 'marwa', 'marwa@gmail.com', '$2y$10$JDJpphxj9E.psFaO5X5wB.ge4CxcABUiewT0DmYqxaTtL7AIA5XM.', 0, 1, '2021-09-09 21:26:05'),
(3, 'aya', 'aya@gmail.com', '$2y$10$ndSSse7QLhQWmFnbyUyg3e/Qz54o7HUwEwBjthgSZMEF4fsx21TNO', 0, 0, '2021-09-09 21:29:26'),
(4, 'evana', 'evana@gmail.com', '$2y$10$eMgmeg70pd7pBOhnvuSc4eqe8e9Hin3XNKAFBHKzX.B4CEhTAy9Ea', 0, 0, '2021-09-09 21:31:47'),
(5, 'roaa', 'roaa@gmail.com', '$2y$10$2D7kP3.oWKpjIto6kKJMo.HQtHh8Ynk2YPKMcfhjMPKsdOs.QKydS', 0, 0, '2021-09-10 18:50:16'),
(6, 'abed', 'abed@gmail.com', '$2y$10$0xQ80h/PDptRL4c7uA878uXe8IWQ6l0EhQfHyY1FJSqb/S6kYpIv2', 0, 0, '2021-09-10 19:05:32'),
(7, 'dana', 'dana@gmail.com', '$2y$10$2cDx9Rbe/GDNkmisYtlFSuNK3ofsS.zp7T0ah.SHGyZdDcB0i/cr2', 0, 0, '2021-09-30 16:23:07');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
