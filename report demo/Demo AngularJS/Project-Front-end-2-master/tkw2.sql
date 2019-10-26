-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2019 at 06:07 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tkw2`
--

-- --------------------------------------------------------

--
-- Table structure for table `feture`
--

CREATE TABLE `feture` (
  `f_id` int(11) NOT NULL,
  `f_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `f_infomation` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `f_product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `feture`
--

INSERT INTO `feture` (`f_id`, `f_name`, `f_infomation`, `f_product_id`) VALUES
(1, 'Màn Hình', 'LED-backlit IPS LCD, 3.5\", DVGA', 1),
(2, 'Pin', '1420 mAh', 1),
(3, 'Hệ điều hành:', 'iOS 7.0', 1),
(4, 'Camera sau:', '5 MP', 1),
(5, 'Camera trước:', 'VGA (0.3 MP)', 1),
(6, 'Màn hình:', 'LED-backlit IPS LCD, 3.5\", DVGA', 2),
(7, 'Hệ điều hành:', 'iOS 8.0', 2),
(8, 'Camera sau:', '8 MP', 2),
(9, 'Camera trước:', 'VGA (0.3 MP)', 2),
(10, 'Dung lượng pin:', '1420 mAh', 2),
(11, 'Màn hình:', 'LED-backlit IPS LCD, 4\", DVGA', 3),
(12, 'Hệ điều hành:', 'iOS 6', 3),
(13, 'Camera sau:', '8 MP', 3),
(14, 'Camera trước:', '1.2 MP', 3),
(15, 'Dung lượng pin:', '1440 mAh', 3),
(16, 'Màn hình:', 'LED-backlit IPS LCD, 4\", DVGA', 4),
(17, 'Hệ điều hành:', 'iOS 10', 4),
(18, 'Camera sau:', '8 MP', 4),
(19, 'Camera trước:', '1.2 MP', 4),
(20, 'Dung lượng pin:', '1560 mAh', 4),
(21, 'Màn hình:', 'LED-backlit IPS LCD, 4.7\", Retina HD', 5),
(22, 'Hệ điều hành:	', 'iOS 11', 5),
(23, 'Camera sau:', '8 MP', 5),
(24, 'Camera trước:', '1.2 MP', 5),
(25, 'Dung lượng pin:', '1810 mAh', 5),
(26, 'Màn hình:', 'LED-backlit IPS LCD, 5.5\", Retina HD', 6),
(27, 'Hệ điều hành:', 'iOS 11', 6),
(28, 'Camera sau:', '12 MP', 6),
(29, 'Camera trước:', '5 MP', 6),
(30, 'Dung lượng pin:', '2750 mAh', 6),
(31, 'Màn hình:', 'LED-backlit IPS LCD, 4.7\", Retina HD', 7),
(32, 'Hệ điều hành:', 'iOS 11', 7),
(33, 'Camera sau:', '12 MP', 7),
(34, 'Camera trước:', '7 MP', 7),
(35, 'Dung lượng pin:', '1960 mAh', 7),
(36, 'Màn hình:', 'LED-backlit IPS LCD, 5.5\", Retina HD', 8),
(37, 'Hệ điều hành:', 'iOS 11', 8),
(38, 'Camera sau:', '2 camera 12 MP', 8),
(39, 'Camera trước:', '7 MP', 8),
(40, 'Dung lượng pin:', '2900 mAh', 8),
(41, 'Màn hình:', 'LED-backlit IPS LCD, 5.5\", Retina HD', 9),
(42, 'Hệ điều hành:', 'iOS 11', 9),
(43, 'Camera sau:', '2 camera 12 MP', 9),
(44, 'Camera trước:', '7 MP', 9),
(45, 'Dung lượng pin:', '2691 mAh, có sạc nhanh', 9),
(46, 'Màn hình:', 'OLED, 5.8\", Super Retina', 10),
(47, 'Hệ điều hành:', 'iOS 11', 10),
(48, 'Camera sau:', '2 camera 12 MP', 10),
(49, 'Camera trước:', '7 MP', 10),
(50, 'Dung lượng pin:', '2716 mAh, có sạc nhanh', 10),
(51, 'Màn hình:', 'LTPS LCD, 6.3\", Full HD+', 11),
(52, 'Hệ điều hành:', 'ColorOS 5.2 (Android 8.1)', 11),
(53, 'Camera sau:', '16 MP và 2 MP (2 camera)', 11),
(54, 'Camera trước:', '25 MP', 11),
(55, 'Dung lượng pin:', '3500 mAh, có sạc nhanh', 11),
(56, 'Màn hình:', 'AMOLED, 6.42\", Full HD+', 12),
(57, 'Hệ điều hành:', 'Android 8.1 (Oreo)', 12),
(58, 'Camera sau:', '20 MP và 16 MP (2 camera)', 12),
(59, 'Camera trước:', '25 MP', 12),
(62, 'Dung lượng pin:', '3730 mAh, có sạc nhanh', 12),
(63, 'Màn hình:', 'LTPS LCD, 6.23\", Full HD+', 13),
(64, 'Hệ điều hành:', 'ColorOS 5.0 (Android 8.1)', 13),
(65, 'Camera sau:', '16 MP', 13),
(66, 'Camera trước:', '25 MP', 13),
(67, 'Dung lượng pin:', '3400 mAh', 13),
(68, 'Màn hình:', 'IPS LCD, 6.0\", Full HD+', 14),
(69, 'Hệ điều hành:', 'ColorOS 3.2 (Android 7.1)', 14),
(70, 'Camera sau:', '13 MP', 14),
(71, 'Camera trước:', '16 MP', 14),
(72, 'Dung lượng pin:', '3200 mAh', 14),
(73, 'Màn hình:', 'IPS LCD, 5.5\", Full HD', 15),
(74, 'Hệ điều hành:', 'Android 6.0 (Marshmallow)', 15),
(75, 'Camera sau:', '13 MP', 15),
(76, 'Camera trước:', '16 MP và 8 MP', 15),
(77, 'Dung lượng pin', '3200 mAh', 15),
(78, 'Màn hình:', 'AMOLED, 5.5\", Full HD', 16),
(79, 'Hệ điều hành:', 'Android 5.1 (Lollipop)', 16),
(80, 'Camera sau:', '13 MP', 16),
(81, 'Camera trước:', '16 MP', 16),
(82, 'Dung lượng pin', '2850mAh', 16),
(83, 'Màn hình:', 'IPS LCD, 6.0\", Full HD', 17),
(84, 'Hệ điều hành:', 'Android 6.0 (Marshmallow)', 17),
(85, 'Camera sau:', '16 MP', 17),
(86, 'Camera trước:', '16 MP và 8 MP', 17),
(87, 'Dung lượng pin:', '4000 mAh, có sạc nhanh', 17),
(88, 'Màn hình:', 'IPS LCD, 5.2\", HD', 18),
(89, 'Hệ điều hành:', 'Android 7.1 (Nougat)', 18),
(90, 'Camera sau:', '13 MP', 18),
(91, 'Camera trước:', '5 MP', 18),
(92, 'Dung lượng pin:', '3000 mAh', 18),
(93, 'Màn hình:', 'IPS LCD, 6.2\", HD+', 19),
(94, 'Hệ điều hành:', 'Android 8.1 (Oreo)', 19),
(95, 'Camera sau:', '13 MP và 2 MP (2 camera)', 19),
(96, 'Camera trước:', '8 MP', 19),
(97, 'Dung lượng pin:', '4230 mAh', 19),
(98, 'Màn hình:', 'IPS LCD, 5.7\", HD+', 20),
(99, 'Hệ điều hành:', 'Android 7.1 (Nougat)', 20),
(100, 'Camera sau:', '13 MP', 20),
(101, 'Camera trước:', '8 MP', 20),
(102, 'Dung lượng pin:', '3180 mAh', 20),
(103, 'Màn hình:', 'Super AMOLED, 6.4\", Quad HD+ (2K+)', 21),
(104, 'Hệ điều hành:', 'Android 8.1 (Oreo)', 21),
(105, 'Camera sau:', '2 camera 12 MP', 21),
(106, 'Camera trước:', '8 MP', 21),
(107, 'Dung lượng pin:', '4000 mAh, có sạc nhanh', 21),
(108, 'Màn hình:', 'Super AMOLED, 6.2\", Quad HD+ (2K+)', 22),
(109, 'Hệ điều hành:', 'Android 8.0 (Oreo)', 22),
(110, 'Camera sau:', '2 camera 12 MP', 22),
(111, 'Camera trước:', '8 MP', 22),
(112, 'Dung lượng pin:', '3500 mAh, có sạc nhanh', 22),
(113, 'Màn hình:', 'Super AMOLED, 6.3\", Quad HD+ (2K+)', 23),
(114, 'Hệ điều hành:', 'Android 7.1 (Nougat)', 23),
(115, 'Camera sau:', '2 camera 12 MP', 23),
(116, 'Camera trước:', '8 MP', 23),
(117, 'Dung lượng pin:', '3300 mAh, có sạc nhanh', 23),
(118, 'Màn hình:', 'Super AMOLED, 6.2\", Quad HD+ (2K+)', 24),
(119, 'Hệ điều hành:', 'Android 7.0 (Nougat)', 24),
(120, 'Camera sau:', '12 MP', 24),
(121, 'Camera trước:', '8 MP', 24),
(122, 'Dung lượng pin:', '3500 mAh, có sạc nhanh', 24),
(123, 'Màn hình:', 'Super AMOLED, 6\", Full HD+', 25),
(124, 'Hệ điều hành:', 'Android 7.1 (Nougat)', 25),
(125, 'Camera sau:', '16 MP', 25),
(126, 'Camera trước:', '16 MP và 8 MP', 25),
(127, 'Dung lượng pin:', '3500 mAh, có sạc nhanh', 25),
(128, 'Màn hình:', 'Super AMOLED, 6.3\", Full HD+', 26),
(129, 'Hệ điều hành:', 'Android 8.0 (Oreo)', 26),
(130, 'Camera sau:', '24 MP và 16 MP (2 camera)', 26),
(131, 'Camera trước:', '24 MP', 26),
(132, 'Dung lượng pin:', '3700 mAh, có sạc nhanh', 26),
(133, 'Màn hình:', 'Super AMOLED, 6.0\", Full HD+', 27),
(134, 'Hệ điều hành:', 'Android 8.0 (Oreo)', 27),
(135, 'Camera sau:', '24 MP, 8 MP và 5 MP (3 camera)', 27),
(136, 'Camera trước:', '24 MP', 27),
(137, 'Dung lượng pin:', '3300 mAh', 27),
(138, 'Màn hình:', 'Super AMOLED, 6\", Full HD+', 28),
(139, 'Hệ điều hành:', 'Android 8.0 (Oreo)', 28),
(140, 'Camera sau:', '16 MP và 5 MP (2 camera)', 28),
(141, 'Camera trước:', '24 MP', 28),
(142, 'Dung lượng pin:', '3500 mAh', 28),
(143, 'Màn hình:', 'Super AMOLED, 5.5\", Full HD', 29),
(144, 'Hệ điều hành:', 'Android 7.0 (Nougat)', 29),
(145, 'Camera sau:', '13 MP và 5 MP (2 camera)', 29),
(146, 'Camera trước:', '16 MP', 29),
(147, 'Dung lượng pin:', '3000 mAh', 29),
(148, 'Màn hình:', 'IPS LCD, 6.0\", HD+', 30),
(149, 'Hệ điều hành:', 'Android 8.1 (Oreo)', 30),
(150, 'Camera sau:', '13 MP và 5 MP (2 camera)', 30),
(151, 'Camera trước:', '8 MP', 30),
(152, 'Dung lượng pin:', '3300 mAh', 30),
(153, 'Màn hình:', 'Super AMOLED, 5.5\", HD', 31),
(154, 'Hệ điều hành:', 'Android 8.0 (Oreo)', 31),
(155, 'Camera sau:', '13 MP', 31),
(156, 'Camera trước:', '5 MP', 31),
(157, 'Dung lượng pin:', '3000 mAh', 31),
(158, 'Màn hình:', 'PLS TFT LCD, 5\", HD', 32),
(159, 'Hệ điều hành:', 'Android 7.0 (Nougat)', 32),
(160, 'Camera sau:', '13 MP', 32),
(161, 'Camera trước:', '5 MP', 32),
(162, 'Dung lượng pin:', '2400 mAh', 32),
(163, 'Màn hình:', 'Super AMOLED, 5\", qHD', 33),
(164, 'Hệ điều hành:', 'Android 7.1 (Nougat)', 33),
(165, 'Camera sau:', '8 MP', 33),
(166, 'Camera trước:', '5 MP', 33),
(167, 'Dung lượng pin:', '2600 mAh', 33),
(168, 'Màn hình :', '9.7 inch, 2048 x 1536 pixel', 34),
(169, 'Hệ điều hành :', 'IOS', 34),
(170, 'Camera trước :', '1.2 MP', 34),
(171, 'Camera sau :', '8 MP', 34),
(172, 'Thời gian sử dụng :', '10 giờ', 34),
(173, 'Màn hình', 'LED Backlit IPS LCD, 9.7\"', 35),
(174, 'Hệ điều hành', 'iOS 9', 35),
(175, 'Camera sau', '5 MP', 35),
(176, 'Camera trước', '1.2 MP', 35),
(177, 'Thơi gian sử dụng :', '10 giờ', 35),
(178, 'Màn hình', 'Super AMOLED, 10.5\"', 36),
(179, 'Hệ điều hành', 'Android 8.0', 36),
(180, 'Camera sau', '13 MP', 36),
(181, 'Camera trước', '8 MP', 36),
(182, 'Dung lượng pin', '7300 mAh', 36),
(183, 'Màn hình', 'Super AMOLED, 9.7\"', 37),
(184, 'Hệ điều hành', 'Android 7.0', 37),
(185, 'Camera sau', '13 MP', 37),
(186, 'Camera trước', '5 MP', 37),
(187, 'Dung lượng pin', '6000 mAh', 37),
(188, 'Màn hình', 'IPS LCD, 10.5\"', 38),
(189, 'Hệ điều hành', 'Android 8.0', 38),
(190, 'Camera sau', '8 MP', 38),
(191, 'Camera trước', '5 MP', 38),
(192, 'Dung lượng pin', '7300 mAh', 38),
(193, 'Màn hình:', '14 inch HD (1366 x 768 pixels)', 39),
(194, 'Đồ họa:', ' Intel HD Graphics 3000, Share', 39),
(195, 'Đĩa quang: ', 'DVD Super Multi Double Layer', 39),
(196, 'Hệ điều hành:', 'Free Dos. Trọng lượng: 2.06 kg', 39),
(197, 'Bộ nhớ:', 'DDR3 (2 khe RAM), 2 GB (1 thanh). Đĩa cứng: 500 GB', 39),
(198, 'Màn hình', '14 inch 1366 x 768 pixels', 40),
(199, 'hệ điều hành:', 'Windows 8', 40),
(200, 'Hỗ trợ RAM', '8 GB', 40),
(201, 'Bộ vi xử lí đồ họa:', 'NVidia GeForce GT 620M', 40),
(202, 'Pin', 'Lithium-ion', 40),
(203, 'Màn hình:', ' 13.3”, 2560x1600', 41),
(204, 'RAM:', '8GB/ SSD: 256GB', 41),
(205, 'VGA:', ' Intel HD Graphics 6100', 41),
(206, 'HĐH:', ' MAC OS X', 41),
(207, 'Pin:', '10 tiếng/ DVD: Không', 41),
(208, 'Tai nghe:', '18 cm C x 17 cm R x 8,1 cm S (0,24 kg)', 42),
(209, 'Cáp âm thanh:', '1,2 m', 42),
(210, 'Cáp USB:', '30,5 cm', 42),
(211, 'Dây cáp sạc USB', 'Cáp âm thanh', 42),
(212, 'Túi đựng', 'dây sạc', 42),
(213, 'Thiết kế gọn nhẹ,', 'mang tính di động cao', 43),
(214, 'Nhiều sắc màu trẻ trung', 'Chất âm chi tiết, chắc khỏe, âm bass mạnh', 43),
(215, 'Chống thấm nước ', 'chịu được va đập', 43),
(216, 'Kết nối Bluetooth nhanh chóng, ', 'Tạo âm thanh Stereo', 43),
(217, 'Thời lượng sử dụng:', ' 8 giờ', 43),
(218, 'Tai nghe:', '2,8 cm C x 2,3 cm R x 3,0 cm S (23 g)', 44),
(219, 'Túi đựng:', '8,9 cm C x 8,9 cm R x 3,6 cm S', 44),
(220, 'Kẹp cài áo', '2,5 cm C x 0,8 cm R x 1,3 cm S', 44),
(221, 'Cáp', '53,3 cm', 44),
(222, 'Kẹp cài áo', 'Kẹp cài áo', 44),
(223, 'Màn hình:', '15.6 inch, Full HD (1920 x 1080)', 45),
(224, 'RAM:', '8 GB, DDR3, 1600 MHz', 45),
(225, 'Card màn hình:	', 'Card đồ họa rời, AMD Radeon HD 8870M', 45),
(226, 'Cổng kết nối:', '2 x USB 2.0, 2 x USB 3.0, HDMI, LAN (RJ45), VGA (D-Sub)', 45),
(227, 'Tốc độ Bus', '1600 MHz', 45);

-- --------------------------------------------------------

--
-- Table structure for table `manufactures`
--

CREATE TABLE `manufactures` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `image` varchar(55) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufactures`
--

INSERT INTO `manufactures` (`id`, `name`, `image`) VALUES
(1, 'Apple', 'apple.png'),
(2, 'Oppo', 'oppo.jpg'),
(3, 'SamSung', 'samsung.png'),
(7, 'Dell', 'dell.png'),
(28, 'Asus', 'asus.png');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `manufactures` int(55) NOT NULL,
  `type` int(55) NOT NULL,
  `price` int(55) NOT NULL,
  `image` varchar(55) NOT NULL,
  `description` varchar(55) NOT NULL,
  `feature` int(55) NOT NULL,
  `installment` varchar(55) NOT NULL,
  `donate` varchar(55) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `manufactures`, `type`, `price`, `image`, `description`, `feature`, `installment`, `donate`) VALUES
(1, ' iPhone 4s', 3, 4, 1400000, 'iphone 4s.jpg', 'Chinh Hang', 1, 'Tra gop 0%', 'Phieu mua hang tri gia 200000'),
(2, ' iPhone 4', 3, 4, 2000000, 'iphone 4.jpg', 'Chinh Hang', 2, 'Tra gop 0%', 'Phieu mua hang tri gia 200000'),
(3, ' iPhone 5s', 3, 4, 3000000, 'iphone 5s.jpg', 'Chinh Hang', 3, 'Tra gop 0%', 'Phieu mua hang tri gia 200000'),
(4, ' iPhone 5', 3, 4, 3500000, 'iphone 5.jpg', 'Chinh Hang', 4, 'Tra gop 0%', 'Phieu mua hang tri gia 200000'),
(5, ' iPhone 6', 3, 4, 6000000, 'iphone6.jpg', 'Chinh Hang', 5, 'Tra gop 0%', 'Phieu mua hang tri gia 500000'),
(6, ' iPhone 6 Plus', 3, 4, 11500000, 'iphone 6 plus.jpg', 'Chinh Hang', 6, 'Tra gop 0%', 'Phieu mua hang tri gia 500000'),
(7, ' iPhone 7', 1, 1, 13990000, 'iphone 7.jpg', 'Chinh Hang', 7, 'Tra gop 0%', 'Phieu mua hang tri gia 500000'),
(8, ' iPhone 7 Plus', 1, 1, 17900000, 'iphone 7 plus.jpg', 'Chinh Hang', 8, 'Tra gop 0%', 'Phieu mua hang tri gia 500000'),
(9, ' iPhone 8 Plus', 1, 1, 20990000, 'iphone 8.jpg', 'Chinh Hang', 9, 'Tra gop 0%', 'Phieu mua hang tri gia 500000'),
(10, ' iPhone X', 1, 1, 26000000, 'iphone x.jpg', 'Chinh Hang', 10, 'Tra gop 0%', 'Phieu mua hang tri gia 2000000'),
(11, 'Oppo F9', 1, 1, 7690000, 'oppo f9.jpg', 'Chinh Hang', 11, 'Tra gop 0%', 'Phieu mua hang tri gia 150000'),
(12, 'Oppo Find X', 1, 1, 20900000, 'oppo find x.jpg', 'Chinh Hang', 12, 'Tra gop 0%', 'Goi bao hiem roi vo 1 nam'),
(13, 'Oppo F7', 1, 1, 7990000, 'oppo f7.jpg', 'Chinh Hang', 13, 'Tra gop 0%', 'Phieu mua hang tri gia 300000'),
(14, 'Oppo F5', 1, 1, 5990000, 'oppo f5.jpg', 'Chinh Hang', 14, 'Tra gop 0%', 'Phieu mua hang tri gia 150000'),
(15, 'Oppo F3', 1, 1, 3790000, 'oppo f3.jpg', 'Chinh Hang', 15, 'Tra gop 0%', 'Phieu mua hang tri gia 100000'),
(16, 'Oppo F1 Plus', 1, 1, 4690000, 'oppo f1 plus.jpg', 'Chinh Hang', 16, 'Tra gop 0%', 'Phieu mua hang tri gia 150000'),
(17, 'Oppo F3 Plus', 1, 1, 5990000, 'oppo f3 plus.jpg', 'Chinh Hang', 17, 'Tra gop 0%', 'Phieu mua hang tri gia 200000'),
(18, 'Oppo A71', 1, 1, 3190000, 'oppo a71.jpg', 'Chinh Hang', 18, 'Tra gop 0%', 'Phieu mua hang tri gia 100000'),
(19, 'Oppo A3s', 1, 1, 3690000, 'oppo a3s.jpg', 'Chinh Hang', 19, 'Tra gop 0%', 'Phieu mua hang tri gia 150000'),
(20, 'Oppo A83', 1, 1, 2990000, 'oppo a83.jpg', 'Chinh Hang', 20, 'Tra gop 0%', 'Phieu mua hang tri gia 100000'),
(21, 'Samsung Galaxy Note 9', 1, 1, 28490000, 'galaxy note 9.jpg', 'Chinh Hang', 21, 'Tra gop 0%', 'Tang 01 SmartTV Samsung '),
(22, 'Samsung Galaxy S9+', 1, 1, 24490000, 'samsum s9.jpg', 'Chinh Hang', 22, 'Tra gop 0%', 'Phieu mua hang tri gia 3500000'),
(23, 'Samsung Galaxy Note 8', 1, 1, 1990000, 'galaxy note 8.jpg', 'Chinh Hang', 23, 'Tra gop 0%', 'Loa JBL Flip 4 '),
(24, 'Samsung Galaxy S8 Plus', 1, 1, 17990000, 'galaxy s8 plus.jpg', 'Chinh Hang', 24, 'Tra gop 0%', 'Phieu mua hang tri gia 1000000'),
(25, 'Samsung Galaxy A8+', 1, 1, 13490000, 'samsum a8 plus.jpg', 'Chinh Hang', 25, 'Tra gop 0%', 'Phieu mua hang tri gia 1500000'),
(26, 'Samsung Galaxy A8', 1, 1, 10990000, 'samsum a8.jpg', 'Chinh Hang', 26, 'Tra gop 0%', 'Phieu mua hang tri gia 500000'),
(27, 'Samsung Galaxy A7', 1, 1, 8990000, 'samsum a7.jpg', 'Chinh Hang', 27, 'Tra gop 0%', 'Phieu mua hang tri gia 200000'),
(28, 'Samsung Galaxy A6+', 1, 1, 8290000, 'samsum a6.jpg', 'Chinh Hang', 28, 'Tra gop 0%', 'Phieu mua hang tri gia 1000000'),
(29, 'Samsung Galaxy J7+', 1, 1, 6990000, 'samsum j7.jpg', 'Chinh Hang', 29, 'Tra gop 0%', 'Phieu mua hang tri gia 500000'),
(30, 'Samsung Galaxy J6', 1, 1, 4590000, 'samsum j6.jpg', 'Chinh Hang', 30, 'Tra gop 0%', 'Phieu mua hang tri gia 200000'),
(31, 'Samsung Galaxy J4', 1, 1, 3490000, 'samsum j4.jpg', 'Chinh Hang', 31, 'Tra gop 0%', 'Phieu mua hang tri gia 150000'),
(32, 'Samsung Galaxy J3 Pro', 1, 1, 3190000, 'samsum j3.jpg', 'Chinh Hang', 32, 'Tra gop 0%', 'Phieu mua hang tri gia 200000'),
(33, 'Samsung Galaxy J2 Pro', 1, 1, 2990000, 'samsum j2.jpg', 'Chinh Hang', 33, 'Tra gop 0%', 'Phieu mua hang tri gia 100000'),
(34, 'iPad Air 2', 2, 2, 10990000, 'ipad 2.jpg', 'Chinh Hang', 34, 'Tra gop 0%', 'Phieu mua hang tri gia 1000000'),
(35, 'iPad Air', 2, 2, 12350000, 'air.jpg', 'Chinh Hang', 35, 'Tra gop 0%', 'Phieu mua hang tri gia 1500000'),
(36, 'Galaxy Tab S4', 2, 2, 17990000, 'tad s4.jpg', 'Chinh Hang', 36, 'Tra gop 0%', 'Phieu mua hang tri gia 1500000'),
(37, 'Galaxy Tab S3', 2, 2, 16450000, 'tad s3.jpg', 'Chinh Hang', 37, 'Tra gop 0%', 'Phieu mua hang tri gia 1000000'),
(38, 'Galaxy Tab A', 2, 2, 3290000, 'tad a.jpg', 'Chinh Hang', 38, 'Tra gop 0%', 'Phieu mua hang tri gia 150000'),
(39, 'Laptop Samsung NP300E4X', 3, 3, 9890000, 'laptop1.jpg', 'Chinh Hang', 39, 'Tra gop 0%', 'Phieu mua hang tri gia 150000'),
(40, 'Laptop Samsung NP530U4C', 3, 3, 17890000, 'laptop2.jpg', 'Chinh Hang', 40, 'Tra gop 0%', 'Phieu mua hang tri gia 1000000'),
(41, 'Macbook Pro MF840', 3, 3, 2500000, 'laptop3.jpg', 'Chinh Hang', 41, 'Tra gop 0%', 'Phieu mua hang tri gia 1000000'),
(42, 'QuietComfort 35 II', 4, 4, 8990000, 'bose.jpg', 'Chinh Hang', 42, 'Tra gop 0%', 'Phieu mua hang tri gia 500000'),
(43, 'SoundLink II', 4, 4, 7400000, 'bose2.jpg', 'Chinh Hang', 43, 'Tra gop 0%', 'Phieu mua hang tri gia 200000'),
(44, 'SoundSport Pulse', 4, 4, 4990000, 'bose3.jpg', 'Chinh Hang', 44, 'Tra gop 0%', 'Phieu mua hang tri gia 200000'),
(45, 'Samsung ATIV Book 6', 3, 3, 16990000, 'book6.jpg', 'Chinh Hang', 45, 'Tra gop 0%', 'Phieu mua hang tri gia 500000'),
(46, ' Apple Macbook Air', 1, 3, 30000000, 'air42.jpg', 'Chinh Hang', 46, 'NEW', 'Phieu mua hang tri gia 1000000');

-- --------------------------------------------------------

--
-- Table structure for table `producttypes`
--

CREATE TABLE `producttypes` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producttypes`
--

INSERT INTO `producttypes` (`id`, `name`) VALUES
(1, 'CellPhone'),
(2, 'Tablet'),
(3, 'LapTop'),
(4, 'HeadPhone');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `firstname` varchar(55) NOT NULL,
  `lastname` varchar(55) NOT NULL,
  `avatar` varchar(55) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `firstname`, `lastname`, `avatar`) VALUES
(1, 'thaihung', '123', 'thaiquanghungit@gmail.com', 'hung', 'thai', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feture`
--
ALTER TABLE `feture`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `manufactures`
--
ALTER TABLE `manufactures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producttypes`
--
ALTER TABLE `producttypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feture`
--
ALTER TABLE `feture`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;

--
-- AUTO_INCREMENT for table `manufactures`
--
ALTER TABLE `manufactures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `producttypes`
--
ALTER TABLE `producttypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
