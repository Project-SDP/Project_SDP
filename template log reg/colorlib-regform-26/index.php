<?php
    session_start();
    require("conn.php");
    $listUser=mysqli_query($link,"SELECT * FROM merchant");
    $jumlah = 0;
    $tmp='';
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
				<img src="images/image-1.png" alt="" class="image-1">
				<form action="">
					<h3> Bibik's Catering</h3>
					<h3 style="font-size:5px;">Register Merchant</h3>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control" placeholder="Nama" name="nama">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-phone-handset"></span>
						<input type="text" class="form-control" placeholder="Nomor Telepon" name="telp">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input type="text" class="form-control" placeholder="Email" name="email">
                    </div>
                    <form action="#" method="post">
                    <label> Pilih provinsi </label>
                    <select class="form-control select2" style="width: 100%;" name="prov">
                    <!-- <option selected="selected" name="aceh">Jakarta</option> -->
                    
                    <?php 
                    $listMerch=mysqli_query($link,"SELECT * FROM provinsi");
                    $select = -1; 
                    foreach($listMerch as $merch) 
                    {
                        if($select == -1){
                            echo "<option selected='selected' value=".$merch[id_provinsi].">".$merch[nama_provinsi]."</option>";
                            $select = 0;
                        }else{
                            echo "<option value=".$merch[id_provinsi].">".$merch[nama_provinsi]."</option>";
                        }
                    }  
                    
                    $tmp = $_POST['prov'];

                    ?>
                    </form>
                  </select>
                  <?php alert($tmp) ?>
                    <label> Pilih kota </label>
                    <select class="form-control select2" style="width: 100%;">
                    <?php 
                    $listKota=mysqli_query($link,"SELECT * FROM kota");
                    $select2 = -1;
                    foreach($listKota as $kota) 
                    {
                        if($kota['id_provinsi'] == $tmp){
                            if($select2 == -1){
                                echo "<option selected='selected' name=".$kota[nama_kota].">".$kota[nama_kota]."</option>";
                                $select2 = 0;
                            }else{
                                echo "<option name=".$kota[nama_kota].">".$kota[nama_kota]."</option>";
                            }
                        }
                        
                    }    
                    ?>
                  </select>
                  <div class="form-holder" style="margin-top:20px;">
						<span class="lnr lnr-home"></span>
						<input type="text" class="form-control" placeholder="Alamat" name="alamat">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" class="form-control" placeholder="Password" name="pass">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" class="form-control" placeholder="Confirm Password" name="cpass">
					</div>
                    <button type="submit" name="reg" value="Daftar">Daftar</button>

				</form>
				<img src="images/image-2.png" alt="" class="image-2">
			</div>
			
		</div>
		
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>