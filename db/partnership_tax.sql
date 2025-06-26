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
-- Table structure for table `partnership_tax`
--

CREATE TABLE `partnership_tax` (
  `par_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `reg_date` date DEFAULT NULL,
  `t_year` varchar(255) DEFAULT NULL,
  `bis_profit` decimal(13,2) DEFAULT NULL,
  `total_tax` decimal(13,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partnership_tax`
--

INSERT INTO `partnership_tax` (`par_id`, `c_id`, `reg_date`, `t_year`, `bis_profit`, `total_tax`) VALUES
(1, 60, '2025-06-26', '2025/2026', 100.00, 115.00),
(2, 60, '2025-06-26', '2025/2026', 100.00, 115.00),
(3, 60, '2025-06-26', '2025/2026', 100.00, 115.00),
(4, 60, '2025-06-26', '2025/2026', 100.00, 115.00),
(5, 60, '2025-06-26', '2025/2026', 100.00, 115.00),
(6, 66, '2025-06-26', '2025/2026', 270.00, 16.20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `partnership_tax`
--
ALTER TABLE `partnership_tax`
  ADD PRIMARY KEY (`par_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `partnership_tax`
--
ALTER TABLE `partnership_tax`
  MODIFY `par_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
