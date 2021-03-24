-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2020 at 04:45 AM
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
(52, 'Javascript');

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
(86, 213, 'proftobys', 'icons/1378a640dcb5bad4006a7b5f999cea3f6en.jpeg', 'yes', '', '2020-11-02 15:40:10', 1, 'proftobys');

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
(13, 'dwdwds@gmail.com', 'proftobys', 'proftobys     sent the following message efdew', ''),
(14, 'dwdwds@gmail.com', 'proftobys', 'proftobys     sent the following message dwdwddwd', '');

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
  `rating` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `genre`, `post_title`, `post_date`, `post_image`, `post_content`, `post_comment_count`, `post_views_count`, `download_link_FHD`, `download_link_HD`, `download_link_SD`, `Trailer_id`, `watch_later`, `favourites`, `year_date`, `cast_images`, `indie`, `PG`, `images`, `casts`, `imdb`, `rating`) VALUES
(155, '\n                Action, Thriller\n                ', '\n            Extraction\n                ', '2020-10-11', ' https://m.media-amazon.com/images/M/MV5BMDJiNzUwYzEtNmQ2Yy00NWE4LWEwNzctM2M0MjE0OGUxZTA3XkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_SX300.jpg ', '\n            Tyler Rake, a fearless black market mercenary, embarks on the most deadly extraction of his career when he\'s enlisted to rescue the kidnapped son of an imprisoned international crime lord.\n                ', '', 0, '', '', '', '', '', '', 0, '74568, 2298804, 6519, 229932, 1179460, 35029, 2614128, 2614131, 2595214, 2606252', 'movie', '0', '', 'Chris Hemsworth, Bryon Lerum, Ryder Lerum, Rudhraksh Jaiswal', 'tt8936646', '0'),
(156, '\n                Action, Adventure, Fantasy, Thriller\n                ', '\n            The Old Guard\n                ', '2020-10-11', ' https://m.media-amazon.com/images/M/MV5BNDJiZDliZDAtMjc5Yy00MzVhLThkY2MtNDYwNTQ2ZTM5MDcxXkEyXkFqcGdeQXVyMDA4NzMyOA@@._V1_SX300.jpg ', '\n            A covert team of immortal mercenaries are suddenly exposed and must now fight to keep their identity a secret just as an unexpected new member is discovered.\n                ', '', 0, '', '', '', '', '', '', 2020, '6885, 1884703, 73381, 935235, 509344, 5294, 10982, 91378, 1816917, 20699', 'movie', '0', '', 'Charlize Theron, KiKi Layne, Matthias Schoenaerts, Marwan Kenzari', 'tt7556122', '0'),
(157, '\n                Action, Drama, History, War\n                ', '\n            Greyhound\n                ', '2020-10-11', ' https://m.media-amazon.com/images/M/MV5BZTFkZjYxNWItZmE2MC00MGE4LWIxYTgtZmIzOWM1YmI2YWEzXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_SX300.jpg ', '\n            Several months after the U.S. entry into World War II, an inexperienced U.S. Navy commander must lead an Allied convoy being stalked by a German submarine wolf pack.\n                ', '', 0, '', '', '', '', '', '', 2020, '31, 1115, 1281250, 1279814, 1626604, 1951, 1560340, 1168097, 1327613, 1421688', 'movie', '0', '', 'Tom Hanks, Elisabeth Shue, Stephen Graham, Matt Helm', 'tt6048922', '0'),
(158, '\n                Drama, Sci-Fi, Thriller\n                ', '\n            Black Mirror\n                ', '2020-10-11', ' https://m.media-amazon.com/images/M/MV5BYTM3YWVhMDMtNjczMy00NGEyLWJhZDctYjNhMTRkNDE0ZTI1XkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_SX300.jpg ', '\n            An anthology series exploring a twisted, high-tech multiverse where humanity\'s greatest innovations and darkest instincts collide.\n                ', '', 0, '', '', '', '', '', '', 2011, '', 'series', 'TV-MA', '', 'Daniel Lapaine, Hannah John-Kamen, Michaela Coel, Beatrice Robertson-Jones', 'tt2085059', '0'),
(159, '\n                Action, Drama, History, Romance, War\n                ', '\n            Mr. Sunshine\n                ', '2020-10-12', ' https://m.media-amazon.com/images/M/MV5BOWU3MjlmODAtZGU5NS00NmFjLTg1NmItNjU3MjQ5MmM1YWJjXkEyXkFqcGdeQXVyNjc3MjQzNTI@._V1_SX300.jpg ', '\n            A young boy who ends up in the U.S. after the 1871 Shinmiyangyo incident returns to Korea at a historical turning point and falls for a noblewoman.\n                ', '', 0, '', '', '', '', '', '', 2018, '0', 'series', 'N/A', '', 'Byung-hun Lee, Tae-ri Kim, Yeon-Seok Yoo, Min-Jung Kim', 'tt7094780', '0'),
(160, '\n                Action, Comedy, Drama, Horror, Sci-Fi\n                ', '\n            Z Nation\n                ', '2020-10-12', ' https://m.media-amazon.com/images/M/MV5BYTljNzE5MzgtODMyMi00ZjBmLWIzNjUtOTlmOWVjMmRmODljXkEyXkFqcGdeQXVyNDIzMzcwNjc@._V1_SX300.jpg ', '\n            Three years after the zombie virus has gutted the United States of America a team of everyday heroes must transport the only known survivor of the plague from New York to California, where the last functioning viral lab waits for his blood.\n                ', '', 1, '', '', '', '', '', '', 2014, '0', 'series', 'TV-14', '', 'Russell Hodgkinson, Nat Zang, Keith Allan, Kellita Smith', 'tt3843168', '0'),
(161, '\n                Adventure, Drama, Fantasy\n                ', '\n            Merlin\n                ', '2020-10-12', ' https://m.media-amazon.com/images/M/MV5BZTBjYjM3ZjItZTI1MS00ODZhLWFhZDgtODgxMmMzN2JlOTExXkEyXkFqcGdeQXVyNTA4NzY1MzY@._V1_SX300.jpg ', '\n            These are the brand new adventures of Merlin, the legendary sorcerer as a young man, when he was just a servant to young Prince Arthur on the royal court of Camelot, who has soon become his best friend, and turned Arthur into a great king and a legend.\n                ', '', 0, '', '', '', '', '', '', 2008, '0', 'series', 'TV-PG', '', 'John Hurt, Colin Morgan, Bradley James, Richard Wilson', 'tt1199099', '0'),
(162, '\n                Fantasy, Mystery, Romance\n                ', '\n            The King: Eternal Monarch\n                ', '2020-10-12', ' https://m.media-amazon.com/images/M/MV5BMDk2MDAyNmYtY2VlNS00N2EzLWE4ZDEtMmI0N2ViYzk4ODU4XkEyXkFqcGdeQXVyNjc3MjQzNTI@._V1_SX300.jpg ', '\n            A modern-day Korean emperor passes through a mysterious portal and into a parallel world, where he encounters a feisty police detective.\n                ', '', 0, '', '', '', '', '', '', 2020, '0', 'series', 'TV-14', '', 'Min-Ho Lee, Go-eun Kim, Do-Hwan Woo, Kyung-Nam Kim', 'tt11228748', '0'),
(163, '\n                Action, Adventure, Sci-Fi, Thriller\n                ', '\n            Godzilla\n                ', '2020-10-12', ' https://m.media-amazon.com/images/M/MV5BN2E4ZDgxN2YtZjExMS00MWE5LTg3NjQtNTkxMzJhOTA3MDQ4XkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SX300.jpg ', '\n            The world is beset by the appearance of monstrous creatures, but one of them may be the only one who can save humanity.\n                ', '', 0, '', '', '', '', '', '', 2014, '27428, 550843, 17419, 3899, 39658, 154917, 11064, 134609, 1137, 1107800', 'movie', 'PG-13', '', 'Aaron Taylor-Johnson, CJ Adams, Ken Watanabe, Bryan Cranston', 'tt0831387', '0'),
(164, '\n                Action, Adventure, Drama, Thriller\n                ', '\n            Killing Eve\n                ', '2020-10-12', ' https://m.media-amazon.com/images/M/MV5BZDJmODFjMzEtNTE4MS00OGViLTk4OGYtZjg3OGFhM2VlOTliXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_SX300.jpg ', '\n            After a series of events, the lives of a security operative and an assassin become inextricably linked.\n                ', '', 0, '', '', '', '', '', '', 2018, '0', 'series', 'TV-14', '', 'Jodie Comer, Sandra Oh, Fiona Shaw, Kim Bodnia', 'tt7016936', '0'),
(165, '\n                Drama, Sci-Fi\n                ', '\n            Evernight\n                ', '2020-10-12', ' https://m.media-amazon.com/images/M/MV5BMmFkZTMyZmQtYzZjMS00ZjQ4LTkxMWQtOTZhYWEwYzU5OGYxXkEyXkFqcGdeQXVyNjc3MTM1MDc@._V1_SX300.jpg ', '\n            At this endless night when the sun does not come up and the darkness prevailed Woman and Man search for solution in leaving their social life, property and civilization as we know it, and ...\n                ', '', 1, '', '', '', '', '', '', 2015, '0', 'series', 'N/A', '', 'Ozan Celik, Gülce Oral, Deniz Denker, Ozgur Atlagan', 'tt5830190', '0'),
(166, '\n                Drama, History, Romance\n                ', '\n            Dong Yi\n                ', '2020-10-12', ' https://m.media-amazon.com/images/M/MV5BZmVhY2ZkOTQtYWNlZi00NjAyLTk5YzQtNjI1OWNiNTAyY2U2XkEyXkFqcGdeQXVyMzE4MDkyNTA@._V1_SX300.jpg ', '\n            Story a simple maid that rises high in the royal harem as a consort and, ultimately, mother of the Korean king.\n                ', '', 0, '', '', '', '', '', '', 2010, '0', 'series', 'TV-Y', '', 'Hyo-Joo Han, Julia Lim', 'tt1666209', '0'),
(167, '\n                Action, Fantasy, History, Romance\n                ', '\n            The Scholar Who Walks the Night\n                ', '2020-10-12', ' https://m.media-amazon.com/images/M/MV5BMmRlNGE1ZGMtNjcyMC00N2EzLWJlYjUtYjhmNzdhOWJiNDNjXkEyXkFqcGdeQXVyMzE4MDkyNTA@._V1_SX300.jpg ', '\n            Set in an alternate Joseon dynasty, Jo Yang-sun (Lee Yu Bi) is the daughter of a nobleman whose family loses everything when her father is framed for treason. To make ends meet, Yang-sun ...\n                ', '', 0, '', '', '', '', '', '', 2015, '0', 'series', 'N/A', '', 'Joon-Gi Lee, Tae-Hwan Choi, Hie-jin Jang, So-eun Kim', 'tt4846958', '0'),
(168, '\n                Adventure, Drama, Fantasy, Romance\n                ', '\n            Atlantis\n                ', '2020-10-13', ' https://m.media-amazon.com/images/M/MV5BN2Y1YzAyZjgtMDI0NS00MjM0LWExNWQtYjE2NDAyOGExNzIxXkEyXkFqcGdeQXVyOTQxNzM2MjY@._V1_SX300.jpg ', '\n            Far from home, Jason washes up on the shores of the ancient and mysterious city of Atlantis.\n                ', '', 0, '', '', '', '', '', '', 2013, '0', 'series', 'N/A', '', 'Mark Addy, Jack Donnelly, Robert Emms, Aiysha Hart', 'tt2705602', '6'),
(169, '\n                Action, Romance, Thriller\n                ', '\n            Athena: Goddess of War\n                ', '2020-10-13', ' https://m.media-amazon.com/images/M/MV5BNmI0NWUwM2EtNWM1Mi00OWQ1LTllYjctZTAzYjIzYmFjZTg0XkEyXkFqcGdeQXVyMzE4MDkyNTA@._V1_SX300.jpg ', '\n            IRIS Spin-Off about a new agency, called the National Anti-Terror Service (NTS), as they go up against another secret terrorist organization, called Athena.\n                ', '', 0, '', '', '', '', '', '', 2010, '0', 'series', 'TV-14', '', 'Woo-sung Jung, Soo Ae, Seung-Won Cha, Ji-Ah Lee', 'tt1942171', '6.7'),
(170, '\n                Drama, Mystery, Sci-Fi\n                ', '\n            The 100\n                ', '2020-10-13', ' https://m.media-amazon.com/images/M/MV5BNjRiYTIzZmUtMTFkNS00ZTM0LWE4ODAtMDliMGE4NzM5ZjVlXkEyXkFqcGdeQXVyNDQ0MTYzMDA@._V1_SX300.jpg ', '\n            Set ninety-seven years after a nuclear war has destroyed civilization, when a spaceship housing humanity\'s lone survivors sends one hundred juvenile delinquents back to Earth, in hopes of possibly re-populating the planet.\n                ', '', 0, '', '', '', '', '', '', 2014, '1213278, 140114, 1390882, 118546, 1148626, 144852, 29930, 1610710, 62911, 2643410', 'series', 'TV-14', '', 'Eliza Taylor, Marie Avgeropoulos, Bob Morley, Lindsey Morgan', 'tt2661044', '7.7'),
(171, '\n                Action, Adventure, Drama, Sci-Fi\n                ', '\n            Revolution\n                ', '2020-10-13', ' https://m.media-amazon.com/images/M/MV5BNTQ0YTIxZmUtMTVmZC00MzgxLThmYTItMDdlZjg5YmU2NzM0XkEyXkFqcGdeQXVyNjg2NjQwMDQ@._V1_SX300.jpg ', '\n            Fifteen years after a permanent global blackout, a group of revolutionaries seeks to drive out an occupying force posing as the United States Government.\n                ', '', 0, '', '', '', '', '', '', 2012, '6212, 208678, 21029, 4808, 31167, 76941, 81391, 1756', '  series', 'TV-14', '', 'Billy Burke, Tracy Spiridakos, Giancarlo Esposito, Zak Orth', 'tt2070791', '6.7'),
(172, '\n                Action, Crime, Drama, Mystery, Sci-Fi, Thriller\n                ', '\n            Gotham\n                ', '2020-10-13', ' https://m.media-amazon.com/images/M/MV5BMTU5NjQ2MTU4NV5BMl5BanBnXkFtZTgwOTYyNTAwNzM@._V1_SX300.jpg ', '\n            The story behind Detective James Gordon\'s rise to prominence in Gotham City in the years before Batman\'s arrival.\n                ', '', 0, '', '', '', '', '', '', 2014, '17245, 10825, 934173, 28848, 59262, 990300, 1031380, 1367617', '  series', 'TV-14', '', 'Ben McKenzie, Donal Logue, David Mazouz, Sean Pertwee', 'tt3749900', '7.9'),
(173, '\n                Adventure, Comedy\n                ', '\n            The 100 Year-Old Man Who Climbed Out the Window and Disappeared\n                ', '2020-10-13', ' https://m.media-amazon.com/images/M/MV5BNDUyMzU5MTk5MF5BMl5BanBnXkFtZTgwNjcxNDQxNTE@._V1_SX300.jpg ', '\n            After living a long and colorful life, Allan Karlsson finds himself stuck in a nursing home. On his 100th birthday, he leaps out a window and begins an unexpected journey.\n                ', '', 0, '', '', '', '', '', '', 2013, '0', '  movie', 'R', '', 'Robert Gustafsson, Mia Skäringer, Iwar Wiklander, David Wiberg', 'tt2113681', '7.1'),
(174, '\n                Action, Adventure, Drama\n                ', '\n            Into the Badlands\n                ', '2020-10-13', ' https://m.media-amazon.com/images/M/MV5BNGUzMmNkMWMtNTI4OC00ZGY1LThlZmUtMDI5YjYyZDE2MzE2XkEyXkFqcGdeQXVyMzY0MTE3NzU@._V1_SX300.jpg ', '\n            A mighty warrior and a young boy search for enlightenment in a ruthless territory controlled by feudal barons.\n                ', '', 0, '', '', '', '', '', '', 2015, '64436, 130414, 11109, 107734, 1483660, 204191', '  series', 'TV-14', '', 'Daniel Wu, Orla Brady, Emily Beecham, Aramis Knight', 'tt3865236', '8.0'),
(175, '\n                Comedy\n                ', '\n            Rev.\n                ', '2020-10-13', ' https://m.media-amazon.com/images/M/MV5BOTQzM2M3NzAtODI4My00ZjEzLTljZWUtYjRmNGIyNzgyZDc5XkEyXkFqcGdeQXVyMjExMjk0ODk@._V1_SX300.jpg ', '\n            The misadventures of an Anglican vicar, his wife, and a small but odd group of parishioners in London.\n                ', '', 0, '', '', '', '', '', '', 2010, '0', '  series', 'N/A', '', 'Tom Hollander, Olivia Colman, Steve Evets, Miles Jupp', 'tt1588221', '7.9'),
(176, '\n                Action, Adventure, Drama, Fantasy, Horror, Mystery, Romance\n                ', '\n            The Witcher 3: Wild Hunt\n                ', '2020-10-13', ' https://m.media-amazon.com/images/M/MV5BYjY3ODFmNWUtNjhjNC00NTExLWIxYmEtYmQ0YTk5NjkzYTUwXkEyXkFqcGdeQXVyNzEyNjcwNTk@._V1_SX300.jpg ', '\n            Geralt of Rivia, a monster hunter for hire, embarks on an epic journey to find his former apprentice, Ciri, before The Wild Hunt can capture her and bring about the destruction of the world.\n                ', '', 0, '', '', '', '', '', '', 2015, '0', '  game', 'M', '', 'Doug Cockle, Denise Gough, Jo Wyatt, Jaimi Barbakoff', 'tt2993508', '9.7'),
(177, '\n                Drama, Mystery, Romance\n                ', '\n            Chaotic Ana\n                ', '2020-10-13', ' https://m.media-amazon.com/images/M/MV5BMjg1MTY5ODAtYTQ4OS00MDllLTlkOTgtZGNmMTM5NmY4YjFkXkEyXkFqcGdeQXVyMTA0MjU0Ng@@._V1_SX300.jpg ', '\n            A countdown, 10, 9, 8, 7... until 0, like in hypnosis, through which Ana proves that she does not live alone.\n                ', '', 0, '', '', '', '', '', '', 2007, '0', '  movie', 'TV-MA', '', 'Manuela Vellés, Charlotte Rampling, Bebe, Nicolas Cazalé', 'tt0456340', '6.4'),
(178, '\n                Comedy, Horror, Mystery, Thriller\n                ', '\n            Ready or Not\n                ', '2020-10-13', ' https://m.media-amazon.com/images/M/MV5BYzBkMzAyMDUtZTFkZS00OWUyLTgwM2ItNGI3MTQ5NzA3NTVkXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_SX300.jpg ', '\n            A bride\'s wedding night takes a sinister turn when her eccentric new in-laws force her to take part in a terrifying game.\n                ', '', 0, '', '', '', '', '', '', 2019, '0', '  movie', 'R', '', 'Samara Weaving, Adam Brody, Mark O\'Brien, Henry Czerny', 'tt7798634', '6.8'),
(179, '\n                Adventure, Drama, Mystery, Sci-Fi, Thriller\n                ', '\n            Dark Matter\n                ', '2020-10-13', ' https://m.media-amazon.com/images/M/MV5BYjI5OGMxNzYtZmZiYS00NDI1LWI4NWMtOTZmNjY1MjMzZjExXkEyXkFqcGdeQXVyNTgxMjE3OTQ@._V1_SX300.jpg ', '\n            In the dystopian 27th century, six people wake up on a deserted spaceship with no memory of who they are or what they\'re doing there. They reluctantly team up and set off to find answers with the help of a female android.\n                ', '', 0, '', '', '', '', '', '', 2015, '0', '  series', 'TV-14', '', 'Melissa O\'Neil, Anthony Lemke, Alex Mallari Jr., Jodelle Ferland', 'tt4159076', '7.5'),
(181, '\n                Action, Adventure, Drama, Family\n                ', '\n            Mulan\n                ', '2020-10-20', ' https://m.media-amazon.com/images/M/MV5BNDliY2E1MjUtNzZkOS00MzJlLTgyOGEtZDg4MTI1NzZkMTBhXkEyXkFqcGdeQXVyNjMwMzc3MjE@._V1_SX300.jpg ', '\n            A young Chinese maiden disguises herself as a male warrior in order to save her father.\n                ', '', 0, '', '', '', '', '', '', 2020, '122503, 1336, 21629, 1341, 643, 58319, 1305610, 74073, 1624, 61703', '  movie', 'PG-13', '', 'Yifei Liu, Donnie Yen, Li Gong, Jet Li', 'tt4566758', '5.4'),
(182, '\n                Action, Adventure, Comedy, Fantasy\n                ', '\n            Jumanji: The Next Level\n                ', '2020-10-20', ' https://m.media-amazon.com/images/M/MV5BOTVjMmFiMDUtOWQ4My00YzhmLWE3MzEtODM1NDFjMWEwZTRkXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_SX300.jpg ', '\n            In Jumanji: The Next Level, the gang is back but the game has changed. As they return to rescue one of their own, the players will have to brave parts unknown from arid deserts to snowy mountains, to escape the world\'s most dangerous game.\n                ', '', 0, '', '', '', '', '', '', 2019, '', '  movie', 'PG-13', '', 'Dwayne Johnson, Kevin Hart, Jack Black, Karen Gillan', 'tt7975244', '6.7'),
(183, '\n                Documentary, Comedy, Horror\n                ', '\n            The 100 Scariest Movie Moments\n                ', '2020-10-20', ' https://m.media-amazon.com/images/M/MV5BM2I5ODAwOWMtZjgyOS00NTA5LTg4NzQtYTVkMjFiMTE0NDNhXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SX300.jpg ', '\n            Film-makers, performers, genre authorities and selected high-profile fans count down the most chilling moments in cinematic history. Not just from horror films, but from such thrillers as ...\n                ', '', 0, '', '', '', '', '', '', 2004, '35467, 15234, 31211, 35468, 3982, 35469, 4992, 35470, 35472, 11357, 35473, 11770, 12698, 19266, 1440', '  series', 'TV-14', '', 'Keiko Agena, Krista Allen, David Arquette, Clive Barker', 'tt0450892', '8.7'),
(184, '\n                Drama, Horror, Thriller\n                ', '\n            The Walking Dead\n                ', '2020-10-20', ' https://m.media-amazon.com/images/M/MV5BYTUwOTM3ZGUtMDZiNy00M2I3LWI1ZWEtYzhhNGMyZjI3MjBmXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_SX300.jpg ', '\n            Sheriff Deputy Rick Grimes wakes up from a coma to learn the world is in ruins and must lead a group of survivors to stay alive.\n                ', '', 0, '', '', '', '', '', '', 2010, '4886, 82104, 31535, 84224, 1252310, 41688, 555249, 65640, 43858, 2206', '  series', 'TV-14', '', 'Norman Reedus, Melissa McBride, Danai Gurira, Lauren Cohan', 'tt1520211', '8.2'),
(185, '\n                Action, Adventure, Sci-Fi\n                ', '\n            The Avengers\n                ', '2020-10-20', ' https://m.media-amazon.com/images/M/MV5BNDYxNjQyMjAtNTdiOS00NGYwLWFmNTAtNThmYjU5ZGI2YTI1XkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_SX300.jpg ', '\n            Earth\'s mightiest heroes must come together and learn to fight as a team if they are going to stop the mischievous Loki and his alien army from enslaving humanity.\n                ', '', 0, '', '', '', '', '', '', 2012, '0', '  movie', 'PG-13', '', 'Robert Downey Jr., Chris Evans, Mark Ruffalo, Chris Hemsworth', 'tt0848228', '8.0'),
(186, '\n                Action, Crime, Thriller\n                ', '\n            The Fast and the Furious: Tokyo Drift\n                ', '2020-10-20', ' https://m.media-amazon.com/images/M/MV5BMTQ2NTMxODEyNV5BMl5BanBnXkFtZTcwMDgxMjA0MQ@@._V1_SX300.jpg ', '\n            A teenager becomes a major competitor in the world of drift racing after moving in with his father in Tokyo to avoid a jail sentence in America.\n                ', '', 0, '', '', '', '', '', '', 2006, '155, 116277, 61697, 58197, 116278, 24200, 80978, 52477, 88677, 162367', '  movie', 'PG-13', '', 'Lucas Black, Damien Marzette, Trula M. Marcus, Zachery Ty Bryan', 'tt0463985', '6.0'),
(187, '\n                Action, Adventure, Sci-Fi\n                ', '\n            Batman v Superman: Dawn of Justice\n                ', '2020-10-20', ' https://m.media-amazon.com/images/M/MV5BYThjYzcyYzItNTVjNy00NDk0LTgwMWQtYjMwNmNlNWJhMzMyXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SX300.jpg ', '\n            Fearing that the actions of Superman are left unchecked, Batman takes on the Man of Steel, while the world wrestles with what kind of a hero it really needs.\n                ', '', 0, '', '', '', '', '', '', 2016, '0', '  movie', 'PG-13', '', 'Ben Affleck, Henry Cavill, Amy Adams, Jesse Eisenberg', 'tt2975590', '6.4'),
(188, '\n                Drama, Fantasy, History, Romance\n                ', '\n            Arthdal Chronicles\n                ', '2020-10-20', ' https://m.media-amazon.com/images/M/MV5BOGVjMjhhYzEtZjA3YS00NDA1LTg0ZGQtYTQ2MzJlOGU1MDBkXkEyXkFqcGdeQXVyMzE4MDkyNTA@._V1_SX300.jpg ', '\n            Arthdal Chronicles depicts the birth of civilization and nations in ancient times. It is a story of mythical heroes, their struggle, unity and love of people living in a virtual land called Arth.\n                ', '', 0, '', '', '', '', '', '', 2019, '', '  series', 'N/A', '', 'Joong-Ki Song, Ji-Won Kim, Dong-Gun Jang, Ok-bin Kim', 'tt8750956', '8.3'),
(189, '\n                Comedy, Romance\n                ', '\n            The 10 Year Plan\n                ', '2020-10-20', ' https://m.media-amazon.com/images/M/MV5BMjEzNTQzMzI1NV5BMl5BanBnXkFtZTgwOTM1Mzc0MTE@._V1_SX300.jpg ', '\n            Meet Myles and Brody, best friends and total opposites. Myles is a hopeless romantic looking for Mr. Right. Brody is a sexy player on the hunt for Mr. Right Now. These two friends make a ...\n                ', '', 0, '', '', '', '', '', '', 2014, '1525042, 928695, 445394, 1302537, 1055539, 1234044, 83105, 2690371, 1023426, 2690372', '  movie', 'Not Rate', '', 'Jack Turner, Michael Adam Hamilton, Teri Reeves, Moronai Kanekoa', 'tt3239442', '6.1'),
(190, '\n                Action, Adventure, Drama, Sci-Fi\n                ', '\n            Avengers: Endgame\n                ', '2020-10-20', ' https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_SX300.jpg ', '\n            After the devastating events of Avengers: Infinity War (2018), the universe is in ruins. With the help of remaining allies, the Avengers assemble once more in order to reverse Thanos\' actions and restore balance to the universe.\n                ', '', 0, '', '', '', '', '', '', 2019, '', '  movie', 'PG-13', '', 'Robert Downey Jr., Chris Evans, Mark Ruffalo, Chris Hemsworth', 'tt4154796', '8.4'),
(191, '\n                Action, Drama, History, Romance\n                ', '\n            The Empress Ki\n                ', '2020-10-20', ' https://m.media-amazon.com/images/M/MV5BNThlM2ZjYzItYzhmYS00MjI5LTg5YTAtYzZlN2FjNmIwYzc3XkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_SX300.jpg ', '\n            A Korea-born warrior girl had to be a servant at the Mongol Yuan court but somehow overcame her low status to become an empress in another land.\n                ', '', 0, '', '', '', '', '', '', 2013, '1257606, 20264, 1257622, 551682, 83220, 17122, 1253391, 545146, 1257630, 232034', '  series', 'N/A', '', 'Ji-Won Ha', 'tt3322566', '8.5'),
(192, '\n                Action, Adventure, Sci-Fi\n                ', '\n            Captain America: The First Avenger\n                ', '2020-10-20', ' https://m.media-amazon.com/images/M/MV5BMTYzOTc2NzU3N15BMl5BanBnXkFtZTcwNjY3MDE3NQ@@._V1_SX300.jpg ', '\n            Steve Rogers, a rejected military soldier, transforms into Captain America after taking a dose of a \"Super-Soldier serum\". But being Captain America comes at a price as he attempts to take down a war monger and a terrorist organization.\n                ', '', 0, '', '', '', '', '', '', 2011, '16828, 39459, 60898, 2176, 1331, 55470, 30315, 2283, 2231, 13014', '  movie', 'PG-13', '', 'Chris Evans, Hayley Atwell, Sebastian Stan, Tommy Lee Jones', 'tt0458339', '6.9'),
(193, '\n                Comedy, Drama\n                ', '\n            Ana\n                ', '2020-10-20', ' https://m.media-amazon.com/images/M/MV5BNDdjNzk4ODItN2Q0Ni00YTFjLTkyNTAtNzMyMTc3ODM0NzlhXkEyXkFqcGdeQXVyNTk3MjE4NjI@._V1_SX300.jpg ', '\n            Ana meets Rafa in a chance encounter and they embark on a road trip to try and save him from bankruptcy, or worse.\n                ', '', 0, '', '', '', '', '', '', 2020, '', '  movie', 'N/A', '', 'Andy Garcia, Dafne Keen, Jeanne Tripplehorn, Luna Lauren Velez', 'tt6865630', '5.7'),
(194, '\n                Action, Adventure, Comedy, Romance\n                ', '\n            Six Days Seven Nights\n                ', '2020-10-20', ' https://m.media-amazon.com/images/M/MV5BZDgwYzNlMjYtNjQxMy00NjQxLWJiMTItNjkzZTQ0ZTZiMTcyXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SX300.jpg ', '\n            Robin Monroe, a New York magazine editor, and the gruff pilot Quinn Harris must put aside their mutual dislike if they are to survive after crash landing on a deserted South Seas island.\n                ', '', 0, '', '', '', '', '', '', 1998, '3, 8256, 14409, 49818, 7242, 19, 7248, 11160, 1402117, 1060194', '  movie', 'PG-13', '', 'Harrison Ford, Anne Heche, David Schwimmer, Jacqueline Obradors', 'tt0120828', '5.8'),
(200, '\n                Action, Drama, History, Romance\n                ', '\n            An Empress and the Warriors\n                ', '2020-10-22', ' https://m.media-amazon.com/images/M/MV5BODEyMTFkZDQtOGYwYy00YzBlLTlkMzgtOThhNDdhMGUxOWQ4XkEyXkFqcGdeQXVyODU2MDg1NzU@._V1_SX300.jpg ', '\n            After the death of her father, a woman is forced to take over as empress and fight to save her kingdom.\n                ', '', 0, '', '', '', '', '', '', 2008, '72730, 1341, 66761, 116636, 1174455, 1044559, 1174456, 224927, 1174458, 1021201', '  movie', 'R', '', 'Kelly Chen, Donnie Yen, Leon Lai, Xiaodong Guo', 'tt1186803', '5.8'),
(201, '\n                Action, Drama, Sci-Fi, Thriller\n                ', '\n            I, Robot\n                ', '2020-10-24', ' https://m.media-amazon.com/images/M/MV5BNmE1OWI2ZGItMDUyOS00MmU5LWE0MzUtYTQ0YzA1YTE5MGYxXkEyXkFqcGdeQXVyMDM5ODIyNw@@._V1_SX300.jpg ', '\n            In 2035, a technophobic cop investigates a crime that may have been perpetrated by a robot, which leads to a larger threat to humanity.\n                ', '', 0, '', '', '', '', '', '', 2004, '2888, 18354, 21088, 2505, 21089, 10959, 8687, 21091, 172994, 11677', '  movie', 'PG-13', '', 'Will Smith, Bridget Moynahan, Alan Tudyk, James Cromwell', 'tt0343818', '7.1'),
(202, '\n                Comedy, Drama, Romance\n                ', '\n            Christmas Inheritance\n                ', '2020-10-24', ' https://m.media-amazon.com/images/M/MV5BMjM2ODVjNjItMTRhNi00ZGU0LTkyM2UtNTJlMmE3NzBkMjE3XkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_SX300.jpg ', '\n            To be the CEO, an heiress is challenged by her dad to deliver a Christmas letter in person to his ex-partner in their hometown - traveling by bus, incognito and with only $100. Will she learn something from the people there?\n                ', '', 0, '', '', '', '', '', '', 2017, '1213278, 1533, 496470, 1939158, 5941, 956556, 44203, 62126, 182976, 166489', '  movie', 'N/A', '', 'Eliza Taylor, Jake Lacy, Andie MacDowell, Neil Crone', 'tt7608534', '5.7'),
(203, '\n                Action, Adventure, Sci-Fi\n                ', '\n            Avengers: Infinity War\n                ', '2020-10-24', ' https://m.media-amazon.com/images/M/MV5BMjMxNjY2MDU1OV5BMl5BanBnXkFtZTgwNzY1MTUwNTM@._V1_SX300.jpg ', '\n            The Avengers and their allies must be willing to sacrifice all in an attempt to defeat the powerful Thanos before his blitz of devastation and ruin puts an end to the universe.\n                ', '', 0, '', '', '', '', '', '', 2018, '3223, 74568, 16828, 1245, 71580, 1136406, 172069, 1896, 8691, 543261', '  movie', 'PG-13', '', 'Robert Downey Jr., Chris Hemsworth, Mark Ruffalo, Chris Evans', 'tt4154756', '8.4'),
(204, '\n                Action, Adventure, Sci-Fi\n                ', '\n            Black Widow\n                ', '2020-10-24', ' https://m.media-amazon.com/images/M/MV5BMzFiODE0ZDUtN2IxNC00OTI5LTg4OWItZTE2MjU4ZTk2NjM5XkEyXkFqcGdeQXVyNDYzODU1ODM@._V1_SX300.jpg ', '\n            A film about Natasha Romanoff in her quests between the films Civil War and Infinity War.\n                ', '', 0, '', '', '', '', '', '', 2021, '1245, 1373737, 35029, 113970, 3293, 227, 5538, 2408958, 2410139, 2187686', '  movie', 'Unrated', '', 'Scarlett Johansson, Florence Pugh, Robert Downey Jr., Rachel Weisz', 'tt3480822', 'N/A'),
(205, '\n                Action, Adventure, Fantasy, Sci-Fi, War\n                ', '\n            Wonder Woman\n                ', '2020-10-24', ' https://m.media-amazon.com/images/M/MV5BMTYzODQzYjQtNTczNC00MzZhLTg1ZWYtZDUxYmQ3ZTY4NzA1XkEyXkFqcGdeQXVyODE5NzE3OTE@._V1_SX300.jpg ', '\n            When a pilot crashes and tells of conflict in the outside world, Diana, an Amazonian warrior in training, leaves home to fight a war, discovering her full powers and true destiny.\n                ', '', 0, '', '', '', '', '', '', 2017, '90633, 62064, 935, 32, 6413, 11207, 5419, 1125, 1823591, 11111', '  movie', 'PG-13', '', 'Gal Gadot, Chris Pine, Connie Nielsen, Robin Wright', 'tt0451279', '7.4'),
(206, '\n                Action, Horror, Thriller\n                ', '\n            Train to Busan Presents: Peninsula\n                ', '2020-10-24', ' https://m.media-amazon.com/images/M/MV5BNmIxNTQ4MjgtMzI0Zi00N2I5LWIxZDAtZDFlNzA5N2JiNmZmXkEyXkFqcGdeQXVyMjU0ODQ5NTA@._V1_SX300.jpg ', '\n            A zombie virus has the last 4 years spread to all South Korea. 4 Koreans in HK sail thru the blockade to Incheon for USD20,000,000 on a truck.\n                ', '', 0, '', '', '', '', '', '', 2020, '83014, 1244822, 1299244, 554945, 573792, 1096458, 1793046, 1924149, 2478781, 463583', '  movie', 'Not Rate', '', 'Dong-Won Gang, Jung-hyun Lee, Re Lee, Hae-hyo Kwon', 'tt8850222', '5.5'),
(207, '\n                Animation, Action, Adventure, Fantasy\n                ', '\n            Demon Slayer the Movie: Mugen Train\n                ', '2020-10-24', ' https://m.media-amazon.com/images/M/MV5BYjQyZTYwMzQtMjQ4ZC00MGVjLThmMTctZjc3ZThmZjY0MjgwXkEyXkFqcGdeQXVyODMyNTM0MjM@._V1_SX300.jpg ', '\n            Tanjiro Kamado, joined with Inosuke Hashibira, a boy raised by boars who wears a boar\'s head, and Zenitsu Agatsuma, a scared boy who reveals his true power when he sleeps, board the ...\n                ', '', 0, '', '', '', '', '', '', 2020, '1256603, 1563442, 119145, 233590, 224413, 9705, 24647, 221773, 9726, 90567', '  movie', 'N/A', '', 'Yoshitsugu Matsuoka, Natsuki Hanae, Hiro Shimono, Satoshi Hino', 'tt11032374', 'N/A'),
(208, '\n                Action, Crime, Drama, Thriller\n                ', '\n            The Tax Collector\n                ', '2020-10-24', ' https://m.media-amazon.com/images/M/MV5BMmFmZTdhYmItNjIyZS00ZjVlLWFjZjgtMjMyMDA5ZmVjNzE0XkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_SX300.jpg ', '\n            A \"tax collector\" working for a local crime lord finds his family\'s safety compromised when the rival of his boss shows up in L.A. and upends the business.\n                ', '', 0, '', '', '', '', '', '', 2020, '150676, 1201138, 41798, 1102, 10959, 177231, 200065, 1977969, 1862014, 1690516', '  movie', 'Not Rate', '', 'Bobby Soto, Cinthya Carmona, Shia LaBeouf, Jose Conejo Martin', 'tt8461224', '4.7'),
(209, '\n                Adventure, Crime, Drama, Mystery\n                ', '\n            Enola Holmes\n                ', '2020-10-24', ' https://m.media-amazon.com/images/M/MV5BZjNkNzk0ZjEtM2M1ZC00MmMxLTlmOWEtNWRlZTc1ZTUyNzY4XkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_SX300.jpg ', '\n            When Enola Holmes-Sherlock\'s teen sister-discovers her mother missing, she sets off to find her, becoming a super-sleuth in her own right as she outwits her famous brother and unravels a dangerous conspiracy around a mysterious young Lord.\n                ', '', 0, '', '', '', '', '', '', 2020, '1356210, 73968, 237455, 1283, 1558986, 39659, 81840, 10981, 1531926, 47468', '  movie', 'PG-13', '', 'Millie Bobby Brown, Henry Cavill, Sam Claflin, Helena Bonham Carter', 'tt7846844', '6.6'),
(210, '\n                Adventure, Comedy, Family, Fantasy, Horror, Mystery\n                ', '\n            The Witches\n                ', '2020-10-25', ' https://m.media-amazon.com/images/M/MV5BNjRkYjlhMjEtYzIwOC00ZWYzLTgyMmQtYjI5M2UzNDJkNTU2XkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_SX300.jpg ', '\n            Based on Roald Dahl\'s 1983 classic book \'The Witches\', the story tells the scary, funny and imaginative tale of a seven year old boy who has a run in with some real life witches!\n                ', '', 0, '', '', '', '', '', '', 2020, '1813, 6944, 2283, 2241218, 2632, 2153678, 52775, 1228665, 281527, 1370805', '  movie', 'PG', '', 'Anne Hathaway, Octavia Spencer, Stanley Tucci, Chris Rock', 'tt0805647', 'N/A'),
(211, '\n                Comedy\n                ', '\n            Dedicada a mi Ex\n                ', '2020-10-25', ' https://m.media-amazon.com/images/M/MV5BMzlkNzE2YTctYzk4ZC00ZjMwLTk3YjgtNzA2ZWRhNzczMjQ1XkEyXkFqcGdeQXVyMTAyMDQ2ODcz._V1_SX300.jpg ', '\n            A band of misfits enter a music video contest in order to win a cash prize, but don\'t realize they actually have to be good at playing music.\n                ', '', 0, '', '', '', '', '', '', 2019, '1640507, 1640510, 147333, 1737888, 1309844, 239574, 1640509, 2096815, 2446696, 1349231', '  movie', 'N/A', '', 'Mariana Treviño, Biassini Segura, Erika Toa Russo, Carlos Alcántara', 'tt5869370', '7.5'),
(213, '\n                Drama, Romance\n                ', '\n            Little Women\n                ', '2020-10-25', ' https://m.media-amazon.com/images/M/MV5BY2QzYTQyYzItMzAwYi00YjZlLThjNTUtNzMyMDdkYzJiNWM4XkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_SX300.jpg ', '\n            Jo March reflects back and forth on her life, telling the beloved story of the March sisters - four young women, each determined to live life on her own terms.\n                ', '', 0, '', '', '', '', '', '', 2019, '36592, 1373737, 10990, 1669125, 4784, 1190668, 5064, 72638, 59410, 1205278', '  movie', 'PG', '', 'Saoirse Ronan, Emma Watson, Florence Pugh, Eliza Scanlen', 'tt3281548', '7.8'),
(214, '\n                Action, Thriller\n                ', '\n            Hard Kill\n                ', '2020-10-26', ' https://m.media-amazon.com/images/M/MV5BMmFhM2U0N2YtZDA3NS00MDcxLThlZTMtNTEwMGNiZWExNmJlXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_SX300.jpg ', '\n            The work of billionaire tech CEO Donovan Chalmers (Willis) is so valuable that he hires mercenaries to protect it, and a terrorist group kidnaps his daughter just to get it.\n                ', '', 0, '', '', '', '', '', '', 2020, '', '  movie', 'R', '', 'Jesse Metcalfe, Bruce Willis, Lala Kent, Natalie Eva Marie', 'tt11656172', '4.1'),
(215, '\n                Action, Drama, Thriller\n                ', '\n            Deep State\n                ', '2020-10-26', ' https://m.media-amazon.com/images/M/MV5BNzNjY2EzMDQtNjExMS00M2Q0LTk0NTMtNzM4MmJlMzQwMDJlXkEyXkFqcGdeQXVyODU3NjAxNjc@._V1_SX300.jpg ', '\n            What happens when a man who believes he has retired from MI6 is called back to do one more job to regain his life, only to discover that this job may mean he has no life to go back to.\n                ', '', 0, '', '', '', '', '', '', 2018, '27740, 107033, 1086530, 2510670', '  series', 'TV-MA', '', 'Joe Dempsie, Karima McAdams, Anastasia Griffith, Alistair Petrie', 'tt4785472', '7.0'),
(216, '\n                Adventure, Family\n                ', '\n            The Games Maker\n                ', '2020-10-26', ' https://m.media-amazon.com/images/M/MV5BMTg2NjA0ODAzN15BMl5BanBnXkFtZTgwNDc0MzkwMjE@._V1_SX300.jpg ', '\n            Young Ivan Drago\'s newfound love of board games catapults him into the fantastical and competitive world of game invention, and pits him against the inventor Morodian, who has long desired ...\n                ', '', 0, '', '', '', '', '', '', 2014, '', '  movie', 'TV-PG', '', 'David Mazouz, Edward Asner, Joseph Fiennes, Tom Cavanagh', 'tt2766268', '5.6'),
(217, '\n                Animation, Comedy, Family, Fantasy\n                ', '\n            Despicable Me\n                ', '2020-10-26', ' https://m.media-amazon.com/images/M/MV5BMTY3NjY0MTQ0Nl5BMl5BanBnXkFtZTcwMzQ2MTc0Mw@@._V1_SX300.jpg ', '\n            When a criminal mastermind uses a trio of orphan girls as pawns for a grand scheme, he finds their love is profoundly changing him for the better.\n                ', '', 0, '', '', '', '', '', '', 2010, '4495, 41088, 59919, 5823, 21200, 41091, 17743, 124750, 122851, 124747', '  movie', 'PG', '', 'Steve Carell, Jason Segel, Russell Brand, Julie Andrews', 'tt1323594', '7.6'),
(218, '\n                Action, Horror, Thriller\n                ', '\n            Train to Busan\n                ', '2020-10-26', ' https://m.media-amazon.com/images/M/MV5BMTkwOTQ4OTg0OV5BMl5BanBnXkFtZTgwMzQyOTM0OTE@._V1_SX300.jpg ', '\n            While a zombie virus breaks out in South Korea, passengers struggle to survive on the train from Seoul to Busan.\n                ', '', 0, '', '', '', '', '', '', 2016, '150903, 1024395, 127720, 1255881, 1042232, 1278162, 1347175, 1418581, 17127, 1164499', '  movie', 'TV-MA', '', 'Yoo Gong, Yu-mi Jung, Dong-seok Ma, Su-an Kim', 'tt5700672', '7.6'),
(219, '\n                Comedy, Drama, Family\n                ', '\n            The War with Grandpa\n                ', '2020-10-27', ' https://m.media-amazon.com/images/M/MV5BNTlkZDQ1ODEtY2ZiMS00OGNhLWJlZDctYzY0NTFmNmQ2NDAzXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_SX300.jpg ', '\n            Upset that he has to share the room he loves with his grandfather, Peter decides to declare war in an attempt to get it back.\n                ', '', 0, '', '', '', '', '', '', 2020, '380, 139, 4690, 10223, 1422517, 54722, 71403, 11159, 1393826, 1802079', '  movie', 'PG', '', 'Robert De Niro, Uma Thurman, Rob Riggle, Oakes Fegley', 'tt4532038', '5.4'),
(220, '\n                Adventure, Family, Fantasy, Musical, Romance\n                ', '\n            Aladdin\n                ', '2020-10-29', ' https://m.media-amazon.com/images/M/MV5BMjQ2ODIyMjY4MF5BMl5BanBnXkFtZTgwNzY4ODI2NzM@._V1_SX300.jpg ', '\n            A kind-hearted street urchin and a power-hungry Grand Vizier vie for a magic lamp that has the power to make their deepest wishes come true.\n                ', '', 0, '', '', '', '', '', '', 2019, '1515478, 240724, 2888, 935235, 103330, 476163, 141034, 35434, 150469, 21088', '  movie', 'PG', '', 'Will Smith, Mena Massoud, Naomi Scott, Marwan Kenzari', 'tt6139732', '7.0'),
(221, '\n                Action, Adventure, Drama, Fantasy, Romance\n                ', '\n            Game of Thrones\n                ', '2020-10-29', ' https://m.media-amazon.com/images/M/MV5BYTRiNDQwYzAtMzVlZS00NTI5LWJjYjUtMzkwNTUzMWMxZTllXkEyXkFqcGdeQXVyNDIzMzcwNjc@._V1_SX300.jpg ', '\n            Nine noble families fight for control over the lands of Westeros, while an ancient enemy returns after being dormant for millennia.\n                ', '', 0, '', '', '', '', '', '', 2011, '1223786, 17286, 1001657, 239019, 22970, 12795, 1181313, 15498, 1010135, 84423, 1011904, 239020, 9647', '  series', 'TV-MA', '', 'Peter Dinklage, Lena Headey, Emilia Clarke, Kit Harington', 'tt0944947', '9.3'),
(222, '\n                Action, Comedy, Crime, Thriller\n                ', '\n            Bad Boys for Life\n                ', '2020-10-29', ' https://m.media-amazon.com/images/M/MV5BMWU0MGYwZWQtMzcwYS00NWVhLTlkZTAtYWVjOTYwZTBhZTBiXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_SX300.jpg ', '\n            Miami detectives Mike Lowrey and Marcus Burnett must face off against a mother-and-son pair of drug lords who wreak vengeful havoc on their city.\n                ', '', 0, '', '', '', '', '', '', 2020, '2888, 78029, 544442, 67599, 23498, 1907002, 36628, 1688196, 532, 4604', '  movie', 'R', '', 'Will Smith, Martin Lawrence, Vanessa Hudgens, Alexander Ludwig', 'tt1502397', '6.6'),
(223, '\n                Action, Crime, Drama, Mystery, Thriller\n                ', '\n            Memories of Murder\n                ', '2020-10-29', ' https://m.media-amazon.com/images/M/MV5BOGViNTg4YTktYTQ2Ni00MTU0LTk2NWUtMTI4OTc1YTM0NzQ2XkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_SX300.jpg ', '\n            In a small Korean province in 1986, two detectives struggle with the case of multiple young women being found raped and murdered by an unknown culprit.\n                ', '', 0, '', '', '', '', '', '', 2003, '20738, 69378, 69379, 1080904, 21687, 1299348, 1136064, 1075838, 139513, 994248', '  movie', 'Not Rate', '', 'Kang-ho Song, Sang-kyung Kim, Roe-ha Kim, Jae-ho Song', 'tt0353969', '8.1'),
(234, '\n                Drama, Romance, Thriller\n                ', '\n            The K2\n                ', '2020-10-31', 'https://image.tmdb.org/t/p/original/3xHzNBfXfzfd3cLZMhkwJCl4xR9.jpg', '\n            Kim Je Ha is former solider for hire. He is also called K2. He is hired as a bodyguard by Choi Yoo Jin. Choi Yoo Jin is the wife of Jang Se Joon, who is running for president. Meanwhile, Go...\n                ', '', 0, '', '', '', '', '', '', 2016, '1253391, 90472, 1252045, 551171, 64497, 1372475, 1222431, 570899', '  series', 'TV-14', '', 'Chang-Wook Ji, Yun-ah Song, Yoon-ah Im, Sung-ha Jo', 'tt5966882', '7.8'),
(235, '\n                Action, Romance, Thriller\n                ', '\n            City Hunter\n                ', '2020-10-31', 'https://image.tmdb.org/t/p/original/m4PVsGFCYh8Hlaphwxl2K8owLqU.jpg', '\n            Lee Yun-seong was trained by his father\'s best friend in order to get revenge on the government for killing everyone in his father\'s unit.\n                ', '', 0, '', '', '', '', '', '', 2011, '1245104, 1234603, 1254630, 84910, 87090, 1254631, 1254633, 123820, 1254632, 1122533, 1326172, 125863', '  series', 'TV-Y', '', 'Min-Ho Lee, Min-Young Park, Sang-Jung Kim, Ho-jin Chun', 'tt1982229', '8.2'),
(237, '\n                Animation, Action, Adventure, Family\n                ', '\n            The Incredibles\n                ', '2020-11-01', 'https://image.tmdb.org/t/p/original/se5Hxz7PArQZOG3Nx2bpfOhLhtV.jpg', '\n            A family of undercover superheroes, while trying to live the quiet suburban life, are forced into action to save the world.\n                ', '', 0, '', '', '', '', '', '', 2004, '8977, 18686, 2231, 11662, 7891, 59357, 155917, 59358, 59359, 12900', '  movie', 'PG', '', 'Craig T. Nelson, Holly Hunter, Samuel L. Jackson, Jason Lee', 'tt0317705', '8.0'),
(238, '\n                Drama\n                ', '\n            The Shawshank Redemption\n                ', '2020-11-02', 'https://image.tmdb.org/t/p/original/iNh3BivHyg5sQRPP1KOkzguEX0H.jpg', '\n            Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.\n                ', '', 0, '', '', '', '', '', '', 1994, '504, 192, 4029, 6573, 6574, 6575, 6576, 6577, 12645, 92119', '  movie', 'R', '', 'Tim Robbins, Morgan Freeman, Bob Gunton, William Sadler', 'tt0111161', '9.3'),
(239, '\n                Romance\n                ', '\n            Gabriel\'s Rapture\n                ', '2020-11-02', 'https://image.tmdb.org/t/p/original/jtAI6OJIWLWiRItNSZoWjrsUtmi.jpg', '\n            Based on the best selling novel from by Sylvain Reynard.\n                ', '', 0, '', '', '', '', '', '', 2021, '', '  movie', 'N/A', '', 'Melanie Zanetti, Giulio Berruti, James Andrew Fraser, Margaux Brooke', 'tt11641654', '5.9'),
(240, '\n                Mystery, Thriller\n                ', '\n            Forgotten\n                ', '2020-11-03', 'https://image.tmdb.org/t/p/original/tGFII2hY0O0qXPAPGE1fBDOONQJ.jpg', '\n            When his abducted brother returns seemingly a different man with no memory of the past 19 days, Jin-seok chases after the truth behind the kidnapping.\n                ', '', 0, '', '', '', '', '', '', 2017, '1257899, 84788, 240948, 1267859, 1453249, 1200395, 2402498, 2402500, 2402501, 2402502', '  movie', 'TV-MA', '', 'Yeon Je Hyung, Ha-Neul Kang, Mu-Yeol Kim, Na-ra Lee', 'tt7057496', '7.4'),
(241, '\n                Sci-Fi\n                ', '\n            2067\n                ', '2020-11-03', 'https://image.tmdb.org/t/p/original/5UkzNSOK561c2QRy2Zr4AkADzLT.jpg', '\n            One man\'s journey to the future to save a dying world.\n                ', '', 0, '', '', '', '', '', '', 2020, '113505, 133212, 2191082, 1203030, 93114, 228704, 1980651, 1522920, 75129, 78962', '  movie', 'Not Rate', '', 'Kodi Smit-McPhee, Ryan Kwanten, Sana\'a Shaik, Deborah Mailman', 'tt1918734', '4.8'),
(242, '\n                Animation, Adventure, Comedy, Family, Fantasy, Musical, Sci-Fi\n                ', '\n            Over the Moon\n                ', '2020-11-03', 'https://image.tmdb.org/t/p/original/htBUhLSS7FfHtydgYxUWjL3J1Q1.jpg', '\n            In this animated musical, a girl builds a rocket ship and blasts off, hoping to meet a mythical moon goddess.\n                ', '', 0, '', '', '', '', '', '', 2020, '2168935, 1631814, 2688957, 83586, 68842, 25540, 1724466, 11152, 1443708, 1509454', '  movie', 'PG', '', 'Ken Jeong, Kimiko Glenn, Phillipa Soo, Sandra Oh', 'tt7488208', 'N/A'),
(243, '\n                Sport\n                ', '\n            UFC 10: The Tournament\n                ', '2020-11-03', 'https://image.tmdb.org/t/p/originalundefined', '\n            N/A\n                ', '', 0, '', '', '', '', '', '', 1996, '82051, 82042, 82043, 82087, 82088, 82089, 82090, 82040, 82045, 82012', '  movie', 'N/A', '', 'David Abbott, Sam Adkins, Bruce Beck, Dieusuel Berto', 'tt0487974', '7.8'),
(244, '\n                Drama\n                ', '\n            Yellowknife\n                ', '2020-11-03', 'https://image.tmdb.org/t/p/originalundefined', '\n            The film tells the story of three couples on the road between the Atlantic coast and the Northwest Territories in Canada.\n                ', '', 0, '', '', '', '', '', '', 2002, '32890, 1313530, 216442, 1313531, 1298076, 146174, 125830, 1970740, 2088579, 2088580', '  movie', 'N/A', '', 'Sébastien Huberdeau, Hélène Florent, Patsy Gallant, Philippe Clément', 'tt0307683', '6.5'),
(245, '\n                Drama\n                ', '\n            Southern District\n                ', '2020-11-03', 'https://image.tmdb.org/t/p/originalundefined', '\n            For a rich upper-class family locked into their own little world, Bolivia\'s social changes threaten to burst their bubble.\n                ', '', 0, '', '', '', '', '', '', 2009, '', '  movie', 'N/A', '', 'Ninón del Castillo, Pascual Loayza, Nicolás Fernández, Juan Pablo Koria', 'tt1526317', '6.5'),
(246, '\n                Action, Crime, Drama, Thriller\n                ', '\n            Rogue City\n                ', '2020-11-03', 'https://image.tmdb.org/t/p/original/gnf4Cb2rms69QbCnGFJyqwBWsxv.jpg', '\n            Caught in the cross hairs of police corruption and Marseille\'s warring gangs, a loyal cop must protect his squad by taking matters into his own hands.\n                ', '', 0, '', '', '', '', '', '', 2020, '84433, 37919, 1407184, 1003, 62439, 70165, 20532, 52347, 52346, 984479', '  movie', 'N/A', '', 'Lannick Gautry, Stanislas Merhar, Kaaris, David Belle', 'tt10127684', '6.1'),
(247, '\n                Drama, Mystery, Sci-Fi, Thriller\n                ', '\n            The Forgotten\n                ', '2020-11-04', 'https://image.tmdb.org/t/p/original/tq5xnlYFDlfRZvSAOr3T7H8Yeko.jpg', '\n            After being told that their children never existed, a man and woman soon discover there is a much bigger enemy at work.\n                ', '', 0, '', '', '', '', '', '', 2004, '1231, 63982, 2751529, 11085, 14984, 3900, 33, 17287, 2751530, 1781693', '  movie', 'PG-13', '', 'Julianne Moore, Christopher Kovaleski, Matthew Pleszewicz, Anthony Edwards', 'tt0356618', '5.8'),
(248, '\n                Drama, Horror, Thriller\n                ', '\n            1BR\n                ', '2020-11-05', 'https://image.tmdb.org/t/p/original/dqGs8fWcaMiaMquLt289Is6bT7p.jpg', '\n            Sarah tries to start anew in LA, but her neighbours are not what they seem.\n                ', '', 0, '', '', '', '', '', '', 2019, '2349063, 1040368, 4944, 22053, 1454845, 1137246, 160600, 2349064, 1781001, 1534552', '  movie', 'TV-MA', '', 'Nicole Brydon Bloom, Giles Matthey, Taylor Nichols, Alan Blumenfeld', 'tt7541106', '5.8'),
(249, '\n                Animation, Adventure, Comedy, Family, Fantasy\n                ', '\n            The Croods: A New Age\n                ', '2020-11-05', 'https://image.tmdb.org/t/p/original/mqmHhAf7OhJq5Tq81p7wFI0Fnde.jpg', '\n            The prehistoric family the Croods are challenged by a rival family the Bettermans, who claim to be better and more evolved.\n                ', '', 0, '', '', '', '', '', '', 2020, '2963, 54693, 10859, 22970, 41087, 1663195, 2229, 54729, 42267, 9599', '  movie', 'PG', '', 'Ryan Reynolds, Nicolas Cage, Emma Stone, Leslie Mann', 'tt2850386', 'N/A'),
(250, '\n                Animation, Action, Adventure, Comedy, Fantasy, Romance\n                ', '\n            Is It Wrong to Try to Pick Up Girls in a Dungeon - Arrow of the Orion\n                ', '2020-11-05', 'https://image.tmdb.org/t/p/original/zlpKUEE4A5LjaTmEz37pw2VZQug.jpg', '\n            In the city of Orario, beneath an impossibly tall tower, lies the dungeon. Only adventurers who form partnerships with the gods themselves have any hope of defeating the monsters that lie ...\n                ', '', 0, '', '', '', '', '', '', 2019, '233590, 1325949, 9711, 1339189, 1296667, 221773, 1253008, 1072774, 1324650, 1454215', '  movie', 'N/A', '', 'Yoshitsugu Matsuoka, Inori Minase, Maaya Sakamoto, Maaya Uchida', 'tt9526152', '6.8');
INSERT INTO `posts` (`post_id`, `genre`, `post_title`, `post_date`, `post_image`, `post_content`, `post_comment_count`, `post_views_count`, `download_link_FHD`, `download_link_HD`, `download_link_SD`, `Trailer_id`, `watch_later`, `favourites`, `year_date`, `cast_images`, `indie`, `PG`, `images`, `casts`, `imdb`, `rating`) VALUES
(251, '\n                Action, Drama, Sci-Fi\n                ', '\n            Bloodshot\n                ', '2020-11-05', 'https://image.tmdb.org/t/p/original/lP5eKh8WOcPysfELrUpGhHJGZEH.jpg', '\n            Ray Garrison, a slain soldier, is re-animated with superpowers.\n                ', '', 0, '', '', '', '', '', '', 2020, '12835, 1222992, 209326, 20286, 66441, 1181327, 529, 238164, 1472892, 1716711', '  movie', 'PG-13', '', 'Vin Diesel, Eiza González, Sam Heughan, Toby Kebbell', 'tt1634106', '5.7'),
(252, '\n                Action, Comedy, Drama, Family\n                ', '\n            The Pacifier\n                ', '2020-11-05', 'https://image.tmdb.org/t/p/original/yyd7gjAIpOpkjjvkBqna0jBYe0h.jpg', '\n            Having recovered from wounds received in a failed rescue operation, Navy SEAL Shane Wolfe is handed a new assignment: Protect the five Plummer kids from enemies of their recently deceased father -- a government scientist whose top-secret experiment remains in the kids\' house.\n                ', '', 0, '', '', '', '', '', '', 2005, '12835, 148615, 41883, 16858, 62054, 72997, 29221, 18, 10556, 15455', '  movie', 'PG', '', 'Vin Diesel, Lauren Graham, Faith Ford, Brittany Snow', 'tt0395699', '5.6'),
(253, '\n                Action, Adventure, Fantasy, Mystery\n                ', '\n            The Witcher\n                ', '2020-11-05', 'https://image.tmdb.org/t/p/original/s56eyXy8rADp5DpZknfe2HXq4u4.jpg', '\n            Geralt of Rivia, a solitary monster hunter, struggles to find his place in a world where people often prove more wicked than beasts.\n                ', '', 0, '', '', '', '', '', '', 2019, '73968, 2146942, 2146944, 1503072', '  series', 'TV-MA', '', 'Henry Cavill, Freya Allan, Basil Eidenbenz, Anya Chalotra', 'tt5180504', '8.2'),
(254, '\n                Comedy, Romance\n                ', '\n            The Big Bang Theory\n                ', '2020-11-06', 'https://image.tmdb.org/t/p/original/ngoiHQul4QetfA62SdmZZOdDFAP.jpg', '\n            A woman who moves into an apartment across the hall from two brilliant but socially awkward physicists shows them how little they know about life outside of the laboratory.\n                ', '', 0, '', '', '', '', '', '', 2007, '16478, 5374, 53862, 53863, 1221716, 208099, 167640', '  series', 'TV-14', '', 'Johnny Galecki, Jim Parsons, Kaley Cuoco, Simon Helberg', 'tt0898266', '8.1'),
(255, '\n                Drama, Mystery, Romance, Sci-Fi\n                ', '\n            Kyle XY\n                ', '2020-11-06', 'https://image.tmdb.org/t/p/original/o6Ln2cQCuoxJgSXi63bRpA1OvmH.jpg', '\n            A family takes in a formerly institutionalized teen savant who is missing standard human behaviors such as anger, joy, and love.\n                ', '', 0, '', '', '', '', '', '', 2006, '79494, 166566, 79497, 180320, 205204, 94984, 60715, 59817, 42706, 27775', '  series', 'TV-14', '', 'Matt Dallas, Marguerite MacIntyre, Bruce Thomas, April Matson', 'tt0756509', '7.5');

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
(15, 'proftobyss', '$2y$12$0buc5gS.Io4KnAMDSQfb5.v5nGomr5MViK/Om/lMX2ShP2yp2fJFW', '', '', 'proftoby97@gmail.com', 'icons/1538cb41c20107bf23747c484d9b85abben.jpeg', 'admin', '$2y$10$iusesomecrazystrings22', '1001979812'),
(17, 'samuel', '$2y$12$nFIJ1HuXoDovsl5mQjG3t.Nha5EB2goxFVKdQDFqUJX6jEJlDubwq', '', '', '12@gmaial.com', 'icons/175cae09a1e27cc24a5fea8228d1049d9cn.jpeg', 'subscriber', '$2y$10$iusesomecrazystrings22', '');

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
(72, 'sohf72l15hh65nvhi49u5i9f7f', 1604630599);

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
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

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
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=256;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users_online`
--
ALTER TABLE `users_online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `watch_later`
--
ALTER TABLE `watch_later`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
