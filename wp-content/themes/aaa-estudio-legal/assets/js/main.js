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
