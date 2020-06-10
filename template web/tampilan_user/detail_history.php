<?php
// session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Vegefoods - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="goto-here">
		
	<?php
		include("navbar.php");
		if($_SESSION["loggedUser"]==""){
		//	header("location : ../../admin/amel/Tampilanlogin.php");
		}
		?>
    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Detail</a></span> <span>History</span></p>
            <h1 class="mb-0 bread">History Pemesanan</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>No</th>
						        <th>Nama Barang</th>
						        <th>Price</th>
						        <th>Quantity</th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    <tbody >
						      <?php
                                include("connect.php");
                                $id_htrans=$_GET["id"];
                                $query_htrans="SELECT * from htransaksi where id_htrans='$id_htrans'";
                                $value_htrans=mysqli_fetch_assoc(mysqli_query($conn,$query_htrans));

                                $query_dtrans="SELECT * from dtransaksi where id_htrans='$id_htrans'";
                                $query_dtrans=mysqli_query($conn,$query_dtrans);    
                                $ctr=0;
                                foreach ($query_dtrans as $key => $value) {
                                $ctr++;
                                $nama_makanan="SELECT nama_menu from menu where id_menu='$value[id_makanan]'";
                                $nama_makanan=mysqli_fetch_assoc(mysqli_query($conn,$nama_makanan)); 
                                $harga=$value["subtotal"]/$value["jumlah"];
                                $format="Rp " . number_format($harga,2,',','.');
                                $format_subtotal="Rp " . number_format($value["subtotal"],2,',','.');
                                    echo"  <tr class='text-center'>
                                    ";echo"  <td>$ctr</td>
                                    ";echo"  <td class='product-name'>
                                    ";echo"      <h3>$nama_makanan[nama_menu]</h3>
                                    ";echo"  </td>
                                    ";echo"  
                                    ";echo"  <td class='price'>$format</td>
                                    ";echo"  
                                    ";echo"  <td class='jumlah'>$value[jumlah]</td>
                                    ";echo"  
                                    ";echo"  <td class='subtotal'>$format_subtotal</td>
                                    ";echo"  
                                    ";echo"</tr>
                                    ";
                                }
                              ?>

						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
		</section>

<?php
	include("footer.php");
?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

    
  </body>
</html>