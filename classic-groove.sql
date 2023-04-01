gi-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2023 at 08:45 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

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
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `maAlbum` int(11) NOT NULL,
  `tenAlbum` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `gia` int(11) DEFAULT NULL,
  `moTa` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `hinh` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `tacGia` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `TrangThai` int(11) DEFAULT NULL,
  `soLuong` int(11) DEFAULT NULL,
  `theLoai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`maAlbum`, `tenAlbum`, `gia`, `moTa`, `hinh`, `tacGia`, `TrangThai`, `soLuong`, `theLoai`) VALUES
(1, 'Evo Sessions', 100, 'Evosound proudly presents Chlara\'s evo sessions with 11 tracks on the LP of her favorite classic songs, mainly with acoustic accompaniment. These famous classic songs can resonate throughout different generations from early 20\'s to 21st century like \"Love Me Tender\" or \"Stay With Me\". Chlara is a British-born singer / songwriter recognised as an acoustic songbird, learned to sing and play guitar when she was a young teenager. \"evo sessions\" is her third album release in 4 years. Chlara is not only young and pretty, she possess a lovely sweet voice, and when you hear her sing with a high dynamic range, you can totally feel the passion and energy she puts into her songs. Included in this album is a song she wrote herself called \"Bliss\". The audio of evo sessions was recorded during a live video shoot. The idea of evo sessions started since 2017 summer, the live music video was shot in studio and because of the fabulous sound quality, evosound decided to release as a full album.', 'EvoSessions-Chlara', 'Chlara', 1, 4, 2),
(2, '#acousticNOW', 200, ' AcousticNow# is the eagerly awaitied fourth album by the 26-year-old Filipino singing sensation Chlara, who will captivate her listeners with a series of acoustic cover versions that include her singles \'The Nights,\' \'Say You Won\'t Let Go,\' and \'ILYSB,\' which have all received over 20 million plays on Spotify. Chlara takes a varied selection of songs - from hits by Ed Sheeran and Aviici to Justin Bieber and Tears For Fears - and reimagines them in her own unique way. Noted for her alluring honey-toned voice and deft acoustic guitar accompaniment, Chlara, who has been described as an \"acoustic songbird\" is flying high at the moment. With three albums and several EPs already under her belt for the Evosound label, she\'s about to unleash her fourth, acousticNow#. The England-born, Philippines-raised singer/song-writer\'s popularity can be measured by that fact that three songs of her songs have generated over 20 million plays each on Spotify.', 'AcousticNow-Chlara', 'Chlara', 1, 3, 2),
(3, 'It Serves You Right To Suffer', 200, '180-gram 45 RPM double LP Mastered at AcousTech Mastering Plated and pressed at Quality Record PressingsIt\'s back in stock! Newly repressed at 45 RPM by Quality Record Pressings. This recording was originally mastered at the former AcousTech Mastering facility and the sound is fantastic.John Lee Hooker himself did not know his exact date of birth. If he hadn\'t died at around the age of 80, this ageless musician would still be easily pulling the next generation to his gigs. Hooker remains a phenomenon, a mysterious figure of black rhythm and blues, a charismatic king who reigns supreme in rock \'n\' roll\'s Hall of Fame. John W. Peters described his music as a synthesis of scorching emotional ardour, unrelenting rhythmic intensity, and original poetry of a highly personal character. Anyone hearing him for the first time may well be startled at the unfiltered passion and power of his music.', 'ItServeYouRightToSuffer-JohnLeeHooker', 'John Lee Hooker', 1, 6, 1),
(4, 'Love For Sale', 100, 'Celebrating 10 years since they first recorded together, Tony Bennett & Lady Gaga return for another collaboration featuring the best of the Cole Porter Songbook. It captures the creative and personal relationship of these two world-famous artists. Tony, who turned 95 in 2021, has spent over 7 decades dedicated to performing the Great American Songbook. They are accompanied by the Brian Newman Quintet with arrangements by Marion Evans and Jorge Callandrelli. 180-gram vinyl.', 'LoveForSale-TonyBennett_LadyGaga', 'Tony Bennett & Lady Gaga', 1, 5, 6),
(5, 'Dawn FM', 120, 'he Weeknd deemed his 2022 album, Dawn FM, a \"sonic experience\" showcasing a unique cast of features from Tyler, the Creator, Lil Wayne, Quincy Jones, Oneohtrix Point Never, and Jim Carrey. (XO Records/Republic)', 'DawnFM-TheWeeknd', 'TheWeeknd', 1, 3, 5),
(6, 'Fearless (Taylor’s Version) Gold', 250, '\"Fearless was an album full of magic and curiosity, the bliss and devastation of youth. It was the diary of the adventures and explorations of a teenage girl who was learning tiny lessons with every new crack in the facade of the fairytale ending she\'d been shown in the movies. I\'m thrilled to tell you that my new version of Fearless is done and will be with you soon. It\'s called Fearless (Taylor\'s Version) and it includes 26 songs.\" - Taylor Swift. Includes 6 unreleased tracks. Gold 3 LP.', 'Fearless-TaylorSwift', 'Taylor Swift', 1, 2, 4),
(7, 'Beleive', 100, 'Internationally renowned Italian tenor Andrea Bocelli releases breathtaking new album, Believe, celebrating the power of music to soothe the soul. It follows his record-breaking `Music for Hope\' performance at Easter from Milan\'s historic Duomo cathedral. Features classic favorites, a previously unreleased track from late Italian composer Ennio Morricone, Gratia Plena (from acclaimed film Fatima), duets w/ Alison Krauss & Cecilia Bartoli and interpretations of Ave Maria and Cohen\'s Hallelujah.', 'Believe-AndreaBocelli', 'Andrea Bocelli', 1, 7, 3),
(8, 'Jordi', 100, 'The eagerly awaited new album from Maroon 5, JORDI, is the band\'s first since the critically acclaimed Red Pill Blues. The album will include the recently released hit single \"Beautiful Mistakes ft. Megan Thee Stallion\" as well as fan favorites \"Memories\" and \"Nobody\'s Love.\" Vinyl LP pressing. 2021 album.', 'Jordi-Maroon5', 'Maroon 5', 1, 4, 7);

-- --------------------------------------------------------

--
-- Table structure for table `baihat`
--

CREATE TABLE `baihat` (
  `maBaiHat` int(11) NOT NULL,
  `tenBaiHat` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `linkFile` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `baihat`
--

INSERT INTO `baihat` (`maBaiHat`, `tenBaiHat`, `linkFile`) VALUES
(1, 'This Song', 'EvoSessions-ThisLove'),
(2, 'Ocean Deep', 'EvoSessions-OceanDeep'),
(3, 'Say You Won\'t Let Go', 'AcousticNow-SayYouWontLetGo'),
(4, 'Love Yourself', 'AcousticNow-LoveYourself'),
(5, 'Country Boy', 'ItServeYouRightToSuffer-CountryBoy'),
(6, 'You\'re Wrong', 'ItServeYouRightToSuffer-YoureWrong'),
(7, 'It\'s De-Lovely', 'LoveForSale-It\'sDe-Lovely'),
(8, 'Do I Love You', 'LoveForSale-DoILoveYou'),
(9, 'Dawn FM', 'DawnFm-DawnFm'),
(10, 'Take My Breath', 'DawnFm-TakeMyBreath'),
(11, 'Fearless', 'Fearless-Fearless'),
(12, 'Love Story', 'Fearless-LoveStory'),
(13, 'Believe', 'Believe-Hallelujah\r\n'),
(14, 'Ave Maria', 'Believe-AveMaria'),
(15, 'Beautiful Mistakes', 'Jordi-BeautifulMistakes\r\n'),
(16, 'Lost', 'Jordi-Lost');

-- --------------------------------------------------------

--
-- Table structure for table `baihat_album`
--

CREATE TABLE `baihat_album` (
  `BaiHat_maBaiHat` int(11) NOT NULL,
  `Album_maAlbum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `baihat_album`
--

INSERT INTO `baihat_album` (`BaiHat_maBaiHat`, `Album_maAlbum`) VALUES
(1, 1),
(2, 1),
(3, 2),
(4, 2),
(5, 3),
(6, 3),
(7, 4),
(8, 4),
(9, 5),
(10, 5),
(11, 6),
(12, 6),
(13, 7),
(14, 7),
(15, 8),
(16, 8);

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `album` int(11) NOT NULL,
  `hoaDon` int(11) NOT NULL,
  `soLuong` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chitietphieunhap`
--

CREATE TABLE `chitietphieunhap` (
  `album` int(11) NOT NULL,
  `phieuNhap` int(11) NOT NULL,
  `gia` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `SoLuong` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `NCC` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `maKhachHang` int(11) NOT NULL,
  `maAlbum` int(11) NOT NULL,
  `soLuong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `maHoaDon` int(11) NOT NULL,
  `tongTien` int(11) DEFAULT NULL,
  `thoiGianDat` date DEFAULT NULL,
  `trangThai` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `khachHang` int(11) DEFAULT NULL,
  `khuyenMai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `maKhuyenMai` int(11) NOT NULL,
  `dieuKien` int(11) DEFAULT NULL,
  `batDau` date DEFAULT NULL,
  `ketThuc` date DEFAULT NULL,
  `phanTram` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `maNguoiDung` int(11) NOT NULL,
  `hoTen` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `SDT` varchar(12) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `diaChi` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `TrangThai` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `matKhau` varchar(100) DEFAULT NULL,
  `vaiTro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`maNguoiDung`, `hoTen`, `SDT`, `diaChi`, `email`, `TrangThai`, `username`, `matKhau`, `vaiTro`) VALUES
(1, 'Bùi Hồng Bảo', '0908141453', 'B4/24G Trần Đại Nghĩa, Tân Kiên, Bình Chánh', 'hongbao2003@gmail.com', 'Hoạt động', 'baobui3103', '123456', 1),
(2, 'Nguyễn Văn Admin', '1234567899', 'Thành phố admin', 'admin@gmail.com', 'Hoạt động', 'admin', 'admin', 2),
(3, 'Lavied', '0908141453', NULL, NULL, 'Hoạt động', 'Lavied3103', 'Bao123456@', 1),
(4, 'Quang', '0902561608', NULL, NULL, 'Hoạt động', 'Koituine', '19GnauQ07.', 1),
(5, 'Trần Hải Dương', '0978883096', NULL, NULL, 'Hoạt động', 'haiduong316', 'Haiduong1@', 1),
(6, 'Bùi Bảo', '0908141453', NULL, NULL, 'Hoạt động', 'baobui123456', 'Bao123456789@', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `maNCC` int(11) NOT NULL,
  `tenNCC` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `diaChi` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `SDT` varchar(12) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `TrangThai` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phieunhap`
--

CREATE TABLE `phieunhap` (
  `maPhieuNhap` int(11) NOT NULL,
  `ngayNhap` date DEFAULT NULL,
  `nguoiNhap` int(11) DEFAULT NULL,
  `TongGia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quyen`
--

CREATE TABLE `quyen` (
  `maCTQ` int(11) NOT NULL,
  `NoiDungQuyen` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE `theloai` (
  `maLoai` int(11) NOT NULL,
  `tenLoai` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`maLoai`, `tenLoai`) VALUES
(1, 'Blues'),
(2, 'Acoustic'),
(3, 'Classical'),
(4, 'Country'),
(5, 'Electronic'),
(6, 'Jazz'),
(7, 'Pop/Rock');

-- --------------------------------------------------------

--
-- Table structure for table `vaitro`
--

CREATE TABLE `vaitro` (
  `maVaiTro` int(11) NOT NULL,
  `tenVaiTro` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaitro`
--

INSERT INTO `vaitro` (`maVaiTro`, `tenVaiTro`) VALUES
(1, 'Khách hàng'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `vaitro_quyen`
--

CREATE TABLE `vaitro_quyen` (
  `VaiTro_maVaiTro` int(11) NOT NULL,
  `Quyen_maCTQ` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `yeuthich`
--

CREATE TABLE `yeuthich` (
  `album` int(11) NOT NULL,
  `nguoiDung` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`maAlbum`),
  ADD KEY `theLoai` (`theLoai`);

--
-- Indexes for table `baihat`
--
ALTER TABLE `baihat`
  ADD PRIMARY KEY (`maBaiHat`);

--
-- Indexes for table `baihat_album`
--
ALTER TABLE `baihat_album`
  ADD PRIMARY KEY (`BaiHat_maBaiHat`,`Album_maAlbum`),
  ADD KEY `Album_maAlbum` (`Album_maAlbum`);

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`album`,`hoaDon`),
  ADD KEY `hoaDon` (`hoaDon`);

--
-- Indexes for table `chitietphieunhap`
--
ALTER TABLE `chitietphieunhap`
  ADD PRIMARY KEY (`album`,`phieuNhap`),
  ADD KEY `phieuNhap` (`phieuNhap`),
  ADD KEY `NCC` (`NCC`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`maKhachHang`,`maAlbum`),
  ADD KEY `maAlbum` (`maAlbum`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`maHoaDon`),
  ADD KEY `khachHang` (`khachHang`),
  ADD KEY `khuyenMai` (`khuyenMai`);

--
-- Indexes for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`maKhuyenMai`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`maNguoiDung`),
  ADD KEY `vaiTro` (`vaiTro`);

--
-- Indexes for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`maNCC`);

--
-- Indexes for table `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD PRIMARY KEY (`maPhieuNhap`),
  ADD KEY `nguoiNhap` (`nguoiNhap`);

--
-- Indexes for table `quyen`
--
ALTER TABLE `quyen`
  ADD PRIMARY KEY (`maCTQ`);

--
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`maLoai`);

--
-- Indexes for table `vaitro`
--
ALTER TABLE `vaitro`
  ADD PRIMARY KEY (`maVaiTro`);

--
-- Indexes for table `vaitro_quyen`
--
ALTER TABLE `vaitro_quyen`
  ADD PRIMARY KEY (`VaiTro_maVaiTro`,`Quyen_maCTQ`),
  ADD KEY `Quyen_maCTQ` (`Quyen_maCTQ`);

--
-- Indexes for table `yeuthich`
--
ALTER TABLE `yeuthich`
  ADD PRIMARY KEY (`album`,`nguoiDung`),
  ADD KEY `nguoiDung` (`nguoiDung`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`theLoai`) REFERENCES `theloai` (`maLoai`);

--
-- Constraints for table `baihat_album`
--
ALTER TABLE `baihat_album`
  ADD CONSTRAINT `baihat_album_ibfk_1` FOREIGN KEY (`BaiHat_maBaiHat`) REFERENCES `baihat` (`maBaiHat`),
  ADD CONSTRAINT `baihat_album_ibfk_2` FOREIGN KEY (`Album_maAlbum`) REFERENCES `album` (`maAlbum`);

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`album`) REFERENCES `album` (`maAlbum`),
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`hoaDon`) REFERENCES `hoadon` (`maHoaDon`);

--
-- Constraints for table `chitietphieunhap`
--
ALTER TABLE `chitietphieunhap`
  ADD CONSTRAINT `chitietphieunhap_ibfk_1` FOREIGN KEY (`album`) REFERENCES `album` (`maAlbum`),
  ADD CONSTRAINT `chitietphieunhap_ibfk_2` FOREIGN KEY (`phieuNhap`) REFERENCES `phieunhap` (`maPhieuNhap`),
  ADD CONSTRAINT `chitietphieunhap_ibfk_3` FOREIGN KEY (`NCC`) REFERENCES `nhacungcap` (`maNCC`);

--
-- Constraints for table `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`maAlbum`) REFERENCES `album` (`maAlbum`),
  ADD CONSTRAINT `giohang_ibfk_2` FOREIGN KEY (`maKhachHang`) REFERENCES `nguoidung` (`maNguoiDung`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`khachHang`) REFERENCES `nguoidung` (`maNguoiDung`),
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`khuyenMai`) REFERENCES `khuyenmai` (`maKhuyenMai`);

--
-- Constraints for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `nguoidung_ibfk_1` FOREIGN KEY (`vaiTro`) REFERENCES `vaitro` (`maVaiTro`);

--
-- Constraints for table `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD CONSTRAINT `phieunhap_ibfk_1` FOREIGN KEY (`nguoiNhap`) REFERENCES `nguoidung` (`maNguoiDung`);

--
-- Constraints for table `vaitro_quyen`
--
ALTER TABLE `vaitro_quyen`
  ADD CONSTRAINT `vaitro_quyen_ibfk_1` FOREIGN KEY (`VaiTro_maVaiTro`) REFERENCES `vaitro` (`maVaiTro`),
  ADD CONSTRAINT `vaitro_quyen_ibfk_2` FOREIGN KEY (`Quyen_maCTQ`) REFERENCES `quyen` (`maCTQ`);

--
-- Constraints for table `yeuthich`
--
ALTER TABLE `yeuthich`
  ADD CONSTRAINT `yeuthich_ibfk_1` FOREIGN KEY (`album`) REFERENCES `album` (`maAlbum`),
  ADD CONSTRAINT `yeuthich_ibfk_2` FOREIGN KEY (`nguoiDung`) REFERENCES `nguoidung` (`maNguoiDung`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
