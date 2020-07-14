-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2020 at 08:23 AM
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
-- Database: `db_gym`
--

-- --------------------------------------------------------

--
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
--

INSERT INTO `tbl_admin` (`id_admin`, `name`, `pass`, `username`) VALUES
(1, 'dat', 'e34d514f7db5c8aac72a7c8191a09617', 'bé đạt cute phô mai ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_advice`
--

CREATE TABLE `tbl_advice` (
  `id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` int(11) NOT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_advice`
--

INSERT INTO `tbl_advice` (`id`, `content`, `sex`, `status`) VALUES
(1, 'tập luyện thêm để giữ dáng cũng như cho cơ thể săng chắc hơn ', 0, 'bình thường'),
(2, 'nên giảm cân kết hợp luyện tập thể chất để cơ thể thon thả hơn', 0, 'thừa cân'),
(3, 'có nguy cơ bệnh cao nên tập trung giảm cân để bảo vệ sức khỏe cũng như có cơ thể thon thả hơn', 0, 'quá cân'),
(4, 'tập luyện cơ bắp, giữ dáng và duy trì chế độ ăn uống hiện tại', 1, 'bình thường'),
(5, 'cần tăng cân để nâng cao thể lực và cơ bắp', 1, 'gầy'),
(6, 'cần tăng cân', 0, 'gầy'),
(7, 'nên giảm cân cùng với tăng cơ cho cơ thể rắn chắc hơn', 1, 'thừa cân'),
(8, 'nên giảm cân ngay, tập luyện các bài tập nhẹ và thường xuyên vận động để có sức khỏe tốt', 1, 'quá cân');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_combo_package`
--

CREATE TABLE `tbl_combo_package` (
  `id_combo` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `date` int(11) NOT NULL,
  `HLV` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_combo_package`
--

INSERT INTO `tbl_combo_package` (`id_combo`, `name`, `description`, `price`, `date`, `HLV`) VALUES
(1, 'gói NORMAL', 'Sử dụng toàn bộ máy tập.\r\nTập luyện bất kỳ lúc nào không hạn chế thời gian khi phòng tập mở cửa.\r\nSử dụng các dịch vụ co bản tại phòng gym.\r\n\r\n', 900000, 3, 0),
(2, 'gói NEWBIE', 'Dành cho người mới tập.\r\nSử dụng tất cả các máy, được yêu cầu HLV hướng dẫn máy tập - bài tập trong 1 tuần đầu tiên.\r\nĐược sử dụng các dịch vụ cơ bản tại phòng.\r\n', 1499000, 3, 0),
(3, 'gói NEWBIE-VIP', 'Dành cho người mới tập.\r\nĐược sử dụng tất cả dịch vụ cũng như trang thiết bị tại phòng gym.\r\nĐược tặng một áo gym cao cấp.\r\nCó HLV riêng.', 2990000, 6, 1),
(4, 'gói SUPERIOR-VIP', 'Gói cao cấp nhất, đắt đỏ nhất và chất lượng nhất.\r\nĐược sử dụng tất cả dịch vụ cũng như trang thiết bị tại phòng gym.\r\nĐược tặng trọn bộ phụ kiện GYM trị giá 5 triệu đồng.\r\nCó HLV riêng.\r\nVà được trải nghiệm các sự kiện, hội thảo, tour du lịch thể thao đặ', 32000000, 24, 1),
(5, 'Gói COUPLE', 'Được sử dụng một số dịch vụ và thiết bị tại phòng GYM.\r\nĐược mang theo một người cùng tập', 1999000, 4, 0),
(6, 'Gói BUSINESS-CLASS', 'Gói dành cho người ít có thời gian rãnh.\r\nMỗi lần đến phòng tập sẽ được tính 1 ngày, đủ 40 ngày hoặc hết 3 tháng gói sẽ hết hiệu lực.', 1199000, 3, 0),
(7, 'Gói OLD', 'Dành cho người cao tuổi muốn giữ gìn sức khỏe.\r\nCó HLV riêng.\r\nĐược sử dụng các dịch vụ đặc biệt dành riêng cho người cao tuổi.\r\n', 990000, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gym`
--

CREATE TABLE `tbl_gym` (
  `id_gym` int(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `MAX` int(11) NOT NULL,
  `slot_now` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_gym`
--

INSERT INTO `tbl_gym` (`id_gym`, `address`, `name`, `MAX`, `slot_now`) VALUES
(1, '180 cao lỗ hcm', 'chi nhanh cao lo', 32, 0),
(2, '43 trần quốc thảo', 'chi nhánh trân quốc thảo', 24, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_level`
--

CREATE TABLE `tbl_level` (
  `id_level` int(10) NOT NULL,
  `name_level` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_level`
--

INSERT INTO `tbl_level` (`id_level`, `name_level`, `description`) VALUES
(1, 'lính mới', 'chưa biết gì về gym, chưa bao giờ đụng vào tạ'),
(2, 'sơ cấp', 'đã có hiểu biết và tiếp cận phòng tập (1 tháng -> 5 tháng)'),
(3, 'trung cấp', 'kinh nghiệm từ  6 tháng đến 2 năm '),
(4, 'cao cấp', 'kiến thức và thời gian  2 đến 5 năm'),
(5, 'siêu cấp', 'có thể tự tin lên sàn thi đâu :)');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` int(10) NOT NULL,
  `order_date` datetime NOT NULL,
  `consignee_name` varchar(255) NOT NULL,
  `consignee_phone` varchar(10) NOT NULL,
  `id_status` int(10) NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id_order`, `order_date`, `consignee_name`, `consignee_phone`, `id_status`, `id_user`) VALUES
(1, '2020-06-07 11:20:31', 'tèo', '09091234', 1, 1),
(2, '2020-06-03 11:27:16', 'teo', '090912356', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_detail`
--

CREATE TABLE `tbl_order_detail` (
  `id_order` int(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
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
--

INSERT INTO `tbl_order_detail_combo` (`id_order`, `id_combo`, `date_begin`, `date_end`) VALUES
(1, 1, '2020-06-02 11:27:46', '2020-06-27 11:27:46');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_personal_trainer`
--

CREATE TABLE `tbl_personal_trainer` (
  `id_pt` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `img` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_personal_trainer`
--

INSERT INTO `tbl_personal_trainer` (`id_pt`, `name`, `address`, `phone`, `img`) VALUES
(1, 'Huy 6 múi', '180 cao lỗ', '0909012345', NULL),
(2, 'Bé Đạt cute', '43 trần quôc thảo', '0973409613', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id_product` int(10) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `img` varchar(30) DEFAULT NULL,
  `hot` int(11) NOT NULL,
  `loaiSP` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id_product`, `ten`, `description`, `price`, `img`, `hot`, `loaiSP`) VALUES
(3, 'đai lưng', 'đai lưng giúp bảo vệ phần lưng và tăng cường sức mạnh cho người sử dụng', 135000, 'dailung.jpg', 1, 'phukien'),
(4, 'Dây kéo lưng tập Gym', 'Dây kéo giúp giữ cho thanh tạ được chắc hơn, bảo vệ cổ tay, tăng cường sức kéo, giảm đau bàn tay', 87000, 'daykeo.png', 1, 'phukien'),
(5, 'DÂY QUẤN CỔ TAY HARBINGER REDLINE', 'Dây quấn cổ tay giúp giảm chấn thương cổ tay, tăng lực kéo, đẩy khi tập nặng', 142000, 'quancotay.png', 1, 'phukien'),
(6, 'Găng tay dành cho Nữ', 'găng tay xinh đẹp cho nữ giới, bao ngầu, bao cool, giữ cho phái nữ một đôi tay xinh đẹp ngay cả khi tập tạ', 155000, 'gangtay.png', 0, 'phukien'),
(7, 'Protein COMBAT-Whey Protein 2lbs', 'Whey protein chiếm gần 20% protein trong sữa. Nó có giá trị dinh dưỡng cao và rất dễ tiêu hóa. Whey proteinnhanh chóng đi vào cơ thể để cung cấp các thiết yếu, các axit amin quan trọng cần thiết để nuôi dưỡng cơ và các mô. Whey protein có giá trị dinh dưỡ', 1080000, 'COMBAT-Whey.jpg', 1, 'tpbs'),
(8, '100% ISOLATE PROTEIN CHOCOLATE MELT 5.16LBS-2.3kg', '100% Isolate protein\r\nHấp thụ nhanh chóng\r\nHàm lượng fat và đường rất thấp\r\nNói không với amino spiking, chất độn, chất cấm', 1150000, 'isolate.png', 1, 'tpbs');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_schedule`
--

CREATE TABLE `tbl_schedule` (
  `id_schedule` int(10) NOT NULL,
  `id_users` int(10) NOT NULL,
  `id_gym` int(10) NOT NULL,
  `id_pt` int(10) NOT NULL,
  `thu2` varchar(10) NOT NULL,
  `thu3` varchar(10) NOT NULL,
  `thu4` varchar(10) NOT NULL,
  `thu5` varchar(10) NOT NULL,
  `thu6` varchar(10) NOT NULL,
  `thu7` varchar(10) NOT NULL,
  `chunhat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_schedule`
--

INSERT INTO `tbl_schedule` (`id_schedule`, `id_users`, `id_gym`, `id_pt`, `thu2`, `thu3`, `thu4`, `thu5`, `thu6`, `thu7`, `chunhat`) VALUES
(1, 1, 2, 2, '', '', '', '', '', '', ''),
(3, 1, 1, 1, '', '', '', '', '', '', ''),
(4, 1, 1, 1, '', '', '', '', '', '', ''),
(5, 1, 1, 1, 'ca1', 'ca2', 'ca3', 'ca2', 'ca1', 'ca2', 'ca3'),
(6, 1, 1, 1, 'ca2', 'ca1', 'on', 'ca2', 'ca3', 'ca2', 'on'),
(7, 1, 1, 1, 'ca2', 'ca1', 'on', 'ca2', 'ca3', 'ca2', 'on'),
(8, 1, 1, 1, 'ca1', 'null', 'null', 'null', 'null', 'null', 'null'),
(9, 1, 1, 1, 'ca2', 'ca1', 'ca1', 'null', 'null', 'ca2', 'null'),
(10, 1, 1, 1, 'ca2', 'null', 'null', 'null', 'ca3', 'null', 'ca2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `id_status` int(10) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`id_status`, `name`) VALUES
(1, 'Đang xử lý'),
(2, 'Đang vận chuyển'),
(3, 'Hoàn tất giao dịch'),
(4, 'Hết hàng'),
(5, 'Xả hàng');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_user` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `id_level` int(10) NOT NULL,
  `BMI` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id_user`, `email`, `pass`, `phone`, `name`, `address`, `id_level`, `BMI`) VALUES
(1, 'teo@gmail.com', 'e827aa1ed78e96a113182dce12143f9f', '090912345', 'tèo', '180 cao lỗ', 2, 0),
(2, 'user2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0123456789', 'Nguyễn văn tý 2', '181 Cao lỗ p4 q8 hcm', 4, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_advice`
--
ALTER TABLE `tbl_advice`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `tbl_advice`
--
ALTER TABLE `tbl_advice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_combo_package`
--
ALTER TABLE `tbl_combo_package`
  MODIFY `id_combo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id_product` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  MODIFY `id_schedule` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `order_ibfk1` FOREIGN KEY (`id_user`) REFERENCES `tbl_users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_ibfk2` FOREIGN KEY (`id_status`) REFERENCES `tbl_status` (`id_status`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD CONSTRAINT `order_detail_ibfk2` FOREIGN KEY (`id_product`) REFERENCES `tbl_product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_detail_ibkf1` FOREIGN KEY (`id_order`) REFERENCES `tbl_order` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_order_detail_combo`
--
ALTER TABLE `tbl_order_detail_combo`
  ADD CONSTRAINT `order_combo_ibfk1` FOREIGN KEY (`id_order`) REFERENCES `tbl_order` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_combo_ibfk2` FOREIGN KEY (`id_combo`) REFERENCES `tbl_combo_package` (`id_combo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  ADD CONSTRAINT `schedule_ibfk1` FOREIGN KEY (`id_gym`) REFERENCES `tbl_gym` (`id_gym`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `schedule_ibfk2` FOREIGN KEY (`id_pt`) REFERENCES `tbl_personal_trainer` (`id_pt`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `schedule_ibfk3` FOREIGN KEY (`id_users`) REFERENCES `tbl_users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD CONSTRAINT `users_ibfk1` FOREIGN KEY (`id_level`) REFERENCES `tbl_level` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
