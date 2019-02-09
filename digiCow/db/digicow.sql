-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2018 at 12:33 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digicow`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918');

-- --------------------------------------------------------

--
-- Table structure for table `calving`
--

CREATE TABLE `calving` (
  `rec_no` int(11) NOT NULL,
  `Tag_no` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `datetym` varchar(50) NOT NULL,
  `insemination` varchar(50) NOT NULL,
  `calf_number` varchar(11) NOT NULL,
  `Sex` varchar(11) NOT NULL,
  `calf_weight` int(11) NOT NULL,
  `Remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calving`
--

INSERT INTO `calving` (`rec_no`, `Tag_no`, `id`, `datetym`, `insemination`, `calf_number`, `Sex`, `calf_weight`, `Remarks`) VALUES
(1, '98GF', 14, '1541458800', 'Artificial', 'YTT', 'Felame', 60, 'hello....'),
(2, 'Hyhx', 14, '1541372400', 'Natural', '900', 'Felame', 67, 'healthy');

-- --------------------------------------------------------

--
-- Table structure for table `cattle`
--

CREATE TABLE `cattle` (
  `count` int(11) NOT NULL,
  `Tag_no` varchar(100) NOT NULL,
  `cattle_desc` text NOT NULL,
  `id` int(50) NOT NULL,
  `datetym` text NOT NULL,
  `shedNo` varchar(100) NOT NULL,
  `weight` int(11) NOT NULL,
  `breed` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cattle`
--

INSERT INTO `cattle` (`count`, `Tag_no`, `cattle_desc`, `id`, `datetym`, `shedNo`, `weight`, `breed`) VALUES
(18, '98GF', 'this cattle was ', 14, '1540162800', '1E', 679, ''),
(19, 'Ty6', 'hello world', 14, '1540166340', '7Y', 567, ''),
(22, 'J8TY', 'These is a.....', 12, '1540252740', '809RE', 678, ''),
(23, 'Hyhx', 'hello cattle', 14, '1540594800', '4545', 3232, ''),
(24, 'T67', 'this cattle........', 14, '1541120340', 'HSE 212', 700, 'Friesian'),
(25, '546gh', 'Sick cow', 16, '1542063600', '4', 56, 'Jersey');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cattle_id` int(11) DEFAULT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`id`, `username`, `email`, `cattle_id`, `password`) VALUES
(4, 'wilson gatheru', 'gatheruwilson@gmail.com', NULL, 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f'),
(5, 'muhoro', 'muhoro@gmail.com', NULL, 'c775e7b757ede630cd0aa1113bd102661ab38829ca52a6422ab782862f268646'),
(6, 'elijah', 'elijah@gmail.com', NULL, 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f'),
(11, 'chege', 'chege@gmail.com', NULL, '8bb0cf6eb9b17d0f7d22b456f121257dc1254e1f01665370476383ea776df414'),
(14, 'cow', 'cowcow@gmail.com', NULL, '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5'),
(15, 'ngombe', 'ngombe@gmail.com', NULL, '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5'),
(17, 'njuguna', 'njuguna@gmail.com', NULL, '15e2b0d3c33891ebb0f1ef609ec419420c20e320ce94c65fbc8c3312448eb225'),
(18, 'cow2', 'cow2@gmail.com', NULL, '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5');

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE `feed` (
  `rec_no` int(11) NOT NULL,
  `Tag_no` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `datetym` varchar(50) NOT NULL,
  `received_fodder` int(11) NOT NULL,
  `issued_fodder` int(11) NOT NULL,
  `bal_fodder` int(11) NOT NULL,
  `received_concentrate` int(11) NOT NULL,
  `issued_concentrate` int(11) NOT NULL,
  `bal_concentrate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`rec_no`, `Tag_no`, `id`, `datetym`, `received_fodder`, `issued_fodder`, `bal_fodder`, `received_concentrate`, `issued_concentrate`, `bal_concentrate`) VALUES
(1, 'T67', 14, '1541977200', 23, 34, 45, 23, 34, 34),
(2, 'Ty6', 14, '1541545200', 56, 56, 67, 56, 67, 67),
(3, '546gh', 16, '1542063600', 234, 32, 2354756, 2345, 343, 345);

-- --------------------------------------------------------

--
-- Table structure for table `health`
--

CREATE TABLE `health` (
  `rec_no` int(11) NOT NULL,
  `Tag_no` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `datetym` varchar(50) NOT NULL,
  `symptoms` text NOT NULL,
  `diagnosis` text NOT NULL,
  `treatment` text NOT NULL,
  `Cost` int(11) NOT NULL,
  `vet_Name` varchar(100) NOT NULL,
  `result` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `health`
--

INSERT INTO `health` (`rec_no`, `Tag_no`, `id`, `datetym`, `symptoms`, `diagnosis`, `treatment`, `Cost`, `vet_Name`, `result`) VALUES
(1, '98GF', 14, '1542754800', 'After his transfer request to stay stateside is approved, a lieutenant in the National Guard faces a dilemma', 'After his transfer request to stay stateside is approved, a lieutenant in the National Guard faces a dilemma', 'After his transfer request to stay stateside is approved, a lieutenant in the National Guard faces a dilemma', 67000, 'After his transfer request to stay stateside is approved, a lieutenant in the National Guard faces a', 'After his transfer request to stay stateside is approved, a lieutenant in the National Guard faces a dilemma'),
(2, '98GF', 10, '1542754800', 'After his transfer request to stay stateside is approved, a lieutenant in the National Guard faces a dilemma', 'After his transfer request to stay stateside is approved, a lieutenant in the National Guard faces a dilemma', 'After his transfer request to stay stateside is approved, a lieutenant in the National Guard faces a dilemma', 67000, 'After his transfer request to stay stateside is approved, a lieutenant in the National Guard faces a', 'After his transfer request to stay stateside is approved, a lieutenant in the National Guard faces a dilemma'),
(3, '98GF', 14, '1542754800', 'After his transfer request to stay stateside is approved, a lieutenant in the National Guard faces a dilemma', 'After his transfer request to stay stateside is approved, a lieutenant in the National Guard faces a dilemma', 'After his transfer request to stay stateside is approved, a lieutenant in the National Guard faces a dilemma', 67000, 'After his transfer request to stay stateside is approved, a lieutenant in the National Guard faces a', 'After his transfer request to stay stateside is approved, a lieutenant in the National Guard faces a dilemma'),
(4, '98GF', 14, '1542754800', 'After his transfer request to stay stateside is approved, a lieutenant in the National Guard faces a dilemma', 'After his transfer request to stay stateside is approved, a lieutenant in the National Guard faces a dilemma', 'After his transfer request to stay stateside is approved, a lieutenant in the National Guard faces a dilemma', 70, 'Mohoro', 'After his transfer request to stay stateside is approved, a lieutenant in the National Guard faces a dilemma'),
(5, 'Ty6', 14, '1542754800', 'The requested URL was not found on this server. The link on the', 'The requested URL was not found on this server. The link on the', 'The requested URL was not found on this server. The link on the', 50, 'Nugu', 'The requested URL was not found on this server. The link on the'),
(6, '546gh', 16, '1541458800', 'After his transfer request to stay stateside is approved, a lieutenant in the National Guard faces a dilemma as one of his soldiers looks to go AWOL as their unit gears up for deployment to Iraq.', 'After his transfer request to stay stateside is approved, a lieutenant in the National Guard faces a dilemma as one of his soldiers looks to go AWOL as their unit gears up for deployment to Iraq.', 'After his transfer request to stay stateside is approved, a lieutenant in the National Guard faces a dilemma as one of his soldiers looks to go AWOL as their unit gears up for deployment to Iraq.', 32000, 'muhoro', 'After his transfer request to stay stateside is approved, a lieutenant in the National Guard faces a dilemma as one of his soldiers looks to go AWOL as their unit gears up for deployment to Iraq.');

-- --------------------------------------------------------

--
-- Table structure for table `invetory`
--

CREATE TABLE `invetory` (
  `rec_no` int(11) NOT NULL,
  `Tag_no` varchar(100) NOT NULL,
  `milk` int(11) NOT NULL,
  `milk_cost` int(11) NOT NULL,
  `feed_quantity` int(11) NOT NULL,
  `feed_cost` int(11) NOT NULL,
  `invetory__desc` text NOT NULL,
  `datetym` varchar(100) NOT NULL,
  `total_milk_cost` varchar(100) NOT NULL,
  `total_feed_cost` varchar(100) NOT NULL,
  `total_profit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invetory`
--

INSERT INTO `invetory` (`rec_no`, `Tag_no`, `milk`, `milk_cost`, `feed_quantity`, `feed_cost`, `invetory__desc`, `datetym`, `total_milk_cost`, `total_feed_cost`, `total_profit`) VALUES
(6, '98', 546, 33, 76, 87, 'hello', '1540189045', '18018', '6612', '11406'),
(10, 'Ty6 ', 787, 45, 56, 78, 'hello', '1540189562', '35415', '4368', '31047'),
(11, 'Ty6 ', 89, 60, 50, 23, 'hello there', '1540190372', '5340', '1150', '4190');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `rec_no` int(11) NOT NULL,
  `sender_id` varchar(191) NOT NULL,
  `datetym` varchar(191) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`rec_no`, `sender_id`, `datetym`, `message`) VALUES
(1, '14', '1541372400', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi atque magni beatae mollitia obcaecati aperiam nihil totam impedit tenetur laboriosam accusantium assumenda, tempora ex nostrum sunt! A nesciunt officiis soluta.'),
(2, '21', '1541458800', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. '),
(3, '14', '1541372400', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi atque magni beatae mollitia obcaecati aperiam nihil totam impedit tenetur laboriosam accusantium assumenda, tempora ex nostrum sunt! A nesciunt officiis soluta.'),
(4, '21', '1541458800', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. '),
(5, '14', '1541372400', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi atque magni beatae mollitia obcaecati aperiam nihil totam impedit tenetur laboriosam accusantium assumenda, tempora ex nostrum sunt! A nesciunt officiis soluta.'),
(6, '21', '1541458800', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. '),
(7, '14', '1541372400', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi atque magni beatae mollitia obcaecati aperiam nihil totam impedit tenetur laboriosam accusantium assumenda, tempora ex nostrum sunt! A nesciunt officiis soluta.'),
(8, '21', '1541458800', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. '),
(9, '14', '1542346712', 'hello my name wilson....'),
(10, '14', '1542346806', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi atque magni beatae mollitia obcaecati aperiam nihil totam impedit tenetur laboriosam accusantium assumenda, tempora ex nostrum sunt! A nesciunt officiis soluta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi atque magni beatae mollitia obcaecati aperiam nihil totam impedit tenetur laboriosam accusantium assumenda, tempora ex nostrum sunt! A nesciunt officiis soluta. '),
(11, '14', '1542346896', 'well well well'),
(12, '18', '1542347176', 'A nesciunt officiis soluta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi atque magni beatae mollitia obcaecati aperiam nihil totam impedit tenetur laboriosam accusantium assumenda, tempora ex nostrum sunt! A nesciunt officiis soluta. ');

-- --------------------------------------------------------

--
-- Table structure for table `milk_record`
--

CREATE TABLE `milk_record` (
  `rec_no` int(11) NOT NULL,
  `Tag_no` varchar(50) NOT NULL,
  `id` int(50) NOT NULL,
  `datetym` varchar(50) NOT NULL,
  `first_milking` int(11) NOT NULL,
  `second_milking` int(11) NOT NULL,
  `third_milking` int(11) NOT NULL,
  `co_operative` varchar(100) NOT NULL,
  `cost` int(11) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `milk_record`
--

INSERT INTO `milk_record` (`rec_no`, `Tag_no`, `id`, `datetym`, `first_milking`, `second_milking`, `third_milking`, `co_operative`, `cost`, `total`) VALUES
(1, '98GF', 14, '1540947540', 23, 12, 21, 'Muki', 30, 56),
(2, '98GF', 0, '1540947540', 23, 12, 21, 'Muki', 30, 56),
(3, '98GF', 14, '1540947540', 23, 12, 21, 'Muki', 30, 56),
(4, '98GF', 14, '1540947540', 45, 22, 34, 'hhh', 45, 101),
(5, 'Hyhx', 0, '1540947540', 456, 45, 12, 'Cjs', 456, 513),
(6, 'T67', 14, '1542841200', 34, 23, 56, 'New Kenya Co-operative Cremeries', 50, 113),
(7, '98GF', 14, '1541631600', 7, 8, 9, 'Kiambaa Dairy Farmers', 60, 24),
(9, '546gh', 16, '1541372400', 23, 23, 43, 'Kiambaa Dairy Farmers', 60, 89);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calving`
--
ALTER TABLE `calving`
  ADD PRIMARY KEY (`rec_no`);

--
-- Indexes for table `cattle`
--
ALTER TABLE `cattle`
  ADD PRIMARY KEY (`count`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feed`
--
ALTER TABLE `feed`
  ADD PRIMARY KEY (`rec_no`);

--
-- Indexes for table `health`
--
ALTER TABLE `health`
  ADD PRIMARY KEY (`rec_no`);

--
-- Indexes for table `invetory`
--
ALTER TABLE `invetory`
  ADD PRIMARY KEY (`rec_no`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`rec_no`);

--
-- Indexes for table `milk_record`
--
ALTER TABLE `milk_record`
  ADD PRIMARY KEY (`rec_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `calving`
--
ALTER TABLE `calving`
  MODIFY `rec_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cattle`
--
ALTER TABLE `cattle`
  MODIFY `count` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `feed`
--
ALTER TABLE `feed`
  MODIFY `rec_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `health`
--
ALTER TABLE `health`
  MODIFY `rec_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `invetory`
--
ALTER TABLE `invetory`
  MODIFY `rec_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `rec_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `milk_record`
--
ALTER TABLE `milk_record`
  MODIFY `rec_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
