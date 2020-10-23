-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2020 at 05:14 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nutrition`
--

-- --------------------------------------------------------

--
-- Table structure for table `favorite foods`
--

CREATE TABLE `favorite foods` (
  `food category` text NOT NULL,
  `user favorite` text NOT NULL,
  `id number` int(11) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favorite foods`
--

INSERT INTO `favorite foods` (`food category`, `user favorite`, `id number`, `userId`) VALUES
('fruit', 'peach', 103, 1003),
('vegetable', 'corn', 104, 1003),
('grain', 'pasta', 105, 1003),
('protein', 'meat', 106, 1003),
('fruit', 'peach', 107, 1000),
('vegetable', 'sweet potato', 108, 1000),
('grain', 'bread', 109, 1000),
('protein', 'chicken', 110, 1000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favorite foods`
--
ALTER TABLE `favorite foods`
  ADD PRIMARY KEY (`id number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `favorite foods`
--
ALTER TABLE `favorite foods`
  MODIFY `id number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
