<?php
include_once("connect.php");

class MOrderManager
{
    function getAllOrder($maKhachHang)
    {
        $p = new ConnectDB();
        $con = null;
        if ($p->connect_DB($con)) {
            $str = "SELECT sp.TenSanPham,sp.HinhAnh, sp.GiaBan, gh.SoLuong, gh.MaGioHang FROM giohang gh JOIN sanpham sp ON gh.MaSanPham = sp.MaSanPham WHERE gh.MaKhachHang = '$maKhachHang';";
            $tbl = mysqli_query($con, $str);
            $p->closeDB($con);
            return $tbl;
        } else {
            return false;
        }
    }
}
