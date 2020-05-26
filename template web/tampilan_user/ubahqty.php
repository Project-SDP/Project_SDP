<?php
    session_start();
    $id=$_POST["id"];
    $type=$_POST["type"];
    $jumlah=$_POST["jumlah"];
    $allMenu=explode('||',$_SESSION['allfood']);

    if($type=="1"){
        $_SESSION["menu"][$id]--;
    }else if($type=="2"){
        $_SESSION["menu"][$id]++;
    }
    if($type=="3"||$_SESSION["menu"][$id]==0){
        $_SESSION["allfood"]=str_replace($id."||","",$_SESSION["allfood"]);
        unset($_SESSION["menu"][$id]);
    }
    if($_SESSION["allfood"]==""){
        $_SESSION["ongkir"]=0;
        $_SESSION["total"]=0;
        $_SESSION["grandtotal"]=0;
        $_SESSION["tpromo"]="Rp 0,00";
    }
?>