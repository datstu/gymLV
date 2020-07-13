-- phpMyAdmin SQL Dump
<<<<<<< HEAD
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th7 07, 2020 lúc 07:29 AM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
=======
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2020 at 08:50 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
>>>>>>> dat
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
<<<<<<< HEAD
-- Cơ sở dữ liệu: `db_gym`
=======
-- Database: `db_gym`
>>>>>>> dat
--

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Cấu trúc bảng cho bảng `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id_admin` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
=======
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
>>>>>>> dat
--

INSERT INTO `tbl_admin` (`id_admin`, `name`, `pass`, `username`) VALUES
(1, 'dat', 'e34d514f7db5c8aac72a7c8191a09617', 'bé đạt cute phô mai ');

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Cấu trúc bảng cho bảng `tbl_combo_package`
--

DROP TABLE IF EXISTS `tbl_combo_package`;
CREATE TABLE IF NOT EXISTS `tbl_combo_package` (
  `id_combo` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id_combo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_combo_package`
=======
-- Table structure for table `tbl_combo_package`
--

CREATE TABLE `tbl_combo_package` (
  `id_combo` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_combo_package`
>>>>>>> dat
--

INSERT INTO `tbl_combo_package` (`id_combo`, `name`, `description`, `price`, `date`) VALUES
(1, 'gói cơ bản', 'Sử dụng toàn bộ máy tập và có người hướng dẫn khi muốn sử dụng máy-bài tập.\r\nTập luyện bất kỳ lúc nào không hạn chế thời gian khi phòng tập mở cửa.\r\nKhông có huấn luyện viên cá nhân\r\n', 300000, '0000-00-00 00:00:00'),
(2, 'gói cơ bản', 'Sử dụng tất cả các máy, được yêu cầu hướng dẫn máy tập - bài tập.\r\nKhông hạn chế thời gian bắt đầu kết thúc trong 1 buổi tập.\r\n', 300000, '1 tháng'),
(3, 'gói cơ bản nâng cấp', 'thừa hưởng gói cb được có thêm huấn luyện viên cá nhân chỉ dạy theo phương pháp/muc tiêu mà bạn hướng đến', 500000, '1 tháng'),
(4, 'gói 3 tháng', 'giống gói cb 1 yêu cầu đăng ký 3 tháng', 750000, ''),
(5, '3 tháng nâng cấp', 'giống gói cb 3 tháng thường có thêm hlv cn', 1200000, '3 tháng');

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Cấu trúc bảng cho bảng `tbl_gym`
--

DROP TABLE IF EXISTS `tbl_gym`;
CREATE TABLE IF NOT EXISTS `tbl_gym` (
  `id_gym` int(10) NOT NULL AUTO_INCREMENT,
  `address` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id_gym`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_gym`
=======
-- Table structure for table `tbl_gym`
--

CREATE TABLE `tbl_gym` (
  `id_gym` int(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_gym`
>>>>>>> dat
--

INSERT INTO `tbl_gym` (`id_gym`, `address`, `name`) VALUES
(1, '180 cao lỗ hcm', 'chi nhanh cao lo'),
(2, '43 trần quốc thảo', 'chi nhánh trân quốc thảo');

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Cấu trúc bảng cho bảng `tbl_level`
--

DROP TABLE IF EXISTS `tbl_level`;
CREATE TABLE IF NOT EXISTS `tbl_level` (
  `id_level` int(10) NOT NULL AUTO_INCREMENT,
  `name_level` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id_level`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_level`
=======
-- Table structure for table `tbl_level`
--

CREATE TABLE `tbl_level` (
  `id_level` int(10) NOT NULL,
  `name_level` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_level`
>>>>>>> dat
--

INSERT INTO `tbl_level` (`id_level`, `name_level`, `description`) VALUES
(1, 'lính mới', 'chưa biết gì về gym, chưa bao giờ đụng vào tạ'),
(2, 'sơ cấp', 'đã có hiểu biết và tiếp cận phòng tập (1 tháng -> 5 tháng)'),
(3, 'trung cấp', 'kinh nghiệm từ  6 tháng đến 2 năm '),
(4, 'cao cấp', 'kiến thức và thời gian  2 đến 5 năm'),
(5, 'siêu cấp', 'có thể tự tin lên sàn thi đâu :)');

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Cấu trúc bảng cho bảng `tbl_order`
--

DROP TABLE IF EXISTS `tbl_order`;
CREATE TABLE IF NOT EXISTS `tbl_order` (
  `id_order` int(10) NOT NULL AUTO_INCREMENT,
=======
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` int(10) NOT NULL,
>>>>>>> dat
  `order_date` datetime NOT NULL,
  `consignee_name` varchar(255) NOT NULL,
  `consignee_phone` varchar(10) NOT NULL,
  `id_status` int(10) NOT NULL,
<<<<<<< HEAD
  `id_user` int(10) NOT NULL,
  PRIMARY KEY (`id_order`),
  KEY `order_ibfk1` (`id_user`),
  KEY `order_ibfk2` (`id_status`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
=======
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
>>>>>>> dat
--

INSERT INTO `tbl_order` (`id_order`, `order_date`, `consignee_name`, `consignee_phone`, `id_status`, `id_user`) VALUES
(1, '2020-06-07 11:20:31', 'tèo', '09091234', 1, 1),
(2, '2020-06-03 11:27:16', 'teo', '090912356', 3, 1);

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Cấu trúc bảng cho bảng `tbl_order_detail`
--

DROP TABLE IF EXISTS `tbl_order_detail`;
CREATE TABLE IF NOT EXISTS `tbl_order_detail` (
  `id_order` int(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id_product`,`id_order`) USING BTREE,
  KEY `order_detail_ibkf1` (`id_order`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_order_detail`
=======
-- Table structure for table `tbl_order_detail`
--

CREATE TABLE `tbl_order_detail` (
  `id_order` int(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order_detail`
>>>>>>> dat
--

INSERT INTO `tbl_order_detail` (`id_order`, `id_product`, `quantity`, `price`) VALUES
(1, 1, 2, 2000000),
(1, 2, 1, 300);

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Cấu trúc bảng cho bảng `tbl_order_detail_combo`
--

DROP TABLE IF EXISTS `tbl_order_detail_combo`;
CREATE TABLE IF NOT EXISTS `tbl_order_detail_combo` (
  `id_order` int(10) NOT NULL,
  `id_combo` int(10) NOT NULL,
  `date_begin` datetime NOT NULL,
  `date_end` datetime NOT NULL,
  PRIMARY KEY (`id_order`,`id_combo`) USING BTREE,
  KEY `order_combo_ibfk2` (`id_combo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_order_detail_combo`
=======
-- Table structure for table `tbl_order_detail_combo`
--

CREATE TABLE `tbl_order_detail_combo` (
  `id_order` int(10) NOT NULL,
  `id_combo` int(10) NOT NULL,
  `date_begin` datetime NOT NULL,
  `date_end` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order_detail_combo`
>>>>>>> dat
--

INSERT INTO `tbl_order_detail_combo` (`id_order`, `id_combo`, `date_begin`, `date_end`) VALUES
(1, 1, '2020-06-02 11:27:46', '2020-06-27 11:27:46');

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Cấu trúc bảng cho bảng `tbl_personal_trainer`
--

DROP TABLE IF EXISTS `tbl_personal_trainer`;
CREATE TABLE IF NOT EXISTS `tbl_personal_trainer` (
  `id_pt` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  PRIMARY KEY (`id_pt`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_personal_trainer`
=======
-- Table structure for table `tbl_personal_trainer`
--

CREATE TABLE `tbl_personal_trainer` (
  `id_pt` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_personal_trainer`
>>>>>>> dat
--

INSERT INTO `tbl_personal_trainer` (`id_pt`, `name`, `address`, `phone`) VALUES
(1, 'Huy 6 múi', '180 cao lỗ', '0909012345'),
(2, 'Bé Đạt cute', '43 trần quôc thảo', '0973409613');

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Cấu trúc bảng cho bảng `tbl_product`
--

DROP TABLE IF EXISTS `tbl_product`;
CREATE TABLE IF NOT EXISTS `tbl_product` (
  `id_product` int(10) NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id_product`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`id_product`, `ten`, `description`, `price`) VALUES
=======
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id_product` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id_product`, `name`, `description`, `price`) VALUES
>>>>>>> dat
(1, 'sp1', 'Đây là mô tả cho sp1', 1000000),
(2, 'sp2', 'mô tả sp 2', 300000);

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Cấu trúc bảng cho bảng `tbl_schedule`
--

DROP TABLE IF EXISTS `tbl_schedule`;
CREATE TABLE IF NOT EXISTS `tbl_schedule` (
  `id_schedule` int(10) NOT NULL AUTO_INCREMENT,
  `id_users` int(10) NOT NULL,
  `id_gym` int(10) NOT NULL,
  `id_pt` int(10) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id_schedule`,`id_users`,`id_gym`,`id_pt`),
  KEY `schedule_ibfk1` (`id_gym`),
  KEY `schedule_ibfk2` (`id_pt`),
  KEY `schedule_ibfk3` (`id_users`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_schedule`
=======
-- Table structure for table `tbl_schedule`
--

CREATE TABLE `tbl_schedule` (
  `id_schedule` int(10) NOT NULL,
  `id_users` int(10) NOT NULL,
  `id_gym` int(10) NOT NULL,
  `id_pt` int(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_schedule`
>>>>>>> dat
--

INSERT INTO `tbl_schedule` (`id_schedule`, `id_users`, `id_gym`, `id_pt`, `date`) VALUES
(1, 1, 2, 2, '2020-06-10 11:28:30'),
(2, 1, 2, 1, '2020-06-10 11:28:30');

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Cấu trúc bảng cho bảng `tbl_status`
--

DROP TABLE IF EXISTS `tbl_status`;
CREATE TABLE IF NOT EXISTS `tbl_status` (
  `id_status` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_status`
=======
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `id_status` int(10) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_status`
>>>>>>> dat
--

INSERT INTO `tbl_status` (`id_status`, `name`) VALUES
(1, 'Đang xử lý'),
(2, 'Đang vận chuyển'),
(3, 'Hoàn tất giao dịch'),
(4, 'Hết hàng'),
(5, 'Xả hàng');

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Cấu trúc bảng cho bảng `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
=======
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_user` int(10) NOT NULL,
>>>>>>> dat
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
<<<<<<< HEAD
  `id_level` int(10) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `users_ibfk1` (`id_level`)
) ENGINE=InnoDB AUTO_INCREMENT=43241255 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_users`
=======
  `id_level` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
>>>>>>> dat
--

INSERT INTO `tbl_users` (`id_user`, `email`, `pass`, `phone`, `name`, `address`, `id_level`) VALUES
(1, 'teo@gmail.com', 'e827aa1ed78e96a113182dce12143f9f', '090912345', 'tèo', '180 cao lỗ', 2),
(2, 'user2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0123456789', 'Nguyễn văn tý 2', '181 Cao lỗ p4 q8 hcm', 4);

--
<<<<<<< HEAD
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_order`
=======
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_combo_package`
--
ALTER TABLE `tbl_combo_package`
  ADD PRIMARY KEY (`id_combo`);

--
-- Indexes for table `tbl_gym`
--
ALTER TABLE `tbl_gym`
  ADD PRIMARY KEY (`id_gym`);

--
-- Indexes for table `tbl_level`
--
ALTER TABLE `tbl_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `order_ibfk1` (`id_user`),
  ADD KEY `order_ibfk2` (`id_status`);

--
-- Indexes for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD PRIMARY KEY (`id_product`,`id_order`) USING BTREE,
  ADD KEY `order_detail_ibkf1` (`id_order`);

--
-- Indexes for table `tbl_order_detail_combo`
--
ALTER TABLE `tbl_order_detail_combo`
  ADD PRIMARY KEY (`id_order`,`id_combo`) USING BTREE,
  ADD KEY `order_combo_ibfk2` (`id_combo`);

--
-- Indexes for table `tbl_personal_trainer`
--
ALTER TABLE `tbl_personal_trainer`
  ADD PRIMARY KEY (`id_pt`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  ADD PRIMARY KEY (`id_schedule`,`id_users`,`id_gym`,`id_pt`),
  ADD KEY `schedule_ibfk1` (`id_gym`),
  ADD KEY `schedule_ibfk2` (`id_pt`),
  ADD KEY `schedule_ibfk3` (`id_users`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `users_ibfk1` (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_combo_package`
--
ALTER TABLE `tbl_combo_package`
  MODIFY `id_combo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_gym`
--
ALTER TABLE `tbl_gym`
  MODIFY `id_gym` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_level`
--
ALTER TABLE `tbl_level`
  MODIFY `id_level` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id_order` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_personal_trainer`
--
ALTER TABLE `tbl_personal_trainer`
  MODIFY `id_pt` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id_product` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  MODIFY `id_schedule` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `id_status` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43241255;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_order`
>>>>>>> dat
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `order_ibfk1` FOREIGN KEY (`id_user`) REFERENCES `tbl_users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_ibfk2` FOREIGN KEY (`id_status`) REFERENCES `tbl_status` (`id_status`) ON DELETE CASCADE ON UPDATE CASCADE;

--
<<<<<<< HEAD
-- Các ràng buộc cho bảng `tbl_order_detail`
=======
-- Constraints for table `tbl_order_detail`
>>>>>>> dat
--
ALTER TABLE `tbl_order_detail`
  ADD CONSTRAINT `order_detail_ibfk2` FOREIGN KEY (`id_product`) REFERENCES `tbl_product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_detail_ibkf1` FOREIGN KEY (`id_order`) REFERENCES `tbl_order` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE;

--
<<<<<<< HEAD
-- Các ràng buộc cho bảng `tbl_order_detail_combo`
=======
-- Constraints for table `tbl_order_detail_combo`
>>>>>>> dat
--
ALTER TABLE `tbl_order_detail_combo`
  ADD CONSTRAINT `order_combo_ibfk1` FOREIGN KEY (`id_order`) REFERENCES `tbl_order` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_combo_ibfk2` FOREIGN KEY (`id_combo`) REFERENCES `tbl_combo_package` (`id_combo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
<<<<<<< HEAD
-- Các ràng buộc cho bảng `tbl_schedule`
=======
-- Constraints for table `tbl_schedule`
>>>>>>> dat
--
ALTER TABLE `tbl_schedule`
  ADD CONSTRAINT `schedule_ibfk1` FOREIGN KEY (`id_gym`) REFERENCES `tbl_gym` (`id_gym`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `schedule_ibfk2` FOREIGN KEY (`id_pt`) REFERENCES `tbl_personal_trainer` (`id_pt`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `schedule_ibfk3` FOREIGN KEY (`id_users`) REFERENCES `tbl_users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
<<<<<<< HEAD
-- Các ràng buộc cho bảng `tbl_users`
=======
-- Constraints for table `tbl_users`
>>>>>>> dat
--
ALTER TABLE `tbl_users`
  ADD CONSTRAINT `users_ibfk1` FOREIGN KEY (`id_level`) REFERENCES `tbl_level` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
