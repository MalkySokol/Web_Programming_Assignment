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
-- Table structure for table `food groups`
--

CREATE TABLE `food groups` (
  `food category` text NOT NULL,
  `recommended number of servings` int(11) NOT NULL,
  `servings per day or week` text NOT NULL,
  `id number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food groups`
--

INSERT INTO `food groups` (`food category`, `recommended number of servings`, `servings per day or week`, `id number`) VALUES
('Fruit', 5, 'day', 1),
('vegetable ', 4, 'day', 2),
('grain', 6, 'day', 3),
('poultry/meat/eggs', 8, 'week', 4),
('fats/oils', 3, 'day', 5),
('fish', 3, 'week', 6),
('dairy', 3, 'day', 7),
('nuts/seeds/beans/legumes', 5, 'week', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food groups`
--
ALTER TABLE `food groups`
  ADD PRIMARY KEY (`id number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food groups`
--
ALTER TABLE `food groups`
  MODIFY `id number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
