-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 27, 2024 at 01:19 PM
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
  `album_name` varchar(50)  NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `album_cover` varchar(500) NOT NULL
);

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `user_id`, `album_name`, `created_at`, `album_cover`) VALUES
(1, 1, 'Car', '2024-03-27 10:19:59', 'Rectangle 516 (1).png'),
(2, 1, 'BMW', '2024-03-27 13:23:18', 'Rectangle 623.png'),
(3, 1, 'BMW', '2024-03-27 13:23:47', 'Rectangle 623.png'),
(4, 1, 'BMW', '2024-03-27 13:24:32', 'Rectangle 516 (2).png'),
(5, 1, 'audi', '2024-03-27 15:27:07', 'Rectangle 623.png');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `images` varchar(500) DEFAULT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `album_id` int NOT NULL
);

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `user_id`, `images`, `create_at`, `album_id`) VALUES
(1, 1, 'Rectangle 623.png', '2024-03-27 18:46:01', 1),
(2, 1, 'Rectangle 624.png', '2024-03-27 18:46:20', 1),
(3, 1, 'Rectangle 625.png', '2024-03-27 18:46:20', 1),
(4, 1, 'Rectangle 628.png', '2024-03-27 18:46:20', 1),
(5, 1, 'Rectangle 629.png', '2024-03-27 18:46:20', 1),
(6, 1, 'Rectangle 630.png', '2024-03-27 18:46:20', 1),
(7, 1, 'Rectangle 631.png', '2024-03-27 18:46:20', 1),
(8, 1, 'Rectangle 632.png', '2024-03-27 18:46:20', 1),
(9, 1, 'Rectangle 633.png', '2024-03-27 18:46:20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `country` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `hobbies` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `profile_img` varchar(500) DEFAULT NULL
) ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `country`, `gender`, `hobbies`, `created_at`, `profile_img`) VALUES
(1, 'Anurag', 'Thakur', 'anuragthakur123@gmail.com', '$2y$10$pCGCbiHn9M0bLb/TJ909lO5aG9ycngH8Vtqnp0U2xgsfBZnp1XfeW', 'India', 'male', 'Listening to music,Singing', '2024-03-20 07:39:36', 'boy.png'),
(2, 'Karan', 'Singh', 'karan@gmail.com', '$2y$10$pCGCbiHn9M0bLb/TJ909lO5aG9ycngH8Vtqnp0U2xgsfBZnp1XfeW', 'India', 'male', 'Listening to music,Dancing', '2024-03-20 13:04:27', NULL),
(3, 'Amity', 'Floyd', 'pivunobody@mailinator.com', '$2y$10$yXgGEqc5RoyaHiWYVO5qZeTTnIA.ISIBmAUAqYtv8lH/OJnvKuSvK', 'Sri Lanka', 'female', 'Listening to music,Dancing,Singing', '2024-03-21 05:37:45', NULL),
(4, 'Dacey', 'Nicholson', 'webytuh@mailinator.com', '$2y$10$JXUXxWzCrDcJx0tzpFpUYuN5sSekkfdDqvTfKgQSZ9u/c/z2XFZoy', 'China', 'male', 'Listening to music,Singing', '2024-03-21 05:38:21', NULL),
(5, 'Hayley', 'Dunn', 'bawo@mailinator.com', '$2y$10$7oExSr29Fphxxnr2mXzMd.Cc53BuzldilUISdkjR3jVHa8eCJcd1a', 'Sri Lanka', 'female', 'Listening to music', '2024-03-21 11:25:23', NULL),
(6, 'Hayley', 'Farley', 'kyfahole@mailinator.com', '$2y$10$GMGmf8l.T1MXCllEd0YBIeju35AkPc1hP.9dCtCExm3iZEVvdvAMq', 'U.S.A', 'female', 'Dancing,Singing', '2024-03-22 11:56:26', NULL),
(7, 'Wyoming', 'Key', 'rygugibal@mailinator.com', '$2y$10$xB/nGyOs/at6/FM3e7Oy6etPsr0B2oj/NmmiA4.qlFu1/cUp5Fw7S', 'South Korea', 'female', 'Listening to music', '2024-03-22 11:57:12', NULL);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
