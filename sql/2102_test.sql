-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2021 at 01:10 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2102_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `candidateid` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` int(10) NOT NULL,
  `nationality` text NOT NULL,
  `nicno` varchar(20) NOT NULL,
  `contactno` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `telephone` varchar(12) NOT NULL,
  `address` varchar(50) NOT NULL,
  `department` varchar(20) NOT NULL,
  `expsalary` float NOT NULL,
  `position` varchar(20) NOT NULL,
  `wrkschedule` varchar(25) NOT NULL,
  `eduqual` varchar(50) NOT NULL,
  `profqual` varchar(50) NOT NULL,
  `workcomp` varchar(20) NOT NULL,
  `workdesig` varchar(20) NOT NULL,
  `workfrom` date DEFAULT NULL,
  `workto` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`candidateid`, `firstname`, `lastname`, `fullname`, `dob`, `gender`, `nationality`, `nicno`, `contactno`, `email`, `telephone`, `address`, `department`, `expsalary`, `position`, `wrkschedule`, `eduqual`, `profqual`, `workcomp`, `workdesig`, `workfrom`, `workto`) VALUES
(66, 'Kate', 'Peter', 'Kate Peter', '1990-01-01', 0, 'Sri Lankan', '199020304012', '', 'katepeter@gmail.com', '', '28, Richard Street, Kollupitiya, Colombo - 03', 'IT', 0, 'Manager', '', '', '', '', '', '0000-00-00', '0000-00-00'),
(67, 'Jack', 'Samuel', 'Jack Samuel', '1993-01-19', 0, 'Sri Lankan', '199312131415', '', 'jacksamuel@gmail.com', '', '20, Green Street, Kollupitiya, Colombo - 03', 'Marketing', 0, 'Sales Executive', '', '', '', '', '', '0000-00-00', '0000-00-00'),
(68, 'Jill', 'Samuel', 'Jill Samuel', '1993-01-19', 0, 'Sri Lankan', '199312131422', '', 'jillsamuel@gmail.com', '', '20, White Street, Kollupitiya, Colombo - 03', 'Marketing', 0, 'Sales Executive', '', '', '', '', '', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `departmentId` varchar(20) NOT NULL,
  `departmentName` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `location` varchar(100) NOT NULL,
  `createdBy` varchar(50) NOT NULL,
  `createdDate` date NOT NULL,
  `depManagerEmpId` varchar(20) NOT NULL,
  `depManagerName` varchar(50) NOT NULL,
  `depManagerContact` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`departmentId`, `departmentName`, `description`, `location`, `createdBy`, `createdDate`, `depManagerEmpId`, `depManagerName`, `depManagerContact`) VALUES
('DP001', 'Marketing', '', '151 Kirula Rd, Colombo', 'Priya Silva', '2021-10-07', 'AC0020', 'Milan Perera', 786667333),
('DP002', 'Finance', '', '12 Green Rd, Nugegoda', 'Priya Silva', '2021-10-21', 'FF0023', 'Rahal Perera', 786667876);

-- --------------------------------------------------------

--
-- Table structure for table `systemusers`
--

CREATE TABLE `systemusers` (
  `empId` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` enum('m','f','o') NOT NULL,
  `userRole` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `systemusers`
--

INSERT INTO `systemusers` (`empId`, `name`, `gender`, `userRole`, `department`, `email`, `mobile`, `address`, `username`, `password`) VALUES
('AC0010', 'Nelson Villa', 'm', 'admin', 'Marketing', 'nelsa@gmail.com', 712532342, 'No. 23/B, Green Rd, Wattala', 'nelson01', '$2y$10$gwm.8pb1NidTdffKo.Hv/OljLytzRaRkUUpEcNEtQhdNhkJXl80/2'),
('SE1800', 'Fiona', 'f', 'leave-manager', 'HR', 'fiona123@gmail.com', 712341231, 'No. 43/A, Temple Rd, Colombo', 'fiona98', '$2y$10$qmzhCmO/nXncPzeKtukXmO0B2zsIjywvU0ndQd.cPsapL9jjQURUK'),
('SE1900', 'Priya Perera', 'f', 'admin', 'HR', 'priya123@gmail.com', 712536475, 'No. 23/B, Grace Rd, Wattala', 'priya2021', '$2y$10$T8WooS6SX2te4zt6/jX2NO2yO8ikvcuxFw.3LSS4BtM8f91Sr/VAy');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `position`) VALUES
(7, 'kalana', '$2y$10$P747FuXVjc2jmPhfgz562OFycG5iMndYxrdyQ.IrfZV5s7UpAirdq', 'hr-manager'),
(8, 'jayasanka', '$2y$10$gvFiMW4P2dghSXhhZXLqQ.tmqFowQWnEm1XNm5k.LXtulDMcQpQeC', 'leave-manager'),
(9, 'lakshika', '$2y$10$duX/Elhk9PMXMftAcxS/LeDJ9tV4mKDbfB0UNmyG2rv0FEIRvZdbO', 'recruitment-manager'),
(10, 'sadun', '$2y$10$mQRxrY2nPn0/cyFHYjCRl.w8o2YgPV0aCO4PQxUCYrlATMZHad9iS', 'admin'),
(11, 'dileepa', '$2y$10$lBMAz4.f8wlngcrY7Ejk.ufO4faWtdJqopLNHNgVXQ8KmSdS6Umpi', 'admin'),
(12, 'lakmina', '$2y$10$WUAOSiENgVN2P0Fur7iQbOfAH9C2O55SRgkAzR7kcAG6tS3wMAK8y', 'employee'),
(13, 'linda', '$2y$10$DqYLuwNunBemN0ZqTGeKD.XGUqu6Eu6xDxpQB4aWBLLUnQqrEzDVu', 'admin'),
(14, 'Matilda', '$2y$10$XAEKa0lEXSoTqjUKY.dzEeL.iRi2RXEPDkfDo7g177gCD2EuE9cwG', 'admin'),
(15, 'Sofi', '$2y$10$NRuwNV8fitA3fOH2IRqJ4.y6Ud1kNLGxuMjnjOCJfz4ki9CO.zWzO', 'leave-manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`candidateid`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`departmentId`);

--
-- Indexes for table `systemusers`
--
ALTER TABLE `systemusers`
  ADD PRIMARY KEY (`empId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `candidateid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
