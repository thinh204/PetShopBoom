-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 11, 2024 lúc 06:27 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_bill`
--

CREATE TABLE `tbl_bill` (
  `id` int(12) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `total` int(12) NOT NULL,
  `pttt` tinyint(1) NOT NULL COMMENT '0: tiền mặt, 1:ck, 2: thanh toán thè'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_bill`
--

INSERT INTO `tbl_bill` (`id`, `name`, `address`, `tel`, `email`, `total`, `pttt`) VALUES
(134, 'thinh', 'quận bình thạnh', '0798886942', 'huythinh592@gmai.com', 0, 0),
(135, 'thinh', 'quận bình thạnh', '0798886942', 'huythinh592@gmai.com', 0, 0),
(136, 'thinh', 'quận bình thạnh', '0798886942', 'huythinh592@gmai.com', 0, 0),
(137, 'thinh', 'quận bình thạnh', '0798886942', 'huythinh592@gmai.com', 0, 0),
(138, 'thinh', 'quận bình thạnh', '0798886942', 'huythinh592@gmai.com', 0, 0),
(139, 'thinh', 'quận bình thạnh', '0798886942', 'huythinh592@gmai.com', 0, 0),
(140, 'thinh', 'quận bình thạnh', '0798886942', 'huythinh592@gmai.com', 0, 0),
(141, 'thinh', 'quận bình thạnh', '0798886942', 'huythinh592@gmai.com', 0, 0),
(142, 'thinh', 'quận bình thạnh', '0798886942', 'huythinh592@gmai.com', 0, 0),
(143, 'thinh', 'quận bình thạnh', '0798886942', 'huythinh592@gmai.com', 0, 0),
(144, 'thinh', 'quận bình thạnh', '0798886942', 'huythinh592@gmai.com', 0, 0),
(145, 'thinh', 'quận bình thạnh', '0798886942', 'huythinh592@gmai.com', 0, 0),
(146, 'thinh', 'quận bình thạnh', '0798886942', 'huythinh592@gmai.com', 0, 0),
(147, 'thinh', 'quận bình thạnh', '0798886942', 'huythinh592@gmai.com', 0, 0),
(148, 'thinh', 'quận bình thạnh', '0798886942', 'huythinh592@gmai.com', 0, 0),
(149, 'thinh', 'quận bình thạnh', '0798886942', 'huythinh592@gmai.com', 0, 0),
(150, 'thinh', 'quận bình thạnh', '0798886942', 'huythinh592@gmai.com', 0, 0),
(151, 'thinh', 'quận bình thạnh', '0798886942', 'huythinh592@gmai.com', 0, 0),
(152, 'thinh', 'quận bình thạnh', '0798886942', 'huythinh592@gmai.com', 0, 0),
(153, 'thinh', 'quận bình thạnh', '0798886942', 'huythinh592@gmai.com', 0, 0),
(164, 'thinh', 'quận bình thạnh', '0798886942', 'huythinh592@gmai.com', 0, 0),
(165, 'thinh', 'quận bình thạnh', '0798886942', 'huythinh592@gmai.com', 0, 0),
(166, 'huy thinh', 'quận bình thạnh', '0798886942', 'huythinh592@gmai.com', 0, 0),
(167, 'huy thinh', 'quận bình thạnh', '0798886942', 'huythinh592@gmai.com', 0, 0),
(168, 'huy thinh', 'quận bình thạnh', '0798886942', 'huythinh592@gmai.com', 0, 0),
(169, 'huy thinh ', 'quận bình thạnh', '0798886942', 'huythinh592@gmai.com', 0, 0),
(170, 'huy thinh ', 'quận bình thạnh', '0798886942', 'huythinh592@gmai.com', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id` int(12) NOT NULL,
  `tensp` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `gia` int(12) NOT NULL,
  `soluong` int(3) NOT NULL,
  `tongtien` int(12) NOT NULL,
  `idbill` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id` int(4) NOT NULL,
  `tendm` varchar(50) NOT NULL,
  `uutien` int(4) NOT NULL DEFAULT 0,
  `hienthi` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id`, `tendm`, `uutien`, `hienthi`) VALUES
(4, 'hotb', 0, 1),
(5, 'ten danh muc ', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id` int(6) NOT NULL,
  `tensp` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `gia` double(10,2) NOT NULL DEFAULT 0.00,
  `iddm` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `usersId` int(4) NOT NULL,
  `usersName` varchar(50) DEFAULT NULL,
  `usersEmail` varchar(50) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(300) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`, `role`) VALUES
(13, 'thinh', 'Huythinh592@gmail.com', '', '$2y$10$FfU62KQ8lwH1DnGT5GwMGerwx0Q0bVaIl9SUM4qYENUDmiFK8Mg/O', 0),
(14, NULL, 'admin', '', '$2y$10$6Zbx3.3TsohHJNSqolki2O3.WaUVCxpU2wY8SuQqQz01fYQXMmdD6', 1),
(15, 'huy', 'thinh@gmail.com', '', '$2y$10$eApYRYlwpUFB2jvqOihqNuVEIqyDcYNa83PSoFfPz8JAlMxGpGbUq', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_bill`
--
ALTER TABLE `tbl_bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sanpham_danhmuc` (`iddm`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_bill`
--
ALTER TABLE `tbl_bill`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD CONSTRAINT `fk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `tbl_danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
