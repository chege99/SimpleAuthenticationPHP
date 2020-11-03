-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 03, 2020 at 03:38 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simple_catalog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `category_id` int(10) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`category_id`, `category`) VALUES
(1, 'Food'),
(2, 'Electronics'),
(3, 'Stationary');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `product_id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `owner_user_id` int(10) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `prod_buying_price` decimal(20,2) NOT NULL,
  `prod_selling_price` decimal(20,2) NOT NULL,
  `prod_quantity` decimal(20,2) NOT NULL,
  `prod_units_of_measure` varchar(100) NOT NULL,
  `prod_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`product_id`, `category_id`, `owner_user_id`, `prod_name`, `prod_buying_price`, `prod_selling_price`, `prod_quantity`, `prod_units_of_measure`, `prod_description`) VALUES
(2, 1, 6, 'Watermelons', '5001.00', '6001.00', '1100.00', 'xPer Water Melon', 'xThis is a demonstration text'),
(3, 1, 6, 'Bananas', '1221.00', '212122.00', '1212.00', 'zsd', 'qwqawq'),
(4, 1, 6, 'Apples', '1221.00', '124234.00', '23123.00', '123123', 'gerfwef'),
(5, 1, 6, 'Pencils', '1221.00', '212122.00', '12.00', '12', 'DESCRIPTION'),
(6, 1, 6, 'Keyboard', '1221.00', '212122.00', '12.00', '12', 'DESCRIPTION'),
(7, 1, 6, 'Soap', '1221.00', '212122.00', '12.00', '12', 'DESCRIPTION'),
(8, 1, 6, 'Paraffin', '1.00', '12.00', '12.00', '121212', 'Quantum'),
(9, 1, 6, 'Water', '1221.00', '212122.00', '1212.00', '12', 'Hello'),
(10, 1, 6, 'qwqw', '1.00', '12.00', '12.00', '121212', 'Quantum'),
(11, 1, 6, 'printers', '54000.00', '65000.00', '10.00', '2', 'hp core i7&#39;s');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(10) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `is_admin` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `firstname`, `lastname`, `email`, `password`, `is_admin`) VALUES
(9, 'Percy', 'Jackson', 'admin@gmail.com', '1bbd886460827015e5d605ed44252251', 1),
(10, 'John', 'Doe', 'user@gmail.com', '1bbd886460827015e5d605ed44252251', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
