-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2023 at 06:49 PM
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
(1, 'This team is useless. They can\'t get out of their own zone, and even when they do, they get one low quality shot and then it\'s right back to defending...', 75, 'tommydinh', 670, 'Anaheim Ducks', NULL, NULL, 'This team sucks'),
(2, 'Pekka Rinne was always my favorite player and I\'m beyond happy they did him the honour of retiring his jersey.', 20, 'johnydo', 689, 'Nashville Predators', NULL, NULL, 'Goated Goalie'),
(3, 'A post can only be 2000 characters. I wonder if would even be able to say that much about the Sens', 106, 'tommydinh', 693, 'Ottawa Senators', NULL, NULL, '2000 Characters is too long'),
(4, 'How do you take one of the most iconic jerseys/logos of all time, and come up with that orange/gold/black monstrosity?', 13, 'tommydinh', 675, 'Calgary Flames', NULL, NULL, 'Blasty travesty'),
(5, 'Iginla was the a top 5 captain in all of NHL history. That\'s all', 99, 'johnydo', 675, 'Calgary Flames', NULL, NULL, 'Iggy is him'),
(7, 'Last night\'s game really dawned on me, but regardless of the tank being \'unsuccessful\', the Coyote\'s future is bright. With the roster we have, we should be horrible and unwatchable. However, the players seem to love it in the locker room, we have had half-decent success, and I think GMBA and Bear are great leaders off the ice. If you add up all the evidence, being a Coyotes fan this year should have been absolutely depressing, but it actually hasn\'t been. Most of the success I think can be tracked to the head coach. Taking the incredibly talented Oilers to OT is just another example in a whole season of examples.', 0, 'breadman10', 1460, 'Arizona Coyotes', NULL, '2023-03-28 16:41:09', 'Andre Tourigny and the Future of the Coyotes'),
(8, 'When Ducks went empty net I was shocked Winnipeg didn’t just dunk it in. Dude hit the post lol! That has to be on the bad beats for sports center tonight. Guy was like 3 feet away', 0, 'breadman10', 670, 'Anaheim Ducks', NULL, '2023-03-28 16:46:12', 'Can\'t believe he missed it'),
(9, 'I have seen a few predictions of BOS v VGK Finals this year and it had me thinking. Given the success of the Bruins this year, if they were to lose to Vegas in the Finals (or if Vegas won the cup in general), i wonder if, as a fan, I would still consider the Cassidy firing/ Montgomery hiring a success?\r\n\r\nI personally didn\'t like the Cassidy firing but after seeing the way that Jim vibes with the players I think it would still be a win, just a disappointing one.', 0, 'breadman10', 673, 'Boston Bruins', NULL, '2023-03-28 16:48:26', 'BOS vs VGK'),
(10, 'Ever since the team began playing defense around him, (with the exception of the one game where we quit on him) he has been phenomenal compared to both UPL and Anderson. He’s 5-2 in his last 7 starts, and without the 10 goal game would be averaging a .912 with 2.66 GAA. If it’s between him and UPL to start for next season, I’m taking him.', 0, 'breadman10', 674, 'Buffalo Sabres', NULL, '2023-03-28 16:50:03', 'Comrie was never the problem.'),
(11, 'I believe this season\'s lineup may be the Canes\' most toothless yet, certainly since I\'ve been following the team. There\'s some real quality gum action on the ice this year and I think our analytics guys should really take notice; the correlation with this team\'s success is undeniable. Don has clearly been calling dental surgeons and asking for references.', 0, 'breadman10', 676, 'Carolina Hurricanes', NULL, '2023-03-28 16:52:13', 'Historical minimum of teeth on the roster'),
(12, 'That game tonight was great. In other league news the Canadiens and Blue Jackets are playing each other right now. Either the Canadiens win and basically guarantee the hawks a top 6 pick or the Blue Jackets win and pass the hawks in the standings.', 0, 'breadman10', 678, 'Chicago Blackhawks', NULL, '2023-03-28 16:56:31', 'Important game for Hawks tank tonight'),
(13, 'A new week of Avs hockey starts today! We take on the ducks in the SEGABABA tonight for the chance to take first place in the central…if the mild lose. The ducks would rather lose this one, so let’s help them! 8 pm MT/10 EDT', 0, 'breadman10', 679, 'Colorado Avalanche', NULL, '2023-03-28 16:59:40', 'WAKE UP!! AVS HOCKEY DAY!!!!!'),
(14, 'As the staggering number of CBJ injuries continue, it really makes you wonder: Is anyone in charge of strength, conditioning, training, exercise, stretching, weight-lifting, and nutrition on this team???', 0, 'breadman10', 680, 'Columbus Blue Jackets', NULL, '2023-03-28 17:01:01', 'The most fragile team on ice'),
(17, 'Marchement returns next week, we\'ll have 13 healthy forwards. With Seguin and Glendening back in the lineup, these next 4-5 games are a great opportunity for the 3rd and 4th lines to develop a rhythm again.\r\n\r\nForward lines now look like:\r\n\r\nRobo-Roope-Pavelski\r\n\r\nJamie-Wyatt-Daddy\r\n\r\nDelly-Domi-Seggy\r\n\r\nJFK-Faksa-Glendening\r\n\r\nIn the last few games of the season, I think I’d scratch Kivi, move Delly to the 4th line and put Marchment on the 3rd line. This is a good problem to have, but man I’d hate to scratch Kivi.', 0, 'anap', 681, 'Dallas Stars', NULL, '2023-03-28 18:14:14', 'Who do you scratch?'),
(18, 'Is looking pretty darn good against Michigan in the NCAA Tournament rn! Big 6 foot 5 and athletic, great positioning and movement.', 0, 'anap', 682, 'Detroit Red Wings', NULL, '2023-03-28 18:17:22', 'Red Wings draft pick Carter Gylander'),
(19, 'I just wanna take a moment out of my day to thank this awesome team for organizing a fantastic event. Hockey games have been something I try to do at least once a month because it\'s something I truly love doing, and myself being a gay dude I couldn\'t resist going to the Pride Night game. I was a tad worried there\'d be some onsite drama, but no, the atmosphere of love and inclusion was alive and well throughout the halls of Rogers Place last night. The Pride Tape tables (bought a roll, because of course I did) and other LGBT setups (shout out to the person with the super gay Yamo jersey- I am jealous!!!) was fantastic to see, Definitely felt the atmosphere of love and inclusion. And on top of that, great game. Even if we lost, we played like absolute studs and in general, it was just an intense and stressful game that kept me and everyone in my section on our toes. Even if we lose... well, there\'s nothing more fun than going to a hockey game.\r\n\r\nOh, and class act including the LGBT alliance next to Robert Clark last night during the anthem.', 0, 'anap', 683, 'Edmonton Oilers', NULL, '2023-03-28 18:35:19', 'Big thanks for a wonderful Pride Night game'),
(20, 'Regardless of what ends up happening playoff-wise, i seriously wonder how much worse we would\'ve been with out this man. Who knows what could\'ve possibly happened with that pick we traded to the Habs. He is single-handedly carrying this team into the playoffs, and at the same time, he is one of my favorite players to watch. Thank you for this gift', 0, 'anap', 684, 'Florida Panthers', NULL, '2023-03-28 18:38:44', 'We don\'t deserve Matty Tkachuk'),
(21, 'LAK found its highest success in the playoffs when people didn’t really expect them to. I guess they didn’t surprise anyone in 2014, but 2012 was self explanatory and every other year in their 2010s window when they were touted as contenders they’d either get bounced in round 1 or miss completely. Moreover, I’ve noticed it’s very hard to win it all as the overall favorite. Some teams that come to mind include TBL the year they got swept in round 1 by CBJ and the caps the few years Hotlby was basically Brodeur. Ofc they both ended up winning in future years but the point stands, its really hard to win in the playoffs when everyone is expecting you to just demolish teams like you did in the regular season. Boston is finding a lot of success right now but its so much easier to keep the wagon going when a loss doesnt mean much. If they go down 0-1 in the opening round, its going to be hard to respond to adversity when they havent experienced it in the regular season with this exact group of guys. NHL Network currently has well known analysts ranking LAK as high as 2nd right under Boston and as low as barely out of the top 5. ', 0, 'anap', 685, 'Los Angeles Kings', NULL, '2023-03-28 18:40:26', 'Worried about not being playoff underdogs'),
(22, '… 3rd row behind the Kraken bench. We were talking loud and clean at their bench the WHOLE night. Coaches, players, goalies. No one who came in on a plane was safe.\r\n\r\nThe multiple dirty looks from players and staff were expected, but there was one moment that wasn’t. Mind you, we didn’t curse or bully anyone. Kept it about socks and things… very impersonal.\r\n\r\nCut to end of game. Wild win 5-1 and Seattle is coming through their tunnel that I’m hovering above. Waiving them in and saying my goodbyes, I make eye contact with the other equipment manager. This guy is holding about 5 clipboards and makes the mistake of locking eyes with me.\r\n\r\nI reach into the insult bin and pull out a \'MORE CLIPBOARDS! THAT’LL SOLVE OUR PROBLEMS!\'\r\n\r\nMy guy doesn’t miss a beat and is visibly angry. Looks up, when there are kids around, and yells \'Ohhh enough of that, shut the **** up, shut the **** up.\'\r\n\r\nAnd I loved it.', 0, 'anap', 687, 'Minnesota Wild', NULL, '2023-03-28 18:43:11', 'So I went to the game last night…'),
(23, 'This man just broke Brian Leetch\'s record for most points by a freshman D in a season in NCAA history. BRIAN LEETCH. I mean is it too early to say future HOF candidate???', 0, 'anap', 688, 'Montreal Canadiens', NULL, '2023-03-28 18:53:41', 'Lane Hutson will be the greatest steal of all time'),
(24, 'I think Saros on a team in a larger hockey market would be touted as McJesus in the pipes. It does make me wonder- is Saros better than Rinne? Rinne was a damn magician and I remember worrying when Saros would get the odd game to play, but I didn’t watch as religiously back then as I do now. Would love some opinions here from folks who did. I feel like we had some better blue liners than current, these young guys are fun, but damn do those zone turnovers ruin the mood.\r\n\r\nIt’s such a luxury to only have to worry about leaky goaltending the first 10 games of the season with him. Can’t believe we have a line of Rinne-Saros-Askarov (as well as a usually steady Lankinen who may not get many starts as long as we have a playoff hope).', 0, 'anap', 689, 'Nashville Predators', NULL, '2023-03-28 18:59:20', 'My thoughts on Saros vs. Rinne'),
(25, 'Recently I have noticed that the devils haven’t been playing their best. We also haven’t been winning winnable games (except for Ottawa.) Maybe I’m overreacting, but I’m concerned, especially going into the playoffs where there will be more experienced and physical teams.', 0, 'rdalton', 690, 'New Jersey Devils', NULL, '2023-03-28 19:03:41', 'I\'m concerned'),
(26, 'Outside of time period adjusting to a new system following trade w/ NJD, Palmieri has been money when fully healthy. Should be given a shot on Line 1 once Barzal returns from injury.', 0, 'rdalton', 691, 'New York Islanders', NULL, '2023-03-28 19:05:14', 'Palmieri'),
(27, 'I really like Niko. I think he has good chemistry with Fox. Helps a lot when missing Lindgren. Big body, solid defensively, occasional rush and good skating. I would try and re-sign him for a couple of years if we can make the cap work.', 0, 'rdalton', 692, 'New York Rangers', NULL, '2023-03-28 19:07:18', 'Mikkolaaa'),
(28, 'Most annoying Sportsnet commercials (Power Ranking)\r\n\r\nIf Gary Galley alone doesn’t make you want to want to break your TV during the broadcast, these commercials will be sure to set you over the edge. 1. the Wah commercial ft Hyman. 2. Steve Dangle HNIC. 3. Katy Perry Skip the dishes one', 0, 'ducksfan101', 693, 'Ottawa Senators', NULL, '2023-03-28 19:13:03', 'Most annoying Sportsnet commercials'),
(29, 'Pointless fact time!\r\n\r\nAs of the 2021-2022 trade deadline, the average number of Non-NA players on an NHL roster was 7.8, or roughly 30% of their roster.\r\n\r\nPhiladelphia had 3, for 12% of their roster. The only team with fewer was Montreal.\r\n\r\nWhat does that mean? Probably nothing, but I find it oddly coincidental considering noted xenophobe and former-GM Bobby Clarke sits on the advisory council of non-accountability.', 0, 'ducksfan101', 695, 'Philadelphia Flyers', NULL, '2023-03-28 19:15:59', 'Non-North American Players'),
(30, 'Here me out we all know how good jarry is when he’s fully healthy. There’s been many reports with him having a chronic hip issue. In theory he gets surgery or whatever during the offseason and he signs a one year almost prove it contract and see how he is once he’s fully healthy if he isn’t healthy again and struggles trade him. One year deal 4-5 ish million. I know a lot of fans think we should move on with jarry I agree in a way but he can be so good. What do you think about this theory?', 0, 'ducksfan101', 696, 'Pittsburgh Penguins', NULL, '2023-03-28 19:19:29', 'Here’s a theory for the penguins and jarry'),
(31, 'My friend Erika is relaunching Fear the Fin on 4/1. Just spreading the word to all the fans that the site will be back. There is a gofundme page to help with some startup expenses. No obligation to donate of course. I wasn’t sure if I’m allowed to link that type of page.\r\n\r\nHer family and her are huge sharks fans so the site is going to be in good hands\r\n\r\nGo sharks!', 0, 'ducksfan101', 697, 'San Jose Sharks', NULL, '2023-03-28 19:20:24', 'Fear the Fin is coming back'),
(32, 'I just wanted to say a thank you to every fellow Kraken fan I met yesterday. I’ve been to a lot of sporting events in my life, but never have I encountered such friendly, and incredible fans. The attitude of fans says a lot about the team they represent and I have to say y’all didn’t disappoint! This was my first NHL game and certainly won’t be my last!', 0, 'ducksfan101', 1436, 'Seattle Kraken', NULL, '2023-03-28 19:21:14', 'The best fans!'),
(33, 'Somehow I have the feeling that a playoff team this year (Oilers, maybe???) will fail spectacularly due to goaltending. My premonition is that they will overpay the Blues for Binnington in the off season. They will also send a young goalie to us who will split time with Hofer next season.\r\n\r\nThen again, I might be completely wrong.', 0, 'ducksfan101', 698, 'St. Louis Blues', NULL, '2023-03-28 19:24:39', 'Weird Premonition'),
(34, '2 year entry level deal starting next season.\r\n\r\nGlad we didn’t let him walk like Guttman and Walker. Welcome Max!', 0, 'ilemieux', 699, 'Tampa Bay Lightning', NULL, '2023-03-28 19:32:56', 'We Have Signed Max Crozier'),
(35, 'Matthews at his best is just unbelievable, man. He changes the complexion of this team completely. I just hope he stays healthy for the playoffs because the games are not as fun to watch when he’s not dominating both sides of the ice.', 0, 'ilemieux', 700, 'Toronto Maple Leafs', NULL, '2023-03-28 19:35:05', 'Matthews has been great as of late'),
(36, 'One thing I\'ve absolutely loved about this management group is their ability to sign college and European free agents. The benefit of this, is that these players are either NHL ready, or 1 year from it if they\'re highly touted. This is perfect for a canucks team that\'s trying to turn their team around quickly. Perfect examples are Aman and Kuzmenko.\r\n\r\nI know many people want the Canucks to do worse this season for a better draft pick, but one thing that softens the blow is the young talent Canucks are adding to the roster outside of the draft. These pickups have higher chances in playing NHL games then late round picks which is essential in adding talent to the roster.\r\n\r\nThis year there are a lot of excellent college free agents, so I hope the Canucks continue to take advantage of signing some to the roster. It definitely makes sense as the Canucks are trying to be competitive asap and these players can help them right away.', 0, 'ilemieux', 701, 'Vancouver Canucks', NULL, '2023-03-28 19:38:18', 'Managements Signing of College/European FAs'),
(37, 'Jack Eichel played a fantastic game tonight, and I honestly can\'t remember the last time he had a celly or even a smile for a goal. He scored a hat trick tonight, and we only got a smirk on the third goal. The polar opposite of Mark Stone. Just something i noticed...', 0, 'ilemieux', 702, 'Vegas Golden Knights', NULL, '2023-03-28 19:41:22', 'Emotionless Jack'),
(38, 'The Capitals missing the playoffs this season is a major blessing in disguise because every team that makes the playoffs gets taken out of the draft lottery and therefore do not have a chance to get the #1 pick and draft Connor Bedard. So unless someone spoils it we still have hope knock on wood! Some chance is better than no chance! We should trade Kuznetsov for the first overall draft pick, lets get Bedarded!', 0, 'ilemieux', 703, 'Washington Capitals', NULL, '2023-03-28 19:42:22', 'Blessing in disguise'),
(39, 'I know it’s been years since we’ve been graced with the presence of Anthony Peluso but I’d just like to take the time to remind everyone how sick this guy was. This guys fights were beyond nutty. His punches were so much more accurate and powerful than the typical bar brawl style you see on the ice.\r\n\r\nI never saw him lose a fight the entire time he played for the Jets and even gave some the heavyweight’s like Ryan Reaves a good challenge. Probably the last true enforcer this team has had.\r\n\r\nWherever he is now, I hope he’s doing well. Shoutout to Chris Thorburn too.', 0, 'ilemieux', 704, 'Winnipeg Jets', NULL, '2023-03-28 19:44:06', 'Anthony Peluso. The GOAT?');


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
(670, 'Anaheim Ducks'),
(673, 'Boston Bruins'),
(674, 'Buffalo Sabres'),
(675, 'Calgary Flames'),
(676, 'Carolina Hurricanes'),
(678, 'Chicago Blackhawks'),
(679, 'Colorado Avalanche'),
(680, 'Columbus Blue Jackets'),
(681, 'Dallas Stars'),
(682, 'Detroit Red Wings'),
(683, 'Edmonton Oilers'),
(684, 'Florida Panthers'),
(685, 'Los Angeles Kings'),
(687, 'Minnesota Wild'),
(688, 'Montreal Canadiens'),
(689, 'Nashville Predators'),
(690, 'New Jersey Devils'),
(691, 'New York Islanders'),
(692, 'New York Rangers'),
(693, 'Ottawa Senators'),
(695, 'Philadelphia Flyers'),
(696, 'Pittsburgh Penguins'),
(697, 'San Jose Sharks'),
(698, 'St. Louis Blues'),
(699, 'Tampa Bay Lightning'),
(700, 'Toronto Maple Leafs'),
(701, 'Vancouver Canucks'),
(702, 'Vegas Golden Knights'),
(703, 'Washington Capitals'),
(704, 'Winnipeg Jets'),
(1436, 'Seattle Kraken'),
(1460, 'Arizona Coyotes');
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
('anap', NULL, 'hockey'),
('breadman10', NULL, 'rangers'),
('ducksfan101', NULL, '1234'),
('ilemieux', NULL, 'password'),
('johnydo', 'Johny Do', 'f'),
('rdalton', NULL, 'seng401'),
('sainagr', NULL, 'calgaryflames'),
('tommydinh', 'tommydinh', 'f');

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
('anap', 670),
('anap', 685),
('anap', 697),
('anap', 702),
('anap', 1436),
('anap', 1460),
('breadman10', 681),
('breadman10', 689),
('breadman10', 692),
('breadman10', 704),
('ducksfan101', 670),
('ducksfan101', 674),
('ducksfan101', 695),
('ducksfan101', 698),
('ducksfan101', 703),
('ilemieux', 675),
('ilemieux', 688),
('ilemieux', 690),
('ilemieux', 693),
('ilemieux', 696),
('ilemieux', 1436),
('johnydo', 670),
('johnydo', 673),
('johnydo', 674),
('johnydo', 675),
('johnydo', 681),
('johnydo', 694),
('rdalton', 675),
('rdalton', 683),
('rdalton', 688),
('rdalton', 693),
('rdalton', 700),
('rdalton', 701),
('rdalton', 704),
('tommydinh', 675),
('tommydinh', 682),
('tommydinh', 698),
('tommydinh', 700);

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
  MODIFY `PostID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
