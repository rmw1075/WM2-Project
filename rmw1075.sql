-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 08, 2019 at 10:29 AM
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
-- Database: `rmw1075`
--
CREATE DATABASE IF NOT EXISTS `rmw1075` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `rmw1075`;

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

DROP TABLE IF EXISTS `quiz`;
CREATE TABLE IF NOT EXISTS `quiz` (
  `qnum` int(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `question` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `correct` varchar(600) COLLATE utf8_unicode_ci NOT NULL,
  `option2` varchar(600) COLLATE utf8_unicode_ci NOT NULL,
  `option3` varchar(600) COLLATE utf8_unicode_ci NOT NULL,
  `option4` varchar(600) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`qnum`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`qnum`, `question`, `correct`, `option2`, `option3`, `option4`) VALUES
(1, 'Who is Joe?', 'Joe Mama', 'Who?', 'Joe Lyin', 'No'),
(2, 'Why is the sky blue?', 'ROY G BIV', 'Bob Ross', 'Ocean', 'I have no clue'),
(3, 'What is the worst food?', 'Caramel', 'Steak', 'Pizza', 'Burgers'),
(4, 'Are te Pittsburgh Penguins the best?', 'Yes', 'Im Dumb', 'No', 'Who?');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

DROP TABLE IF EXISTS `results`;
CREATE TABLE IF NOT EXISTS `results` (
  `userID` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `quizDate` datetime DEFAULT NULL,
  `score` decimal(3,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userID` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
