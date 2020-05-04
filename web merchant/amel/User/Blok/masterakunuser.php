<?php
    require_once("../../connect.php");
    $id=$_POST["id_akun"];
    ECHO $id;
    $query="SELECT status from user where id_akun='$id'";
    $query=mysqli_query($conn,$query);
    $query=mysqli_fetch_assoc($query);
    if($query["status"]==1){
        mysqli_query($conn,"UPDATE user set status=0 where id_akun='$id'");
    }else{
        mysqli_query($conn,"UPDATE user set status=1 where id_akun='$id'");
    }
?>