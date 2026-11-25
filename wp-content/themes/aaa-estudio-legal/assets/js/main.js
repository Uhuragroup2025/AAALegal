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

  // --- Preloader de entrada (D175) ---
  // Lo muestra el CSS cuando el <head> marcó `aaa-preloading` (primera página
  // de la sesión). Aquí solo se retira del DOM al terminar; lo que ya está a la
  // vista espera `introDelay` para no animarse escondido detrás.
  var introDelay = document.documentElement.classList.contains('aaa-preloading') ? 1950 : 0;
  var preloader = document.querySelector('.aaa-preloader');
  if (preloader) {
    var removePreloader = function () {
      if (preloader.parentNode) preloader.parentNode.removeChild(preloader);
    };
    preloader.addEventListener('animationend', function (event) {
      if (event.animationName === 'aaa-preloader-out') removePreloader();
    });
    window.setTimeout(removePreloader, introDelay ? 3200 : 0);
  }

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

  // --- Isotipo en títulos y eyebrows (D174) ---
  // Al entrar en pantalla, el isotipo se revela como el del encabezado al
  // cargar (keyframes aaa-header-isotype-reveal). Sin IntersectionObserver
  // queda visible de una vez; con movimiento reducido el CSS no lo oculta.
  var isotypes = document.querySelectorAll('.aaa-logo-inline, .origin-block__copy');
  if (isotypes.length) {
    if ('IntersectionObserver' in window && !prefersReducedMotion) {
      var isotypeObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (!entry.isIntersecting) return;
          entry.target.classList.add('is-inview');
          isotypeObserver.unobserve(entry.target);
        });
      }, { threshold: 0.4, rootMargin: '0px 0px -8% 0px' });
      window.setTimeout(function () {
        isotypes.forEach(function (element) { isotypeObserver.observe(element); });
      }, introDelay);
    } else {
      isotypes.forEach(function (element) { element.classList.add('is-inview'); });
    }
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
      // D192: el reverso ahora muestra la foto del equipo.
      if (frontSlot) frontSlot.appendChild(makeToggle('Ver equipo', 'Ver la foto' + teamRef));
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

  // --- Aviso de cookies con consentimiento (D20, D183) ---
  // "Aceptar" activa la analítica (Consent Mode v2, ver aaa_consent_and_gtm en
  // functions.php); "Rechazar" la deja apagada. La elección se recuerda y se
  // puede cambiar desde "Preferencias de cookies" en el pie de página.
  var cookieBanner = document.querySelector('.aaa-cookie-banner');
  if (cookieBanner) {
    var STORAGE_KEY = 'aaa-cookie-ack';
    var acceptBtn = cookieBanner.querySelector('[data-cookie-accept]');
    var rejectBtn = cookieBanner.querySelector('[data-cookie-reject]');
    var choose = function (value) {
      try { window.localStorage.setItem(STORAGE_KEY, value); } catch (e) { /* sin storage: se repite el aviso, no rompe la página */ }
      if (typeof window.gtag === 'function') {
        window.gtag('consent', 'update', { analytics_storage: value });
      }
      // Avisa a GTM en la misma página (Clarity se carga al aceptar, sin
      // esperar a la siguiente visita).
      window.dataLayer = window.dataLayer || [];
      window.dataLayer.push({ event: 'aaa_consent_update', analytics_storage: value });
      cookieBanner.hidden = true;
    };
    var stored = null;
    try { stored = window.localStorage.getItem(STORAGE_KEY); } catch (e) { /* noop */ }
    // '1' es el valor anterior a D183 (solo había botón "Aceptar").
    cookieBanner.hidden = stored === 'granted' || stored === 'denied' || stored === '1';

    if (acceptBtn) acceptBtn.addEventListener('click', function () { choose('granted'); });
    if (rejectBtn) rejectBtn.addEventListener('click', function () { choose('denied'); });
    document.querySelectorAll('.aaa-cookie-preferences').forEach(function (link) {
      link.addEventListener('click', function (event) {
        event.preventDefault();
        cookieBanner.hidden = false;
        if (acceptBtn) acceptBtn.focus();
      });
    });
  }

  // --- Fotos de los equipos en caja de luz (D189) ---
  // Al tocar una foto se abre completa a pantalla entera, en un <dialog>
  // nativo: Esc, el botón o tocar fuera la cierran y el foco vuelve a la foto.
  // Se carga la versión más grande del srcset. Sin JS las fotos quedan como
  // están; sin soporte de <dialog> no se activan.
  var teamPhotos = document.querySelectorAll('.team-groups img.team-profile-pair__photo, .team-groups img.team-flip-card__photo');
  if (teamPhotos.length && typeof HTMLDialogElement === 'function') {
    var lightbox = document.createElement('dialog');
    lightbox.className = 'aaa-lightbox';
    lightbox.setAttribute('aria-label', 'Foto ampliada');
    lightbox.innerHTML = '<button type="button" class="aaa-lightbox__close" aria-label="Cerrar foto">' +
      '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 6l12 12M18 6L6 18"/></svg></button>' +
      '<figure class="aaa-lightbox__figure"><img class="aaa-lightbox__img" alt="" /><figcaption class="aaa-lightbox__caption"></figcaption></figure>';
    document.body.appendChild(lightbox);
    var lightboxImg = lightbox.querySelector('.aaa-lightbox__img');
    var lightboxCaption = lightbox.querySelector('.aaa-lightbox__caption');
    var lightboxOpener = null;

    var largestSrc = function (img) {
      var best = img.currentSrc || img.src;
      var bestWidth = 0;
      (img.getAttribute('srcset') || '').split(',').forEach(function (candidate) {
        var parts = candidate.trim().split(/\s+/);
        var width = parseInt(parts[1], 10) || 0;
        if (parts[0] && width > bestWidth) {
          best = parts[0];
          bestWidth = width;
        }
      });
      return best;
    };
    var openLightbox = function (img) {
      lightboxOpener = img;
      lightboxImg.src = largestSrc(img);
      lightboxImg.alt = img.alt;
      lightboxCaption.textContent = img.alt;
      lightbox.showModal();
      document.documentElement.classList.add('aaa-lightbox-open');
    };

    teamPhotos.forEach(function (img) {
      img.setAttribute('tabindex', '0');
      img.setAttribute('role', 'button');
      img.setAttribute('aria-label', 'Ampliar foto: ' + img.alt);
      img.addEventListener('click', function () { openLightbox(img); });
      img.addEventListener('keydown', function (event) {
        if (event.key === 'Enter' || event.key === ' ') {
          event.preventDefault();
          openLightbox(img);
        }
      });
    });
    lightbox.querySelector('.aaa-lightbox__close').addEventListener('click', function () { lightbox.close(); });
    // Tocar el fondo (el propio <dialog>, fuera de la foto) también cierra.
    lightbox.addEventListener('click', function (event) {
      if (event.target === lightbox) lightbox.close();
    });
    lightbox.addEventListener('close', function () {
      document.documentElement.classList.remove('aaa-lightbox-open');
      lightboxImg.removeAttribute('src');
      if (lightboxOpener) lightboxOpener.focus();
    });
  }

  // --- Eventos de conversión para GTM/GA4 (backlog T14) ---
  // Solo se agregan a dataLayer; GTM decide qué enviar y respeta el
  // consentimiento. Sin contenedor GTM configurado no salen del navegador.
  window.dataLayer = window.dataLayer || [];
  // IDs de Contact Form 7: 115 = Contacto B2B, 106 = Postulación (se
  // conservan al migrar con Duplicator).
  var FORM_EVENTS = { 115: 'aaa_contact_submit', 106: 'aaa_application_submit' };
  document.addEventListener('wpcf7mailsent', function (event) {
    var formId = event.detail ? Number(event.detail.contactFormId) : 0;
    window.dataLayer.push({ event: FORM_EVENTS[formId] || 'aaa_form_submit', form_id: formId });
  });
  document.addEventListener('click', function (event) {
    var link = event.target.closest ? event.target.closest('a[href]') : null;
    if (!link) return;
    var href = link.getAttribute('href') || '';
    if (/wa\.me|api\.whatsapp\.com/.test(href)) window.dataLayer.push({ event: 'aaa_whatsapp_click' });
    else if (/adyapp\.agudeloabogados\.com/.test(href)) window.dataLayer.push({ event: 'aaa_platform_click' });
    else if (/^tel:/.test(href)) window.dataLayer.push({ event: 'aaa_phone_click' });
    else if (/^mailto:/.test(href)) window.dataLayer.push({ event: 'aaa_email_click' });
  });
})();
