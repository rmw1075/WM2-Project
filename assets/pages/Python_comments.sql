-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 15, 2019 at 01:24 PM
-- Server version: 5.5.60-MariaDB
-- PHP Version: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jrhicsa`
--

-- --------------------------------------------------------

--
-- Table structure for table `Ex8_comments`
--

CREATE TABLE `Python_comments` (
  `id` int(100) UNSIGNED NOT NULL,
  `name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comment` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Ex8_comments`
--

INSERT INTO `Python_comments` (`id`, `name`, `date`, `comment`) VALUES
(1, 'Barney Rubbles', '2019-04-11 17:11:14', 'Father of Bamm-Bamm\r\n\r\nWorks with Fred at a Rock Quarry'),
(34, 'Jim Kelly', '2019-04-11 17:29:28', 'Was the greatest quarterback to play the game.   Lot of hours I spent going to watch him play in the early 1900\'s'),
(35, 'Fred Flinstone', '2019-04-11 17:39:26', 'Yabba Dabba Doo!'),
(40, 'Tiger Woods', '2019-04-14 18:40:33', 'It would be very cool if Tiger Woods wins the Masters today Sunday April 14.'),
(42, 'Watching Golf is fun!', '2019-04-14 23:15:45', 'Jim likes to program his computer and watch golf on TV at the same time'),
(49, 'Jim Habermas', '2019-04-15 00:42:06', 'Jim Habermas is sure glad to get is taxes done one day early this year!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Ex8_comments`
--
ALTER TABLE `Python_comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Ex8_comments`
--
ALTER TABLE `Python_comments`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
