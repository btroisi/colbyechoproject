-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 05, 2017 at 10:02 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Echo`
--

-- --------------------------------------------------------

--
-- Table structure for table `Articles`
--

CREATE TABLE `Articles` (
  `article_id` int(7) NOT NULL,
  `title` varchar(200) NOT NULL,
  `author_id` int(6) NOT NULL,
  `date_published` date NOT NULL,
  `category_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Articles`
--

INSERT INTO `Articles` (`article_id`, `title`, `author_id`, `date_published`, `category_id`) VALUES
(1000010, 'Class of 2021 Shatters Previous Admissions Records', 100001, '2017-04-20', 101),
(1000012, 'The Best Restaurants, Breweries, Trails, and Sight Seeing Destinations in Portland', 100002, '2017-04-27', 101),
(1000013, 'Green Spot Owners Discuss Evolution of Cherished Business', 100006, '2017-04-27', 103),
(1000011, 'Blackbox Algorithms: The Modern Day Plato\'s Cave', 100003, '2017-04-27', 102),
(1000014, 'Robert\'s Road Lineup Revealed in a Video', 100004, '2017-04-27', 104),
(1000015, 'Men\'s and Women\'s Tennis Come Up Short this Weekend', 100005, '2017-04-27', 105),
(1000016, 'Vice President Joe Biden to Speak at Commencement', 100006, '2014-04-27', 101),
(1000017, 'Senator Mitchell Captivates Large Audience at Colby', 100015, '2017-04-20', 103),
(1000018, 'Entrepreneurship Expo at the College', 100008, '2017-04-13', 103),
(1000030, 'Administration Seek Transformations in College\'s Civic Engagement for Developing Downtown Dorm', 100003, '2017-04-06', 103),
(1000031, 'Doghead: A Colby Tradition Without and Origin', 100006, '2017-03-16', 103),
(1000032, 'I\'m a Senior so Excuse me if I\'m a Bit Verklempt ', 100009, '2017-04-27', 102),
(1000033, 'Berkley Should Let Ann Coulter Speak', 100009, '2017-04-27', 102),
(1000034, 'Why is Biden so Beloved: A Millenial\'s Perspective', 100009, '2017-04-20', 102),
(1000035, 'I\'ve Learned All I Need to, Thanks', 100009, '2017-04-20', 102),
(1000036, 'The Scooter Squad Manifesto', 100010, '2017-04-13', 102),
(1000037, 'Colby Senior Spencer Martin Awarded Firefighter of the Year', 100011, '2017-04-27', 101),
(1000038, 'Faces of Colby: New Printer Brings Joy to Colby Campus', 100012, '2017-04-27', 101),
(1000050, '(Re)Introducing WMHB, Colby\'s Popular Radio Station', 100013, '2017-04-20', 101),
(1000051, 'Organizers of Pig Roast talk Spring Celebration', 100011, '2017-04-20', 101),
(1000052, 'Getting to Know Chuck Ferguson, Colby\'s Bookbinder', 100013, '2017-04-13', 101),
(1000053, 'Senator Collins Eyeing Governor\'s Seat in 2018 Election', 100015, '2017-04-20', 103),
(1000054, 'Review: Late, a Cowboy Song', 100013, '2017-04-27', 104),
(1000055, 'Men\'s Ultimate Qualifies for Regional Tournament', 100016, '2017-04-27', 105),
(1000056, 'Multiple Track and Field Athletes Take First Place at Respective Meets', 100017, '2017-04-27', 105),
(1000057, 'Depth Helps Softball Come Back to Win Three-game Bates Series', 100018, '2017-04-27', 105),
(1000058, 'Men\'s Lacrosse Snaps 3-game Losing Streak with Win over Middlebury', 100014, '2017-04-27', 105),
(1000059, 'The Cheap Seats with Andrew Sterup', 100014, '2017-04-20', 105);

-- --------------------------------------------------------

--
-- Table structure for table `Authors`
--

CREATE TABLE `Authors` (
  `author_id` int(5) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Authors`
--

INSERT INTO `Authors` (`author_id`, `first_name`, `last_name`, `email`) VALUES
(100001, 'Kiernan', 'Somers', 'ksomers@colby.edu'),
(100002, 'Ethan', 'Schuler', 'eschuler@colby.edu'),
(100003, 'Caroline', 'Ferguson', 'cferguson@colby.edu'),
(100004, 'Cleo', 'Auckland', 'cauckland@colby.edu'),
(100005, 'John', 'Steenrod', 'jsteenrod@colby.edu'),
(100006, 'Grant', 'Alenson', 'galenson@colby.edu'),
(100007, 'Jonathan', 'Stempel', 'jstempel@colby.edu'),
(100008, 'Alessandro', 'Maglione', 'amaglione@colby.edu'),
(100009, 'Catherine', 'Dunn', 'cdunn@colby.edu'),
(100010, 'Ryan', 'Hara', 'rhara@colby.edu'),
(100011, 'Caitlin', 'Roger', 'crogers@colby.edu'),
(100012, 'Komita', 'Moussa', 'kmoussa@colby.edu'),
(100013, 'Michaela', 'Morris', 'mmorris@colby.edu'),
(100015, 'Adelaide ', 'Bullock', 'abullock@colby.edu'),
(100016, 'Kevin', 'Ahn', 'kahn@colby.edu'),
(100017, 'Aidan', 'Cyr', 'acyr@colby.edu'),
(100018, 'Katie', 'Kelley', 'kakelley@colby.edu'),
(100014, 'Drew', 'Ladner', 'dladner@colby.edu');

-- --------------------------------------------------------

--
-- Table structure for table `Categories`
--

CREATE TABLE `Categories` (
  `category_id` int(3) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Categories`
--

INSERT INTO `Categories` (`category_id`, `category`) VALUES
(101, 'Features'),
(102, 'Opinions'),
(103, 'Local'),
(104, 'Arts and Entertainment'),
(105, 'Sports'),
(106, 'News');

-- --------------------------------------------------------

--
-- Table structure for table `Contact_Info`
--

CREATE TABLE `Contact_Info` (
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Message` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Contact_Info`
--

INSERT INTO `Contact_Info` (`Name`, `Email`, `Message`) VALUES
('Brandon Troisi', 'btroisi@colby.edu', 'Hello! My name is Brandon Troisi and I would like to join the Echo because it sounds like a fun organization to work for. '),
('Brit Biddle', 'brbiddle@colby.edu', 'Hi! My name is Brit and I would like to be a part of the echo because I like to write and I\'m very creative!'),
('Kimmy Hu', 'kimhu@colby.edu', 'I would like to  OK myself into the Echo!'),
('Zane Comeaux', 'zcomeaux@gmail.com', 'If I get the privilege to join the Echo I will scream \'OK\' at the top of my lungs!'),
('He Li', 'heli@gmail.com', 'I would like to see if the Colby Echo receives my message. '),
('random', 'rando@example.com', 'This is a random message!'),
('Robert Durst', 'rdurst@colby.edu', 'Hello!'),
('First Last', 'valid@ex.com', 'Hello, I would like to reach out to the echo!');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
