<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TRANG CHỦ SHOP MỸ PHẨM</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="./css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="./css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="./css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="./css/xemsanpham.css" type="text/css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
</head>

<body>
    
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

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
                            <a href="#"><i class="fa fa-user"></i></a>
                            <a href="#"><i class="fa fa-phone"></i></a>
                            <a href="cart.php"><i class="fa fa-shopping-bag"></i></a>
                        </div>
                        <div class="header__top__right__auth">
                           <a href="./view/dangnhap.php">Đăng nhập</a>
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
                    <a href="./index.php"><img src="./img/logo.png" alt=""></a>
                </div>
            </div>

            <div class="hero__search">
                <div class="hero__search__form">
                    <form action="#">
                        <input type="text" name="search" placeholder="Nhập sản phẩm cần tìm.">
                        <button type="submit" class="site-btn">TÌM</button>
                    </form>
                </div>

            </div>

            <div class="col-lg-12">
                <nav class="header__menu">
                    <ul>
                        <li><a href="index.php">Trang Chủ</a>
                        <li><a href="index.php">Danh Mục</a>
                            <ul class="header__menu__dropdown">
                                <li><a href="./cart.php">Đặt hàng</a></li>
                                <li><a href="./thongtinsanpham.html">Xem thông tin đơn hàng</a></li>
                                <li><a href="./huydon.html">Hủy đơn</a></li>
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
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__item set-bg" data-setbg="img/bgmypham1.jpg">
                        <div class="hero__text">
                            <span>COSMETICS</span>
                            <h2>MỸ PHẨM<br>100% An toàn cho da</h2>
                            <p>Có sẵn nhận và giao hàng miễn phí</p>
                            <a href="shop.php" class="primary-btn">XEM NGAY</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>SẢN PHẨM</h2>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <?php
                include_once("view/vProduct.php");
                $p = new VProduct();
                if (isset($_REQUEST["search"])) {
                    $p->viewSearchProduct($_REQUEST["search"]);
                } else {
                    $p->viewAllProducts();
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Footer Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p>
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with
                                <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            </p>
                        </div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

  <!-- Js Plugins -->
  <script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/jquery.nice-select.min.js"></script>
    <script src="./js/jquery-ui.min.js"></script>
    <script src="./js/jquery.slicknav.js"></script>
    <script src="./js/mixitup.min.js"></script>
    <script src="./js/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/main.js"></script>

</body>

</html>