-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2023 at 03:39 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jagir_vetau`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`` PROCEDURE `news_list` ()   BEGIN SELECT * FROM news_master; END$$

CREATE DEFINER=`` PROCEDURE `vacancy_list` ()   Begin select * from job_master;End$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `about_myself`
--

CREATE TABLE `about_myself` (
  `aid` int(11) NOT NULL,
  `jobseek_id` int(11) NOT NULL,
  `about_me` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_myself`
--

INSERT INTO `about_myself` (`aid`, `jobseek_id`, `about_me`) VALUES
(6, 4, 'Deepika thapa || Chaling  ||  Bhaktapur|| Experience:|| Accountant||finance Manager||Marketing|| dipikathapa@gmail.com||  9870653642||  23 years old|| female ||BBA|| MBA ||Tribhuvan University || 85 percentage.'),
(13, 3, 'KIran Prajapati Surabinayak Bhaktapur lecturer||front end developer||Web developer||React Js||HTML5||CSS3 Kp@gmail.com 1234567890 23 years old Female BSC CSIT BE.Computer Engineering Kathmandu University 80 percentage.');

--
-- Triggers `about_myself`
--
DELIMITER $$
CREATE TRIGGER `after_delete_trigger` AFTER DELETE ON `about_myself` FOR EACH ROW insert into  about_myself(jobseek_id, about_me) VALUES (
                                    3, 'KIran Prajapati Surabinayak Bhaktapur lecturer||front end developer||Web developer||React Js||HTML5||CSS3 Kp@gmail.com 1234567890 23 years old Female BSC CSIT BE.Computer Engineering Kathmandu University 80 percentage.'
                                     )
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `admin_email`, `admin_pass`, `admin_username`) VALUES
(1, 'suwalbandana3@gmail.com', '1234', 'Bandana');

-- --------------------------------------------------------

--
-- Table structure for table `application_master`
--

CREATE TABLE `application_master` (
  `ApplicationId` int(11) NOT NULL,
  `JobSeekId` int(11) NOT NULL,
  `JobId` int(11) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `application_master`
--

INSERT INTO `application_master` (`ApplicationId`, `JobSeekId`, `JobId`, `Status`, `Description`) VALUES
(1, 3, 2, 'Call Latter Send', 'You are invited on interview on &th march'),
(2, 3, 3, 'Call Latter Send', 'I will call you later'),
(3, 3, 4, 'Apply', 'No Message'),
(4, 3, 5, 'Apply', 'No Message'),
(5, 3, 6, 'Call Latter Send', 'Please visit our office tommorrow at 9am'),
(6, 4, 2, 'Apply', 'No Message');

-- --------------------------------------------------------

--
-- Table structure for table `employer_reg`
--

CREATE TABLE `employer_reg` (
  `Employer_Id` int(11) NOT NULL,
  `CompanyName` varchar(255) NOT NULL,
  `ContactPerson` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Mobile` varchar(255) NOT NULL,
  `Area_Work` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employer_reg`
--

INSERT INTO `employer_reg` (`Employer_Id`, `CompanyName`, `ContactPerson`, `Address`, `City`, `Email`, `Mobile`, `Area_Work`, `Status`, `UserName`, `Password`, `Question`, `Answer`) VALUES
(13, 'Ainsoft Limited', 'Mr. Hari Krishna Acharya', 'Balkhu', 'Kathmandu', 'ingo@ainsoft.com', '1234567890', 'Software Company', 'Confirm', 'Hari', 'hari', 'What is your pet Name?', 'Cat'),
(14, 'Broadway Infosys', 'Ram Prasad', 'Duwakot', 'Bhaktapur', 'broadway@gmail.com', '1234569872', 'Software', 'Confirm', 'Ram', 'ram', 'What is your pet Name?', 'ram'),
(15, 'Softech Foundation', 'Manish Shah', 'Kamalbinayak', 'Bhaktapur', 'info@gmail.com', '2345678910', 'Software Company', 'Confirm', 'Man', 'men', 'What is your pet Name?', 'dog');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FeedbackId` int(11) NOT NULL,
  `JobSeekId` int(11) NOT NULL,
  `Feedback` varchar(255) NOT NULL,
  `FeedbakDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FeedbackId`, `JobSeekId`, `Feedback`, `FeedbakDate`) VALUES
(1, 3, 'Thank you very much', '21/05/14'),
(2, 3, 'Hello....Job Vetau', '21/05/15'),
(3, 4, 'Thank you jagir vetau !!!', '21/07/29'),
(4, 3, 'kfdjgjg', '23/01/09');

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_education`
--

CREATE TABLE `jobseeker_education` (
  `EduId` int(11) NOT NULL,
  `JobSeekId` int(11) NOT NULL,
  `Degree` varchar(255) NOT NULL,
  `University` varchar(255) NOT NULL,
  `PassingYear` mediumint(9) NOT NULL,
  `Percentage` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobseeker_education`
--

INSERT INTO `jobseeker_education` (`EduId`, `JobSeekId`, `Degree`, `University`, `PassingYear`, `Percentage`) VALUES
(1, 3, 'BE.Computer Engineering', 'Kathmandu University', 2011, 80),
(2, 4, 'MBA', 'Tribhuvan University', 2018, 85),
(4, 3, 'MBA ', 'kathmandu university', 2013, 78),
(6, 3, 'PHD', 'Atlantong university', 2015, 87);

--
-- Triggers `jobseeker_education`
--
DELIMITER $$
CREATE TRIGGER `before_insert` BEFORE INSERT ON `jobseeker_education` FOR EACH ROW SET
                   NEW.Degree=UPPER(NEW.Degree)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_reg`
--

CREATE TABLE `jobseeker_reg` (
  `JobSeekId` int(11) NOT NULL,
  `JobSeekerName` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Mobile` varchar(255) NOT NULL,
  `Qualification` varchar(255) NOT NULL,
  `Experience` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `BirthDate` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `Resume` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobseeker_reg`
--

INSERT INTO `jobseeker_reg` (`JobSeekId`, `JobSeekerName`, `Address`, `City`, `Email`, `Mobile`, `Qualification`, `Experience`, `Gender`, `BirthDate`, `age`, `Resume`, `Status`, `Username`, `Password`, `Question`, `Answer`) VALUES
(3, 'KIran Prajapati', 'Surabinayak', 'Bhaktapur', 'Kp@gmail.com', '1234567890', 'BSC CSIT', 'lecturer||front end developer||Web developer||React Js||HTML5||CSS3', 'Female', '1997-11-14', 23, 'CV_Kiran_Prajapati (1).pdf', 'Confirm', 'Kiran', 'kiran', 'What is your pet Name?', 'cat'),
(4, 'Deepika thapa', 'Chaling ', 'Bhaktapur', 'dipikathapa@gmail.com', '9870653642', 'BBA', 'Accountant||finance Manager||Marketing', 'female', '1997-03-19', 23, 'Syllabus.pdf', 'Confirm', 'dipika', 'dipu', 'What is your pet Name?', 'cat');

-- --------------------------------------------------------

--
-- Table structure for table `job_master`
--

CREATE TABLE `job_master` (
  `JobId` int(11) NOT NULL,
  `CompanyName` varchar(255) NOT NULL,
  `JobTitle` varchar(255) NOT NULL,
  `Age` varchar(255) NOT NULL,
  `Vacancy` int(11) NOT NULL,
  `MinQualification` varchar(255) NOT NULL,
  `Requirement` text NOT NULL,
  `Description` varchar(255) NOT NULL,
  `ExpectedSalary` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_master`
--

INSERT INTO `job_master` (`JobId`, `CompanyName`, `JobTitle`, `Age`, `Vacancy`, `MinQualification`, `Requirement`, `Description`, `ExpectedSalary`) VALUES
(2, 'Ainsoft Limited', 'Software Professional Required', '20-30', 5, 'MIT', '2 years experience as  IT officer,  should have knowledge of software pragrams etc', 'ASP.net', '50,000'),
(3, 'Broadway Infosys', 'Marketing Executive', '25-35', 4, 'BBS', 'should be proficent in marketing, should have at least 3 year experience of marketing manager', 'Sales and Marketing', '20000'),
(4, 'Ainsoft Limited', 'Social Media Marketing', '23-28', 2, 'B.C.A', 'Bachelor’s or master’s degree in marketing or a related field ,Proven working experience in digital marketing, particularly within the industry ,Demonstrable experience leading and managing SEO/SEM, marketing database, and social media advertising campaigns, Solid knowledge of website and marketing analytics tools (e.g., Google Analytics, NetInsight, Omniture, WebTrends, SEMRush, etc.),Experience in setting up and optimizing PPC campaigns on all major search engines,Working knowledge of HTML, CSS, and JavaScript development and constraints', 'Digital Marketing', '20000'),
(5, 'Broadway Infosys', 'Accountant', '20-28', 1, 'BBA', 'working experience at bank or any financial institution for at least 1 year,  shoud have good knowlege of accounting', 'Handle finance', '30000'),
(6, 'Softech Foundation', 'Supervisor required', '25-30', 3, 'MSC IT', 'Degree in computer science, IT or similar,Degree or completed courses in business administration would be advantageous.,Practical experience installing and maintaining systems is recommended., At least 2 year experience as it Supervisor', 'managing project', '25000'),
(7, 'Ainsoft Limited', 'Java Developer', '20-30', 4, 'BIT', 'klsdjdfhdjnvnhdfj', 'it and telecommunication', '50000'),
(12, 'Ainsoft Limited', 'Graphics designer', '20-30', 4, 'BIT', 'fjnkfvfbhf', 'fdhlkffh', '50000');

-- --------------------------------------------------------

--
-- Table structure for table `job_specification`
--

CREATE TABLE `job_specification` (
  `jobspec_id` int(11) NOT NULL,
  `jobid` int(11) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `Specification` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_specification`
--

INSERT INTO `job_specification` (`jobspec_id`, `jobid`, `job_title`, `Specification`) VALUES
(1, 2, 'Software Professional Required', 'We are looking for a experienced  Software Professional Required who are willing to work at our company and expand their knowledge. The candidate must be of age group 20-30. They must  at least have degree of MIT. Additional requirement include : 2 years experience as  IT officer,  should have knowledge of software pragrams etc.'),
(2, 4, 'Social Media Marketing', 'We are looking for a experienced  Social Media Marketing who are willing to work at our company and expand their knowledge. The candidate must be of age group 23-28. They must  at least have degree of B.C.A. Additional requirement include : Bachelor’s or master’s degree in marketing or a related field ,Proven working experience in digital marketing, particularly within the industry ,Demonstrable experience leading and managing SEO/SEM, marketing database, and social media advertising campaigns, Solid knowledge of website and marketing analytics tools (e.g., Google Analytics, NetInsight, Omniture, WebTrends, SEMRush, etc.),Experience in setting up and optimizing PPC campaigns on all major search engines,Working knowledge of HTML, CSS, and JavaScript development and constraints.'),
(3, 6, 'Supervisor required', 'We are looking for a experienced  Supervisor required who are willing to work at our company and expand their knowledge. The candidate must be of age group 25-30. They must  at least have degree of MSC IT. Additional requirement include : Degree in computer science, IT or similar,Degree or completed courses in business administration would be advantageous.,Practical experience installing and maintaining systems is recommended., At least 2 year experience as it Supervisor.'),
(4, 3, 'Marketing Executive', 'We are looking for a experienced  Marketing Executive who are willing to work at our company and expand their knowledge. The candidate must be of age group 25-35. They must  at least have degree of BBS. Additional requirement include : should be proficent in marketing, should have at least 3 year experience of marketing manager.'),
(5, 5, 'Accountant', 'We are looking for a experienced  Accountant who are willing to work at our company and expand their knowledge. The candidate must be of age group 20-28. They must  at least have degree of BBA. Additional requirement include : working experience at bank or any financial institution for at least 1 year,  shoud have good knowlege of accounting.'),
(6, 7, 'Java Developer', 'We are looking for a experienced  Java Developer who are willing to work at our company located at located at Balkhu , Kathmandu and expand their knowledge. The candidate must be of age group 20-30. They must  at least have degree of BIT. Additional requirement include : klsdjdfhdjnvnhdfj.'),
(8, 12, 'Graphics designer', 'We are looking for a experienced  Graphics designer who are willing to work at our company located at \r\n    located at  ,  and expand their knowledge. \r\n    The candidate must be of age group 20-30. \r\n    They must  at least have degree of BIT. Additional requirement include : fjnkfvfbhf.');

-- --------------------------------------------------------

--
-- Table structure for table `news_master`
--

CREATE TABLE `news_master` (
  `NewsId` int(11) NOT NULL,
  `News` varchar(255) NOT NULL,
  `NewsDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_master`
--

INSERT INTO `news_master` (`NewsId`, `News`, `NewsDate`) VALUES
(2, 'Stay Safe', '2021-05-12'),
(3, 'Happy 2021', '2021-05-27'),
(4, 'Happy New Year', '2022-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `walkin_master`
--

CREATE TABLE `walkin_master` (
  `WalkInId` int(11) NOT NULL,
  `CompanyName` varchar(255) NOT NULL,
  `JobTitle` varchar(255) NOT NULL,
  `Vacancy` int(11) NOT NULL,
  `MinQualification` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `InterviewDate` varchar(255) NOT NULL,
  `InterviewTime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `walkin_master`
--

INSERT INTO `walkin_master` (`WalkInId`, `CompanyName`, `JobTitle`, `Vacancy`, `MinQualification`, `Description`, `InterviewDate`, `InterviewTime`) VALUES
(2, 'Ainsoft Limited', 'Fresher Required', 5, 'B.C.A', 'Hardware Personal Required', '2021-05-12', '10:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_myself`
--
ALTER TABLE `about_myself`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `jobseek_id` (`jobseek_id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application_master`
--
ALTER TABLE `application_master`
  ADD PRIMARY KEY (`ApplicationId`);

--
-- Indexes for table `employer_reg`
--
ALTER TABLE `employer_reg`
  ADD PRIMARY KEY (`Employer_Id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FeedbackId`),
  ADD KEY `JobSeekId` (`JobSeekId`);

--
-- Indexes for table `jobseeker_education`
--
ALTER TABLE `jobseeker_education`
  ADD PRIMARY KEY (`EduId`),
  ADD KEY `JobSeekId` (`JobSeekId`);

--
-- Indexes for table `jobseeker_reg`
--
ALTER TABLE `jobseeker_reg`
  ADD PRIMARY KEY (`JobSeekId`);

--
-- Indexes for table `job_master`
--
ALTER TABLE `job_master`
  ADD PRIMARY KEY (`JobId`);

--
-- Indexes for table `job_specification`
--
ALTER TABLE `job_specification`
  ADD PRIMARY KEY (`jobspec_id`);

--
-- Indexes for table `news_master`
--
ALTER TABLE `news_master`
  ADD PRIMARY KEY (`NewsId`);

--
-- Indexes for table `walkin_master`
--
ALTER TABLE `walkin_master`
  ADD PRIMARY KEY (`WalkInId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_myself`
--
ALTER TABLE `about_myself`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `application_master`
--
ALTER TABLE `application_master`
  MODIFY `ApplicationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employer_reg`
--
ALTER TABLE `employer_reg`
  MODIFY `Employer_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FeedbackId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobseeker_education`
--
ALTER TABLE `jobseeker_education`
  MODIFY `EduId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jobseeker_reg`
--
ALTER TABLE `jobseeker_reg`
  MODIFY `JobSeekId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `job_master`
--
ALTER TABLE `job_master`
  MODIFY `JobId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `job_specification`
--
ALTER TABLE `job_specification`
  MODIFY `jobspec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news_master`
--
ALTER TABLE `news_master`
  MODIFY `NewsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `walkin_master`
--
ALTER TABLE `walkin_master`
  MODIFY `WalkInId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `about_myself`
--
ALTER TABLE `about_myself`
  ADD CONSTRAINT `about_myself_ibfk_1` FOREIGN KEY (`jobseek_id`) REFERENCES `jobseeker_reg` (`JobSeekId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`JobSeekId`) REFERENCES `jobseeker_reg` (`JobSeekId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jobseeker_education`
--
ALTER TABLE `jobseeker_education`
  ADD CONSTRAINT `JobSeekId` FOREIGN KEY (`JobSeekId`) REFERENCES `jobseeker_reg` (`JobSeekId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
