-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 08, 2023 lúc 06:06 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `ngaybinhluan` varchar(255) NOT NULL,
  `is_hidden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`, `is_hidden`) VALUES
(19, 'Đúng với mô tả: tốt Chất lượng sản phẩm: tot 2 bộ gumdam. Hàng rất tốt. Người giao hàng đúng hạn. Sẽ ủng hộ shop dài dài. Hình ảnh mang tính mình họa.', 23, 55, '2023-12-06', 0),
(20, 'đúng với mô tả chất liệu tốt người giao đúng hàng shop nhiệt tình', 23, 55, '2023-12-06', 0),
(21, 'đúng với mô tả chất liệu tốt người giao đúng hàng shop nhiệt tình', 23, 55, '2023-12-06', 0),
(22, 'đúng với mô tả chất liệu tốt người giao đúng hàng shop nhiệt tình', 23, 55, '2023-12-06', 0),
(23, 'đúng với mô tả chất liệu tốt người giao đúng hàng shop nhiệt tình', 23, 54, '2023-12-06', 0),
(24, 'đúng với mô tả chất liệu tốt người giao đúng hàng shop nhiệt tình', 23, 53, '2023-12-06', 0),
(25, 'đúng với mô tả chất liệu tốt người giao đúng hàng shop nhiệt tình', 23, 52, '2023-12-06', 0),
(26, 'đúng với mô tả chất liệu tốt người giao đúng hàng shop nhiệt tình', 23, 51, '2023-12-06', 0),
(27, 'đúng với mô tả chất liệu tốt người giao đúng hàng shop nhiệt tình', 23, 49, '2023-12-06', 0),
(28, 'đúng với mô tả chất liệu tốt người giao đúng hàng shop nhiệt tình', 23, 48, '2023-12-06', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(3, 'GumDam03'),
(4, 'GumDam02'),
(5, 'GumDam01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id_order_detail` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_pro` int(11) NOT NULL,
  `giamua` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id_order_detail`, `id_order`, `id_pro`, `giamua`, `soluong`, `thanhtien`) VALUES
(33, 26, 54, 300, 1, 300),
(34, 27, 48, 680, 1, 680),
(35, 27, 53, 678, 1, 678),
(36, 28, 55, 888, 1, 888),
(37, 29, 55, 888, 1, 888),
(38, 30, 57, 678, 1, 678),
(39, 30, 56, 700, 1, 700),
(40, 31, 60, 577000, 1, 577000),
(41, 32, 60, 577000, 1, 577000),
(42, 32, 59, 600000, 1, 600000),
(43, 33, 58, 666000, 1, 666000),
(44, 33, 56, 700000, 1, 700000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(10) NOT NULL,
  `iddm` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `img1` text NOT NULL,
  `price` int(255) NOT NULL,
  `mota` text NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `iddm`, `name`, `img`, `img1`, `price`, `mota`, `soluong`) VALUES
(48, 5, 'Mô hình Gundam HG Shin Burning Gundam', 'anh19.jpg', 'anh20.jpg', 680000, 'Thương hiệu: Bandai\r\nChất liệu: Nhựa abs\r\nTỷ lệ: 1/144\r\nChiều cao: 15cm', 78),
(49, 5, 'MG NU GUNDAM VER. KA-Gundam Chính hãng Bandai', 'anh17.jpg', 'anh18.jpg', 700000, 'Thương hiệu: Bandai\r\nXuất xứ: Nhật Bản\r\nChất liệu:Nhựa abs', 70),
(51, 4, 'DABAN MG GUNDAM FREEDOM 2.0', 'anh11.jpg', 'anh12.jpg', 780000, 'Thương hiệu: Daban\r\nXuất xứ: Trung Quốc\r\nChất liệu: Nhựa abs', 55),
(52, 3, '1/100 GUNDAM BARBATOS LUPUS REX-Gundam Chính hãng Bandai', 'anh13.jpg', 'anh14.jpg', 980000, 'Thương hiệu: Bandai\r\nXuất xứ: Nhật Bản\r\nChất liệu: Nhựa abs', 45),
(53, 3, 'MG GUNDAM F91 2.0-Gundam Chính hãng Bandai', 'anh9.jpg', 'anh10.jpg', 678000, 'Thương hiệu: Bandai\r\nXuất xứ: Nhật Bản\r\nChất liệu: Nhựa abs', 33),
(54, 5, 'MG INFINITY JUSTICE GUNDAM-Gundam Chính hãng Bandai', 'anh7.jpg', 'anh8.jpg', 300000, 'Thương hiệu: Bandai\r\nXuất xứ: Nhật Bản\r\nChất liệu: Nhựa abs', 24),
(55, 4, 'DABAN 1/100 MG SAZABI VER.KA', 'anh3.jpg', 'anh4.jpg', 888000, 'Thương hiệu: Daban\r\nXuất xứ: Trung Quốc\r\nChất liệu: Nhựa abs', 88),
(56, 5, 'Mô Hình Bandai Gundam RG 00 Raiser', 'anh1.jpg', 'anh2.jpg', 700000, 'Sản phẩm Gunpla chính hãng của Bandai, sản xuất tại Nhật Bản.\r\n\r\nPHIÊN BẢN : RG\r\n\r\nChiều cao: 13-16cm\r\n\r\nSản Phẩm có khung xương tăng độ cử động linh hoạt\r\n\r\nPHÂN LOẠI SP : LẮP RÁP\r\n\r\nKhông kèm đế dựng tuy nhiên bạn có thể mua đế trưng bày với giá rất rẻ ngay tại shop\r\n\r\nDecal dán\r\n\r\n– An toàn với trẻ em\r\n\r\n– Phát triển trí não IQ cho trẻ hiệu quả đi đôi với niềm vui thích bất tận\r\n\r\n– Kích thích trí tưởng tượng không gian hình học và tính logic cho trẻ\r\n\r\n– Rèn luyện tính kiên nhẫn, tỉ mỉ, cẩn thận và tự lập cho người chơi\r\n\r\n– Tránh cho trẻ thường xuyên sử dụng điện thoại\r\n\r\n– Phân phối bởi TAB Store- Vì một trí tuệ Việt Nam', 30),
(57, 4, 'Mô Hình Bandai Gundam RG 01 RX 78 2', 'images (10).jpg', 'images (8).jpg', 678000, 'Sản phẩm Gunpla chính hãng của Bandai, sản xuất tại Nhật Bản.\r\n\r\nPHIÊN BẢN : RG\r\n\r\nChiều cao: 13-16cm\r\n\r\nSản Phẩm có khung xương tăng độ cử động linh hoạt\r\n\r\nPHÂN LOẠI SP : LẮP RÁP\r\n\r\nKhông kèm đế dựng tuy nhiên bạn có thể mua đế trưng bày với giá rất rẻ ngay tại shop\r\n\r\nDecal dán\r\n\r\n– An toàn với trẻ em\r\n\r\n– Phát triển trí não IQ cho trẻ hiệu quả đi đôi với niềm vui thích bất tận\r\n\r\n– Kích thích trí tưởng tượng không gian hình học và tính logic cho trẻ\r\n\r\n– Rèn luyện tính kiên nhẫn, tỉ mỉ, cẩn thận và tự lập cho người chơi\r\n\r\n– Tránh cho trẻ thường xuyên sử dụng điện thoại\r\n\r\n– Phân phối bởi TAB Store- Vì một trí tuệ Việt Nam', 4),
(58, 4, 'Mô Hình Bandai Gundam RG 01 RX 78 ', 'images (4).jpg', '239406b9588a74f3a02f7252c07f873e.jpg', 666000, 'Sản phẩm Gunpla chính hãng của Bandai, sản xuất tại Nhật Bản.\r\n\r\nPHIÊN BẢN : RG\r\n\r\nChiều cao: 13-16cm\r\n\r\nSản Phẩm có khung xương tăng độ cử động linh hoạt\r\n\r\nPHÂN LOẠI SP : LẮP RÁP\r\n\r\nKhông kèm đế dựng tuy nhiên bạn có thể mua đế trưng bày với giá rất rẻ ngay tại shop\r\n\r\nDecal dán\r\n\r\n– Sản phẩm nhựa cao cấp với độ sắc nét cao\r\n\r\n– An toàn với trẻ em\r\n\r\n– Phát triển trí não IQ cho trẻ hiệu quả đi đôi với niềm vui thích bất tận\r\n\r\n– Kích thích trí tưởng tượng không gian hình học và tính logic cho trẻ\r\n\r\n– Rèn luyện tính kiên nhẫn, tỉ mỉ, cẩn thận và tự lập cho người chơi\r\n\r\n– Tránh cho trẻ thường xuyên sử dụng điện thoại\r\n\r\n– Phân phối bởi TAB Store', 5),
(59, 5, 'Mô Hình Bandai Gundam RG 22 Raiser', 'images.jpg', 'images (9).jpg', 600000, 'Sản phẩm Gunpla chính hãng của Bandai, sản xuất tại Nhật Bản.\r\n\r\nPHIÊN BẢN : RG\r\n\r\nChiều cao: 13-16cm\r\n\r\nSản Phẩm có khung xương tăng độ cử động linh hoạt\r\n\r\nPHÂN LOẠI SP : LẮP RÁP\r\n\r\nKhông kèm đế dựng tuy nhiên bạn có thể mua đế trưng bày với giá rất rẻ ngay tại shop\r\n\r\nDecal dán\r\n\r\n– Sản phẩm nhựa cao cấp với độ sắc nét cao\r\n\r\n– An toàn với trẻ em\r\n\r\n– Phát triển trí não IQ cho trẻ hiệu quả đi đôi với niềm vui thích bất tận\r\n\r\n– Kích thích trí tưởng tượng không gian hình học và tính logic cho trẻ\r\n\r\n– Rèn luyện tính kiên nhẫn, tỉ mỉ, cẩn thận và tự lập cho người chơi\r\n\r\n– Tránh cho trẻ thường xuyên sử dụng điện thoại\r\n\r\n– Phân phối bởi TAB Store', 6),
(60, 5, 'Mô Hình Bandai Gundam RG 01 RX ', 'images (3).jpg', 'images (1).jpg', 577000, 'Sản phẩm Gunpla chính hãng của Bandai, sản xuất tại Nhật Bản.\r\n\r\nPHIÊN BẢN : RG\r\n\r\nChiều cao: 13-16cm\r\n\r\nSản Phẩm có khung xương tăng độ cử động linh hoạt\r\n\r\nPHÂN LOẠI SP : LẮP RÁP\r\n\r\nKhông kèm đế dựng tuy nhiên bạn có thể mua đế trưng bày với giá rất rẻ ngay tại shop\r\n\r\nDecal dán\r\n\r\n– Sản phẩm nhựa cao cấp với độ sắc nét cao\r\n\r\n– An toàn với trẻ em\r\n\r\n– Phát triển trí não IQ cho trẻ hiệu quả đi đôi với niềm vui thích bất tận\r\n\r\n– Kích thích trí tưởng tượng không gian hình học và tính logic cho trẻ\r\n\r\n– Rèn luyện tính kiên nhẫn, tỉ mỉ, cẩn thận và tự lập cho người chơi\r\n\r\n– Tránh cho trẻ thường xuyên sử dụng điện thoại\r\n\r\n– Phân phối bởi TAB Store', 67);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham_img`
--

CREATE TABLE `sanpham_img` (
  `id` int(10) NOT NULL,
  `id_sanpham` int(10) NOT NULL,
  `name_sanpham` varchar(255) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham_img`
--

INSERT INTO `sanpham_img` (`id`, `id_sanpham`, `name_sanpham`, `img`) VALUES
(5, 0, 'dfsf', 'z4233758676774_be5ae553dd995eff9a1b2741046b2fd7.jpg'),
(6, 0, 'fsadf', 'z4233758676774_be5ae553dd995eff9a1b2741046b2fd7.jpg'),
(7, 0, 'sdfadf', 'z4233758676774_be5ae553dd995eff9a1b2741046b2fd7.jpg'),
(8, 0, 'vsvxc', 'z4543764999818_f1c4c91bf04de0f024d86830f587738c.jpg'),
(9, 0, 'á', 'z4233758676774_be5ae553dd995eff9a1b2741046b2fd7.jpg'),
(10, 0, 'Tạ Công Chiến', 'z4233758676774_be5ae553dd995eff9a1b2741046b2fd7.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(10) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `role` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `password`, `fullname`, `email`, `tel`, `address`, `role`) VALUES
(23, 'Hello', '1111', 'kynguyen', 'kynguyen200004@gmail.com', '0345081831', 'hưng yên ', 0),
(25, 'Hello1', '1111', 'Ngô Thành Đạt', 'dngo98133@gmail.com', '0911999123', 'Nhà Trên Sao Diêm Vương', 1),
(27, 'ky', '12345', 'Nguyễn Bá Kỳ', 'kynguyen200004@gmail.com', '0345081831', 'hưng yên', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `sdt` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `tongtien` int(11) NOT NULL,
  `pttt` tinyint(4) NOT NULL COMMENT '1. Thanh toán khi nhận hàng\r\n2. Chuyển khoản',
  `ngaydathang` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(4) NOT NULL DEFAULT 1 COMMENT '1. Đang chờ duyệt\r\n2. Đã xác nhận\r\n3. Đang vận chuyển\r\n4. Hoàn thành',
  `TrangthaiTT` int(10) NOT NULL COMMENT '0.Chưa thanh toán 1. đã thanh toán'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`id_order`, `id_user`, `hoten`, `sdt`, `email`, `diachi`, `tongtien`, `pttt`, `ngaydathang`, `status`, `TrangthaiTT`) VALUES
(26, 23, 'nguyen ky', '0345081831', 'kynguyen200004@gmail.com', 'hưng yên', 315, 1, '2023-12-05 02:10:42', 1, 0),
(27, 23, 'nguyen ky', '0345081831', 'kynguyen200004@gmail.com', 'hưng yên', 1459, 1, '2023-12-03 02:22:51', 2, 1),
(28, 26, 'nguyen ky', '0345081831', 'kynguyen200004@gmail.com', 'hưng yên', 932, 1, '2023-12-04 02:39:26', 2, 0),
(29, 27, 'Nguyễn Bá Kỳ', '0345081831', 'kynguyen200004@gmail.com', 'hưng yên', 932, 1, '2023-12-07 02:42:19', 4, 1),
(30, 27, 'Nguyễn Bá Kỳ', '0345081831', 'kynguyen200004@gmail.com', 'hưng yên', 1481, 1, '2023-12-07 15:32:58', 1, 0),
(31, 25, 'Ngô Thành Đạt', '0911999123', 'dngo98133@gmail.com', 'Đức Diễn', 605850, 1, '2023-12-04 16:30:38', 0, 0),
(32, 25, 'Ngô Thành Đạt', '0911999123', 'dngo98133@gmail.com', 'Nhà Trên Sao Diêm Vương', 1265850, 1, '2023-12-05 16:40:56', 3, 0),
(33, 25, 'Ngô Thành Đạt', '0911999123', 'dngo98133@gmail.com', 'Nhà Trên Sao Diêm Vương', 1469300, 2, '2023-12-07 16:43:09', 3, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `idpro` (`idpro`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id_order_detail`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddm` (`iddm`);

--
-- Chỉ mục cho bảng `sanpham_img`
--
ALTER TABLE `sanpham_img`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sanpham` (`id_sanpham`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id_order`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id_order_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT cho bảng `sanpham_img`
--
ALTER TABLE `sanpham_img`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
