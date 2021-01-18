-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2019 at 11:51 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `Book_id` int(11) NOT NULL,
  `Lender_Email` varchar(70) NOT NULL,
  `Book_name` varchar(70) NOT NULL,
  `Author` varchar(40) NOT NULL,
  `Categories` varchar(30) NOT NULL,
  `Original_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`Book_id`, `Lender_Email`, `Book_name`, `Author`, `Categories`, `Original_price`) VALUES
(1, '1@g', 'chemistry_1', 'a1', 'chemistry', 120),
(2, '2@g', 'chemistry_2', 'a2', 'chemistry', 130),
(3, '3@g', 'chemistry_3', 'a3', 'chemistry', 140),
(4, 'm1@g', 'math_1', 'ma1', 'math', 130),
(5, 'm2@g', 'math_2', 'ma2', 'math', 140),
(6, 't1@g', 'targedy_1', 'ta1', 'tragedy', 100),
(7, 'ft1@g', 'f_t_1', 'fta1', 'fictions-tragedy', 111),
(11, 'ft2@g', 'f_t_2', 'fta2', 'tragedy-fictions', 121),
(13, 'mp1@g', 'm_p_1', 'mpa1', 'math-physics', 132),
(14, 'fh1@g', 'f_h_1', 'fha1', 'fictions-horror', 105);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Book_id` int(11) NOT NULL,
  `book_name` varchar(70) NOT NULL,
  `price` varchar(20) NOT NULL,
  `lender_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chemistry`
--

CREATE TABLE `chemistry` (
  `chemistry_id` int(11) NOT NULL,
  `lender_email` varchar(50) NOT NULL,
  `book_name` varchar(70) NOT NULL,
  `author` varchar(50) NOT NULL,
  `categories` varchar(20) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chemistry`
--

INSERT INTO `chemistry` (`chemistry_id`, `lender_email`, `book_name`, `author`, `categories`, `price`) VALUES
(1, '1@g', 'chemistry_1', 'a1', 'chemistry', 120),
(2, '2@g', ' chemistry_2', 'a2', 'chemistry', 130),
(3, '3@g', 'chemistry_3', 'a3', 'chemistry', 140);

-- --------------------------------------------------------

--
-- Table structure for table `fictions`
--

CREATE TABLE `fictions` (
  `fictions_id` int(11) NOT NULL,
  `lender_email` varchar(70) NOT NULL,
  `book_name` varchar(70) NOT NULL,
  `author` varchar(50) NOT NULL,
  `categories` varchar(20) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fictions`
--

INSERT INTO `fictions` (`fictions_id`, `lender_email`, `book_name`, `author`, `categories`, `price`) VALUES
(1, 'ft1@g', 'f_t_1', 'fta1', 'fictions-tragedy', 111),
(2, 'ft2@g', 'f_t_2', 'fta2', 'tragedy-fictions', 121),
(5, 'fh1@g', 'f_h_1', 'fha1', 'fictions-horror', 105);

-- --------------------------------------------------------

--
-- Table structure for table `horror`
--

CREATE TABLE `horror` (
  `horror_id` int(11) NOT NULL,
  `lender_email` varchar(70) NOT NULL,
  `book_name` varchar(70) NOT NULL,
  `author` varchar(50) NOT NULL,
  `categories` varchar(20) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `horror`
--

INSERT INTO `horror` (`horror_id`, `lender_email`, `book_name`, `author`, `categories`, `price`) VALUES
(5, 'fh1@g', 'f_h_1', 'fha1', 'fictions-horror', 105);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('ashik', '4953'),
('v', 'v');

-- --------------------------------------------------------

--
-- Table structure for table `math`
--

CREATE TABLE `math` (
  `math_id` int(11) NOT NULL,
  `lender_email` varchar(70) NOT NULL,
  `book_name` varchar(70) NOT NULL,
  `author` varchar(50) NOT NULL,
  `categories` varchar(20) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `math`
--

INSERT INTO `math` (`math_id`, `lender_email`, `book_name`, `author`, `categories`, `price`) VALUES
(1, 'm1@g', 'math_1', 'ma1', 'MATH', 130),
(2, 'm2@g', 'math_2', 'ma2', 'math', 140),
(3, 'mp1@g', 'm_p_1', 'mpa1', 'math-physics', 132);

-- --------------------------------------------------------

--
-- Table structure for table `physics`
--

CREATE TABLE `physics` (
  `physics_id` int(11) NOT NULL,
  `lender_email` varchar(70) NOT NULL,
  `book_name` varchar(70) NOT NULL,
  `author` varchar(50) NOT NULL,
  `categories` varchar(20) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `physics`
--

INSERT INTO `physics` (`physics_id`, `lender_email`, `book_name`, `author`, `categories`, `price`) VALUES
(1, 'mp1@g', 'm_p_1', 'mpa1', 'math-physics', 132);

-- --------------------------------------------------------

--
-- Table structure for table `tragedy`
--

CREATE TABLE `tragedy` (
  `tragedy_id` int(11) NOT NULL,
  `lender_email` varchar(70) NOT NULL,
  `book_name` varchar(70) NOT NULL,
  `author` varchar(50) NOT NULL,
  `categories` varchar(20) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tragedy`
--

INSERT INTO `tragedy` (`tragedy_id`, `lender_email`, `book_name`, `author`, `categories`, `price`) VALUES
(1, 't1@g', 'tragedy_1', 'ta1', 'tragedy', 100),
(2, 'ft1@g', 'f_t_1', 'fta1', 'fictions-tragedy', 111),
(3, 'ft2@g', 'f_t_2', 'fta2', 'tragedy-fictions', 121);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `NID` int(11) NOT NULL,
  `Mobile_no` int(11) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `Email`, `Password`, `NID`, `Mobile_no`, `Address`) VALUES
('a', 'a', 'aa', 1, 1, 'a'),
('mayesha', 'm@', 'm', 111, 111, '111'),
('mansurah', 'm@gmail.com', 'mmm', 1111, 1212, '1212'),
('mansurah', 'mansurah', '123', 123, 123, '123'),
('Meherin Hossain Nushra', 'n@gmail.com', '1', 1234, 1234, '1234'),
('v', 'v', 'v', 0, 22, '22'),
('w', 'w', 'w', 2, 22, '22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`Book_id`),
  ADD UNIQUE KEY `Book_name` (`Book_name`),
  ADD UNIQUE KEY `Book_name_2` (`Book_name`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Book_id`);

--
-- Indexes for table `chemistry`
--
ALTER TABLE `chemistry`
  ADD PRIMARY KEY (`chemistry_id`),
  ADD UNIQUE KEY `book_name` (`book_name`);

--
-- Indexes for table `fictions`
--
ALTER TABLE `fictions`
  ADD PRIMARY KEY (`fictions_id`),
  ADD UNIQUE KEY `book_name` (`book_name`);

--
-- Indexes for table `horror`
--
ALTER TABLE `horror`
  ADD PRIMARY KEY (`horror_id`) USING BTREE,
  ADD UNIQUE KEY `book_name` (`book_name`);

--
-- Indexes for table `math`
--
ALTER TABLE `math`
  ADD PRIMARY KEY (`math_id`),
  ADD UNIQUE KEY `book_name` (`book_name`);

--
-- Indexes for table `physics`
--
ALTER TABLE `physics`
  ADD PRIMARY KEY (`physics_id`),
  ADD UNIQUE KEY `book_name` (`book_name`);

--
-- Indexes for table `tragedy`
--
ALTER TABLE `tragedy`
  ADD PRIMARY KEY (`tragedy_id`),
  ADD UNIQUE KEY `book_name` (`book_name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `NID` (`NID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `Book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `Book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `chemistry`
--
ALTER TABLE `chemistry`
  MODIFY `chemistry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fictions`
--
ALTER TABLE `fictions`
  MODIFY `fictions_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `horror`
--
ALTER TABLE `horror`
  MODIFY `horror_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `math`
--
ALTER TABLE `math`
  MODIFY `math_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `physics`
--
ALTER TABLE `physics`
  MODIFY `physics_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tragedy`
--
ALTER TABLE `tragedy`
  MODIFY `tragedy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
