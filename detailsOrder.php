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
    include_once('./controller/cDetailsOrder.php');
    include_once('./view/vDetailsOrder.php');


    $c = new CDetailsOrder();
    $v = new VDetailsOrder();

    $c -> handleComment();
    $c -> handleReturn();

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
                                <li>Miễn phí vận chuyển cho đơn hàng từ 399k</li>
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
                        <a href="./index.php"><img src="./img/logo.png" alt=""></a>
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
                            <li><a href="#">Danh mục</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./xemsanpham.php">Xem sản phẩm</a></li>
                                    <li><a href="./dathang.php">Đặt hàng</a></li>
                                    <li><a href="./thongtinsanpham.html">Xem thông tin đơn hàng</a></li>
                                    <li><a href="./huydon.html">Hủy đơn</a></li>
                                    <li><a href="#">Khác</a></li>
                                </ul>
                            </li>
                            <li><a href="./shop.php">Shop</a></li>
                            <li><a href="#">Tin tức</a></li>
                            <li><a href="#">Liên hệ</a></li>
                            <li><a href="#">Chính sách</a></li>
                            <li><a href="#">Quản lý</a></li>
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
                        <h2>Chi tiết đơn hàng</h2>
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
                                    <th class="shoping__product">Sản phẩm</th>
                                    <th>Số lượng</th>
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



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Đánh giá sản phẩm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="get" action="#">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tên sản phẩm</label>
                            <input type="email" class="form-control" id="nameProduct" placeholder="name@example.com" disabled>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlFile1">Hình ảnh</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" placeholder="Hình ảnh sản phẩm">
                        </div>

                        <div class="form-group">
                            <label for="formControlRange">Mức độ hài lòng</label>
                            <input name="sao" type="range" min="0" max="5" class="form-control-range " id="formControlRange" onInput="$('#rangeval').html($(this).val())">
                            <span id="rangeval">3<!-- Default value --></span>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Nội dung đánh giá</label>
                            <textarea name="noidung" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="maSanPham" name="maSanPham" value="">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                        <button type="submit" name="btnComment" class="btn btn-primary">Xác nhận</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- model trả hàng  -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Trả sản phẩm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="get" action="#">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tên sản phẩm</label>
                            <input type="name" class="form-control" id="nameProduct2" placeholder="name@example.com" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Số lượng sản phẩm</label>
                            <input type="number" name="soLuong" class="form-control" id="" placeholder="Nhập số lượng">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Hình ảnh</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" placeholder="Hình ảnh sản phẩm">
                        </div>

                    
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Nguyên nhân trả hàng</label>
                            <textarea name="noidung" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="maChiTietHoaDon" name="maChiTietHoaDon" value="">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                        <button type="submit" name="btnReturn" class="btn btn-primary">Xác nhận</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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
    <script>
        function handleBtnComment(name,id) {
            // id là mã sản phẩm
            console.log(name)
            document.getElementById("nameProduct").value = name;
            document.getElementById("maSanPham").value = id;
        }

        function handleBtnReturn(name,id) {
            // id là mã chi tiết hoá đơn 
            console.log(name)
            document.getElementById("nameProduct2").value = name;
            document.getElementById("maChiTietHoaDon").value = id;
        }
    </script>


</body>

</html>