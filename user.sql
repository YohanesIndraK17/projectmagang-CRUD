-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2024 at 08:40 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indra`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `first_name`, `last_name`, `gender`) VALUES
(1, 'rogers400', 'davis', 'john', 'Male'),
(2, 'mike28', 'rogers', 'paul', 'Male'),
(3, 'rivera92', 'david', 'john', 'Male'),
(4, 'ross95', 'maria', 'sanders', 'Male'),
(5, 'paul85', 'morris', 'miller', 'Female'),
(6, 'smith34', 'daniel', 'michael', 'Female'),
(7, 'james84', 'sanders', 'paul', 'Female'),
(8, 'daniel53', 'mark', 'mike', 'Male'),
(9, 'brooks80', 'morgan', 'maria', 'Female'),
(10, 'morgan65', 'paul', 'miller', 'Female'),
(11, 'sanders84', 'david', 'miller', 'Female'),
(12, 'maria40', 'chrishaydon', 'bell', 'Female'),
(13, 'brown71', 'michael', 'brown', 'Male'),
(14, 'Indra', 'Yohanes', 'Indra', 'female'),
(15, 'jenny0993', 'rogers', 'chrishaydon', 'Female'),
(16, 'john96', 'morgan', 'wright', 'Male'),
(17, 'miller64', 'morgan', 'wright', 'Male'),
(18, 'mark46', 'david', 'ross', 'Female'),
(19, 'jenny0988', 'maria', 'morgan', 'Female'),
(20, 'mark80', 'mike', 'bell', 'Male'),
(21, 'morris72', 'miller', 'michael', 'Male'),
(22, 'wright39', 'ross', 'rogers', 'Female'),
(23, 'paul68', 'brooks', 'mike', 'Male'),
(24, 'smith60', 'miller', 'daniel', 'Male'),
(25, 'bell43', 'mike', 'wright', 'Male'),
(26, 'rogers79', 'wright', 'smith', 'Female'),
(27, 'daniel56', 'david', 'morgan', 'Male'),
(28, 'brooks85', 'smith', 'bell', 'Female'),
(29, 'mike30', 'paul', 'wright', 'Female'),
(30, 'paul92', 'michael', 'james', 'Female'),
(31, 'bell96', 'michael', 'sanders', 'Female'),
(32, 'john8', 'john', 'rivera', 'Female'),
(33, 'chrishaydon12', 'paul', 'michael', 'Male'),
(34, 'morgan13', 'ross', 'mark', 'Female'),
(35, 'james83', 'brooks', 'smith', 'Female'),
(36, 'chrishaydon8', 'cooper', 'brown', 'Female'),
(37, 'ross85', 'ross', 'daniel', 'Male'),
(38, 'ross46', 'cooper', 'miller', 'Male'),
(39, 'smith4', 'jenny09', 'maria', 'Female'),
(40, 'paul4', 'paul', 'rivera', 'Female'),
(41, 'daniel26', 'maria', 'sanders', 'Male'),
(42, 'chrishaydon2', 'bell', 'david', 'Female'),
(43, 'david82', 'rivera', 'cooper', 'Male'),
(44, 'john97', 'mark', 'david', 'Female'),
(45, 'david57', 'paul', 'cooper', 'Male'),
(46, 'rivera100', 'brooks', 'david', 'Male'),
(47, 'bell13', 'james', 'maria', 'Male'),
(48, 'brooks65', 'john', 'mark', 'Female'),
(49, 'daniel40', 'rivera', 'jenny09', 'Female'),
(50, 'cooper100', 'chrishaydon', 'sanders', 'Female'),
(51, 'morris14', 'bell', 'david', 'Female'),
(52, 'smith82', 'morris', 'brooks', 'Female'),
(53, 'cooper35', 'cooper', 'mark', 'Male'),
(54, 'morgan94', 'james', 'brooks', 'Male'),
(55, 'michael92', 'brooks', 'morris', 'Male'),
(56, 'sanders48', 'morgan', 'sanders', 'Female'),
(57, 'brown76', 'rivera', 'cooper', 'Female'),
(58, 'james16', 'bell', 'john', 'Female'),
(59, 'michael26', 'wright', 'brown', 'Male'),
(60, 'wright57', 'wright', 'sanders', 'Male'),
(61, 'wright68', 'smith', 'michael', 'Female'),
(62, 'brooks1', 'bell', 'rivera', 'Male'),
(63, 'bell2', 'rivera', 'david', 'Female'),
(64, 'miller100', 'brooks', 'wright', 'Male'),
(65, 'rogers53', 'chrishaydon', 'brown', 'Male'),
(66, 'mike1', 'michael', 'sanders', 'Male'),
(67, 'cooper57', 'daniel', 'mark', 'Female'),
(68, 'daniel38', 'bell', 'michael', 'Male'),
(69, 'mark2', 'brown', 'bell', 'Female'),
(70, 'daniel79', 'rogers', 'john', 'Male'),
(71, 'wright4', 'paul', 'smith', 'Female'),
(72, 'brown84', 'john', 'ross', 'Male'),
(73, 'paul41', 'wright', 'brooks', 'Male'),
(74, 'mark5', 'brooks', 'brown', 'Male'),
(75, 'jenny0994', 'brown', 'morgan', 'Male'),
(76, 'morris53', 'chrishaydon', 'brown', 'Male'),
(77, 'paul68', 'mark', 'smith', 'Female'),
(78, 'brooks86', 'brooks', 'ross', 'Male'),
(79, 'james54', 'jenny09', 'morris', 'Male'),
(80, 'rogers58', 'morgan', 'maria', 'Female'),
(81, 'maria31', 'rogers', 'brooks', 'Male'),
(82, 'david5', 'rivera', 'brown', 'Male'),
(83, 'mark21', 'wright', 'maria', 'Female'),
(84, 'jenny0932', 'mike', 'brooks', 'Female'),
(85, 'john92', 'sanders', 'mike', 'Male'),
(86, 'rogers98', 'james', 'jenny09', 'Male'),
(87, 'rogers95', 'jenny09', 'bell', 'Female'),
(88, 'james50', 'chrishaydon', 'mark', 'Male'),
(89, 'miller80', 'sanders', 'chrishaydon', 'Male'),
(90, 'mark29', 'bell', 'paul', 'Female'),
(91, 'cooper77', 'michael', 'maria', 'Male'),
(92, 'john24', 'brown', 'paul', 'Male'),
(93, 'chrishaydon32', 'john', 'ross', 'Female'),
(94, 'bell41', 'morris', 'chrishaydon', 'Female'),
(95, 'ross99', 'wright', 'brown', 'Male'),
(96, 'smith9', 'miller', 'morris', 'Male'),
(97, 'michael45', 'Omen', 'Sara', 'Male'),
(98, 'zilon12', 'arteri', 'vena', 'Male'),
(99, 'lilia14', 'ajaw', 'wert', 'Female'),
(100, 'alucard88', 'demo', 'awer', 'Female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10007;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
