-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2022 at 10:23 PM
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
-- Database: `ekalakaar`
--

-- --------------------------------------------------------

--
-- Table structure for table `googlesignup`
--

CREATE TABLE `googlesignup` (
  `userId` varchar(50) NOT NULL,
  `givenName` varchar(50) NOT NULL,
  `familyName` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `picture` varchar(500) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `googlesignup`
--

INSERT INTO `googlesignup` (`userId`, `givenName`, `familyName`, `gender`, `email`, `picture`, `datetime`) VALUES
('105922823713679935483', 'Saksham', 'Jain', '', 'coolsakshu30@gmail.com', 'https://lh3.googleusercontent.com/a-/AFdZucrHeRb2h_pLttlaj04qT6_0Cr0PQQQD-dzjfkv1RA=s96-c', '2022-09-03 22:43:49'),
('100974808804203371296', 'Saksham', 'Jain', '', 'sj4u001@gmail.com', 'https://lh3.googleusercontent.com/a-/AFdZucpyf1qbRwP6klY_pU6aJv13V1_rOYjMYWrshxdz=s96-c', '2022-09-03 22:45:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `googlesignup`
--
ALTER TABLE `googlesignup`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `userId` (`userId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
