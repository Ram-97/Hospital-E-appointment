-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2018 at 08:53 AM
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
-- Database: `hseapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `PersonID` int(100) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`PersonID`, `username`, `password`) VALUES
(1, 'Admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `ID` int(100) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(25) DEFAULT NULL,
  `selectdoc` varchar(25) DEFAULT NULL,
  `user` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`ID`, `name`, `age`, `date`, `time`, `selectdoc`, `user`) VALUES
(10, 'kumaresh', 42, '2018-04-26', '10AM-11AM', 'Raghul', 'subash'),
(11, 'Kathiresan', 42, '2018-04-13', '10AM-11AM', 'Raghul', 'subash'),
(12, 'Vijay Kumar', 32, '2018-04-16', '11AM-12PM', 'Raghul', 'subash'),
(13, 'Sanjay', 23, '2018-04-18', '2PM-3PM', 'Raghul', 'madhan'),
(14, 'Sangesh', 21, '2018-04-30', '3PM-4PM', 'Raghul', 'madhan'),
(15, 'Vignesh', 45, '2018-05-01', '1PM-2PM', 'Raghul', 'madhan'),
(16, 'Subu', 35, '2018-05-02', '10AM-11AM', 'Raghul', 'madhan');

-- --------------------------------------------------------

--
-- Table structure for table `confirm`
--

CREATE TABLE `confirm` (
  `ID` int(100) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(25) DEFAULT NULL,
  `doctor` varchar(25) DEFAULT NULL,
  `user` varchar(25) DEFAULT NULL,
  `confirm` varchar(25) DEFAULT 'confirmed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `confirm`
--

INSERT INTO `confirm` (`ID`, `name`, `age`, `date`, `time`, `doctor`, `user`, `confirm`) VALUES
(1, 'mrk', 20, '2018-04-11', '10AM-11AM', 'Rajesh', 'Mohanakannan', 'confirmed'),
(2, 'Kani', 12, '2018-04-25', '11AM-12PM', 'Rajesh', 'subash', 'confirmed'),
(3, 'Nithish', 21, '2018-04-26', '1PM-2PM', 'Rajesh', 'padmanabhan', 'confirmed'),
(4, 'suresh', 35, '2018-04-27', '2PM-3PM', 'Rajesh', 'padmanabhan', 'confirmed'),
(5, 'murugan', 21, '2018-04-25', '3PM-4PM', 'Rajesh', 'subash', 'confirmed'),
(6, 'Raihan', 18, '2018-07-20', '1PM-2PM', 'Rajesh', 'subash', 'confirmed'),
(7, 'Satheesh', 45, '2018-09-20', '11AM-12PM', 'Rajesh', 'subash', 'confirmed'),
(8, 'Monisha', 55, '2018-04-27', '2PM-3PM', 'Rajesh', 'subash', 'confirmed'),
(9, 'Manoj', 32, '2018-04-18', '10AM-11AM', 'Rajesh', 'subash', 'confirmed'),
(10, 'kannan', 34, '2018-04-16', '2PM-3PM', 'Rajesh', 'subash', 'confirmed'),
(11, 'murugan', 42, '2018-04-26', '10AM-11AM', 'Raghul', 'santhosh', 'confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `PersonID` int(100) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `qualification` varchar(50) DEFAULT NULL,
  `specialist` varchar(50) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`PersonID`, `username`, `qualification`, `specialist`, `password`) VALUES
(1, 'Rajesh', 'MBBS', 'orthologist', 'Docrajesh'),
(2, 'Raghul', 'Mbbs', 'cardiologist', 'Docraghul'),
(3, 'Johnson', 'Mbbs', 'cycologist', 'Docjohnson'),
(4, 'Satheesh', 'MBBs', 'cardiologist', 'Docsatheesh'),
(5, 'Kesavan', 'MBBS', 'Eye', 'Dockesavan'),
(6, 'Suresh', 'MBBS', 'Dental', 'Docsuresh');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `PersonID` int(100) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`PersonID`, `username`, `password`) VALUES
(1, 'madhan', 'madhan'),
(2, 'subash', 'subash'),
(3, 'Nagaraj', 'nagaraj'),
(4, 'muthu', '16011998'),
(5, 'padmanabhan', 'padman7'),
(6, 'nanthan', 'sit'),
(7, 'nithish', 'ngnk'),
(8, 'Krish', 'app#98'),
(9, 'Mohanakannan', 'mohanmn29'),
(10, 'santhosh', 'santhosh');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `PersonID` int(100) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `maritalstatus` varchar(10) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `mobile` varchar(13) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `pincode` varchar(30) DEFAULT NULL,
  `secret` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`PersonID`, `username`, `gender`, `maritalstatus`, `address`, `mobile`, `email`, `country`, `state`, `city`, `pincode`, `secret`, `password`) VALUES
(1, 'madhan', 'Male', 'Married', '114\r\nalagar nagar', '7676767878', 'madhan@gmail.com', 'India', 'Tamilnadu', 'madurai', '625009', 'madras-madhan', 'madhan'),
(2, 'subash', 'Male', 'Married', '112/5\r\nMunichalai.', '7656453423', 'subashini@gmail.com', 'India', 'Tamilnadu', 'madurai', '625001', 'madurai-subash', 'subash'),
(3, 'Nagaraj', 'Male', 'Unmarried', '2/345 thev street,\r\nmadurai', '7564329999', 'nagaraj999@gmail.com', 'India', 'Tamilnadu', 'madurai', '623407', 'madurai', 'nagaraj'),
(4, 'muthu', 'Male', 'Unmarried', '32 V.O.C ST,,\r\nMARUDHUPANDIYAN NAGAR,\r\n4th cross st,\r\nmadurai-2', '9578488005', 'muthuraja514@gmail.com', 'India', 'Tamilnadu', 'madurai', '625002', 'madurai', '16011998'),
(5, 'padmanabhan', 'Male', 'Unmarried', '5/1128-28,meenatchi vihar', '8248851672', 'padmanabhan720@gmail.com', 'India', 'Tamilnadu', 'madurai', '625020', 'CUDALORE-PADMAN', 'padman7'),
(6, 'nanthan', 'Male', 'Unmarried', 'madurai\r\nkariapatti', '9243545245', 'nagaraj999@gmail.com', 'India', 'Tamilnadu', 'madurai', '18', 'madurai', 'sit'),
(7, 'nithish', 'Male', 'Unmarried', 'thavittu santhai', '9876554321', 'nithish@gmail.com', 'India', 'Tamilnadu', 'madurai', '625001', 'madurai', 'ngnk'),
(8, 'Krish', 'Male', 'Unmarried', 'Chokkalinaga Nagar 6th St,\r\nMadurai-16', '9543240143', 'romeomuralikrishnan@gmail.com', 'India', 'Tamilnadu', 'Maduari', '625016', 'Las Vegas', 'app#98'),
(9, 'Mohanakannan', 'Male', 'Married', '154,Harveypatti\r\nThirupparankundram,\r\nmadurai', '7871971735', 'mkmohanakannan705@gmail.com', 'India', 'Tamilnadu', 'Madurai', '625005', 'pykaara', 'mohanmn29'),
(10, 'santhosh', 'Male', 'Unmarried', '116/7,\r\nNew Ramnad Road.', '7667766778', 'santhosh@gmail.com', 'India', 'Tamilnadu', 'Madurai', '625009', 'chennai', 'santhosh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`PersonID`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `confirm`
--
ALTER TABLE `confirm`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`PersonID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`PersonID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`PersonID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `PersonID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `confirm`
--
ALTER TABLE `confirm`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `PersonID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `PersonID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `PersonID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
