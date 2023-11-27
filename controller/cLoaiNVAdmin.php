<?php
    include_once("Model/mLoaiNVAdmin.php");
    class CLoaiNV{
        function getAllLoaiNV(){
            $p = new MLoaiNV();
            $tbl = $p -> selectAllLoaiNV();
            return $tbl;
        }
    }
?>