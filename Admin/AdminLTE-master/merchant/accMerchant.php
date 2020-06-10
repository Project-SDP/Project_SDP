<?php
    include("../conn.php");
    require_once('mailer2/class.phpmailer.php');
    $id=$_POST["id"];
    $query = "select * from merchant where id= '$id'";
    $query2=mysqli_fetch_assoc(mysqli_query($link,$query));
    $mail=$query2["email"];
    $vkey = md5(time().$id);
    $update = mysqli_query($link,"UPDATE merchant set vkey ='$vkey' where id='$id'");
    if($update){
        //-----------------EMAIL-----------------
        
        $mail2             = new PHPMailer();
        $address 		  = $mail;					
        
        $mail2->Subject    = "Registrasi Sukses!";
        $body = "<form action='http://localhost/project_sdp/Admin/AdminLTE-master/merchant/verify.php' method='post'>".
        "<input type='hidden' name='vkey' value='$vkey'>".
        '<h1 style=`color:#2672ec; font-family:Segoe UI; `>Registrasi Sukses</h1>'.
        '<b>Dear Merchant '.$query2["nama"].','."</b><br><br>".
        'Terima Kasih telah mendaftar sebagai merchant di<b> <a style="color:red" href="http://localhost/Project_SDP/template%20web/tampilan_user/">bibikscatering.com</a></b>'."<br>".
        "Verifikasi akun anda disini <br><input type='submit' name='verify' value='Verifikasi Akun'><br>".
		'<i><a style="color:red" href="http://localhost/Project_SDP/template%20web/tampilan_user/">BibiksCatering.com</a> Mendukung UKM dan Katering Lokal</i>'."<br>".
		'Layanan Live Chat : Senin - Jumat, Pk 08.00 - 17.00 WIB'."<br>".
		'<h4>Harap jangan membalas e-mail ini, karena e-mail ini dikirimkan secara otomatis oleh sistem. </h4>'.
		'<p>Terima kasih,</p>'.
		"<p>Tim Bibik's Catering</p>".
        "</form>";
        
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
        }


    }

            
?>