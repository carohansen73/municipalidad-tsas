document.addEventListener('DOMContentLoaded', e => {


    document.querySelectorAll(".div-tramite").forEach(div =>{
        div.addEventListener('click', e => {
            // e.preventDefault();
            // let elemento = boton.value;

            let divId = 'informacion-'+div.id;
            let divMostrar = document.getElementById(divId);
            divMostrar.classList.remove("display-none");
        })
    })

});
