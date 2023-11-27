<?php
    include_once("Model/mEmployeeAdmin.php");
    class CEmployee{
        function getAllEmployees(){
            $p = new MEmployee();
            $tbl = $p -> selectAllEmployees();
            return $tbl;
        }

        function getAllEmployeeBySearch($search){
            $p = new MEmployee();
            $tbl = $p -> selectAllEmployeeBySearch($search);
            return $tbl;
        }

        function getDelEmployee($MaNhanVien){
            $p = new MEmployee();
            $tbl = $p -> selectDelEmployee($MaNhanVien);
            return $tbl;
        }

        function addEmployee($hoten,  $matkhau, $email, $sdt, $diachi, $loainv){
            $p = new MEmployee();
            $res = $p -> insertEmployee($hoten, $matkhau, $email, $sdt, $diachi, $loainv);
            if($res){
                return 1; //insert thành công
            }else{
                return 0; //insert không thành công
            }
        }

        function getEmployeeToEdit($MaNhanVien){
            $p = new MEmployee();
            $tbl = $p -> selectEmployeeToEdit($MaNhanVien);
            return $tbl;
        }

        function editEmployee( $MaNhanVien, $hoten, $matkhau, $email, $sdt, $diachi, $loainv){
            $p = new MEmployee();
            $res = $p -> updateEmployee( $MaNhanVien, $hoten, $matkhau, $email, $sdt, $diachi, $loainv);
            if($res){
                return 1; //update thành công
            }else{
                return 0; //update không thành công
            }
        }
    }
?>