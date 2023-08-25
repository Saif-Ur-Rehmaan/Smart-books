-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2023 at 02:00 AM
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
-- Database: `smart-books`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `bio`) VALUES
(1, 'Carolyn Keene', 'Mystery author of Nancy Drew series.'),
(2, 'Agatha Christie', 'Famous mystery novelist.'),
(3, 'Frank Herbert', 'Author of the science fiction classic Dune.'),
(4, 'John Doe', 'John Doe is a prolific author with a passion for storytelling.'),
(5, 'Jane Smith', 'Jane Smith is a talented writer known for her compelling narratives.'),
(6, 'Michael Johnson', 'Michael Johnson is an award-winning author who captivates readers.'),
(10, 'Emily Williams', 'Emily Williams is known for her captivating romance novels that touch hearts.'),
(11, 'David Anderson', 'David Anderson\'s thrilling mystery novels have earned him a dedicated readership.');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `special` varchar(255) DEFAULT NULL,
  `is_Featured` varchar(10) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image_name` varchar(255) NOT NULL,
  `views` int(11) DEFAULT 0,
  `QuantityInStock` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `category_id`, `special`, `is_Featured`, `title`, `image_name`, `views`, `QuantityInStock`) VALUES
(1, 1, '1', '', 'The Secret of the Old Clock', '12-700x700_47586504-c2d9-472a-813f-34c7dcfec5ed_600x600.jpg@v=1552407966', 236, 10),
(2, 1, '1', '0', 'Murder on the Orient Express', '13-700x700_79425203-3721-4beb-a32d-5b0ce707597e_600x600.jpg@v=1552408122', 347, 0),
(3, 1, '1', '0', 'The Girl with the Dragon Tattoo', '11-700x700_458ce7bf-cb27-49db-88eb-882e4693f2b4_600x600.jpg@v=1552406840', 134, 0),
(4, 1, NULL, '0', 'Gone Girl', '12-700x700_47586504-c2d9-472a-813f-34c7dcfec5ed_600x600.jpg@v=1552407966', 557, 0),
(5, 1, '1', '0', 'Big Little Lies', '7-700x700_fbe0ea4b-7436-4710-bb1f-3666a9ef6df8_600x600.jpg@v=1552408335', 26, 0),
(6, 2, NULL, '0', 'Dune', '12-700x700_47586504-c2d9-472a-813f-34c7dcfec5ed_600x600.jpg@v=1552407966', 253, 0),
(7, 2, NULL, '0', 'Foundation', '12-700x700_47586504-c2d9-472a-813f-34c7dcfec5ed_600x600.jpg@v=1552407966', 672, 0),
(8, 2, NULL, '0', 'Snow Crash', '12-700x700_47586504-c2d9-472a-813f-34c7dcfec5ed_600x600.jpg@v=1552407966', 221, 0),
(9, 2, NULL, '', 'Neuromancer', '12-700x700_47586504-c2d9-472a-813f-34c7dcfec5ed_600x600.jpg@v=1552407966', 66, 0),
(10, 2, NULL, '1', 'The Martian', '12-700x700_47586504-c2d9-472a-813f-34c7dcfec5ed_600x600.jpg@v=1552407966', 653, 0),
(11, 3, NULL, '1', 'Pride and Prejudice', '12-700x700_47586504-c2d9-472a-813f-34c7dcfec5ed_600x600.jpg@v=1552407966', 1035, 0),
(12, 3, NULL, '', 'Outlander', '12-700x700_47586504-c2d9-472a-813f-34c7dcfec5ed_600x600.jpg@v=1552407966', 642, 0),
(13, 3, NULL, '1', 'The Notebook', '12-700x700_47586504-c2d9-472a-813f-34c7dcfec5ed_600x600.jpg@v=1552407966', 666, 0),
(14, 3, NULL, '', 'Me Before You', '12-700x700_47586504-c2d9-472a-813f-34c7dcfec5ed_600x600.jpg@v=1552407966', 222, 0),
(15, 3, NULL, '1', 'The Fault in Our Stars', '12-700x700_47586504-c2d9-472a-813f-34c7dcfec5ed_600x600.jpg@v=1552407966', 958, 0),
(19, 10, NULL, '', 'Whispers of Love', '12-700x700_47586504-c2d9-472a-813f-34c7dcfec5ed_600x600.jpg@v=1552407966', 838, 0),
(20, 11, NULL, '1', 'Secrets in the Shadows', '12-700x700_47586504-c2d9-472a-813f-34c7dcfec5ed_600x600.jpg@v=1552407966', 796, 0);

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
(1, 1, '15.99', 'Classic mystery novel featuring Nancy Drew.', '12.99', '1930-04-28', 1),
(2, 2, '12.50', 'Famous detective Hercule Poirot investigates a murder on a train.', '2.99', '1934-01-01', 2),
(3, 3, '19.99', 'Epic science fiction novel set in a desert world.', '10.49', '1965-08-01', 3),
(4, 5, '10.99', 'An enchanting tale of love and fantasy.', '6.99', '2023-08-15', 10),
(5, 20, '8.99', 'A gripping suspense thriller that will keep you on the edge.', '4.99', '2023-07-20', 11),
(10, 12, '19.99', 'An exciting thriller', '14.99', '2023-08-20', 3),
(11, 13, '29.99', 'A heartwarming romance', '24.99', '2023-08-21', 2),
(12, 10, '17.99', 'Classic mystery novel featuring Nancy Drew.', '15.99', '1930-04-28', 1),
(13, 11, '22.99', 'Famous detective Hercule Poirot investigates a murder.', '12.50', '1934-01-01', 2),
(14, 15, '8.49', 'Epic science fiction novel set in a desert world.', '6.99', '1965-08-01', 3);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `book_details`
--
ALTER TABLE `book_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
