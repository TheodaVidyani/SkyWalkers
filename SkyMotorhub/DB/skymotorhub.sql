-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2022 at 08:13 PM
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
-- Database: `skymotorhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contactus_ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(45) NOT NULL,
  `subject` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `c_nic` varchar(45) NOT NULL,
  `c_name` varchar(45) NOT NULL,
  `c_address` varchar(45) NOT NULL,
  `c_district` varchar(45) NOT NULL,
  `c_city` varchar(45) NOT NULL,
  `c_telno` int(11) NOT NULL,
  `c_email` varchar(45) NOT NULL,
  `contact_contactus_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `reviews_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `rate` int(11) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `image` blob NOT NULL,
  `customer_customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `U_ID` int(10) NOT NULL,
  `U_Name` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `v_id` int(11) NOT NULL,
  `v_reg_no` varchar(45) NOT NULL,
  `reg_year` int(11) NOT NULL,
  `manufac_year` int(11) NOT NULL,
  `type` varchar(45) NOT NULL,
  `brand` varchar(45) NOT NULL,
  `model` varchar(45) NOT NULL,
  `engine_capacity` varchar(45) NOT NULL,
  `condition` varchar(45) NOT NULL,
  `transmission` varchar(45) NOT NULL,
  `fuel_type` varchar(45) NOT NULL,
  `mileage` int(11) NOT NULL,
  `features` varchar(500) NOT NULL,
  `customer_customer_id` int(11) NOT NULL,
  `photos` blob NOT NULL,
  `additional_info` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactus_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `contact_contactus_id` (`contact_contactus_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD KEY `customer_customer_id` (`customer_customer_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`U_ID`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`v_id`),
  ADD KEY `customer_customer_id` (`customer_customer_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`contact_contactus_id`) REFERENCES `contact` (`contactus_ID`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`customer_customer_id`) REFERENCES `customer` (`c_id`);

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `vehicle_ibfk_1` FOREIGN KEY (`customer_customer_id`) REFERENCES `customer` (`c_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
