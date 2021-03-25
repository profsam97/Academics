-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2021 at 06:56 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movilla`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(48, 'PHP'),
(53, 'Small Lt');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(3) NOT NULL,
  `comment_post_id` int(3) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_image` text NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `comment_date` datetime NOT NULL,
  `helpful` int(11) NOT NULL,
  `helpful_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_image`, `comment_content`, `comment_status`, `comment_date`, `helpful`, `helpful_user`) VALUES
(19, 139, 'proftobys', '', 'dwdwd', '', '2020-09-25 00:00:00', 1, 'proftobys'),
(20, 139, 'proftobys', '', 'dwdw', '', '2020-09-25 00:00:00', 1, 'proftobys'),
(21, 139, 'proftobys', '', 'dwddwdwd', '', '2020-09-25 00:00:00', 1, 'proftobys'),
(23, 139, 'proftobys', '', 'wdwdw', '', '2020-09-25 00:00:00', 1, 'proftobys'),
(24, 139, 'proftobys', '', 'dwdwdw', '', '2020-09-25 00:00:00', 1, 'proftobys'),
(25, 139, 'proftobys', '', 'dwdwdw', '', '2020-09-25 00:00:00', 1, 'proftobys'),
(26, 139, 'proftobys', '', 'dwdw', '', '2020-09-25 00:00:00', 1, 'proftobys'),
(27, 139, 'proftobys', '', 'cwdfwd', '', '2020-09-25 00:00:00', 1, 'proftobys'),
(28, 139, 'proftobys', '', 'dwd', '', '2020-09-25 00:00:00', 1, 'proftobys'),
(29, 139, 'proftobys', '', 'dwdw', '', '2020-09-25 00:00:00', 1, 'proftobys'),
(30, 139, 'proftobys', '', 'dwdw', '', '2020-09-25 00:00:00', 1, 'proftobys'),
(31, 139, 'proftobys', '', 'dwdw', '', '2020-09-25 00:00:00', 1, 'proftobys'),
(32, 139, 'proftobys', '', 'dwdw', '', '2020-09-25 00:00:00', 1, 'proftobys'),
(33, 139, 'proftobys', '', '', '', '2020-09-25 00:00:00', 1, 'proftobys'),
(34, 139, 'proftobys', '', '', '', '2020-09-25 00:00:00', 1, 'proftobys'),
(35, 139, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'HI THERE ', '', '2020-09-26 00:00:00', 1, 'proftobys'),
(36, 139, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'hi there', '', '2020-09-26 00:00:00', 1, 'proftobys'),
(37, 139, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'yes', '', '2020-09-26 00:00:00', 1, 'proftobys'),
(38, 139, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'okay bto', '', '2020-09-26 00:00:00', 1, 'proftobys'),
(39, 139, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'okay bto', '', '2020-09-26 00:00:00', 1, 'proftobys'),
(40, 139, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'yes', '', '2020-09-26 00:00:00', 1, 'proftobys'),
(41, 139, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'okay', '', '2020-09-26 00:00:00', 1, 'proftobys'),
(42, 139, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'its okay', '', '2020-09-26 00:00:00', 1, 'proftobys'),
(43, 139, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'have you watched it', '', '2020-09-26 00:00:00', 1, 'proftobys'),
(44, 139, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'yess', '', '2020-09-26 00:00:00', 1, 'proftobys'),
(45, 139, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'its very interesting', '', '2020-09-26 00:00:00', 1, 'proftobys'),
(46, 139, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'its not bad', '', '2020-09-26 00:00:00', 1, 'proftobys'),
(47, 139, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'its not bad', '', '2020-09-26 00:00:00', 1, 'proftobys'),
(48, 139, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'its not bad', '', '2020-09-26 00:00:00', 1, 'proftobys'),
(49, 139, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'okay', '', '2020-09-26 00:00:00', 1, 'proftobys'),
(50, 139, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'okay', '', '2020-09-26 00:00:00', 1, 'proftobys'),
(51, 139, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'yess', '', '2020-09-26 00:00:00', 1, 'proftobys'),
(52, 139, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'i love it', '', '2020-09-26 00:00:00', 1, 'proftobys'),
(53, 139, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'hello', '', '2020-09-26 00:00:00', 1, 'proftobys'),
(54, 139, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'hellodwdw', '', '2020-09-26 00:00:00', 1, 'proftobys'),
(55, 139, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'yess', '', '2020-09-26 00:00:00', 1, 'proftobys'),
(56, 139, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'hello', '', '2020-09-26 00:00:00', 1, 'proftobys'),
(57, 139, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'yess', '', '2020-09-26 00:00:00', 2, 'proftobys'),
(58, 139, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'hey', '', '2020-09-26 00:00:00', 6, 'proftobys'),
(59, 139, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'yess', '', '2020-09-28 00:00:00', 4, 'proftobys'),
(60, 139, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'oh my goal', '', '2020-09-28 00:00:00', 1, 'proftobys'),
(61, 139, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'yes please', '', '2020-09-28 00:00:00', 3, 'proftobys'),
(62, 139, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'okay', '', '2020-09-28 00:00:00', 5, 'proftobys'),
(63, 139, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'alreadly??', '', '2020-09-28 00:00:00', 3, 'proftobys'),
(64, 139, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'its nice', '', '2020-09-30 00:00:00', 1, 'proftobys'),
(65, 139, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'already??', '', '2020-09-30 00:00:00', 1, 'proftobys'),
(66, 160, '', '', '', '', '0000-00-00 00:00:00', 0, ''),
(67, 160, '', '', '', '', '2020-10-12 00:00:00', 0, ''),
(68, 160, '', '', '', '', '0000-00-00 00:00:00', 0, ''),
(69, 160, '', '', '', '', '0000-00-00 00:00:00', 0, ''),
(70, 160, '', '', '', '', '0000-00-00 00:00:00', 0, ''),
(71, 160, '', '', '', '', '0000-00-00 00:00:00', 1, 'proftobys'),
(72, 160, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'dww', '', '2020-10-12 00:00:00', 1, 'proftobys'),
(73, 160, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'heys', '', '2020-10-12 00:00:00', 0, ''),
(74, 160, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'heys', '', '2020-10-12 00:00:00', 0, ''),
(75, 160, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'heys', '', '2020-10-12 00:00:00', 0, ''),
(76, 160, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'yes', '', '2020-10-12 00:00:00', 0, ''),
(77, 160, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'yes', '', '2020-10-12 00:00:00', 0, ''),
(78, 160, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'yes', '', '2020-10-12 00:00:00', 0, ''),
(79, 160, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'alright', '', '2020-10-12 00:00:00', 0, ''),
(80, 160, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'like', '', '2020-10-12 00:00:00', 0, ''),
(81, 164, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'ds', '', '2020-10-12 00:00:00', 0, ''),
(82, 167, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'okay', '', '2020-10-12 00:00:00', 1, 'proftobys'),
(83, 167, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'alr', '', '2020-10-12 00:00:00', 0, ''),
(84, 167, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'alr', '', '2020-10-12 18:27:48', 0, ''),
(85, 213, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'this is interesting', '', '2020-11-02 15:39:57', 1, 'proftobys'),
(86, 213, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'yes', '', '2020-11-02 15:40:10', 1, 'proftobys'),
(91, 0, 'proftobys', '', 'ss', '', '2021-03-15 11:08:27', 0, ''),
(92, 0, 'proftobys', '', 'dwd', '', '2021-03-15 11:12:48', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `enrolled`
--

CREATE TABLE `enrolled` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `enrolled` varchar(4) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enrolled`
--

INSERT INTO `enrolled` (`id`, `user_name`, `enrolled`, `post_id`) VALUES
(9, 'proftobys', 'no', 299),
(11, 'proftobys', 'yes', 306);

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `fav` varchar(4) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favourites`
--

INSERT INTO `favourites` (`id`, `user_name`, `fav`, `post_id`) VALUES
(13, 'proftobys', 'true', 236),
(14, 'proftobys', 'true', 220),
(19, 'proftobys', 'true', 172),
(24, 'proftobys', 'true', 190),
(25, 'proftobys', 'true', 177),
(26, 'proftobys', 'true', 221),
(27, 'proftobys', 'true', 204),
(28, 'proftobys', 'true', 252);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `messages` text NOT NULL,
  `messages_date` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `email`, `username`, `messages`, `messages_date`) VALUES
(1, 'dwdwd@gmail.com', 'dwd', 'dwdsent the following messagedwdw', ''),
(2, '', '', 'sent the following message', ''),
(3, '', '', 'sent the following message', ''),
(4, 'dwdwd@gmail.com', 'Movillla', 'Movillla     sent the following message 122dwd', ''),
(5, 'dwdwd@gmail.com', 'Movillla', 'Movillla     sent the following message dwdwdwd', ''),
(6, 'dwdwd@gmail.com', 'Movillla', 'Movillla     sent the following message dwdwdwdw', ''),
(7, 'dwdwds@gmail.com', 'proftobys', 'proftobys     sent the following message', ''),
(8, 'dwdwds@gmail.com', 'proftobys', 'proftobys     sent the following message', ''),
(9, 'dwdwds@gmail.com', 'proftobys', 'proftobys     sent the following message', ''),
(10, 'dwdwds@gmail.com', 'proftobys', 'proftobys     sent the following message dwdwd', ''),
(12, 'dwdwds@gmail.com', 'proftobys', 'proftobys     sent the following message wdwdwd', ''),
(13, 'dwdwds@gmail.com', 'proftobys', 'proftobys     sent the following message efdew', '');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` varchar(1155) NOT NULL,
  `post_content` varchar(500) NOT NULL,
  `post_comment_count` varchar(255) NOT NULL,
  `post_views_count` int(11) NOT NULL,
  `download_link_FHD` text NOT NULL,
  `download_link_HD` text NOT NULL,
  `download_link_SD` text NOT NULL,
  `Trailer_id` text NOT NULL,
  `watch_later` varchar(3) NOT NULL,
  `favourites` varchar(3) NOT NULL,
  `year_date` int(4) NOT NULL,
  `cast_images` varchar(100) NOT NULL,
  `indie` text NOT NULL,
  `PG` varchar(8) NOT NULL,
  `images` text NOT NULL,
  `casts` text NOT NULL,
  `imdb` varchar(255) NOT NULL,
  `rating` varchar(3) NOT NULL,
  `max_no_of_part` int(11) NOT NULL,
  `start_dates` varchar(22) NOT NULL,
  `end_date` varchar(22) NOT NULL,
  `hour` int(11) NOT NULL,
  `about` varchar(255) NOT NULL,
  `content` varchar(222) NOT NULL,
  `venue_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `enroll` int(11) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `levels` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `genre`, `post_title`, `post_date`, `post_image`, `post_content`, `post_comment_count`, `post_views_count`, `download_link_FHD`, `download_link_HD`, `download_link_SD`, `Trailer_id`, `watch_later`, `favourites`, `year_date`, `cast_images`, `indie`, `PG`, `images`, `casts`, `imdb`, `rating`, `max_no_of_part`, `start_dates`, `end_date`, `hour`, `about`, `content`, `venue_id`, `unit_id`, `enroll`, `tags`, `levels`) VALUES
(298, '', 'The 100', '0000-00-00', '', '', '', 8, '', '', '', '', '', '', 0, '', '', '', '', '', '', '', 0, '', '2021-03-12', 0, 'yes oooo                                                                                                                        ', 'ndwadw dwdwd', 48, 2, 0, '', ''),
(306, '', 'Web Design', '0000-00-00', '', '', '', 4, '', '', '', '', '', '', 0, '', '', '', 'CrystalRiver_EN-US8025232239_1366x768.jpg', '', '', '', 4, '2021-03-11', '2021-03-25', 4, 'the best ways to find', 'hello', 48, 2, 1, 'jquery', 'easy'),
(307, '', 'Graphics Desing', '0000-00-00', '', '', '', 178, '', '', '', '', '', '', 0, '', '', '', 'CrystalRiver_EN-US8025232239_1366x768.jpg', '', '', '', 2, '2021-03-17', '2021-03-19', 3, 'hello learn js', 'plesase', 48, 2, 1, 'jquery', 'option1'),
(308, '', 'Graphics Desing', '0000-00-00', '', '', '', 7, '', '', '', '', '', '', 0, '', '', '', 'CrystalRiver_EN-US8025232239_1366x768.jpg', '', '', '', 2, '2021-03-18', '2021-03-16', 3, 'hello learn js', 'plesase', 48, 2, 0, 'jquery', 'option1'),
(309, '', 'programing', '0000-00-00', '', '', '', 1, '', '', '', '', '', '', 0, '', '', '', '', '', '', '', 0, '', '', 0, '                                                            ', '', 0, 0, 0, '', 'Intermediate'),
(311, '', 'Data Science', '0000-00-00', '', '', '', 12, '', '', '', '', '', '', 0, '', '', '', 'dat.jpg', '', '', '', 4, '2021-03-23', '2021-03-31', 2, 'this course you will learn about data science', 'data science is the process of extracting knowledge and information from a data set, and applying those knowledge and insight to a wide range of application', 53, 2, 0, 'python, node, ruby, ror', 'Intermediate'),
(313, '', 'Data Science', '0000-00-00', '', '', '', 3, '', '', '', '', '', '', 0, '', '', '', 'dat.jpg', '', '', '', 4, '2021-03-23', '2021-03-31', 2, 'this course you will learn about data science', 'data science is the process of extracting knowledge and information from a data set, and applying those knowledge and insight to a wide range of application', 0, 2, 0, 'python, node, ruby, ror', 'Intermediate');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `unit_id` int(11) NOT NULL,
  `unit_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`unit_id`, `unit_title`) VALUES
(2, 'Jacks');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL DEFAULT '$2y$10$iusesomecrazystrings22',
  `token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`, `randSalt`, `token`) VALUES
(13, 'proftobys', '$2y$12$06DmbDVn4PSwyMjaNwG1iuVYMrSBXE6Vz8dwOFty.5EUVVQ55ePbi', '', '', 'dwdwds@gmail.com', 'icons/133ceb9e5ed85250246a96e36bdbc17fe4n.jpeg', 'admin', '$2y$10$iusesomecrazystrings22', ''),
(15, 'proftobyss', '$2y$12$0buc5gS.Io4KnAMDSQfb5.v5nGomr5MViK/Om/lMX2ShP2yp2fJFW', '', '', 'proftoby97@gmail.com', 'icons/1538cb41c20107bf23747c484d9b85abben.jpeg', 'admin', '$2y$10$iusesomecrazystrings22', '1732023253'),
(17, 'samuel', '$2y$12$nFIJ1HuXoDovsl5mQjG3t.Nha5EB2goxFVKdQDFqUJX6jEJlDubwq', '', '', '12@gmaial.com', 'icons/175cae09a1e27cc24a5fea8228d1049d9cn.jpeg', 'subscriber', '$2y$10$iusesomecrazystrings22', ''),
(21, 'jack_smith', '$2y$12$Fh8xEboUqQWLFvH96Bfefe7jlbLKX85lzB6ob9wW3oB3YYe.Aby/a', '', '', 'dwdwddww@gmail.com', 'icons/head_sun_flower.png', '', '$2y$10$iusesomecrazystrings22', ''),
(22, 'dwdwwdwd', '$2y$12$A6qUhbJw8AQya7RgaL4OzO3y9uhsv0k52dMAv.YrVgPZMJMoH7vR.', '', '', 'dwdwd@gmail.com', 'icons/head_belize_hole.png', '', '$2y$10$iusesomecrazystrings22', ''),
(23, 'proftobysss', '$2y$12$L9ppIuu8alTBkWC7Dmrx/.g5IrAWBfJwCP0lvW4lpH2s0oBp4LrRe', '', '', 'ssss@gmail.com', 'icons/head_green_sea.png', 'user', '$2y$10$iusesomecrazystrings22', '');

-- --------------------------------------------------------

--
-- Table structure for table `users_online`
--

CREATE TABLE `users_online` (
  `id` int(11) NOT NULL,
  `session` varchar(255) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_online`
--

INSERT INTO `users_online` (`id`, `session`, `time`) VALUES
(44, '', 1447434996),
(45, 's47g806mg6788i92u5ogm6kqi4', 1447441570),
(46, '72clfovqk7vo2p8fiii26tkmr4', 1447461586),
(47, '3gs3q67k5ntpma8tbp2kuvof23', 1447691896),
(48, 'bouqd4fslhn2b1nv20k559col1', 1447796024),
(49, 'tign71tbpar4di74k13f8nr022', 1447867949),
(50, 'ju0s1j019d1qlc1q4tb703rgm3', 1447880891),
(51, 'tp6khbvgo4hdlfueekpmaefcu0', 1447952096),
(52, 'kv0klvlajm8j50d3uqt6go4bm6', 1448174347),
(53, 'qsdv073j4c3lqd6m0rtdpg3615', 1448296313),
(54, 'tmliedhtcgvi8r96l6qplehos4', 1448292854),
(55, 'vrumjbdrjrauucdhg6cta8hhn6', 1448800892),
(56, 'eb1ae8996caf679d187c1037ec9620b1', 1478098539),
(57, '40780dfe8631b764c435168775d44432', 1479443689),
(58, '6d9081fbf0106e9bfef3e77f6fa68f8a', 1481004509),
(59, 'b57212ad3e92b65c05d8ddcd1805a370', 1481382178),
(60, '3cf8d2b7eb470cb635a6102868ae9bd6', 1481397855),
(61, 'c7e0ac8eeeaaf5d3ac4329af9bf4b777', 1481685807),
(62, 'b50a5d9ab4b00848c009d472c63ae2cd', 1485830805),
(63, '3ef98f25d1b1762dd799f33b1a2b2657', 1499988384),
(64, '229f256600c1d05e81bd5036d941069a', 1499993069),
(65, '34aea21ebd8d1ae1b572236a4783cbad', 1500065466),
(66, 'kifgtkgtfhrqc59ld5553dijhi', 1601835459),
(67, 'jp72r9lnp4d441rm63acve94br', 1601846520),
(68, 'vv27i1qpdebvjh4p2naj1qkcte', 1602594386),
(69, 'inov0s1fet1u71cpl1sta25kvf', 1603030575),
(70, 'qb71118i183qjvfa9flujmj4nj', 1604331570),
(71, '8p2ta27udoa3g5u1ich3v9h0v1', 1604602154),
(72, 'sohf72l15hh65nvhi49u5i9f7f', 1604630599),
(73, 'vjhjrk5vvg5v0nml7eqj66p4jd', 1615683397),
(74, 'vqb3sfma01ga3bspj7hge8pb4g', 1615798256),
(75, 'c0q6vgig81toprodo11ksllpqi', 1615807585),
(76, 'n8h9sf5udmb73d58qnc39pigd9', 1615822819),
(77, 'imfhgic5toatshloinu0mssclu', 1615893242),
(78, '855p6oglvrm5nni7ossrqrf1m6', 1615918087),
(79, 'ga0cbefkk70258bta94io8i787', 1615983826),
(80, 'b8q61l59gcgig2298eik9jj35o', 1616199661),
(81, 'hq9hdh8mj0oq7u2nlmhbat2vr9', 1616381645),
(82, 'pk1e06a3cv4scch6q3rdb6ii39', 1616396354),
(83, '3iovnms0hfn4oi7r21tilqck5u', 1616551208);

-- --------------------------------------------------------

--
-- Table structure for table `watch_later`
--

CREATE TABLE `watch_later` (
  `id` int(3) NOT NULL,
  `user_name` varchar(120) NOT NULL,
  `watch_later` varchar(3) NOT NULL,
  `post_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `watch_later`
--

INSERT INTO `watch_later` (`id`, `user_name`, `watch_later`, `post_id`) VALUES
(18, 'proftob', 'tru', 0),
(19, 'proftob', 'tru', 0),
(21, 'proftob', 'tru', 170),
(22, 'proftob', 'tru', 171),
(25, 'proftob', 'tru', 187),
(26, 'proftob', 'tru', 187),
(27, 'proftob', 'tru', 187),
(28, 'proftob', 'tru', 187),
(29, 'proftob', 'tru', 187),
(30, 'proftob', 'tru', 187),
(31, 'proftob', 'tru', 201),
(32, 'proftob', 'tru', 201),
(63, 'proftobys', 'tru', 181),
(65, 'proftobys', 'tru', 170),
(66, 'proftobys', 'tru', 219),
(67, 'proftobys', 'tru', 242),
(68, 'proftobys', 'tru', 248),
(69, 'proftobys', 'tru', 252);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `enrolled`
--
ALTER TABLE `enrolled`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `users_online`
--
ALTER TABLE `users_online`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `watch_later`
--
ALTER TABLE `watch_later`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `enrolled`
--
ALTER TABLE `enrolled`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=314;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users_online`
--
ALTER TABLE `users_online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `watch_later`
--
ALTER TABLE `watch_later`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
