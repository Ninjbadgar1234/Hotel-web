-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2020 at 04:59 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cleaning`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `phoneno` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `cdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `phoneno`, `email`, `cdate`) VALUES
(3, 'Ninjbadgar', '95435567', 'ninjee@gmail.com', '2019-11-09');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `usname` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `usname`, `pass`) VALUES
(1, 'Admin', '1234'),
(2, 'Togosoo', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `newsletterlog`
--

CREATE TABLE `newsletterlog` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(52) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `news` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletterlog`
--

INSERT INTO `newsletterlog` (`id`, `title`, `subject`, `news`) VALUES
(1, 'morning news', 'djadajk', 'sain baina uu ta bvhende manai baiguullaga  vilchilgennde uurchlult oruulj baina '),
(3, 'sain baina uu', 'sn snu ', 'yubn da'),
(4, 'sain baina uu', 'sn snu ', 'yubn da'),
(5, 'sain baina uu', 'sn snu ', 'yubn da'),
(6, 'sain baina uu', 'sn snu ', 'yubn da'),
(7, 'sain baina uu', 'sn snu ', 'yubn da'),
(8, 'sain baina uu', 'sn snu ', 'yubn da');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(10) UNSIGNED NOT NULL,
  `FName` text,
  `LName` text,
  `Email` varchar(50) DEFAULT NULL,
  `Type` varchar(30) DEFAULT NULL,
  `Phone` text,
  `Price` varchar(20) DEFAULT NULL,
  `talbai` varchar(10) DEFAULT NULL,
  `address` varchar(15) DEFAULT NULL,
  `day` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `FName`, `LName`, `Email`, `Type`, `Phone`, `Price`, `talbai`, `address`, `day`) VALUES
(37, 'Khvreltogoo', 'Urantogos', 'asdhjga@gmail.com', 'Ail ger', '95435567', '515000', '103', 'Baynzvrh dvvreg', '2019-12-26'),
(38, 'Yondonlodon', 'Ninjbadgar', 'yninjbadgar@gmail.com', 'Ail ger', '95959595', '500000', '100', 'baynzvrh 16khor', '2019-12-19'),
(40, 'munguntsatsral', 'munguu', 'munguu@gmail.com', 'Ail ger', '123456', '100000', '50', 'njsdfskj', '2019-12-20'),
(41, 'aaaaaa', 'aaaaaa', 'aaa@gmail.com', 'Ail ger', '13214654', '76000', '38.3', 'asdas', '2019-12-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletterlog`
--
ALTER TABLE `newsletterlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `newsletterlog`
--
ALTER TABLE `newsletterlog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
