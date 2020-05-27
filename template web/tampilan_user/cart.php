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
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span></p>
            <h1 class="mb-0 bread">My Cart</h1>
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
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Product name</th>
						        <th>Price</th>
						        <th>&nbsp;</th>
						        <th>Quantity</th>
						        <th>&nbsp;</th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    <tbody id="template">
						      

						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    		<div class="row justify-content-end">
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Coupon Code</h3>
    					<p>Enter your coupon code if you have one</p>
	              <div class="form-group">
	              	<label for="">Coupon code</label>
	                <input type="text" id="code_promo" class="form-control text-left px-3" placeholder="">
	              </div>
    				</div>
    				<p><a onclick="getPromo()" class="btn btn-primary py-3 px-4">Apply Coupon</a></p>
    			</div>
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Estimate shipping and tax</h3>
    					<p>Enter your destination to get a shipping estimate</p>
  						
	           
	              <div class="form-group">
	              	<label for="country">State/Province</label>
					  <?php
							
							//Get Data Provinsi
							$curl = curl_init();

							curl_setopt_array($curl, array(
							CURLOPT_URL => "http://api.rajaongkir.com/starter/province",
							CURLOPT_RETURNTRANSFER => true,
							CURLOPT_ENCODING => "",
							CURLOPT_MAXREDIRS => 10,
							CURLOPT_TIMEOUT => 30,
							CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
							CURLOPT_CUSTOMREQUEST => "GET",
							CURLOPT_HTTPHEADER => array(
								"key: c09a27e05e802cf617af2e5e6f85df87"
							),
							));

							$response = curl_exec($curl);
							$err = curl_error($curl);

							echo "Provinsi Tujuan<br>";
							echo "<select name='provinsi' id='provinsi'>";
							echo "<option>Pilih Provinsi Tujuan</option>";
							$data = json_decode($response, true);
							for ($i=0; $i < count($data['rajaongkir']['results']); $i++) {
								echo "<option value='".$data['rajaongkir']['results'][$i]['province_id']."||".$data['rajaongkir']['results'][$i]['province']."'>".$data['rajaongkir']['results'][$i]['province']."</option>";
							}
							echo "</select><br><br>";
							//Get Data Provinsi

						?>
	              </div>
	              <div class="form-group">
	              	<label for="country">City</label>
					  <select id="kabupaten" name="kabupaten"></select><br><br>
	              </div>
    				</div>
    				<p><a id="cek" class="btn btn-primary py-3 px-4">Check Harga</a></p>
    			</div>
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3" id="tempatHarga">
    					
    				</div>
    				<p><a onclick="Pay()" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
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
<script>
	function Pay(){
		window.open("../Midtrans/trans/index.php");	
		setTimeout(() => {
			transaksi();
			window.location.href="cart.php";
		}, 2000);
	}
	start();
	function start(){
		$.ajax({
			method: "post",
			url: "getCart.php",
			
			success: function (response) {
				$("#template").html(response);
				$.ajax({
					method: "post",
					url: "getHarga.php",
					
					success: function (response) {
						$("#tempatHarga").html(response);
					}
				});
			}
		});
	}
	function transaksi(){
		var prov = $("#provinsi").val();
		var prov = prov.split("||");
		var prov=prov[1];
		var kab = $("#kabupaten").val();
		var kab = kab.split("||");
		var kab=kab[1];
		// alert(prov+" "+kab);
		$.ajax({
			method: "post",
			url: "transaksi.php",
			data: {
				pesan:$("#id_pesan").val(),
				provinsi:prov,
				kota:kab
				
			},
			success: function (response) {
				
			}
		});
	}
	function getPromo(){
		// alert($("#code_promo").val());
		$.ajax({
			method: "post",
			url: "promo.php",
			data: {
				nama:$("#code_promo").val()
			},
			success: function (response) {
				if(response=="true"){
					start();
				}else{
				alert(response);
				}
			}
		});
	}
</script>

<script type="text/javascript">

	$(document).ready(function(){
		$('#provinsi').change(function(){

			//Mengambil value dari option select provinsi kemudian parameternya dikirim menggunakan ajax 
			var prov = $('#provinsi').val();
			var prov = prov.split("||");
			var prov=prov[0];
			// alert(prov);
      		$.ajax({
            	type : 'GET',
           		url : '../RajaOngkir/cek_kabupaten.php',
            	data :  'prov_id=' + prov,
					success: function (data) {

					//jika data berhasil didapatkan, tampilkan ke dalam option select kabupaten
					$("#kabupaten").html(data);
				}
          	});
		});

		$("#cek").click(function(){
			//Mengambil value dari option select provinsi asal, kabupaten, kurir, berat kemudian parameternya dikirim menggunakan ajax 
			var asal = 444;
			var kab = $('#kabupaten').val();
			var kab = kab.split("||");
			var kab=kab[0];
			var kurir = "jne";
			var berat = "500";
            // console.log(asal);
            //444-surabaya
      		$.ajax({
            	type : 'POST',
           		url : '../RajaOngkir/cek_ongkir.php',
            	data :  {'kab_id' : kab, 'kurir' : kurir, 'asal' : asal, 'berat' : berat},
					success: function (data) {

					//jika data berhasil didapatkan, tampilkan ke dalam element div ongkir
                    var json=JSON.parse(data);
					// $("#ongkir").text();
					var harga=json.rajaongkir.results["0"].costs["0"].cost["0"].value;
                    // alert(json.rajaongkir.results.costs["cost"]);
					$.ajax({
						method: "post",
						url: "setOngkir.php",
						data: {
							harga:harga
						},
						success: function (response) {
							start();
						}
					});
				}
          	});
		});
	});
</script>