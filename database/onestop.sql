-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2024 at 01:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onestop`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `main_content` text NOT NULL,
  `full_content` text NOT NULL,
  `title_image` varchar(255) NOT NULL,
  `main_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `main_content`, `full_content`, `title_image`, `main_image`, `created_at`) VALUES
(8, 'tite', 'fssdfsd', '<p>sdfsd</p>', 'C:\\xampp\\htdocs\\One-stop-vascular\\admin\\public/../uploads/photos/6686d0d32d97b_1720111315.png', 'C:\\xampp\\htdocs\\One-stop-vascular\\admin\\public/../uploads/photos/6686d0d32dcd3_1720111315.png', '2024-07-04 16:41:55'),
(9, 'nnj', 'ldgnldf', '<p>jsfjbsdf</p>', '/../uploads/photos/6686d127b1a8a_1720111399.png', '/../uploads/photos/6686d127b1d5d_1720111399.png', '2024-07-04 16:43:19'),
(10, 'trhbsr', 'main content', '<p>yjnytjnyyjy dt km d</p>', 'C:\\xampp\\htdocs\\One-stop-vascular\\admin\\public/../uploads/photos/668790525998c_1720160338.png', 'C:\\xampp\\htdocs\\One-stop-vascular\\admin\\public/../uploads/photos/6687905259b60_1720160338.jpg', '2024-07-05 06:18:58'),
(11, '44', 'g', '<p>gfd</p>', 'C:\\xampp\\htdocs\\One-stop-vascular\\admin\\public/../uploads/photos/66879860ddea0_1720162400.png', 'C:\\xampp\\htdocs\\One-stop-vascular\\admin\\public/../uploads/photos/66879860de099_1720162400.jpg', '2024-07-05 06:53:20'),
(12, 'fewer', 'erwgv', '<p>erg</p>', 'C:\\xampp\\htdocs\\One-stop-vascular\\admin\\public/../uploads/photos/66879bf4e930e_1720163316.jpg', 'C:\\xampp\\htdocs\\One-stop-vascular\\admin\\public/../uploads/photos/66879bf4e9540_1720163316.webp', '2024-07-05 07:08:36'),
(14, 'new try', 'yrh', '<p>trh</p>', 'C:\\xampp\\htdocs\\One-stop-vascular\\admin\\public/../uploads/photos/6687b91b12051_1720170779.png', 'C:\\xampp\\htdocs\\One-stop-vascular\\admin\\public/../uploads/photos/6687b91b121f4_1720170779.png', '2024-07-05 09:12:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `created_at`) VALUES
(1, 'raj', 'kumar', 'raj@gmail.com', '39427bc27697ee48679772e4c07c13c1', '2024-07-04 15:48:59'),
(2, 'onestop', 'vascular', 'onestopvascular@gmail.com', 'f3c3f53fb3f7d0845dfc61494e63daf2', '2024-07-05 06:21:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
