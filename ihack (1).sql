-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 30, 2020 at 08:04 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ihack`
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
('adityaaxel@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ishtpreet99@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('abc@gmail.com', '2020-03-30 17:57:19', '2020-03-30 14:17:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('amansharma14041998@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('abcd@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Solutions`
--

CREATE TABLE `Solutions` (
  `level` varchar(50) NOT NULL,
  `solution` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Solutions`
--

INSERT INTO `Solutions` (`level`, `solution`) VALUES
('11', 'hello'),
('12', 'nothello'),
('13', 'hellohello'),
('14', 'notnot');

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
  `bonus` int(4) NOT NULL,
  `random` int(5) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `contact`, `email`, `password`, `dor`, `lastlogin`, `registration`, `level`, `score`, `bonus`, `random`) VALUES
('Gaurvendra Singh', '8920086773', 'abc@gmail.com', '123456', '2020-03-08 13:22:19', '2020-03-30 17:47:13', 'success', 1, 200, 0, 1),
('Gaurvendra Singh', '8920086773', 'abcd@gmail.com', '123456', '2020-03-16 22:53:33', '2020-03-30 14:22:00', 'success', 1, 0, 0, 0),
('Aditya Pudipeddi', 'asfasf', 'adityaaxel@gmail.com', 'sfasdf', '2018-04-04 16:31:17', '2018-04-04 16:31:17', 'success', 1, 0, 0, 0),
('Aditya Pudipeddi', 'asf', 'adityaaxelblaze@gmail.com', 'asdf', '2018-04-04 13:37:20', '2018-04-04 16:43:06', 'success', 1, 0, 0, 0),
('oehoeoehoe', '', 'amansharma14041998@gmail.com', '123456', '2020-03-11 19:36:37', '2020-03-11 19:36:37', 'success', 1, 0, 0, 0),
('Ishtpreet Singh', '7007074849', 'ishtpreet99@gmail.com', '123456', '2020-03-08 11:18:56', '2020-03-08 11:19:22', 'success', 1, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Solutions`
--
ALTER TABLE `Solutions`
  ADD PRIMARY KEY (`level`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
