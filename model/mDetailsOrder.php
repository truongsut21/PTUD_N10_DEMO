<?php
include_once("connect.php");

class MDetailsOrder
{
    function getAllDetailsOrder($maHoaDon)
    {
        $p = new ConnectDB();
        $con = null;
        if ($p->connect_DB($con)) {
            $str = "SELECT *
            FROM chitiethoadon
            INNER JOIN hoadon ON chitiethoadon.MaHoaDon = hoadon.MaHoaDon
            INNER JOIN sanpham ON chitiethoadon.MaSanPham = sanpham.MaSanPham
            WHERE chitiethoadon.MaHoaDon = $maHoaDon";

           
            $tbl = mysqli_query($con, $str);
            $p->closeDB($con);
            return $tbl;
        } else {
            return false;
        }
    }
}
