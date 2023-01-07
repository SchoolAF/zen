-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2023 at 02:21 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hypross`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(255) NOT NULL,
  `name` varchar(32) NOT NULL,
  `nik` int(16) NOT NULL,
  `bdate` date NOT NULL,
  `bplace` varchar(32) NOT NULL,
  `division` varchar(32) NOT NULL,
  `address` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `nik`, `bdate`, `bplace`, `division`, `address`) VALUES
(6, 'Aliffathur Muhammad Revan', 10000000, '2003-03-11', 'Sibolga', 'OS Developer', 'Sariasih IV, Sarijadi, West Java'),
(7, 'Thomas Liu', 1212121212, '2001-10-03', 'Beijing', 'Kernel Developer', 'Beijing, China'),
(8, 'Viktor Zalkovik', 2121212121, '2293-11-12', 'Krasnoyarsk', 'Kernel Developer', 'Moscow, Russia'),
(9, 'Ethan Clark', 32321323, '2003-03-03', 'London', 'OS Developer', 'London, UK'),
(10, 'Antionio Giucci', 111111111, '2003-07-08', 'Milan', 'OS Developer', 'Milan, Italy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
