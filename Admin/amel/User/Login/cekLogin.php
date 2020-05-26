<?php

    require_once("../../connect.php");
    session_start();
    $_SESSION['loggedUser']='';
    $_SESSION['status']='';
    $user = $_POST['inp'];
    $pass = $_POST['pass'];
    $idTemp = '';
    $As = $_POST['As'];

    if ($As =='Merchant'){
        $res = mysqli_query($conn , "select * from merchant");
        while ($baris = mysqli_fetch_assoc($res)){
            if($baris["email"]==$user && $baris["pass"]==$pass){
                $idTemp= $baris['email'];
            }
            
            //mmerchant  gaono username e
            // if($baris["username"]==$user && $baris["password"]==$pass){
            //     $idTemp= $baris['id_akun'];
            // }
            
            if($baris["notelp"]==$user && $baris["password"]==$pass){
                $idTemp= $baris['email'];
            }
    
        }
            
            if($idTemp!= ''){
                $_SESSION['loggedUser']=$idTemp;
                $_SESSION['status']=$idTemp;
                // tunggu halaman login tok
                echo "2";
            }else {
                 echo "Login Gagal";
            }

    }else{
        $res = mysqli_query($conn , "SELECT * from user");
        foreach ($res as $key => $baris) {
            if($baris["email"]==$user && $baris["password"]==$pass){
                $idTemp= $baris['username'];
            }
            
            if($baris["username"]==$user && $baris["password"]==$pass){
                $idTemp= $baris['username'];
            }
            
            if($baris["no_telp"]==$user && $baris["password"]==$pass){
                $idTemp= $baris['username'];
            }
    
        }
            
            if($idTemp!= ''){
                $_SESSION['loggedUser']=$idTemp;
                // tunggu halaman login tok
                echo "1";
            }else {
                 echo "Login Gagal";
            }
    }
    
   

?>