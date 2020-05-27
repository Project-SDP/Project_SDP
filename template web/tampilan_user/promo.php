<?php
    session_start();
    include("connect.php");
    $getNama=$_POST["nama"];
    $date_now= date("Y-m-d");
    $query="SELECT * from promo where judul_promo='$getNama'";
    $query=mysqli_fetch_assoc(mysqli_query($conn,$query));
    $date_promo=$query["tanggal_akhir"];
    if($date_now<=$date_promo){
        if($_SESSION["total"]<=$query["minumum_order"]){
            
            $_SESSION["promo"]=$query["potongan"];
            $_SESSION["nama_promo"]=$getNama;
            $promo="Rp " . number_format($query["potongan"],2,',','.');
            $_SESSION["tpromo"]=$promo;
            echo"true";
        }else{
            echo"Minimal Order $query[minumum_order] ";
        }
    }else{
        echo"Promo Tidak Valid";
    }
?>