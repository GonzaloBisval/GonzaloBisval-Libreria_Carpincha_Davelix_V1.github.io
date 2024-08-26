/* OBTENIENDO EL NOMBRE DEL FORMULARIO */
const datoNombre = document.querySelector('#datoNombre');
/* OBTENIENDO EL NUMEROP DE WHATSAPP DEL FORMULARIO */
const datoWhatssap = document.querySelector('#datoWhatssap');
/* OBTENIENDO LA CONSULTA DEL FORMULARIO */
const datoConsulta = document.querySelector('#datoConsulta');
/* OBTENIENDO EL CLICK DEL BOTON DEL FORMULARIO */
const btnEnviar = document.querySelector('#BTNEnviar');

/* VARIABLE PARA GUARDAR EL MENSAJE */
var mensaje;

/* FUNSION PARA ENVIAR EL MENSAJE DE WHATSAPP */
function enviar (){
    /* GUARDAR EL MENSAJE EN LA VARIABLE */
    mensaje = `https://api.whatsapp.com/send?phone=+5492346605958&text=hola%20mi%20nombre%20es%20${datoNombre.value}%20,%20mi%20numero%20es%20${datoWhatssap.value}%20,%20la%20consulta%20es%20${datoConsulta.value}`;
    /* AGREGARLE AL BOTON LA VARIABLE */
    btnEnviar.href= mensaje;

    window.location="../../index.php";

}