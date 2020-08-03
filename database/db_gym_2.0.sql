-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 03, 2020 lúc 03:52 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_gym`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `name`, `pass`, `username`) VALUES
(1, 'dat', 'e34d514f7db5c8aac72a7c8191a09617', 'bé đạt cute phô mai ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_advice`
--

CREATE TABLE `tbl_advice` (
  `id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` int(11) NOT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_advice`
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
-- Cấu trúc bảng cho bảng `tbl_combo_package`
--

CREATE TABLE `tbl_combo_package` (
  `id_combo` int(10) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` float NOT NULL,
  `date` int(11) NOT NULL,
  `HLV` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_combo_package`
--

INSERT INTO `tbl_combo_package` (`id_combo`, `ten`, `description`, `price`, `date`, `HLV`) VALUES
(1, 'gói NORMAL', 'Sử dụng toàn bộ máy tập.\r\nTập luyện bất kỳ lúc nào không hạn chế thời gian khi phòng tập mở cửa.\r\nSử dụng các dịch vụ co bản tại phòng gym.\r\n\r\n', 900000, 3, 0),
(2, 'gói NEWBIE', 'Dành cho người mới tập.\r\nSử dụng tất cả các máy, được yêu cầu HLV hướng dẫn máy tập - bài tập trong 1 tuần đầu tiên.\r\nĐược sử dụng các dịch vụ cơ bản tại phòng.\r\n', 1499000, 3, 0),
(3, 'gói NEWBIE-VIP', 'Dành cho người mới tập.\r\nĐược sử dụng tất cả dịch vụ cũng như trang thiết bị tại phòng gym.\r\nĐược tặng một áo gym cao cấp.\r\nCó HLV riêng.\r\nCó thể tham gia hoạt động chung (yoga, thể dục nhịp diệu,..)', 2990000, 6, 1),
(4, 'gói SUPERIOR-VIP', 'Gói cao cấp nhất, đắt đỏ nhất và chất lượng nhất.\r\nĐược sử dụng tất cả dịch vụ cũng như trang thiết bị tại phòng gym.\r\nĐược tặng trọn bộ phụ kiện GYM trị giá 5 triệu đồng.\r\nCó HLV riêng.\r\nVà được trải nghiệm các sự kiện, hội thảo, tour du lịch. \r\nCó thể tham gia hoạt động chung (yoga, thể dục nhịp diệu,..)', 32000000, 24, 1),
(5, 'Gói COUPLE', 'Được sử dụng một số dịch vụ và thiết bị tại phòng GYM.\r\nĐược mang theo một người cùng tập', 1999000, 4, 0),
(6, 'Gói BUSINESS-CLASS', 'Gói dành cho người ít có thời gian rãnh.\r\nMỗi lần đến phòng tập sẽ được tính 1 ngày, đủ 40 ngày hoặc hết 3 tháng gói sẽ hết hiệu lực.', 1199000, 3, 0),
(7, 'Gói OLD-VIP', 'Dành cho người cao tuổi muốn giữ gìn sức khỏe.\r\nCó HLV riêng.\r\nĐược sử dụng các dịch vụ đặc biệt dành riêng cho người cao tuổi.\r\n', 990000, 2, 1),
(8, 'gói TRYHARD', 'Lịch luyện tập dày đặt,\r\nPhát triển cơ bắp nhanh chóng,\r\nĐược sử dụng tất cả dịch vụ tại phòng gym.\r\n', 2899000, 3, 1),
(9, 'gói OLD', 'Có thể tham gia hoạt động chung (yoga, thể dục nhịp diệu,..)\r\nĐược sử dụng tất cả dịch vụ tại phòng ', 990000, 3, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_gym`
--

CREATE TABLE `tbl_gym` (
  `id_gym` int(10) NOT NULL,
  `address_gym` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `MAX` int(11) NOT NULL,
  `slot_now` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_gym`
--

INSERT INTO `tbl_gym` (`id_gym`, `address_gym`, `name`, `MAX`, `slot_now`) VALUES
(1, '180 cao lỗ hcm', 'chi nhanh cao lo', 32, 0),
(2, '43 trần quốc thảo', 'chi nhánh trân quốc thảo', 24, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_level`
--

CREATE TABLE `tbl_level` (
  `id_level` int(10) NOT NULL,
  `name_level` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_level`
--

INSERT INTO `tbl_level` (`id_level`, `name_level`, `description`) VALUES
(1, 'lính mới', 'chưa biết gì về gym, chưa bao giờ đụng vào tạ'),
(2, 'sơ cấp', 'đã có hiểu biết và tiếp cận phòng tập (1 tháng -> 5 tháng)'),
(3, 'trung cấp', 'kinh nghiệm từ  6 tháng đến 2 năm '),
(4, 'cao cấp', 'kiến thức và thời gian  2 đến 5 năm'),
(5, 'siêu cấp', 'có thể tự tin lên sàn thi đâu :)');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` int(10) NOT NULL,
  `order_date` datetime NOT NULL,
  `consignee_name` varchar(255) NOT NULL,
  `consignee_phone` varchar(10) NOT NULL,
  `id_status` int(10) DEFAULT NULL,
  `id_user` int(10) NOT NULL,
  `shipping_method` text DEFAULT NULL,
  `totalPrice` double NOT NULL,
  `address` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`id_order`, `order_date`, `consignee_name`, `consignee_phone`, `id_status`, `id_user`, `shipping_method`, `totalPrice`, `address`) VALUES
(17, '2020-07-23 00:55:26', 'minh huy', '0919917287', 1, 43241264, 'fast', 2504000, NULL),
(20, '2020-07-23 21:33:33', 'minh huy', '0919917287', 1, 43241264, 'fast', 1245000, NULL),
(21, '2020-07-23 22:27:08', 'minh huy', '0919917287', 2, 43241264, 'normal', 97000, NULL),
(22, '2020-07-25 22:30:20', 'minh huy', '0919917287', 3, 43241264, 'normal', 97000, NULL),
(23, '2020-07-25 23:23:17', 'minh huy', '0919917287', NULL, 43241264, 'normal', 165000, NULL),
(25, '2020-07-26 00:48:38', 'minh huy', '0919917287', NULL, 43241264, NULL, 1249000, NULL),
(27, '2020-07-26 00:56:57', 'minh huy', '0919917287', NULL, 43241264, NULL, 2049000, NULL),
(28, '2020-07-26 23:33:31', 'minh huy', '0919917287', NULL, 43241264, NULL, 1249000, NULL),
(29, '2020-08-03 19:41:50', 'anh chang huy', '0919917287', NULL, 43241264, 'normal', 2240000, 'áđasa'),
(30, '2020-08-03 19:43:31', 'anh chang huy', '0919917287', NULL, 43241264, 'normal', 2240000, 'áđasa'),
(31, '2020-08-03 19:44:50', 'anh chang huy', '0919917287', NULL, 43241264, 'normal', 1160000, 'áđasa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_detail`
--

CREATE TABLE `tbl_order_detail` (
  `id_order` int(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_order_detail`
--

INSERT INTO `tbl_order_detail` (`id_order`, `id_product`, `quantity`, `price`) VALUES
(20, 3, 1, 135000),
(17, 4, 2, 174000),
(21, 4, 1, 87000),
(23, 6, 1, 155000),
(20, 7, 1, 1080000),
(29, 7, 1, 1080000),
(17, 8, 2, 2300000),
(29, 8, 1, 1150000),
(31, 8, 1, 1150000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_detail_combo`
--

CREATE TABLE `tbl_order_detail_combo` (
  `id_order` int(10) NOT NULL,
  `id_combo` int(10) NOT NULL,
  `date_begin` datetime NOT NULL,
  `date_end` datetime NOT NULL,
  `id_gym` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_order_detail_combo`
--

INSERT INTO `tbl_order_detail_combo` (`id_order`, `id_combo`, `date_begin`, `date_end`, `id_gym`) VALUES
(27, 5, '2020-07-31 00:00:00', '2020-12-01 00:00:00', 1),
(28, 6, '2020-07-28 00:00:00', '2020-10-28 00:00:00', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_personal_trainer`
--

CREATE TABLE `tbl_personal_trainer` (
  `id_pt` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `img` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_personal_trainer`
--

INSERT INTO `tbl_personal_trainer` (`id_pt`, `name`, `address`, `phone`, `img`) VALUES
(1, 'Huy 6 múi', '180 cao lỗ', '0909012345', NULL),
(2, 'Bé Đạt cute', '43 trần quôc thảo', '0973409613', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
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
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`id_product`, `ten`, `description`, `price`, `img`, `hot`, `loaiSP`) VALUES
(1, 'sp1', 'Đây là mô tả cho sp1', 1000000, NULL, 0, ''),
(2, 'sp2', 'mô tả sp 2', 300000, NULL, 0, ''),
(3, 'đai lưng', 'đai lưng giúp bảo vệ phần lưng và tăng cường sức mạnh cho người sử dụng', 135000, 'dailung.jpg', 1, 'phukien'),
(4, 'Dây kéo lưng tập Gym', 'Dây kéo giúp giữ cho thanh tạ được chắc hơn, bảo vệ cổ tay, tăng cường sức kéo, giảm đau bàn tay', 87000, 'daykeo.png', 1, 'phukien'),
(5, 'DÂY QUẤN CỔ TAY HARBINGER REDLINE', 'Dây quấn cổ tay giúp giảm chấn thương cổ tay, tăng lực kéo, đẩy khi tập nặng', 142000, 'quancotay.png', 1, 'phukien'),
(6, 'Găng tay dành cho Nữ', 'găng tay xinh đẹp cho nữ giới, bao ngầu, bao cool, giữ cho phái nữ một đôi tay xinh đẹp ngay cả khi tập tạ', 155000, 'gangtay.png', 0, 'phukien'),
(7, 'Protein COMBAT-Whey Protein 2lbs', 'Whey protein chiếm gần 20% protein trong sữa. Nó có giá trị dinh dưỡng cao và rất dễ tiêu hóa. Whey proteinnhanh chóng đi vào cơ thể để cung cấp các thiết yếu, các axit amin quan trọng cần thiết để nuôi dưỡng cơ và các mô. Whey protein có giá trị dinh dưỡ', 1080000, 'COMBAT-Whey.jpg', 1, 'tpbs'),
(8, '100% ISOLATE PROTEIN CHOCOLATE MELT 5.16LBS-2.3kg', '100% Isolate protein\r\nHấp thụ nhanh chóng\r\nHàm lượng fat và đường rất thấp\r\nNói không với amino spiking, chất độn, chất cấm', 1150000, 'isolate.png', 1, 'tpbs');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_schedule`
--

CREATE TABLE `tbl_schedule` (
  `id_schedule` int(10) NOT NULL,
  `id_users` int(10) NOT NULL,
  `id_gym` int(10) NOT NULL,
  `id_pt` int(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_schedule`
--

INSERT INTO `tbl_schedule` (`id_schedule`, `id_users`, `id_gym`, `id_pt`, `date`) VALUES
(1, 1, 2, 2, '2020-06-10 11:28:30'),
(2, 1, 2, 1, '2020-06-10 11:28:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_status`
--

CREATE TABLE `tbl_status` (
  `id_status` int(10) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_status`
--

INSERT INTO `tbl_status` (`id_status`, `name`) VALUES
(1, 'Đang xử lý'),
(2, 'Đang vận chuyển'),
(3, 'Hoàn tất giao dịch'),
(4, 'Hết hàng'),
(5, 'Xả hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id_user` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id_user`, `email`, `pass`, `phone`, `name`, `address`) VALUES
(1, 'teo@gmail.com', 'e827aa1ed78e96a113182dce12143f9f', '090912345', 'tèo', '180 cao lỗ'),
(2, 'user2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0123456789', 'Nguyễn văn tý 2', '181 Cao lỗ p4 q8 hcm'),
(43241263, 'hudddy@gmail.com', '$2y$10$/zgOHB4ImAL9HMkDc8trsum18BiBCQY211kkXlZsqbPzwokVreCLi', '0919917287', 'CN thiet bi', 'sd'),
(43241264, 'ha@gmail.com', '$2y$10$TgyD1yG4yFMRncCvtJLh7OHaViW7ek0NhRgsy1gtXOfMJVTLP1oLq', '0919917287', 'anh chang huy', 'áđasa'),
(43241265, 'dog@gmail.com', '$2y$10$on1ACRYJgMwYaLzllaan6uigz5bXGdjjUcrFILYBEo0TMllSKEiE2', '0919917287', 'CN thiet biddđ', 'dfgf'),
(43241266, 'huydog121@gmail.com', '$2y$10$.d1WcHAW2gzI7Ptm40bO3.ANlFEamyBQFwgtA93ttuaUP/mULyNL6', '0919917287', 'ddd', 'dfgf');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_advice`
--
ALTER TABLE `tbl_advice`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_combo_package`
--
ALTER TABLE `tbl_combo_package`
  ADD PRIMARY KEY (`id_combo`);

--
-- Chỉ mục cho bảng `tbl_gym`
--
ALTER TABLE `tbl_gym`
  ADD PRIMARY KEY (`id_gym`);

--
-- Chỉ mục cho bảng `tbl_level`
--
ALTER TABLE `tbl_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `order_ibfk1` (`id_user`),
  ADD KEY `order_ibfk2` (`id_status`);

--
-- Chỉ mục cho bảng `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD PRIMARY KEY (`id_product`,`id_order`) USING BTREE,
  ADD KEY `order_detail_ibkf1` (`id_order`);

--
-- Chỉ mục cho bảng `tbl_order_detail_combo`
--
ALTER TABLE `tbl_order_detail_combo`
  ADD PRIMARY KEY (`id_order`,`id_combo`) USING BTREE,
  ADD KEY `order_combo_ibfk2` (`id_combo`),
  ADD KEY `id_gym` (`id_gym`);

--
-- Chỉ mục cho bảng `tbl_personal_trainer`
--
ALTER TABLE `tbl_personal_trainer`
  ADD PRIMARY KEY (`id_pt`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id_product`);

--
-- Chỉ mục cho bảng `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  ADD PRIMARY KEY (`id_schedule`,`id_users`,`id_gym`,`id_pt`),
  ADD KEY `schedule_ibfk1` (`id_gym`),
  ADD KEY `schedule_ibfk2` (`id_pt`),
  ADD KEY `schedule_ibfk3` (`id_users`);

--
-- Chỉ mục cho bảng `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_advice`
--
ALTER TABLE `tbl_advice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_combo_package`
--
ALTER TABLE `tbl_combo_package`
  MODIFY `id_combo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_gym`
--
ALTER TABLE `tbl_gym`
  MODIFY `id_gym` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_level`
--
ALTER TABLE `tbl_level`
  MODIFY `id_level` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id_order` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `tbl_personal_trainer`
--
ALTER TABLE `tbl_personal_trainer`
  MODIFY `id_pt` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id_product` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  MODIFY `id_schedule` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `id_status` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43241267;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `order_ibfk1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_ibfk2` FOREIGN KEY (`id_status`) REFERENCES `tbl_status` (`id_status`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD CONSTRAINT `order_detail_ibfk2` FOREIGN KEY (`id_product`) REFERENCES `tbl_product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_detail_ibkf1` FOREIGN KEY (`id_order`) REFERENCES `tbl_order` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_order_detail_combo`
--
ALTER TABLE `tbl_order_detail_combo`
  ADD CONSTRAINT `gym_ibfk3` FOREIGN KEY (`id_gym`) REFERENCES `tbl_gym` (`id_gym`),
  ADD CONSTRAINT `order_combo_ibfk1` FOREIGN KEY (`id_order`) REFERENCES `tbl_order` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_combo_ibfk2` FOREIGN KEY (`id_combo`) REFERENCES `tbl_combo_package` (`id_combo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  ADD CONSTRAINT `schedule_ibfk1` FOREIGN KEY (`id_gym`) REFERENCES `tbl_gym` (`id_gym`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `schedule_ibfk2` FOREIGN KEY (`id_pt`) REFERENCES `tbl_personal_trainer` (`id_pt`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `schedule_ibfk3` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
