<!DOCTYPE html>
<html lang="es">

<head>
  <!-- DESCRIPCION DE LA PAGINA -->
  <meta name="description" content="Muestra de libros">
  <!-- AUTORES -->
  <meta name="autores" content="Alejandro Avigliano y Gonzalo Bisval">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- BOOOTSTRAP -->
  <link  href="../../css/bootstrap.min.css" rel="stylesheet">
  <link  href="../../css/bootstrap-theme.css" rel="stylesheet">
  <!-- CONECCION HOJA DE ESTILO -->
  <link rel="icon" type="text/css" href="../../images/imagenes/th.jpg">
  <link rel="stylesheet" href="../../css/estilos/estilos_2.css">
  
   <!-- TITULO -->
  <title> libreria carpicha davelix</title>
</head>

<body>
  <!-- SECCION DE ENCABEZADO -->
  <section id="header">
    <div class="container">
      <header>
        <nav class="items">
          <!-- OPCIONES DEL MENU DEL ENCABEZADO -->
          <a class="item" href="../../index.php"><strong>home</strong></a>
          <a class="item" href="../tablas/muestralibros.php"><strong>libros</strong></a>
        </nav>
      </header>
    </div>
  </section>
   
      <!-- SECCION DEL TITULO  -->
      <section id="titulo">
        <div class="container">
          <h1><strong>carpincha davelix</strong> </h1>
          <h2><strong> libreria </strong> </h2>
        </div>
      </section>

      <!-- SECCION DE IMAGEN  -->
      <section id="publicidad">
        <div class="container">
          <div class="propaganda">
            <img src="../../images/imagenes/capincho4.jpg" alt="carpincho">
          </div>
        </div>
      </section>
      
      <!-- FORMULARIO DE CARGA -->
      <section id="formulariocarga">
        <div class="container">
          <form class="form" action="../../procesos/subir/subir.php" method="POST" enctype="multipart/form-data">
            <!-- PIDE LA IMAGEN -->
            <div class="form-group">
              <div>
                <label for="entradaimagen">imagen:</label>
                  <div>
                    <input  class="archivos imagenes" type="file" id="images" name="imagenes" accept="image/*">
                  </div>
                <small id="imagencartel" class="form-text">ingrese la imagen.</small>
                </br>
                <small id="imagencartel" class="form-text">las imagenes tiene que ser menores de 2 MB.</small>
              </div> 
            </div>
            <!-- PIDE EL TITULO -->
            <div class="form-group">
              <div>
                <label for="entradatitulo">titulo:</label>
                  <div>
                    <input type="text" class="form-control titulo" name="titulo" maxlength="30" placeholder="titulo..">
                  </div>
                <small id="titulocartel" class="form-text">ingrese un titulo.</small>  
              </div>  
            </div>
            <!-- PIDE LA TEMATICA -->
            <div class="form-group">
              <div>
                <label for="entradatematica">tematica:</label>
                  <div>
                    <input type="text" class="form-control tematica" name="tematica" maxlength="30" placeholder="tematica..">
                  </div>
                <small id="tematicacartel" class="form-text">ingrese la tematica.</small>  
              </div>
            </div>
            <!-- PIDE EL AUTOR -->
            <div class="form-group">
              <div>
                <label for="entradaautores">autores:</label>
                  <div>
                    <input type="text" class="form-control autores" name="autores" maxlength="30" placeholder="autores..">
                  </div>
                <small id="autorescartel" class="form-text">ingrese el autores.</small>  
              </div>
            </div>
            <!-- PIDE EL RUBRO -->
            <div class="form-group">
              <div>
                <label for="entradarubro">rubro:</label>
                  <div>
                    <input type="text" class="form-control rubro" name="rubro" maxlength="30" placeholder="rubro..">
                  </div>
                <small id="rubrocartel" class="form-text">ingrese el rubro.</small>  
              </div>
            </div>
            <!-- PIDE EL PRECIO -->
            <div class="form-group">
              <div>
                <label for="entradaprecio">precio:</label>
                  <div>
                    <input type="text" class="form-control precio" name="precio" maxlength="30" placeholder="precio..">
                  </div>
                <small id="preciocartel" class="form-text">ingrese el precio.</small>
              </div>  
            </div>
            <div>
              <input type="submit" class="btn btn-dark items" value="agregar" name="agregar">
              <input type="reset" class=" btn btn-dark items" value="cancelar" onclick="volver()">
            </div>
          </form>
        </div>
      </section>

      <!-- SECCION DE PIE DE PAGINA -->
      <footer id="footer">
        <div class="container">
          <p class="cartel">&copy;contenido con derecho de autor 2024</p>
        </div>
      </footer>

      <!-- JAVASCRIPT -->
      <!-- SCRIPT PARA VOLVER A LA PAGINA ANTERIOR -->
      <script type="text/javascript">
        function volver() {
            window.location.href = "../tablas/muestralibros.php"
        }
      </script>

     <script src="../../js/funciones/script_vali_campos_carga.js"></script> 
      
    <!-- BOOTSTRAP -->
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/jquery-3.7.1.min.js"></script>
</body>

</html>