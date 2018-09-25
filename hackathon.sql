-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2018 at 03:35 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `rsvp`
--

CREATE TABLE `rsvp` (
  `team_name` varchar(50) NOT NULL,
  `describes` varchar(50) NOT NULL,
  `m1_name` varchar(50) NOT NULL,
  `m1_email` varchar(50) NOT NULL,
  `m1_contact` varchar(50) NOT NULL,
  `m2_name` varchar(50) NOT NULL,
  `m2_email` varchar(50) NOT NULL,
  `m2_contact` varchar(50) NOT NULL,
  `m3_name` varchar(50) NOT NULL,
  `m3_email` varchar(50) NOT NULL,
  `m3_contact` varchar(50) NOT NULL,
  `m4_name` varchar(50) NOT NULL,
  `m4_email` varchar(20) NOT NULL,
  `m4_contact` varchar(10) NOT NULL,
  `coupon_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rsvp`
--

INSERT INTO `rsvp` (`team_name`, `describes`, `m1_name`, `m1_email`, `m1_contact`, `m2_name`, `m2_email`, `m2_contact`, `m3_name`, `m3_email`, `m3_contact`, `m4_name`, `m4_email`, `m4_contact`, `coupon_name`) VALUES
('kksn', 'student', 'karna', 'k@gmail.com', '123455667', '', '', '123455667', '', '', '', '', '', '', ''),
('rsvp', 'developer', 's', 's@gmail.com', '', 'k', 'k@f', '1234', 'n', 'n@g', '12356', 'k', 'k@g', '12557', ''),
('fame', 'freelancers', 'k', 'g@m', '345', 'f', 'd@s', '345', 'd', 'd@d', '3457', 'g', 'd@j', 'fgh', ''),
('amma', 'student', 'kumari', 'k@gmail', '1234', 'ka', 'jj@f', '1234', 'w', 's@s', '12', 'w', 's@d', '12', ''),
('fame', 'freelancers', 'k', 'g@m', '345', 'f', 'd@s', '345', 'd', 'd@d', '3457', 'g', 'd@j', 'fgh', ''),
('appu', 'student', 'a', 'a@s', '12', 'd', 's@d', '12', 'e', 's@s', '45', 'f', 'S@d', '3456', ''),
('abcd', 'student', 'a', 'a@s', '12345', 'b', 's@s', '12345', 'c', 'd@s', '123456', 'd', 's@s', '12345', ''),
('h', 'student', 'z', 'a@s', '1234', '', '', '1234', '', '', '', '', '', '', ''),
('h', 'student', 'z', 'a@s', '1234', '', '', '1234', '', '', '', '', '', '', ''),
('h', 'student', 'z', 'a@s', '1234', '', '', '1234', '', '', '', '', '', '', ''),
('s', 'student', 'a', 'a@s', '12345', '', '', '12345', '', '', '', '', '', '', ''),
('kk', 'student', 's', 'a@s', '12345', '', '', '12345', '', '', '', '', '', '', ''),
('abcd', 'student', 'a', 'a@s', '12234568', '', '', '', '', '', '', '', '', '', ''),
('abcd', 'student', 'a', 'a@b', '12', 'b', 'b@c', '23', 'c', 'c@d', '34', 'd', 'd@a', '56', ''),
('a', 'student', 'a', 'a@s', '12', '', '', '', '', '', '', '', '', '', ''),
('a', 'student', 'q', 's@s', '12', '', '', '', '', '', '', '', '', '', ''),
('a', 'student', 'a', 'a@s', '12', '', '', '', '', '', '', '', '', '', ''),
('d', 'student', 'd', 's@a', '123', '', '', '', '', '', '', '', '', '', ''),
('s', 'student', 's', 'a@s', '12', '', '', '', '', '', '', '', '', '', ''),
('s', 'student', 's', 'a@s', '12', '', '', '', '', '', '', '', '', '', ''),
('a', 'student', 'a', 'a@a', '12', '', '', '', '', '', '', '', '', '', ''),
('s', 'student', 'a', 'a@a', '1', '', '', '', '', '', '', '', '', '', ''),
('k', 'student', 's@a', '1@s', 's', '', '', '', '', '', '', '', '', '', ''),
('c', 'student', 'v', 'z@s', '12', '', '', '', '', '', '', '', '', '', ''),
('c', 'student', 's@z', 'a@z', '12', '', '', '', '', '', '', '', '', '', ''),
('s', 'student', 's', 'q@a', '12', '', '', '', '', '', '', '', '', '', ''),
('s', 'student', 's', 'sd@s', '00', '', '', '', '', '', '', '', '', '', ''),
('s', 'student', 's', 'sd@s', '00', '', '', '', '', '', '', '', '', '', ''),
('s', 'student', 's@s', 's@s', '12', '', '', '', '', '', '', '', '', '', ''),
('s', 'student', 's@s', 's@s', '12', '', '', '', '', '', '', '', '', '', ''),
('s', 'student', 'a', 'a@s', '34', '', '', '', '', '', '', '', '', '', ''),
('p', 'student', 's#x', 'w@x', '56', '', '', '', '', '', '', '', '', '', ''),
('x', 'student', 'x', 'x@a', '67', '', '', '', '', '', '', '', '', '', ''),
('l', 'student', 'l', 'l@w', '12', '', '', '', '', '', '', '', '', '', ''),
('s', 'student', 'd', 'd@s', '45', '', '', '', '', '', '', '', '', '', ''),
('pp', 'student', 'p', 'p@s', '12', '', '', '', '', '', '', '', '', '', ''),
('pwd', 'student', 'p', 'p@w', '12', '', '', '', '', '', '', '', '', '', ''),
('s', 'student', 's', 's@d', 'es', '', '', '', '', '', '', '', '', '', ''),
('d', 'student', 'd', 'd@f', 'er', '', '', '', '', '', '', '', '', '', ''),
('z', 'student', 'z', 'z@s', 's', '', '', '', '', '', '', '', '', '', ''),
('z', 'student', 'z', 'z@s', 'sd', '', '', '', '', '', '', '', '', '', ''),
('c', 'student', 'd', 's@s', 'se', '', '', '', '', '', '', '', '', '', ''),
('j', 'student', 'fr', 'se@s', 'er', '', '', '', '', '', '', '', '', '', ''),
('c', 'student', 'c@s', 'c@s', '45', '', '', '', '', '', '', '', '', '', ''),
('kksn ', 'developer', 's', 'sa@s', '1111', '', '', '', '', '', '', '', '', '', ''),
('fame', 'student', 'd', 's@s', '3333', '', '', '', '', '', '', '', '', '', ''),
('s', 'student', 's', 's@w', '11111', '', '', '', '', '', '', '', '', '', ''),
('s', 'student', 'w', 's@s', '1111', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', 'INFY18'),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', 'INFY18'),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', 'INFY18'),
('s', 'student', 's', 's@a', '2222', '', '', '', '', '', '', '', '', '', 'INFY18'),
('s', 'student', 's', 's@a', '2222', '', '', '', '', '', '', '', '', '', 'INFY18'),
('d', 'student', 'd', 'd@s', '33333', '', '', '', '', '', '', '', '', '', ''),
('e', 'student', 'e', 'e@s', '4444', '', '', '', '', '', '', '', '', '', 'FAME18');

-- --------------------------------------------------------

--
-- Table structure for table `sponser`
--

CREATE TABLE `sponser` (
  `title` varchar(45) NOT NULL,
  `sponse_code` varchar(10) NOT NULL,
  `person_name` varchar(45) NOT NULL,
  `person_number` int(12) NOT NULL,
  `person_email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sponser`
--

INSERT INTO `sponser` (`title`, `sponse_code`, `person_name`, `person_number`, `person_email`) VALUES
('Fame Technologies', 'FAME18', 'vasanth', 1234556, 'v@s'),
('Dreamatwork', 'DAW18', 'karnanidhi', 1234578, 'appa@s'),
('Infosys', 'INFY18', 'kumari', 234668, 'amma@s'),
('TCS', 'TSC18	', 'naresh kumar', 123367, 'appu@s'),
('Accenture	', 'ACC18', 'swetha k', 12468, 'ammu@s'),
('', '', '', 0, ''),
('', '', '', 0, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
