-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:8111
-- Generation Time: Dec 22, 2021 at 12:14 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `exam_category`
--

CREATE TABLE `exam_category` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `exam_time_in_minutes` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_category`
--

INSERT INTO `exam_category` (`id`, `category`, `exam_time_in_minutes`) VALUES
(16, 'mysql', '30'),
(17, 'maths', '1'),
(18, 'Maths-2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `exam_results`
--

CREATE TABLE `exam_results` (
  `id` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `exam_type` varchar(100) NOT NULL,
  `total_question` varchar(10) NOT NULL,
  `correct_answer` varchar(10) NOT NULL,
  `wrong_answer` varchar(10) NOT NULL,
  `exam_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_results`
--

INSERT INTO `exam_results` (`id`, `username`, `exam_type`, `total_question`, `correct_answer`, `wrong_answer`, `exam_time`) VALUES
(4, 'hally', 'maths', '5', '3', '2', '2021-12-17'),
(5, 'hally', 'maths', '5', '4', '1', '2021-12-17'),
(6, 'hally', 'maths', '5', '4', '1', '2021-12-17'),
(7, 'hally', 'maths', '5', '4', '1', '2021-12-17'),
(8, 'hally', 'maths', '5', '4', '1', '2021-12-17'),
(9, 'hally', 'maths', '5', '4', '1', '2021-12-17'),
(10, 'hally', 'maths', '5', '0', '5', '2021-12-17'),
(11, 'hally', 'maths', '5', '0', '5', '2021-12-17'),
(12, 'hally', 'maths', '5', '0', '5', '2021-12-17'),
(13, 'hally', 'maths', '5', '0', '5', '2021-12-17'),
(14, 'hally', 'maths', '5', '0', '5', '2021-12-17'),
(15, 'hally', 'maths', '5', '0', '5', '2021-12-17'),
(16, 'hally', 'maths', '5', '0', '5', '2021-12-17'),
(17, 'hally', 'maths', '5', '0', '5', '2021-12-20'),
(18, 'hally', 'maths', '5', '2', '3', '2021-12-20'),
(19, 'hally', 'maths', '5', '1', '4', '2021-12-20'),
(20, 'hally', 'php', '2', '0', '2', '2021-12-20'),
(21, 'hally', 'maths', '5', '0', '5', '2021-12-20'),
(22, 'hally', 'maths', '5', '4', '1', '2021-12-20'),
(23, 'hally', 'php', '2', '0', '2', '2021-12-21'),
(24, 'hally', 'php', '2', '0', '2', '2021-12-21'),
(25, 'hally', 'mysql', '0', '0', '0', '2021-12-21'),
(26, 'hally', 'php', '2', '0', '2', '2021-12-21'),
(27, 'kaurharleen', 'maths', '5', '4', '1', '2021-12-22'),
(28, 'kaurharleen', 'php', '2', '1', '1', '2021-12-22'),
(29, 'bhatia', 'Maths-2', '5', '5', '0', '2021-12-22'),
(30, 'bhatia', 'Maths-2', '5', '5', '0', '2021-12-22');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question_no` varchar(5) NOT NULL,
  `question` varchar(500) NOT NULL,
  `opt1` varchar(100) NOT NULL,
  `opt2` varchar(100) NOT NULL,
  `opt3` varchar(100) NOT NULL,
  `opt4` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_no`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `answer`, `category`) VALUES
(2, '2', '2+2=?', '1', '2', '3', '4', '4', 'php'),
(3, '3', 'which is the image of a pokemon???', 'opt_images/1bcad806dd1c9ed0d6777c8d4c2b981aa.jpg', 'opt_images/1bcad806dd1c9ed0d6777c8d4c2b981aPngItem_1818647.png', 'opt_images/8f704a8be4816bf49567003bd0bf4dbeyckAE9edi.png', 'opt_images/8f704a8be4816bf49567003bd0bf4dbegroup.png', 'opt_images/1bcad806dd1c9ed0d6777c8d4c2b981aa.jpg', 'php'),
(26, '1', '5+3=?', '6', '2', '8', '7', '8', 'maths'),
(27, '2', '2+2=?', '6', '4', '7', '3', '4', 'maths'),
(28, '3', '8+9=?', '17', '6', '7', '8', '17', 'maths'),
(29, '4', 'which is the image of a pokemon?', 'opt_images/fa49054b9dbc25c7acb1b95d4d9441c0a.jpg', 'opt_images/fa49054b9dbc25c7acb1b95d4d9441c0PngItem_1818647.png', 'opt_images/fa49054b9dbc25c7acb1b95d4d9441c0yckAE9edi.png', 'opt_images/fa49054b9dbc25c7acb1b95d4d9441c0group.png', 'opt_images/fa49054b9dbc25c7acb1b95d4d9441c0a.jpg', 'maths'),
(30, '5', 'which of the following is true?', '6+6=9', '6+6=12', '8+7=12', '5+6=12', '6+6=12', 'maths'),
(31, '1', '6*6=?', '12', '36', '15', '40', '36', 'Maths-2'),
(32, '2', 'which is the image of a pokemon?', 'opt_images/9603ca76c8a5c6c0f4b1cccf15f06b9fyckAE9edi.png', 'opt_images/9603ca76c8a5c6c0f4b1cccf15f06b9fgroup.png', 'opt_images/9603ca76c8a5c6c0f4b1cccf15f06b9fa.jpg', 'opt_images/9603ca76c8a5c6c0f4b1cccf15f06b9fPngItem_1818647.png', 'opt_images/9603ca76c8a5c6c0f4b1cccf15f06b9fa.jpg', 'Maths-2'),
(33, '3', '7*5', '35', '32', '33', '39', '35', 'Maths-2'),
(34, '4', '(10*2)+11', '31', '30', '21', '11', '31', 'Maths-2'),
(35, '5', '9*(2+2)', '36', '26', '38', '90', '36', 'Maths-2');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(5) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(22) NOT NULL,
  `contact` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `contact`) VALUES
(1, 'Harleen Kaur', 'Bhatia', 'harleen', 'xyz', 'harleen@mail.com', '9939202021'),
(2, 'Kamal', 'Rai', 'kamalrai', 'hellos', 'kamal@mail.com', '8869549393'),
(3, 'har', 'ka', 'harka', 'harka', 'harka@harka.harka', '8888888888'),
(4, 'hally', 'hello', 'hally', 'hally', 'hally@hally.hally', '8899889988'),
(5, 'Harleenn', 'Kaur', 'kaurharleen', 'kaurharleen', 'kaur@kaur.Kaur', '7483920393'),
(6, 'Harleen Kaur', 'Bhatia', 'Bhatia', 'bhatia', 'bhatia@h.com', '7788990044');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_category`
--
ALTER TABLE `exam_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_results`
--
ALTER TABLE `exam_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exam_category`
--
ALTER TABLE `exam_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `exam_results`
--
ALTER TABLE `exam_results`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
