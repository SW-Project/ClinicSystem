-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 03, 2020 at 04:44 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Project`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appointment_id` int(11) NOT NULL,
  `PID` int(11) NOT NULL,
  `CID` int(11) NOT NULL,
  `app_date` date DEFAULT NULL,
  `app_type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `app_type`
--

CREATE TABLE `app_type` (
  `app_type_id` int(11) NOT NULL,
  `description` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `clinics`
--

CREATE TABLE `clinics` (
  `CID` int(11) NOT NULL,
  `Cname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Day_Limit`
--

CREATE TABLE `Day_Limit` (
  `Day_id` int(11) NOT NULL,
  `app_type_id` int(11) NOT NULL,
  `Day` varchar(30) NOT NULL,
  `CID` int(11) NOT NULL,
  `day_limit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `History`
--

CREATE TABLE `History` (
  `Med_history_id` int(11) NOT NULL,
  `PID` int(11) NOT NULL,
  `height` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `allergies` varchar(255) DEFAULT NULL,
  `Medications` varchar(255) DEFAULT NULL,
  `Exercices` tinyint(1) DEFAULT NULL,
  `DIET` tinyint(1) DEFAULT NULL,
  `Caffeine` tinyint(1) DEFAULT NULL,
  `SMOKE` tinyint(1) DEFAULT NULL,
  `Others` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Hospitals`
--

CREATE TABLE `Hospitals` (
  `Hospital_id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `location` varchar(60) NOT NULL,
  `address` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Illnesses`
--

CREATE TABLE `Illnesses` (
  `Illnesses_id` int(11) NOT NULL,
  `PID` int(11) DEFAULT NULL,
  `Illnesses_type_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Illnesses_type`
--

CREATE TABLE `Illnesses_type` (
  `type_id` int(11) NOT NULL,
  `description` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Illnesses_type`
--

INSERT INTO `Illnesses_type` (`type_id`, `description`) VALUES
(1, 'Anemia'),
(2, 'Diabetes'),
(3, 'Heart Disease'),
(4, 'High Blood Pressure'),
(5, 'Heart Attack'),
(6, 'Digestive Problems'),
(7, 'Kidney Problems'),
(8, 'Lung Problems'),
(9, 'Liver Problems'),
(10, 'Sleep disorders');

-- --------------------------------------------------------

--
-- Table structure for table `injections`
--

CREATE TABLE `injections` (
  `injections_id` int(11) NOT NULL,
  `Descriptiom` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `mess_id` int(11) NOT NULL,
  `Sender_ID` int(11) NOT NULL,
  `Reciever_ID` int(11) NOT NULL,
  `message` varchar(255) DEFAULT NULL,
  `mess_type` int(11) NOT NULL,
  `messdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mess_type`
--

CREATE TABLE `mess_type` (
  `mess_type_id` int(11) NOT NULL,
  `Description` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Operations`
--

CREATE TABLE `Operations` (
  `Op_id` int(11) NOT NULL,
  `PID` int(11) NOT NULL,
  `OpDate` date DEFAULT NULL,
  `Op_type_id` int(11) DEFAULT NULL,
  `Hospital_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Ops_Types`
--

CREATE TABLE `Ops_Types` (
  `Op_type_id` int(11) NOT NULL,
  `Description` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Patients`
--

CREATE TABLE `Patients` (
  `PID` int(11) NOT NULL,
  `Fname` varchar(30) DEFAULT NULL,
  `Mname` varchar(30) DEFAULT NULL,
  `Lname` varchar(30) DEFAULT NULL,
  `username` varchar(60) NOT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `mobile` varchar(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pass` varchar(60) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `BirthDay` varchar(60) DEFAULT NULL,
  `BirthMonth` varchar(60) DEFAULT NULL,
  `BirthYear` int(5) DEFAULT NULL,
  `Med_history` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Patients_HISTORY`
--

CREATE TABLE `Patients_HISTORY` (
  `PHID` int(11) NOT NULL,
  `PID` int(11) NOT NULL,
  `appointment_id` int(11) NOT NULL,
  `Illnesses_id` int(11) NOT NULL,
  `Med_history_id` int(11) NOT NULL,
  `Report_id` int(11) NOT NULL,
  `Op_id` int(11) NOT NULL,
  `injections_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Payment`
--

CREATE TABLE `Payment` (
  `Pay_id` int(11) NOT NULL,
  `Pay_type` int(11) NOT NULL,
  `PID` int(11) NOT NULL,
  `CID` int(11) NOT NULL,
  `Pay_day` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Pay_type`
--

CREATE TABLE `Pay_type` (
  `Pay_type_id` int(11) NOT NULL,
  `Description` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Reports`
--

CREATE TABLE `Reports` (
  `Report_id` int(11) NOT NULL,
  `PID` int(11) NOT NULL,
  `RDate` date DEFAULT NULL,
  `ReportType` int(11) DEFAULT NULL,
  `Comments` varchar(255) DEFAULT NULL,
  `Uploads` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Reports_Types`
--

CREATE TABLE `Reports_Types` (
  `ReportType_id` int(11) NOT NULL,
  `Description` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `SID` int(11) NOT NULL,
  `SSN` int(11) NOT NULL,
  `CID` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `Fname` varchar(30) DEFAULT NULL,
  `Mname` varchar(30) DEFAULT NULL,
  `Lname` varchar(30) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `mobile` varchar(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pass` varchar(60) DEFAULT NULL,
  `User_type_id` int(11) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `BirthDay` varchar(60) DEFAULT NULL,
  `BirthMonth` varchar(60) DEFAULT NULL,
  `BirthYear` int(5) DEFAULT NULL,
  `languages` varchar(255) DEFAULT NULL,
  `education` varchar(255) DEFAULT NULL,
  `Joined_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `User_type`
--

CREATE TABLE `User_type` (
  `User_type_id` int(11) NOT NULL,
  `Description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `User_type`
--

INSERT INTO `User_type` (`User_type_id`, `Description`) VALUES
(1, 'Doctor'),
(2, 'Assistant'),
(3, 'receptionist '),
(6, 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `CID` (`CID`),
  ADD KEY `PID` (`PID`),
  ADD KEY `app_type` (`app_type`);

--
-- Indexes for table `app_type`
--
ALTER TABLE `app_type`
  ADD PRIMARY KEY (`app_type_id`);

--
-- Indexes for table `clinics`
--
ALTER TABLE `clinics`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `Day_Limit`
--
ALTER TABLE `Day_Limit`
  ADD PRIMARY KEY (`Day_id`),
  ADD KEY `app_type_id` (`app_type_id`),
  ADD KEY `CID` (`CID`);

--
-- Indexes for table `History`
--
ALTER TABLE `History`
  ADD PRIMARY KEY (`Med_history_id`),
  ADD KEY `PID` (`PID`);

--
-- Indexes for table `Hospitals`
--
ALTER TABLE `Hospitals`
  ADD PRIMARY KEY (`Hospital_id`);

--
-- Indexes for table `Illnesses`
--
ALTER TABLE `Illnesses`
  ADD PRIMARY KEY (`Illnesses_id`),
  ADD KEY `Illnesses_type_id` (`Illnesses_type_id`),
  ADD KEY `PID` (`PID`);

--
-- Indexes for table `Illnesses_type`
--
ALTER TABLE `Illnesses_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `injections`
--
ALTER TABLE `injections`
  ADD PRIMARY KEY (`injections_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`mess_id`),
  ADD KEY `mess_type` (`mess_type`),
  ADD KEY `Reciever_ID` (`Reciever_ID`),
  ADD KEY `Sender_ID` (`Sender_ID`);

--
-- Indexes for table `mess_type`
--
ALTER TABLE `mess_type`
  ADD PRIMARY KEY (`mess_type_id`);

--
-- Indexes for table `Operations`
--
ALTER TABLE `Operations`
  ADD PRIMARY KEY (`Op_id`),
  ADD KEY `Hospital_id` (`Hospital_id`),
  ADD KEY `Op_type_id` (`Op_type_id`),
  ADD KEY `PID` (`PID`);

--
-- Indexes for table `Ops_Types`
--
ALTER TABLE `Ops_Types`
  ADD PRIMARY KEY (`Op_type_id`);

--
-- Indexes for table `Patients`
--
ALTER TABLE `Patients`
  ADD PRIMARY KEY (`PID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `Patients_HISTORY`
--
ALTER TABLE `Patients_HISTORY`
  ADD PRIMARY KEY (`PHID`),
  ADD KEY `appointment_id` (`appointment_id`),
  ADD KEY `Illnesses_id` (`Illnesses_id`),
  ADD KEY `injections_id` (`injections_id`),
  ADD KEY `Med_history_id` (`Med_history_id`),
  ADD KEY `Op_id` (`Op_id`),
  ADD KEY `PID` (`PID`),
  ADD KEY `Report_id` (`Report_id`);

--
-- Indexes for table `Payment`
--
ALTER TABLE `Payment`
  ADD PRIMARY KEY (`Pay_id`),
  ADD KEY `Pay_type` (`Pay_type`),
  ADD KEY `PID` (`PID`),
  ADD KEY `CID` (`CID`);

--
-- Indexes for table `Pay_type`
--
ALTER TABLE `Pay_type`
  ADD PRIMARY KEY (`Pay_type_id`);

--
-- Indexes for table `Reports`
--
ALTER TABLE `Reports`
  ADD PRIMARY KEY (`Report_id`),
  ADD KEY `PID` (`PID`),
  ADD KEY `ReportType` (`ReportType`);

--
-- Indexes for table `Reports_Types`
--
ALTER TABLE `Reports_Types`
  ADD PRIMARY KEY (`ReportType_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`SID`),
  ADD KEY `CID` (`CID`),
  ADD KEY `User_type_id` (`User_type_id`);

--
-- Indexes for table `User_type`
--
ALTER TABLE `User_type`
  ADD PRIMARY KEY (`User_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Patients`
--
ALTER TABLE `Patients`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`CID`) REFERENCES `clinics` (`CID`),
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`app_type`) REFERENCES `app_type` (`app_type_id`),
  ADD CONSTRAINT `appointments_ibfk_3` FOREIGN KEY (`PID`) REFERENCES `Patients` (`PID`);

--
-- Constraints for table `Day_Limit`
--
ALTER TABLE `Day_Limit`
  ADD CONSTRAINT `day_limit_ibfk_1` FOREIGN KEY (`CID`) REFERENCES `clinics` (`CID`),
  ADD CONSTRAINT `day_limit_ibfk_2` FOREIGN KEY (`app_type_id`) REFERENCES `app_type` (`app_type_id`);

--
-- Constraints for table `Illnesses`
--
ALTER TABLE `Illnesses`
  ADD CONSTRAINT `illnesses_ibfk_2` FOREIGN KEY (`Illnesses_type_id`) REFERENCES `Illnesses_type` (`type_id`),
  ADD CONSTRAINT `illnesses_ibfk_3` FOREIGN KEY (`PID`) REFERENCES `Patients` (`PID`);

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`Sender_ID`) REFERENCES `Patients` (`PID`),
  ADD CONSTRAINT `message_ibfk_2` FOREIGN KEY (`Reciever_ID`) REFERENCES `staff` (`SID`);

--
-- Constraints for table `Operations`
--
ALTER TABLE `Operations`
  ADD CONSTRAINT `operations_ibfk_1` FOREIGN KEY (`Hospital_id`) REFERENCES `Hospitals` (`Hospital_id`),
  ADD CONSTRAINT `operations_ibfk_2` FOREIGN KEY (`Op_type_id`) REFERENCES `Ops_Types` (`Op_type_id`),
  ADD CONSTRAINT `operations_ibfk_3` FOREIGN KEY (`PID`) REFERENCES `Patients` (`PID`);

--
-- Constraints for table `Patients_HISTORY`
--
ALTER TABLE `Patients_HISTORY`
  ADD CONSTRAINT `patients_history_ibfk_1` FOREIGN KEY (`appointment_id`) REFERENCES `appointments` (`appointment_id`),
  ADD CONSTRAINT `patients_history_ibfk_2` FOREIGN KEY (`Illnesses_id`) REFERENCES `Illnesses` (`Illnesses_id`),
  ADD CONSTRAINT `patients_history_ibfk_3` FOREIGN KEY (`injections_id`) REFERENCES `injections` (`injections_id`),
  ADD CONSTRAINT `patients_history_ibfk_4` FOREIGN KEY (`Med_history_id`) REFERENCES `History` (`Med_history_id`),
  ADD CONSTRAINT `patients_history_ibfk_5` FOREIGN KEY (`Op_id`) REFERENCES `Operations` (`Op_id`),
  ADD CONSTRAINT `patients_history_ibfk_7` FOREIGN KEY (`Report_id`) REFERENCES `Reports` (`Report_id`);

--
-- Constraints for table `Payment`
--
ALTER TABLE `Payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`CID`) REFERENCES `clinics` (`CID`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`PID`) REFERENCES `Patients` (`PID`),
  ADD CONSTRAINT `payment_ibfk_3` FOREIGN KEY (`Pay_type`) REFERENCES `Pay_type` (`Pay_type_id`);

--
-- Constraints for table `Reports`
--
ALTER TABLE `Reports`
  ADD CONSTRAINT `reports_ibfk_1` FOREIGN KEY (`PID`) REFERENCES `Patients` (`PID`),
  ADD CONSTRAINT `reports_ibfk_2` FOREIGN KEY (`ReportType`) REFERENCES `Reports_Types` (`ReportType_id`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`User_type_id`) REFERENCES `User_type` (`User_type_id`),
  ADD CONSTRAINT `staff_ibfk_2` FOREIGN KEY (`CID`) REFERENCES `clinics` (`CID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
