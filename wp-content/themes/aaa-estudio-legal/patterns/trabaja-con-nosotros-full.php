<?php
/**
 * Title: Trabaja con nosotros — página completa
 * Slug: aaa-estudio-legal/trabaja-con-nosotros-full
 * Categories: aaa-estudio-legal
 * Description: Página "Trabaja con nosotros" completa (Decisión D72/D89–D97): hero editorial, intro de equipo, 4 tarjetas flip + 4 fotos simples en damero ("Personas, no procesos" — los 4 perfiles son placeholder ficticio explícitamente autorizado por el Owner, pendientes del equipo real) y el formulario de Postulación. Asignar la plantilla "Página con motion editorial (GSAP)" a esta página (panel Plantilla, en el editor). El formulario usa Contact Form 7 — ver WORDPRESS-SETUP.md § Formularios.
 *
 * @package aaa-estudio-legal
 */
?>
<!-- wp:group {"tagName":"section","className":"hero-immersive hero--editorial hero--editorial--careers"} -->
<section class="wp-block-group hero-immersive hero--editorial hero--editorial--careers">
	<!-- wp:group {"className":"hero-shell"} -->
	<div class="wp-block-group hero-shell">

		<!-- wp:group {"className":"hero-shell__media"} -->
		<div class="wp-block-group hero-shell__media">
			<!-- wp:image {"className":"hero-shell__img"} -->
			<figure class="wp-block-image hero-shell__img"><img src="" alt="Espacio reservado para fotografía — pendiente de material del cliente" /></figure>
			<!-- /wp:image -->
			<!-- wp:group {"className":"hero-shell__scrim"} --><div class="wp-block-group hero-shell__scrim"></div><!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"hero-shell__content"} -->
		<div class="wp-block-group hero-shell__content">
			<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">Trabaja con nosotros</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":1,"className":"hero__title"} -->
			<h1 class="wp-block-heading hero__title">Un lugar donde el rigor técnico se construye <em class="aaa-text-emphasis">entre personas, no solo entre procesos.</em></h1>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"surface-theme--light-base","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|16"}}},"backgroundColor":"surface-light"} -->
<section class="wp-block-group surface-theme--light-base has-surface-light-background-color has-background">
	<!-- wp:columns {"className":"what-we-do-grid what-we-do-grid--reverse"} -->
	<div class="wp-block-columns what-we-do-grid what-we-do-grid--reverse">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"className":"is-style-media-placeholder what-we-do-visual"} -->
			<figure class="wp-block-image is-style-media-placeholder what-we-do-visual"><img src="" alt="Espacio reservado para fotografía del equipo, pendiente de material del cliente" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"section-heading--editorial"} -->
			<div class="wp-block-group section-heading--editorial">
				<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">Capacidades integradas</p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":2} -->
				<h2 class="wp-block-heading">Nuestro <em class="aaa-text-emphasis">equipo</em></h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>En AAA Estudio Legal hemos conformado un equipo multidisciplinario que integra criterio jurídico, gestión operativa y tecnología.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"surface-theme--light-alt","backgroundColor":"surface-light-alt"} -->
<section class="wp-block-group surface-theme--light-alt has-surface-light-alt-background-color has-background">
	<!-- wp:group {"className":"section-heading--editorial"} -->
	<div class="wp-block-group section-heading--editorial">
		<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">Personas detrás de cada proceso</p><!-- /wp:paragraph -->
		<!-- wp:heading {"level":2} -->
		<h2 class="wp-block-heading">Quiénes hacen posible <em class="aaa-text-emphasis">cada caso.</em></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:html -->
	<div class="team-flip-grid" aria-label="Perfiles del equipo (ejemplo — pendientes del equipo real)">

		<article class="team-flip-card">
			<div class="team-flip-card__inner">
				<div class="team-flip-card__face team-flip-card__front">
					<div class="team-flip-card__caption">
						<span class="team-flip-card__name">Mariana Restrepo</span>
						<span class="team-flip-card__role">Directora Jurídica de Insolvencia</span>
						<button class="team-flip-card__toggle" type="button" data-team-flip-toggle aria-expanded="false" aria-label="Ver funciones de Mariana Restrepo">Ver funciones</button>
					</div>
				</div>
				<div class="team-flip-card__face team-flip-card__back">
					<p class="team-flip-card__desc">Lidera la estrategia de defensa de acreedores en cada proceso concursal, desde el diagnóstico hasta el cierre.</p>
					<button class="team-flip-card__toggle" type="button" data-team-flip-toggle aria-expanded="false" aria-label="Volver al perfil de Mariana Restrepo">Volver</button>
				</div>
			</div>
		</article>
		<div class="is-style-media-placeholder" role="img" aria-label="Espacio reservado para fotografía institucional, pendiente de material del cliente"></div>

		<article class="team-flip-card">
			<div class="team-flip-card__inner">
				<div class="team-flip-card__face team-flip-card__front">
					<div class="team-flip-card__caption">
						<span class="team-flip-card__name">Andrés Salazar</span>
						<span class="team-flip-card__role">Abogado Senior, Derecho Corporativo</span>
						<button class="team-flip-card__toggle" type="button" data-team-flip-toggle aria-expanded="false" aria-label="Ver funciones de Andrés Salazar">Ver funciones</button>
					</div>
				</div>
				<div class="team-flip-card__face team-flip-card__back">
					<p class="team-flip-card__desc">Estructura relaciones comerciales sólidas y anticipa riesgos legales antes de que se conviertan en contingencias.</p>
					<button class="team-flip-card__toggle" type="button" data-team-flip-toggle aria-expanded="false" aria-label="Volver al perfil de Andrés Salazar">Volver</button>
				</div>
			</div>
		</article>
		<div class="is-style-media-placeholder" role="img" aria-label="Espacio reservado para fotografía institucional, pendiente de material del cliente"></div>

		<div class="is-style-media-placeholder" role="img" aria-label="Espacio reservado para fotografía institucional, pendiente de material del cliente"></div>
		<article class="team-flip-card">
			<div class="team-flip-card__inner">
				<div class="team-flip-card__face team-flip-card__front">
					<div class="team-flip-card__caption">
						<span class="team-flip-card__name">Camila Ortiz</span>
						<span class="team-flip-card__role">Coordinadora de Normalización de Activos</span>
						<button class="team-flip-card__toggle" type="button" data-team-flip-toggle aria-expanded="false" aria-label="Ver funciones de Camila Ortiz">Ver funciones</button>
					</div>
				</div>
				<div class="team-flip-card__face team-flip-card__back">
					<p class="team-flip-card__desc">Diseña estrategias preventivas y reactivas para maximizar la recuperación del crédito en cada caso.</p>
					<button class="team-flip-card__toggle" type="button" data-team-flip-toggle aria-expanded="false" aria-label="Volver al perfil de Camila Ortiz">Volver</button>
				</div>
			</div>
		</article>

		<div class="is-style-media-placeholder" role="img" aria-label="Espacio reservado para fotografía institucional, pendiente de material del cliente"></div>
		<article class="team-flip-card">
			<div class="team-flip-card__inner">
				<div class="team-flip-card__face team-flip-card__front">
					<div class="team-flip-card__caption">
						<span class="team-flip-card__name">Santiago Vélez</span>
						<span class="team-flip-card__role">Líder de Tecnología (ADY)</span>
						<button class="team-flip-card__toggle" type="button" data-team-flip-toggle aria-expanded="false" aria-label="Ver funciones de Santiago Vélez">Ver funciones</button>
					</div>
				</div>
				<div class="team-flip-card__face team-flip-card__back">
					<p class="team-flip-card__desc">Desarrolla las herramientas tecnológicas que dan seguimiento en tiempo real a cada proceso.</p>
					<button class="team-flip-card__toggle" type="button" data-team-flip-toggle aria-expanded="false" aria-label="Volver al perfil de Santiago Vélez">Volver</button>
				</div>
			</div>
		</article>

	</div>
	<!-- /wp:html -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"talent-application surface-theme--light-base","backgroundColor":"surface-light"} -->
<section class="wp-block-group talent-application surface-theme--light-base has-surface-light-background-color has-background">
	<!-- wp:group {"className":"section-heading--editorial talent-application__heading"} -->
	<div class="wp-block-group section-heading--editorial talent-application__heading">
		<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">Postulación</p><!-- /wp:paragraph -->
		<!-- wp:heading {"level":2} -->
		<h2 class="wp-block-heading">Donde el talento se convierte en trayectoria. <em class="aaa-text-emphasis">Conozca lo que significa ser parte de AAA.</em></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"className":"talent-application__intro"} -->
		<p class="talent-application__intro">Crezca junto a un equipo que entiende el rigor, el criterio y la excelencia como parte de cada desafío.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:html -->
	<div class="talent-form">
		<!--
		Reemplazar este bloque por el shortcode de Contact Form 7 una vez creado
		el formulario "Postulación" (ver WORDPRESS-SETUP.md § Formularios) — por
		ejemplo [contact-form-7 id="..." title="Postulación"].
		-->
		<div class="talent-form__field">
			<label for="tf-nombre">Nombre completo</label>
			<input type="text" id="tf-nombre" name="nombre" required>
		</div>
		<div class="talent-form__field">
			<label for="tf-email">Correo electrónico</label>
			<input type="email" id="tf-email" name="email" required>
		</div>
		<div class="talent-form__field talent-form__field--wide">
			<label for="tf-cv">Hoja de vida</label>
			<input type="file" id="tf-cv" name="cv" accept=".pdf,.doc,.docx" required>
		</div>
		<button class="wp-element-button" type="submit">Enviar postulación →</button>
	</div>
	<!-- /wp:html -->
</section>
<!-- /wp:group -->
