<?php
    require_once('../../connect.php');
    session_start();
    $id=$_SESSION["id"];
    $pass=$_POST["password"];
    $cpass=$_POST["cpassword"];
    $konfirm=$_POST["konfirm"];
    $query=mysqli_fetch_assoc(mysqli_query($conn,"SELECT password from user where id_akun='$id'"));
    if($query["password"]==$konfirm){
        if($pass==$cpass){
            mysqli_query($conn,"UPDATE user set password='$pass' where id_akun='$id'");
            echo "berhasil";
        }else{
           echo "Password Dan Konfirm Password tidak sama";
        }
    }else{
        echo "Konfirmasi password salah, silahkan lihat email anda kembali";
    }
?>