-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2021 at 02:26 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobfinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminpanel`
--

CREATE TABLE `adminpanel` (
  `admin_id` int(225) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminpanel`
--

INSERT INTO `adminpanel` (`admin_id`, `user_name`, `password`) VALUES
(12, 'Admin', 'Admin123');

-- --------------------------------------------------------

--
-- Table structure for table `applyform`
--

CREATE TABLE `applyform` (
  `apply_id` int(225) NOT NULL,
  `First_name` varchar(200) NOT NULL,
  `Last_name` varchar(200) NOT NULL,
  `EmailAddress` varchar(200) NOT NULL,
  `Position` varchar(500) NOT NULL,
  `Education` varchar(250) NOT NULL,
  `StartDate` varchar(200) NOT NULL,
  `Phone` int(200) NOT NULL,
  `Fax` varchar(200) NOT NULL,
  `Relocate` varchar(200) NOT NULL,
  `Last_company` varchar(200) NOT NULL,
  `Reference` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applyform`
--

INSERT INTO `applyform` (`apply_id`, `First_name`, `Last_name`, `EmailAddress`, `Position`, `Education`, `StartDate`, `Phone`, `Fax`, `Relocate`, `Last_company`, `Reference`) VALUES
(2, 'ali', 'raza', 'aliraza@gmail.com', 'manager', 'master', 'sep12', 32569874, '78965', 'No', 'oxl', 'I need this job.'),
(5, 'samra', 'fatima', 'samrafatima@gmail.com', 'manager', 'master,I.T', 'sep12', 3259898, '78965', 'No', 'HBL limited', 'i need the job');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(12) NOT NULL,
  `First_name` varchar(200) NOT NULL,
  `Last_name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `First_name`, `Last_name`, `Email`, `message`) VALUES
(7, '', 'raza', 'aliraza@gmail.com', 'good nice '),
(8, 'samra', 'fatima', 'samra@gmail.com', 'usefull!!');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `user_id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `email` varchar(200) NOT NULL,
  `Phonenumber` int(11) NOT NULL,
  `DateofBirth` varchar(200) NOT NULL,
  `Education` varchar(200) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`user_id`, `username`, `email`, `Phonenumber`, `DateofBirth`, `Education`, `Gender`, `password`) VALUES
(2, 'rimsha', 'rimsha@gmail.com', 3256899, 'apirl2', 'master', 'female', '$2y$10$Q/uQGC3Y0A8.h9xmJDhZqOUdg2eoBQUst1nOpZcCpcaTgwNloeFL2'),
(3, 'samra', 'samra@gmail.com', 322569874, 'apirl2', 'master', 'female', '$2y$10$AIopa6lnbsM0bVkHq0c57Ol07flsMDkT1x7scrHV1XTe4Yon5.goy'),
(4, 'saad', 'saad@gmail.com', 325698441, '3may2019', 'master', 'male', '$2y$10$9lA/mNn4SpuZWLLVjZ/JyuF4rNcyMLm/AxszjXoWE7rmsobySD8T.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminpanel`
--
ALTER TABLE `adminpanel`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `applyform`
--
ALTER TABLE `applyform`
  ADD PRIMARY KEY (`apply_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminpanel`
--
ALTER TABLE `adminpanel`
  MODIFY `admin_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `applyform`
--
ALTER TABLE `applyform`
  MODIFY `apply_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
