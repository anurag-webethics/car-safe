-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 12, 2024 at 01:29 PM
-- Server version: 8.0.36-0ubuntu0.20.04.1
-- PHP Version: 8.3.6

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
(3, 2, 'Car', '2024-03-28 11:49:17', 'Rectangle 624.png'),
(4, 1, 'BMW', '2024-04-01 12:55:45', 'Rectangle 629.png');

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
(76, 1, 'Rectangle 625.png', '2024-04-01 10:56:26', 2),
(78, 1, 'Rectangle 629.png', '2024-04-01 10:56:26', 2),
(87, 1, 'Rectangle 516 (2).png1711949880', '2024-04-01 11:08:00', 2),
(122, 1, 'Rectangle 629.png1711955832', '2024-04-01 12:47:12', 2),
(123, 1, 'Rectangle 630.png1711955832', '2024-04-01 12:47:12', 2),
(124, 1, 'Rectangle 631.png1711955832', '2024-04-01 12:47:12', 2),
(125, 1, 'Rectangle 632.png1711955832', '2024-04-01 12:47:12', 2),
(131, 1, 'Rectangle 625.png1711955857', '2024-04-01 12:47:37', 1),
(132, 1, 'Rectangle 628.png1711955857', '2024-04-01 12:47:37', 1),
(133, 1, 'Rectangle 629.png1711955857', '2024-04-01 12:47:37', 1),
(134, 1, 'Rectangle 630.png1711955857', '2024-04-01 12:47:37', 1),
(138, 1, 'Rectangle 623.png1711956356', '2024-04-01 12:55:56', 4),
(139, 1, 'Rectangle 624.png1711956356', '2024-04-01 12:55:56', 4),
(140, 1, 'Rectangle 625.png1711956356', '2024-04-01 12:55:56', 4);

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
(2, 'Yardley', 'Chambers', 'karan123@gmail.com', '$2y$10$BPdW.UHbGbuaNC64g8z/POJLw4nudWJt3OosIeN/iuM6FgzESRAma', 'India', 'male', 'Listening to music,Dancing,Watching to movies,Singing', '2024-03-28 06:18:41', 'Rectangle 620.png'),
(3, 'Ivan', 'Jones', 'mozyze@mailinator.com', '$2y$10$g51GtkH6Omrp/71OD5xY8.noevm06Decxj5me5zme/OGLIJaZweR2', 'Sri Lanka', 'female', 'Listening to music,Watching to movies,Singing', '2024-03-29 10:28:36', NULL),
(4, 'Louis', 'Mccoy', 'hocupidezy@mailinator.com', '$2y$10$pHs04S3umcFiO/7CiGEeuOm47GJCSYULA6AkXAV9LI3skSo91V5Ru', 'Pakistan', 'male', 'Listening to music,Dancing,Watching to movies,Singing', '2024-04-01 07:29:01', 'boy.png'),
(5, 'Hector', 'Nixon', 'bybuqiwy@mailinator.com', '$2y$10$b/gBHyGD/tBhOJSygRV/KenNnbhBvQ.LW4fuknIpqVeCuUsVbFFY2', 'Sri Lanka', 'female', 'Dancing', '2024-04-01 07:48:01', 'default.jpg');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
