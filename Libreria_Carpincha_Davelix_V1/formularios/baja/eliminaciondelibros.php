<?php
/* CONECCION A LA BASE DE DATOS */
include('../../procesos/coneccion/conexion.php');
/*  CONSULTA A LA BASE DE DATOS PARA TRAER TODA LA INFORMACION*/
$query = "SELECT * from libros";
/* EJECUCION DE LA CONSULTA A LA BASE DE DATOS */
$resultado = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <!-- DESCRIPCION DE LA PAGINA -->
  <meta name="description" content="Muestra de libros">
  <!-- AUTORES -->
  <meta name="autores" content="Alejandro Avigliano y Gonzalo Bisval">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- BOOTSTRAP -->
  <link  href="../../css/bootstrap.min.css" rel="stylesheet">
  <link  href="../../css/bootstrap-theme.css" rel="stylesheet">
  <!-- CONECCION HOJA DE ESTILO -->
  <link rel="icon" type="text/css" href="../../images/imagenes/th.jpg">
  <link rel="stylesheet" href="../../css/estilos/estilos_4.css">
  <!-- TITULO -->
  <title> libreria carpicha davelix </title>

    <!-- REFRESCAR LA PAGINA -->
    <meta http-equiv = "refresh" content = "5" >
</head>

<body>
    <!-- SECCION DE ENCABEZADO -->
    <section id="header">
      <div class="container">
        <header>
          <nav class="items">
            <!-- OPCIONES DEL MENU DEL ENCABEZADO -->
            <a class="item" href="../../index.php"><strong>home</strong></a>
            <a class="item" href="../tablas/muestralibros.php"> <strong>libros</strong></a>
          </nav>
        </header>
      </div>
    </section>

    <!-- SECCION DEL TITULO -->
    <section id="titulo">
      <div class="container">
        <h1><strong> davelix carpicha</strong> </h1>
        <h2><strong> libreria </strong> </h2>
      </div>
    </section>

    <!-- SECCION DE IMAGEN  -->
    <section id="publicidad">
      <div class="container">
        <div class="propaganda">
          <img src="../../images/imagenes/carpincho3.jpg" alt="carpincho"> 
        </div>  
      </div>
    </section>

    <!-- SECCION TABLA DE ELIMINACION DE LIBROS -->
    <section id="tabla_eliminacion">
      <div class="container">
        <!-- TABLA -->
        <table class="tabla">
          <!-- ENCABEZADO DE TABLA -->
          <thead>
            <td>imagen</td>
            <td>titulo</td>
            <td>tematica</td>
            <td>autores</td>
            <td>rubro</td>
            <td>precio</td>
            <td>operaciones</td>
          </thead>
          <!-- CUERPO DE LA TABLA -->
          <tbody>
            <?php foreach ($resultado as $row) { ?>
              <tr>
                <input type="hidden" value="<?php echo $row['id_libro'] ?>" name="id_libros">
                <td><img class="imagen-tabla" src="../../images/portadas/<?php echo $row['portada'] ?>"> </td>
                <td><?php echo $row['titulo']; ?></td>
                <td><?php echo $row['tematica']; ?></td>
                <td><?php echo $row['autores']; ?></td>
                <td><?php echo $row['rubro']; ?></td>
                <td><?php echo $row['precio']; ?></td>
                <td>
                  <!-- OPCIONES -->
                  <form method="POST" action="../../procesos/eliminacion/eliminacion_Libros.php">
                    <input type="hidden" value="<?php echo $row['id_libro'] ?>" name="id_libros">
                    <input type="hidden" name="portada" value="<?php echo $row['portada'] ?>">
                    <input type="submit" class="btn btn-danger" value="eliminar" class="bontoneliminar">
                  </form>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </section>

    <!-- SECCION DE PIE DE PAGINA -->
    <footer id="footer">
      <div class="container">
        <p class="cartel">&copy;contenido con derecho de autor 2024</p>
      </div>
    </footer>

      <!-- BOOTSTRAP -->
      <script src="../../js/bootstrap.min.js"></script>
      <script src="../../js/jquery-3.7.1.min.js"></script>
</body>

</html>