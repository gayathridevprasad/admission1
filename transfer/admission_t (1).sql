-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2020 at 12:42 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admission`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission_t`
--

CREATE TABLE `admission_t` (
  `id` int(5) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Father_Name` varchar(50) NOT NULL,
  `Gender` varchar(6) DEFAULT NULL,
  `DOB` varchar(12) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `Pincode` int(8) DEFAULT NULL,
  `Mobile_Number` bigint(10) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Previous` varchar(500) NOT NULL,
  `Department` varchar(200) NOT NULL,
  `Transfer_Semester` int(3) NOT NULL,
  `Reason` varchar(500) NOT NULL,
  `Prev_Semester` int(3) NOT NULL,
  `Subject_Name` varchar(300) NOT NULL,
  `Grade` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission_t`
--

INSERT INTO `admission_t` (`id`, `Name`, `Father_Name`, `Gender`, `DOB`, `Address`, `City`, `Pincode`, `Mobile_Number`, `Email`, `Previous`, `Department`, `Transfer_Semester`, `Reason`, `Prev_Semester`, `Subject_Name`, `Grade`) VALUES
(1, 'Ram', 'Dasar', 'male', '13-08-2003', '41, Elangovan Street', 'Virudhunagar', 626001, 7810808101, 'gayathridevprasad2007@gmail.com', 'panimalar College of Engineering', 'cse', 3, 'Long Distance', 1, 'q', 'O+'),
(2, 'Ram', 'Dasar', 'male', '13-08-2003', '41, Elangovan Street', 'Virudhunagar', 626001, 7810808101, 'gayathridevprasad2007@gmail.com', 'panimalar College of Engineering', 'cse', 3, 'Long Distance', 1, 'w', 'O+'),
(3, 'Ram', 'Dasar', 'male', '13-08-2003', '41, Elangovan Street', 'Virudhunagar', 626001, 7810808101, 'gayathridevprasad2007@gmail.com', 'panimalar College of Engineering', 'cse', 3, 'Long Distance', 1, 'a', 'A+'),
(4, 'Ram', 'Dasar', 'male', '13-08-2003', '41, Elangovan Street', 'Virudhunagar', 626001, 7810808101, 'gayathridevprasad2007@gmail.com', 'panimalar College of Engineering', 'cse', 3, 'Long Distance', 1, 'z', 'O+'),
(5, 'Ram', 'Dasar', 'male', '13-08-2003', '41, Elangovan Street', 'Virudhunagar', 626001, 7810808101, 'gayathridevprasad2007@gmail.com', 'panimalar College of Engineering', 'cse', 3, 'Long Distance', 1, 's', 'A+'),
(6, 'Ram', 'Dasar', 'male', '13-08-2003', '41, Elangovan Street', 'Virudhunagar', 626001, 7810808101, 'gayathridevprasad2007@gmail.com', 'panimalar College of Engineering', 'cse', 3, 'Long Distance', 1, 'l', 'O+'),
(7, 'Ram', 'Dasar', 'male', '13-08-2003', '41, Elangovan Street', 'Virudhunagar', 626001, 7810808101, 'gayathridevprasad2007@gmail.com', 'panimalar College of Engineering', 'cse', 3, 'Long Distance', 1, 'i', 'O+'),
(8, 'Ram', 'Dasar', 'male', '13-08-2003', '41, Elangovan Street', 'Virudhunagar', 626001, 7810808101, 'gayathridevprasad2007@gmail.com', 'panimalar College of Engineering', 'cse', 3, 'Long Distance', 1, 'g', 'O+'),
(9, 'Ram', 'Dasar', 'male', '13-08-2003', '41, Elangovan Street', 'Virudhunagar', 626001, 7810808101, 'gayathridevprasad2007@gmail.com', 'panimalar College of Engineering', 'cse', 3, 'Long Distance', 2, 'b', 'O+'),
(10, 'Ram', 'Dasar', 'male', '13-08-2003', '41, Elangovan Street', 'Virudhunagar', 626001, 7810808101, 'gayathridevprasad2007@gmail.com', 'panimalar College of Engineering', 'cse', 3, 'Long Distance', 2, '', '-1'),
(11, 'Ram', 'Dasar', 'male', '13-08-2003', '41, Elangovan Street', 'Virudhunagar', 626001, 7810808101, 'gayathridevprasad2007@gmail.com', 'panimalar College of Engineering', 'cse', 3, 'Long Distance', 2, '', '-1'),
(12, 'Ram', 'Dasar', 'male', '13-08-2003', '41, Elangovan Street', 'Virudhunagar', 626001, 7810808101, 'gayathridevprasad2007@gmail.com', 'panimalar College of Engineering', 'cse', 3, 'Long Distance', 2, '', '-1'),
(13, 'Ram', 'Dasar', 'male', '13-08-2003', '41, Elangovan Street', 'Virudhunagar', 626001, 7810808101, 'gayathridevprasad2007@gmail.com', 'panimalar College of Engineering', 'cse', 3, 'Long Distance', 2, '', '-1'),
(14, 'Ram', 'Dasar', 'male', '13-08-2003', '41, Elangovan Street', 'Virudhunagar', 626001, 7810808101, 'gayathridevprasad2007@gmail.com', 'panimalar College of Engineering', 'cse', 3, 'Long Distance', 2, '', '-1'),
(15, 'Ram', 'Dasar', 'male', '13-08-2003', '41, Elangovan Street', 'Virudhunagar', 626001, 7810808101, 'gayathridevprasad2007@gmail.com', 'panimalar College of Engineering', 'cse', 3, 'Long Distance', 2, '', '-1'),
(16, 'Ram', 'Dasar', 'male', '13-08-2003', '41, Elangovan Street', 'Virudhunagar', 626001, 7810808101, 'gayathridevprasad2007@gmail.com', 'panimalar College of Engineering', 'cse', 3, 'Long Distance', 2, '', '-1'),
(17, 'Ram', 'Dasar', 'male', '13-08-2003', '41, Elangovan Street', 'Virudhunagar', 626001, 7810808101, 'gayathridevprasad2007@gmail.com', 'panimalar College of Engineering', 'cse', 3, 'Long Distance', 2, '', '-1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission_t`
--
ALTER TABLE `admission_t`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission_t`
--
ALTER TABLE `admission_t`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
