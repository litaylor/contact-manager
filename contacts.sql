-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 10, 2017 at 06:32 PM
-- Server version: 5.5.49-log
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contacts`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `address` tinytext NOT NULL,
  `city` tinytext NOT NULL,
  `state` tinytext NOT NULL,
  `zip` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `notes` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `firstname`, `lastname`, `title`, `address`, `city`, `state`, `zip`, `phone`, `notes`) VALUES
(1, 'Barack', 'Obama', 'President', '1600 Pennsylvania Ave', 'Washington', 'DC', '20006', '2024561112', 'The old one'),
(2, 'Donald', 'Trump', 'President', '1600 Pennsylvania Ave', 'Washington', 'DC', '20006', '2024561111', 'Donald J Trump (born June 14, 1946) is an American businessman, television personality, politician, and the 45th President of the United States.\r\nHe was born in Jamaica, Queens, New York City where he lived until enrolling at age 13 in the New York Military Academy. '),
(3, 'Ja', 'Rule', 'King', '400 Seventh Avenue', 'New York', 'NY', '10010', '8005882300', 'yeaaa'),
(6, 'Seth', 'Wright', 'teacher', 'Somewhere on Franklin Street', 'Chapel Hill', 'NC', '27514', '666-666-6666', 'Please give Langston an A in your class. Thank you.'),
(9, 'Bugs', 'Bunny', 'point guard', 'Not Moron Mountain', 'Earth', 'CA', '12345', '340-340-3040', 'You KNOW I will.'),
(10, 'Someone from', 'Alabama', 'Probably a mayor', '100 Main St', 'Alabama City', 'AL', '33333', '444-555-6666', ''),
(11, 'Kanye', 'West', 'Special advisor to President Trump', '5', 'Chicago', 'IL', '88888', '555-999-2222', ''),
(20, 'Meek', 'Mill', 'Pretty Good Rapper', '999 Litty Street', 'Philadelphia', 'PA', '77733', '', 'He''ll be aight.'),
(22, 'Langston', 'Taylor', 'Student who wants an A', 'Carroll Hall', 'Chapel Hill', 'NC', '27514', '', 'Please give Langston an A.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
