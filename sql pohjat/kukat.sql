-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2018 at 10:21 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lauriom`
--

-- --------------------------------------------------------

--
-- Table structure for table `kukat`
--

CREATE TABLE `kukat` (
  `kukat_id` int(11) NOT NULL,
  `kukat_nimi` varchar(256) DEFAULT NULL,
  `kukat_hinta` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kukat`
--

INSERT INTO `kukat` (`kukat_id`, `kukat_nimi`, `kukat_hinta`) VALUES
(1, 'pelargonia', 2),
(2, 'orvokki', 8),
(3, 'malva', 4),
(4, 'syysmaitiainen', 6),
(5, 'lopelia ', 12),
(6, 'pelargonia2', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kukat`
--
ALTER TABLE `kukat`
  ADD PRIMARY KEY (`kukat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kukat`
--
ALTER TABLE `kukat`
  MODIFY `kukat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
