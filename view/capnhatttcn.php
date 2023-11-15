<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "mypham";
    $conn = mysqli_connect($server, $username, $password, $database);
    if (!$conn) {
        die("Kết nối không thành công: " . mysqli_connect_error());
    }
    // Thiết lập bảng mã kết nối
    mysqli_set_charset($conn, 'utf8');
    session_start();
    // Kiểm tra xem người dùng đã đăng nhập hay chưa
    if (!isset($_SESSION['MaKhachHang']) || empty($_SESSION['MaKhachHang'])) {
        // Nếu chưa đăng nhập, chuyển hướng về trang login.php
        header('location: dangnhap.php');
        exit();
    }
if((isset($_POST['submit'])) && ($_POST['submit'])){
    $pattern = '/^[0-9]{10}$/';
    $HoTen = $_POST['HoTen'];
    $SoDienThoai = $_POST['SoDienThoai'];
    $DiaChi = $_POST['DiaChi'];
    $Email = $_POST['Email'];
    if(empty($HoTen) || empty($SoDienThoai) ||empty($Email)){
        $txt = "Bạn cần nhập đầy đủ thông tin";
    }else if(!preg_match($pattern, $SoDienThoai)){
        $txt = "Số điện thoại không hợp lệ";
    }else if(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
        $txt = "Email không hợp lệ";
    }else{
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Xử lý dữ liệu khi form được gửi đi 
        
            $SoDienThoaiSession = $_SESSION['MaKhachHang'];
        
            // Cập nhật thông tin cá nhân trong cơ sở dữ liệu
            $query = "UPDATE khachhang SET HoTen='$HoTen', SoDienThoai='$SoDienThoai', DiaChi='$DiaChi', Email='$Email' WHERE MaKhachHang='$SoDienThoaiSession'";
            $result = mysqli_query($conn, $query);
        
            if ($result) {
                echo "<script> alert('Cập nhật thông tin thành công')</script>";
                echo header("refresh: 0; url='../layout/header.php'");
            } else {
                echo "Lỗi cập nhật thông tin: " . mysqli_error($conn);
            }
        }
    }
}
// Lấy thông tin khách hàng từ cơ sở dữ liệu
$SoDienThoai = $_SESSION['MaKhachHang'];
$query = "SELECT * FROM khachhang WHERE MaKhachHang = '$SoDienThoai'";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Lỗi truy vấn: " . mysqli_error($conn));
}

$row = mysqli_fetch_assoc($result);
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
    <title>Cập nhật thông tin cá nhân</title>
</head>
<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="../img/img-02.png" alt="IMG">
                </div>

                <form  action="<?php echo $_SERVER['PHP_SELF'];?>" class="login100-form validate-form" method="post">
                    <span class="login100-form-title">
                        Cập nhập thông tin
                    </span>

                    <div class="wrap-input100 ">
                        <input class="input100" type="text" name="HoTen" value="<?php echo $row['HoTen']; ?>">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 ">
                        <input class="input100" type="text" name="SoDienThoai" value="<?php echo $row['SoDienThoai']; ?>">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 ">
                        <input class="input100" type="text" name="DiaChi" value="<?php echo $row['DiaChi']; ?>">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-address-book-o" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 ">
                        <input class="input100" type="email" name="Email" value="<?php echo $row['Email']; ?>">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                    <?php
                    if (isset($txt) && ($txt != "")) {
                        echo "<div style='color: red; text-align: center;'>$txt</div>";
                    }
                    ?>
                    <div class="container-login100-form-btn">
                        <input type="submit" class="login100-form-btn" name="submit" value="Cập nhập">
                    </div>
                    
                </form>
            </div>
        </div>
    </div> 

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
</body>
</html>
