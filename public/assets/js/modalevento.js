"use strict";


/*** Muesto la img del evento en el modal */
document.querySelectorAll('.btn-modal-evento').forEach(boton => {
    boton.addEventListener('click', e => {
        let imagen = e.delegateTarget.dataset.imagenevento;
        let seccion = e.delegateTarget.dataset.seccion;
        console.log('entro modal');

        let inputImg = document.querySelector(".modalimg");
        let src = "storage/eventos/"+imagen;
        inputImg.setAttribute("src", src);
        src = "";
    });
});
