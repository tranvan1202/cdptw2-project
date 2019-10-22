-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 22, 2019 lúc 08:15 AM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cdw2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `burgers`
--

CREATE TABLE `burgers` (
  `id` int(11) NOT NULL,
  `name` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `img` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `burgers`
--

INSERT INTO `burgers` (`id`, `name`, `des`, `price`, `img`) VALUES
(1, 'Burgers 01', 'Classic marinara sauce, authentic old-world pepperoni,...', 2.6, '06-01.png'),
(2, 'Burgers 02', 'Classic marinara sauce, authentic old-world pepperoni,...', 3.8, '06-02.png'),
(3, 'Burgers 03', 'Classic marinara sauce, authentic old-world pepperoni,...', 2.6, '06-03.png'),
(4, 'Burgers 04', 'Classic marinara sauce, authentic old-world pepperoni,...', 2.6, '06-04.png'),
(5, 'Burgers 05', 'Classic marinara sauce, authentic old-world pepperoni,...', 2.6, '06-01.png'),
(6, 'Burgers 06', 'Classic marinara sauce, authentic old-world pepperoni,...', 3.8, '06-02.png'),
(7, 'Burgers 07', 'Classic marinara sauce, authentic old-world pepperoni,...', 2.6, '06-03.png'),
(8, 'Burgers 08', 'Classic marinara sauce, authentic old-world pepperoni,...', 2.6, '06-04.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `desserts`
--

CREATE TABLE `desserts` (
  `id` int(11) NOT NULL,
  `name` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `img` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `desserts`
--

INSERT INTO `desserts` (`id`, `name`, `des`, `price`, `img`) VALUES
(1, 'Desserts 01', 'Classic marinara sauce, authentic old-world pepperoni,...', 6.9, '06-09.png'),
(2, 'Desserts 02', 'Classic marinara sauce, authentic old-world pepperoni,...', 6.9, '06-10.png'),
(3, 'Desserts 03', 'Classic marinara sauce, authentic old-world pepperoni,...', 6.9, '06-11.png'),
(4, 'Desserts 04', 'Classic marinara sauce, authentic old-world pepperoni,...', 6.9, '06-12.png'),
(5, 'Desserts 05', 'Classic marinara sauce, authentic old-world pepperoni,...', 6.9, '06-09.png'),
(6, 'Desserts 06', 'Classic marinara sauce, authentic old-world pepperoni,...', 6.9, '06-10.png'),
(7, 'Desserts 07', 'Classic marinara sauce, authentic old-world pepperoni,...', 6.9, '06-11.png'),
(8, 'Desserts 08', 'Classic marinara sauce, authentic old-world pepperoni,...', 6.9, '06-12.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `img` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `des`, `price`, `img`) VALUES
(1, 'Cabonara', 'Classic marinara sauce, authentic old-world pepperoni, all-natura', 6.9, '04-01.png'),
(2, 'Capricciosa', 'Classic marinara sauce, authentic old-world pepperoni, all-natura', 2.9, '04-02.png'),
(3, 'Prosciutto', 'Classic marinara sauce, authentic old-world pepperoni, all-natura', 3.5, '04-03.png'),
(4, 'Diablo', 'Classic marinara sauce, authentic old-world pepperoni, all-natura', 3.5, '04-04.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `burgers`
--
ALTER TABLE `burgers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `desserts`
--
ALTER TABLE `desserts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `burgers`
--
ALTER TABLE `burgers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `desserts`
--
ALTER TABLE `desserts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
