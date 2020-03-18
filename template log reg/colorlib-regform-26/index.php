<?php
    session_start();
    require("conn.php");
    $listUser=mysqli_query($link,"SELECT * FROM merchant");
    $jumlah = 0;
    $tmp='aaaa';


    // echo $tmp;
    foreach($listUser as $user) 
    {
        $jumlah++;
    }    
    

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
        // $usern = $_POST['user'];
        $pass = $_POST['pass'];  
        $cpass = $_POST['cpass'];  
        $mail = $_POST['email'];  
        $provinsi = $_POST['prov'];
        $kota = $_POST['kota'];
        $cek = 0;
    
        foreach ($listUser as $user) {
            if($user['notelp']==$nohp){
                echo "<script>alert('No HP telah terdaftar')</script>";
                break;
            }
            else if($user['email']==$nohp){
                echo "<script>alert('Email telah terdaftar')</script>";
                break;
            }
            else
            {
                $cek++;
            }
        }


        if($nama==""||$alamat==""||$nohp==""||
        $pass==""||$cpass==""||$email=""){
            echo "field tidak boleh kosong!";
        }else if($pass!=$cpass){
            echo "konfirmasi password tidak sesuai";            
        }else if (strpos($mail,"@") == false){
            echo "email anda tidak valid";
        }
        else if($cek==$jumlah)
        {   
            mysqli_query($link,"INSERT INTO merchant(id,nama,rating,alamat,notelp,pass,email,provinsi,kota) VALUES('','$nama',0,'$alamat','$nohp','$pass','$mail','$provinsi','$kota')");
            echo "Merchant sukses terdaftar";
            header('location:login.php');
        }
        else{
            echo "email/nomor hp telah terdaftar";
        }
    
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
				<form action="" method="post">
					<h3> Bibik's Catering</h3>
					<h3 style="font-size:10px;">Register Merchant</h3>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control" placeholder="Nama" name="nama">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-phone-handset"></span>
						<input type="number" class="form-control" placeholder="Nomor Telepon" name="telp"><span id="pesan" style="left:320px;"></span>
					</div>
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input type="text" class="form-control" placeholder="Email" name="email"><span id="pesan3" style="left:320px;"></span>
                    </div>
                    <label> Pilih provinsi </label>
                    <select class="form-control select2" style="width: 100%;" onchange="refreshKota()" name="prov" id="prov">
                    
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
                    ?>
                  </select>
                  
                    <label> Pilih kota </label>
                    <select class="form-control select2" id="kota" name="kota" style="width: 100%;">
                    <?php 
                    $listKota=mysqli_query($link,"SELECT * FROM kota");
                    $select2 = -1;
                    foreach($listKota as $kota) 
                    {
                        if($kota['id_provinsi'] == 'PR001'){
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
						<input type="password" class="form-control" placeholder="Password" name="pass" id="pass">
					</div>
                    <span style="top:620px;position:absolute;font-size:10px;">Password minimal 8 karakter</span>
					<div class="form-holder"style="padding-top:20px;">
						<span class="lnr lnr-lock"></span>
						<input type="password" class="form-control" placeholder="Konfirmasi Password" name="cpass" id="cpass"><span id="pesan2" style="left:320px;"></span>
					</div>
                    <!-- <input type="submit" name="reg" value="Daftar"> -->
                    <button name ="reg">Daftar</button>

				</form>
				<img src="images/image-2.png" alt="" class="image-2">
			</div>
			
		</div>
		
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<script>
     function refreshKota(){
        prov = $("#prov").val();
        $.ajax({
            method:"post",
            url: "kota.php",
            data: {
                prov:prov
            },
            success: function (data) {
                $("#kota").html(data);
            }
        });
     }
     $('#cpass').keyup(function(){
        pass = $("#pass").val();
        cpass = $("#cpass").val();
        setTimeout(function(){
            $.ajax({
                method:"post",
                url: "cekPass.php",
                data: {
                    pass:pass,
                    cpass:cpass
                },
                success: function (data) {
                    $("#pesan2").html(data);

                }
            });
        },1000);
    });
    
     $("input[name=email]").keyup(function(){
        email = $("input[name=email]").val();
        setTimeout(function(){
            $.ajax({
                method:"post",
                url: "cekEmail.php",
                data: {
                    email:email
                },
                success: function (data) {
                    $("#pesan3").html(data);

                }
            });
        },1000);
    });
</script>