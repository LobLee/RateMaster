-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2024 at 10:49 AM
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
-- Database: `ratings`
--

-- --------------------------------------------------------

--
-- Table structure for table `buildings`
--

CREATE TABLE `buildings` (
  `building_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `thumbnail_url` varchar(255) NOT NULL,
  `rating` int(11) DEFAULT 0,
  `upload_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buildings`
--

INSERT INTO `buildings` (`building_id`, `title`, `description`, `thumbnail_url`, `rating`, `upload_date`) VALUES
(11, '406268224_348696434525610_3181568452186515548_n.jpg', '', '../buildrate/buildings406268224_348696434525610_3181568452186515548_n.jpg', 4, '2024-02-16 18:17:42'),
(12, '498860.jpg', '', '../buildrate/buildings/498860.jpg', 4, '2024-02-16 18:19:11'),
(13, '406268224_348696434525610_3181568452186515548_n.jpg', '', '../buildrate/buildings/406268224_348696434525610_3181568452186515548_n.jpg', 0, '2024-02-24 05:53:33');

-- --------------------------------------------------------

--
-- Table structure for table `building_comments`
--

CREATE TABLE `building_comments` (
  `comment_id` int(11) NOT NULL,
  `building_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `comment_text` text DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `comment_date` datetime DEFAULT current_timestamp(),
  `rating_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `building_comments`
--

INSERT INTO `building_comments` (`comment_id`, `building_id`, `user_id`, `comment_text`, `rating`, `comment_date`, `rating_date`) VALUES
(1, 11, 1, NULL, 4, '2024-02-17 00:31:22', '2024-02-24 00:33:33'),
(2, 11, 1, 'asdgas', NULL, '2024-02-17 00:31:22', '2024-02-24 00:33:33'),
(3, 11, 1, NULL, 4, '2024-02-17 00:31:39', '2024-02-24 00:33:33'),
(4, 11, 1, 'sdfawe', NULL, '2024-02-17 00:31:39', '2024-02-24 00:33:33'),
(5, 12, 1, NULL, 4, '2024-02-23 21:20:10', '2024-02-24 00:33:33'),
(6, 12, 1, 'sdfasd', NULL, '2024-02-23 21:20:10', '2024-02-24 00:33:33'),
(7, 12, 1, '', NULL, '2024-02-24 00:19:11', '2024-02-24 00:33:33'),
(8, 12, 1, '', NULL, '2024-02-24 00:19:14', '2024-02-24 00:33:33'),
(9, 12, 1, '', NULL, '2024-02-24 00:21:12', '2024-02-24 00:33:33'),
(10, 12, 1, NULL, 4, '2024-02-24 00:25:58', '2024-02-24 00:33:33'),
(11, 12, 1, 'fasfsad', NULL, '2024-02-24 00:25:58', '2024-02-24 00:33:33'),
(12, 12, 1, 'sdfsd', NULL, '2024-02-24 00:31:23', '2024-02-24 00:33:33'),
(13, 12, 1, 'sdfsdf', NULL, '2024-02-24 00:31:31', '2024-02-24 00:33:33'),
(14, 12, 1, 'asdff', 4, '2024-02-24 00:34:38', '2024-02-24 00:34:38'),
(15, 12, 1, '', 0, '2024-02-24 11:50:24', '2024-02-24 11:50:24');

-- --------------------------------------------------------

--
-- Table structure for table `building_ratings`
--

CREATE TABLE `building_ratings` (
  `rating_id` int(11) NOT NULL,
  `building_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `rating_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `building_ratings`
--

INSERT INTO `building_ratings` (`rating_id`, `building_id`, `user_id`, `rating`, `rating_date`) VALUES
(1, 12, 1, 4, '2024-02-23 17:31:23'),
(2, 12, 1, 4, '2024-02-23 17:31:31'),
(3, 12, 1, 4, '2024-02-23 17:34:11'),
(4, 12, 1, 4, '2024-02-23 17:34:38');

-- --------------------------------------------------------

--
-- Table structure for table `commento`
--

CREATE TABLE `commento` (
  `comment_id` int(11) NOT NULL,
  `document_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `comment_text` text DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `comment_date` datetime DEFAULT current_timestamp(),
  `rating_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `e_hypebeast`
--

CREATE TABLE `e_hypebeast` (
  `E_hype_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `thumbnail_url` varchar(255) NOT NULL,
  `rating` float DEFAULT 0,
  `upload_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `e_hypebeast`
--

INSERT INTO `e_hypebeast` (`E_hype_id`, `title`, `description`, `thumbnail_url`, `rating`, `upload_date`) VALUES
(1, '406268224_348696434525610_3181568452186515548_n.jpg', '', '../E-hype/E_products/406268224_348696434525610_3181568452186515548_n.jpg', 4, '2024-02-16 19:41:38'),
(2, '498860.jpg', '', '../E-hype/E_products/498860.jpg', 0, '2024-02-23 16:33:11');

-- --------------------------------------------------------

--
-- Table structure for table `e_hype_comments`
--

CREATE TABLE `e_hype_comments` (
  `comment_id` int(11) NOT NULL,
  `E_hype_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `comment_text` text DEFAULT NULL,
  `comment_date` datetime DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `rating_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `e_hype_comments`
--

INSERT INTO `e_hype_comments` (`comment_id`, `E_hype_id`, `user_id`, `comment_text`, `comment_date`, `rating`, `rating_date`) VALUES
(1, 1, 1, 'asffw', '2024-02-23 23:14:36', 0, '2024-02-23 23:14:36'),
(2, 1, 1, 'sdvsdv', '2024-02-23 23:14:48', 4, '2024-02-23 23:14:48'),
(3, 1, 1, 'dvsdv', '2024-02-23 23:19:26', 4, '2024-02-23 23:19:26'),
(4, 1, 1, 'vxcvxcv', '2024-02-23 23:21:07', 3, '2024-02-23 23:21:07'),
(5, 1, 1, 'xvzdv', '2024-02-23 23:23:24', 4, '2024-02-23 23:23:24'),
(6, 1, 1, '', '2024-02-24 11:39:50', 0, '2024-02-24 11:39:50'),
(7, 1, 1, '', '2024-02-24 11:47:35', 0, '2024-02-24 11:47:35');

-- --------------------------------------------------------

--
-- Table structure for table `e_hype_ratings`
--

CREATE TABLE `e_hype_ratings` (
  `id` int(11) NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `e_hype_ratings`
--

INSERT INTO `e_hype_ratings` (`id`, `item_id`, `rate`, `user`) VALUES
(1, 1, 1, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `file_ratings`
--

CREATE TABLE `file_ratings` (
  `id` int(11) NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `irate`
--

CREATE TABLE `irate` (
  `Irate_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `thumbnail_url` varchar(255) NOT NULL,
  `rating` float DEFAULT 0,
  `upload_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `irate`
--

INSERT INTO `irate` (`Irate_id`, `title`, `description`, `thumbnail_url`, `rating`, `upload_date`) VALUES
(1, 'sk-logo.png', '', '../IRate/Irate_images/sk-logo.png', 5, '2024-02-21 12:08:05');

-- --------------------------------------------------------

--
-- Table structure for table `irate_comments`
--

CREATE TABLE `irate_comments` (
  `comment_id` int(11) NOT NULL,
  `Irate_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` float DEFAULT NULL,
  `comment_text` text DEFAULT NULL,
  `comment_date` datetime DEFAULT current_timestamp(),
  `rating_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `irate_comments`
--

INSERT INTO `irate_comments` (`comment_id`, `Irate_id`, `user_id`, `rating`, `comment_text`, `comment_date`, `rating_date`) VALUES
(6, 1, 1, 4, 'aefasg', '2024-02-22 01:50:28', '2024-02-22 01:50:28'),
(7, 1, 1, 4, 'asdfasdf', '2024-02-23 21:21:06', '2024-02-23 21:21:06'),
(8, 1, 1, 4, 'sdcsd', '2024-02-23 21:22:19', '2024-02-23 21:22:19'),
(9, 1, 1, 3, 'asdfsf', '2024-02-24 00:37:26', '2024-02-24 00:37:26'),
(10, 1, 1, 0, '', '2024-02-24 12:13:50', '2024-02-24 12:13:50'),
(11, 1, 1, 4, 'sODfsI', '2024-02-26 14:55:48', '2024-02-26 14:55:48'),
(12, 1, 1, 5, 'jllkjlk', '2024-02-26 15:02:55', '2024-02-26 15:02:55');

-- --------------------------------------------------------

--
-- Table structure for table `irate_ratings`
--

CREATE TABLE `irate_ratings` (
  `rating_id` int(11) NOT NULL,
  `Irate_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `rating_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `irate_ratings`
--

INSERT INTO `irate_ratings` (`rating_id`, `Irate_id`, `user_id`, `rating`, `rating_date`) VALUES
(1, 1, 1, 4, '2024-02-21 18:36:07'),
(2, 1, 1, 4, '2024-02-21 18:47:24'),
(3, 1, 1, 4, '2024-02-21 18:49:36'),
(4, 1, 1, 4, '2024-02-21 18:50:28'),
(5, 1, 1, 4, '2024-02-23 14:21:06'),
(6, 1, 1, 4, '2024-02-23 14:22:19'),
(7, 1, 1, 3, '2024-02-23 17:37:26'),
(8, 1, 1, 4, '2024-02-26 07:55:48'),
(9, 1, 1, 5, '2024-02-26 08:02:55');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--
-- Error reading structure for table ratings.log: #1030 - Got error 194 &quot;Tablespace is missing for a table&quot; from storage engine InnoDB
-- Error reading data for table ratings.log: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `ratings`.`log`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `document_id` int(11) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `option` varchar(50) DEFAULT '',
  `is_admin` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password_hash`, `option`, `is_admin`) VALUES
(1, 'laboy', '$2y$10$BNk3Zlxw6PqZQY636CkKYOrbSXybTiJdhwLwiMztuP1YyEfk.AOta', 'filerate', 0),
(15, 'build_admin', '$2y$10$0yroAwFgdGTM0hGN8Zqw3.CMzbIbC951QKqJfln/SHK7R/6HQZNne', 'selectoptions', 1),
(16, 'file_admin', '$2y$10$ixisIpqM5ym/V6wa2zUtOOLcJe24lJKjXUrbCVVT7bGfHDEXlaZ4q', 'selectoptions', 1),
(17, 'Irate_admin', '$2y$10$6yxMmbR4i58WmxZtpRgTKOaJnSQOJLRT2b3zsYcB74sPzq.wtyeca', 'selectoptions', 1),
(18, 'hype_admin', '$2y$10$DCNY2yKK53mp6p3ChftQyOe2CGHSHEpAFVARvHDeASU6hsI2sEN/m', 'selectoptions', 1),
(19, 'jonna', '$2y$10$zMAsyG1NGKoDLbfXWQ6IqeXn/rc4XR.7DqZQKs34qR6ie8XMaRgh2', 'irate', 0),
(20, 'jonna1', '$2y$10$ivWo/5p8WUS2Lb0Yqe.iEup1.qqyIR515cTDocdKiP9WLe6vxtxPm', 'irate', 0),
(21, 'jonna2', '$2y$10$HzYUlksVvkGxhTQ0prFdbemo/Y9zDg0rwPbyYuhbxJDbLdLdc9E1i', 'irate', 0),
(23, 'joy1', '$2y$10$PxKv.H2W3CnKeBCc22SI8.DuiJD4TfiwgqfdY1OeVTze50khqTIn.', 'buildrate', 0),
(24, 'joy2', '$2y$10$n6VaT1EAUgE3YYGqzsH9y.vn.1pLOrInlO5T74B/8qlIQAdwkTOEG', 'buildrate', 0),
(25, 'jemma', '$2y$10$o2xhQa32NCb/wMFN5Ptah.bIWLnILdCN9HVkVia1bjAFOGqml/XCq', 'hypebeast', 0),
(26, 'jemma1', '$2y$10$iokQU6rP/DdmQXt/a50Y2ukuF.fS/k30D3nmHgVA00qsQLenbRDYa', 'hypebeast', 0),
(27, 'jemma2', '$2y$10$b09mCW0rRDB1HzWmSi5xZOn2Tkmz5Vr9YjJJyb7.g5YV1DpeG4oz6', 'hypebeast', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buildings`
--
ALTER TABLE `buildings`
  ADD PRIMARY KEY (`building_id`);

--
-- Indexes for table `building_comments`
--
ALTER TABLE `building_comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `building_id` (`building_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `building_ratings`
--
ALTER TABLE `building_ratings`
  ADD PRIMARY KEY (`rating_id`),
  ADD KEY `building_id` (`building_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `commento`
--
ALTER TABLE `commento`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `document_id` (`document_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_hypebeast`
--
ALTER TABLE `e_hypebeast`
  ADD PRIMARY KEY (`E_hype_id`);

--
-- Indexes for table `e_hype_comments`
--
ALTER TABLE `e_hype_comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `E_hype_id` (`E_hype_id`);

--
-- Indexes for table `file_ratings`
--
ALTER TABLE `file_ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `document_id` (`document_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `file_ratings`
--
ALTER TABLE `file_ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`document_id`) REFERENCES `document` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
