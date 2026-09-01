/*
  Motion editorial compartido — GSAP 3.15.0 + ScrollTrigger.
  Home conserva Hero/parallax/paneles; las internas reutilizan únicamente los
  encabezados editoriales y, cuando existe, el componente de cifras.
  Progressive enhancement: el HTML y CSS muestran todo el contenido por defecto.
  Si GSAP no carga, la página conserva su estado final y toda su funcionalidad.
*/
(function () {
  'use strict';

  var isHome = document.body.classList.contains('home-page');

  var gsap = window.gsap;
  var ScrollTrigger = window.ScrollTrigger;
  if (!gsap || !ScrollTrigger) return;

  gsap.registerPlugin(ScrollTrigger);

  var renderCount = function (element, value) {
    var prefix = element.getAttribute('data-count-prefix') || '';
    var suffix = element.getAttribute('data-count-suffix') || '';
    element.textContent = prefix + Math.round(value) + suffix;
  };

  var setFinalCounts = function () {
    document.querySelectorAll('[data-motion="stats"] [data-count-to]').forEach(function (element) {
      renderCount(element, parseFloat(element.getAttribute('data-count-to')) || 0);
    });
  };

  var revealHero = function (hero) {
    if (!hero || hero.dataset.motionPlayed === 'true') return;

    var title = hero.querySelector('.hero__title');
    var intro = hero.querySelector('.hero-shell__content > p');
    var actions = hero.querySelector('.hero__actions');
    var targets = [title, intro, actions].filter(Boolean);
    if (!targets.length) return;

    var timeline = gsap.timeline({
      defaults: { ease: 'power3.out' },
      onComplete: function () {
        hero.dataset.motionPlayed = 'true';
        gsap.set(targets, { clearProps: 'opacity,transform' });
      }
    });

    if (title) {
      timeline.fromTo(title,
        { opacity: 0.62, y: 18 },
        { opacity: 1, y: 0, duration: 0.9 }
      );
    }
    if (intro) {
      timeline.fromTo(intro,
        { opacity: 0.58, y: 14 },
        { opacity: 1, y: 0, duration: 0.72 },
        '-=0.55'
      );
    }
    if (actions) {
      timeline.fromTo(actions,
        { opacity: 0.5, y: 10 },
        { opacity: 1, y: 0, duration: 0.62 },
        '-=0.42'
      );
    }
  };

  var addHeroParallax = function (hero) {
    if (!hero) return;
    var image = hero.querySelector('.hero-shell__img');
    if (!image) return;

    gsap.fromTo(image,
      { yPercent: -1.4, scale: 1.045, transformOrigin: '50% 50%' },
      {
        yPercent: 1.4,
        scale: 1.06,
        ease: 'none',
        scrollTrigger: {
          trigger: hero,
          start: 'top top',
          end: 'bottom top',
          scrub: 0.8,
          invalidateOnRefresh: true
        }
      }
    );
  };

  var revealSectionTitle = function (group, isMobile) {
    if (!group || group.dataset.motionPlayed === 'true') return;

    var eyebrow = group.querySelector('.eyebrow');
    var title = group.querySelector('h1, h2');
    if (!title) return;

    var regularParts = Array.prototype.slice.call(title.querySelectorAll('.section-title__regular'));
    var emphasisParts = Array.prototype.slice.call(title.querySelectorAll('.section-title__emphasis'));
    var hasEditorialParts = regularParts.length > 0;
    var animated = [eyebrow].concat(hasEditorialParts ? regularParts.concat(emphasisParts) : [title]).filter(Boolean);
    var timeline = gsap.timeline({
      paused: true,
      defaults: { ease: 'power3.out' },
      onComplete: function () {
        group.dataset.motionPlayed = 'true';
        gsap.set(animated, { clearProps: 'opacity,transform' });
      }
    });

    if (eyebrow) {
      timeline.fromTo(eyebrow,
        { opacity: 0.4, y: 7 },
        { opacity: 1, y: 0, duration: 0.42 }
      );
    }

    if (hasEditorialParts) {
      timeline.fromTo(regularParts,
        { opacity: 0.5, y: isMobile ? 8 : 11 },
        { opacity: 1, y: 0, duration: isMobile ? 0.52 : 0.62, stagger: 0.025 },
        eyebrow ? '-=0.18' : 0
      );
      if (emphasisParts.length) {
        timeline.fromTo(emphasisParts,
          { opacity: 0.5, y: isMobile ? 8 : 11 },
          { opacity: 1, y: 0, duration: isMobile ? 0.5 : 0.6, stagger: 0.025 },
          '-=0.42'
        );
      }
    } else {
      timeline.fromTo(title,
        { opacity: 0.5, y: isMobile ? 10 : 14 },
        { opacity: 1, y: 0, duration: isMobile ? 0.62 : 0.76 },
        eyebrow ? '-=0.2' : 0
      );
    }

    ScrollTrigger.create({
      trigger: group,
      start: isMobile ? 'top 88%' : 'top 82%',
      once: true,
      animation: timeline
    });
  };

  /* Capítulos editoriales con fotografía: el heading conserva su propia secuencia,
     mientras body, CTA e imagen entran como una sola composición. No se oculta
     contenido antes de que GSAP confirme que puede ejecutar la mejora. */
  var revealChapter = function (chapter, isMobile) {
    if (!chapter || chapter.dataset.motionPlayed === 'true') return;

    var heading = chapter.querySelector('[data-motion="section-title"]');
    var mediaShell = chapter.querySelector('[data-motion-media]');
    var copy = heading ? Array.prototype.slice.call(heading.children).filter(function (element) {
      return !element.matches('.eyebrow, h1, h2');
    }) : [];
    var animated = copy.concat(mediaShell ? [mediaShell] : []);
    if (!animated.length) return;

    var timeline = gsap.timeline({
      paused: true,
      defaults: { ease: 'power3.out' },
      onComplete: function () {
        chapter.dataset.motionPlayed = 'true';
        if (copy.length) gsap.set(copy, { clearProps: 'opacity,transform' });
        if (mediaShell) gsap.set(mediaShell, { clearProps: 'opacity,clipPath' });
      }
    });

    if (mediaShell) {
      timeline.fromTo(mediaShell,
        { opacity: 0.72, clipPath: isMobile ? 'inset(2% 0 2% 0)' : 'inset(3% 0 3% 0)' },
        { opacity: 1, clipPath: 'inset(0% 0 0% 0)', duration: isMobile ? 0.72 : 0.92 },
        0
      );
    }

    if (copy.length) {
      timeline.fromTo(copy,
        { opacity: 0.58, y: isMobile ? 9 : 13 },
        { opacity: 1, y: 0, duration: isMobile ? 0.56 : 0.68, stagger: isMobile ? 0.045 : 0.065 },
        mediaShell ? 0.18 : 0
      );
    }

    ScrollTrigger.create({
      trigger: chapter,
      start: isMobile ? 'top 90%' : 'top 84%',
      once: true,
      animation: timeline
    });
  };

  /* Deriva ambiental reservada a fotografías protagonistas. Se limita a desktop,
     usa transformaciones compositor-friendly y nunca cambia dimensiones del layout. */
  var addMediaDrift = function (chapter) {
    if (!chapter) return;
    var mediaShell = chapter.querySelector('[data-motion-media]');
    if (!mediaShell) return;
    var media = mediaShell.matches('img') ? mediaShell : mediaShell.querySelector('img');
    if (!media) return;

    gsap.fromTo(media,
      { yPercent: -1.2, scale: 1.025, transformOrigin: '50% 50%' },
      {
        yPercent: 1.2,
        scale: 1.045,
        ease: 'none',
        scrollTrigger: {
          trigger: chapter,
          start: 'top bottom',
          end: 'bottom top',
          scrub: 1.05,
          invalidateOnRefresh: true
        }
      }
    );
  };

  var revealServicePanels = function (container, isMobile) {
    if (!container || container.dataset.motionPlayed === 'true') return;

    var panels = Array.prototype.slice.call(container.querySelectorAll('.surface-visual'));
    var media = Array.prototype.slice.call(container.querySelectorAll('.surface-visual .media-placeholder'));
    if (!panels.length) return;

    gsap.set(panels, { opacity: 0.74, y: isMobile ? 16 : 24 });
    gsap.set(media, { scale: 1.025 });

    var timeline = gsap.timeline({
      paused: true,
      onComplete: function () {
        container.dataset.motionPlayed = 'true';
        gsap.set(panels, { clearProps: 'opacity,transform' });
        gsap.set(media, { clearProps: 'transform' });
      }
    });

    timeline.to(panels, {
      opacity: 1,
      y: 0,
      duration: isMobile ? 0.68 : 0.86,
      stagger: isMobile ? 0.06 : 0.09,
      ease: 'power3.out'
    }, 0);

    timeline.to(media, {
      scale: 1,
      duration: isMobile ? 0.8 : 1.05,
      stagger: isMobile ? 0.06 : 0.09,
      ease: 'power2.out'
    }, 0);

    ScrollTrigger.create({
      trigger: container,
      start: isMobile ? 'top 88%' : 'top 78%',
      once: true,
      animation: timeline
    });
  };

  var revealStats = function (section, isMobile) {
    if (!section || section.dataset.motionPlayed === 'true') return;

    var cards = Array.prototype.slice.call(section.querySelectorAll('.stat-card'));
    if (!cards.length) return;

    gsap.set(cards, { opacity: 0.55, y: isMobile ? 10 : 16 });

    var timeline = gsap.timeline({
      paused: true,
      onComplete: function () {
        section.dataset.motionPlayed = 'true';
        setFinalCounts();
        gsap.set(cards, { clearProps: 'opacity,transform' });
      }
    });

    cards.forEach(function (card, index) {
      var number = card.querySelector('[data-count-to]');
      var target = number ? parseFloat(number.getAttribute('data-count-to')) || 0 : 0;
      var proxy = { value: 0 };
      var position = index * (isMobile ? 0.1 : 0.13);

      if (number) renderCount(number, 0);

      timeline.to(card, {
        opacity: 1,
        y: 0,
        duration: 0.68,
        ease: 'power3.out'
      }, position);

      if (number) {
        timeline.to(proxy, {
          value: target,
          duration: 1.35,
          ease: 'power3.out',
          onUpdate: function () { renderCount(number, proxy.value); }
        }, position);
      }
    });

    ScrollTrigger.create({
      trigger: section,
      start: isMobile ? 'top 84%' : 'top 74%',
      once: true,
      animation: timeline
    });
  };

  var finalizeReducedMotion = function () {
    setFinalCounts();
    document.querySelectorAll('[data-motion]').forEach(function (element) {
      element.dataset.motionPlayed = 'true';
    });
  };

  var media = gsap.matchMedia();
  media.add({
    isDesktop: '(min-width: 1024px)',
    isMobile: '(max-width: 1023px)',
    reduceMotion: '(prefers-reduced-motion: reduce)'
  }, function (context) {
    var conditions = context.conditions;
    var hero = isHome ? document.querySelector('[data-motion="hero"]') : null;

    if (conditions.reduceMotion) {
      finalizeReducedMotion();
      return;
    }

    if (isHome) revealHero(hero);
    document.querySelectorAll('[data-motion="section-title"]').forEach(function (group) {
      revealSectionTitle(group, conditions.isMobile);
    });
    document.querySelectorAll('[data-motion="chapter"]').forEach(function (chapter) {
      revealChapter(chapter, conditions.isMobile);
      if (conditions.isDesktop) addMediaDrift(chapter);
    });
    if (isHome) revealServicePanels(document.querySelector('[data-motion="service-panels"]'), conditions.isMobile);
    document.querySelectorAll('[data-motion="stats"]').forEach(function (section) {
      revealStats(section, conditions.isMobile);
    });

    if (isHome && conditions.isDesktop) addHeroParallax(hero);
  });

  window.addEventListener('load', function () {
    ScrollTrigger.refresh();
  }, { once: true });
})();
