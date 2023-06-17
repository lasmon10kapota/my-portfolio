-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2023 at 08:09 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `address` varchar(50) NOT NULL,
  `message` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project` text DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project`, `description`) VALUES
(1, 'Programming in C', 'Projects to be added anytime soon '),
(2, 'Programming in Java ', 'Projects to be added in the near future'),
(3, 'Programming in PHP\r\n', 'Projects to be added soon'),
(4, 'Using PhotoShop', 'Projects to be added anytime soon');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `skill` text DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill`, `description`) VALUES
(1, 'Graphic Designing', 'I can create convincing layouts and designs of logos, flyers and many more that effectively convey the required message or idea to the consumers using \r\n         designing tools such as Adobe PhotoShop.'),
(2, ' Web Designing and Development', 'I can bring together front-end languages like HTML, CSS and JavaScript with back-end languages such as PHP accordingly to interact with each other in their functioning capabilities in such a way that effective and efficient web applications are built to serve different tasks.'),
(3, 'Desktop and Mobile Applications Development', 'Using C, Java and other relevant programming languages, I can build user applications that can be used on desktop computers and laptops to offer the richest user experience and even on mobile gadgets so that they can be used anywhere and anytime.'),
(4, 'Video Production', 'I gathered up capabilities for making up a complete video all the way from planning which includes storyline and storyboard just to mention a few, shooting which requires a good camera, knowledge of best angles, steadness, closeness and many more, and finally editing which needs best software such as Adobe Premiere, and knowledge of how to work around the editing window.'),
(5, 'Computer Networking', 'I know several aspects about computer networking as a branch of information technology such as network types, network topology, IP addressing, different transmission media and modes, cyber security and network troubleshooting among others.'),
(6, ' Photography', 'I have got also knowledge of taking high quality pictures with the creative camera aspects such as exposure, exposure compensation, exposure bracketing, zoom bursts and white balance with the aid of best cameras like Single Lens Reflex (SLR) camera.'),
(7, 'Spreadsheet Creation', 'I have got knowledge on cell formatting, formulas and pivot tables that help me create spreadsheets in which numerical data and short text strings are entered, displayed and manipulated in rows and columns working like a database which is essential in every organization using applications such as Microsoft Excel.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
