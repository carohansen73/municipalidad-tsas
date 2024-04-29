

document.addEventListener('DOMContentLoaded', e => {

    let counter = 0;

    document.querySelectorAll(".section-information").forEach(div =>{
        console.log(counter);


            // let elemento = boton.value;

            counter++;

            //muestro la informacion

            //CAMBIO EL ICONO "ABIERTO/CERRADO"
            if(counter == 1){
                let contact =document.querySelector(".section-information-contact");
                contact.classList.remove("display-none");
                div.classList.add("col-lg-6");

            }else{
                div.classList.add("col-lg-10 ");
            }


            // divMostrar.onmouseout = ocultarDiv(divMostrar)

    })
    })
