<?php
/**
 * Title: Metodología — página completa
 * Slug: aaa-estudio-legal/metodologia-full
 * Categories: aaa-estudio-legal
 * Description: Página "Metodología" completa (prototype/servicios.html + cambios del cliente de la PPTX "Estructura y Copies", láminas 13–18, y de la salvedad del 23-sep — D123): hero editorial, "Nuestra metodología" (línea de tiempo de 3 pasos), "Representación especializada" (3 tarjetas con los servicios en viñetas), Transparencia y el mismo cierre "Conversemos" de Inicio. Asignar la plantilla "Página con motion editorial (GSAP)" a esta página.
 *
 * @package aaa-estudio-legal
 */
?>
<!-- wp:group {"tagName":"section","className":"hero-immersive hero--editorial hero--editorial--services is-dark-surface","align":"full"} -->
<section class="wp-block-group alignfull hero-immersive hero--editorial hero--editorial--services is-dark-surface">
	<!-- wp:group {"className":"hero-shell"} -->
	<div class="wp-block-group hero-shell">
		<!-- wp:group {"className":"hero-shell__media"} -->
		<div class="wp-block-group hero-shell__media">
			<!-- wp:image {"className":"hero-shell__img"} -->
			<figure class="wp-block-image hero-shell__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/metodologia/hero-9095.webp' ) ); ?>" alt="Integrantes del equipo de AAA Estudio Legal trabajando en la oficina" /></figure>
			<!-- /wp:image -->
			<!-- wp:group {"className":"hero-shell__scrim"} --><div class="wp-block-group hero-shell__scrim"></div><!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"hero-shell__content"} -->
		<div class="wp-block-group hero-shell__content">
			<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">Soluciones para acreedores</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":1,"className":"hero__title"} -->
			<h1 class="wp-block-heading hero__title">Insolvencia, normalización de activos y línea corporativa, <em class="aaa-text-emphasis">con una estrategia clara.</em></h1>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"stepper stepper--timeline surface-theme--dark-primary is-dark-surface aaa-section","backgroundColor":"navy-deep","textColor":"white","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull stepper stepper--timeline surface-theme--dark-primary is-dark-surface aaa-section has-white-color has-navy-deep-background-color has-text-color has-background">
	<!-- wp:group {"className":"stepper__layout"} -->
	<div class="wp-block-group stepper__layout">
		<!-- wp:group {"className":"stepper__intro section-heading--editorial aaa-motion-section-title"} -->
		<div class="wp-block-group stepper__intro section-heading--editorial aaa-motion-section-title">
			<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">Nuestra metodología</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading">Convertimos cada caso en <em class="aaa-text-emphasis">una estrategia jurídica.</em></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"stepper__steps"} -->
		<div class="wp-block-group stepper__steps">
			<!-- wp:group {"className":"stepper__step aaa-reveal aaa-stagger-0"} -->
			<div class="wp-block-group stepper__step aaa-reveal aaa-stagger-0">
				<!-- wp:group {"className":"stepper__node"} --><div class="wp-block-group stepper__node"></div><!-- /wp:group -->
				<!-- wp:image {"className":"stepper__photo"} -->
				<figure class="wp-block-image stepper__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/metodologia/paso-diagnostico.webp' ) ); ?>" alt="" /></figure>
				<!-- /wp:image -->
				<!-- wp:group {"className":"stepper__body"} -->
				<div class="wp-block-group stepper__body">
					<!-- wp:paragraph {"className":"stepper__index"} --><p class="stepper__index">01</p><!-- /wp:paragraph -->
					<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Diagnóstico</h3><!-- /wp:heading -->
					<!-- wp:paragraph --><p>Antes de actuar, entendemos el contexto completo. Estudiamos el caso, identificamos los riesgos y construimos un diagnóstico jurídico que permite definir una ruta viable y proporcional a cada escenario.</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"stepper__step aaa-reveal aaa-stagger-1"} -->
			<div class="wp-block-group stepper__step aaa-reveal aaa-stagger-1">
				<!-- wp:group {"className":"stepper__node"} --><div class="wp-block-group stepper__node"></div><!-- /wp:group -->
				<!-- wp:image {"className":"stepper__photo"} -->
				<figure class="wp-block-image stepper__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/metodologia/paso-estrategia.webp' ) ); ?>" alt="" /></figure>
				<!-- /wp:image -->
				<!-- wp:group {"className":"stepper__body"} -->
				<div class="wp-block-group stepper__body">
					<!-- wp:paragraph {"className":"stepper__index"} --><p class="stepper__index">02</p><!-- /wp:paragraph -->
					<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Estrategia</h3><!-- /wp:heading -->
					<!-- wp:paragraph --><p>No aplicamos estrategias estándar. Diseñamos la ruta jurídica según el momento de cada caso: para prevenir un riesgo, actuar dentro de un proceso o recuperar un activo.</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"stepper__step aaa-reveal aaa-stagger-2"} -->
			<div class="wp-block-group stepper__step aaa-reveal aaa-stagger-2">
				<!-- wp:group {"className":"stepper__node"} --><div class="wp-block-group stepper__node"></div><!-- /wp:group -->
				<!-- wp:image {"className":"stepper__photo"} -->
				<figure class="wp-block-image stepper__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/metodologia/paso-representacion.webp' ) ); ?>" alt="" /></figure>
				<!-- /wp:image -->
				<!-- wp:group {"className":"stepper__body"} -->
				<div class="wp-block-group stepper__body">
					<!-- wp:paragraph {"className":"stepper__index"} --><p class="stepper__index">03</p><!-- /wp:paragraph -->
					<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Representación</h3><!-- /wp:heading -->
					<!-- wp:paragraph --><p>Ejecutamos la estrategia con seguimiento permanente, representación especializada y control continuo de cada etapa para proteger sus intereses.</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"services-intro surface-theme--light-base aaa-section","backgroundColor":"surface-light","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull services-intro surface-theme--light-base aaa-section has-surface-light-background-color has-background">
	<!-- wp:group {"className":"services-intro__head section-heading--editorial aaa-motion-section-title"} -->
	<div class="wp-block-group services-intro__head section-heading--editorial aaa-motion-section-title">
		<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">Representación especializada para acreedores</p><!-- /wp:paragraph -->
		<!-- wp:heading {"level":2} -->
		<h2 class="wp-block-heading">Tres áreas de práctica, <em class="aaa-text-emphasis">un mismo criterio.</em></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"className":"services-intro__copy"} -->
		<p class="services-intro__copy">Representamos exclusivamente los intereses del acreedor. Integramos defensa en procesos concursales, normalización de activos y línea corporativa y litigios para anticipar riesgos, proteger el crédito y maximizar sus posibilidades de recuperación.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"service-grid--editorial"} -->
	<div class="wp-block-group service-grid--editorial">
		<!-- wp:group {"className":"service-card--editorial aaa-reveal aaa-stagger-0"} -->
		<div class="wp-block-group service-card--editorial aaa-reveal aaa-stagger-0">
			<!-- wp:image {"className":"service-card__media"} -->
			<figure class="wp-block-image service-card__media"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/metodologia/servicio-concursal.webp' ) ); ?>" alt="" /></figure>
			<!-- /wp:image -->
			<!-- wp:group {"className":"service-card__body"} -->
			<div class="wp-block-group service-card__body">
				<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Derecho concursal</h3><!-- /wp:heading -->
				<!-- wp:paragraph {"className":"service-block__tag"} --><p class="service-block__tag">Perspectiva técnica y estratégica</p><!-- /wp:paragraph -->
				<!-- wp:list {"className":"service-card__list"} -->
				<ul class="wp-block-list service-card__list">
					<!-- wp:list-item --><li>Representación de acreedores en procesos de reorganización y recuperación empresarial</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li>Representación de acreedores en procesos de insolvencia de persona natural</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li>Diagnóstico y estrategia concursal</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li>Representación en procesos de liquidación</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li>Controversias y acciones concursales</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li>Protección de garantías y negociación de acuerdos</li><!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"service-card--editorial aaa-reveal aaa-stagger-1"} -->
		<div class="wp-block-group service-card--editorial aaa-reveal aaa-stagger-1">
			<!-- wp:image {"className":"service-card__media"} -->
			<figure class="wp-block-image service-card__media"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/metodologia/servicio-normalizacion.webp' ) ); ?>" alt="" /></figure>
			<!-- /wp:image -->
			<!-- wp:group {"className":"service-card__body"} -->
			<div class="wp-block-group service-card__body">
				<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Normalización de activos</h3><!-- /wp:heading -->
				<!-- wp:paragraph {"className":"service-block__tag"} --><p class="service-block__tag">Preventivo, reactivo y a la medida</p><!-- /wp:paragraph -->
				<!-- wp:list {"className":"service-card__list"} -->
				<ul class="wp-block-list service-card__list">
					<!-- wp:list-item --><li>Diagnóstico jurídico y documental</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li>Análisis de viabilidad de acciones de recuperación</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li>Diseño de estrategias de normalización</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li>Recuperación de activos y normalización de cartera</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li>Estructuración y constitución de garantías</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li>Estandarización de procesos de recuperación</li><!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"service-card--editorial aaa-reveal aaa-stagger-2"} -->
		<div class="wp-block-group service-card--editorial aaa-reveal aaa-stagger-2">
			<!-- wp:image {"className":"service-card__media"} -->
			<figure class="wp-block-image service-card__media"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/metodologia/servicio-corporativa.webp' ) ); ?>" alt="" /></figure>
			<!-- /wp:image -->
			<!-- wp:group {"className":"service-card__body"} -->
			<div class="wp-block-group service-card__body">
				<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Línea corporativa y litigios</h3><!-- /wp:heading -->
				<!-- wp:paragraph {"className":"service-block__tag"} --><p class="service-block__tag">Prevención antes que contingencia</p><!-- /wp:paragraph -->
				<!-- wp:list {"className":"service-card__list"} -->
				<ul class="wp-block-list service-card__list">
					<!-- wp:list-item --><li>Derecho societario y gobierno corporativo</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li>Estructuración de negocios y operaciones contractuales</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li>Asesoría preventiva y estratégica en asuntos laborales</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li>Litigios y resolución de controversias</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li>Planeación patrimonial y sucesoral</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li>Cumplimiento y gestión de riesgos corporativos</li><!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"transparency-block surface-theme--dark-deep is-dark-surface aaa-section","backgroundColor":"navy-hover","textColor":"white","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull transparency-block surface-theme--dark-deep is-dark-surface aaa-section has-white-color has-navy-hover-background-color has-text-color has-background">
	<!-- wp:group {"className":"transparency-block__grid aaa-motion-chapter"} -->
	<div class="wp-block-group transparency-block__grid aaa-motion-chapter">
		<!-- wp:group {"className":"transparency-block__copy section-heading--editorial aaa-motion-section-title"} -->
		<div class="wp-block-group transparency-block__copy section-heading--editorial aaa-motion-section-title">
			<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">Transparencia</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading">Expectativas claras, <em class="aaa-text-emphasis">decisiones sustentadas.</em></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph --><p>Nuestro compromiso es la defensa técnica más rigurosa de sus intereses. Los honorarios se definen caso a caso, siempre en proporción a lo que está en juego.</p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"transparency-block__media"} -->
		<div class="wp-block-group transparency-block__media">
			<!-- wp:image {"className":"transparency-block__visual aaa-motion-media"} -->
			<figure class="wp-block-image transparency-block__visual aaa-motion-media"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/metodologia/transparencia.webp' ) ); ?>" alt="Integrante del equipo de AAA Estudio Legal en su puesto de trabajo" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","anchor":"cierre-heading","className":"site-closing-cta site-closing-cta--internal site-closing-cta--global aaa-section","backgroundColor":"surface-light","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull site-closing-cta site-closing-cta--internal site-closing-cta--global aaa-section has-surface-light-background-color has-background" id="cierre-heading">
	<!-- wp:group {"className":"site-closing-cta__panel"} -->
	<div class="wp-block-group site-closing-cta__panel">
		<!-- wp:image {"className":"site-closing-cta__watermark"} -->
		<figure class="wp-block-image site-closing-cta__watermark"><img src="<?php echo esc_url( aaa_brand_url( 'isotipo-blanco.svg' ) ); ?>" alt="" /></figure>
		<!-- /wp:image -->
		<!-- wp:group {"className":"site-closing-cta__heading aaa-motion-section-title"} -->
		<div class="wp-block-group site-closing-cta__heading aaa-motion-section-title">
			<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">Conversemos</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":2} --><h2 class="wp-block-heading">Cada caso requiere <em class="aaa-text-emphasis">una defensa con criterio.</em></h2><!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"site-closing-cta__content"} -->
		<div class="wp-block-group site-closing-cta__content">
			<!-- wp:paragraph {"className":"site-closing-cta__text"} --><p class="site-closing-cta__text">Si su organización enfrenta un reto jurídico, necesita proteger sus activos, gestionar riesgos o tomar decisiones corporativas, nuestro equipo puede evaluar la situación y definir una estrategia jurídica.</p><!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"site-closing-cta__button"} -->
				<div class="wp-block-button site-closing-cta__button"><a class="wp-block-button__link wp-element-button" href="/contacto/">Solicitar evaluación jurídica <svg class="btn--icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
