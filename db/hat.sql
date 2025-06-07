-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2025 at 06:00 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
  `tin_number` int(11) NOT NULL,
  `income` int(11) NOT NULL,
  `expences` int(11) NOT NULL,
  `tax_amount` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `images` varchar(255) DEFAULT NULL,
  `pdfs` varchar(255) DEFAULT NULL,
  `exels` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `c_id` int(11) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `mobile` int(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `reg_date` date DEFAULT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`c_id`, `f_name`, `mobile`, `email`, `reg_date`, `user_type`) VALUES
(1, '', 0, '', '2025-06-06', ''),
(4, 'gfhgjnhgjn', 2147483647, 'dilshank404@gmail.com', '2025-06-06', ''),
(5, 'gfhgjnhgjn', 2147483647, 'dilshank404@gmail.com', '2025-06-06', ''),
(6, 'gihan', 1000000001, 'gi@gmil.com', '2025-06-06', ''),
(7, 'gihan', 1000000001, 'gi@gmil.com', '2025-06-06', ''),
(8, 'kavidu', 2147483647, 'dilshank404@gmail.com', '2025-06-06', 'Person');

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
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
