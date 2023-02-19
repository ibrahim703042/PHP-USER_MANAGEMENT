-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2023 at 01:20 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_user_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(45) NOT NULL,
  `contact_no` varchar(45) NOT NULL,
  `country` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `image` varchar(255) NOT NULL DEFAULT 'avatar.jpg',
  `about` text NOT NULL DEFAULT 'Bio.........',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `contact_no`, `country`, `address`, `password`, `role_as`, `status`, `image`, `about`, `created_at`) VALUES
(1, 'Ibrahim', 'Kwizera', 'kwizera.ibrahim@gmail.com', '75703042', 'BI', '', '$2y$10$OIUsdr5Rnefy2mmHY.RSh.Ic8uiwxAvX9a0SV8ep/F/q1T8Sy22fW', 1, 1, '20220705_210905.jpg', 'Bio.........', '2023-02-19 12:26:23'),
(2, 'Irakoze', 'Mossi', 'mossi@gmail.com', '', 'BI', 'Buyenzi 5 Av No 55', '$2y$10$OIUsdr5Rnefy2mmHY.RSh.Ic8uiwxAvX9a0SV8ep/F/q1T8Sy22fW', 0, 1, 'avatar.jpg', 'Bio.........', '2023-02-19 12:56:57'),
(3, 'Kwizera', 'Ibrahim', 'kwiib@biu.bi', '', 'BI', 'Buyenzi 5 Av No 55', '$2y$10$OIUsdr5Rnefy2mmHY.RSh.Ic8uiwxAvX9a0SV8ep/F/q1T8Sy22fW', 2, 1, 'avatar.jpg', 'Bio.........', '2023-02-19 12:57:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
