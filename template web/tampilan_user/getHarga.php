<?php
    include("connect.php");
    session_start();
        echo"<h3>Cart Totals</h3>
        ";echo"	<p class='d-flex'>
    ";echo"		<span>Subtotal</span>
    ";echo"		<span>$_SESSION[ftotal]</span>
    ";echo"	</p>
    ";echo"	<p class='d-flex'>
    ";echo"		<span>Delivery</span>
    ";echo"		<span>0</span>
    ";echo"	</p>
    ";echo"	<p class='d-flex'>
    ";echo"		<span>Discount</span>
    ";echo"		<span>0</span>
    ";echo"	</p>
    ";echo"	<hr>
    ";echo"	<p class='d-flex total-price'>
    ";echo"		<span>Total</span>
    ";echo"		<span>$_SESSION[ftotal]</span>
    ";echo" </p>
    ";	
?>
