<?php
session_start();
if (!isset($_SESSION['MaKhachHang']) || empty($_SESSION['MaKhachHang'])) {
    // Nếu chưa đăng nhập, chuyển hướng về trang login.php
    header('location: dangnhap.php');
    exit();
}
$mkc = '';
$mkdefa = '';
$remkdefa = '';
if((isset($_POST['submit'])) && ($_POST['submit'])){
            $oldPassword=$_REQUEST["oldpass"];
            $newPassword=$_REQUEST["newpass"];
            $mlnkm=$_REQUEST["renewpass"];
            $checkpass = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';
            $SoDienThoaiSession = $_SESSION['MaKhachHang'];
        if(empty($oldPassword) || empty($newPassword)  ||empty($mlnkm)){
            $txt = "Bạn cần nhập đủ thông tin";
        }else if($newPassword != $mlnkm){
            $txt = "Mật khẩu nhập lại không trùng khớp";
        }
        else if((!preg_match($checkpass, $newPassword))){
            $txt = "Mật khẩu ít nhất có 8 ký tự trong đó ít nhất một ký tự đặc biệt như @$!%*?&, ký tự chữ thường, hoa từ 'a' đến 'z' và số từ 0 - 9";
        }
        else{
            include_once("../Controller/ckhachhang.php");
            $p =  new controlProduct();
            $kq = $p->capnhatmatkhau($oldPassword, $newPassword,$SoDienThoaiSession);
                if($kq==1){
                    echo "<script> alert('Đổi mật khẩu thành công')</script>";
                    echo header("refresh: 0; url='../layout/header.php'");
                }
                else{
                    $txt = "Lỗi";
                }     
        }
        
        $mkc = $oldPassword;
        $mkdefa = $newPassword;
        $remkdefa = $mlnkm;  
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../css/util.css">
    <link rel="stylesheet" type="text/css" href="../css/main_long.css">
    <title>Đổi mật khẩu</title>
</head>
<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="../img/img-02.png" alt="IMG">
                </div>

                <form class="login100-form validate-form" method="post" >
                    <span class="login100-form-title">
                        Đổi mật khẩu 
                    </span>

                    <div class="wrap-input100 ">
                        <input class="input100" type="text" name="oldpass" value="<?php echo $mkc; ?>" placeholder="Nhập mật khẩu cũ">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 ">
                        <input class="input100" type="text" name="newpass" value="<?php echo $mkdefa; ?>" placeholder="Nhập mật khẩu mới">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 ">
                        <input class="input100" type="password" name="renewpass" value="<?php echo $remkdefa; ?>"placeholder="Nhập lại mật khẩu">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <?php
                    if (isset($txt) && ($txt != "")) {
                        echo "<div style='color: red; text-align: center;'>$txt</div>";
                    }
                    ?>
                    <div class="container-login100-form-btn">
                        <input type="submit" name="submit" value="Đổi mật khẩu" class="login100-form-btn">

                    </div>
                </form>
            </div>
        </div>
    </div>
     
</body>
<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="../vendor/bootstrap/js/popper.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/select2/select2.min.js"></script>
    <script src="../vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <script src="../js/mainn.js"></script>

</html>