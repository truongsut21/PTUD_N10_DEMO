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
                
                   require_once './Controller/cQLHoaDon.php';

                   $cHoaDon = new cHoaDon();
                   
                   if (isset($_GET['action'])) 
                   {
                    $action = $_GET['action'];
                    if ($action == 'chi-tiet') 
                    {
                        if (isset($_GET['maHoaDon'])) 
                        {
                            $maHoaDon = $_GET['maHoaDon'];
                            $cHoaDon->hienThiChiTietDonHang($maHoaDon);
                        }
                    } 
                    elseif ($action == 'cap-nhat') 
                    {
                        if (isset($_POST['soLuong'])) 
                        {
                            $maHoaDon = $_GET['maHoaDon']; 
                            $soLuong = $_POST['soLuong'];
                            $cHoaDon->capNhatChiTietDonHang($maHoaDon, $soLuong);
                        }
                    } 
                    elseif ($action == 'xoa') 
                    {
                        if (isset($_GET['maHoaDon'])) {
                            $maHoaDon = $_GET['maHoaDon'];
                            $cHoaDon->xoaChiTietDonHang($maHoaDon);
                        }
                    }
                } 
                else 
                {
                    $cHoaDon->hienThiDanhSachHoaDon();
                }
                    
                ?>

                
            </div>

            <!-- quản lý sản phẩm -->
 
        </div>