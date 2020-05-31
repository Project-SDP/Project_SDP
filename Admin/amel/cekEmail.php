

<?php
    require("connect.php");
    $email = $_POST['email'];

    if($email==""){

    }else if(strpos($email,"@") == false){
        echo "&#10008;";
    }else{
        echo"&#10004;";
    }

?>