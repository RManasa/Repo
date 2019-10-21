-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2019 at 09:03 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `demographic`
--

CREATE TABLE `demographic` (
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `undergraduate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demographic`
--

INSERT INTO `demographic` (`username`, `name`, `gender`, `age`, `undergraduate`) VALUES
('abdurrehman', 'Abdurrehman', 'male', '21-25', 'Senior'),
('user2', 'Abdurrehman', 'male', '21-25', 'Senior');

-- --------------------------------------------------------

--
-- Table structure for table `posttask1`
--

CREATE TABLE `posttask1` (
  `username` varchar(100) NOT NULL,
  `1a` varchar(10) NOT NULL,
  `1b` varchar(10) NOT NULL,
  `1c` varchar(10) NOT NULL,
  `1d` varchar(10) NOT NULL,
  `1e` varchar(10) NOT NULL,
  `1f` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posttask1`
--

INSERT INTO `posttask1` (`username`, `1a`, `1b`, `1c`, `1d`, `1e`, `1f`) VALUES
('abdurrehman', 'strong_agr', 'Agree', 'Neutral', 'disagree', 'strong_dis', 'strong_agr'),
('user2', 'Neutral', 'disagree', 'Agree', 'disagree', 'strong_dis', 'Agree');

-- --------------------------------------------------------

--
-- Table structure for table `posttask2`
--

CREATE TABLE `posttask2` (
  `username` varchar(100) NOT NULL,
  `1a` varchar(10) NOT NULL,
  `1b` varchar(10) NOT NULL,
  `1c` varchar(10) NOT NULL,
  `1d` varchar(10) NOT NULL,
  `1e` varchar(10) NOT NULL,
  `1f` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posttask2`
--

INSERT INTO `posttask2` (`username`, `1a`, `1b`, `1c`, `1d`, `1e`, `1f`) VALUES
('abdurrehman', 'strong_agr', 'Neutral', 'strong_agr', 'Neutral', 'agree', 'Disagree'),
('user2', 'strong_agr', 'strong_dis', 'Neutral', 'strong_agr', 'agree', 'strong_agr');

-- --------------------------------------------------------

--
-- Table structure for table `posttask3`
--

CREATE TABLE `posttask3` (
  `username` varchar(100) NOT NULL,
  `1a` varchar(10) NOT NULL,
  `1b` varchar(10) NOT NULL,
  `1c` varchar(10) NOT NULL,
  `1d` varchar(10) NOT NULL,
  `1e` varchar(10) NOT NULL,
  `1f` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posttask3`
--

INSERT INTO `posttask3` (`username`, `1a`, `1b`, `1c`, `1d`, `1e`, `1f`) VALUES
('abdurrehman', 'strong_agr', 'Disagree', 'Neutral', 'Disagree', 'strong_dis', 'strong_agr'),
('user2', 'Disagree', 'strong_agr', 'Disagree', 'Neutral', 'strong_agr', 'strong_dis');

-- --------------------------------------------------------

--
-- Table structure for table `posttask4`
--

CREATE TABLE `posttask4` (
  `username` varchar(100) NOT NULL,
  `1a` varchar(10) NOT NULL,
  `1b` varchar(10) NOT NULL,
  `1c` varchar(10) NOT NULL,
  `1d` varchar(10) NOT NULL,
  `1e` varchar(10) NOT NULL,
  `1f` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posttask4`
--

INSERT INTO `posttask4` (`username`, `1a`, `1b`, `1c`, `1d`, `1e`, `1f`) VALUES
('abdurrehman', 'strong_agr', 'strong_agr', 'strong_agr', 'strong_agr', 'strong_agr', 'strong_agr'),
('user2', 'Disagree', 'agree', 'Disagree', 'strong_dis', 'strong_agr', 'Neutral');

-- --------------------------------------------------------

--
-- Table structure for table `task1`
--

CREATE TABLE `task1` (
  `username` varchar(100) NOT NULL,
  `firstAnswer` text NOT NULL,
  `secondAnswer` text NOT NULL,
  `thirdAnswer` text NOT NULL,
  `fourthAnswer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task1`
--

INSERT INTO `task1` (`username`, `firstAnswer`, `secondAnswer`, `thirdAnswer`, `fourthAnswer`) VALUES
('abdurrehman', 'fourth', 'third', 'first', 'second'),
('user2', 'second', 'third', 'first', 'fourth');

-- --------------------------------------------------------

--
-- Table structure for table `task1info`
--

CREATE TABLE `task1info` (
  `username` varchar(100) NOT NULL,
  `1a` varchar(10) NOT NULL,
  `1b` varchar(10) NOT NULL,
  `1c` varchar(10) NOT NULL,
  `1d` varchar(10) NOT NULL,
  `1e` varchar(10) NOT NULL,
  `1f` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task1info`
--

INSERT INTO `task1info` (`username`, `1a`, `1b`, `1c`, `1d`, `1e`, `1f`) VALUES
('abdurrehman', 'strong_agr', 'strong_agr', 'Neutral', 'agree', 'agree', 'strong_agr'),
('user2', 'strong_agr', 'strong_agr', 'strong_agr', 'strong_agr', 'strong_agr', 'strong_agr');

-- --------------------------------------------------------

--
-- Table structure for table `task2`
--

CREATE TABLE `task2` (
  `username` varchar(100) NOT NULL,
  `firstAnswer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task2`
--

INSERT INTO `task2` (`username`, `firstAnswer`) VALUES
('abdurrehman', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `task2info`
--

CREATE TABLE `task2info` (
  `username` varchar(100) NOT NULL,
  `1a` varchar(11) NOT NULL,
  `1b` varchar(11) NOT NULL,
  `1c` varchar(11) NOT NULL,
  `1d` varchar(11) NOT NULL,
  `1e` varchar(10) NOT NULL,
  `1f` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task2info`
--

INSERT INTO `task2info` (`username`, `1a`, `1b`, `1c`, `1d`, `1e`, `1f`) VALUES
('abdurrehman', 'strong_agre', 'Neutral', 'Neutral', 'agree', 'agree', 'agree'),
('user2', 'strong_disa', 'agree', 'Disagree', 'strong_disa', 'agree', 'agree');

-- --------------------------------------------------------

--
-- Table structure for table `task3`
--

CREATE TABLE `task3` (
  `username` varchar(100) NOT NULL,
  `firstAnswer` varchar(250) NOT NULL,
  `secondAnswer` varchar(250) NOT NULL,
  `thirdAnswer` varchar(250) NOT NULL,
  `fourthAnswer` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task3`
--

INSERT INTO `task3` (`username`, `firstAnswer`, `secondAnswer`, `thirdAnswer`, `fourthAnswer`) VALUES
('abdurrehman', 'first', 'third', 'second', 'fourth'),
('user2', 'first', 'fourth', 'second', 'third');

-- --------------------------------------------------------

--
-- Table structure for table `task3info`
--

CREATE TABLE `task3info` (
  `username` varchar(100) NOT NULL,
  `1a` varchar(11) NOT NULL,
  `1b` varchar(10) NOT NULL,
  `1c` varchar(10) NOT NULL,
  `1d` varchar(10) NOT NULL,
  `1e` varchar(10) NOT NULL,
  `1f` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task3info`
--

INSERT INTO `task3info` (`username`, `1a`, `1b`, `1c`, `1d`, `1e`, `1f`) VALUES
('abdurrehman', 'strong_agre', 'strong_agr', 'Neutral', 'agree', 'agree', 'strong_dis'),
('user2', 'agree', 'agree', 'agree', 'strong_agr', 'strong_agr', 'strong_agr');

-- --------------------------------------------------------

--
-- Table structure for table `task4`
--

CREATE TABLE `task4` (
  `username` varchar(100) NOT NULL,
  `firstAnswer` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task4`
--

INSERT INTO `task4` (`username`, `firstAnswer`) VALUES
('abdurrehman', 'My email is abdurrehman.user.95@gmail.com\n'),
('user2', 'Hllo \nmy name is abdurrehman\n');

-- --------------------------------------------------------

--
-- Table structure for table `task4info`
--

CREATE TABLE `task4info` (
  `username` varchar(100) NOT NULL,
  `1a` varchar(11) NOT NULL,
  `1b` varchar(11) NOT NULL,
  `1c` varchar(11) NOT NULL,
  `1d` varchar(11) NOT NULL,
  `1e` varchar(10) NOT NULL,
  `1f` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task4info`
--

INSERT INTO `task4info` (`username`, `1a`, `1b`, `1c`, `1d`, `1e`, `1f`) VALUES
('abdurrehman', 'strong_agre', 'agree', 'strong_agre', 'Neutral', 'strong_dis', 'strong_agr'),
('user2', 'agree', 'Disagree', 'strong_disa', 'strong_agre', 'Disagree', 'Neutral');

-- --------------------------------------------------------

--
-- Table structure for table `timespent`
--

CREATE TABLE `timespent` (
  `username` varchar(250) NOT NULL,
  `task1` varchar(50) NOT NULL,
  `task2` varchar(50) NOT NULL,
  `task3` varchar(50) NOT NULL,
  `task4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timespent`
--

INSERT INTO `timespent` (`username`, `task1`, `task2`, `task3`, `task4`) VALUES
('abdurrehman', '8.703', '0', '9.815', '16.033'),
('user2', '10.391', '9.128', '57.308', '9.407');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('abdurrehman', '123'),
('user1', '1234'),
('user2', 'user2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `demographic`
--
ALTER TABLE `demographic`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `posttask1`
--
ALTER TABLE `posttask1`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `posttask2`
--
ALTER TABLE `posttask2`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `posttask3`
--
ALTER TABLE `posttask3`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `posttask4`
--
ALTER TABLE `posttask4`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `task1`
--
ALTER TABLE `task1`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `task1info`
--
ALTER TABLE `task1info`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `task2`
--
ALTER TABLE `task2`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `task2info`
--
ALTER TABLE `task2info`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `task3`
--
ALTER TABLE `task3`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `task3info`
--
ALTER TABLE `task3info`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `task4`
--
ALTER TABLE `task4`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `task4info`
--
ALTER TABLE `task4info`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `timespent`
--
ALTER TABLE `timespent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD KEY `username` (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `demographic`
--
ALTER TABLE `demographic`
  ADD CONSTRAINT `demographic_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `posttask1`
--
ALTER TABLE `posttask1`
  ADD CONSTRAINT `posttask1_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `posttask2`
--
ALTER TABLE `posttask2`
  ADD CONSTRAINT `posttask2_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `posttask3`
--
ALTER TABLE `posttask3`
  ADD CONSTRAINT `posttask3_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `posttask4`
--
ALTER TABLE `posttask4`
  ADD CONSTRAINT `posttask4_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `task1`
--
ALTER TABLE `task1`
  ADD CONSTRAINT `task1_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `task1info`
--
ALTER TABLE `task1info`
  ADD CONSTRAINT `task1info_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `task2`
--
ALTER TABLE `task2`
  ADD CONSTRAINT `task2_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `task2info`
--
ALTER TABLE `task2info`
  ADD CONSTRAINT `task2info_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `task3`
--
ALTER TABLE `task3`
  ADD CONSTRAINT `task3_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `task3info`
--
ALTER TABLE `task3info`
  ADD CONSTRAINT `task3info_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `task4`
--
ALTER TABLE `task4`
  ADD CONSTRAINT `task4_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `task4info`
--
ALTER TABLE `task4info`
  ADD CONSTRAINT `task4info_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `timespent`
--
ALTER TABLE `timespent`
  ADD CONSTRAINT `timespent_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
