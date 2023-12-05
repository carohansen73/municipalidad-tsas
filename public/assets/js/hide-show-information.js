document.addEventListener('DOMContentLoaded', e => {


    document.querySelectorAll(".div-tramite").forEach(div =>{
        div.addEventListener('click', e => {
            // e.preventDefault();
            // let elemento = boton.value;

            let divId = 'informacion-'+div.id;
            let divMostrar = document.getElementById(divId);
            divMostrar.classList.toggle("display-none");
            // divMostrar.classList.add("activo");

            // divMostrar.onmouseout = ocultarDiv(divMostrar)

        })
    })

    function ocultarDiv(divActivo){
        console.log("llego");
        divActivo.classList.add("display-none");
    }

    // document.addEventListener("click", e => {
    //     console.log('click');
    //     let elementoActivo = document.querySelector(".activo");
    //     console.log(elementoActivo);
    //     elementoActivo.classList.add("display-none");
    //     elementoActivo.classList.remove("activo");
    // })
    // document.getElementsByTagName("section").forEach(seccion =>{
    //     seccion.addEventListener('click', e=>{
    //         console.log('click');
    //     })
    // })

    // $(document).on("click",".cerrarModal",function(){
    //     $(".modal").fadeOut();
    //     $(".cerrarModal").attr("class","")
    //   })

});
