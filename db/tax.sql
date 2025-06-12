-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2025 at 07:20 AM
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
  `c_id` int(11) DEFAULT 0,
  `past_yer` varchar(255) DEFAULT NULL,
  `new_yer` varchar(255) DEFAULT NULL,
  `p_emp_slary` decimal(10,0) DEFAULT NULL,
  `p_bis_net` decimal(10,0) DEFAULT NULL,
  `p_inter_ern` decimal(10,0) DEFAULT NULL,
  `p_rent_recived` decimal(10,0) DEFAULT NULL,
  `p_any_other` decimal(10,0) DEFAULT NULL,
  `p_total_ern` decimal(10,0) DEFAULT NULL,
  `p_apit_paye` decimal(10,0) DEFAULT NULL,
  `p_wht` decimal(10,0) DEFAULT NULL,
  `p_income_tax` decimal(10,0) DEFAULT NULL,
  `p_rates_paid` decimal(10,0) DEFAULT NULL,
  `p_tax_pay` decimal(10,0) DEFAULT NULL,
  `p_tax_sav` decimal(10,0) DEFAULT NULL,
  `n_emp_slary` decimal(10,0) DEFAULT NULL,
  `n_bis_net` decimal(10,0) DEFAULT NULL,
  `n_inter_ern` decimal(10,0) DEFAULT NULL,
  `n_rent_recived` decimal(10,0) DEFAULT NULL,
  `n_any_other` decimal(10,0) DEFAULT NULL,
  `n_total_ern` decimal(10,0) DEFAULT NULL,
  `n_apit_paye` decimal(10,0) DEFAULT NULL,
  `n_wht` decimal(10,0) DEFAULT NULL,
  `n_income_tax` decimal(10,0) DEFAULT NULL,
  `n_rates_paid` decimal(10,0) DEFAULT NULL,
  `n_tax_pay` decimal(10,0) DEFAULT NULL,
  `n_tax_sav` decimal(10,0) DEFAULT NULL,
  `ceb` int(2) DEFAULT 1,
  `ceb_new` int(2) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tax`
--

INSERT INTO `tax` (`t_id`, `c_id`, `past_yer`, `new_yer`, `p_emp_slary`, `p_bis_net`, `p_inter_ern`, `p_rent_recived`, `p_any_other`, `p_total_ern`, `p_apit_paye`, `p_wht`, `p_income_tax`, `p_rates_paid`, `p_tax_pay`, `p_tax_sav`, `n_emp_slary`, `n_bis_net`, `n_inter_ern`, `n_rent_recived`, `n_any_other`, `n_total_ern`, `n_apit_paye`, `n_wht`, `n_income_tax`, `n_rates_paid`, `n_tax_pay`, `n_tax_sav`, `ceb`, `ceb_new`) VALUES
(1, 0, NULL, NULL, '6555655', '0', '0', '0', '0', '6555655', '1478036', '0', '0', '5656568', '293091', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 1),
(2, 0, NULL, NULL, '0', '0', '0', '0', '0', '0', '0', '0', '5475645', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 1),
(3, 0, NULL, NULL, '9999999999', '0', '0', '0', '0', '9999999999', '9999999999', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 1),
(4, 0, NULL, NULL, '1000', '1000', '1000', '1000', '100', '4100', '0', '4444', '444', '555', '0', '0', '1000', '1000', '1000', '100', '100', '3200', '0', '4444', '555', '777', '0', '0', 1, 2),
(5, 17, '2024 / 2025', '2025 / 2026', '123123', '123123123', '12321312', '3123123213', '2123123', '3260813894', '0', '123123123', '213123123', '1232131232', '112116423', '47922321', '123213', '123123', '9999999999', '1232131', '123123', '9999999999', '0', '123213', '213123', '12312', '0', '100', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tax`
--
ALTER TABLE `tax`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tax`
--
ALTER TABLE `tax`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
