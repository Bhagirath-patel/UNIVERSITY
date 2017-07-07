-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2017 at 03:57 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `sr` int(11) NOT NULL,
  `controller` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `jdate` date NOT NULL,
  `parent` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`sr`, `controller`, `email`, `password`, `contact`, `jdate`, `parent`) VALUES
(1, 'teja', 'T@g.c', '111', 12345, '0000-00-00', 'parent'),
(12, 'jugtaram', 'j@g.c', '111', 2016, '2016-08-03', 'child');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `sr` int(11) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`sr`, `degree`, `branch`) VALUES
(1, 'b tech', 'computer science'),
(2, 'b tech', 'information technology'),
(3, 'mca', 'cse'),
(4, 'mca', 'electrical'),
(5, 'b tech', 'electrical engineering'),
(6, 'b tech', 'electronics and comunication engineering');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `sr` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`sr`, `name`, `address`, `date`, `contact`) VALUES
(1, 'Govt. Engineering College,Bikaner', 'RICCO Industrial Area,Bikaner', '2016-08-01', '12121121'),
(2, 'M B M', 'Jodhpur Rajasthan India', '2016-08-01', '0291-1514271'),
(3, 'J I E T', 'Jodhpur Rajasthan India', '2016-08-01', '0291-1515111'),
(4, 'c e t', 'bikaner', '2016-09-07', '1561456415');

-- --------------------------------------------------------

--
-- Table structure for table `degree`
--

CREATE TABLE `degree` (
  `sr` int(11) NOT NULL,
  `controller` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `parent` varchar(255) NOT NULL,
  `joiningdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `degree`
--

INSERT INTO `degree` (`sr`, `controller`, `email`, `password`, `contact`, `parent`, `joiningdate`) VALUES
(1, 'bhagi', 'b@g.c', '111', '134679', 'parent', '2016-08-09');

-- --------------------------------------------------------

--
-- Table structure for table `degree_section`
--

CREATE TABLE `degree_section` (
  `sr` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `semster` varchar(255) NOT NULL,
  `noofsemester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `degree_section`
--

INSERT INTO `degree_section` (`sr`, `name`, `year`, `semster`, `noofsemester`) VALUES
(1, 'b tech', 4, 'yes', 8),
(2, 'mca', 3, 'no', 0),
(3, 'bca', 3, 'no', 0);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `sr` int(11) NOT NULL,
  `department` varchar(255) NOT NULL,
  `controller` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `parent` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`sr`, `department`, `controller`, `email`, `password`, `parent`, `contact`) VALUES
(1, 'account', 'teja', 't@g.c', '111', 'parent', 11245),
(2, 'exam', 'kheta', 'k@g.c', '111', 'parent', 12345),
(4, 'degree', 'bhagi', 'b@g.c', '111', 'parent', 134679),
(7, 'degree_section', 'Vishal', 'v@g.c', '222', 'parent', 123132),
(8, 'news', 'rinku', 'r@g.c', '111', 'parent', 2147483647),
(9, 'student_panel', 'narendrea', 'n@g.c', '222', 'parent', 2147483647),
(10, 'problem', 'rohit', 'r@g.c', '111', 'parent', 13213132),
(11, 'research', 'Gorav', 'g@g.c', '111', 'parent', 2123123);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `sr` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jdate` date NOT NULL,
  `parent` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`sr`, `name`, `email`, `password`, `jdate`, `parent`, `department`, `contact`) VALUES
(1, 'tej', 't@g.c', '111', '0000-00-00', 'parent', 'account', 12345),
(2, 'kheta', 'k@g.c', '111', '0000-00-00', 'parent', 'exam', 12345),
(3, 'rohit', 'r@g.c', '111', '0000-00-00', 'parent', 'problem', 12345),
(4, 'bhagi', 'b@g.c', '111', '0000-00-00', 'parent', 'degree', 134689),
(5, 'op', 'b@g.c', '///', '0000-00-00', 'parent', 'event ', 44444),
(6, 'ops', 'ops@g.c', '111', '2016-05-03', 'child', 'exam', 12345),
(7, 'rinku', 'r@g.c', '111', '2016-08-15', 'parent', 'news', 121212),
(8, 'narendrea', 'n@g.c', '222', '2016-08-01', 'parent', 'student_panel', 2147483647),
(9, 'Vishal', 'v@g.c', '222', '2016-08-03', 'parent', 'degree_section', 8979),
(10, 'Gorav', 'g@g.c', '111', '2016-08-02', 'parent', 'research', 123121),
(11, 'jugtaram', 'j@g.c', '111', '2016-08-17', 'child', 'account', 2016),
(12, 'kram', 'k@g.c', '111', '2016-08-17', 'child', 'degree', 2016),
(13, 'wghdausdgh', 'a@h.n', '111', '2016-10-06', 'child', 'lmaksma', 598451),
(14, 'nmae', 'g@f.c', '121', '2016-10-07', 'child', 'employee', 48513421);

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `sr` int(11) NOT NULL,
  `controller` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `joiningdate` date NOT NULL,
  `parent` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`sr`, `controller`, `email`, `password`, `contact`, `joiningdate`, `parent`) VALUES
(1, 'kheta', 'k@g.c', '111', 1233, '2016-08-15', 'parent'),
(13, 'ops', 'ops@g.c', '111', 12345, '2016-08-01', 'child'),
(13, 'ops', 'ops@g.c', '111', 12345, '2016-08-12', 'child'),
(14, 'ops', 'ops@g.c', '111', 12345, '2016-08-01', 'child');

-- --------------------------------------------------------

--
-- Table structure for table `galary`
--

CREATE TABLE `galary` (
  `sr` int(11) NOT NULL,
  `galary_type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galary`
--

INSERT INTO `galary` (`sr`, `galary_type`, `name`) VALUES
(1, 'galary', '1'),
(2, 'event', '2'),
(3, 'event', '9'),
(4, 'campus', 'campus1'),
(5, 'galary', 'sehjfhsdf');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `sr` int(11) NOT NULL,
  `controller` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `joiningdate` date NOT NULL,
  `parent` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`sr`, `controller`, `email`, `password`, `contact`, `joiningdate`, `parent`) VALUES
(1, 'rinku', 'r@g.c', '111', '9660661213', '2016-08-01', 'parent');

-- --------------------------------------------------------

--
-- Table structure for table `news_section`
--

CREATE TABLE `news_section` (
  `sr` int(11) NOT NULL,
  `news` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_section`
--

INSERT INTO `news_section` (`sr`, `news`) VALUES
(1, 'Admission open 2017'),
(2, '6 th sem result declare soon'),
(3, ' 7th sem form available.'),
(4, 'Admit card ');

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

CREATE TABLE `problem` (
  `sr` int(11) NOT NULL,
  `controller` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `joiningdate` date NOT NULL,
  `parent` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problem`
--

INSERT INTO `problem` (`sr`, `controller`, `email`, `password`, `contact`, `joiningdate`, `parent`) VALUES
(1, 'rohit', 'r@g.c', '111', 12589, '2016-08-01', 'parent');

-- --------------------------------------------------------

--
-- Table structure for table `problem_section`
--

CREATE TABLE `problem_section` (
  `sr` int(11) NOT NULL,
  `froms` varchar(255) NOT NULL,
  `tos` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problem_section`
--

INSERT INTO `problem_section` (`sr`, `froms`, `tos`, `msg`, `parent`) VALUES
(2, 'bhagirath', 'university', 'my markseet lost', 1),
(0, 'bhagirath', 'university', 'some time later your marksheet send', 0),
(2, 'bhagirath', 'university', 'nnnn', 1),
(0, 'bhagirath', 'university', 'nahi', 0),
(2, 'mahesh', 'university', 'xszbsdcsjkbfcsdkzc', 1),
(2, 'njsans', 'university', 'dqnwedqhnd', 1),
(2, 'bhagirath', 'university', '1 st sem marksheet', 1);

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `sr` int(11) NOT NULL,
  `research_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `research`
--

INSERT INTO `research` (`sr`, `research_name`) VALUES
(1, 'Academics Reasearch'),
(2, 'Research Center'),
(5, 'International Research'),
(6, 'Sponsored Research');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `sr` int(11) NOT NULL,
  `roll_no` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `subject1` int(11) NOT NULL,
  `subject2` int(11) NOT NULL,
  `subject3` int(11) NOT NULL,
  `subject4` int(11) NOT NULL,
  `subject5` int(11) NOT NULL,
  `subject6` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`sr`, `roll_no`, `name`, `fname`, `degree`, `branch`, `semester`, `year`, `subject1`, `subject2`, `subject3`, `subject4`, `subject5`, `subject6`, `total`, `flag`) VALUES
(1, '1', 'bh', 'nj', 'b tech', 'information technology', 1, 1, 81, 12, 12, 12, 12, 121, 265, 0),
(2, '11', 'vikram', 'vvavsd', 'bca', 'computer science', 0, 1, 62, 45, 544, 54, 454, 454, 1700, 0),
(3, '123123', 'sxasxas', 'saxaxa', 'b tech', 'computer science', 2, 1, 111, 111, 111, 111, 111, 111, 666, 1),
(4, '11', 'vikram', 'vvavsd', 'bca', 'computer science', 0, 1, 32, 1111, 111, 111, 111, 11, 1111, 0);

-- --------------------------------------------------------

--
-- Table structure for table `resultbsc`
--

CREATE TABLE `resultbsc` (
  `sr` int(11) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `roll_no` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resultbsc`
--

INSERT INTO `resultbsc` (`sr`, `degree`, `roll_no`, `year`, `message`) VALUES
(1, 'bca', '11', 1, 'bca 1'),
(2, 'bca', '11', 1, 'bca 1');

-- --------------------------------------------------------

--
-- Table structure for table `resultbtech`
--

CREATE TABLE `resultbtech` (
  `sr` int(11) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `roll` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `semster` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resultbtech`
--

INSERT INTO `resultbtech` (`sr`, `degree`, `roll`, `branch`, `semster`, `year`, `message`) VALUES
(1, 'b tech', '1', 'information technology', 1, 1, 'b tech 1 1'),
(2, 'b tech', '123123', 'computer science', 2, 1, 'b tech 1 2');

-- --------------------------------------------------------

--
-- Table structure for table `resultmca`
--

CREATE TABLE `resultmca` (
  `sr` int(11) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `roll_no` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sr` int(11) NOT NULL,
  `roll_no` varchar(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `degree` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `college` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `result` int(11) NOT NULL,
  `fees` varchar(255) NOT NULL,
  `flag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sr`, `roll_no`, `name`, `fname`, `mname`, `dob`, `degree`, `branch`, `semester`, `year`, `college`, `contact`, `result`, `fees`, `flag`) VALUES
(1, '123123', 'sxasxas', 'saxaxa', 'assasc', '2016-09-10', 'b tech', 'computer science', 2, 1, 'Govt. Engineering College,Bikaner', '2132132', 666, 'no', '0'),
(2, '11', 'vikram', 'vvavsd', 'sddkadn', '2016-09-16', 'bca', 'computer science', 0, 1, 'M B M', '2123123', 1111, 'yes', '0'),
(3, '1', 'bh', 'nj', 'mk', '2016-09-13', 'b tech', 'information technology', 1, 1, 'M B M', '1321231', 265, 'no', '0');

-- --------------------------------------------------------

--
-- Table structure for table `stu_placement`
--

CREATE TABLE `stu_placement` (
  `sr` int(11) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `package` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_placement`
--

INSERT INTO `stu_placement` (`sr`, `sname`, `fname`, `company`, `package`) VALUES
(1, 'vikram', 'vvavsd', 'google', 7500000),
(2, 'bh', 'nj', 'facebook', 75500000);

-- --------------------------------------------------------

--
-- Table structure for table `vc`
--

CREATE TABLE `vc` (
  `sr` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `vcname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vc`
--

INSERT INTO `vc` (`sr`, `name`, `vcname`, `email`, `password`, `contact`) VALUES
(0, 'vc', 'A P J', 'b@g.c', '111', '9783829865');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
