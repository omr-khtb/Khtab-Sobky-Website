-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2020 at 03:45 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `shirt1` int(100) NOT NULL,
  `shirt2` int(100) NOT NULL,
  `shirt3` int(100) NOT NULL,
  `shirt4` int(100) NOT NULL,
  `shirt5` int(100) NOT NULL,
  `shirt6` int(100) NOT NULL,
  `shirt7` int(100) NOT NULL,
  `shirt8` int(100) NOT NULL,
  `shirt9` int(100) NOT NULL,
  `shirt10` int(100) NOT NULL,
  `shirt11` int(100) NOT NULL,
  `shirt12` int(100) NOT NULL,
  `shirt13` int(100) NOT NULL,
  `shirt14` int(100) NOT NULL,
  `shirt15` int(100) NOT NULL,
  `resultss` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`shirt1`, `shirt2`, `shirt3`, `shirt4`, `shirt5`, `shirt6`, `shirt7`, `shirt8`, `shirt9`, `shirt10`, `shirt11`, `shirt12`, `shirt13`, `shirt14`, `shirt15`, `resultss`) VALUES
(11, 4, 1, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`shirt1`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
