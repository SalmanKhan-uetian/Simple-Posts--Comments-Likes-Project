-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2019 at 08:15 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `addpost`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `comm_id` int(11) NOT NULL,
  `comm_description` varchar(1100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `comm_id`, `comm_description`) VALUES
(47, 9, '        	\r\n        zzzzzzzzzzzz'),
(48, 6, 'hhhh        	\r\n        '),
(49, 0, ' 1111       	\r\n        '),
(50, 0, '       1222222222222 	\r\n        '),
(51, 6, '        	\r\n        jjjj'),
(52, 6, 'cccccccc        	\r\n        ');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `description`) VALUES
(5, 'Hope Not Out', 'Class meets casual in this brand new fusion of blacks and greys. Featuring brand new tees and trackpants at affordable prices. Shop now!        	\r\n        '),
(6, 'Hope Not Out', 'Stand out with style that never dies. Hope Not Out is a brand that has been distinct and trendy since day 1.        	\r\n        '),
(7, 'Hope Not Out', 'The polo shirts by HNO are a class apart. This one in particular stands out for its unique colour and balance.        	\r\n        '),
(8, 'Hope Not Out', 'Hope Not Out keeps delivering premium designs to its loyal customers. Shop this immaculately made henley at great discounts at:        	\r\n        '),
(9, 'Hope Not Out', 'Avail our quality Polos at reasonable prices! Available now online. Simply hop onto one of our social media platforms and shop away!         	\r\n        '),
(10, 'Hope Not Out', 'khakha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha         	\r\n        '),
(11, 'Hope Not Out', 'kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha kha         	\r\n        ');

-- --------------------------------------------------------

--
-- Table structure for table `regester`
--

CREATE TABLE `regester` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `mobile` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regester`
--

INSERT INTO `regester` (`id`, `name`, `email`, `mobile`, `password`) VALUES
(1, 'khan', 'khan@gmail.com', '999', '999'),
(2, 'khan', 'saqib@gmail.com', '555555555', '555'),
(3, 'khan', 'saqib@gmail.com', '555555', '555');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regester`
--
ALTER TABLE `regester`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `regester`
--
ALTER TABLE `regester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
