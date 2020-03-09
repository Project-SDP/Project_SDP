<?php
    session_start();
    require("conn.php");
    $listUser=mysqli_query($link,"SELECT * FROM merchant");
    $jumlah = 0;
    foreach($listUser as $user) 
    {
        $jumlah++;
    }    
    var_dump($user);
    

    if(isset($_POST['toLog'])){
        header("location:login.php");
    }
    if(isset($_POST['toHome'])){
        header("location:home.php");
    }
    if(isset($_POST['reg']))
    {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $nohp = $_POST['telp'];
        $usern = $_POST['user'];
        $pass = $_POST['pass'];  
        $cpass = $_POST['cpass'];  
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
        $pass==""||$cpass==""){
            echo "field tidak boleh kosong!";
        }else if($pass!=$cpass){
            echo "konfirmasi password tidak sesuai";            
        }else if($cek==$jumlah)
        {   
            echo "haha";
            mysqli_query($link,"INSERT INTO merchant(id,nama,rating,alamat,notelp,username,pass) VALUES('$nama','$nama',0,'$alamat','$nohp','$usern','$pass')");
            echo "sheyenk";
            header('location:login.php');
        }
        // else{
        //     echo "username/no hp telah terdaftar";
        // }
    
	}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Register Merchant</h1>
    <form action="#" method="post">
        Nama: <input type="text" name="nama"><br>
        Alamat: <input type="text" name="alamat"><br>
        No telp: <input type="text" name="telp"><br>
        Username: <input type="text" name="user"><br>
        Password: <input type="text" name="pass"><br>
        Confirm Password: <input type="text" name="cpass"><br>
       <input type="submit" value="Register" name="reg">
       <input type="submit" value="Ke Halaman Login" name="toLog">
       <input type="submit" value="Ke Halaman Home" name="toHome">
       <!-- <input type="hidden" name="hiddata" value='<?php echo json_encode($data); ?>'> -->
    </form>
    
</body>
</html>