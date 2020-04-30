<?php

    require_once("../../connect.php");
    session_start();
    $_SESSION['loggedUser']='';
    $pass = $_POST['pass'];
    $user = $_POST['inp'];
    $idTemp = '';
    $As = $_POST['As'];
    if ($As =='Merchant'){
        $res = mysqli_query($conn , "select * from merchant");
        while ($baris = mysqli_fetch_assoc($res)){
            if($baris["email"]==$user && $baris["pass"]==$pass){
                $idTemp= $baris['id_akun'];
            }
            
            //mmerchant  gaono username e
            // if($baris["username"]==$user && $baris["password"]==$pass){
            //     $idTemp= $baris['id_akun'];
            // }
            
            if($baris["notelp"]==$user && $baris["password"]==$pass){
                $idTemp= $baris['id_akun'];
            }
    
        }
            
            if($idTemp!= ''){
                $_SESSION['loggedUser']=$idTemp;
                // tunggu halaman login tok
                echo "merchant";
            }else {
                 echo "Login Gagal";
            }

    }else{
        $res = mysqli_query($conn , "SELECT * from user");
        while ($baris = mysqli_fetch_assoc($res)){
            if($baris["email"]==$user && $baris["password"]==$pass){
                $idTemp= $baris['id_akun'];
            }
            
            if($baris["username"]==$user && $baris["password"]==$pass){
                $idTemp= $baris['id_akun'];
            }
            
            if($baris["no_telp"]==$user && $baris["password"]==$pass){
                $idTemp= $baris['id_akun'];
            }
    
        }
            if($idTemp!= ''){
                $_SESSION['loggedUser']=$idTemp;
                // tunggu halaman login tok
                echo "user";
            }else {
                 echo "Login Gagal";
            }
    }
    
   

?>