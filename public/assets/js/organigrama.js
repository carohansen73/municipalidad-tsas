"use strict"

document.addEventListener('DOMContentLoaded', e => {

    //cuando hace click en un area muestra al responsable y las areas contenidas dentro
    document.querySelectorAll(".div-tramite").forEach(div =>{
        div.addEventListener('click', e => {
             e.preventDefault();


            abrirTag(div)
            getInfoOrganigrama(e, div)
        })
    })


    //cuando hace click en un area muestra al responsable y las areas contenidas dentro
    document.querySelectorAll(".div-tramite-2").forEach(div =>{
        div.addEventListener('click', e => {
                e.preventDefault();


            abrirTag(div)
            getInfoOrganigrama(e, div)
        })
    })

        //cuando hace click en un area muestra al responsable y las areas contenidas dentro
        document.querySelectorAll(".div-tramite-3").forEach(div =>{
            div.addEventListener('click', e => {
                    e.preventDefault();


                abrirTag(div)
                getInfoOrganigrama(e, div)
            })
        })



});

    function abrirTag(div){
        let iconClosed = div.querySelector(".icon-closed");
        let iconOpen = div.querySelector(".icon-open");
        let divId = 'informacion-'+div.id;
        let divMostrar = document.getElementById(divId);
        //muestro la informacion
        if(divMostrar){
            divMostrar.classList.toggle("display-none");
        }

        //CAMBIO EL ICONO "ABIERTO/CERRADO"
        iconClosed.classList.toggle("display-none");
        iconOpen.classList.toggle("display-none");
    }


    /*Busca en la tabla organigrama info del area seleccionada*/
    async function getInfoOrganigrama(e, div) {
        try {
            //let idTour = window.location.pathname.substr(window.location.pathname.lastIndexOf('/') + 1);
            const url = 'organigrama/';
            let area = div.id;
            const response = await fetch(  url + area);
            const info = await response.json();

            //llamo a la funcion que muestra las noticias
            showInfoOrganigrama(info.data, area);

        } catch (e) {
            console.log(e);
        }
    }


    function showInfoOrganigrama(info, area){
        console.log(info)
        let contenedor = document.getElementById('show-info-'+info[0]['depende_de']);

        let respuesta = "";
        if(info[0]){
            respuesta +=`<h4> ${info[0]['area']} </h4>
             <h6 class="d-flex align-items-center">
                <span style="font-size: 24px; padding-right:10px;"> <i class="fas fa-user"></i></span>
                <strong>Responsable: </strong> <span style="font-size: 14px;">`;
                if(info[0]['cargo']){ respuesta +=`  ${info[0]['cargo']} `;}
                respuesta += `  ${info[0]['responsable']}  </span>
            </h6>`;
            if(info[0]['direccion']){
                respuesta +=`
                <h6 class="d-flex align-items-center">
                    <span style="font-size: 24px; padding-right:10px;"> <i class="fas fa-map-marker-alt"></i></span>
                    <strong> </strong> <span style="font-size: 14px;"> ${info[0]['direccion']} </span>
                </h6> `;
            }
            if (info[0]['telefono']){
                respuesta +=
                `<h6 class="d-flex align-items-center">
                    <span style="font-size: 24px; padding-right:10px;"> <i class="fas fa-phone"></i></span>
                    <strong> </strong> <span style="font-size: 14px;">  ${info[0]['telefono']} </span>
                </h6>`;
            }
            if (info[0]['email']){
                respuesta +=
                ` <h6 class="d-flex align-items-center">
                    <span style="font-size: 24px; padding-right:10px;"> <i class="fas fa-at"></i></span>
                    <strong> </strong> <span style="font-size: 14px;">   ${info[0]['email']} </span>
                </h6>`;
            }
            if (info[0]['descripcion']){
                respuesta +=
                ` <h6 class="d-flex align-items-center p-1">
                    <span style="font-size: 14px;"> ${info[0]['descripcion']} </span>
                </h6>`;
            }


        }


        contenedor.innerHTML = respuesta;
    }










