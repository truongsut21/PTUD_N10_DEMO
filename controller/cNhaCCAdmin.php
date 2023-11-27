<?php
    include_once("Model/mNhaCCAdmin.php");
    class CNhaCC{
        function getAllNCC(){
            $p = new MNhaCC();
            $tbl = $p -> selectAllNCC();
            return $tbl;
        }
    }
?>