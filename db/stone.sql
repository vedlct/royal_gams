-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2017 at 12:51 PM
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
-- Table structure for table `stone`
--

CREATE TABLE `stone` (
  `id` int(10) NOT NULL,
  `product_id` varchar(10) NOT NULL,
  `stone_name` varchar(100) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `price` varchar(10) NOT NULL,
  `amount` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stone`
--

INSERT INTO `stone` (`id`, `product_id`, `stone_name`, `weight`, `price`, `amount`) VALUES
(4, '3', 'Diamond', '3', '1111', '14'),
(7, '5', '', '565', '33', '33'),
(8, '6', '', '66', '66', '66'),
(9, '003', 'Rubi', '.3', '999', '9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stone`
--
ALTER TABLE `stone`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stone`
--
ALTER TABLE `stone`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
