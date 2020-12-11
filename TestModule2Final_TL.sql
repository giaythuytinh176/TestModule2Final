-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 11, 2020 at 09:25 AM
-- Server version: 8.0.22
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `TestModule2Final_TL`
--

-- --------------------------------------------------------

--
-- Table structure for table `SuperMarketManager`
--

CREATE TABLE `SuperMarketManager` (
  `ProductID` int NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `ProductType` varchar(255) NOT NULL,
  `Price` int NOT NULL,
  `Quantity` int NOT NULL,
  `Created` date NOT NULL,
  `Description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `SuperMarketManager`
--

INSERT INTO `SuperMarketManager` (`ProductID`, `ProductName`, `ProductType`, `Price`, `Quantity`, `Created`, `Description`) VALUES
(7, 'panasonci inverter23233', 'Điện thoại', 30000, 300, '2020-01-11', 'dasdas'),
(8, 'panasonci inverter', 'Điều hoà', 200000, 220, '2020-10-10', 'day la dieu hoa nhiet do'),
(10, 'Khoá cửa vân tay Samsung SHP-DH5381212', 'Điện thoại', 383838, 333333, '2020-11-10', 'sdfsdfsd23'),
(11, 'iphone 14', 'Điện thoại', 3003030, 30, '2002-02-10', '212123123'),
(12, 'panasonci inverter', 'Điện thoại', 2323234, 43, '2020-02-10', '233232332');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `SuperMarketManager`
--
ALTER TABLE `SuperMarketManager`
  ADD PRIMARY KEY (`ProductID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `SuperMarketManager`
--
ALTER TABLE `SuperMarketManager`
  MODIFY `ProductID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
