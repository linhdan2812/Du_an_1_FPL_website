-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql105.byetcluster.com
-- Generation Time: Dec 14, 2020 at 12:17 PM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b8_27152900_bean`
--

-- --------------------------------------------------------

--
-- Table structure for table `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL,
  `ma_kh` int(11) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `noi_dung` text NOT NULL,
  `ngay_bl` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `binh_luan`
--

INSERT INTO `binh_luan` (`ma_bl`, `ma_kh`, `ma_hh`, `noi_dung`, `ngay_bl`) VALUES
(1, 1, 1, 'Đồng hành bên cạnh cây son 3CE Mickey vỏ xanh màu đỏ lạnh chính là em son 3CE Mickey vỏ đỏ màu cam san hô trẻ trung, dành tặng cho những cô nàng năng động, cá tính', '2020-11-16'),
(2, 0, 1, 'saq', '0000-00-00'),
(3, 1, 8, 'a', '0000-00-00'),
(4, 1, 8, 'b', '0000-00-00'),
(5, 2, 8, 'đậu ngu', '0000-00-00'),
(6, 0, 5, 'mùi thơm', '0000-00-00'),
(7, 0, 7, 'vjp pro +1', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_don_hang`
--

CREATE TABLE `chi_tiet_don_hang` (
  `ma_chi_tiet` int(11) NOT NULL,
  `ma_don_hang` int(11) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `ten_hh` varchar(200) NOT NULL,
  `gia_don_hang` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chi_tiet_don_hang`
--

INSERT INTO `chi_tiet_don_hang` (`ma_chi_tiet`, `ma_don_hang`, `ma_hh`, `so_luong`, `ten_hh`, `gia_don_hang`) VALUES
(1, 1, 4, 1, '', 150000),
(2, 2, 4, 1, '', 150000),
(3, 3, 4, 1, '', 150000),
(4, 4, 4, 1, '', 150000),
(5, 5, 4, 1, '', 150000),
(6, 6, 4, 1, '', 150000),
(9, 11, 5, 1, '', 200000),
(10, 12, 6, 1, '', 500000),
(11, 13, 6, 2, '', 500000),
(12, 14, 4, 2, '', 150000),
(13, 14, 7, 1, '', 450000),
(14, 15, 2, 1, '', 200000),
(15, 15, 6, 2, '', 500000),
(16, 16, 3, 1, '', 250000),
(17, 17, 1, 2, '', 420000);

-- --------------------------------------------------------

--
-- Table structure for table `don_hang`
--

CREATE TABLE `don_hang` (
  `ma_don_hang` int(11) NOT NULL,
  `ten_kh` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dia_chi` varchar(500) NOT NULL,
  `ngay_thang` datetime DEFAULT NULL,
  `tong_tien` float NOT NULL,
  `ma_kh` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `don_hang`
--

INSERT INTO `don_hang` (`ma_don_hang`, `ten_kh`, `email`, `dia_chi`, `ngay_thang`, `tong_tien`, `ma_kh`) VALUES
(1, 'Dc m Phúc lừa ', 'phuclua@gmail.com', 'trại tâm thần ', NULL, 150000, 0),
(2, 'Dc m Phúc lừa ', 'phuclua@gmail.com', 'trại tâm thần ', NULL, 150000, 0),
(3, 'Dc m Phúc lừa ', 'phuclua@gmail.com', 'trại tâm thần  ', NULL, 150000, 0),
(4, 'Dc m Phúc lừa ', 'phuclua@gmail.com', 'trại tâm thần  ', NULL, 150000, 0),
(5, 'fasdasda', 'aaa@gmail.com', 'aaaaa', NULL, 150000, 0),
(6, 'fasdasda', 'aaa@gmail.com', 'aaaaa', NULL, 150000, 0),
(11, 'Đào Duy Anh', 'cut@gmail.com', ' 17 an chai', NULL, 200000, 0),
(12, 'hè luu', 'abc@gmail.com', ' hà lụi', NULL, 500000, 0),
(13, 'mỹ mỹ', 'myntmph12101@fpt.edu.vn', ' mỹ ssinhf', NULL, 1000000, 0),
(14, 'aaaaaaaaaaaaaaa', 'abc@gmail.com', ' aaaaaaaaaaaaaaaaaa', NULL, 750000, 0),
(15, 'mỹ mỹ', 'hoangtusoi044@gmail.com', ' mỹ ssinhf', NULL, 1200000, 0),
(16, 'mỹ mỹ', 'myntmph12101@fpt.edu.vn', ' mỹ ssinhf', NULL, 250000, 0),
(17, 'admin', 'admin@gmail.com', 'adminadminadmin', NULL, 840000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int(11) NOT NULL,
  `ten_hh` varchar(140) NOT NULL,
  `don_gia` float NOT NULL,
  `giam_gia` float NOT NULL,
  `hinh` varchar(50) NOT NULL,
  `ma_loai` int(11) NOT NULL,
  `so_luot_xem` int(11) NOT NULL,
  `mo_ta` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `don_gia`, `giam_gia`, `hinh`, `ma_loai`, `so_luot_xem`, `mo_ta`) VALUES
(1, '3CE Mickey đỏ - cam san hô', 420000, 10, '3cedo_camsanho.jpg', 1, 29, 'Son 3CE Luztic vỏ đỏ có sắc cam san hô tươi mới, trẻ trung. Đây là một trong những “sát thủ ngọt ngào” của phiên bản giới hạn 3CE Disney. Với chất son tint mịn môi, chắc chắn sẽ cho nàng thêm option cực kỳ hay ho cho thời tiết hè thu này.'),
(2, 'Son kem lì black rouge air fit velvet tint 1', 200000, 10, 'blackrougea12_8a0dd35d6d394b36841d859b6a1a5d44.jpg', 15, 9, 'Chất son kem black rouge vô cùng mềm, mịn, mướt, bền màu lâu, không gây cảm giác nứt nẻ khô môi. Thiết kế sản phẩm vô cùng tinh tế và bắt mắt. Đầu cọ được thiết kế tối ưu phù hợp giúp lấy ra một lượng son vừa đủ tán đều trên môi của bạn'),
(3, 'Son Kem Black Rouge Cream Matt Rouge', 250000, 15, 'blackrougea12_8a0dd35d6d394b36841d859b6a1a5d44.jpg', 15, 4, 'Son Kem Black Rouge Cream Matt Rouge là dòng son mới nhất hiện nay của nhà Black Rouge với ý tưởng thiết kế được lấy từ những lá bài Tarot đầy huyền bí.\r\n\r\n \r\n\r\nNếu bạn là một cô nàng yêu thích sự huyền bí của những lá bài Tarot lại vừa là một cô nàng yêu thích son môi thì hôm nay bạn đã có thể sở hữu cả hai trong cùng một sản phẩm với dòng son mới toanh vừa ra mắt trong tháng 1/2020 của nhà Black Rouge.\r\n\r\n \r\n\r\nCream Matt Rouge tập trung vào những gam màu đậm thuộc tông lạnh giúp tăng điểm thần thái cho các cô nàng cá tính.'),
(4, 'Son Innisfree Vivid cotton ink', 150000, 10, '3abd48060319f2cfe13148ce302a1c7f.jfif', 14, 6, 'Son ra mắt vào năm 2017 với chỉ 5 màu, nhưng đến nay bảng màu của Vivid cotton ink đã lên tới 15 màu tổng cộng. Ống son dài chỉ khoảng 6cm, màu đỏ bằng nhựa cứng nhám cùng màu với màu son. Son không có vỏ hộp chỉ có một chút niêm phong ngay thân son và nắp. Nói chung tổng thể nhìn xinh xắn đáng yêu.'),
(5, 'Son innisfree Vivid slimfit tint', 200000, 15, '3abd48060319f2cfe13148ce302a1c7f.jfif', 14, 22, 'Thỏi son mới ra mắt nhưng lập tức được giới làm đẹp đón nhận. Innisfree Vivid Slimfit Tint dài, thân nhỏ, màu trắng, nhìn giống một chiếc bút sáp màu. Cầm rất vừa tay và tạo cảm giác thích thú mới lạ khi dùng.'),
(6, 'Son Mac dòng Mineralize Rich Lipstick', 500000, 15, 'son-mac-feature2.jpg', 13, 6, 'Hoàn toàn ngược lại với 3 dòng son siêu lì trên, đây là dòng son hoàn hảo cho cho những nàng sở hữu làn môi khô nhé. Bởi Mineralize Rich Lipstick có tích hợp thêm những thành phẩm dưỡng ẩm cho môi, khiến đôi môi bạn mềm mại và tự nhiên. Vì chứa dưỡng chất nên việc son không quá bền màu là điều đưỡng nhiên, son sẽ giữ được màu 3-4 tiếng nếu không ăn uống dầu mỡ. '),
(7, 'Son Mac dòng Sheen Supreme', 450000, 15, 'son-mac-feature2.jpg', 13, 3, 'Có đôi chút giống với dòng son trên, Sheen Supreme có chứa dưỡng chất để khiến môi không bị khô. Điểm khác biệt là son có thiết kế đầu vuông chứ không phải dạng son truyền thống nên việc viền môi không được hoàn hảo như các dòng son MAC khác'),
(8, 'Son 3CE Kem Cloud Lip Tint', 300000, 10, 'son-3ce-221-1-dep-xinh (1).jpg', 1, 15, 'Mới đây, 3CE vừa bổ sung tiếp vào \"gia phả\" của mình dòng son kem lì có cái tên rất kêu: 3CE Cloud Lip Tint bao gồm 12 màu mà nhìn qua đã thấy dễ đánh, dễ mê. Nhận xét một cách khách quan, bảng màu của Cloud Lip Tint không có gì quá đột phá nhưng có thể được coi là bảng màu son đất hoàn chỉnh nhất từ trước tới nay. Một khi đã là fan của son tông đất, bạn sẽ khó lòng mà không muốn sắm ít nhất vài ba cây từ dòng son này, ngay cả khi màu của chúng có thể na ná những cây son bạn đã sở hữu.');

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` varchar(20) NOT NULL,
  `mat_khau` varchar(50) NOT NULL,
  `ten_kh` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hinh` varchar(50) NOT NULL,
  `vai_tro` bit(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `mat_khau`, `ten_kh`, `email`, `hinh`, `vai_tro`) VALUES
('kh02', 'aloalo12345', 'Đào Duy Anh', 'anhddph11921@fpt.edu.vn', 'penguin.jpg', b'1'),
('kh08', 'aloalo12345', 'Đào Kim Liên', 'daokimlien@gmail.com', 'tiger_release_final_20191016_211510 - Copy.png', b'0'),
('kh09', 'aloalo12345', 'Duy Anh Đào', 'aratamoruno1@gmail.com', 'user.png', b'0'),
('admin1', 'admin123', 'admin123', 'admin123@gmail.com', '87070961_213318293139881_6699486173816946688_n.jpg', b'1'),
('KH001', '12345', 'mỹ', 'myntmph12101@fpt.edu.vn', 'MOBILE_figma.png', b'0'),
('KH005', '12345678', 'mỹ mỹ', 'maidieuxuan99@gmail.com', 'page_figma.png', b'1'),
('admin', 'admin', 'admin', 'admin@gmail.com', '87070961_213318293139881_6699486173816946688_n.jpg', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`ma_loai`, `ten_loai`) VALUES
(1, '3CE'),
(13, 'Son MAC'),
(14, ' Son Innisfree'),
(15, ' Black Rouge'),
(16, 'CHOUCHOU'),
(17, 'M.O.I'),
(18, 'BBIA'),
(20, 'Dior'),
(22, 'YSL'),
(23, 'Tint');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `fk_binhluan_khachhang` (`ma_kh`),
  ADD KEY `fk_binhluan_hanghoa` (`ma_hh`);

--
-- Indexes for table `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  ADD PRIMARY KEY (`ma_chi_tiet`),
  ADD KEY `fk_chitiet_donhang` (`ma_don_hang`),
  ADD KEY `fk_chitiet_hanghoa` (`ma_hh`);

--
-- Indexes for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`ma_don_hang`);

--
-- Indexes for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `fk_hanghoa_loai` (`ma_loai`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`ma_loai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  MODIFY `ma_chi_tiet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `ma_don_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
