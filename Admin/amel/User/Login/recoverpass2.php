<?php
    require_once('../../connect.php');
    session_start();
    $id=$_SESSION["id"];
    $pass=$_POST["password"];
    $cpass=$_POST["cpassword"];
    $konfirm=$_POST["konfirm"];
    $query=mysqli_fetch_assoc(mysqli_query($conn,"SELECT password from user where id_akun='$id'"));
    $query2=mysqli_fetch_assoc(mysqli_query($conn,"SELECT pass from merchant where id='$id'"));

    if(mysqli_num_rows(mysqli_query($conn,"SELECT password from user where id_akun='$id'")) > 0){
        if($query["password"]==$konfirm){
            if($pass==$cpass){
                $upCust = mysqli_query($conn,"UPDATE user set password='$pass' where id_akun='$id'");
                if($upCust){
                    echo "berhasil";
                }
            }else{
                echo "Password Dan Konfirm Password tidak sama";
            }
        }
    }else if(mysqli_num_rows(mysqli_query($conn,"SELECT pass from merchant where id='$id'"))){
        if($query2["pass"]==$konfirm){
            if($pass==$cpass){
                $pass = md5($pass);
                $upCust = mysqli_query($conn,"UPDATE merchant set pass='$pass' where id='$id'");
                if($upCust){
                    echo "berhasil";
                }
            }else{
                echo "Password Dan Konfirm Password tidak sama";
            }
        }
    }else{
        echo "Konfirmasi password salah, silahkan lihat email anda kembali";
    }
?>