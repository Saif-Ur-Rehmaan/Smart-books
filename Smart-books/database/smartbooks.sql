-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2023 at 10:15 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartbooks2`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `total_sales` decimal(10,2) DEFAULT NULL,
  `sales_count` int(11) DEFAULT NULL,
  `image_name` varchar(100) DEFAULT 'user.jpg',
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `bio`, `total_sales`, `sales_count`, `image_name`, `registration_date`, `email`, `password`) VALUES
(1, 'Carolyn Keene', 'Mystery author of Nancy Drew series.', '1995.00', 11, 'user.jpg', '2023-08-31 20:32:21', '', ''),
(2, 'Agatha Christie', 'Famous mystery novelist.', '2350.00', 10, 'user.jpg', '2023-08-31 20:32:21', '', ''),
(3, 'Frank Herbert', 'Author of the science fiction classic Dune.', '3320.00', 10, 'user.jpg', '2023-08-31 20:32:21', '', ''),
(4, 'John Doe', 'John Doe is a prolific author with a passion for storytelling.', '4320.00', 10, 'user.jpg', '2023-08-31 20:32:21', '', ''),
(5, 'Jane Smith', 'Jane Smith is a talented writer known for her compelling narratives.', '5320.00', 10, 'user.jpg', '2023-08-31 20:32:21', '', ''),
(6, 'Michael Johnson', 'Michael Johnson is an award-winning author who captivates readers.', '6320.00', 10, 'user.jpg', '2023-08-31 20:32:21', '', ''),
(10, 'Emily Williams', 'Emily Williams is known for her captivating romance novels that touch hearts.', '13400.00', 11, 'user.jpg', '2023-08-31 20:32:21', '', ''),
(11, 'David Anderson', 'David Anderson\'s thrilling mystery novels have earned him a dedicated readership.', '14100.00', 11, 'img-module1-340x388_340x388.jpg@v=1613707747', '2023-08-31 20:32:21', '', ''),
(12, 'saif writer', NULL, NULL, NULL, 'user.jpg', '2023-09-05 12:13:02', 'w@gmail.com', '132'),
(13, 'saif home', 'abc', NULL, NULL, 'RobloxScreenShot20230717_150857879.png', '2023-09-05 13:03:33', 'a@gmail.com', 'bf'),
(14, 'saif home', 'abc', NULL, NULL, 'RobloxScreenShot20230717_150857879.png', '2023-09-05 13:04:45', 'a@gmail.com', 'a'),
(15, 'saif home', 'abc', NULL, NULL, 'RobloxScreenShot20230716_233613270.png', '2023-09-05 13:08:02', 'a@gmail.com', 'sda'),
(16, 's sa', 'sa', NULL, NULL, 'RobloxScreenShot20230717_150857879.png', '2023-09-05 13:09:20', 'sa', 'asad');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `special` varchar(255) DEFAULT NULL,
  `is_Featured` varchar(10) NOT NULL DEFAULT '0',
  `title` varchar(255) DEFAULT NULL,
  `image_name` varchar(255) NOT NULL,
  `views` int(11) DEFAULT 0,
  `QuantityInStock` int(255) NOT NULL,
  `date_added` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `category_id`, `special`, `is_Featured`, `title`, `image_name`, `views`, `QuantityInStock`, `date_added`) VALUES
(1, 1, '1', '0', 'The Secret of the Old Clock', '12-700x700_47586504-c2d9-472a-813f-34c7dcfec5ed_600x600.jpg@v=1552407966', 236, 10, '2023-08-30 00:08:53'),
(2, 1, '1', '0', 'Murder on the Orient Express', '13-700x700_79425203-3721-4beb-a32d-5b0ce707597e_600x600.jpg@v=1552408122', 347, 0, '2023-08-30 00:08:53'),
(3, 1, '1', '0', 'The Girl with the Dragon Tattoo', '11-700x700_458ce7bf-cb27-49db-88eb-882e4693f2b4_600x600.jpg@v=1552406840', 134, 0, '2023-08-30 00:08:53'),
(4, 1, NULL, '0', 'Gone Girl', '12-700x700_47586504-c2d9-472a-813f-34c7dcfec5ed_600x600.jpg@v=1552407966', 557, 0, '2023-08-30 00:08:53'),
(5, 1, '1', '0', 'Big Little Lies', '7-700x700_fbe0ea4b-7436-4710-bb1f-3666a9ef6df8_600x600.jpg@v=1552408335', 26, 0, '2023-08-30 00:08:53'),
(6, 2, NULL, '0', 'Dune', '12-700x700_47586504-c2d9-472a-813f-34c7dcfec5ed_600x600.jpg@v=1552407966', 253, 0, '2023-08-30 00:08:53'),
(7, 2, NULL, '0', 'Foundation', '12-700x700_47586504-c2d9-472a-813f-34c7dcfec5ed_600x600.jpg@v=1552407966', 672, 0, '2023-08-30 00:08:53'),
(8, 2, NULL, '0', 'Snow Crash', '12-700x700_47586504-c2d9-472a-813f-34c7dcfec5ed_600x600.jpg@v=1552407966', 221, 0, '2023-08-30 00:08:53'),
(9, 2, NULL, '0', 'Neuromancer', '12-700x700_47586504-c2d9-472a-813f-34c7dcfec5ed_600x600.jpg@v=1552407966', 66, 0, '2023-08-30 00:08:53'),
(10, 11, NULL, '1', 'The Martian', '12-700x700_47586504-c2d9-472a-813f-34c7dcfec5ed_600x600.jpg@v=1552407966', 653, 0, '2023-08-30 00:08:53'),
(11, 3, NULL, '1', 'Pride and Prejudice', '12-700x700_47586504-c2d9-472a-813f-34c7dcfec5ed_600x600.jpg@v=1552407966', 1035, 0, '2023-08-30 00:08:53'),
(12, 3, NULL, '', 'Outlander', '12-700x700_47586504-c2d9-472a-813f-34c7dcfec5ed_600x600.jpg@v=1552407966', 642, 0, '2023-08-30 00:08:53'),
(13, 3, NULL, '1', 'The Notebook', '12-700x700_47586504-c2d9-472a-813f-34c7dcfec5ed_600x600.jpg@v=1552407966', 666, 0, '2023-08-30 00:08:53'),
(14, 3, NULL, '', 'Me Before You', '12-700x700_47586504-c2d9-472a-813f-34c7dcfec5ed_600x600.jpg@v=1552407966', 222, 0, '2023-08-30 00:08:53'),
(15, 3, NULL, '1', 'The Fault in Our Stars', '12-700x700_47586504-c2d9-472a-813f-34c7dcfec5ed_600x600.jpg@v=1552407966', 958, 0, '2023-08-30 00:08:53'),
(19, 10, NULL, '', 'Whispers of Love', '12-700x700_47586504-c2d9-472a-813f-34c7dcfec5ed_600x600.jpg@v=1552407966', 838, 0, '2023-08-30 00:08:53'),
(20, 11, NULL, '1', 'Secrets in the Shadows', '12-700x700_47586504-c2d9-472a-813f-34c7dcfec5ed_600x600.jpg@v=1552407966', 796, 0, '2023-08-30 00:08:53');

-- --------------------------------------------------------

--
-- Table structure for table `book_details`
--

CREATE TABLE `book_details` (
  `id` int(11) NOT NULL,
  `book_id` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `sale_price` decimal(10,2) DEFAULT NULL,
  `date_of_publish` date DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_details`
--

INSERT INTO `book_details` (`id`, `book_id`, `price`, `description`, `sale_price`, `date_of_publish`, `author_id`) VALUES
(1, 1, '15.99', 'Classic mystery novel featuring Nancy Drew.', '12.99', '1930-04-28', 11),
(2, 2, '12.50', 'Famous detective Hercule Poirot investigates a murder on a train.', '2.99', '1934-01-01', 11),
(3, 3, '19.99', 'Epic science fiction novel set in a desert world.', '10.49', '1965-08-01', 3),
(4, 4, '10.99', 'An enchanting tale of love and fantasy.', '6.99', '2023-08-15', 10),
(5, 5, '8.99', 'A gripping suspense thriller that will keep you on the edge.', '4.99', '2023-07-20', 11),
(10, 6, '19.99', 'An exciting thriller', '14.99', '2023-08-20', 3),
(11, 7, '29.99', 'A heartwarming romance', '24.99', '2023-08-21', 2),
(12, 8, '17.99', 'Classic mystery novel featuring Nancy Drew.', '15.99', '1930-04-28', 1),
(14, 9, '8.49', 'Epic science fiction novel set in a desert world.', '6.99', '1965-08-01', 3),
(15, 10, '19.99', 'A thrilling adventure novel set in a distant land.', '14.99', NULL, 1),
(16, 11, '15.99', 'An emotional journey through love and loss.', '12.99', NULL, 2),
(17, 12, '12.99', 'A gripping mystery that will keep you guessing.', '9.99', NULL, 3),
(18, 13, '17.99', 'A heartwarming tale of friendship and redemption.', '13.99', NULL, 1),
(19, 14, '21.99', 'A suspenseful crime thriller that will leave you on the edge of your seat.', '16.99', NULL, 4),
(20, 15, '18.99', 'A thought-provoking science fiction epic.', '14.99', NULL, 2),
(21, 19, '14.99', 'A laugh-out-loud comedy that will brighten your day.', '11.99', NULL, 10),
(22, 20, '16.99', 'An inspiring biography of a remarkable individual.', '12.99', NULL, 11);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Mystery'),
(2, 'Science Fiction'),
(3, 'Romance'),
(4, 'Mystery Fiction'),
(5, 'Fantasy Adventure'),
(6, 'Historical Romance'),
(10, 'Fantasy Romance'),
(11, 'Suspense Thriller');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_Number` varchar(255) NOT NULL,
  `Messege` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `phone_Number`, `Messege`) VALUES
(1, 'saif', 'saif@gmail.com', '12312312312', 'lorem ipsem abc'),
(2, 'saif', 'saif@gmail.com', '12312312312', 'lorem ipsem abc'),
(3, 'saif', 'saif@gmail.com', '12312312312', 'lorem ipsem abc'),
(4, 'saif', 'saif@gmail.com', '12312312312', 'lorem ipsem abc'),
(5, 'saif', 'saif@gmail.com', '12312312312', 'lorem ipsem abc'),
(6, 'saif', 'saif@gmail.com', '12312312312', 'lorem ipsem abc'),
(7, 'rizwan', 'khan', '123123123', 'behtreen kaam kr lia'),
(8, 'a', 'a@mail.com', '55445112181', 'hii how are you');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `author_id` int(11) DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `payment_status` varchar(255) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `author_id`, `order_date`, `total_amount`, `user_id`, `payment_status`) VALUES
(1, 1, '2023-09-01', '150.00', 1, 'pending'),
(2, 1, '2023-09-03', '100.00', 1, 'pending'),
(3, 1, '2023-09-05', '120.00', 1, 'completed'),
(4, 1, '2023-09-07', '180.00', 1, 'pending'),
(5, 1, '2023-09-09', '90.00', 1, 'pending'),
(6, 1, '2023-09-11', '200.00', 1, 'completed'),
(7, 1, '2023-09-13', '250.00', 1, 'completed'),
(8, 1, '2023-09-15', '300.00', 1, 'pending'),
(9, 1, '2023-09-17', '220.00', 1, 'pending'),
(10, 1, '2023-09-19', '175.00', 1, 'pending'),
(11, 1, '2023-09-21', '210.00', 1, 'pending'),
(12, 2, '2023-09-02', '200.00', 2, 'pending'),
(13, 2, '2023-09-04', '180.00', 2, 'pending'),
(14, 2, '2023-09-06', '250.00', 2, 'pending'),
(15, 2, '2023-09-08', '220.00', 2, 'pending'),
(16, 2, '2023-09-10', '300.00', 2, 'pending'),
(17, 2, '2023-09-12', '190.00', 2, 'pending'),
(18, 2, '2023-09-14', '280.00', 2, 'pending'),
(19, 2, '2023-09-16', '260.00', 2, 'pending'),
(20, 2, '2023-09-18', '230.00', 2, 'pending'),
(21, 2, '2023-09-20', '240.00', 2, 'pending'),
(22, 3, '2023-09-04', '300.00', 3, 'pending'),
(23, 3, '2023-09-06', '280.00', 3, 'pending'),
(24, 3, '2023-09-08', '350.00', 3, 'pending'),
(25, 3, '2023-09-10', '320.00', 3, 'pending'),
(26, 3, '2023-09-12', '400.00', 3, 'pending'),
(27, 3, '2023-09-14', '290.00', 3, 'pending'),
(28, 3, '2023-09-16', '380.00', 3, 'pending'),
(29, 3, '2023-09-18', '360.00', 3, 'pending'),
(30, 3, '2023-09-20', '330.00', 3, 'pending'),
(31, 3, '2023-09-22', '310.00', 3, 'pending'),
(32, 4, '2023-09-05', '400.00', 5, 'pending'),
(33, 4, '2023-09-07', '380.00', 5, 'pending'),
(34, 4, '2023-09-09', '450.00', 5, 'pending'),
(35, 4, '2023-09-11', '420.00', 5, 'pending'),
(36, 4, '2023-09-13', '500.00', 5, 'pending'),
(37, 4, '2023-09-15', '390.00', 5, 'pending'),
(38, 4, '2023-09-17', '480.00', 5, 'pending'),
(39, 4, '2023-09-19', '460.00', 5, 'pending'),
(40, 4, '2023-09-21', '430.00', 5, 'pending'),
(41, 4, '2023-09-23', '410.00', 5, 'pending'),
(42, 5, '2023-09-06', '500.00', 4, 'pending'),
(43, 5, '2023-09-08', '480.00', 4, 'pending'),
(44, 5, '2023-09-10', '550.00', 4, 'pending'),
(45, 5, '2023-09-12', '520.00', 4, 'pending'),
(46, 5, '2023-09-14', '600.00', 4, 'pending'),
(47, 5, '2023-09-16', '490.00', 4, 'pending'),
(48, 5, '2023-09-18', '580.00', 4, 'pending'),
(49, 5, '2023-09-20', '560.00', 4, 'pending'),
(50, 5, '2023-09-22', '530.00', 4, 'pending'),
(51, 5, '2023-09-24', '510.00', 4, 'pending'),
(52, 6, '2023-09-07', '600.00', 2, 'pending'),
(53, 6, '2023-09-09', '580.00', 2, 'pending'),
(54, 6, '2023-09-11', '650.00', 2, 'pending'),
(55, 6, '2023-09-13', '620.00', 2, 'pending'),
(56, 6, '2023-09-15', '700.00', 2, 'pending'),
(57, 6, '2023-09-17', '590.00', 2, 'pending'),
(58, 6, '2023-09-19', '680.00', 2, 'pending'),
(59, 6, '2023-09-21', '660.00', 2, 'pending'),
(60, 6, '2023-09-23', '630.00', 2, 'pending'),
(61, 6, '2023-09-25', '610.00', 2, 'pending'),
(62, 10, '2023-09-08', '1000.00', 4, 'pending'),
(63, 10, '2023-09-09', '800.00', 4, 'pending'),
(64, 10, '2023-09-10', '1200.00', 4, 'pending'),
(65, 10, '2023-09-11', '1100.00', 4, 'pending'),
(66, 10, '2023-09-12', '1300.00', 4, 'pending'),
(67, 10, '2023-09-13', '900.00', 4, 'pending'),
(68, 10, '2023-09-14', '1400.00', 4, 'pending'),
(69, 10, '2023-09-15', '1250.00', 4, 'pending'),
(70, 10, '2023-09-16', '1500.00', 4, 'pending'),
(71, 10, '2023-09-17', '1350.00', 4, 'pending'),
(72, 10, '2023-09-18', '1600.00', 4, 'pending'),
(73, 11, '2023-09-09', '1100.00', 1, 'pending'),
(74, 11, '2023-09-10', '950.00', 1, 'pending'),
(75, 11, '2023-09-11', '1250.00', 1, 'pending'),
(76, 11, '2023-09-12', '1150.00', 1, 'pending'),
(77, 11, '2023-09-13', '1350.00', 1, 'pending'),
(78, 11, '2023-09-14', '1050.00', 1, 'pending'),
(79, 11, '2023-09-15', '1400.00', 1, 'pending'),
(80, 11, '2023-09-16', '1300.00', 1, 'pending'),
(81, 11, '2023-09-17', '1500.00', 1, 'pending'),
(82, 11, '2023-09-18', '1450.00', 1, 'pending'),
(83, 11, '2023-09-19', '1600.00', 1, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `registration_date`) VALUES
(1, 'user1', 'password1', 'user1@example.com', '2023-08-31 20:08:22'),
(2, 'user2', 'password2', 'user2@example.com', '2023-08-31 20:08:22'),
(3, 'user3', 'password3', 'user3@example.com', '2023-08-31 20:08:22'),
(4, 'user4', 'password4', 'user4@example.com', '2023-08-31 20:08:22'),
(5, 'user5', 'password5', 'user5@example.com', '2023-08-31 20:08:22'),
(6, 'saifa', 'aaa', 'a@gmail.com', '2023-09-05 12:11:18'),
(7, 'a home', 'as', 'a@gmail.com', '2023-09-05 12:49:25'),
(8, ' ', '', '', '2023-09-05 12:54:18'),
(9, 'saif u', '123', 's@gmail.com', '2023-09-05 15:12:52'),
(10, 'ahmed k', '111', 'k@gmail.com', '2023-09-05 15:13:31'),
(11, 'saif ur rehman', 'saif', 's@gmail.com', '2023-09-05 21:16:40'),
(12, 'a a', 'a', 'a@gmail.com', '2023-09-05 21:17:20'),
(13, 'saif', 'a', 'aa@gmail.com', '2023-09-12 22:14:13'),
(14, 'saif ', '', '', '2023-09-12 22:42:37'),
(15, 'ali', '86318e52f5ed4801abe1d13d509443de', 'ali@gmail.com', '2023-09-12 23:11:26'),
(16, 'saif ur rehman', '123456789', 'saif@gmail.com', '2023-09-19 17:04:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `book_details`
--
ALTER TABLE `book_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `FK_author` (`author_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `book_details`
--
ALTER TABLE `book_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `book_details`
--
ALTER TABLE `book_details`
  ADD CONSTRAINT `FK_author` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`),
  ADD CONSTRAINT `book_details_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
