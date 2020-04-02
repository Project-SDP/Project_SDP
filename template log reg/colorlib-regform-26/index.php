<?php
    session_start();
    require("conn.php");
    require_once('mailer2/class.phpmailer.php');
    $listUser=mysqli_query($link,"SELECT * FROM merchant");
    $jumlah = 0;

    foreach($listUser as $user) 
    {
        $jumlah++;
    }    
    

    if(isset($_POST['toLog'])){
        header("location:login.php");
    }
    if(isset($_POST['verify'])){
        header("location:verify.php");
    }
    // if(isset($_POST['toHome'])){
    //     header("location:home.php");
    // }
    if(isset($_POST['reg']))
    {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $nohp = $_POST['telp'];
        $pass = $_POST['pass'];  
        $cpass = $_POST['cpass'];  
        $mail = $_POST['email'];  
        $provinsi = $_POST['prov'];
        $kota = $_POST['kota'];
        $halal = $_POST['my-checkbox'];
        $status = 1;

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
            $nama = $link->real_escape_string($nama);
            $mail = $link->real_escape_string($mail);
            $alamat = $link->real_escape_string($alamat);
            $nohp = $link->real_escape_string($nohp);
            $pass = $link->real_escape_string($pass);
            $provinsi = $link->real_escape_string($provinsi);
            $kota = $link->real_escape_string($kota);
            $halal = $link->real_escape_string($halal);
            $status = $link->real_escape_string($status);
            $vkey = md5(time().$nama);
            $pass = md5($pass);
            echo $vkey;
            $insert = mysqli_query($link,"INSERT INTO merchant(id,nama,rating,alamat,notelp,pass,email,provinsi,kota,halal,status,vkey) VALUES('','$nama',0,'$alamat','$nohp','$pass','$mail','$provinsi','$kota','$halal',0,'$vkey')");
            if($insert){
                // $to = $email;
                // $subject = "Email Verifikasi";
                // $message = "<a href='http://localhost/sdp/New%20folder/Project_SDP/template%20log%20reg/colorlib-regform-26/verify.php?vkey=$vkey'>Registrasi Akun Merchant</a>";
                // $headers = "From: bibikscatering@gmail.com \r\n";
                // $headers .= "MIME-Version: 1.0"."\r\n";
                // $headers .= "Content-type:text/html;charset-UTF-8"."\r\n"; 
                // mail($to,$subject,$message,$headers);


                
		
                //-----------------EMAIL-----------------
                
                $mail2             = new PHPMailer();
                $address 		  = $mail;					
                
                $mail2->Subject    = "Testing Email";
            
                // $body			  = "<a href='http://localhost/sdp/New%20folder/Project_SDP/template%20log%20reg/colorlib-regform-26/verify.php?vkey=$vkey'>Register Account</a>";
                $body = "<form action='http://localhost/sdp/New%20folder/Project_SDP/template%20log%20reg/colorlib-regform-26/verify.php' method='post'>";
                $body.="<input type='hidden' name='vkey' value='$vkey'>";
                $body.="<input type='submit' name='verify' value='Verifikasi Akun'>";
                $body.="</form>";
                
                $mail2->IsSMTP(); // telling the class to use SMTP
                $mail2->Host       = "mail.google.com"; // SMTP server
                $mail2->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
                                                           // 1 = errors and messages
                                                           // 2 = messages only
                $mail2->SMTPAuth   = true;                  // enable SMTP authentication
                $mail2->SMTPSecure = "tls";                 // sets the prefix to the servier
                $mail2->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
                $mail2->Port       = 587;                   // set the SMTP port for the GMAIL server
                $mail2->Username   = "bibikscatering@gmail.com";  // GMAIL username //nama email sendiri
                $mail2->Password   = "projectsdp";     // GMAIL password //pass email sendiri
            
                $mail2->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
            
                $mail2->MsgHTML($body);
            
                $mail2->AddAddress($address);
            
                //$mail->AddAttachment("result/".$file);      // attachment
                
            
                if($mail2->Send()) {  
                //   echo "[SEND TO:] " . $address . "<br>";
                header("location:thankyou.php");
                }

            }
            // echo "Merchant sukses terdaftar";
            // header('location:login.php');
        }
        else{
            echo "gagal";
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
					<div class="form-holder"style="padding-top:20px;">
                    <label>Apakah makanan yang anda sajikan HALAL?</label><br>
                    <input type="checkbox" name="my-checkbox" value='1'> Ya
                    <input type="checkbox" name="my-checkbox" value='0'> Tidak
					</div>

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