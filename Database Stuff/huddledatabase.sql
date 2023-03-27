-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2023 at 04:24 AM
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
-- Database: `huddledatabase`
--

DROP DATABASE IF EXISTS huddledatabase;
CREATE DATABASE huddledatabase;
USE huddledatabase;
-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `PostID` int(11) NOT NULL,
  `Content` varchar(2000) DEFAULT NULL,
  `NumberOfLikes` int(11) DEFAULT 0,
  `User_UserID` varchar(11) NOT NULL,
  `Team_TeamID` int(11) NOT NULL,
  `Team_Name` varchar(30) NOT NULL,
  `Post_PostID` int(11) DEFAULT NULL,
  `DatePosted` datetime DEFAULT NULL,
  `Title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`PostID`, `Content`, `NumberOfLikes`, `User_UserID`, `Team_TeamID`, `Team_Name`, `Post_PostID`, `DatePosted`, `Title`) VALUES
(1, "This team is useless. They can't get out of their own zone, and even when they do, they get one low quality shot and then it's right back to defending...", 75, 'tommydinh', 670, 'Anaheim Ducks', NULL, NULL, 'This team sucks'),
(2, "Pekka Rinne was always my favorite player and I'm beyond happy they did him the honour of retiring his jersey.", 20, 'johnydo', 689, 'Nashville Predators', NULL, NULL, 'Goated Goalie'),
(3, 'A post can only be 2000 characters. I wonder if would even be able to say that much about the Sens', 106, 'tommydinh', 693, 'Ottawa Senators', NULL, NULL, '2000 Characters is too long'),
(4, 'How do you take one of the most iconic jerseys/logos of all time, and come up with that orange/gold/black monstrosity?', 13, 'tommydinh', 675, 'Calgary Flames', NULL, NULL, 'Blasty travesty'),
(5, "Iginla was the a top 5 captain in all of NHL history. That's all", 99, 'johnydo', 675, 'Calgary Flames', NULL, NULL, 'Iggy is him');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `TeamID` int(11) NOT NULL,
  `Name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`TeamID`, `Name`) VALUES
(0, 'Calgary Flames'),
(1, 'Carolina Hurricanes'),
(2, 'Columbus Blue Jackets'),
(3, 'New Jersey Devils'),
(4, 'New York Islanders'),
(5, 'New York Rangers'),
(6, 'Philadelphia Flyers'),
(7, 'Washington Capitals'),
(8, 'Boston Bruins'),
(9, 'Buffalo Sabres'),
(10, 'Detroit Red Wings'),
(11, 'Florida Panthers'),
(12, 'Montréal Canadiens'),
(13, 'Ottawa SEnators'),
(14, 'Tampa Bay Lightning'),
(15, 'Toronto Maple Leafs'),
(16, 'Arizona Coyotes'),
(17, 'Chicago Blackhawks'),
(18, 'Colorado Avalanche'),
(19, 'Dallas Stars'),
(20, 'Minnesota Wild'),
(21, 'Nashville Predators'),
(22, 'St. Louis Blues'),
(23, 'Winnipeg Jets'),
(24, 'Anaheim Ducks'),
(25, 'Edmonton Oilers'),
(26, 'Los Angeles Kings'),
(27, 'San Jose Sharks'),
(28, 'Seattle Kraken'),
(29, 'Vancouver Canucks'),
(30, 'Vegas Golden Knights');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` varchar(11) NOT NULL,
  `Password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `Password`) VALUES
('johnydo', 'f'),
('tommydinh', 'f');

-- --------------------------------------------------------

--
-- Table structure for table `usersubscription`
--

CREATE TABLE `usersubscription` (
  `User_UserID` varchar(11) NOT NULL,
  `Team_TeamID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `usersubscription`
--

INSERT INTO `usersubscription` (`User_UserID`, `Team_TeamID`) VALUES
('johnydo', 12),
('johnydo', 15),
('johnydo', 16),
('johnydo', 22),
('johnydo', 25),
('johnydo', 28),
('tommydinh', 8),
('tommydinh', 19),
('tommydinh', 23),
('tommydinh', 26);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`PostID`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`TeamID`),
  ADD UNIQUE KEY `TeamID_UNIQUE` (`TeamID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `UserID_UNIQUE` (`UserID`);

--
-- Indexes for table `usersubscription`
--
ALTER TABLE `usersubscription`
  ADD PRIMARY KEY (`User_UserID`,`Team_TeamID`),
  ADD KEY `fk_User_has_Team_Team1_idx` (`Team_TeamID`),
  ADD KEY `fk_User_has_Team_User1_idx` (`User_UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `PostID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
