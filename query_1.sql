-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2020 at 11:48 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `query_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `ans_no` int(11) NOT NULL,
  `q_no` int(11) NOT NULL,
  `ans` mediumtext NOT NULL,
  `student_id` varchar(9) NOT NULL,
  `answer_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`ans_no`, `q_no`, `ans`, `student_id`, `answer_time`) VALUES
(1, 3, 'Context Diagram is Something very important\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis molestiae sapiente suscipit iste qui quos commodi obcaecati beatae distinctio illum, mollitia cumque fugiat sed voluptatem asperiores nisi voluptates nobis sit illo. Soluta, itaque repellat dolorem quas, obcaecati possimus, blanditiis consequuntur numquam eum, accusamus dicta reiciendis id modi. Est quisquam rerum nemo voluptate nulla minima error itaque maxime reprehenderit ullam placeat accusamus quasi, dolores quaerat esse, velit iure cupiditate vero, odit assumenda inventore quis deleniti neque? Suscipit, itaque. Sed possimus corporis, nobis. Laborum minus quae nobis, in ipsam incidunt fugit itaque fugiat hic error reprehenderit. Cumque voluptatibus dolore voluptas cum est.', '0111', '0000-00-00 00:00:00'),
(2, 4, 'Swim lane diagram is very very important...................\r\n', '01134534', '0000-00-00 00:00:00'),
(3, 3, 'the previous ans was wrong', '0111', '0000-00-00 00:00:00'),
(4, 1, 'System Analysis is a process of collecting and interpreting facts, identifying the problems, and decomposition of a system into its components.', '011171275', '0000-00-00 00:00:00'),
(5, 3, 'jhgjhkfgjkfhkfkhgjkgjkh', '011171275', '2020-04-02 13:11:55'),
(9, 14, 'a2z', '011171000', '0000-00-00 00:00:00'),
(10, 2, 'abcd', '011171275', '2020-04-02 13:47:02'),
(11, 6, '123456', '011171275', '2020-04-02 14:00:08'),
(12, 6, 'new ans', '011171275', '2020-04-02 14:02:01');

-- --------------------------------------------------------

--
-- Table structure for table `ans_preference`
--

CREATE TABLE `ans_preference` (
  `c_id` varchar(10) NOT NULL,
  `student_id` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `c_id` varchar(10) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `d_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`c_id`, `c_name`, `d_id`) VALUES
('CSE 311', 'System Analysis and Design', '011'),
('CSE 323', 'Computer Networks', '011'),
('CSE 324', 'Computer Networks Laboratory', '011'),
('CSI 312', 'System Analysis and Design Laboratory', '011'),
('CSI 342', 'Artificial Intelligence Laboratory', '011');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `d_id` varchar(10) NOT NULL,
  `d_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`d_id`, `d_name`) VALUES
('011', 'CSE'),
('111', 'BBA');

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE `follow` (
  `q_no` int(11) NOT NULL,
  `student_id` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `follow`
--

INSERT INTO `follow` (`q_no`, `student_id`) VALUES
(3, '01134534'),
(3, '011345345'),
(3, '111345345'),
(4, '01134534');

-- --------------------------------------------------------

--
-- Table structure for table `my_courses`
--

CREATE TABLE `my_courses` (
  `student_id` varchar(9) NOT NULL,
  `c_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `my_courses`
--

INSERT INTO `my_courses` (`student_id`, `c_id`) VALUES
('011171010', 'CSE 311'),
('011171010', 'CSE 323'),
('011171275', 'CSE 311'),
('011171275', 'CSE 323'),
('011171275', 'CSE 324'),
('011171275', 'CSI 312');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_no` int(11) NOT NULL,
  `c_id` varchar(10) NOT NULL,
  `student_id` varchar(9) NOT NULL,
  `dedicated_to` text NOT NULL,
  `post_text` text NOT NULL,
  `post_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_no`, `c_id`, `student_id`, `dedicated_to`, `post_text`, `post_time`) VALUES
(1, 'CSE 311', '011171275', 'Your section', 'Hi', '2020-03-29 14:37:09'),
(2, 'CSE 311', '011171275', 'Your section', 'Hi,,,,,,,,,,,,,,', '2020-03-29 14:38:18'),
(3, 'CSE 311', '011171275', 'Your section', 'Hi,,,,,,,,,,,,,,!!!!!!!!!!!!!!!!!!!!!', '2020-03-29 14:39:26'),
(4, 'CSE 311', '011171000', '', 'Hello', '2020-03-29 20:01:56'),
(5, 'CSE 311', '011171275', 'All section', 'answer insert hoyna kn keu bolte parben??', '2020-04-02 12:40:14');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `q_no` int(11) NOT NULL,
  `view` int(11) DEFAULT NULL,
  `c_id` varchar(10) NOT NULL,
  `student_id` varchar(9) NOT NULL,
  `ques` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`q_no`, `view`, `c_id`, `student_id`, `ques`) VALUES
(1, 698, 'CSE 311', '011345345', 'What is System Analysis?'),
(2, 7, 'CSE 311', '111345345', 'What is Feasibility Study?'),
(3, 965, 'CSI 312', '01134534', 'What is Context Diagram?'),
(4, 326, 'CSI 312', '01134534', 'What is Swime Lane Diagram?'),
(6, 13, 'CSE 311', '011171275', 'What is Use Case Diagram?'),
(14, 2, 'CSE 311', '011171275', 'What is Data Flow diagram ?'),
(15, NULL, 'CSI 312', '011171275', 'What is SWOT Analysis?');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `email` varchar(50) NOT NULL,
  `id` varchar(9) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `d_id` varchar(10) DEFAULT NULL,
  `s_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`email`, `id`, `name`, `password`, `d_id`, `s_img`) VALUES
('abbrotherhoods@gmail.com', '011171275', 'Abbrother', '25f9e794323b453885f5181f1b624d0b', '011', '1584101271ab.jfif'),
('s10@gmail.com', '0111', 's', '202cb962ac59075b964b07152d234b70', '011', '158404095486735538_506207460035068_1271763004874031104_n.jpg'),
('s11@gmail.com', '011171000', 'sss', '81dc9bdb52d04dc20036dbd8313ed055', '011', '158550438186735538_506207460035068_1271763004874031104_n.jpg'),
('s3@gmail.com', '01134534', 'dfdf', '202cb962ac59075b964b07152d234b70', '011', '15840284892.jpg'),
('s4@gmail.com', '011345345', 'dfdf', '202cb962ac59075b964b07152d234b70', '011', '158402916586735538_506207460035068_1271763004874031104_n.jpg'),
('s9@gmail.com', '111345345', 'dfdf', '202cb962ac59075b964b07152d234b70', '111', '158402921386735538_506207460035068_1271763004874031104_n.jpg'),
('s@email.com', '011171010', 'sss', 'c20ad4d76fe97759aa27a0c99bff6710', '011', '158583057486735538_506207460035068_1271763004874031104_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `vote_no` int(100) NOT NULL,
  `ans_no` int(11) NOT NULL,
  `student_id` varchar(9) NOT NULL,
  `value` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`vote_no`, `ans_no`, `student_id`, `value`) VALUES
(401, 1, '011171275', '1'),
(410, 3, '011171275', '-1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`ans_no`,`q_no`),
  ADD KEY `belongs` (`q_no`),
  ADD KEY `ans` (`student_id`);

--
-- Indexes for table `ans_preference`
--
ALTER TABLE `ans_preference`
  ADD PRIMARY KEY (`c_id`,`student_id`),
  ADD KEY `prefer_s` (`student_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `c_name` (`c_name`),
  ADD KEY `in` (`d_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`q_no`,`student_id`),
  ADD KEY `follow_s` (`student_id`);

--
-- Indexes for table `my_courses`
--
ALTER TABLE `my_courses`
  ADD PRIMARY KEY (`student_id`,`c_id`),
  ADD KEY `choose_c` (`c_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_no`,`c_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`q_no`),
  ADD KEY `about` (`c_id`),
  ADD KEY `asks` (`student_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `student_id` (`id`) USING BTREE,
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `of` (`d_id`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`vote_no`,`ans_no`,`student_id`),
  ADD KEY `vote_of` (`ans_no`),
  ADD KEY `given_by` (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `ans_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `q_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `vote_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=412;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `ans` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`),
  ADD CONSTRAINT `belongs` FOREIGN KEY (`q_no`) REFERENCES `questions` (`q_no`);

--
-- Constraints for table `ans_preference`
--
ALTER TABLE `ans_preference`
  ADD CONSTRAINT `prefer_c` FOREIGN KEY (`c_id`) REFERENCES `course` (`c_id`),
  ADD CONSTRAINT `prefer_s` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`);

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `in` FOREIGN KEY (`d_id`) REFERENCES `department` (`d_id`);

--
-- Constraints for table `follow`
--
ALTER TABLE `follow`
  ADD CONSTRAINT `follow_c` FOREIGN KEY (`q_no`) REFERENCES `questions` (`q_no`),
  ADD CONSTRAINT `follow_s` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`);

--
-- Constraints for table `my_courses`
--
ALTER TABLE `my_courses`
  ADD CONSTRAINT `choose_c` FOREIGN KEY (`c_id`) REFERENCES `course` (`c_id`),
  ADD CONSTRAINT `choose_s` FOREIGN KEY (`Student_id`) REFERENCES `student` (`id`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `about` FOREIGN KEY (`c_id`) REFERENCES `course` (`c_id`),
  ADD CONSTRAINT `asks` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `of` FOREIGN KEY (`d_id`) REFERENCES `department` (`d_id`);

--
-- Constraints for table `vote`
--
ALTER TABLE `vote`
  ADD CONSTRAINT `given_by` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`),
  ADD CONSTRAINT `vote_of` FOREIGN KEY (`ans_no`) REFERENCES `answers` (`ans_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
