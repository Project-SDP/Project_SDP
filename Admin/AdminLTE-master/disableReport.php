<?php
    include("conn.php");
    $id=$_POST["id"];
    echo $id;
    $query="SELECT * from report where id_report='$id'";
    $query=mysqli_query($link,$query);
    $query=mysqli_fetch_assoc($query);
    if($query["status"]==0){
        mysqli_query($link,"UPDATE report set status=1 where id_report='$id'");
    }
    if($query["pelapor"]=="customer"){
        mysqli_query($link,"UPDATE merchant set status=-1 where id='$query[id_merchant]'");
    }else{
        mysqli_query($link,"UPDATE user set status=-1 where id_akun='$query[id_customer]'");
    }
?>