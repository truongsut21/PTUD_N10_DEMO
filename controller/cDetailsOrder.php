<?php
include_once("Model/mDetailsOrder.php");

if (!isset($_SESSION['MaKhachHang'])) {
    header('location: view/dangnhap.php');
    exit();
}

class CDetailsOrder
{
    function handleComment()
    {
        if (isset($_REQUEST["btnComment"])) {
            $sao = $_REQUEST["sao"];
            $noidung = $_REQUEST["noidung"];
            $maSanPham = $_REQUEST["maSanPham"];
            $maKhachHang = $_SESSION['MaKhachHang'];
            echo  $maKhachHang;

            // thêm bước xử lý hình ảnh
            $hinhAnh = "";
            $p = new MDetailsOrder();
            $result = $p->createComment($maKhachHang,  $maSanPham,  $noidung, $sao, $hinhAnh);

            if ($result) {
                echo '<script>alert("Bình luận thành công")
                window.location.href = "orderManage.php";
                </script>';
                // header('location: orderManage.php');
                // exit();
            } else {
                echo '<script>alert("Bình luận thất bại")</script>';
            }
        }
    }


    function getAllOrder()
    {
        $maHoaDon = $_REQUEST['maHoaDon'];
        $p = new MDetailsOrder();
        $tbl = $p->getAllDetailsOrder($maHoaDon);
        return $tbl;
    }
}
