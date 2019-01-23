-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 29, 2018 at 04:35 PM
-- Server version: 5.6.42
-- PHP Version: 7.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(6) UNSIGNED NOT NULL,
  `category` varchar(30) DEFAULT NULL,
  `color` varchar(30) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `descriptoin` varchar(255) DEFAULT NULL,
  `user_up` int(6) UNSIGNED DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `category`, `color`, `location`, `status`, `image`, `descriptoin`, `user_up`, `reg_date`) VALUES
(3, 'keys', 'black', 'cairo', 'lost', '', '', 9, '2018-12-27 00:26:00'),
(4, 'phone', 'blue', 'giza', 'lost', '', 'xcdsdsfsdfdsfsdfsd', 9, '2018-12-26 18:45:50'),
(5, 'key', 'silver', 'cairo', 'lost', '', 'dsadashjkshfjsdhfjkggsdfkhsagfgsfhgsdhfsdjkgfsgfhsbxzncbxzc52d412465456re4r5ew5r4ew65', 16, '2018-12-26 22:40:04'),
(10, 'dog', 'white', 'cairo', 'found', '', '', 16, '2018-12-27 20:50:32'),
(12, 'tab', 'red', 'cairo', 'found', '', '', 16, '2018-12-30 00:23:06'),
(13, 'cats', 'black', 'giza', 'found', '', '', 16, '2018-12-30 00:23:19'),
(14, 'dogs', 'white', 'alex', 'lost', '', '', 16, '2018-12-30 00:22:44'),
(15, 'laptop', 'silver', 'cairo', 'lost', '', '', 16, '2018-12-30 00:22:34'),
(16, 'coffe', 'red', 'alex', 'found', '88.jpg', 'xzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz', 16, '2018-12-30 00:09:36'),
(17, 'tab', 'black', 'cairo', 'found', 'about.jpg', 'adsssssssssssssssssssssssssssssssssssssssssssssssssssad21sad5eq4w56eq4e123wqd1sa23121345678123tr0fd', 16, '2018-12-30 00:15:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `UserName` varchar(30) DEFAULT NULL,
  `PhONE` int(30) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Country` varchar(50) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `UserName`, `PhONE`, `Email`, `Country`, `City`, `Password`, `reg_date`) VALUES
(1, 'John', 2147483647, 'john@example.com', 'france', 'paris', '1234567899', '2018-12-24 18:21:26'),
(2, 'Mary', 2147483647, 'mary@example.com', 'egypt', 'cairo', '1222314', '2018-12-24 18:21:26'),
(3, 'bosh3', 2147483647, 'bosh3@gamil.com', 'country', 'cairo', '$123456789', '2018-12-24 18:21:26'),
(4, 'bosh2', 2147483647, 'bosh2@gamil.com', 'country', 'cairo', '$123456789', '2018-12-24 18:21:26'),
(5, 'bosh2', 2147483647, 'bosh2@gamil.com', 'country', 'cairo', '$123456789', '2018-12-24 18:21:26'),
(6, 'besho', 2147483647, 'besho2@example.com', 'egypt', 'cairo', '1222314', '2018-12-24 18:21:26'),
(7, 'Julie', 2147483647, 'julie@example.com', 'egypt', 'cairo', '1222314', '2018-12-24 18:21:26'),
(8, 'john', 2147483647, 'john@example.com', 'egypt', 'gj', '25f9e794323b453885f5181f1b624d0b', '2018-12-25 21:29:21'),
(9, 'bashar', 1204169861, 'bashar@gmeil.com', 'egypt', 'cairo', 'f5bb0c8de146c67b44babbf4e6584cc0', '2018-12-25 21:32:10'),
(10, 'bashar', 1204169861, 'bashar@gmail.com', 'egypt', 'cairo', 'f5bb0c8de146c67b44babbf4e6584cc0', '2018-12-25 21:33:27'),
(14, 'poulahelmy', 1271553762, 'poula_helmy@pola.com', 'egypt', 'cairo', '25f9e794323b453885f5181f1b624d0b', '2018-12-25 22:00:58'),
(15, 'tote', 2147483647, 'tote@tote.com', 'egypt', 'cairo', '25f9e794323b453885f5181f1b624d0b', '2018-12-25 22:11:00'),
(16, 'hossam', 2147483647, 'hoss@gmail.com', 'egypt', 'cairo', '25f9e794323b453885f5181f1b624d0b', '2018-12-26 12:41:32'),
(17, 'admin', 1271553762, 'admin@admin.com', 'egypt', 'cairo', 'fcea920f7412b5da7be0cf42b8c93759', '2018-12-28 00:12:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `items_ibfk_1` (`user_up`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`user_up`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
