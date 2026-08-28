/*
  JS mínimo, progresivo (Decisión D7 / D18). Nada aquí es requerido para que el
  sitio funcione: sin este archivo, la navegación (details/summary nativo), los
  enlaces y el CTA siguen siendo completamente operables.
*/
(function () {
  'use strict';

  document.documentElement.classList.add('js');

  var prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  // --- Navegación: colapsar en mobile por defecto, sincronizar aria-expanded ---
  var navDetails = document.querySelector('.nav');
  if (navDetails) {
    var summary = navDetails.querySelector('summary');
    // Debe coincidir con el breakpoint del menú en components.css. D55: header
    // full-width (`.site-header--global`) unificado en las 7 páginas — todas colapsan
    // en el mismo punto (1180px, por su header de tres zonas).
    var mobileQuery = window.matchMedia('(max-width: 1180px)');

    // Re-sincroniza al cruzar el breakpoint (resize, rotación, zoom) — no solo al cargar,
    // para que el menú nunca quede inaccesible si el viewport cambia de mobile a desktop o viceversa.
    var syncToBreakpoint = function (e) {
      if (e.matches) {
        navDetails.removeAttribute('open');
      } else {
        navDetails.setAttribute('open', '');
      }
    };
    syncToBreakpoint(mobileQuery);
    if (mobileQuery.addEventListener) {
      mobileQuery.addEventListener('change', syncToBreakpoint);
    } else if (mobileQuery.addListener) {
      mobileQuery.addListener(syncToBreakpoint); // Safari < 14
    }

    var syncAria = function () {
      if (summary) summary.setAttribute('aria-expanded', String(navDetails.open));
    };
    syncAria();
    navDetails.addEventListener('toggle', syncAria);

    // Cerrar al elegir un enlace en mobile (evita que el menú quede abierto tras navegar)
    navDetails.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        if (mobileQuery.matches) navDetails.removeAttribute('open');
      });
    });
  }

  // --- Rail horizontal: mejora de arrastre con puntero (el scroll nativo ya funciona sin esto) ---
  document.querySelectorAll('.rail').forEach(function (rail) {
    rail.setAttribute('tabindex', '0');
    var isDown = false, startX = 0, startScroll = 0;
    rail.addEventListener('pointerdown', function (e) {
      isDown = true;
      rail.classList.add('is-dragging');
      startX = e.clientX;
      startScroll = rail.scrollLeft;
      rail.setPointerCapture(e.pointerId);
    });
    rail.addEventListener('pointermove', function (e) {
      if (!isDown) return;
      rail.scrollLeft = startScroll - (e.clientX - startX);
    });
    var endDrag = function () { isDown = false; rail.classList.remove('is-dragging'); };
    rail.addEventListener('pointerup', endDrag);
    rail.addEventListener('pointerleave', endDrag);
  });

  // --- Revelado en scroll: solo si hay soporte y el usuario no pidió reducir movimiento ---
  var revealEls = document.querySelectorAll('.reveal');
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
  // Sin IntersectionObserver o con prefers-reduced-motion: los elementos ya son
  // visibles por defecto (ver components.css .reveal) — no se requiere fallback adicional.

  // --- Metodología: stepper con scroll (Servicios § "Cómo trabajamos") ---
  // Especificación del Owner (docx "Sección Metología - AAA Legal"): el paso activo
  // es el que cruza el centro del viewport, en ambas direcciones de scroll.
  // `rootMargin: '-50% 0px -50% 0px'` reduce el root efectivo del observer a una
  // línea horizontal en el centro de la pantalla (threshold:0 le basta para disparar
  // en cuanto un paso la cruza) — más robusto que un threshold numérico como 0.5,
  // que con pasos de alturas distintas podría dejar dos activos a la vez o ninguno.
  var stepperSteps = document.querySelectorAll('.stepper__step');
  if (stepperSteps.length && 'IntersectionObserver' in window && !prefersReducedMotion) {
    stepperSteps.forEach(function (el) { el.setAttribute('data-stepper-ready', ''); });
    stepperSteps[0].classList.add('is-active');

    var stepperObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          stepperSteps.forEach(function (step) { step.classList.remove('is-active'); });
          entry.target.classList.add('is-active');
        }
      });
    }, { rootMargin: '-50% 0px -50% 0px', threshold: 0 });

    stepperSteps.forEach(function (step) { stepperObserver.observe(step); });
  }
  // Sin IntersectionObserver o con prefers-reduced-motion: los pasos ya son visibles
  // por defecto (ver components.css `.stepper__step[data-stepper-ready]`) — no se
  // requiere fallback adicional.

  // --- Equipo: tarjetas flip (Decisión D92, Trabaja con nosotros) ---
  // El hover real (mouse) ya dispara el flip solo con CSS ((hover:hover) and
  // (pointer:fine), ver components.css). Este toggle por click/tecla es lo que
  // hace el flip alcanzable también en touch (que no tiene hover real) y por
  // teclado — nunca depende únicamente del hover para mostrar la descripción.
  document.querySelectorAll('.team-flip-card').forEach(function (card) {
    var toggle = function () {
      var flipped = card.classList.toggle('is-flipped');
      card.setAttribute('aria-pressed', String(flipped));
    };
    card.addEventListener('click', toggle);
    card.addEventListener('keydown', function (e) {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        toggle();
      }
    });
  });

  // --- Home · ¿Por qué AAA?: carrusel móvil paginado de dos cards ---
  // El scroll táctil y scroll-snap funcionan sin JS. Esta capa añade únicamente
  // indicador, flechas y sincronización accesible con las tres páginas.
  var whyCarousel = document.querySelector('[data-why-carousel]');
  var whyControls = document.querySelector('[data-why-carousel-controls]');
  if (whyCarousel && whyControls) {
    var whyCards = Array.prototype.slice.call(whyCarousel.children);
    var whyPageStarts = whyCards.filter(function (_card, index) { return index % 2 === 0; });
    var whyCurrent = whyControls.querySelector('[data-why-carousel-current]');
    var whyTotal = whyControls.querySelector('[data-why-carousel-total]');
    var whyPrev = whyControls.querySelector('[data-why-carousel-prev]');
    var whyNext = whyControls.querySelector('[data-why-carousel-next]');
    var whyMobileQuery = window.matchMedia('(max-width: 640px)');
    var whyPageIndex = 0;
    var whyFrame = null;

    if (whyTotal) whyTotal.textContent = String(whyPageStarts.length);

    var updateWhyCarousel = function () {
      if (!whyMobileQuery.matches || !whyPageStarts.length) return;

      var nextWhyPageIndex = whyPageStarts.reduce(function (nearest, card, index) {
        var currentDistance = Math.abs(whyPageStarts[nearest].offsetLeft - whyCarousel.scrollLeft);
        var nextDistance = Math.abs(card.offsetLeft - whyCarousel.scrollLeft);
        return nextDistance < currentDistance ? index : nearest;
      }, 0);

      whyPageIndex = nextWhyPageIndex;
      if (whyCurrent && whyCurrent.textContent !== String(whyPageIndex + 1)) {
        whyCurrent.textContent = String(whyPageIndex + 1);
      }
      if (whyPrev) whyPrev.disabled = whyPageIndex === 0;
      if (whyNext) whyNext.disabled = whyPageIndex === whyPageStarts.length - 1;
    };

    var goToWhyPage = function (index) {
      if (!whyMobileQuery.matches || !whyPageStarts.length) return;
      var targetIndex = Math.max(0, Math.min(index, whyPageStarts.length - 1));
      whyCarousel.scrollTo({
        left: whyPageStarts[targetIndex].offsetLeft,
        behavior: prefersReducedMotion ? 'auto' : 'smooth'
      });
    };

    whyCarousel.addEventListener('scroll', function () {
      if (whyFrame) window.cancelAnimationFrame(whyFrame);
      whyFrame = window.requestAnimationFrame(updateWhyCarousel);
    }, { passive: true });

    if (whyPrev) whyPrev.addEventListener('click', function () { goToWhyPage(whyPageIndex - 1); });
    if (whyNext) whyNext.addEventListener('click', function () { goToWhyPage(whyPageIndex + 1); });

    var resetWhyCarousel = function () {
      if (whyMobileQuery.matches) whyCarousel.scrollLeft = 0;
      whyPageIndex = 0;
      updateWhyCarousel();
    };

    if (whyMobileQuery.addEventListener) {
      whyMobileQuery.addEventListener('change', resetWhyCarousel);
    } else if (whyMobileQuery.addListener) {
      whyMobileQuery.addListener(resetWhyCarousel);
    }
    window.addEventListener('resize', updateWhyCarousel);
    updateWhyCarousel();
  }

  // --- Aviso de cookies (GA4 + GTM + Clarity, Decisión D20) ---
  var cookieBanner = document.querySelector('.cookie-banner');
  if (cookieBanner) {
    var STORAGE_KEY = 'aaa-cookie-ack';
    var acknowledge = function () {
      try { window.localStorage.setItem(STORAGE_KEY, '1'); } catch (e) { /* almacenamiento no disponible: se repetirá el aviso, sin romper la página */ }
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
