<?php
    require_once("connect.php");
    session_start();
    $dtUser=$_POST["username"];
    $dtNoHp=$_POST["nohp"];
    $dtPass=$_POST["pass"];
    $dtConPass=$_POST["conpass"];
    $dtNamaDepan=$_POST["namadepan"];
    $dtNamaBelakang=$_POST["namabelakang"];
    $dtAlamat=$_POST["alamat"];
    $sql="SELECT * FROM user where nohp_akun =$dtNoHp";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        $results=mysqli_fetch_assoc($result);
        if($results["pass_akun"]==$dtPass){
            $_SESSION['akun']=$dtNoHp;
            mysqli_query($conn,"UPDATE user set status=1 where nohp_akun=$dtNoHp");
            echo "1";
        }else{
            echo "Password Salah";
        }
    }
?>