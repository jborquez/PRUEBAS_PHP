<?php
include("configuration.php");
$conexion = new mysqli($server,$user,$psw,$db);
if (mysqli_connect_errno()) {
  echo "No conectado", mysqli_connect_error();
  exit();
}
?>
