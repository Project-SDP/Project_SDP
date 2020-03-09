<?php
    require_once("connect.php");
    $dtPass=$_POST["pass_akun"];
    $dtConPass=$_POST["conpass_akun"];
    if($dtPass!=$dtConPass){
        echo "Pass Salah";
    }
    else{
        echo "Pass Benar";
    }
?>