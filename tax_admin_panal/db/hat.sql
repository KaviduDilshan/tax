-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2025 at 07:58 AM
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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `a_id` int(11) NOT NULL,
  `a_username` varchar(255) NOT NULL,
  `a_password` varchar(255) NOT NULL,
  `a_status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`a_id`, `a_username`, `a_password`, `a_status`) VALUES
(1, 'super_admin', '$2y$10$MCq3kqg5TpP5rvviemVayuO4Hvfxh3/JJ4mylf6IsX7rhT3gagTee', 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tax`
--

INSERT INTO `tax` (`t_id`, `c_id`, `past_yer`, `new_yer`, `p_emp_slary`, `p_bis_net`, `p_inter_ern`, `p_rent_recived`, `p_any_other`, `p_total_ern`, `p_apit_paye`, `p_wht`, `p_income_tax`, `p_rates_paid`, `p_tax_pay`, `p_tax_sav`, `n_emp_slary`, `n_bis_net`, `n_inter_ern`, `n_rent_recived`, `n_any_other`, `n_total_ern`, `n_apit_paye`, `n_wht`, `n_income_tax`, `n_rates_paid`, `n_tax_pay`, `n_tax_sav`, `ceb`, `ceb_new`) VALUES
(1, 6, NULL, NULL, 6555655, 0, 0, 0, 0, 6555655, 1478036, 0, 0, 5656568, 293091, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
(2, 5, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 5475645, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
(3, 5, NULL, NULL, 9999999999, 0, 0, 0, 0, 9999999999, 9999999999, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
(4, 4, NULL, NULL, 1000, 1000, 1000, 1000, 100, 4100, 0, 4444, 444, 555, 0, 0, 1000, 1000, 1000, 100, 100, 3200, 0, 4444, 555, 777, 0, 0, 1, 2),
(5, 17, '2024 / 2025', '2025 / 2026', 123123, 123123123, 12321312, 3123123213, 2123123, 3260813894, 0, 123123123, 213123123, 1232131232, 112116423, 47922321, 123213, 123123, 9999999999, 1232131, 123123, 9999999999, 0, 123213, 213123, 12312, 0, 100, 1, 1),
(6, 25, '2024 / 2025', '2025 / 2026', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
(7, 27, '2024 / 2025', '2025 / 2026', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
(8, 40, '2024 / 2025', '2025 / 2026', 1000, 5, 1000, 50, 4, 2059, 0, 333333, 33333, 33333, 0, 0, 2000, 10, 2000, 200, 8, 4218, 0, 333333, 33333, 333, 0, 0, 1, 1),
(9, 48, '2024 / 2025', '2025 / 2026', 544454, 545454, 0, 0, 0, 1089908, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
(10, 63, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `c_id` int(11) NOT NULL,
  `f_name` varchar(255) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `reg_date` date DEFAULT NULL,
  `person_tin_number` varchar(100) DEFAULT NULL,
  `partnership_name` varchar(255) DEFAULT NULL,
  `partnership_tin_num` varchar(100) DEFAULT NULL,
  `corporate_name` varchar(255) DEFAULT NULL,
  `corporate_tin_num` int(100) DEFAULT NULL,
  `user_type` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`c_id`, `f_name`, `mobile`, `email`, `reg_date`, `person_tin_number`, `partnership_name`, `partnership_tin_num`, `corporate_name`, `corporate_tin_num`, `user_type`) VALUES
(1, '', '45454', '-', '2025-06-06', '', '', '', '', 0, 0),
(4, 'gfhgjnhgjn', '2147483647', 'dilshank404@gmail.com', '2025-06-06', '', '', '', '', 0, 0),
(5, 'gfhgjnhgjn', '2147483647', 'dilshank404@gmail.com', '2025-06-06', '', '', '', '', 0, 0),
(6, 'gihan', '1000000001', 'gi@gmil.com', '2025-06-06', '', '', '', '', 0, 0),
(7, 'gihan', '1000000001', 'gi@gmil.com', '2025-06-06', '', '', '', '', 0, 0),
(8, 'kavidu', '2147483647', 'dilshank404@gmail.com', '2025-06-06', '', '', '', '', 0, 0),
(9, 'asdasd', '0', 'asdasd@wqeqwe.com', '2025-06-07', '', '', '', '', 0, 0),
(10, 'asdasd', '123123213', 'rajap.dinukad@gmail.com', '2025-06-07', '', '', '', '', 0, 0),
(11, 'Dinesh Rajapakshe', '0777959789', 'rajap.dinukad@gmail.com', '2025-06-07', '', '', '', '', 0, 1),
(12, 'Dinesh Rajapakshe', '0777959789', 'rajap.dinukad@gmail.com', '2025-06-07', '', '', '', '', 0, 1),
(13, 'Dinesh Rajapakshe', '7777777777', 'rajap.dinukad@gmail.com', '2025-06-08', '', '', '', '', 0, 1),
(14, 'Dinesh Rajapakshe', '7777777777', 'rajap.dinukad@gmail.com', '2025-06-08', '', '', '', '', 0, 1),
(15, 'Dinesh Rajapakshe', '3132131312', 'rajap.dinukad@gmail.com', '2025-06-08', '', '', '', '', 0, 1),
(16, 'kavidu', '2524254244', 'dilshank404@gmail.com', '2025-06-11', '', '', '', '', 0, 1),
(49, 'kavidu', '0758113379', 'dilshank404@gmail.com', '2025-06-25', '18090', '', '', '', 0, 1),
(50, 'kavidu', '123456789', 'dilshank404@gmail.com', '2025-06-25', '123456', '', '', '', 0, 1),
(51, 'dilshan', '123456789', 'qqqqqq@gmail.com', '2025-06-25', '', 'kavidu', '123', '', 0, 2),
(52, 'gfgfgf', '65456465', 'dfdfgdg@gmail.com', '2025-06-25', '7867687', '', '', '', 0, 1),
(53, 'fdghfbvg', '78654654', 'hhffgh@gmail.com', '2025-06-25', '', 'fdfgdfg', '68598', '', 0, 2),
(54, 'dfgdfg', '5465645654', 'person@gmail.com', '2025-06-25', '12233', '', '', '', 0, 1),
(55, 'ghghgh', '56456', 'nvnhvbn@gmail.com', '2025-06-25', '', 'dfgfdgfdcg', '1123', '', 0, 2),
(56, 'fgfghfh', '546465', 'dsffdfs@gmail.com', '2025-06-25', '', 'dffdfg', '54654654', '', 0, 2),
(57, 'ghgfhg', '546456', 'rfdfdf@gmail.com', '2025-06-25', '', 'bnjhjh', '78694789', '', 0, 2),
(58, 'fghfghgf', '6868', 'bcfgfd@gmail.com', '2025-06-25', '', '', '', 'jghjghj', 545454, 3),
(59, 'uyiuikuiui', '68687786', 'fgfhfg@gmail.com', '2025-06-25', '', '', '', 'fghgfjhg', 4546454, 3),
(60, 'rtrtrtrt', '86945656', 'efdsdsd@gmail.com', '2025-06-26', '', 'gfgfgfg', '123', '', 0, 2),
(61, 'qqqqqqqqqq', '1234567890', 'ddfdgf@GMAIL.COM', '2025-06-26', '', '', '', 'wwwwwwww', 123456, 3),
(62, '444444', '0123456789', 'hghfgh@gmail.com', '2025-06-26', '', 'wwwwww', '123', '', 0, 2),
(63, 'eeeeee', '1234567899', 'fdhgsfgsa@gmail.com', '2025-06-26', '', '', '', 'yyyyyyy', 789456123, 3),
(64, 'laksitha jayasinghe', '0123456789', 'lakshitha@gmail.com', '2025-06-26', NULL, NULL, NULL, 'lakthitha', 1232, 3),
(65, 'kavidu dilshan aththanayaka', '0758113379', 'dilshank404@gmail.com', '2025-06-26', '123456', NULL, NULL, NULL, NULL, 1),
(66, 'pubudhu lakshitha', '0123456789', 'pubudu@gmail.com', '2025-06-26', NULL, 'pubudhu', '123456', NULL, NULL, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `corporate_tax`
--
ALTER TABLE `corporate_tax`
  ADD PRIMARY KEY (`cor_id`);

--
-- Indexes for table `partnership_tax`
--
ALTER TABLE `partnership_tax`
  ADD PRIMARY KEY (`par_id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `corporate_tax`
--
ALTER TABLE `corporate_tax`
  MODIFY `cor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `partnership_tax`
--
ALTER TABLE `partnership_tax`
  MODIFY `par_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tax`
--
ALTER TABLE `tax`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
