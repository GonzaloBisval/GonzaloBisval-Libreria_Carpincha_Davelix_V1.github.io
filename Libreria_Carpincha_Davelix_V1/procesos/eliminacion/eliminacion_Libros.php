<?php
/* CONECCION CON LA BASE DE DATOS */
include("../coneccion/conexion.php");

/* GUARDAR LOS DATOS EN LAS VARIABLES */
$id = "'$_POST[id_libros]'";

/* VERIFICAR SI RECIBE POR POST EL BOTON  ELIMINAR*/
if (isset($_POST)){

  /* CONSULTA PARA BORRAR LIBROS DE LA BASE DE DATOS */
  $query = "DELETE FROM libros WHERE id_libro ='$_POST[id_libros]'";

  /* EJECUCUIN DE LA CONSULTA A LA BASE DE DATOS */
  $consul = mysqli_query($conn, $query);


  // ELIMINAR LA IMAGEN
  $portada = $_POST['portada'];
  $rutaArchivo = '../../images/portadas/' . $portada;
  unlink($rutaArchivo); 

  /* VERIFICACION DE LA EJECUCION DE LA CONSULTA A LA BASE DE DATOS */
  if ($consul) {
    /* REDICIONEAR A LA PAGINA DE ELIMINACION Y MOSTRAR EL CARTEL "SE ELIMINO CORRECTAMENTE" */
    echo '<script type="text/javascript"> alert("Se Elimino Correctamente"); window.location="../../formularios/baja/eliminaciondelibros.php";</script>';
  } else {
    /* REDICIONEAR A LA PAGINA DE ELIMINACION Y MOSTRAR EL CARTEL "NO SE ELIMINO CORRECTAMENTE" */
    echo '<script type="text/javascript"> alert("No Se Elimino Correctamente"); window.location="../../formularios/baja/eliminaciondelibros.php";</script>';
  }
}


?>