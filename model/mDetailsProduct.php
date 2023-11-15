<?php
include_once("connect.php");

class MDetailsProduct
{
    function addToCart($quantity, $maSanPham, $idCustommer)
    {
        $maKhachHang = $_SESSION['MaKhachHang'];

        $p = new ConnectDB();
        $con = null;
        if ($p->connect_DB($con)) {
            $str = "INSERT INTO `giohang` (`MaGioHang`, `SoLuong`, `MaKhachHang`, `MaSanPham`) VALUES (NULL, '".$quantity."', '$maKhachHang', '".$maSanPham."');";
            $tbl = mysqli_query($con, $str);
            $p->closeDB($con);
            return $tbl;
        } else {
            return false;
        }
    }
}


