<?php
    include("../AdminLTE-master/pages/forms/conn.php");
    $id=$_POST["id"];
    echo $id;
    $query="SELECT status from promo where id_promo='$id'";
    $query=mysqli_query($link,$query);
    $query=mysqli_fetch_assoc($query);
    if($query["status"]==1){
        mysqli_query($link,"UPDATE promo set status=0 where id_promo='$id'");
    }else{
        mysqli_query($link,"UPDATE promo set status=1 where id_promo='$id'");
    }
?>