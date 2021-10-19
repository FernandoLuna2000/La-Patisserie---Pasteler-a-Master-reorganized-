<?php
    //DB details
    $dbHost     = 'localhost';
    $dbUsername = 'BDA';
    $dbPassword = 'Lapatti';
    $dbName     = 'patisserie';

    //Create connection and select DB
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    //Check connection
    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }

    //Get image data from database
    $result = $db->query("SELECT imagen FROM producto");

    if($result){
        $imgData = $result->fetch_assoc();

        //Render image
        header("Content-type: image/jpg");
        echo $imgData['imagen'];

    }else{
        echo 'Image not found...';
    }

?>
