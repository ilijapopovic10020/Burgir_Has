-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2024 at 02:40 PM
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
-- Database: `burgir_has`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Hamburger', '2024-03-12 20:26:33', NULL),
(2, 'Cheesburger', '2024-03-12 20:26:33', NULL),
(3, 'Chicken Burger', '2024-03-12 20:26:33', NULL),
(4, 'Pomfrit', '2024-03-12 20:26:33', NULL),
(5, 'Dodaci', '2024-03-12 20:26:33', NULL),
(6, 'Piće', '2024-03-12 20:26:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_id` int(11) NOT NULL,
  `food_name` varchar(50) NOT NULL,
  `food_image_url` varchar(255) NOT NULL,
  `food_image_alt` varchar(255) NOT NULL,
  `food_price` decimal(6,2) NOT NULL,
  `food_kcal` varchar(20) NOT NULL,
  `food_desc` varchar(100) NOT NULL,
  `food_popular` tinyint(1) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `food_name`, `food_image_url`, `food_image_alt`, `food_price`, `food_kcal`, `food_desc`, `food_popular`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'The Original Champ', 'the_original_champ.jpg', 'the_original_champ', 350.00, '250-300', '120g junećeg mesa, cheddar, krastavac, luk, kečap, senf', 0, 1, '2024-03-12 20:58:26', NULL),
(6, 'The Double Decker', 'the_double_decker.jpg', 'the_double_decker', 550.00, '500-600', '2x 120g junećeg mesa, krastavac, luk, kečap, senf', 1, 1, '2024-03-12 20:58:26', NULL),
(7, 'The Triple Threat', 'the_triple_threat.jpg', 'the_triple_threat', 750.00, '750-900', '3x 120g junećeg mesa, krastavac, luk, kečap, senf', 0, 1, '2024-03-12 20:58:26', NULL),
(8, 'Cheese Lover\'s Delight', 'cheese_lover_delight.jpg', 'cheese_lovers_delight', 380.00, '300-350', '120g junećeg mesa, cheddar, krastavac, luk, kečap, senf', 1, 2, '2024-03-12 20:58:26', NULL),
(9, 'Double Cheese Dare', 'double_cheese_dare.jpg', 'double_cheese_dare', 580.00, '500-600', '2x 120g junećeg mesa, cheddar, krastavac, luk, kečap, senf', 0, 2, '2024-03-12 20:58:26', NULL),
(10, 'Triple Cheese Triumph', 'triple_cheese_triumph.jpg', 'triple_cheese_triumph', 800.00, '900-1050', '3x 120g junećeg mesa, cheddar, krastavac, luk, kečap, senf', 0, 2, '2024-03-12 20:58:26', NULL),
(11, 'Classic Clucker', 'classic_clucker.jpg', 'classic_clucker', 350.00, '300-350', '120g pilećeg mesa, cheddar, krastavac, luk, BBQ sos', 1, 3, '2024-03-12 21:04:46', NULL),
(12, 'Double Cluck Deluxe', 'double_cluck_deluxe.jpg', 'double_cluck_deluxe', 600.00, '600-700', '2x 120g pilećeg mesa, cheddar, krastavac, luk, BBQ sos', 1, 3, '2024-03-12 21:04:46', NULL),
(13, 'Triple Cluck Crown', 'triple_cluck_crown.jpg', 'triple_cluck_crown', 850.00, '900-1050', '2x 120g pilećeg mesa, cheddar, krastavac, luk, BBQ sos', 0, 3, '2024-03-12 21:04:46', NULL),
(14, 'Mini Fries', 'fries.jpg', 'mini_fries', 250.00, '300', '150g pomfrita', 0, 4, '2024-03-12 21:08:47', NULL),
(15, 'Classic Fries', 'fries.jpg', 'classic_fries', 350.00, '400', '200g pomfrita', 0, 4, '2024-03-12 21:13:50', NULL),
(16, 'Mega Fries', 'fries.jpg', 'mega_fries', 450.00, '500', '250g pomfrita', 0, 4, '2024-03-12 21:13:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(10) NOT NULL,
  `message_fullname` varchar(100) NOT NULL,
  `message_email` varchar(100) NOT NULL,
  `message_text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `message_fullname`, `message_email`, `message_text`, `created_at`) VALUES
(3, 'Ilija Popovic', 'ilijapopovic@gmail.com', 'ovo je neka porukaaaaaaaaaaaaaaaaaaa', '2024-03-12 16:18:16'),
(4, 'Ilija Popovic', 'ilijapopovic@gmail.com', 'ovo je neka porukaaaaaaaaaaaaaaaaaaa', '2024-03-12 16:19:42'),
(6, 'Ilija Popovic', 'ilijaikac@gmail.com', 'asdiasdnasdasdasdiajsdasdas', '2024-03-12 16:20:56'),
(7, 'Ilija Popovic', 'ilijaikac@gmail.com', 'asdiasdnasdasdasdiajsdasdas', '2024-03-12 16:21:09'),
(8, 'Ilija Popovic', 'ilijaikac@gmail.com', 'iasdiasdmasisad asd', '2024-03-12 16:21:30');

-- --------------------------------------------------------

--
-- Table structure for table `nav`
--

CREATE TABLE `nav` (
  `nav_id` int(11) NOT NULL,
  `nav_name` varchar(50) NOT NULL,
  `nav_href` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nav`
--

INSERT INTO `nav` (`nav_id`, `nav_name`, `nav_href`) VALUES
(1, 'Početna', 'index.php'),
(2, 'Meni', 'meni.php'),
(3, 'Kontakt', 'contact.php'),
(4, 'Admin Panel', 'admin-panel.php');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `newsletter_id` int(10) NOT NULL,
  `newsletter_email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`newsletter_id`, `newsletter_email`, `created_at`) VALUES
(4, 'iopetukafani@gmail.com', '2024-04-09 18:45:45');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `rating_id` tinyint(1) NOT NULL,
  `rating_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`rating_id`, `rating_name`) VALUES
(1, '1 - Loša'),
(2, '2 - Dovoljna'),
(3, '3 - Dobra'),
(4, '4 - Veoma Dobra'),
(5, '5 - Odlična');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'user'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `survey_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating_id` tinyint(1) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`survey_id`, `user_id`, `rating_id`, `message`, `created_at`, `updated_at`) VALUES
(4, 46, 5, 'IDEMO FAMILIJOOOOOOOOOOOO', '2024-04-11 20:11:03', NULL),
(5, 28, 5, 'Nije da je moj al je najbolji!!!', '2024-04-11 20:13:53', NULL),
(6, 48, 4, 'Volim te na kvadrat <3', '2024-04-11 20:14:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fullname`, `username`, `email`, `password`, `role_id`, `created_at`, `updated_at`) VALUES
(28, '@dmin Ilija', 'ilijaadmin', 'admin.burgirhas@gmail.com', 'a43c27c2babefd68df8a694900f30a1c', 2, '2024-03-03 16:09:56', NULL),
(34, 'Saban Saulic', 'sabansabkee', 'sabansabke@gmail.com', '4f1b975ec7c35c20e901e8a1064a8980', 1, '2024-03-03 18:12:44', NULL),
(41, 'Semsa Suljaković', 'semsasmele', 'semsasmele@gmail.com', '4f1b975ec7c35c20e901e8a1064a8980', 1, '2024-03-12 17:56:22', NULL),
(43, 'Mitar Miric', 'mitarmiric', 'mitarmiric@gmail.com', '4f1b975ec7c35c20e901e8a1064a8980', 1, '2024-03-12 18:00:48', NULL),
(46, 'Radisa Trajkovic Djani', 'djanimani', 'iopetukafani@gmail.com', '4f1b975ec7c35c20e901e8a1064a8980', 1, '2024-04-07 11:05:02', NULL),
(48, 'Barbara Bobak', 'barbarabarbara', 'barbarabarbara@gmail.com', '4f1b975ec7c35c20e901e8a1064a8980', 1, '2024-04-09 17:20:20', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `nav`
--
ALTER TABLE `nav`
  ADD PRIMARY KEY (`nav_id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`newsletter_id`),
  ADD UNIQUE KEY `newsletter_email` (`newsletter_email`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`survey_id`),
  ADD UNIQUE KEY `user_id_2` (`user_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `rating_id` (`rating_id`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `nav`
--
ALTER TABLE `nav`
  MODIFY `nav_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `newsletter_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `rating_id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `survey_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE;

--
-- Constraints for table `survey`
--
ALTER TABLE `survey`
  ADD CONSTRAINT `survey_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `survey_ibfk_2` FOREIGN KEY (`rating_id`) REFERENCES `ratings` (`rating_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
