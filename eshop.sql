-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2015 at 06:01 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `user_id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `quantity` int(200) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `description`, `image`, `count`) VALUES
(10, 'Apple Iphone 6s', 1000, 'Color:Rose Gold', 'iphone6s.jpg', 0),
(14, 'HTC Mobile', 350, 'Color:Grey', 'HTC.jpg', 98),
(20, 'Samsung S6', 750, 'Color:Black', 'ss6jpg.jpg', 100),
(40, 'LG', 400, 'Color: Black', 'LG.jpg', 100),
(123, 'Hp Laptop', 550, 'Hard disk: 4GB RAM: 4GB', 'Hp1.png', 100),
(220, 'Apple Macbook Pro', 950, 'Hard disk:4GB RAM:8GB', 'mpro.jpg', 100),
(440, 'Apple Macbook Air', 700, 'Hard disk: 2GB RAM:4GB', 'mair.jpg', 100),
(1001, 'Lenovo Laptop', 400, 'Hard disk: 2GB RAM: 2GB', 'Lenovo.jpg', 98);

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE IF NOT EXISTS `purchases` (
  `user_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `product_title` text NOT NULL,
  `product_price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`user_id`, `pro_id`, `product_title`, `product_price`, `quantity`) VALUES
(13, 14, 'HTC Mobile', 350, 5),
(13, 20, 'Samsung S6', 750, 1),
(13, 40, 'LG', 400, 1),
(13, 123, 'Hp Laptop', 550, 3),
(13, 440, 'Apple Macbook Air', 700, 3),
(13, 1001, 'Lenovo Laptop', 400, 11),
(22, 40, 'LG', 400, 3),
(25, 14, 'HTC Mobile', 350, 3),
(25, 20, 'Samsung S6', 750, 1),
(25, 40, 'LG', 400, 1),
(25, 1001, 'Lenovo Laptop', 400, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `picture` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `first_name`, `last_name`, `picture`) VALUES
(6, 'Ahmed@ahmed.com', 'Ahmed', 'Ahmed', 'Naga', ''),
(7, 'ahmed@ahmed.com', 'Ahmed1', 'Ahmed', 'Naga', ''),
(8, 'raghda@k.com', 'raghda1', 'Raghda', 'Kaled', ''),
(9, 'raghda@kh.com', 'raghdak', 'Raghda', 'Kaled', ''),
(10, 'Khaled@khaled.com', 'raghda1', 'Khaled', 'Soltan', ''),
(11, 'gamal@gamal.com', 'Gamal', '', 'gamal', ''),
(12, 'Sara@sara.com', 'Sara1', 'Sara', 'Sameh', 'DSC_0244.JPG'),
(13, 'raghda@gmail.com', 'raghda', 'Raghda', 'Soltan', ''),
(14, 'Doha@gmail.com', 'Doha', 'Doha', 'Naga', 'logo_eshop.jpg'),
(15, 'sohail@sohail.com', 'sohail', 'Sohail', 'Khaled', 'ss6jpg.jpg'),
(16, 'sohail@khaled.com', 'Raghda', 'Sohail', 'Soltan', ''),
(17, 'nahed@gmail.com', 'nahed', 'Nahed', 'Shazly', ''),
(18, 'nourhan@gmail.com', 'nourhan', 'nourhan', 'khaled', ''),
(19, 'kaled@gmail.com', 'kaled', 'kaled', 'kaled', ''),
(20, 'nada@gmail.com', 'Nada', 'Nada', 'Ahmed', ''),
(21, 'omar@gmail.com', 'omar', 'omar', 'ahmed', ''),
(22, 'omar1@gmail.com', 'omar', 'omar', 'ahmed', ''),
(23, 'm@m.com', 'mouaz', 'mouaz', 'esam', 'bg3.jpg'),
(24, 'nora@gmail.com', 'nora', 'Nora', 'Alaa', ''),
(25, 'noran@gmail.com', 'noran', 'noran', 'hisham', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`user_id`,`product_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `quantity` (`quantity`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`user_id`,`pro_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
