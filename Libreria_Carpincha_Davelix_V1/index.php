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
  <link  href="css/bootstrap.min.css" rel="stylesheet">
  <link  href="css/bootstrap-theme.css" rel="stylesheet">
  <!-- CONECCION HOJA DE ESTILO -->
  <link rel="icon" type="text/css" href="images/imagenes/th.jpg">
  <link rel="stylesheet" href="css/estilos/estilos_1.css">
  <!-- TITULO -->
  <title> libreria carpincha davelix </title>
</head>

<body>
    <!-- SECCION DE ENCABEZADO -->
    <section id="header">
      <div class="container">
        <header>
          <nav class="items">
            <!-- OPCIONES DEL MENU DEL ENCABEZADO -->
            <a class="item" href="formularios/tablas/muestralibros.php"><strong>libros</strong></a>
            <a class="item" href="formularios/alta/altalibros.php"><strong>carga</strong></a>
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

    <!-- SECCION DE PROPAGANDA -->
    <section id="publicidad">
      <div class="container">
        <div class="propaganda">
          <img  src="./images/imagenes/letrero.jpg" alt="capibara">
        </div>
        </br>
        <div class="propaganda1">  
          <img  src="./images/imagenes/carpincho.jpeg" alt="capibara">
        </div>
      </div>
    </section>

    <!-- SECCION COMUNICACION -->
    <section id="partecomunicacion">
      <div class="container">
        <!-- FORMULARIO DE CONSULTAS -->
        <form>
          <!-- PIDE EL NOMBRE -->
          <div class="form-group">
            <div>
              <label for="datoNombre">nombre:</label>
                <div>
                  <input type="text"  id="datoNombre" class="form-control nombre" maxlength="20" placeholder="Nombre...">
                </div>
            </div> 
          </div>
          <!-- PIDE EL NUMERO DE WHATSAPP  -->
          <div class="form-group">
            <div>
              <label for="datoWhatssap">whatsapp:</label>
                <div>
                  <input type="text"  id="datoWhatssap" class="form-control whatssap"  maxlength="20" placeholder="whatsapp..">
                </div> 
            </div> 
          </div>
          <!-- PIDE LA CONSULTA  -->
          <div class="form-group">
            <div>
              <label for="datoConsulta">dejanos tu consulta:</label>
                <div>
                  <input type="text" id="datoConsulta" class="form-control consulta" maxlength="40" placeholder="dejanos tu consulta..">
                </div>
              </div>   
          </div>
          <small id="formulariocartel" class="form-text">por favor si quiere enviar el mensaje, entre a whatsapp y envielo</small> 
          <div>
            <!-- BOTON ENVIAR -->
            <a onclick="enviar()" id="BTNEnviar" href="" class="btn btn-dark  botonenviar">enviar consulta</a> 
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

  <!-- JAVA SCRIPT -->
  <script src="js/funciones/script_vali_campos_carga.js"></script>
  <!--  SCRIPT PARA MANDAR MENSAJES DE WHATSAPP-->
  <script src="js/funciones/scriptmensajeswhatsapp.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-3.7.1.min.js"></script>
</body>

</html>