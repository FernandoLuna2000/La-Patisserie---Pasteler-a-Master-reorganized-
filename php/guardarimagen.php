<?php
if(isset($_POST["Guardar"])){
    $check = getimagesize($_FILES["Imagen"]["tmp_name"]);
    if($check !== false){
        $Imagen = $_FILES['Imagen']['tmp_name'];
        $imgContent = addslashes(file_get_contents($Imagen));


        $dataTime = date("Y-m-d H:i:s");

        //Insert image content into database
        $insert = $mysqli->query("INSERT into producto (imagen) VALUES ('$imgContent')");
        if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        }
    }else{
        echo "Please select an image file to upload.";
    }
}
 ?>
