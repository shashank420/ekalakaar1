-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2022 at 10:26 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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

-- --------------------------------------------------------

--
-- Table structure for table `handlecontact`
--

CREATE TABLE `handlecontact` (
  `ContactID` int(11) NOT NULL,
  `ContactNumber` bigint(10) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Location` varchar(200) NOT NULL,
  `Education` varchar(45) NOT NULL,
  `Proposal` longtext NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `S.no` int(11) NOT NULL,
  `ApplicationFor` varchar(40) NOT NULL,
  `Role_of_Application` varchar(50) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `PhoneNumber` bigint(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Age` int(3) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Caste` varchar(50) NOT NULL,
  `Religion` varchar(20) NOT NULL,
  `Height` decimal(10,0) NOT NULL,
  `Weight1` decimal(10,0) NOT NULL,
  `Lang` varchar(25) NOT NULL,
  `Education` varchar(50) NOT NULL,
  `Skills` varchar(50) NOT NULL,
  `Experience` varchar(50) NOT NULL,
  `Awards` varchar(25) NOT NULL,
  `weblinks` varchar(500) NOT NULL,
  `Reference` varchar(30) NOT NULL,
  `pdf` varchar(500) NOT NULL,
  `Support` varchar(50) NOT NULL,
  `Suggestions` varchar(500) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`S.no`, `ApplicationFor`, `Role_of_Application`, `FirstName`, `LastName`, `PhoneNumber`, `Email`, `Age`, `Gender`, `Caste`, `Religion`, `Height`, `Weight1`, `Lang`, `Education`, `Skills`, `Experience`, `Awards`, `weblinks`, `Reference`, `pdf`, `Support`, `Suggestions`, `Date`) VALUES
(1, 'Current Opportunies', 'Ghumra Dance', 'V', 'Shashank', 9874822689, 'lucknow.shashank@gmail.com', 45, 'Male', 'OBC', 'Jain', '67', '45', 'ui', '45', '45', '45', '45', '45', '45', 'cars_ds_final.csv', 'Work (full time/ assignment)', '45', '2022-09-05 00:37:03'),
(2, 'Current Opportunies', 'Ghumra Dance', 'V', 'Shashank', 9874822689, 'lucknow.shashank@gmail.com', 45, 'Male', 'OBC', 'Jain', '67', '45', 'ui', '45', '45', '45', '45', '45', '45', 'cars_ds_final.csv', 'Work (full time/ assignment)', '45', '2022-09-05 00:40:55'),
(3, 'Current Opportunies', 'Ghumra Dance', 'V', 'Shashank', 9874822689, 'lucknow.shashank@gmail.com', 45, 'Male', 'OBC', 'Jain', '67', '45', 'ui', '45', '45', '45', '45', '45', '45', 'cars_ds_final.csv', 'Work (full time/ assignment)', '45', '2022-09-05 00:54:45');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `userId` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `emailId` varchar(50) NOT NULL,
  `countryCode` varchar(5) NOT NULL,
  `phoneNo` int(10) NOT NULL,
  `jobName` varchar(30) NOT NULL,
  `userPassword` varchar(30) NOT NULL,
  `registrationDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`userId`, `firstName`, `lastName`, `emailId`, `countryCode`, `phoneNo`, `jobName`, `userPassword`, `registrationDate`) VALUES
(1, 'John', 'Doe', 'john.doe@gmail.com', '+91', 1234567890, 'Artist', 'john123', '2022-08-28 03:06:20'),
(2, 'Alisha', 'Sharma', 'alisha123@gmail.com', '91', 1234567812, '', 'alisha123', '2022-08-28 03:45:50'),
(7, 'Mahatma', 'Gandhi', 'mahatama@sabarmati.com', '+91', 2147483647, 'Manager', '369', '2022-08-28 12:29:06'),
(10, 'v', 'Shashank', 'l@gmail.com', '+91', 46464646, 'Artist', '56', '2022-08-31 02:49:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `googlesignup`
--
ALTER TABLE `googlesignup`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `userId` (`userId`);

--
-- Indexes for table `handlecontact`
--
ALTER TABLE `handlecontact`
  ADD PRIMARY KEY (`ContactID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`S.no`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `emailId` (`emailId`),
  ADD UNIQUE KEY `phoneNo` (`phoneNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `handlecontact`
--
ALTER TABLE `handlecontact`
  MODIFY `ContactID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `S.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
