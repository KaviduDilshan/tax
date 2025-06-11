-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2025 at 08:20 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE `tax` (
  `t_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL DEFAULT 0,
  `income` int(11) NOT NULL,
  `expences` int(11) NOT NULL,
  `tax_amount` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `images` varchar(255) DEFAULT NULL,
  `pdfs` varchar(255) DEFAULT NULL,
  `exels` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `c_id` int(11) NOT NULL,
  `f_name` varchar(255) DEFAULT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `reg_date` date DEFAULT NULL,
  `tin_number` varchar(100) DEFAULT NULL,
  `user_type` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`c_id`, `f_name`, `mobile`, `email`, `reg_date`, `tin_number`, `user_type`) VALUES
(1, '', '0', '', '2025-06-06', NULL, 0),
(4, 'gfhgjnhgjn', '2147483647', 'dilshank404@gmail.com', '2025-06-06', NULL, 0),
(5, 'gfhgjnhgjn', '2147483647', 'dilshank404@gmail.com', '2025-06-06', NULL, 0),
(6, 'gihan', '1000000001', 'gi@gmil.com', '2025-06-06', NULL, 0),
(7, 'gihan', '1000000001', 'gi@gmil.com', '2025-06-06', NULL, 0),
(8, 'kavidu', '2147483647', 'dilshank404@gmail.com', '2025-06-06', NULL, 0),
(9, 'asdasd', '0', 'asdasd@wqeqwe.com', '2025-06-07', NULL, 0),
(10, 'asdasd', '123123213', 'rajap.dinukad@gmail.com', '2025-06-07', NULL, 0),
(11, 'Dinesh Rajapakshe', '0777959789', 'rajap.dinukad@gmail.com', '2025-06-07', '0121012', 1),
(12, 'Dinesh Rajapakshe', '0777959789', 'rajap.dinukad@gmail.com', '2025-06-07', '0001212', 1),
(13, 'Dinesh Rajapakshe', '7777777777', 'rajap.dinukad@gmail.com', '2025-06-08', '0121012', 1),
(14, 'Dinesh Rajapakshe', '7777777777', 'rajap.dinukad@gmail.com', '2025-06-08', '0121012', 1),
(15, 'Dinesh Rajapakshe', '3132131312', 'rajap.dinukad@gmail.com', '2025-06-08', '0121012', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tax`
--
ALTER TABLE `tax`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
