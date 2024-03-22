-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 22, 2024 at 11:24 AM
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
  `album_name` varchar(50) NOT NULL,
  `album_image` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `user_id`, `album_name`, `album_image`, `created_at`) VALUES
(1, 1, '', '', '2024-03-20 17:27:23'),
(2, 1, 'Car', 'Screenshot from 2024-03-01 11-12-23.png', '2024-03-20 17:27:29'),
(3, 1, '', '', '2024-03-20 18:05:07'),
(4, 1, '', '', '2024-03-20 18:05:09'),
(5, 1, '', '', '2024-03-20 18:46:04');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `profile_img` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `images` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `user_id`, `profile_img`, `images`, `create_at`) VALUES
(1, 1, 'Rectangle 620.png', NULL, '2024-03-22 13:17:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `country` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `hobbies` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `country`, `gender`, `hobbies`, `created_at`) VALUES
(1, 'Anurag', 'Thakur', 'anuragthakur123@gmail.com', '$2y$10$pCGCbiHn9M0bLb/TJ909lO5aG9ycngH8Vtqnp0U2xgsfBZnp1XfeW', 'India', 'male', 'Listening to music,Singing', '2024-03-20 07:39:36'),
(2, 'Karan', 'Singh', 'karan@gmail.com', '$2y$10$pCGCbiHn9M0bLb/TJ909lO5aG9ycngH8Vtqnp0U2xgsfBZnp1XfeW', 'India', 'male', 'Listening to music,Dancing', '2024-03-20 13:04:27'),
(3, 'Amity', 'Floyd', 'pivunobody@mailinator.com', '$2y$10$yXgGEqc5RoyaHiWYVO5qZeTTnIA.ISIBmAUAqYtv8lH/OJnvKuSvK', 'Sri Lanka', 'female', 'Listening to music,Dancing,Singing', '2024-03-21 05:37:45'),
(4, 'Dacey', 'Nicholson', 'webytuh@mailinator.com', '$2y$10$JXUXxWzCrDcJx0tzpFpUYuN5sSekkfdDqvTfKgQSZ9u/c/z2XFZoy', 'China', 'male', 'Listening to music,Singing', '2024-03-21 05:38:21'),
(5, 'Hayley', 'Dunn', 'bawo@mailinator.com', '$2y$10$7oExSr29Fphxxnr2mXzMd.Cc53BuzldilUISdkjR3jVHa8eCJcd1a', 'Sri Lanka', 'female', 'Listening to music', '2024-03-21 11:25:23');

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
  ADD KEY `img_user_id` (`user_id`);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  ADD CONSTRAINT `img_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
