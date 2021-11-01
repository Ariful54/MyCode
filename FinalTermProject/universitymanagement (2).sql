-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2021 at 05:45 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `universitymanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `userpassword` varchar(50) NOT NULL,
  `dateofbirth` varchar(50) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `active` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `userid`, `email`, `gender`, `userpassword`, `dateofbirth`, `salary`, `active`) VALUES
('admin-11', 'BADHON', 'badhon1512@gmail.com', 'male', '1234567', '2021-01-05', '20000', 'active'),
('admin-12', 'BADHON', 'badhon1512@gmail.com', 'male', '123456', '2021-01-12', '200', 'active'),
('a-1', 'BADHON', 'badhon1512@gmail.com', 'male', '123456', '2020-12-30', '20000', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `assignecourses`
--

CREATE TABLE `assignecourses` (
  `id` int(6) UNSIGNED NOT NULL,
  `cname` varchar(30) NOT NULL,
  `tname` varchar(30) NOT NULL,
  `tid` varchar(10) NOT NULL,
  `sid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignecourses`
--

INSERT INTO `assignecourses` (`id`, `cname`, `tname`, `tid`, `sid`) VALUES
(11, 'Data communication', 'Saifuddin', '1', '1'),
(12, 'Data communication', 'Ariful', '11', '100'),
(13, 'Web Technologies', 'Sazzad Hossain', '1001', '1'),
(14, 'Compiler Design', 'Harry Potter', '1002', '1'),
(15, 'Theory of Computation', 'Harry Potter', '1002', '2');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `cid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `cname`, `cid`) VALUES
(1, 'Datat', '11'),
(80, 'Web Technologies', '101'),
(86, 'Math', '100'),
(87, 'y', '1'),
(88, 'u', '4');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `userid` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `userpassword` varchar(30) NOT NULL,
  `dateofbirth` varchar(30) NOT NULL,
  `depertment` varchar(30) NOT NULL,
  `salary` int(6) NOT NULL,
  `activestatus` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`userid`, `username`, `email`, `gender`, `userpassword`, `dateofbirth`, `depertment`, `salary`, `activestatus`) VALUES
('1', 'Saifuddin', 's@gmail.com', 'Male', '1234', '10/12/1999', 'CSE', 10000, 'Active'),
('1001', 'Sazzad Hossain', 'sazzad@aiub.edu', 'Male', '1234', '10/12/1980', 'CSE', 100000, 'Active'),
('1002', 'Harry Potter', 'harry@gmail.com', 'Male', '1234567aA', '2013-02-11', 'CSE', 10000, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `labtask`
--

CREATE TABLE `labtask` (
  `id` int(6) UNSIGNED NOT NULL,
  `cname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `labtask`
--

INSERT INTO `labtask` (`id`, `cname`) VALUES
(1, 'DataComt');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `subject` varchar(1000) NOT NULL,
  `notice` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`subject`, `notice`) VALUES
('xx', ';lwJA');

-- --------------------------------------------------------

--
-- Table structure for table `resultlist`
--

CREATE TABLE `resultlist` (
  `rid` int(11) NOT NULL,
  `id` varchar(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  `mark` double(5,2) NOT NULL,
  `gpa` double(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resultlist`
--

INSERT INTO `resultlist` (`rid`, `id`, `course`, `mark`, `gpa`) VALUES
(0, '1', 'Compiler Design', 100.00, 4.00),
(1, '2', 'Theory of Computation', 80.00, 3.50),
(2, '3', 'Theory of Computation', 85.00, 3.75);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `userid` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `userpassword` varchar(30) NOT NULL,
  `dateofbirth` varchar(30) NOT NULL,
  `salary` varchar(30) NOT NULL,
  `activestatus` varchar(30) NOT NULL,
  `picture` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`userid`, `username`, `email`, `gender`, `userpassword`, `dateofbirth`, `salary`, `activestatus`, `picture`) VALUES
('100', 'Ariful', 'arifislam8080@gmail.com', 'Male', '1234', '10/12/1999', '10000', 'Active', ''),
('13', 'D', 'a@gmail.com', 'Male', '1234', '10/12/1999', '10000', 'ON', '123');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `userid` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `userpassword` varchar(30) NOT NULL,
  `dateofbirth` varchar(30) NOT NULL,
  `depertment` varchar(30) NOT NULL,
  `cgpa` int(6) NOT NULL,
  `activestatus` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`userid`, `username`, `email`, `gender`, `userpassword`, `dateofbirth`, `depertment`, `cgpa`, `activestatus`) VALUES
('1', 'Ariful', 'arifislam8080@gmail.com', 'Male', '1234', '10/12/1999', 'CSE', 3, 'Active'),
('2', 'Jack', 'jack@gmail.com', 'Male', '1234', '2001-03-02', 'CSE', 4, 'Active'),
('3', 'Hermione Granger', 'hg@gmail.com', 'Female', '1234', '1998-02-01', 'CSE', 4, 'Active'),
('badhon1512asd', 'badhon', 'badhon1512@gmail.com', 'male', '12345', '2021-01-01', 'CSE', 9, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `userpassword` varchar(30) NOT NULL,
  `activestatus` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `type`, `userpassword`, `activestatus`) VALUES
('100', 'Ariful', 'staff', '1234', 'Active'),
('1001', 'Sazzad Hossain', 'faculty', '1234', 'Active'),
('1002', 'Harry Potter', 'faculty', '1234567aA', 'Active'),
('a-1', 'BADHON', 'staff', '123456', 'active'),
('badhon1512asd', 'badhon', 'student', '12345', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignecourses`
--
ALTER TABLE `assignecourses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `labtask`
--
ALTER TABLE `labtask`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resultlist`
--
ALTER TABLE `resultlist`
  ADD UNIQUE KEY `rid` (`rid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignecourses`
--
ALTER TABLE `assignecourses`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `labtask`
--
ALTER TABLE `labtask`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
