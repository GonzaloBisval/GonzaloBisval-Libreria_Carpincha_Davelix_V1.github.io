$(function(){
    /* VARIABLE  */
    var imagenes, titulo, tematica, autores, rubro, precio;
    $(".items").on('click',function(){
        imagenes = $(".imagenes").val();
    /* OBTENER LOS DATOS DEL FORMULARIO */
        titulo = $(".titulo").val();
        tematica = $(".tematica").val();
        autores = $(".autores").val();
        rubro = $(".rubro").val();
        precio = $(".precio").val();
        /* VERIFICAR SI LOS LAS VARIABLES ESTAN VACIAS */
        if(imagenes.length==0 || titulo.length==0 || tematica.length==0 || autores.length==0 || rubro.length==0 || precio.length==0){
            alert("campos vacios"); 
            window.location="../../formularios/alta/altalibros.php";
        }
    })
})