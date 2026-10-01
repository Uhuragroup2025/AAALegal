<?php
/**
 * Title: Trabaja con nosotros — página completa
 * Slug: aaa-estudio-legal/trabaja-con-nosotros-full
 * Categories: aaa-estudio-legal
 * Description: Página "Trabaja con nosotros" completa (prototype/trabaja-con-nosotros.html + estructura y copy del cliente de la PPTX "Estructura y Copies", láminas 23–24 — D124): hero editorial, "¿Por qué trabajar con nosotros?", "Vacantes disponibles" (4 cargos) y Postulación con el formulario de Contact Form 7 titulado "Postulación" (nombre, teléfono, cargo de interés y hoja de vida — ver WORDPRESS-SETUP.md § 7bis). Asignar la plantilla "Página con motion editorial (GSAP)" a esta página.
 *
 * @package aaa-estudio-legal
 */
?>
<!-- wp:group {"tagName":"section","className":"hero-immersive hero--editorial hero--editorial--careers is-dark-surface","align":"full"} -->
<section class="wp-block-group alignfull hero-immersive hero--editorial hero--editorial--careers is-dark-surface">
	<!-- wp:group {"className":"hero-shell"} -->
	<div class="wp-block-group hero-shell">
		<!-- wp:group {"className":"hero-shell__media"} -->
		<div class="wp-block-group hero-shell__media">
			<!-- wp:image {"className":"hero-shell__img"} -->
			<figure class="wp-block-image hero-shell__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/trabaja/hero.webp' ) ); ?>" alt="Integrantes de AAA Estudio Legal trabajando en la oficina" /></figure>
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

<!-- wp:group {"tagName":"section","className":"why-work surface-theme--light-base aaa-section","backgroundColor":"surface-light","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull why-work surface-theme--light-base aaa-section has-surface-light-background-color has-background">
	<!-- wp:group {"className":"why-work__grid aaa-motion-chapter"} -->
	<div class="wp-block-group why-work__grid aaa-motion-chapter">
		<!-- wp:group {"className":"why-work__gallery"} -->
		<div class="wp-block-group why-work__gallery">
			<!-- wp:image {"className":"why-work__photo aaa-motion-media"} -->
			<figure class="wp-block-image why-work__photo aaa-motion-media"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/trabaja/por-que-principal.webp' ) ); ?>" alt="Dos integrantes del equipo de AAA Estudio Legal sonriendo en su puesto de trabajo" /></figure>
			<!-- /wp:image -->
			<!-- wp:image {"className":"why-work__photo"} -->
			<figure class="wp-block-image why-work__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/trabaja/por-que-cultura.webp' ) ); ?>" alt="Integrante de AAA Estudio Legal con una taza de la firma" /></figure>
			<!-- /wp:image -->
			<!-- wp:image {"className":"why-work__photo"} -->
			<figure class="wp-block-image why-work__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/trabaja/por-que-dia-a-dia.webp' ) ); ?>" alt="Integrante de AAA Estudio Legal atendiendo desde su escritorio" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"why-work__copy section-heading--editorial aaa-motion-section-title"} -->
		<div class="wp-block-group why-work__copy section-heading--editorial aaa-motion-section-title">
			<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">Talento AAA</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading">¿Por qué trabajar <em class="aaa-text-emphasis">con nosotros?</em></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"why-work__lead"} --><p class="why-work__lead">En AAA creemos que el crecimiento de nuestra organización comienza con el crecimiento de nuestro talento.</p><!-- /wp:paragraph -->
			<!-- wp:paragraph --><p>Somos un equipo en constante evolución, donde cada persona aporta sus conocimientos, ideas y experiencia para alcanzar objetivos comunes. Trabajar con nosotros significa formar parte de un entorno profesional que promueve el aprendizaje, el desarrollo de habilidades y el crecimiento profesional.</p><!-- /wp:paragraph -->
			<!-- wp:paragraph --><p>Haz parte de AAA y construye con nosotros una nueva etapa de crecimiento, aprendizaje y oportunidades.</p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","anchor":"vacantes","className":"jobs surface-theme--dark-primary is-dark-surface aaa-section","backgroundColor":"navy-deep","textColor":"white","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull jobs surface-theme--dark-primary is-dark-surface aaa-section has-white-color has-navy-deep-background-color has-text-color has-background" id="vacantes">
	<!-- wp:group {"className":"jobs__head section-heading--editorial aaa-motion-section-title"} -->
	<div class="wp-block-group jobs__head section-heading--editorial aaa-motion-section-title">
		<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">Oportunidades</p><!-- /wp:paragraph -->
		<!-- wp:heading {"level":2} -->
		<h2 class="wp-block-heading">Vacantes <em class="aaa-text-emphasis">disponibles.</em></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"jobs-board"} -->
	<div class="wp-block-group jobs-board">
		<!-- wp:group {"className":"job-card aaa-reveal aaa-stagger-0"} -->
		<div class="wp-block-group job-card aaa-reveal aaa-stagger-0">
			<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Abogado junior</h3><!-- /wp:heading -->
			<!-- wp:list {"className":"job-card__meta"} -->
			<ul class="wp-block-list job-card__meta">
				<!-- wp:list-item --><li>Con o sin experiencia</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li>Con tarjeta profesional</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li>Contrato indefinido</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li>Cali</li><!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
			<!-- wp:paragraph {"className":"job-card__cta"} --><p class="job-card__cta"><a href="#postulacion" aria-label="Postularme a la vacante de Abogado junior">Postularme →</a></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"job-card aaa-reveal aaa-stagger-1"} -->
		<div class="wp-block-group job-card aaa-reveal aaa-stagger-1">
			<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Abogado senior</h3><!-- /wp:heading -->
			<!-- wp:list {"className":"job-card__meta"} -->
			<ul class="wp-block-list job-card__meta">
				<!-- wp:list-item --><li>Con o sin experiencia</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li>Con tarjeta profesional</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li>Contrato indefinido</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li>Cali</li><!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
			<!-- wp:paragraph {"className":"job-card__cta"} --><p class="job-card__cta"><a href="#postulacion" aria-label="Postularme a la vacante de Abogado senior">Postularme →</a></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"job-card aaa-reveal aaa-stagger-2"} -->
		<div class="wp-block-group job-card aaa-reveal aaa-stagger-2">
			<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Dependiente judicial</h3><!-- /wp:heading -->
			<!-- wp:list {"className":"job-card__meta"} -->
			<ul class="wp-block-list job-card__meta">
				<!-- wp:list-item --><li>Con o sin experiencia</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li>Estudiante de derecho</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li>Contrato indefinido</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li>Cali</li><!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
			<!-- wp:paragraph {"className":"job-card__cta"} --><p class="job-card__cta"><a href="#postulacion" aria-label="Postularme a la vacante de Dependiente judicial">Postularme →</a></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"job-card aaa-reveal aaa-stagger-3"} -->
		<div class="wp-block-group job-card aaa-reveal aaa-stagger-3">
			<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Auxiliar jurídico</h3><!-- /wp:heading -->
			<!-- wp:list {"className":"job-card__meta"} -->
			<ul class="wp-block-list job-card__meta">
				<!-- wp:list-item --><li>Con o sin experiencia</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li>Recién graduado</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li>Contrato indefinido</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li>Cali</li><!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
			<!-- wp:paragraph {"className":"job-card__cta"} --><p class="job-card__cta"><a href="#postulacion" aria-label="Postularme a la vacante de Auxiliar jurídico">Postularme →</a></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","anchor":"postulacion","className":"talent-application surface-theme--light-base aaa-section","backgroundColor":"surface-light","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull talent-application surface-theme--light-base aaa-section has-surface-light-background-color has-background" id="postulacion">
	<!-- wp:group {"className":"talent-application__heading section-heading--editorial aaa-motion-section-title"} -->
	<div class="wp-block-group talent-application__heading section-heading--editorial aaa-motion-section-title">
		<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">Postulación</p><!-- /wp:paragraph -->
		<!-- wp:heading {"level":2} -->
		<h2 class="wp-block-heading">Donde el talento se convierte en trayectoria. <em class="aaa-text-emphasis">Conozca lo que significa ser parte de AAA.</em></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"className":"talent-application__intro"} -->
		<p class="talent-application__intro">Crezca junto a un equipo que entiende el rigor, el criterio y la excelencia como parte de cada desafío.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:shortcode -->
[contact-form-7 title="Postulación" html_class="talent-form talent-form--open"]
	<!-- /wp:shortcode -->
</section>
<!-- /wp:group -->
