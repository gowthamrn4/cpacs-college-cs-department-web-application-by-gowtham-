-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 26, 2017 at 08:23 AM
-- Server version: 5.1.30
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cs`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `image`) VALUES
(1, 'java', 'upload/CharacterAnimationMayaTutorial.pdf'),
(2, 'haa', 'upload/Android_-_a_programmers_guide.pdf'),
(3, 'c#', 'upload/0672335697.pdf'),
(7, 'j', 'upload/lecture3.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `userid` varchar(100) NOT NULL,
  `news` text NOT NULL,
  `image` int(11) NOT NULL,
  `no` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=4 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`userid`, `news`, `image`, `no`) VALUES
('', '', 0, 1),
('', 'hiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii', 0, 2),
('', 'hiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `letter`
--

CREATE TABLE IF NOT EXISTS `letter` (
  `userid` varchar(100) NOT NULL,
  `to` varchar(100) NOT NULL,
  `msg` varchar(10000) NOT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `to` (`to`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `letter`
--


-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE IF NOT EXISTS `msg` (
  `to` varchar(100) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `msg` text NOT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `to` (`to`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `msg`
--


-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `userid` varchar(100) NOT NULL,
  `msg` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `news`
--


-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE IF NOT EXISTS `rank` (
  `no` int(50) NOT NULL AUTO_INCREMENT,
  `class` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `rollno` int(100) NOT NULL,
  `regno` varchar(100) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=4 ;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`no`, `class`, `name`, `rollno`, `regno`, `image`) VALUES
(1, 'Bsc CS 1St year', 'Gowtham', 14723, 'B4S10278', 'upload/gm.jpg'),
(2, 'Bsc CS 1St year', 'Karthikeyan ', 14738, 'B4S10279 ', '1st/IMG_20170113_090640.jpg'),
(3, 'Bsc CS 1St year', 'Rahul ', 14728, 'B4S1081 ', '1st/IMG_20170113_112936.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `idno` int(50) NOT NULL,
  `rollno` int(40) NOT NULL AUTO_INCREMENT,
  `regno` varchar(40) NOT NULL,
  `name` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `email` varchar(80) NOT NULL,
  `sex` text NOT NULL,
  `phone` int(50) NOT NULL,
  `fathername` text NOT NULL,
  `mothername` int(11) NOT NULL,
  `religion` text NOT NULL,
  `address` varchar(500) NOT NULL,
  PRIMARY KEY (`rollno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14747 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`idno`, `rollno`, `regno`, `name`, `class`, `image`, `email`, `sex`, `phone`, `fathername`, `mothername`, `religion`, `address`) VALUES
(3, 14720, 'HGHGF8675 ', 'Bharth ', 'Bsc Cs 1st Year', '1st/IMG_20151210_102141.jpg', 'gomwt@gmail.com ', 'Male', 5957687, 'JHJ ', 0, 'H ', 'bodi'),
(1, 14723, 'B4S10278  ', 'S.Gowtham  ', 'Bsc Cs 1st Year', '1st/gm.jpg', 'gowthamrn4@gmail.com  ', 'Male', 2147483647, 'K.Selvam  ', 0, 'Hindu  ', 'kelachokkanathapuram'),
(2, 14724, 'B4S10279', 'Karthikeyan', 'Bsc Cs 1st Year', '1st/IMG_20170113_090640.jpg', 'gm@gmail.com', 'Male', 2147483647, 'ka', 0, 'hindu', 'bodi'),
(99, 12345, 'hj76ghhg', 'hg', 'Bsc Cs 1st Year', '1st/20160822_102311.jpg', 'h', 'Male', 0, 'gh', 0, 'g', 'hg'),
(6, 14746, 'y', 'ty', 'Bsc Cs 1st Year', '1st/20160822_093322.jpg', 'yt', 'Male', 0, 'y', 0, 't', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `student1`
--

CREATE TABLE IF NOT EXISTS `student1` (
  `idno` int(50) NOT NULL,
  `rollno` int(40) NOT NULL,
  `regno` varchar(40) NOT NULL,
  `name` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `email` varchar(80) NOT NULL,
  `sex` text NOT NULL,
  `phone` int(50) NOT NULL,
  `fathername` text NOT NULL,
  `mothername` int(11) NOT NULL,
  `religion` text NOT NULL,
  `address` varchar(500) NOT NULL,
  PRIMARY KEY (`rollno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student1`
--

INSERT INTO `student1` (`idno`, `rollno`, `regno`, `name`, `class`, `image`, `email`, `sex`, `phone`, `fathername`, `mothername`, `religion`, `address`) VALUES
(878, 78, '8', '78', 'Bsc Cs 1st Year', '2nd/1z4e4ut.jpg', '87', 'Male', 78, '78', 78, '78', '78');

-- --------------------------------------------------------

--
-- Table structure for table `studentthi`
--

CREATE TABLE IF NOT EXISTS `studentthi` (
  `idno` int(50) NOT NULL,
  `rollno` int(40) NOT NULL,
  `regno` varchar(40) NOT NULL,
  `name` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `email` varchar(80) NOT NULL,
  `sex` text NOT NULL,
  `phone` int(50) NOT NULL,
  `fathername` text NOT NULL,
  `mothername` int(11) NOT NULL,
  `religion` text NOT NULL,
  `address` varchar(500) NOT NULL,
  PRIMARY KEY (`rollno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentthi`
--

INSERT INTO `studentthi` (`idno`, `rollno`, `regno`, `name`, `class`, `image`, `email`, `sex`, `phone`, `fathername`, `mothername`, `religion`, `address`) VALUES
(876, 76, '7', '67', 'Bsc Cs 1st Year', '3rd/1z4e4ut.jpg', '7', 'Male', 67, '6', 76, '7', '67');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE IF NOT EXISTS `timetable` (
  `time1` varchar(50) NOT NULL,
  `time2` varchar(50) NOT NULL,
  `time3` varchar(50) NOT NULL,
  `time4` varchar(44) NOT NULL,
  `time5` varchar(50) NOT NULL,
  `twotime1` varchar(40) NOT NULL,
  `twotime2` varchar(33) NOT NULL,
  `twotime3` varchar(50) NOT NULL,
  `twotime4` varchar(44) NOT NULL,
  `twotime5` varchar(50) NOT NULL,
  `thrtime1` varchar(50) NOT NULL,
  `thrtime2` varchar(55) NOT NULL,
  `thrtime3` varchar(50) NOT NULL,
  `thrtime4` varchar(50) NOT NULL,
  `thrtime5` varchar(50) NOT NULL,
  `fortime1` varchar(44) NOT NULL,
  `fortime2` varchar(50) NOT NULL,
  `fortime3` varchar(50) NOT NULL,
  `fortime4` varchar(50) NOT NULL,
  `fortime5` varchar(50) NOT NULL,
  `fivtime1` varchar(50) NOT NULL,
  `fivtime2` varchar(50) NOT NULL,
  `fivtime3` varchar(50) NOT NULL,
  `fivtime4` varchar(50) NOT NULL,
  `fivtime5` varchar(50) NOT NULL,
  `sixtime1` varchar(44) NOT NULL,
  `sixtime2` varchar(50) NOT NULL,
  `sixtime3` varchar(50) NOT NULL,
  `sixtime4` varchar(50) NOT NULL,
  `sixtime5` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  PRIMARY KEY (`year`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`time1`, `time2`, `time3`, `time4`, `time5`, `twotime1`, `twotime2`, `twotime3`, `twotime4`, `twotime5`, `thrtime1`, `thrtime2`, `thrtime3`, `thrtime4`, `thrtime5`, `fortime1`, `fortime2`, `fortime3`, `fortime4`, `fortime5`, `fivtime1`, `fivtime2`, `fivtime3`, `fivtime4`, `fivtime5`, `sixtime1`, `sixtime2`, `sixtime3`, `sixtime4`, `sixtime5`, `year`) VALUES
('OS', 'C++', 'DBMS', 'TAMIL', 'ENG', 'WEB', 'JAVA', 'LAB', 'ENG', 'C++', 'LAB', 'LAB', 'EVS', 'JAVA', 'JAVA', 'LAB', 'C++', 'C++', 'VB', 'VB', 'OS', 'VB', 'VB', 'WEB', 'JAVA', 'DATA', 'DBMS', 'WEB', 'OS', 'EVS', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(50) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `rollno` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `img` text NOT NULL,
  `address` varchar(1000) NOT NULL,
  `sex` text NOT NULL,
  `bdate` varchar(30) NOT NULL,
  `year` varchar(100) NOT NULL,
  `fname` text NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `userid`, `rollno`, `password`, `phone`, `img`, `address`, `sex`, `bdate`, `year`, `fname`) VALUES
('madhana', '000007', 14723, 'gowri', 987654544, 'upload/gmm.jpg', 'u', 'Male', '1996', 'Bsc Cs 3rd Year', ''),
('m', '1', 0, 'mari', 0, 'upload/', 'gfgfy', 'Female', '455', 'Bsc Cs 3rd Year', ''),
('rahul', '12345', 686868, 'gm', 8688, 'upload/IMG_20141031_104916.jpg', '6767', 'Male', '35', 'Bsc Cs 3rd Year', ''),
('mari', '1`', 3423526, 'dfghj', 0, 'upload/', 'dfvgtftyed', 'Female', '545566', 'Bsc Cs 3rd Year', ''),
('56577', '45456', 1233, 'gffrfh', 35465, 'upload/2003 Cadillac Sixteen Concept.jpg', 'dgfrhjjjjjjjj', 'Male', '353566', 'Bsc Cs 1st Year', ''),
('admin', 'cpacs', 14723, 'gowtham', 2147483647, 'upload/gm.jpg', 'bodi', 'Male', '1996,11,21', 'Bsc Cs 3rd Year', ''),
('CS', 'cpacs@', 0, 'gowtham', 2147483647, 'upload/', 'c.p.a.college', 'Male', '---------', 'Others', ''),
('gmgm', 'gm', 1345, 'gm', 4656767, 'upload/', 'jghg', 'Male', '54545', 'Bsc Cs 3rd Year', ''),
('gowri@gmail.com', 'gowri', 14709, 'gm', 78787654, 'upload/IMG_20170113_101627.jpg', 'bodi', 'Female', '1996', 'Bsc Cs 3rd Year', ''),
('Gowtham', 'gowtham@', 14723, 'gowtham', 2147483647, 'C:\\Users\\GMG\\Pictures\\s.s   HD  Photos (64).jpg', 'Bodinayakanur,theni', 'Male', '21/11/1996', 'Bsc Cs 3rd Year', ''),
('vijay', 'gowthammmmmm', 43435, 'gm', 0, 'C:\\Users\\GMG\\Pictures\\s.s   HD  Photos (64).jpg', 'rtrtrt', 'Male', 'rtrt', 'Bsc Cs 3rd Year', ''),
('Gowtham', 'Gowthamrn4@gmail.com', 14723, 'gm', 2147483647, 'upload/IMG_20160302_104942er.jpg', '5/w,eate street ,kelachokkanathapuram', 'Male', '1996/21/11', 'Bsc Cs 3rd Year', ''),
('gm', 'rahul', 1233, 'rahul', 5767878, 'J:\\Photos\\CAR\\1BrigadeDamaged-1600.jpg', 'lllllllllll', 'Male', 'hjjj', 'Bsc Cs 2nd Year', ''),
('rinson', 'rinson@', 14729, 'ferno', 2147483647, 'upload/', 'gbjfjv', 'Male', '5.6.95', 'Bsc Cs 3rd Year', ''),
('uyu', 'uuy', 0, 'yu', 0, 'upload/gmm.jpg', 'yu', 'Select', 'yu', 'Bsc Cs 1st Year', ''),
('yut', 'yr', 0, 'tr', 0, 'upload/IMG_20170113_090209.jpg', 'rtrtr', 'Male', 'rt', 'Bsc Cs 2nd Year', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `msg`
--
ALTER TABLE `msg`
  ADD CONSTRAINT `msg_ibfk_1` FOREIGN KEY (`to`) REFERENCES `user` (`userid`),
  ADD CONSTRAINT `msg_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;
