<?php
include_once("controller/cOrderManage.php");
class VOrderManager
{
    function viewAllOrder()
    {
        $p = new COrderManager();
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
            while ($row = mysqli_fetch_assoc($tbl)) {
                echo '
                <tr>
                    <form action="#" method="get">
                        <td class="shoping__cart__item">
                            <h4>'.$row['DiaChiGiaoHang'].'</h4> <br>
                            <h5>'.$row['NgayLap'].'</h5>
                        </td>
                        <td class="shoping__cart__price">
                            HD - '.$row['MaHoaDon'].'
                        </td>
                        <td class="shoping__cart__quantity">
                            <div class="quantity">
                            '.$row['TongTien'].'đ
                            </div>
                        </td>
                        <td class="shoping__cart__total">
                            <input type="hidden" name="maHoaDon" value="">
                            <button class="btn btn-outline-info" type="submit" name="btn_details_order">xem chi tiết</button>
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
