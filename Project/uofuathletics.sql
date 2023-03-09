-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 09, 2023 at 07:07 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uofuathletics`
--

-- --------------------------------------------------------

--
-- Table structure for table `athlete`
--

DROP TABLE IF EXISTS `athlete`;
CREATE TABLE IF NOT EXISTS `athlete` (
  `AthleteID` int(11) NOT NULL AUTO_INCREMENT,
  `TeamID` int(11) NOT NULL,
  `Name` varchar(128) NOT NULL,
  `SchoolYear` varchar(20) NOT NULL,
  `Hometown` varchar(128) NOT NULL,
  PRIMARY KEY (`AthleteID`),
  KEY `TeamID` (`TeamID`)
) ENGINE=MyISAM AUTO_INCREMENT=111 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `athlete`
--

INSERT INTO `athlete` (`AthleteID`, `TeamID`, `Name`, `SchoolYear`, `Hometown`) VALUES
(1, 1, 'John Doe', 'Junior', 'New York'),
(2, 1, 'James Smith', 'junior', 'Los Angeles'),
(3, 1, 'Bob Johnson', 'senior', 'Chicago'),
(4, 1, 'Alex Williams', 'Freshman', 'Houston'),
(5, 1, 'Mike Brown', 'sophomore', 'Miami'),
(6, 1, 'Emit Davis', 'junior', 'Seattle'),
(7, 1, 'David Lee', 'senior', 'Boston'),
(8, 1, 'Sage Wilson', 'Freshman', 'San Francisco'),
(9, 1, 'Alex Rodriguez', 'sophomore', 'Dallas'),
(10, 1, 'Jessie Nguyen', 'junior', 'Washington DC'),
(11, 1, 'Eric Chen', 'senior', 'Philadelphia'),
(12, 1, 'Brian Thompson', 'Freshman', 'Denver'),
(13, 1, 'Mark Taylor', 'sophomore', 'Phoenix'),
(14, 1, 'Carter Davis', 'junior', 'Austin'),
(15, 1, 'Paul Kim', 'senior', 'Atlanta'),
(16, 1, 'Julian Johnson', 'Freshman', 'Portland'),
(17, 1, 'Justin Brown', 'sophomore', 'San Diego'),
(18, 1, 'Larry Williams', 'junior', 'Las Vegas'),
(19, 1, 'Chris Lee', 'senior', 'Nashville'),
(20, 1, 'Stephen Wilson', 'Freshman', 'Minneapolis'),
(21, 2, 'Emily Jones', 'freshman', 'New York'),
(22, 2, 'Olivia Davis', 'sophomore', 'Los Angeles'),
(23, 2, 'Avery Smith', 'junior', 'Chicago'),
(24, 2, 'Chloe Wilson', 'senior', 'Houston'),
(25, 2, 'Madison Lee', 'freshman', 'Miami'),
(26, 2, 'Abigail Johnson', 'sophomore', 'Seattle'),
(27, 2, 'Sophia Brown', 'junior', 'Boston'),
(28, 2, 'Emma Taylor', 'senior', 'San Francisco'),
(29, 2, 'Isabella Martinez', 'freshman', 'Dallas'),
(30, 2, 'Aria Thompson', 'sophomore', 'Washington DC'),
(31, 2, 'Mia Garcia', 'junior', 'Philadelphia'),
(32, 2, 'Charlotte Nguyen', 'senior', 'Denver'),
(33, 2, 'Ella Rodriguez', 'freshman', 'Phoenix'),
(34, 2, 'Aaliyah Davis', 'sophomore', 'Austin'),
(35, 2, 'Scarlett Kim', 'junior', 'Atlanta'),
(36, 2, 'Grace Wilson', 'senior', 'Portland'),
(37, 2, 'Aubrey Johnson', 'freshman', 'San Diego'),
(38, 2, 'Luna Brown', 'sophomore', 'Las Vegas'),
(39, 2, 'Aurora Williams', 'junior', 'Nashville'),
(40, 2, 'Hazel Davis', 'senior', 'Minneapolis'),
(41, 3, 'Avery Smith', 'sophomore', 'Chicago'),
(42, 3, 'Chloe Wilson', 'junior', 'Houston'),
(43, 3, 'Madison Lee', 'freshman', 'Miami'),
(44, 3, 'Abigail Johnson', 'senior', 'Seattle'),
(45, 3, 'Sophia Brown', 'freshman', 'Boston'),
(46, 3, 'Emma Taylor', 'junior', 'San Francisco'),
(47, 3, 'Isabella Martinez', 'senior', 'Dallas'),
(48, 3, 'Aria Thompson', 'freshman', 'Washington DC'),
(49, 3, 'Mia Garcia', 'sophomore', 'Philadelphia'),
(50, 3, 'Charlotte Nguyen', 'junior', 'Denver'),
(51, 3, 'Ella Rodriguez', 'senior', 'Phoenix'),
(52, 3, 'Aaliyah Davis', 'freshman', 'Austin'),
(53, 3, 'Scarlett Kim', 'sophomore', 'Atlanta'),
(54, 3, 'Grace Wilson', 'junior', 'Portland'),
(55, 3, 'Aubrey Johnson', 'senior', 'San Diego'),
(56, 3, 'Luna Brown', 'freshman', 'Las Vegas'),
(57, 3, 'Aurora Williams', 'sophomore', 'Nashville'),
(58, 3, 'Hazel Davis', 'junior', 'Minneapolis'),
(59, 3, 'Lila Anderson', 'senior', 'New York'),
(60, 3, 'Violet Brown', 'freshman', 'Los Angeles'),
(61, 4, 'Ethan Lee', 'freshman', 'New York'),
(62, 4, 'Jacob Garcia', 'sophomore', 'Los Angeles'),
(63, 4, 'Lucas Nguyen', 'junior', 'Chicago'),
(64, 4, 'Noah Kim', 'senior', 'Houston'),
(65, 4, 'William Hernandez', 'freshman', 'Miami'),
(66, 4, 'Michael Martinez', 'sophomore', 'Seattle'),
(67, 4, 'Alexander Wilson', 'junior', 'Boston'),
(68, 4, 'Daniel Davis', 'senior', 'San Francisco'),
(69, 4, 'Matthew Brown', 'freshman', 'Dallas'),
(70, 4, 'David Lee', 'sophomore', 'Washington DC'),
(71, 4, 'James Rodriguez', 'junior', 'Philadelphia'),
(72, 4, 'Christopher Smith', 'senior', 'Denver'),
(73, 4, 'Benjamin Thompson', 'freshman', 'Phoenix'),
(74, 4, 'Joseph Martinez', 'sophomore', 'Austin'),
(75, 4, 'Jackson Wilson', 'junior', 'Atlanta'),
(76, 4, 'Andrew Davis', 'senior', 'Portland'),
(77, 4, 'Joshua Taylor', 'freshman', 'San Diego'),
(78, 4, 'Samuel Brown', 'sophomore', 'Las Vegas'),
(79, 4, 'Nicholas Lee', 'junior', 'Nashville'),
(80, 4, 'Jonathan Williams', 'senior', 'Minneapolis'),
(81, 5, 'Jacob Brown', 'freshman', 'New York'),
(82, 5, 'Michael Davis', 'sophomore', 'Los Angeles'),
(83, 5, 'William Garcia', 'junior', 'Chicago'),
(84, 5, 'Ethan Hernandez', 'senior', 'Houston'),
(85, 5, 'David Kim', 'freshman', 'Miami'),
(86, 5, 'Matthew Lee', 'sophomore', 'Seattle'),
(87, 5, 'Noah Martinez', 'junior', 'Boston'),
(88, 5, 'Daniel Nguyen', 'senior', 'San Francisco'),
(89, 5, 'Benjamin Rodriguez', 'freshman', 'Dallas'),
(90, 5, 'James Smith', 'sophomore', 'Washington DC'),
(91, 5, 'Christopher Taylor', 'junior', 'Philadelphia'),
(92, 5, 'Jonathan Wilson', 'senior', 'Denver'),
(93, 5, 'Joseph Brown', 'freshman', 'Phoenix'),
(94, 5, 'Andrew Davis', 'sophomore', 'Austin'),
(95, 5, 'Jackson Garcia', 'junior', 'Atlanta'),
(96, 5, 'Nicholas Kim', 'senior', 'Portland'),
(97, 5, 'Joshua Lee', 'freshman', 'San Diego'),
(98, 5, 'Samuel Martinez', 'sophomore', 'Las Vegas'),
(99, 5, 'Alexander Thompson', 'junior', 'Nashville'),
(100, 5, 'Daniel Williams', 'senior', 'Minneapolis');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `EventID` int(11) NOT NULL AUTO_INCREMENT,
  `TeamID` int(11) DEFAULT NULL,
  `TeamName` varchar(255) DEFAULT NULL,
  `Opponent` varchar(255) DEFAULT NULL,
  `Venue` varchar(255) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  PRIMARY KEY (`EventID`),
  KEY `TeamID` (`TeamID`)
) ENGINE=MyISAM AUTO_INCREMENT=100 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`EventID`, `TeamID`, `TeamName`, `Opponent`, `Venue`, `Date`) VALUES
(46, 1, 'Utes', 'Florida', 'Rice-Eccles Stadium', '2023-08-31'),
(47, 1, 'Utes', 'Arizona', 'State Farm Stadium', '2023-09-09'),
(48, 1, 'Utes', 'BYU', 'LaVell Edwards Stadium', '2023-09-23'),
(49, 1, 'Utes', 'Oregon', 'Rice-Eccles Stadium', '2023-10-07'),
(50, 1, 'Utes', 'Washington State', 'Martin Stadium', '2023-10-14'),
(51, 1, 'Utes', 'UCLA', 'Rice-Eccles Stadium', '2023-10-28'),
(52, 1, 'Utes', 'Oregon State', 'Reser Stadium', '2023-11-11'),
(53, 1, 'Utes', 'Stanford', 'Rice-Eccles Stadium', '2023-11-25'),
(54, 1, 'Utes', 'USC', 'Allegiant Stadium', '2023-12-20'),
(55, 1, 'Utes', 'Penn State', 'Rose Bowl Stadium', '2024-01-03'),
(56, 2, 'Utes', 'LSU', 'Huntsman Center', '2023-01-06'),
(57, 2, 'Utes', 'BYU', 'Marriot Center', '2023-01-13'),
(58, 2, 'Utes', 'Southern Utah', 'Huntsman Center', '2023-01-20'),
(59, 2, 'Utes', 'Oklahoma', 'Huntsman Center', '2023-02-03'),
(60, 2, 'Utes', 'Stanford', 'Burnham Pavilion', '2023-02-11'),
(61, 2, 'Utes', 'UCLA', 'Huntsman Center', '2023-02-20'),
(62, 2, 'Utes', 'Illinois', 'Huff Hall', '2023-02-24'),
(63, 2, 'Utes', 'Georgia', 'Stegeman Coliseum', '2023-03-03'),
(64, 2, 'Utes', 'Utah State', 'Huntsman Center', '2023-03-11'),
(65, 2, 'Utes', 'Boise State', 'Extra Mile Arena', '2023-03-16'),
(66, 3, 'Utes', 'Portland', 'Merlo Stadium', '2023-08-11'),
(67, 3, 'Utes', 'Idaho State', 'Ute Field', '2023-08-21'),
(68, 3, 'Utes', 'Colorado State', 'Ute Field', '2023-09-10'),
(69, 3, 'Utes', 'Alabama', 'Ute Field', '2023-09-17'),
(70, 3, 'Utes', 'BYU', 'South Field', '2023-10-06'),
(71, 3, 'Utes', 'Washington State', 'Lower Soccer Field', '2023-10-14'),
(72, 3, 'Utes', 'Washington', 'Husky Soccer Stadium', '2023-10-24'),
(73, 3, 'Utes', 'Arizona State', 'Sun Devil Soccer Stadium', '2023-10-30'),
(74, 3, 'Utes', 'USC', 'Ute Field', '2023-11-03'),
(75, 3, 'Utes', 'UCLA', 'Ute Field', '2023-11-06'),
(76, 4, 'Utes', 'Vermont', 'Rice Eccles Stadium', '2023-03-18'),
(77, 4, 'Utes', 'Denver', 'Peter Barton Stadium', '2023-03-25'),
(78, 4, 'Utes', 'Marquette', 'Ute Field', '2023-03-29'),
(79, 4, 'Utes', 'Johns Hopkins', 'Homewood Field', '2023-03-31'),
(80, 4, 'Utes', 'Rutgers', 'SHI Stadium', '2023-04-08'),
(81, 4, 'Utes', 'Airforce', 'Falcon Stadium', '2023-04-12'),
(82, 4, 'Utes', 'Mercer', 'Zions Bank Stadium', '2023-04-15'),
(83, 4, 'Utes', 'Cleveland State', 'Ute Field', '2023-04-22'),
(84, 4, 'Utes', 'Detroit Mercy', 'Titan Field', '2023-04-29'),
(85, 4, 'Utes', 'Lindenwood', 'Ute Field', '2023-05-02'),
(86, 5, 'Utes', 'Westminster', 'Huntsman Center', '2023-11-02'),
(87, 5, 'Utes', 'Idaho State', 'Holt Arena', '2023-11-14'),
(88, 5, 'Utes', 'Georgia Tech', 'Huntsman Center', '2023-11-26'),
(89, 5, 'Utes', 'Arizona', 'Desert Financial Arena', '2023-12-04'),
(90, 5, 'Utes', 'Washington State', 'Beasley Coliseum', '2023-12-15'),
(91, 5, 'Utes', 'California', 'Huntsman Center', '2023-12-29'),
(92, 5, 'Utes', 'Stanford', 'Stanford Maples Pavilion', '2024-01-13'),
(93, 5, 'Utes', 'Oregon', 'Huntsman Center', '2023-01-24'),
(94, 5, 'Utes', 'UCLA', 'Pauley Pavilion', '2023-02-17'),
(95, 5, 'Utes', 'Boulder', 'CU Events Center', '2024-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `financials`
--

DROP TABLE IF EXISTS `financials`;
CREATE TABLE IF NOT EXISTS `financials` (
  `FinancialsID` int(11) NOT NULL AUTO_INCREMENT,
  `TeamID` int(11) DEFAULT NULL,
  `EventID` int(11) DEFAULT NULL,
  `RevenueFromConcessions` decimal(10,2) DEFAULT NULL,
  `RevenueFromTicketSales` decimal(10,2) DEFAULT NULL,
  `RevenueFromSponsors` decimal(10,2) NOT NULL,
  `CostFromStaff` decimal(10,2) NOT NULL,
  `CostFromTeamLiving` decimal(10,2) NOT NULL,
  `CostOfGoodsSold` decimal(10,2) NOT NULL,
  PRIMARY KEY (`FinancialsID`),
  KEY `TeamID` (`TeamID`),
  KEY `EventID` (`EventID`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `financials`
--

INSERT INTO `financials` (`FinancialsID`, `TeamID`, `EventID`, `RevenueFromConcessions`, `RevenueFromTicketSales`, `RevenueFromSponsors`, `CostFromStaff`, `CostFromTeamLiving`, `CostOfGoodsSold`) VALUES
(1, 1, 46, '4200.00', '9500.00', '11000.00', '3000.00', '3000.00', '8500.00'),
(2, 1, 47, '1200.00', '4500.00', '5000.00', '2000.00', '3800.00', '3200.00'),
(3, 1, 48, '2200.00', '6200.00', '8500.00', '2200.00', '3200.00', '6800.00'),
(4, 1, 49, '5700.00', '1100.00', '10500.00', '3000.00', '3000.00', '9100.00'),
(5, 1, 50, '1300.00', '4700.00', '5000.00', '2200.00', '4200.00', '3800.00'),
(6, 1, 51, '4000.00', '9300.00', '9800.00', '3000.00', '3000.00', '8700.00'),
(7, 1, 52, '1400.00', '5000.00', '4500.00', '2400.00', '4000.00', '3600.00'),
(8, 1, 53, '3700.00', '8800.00', '7500.00', '3000.00', '3000.00', '7700.00'),
(9, 1, 54, '4500.00', '11000.00', '13000.00', '3000.00', '4800.00', '9000.00'),
(10, 1, 55, '5100.00', '13000.00', '16000.00', '3000.00', '5100.00', '9300.00'),
(11, 2, 56, '2000.00', '3000.00', '3500.00', '1000.00', '1500.00', '2800.00'),
(12, 2, 57, '1200.00', '1500.00', '1800.00', '800.00', '2000.00', '2100.00'),
(13, 2, 58, '1700.00', '2100.00', '3000.00', '1000.00', '1500.00', '2300.00'),
(14, 2, 59, '2100.00', '3100.00', '3700.00', '1000.00', '1500.00', '3000.00'),
(15, 2, 60, '1350.00', '1700.00', '2000.00', '800.00', '2300.00', '2400.00'),
(16, 2, 61, '1900.00', '2800.00', '3200.00', '1000.00', '1500.00', '2800.00'),
(17, 2, 62, '1500.00', '1800.00', '2100.00', '1000.00', '2500.00', '2600.00'),
(18, 2, 63, '1750.00', '1900.00', '2300.00', '1000.00', '2600.00', '2700.00'),
(19, 2, 64, '1500.00', '2200.00', '2700.00', '1000.00', '1500.00', '2600.00'),
(20, 2, 65, '1200.00', '1500.00', '2000.00', '700.00', '1300.00', '2100.00'),
(21, 3, 66, '1500.00', '3500.00', '9000.00', '2000.00', '1750.00', '2000.00'),
(22, 3, 67, '2000.00', '2500.00', '8000.00', '1500.00', '1000.00', '1500.00'),
(23, 3, 68, '1750.00', '3000.00', '6000.00', '1000.00', '1500.00', '1500.00'),
(24, 3, 69, '2000.00', '4000.00', '7000.00', '1500.00', '1000.00', '1000.00'),
(25, 3, 70, '2000.00', '3000.00', '8000.00', '2000.00', '1500.00', '1000.00'),
(26, 3, 71, '1500.00', '1500.00', '5000.00', '750.00', '1000.00', '750.00'),
(27, 3, 72, '2000.00', '2000.00', '4500.00', '1000.00', '1500.00', '500.00'),
(28, 3, 73, '1500.00', '2000.00', '5000.00', '1000.00', '1000.00', '1000.00'),
(29, 3, 74, '2500.00', '2500.00', '7000.00', '1500.00', '500.00', '1500.00'),
(30, 3, 75, '2000.00', '2500.00', '6000.00', '1000.00', '500.00', '1000.00'),
(31, 4, 76, '3000.00', '5000.00', '10000.00', '2500.00', '1000.00', '2500.00'),
(32, 4, 77, '1750.00', '2500.00', '6000.00', '2000.00', '500.00', '1000.00'),
(33, 4, 78, '2500.00', '3000.00', '8000.00', '1500.00', '500.00', '1000.00'),
(34, 4, 79, '2000.00', '2000.00', '7000.00', '1500.00', '1000.00', '750.00'),
(35, 4, 80, '1500.00', '2500.00', '6000.00', '1000.00', '500.00', '750.00'),
(36, 4, 81, '1500.00', '2500.00', '5000.00', '1500.00', '1000.00', '1000.00'),
(37, 4, 82, '2000.00', '3000.00', '9000.00', '1500.00', '500.00', '1500.00'),
(38, 4, 83, '1500.00', '4000.00', '8000.00', '1000.00', '500.00', '1000.00'),
(39, 4, 84, '1000.00', '3000.00', '5000.00', '1000.00', '1000.00', '500.00'),
(40, 4, 85, '1500.00', '3500.00', '6000.00', '1000.00', '500.00', '1000.00'),
(41, 5, 86, '4000.00', '5500.00', '10000.00', '3000.00', '2000.00', '4500.00'),
(42, 5, 87, '2000.00', '4000.00', '8000.00', '2000.00', '1500.00', '5000.00'),
(43, 5, 88, '3000.00', '6000.00', '14000.00', '4000.00', '2500.00', '5000.00'),
(44, 5, 89, '2000.00', '4500.00', '9000.00', '3000.00', '2000.00', '4500.00'),
(45, 5, 90, '2500.00', '5000.00', '10000.00', '3000.00', '2500.00', '5000.00'),
(46, 5, 91, '3000.00', '5750.00', '13000.00', '3500.00', '2500.00', '5500.00'),
(47, 5, 92, '1750.00', '5500.00', '9000.00', '2500.00', '1500.00', '5000.00'),
(48, 5, 93, '3000.00', '6000.00', '12000.00', '3500.00', '2500.00', '5500.00'),
(49, 5, 94, '2000.00', '4000.00', '7000.00', '2500.00', '1000.00', '6000.00'),
(50, 5, 95, '2500.00', '5000.00', '10000.00', '3000.00', '2000.00', '5000.00');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

DROP TABLE IF EXISTS `rank`;
CREATE TABLE IF NOT EXISTS `rank` (
  `RankID` int(11) NOT NULL AUTO_INCREMENT,
  `TeamID` int(11) DEFAULT NULL,
  `TeamName` varchar(255) DEFAULT NULL,
  `Rank` int(11) DEFAULT NULL,
  `Record` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`RankID`),
  KEY `TeamID` (`TeamID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`RankID`, `TeamID`, `TeamName`, `Rank`, `Record`) VALUES
(1, 1, 'Football', 1, '10-4'),
(2, 2, 'Gymnastics', 2, '12-2'),
(3, 3, 'Soccer', 4, '6-7-6'),
(4, 4, 'Lacrosse', 3, '10-4'),
(5, 5, 'Basketball', 7, '17-14');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `username`, `role`) VALUES
(1, 'bsmith', 'admin'),
(2, 'pjones', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
CREATE TABLE IF NOT EXISTS `team` (
  `TeamID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Teamname` varchar(128) DEFAULT NULL,
  `email` varchar(116) DEFAULT NULL,
  `established_date` date DEFAULT NULL,
  PRIMARY KEY (`TeamID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`TeamID`, `Teamname`, `email`, `established_date`) VALUES
(1, 'Football', 'football@utahathletics.edu', '1892-01-01'),
(2, 'Gymnastics', 'gymnastics@utahathletics.edu', '1976-01-01'),
(3, 'Soccer', 'soccer@utahathletics.edu', '2009-01-01'),
(4, 'Lacrosse', 'lacrosse@utahathletics.edu', '2020-01-01'),
(5, 'Basketball', 'basketball@utah.edu', '1980-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `forename` varchar(128) NOT NULL,
  `surname` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`forename`, `surname`, `username`, `password`) VALUES
('Bill', 'Smith', 'bsmith', '$2y$10$JfoVje0gcqHuh7iHlTbCTOD.SUv6HIl8ArEJuPQ7ZjjWH0NF6ARsq'),
('Pauline', 'Jones', 'pjones', '$2y$10$glRAo3a3Wetgb/BnI7JP8uvM5OqV.2svG0Cpp6xmD8vr6V1MR9oaq');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
