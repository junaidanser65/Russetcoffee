-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2023 at 01:26 PM
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
-- Database: `russet_coffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `privilage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Name`, `Email`, `Password`, `privilage`) VALUES
(8, NULL, 'admin', 'admin', 1),
(12, 'Junaid', 'batnat786@gmail.com', '123', 0),
(9, NULL, 'junaid', '123', 0),
(14, 'Ramiz', 'ramiz@gmail.com', '123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `Booking_id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Table_id` int(11) NOT NULL,
  `no_of_peoples` int(11) NOT NULL,
  `requests` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cancelled_orders`
--

CREATE TABLE `cancelled_orders` (
  `orderID` int(11) NOT NULL DEFAULT 0,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Phone` varchar(13) NOT NULL,
  `CAFFE_LATTE` int(11) NOT NULL,
  `COFFEE_MOCHA` int(11) NOT NULL,
  `WHITE_CHOCOLATE_MOCHA` int(11) NOT NULL,
  `AMERICAN_COFFEE` int(11) NOT NULL,
  `cancelled_time_date` datetime NOT NULL,
  `cancelled_by_admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cancelled_orders`
--

INSERT INTO `cancelled_orders` (`orderID`, `Name`, `Email`, `Address`, `Phone`, `CAFFE_LATTE`, `COFFEE_MOCHA`, `WHITE_CHOCOLATE_MOCHA`, `AMERICAN_COFFEE`, `cancelled_time_date`, `cancelled_by_admin_id`) VALUES
(10, 'Jessica Taylor', 'jessicataylor@example.com', '888 Walnut Avenue, Villageland, USA', '+1 (555) 444-', 2, 0, 0, 2, '2023-05-23 22:00:13', 0),
(11, 'Andrew Miller', 'andrewmiller@example.com', '999 Oak Street, Suburbville, USA', '+1 (555) 555-', 0, 1, 2, 3, '2023-05-23 22:00:14', 0),
(12, 'Olivia Anderson', 'oliviaanderson@example.com', '444 Elm Road, Cityville, USA', '+1 (555) 666-', 1, 1, 1, 1, '2023-05-23 22:00:16', 0),
(13, 'Daniel Wilson', 'danielwilson@example.com', '222 Pine Avenue, Countryside, USA', '+1 (555) 777-', 2, 2, 2, 2, '2023-05-23 22:12:17', 0),
(14, 'John Doe', 'johndoe@example.com', '123 Main Street, Anytown, USA', '+1 (555) 123-', 2, 1, 0, 3, '2023-05-26 21:01:34', 8),
(16, 'David Johnson', 'davidjohnson@example.com', '789 Oak Avenue, Sometown, USA', '+1 (555) 555-', 1, 0, 2, 2, '2023-05-26 21:07:04', 9),
(19, 'Emily Wilson', 'emilywilson@example.com', '777 Maple Street, Townsville, USA', '+1 (555) 333-', 1, 1, 1, 1, '2023-05-26 21:07:07', 9),
(20, 'Jessica Taylor', 'jessicataylor@example.com', '888 Walnut Avenue, Villageland, USA', '+1 (555) 444-', 2, 0, 0, 2, '2023-05-26 21:14:22', 9),
(24, '', '', '', '', 0, 0, 0, 0, '2023-06-02 16:28:24', 8),
(25, 'Junaid', 'junaidanser65@gmail.com', 'asdasd', '', 1, 0, 1, 0, '2023-06-02 16:29:31', 8),
(27, 'asdf', 'junaidanser65@gmail.com', 'asdasd', '03484783073', 1, 0, 0, 0, '2023-06-02 16:36:06', 8),
(28, 'Junaid', 'junaidanser65@gmail.com', 'asdasd', '03484783073', 1, 0, 1, 1, '2023-06-02 16:36:07', 8),
(29, 'Junaid', 'junaidanser65@gmail.com', 'asdasd', '03484783073', 1, 1, 1, 1, '2023-06-02 16:43:15', 8),
(30, 'Junaid', 'junaidanser65@gmail.com', 'asdasd', '03484783073', 1, 1, 1, 1, '2023-06-02 16:43:17', 8),
(31, 'Junaid', 'junaidanser65@gmail.com', 'asdasd', '03484783073', 1, 1, 1, 1, '2023-06-02 16:43:18', 8),
(32, 'Junaid', 'junaidanser65@gmail.com', 'asdasd', '03484783073', 1, 1, 1, 1, '2023-06-02 17:25:25', 9),
(33, 'Junaid', 'junaidanser65@gmail.com', 'asdasd', '03484783073', 1, 1, 1, 1, '2023-06-02 17:25:26', 9);

-- --------------------------------------------------------

--
-- Table structure for table `completed_orders`
--

CREATE TABLE `completed_orders` (
  `orderID` int(11) NOT NULL DEFAULT 0,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Phone` varchar(13) NOT NULL,
  `CAFFE_LATTE` int(11) NOT NULL,
  `COFFEE_MOCHA` int(11) NOT NULL,
  `WHITE_CHOCOLATE_MOCHA` int(11) NOT NULL,
  `AMERICAN_COFFEE` int(11) NOT NULL,
  `completed_time_date` datetime NOT NULL,
  `completed_by_admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `completed_orders`
--

INSERT INTO `completed_orders` (`orderID`, `Name`, `Email`, `Address`, `Phone`, `CAFFE_LATTE`, `COFFEE_MOCHA`, `WHITE_CHOCOLATE_MOCHA`, `AMERICAN_COFFEE`, `completed_time_date`, `completed_by_admin_id`) VALUES
(4, 'John Doe', 'johndoe@example.com', '123 Main Street, Anytown, USA', '+1 (555) 123-', 2, 1, 0, 3, '0000-00-00 00:00:00', 0),
(5, 'Jane Smith', 'janesmith@example.com', '456 Elm Street, Otherville, USA', '+1 (555) 987-', 0, 2, 1, 4, '0000-00-00 00:00:00', 0),
(6, 'David Johnson', 'davidjohnson@example.com', '789 Oak Avenue, Sometown, USA', '+1 (555) 555-', 1, 0, 2, 2, '2023-05-23 21:43:55', 0),
(15, 'Jane Smith', 'janesmith@example.com', '456 Elm Street, Otherville, USA', '+1 (555) 987-', 0, 2, 1, 4, '2023-05-26 21:06:00', 8),
(17, 'Sarah Davis', 'sarahdavis@example.com', '321 Pine Road, Villageville, USA', '+1 (555) 111-', 0, 0, 1, 1, '2023-05-26 21:07:04', 9),
(18, 'Michael Brown', 'michaelbrown@example.com', '555 Cedar Lane, Citytown, USA', '+1 (555) 222-', 3, 2, 1, 0, '2023-05-26 21:07:06', 9),
(21, 'Andrew Miller', 'andrewmiller@example.com', '999 Oak Street, Suburbville, USA', '+1 (555) 555-', 0, 1, 2, 3, '2023-05-26 21:14:23', 9),
(22, 'Olivia Anderson', 'oliviaanderson@example.com', '444 Elm Road, Cityville, USA', '+1 (555) 666-', 1, 1, 1, 1, '2023-05-28 12:48:15', 8),
(23, 'Daniel Wilson', 'danielwilson@example.com', '222 Pine Avenue, Countryside, USA', '+1 (555) 777-', 2, 2, 2, 2, '2023-05-31 21:01:57', 8),
(26, 'Junaid', 'junaidanser65@gmail.com', 'asdasd', '03484783073', 1, 1, 1, 1, '2023-06-02 16:29:54', 8);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Subject` varchar(150) NOT NULL,
  `Message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name`, `Email`, `Subject`, `Message`) VALUES
('Junaid', 'junaidanser65@gmail.com', 'Test', 'Testing');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Phone` varchar(13) NOT NULL,
  `CAFFE_LATTE` int(11) NOT NULL,
  `COFFEE_MOCHA` int(11) NOT NULL,
  `WHITE_CHOCOLATE_MOCHA` int(11) NOT NULL,
  `AMERICAN_COFFEE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prev_bookings`
--

CREATE TABLE `prev_bookings` (
  `Booking_id` int(11) NOT NULL DEFAULT 0,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Table_id` int(11) NOT NULL,
  `no_of_peoples` int(11) NOT NULL,
  `requests` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prev_bookings`
--

INSERT INTO `prev_bookings` (`Booking_id`, `Name`, `Email`, `Table_id`, `no_of_peoples`, `requests`) VALUES
(6, 'Junaid', 'junaidanser65@gmail.com', 2, 1, 'n'),
(7, 'Junaid', 'junaidanser65@gmail.com', 1, 2, 'n'),
(8, 'Junaid', 'junaidanser65@gmail.com', 3, 1, 'f'),
(9, 'Junaid', 'junaidanser65@gmail.com', 1, 2, 'hello!'),
(10, 'Junaid', 'junaidanser65@gmail.com', 2, 3, 'Helasdasdasdas!'),
(11, 'Junaid', 'junaidanser65@gmail.com', 3, 1, 'asfasfasf'),
(12, 'Junaid', 'junaidanser65@gmail.com', 1, 1, 'hello!'),
(13, 'Junaid', 'junaidanser65@gmail.com', 2, 1, 'hi'),
(14, 'Junaid', 'junaidanser65@gmail.com', 1, 1, 'hi, discount!');

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `Table_id` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `managed_by` int(11) NOT NULL,
  `booked` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`Table_id`, `capacity`, `managed_by`, `booked`) VALUES
(1, 3, 14, 0),
(2, 3, 12, 0),
(3, 3, 8, 0),
(4, 3, 9, 0),
(5, 3, 14, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Email`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`Booking_id`),
  ADD UNIQUE KEY `Table_id` (`Table_id`);

--
-- Indexes for table `cancelled_orders`
--
ALTER TABLE `cancelled_orders`
  ADD KEY `fk_cancelled_by_admin_id` (`cancelled_by_admin_id`);

--
-- Indexes for table `completed_orders`
--
ALTER TABLE `completed_orders`
  ADD KEY `fk_completed_by_admin_id` (`completed_by_admin_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `prev_bookings`
--
ALTER TABLE `prev_bookings`
  ADD KEY `fk_prev_book` (`Table_id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`Table_id`),
  ADD KEY `fk_managed_by` (`managed_by`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `Booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `Table_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `fk_table` FOREIGN KEY (`Table_id`) REFERENCES `tables` (`Table_id`);

--
-- Constraints for table `cancelled_orders`
--
ALTER TABLE `cancelled_orders`
  ADD CONSTRAINT `fk_cancelled_by_admin_id` FOREIGN KEY (`cancelled_by_admin_id`) REFERENCES `admin` (`ID`);

--
-- Constraints for table `completed_orders`
--
ALTER TABLE `completed_orders`
  ADD CONSTRAINT `fk_completed_by_admin_id` FOREIGN KEY (`completed_by_admin_id`) REFERENCES `admin` (`ID`);

--
-- Constraints for table `prev_bookings`
--
ALTER TABLE `prev_bookings`
  ADD CONSTRAINT `fk_prev_book` FOREIGN KEY (`Table_id`) REFERENCES `tables` (`Table_id`);

--
-- Constraints for table `tables`
--
ALTER TABLE `tables`
  ADD CONSTRAINT `fk_managed_by` FOREIGN KEY (`managed_by`) REFERENCES `admin` (`ID`);

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `Tables_setter` ON SCHEDULE EVERY 15 SECOND STARTS '2023-06-03 14:13:14' ON COMPLETION NOT PRESERVE ENABLE DO BEGIN
    INSERT INTO prev_bookings
    SELECT * FROM bookings;
    DELETE FROM bookings;
    UPDATE tables SET booked = 0;
  END$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
