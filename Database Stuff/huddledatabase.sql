-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2023 at 05:16 PM
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
  `PostID` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
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
(702, 'Vegas Golden Knights'),
(681, 'Dallas Stars'),
(685, 'Los Angeles Kings'),
(679, 'Colorado Avalanche'),
(687, 'Minnesota Wild'),
(683, 'Edmonton Oilers'),
(704, 'Winnipeg Jets'),
(1436, 'Seattle Kraken'),
(675, 'Calgary Flames'),
(689, 'Nashville Predators'),
(698, 'St. Louis Blues'),
(701, 'Vancouver Canucks'),
(1460, 'Arizona Coyotes'),
(697, 'San Jose Sharks'),
(678, 'Chicago Blackhawks'),
(670, 'Anaheim Ducks'),
(673, 'Boston Bruins'),
(676, 'Carolina Hurricanes'),
(690, 'New Jersey Devils'),
(700, 'Toronto Maple Leafs'),
(699, 'Tampa Bay Lightning'),
(692, 'New York Rangers'),
(691, 'New York Islanders'),
(696, 'Pittsburgh Penguins'),
(674, 'Buffalo Sabres'),
(682, 'Detroit Red Wings'),
(684, 'Florida Panthers'),
(703, 'Washington Capitals'),
(693, 'Ottawa Senators'),
(695, 'Philadelphia Flyers'),
(688, 'Montreal Canadiens'),
(680, 'Columbus Blue Jackets');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` varchar(11) NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `Password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `Name`, `Password`) VALUES
('johnydo', 'Johny Do', 'f'),
('tommydinh', 'tommydinh', 'f');

-- --------------------------------------------------------

--
-- Table structure for table `usersubscribtion`
--

CREATE TABLE `usersubscribtion` (
  `User_UserID` varchar(11) NOT NULL,
  `Team_TeamID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `usersubscribtion`
--

INSERT INTO `usersubscribtion` (`User_UserID`, `Team_TeamID`) VALUES
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
-- ALTER TABLE `post`
--   ADD PRIMARY KEY (`PostID`,`User_UserID`,`Team_TeamID`),
--   ADD UNIQUE KEY `PostID_UNIQUE` (`PostID`),
--   ADD KEY `fk_Post_User1_idx` (`User_UserID`),
--   ADD KEY `fk_Post_Team1_idx` (`Team_TeamID`),
--   ADD KEY `fk_Post_Post1` (`Post_PostID`);

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
-- Indexes for table `usersubscribtion`
--
ALTER TABLE `usersubscribtion`
  ADD PRIMARY KEY (`User_UserID`,`Team_TeamID`),
  ADD KEY `fk_User_has_Team_Team1_idx` (`Team_TeamID`),
  ADD KEY `fk_User_has_Team_User1_idx` (`User_UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
