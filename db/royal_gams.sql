-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2017 at 01:16 PM
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
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(20) NOT NULL,
  `purpose` varchar(1000) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `purpose`, `amount`, `date`) VALUES
(19, 'a', '23', '2017-04-12'),
(20, 'asas', 'dsd', '2017-04-05'),
(21, 'jkk', 'lklk', '2017-04-06'),
(22, 'bb', 'bbb', '2017-04-05');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(10) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `instock` varchar(100) NOT NULL,
  `paid` varchar(100) NOT NULL,
  `due` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `product_id`, `type`, `weight`, `price`, `instock`, `paid`, `due`, `date`) VALUES
(1, '000124', 'Ring', '.54', '7000', '4', '6000', '1000', '2017-01-18'),
(2, ' 2235 ', ' Ring ', ' .56 ', ' 6000 ', ' 4', ' 10000 ', ' 2000 ', ' 2017-01-21 '),
(4, ' 2235 ', ' Ring ', ' .56 ', ' 6000 ', ' 4 ', ' 10000 ', ' 2000 ', ' 2017-01-21 ');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `desg` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `name`, `desg`, `salary`, `phone`, `address`, `status`) VALUES
(1, 'tom', 'executive ', '15000', '012546786654', 'mirpur ', 'Active'),
(2, 'jerry', 'excutive', '15000', '1546452', 'Mirpur 10', 'Inactive'),
(3, 'jerry', 'excutive', '15000', '1546452', 'Mirpur 10', 'Inactive'),
(4, 'dsa', 'sada', '1400', 'asdsad', 'asdsad', 'dasdsa'),
(5, 'as', 'asd', 'asd', 'asd', 'as', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `salary_paid`
--

CREATE TABLE `salary_paid` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary_paid`
--

INSERT INTO `salary_paid` (`id`, `name`, `amount`, `status`, `date`) VALUES
(1, 'tom', '15000', 'Active', '2017-04-13'),
(2, 'a', '200', 'Inactive', '2017-04-25'),
(3, 'b', '10', 'inactive', '2017-04-13');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `date`, `product_id`, `type`, `weight`, `amount`, `price`) VALUES
(1, '2017-04-13', '0220202', 'aqib', '.6', '2', '400'),
(2, '', '003', 'Stone', '.3', '73', '999'),
(3, '', '000011', 'Ring', '.54', '8', '8000'),
(4, '', '000011', 'Ring', '.54', '4', '8000'),
(5, '', '000011', 'Ring', '.54', '4', '8000'),
(6, '', '003', 'Stone', '.3', '9', '999');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(10) NOT NULL,
  `product_id` varchar(10) NOT NULL,
  `type` varchar(50) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `price` varchar(10) NOT NULL,
  `amount` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `product_id`, `type`, `weight`, `price`, `amount`) VALUES
(4, '000003', 'Ring', '.4', '700', '5'),
(6, ' 000005', ' Ring', ' .4', '8000', ' 10'),
(8, '000005', 'Ring', '.54', '8000', '4'),
(12, ' 000008', ' Ring', ' .54', '10000', ' 4'),
(13, '000010', 'Ring', '.54', '8000', '4'),
(14, '000011', 'Ring', '.54', '8000', '4'),
(15, '000012', 'Ring', '.54', '8000', '4'),
(17, ' 000001', ' user', ' .54', '8000', ' 10'),
(18, '000001', 'user', '.54', '8000', '1000'),
(19, '000012', 'Ring', '.54', '8000', '4'),
(20, '000012', 'Ring', '.54', '8000', '4'),
(21, '000014', 'Ring', '.54', '8000', '4'),
(22, '000017', 'Ring', '.54', '8000', '4'),
(23, '000017', 'Ring', '.54', '8000', '4'),
(24, '000002', 'Ring', '.54', '8000', '4'),
(25, '000002', 'Ring', '.54', '8000', '4'),
(26, '0000012', 'Ring', '.54', '8000', '4'),
(27, '0000014', 'Ring', '.54', '8000', '4'),
(28, '0000047', 'Ring', '.54', '8000', '4'),
(29, '0000071', 'Ring', '.54', '8000', '4'),
(30, '0000014', 'Ring', '.54', '8000', '7'),
(31, '000001', 'Ring', '.54', '8000', '4'),
(32, ' 21546', 'Ring', '  .54', '8000', '  5'),
(33, '000001', 'Ring', '.54', '8000', '4'),
(34, '000001', 'Ring', '.54', '8000', '4'),
(35, '000001', 'Ring', '.54', '8000', '4'),
(36, '0000045', 'Ring', '.54', '8000', '4'),
(37, '0000010', 'Ring', '.4', '8000', '4'),
(38, '000078', 'Ring', '.54', '7000', '4'),
(39, '0000014', 'Ring', '.54', '8000', '4'),
(40, '000001', 'Ring', '.54', '8000', '4'),
(41, '000001', 'Ring', '.54', '8000', '4'),
(42, '000001', 'Ring', '.54', '8000', '4'),
(43, '000001', 'Ring', '.54', '8000', '4'),
(44, '000001', 'Ring', '.54', '8000', '4'),
(45, '000001', 'Ring', '.54', '8000', '4'),
(46, '000001', 'Ring', '.54', '8000', '4'),
(47, '000001', 'Ring', '.54', '8000', '4'),
(48, '000001', 'Ring', '.54', '8000', '4'),
(49, '000002', 'Ring', '.54', '8000', '4'),
(50, '000002', 'Ring', '.54', '8000', '4'),
(51, '000001', 'Ring', '.54', '8000', '4'),
(52, '000001', 'Ring', '.54', '8000', '4'),
(53, '000001', 'Ring', '.54', '8000', '4'),
(54, '000001', 'Ring', '.54', '8000', '4'),
(55, '0000085', 'Ring', '.54', '8000', '4'),
(56, '000001', 'Ring', '.54', '8000', '4'),
(57, '000001', 'Ring', '.54', '8000', '4'),
(59, '000001', 'Ring', '.54', '8000', '4'),
(60, '000001', 'Ring', '.54', '8000', '4'),
(61, '000001', 'Ring', '.54', '8000', '1000'),
(62, '000001', 'Ring', '.54', '8000', '1000'),
(63, '003', 'Stone', '.3', '999', '9');

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

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `name`, `date_time`) VALUES
(1, 'rumi', '2017-04-12 09:20:11'),
(2, 'aqib', '2017-04-12 09:21:13'),
(4, 'emon', '2017-04-12 09:52:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary_paid`
--
ALTER TABLE `salary_paid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stone`
--
ALTER TABLE `stone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `salary_paid`
--
ALTER TABLE `salary_paid`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `stone`
--
ALTER TABLE `stone`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
