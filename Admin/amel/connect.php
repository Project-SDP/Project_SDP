<?php
    $host="ec2-3-222-150-253.compute-1.amazonaws.com";
    $user="ziwbwtazkjxgeh";
    $pass="2ff5557001816797d5c849fba6b066ae770018d6dd2ff2983b111fdcd36ceace";
    $database="d5mft5oq3qcf0t";
    $port="5432";
    try{
        $dsn = "psql:host=".$host.";port=".$port.";dbname=".$database.";user=".$user.";password=".$pass;
        $pdo = new PDO($dsn, $user,$pass);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        $pdo->setAttribute(PDO::ATTR_ERR_MODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "Failed to connect" . $e->getMessage();
    }
?>