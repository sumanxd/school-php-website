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
-- Database: `dbtuts`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uploads`
--

CREATE TABLE `tbl_uploads` (
  `id` int(10) NOT NULL,
  `class` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `topic` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `marks` varchar(200) NOT NULL,
  `file` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` int(11) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_uploads`
--

INSERT INTO `tbl_uploads` (`id`, `class`, `subject`, `topic`, `date`, `marks`, `file`, `type`, `size`, `message`) VALUES
(7, '1', 'Math', 'abc', '2018-04-21', '100', '49075-2000px-html5_logo_and_wordmark.svg.png', 'image/png', 69, 'rge'),
(6, '2', 'Physics', 'def', '2018-04-22', '100', '47077-js.pptx', 'application/vnd.openxmlformats', 111, 'rgseg'),
(4, '3', 'Chemistry', 'ghi', '2018-04-30', '100', '65444-html.pptx', 'application/vnd.openxmlformats', 78, 'trgh'),
(5, '4', 'Biology', 'jkl', '2011-02-03', '100', '78295-css.odp', 'application/vnd.oasis.opendocu', 24, 'abcd'),
(8, '5', 'History', 'mno', '2018-04-25', '100', '65846-desert.jpg', 'image/jpeg', 826, 'thr'),
(9, '6', 'Geography', 'pqr', '2018-04-23', '100', '28032-aboutus.odt', 'application/vnd.oasis.opendocu', 22, 'yjtjtj'),
(10, '7', 'English', 'stu', '2018-04-12', '100', '66090-bootstrap.pptx', 'application/vnd.openxmlformats', 96, 'thrdh'),
(11, '8', 'Bengali', 'vwx', '2018-04-21', '100', '84231-view.pptx', 'application/vnd.openxmlformats', 64, 'complete'),
(15, '11', 'trhr', 'reg', '2018-04-12', '12', '86400-bitnami.css', 'text/css', 0, 'd4ew');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
