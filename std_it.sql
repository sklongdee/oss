-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2025 at 11:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `std_it`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(500) DEFAULT NULL,
  `news_detail` varchar(1000) DEFAULT NULL,
  `news_img` varchar(200) DEFAULT NULL,
  `news_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_detail`, `news_img`, `news_date`) VALUES
(1, 'วันคล้ายวันพระราชสมภพพระบาทสมเด็จพระนั่งเกล้าเจ้าอยู่หัว น้อมรำลึกในพระมหากรุณาธิคุณ ', 'วันคล้ายวันพระราชสมภพพระบาทสมเด็จพระนั่งเกล้าเจ้าอยู่หัว น้อมรำลึกในพระมหากรุณาธิคุณ ', 's_001.jpg', '2025-04-30 07:16:53'),
(2, 'Check in ถิ่นคิชฌกูฏ “วันเดียวเที่ยวด้วยกัน” กราบพระเกจิอาจารย์ ชิมอาหารชอง ลิ้มลองเหล้ารัม” ', 'Check in ถิ่นคิชฌกูฏ “วันเดียวเที่ยวด้วยกัน” กราบพระเกจิอาจารย์ ชิมอาหารชอง ลิ้มลองเหล้ารัม” ', 's_002.jpg', '2025-04-30 07:17:40');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `id_student` varchar(20) NOT NULL,
  `std_name` varchar(800) NOT NULL,
  `std_level` varchar(200) NOT NULL,
  `std_phone` varchar(10) NOT NULL,
  `std_address` varchar(400) NOT NULL,
  `std_district` varchar(200) NOT NULL,
  `std_county` varchar(200) NOT NULL,
  `std_province` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `id_student`, `std_name`, `std_level`, `std_phone`, `std_address`, `std_district`, `std_county`, `std_province`, `date`) VALUES
(1, '672002159', 'สุทธิพงษ์ คล่องดี', '1', '0861141951', '131 ม. 10', 'พลวง', 'เขาคิชฉกูฏ', 'จันทบุรี', '2025-04-25 04:22:48'),
(2, '671542450', 'Test System', '3T', '0878974587', '11', 'ปัถวี', 'มะขาม', 'จัทบุรี', '2025-04-25 04:37:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(400) NOT NULL,
  `role` varchar(50) NOT NULL,
  `_name` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `_name`) VALUES
(1, 'suttipong_kl', '$2y$10$jR8ZE/lzprPAT0Gzo.NCkOyGU0nwwQb31.s.Jw4ma3WRzjVFXSTp6', 'admin', 'สุทธิพงษ์ คล่องดี'),
(2, 'user001', '$2y$10$b1E00ATOtdDMyiXwwyT5ZOMc/NiYt5WgYrvZkt/HpLC8UtCpTZPTu', 'user', 'test user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
