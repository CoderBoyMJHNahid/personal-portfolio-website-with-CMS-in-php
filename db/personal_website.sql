-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2023 at 04:15 PM
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
-- Database: `personal_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_reviews`
--

CREATE TABLE `client_reviews` (
  `cr_id` int(11) NOT NULL,
  `cr_name` varchar(256) NOT NULL,
  `cr_image` varchar(256) NOT NULL,
  `cr_reviews` text NOT NULL,
  `text_only` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_reviews`
--

INSERT INTO `client_reviews` (`cr_id`, `cr_name`, `cr_image`, `cr_reviews`, `text_only`) VALUES
(2, 'Martha Blevins', '62394095.jpg', 'Hello World Again', 0),
(4, 'Martha Blevins', '', 'It is texting', 1);

-- --------------------------------------------------------

--
-- Table structure for table `footer_data`
--

CREATE TABLE `footer_data` (
  `f_id` int(11) NOT NULL,
  `phone_number` varchar(256) NOT NULL,
  `email_address` varchar(256) NOT NULL,
  `facebook_link` varchar(256) NOT NULL,
  `twitter_link` varchar(256) NOT NULL,
  `linkedin_link` varchar(256) NOT NULL,
  `instagram_link` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `footer_data`
--

INSERT INTO `footer_data` (`f_id`, `phone_number`, `email_address`, `facebook_link`, `twitter_link`, `linkedin_link`, `instagram_link`) VALUES
(1, '0123647849', 'admin@gmail.com', 'https://facebook.com', 'https://twitter.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hero_section`
--

CREATE TABLE `hero_section` (
  `hero_id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `sub_title` varchar(256) NOT NULL,
  `email_connect` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hero_section`
--

INSERT INTO `hero_section` (`hero_id`, `title`, `sub_title`, `email_connect`) VALUES
(1, 'Hi, I\'m Kailee Hardwick', 'A tech strategist based in Salguerro City', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_cat`
--

CREATE TABLE `portfolio_cat` (
  `pc_id` int(11) NOT NULL,
  `pc_title` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolio_cat`
--

INSERT INTO `portfolio_cat` (`pc_id`, `pc_title`) VALUES
(1, 'Logo Design'),
(2, 'Flyer Design');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_image`
--

CREATE TABLE `portfolio_image` (
  `pi_id` int(11) NOT NULL,
  `p_img` varchar(256) NOT NULL,
  `p_cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolio_image`
--

INSERT INTO `portfolio_image` (`pi_id`, `p_img`, `p_cat`) VALUES
(6, '1360707975.png', 1),
(7, '2115234134.png', 1),
(8, '1825775105.png', 1),
(9, '1593995773.png', 2),
(10, '2116821679.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `service_box`
--

CREATE TABLE `service_box` (
  `sb_id` int(11) NOT NULL,
  `service_name` varchar(256) NOT NULL,
  `service_icon` varchar(256) NOT NULL,
  `service_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_box`
--

INSERT INTO `service_box` (`sb_id`, `service_name`, `service_icon`, `service_desc`) VALUES
(9, 'Competitor Research', '1361181178.png', 'Competitor research is the process of gathering and analyzing information about businesses or individuals that offer similar products or services to your own.');

-- --------------------------------------------------------

--
-- Table structure for table `service_skills`
--

CREATE TABLE `service_skills` (
  `s_id` int(11) NOT NULL,
  `skill_name` varchar(256) NOT NULL,
  `skill_cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_skills`
--

INSERT INTO `service_skills` (`s_id`, `skill_name`, `skill_cat`) VALUES
(3, 'Web Development', 1),
(5, 'Graphics Designer', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `user_name` varchar(256) NOT NULL,
  `user_pwd` varchar(256) NOT NULL,
  `logo_image` varchar(256) NOT NULL,
  `website_title` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `user_name`, `user_pwd`, `logo_image`, `website_title`) VALUES
(1, 'admin', 'af7e0928fcba501d8ed0385c794e690fe151bf16', '129437060.png', 'Portfolio Website For Kay ');

-- --------------------------------------------------------

--
-- Table structure for table `who_am_i`
--

CREATE TABLE `who_am_i` (
  `who_id` int(11) NOT NULL,
  `who_desc` text NOT NULL,
  `who_image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `who_am_i`
--

INSERT INTO `who_am_i` (`who_id`, `who_desc`, `who_image`) VALUES
(1, 'Competitor research is the process of gathering and analyzing information about businesses or individuals that offer similar products or services to your own.', '992422620.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_reviews`
--
ALTER TABLE `client_reviews`
  ADD PRIMARY KEY (`cr_id`);

--
-- Indexes for table `footer_data`
--
ALTER TABLE `footer_data`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `hero_section`
--
ALTER TABLE `hero_section`
  ADD PRIMARY KEY (`hero_id`);

--
-- Indexes for table `portfolio_cat`
--
ALTER TABLE `portfolio_cat`
  ADD PRIMARY KEY (`pc_id`);

--
-- Indexes for table `portfolio_image`
--
ALTER TABLE `portfolio_image`
  ADD PRIMARY KEY (`pi_id`);

--
-- Indexes for table `service_box`
--
ALTER TABLE `service_box`
  ADD PRIMARY KEY (`sb_id`);

--
-- Indexes for table `service_skills`
--
ALTER TABLE `service_skills`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `who_am_i`
--
ALTER TABLE `who_am_i`
  ADD PRIMARY KEY (`who_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_reviews`
--
ALTER TABLE `client_reviews`
  MODIFY `cr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `footer_data`
--
ALTER TABLE `footer_data`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hero_section`
--
ALTER TABLE `hero_section`
  MODIFY `hero_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio_cat`
--
ALTER TABLE `portfolio_cat`
  MODIFY `pc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portfolio_image`
--
ALTER TABLE `portfolio_image`
  MODIFY `pi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `service_box`
--
ALTER TABLE `service_box`
  MODIFY `sb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `service_skills`
--
ALTER TABLE `service_skills`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `who_am_i`
--
ALTER TABLE `who_am_i`
  MODIFY `who_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
