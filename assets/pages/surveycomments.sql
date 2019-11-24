-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 21, 2019 at 03:44 PM
-- Server version: 5.5.60-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kcl4926`
--

-- --------------------------------------------------------

--
-- Table structure for table `surveycomments`
--

CREATE TABLE `surveycomments` (
  `id` int(100) UNSIGNED NOT NULL,
  `question1` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `question2` int(10) NOT NULL,
  `question3` int(10)  NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `surveycomments`
--

INSERT INTO `surveycomments` (`id`, `question1`, `question2`, `question3`) VALUES
(1, 'lists', 10, 10),
(2, 'loops', 10, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `surveycomments`
--
ALTER TABLE `surveycomments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `surveycomments`
--
ALTER TABLE `surveycomments`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
