/*!
 * Widget de asistente municipal · Moment of People
 * Botón flotante que abre WhatsApp con el asistente del municipio.
 *
 * Sin dependencias. Sin cookies. Sin scripts de terceros. Sin seguimiento.
 * Un solo archivo, servido desde el propio dominio del municipio.
 *
 * INSTALACIÓN
 * Pegar esta línea antes de </body> en todas las páginas del sitio:
 *
 *   <script src="/js/asistente-widget.js"
 *           data-numero="5492983509001"
 *           data-nombre="Arroyito"
 *           data-color="#1B4AA0"></script>
 *
 * ATRIBUTOS
 *   data-numero    (obligatorio) número con código de país, sin + ni espacios
 *   data-nombre    (obligatorio) nombre del asistente
 *   data-color     color institucional del municipio. Por defecto #1A1A1B
 *   data-posicion  "derecha" (por defecto) o "izquierda"
 *   data-titulo    encabezado del panel
 *   data-texto     línea de apoyo del panel
 *   data-atajos    accesos rápidos separados por " | ". Cada uno con el
 *                  formato  Etiqueta::mensaje que se manda
 *                  Dejar vacío para que el chat abra sin mensaje precargado.
 *   data-oculto-en rutas donde NO se muestra, separadas por coma
 */
(function () {
  'use strict';

  var s = document.currentScript;
  if (!s) return;

  var NUM = (s.getAttribute('data-numero') || '').replace(/[^0-9]/g, '');
  var NOMBRE = s.getAttribute('data-nombre') || 'el asistente';
  if (!NUM) {
    console.warn('[asistente-widget] Falta data-numero. El widget no se muestra.');
    return;
  }

  var COLOR = s.getAttribute('data-color') || '#1A1A1B';
  var IZQ = (s.getAttribute('data-posicion') || 'derecha') === 'izquierda';
  var TITULO = s.getAttribute('data-titulo') || ('Escribile a ' + NOMBRE);
  var TEXTO = s.getAttribute('data-texto') ||
    'Trámites, horarios, reclamos y qué hay para hacer. Contesta a cualquier hora.';

  var ATAJOS_RAW = s.getAttribute('data-atajos');
  if (ATAJOS_RAW === null) {
    ATAJOS_RAW = [
      'Hacer un trámite::Hola, quiero hacer un trámite y no sé qué papeles necesito',
      'Hacer un reclamo::Hola, quiero hacer un reclamo',
      'Horarios y direcciones::Hola, quería saber un horario de atención',
      'Qué hay para hacer::Hola, qué actividades hay esta semana'
    ].join(' | ');
  }

  var ocultoEn = (s.getAttribute('data-oculto-en') || '')
    .split(',').map(function (x) { return x.trim(); }).filter(Boolean);
  for (var i = 0; i < ocultoEn.length; i++) {
    if (location.pathname.indexOf(ocultoEn[i]) === 0) return;
  }

  var atajos = ATAJOS_RAW.split('|').map(function (a) {
    var p = a.split('::');
    return { label: (p[0] || '').trim(), msg: (p[1] || '').trim() };
  }).filter(function (a) { return a.label; });

  function link(msg) {
    var u = 'https://wa.me/' + NUM;
    if (msg) u += '?text=' + encodeURIComponent(msg);
    return u;
  }

  // ---------------------------------------------------------------- estilos
  var css = [
    '.mopw{position:fixed;bottom:20px;z-index:2147483000;font-family:inherit;',
    'display:flex;flex-direction:column;align-items:' + (IZQ ? 'flex-start' : 'flex-end') + ';gap:12px}',
    '.mopw[data-lado="der"]{right:20px}.mopw[data-lado="izq"]{left:20px}',

    '.mopw-btn{display:inline-flex;align-items:center;gap:10px;border-radius:12px;',
    'border:1px solid ' + COLOR + ';background:' + COLOR + ';color:#fff;',
    'padding:13px 18px;font-size:15px;font-weight:600;line-height:1;cursor:pointer;',
    'font-family:inherit;transition:opacity .15s ease}',
    '.mopw-btn:hover{opacity:.9}',
    '.mopw-btn:focus-visible{outline:3px solid #fff;outline-offset:-6px}',
    '.mopw-btn svg{width:20px;height:20px;flex:0 0 20px}',

    '.mopw-panel{width:320px;max-width:calc(100vw - 40px);background:#fff;color:#1A1A1B;',
    'border:1px solid #D8D8DC;border-radius:12px;overflow:hidden;display:none}',
    '.mopw-panel[data-abierto="1"]{display:block}',

    '.mopw-head{background:' + COLOR + ';color:#fff;padding:16px 18px}',
    '.mopw-head h2{margin:0 0 4px;font-size:16px;font-weight:700;line-height:1.3;font-family:inherit}',
    '.mopw-head p{margin:0;font-size:13px;line-height:1.45;opacity:.9;font-family:inherit}',
    '.mopw-close{position:absolute;top:12px;' + (IZQ ? 'right' : 'right') + ':12px;',
    'background:none;border:0;color:#fff;font-size:22px;line-height:1;cursor:pointer;padding:4px 6px;border-radius:12px}',
    '.mopw-close:focus-visible{outline:2px solid #fff}',
    '.mopw-wrap{position:relative}',

    '.mopw-list{list-style:none;margin:0;padding:8px}',
    '.mopw-list li{margin:0}',
    '.mopw-list a{display:block;padding:12px 12px;border-radius:12px;text-decoration:none;',
    'color:#1A1A1B;font-size:14px;line-height:1.35;border:1px solid transparent}',
    '.mopw-list a:hover{background:#F4F4F5}',
    '.mopw-list a:focus-visible{outline:none;border-color:' + COLOR + '}',

    '.mopw-foot{border-top:1px solid #E6E6EA;padding:12px 18px}',
    '.mopw-foot a{color:' + COLOR + ';font-size:13px;font-weight:600;text-decoration:none}',
    '.mopw-foot a:hover{text-decoration:underline}',
    '.mopw-foot span{display:block;color:#6B6B72;font-size:12px;margin-top:4px}',

    '@media (max-width:420px){.mopw{bottom:14px}.mopw[data-lado="der"]{right:14px}',
    '.mopw[data-lado="izq"]{left:14px}.mopw-btn{padding:12px 16px;font-size:14px}}',
    '@media (prefers-reduced-motion:reduce){.mopw-btn{transition:none}}'
  ].join('');

  var st = document.createElement('style');
  st.setAttribute('data-mopw', '');
  st.appendChild(document.createTextNode(css));
  document.head.appendChild(st);

  // ---------------------------------------------------------------- markup
  var root = document.createElement('div');
  root.className = 'mopw';
  root.setAttribute('data-lado', IZQ ? 'izq' : 'der');

  var panel = document.createElement('div');
  panel.className = 'mopw-panel';
  panel.setAttribute('data-abierto', '0');
  panel.setAttribute('role', 'dialog');
  panel.setAttribute('aria-label', TITULO);

  var itemsHtml = atajos.map(function (a) {
    return '<li><a href="' + link(a.msg) + '" target="_blank" rel="noopener">' +
      a.label.replace(/[<>&]/g, '') + '</a></li>';
  }).join('');

  panel.innerHTML =
    '<div class="mopw-wrap">' +
    '<div class="mopw-head"><h2></h2><p></p></div>' +
    '<button type="button" class="mopw-close" aria-label="Cerrar">&#215;</button>' +
    '</div>' +
    (itemsHtml ? '<ul class="mopw-list">' + itemsHtml + '</ul>' : '') +
    '<div class="mopw-foot">' +
    '<a href="' + link('') + '" target="_blank" rel="noopener">Abrir el chat</a>' +
    '<span>Es gratis y atiende a cualquier hora.</span>' +
    '</div>';

  panel.querySelector('.mopw-head h2').textContent = TITULO;
  panel.querySelector('.mopw-head p').textContent = TEXTO;

  var btn = document.createElement('button');
  btn.type = 'button';
  btn.className = 'mopw-btn';
  btn.setAttribute('aria-expanded', 'false');
  btn.innerHTML =
    '<svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">' +
    '<path fill="currentColor" d="M12 3C6.9 3 3 6.4 3 10.5c0 2.2 1.1 4.2 3 5.6V21l3.3-2a11 11 0 0 0 2.7.3c5.1 0 9-3.4 9-7.5S17.1 3 12 3Z"/>' +
    '</svg><span></span>';
  btn.querySelector('span').textContent = 'Escribile a ' + NOMBRE;

  root.appendChild(panel);
  root.appendChild(btn);

  function abrir(v) {
    panel.setAttribute('data-abierto', v ? '1' : '0');
    btn.setAttribute('aria-expanded', v ? 'true' : 'false');
    if (v) {
      var f = panel.querySelector('a');
      if (f) f.focus();
    } else {
      btn.focus();
    }
  }

  btn.addEventListener('click', function () {
    abrir(panel.getAttribute('data-abierto') !== '1');
  });
  panel.querySelector('.mopw-close').addEventListener('click', function () {
    abrir(false);
  });
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && panel.getAttribute('data-abierto') === '1') abrir(false);
  });
  document.addEventListener('click', function (e) {
    if (panel.getAttribute('data-abierto') === '1' && !root.contains(e.target)) abrir(false);
  });

  function montar() { document.body.appendChild(root); }
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', montar);
  } else {
    montar();
  }
})();
