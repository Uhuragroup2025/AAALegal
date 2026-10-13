/*
  JS mínimo, progresivo — puerto inicial desde prototype/js/main.js (D99).
  Ninguna funcionalidad depende de que este archivo cargue: el contenido ya es
  100% visible/operable sin JS (mismo principio que el prototipo). El menú
  responsive ya no se reimplementa a mano — el bloque core/navigation (usado en
  parts/header.html) trae su propio comportamiento mobile/desktop nativo
  (ver prototype/README.md § 7, riesgo "<details> como patrón de navegación":
  ya se adoptó la opción de "comportamiento nativo del bloque Navigation").

  Pendiente de portar (ver WORDPRESS-SETUP.md): parallax sutil del hero, rail
  arrastrable de chips, contador animado de "En cifras", stepper de metodología,
  tarjetas flip de equipo. Cada uno debe respetar `prefers-reduced-motion` igual
  que aquí, antes de portarse.
*/
(function () {
  'use strict';

  document.documentElement.classList.add('js');

  var prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  // --- Revelado en scroll (.aaa-reveal) ---
  var revealEls = document.querySelectorAll('.aaa-reveal');
  if (revealEls.length && 'IntersectionObserver' in window && !prefersReducedMotion) {
    revealEls.forEach(function (el) { el.setAttribute('data-reveal-ready', ''); });

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });

    revealEls.forEach(function (el) { observer.observe(el); });
  }

  // --- Metodología: la línea recorre los pasos en orden (D138) ---
  // Cada paso se "enciende" (.is-lit) cuando entra en pantalla, pero nunca
  // antes que el anterior: si ya lo está, primero se dibuja el tramo que llega
  // a él (.is-linked, 750ms en CSS) y después se enciende. Así la línea va de
  // un paso al siguiente tanto si las 3 tarjetas aparecen juntas como si
  // entran una a una al hacer scroll. Sin JS o con movimiento reducido no se
  // marca `data-timeline-ready` y el CSS muestra el estado final.
  if (!prefersReducedMotion && 'IntersectionObserver' in window) {
    document.querySelectorAll('.stepper--timeline .stepper__steps').forEach(function (list) {
      var steps = Array.prototype.slice.call(list.querySelectorAll('.stepper__step'));
      if (!steps.length) return;
      var SEGMENT_MS = 750;
      var seen = steps.map(function () { return false; });
      var lit = -1;
      var busy = false;

      var advance = function () {
        var next = lit + 1;
        if (busy || next >= steps.length || !seen[next]) return;
        busy = true;
        if (next > 0) steps[next].classList.add('is-linked');
        window.setTimeout(function () {
          steps[next].classList.add('is-lit');
          lit = next;
          busy = false;
          advance();
        }, next > 0 ? SEGMENT_MS : 300);
      };

      list.setAttribute('data-timeline-ready', '');
      var stepObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          // También cuenta un paso que ya quedó por encima de la pantalla
          // (recarga a mitad de página): si no, la cadena se quedaría a medias.
          if (entry.isIntersecting || entry.boundingClientRect.top < 0) {
            seen[steps.indexOf(entry.target)] = true;
            stepObserver.unobserve(entry.target);
          }
        });
        advance();
      }, { threshold: 0.55 });
      steps.forEach(function (step) { stepObserver.observe(step); });
    });
  }

  // --- Sectores (Home): carrusel continuo de logos por tarjeta (D119) ---
  // Mete los logos en una pista y duplica el set las veces necesarias para que
  // el loop nunca deje hueco (copias con aria-hidden y alt vacío). Sin JS o con
  // movimiento reducido, CSS muestra la fila estática.
  if (!prefersReducedMotion) {
    document.querySelectorAll('.home-page .sector-card__logos').forEach(function (logos) {
      var items = Array.prototype.filter.call(logos.children, function (el) {
        // D170: también los bloques Imagen nativos (logos agregados desde el editor).
        return el.classList.contains('sector-card__logo') || el.classList.contains('wp-block-image');
      });
      if (items.length < 2) return;
      var visible = parseFloat(window.getComputedStyle(logos).getPropertyValue('--sector-visible')) || 2.25;
      var sets = Math.ceil(1 + visible / items.length);
      var track = document.createElement('div');
      track.className = 'sector-card__track';
      items.forEach(function (item) { track.appendChild(item); });
      for (var s = 1; s < sets; s++) {
        items.forEach(function (item) {
          var copy = item.cloneNode(true);
          copy.setAttribute('aria-hidden', 'true');
          Array.prototype.forEach.call(copy.querySelectorAll('img'), function (img) { img.alt = ''; });
          track.appendChild(copy);
        });
      }
      logos.appendChild(track);
      logos.style.setProperty('--logo-count', items.length);
      logos.style.setProperty('--sets', sets);
      logos.classList.add('is-marquee');
    });
  }

  // --- Equipo: tarjetas flip accesibles ("Personas, no procesos") ---
  // El control explícito evita que un swipe táctil active el giro por accidente.
  // Sin JS, CSS presenta ambas caras en flujo para que el contenido siga disponible.
  document.querySelectorAll('.team-flip-card').forEach(function (card) {
    // D170: en las tarjetas hechas con bloques nativos (editables desde la
    // página) los botones no van en el contenido: se crean aquí, con el
    // nombre del equipo en su etiqueta accesible.
    if (!card.querySelector('[data-team-flip-toggle]')) {
      var teamName = ((card.querySelector('.team-flip-card__name') || {}).textContent || '').trim();
      var teamRef = teamName ? ' ' + (/^equipo /i.test(teamName) ? 'del ' + teamName.charAt(0).toLowerCase() + teamName.slice(1) : 'de ' + teamName) : '';
      var makeToggle = function (label, aria) {
        var button = document.createElement('button');
        button.type = 'button';
        button.className = 'team-flip-card__toggle';
        button.setAttribute('data-team-flip-toggle', '');
        button.setAttribute('aria-expanded', 'false');
        button.setAttribute('aria-label', aria);
        button.textContent = label;
        return button;
      };
      var frontSlot = card.querySelector('.team-flip-card__caption') || card.querySelector('.team-flip-card__front');
      var backSlot = card.querySelector('.team-flip-card__back');
      if (frontSlot) frontSlot.appendChild(makeToggle('Ver funciones', 'Ver funciones' + teamRef));
      if (backSlot) backSlot.appendChild(makeToggle('Volver', 'Volver' + (teamRef ? teamRef.replace(/^ del /, ' al ') : '')));
    }
    var toggles = Array.prototype.slice.call(card.querySelectorAll('[data-team-flip-toggle]'));
    var setFlipped = function (flipped, focusIndex) {
      card.classList.toggle('is-flipped', flipped);
      toggles.forEach(function (button) {
        button.setAttribute('aria-expanded', String(flipped));
      });
      if (typeof focusIndex === 'number' && toggles[focusIndex]) {
        window.setTimeout(function () {
          toggles[focusIndex].focus();
        }, prefersReducedMotion ? 0 : 360);
      }
    };
    toggles.forEach(function (button, index) {
      button.addEventListener('click', function () {
        var showBack = index === 0;
        setFlipped(showBack, showBack ? 1 : 0);
      });
    });
  });

  // --- Aviso de cookies (D20) ---
  var cookieBanner = document.querySelector('.aaa-cookie-banner');
  if (cookieBanner) {
    var STORAGE_KEY = 'aaa-cookie-ack';
    var acknowledge = function () {
      try { window.localStorage.setItem(STORAGE_KEY, '1'); } catch (e) { /* sin storage: se repite el aviso, no rompe la página */ }
      cookieBanner.hidden = true;
    };
    var alreadyAcknowledged = false;
    try { alreadyAcknowledged = window.localStorage.getItem(STORAGE_KEY) === '1'; } catch (e) { /* noop */ }

    if (alreadyAcknowledged) {
      cookieBanner.hidden = true;
    } else {
      cookieBanner.hidden = false;
      var acceptBtn = cookieBanner.querySelector('[data-cookie-accept]');
      if (acceptBtn) acceptBtn.addEventListener('click', acknowledge);
    }
  }
})();
