<?php
include_once("connect.php");

class MCart
{
    function getAllProduct()
    {
        $maKhachHang = $_SESSION['MaKhachHang'];
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

    function updateProduct($soLuong, $maGioHang)
    {
        $p = new ConnectDB();
        $con = null;
        if ($p->connect_DB($con)) {
            $str = "UPDATE `giohang` SET `SoLuong` = $soLuong WHERE `giohang`.`MaGioHang` = '$maGioHang';";
            $tbl = mysqli_query($con, $str);
            $p->closeDB($con);
            return $tbl;
        } else {
            return false;
        }
    }

    function deleteProduct($maGioHang)
    {
        $p = new ConnectDB();
        $con = null;
        if ($p->connect_DB($con)) {
            $str = "DELETE FROM `giohang` WHERE MaGioHang = '$maGioHang';";
            $tbl = mysqli_query($con, $str);
            $p->closeDB($con);
            return $tbl;
        } else {
            return false;
        }
    }
}
