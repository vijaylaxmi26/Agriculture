-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 19, 2021 at 03:51 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agriuser`
--

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `farid` int(11) NOT NULL,
  `farfirname` varchar(255) NOT NULL,
  `farlasname` varchar(255) NOT NULL,
  `faremail` varchar(255) NOT NULL,
  `farphone` int(15) NOT NULL,
  `farland` int(12) NOT NULL,
  `farpass` varchar(255) NOT NULL,
  `farimguser` varchar(255) NOT NULL,
  `farimgland` varchar(255) NOT NULL,
  `faraddr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`farid`, `farfirname`, `farlasname`, `faremail`, `farphone`, `farland`, `farpass`, `farimguser`, `farimgland`, `faraddr`) VALUES
(1, 'harsh', 'choudhary', 'harsh123@gmail.com', 123654789, 5, 'harsh@123', 'f1.jpg', 'c1.jpeg', 'sector-40, Baroda Gujarat Indea'),
(2, 'vijaya', 'verma', 'vijaylaxmi262001@gmail.com', 469853187, 5, 'vijaya@123', 'f1.jpg', 'c.jpeg', 'word no 12, near abc building,kota,rajsthan');

-- --------------------------------------------------------

--
-- Table structure for table `invester`
--

CREATE TABLE `invester` (
  `inv_id` int(11) NOT NULL,
  `inv_name` varchar(255) NOT NULL,
  `inv_email` varchar(255) NOT NULL,
  `inv_phone` int(13) NOT NULL,
  `inv_address` text NOT NULL,
  `inv_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invester`
--

INSERT INTO `invester` (`inv_id`, `inv_name`, `inv_email`, `inv_phone`, `inv_address`, `inv_pass`) VALUES
(1, 'harsh maheta', 'harsh123@gmail.com', 1587924623, 'sector no 01,Baroda Gujrat, india', 'harsh@123'),
(2, 'vijaylaxmi', 'vijaylaxmiverma2001@gmail.com', 1549425486, 'abc hospital,surat,gujrat', 'vijaylaxmi@123');

-- --------------------------------------------------------

--
-- Table structure for table `smart-contract`
--

CREATE TABLE `smart-contract` (
  `contract_id` int(11) NOT NULL,
  `far_id` int(11) NOT NULL,
  `invt_id` int(11) NOT NULL,
  `farmcrop` text NOT NULL,
  `period` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `investment` int(11) NOT NULL,
  `pre_hash` text NOT NULL,
  `hash` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `verified` int(2) DEFAULT 0,
  `vkey` text DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `smart-contract`
--

INSERT INTO `smart-contract` (`contract_id`, `far_id`, `invt_id`, `farmcrop`, `period`, `amount`, `investment`, `pre_hash`, `hash`, `date`, `verified`, `vkey`) VALUES
(1, 1, 1, 'wheat', '1', '1tan ', 100000, '0', 'cfeb90ce84cfc2c02cde8d9ec4ca3431', '2021-04-18', 0, '0'),
(2, 1, 1, 'tomato', '2', '500kg', 100000, 'cfeb90ce84cfc2c02cde8d9ec4ca3431', '16d370aced976dcd539c91890dde67a0', '2021-04-18', 0, '0'),
(3, 1, 1, 'tomato', '2', '500kg', 100000, '16d370aced976dcd539c91890dde67a0', '3d7510a1ef725833d8840b9a06df109e', '2021-04-18', 0, '0'),
(4, 2, 2, 'wheat', '3', '1tan', 200000, '3d7510a1ef725833d8840b9a06df109e', '9aa31556f65a748bf977ffa1d3992c29', '2021-04-19', 0, 'be770a75a1b9918f0f55707052292bf8'),
(5, 2, 2, 'wheat', '3', '1tan ', 200000, '9aa31556f65a748bf977ffa1d3992c29', '0fcd73a0d70df389f703c287e7cc15f8', '2021-04-19', 0, '9f72a51216386e083f9aeb66793f01e3'),
(6, 2, 2, 'wheat', '2', '1tan ', 200000, '0fcd73a0d70df389f703c287e7cc15f8', 'a3dce0c2e1de5947bff516ec08263dd9', '2021-04-19', 0, 'b6aab6c31c27d7c5cf25beb301fc29ba'),
(7, 2, 2, 'wheat', '2', '1tan ', 200000, 'a3dce0c2e1de5947bff516ec08263dd9', '302d8f9f6117c5e8d75fa4d01b420039', '2021-04-19', 0, '9490a678b4c101b83f7b8b52f34e9d10'),
(8, 2, 2, 'wheat', '2', '1tan ', 200000, '302d8f9f6117c5e8d75fa4d01b420039', 'bdcc664890ca3e36dbee4dae141d0c90', '2021-04-19', 0, '1c9e727a3725a89563f84bc75fdcf04f'),
(9, 2, 2, 'wheat', '1', '1tan ', 200000, 'bdcc664890ca3e36dbee4dae141d0c90', '34e40cd659f65c2acefb407845fecd1c', '2021-04-19', 0, 'ddf5c067a976a87c31d5fef784a03c07'),
(10, 2, 2, 'wheat', '1', '1tan ', 200000, '34e40cd659f65c2acefb407845fecd1c', '63d2f4cdf097c3e86fd742455310d009', '2021-04-19', 0, '86c2d3a067f9e2f98999ec0f9214ec5b'),
(11, 2, 2, 'wheat', '1', '1tan ', 50000, '63d2f4cdf097c3e86fd742455310d009', 'a34f5f3bdfab950b16b1573f3f600c58', '2021-04-19', 0, 'd21fd52449bb766fb6592bd5bc4a1ae1'),
(12, 2, 2, 'wheat', '1', '1tan ', 50000, 'a34f5f3bdfab950b16b1573f3f600c58', '12f8dda1e88ea7151634434b6a279c37', '2021-04-19', 0, '4315825946603771e1b763c8b5b06031'),
(13, 2, 2, 'wheat', '1', '1tan ', 50000, '12f8dda1e88ea7151634434b6a279c37', 'cfd3b25f06e36b16c761874dfcb19ac4', '2021-04-19', 0, '2713ea4079590f516fa1cb952bad3e8f'),
(14, 2, 2, 'wheat', '3', '1tan ', 200000, 'cfd3b25f06e36b16c761874dfcb19ac4', '9af5502353357c72ad7e76b647beaecf', '2021-04-19', 0, 'ebeb317b268f3a19b82a74897f7b30e1'),
(15, 2, 2, 'wheat', '3', '1tan ', 200000, '9af5502353357c72ad7e76b647beaecf', 'e79d535e01cfad8d3fbd6c5c99262c10', '2021-04-19', 0, 'c0fd9e588065e6d22248afa5343e347c'),
(16, 2, 2, 'wheat', '3', '1tan ', 200000, 'e79d535e01cfad8d3fbd6c5c99262c10', '438dce5a0944fc69affa3b26d1739e8d', '2021-04-19', 0, '4910100b67b50e44da3a50aeee3d55a0'),
(17, 2, 2, 'wheat', '1', '1tan ', 20000, '438dce5a0944fc69affa3b26d1739e8d', 'ece36d6da179c7a320e3393c7b6d9ef1', '2021-04-19', 1, '6b483684ec3920f246a9c1e57e0ec513'),
(18, 2, 2, 'wheat,tomato', '2', '1tan,500kg', 150000, 'ece36d6da179c7a320e3393c7b6d9ef1', '679b6d390d15d955ea1220627cce7213', '2021-04-19', 0, '816ef76cb102dd31df414c5454a0a4b7'),
(19, 2, 2, 'wheat', '1', '1tan ', 150000, '679b6d390d15d955ea1220627cce7213', 'd16aa7880a7880d558465d6c61d299d2', '2021-04-19', 0, '261b012d4b85ca807a0412d24f604209'),
(20, 2, 2, 'wheat', '3', '1tan ', 150000, 'd16aa7880a7880d558465d6c61d299d2', 'a082cb3d7f049bd8f4927ded3f137571', '2021-04-19', 0, 'cc2c5b504b183c705c53d72115aa9e8b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`farid`);

--
-- Indexes for table `invester`
--
ALTER TABLE `invester`
  ADD PRIMARY KEY (`inv_id`);

--
-- Indexes for table `smart-contract`
--
ALTER TABLE `smart-contract`
  ADD PRIMARY KEY (`contract_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `farid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `invester`
--
ALTER TABLE `invester`
  MODIFY `inv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `smart-contract`
--
ALTER TABLE `smart-contract`
  MODIFY `contract_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
