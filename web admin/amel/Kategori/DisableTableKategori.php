<?php
    include("../connect.php");
    $id=$_POST["id"];
    echo $id;
    $query="SELECT status from kategori where id_kategori='$id'";
    $query=mysqli_query($conn,$query);
    $query=mysqli_fetch_assoc($query);
    if($query["status"]==1){
        mysqli_query($conn,"UPDATE kategori set status=0 where id_kategori='$id'");
    }else{
        mysqli_query($conn,"UPDATE kategori set status=1 where id_kategori='$id'");
    }
?>