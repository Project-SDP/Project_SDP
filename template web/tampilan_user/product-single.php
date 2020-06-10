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
		$check=0;
		if($_SESSION["loggedUser"]==""){
			$check=-1;
		}
		?>
    <!-- <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Vegefoods</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
	          <li class="nav-item active dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="shop.html">Shop</a>
              	<a class="dropdown-item" href="wishlist.html">Wishlist</a>
                <a class="dropdown-item" href="product-single.html">Single Product</a>
                <a class="dropdown-item" href="cart.html">Cart</a>
                <a class="dropdown-item" href="checkout.html">Checkout</a>
              </div>
            </li>
	          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	          <li class="nav-item cta cta-colored"><a href="cart.html" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav> -->
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"><a href="index.html">Product</a></span> <span>Product Single</span></p>
            <h1 class="mb-0 bread">Product Single</h1>
          </div>
        </div>
      </div>
    </div>
    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			
				<?php
				require_once("connect.php");
				$query="SELECT * from menu where id_menu='$_GET[id]'";
				$query=mysqli_query($conn,$query);
				$value=mysqli_fetch_assoc($query);
				
				
					$harga='Rp ' . number_format($value['harga_menu'],2,',','.');
					echo"<div class='col-lg-6 mb-5 ftco-animate'>
    				";echo"<a href='../../gambar/image/$value[gambar_menu]' class='image-popup'>
					";echo"<img src='../../gambar/image/$value[gambar_menu]' class='img-fluid' alt=''>
					";echo"</a>
					";echo"</div>
					";echo"<div class='col-lg-6 product-details pl-md-5 ftco-animate'>
    		";echo"		<h3>$value[nama_menu] </h3>

    		";echo"		<p class='price'><span>$harga</span></p>
    		";echo"		<p>$value[deskripsi_menu]</p>
			";echo"			<div class='row mt-4'>
			";echo"				<div class='col-md-6'>
			";echo"					<div class='form-group d-flex'>
		      ";echo"        <div class='select-wrap'>
	          ";echo"      </div>
		      ";echo"      </div>
			";echo"				</div>
			";echo"				<div class='w-100'></div>
			";echo"				<div class='input-group col-md-6 d-flex mb-3'>
	          ";echo"   	<span class='input-group-btn mr-2'>
	          ";echo"      	<button type='button' class='quantity-left-minus btn'  data-type='minus' data-field=''>
	          ";echo"         <i class='ion-ios-remove'></i>
	          ";echo"      	</button>
	          ";echo"  		</span>
	          ";echo"   	<input type='text' id='quantity' name='quantity' class='form-control input-number' value='1' min='1' max='100'>
	          ";echo"   	<span class='input-group-btn ml-2'>
	          ";echo"      	<button type='button' class='quantity-right-plus btn' data-type='plus' data-field=''>
	          ";echo"           <i class='ion-ios-add'></i>
	          ";echo"       </button>
	          ";echo"   	</span>
	          ";echo"	</div>
	          ";echo"	<div class='w-100'></div>
			  ";
			  //echo"	<!-- <div class='col-md-12'>
	          //";echo"		<p style='color: #000;'>600 kg available</p>
	          //";echo"	</div> -->
			  echo"</div>
			  ";echo"	<p onclick='toCart(\"$value[id_menu]\")'><p  onclick='toCart(\"$value[id_menu]\")' class='btn btn-black py-3 px-5'>Add to Cart</p></p>";
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
function toCart(id){
	
	var check="<?=$check?>";
	if(check==-1){
		window.location.href="../../Admin/amel/TampilanLogin.php";
	}else{
		var qty=$("#quantity").val();
		$.ajax({
			method: "post",
			url: "addtocart.php",
			data: {
				id:id,
				qty:qty
			},
			success: function (response) {
				alert(response);
			}
		});
	}
}
$(".menu").addClass("active");
</script>