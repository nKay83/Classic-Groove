-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2023 at 08:28 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `classic-groove`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `albumID` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `imageLink` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`albumID`, `description`, `price`, `name`, `imageLink`) VALUES
(1, 'MV “Hãy trao cho anh” của Sơn Tùng M-TP đã phá vỡ mọi kỷ lục trên bảng xếp hạng Youtube tại Việt Nam cũng như châu lục và toàn thế giới. “Hãy trao cho anh” đã tự thiết lập nên những kỷ lục lịch sử của làng nhạc Việt: đạt 1 triệu views chỉ trong 8 phút, 2 triệu views trong 14 phút, 5 triệu views trong 1 giờ, 10 triệu views trong 3 giờ và tính đến thời điểm hiện tại, MV “Hãy trao cho anh” đã cán mốc 12 triệu lượt xem trong vòng chưa đến 18 giờ. MV được xem nhiều nhất thế giới trong ngày 1/7, đồng thời đứng thứ 14 trên top trending YouTube toàn cầu. Tính riêng ở khu vực châu lục, Sơn Tùng nghiễm nhiên sở hữu MV được xem nhiều nhất Châu Á trong ngày 1/7.', 125, 'Hãy trao cho anh', '1_HayTraoChoAnh.jpg'),
(2, 'Bao Bui Bao Bui Bao Bui Bao Bui Bao Bui Bao Bui Bao Bui Bao BuiBao Bui Bao Bui Bao Bui Bao BuiBao Bui Bao Bui Bao Bui Bao BuiBao Bui Bao Bui Bao Bui Bao BuiBao Bui Bao Bui Bao Bui Bao BuiBao Bui Bao Bui Bao Bui Bao BuiBao Bui Bao Bui Bao Bui Bao BuiBao Bui Bao Bui Bao Bui Bao Bui', 250, 'Lavied', '2_Lavied.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `songID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `songLink` varchar(100) NOT NULL,
  `albumID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`songID`, `name`, `songLink`, `albumID`) VALUES
(1, 'Anh đã quen với cô đơn', '1_AnhDaQuenVoiCoDon.mp3', 2),
(2, 'Bình Yên Những Phút Giây', '2_BinhYenNhungPhutGiay.mp3', 1),
(3, 'Chắc ai đó sẽ về', '3_ChacAiDoSeVe.mp3', 1),
(4, 'Chúng ta không thuộc về nhau', '4_ChungTaKhongThuocVeNhau.mp3', 1),
(5, 'Hãy trao cho anh', '5_HayTraoChoAnh.mp3', 1),
(6, 'Cưới thôi', '6_CuoiThoi.mp3', 2),
(7, 'Tình yêu chậm trễ', '7_TinhYeuChamTre.mp3', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`albumID`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`songID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `albumID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `songID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
