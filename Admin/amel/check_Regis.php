<?php
    require_once("../../customer/connect.php");
        $dtUser=$_POST["username"];
        $dtNoHp=$_POST["nohp"];
        $dtPass=$_POST["pass"];
        $dtConPass=$_POST["conpass"];
        $dtEmail=$_POST["email"];
        $dtNamaDepan=$_POST["namadepan"];
        $dtNamaBelakang=$_POST["namabelakang"];
        $dtKota=$_POST["kota"];
        $dtAlamat=$_POST["alamat"];
        $id=mysqli_fetch_assoc(mysqli_query($conn,"SELECT concat('C',lpad(nvl(max(substr(id_akun,2,4)),0)+1,4,'0')) as id from user"));
        if($dtUser!="" && $dtPass!=""&& $dtConPass!="" && $dtNoHp!=""){
            $query="select * from user";
            $cekakun=mysqli_query($conn,$query);
            $ada=false;
            while($baris=mysqli_fetch_assoc($cekakun)){
                if($baris["no_telp"]==$dtNoHp){
                    $ada=true;
                }
            }
            if(!$ada){
                if($dtPass==$dtConPass){
                    mysqli_query($conn,"INSERT into user values('$id[id]','$dtNamaDepan','$dtNamaBelakang','$dtEmail','$dtUser','$dtPass','$dtAlamat','$dtKota',0,'$dtNoHp',0)");
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