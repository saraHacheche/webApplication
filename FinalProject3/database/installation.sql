-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2021 at 06:28 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `system_installation`
--

-- --------------------------------------------------------

--
-- Table structure for table `installation`
--

CREATE TABLE `installation` (
  `enviroment` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `flow` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `installation`
--

INSERT INTO `installation` (`enviroment`, `date`, `description`, `name`, `id`, `flow`) VALUES
('Unix', '2021-01-05', 'An Idea used to write and edit  source code', 'NetBeans ', 1, 'In Progress'),
('Windows', '2020-06-11', 'A web base application use to track defect in an application', 'Jira ', 2, 'Start'),
('Windows Server', '2020-06-19', 'A popular web browser ', 'Chrome ', 3, 'Start'),
('Windows', '2021-05-06', 'A  software created by Microsoft to create and edit word document.', 'Word', 4, 'Start');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `installation`
--
ALTER TABLE `installation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `installation`
--
ALTER TABLE `installation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
