<?php
require_once 'Model/mQLHoaDon.php';

class cHoaDon {
    public function hienThiDanhSachHoaDon() {
        $modelHoaDon = new mHoaDon();
        $danhSachHoaDon = $modelHoaDon->layDanhSachHoaDon();
        
        require_once 'View/vQLHoaDon.php';
    }

    public function hienThiChiTietDonHang($maHoaDon) {
        $modelHoaDon = new mHoaDon();
        $chiTietDonHang = $modelHoaDon->layChiTietDonHang($maHoaDon);

        
        require_once 'View/vChiTietDonHang.php';
    }

    public function showChiTietDonHang($maHoaDon) {
        $modelHoaDon = new mHoaDon();
        $chiTietDonHang = $modelHoaDon->layChiTietDonHang($maHoaDon);

        
       return $chiTietDonHang;
    }

    public function capNhatChiTietDonHang($maHoaDon, $soLuong) {
        $modelHoaDon = new mHoaDon();
        $result = $modelHoaDon->capNhatThongTinDonHang($maHoaDon, $soLuong);

        if ($result) {
            echo '<div class="alert alert-success" role="alert">Cập nhật thành công!</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">Cập nhật thất bại!</div>';
        }

        $this->hienThiDanhSachHoaDon();
    }

    public function xoaChiTietDonHang($maHoaDon) {
        $modelHoaDon = new mHoaDon();
        $result = $modelHoaDon->xoaDonHang($maHoaDon);

        if ($result) {
            echo '<div class="alert alert-success" role="alert">Xóa thành công!</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">Xóa thất bại!</div>';
        }

        $this->hienThiDanhSachHoaDon();
    }
}
?>