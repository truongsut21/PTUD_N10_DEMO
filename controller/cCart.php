<?php
include_once("Model/mCart.php");
class CCart
{
    function getAllProduct()
    {
        $p = new MCart();
        $tbl = $p->getAllProduct();
        return $tbl;
    }

    function handleUpdateProduct()
    {
        $p = new MCart();

        if (isset($_REQUEST['btnUpdateProduct'])) {
            $soLuong = $_REQUEST['SoLuong'];
            $maGioHang = $_REQUEST['MaGioHang'];
            echo "<script> alert('cập nhật số lượng thành công')</script>";    
            $tbl = $p->updateProduct($soLuong, $maGioHang);
            return $tbl;
        };
    }

    function handleDeleteProduct()
    {
        $p = new MCart();

        if (isset($_REQUEST['btnDeleteProduct'])) {
            $maGioHang = $_REQUEST['MaGioHang'];
            $tbl = $p->deleteProduct($maGioHang);
            return $tbl;
        };
    }
}
