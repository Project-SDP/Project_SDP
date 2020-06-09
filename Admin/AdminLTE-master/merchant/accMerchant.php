<?php
    include("../conn.php");
    require_once('mailer2/class.phpmailer.php');
    $id=$_POST["id"];
    $query = "select * from merchant where id= '$id'";
    $query2=mysqli_fetch_assoc(mysqli_query($link,$query));
    $mail=$query2["email"];
    // echo $id;
    $vkey = md5(time().$id);
    // echo $vkey;
    $query="SELECT status from merchant where id='$id'";
    $query=mysqli_query($link,$query);
    $query=mysqli_fetch_assoc($query);
    $update = mysqli_query($link,"UPDATE merchant set vkey ='$vkey' where id='$id'");
    if($update){
        // echo "masok";
        //-----------------EMAIL-----------------
        
        $mail2             = new PHPMailer();
        $address 		  = $mail;					
        
        $mail2->Subject    = "Registrasi Sukses!";
    
        // $body			  = "<a href='http://localhost/sdp/New%20folder/Project_SDP/template%20log%20reg/colorlib-regform-26/verify.php?vkey=$vkey'>Register Account</a>";
        $body = "<form action='http://localhost/project_sdp/Admin/AdminLTE-master/merchant/verify.php' method='post'>";
        $body.="<div id='header'>Bibik's Catering</div><hr><br><label> Terima kasih sudah mendaftar sebagai merchant kami!<br> Klik tombol di bawah ini untuk meneyelesaikan pendaftaran</label><br>";
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
        }


    }

            
?>