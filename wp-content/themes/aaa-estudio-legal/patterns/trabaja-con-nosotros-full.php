<?php
/**
 * Title: Trabaja con nosotros — página completa
 * Slug: aaa-estudio-legal/trabaja-con-nosotros-full
 * Categories: aaa-estudio-legal
 * Contenido sincronizado con la página en vivo de webtest el 2026-11-25 (D193): es lo mismo que el cliente ve y edita.
 * Description: Página "Trabaja con nosotros" completa (prototype/trabaja-con-nosotros.html + estructura y copy del cliente de la PPTX "Estructura y Copies", láminas 23–24 — D124): hero editorial, "¿Por qué trabajar con nosotros?", "Vacantes disponibles" (3 cargos con descripción — D185) y Postulación con el formulario de Contact Form 7 titulado "Postulación" (nombre, teléfono, cargo de interés y hoja de vida — ver WORDPRESS-SETUP.md § 7bis). Asignar la plantilla "Página con motion editorial (GSAP)" a esta página.
 *
 * @package aaa-estudio-legal
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hero-immersive hero\u002d\u002deditorial hero\u002d\u002deditorial\u002d\u002dcareers is-dark-surface"} -->
<section class="wp-block-group alignfull hero-immersive hero--editorial hero--editorial--careers is-dark-surface"><!-- wp:group {"className":"hero-shell"} -->
<div class="wp-block-group hero-shell"><!-- wp:group {"className":"hero-shell__media"} -->
<div class="wp-block-group hero-shell__media"><!-- wp:image {"id":302,"sizeSlug":"large","linkDestination":"none","className":"hero-shell__img"} -->
<figure class="wp-block-image size-large hero-shell__img"><img src="<?php echo esc_url( home_url() ); ?>/wp-content/uploads/2026/11/IMG_9077-scaled-e1795059816365-1024x360.webp" alt="Integrante de AAA Estudio Legal sonriendo en la oficina mientras muestra una prenda de la firma" class="wp-image-302"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hero-shell__scrim"} -->
<div class="wp-block-group hero-shell__scrim"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-shell__content"} -->
<div class="wp-block-group hero-shell__content"><!-- wp:paragraph {"className":"aaa-eyebrow"} -->
<p class="aaa-eyebrow">Trabaja con nosotros</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hero__title"} -->
<h1 class="wp-block-heading hero__title">Un lugar donde el rigor técnico se construye <em class="aaa-text-emphasis">entre personas, no solo entre procesos.</em></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"why-work surface-theme\u002d\u002dlight-base aaa-section","backgroundColor":"surface-light","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull why-work surface-theme--light-base aaa-section has-surface-light-background-color has-background"><!-- wp:group {"className":"why-work__grid aaa-motion-chapter"} -->
<div class="wp-block-group why-work__grid aaa-motion-chapter"><!-- wp:group {"className":"why-work__gallery"} -->
<div class="wp-block-group why-work__gallery"><!-- wp:image {"id":286,"sizeSlug":"large","linkDestination":"none","className":"why-work__photo aaa-motion-media"} -->
<figure class="wp-block-image size-large why-work__photo aaa-motion-media"><img src="<?php echo esc_url( home_url() ); ?>/wp-content/uploads/2026/11/IMG_9163-683x1024.webp" alt="Cofundador de AAA, Julián Agudelo" class="wp-image-286"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":345,"sizeSlug":"large","linkDestination":"none","className":"why-work__photo"} -->
<figure class="wp-block-image size-large why-work__photo"><img src="<?php echo esc_url( home_url() ); ?>/wp-content/uploads/2026/11/Talento-AAA-1024x683.webp" alt="" class="wp-image-345"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":288,"sizeSlug":"large","linkDestination":"none","className":"why-work__photo"} -->
<figure class="wp-block-image size-large why-work__photo"><img src="<?php echo esc_url( home_url() ); ?>/wp-content/uploads/2026/11/IMG_9076-1024x683.webp" alt="Empleadas de firma de abogados trabajando en computadores de mesa" class="wp-image-288"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"why-work__copy section-heading\u002d\u002deditorial aaa-motion-section-title"} -->
<div class="wp-block-group why-work__copy section-heading--editorial aaa-motion-section-title"><!-- wp:paragraph {"className":"aaa-eyebrow"} -->
<p class="aaa-eyebrow">Talento AAA</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">¿Por qué trabajar <em class="aaa-text-emphasis">con nosotros?</em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"why-work__lead"} -->
<p class="why-work__lead">En AAA Estudio Legal creemos que el crecimiento de nuestra organización comienza con el crecimiento de nuestro talento.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Somos un equipo en constante evolución, donde cada persona aporta sus conocimientos, ideas y experiencia para alcanzar objetivos comunes. Trabajar con nosotros significa formar parte de un entorno profesional que promueve el aprendizaje, el desarrollo de habilidades y el crecimiento profesional.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Haz parte de AAA Estudio Legal y construye con nosotros una nueva etapa de crecimiento, aprendizaje y oportunidades.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"jobs surface-theme\u002d\u002ddark-primary is-dark-surface aaa-section","backgroundColor":"navy-deep","textColor":"white","layout":{"type":"constrained"},"anchor":"vacantes"} -->
<section class="wp-block-group alignfull jobs surface-theme--dark-primary is-dark-surface aaa-section has-white-color has-navy-deep-background-color has-text-color has-background" id="vacantes"><!-- wp:group {"className":"jobs__head section-heading\u002d\u002deditorial aaa-motion-section-title"} -->
<div class="wp-block-group jobs__head section-heading--editorial aaa-motion-section-title"><!-- wp:paragraph {"className":"aaa-eyebrow"} -->
<p class="aaa-eyebrow">Oportunidades</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Vacantes <em class="aaa-text-emphasis">disponibles.</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"jobs-board"} -->
<div class="wp-block-group jobs-board"><!-- wp:group {"className":"job-card aaa-reveal aaa-stagger-0"} -->
<div class="wp-block-group job-card aaa-reveal aaa-stagger-0"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Dependiente judicial</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"job-card__summary"} -->
<p class="job-card__summary">¿Estudias Derecho y quieres conocer el desarrollo de los procesos en la vida real? Únete a nuestro equipo y aprende de la mano de abogados con experiencia, apoyando la gestión, revisión y seguimiento de procesos judiciales.<br><br><strong>Lo que harás</strong>:<br>• Apoyar la gestión y el seguimiento de los procesos judiciales de la firma.<br>• Revisar el estado de los procesos y mantener la información al día.<br>• Trabajar junto a nuestro equipo de abogados.<br><br><strong>Lo que buscamos</strong>:<br>• Estudiante de Derecho.<br>• Interés en fortalecer tus conocimientos y adquirir experiencia práctica.<br>• Responsabilidad, organización y ganas de aprender.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"job-card__summary"} -->
<p class="job-card__summary"><strong>Lo que ofrecemos</strong>:</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"job-card__meta"} -->
<ul class="wp-block-list job-card__meta"><!-- wp:list-item -->
<li><strong>Contrato:</strong> Término indefinido</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Horario:</strong> Lunes a viernes</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Ubicación:</strong> Cali</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:paragraph {"className":"job-card__cta"} -->
<p class="job-card__cta"><a href="#postulacion" aria-label="Postularme a la vacante de Dependiente judicial">Postularme →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"job-card aaa-reveal aaa-stagger-1"} -->
<div class="wp-block-group job-card aaa-reveal aaa-stagger-1"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Abogado(a) junior</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size"><br>¿Recién graduado(a)? Aquí no te pedimos experiencia: te ayudamos a construirla.<br>Buscamos profesionales en Derecho que quieran dar su primer paso en el ejercicio jurídico dentro de un equipo que valora el compromiso, la atención al detalle y las ganas de crecer.<br><br><strong>Lo que harás:</strong><br>• Iniciar tu carrera profesional en el área jurídica, con casos reales desde el primer día.<br>• Aprender del acompañamiento de abogados con trayectoria.<br>• Desarrollar tu criterio jurídico con casos de la firma.<br><br><strong>Lo que buscamos:</strong><br>• Profesional en Derecho con tarjeta profesional vigente.<br>• No se requiere experiencia laboral.<br>• Disposición para aprender, compromiso y orientación al detalle.<br><br><strong>Lo que ofrecemos</strong>:</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"job-card__meta"} -->
<ul class="wp-block-list job-card__meta"><!-- wp:list-item -->
<li><strong>Contrato:</strong> Término indefinido</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Horario:</strong> Lunes a viernes</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Ubicación:</strong> Cali</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:paragraph {"className":"job-card__cta"} -->
<p class="job-card__cta"><a href="#postulacion" aria-label="Postularme a la vacante de Abogado(a) junior">Postularme →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"job-card aaa-reveal aaa-stagger-2"} -->
<div class="wp-block-group job-card aaa-reveal aaa-stagger-2"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Abogado(a) senior</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size"><br>Tu experiencia y tu criterio merecen un lugar donde marquen la diferencia.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Buscamos un(a) abogado(a) con trayectoria en el ejercicio jurídico, capaz de asumir los procesos con autonomía, analizar cada caso a fondo y llevarlos a buen término.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size"><br></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size"><strong>Lo que harás</strong>:</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">• Asumir asuntos jurídicos con autonomía y criterio profesional.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">• Analizar casos y definir la estrategia jurídica.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">• Trabajar orientado(a) al cumplimiento de objetivos.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size"><br></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size"><strong>Lo que buscamos</strong>:</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">• Profesional en Derecho con tarjeta profesional vigente.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">• Experiencia en el ejercicio jurídico.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">• Capacidad de análisis, autonomía y orientación a resultados.<br><br><strong>Lo que ofrecemos</strong>:</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"job-card__meta"} -->
<ul class="wp-block-list job-card__meta"><!-- wp:list-item -->
<li><strong>Contrato:</strong> Término indefinido</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Horario:</strong> Lunes a viernes</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Ubicación:</strong> Cali</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:paragraph {"className":"job-card__cta"} -->
<p class="job-card__cta"><a href="#postulacion" aria-label="Postularme a la vacante de Abogado(a) senior">Postularme →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"talent-application surface-theme\u002d\u002dlight-base aaa-section","backgroundColor":"surface-light","layout":{"type":"constrained"},"anchor":"postulacion"} -->
<section class="wp-block-group alignfull talent-application surface-theme--light-base aaa-section has-surface-light-background-color has-background" id="postulacion"><!-- wp:group {"className":"talent-application__heading section-heading\u002d\u002deditorial aaa-motion-section-title"} -->
<div class="wp-block-group talent-application__heading section-heading--editorial aaa-motion-section-title"><!-- wp:paragraph {"className":"aaa-eyebrow"} -->
<p class="aaa-eyebrow">Postulación</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Donde el talento se convierte en trayectoria. <em class="aaa-text-emphasis">Conozca lo que significa ser parte de AAA</em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"talent-application__intro"} -->
<p class="talent-application__intro">Crezca junto a un equipo que entiende el rigor, el criterio y la excelencia como parte de cada desafío.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:shortcode -->
[contact-form-7 title="Postulación" html_class="talent-form talent-form--open"]
<!-- /wp:shortcode --></section>
<!-- /wp:group -->
