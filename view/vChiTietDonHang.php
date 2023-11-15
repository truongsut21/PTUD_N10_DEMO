<?php
echo '<form method="post" action="?action=cap-nhat">';
//trường ẩn để chứa giá trị MaHoaDon
echo '<input type="hidden" name="maHoaDon" value="' . $maHoaDon . '">';
echo '<table class="table table-striped">';
echo '<thead>';
echo '<tr>';
echo '<th scope="col">Tên Sản Phẩm</th>';
echo '<th scope="col">Số Lượng</th>';
echo '<th scope="col">Giá Bán</th>';
echo '<th scope="col">Số Điện Thoại KH</th>';
echo '<th scope="col">Ngày Lập</th>';
echo '<th scope="col">Tổng Tiền</th>';
echo '<th scope="col">Actions</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

if ($chiTietDonHang && $chiTietDonHang->num_rows > 0) {
    echo '<form method="post" action="?action=cap-nhat">';  
    while ($row = $chiTietDonHang->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["TenSanPham"] . '</td>';
        echo '<td><input type="number" name="soLuong[]" value="' . $row["SoLuong"] . '"></td>';
        echo '<td>' . $row["GiaBan"] . '</td>';
        echo '<td>' . $row["SoDienThoai"] . '</td>';
        echo '<td>' . $row["NgayLap"] . '</td>';
        echo '<td>' . $row["TongTien"] . '</td>';
        echo '<td>';
        echo '<button type="submit" class="btn btn-primary">Cập nhật</button>';
        echo '<a href="?action=xoa&maHoaDon=' . $row["MaHoaDon"] . '" class="btn btn-danger">Xóa</a>';
        echo '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
    echo '</form>';
} else {
    echo "Không có thông tin chi tiết đơn hàng.";
}
?>