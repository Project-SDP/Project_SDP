<head>
	  <title>Bibik's Katering</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <script src="js/jquery.min.js"></script>
    
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
	
	<style>
	.button_right_02 {
		float: right;
		font-size: 12px;
		font-family: "Poppins";
		color: black;
		border: 1px black solid;
		text-align: center;
		width: 113px;
		height: 39px;
		padding: 10px;
		margin-right:10px;
		line-height: 1;
	}
  </style>

	<script>

		function Exit(){
			$.ajax({
				method: "post",
				url: "/ProyekSDP/Project_SDP/control.php",
				data: {
           			 control:'exit'
        		},
				success: function (data) {
					window.location="http://localhost/ProyekSDP/Project_SDP/template%20web/vegefoods%20-%20Copy/mainpage.php";
				}
			}); 

		}


	</script>




  </head>

  <body class="goto-here">
		<div class="py-1" style="background:#99ccff;">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+ 1235 2355 98</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">youremail@email.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">3-5 Business days delivery &amp; Free Returns</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
	</div>
	
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" >
		<div class="container" >

					<a class="navbar-brand" href="mainpage.php" style="color:black;font-size:30px;">Bibik's Catering</a>
				
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="oi oi-menu"></span> Menu
					</button>

					<div class="collapse navbar-collapse" id="ftco-nav">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active"><a href="mainpage.php" class="nav-link">Home</a></li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</a>
								<div class="dropdown-menu" aria-labelledby="dropdown04">
									<a class="dropdown-item" href="shop.php">Tambah Menu</a>
									<a class="dropdown-item" href="wishlist.html">Lihat Menu</a>
									<a class="dropdown-item" href="product-single.html">Edit Menu</a>
								</div>
							</li>
							<li class="nav-item ">
								<a href="about.html" class="nav-link">Restaurant</a>
							</li>
							<li class="nav-item">
								<a href="blog.html" class="nav-link">Review</a>
							</li>
							<li class="nav-item">
								<a href="contact.html" class="nav-link">Contact</a>
							</li>
							<li class="nav-item cta cta-colored">
								<a href="cart.html" class="nav-link"><i class="icon-shopping_cart"></i>[<?php echo "X";?>]</a>
							</li>
						</ul>
					</div>

		
			
			
		</div>
		<div class="container" style="width: 100px">
		</div>
		<div class="container" style="">   <!-- Profile-->
