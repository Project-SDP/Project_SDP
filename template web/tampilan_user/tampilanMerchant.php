<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="icon" type="image/gif" href="images/image-4.png" />

    <title>Profil Merchant - Bibik's Catering</title>
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
		$check=0;
		if($_SESSION["loggedUser"]==""){
			$check=-1;
		}
		?>
    <?php
				require_once("connect.php");
				$query="SELECT * from merchant where id='$_GET[id]'";
				$query=mysqli_query($conn,$query);
				$query=mysqli_fetch_assoc($query);
				$viewer= $query['viewer']+1;
				mysqli_query($conn,"update merchant set viewer=$viewer where id='$_GET[id]'");
                $website="SELECT * from website where id_merchant='$_GET[id]'";
                $website=mysqli_fetch_assoc(mysqli_query($conn,$website));
				$cover = "../../web%20merchant/web/cover$website[cover]";
				
				// echo $website['cover'];
					?>
    <div class="hero-wrap hero-bread" style="background-image:url(<?=$cover?>);">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Tampilan Merchant</a></span> <span class="mr-2"><a href="index.html">Product</a></span> <span>Product Single</span></p>
            <h1 class="mb-0 bread">Deskripsi Merchant</h1>
          </div>
        </div>
      </div>
    </div>
    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
				<?php
				echo"<div class='col-lg-6 mb-5 ftco-animate'>

    				";echo"<a href='../../web%20merchant/pages/forms/images$query[profilepic]' class='image-popup'>
					";echo"<img src='../../web%20merchant/pages/forms/images$query[profilepic]' class='img-fluid' alt=''>
					";echo"</a>
					";echo"</div>
					";echo"<div class='col-lg-6 product-details pl-md-5 ftco-animate'>
    		";echo"		<h3><b>$query[nama] </b></h3>
    		";echo"		<i>Kategori: $query[kategori] </i><br><br>

    		";echo"		<p>No Telepon: $query[notelp]</p>
    		";echo"		<p>Kota: $query[kota]</p>
    		";echo"		<p>Pesan: $website[batas_pesan] sebelumnya</p>
			";echo"		<p>Kebijakan Pembatalan: $website[kebijakan]</p>
			";echo"	<p onclick='block(\"$query[id]\")'><p  onclick='block(\"$query[id]\")' class='btn btn-black py-3 px-5'>Block Merchant</p></p>";
			  ?>
				
          
    			</div>
    		</div>
    	</div>
    </section>

    <?php
	include("footer.php");
?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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

  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
    
  </body>
</html>
<script >
function block(id){
	
	var check="<?=$check?>";
	if(check==-1){
		window.location.href="../../Admin/amel/TampilanLogin.php";
	}else{
		window.location.href="pageBlock.php?id="+id+"";
	}
}
$(".menu").addClass("active");
</script>