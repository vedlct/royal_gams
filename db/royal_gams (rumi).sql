-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2017 at 08:51 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `royal_gams`
--

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE IF NOT EXISTS `expense` (
`id` int(20) NOT NULL,
  `purpose` varchar(1000) NOT NULL,
  `amount` int(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `purpose`, `amount`, `date`) VALUES
(19, 'a', 23, '2017-04-12'),
(20, 'asas', 0, '2017-04-05'),
(21, 'jkk', 0, '2017-04-06'),
(22, 'bb', 0, '2017-04-05');

-- --------------------------------------------------------

--
-- Table structure for table `increment`
--

CREATE TABLE IF NOT EXISTS `increment` (
`id` int(11) NOT NULL,
  `salary_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `previous_salary` int(100) NOT NULL,
  `current_salary` int(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `increment`
--

INSERT INTO `increment` (`id`, `salary_id`, `name`, `previous_salary`, `current_salary`) VALUES
(1, 5, ' as', 1500, 2500),
(2, 4, ' dsa', 2000, 3000),
(3, 4, ' dsa', 1400, 2000),
(4, 5, ' as', 0, 1000),
(5, 1, ' tom', 15000, 15100),
(6, 22, ' dd', 0, 100),
(7, 23, '  qq', 2000, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE IF NOT EXISTS `purchase` (
`id` int(10) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `instock` int(100) NOT NULL,
  `paid` int(100) NOT NULL,
  `due` int(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `product_id`, `type`, `weight`, `price`, `instock`, `paid`, `due`, `date`) VALUES
(1, '000124', 'Ring', '.54', 7000, 4, 6000, 1000, '2017-01-18'),
(4, ' 2235 ', ' Ring ', ' .56 ', 6000, 5, 10000, 2000, ' 2017-01-21 ');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE IF NOT EXISTS `salary` (
`id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `desg` varchar(100) NOT NULL,
  `salary` int(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `name`, `desg`, `salary`, `phone`, `address`, `status`) VALUES
(1, 'tom', 'executive ', 15100, '012546786654', 'mirpur ', 'Active'),
(2, 'jerry', 'excutive', 15000, '1546452', 'Mirpur 10', 'Inactive'),
(3, 'jerry', 'excutive', 15000, '1546452', 'Mirpur 10', 'Inactive'),
(4, 'dsa', 'sada', 2000, 'asdsad', 'asdsad', 'Active'),
(18, 'aa', 'aa', 0, 'aa', 'aa', 'Inactive'),
(19, 'aa', 'aa', 0, 'aa', 'aa', 'Inactive'),
(20, 'zz', 'zz', 0, 'zz', 'zz', 'Active'),
(22, 'dd', 'dd', 100, 'dd', 'dd', 'Active'),
(23, ' qq', ' qq', 5000, ' qq', ' qq', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `salary_paid`
--

CREATE TABLE IF NOT EXISTS `salary_paid` (
`id` int(10) NOT NULL,
  `salary_id` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `salary_paid`
--

INSERT INTO `salary_paid` (`id`, `salary_id`, `name`, `amount`, `status`, `date`) VALUES
(1, '1', 'tom', 15000, 'Active', '2017-04-13'),
(2, '2', 'a', 200, 'Inactive', '2017-04-25'),
(3, '', 'b', 10, 'inactive', '2017-04-13'),
(15, '5', 'as', 0, 'Active', '1492792536'),
(18, '5', 'as', 0, 'Active', '2017-04-21'),
(19, '3', 'jerry', 15000, 'Inactive', '2017-04-21'),
(20, '2', 'jerry', 15000, 'Inactive', '2017-03-29'),
(21, '1', 'tom', 15100, 'Active', '2017-05-14'),
(22, '4', 'dsa', 2000, 'Active', '2017-05-14'),
(23, '1', 'tom', 15100, 'Active', '2017-03-01'),
(24, '2', 'jerry', 15000, 'Inactive', '2017-05-14'),
(25, '23', ' qq', 2000, 'Active', '2017-05-14');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
`id` int(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `amount` int(20) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `date`, `product_id`, `type`, `weight`, `amount`, `price`) VALUES
(1, '2017-04-13', '0220202', 'aqib', '.6', 2, 400),
(2, '', '003', 'Stone', '.3', 73, 999),
(3, '', '000011', 'Ring', '.54', 8, 8000),
(4, '', '000011', 'Ring', '.54', 4, 8000),
(5, '', '000011', 'Ring', '.54', 4, 8000),
(6, '', '003', 'Stone', '.3', 9, 999);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
`id` int(10) NOT NULL,
  `product_id` varchar(10) NOT NULL,
  `type` varchar(50) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `price` int(10) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `product_id`, `type`, `weight`, `price`, `amount`) VALUES
(8, '000005', 'Ring', '.54', 8000, 4),
(12, ' 000008', 'Ring', ' .54', 10000, 4),
(13, '000010', 'Ring', '.54', 8000, 4),
(14, '000011', 'Ring', '.54', 8000, 4),
(15, '000012', 'Ring', '.54', 8000, 4),
(17, ' 000001', 'user', ' .54', 8000, 10),
(18, '000001', 'user', '.54', 8000, 1000),
(19, '000012', 'Ring', '.54', 8000, 4),
(20, '000012', 'Ring', '.54', 8000, 4),
(21, '000014', 'Ring', '.54', 8000, 4),
(22, '000017', 'Ring', '.54', 8000, 4),
(23, '000017', 'Ring', '.54', 8000, 4),
(24, '000002', 'Ring', '.54', 8000, 4),
(25, '000002', 'Ring', '.54', 8000, 4),
(26, '0000012', 'Ring', '.54', 8000, 4),
(27, '0000014', 'Ring', '.54', 8000, 6),
(28, '0000047', 'Ring', '.54', 8000, 0),
(29, '0000071', 'Ring', '.54', 8000, 4),
(30, '0000014', 'Ring', '.54', 8000, 7),
(31, '000001', 'Ring', '.54', 8000, 4),
(32, ' 21546', 'Ring', '  .54', 8000, 5),
(34, '000001', 'Ring', '.54', 8000, 4),
(35, '000001', 'Ring', '.54', 8000, 4),
(36, '0000045', 'Ring', '.54', 8000, 4),
(37, '0000010', 'Ring', '.4', 8000, 4),
(38, '000078', 'Ring', '.54', 7000, 4),
(39, '0000014', 'Ring', '.54', 8000, 4),
(40, '000001', 'Ring', '.54', 8000, 4),
(41, '000001', 'Ring', '.54', 8000, 4),
(42, '000001', 'Ring', '.54', 8000, 4),
(43, '000001', 'Ring', '.54', 8000, 4),
(44, '000001', 'Ring', '.54', 8000, 4),
(45, '000001', 'Ring', '.54', 8000, 4),
(46, '000001', 'Ring', '.54', 8000, 4),
(47, '000001', 'Ring', '.54', 8000, 4),
(48, '000001', 'Ring', '.54', 8000, 4),
(49, '000002', 'Ring', '.54', 8000, 4),
(50, '000002', 'Ring', '.54', 8000, 4),
(51, '000001', 'Ring', '.54', 8000, 4),
(52, '000001', 'Ring', '.54', 8000, 4),
(53, '000001', 'Ring', '.54', 8000, 4),
(54, '000001', 'Ring', '.54', 8000, 4),
(55, '0000085', 'Ring', '.54', 8000, 4),
(56, '000001', 'Ring', '.54', 8000, 4),
(57, '000001', 'Ring', '.54', 8000, 4),
(59, '000001', 'Ring', '.54', 8000, 4),
(60, '000001', 'Ring', '.54', 8000, 4),
(61, '000001', 'Ring', '.54', 8000, 1000),
(63, '003', 'Stone', '.3', 999, 9),
(64, '222', 'Stone', '222', 22, 22);

-- --------------------------------------------------------

--
-- Table structure for table `stone`
--

CREATE TABLE IF NOT EXISTS `stone` (
`id` int(10) NOT NULL,
  `product_id` varchar(10) NOT NULL,
  `stone_name` varchar(100) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `price` int(10) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `stone`
--

INSERT INTO `stone` (`id`, `product_id`, `stone_name`, `weight`, `price`, `amount`) VALUES
(4, '3', 'Diamond', '3', 1111, 14),
(7, '5', '', '565', 33, 33),
(9, ' 003', 'Rubi', '.3', 999, 910),
(10, '222', '222', '222', 22, 22);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
`id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `name`, `date_time`) VALUES
(1, 'rumi', '2017-04-12 09:20:11'),
(2, 'aqib', '2017-04-12 09:21:13'),
(4, 'emon', '2017-04-12 09:52:58');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(100) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `first_name` varchar(1000) NOT NULL,
  `last_name` varchar(1000) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `type` varchar(1000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `first_name`, `last_name`, `phone_number`, `email`, `type`) VALUES
(1, 'admin', 'admin@123', 'Mr Anis', 'Sharkar', '0123114164', 'test@gmail.com', 'Admin'),
(2, 'rumi', '123', 'Mujtaba Rfid', 'Rumi', '0168000000', 'mujtaba.rumi1@gmail.com', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `increment`
--
ALTER TABLE `increment`
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
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `increment`
--
ALTER TABLE `increment`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `salary_paid`
--
ALTER TABLE `salary_paid`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `stone`
--
ALTER TABLE `stone`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
