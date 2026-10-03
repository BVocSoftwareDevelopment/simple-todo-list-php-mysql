-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2025 at 11:12 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todo_list`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `task` varchar(255) NOT NULL,
  `due_date` date NOT NULL,
  `status` enum('pending','in progress','completed','overdue') DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `task`, `due_date`, `status`, `created_at`) VALUES
(5, 'machine problem 2', '2025-02-04', 'completed', '2025-02-02 07:02:51'),
(7, 'machine problem 3', '2025-02-03', 'completed', '2025-02-02 07:38:29'),
(8, 'machine problem 4', '2025-02-04', 'completed', '2025-02-02 08:53:13');

-- --------------------------------------------------------

--
-- Table structure for table `task_history`
--

CREATE TABLE `task_history` (
  `id` int(11) NOT NULL,
  `task` varchar(255) NOT NULL,
  `due_date` date NOT NULL,
  `status` enum('completed','deleted') NOT NULL,
  `completed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `task_history`
--

INSERT INTO `task_history` (`id`, `task`, `due_date`, `status`, `completed_at`) VALUES
(1, 'machine problem 1', '2025-02-05', 'completed', '2025-02-02 06:51:52'),
(2, 'machine problem 1', '2025-02-05', 'deleted', '2025-02-02 06:52:08'),
(3, 'machine problem 2', '2025-02-04', 'completed', '2025-02-02 07:08:01'),
(4, 'machine problem 1', '2025-02-03', 'deleted', '2025-02-02 07:10:08'),
(5, 'machine problem 2', '2025-02-21', 'deleted', '2025-02-02 07:38:20'),
(6, 'machine problem 3', '2025-02-03', 'completed', '2025-02-02 08:52:44'),
(7, 'machine problem 3', '2025-02-03', 'completed', '2025-02-02 08:52:44'),
(8, 'machine problem 3', '2025-02-03', 'completed', '2025-02-02 08:52:44'),
(9, 'machine problem 3', '2025-02-03', 'completed', '2025-02-02 08:52:44'),
(10, 'machine problem 4', '2025-02-04', 'completed', '2025-02-02 08:53:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'chuck02', '$2y$10$eXlewW1OuDgDoFdssxRH9.3R1r8zFAK3nh6sEcspMNY9iLu3MpNfG', '2025-02-02 09:06:05'),
(2, 'calvin', '$2y$10$mBY7mDBJ4pHaHFfCTbr/Ze3pdHf1p63YrT/jZuYMdb8khvHuayttW', '2025-02-03 09:52:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_history`
--
ALTER TABLE `task_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `task_history`
--
ALTER TABLE `task_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
