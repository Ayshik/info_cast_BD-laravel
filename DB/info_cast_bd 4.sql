-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2021 at 08:29 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `info_cast_bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`, `type`) VALUES
(1, 'Ayshik Khan', 'ayshik@gmail.com', '123', 'customer'),
(2, 'Ayshik Khan', 'ayshik1@gmail.com', '123', 'moderator'),
(3, 'Ayshik Khan', 'ayshik2@gmail.com', '123', 'admin'),
(8, 'a', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `modarator`
--

CREATE TABLE `modarator` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `modarator`
--

INSERT INTO `modarator` (`id`, `name`, `email`, `phone`, `address`, `password`) VALUES
(6, 'Saad', 'Saad@gmail.com', '01775503498', 'Dhaka', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `speed` varchar(100) NOT NULL,
  `pricinglock` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `name`, `speed`, `pricinglock`, `price`, `category`) VALUES
(1, 'Kids Package 1', '8 Mbps', '1 Year', '1200 TK', 'Kid'),
(2, 'Kids Package 2', '15 Mbps', '1 Year', '1000', 'Kid'),
(3, 'Gamer package 1', '20 Mbps', '2 years', '1500 Tk', 'Gamers'),
(4, 'Gamer package 2', '25 Mbps', '3 Year', '3000 TK', 'Gamers'),
(5, 'Student package 1', '10 Mbps', '1 Year', '1000 Tk', 'Student'),
(6, 'Student package 2', '20 Mbps', '1 Year', '2000 Tk', 'Student'),
(7, 'Gamer package 3', '40 Mbps', '2 years', '3000 Tk', 'Gamers'),
(8, 'Student package 3', '25 Mbps', '1 Year', '2500 Tk', 'Student'),
(9, 'Personal package', '10 Mbps', '6 Month', '600 Tk', 'Special offers');

-- --------------------------------------------------------

--
-- Table structure for table `requestpack`
--

CREATE TABLE `requestpack` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `postcode` varchar(100) NOT NULL,
  `packagename` varchar(100) NOT NULL,
  `packageprice` varchar(100) NOT NULL,
  `totalprice` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `lstatus` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requestpack`
--

INSERT INTO `requestpack` (`id`, `name`, `company`, `email`, `phone`, `country`, `address`, `city`, `state`, `postcode`, `packagename`, `packageprice`, `totalprice`, `status`, `lstatus`) VALUES
(1, 'ayshik', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'pending', ''),
(3, 'q', 'q', 'q', '99999999999', 'Bangladesh', 'q', 'q', 'q', '6669', 'Kids Pack 2', '1000', '3000', 'pending', ''),
(4, 'a', 'b', 'b', 'b', 'Bangladesh', 'hcjdschj', 'b', 'b', '4567', 'Kids Pack 2', '1000', '3000', 'paid', 'Active'),
(5, 'b', 'b', 'b', 'b', 'Bangladesh', 'hcjdschj', 'b', 'b', '4567', 'Kids Pack 2', '1000', '3000', 'unpaid', 'Inactive'),
(6, 'ayshik', 'It LTD', 'ayshik@gmail.com', '01775503498', 'Bangladesh', 'Dhaka', 'Kuril', 'Kuril', '4567', 'Kids Pack 2', '1000', '3000', 'paid', 'Active'),
(7, 'c', 'b', 'b', 'b', 'Bangladesh', 'hsabcjhab', 'b', 'b', '4567', 'Kids Pack 2', '1000', '3000', 'unpaid', 'Inactive'),
(8, 'j', 'j', 'j', 'j', 'Bangladesh', 'j', 'k', 'j', '6777', 'Kids Pack 2', '1000', '3000', 'pending', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `token` varchar(64) NOT NULL,
  `created_at` datetime NOT NULL,
  `expired_at` datetime DEFAULT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `token`
--

INSERT INTO `token` (`id`, `email`, `token`, `created_at`, `expired_at`, `type`) VALUES
(36, 'ayshik@gmail.com', 'jXy9M0emLPvfzVO28e46NyHVpcP7VCGaNCZOMFMYdTgT7ejLW6Z0suhGyzPRGHsM', '2021-12-19 11:05:42', NULL, ''),
(37, 'a', '7rQZUNgSc25duXip1FQkrf1FV581euc3xtvFcZp5lqw6XRmz66IdNRj66uJkNNBe', '2021-12-20 09:06:11', NULL, 'a'),
(38, 'ayshik@gmail.com', 'QyxdcRJ6aB3jJWJE4CC3PwJlf691lrCO5FZiYaDQZ7fsAIU5h1b10cCBB2PY3PsU', '2021-12-20 09:08:45', NULL, 'customer'),
(39, 'ayshik2@gmail.com', 'Fy9FpKky4OKlA9yGKcUF7XRzLNVaTcuhVY4DA9YDu6tikRBqwfg2971HlMouOe8y', '2021-12-20 09:23:32', NULL, 'admin'),
(40, 'ayshik@gmail.com', 'AXxFgTc7mKG7E2ZUPTmdhTKDcgEDMNYONnEjbhF2Rg5cn1p0tLcPqnuya1ZaHf5N', '2021-12-20 09:24:26', NULL, 'customer'),
(41, 'ayshik1@gmail.com', 'MGtora863Gr6MkTgD8wnlurAV0Ef9mgMATJL6JFQJpfQEEwsmLkZqt5bOb77rxky', '2021-12-20 09:33:28', NULL, 'moderator'),
(42, 'ayshik@gmail.com', 'W6gq8LNTpKgNePbACMchlMKGSOtFWo1R2ro0qxeSTaHPApopOLQTeKPcQw32VlzX', '2021-12-20 10:08:53', NULL, 'customer'),
(43, 'ayshik2@gmail.com', 'k9VnwQ7UAZUuYO1d0tDW4uMOvDgk83Mj6kEmb66qTXubMxf5ojMAt92fwFJUOrbd', '2021-12-20 20:51:33', NULL, 'admin'),
(44, 'ayshik2@gmail.com', 'OZdJKc2ThayTMSJ0XY8UK5bS0dIcenZsJrjAlV9oiZKxUmTOORwBTo4uV9KNhAMH', '2021-12-20 22:24:27', NULL, 'admin'),
(45, 'ayshik2@gmail.com', 'IAyXn66rMMvq8A8eNW85yDmPFkm8HuTGWZAZt51Qdk2qjbCnuFXt9dUTexmucICn', '2021-12-20 22:32:52', NULL, 'admin'),
(46, 'ayshik2@gmail.com', 'W6KvkjVK7p70SdQuV9ICrylteUuJSyyVuP8D4roqlvifhKd94N3eHnR6HYhbPvVG', '2021-12-20 22:38:36', NULL, 'admin'),
(47, 'ayshik2@gmail.com', 'upZKTGrtd1NJyfFDRYQFSz5GZRwMaB8WfT7P4oF52A1SWeT5nk2GWAX1vmhTZmhN', '2021-12-20 22:59:12', NULL, 'admin'),
(48, 'ayshik2@gmail.com', '85prwNIupp7dzD3k1mDE3ap9LcZoDEoi5y6JnEKIujFR3rwJRNOmQccBaLSYafs8', '2021-12-20 23:10:49', NULL, 'admin'),
(49, 'ayshik2@gmail.com', 'ptOgDzE2Kxn2Cayfxcpg6mvX6dkXHWPmSxVsomWHMzvXifMu6ANyVfQ77oh3bStw', '2021-12-21 08:55:26', NULL, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modarator`
--
ALTER TABLE `modarator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requestpack`
--
ALTER TABLE `requestpack`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `modarator`
--
ALTER TABLE `modarator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `requestpack`
--
ALTER TABLE `requestpack`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `token`
--
ALTER TABLE `token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
