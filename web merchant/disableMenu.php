<?php
    include("conn.php");
    $id=$_POST["id"];
    echo $id;
    $query="SELECT status_menu from menu where id_menu='$id'";
    $query=mysqli_query($link,$query);
    $query=mysqli_fetch_assoc($query);
    if($query["status_menu"]==1){
        mysqli_query($link,"UPDATE menu set status_menu=0 where id_menu='$id'");
    }else{
        mysqli_query($link,"UPDATE menu set status_menu=1 where id_menu='$id'");
    }
?>