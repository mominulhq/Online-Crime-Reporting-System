-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2022 at 08:26 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `regform`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `adminname` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminname`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `gcrime`
--

CREATE TABLE `gcrime` (
  `gcid` int(250) NOT NULL,
  `ctype` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `com` varchar(250) NOT NULL,
  `phone` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gcrime`
--

INSERT INTO `gcrime` (`gcid`, `ctype`, `fname`, `lname`, `address`, `com`, `phone`) VALUES
(1, 'Genarel Crime', 'Rafa', 'Islam', '	Basabo,Dhaka', 'hijeck', 1234567890),
(2, 'Genarel Crime', '	Tasrif', 'Islam', 'Basabo,Dhaka', 'Looting', 1434567891),
(3, 'Genarel Crime', '		Raka', 'Tiasa', 'Basabo,Dhaka', 'Looting', 1434567891);

-- --------------------------------------------------------

--
-- Table structure for table `litem`
--

CREATE TABLE `litem` (
  `lid` int(250) NOT NULL,
  `ctype` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `com` varchar(250) NOT NULL,
  `phone` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mperson`
--

CREATE TABLE `mperson` (
  `mpid` int(250) NOT NULL,
  `ctype` varchar(250) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `com` varchar(250) NOT NULL,
  `phone` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mperson`
--

INSERT INTO `mperson` (`mpid`, `ctype`, `fname`, `lname`, `address`, `com`, `phone`) VALUES
(1, 'Missing/Found Person', 'afhgf', 'nvhf', 'dhaka', 'age : 22 , gender: female,Name:Ruma . she is missing', 1119876);

-- --------------------------------------------------------

--
-- Table structure for table `mvehicles`
--

CREATE TABLE `mvehicles` (
  `mvid` int(250) NOT NULL,
  `ctype` varchar(250) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `com` varchar(250) NOT NULL,
  `phone` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mvehicles`
--

INSERT INTO `mvehicles` (`mvid`, `ctype`, `fname`, `lname`, `address`, `com`, `phone`) VALUES
(1, 'Missing/Found Vehicles', 'abc', 'efg', 'Dhaka', 'car nameplate:1111 that is missing', 1234567891);

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE `others` (
  `oid` int(250) NOT NULL,
  `ctype` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `com` varchar(250) NOT NULL,
  `phone` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `others`
--

INSERT INTO `others` (`oid`, `ctype`, `fname`, `lname`, `address`, `com`, `phone`) VALUES
(1, 'Others', 'Rafid', 'Akondo', '	Rampura,Dhaka', 'accident', 1987654311);

-- --------------------------------------------------------

--
-- Table structure for table `regform`
--

CREATE TABLE `regform` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `address` varchar(50) NOT NULL,
  `bloodgroup` varchar(3) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `ConPassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regform`
--

INSERT INTO `regform` (`id`, `fname`, `lname`, `gender`, `address`, `bloodgroup`, `phone`, `email`, `Password`, `ConPassword`) VALUES
(2, 'Fardan', 'Ahasan', 'male', 'Chittagong', 'AB+', 12345678910, 'fardan@gmail.com', '222222', '222222'),
(3, 'Shamim', 'Hasan', 'male', 'Barisal', 'B+', 1790010578, 'shamimhasan5551@gmail.com', 'shamim', 'shamim'),
(5, 'Raiba', 'Faiza', 'female', 'Dhaka', 'AB-', 77777777777, 'raiba@gmail.com', '777777', '777777'),
(7, 'Tamanna', 'Tasnim', 'female', 'Barisal', 'AB+', 55555555555, 'tasnim@gmail.com', '555555', '555555'),
(12, 'Proshenjit', 'Karmakar', 'male', 'Feni', 'O+', 33333333333, 'pk@gmail.com', '333333', '333333'),
(13, 'Sanjida', 'Chowdhury', 'female', 'Dhaka', 'O+', 99999999999, 'sanjida@gmail.com', 'sanjida', 'sanjida'),
(14, 'Nishi', 'Mim', 'female', 'Pabna', 'O+', 12309876544, 'mim@gmail.com', 'tamanna', 'tamanna'),
(15, 'Rafid', 'Akondo', 'male', 'Bogura', 'O+', 45678905432, 'rafid@gmail.com', 'rafidakondo', 'rafidakondo'),
(16, 'Samia', 'Chowdhury', 'female', 'Dhaka', 'AB+', 34567345678, 'samia@gmail.com', '^%$#@!', '^%$#@!'),
(17, 'saeeda begum', 'moni', 'female', 'abcd', 'O+', 12345678910, 'saeeda889@yahoo.com', '01715165331', '01715165331'),
(18, 'antara', 'antara', 'female', 'areswutrde', 'A+', 11111111111, 'd@gmail.com', '123456', '123456'),
(19, 'qqqqq', 'qqqq', 'male', 'qqqqqq', 'A+', 0, 'q@gmail.com', 'qqqqqq', 'qqqqqq'),
(20, 'Mominul', 'Haque', 'male', 'shgfdlygtf', 'AB+', 11111111111, 'm@gmail.com', 'mmmmmm', 'mmmmmm'),
(21, 'Anik', 'Arko', 'male', 'jsadhgf', 'A-', 0, 'arko@gmail.com', 'aaaaaa', 'aaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `rid` int(254) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `gender` text NOT NULL,
  `ctype` varchar(250) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nid` int(100) NOT NULL,
  `com` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`rid`, `date`, `fname`, `lname`, `gender`, `ctype`, `address`, `phone`, `email`, `nid`, `com`) VALUES
(1, '2022-01-04', 'abc', 'efg', 'male', 'Missing/Found Vehicles', 'dhaka', 1234567891, 'a@gmail.com', 123, 'car nameplate:1111 that is missing'),
(2, '2022-01-04', 'afhgf', 'nvhf', 'male', 'Missing/Found Person', 'dhaka', 1119876, 'k@gmail.com', 6543, 'age : 22 , gender: female,Name:Ruma . she is missing '),
(3, '2022-01-04', 'Rafa', 'Islam', 'Male', 'Genarel Crime', 'Basabo,Dhaka', 1234567890, 'rafa@gmail.com', 654321, 'hijeck'),
(4, '2022-01-04', 'Tasrif', 'Islam', 'Male', 'Genarel Crime', 'Basabo,Dhaka', 1434567891, 't@gmail.com', 55666, 'Looting'),
(6, '2022-01-04', 'Rafid', 'Akondo', 'Male', 'Others', 'Rampura,Dhaka', 1987654311, 'rafid@gmail.com', 33333, 'accident'),
(7, '2022-01-04', 'nbvc', 'mbnh', 'female', '', 'nbv', 0, 'nmbnmb', 0, ',.mj.'),
(8, '2022-01-04', 'Nila', 'ahmed', 'female', '', 'bonani', 1243567812, 'n@gmail.com', 58731, 'i lost my mobile phone'),
(9, '2022-01-04', 'kshfdg', 'dfsdg', 'female', 'p', 'aDDFC', 1234567, 'DFHBH', 1234, 'ASDF'),
(10, '2022-01-04', 'xzcz', 'sf', 'male', 'Missing_Found Person', 'afsdg', 0, 'fgsdg', 45356, 'ARet');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gcrime`
--
ALTER TABLE `gcrime`
  ADD PRIMARY KEY (`gcid`);

--
-- Indexes for table `litem`
--
ALTER TABLE `litem`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `mperson`
--
ALTER TABLE `mperson`
  ADD PRIMARY KEY (`mpid`);

--
-- Indexes for table `mvehicles`
--
ALTER TABLE `mvehicles`
  ADD PRIMARY KEY (`mvid`);

--
-- Indexes for table `others`
--
ALTER TABLE `others`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `regform`
--
ALTER TABLE `regform`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `login` (`email`,`Password`) USING BTREE;

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`rid`),
  ADD UNIQUE KEY `nid` (`nid`),
  ADD UNIQUE KEY `rid` (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `regform`
--
ALTER TABLE `regform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `rid` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mperson`
--
ALTER TABLE `mperson`
  ADD CONSTRAINT `mperson_ibfk_1` FOREIGN KEY (`mpid`) REFERENCES `report` (`rid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
