<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/xemsanpham.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->
    <?php
    session_start();
    include_once('./controller/cOrderManage.php');
    include_once('./view/vOrderManage.php');

    $c = new COrderManager();
    $v = new VOrderManager();

    ?>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> shopmyphamNumberTwo@gmail.com</li>
                                <li>Miễn phí vận chuyển khi đăng ký thành viên</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="./view/capnhatttcn.php"><i class="fa fa-user"></i></a>
                                <a href="#"><i class="fa fa-phone"></i></a>
                                <a href="cart.php"><i class="fa fa-shopping-bag"></i></a>
                            </div>

                            <div class="header__top__right__auth">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Tài khoản của bạn
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="orderManage.php">Quản lý đơn hàng</a>
                                        <a class="dropdown-item" href="view/capnhatttcn.php">Cập nhật thông tin</a>
                                        <a class="dropdown-item" href="view/doimatkhau.php">Đổi mật khẩu</a>
                                        <a class="dropdown-item" href="?action=logout">Đăng xuất</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./indexuser.php"><img src="./img/logo.png" alt=""></a>
                    </div>
                </div>

                <div class="hero__search">
                    <div class="hero__search__form">
                    <form action="#" method="get">
                            <input type="text" name="tim" placeholder="Nhập sản phẩm cần tìm.">
                            <button class="site-btn" type="submit" name="timkiem">TÌM</button>
                        </form>
                    </div>
                </div>

                <div class="col-lg-12">
                <nav class="header__menu">
                    <ul>
                        <li><a href="indexuser.php">Trang Chủ</a>
                        <li><a href="#">Danh Mục</a>
                            <ul class="header__menu__dropdown">
                                <li><a href="cart.php">Đặt hàng</a></li>
                                <li><a href="orderManage.php">Xem lịch sử mua hàng</a></li>
                            </ul>
                        </li>
                        <li><a href="shop.php">Sản Phẩm</a></li>
                        <li><a href="#">Liên Hệ</a></li>
                        <li><a href="#">Chính Sách</a></li>
                    </ul>
                </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
    <br>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Lịch sửa mua hàng</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Đơn hàng - Địa chỉ</th>
                                    <th>Ngày tạo</th>
                                    <th>Mã đơn</th>
                                    <th>Thành tiền</th>
                                    <th></th>

                                </tr>
                            </thead>
                            <tbody>
                                

                                <?php
                                $v->viewAllOrder();

                                ?>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Shoping Cart Section End -->

    <!-- Footer Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row" style="margin: 20px 0 10px">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo" style="line-height: 150px">
                            <a href="./index.html"><img src="img/img-02logo.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h4>Truy cập nhanh</h4>
                        <ul style="list-style-type: none; color: #333; margin: 10px 0 0 0">
                            <li><a style="color: #333" href="./index.php">Home</a></li>
                            <li><a style="color: #333" href="./shop.php">Sản phẩm</a></li>
                            <li><a style="color: #333" href="./contact.php">Liên hệ</a></li>
                            <li><a style="color: #333" href="./chinhsach.php">Chính sách</a></li>
                            <li><a style="color: #333" href="./orderManage.php">Quản lý đơn hàng</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h4>Liên hệ</h4>
                        <div class="footer__widget__social" style="margin: 10px 0 0 0">
                            <ul style="list-style-type: none; color: #333">
                                <li>Address: 12 Nguyễn Văn Bảo</li>
                                <li>Phone: 09.8888.9898</li>
                                <li>Email: shopmyphamNumberTwo@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12" style="text-align: center !important; border-top: 1px solid #ccc; margin: 15px 0 0 0">
                    <div class="footer__copyright" ">
                        <div class="footer__copyright__text" style="width: 100%; margin: 10px 0px 0 4%">
                            <p> Copyright &copy; NumberTwo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>


</body>

</html>