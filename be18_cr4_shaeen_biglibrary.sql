-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2023 at 02:00 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be18_cr4_shaeen_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `be18_cr4_shaeen_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `be18_cr4_shaeen_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `biglibrary`
--

CREATE TABLE `biglibrary` (
  `id` int(20) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `ISBNcode` int(10) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Author_first_Name` varchar(20) NOT NULL,
  `Author_last_Name` varchar(20) NOT NULL,
  `Publisher_Name` varchar(20) NOT NULL,
  `Publisher_Address` varchar(20) NOT NULL,
  `Publish_Date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `biglibrary`
--

INSERT INTO `biglibrary` (`id`, `Title`, `image`, `ISBNcode`, `Description`, `Type`, `Author_first_Name`, `Author_last_Name`, `Publisher_Name`, `Publisher_Address`, `Publish_Date`) VALUES
(0, '<br /><b>Warning</b>:  Undefined array key ', ' https://m.media-amazon.com/images/I/81z+z9UUUbL._SY445_.jpg', 0, '<br /><b>Warning</b>:  Undefined array key ', '<br /><b>Warning</b>:  Undefined array key ', '<br /><b>Warning</b>', '<br /><b>Warning</b>', '<br /><b>Warning</b>', '<br /><b>Warning</b>', '<br /><b>Warning</b>'),
(2, 'Listen to Your Heart:The London Adventure', 'https://m.media-amazon.com/images/I/51WU3Va-y3L._SX324_BO1,204,203,200_.jpg', 234567890, 'Shortly before his eighteenth birthday, Ruskin embarks on a literary journey and reaches England after charting unknown waters. Greeted by the uncertainties of a new city, he muses over his loneliness, switches jobs, falls in love, befriends the ocean and', 'Book', 'Ruskin', 'Bond', 'Penguin', 'London', '19 May 2022'),
(3, 'Business of Sports:The winning Formula for success', 'https://m.media-amazon.com/images/I/51GeKhJA48L._SX322_BO1,204,203,200_.jpg', 34567890, 'The business of sports is booming! With the advent of professional sports leagues like the IPL (Indian Premier League), ISL (Indian Super League), PVL (Pro Volleyball League), PWL (Pro Wrestling League), Ultimate Table Tennis (UTT), Pro Kabaddi League (PK', 'Book', 'Vinit', 'Karnik', 'Popular Prakashan Pv', 'New Delhi', '1 January 2022'),
(4, 'A Place Called Home', 'https://m.media-amazon.com/images/I/51ohdBVYMoL._SY264_BO1,204,203,200_QL40_FMwebp_.jpg', 4567890, 'In the windowless, cramped servant\'s room at Mrs Shetty\'s luxurious house, where her mother is a maid, Alka dreams of an escape. When Mrs Shetty decides to send her to the same school as her daughter, she works hard, moulding herself into a new avatar.', 'Book', 'Preeti', 'Shenoy', 'HarperCollins India', 'Mumbai', '27 June 2022'),
(5, 'The Struggle for Police Reforms in India', 'https://m.media-amazon.com/images/I/41iabzmJMhL._SY264_BO1,204,203,200_QL40_FMwebp_.jpg', 5678901, 'Police should be people-friendly and it should inspire confidence among all sections of people as the protector of their lives, property and honour. Unfortunately, we continue to be saddled with a ‘politically useful’ police which was created by the Briti', 'Book', 'Prakash', 'Singh', 'Rupa Publications In', 'New Delhi', '5 May 2022'),
(6, 'The Seeker\'s Guide to Harry Potter - Audible Audio Edition - of the DVD by Reality Films ', 'https://m.media-amazon.com/images/I/51cuYMjKu1L.jpg', 3456721, 'The Seeker\'s Guide to Harry Potter takes you on a journey and exploration into the underlying themes of J. K. Rowling’s fantastically successful Harry Potter series. Drawing from her unique background and personal experiences, the author provides original', 'DVD', 'Dr Geo Athena', 'Trevarthen', 'Reality Entertainmen', 'New York', '12 November 2010'),
(7, 'Barbie Magical Moments Storybook and DVD (Readers Book & Dvd) ', 'https://m.media-amazon.com/images/I/51WX89MRQQL._SX415_BO1,204,203,200_.jpg', 1256789, 'Retells the stories of four of Barbie\'s movies, in which she dances, copes with an evil plot, changes places with her double, and tries to save her forest home.', 'DVD', 'Jill', 'Goldowsky', 'Reader\'s Digest', 'New York', '24 July 2007'),
(8, 'Full stack developer guide', 'https://m.media-amazon.com/images/I/412seVj3DWL.jpg', 2134567, 'Defining, designing, creating, and implementing a process to solve a challenge or meet an objective is the most valuable role… In EVERY group, company, organization and department.\r\n\r\n', 'DVD', 'Gerardus', 'Blokdyk', '5STARCooks', 'Germany', '15 May 2020'),
(9, 'The Complete FRONT-END Web Development Course DVD Tutorial ! Get started as a front-end web developer using HTML, CSS, JavaScript, jQuery, and Bootstrap!', 'https://m.media-amazon.com/images/I/810-s8vs+4L._SX679_.jpg', 1278954, 'WHAT YOU\'LL LEARN: Build a simple HTML text site, Style web pages using CSS, Program websites with JavaScript, Build a Pipboy using Bootstrap, Build and publish a Google Chrome Extension', 'Educational', 'Mark', 'Robinson', 'VIDEO TRAINING', 'London', '15 April 2020'),
(10, 'How To Use The Power of Prayer: A Motivational Guide to Transform your Life Paperback', 'https://m.media-amazon.com/images/I/41nLUzfVpHL._SX460_BO1,204,203,200_.jpg', 314567, 'You can have whatever you desire, all you have to do is ask... Do you believe that your prayers are answered? That prayers are packed with a mysterious power that gives you what you ask for? In how to use the power of prayer, Dr. Joseph Murphy claims that', 'Motivational', 'Dr. Joseph', 'Murphy', 'Fingerprint! Publish', 'New york', '1 June 2019'),
(11, 'The Kite runner', 'https://images2.medimops.eu/product/c740be/M01594480001-large.jpg', 1256893, 'Based on story in the city of Afghanistan', 'DVD', 'Khaled', 'Hössaini', 'Abdalla', 'New York', '1 June 2007');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biglibrary`
--
ALTER TABLE `biglibrary`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
