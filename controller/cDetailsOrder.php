<?php
include_once("Model/mDetailsOrder.php");

if (!isset($_SESSION['MaKhachHang'])) {
    header('location: view/dangnhap.php');
    exit();
}

class CDetailsOrder
{
    function getAllOrder()
    {
        $maHoaDon = $_REQUEST['maHoaDon'];
        $p = new MDetailsOrder();
        $tbl = $p->getAllDetailsOrder($maHoaDon);
        return $tbl;
    }
}
