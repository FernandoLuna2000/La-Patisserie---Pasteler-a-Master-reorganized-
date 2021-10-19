<!--Pro medio del Array POST obtenemos el valor de los campos en el formulario-->
el id es <?php print $_POST["ID"]; ?> <br>
el nombre es <?php print $_POST["Nombre"]; ?> <br>
el Precio es <?php print $_POST["Precio"]; ?> <br>
la cantidad es <?php print $_POST["Cantidad"]; ?> <br>
el relleno es <?php print $_POST["Relleno"]; ?> <br>
el tipo de adorno es <?php print $_POST["Adorno"]; ?> <br>
el numero de personas es <?php print $_POST["Personas"]; ?> <br>
<?php
//Si se quiere subir una imagen
if (isset($_POST['Guardar'])) {
   //Recogemos el archivo enviado por el formulario
   $Imagen = $_FILES['Imagen']['name'];
   //Si el archivo contiene algo y es diferente de vacio
   if (isset($Imagen) && $Imagen != "") {
      //Obtenemos algunos datos necesarios sobre el archivo
      $tipo = $_FILES['Imagen']['type'];
      $tamano = $_FILES['Imagen']['size'];
      $temp = $_FILES['Imagen']['tmp_name'];
      //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
     if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
        echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
        - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>';
     }
     else {
        //Si la imagen es correcta en tamaño y tipo
        //Se intenta subir al servidor (dentro de una carpeta que existe)
        if (move_uploaded_file($temp, '../Images/'.$Imagen)) {
            //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
            chmod('../Images/'.$Imagen, 0777);
            //Mostramos el mensaje de que se ha subido co éxito
            echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
            //Mostramos la imagen subida
            echo '<p><img src="../Images/'.$Imagen.'"></p>';
        }
        else {
           //Si no se ha podido subir la imagen, mostramos un mensaje de error
           echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
        }
      }
   }
}
?>
