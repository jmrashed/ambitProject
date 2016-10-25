-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2016 at 08:16 PM
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
-- Table structure for table `tbl_about_us`
--

CREATE TABLE `tbl_about_us` (
  `about_title` text NOT NULL,
  `about_description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_about_us`
--

INSERT INTO `tbl_about_us` (`about_title`, `about_description`, `image`) VALUES
('About Us', '<p style="text-align:justify"><strong>Ambit&nbsp;</strong>not only a builders company but also a dream maker. Almighty lord has created all of the ingredients that meet the demand of human being to live or to lead in the earth.&nbsp;Get a proper shelter is the basic need of human and naturally we &nbsp;people cherish a dream about it. Ambit helps you to Find a proper address that ensure durability and satisfaction.</p>\r\n\r\n<p style="text-align:justify"><br />\r\n<strong>Ambit </strong>builders ltd is one of the leading developer company in Bangladesh since 2011, it specialized in developing exclusive apartment complex in prime location of the Dhaka city like palton, motijheel, mugda, Basabo, uttora, khilgaon. Our all project is handover to the customer before timeline ,thats why Ambit has become a trusted name in the developing sector.&nbsp;</p>\r\n\r\n<p style="text-align:justify"><strong>Ambit </strong>is a company committed to quality design and construction. All the buildings of Ambit have been designed according to the guidelines stated in the Bangladesh National Building Code and each building is capable of&nbsp;withstanding the code-specified natural forces like Earthquake and wind.</p>\r\n\r\n<p style="text-align:justify">Not only that, each building is&nbsp;equipped with an emergency fire escape to protect the building residents in the unlikely event of a fire. Additionally, at Ambit all construction materials and equipment have a high performance rating and are procured with great care to ensure the highest possible standard.&nbsp;</p>\r\n\r\n<p><br />\r\nIn recognition of Ambits excellent quality control in the design and construction of its building.&nbsp;<strong>Ambit </strong>is one of the founding members of the Real Estate &amp; Housing Association of Bangladesh (REHAB).</p>\r\n', '1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_user` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_user`, `admin_password`) VALUES
(1, 'Sakib', 'sakib@gmail.com', 'sakib984', 'asdf123456');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_builders`
--

CREATE TABLE `tbl_builders` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_builders`
--

INSERT INTO `tbl_builders` (`id`, `title`, `description`, `image`) VALUES
(1, 'Ambit Builders', '<p>Ambit BuildersAmbit BuildersAmbit BuildersAmbit BuildersAmbit BuildersAmbit Builders</p>\r\n', 'rashed.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clients`
--

CREATE TABLE `tbl_clients` (
  `client_id` int(20) NOT NULL,
  `prefered_location` varchar(100) NOT NULL,
  `prefered_size` float NOT NULL,
  `min_bedroom` int(3) NOT NULL,
  `min_bathroom` int(3) NOT NULL,
  `name` varchar(100) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` int(50) NOT NULL,
  `cellphone` int(11) NOT NULL,
  `address` varchar(300) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_clients`
--

INSERT INTO `tbl_clients` (`client_id`, `prefered_location`, `prefered_size`, `min_bedroom`, `min_bathroom`, `name`, `profession`, `email`, `telephone`, `cellphone`, `address`, `datetime`) VALUES
(1, 'dh', 122, 1, 1, 'k', 'kl', 'jm', 8989, 6767, 'dh', '0000-00-00 00:00:00'),
(2, 'MAlibag', 1200, 3, 2, 's', 'Stu', 'sakib@gmail.com', 123456, 3216454, 'wrtertergthdtr', '0000-00-00 00:00:00'),
(3, 'Dhaka', 1000, 5, 4, 'Nazmus Sakib', 'Stu', 'jmrashed@gmail.com', 2147483647, 2147483647, '26/26 GM Road, Fultala, Chourhash, Kushtia', '2016-09-30 15:57:13'),
(4, 'Dhaka', 1200, 4, 4, 'MyPersonal', 'student', 'admin@admin.com', 2147483647, 3213212, 'dfgm ', '2016-10-11 22:13:36');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_completed_project`
--

CREATE TABLE `tbl_completed_project` (
  `id` int(20) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `land_area` varchar(300) NOT NULL,
  `land_position` varchar(300) NOT NULL,
  `city` varchar(50) NOT NULL,
  `project_location` varchar(100) NOT NULL,
  `label` varchar(100) NOT NULL,
  `no_of_apertment` varchar(100) NOT NULL,
  `apertment_size` text NOT NULL,
  `description` text NOT NULL,
  `no_of_lift` int(3) NOT NULL,
  `lift_capacity` int(3) NOT NULL,
  `generator` varchar(300) NOT NULL,
  `started_date` text NOT NULL,
  `ended_date` text NOT NULL,
  `image` text NOT NULL,
  `construction_status` text NOT NULL,
  `viedo_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_completed_project`
--

INSERT INTO `tbl_completed_project` (`id`, `project_name`, `address`, `land_area`, `land_position`, `city`, `project_location`, `label`, `no_of_apertment`, `apertment_size`, `description`, `no_of_lift`, `lift_capacity`, `generator`, `started_date`, `ended_date`, `image`, `construction_status`, `viedo_link`) VALUES
(6, 'Ambit Lake View', 'Plot #17, Block #C, Aftabnagar, Rampura, Dhaka', '5 Katha', 'Corner', 'Dhaka', 'Aftabnagar', '10', '18', '1280', 'bsaojhfpo piodahfpof adpiouafip poafu poupaiuh fdpau pouf dfs-0ifsd-p9 ', 1, 8, 'standby', '2013/11/1', '2016/11/1', '02.jpg', 'yufuyfy ', '01.jpg'),
(7, 'Ambit Green Homes', 'hdslkhnnd', 'skndkn', 'knk', 'knkn', 'Malibag', '8', '8', '5', '<p>jhvjhvjh</p>\r\n', 5, 5, 'gfcdgf', '2016-10-15', '2016-10-27', '06.jpg', '<p>hvhv</p>\r\n', '02.jpg'),
(8, 'Ambit Green Homes', 'hdslkhnnd', 'skndkn', 'knk', 'knkn;', 'kk', '8', '8', '5', '<p>jhvjhvjh</p>\r\n', 5, 5, 'gfcdgf', '2016-10-15', '2016-10-27', '02.jpg', '<p>hvhv</p>\r\n', '03.jpg'),
(9, 'Ambit Green Homes', 'hdslkhnnd', 'skndkn', 'knk', 'Dhaka', 'Aftabnagar', '8', '8', '5', '<p>rftdrtf</p>\r\n', 5, 5, 'gfcdgf', '2016-09-28', '2016-10-29', '04.jpg', '<p>xdtx</p>\r\n', '04.jpg'),
(10, 'Ambit Green Homes', 'hdslkhnnd', 'skndkn', 'knk', 'Dhaka', 'kk', '8', '8', '5', '<p>rftdrtf</p>\r\n', 5, 5, 'gfcdgf', '2016-09-28', '2016-10-29', '05.jpg', '<p>xdtx</p>\r\n', ' x ctyfufr'),
(11, 'Ambit Green Homes', 'hdslkhnnd', 'skndkn', 'knk', 'Dhaka', 'Shantinogor', '8', '8', '5', '<p>rftdrtf</p>\r\n', 5, 5, 'gfcdgf', '2016-09-28', '2016-10-29', '03.jpg', '<p>xdtx</p>\r\n', ' x ctyfufr'),
(12, 'Ambit Green Homes', 'hdslkhnnd', 'skndkn', 'knk', 'Dhaka', 'Aftabnagar', '8', '8', '5', '<p>rftdrtf</p>\r\n', 5, 5, 'gfcdgf', '2016-09-28', '2016-10-29', '02.jpg', '<p>xdtx</p>\r\n', ' x ctyfufr');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_us`
--

CREATE TABLE `tbl_contact_us` (
  `head_office` varchar(100) NOT NULL,
  `h_address` text NOT NULL,
  `local_office` varchar(100) NOT NULL,
  `l_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_contact_us`
--

INSERT INTO `tbl_contact_us` (`head_office`, `h_address`, `local_office`, `l_address`) VALUES
('Head Office', '<p>Hossan Tower,180, Fakirapool(1stFloor),&nbsp;<br />\r\nMotijheel, Dhaka-1000<br />\r\nTel: +88-02-7194396,<br />\r\nE-mail:ambitgroup@yahoo.com&nbsp;<br />\r\nWeb:www.ambit-bd.com</p>\r\n', 'Malibag Ideal', '162/25 shantibag, Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fisheries`
--

CREATE TABLE `tbl_fisheries` (
  `title` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_fisheries`
--

INSERT INTO `tbl_fisheries` (`title`, `description`, `image`) VALUES
('Fishries', '<p><strong>There has been an increase in the number of dairy farmers getting into the Jersey breed, following the removal of milk quota, that&rsquo;s according to Kevin Brady &ndash; chairman of the Jersey Society of Ireland. Eoin McCarthy reports for TheCattleSite.</strong></p>\r\n\r\n<p>&ldquo;We have noticed over the last number of years, particularly in the last three years, there has been an increase in new people getting into the Jersey breed,&rdquo; Mr Brady said.</p>\r\n\r\n<p>Mr Brady spoke to Eoin McCarthy as members of the World Jersey Cattle Bureau Tour visited Moorepark Research Centre in Ireland to review work being conducted by Teagasc involving Jerseys and Jersey crosses.</p>\r\n', 'project-2.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_graphics`
--

CREATE TABLE `tbl_graphics` (
  `title` text,
  `description` text,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_graphics`
--

INSERT INTO `tbl_graphics` (`title`, `description`, `image`) VALUES
('Color Graphics', '<p><strong>There has been an increase in the number of dairy farmers getting into the Jersey breed, following the removal of milk quota, that&rsquo;s according to Kevin Brady &ndash; chairman of the Jersey Society of Ireland. Eoin McCarthy reports for TheCattleSite.</strong></p>\r\n\r\n<p>&ldquo;We have noticed over the last number of years, particularly in the last three years, there has been an increase in new people getting into the Jersey breed,&rdquo; Mr Brady said.</p>\r\n\r\n<p>Mr Brady spoke to Eoin McCarthy as members of the World Jersey Cattle Bureau Tour visited Moorepark Research Centre in Ireland to review work being conducted by Teagasc involving Jerseys and Jersey crosses.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'project-1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_homesliders`
--

CREATE TABLE `tbl_homesliders` (
  `id` int(11) NOT NULL,
  `title1` text NOT NULL,
  `img1` text NOT NULL,
  `title2` text NOT NULL,
  `img2` text NOT NULL,
  `title3` text NOT NULL,
  `img3` text NOT NULL,
  `title4` text NOT NULL,
  `img4` text NOT NULL,
  `title5` text NOT NULL,
  `img5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_homesliders`
--

INSERT INTO `tbl_homesliders` (`id`, `title1`, `img1`, `title2`, `img2`, `title3`, `img3`, `title4`, `img4`, `title5`, `img5`) VALUES
(1, '', 'img_1.jpg', '', 'img_5.jpg', '', 'img_3.jpg', '', 'img_2.jpg', '', 'img_4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_landowners`
--

CREATE TABLE `tbl_landowners` (
  `landowner_id` int(11) NOT NULL,
  `address` varchar(300) NOT NULL,
  `land_size` int(5) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contactname` varchar(100) NOT NULL,
  `contact_address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` int(10) NOT NULL,
  `cellphone` int(10) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_landowners`
--

INSERT INTO `tbl_landowners` (`landowner_id`, `address`, `land_size`, `quantity`, `name`, `contactname`, `contact_address`, `email`, `telephone`, `cellphone`, `datetime`) VALUES
(1, '1675 Snyder Avenue', 1256, 'bigha', 'Sakib', 'Nazmus Sakib', '1675 Snyder Avenue', 'sakib@gmail.com', 548963, 32589955, '2016-09-30 16:41:25'),
(2, 'Dhaka', 444, 'bigha', 'MyPersonal', 'fjgdfojg', 'ds;ofkgpdf', 'jmrashed@gmail.com', 85757, 5787, '2016-10-11 22:16:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mail`
--

CREATE TABLE `tbl_mail` (
  `mail_id` int(15) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `phone_number` int(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(400) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_mail`
--

INSERT INTO `tbl_mail` (`mail_id`, `first_name`, `last_name`, `phone_number`, `email`, `message`, `date_time`) VALUES
(1, 'Mahedi', 'Hasan', 123, 'mahedi@gmail.com', 'Hello World..!!', '2016-10-01 20:14:11'),
(2, 'Mahedi', 'Hasan', 123, 'mahedi@gmail.com', 'Hello World..!!', '2016-10-01 20:27:48'),
(3, 'Abu', 'Nayem', 123456789, 'nayem@gmail.com', 'This is Nayem', '2016-10-01 20:28:29'),
(4, 'Nazmus', 'Sakib', 123456789, 'SAKIB@GMAIL.COM', 'I am here', '2016-10-01 22:15:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ongoing_project`
--

CREATE TABLE `tbl_ongoing_project` (
  `id` int(20) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `land_area` varchar(300) NOT NULL,
  `land_position` varchar(300) NOT NULL,
  `city` varchar(50) NOT NULL,
  `project_location` varchar(100) NOT NULL,
  `label` varchar(100) NOT NULL,
  `no_of_apertment` varchar(100) NOT NULL,
  `apertment_size` text NOT NULL,
  `description` text NOT NULL,
  `no_of_lift` int(3) NOT NULL,
  `lift_capacity` int(3) NOT NULL,
  `generator` varchar(300) NOT NULL,
  `started_date` text NOT NULL,
  `ended_date` text NOT NULL,
  `image` text NOT NULL,
  `construction_status` text NOT NULL,
  `viedo_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_ongoing_project`
--

INSERT INTO `tbl_ongoing_project` (`id`, `project_name`, `address`, `land_area`, `land_position`, `city`, `project_location`, `label`, `no_of_apertment`, `apertment_size`, `description`, `no_of_lift`, `lift_capacity`, `generator`, `started_date`, `ended_date`, `image`, `construction_status`, `viedo_link`) VALUES
(6, 'Ambit Lake View', 'Plot #17, Block #C, Aftabnagar, Rampura, Dhaka', '5 Katha', 'Corner', 'Dhaka', 'Aftabnagar', '10', '18', '1280', 'bsaojhfpo piodahfpof adpiouafip poafu poupaiuh fdpau pouf dfs-0ifsd-p9 ', 1, 8, 'standby', '2013/11/1', '2016/11/1', '02.jpg', 'yufuyfy ', '01.jpg'),
(7, 'Ambit Green Homes', 'hdslkhnnd', 'skndkn', 'knk', 'knkn', 'Malibag', '8', '8', '5', '<p>jhvjhvjh</p>\r\n', 5, 5, 'gfcdgf', '2016-10-15', '2016-10-27', '06.jpg', '<p>hvhv</p>\r\n', '02.jpg'),
(8, 'Ambit Green Homes', 'hdslkhnnd', 'skndkn', 'knk', 'knkn;', 'kk', '8', '8', '5', '<p>jhvjhvjh</p>\r\n', 5, 5, 'gfcdgf', '2016-10-15', '2016-10-27', '02.jpg', '<p>hvhv</p>\r\n', '03.jpg'),
(9, 'Ambit Green Homes', 'hdslkhnnd', 'skndkn', 'knk', 'Dhaka', 'Aftabnagar', '8', '8', '5', '<p>rftdrtf</p>\r\n', 5, 5, 'gfcdgf', '2016-09-28', '2016-10-29', '04.jpg', '<p>xdtx</p>\r\n', '04.jpg'),
(10, 'Ambit Green Homes', 'hdslkhnnd', 'skndkn', 'knk', 'Dhaka', 'kk', '8', '8', '5', '<p>rftdrtf</p>\r\n', 5, 5, 'gfcdgf', '2016-09-28', '2016-10-29', '05.jpg', '<p>xdtx</p>\r\n', ' x ctyfufr'),
(11, 'Ambit Green Homes', 'hdslkhnnd', 'skndkn', 'knk', 'Dhaka', 'Shantinogor', '8', '8', '5', '<p>rftdrtf</p>\r\n', 5, 5, 'gfcdgf', '2016-09-28', '2016-10-29', '03.jpg', '<p>xdtx</p>\r\n', ' x ctyfufr'),
(12, 'Ambit Green Homes', 'hdslkhnnd', 'skndkn', 'knk', 'Dhaka', 'Aftabnagar', '8', '8', '5', '<p>rftdrtf</p>\r\n', 5, 5, 'gfcdgf', '2016-09-28', '2016-10-29', '02.jpg', '<p>xdtx</p>\r\n', ' x ctyfufr'),
(13, 'Ambit Red Homes', 'Malibag', 'Dhaka', 'Corner', 'Dhaka', 'Mouchak', '10', '25', '2500', '<p>The&nbsp;<em>DISTINCT</em>&nbsp;clause can only be used with&nbsp;<em>SELECT</em>&nbsp;statements</p>\r\n\r\n<p>The&nbsp;<em>DISTINCT</em>&nbsp;clause can only be used with&nbsp;<em>SELECT</em>&nbsp;statements</p>\r\n\r\n<p>The&nbsp;<em>DISTINCT</em>&nbsp;clause can only be used with&nbsp;<em>SELECT</em>&nbsp;statements</p>\r\n\r\n<p>The&nbsp;<em>DISTINCT</em>&nbsp;clause can only be used with&nbsp;<em>SELECT</em>&nbsp;statements</p>\r\n', 2, 16, '1', '2016-10-16', '2016-10-21', '1.jpg', '<p>The&nbsp;<em>DISTINCT</em>&nbsp;clause can only be used with&nbsp;<em>SELECT</em>&nbsp;statements</p>\r\n\r\n<p>The&nbsp;<em>DISTINCT</em>&nbsp;clause can only be used with&nbsp;<em>SELECT</em>&nbsp;statements</p>\r\n\r\n<p>The&nbsp;<em>DISTINCT</em>&nbsp;clause can only be used with&nbsp;<em>SELECT</em>&nbsp;statements</p>\r\n\r\n<p>The&nbsp;<em>DISTINCT</em>&nbsp;clause can only be used with&nbsp;<em>SELECT</em>&nbsp;statements</p>\r\n', 'The DISTINCT clause can only be used with SELECT statements'),
(14, 'Ambit Green Homes', 'Malibag', 'Dhaka', 'Corner', 'Dhaka', 'Mouchak', '10', '25', '2500', '<p>The&nbsp;<em>DISTINCT</em>&nbsp;clause can only be used with&nbsp;<em>SELECT</em>&nbsp;statements</p>\r\n\r\n<p>The&nbsp;<em>DISTINCT</em>&nbsp;clause can only be used with&nbsp;<em>SELECT</em>&nbsp;statements</p>\r\n\r\n<p>The&nbsp;<em>DISTINCT</em>&nbsp;clause can only be used with&nbsp;<em>SELECT</em>&nbsp;statements</p>\r\n\r\n<p>The&nbsp;<em>DISTINCT</em>&nbsp;clause can only be used with&nbsp;<em>SELECT</em>&nbsp;statements</p>\r\n', 2, 16, '1', '2016-10-16', '2016-10-21', '', '<p>The&nbsp;<em>DISTINCT</em>&nbsp;clause can only be used with&nbsp;<em>SELECT</em>&nbsp;statements</p>\r\n\r\n<p>The&nbsp;<em>DISTINCT</em>&nbsp;clause can only be used with&nbsp;<em>SELECT</em>&nbsp;statements</p>\r\n\r\n<p>The&nbsp;<em>DISTINCT</em>&nbsp;clause can only be used with&nbsp;<em>SELECT</em>&nbsp;statements</p>\r\n\r\n<p>The&nbsp;<em>DISTINCT</em>&nbsp;clause can only be used with&nbsp;<em>SELECT</em>&nbsp;statements</p>\r\n', 'The DISTINCT clause can only be used with SELECT statements'),
(15, 'Ambit Green Homes', 'hdslkhnnd', 'skndkn', 'knk', 'Dhaka', 'Mouchak', '8', '8', '5', '<p>&nbsp;This is a trtews</p>\r\n', 5, 5, 'gfcdgf', '2016-11-05', '2016-10-13', 'coderspy.PNG', '<p>&nbsp;This is a trtews</p>\r\n', 'Â This is a trtews');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_projects_slider`
--

CREATE TABLE `tbl_projects_slider` (
  `id` int(11) NOT NULL,
  `project_category` varchar(300) NOT NULL,
  `project_name` text NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_projects_slider`
--

INSERT INTO `tbl_projects_slider` (`id`, `project_category`, `project_name`, `img1`, `img2`, `img3`) VALUES
(1, 'tbl_ongoing_project', 'School Building', '01.jpg', '2.jpg', '02.jpg'),
(2, 'tbl_upcoming_project', 'Multi stored building', '01.jpg', '02.jpg', '03.jpg'),
(3, 'tbl_completed_project', 'Bridge', '02.jpg', '03.jpg', '04.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project_floorplans`
--

CREATE TABLE `tbl_project_floorplans` (
  `id` int(11) NOT NULL,
  `poject_category` varchar(100) NOT NULL,
  `project_name` text NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `img6` text NOT NULL,
  `img7` text NOT NULL,
  `img8` text NOT NULL,
  `img9` text NOT NULL,
  `img10` text NOT NULL,
  `img11` text NOT NULL,
  `img12` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_project_floorplans`
--

INSERT INTO `tbl_project_floorplans` (`id`, `poject_category`, `project_name`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `img10`, `img11`, `img12`) VALUES
(1, 'tbl_ongoing_project', 'School Building', '002.jpg', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'tbl_completed_project', 'Bridge', '', '004.jpg', '', '', '', '', '', '', '', '', '', ''),
(3, 'tbl_upcoming_project', 'Bridge', 'blue.jpg', 'purple.jpg', 'red.jpg', '', '', '', '', '', '', '', '', ''),
(4, 'tbl_upcoming_project', 'Multi stored building', '12.jpg', '11.jpg', '10.jpg', '09.jpg', '08.jpg', '07.jpg', '06.jpg', '05.jpg', '04.jpg', '03.jpg', '02.jpg', '01.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_proparties`
--

CREATE TABLE `tbl_proparties` (
  `title` text,
  `description` text,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_proparties`
--

INSERT INTO `tbl_proparties` (`title`, `description`, `image`) VALUES
('Proparties', '<p><strong>There has been an increase in the number of dairy farmers getting into the Jersey breed, following the removal of milk quota, that&rsquo;s according to Kevin Brady &ndash; chairman of the Jersey Society of Ireland. Eoin McCarthy reports for TheCattleSite.</strong></p>\r\n\r\n<p>&ldquo;We have noticed over the last number of years, particularly in the last three years, there has been an increase in new people getting into the Jersey breed,&rdquo; Mr Brady said.</p>\r\n\r\n<p>Mr Brady spoke to Eoin McCarthy as members of the World Jersey Cattle Bureau Tour visited Moorepark Research Centre in Ireland to review work being conducted by Teagasc involving Jerseys and Jersey crosses.</p>\r\n', '1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_qualitypolicys`
--

CREATE TABLE `tbl_qualitypolicys` (
  `id` int(11) NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `img6` text NOT NULL,
  `img7` text NOT NULL,
  `img8` text NOT NULL,
  `img9` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_qualitypolicys`
--

INSERT INTO `tbl_qualitypolicys` (`id`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`) VALUES
(1, '01.jpg', '02.jpg', '03.jpg', 'rajuk.svg', 'trade.svg', '', 'img_2.jpg', 'img_3.jpg', 'img_4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social_links`
--

CREATE TABLE `tbl_social_links` (
  `id` int(11) NOT NULL,
  `facebook` varchar(300) NOT NULL,
  `twitter` varchar(300) NOT NULL,
  `youtube` varchar(300) NOT NULL,
  `googletalk` varchar(300) NOT NULL,
  `linkedin` varchar(300) NOT NULL,
  `instagram` varchar(300) NOT NULL,
  `website` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_social_links`
--

INSERT INTO `tbl_social_links` (`id`, `facebook`, `twitter`, `youtube`, `googletalk`, `linkedin`, `instagram`, `website`) VALUES
(1, 'ambit', 'ambit', 'ambit', 'ambit', 'ambit', 'ambit', 'ambit');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sonargoan`
--

CREATE TABLE `tbl_sonargoan` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sonargoan`
--

INSERT INTO `tbl_sonargoan` (`id`, `title`, `description`, `image`) VALUES
(1, 'Soanrgoan City Dhaka', '<p><strong>There has been an increase in the number of dairy farmers getting into the Jersey breed, following the removal of milk quota, that&rsquo;s according to Kevin Brady &ndash; chairman of the Jersey Society of Ireland. Eoin McCarthy reports for TheCattleSite.</strong></p>\r\n\r\n<p>&ldquo;We have noticed over the last number of years, particularly in the last three years, there has been an increase in new people getting into the Jersey breed,&rdquo; Mr Brady said.</p>\r\n\r\n<p>Mr Brady spoke to Eoin McCarthy as members of the World Jersey Cattle Bureau Tour visited Moorepark Research Centre in Ireland to review work being conducted by Teagasc involving Jerseys and Jersey crosses.</p>\r\n', '3.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team`
--

CREATE TABLE `tbl_team` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `designation` varchar(300) NOT NULL,
  `details` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_team`
--

INSERT INTO `tbl_team` (`id`, `name`, `designation`, `details`, `image`) VALUES
(8, 'Akbar Ali', 'Managing Director', '', 'b.jpg'),
(9, 'Dr. Harun or Rashid', 'Deputy Managing Director', '', 'profile.jpg'),
(10, 'Md Monir Ahmed', 'Director of Land', '', 'x.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonials`
--

CREATE TABLE `tbl_testimonials` (
  `id` int(3) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `description` text NOT NULL,
  `web` varchar(300) NOT NULL,
  `facebook` varchar(300) NOT NULL,
  `twitter` varchar(300) NOT NULL,
  `skype` varchar(100) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_testimonials`
--

INSERT INTO `tbl_testimonials` (`id`, `name`, `address`, `description`, `web`, `facebook`, `twitter`, `skype`, `image`) VALUES
(18, 'ret', 'ret', '<p>ret</p>\r\n', 'ert', 'ert', 'ert', 'ert', ''),
(19, 'The new error_reporting leve', 'The new error_reporting leve', '<p>The new error_reporting level. It takes on either a bitmask, or named constants. Using named constants is strongly encouraged to ensure compatibility for future versions. As error levels are added, the range of integers increases, so older integer-based error levels will not always behave as expected.</p>\r\n', 'The new error_reporting leve', 'The new error_reporting leve', 'The new error_reporting leve', 'The new error_reporting leve', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_upcoming_project`
--

CREATE TABLE `tbl_upcoming_project` (
  `id` int(20) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `land_area` varchar(300) NOT NULL,
  `land_position` varchar(300) NOT NULL,
  `city` varchar(50) NOT NULL,
  `project_location` varchar(100) NOT NULL,
  `label` varchar(100) NOT NULL,
  `no_of_apertment` varchar(100) NOT NULL,
  `apertment_size` text NOT NULL,
  `description` text NOT NULL,
  `no_of_lift` int(3) NOT NULL,
  `lift_capacity` int(3) NOT NULL,
  `generator` varchar(300) NOT NULL,
  `started_date` text NOT NULL,
  `ended_date` text NOT NULL,
  `image` text NOT NULL,
  `construction_status` text NOT NULL,
  `viedo_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_upcoming_project`
--

INSERT INTO `tbl_upcoming_project` (`id`, `project_name`, `address`, `land_area`, `land_position`, `city`, `project_location`, `label`, `no_of_apertment`, `apertment_size`, `description`, `no_of_lift`, `lift_capacity`, `generator`, `started_date`, `ended_date`, `image`, `construction_status`, `viedo_link`) VALUES
(6, 'Ambit Lake View', 'Plot #17, Block #C, Aftabnagar, Rampura, Dhaka', '5 Katha', 'Corner', 'Dhaka', 'Aftabnagar', '10', '18', '1280', 'bsaojhfpo piodahfpof adpiouafip poafu poupaiuh fdpau pouf dfs-0ifsd-p9 ', 1, 8, 'standby', '2013/11/1', '2016/11/1', '02.jpg', 'yufuyfy ', '01.jpg'),
(7, 'Ambit Green Homes', 'hdslkhnnd', 'skndkn', 'knk', 'knkn', 'Malibag', '8', '8', '5', '<p>jhvjhvjh</p>\r\n', 5, 5, 'gfcdgf', '2016-10-15', '2016-10-27', '06.jpg', '<p>hvhv</p>\r\n', '02.jpg'),
(8, 'Ambit Green Homes', 'hdslkhnnd', 'skndkn', 'knk', 'knkn;', 'kk', '8', '8', '5', '<p>jhvjhvjh</p>\r\n', 5, 5, 'gfcdgf', '2016-10-15', '2016-10-27', '02.jpg', '<p>hvhv</p>\r\n', '03.jpg'),
(9, 'Ambit Green Homes', 'hdslkhnnd', 'skndkn', 'knk', 'Dhaka', 'Aftabnagar', '8', '8', '5', '<p>rftdrtf</p>\r\n', 5, 5, 'gfcdgf', '2016-09-28', '2016-10-29', '04.jpg', '<p>xdtx</p>\r\n', '04.jpg'),
(10, 'Ambit Green Homes', 'hdslkhnnd', 'skndkn', 'knk', 'Dhaka', 'kk', '8', '8', '5', '<p>rftdrtf</p>\r\n', 5, 5, 'gfcdgf', '2016-09-28', '2016-10-29', '05.jpg', '<p>xdtx</p>\r\n', ' x ctyfufr'),
(11, 'Ambit Green Homes', 'hdslkhnnd', 'skndkn', 'knk', 'Dhaka', 'Shantinogor', '8', '8', '5', '<p>rftdrtf</p>\r\n', 5, 5, 'gfcdgf', '2016-09-28', '2016-10-29', '03.jpg', '<p>xdtx</p>\r\n', ' x ctyfufr'),
(12, 'Ambit Green Homes', 'hdslkhnnd', 'skndkn', 'knk', 'Dhaka', 'Aftabnagar', '8', '8', '5', '<p>rftdrtf</p>\r\n', 5, 5, 'gfcdgf', '2016-09-28', '2016-10-29', '02.jpg', '<p>xdtx</p>\r\n', ' x ctyfufr');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_welfare`
--

CREATE TABLE `tbl_welfare` (
  `title` text,
  `description` text,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_welfare`
--

INSERT INTO `tbl_welfare` (`title`, `description`, `image`) VALUES
('Welfare Foundation', '<p><strong>There has been an increase in the number of dairy farmers getting into the Jersey breed, following the removal of milk quota, that&rsquo;s according to Kevin Brady &ndash; chairman of the Jersey Society of Ireland. Eoin McCarthy reports for TheCattleSite.</strong></p>\r\n\r\n<p>&ldquo;We have noticed over the last number of years, particularly in the last three years, there has been an increase in new people getting into the Jersey breed,&rdquo; Mr Brady said.</p>\r\n\r\n<p>Mr Brady spoke to Eoin McCarthy as members of the World Jersey Cattle Bureau Tour visited Moorepark Research Centre in Ireland to review work being conducted by Teagasc involving Jerseys and Jersey crosses.</p>\r\n', 'project-3.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_builders`
--
ALTER TABLE `tbl_builders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_clients`
--
ALTER TABLE `tbl_clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `tbl_completed_project`
--
ALTER TABLE `tbl_completed_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact_us`
--
ALTER TABLE `tbl_contact_us`
  ADD PRIMARY KEY (`head_office`);

--
-- Indexes for table `tbl_homesliders`
--
ALTER TABLE `tbl_homesliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_landowners`
--
ALTER TABLE `tbl_landowners`
  ADD PRIMARY KEY (`landowner_id`);

--
-- Indexes for table `tbl_mail`
--
ALTER TABLE `tbl_mail`
  ADD PRIMARY KEY (`mail_id`);

--
-- Indexes for table `tbl_ongoing_project`
--
ALTER TABLE `tbl_ongoing_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_projects_slider`
--
ALTER TABLE `tbl_projects_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_project_floorplans`
--
ALTER TABLE `tbl_project_floorplans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_qualitypolicys`
--
ALTER TABLE `tbl_qualitypolicys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_social_links`
--
ALTER TABLE `tbl_social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sonargoan`
--
ALTER TABLE `tbl_sonargoan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_team`
--
ALTER TABLE `tbl_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_testimonials`
--
ALTER TABLE `tbl_testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_upcoming_project`
--
ALTER TABLE `tbl_upcoming_project`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_builders`
--
ALTER TABLE `tbl_builders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_clients`
--
ALTER TABLE `tbl_clients`
  MODIFY `client_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_completed_project`
--
ALTER TABLE `tbl_completed_project`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_homesliders`
--
ALTER TABLE `tbl_homesliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_landowners`
--
ALTER TABLE `tbl_landowners`
  MODIFY `landowner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_mail`
--
ALTER TABLE `tbl_mail`
  MODIFY `mail_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_ongoing_project`
--
ALTER TABLE `tbl_ongoing_project`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_projects_slider`
--
ALTER TABLE `tbl_projects_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_project_floorplans`
--
ALTER TABLE `tbl_project_floorplans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_qualitypolicys`
--
ALTER TABLE `tbl_qualitypolicys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_social_links`
--
ALTER TABLE `tbl_social_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_sonargoan`
--
ALTER TABLE `tbl_sonargoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_team`
--
ALTER TABLE `tbl_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_testimonials`
--
ALTER TABLE `tbl_testimonials`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tbl_upcoming_project`
--
ALTER TABLE `tbl_upcoming_project`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
