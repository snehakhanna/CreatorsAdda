-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2018 at 04:21 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `creatorsadda`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminname` varchar(255) NOT NULL,
  `adminpass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminname`, `adminpass`) VALUES
('admin', 'admin'),
('sss', 'sss');

-- --------------------------------------------------------

--
-- Table structure for table `blogpost`
--

CREATE TABLE `blogpost` (
  `entry_id` int(11) NOT NULL,
  `entry_date` varchar(10) NOT NULL,
  `entry_author` varchar(20) NOT NULL,
  `entry_title` varchar(100) NOT NULL,
  `entry_excerpt` varchar(500) NOT NULL,
  `entry_content` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogpost`
--

INSERT INTO `blogpost` (`entry_id`, `entry_date`, `entry_author`, `entry_title`, `entry_excerpt`, `entry_content`) VALUES
(6, '25.10.2018', 'Admin', 'EASY DIY FLOATING LEAVES AND FLOWERS', 'Have you ever thought of having the unique decoration for your room? Do you have flowers or leaves that you want to preserve? If both answers are yes, you have come to the right place.', 'The floating leaves and flowers are easy to make and they will make the unique and sweet decoration.\n\nMATERIALS:\nFresh flowers\nFresh leaves\nGlass frame\nPaper towels\nClear drying glue\nHeavy books\nScissors\n\nSTEPS:\n\n1. Choose the flowers and the leaves you want to use, and make sure that they are clean. You can choose the same color or you can be creative by choosing the different colors to make the vibrant and interesting decoration. Make sure that they are dry or not having excessive water, because you do not want to make them decayed, right?\n2. Cut the stems and make it the same length as the frame height or you can combine the different length to make the interesting arrangement. Make sure that they are thin enough to make them easy to press.\n3. Arrange the flowers and leaves at the top of the paper towel and cover the paper towel at the top of the leaves and flowers. Make sure that they are not too close so that they wonâ€™t stick to each other.\n4. Place the heavy books on top of the paper towel or you can place it in the middle of the book pages.\n5. Leave the flowers and leaves for a week to remove the excessive water on them and make them flatter.\n6. Carefully leave the book from the top of the paper towel and open them carefully to make the flowers and leaves in a good condition.\n7.Arrange the flowers and leaves on the glass frame and if they are already in a good arrangement; glue them down using the clear drying glue.\n8. Add the second glass on top of the flowers and leaves and place them on the frame.\n9. After you have done, you can start hanging them on the wall or you can use it as the decoration near the window or on the top of your cabinet.\n10. This decoration will freshen up your room and make the atmosphere of the room warmer. Or you can make them dried completely by leaving them for at least a month since the dried flowers and leaves will add the vintage atmosphere for the decoration.\n\nHope youâ€™ll like it!\n');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(15) NOT NULL,
  `state` varchar(20) NOT NULL,
  `zip` int(6) NOT NULL,
  `card_name` varchar(20) NOT NULL,
  `card_number` int(16) NOT NULL,
  `exp_mon` varchar(15) NOT NULL,
  `exp_year` int(4) NOT NULL,
  `cvv` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `name`, `email`, `address`, `city`, `state`, `zip`, `card_name`, `card_number`, `exp_mon`, `exp_year`, `cvv`) VALUES
(3, 'Sakshi Suthar', 'sutharsakshi98@gmail.com', 'Charkop, Sector 6, 164/202', 'Mumbai', 'Maharashtra', 400067, 'Sakshi', 1, '1', 1, 1),
(4, 'Sakshi Suthar', 'sutharsakshi98@gmail.com', 'Charkop, Sector 6, 164/202', 'Mumbai', 'Maharashtra', 400067, 'Sakshi', 12345678, 'Dec', 2020, 234);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `pass`) VALUES
('himani', 'him123'),
('mitchell', 'mit123'),
('sakshi', 'pass123'),
('sneha', 'sneha123'),
('sumit', 'sumit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogpost`
--
ALTER TABLE `blogpost`
  ADD PRIMARY KEY (`entry_id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogpost`
--
ALTER TABLE `blogpost`
  MODIFY `entry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
