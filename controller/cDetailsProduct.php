<?php
include_once("Model/mDetailsProduct.php");
class CDetailsProduct
{


    function handleAddToCart()
    {
        if (!isset($_SESSION['MaKhachHang'])){
            header('PTUD_N10/view/dangnhap.php');
        }

        if (isset($_REQUEST["submitAddToCart"])) {
            $quantity = $_REQUEST["quantity"];
            $maSanPham = $_REQUEST["MaSanPham"];
            echo $maSanPham;
            echo "----------------------------------------------------------------";
            echo $quantity;
            $respon = addToCart($quantity, $maSanPham);

            if ($respon) {
                echo "<script> alert('thêm sản phầm vào giỏ hàng thành công') </script>";
            }
        };
    }
}
function addToCart($quantity, $maSanPham)
{
    $p = new MDetailsProduct();
    $idCustommer = getIdCustommer();
    $tbl = $p->addToCart($quantity, $maSanPham, $idCustommer);
    return $tbl;
};

function getIdCustommer()
{
   

    $maKhachHang = $_SESSION['MaKhachHang'];


    if ($maKhachHang) {
        return $maKhachHang;
    } else {
        header('PTUD_N10/view/dangnhap.php');
    }
}
