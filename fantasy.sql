-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2015 at 08:06 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fantasy`
--

-- --------------------------------------------------------

--
-- Table structure for table `cds`
--

CREATE TABLE IF NOT EXISTS `cds` (
  `titel` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `interpret` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `jahr` int(11) DEFAULT NULL,
  `id` bigint(20) unsigned NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `cds`
--

INSERT INTO `cds` (`titel`, `interpret`, `jahr`, `id`) VALUES
('Beauty', 'Ryuichi Sakamoto', 1990, 1),
('Goodbye Country (Hello Nightclub)', 'Groove Armada', 2001, 4),
('Glee', 'Bran Van 3000', 1997, 5);

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE IF NOT EXISTS `matches` (
  `MatchId` int(10) NOT NULL,
  `Team1` varchar(10) NOT NULL,
  `Team2` varchar(10) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`MatchId`, `Team1`, `Team2`, `Date`) VALUES
(1, '0', '0', '2013-05-01 11:00:00'),
(2, '0', '0', '2013-05-01 11:00:00'),
(3, '0', '0', '2013-05-01 11:00:00'),
(4, '0', '0', '2013-05-01 11:00:00'),
(5, '0', '0', '2013-05-01 11:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` mediumint(9) NOT NULL,
  `user` mediumint(9) NOT NULL,
  `slug` varchar(300) NOT NULL,
  `label` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `header` varchar(300) NOT NULL,
  `body` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `user`, `slug`, `label`, `title`, `header`, `body`) VALUES
(1, 1, 'home', 'Home', 'Home Page', 'Welcome to Homepage', '<img style ="float:right; width:320px;height:240px;margin-left:10px;"src = "images/0038.jpg">\r\nThis is home page .'),
(2, 2, 'about-us', 'About', 'About Us', 'About Homepage', 'This will tell you about homepage ');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE IF NOT EXISTS `players` (
  `ID` int(100) NOT NULL,
  `Player_Name` varchar(100) NOT NULL,
  `Team` varchar(100) NOT NULL,
  `Role` varchar(100) NOT NULL,
  `PRICE` int(100) NOT NULL,
  `Category` varchar(10) NOT NULL DEFAULT 'I'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`ID`, `Player_Name`, `Team`, `Role`, `PRICE`, `Category`) VALUES
(1, 'Francois du Plesis', 'CSK', 'BATSMAN', 900000, 'F'),
(2, 'Micheal Hussey', 'CSK', 'BATSMAN', 850000, 'F'),
(3, 'Dwayne Smith', 'CSK', 'AllRounder', 900000, 'F'),
(4, 'Suresh Raina', 'CSK', 'AllRounder', 950000, 'I'),
(5, 'Brendom Mccullam', 'CSK', 'WKB', 1000000, 'F'),
(6, 'MS Dhoni', 'CSK', 'WKB', 650000, 'I'),
(7, 'Ravindra Jadeja', 'CSK', 'AllRounder', 750000, 'I'),
(8, 'Ravichandran Ashwin', 'CSK', 'Bowler', 850000, 'I'),
(9, 'Pawan Negi', 'CSK', 'Bowler', 750000, 'I'),
(10, 'Ashish Nehra', 'CSK', 'Bowler', 950000, 'I'),
(11, 'Mohit Sharma', 'CSK', 'Bowler', 850000, 'I'),
(12, 'Ishwar Pandey', 'CSK', 'Bowler', 750000, 'UI'),
(13, 'Irfan Pathan ', 'CSK', 'AllRounder', 800000, 'I'),
(14, 'Pawan Negi', 'CSK', 'AllRounder', 650000, 'UI'),
(16, 'Kyle Abbott ', 'CSK', 'Bowler', 800000, 'F'),
(17, 'Rahul Sharma', 'CSK', 'Bowler', 750000, 'I'),
(18, 'Ronit More ', 'CSK', 'Bowler', 600000, 'UI'),
(19, 'Samuel Badree', 'CSK', 'Bowler', 850000, 'F'),
(20, 'Baba Aparajith', 'CSK', 'AllRounder', 600000, 'UI'),
(21, 'Manoj Tiwari', 'DD', 'BATSMAN', 750000, 'I'),
(22, 'Saurabh Tiwary', 'DD', 'BATSMAN', 750000, 'I'),
(23, 'Shreyas Iyer', 'DD', 'BATSMAN', 650000, 'UI'),
(24, 'Mayank Agarwal', 'DD', 'BATSMAN', 750000, 'UI'),
(25, 'Travis Head', 'DD', 'BATSMAN', 750000, 'I'),
(26, 'JP Duminy', 'DD', 'ALLROUNDER', 1000000, 'F'),
(27, 'Yuvraj Singh', 'DD', 'ALLROUNDER', 1000000, 'I'),
(28, 'Angelo Mathews', 'DD', 'ALLROUNDER', 950000, 'F'),
(29, 'Albie Morkel', 'DD', 'ALLROUNDER', 1000000, 'F'),
(30, 'Kedar Jadhav', 'DD', 'WKB', 750000, 'I'),
(31, 'Quinton de Kock', 'DD', 'WKB', 750000, 'F'),
(32, 'Amit Mishra', 'DD', 'Bowler', 900000, 'I'),
(33, 'Imran Tahir', 'DD', 'Bowler', 900000, 'F'),
(34, 'Nathan Counter-Nile', 'DD', 'Bowler', 900000, 'F'),
(35, 'Jaydev Unadkat', 'DD', 'Bowler', 700000, 'I'),
(36, 'Zaheer Khan', 'DD', 'Bowler', 900000, 'I'),
(37, 'Mohammad Shami', 'DD', 'Bowler', 900000, 'I'),
(38, 'Shahbaz Nadeem', 'DD', 'Bowler', 700000, 'I'),
(39, 'Domnic Joseph', 'DD', 'Bowler', 600000, 'I'),
(40, 'Gautam Gambhir', 'KKR', 'BATSMAN', 950000, 'I'),
(41, 'Manish Pandey', 'KKR', 'BATSMAN', 750000, 'I'),
(42, 'SuryaKumar Yadav', 'KKR', 'BATSMAN', 750000, 'I'),
(43, 'Ryan ten Doeschate', 'KKR', 'ALLROUNDER', 850000, 'F'),
(44, 'Andre Russell', 'KKR', 'ALLROUNDER', 900000, 'F'),
(45, 'Azhar Mahmood ', 'KKR', 'ALLROUNDER', 900000, 'F'),
(46, 'Shakib Al Hasan', 'KKR', 'ALLROUNDER', 950000, 'F'),
(47, 'Yusuf Pathan', 'KKR', 'ALLROUNDER', 900000, 'I'),
(48, 'Piyush Chawla', 'KKR', 'ALLROUNDER', 850000, 'I'),
(49, 'Johan Botha', 'KKR', 'ALLROUNDER', 900000, 'F'),
(50, 'Brad Hogg', 'KKR', 'BOWLER', 750000, 'F'),
(51, 'Morne Morkel', 'KKR', 'BOWLER', 900000, 'F'),
(52, 'Pat Cummins', 'KKR', 'BOWLER', 850000, 'F'),
(53, 'Sunil Narine', 'KKR', 'BOWLER', 1050000, 'F'),
(54, 'Robin Uthappa', 'KKR', 'WKB', 950000, 'I');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE IF NOT EXISTS `score` (
  `PlayerId` int(100) NOT NULL,
  `RunScored` int(100) NOT NULL DEFAULT '0',
  `SixHit` int(100) NOT NULL DEFAULT '0',
  `FourHit` int(100) NOT NULL DEFAULT '0',
  `Duck` int(100) NOT NULL DEFAULT '0',
  `BallFaced` int(100) NOT NULL DEFAULT '0',
  `BallsBowled` int(100) NOT NULL DEFAULT '0',
  `Wkt` int(100) NOT NULL DEFAULT '0',
  `MaidenOver` int(100) NOT NULL DEFAULT '0',
  `RunsConceded` int(100) NOT NULL DEFAULT '0',
  `Catches` int(100) NOT NULL DEFAULT '0',
  `Stumps` int(100) NOT NULL DEFAULT '0',
  `RunOut` int(100) NOT NULL DEFAULT '0',
  `ManofMatch` int(100) NOT NULL DEFAULT '0',
  `PlayerScore` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`PlayerId`, `RunScored`, `SixHit`, `FourHit`, `Duck`, `BallFaced`, `BallsBowled`, `Wkt`, `MaidenOver`, `RunsConceded`, `Catches`, `Stumps`, `RunOut`, `ManofMatch`, `PlayerScore`) VALUES
(1, 50, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 100),
(2, 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 80),
(3, 40, 4, 1, 0, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` varchar(200) NOT NULL,
  `label` varchar(200) NOT NULL,
  `value` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `label`, `value`) VALUES
('debug-status', 'Debug Status', '1');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `fuck` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`fuck`) VALUES
('RR');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` mediumint(9) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(200) NOT NULL,
  `user_team` varchar(200) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `user_team`) VALUES
(1, '', 'simplydigvijay20@gmail.com', '591fb23d3f51377541d1038104bf25e09d39d5b2', '1;2;3;4;5;6;7;8;9;10;11'),
(2, '', 'raj@inamdar.com', '591fb23d3f51377541d1038104bf25e09d39d5b2', '1;2;3;4;5;6;7;8;9;10;11'),
(3, '', 'ajit@singh.com', '591fb23d3f51377541d1038104bf25e09d39d5b2', '1;2;3;4;5;6;7;8;9;10;12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cds`
--
ALTER TABLE `cds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`MatchId`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`), ADD KEY `user` (`user`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cds`
--
ALTER TABLE `cds`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `MatchId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` mediumint(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
