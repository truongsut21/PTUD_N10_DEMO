<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Tạo Đơn Hàng</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style_TDH.css">
    <style>
        
    </style>
</head>
<body>

    
    <header>
        <div class="row">
            <div class="col-1<2">
                <ul class="header-menu">
                    <li style="float: left;"><a href="nhanvienbanhang.php">       Trang chủ</a></li>
                </ul>
            </div>
        </div>
    </header>


    

    <div id="product-list">
        <h3>Sản Phẩm</h3>

        <input type="text" id="product-search" placeholder="Tìm sản phẩm...">
        <?php 
                     
                    include_once("View/vProductNVBH.php");
                    $vProduct = new VProduct();
                    $vProduct->viewAllProduct();
                          
        ?>
        
    </div>

    <div id="order-form">
        <h2>Thông Tin Đơn Hàng</h2>
        <form action="#" method="get">
            <div>
                <label for="customer-name">Tên Khách Hàng:</label>
                <input type="text" id="customer-name" name="customer-name" required>
            </div>
            
            <div>
                <label for="customer-phone">Số Điện Thoại Khách Hàng:</label>
                <input type="text" id="customer-phone" name="customer-phone" required>
            </div>
           
            <div>
                <label for="customer-email">Email:</label>
                <input type="text" id="customer-email" name="customer-email" required>
            </div>
            
            <div>
                <label for="customer-diachi">Địa chỉ giao hàng:</label>
                <input type="text" id="customer-diachi" name="customer-diachi" required>
            </div>
            <div id="order-products">
                <h4>Sản Phẩm đã chọn:</h4>
                
                <ul id="selected-products"  >
              
                </ul>
                
            </div>

            <div id="total-amount">
                    <input type="hidden"  id="total-amount-value2" name="tongtien" value="" />
                    <h4>Tổng Tiền: <span id="total-amount-value">0 VNĐ</span></h4>
            </div>



            <button type="submit" name="btnAddOrder">Tạo Đơn Hàng</button>
        </form>
    </div>
    <script>
        // JavaScript để thêm/xoá sản phẩm vào danh sách đơn hàng
        const productList = document.querySelector('#product-list');
        const selectedProducts = document.querySelector('#selected-products');

     //khi checkbox sản phẩm được chọn
     productList.addEventListener('change', (event) => {
        if (event.target.classList.contains('product-checkbox')) {
            const productId = event.target.getAttribute('data-product-id');
            const productPrice = event.target.getAttribute('data-product-price');
            const quantity = event.target.parentElement.querySelector('.product-quantity').value;

            const selectedProduct = document.querySelector(`#selected-products [value="${productId}"]`);

            if (event.target.checked) {
                const listItem = document.createElement('li');
                listItem.innerHTML = `${productId} - ${quantity} x ${productPrice} VNĐ = <span class="selected-amount">${quantity * productPrice}</span> VNĐ`;
                
                const hiddenInput = document.createElement('input');
                hiddenInput.type = 'hidden';
                hiddenInput.name = 'selected-products';
                hiddenInput.value = `${productId}`;

                listItem.appendChild(hiddenInput);
                selectedProducts.appendChild(listItem);
            } else {
                if (selectedProduct) {
                    selectedProducts.removeChild(selectedProduct.parentNode);
                }
            }

            updateTotalAmount();
        }
    });

    function updateTotalAmount() {
        let totalAmount = 0;
        const selectedAmounts = document.querySelectorAll('.selected-amount');
        selectedAmounts.forEach((amount) => {
            totalAmount += parseFloat(amount.textContent);
        });

        document.getElementById('total-amount-value').textContent = totalAmount.toFixed(2) + ' VNĐ';
        document.getElementById('total-amount-value2').value = totalAmount.toFixed(2);
    }
        
    
    
    
    </script>

<?php

    include_once("Controller/cHoaDon.php");
    include_once("Controller/cProductNVBH.php");

    if (isset($_REQUEST["btnAddOrder"])) {
        
        $ngayLap = date("Y-m-d"); // Ngày lập tự động là ngày tạo đơn hàng
        $tongTien = $_REQUEST["tongtien"];
        // Lấy số lượng từ danh sách sản phẩm đã chọn
        //$soLuong = count(explode(',', $maSanPham));
        $ngayLapChiTietHoaDon = date("Y-m-d"); // You may adjust the format as needed
        $maSanPham = $_REQUEST["selected-products"]; // Assuming this is a comma-separated list of product IDs
        $soLuong = count(explode(',', $maSanPham)); // Adjust this if needed
        $diaChiGiaoHang = $_REQUEST["customer-diachi"];
        $hoTen = $_REQUEST["customer-name"];
        $soDienThoai = $_REQUEST["customer-phone"];
        $email = $_REQUEST["customer-email"];

        
        // Thêm đơn hàng vào cơ sở dữ liệu
        
        $p = new cHoaDon();
        $result = $p->addOrder($ngayLap, $tongTien, $ngayLapChiTietHoaDon, $maSanPham, $soLuong, $diaChiGiaoHang, $hoTen, $soDienThoai, $email);
        //$result = $p -> addOrder( $maNhanVien, $maKhachHang, $soLuong, $ngayLap, $tongTien);
        
        if ($result) {
            echo "Đơn hàng đã được tạo thành công.";
        } else {
            echo "Đã có lỗi xảy ra khi tạo đơn hàng.";
        }
    }
?>


</body>
</html>