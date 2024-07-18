-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 28, 2024 lúc 09:42 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `taskmanager`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `deadline`
--

CREATE TABLE `deadline` (
  `id` int(11) NOT NULL,
  `information` varchar(999) NOT NULL,
  `deadline` varchar(60) NOT NULL,
  `process` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `deadline`
--

INSERT INTO `deadline` (`id`, `information`, `deadline`, `process`) VALUES
(1, 'PTCN2 - Quiz CMS', '...', 2),
(2, 'TKTW2 - Quiz CMS', '...', 2),
(3, 'Chính trị - Quiz CMS', '...', 2),
(4, 'PTCN2 - Edit video * Nộp classroom', '26/05/2024', 2),
(5, 'TKTW2 - Thi', '27/06/2024', 0),
(6, 'PTCN2 - Đi Huế quay video', '19/05/2024', 2),
(7, 'TKTW2 - Hoàn thành + Nộp  Lab 3 + Lab 4 * Chưa nộp lab 4', '21/05/2024', 2),
(8, 'Chính trị - Excel bài ôn tập 1 + 2', '21/05/2024', 2),
(9, 'PTCN2 - Viết CV', '26/05/2024', 2),
(10, 'PTCN2 - Chấm CV (bản in màu) * 10đ', '22/05/2024', 2),
(11, 'TKTW2 - Chấm lab 3 + 4', '23/05/2024', 2),
(12, 'TKTW2 - Quiz 5 LMS', '21/05/2024', 2),
(13, 'PTCN2 - Tạo video FPoly min 45s', '22/05/2024', 2),
(14, 'PTCN2 - Sửa CV lần cuối + Nộp * Fix background ảnh', '22/05/2024', 2),
(15, 'TKTW2 - Convert web thành bán hàng', 'Free', 2),
(16, 'PTCN2 - Thuyết trình phỏng vấn tại lớp * Giới thiêu bản thân (4đ)', '27/05/2024', 2),
(17, 'PTCN2 - Hoàn thiện word giới thiệu bản thân', '24/05/2024', 2),
(18, 'PTCN2 - Nộp word (Hoàn thiện 4 phần) * Nộp classroom', '31/05/2024', 1),
(19, 'TKTW2 - Sửa menu + Sửa slide sản phẩm + CSS', '25/05/2024', 1),
(20, 'PTCN2 - Phỏng vấn + Góp ý Slide', '29/05/2024', 1),
(21, 'PTCN2 - Thuyết trình bài thi', '03/06/2024', 0),
(22, 'PTCN2 - Góp ý word', '05/06/2024', 0),
(23, 'PTCN2 - Tổng kết báo điểm', '07/06/2024', 0),
(24, 'PTCN2 - Team building * Không đi vắng 2 buổi điểm danh + ko điểm', '02/06/2024', 0),
(25, 'PTCN2 - Hoàn thành word', '...', 1),
(26, 'PTCN2 - Hoàn thành Slide', '27/05/2024', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `project` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `project`
--

INSERT INTO `project` (`id`, `project`, `url`) VALUES
(2, 'PHP - Website bán quần áo - Newstyle - Dự án mẫu', 'project/newstyle/'),
(3, 'PHP - Website bán đồ ăn nhanh - Bello', 'project/bello/'),
(4, 'PHP - Website bán quần áo - Core basic', 'project/webbanhang/'),
(5, 'PHP - Website show code - Anicode', 'project/anicode/'),
(6, 'PHP - Website bán đồ chơi trẻ em - BabyShop', 'project/babyshop/'),
(7, 'PHP - Website bán điện thoại - Dự án mẫu - Siêu thị trực tuyến', 'project/duanmau/'),
(8, 'PHP - Website bán đồ nội thất - Furniland - Dự án 1', 'project/furniland/'),
(9, 'PHP - Website đặt lịch Spa - HomeSpa', 'project/homespa/'),
(10, 'PHP - Website bán giày dép nam nữ - Meeshoes', 'project/meeshoes/'),
(11, 'PHP - Website đăng ký và quản lý dịch vụ - Mobifone', 'project/mobifone/'),
(12, 'PHP - Website quản lý bán hàng', 'project/quanlybanhang/'),
(13, 'PHP - Website quản lý kho v1', 'project/quanlykho_v1/'),
(14, 'PHP - Website quản lý kho v2', 'project/quanlykho_v2/'),
(15, 'PHP - Website quản lý nhân sự và tiền lương', 'project/quanlynhansu/admin'),
(17, 'HTML - 3 page Shopee - Home + Login + Register', 'project/shopee-ui/'),
(18, 'PHP - Website bán điện thoại - Stenogy - Dự án 1', 'project/stenogy/'),
(19, 'PHP - Website bán quần áo - 4MenShop', 'project/4MenShop/'),
(20, 'PHP - Website review sách - Bookreview', 'project/bookreview/'),
(21, '*PHP - CRUD 1', 'project/basic_crud_nodb/'),
(22, '*PHP - Website bán quần áo - ShopX', 'project/basic_shopx/'),
(23, '*PHP - Website bán đồ ăn nhanh - Joliia', 'project/basic_webdoannhanh/'),
(24, 'PHP - Website giới thiệu và đặt hàng tại Hà Giang', 'project/hagiang/'),
(25, '*PHP - Website bán hàng thực phẩm', 'project/basic_webthucpham/'),
(26, 'PHP - Website bán hàng túi xách', 'project/handbagmax/'),
(27, 'PHP - Website bán điện thoại - Minito - Dự án 1', 'project/minito/'),
(29, 'PHP - Wesite bán phụ kiện điện tử', 'project/nipponvn/'),
(30, 'PHP - Wesite siêu thị', 'project/supermarket/'),
(31, 'PHP - Wesite bán dụng cụ học tập', 'project/sieuthitructuyen/'),
(32, 'PHP - Wesite đồ nội thất', 'project/shopnoithat/'),
(33, '*PHP - Website quản lý xe', 'project/basic_quanlyxe/'),
(34, 'PHP - Website bán quần áo - LanShop', 'project/lanshop/'),
(35, 'PHP - Website bán ô tô', 'project/shopbanoto/'),
(36, 'PHP - Website bán điện thoại - 3guys', 'project/3guys/'),
(37, 'PHP - Website bán nhạc cụ', 'task/shopnhaccu'),
(38, 'PHP - Website bán sách', 'task/webbansach');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `customer` varchar(200) NOT NULL,
  `information` varchar(999) NOT NULL,
  `details` mediumtext NOT NULL,
  `deadline` varchar(60) NOT NULL,
  `budget` int(11) NOT NULL,
  `deposit` int(11) NOT NULL DEFAULT 0,
  `get` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `process` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `task`
--

INSERT INTO `task` (`id`, `customer`, `information`, `details`, `deadline`, `budget`, `deposit`, `get`, `status`, `process`) VALUES
(6, 'Việt Yên', 'PHP - Quiz C1 (Giang làm 300k) * Đã gửi tiền', 'Trống', '06/05/2024', 500000, 0, 200000, 1, 2),
(7, 'Huyền Trang', 'Laravel - Fix theo yêu cầu (Giang làm 450k) * Đã gửi tiền', 'Trống', 'Free', 650000, 0, 200000, 1, 2),
(8, 'Nguyễn Hiền Thư', 'Word - Chụp hình testcase', '<p>Trống</p>', '25/04/2024', 200000, 0, 200000, 1, 2),
(11, 'Ly Truong', 'PHP - Thêm chức năng đặt hàng', 'Trống', '02/05/2024', 200000, 0, 200000, 1, 2),
(12, 'Hoàng Sơn', 'HTML -  Đội ngũ, Tin tức, 3 trang Chi tiết tin tức ', 'Trống', '06/05/2024', 500000, 0, 500000, 1, 2),
(13, 'Nguyễn Quốc Huy (bạn của Yên)', 'PHP - Fix code', 'Trống', '05/05/2024', 80000, 0, 80000, 1, 2),
(14, 'Tuấn Anh', 'PHP - Quản lý nhân sự', 'Trống', '06/05/2024', 400000, 0, 400000, 1, 2),
(15, 'Mỹ Hoa', 'JS - Thêm chức năng search + filter', 'Trống', '06/05/2024', 300000, 0, 300000, 1, 2),
(17, 'Tuấn Thanh', 'HTML - 1 page đơn giản', 'Trống', '07/05/2024', 10000, 0, 10000, 1, 2),
(18, 'Trường', 'PHP - Bán túi xách', 'Trống', '08/05/2024', 500000, 0, 500000, 1, 2),
(19, 'Tam Kieu', 'PHP - Bán văn phòng phẩm + báo cáo', 'Trống', '07/05/2024', 500000, 0, 500000, 1, 2),
(21, 'Mỹ Hoa', 'HTML - Fix tùy chỉnh', 'Trống', '06/05/2024', 30000, 0, 30000, 1, 2),
(22, 'Trường', 'PHP - Quản lý nhân sự * Done 2 gđ', 'Trống', '08/05/2024', 650000, 0, 650000, 1, 2),
(23, 'Huỳnh Yến', 'HTML - 16page website bán giày', 'Trống', '08/05/2024', 540000, 0, 540000, 1, 2),
(24, 'Văn Đô', 'PHP - Thêm chức năng đăng nhập + quản lý nhân viên', 'Trống', '08/05/2024', 200000, 0, 200000, 1, 2),
(25, 'Hoang Anh', 'PHP - Thêm sửa xóa bonus tìm kiếm', 'Trống', '09/05/2024', 150000, 0, 150000, 1, 2),
(26, 'Tuấn Thanh', 'HTML - 1 page đơn giản * 27/05 bank', 'Trống', '09/05/2024', 30000, 0, 30000, 1, 2),
(29, 'Trường', 'PHP - Quản lý doanh nghiệp * Done 2 gđ', 'Trống', '15/05/2024', 700000, 0, 700000, 1, 2),
(31, 'Trường', 'PHP - Fix code theo yêu cầu', 'Trống', '12/05/2024', 400000, 0, 400000, 1, 2),
(32, 'Tiến Huy', 'PHP -Bán nhạc cụ', 'Trống', '18/05/2024', 600000, 0, 600000, 0, 2),
(33, 'Hoàng Văn Minh', 'PHP - Code theo yêu cầu', 'Trống', '20/05/2024', 100000, 0, 100000, 2, 2),
(34, 'Nguyễn Diệu Ly', 'PHP - Fix theo yêu cầu', 'Trống', '20/05/2024', 200000, 0, 200000, 1, 2),
(35, 'Nguyễn Diệu Ly', 'PHP - CRUD tin tức', 'Trống', '20/05/2024', 200000, 0, 200000, 1, 2),
(36, 'Huyen Trang', 'PHP - Bán đồ nội thất', 'Trống', '21/05/2024', 700000, 0, 700000, 1, 2),
(37, 'Phước Lộc', 'PHP - R users + CRUD products', 'Trống', '22/05/2024', 250000, 0, 250000, 1, 2),
(38, 'Trần Long', 'HTML - Code thêm thông tin 1 page', 'Trống', '22/05/2024', 200000, 0, 200000, 1, 2),
(40, 'Thu Hà', 'HTML - Clone trang chủ (Giang - 200k) * Đã gửi tiền * Chờ setting', 'Trống', '24/05/2024', 300000, 0, 100000, 1, 2),
(41, 'Vương Vui Vẻ', 'PHP - Bán sách + Báo cáo * Đã gửi báo cáo', 'Trống', '22/05/2024', 700000, 200000, 700000, 0, 2),
(42, 'Huy Định ', 'PHP - Website Newstyle', 'Trống', '23/05/2024', 200000, 0, 200000, 1, 2),
(43, 'Phạm Văn Quyền', 'HTML - ASM Xây dựng trang web trường THPT', 'Trống', '23/05/2024', 50000, 0, 50000, 2, 2),
(44, 'Trần Đức', 'PHP - Quản lý thiết bị trường học + Báo cáo * Fix báo cáo', 'Trống', '24/05/2024', 600000, 300000, 600000, 0, 1),
(45, 'Khách của Thiết', 'PHP - Code theo yêu cầu * Share Thiết 30k', 'Trống', '24/05/2024', 100000, 0, 70000, 1, 2),
(46, 'Trần Minh Hiếu', 'PHP - Website Stenogy + Báo cáo', 'Trống', '24/05/2024', 700000, 500000, 700000, 1, 2),
(47, 'Hoàng Nguyễn', 'PHP - Bán đồ chơi trẻ em + Báo cáo', 'Trống', '25/05/2024', 400000, 0, 400000, 1, 2),
(48, 'Tùng Hay Sai Ngu', 'PHP - Code bài thi theo yêu cầu', '<ul><li>Sau khi có điểm bank đủ (100k)</li><li>Trên 8.5đ nhận thêm 200k</li></ul>', '26/05/2024', 500000, 200000, 300000, 0, 2),
(49, 'Hạ Dương', 'PHP - Code theo yêu cầu', 'Trống', '25/05/2024', 200000, 0, 200000, 1, 2),
(50, 'Minh Trí', 'PHP - 4 Lab + ASM * Share Ân 30k chưa bank', '<ul><li>Code lại 4 lab</li><li>ASM có sẵn</li></ul>', '25/05/2024', 230000, 0, 200000, 1, 2),
(51, 'Trường', 'PHP - Code theo yêu cầu', '<p>Code theo đề bài thiết kế website</p>', '26/05/2024', 300000, 100000, 300000, 1, 2),
(54, 'Thanh Nhật', 'PHP - Fix connect database', '', '26/05/2024', 30000, 0, 30000, 1, 2),
(55, 'Nguyễn Hiền Thư', 'PHP - Hệ thống Quản lý Thông tin Sinh viên +  Báo cáo', '<h4><strong>Hệ thống Quản lý Thông tin Sinh viên (SIMS)</strong></h4><p>Source code: 1M1</p><p>Báo cáo: 600k</p><p><strong>Yêu cầu Chức năng:</strong></p><ol><li><p><strong>Đăng ký Sinh viên:</strong></p><p>- Hệ thống phải cho phép đăng ký sinh viên mới hiệu quả.</p><p>- Nắm bắt và lưu trữ thông tin sinh viên quan trọng, bao gồm chi tiết cá nhân và hồ sơ học tập.</p></li><li><p><strong>Quản lý Khóa học:</strong></p><p>- Cung cấp chức năng cho quản trị viên để quản lý các khóa học được cung cấp bởi trường đại học.&nbsp;</p><p>- Gán sinh viên vào các khóa học dựa trên chương trình học của họ.</p></li><li><p><strong>Xác thực và Ủy quyền Người dùng:</strong></p><p>- Đảm bảo xác thực người dùng an toàn cho sinh viên, giảng viên và quản trị viên.</p><p>- Triển khai kiểm soát truy cập dựa trên vai trò để hạn chế chức năng hệ thống dựa trên vai trò người dùng.</p></li></ol>', '27/06/2024', 1700000, 0, 1700000, 0, 1),
(56, 'Đặng Quí Bình', 'HTML - Clone 2 page', '<p><a href=\"https://animetvn4.com/:\">https://animetvn4.com/</a></p><ul><li>Tìm kiếm nâng cao</li><li>Random</li></ul>', '28/05/2024', 250000, 0, 250000, 1, 2),
(57, 'Nguyễn Văn Đông', 'PHP - Website review', '', '28/05/2024', 300000, 0, 300000, 1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `todo`
--

CREATE TABLE `todo` (
  `id` int(11) NOT NULL,
  `information` varchar(200) NOT NULL,
  `process` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `todo`
--

INSERT INTO `todo` (`id`, `information`, `process`) VALUES
(7, 'Test 3 src PHP', 1),
(9, 'Giải thích code cho Nhi', 2),
(10, 'Upload website trường THPT lên nghianopro.site', 1),
(11, 'Update taskmanager', 2),
(12, 'Run code nội thất', 2),
(13, 'Update thêm phần quản lý src code', 2),
(14, 'Lọc và thêm project demo', 1),
(16, 'Upload code lên gg drive để nộp CV', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `deadline`
--
ALTER TABLE `deadline`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `deadline`
--
ALTER TABLE `deadline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT cho bảng `todo`
--
ALTER TABLE `todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
