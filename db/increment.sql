-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2017 at 09:05 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `royal_gams`
--

-- --------------------------------------------------------

--
-- Table structure for table `increment`
--

CREATE TABLE `increment` (
  `id` int(11) NOT NULL,
  `salary_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `previous_salary` int(100) NOT NULL,
  `current_salary` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `increment`
--

INSERT INTO `increment` (`id`, `salary_id`, `name`, `previous_salary`, `current_salary`) VALUES
(1, 5, ' as', 1500, 2500),
(2, 4, ' dsa', 2000, 3000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `increment`
--
ALTER TABLE `increment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `increment`
--
ALTER TABLE `increment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
