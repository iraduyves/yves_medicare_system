-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2022 at 11:53 AM
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
-- Database: `yves-medicare-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_appointment_form`
--

CREATE TABLE `user_appointment_form` (
  `user_id` int(25) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_contact` varchar(255) NOT NULL,
  `user_location` varchar(255) NOT NULL,
  `user_department` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(255) NOT NULL,
  `message` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_appointment_form`
--

INSERT INTO `user_appointment_form` (`user_id`, `user_name`, `user_email`, `user_contact`, `user_location`, `user_department`, `date`, `time`, `message`) VALUES
(1, 'yves iradukunda', 'iradukundayves11@gmail.com', '', 'gasabo', '', '0000-00-00', '10:32', 'hey u'),
(2, 'yves iradukunda', 'iradukundayves11@gmail.com', '', 'gasabo', '', '0000-00-00', '10:34', 'ybgydasnnlka'),
(3, 'yves iradukunda', 'iradukundayves11@gmail.com', '', 'gasabo', '', '2020-06-14', '10:34', 'ybgydasnnlka'),
(4, 'yves iradukunda', 'iradukundayves11@gmail.com', '', 'gasabo', 'hypotension', '2020-06-14', '10:34', 'ybgydasnnlka'),
(5, 'yves iradukunda', 'iradukundayves11@gmail.com', '', 'gasabo', 'hypotension', '2020-06-14', '10:34', 'ybgydasnnlka'),
(6, 'yves iradukunda', 'iradukundayves11@gmail.com', '', 'gasabo', 'hypotension', '2020-06-14', '10:34', 'ybgydasnnlka'),
(7, 'yves iradukunda', 'iradukundayves11@gmail.com', '', 'gasabo', 'hypotension', '2020-06-14', '10:34', 'ybgydasnnlka'),
(8, 'nshimiye cloaude', 'nshimiye@gmail.com', '', 'gasabo', 'diabets', '2020-06-24', '08:40', 'muraho'),
(9, 'kanyabunyobwa', 'kanya@gmail.com', '', 'kicukiro', 'diabets', '2020-06-18', '09:29', 'murahoneza!');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration_form`
--

CREATE TABLE `user_registration_form` (
  `id` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_registration_form`
--

INSERT INTO `user_registration_form` (`id`, `user_name`, `email`, `gender`, `district`, `department`, `user_type`, `password`) VALUES
('', 'yves', 'yves@gmail.com', 'male', 'gasabo', 'others', 'admin', '$2y$10$169mkZOInxVIrbimrm/OPujHSlGw6iWjdZgSiTBSt9oRLlmzMOJPy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_appointment_form`
--
ALTER TABLE `user_appointment_form`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_registration_form`
--
ALTER TABLE `user_registration_form`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_appointment_form`
--
ALTER TABLE `user_appointment_form`
  MODIFY `user_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
