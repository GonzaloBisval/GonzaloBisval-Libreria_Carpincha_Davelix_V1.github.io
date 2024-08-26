/* DONDE RECIBE DEL BUSCADOR Y APLICA EL EVENTO */
document.addEventListener("keyup", e=>{

  /* ENCONTTRAR EL ID BUSCADO */
  if (e.target.matches("#buscador")){

    /* VERIFICAR SI APRETAMOS LA TECLA ESCAPE PARA CANCELAR */
      if (e.key ==="Escape")e.target.value = ""

      /* ENTRAN Y BUSCAR EL SI HAY ID PARECIDOS A LA BUSQUEDA */
      document.querySelectorAll(".card").forEach(libro =>{

        /* CHEQUEAR SSI LO ESCRITO ES IGUAL A GUARDADO */
          libro.textContent.toLowerCase().includes(e.target.value.toLowerCase())
          /* REMOVER LA CLASE EFECTO */
            ?libro.classList.remove("busqueda")
            /* APLICAR LA CLASE EFECTO */
            :libro.classList.add("busqueda")
      })

  }


})