<?php
/**
 * Title: Portada interna (foto + título)
 * Slug: aaa-estudio-legal/hero-simple
 * Categories: aaa-estudio-legal
 * Description: Portada de las páginas internas (D170): foto de fondo a todo el ancho con velo navy, eyebrow y H1 con énfasis opcional en cursiva — la misma de Metodología y Quiénes somos. Cambie la foto, la etiqueta y el título desde los bloques. Asignar a la página la plantilla "Página con motion editorial (GSAP)". Reemplaza al hero de una columna del prototipo.
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
			<figure class="wp-block-image hero-shell__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/metodologia/hero-9095.webp' ) ); ?>" alt="Describa aquí la fotografía de portada" /></figure>
			<!-- /wp:image -->
			<!-- wp:group {"className":"hero-shell__scrim"} --><div class="wp-block-group hero-shell__scrim"></div><!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"hero-shell__content"} -->
		<div class="wp-block-group hero-shell__content">
			<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">Etiqueta de la sección</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":1,"className":"hero__title"} -->
			<h1 class="wp-block-heading hero__title">Título de la página, <em class="aaa-text-emphasis">con énfasis en cursiva.</em></h1>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
