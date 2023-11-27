<div class="tab-content">
            <!-- quản ly đơn hàng  -->
            <div id="quan-ly-don-hang" class="container tab-pane active"><br>
                <div class="row timKiem-them">
                    <div class="timKiem input-group mb-3 col-md-6">
                        <form action="#" method="get" class="" style="display: flex;">
                            <input type="text" class="form-control form-timkiem" placeholder="Tìm kiếm...">
                            <button class="btn btn-success btnTim" type="submit" name="btnSearch">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>

                    <div class="timKiem col-md-4">
                        <h2>QUẢN LÝ ĐƠN HÀNG</h2>
                    </div>
                    
                </div>
                
                <?php
                echo '<form method="post" action="?action=cap-nhat">';
                //trường ẩn để chứa giá trị MaHoaDon
                // echo '<input type="hidden" name="maHoaDon" value="' .$_REQUEST['upd']. '">';
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
                // 2 biến này ở đâu á
                include_once('./Controller/cQLHoaDon.php');
                $p = new cHoaDon();
                $tbl = $p -> showChiTietDonHang($_REQUEST['upd']);
                if ($tbl && $tbl->num_rows > 0) {
                    echo '<form method="post" action="?action=cap-nhat">';  
                    while ($row = $tbl->fetch_assoc()) {
                        echo '<tr>';
                        echo '<td>' . $row["TenSanPham"] . '</td>';
                        echo '<td><input type="number" name="soLuong[]" value="' . $row["SoLuong"] . '"></td>';
                        echo '<td>' . $row["GiaBan"] . '</td>';
                        echo '<td>' . $row["SoDienThoai"] . '</td>';
                        echo '<td>' . $row["NgayLap"] . '</td>';
                        echo '<td>' . $row["TongTien"] . '</td>';
                        echo '<td>';
                        echo '<button type="submit" class="btn btn-primary">Cập nhật</button>';
                        echo '<a href="nhanvienbanhang.php?dele=' . $_REQUEST['upd'] . '" class="btn btn-danger">Xóa</a>';
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
                
            </div>

            <!-- quản lý sản phẩm -->
 
        </div>
