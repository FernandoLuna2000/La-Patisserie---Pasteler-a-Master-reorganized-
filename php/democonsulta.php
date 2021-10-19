<?php
$mysqli = new mysqli ("localhost", "BDA", "Lapatti", "patisserie");
if ($mysqli -> connect_errno)  {
  echo "fallo al conectar a MySQL: (".$mysqli ->connect_errno . ")" . $mysqli ->connect_errno;
}
$resultado = $mysqli->query("SELECT*FROM producto ORDER BY ID ASC");

echo "Orden invertido... <br>";
for ($num_fila = $resultado->num_rows -1; $num_fila >=0; $num_fila--) {
  $resultado->data_seek($num_fila);
  $fila = $resultado->fetch_assoc();
  echo "ID =" .$fila['id'];
  echo "Nombre =" .$fila['nombre']."<br>";
}

echo "Orden de Resultados....<br>";
$resultado->data_seek(0);
while($fila = $resultado ->fetch_assoc()){
  echo "ID =" .$fila['id'];
  echo "Nombre =" .$fila['nombre']."<br>";
}
 ?>
