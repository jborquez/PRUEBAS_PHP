<?php
include("Connection/db_asignaturas.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Asignaturas</title>
</head>
<body>
  <h3 align="center">Registro de asignaturas</h3>
  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    Código: <input type="text" name = "codigo" placeholder="CD101" required>
    Asignatura: <input type="text" name = "nombre" placeholder="Programacion" required>
    Nota: <input type="number" name = "nota" placeholder="99" required>
    <input type="submit" name="guardar" value="Guardar">
  </form>
  <hr>
  <h4 align="center">*** Mis Asignaturas ***</h4>
  <table border="1">
    <thead>
      <tr>
        <th>Código</th>
        <th>Asignatura</th>
        <th>Nota </th>
        <th>Editar</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>CO100</td>
        <td>Programación</td>
        <td>100</td>
      </tr>
    </tbody>
  </table>
</body>
</html>
