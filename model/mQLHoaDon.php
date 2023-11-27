<?php
require_once 'connect.php';

class mHoaDon {
    public function layDanhSachHoaDon() {
        $connObj = new ConnectDB();
        $conn = $connObj->connect_DB($conn);

        $sql = "SELECT * FROM hoadon";
        $result = $conn->query($sql);

        $conn->close();

        return $result;
    }

    
  
    public function layChiTietDonHang($maHoaDon) {
        $connObj = new ConnectDB();
        $conn = $connObj->connect_DB($conn);
        // Kiểm tra giá trị $maHoaDon
        echo "Debug: MaHoaDon: $maHoaDon"; 

        $sql = "SELECT hoadon.MaHoaDon, hoadon.TongTien, hoadon.NgayLap,
        sanpham.TenSanPham, chitiethoadon.SoLuong,
        chitiethoadon.HoTen, chitiethoadon.SoDienThoai, sanpham.GiaBan
        FROM hoadon
        JOIN chitiethoadon ON hoadon.MaHoaDon = chitiethoadon.MaHoaDon
        JOIN sanpham ON chitiethoadon.MaSanPham = sanpham.MaSanPham
        WHERE hoadon.MaHoaDon = '$maHoaDon'";
        


        $result = $conn->query($sql);

        $conn->close();

        return $result;
    }


    public function capNhatThongTinDonHang($maHoaDon, $soLuongArr) {
        $connObj = new ConnectDB();
        $conn = $connObj->connect_DB($conn);
    
        foreach ($soLuongArr as $key => $soLuong) {
            echo "MaHoaDon: $maHoaDon[$key], SoLuong: $soLuong<br>";  // Debug: Hiển thị giá trị
    
            // Cập nhật SoLuong trong bảng chitiethoadon
            $sqlUpdateChiTiet = "UPDATE chitiethoadon SET SoLuong = '$soLuong' WHERE MaHoaDon = '$maHoaDon[$key]'";
            $resultUpdateChiTiet = $conn->query($sqlUpdateChiTiet); // ý l l
    
            if (!$resultUpdateChiTiet) {
                echo "Error updating SoLuong in chitiethoadon: " . $conn->error;
            }
    
            // Tính toán và cập nhật TongTien trong bảng hoadon và chitiethoadon
            $sqlUpdateTongTien = "UPDATE hoadon, chitiethoadon 
                                  SET hoadon.TongTien = chitiethoadon.SoLuong * sanpham.GiaBan 
                                  WHERE hoadon.MaHoaDon = chitiethoadon.MaHoaDon 
                                  AND chitiethoadon.MaHoaDon = '$maHoaDon[$key]'";
            $resultUpdateTongTien = $conn->query($sqlUpdateTongTien);
    
            if (!$resultUpdateTongTien) {
                echo "Error updating TongTien in hoadon and chitiethoadon: " . $conn->error;
            }
        }
    
        $conn->close();
    
        return $resultUpdateChiTiet && $resultUpdateTongTien;
    }  
    
    // cập nhật thông tin 
    /*
    public function capNhatThongTinDonHang($maHoaDon, $soLuongArr) {
        $connObj = new ConnectDB();
        $conn = $connObj->connect_DB($conn);
    
        foreach ($soLuongArr as $key => $soLuong) {
            echo "MaHoaDon: $maHoaDon[$key], SoLuong: $soLuong<br>";  // Debug: Hiển thị giá trị
            $sql = "UPDATE hoadon SET SoLuong = '$soLuong' WHERE MaHoaDon = '$maHoaDon[$key]'";
            echo "SQL Query: $sql";  // Debug: Hiển thị SQL Query
            $result = $conn->query($sql);
    
            if (!$result) {
                echo "Error: " . $conn->error;
            }
        }
    
        $conn->close();
    
        return $result;
    }
    */


    public function xoaDonHang($maHoaDon) {
        $connObj = new ConnectDB();
        $conn = $connObj->connect_DB($conn);

        $sql = "DELETE FROM hoadon WHERE MaHoaDon = '$maHoaDon'";
        $result = $conn->query($sql);

        $conn->close();

        return $result;
    }

    
    
    
}
?>