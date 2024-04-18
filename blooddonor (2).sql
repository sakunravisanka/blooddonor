-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2024 at 05:44 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blooddonor`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `becomedonor`
--

CREATE TABLE `becomedonor` (
  `id` int(20) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `age` int(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `bloodgroup` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `becomedonor`
--

INSERT INTO `becomedonor` (`id`, `fullname`, `age`, `phone`, `email`, `bloodgroup`, `gender`, `address`) VALUES
(2, 'sakun ravisanka', 24, 713383358, 'sakun1@gmail.com', 'A+', 'male', 'asasa'),
(16, 'shashika', 24, 717999522, 'sasas68121@gmail.com', 'AB+', 'male', '215'),
(17, 'kasun', 23, 717999528, 'kasun1@gmail.com', 'B+', 'male', 'Vauniywa'),
(19, 'kanishka', 23, 713383358, 'kanishka12@gmail.com', 'O+', 'male', 'polonnaruwa'),
(20, 'kusum amarashinge', 53, 717999528, 'saman12@gmail.com', 'AB+', 'female', 'katiyawa'),
(21, 'sakuni', 30, 717999522, 'sakuni123@gmal', 'A+', 'female', 'katiywa');

-- --------------------------------------------------------

--
-- Table structure for table `conta`
--

CREATE TABLE `conta` (
  `id` int(20) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `phone_number` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `conta`
--

INSERT INTO `conta` (`id`, `full_name`, `phone_number`, `email`, `message`) VALUES
(1, 'sakun', 1221121212, 'sakun1@gmail.com', 'hey'),
(2, 'sakun', 1221121212, 'sakun1@gmail.com', 'hey'),
(3, 'sakun', 1221121212, 'sakun1@gmail.com', 'hey'),
(4, 'sakun', 784515454, 'sakunravisanka1@gamil.com', 'hiii'),
(5, 'sakun', 784515454, 'sakunravisanka1@gamil.com', 'hiii'),
(6, 'sakun', 784515454, 'sakunravisanka1@gamil.com', 'hiii'),
(7, 'sakun', 784515454, 'sakunravisanka1@gamil.com', 'hiii'),
(8, 'ravi', 784515454, 'sakunravisanka1@gmail.com', 'hii'),
(9, 'sakuni', 784515454, 'sakuni@gmail.com', 'thanks'),
(10, 'ravi', 1221121212, 'sakunravisanka1@gmail.com', 'yoooo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `becomedonor`
--
ALTER TABLE `becomedonor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conta`
--
ALTER TABLE `conta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `becomedonor`
--
ALTER TABLE `becomedonor`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `conta`
--
ALTER TABLE `conta`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
