-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2016 at 06:09 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `id` int(11) DEFAULT NULL,
  `password_2` varchar(255) DEFAULT NULL,
  `user id` int(11) DEFAULT NULL,
  `user type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `contact` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `speciality` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `contact` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `specialization` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hospital-doctor`
--

CREATE TABLE `hospital-doctor` (
  `Doctor_id` int(11) DEFAULT NULL,
  `Hospital_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `laboratory`
--

CREATE TABLE `laboratory` (
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `name` varbinary(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lab record`
--

CREATE TABLE `lab record` (
  `date` datetime DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `laboratory_id` int(11) DEFAULT NULL,
  `prescription_rid` int(11) DEFAULT NULL,
  `report` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `address` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `father/spouse name` varchar(50) DEFAULT NULL,
  `contact` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `Doctor_id` int(11) DEFAULT NULL,
  `Patient_id` int(11) DEFAULT NULL,
  `rid` int(11) NOT NULL,
  `short_info` varchar(500) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prescription-details`
--

CREATE TABLE `prescription-details` (
  `complaint` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `prescription` varchar(255) DEFAULT NULL,
  `prescription_rid` int(11) DEFAULT NULL,
  `test` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital-doctor`
--
ALTER TABLE `hospital-doctor`
  ADD KEY `FK_hospital-doctor_doctor_id` (`Doctor_id`),
  ADD KEY `FK_hospital-doctor_hospital_id` (`Hospital_id`);

--
-- Indexes for table `laboratory`
--
ALTER TABLE `laboratory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab record`
--
ALTER TABLE `lab record`
  ADD KEY `FK_lab record_laboratory_id` (`laboratory_id`),
  ADD KEY `FK_lab record_prescription_rid` (`prescription_rid`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `FK_prescription_doctor_id` (`Doctor_id`),
  ADD KEY `FK_prescription_patient_id` (`Patient_id`);

--
-- Indexes for table `prescription-details`
--
ALTER TABLE `prescription-details`
  ADD KEY `FK_prescription-details_prescription_rid` (`prescription_rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laboratory`
--
ALTER TABLE `laboratory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `hospital-doctor`
--
ALTER TABLE `hospital-doctor`
  ADD CONSTRAINT `FK_hospital-doctor_doctor_id` FOREIGN KEY (`Doctor_id`) REFERENCES `doctor` (`id`),
  ADD CONSTRAINT `FK_hospital-doctor_hospital_id` FOREIGN KEY (`Hospital_id`) REFERENCES `hospital` (`id`);

--
-- Constraints for table `lab record`
--
ALTER TABLE `lab record`
  ADD CONSTRAINT `FK_lab record_laboratory_id` FOREIGN KEY (`laboratory_id`) REFERENCES `laboratory` (`id`),
  ADD CONSTRAINT `FK_lab record_prescription_rid` FOREIGN KEY (`prescription_rid`) REFERENCES `prescription` (`rid`);

--
-- Constraints for table `prescription`
--
ALTER TABLE `prescription`
  ADD CONSTRAINT `FK_prescription_doctor_id` FOREIGN KEY (`Doctor_id`) REFERENCES `doctor` (`id`),
  ADD CONSTRAINT `FK_prescription_patient_id` FOREIGN KEY (`Patient_id`) REFERENCES `patient` (`id`);

--
-- Constraints for table `prescription-details`
--
ALTER TABLE `prescription-details`
  ADD CONSTRAINT `FK_prescription-details_prescription_rid` FOREIGN KEY (`prescription_rid`) REFERENCES `prescription` (`rid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
