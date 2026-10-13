<?php
/**
 * Title: Quiénes somos — página completa
 * Slug: aaa-estudio-legal/quienes-somos-full
 * Categories: aaa-estudio-legal
 * Description: Página "Quiénes somos" completa (prototype/nuestro-equipo.html + cambios del cliente de la PPTX "Estructura y Copies", láminas 19–22 — D124): hero editorial, Origen y especialización (foto de los fundadores), "Quiénes hacen posible cada caso" (el módulo de tarjetas de equipo que estaba en Trabaja con nosotros, agrupado por áreas), Filosofía (sin CTA) y el mismo cierre "Conversemos" de Inicio. Asignar la plantilla "Página con motion editorial (GSAP)" a esta página.
 *
 * @package aaa-estudio-legal
 */
?>
<!-- wp:group {"tagName":"section","className":"hero-immersive hero--editorial hero--editorial--about is-dark-surface","align":"full"} -->
<section class="wp-block-group alignfull hero-immersive hero--editorial hero--editorial--about is-dark-surface">
	<!-- wp:group {"className":"hero-shell"} -->
	<div class="wp-block-group hero-shell">
		<!-- wp:group {"className":"hero-shell__media"} -->
		<div class="wp-block-group hero-shell__media">
			<!-- wp:image {"className":"hero-shell__img"} -->
			<figure class="wp-block-image hero-shell__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/nosotros/hero.webp' ) ); ?>" alt="Equipo de AAA Estudio Legal trabajando en su oficina" /></figure>
			<!-- /wp:image -->
			<!-- wp:group {"className":"hero-shell__scrim"} --><div class="wp-block-group hero-shell__scrim"></div><!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"hero-shell__content"} -->
		<div class="wp-block-group hero-shell__content">
			<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">Sobre nosotros</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":1,"className":"hero__title"} -->
			<h1 class="wp-block-heading hero__title">Una firma con una causa: <em class="aaa-text-emphasis">el crédito.</em></h1>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"origin-block surface-theme--light-base aaa-section","backgroundColor":"surface-light","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull origin-block surface-theme--light-base aaa-section has-surface-light-background-color has-background">
	<!-- wp:group {"className":"origin-block__grid aaa-motion-chapter"} -->
	<div class="wp-block-group origin-block__grid aaa-motion-chapter">
		<!-- wp:group {"className":"origin-block__copy section-heading--editorial aaa-motion-section-title"} -->
		<div class="wp-block-group origin-block__copy section-heading--editorial aaa-motion-section-title">
			<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">Origen y especialización</p><!-- /wp:paragraph -->
				<!-- wp:paragraph --><p>Desde 2020 acompañamos el crédito de principio a fin, desde la garantía que lo respalda hasta el cobro cuando el pago se complica. En insolvencia estamos de un solo lado, el del acreedor, y esa posición nos enseñó a ver el crédito donde es más frágil. Hoy trabajamos desde Cali para entidades financieras, fondos de empleados y organizaciones del sector real de todo el país.</p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:image {"className":"origin-block__visual aaa-motion-media"} -->
		<figure class="wp-block-image origin-block__visual aaa-motion-media"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/nosotros/origen-fundadores.webp' ) ); ?>" alt="Fundadores de AAA Estudio Legal" /></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"team-groups surface-theme--light-alt aaa-section","backgroundColor":"surface-light-alt","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull team-groups surface-theme--light-alt aaa-section has-surface-light-alt-background-color has-background">
	<!-- wp:group {"className":"team-groups__head section-heading--editorial aaa-motion-section-title"} -->
	<div class="wp-block-group team-groups__head section-heading--editorial aaa-motion-section-title">
		<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">Equipo</p><!-- /wp:paragraph -->
		<!-- wp:heading {"level":2} -->
		<h2 class="wp-block-heading">Quienes hacen posible <em class="aaa-text-emphasis">cada caso.</em></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph --><p>Cuatro equipos que combinan criterio jurídico, control, negociación y tecnología.</p><!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"team-flip-grid"} -->
	<div class="wp-block-group team-flip-grid">
		<!-- wp:group {"className":"team-profile-pair aaa-reveal aaa-stagger-0"} -->
		<div class="wp-block-group team-profile-pair aaa-reveal aaa-stagger-0">
			<!-- wp:group {"className":"team-flip-card team-profile-pair__card","layout":{"type":"default"}} -->
<div class="wp-block-group team-flip-card team-profile-pair__card"><!-- wp:group {"className":"team-flip-card__inner","layout":{"type":"default"}} -->
<div class="wp-block-group team-flip-card__inner"><!-- wp:group {"className":"team-flip-card__face team-flip-card__front","layout":{"type":"default"}} -->
<div class="wp-block-group team-flip-card__face team-flip-card__front"><!-- wp:group {"className":"team-flip-card__caption","layout":{"type":"default"}} -->
<div class="wp-block-group team-flip-card__caption"><!-- wp:paragraph {"className":"team-flip-card__name"} -->
<p class="team-flip-card__name">Equipo jurídico</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"team-flip-card__role"} -->
<p class="team-flip-card__role">Estrategia y representación</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"team-flip-card__face team-flip-card__back","layout":{"type":"default"}} -->
<div class="wp-block-group team-flip-card__face team-flip-card__back"><!-- wp:paragraph {"className":"team-flip-card__desc"} -->
<p class="team-flip-card__desc">Diseña la estrategia de cada caso y representa al cliente en el proceso, en insolvencia, recuperación de cartera, garantías y asesoría corporativa.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
			<!-- wp:image {"className":"team-profile-pair__photo"} -->
			<figure class="wp-block-image team-profile-pair__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/nosotros/equipo-juridico.webp' ) ); ?>" alt="Integrantes de AAA Estudio Legal en su puesto de trabajo" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"team-profile-pair aaa-reveal aaa-stagger-1"} -->
		<div class="wp-block-group team-profile-pair aaa-reveal aaa-stagger-1">
			<!-- wp:group {"className":"team-flip-card team-profile-pair__card","layout":{"type":"default"}} -->
<div class="wp-block-group team-flip-card team-profile-pair__card"><!-- wp:group {"className":"team-flip-card__inner","layout":{"type":"default"}} -->
<div class="wp-block-group team-flip-card__inner"><!-- wp:group {"className":"team-flip-card__face team-flip-card__front","layout":{"type":"default"}} -->
<div class="wp-block-group team-flip-card__face team-flip-card__front"><!-- wp:group {"className":"team-flip-card__caption","layout":{"type":"default"}} -->
<div class="wp-block-group team-flip-card__caption"><!-- wp:paragraph {"className":"team-flip-card__name"} -->
<p class="team-flip-card__name">Equipo administrativo</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"team-flip-card__role"} -->
<p class="team-flip-card__role">Control y seguimiento</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"team-flip-card__face team-flip-card__back","layout":{"type":"default"}} -->
<div class="wp-block-group team-flip-card__face team-flip-card__back"><!-- wp:paragraph {"className":"team-flip-card__desc"} -->
<p class="team-flip-card__desc">Controla los términos, la documentación y los indicadores de cada proceso, y vigila su cumplimiento.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
			<!-- wp:image {"className":"team-profile-pair__photo"} -->
			<figure class="wp-block-image team-profile-pair__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/nosotros/equipo-administrativo.webp' ) ); ?>" alt="Integrante de AAA Estudio Legal trabajando en su escritorio" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"team-profile-pair aaa-reveal aaa-stagger-2"} -->
<div class="wp-block-group team-profile-pair aaa-reveal aaa-stagger-2">
<!-- wp:group {"className":"team-flip-card team-profile-pair__card","layout":{"type":"default"}} -->
<div class="wp-block-group team-flip-card team-profile-pair__card"><!-- wp:group {"className":"team-flip-card__inner","layout":{"type":"default"}} -->
<div class="wp-block-group team-flip-card__inner"><!-- wp:group {"className":"team-flip-card__face team-flip-card__front","layout":{"type":"default"}} -->
<div class="wp-block-group team-flip-card__face team-flip-card__front"><!-- wp:group {"className":"team-flip-card__caption","layout":{"type":"default"}} -->
<div class="wp-block-group team-flip-card__caption"><!-- wp:paragraph {"className":"team-flip-card__name"} -->
<p class="team-flip-card__name">Equipo de negociaciones</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"team-flip-card__role"} -->
<p class="team-flip-card__role">Articulación y recaudo</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"team-flip-card__face team-flip-card__back","layout":{"type":"default"}} -->
<div class="wp-block-group team-flip-card__face team-flip-card__back"><!-- wp:paragraph {"className":"team-flip-card__desc"} -->
<p class="team-flip-card__desc">Une la estrategia jurídica con el recaudo: negocia los acuerdos y gestiona su cumplimiento.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"team-profile-pair__placeholder"} --><div class="wp-block-group team-profile-pair__placeholder"></div><!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"team-profile-pair aaa-reveal aaa-stagger-3"} -->
<div class="wp-block-group team-profile-pair aaa-reveal aaa-stagger-3">
			<!-- wp:group {"className":"team-flip-card team-profile-pair__card","layout":{"type":"default"}} -->
<div class="wp-block-group team-flip-card team-profile-pair__card"><!-- wp:group {"className":"team-flip-card__inner","layout":{"type":"default"}} -->
<div class="wp-block-group team-flip-card__inner"><!-- wp:group {"className":"team-flip-card__face team-flip-card__front","layout":{"type":"default"}} -->
<div class="wp-block-group team-flip-card__face team-flip-card__front"><!-- wp:group {"className":"team-flip-card__caption","layout":{"type":"default"}} -->
<div class="wp-block-group team-flip-card__caption"><!-- wp:paragraph {"className":"team-flip-card__name"} -->
<p class="team-flip-card__name">Equipo de tecnología</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"team-flip-card__role"} -->
<p class="team-flip-card__role">Automatización y plataforma propia</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"team-flip-card__face team-flip-card__back","layout":{"type":"default"}} -->
<div class="wp-block-group team-flip-card__face team-flip-card__back"><!-- wp:paragraph {"className":"team-flip-card__desc"} -->
<p class="team-flip-card__desc">Automatiza procesos, desarrolla la plataforma propia y se ocupa de la seguridad de la información.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
			<!-- wp:image {"className":"team-profile-pair__photo"} -->
			<figure class="wp-block-image team-profile-pair__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/nosotros/equipo-tecnologia.webp' ) ); ?>" alt="Manos de un integrante de AAA Estudio Legal trabajando en un portátil" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"philosophy-section surface-theme--light-base aaa-section","backgroundColor":"surface-light","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull philosophy-section surface-theme--light-base aaa-section has-surface-light-background-color has-background">
	<!-- wp:group {"className":"philosophy-block__grid aaa-motion-chapter"} -->
	<div class="wp-block-group philosophy-block__grid aaa-motion-chapter">
		<!-- wp:image {"className":"philosophy-block__visual aaa-motion-media"} -->
		<figure class="wp-block-image philosophy-block__visual aaa-motion-media"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/nosotros/aaa-filosofia-biblioteca.webp' ) ); ?>" alt="Isotipo de AAA Estudio Legal sobre una biblioteca de libros antiguos" /></figure>
		<!-- /wp:image -->
		<!-- wp:group {"className":"philosophy-block__copy section-heading--editorial aaa-motion-section-title"} -->
		<div class="wp-block-group philosophy-block__copy section-heading--editorial aaa-motion-section-title">
			<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">Filosofía</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":2} --><h2 class="wp-block-heading">AAA Estudio Legal</h2><!-- /wp:heading -->
			<!-- wp:quote {"className":"philosophy-quote"} -->
<blockquote class="wp-block-quote philosophy-quote">
<!-- wp:paragraph --><p>Nuestro diferencial es desmitificar las situaciones que parecen cerradas, y encontrar en ellas caminos que no son evidentes a primera vista.</p><!-- /wp:paragraph -->
</blockquote>
<!-- /wp:quote -->
<!-- wp:paragraph {"className":"philosophy-description"} -->
<p class="philosophy-description">Revisamos, analizamos e interiorizamos la ley, y con eso le mostramos al cliente puntos de definición que abren nuevas aristas a su situación.</p>
<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","anchor":"cierre-heading","className":"site-closing-cta site-closing-cta--internal site-closing-cta--global aaa-section","backgroundColor":"surface-light","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull site-closing-cta site-closing-cta--internal site-closing-cta--global aaa-section has-surface-light-background-color has-background" id="cierre-heading">
	<!-- wp:group {"className":"site-closing-cta__panel","style":{"background":{"backgroundImage":{"url":"<?php echo esc_url( aaa_media_url( 'temp-prototype-home-cta.jpg' ) ); ?>","source":"file","title":"temp-prototype-home-cta"},"backgroundSize":"cover","backgroundPosition":"50% 52%"}}} -->
	<div class="wp-block-group site-closing-cta__panel">
		<!-- wp:image {"className":"site-closing-cta__watermark"} -->
		<figure class="wp-block-image site-closing-cta__watermark"><img src="<?php echo esc_url( aaa_brand_url( 'isotipo-blanco.svg' ) ); ?>" alt="" /></figure>
		<!-- /wp:image -->
		<!-- wp:group {"className":"site-closing-cta__heading aaa-motion-section-title"} -->
		<div class="wp-block-group site-closing-cta__heading aaa-motion-section-title">
			<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">Conversemos</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":2} --><h2 class="wp-block-heading">Cada caso se estudia <em class="aaa-text-emphasis">antes de decidir.</em></h2><!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"site-closing-cta__content"} -->
		<div class="wp-block-group site-closing-cta__content">
			<!-- wp:paragraph {"className":"site-closing-cta__text"} --><p class="site-closing-cta__text">Si usted es una entidad financiera con cartera en mora, un fondo de empleados, una persona natural que quiere recuperar lo que le deben o una organización que necesita anticipar un riesgo legal, estudiamos su situación y le proponemos la vía que mejor la respalda.</p><!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"site-closing-cta__button"} -->
				<div class="wp-block-button site-closing-cta__button"><a class="wp-block-button__link wp-element-button" href="/contacto/">Solicitar el estudio de su caso <svg class="btn--icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
