{{-- Estilo del #preloader puesto inline y ANTES que cualquier CSS externo,
     para que se pinte al instante y tape el HTML sin estilos mientras se
     descarga el resto (Font Awesome, Google Fonts, Bootstrap, etc.) --}}
<style>
    #preloader {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 9999;
        overflow: hidden;
        background: rgb(13, 116, 189);
    }

    #preloader:before {
        content: "";
        position: fixed;
        top: calc(50% - 0px);
        left: calc(50% - 30px);
        border: 6px solid #25afc3;
        border-top-color: rgb(13, 116, 189);
        border-bottom-color: rgb(13, 116, 189);
        border-radius: 50%;
        width: 60px;
        height: 60px;
        animation: animate-preloader 1s linear infinite;
    }

    @keyframes animate-preloader {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
</style>
