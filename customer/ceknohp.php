<?php
    require_once("connect.php");
    $dtNoHp=$_POST["nohp_akun"];
    $query="select * from user";
    $cekakun=mysqli_query($conn,$query);
    $ada=false;
    while($baris=mysqli_fetch_assoc($cekakun)){
        if($baris["nohp_akun"]==$dtNoHp){
            $ada=true;
        }
    }
    if(!$ada){
        echo "No HP Belum digunakan";
    }
    else{
        echo "No HP sudah digunakan";
    }
    
?>