-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2022 at 05:36 AM
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
-- Database: `bookbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `aadharnumber` int(15) NOT NULL,
  `mobilenumber` int(13) NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `role` varchar(15) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `aadharnumber`, `mobilenumber`, `email`, `address`, `role`, `username`, `password`, `created_at`, `updated_at`) VALUES
(25, 'DHARSHAN KUMAR', 'S', 2147483647, 1234567890, 'abcd@gmail.com', '', 'srg', 'dk', '', '2022-09-21 05:42:38', '2022-09-21 11:12:38'),
(26, 'ravi', 'prasath', 2147483647, 2147483647, 'ravi@gmail.com', '', 'srg', 'Ravi', '12345', '2022-09-21 05:44:15', '2022-09-21 18:56:07'),
(27, 'Madhu', 'Mitha', 2147483647, 2147483647, 'm@gmail.com', '', 'Manager', 'madhu@m', '81dc9bdb52d04dc20036dbd8313ed055', '2022-09-21 06:19:50', '2022-09-21 11:49:50'),
(28, ' KUMAR', 'S', 2147483647, 1234561230, 'acd@gmail.com', '', 'adfhhe', 'etreherh', '81dc9bdb52d04dc20036dbd8313ed055', '2022-09-21 06:24:47', '2022-09-21 11:54:47'),
(29, 'hari', 'prasath', 2147483647, 123654789, 'hari@gmail.com', '', 'dbjhmjhwef', 'hari', '733d7be2196ff70efaf6913fc8bdcabf', '2022-09-21 11:55:48', '2022-09-21 17:25:48');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
