<?php
echo '<table class="table table-striped">';
echo '<thead>';
echo '<tr>';
echo '<th scope="col">MaHoaDon</th>';
echo '<th scope="col">NgayLap</th>';
echo '<th scope="col">TongTien</th>';
echo '<th scope="col">Actions</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

while ($row = $danhSachHoaDon->fetch_assoc()) {
    echo '<tr>';
    echo '<td>' . $row["MaHoaDon"] . '</td>';
    echo '<td>' . $row["NgayLap"] . '</td>';
    echo '<td>' . $row["TongTien"] . '</td>';
    echo '<td>';
    echo '<a href="nhanvienbanhang.php?upd=' . $row["MaHoaDon"] . '" class="btn btn-info">Cập nhật</a>';
   
    echo '</td>';
    echo '</tr>';
    }

echo '</tbody>';
echo '</table>';
?>