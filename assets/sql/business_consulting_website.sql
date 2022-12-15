-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 07:44 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `business_consulting_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `isDeleted` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `username`, `email`, `password`, `image`, `isDeleted`) VALUES
(1, 'admin1', 'admin1@gmail.com', '123', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `chat_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `consultant_id` int(11) NOT NULL,
  `customerMessage` longtext NOT NULL,
  `consultantMessage` longtext NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `isDeleted` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `consultants`
--

CREATE TABLE `consultants` (
  `consultant_id` int(11) NOT NULL,
  `consultantUsername` varchar(50) NOT NULL,
  `consultantFirstName` varchar(50) NOT NULL,
  `consultantLastName` varchar(50) NOT NULL,
  `consultantEmail` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `consultantMobileNo` varchar(12) NOT NULL,
  `image` text NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` longtext NOT NULL,
  `availability` varchar(100) NOT NULL,
  `ratings` float NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `isDeleted` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consultants`
--

INSERT INTO `consultants` (`consultant_id`, `consultantUsername`, `consultantFirstName`, `consultantLastName`, `consultantEmail`, `password`, `consultantMobileNo`, `image`, `title`, `description`, `availability`, `ratings`, `createdDate`, `isDeleted`) VALUES
(1, 'OmaleeCooray', 'Omalee', 'Cooray', 'omalee@gmail.com', '123', '', 'CONSULTANT-630b0c01658177.12833639.jpg', 'Brand Strategist', 'I believe that every professional should have a personal website, or what I like to call a firstnamelastname.com. In this digital space, I realized I needed to go the extra mile to be warm and approachable. I want to connect with people and I love to share advice. My personal website is my outlet for that and it’s also a place where people can quickly find out who I am.\r\n\r\nI wanted to go from being viewed as a designer for hire to being respected as an authority in the branding and design field. A personal website has helped me build that platform. While I am currently defining the additional goals that I want to accomplish with my personal brand, my website still attracts inquires for consulting, speaking and guest blog writing. A personal website sends the message that I’m available for these opportunities, and helps me connect with people on an international scale.', 'Available', 0, '2022-12-15 11:55:36', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customerFirstName` varchar(50) NOT NULL,
  `customerLastName` varchar(50) NOT NULL,
  `customerUsername` varchar(50) NOT NULL,
  `customerEmail` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `profession` varchar(50) NOT NULL,
  `customerMobileNo` varchar(12) NOT NULL,
  `package` varchar(20) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `isDeleted` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customerFirstName`, `customerLastName`, `customerUsername`, `customerEmail`, `password`, `image`, `profession`, `customerMobileNo`, `package`, `createdDate`, `isDeleted`) VALUES
(1, 'Bat', 'Man', 'BatMan', 'batman@darkknight.com', '12345', 'CLIENT-62d543f1188ff4.47641459.jpg', 'Data Analyst', 'Enhanced', 'Enhanced', '2022-12-15 16:48:40', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `consultant_id` int(11) NOT NULL,
  `orderedDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `shipmentDate` varchar(100) NOT NULL,
  `shipmentStatus` varchar(50) NOT NULL,
  `isDeleted` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `consultant_id`, `orderedDate`, `shipmentDate`, `shipmentStatus`, `isDeleted`) VALUES
(1, 1, 1, '2022-12-15 11:00:23', '2022-12-20', '', 0),
(2, 1, 1, '2022-12-15 16:41:49', '', '', 0),
(3, 1, 1, '2022-12-15 16:42:50', '', '', 0),
(4, 1, 1, '2022-12-15 16:44:24', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`chat_id`),
  ADD UNIQUE KEY `customer_id` (`customer_id`),
  ADD UNIQUE KEY `consultant_id` (`consultant_id`);

--
-- Indexes for table `consultants`
--
ALTER TABLE `consultants`
  ADD PRIMARY KEY (`consultant_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `consultant_id` (`consultant_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `consultants`
--
ALTER TABLE `consultants`
  MODIFY `consultant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chats`
--
ALTER TABLE `chats`
  ADD CONSTRAINT `chats_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `chats_ibfk_2` FOREIGN KEY (`consultant_id`) REFERENCES `consultants` (`consultant_id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`consultant_id`) REFERENCES `consultants` (`consultant_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
