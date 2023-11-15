<?php
    function checkuser1($user,$pass){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT * FROM nhanvien 
        where SoDienThoai='".$user."' AND MatKhau='".$pass."'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        if(count($kq) >0) return $kq[0]['LoaiNhanVien'];
        else return 0;
    } 

    class modelProduct{
        function changePassword1($email, $newPassword) {
            $con;
            $p= new clsketnoi();
            if($p->ketnoiDB($con)){
                $string = "UPDATE nhanvien SET MatKhau = '$newPassword' WHERE MaNhanVien = $email";
                $kq = mysqli_query($con,$string);
                $p->dongKetNoi($con);
                return $kq;
            }else{
                return false;
            }
        }
    }
?>