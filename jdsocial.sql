-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 22, 2018 at 06:16 PM
-- Server version: 5.7.24-0ubuntu0.18.10.1
-- PHP Version: 7.2.10-0ubuntu1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jdsocial`
--

-- --------------------------------------------------------

--
-- Table structure for table `Posts`
--

CREATE TABLE `Posts` (
  `user_id` int(11) NOT NULL DEFAULT '1',
  `post_body` text NOT NULL,
  `post_id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `significant_other` int(11) NOT NULL DEFAULT '1',
  `posted_by` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='User Information';

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'Daniel', 'daniyosan@gmail.com', 'merariD32640000'),
(2, 'Jacqueline', 'jaocto@gmail.com', 'mihase'),
(3, 'Mariela', 'mariela@equisde.com', '123456'),
(4, 'Julio', 'julio@equisde.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `User_Profile_Info`
--

CREATE TABLE `User_Profile_Info` (
  `user_id` int(11) NOT NULL,
  `significant_other` int(11) NOT NULL,
  `profile_pic` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User_Profile_Info`
--

INSERT INTO `User_Profile_Info` (`user_id`, `significant_other`, `profile_pic`) VALUES
(1, 2, 'img/profiles/daniel.jpg'),
(2, 1, 'img/profiles/jacky.jpg'),
(3, 4, 'img/profiles/mariela.jpg'),
(4, 3, 'img/profiles/julio.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Posts`
--
ALTER TABLE `Posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `uiser_id` (`user_id`),
  ADD KEY `significant_other` (`significant_other`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `User_Profile_Info`
--
ALTER TABLE `User_Profile_Info`
  ADD KEY `uiser_id` (`user_id`),
  ADD KEY `significant_other` (`significant_other`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Posts`
--
ALTER TABLE `Posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Posts`
--
ALTER TABLE `Posts`
  ADD CONSTRAINT `Posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `Users` (`user_id`),
  ADD CONSTRAINT `Posts_ibfk_2` FOREIGN KEY (`significant_other`) REFERENCES `User_Profile_Info` (`significant_other`);

--
-- Constraints for table `User_Profile_Info`
--
ALTER TABLE `User_Profile_Info`
  ADD CONSTRAINT `User_Profile_Info_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `Users` (`user_id`),
  ADD CONSTRAINT `User_Profile_Info_ibfk_2` FOREIGN KEY (`significant_other`) REFERENCES `Users` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
