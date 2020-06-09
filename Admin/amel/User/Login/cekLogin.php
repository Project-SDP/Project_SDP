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
        $ctr=-1;
        foreach ($res as $key => $baris) {
            if($baris["email"]==$user && $baris["password"]==$pass){
                $idTemp= $baris['id_akun'];
                $ctr=$baris["status"];
            }
            
            if($baris["username"]==$user && $baris["password"]==$pass){
                $idTemp= $baris['id_akun'];
                $ctr=$baris["status"];
            }
            
            if($baris["no_telp"]==$user && $baris["password"]==$pass){
                $idTemp= $baris['id_akun'];
                $ctr=$baris["status"];
            }
    
        }
            
            if($idTemp!= ''){
                if($ctr==0){
                    echo "Akun anda telah di blokir";
                }else{
                    $_SESSION['loggedUser']=$idTemp;
                    // tunggu halaman login tok
                    echo "1";
                }
            }else {
                 echo "Login Gagal";
            }
    }
    
   

?>