-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2016 at 08:09 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_realstate`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_constructions`
--

CREATE TABLE `tbl_constructions` (
  `id` int(11) NOT NULL,
  `project_category` varchar(300) NOT NULL,
  `project_name` text NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_constructions`
--

INSERT INTO `tbl_constructions` (`id`, `project_category`, `project_name`, `img1`, `img2`, `img3`) VALUES
(20, 'tbl_ongoing_project', 'Ambit Rahman Tower-2', '12.jpg', '11.jpg', '13.jpg'),
(21, 'tbl_ongoing_project', 'Ambit Green Homes', 'g1.jpg', 'g2.jpg', 'g3.jpg'),
(22, 'tbl_ongoing_project', 'Ambit Rose', 'rp3.jpg', 'rp1.jpg', 'rp2.jpg'),
(23, 'tbl_ongoing_project', 'Ambit Lake View', 'project-1.jpg', 'project-2.jpg', 'project-3.jpg'),
(24, 'tbl_ongoing_project', 'Ambit Z Center', 'z2.jpg', 'z1.jpg', 'z2.jpg'),
(27, 'tbl_completed_project', 'Ambit Rahman Tower', 'rt1.jpg', 'rt1.jpg', 'rt1.jpg'),
(28, 'tbl_completed_project', 'Ambit Khan Villa', 'kv1.jpg', 'kv1.jpg', 'kv1.jpg'),
(29, 'tbl_ongoing_project', 'Ambit Rose', 'rp3.jpg', 'rp1.jpg', 'rp2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_constructions`
--
ALTER TABLE `tbl_constructions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_constructions`
--
ALTER TABLE `tbl_constructions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
