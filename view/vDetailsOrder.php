<?php
include_once("controller/cDetailsOrder.php");
class VDetailsOrder
{
    function viewAllOrder()
    {
        $p = new CDetailsOrder();
        $tbl = $p->getAllOrder();
        showProduct($tbl);
    }

    function cartTotal()
    {
        $p = new CCart();
        $tbl = $p->getAllProduct();
        $total = 0;
        if ($tbl) {
            if (mysqli_num_rows($tbl) > 0) {
                while ($row = mysqli_fetch_assoc($tbl)) {
                    $total += $row['GiaBan'] * $row['SoLuong'];
                }
            }
        } else {
            echo "Vui lòng nhập dữ liệu!";
        }

        echo number_format($total, 0, ',', '.');
        echo "đ";
    }
}


function showProduct($tbl)
{
    if ($tbl) {
        if (mysqli_num_rows($tbl) > 0) {
            $temp = "";
            while ($row = mysqli_fetch_assoc($tbl)) {

                // loại bỏ trùng mã hoá đơn

                echo '
                    <tr>
                        <form action="detailsOrder.php" method="get">
                            <td class="shoping__cart__item">
                            <img src="img/' . $row['HinhAnh'] . '" alt="">
                                <h5>' . $row['TenSanPham'] . '</h5>
                            </td>
                            <td class="shoping__cart__price">
                            <p>' . $row['SoLuong'] . '</p>
                            </td>
                            
                            <td class="shoping__cart__quantity">
                                <div class="quantity">
                                ' . $row['TongTien'] . 'đ
                                </div>
                            </td>
                            <td class="shoping__cart__item">
                                <input type="hidden" name="maHoaDon" value="' . $row['MaHoaDon'] . '">
                                <!-- Button trigger modal đánh giá sản phẩm -->
                                <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#exampleModal">
                                    Đánh giá sản phẩm
                                </button>
                                <button class="btn btn-outline-danger" type="submit" name="btn_details_order">Trả hàng</button>
                            </td>
                        </form>
                    </tr>
                    ';
            }
        }
    } else {
        echo "Vui lòng nhập dữ liệu!";
    }
}
