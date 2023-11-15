-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 15, 2023 at 01:30 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mypham`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MaChiTietHoaDon` int NOT NULL,
  `TongTien` double NOT NULL,
  `NgayLapChiTietHoaDon` date NOT NULL,
  `MaSanPham` int NOT NULL,
  `MaHoaDon` int NOT NULL,
  `SoLuong` int NOT NULL,
  `MaKhachHang` int DEFAULT NULL,
  `DiaChiGiaoHang` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `HoTen` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoDienThoai` int NOT NULL,
  `Email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`MaChiTietHoaDon`, `TongTien`, `NgayLapChiTietHoaDon`, `MaSanPham`, `MaHoaDon`, `SoLuong`, `MaKhachHang`, `DiaChiGiaoHang`, `HoTen`, `SoDienThoai`, `Email`) VALUES
(1, 177000, '2023-11-15', 2, 1, 1, 2, 'Gò vấp', 'Văn Qúy', 2938732, 'quy456@gmail.com'),
(2, 177000, '2023-11-15', 2, 2, 1, 2, 'Nguyễn Văn Bảo', 'Tú', 2233435, 'tuquang@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `MaGioHang` int NOT NULL,
  `SoLuong` int NOT NULL,
  `MaKhachHang` int NOT NULL,
  `MaSanPham` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `giohang`
--

INSERT INTO `giohang` (`MaGioHang`, `SoLuong`, `MaKhachHang`, `MaSanPham`) VALUES
(1, 2, 1, 1),
(2, 3, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHoaDon` int NOT NULL,
  `TongTien` double NOT NULL,
  `NgayLap` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`MaHoaDon`, `TongTien`, `NgayLap`) VALUES
(121, 500000, '2023-10-03'),
(122, 900000, '2023-10-02'),
(123, 1000000, '2023-10-01'),
(124, 177000, '2023-11-15'),
(125, 177000, '2023-11-15'),
(126, 177000, '2023-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKhachHang` int NOT NULL,
  `HoTen` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `SoDienThoai` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `DiaChi` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `MatKhau` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `Email` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `trangThai` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MaKhachHang`, `HoTen`, `SoDienThoai`, `DiaChi`, `MatKhau`, `Email`, `trangThai`) VALUES
(1, 'Nguyễn Văn Qúy', '0816977958', '12, Nguyễn Văn Bảo', '123456', 'myphamdep@gmail.com', 1),
(2, 'Nguyễn Bảo An', '0987654321', '14 Nguyễn Thái Sơn, Gò Vấp, Hồ Chí Minh ', '12345678', 'nguyenvanan@gmail.com', 1),
(3, 'Trần Hoài Bảo', '0978563412', '23 Nguyễn An Ninh, Bình Thạnh, Hồ Chí Minh ', '11223344', 'tranhoaibao@mail.com', 1),
(4, 'Đinh Tuấn Cường', '0897651243', '109 Phan Xích Long, Phú Nhuận, Hồ Chí Minh', '16141932', 'dinhtuancuong@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `loainhanvien`
--

CREATE TABLE `loainhanvien` (
  `MaLoaiNhanVien` int NOT NULL,
  `TenLoaiNhanVien` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GhiChu` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loainhanvien`
--

INSERT INTO `loainhanvien` (`MaLoaiNhanVien`, `TenLoaiNhanVien`, `GhiChu`) VALUES
(1, 'Bán Hàng', 'Bán hàng tại khu vực Gò Vấp'),
(2, 'Quản lý kho', 'Quản lý kho tại khu vực Gò Vấp');

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `MaLoai` int NOT NULL,
  `TenLoai` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `GhiChu` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`MaLoai`, `TenLoai`, `GhiChu`) VALUES
(1, 'Kem Nền', 'Kem nền che khuyết điểm'),
(2, 'Mascara', 'Làm cong mí mắt'),
(3, 'Phấn phủ', 'Phấn phủ làm mịn da'),
(4, 'Son Môi', 'Son dưỡng ẩm môi vào ban đêm'),
(5, 'Sữa rữa mặt', 'Sữa rữa mặt làm sáng da'),
(6, 'Kem chống nẳng', 'Kem chống nắng cho da dầu');

-- --------------------------------------------------------

--
-- Table structure for table `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `MaNhaCungCap` int NOT NULL,
  `TenNhaCungCap` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `GhiChu` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nhacungcap`
--

INSERT INTO `nhacungcap` (`MaNhaCungCap`, `TenNhaCungCap`, `GhiChu`) VALUES
(1, 'MQ SKIN', 'Cung cấp các sản phẩm mỹ phẩm nghiên về thảo dược.'),
(2, 'Mascara', 'Làm cong mi mắt'),
(3, 'Naunau', 'Cung cấp các sản phẩm có mùi hương cuốn hút.'),
(4, 'Skina', 'Cung cấp các sản phẩm ch?m sóc da từ thảo mộc tự nhiên.'),
(5, 'Titione', 'Cung cấp các sản phẩm thân thiện với người dùng.');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNhanVien` int NOT NULL,
  `HoTen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MatKhau` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoDienThoai` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LoaiNhanVien` int NOT NULL,
  `trangThai` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MaNhanVien`, `HoTen`, `MatKhau`, `Email`, `SoDienThoai`, `DiaChi`, `LoaiNhanVien`, `trangThai`) VALUES
(1, 'Trần Tuấn Anh', '11122288', 'trantuananh@gmail.com', '0987654222', '91 Nguyễn Văn Bảo, Gò Vấp, Hồ Chí Minh', 1, 1),
(2, 'Trương Ngọc Bình', '12341234', 'truongngocbinh@gmail.com', '0789665431', '200 Phan Xích Long, Phú Nhuận, Hồ Chí Minh', 2, 1),
(3, 'Lý Hữu Cảnh', '12344444', 'lyhuucanh@gmail.com', '0987666555', '22 Nguyễn Thái Sơn, Gò Vấp, Hồ Chí Minh', 1, 1),
(4, 'Trần Minh Dự', '33338888', 'tranminhdu@gmail.com', '0788654332', '33 Lê Đức Thọ, Gò Vấp, Hồ Chí Minh', 2, 1),
(5, 'Lê Hoàng Hữu', '66667777', 'lehoanghuu@gmail.com', '0998765443', '1 Phan Xích Long, Phú Nhuận, Hồ Chí Minh', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `noidungdanhgia`
--

CREATE TABLE `noidungdanhgia` (
  `MaDanhGia` int NOT NULL,
  `MaSanPham` int NOT NULL,
  `ThoiGianDanhGia` date NOT NULL,
  `NoiDungDanhGia` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `MaKhachHang` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noidungdanhgia`
--

INSERT INTO `noidungdanhgia` (`MaDanhGia`, `MaSanPham`, `ThoiGianDanhGia`, `NoiDungDanhGia`, `MaKhachHang`) VALUES
(1, 1, '2023-10-16', 'Kem rất tốt, sử dụng cảm thấy rất an toàn và hiệu quả.', 1),
(2, 2, '2023-10-22', 'Sản phẩm đúng như mô tả, sẽ ủng hộ shop tiếp.', 0),
(3, 3, '2023-10-23', 'Phấn đẹp, rất lâu phai.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `phieudathang`
--

CREATE TABLE `phieudathang` (
  `MaDatHang` int NOT NULL,
  `SoLuong` int NOT NULL,
  `ThoiGianDatHang` date NOT NULL,
  `MaKhachHang` int NOT NULL,
  `MaSanPham` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phieudathang`
--

INSERT INTO `phieudathang` (`MaDatHang`, `SoLuong`, `ThoiGianDatHang`, `MaKhachHang`, `MaSanPham`) VALUES
(1, 2, '2023-10-01', 2, 2),
(2, 4, '2023-10-02', 2, 2),
(3, 1, '2023-10-03', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `phieukiemtrakho`
--

CREATE TABLE `phieukiemtrakho` (
  `NgayKiemTra` date NOT NULL,
  `MaSanPham` int NOT NULL,
  `MaNhanVien` int NOT NULL,
  `TrangThaiKiemTra` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `MaPhieuKiemTraKho` tinyint NOT NULL,
  `PhieuShow` tinyint NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phieukiemtrakho`
--

INSERT INTO `phieukiemtrakho` (`NgayKiemTra`, `MaSanPham`, `MaNhanVien`, `TrangThaiKiemTra`, `MaPhieuKiemTraKho`, `PhieuShow`) VALUES
('2023-11-25', 1, 1, 'sản phẩm ổn không hư hỏng', 6, 1),
('2023-11-22', 2, 2, 'oke', 7, 1),
('2023-11-22', 3, 3, 'oke', 8, 1),
('2023-11-22', 4, 4, 'oke', 9, 1),
('2023-11-22', 3, 4, 'oke', 10, 1),
('2023-12-06', 5, 2, 'sản phẩm ổn không hư hỏng', 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `phieunhapkho`
--

CREATE TABLE `phieunhapkho` (
  `MaPhieuNhapKho` int NOT NULL,
  `NgayLapPhieuNhapKho` date NOT NULL,
  `TrangThaiPhieuNhapKho` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `MaSanPham` int NOT NULL,
  `MaNhanVien` int NOT NULL,
  `PhieuShow` tinyint NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phieunhapkho`
--

INSERT INTO `phieunhapkho` (`MaPhieuNhapKho`, `NgayLapPhieuNhapKho`, `TrangThaiPhieuNhapKho`, `MaSanPham`, `MaNhanVien`, `PhieuShow`) VALUES
(1, '2023-10-30', 'Chưa duyệt', 1, 1, 1),
(2, '2023-10-30', 'Chưa duyệt', 2, 2, 1),
(3, '2023-10-30', 'Được duyệt', 3, 3, 1),
(4, '2023-10-30', 'Được duyệt', 4, 4, 1),
(21, '2023-11-14', 'oke', 1, 1, 1),
(22, '2023-11-14', 'oke', 1, 1, 0),
(23, '2023-11-16', 'oke', 3, 3, 0),
(24, '2023-11-16', 'oke', 3, 3, 0),
(25, '2023-11-16', 'oke', 3, 3, 0),
(26, '2023-11-16', 'oke', 3, 3, 0),
(27, '2023-11-28', 'oke', 1, 1, 1),
(28, '2023-11-28', 'oke', 1, 1, 0),
(29, '2023-11-22', 'Được duyệt', 5, 2, 1),
(30, '2023-11-22', 'Được duyệt', 5, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `phieutrahang`
--

CREATE TABLE `phieutrahang` (
  `ThoiGianTraHang` date NOT NULL,
  `SoLuong` int NOT NULL,
  `LyDoTraHang` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `MaKhachHang` int NOT NULL,
  `MaSanPham` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phieutrahang`
--

INSERT INTO `phieutrahang` (`ThoiGianTraHang`, `SoLuong`, `LyDoTraHang`, `MaKhachHang`, `MaSanPham`) VALUES
('2023-10-06', 1, 'S?n ph?m không gi?ng mô t?', 1, 1),
('2023-10-07', 4, 'S?n ph?m b? h? h?i', 2, 2),
('2023-10-08', 3, 'S?n ph?m không gi?ng mô t?', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `phieuxuatkho`
--

CREATE TABLE `phieuxuatkho` (
  `MaPhieuXuatKho` int NOT NULL,
  `NgayLapPhieuXuatKho` date NOT NULL,
  `TrangThaiPhieuXuatKho` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `MaNhanVien` int NOT NULL,
  `MaSanPham` int NOT NULL,
  `PhieuShow` tinyint NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phieuxuatkho`
--

INSERT INTO `phieuxuatkho` (`MaPhieuXuatKho`, `NgayLapPhieuXuatKho`, `TrangThaiPhieuXuatKho`, `MaNhanVien`, `MaSanPham`, `PhieuShow`) VALUES
(1, '2023-11-02', 'Chưa duyệt', 1, 1, 1),
(2, '2023-11-08', 'Chưa duyệt', 2, 2, 1),
(5, '2023-11-14', 'oke', 1, 1, 1),
(6, '2023-11-15', 'Được duyệt', 3, 3, 1),
(7, '2023-11-15', 'oke', 3, 3, 0),
(8, '2023-11-22', 'oke', 1, 1, 1),
(9, '2023-11-22', 'oke', 1, 1, 1),
(10, '2023-11-23', 'Được duyệt', 4, 5, 0),
(11, '2023-11-23', 'Được duyệt', 4, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSanPham` int NOT NULL,
  `TenSanPham` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `SoLuongTon` int NOT NULL DEFAULT '1',
  `MoTa` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `GiaBan` double NOT NULL,
  `GiaNhap` double NOT NULL,
  `ThuongHieu` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `HinhAnh` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `HanSuDung` date DEFAULT NULL,
  `LoaiSanPham` int NOT NULL,
  `NhaCungCap` int NOT NULL,
  `trangThai` tinyint NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSanPham`, `TenSanPham`, `SoLuongTon`, `MoTa`, `GiaBan`, `GiaNhap`, `ThuongHieu`, `HinhAnh`, `HanSuDung`, `LoaiSanPham`, `NhaCungCap`, `trangThai`) VALUES
(1, 'Kem nền Becca', 99, 'Kem nền dạng lỏng che khuyết điểm', 179000, 79000, 'Becca', 'kemduongdrg.jpg', '2024-10-23', 1, 1, 1),
(2, 'Mascara Gecomo', 970, 'Mascara làm cong mi mắt', 99000, 39000, 'GECOMO', '', '2025-10-15', 2, 2, 1),
(3, 'Phấn phủ Pramy', 578, 'Phấn phủ làm mịn da', 490000, 290000, 'PRAMY', '', '2025-10-01', 3, 3, 0),
(4, 'Son dưỡng môi Melody', 100, 'Son dưỡng ẩm môi vào ban đêm', 460000, 400000, 'Melody', '', '2025-11-13', 4, 4, 1),
(5, 'Sữa rửa mặt Simple', 10, 'Sữa rửa mặt sáng dae', 100000, 90000, 'Simple', 'srm laroche posay231112101134.png', '2023-11-29', 5, 5, 1),
(12, 'Sữa rữa mặt LarochePosay', 45, 'Dành cho da dầu', 300000, 260000, 'Laroche posay', 'Sữa rữa mặt LarochePosay.png', '2023-11-23', 5, 4, 1),
(13, 'Sữa rữa mặt LarochePosay', 45, 'Dành cho da dầu', 300000, 260000, 'Laroche posay', 'Sữa rữa mặt LarochePosay.png', '2023-11-23', 5, 4, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`MaChiTietHoaDon`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`MaGioHang`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHoaDon`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKhachHang`);

--
-- Indexes for table `loainhanvien`
--
ALTER TABLE `loainhanvien`
  ADD PRIMARY KEY (`MaLoaiNhanVien`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Indexes for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`MaNhaCungCap`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNhanVien`);

--
-- Indexes for table `noidungdanhgia`
--
ALTER TABLE `noidungdanhgia`
  ADD PRIMARY KEY (`MaDanhGia`),
  ADD KEY `MaSanPham` (`MaSanPham`),
  ADD KEY `MaKhachHang` (`MaKhachHang`);

--
-- Indexes for table `phieudathang`
--
ALTER TABLE `phieudathang`
  ADD PRIMARY KEY (`MaDatHang`),
  ADD KEY `MaKhachHang` (`MaKhachHang`,`MaSanPham`);

--
-- Indexes for table `phieukiemtrakho`
--
ALTER TABLE `phieukiemtrakho`
  ADD PRIMARY KEY (`MaPhieuKiemTraKho`),
  ADD KEY `MaSanPham` (`MaSanPham`,`MaNhanVien`);

--
-- Indexes for table `phieunhapkho`
--
ALTER TABLE `phieunhapkho`
  ADD PRIMARY KEY (`MaPhieuNhapKho`),
  ADD KEY `MaSanPham` (`MaSanPham`,`MaNhanVien`);

--
-- Indexes for table `phieutrahang`
--
ALTER TABLE `phieutrahang`
  ADD KEY `MaKhachHang` (`MaKhachHang`,`MaSanPham`);

--
-- Indexes for table `phieuxuatkho`
--
ALTER TABLE `phieuxuatkho`
  ADD PRIMARY KEY (`MaPhieuXuatKho`),
  ADD KEY `MaNhanVien` (`MaNhanVien`,`MaSanPham`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSanPham`),
  ADD KEY `LoaiSanPham` (`LoaiSanPham`,`NhaCungCap`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `MaChiTietHoaDon` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `MaGioHang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHoaDon` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKhachHang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `loainhanvien`
--
ALTER TABLE `loainhanvien`
  MODIFY `MaLoaiNhanVien` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `MaLoai` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `MaNhaCungCap` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MaNhanVien` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `noidungdanhgia`
--
ALTER TABLE `noidungdanhgia`
  MODIFY `MaDanhGia` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `phieudathang`
--
ALTER TABLE `phieudathang`
  MODIFY `MaDatHang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `phieukiemtrakho`
--
ALTER TABLE `phieukiemtrakho`
  MODIFY `MaPhieuKiemTraKho` tinyint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `phieunhapkho`
--
ALTER TABLE `phieunhapkho`
  MODIFY `MaPhieuNhapKho` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `phieuxuatkho`
--
ALTER TABLE `phieuxuatkho`
  MODIFY `MaPhieuXuatKho` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSanPham` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
