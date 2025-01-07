-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2023 at 08:13 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ojp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_master`
--

CREATE TABLE `admin_master` (
  `UserId` int(11) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin_master`
--

INSERT INTO `admin_master` (`UserId`, `UserName`, `Password`) VALUES
(1, 'admin', 'admin12');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FeedbackId` int(11) NOT NULL,
  `JobSeekId` int(11) NOT NULL,
  `Feedback` varchar(200) NOT NULL,
  `FeedbakDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FeedbackId`, `JobSeekId`, `Feedback`, `FeedbakDate`) VALUES
(12, 7, 'WE ARE THE BEST WAY TO GET A GOOD JOB PORTALS AND I WILL TRY TO GET A NEW JOBS SEARCH IN SIDE', '2023-03-28 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_education`
--

CREATE TABLE `jobseeker_education` (
  `EduId` int(11) NOT NULL,
  `JobSeekId` int(11) NOT NULL,
  `Degree` varchar(20) NOT NULL,
  `University` varchar(100) NOT NULL,
  `PassingYear` mediumint(9) NOT NULL,
  `Percentage` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `jobseeker_education`
--

INSERT INTO `jobseeker_education` (`EduId`, `JobSeekId`, `Degree`, `University`, `PassingYear`, `Percentage`) VALUES
(6, 1, 'B.C.A', 'Snkalchand Patel Univarsity', 2023, 8.96),
(8, 1, '12', 'Gujarat board ', 2019, 62),
(9, 7, 'SSC', 'Gujarat board ', 2021, 62),
(10, 7, 'HSC', 'Gujarat board ', 2016, 58),
(11, 7, 'BCA', 'Snkalchand Patel Univarsity', 2023, 8.96);

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_reg`
--

CREATE TABLE `jobseeker_reg` (
  `JobSeekId` int(11) NOT NULL,
  `JobSeekerName` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Qualification` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `BirthDate` date NOT NULL,
  `Resume` text NOT NULL,
  `Status` varchar(10) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Question` varchar(100) NOT NULL,
  `Answer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `jobseeker_reg`
--

INSERT INTO `jobseeker_reg` (`JobSeekId`, `JobSeekerName`, `Address`, `City`, `Email`, `Mobile`, `Qualification`, `Gender`, `BirthDate`, `Resume`, `Status`, `UserName`, `Password`, `Question`, `Answer`) VALUES
(7, 'Bharat Chaudhary', 'Dessa, B.K, 385535', 'Deesa', 'bhartchaudhary12@gmail.com', 6351588430, 'BCA', 'Male', '2000-06-11', '', 'Confirm', 'bharat123', 'bharat123', 'What is Your Pet Name?', 'bs'),
(8, 'Dhruv Prajapati', 'near R.b patel highschool', 'Malosan', 'dhruvprajapati1155@gmail.com', 6353457201, '12th', 'Male', '2002-12-06', '', 'Confirm', 'Dhruv2002', 'Dhruv@2002', 'What is Your Pet Name?', 'dhruv');

-- --------------------------------------------------------

--
-- Table structure for table `job_master`
--

CREATE TABLE `job_master` (
  `JobId` int(11) NOT NULL,
  `CompanyName` varchar(30) NOT NULL,
  `JobTitle` varchar(50) NOT NULL,
  `JobLocation` varchar(20) NOT NULL,
  `JobType` varchar(20) NOT NULL,
  `Vacancy` int(11) NOT NULL,
  `MinQualification` varchar(50) NOT NULL,
  `JobDescription` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `job_master`
--

INSERT INTO `job_master` (`JobId`, `CompanyName`, `JobTitle`, `JobLocation`, `JobType`, `Vacancy`, `MinQualification`, `JobDescription`) VALUES
(5, 'Department Of Busine', 'Data Entry', 'Deesa', 'Full-Time', 5, 'BCA', 'Starting salary 15,000 - 18,000/- A Par Months '),
(6, 'brain tech', 'Software design & Work of Computers ', 'Palanpur', 'Part-Time', 2, 'BCA, MCA', 'fresher is required '),
(7, 'infoy privet .limite', 'Installshild And Application Packager', 'Ahmedabad ', 'Part-Time', 8, 'BCA, MCA', 'As a Release Engineer, you will be part of the DevOps team specializing in delivery and deployment. '),
(8, 'rty', 'Application AI Create ', 'Ahmedabad ', 'Part-Time', 45, 'Master Completed ', 'experience minimum 2 Years, salary are 45000+');

-- --------------------------------------------------------

--
-- Table structure for table `recruiter_reg`
--

CREATE TABLE `recruiter_reg` (
  `RecruiterId` int(11) NOT NULL,
  `CompanyName` varchar(20) NOT NULL,
  `ContactPerson` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Mobile` bigint(13) NOT NULL,
  `Area_Work` varchar(40) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `UserName` varchar(15) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Question` varchar(100) NOT NULL,
  `Answer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `recruiter_reg`
--

INSERT INTO `recruiter_reg` (`RecruiterId`, `CompanyName`, `ContactPerson`, `Address`, `City`, `Email`, `Mobile`, `Area_Work`, `Status`, `UserName`, `Password`, `Question`, `Answer`) VALUES
(12, 'infoy privet .limite', 'Vikram Chaudhary', 'Vishnagar, 384315', 'Ahmedabad ', 'vikramchaudharr9913@gmail', 9904413710, 'hatm, css & java', 'Confirm', 'vb123', '12345', 'Who is Your Favourite Person?', 'vb'),
(13, 'information', 'DJ chaudhary', 'Palanpur ', 'deesa', 'DJ@gmail.com', 6325413625, 'Computers engineering ', 'Confirm', 'dj123', 'dj123', 'Who is Your Favourite Person?', 'rano'),
(14, 'brain tech', 'vipul d.', 'kheralu .', 'mahesana', 'mrvipul@gmail.com', 9016751209, 'Computers ', 'Confirm', 'vipul123', '1234', 'What is the Name of Your First School?', 'dm'),
(18, 'Department Of Busine', 'Bharat Chaudhary', '123456', 'Palanpur', 'bharatchaudhary6351@gmail', 6351588430, 'hatm, css & java', 'Confirm', 'bharat18', 'bharat17', 'Who is Your Favourite Person?', 'bs'),
(19, 'Department Of Busine', 'Bharat Chaudh13', '123456', 'Palanpur', 'bharatchaudhary6351@gmail', 6351588430, 'Computers ', 'Confirm', 'bharat12', 'bharat12', 'Who is Your Favourite Person?', 'bs'),
(21, 'Department Of Busine', 'Bharat Chaudhary', 'deesa', 'Palanpur', 'bharatchaudhary6351@gmail', 6351588430, 'java deploper', 'Confirm', 'bharat9', 'bharat@98', 'Who is Your Favourite Person?', 'bs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_master`
--
ALTER TABLE `admin_master`
  ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FeedbackId`),
  ADD KEY `jobseekers` (`JobSeekId`);

--
-- Indexes for table `jobseeker_education`
--
ALTER TABLE `jobseeker_education`
  ADD PRIMARY KEY (`EduId`),
  ADD KEY `jobseeker_edu` (`JobSeekId`);

--
-- Indexes for table `jobseeker_reg`
--
ALTER TABLE `jobseeker_reg`
  ADD PRIMARY KEY (`JobSeekId`),
  ADD KEY `JobSeekId` (`JobSeekId`);

--
-- Indexes for table `job_master`
--
ALTER TABLE `job_master`
  ADD PRIMARY KEY (`JobId`);

--
-- Indexes for table `recruiter_reg`
--
ALTER TABLE `recruiter_reg`
  ADD PRIMARY KEY (`RecruiterId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_master`
--
ALTER TABLE `admin_master`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FeedbackId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `jobseeker_education`
--
ALTER TABLE `jobseeker_education`
  MODIFY `EduId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jobseeker_reg`
--
ALTER TABLE `jobseeker_reg`
  MODIFY `JobSeekId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `job_master`
--
ALTER TABLE `job_master`
  MODIFY `JobId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `recruiter_reg`
--
ALTER TABLE `recruiter_reg`
  MODIFY `RecruiterId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `jobseekers` FOREIGN KEY (`JobSeekId`) REFERENCES `jobseeker_reg` (`JobSeekId`);

--
-- Constraints for table `jobseeker_education`
--
ALTER TABLE `jobseeker_education`
  ADD CONSTRAINT `jobseeker_edu` FOREIGN KEY (`JobSeekId`) REFERENCES `jobseeker_reg` (`JobSeekId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
