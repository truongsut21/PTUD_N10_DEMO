<?php
include_once("Model/mPay.php");
class CPay
{
    function getAllProduct()
    {
        $p = new MPay();
        $tbl = $p->getAllProduct();
        return $tbl;
    }

    function getInfoUsers()
    {
        $p = new MPay();
        $tbl = $p->getInfoUsers();
        return $tbl;
    }

    function handlePay()
    {
        if (isset($_REQUEST['btnPay'])) {
            $HoTen = $_REQUEST['HoTen'];
            $SoDienThoai = $_REQUEST['SoDienThoai'];
            $Email = $_REQUEST['Email'];
            $DiaChi = $_REQUEST['DiaChi'];
            $tongTien = $_REQUEST['TongTien'];
            $maSanPham = $_REQUEST['MaSanPham'];
            $maNhanVien = '1';
            $tongTienDonHang = $_REQUEST["tongTienDonHang"];
            $maKhachHang = $_SESSION['MaKhachHang'];
            $soLuong = $_REQUEST['SoLuong'];

            $p = new MPay();
            $tbl = $p->addOrder($HoTen , $SoDienThoai , $Email ,$DiaChi ,$tongTien ,$maSanPham ,$maNhanVien , $tongTienDonHang ,$maKhachHang ,$soLuong );
            return $tbl;
        }
    }
}
