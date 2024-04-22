// (function() {
//     "use strict";

//     console.log("hola mundo!");
// $('#exampleModal4').on('show.bs.modal', function (event) {
//     var button = $(event.relatedTarget) // Button that triggered the modal
//     var recipient = button.data('whatever') // Extract info from data-* attributes
//     // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
//     // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
//     var img = button.data('imagenevento')
//     var nombreSeccion = button.data('seccion');
//     var modal = $(this)
//     // modal.find('.modal-title').text('New message to ' + recipient)
//     console.log(img);
//     console.log(nombreSeccion);
//     modal.find('.modalimg').attr('src', "{{'asset('storage/eventos/"+nombreSeccion+"/"+img+")}}")
//     modal.find('.modal-body input').val(recipient)
//   })
// });


"use strict";


/*** Muesto la img del evento en el modal */
document.querySelectorAll('.btn-modal-evento').forEach(boton => {
    boton.addEventListener('click', e => {
        let imagen = e.delegateTarget.dataset.imagenevento;
        let seccion = e.delegateTarget.dataset.seccion;

        let inputImg = document.querySelector(".modalimg");
        let src = "storage/eventos/"+imagen;
        inputImg.setAttribute("src", src);
        src = "";
    });
});
