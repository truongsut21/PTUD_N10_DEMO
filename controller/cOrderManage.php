<?php
include_once("Model/mOrderManage.php");

if (!isset($_SESSION['MaKhachHang'])) {
    header('location: view/dangnhap.php');
    exit();
}

class COrderManager
{
    function getAllOrder()
    {
        $maKhachHang = 1;
        $p = new MOrderManager();
        $tbl = $p->getAllOrder($maKhachHang);
        return $tbl;
    }
}
