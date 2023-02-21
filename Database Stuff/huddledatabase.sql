-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2023 at 07:29 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

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

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `PostID` int(11) NOT NULL,
  `Content` varchar(2000) DEFAULT NULL,
  `NumberOfLikes` int(11) DEFAULT NULL,
  `User_UserID` int(11) NOT NULL,
  `Team_TeamID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`PostID`, `Content`, `NumberOfLikes`, `User_UserID`, `Team_TeamID`) VALUES
(1, 'This team sucks', -1, 0, 25),
(2, 'Nashville is cool', 20, 1, 21),
(3, 'a post can only be 2000 characters i wonder if this is big enough or not', 22222222, 0, 26),
(4, 'How do you take one of the most iconic jerseys/logos of all time, and come up with that orange/gold/black monstrosity?', 13, 0, 24),
(5, 'Iginla was the a top 5 captain in all of NHL history', 99, 1, 0);

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
  `UserID` int(11) NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `Password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `Name`, `Password`) VALUES
(0, 'tommydinh', 'f'),
(1, 'Johny Do', 'f');

-- --------------------------------------------------------

--
-- Table structure for table `usersubscribtion`
--

CREATE TABLE `usersubscribtion` (
  `User_UserID` int(11) NOT NULL,
  `Team_TeamID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `usersubscribtion`
--

INSERT INTO `usersubscribtion` (`User_UserID`, `Team_TeamID`) VALUES
(0, 8),
(0, 19),
(0, 23),
(0, 26),
(1, 12),
(1, 15),
(1, 16),
(1, 22),
(1, 25),
(1, 28);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`PostID`,`User_UserID`,`Team_TeamID`),
  ADD UNIQUE KEY `PostID_UNIQUE` (`PostID`),
  ADD KEY `fk_Post_User1_idx` (`User_UserID`),
  ADD KEY `fk_Post_Team1_idx` (`Team_TeamID`);

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

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `PostID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `fk_Post_Team1` FOREIGN KEY (`Team_TeamID`) REFERENCES `team` (`TeamID`),
  ADD CONSTRAINT `fk_Post_User1` FOREIGN KEY (`User_UserID`) REFERENCES `user` (`UserID`);

--
-- Constraints for table `usersubscribtion`
--
ALTER TABLE `usersubscribtion`
  ADD CONSTRAINT `fk_User_has_Team_Team1` FOREIGN KEY (`Team_TeamID`) REFERENCES `team` (`TeamID`),
  ADD CONSTRAINT `fk_User_has_Team_User1` FOREIGN KEY (`User_UserID`) REFERENCES `user` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
