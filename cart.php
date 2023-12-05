
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>XEM SẢN PHẨM</title>
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
    <?php
       session_start();
    include("controller/cCart.php");
    $p = new CCart();
    $p->handleUpdateProduct();
    $p->handleDeleteProduct();

    ?>
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
                                <div class="dropdown">
                                    <button  class="btn dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
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
                            <button class="site-btn" type="submit" name="timkiem">
                                <i class="fa fa-search" value="Tìm kiếm"></i>
                            </button>
                        </form>
                    </div>
                </div>

                <div class="col-lg-12">
                <nav class="header__menu">
                    <ul>
                        <li><a href="indexuser.php">Trang Chủ</a>
                        <li><a href="#">Danh Mục</a>
                            <ul class="header__menu__dropdown">
                                <li><a href="#">Đặt hàng</a></li>
                                <li><a href="#">Xem lịch sử mua hàng</a></li>
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
    <br>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>GIỎ HÀNG</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Tổng</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php

                                include('./view/vCart.php');
                                $cart = new VCart();
                                $cart->viewAllProducts()
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-6">

                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <ul>


                            <li>
                                <h5>Tổng tiền</h5> <span id="allTotal">
                                    <?php

                                    $cart->cartTotal()
                                    ?>
                                </span>
                            </li>
                        </ul>
                        <a href="payment.php" class="primary-btn">Thanh Toán</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->

    <!-- Footer Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
         function confirmDelete() {
            return confirm("Bạn có chắc chắn muốn xóa không?");
        }
        function confirmUpdate() {
            return confirm("Bạn có chắc chắn cập nhật số lượng?");
        }
        var formatter = new Intl.NumberFormat('vi-VN', {
            style: 'currency',
            currency: 'VND',
            minimumFractionDigits: 0,
        });


        setInterval(() => {
            renderPrice()
        }, 100);

        const allTotalhtml = document.querySelector('#allTotal')
        const totalItem = document.querySelectorAll('.shoping__cart__total')
        const prices = document.querySelectorAll('._price')
        const quantity = document.querySelectorAll('._quantity')

        function renderPrice() {
            let allTotal = 0
            for (let i = 0; i < totalItem.length; i++) {
                totalItem[i].innerHTML = prices[i].innerHTML * quantity[i].value
                allTotal += prices[i].innerHTML * quantity[i].value
            }

            allTotalhtml.innerHTML = allTotal
        }
       
    </script>

</body>

</html>