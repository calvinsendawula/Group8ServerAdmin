-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2022 at 11:31 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `group8db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE IF NOT EXISTS `tbl_member` (
  `studentID` int(6) NOT NULL,
  `studentName` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedOn` timestamp NOT NULL DEFAULT current_timestamp(),
  `isDeleted` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`studentID`, `studentName`, `createdAt`, `updatedOn`, `isDeleted`) VALUES
(129277, 'Bosibori Cindy Sydney', '2022-11-06 09:25:08', '2022-11-06 09:25:08', '0'),
(131590, 'Kendi Njeru', '2022-11-06 09:26:17', '2022-11-06 09:26:17', '0'),
(134022, 'Mwikali Assumpta', '2022-11-06 09:26:31', '2022-11-06 09:26:31', '0'),
(135012, 'Wasike Jean Gloria', '2022-11-06 09:25:33', '2022-11-06 09:25:33', '0'),
(136047, 'Sendawula Calvin Jonathan', '2022-11-06 09:25:53', '2022-11-06 09:25:53', '0'),
(136809, 'Fleskine Omondi', '2022-11-06 09:26:52', '2022-11-06 09:26:52', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`studentID`),
  ADD UNIQUE KEY `studentName` (`studentName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
