-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2022 at 09:13 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placement_information`
--

-- --------------------------------------------------------

--
-- Table structure for table `eligible_courses`
--

CREATE TABLE `eligible_courses` (
  `compid` int(4) NOT NULL,
  `bcs` varchar(4) NOT NULL,
  `b_it` varchar(4) NOT NULL,
  `bec` varchar(4) NOT NULL,
  `bee` varchar(4) NOT NULL,
  `bei` varchar(4) NOT NULL,
  `bmt` varchar(4) NOT NULL,
  `bbt` varchar(4) NOT NULL,
  `bce` varchar(4) NOT NULL,
  `mca` varchar(4) NOT NULL,
  `msccs` varchar(4) NOT NULL,
  `mcs` varchar(4) NOT NULL,
  `mit` varchar(4) NOT NULL,
  `mvlsi` varchar(4) NOT NULL,
  `mrs` varchar(4) NOT NULL,
  `totEleStu` smallint(4) NOT NULL,
  `test` date NOT NULL,
  `interS` date NOT NULL,
  `interE` date NOT NULL,
  `resdt` date NOT NULL,
  `written` smallint(4) NOT NULL,
  `gd` varchar(4) NOT NULL,
  `interShortList` smallint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eligible_courses`
--

INSERT INTO `eligible_courses` (`compid`, `bcs`, `b_it`, `bec`, `bee`, `bei`, `bmt`, `bbt`, `bce`, `mca`, `msccs`, `mcs`, `mit`, `mvlsi`, `mrs`, `totEleStu`, `test`, `interS`, `interE`, `resdt`, `written`, `gd`, `interShortList`) VALUES
(77663, ' ', '15', '15 ', '15 ', '15', '15', '15', '15', '15', '15', '15', '15', '15', '15', 15, '0000-00-00', '2020-12-15', '2021-12-15', '2020-12-15', 139, '56', 15),
(0, ' ', '', '15 ', '15 ', '15', '15', '15', '15', '15', '', '51', '15', '15', '15', 0, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 0, '', 0),
(0, ' ', '', '15 ', '15 ', '15', '15', '15', '15', '15', '', '51', '15', '15', '15', 0, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 0, '', 0),
(776634, '', '', '', '', '', '', '', '', '', '', '', 'h', '', '', 0, '0000-00-00', '2022-02-17', '0000-00-00', '0000-00-00', 4, '', 0),
(0, ' ', '', '15 ', '15 ', '15', '15', '15', '15', '15', '', '51', '15', '15', '15', 0, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 0, '', 0),
(0, ' ', '', '15 ', '15 ', '15', '15', '15', '15', '15', '', '51', '15', '15', '15', 0, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `placementcompanies`
--

CREATE TABLE `placementcompanies` (
  `comp_id` int(4) NOT NULL,
  `comp_nm` varchar(100) NOT NULL,
  `c_short_nm` varchar(10) NOT NULL,
  `adrss` varchar(100) NOT NULL,
  `city` varchar(10) NOT NULL,
  `stat` varchar(20) NOT NULL,
  `pin` mediumint(6) NOT NULL,
  `ug_ctc` decimal(4,2) NOT NULL,
  `pg_ctc` decimal(4,2) NOT NULL,
  `stipend` decimal(9,0) NOT NULL,
  `tmi` varchar(4) NOT NULL,
  `smi` varchar(4) NOT NULL,
  `fte` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `placementcompanies`
--

INSERT INTO `placementcompanies` (`comp_id`, `comp_nm`, `c_short_nm`, `adrss`, `city`, `stat`, `pin`, `ug_ctc`, `pg_ctc`, `stipend`, `tmi`, `smi`, `fte`) VALUES
(12, 'qwe', '', '', '', '', 0, '0.00', '0.00', '0', '', '', ''),
(22, 'dd', '', '', '', '', 0, '0.00', '0.00', '0', '', '', ''),
(23, 'd', '', '', '', '', 0, '0.00', '0.00', '0', '', '', ''),
(44, 'sdsdf', 'v', 'cfvf', 'sgd', 'dvs', 555555, '0.00', '0.00', '0', '', '', ''),
(45, 'abc', 'aa', 'gng', '', '', 0, '0.00', '0.00', '0', '', '', ''),
(66, 'asdf', 'asdf', 'dvbdxvx', 'delhi', 'Delhi', 800012, '55.00', '34.33', '7', '3', '93', '3444'),
(99, 'asdf', 'asdf', 'dvbdxvx', 'delhi', 'Delhi', 800012, '55.00', '34.33', '75', '8', '9', '34'),
(2211, 'asdf', 'asdf', 'dvbdxvx', 'delhi', 'Delhi', 800012, '55.00', '34.33', '7', '', '', ''),
(22222, 'fgd', '', '', '', '', 0, '0.00', '0.00', '0', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `selected_students`
--

CREATE TABLE `selected_students` (
  `cid` int(11) NOT NULL,
  `course_id` varchar(4) NOT NULL,
  `course_nm` varchar(20) NOT NULL,
  `fte` varchar(4) NOT NULL,
  `smi` varchar(4) NOT NULL,
  `ppo_fte` tinyint(3) NOT NULL,
  `ppo_smi` tinyint(3) NOT NULL,
  `placed_st` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `selected_students`
--

INSERT INTO `selected_students` (`cid`, `course_id`, `course_nm`, `fte`, `smi`, `ppo_fte`, `ppo_smi`, `placed_st`) VALUES
(4, '43', 'czdefe', '3444', '9', 45, 127, 127),
(77663, 'ee', 'czdefe', '3444', '93', 45, 127, 127),
(7766, 'sfe3', 'czd', '34', '9', 3, 3, 44);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `placementcompanies`
--
ALTER TABLE `placementcompanies`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `selected_students`
--
ALTER TABLE `selected_students`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `cid` (`cid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
