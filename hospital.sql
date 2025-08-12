-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2025 at 04:43 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `hospi`
--

CREATE TABLE `hospi` (
  `hos_id` int(11) NOT NULL,
  `hospitalname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Phonenumber` varchar(255) NOT NULL,
  `himage` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `Disease` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospi`
--

INSERT INTO `hospi` (`hos_id`, `hospitalname`, `email`, `Phonenumber`, `himage`, `location`, `Disease`) VALUES
(1, 'HMIT', 'hmit@gmail.com', '0889553', 'fresh.png', 'karachi glushan johar', 'cancer'),
(2, 'agakhan hospital', 'agakhan@gmail.com', '0451555792', 'images.png', ' Plot #4, 2 Jamshoro Rd, Hyderabad', 'COVID-19, malaria, T.B., and dengue. '),
(3, 'MCR HOSPITAL', 'mcr@gmail.com', '9002553219', 'tiny-character-launching-startup-rocket.png', 'karachi glushan-e-iqbal', 'eye');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hospi`
--
ALTER TABLE `hospi`
  ADD PRIMARY KEY (`hos_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hospi`
--
ALTER TABLE `hospi`
  MODIFY `hos_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
