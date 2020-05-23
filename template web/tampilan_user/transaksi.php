<?php
    include("connect.php");
    session_start();
    $query="SELECT lpad(max(substr(id_htrans,-4,4))+1,4,0) as 'id',now() as 'time' from htransaksi";
    $query=mysqli_fetch_assoc(mysqli_query($conn,$query));
    $id="HT".$query["id"];
    $date=$query["time"];
    $total=$_SESSION["grandtotal"];
    $pesan=$_POST["pesan"];
    // $pesan="";
    $menu_check=explode('||',$_SESSION['allfood']);
    $menu_check=$menu_check[0];
    $ongkir=$_SESSION["ongkir"];

    $potongan=$_SESSION["promo"];
    $nama_potongan=$_SESSION["nama_promo"];
    $kota=$_POST["kota"];
    $provinsi=$_POST["provinsi"];

    $keterangan="nama_promo:$nama_potongan||promo:$potongan||kota:$kota||provinsi:$provinsi";
    $query_Check="SELECT * from menu where id_menu='$menu_check'";

    $query_Check=mysqli_fetch_assoc(mysqli_query($conn,$query_Check));

    $id_merchant=$query_Check["id_merchant"];
    $id_member=$_SESSION["loggedUser"];
    $query_insert="INSERT into htransaksi values ('$id','$date',$total,'LUNAS',null,'$id_member','$id_merchant',$ongkir,'$pesan','$keterangan')";
    mysqli_query($conn,$query_insert);

    $menu_check=explode('||',$_SESSION['allfood']);

    foreach ($menu_check as $key => $value) {
        $id_menu=$value;
        $qty=$_SESSION["menu"][$value];
        $query="SELECT * from menu where id_menu='$id_menu'";
        $query=mysqli_fetch_assoc(mysqli_query($conn,$query));
        $harga=$query["harga_menu"]*$qty;
        $query_insert="INSERT into dtransaksi values ('$id','$id_menu',$qty,$harga)";
        mysqli_query($conn,$query_insert);
    }
?>