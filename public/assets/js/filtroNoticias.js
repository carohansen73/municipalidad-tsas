"use strict"

document.addEventListener('DOMContentLoaded', e => {
    // let path = window.location.pathname.substr(window.location.pathname.lastIndexOf('/') + 1);

    getAll();

    //muestra 2 últimas noticias de la categoria donde clickea
    let btns = document.querySelectorAll('.desplegable-categoria-2').forEach(boton => {
        boton.addEventListener('click', e => {
            e.preventDefault;

            getByCategory(e, boton)
        })
    })
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

    //   console.log(noticias);
      //llamo a la funcion que muestra las tareas
    //   showNoticias(noticias);

  } catch (e) {
      console.log(e);
  }
}

/*Busca ultimas 2 noticias de la categoria seleccionada*/
async function getByCategory(e, boton) {
    try {
        //let idTour = window.location.pathname.substr(window.location.pathname.lastIndexOf('/') + 1);
        const url = 'categoria';
        let categoria = e.target.id;

        let idCat = categoria.split("_");
        let idCategoria = idCat[1];
         console.log(idCategoria);

        // var csrf =  document.querySelector('meta[name="csrf-token"]').content;
        // console.log(csrf);


        // const options = {
        //       method: "GET",
        //       headers: csrf
        // }
        const response = await fetch(  url + "/" + idCategoria);
        const noticias = await response.json();


        //llamo a la funcion que muestra las noticias
        showDesplegableByCategory(noticias.data, idCategoria, boton);

    } catch (e) {
        console.log(e);
    }
}

/*Muestra las noticias de la categoria seleccionada*/
function showDesplegableByCategory(noticias, idCategoria, boton){

    let contenedorClass = ".noticias-por-categoria"+idCategoria;
    let contenedor  = document.querySelector(contenedorClass);
    let iconClosed = boton.querySelector(".icon-closed");
    let iconOpen = boton.querySelector(".icon-open");

    contenedor.classList.toggle("display-none");
    iconClosed.classList.toggle("display-none");
    iconOpen.classList.toggle("display-none");

    console.log(noticias);

    let respuesta = "";
    if(noticias[0]){
      respuesta += `<li class="noticias-categoria-item"> <a href="noticia/${noticias[0]['pathname']}">  ${noticias[0]['titulo'].substr(0, 40)}.. </a> </li>`;
    }
    if(noticias[1]){
        respuesta += `<li class="noticias-categoria-item"> <a href="noticia/${noticias[1]['pathname']}">  ${noticias[1]['titulo'].substr(0, 40)}.. </a> </li>`;
    }

    contenedor.innerHTML = respuesta;
    // contenedor += `<li class="noticias-categoria-item"> <a href="noticia/${noticias[1]['pathname']}">  ${noticias[1]['titulo']} </a> </li>`;

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
