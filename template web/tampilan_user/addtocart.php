<?php
    include("connect.php");
    session_start();
if($_SESSION['allfood']==""){

    $menu_now=$_POST["id"];
    $menu_check=explode('||',$_SESSION['allfood']);
    $menu_check=$menu_check[0];

    $query_now="SELECT * from menu where id_menu='$menu_now'";
    $query_Check="SELECT * from menu where id_menu='$menu_check'";

    $query_now=mysqli_fetch_assoc(mysqli_query($conn,$query_now));
    $query_Check=mysqli_fetch_assoc(mysqli_query($conn,$query_Check));

    if($query_Check["id_merchant"]==$query_now["id_merchant"]){

        if(isset($_SESSION["menu"]["$_POST[id]"])){
            $_SESSION["menu"]["$_POST[id]"]+=$_POST["qty"];
        }else{
            $_SESSION["allfood"].=$_POST["id"]."||";
            $_SESSION["menu"]["$_POST[id]"]=$_POST["qty"];
        }
        echo"berhasil menambah ke dalam cart";
    }else{
        echo "Tidak Bisa Menambahkan karena merchant beda";
    }
}else{
    if(isset($_SESSION["menu"]["$_POST[id]"])){
        $_SESSION["menu"]["$_POST[id]"]+=$_POST["qty"];
    }else{
        $_SESSION["allfood"].=$_POST["id"]."||";
        $_SESSION["menu"]["$_POST[id]"]=$_POST["qty"];
    }
    echo"berhasil menambah ke dalam cart";
}

?>