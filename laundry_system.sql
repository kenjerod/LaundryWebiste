-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2023 at 04:04 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `user_id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`user_id`, `username`, `email`, `password`, `user_type`) VALUES
(23, 'marianne', 'jay23@gmail.com', '123456', '1'),
(24, 'jayjay', 'jayjay@gmail.com', 'admin', '1'),
(29, 'jude', 'gutierrezjudelyn14@gmail.com', '12345', '2'),
(30, 'kenjerod', 'kenjerod23@gmail.com', '12345', '2'),
(32, 'Peejay', 'peejay@gmail.com', '12345', '2'),
(33, 'christian', 'christian@gmail.com', '12345', '2'),
(34, 'chavez', 'chavez@gmail.com', '12345', '2'),
(36, 'jeus', 'jeus@gmail.com', '12345', '2'),
(37, 'kenjerod', 'kenjerod@gmail.com', '12345', '2'),
(38, 'marianne', 'kenjerod23@gmail.com', '112345', '2');

-- --------------------------------------------------------

--
-- Table structure for table `customers_address`
--

CREATE TABLE `customers_address` (
  `address_id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `user_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers_address`
--

INSERT INTO `customers_address` (`address_id`, `fullname`, `contact`, `address`, `user_id`) VALUES
(55, 'Judelyn Gutierrez', '09995059488', 'Block 23 Lot 54 Brgy Sta Lucia Dasmariñas City, Cavite', 29),
(56, 'Jerod M. Gutierrez', '09465924171', 'BLK 10 LOT 30 BRGY. STA FE EXT. 1', 30),
(57, 'Racquel Dy', '09651454656', 'BLK 1 LOT 17 MOLINO HOMES 2, SALITRAN III, DASMARIÑAS CITY, CAVITE', 24),
(58, 'Christian Mendoza', '09666888926', 'BLK 1 LOT 17 MOLINO HOMES 2, SALITRAN III, DASMARIÑAS CITY, CAVITE', 24),
(59, 'christan', '09995059488', 'DASMARINAS CAVITE', 33),
(60, 'John Jeus ', '09995059488', 'BLK 10 LOT 30 BRGY. STA FE EXT. 1', 36),
(61, 'Angelika Gutierrez', '09995059488 ', 'blk 100 lot 100 Brgy sta fe Dasmariñas city, cavite', 24);

-- --------------------------------------------------------

--
-- Table structure for table `customers_products`
--

CREATE TABLE `customers_products` (
  `product_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type_cleaning` varchar(255) NOT NULL,
  `kilograms` int(255) NOT NULL,
  `clean_price` int(255) NOT NULL,
  `special_item` int(255) NOT NULL,
  `press_iron` int(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `total` int(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `user_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers_products`
--

INSERT INTO `customers_products` (`product_id`, `name`, `type_cleaning`, `kilograms`, `clean_price`, `special_item`, `press_iron`, `payment`, `total`, `status`, `user_id`) VALUES
(43, '56', '100', 10, 1000, 250, 0, 'Cash on Delivery or Pick up', 1250, '1', 24),
(44, '57', '100', 10, 1000, 0, 0, 'Cash on Delivery or Pick up', 1000, '1', 24),
(46, '58', '75', 2, 150, 100, 150, 'Cash on Delivery or Pick up', 400, '1', 24),
(47, '56', '50', 5, 250, 0, 150, 'Cash on Delivery or Pick up', 400, '1', 24),
(48, '59', '50', 1, 50, 0, 0, ' Cash on Delivery or Pick up', 100, '0', 33),
(49, '58', '75', 1, 75, 150, 150, 'Cash on Delivery or Pick up', 375, '0', 24),
(50, '55', '100', 2, 200, 50, 0, ' Cash on Delivery or Pick up', 300, '0', 29),
(51, '60', '75', 1, 75, 100, 150, ' Cash on Delivery or Pick up', 375, '0', 36),
(52, '61', '50', 1, 50, 150, 150, 'Cash on Delivery or Pick up', 350, '1', 24);

-- --------------------------------------------------------

--
-- Table structure for table `drycleaning_prices`
--

CREATE TABLE `drycleaning_prices` (
  `dryprice_id` int(255) NOT NULL,
  `dry_name` varchar(255) NOT NULL,
  `kilograms` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `dry_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drycleaning_prices`
--

INSERT INTO `drycleaning_prices` (`dryprice_id`, `dry_name`, `kilograms`, `price`, `dry_id`) VALUES
(1, 'Dry Cleaning', '1', '100', 3),
(2, 'Dry Cleaning', '2', '200', 3),
(3, 'Dry Cleaning', '3', '300', 3),
(4, 'Dry Cleaning', '4', '400', 3),
(5, 'Dry Cleaning', '5', '600', 3),
(6, 'Dry Cleaning', '6', '600', 3),
(7, 'Dry Cleaning', '7', '600', 3),
(8, 'Dry Cleaning', '8', '800', 3),
(9, 'Dry Cleaning', '9', '800', 3),
(10, 'Dry Cleaning', '10', '1000', 3);

-- --------------------------------------------------------

--
-- Table structure for table `handwash_name`
--

CREATE TABLE `handwash_name` (
  `handwash_id` int(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `handwash_name`
--

INSERT INTO `handwash_name` (`handwash_id`, `type`) VALUES
(1, 'Hand Wash & Hang Dry'),
(2, 'Wash & Dry'),
(3, 'Dry Cleaning');

-- --------------------------------------------------------

--
-- Table structure for table `handwash_prices`
--

CREATE TABLE `handwash_prices` (
  `handprice_id` int(255) NOT NULL,
  `handwashing` varchar(255) NOT NULL,
  `kilograms` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `handwash_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `handwash_prices`
--

INSERT INTO `handwash_prices` (`handprice_id`, `handwashing`, `kilograms`, `price`, `handwash_id`) VALUES
(1, 'Hand Wash & Hang Dry', '1', '75', 1),
(2, 'Hand Wash & Hang Dry', '2', '150', 1),
(3, 'Hand Wash & Hang Dry', '3', '225', 1),
(4, 'Hand Wash & Hang Dry', '4', '300', 1),
(5, 'Hand Wash & Hang Dry', '5', '350', 1),
(6, 'Hand Wash & Hang Dry', '6', '350', 1),
(7, 'Hand Wash & Hang Dry', '7', '350', 1),
(8, 'Hand Wash & Hang Dry', '8', '500', 1),
(9, 'Hand Wash & Hang Dry', '9', '500', 1),
(10, 'Hand Wash & Hang Dry', '10', '600', 1);

-- --------------------------------------------------------

--
-- Table structure for table `press_iron`
--

CREATE TABLE `press_iron` (
  `iron_id` int(255) NOT NULL,
  `w/press_iron` varchar(255) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `press_iron`
--

INSERT INTO `press_iron` (`iron_id`, `w/press_iron`, `price`) VALUES
(1, 'Yes', 150),
(2, 'No', 0);

-- --------------------------------------------------------

--
-- Table structure for table `special_items`
--

CREATE TABLE `special_items` (
  `special_id` int(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `special_items`
--

INSERT INTO `special_items` (`special_id`, `item`, `price`) VALUES
(1, 'Bags', 100),
(2, 'Barong', 150),
(3, 'Blanket', 200),
(4, 'Bed Sheets', 250),
(5, 'Comforter', 350),
(6, 'Jackets', 50),
(7, 'Rubber Shoes', 150),
(8, 'Cap', 150),
(9, 'Sneakers', 150),
(10, 'Slippers', 150),
(11, 'Stuffed Toys', 300);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usertype`
--

CREATE TABLE `tbl_usertype` (
  `usertype_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_usertype`
--

INSERT INTO `tbl_usertype` (`usertype_id`, `name`, `Description`) VALUES
(1, 'admin', 'all access'),
(2, 'customer', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `wash_price`
--

CREATE TABLE `wash_price` (
  `washprice_id` int(255) NOT NULL,
  `wash_name` varchar(255) NOT NULL,
  `kilograms` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `wash_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wash_price`
--

INSERT INTO `wash_price` (`washprice_id`, `wash_name`, `kilograms`, `price`, `wash_id`) VALUES
(1, 'Wash & Dry', '1', '50', 2),
(2, 'Wash & Dry', '2', '100', 2),
(3, 'Wash & Dry', '3', '150', 2),
(4, 'Wash & Dry', '4', '200', 2),
(5, 'Wash & Dry', '5', '300', 2),
(6, 'Wash & Dry', '6', '300', 2),
(7, 'Wash & Dry', '7', '300', 2),
(8, 'Wash & Dry', '8', '400', 2),
(9, 'Wash & Dry', '9', '400', 2),
(10, 'Wash & Dry', '10', '500', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `customers_address`
--
ALTER TABLE `customers_address`
  ADD PRIMARY KEY (`address_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `customers_products`
--
ALTER TABLE `customers_products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `drycleaning_prices`
--
ALTER TABLE `drycleaning_prices`
  ADD PRIMARY KEY (`dryprice_id`),
  ADD KEY `dry_id` (`dry_id`);

--
-- Indexes for table `handwash_name`
--
ALTER TABLE `handwash_name`
  ADD PRIMARY KEY (`handwash_id`);

--
-- Indexes for table `handwash_prices`
--
ALTER TABLE `handwash_prices`
  ADD PRIMARY KEY (`handprice_id`);

--
-- Indexes for table `press_iron`
--
ALTER TABLE `press_iron`
  ADD PRIMARY KEY (`iron_id`);

--
-- Indexes for table `special_items`
--
ALTER TABLE `special_items`
  ADD PRIMARY KEY (`special_id`);

--
-- Indexes for table `tbl_usertype`
--
ALTER TABLE `tbl_usertype`
  ADD PRIMARY KEY (`usertype_id`);

--
-- Indexes for table `wash_price`
--
ALTER TABLE `wash_price`
  ADD PRIMARY KEY (`washprice_id`),
  ADD KEY `wash_id` (`wash_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `customers_address`
--
ALTER TABLE `customers_address`
  MODIFY `address_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `customers_products`
--
ALTER TABLE `customers_products`
  MODIFY `product_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `drycleaning_prices`
--
ALTER TABLE `drycleaning_prices`
  MODIFY `dryprice_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `handwash_name`
--
ALTER TABLE `handwash_name`
  MODIFY `handwash_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `handwash_prices`
--
ALTER TABLE `handwash_prices`
  MODIFY `handprice_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `press_iron`
--
ALTER TABLE `press_iron`
  MODIFY `iron_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `special_items`
--
ALTER TABLE `special_items`
  MODIFY `special_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_usertype`
--
ALTER TABLE `tbl_usertype`
  MODIFY `usertype_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wash_price`
--
ALTER TABLE `wash_price`
  MODIFY `washprice_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers_address`
--
ALTER TABLE `customers_address`
  ADD CONSTRAINT `customers_address_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `accounts` (`user_id`);

--
-- Constraints for table `customers_products`
--
ALTER TABLE `customers_products`
  ADD CONSTRAINT `customers_products_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `accounts` (`user_id`);

--
-- Constraints for table `drycleaning_prices`
--
ALTER TABLE `drycleaning_prices`
  ADD CONSTRAINT `drycleaning_prices_ibfk_1` FOREIGN KEY (`dry_id`) REFERENCES `handwash_name` (`handwash_id`);

--
-- Constraints for table `handwash_prices`
--
ALTER TABLE `handwash_prices`
  ADD CONSTRAINT `handwash_prices_ibfk_1` FOREIGN KEY (`handwash_id`) REFERENCES `handwash_name` (`handwash_id`);

--
-- Constraints for table `wash_price`
--
ALTER TABLE `wash_price`
  ADD CONSTRAINT `wash_price_ibfk_1` FOREIGN KEY (`wash_id`) REFERENCES `handwash_name` (`handwash_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
