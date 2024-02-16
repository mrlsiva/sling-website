-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2023 at 10:33 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sling`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image`
--

CREATE TABLE `tbl_image` (
  `image_id` int(11) NOT NULL,
  `image_name` varchar(250) NOT NULL,
  `ProductName` varchar(30) NOT NULL,
  `price` int(20) NOT NULL,
  `image_description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_image`
--

INSERT INTO `tbl_image` (`image_id`, `image_name`, `ProductName`, `price`, `image_description`) VALUES
(43, 'client-15.png', '', 0, ''),
(44, 'client-14.png', '', 0, ''),
(45, 'client-13.png', '', 0, ''),
(46, 'client-12.png', '', 0, ''),
(47, 'client-11.png', '', 0, 'https://www.ontwikkelcorp.com/'),
(49, 'client-9.png', '', 0, 'https://spcinemas.in/'),
(50, 'client-8.png', '', 0, 'https://www.maduraikumarmess.com/'),
(51, 'client-7.jpg', '', 0, ''),
(52, 'client-6.png', '', 0, ''),
(53, 'client-5.png', '', 0, 'https://www.dotndash.in/'),
(54, 'client-5.gif', '', 0, 'https://www.subragiftstudios.com'),
(55, 'client-4.png', '', 0, 'https://maduraimaharajabiriyani.com'),
(56, 'client-3.png', '', 0, ''),
(57, 'client-2.png', '', 0, 'https://zapster.in/'),
(58, 'client-1.png', '', 0, 'https://littleprodigybooks.in/'),
(59, 'client-8-1894432605.png', '', 0, 'https://www.maduraikumarmess.com/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_image`
--
ALTER TABLE `tbl_image`
  ADD PRIMARY KEY (`image_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_image`
--
ALTER TABLE `tbl_image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
