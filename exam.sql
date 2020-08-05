-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2020 at 06:05 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id10478039_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `cname` varchar(100) DEFAULT NULL,
  `links` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`cname`, `links`) VALUES
('PLC', 'https://drive.google.com/open?id=169t8i3h9xPJOEZxPwheDtNpRtQo_wzRC'),
('PLC', 'https://drive.google.com/open?id=0B7m9AIM_MgGKdFBUUzNPMktsM1U');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cname` varchar(100) NOT NULL,
  `cno` varchar(100) NOT NULL,
  `dur` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cname`, `cno`, `dur`) VALUES
('embedded_system', 'EMB565', 20),
('MPMC', 'mpmc856', 24),
('PLC', 'PLC8956', 20),
('Python_programming', 'PYP1236', 15);

-- --------------------------------------------------------

--
-- Table structure for table `embedded_system`
--

CREATE TABLE `embedded_system` (
  `ass_no` int(11) DEFAULT NULL,
  `question` text DEFAULT NULL,
  `op1` varchar(150) DEFAULT NULL,
  `op2` varchar(150) DEFAULT NULL,
  `op3` varchar(150) DEFAULT NULL,
  `op4` varchar(150) DEFAULT NULL,
  `cor_op` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `embedded_system`
--

INSERT INTO `embedded_system` (`ass_no`, `question`, `op1`, `op2`, `op3`, `op4`, `cor_op`) VALUES
(1, 'is pyhon a lang?', 'yes', 'no ', 'may be', 'i dont know', '1'),
(1, 'expression for tuple?', '[ ]', '{ } ', '( )', '< >', '3');

-- --------------------------------------------------------

--
-- Table structure for table `mpmc`
--

CREATE TABLE `mpmc` (
  `ass_no` int(11) DEFAULT NULL,
  `question` mediumtext DEFAULT NULL,
  `op1` varchar(255) DEFAULT NULL,
  `op2` varchar(255) DEFAULT NULL,
  `op3` varchar(255) DEFAULT NULL,
  `op4` varchar(255) DEFAULT NULL,
  `cor_op` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mpmc`
--

INSERT INTO `mpmc` (`ass_no`, `question`, `op1`, `op2`, `op3`, `op4`, `cor_op`) VALUES
(1, 'ur name?', 'naveen', 'kumar', 'raj', 'mohan', '1'),
(1, 'whts sur name?', 'navis', 'kumis', 'yesis', 'nois', '2');

-- --------------------------------------------------------

--
-- Table structure for table `plc`
--

CREATE TABLE `plc` (
  `ass_no` int(11) DEFAULT NULL,
  `question` text DEFAULT NULL,
  `op1` varchar(150) DEFAULT NULL,
  `op2` varchar(150) DEFAULT NULL,
  `op3` varchar(150) DEFAULT NULL,
  `op4` varchar(150) DEFAULT NULL,
  `cor_op` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plc`
--

INSERT INTO `plc` (`ass_no`, `question`, `op1`, `op2`, `op3`, `op4`, `cor_op`) VALUES
(1, 'what is your fname?', 'infant', 'raj', 'mohan', 'vijay', '1'),
(1, 'your l_name', 'viki', 'rahul', 'raju', 'preveen', '3'),
(2, 'how old are you?', '10', '20', '30', '40', '2');

-- --------------------------------------------------------

--
-- Table structure for table `python_programming`
--

CREATE TABLE `python_programming` (
  `ass_no` int(11) DEFAULT NULL,
  `question` text DEFAULT NULL,
  `op1` varchar(150) DEFAULT NULL,
  `op2` varchar(150) DEFAULT NULL,
  `op3` varchar(150) DEFAULT NULL,
  `op4` varchar(150) DEFAULT NULL,
  `cor_op` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `python_programming`
--

INSERT INTO `python_programming` (`ass_no`, `question`, `op1`, `op2`, `op3`, `op4`, `cor_op`) VALUES
(1, 'is python is oops?', 'yes ', 'no', 'what?', 'vaipu illa', '1'),
(1, 'is python is early than java?', 'waht', 'no', 'yes', 'may be', '3');

-- --------------------------------------------------------

--
-- Table structure for table `submission`
--

CREATE TABLE `submission` (
  `name` varchar(50) NOT NULL,
  `links` text NOT NULL,
  `cname` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submission`
--

INSERT INTO `submission` (`name`, `links`, `cname`) VALUES
('wilson', '', NULL),
('infant', 'https://drive.google.com/open?id=1iHGNByyCFT4iAozJtIH5YOiPNFQUKMhg', 'PLC'),
('arun ', 'https://drive.google.com/open?id=1BADDHErA8GxW_58yJXRqe4n5gqbD7g3b', 'Python_programming');

-- --------------------------------------------------------

--
-- Table structure for table `tracking`
--

CREATE TABLE `tracking` (
  `name` varchar(50) NOT NULL,
  `no_quiz` int(11) NOT NULL,
  `no_working` int(11) NOT NULL,
  `cname` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tracking`
--

INSERT INTO `tracking` (`name`, `no_quiz`, `no_working`, `cname`) VALUES
('wilson', 0, 0, NULL),
('infant', 2, 2, NULL),
('arun ', 1, 2, 'Python_programming'),
('naveen', 1, 0, 'PLC');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `college` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cname` varchar(100) DEFAULT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `college`, `email`, `password`, `cname`, `score`) VALUES
('arun ', 'Loyola-icam', 'arun@gmail.com', 'arun', 'Python_programming', 25),
('avinash wilson', 'LICET', 'avinash@gmail.com', 'avinash', 'embedded_system', 35),
('infant', 'LICET', 'infantraju123@gmail.com', 'infant', 'PLC', 46),
('naveen', 'LICAET', 'naveen@gmail.com', 'naveen', 'PLC', 10),
('Raju', 'icam', 'raju@gmail.com', 'raju', 'Python_programming', 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`cno`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
