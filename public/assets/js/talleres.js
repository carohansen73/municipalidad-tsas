/**
 * Actividades y Talleres — búsqueda, filtros y modal de filtros mobile.
 * Filtrado 100% en el cliente sobre las cards ya renderizadas por el servidor
 * (data-buscar, data-publico-slug, data-dias, data-categoria-id).
 */
document.addEventListener('DOMContentLoaded', function () {
    var ESCRITORIO = '(min-width: 900px)';

    var buscador = document.querySelector('[data-talleres-buscador]');
    var filtros = document.querySelectorAll('[data-filtro]');
    var cards = document.querySelectorAll('.taller-card');
    var franjas = document.querySelectorAll('.talleres-franja');
    var sinCoincidencias = document.getElementById('talleres-sin-coincidencias');

    if (!cards.length) {
        return;
    }

    function valorSeleccionado(nombreFiltro) {
        var input = document.querySelector('[data-filtro="' + nombreFiltro + '"]:checked');
        return input ? input.value : '';
    }

    function coincide(card, texto, publico, dia, categoria) {
        if (texto && card.dataset.buscar.indexOf(texto) === -1) {
            return false;
        }

        if (publico && card.dataset.publicoSlug !== publico) {
            return false;
        }

        if (categoria && card.dataset.categoriaId !== categoria) {
            return false;
        }

        if (dia) {
            var dias = (card.dataset.dias || '').split(',');
            if (dias.indexOf(dia) === -1) {
                return false;
            }
        }

        return true;
    }

    // Hora de inicio a usar para ordenar una card: si hay un día filtrado,
    // la hora de ESE día puntual; si no, la más temprana entre todos sus días.
    function horaDeOrden(card, dia) {
        var horarios;
        try {
            horarios = JSON.parse(card.dataset.horarios || '{}');
        } catch (e) {
            horarios = {};
        }

        if (dia && horarios[dia]) {
            return horarios[dia];
        }

        var valores = Object.keys(horarios).map(function (d) {
            return horarios[d];
        });

        return valores.length ? valores.sort()[0] : '99:99';
    }

    function reordenarCards(dia) {
        franjas.forEach(function (franja) {
            var lista = franja.querySelector('.talleres-lista');
            if (!lista) {
                return;
            }

            var visibles = Array.prototype.slice.call(lista.querySelectorAll('.taller-card:not([hidden])'));

            visibles.sort(function (a, b) {
                var horaA = horaDeOrden(a, dia);
                var horaB = horaDeOrden(b, dia);
                return horaA < horaB ? -1 : (horaA > horaB ? 1 : 0);
            });

            visibles.forEach(function (card) {
                lista.appendChild(card);
            });
        });
    }

    function aplicarFiltros() {
        var texto = buscador ? buscador.value.trim().toLowerCase() : '';
        var publico = valorSeleccionado('publico');
        var dia = valorSeleccionado('dia');
        var categoria = valorSeleccionado('categoria');
        var hayVisible = false;

        cards.forEach(function (card) {
            var visible = coincide(card, texto, publico, dia, categoria);
            card.hidden = !visible;

            if (visible) {
                hayVisible = true;
            }
        });

        reordenarCards(dia);

        franjas.forEach(function (franja) {
            var visiblesEnFranja = franja.querySelectorAll('.taller-card:not([hidden])');
            franja.hidden = visiblesEnFranja.length === 0;
        });

        if (sinCoincidencias) {
            sinCoincidencias.hidden = hayVisible;
        }
    }

    if (buscador) {
        buscador.addEventListener('input', aplicarFiltros);
    }

    // En desktop los filtros siguen aplicándose al toque (como siempre).
    // En mobile quedan "en espera" hasta que se confirme con el botón "Filtrar" del modal.
    filtros.forEach(function (filtro) {
        filtro.addEventListener('change', function () {
            if (window.matchMedia(ESCRITORIO).matches) {
                aplicarFiltros();
                renderChips();
            }
        });
    });

    aplicarFiltros();
    renderChips();

    // =====================================================
    // Chips de filtros aplicados (solo mobile, vía CSS)
    // =====================================================

    function etiquetaDe(input) {
        var span = input.closest('.filtro-opcion').querySelector('span');
        return span ? span.textContent.trim() : input.value;
    }

    function quitarFiltro(nombreFiltro) {
        var reset = document.querySelector('[data-filtro="' + nombreFiltro + '"][value=""]');
        if (reset) {
            reset.checked = true;
        }
        aplicarFiltros();
        renderChips();
    }

    function renderChips() {
        var chipsContenedor = document.getElementById('talleres-chips');
        if (!chipsContenedor) {
            return;
        }

        chipsContenedor.innerHTML = '';

        var activos = [];
        ['publico', 'dia', 'categoria'].forEach(function (nombreFiltro) {
            var input = document.querySelector('[data-filtro="' + nombreFiltro + '"]:checked');
            if (input && input.value !== '') {
                activos.push({ filtro: nombreFiltro, texto: etiquetaDe(input) });
            }
        });

        if (!activos.length) {
            chipsContenedor.hidden = true;
            return;
        }

        activos.forEach(function (activo) {
            var chip = document.createElement('span');
            chip.className = 'talleres-chip';

            var texto = document.createElement('span');
            texto.textContent = activo.texto;
            chip.appendChild(texto);

            var quitar = document.createElement('button');
            quitar.type = 'button';
            quitar.className = 'talleres-chip-quitar';
            quitar.setAttribute('aria-label', 'Quitar filtro ' + activo.texto);
            quitar.textContent = '×';
            quitar.addEventListener('click', function () {
                quitarFiltro(activo.filtro);
            });
            chip.appendChild(quitar);

            chipsContenedor.appendChild(chip);
        });

        if (activos.length > 1) {
            var limpiar = document.createElement('button');
            limpiar.type = 'button';
            limpiar.className = 'talleres-chips-limpiar';
            limpiar.textContent = 'Limpiar';
            limpiar.addEventListener('click', function () {
                ['publico', 'dia', 'categoria'].forEach(quitarFiltroSilencioso);
                aplicarFiltros();
                renderChips();
            });
            chipsContenedor.appendChild(limpiar);
        }

        chipsContenedor.hidden = false;
    }

    function quitarFiltroSilencioso(nombreFiltro) {
        var reset = document.querySelector('[data-filtro="' + nombreFiltro + '"][value=""]');
        if (reset) {
            reset.checked = true;
        }
    }

    // =====================================================
    // Modal de filtros (mobile) — abrir / cancelar / aplicar
    // =====================================================

    var trigger = document.getElementById('talleres-filtros-trigger');
    var modal = document.getElementById('talleres-filtros-modal');
    var cerrar = document.getElementById('talleres-filtros-cerrar');
    var aplicarBoton = document.getElementById('talleres-filtros-aplicar');

    if (trigger && modal && cerrar && aplicarBoton) {
        var seleccionPrevia = null;

        function snapshot() {
            var estado = {};
            filtros.forEach(function (input) {
                estado[input.name + ':' + input.value] = input.checked;
            });
            return estado;
        }

        function restaurar(estado) {
            filtros.forEach(function (input) {
                input.checked = !!estado[input.name + ':' + input.value];
            });
        }

        function abrirModal() {
            seleccionPrevia = snapshot();
            modal.hidden = false;
            document.body.classList.add('talleres-modal-abierto');
            cerrar.focus();
            document.addEventListener('keydown', onEscape);
        }

        function cerrarModal(revertir) {
            if (revertir && seleccionPrevia) {
                restaurar(seleccionPrevia);
            }
            modal.hidden = true;
            document.body.classList.remove('talleres-modal-abierto');
            document.removeEventListener('keydown', onEscape);
            trigger.focus();
        }

        function onEscape(event) {
            if (event.key === 'Escape') {
                cerrarModal(true);
            }
        }

        trigger.addEventListener('click', abrirModal);
        cerrar.addEventListener('click', function () {
            cerrarModal(true);
        });

        aplicarBoton.addEventListener('click', function () {
            aplicarFiltros();
            renderChips();
            cerrarModal(false);
        });
    }
});
