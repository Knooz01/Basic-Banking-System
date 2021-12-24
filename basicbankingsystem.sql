-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2021 at 04:13 AM
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
-- Database: `basicbankingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `SNo` int(11) NOT NULL,
  `Sender` varchar(30) NOT NULL,
  `Receiver` varchar(30) NOT NULL,
  `Balance` int(20) NOT NULL,
  `DateTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`SNo`, `Sender`, `Receiver`, `Balance`, `DateTime`) VALUES
(1, 'asma', 'Knooz Fatima', 1000, '2021-12-22 01:39:42'),
(2, 'werda', 'zara', 20, '2021-12-22 01:40:01'),
(3, 'Muhammad Ali', 'Knooz Fatima', 200, '2021-12-24 00:40:01'),
(4, 'Muhammad Ali', 'Knooz Fatima', 200, '2021-12-24 00:44:39'),
(5, 'saba', 'sunny', 20, '2021-12-24 00:48:01'),
(6, 'saba', 'sunny', 20, '2021-12-24 00:48:35'),
(7, 'saba', 'sunny', 10, '2021-12-24 00:49:13'),
(8, 'saba', 'sunny', 10, '2021-12-24 00:51:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(2, 'Muhammad Ali', 'ali.edu@gmail.com', 19800),
(1, 'Knooz Fatima', 'kf.edu@gmail.com', 10000),
(3, 'saba', 'saba.edu@gmail.com', 40),
(4, 'asma', 'asma.edu@gmail.com', 3000),
(5, 'sunny', 'sunny.edu@gmail.com', 220),
(6, 'zara', 'zara.edu@gmail.com', 2400),
(7, 'don', 'don.edu@gmail.com', 2000),
(8, 'sonu', 'sonu.edu@gmail.com', 4200),
(9, 'werda', 'werda.edu@gmail.com', 3020),
(10, 'kapil', 'kapil.edu@gmail.com', 3000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`SNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `SNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
