<?php
$mysqli = new mysqli ("localhost", "BDA", "Lapatti", "patisserie");
if ($mysqli -> connect_errno)  {
  echo "fallo al conectar a MySQL: (".$mysqli ->connect_errno . ")" . $mysqli ->connect_errno;
}
print "opción 1: <br>";
echo $mysqli->host_info;
print "<br>";
$mysqli = new mysqli("127.0.0.1", "BDA", "Lapatti", "patisserie", 3306);
if ($mysqli ->connect_errno){
  echo "Fallo al conectar a MySQL: (".$mysqli ->connect_errno . ")" . $mysqli ->connect_errno;
}
print "Opción 2: <br>";
echo $mysqli->host_info;
?>
