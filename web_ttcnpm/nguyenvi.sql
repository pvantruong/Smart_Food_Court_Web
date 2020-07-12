-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2020 at 11:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nguyenvi`
--

-- --------------------------------------------------------

--
-- Table structure for table `cooks`
--

CREATE TABLE `cooks` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `vendor` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `psw` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cooks`
--

INSERT INTO `cooks` (`id`, `username`, `name`, `vendor`, `psw`) VALUES
(1, 'cook1', 'Nguyen Van A', 'Quay 1', '123456'),
(2, 'cook2', 'Nguyen Thi B', 'Quay 2', '123456'),
(5, 'cook3', 'Thay giao Ba', 'Quay 1', '123456'),
(8, 'cook4', 'Phan Van Truong', 'Quay 3', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `dishqueue`
--

CREATE TABLE `dishqueue` (
  `id` int(11) NOT NULL,
  `dishname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cusID` int(11) NOT NULL,
  `vendor` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `priority` time DEFAULT NULL,
  `process` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dishqueue`
--

INSERT INTO `dishqueue` (`id`, `dishname`, `cusID`, `vendor`, `priority`, `process`) VALUES
(1, 'Chicken Ran', 14, 'Quay 1', '11:28:10', 1),
(2, 'Cafe', 14, 'Quay 3', '11:28:10', NULL),
(3, 'Orange', 14, 'Quay 3', '11:28:10', NULL),
(6, 'Apple', 14, 'Quay 2', '11:28:10', NULL),
(8, 'Ga quay', 14, 'Quay 2', '11:28:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `dishname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `vendor` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  `Avb` int(11) DEFAULT NULL,
  `img` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `dishname`, `vendor`, `price`, `Avb`, `img`) VALUES
(1, 'Chicken Ran', 'Quay 1', 20000, 0, '/bk-git/web_cnpm/web_ttcnpm/images/ga-ran.png'),
(2, 'Cafe', 'Quay 3', 10000, 0, '/bk-git/web_cnpm/web_ttcnpm/images/ca-phe.png'),
(3, 'Orange', 'Quay 3', 12000, 1, '/bk-git/web_cnpm/web_ttcnpm/images/nuoc-cam.png'),
(4, 'Chicken noodle', 'Quay 1', 20000, 1, '/bk-git/web_cnpm/web_ttcnpm/images/mieng-ga.png'),
(5, 'Salad', 'Quay 2', 35000, 1, '/bk-git/web_cnpm/web_ttcnpm/images/mieng-ga.png'),
(6, 'Apple', 'Quay 2', 15000, 0, '/bk-git/web_cnpm/web_ttcnpm/images/nuoc-cam.png'),
(7, 'Com suon', 'Quay 1', 22000, 1, '/bk-git/web_cnpm/web_ttcnpm/images/com-suon.png'),
(8, 'Ga quay', 'Quay 2', 30000, 1, '/bk-git/web_cnpm/web_ttcnpm/images/ga-ran.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `psw` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `psw`, `email`) VALUES
(13, 'nguyenvi', '123456', 'nguyenvipy@gmail.com'),
(14, 'nguyenvi1', '123456', 'nguyenvipy@gmail.com1'),
(15, 'nguyenvi2', '123456', 'nguyenvipy2@gmail.com1'),
(16, 'nguyenvi6', '123456', 'nguyenvipy2@gmail.com123'),
(17, 'nguyenvi8', '123456', '1234567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cooks`
--
ALTER TABLE `cooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dishqueue`
--
ALTER TABLE `dishqueue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cooks`
--
ALTER TABLE `cooks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `dishqueue`
--
ALTER TABLE `dishqueue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
