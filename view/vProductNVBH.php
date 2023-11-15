<?php
include_once("Controller/cProductNVBH.php");

class VProduct {
    function viewAllProduct() {
        $c = new CProduct();
        $tbl = $c->getAllProduct();
        showProduct($tbl);
    }
}

function showProduct($tbl) {
    if ($tbl) {
        echo "<ul>";

        while ($row = mysqli_fetch_assoc($tbl)) {
            echo "<li>";
            echo "<input type='checkbox' class='product-checkbox' data-product-id='" . $row["MaSanPham"] . "' data-product-price='" . $row["GiaBan"] . "'>";
            echo $row["TenSanPham"];
            echo "<input type='number' class='product-quantity' min='1' value='1'>";
            echo "</li>";
        }

        echo "</ul>";
    } else {
        echo "Không có dữ liệu sản phẩm.";
    }
}


?>
