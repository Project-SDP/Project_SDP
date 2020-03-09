<?php
    require_once("connect.php");
        $dtUser=$_POST["username"];
        $dtNoHp=$_POST["nohp"];
        $dtPass=$_POST["pass"];
        $dtConPass=$_POST["conpass"];
        $dtEmail=$_POST["email"];
        $dtNamaDepan=$_POST["namadepan"];
        $dtNamaBelakang=$_POST["namabelakang"];
        $dtAlamat=$_POST["alamat"];
       
        if($dtUser!="" && $dtPass!=""&& $dtConPass!="" && $dtNoHp!=""){
            $query="select * from user";
            $cekakun=mysqli_query($conn,$query);
            $ada=false;
            while($baris=mysqli_fetch_assoc($cekakun)){
                if($baris["nohp_akun"]==$dtNoHp){
                    $ada=true;
                }
            }
            if(!$ada){
                if($dtPass==$dtConPass){
                    mysqli_query($conn,"INSERT into user values
                    ($dtNamaDepan','$dtNamaBelakang','$dtEmail','$dtUser','$dtPass','$dtAlamat','$dtNoHp')");
                }
                else{
                    echo "Password Tidak Sama";
                }
            }
            else{
                echo "No HP sudah digunakan";
            }
        }
        else{
            echo"Tidak Boleh Ada Yang Kosong";
        }
?>