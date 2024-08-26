<?php
/* CONECCION A LA BASE DE DATOS */
include('../../procesos/coneccion/conexion.php');

/*  CONSULTA A LA BASE DE DATOS PARA TRAER TODA LA INFORMACION*/
$query = "SELECT * from libros";
/* EJECUCION DE LA CONSULTA A LA BASE DE DATOS */
$resultado = mysqli_query($conn, $query);
/* CONSULTA A LA BASE DE DATOS PARA TRAER LOS AUTORES */
$query2 = "SELECT (autores) from libros";
/* EJECUCION DE LA CONSULTA A LA BASE DE DATOS */
$resultado2 = mysqli_query($conn, $query2);

/* CONSULTA A LA BASE DE DATOS PARA TRAER LOS RUBROS */
$query3 = "SELECT (rubro) from libros";
/* EJECUCION DE LA CONSULTA A LA BASE DE DATOS */
$resultado3 = mysqli_query($conn, $query3);
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
  <link rel="stylesheet" href="../../css//estilos/estilos_3.css">
  <!-- TITULO -->
  <title> libreria  carpicha davelix</title>

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
            <a class="item" href="../alta/altalibros.php"> <strong>carga</strong></a>
            <a class="item" href="muestralibros.php"><strong>libros</strong></a>
            <a class="item" href="../baja/eliminaciondelibros.php"><strong>eliminar</strong></a>
          </nav>
        </header>
      </div>
    </section>

    <!-- SECCION DEL TITULO -->
    <section id="titulo">
      <div class="container">
        <h1><strong>carpincha davelix</strong> </h1>
        <h2><strong> libreria </strong> </h2>
      </div>
    </section>

    
      <!-- SECCION DE IMAGEN  -->
      <section id="publicidad">
        <div class="container">
          <div class="row">
            <div class="propaganda">
              <img src="../../images/imagenes/carpincho2.jpg" alt="carpincho">
            </div>
          </div>
        </div>
      </section>
     
    <!-- SECCION MUESTRA CATEGORIAS DE LOS LIBROS -->
    <section id="muestra-categorias">
      <div class="container">
        <!-- COLUMNA DONDE SE MUESTRAN LOS AUTORES -->
        <div class="columns">
          <p>AUTORES:</p>
            <?php foreach ($resultado2 as $row2) { ?>
              <a><?php echo $row2['autores']; ?></a>
              <br>
            <?php } ?>
        </div>
        <!-- COLUMNA DONDE SE MUESTRAN LOS RUBROS -->
        <div class="columns"> 
          <p>RUBRO:</p>
            <?php foreach ($resultado3 as $row3) { ?>
              <a><?php echo $row3['rubro']; ?></a>
              <br>
            <?php } ?> 
        </div>
      </div>
    </section> 

      <!-- SECCION DEL BUSCADOR -->
    <section id="filtros">
      <div class="container">
        <div>
          <!-- FORMULARIO DE BUSQUEDA -->
          <form method="POST">
            <div>
              <input type="text" class="form" id="buscador" name="buscar" placeholder="buscar..">
              <input type="submit" class="items" value="buscar">
            </div>
          </form>
        </div>
        <div class="container">
          <?php
          /* FUNCIONAMIENTO DEL BUSCADOR */
          if (isset($_POST["buscar"]) && $_POST["buscar"] != '') {
            /* VERIFICAR LA CONECCION A LA BASE DE DATOS */
            if ($conn->connect_error) {
              die("Error en la conexion: " . $conn->connect_error);
            }
            /* RECIBIR POR POST LO INGRESADO EN EL FORMULARIO DE BUSQUEDA */
            $buscar = $_POST["buscar"];
            /* CONSULTA A LA BASE DE DATOS PARA COMPARAR SI LO INGRESADO EN EL FORMULARIO EXISTE */
            $query3 = "SELECT * FROM libros WHERE tematica LIKE  '%$buscar%' OR titulo LIKE '%$buscar%' OR autores LIKE '%$buscar%' OR rubro LIKE '%$buscar%'";
            /* EJECUCION DE LA CONSULTA  */
            $resultado3 = $conn->query($query3);
            /* VERIFICAR SI HAY LIBROS PARECIDA A LA CONSULTA */
            if ($resultado3->num_rows > 0) {
              /* RECORER LA EJECUCION DE LA CONSULTA A LA BASE PARA VER SI HAY RESULTADO PARECIDOS ALA BUSQUEDA*/
              while ($row = $resultado3->fetch_assoc()) {?>
              <!-- TARJETA PARA MOSTRAR LOS DATOS DE LOS LIBROS -->
              <div class="product-item">
                <div class="card">
                  <!-- MOSTRAR IMAGEN DE LOS LIBROS -->
                  <img class="card-img-top" src="../../images/portadas/<?php echo $row['portada']; ?>" alt="PORTADA">
                  <!-- MOSTRAR EL TITULO DE LOS LIBROS -->
                  <div class="card-body">
                    <p class="card-text">titulo:<strong><?php echo $row['titulo']; ?></strong></p>
                  </div>
                  <!-- MOSTRAR LA TEMATICA DE LOS LIBROS -->
                  <div class="card-body">
                    <p class="card-text">tematica:<strong><?php echo $row['tematica']; ?></strong></p>
                  </div>
                  <!-- MOSTRAR EL AUTOR DE LOS LIBROS -->
                  <div class="card-body">
                    <p class="card-text">autores:<strong><?php echo $row['autores']; ?></strong></p>
                  </div>
                  <!-- MOSTRAR EL PRECIO DE LOS LIBROS -->
                  <div class="card-body">
                    <p class="card-text">precio:<strong><?php echo $row['precio']; ?></strong></p>
                  </div>
                </div>
              </div>
              <?php }
            } else {?>
            <!-- MOSTRAR TARJETA CUANDO NO HAY LIBROS PARECIDOS A LA BUSQUEDA -->
              <div class="card">
                <div class="card-body">
                  <p class="card-text">NO CONTAMOS CON ESE LIBRO</p>
                </div>
              </div>
            <?php
            }
           } ?>
        </div>
      </div>
    </section>  

    </br>

    <!-- SECCION MUESTRA DE LOS LIBROS COMO TARJETAS -->
    <section id="tarjetas">
      <div class="container">
        <!-- RECORER LA EJECUCION DE LA CONSULTA A LA BASE PARA VER SI HAY RESULTADO-->
        <?php foreach ($resultado as $row) { ?>
          <!-- TARJETA PARA MOSTRAR LOS DATOS DE LOS LIBROS -->
          <div class="product-item">
            <div class="card">
              <!-- MOSTRAR IMAGEN DE LOS LIBROS -->
              <img src="../../images/portadas/<?php echo $row['portada']; ?>" alt="PORTADA">
              <!-- MOSTRAR EL TITULO DE LOS LIBROS -->
              <div class="card-body">
                <p class="card-text">titulo:<strong><?php echo $row['titulo']; ?></strong></p>
              </div>
              <!-- MOSTRAR LA TEMATICA DE LOS LIBROS -->
              <div class="card-body">
                <p class="card-text">tematica:<strong><?php echo $row['tematica']; ?></strong></p>
              </div>
              <!-- MOSTRAR EL AUTOR DE LOS LIBROS -->
              <div class="card-body">
                <p class="card-text">autores:<strong><?php echo $row['autores']; ?></strong></p>
              </div>
              <!-- MOSTRAR EL PRECIO DE LOS LIBROS -->
              <div class="card-body">
                <p class="card-text">precio:<strong><?php echo $row['precio']; ?></strong></p>
              </div>
            </div>
          </div> 
        <?php } ?>
      </div>
    </section>

    </br>
    
    <!-- SECCION DE PIE DE PAGINA -->
    <footer id="footer">
      <div class="container">
        <p class="cartel">&copy;contenido con derecho de autor 2024</p>
      </div>
    </footer>

      <!--  SCRIPT PARA EL FUNCIONAMIENTO DEL BUSCADOR-->
      <script src="../../js/scriptfiltradobuscador.js"></script>
      <!-- BOOTSTRAP -->
      <script src="../../js/bootstrap.min.js"></script>
      <script src="../../js/jquery-3.7.1.min.js"></script>
</body>

</html>