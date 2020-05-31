<?php
    include("../conn.php");
    $id=$_POST["id"];
    echo $id;
    $query="SELECT status_htrans from htransaksi where id_htrans='$id'";
    $query=mysqli_query($link,$query);
    $query=mysqli_fetch_assoc($query);
    if($query["status_htrans"]=="LUNAS"){
        mysqli_query($link,"UPDATE htransaksi set status_htrans ='DIKEMAS' where id_htrans='$id'");
    }else{
        mysqli_query($link,"UPDATE htransaksi set status_htrans ='DIBATALKAN' where id_htrans='$id'");
    }
?>