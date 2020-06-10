<?php
    require_once('../../connect.php');
    $karakter = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $tamp = '';
    for($i = 0; $i < 8; $i++) {
        $pos = rand(0, strlen($karakter)-1);
        $tamp .= $karakter{$pos};
    }

    $email=$_POST["kepada"];
    $as=$_POST["logAs"];
   
    if($as=="Customer"){
        $result = mysqli_query($conn,"SELECT * FROM user WHERE email ='$email' ");

        if(mysqli_num_rows($result) > 0) {
            mysqli_query($conn,"UPDATE user set password='$tamp' where email='$email'");
            echo "Berhasil c";
        }else{
            echo "Gagal c";
        }
    }else if($as=="Merchant"){
        $result = mysqli_query($conn,"SELECT * FROM merchant WHERE email ='$email' ");

        if(mysqli_num_rows($result) > 0) {
            mysqli_query($conn,"UPDATE merchant set pass='$tamp' where email='$email'");
            echo "Berhasil";
        }else{
            echo "Gagal ";
        } 
    }
?>