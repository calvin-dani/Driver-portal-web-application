-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2021 at 11:07 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `C_ID` varchar(10) NOT NULL,
  `MANUFACTURER` varchar(10) NOT NULL,
  `MODEL` varchar(10) NOT NULL,
  `YEAR_PRODUCTION` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`C_ID`, `MANUFACTURER`, `MODEL`, `YEAR_PRODUCTION`) VALUES
('MS01', 'Maruti Suz', '800', 2021),
('T01', 'Toyota', 'Yaris', 2005);

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `U_ID` varchar(10) NOT NULL,
  `C_ID` varchar(10) NOT NULL,
  `INSURANCE_PLAN` int(11) NOT NULL,
  `REIMBURSMENT` int(11) NOT NULL,
  `GRADE` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `uname` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `CLIENT` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`uname`, `password`, `CLIENT`) VALUES
('admin', 'admin123', 'USER');

-- --------------------------------------------------------

--
-- Table structure for table `market`
--

CREATE TABLE `market` (
  `C_ID` varchar(10) NOT NULL,
  `BUY` int(11) NOT NULL,
  `SELL` int(11) NOT NULL,
  `AGE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `police`
--

CREATE TABLE `police` (
  `POLICE U_ID` varchar(10) NOT NULL,
  `C_ID` varchar(10) NOT NULL,
  `FINES_DUE` int(11) NOT NULL,
  `ACCIDENTS` int(11) NOT NULL,
  `INFRACTIONS` int(11) NOT NULL,
  `COLOUR` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `specs`
--

CREATE TABLE `specs` (
  `S C_ID` varchar(10) NOT NULL,
  `ENGINE_DIS` varchar(10) NOT NULL,
  `FUEL_TYPE` varchar(10) NOT NULL,
  `MILAGE` varchar(10) NOT NULL,
  `TRANSMISSION` varchar(10) NOT NULL,
  `ENGINE` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uid`
--

CREATE TABLE `uid` (
  `LICENSE` varchar(10) NOT NULL,
  `VALIDITY` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uid`
--

INSERT INTO `uid` (`LICENSE`, `VALIDITY`) VALUES
('UID009', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `U_ID` varchar(10) NOT NULL,
  `FIRST_NAME` varchar(10) NOT NULL,
  `LAST_NAME` varchar(10) NOT NULL,
  `C_ID` varchar(10) NOT NULL,
  `COLOUR` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`U_ID`, `FIRST_NAME`, `LAST_NAME`, `C_ID`, `COLOUR`) VALUES
('UID002', 'Calvin', 'Dani', 'MS01', 'Green'),
('UID003', 'Tushar', '', 'B01', 'Black'),
('UID009', 'Ashwini', 'Doddamini', 'T01', 'Red');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
  ADD KEY `U_ID` (`U_ID`);

--
-- Indexes for table `market`
--
ALTER TABLE `market`
  ADD KEY `C_ID` (`C_ID`);

--
-- Indexes for table `police`
--
ALTER TABLE `police`
  ADD KEY `P U_ID` (`POLICE U_ID`);

--
-- Indexes for table `specs`
--
ALTER TABLE `specs`
  ADD KEY `S C_ID` (`S C_ID`);

--
-- Indexes for table `uid`
--
ALTER TABLE `uid`
  ADD KEY `LICENSE` (`LICENSE`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`U_ID`),
  ADD UNIQUE KEY `C_ID` (`C_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `insurance`
--
ALTER TABLE `insurance`
  ADD CONSTRAINT `U_ID` FOREIGN KEY (`U_ID`) REFERENCES `user` (`U_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `market`
--
ALTER TABLE `market`
  ADD CONSTRAINT `C_ID` FOREIGN KEY (`C_ID`) REFERENCES `car` (`C_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `police`
--
ALTER TABLE `police`
  ADD CONSTRAINT `P U_ID` FOREIGN KEY (`POLICE U_ID`) REFERENCES `user` (`U_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `specs`
--
ALTER TABLE `specs`
  ADD CONSTRAINT `S C_ID` FOREIGN KEY (`S C_ID`) REFERENCES `car` (`C_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `uid`
--
ALTER TABLE `uid`
  ADD CONSTRAINT `LICENSE` FOREIGN KEY (`LICENSE`) REFERENCES `user` (`U_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
