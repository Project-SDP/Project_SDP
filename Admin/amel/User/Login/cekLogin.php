<?php

    require_once("../../connect.php");
    session_start();

    $_SESSION['loggedUser']='';
    $_SESSION['status']='';
    $user = $_POST['inp'];
    $pass = $_POST['pass'];
    $idTemp = '';
    $stat = '';
    $As = $_POST['As'];
    $pass = $conn->real_escape_string($pass);  
    $pass = substr(md5($pass),0,20); 
    $user = $conn->real_escape_string($user);
    if ($As =='Merchant'){
        $res = mysqli_query($conn , "select * from merchant");
        while ($baris = mysqli_fetch_assoc($res)){
            if($baris["email"]==$user && $baris["pass"]==$pass){
                if($baris['status']==1){
                    $idTemp= $baris['email'];
                }else if($baris['status']==0){
                    $stat = "Akun anda belum terverifikasi";
                }else{
                    $stat = "Akun anda telah diblokir";
                }
            }
            
            if($baris["notelp"]==$user && $baris["pass"]==$pass){
                if($baris['status']==1){
                    $idTemp= $baris['email'];
                }else if($baris['status']==0){
                    $stat = "Akun anda belum terverifikasi";
                }else{
                    $stat = "Akun anda telah diblokir";
                }
            }
        }
            
            if($idTemp!= ''){
                $_SESSION['loggedUser']=$idTemp;
                $_SESSION['status']=$idTemp;
                echo "2";
            }else if($stat==''){
                 echo "Login Gagal";
            }else{
                echo $stat;
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