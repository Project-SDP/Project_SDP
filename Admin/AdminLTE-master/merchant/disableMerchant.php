<?php
    include("../conn.php");
    $id=$_POST["id"];
    echo $id;
    $query="SELECT status from merchant where id='$id'";
    $query=mysqli_query($link,$query);
    $query=mysqli_fetch_assoc($query);
    mysqli_query($link,"UPDATE merchant set status=-1 where id='$id'");
?>