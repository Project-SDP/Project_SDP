<?php
    include('connect.php');
    session_start();
    $allMenu=explode('||',$_SESSION['allfood']);
    $hasilTotal=0;
    $ctr=0;
    foreach ($allMenu as $key => $value) {
        if($ctr<count($allMenu)-1){
            $query="SELECT * from menu where id_menu='$value'";
            $qty=$_SESSION["menu"][$value];
            $query=mysqli_query($conn,$query);
            foreach ($query as $key => $value2) {
                $grandtotal=$qty*$value2['harga_menu'];
                $hasilTotal+=$grandtotal;
                $grandtotal="Rp " . number_format($grandtotal,2,',','.');
                $total=$value2['harga_menu'];
                $total="Rp " . number_format($total,2,',','.');
            echo"  <tr class='text-center'>
            ";echo"  <td class='product-remove'><a href='#'><span class='ion-ios-close'></span></a></td>
            ";echo"  
            ";echo"  <td class='image-prod'><div class='img' style='background-image:url(../../gambar/image/$value2[gambar_menu].jpg);'></div></td>
            ";echo"  
            ";echo"  <td class='product-name'>
            ";echo"      <h3>$value2[nama_menu]</h3>
            ";echo"      <p>Far far away, behind the word mountains, far from the countries</p>
            ";echo"  </td>
            ";echo"  
            ";echo"  <td class='price'>$total</td>
            ";echo"  
            ";echo"  <td class='quantity'>
            ";echo"      <div class='input-group mb-3'>
            ";echo"       <input type='text' name='quantity' class='quantity form-control input-number' value='$qty' min='1' max='100'>
            ";echo"    </div>
            ";echo"</td>
            ";echo"  
            ";echo"  <td class='total'>$grandtotal</td>
            ";echo"</tr>
            ";
            }
        }
    }
    $fhasilTotal="Rp " . number_format($hasilTotal,2,',','.');
    $_SESSION["total"]=$hasilTotal;
    $_SESSION["ftotal"]=$fhasilTotal;

    $hasilTotal=$hasilTotal-$_SESSION["promo"];
    $_SESSION["grandtotal"]=$hasilTotal;
    $fhasilTotal="Rp " . number_format($hasilTotal+$_SESSION["ongkir"],2,',','.');
    $_SESSION["fgrandtotal"]=$fhasilTotal;
?>