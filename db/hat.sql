-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2025 at 12:38 PM
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tax`
--

INSERT INTO `tax` (`t_id`, `p_emp_slary`, `p_bis_net`, `p_inter_ern`, `p_rent_recived`, `p_any_other`, `p_total_ern`, `p_apit_paye`, `p_wht`, `p_income_tax`, `p_rates_paid`, `p_tax_pay`, `p_tax_sav`, `n_emp_slary`, `n_bis_net`, `n_inter_ern`, `n_rent_recived`, `n_any_other`, `n_total_ern`, `n_apit_paye`, `n_wht`, `n_income_tax`, `n_rates_paid`, `n_tax_pay`, `n_tax_sav`, `ceb`, `ceb_new`) VALUES
(1, 6555655, 0, 0, 0, 0, 6555655, 1478036, 0, 0, 5656568, 293091, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 5475645, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
(3, 9999999999, 0, 0, 0, 0, 9999999999, 9999999999, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
(4, 1000, 1000, 1000, 1000, 100, 4100, 0, 4444, 444, 555, 0, 0, 1000, 1000, 1000, 100, 100, 3200, 0, 4444, 555, 777, 0, 0, 1, 2);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(15, 'Dinesh Rajapakshe', '3132131312', 'rajap.dinukad@gmail.com', '2025-06-08', '0121012', 1),
(16, 'kavidu', '2524254244', 'dilshank404@gmail.com', '2025-06-11', '12345', 1),
(17, 'kavidu', '2524254244', 'dilshank404@gmail.com', '2025-06-11', '12345', 1),
(18, 'kavidu', '2524254244', 'dilshank404@gmail.com', '2025-06-11', '12345', 1),
(19, 'kavidu', '2524254244', 'dilshank404@gmail.com', '2025-06-11', '12345', 1),
(20, 'kavidu', '2524254244', 'dilshank404@gmail.com', '2025-06-11', '12345', 1),
(21, 'kavidu', '2524254244', 'dilshank404@gmail.com', '2025-06-11', '12345', 1),
(22, 'kavidu', '2524254244', 'dilshank404@gmail.com', '2025-06-11', '12345', 1),
(23, 'pubudu', '0000000119', 'gi@gmil.com', '2025-06-11', '56789', 1);

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
-- AUTO_INCREMENT for table `tax`
--
ALTER TABLE `tax`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
