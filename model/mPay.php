<?php
session_start();
ob_start();
include_once("connect.php");

class MPay
{
    function getAllProduct()
    {
        $p = new ConnectDB();
        $con = null;
        if ($p->connect_DB($con)) {
            $str = 'SELECT sp.TenSanPham, sp.GiaBan, gh.SoLuong, sp.MaSanPham FROM giohang gh JOIN sanpham sp ON gh.MaSanPham = sp.MaSanPham WHERE gh.MaKhachHang = "03";';
            $tbl = mysqli_query($con, $str);
            $p->closeDB($con);
            return $tbl;
        } else {
            return false;
        }
    }

    function addOrder($HoTen , $SoDienThoai , $Email ,$DiaChi ,$tongTien ,
    $maSanPham ,$maNhanVien , $tongTienDonHang ,$maKhachHang ,$soLuong )
    {
        $p = new ConnectDB();
        $con = null;

        $DiaChi = '';
        $HoTen = '';
        $SoDienThoai = '';
        $Email = '';
        

        if ($p->connect_DB($con)) {
            $sql_hoadon = "INSERT INTO hoadon (TongTien, NgayLap) VALUES ('99999999', NOW())";
            $result_hoadon = mysqli_query($con, $sql_hoadon);

            if ($result_hoadon) {
                // Lấy ID của hóa đơn vừa thêm
                $MaHoaDon = mysqli_insert_id($con);

                // Tạo câu truy vấn để chèn dữ liệu vào bảng chitiethoadon
                foreach ($maSanPham as $key => $value) {
                   
                    $sql_chitiethoadon = "INSERT INTO `chitiethoadon` (`MaChiTietHoaDon`, `TongTien`, `NgayLapChiTietHoaDon`, `MaSanPham`, `MaHoaDon`, `SoLuong`, `MaKhachHang`, `DiaChiGiaoHang`, `HoTen`, `SoDienThoai`, `Email`) 
                    VALUES (NULL, '$tongTien[$key]', NOW(), '$value', '$MaHoaDon', '$soLuong', '$maKhachHang', '$DiaChi', '$HoTen', '$SoDienThoai', '$Email');";


                    $result_chitiethoadon = mysqli_query($con, $sql_chitiethoadon);

                    if (!$result_chitiethoadon) {
                        echo "Lỗi: " . $sql_chitiethoadon . "<br>" . mysqli_error($con);
                    }
                }

                echo "<script> alert('them don hàng thêm thành công!')</script>";
            } else {
                echo "Lỗi: " . $sql_hoadon . "<br>" . mysqli_error($con);
            }

            $p->closeDB($con);
            return $result_chitiethoadon;
        } else {
            return false;
        }
    }

    function getInfoUsers()
    {
        $p = new ConnectDB();
        $con = null;

        $maKhachHang =  $_SESSION['MaKhachHang'];
        if ($p->connect_DB($con)) {
            $str = "SELECT * FROM `khachhang` WHERE MaKhachHang = '$maKhachHang'";
            $tbl = mysqli_query($con, $str);
            $p->closeDB($con);
            return $tbl;
        } else {
            return false;
        }
    }
}
