<?php
include("Connection/db_asignaturas.php");
$idasignatura = $_GET['id_asignatura'];
$verificarasignatura = "SELECT * FROM asignaturas WHERE id_asignatura ='$idasignatura'";
$taonota = $conexion->query($verificarasignatura);
$tuplas = $taonota->fetch_assoc();
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
  <h3 align="center">Editar asignaturas</h3>
  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    Código: <input type="text" name = "codigo" value="<?php echo $tuplas['codigoasignatura']; ?>">
    Asignatura: <input type="text" name = "asignatura" value="<?php echo $tuplas['nombreasignatura']; ?>">
    Nota: <input type="number" name = "nota" value="<?php echo $tuplas['nota'];?>">
    <input type="hidden" name="id_asignatura2" value="<?php echo $idasignatura;?>">
    <input type="submit" name="editar" value="Modificar">
  </form>
  <?php
  if (isset($_POST['editar'])) {
    $codigo2 = $_POST['codigo'];
    $asignatura2 = $_POST['asignatura'];
    $nota2 = $_POST['nota'];
    $idasignatura2 = $_POST['id_asignatura2'];

    $sqlmodificarasignatura = "UPDATE asignaturas SET codigoasignatura = '$codigo2',nombreasignatura = '$asignatura2',nota = '$nota2' WHERE id_asignatura = '$idasignatura2'";
    $querymodificarasignatura = $conexion->query($sqlmodificarasignatura);
    if ($querymodificarasignatura > 0) {
      echo "
      <script>
        alert('Asignatura modificada correctamente!');
        window.location = 'index.php';
      </script>
      ";
    }
    else {
      echo "
      <script>
        alert('ERROR! - No se ha modificado la asignatura');
        window.location = 'editar_asignatura.php';
      </script>
      ";
    }
  }
  ?>
</body>
</html>
