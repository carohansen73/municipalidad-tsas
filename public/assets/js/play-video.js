"use strict"

document.addEventListener('DOMContentLoaded', e => {

    const video = document.querySelectorAll(".member-img video").forEach(vid =>{
        vid.addEventListener("mouseenter", () => {
            console.log('entro');
            vid.play();
        })
        vid.addEventListener("mouseleave", () => {
            vid.pause();
        })
    });





})



// document.querySelectorAll(".div-tramite-2").forEach(div =>{
//     div.addEventListener('click', e => {
//             e.preventDefault();


//         abrirTag(div)
//         getInfoOrganigrama(e, div)
//     })
// })
