<?php
include_once("Model/mDetailsProduct.php");
class CDetailsProduct
{

    function handleAddToCart()
    {
        if (!isset($_SESSION['MaKhachHang'])) {
            header('PTUD_N10_DEMO/view/dangnhap.php');
        }

        if (isset($_REQUEST["submitAddToCart"])) {
            $quantity = $_REQUEST["quantity"];
            $idProduct = $_REQUEST["idProduct"];

            // kiểm tra số lượng sản phầm
            $resultCheckQuantityProduct = checkQuantityProduct($quantity, $idProduct);

            if ($resultCheckQuantityProduct) {
                $responAddToCart = addToCart($quantity, $idProduct);
                if ($responAddToCart) {
                    echo "<script> alert('thêm sản phầm vào giỏ hàng thành công') </script>";
                } else {
                    echo "<script> alert('thêm sản phầm vào giỏ hàng thất bại') </script>";
                }
            } else {
                echo "<script>alert('số lượng sản phẩm tồn kho không đủ')</script>";
            }
        };
    }
}

function addToCart($quantity, $idProduct)
{
    $p = new MDetailsProduct();
    $idCustommer = getIdCustommer();
    $tbl = $p->addToCart($quantity, $idProduct, $idCustommer);
    return $tbl;
};

function getIdCustommer()
{
    if (isset($_SESSION['MaKhachHang'])) {
        return $_SESSION['MaKhachHang'];
    } else {
        header('PTUD_N10_DEMO/view/dangnhap.php');
    }
}

function checkQuantityProduct($quantity, $idProduct)
{
    $m = new MDetailsProduct();
    $quantityProductsInStock = 0;
    $resultProductsInStock = $m->getQuantityProductsInStock($idProduct);
    $row = mysqli_fetch_assoc($resultProductsInStock);

    // nếu kết quả tổn tại
    if ($row) {
        $quantityProductsInStock = $row['SoLuongTon'];
    } 

    // kiểm tra số lượng thêm có bé hơn hoặc bằng số lượng tổn kho
    if ($quantity <= $quantityProductsInStock) {
        return true;
    } else {
        return false;
    }
}
