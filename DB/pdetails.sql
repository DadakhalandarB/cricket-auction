-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 27, 2019 at 06:51 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pdetails`
--
CREATE DATABASE IF NOT EXISTS `pdetails` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pdetails`;

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE IF NOT EXISTS `list` (
  `id` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `player` varchar(20) NOT NULL,
  `credits` varchar(10) NOT NULL,
  `matches` varchar(50) NOT NULL,
  UNIQUE KEY `credits` (`credits`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `list_table`
--

CREATE TABLE IF NOT EXISTS `list_table` (
  `name` varchar(20) NOT NULL,
  `player` varchar(20) NOT NULL,
  `credits` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_table`
--

INSERT INTO `list_table` (`name`, `player`, `credits`) VALUES
('dadu', 'bats man', '80'),
('alllu', 'bowler', '90'),
('', '', ''),
('mohit', 'algrounder', ''),
('mohit', 'algrounder', '91'),
('kavya', 'bowler', '80');

-- --------------------------------------------------------

--
-- Table structure for table `loginform`
--

CREATE TABLE IF NOT EXISTS `loginform` (
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginform`
--

INSERT INTO `loginform` (`user`, `pass`) VALUES
('dadu', 'dadu123');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE IF NOT EXISTS `players` (
  `id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  `batst` varchar(50) NOT NULL,
  `bowlst` varchar(50) NOT NULL,
  `baseprice` varchar(20) NOT NULL,
  `matches` varchar(20) NOT NULL,
  `runs` varchar(20) NOT NULL,
  `strikerate` varchar(20) NOT NULL,
  `wickets` varchar(20) NOT NULL,
  `economy` varchar(20) NOT NULL,
  `soldprice` varchar(20) NOT NULL,
  UNIQUE KEY `name` (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `id_2` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `name`, `role`, `batst`, `bowlst`, `baseprice`, `matches`, `runs`, `strikerate`, `wickets`, `economy`, `soldprice`) VALUES
('', 'dhoni', '', '', '', '', '', '', '', '', '', ''),
('1', 'dhoni', 'wicketkeeper', 'Right Handed', '-', '2CRORES', '200', '10000', '80', '100', '100', ''),
('10', 'ROHIT ', 'batsman', 'RIGHT HANDED', 'RIGHT OFF SPIN', '2CRORES', '124', '4850', '138', '12', '10.8', ''),
('11', 'HARDIK', 'allrounder', 'RIGHT HANDED', 'RIGHT ARM MEDIUM FAST', '2CRORES', '56', '1850', '162', '78', '8.3', ''),
('12', 'BUTTLER', 'wicketkeeper', 'RIGHT HANDED', '-', '2CRORES', '62', '2478', '175', '-', '-', ''),
('13', 'KL RAHUL', 'batsman', 'RIGHT HANDED', '-', '2CRORES', '46', '2478', '145', '-', '-', ''),
('14', 'E.LEWIS', 'batsman', 'LEFT HANDED', '-', '2CRORES', '28', '1478', '152', '-', '-', ''),
('15', 'C.LYNN', 'batsman', 'RIGHT HANDED', '-', '2CRORES', '57', '2879', '174', '-', '-', ''),
('16', 'D.MILLER', 'batsman', 'LEFT HANDED', '-', '1.5CRORES', '69', '3250', '158', '-', '-', ''),
('17', 'C.MUNRO', 'batsman', 'LEFT HANDED', '-', '1.5CRORES', '48', '2345', '162', '-', '-', ''),
('18', 'A.RAHANE', 'batsman', 'RIGHT HANDED', '-', '1.5CRORES', '87', '2879', '175', '-', '-', ''),
('19', 'S.RAINA', 'batsman', 'LEFT HANDED', '-', '1.5CRORES', '123', '4578', '143', '-', '-', ''),
('2', 'kohli', 'batsman', 'Right Handed', '-', '2CRORES', '158', '4876', '145', '-', '100', '1,00,000'),
('20', 'S.DHAWAN', 'batsman', 'LEFT HANDED', '-', '1.5CRORES', '108', '3565', '128', '-', '-', ''),
('21', 'R.UTHAPPA', 'wicketkeeper', 'RIGHT HANDED', '-', '1.5CRORES', '134', '4201', '147', '-', '-', ''),
('22', 'y.singh', 'batsman', 'LEFT HANDED', '-', '1.5CRORES', '156', '3245', '138', '-', '-', ''),
('23', 'S.GILL', 'batsman', 'RIGHT HANDED', '-', '1.5CRORES', '21', '875', '142', '-', '-', ''),
('24', 'SURYAKUMAR', 'batsman', 'RIGHT HANDED', '-', '1.5CRORES', '45', '2345', '158', '-', '-', ''),
('25', 'MANISH PANDEY', 'batsman', 'RIGHT HANDED', '-', '1.5CRORES', '87', '3245', '136', '-', '-', ''),
('26', 'PRITHVI SHAW', 'batsman', 'RIGHT HANDED', '-', '1.5CRORES', '18', '765', '152', '-', '-', ''),
('27', 'RINKU SINGH', 'batsman', 'LEFT HANDED', '-', '1.5CRORES', '12', '564', '168', '-', '-', ''),
('28', 'DUPLESIS', 'batsman', 'RIGHT HANDED', '-', '1.5CRORES', '65', '2564', '135', '-', '-', ''),
('29', 'C.GAYLE', 'batsman', 'LEFT HANDED', '-', '1.5CRORES', '109', '4123', '168', '-', '-', ''),
('3', 'A B D', 'batsman', 'Right Handed bat', '-', '2CRORES', '200', '9000', '80', '100', '100', '1,00,000'),
('30', 'M.GUPTIL', 'batsman', 'RIGHT HANDED', '-', '1.5CRORES', '24', '345', '123', '-', '-', ''),
('31', 'S.HETMEYER', 'batsman', 'LEFT HANDED', '-', '1.5CRORES', '19', '675', '157', '-', '-', ''),
('32', 'S.IYER', 'batsman', 'RIGHT HANDED', '-', '1.5CRORES', '58', '1875', '154', '-', '-', ''),
('33', 'K.WILLIAMSON', 'batsman', 'RIGHT HANDED', '-', '1.5CRORES', '62', '2345', '142', '-', '-', ''),
('34', 'K.JADAV', 'batsman', 'RIGHT HANDED', '-', '1CRORES', '78', '2678', '128', '-', '-', ''),
('35', 'M.AGARWAL', 'batsman', 'RIGHT HANDED', '-', '1CRORES', '38', '1345', '124', '-', '-', ''),
('36', 'R.TRIPATHI', 'batsman', 'RIGHT HANDED', '-', '50LAKHS', '23', '568', '130', '-', '-', ''),
('37', 'M.VOHRA', '', 'RIGHT HANDED', '-', '20LAKHS', '13', '215', '110', '-', '-', ''),
('38', 'MUJEEB', '', 'Right Handed Bat', 'LEG BREAK SPIN', '50LAKHS', '28', '100', '89', '109', '3.4', ''),
('39', 'RABADA', '', 'leftt Handed Bat', 'Right-arm FAST', '1CRORES', '29', '101', '88', '209', '2.43', ''),
('4', 'BOULT', '', 'Right Handed Bat', 'LEFT HAND', '2crores', '28', '128', '87', '53', '7.2', ''),
('40', 'K YADAV', '', 'leftt Handed Bat', 'LEG BREAK SPIN', '1CRORES', '78', '150', '69', '409', '5.43', ''),
('41', 'L MALINGA', '', 'Right Handed Bat', 'Right-arm FAST', '1CRORES', '71', '152', '56', '609', '4.43', ''),
('42', 'VARUN', '', 'Right Handed Bat', 'Right-arm FAST', '1CRORES', '35', '153', '58', '63', '8.43', ''),
('43', 'BHUVI', '', 'Right Handed Bat', 'Right-arm FAST', '1CRORES', '90', '133', '65', '682', '7.43', ''),
('44', 'BEHRENDORF', '', 'Right Handed Bat', 'Right-arm FAST', '1CRORES', '39', '136', '69', '87', '9.43', ''),
('45', 'RAHUL CHAHAR', '', 'Right Handed Bat', 'LEG BREAK SPIN', '1CRORES', '38', '176', '65', '89', '10.43', ''),
('46', 'JOFRA ARCHER', '', 'Right Handed Bat', 'Right-arm FAST', '1CRORES', '38', '176', '65', '89', '10.43', ''),
('47', 'KHALEEL AHMED', '', 'Right Handed Bat', 'Right-arm FAST', '1CRORES', '38', '176', '65', '89', '10.43', ''),
('48', 'R ASHWIN', '', 'Right Handed Bat', 'RIGHT OFF SPIN', '1CRORES', '38', '176', '65', '89', '10.43', ''),
('49', 'Y CHAHAL', '', 'Right Handed Bat', 'LEG BREAK SPIN', '1CRORES', '38', '176', '65', '89', '10.43', ''),
('5', 'RUSSEL', '', 'Right Handed Bat', 'Right-arm medium', '2crores', '36', '1045', '178', '53', '8.1', ''),
('50', 'A MISHRA', '', 'Right Handed Bat', 'LEG BREAK SPIN', '1CRORES', '38', '176', '65', '89', '10.43', ''),
('51', 'B SARAN', '', 'Right Handed Bat', 'Right-arm FAST', '1CRORES', '38', '176', '65', '89', '10.43', ''),
('52', 'J UNADKAT', '', 'Right Handed Bat', 'Right-arm FAST', '1CRORES', '38', '176', '65', '89', '10.43', ''),
('53', 'SANDEEP', '', 'Right Handed Bat', 'Right-arm FAST', '1CRORES', '38', '176', '65', '89', '10.43', ''),
('54', 'MARKANDE', '', 'Right Handed Bat', 'Right-arm FAST', '1CRORES', '38', '176', '65', '89', '10.43', ''),
('55', 'MICHTELL', '', 'Right Handed Bat', 'Right-arm FAST', '1CRORES', '38', '176', '65', '89', '10.43', ''),
('56', 'SHARDUL', '', 'Right Handed Bat', 'Right-arm FAST', '1CRORES', '38', '176', '65', '89', '10.43', ''),
('57', 'CHAWLA', '', 'Right Handed Bat', 'Right-arm FAST', '1CRORES', '38', '176', '65', '89', '10.43', ''),
('58', 'SOHI', '', 'Right Handed Bat', 'LEG BREAK SPIN', '1CRORES', '38', '176', '65', '89', '10.43', ''),
('59', 'SAINI', '', 'Right Handed Bat', 'Right-arm FAST', '1CRORES', '38', '176', '65', '89', '10.43', ''),
('6', 'BUMRAH', '', 'Right Handed Bat', 'Right-arm FAST', '2crores', '45', '128', '178', '123', '6.3', ''),
('60', 'NADEEM', '', 'Right Handed Bat', 'LEG BREAK SPIN', '1CRORES', '38', '176', '65', '89', '10.43', ''),
('61', 'SHAMI', '', 'Right Handed Bat', 'Right-arm FAST', '1CRORES', '38', '176', '65', '89', '10.43', ''),
('62', 'SIRAJ', '', 'Right Handed Bat', 'Right-arm FAST', '1CRORES', '38', '176', '65', '89', '10.43', ''),
('63', 'STOKES', '', 'Right Handed Bat', 'Right-arm FAST', '1CRORES', '38', '176', '65', '89', '10.43', ''),
('64', 'WATSON', '', 'Right Handed Bat', 'Right-arm FAST', '1CRORES', '38', '176', '65', '89', '10.43', ''),
('65', 'STOINIS', '', 'Right Handed Bat', 'Right-arm FAST', '1CRORES', '38', '176', '65', '89', '10.43', ''),
('66', 'W SUNDAR', '', 'Right Handed Bat', 'Right-arm FAST', '1CRORES', '38', '176', '65', '89', '10.43', ''),
('67', 'SHAKIB', '', 'Right Handed Bat', 'Right-arm FAST', '1CRORES', '38', '176', '65', '89', '10.43', ''),
('68', 'V SHANKAR', '', 'Right Handed Bat', 'Right-arm FAST', '1CRORES', '38', '176', '65', '89', '10.43', ''),
('69', 'A PATEL', '', 'Right Handed Bat', 'Right-arm FAST', '1CRORES', '38', '176', '65', '89', '10.43', ''),
('7', 'WARNER', '', 'LEFT Handed Bat', '-', '2crores', '87', '4021', '145', '-', '-', ''),
('70', 'M ALI', '', 'Right Handed Bat', 'Right-arm FAST', '1CRORES', '38', '176', '65', '89', '10.43', ''),
('71', 'B CUTTING', '', 'Right Handed Bat', 'Right-arm FAST', '1CRORES', '38', '176', '65', '89', '10.43', ''),
('72', 'S CURRAN', '', 'Right Handed Bat', 'Right-arm FAST', '1CRORES', '38', '176', '65', '89', '10.43', ''),
('73', 'K PANDYA', '', 'Right Handed Bat', 'Right-arm FAST', '1CRORES', '38', '176', '65', '89', '10.43', ''),
('74', 'M NABI', '', 'Right Handed Bat', 'Right-arm FAST', '1CRORES', '38', '176', '65', '89', '10.43', ''),
('75', 'K PAUL', '', 'Right Handed Bat', 'Right-arm FAST', '1CRORES', '38', '176', '65', '89', '10.43', ''),
('76', 'K GOWTHAM', '', 'Right Handed Bat', 'Right-arm FAST', '1CRORES', '38', '176', '65', '89', '10.43', ''),
('77', 'C GRANDHOME', '', 'Right Handed Bat', 'Right-arm FAST', '1CRORES', '38', '176', '65', '89', '10.43', ''),
('78', 'Y PATHAN', '', 'Right Handed Bat', 'Right-arm FAST', '1CRORES', '38', '176', '65', '89', '10.43', ''),
('79', 'BRAVO', '', 'Right Handed Bat', 'Right-arm FAST', '1CRORES', '38', '176', '65', '89', '10.43', ''),
('8', 'RASHID', '', 'RIGHT Handed Bat', 'LEG BREAK SPIN', '2crores', '58', '345', '121', '168', '6.2', ''),
('80', 'S DUBE', '', 'Right Handed Bat', 'Right-arm FAST', '1CRORES', '38', '176', '65', '89', '10.43', ''),
('81', 'S BINNY', '', 'Right Handed Bat', 'Right-arm FAST', '1CRORES', '38', '176', '65', '89', '10.43', ''),
('82', 'D HOODA', '', 'Right Handed Bat', 'Right-arm FAST', '1CRORES', '38', '176', '65', '89', '10.43', ''),
('83', 'DE KOCK', '', 'Right Handed Bat', '-', '1CRORES', '38', '176', '65', '-', '-', ''),
('84', 'D KARTHIK', '', 'Right Handed Bat', '-', '1CRORES', '38', '176', '65', '-', '-', ''),
('85', 'B STOKE', '', 'Right Handed Bat', '-', '1CRORES', '38', '176', '65', '-', '-', ''),
('86', 'R PANT', '', 'Right Handed Bat', '-', '1CRORES', '38', '176', '65', '-', '-', ''),
('87', 'I KISHAN', '', 'Right Handed Bat', '-', '1CRORES', '38', '176', '65', '-', '-', ''),
('88', 'W SAHA', '', 'Right Handed Bat', '-', '1CRORES', '38', '176', '65', '-', '-', ''),
('89', 'SAMSON', '', 'Right Handed Bat', '-', '1CRORES', '38', '176', '65', '-', '-', ''),
('9', 'SMITH', '', 'RIGHT Handed Bat', 'LEG BREAK SPIN', '2crores', '72', '2678', '135', '4', '11.2', ''),
('90', 'PARTHIV PATEL', '', 'Right Handed Bat', '-', '1CRORES', '38', '176', '65', '-', '-', ''),
('91', 'A TARE', '', 'Right Handed Bat', '-', '1CRORES', '38', '176', '65', '-', '-', '');

-- --------------------------------------------------------

--
-- Table structure for table `sold_players`
--

CREATE TABLE IF NOT EXISTS `sold_players` (
  `name` varchar(20) NOT NULL,
  `sold_to` varchar(100) NOT NULL,
  `sold_price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sold_players`
--

INSERT INTO `sold_players` (`name`, `sold_to`, `sold_price`) VALUES
('dadu', '', ''),
('dhoni', '', ''),
('dhoni', 'kkr', '5crores'),
('kholi', 'rcb', '5crores'),
('dhoni', 'csk', '5crores');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
  `t_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `owner` varchar(20) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `player` varchar(20) NOT NULL,
  `credits` varchar(20) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
