-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2022 at 07:49 AM
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
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `id` int(20) NOT NULL,
  `c_id` int(20) NOT NULL,
  `c_username` text NOT NULL,
  `bookname` text NOT NULL,
  `authorname` varchar(30) NOT NULL,
  `publisher` varchar(30) NOT NULL,
  `booklanguage` varchar(20) NOT NULL,
  `bookedition` text NOT NULL,
  `numberofpages` int(15) NOT NULL,
  `description` text NOT NULL,
  `dob` int(10) NOT NULL,
  `bookcondition` varchar(100) NOT NULL,
  `bookusedfor` text NOT NULL,
  `booksavailable` int(10) NOT NULL,
  `image` varchar(5000) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`id`, `c_id`, `c_username`, `bookname`, `authorname`, `publisher`, `booklanguage`, `bookedition`, `numberofpages`, `description`, `dob`, `bookcondition`, `bookusedfor`, `booksavailable`, `image`, `created_at`, `updated_at`) VALUES
(11, 0, '', 'marvel', 'asd', 'ghh', 'hjn', 'hjj', 0, 'bhjk', 2022, 'hsuih', 'ihsis', 0, '', '2022-09-23 18:38:46', '2022-09-23 18:38:46'),
(12, 0, '', 'spider', 'dq', 'nih', 'hubs', 'busbusubh', 0, 'nb', 2022, 'iubssb', 'uu', 0, '', '2022-09-23 18:40:26', '2022-09-23 18:40:26'),
(13, 0, '', 'ironman', 'jhbsbhj', 'jhb', 'bjsb', 'sbikk', 0, 'kbskb', 2022, 'kbsk', 'sk', 0, '', '2022-09-23 18:49:47', '2022-09-23 18:49:47'),
(14, 0, '', 'eef', 'kj', 'kndd', 'injdind', 'kj', 0, 'knj', 2022, 'jhb', 'indd', 0, '', '2022-09-23 19:21:20', '2022-09-23 19:21:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
