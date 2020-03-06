-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 04, 2018 at 07:08 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ihack18`
--

-- --------------------------------------------------------

--
-- Table structure for table `Progress`
--

CREATE TABLE `Progress` (
  `email` varchar(40) NOT NULL,
  `1` timestamp NULL DEFAULT NULL,
  `2` timestamp NULL DEFAULT NULL,
  `3` timestamp NULL DEFAULT NULL,
  `4` timestamp NULL DEFAULT NULL,
  `5` timestamp NULL DEFAULT NULL,
  `6` timestamp NULL DEFAULT NULL,
  `7` timestamp NULL DEFAULT NULL,
  `8` timestamp NULL DEFAULT NULL,
  `9` timestamp NULL DEFAULT NULL,
  `10` timestamp NULL DEFAULT NULL,
  `11` timestamp NULL DEFAULT NULL,
  `12` timestamp NULL DEFAULT NULL,
  `13` timestamp NULL DEFAULT NULL,
  `14` timestamp NULL DEFAULT NULL,
  `15` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Progress`
--

INSERT INTO `Progress` (`email`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`) VALUES
('adityaaxelblaze@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('adityaaxel@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(30) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `dor` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastlogin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `registration` varchar(10) DEFAULT NULL,
  `level` int(3) NOT NULL,
  `score` int(4) NOT NULL,
  `bonus` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `contact`, `email`, `password`, `dor`, `lastlogin`, `registration`, `level`, `score`, `bonus`) VALUES
('Aditya Pudipeddi', 'asf', 'adityaaxelblaze@gmail.com', 'asdf', '2018-04-04 13:37:20', '2018-04-04 16:43:06', 'success', 1, 0, 0),
('Aditya Pudipeddi', 'asfasf', 'adityaaxel@gmail.com', 'sfasdf', '2018-04-04 16:31:17', '2018-04-04 16:31:17', 'success', 1, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
