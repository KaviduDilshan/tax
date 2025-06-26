-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2025 at 01:41 PM
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
-- Table structure for table `corporate_tax`
--

CREATE TABLE `corporate_tax` (
  `cor_id` int(11) NOT NULL,
  `c_id` int(11) DEFAULT NULL,
  `reg_date` date DEFAULT NULL,
  `t_year` int(11) DEFAULT NULL,
  `sector` int(100) DEFAULT NULL,
  `bis_profit` decimal(13,2) DEFAULT NULL,
  `total_tax` decimal(13,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `corporate_tax`
--

INSERT INTO `corporate_tax` (`cor_id`, `c_id`, `reg_date`, `t_year`, `sector`, `bis_profit`, `total_tax`) VALUES
(1, 64, '2025-06-26', 2025, 3, 100.00, 15.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `corporate_tax`
--
ALTER TABLE `corporate_tax`
  ADD PRIMARY KEY (`cor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `corporate_tax`
--
ALTER TABLE `corporate_tax`
  MODIFY `cor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
