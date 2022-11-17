SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cricket_wc`
--

-- --------------------------------------------------------

--
-- Table structure for table `batavg`
--

CREATE TABLE `batavg` (
  `pos` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `cont` varchar(255) DEFAULT NULL,
  `conco` varchar(255) DEFAULT NULL,
  `avge` float DEFAULT NULL,
  `inni` int(11) DEFAULT NULL,
  `runs` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `batavg`
--

INSERT INTO `batavg` (`pos`, `name`, `cont`, `conco`, `avge`, `inni`, `runs`) VALUES
(1, 'Virat Kohli', 'INDIA', 'IND', 123, 6, 246),
(2, 'Brandon King', 'WEST INDIES', 'WI', 79, 2, 79),
(3, 'David Miller', 'SOUTH AFRICA', 'SA', 78, 3, 78),
(4, 'Suryakumar Yadav', 'INDIA', 'IND', 75, 5, 225),
(5, 'George Munsey', 'SCOTLAND', 'SCO', 60.5, 3, 121),
(6, 'Daryl Mitchell', 'NEW ZEALAND', 'NZ', 54.5, 4, 109),
(7, 'Aaron Finch', 'AUSTRALIA', 'AUS', 53.5, 3, 107),
(8, 'Shan Masood', 'PAKISTAN', 'PAK', 45.66, 6, 137),
(9, 'Marcus Stoinis', 'AUSTRALIA', 'AUS', 42, 4, 126),
(10, 'Lorcan Tucker', 'IRELAND', 'IRE', 40.8, 7, 204);

-- --------------------------------------------------------

--
-- Table structure for table `batsman`
--

CREATE TABLE `batsman` (
  `bat_no` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `runs` int(11) NOT NULL,
  `high_score` int(11) NOT NULL,
  `batt_avg` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `batsman`
--

INSERT INTO `batsman` (`bat_no`, `name`, `country`, `runs`, `high_score`, `batt_avg`) VALUES
(1, 'virat', 'india', 400, 105, 224.44),
(2, 'ms dhoni', 'india', 600, 100, 200),
(3, 'rohit sharma', 'india', 400, 250, 222);

-- --------------------------------------------------------

--
-- Table structure for table `bbe`
--

CREATE TABLE `bbe` (
  `pos` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `cona` varchar(255) DEFAULT NULL,
  `coco` varchar(255) DEFAULT NULL,
  `eco` float DEFAULT NULL,
  `inni` int(11) DEFAULT NULL,
  `wick` int(11) DEFAULT NULL,
  `runs` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bbe`
--

INSERT INTO `bbe` (`pos`, `name`, `cona`, `coco`, `eco`, `inni`, `wick`, `runs`) VALUES
(1, 'Nasum Ahmed', 'BANGLADESH', 'BAN', 3.5, 0, 1, 14),
(2, 'Moeen Ali', 'ENGLAND', 'ENG', 4.5, 0, 0, 9),
(3, 'Jason Holder', 'WEST INDIES', 'WI', 4.74, 0, 5, 49),
(4, 'Aayan Khan', 'UNITED ARAB EMIRATES', 'UAE', 4.75, 0, 2, 38),
(5, 'Zahoor Khan', 'UNITED ARAB EMIRATES', 'UAE', 4.75, 0, 5, 57),
(6, 'Iftikhar Ahmed', 'PAKISTAN', 'PAK', 5, 0, 1, 15),
(7, 'Bernard Scholtz', 'NAMIBIA', 'NAM', 5.08, 0, 4, 61),
(8, 'Naveen-ul-Haq Murid', 'AFGHANISTAN', 'AFG', 5.25, 0, 3, 21),
(9, 'Gerhard Erasmus', 'NAMIBIA', 'NAM', 5.25, 0, 0, 21),
(10, 'Colin Ackermann', 'NETHERLANDS', 'NED', 5.28, 0, 1, 37);

-- --------------------------------------------------------

--
-- Table structure for table `bbf`
--

CREATE TABLE `bbf` (
  `pos` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `cona` varchar(255) DEFAULT NULL,
  `coco` varchar(255) DEFAULT NULL,
  `avge` varchar(255) DEFAULT NULL,
  `inni` varchar(255) DEFAULT NULL,
  `wickets` int(11) DEFAULT NULL,
  `runs` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bbf`
--

INSERT INTO `bbf` (`pos`, `name`, `cona`, `coco`, `avge`, `inni`, `wickets`, `runs`) VALUES
(1, 'Sam Curran', 'ENGLAND', 'ENG', '5/10', '-', 5, 10),
(2, 'Anrich Nortje', 'SOUTH AFRICA', 'SA', '4/10', '-', 4, 10),
(3, 'Trent Boult', 'NEW ZEALAND', 'NZ', '4/13', '-', 4, 13),
(4, 'Alzarri Joseph', 'WEST INDIES', 'WI', '4/16', '-', 4, 16),
(5, 'Shaheen Shah Afridi', 'PAKISTAN', 'PAK', '4/22', '-', 4, 22),
(6, 'Mohammad Wasim', 'PAKISTAN', 'PAK', '4/24', '-', 4, 24),
(7, 'Taskin Ahmed', 'BANGLADESH', 'BAN', '4/25', '-', 4, 25),
(8, 'Lungi Ngidi', 'SOUTH AFRICA', 'SA', '4/29', '-', 4, 29),
(9, 'Anrich Nortje', 'SOUTH AFRICA', 'SA', '4/41', '-', 4, 49),
(10, 'Tim Southee', 'NEW ZEALAND', 'NZ', '3/6', '-', 3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `bowler`
--

CREATE TABLE `bowler` (
  `bow_no` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `figures` int(200) NOT NULL,
  `wickets` int(11) NOT NULL,
  `economy` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bowler`
--

INSERT INTO `bowler` (`bow_no`, `name`, `country`, `figures`, `wickets`, `economy`) VALUES
(3, 'ashwin', 'india', 6, 32, 8.22),
(4, 'jadega', 'india', 5, 11, 6.66),
(5, 'starc', 'australia', 8, 23, 5);

-- --------------------------------------------------------

--
-- Table structure for table `group1`
--

CREATE TABLE `group1` (
  `pos` int(11) NOT NULL,
  `team` varchar(200) NOT NULL,
  `played` int(11) NOT NULL,
  `won` int(11) NOT NULL,
  `lost` int(11) NOT NULL,
  `NR` int(11) NOT NULL,
  `tied` int(11) NOT NULL,
  `NET_RR` varchar(200) NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `group1`
--

INSERT INTO `group1` (`pos`, `team`, `played`, `won`, `lost`, `NR`, `tied`, `NET_RR`, `points`) VALUES
(1, 'NEW ZEALAND', 5, 3, 1, 1, 0, '+2.113', 7),
(2, 'ENGAND', 5, 3, 1, 1, 0, '+0.473', 7),
(3, 'AUSTRALIA', 5, 3, 1, 1, 0, '-0.173', 7),
(4, 'SRI LANKA', 5, 2, 3, 0, 0, '-0.457', 4),
(5, 'IRELAND', 5, 1, 3, 1, 0, '-1.615', 3),
(6, 'AFGHANISTAN', 5, 0, 3, 2, 0, '-0.571', 2);

-- --------------------------------------------------------

--
-- Table structure for table `group2`
--

CREATE TABLE `group2` (
  `pos` int(11) NOT NULL,
  `team` varchar(200) NOT NULL,
  `played` int(11) NOT NULL,
  `won` int(11) NOT NULL,
  `lost` int(11) NOT NULL,
  `NR` int(11) NOT NULL,
  `tied` int(11) NOT NULL,
  `NET_RR` varchar(200) NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `group2`
--

INSERT INTO `group2` (`pos`, `team`, `played`, `won`, `lost`, `NR`, `tied`, `NET_RR`, `points`) VALUES
(1, 'INDIA', 5, 4, 1, 0, 0, '+1.319', 8),
(2, 'PAKISTAN', 5, 3, 2, 0, 0, '+1.028', 6),
(3, 'SOUTH AFRICA', 5, 2, 2, 1, 0, '+0.874', 5),
(4, 'NETHERLANDS', 5, 2, 3, 0, 0, '-0.849', 4),
(5, 'BANGLADESH', 5, 2, 3, 0, 0, '-1.176', 4),
(6, 'ZIMBABWE', 5, 1, 3, 1, 0, '-1.138', 4);

-- --------------------------------------------------------

--
-- Table structure for table `groupa`
--

CREATE TABLE `groupa` (
  `pos` int(11) DEFAULT NULL,
  `team` varchar(255) DEFAULT NULL,
  `played` int(11) DEFAULT NULL,
  `won` int(11) DEFAULT NULL,
  `lost` int(11) DEFAULT NULL,
  `nr` int(11) DEFAULT NULL,
  `tied` int(11) DEFAULT NULL,
  `netrr` varchar(255) DEFAULT NULL,
  `points` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groupa`
--

INSERT INTO `groupa` (`pos`, `team`, `played`, `won`, `lost`, `nr`, `tied`, `netrr`, `points`) VALUES
(1, 'SRI LANKA', 3, 2, 1, 0, 0, '+0.667', 4),
(2, 'NETHERLANDS', 3, 2, 1, 0, 0, '-0.162', 4),
(3, 'NAMIBIA', 3, 1, 2, 0, 0, '+0.730', 2),
(4, 'UNITED ARAB EMIRATES', 3, 1, 2, 0, 0, '-1.235', 2);

-- --------------------------------------------------------

--
-- Table structure for table `groupb`
--

CREATE TABLE `groupb` (
  `pos` int(11) DEFAULT NULL,
  `team` varchar(255) DEFAULT NULL,
  `played` int(11) DEFAULT NULL,
  `won` int(11) DEFAULT NULL,
  `lost` int(11) DEFAULT NULL,
  `nr` int(11) DEFAULT NULL,
  `tied` int(11) DEFAULT NULL,
  `netrr` varchar(255) DEFAULT NULL,
  `points` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groupb`
--

INSERT INTO `groupb` (`pos`, `team`, `played`, `won`, `lost`, `nr`, `tied`, `netrr`, `points`) VALUES
(1, 'ZIMBABWE', 3, 2, 1, 0, 0, '+0.667', 4),
(2, 'IRELAND', 3, 2, 1, 0, 0, '-0.162', 4),
(3, 'SCOTLAND', 3, 1, 2, 0, 0, '+0.730', 2),
(4, 'WEST INDIES', 3, 1, 2, 0, 0, '-1.235', 2);

-- --------------------------------------------------------

--
-- Table structure for table `highestscore`
--

CREATE TABLE `highestscore` (
  `pos` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `coun` varchar(255) DEFAULT NULL,
  `concod` varchar(255) DEFAULT NULL,
  `hs` varchar(255) DEFAULT NULL,
  `inni` varchar(255) DEFAULT NULL,
  `batavg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `highestscore`
--

INSERT INTO `highestscore` (`pos`, `name`, `coun`, `concod`, `hs`, `inni`, `batavg`) VALUES
(1, 'Rilee Rossouw', 'SOUTH AFRICA', 'SA', '109', '-', '109.00'),
(2, 'Glenn Phillips', 'NEW ZEALAND', 'NZ', '104', '-', '-'),
(3, 'Devon Conway', 'NEW ZEALAND', 'NZ', '92*', '-', '92.00'),
(4, 'Michael Jones', 'SCOTLAND', 'SCO', '86', '-', '86.00'),
(5, 'Sikandar Raza', 'ZIMBABWE', 'ZIM', '82', '-', '82.00'),
(6, 'Virat Kohli', 'INDIA', 'IND', '82*', '-', '-'),
(7, 'Kusal Mendis', 'SRI LANKA', 'SL', '79', '-', '79.00'),
(8, 'Pathum Nissanka', 'SRI LANKA', 'SL', '74', '-', '74.00'),
(9, 'Jos Buttler', 'ENGLAND', 'ENG', '73', '-', '73.00'),
(10, 'Curtis Campher', 'IRELAND', 'IRE', '72*', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `ing1_bat_1`
--

CREATE TABLE `ing1_bat_1` (
  `batno` int(11) NOT NULL,
  `batter` varchar(200) NOT NULL,
  `run` int(11) NOT NULL,
  `ball` int(11) NOT NULL,
  `fours` int(11) NOT NULL,
  `sixes` int(11) NOT NULL,
  `sr` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ing1_bat_1`
--

INSERT INTO `ing1_bat_1` (`batno`, `batter`, `run`, `ball`, `fours`, `sixes`, `sr`) VALUES
(1, 'Michael van Lingen', 3, 6, 0, 0, 50),
(2, 'Divan la Cock', 9, 9, 1, 0, 100),
(3, 'Nico Loftie-Eaton', 20, 12, 1, 2, 166.66),
(4, 'Stephan Baard', 26, 24, 2, 0, 108.33),
(5, 'Gerhard Erasmus', 20, 24, 0, 0, 83.33),
(6, 'Jan FryLinck', 44, 28, 4, 0, 157.14),
(7, 'David Wiese', 0, 1, 0, 0, 0),
(8, 'JJ Smit', 31, 16, 2, 2, 193.75);

-- --------------------------------------------------------

--
-- Table structure for table `ing1_bat_16`
--

CREATE TABLE `ing1_bat_16` (
  `batno` varchar(255) DEFAULT NULL,
  `batter` varchar(255) DEFAULT NULL,
  `run` int(11) DEFAULT NULL,
  `ball` int(11) DEFAULT NULL,
  `fours` int(11) DEFAULT NULL,
  `sixes` int(11) DEFAULT NULL,
  `sr` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ing1_bat_16`
--

INSERT INTO `ing1_bat_16` (`batno`, `batter`, `run`, `ball`, `fours`, `sixes`, `sr`) VALUES
('1', 'Mohammad Rizwan', 4, 12, 1, 0, 33.33),
('2', 'Babar Azam', 0, 1, 0, 0, 0),
('3', 'Shan Masood', 52, 42, 5, 0, 123),
('4', 'Iftikhar Ahmed', 51, 34, 2, 4, 150),
('5', 'Shadab  Khan', 5, 6, 1, 0, 83.33),
('6', 'Haider Ali', 2, 4, 0, 0, 50),
('7', 'Mohammad Nawaz', 9, 6, 2, 0, 150),
('8', 'Asif Ali', 2, 3, 0, 0, 66.66),
('9', 'Shaheen Shah Afridi', 16, 8, 1, 1, 200),
('9', 'Haris Rauf', 6, 4, 0, 1, 150);

-- --------------------------------------------------------

--
-- Table structure for table `ing1_bowl_1`
--

CREATE TABLE `ing1_bowl_1` (
  `balno` varchar(255) DEFAULT NULL,
  `bowler` varchar(255) DEFAULT NULL,
  `overs` int(11) DEFAULT NULL,
  `maiden` int(11) DEFAULT NULL,
  `run` int(11) DEFAULT NULL,
  `wicket` int(11) DEFAULT NULL,
  `econ` float DEFAULT NULL,
  `dots` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ing1_bowl_1`
--

INSERT INTO `ing1_bowl_1` (`balno`, `bowler`, `overs`, `maiden`, `run`, `wicket`, `econ`, `dots`) VALUES
('1', 'Maheesh Theekshana', 4, 0, 23, 1, 5.75, 7),
('2', 'Dushmantha Chameera', 4, 0, 39, 1, 9.75, 6),
('3', 'Pramod Madushan', 4, 0, 37, 2, 9.25, 6),
('4', 'Chamika Karunaratne', 4, 0, 36, 1, 9, 7),
('5', 'Wanindu Hasaranga', 4, 0, 27, 1, 6.75, 8);

-- --------------------------------------------------------

--
-- Table structure for table `ing1_bowl_16`
--

CREATE TABLE `ing1_bowl_16` (
  `balno` varchar(255) DEFAULT NULL,
  `bowler` varchar(255) DEFAULT NULL,
  `overs` int(11) DEFAULT NULL,
  `maiden` int(11) DEFAULT NULL,
  `run` int(11) DEFAULT NULL,
  `wicket` int(11) DEFAULT NULL,
  `econ` float DEFAULT NULL,
  `dots` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ing1_bowl_16`
--

INSERT INTO `ing1_bowl_16` (`balno`, `bowler`, `overs`, `maiden`, `run`, `wicket`, `econ`, `dots`) VALUES
('1', 'Bhuvaneshwar Kumar', 4, 0, 22, 1, 5.5, 17),
('2', 'Arshdeep Singh', 4, 0, 32, 3, 8, 10),
('3', 'Mohammad Shami', 4, 0, 25, 1, 6.25, 14),
('4', 'Hardik Pandya', 4, 0, 30, 3, 7.5, 10),
('5', 'Ravichandran Ashwin', 3, 0, 23, 0, 7.66, 5),
('6', 'Axar Patel', 1, 0, 21, 0, 21, 2);

-- --------------------------------------------------------

--
-- Table structure for table `ing1_extra_1`
--

CREATE TABLE `ing1_extra_1` (
  `extra_no` int(11) NOT NULL,
  `extra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ing1_extra_1`
--

INSERT INTO `ing1_extra_1` (`extra_no`, `extra`) VALUES
(1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `ing2_bat_1`
--

CREATE TABLE `ing2_bat_1` (
  `batno` varchar(255) DEFAULT NULL,
  `batter` varchar(255) DEFAULT NULL,
  `run` int(11) DEFAULT NULL,
  `ball` int(11) DEFAULT NULL,
  `fours` int(11) DEFAULT NULL,
  `sixes` int(11) DEFAULT NULL,
  `sr` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ing2_bat_1`
--

INSERT INTO `ing2_bat_1` (`batno`, `batter`, `run`, `ball`, `fours`, `sixes`, `sr`) VALUES
('1', 'Pathum Nissanka', 9, 10, 1, 0, 90),
('2', 'Kusal Mendis', 6, 6, 0, 0, 100),
('3', 'Dhananjaya de Silva', 12, 11, 1, 0, 109.09),
('4', 'Danushkha Gunathilaka', 0, 1, 0, 0, 0),
('5', 'Bhanuka Rajapaksa', 20, 21, 2, 0, 95.23),
('6', 'Dasun Shanaka', 29, 23, 2, 1, 126.08),
('7', 'Wanindu Hasaranga', 4, 8, 0, 0, 50),
('8', 'Chamika karunaratne', 5, 8, 0, 0, 62.5),
('9', 'Pramod Madushan', 0, 0, 0, 0, 0),
('10', 'Dushmantha Chameera', 8, 15, 0, 0, 53.33),
('10', 'Maheesh Theekshana', 11, 11, 0, 1, 100);

-- --------------------------------------------------------

--
-- Table structure for table `ing2_bat_16`
--

CREATE TABLE `ing2_bat_16` (
  `batno` varchar(255) DEFAULT NULL,
  `batter` varchar(255) DEFAULT NULL,
  `run` int(11) DEFAULT NULL,
  `ball` int(11) DEFAULT NULL,
  `fours` int(11) DEFAULT NULL,
  `sixes` int(11) DEFAULT NULL,
  `sr` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ing2_bat_16`
--

INSERT INTO `ing2_bat_16` (`batno`, `batter`, `run`, `ball`, `fours`, `sixes`, `sr`) VALUES
('1', 'KL Rahul', 4, 8, 0, 0, 50),
('2', 'Rohit Sharma', 4, 7, 0, 0, 57.14),
('3', 'Virat Kohli', 82, 53, 6, 4, 157.71),
('4', 'Suryakumar Yadav', 15, 10, 2, 0, 150),
('5', 'Axar Patel', 2, 3, 0, 0, 66.66),
('6', 'Hardik Pandya', 40, 37, 1, 2, 108.1),
('7', 'Dinesh Kartik', 1, 2, 0, 0, 50),
('8', 'Ravichandran Ashwin', 1, 1, 0, 0, 100);

-- --------------------------------------------------------

--
-- Table structure for table `ing2_bowl_1`
--

CREATE TABLE `ing2_bowl_1` (
  `balno` varchar(255) DEFAULT NULL,
  `bowler` varchar(255) DEFAULT NULL,
  `overs` int(11) DEFAULT NULL,
  `maiden` int(11) DEFAULT NULL,
  `run` int(11) DEFAULT NULL,
  `wicket` int(11) DEFAULT NULL,
  `econ` float DEFAULT NULL,
  `dots` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ing2_bowl_1`
--

INSERT INTO `ing2_bowl_1` (`balno`, `bowler`, `overs`, `maiden`, `run`, `wicket`, `econ`, `dots`) VALUES
('1', 'Gerhard Erasmus', 1, 0, 8, 0, 8, 1),
('2', 'David Wiese', 4, 0, 16, 2, 4, 13),
('3', 'Bernard Scholtz', 4, 0, 18, 2, 4.5, 10),
('4', 'Ben Shikongo', 3, 1, 22, 2, 7.33, 6),
('5', 'JJ Smit', 3, 0, 16, 1, 5.33, 7),
('6', 'Jan Frylinck', 4, 0, 26, 2, 6.5, 10);

-- --------------------------------------------------------

--
-- Table structure for table `ing2_bowl_16`
--

CREATE TABLE `ing2_bowl_16` (
  `balno` varchar(255) DEFAULT NULL,
  `bowler` varchar(255) DEFAULT NULL,
  `overs` int(11) DEFAULT NULL,
  `maiden` int(11) DEFAULT NULL,
  `run` int(11) DEFAULT NULL,
  `wicket` int(11) DEFAULT NULL,
  `econ` float DEFAULT NULL,
  `dots` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ing2_bowl_16`
--

INSERT INTO `ing2_bowl_16` (`balno`, `bowler`, `overs`, `maiden`, `run`, `wicket`, `econ`, `dots`) VALUES
('1', 'Shaheen Shah Afridi', 4, 0, 34, 0, 8.5, 7),
('2', 'Naseem Shah', 4, 0, 23, 1, 5.75, 10),
('3', 'Haris Rauf', 4, 0, 36, 2, 9, 11),
('4', 'Shadab Khan', 4, 0, 21, 0, 5.25, 10),
('5', 'Mohammad Nawaz', 4, 0, 42, 2, 10.5, 8);

-- --------------------------------------------------------

--
-- Table structure for table `match`
--

CREATE TABLE `match` (
  `match_no` int(11) NOT NULL,
  `team1` varchar(50) NOT NULL,
  `score1` varchar(50) NOT NULL,
  `team2` varchar(50) NOT NULL,
  `score2` varchar(50) NOT NULL,
  `details` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `match`
--

INSERT INTO `match` (`match_no`, `team1`, `score1`, `team2`, `score2`, `details`) VALUES
(1, 'india', '180', 'england', '150', 'ind won by 4 wickets'),
(2, 'india', '184', 'bangla', '00', 'india won by 7 wickets'),
(3, 'usralia', '189', 'south africa', '199', 'south africa won by 5 runs');

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `match_no` int(11) DEFAULT NULL,
  `team1` varchar(255) DEFAULT NULL,
  `score1` varchar(255) DEFAULT NULL,
  `team2` varchar(255) DEFAULT NULL,
  `score2` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `dayy` varchar(255) DEFAULT NULL,
  `ttime` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `over1` varchar(255) DEFAULT NULL,
  `over2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`match_no`, `team1`, `score1`, `team2`, `score2`, `details`, `dayy`, `ttime`, `location`, `over1`, `over2`) VALUES
(1, 'SRI LANKA', '108', 'NAMIBIA', '163/7', 'Namibia won by 55 runs', 'Sun 16 October', '9:30', 'Kardinia Park, Geelong', 'Ov: 19', 'Ov: 20'),
(2, 'UNITED ARAB EMIRATES', '111/8', 'NETHERLANDS', '112/7', 'Netherlands won by 3 wickets', 'Sun 16 October', '13:30', 'Kardinia Park, Geelong', 'Ov: 19', 'Ov: 19.5'),
(3, 'WEST INDIES', '118', 'SCOTLAND', '160/5', 'Scotland won by 42 runs', 'Mon 17 October', '9:30', 'Bellerive Oval, Hobart', 'Ov: 18.3', 'Ov: 20'),
(4, 'ZIMBABWE', '174/7', 'IRELAND', '143/9', 'Zimbabwe won by 31 runs', 'Mon 17 October', '13:30', 'Bellerive Oval, Hobart', 'Ov: 20', 'Ov: 20'),
(5, 'NAMIBIA', '121/6', 'NETHERLANDS', '122/5', 'Netherlands won by 5 wickets', 'Tue 18 October', '9:30', 'Kardinia Park, Geelong', 'Ov: 20', 'Ov: 19.3'),
(6, 'SRI LANKA', '152/8', 'UAE', '73', 'Sri Lanka won by 79 runs', 'Tue 18 October', '13:30', 'Kardinia Park, Geelong', 'Ov: 20', 'Ov: 17.1'),
(7, 'SCOTLAND', '176/5', 'IRELAND', '180/4', 'Ireland won by 6 wickets', 'Wed 19 October', '9:30', 'Bellerive Oval, Hobart', 'Ov: 20', 'Ov: 19'),
(8, 'WEST INDIES', '153/7', 'ZIMBABWE', '122', 'West Indies won by 31 runs', 'Wed 19 October', '13:30', 'Bellerive Oval, Hobart', 'Ov: 20', 'Ov: 18.2'),
(9, 'NETHERLANDS', '146/9', 'SRI LANKA', '162/6', 'Sri Lanka won by 16 runs', 'Thy 20 October', '13:30', 'Kardinia Park, Geelong', 'Ov: 20', 'Ov: 20'),
(10, 'NAMIBIA', '141/8', 'UAE', '148/3', 'United Arab Emirates won by 7 runs', 'Thu 20 October', '13:30', 'Kardinia Park, Geelong', 'Ov: 20', 'Ov: 20'),
(11, 'IRELAND', '150/1', 'WEST INDIES', '146/5', 'Ireland won by 9 wickets', 'Fri 21 October', '9:30', 'Bellerive Oval, Hobart', 'Ov: 17.3', 'Ov: 20'),
(12, 'SCOTLAND', '132/6', 'ZIMBABWE', '133/5', 'Zimbabwe won by 5 wickets', 'Fri 21 October', '13:30', 'Bellerive Oval, Hobart', 'Ov: 20', 'Ov: 18.3'),
(13, 'AUSTRALIA', '111', 'NEW ZEALAND', '200/3', 'New Zealand won by 89 runs', 'Sat 22 October', '12:30', 'SCG, Sydney', 'Ov: 17.1', 'Ov: 20'),
(14, 'ENGLAND', '113/5', 'AFGHANISTAN', '112', 'England won by 5 wickets', 'Sat 22 October', '16:30', 'Perth Stadium, Perth', 'Ov: 18.1', 'Ov: 19.4'),
(15, 'SRI LANKA', '133/1', 'IRELAND', '128/8', 'Sri Lanka won by 9 wickets', 'Sun 23 October', '9:30', 'Bellerive Oval, Hobart', 'Ov: 15', 'Ov: 20'),
(16, 'INDIA', '160/6', 'PAKISTAN', '159/8', 'India won by 4 wickets', 'Sun 23 October', '13:30', 'MCG, Melbourne', 'Ov: 20', 'Ov: 20'),
(17, 'BANGLADESH', '144/8', 'NETHERLANDS', '135', 'Bangladesh won by 9 runs', 'Mon 24 October', '9:30', 'Bellerive Oval, Hobart', 'Ov: 20', 'Ov: 20'),
(18, 'SOUTH AFRICA', '51/0', 'ZIMBABWE', '79/5', 'Match Abandoned', 'Mon 24 October', '13:30', 'Bellerive Oval, Hobart', 'Ov: 3', 'Ov: 9'),
(19, 'AUSTRALIA', '158/3', 'SRI LANKA', '157/6', 'Australia won by 7 wickets', 'Tue 25 October', '16:30', 'Perth Stadium, Perth', 'Ov: 16.3', 'Ov: 20'),
(20, 'IRELAND', '157', 'ENGLAND', '105/5', 'Ireland won by 5 runs (DLS method)', 'Wed 26 October', '9:30', 'MCG, Melbourne', 'Ov: 19.2', 'Ov: 14.3'),
(21, 'NEW ZEALAND', '', 'AFGHANISTAN', '', 'Match abandoned without a ball bowled', 'Wed 26 October', '13:30', 'MCG, Melbourne', '', ''),
(22, 'SOUTH AFRICA', '205/5', 'BANGLADESH', '101', 'South Africa won by 104 runs', 'Thu 27 October', '8:30', 'SCG, Sydney', 'Ov: 20', 'Ov: 16.3'),
(23, 'NETHERLANDS', '123/9', 'INDIA', '179/2', 'India won by 56 runs', 'Thu 27 October', '12:30', 'SCG, Sydney', 'Ov: 20', 'Ov: 20'),
(24, 'PAKISTAN', '129/8', 'ZIMBABWE', '130/8', 'Zimbabwe won by 1 run', 'Thu 27 October', '16:30', 'Perth Stadium, Perth', 'Ov: 20', 'Ov: 20'),
(25, 'AFGHANISTAN', '', 'IRELAND', '', 'Match abandoned without a ball bowled', 'Fri 28 October', '9:30', 'MCG, Melbourne', '', ''),
(26, 'AUSTRALIA', '', 'ENGLAND', '', 'Match abandoned without a ball bowled', 'Fri 28 October', '13:30', 'MCG, Melbourne', '', ''),
(27, 'NEW ZEALAND', '167/7', 'SRI LANKA', '102', 'New Zealand won by 65 runs', 'Sat 29 October', '13:30', 'SCG, Sydney', 'Ov: 20', 'Ov: 19.2'),
(28, 'BANGLADESH', '150/7', 'ZIMBABWE', '147/8', 'Bangladesh won by 3 runs', 'Sat 29 October', '8:30', 'The Gabba, Brishane', 'Ov: 20', 'Ov: 20'),
(29, 'NETHERLANDS', '91/9', 'PAKISTAN', '95/4', 'Pakistan won by 6 wickets', 'Sun 30 October', '12:30', 'Perth Stadium, Perth', 'Ov: 20', 'Ov: 13.3'),
(30, 'INDIA', '133/9', 'SOUTH AFRICA', '137/5', 'South Africa won by 5 wickets', 'Sun 30 October', '16:30', 'Perth Stadium, Perth', 'Ov: 20', 'Ov: 19.4'),
(31, 'AUSTRALIA', '179/5', 'IRELAND', '137', 'Australia won by 42 runs', 'Mon 31 October', '13:30', 'The Gabba, Brishane', 'Ov: 20', 'Ov: 18.1'),
(32, 'AFGHANISTAN', '144/8', 'SRI LANKA', '148/4', 'Sri Lanka won by 6 wickets', 'Tue 01 November', '9:30', 'The Gabba, Brishane', 'Ov: 20', 'Ov: 18.3'),
(33, 'ENGLAND', '179/6', 'NEW ZEALAND', '159/6', 'England won by 20 runs', 'Tue 01 November', '13:30', 'The Gabba, Brishane', 'Ov: 20', 'Ov: 20'),
(34, 'ZIMBABWE', '117', 'NETHERLANDS', '120/5', 'Netherlands won by 5 wickets', 'Wed 02 November', '9:30', 'Adelaide Oval, Adelaide', 'Ov: 19.2', 'Ov: 18'),
(35, 'INDIA', '184/6', 'BANGLADESH', '145/6', 'India won by 5 runs (DLS method)', 'Wed 02 November', '13:30', 'Adelaide Oval, Adelaide', 'Ov: 20', 'Ov: 16'),
(36, 'PAKISTAN', '185/9', 'SOUTH AFRICA', '108/9', 'Pakistan won by 33 runs (DLS method)', 'Thu 03 November', '13:30', 'SCG, Sydney', 'Ov: 20', 'Ov: 14'),
(37, 'IRELAND', '150/9', 'NEW ZEALAND', '185/6', 'New Zealand won by 35 runs', 'Fri 04 November', '9:30', 'Adelaide Oval, Adelaide', 'Ov: 20', 'Ov: 20'),
(26, 'AUSTRALIA', '', 'ENGLAND', '', 'Match abandoned without a ball bowled', 'Fri 28 October', '13:30', 'MCG, Melbourne', '', ''),
(27, 'NEW ZEALAND', '167/7', 'SRI LANKA', '102', 'New Zealand won by 65 runs', 'Sat 29 October', '13:30', 'SCG, Sydney', 'Ov: 20', 'Ov: 19.2'),
(28, 'BANGLADESH', '150/7', 'ZIMBABWE', '147/8', 'Bangladesh won by 3 runs', 'Sat 29 October', '8:30', 'The Gabba, Brishane', 'Ov: 20', 'Ov: 20'),
(29, 'NETHERLANDS', '91/9', 'PAKISTAN', '95/4', 'Pakistan won by 6 wickets', 'Sun 30 October', '12:30', 'Perth Stadium, Perth', 'Ov: 20', 'Ov: 13.3'),
(30, 'INDIA', '133/9', 'SOUTH AFRICA', '137/5', 'South Africa won by 5 wickets', 'Sun 30 October', '16:30', 'Perth Stadium, Perth', 'Ov: 20', 'Ov: 19.4'),
(31, 'AUSTRALIA', '179/5', 'IRELAND', '137', 'Australia won by 42 runs', 'Mon 31 October', '13:30', 'The Gabba, Brishane', 'Ov: 20', 'Ov: 18.1'),
(32, 'AFGHANISTAN', '144/8', 'SRI LANKA', '148/4', 'Sri Lanka won by 6 wickets', 'Tue 01 November', '9:30', 'The Gabba, Brishane', 'Ov: 20', 'Ov: 18.3'),
(33, 'ENGLAND', '179/6', 'NEW ZEALAND', '159/6', 'England won by 20 runs', 'Tue 01 November', '13:30', 'The Gabba, Brishane', 'Ov: 20', 'Ov: 20'),
(34, 'ZIMBABWE', '117', 'NETHERLANDS', '120/5', 'Netherlands won by 5 wickets', 'Wed 02 November', '9:30', 'Adelaide Oval, Adelaide', 'Ov: 19.2', 'Ov: 18'),
(35, 'INDIA', '184/6', 'BANGLADESH', '145/6', 'India won by 5 runs (DLS method)', 'Wed 02 November', '13:30', 'Adelaide Oval, Adelaide', 'Ov: 20', 'Ov: 16'),
(36, 'PAKISTAN', '185/9', 'SOUTH AFRICA', '108/9', 'Pakistan won by 33 runs (DLS method)', 'Thu 03 November', '13:30', 'SCG, Sydney', 'Ov: 20', 'Ov: 14'),
(37, 'IRELAND', '150/9', 'NEW ZEALAND', '185/6', 'New Zealand won by 35 runs', 'Fri 04 November', '9:30', 'Adelaide Oval, Adelaide', 'Ov: 20', 'Ov: 20'),
(38, 'AUSTRALIA', '168/8', 'AFGHANISTAN', '164/7', 'Australia won by 4 runs', 'Fri 04 November', '13:30', 'Adelaide Oval, Adelaide', 'Ov: 20', 'Ov: 20'),
(39, 'SRI LANKA', '141/8', 'ENGLAND', '144/6', 'England won by 4 wickets', 'Sat 05 November', '13:30', 'SCG, Sydney', 'Ov: 20', 'Ov: 19.4'),
(40, 'SOUTH AFRICA', '145/8', 'NETHERLANDS', '158/4', 'Netherlands won by 13 runs', 'Sun 06 November', '5:30', 'Adelaide Oval, Adelaide', 'Ov: 20', 'Ov: 19.4'),
(41, 'PAKISTAN', '128/5', 'BANGLADESH', '127/8', 'Pakistan won by 15 wickets', 'Sun 06 November', '9:30', 'Adelaide Oval, Adelaide', 'Ov: 18.1', 'Ov: 20'),
(42, 'ZIMBABWE', '115', 'INDIA', '186/5', 'India won by 71 runs', 'Sun 06 November', '13:30', 'MCG, Melbourne', 'Ov: 17.2', 'Ov: 20'),
(43, 'NEW ZEALAND', '152/4', 'PAKISTAN', '153/3', 'Pakistan won by 7 wickets', 'Wed 09 November', '13:30', 'SCG, Sydney', 'Ov: 20', 'Ov: 19.1'),
(44, 'INDIA', '168/6', 'ENGLAND', '170/4', 'England won by 10 wic', '10 nov', '13.30', 'Adelaide', 'Ov:20', 'Ov:20');

-- --------------------------------------------------------

--
-- Table structure for table `mostruns`
--

CREATE TABLE `mostruns` (
  `sno` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `councode` varchar(255) DEFAULT NULL,
  `runs` int(11) DEFAULT NULL,
  `innings` int(11) DEFAULT NULL,
  `batavg` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mostruns`
--

INSERT INTO `mostruns` (`sno`, `name`, `country`, `councode`, `runs`, `innings`, `batavg`) VALUES
(1, 'Virat Kohli', 'INDIA', 'IND', 246, 5, 123),
(2, 'Max O\'Dowd', 'NETHERLANDS', 'NED', 242, 5, 75),
(3, 'Suryakumar Yadav', 'INDIA', 'IND', 225, 5, 75),
(4, 'Kusal Mendis', 'SRI LANKA', 'SL', 223, 8, 31.85),
(5, 'Sikandar Raza', 'ZIMBABWE', 'ZIM', 219, 8, 27.37),
(6, 'Pathum Nissanka', 'SRI LANKA', 'SL', 214, 7, 30.57),
(7, 'Lorcan Tucker', 'IRELAND', 'IRE', 204, 7, 40.8),
(8, 'Glenn Phillips', 'NEW ZEALAND', 'NZ', 201, 5, 40.2),
(9, 'Najmul Hossain Shanto', 'BANGLADESH', 'BAN', 180, 5, 36),
(10, 'Kane Williamson', 'NEW ZEALAND', 'NZ', 178, 5, 35.6),
(11, 'Dhananjay De Silva', 'SRI LANKA', 'SL', 177, 8, 25.28),
(12, 'Paul Stirling', 'IRELAND', 'IRE', 170, 7, 28.33),
(13, 'Colin Ackerman', 'NETHERLANDS', 'NED', 165, 8, 23.57),
(14, 'Muhammad Rizwan', 'PAKISTAN', 'PAK', 160, 6, 26.66),
(15, 'Sean Williams', 'ZIMBABWE', 'ZIM', 155, 8, 19.37),
(16, 'Andrew Balbirnie', 'IRELAND', 'IRE', 153, 7, 21.85),
(17, 'Devon Conway', 'NEW ZEALAND', 'NZ', 145, 5, 36.25),
(18, 'Rilee Rossouw', 'SOUTH AFRICA', 'SA', 141, 4, 35.25),
(19, 'Shan Masood', 'PAKISTAN', 'PAK', 137, 6, 45.66),
(20, 'Charith Asalanka', 'SRI LANKA', 'SL', 131, 7, 26.2),
(21, 'Litton Das', 'BANGLADESH', 'BAN', 127, 5, 25.4),
(22, 'Curtis Campher', 'IRELAND', 'IRE', 126, 6, 25.2),
(23, 'Marcus Stoinis', 'AUSTRALIA', 'AUS', 126, 6, 42),
(24, 'Alex Hales', 'ENGLAND', 'ENG', 125, 4, 31.25),
(25, 'Bhanuka Rajapaksa', 'SRI LANKA', 'SL', 125, 7, 17.85),
(26, 'Quinton de Kock', 'SOUTH AFRICA', 'SA', 124, 5, 31),
(27, 'KL Rahul', 'INDIA', 'IND', 123, 5, 24.6),
(28, 'George Munsey', 'SCOTLAND', 'SCO', 121, 3, 60.5),
(29, 'Jos Buttler', 'ENGLAND', 'ENG', 119, 4, 29.75),
(30, 'Glenn Maxwell', 'AUSTRALIA', 'AUS', 118, 4, 39.33);

-- --------------------------------------------------------

--
-- Table structure for table `mostwic`
--

CREATE TABLE `mostwic` (
  `pos` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `count` varchar(255) DEFAULT NULL,
  `concodd` varchar(255) DEFAULT NULL,
  `wickets` int(11) DEFAULT NULL,
  `inni` int(11) DEFAULT NULL,
  `runs` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mostwic`
--

INSERT INTO `mostwic` (`pos`, `name`, `count`, `concodd`, `wickets`, `inni`, `runs`) VALUES
(1, 'Wanindu Hasaranga', 'SRI LANKA', 'SL', 15, 0, 199),
(2, 'Bas de Leede', 'NETHERLANDS', 'NED', 13, 0, 169),
(3, 'Blessing Muzarabani', 'ZIMBABWE', 'ZIM', 12, 0, 199),
(4, 'Joshua Little', 'IRELAND', 'IRE', 11, 0, 189),
(5, 'Anrich Nortje', 'SOUTH AFRICA', 'SA', 11, 0, 94),
(6, 'Paul van', 'NETHERLANDS', 'NED', 11, 0, 198),
(7, 'Sikandar Raza', 'ZIMBABWE', 'ZIM', 10, 0, 156),
(8, 'Sam Curran', 'ENGLAND', 'ENG', 10, 0, 94),
(9, 'Arshdeep Singh', 'INDIA', 'IND', 10, 0, 141),
(10, 'Shaheen Shah Afridi', 'PAKISTAN', 'PAK', 10, 0, 142),
(11, 'Shadab Khan', 'PAIKISTAN', 'PAK', 10, 0, 145),
(12, 'Richard Ngarava', 'ZIMBABWE', 'ZIM', 9, 0, 197),
(13, 'Mitch Santner', 'NEW ZEALAND', 'NZ', 9, 0, 129),
(14, 'Mark Wood', 'ENGLAND', 'ENG', 9, 0, 108),
(15, 'Maheesh Theekshana', 'SRI LANKA', 'SL', 9, 0, 202),
(16, 'Trent Boult', 'NEW ZEALAND', 'NZ', 8, 0, 148),
(17, 'Hardik Pandya', 'INDIA', 'IND', 8, 0, 112),
(18, 'Taskin Ahmed', 'BANGLADESH', 'BAN', 8, 0, 131),
(19, 'Fred Klassen', 'NETHERLANDS', 'NED', 8, 0, 191),
(20, 'Lahiry Kumara', 'SRI LANKA', 'SL', 7, 0, 153),
(21, 'Tim Southee', 'NEW ZEALAND', 'NZ', 7, 0, 114),
(22, 'Lockie Ferguson', 'NEW ZEALAND', 'NZ', 7, 0, 159),
(23, 'Lungi Ngidi', 'SOUTH AFRICA', 'SA', 7, 0, 116),
(24, 'Mohammad Wasim', 'PAKISTAN', 'PAK', 7, 0, 86),
(25, 'Brandon Glover', 'NETHERLANDS', 'NED', 7, 0, 60),
(26, 'Gareth Delany', 'IRELAND', 'IRE', 6, 0, 185),
(27, 'Dhananjay de Silva', 'SRI LANKA', 'SL', 6, 0, 83),
(28, 'Ish Sodhi', 'NEW ZEALAND', 'NZ', 6, 0, 184),
(29, 'Mohammed Shami', 'INDIA', 'IND', 6, 0, 104),
(30, 'Ravichandran Ashwin', 'INDIA', 'IND', 6, 0, 128);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_no` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `t20_rank` int(11) NOT NULL,
  `highest_finish` varchar(200) NOT NULL,
  `next_tournament` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_no`, `name`, `t20_rank`, `highest_finish`, `next_tournament`) VALUES
(1, 'india', 1, 'Winner', 'bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `sno` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `ranking` int(11) DEFAULT NULL,
  `highfin` varchar(255) DEFAULT NULL,
  `touni` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`sno`, `name`, `ranking`, `highfin`, `touni`) VALUES
(1, 'AFGHANISTAN', 10, 'Super 10s', 'NO TOURNAMENT FIXTURE'),
(2, 'AUSTRALIA', 6, '2021', 'NO TOURNAMENT FIXTURE'),
(3, 'BANGLADESH', 9, 'Super 8s', 'NO TOURNAMENT FIXTURE'),
(4, 'ENGLAND', 2, '2010', 'India'),
(5, 'INDIA', 1, '2007', 'England'),
(6, 'IRELAND', 12, 'Super 8s', 'NO TOURNAMENT FIXTURE'),
(7, 'NAMIBIA', 14, 'Super 12s', 'NO TOURNAMENT FIXTURE'),
(8, 'NETHERLANDS', 17, 'Super 10s', 'NO TOURNAMENT FIXTURE'),
(9, 'NEW ZEALAND', 5, 'Runner up', 'Pakistan'),
(10, 'PAKISTAN', 3, '2009', 'New Zealand'),
(11, 'SOUTH AFRICA', 4, 'Semi Final', 'NO TOURNAMENT FIXTURE'),
(12, 'SRI LANKA', 8, '2014', 'NO TOURNAMENT FIXTURE'),
(13, 'UNITED ARAB EMIRATES', 13, 'First Round', 'NO TOURNAMENT FIXTURE'),
(14, 'WEST INDIES', 7, '2012,2016', 'NO TOURNAMENT FIXTURE'),
(15, 'ZIMBABWE', 11, 'First Round', 'NO TOURNAMENT FIXTURE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batsman`
--
ALTER TABLE `batsman`
  ADD PRIMARY KEY (`bat_no`);

--
-- Indexes for table `bowler`
--
ALTER TABLE `bowler`
  ADD PRIMARY KEY (`bow_no`);

--
-- Indexes for table `group2`
--
ALTER TABLE `group2`
  ADD PRIMARY KEY (`pos`);

--
-- Indexes for table `ing1_bat_1`
--
ALTER TABLE `ing1_bat_1`
  ADD PRIMARY KEY (`batno`);

--
-- Indexes for table `match`
--
ALTER TABLE `match`
  ADD PRIMARY KEY (`match_no`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batsman`
--
ALTER TABLE `batsman`
  MODIFY `bat_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bowler`
--
ALTER TABLE `bowler`
  MODIFY `bow_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ing1_bat_1`
--
ALTER TABLE `ing1_bat_1`
  MODIFY `batno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `match`
--
ALTER TABLE `match`
  MODIFY `match_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
