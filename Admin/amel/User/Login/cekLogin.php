<?php

    require_once("../../connect.php");
    session_start();
    $_SESSION['loggedUser']='';
    $pass = $_POST['inp'];
    $user = $_POST['pass'];
    $idTemp = '';
    $res = mysqli_query($conn , "select * from user");
    
    //Pengecekan bareng USRNAME, EMAIL , NO TELP 
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
        }else {
             echo "Login Gagal";
        }

?>