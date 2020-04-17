<?php 
	require_once('../../../../mailer2/class.phpmailer.php');
	require_once('../../connect.php');	
	//-----------------EMAIL-----------------
	
    $email=$_POST["email"];
	$query=mysqli_fetch_assoc(mysqli_query($conn,"SELECT password,nama_depan,nama_belakang from user where email='$email'"));
	$mail             = new PHPMailer();
	$address 		  = $_POST["email"];					
	
	$mail->Subject    = "Ganti Password ";

	$body			  = 
	

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

<button	href="localhost/Project_SDP\Admin\amel\User\Register\updateStatus.php"></button>