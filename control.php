<?php
session_start();

    if(isset($_POST['control'])){
        if($_POST['control']=='exit')
        {
            echo $_SESSION['loggeduser'];
            unset($_SESSION['loggedUser']);
        }

    }


?>