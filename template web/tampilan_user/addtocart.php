<?php
    include("connect.php");
    session_start();
    if(isset($_SESSION["menu"]["$_POST[id]"])){
        $_SESSION["menu"]["$_POST[id]"]+=$_POST["qty"];
    }else{
        $_SESSION["allfood"].=$_POST["id"]."||";
        $_SESSION["menu"]["$_POST[id]"]=$_POST["qty"];
    }
    print_r($_SESSION["menu"]);
    print_r($_SESSION["allfood"]);
?>