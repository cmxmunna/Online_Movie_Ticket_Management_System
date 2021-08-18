-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 11:09 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `movie_id` varchar(110) NOT NULL,
  `movie_name` varchar(110) NOT NULL,
  `category` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `amount` varchar(110) NOT NULL,
  `payment_method` varchar(110) NOT NULL,
  `number` varchar(110) NOT NULL,
  `status` varchar(110) NOT NULL,
  `order_date` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `username`, `movie_id`, `movie_name`, `category`, `date`, `time`, `amount`, `payment_method`, `number`, `status`, `order_date`) VALUES
(21, '58690034040275', 'Kazi Tajul Islam', '19', '007', 'Action', '2021-08-26', '6.00-8.00 PM', '800', 'ROCKET', '1627124780', 'Order Canceled', '16-Aug-2021 10:56 PM');

-- --------------------------------------------------------

--
-- Table structure for table `ticketlist`
--

CREATE TABLE `ticketlist` (
  `id` int(11) NOT NULL,
  `moviename` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `price` varchar(30) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticketlist`
--

INSERT INTO `ticketlist` (`id`, `moviename`, `category`, `date`, `time`, `price`, `image`) VALUES
(19, '007', 'Action', '2021-08-26', '6.00-8.00 PM', '800', '10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `name`, `username`, `password`, `email`, `type`, `address`, `phone`, `dob`, `gender`, `image`) VALUES
(1, 'Munna Abdullah', 'cmxmunna', '12345', 'cmxmunna@gmail.com', 'Admin', 'Golan, Ulokhola, Kaliganj, Gazipur', '01627120000', '1999-12-01', 'Male', 'Munna.jpg'),
(2, 'Kazi Tajul Islam', 'himu', '12345', 'himu@gmail.com', 'User', 'Address- 123/4 hazaribag road,Dhaka-1209', '01674169352', '06/25/1998', 'Male', 'Himu.jpg'),
(3, 'Farhan Nayeem Zitu', 'farhan', 'Farhan@123', 'farhann@gmail.com', 'Employee', '134-A, Amir Sarkar Road, Dholadia', '01798703826', '1999-12-07', 'Male', 'Farhan.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticketlist`
--
ALTER TABLE `ticketlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `ticketlist`
--
ALTER TABLE `ticketlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
