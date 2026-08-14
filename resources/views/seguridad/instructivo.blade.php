<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Instructivo — Ojos en Alerta</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700;800&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<style>
  :root{
    --brand:#005CC6;
    --brand-dark:#003c82;
    --ink:#12202e;
    --muted:#5b6b7a;
    --bg:#eef2f6;
    --panel:#ffffff;
    --ok:#1a9e6b;
    --lock:#c94b4b;
  }
  *{box-sizing:border-box;}
  html,body{margin:0;padding:0;height:100%;background:var(--bg);font-family:'Roboto',sans-serif;color:var(--ink);}
  h1,h2,h3,.brand-font{font-family:'Poppins',sans-serif;}

  .app{
    max-width:1100px;
    margin:0 auto;
    padding:18px 16px 40px;
    min-height:100%;
    display:flex;
    flex-direction:column;
  }

  header.top{
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:12px;
    margin-bottom:14px;
    flex-wrap:wrap;
  }
  header.top .title{
    display:flex;
    align-items:center;
    gap:10px;
  }
  header.top .title .eye{
    width:34px;height:34px;flex:none;
  }
  header.top h1{
    font-size:19px;
    margin:0;
    color:var(--brand-dark);
    letter-spacing:.2px;
  }
  header.top .sub{
    font-size:12.5px;
    color:var(--muted);
    margin-top:1px;
  }

  .progress-wrap{
    flex:1;
    min-width:220px;
    display:flex;
    align-items:center;
    gap:10px;
  }
  .progress-bar{
    flex:1;
    height:8px;
    background:#dbe4ee;
    border-radius:8px;
    overflow:hidden;
  }
  .progress-fill{
    height:100%;
    background:linear-gradient(90deg,var(--brand),#2fb7e0);
    width:0%;
    transition:width .35s ease;
  }
  .progress-label{
    font-size:12.5px;
    color:var(--muted);
    white-space:nowrap;
    font-variant-numeric:tabular-nums;
  }

  .stage{
    background:var(--panel);
    border-radius:16px;
    box-shadow:0 4px 24px rgba(18,32,46,.08);
    overflow:hidden;
    display:flex;
    flex-direction:column;
    flex:1;
  }

  .media-frame{
    position:relative;
    width:100%;
    aspect-ratio:16/9;
    background:#0b1420;
    display:flex;
    align-items:center;
    justify-content:center;
    overflow:hidden;
  }
  .media-frame img, .media-frame video{
    width:100%;
    height:100%;
    object-fit:contain;
    background:#0b1420;
  }
  .slide-badge{
    position:absolute;
    top:12px;
    left:12px;
    background:rgba(11,20,32,.55);
    color:#fff;
    font-size:12px;
    padding:4px 10px;
    border-radius:20px;
    letter-spacing:.3px;
    backdrop-filter:blur(2px);
  }
  .video-tag{
    position:absolute;
    top:12px;
    right:12px;
    background:rgba(0,92,198,.85);
    color:#fff;
    font-size:11.5px;
    font-weight:700;
    padding:4px 10px;
    border-radius:20px;
    letter-spacing:.4px;
    text-transform:uppercase;
  }

  .caption-area{
    padding:20px 24px 16px;
    border-top:1px solid #eef1f5;
  }
  .caption-text{
    font-size:16px;
    line-height:1.55;
    color:var(--ink);
    margin:0 0 12px;
    min-height:24px;
  }
  .caption-text.empty{
    color:var(--muted);
    font-style:italic;
  }

  .narration-row{
    display:flex;
    align-items:center;
    gap:10px;
    flex-wrap:wrap;
  }
  .btn{
    font-family:'Roboto',sans-serif;
    font-size:13.5px;
    font-weight:700;
    border:none;
    border-radius:10px;
    padding:9px 16px;
    cursor:pointer;
    display:inline-flex;
    align-items:center;
    gap:7px;
    transition:transform .12s ease, background .15s ease, opacity .15s ease;
  }
  .btn:active{transform:scale(.97);}
  .btn-ghost{
    background:#eaf1fb;
    color:var(--brand-dark);
  }
  .btn-ghost:hover{background:#dcebfb;}
  .btn-primary{
    background:var(--brand);
    color:#fff;
  }
  .btn-primary:hover{background:var(--brand-dark);}
  .btn:disabled{
    opacity:.45;
    cursor:not-allowed;
  }
  .btn-toggle.on{
    background:var(--brand);
    color:#fff;
  }

  nav.controls{
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:10px;
    padding:14px 24px 18px;
    border-top:1px solid #eef1f5;
    flex-wrap:wrap;
  }
  .dots{
    display:flex;
    gap:5px;
    flex-wrap:wrap;
    max-width:340px;
  }
  .dot{
    width:8px;height:8px;border-radius:50%;
    background:#d7dfe8;
    cursor:pointer;
  }
  .dot.visited{background:#9fc4ee;}
  .dot.current{background:var(--brand); width:20px; border-radius:5px;}

  .nav-buttons{display:flex; gap:8px;}

  footer.hint{
    text-align:center;
    font-size:12px;
    color:var(--muted);
    margin-top:14px;
    line-height:1.5;
  }

  /* Final slide */
  .final-panel{
    padding:26px 24px 10px;
  }
  .final-panel h2{
    color:var(--brand-dark);
    font-size:20px;
    margin:0 0 6px;
  }
  .final-panel p{
    color:var(--muted);
    font-size:14px;
    margin:0 0 16px;
    line-height:1.5;
  }
  .field-list{
    list-style:none;
    margin:0 0 20px;
    padding:0;
    display:grid;
    grid-template-columns:repeat(2,minmax(0,1fr));
    gap:8px 16px;
  }
  .field-list li{
    background:#f3f7fc;
    border:1px solid #e2ecf7;
    border-radius:9px;
    padding:9px 12px;
    font-size:13.5px;
    color:var(--ink);
  }
  .lock-msg{
    display:flex;
    align-items:center;
    gap:8px;
    font-size:13px;
    color:var(--lock);
    background:#fdecec;
    border:1px solid #f6cccc;
    padding:10px 14px;
    border-radius:10px;
    margin-bottom:16px;
  }
  .lock-msg.ok{
    color:var(--ok);
    background:#e9f8f1;
    border-color:#c9ecda;
  }
  .form-cta{
    display:flex;
    gap:10px;
    flex-wrap:wrap;
    margin-bottom:20px;
  }
  .form-cta .btn-primary{
    font-size:15px;
    padding:13px 22px;
  }

  @media (max-width:640px){
    .field-list{grid-template-columns:1fr;}
    header.top h1{font-size:16px;}
    .caption-text{font-size:14.5px;}
  }
</style>
</head>
<body>
<div class="app">

  <header class="top">
    <div class="title">
      <svg class="eye" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
        <ellipse cx="50" cy="38" rx="42" ry="30" fill="none" stroke="#005CC6" stroke-width="7"/>
        <circle cx="50" cy="38" r="16" fill="#005CC6"/>
        <path d="M50 68 L36 92 L64 92 Z" fill="#2fb7e0"/>
      </svg>
      <div>
        <h1>OJOS EN ALERTA — Instructivo</h1>
        <div class="sub">Municipalidad de Tres Arroyos · recorrido de capacitación</div>
      </div>
    </div>
    <div class="progress-wrap">
      <div class="progress-bar"><div class="progress-fill" id="progressFill"></div></div>
      <div class="progress-label" id="progressLabel">0/28 vistas</div>
    </div>
  </header>

  <div class="stage">
    <div class="media-frame" id="mediaFrame">
      <span class="slide-badge" id="slideBadge">1 / 28</span>
    </div>

    <div class="caption-area" id="captionArea">
      <p class="caption-text" id="captionText"></p>
      <div class="narration-row">
        <button class="btn btn-ghost btn-toggle on" id="autoToggle" title="Activar o desactivar la narración automática">🔊 Narración automática: ON</button>
        <button class="btn btn-ghost" id="replayBtn">▶ Escuchar de nuevo</button>
      </div>
    </div>

    <div id="finalPanel" class="final-panel" style="display:none;">
      <div id="formStep">
        <h2>Para sumarte a OJOS EN ALERTA</h2>
        <p>Al finalizar la capacitación, completá el formulario con estos datos. Tus respuestas quedan registradas para el equipo de Monitoreo de la Municipalidad de Tres Arroyos.</p>
        <div class="narration-row" style="margin-bottom:14px;">
          <button class="btn btn-ghost" id="finalReplayBtn">▶ Escuchar de nuevo</button>
        </div>
        <ul class="field-list">
          <li>Apellido y nombre</li>
          <li>Fecha de nacimiento</li>
          <li>Documento</li>
          <li>Domicilio (calle y número)</li>
          <li>Teléfono</li>
          <li>Correo electrónico</li>
          <li>¿Sos comerciante? (Sí/No) y domicilio del comercio</li>
        </ul>
        <div class="lock-msg" id="lockMsg">🔒 Recorré todas las diapositivas para habilitar el formulario.</div>
        <div class="form-cta">
          <button class="btn btn-primary" id="formBtn" disabled>Completar formulario</button>
        </div>
      </div>

      <div id="doneStep" style="display:none;">
        <div class="lock-msg ok">📝 Se abrió el formulario en otra pestaña. Cuando termines de completarlo, volvé acá y tocá Finalizar.</div>
        <div class="form-cta">
          <button class="btn btn-primary" id="finishBtn">✅ Finalizar</button>
          <button class="btn btn-ghost" id="reopenFormBtn">Volver a abrir el formulario</button>
        </div>
      </div>

      <div id="thankYouStep" style="display:none; text-align:center; padding:20px 0 10px;">
        <div style="font-size:44px; margin-bottom:8px;">✅</div>
        <h2>¡Gracias por sumarte a Ojos en Alerta!</h2>
        <p>Ya completaste el recorrido de la capacitación.</p>
      </div>
    </div>

    <nav class="controls">
      <div class="nav-buttons">
        <button class="btn btn-ghost" id="prevBtn">← Anterior</button>
        <button class="btn btn-primary" id="nextBtn">Siguiente →</button>
      </div>
      <div class="dots" id="dots"></div>
    </nav>
  </div>

  <footer class="hint">
    Podés navegar libremente hacia adelante y atrás. El formulario final se habilita una vez que recorriste todas las diapositivas.
  </footer>

</div>

<script>
/* ============ CONFIGURACIÓN: EDITÁ ACÁ EL LINK DEL FORMULARIO ============ */
const GOOGLE_FORM_URL = "https://forms.gle/a8JSWE9BHtoEzGoA7";
/* =========================================================================== */

const TOTAL = 28;

// type: 'image' | 'video'
// src: file path inside assets/
// caption: texto que se muestra y se narra (null = sin narración)
// ownAudio: true = el video tiene su propio audio relevante (no se narra con voz sintética)
const slides = [
  { n:1,  type:'image', src:'instructivo/assets/img/slide-01.jpg', caption:null },
  { n:2,  type:'image', src:'instructivo/assets/img/slide-02.jpg', audioSrc:'instructivo/assets/audio/slide-02.mp3',
    caption:'Para que el programa Ojos en Alerta pueda funcionar correctamente, la Secretaría de Seguridad cuenta con varios recursos: nuevas tecnologías, cámaras distribuidas estratégicamente y de alta calidad, incorporación de vehículos y personal a la Patrulla Municipal de Prevención, y equipos de comunicación con las fuerzas policiales y los agentes municipales.' },
  { n:3,  type:'image', src:'instructivo/assets/img/slide-03.jpg', noAudio:true,
    caption:'Hoy contamos con gran capacidad de respuesta.' },
  { n:4,  type:'image', src:'instructivo/assets/img/slide-04.jpg', audioSrc:'instructivo/assets/audio/slide-04.mp3',
    caption:'El sistema Ojos en Alerta se apoya en el personal de calle, contando con vehículos de la Patrulla Municipal de Prevención y móviles policiales en todo el distrito.' },
  { n:5,  type:'image', src:'instructivo/assets/img/slide-05.jpg', audioSrc:'instructivo/assets/audio/slide-05.mp3',
    caption:'El personal de la PMP cuenta con agentes que recorren las 24 horas la ciudad, trabajando conjuntamente con los efectivos policiales que se encuentran en el distrito.' },
  { n:6,  type:'image', src:'instructivo/assets/img/slide-06.jpg', audioSrc:'instructivo/assets/audio/slide-06.mp3',
    caption:'El COM —Centro de Operaciones y Monitoreo— cuenta con un moderno sistema de video observación, compuesto por cámaras de alta resolución y un software de última generación.' },
  { n:7,  type:'image', src:'instructivo/assets/img/slide-07.jpg', audioSrc:'instructivo/assets/audio/slide-07.mp3',
    caption:'Las alertas son atendidas por el personal del COM, el cual se encuentra en funcionamiento las 24 horas, los 365 días del año.' },
  { n:8,  type:'image', src:'instructivo/assets/img/slide-08.jpg', audioSrc:'instructivo/assets/audio/slide-08.mp3',
    caption:'Gracias a todos estos elementos se puede poner en funcionamiento este sistema… pero NO ALCANZA.' },
  { n:9,  type:'image', src:'instructivo/assets/img/slide-09.jpg', audioSrc:'instructivo/assets/audio/slide-09.mp3',
    caption:'Nuestro objetivo es…' },
  { n:10, type:'image', src:'instructivo/assets/img/slide-10.jpg', audioSrc:'instructivo/assets/audio/slide-10.mp3',
    caption:'Detectar y combatir todos los delitos que puedan suceder en la vía pública.' },
  { n:11, type:'image', src:'instructivo/assets/img/slide-11.jpg', audioSrc:'instructivo/assets/audio/slide-11.mp3',
    caption:'Hoy el 60% de los delitos no se denuncian.' },
  { n:12, type:'image', src:'instructivo/assets/img/slide-12.jpg', audioSrc:'instructivo/assets/audio/slide-12.mp3',
    caption:'¿Por qué los vecinos no denuncian?' },
  { n:13, type:'image', src:'instructivo/assets/img/slide-13.jpg', noAudio:true,
    caption:'Porque no confían en los tiempos de respuesta.' },
  { n:14, type:'image', src:'instructivo/assets/img/slide-14.jpg', noAudio:true,
    caption:'Porque el vecino muchas veces no desea aportar sus datos personales.' },
  { n:15, type:'image', src:'instructivo/assets/img/slide-15.jpg', noAudio:true,
    caption:'Por falta de compromiso ciudadano.' },
  { n:17, type:'video', src:'instructivo/assets/video/slide-17.mp4', audioSrc:'instructivo/assets/audio/slide-17.mp3', muteVideo:true,
    caption:'Cuando te enterás de que a un vecino le robaron y luego recordás haber visto situaciones sospechosas en tu barrio —un auto que no es habitual o movimientos extraños— podés dar aviso a Ojos en Alerta para prevenir estas situaciones.' },
  { n:18, type:'image', src:'instructivo/assets/img/slide-18.jpg', audioSrc:'instructivo/assets/audio/slide-18.mp3',
    caption:'Las alertas son recibidas por el COM: los operadores recepcionan y derivan personal para los eventos recibidos. Los datos son confidenciales y es seguro para el adherente al programa.' },
  { n:19, type:'image', src:'instructivo/assets/img/slide-19.jpg', noAudio:true,
    caption:'El equipo del COM recepciona cada alerta y coordina la respuesta en el momento.' },
  { n:20, type:'video', src:'instructivo/assets/video/slide-20.mp4', audioSrc:'instructivo/assets/audio/slide-20.mp3', muteVideo:true,
    caption:'¿Qué vemos nosotros desde el Centro de Operaciones y Monitoreo?' },
  { n:21, type:'video', src:'instructivo/assets/video/slide-21.mp4', audioSrc:'instructivo/assets/audio/slide-21.mp3', muteVideo:true,
    caption:'¿Qué ven tus ojos? Como vecino, como comerciante, tu mirada nos ayuda a mejorar nuestro trabajo. Ante cualquier situación que nos informes, los operadores del COM pueden individualizar la alerta y enviar rápidamente personal al lugar.' },
  { n:22, type:'video', src:'instructivo/assets/video/slide-22.mp4', audioSrc:'instructivo/assets/audio/slide-22.mp3', muteVideo:true,
    caption:'Ojos en Alerta también es un elemento que ayuda ante situaciones de violencia de género.' },
  { n:23, type:'image', src:'instructivo/assets/img/slide-23.jpg', audioSrc:'instructivo/assets/audio/slide-23.mp3',
    caption:'En nuestra ciudad, Ojos en Alerta comenzó a dar resultados: gracias a este programa se identificó, persiguió y detuvo rápidamente a un delincuente.' },
  { n:24, type:'video', src:'instructivo/assets/video/slide-24.mp4', ownAudio:true,
    caption:'¿Cómo funciona Ojos en Alerta?' },
  { n:25, type:'image', src:'instructivo/assets/img/slide-25.jpg', audioSrc:'instructivo/assets/audio/slide-25.mp3',
    caption:'Funciona como un chat de WhatsApp, como el que tendrías con cualquier contacto de tu agenda: privado, seguro y resguardando tu identidad. A través de este chat podés enviar audios, videos, imágenes, texto y también tu geolocalización en tiempo real.' },
  { n:26, type:'image', src:'instructivo/assets/img/slide-26.jpg', noAudio:true,
    caption:'Cuando ingresás al programa te enviamos un tutorial para colocarlo como acceso directo, así podés encontrarlo más fácil y rápido.' },
  { n:27, type:'image', src:'instructivo/assets/img/slide-27.jpg', noAudio:true,
    caption:'Y si sos comerciante y te adherís a este programa, te identificás con una calcomanía que te entregamos para tu negocio.' },
  { n:28, type:'video', src:'instructivo/assets/video/slide-28.mp4', ownAudio:true,
    caption:'Testimonio de Facundo Arana sobre Ojos en Alerta.' },
  { n:29, type:'final', audioSrc:'instructivo/assets/audio/slide-29.mp3', caption:null },
];

/* ============================ MOTOR DEL VISOR ============================ */

let current = 0;
const visited = new Set();
let autoNarration = true;

const mediaFrame = document.getElementById('mediaFrame');
const slideBadge = document.getElementById('slideBadge');
const captionArea = document.getElementById('captionArea');
const captionText = document.getElementById('captionText');
const finalPanel = document.getElementById('finalPanel');
const formStep = document.getElementById('formStep');
const doneStep = document.getElementById('doneStep');
const thankYouStep = document.getElementById('thankYouStep');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');
const dotsWrap = document.getElementById('dots');
const progressFill = document.getElementById('progressFill');
const progressLabel = document.getElementById('progressLabel');
const autoToggle = document.getElementById('autoToggle');
const replayBtn = document.getElementById('replayBtn');
const lockMsg = document.getElementById('lockMsg');
const formBtn = document.getElementById('formBtn');
const finalReplayBtn = document.getElementById('finalReplayBtn');
const finishBtn = document.getElementById('finishBtn');
const reopenFormBtn = document.getElementById('reopenFormBtn');

// construir puntitos
slides.forEach((s, i) => {
  const d = document.createElement('div');
  d.className = 'dot';
  d.dataset.i = i;
  d.title = 'Diapositiva ' + s.n;
  d.addEventListener('click', () => goTo(i));
  dotsWrap.appendChild(d);
});

let currentAudio = null;
let groupTimers = [];
let inGroupTransition = false;

function idxOfN(n){
  return slides.findIndex(x => x.n === n);
}

function clearGroupTimers(){
  groupTimers.forEach(id => clearTimeout(id));
  groupTimers = [];
}

// El audio de la diapositiva 12 narra en un solo tramo las diapositivas
// 12, 13, 14 y 15. Repartimos su duración real entre esas 4 diapositivas
// (proporcional al largo del texto de cada una) y programamos el avance
// automático 12→13→14→15, sin seguir de largo después de la 15.
function scheduleGroup12to15Advance(){
  clearGroupTimers();
  const i12 = idxOfN(12), i13 = idxOfN(13), i14 = idxOfN(14), i15 = idxOfN(15);
  if(i12 < 0 || i13 < 0 || i14 < 0 || i15 < 0) return;
  const dur = (currentAudio && currentAudio.duration && isFinite(currentAudio.duration))
    ? currentAudio.duration * 1000
    : 20000;
  const lens = [slides[i12].caption.length, slides[i13].caption.length, slides[i14].caption.length, slides[i15].caption.length];
  const total = lens.reduce((a,b) => a+b, 0);
  let acc = lens[0];
  const t1 = dur * (acc/total); acc += lens[1];
  const t2 = dur * (acc/total); acc += lens[2];
  const t3 = dur * (acc/total);
  groupTimers.push(setTimeout(() => goTo(i13, {fromAuto:true}), t1));
  groupTimers.push(setTimeout(() => goTo(i14, {fromAuto:true}), t2));
  groupTimers.push(setTimeout(() => goTo(i15, {fromAuto:true}), t3));
}

function startAudio(s){
  currentAudio = new Audio(s.audioSrc);
  if(s.n === 12){
    currentAudio.addEventListener('loadedmetadata', scheduleGroup12to15Advance, { once:true });
  }
  currentAudio.play().catch(() => {});
  return currentAudio;
}

function speak(text){
  if(!('speechSynthesis' in window)) return;
  window.speechSynthesis.cancel();
  if(!text) return;
  const u = new SpeechSynthesisUtterance(text);
  u.lang = 'es-AR';
  u.rate = 1;
  const voices = window.speechSynthesis.getVoices();
  const esVoice = voices.find(v => v.lang && v.lang.toLowerCase().startsWith('es'));
  if(esVoice) u.voice = esVoice;
  window.speechSynthesis.speak(u);
}

function stopSpeak(){
  if('speechSynthesis' in window) window.speechSynthesis.cancel();
}

function stopAudio(){
  if(currentAudio){
    currentAudio.pause();
    currentAudio.currentTime = 0;
  }
}

function stopAllNarration(){
  stopSpeak();
  stopAudio();
}

// Reproduce la narración de una diapositiva: prioriza el audio grabado
// por el secretario; si no hay, usa la voz sintética del navegador como
// respaldo; si la diapositiva está marcada noAudio, no reproduce nada
// (ya se narró junto con una diapositiva anterior del mismo bloque).
function playNarration(s){
  if(s.noAudio) return;
  stopAllNarration();
  if(s.audioSrc){
    startAudio(s);
  } else if(s.caption && !s.ownAudio){
    setTimeout(() => speak(s.caption), 250);
  }
}

function replayNarration(s){
  if(s.noAudio) return;
  if(s.audioSrc){
    stopAllNarration();
    clearGroupTimers();
    startAudio(s);
  } else if(s.caption){
    speak(s.caption);
  }
}

function render(){
  if(inGroupTransition){
    stopSpeak();
  } else {
    stopAllNarration();
  }
  inGroupTransition = false;
  const s = slides[current];
  visited.add(current);

  slideBadge.textContent = (current+1) + ' / ' + TOTAL;

  // limpiar media frame (salvo el badge)
  mediaFrame.querySelectorAll('img,video,.video-tag').forEach(el => el.remove());

  if(s.type === 'image'){
    finalPanel.style.display = 'none';
    captionArea.style.display = 'block';
    const img = document.createElement('img');
    img.src = s.src;
    img.alt = 'Diapositiva ' + s.n;
    mediaFrame.appendChild(img);
  } else if(s.type === 'video'){
    finalPanel.style.display = 'none';
    captionArea.style.display = 'block';
    const tag = document.createElement('span');
    tag.className = 'video-tag';
    tag.textContent = 'VIDEO';
    mediaFrame.appendChild(tag);
    const vid = document.createElement('video');
    vid.src = s.src;
    vid.controls = true;
    vid.playsInline = true;
    vid.autoplay = true;
    vid.muted = !!s.muteVideo;
    mediaFrame.appendChild(vid);
    const playPrompt = document.createElement('button');
    playPrompt.className = 'btn btn-primary';
    playPrompt.textContent = '▶ Reproducir video';
    playPrompt.style.position = 'absolute';
    playPrompt.style.zIndex = '5';
    playPrompt.style.display = 'none';
    playPrompt.addEventListener('click', () => {
      vid.play();
      playPrompt.style.display = 'none';
    });
    mediaFrame.appendChild(playPrompt);
    const attemptPlay = vid.play();
    if(attemptPlay && attemptPlay.catch){
      attemptPlay.catch(() => {
        // el navegador bloqueó el autoplay: mostramos un botón para iniciarlo manualmente
        playPrompt.style.display = 'inline-flex';
      });
    }
  } else if(s.type === 'final'){
    captionArea.style.display = 'none';
    finalPanel.style.display = 'block';
    const img = document.createElement('img');
    img.src = 'instructivo/assets/img/slide-29.jpg';
    mediaFrame.appendChild(img);
    updateFinalLock();
    if(autoNarration) playNarration(s);
  }

  if(s.type !== 'final'){
    if(s.caption){
      captionText.textContent = s.caption;
      captionText.classList.remove('empty');
      replayBtn.style.display = (s.noAudio || s.ownAudio) ? 'none' : 'inline-flex';
      if(autoNarration){
        playNarration(s);
      }
    } else {
      captionText.textContent = '';
      captionText.classList.add('empty');
      replayBtn.style.display = 'none';
    }
  }

  prevBtn.disabled = current === 0;
  nextBtn.disabled = current === TOTAL - 1;
  nextBtn.textContent = current === TOTAL - 2 ? 'Ir al formulario →' : 'Siguiente →';

  updateProgress();
  updateFinalLock();
}

function updateProgress(){
  const pct = Math.round((visited.size / TOTAL) * 100);
  progressFill.style.width = pct + '%';
  progressLabel.textContent = visited.size + '/' + TOTAL + ' vistas';
  dotsWrap.querySelectorAll('.dot').forEach((d,i) => {
    d.classList.toggle('visited', visited.has(i));
    d.classList.toggle('current', i === current);
  });
}

function updateFinalLock(){
  const allSeen = visited.size >= TOTAL;
  formBtn.disabled = !allSeen;
  if(allSeen){
    lockMsg.textContent = '✅ ¡Listo! Ya recorriste todo el instructivo. Podés completar el formulario.';
    lockMsg.classList.add('ok');
  } else {
    lockMsg.textContent = '🔒 Recorré todas las diapositivas para habilitar el formulario. Te faltan ' + (TOTAL - visited.size) + '.';
    lockMsg.classList.remove('ok');
  }
}

function goTo(i, opts){
  opts = opts || {};
  if(!opts.fromAuto) clearGroupTimers();
  if(i < 0 || i >= TOTAL) return;
  if(opts.fromAuto) inGroupTransition = true;
  current = i;
  render();
}

prevBtn.addEventListener('click', () => goTo(current - 1));
nextBtn.addEventListener('click', () => goTo(current + 1));
replayBtn.addEventListener('click', () => {
  replayNarration(slides[current]);
});
finalReplayBtn.addEventListener('click', () => {
  replayNarration(slides[current]);
});
autoToggle.addEventListener('click', () => {
  autoNarration = !autoNarration;
  autoToggle.classList.toggle('on', autoNarration);
  autoToggle.textContent = (autoNarration ? '🔊 Narración automática: ON' : '🔇 Narración automática: OFF');
  if(!autoNarration){
    stopAllNarration();
    clearGroupTimers();
  }
});
formBtn.addEventListener('click', () => {
  if(formBtn.disabled) return;
  if(!GOOGLE_FORM_URL || GOOGLE_FORM_URL.indexOf('REEMPLAZAR') !== -1){
    alert('Todavía falta cargar el link del Google Form.\n\nAbrí el archivo index.html con un editor de texto, buscá la línea que dice GOOGLE_FORM_URL cerca del principio del <script>, y pegá ahí el link de tu formulario (el que se comparte para responder, no el de edición).');
    return;
  }
  window.open(GOOGLE_FORM_URL, '_blank');
  formStep.style.display = 'none';
  doneStep.style.display = 'block';
  thankYouStep.style.display = 'none';
});

reopenFormBtn.addEventListener('click', () => {
  window.open(GOOGLE_FORM_URL, '_blank');
});

finishBtn.addEventListener('click', () => {
  doneStep.style.display = 'none';
  thankYouStep.style.display = 'block';
});

document.addEventListener('keydown', (e) => {
  if(e.key === 'ArrowRight') goTo(current + 1);
  if(e.key === 'ArrowLeft') goTo(current - 1);
});

// cargar voces (Chrome las carga async)
if('speechSynthesis' in window){
  window.speechSynthesis.onvoiceschanged = () => {};
}

render();
</script>
</body>
</html>
