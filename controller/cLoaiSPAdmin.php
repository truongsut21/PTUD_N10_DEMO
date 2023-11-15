<?php
    include_once("Model/mLoaiSPAdmin.php");
    class CLoaiSP{
        function getAllLoaiSP(){
            $p = new MLoaiSP();
            $tbl = $p -> selectAllLoaiSP();
            return $tbl;
        }
    }
?>