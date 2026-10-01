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
			<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">Nuestro equipo</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":1,"className":"hero__title"} -->
			<h1 class="wp-block-heading hero__title">Sobre nosotros: <em class="aaa-text-emphasis">AAA Estudio Legal</em></h1>
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
			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading">Origen y <em class="aaa-text-emphasis">especialización</em></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph --><p><strong>Nacimos en 2020 con un propósito claro:</strong> la representación técnica y estratégica de acreedores en procesos de insolvencia.</p><!-- /wp:paragraph -->
			<!-- wp:paragraph --><p>Desde nuestra fundación, decidimos construir una firma altamente especializada, enfocando toda nuestra experiencia en organizaciones que requieren proteger sus derechos crediticios y tomar decisiones con información, respaldo jurídico y visión de negocio.</p><!-- /wp:paragraph -->
			<!-- wp:paragraph --><p>Hoy acompañamos a organizaciones de múltiples sectores económicos en todo el territorio nacional, desarrollando estrategias que combinan conocimiento jurídico, cobertura operativa y tecnología para afrontar los desafíos del riesgo crediticio.</p><!-- /wp:paragraph -->
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
		<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">Personas detrás de cada proceso</p><!-- /wp:paragraph -->
		<!-- wp:heading {"level":2} -->
		<h2 class="wp-block-heading">Quiénes hacen posible <em class="aaa-text-emphasis">cada caso.</em></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph --><p>En AAA Estudio Legal hemos conformado un equipo multidisciplinario que integra criterio jurídico, gestión operativa y tecnología.</p><!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"team-flip-grid"} -->
	<div class="wp-block-group team-flip-grid">
		<!-- wp:group {"className":"team-profile-pair aaa-reveal aaa-stagger-0"} -->
		<div class="wp-block-group team-profile-pair aaa-reveal aaa-stagger-0">
			<!-- wp:html -->
			<article class="team-flip-card team-profile-pair__card">
				<div class="team-flip-card__inner">
					<div class="team-flip-card__face team-flip-card__front">
						<img class="team-flip-card__logo" src="<?php echo esc_url( aaa_brand_url( 'isotipo-blanco.svg' ) ); ?>" alt="" aria-hidden="true" />
						<div class="team-flip-card__caption">
							<span class="team-flip-card__name">Equipo jurídico</span>
							<span class="team-flip-card__role">Estrategia y representación</span>
							<button class="team-flip-card__toggle" type="button" data-team-flip-toggle aria-expanded="false" aria-label="Ver funciones del equipo jurídico">Ver funciones</button>
						</div>
					</div>
					<div class="team-flip-card__face team-flip-card__back">
						<img class="team-flip-card__logo" src="<?php echo esc_url( aaa_brand_url( 'isotipo-blanco.svg' ) ); ?>" alt="" aria-hidden="true" />
						<p class="team-flip-card__desc">Abogados especializados en derecho concursal, normalización de activos y derecho corporativo que diseñan la estrategia y representan a cada cliente en su caso.</p>
						<button class="team-flip-card__toggle" type="button" data-team-flip-toggle aria-expanded="false" aria-label="Volver al equipo jurídico">Volver</button>
					</div>
				</div>
			</article>
			<!-- /wp:html -->
			<!-- wp:image {"className":"team-profile-pair__photo"} -->
			<figure class="wp-block-image team-profile-pair__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/nosotros/equipo-juridico.webp' ) ); ?>" alt="Integrantes de AAA Estudio Legal en su puesto de trabajo" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"team-profile-pair aaa-reveal aaa-stagger-1"} -->
		<div class="wp-block-group team-profile-pair aaa-reveal aaa-stagger-1">
			<!-- wp:html -->
			<article class="team-flip-card team-profile-pair__card">
				<div class="team-flip-card__inner">
					<div class="team-flip-card__face team-flip-card__front">
						<img class="team-flip-card__logo" src="<?php echo esc_url( aaa_brand_url( 'isotipo-blanco.svg' ) ); ?>" alt="" aria-hidden="true" />
						<div class="team-flip-card__caption">
							<span class="team-flip-card__name">Equipo administrativo</span>
							<span class="team-flip-card__role">Gestión operativa y seguimiento</span>
							<button class="team-flip-card__toggle" type="button" data-team-flip-toggle aria-expanded="false" aria-label="Ver funciones del equipo administrativo">Ver funciones</button>
						</div>
					</div>
					<div class="team-flip-card__face team-flip-card__back">
						<img class="team-flip-card__logo" src="<?php echo esc_url( aaa_brand_url( 'isotipo-blanco.svg' ) ); ?>" alt="" aria-hidden="true" />
						<p class="team-flip-card__desc">Gestiona la documentación, los términos y el seguimiento de cada proceso para que ningún caso pierda ritmo.</p>
						<button class="team-flip-card__toggle" type="button" data-team-flip-toggle aria-expanded="false" aria-label="Volver al equipo administrativo">Volver</button>
					</div>
				</div>
			</article>
			<!-- /wp:html -->
			<!-- wp:image {"className":"team-profile-pair__photo"} -->
			<figure class="wp-block-image team-profile-pair__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/nosotros/equipo-administrativo.webp' ) ); ?>" alt="Integrante de AAA Estudio Legal trabajando en su escritorio" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"team-profile-pair aaa-reveal aaa-stagger-2"} -->
		<div class="wp-block-group team-profile-pair aaa-reveal aaa-stagger-2">
			<!-- wp:html -->
			<article class="team-flip-card team-profile-pair__card">
				<div class="team-flip-card__inner">
					<div class="team-flip-card__face team-flip-card__front">
						<img class="team-flip-card__logo" src="<?php echo esc_url( aaa_brand_url( 'isotipo-blanco.svg' ) ); ?>" alt="" aria-hidden="true" />
						<div class="team-flip-card__caption">
							<span class="team-flip-card__name">Equipo de tecnología</span>
							<span class="team-flip-card__role">Herramientas propias (ADY)</span>
							<button class="team-flip-card__toggle" type="button" data-team-flip-toggle aria-expanded="false" aria-label="Ver funciones del equipo de tecnología">Ver funciones</button>
						</div>
					</div>
					<div class="team-flip-card__face team-flip-card__back">
						<img class="team-flip-card__logo" src="<?php echo esc_url( aaa_brand_url( 'isotipo-blanco.svg' ) ); ?>" alt="" aria-hidden="true" />
						<p class="team-flip-card__desc">Desarrolla las herramientas tecnológicas que dan seguimiento en tiempo real a cada proceso.</p>
						<button class="team-flip-card__toggle" type="button" data-team-flip-toggle aria-expanded="false" aria-label="Volver al equipo de tecnología">Volver</button>
					</div>
				</div>
			</article>
			<!-- /wp:html -->
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
		<figure class="wp-block-image philosophy-block__visual aaa-motion-media"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/nosotros/filosofia.webp' ) ); ?>" alt="Integrante de AAA Estudio Legal sonriendo en su puesto de trabajo" /></figure>
		<!-- /wp:image -->
		<!-- wp:group {"className":"philosophy-block__copy section-heading--editorial aaa-motion-section-title"} -->
		<div class="wp-block-group philosophy-block__copy section-heading--editorial aaa-motion-section-title">
			<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">Filosofía</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":2} --><h2 class="wp-block-heading">AAA Estudio Legal</h2><!-- /wp:heading -->
			<!-- wp:quote {"className":"philosophy-quote"} -->
			<blockquote class="wp-block-quote philosophy-quote">
				<!-- wp:paragraph --><p><strong><em>Innovación con rigor. Solidez con tecnología. Dimensión humana.</em></strong> Tres principios que orientan la práctica de la firma.</p><!-- /wp:paragraph -->
			</blockquote>
			<!-- /wp:quote -->
			<!-- wp:paragraph {"className":"philosophy-description"} -->
			<p class="philosophy-description"><strong>En AAA Estudio Legal actuamos con total transparencia:</strong> no prometemos resultados que ninguna firma seria puede garantizar, sino una representación jurídica especializada, una estrategia construida sobre un diagnóstico técnico y honorarios proporcionales a la naturaleza del caso. Nuestro compromiso es brindar a cada cliente el criterio, la experiencia y el acompañamiento necesarios para tomar decisiones informadas y proteger el valor de sus activos.</p>
			<!-- /wp:paragraph -->
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
