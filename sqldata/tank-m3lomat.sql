-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 04:27 AM
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
-- Table structure for table `cartnum`
--

CREATE TABLE `cartnum` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `prod` varchar(255) DEFAULT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `order_id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip` int(5) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`order_id`, `fullname`, `email`, `address`, `city`, `state`, `zip`, `username`) VALUES
(14, 'محمد احمد', 'adel1352001@gmail.com', 'مركز ههيا شارع الجمهورية', 'الشرقية', 'kflecjod', 1258, '‪Adel'),
(15, '‪Adel Mohsen Mukhtar‬‏', 'adel1352001@gmail.com', 'dbischjkdsfjkhewd', 'wdviuo feovwsjdvnknf', 'kflecjod', 1258, '‪Adel'),
(16, '‪Adel Mohsen Mukhtar‬‏', 'adel1352001@gmail.com', 'dbischjkdsfjkhewd', 'wdviuo feovwsjdvnknf', 'kflecjod', 1258, '‪Adel');

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE `login_admin` (
  `id` int(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_admin`
--

INSERT INTO `login_admin` (`id`, `user`, `pass`) VALUES
(1, 'admin', 'admin'),
(16, 'adel_2001', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `sigin_up`
--

CREATE TABLE `sigin_up` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `paassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sigin_up`
--

INSERT INTO `sigin_up` (`id`, `first_name`, `last_name`, `email`, `paassword`) VALUES
(10, 'aswgh', 'ejkvdf', 'rgvegvknr', 'rdvnjfvkjfndvj'),
(33, '‪Adel', 'Mukhtar‬‏', 'mohsern@gmail.com', '29a1845ca479309798d1a463d00fdef8c1e6e28b'),
(36, 'ahmed', 'mohamed', 'aga@xskmxxnjs', '123456'),
(37, '‪Adel', 'Mukhtar‬‏', 'ad@gmail.com', '141d6d6bce4007bd0e50d1a014c01085f8aab9f0'),
(38, '‪Adel', 'Mukhtar‬‏', 'adel@gmail.com', 'b6589fc6ab0dc82cf12099d1c2d40ab994e8410c'),
(39, '‪Adel', 'Mukhtar‬‏', 'awdwsw66@gmail.com', 'fb96549631c835eb239cd614cc6b5cb7d295121a'),
(40, '‪Adel', 'Mukhtar‬‏', 'adel789@gmail.com', '8aefb06c426e07a0a671a1e2488b4858d694a730');

-- --------------------------------------------------------

--
-- Table structure for table `tablenew`
--

CREATE TABLE `tablenew` (
  `id` int(11) NOT NULL,
  `namBook` varchar(50) NOT NULL,
  `nameAuthor` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `picturename` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tablenew`
--

INSERT INTO `tablenew` (`id`, `namBook`, `nameAuthor`, `price`, `picturename`) VALUES
(91, 'Greater Good', 'William Shakespeare', 31, '2.jpg'),
(92, 'In ThisMoment', 'John Milton', 22, '3.jpg'),
(93, 'Censored Books', 'Jane Austen', 40, '4.jpg'),
(94, 'Steve Jobs', 'Francis Bacon', 20, '5.jpg'),
(95, 'The Namesake', 'Lord Byron', 50, '6.jpg'),
(96, 'Sacred Games', 'Lewis Carroll', 13, '7.jpg'),
(97, 'The Blue Umbrella', 'Agatha Christie', 14, '8.jpg'),
(98, 'Censored Books', 'Winston Churchill', 25, '4.jpg'),
(99, 'In ThisMoment', 'Francis Bacon', 85, '4.jpg'),
(100, 'Greater Good', 'Lewis Carroll', 24, '5.jpg'),
(101, 'Censored Books', 'Agatha Christie', 27, '6.jpg'),
(102, 'In ThisMoment', 'Lord Byron', 39, '2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cartnum`
--
ALTER TABLE `cartnum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sigin_up`
--
ALTER TABLE `sigin_up`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tablenew`
--
ALTER TABLE `tablenew`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cartnum`
--
ALTER TABLE `cartnum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sigin_up`
--
ALTER TABLE `sigin_up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tablenew`
--
ALTER TABLE `tablenew`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
