-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2015 at 02:33 PM
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
-- Table structure for table `matches`
--

CREATE TABLE IF NOT EXISTS `matches` (
  `MatchId` int(10) NOT NULL,
  `Team1` varchar(10) NOT NULL,
  `Team2` varchar(10) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`MatchId`, `Team1`, `Team2`, `Date`) VALUES
(10, 'RR', 'CSK', '2013-05-01 11:00:00'),
(11, 'RR', 'CSK', '2013-05-01 11:00:00'),
(12, 'RR', 'CSK', '2013-05-01 11:00:00'),
(13, 'RR', 'CSK', '2013-05-01 11:00:00'),
(14, 'RR', 'CSK', '2013-05-01 11:00:00'),
(15, 'RR', 'CSK', '2013-05-01 11:00:00'),
(16, 'RR', 'CSK', '2013-05-01 11:00:00'),
(17, 'RR', 'CSK', '2013-05-01 11:00:00'),
(18, 'RR', 'CSK', '2013-05-01 11:00:00'),
(19, 'RR', 'CSK', '2013-05-01 11:00:00'),
(20, 'RR', 'CSK', '2013-05-01 11:00:00'),
(21, 'RR', 'CSK', '2013-05-01 11:00:00'),
(22, 'RR', 'CSK', '2013-05-01 11:00:00'),
(23, 'RR', 'CSK', '2013-05-01 11:00:00'),
(24, 'RR', 'CSK', '2013-05-01 11:00:00');

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
(3, 40, 4, 1, 0, 20, 0, 0, 0, 0, 0, 0, 0, 0, 200);

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `user_team`) VALUES
(1, 'Digvijay ', 'simplydigvijay20@gmail.com', '591fb23d3f51377541d1038104bf25e09d39d5b2', '1;2;3;4;5;6;7;8;9;10;11'),
(2, 'Raj', 'raj@inamdar.com', '591fb23d3f51377541d1038104bf25e09d39d5b2', '1;2;13;14;15;16;17;18;19;20;21'),
(3, 'Ajit', 'ajit@singh.com', '591fb23d3f51377541d1038104bf25e09d39d5b2', '1;3;7;9;10;11;12;13;14;15;16'),
(4, 'udayan', 'udayan.das@gmail.com', '42db8fd572393bed6d65ca730dfd387b42d5cfca', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`MatchId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `MatchId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` mediumint(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
