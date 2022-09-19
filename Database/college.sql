-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2022 at 03:38 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `assignment_id` int(100) NOT NULL,
  `email` varchar(80) NOT NULL,
  `depart` varchar(50) NOT NULL,
  `year` int(50) NOT NULL,
  `class` varchar(40) NOT NULL,
  `sem` int(40) NOT NULL,
  `sub_code` int(30) NOT NULL,
  `sub_name` varchar(80) NOT NULL,
  `cdate` varchar(50) NOT NULL,
  `sdate` varchar(50) NOT NULL,
  `time` int(100) NOT NULL,
  `aqtype` varchar(80) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`assignment_id`, `email`, `depart`, `year`, `class`, `sem`, `sub_code`, `sub_name`, `cdate`, `sdate`, `time`, `aqtype`, `file`) VALUES
(1, 'uveshkhalifa7920@gmail.com', 'B.COM', 2019, 'FY', 1, 11, 'php', '2021-07-08', '2021-07-30', 12, '.png', '2291-MATH2.pdf'),
(2, 'uveshkhalifa7920@gmail.com', 'B.COM', 2019, 'FY', 2, 566, 'Ecom', '2021-06-02', '2021-06-25', 12, '.png', '3453-MATHs.pdf'),
(3, 'khalifauvesh4320@gmail.com', 'M.COM', 2019, 'FY', 3, 110, 'jva', '2021-06-30', '2021-06-30', 12, '.png', '1450-Adv_C_ Syllabus.pdf'),
(4, 'uveshkhalifa7920@gmail.com', 'M.COM', 2019, 'FY', 1, 110, 'php', '2021-06-18', '2021-06-27', 12, '.png', '5397-Adv_C_ Syllabus.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `a_registration`
--

CREATE TABLE `a_registration` (
  `admin_id` int(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `street_address` varchar(100) NOT NULL,
  `street_address_line_2` varchar(100) NOT NULL,
  `country` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(40) NOT NULL,
  `zip` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `area_code` int(5) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `area_code1` int(5) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `department` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `passing_year` int(10) NOT NULL,
  `percentage` int(100) NOT NULL,
  `pwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a_registration`
--

INSERT INTO `a_registration` (`admin_id`, `fname`, `mname`, `lname`, `gender`, `dob`, `street_address`, `street_address_line_2`, `country`, `city`, `state`, `zip`, `email`, `area_code`, `phone_no`, `area_code1`, `mobile_no`, `department`, `qualification`, `passing_year`, `percentage`, `pwd`) VALUES
(1, 'Mahmaduvesh', 'majid', 'khalifa', 'MALE', '1999-06-02', 'khadsupa', 'khalifa street, at & post Kjhadsupa', 'india', 'navsari', 'gujarat', 3456, 'uveshkhalifa79@gmail.com', 91, 2147483647, 91, 2147483647, 'B.COM', 'M.COM', 2020, 89, '12345qwer');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(100) NOT NULL,
  `class_name` varchar(100) NOT NULL,
  `year` int(100) NOT NULL,
  `course_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(100) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `phone` int(10) NOT NULL,
  `comments` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `c_id` int(100) NOT NULL,
  `course` varchar(90) NOT NULL,
  `date` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`c_id`, `course`, `date`) VALUES
(1, 'Nursing', '2021-06-26'),
(2, 'ANM', '2021-06-18'),
(3, 'mahm', '2021-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(100) NOT NULL,
  `name` varchar(80) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(70) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `year` int(30) NOT NULL,
  `class` varchar(40) NOT NULL,
  `sem` int(30) NOT NULL,
  `number` int(10) NOT NULL,
  `feedback_message` varchar(150) NOT NULL,
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `gender`, `email`, `dept`, `year`, `class`, `sem`, `number`, `feedback_message`, `post_date`) VALUES
(1, 'shehnaz', 'FEMALE', 'shehnaz56@gmail.com', 'B.COM', 2019, 'FY', 2, 2147483647, 'material usefull.', '2021-06-10'),
(2, 'Aamir m shaikh', 'MALE', 'aamir786@gmail.com', 'BBA', 2019, 'TY', 5, 2147483647, 'It is very uselful s for student.', '2021-05-14');

-- --------------------------------------------------------

--
-- Table structure for table `f_registration`
--

CREATE TABLE `f_registration` (
  `faculty_id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `dob` varchar(80) NOT NULL,
  `age` int(80) NOT NULL,
  `street_address` varchar(100) NOT NULL,
  `street_address_line_2` varchar(100) NOT NULL,
  `country` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(40) NOT NULL,
  `zip` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `area_code` int(5) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `department` varchar(60) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `passing_year` int(50) NOT NULL,
  `percentage` int(100) NOT NULL,
  `year` int(50) NOT NULL,
  `month` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `f_registration`
--

INSERT INTO `f_registration` (`faculty_id`, `title`, `fname`, `mname`, `lname`, `gender`, `dob`, `age`, `street_address`, `street_address_line_2`, `country`, `city`, `state`, `zip`, `email`, `area_code`, `phone_no`, `department`, `qualification`, `passing_year`, `percentage`, `year`, `month`, `pwd`) VALUES
(1, 'Mr.', 'Uvesh', 'm', 'Khalifa', 'MALE', '2021-06-04', 55, 'khadsupa', 'khalifa mahollo', 'INDIA', 'NAVSARI', 'GUJARAT', 3449, 'uveshkhalifa7920@gmail.com', 91, 2147483647, 'B.COM', 'M.COM', 2020, 90, 1, '(4)-April', '123@#'),
(2, 'Mr.', 'Aamir', 'm', 'Shaikh', 'MALE', '2000-06-23', 29, 'vapi', 'dungra colony , near hafsha masjid', 'india', 'VAPI', 'GUJARAT', 1234, 'aamirshaikh4545@gmail.com', 91, 2147483647, 'BCA', 'MCA', 2018, 88, 2, '(2)-February', '12345678'),
(4, 'Dr.', 'Akhil', 'm', 'patel', 'Male', '2000-06-28', 38, 'amalsad', 'near vinshu scoity', 'india', 'billimora', 'gujarat', 1234, 'akhil123@gmail.com', 12, 989867423, 'B.COM', 'M.COM', 2017, 90, 3, '(3)-march', 'qweqwe123'),
(5, 'proof.', 'Ankit', 'm', 'Masurya', 'MALE', '1998-06-25', 30, 'Gandevi', 'gandevi road char rasta', 'india', 'gandevi', 'gujarat', 1234, 'ankit0698@gmail.com', 91, 2147483647, 'BBA', 'MBA', 2017, 89, 3, '(2)-February', 'qazqaz123');

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

CREATE TABLE `journal` (
  `journal_id` int(100) NOT NULL,
  `email` varchar(80) NOT NULL,
  `depart` varchar(50) NOT NULL,
  `year` int(50) NOT NULL,
  `class` varchar(40) NOT NULL,
  `sem` int(40) NOT NULL,
  `sub_code` int(30) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  `cdate` varchar(100) NOT NULL,
  `sdate` varchar(50) NOT NULL,
  `time` int(60) NOT NULL,
  `jftype` varchar(50) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `journal`
--

INSERT INTO `journal` (`journal_id`, `email`, `depart`, `year`, `class`, `sem`, `sub_code`, `sub_name`, `cdate`, `sdate`, `time`, `jftype`, `file`) VALUES
(1, 'uveshkhalifa79@gmail.com', 'B.COM', 2020, 'SY', 2, 110, 'php', '2021-06-02', '2021-06-19', 12, '.png', '9555-Model Question of Ds[304].pdf');

-- --------------------------------------------------------

--
-- Table structure for table `mat`
--

CREATE TABLE `mat` (
  `mat_id` int(100) NOT NULL,
  `dept` varchar(80) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mat`
--

INSERT INTO `mat` (`mat_id`, `dept`, `file`) VALUES
(2, 'bca', '6944-rd1.jpg'),
(3, 'bca', '3361-rd1.jpg'),
(4, 'bcom', '3725-rd1.jpg'),
(5, 'bca', '2416-imge.png'),
(6, 'bba', '4402-rd1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `materials_id` int(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(80) NOT NULL,
  `depart` varchar(50) NOT NULL,
  `year` int(100) NOT NULL,
  `class` varchar(50) NOT NULL,
  `sem` int(50) NOT NULL,
  `sub_code` int(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `ftype` varchar(100) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`materials_id`, `fname`, `mname`, `lname`, `gender`, `email`, `depart`, `year`, `class`, `sem`, `sub_code`, `sub_name`, `date`, `ftype`, `file`) VALUES
(1, 'Mahmaduvesh', 'm', 'khalifa', 'MALE', 'uveshkhalifa7920@gmail.com', 'B.COM', 2019, 'FY', 1, 566, 'Ecom', '2021-06-25', '.jpg', '6796-UNIT-5_Pointer-1.pdf'),
(2, 'Mahmaduvesh', 'm', 'khalifa', 'MALE', 'khalifauvesh4320@gmail.com', 'M.COM', 2019, 'FY', 3, 110, 'php', '2021-06-26', '.png', '4315-UNIT-3_Structures & Union.pdf'),
(3, 'yuvi', 'm', 'mjid', 'MALE', 'yuvi434@gmail.com', 'M.COM', 2019, 'FY', 1, 11, 'php', '2021-06-19', '.png', '4391-Adv_C_ Syllabus.pdf'),
(5, 'Akhil', 'm', 'shukr', 'MALE', 'khalifauvesh4320@gmail.com', 'B.COM', 2019, 'SY', 5, 110, 'vb', '2021-06-12', '.png', '9253-DS imp questions[304] (1).pdf'),
(6, 'Mahmaduvesh', 'm', 'khalifa', 'MALE', 'uveshkhalifa79@gmail.com', 'M.COM', 2019, 'SY', 1, 11, 'Ecom', '2021-06-13', '.jpg', '2407-Model Question of Ds[304].pdf'),
(7, 'Mahmaduvesh', 'm', 'khalifa', 'MALE', 'khalifauvesh4320@gmail.com', 'B.COM', 2019, 'FY', 1, 110, 'Ecom', '2021-06-18', '.pdf', '1973-dbms_unit1-converted.pdf'),
(8, 'Mahmad', 'm', 'khalifa', 'MALE', 'uveshkhalifa20@gmail.com', 'MCA', 2020, 'SY', 2, 110, 'php', '2021-06-21', '.png', '9803-Certificate[shehnaz] -.png');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `course` varchar(50) NOT NULL,
  `year` int(100) NOT NULL,
  `sem` int(10) NOT NULL,
  `notice` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `query_id` int(100) NOT NULL,
  `eno` int(100) NOT NULL,
  `rno` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(80) NOT NULL,
  `area_code` int(5) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `year` int(50) NOT NULL,
  `class` varchar(40) NOT NULL,
  `sem` int(30) NOT NULL,
  `sub_code` int(50) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  `query` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`query_id`, `eno`, `rno`, `fname`, `mname`, `lname`, `gender`, `email`, `area_code`, `phone_no`, `address`, `date`, `department`, `year`, `class`, `sem`, `sub_code`, `sub_name`, `query`) VALUES
(1, 1011, 1, 'Uvesh', 'm', 'Khalifa', 'm', 'khalifauvesh4320@gmail.com', 0, 0, '', '', 'BBA', 2019, 'TY', 2, 11, 'Ecom', 'abcd'),
(2, 101, 2, 'Mahmaduvesh', 'm', 'Khalifa', 'MALE', 'uveshkhalifa7920@gmail.com', 91, 2147483647, 'aa', '2021-06-03', 'M.COM', 2020, 'SY', 1, 11, 'php', 'asasas'),
(3, 1011, 2, 'Uvesh', 'm', 'Khalifa', 'OTHER', 'yuvi434@gmail.com', 91, 2147483647, 'aa', '2021-06-12', 'M.COM', 2020, 'SY', 2, 11, 'jvaa', 'asasas'),
(4, 1011, 2, 'uvesh', 'm', 'khalifa', 'MALE', 'uveshkhalifa20@gmail.com', 91, 2147483647, 'khalifa mahollo,Khadsupa', '2021-05-10', 'BCA', 2020, 'FY', 2, 109, 'op', 'materials not provided.'),
(5, 101, 2, 'Uvesh', 'm', 'khalifa', 'MALE', 'khalifauvesh4320@gmail.com', 91, 2147483647, 'khalifa mahollo,Khadsupa', '2021-05-14', 'B.COM', 2019, 'FY', 1, 110, 'php', 'materials not provided.');

-- --------------------------------------------------------

--
-- Table structure for table `question_bank`
--

CREATE TABLE `question_bank` (
  `question_bank_id` int(100) NOT NULL,
  `email` varchar(80) NOT NULL,
  `depart` varchar(50) NOT NULL,
  `year` int(50) NOT NULL,
  `class` varchar(40) NOT NULL,
  `sem` int(30) NOT NULL,
  `sub_code` int(30) NOT NULL,
  `sub_name` varchar(80) NOT NULL,
  `date` varchar(80) NOT NULL,
  `qbtype` varchar(100) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_bank`
--

INSERT INTO `question_bank` (`question_bank_id`, `email`, `depart`, `year`, `class`, `sem`, `sub_code`, `sub_name`, `date`, `qbtype`, `file`) VALUES
(1, 'uveshkhalifa8820@gmail.com', 'M.COM', 2019, 'TY', 1, 11, 'jvaa', '12', '.png', '7636-trends.docx'),
(2, 'khalifauvesh4320@gmail.com', 'M.COM', 2020, 'FY', 3, 11, 'php', '', '', '4249-slider_03.jpg'),
(3, 'khalifauvesh4320@gmail.com', 'M.COM', 2020, 'FY', 3, 11, 'php', '2021-06-29', '.jpg', '8600-slider_03.jpg'),
(4, 'uveshkhalifa7920@gmail.com', 'B.COM', 2019, 'FY', 1, 11, 'jva', '2021-06-24', '.png', '7857-UNIT-5_Pointer-1.pdf'),
(5, 'uveshkhalifa7920@gmail.com', 'BBA', 2019, 'FY', 1, 110, 'php', '2021-06-12', '.png', '6686-ICT Unit-5.pdf'),
(6, 'yuvi434@gmail.com', 'M.COM', 2020, 'FY', 1, 110, 'Ecom', '2021-06-23', '.png', '4345-ds journal 2.docx');

-- --------------------------------------------------------

--
-- Table structure for table `sem`
--

CREATE TABLE `sem` (
  `a_id` int(100) NOT NULL,
  `sem` int(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem`
--

INSERT INTO `sem` (`a_id`, `sem`, `date`) VALUES
(1, 7, '2021-06-13'),
(2, 8, '2021-08-13');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subject_name` int(11) NOT NULL,
  `class_name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `s_assignment`
--

CREATE TABLE `s_assignment` (
  `assup_id` int(100) NOT NULL,
  `eno` int(100) NOT NULL,
  `rno` int(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(40) NOT NULL,
  `depart` varchar(30) NOT NULL,
  `year` int(40) NOT NULL,
  `class` varchar(30) NOT NULL,
  `sem` int(20) NOT NULL,
  `sub_code` int(40) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  `ftype` varchar(50) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s_assignment`
--

INSERT INTO `s_assignment` (`assup_id`, `eno`, `rno`, `fname`, `mname`, `lname`, `gender`, `email`, `depart`, `year`, `class`, `sem`, `sub_code`, `sub_name`, `ftype`, `file`) VALUES
(1, 103, 3, 'mahmaduvesh', 'm', 'khalifa', 'MALE', 'uv1234@gmail.com', 'BCA', 2020, 'SY', 3, 102, 'os', '.pdf', '6054-JOURNAL OS.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `s_journal`
--

CREATE TABLE `s_journal` (
  `jup_id` int(100) NOT NULL,
  `eno` int(100) NOT NULL,
  `rno` int(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(60) NOT NULL,
  `depart` varchar(40) NOT NULL,
  `year` int(30) NOT NULL,
  `class` varchar(20) NOT NULL,
  `sem` int(30) NOT NULL,
  `sub_code` int(40) NOT NULL,
  `sub_name` varchar(40) NOT NULL,
  `ftype` varchar(50) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s_journal`
--

INSERT INTO `s_journal` (`jup_id`, `eno`, `rno`, `fname`, `mname`, `lname`, `gender`, `email`, `depart`, `year`, `class`, `sem`, `sub_code`, `sub_name`, `ftype`, `file`) VALUES
(1, 1011, 1, 'uvsh', 'm', 'khalifa', 'MALE', 'uv1234@gmail.com', 'BCA', 2020, 'SY', 3, 103, 'oop', '.doc', '5280-JOURNAL OOP.docx');

-- --------------------------------------------------------

--
-- Table structure for table `s_registration`
--

CREATE TABLE `s_registration` (
  `student_id` int(100) NOT NULL,
  `eno` int(50) NOT NULL,
  `rno` int(40) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `street_address` varchar(100) NOT NULL,
  `street_address_line_2` varchar(100) NOT NULL,
  `country` varchar(30) NOT NULL,
  `city` varchar(40) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `area_code` int(5) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `area_code1` int(5) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `department` varchar(100) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `passing_year` int(50) NOT NULL,
  `percentage` int(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `relation` varchar(80) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pcode` int(5) NOT NULL,
  `pnumber` int(10) NOT NULL,
  `occupation` varchar(80) NOT NULL,
  `pwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s_registration`
--

INSERT INTO `s_registration` (`student_id`, `eno`, `rno`, `fname`, `mname`, `lname`, `gender`, `dob`, `street_address`, `street_address_line_2`, `country`, `city`, `state`, `zip`, `email`, `area_code`, `phone_no`, `area_code1`, `mobile_no`, `department`, `qualification`, `passing_year`, `percentage`, `category`, `relation`, `pname`, `pcode`, `pnumber`, `occupation`, `pwd`) VALUES
(1, 101, 1, 'Mahmaduvesh', 'Majid', 'Khalifa', 'MALE', '2001-01-19', 'Billimora', '12, noor falts', 'india', 'Amalsad', 'Gujarat', 3448, 'uveshkhalifa7920@gmail.com', 91, 2147483647, 91, 2147483647, 'B.COM', '12th pass', 2020, 77, 'OBC', 'Mother', 'm  s shaikh', 91, 2147483647, 'abcd', '12345qwe'),
(2, 102, 2, 'yuvraj', 'n', 'sahu', 'MALE', '2002-06-03', 'sachin', '14,anjum socity', 'india', 'sachin', 'gujarat', 2334, 'yuvi45@gmail.com', 91, 2147483647, 91, 2147483647, 'BBA', '12th pass', 2020, 90, 'SC', 'Father', ' shukar m sahu', 91, 2147483647, 'xyz', '12345678q'),
(3, 103, 3, 'aamir', 'm', 'shaikh', 'MALE', '1999-06-02', 'vapi', 'dungra colony, near hafsha masjid', 'india', 'VAPI', 'GUJARAT', 888, 'aamir123@gmail.com', 91, 2147483647, 91, 2147483647, 'B.COM', '12th pass', 2020, 78, 'OPEN', 'Brother', 'm  s shaikh', 91, 2147483647, 'abc', '1234qwer');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_id` int(100) NOT NULL,
  `class` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `year` int(50) NOT NULL,
  `sem` int(10) NOT NULL,
  `sub_code` int(10) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `date_time` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `videos_id` int(100) NOT NULL,
  `course` varchar(50) NOT NULL,
  `class` varchar(60) NOT NULL,
  `year` int(100) NOT NULL,
  `sem` int(10) NOT NULL,
  `sub_code` int(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `title` int(100) NOT NULL,
  `file_type` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`assignment_id`);

--
-- Indexes for table `a_registration`
--
ALTER TABLE `a_registration`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_registration`
--
ALTER TABLE `f_registration`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `journal`
--
ALTER TABLE `journal`
  ADD PRIMARY KEY (`journal_id`);

--
-- Indexes for table `mat`
--
ALTER TABLE `mat`
  ADD PRIMARY KEY (`mat_id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`materials_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`query_id`);

--
-- Indexes for table `question_bank`
--
ALTER TABLE `question_bank`
  ADD PRIMARY KEY (`question_bank_id`);

--
-- Indexes for table `sem`
--
ALTER TABLE `sem`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `s_assignment`
--
ALTER TABLE `s_assignment`
  ADD PRIMARY KEY (`assup_id`);

--
-- Indexes for table `s_journal`
--
ALTER TABLE `s_journal`
  ADD PRIMARY KEY (`jup_id`);

--
-- Indexes for table `s_registration`
--
ALTER TABLE `s_registration`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`videos_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `assignment_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `a_registration`
--
ALTER TABLE `a_registration`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `c_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `f_registration`
--
ALTER TABLE `f_registration`
  MODIFY `faculty_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `journal`
--
ALTER TABLE `journal`
  MODIFY `journal_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mat`
--
ALTER TABLE `mat`
  MODIFY `mat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `materials_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `query_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `question_bank`
--
ALTER TABLE `question_bank`
  MODIFY `question_bank_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sem`
--
ALTER TABLE `sem`
  MODIFY `a_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `s_assignment`
--
ALTER TABLE `s_assignment`
  MODIFY `assup_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `s_journal`
--
ALTER TABLE `s_journal`
  MODIFY `jup_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `s_registration`
--
ALTER TABLE `s_registration`
  MODIFY `student_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `test_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `videos_id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
