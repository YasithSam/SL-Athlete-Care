-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 30, 2021 at 04:22 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sl_athlete_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `application_user`
--

CREATE TABLE `application_user` (
  `uuid` varchar(36) NOT NULL,
  `role_id` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `password` varchar(20) NOT NULL,
  `last_login` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `is_disabled` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `athlete_physical`
--

CREATE TABLE `athlete_physical` (
  `athlete_id` varchar(36) NOT NULL,
  `weight` decimal(10,0) NOT NULL,
  `height` decimal(10,0) NOT NULL,
  `bmi` decimal(10,0) NOT NULL,
  `body_fat` decimal(10,0) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `athlete_profile`
--

CREATE TABLE `athlete_profile` (
  `uuid` varchar(36) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `responsible_person_email` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `profile_image_url` varchar(255) NOT NULL,
  `lat` decimal(10,0) NOT NULL,
  `lon` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `athlete_reported_injury`
--

CREATE TABLE `athlete_reported_injury` (
  `id` int(11) NOT NULL,
  `athlete_id` varchar(36) NOT NULL,
  `injury_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  `doctor_id` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `athlete_sport`
--

CREATE TABLE `athlete_sport` (
  `id` int(11) NOT NULL,
  `athlete_id` varchar(36) NOT NULL,
  `sport_id` int(11) NOT NULL,
  `institution` varchar(36) NOT NULL,
  `level` varchar(36) NOT NULL,
  `category` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_profile`
--

CREATE TABLE `doctor_profile` (
  `uuid` varchar(36) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `hospital` varchar(30) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `doctor_number` varchar(20) NOT NULL,
  `lat` decimal(10,0) NOT NULL,
  `lon` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `injury`
--

CREATE TABLE `injury` (
  `id` int(11) NOT NULL,
  `injury` varchar(36) NOT NULL,
  `lat` decimal(10,0) NOT NULL,
  `lon` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sport`
--

CREATE TABLE `sport` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(5) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application_user`
--
ALTER TABLE `application_user`
  ADD PRIMARY KEY (`uuid`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `athlete_physical`
--
ALTER TABLE `athlete_physical`
  ADD PRIMARY KEY (`athlete_id`);

--
-- Indexes for table `athlete_profile`
--
ALTER TABLE `athlete_profile`
  ADD PRIMARY KEY (`uuid`),
  ADD UNIQUE KEY `nic` (`nic`);

--
-- Indexes for table `athlete_reported_injury`
--
ALTER TABLE `athlete_reported_injury`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `athlete_sport`
--
ALTER TABLE `athlete_sport`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign_athlete_sport` (`athlete_id`),
  ADD KEY `foreign_sports_id` (`sport_id`);

--
-- Indexes for table `doctor_profile`
--
ALTER TABLE `doctor_profile`
  ADD PRIMARY KEY (`uuid`);

--
-- Indexes for table `injury`
--
ALTER TABLE `injury`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sport`
--
ALTER TABLE `sport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `athlete_reported_injury`
--
ALTER TABLE `athlete_reported_injury`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `athlete_sport`
--
ALTER TABLE `athlete_sport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `injury`
--
ALTER TABLE `injury`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sport`
--
ALTER TABLE `sport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `athlete_physical`
--
ALTER TABLE `athlete_physical`
  ADD CONSTRAINT `foreign_key_athlete_physical` FOREIGN KEY (`athlete_id`) REFERENCES `athlete_profile` (`uuid`);

--
-- Constraints for table `athlete_profile`
--
ALTER TABLE `athlete_profile`
  ADD CONSTRAINT `foreign_key_athlete` FOREIGN KEY (`uuid`) REFERENCES `application_user` (`uuid`);

--
-- Constraints for table `athlete_sport`
--
ALTER TABLE `athlete_sport`
  ADD CONSTRAINT `foreign_athlete_sport` FOREIGN KEY (`athlete_id`) REFERENCES `athlete_profile` (`uuid`),
  ADD CONSTRAINT `foreign_sports_id` FOREIGN KEY (`sport_id`) REFERENCES `sport` (`id`);

--
-- Constraints for table `doctor_profile`
--
ALTER TABLE `doctor_profile`
  ADD CONSTRAINT `foreign_doctor_profile` FOREIGN KEY (`uuid`) REFERENCES `application_user` (`uuid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
