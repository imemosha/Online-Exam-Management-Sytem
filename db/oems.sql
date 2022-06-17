-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2020 at 10:20 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oems`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`, `phone`, `photo`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin', 9867676766, 'http://localhost/exam/images/admin/5fc0bb475a224_exampaper.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `answer_id` int(11) NOT NULL,
  `q_id` int(11) NOT NULL,
  `answer` varchar(1) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class` varchar(20) NOT NULL,
  `subject` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exam_routine`
--

CREATE TABLE `exam_routine` (
  `id` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `duration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `gender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `name`, `email`, `password`, `phone`, `photo`, `gender`) VALUES
(1, 'Hiram Lodge', 'hiram@gmail.com', 'hiram', 9841678769, 'http://localhost/exam/images/faculty/5fc9f6143fa64_5fc0bb475a224_exampaper.jpg', 'male'),
(6, 'raghav', 'raghav@gmail.com', 'raghav', 9807070709, 'http://localhost/exam/images/faculty/5fc8bc20f1ae3_5fc0bb475a224_exampaper.jpg', 'male'),
(7, 'Juli', 'juli@gmail.com', 'juli', 9899999999, 'http://localhost/exam/images/faculty/5fc8ac4e17b84_girl.jpg', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_history`
--

CREATE TABLE `faculty_history` (
  `id` int(11) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `class` varchar(30) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `no_of_prepared_questions` int(100) NOT NULL,
  `missed_deadline` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_notice`
--

CREATE TABLE `faculty_notice` (
  `id` int(11) NOT NULL,
  `notice` varchar(1000) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `class` varchar(30) NOT NULL,
  `due_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_subject`
--

CREATE TABLE `faculty_subject` (
  `faculty_id` int(11) NOT NULL,
  `class` int(2) NOT NULL,
  `subject` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_subject`
--

INSERT INTO `faculty_subject` (`faculty_id`, `class`, `subject`) VALUES
(6, 8, 'maths');

-- --------------------------------------------------------

--
-- Table structure for table `question_paper`
--

CREATE TABLE `question_paper` (
  `q_id` int(11) NOT NULL,
  `question` varchar(5000) NOT NULL,
  `choice1` varchar(500) NOT NULL,
  `choice2` varchar(500) NOT NULL,
  `choice3` varchar(500) NOT NULL,
  `choice4` varchar(500) NOT NULL,
  `correct_answer` varchar(1) NOT NULL,
  `hint` varchar(1000) NOT NULL,
  `question_marks` int(11) NOT NULL,
  `term` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `class` varchar(20) NOT NULL,
  `duration` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `score_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `term` varchar(20) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `class` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `class` varchar(10) NOT NULL,
  `roll_no` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `name`, `email`, `password`, `phone`, `photo`, `gender`, `class`, `roll_no`) VALUES
(2, 'Kasta Mandal', 'kasta@gmail.com', 'kasta', 9867567778, 'http://localhost/exam/images/student/girl.jpg', 'female', '7', 13),
(3, 'Sandip Chhetri', 'sandip@gmail.com', 'sandip', 9845676634, 'http://localhost/exam/images/student/girl.jpg', 'male', '8', 13),
(4, 'Manasmi Upreti', 'manasmi@gmail.com', 'manasmmi', 9835676654, 'http://localhost/exam/images/student/girl.jpg', 'female', '9', 1),
(5, 'Deep Raj Shakya', 'deep@gmail.com', 'deep', 9856765564, 'http://localhost/exam/images/student/girl.jpg', 'male', '7', 3),
(6, 'Pandu Adhikari', 'pandu@gmail.c', 'pandu', 9854676654, 'http://localhost/exam/images/student/girl.jpg', 'male', '5', 8),
(7, 'tom', 'tom@gmail.com', 'tom', 9899999999, 'http://localhost/exam/images/student/girl.jpg', 'male', '3', 8),
(8, 'jerry', 'jerry@gmail.com', 'jerry', 9888888888, 'http://localhost/exam/images/student/girl.jpg', 'female', '6', 11),
(9, 'suyasha', 'suyasha@gmail.com', 'suyasha', 9866666666, 'http://localhost/exam/images/student/face2.jpg', 'female', '6', 14),
(10, 'Pragita', 'pragita@gmail.com', 'pragita', 9899999999, 'http://localhost/exam/images/student/girl.jpg', 'female', '3', 16),
(11, 'Madalsa Shrestha', 'madalsa@gmail.com', 'madalsa', 9999999999, 'http://localhost/exam/images/student/5fc9fd5b1bb4c_face2.jpg', 'female', '3', 14);

-- --------------------------------------------------------

--
-- Table structure for table `student_detail`
--

CREATE TABLE `student_detail` (
  `id` int(11) NOT NULL,
  `no_of_exams_given` int(100) NOT NULL,
  `no_of_missed_exam` int(100) NOT NULL,
  `no_of_passed_exam` int(100) NOT NULL,
  `no_of_failed_exam` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_history`
--

CREATE TABLE `student_history` (
  `id` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `exam_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `solved_questions` int(50) NOT NULL,
  `right_answer` int(50) NOT NULL,
  `wrong_answer` int(50) NOT NULL,
  `marks` int(100) NOT NULL,
  `result` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_notice`
--

CREATE TABLE `student_notice` (
  `id` int(11) NOT NULL,
  `notice` varchar(10000) NOT NULL,
  `subject` varchar(60) NOT NULL,
  `class` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `class` int(2) NOT NULL,
  `subject` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `faculty_id`, `class`, `subject`) VALUES
(2, 6, 3, 'OPT'),
(4, 6, 7, 'Math'),
(5, 6, 9, 'OPT'),
(6, 7, 4, 'Social');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_exam`
--

CREATE TABLE `upcoming_exam` (
  `id` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `class` varchar(30) NOT NULL,
  `due_date` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `Test` (`q_id`),
  ADD KEY `Test1` (`student_id`);

--
-- Indexes for table `exam_routine`
--
ALTER TABLE `exam_routine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `faculty_history`
--
ALTER TABLE `faculty_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty_notice`
--
ALTER TABLE `faculty_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty_subject`
--
ALTER TABLE `faculty_subject`
  ADD KEY `faculty_id` (`faculty_id`);

--
-- Indexes for table `question_paper`
--
ALTER TABLE `question_paper`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`score_id`),
  ADD KEY `Test3` (`student_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_detail`
--
ALTER TABLE `student_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_history`
--
ALTER TABLE `student_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_notice`
--
ALTER TABLE `student_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faculty_id` (`faculty_id`) USING HASH;

--
-- Indexes for table `upcoming_exam`
--
ALTER TABLE `upcoming_exam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_routine`
--
ALTER TABLE `exam_routine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `faculty_history`
--
ALTER TABLE `faculty_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faculty_notice`
--
ALTER TABLE `faculty_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question_paper`
--
ALTER TABLE `question_paper`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `score_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `student_detail`
--
ALTER TABLE `student_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_history`
--
ALTER TABLE `student_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_notice`
--
ALTER TABLE `student_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `upcoming_exam`
--
ALTER TABLE `upcoming_exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `Test` FOREIGN KEY (`q_id`) REFERENCES `answer` (`answer_id`),
  ADD CONSTRAINT `Test1` FOREIGN KEY (`student_id`) REFERENCES `answer` (`answer_id`);

--
-- Constraints for table `score`
--
ALTER TABLE `score`
  ADD CONSTRAINT `Test3` FOREIGN KEY (`student_id`) REFERENCES `score` (`score_id`);

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
