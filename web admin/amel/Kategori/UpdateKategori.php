<?php
    require_once("../connect.php");
    $nama_kategori=$_POST["nama_kategori"];
    $id=$_POST["id"];
    $query="UPDATE kategori set nama_kategori='$nama_kategori' where id_kategori='$id'";
    echo $query;
    mysqli_query($conn,$query);
?>
