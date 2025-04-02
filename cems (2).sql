-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2025 at 03:48 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cems`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(50) NOT NULL,
  `event_price` int(11) DEFAULT NULL,
  `participents` int(11) NOT NULL DEFAULT 0,
  `img_link` text DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_title`, `event_price`, `participents`, `img_link`, `type_id`) VALUES
(1, 'technical Quiz', 130, 0, 'images/quiz.png', 1),
(2, 'Competitive Coding', 160, 0, 'images/coding.jpg', 1),
(5, 'Fashion Show', 100, 0, 'images/fashion.jpg', 3),
(9, 'Competitive Coding', 111, 0, 'images/coding.jpg', 1),
(11, 'Fashion Show', 100, 1, 'images/fashion.jpg', 3),
(12, 'Dancing', 200, 0, 'images/dance.jpg', 3),
(22, 'Rangoli', 30, 0, 'images/rangoli.jpg', 4),
(111, 'Fashion Show', 99, 0, 'images/fashion.jpg', 3),
(112, 'Freefire', 150, 2, 'images/freefire.jpg', 2),
(113, 'pubg', 100, 1, 'images/pubg.jpg', 2),
(119, 'Competitive Coding', 110, 1, 'images/coding.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event_info`
--

CREATE TABLE `event_info` (
  `event_id` int(10) NOT NULL,
  `Date` date DEFAULT NULL,
  `time` varchar(20) NOT NULL,
  `location` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `event_info`
--

INSERT INTO `event_info` (`event_id`, `Date`, `time`, `location`) VALUES
(1, '2022-11-16', '3.00pm', '135 Room'),
(2, '2022-11-16', '1.00pm', '020 Lab'),
(3, '2022-11-16', '11.00am', '136 Room'),
(4, '2022-11-16', '9.30am', '020 Lab'),
(5, '2022-10-17', '10.00am', '121 Lab'),
(6, '2022-10-17', '11.00am', '122 Lab'),
(7, '2022-10-17', '9.30pm', 'ON Stage'),
(8, '2022-10-17', '7.00pm', 'ON Stage'),
(9, '2022-10-17', '5.00pm', 'ON Stage'),
(10, '2022-10-17', '6.00pm', 'ON Stage'),
(11, '2022-10-16', '10.30am', '123 Room'),
(12, '2022-10-16', '10.00am', '021 Lab'),
(13, '2022-11-12', '3pm', '021 lab'),
(14, '2022-11-13', '2.00pm', 'Quandrangle'),
(15, '2025-03-17', '10', 'gaming room'),
(22, '2025-04-05', '10', 'near classroom'),
(111, '2025-04-04', '11', 'auditoriun'),
(112, '2025-03-22', '8', 'gaming room'),
(113, '2025-03-24', '8', 'classroom'),
(119, '2025-03-31', '3', 'Lab1');

-- --------------------------------------------------------

--
-- Table structure for table `event_type`
--

CREATE TABLE `event_type` (
  `type_id` int(10) NOT NULL,
  `type_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `event_type`
--

INSERT INTO `event_type` (`type_id`, `type_title`) VALUES
(1, 'Technical Events'),
(2, 'Gaming Events'),
(3, 'On Stage Events'),
(4, 'Off Stage Events');

-- --------------------------------------------------------

--
-- Table structure for table `participent`
--

CREATE TABLE `participent` (
  `usn` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `sem` int(11) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `college` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `participent`
--

INSERT INTO `participent` (`usn`, `name`, `branch`, `sem`, `email`, `phone`, `college`) VALUES
('U03MB22S0036', 'anil', 'BCA', 5, 'praveenkumar0077@gmail.com', '7338020862', 'SFS COllege'),
('U03MB22S0038', 'Rockstar', 'BCA', 6, 'rockstar77@gmail.com', '8793782038', 'SfS college'),
('U03MB22S0077', 'Praveen', 'BCA', 6, 'praveenkumar0077@gmail.com', '7338020862', 'SFS COllege'),
('U03MB22S0136', 'shubham', 'BCA', 5, 'shubamsiu@gmail.com', '7338020862', 'SFS COllege');

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

CREATE TABLE `registered` (
  `usn` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `sem` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `college` varchar(50) NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registered`
--

INSERT INTO `registered` (`usn`, `name`, `branch`, `sem`, `email`, `phone`, `college`, `event_id`) VALUES
('U03MB22S0036', 'anil', 'BCA', 5, 'praveenkumar0077@gmail.com', '7338020862', 'SFS COllege', 119),
('U03MB22S0038', 'Rockstar', 'BCA', 6, 'rockstar77@gmail.com', '8793782038', 'SfS college', 11),
('U03MB22S0077', 'Praveen', 'BCA', 6, 'praveenkumar0077@gmail.com', '7338020862', 'SFS COllege', 112),
('U03MB22S0077', 'Praveen', 'BCA', 6, 'praveenkumar0077@gmail.com', '7338020862', 'SFS COllege', 113),
('U03MB22S0136', 'shubham', 'BCA', 5, 'shubamsiu@gmail.com', '7338020862', 'SFS COllege', 112);

-- --------------------------------------------------------

--
-- Table structure for table `staff_coordinator`
--

CREATE TABLE `staff_coordinator` (
  `stid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `staff_coordinator`
--

INSERT INTO `staff_coordinator` (`stid`, `name`, `phone`, `event_id`) VALUES
(14, 'Bhavya', '9876543210', 14),
(15, 'tarun', NULL, 15),
(22, 'Saranya Mam', NULL, 22),
(111, 'Renuka', NULL, 111),
(112, 'tarun', NULL, 112),
(113, 'Madan', NULL, 113),
(119, 'shivani', NULL, 119);

-- --------------------------------------------------------

--
-- Table structure for table `student_coordinator`
--

CREATE TABLE `student_coordinator` (
  `sid` int(11) NOT NULL,
  `st_name` varchar(100) NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `student_coordinator`
--

INSERT INTO `student_coordinator` (`sid`, `st_name`, `phone`, `event_id`) VALUES
(1, 'Santhosh\r\n', '6956436610', 1),
(2, 'chandrashekar\r\n', '7956436123', 2),
(3, 'Manoj', '8956436456', 3),
(4, 'Ranjith', '6956436789', 4),
(5, 'Varun Bhat', '7956436101', 5),
(6, 'Punith', '8123436610', 6),
(7, 'Ansu', '6456436610', 7),
(8, 'Abhishek\r\n', '7789436610', 8),
(9, 'Suraj ', '7956412310', 9),
(10, 'Asraf ', '7956445610', 10),
(11, 'Mayank', '6956473510', 11),
(12, 'purva', '8955636610', 12),
(13, 'Kavya', '8994874384', 13),
(14, 'Rishitha', NULL, 14),
(15, 'shubham', NULL, 15),
(22, 'Sambrama', NULL, 22),
(111, 'kumar', NULL, 111),
(112, 'shubham', NULL, 112),
(113, 'Varun', NULL, 113),
(119, 'ankush', NULL, 119);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `event_info`
--
ALTER TABLE `event_info`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `event_type`
--
ALTER TABLE `event_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `participent`
--
ALTER TABLE `participent`
  ADD PRIMARY KEY (`usn`);

--
-- Indexes for table `registered`
--
ALTER TABLE `registered`
  ADD PRIMARY KEY (`usn`,`event_id`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `staff_coordinator`
--
ALTER TABLE `staff_coordinator`
  ADD PRIMARY KEY (`stid`);

--
-- Indexes for table `student_coordinator`
--
ALTER TABLE `student_coordinator`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `event_info`
--
ALTER TABLE `event_info`
  MODIFY `event_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `staff_coordinator`
--
ALTER TABLE `staff_coordinator`
  MODIFY `stid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `student_coordinator`
--
ALTER TABLE `student_coordinator`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `registered`
--
ALTER TABLE `registered`
  ADD CONSTRAINT `registered_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `participent` (`usn`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `registered_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `events` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
