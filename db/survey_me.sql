-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 02, 2023 at 09:37 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey_me`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `AdminID` int(11) NOT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `AdminSurvey`
--

CREATE TABLE `AdminSurvey` (
  `AdminSurveyID` int(11) NOT NULL,
  `AdminID` int(11) DEFAULT NULL,
  `SurveyID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Option`
--

CREATE TABLE `Option` (
  `OptionID` int(11) NOT NULL,
  `QuestionID` int(11) DEFAULT NULL,
  `OptionText` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Option`
--

INSERT INTO `Option` (`OptionID`, `QuestionID`, `OptionText`) VALUES
(1, 3, '1 - Not intense at all'),
(2, 3, '2 - Slightly intense'),
(3, 3, '3 - Moderately intense'),
(4, 3, '4 - Very intense'),
(5, 3, '5 - Extremely intense'),
(6, 6, '1 - Not challenging at all'),
(7, 6, '2 - Slightly challenging'),
(8, 6, '3 - Moderately challenging'),
(9, 6, '4 - Very challenging'),
(10, 6, '5 - Extremely challenging'),
(11, 8, '1 - Not important at all'),
(12, 8, '2 - Slightly important'),
(13, 8, '3 - Moderately important'),
(14, 8, '4 - Very important'),
(15, 8, '5 - Extremely important');

-- --------------------------------------------------------

--
-- Table structure for table `Question`
--

CREATE TABLE `Question` (
  `QuestionID` int(11) NOT NULL,
  `SectionID` int(11) DEFAULT NULL,
  `QuestionText` text DEFAULT NULL,
  `IsMultipleChoice` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Question`
--

INSERT INTO `Question` (`QuestionID`, `SectionID`, `QuestionText`, `IsMultipleChoice`) VALUES
(1, 1, 'How would you describe the feeling of being in love?', 0),
(2, 1, 'Have you ever experienced conflicting emotions in a relationship? If so, please describe.', 0),
(3, 1, 'On a scale of 1 to 5, how intense is your love for your partner?', 1),
(4, 2, 'What do you consider the biggest challenge in your current relationship?', 0),
(5, 2, 'How do you usually resolve conflicts with your partner?', 0),
(6, 2, 'On a scale of 1 to 5, how challenging is maintaining trust in your relationship?', 1),
(7, 3, 'Do you feel comfortable expressing your feelings to your partner?', 0),
(8, 3, 'How important is effective communication in a relationship?', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Section`
--

CREATE TABLE `Section` (
  `SectionID` int(11) NOT NULL,
  `SurveyID` int(11) DEFAULT NULL,
  `Title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Section`
--

INSERT INTO `Section` (`SectionID`, `SurveyID`, `Title`) VALUES
(1, 1, 'Love and Emotions'),
(2, 1, 'Relationship Challenges'),
(3, 1, 'Communication in Love');

-- --------------------------------------------------------

--
-- Table structure for table `Survey`
--

CREATE TABLE `Survey` (
  `SurveyID` int(11) NOT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `Description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Survey`
--

INSERT INTO `Survey` (`SurveyID`, `Title`, `Description`) VALUES
(1, 'Love and Relationships Survey', 'A survey about the complexities of love and relationships.');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`UserID`, `Username`, `Password`) VALUES
(1, 'Aurit', 'aurit');

-- --------------------------------------------------------

--
-- Table structure for table `UserResponse`
--

CREATE TABLE `UserResponse` (
  `UserResponseID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `QuestionID` int(11) DEFAULT NULL,
  `OptionID` int(11) DEFAULT NULL,
  `ResponseText` text DEFAULT NULL,
  `ResponseDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `UserResponse`
--

INSERT INTO `UserResponse` (`UserResponseID`, `UserID`, `QuestionID`, `OptionID`, `ResponseText`, `ResponseDate`) VALUES
(47, 1, 1, 3, 'hello', '2023-09-02 06:07:29'),
(48, 1, 1, NULL, 'i dont know', '2023-09-02 06:09:17'),
(49, 1, 2, NULL, 'i cant really explain now ', '2023-09-02 06:09:17'),
(50, 1, 3, 2, '2 - Slightly intense', '2023-09-02 06:09:17'),
(51, 1, 4, NULL, 'Better', '2023-09-02 06:09:17'),
(52, 1, 5, NULL, 'Fight', '2023-09-02 06:09:17'),
(53, 1, 6, 9, '4 - Very challenging', '2023-09-02 06:09:17'),
(54, 1, 7, NULL, 'yea, for sure ', '2023-09-02 06:09:17'),
(55, 1, 8, 14, '4 - Very important', '2023-09-02 06:09:17'),
(56, 1, 1, NULL, 'hello', '2023-09-02 06:35:15'),
(57, 1, 2, NULL, 'hello', '2023-09-02 06:35:15'),
(58, 1, 3, 3, '3 - Moderately intense', '2023-09-02 06:35:15'),
(59, 1, 4, NULL, 'hello', '2023-09-02 06:35:15'),
(60, 1, 5, NULL, 'hello', '2023-09-02 06:35:15'),
(61, 1, 6, 7, '2 - Slightly challenging', '2023-09-02 06:35:15'),
(62, 1, 7, NULL, 'hello', '2023-09-02 06:35:15'),
(63, 1, 8, 12, '2 - Slightly important', '2023-09-02 06:35:15'),
(64, 1, 1, NULL, 'hello ', '2023-09-02 07:11:21'),
(65, 1, 2, NULL, 'hello ', '2023-09-02 07:11:21'),
(66, 1, 3, 2, '2 - Slightly intense', '2023-09-02 07:11:21'),
(67, 1, 4, NULL, 'hello ', '2023-09-02 07:11:21'),
(68, 1, 5, NULL, 'hello ', '2023-09-02 07:11:21'),
(69, 1, 6, 7, '2 - Slightly challenging', '2023-09-02 07:11:21'),
(70, 1, 7, NULL, 'hello ', '2023-09-02 07:11:21'),
(71, 1, 8, 12, '2 - Slightly important', '2023-09-02 07:11:21'),
(72, 1, 1, NULL, 'hello', '2023-09-02 07:19:20'),
(73, 1, 2, NULL, 'hello', '2023-09-02 07:19:20'),
(74, 1, 3, 2, '2 - Slightly intense', '2023-09-02 07:19:20'),
(75, 1, 4, NULL, 'hello ', '2023-09-02 07:19:21'),
(76, 1, 5, NULL, 'hello ', '2023-09-02 07:19:21'),
(77, 1, 6, 7, '2 - Slightly challenging', '2023-09-02 07:19:21'),
(78, 1, 7, NULL, 'hello', '2023-09-02 07:19:21'),
(79, 1, 8, 12, '2 - Slightly important', '2023-09-02 07:19:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `AdminSurvey`
--
ALTER TABLE `AdminSurvey`
  ADD PRIMARY KEY (`AdminSurveyID`),
  ADD KEY `AdminID` (`AdminID`),
  ADD KEY `SurveyID` (`SurveyID`);

--
-- Indexes for table `Option`
--
ALTER TABLE `Option`
  ADD PRIMARY KEY (`OptionID`),
  ADD KEY `QuestionID` (`QuestionID`);

--
-- Indexes for table `Question`
--
ALTER TABLE `Question`
  ADD PRIMARY KEY (`QuestionID`),
  ADD KEY `SectionID` (`SectionID`);

--
-- Indexes for table `Section`
--
ALTER TABLE `Section`
  ADD PRIMARY KEY (`SectionID`),
  ADD KEY `SurveyID` (`SurveyID`);

--
-- Indexes for table `Survey`
--
ALTER TABLE `Survey`
  ADD PRIMARY KEY (`SurveyID`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `UserResponse`
--
ALTER TABLE `UserResponse`
  ADD PRIMARY KEY (`UserResponseID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `QuestionID` (`QuestionID`),
  ADD KEY `OptionID` (`OptionID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Admin`
--
ALTER TABLE `Admin`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `AdminSurvey`
--
ALTER TABLE `AdminSurvey`
  MODIFY `AdminSurveyID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Option`
--
ALTER TABLE `Option`
  MODIFY `OptionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `Question`
--
ALTER TABLE `Question`
  MODIFY `QuestionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `Section`
--
ALTER TABLE `Section`
  MODIFY `SectionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Survey`
--
ALTER TABLE `Survey`
  MODIFY `SurveyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `UserResponse`
--
ALTER TABLE `UserResponse`
  MODIFY `UserResponseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `AdminSurvey`
--
ALTER TABLE `AdminSurvey`
  ADD CONSTRAINT `AdminSurvey_ibfk_1` FOREIGN KEY (`AdminID`) REFERENCES `Admin` (`AdminID`),
  ADD CONSTRAINT `AdminSurvey_ibfk_2` FOREIGN KEY (`SurveyID`) REFERENCES `Survey` (`SurveyID`);

--
-- Constraints for table `Option`
--
ALTER TABLE `Option`
  ADD CONSTRAINT `Option_ibfk_1` FOREIGN KEY (`QuestionID`) REFERENCES `Question` (`QuestionID`);

--
-- Constraints for table `Question`
--
ALTER TABLE `Question`
  ADD CONSTRAINT `Question_ibfk_1` FOREIGN KEY (`SectionID`) REFERENCES `Section` (`SectionID`);

--
-- Constraints for table `Section`
--
ALTER TABLE `Section`
  ADD CONSTRAINT `Section_ibfk_1` FOREIGN KEY (`SurveyID`) REFERENCES `Survey` (`SurveyID`);

--
-- Constraints for table `UserResponse`
--
ALTER TABLE `UserResponse`
  ADD CONSTRAINT `UserResponse_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `User` (`UserID`),
  ADD CONSTRAINT `UserResponse_ibfk_2` FOREIGN KEY (`QuestionID`) REFERENCES `Question` (`QuestionID`),
  ADD CONSTRAINT `UserResponse_ibfk_3` FOREIGN KEY (`OptionID`) REFERENCES `Option` (`OptionID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
