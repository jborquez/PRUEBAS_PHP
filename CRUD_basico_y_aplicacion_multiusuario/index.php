<?php
include("Connection/db_asignaturas.php");
if (!empty($_POST)) {
  // ***** VERIFICAMOS SI SE INTRODUCE CODIGO MALICIOSO EN EL FORMULARIO *****
  $codigo = mysqli_real_escape_string($conexion,$_POST['codigo']);
  $asignatura = mysqli_real_escape_string($conexion,$_POST['asignatura']);
  $nota = mysqli_real_escape_string($conexion,$_POST['nota']);
  // ***** VERIFICAMOS SI LA ASIGNATURA YA EXISTE EN LA BASE DE DATOS *****
  $verificarasignatura = "SELECT * FROM asignaturas WHERE codigoasignatura ='$codigo' OR nombreasignatura = '$asignatura'";
  $taonota = $conexion->query($verificarasignatura);
  $tuplas = $taonota->num_rows;

  if ($tuplas > 0) {
    echo "
    <script>
      alert('Ya está la asignatura pu gil...');
      window.location = 'index.php';
    </script>
    ";
  }
  else {
    $sqlinsertarasignatura = "INSERT INTO asignaturas(codigoasignatura,nombreasignatura,nota) VALUES('$codigo','$asignatura','$nota')";
    $queryinsertarasignatura = $conexion->query($sqlinsertarasignatura);
    if ($queryinsertarasignatura > 0) {
      echo "
      <script>
        alert('La asignatura se ha ingresado con éxito!');
        window.location = 'index.php';
      </script>
      ";
    }
    else {
      echo "
      <script>
        alert('ERROR! -- El ingreso no fue realizado');
        window.location = 'index.php';
      </script>
      ";
    }
  }
}
$sql_lista_asignaturas = "SELECT * FROM asignaturas";
$query_lista_asignturas = $conexion->query($sql_lista_asignaturas);
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
    Asignatura: <input type="text" name = "asignatura" placeholder="Programacion" required>
    Nota: <input type="number" name = "nota" placeholder="99" required>
    <input type="submit" name="guardar" value="Guardar">
  </form>
  <hr>
  <h4 align="center">*** Mis Asignaturas ***</h4>
  <table border="1" align="center">
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
      <?php
        while ($row_asignaturas = $query_lista_asignturas->fetch_array(MYSQLI_BOTH)) {
          echo "
          <tr>
            <td>".$row_asignaturas['codigoasignatura']."</td>
            <td>".$row_asignaturas['nombreasignatura']."</td>
            <td>".$row_asignaturas['nota']."</td>
            <td><a href='editar_asignatura.php?id_asignatura=".$row_asignaturas['id_asignatura']."'>Editar</a></td>

          </tr>";

        }
        $conexion->close();
      ?>
    </tbody>
  </table>
</body>
</html>
