<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Generar PDF con PHP</title>
  <style type="text/css">
  h2{
    color: rgb(47, 85, 198);
  }
  #cajas{
    width: 100%;
  }
  .caja{
    /* width: 200px; */
    width: 100%;
    height: 200px;
    border: 1px solid black;
    background: #e7c181;
    margin-bottom: 5px;
  }
  .roja{
    background: #f71d07
  }
  .azul{
    background: black;
  }
  .amarilla{
    background: #e3e65b
  }
  .verde{
    background: #80dd64
  }
  #cabecera img{
    float: right;
  }
  </style>
</head>
<body>
    <?php
    //var_dump($_POST); // Para enviar título a index.php y generar PDF  --> Muestra el arreglo de los datos en el pdf, como $array
    if (isset($_POST['titulo'])): ?>
  <div id="cabecera">
    <img src="https://www.html2pdf.fr/img/_langue/es/logo.gif">
    <h1><?=$_POST['titulo'] ?></h1>
  </div>
      <?php endif; ?>
  <h2>Nueva línea del archivo</h2>
  <p></p>
  <div id="cajas">
    <div class="caja roja"></div>
    <div class="caja azul"></div>
    <div class="caja amarilla"></div>
    <div class="caja verde"></div>
  </div>
  <p></p>
  <table border="1">
    <tr>
      <td>Tabla con 'table+' en Atom con EMMET</td>
      <td>fácil de ejecutar y sin clases</td>
    </tr>
    <tr>
      <td>Otra Tabla con 'table+' en Atom con EMMET</td>
      <td>Facilito</td>
    </tr>
  </table>
</body>
</html>
