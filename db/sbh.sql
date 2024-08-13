-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2024 at 04:48 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sbh`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin12`
--

CREATE TABLE `admin12` (
  `passenger_name` varchar(15) NOT NULL,
  `contact_number` int(10) NOT NULL,
  `age` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin12`
--

INSERT INTO `admin12` (`passenger_name`, `contact_number`, `age`) VALUES
('bose', 1234567890, 21),
('rahul', 1209876543, 21),
('heman', 2147483647, 21),
('Bose', 2147483647, 21),
('gowtham', 2147483647, 21),
('heman', 14526987, 21),
('arun', 2147483647, 21),
('heman', 12, 7987987),
('arun', 336, 987987),
('sakga', 654, 79879),
('eutu', 989, 79879),
('gowtham', 2147483647, 25),
('gowtham', 2147483647, 25),
('gowtham', 2147483647, 25),
('gowtham', 2147483647, 25),
('gowtham', 2147483647, 25),
('gowtham', 2147483647, 25),
('gowtham', 2147483647, 25),
('gowtham', 2147483647, 25),
('gowtham', 2147483647, 25),
('gowtham', 2147483647, 25),
('gowtham', 2147483647, 25),
('gowtham', 2147483647, 25),
('gowtham', 2147483647, 25),
('gowtham', 2147483647, 25),
('gowtham', 2147483647, 25),
('gowtham', 2147483647, 25),
('gowtham', 2147483647, 25),
('gowtham', 2147483647, 25),
('gowtham', 2147483647, 25),
('gowtham', 2147483647, 25),
('gowtham', 2147483647, 25),
('gowtham', 2147483647, 25),
('gowtham', 2147483647, 25),
('gowtham', 2147483647, 25),
('gowtham', 2147483647, 25),
('gowtham', 2147483647, 25),
('gowtham', 2147483647, 25),
('gowtham', 2147483647, 25),
('gowtham', 2147483647, 25),
('gowtham', 2147483647, 25),
('gowtham', 2147483647, 25),
('gowtham', 2147483647, 25),
('gowtham', 2147483647, 25),
('sakthi', 14526987, 50),
('sakthi', 14526987, 50),
('sakthi', 14526987, 50),
('sakthi', 14526987, 50);

-- --------------------------------------------------------

--
-- Table structure for table `details12`
--

CREATE TABLE `details12` (
  `busname` varchar(15) NOT NULL,
  `busno` varchar(16) NOT NULL,
  `str` varchar(15) NOT NULL,
  `arrival` varchar(15) NOT NULL,
  `typeofbus` varchar(15) NOT NULL,
  `availability1` varchar(15) NOT NULL,
  `additionaldetails` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `details12`
--

INSERT INTO `details12` (`busname`, `busno`, `str`, `arrival`, `typeofbus`, `availability1`, `additionaldetails`) VALUES
('MRK', '-', '10:00Am', '10:40Am', 'Private', 'Available', 'Click Here'),
('DTK', '-', '09:00Am', '09:40Am', 'Private', 'Available', 'Click Here'),
('Government', '2A', '11:20Am', '12:00Am', 'Private', 'Available', 'Click Here'),
('sri', '-', '07:00Am', '07:40 AM', 'Private', 'available', 'Click Here'),
('RRR', '-', '07:00PM', '07:40 PM', 'Private', 'available', 'Click Here'),
('fos', '-', '08:00AM', '08:40AM', 'Private', 'available', 'Click Here'),
('government', '13', '7.00 am', '8.00 am', 'public', 'available', 'Click Here');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
