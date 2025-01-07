-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2023 at 09:23 AM
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
  `UserId` int(2) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin_master`
--

INSERT INTO `admin_master` (`UserId`, `UserName`, `Password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `application_master`
--

CREATE TABLE `application_master` (
  `ApplicationId` int(11) NOT NULL,
  `JobSeekId` int(11) NOT NULL,
  `JobId` int(11) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
(1, 3, 'Top Careers is to empower job seekers by providing them with insights into top career opportunities and equipping them with the tools and resources they need to achieve career success.', '2023-04-17 18:30:00'),
(2, 1, 'best online job portal', '2023-04-19 18:30:00');

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
  `Percentage` float NOT NULL,
  `Upload_Result` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `jobseeker_education`
--

INSERT INTO `jobseeker_education` (`EduId`, `JobSeekId`, `Degree`, `University`, `PassingYear`, `Percentage`, `Upload_Result`) VALUES
(1, 1, 'SSC', 'Gujarat secondary board ', 2017, 62, 'images/bharat.pdf'),
(2, 2, 'BCA', 'Snkalchand Patel Univarsity', 2022, 62, 'images/R3.jfif'),
(3, 2, 'BCA, MCA & Experienc', 'Snkalchand Patel Univarsity & sk', 2017, 62, 'images/loading-gif.webp'),
(4, 2, 'bca', 'Gujarat board (HSC)', 2000, 62, 'images/loading.gif'),
(5, 3, 'bca', 'Gujarat board ', 2022, 8.96, 'images/New doc Oct 6, 2020 3.37 PM_1.jpg'),
(6, 1, 'BCA', 'Snkalchand Patel Univarsity', 2022, 8.96, 'images/sem-5.pdf');

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
  `ConfirmPassword` varchar(20) NOT NULL,
  `Question` varchar(100) NOT NULL,
  `Answer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `jobseeker_reg`
--

INSERT INTO `jobseeker_reg` (`JobSeekId`, `JobSeekerName`, `Address`, `City`, `Email`, `Mobile`, `Qualification`, `Gender`, `BirthDate`, `Resume`, `Status`, `UserName`, `Password`, `ConfirmPassword`, `Question`, `Answer`) VALUES
(1, 'Bharat Chaudhary', 'Deesa B.k Gujarat', 'Deesa', 'bharatchaudhary6351@gmail.com', 6351588430, 'BCA', 'Male', '2000-06-11', 'images/bharat.pdf', 'Confirm', 'bharat123', 'bharat@123', 'bharat@123', 'What is Your Pet Name?', 'bs'),
(2, 'Bharat Chaudhary', '123456', 'Palanpur', 'bharatchaudhary6351@gmail.com', 6351588430, 'Bca', 'Male', '2001-02-14', 'images/loading-gif.webp', 'Confirm', 'dilip123', 'bharat@12', '', 'What is Your Pet Name?', 'df'),
(3, 'Vishal Chaudhary', 'Kotda, Deesa, B.K', 'Palanpur', 'bharatchaudhary6351@gmail.com', 6351588430, 'MCA', 'Male', '2003-12-25', 'images/IMGS.jpeg', 'Confirm', 'bharat123', 'bharat123', 'bharat123', 'What is Your Pet Name?', 'bsc'),
(4, 'bharat ', '', 'Palanpur', 'bharatchaudhary6351@gmail.com', 0, '', 'Male', '0000-00-00', '', 'Pending', 'bharat1234', 'bharat1234', 'bharat1234', 'What is Your Pet Name?', 'bs'),
(5, 'Dhruv Prajapati ', '', 'Vishnagar', 'dhruvparajapti@gmail.com', 0, '', 'Male', '0000-00-00', '', 'Confirm', 'dhurv123', 'dhurv@123', 'dhurv@123', 'What is Your Pet Name?', 'db');

-- --------------------------------------------------------

--
-- Table structure for table `job_master`
--

CREATE TABLE `job_master` (
  `JobId` int(11) NOT NULL,
  `RecruiterId` int(11) NOT NULL,
  `CompanyName` varchar(30) NOT NULL,
  `JobTitle` varchar(50) NOT NULL,
  `JobLocation` varchar(20) NOT NULL,
  `JobType` varchar(20) NOT NULL,
  `JobMode` varchar(20) NOT NULL,
  `Vacancy` int(11) NOT NULL,
  `MinQualification` varchar(50) NOT NULL,
  `JobDescription` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `job_master`
--

INSERT INTO `job_master` (`JobId`, `RecruiterId`, `CompanyName`, `JobTitle`, `JobLocation`, `JobType`, `JobMode`, `Vacancy`, `MinQualification`, `JobDescription`) VALUES
(1, 1, 'Blue Star Infotech', 'Software application packagers design', 'Ahmedabad ', 'Full-Time', ' Offline', 5, 'MCA', 'Manage Projects, Organize Tasks, and Build Team Spirit All in One Place. Sign Up Its Free! Trello is the Fun, Flexible and Free Way to Organize Plans, Projects & More. For Any Event.'),
(2, 2, 'Divtech IT Solution Pvt. & Ltd', 'IT Executive, Computer Hardware & Network Engineer', 'Vadodara, GUJARAT', 'Full-Time', ' Offline', 15, 'MSc IT', 'Module Development apps And Features \r\nWork on Python\r\ncommunication With team');

-- --------------------------------------------------------

--
-- Table structure for table `recruiter_feedback`
--

CREATE TABLE `recruiter_feedback` (
  `FeedbackId` int(11) NOT NULL,
  `RecruiterId` int(11) NOT NULL,
  `Feedback` varchar(200) NOT NULL,
  `FeedbakDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `recruiter_feedback`
--

INSERT INTO `recruiter_feedback` (`FeedbackId`, `RecruiterId`, `Feedback`, `FeedbakDate`) VALUES
(1, 1, 'best job portal.', '2023-04-19 18:30:00'),
(2, 2, 'best job portal.', '2023-04-19 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `recruiter_reg`
--

CREATE TABLE `recruiter_reg` (
  `RecruiterId` int(11) NOT NULL,
  `CompanyName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `CompanyLogo` varchar(400) NOT NULL,
  `ContactPerson` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Mobile` bigint(13) NOT NULL,
  `Area_Work` varchar(40) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `UserName` varchar(15) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `ConfirmPassword` varchar(20) NOT NULL,
  `Question` varchar(100) NOT NULL,
  `Answer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `recruiter_reg`
--

INSERT INTO `recruiter_reg` (`RecruiterId`, `CompanyName`, `CompanyLogo`, `ContactPerson`, `Address`, `City`, `Email`, `Mobile`, `Area_Work`, `Status`, `UserName`, `Password`, `ConfirmPassword`, `Question`, `Answer`) VALUES
(1, 'Blue Star Infotech', 'upload/Blue_Star_Infotech_logo.png', 'Bharat Chaudhary', 'The Great Oasis, 8th Floor\r\nMIDC, Marol, Andheri\r\nMumbai, Maharashtra 400101', 'Mumbai', 'bharatchaudhary6351@gmail', 6351588430, 'Java And php', 'Confirm', 'bharat123', 'bharat@123', '', 'Who is Your Favourite Person?', 'bs'),
(2, 'Divtech IT Solution Pvt. & Ltd.', 'upload/Divtech.jpg', 'Dilip Chaudhary', '     42, Mg Road near by CT complex, Vadodara ', 'Vadodara ', 'dilipchaudhary76@gmail.co', 7622800756, 'Computer Hardware & Network Engineer', 'Confirm', 'dilip123', 'bharat123', '', 'Who is Your Favourite Person?', 'dt'),
(3, 'NetPointz', 'upload/NetPointz.png', 'Vishal Chaudhary', '', 'Palanpur', 'vishalchaudhary6351@gmail', 0, '', 'Pending', 'vishal123', 'Vishal123', 'Vishal123', 'What is Your Pet Name?', 'visu'),
(4, 'brain tech', 'upload/brain tech.jpg', 'D J Chaudhary', '', 'mahesana', 'mrvipul@gmail.com', 0, '', 'Pending', 'Dj123', 'Dj@12345', 'Dj@12345', 'Who is Your Favourite Person?', 'dj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_master`
--
ALTER TABLE `admin_master`
  ADD PRIMARY KEY (`UserId`,`UserName`);

--
-- Indexes for table `application_master`
--
ALTER TABLE `application_master`
  ADD PRIMARY KEY (`ApplicationId`),
  ADD KEY `jobid` (`JobId`),
  ADD KEY `jonseeker` (`JobSeekId`);

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
  ADD PRIMARY KEY (`JobId`),
  ADD KEY `recruiterIdFk` (`RecruiterId`);

--
-- Indexes for table `recruiter_feedback`
--
ALTER TABLE `recruiter_feedback`
  ADD PRIMARY KEY (`FeedbackId`),
  ADD KEY `RecruiterId` (`RecruiterId`);

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
  MODIFY `UserId` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `application_master`
--
ALTER TABLE `application_master`
  MODIFY `ApplicationId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FeedbackId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobseeker_education`
--
ALTER TABLE `jobseeker_education`
  MODIFY `EduId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jobseeker_reg`
--
ALTER TABLE `jobseeker_reg`
  MODIFY `JobSeekId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `job_master`
--
ALTER TABLE `job_master`
  MODIFY `JobId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `recruiter_feedback`
--
ALTER TABLE `recruiter_feedback`
  MODIFY `FeedbackId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `recruiter_reg`
--
ALTER TABLE `recruiter_reg`
  MODIFY `RecruiterId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `application_master`
--
ALTER TABLE `application_master`
  ADD CONSTRAINT `jobid` FOREIGN KEY (`JobId`) REFERENCES `job_master` (`JobId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jonseeker` FOREIGN KEY (`JobSeekId`) REFERENCES `jobseeker_reg` (`JobSeekId`) ON DELETE CASCADE ON UPDATE CASCADE;

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

--
-- Constraints for table `job_master`
--
ALTER TABLE `job_master`
  ADD CONSTRAINT `recruiterIdFk` FOREIGN KEY (`RecruiterId`) REFERENCES `recruiter_reg` (`RecruiterId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `recruiter_feedback`
--
ALTER TABLE `recruiter_feedback`
  ADD CONSTRAINT `RecruiterId` FOREIGN KEY (`RecruiterId`) REFERENCES `recruiter_reg` (`RecruiterId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
