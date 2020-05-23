<?php
    include("connect.php");
    $id=$_POST["id"];
    $query="update htransaksi set status_htrans='DITERIMA' where id_htrans='$id'";
    mysqli_query($conn,$query);
?>