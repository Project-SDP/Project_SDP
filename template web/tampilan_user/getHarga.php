<?php
    include("connect.php");
    session_start();
    
    $ongkir="Rp " . number_format($_SESSION["ongkir"],2,',','.');
        echo"<h3>Cart Totals</h3>
        ";echo"	<p class='d-flex'>
    ";echo"		<span>Subtotal</span>
    ";echo"		<span>$_SESSION[ftotal]</span>
    ";echo"	</p>
    ";echo"	<p class='d-flex'>
    ";echo"		<span>Delivery</span>
    ";echo"		<span>$ongkir</span>
    ";echo"	</p>
    ";echo"	<p class='d-flex'>
    ";echo"		<span>Discount</span>
    ";echo"		<span>$_SESSION[tpromo]</span>
    ";echo"	</p>
    ";echo"	<hr>
    ";echo"	<p class='d-flex total-price'>
    ";echo"		<span>Total</span>
    ";echo"		<span>$_SESSION[fgrandtotal]</span>
    ";echo" </p>
    ";	
     echo"	<p class='d-flex total-price'>
    ";echo"		<textarea name='' id='id_pesan' cols='30' reows='10' placeholder='pesan'></textarea>
    ";echo" </p>
    ";	
?>