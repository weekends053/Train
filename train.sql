-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 05, 2020 at 07:47 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `train`
--

-- --------------------------------------------------------

--
-- Table structure for table `end_station`
--

CREATE TABLE `end_station` (
  `t_id` int(11) NOT NULL,
  `end_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `E_Time_in` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `end_station`
--

INSERT INTO `end_station` (`t_id`, `end_name`, `E_Time_in`) VALUES
(72, 'กรุงเทพฯ', '14.55'),
(161, 'กรุงเทพฯ', '14.15'),
(424, 'นครราชสีมา', '09.50'),
(428, 'นครราชสีมา', '11.45');

-- --------------------------------------------------------

--
-- Table structure for table `huayrach_station`
--

CREATE TABLE `huayrach_station` (
  `t_id` int(11) NOT NULL,
  `H_Time_in` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `H_Time_out` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `huayrach_station`
--

INSERT INTO `huayrach_station` (`t_id`, `H_Time_in`, `H_Time_out`) VALUES
(72, '08.22', '08.23'),
(161, '05.53', '05.54'),
(424, '07.39', '07.40'),
(428, '09.38', '09.39');

-- --------------------------------------------------------

--
-- Table structure for table `origin_station`
--

CREATE TABLE `origin_station` (
  `t_id` int(11) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `Time_out` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `origin_station`
--

INSERT INTO `origin_station` (`t_id`, `s_name`, `Time_out`) VALUES
(72, 'อุบลราชธานี', '05.40'),
(161, 'สุรินทร์', '05.20'),
(424, 'สำโรงทาบ', '05.50'),
(428, 'อุบลราชธานี', '06.20');

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `t_id` int(11) NOT NULL,
  `note` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`t_id`, `note`) VALUES
(72, 'รถด่วนดีเซลราง'),
(161, 'รถธรรมดา'),
(424, 'รถดีเซลราง'),
(428, 'รถดีเซลราง');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `end_station`
--
ALTER TABLE `end_station`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `huayrach_station`
--
ALTER TABLE `huayrach_station`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `origin_station`
--
ALTER TABLE `origin_station`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`t_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `end_station`
--
ALTER TABLE `end_station`
  ADD CONSTRAINT `end_station_ibfk_1` FOREIGN KEY (`t_id`) REFERENCES `train` (`t_id`);

--
-- Constraints for table `huayrach_station`
--
ALTER TABLE `huayrach_station`
  ADD CONSTRAINT `huayrach_station_ibfk_1` FOREIGN KEY (`t_id`) REFERENCES `train` (`t_id`);

--
-- Constraints for table `origin_station`
--
ALTER TABLE `origin_station`
  ADD CONSTRAINT `origin_station_ibfk_1` FOREIGN KEY (`t_id`) REFERENCES `train` (`t_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
