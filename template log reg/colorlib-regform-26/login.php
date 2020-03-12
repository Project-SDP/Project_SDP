<?php
    session_start();
    require("conn.php");
    $listUser=mysqli_query($link,"SELECT * FROM merchant");
    $jumlah = 0;
    $tmp='aaaa';
    echo $tmp;
    foreach($listUser as $user) 
    {
        $jumlah++;
    }    
    // var_dump($user);
    

    if(isset($_POST['toLog'])){
        header("location:login.php");
    }
    // if(isset($_POST['toHome'])){
    //     header("location:home.php");
    // }
    if(isset($_POST['reg']))
    {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $nohp = $_POST['telp'];
        $usern = $_POST['user'];
        $pass = $_POST['pass'];  
        $cpass = $_POST['cpass'];  
        $email = $_POST['email'];  
        $cek = 0;
    
        foreach ($listUser as $user) {
            if($user['notelp']==$nohp){
                echo "<script>alert('No HP telah terdaftar')</script>";
                break;
            }
            else if($user['username']==$usern){
                echo "<script>alert('Username tidak tersedia')</script>";
                break;
            }
            else
            {
                $cek++;
            }
        }


        if($nama==""||$alamat==""||$nohp==""||$usern==""||
        $pass==""||$cpass==""||$email=""){
            echo "field tidak boleh kosong!";
        }else if($pass!=$cpass){
            echo "konfirmasi password tidak sesuai";            
        }else if($cek==$jumlah)
        {   
            echo "haha";
            mysqli_query($link,"INSERT INTO merchant(id,nama,rating,alamat,notelp,username,pass) VALUES('$nama','$nama',0,'$alamat','$nohp','$usern','$pass')");
            echo "sheyenk";
            // header('location:login.php');
        }
        // else{
        //     echo "username/no hp telah terdaftar";
        // }
    
    }
    if(isset($_POST['provinsi'])){
        $tmp = $_POST['provinsi'];
        echo "hoho";
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v10 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<img src="images/image-4.png" alt="" style="left:-400px;" class="image-1">
				<form action="">
					<h3> Bibik's Catering</h3>
					<h3 style="font-size:5px;">Login Merchant</h3>
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input type="text" class="form-control" placeholder="Email" name="email">
                    </div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" class="form-control" placeholder="Password" name="pass">
					</div>
                    <button name="reg" value="Login">Login</button>

				</form>
				<img src="images/image-2.png" alt="" class="image-2">
			</div>
			
		</div>
		
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>