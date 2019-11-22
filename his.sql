-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2019 at 10:55 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `his`
--

-- --------------------------------------------------------

--
-- Table structure for table `clinics`
--

CREATE TABLE `clinics` (
  `id` int(11) NOT NULL,
  `engname` varchar(255) NOT NULL,
  `arabname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clinics`
--

INSERT INTO `clinics` (`id`, `engname`, `arabname`) VALUES
(1, 'Dentist Clinic', 'عيادة الأسنان'),
(2, 'Internal Clinic', 'عيادة الباطنة'),
(3, 'Surgery Clinic\r\n', 'عيادة الجراحة'),
(4, 'Bones Clinic', 'عيادة العظام'),
(5, 'Gynecology and Obstetrics Clinic', 'عيادة النسا والتوليد'),
(6, 'Neurology Clinic', 'عيادة المخ والأعصاب');

-- --------------------------------------------------------

--
-- Table structure for table `diagnosis`
--

CREATE TABLE `diagnosis` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `engname` varchar(255) NOT NULL,
  `arabname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `national_id` varchar(255) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `clinic_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `engname`, `arabname`, `password`, `salt`, `email`, `national_id`, `specialization`, `clinic_id`) VALUES
(1, 'Ahmed Muhamed', 'أحمد محمد', '123456789', '123456789', 'a@m.com', '123456789', 'clinic', 0),
(2, 'Yasser Rashed', 'ياسر راشد', '123456', '123456', 'ششش', '123456', 'aaaa', 1),
(3, 'Ali Muhamed', 'علي محمد', '123456', '123456', 'asdfghjk', '12345679812345', 'aaaaaa', 1),
(4, 'Amr Aly', 'عمرو علي', '123456789', '123456789', 'as', '12345678912345', 'clinic', 1),
(6, 'Aya Essam', 'آية عصام', '123456789', '123456789', 'as', '1234578912345', 'clinic', 1),
(7, 'Fatma Abdelhameed', 'فاطمة عبد الحميد', '132456789', '123456789', 'f@a.com', '1234569987', 'clinic', 1);

-- --------------------------------------------------------

--
-- Table structure for table `examinations`
--

CREATE TABLE `examinations` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `examination_analysis`
--

CREATE TABLE `examination_analysis` (
  `id` int(11) NOT NULL,
  `analysis_id` int(11) NOT NULL,
  `examination_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `examination_diagnosis`
--

CREATE TABLE `examination_diagnosis` (
  `id` int(11) NOT NULL,
  `diagnosis_id` int(11) NOT NULL,
  `examination_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `examination_scan`
--

CREATE TABLE `examination_scan` (
  `id` int(11) NOT NULL,
  `scan_id` int(11) NOT NULL,
  `examination_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `medical_analysis`
--

CREATE TABLE `medical_analysis` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `national_id` varchar(14) NOT NULL,
  `engname` varchar(255) NOT NULL,
  `arabname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birth_province` varchar(255) NOT NULL,
  `blood_type` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `birth_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `national_id`, `engname`, `arabname`, `email`, `password`, `salt`, `phone`, `gender`, `birth_province`, `blood_type`, `image`, `birth_date`) VALUES
(1, '29902061800231', 'Amr El-Absy', 'عمرو العبسي', 'amrelabsy55@gmail.com', '123456789', '123456789', '01066484685', 'male', 'El-Buhairah', 'A-', 'aaaaa', '1999-02-06');

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `id` int(11) NOT NULL,
  `examination_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `prescription_med`
--

CREATE TABLE `prescription_med` (
  `id` int(11) NOT NULL,
  `prescription_id` int(11) NOT NULL,
  `medicine_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `scans`
--

CREATE TABLE `scans` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clinics`
--
ALTER TABLE `clinics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diagnosis`
--
ALTER TABLE `diagnosis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `National_ID` (`national_id`),
  ADD KEY `Clinic_ID` (`clinic_id`);

--
-- Indexes for table `examinations`
--
ALTER TABLE `examinations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Doctor_ID` (`doctor_id`),
  ADD KEY `Patient_ID` (`patient_id`);

--
-- Indexes for table `examination_analysis`
--
ALTER TABLE `examination_analysis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Analysis_ID` (`analysis_id`),
  ADD KEY `Examintion_ID` (`examination_id`);

--
-- Indexes for table `examination_diagnosis`
--
ALTER TABLE `examination_diagnosis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Diagnosis_ID` (`diagnosis_id`),
  ADD KEY `Examintion_ID` (`examination_id`);

--
-- Indexes for table `examination_scan`
--
ALTER TABLE `examination_scan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Scan_ID` (`scan_id`),
  ADD KEY `Examintion_ID` (`examination_id`);

--
-- Indexes for table `medical_analysis`
--
ALTER TABLE `medical_analysis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `National_ID` (`national_id`);

--
-- Indexes for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Examintion_ID` (`examination_ID`);

--
-- Indexes for table `prescription_med`
--
ALTER TABLE `prescription_med`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Prescription_ID` (`prescription_id`),
  ADD KEY `Medicine_ID` (`medicine_id`);

--
-- Indexes for table `scans`
--
ALTER TABLE `scans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clinics`
--
ALTER TABLE `clinics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `diagnosis`
--
ALTER TABLE `diagnosis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `examinations`
--
ALTER TABLE `examinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `examination_analysis`
--
ALTER TABLE `examination_analysis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `examination_diagnosis`
--
ALTER TABLE `examination_diagnosis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `examination_scan`
--
ALTER TABLE `examination_scan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medical_analysis`
--
ALTER TABLE `medical_analysis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prescriptions`
--
ALTER TABLE `prescriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prescription_med`
--
ALTER TABLE `prescription_med`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `scans`
--
ALTER TABLE `scans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `examinations`
--
ALTER TABLE `examinations`
  ADD CONSTRAINT `examinations_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `examinations_ibfk_2` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

--
-- Constraints for table `examination_analysis`
--
ALTER TABLE `examination_analysis`
  ADD CONSTRAINT `examination_analysis_ibfk_1` FOREIGN KEY (`analysis_id`) REFERENCES `medical_analysis` (`id`),
  ADD CONSTRAINT `examination_analysis_ibfk_2` FOREIGN KEY (`examination_id`) REFERENCES `examinations` (`id`);

--
-- Constraints for table `examination_diagnosis`
--
ALTER TABLE `examination_diagnosis`
  ADD CONSTRAINT `examination_diagnosis_ibfk_1` FOREIGN KEY (`diagnosis_id`) REFERENCES `diagnosis` (`id`),
  ADD CONSTRAINT `examination_diagnosis_ibfk_2` FOREIGN KEY (`examination_id`) REFERENCES `examinations` (`id`);

--
-- Constraints for table `examination_scan`
--
ALTER TABLE `examination_scan`
  ADD CONSTRAINT `examination_scan_ibfk_1` FOREIGN KEY (`examination_id`) REFERENCES `examinations` (`id`),
  ADD CONSTRAINT `examination_scan_ibfk_2` FOREIGN KEY (`scan_id`) REFERENCES `scans` (`id`);

--
-- Constraints for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD CONSTRAINT `prescriptions_ibfk_1` FOREIGN KEY (`examination_ID`) REFERENCES `examinations` (`id`);

--
-- Constraints for table `prescription_med`
--
ALTER TABLE `prescription_med`
  ADD CONSTRAINT `prescription_med_ibfk_1` FOREIGN KEY (`medicine_id`) REFERENCES `medicines` (`id`),
  ADD CONSTRAINT `prescription_med_ibfk_2` FOREIGN KEY (`prescription_id`) REFERENCES `prescriptions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
