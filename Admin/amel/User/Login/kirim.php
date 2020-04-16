<?php 
	require_once('../../../../mailer2/class.phpmailer.php');
	require_once('../../connect.php');	
	//-----------------EMAIL-----------------
	
    $email=$_POST["kepada"];
	$query=mysqli_fetch_assoc(mysqli_query($conn,"SELECT password,nama_depan,nama_belakang from user where email='$email'"));
	$mail             = new PHPMailer();
	$address 		  = $_POST["kepada"];					
	
	$mail->Subject    = "Ganti Password ";

	$body			  = 
	'Dear '.$query["nama_depan"].$query["nama_belakang"].','."<br>".
	'Password Anda Adalah : '.$query["password"]."<br>".
	'Terima Kasih telah mendaftar di<b> <a style="color:red" href="http://localhost/Project_SDP/template%20web/tampilan_user/">bibikscatering.com</a></b>'."<br>".
	'<i><a style="color:red" href="http://localhost/Project_SDP/template%20web/tampilan_user/">BibiksCatering.com</a> Mendukung UKM dan Local Catering</i>'."<br>".
	'Layanan Live Chat : Senin - Jumat, Pk 08.00 - 17.00 WIB'."<br>".
	'<h6>Harap jangan membalas e-mail ini, karena e-mail ini dikirimkan secara otomatis oleh sistem. </h6>';

	$mail->IsSMTP(); // telling the class to use SMTP
	$mail->Host       = "mail.google.com"; // SMTP server
	$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
											   // 1 = errors and messages
											   // 2 = messages only
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
	$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
	$mail->Port       = 587;                   // set the SMTP port for the GMAIL server
	$mail->Username   = "bibikscatering@gmail.com";  // GMAIL username mu
	$mail->Password   = "projectsdp";     // GMAIL password mu

	$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

	$mail->MsgHTML($body);

	$mail->AddAddress($address, "Kepada Anda");

	//$mail->AddAttachment("result/".$file);      // attachment
	

	if($mail->Send()) {  
	  echo "[SEND TO:] " . $address . "<br>";
	}

	//--------------END EMAIL----------------
			
	
	 
	  

?>