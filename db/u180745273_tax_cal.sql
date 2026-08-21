-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 20, 2026 at 06:32 AM
-- Server version: 11.8.8-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u180745273_tax_cal`
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
(1, 'admin', '$2y$10$MCq3kqg5TpP5rvviemVayuO4Hvfxh3/JJ4mylf6IsX7rhT3gagTee', 1);

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
(1, 64, '2025-06-26', 2025, 3, 100.00, 15.00),
(2, 116, '2025-07-15', 2025, 1, 500000.00, 150000.00),
(3, 118, '2025-07-17', 2025, 1, 300000.00, 90000.00),
(4, 122, '2025-07-18', 2025, 1, 1000000.00, 300000.00),
(5, 175, '2025-08-25', 2025, 1, 45000000.00, 13500000.00);

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
(6, 66, '2025-06-26', '2025/2026', 270.00, 16.20),
(7, 115, '2025-07-15', '2025/2026', 1500000.00, 90000.00);

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
(6, 33, '2024 / 2025', '2025 / 2026', 1750000, 0, 0, 0, 0, 1750000, 36000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
(7, 37, '2024 / 2025', '2025 / 2026', 1800000, 1000000, 0, 0, 0, 2800000, 42000, 15000, 100000, 50000, 35000, 192000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 100, 1, 1),
(8, 49, '2024 / 2025', '2025 / 2026', 1800000, 1000000, 300000, 1200000, 0, 4300000, 42000, 15000, 100000, 50000, 383000, 520800, 2000000, 120000, 0, 0, 0, 2120000, 12000, 0, 0, 0, 7200, 96, 1, 1),
(9, 41, '2024 / 2025', '2025 / 2026', 1800000, 1000000, 300000, 1200000, 0, 4300000, 42000, 15000, 1000000, 50000, 0, -402000, 1800000, 1000000, 300000, 1200000, 0, 4300000, 0, 15000, 1000000, 50000, 0, 0, 1, 1),
(10, 55, '2024 / 2025', '2025 / 2026', 1800000, 100000, 300000, 0, 0, 2200000, 42000, 150000, 100000, 500000, 0, -168000, 1800000, 100000, 300000, 0, 0, 2200000, 0, 150000, 100000, 500000, 0, 0, 1, 1),
(11, 51, '2024 / 2025', '2025 / 2026', 1800000, 1000000, 300000, 1200000, 0, 4300000, 42000, 15000, 100000, 50000, 383000, -402000, 1800000, 1000000, 300000, 1200000, 0, 4300000, 0, 15000, 100000, 50000, 827000, 0, 1, 1),
(12, 52, '2024 / 2025', '2025 / 2026', 1800000, 1000000, 300000, 1200000, 0, 4300000, 42000, 15000, 100000, 50000, 383000, -402000, 1800000, 1000000, 300000, 1200000, 0, 4300000, 0, 15000, 100000, 50000, 827000, 0, 1, 1),
(13, 47, '2024 / 2025', '2025 / 2026', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -721500, 1800000, 1200000, 150000, 250000, 0, 3400000, 0, 0, 0, 0, 721500, 0, 1, 1),
(14, 53, '2024 / 2025', '2025 / 2026', 1800000, 1000000, 300000, 1200000, 0, 4300000, 42000, 15000, 100000, 50000, 383000, -402000, 1800000, 1000000, 300000, 1200000, 0, 4300000, 0, 15000, 100000, 50000, 827000, 0, 1, 1),
(15, 73, '2024 / 2025', '2025 / 2026', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
(16, 84, '2024 / 2025', '2025 / 2026', 1900000, 1500000, 500000, 1000000, 150000, 5050000, 54000, 15000, 100000, 0, 677000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
(17, 84, '2024 / 2025', '2025 / 2026', 1900000, 1500000, 500000, 1000000, 150000, 5050000, 54000, 15000, 100000, 150025, 622991, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
(18, 85, '2024 / 2025', '2025 / 2026', 400000, 1502734, 0, 0, 0, 1902734, 0, 0, 0, 0, 54328, -192328, 400000, 1502734, 0, 0, 0, 1902734, 0, 0, 0, 0, 246656, 0, 2, 2),
(19, 86, '2024 / 2025', '2025 / 2026', 1800000, 500000, 300000, 1200000, 0, 3800000, 42000, 15000, 0, 30000, 324000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
(20, 90, '2024 / 2025', '2025 / 2026', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -12000, 2000000, 0, 0, 0, 0, 2000000, 12000, 0, 0, 0, 0, 0, 1, 1),
(21, 91, '2024 / 2025', '2025 / 2026', 500000, 750000, 0, 0, 0, 1250000, 0, 0, 0, 0, 3000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
(22, 91, '2024 / 2025', '2025 / 2026', 500000, 750000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
(23, 92, '2024 / 2025', '2025 / 2026', 1900000, 250000, 0, 0, 0, 2150000, 54000, 0, 0, 0, 30000, -21000, 1900000, 250000, 0, 0, 0, 2150000, 6000, 0, 0, 0, 15000, 0, 1, 1),
(24, 97, '2024 / 2025', '2025 / 2026', 0, 1900000, 0, 0, 0, 1900000, 0, 0, 0, 0, 54000, -246000, 0, 1900000, 0, 0, 0, 1900000, 0, 0, 0, 0, 246000, 0, 2, 2),
(25, 105, '2024 / 2025', '2025 / 2026', 0, 2791682, 0, 0, 0, 2791682, 0, 0, 0, 0, 202004, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
(26, 108, '2024 / 2025', '2025 / 2026', 666666, 100000000, 580000, 655284, 42688, 101944638, 0, 0, 0, 0, 35759094, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
(27, 112, '2024 / 2025', '2025 / 2026', 1500000, 300000, 0, 0, 0, 1800000, 18000, 0, 0, 0, 24000, -42000, 1500000, 300000, 0, 0, 0, 1800000, 0, 0, 0, 0, 0, 0, 2, 2),
(28, 113, '2024 / 2025', '2025 / 2026', 3020448, 0, 0, 0, 0, 3020448, 256908, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 1),
(29, 114, '2024 / 2025', '2025 / 2026', 450000, 0, 0, 0, 0, 450000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 1),
(30, 117, '2024 / 2025', '2025 / 2026', 0, 300000, 0, 0, 0, 300000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2),
(31, 126, '2024 / 2025', '2025 / 2026', 0, 1800000, 0, 0, 0, 1800000, 0, 0, 0, 0, 42000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
(32, 128, '2024 / 2025', '2025 / 2026', 0, 1300000, 0, 0, 0, 1300000, 0, 0, 0, 0, 6000, 144000, 0, 3300000, 0, 0, 0, 3300000, 0, 0, 0, 0, 150000, 96, 1, 2),
(33, 131, '2024 / 2025', '2025 / 2026', 300000, 0, 0, 0, 0, 300000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
(34, 133, '2024 / 2025', '2025 / 2026', 1900000, 0, 0, 0, 0, 1900000, 54000, 0, 0, 0, 0, 6000, 1900000, 0, 0, 0, 0, 1900000, 6000, 0, 0, 0, 0, 100, 1, 1),
(35, 140, '2024 / 2025', '2025 / 2026', 1500000, 0, 500000, 200000, 0, 2200000, 18000, 10000, 0, 0, 56000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
(36, 145, '2024 / 2025', '2025 / 2026', 0, 0, 191, 0, 0, 191, 0, 0, 0, 0, 0, 6503905, 0, 21195912, 3825, 0, 0, 21199737, 0, 0, 0, 0, 6503905, 100, 2, 2),
(37, 146, '2024 / 2025', '2025 / 2026', 0, 1746083, 0, 0, 0, 1746083, 0, 0, 0, 0, 35530, -35530, 0, 1746083, 0, 0, 0, 1746083, 0, 0, 0, 0, 0, 0, 2, 2),
(38, 147, '2024 / 2025', '2025 / 2026', 1200000, 500000, 250000, 0, 0, 1950000, 0, 0, 0, 0, 60000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 1),
(39, 152, '2024 / 2025', '2025 / 2026', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 250000, 0, 0, 0, 0, 250000, 0, 0, 0, 0, 0, 0, 1, 2),
(40, 161, '2024 / 2025', '2025 / 2026', 804712, 0, 0, 0, 0, 804712, 0, 0, 0, 0, 0, 0, 804712, 0, 0, 0, 0, 804712, 0, 0, 0, 0, 0, 0, 2, 2),
(41, 168, '2024 / 2025', '2025 / 2026', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 468670, 4435194, 0, 0, 0, 0, 4435194, 468670, 0, 0, 0, 0, 100, 1, 1),
(42, 169, '2024 / 2025', '2025 / 2026', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 468670, 4435194, 0, 0, 0, 0, 4435194, 468670, 0, 0, 0, 0, 100, 1, 1),
(43, 172, '2024 / 2025', '2025 / 2026', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 280142, 3233808, 600000, 0, 0, 0, 3833808, 138085, 0, 0, 0, 142057, 100, 1, 1),
(44, 181, '2024 / 2025', '2025 / 2026', 219998, 0, 0, 0, 0, 219998, 0, 0, 0, 0, 0, 0, 220000, 0, 0, 0, 0, 220000, 0, 0, 0, 0, 0, 0, 1, 1),
(45, 197, '2024 / 2025', '2025 / 2026', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 247000, 0, 0, 0, 0, 247000, 0, 0, 0, 0, 0, 0, 1, 1),
(46, 227, '2024 / 2025', '2025 / 2026', 4104366, 0, 0, 0, 0, 4104366, 595572, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
(47, 260, '2025 / 2026', '2026 / 2027', 2000000, 3300000, 0, 0, 0, 5300000, 66000, 0, 0, 0, 960000, -246000, 2000000, 3300000, 0, 0, 0, 5300000, 12000, 0, 0, 0, 768000, 0, 1, 1);

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
  `person_tin_number` varchar(100) DEFAULT NULL,
  `partnership_name` varchar(100) DEFAULT NULL,
  `partnership_tin_num` varchar(100) DEFAULT NULL,
  `corporate_name` varchar(100) DEFAULT NULL,
  `corporate_tin_num` varchar(100) DEFAULT NULL,
  `user_type` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`c_id`, `f_name`, `mobile`, `email`, `reg_date`, `person_tin_number`, `partnership_name`, `partnership_tin_num`, `corporate_name`, `corporate_tin_num`, `user_type`) VALUES
(28, 'HB Jayathissa ', '0710625518', 'hat_acc@yahoo.com', '2025-06-12', '11111211', NULL, NULL, NULL, NULL, 1),
(29, 'HB Jayathissa ', '0710625518', 'hat_acc@yahoo.com', '2025-06-12', '11111211', NULL, NULL, NULL, NULL, 1),
(30, 'Fathimathuz Zahra ', '0705739542', 'fathimathuzzahra225@gmail.com', '2025-06-12', '200505250', NULL, NULL, NULL, NULL, 1),
(31, 'Kaveesha venurika ', '0765760570', 'kaveeshavenurika@gmail.com', '2025-06-12', '11111111111', NULL, NULL, NULL, NULL, 1),
(32, 'Dilmi ', '0768742300', 'dilmi.shashikala174@gmail.com', '2025-06-12', '111111111', NULL, NULL, NULL, NULL, 1),
(33, 'Kushan shanilka ', '0762906992', 'kushanshanilka2002@gmail.com', '2025-06-12', '111111111111111111', NULL, NULL, NULL, NULL, 1),
(34, 'K.A.D.S.kulasinghe ', '0778883570', 'dinithsandeepa420@gmail.com', '2025-06-12', '123456789', NULL, NULL, NULL, NULL, 1),
(35, 'M.Sanjala Hepshiba', '0705591991', 'amalamaljerushan@gmail.com', '2025-06-12', '12345678', NULL, NULL, NULL, NULL, 1),
(36, 'M.j.m salman', '0726665584', 'salmanmohomed76@gmail.com', '2025-06-12', '1111111111', NULL, NULL, NULL, NULL, 1),
(37, 'Hasini', '0774795087', 'hasinikokila75@gmail.com', '2025-06-12', '123456789', NULL, NULL, NULL, NULL, 1),
(38, 'kariyapperu dissanayaka mudiyanselage rasangika upamali thilakarathna ', '0760501178', 'rasangika199906@gmail.com', '2025-06-12', '111211122', NULL, NULL, NULL, NULL, 1),
(39, 'Mohamed Siddeek Mohamed Akib Ilhaam', '0760832683', 'akib.ilhaam@gmail.com', '2025-06-12', '111111111', NULL, NULL, NULL, NULL, 1),
(40, 'R.M.M.S.Rathnayaka', '0761422460', 'meth.kh.hat@gmail.com', '2025-06-12', '111111111', NULL, NULL, NULL, NULL, 1),
(41, 'M.M.B.D.Dinethma', '0760178455', 'buddhimadulakshani@gmail.com', '2025-06-12', '111111111', NULL, NULL, NULL, NULL, 1),
(42, 'K.M.S.S.Konara', '0716369515', 'shehanthi7konara@gmail.com', '2025-06-12', '101123445', NULL, NULL, NULL, NULL, 1),
(43, 'Lakmali weerasinghe', '0766650064', 'lakmali.weerasinghe32@gmail.com', '2025-06-12', '111111111', NULL, NULL, NULL, NULL, 1),
(44, 'M N Abdulla', '0717641100', 'abdulla.gsp.hat@gmail.com', '2025-06-12', '123456789', NULL, NULL, NULL, NULL, 1),
(45, 'Kokmaduwa Liyanaarachchige Gayani Amandi Abisheka ', '0714071947', 'gayaniamandi16@gmail.com', '2025-06-12', '111111111111111', NULL, NULL, NULL, NULL, 1),
(46, 'Harinda Bandara', '0777435518', 'hat_acc@yahoo.com', '2025-06-12', '11111111', NULL, NULL, NULL, NULL, 1),
(47, 'Rumeshika Herath', '0706831459', 'rumeshikaherath2004@gmail.com', '2025-06-12', '123 456 789', NULL, NULL, NULL, NULL, 1),
(48, 'K.M.Naazim', '0706739099', 'naasimkuddus@gmail.com', '2025-06-12', '2222222221', NULL, NULL, NULL, NULL, 1),
(49, 'Kushan shanilka ', '0712906992', 'kushanshanilka2002@gmail.com', '2025-06-12', '11111111111', NULL, NULL, NULL, NULL, 1),
(50, 'Naduni Thakshila ', '0777575861', 'thakshi.kh.hat@gmail.com', '2025-06-12', '19940105', NULL, NULL, NULL, NULL, 1),
(51, 'Sanjala Hepshiba', '0705591991', 'amalamaljerushan@gmail.com', '2025-06-12', '12345678', NULL, NULL, NULL, NULL, 1),
(52, 'Anfas', '0771410366', 'anfas@gmail.com', '2025-06-12', '111111111', NULL, NULL, NULL, NULL, 1),
(53, 'Sachini Kaushalya', '0703809843', 'sachinikaush20.hat@gmail.com', '2025-06-12', '', NULL, NULL, NULL, NULL, 1),
(54, 'Salini Dilshani Rathnayaka', '0765425230', 'salinidilshani2003@gmail.com', '2025-06-12', '', NULL, NULL, NULL, NULL, 1),
(55, 'Parami Perera', '0717316543', 'amayaparami4@gmail.com', '2025-06-12', '111111111', NULL, NULL, NULL, NULL, 1),
(56, 'HB Jayathissa ', '0710625518', 'hat_acc@yahoo.com', '2025-06-12', '11111211', NULL, NULL, NULL, NULL, 1),
(57, 'Parami Perera', '0717316573', 'amayaparami4@gmail.com', '2025-06-12', '111111111', NULL, NULL, NULL, NULL, 1),
(58, 'M.j.m salman', '0726665584', 'salmanmohomed76@gmail.com', '2025-06-12', '1111111111', NULL, NULL, NULL, NULL, 1),
(59, 'Naduni Thakshila ', '0777575861', 'thakshi.kh.hat@gmail.com', '2025-06-12', '19940105', NULL, NULL, NULL, NULL, 1),
(60, 'K.A.D.S.kulasinghe ', '0778883570', 'dinithsandeepa420@gmail.com', '2025-06-12', '123456789', NULL, NULL, NULL, NULL, 3),
(61, 'Naduni Thakshila ', '0777575861', 'thakshi.kh.hat@gmail.com', '2025-06-12', '19940105', NULL, NULL, NULL, NULL, 3),
(62, 'Parami Perera', '0717316573', 'amayaparami4@gmail.com', '2025-06-12', '111111111', NULL, NULL, NULL, NULL, 1),
(63, 'kariyapperu dissanayaka mudiyanselage rasangika upamali thilakarathna ', '0760501178', 'rasangika199906@gmail.com', '2025-06-12', '111211122', NULL, NULL, NULL, NULL, 3),
(64, 'R.M.M.S.Rathnayaka', '0761422460', 'meth.kh.hat@gmail.com', '2025-06-12', '111111111', NULL, NULL, NULL, NULL, 3),
(65, 'Parami Perera', '0717316573', 'amayaparami4@gmail.com', '2025-06-12', '111111111', NULL, NULL, NULL, NULL, 1),
(66, 'Rumeshika Herath', '9470683145', 'rumeshikaherath2004@gmail.com', '2025-06-12', '123 456 789', NULL, NULL, NULL, NULL, 3),
(67, 'Kaveesha venurika ', '0765760570', 'kaveeshavenurika@gmail.com', '2025-06-12', '11111111111', NULL, NULL, NULL, NULL, 3),
(68, 'R.M.M.S.Rathnayaka', '0761422460', 'meth.kh.hat@gmail.com', '2025-06-12', '111111111', NULL, NULL, NULL, NULL, 3),
(69, 'Kaveesha venurika ', '0765760570', 'kaveeshavenurika@gmail.com', '2025-06-12', '11111111111', NULL, NULL, NULL, NULL, 3),
(70, 'Rumeshika Herath', '9470683145', 'rumeshikaherath2004@gmail.com', '2025-06-12', '123 456 789', NULL, NULL, NULL, NULL, 2),
(71, 'Sachini Kaushalya', '0703809843', 'sachinikaush20.hat@gmail.com', '2025-06-12', '', NULL, NULL, NULL, NULL, 1),
(72, 'Rumeshika Herath', '9470683145', 'rumeshikaherath2004@gmail.com', '2025-06-12', '123 456 789', NULL, NULL, NULL, NULL, 1),
(73, 'Rumeshika Herath', '9470683145', 'rumeshikaherath2004@gmail.com', '2025-06-12', '123 456 789', NULL, NULL, NULL, NULL, 1),
(74, 'K.M.Naazim', '0706739099', 'naasimkuddus@gmail.com', '2025-06-12', '2222222221', NULL, NULL, NULL, NULL, 2),
(75, 'K.M.Naazim', '0706739099', 'naasimkuddus@gmail.com', '2025-06-12', '2222222221', NULL, NULL, NULL, NULL, 2),
(76, 'K.M.Naazim', '0706739099', 'naasimkuddus@gmail.com', '2025-06-12', '2222222221', NULL, NULL, NULL, NULL, 3),
(77, 'K.M.Naazim', '0706739099', 'naasimkuddus@gmail.com', '2025-06-12', '2222222221', NULL, NULL, NULL, NULL, 1),
(78, 'K.M.Naazim', '0706739099', 'naasimkuddus@gmail.com', '2025-06-12', '2222222221', NULL, NULL, NULL, NULL, 2),
(79, 'K.M.Naazim', '0706739099', 'naasimkuddus@gmail.com', '2025-06-12', '2222222221', NULL, NULL, NULL, NULL, 2),
(80, 'K.M.Naazim', '0706739099', 'naasimkuddus@gmail.com', '2025-06-12', '2222222221', NULL, NULL, NULL, NULL, 3),
(81, 'M N ABDULLA', '0717641100', 'abdulla.gsp.hat@gmail.com', '2025-06-12', '123456789', NULL, NULL, NULL, NULL, 1),
(82, 'M N ABDULLA', '0717641100', 'abdulla.gsp.hat@gmail.com', '2025-06-12', '123456789', NULL, NULL, NULL, NULL, 2),
(83, 'M N ABDULLA', '0717641100', 'abdulla.gsp.hat@gmail.com', '2025-06-12', '123456789', NULL, NULL, NULL, NULL, 3),
(84, 'gayani', '022452455', 'hdygybjshvuhduw@gmail.com', '2025-06-12', '1250', NULL, NULL, NULL, NULL, 1),
(85, 'Rumeshika Herath', '9470683145', 'rumeshikaherath2004@gmail.com', '2025-06-12', '123 456 789', NULL, NULL, NULL, NULL, 1),
(86, 'Harinda Bandara', '0759054114', 'hat_acc@yahoo.com', '2025-06-12', '11111111', NULL, NULL, NULL, NULL, 1),
(87, 'Harinda Bandara', '0777435518', 'hat_acc@yahoo.com', '2025-06-12', '111111111', NULL, NULL, NULL, NULL, 2),
(88, 'HB Jayathissa ', '0710625518', 'hat_acc@yahoo.com', '2025-06-13', '11111211', NULL, NULL, NULL, NULL, 2),
(89, 'HB Jayathissa ', '0710625518', 'hat_acc@yahoo.com', '2025-06-13', '11111211', NULL, NULL, NULL, NULL, 3),
(90, 'HB Jayathissa ', '0710625518', 'hat_acc@yahoo.com', '2025-06-13', '11111211', NULL, NULL, NULL, NULL, 1),
(91, 'Awthsjib', '1254668935', 'akashchamuditha48@gmail.com', '2025-06-13', '1235678890964221357876', NULL, NULL, NULL, NULL, 1),
(92, 'HB Jayathissa ', '0710625518', 'hat_acc@yahoo.com', '2025-06-15', '11111211', NULL, NULL, NULL, NULL, 1),
(93, 'HB Jayathissa ', '0710625518', 'hat_acc@yahoo.com', '2025-06-15', '11111211', NULL, NULL, NULL, NULL, 2),
(94, 'HB Jayathissa ', '0710625518', 'hat_acc@yahoo.com', '2025-06-15', '11111211', NULL, NULL, NULL, NULL, 2),
(95, 'UPAMALI', '0760507718', 'RASANGIKA@GMAIL.COM', '2025-06-16', '111111111', NULL, NULL, NULL, NULL, 1),
(96, 'K.A.D.S.kulasinghe ', '0778883570', 'dinithsandeepa420@gmail.com', '2025-06-18', '123456789', NULL, NULL, NULL, NULL, 1),
(97, 'A B Perera', '0777435518', 'harindabj@gmail.com', '2025-06-22', '222333444', NULL, NULL, NULL, NULL, 1),
(98, 'Dinesh Rajapakshe', '777959789', 'abc@gmail.com', '2025-06-22', 'te', NULL, NULL, NULL, NULL, 1),
(99, 'Dinesh Rajapakshe', '777959789', 'abc@gmail.com', '2025-06-22', 'te', NULL, NULL, NULL, NULL, 1),
(100, 'A B Perera', '0710625518', 'harindabj@gmail.com', '2025-06-22', '11111211', NULL, NULL, NULL, NULL, 1),
(101, 'Dinesh Rajapakshe', '213123123', 'test@tritcal.com', '2025-06-23', 'qwqwe', NULL, NULL, NULL, NULL, 1),
(102, 'HB Jayathissa ', '0710625518', 'hat_acc@yahoo.com', '2025-06-26', '11111211', NULL, NULL, NULL, NULL, 2),
(103, 'HB Jayathissa ', '0710625518', 'hat_acc@yahoo.com', '2025-06-26', '11111211', NULL, NULL, NULL, NULL, 3),
(104, 'HB Jayathissa ', '0710625518', 'hat_acc@yahoo.com', '2025-06-26', '11111211', NULL, NULL, NULL, NULL, 1),
(105, 'K.M.Shehanthi Sathsara Konra Shehanthi', '0716369515', 'shehanthi7konara@gmail.com', '2025-06-27', '', NULL, NULL, NULL, NULL, 1),
(106, '', '', '', '2025-06-27', '', NULL, NULL, NULL, NULL, 0),
(107, 'Apoorya Wasala', '0705355518', 'apooryawasala@gmail.com', '2025-06-29', '87667', NULL, NULL, NULL, NULL, 2),
(108, 'Apoorya Wasala', '0705355518', 'apooryawasala@gmail.com', '2025-06-29', '87667', NULL, NULL, NULL, NULL, 1),
(109, 'test', '123', '123@123.com', '2025-06-30', '123', NULL, NULL, NULL, NULL, 1),
(110, 'tritcal', '777959789', 'raj.@tri.com', '2025-06-30', NULL, NULL, NULL, 'tritcal', 'yyy', 3),
(111, 'Harinda Bandara ', '0777435518', 'hat_acc@yahoo.com', '2025-07-03', '123123123', NULL, NULL, NULL, NULL, 1),
(112, 'Harinda Bandara', '0777435518', 'harindabj@gmail.com', '2025-07-10', '123123123', NULL, NULL, NULL, NULL, 1),
(113, 'HAW Kamalsiri ', '0773729889', 'hawipula@gmail.com', '2025-07-11', '106655920', NULL, NULL, NULL, NULL, 1),
(114, 'Kamal', '0773729889', 'hawipula@gmail.com', '2025-07-11', '', NULL, NULL, NULL, NULL, 1),
(115, 'HAT ACC', '0777435518', 'harindabj@gmail.com', '2025-07-15', NULL, 'HAT', '111222333', NULL, NULL, 2),
(116, 'HBJ', '0777435518', 'hat_acc@yahoo.com', '2025-07-15', NULL, NULL, NULL, 'Talent Story', '333222111', 3),
(117, 'Nawanjana international', '0760077212', 'nawanjana.pvt@gmail.com', '2025-07-17', '101077527', NULL, NULL, NULL, NULL, 1),
(118, 'Nawanjana international', '0760077212', 'nawanjana.pvt@gmail.com', '2025-07-17', NULL, NULL, NULL, 'Nawanjana', '101077527', 3),
(119, 'Pubudu Manoj Pandithasekera ', '0718480399', 'pandithasekere@yahoo.com.au', '2025-07-17', '934330692', NULL, NULL, NULL, NULL, 1),
(120, 'Hitihami mudiyanselage manjula naleen karunarathna', '0718191813', 'hmmnk.pps@gmail.com', '2025-07-17', '106132186', NULL, NULL, NULL, NULL, 1),
(121, '', '', '', '2025-07-17', '', NULL, NULL, NULL, NULL, 0),
(122, 'HAT', '0777435518', 'hat_acc@yahoo.com', '2025-07-18', NULL, NULL, NULL, 'HAT', '111222333', 3),
(123, 'HAT', '0777435518', 'hat_acc@yahoo.com', '2025-07-18', NULL, 'HAT', '111333222', NULL, NULL, 2),
(124, '', '', '', '2025-07-18', NULL, NULL, NULL, '', '', 0),
(125, '', '', '', '2025-07-18', NULL, NULL, NULL, '', '', 0),
(126, 'jayarathna', '0760832658', 'aja@gasjakj.com', '2025-07-19', '103277906', NULL, NULL, NULL, NULL, 1),
(127, 'jk', '045', 'dfg@fgh.com', '2025-07-19', '103277906', NULL, NULL, NULL, NULL, 1),
(128, 'Rt', '667', 'Afd@gnj.com', '2025-07-19', '838893999', NULL, NULL, NULL, NULL, 1),
(129, 'Gh', '567', 'Df@g', '2025-07-19', '', NULL, NULL, NULL, NULL, 1),
(130, 'Fff', '855', 'fddf@gmail.com', '2025-07-19', NULL, NULL, NULL, 'Cc', '22334444', 3),
(131, 'sadun', '781203', 'uyjjk@fghvjb.com', '2025-07-20', '663633089', NULL, NULL, NULL, NULL, 1),
(132, 'jk', '56', 'kll@gmail.com', '2025-07-20', '338759232', NULL, NULL, NULL, NULL, 1),
(133, 'Harinda Bandara', '0777435518', 'harindabj@gmail.com', '2025-07-20', '555666777', NULL, NULL, NULL, NULL, 1),
(134, '', '', '', '2025-07-21', '', NULL, NULL, NULL, NULL, 0),
(135, '', '', '', '2025-07-21', NULL, '', '', NULL, NULL, 0),
(136, 'jkl', '0760832862', 'akib.ilhaam@gmail.com', '2025-07-24', '666152458', NULL, NULL, NULL, NULL, 1),
(137, 'gunawardhana ', '0773900588', 'tharangag26@gmail.com', '2025-07-25', '103799341', NULL, NULL, NULL, NULL, 1),
(138, 'dinith', '0765321112', 'chanu.prasa96@gmail.com', '2025-07-25', '123456789', NULL, NULL, NULL, NULL, 1),
(139, '', '', '', '2025-07-25', '', NULL, NULL, NULL, NULL, 0),
(140, 'Dammika', '0714298988', 'damthila@yahoo.com', '2025-07-26', '123456789', NULL, NULL, NULL, NULL, 1),
(141, 'K.a.d.s.kulasinghe ', '0778883570', 'dinithsandeepa420@gmail.com', '2025-07-28', '', NULL, NULL, NULL, NULL, 1),
(142, '', '', '', '2025-07-29', '', NULL, NULL, NULL, NULL, 0),
(143, 'K a d s kulasinghe ', '0778883570', 'dinithsandeepa420@gmail.com', '2025-07-29', '', NULL, NULL, NULL, NULL, 1),
(144, 'Kulasinghe ', '0778883570', 'dinithsandeepa420@gmail.com', '2025-07-30', '', NULL, NULL, NULL, NULL, 1),
(145, 'rtrgtyh', '0778778775', 'abcd@gmail.com', '2025-08-01', '101108430', NULL, NULL, NULL, NULL, 1),
(146, 'fseghi', '0778778775', 'abcd@gmail.com', '2025-08-01', '101108430', NULL, NULL, NULL, NULL, 1),
(147, 'abc', '0777435518', 'hat_acc@yahoo.com', '2025-08-06', '123123123', NULL, NULL, NULL, NULL, 1),
(148, '', '', '', '2025-08-08', NULL, NULL, NULL, '', '', 0),
(149, '', '', '', '2025-08-09', '', NULL, NULL, NULL, NULL, 0),
(150, '', '', '', '2025-08-09', NULL, '', '', NULL, NULL, 0),
(151, 'H', '7483839', 'Ajjak@gmail.com', '2025-08-09', '838389393', NULL, NULL, NULL, NULL, 1),
(152, 'HBJ', '0710625518', 'hat.tax@gmail.com', '2025-08-10', '321321321', NULL, NULL, NULL, NULL, 1),
(153, 'HJKKJ', '0710625518', 'hat_acc@yahoo.com', '2025-08-10', '987978989', NULL, NULL, NULL, NULL, 1),
(154, 'abc', '0777435518', 'hat_acc@yahoo.com', '2025-08-10', '32121', NULL, NULL, NULL, NULL, 1),
(155, 'aasds', '0762578942', 'gsjaj@gmail.com', '2025-08-11', '0782653265', NULL, NULL, NULL, NULL, 1),
(156, 'salman', '024584545', 'sdgsgdjadhj@gmail.com', '2025-08-11', '2121212121', NULL, NULL, NULL, NULL, 1),
(157, 'Ilhaam', '076890345', 'akib.ilhaam@jsj.com', '2025-08-13', '678899455', NULL, NULL, NULL, NULL, 1),
(158, 'Ilhaam ', '098778838', 'kaksks@gmail.com', '2025-08-13', '678889088', NULL, NULL, NULL, NULL, 1),
(159, 'DHHYas', '076513333', 'AJASKJ@GMAIL.COM', '2025-08-13', '614256256', NULL, NULL, NULL, NULL, 1),
(160, 'saaaaa', '3215645646', '5644687487487@gmail.com', '2025-08-14', '6378749', NULL, NULL, NULL, NULL, 1),
(161, 'PHR Suraweera', '0777435518', 'hat_acc@yahoo.com', '2025-08-14', '123123123', NULL, NULL, NULL, NULL, 1),
(162, 'HBJ', '0777435518', 'hat_acc@yahoo.com', '2025-08-14', '321321321', NULL, NULL, NULL, NULL, 1),
(163, 'Hahahj', '73838828', 'hashja@gmail.com', '2025-08-15', '637778889', NULL, NULL, NULL, NULL, 1),
(164, 'Hahahja', '737783883', 'ajjaj@gmail.con', '2025-08-15', '677888888', NULL, NULL, NULL, NULL, 1),
(165, 'Usuuusjj', '28828892', 'hahaa@gmail.com', '2025-08-15', '899900000', NULL, NULL, NULL, NULL, 1),
(166, 'kl', '62633363', 'gg@gmail.com', '2025-08-17', '7485961', NULL, NULL, NULL, NULL, 1),
(167, 'Jsjsj', '0788977789', 'akidj@gmail.com', '2025-08-18', '345788345', NULL, NULL, NULL, NULL, 1),
(168, 'dd', '41141422', 'edjhdsjk@gmail.com', '2025-08-18', '120222202', NULL, NULL, NULL, NULL, 1),
(169, 'dddxdA', '881878787', 'dasDD@gmail.con', '2025-08-18', '84154555', NULL, NULL, NULL, NULL, 1),
(170, 'fdgdgdxgvx', '7181681616', 'zffvzs@gmail.com', '2025-08-18', '1878484521', NULL, NULL, NULL, NULL, 1),
(171, '', '', '', '2025-08-18', NULL, '', '', NULL, NULL, 0),
(172, 'ygjjj,uhk,k,', '1613131445', 'vgjj@gmail.co', '2025-08-19', '456789152', NULL, NULL, NULL, NULL, 1),
(173, 'hgjhjhjh', '45561235', 'hjjj@gmail.com', '2025-08-19', '789456123', NULL, NULL, NULL, NULL, 1),
(174, 'ujheduhewjkwe', '144424124', 'rfdjkerk@gmail.com', '2025-08-22', '5144', NULL, NULL, NULL, NULL, 1),
(175, 'Isuru', '0710711151', 'isuru.jayarathna97@gmail.com', '2025-08-25', NULL, NULL, NULL, 'Richwil Bakers', '103315336', 3),
(176, '', '', '', '2025-08-27', '', NULL, NULL, NULL, NULL, 0),
(177, '', '', '', '2025-08-29', '', NULL, NULL, NULL, NULL, 0),
(178, '', '', '', '2025-09-01', NULL, NULL, NULL, '', '', 0),
(179, '', '', '', '2025-09-01', '', NULL, NULL, NULL, NULL, 0),
(180, '', '', '', '2025-09-01', NULL, '', '', NULL, NULL, 0),
(181, 'dwede', '2555523232', 'dfdfdvvfd@gmail.com', '2025-09-09', '11111111', NULL, NULL, NULL, NULL, 1),
(182, '', '', '', '2025-09-09', '', NULL, NULL, NULL, NULL, 0),
(183, 'Uwiiiw', '078829929', 'ak@gmail.com', '2025-09-13', '749499309', NULL, NULL, NULL, NULL, 1),
(184, '', '', '', '2025-09-24', NULL, '', '', NULL, NULL, 0),
(185, 'ilhaam', '0762532666', 'akin.jajaSka@gmail.com', '2025-09-25', '788988999', NULL, NULL, NULL, NULL, 1),
(186, '', '', '', '2025-09-26', NULL, NULL, NULL, '', '', 0),
(187, '', '', '', '2025-09-26', '', NULL, NULL, NULL, NULL, 0),
(188, '', '', '', '2025-09-26', NULL, '', '', NULL, NULL, 0),
(189, 'Yui', '0789834567', 'akkak@gmail.com', '2025-09-26', '789908388', NULL, NULL, NULL, NULL, 1),
(190, '', '', '', '2025-09-27', '', NULL, NULL, NULL, NULL, 0),
(191, 'asfghsa', '021222223', 'akib.sajj@gmail.com', '2025-09-29', '789652152', NULL, NULL, NULL, NULL, 1),
(192, 'AKIB', '0789852652', 'akib.ilhaam@gmail.com', '2025-09-29', '0787528365', NULL, NULL, NULL, NULL, 1),
(193, 'Tyty', '0768488838', 'akib.ilhaam@hmms.con', '2025-09-30', '7488883992', NULL, NULL, NULL, NULL, 1),
(194, '', '', '', '2025-10-05', NULL, NULL, NULL, '', '', 0),
(195, '', '', '', '2025-10-05', '', NULL, NULL, NULL, NULL, 0),
(196, '', '', '', '2025-10-05', NULL, '', '', NULL, NULL, 0),
(197, 'hdrcfjvhbkm', '1478451248', 'jfdserrdfghkjl@gmail.com', '2025-10-08', '2659846159', NULL, NULL, NULL, NULL, 1),
(198, '', '', '', '2025-10-13', NULL, NULL, NULL, '', '', 0),
(199, '', '', '', '2025-10-14', '', NULL, NULL, NULL, NULL, 0),
(200, '', '', '', '2025-10-14', NULL, '', '', NULL, NULL, 0),
(201, '', '', '', '2025-10-22', '', NULL, NULL, NULL, NULL, 0),
(202, '', '', '', '2025-10-22', NULL, NULL, NULL, '', '', 0),
(203, '', '', '', '2025-10-22', NULL, '', '', NULL, NULL, 0),
(204, '', '', '', '2025-10-30', NULL, NULL, NULL, '', '', 0),
(205, '', '', '', '2025-10-30', NULL, NULL, NULL, '', '', 0),
(206, '', '', '', '2025-10-31', '', NULL, NULL, NULL, NULL, 0),
(207, '', '', '', '2025-10-31', NULL, '', '', NULL, NULL, 0),
(208, '', '', '', '2025-11-08', NULL, NULL, NULL, '', '', 0),
(209, '', '', '', '2025-11-09', '', NULL, NULL, NULL, NULL, 0),
(210, '', '', '', '2025-11-10', '', NULL, NULL, NULL, NULL, 0),
(211, '', '', '', '2025-11-10', NULL, '', '', NULL, NULL, 0),
(212, '', '', '', '2025-11-16', NULL, NULL, NULL, '', '', 0),
(213, '', '', '', '2025-11-18', '', NULL, NULL, NULL, NULL, 0),
(214, '', '', '', '2025-11-18', NULL, '', '', NULL, NULL, 0),
(215, 'W.G.M.K.Jinadasa ', '0773000441', 'manjulajinadasa1974@gmail.com', '2025-11-18', '103638160', NULL, NULL, NULL, NULL, 1),
(216, 'DFF', '22121', 'sajdja@gmail.com', '2025-11-20', '0760832683', NULL, NULL, NULL, NULL, 1),
(217, '', '', '', '2025-11-20', '', NULL, NULL, NULL, NULL, 0),
(218, 'kjjkkj', '076696956', 'jdskj@jskskj.com', '2025-11-23', '150263', NULL, NULL, NULL, NULL, 1),
(219, '', '', '', '2025-11-24', NULL, NULL, NULL, '', '', 0),
(220, 'Hshahaj', '288299229', 'akk.illa@gmail.com', '2025-11-26', '478848383', NULL, NULL, NULL, NULL, 1),
(221, '', '', '', '2025-11-28', NULL, NULL, NULL, '', '', 0),
(222, '', '', '', '2025-11-28', NULL, NULL, NULL, '', '', 0),
(223, '', '', '', '2025-11-28', NULL, NULL, NULL, '', '', 0),
(224, '', '', '', '2025-11-29', NULL, NULL, NULL, '', '', 0),
(225, '', '', '', '2025-11-29', '', NULL, NULL, NULL, NULL, 0),
(226, '', '', '', '2025-11-29', NULL, '', '', NULL, NULL, 0),
(227, 'HJXAADMJ', '12553565', 'HWAHJKJ@gmail.com', '2025-12-02', '1212123', NULL, NULL, NULL, NULL, 1),
(228, '', '', '', '2025-12-07', NULL, NULL, NULL, '', '', 0),
(229, '', '', '', '2025-12-07', '', NULL, NULL, NULL, NULL, 0),
(230, '', '', '', '2025-12-07', NULL, '', '', NULL, NULL, 0),
(231, '', '', '', '2025-12-08', NULL, '', '', NULL, NULL, 0),
(232, '', '', '', '2025-12-14', '', NULL, NULL, NULL, NULL, 0),
(233, '', '', '', '2025-12-22', '', NULL, NULL, NULL, NULL, 0),
(234, '', '', '', '2025-12-23', NULL, '', '', NULL, NULL, 0),
(235, '', '', '', '2025-12-30', NULL, NULL, NULL, '', '', 0),
(236, '', '', '', '2026-01-07', NULL, '', '', NULL, NULL, 0),
(237, '', '', '', '2026-01-14', NULL, NULL, NULL, '', '', 0),
(238, '', '', '', '2026-01-19', '', NULL, NULL, NULL, NULL, 0),
(239, '', '', '', '2026-01-22', NULL, NULL, NULL, '', '', 0),
(240, '', '', '', '2026-01-22', NULL, '', '', NULL, NULL, 0),
(241, '', '', '', '2026-01-26', '', NULL, NULL, NULL, NULL, 0),
(242, '', '', '', '2026-01-30', NULL, NULL, NULL, '', '', 0),
(243, '', '', '', '2026-01-30', NULL, '', '', NULL, NULL, 0),
(244, '', '', '', '2026-02-03', '', NULL, NULL, NULL, NULL, 0),
(245, '', '', '', '2026-02-07', NULL, '', '', NULL, NULL, 0),
(246, '', '', '', '2026-02-07', NULL, NULL, NULL, '', '', 0),
(247, '', '', '', '2026-02-10', '', NULL, NULL, NULL, NULL, 0),
(248, '', '', '', '2026-02-18', '', NULL, NULL, NULL, NULL, 0),
(249, '', '', '', '2026-02-22', NULL, '', '', NULL, NULL, 0),
(250, '', '', '', '2026-02-25', '', NULL, NULL, NULL, NULL, 0),
(251, '', '', '', '2026-03-03', NULL, '', '', NULL, NULL, 0),
(252, '', '', '', '2026-03-03', NULL, NULL, NULL, '', '', 0),
(253, 'test', '121212121', 'juk@gmail.com', '2026-04-23', '123456789', NULL, NULL, NULL, NULL, 1),
(254, 'test', '1231213132', 'juk@gmail.com', '2026-04-23', '13131212', NULL, NULL, NULL, NULL, 1),
(255, '', '', '', '2026-04-23', NULL, '', '', NULL, NULL, 0),
(256, '', '', '', '2026-04-24', NULL, '', '', NULL, NULL, 0),
(257, '', '', '', '2026-04-27', '', NULL, NULL, NULL, NULL, 0),
(258, '', '', '', '2026-04-28', '', NULL, NULL, NULL, NULL, 0),
(259, '', '', '', '2026-05-01', '', NULL, NULL, NULL, NULL, 0),
(260, 'eryer', '777959789', 'emai@dfdfd.com', '2026-07-19', '', NULL, NULL, NULL, NULL, 1),
(261, 'hghjghjg', '777435518', 'khhf@gmail.com', '2026-07-19', '123123123', NULL, NULL, NULL, NULL, 1),
(262, 'test', '1231213132', 'juk@gmail.com', '2026-07-20', '', NULL, NULL, NULL, NULL, 1);

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
  MODIFY `cor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `partnership_tax`
--
ALTER TABLE `partnership_tax`
  MODIFY `par_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tax`
--
ALTER TABLE `tax`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=263;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
