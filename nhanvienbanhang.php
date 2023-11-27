<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Web Của Tôi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styleNVBH.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

    </style>

</head>

<body>
    <!--<div class="container">-->
    <?php
    session_start();
    ob_start();

    if (!isset($_SESSION['LoaiNhanVien']) || empty($_SESSION['LoaiNhanVien'])) {
        header('location: ./admin/login.php');
        exit();
    }

    if (isset($_GET['action']) && $_GET['action'] == 'logout') {
        session_unset();
        session_destroy();
        header('location: ./admin/login.php');
        exit();
    }
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 header">
                <a class="navbar-brand" href="#"><i class="fa fa-user-circle" aria-hidden="true"></i> NHÂN VIÊN BÁN HÀNG</a>
                <a href="?action=logout" data-toggle="tooltip" data-placement="bottom" title="ĐĂNG XUẤT"><b>Đăng xuất <i class="fas fa-sign-out-alt"></i></b></a>
            </div>
        </div>
    </div>



    <div class="container mt-3 body">
        <br>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="nhanvienbanhang.php">TRANG NHÂN VIÊN</a>
            </li>
            <li class="nav-item">

                <a class="nav-link" href="nhanvienbanhang.php?qldh">QUẢN LÝ ĐƠN HÀNG</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#khach-hang">KHÁCH HÀNG</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#thong-ke">SẢN PHẨM</a>
            </li>
        </ul>


        <?php
        if (isset($_REQUEST['qldh'])) {
            include_once('View/vOverDonDatHang.php');
        } elseif (isset($_REQUEST['upd'])) {
            include_once('View/vUpdCThd.php');
        } elseif (isset($_REQUEST['dele'])) {
            include_once('Controller/cQLHoaDon.php');
            $p = new cHoaDon;
            $p->xoaChiTietDonHang($_REQUEST['dele']);
        } else {
            include_once('View/vOverNv.php');
        }
        ?>

    </div>

</body>

</html>