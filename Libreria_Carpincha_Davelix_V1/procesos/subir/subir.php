<?php
  /*  INCLUIR ARCHIVO DE CONECCION A LA BASE DE DATOS */
     include('../coneccion/conexion.php');


             /* VERIFICAR SI RECIBE POR POST EL BOTON  AGREGAR */
             if(isset($_POST['agregar'])){

          /* GUARDAR LOS DATOS EN LAS VARIABLES */
            $nombre = $_POST['titulo'];
            $temetica = $_POST['tematica'];
            $autores = $_POST['autores'];
            $rubro = $_POST['rubro'];
            $precio = $_POST['precio'];
            
          /* VERIFICA SI EL POST ESTA VACIO */
          if($nombre == ""){
            echo '<script type="text/javascript"> alert("campos vacios"); window.location="../../formularios/alta/altalibros.php";</script>';
          }
          /* VERIFICA SI EL POST ESTA VACIO */
          if($temetica == ""){
            echo '<script type="text/javascript"> alert("campos vacios"); window.location="../../formularios/alta/altalibros.php";</script>';
          }
          /* VERIFICA SI EL POST ESTA VACIO */
          if($autores == ""){
            echo '<script type="text/javascript"> alert("campos vacios"); window.location="../../formularios/alta/altalibros.php";</script>';
          }
          /* VERIFICA SI EL POST ESTA VACIO */
          if($rubro  == ""){
            echo '<script type="text/javascript"> alert("campos vacios"); window.location="../../formularios/alta/altalibros.php";</script>';
          }
          /* VERIFICA SI EL POST ESTA VACIO */          
          if($precio == ""){
            echo '<script type="text/javascript"> alert("campos vacios"); window.location="../../formularios/alta/altalibros.php";</script>';
          }

              /* VERIFICAR SI NO ESTA DA ERROR  EL ARCHIVO IMAGEN */
              if($_FILES["imagenes"]["error"] === 0){

                  /* FORMATOS PERMITIDOS DE LAS FOTOS */
                  $permitidos = array("image/png", "image/jpg", "image/jpeg");
                  /* TAMAÑO DE IMAGEN PERMITIDO */
                  $limite_kb = 2048; //2 MB
                
                  /* VERIFICAR SI LAS IMAGENES CUMPLEN LOS DATOS REQUERIDOS */
                  if (in_array($_FILES["imagenes"]["type"], $permitidos) && $_FILES["imagenes"]["size"] <= $limite_kb * 1024) {

                  /* GUARDAR DATOS DE LAS IMAGENES */
                    $ruta = '../../images/portadas/';
                    $archivoNombre = $_FILES["imagenes"]["name"];
                    $extension = pathinfo($archivoNombre, PATHINFO_EXTENSION);
                    $archivo = uniqid() . '.' . $extension;
                    $rutaGuardado = $ruta . $archivo;
                
                    /* VERIFICAR SI EXISTE EL ARCHIVO */
                    if (!file_exists($archivo)) {

                      /* MOVER Y GUARDAR LA IMAGEN EN LOS ARCHIVOS */
                      $resultado = move_uploaded_file($_FILES["imagenes"]["tmp_name"], $rutaGuardado);

                      /* VERIFIACAR LA EJECUCION */
                      if ($resultado) {
                        
                        /* CONSULTA A LA BASE DE DATOS PARA GUARDAR LOS DATOS */
                        $query = "INSERT INTO libros(titulo,autores,tematica,rubro,precio,portada) values('$nombre','$autores','$temetica','$rubro','$precio','$archivo')";

                        /* EJECUCION DE LA CONSULTA A LA BASE DE DATOS */
                        $resultado1 = mysqli_query($conn,$query);

                        /* REDIRECIONAR AL PAGINA DE ALTA LIBROS  Y MOSTRAR EL CARTEL "AGREGADO CORRECTAMENTE"*/ 
                        echo '<script type="text/javascript"> alert("Agregado Correctamente"); window.location="../../formularios/alta/altalibros.php";</script>';
                      } else {
                        /* REDIRECIONAR AL PAGINA DE ALTA LIBROS  Y MOSTRAR EL CARTEL "ERROR AL GUARDAR EL LIBRO"*/
                        echo '<script type="text/javascript"> alert("Error al guardar el libro"); window.location="../../formularios/alta/altalibros.php";</script>';
                      }
                    } else {
                      /* REDIRECIONAR AL PAGINA DE ALTA LIBROS  Y MOSTRAR EL CARTEL "EL LIBRO YA EXISTE"*/
                      echo '<script type="text/javascript"> alert("el libro  ya existe"); window.location="../../formularios/alta/altalibros.php";</script>'; 
                    }
                  } else {
                    /* REDIRECIONAR AL PAGINA DE ALTA LIBROS  Y MOSTRAR EL CARTEL "EL LIBRO NO ESTA PERMITIDO O EXCEDE EL TAMAÑO"*/
                    echo '<script type="text/javascript"> alert("el libro no esta permitido o excede el tamaño"); window.location="../../formularios/alta/altalibros.php";</script>';
                  }
              }          
        }
?>