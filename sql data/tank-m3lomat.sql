-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2021 at 09:49 PM
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
(31, '‪Adel', 'Mukhtar‬‏', 'adel1352001@gmail.com', '35DX87H8jdrw9hf'),
(32, '‪Adel', 'Mukhtar‬‏', 'awdwsw66@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(33, '‪Adel', 'Mukhtar‬‏', 'mohsern@gmail.com', '29a1845ca479309798d1a463d00fdef8c1e6e28b'),
(34, '‪Adel', 'Mukhtar‬‏', 'adel12@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(35, '‪Adel', 'Mukhtar‬‏', 'adel123@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

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
(85, 'cloude component', 'Adel Mohsen', '300$', '2.jpg'),
(86, 'adel', 'adel5', '500$', '1.jpg'),
(87, 'adfgh', 'cdscx', 'dvsfvcs', '8.jpg');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `sigin_up`
--
ALTER TABLE `sigin_up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tablenew`
--
ALTER TABLE `tablenew`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
