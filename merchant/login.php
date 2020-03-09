<?php
    require("conn.php");
    $listUser=mysqli_query($link,"SELECT * FROM merchant");
    $jumlah = 0;
    $cek = -1;
    foreach( $listUser as $user ) 
    {
        $jumlah++;
    }
    var_dump($user);
    

    if(isset($_POST['reg'])){
        header("location:reg.php");
    }
    if(isset($_POST['home'])){
        header("location:home.php");
    }
    if(isset($_POST['login']))
    {
        // $pass = $_POST['pass'];  
        $idx = 0; $pass = "";

        foreach ($listUser as $user) {
            if($user['username']==$_POST['user']){
               $cek = $idx;
               $pass = $user['pass'];
            }
            $idx++;
        }
            
        $_SESSION['status'] = $cek;
        echo "user ".$cek;

        if($_POST['user']==""||$_POST['pass']==""){
            echo "field tidak boleh kosong!";
        }
        else if($cek!=-1)
        {
            if($pass!=$_POST['pass'])
            {
                echo "Password salah";
                
            }else{
                header('location:home.php');
            }
        }else{
            echo "User tidak terdaftar";
        }
    
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
    <h1>Login</h1>
    <form action="#" method="post">
        Username: <input type="text" name="user"><br>
        Password: <input type="text" name="pass"><br>
       <input type="submit" value="Login" name="login">
        <input type="submit" value="Ke Halaman Register" name="reg">
        <input type="submit" value="Ke Halaman Home" name="home">
    </form>
    
</body>
</html>