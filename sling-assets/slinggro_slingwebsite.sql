-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 16, 2024 at 05:50 AM
-- Server version: 10.5.23-MariaDB
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slinggro_slingwebsite`
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
(43, 'client-15.png', '', 0, 'https://maduraivasantham.com/'),
(47, 'client-11.png', '', 0, 'https://www.ontwikkelcorp.com/'),
(49, 'client-9.png', '', 0, 'https://spcinemas.in/'),
(50, 'client-8.png', '', 0, 'https://www.maduraikumarmess.com/'),
(51, 'client-7.jpg', '', 0, ''),
(52, 'client-6.png', '', 0, 'https://jiiyaalogistics.com/'),
(53, 'client-5.png', '', 0, 'https://www.dotndash.in/'),
(54, 'client-5.gif', '', 0, 'https://www.subragiftstudios.com'),
(55, 'client-4.png', '', 0, 'https://slinggroups.in/backup/maduraimaharajabiriyani.com/'),
(56, 'client-3.png', '', 0, ''),
(57, 'client-2.png', '', 0, 'https://zapster.in/'),
(58, 'client-1.png', '', 0, 'https://littleprodigybooks.in/'),
(60, 'Screenshot 2023-12-21 222033.png', '', 0, 'https://www.altedmicrocollege.com/'),
(61, 'sridevi-construction.png', '', 0, 'https://srideviconstructions.co.in/'),
(62, 'kv-enterprise.png', '', 0, 'https://kventerprise.in/'),
(64, 'smart-finance.jpg', '', 0, 'https://www.smartfinservice.com/'),
(65, 'vthree.png', '', 0, 'https://vthreetech.in/'),
(66, 'Astrawin.png', '', 0, 'https://astrawinindia.com/'),
(67, 'Screenshot 2023-12-21 230154.png', '', 0, 'https://pandiyankannan.com/'),
(68, 'd2.jpg', '', 0, 'https://d2travels.com/'),
(70, 'creative-karmas.jpg', '', 0, 'https://www.creativekarmas.com/'),
(71, 'raack.png', '', 0, 'https://raackdance.com/'),
(72, 'krishnamadana.png', '', 0, 'http://krishnamadana.in/');

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
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
