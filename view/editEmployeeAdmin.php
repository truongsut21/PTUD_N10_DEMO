<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // include_one("Controller/acEmployee.php");
    $p = new CEmployeeAdmin();
    $tblEdit = $p->getEmployeeToEdit($_REQUEST["MaNhanVien"]);

    if (mysqli_num_rows($tblEdit) > 0) {
        while ($r = mysqli_fetch_assoc($tblEdit)) {
            $hoten = $r["HoTen"];
            $matkhau = $r["MatKhau"];
            $email = $r["Email"];
            $sdt = $r["SoDienThoai"];
            $diachi = $r["DiaChi"];
            $loainv = $r["LoaiNhanVien"];
            $MaNhanVien = $r["MaNhanVien"];
        }
    }

    if (isset($_REQUEST["btnEdit"])) {
            $MaNhanVien = $_REQUEST["MaNhanVien"];
            $hoten = $_REQUEST["hoten"];
            $matkhau = $_REQUEST["matkhau"];
            $email = $_REQUEST["Email"];
            $sdt = $_REQUEST["SDT"];
            $diachi = $_REQUEST["DiaChi"];
            $loainv = $_REQUEST["loaiNV"];

        $result = $p->editEmployee($MaNhanVien, $hoten, $matkhau, $email, $sdt, $diachi, $loainv);

        if ($result == 1) {
            echo "<script>alert('Edit Employee successfully!')</script>";
            echo header("refresh: 0; url = 'indexAdmin.php?nhan-vien'");
        } else{
            echo "<script>alert('Edit Employee unsuccessfully!')</script>";
        }
    }
    ?>
    <form action="#" method="post" enctype="multipart/form-data">
        <div class="form-row">
            <div class="form-group col-md-5">
                <label>Họ tên</label>
                <input type="text" name="hoten" class="form-control" style="width: 600px; margin-bottom: 15px" value="<?php echo $hoten ?>" required>
            </div>
            <div class="form-group col-md-7">
                <label>Mật khẩu</label>
                <input type="text" name="matkhau" class="form-control" style="width: 600px; margin-bottom: 15px" value="<?php echo $matkhau ?>" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-5">
                <label>Email</label>
                <input type="text" name="Email" class="form-control" style="width: 600px; margin-bottom: 15px" value="<?php echo $email ?>" required>
            </div>
            <div class="form-group col-md-5">
                <label>SDT</label>
                <input type="text" name="SDT" class="form-control" style="width: 600px; margin-bottom: 15px" value="<?php echo $sdt ?>" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-5">
                <label>Địa chỉ</label>
                <input type="text" name="DiaChi" class="form-control" style="width: 600px; margin-bottom: 15px" value="<?php echo $diachi ?>" required>
            </div>
            <div class="form-group col-md-7 formCus2">
                <label>Loại NV</label>
                <?php
                    include_once("Controller/cLoaiNVAdmin.php");
                    $ce = new CLoaiNVAdmin();
                    $tbl = $ce -> getAllLoaiNV();

                    if(mysqli_num_rows($tbl)>0){
                        echo '<select name="loaiNV" class="form-control" style="width: 600px; margin-bottom: 15px">';
                        while ($r = mysqli_fetch_assoc($tbl)){
                            if($loainv == $r["LoaiNhanVien"]){
                                echo '<option selected value="'.$r["MaLoaiNhanVien"].'">'.$r["GhiChu"].'</option>';
                            }else{
                                echo '<option value="'.$r["MaLoaiNhanVien"].'">'.$r["GhiChu"].'</option>';
                            }
                        }
                        echo '</select>';
                    }
                ?>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <input type="hidden" value="">
                <button type="reset" class="btnCus3 btnCus">Reset</button>
                <button type="submit" name='btnEdit' class="btnCus3 btnCus">Update</button>
            </div>
        </div>

    </form>
</body>

</html>