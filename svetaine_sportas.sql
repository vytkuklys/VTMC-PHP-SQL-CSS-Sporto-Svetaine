-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2020 at 04:07 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `svetaine_sportas`
--

-- --------------------------------------------------------

--
-- Table structure for table `ilonos_stats`
--

CREATE TABLE `ilonos_stats` (
  `dvitaskiai` int(11) DEFAULT NULL,
  `tritaskiai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_lithuanian_ci;

--
-- Dumping data for table `ilonos_stats`
--

INSERT INTO `ilonos_stats` (`dvitaskiai`, `tritaskiai`) VALUES
(2, 3),
(2, 3),
(2, 0),
(2, 0),
(2, 0),
(2, 0),
(0, 0),
(0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `ingos_stats`
--

CREATE TABLE `ingos_stats` (
  `dvitaskiai` int(11) DEFAULT NULL,
  `tritaskiai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_lithuanian_ci;

--
-- Dumping data for table `ingos_stats`
--

INSERT INTO `ingos_stats` (`dvitaskiai`, `tritaskiai`) VALUES
(2, 3),
(0, 0),
(0, 0),
(0, 3),
(0, 3),
(2, 3),
(0, 3),
(2, 0),
(0, 0),
(2, 3),
(0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `ingridos_stats`
--

CREATE TABLE `ingridos_stats` (
  `dvitaskiai` int(11) DEFAULT NULL,
  `tritaskiai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_lithuanian_ci;

--
-- Dumping data for table `ingridos_stats`
--

INSERT INTO `ingridos_stats` (`dvitaskiai`, `tritaskiai`) VALUES
(0, 3),
(2, 0),
(2, 0),
(0, 3),
(2, 0),
(2, 0),
(0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `zaidejos`
--

CREATE TABLE `zaidejos` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) COLLATE utf16_lithuanian_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf16_lithuanian_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf16_lithuanian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_lithuanian_ci;

--
-- Dumping data for table `zaidejos`
--

INSERT INTO `zaidejos` (`id`, `firstname`, `lastname`, `photo`) VALUES
(1, 'ingrida', 'Brazdeikytė', 'images/a.jpg'),
(2, 'ilona', 'Brazdeikienė', 'images/b.jpg'),
(3, 'inga', 'Brazdeikaitė', 'images/c.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `zaidejos`
--
ALTER TABLE `zaidejos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `zaidejos`
--
ALTER TABLE `zaidejos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
