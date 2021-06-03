-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 09:16 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tank-m3lomat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tablenew`
--

CREATE TABLE `tablenew` (
  `id` int(11) NOT NULL,
  `namBook` varchar(50) NOT NULL,
  `nameAuthor` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `picturename` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tablenew`
--

INSERT INTO `tablenew` (`id`, `namBook`, `nameAuthor`, `price`, `picturename`) VALUES
(46, 'Greater Good', 'Stanley B. Lippmann, Jose Lagoy', '300$', '1.jpg'),
(49, 'Why U get Rejected', 'Specific References', '$8.69', '2.jpg'),
(85, 'cloude component', 'Adel Mohsen', '300$', '2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tablenew`
--
ALTER TABLE `tablenew`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tablenew`
--
ALTER TABLE `tablenew`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
