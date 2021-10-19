<?php
//Conexión a nuestra BD
$mysqli = new mysqli ("localhost", "BDA", "Lapatti", "patisserie");
if ($mysqli -> connect_errno)  {
  echo "fallo al conectar a MySQL: (".$mysqli ->connect_errno . ")" . $mysqli ->connect_errno;
}else{
  $Guardar = !$mysqli -> query("ALTER TABLE producto ADD imagen blob NOT NULL AFTER existencia");

}
 ?>
