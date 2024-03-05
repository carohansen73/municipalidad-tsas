// (function() {
//     "use strict";

    // console.log('entro');

    // $.ajax({
    //     url: '/filtro-noticias/all',
    //     method: 'POST',
    //     data:{
    //         id:1
    //     }
    // }).done(function(res){

    //     alert(res);

    // })
// })
// document.addEventListener('DOMContentLoaded', e => {
//     document.getElementById("boton").addEventListener("click", function(){
//         console.log('btn');
//         ajax();
//     })

//     console.log('entro');
//     function ajax(){
//         const http = new XMLHttpRequest();
//         const url = 'http://municipalidad-tsas.test/portal-de-noticias/filtro-noticias/all';

//         http.onreadystatechange = function(){
//             if(this.readyState == 4 && this.status == 200){
//                 console.log(this.responseText);
//                 document.getElementById("response").innerHTML = this.responseText;
//             }
//         }

//         http.open("GET", url);
//         http.send();


//     }
// });


// window.onload = function() {
//     buscarOferta();
// };
// function buscarOferta(){
//     var campana=document.getElementById('campana_id').value;
//     var url = '/buscaCampana';
//     $.ajax({
//       headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
//       type: "GET",
//       dataType: "json",
//       url: url,
//       data: {'campana': campana},
//             beforeSend: function(){
//               //$("#laGrafica").html("<div id='loader'></div>")
//             },
//             success: function (resultado){
//                 console.log(resultado.campana);
//                 //location.href = '/promocion';
//                 var urlPara = "{{ route('web.verCampa',":id") }}";
//                 urlPara = urlPara.replace(':id', resultado.campana);
//                 window.location = urlPara;

//             },
//     });
//   }


"use strict"

document.addEventListener('DOMContentLoaded', e => {
    // let path = window.location.pathname.substr(window.location.pathname.lastIndexOf('/') + 1);

    getAll();

    let btns = document.querySelectorAll('.desplegable-categoria').forEach(boton => {
        boton.addEventListener('click', e => {
        console.log(e.target.id);
            getByCategory(e)
        })
    })

    // const contenedor = document.querySelector('.desplegable-categoria'); //variable contrante para la clase
    // contenedor.addEventListener('click', (elemento) => {
    //     console.log(elemento.target.id)
    // })
});



async function getAll() {
  try {
      //let idTour = window.location.pathname.substr(window.location.pathname.lastIndexOf('/') + 1);
      const url = 'filtro-noticias/all';

    //   var csrf =  document.querySelector('meta[name="csrf-token"]').content;
    //   console.log(csrf);


    //   const options = {
    //         method: "GET",
    //         headers: csrf
    //   }
      const response = await fetch( url);
      const noticias = await response.json();

      console.log(noticias);
      //llamo a la funcion que muestra las tareas
    //   showNoticias(noticias);

  } catch (e) {
      console.log(e);
  }
}


async function getByCategory(botonSeleccionado) {
    try {
        //let idTour = window.location.pathname.substr(window.location.pathname.lastIndexOf('/') + 1);
        const url = 'filtro-noticias/categoria';

        let categoria = botonSeleccionado;
        console.log(categoria);
      //   var csrf =  document.querySelector('meta[name="csrf-token"]').content;
      //   console.log(csrf);


      //   const options = {
      //         method: "GET",
      //         headers: csrf
      //   }
        // const response = await fetch( "/" + url + "/" + categoria);
        // const noticias = await response.json();

        // console.log(noticias);
        //llamo a la funcion que muestra las tareas
      //   showNoticias(noticias);

    } catch (e) {
        console.log(e);
    }
}




// function showComentarios(comentarios) {
//   const container = document.querySelector("#comentarios");
//   container.innerHTML = '';

//   for (let comentario of comentarios) {
//       container.innerHTML += `<td> <span class="usuario"> ${comentario.email} </span>  </td>
//       <td> ${comentario.texto} </td>
//       <td> <span class="calificacion">  ${comentario.calificacion}
//       <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
//           fill="currentColor" xmlns="http://www.w3.org/2000/svg">
//           <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
//           6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327
//           4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389
//           2.256z"/>
//       </svg> </span> </td>`;
//   }

// }
