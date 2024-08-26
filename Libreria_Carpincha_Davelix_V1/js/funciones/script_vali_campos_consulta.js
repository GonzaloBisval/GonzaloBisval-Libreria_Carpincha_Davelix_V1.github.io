$(function(){
    /* VARIABLE  */
    var nombre,whatssap,consulta;
    $("#BTNEnviar").on('click',function(){
        /* OBTENER LOS DATOS DEL FORMULARIO */
        nombre = $(".nombre").val();
        whatssap = $(".whatssap").val();
        consulta = $(".consulta").val();
        /* VERIFICAR SI LOS LAS VARIABLES ESTAN VACIAS */
        if(nombre.length==0 || whatssap.length==0 || consulta.length==0){
            alert("campos vacios");

            window.location="../../index.php";
        }
    })
})