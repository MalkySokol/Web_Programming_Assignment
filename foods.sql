-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2020 at 05:15 AM
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
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `food` text NOT NULL,
  `number of calories per serving` int(11) NOT NULL,
  `serving size` varchar(6) NOT NULL,
  `food_category` text NOT NULL,
  `id number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`food`, `number of calories per serving`, `serving size`, `food_category`, `id number`) VALUES
('apple', 95, '1', 'fruit', 1),
('grapes', 62, '20', 'fruit', 2),
('peach', 59, '1', 'fruit', 3),
('plum', 30, '1', 'fruit', 4),
('baby carrots', 40, '10', 'vegetable', 5),
('sweet potato', 56, '1/2', 'vegetable', 6),
('corn', 100, '1', 'vegetable', 7),
('bread', 79, '1 ', 'grain', 8),
('cereal flakes', 307, '1 cup', 'grain', 9),
('pasta', 108, '1/2cup', 'grain', 10),
('salmon', 180, '3 oz', 'protein', 11),
('chicken', 128, '3 oz', 'protein', 12),
('meat', 123, '3 oz', 'protein', 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
