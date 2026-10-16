{{-- Widget flotante de WhatsApp (asistente "Arroyito"). Proveedor externo, archivo propio servido desde este dominio.
     Atributos data-*: ver el comentario al inicio de public/assets/js/bot/asistente-widget.js --}}
<script src="{{ asset('assets/js/bot/asistente-widget.js') }}?v={{ @filemtime(public_path('assets/js/bot/asistente-widget.js')) }}"
        data-numero="5492983509001"
        data-nombre="Arroyito"
        data-color="#1B4AA0"></script>
