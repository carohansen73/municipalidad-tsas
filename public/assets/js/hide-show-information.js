document.addEventListener('DOMContentLoaded', e => {


    document.querySelectorAll(".div-tramite").forEach(div =>{
        div.addEventListener('click', e => {
             e.preventDefault();
            // let elemento = boton.value;



            let iconClosed = div.querySelector(".icon-closed");
            let iconOpen = div.querySelector(".icon-open");
            let divId = 'informacion-'+div.id;
            let divMostrar = document.getElementById(divId);
            //muestro la informacion
            divMostrar.classList.toggle("display-none");
            //CAMBIO EL ICONO "ABIERTO/CERRADO"
            iconClosed.classList.toggle("display-none");
            iconOpen.classList.toggle("display-none");
            // divMostrar.classList.add("activo");

            // divMostrar.onmouseout = ocultarDiv(divMostrar)

        })
    })




    document.querySelectorAll(".div-mas-info").forEach(div =>{
        div.addEventListener('click', e => {
             e.preventDefault();
            mostrarMasInfo(div);
        })
    })


    function ocultarDiv(divActivo){
        console.log("llego");
        divActivo.classList.add("display-none");
    }

    function mostrarMasInfo(div){
        let iconClosed = div.querySelector(".icon-closed");
        let iconOpen = div.querySelector(".icon-open");
        let divId = 'info-'+div.id;
        console.log(divId);
        let divMostrar = document.getElementById(divId);
        //muestro la informacion
        divMostrar.classList.toggle("display-none");
        //CAMBIO EL ICONO "ABIERTO/CERRADO"
        iconClosed.classList.toggle("display-none");
        iconOpen.classList.toggle("display-none");
    }



});
