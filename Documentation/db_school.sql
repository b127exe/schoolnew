-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2022 at 09:34 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `aid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`aid`, `sid`, `status`, `date`) VALUES
(1, 2, 'absent', '2022-11-10'),
(2, 1, 'present', '2022-11-10'),
(3, 3, 'present', '2022-11-11'),
(4, 3, 'absent', '2022-11-12'),
(5, 1, 'present', '2022-11-12'),
(6, 2, 'leave', '2022-11-11'),
(7, 1, 'present', '2022-11-14');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `cid` int(11) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `section` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`cid`, `cname`, `section`) VALUES
(1, 'Class 12', 2),
(2, 'Class 11', 2),
(3, 'Class 10', 2),
(4, 'Class 10', 2);

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `eid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `exam_date` date NOT NULL,
  `e_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`eid`, `sid`, `exam_date`, `e_time`) VALUES
(16, 1, '2022-12-20', '08:00');

-- --------------------------------------------------------

--
-- Table structure for table `exam_result`
--

CREATE TABLE `exam_result` (
  `erid` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `grade` varchar(5) NOT NULL,
  `percentage` int(11) NOT NULL,
  `exam_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_result`
--

INSERT INTO `exam_result` (`erid`, `eid`, `marks`, `grade`, `percentage`, `exam_status`) VALUES
(3, 16, 670, 'A', 75, 'Attend');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `fid` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`fid`, `amount`) VALUES
(6, 2300),
(7, 3400),
(8, 5500),
(9, 5600);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `nid` int(11) NOT NULL,
  `nauthor` varchar(30) NOT NULL,
  `ntitle` varchar(30) NOT NULL,
  `ndesc` varchar(200) NOT NULL,
  `time` datetime NOT NULL,
  `audiance` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `pid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `job` varchar(50) NOT NULL,
  `nic` int(13) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`pid`, `name`, `phone`, `job`, `nic`, `email`) VALUES
(2, 'Imran Khan', 2147483647, 'Office Work', 2147483647, 'imran123@gmail.com'),
(3, 'Ikram Ahmed', 2147483647, 'Toyota Office Manager', 2147483647, 'ikran345@gmail.com'),
(4, 'Mazhar', 2147483647, 'Sublime Architecturist', 2147483647, 'mazhar432@gmail.com'),
(5, 'zahid', 2147483647, 'Office Work', 2147483647, 'zahid123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `sec_id` int(11) NOT NULL,
  `sec_name` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`sec_id`, `sec_name`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(11) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `pid` int(11) NOT NULL,
  `sgender` varchar(10) NOT NULL,
  `cid` int(11) NOT NULL,
  `semail` varchar(50) NOT NULL,
  `subid` int(11) NOT NULL,
  `rollno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `fname`, `lname`, `dob`, `address`, `pid`, `sgender`, `cid`, `semail`, `subid`, `rollno`) VALUES
(1, 'Bilal', 'Khan', '2004-11-09', 'Hno N-392 Street 04', 2, 'Male', 1, 'bilal123@gmail.com', 2, 'Student1338446'),
(2, 'Zunaira', 'Ahmed', '2005-04-20', 'Hno T-340 Street 10', 3, 'Female', 2, 'zunaira123@gmail.com', 3, 'Student1345338'),
(3, 'Ammar', 'Sheikh', '2004-06-22', 'Hno T-567 Street 01 korangi 3/1', 4, 'Male', 3, 'ammar543@gmail.com', 4, 'Student1345356'),
(4, 'Ahmed', 'Khan', '2005-06-20', 'Hno Y-392 Street 04', 5, 'Male', 4, 'ahmed123@gmail.com', 5, 'Student1338466');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subid` int(11) NOT NULL,
  `subject` varchar(40) NOT NULL,
  `detail` varchar(50) NOT NULL,
  `tid` int(11) NOT NULL,
  `fid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subid`, `subject`, `detail`, `tid`, `fid`) VALUES
(2, 'Computer Science', 'Fundamental areas of computer science Computer sci', 1, 6),
(3, 'Biology', 'Fundamental areas of biology is the study of exper', 8, 7),
(4, 'Computer Science (Python)', 'Fundamental areas of computer science Python is th', 10, 8),
(5, 'Chemistry', 'Fundamental areas of biology is the study of exper', 10, 9);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `tid` int(11) NOT NULL,
  `t_fname` varchar(40) NOT NULL,
  `t_lname` varchar(40) NOT NULL,
  `t_address` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `education` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tid`, `t_fname`, `t_lname`, `t_address`, `phone`, `dob`, `education`, `gender`, `email`) VALUES
(1, 'Farhan', 'Kazmi', 'Hno N-345 Street 09', '03456672892', '1992-11-09', 'IT Computer Science', 'Male', 'farhan123@gmail.com'),
(3, 'Rana', 'Arsalan', 'Hno U-120 Street 20', '03167738292', '1992-12-04', 'UI/UX Designer', 'Male', 'rana345@gmail.com'),
(8, 'Muniba', 'Ahmed', 'Hno T-560 Street 01', '03456628292', '1999-04-22', 'Masters in Mathemetics', 'Female', 'muniba123@gmail.com'),
(9, 'Nickson', 'Pervaiz', 'Hno T-340 Street 90', '03456628262', '1991-02-13', 'Masters in Algorithm 2', 'Male', 'nickson123@gmail.com'),
(10, 'Nabeel', 'Saleem', 'Hno Z-340 Street 06', '0364228292', '1993-10-22', 'Masters in Algorithm 1', 'Male', 'nabeel345@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `uemail` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `section` (`section`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`eid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `exam_result`
--
ALTER TABLE `exam_result`
  ADD PRIMARY KEY (`erid`),
  ADD KEY `eid` (`eid`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`sec_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `pid` (`pid`),
  ADD KEY `cid` (`cid`),
  ADD KEY `subid` (`subid`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subid`),
  ADD KEY `tid` (`tid`),
  ADD KEY `fid` (`fid`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `exam_result`
--
ALTER TABLE `exam_result`
  MODIFY `erid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `sec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `student` (`sid`);

--
-- Constraints for table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `class_ibfk_1` FOREIGN KEY (`section`) REFERENCES `section` (`sec_id`);

--
-- Constraints for table `exam`
--
ALTER TABLE `exam`
  ADD CONSTRAINT `exam_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `student` (`sid`);

--
-- Constraints for table `exam_result`
--
ALTER TABLE `exam_result`
  ADD CONSTRAINT `exam_result_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `exam` (`eid`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `parent` (`pid`),
  ADD CONSTRAINT `student_ibfk_3` FOREIGN KEY (`cid`) REFERENCES `class` (`cid`),
  ADD CONSTRAINT `student_ibfk_4` FOREIGN KEY (`subid`) REFERENCES `subject` (`subid`);

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`tid`) REFERENCES `teacher` (`tid`),
  ADD CONSTRAINT `subject_ibfk_2` FOREIGN KEY (`fid`) REFERENCES `fees` (`fid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
