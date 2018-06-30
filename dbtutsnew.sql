-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2018 at 01:41 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtutsnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uploadsnew`
--

CREATE TABLE `tbl_uploadsnew` (
  `id` int(11) NOT NULL,
  `class` int(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `topic` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `file` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `size` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_uploadsnew`
--

INSERT INTO `tbl_uploadsnew` (`id`, `class`, `subject`, `topic`, `date`, `file`, `type`, `size`) VALUES
(1, 1, 'rferf', 'bhd', '0000-00-00', '34555-bootstrap.pptx', 'application/vnd.openxmlformats-officedocument.presentationml.presentation', 96),
(2, 2, '5tw54t', '5rtw', '0000-00-00', '3727-aboutus.odt', 'application/vnd.oasis.opendocument.text', 22),
(3, 1, 'a', 'b', '0000-00-00', '55712-view.odt', 'application/vnd.oasis.opendocument.text', 22),
(4, 12, 'gser', 'rgse', '0000-00-00', '11957-newconsultancy.txt', 'text/plain', 20),
(5, 3, 'hrtdh', 'rthdr', '0000-00-00', '58335-aboutus.odt', 'application/vnd.oasis.opendocument.text', 22),
(6, 4, 'ggtt', 'tgbh', '0000-00-00', '34960-js.pptx', 'application/vnd.openxmlformats-officedocument.presentationml.presentation', 111),
(10, 5, 'ru7', '67yu', '2018-04-14', '95378-angular-(1).pptx', 'application/vnd.openxmlformats-officedocument.presentationml.presentation', 107),
(11, 11, 'tr', 'tr', '2018-04-30', '82812-css.pptx', 'application/vnd.openxmlformats-officedocument.presentationml.presentation', 84),
(12, 4, 'tgr', 'trg', '2018-04-06', '90436-portalnew.txt', 'text/plain', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_uploadsnew`
--
ALTER TABLE `tbl_uploadsnew`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_uploadsnew`
--
ALTER TABLE `tbl_uploadsnew`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
