# Instructivo — Ojos en Alerta

## Qué es esto
Una versión web interactiva de la presentación "Ojos en Alerta": 29 diapositivas
con imágenes/videos extraídos del PowerPoint, texto en pantalla y narración por
voz (síntesis de voz del navegador, en español). El pase es manual (botones
Anterior/Siguiente o flechas del teclado) y se puede ir y volver libremente.
Al llegar a la última diapositiva, el botón "Completar formulario" se habilita
recién cuando la persona recorrió las 29 diapositivas.

## Cómo abrirlo
Abrí `index.html` con doble clic (funciona sin instalar nada, en cualquier
navegador moderno: Chrome, Edge, Firefox). Para publicarlo en la web del
municipio, subí toda la carpeta (index.html + carpeta `assets`) al hosting,
manteniendo la misma estructura de carpetas.

## ⚠️ Un paso pendiente de tu parte: el link del formulario
Abrí `index.html` con un editor de texto y buscá esta línea, cerca del principio
del `<script>`:

```js
const GOOGLE_FORM_URL = "REEMPLAZAR_CON_EL_LINK_DEL_GOOGLE_FORM";
```

Reemplazá el texto entre comillas por el link de tu Google Form (el que se
comparte para responder, no el de edición).

Los campos que sugiero para ese formulario, tomados del documento que me
pasaste, son:
- Apellido y nombre
- Fecha de nacimiento
- Documento
- Domicilio (calle y número)
- Teléfono
- Correo electrónico
- ¿Sos comerciante? (Sí/No) y domicilio del comercio

**Sobre el envío a monitoreo@tresarroyos.gov.ar:** Google Forms no manda
automáticamente cada respuesta a una casilla distinta a la del dueño del
formulario. Para que las respuestas lleguen a monitoreo@tresarroyos.gov.ar
hay dos caminos, dentro del propio Google Forms (no de este archivo):
1. Crear/editar el formulario desde esa cuenta de Google, o
2. Desde el formulario, ir a los tres puntos (⋮) → "Recibir notificaciones
   por correo de nuevas respuestas" y seguir agregando esa dirección como
   colaboradora del formulario para que reciba el aviso de cada respuesta.

Si querés, decime el link del formulario (o si todavía no lo creaste, decime
y te ayudo a armarlo) y lo dejo cargado directamente en el archivo.

## Sobre la narración
Uso la síntesis de voz del propio navegador (no requiere internet ni backend).
Por eso la voz puede sonar distinta según la computadora del usuario. Hay un
botón para activar/desactivar la narración automática y otro para repetirla.
Si preferís una voz grabada más prolija y pareja en todas las diapositivas,
te lo puedo armar en un paso posterior (grabación o voz sintética de mayor
calidad) — avisame.

## Sobre los videos
Las diapositivas 16, 17, 20, 21, 22, 24 y 28 tienen video embebido en el
PowerPoint original; los comprimí para que pesen bien en la web (calidad
similar, mucho más liviano). No se autoreproducen con sonido (los navegadores
no lo permiten sin que la persona haga clic), por eso tienen controles de
reproducción visibles.

## Sobre la diapositiva 28 (video de Facundo Arana)
Usé el video más largo y de mejor calidad que subiste por WhatsApp (en vez
del clip de 6 segundos que estaba embebido en el PowerPoint, que se corta a
mitad de frase). Le apliqué un procesamiento de audio (ecualización enfocada
en la voz + normalización de volumen) para atenuar un poco el ruido/música de
fondo y resaltar la voz. Esto es una mejora parcial: no es una separación de
voz e instrumental real (eso requeriría herramientas de IA de audio más
pesadas). Si el resultado no te convence, puedo intentar una separación más
agresiva con otra herramienta — avisame y lo pruebo.

## Sobre el orden de las diapositivas y los textos
Emparejé cada diapositiva con el texto correspondiente del documento
"PARA AUDIO.docx" por contenido (comparé imagen por imagen), ya que la
numeración "Imagen N" del documento no coincide exactamente con el número de
diapositiva del PowerPoint. Revisé el resultado a ojo, pero si encontrás algún
texto en la diapositiva equivocada, es muy fácil de corregir: cada diapositiva
es un bloque `{ n:.., type:.., src:.., caption:'...' }` dentro del archivo
`index.html` (buscá `const slides = [`). Cambiá el texto entre comillas y listo.

## Próximo paso (video con otra voz/persona)
Para la segunda parte que mencionaste —un video similar al que enviaste pero
con otra voz y otra persona hablando— lo charlamos en el próximo mensaje: te
voy a pedir el video de la persona que va a "reemplazar" a Facundo Arana.
