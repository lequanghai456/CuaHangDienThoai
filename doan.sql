-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 17, 2021 at 04:36 AM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doan`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

DROP TABLE IF EXISTS `binhluan`;
CREATE TABLE IF NOT EXISTS `binhluan` (
  `idbinhluan` int NOT NULL AUTO_INCREMENT,
  `idsanpham` int DEFAULT NULL,
  `noidung` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nguoidang` text COLLATE utf8_unicode_ci,
  `ngaydang` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Trangthai` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`idbinhluan`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`idbinhluan`, `idsanpham`, `noidung`, `nguoidang`, `ngaydang`, `Trangthai`) VALUES
(1, 40, 'Sản phẩm tốt', 'Lê Quang Hải', '5/30/2020', 0),
(2, 40, 'Dở', 'Lê Quang Hải 1', '15:24:08 pm', 0),
(3, 40, 'Dở', 'Lê Quang Hải', '15:25:25 pm', 0),
(4, 42, 'ASadasda', 'admin', '11:30:34 am', 0);

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

DROP TABLE IF EXISTS `chitiethoadon`;
CREATE TABLE IF NOT EXISTS `chitiethoadon` (
  `stt` int NOT NULL AUTO_INCREMENT,
  `mahoadon` int DEFAULT NULL,
  `idsanpham` int DEFAULT NULL,
  `anhdaidien` text COLLATE utf8_unicode_ci,
  `tensanpham` text COLLATE utf8_unicode_ci,
  `gia` int DEFAULT NULL,
  `donvi` text COLLATE utf8_unicode_ci,
  `tennhacungcap` text COLLATE utf8_unicode_ci,
  `soluong` int DEFAULT NULL,
  PRIMARY KEY (`stt`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`stt`, `mahoadon`, `idsanpham`, `anhdaidien`, `tensanpham`, `gia`, `donvi`, `tennhacungcap`, `soluong`) VALUES
(1, 1, 43, 'sp4.jpg', 'SAMSUNG GALAXY A9', 2000000, '(VND)', 'IPHONE', 1),
(2, 2, 40, 'sp1.jpg', 'SAMSUNG GALAXY A9', 6900000, '(VND)', 'IPHONE', 1),
(3, 2, 45, 'IPAD1.jpg', 'SAMSUNG GALAXY A9', 6900000, '(VND)', 'IPHONE', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

DROP TABLE IF EXISTS `hoadon`;
CREATE TABLE IF NOT EXISTS `hoadon` (
  `mahoadon` int NOT NULL AUTO_INCREMENT,
  `ngaylap` text COLLATE utf8_unicode_ci,
  `username` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`mahoadon`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`mahoadon`, `ngaylap`, `username`) VALUES
(1, '12/14/2020', 'admin'),
(2, '2/17/2021', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `loaisp`
--

DROP TABLE IF EXISTS `loaisp`;
CREATE TABLE IF NOT EXISTS `loaisp` (
  `idLoaisp` int NOT NULL,
  `Tenloaisp` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idLoaisp`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaisp`
--

INSERT INTO `loaisp` (`idLoaisp`, `Tenloaisp`) VALUES
(1, 'Điện thoai'),
(2, 'Laptop');

-- --------------------------------------------------------

--
-- Table structure for table `meovat`
--

DROP TABLE IF EXISTS `meovat`;
CREATE TABLE IF NOT EXISTS `meovat` (
  `idchuyenmuc` int NOT NULL AUTO_INCREMENT,
  `tieude` text COLLATE utf8_unicode_ci,
  `noidung` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idchuyenmuc`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `meovat`
--

INSERT INTO `meovat` (`idchuyenmuc`, `tieude`, `noidung`, `trangthai`) VALUES
(1, NULL, 'Samsung mở bán Galaxy S20 Ultra phiên bản màu Cosmic White dành riêng cho thị trường Trung Quốc, chưa rõ Việt Nam khi nào có', '1'),
(2, NULL, 'Cảm biến 108MP vẫn chưa đủ, Samsung hiện đang phát triển cảm biến độ phân giải gấp đôi, kích thước có thể tăng tới 1 inch', '1'),
(3, NULL, 'Nghe lạ thật, là hãng sản xuất màn hình số 1 nhưng Samsung sẽ sử dụng màn hình OLED của BOE cho smartphone Galaxy trong tương lai', '1'),
(4, NULL, 'Không phải Exynos 990 đâu, Samsung đang phát triển Exynos 992 mạnh mẽ hơn để trang bị cho Galaxy Note 20', '1');

-- --------------------------------------------------------

--
-- Table structure for table `nhacungcap`
--

DROP TABLE IF EXISTS `nhacungcap`;
CREATE TABLE IF NOT EXISTS `nhacungcap` (
  `MANCC` int NOT NULL,
  `TenNCC` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`MANCC`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhacungcap`
--

INSERT INTO `nhacungcap` (`MANCC`, `TenNCC`) VALUES
(1, 'IPHONE'),
(2, 'APPLE'),
(3, 'XIAOMI'),
(0, 'NOKIA');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `idsanpham` int NOT NULL AUTO_INCREMENT,
  `anhdaidien` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Tensp` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Gia` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Donvi` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idloaisp` int DEFAULT NULL,
  `Manhacungcap` int DEFAULT NULL,
  `Trangthai` int DEFAULT NULL,
  PRIMARY KEY (`idsanpham`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`idsanpham`, `anhdaidien`, `Tensp`, `Gia`, `Donvi`, `idloaisp`, `Manhacungcap`, `Trangthai`) VALUES
(40, 'sp1.jpg', 'SAMSUNG GALAXY A9', '6900000', '(VND)', 1, 1, 0),
(41, 'sp2.jpg', 'SAMSUNG GALAXY A10', '8900000', '(VND)', 1, 2, 1),
(42, 'sp3.jpg', 'HUAWEI P 30', '7000000', '(VND)', 1, 1, 1),
(43, 'sp4.jpg', 'SAMSUNG GALAXY A9', '2000000', '(VND)', 1, 1, 1),
(44, 'IPAD1.jpg', 'SAMSUNG GALAXY A9', '6900000', '(VND)', 2, 1, 0),
(45, 'IPAD1.jpg', 'SAMSUNG GALAXY A9', '6900000', '(VND)', 2, 1, 0),
(46, 'IPAD2.jpg', 'Apple iPad (2018) 9.7\" 32GB', '8900000', '(VND)', 2, 3, 0),
(47, 'IPAD3.jpg', 'Apple iPad (Latest Model) 32GB', '7000000', '(VND)', 2, 0, 0),
(48, 'IPAD4.jpg', 'iPad 1 64Gb', '2000000', '(VND)', 2, 2, 0),
(49, 'sp1.jpg', 'SAMSUNG GALAXY A9', '6900000', '(VND)', 1, 1, 0),
(50, 'sp2.jpg', 'SAMSUNG GALAXY A10', '8900000', '(VND)', 1, 2, 0),
(51, 'sp3.jpg', 'HUAWEI P 30', '7000000', '(VND)', 1, 0, 0),
(52, 'sp4.jpg', 'SAMSUNG GALAXY A9', '2000000', '(VND)', 1, 1, 0),
(53, 'sp1.jpg', 'SAMSUNG GALAXY A9', '6900000', '(VND)', 1, 1, 0),
(54, 'sp2.jpg', 'SAMSUNG GALAXY A10', '8900000', '(VND)', 1, 2, 0),
(55, 'sp3.jpg', 'HUAWEI P 30', '7000000', '(VND)', 1, 0, 0),
(56, 'sp4.jpg', 'SAMSUNG GALAXY A9', '2000000', '(VND)', 1, 1, 0),
(57, 'IPAD1.jpg', 'SAMSUNG GALAXY A9', '6900000', '(VND)', 2, 1, 0),
(58, 'IPAD2.jpg', 'Apple iPad (2018) 9.7\" 32GB', '8900000', '(VND)', 2, 3, 1),
(59, 'IPAD3.jpg', 'Apple iPad (Latest Model) 32GB', '7000000', '(VND)', 2, 0, 0),
(60, 'IPAD4.jpg', 'iPad 1 64Gb', '2000000', '(VND)', 2, 2, 0),
(61, 'IPAD1.jpg', 'SAMSUNG GALAXY A9', '6900000', '(VND)', 2, 1, 0),
(62, 'IPAD2.jpg', 'Apple iPad (2018) 9.7\" 32GB', '8900000', '(VND)', 2, 3, 0),
(63, 'IPAD3.jpg', 'Apple iPad (Latest Model) 32GB', '7000000', '(VND)', 2, 0, 0),
(64, 'IPAD4.jpg', 'iPad 1 64Gb', '2000000', '(VND)', 2, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

DROP TABLE IF EXISTS `slideshow`;
CREATE TABLE IF NOT EXISTS `slideshow` (
  `idslideshow` int NOT NULL AUTO_INCREMENT,
  `anh` text COLLATE utf8_unicode_ci,
  `class` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`idslideshow`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`idslideshow`, `anh`, `class`) VALUES
(1, 'QC1.png', 'carousel-item active'),
(2, 'QC2.png', 'carousel-item'),
(3, 'QC3.jpg', 'carousel-item'),
(4, 'QC4.jpg', 'carousel-item');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

DROP TABLE IF EXISTS `tintuc`;
CREATE TABLE IF NOT EXISTS `tintuc` (
  `idchuyenmuc` int NOT NULL AUTO_INCREMENT,
  `tieude` text COLLATE utf8_unicode_ci,
  `noidung` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idchuyenmuc`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`idchuyenmuc`, `tieude`, `noidung`, `trangthai`) VALUES
(1, NULL, '4 cách cải thiện chất lượng mạng wifi của bạn theo hướng dẫn của kỹ sư Apple', '1'),
(2, NULL, 'Cách phục hồi dữ liệu bị mất hoặc xóa trên iPhone không cần Jailbreak', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `Username` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `Pass` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `isAdmin` bit(1) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Pass`, `isAdmin`) VALUES
('admin', 'abc', b'1'),
('HaiLe', 'abc', b'0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
