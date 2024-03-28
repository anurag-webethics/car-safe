-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 28, 2024 at 12:23 PM
-- Server version: 8.0.36-0ubuntu0.20.04.1
-- PHP Version: 8.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `album_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `album_cover` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `user_id`, `album_name`, `created_at`, `album_cover`) VALUES
(1, 1, 'BMW', '2024-03-28 11:20:02', 'Rectangle 516 (1).png'),
(2, 1, 'audi', '2024-03-28 11:20:18', 'Rectangle 623.png'),
(3, 2, 'Car', '2024-03-28 11:49:17', 'Rectangle 624.png');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `images` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `album_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `user_id`, `images`, `create_at`, `album_id`) VALUES
(1, 1, 'Rectangle 516 (1).png', '2024-03-28 11:23:01', 1),
(2, 1, 'Rectangle 516 (2).png', '2024-03-28 11:23:01', 1),
(3, 1, 'Rectangle 623.png', '2024-03-28 11:23:01', 1),
(4, 1, 'Rectangle 628.png', '2024-03-28 11:23:01', 1),
(5, 1, 'Rectangle 630.png', '2024-03-28 11:23:01', 1),
(6, 1, 'Rectangle 633.png', '2024-03-28 11:23:01', 1),
(7, 1, 'Rectangle 516.png', '2024-03-28 11:26:44', 2),
(8, 1, 'Rectangle 629.png', '2024-03-28 11:26:44', 2),
(9, 1, 'Rectangle 630.png', '2024-03-28 11:26:44', 2),
(10, 1, 'Rectangle 631.png', '2024-03-28 11:26:44', 2),
(11, 1, 'Rectangle 632.png', '2024-03-28 11:26:44', 2),
(12, 1, 'Rectangle 625.png', '2024-03-28 11:40:13', 2),
(13, 1, 'Rectangle 516.png', '2024-03-28 11:44:24', 2),
(14, 2, 'Rectangle 623.png', '2024-03-28 11:49:52', 3),
(15, 2, 'Rectangle 624.png', '2024-03-28 11:49:52', 3),
(16, 2, 'Rectangle 625.png', '2024-03-28 11:49:52', 3),
(17, 2, 'Rectangle 628.png', '2024-03-28 11:49:52', 3),
(18, 2, 'Rectangle 628.png', '2024-03-28 12:07:13', 3),
(19, 2, 'Rectangle 625.png', '2024-03-28 12:07:25', 3),
(20, 2, 'Rectangle 624.png', '2024-03-28 12:17:34', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `fname` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `lname` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `country` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `gender` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `hobbies` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `profile_img` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `country`, `gender`, `hobbies`, `created_at`, `profile_img`) VALUES
(1, 'Anurag', 'Thakur', 'anuragthakur123@gmail.com', '$2y$10$5.kHluji3ot9Mo09Z/OcSeyXnzhVYBGZFNfOav3v0LyNder4lxrNS', 'India', 'male', 'Listening to music,Watching to movies', '2024-03-28 05:45:54', 'boy.png'),
(2, 'Yardley', 'Chambers', 'karan123@gmail.com', '$2y$10$BPdW.UHbGbuaNC64g8z/POJLw4nudWJt3OosIeN/iuM6FgzESRAma', 'India', 'male', 'Listening to music,Dancing,Watching to movies,Singing', '2024-03-28 06:18:41', 'Rectangle 620.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `img_user_id` (`user_id`),
  ADD KEY `user_album_id` (`album_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `img_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_album_id` FOREIGN KEY (`album_id`) REFERENCES `album` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
